<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'servicemesh',
        'version' => '2020-01-11',
    ],
    'directories' => [
        [
            'id' => 182044,
            'title' => '产品信息',
            'type' => 'directory',
            'children' => [
                'DescribeMetadata',
            ],
        ],
        [
            'id' => 151629,
            'title' => '网格实例',
            'type' => 'directory',
            'children' => [
                'CreateServiceMesh',
                'DeleteServiceMesh',
                'ModifyServiceMeshName',
                'UpdateMeshFeature',
                'RevokeKubeconfig',
                'DescribeServiceMeshes',
                'DescribeServiceMeshDetail',
                'DescribeServiceMeshKubeconfig',
                'DescribeServiceMeshAdditionalStatus',
                'DescribeVersions',
            ],
        ],
        [
            'id' => 151641,
            'title' => '网格管理',
            'type' => 'directory',
            'children' => [
                'ReActivateAudit',
                'DescribeNodesInstanceType',
                'DescribeCCMVersion',
                'GetCaCert',
            ],
        ],
        [
            'id' => 167520,
            'title' => '权限管理',
            'type' => 'directory',
            'children' => [
                'GrantUserPermissions',
                'DescribeUserPermissions',
                'DescribeUsersWithPermissions',
            ],
        ],
        [
            'id' => 151648,
            'title' => '网格资源',
            'type' => 'directory',
            'children' => [
                'UpdateMeshCRAggregation',
                'ModifyApiServerEipResource',
                'DescribeVSwitches',
                'DescribeVpcs',
                'DescribeCens',
                'DescribeCrTemplates',
                'DescribeEipResources',
            ],
        ],
        [
            'id' => 151653,
            'title' => '数据面组件管理',
            'type' => 'directory',
            'children' => [
                'UpdateNamespaceScopeSidecarConfig',
                'UpdateIstioInjectionConfig',
                'DescribeServiceMeshProxyStatus',
                'DescribeNamespaceScopeSidecarConfig',
            ],
        ],
        [
            'id' => 151680,
            'title' => '集群',
            'type' => 'directory',
            'children' => [
                'AddClusterIntoServiceMesh',
                'RemoveClusterFromServiceMesh',
                'UpdateASMNamespaceFromGuestCluster',
                'DescribeServiceMeshClusters',
                'DescribeClustersInServiceMesh',
                'DescribeGuestClusterPods',
                'DescribeGuestClusterNamespaces',
                'DescribeReusableSlb',
                'GetRegisteredServiceEndpoints',
                'GetRegisteredServiceNamespaces',
            ],
        ],
        [
            'id' => 151657,
            'title' => 'ASM网关',
            'type' => 'directory',
            'children' => [
                'CreateASMGateway',
                'CreateIstioGatewayRoutes',
                'CreateGatewaySecret',
                'CreateIstioGatewayDomains',
                'DeleteGatewayRoute',
                'DeleteGatewaySecret',
                'DeleteIstioGatewayDomains',
                'UpdateASMGateway',
                'UpdateASMGatewayImportedServices',
                'UpdateIstioGatewayRoutes',
                'UpdateIstioRouteAdditionalStatus',
                'DescribeImportedServicesDetail',
                'DescribeASMGatewayImportedServices',
                'DescribeIstioGatewayRouteDetail',
                'DescribeGatewaySecretDetails',
                'DescribeIstioGatewayDomains',
                'DescribeIstioGatewayRoutes',
            ],
        ],
        [
            'id' => 151664,
            'title' => '可观测性',
            'type' => 'directory',
            'children' => [
                'DescribeClusterGrafana',
                'DescribeClusterPrometheus',
                'DescribeServiceMeshLogs',
                'DescribeGuestClusterAccessLogDashboards',
                'GetGrafanaDashboardUrl',
            ],
        ],
        [
            'id' => 151669,
            'title' => '升级',
            'type' => 'directory',
            'children' => [
                'UpgradeMeshVersion',
                'UpgradeMeshEditionPartially',
                'DescribeUpgradeVersion',
                'DescribeServiceMeshUpgradeStatus',
            ],
        ],
        [
            'id' => 182047,
            'title' => '流量泳道',
            'type' => 'directory',
            'children' => [
                'CreateSwimLane',
                'CreateSwimLaneGroup',
                'DeleteSwimLane',
                'DeleteSwimLaneGroup',
                'UpdateSwimLane',
                'UpdateSwimLaneGroup',
                'GetSwimLaneDetail',
                'GetSwimLaneGroupList',
                'GetSwimLaneList',
            ],
        ],
        [
            'id' => 181960,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'GetDeploymentBySelector',
                'UpdateControlPlaneLogConfig',
                'UntagResources',
                'ListTagResources',
                'TagResources',
                'UpdateWaypoint',
                'CreateWaypoint',
                'DeleteWaypoint',
                'ListWaypoints',
                'ListServiceAccounts',
            ],
        ],
        [
            'id' => 151673,
            'title' => '虚拟机',
            'type' => 'directory',
            'children' => [
                'AddVMIntoServiceMesh',
                'RemoveVMFromServiceMesh',
                'GetVmMeta',
                'GetVmAppMeshInfo',
                'DescribeVMsInServiceMesh',
                'DescribeServiceMeshVMs',
                'AddVmAppToMesh',
                'RemoveVmAppFromMesh',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'UpdateMeshMultiClusterNetwork',
                'DescribeMeshMultiClusterNetwork',
                'ModifyPilotEipResource',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeMetadata' => [
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
                'abilityTreeCode' => '17611',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh4LB119',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F93DDAD7-6E04-5AC3-86F4-852708******',
                            ],
                            'MetaData' => [
                                'description' => '服务网格ASM元数据，包含ASM产品的基本信息。',
                                'type' => 'object',
                                'properties' => [
                                    'VersionCrds' => [
                                        'description' => 'ASM各版本的CRD信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '版本CRD信息。',
                                            'type' => 'object',
                                            'example' => '{"1.5":[{"kind":"DestinationRule","api_group":"networking.istio.io","id":"2","api_version":"networking.istio.io/v1alpha3"}]}',
                                        ],
                                    ],
                                    'Versions' => [
                                        'description' => 'ASM版本列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '版本信息。',
                                            'type' => 'string',
                                            'example' => 'v1.14.3.87-g96cf7305-aliyun',
                                        ],
                                    ],
                                    'Regions' => [
                                        'description' => 'ASM可用地域列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                    ],
                                    'CurrentVersion' => [
                                        'description' => '当前版本。',
                                        'type' => 'string',
                                        'example' => 'v1.14.3.87-g96cf7305-aliyun',
                                    ],
                                    'VersionRegistry' => [
                                        'description' => 'ASM版本对应的Istio版本。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'ASM版本对应的Istio版本。',
                                            'type' => 'object',
                                            'example' => '{"v1.14.3.87-g96cf7305-aliyun": "1.14.3"}',
                                        ],
                                    ],
                                    'ProEdition' => [
                                        'description' => 'ASM商业版的版本信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Versions' => [
                                                'description' => 'ASM版本列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '版本信息。',
                                                    'type' => 'string',
                                                    'example' => 'v1.14.3.87-g96cf7305-aliyun',
                                                ],
                                            ],
                                            'CurrentVersion' => [
                                                'description' => '当前版本。',
                                                'type' => 'string',
                                                'example' => 'v1.14.3.87-g96cf7305-aliyun',
                                            ],
                                            'VersionRegistry' => [
                                                'description' => 'ASM版本对应的Istio版本。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'ASM版本对应的Istio版本。',
                                                    'type' => 'object',
                                                    'example' => '{"v1.14.3.87-g96cf7305-aliyun": "1.14.3"}',
                                                ],
                                            ],
                                            'VersionCrds' => [
                                                'description' => 'ASM各版本的CRD信息。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '版本CRD信息。',
                                                    'type' => 'object',
                                                    'example' => '{"1.5":[{"kind":"DestinationRule","api_group":"networking.istio.io","id":"2","api_version":"networking.istio.io/v1alpha3"}]}',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CompatibilityInfoList' => [
                                        'description' => 'ASM 与 K8s 版本兼容性列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'ASM 版本兼容的 K8s 版本范围信息',
                                            'type' => 'object',
                                            'example' => '{'."\n"
                                                .'        "k8s_version": {'."\n"
                                                .'          "MaxMajor": 1,'."\n"
                                                .'          "MaxMinor": 24,'."\n"
                                                .'          "MinMajor": 1,'."\n"
                                                .'          "MinMinor": 16'."\n"
                                                .'        },'."\n"
                                                .'        "asm_version": {'."\n"
                                                .'          "Major": 1,'."\n"
                                                .'          "Minor": 5'."\n"
                                                .'        }'."\n"
                                                .'      }',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F93DDAD7-6E04-5AC3-86F4-852708******\\",\\n  \\"MetaData\\": {\\n    \\"VersionCrds\\": [\\n      {\\n        \\"1.5\\": [\\n          {\\n            \\"kind\\": \\"DestinationRule\\",\\n            \\"api_group\\": \\"networking.istio.io\\",\\n            \\"id\\": \\"2\\",\\n            \\"api_version\\": \\"networking.istio.io/v1alpha3\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"Versions\\": [\\n      \\"v1.14.3.87-g96cf7305-aliyun\\"\\n    ],\\n    \\"Regions\\": [\\n      \\"cn-hangzhou\\"\\n    ],\\n    \\"CurrentVersion\\": \\"v1.14.3.87-g96cf7305-aliyun\\",\\n    \\"VersionRegistry\\": [\\n      {\\n        \\"v1.14.3.87-g96cf7305-aliyun\\": \\"1.14.3\\"\\n      }\\n    ],\\n    \\"ProEdition\\": {\\n      \\"Versions\\": [\\n        \\"v1.14.3.87-g96cf7305-aliyun\\"\\n      ],\\n      \\"CurrentVersion\\": \\"v1.14.3.87-g96cf7305-aliyun\\",\\n      \\"VersionRegistry\\": [\\n        {\\n          \\"v1.14.3.87-g96cf7305-aliyun\\": \\"1.14.3\\"\\n        }\\n      ],\\n      \\"VersionCrds\\": [\\n        {\\n          \\"1.5\\": [\\n            {\\n              \\"kind\\": \\"DestinationRule\\",\\n              \\"api_group\\": \\"networking.istio.io\\",\\n              \\"id\\": \\"2\\",\\n              \\"api_version\\": \\"networking.istio.io/v1alpha3\\"\\n            }\\n          ]\\n        }\\n      ]\\n    },\\n    \\"CompatibilityInfoList\\": [\\n      {\\n        \\"k8s_version\\": {\\n          \\"MaxMajor\\": 1,\\n          \\"MaxMinor\\": 24,\\n          \\"MinMajor\\": 1,\\n          \\"MinMinor\\": 16\\n        },\\n        \\"asm_version\\": {\\n          \\"Major\\": 1,\\n          \\"Minor\\": 5\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMetadataResponse>\\n    <RequestId>F93DDAD7-6E04-5AC3-86F4-852708******</RequestId>\\n    <MetaData>\\n        <VersionCrds/>\\n        <Versions>v1.14.3.87-g96cf7305-aliyun</Versions>\\n        <Regions>cn-hangzhou</Regions>\\n        <CurrentVersion>v1.14.3.87-g96cf7305-aliyun</CurrentVersion>\\n        <VersionRegistry/>\\n        <ProEdition>\\n            <Versions>v1.14.3.87-g96cf7305-aliyun</Versions>\\n            <CurrentVersion>v1.14.3.87-g96cf7305-aliyun</CurrentVersion>\\n            <VersionRegistry/>\\n            <VersionCrds/>\\n        </ProEdition>\\n    </MetaData>\\n</DescribeMetadataResponse>","errorExample":""}]',
            'title' => '获取服务网格ASM的基本信息',
            'summary' => '调用DescribeMetadata获取服务网格ASM的基本信息。',
        ],
        'CreateServiceMesh' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'IstioVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Istio版本号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1.5.4.1-g5960ec40-aliyun',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专有网络ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-xzelac2tw4ic7wz31****',
                    ],
                ],
                [
                    'name' => 'ApiServerPublicEip',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否使用公网地址暴露API Server。取值：'."\n"
                            ."\n"
                            .'- `true`：使用公网地址暴露API Server。'."\n"
                            ."\n"
                            .'- `false`：不使用公网地址暴露API Server。'."\n"
                            ."\n"
                            .'默认值：`false`。'."\n"
                            ."\n"
                            .'> 若配置为`false`则无法通过外网访问集群API Server。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Tracing',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用链路追踪。取值：'."\n"
                            ."\n"
                            .'- `true`：启用链路追踪。'."\n"
                            ."\n"
                            .'- `false`：不启用链路追踪。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mesh1',
                    ],
                ],
                [
                    'name' => 'VSwitches',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '虚拟交换机ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["vsw-xzegf5dndkbf4m6eg****"]',
                    ],
                ],
                [
                    'name' => 'TraceSampling',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '链路追踪采样百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'CustomizedZipkin',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否使用自建Zipkin。取值：'."\n"
                            ."\n"
                            .'- `true`：使用自建Zipkin。'."\n"
                            ."\n"
                            .'- `false`：使用阿里云链路追踪。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'LocalityLoadBalancing',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用服务就近访问。取值： '."\n"
                            ."\n"
                            .'- `true`：启用服务就近访问。'."\n"
                            ."\n"
                            .'- `false`：不启用服务就近访问。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'LocalityLBConf',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务就近访问配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"failover":[{"from":"cn-hangzhou","to":"cn-shanghai"}]}',
                    ],
                ],
                [
                    'name' => 'Telemetry',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启采集Prometheus监控指标（建议使用[阿里云Prometheus监控](https://arms.console.aliyun.com/)）。取值：'."\n"
                            ."\n"
                            .'- `true`：开启采集Prometheus监控指标。'."\n"
                            ."\n"
                            .'- `false`：不开启采集Prometheus监控指标。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'OpenAgentPolicy',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否集成开放策略代理（OPA）插件。取值：'."\n"
                            ."\n"
                            .'- `true`：集成开放策略代理（OPA）插件。'."\n"
                            ."\n"
                            .'- `false`：不集成开放策略代理（OPA）插件。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'OPALogLevel',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OPA代理容器日志级别。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'info',
                    ],
                ],
                [
                    'name' => 'OPARequestCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OPA代理容器的CPU资源请求，可以使用Kubernetes标准CPU表示形式。例如1为1核CPU。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'OPARequestMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OPA代理容器的内存资源请求，可以使用Kubernetes标准内存表示形式。例如1 Mi为1024 KB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '512Mi',
                    ],
                ],
                [
                    'name' => 'OPALimitCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OPA代理容器的CPU资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'OPALimitMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OPA代理容器的内存资源限制，可以使用Kubernetes标准内存表示形式。例如1 Mi为1024 KB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1024Mi',
                    ],
                ],
                [
                    'name' => 'EnableAudit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用网格审计（需要开通[阿里云日志服务](https://sls.console.aliyun.com/)）。取值：'."\n"
                            ."\n"
                            .'- `true`：启用网格审计。'."\n"
                            ."\n"
                            .'- `false`：不启用网格审计。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AuditProject',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网格审计对应的日志项目名称。'."\n"
                            ."\n"
                            .'默认值：mesh-log-{meshId}。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mesh-log-xxxx',
                    ],
                ],
                [
                    'name' => 'ClusterDomain',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '集群本地域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cluster.local',
                    ],
                ],
                [
                    'name' => 'ProxyRequestCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '代理容器的CPU请求资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100m',
                    ],
                ],
                [
                    'name' => 'ProxyRequestMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '代理容器的内存请求资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '128Mi',
                    ],
                ],
                [
                    'name' => 'ProxyLimitCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '代理容器的CPU限制资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2000m',
                    ],
                ],
                [
                    'name' => 'ProxyLimitMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '代理容器的内存限制资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1024Mi',
                    ],
                ],
                [
                    'name' => 'IncludeIPRanges',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '拦截对外访问的地址范围。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '*',
                    ],
                ],
                [
                    'name' => 'ExcludeIPRanges',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '排除拦截对外访问的地址范围。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100.100.10*.***',
                    ],
                ],
                [
                    'name' => 'ExcludeOutboundPorts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '以半角英文逗号（,）分隔的出站端口列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '80,81',
                    ],
                ],
                [
                    'name' => 'ExcludeInboundPorts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '以半角英文逗号（,）分隔的入站端口列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '80,81',
                    ],
                ],
                [
                    'name' => 'OpaEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用OPA。取值：'."\n"
                            ."\n"
                            .'- `true`：启用OPA。'."\n"
                            ."\n"
                            .'- `false`：不启用OPA。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'KialiEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用网格拓扑（需先开启采集Prometheus监控指标，当该项更新为`false`时，本项强制为`false`）。取值：'."\n"
                            ."\n"
                            .'- `true`：启用网格拓扑。'."\n"
                            ."\n"
                            .'- `false`：不启用网格拓扑。'."\n"
                            ."\n"
                            .'默认值：`false`。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AccessLogEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用访问日志。取值：'."\n"
                            ."\n"
                            .'- `true`：启用访问日志。'."\n"
                            ."\n"
                            .'- `false`：不启用访问日志。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CustomizedPrometheus',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否自定义Prometheus。取值：'."\n"
                            ."\n"
                            .'- `true`：自定义Prometheus。'."\n"
                            ."\n"
                            .'- `false`：不自定义Prometheus。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PrometheusUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义Prometheus服务地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://prometheus:9090',
                    ],
                ],
                [
                    'name' => 'RedisFilterEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用Redis Filter能力，取值：'."\n"
                            ."\n"
                            .'- `true`：启用Redis Filter能力。'."\n"
                            ."\n"
                            .'- `false`：不启用Redis Filter能力。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'MysqlFilterEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用MysqlFilter，取值：'."\n"
                            ."\n\n"
                            .'- `true`：启用MysqlFilter。'."\n"
                            ."\n"
                            .'- `false`：不启用MysqlFilter。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ThriftFilterEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用ThriftFilter。取值：'."\n"
                            ."\n"
                            .'- `true`：启用ThriftFilter。'."\n"
                            ."\n"
                            .'- `false`：不启用ThriftFilter。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'WebAssemblyFilterEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用WebAssemblyFilter。取值：'."\n"
                            ."\n\n"
                            .'- `true`：启用WebAssemblyFilter。'."\n"
                            ."\n"
                            .'- `false`：不启用WebAssemblyFilter。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'MSEEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用MSE微服务引擎。取值：'."\n"
                            ."\n\n"
                            .'- `true`：启用MSE微服务引擎。'."\n"
                            ."\n"
                            .'- `false`：不启用MSE微服务引擎。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DNSProxyingEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用DNS代理能力。取值：'."\n"
                            ."\n"
                            .'- `true`：启用DNS代理能力。'."\n"
                            ."\n"
                            .'- `false`：不启用DNS代理能力。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Edition',
                    'in' => 'formData',
                    'schema' => [
                        'description' => ' ASM实例版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Pro',
                    ],
                ],
                [
                    'name' => 'ConfigSourceEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用外部服务注册中心。取值：'."\n"
                            ."\n"
                            .'- `true`：启用外部服务注册中心。'."\n"
                            ."\n"
                            .'- `false`：不启用外部服务注册中心。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ConfigSourceNacosID',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Nacos注册中心实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mse-cn-tl326******',
                    ],
                ],
                [
                    'name' => 'DubboFilterEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用DubboFilter。取值：'."\n"
                            ."\n"
                            .'- `true`：启用DubboFilter。'."\n"
                            ."\n"
                            .'- `false`：不启用DubboFilter。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'FilterGatewayClusterConfig',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用Gateway配置过滤。取值：'."\n"
                            ."\n"
                            .'- `true`：启用Gateway配置过滤。'."\n"
                            ."\n"
                            .'- `false`：不启用Gateway配置过滤。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'EnableSDSServer',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用SDS服务。取值：'."\n"
                            ."\n"
                            .'- `true`：启用SDS服务。'."\n"
                            ."\n"
                            .'- `false`：不启用SDS服务。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AccessLogServiceEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用Envoy的gRPC日志服务（ALS）。取值：'."\n"
                            ."\n\n"
                            .'- `true`：启用Envoy的gRPC日志服务。'."\n"
                            ."\n"
                            .'- `false`：不启用Envoy的gRPC日志服务。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AccessLogServiceHost',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '启用Envoy的gRPC日志服务（ALS）的地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.0.0.0',
                    ],
                ],
                [
                    'name' => 'AccessLogServicePort',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '启用Envoy的gRPC日志服务（ALS）的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '9999',
                    ],
                ],
                [
                    'name' => 'GatewayAPIEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用Gateway API。取值：'."\n"
                            ."\n"
                            .'- `true`：启用Gateway API。'."\n"
                            ."\n"
                            .'- `false`：不启用Gateway API。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ControlPlaneLogEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用控制面日志采集。取值：'."\n"
                            ."\n"
                            .'- `true`：启用控制面日志采集。'."\n"
                            ."\n"
                            .'- `false`：不启用控制面日志采集。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ControlPlaneLogProject',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '控制面日志采集的SLS Project。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mesh-log-cf245a429b6ff4b6e97f20797758*****',
                    ],
                ],
                [
                    'name' => 'AccessLogFormat',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义访问日志的格式（需选择启用访问日志，否则自动忽略本项）。本项字符串为JSON格式，且JSON字符串中必须至少包含下述的键值：authority_for、bytes_received、bytes_sent、downstream_local_address、downstream_remote_address、duration、istio_policy_status、method、path、protocol、requested_server_name、response_code、response_flags、route_name、start_time、trace_id、upstream_cluster、upstream_host、upstream_local_address、upstream_service_time、upstream_transport_failure_reason、user_agent、x_forwarded_for。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"authority_for":"%REQ(:AUTHORITY)%","bytes_received":"%BYTES_RECEIVED%","bytes_sent":"%BYTES_SENT%","downstream_local_address":"%DOWNSTREAM_LOCAL_ADDRESS%","downstream_remote_address":"%DOWNSTREAM_REMOTE_ADDRESS%","duration":"%DURATION%","istio_policy_status":"%DYNAMIC_METADATA(istio.mixer:status)%","method":"%REQ(:METHOD)%","path":"%REQ(X-ENVOY-ORIGINAL-PATH?:PATH)%","protocol":"%PROTOCOL%","request_id":"%REQ(X-REQUEST-ID)%","requested_server_name":"%REQUESTED_SERVER_NAME%","response_code":"%RESPONSE_CODE%","response_flags":"%RESPONSE_FLAGS%","route_name":"%ROUTE_NAME%","start_time":"%START_TIME%","trace_id":"%REQ(X-B3-TRACEID)%","upstream_cluster":"%UPSTREAM_CLUSTER%","upstream_host":"%UPSTREAM_HOST%","upstream_local_address":"%UPSTREAM_LOCAL_ADDRESS%","upstream_service_time":"%RESP(X-ENVOY-UPSTREAM-SERVICE-TIME)%","upstream_transport_failure_reason":"%UPSTREAM_TRANSPORT_FAILURE_REASON%","user_agent":"%REQ(USER-AGENT)%","x_forwarded_for":"%REQ(X-FORWARDED-FOR)%"}',
                    ],
                ],
                [
                    'name' => 'AccessLogFile',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开启和关闭访问日志。取值：'."\n"
                            ."\n"
                            .'- “”：关闭访问日志。'."\n"
                            ."\n"
                            .'- `/dev/stdout`：开启访问日志。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/dev/stdout',
                    ],
                ],
                [
                    'name' => 'AccessLogProject',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '访问日志采集的SLS Project。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mesh-log-cf245a429b6ff4b6e97f20797758*****',
                    ],
                ],
                [
                    'name' => 'EnableCRHistory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用ASM的Istio资源历史版本管理功能。取值：'."\n"
                            ."\n"
                            .'- `true`：启用ASM的Istio资源历史版本管理功能。'."\n"
                            ."\n"
                            .'- `false`：不启用ASM的Istio资源历史版本管理功能。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CRAggregationEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用数据面集群Kubernetes API访问Istio资源（需ASM实例v1.9.7.93版本以上）。取值：'."\n"
                            ."\n"
                            .'- `true`：启用数据面集群Kubernetes API访问Istio资源。'."\n"
                            ."\n"
                            .'- `false`：不启用数据面集群Kubernetes API访问Istio资源。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ApiServerLoadBalancerSpec',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'APIServer 绑定的CLB规格。取值：简约型I（`slb.s1.small`）、标准型I（`slb.s2.small`）、标准型II（`slb.s2.medium`）、高阶型I（`slb.s3.small`）、高阶型II（`slb.s3.medium`）、超强型I（`slb.s3.large`）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'slb.s1.small',
                    ],
                ],
                [
                    'name' => 'PilotLoadBalancerSpec',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格控制面的Istio Pilot绑定的CLB规格。取值：简约型I（`slb.s1.small`）、标准型I（`slb.s2.small`）、标准型II（`slb.s2.medium`）、高阶型I（`slb.s3.small`）	、高阶型II（`slb.s3.medium`）、超强型I（`slb.s3.large`）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'slb.s1.small',
                    ],
                ],
                [
                    'name' => 'ChargeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'CLB付费类型。取值：'."\n"
                            ."\n"
                            .'- `PayOnDemand`：按量付费类型。'."\n"
                            ."\n"
                            .'- `PrePay`：包年包月类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PrePay',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '`ChargeType`为`PrePay`时生效。表示购买包年包月类型的CLB时，购买的月份。如果为1年，则输入12。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'CLB为包年包月类型时，是否自动续费。取值：'."\n"
                            ."\n"
                            .'- `true`：自动续费。'."\n"
                            ."\n"
                            .'- `false`：不自动续费。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AutoRenewPeriod',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '`ChargeType`为`PrePay`时生效。表示购买包年包月类型的CLB时，自动续费的时间。如果为购买时间小于1年，此参数表示自动续费多少个月；如果购买时长超过1年，此参数表示自动续费多少年。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'ClusterSpec',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例规格，取值：'."\n"
                            ."\n"
                            .'- `standard`：标准版。'."\n"
                            ."\n"
                            .'- `enterprise`：企业版。'."\n"
                            ."\n"
                            .'- `ultimate`：旗舰版。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'standard',
                    ],
                ],
                [
                    'name' => 'MultiBufferEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用基于MultiBuffer的TLS性能优化。取值：'."\n"
                            ."\n"
                            .'- `true`：开启。'."\n"
                            ."\n"
                            .'- `false`：不开启。'."\n"
                            ."\n"
                            .'默认值：`true`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'MultiBufferPollDelay',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'MultiBuffer开启状态同步时间。默认`30s`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30s',
                    ],
                ],
                [
                    'name' => 'UseExistingCA',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '使用已有的CA证书和私钥。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ExistingCaCert',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'CA证书（Base64 Encode格式），该参数一般用于自建Istio迁移ASM的场景下，对应自建Istio集群的istio-system命名空间下名称为istio-ca-secret的secret的ca-cert.pem文件内容。',
                        'type' => 'string',
                        'deprecated' => false,
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'ca cert内容，base64编码格式',
                    ],
                ],
                [
                    'name' => 'ExistingCaKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'CA Key（Base64 Encode格式）。该参数一般用于自建Istio迁移ASM的场景下，对应自建Istio集群的istio-system命名空间下名称为istio-ca-secret的secret的ca-key.pem文件内容。',
                        'type' => 'string',
                        'deprecated' => false,
                        'required' => false,
                        'example' => 'ca key内容，base64编码格式',
                    ],
                ],
                [
                    'name' => 'ExistingCaType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已有的证书类型： '."\n"
                            ."\n"
                            .'- 1：Istiod自签证书。对应istio-system命名空间下名称为istio-ca-secret的secret。若使用该类型，还需要提供`ExistingCaCert` 和`ExsitingCaKey`两个参数。'."\n"
                            ."\n"
                            .'- 2：Istiod外部证书。详情请参见[plugin ca cert](https://istio.io/latest/docs/tasks/security/cert-management/plugin-ca-cert/)。一般对应为istio-system命名空间下名称为cacerts的secret。 若使用该类型，还需要提供`ExisingRootCaCert`和`ExisingRootCaKey`两个参数。',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ExistingRootCaCert',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已有的根证书。',
                        'type' => 'string',
                        'deprecated' => false,
                        'required' => false,
                        'example' => '根证书内容，base64 编码格式',
                    ],
                ],
                [
                    'name' => 'ExistingRootCaKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已有的根证书对应的私钥。',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => 'root key的内容，base64编码格式',
                    ],
                ],
                [
                    'name' => 'CertChain',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '从CaCert到RootCert的证书链，至少包含两个证书。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'base64编码的PEM证书链。',
                    ],
                ],
                [
                    'name' => 'GuestCluster',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建网格时可以选择一个集群加入网格，为空时不会添加集群。该集群需要和网格在同一个VPC的同一个VSwitch中，且集群域名相同。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACK集群id',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '给服务网格实例打tag标签。包含以下信息：'."\n"
                            ."\n"
                            .'- key：标签名称。'."\n"
                            ."\n"
                            .'- value：标签值。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'env',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'prod',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableAmbient',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否为服务网格实例启用Ambient Mesh模式。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'ServiceMeshId' => [
                                'description' => '服务网格ID。',
                                'type' => 'string',
                                'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'ERR404',
                        'errorMessage' => 'Not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"ServiceMeshId\\": \\"c08ba3fd1e6484b0f8cc1ad8fe10d****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateServiceMeshResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n    <ServiceMeshId>c08ba3fd1e6484b0f8cc1ad8fe10d****</ServiceMeshId>\\n</CreateServiceMeshResponse>","errorExample":""}]',
            'title' => '创建一个服务网格实例',
            'summary' => '调用CreateServiceMesh创建一个服务网格实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteServiceMesh' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否强制删除ASM实例，取值：'."\n"
                            ."\n"
                            .'- ` true`：强制删除ASM实例'."\n"
                            ."\n"
                            .'- `false`：不强制删除ASM实例'."\n"
                            ."\n"
                            .'默认值： false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RetainResources',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'json格式的字符串，可以被解析为一个字符串数组。指定在删除网格时、需要保留的网格相关资源的列表，数组内的值是需要保留的资源的实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[" lb-bp1fxvl3q8akbj6m*****", "lb-bp1hoxkolggdw0y3*****"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结构体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '11fd0027-c27e-41bb-a565-75583054****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11fd0027-c27e-41bb-a565-75583054****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteServiceMeshResponse>\\n    <RequestId>11fd0027-c27e-41bb-a565-75583054****</RequestId>\\n</DeleteServiceMeshResponse>","errorExample":""}]',
            'title' => '删除一个服务网格实例',
            'summary' => '调用DeleteServiceMesh删除一个服务网格实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyServiceMeshName' => [
            'summary' => '调用ModifyServiceMeshName修改服务网格实例名称。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cdd30a90a7cea480ebcc7ff****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格的新名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-mesh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'EDDC0D86-2FC3-56FB-9213-96EB0A3523F1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EDDC0D86-2FC3-56FB-9213-96EB0A3523F1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyServiceMeshNameResponse>\\n    <RequestId>EDDC0D86-2FC3-56FB-9213-96EB0A3523F1</RequestId>\\n</ModifyServiceMeshNameResponse>","errorExample":""}]',
            'title' => '修改服务网格实例名称',
        ],
        'UpdateMeshFeature' => [
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
                'abilityTreeCode' => '17645',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh4LB119',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'Tracing',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '启用链路追踪（需要开通[可观测链路OpenTelemetry版](https://tracing-analysis.console.aliyun.com/)）。取值：'."\n"
                            ."\n"
                            .'- `true`：启用链路追踪。'."\n"
                            ."\n"
                            .'- `false`：不启用链路追踪。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'TraceSampling',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '链路追踪采样百分比。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'TraceCustomTags',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义链路追踪标签设置，格式为JSON，结构为：'."\n"
                            ."\n"
                            .'```'."\n"
                            .'{'."\n"
                            .'    "name1": CustomTag,'."\n"
                            .'    "name2": CustomTag'."\n"
                            .'}'."\n"
                            ."\n"
                            .'```'."\n"
                            .'CustomTag结构为：literal、header或environment，请任选其一。'."\n"
                            .'```'."\n"
                            .'{'."\n"
                            .'    "literal": {'."\n"
                            .'        "value": "固定值"'."\n"
                            .'    }'."\n"
                            .'    "header": {'."\n"
                            .'        "name": "HEADER名称",'."\n"
                            .'        "defaultValue": "若指定HEADER不存在，使用的默认值。"'."\n"
                            .'    }'."\n"
                            .'    "environment": {'."\n"
                            .'        "name": "环境变量名称",'."\n"
                            .'        "defaultValue": "若指定环境变量不存在，使用的默认值。"'."\n"
                            .'    }'."\n"
                            .'}'."\n"
                            .'```',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"mytag": {"literal":{"value":"test"}}}',
                    ],
                ],
                [
                    'name' => 'TraceMaxPathTagLength',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'HttpUrl Span标签中包含的请求路径的最大长度，默认值为`256`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '256',
                    ],
                ],
                [
                    'name' => 'LocalityLoadBalancing',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用跨地域负载均衡，取值：'."\n"
                            ."\n"
                            .'- `true`：启用跨地域负载均衡。'."\n"
                            ."\n"
                            .'- `false`：不启用跨地域负载均衡。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'LocalityLBConf',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '跨地域负载均衡配置，取值：'."\n"
                            .'    '."\n"
                            .'- `failover`：跨地域故障转移配置，例如：'."\n"
                            .'  '."\n"
                            .'```'."\n"
                            .'    failover: [//  struct，跨地域故障转移配置。'."\n"
                            .'        {'."\n"
                            .'            // 当北京地域服务故障时，流量转移到杭州同服务。'."\n"
                            .'            from: "cn-beijing", '."\n"
                            .'            to: "cn-hangzhou",'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'```'."\n"
                            ."\n"
                            .'- `distribute`：跨地域流量分布配置，例如：'."\n"
                            ."\n"
                            .'```'."\n"
                            .'distribute: [ // struct, 跨地域流量分布配置 。'."\n"
                            .'        {'."\n"
                            .'            // 路由到北京地域的流量70%分配到北京，30%分配到杭州。'."\n"
                            .'            "from": "cn-beijing",'."\n"
                            .'            "to": {'."\n"
                            .'                "cn-beijing": 70,'."\n"
                            .'                "cn-hangzhou": 30,'."\n"
                            .'            }'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'```'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"failover":[{"from":"cn-hangzhou","to":"cn-shanghai"}]}',
                    ],
                ],
                [
                    'name' => 'Telemetry',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启采集Prometheus监控指标（建议使用[阿里云Prometheus监控](https://arms.console.aliyun.com/)），取值：'."\n"
                            ."\n"
                            .'- `true`：开启采集Prometheus监控指标。'."\n"
                            ."\n"
                            .'- `false`：不开启采集Prometheus监控指标。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'OpenAgentPolicy',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否集成开放策略代理（OPA）插件，取值：'."\n"
                            ."\n"
                            .'- `true`：集成开放策略代理（OPA）插件。'."\n"
                            ."\n"
                            .'- `false`：不集成开放策略代理（OPA）插件。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'OPALogLevel',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OPA代理容器日志级别，取值：'."\n"
                            ."\n"
                            .'- `info`：输出所有信息。'."\n"
                            ."\n"
                            .'- `debug`：输出调试信息和错误信息。'."\n"
                            ."\n"
                            .'- `error`：仅输出错误信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'info',
                    ],
                ],
                [
                    'name' => 'OPARequestCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OPA代理容器的CPU资源请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'OPARequestMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OPA代理容器的内存资源请求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '512Mi',
                    ],
                ],
                [
                    'name' => 'OPALimitCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OPA代理容器的CPU资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'OPALimitMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OPA代理容器的内存资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1024Mi',
                    ],
                ],
                [
                    'name' => 'EnableAudit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用网格审计（需要开通[阿里云日志服务](https://sls.console.aliyun.com/)），取值：'."\n"
                            ."\n"
                            .'- `true`：启用网格审计。'."\n"
                            ."\n"
                            .'- `false`：不启用网格审计。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AuditProject',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网格审计对应的日志项目名称。'."\n"
                            ."\n"
                            .'默认值：`mesh-log-{meshId}`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mesh-log-c08ba3fd1e64xxb0f8cc1ad8****',
                    ],
                ],
                [
                    'name' => 'CustomizedZipkin',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用自建Zipkin，取值：'."\n"
                            ."\n\n"
                            .'- `true`：启用自建Zipkin。'."\n"
                            ."\n"
                            .'- `false`：不启用自建Zipkin。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'OutboundTrafficPolicy',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '对外部服务的访问策略，取值：'."\n"
                            ."\n"
                            .'- `ALLOW_ANY`：允许访问所有外部服务。'."\n"
                            ."\n"
                            .'- `REGISTRY_ONLY`：只能访问注册到网格内的服务。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALLOW_ANY',
                    ],
                ],
                [
                    'name' => 'ProxyRequestCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'CPU所需资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100m',
                    ],
                ],
                [
                    'name' => 'ProxyRequestMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内存所需资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '128Mi',
                    ],
                ],
                [
                    'name' => 'ProxyLimitCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'CPU资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2000m',
                    ],
                ],
                [
                    'name' => 'ProxyLimitMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内存资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1024Mi',
                    ],
                ],
                [
                    'name' => 'IncludeIPRanges',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '拦截对外访问的地址范围。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '*',
                    ],
                ],
                [
                    'name' => 'ExcludeIPRanges',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '排除拦截对外访问的地址范围。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100.100.XXX.XXX',
                    ],
                ],
                [
                    'name' => 'ExcludeOutboundPorts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '以英文半角逗号（,）分隔的出站端口列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '80,81',
                    ],
                ],
                [
                    'name' => 'IncludeInboundPorts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设置端口使Inbound流量经过Sidecar。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '80,81',
                    ],
                ],
                [
                    'name' => 'ExcludeInboundPorts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '以英文半角逗号（,）分隔的入站端口列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '80,81',
                    ],
                ],
                [
                    'name' => 'EnableNamespacesByDefault',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否为所有命名空间开启自动注入功能，取值：'."\n"
                            ."\n"
                            .'- `true`：为所有命名空间开启自动注入功能。'."\n"
                            ."\n"
                            .'- `false`：不为所有命名空间开启自动注入功能。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AutoInjectionPolicyEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启通过Pod Annotations实现自动注入Sidecar，取值：'."\n"
                            ."\n\n"
                            .'- `true`：开启通过Pod Annotations实现自动注入Sidecar。'."\n"
                            ."\n"
                            .'- `false`：不开启通过Pod Annotations实现自动注入Sidecar。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'SidecarInjectorRequestCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar注入器Pod的CPU请求资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1000m',
                    ],
                ],
                [
                    'name' => 'SidecarInjectorRequestMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar注入器Pod的内存请求资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '512Mi',
                    ],
                ],
                [
                    'name' => 'SidecarInjectorLimitCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar注入器Pod的CPU限制资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4000m',
                    ],
                ],
                [
                    'name' => 'SidecarInjectorLimitMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar注入器Pod的内存限制资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2048Mi',
                    ],
                ],
                [
                    'name' => 'SidecarInjectorWebhookAsYaml',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '其他自动注入Sidecar的配置（YAML格式）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"injectedAnnotations":{"test/istio-init":"runtime/default2","test/istio-proxy":"runtime/default"},"replicaCount":2,"nodeSelector":{"beta.kubernetes.io/os":"linux"}}',
                    ],
                ],
                [
                    'name' => 'CniEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用CNI，取值：'."\n"
                            ."\n"
                            .'- `true`：启用CNI。'."\n"
                            ."\n"
                            .'- `false`：不启用CNI。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CniExcludeNamespaces',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'CNI排除的命名空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'kube-system',
                    ],
                ],
                [
                    'name' => 'OpaEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用OPA，取值：'."\n"
                            ."\n"
                            .'- `true`：启用OPA。'."\n"
                            ."\n"
                            .'- `false`：不启用OPA。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Http10Enabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否支持HTTP1.0，取值：'."\n"
                            ."\n\n"
                            .'- `true`：支持HTTP1.0。'."\n"
                            ."\n"
                            .'- `false`：不支持HTTP1.0。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'KialiEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用网格拓扑（需先开启采集Prometheus监控指标，当该项更新为`false`时，本项强制为`false`），取值：'."\n"
                            ."\n"
                            .'- `true`：启用网格拓扑。'."\n"
                            ."\n"
                            .'- `false`：不启用网格拓扑。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CustomizedPrometheus',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否自定义Prometheus，取值：'."\n"
                            ."\n"
                            .'- `true`：自定义Prometheus。'."\n"
                            ."\n"
                            .'- `false`：不自定义Prometheus。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PrometheusUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Prometheus服务地址（非自定义情况下，使用ARMS地址格式）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://prometheus:9090',
                    ],
                ],
                [
                    'name' => 'AccessLogEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用访问日志采集，取值：'."\n"
                            ."\n"
                            .'- `true`：启用访问日志采集。'."\n"
                            ."\n"
                            .'- `false`：不启用访问日志采集。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'MSEEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用MSE微服务引擎，取值：'."\n"
                            ."\n"
                            .'- `true`：启用MSE微服务引擎。'."\n"
                            ."\n"
                            .'- `false`：不启用MSE微服务引擎。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'deprecated' => true,
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RedisFilterEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用RedisFilter，取值：'."\n"
                            ."\n\n"
                            .'- `true`：启用RedisFilter。'."\n"
                            ."\n"
                            .'- `false`：不启用RedisFilter。'."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'MysqlFilterEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用MysqlFilter，取值：'."\n"
                            ."\n"
                            .'- `true`：启用MysqlFilter。'."\n"
                            ."\n"
                            .'- `false`：不启用MysqlFilter。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ThriftFilterEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用ThriftFilter，取值：'."\n"
                            ."\n"
                            .'- `true`：启用ThriftFilter。'."\n"
                            ."\n"
                            .'- `false`：不启用ThriftFilter。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'WebAssemblyFilterEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用WebAssemblyFilter，取值：'."\n"
                            ."\n"
                            .'- `true`：启用WebAssemblyFilter。'."\n"
                            ."\n"
                            .'- `false`：不启用WebAssemblyFilter。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DNSProxyingEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用DNS Proxying，取值：'."\n"
                            ."\n"
                            .'- `true`：启用DNS Proxying。'."\n"
                            ."\n"
                            .'- `false`：不启用DNS Proxying。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DubboFilterEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用DubboFilter，取值：'."\n"
                            ."\n"
                            .'- `true`：启用DubboFilter。'."\n"
                            ."\n"
                            .'- `false`：不启用DubboFilter。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'FilterGatewayClusterConfig',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用Gateway配置过滤，取值：'."\n"
                            ."\n"
                            .'- `true`：启用Gateway配置过滤。'."\n"
                            ."\n"
                            .'- `false`：不启用Gateway配置过滤。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'EnableSDSServer',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用SDS服务，取值：'."\n"
                            ."\n"
                            .'- `true`：启用SDS服务。'."\n"
                            ."\n"
                            .'- `false`：不启用SDS服务。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AccessLogServiceEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用Envoy的gRPC日志服务，取值：'."\n"
                            ."\n"
                            .'- `true`：启用Envoy的gRPC日志服务（ALS）。'."\n"
                            ."\n"
                            .'- `false`：不启用Envoy的gRPC日志服务（ALS）。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AccessLogServiceHost',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '启用Envoy的gRPC日志服务（ALS）的地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.0.0.0',
                    ],
                ],
                [
                    'name' => 'AccessLogServicePort',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '启用Envoy的gRPC日志服务（ALS）的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '9999',
                    ],
                ],
                [
                    'name' => 'GatewayAPIEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用Gateway API，取值：'."\n"
                            ."\n"
                            .'- `true`：启用Gateway API。'."\n"
                            ."\n"
                            .'- `false`：不启用Gateway API。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ConfigSourceEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用外部服务注册中心，取值：'."\n"
                            ."\n"
                            .'- `true`：启用外部服务注册中心。'."\n"
                            ."\n"
                            .'- `false`：不启用外部服务注册中心。'."\n"
                            ."\n"
                            .'默认值：`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ConfigSourceNacosID',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Nacos注册中心实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mse-cn-tl326******',
                    ],
                ],
                [
                    'name' => 'AccessLogFormat',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义访问日志的格式（需先启用访问日志，否则自动忽略本项）。本项字符串为JSON格式，且JSON字符串中必须至少包含以下键值：authority\\_for、bytes\\_received、bytes\\_sent、downstream\\_local\\_address、downstream\\_remote\\_address、duration、istio\\_policy\\_status、method、path、protocol、requested\\_server\\_name、response\\_code、response\\_flags、route\\_name、start\\_time、trace\\_id、upstream\\_cluster、upstream\\_host、upstream\\_local\\_address、upstream\\_service\\_time、upstream\\_transport\\_failure\\_reason、user\\_agent、x\\_forwarded\\_for。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"authority_for":"%REQ(:AUTHORITY)%","bytes_received":"%BYTES_RECEIVED%","bytes_sent":"%BYTES_SENT%","downstream_local_address":"%DOWNSTREAM_LOCAL_ADDRESS%","downstream_remote_address":"%DOWNSTREAM_REMOTE_ADDRESS%","duration":"%DURATION%","istio_policy_status":"%DYNAMIC_METADATA(istio.mixer:status)%","method":"%REQ(:METHOD)%","path":"%REQ(X-ENVOY-ORIGINAL-PATH?:PATH)%","protocol":"%PROTOCOL%","request_id":"%REQ(X-REQUEST-ID)%","requested_server_name":"%REQUESTED_SERVER_NAME%","response_code":"%RESPONSE_CODE%","response_flags":"%RESPONSE_FLAGS%","route_name":"%ROUTE_NAME%","start_time":"%START_TIME%","trace_id":"%REQ(X-B3-TRACEID)%","upstream_cluster":"%UPSTREAM_CLUSTER%","upstream_host":"%UPSTREAM_HOST%","upstream_local_address":"%UPSTREAM_LOCAL_ADDRESS%","upstream_service_time":"%RESP(X-ENVOY-UPSTREAM-SERVICE-TIME)%","upstream_transport_failure_reason":"%UPSTREAM_TRANSPORT_FAILURE_REASON%","user_agent":"%REQ(USER-AGENT)%","x_forwarded_for":"%REQ(X-FORWARDED-FOR)%"}',
                    ],
                ],
                [
                    'name' => 'AccessLogFile',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开启和关闭访问日志，取值：'."\n"
                            ."\n"
                            .'- `“”`：关闭访问日志。'."\n"
                            ."\n"
                            .'- `/dev/stdout`：开启访问日志。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '“”',
                    ],
                ],
                [
                    'name' => 'AccessLogProject',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义日志服务SLS采集的Project。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mesh-log-cf245a429b6ff4b6e97f20797758e****',
                    ],
                ],
                [
                    'name' => 'EnableCRHistory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设置是否启用ASM的Istio资源历史版本管理功能。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'CRAggregationEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设置是否启用数据面集群Kubernetes API访问Istio资源（需ASM实例v1.9.7.93版本以上）。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'TerminationDrainDuration',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'istio-proxy终止等待时长，例如5秒，输入为5s。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5s',
                    ],
                ],
                [
                    'name' => 'ProxyInitCPUResourceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'istio-init初始化容器CPU资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2000m',
                    ],
                ],
                [
                    'name' => 'ProxyInitMemoryResourceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'istio-init初始化容器内存资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1024Mi',
                    ],
                ],
                [
                    'name' => 'ProxyInitCPUResourceRequest',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'istio-init初始化容器CPU资源所需。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10m',
                    ],
                ],
                [
                    'name' => 'ProxyInitMemoryResourceRequest',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'istio-init初始化容器内存资源所需。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10Mi',
                    ],
                ],
                [
                    'name' => 'Lifecycle',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'istio-proxy生命周期。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"postStart":{"exec":{"command":["pilot-agent","wait"]}},"preStop":{"exec":{"command":["/bin/sh","-c","sleep 15"]}}}',
                    ],
                ],
                [
                    'name' => 'MultiBufferEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开启MultiBuffer加速功能。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'MultiBufferPollDelay',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'MultiBuffer的策略拉取延迟，默认为空 。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0.02s',
                    ],
                ],
                [
                    'name' => 'DiscoverySelectors',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用于选择性服务发现的数据平面命名空间标签选择器列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"matchExpressions":[{"key":"asm-discovery","operator":"Exists"}]}]',
                    ],
                ],
                [
                    'name' => 'ClusterSpec',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例规格，取值：'."\n"
                            ."\n"
                            .'- `standard`：标准版。'."\n"
                            ."\n"
                            .'- `enterprise`：企业版。'."\n"
                            ."\n"
                            .'- `ultimate`：旗舰版。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'standard',
                    ],
                ],
                [
                    'name' => 'OPAScopeInjected',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用OPA注入范围控制能力，取值：'."\n"
                            ."\n"
                            .'- `true`：启用OPA注入范围控制能力。'."\n"
                            ."\n"
                            .'- `false`：不启用OPA注入范围控制能力。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'OPAInjectorCPURequirement',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '负责注入OPA代理的Pod所申请的最少CPU核数。例如`1000m`表示1核CPU。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '80m',
                    ],
                ],
                [
                    'name' => 'OPAInjectorMemoryRequirement',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '负责注入OPA代理的Pod所申请的最少内存。例如`50 Mi`表示50 MB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '50Mi',
                    ],
                ],
                [
                    'name' => 'OPAInjectorCPULimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '负责注入OPA代理的Pod所限制的最大CPU核数。例如`1000m`表示1核CPU。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1000m',
                    ],
                ],
                [
                    'name' => 'OPAInjectorMemoryLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '负责注入OPA代理的Pod所限制的最大内存。例如`1024Mi`表示1024 MB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1024Mi',
                    ],
                ],
                [
                    'name' => 'IntegrateKiali',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否为访问ASM网格拓扑创建CLB。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'NFDEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用节点特征自动获取能力。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'NFDLabelPruned',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否在禁用节点特征自动获取能力时，清除节点上的特征相关标签。'."\n"
                            ."\n"
                            .'此字段仅在禁用节点特征自动获取能力时（即设置`NFDEnabled`为`false`时）需要设置。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'TracingOnExtZipkinRequestCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '负载链路追踪导出的代理服务所申请的最少CPU核数。例如`1000m`表示1核CPU。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '200m',
                    ],
                ],
                [
                    'name' => 'TracingOnExtZipkinRequestMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '负载链路追踪导出的代理服务所申请的最少内存。例如`1Mi`表示1 MB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '200Mi',
                    ],
                ],
                [
                    'name' => 'TracingOnExtZipkinLimitCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '负载链路追踪导出的代理服务所限制的最大CPU核数。例如`1000m`表示1核CPU。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1000Mi',
                    ],
                ],
                [
                    'name' => 'TracingOnExtZipkinLimitMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '负载链路追踪导出的代理服务所限制的最大内存。例如`1Mi`表示1 MB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1024Mi',
                    ],
                ],
                [
                    'name' => 'AccessLogGatewayLifecycle',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '采集到SLS的入口网关访问日志的存储周期（天）。例如`30`代表30天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'AccessLogSidecarLifecycle',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '采集到SLS的Sidecar访问日志的存储周期（天）。例如`30`代表30天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'EnableAutoDiagnosis',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用网格自动诊断功能（开启后，当修改网格内Istio资源时，将会自动对网格进行诊断）。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'IncludeOutboundPorts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设置端口使outbound流量经过Sidecar。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8000,8001',
                    ],
                ],
                [
                    'name' => 'LogLevel',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设置数据面Sidecar代理的日志级别。日志级别按输出日志信息量从低到高排序依次为`none`、`error`、`warn`、`info`、`debug`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'info',
                    ],
                ],
                [
                    'name' => 'Concurrency',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设置数据面Sidecar代理的并行度。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'HoldApplicationUntilProxyStarts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设置在Pod启动时是否先等待Sidecar代理容器启动再启动业务容器。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ProxyStatsMatcher',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设定数据面Sidecar代理额外上报的指标。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"inclusionRegexps":".*adaptive_concurrency.*"}',
                    ],
                ],
                [
                    'name' => 'InterceptionMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar对入向流量的拦截策略。取值：'."\n"
                            .'- `REDIRECT`：默认的拦截策略，Sidecar将使用重定向方式拦截入向流量。'."\n"
                            .'- `TPROXY`：透明代理拦截策略，Sidecar将以透明代理的方式拦截入向流量。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TPROXY',
                    ],
                ],
                [
                    'name' => 'EnableBootstrapXdsAgent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设定是否令Sidecar代理在启动前加载bootstrap配置',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'KialiArmsAuthTokens',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当启用网格拓扑功能且集成ARMS Prometheus采集监控指标时，若ARMS Prometheus实例配置了鉴权token，通过此参数设定ARMS Prometheus的鉴权Token，以授权网格拓扑访问ARMS Prometheus实例。'."\n"
                            .'参数格式为JSON编码的字符串，JSON对象中的键为数据面集群的集群ID，值为数据面集群内安装的ARMS Prometheus实例设定的鉴权Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"c31e3b******5634b":"token_example"}',
                    ],
                ],
                [
                    'name' => 'DefaultComponentsScheduleConfig',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM下发到数据面组件的默认调度配置。支持以JSON的形式配置`nodeSelector`和`tolerations`。'."\n"
                            ."\n"
                            .'> - 该参数的修改属于高危操作。该操作会导致ASM所有的数据面组件重启，请谨慎操作。'."\n"
                            .'>- 此处配置不包括ASM网关，网关调度请在网关中配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"tolerations":[{"key":"test-taints", "operator":"Exists", "effect":"NoSchedule"}], "nodeSelector":{"kubernetes.io/hostname":"test-nodes"}}',
                    ],
                ],
                [
                    'name' => 'KialiServiceAnnotations',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当开启网格拓扑且为访问网格拓扑创建CLB时，通过此参数使用Annotation配置不同集群中网格拓扑服务的CLB。'."\n"
                            ."\n"
                            .'参数格式为JSON编码的字符串，JSON对象中的键为数据面集群的集群ID，值为数据面集群中网格拓扑服务的Annotation内容。'."\n"
                            ."\n"
                            .'有关如何通过注解配置CLB，请参考<props="china"> [通过Annotation配置传统型负载均衡CLB](https://help.aliyun.com/document_detail/86531.html)</props><props="intl">[通过Annotation配置传统型负载均衡CLB](https://www.alibabacloud.com/help/container-service-for-kubernetes/latest/use-annotations-to-configure-load-balancing-1)</props>。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"c31e3b******5634b":{"service.beta.kubernetes.io/alibaba-cloud-loadbalancer-address-type":"intranet"}}',
                    ],
                ],
                [
                    'name' => 'AccessLogGatewayEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用将ASM网关访问日志采集到阿里云日志服务SLS。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AccessLogSidecarEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用将ASM网格代理（Sidecar）的日志采集到阿里云日志服务SLS。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'LabelsForOffloadedWorkloads',
                    'in' => 'query',
                    'schema' => [
                        'description' => '隔离工作负载的标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name=xx,region=xx',
                    ],
                ],
                [
                    'name' => 'ExistingRootCaCert',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新的RootCert。仅当创建网格时使用了自定义证书时才可以修改该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Base64编码的PEM证书。',
                    ],
                ],
                [
                    'name' => 'ExistingCaCert',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新的CaCert。仅当创建网格时使用了自定义证书时才可以修改该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Base64编码的PEM证书。',
                    ],
                ],
                [
                    'name' => 'ExistingCaKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新的CaKey。仅当创建网格时使用了自定义证书时才可以修改该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Base64编码的PEM私钥。',
                    ],
                ],
                [
                    'name' => 'CertChain',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '从CaCert到RootCert的证书链，至少包含两个证书。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Base64编码的PEM证书链。',
                    ],
                ],
                [
                    'name' => 'SMCEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否安装 SMC 加速',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateMeshFeatureResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n</UpdateMeshFeatureResponse>","errorExample":""}]',
            'title' => '更新服务网格的功能配置',
            'summary' => '调用UpdateMeshFeature更新服务网格的功能配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RevokeKubeconfig' => [
            'summary' => '调用RevokeKubeconfig吊销ASM实例的Kubeconfig，并重新生成新的Kubeconfig。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '被吊销Kubeconfig的服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cf08a11940e8c46c48bc791fcdb3****',
                    ],
                ],
                [
                    'name' => 'PrivateIpAddress',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否返回私网访问的Kubeconfig，取值：'."\n"
                            ."\n"
                            .'- `true`：返回私网访问的Kubeconfig'."\n"
                            ."\n"
                            .'- `false`：返回公网访问的Kubeconfig',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => '7CF71C8B-79DD-150F-929E-267C51C5E311',
                            ],
                            'Kubeconfig' => [
                                'description' => '吊销后生成的新Kubeconfig',
                                'type' => 'string',
                                'example' => 'apiVersion: v1 clusters: - cluster:     server: https://121.**.**.**:6443     certificate-authority-data: *****   name: kubernetes contexts: - context:     cluster: kubernetes     user: "*****"   name: ***** current-context: ***** kind: Config preferences: {} users: - name: "*****"   user:     client-certificate-data: *****     client-key-data: *****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7CF71C8B-79DD-150F-929E-267C51C5E311\\",\\n  \\"Kubeconfig\\": \\"apiVersion: v1 clusters: - cluster:     server: https://121.**.**.**:6443     certificate-authority-data: *****   name: kubernetes contexts: - context:     cluster: kubernetes     user: \\\\\\"*****\\\\\\"   name: ***** current-context: ***** kind: Config preferences: {} users: - name: \\\\\\"*****\\\\\\"   user:     client-certificate-data: *****     client-key-data: *****\\"\\n}","errorExample":""},{"type":"xml","example":"<RevokeKubeconfigResponse>\\n    <RequestId>7CF71C8B-79DD-150F-929E-267C51C5E311</RequestId>\\n    <Kubeconfig>apiVersion: v1 clusters: - cluster:     server: https://121.**.**.**:6443     certificate-authority-data: *****   name: kubernetes contexts: - context:     cluster: kubernetes     user: \\"*****\\"   name: ***** current-context: ***** kind: Config preferences: {} users: - name: \\"*****\\"   user:     client-certificate-data: *****     client-key-data: *****</Kubeconfig>\\n</RevokeKubeconfigResponse>","errorExample":""}]',
            'title' => '重新生成Kubeconfig',
        ],
        'DescribeServiceMeshes' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源的标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签Key。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'yahaha',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'ServiceMeshes' => [
                                'description' => '服务网格详情。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Endpoints' => [
                                            'description' => '端点详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'IntranetPilotEndpoint' => [
                                                    'description' => 'Istio Pilot地址（内网）。',
                                                    'type' => 'string',
                                                    'example' => '192.168.xx.xx:15011',
                                                ],
                                                'IntranetApiServerEndpoint' => [
                                                    'description' => 'API Server地址（内网）。',
                                                    'type' => 'string',
                                                    'example' => 'https://192.168.xx.xx:6443',
                                                ],
                                                'PublicApiServerEndpoint' => [
                                                    'description' => 'API Server地址（公网）。',
                                                    'type' => 'string',
                                                    'example' => 'https://123.56.xx.xx:6443',
                                                ],
                                            ],
                                        ],
                                        'ServiceMeshInfo' => [
                                            'description' => '服务网格基本信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Profile' => [
                                                    'description' => '商业化之前的网格实例规格，取值：'."\n"
                                                        ."\n"
                                                        .'- `Pro`：专业版。'."\n"
                                                        ."\n"
                                                        .'- `Default`：标准版。',
                                                    'type' => 'string',
                                                    'example' => 'Pro',
                                                ],
                                                'CreationTime' => [
                                                    'description' => '服务网格创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-04-21T09:42:20+08:00',
                                                ],
                                                'UpdateTime' => [
                                                    'description' => '服务网格最后修改时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-04-21T09:42:20+08:00',
                                                ],
                                                'ErrorMessage' => [
                                                    'description' => '异常信息。',
                                                    'type' => 'string',
                                                    'example' => 'error',
                                                ],
                                                'Version' => [
                                                    'description' => '服务网格版本号。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'State' => [
                                                    'description' => '服务网格状态。',
                                                    'type' => 'string',
                                                    'example' => 'success',
                                                ],
                                                'ServiceMeshId' => [
                                                    'description' => '服务网格ID。',
                                                    'type' => 'string',
                                                    'example' => 'cb8963379255149cb98c8686f274x****',
                                                ],
                                                'Name' => [
                                                    'description' => '服务网格名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'RegionId' => [
                                                    'description' => '服务网格所在地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-beijing',
                                                ],
                                            ],
                                        ],
                                        'Spec' => [
                                            'description' => '规格信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Network' => [
                                                    'description' => '服务网格网络配置信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'VpcId' => [
                                                            'description' => '专有网络ID。',
                                                            'type' => 'string',
                                                            'example' => 'vpc-2zew0rajjkmxy2369****',
                                                        ],
                                                        'SecurityGroupId' => [
                                                            'description' => '安全组ID。',
                                                            'type' => 'string',
                                                            'example' => 'sg-2ze384sxttxbctnj****',
                                                        ],
                                                        'VSwitches' => [
                                                            'description' => '虚拟交换机ID列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '虚拟交换机ID列表。',
                                                                'type' => 'string',
                                                                'example' => '["1","2"]',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'LoadBalancer' => [
                                                    'description' => '负载均衡信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PilotPublicEip' => [
                                                            'description' => '是否使用公网地址暴露Istio Pilot，取值：'."\n"
                                                                ."\n"
                                                                .'- `true`：使用公网地址暴露Istio Pilot。'."\n"
                                                                ."\n"
                                                                .'- `false`：不使用公网地址暴露Istio Pilot。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'PilotPublicLoadbalancerId' => [
                                                            'description' => '公网地址暴露Istio Pilot对应的负载均衡ID。',
                                                            'type' => 'string',
                                                            'example' => 'lb-2zesa8qs8kbkj9jkl****',
                                                        ],
                                                        'ApiServerLoadbalancerId' => [
                                                            'description' => '公网地址暴露API Server对应的负载均衡ID。',
                                                            'type' => 'string',
                                                            'example' => 'lb-2zekaak10uxds44vx****',
                                                        ],
                                                        'ApiServerPublicEip' => [
                                                            'description' => '是否使用公网地址暴露API Server，取值：'."\n"
                                                                ."\n"
                                                                .'- `true`：使用公网地址暴露API Server。'."\n"
                                                                ."\n"
                                                                .'- `false`：不使用公网地址暴露API Server。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                    ],
                                                ],
                                                'MeshConfig' => [
                                                    'description' => '服务网格配置信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Telemetry' => [
                                                            'description' => '是否开启采集Prometheus 监控指标（建议使用阿里云Prometheus监控），取值：'."\n"
                                                                ."\n"
                                                                .'- `true`：开启采集Prometheus 监控指标。'."\n"
                                                                ."\n"
                                                                .'- `false`：不开启采集Prometheus 监控指标。'."\n",
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'OutboundTrafficPolicy' => [
                                                            'description' => '外部流量策略，取值：'."\n"
                                                                ."\n"
                                                                .'- `ALLOW_ANY`：允许访问网格外的服务。'."\n"
                                                                ."\n"
                                                                .'- `REGISTRY_ONLY`：仅允许访问网格内的服务。',
                                                            'type' => 'string',
                                                            'example' => 'ALLOW_ANY',
                                                        ],
                                                        'Tracing' => [
                                                            'description' => '是否启用链路追踪（需要开通可观测链路OpenTelemetry版），取值：'."\n"
                                                                ."\n"
                                                                .'- `true`：启用链路追踪。'."\n"
                                                                ."\n"
                                                                .'- `false`：不启用链路追踪。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'StrictMtls' => [
                                                            'description' => '模式。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'Pilot' => [
                                                            'description' => '控制面配置。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Http10Enabled' => [
                                                                    'description' => '是否启用支持HTTP 1.0。取值：'."\n"
                                                                        ."\n"
                                                                        .'- `true`：支持HTTP 1.0。'."\n"
                                                                        ."\n"
                                                                        .'- `false`：不支持HTTP 1.0。'."\n",
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                                'TraceSampling' => [
                                                                    'description' => '启用链路追踪时的采样率。',
                                                                    'type' => 'number',
                                                                    'format' => 'float',
                                                                    'example' => '0.2',
                                                                ],
                                                            ],
                                                        ],
                                                        'Mtls' => [
                                                            'description' => '是否启用服务就近访问，取值：'."\n"
                                                                ."\n"
                                                                .'- `true`：启用服务就近访问。'."\n"
                                                                ."\n"
                                                                .'- `false`：不启用服务就近访问。',
                                                            'type' => 'boolean',
                                                            'example' => 'true',
                                                        ],
                                                        'SidecarInjector' => [
                                                            'description' => 'Sidecar注入配置。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'EnableNamespacesByDefault' => [
                                                                    'description' => '是否为所有命名空间开启自动注入功能。'."\n"
                                                                        ."\n"
                                                                        .'- `true`：为全部命名空间开启自动注入。'."\n"
                                                                        ."\n"
                                                                        .'- `false`：不为全部命名空间开启自动注入。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'false',
                                                                ],
                                                                'AutoInjectionPolicyEnabled' => [
                                                                    'description' => '通过Pod Annotations实现自动注入。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                                'InitCNIConfiguration' => [
                                                                    'description' => 'CNI初始化配置。',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'ExcludeNamespaces' => [
                                                                            'description' => '要从Istio Pod检查中排除的名称空间。',
                                                                            'type' => 'string',
                                                                            'example' => 'default,foo',
                                                                        ],
                                                                        'Enabled' => [
                                                                            'description' => '为istio-proxy进行流量重定向时，是否需要赋予istio-init容器特权，取值：'."\n"
                                                                                ."\n"
                                                                                .'- `true`：不需要赋予istio-init容器特权。'."\n"
                                                                                ."\n"
                                                                                .'- `false`：需要赋予istio-init容器特权。',
                                                                            'type' => 'boolean',
                                                                            'example' => 'true',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Clusters' => [
                                            'description' => '集群列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '集群列表。',
                                                'type' => 'string',
                                                'example' => '["caf089e56daba4c51a8906fe43ea1****","c80f45444b3da447da60a911390c2****"]',
                                            ],
                                        ],
                                        'ClusterSpec' => [
                                            'description' => '服务网格实例规格，取值：'."\n"
                                                ."\n"
                                                .'- `standard`：标准版。'."\n"
                                                ."\n"
                                                .'- `enterprise`：企业版。'."\n"
                                                ."\n"
                                                .'- `ultimate`：旗舰版。',
                                            'type' => 'string',
                                            'example' => 'standard',
                                        ],
                                        'OwnerType' => [
                                            'description' => '创建网格的云产品类型，取值：'."\n"
                                                .'- `ackone`：网格由ACK One创建。'."\n"
                                                ."\n"
                                                .'- 当此项取值为空时，代表网格由用户创建。',
                                            'type' => 'string',
                                            'example' => 'ackone',
                                        ],
                                        'OwnerId' => [
                                            'description' => '创建网格的云产品实例ID。',
                                            'type' => 'string',
                                            'example' => 'cc3e96f249d124eb38b72718ec5*****',
                                        ],
                                        'Tag' => [
                                            'description' => '标签信息集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '资源标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键',
                                                        'type' => 'string',
                                                        'example' => 'test',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'yahaha',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Upgradable' => [
                                            'description' => '该网格是否可以升级。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"ServiceMeshes\\": [\\n    {\\n      \\"Endpoints\\": {\\n        \\"IntranetPilotEndpoint\\": \\"192.168.xx.xx:15011\\",\\n        \\"IntranetApiServerEndpoint\\": \\"https://192.168.xx.xx:6443\\",\\n        \\"PublicApiServerEndpoint\\": \\"https://123.56.xx.xx:6443\\"\\n      },\\n      \\"ServiceMeshInfo\\": {\\n        \\"Profile\\": \\"Pro\\",\\n        \\"CreationTime\\": \\"2020-04-21T09:42:20+08:00\\",\\n        \\"UpdateTime\\": \\"2020-04-21T09:42:20+08:00\\",\\n        \\"ErrorMessage\\": \\"error\\",\\n        \\"Version\\": \\"1\\",\\n        \\"State\\": \\"success\\",\\n        \\"ServiceMeshId\\": \\"cb8963379255149cb98c8686f274x****\\",\\n        \\"Name\\": \\"test\\",\\n        \\"RegionId\\": \\"cn-beijing\\"\\n      },\\n      \\"Spec\\": {\\n        \\"Network\\": {\\n          \\"VpcId\\": \\"vpc-2zew0rajjkmxy2369****\\",\\n          \\"SecurityGroupId\\": \\"sg-2ze384sxttxbctnj****\\",\\n          \\"VSwitches\\": [\\n            \\"[\\\\\\"1\\\\\\",\\\\\\"2\\\\\\"]\\"\\n          ]\\n        },\\n        \\"LoadBalancer\\": {\\n          \\"PilotPublicEip\\": true,\\n          \\"PilotPublicLoadbalancerId\\": \\"lb-2zesa8qs8kbkj9jkl****\\",\\n          \\"ApiServerLoadbalancerId\\": \\"lb-2zekaak10uxds44vx****\\",\\n          \\"ApiServerPublicEip\\": true\\n        },\\n        \\"MeshConfig\\": {\\n          \\"Telemetry\\": true,\\n          \\"OutboundTrafficPolicy\\": \\"ALLOW_ANY\\",\\n          \\"Tracing\\": true,\\n          \\"StrictMtls\\": true,\\n          \\"Pilot\\": {\\n            \\"Http10Enabled\\": true,\\n            \\"TraceSampling\\": 0.2\\n          },\\n          \\"Mtls\\": true,\\n          \\"SidecarInjector\\": {\\n            \\"EnableNamespacesByDefault\\": false,\\n            \\"AutoInjectionPolicyEnabled\\": true,\\n            \\"InitCNIConfiguration\\": {\\n              \\"ExcludeNamespaces\\": \\"default,foo\\",\\n              \\"Enabled\\": true\\n            }\\n          }\\n        }\\n      },\\n      \\"Clusters\\": [\\n        \\"[\\\\\\"caf089e56daba4c51a8906fe43ea1****\\\\\\",\\\\\\"c80f45444b3da447da60a911390c2****\\\\\\"]\\"\\n      ],\\n      \\"ClusterSpec\\": \\"standard\\",\\n      \\"OwnerType\\": \\"ackone\\",\\n      \\"OwnerId\\": \\"cc3e96f249d124eb38b72718ec5*****\\",\\n      \\"Tag\\": [\\n        {\\n          \\"Key\\": \\"test\\",\\n          \\"Value\\": \\"yahaha\\"\\n        }\\n      ],\\n      \\"Upgradable\\": false\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeServiceMeshesResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n    <ServiceMeshes>\\n        <Endpoints>\\n            <IntranetPilotEndpoint>192.168.xx.xx:15011</IntranetPilotEndpoint>\\n            <ReverseTunnelEndpoint>...</ReverseTunnelEndpoint>\\n            <PublicPilotEndpoint>182.92.xx.xx:15011</PublicPilotEndpoint>\\n            <IntranetApiServerEndpoint>https://192.168.xx.xx:6443</IntranetApiServerEndpoint>\\n            <PublicApiServerEndpoint>https://123.56.xx.xx:6443</PublicApiServerEndpoint>\\n        </Endpoints>\\n        <ServiceMeshInfo>\\n            <Profile>Pro</Profile>\\n            <CreationTime>2020-04-21T09:42:20+08:00</CreationTime>\\n            <UpdateTime>2020-04-21T09:42:20+08:00</UpdateTime>\\n            <ErrorMessage>error</ErrorMessage>\\n            <Version>1</Version>\\n            <State>success</State>\\n            <ServiceMeshId>cb8963379255149cb98c8686f274x****</ServiceMeshId>\\n            <Name>test</Name>\\n            <RegionId>cn-beijing</RegionId>\\n        </ServiceMeshInfo>\\n        <Spec>\\n            <Network>\\n                <VpcId>vpc-2zew0rajjkmxy2369****</VpcId>\\n                <SecurityGroupId>sg-2ze384sxttxbctnj****</SecurityGroupId>\\n                <VSwitches>[\\"1\\",\\"2\\"]</VSwitches>\\n            </Network>\\n            <LoadBalancer>\\n                <PilotPublicEip>true</PilotPublicEip>\\n                <PilotPublicLoadbalancerId>lb-2zesa8qs8kbkj9jkl****</PilotPublicLoadbalancerId>\\n                <ApiServerLoadbalancerId>lb-2zekaak10uxds44vx****</ApiServerLoadbalancerId>\\n                <ApiServerPublicEip>true</ApiServerPublicEip>\\n            </LoadBalancer>\\n            <MeshConfig>\\n                <Telemetry>true</Telemetry>\\n                <OutboundTrafficPolicy>xxx</OutboundTrafficPolicy>\\n                <Tracing>true</Tracing>\\n                <StrictMtls>true</StrictMtls>\\n                <Pilot>\\n                    <Http10Enabled>true</Http10Enabled>\\n                    <TraceSampling>0.2</TraceSampling>\\n                </Pilot>\\n                <Mtls>true</Mtls>\\n                <SidecarInjector>\\n                    <EnableNamespacesByDefault>false</EnableNamespacesByDefault>\\n                    <AutoInjectionPolicyEnabled>true</AutoInjectionPolicyEnabled>\\n                    <InitCNIConfiguration>\\n                        <ExcludeNamespaces>default,foo</ExcludeNamespaces>\\n                        <Enabled>true</Enabled>\\n                    </InitCNIConfiguration>\\n                </SidecarInjector>\\n            </MeshConfig>\\n        </Spec>\\n        <Clusters>[\\"caf089e56daba4c51a8906fe43ea1****\\",\\"c80f45444b3da447da60a911390c2****\\"]</Clusters>\\n        <ClusterSpec>standard</ClusterSpec>\\n        <OwnerType>ackone</OwnerType>\\n        <OwnerId>cc3e96f249d124eb38b72718ec5*****</OwnerId>\\n    </ServiceMeshes>\\n</DescribeServiceMeshesResponse>","errorExample":""}]',
            'title' => '获取服务网格列表',
            'summary' => '调用DescribeServiceMeshes获取服务网格列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeServiceMeshDetail' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
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
                                'example' => '11fd0027-c27e-41bb-a565-75583054****',
                            ],
                            'ServiceMesh' => [
                                'description' => '服务网格详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Endpoints' => [
                                        'description' => '端点详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'IntranetPilotEndpoint' => [
                                                'description' => 'Istio Pilot地址（内网）。',
                                                'type' => 'string',
                                                'example' => '192.168.**.**:15011',
                                            ],
                                            'PublicPilotEndpoint' => [
                                                'description' => 'Istio Pilot地址（公网）。',
                                                'type' => 'string',
                                                'example' => '182.92.**.**:15011',
                                            ],
                                            'IntranetApiServerEndpoint' => [
                                                'description' => 'API Server地址（内网）。',
                                                'type' => 'string',
                                                'example' => 'https://192.168.**.**:6443',
                                            ],
                                            'PublicApiServerEndpoint' => [
                                                'description' => 'API Server地址（公网）。',
                                                'type' => 'string',
                                                'example' => 'https://123.56.**.**:6443',
                                            ],
                                        ],
                                    ],
                                    'ServiceMeshInfo' => [
                                        'description' => '服务网格基本信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Profile' => [
                                                'description' => '网格规格。取值：'."\n"
                                                    ."\n"
                                                    .'- `Default`：标准版。'."\n"
                                                    ."\n"
                                                    .'- `Pro`：ASM商业版（专业版）。',
                                                'type' => 'string',
                                                'example' => 'Default',
                                            ],
                                            'CreationTime' => [
                                                'description' => '服务网格创建时间。',
                                                'type' => 'string',
                                                'example' => '2020-04-21T09:42:20+08:00',
                                            ],
                                            'UpdateTime' => [
                                                'description' => '服务网格最后修改时间。',
                                                'type' => 'string',
                                                'example' => '2020-06-03T14:48:54+08:00',
                                            ],
                                            'ErrorMessage' => [
                                                'description' => '异常信息。',
                                                'type' => 'string',
                                                'example' => ' error',
                                            ],
                                            'Version' => [
                                                'description' => '服务网格版本号。',
                                                'type' => 'string',
                                                'example' => 'v1.7.4.0-gfb34ba99-aliyun',
                                            ],
                                            'State' => [
                                                'description' => '服务网格状态。',
                                                'type' => 'string',
                                                'example' => 'running',
                                            ],
                                            'ServiceMeshId' => [
                                                'description' => '服务网格实例ID.。',
                                                'type' => 'string',
                                                'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                                            ],
                                            'Name' => [
                                                'description' => '服务网格名称。',
                                                'type' => 'string',
                                                'example' => 'mesh1',
                                            ],
                                            'RegionId' => [
                                                'description' => '服务网格所在地域ID。',
                                                'type' => 'string',
                                                'example' => 'cn-beijing',
                                            ],
                                        ],
                                    ],
                                    'Spec' => [
                                        'description' => '服务网格规格信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Network' => [
                                                'description' => '服务网格网络配置信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'VpcId' => [
                                                        'description' => '专有网络ID。',
                                                        'type' => 'string',
                                                        'example' => 'vpc-2zew0rajjkmxy2369****',
                                                    ],
                                                    'SecurityGroupId' => [
                                                        'description' => '安全组ID。',
                                                        'type' => 'string',
                                                        'example' => 'sg-2ze384sxttxbctnj****',
                                                    ],
                                                    'VSwitches' => [
                                                        'description' => '虚拟机.。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '虚拟交换机ID。',
                                                            'type' => 'string',
                                                            'example' => 'vsw-2ze66z3ntvsej0mdo****',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'LoadBalancer' => [
                                                'description' => '负载均衡信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'PilotPublicEip' => [
                                                        'description' => '是否使用公网地址暴露Istio Pilot。取值：'."\n"
                                                            ."\n\n"
                                                            .'- `true`：使用公网地址暴露Istio Pilot。'."\n"
                                                            ."\n"
                                                            .'- `false`：不使用公网地址暴露Istio Pilot。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'PilotPublicLoadbalancerId' => [
                                                        'description' => '公网地址暴露Istio Pilot对应的负载均衡ID。',
                                                        'type' => 'string',
                                                        'example' => 'lb-2zesa8qs8kbkj9jkl****',
                                                    ],
                                                    'ApiServerLoadbalancerId' => [
                                                        'description' => '公网地址暴露API Server对应的负载均衡ID。',
                                                        'type' => 'string',
                                                        'example' => 'lb-2zekaak10uxds44vx****',
                                                    ],
                                                    'ApiServerPublicEip' => [
                                                        'description' => '是否使用公网地址暴露API Server。取值：'."\n"
                                                            ."\n"
                                                            .'- `true`：使用公网地址暴露API Server。'."\n"
                                                            ."\n"
                                                            .'- `false`：不使用公网地址暴露API Server。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                ],
                                            ],
                                            'MeshConfig' => [
                                                'description' => '服务网格配置信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'OPA' => [
                                                        'description' => '开放策略代理（OPA）插件信息。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'RequestMemory' => [
                                                                'description' => 'OPA代理容器的内存资源请求。',
                                                                'type' => 'string',
                                                                'example' => '1024Mi',
                                                            ],
                                                            'LogLevel' => [
                                                                'description' => 'OPA代理容器日志级别。',
                                                                'type' => 'string',
                                                                'example' => 'info',
                                                            ],
                                                            'Enabled' => [
                                                                'description' => '是否集成开放策略代理（OPA）插件。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：集成开放策略代理（OPA）插件。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不集成开放策略代理（OPA）插件。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'LimitMemory' => [
                                                                'description' => 'OPA代理容器的内存资源限制。',
                                                                'type' => 'string',
                                                                'example' => '512Mi',
                                                            ],
                                                            'RequestCPU' => [
                                                                'description' => 'OPA代理容器的CPU资源请求。',
                                                                'type' => 'string',
                                                                'example' => '2',
                                                            ],
                                                            'LimitCPU' => [
                                                                'description' => 'OPA代理容器的CPU资源限制。',
                                                                'type' => 'string',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                    ],
                                                    'Prometheus' => [
                                                        'description' => 'Prometheus配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'UseExternal' => [
                                                                'description' => '是否启用外部Prometheus。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用外部Prometheus。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用外部Prometheus。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'ExternalUrl' => [
                                                                'description' => 'Prometheus服务地址（在启用外部Prometheus时，系统自动填充）。',
                                                                'type' => 'string',
                                                                'example' => 'http://prometheus:9090',
                                                            ],
                                                        ],
                                                    ],
                                                    'AccessLog' => [
                                                        'description' => '访问日志配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Enabled' => [
                                                                'description' => '是否启用访问日志。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用访问日志。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用访问日志。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'Project' => [
                                                                'description' => '访问日志项目名称。',
                                                                'type' => 'string',
                                                                'example' => 'k8s-log-b7b05d08670e41ca8c8fc0b7718f*****',
                                                            ],
                                                        ],
                                                    ],
                                                    'Pilot' => [
                                                        'description' => 'Pilot配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Http10Enabled' => [
                                                                'description' => '是否支持HTTP1.0。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：支持HTTP1.0。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不支持HTTP1.0。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'TraceSampling' => [
                                                                'description' => '链路追踪采样百分比。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'example' => '100',
                                                            ],
                                                            'Feature' => [
                                                                'description' => 'Pilot功能配置。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'FilterGatewayClusterConfig' => [
                                                                        'description' => '是否启用Gateway配置过滤。取值：'."\n"
                                                                            ."\n"
                                                                            .'- `true`：启用Gateway配置过滤。'."\n"
                                                                            ."\n"
                                                                            .'- `false`：不启用Gateway配置过滤。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'false',
                                                                    ],
                                                                    'EnableSDSServer' => [
                                                                        'description' => '是否启用SDS服务。取值：'."\n"
                                                                            ."\n"
                                                                            .'- `true`：启用SDS服务。'."\n"
                                                                            ."\n"
                                                                            .'- `false`：不启用SDS服务。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'false',
                                                                    ],
                                                                ],
                                                            ],
                                                            'ConfigSource' => [
                                                                'description' => '外部服务接入配置。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Enabled' => [
                                                                        'description' => '是否接入外部服务。取值：'."\n"
                                                                            ."\n"
                                                                            .'- `true`：接入外部服务。'."\n"
                                                                            ."\n"
                                                                            .'- `false`：不接入外部服务。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'false',
                                                                    ],
                                                                    'NacosID' => [
                                                                        'description' => '提供外部服务信息的Nacos实例ID。',
                                                                        'type' => 'string',
                                                                        'example' => 'mse-cn-tl326******',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'MSE' => [
                                                        'description' => 'MSE配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Enabled' => [
                                                                'description' => '是否启用MSE。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用MSE。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用MSE。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                        ],
                                                    ],
                                                    'CustomizedZipkin' => [
                                                        'description' => '是否启用自定义zipkin。取值：'."\n"
                                                            ."\n"
                                                            .'- `true`：启用自定义zipkin。'."\n"
                                                            ."\n"
                                                            .'- `false`：不启用自定义zipkin。',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                    'SidecarInjector' => [
                                                        'description' => 'Sidecar注入器的配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'EnableNamespacesByDefault' => [
                                                                'description' => '是否为所有命名空间开启自动注入功能。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：为所有命名空间开启自动注入功能。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不为所有命名空间开启自动注入功能。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'RequestMemory' => [
                                                                'description' => 'Sidecar注入器Pod的内存请求资源。',
                                                                'type' => 'string',
                                                                'example' => '512Mi',
                                                            ],
                                                            'LimitMemory' => [
                                                                'description' => 'Sidecar注入器Pod的内存限制资源。',
                                                                'type' => 'string',
                                                                'example' => '2048Mi',
                                                            ],
                                                            'RequestCPU' => [
                                                                'description' => 'Sidecar注入器Pod的CPU请求资源。',
                                                                'type' => 'string',
                                                                'example' => '1000m',
                                                            ],
                                                            'AutoInjectionPolicyEnabled' => [
                                                                'description' => '是否开启通过Pod Annotations实现自动注入Sidecar。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：开启通过Pod Annotations实现自动注入Sidecar。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不开启通过Pod Annotations实现自动注入Sidecar。'."\n",
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'LimitCPU' => [
                                                                'description' => 'Sidecar注入器Pod的CPU限制资源。',
                                                                'type' => 'string',
                                                                'example' => '4000m',
                                                            ],
                                                            'InitCNIConfiguration' => [
                                                                'description' => 'CNI配置。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'ExcludeNamespaces' => [
                                                                        'description' => '排除的命名空间。',
                                                                        'type' => 'string',
                                                                        'example' => 'kube-system,istio-system',
                                                                    ],
                                                                    'Enabled' => [
                                                                        'description' => '是否启用CNI。取值：'."\n"
                                                                            ."\n"
                                                                            .'- `true`：启用CNI。'."\n"
                                                                            ."\n"
                                                                            .'- `false`：不启用CNI。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'false',
                                                                    ],
                                                                ],
                                                            ],
                                                            'SidecarInjectorWebhookAsYaml' => [
                                                                'description' => '其他自动注入Sidecar的配置（YAML格式）。更多信息，请参见[多种方式灵活开启自动注入](~~186136~~)。',
                                                                'type' => 'string',
                                                                'example' => '{"injectedAnnotations":{"test/istio-init":"runtime/default2","test/istio-proxy":"runtime/default"},"replicaCount":2,"nodeSelector":{"beta.kubernetes.io/os":"linux"}}',
                                                            ],
                                                            'SidecarInjectorNum' => [
                                                                'description' => '负责进行Sidecar注入的组件副本数。默认为`1`。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                    ],
                                                    'IncludeIPRanges' => [
                                                        'description' => '包含的IP地址段。',
                                                        'type' => 'string',
                                                        'example' => '192.168.0.0/16',
                                                    ],
                                                    'ExcludeIPRanges' => [
                                                        'description' => '不拦截指定IP范围。',
                                                        'type' => 'string',
                                                        'example' => '172.16.0.0',
                                                    ],
                                                    'ExcludeOutboundPorts' => [
                                                        'description' => "\n"
                                                            .'不拦截指定Outbound端口。',
                                                        'type' => 'string',
                                                        'example' => '80,81',
                                                    ],
                                                    'ExcludeInboundPorts' => [
                                                        'description' => '不拦截指定Inbound端口。',
                                                        'type' => 'string',
                                                        'example' => '80,81',
                                                    ],
                                                    'Telemetry' => [
                                                        'description' => '是否开启采集Prometheus监控指标（建议使用[阿里云Prometheus监控](https://arms.console.aliyun.com/)）。取值：'."\n"
                                                            ."\n"
                                                            .'- `true`：开启采集Prometheus监控指标。'."\n"
                                                            ."\n"
                                                            .'- `false`：不开启采集Prometheus监控指标。'."\n",
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'Edition' => [
                                                        'description' => '版本信息。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Name' => [
                                                                'description' => '版本名称。',
                                                                'type' => 'string',
                                                                'example' => 'Pro',
                                                            ],
                                                            'IstiodImageTag' => [
                                                                'description' => 'Istiod镜像版本。',
                                                                'type' => 'string',
                                                                'example' => 'v1.9.7.1-3-gb3f1ab3c9c-pro-aliyun',
                                                            ],
                                                            'ProxyImageTag' => [
                                                                'description' => 'Istio Proxy镜像版本。',
                                                                'type' => 'string',
                                                                'example' => 'v1.9.7.1-3-gb3f1ab3c9c-pro-aliyun',
                                                            ],
                                                        ],
                                                    ],
                                                    'ProtocolSupport' => [
                                                        'description' => '协议支持配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'MysqlFilterEnabled' => [
                                                                'description' => '是否启用MysqlFilter。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用MysqlFilter。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用MysqlFilter。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'RedisFilterEnabled' => [
                                                                'description' => '是否启用RedisFilter。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用RedisFilter。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用RedisFilter。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'ThriftFilterEnabled' => [
                                                                'description' => '是否启用ThriftFilter。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用ThriftFilter。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用ThriftFilter。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'DubboFilterEnabled' => [
                                                                'description' => '是否启用DubboFilter。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用DubboFilter。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用DubboFilter。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                        ],
                                                    ],
                                                    'OutboundTrafficPolicy' => [
                                                        'description' => '出向流量策略。取值：'."\n"
                                                            ."\n"
                                                            .'- `ALLOW_ANY`：允许访问所有外部服务。'."\n"
                                                            ."\n"
                                                            .'- `REGISTRY_ONLY`：只能访问注册到网格内的服务。',
                                                        'type' => 'string',
                                                        'example' => 'ALLOW_ANY',
                                                    ],
                                                    'Kiali' => [
                                                        'description' => '网格拓扑配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Enabled' => [
                                                                'description' => '是否启用网格拓扑（必须先开启采集Prometheus监控指标，当该项配置更新为`false`时，系统自动设置本项值为`false`）。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用网格拓扑。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用网格拓扑。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'Url' => [
                                                                'description' => '网格拓扑服务地址。',
                                                                'type' => 'string',
                                                                'example' => 'http://1.2.**.**:20001',
                                                            ],
                                                        ],
                                                    ],
                                                    'Tracing' => [
                                                        'description' => '是否启用链路追踪（需要开通[可观测链路OpenTelemetry版](https://tracing-analysis.console.aliyun.com/)）。取值：'."\n"
                                                            ."\n"
                                                            .'- `true`：启用链路追踪。'."\n"
                                                            ."\n"
                                                            .'- `false`：不启用链路追踪。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'WebAssemblyFilterDeployment' => [
                                                        'description' => 'WebAssemblyFilter配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Enabled' => [
                                                                'description' => '是否启用WebAssemblyFilter。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用WebAssemblyFilter。'."\n"
                                                                    .'- `false`：不启用WebAssemblyFilter。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                        ],
                                                    ],
                                                    'EnableLocalityLB' => [
                                                        'description' => '是否启用服务就近访问。取值：'."\n"
                                                            ."\n"
                                                            .'- `true`：启用服务就近访问。'."\n"
                                                            ."\n"
                                                            .'- `false`：不启用服务就近访问。'."\n"
                                                            ."\n",
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'Audit' => [
                                                        'description' => '服务网格审计信息。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Enabled' => [
                                                                'description' => '是否启用网格审计。取值：'."\n"
                                                                    ."\n\n"
                                                                    .'- `true`：启用网格审计。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用网格审计。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'Project' => [
                                                                'description' => '服务网格审计对应的日志项目。',
                                                                'type' => 'string',
                                                                'example' => 'audit-project',
                                                            ],
                                                            'AuditProjectStatus' => [
                                                                'description' => '服务网格审计项目的状态。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `audit_project_exist`：审计项目存在。'."\n"
                                                                    ."\n"
                                                                    .'- `audit_project_not_exist`：审计项目不存在。',
                                                                'type' => 'string',
                                                                'example' => 'audit_project_not_exist',
                                                            ],
                                                        ],
                                                    ],
                                                    'Proxy' => [
                                                        'description' => 'Proxy配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'RequestMemory' => [
                                                                'description' => '内存请求资源。',
                                                                'type' => 'string',
                                                                'example' => '128Mi',
                                                            ],
                                                            'ClusterDomain' => [
                                                                'description' => '信任域。',
                                                                'type' => 'string',
                                                                'example' => 'cluster.domain',
                                                            ],
                                                            'LimitMemory' => [
                                                                'description' => '内存限制资源。',
                                                                'type' => 'string',
                                                                'example' => '1024Mi',
                                                            ],
                                                            'RequestCPU' => [
                                                                'description' => 'CPU请求资源。',
                                                                'type' => 'string',
                                                                'example' => '100m',
                                                            ],
                                                            'EnableDNSProxying' => [
                                                                'description' => '是否启用DNS Proxying。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用DNS Proxying。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用DNS Proxying。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'LimitCPU' => [
                                                                'description' => 'CPU限制资源。',
                                                                'type' => 'string',
                                                                'example' => '2000m',
                                                            ],
                                                            'AccessLogServiceEnabled' => [
                                                                'description' => '是否启用Envoy的gRPC日志服务(ALS)。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用Envoy的gRPC日志服务(ALS)。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用Envoy的gRPC日志服务(ALS)。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'AccessLogServiceHost' => [
                                                                'description' => '启用Envoy的gRPC日志服务(ALS)的地址。',
                                                                'type' => 'string',
                                                                'example' => '0.0.0.0',
                                                            ],
                                                            'AccessLogServicePort' => [
                                                                'description' => '启用Envoy的gRPC日志服务(ALS)的端口。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '9999',
                                                            ],
                                                            'AccessLogFormat' => [
                                                                'description' => 'Sidecar访问日志的格式。',
                                                                'type' => 'string',
                                                                'example' => '{"authority_for":"%REQ(:AUTHORITY)%","bytes_received":"%BYTES_RECEIVED%","bytes_sent":"%BYTES_SENT%","downstream_local_address":"%DOWNSTREAM_LOCAL_ADDRESS%","downstream_remote_address":"%DOWNSTREAM_REMOTE_ADDRESS%","duration":"%DURATION%","istio_policy_status":"%DYNAMIC_METADATA(istio.mixer:status)%","method":"%REQ(:METHOD)%","path":"%REQ(X-ENVOY-ORIGINAL-PATH?:PATH)%","protocol":"%PROTOCOL%","request_id":"%REQ(X-REQUEST-ID)%","requested_server_name":"%REQUESTED_SERVER_NAME%","response_code":"%RESPONSE_CODE%","response_flags":"%RESPONSE_FLAGS%","route_name":"%ROUTE_NAME%","start_time":"%START_TIME%","trace_id":"%REQ(X-B3-TRACEID)%","upstream_cluster":"%UPSTREAM_CLUSTER%","upstream_host":"%UPSTREAM_HOST%","upstream_local_address":"%UPSTREAM_LOCAL_ADDRESS%","upstream_service_time":"%RESP(X-ENVOY-UPSTREAM-SERVICE-TIME)%","upstream_transport_failure_reason":"%UPSTREAM_TRANSPORT_FAILURE_REASON%","user_agent":"%REQ(USER-AGENT)%","x_forwarded_for":"%REQ(X-FORWARDED-FOR)%"}',
                                                            ],
                                                            'AccessLogFile' => [
                                                                'description' => 'Sidecar访问日志输出的文件路径。',
                                                                'type' => 'string',
                                                                'example' => '/dev/stdout',
                                                            ],
                                                        ],
                                                    ],
                                                    'K8sNewAPIsSupport' => [
                                                        'description' => 'Kubernetes API支持。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'GatewayAPIEnabled' => [
                                                                'description' => '是否启用Gateway API。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用Gateway API。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用Gateway API。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                        ],
                                                    ],
                                                    'LocalityLB' => [
                                                        'description' => '跨地域负载均衡配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Enabled' => [
                                                                'description' => '是否启用跨地域负载均衡。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用跨地域负载均衡。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用跨地域负载均衡。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'Failover' => [
                                                                'description' => '跨地域故障转移配置'."\n"
                                                                    .'>只能与`Distribute`二选一。例如，配置`Failover`就不能配置`Distribute`。',
                                                                'type' => 'object',
                                                                'example' => '{"failover":[{"from":"cn-hangzhou","to":"cn-shanghai"}]}',
                                                            ],
                                                            'Distribute' => [
                                                                'description' => '跨地域流量分布配置'."\n"
                                                                    .'>只能与`Failover`二选一。例如，配置`Distribute`就不能配置Failover。',
                                                                'type' => 'object',
                                                                'example' => '[{"from":"cn-shanghai","to":{"cn-hangzhou/*":50,"cn-shanghai/*":25,"cn-zhangjiakou/*":25}},{"from":"cn-hangzhou","to":{"cn-hangzhou/*":50,"cn-shanghai/*":25,"cn-zhangjiakou/*":25}}]',
                                                            ],
                                                        ],
                                                    ],
                                                    'ControlPlaneLogInfo' => [
                                                        'description' => '控制面日志采集配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Enabled' => [
                                                                'description' => '是否启用控制面日志采集。取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：启用控制面日志采集。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用控制面日志采集。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'Project' => [
                                                                'description' => '控制面日志采集目标SLS Project名称。',
                                                                'type' => 'string',
                                                                'example' => 'mesh-log-cbeb85a09161b4a26ab73e0ac****',
                                                            ],
                                                            'LogTTL' => [
                                                                'description' => '控制面日志采集的存储时间（天）。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '30',
                                                            ],
                                                        ],
                                                    ],
                                                    'ExtraConfiguration' => [
                                                        'description' => '服务网格的功能增强配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'IstioCRHistory' => [
                                                                'description' => 'Istio资源历史版本功能设置。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'EnableHistory' => [
                                                                        'description' => '是否启用ASM的Istio资源历史版本管理功能。取值：'."\n"
                                                                            ."\n"
                                                                            .'- `true`：启用ASM的Istio资源历史版本管理功能。'."\n"
                                                                            ."\n"
                                                                            .'- `false`：不启用ASM的Istio资源历史版本管理功能。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'false',
                                                                    ],
                                                                ],
                                                            ],
                                                            'CRAggregationEnabled' => [
                                                                'description' => '是否启用数据面集群Kubernetes API访问Istio资源。取值：'."\n"
                                                                    .'- `true`：启用数据面集群Kubernetes API访问Istio资源。'."\n"
                                                                    ."\n"
                                                                    .'- `false`：不启用数据面集群Kubernetes API访问Istio资源。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                            'MultiBuffer' => [
                                                                'description' => '基于MulitiBuffer的TLS性能优化。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Enabled' => [
                                                                        'description' => '是否启用基于MulitiBuffer的TLS性能优化。取值：'."\n"
                                                                            ."\n"
                                                                            .'- `true`：启用基于MulitiBuffer的TLS性能优化。'."\n"
                                                                            ."\n"
                                                                            .'- `false`：不启用基于MulitiBuffer的TLS性能优化。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'false',
                                                                    ],
                                                                    'PollDelay' => [
                                                                        'description' => '拉取延迟。',
                                                                        'type' => 'string',
                                                                        'example' => '0.02s',
                                                                    ],
                                                                ],
                                                            ],
                                                            'TerminationDrainDuration' => [
                                                                'description' => 'Istio Proxy终止等待时长。',
                                                                'type' => 'string',
                                                                'example' => '5s',
                                                            ],
                                                            'Lifecycle' => [
                                                                'description' => 'Istio Proxy生命周期。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'postStart' => [
                                                                        'description' => 'Istio Proxy启动后执行脚本。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'exec' => [
                                                                                'description' => '执行命令。',
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'command' => [
                                                                                        'description' => '字符串数组表示的执行具体的命令。',
                                                                                        'type' => 'array',
                                                                                        'items' => [
                                                                                            'description' => '命令内容。',
                                                                                            'type' => 'string',
                                                                                            'example' => 'sleep 3s',
                                                                                        ],
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            'httpGet' => [
                                                                                'description' => '执行HTTP Get请求。',
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'port' => [
                                                                                        'description' => '端口。',
                                                                                        'type' => 'string',
                                                                                        'example' => '80',
                                                                                    ],
                                                                                    'host' => [
                                                                                        'description' => '调用的服务地址。',
                                                                                        'type' => 'string',
                                                                                        'example' => '127.xx.xx.1',
                                                                                    ],
                                                                                    'scheme' => [
                                                                                        'description' => '调用方式。取值：`http`、`https`。',
                                                                                        'type' => 'string',
                                                                                        'example' => 'http',
                                                                                    ],
                                                                                    'httpHeaders' => [
                                                                                        'description' => '发送网络请求时的Header内容。',
                                                                                        'type' => 'array',
                                                                                        'items' => [
                                                                                            'description' => 'Header的键值对。',
                                                                                            'type' => 'object',
                                                                                            'properties' => [
                                                                                                'name' => [
                                                                                                    'description' => 'Header中的键。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => 'key',
                                                                                                ],
                                                                                                'value' => [
                                                                                                    'description' => 'Header中的键对应的值。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => 'value',
                                                                                                ],
                                                                                            ],
                                                                                        ],
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            'tcpSocket' => [
                                                                                'description' => '使用TCP Socket方式请求。',
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'port' => [
                                                                                        'description' => 'TCP Socket端口。',
                                                                                        'type' => 'string',
                                                                                        'example' => '888',
                                                                                    ],
                                                                                    'host' => [
                                                                                        'description' => '远程TCP Socket地址。',
                                                                                        'type' => 'string',
                                                                                        'example' => '127.xx.xx.1',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    'preStop' => [
                                                                        'description' => 'Istio Proxy终止前执行的脚本。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'exec' => [
                                                                                'description' => '执行命令。',
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'command' => [
                                                                                        'description' => '字符串数组表示的执行具体的命令。',
                                                                                        'type' => 'array',
                                                                                        'items' => [
                                                                                            'description' => '命令内容。',
                                                                                            'type' => 'string',
                                                                                            'example' => 'sleep 3s',
                                                                                        ],
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            'httpGet' => [
                                                                                'description' => '执行HTTP Get请求。',
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'port' => [
                                                                                        'description' => '端口。',
                                                                                        'type' => 'string',
                                                                                        'example' => '80',
                                                                                    ],
                                                                                    'host' => [
                                                                                        'description' => '调用的服务地址。',
                                                                                        'type' => 'string',
                                                                                        'example' => '127.xx.xx.1',
                                                                                    ],
                                                                                    'scheme' => [
                                                                                        'description' => '调用方式。取值：`http`、`https`。',
                                                                                        'type' => 'string',
                                                                                        'example' => 'http',
                                                                                    ],
                                                                                    'httpHeaders' => [
                                                                                        'description' => '发送网络请求时的Header内容。',
                                                                                        'type' => 'array',
                                                                                        'items' => [
                                                                                            'description' => 'Header的键值对。',
                                                                                            'type' => 'object',
                                                                                            'properties' => [
                                                                                                'name' => [
                                                                                                    'description' => 'Header中的键。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => 'key',
                                                                                                ],
                                                                                                'value' => [
                                                                                                    'description' => 'Header中的值。',
                                                                                                    'type' => 'string',
                                                                                                    'example' => 'value',
                                                                                                ],
                                                                                            ],
                                                                                        ],
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                            'tcpSocket' => [
                                                                                'description' => '使用TCP Socket方式请求。',
                                                                                'type' => 'object',
                                                                                'properties' => [
                                                                                    'port' => [
                                                                                        'description' => '端口。',
                                                                                        'type' => 'string',
                                                                                        'example' => '888',
                                                                                    ],
                                                                                    'host' => [
                                                                                        'description' => '地址。',
                                                                                        'type' => 'string',
                                                                                        'example' => '127.xx.xx.1',
                                                                                    ],
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'SidecarProxyInitResourceLimit' => [
                                                                'description' => 'istio-init初始化容器资源限制。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'ResourceCPULimit' => [
                                                                        'description' => 'istio-init初始化容器CPU资源限制。',
                                                                        'type' => 'string',
                                                                        'example' => '2000m',
                                                                    ],
                                                                    'ResourceMemoryLimit' => [
                                                                        'description' => 'istio-init初始化容器内存资源限制。',
                                                                        'type' => 'string',
                                                                        'example' => '1024Mi',
                                                                    ],
                                                                ],
                                                            ],
                                                            'SidecarProxyInitResourceRequest' => [
                                                                'description' => 'istio-init初始化容器资源所需。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'ResourceCPURequest' => [
                                                                        'description' => 'istio-init初始化容器所需CPU资源。',
                                                                        'type' => 'string',
                                                                        'example' => '10m',
                                                                    ],
                                                                    'ResourceMemoryRequest' => [
                                                                        'description' => 'istio-init初始化容器所需内存资源。',
                                                                        'type' => 'string',
                                                                        'example' => '10Mi',
                                                                    ],
                                                                ],
                                                            ],
                                                            'DiscoverySelectors' => [
                                                                'description' => '用于选择性服务发现的数据平面命名空间标签选择器列表。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '用于选择性服务发现的数据平面命名空间标签选择器列表。',
                                                                    'type' => 'object',
                                                                    'example' => '[{"matchExpressions":[{"key":"asm-discovery","operator":"Exists"}]}]',
                                                                ],
                                                            ],
                                                            'OPAScopeInjection' => [
                                                                'description' => 'OPA注入范围控制。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'OPAScopeInjected' => [
                                                                        'description' => '是否启用OPA注入范围控制能力。取值：'."\n"
                                                                            ."\n"
                                                                            .'- `true`：启用OPA注入范围控制能力。'."\n"
                                                                            ."\n"
                                                                            .'- `false`：不启用OPA注入范围控制能力。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'false',
                                                                    ],
                                                                ],
                                                            ],
                                                            'CRAggregationConfiguration' => [
                                                                'description' => '数据面KubeAPI访问能力',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Enabled' => [
                                                                        'description' => '是否启用数据面KubeAPI访问能力。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                ],
                                                            ],
                                                            'NFDConfiguration' => [
                                                                'description' => '节点特征自动获取配置。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Enabled' => [
                                                                        'description' => '节点特征自动获取能力是否启用。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'NFDLabelPruned' => [
                                                                        'description' => '禁用节点特征自动获取能力时，是否清除了节点上的特征相关标签。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                ],
                                                            ],
                                                            'AccessLogExtraConf' => [
                                                                'description' => '访问日志功能增强配置。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'GatewayLifecycle' => [
                                                                        'description' => '采集到SLS的入口网关访问日志的存储周期（天）。例如30代表30天。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '30',
                                                                    ],
                                                                    'SidecarLifecycle' => [
                                                                        'description' => '采集到SLS的Sidecar访问日志的存储周期（天）。例如30代表30天。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '30',
                                                                    ],
                                                                    'GatewayEnabled' => [
                                                                        'description' => '是否启用网关日志采集。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'SidecarEnabled' => [
                                                                        'description' => '是否启用Sidecar日志采集。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                ],
                                                            ],
                                                            'AutoDiagnosis' => [
                                                                'description' => '网格自动诊断功能配置',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'AutoDiagnosisEnabled' => [
                                                                        'description' => '是否在修改Istio资源后自动诊断网格，开启时，当修改任意Istio资源时，将在五分钟后触发一次服务网格的自动诊断。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                ],
                                                            ],
                                                            'AdaptiveXdsConfiguration' => [
                                                                'description' => '自适应配置推送优化功能配置。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Enabled' => [
                                                                        'description' => '是否启用自适应配置推送优化功能。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'EgressResources' => [
                                                                        'description' => '自适应配置推送优化出口网关资源配置。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Requests' => [
                                                                                'description' => '自适应配置推送优化出口网关资源需求。',
                                                                                'type' => 'object',
                                                                                'example' => '{"cpu":"100m", "memory": "256Mi"}',
                                                                            ],
                                                                            'Limits' => [
                                                                                'description' => '自适应配置推送优化出口网关资源限制。',
                                                                                'type' => 'object',
                                                                                'example' => '{"cpu":"200m", "memory": "512Mi"}',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    'EgressReplicaCount' => [
                                                                        'description' => '自适应配置推送优化出口网关副本数。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '2',
                                                                    ],
                                                                    'EgressAutoscaleEnabled' => [
                                                                        'description' => '是否为自适应配置推送优化出口网关启用自动扩缩容能力（HPA）。',
                                                                        'type' => 'boolean',
                                                                        'example' => 'true',
                                                                    ],
                                                                    'EgressMinReplica' => [
                                                                        'description' => '自适应配置推送优化出口网关启用HPA的最低副本数。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '1',
                                                                    ],
                                                                    'EgressMaxReplica' => [
                                                                        'description' => '自适应配置推送优化出口网关启用HPA的最高副本数。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int32',
                                                                        'example' => '2',
                                                                    ],
                                                                    'EgressHpaCpu' => [
                                                                        'description' => '自适应配置推送优化出口网关HPA的CPU指标配置。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'TargetAverageUtilization' => [
                                                                                'description' => '自适应配置推送优化出口网关开启HPA时的CPU目标使用率。取值为1~100。如果超过该值，会增加副本；如果低于该值，会减少副本。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '80',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    'EgressHpaMemory' => [
                                                                        'description' => '自适应配置推送优化出口网关HPA的内存指标配置。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'TargetAverageUtilization' => [
                                                                                'description' => '自适应配置推送优化出口网关开启HPA时的内存目标使用率。取值为1~100。如果超过该值，会增加副本；如果低于该值，会减少副本。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '80',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'IstiodExtraConfiguration' => [
                                                                'description' => 'Istiod额外配置。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'LabelsForOffloadedWorkloads' => [
                                                                        'description' => '隔离工作负载的标签。',
                                                                        'type' => 'string',
                                                                        'example' => 'name=xx,region=xx',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Clusters' => [
                                        'description' => '集群列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '集群列表。',
                                            'type' => 'string',
                                            'example' => '["caf089e56daba4c51a8906fe43ea1****","c80f45444b3da447da60a911390c2****"]',
                                        ],
                                    ],
                                    'ClusterSpec' => [
                                        'description' => '服务网格实例规格。取值：'."\n"
                                            ."\n"
                                            .'- `standard`：标准版。'."\n"
                                            ."\n"
                                            .'- `enterprise`：企业版。'."\n"
                                            ."\n"
                                            .'- `ultimate`：旗舰版。'."\n"
                                            ."\n"
                                            .' ',
                                        'type' => 'string',
                                        'example' => 'standard',
                                    ],
                                    'OwnerType' => [
                                        'description' => '创建网格的云产品类型。取值：'."\n"
                                            .'- `ackone`：表示网格由ACK One创建。'."\n"
                                            ."\n"
                                            .'- 当此项取值为空时，代表网格由用户创建。',
                                        'type' => 'string',
                                        'example' => 'ackone',
                                    ],
                                    'OwnerId' => [
                                        'description' => '创建网格的云产品实例ID。',
                                        'type' => 'string',
                                        'example' => 'cc3e96f249d124eb38b72718ec5*****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11fd0027-c27e-41bb-a565-75583054****\\",\\n  \\"ServiceMesh\\": {\\n    \\"Endpoints\\": {\\n      \\"IntranetPilotEndpoint\\": \\"192.168.**.**:15011\\",\\n      \\"PublicPilotEndpoint\\": \\"182.92.**.**:15011\\",\\n      \\"IntranetApiServerEndpoint\\": \\"https://192.168.**.**:6443\\",\\n      \\"PublicApiServerEndpoint\\": \\"https://123.56.**.**:6443\\"\\n    },\\n    \\"ServiceMeshInfo\\": {\\n      \\"Profile\\": \\"Default\\",\\n      \\"CreationTime\\": \\"2020-04-21T09:42:20+08:00\\",\\n      \\"UpdateTime\\": \\"2020-06-03T14:48:54+08:00\\",\\n      \\"ErrorMessage\\": \\" error\\",\\n      \\"Version\\": \\"v1.7.4.0-gfb34ba99-aliyun\\",\\n      \\"State\\": \\"running\\",\\n      \\"ServiceMeshId\\": \\"c08ba3fd1e6484b0f8cc1ad8fe10d****\\",\\n      \\"Name\\": \\"mesh1\\",\\n      \\"RegionId\\": \\"cn-beijing\\"\\n    },\\n    \\"Spec\\": {\\n      \\"Network\\": {\\n        \\"VpcId\\": \\"vpc-2zew0rajjkmxy2369****\\",\\n        \\"SecurityGroupId\\": \\"sg-2ze384sxttxbctnj****\\",\\n        \\"VSwitches\\": [\\n          \\"vsw-2ze66z3ntvsej0mdo****\\"\\n        ]\\n      },\\n      \\"LoadBalancer\\": {\\n        \\"PilotPublicEip\\": true,\\n        \\"PilotPublicLoadbalancerId\\": \\"lb-2zesa8qs8kbkj9jkl****\\",\\n        \\"ApiServerLoadbalancerId\\": \\"lb-2zekaak10uxds44vx****\\",\\n        \\"ApiServerPublicEip\\": true\\n      },\\n      \\"MeshConfig\\": {\\n        \\"OPA\\": {\\n          \\"RequestMemory\\": \\"1024Mi\\",\\n          \\"LogLevel\\": \\"info\\",\\n          \\"Enabled\\": true,\\n          \\"LimitMemory\\": \\"512Mi\\",\\n          \\"RequestCPU\\": \\"2\\",\\n          \\"LimitCPU\\": \\"1\\"\\n        },\\n        \\"Prometheus\\": {\\n          \\"UseExternal\\": false,\\n          \\"ExternalUrl\\": \\"http://prometheus:9090\\"\\n        },\\n        \\"AccessLog\\": {\\n          \\"Enabled\\": true,\\n          \\"Project\\": \\"k8s-log-b7b05d08670e41ca8c8fc0b7718f*****\\"\\n        },\\n        \\"Pilot\\": {\\n          \\"Http10Enabled\\": false,\\n          \\"TraceSampling\\": 100,\\n          \\"Feature\\": {\\n            \\"FilterGatewayClusterConfig\\": false,\\n            \\"EnableSDSServer\\": false\\n          },\\n          \\"ConfigSource\\": {\\n            \\"Enabled\\": false,\\n            \\"NacosID\\": \\"mse-cn-tl326******\\"\\n          }\\n        },\\n        \\"MSE\\": {\\n          \\"Enabled\\": false\\n        },\\n        \\"CustomizedZipkin\\": false,\\n        \\"SidecarInjector\\": {\\n          \\"EnableNamespacesByDefault\\": false,\\n          \\"RequestMemory\\": \\"512Mi\\",\\n          \\"LimitMemory\\": \\"2048Mi\\",\\n          \\"RequestCPU\\": \\"1000m\\",\\n          \\"AutoInjectionPolicyEnabled\\": true,\\n          \\"LimitCPU\\": \\"4000m\\",\\n          \\"InitCNIConfiguration\\": {\\n            \\"ExcludeNamespaces\\": \\"kube-system,istio-system\\",\\n            \\"Enabled\\": false\\n          },\\n          \\"SidecarInjectorWebhookAsYaml\\": \\"{\\\\\\"injectedAnnotations\\\\\\":{\\\\\\"test/istio-init\\\\\\":\\\\\\"runtime/default2\\\\\\",\\\\\\"test/istio-proxy\\\\\\":\\\\\\"runtime/default\\\\\\"},\\\\\\"replicaCount\\\\\\":2,\\\\\\"nodeSelector\\\\\\":{\\\\\\"beta.kubernetes.io/os\\\\\\":\\\\\\"linux\\\\\\"}}\\",\\n          \\"SidecarInjectorNum\\": 1\\n        },\\n        \\"IncludeIPRanges\\": \\"192.168.0.0/16\\",\\n        \\"ExcludeIPRanges\\": \\"172.16.0.0\\",\\n        \\"ExcludeOutboundPorts\\": \\"80,81\\",\\n        \\"ExcludeInboundPorts\\": \\"80,81\\",\\n        \\"Telemetry\\": true,\\n        \\"Edition\\": {\\n          \\"Name\\": \\"Pro\\",\\n          \\"IstiodImageTag\\": \\"v1.9.7.1-3-gb3f1ab3c9c-pro-aliyun\\",\\n          \\"ProxyImageTag\\": \\"v1.9.7.1-3-gb3f1ab3c9c-pro-aliyun\\"\\n        },\\n        \\"ProtocolSupport\\": {\\n          \\"MysqlFilterEnabled\\": false,\\n          \\"RedisFilterEnabled\\": false,\\n          \\"ThriftFilterEnabled\\": false,\\n          \\"DubboFilterEnabled\\": false\\n        },\\n        \\"OutboundTrafficPolicy\\": \\"ALLOW_ANY\\",\\n        \\"Kiali\\": {\\n          \\"Enabled\\": false,\\n          \\"Url\\": \\"http://1.2.**.**:20001\\"\\n        },\\n        \\"Tracing\\": true,\\n        \\"WebAssemblyFilterDeployment\\": {\\n          \\"Enabled\\": false\\n        },\\n        \\"EnableLocalityLB\\": true,\\n        \\"Audit\\": {\\n          \\"Enabled\\": true,\\n          \\"Project\\": \\"audit-project\\",\\n          \\"AuditProjectStatus\\": \\"audit_project_not_exist\\"\\n        },\\n        \\"Proxy\\": {\\n          \\"RequestMemory\\": \\"128Mi\\",\\n          \\"ClusterDomain\\": \\"cluster.domain\\",\\n          \\"LimitMemory\\": \\"1024Mi\\",\\n          \\"RequestCPU\\": \\"100m\\",\\n          \\"EnableDNSProxying\\": false,\\n          \\"LimitCPU\\": \\"2000m\\",\\n          \\"AccessLogServiceEnabled\\": false,\\n          \\"AccessLogServiceHost\\": \\"0.0.0.0\\",\\n          \\"AccessLogServicePort\\": 9999,\\n          \\"AccessLogFormat\\": \\"{\\\\\\"authority_for\\\\\\":\\\\\\"%REQ(:AUTHORITY)%\\\\\\",\\\\\\"bytes_received\\\\\\":\\\\\\"%BYTES_RECEIVED%\\\\\\",\\\\\\"bytes_sent\\\\\\":\\\\\\"%BYTES_SENT%\\\\\\",\\\\\\"downstream_local_address\\\\\\":\\\\\\"%DOWNSTREAM_LOCAL_ADDRESS%\\\\\\",\\\\\\"downstream_remote_address\\\\\\":\\\\\\"%DOWNSTREAM_REMOTE_ADDRESS%\\\\\\",\\\\\\"duration\\\\\\":\\\\\\"%DURATION%\\\\\\",\\\\\\"istio_policy_status\\\\\\":\\\\\\"%DYNAMIC_METADATA(istio.mixer:status)%\\\\\\",\\\\\\"method\\\\\\":\\\\\\"%REQ(:METHOD)%\\\\\\",\\\\\\"path\\\\\\":\\\\\\"%REQ(X-ENVOY-ORIGINAL-PATH?:PATH)%\\\\\\",\\\\\\"protocol\\\\\\":\\\\\\"%PROTOCOL%\\\\\\",\\\\\\"request_id\\\\\\":\\\\\\"%REQ(X-REQUEST-ID)%\\\\\\",\\\\\\"requested_server_name\\\\\\":\\\\\\"%REQUESTED_SERVER_NAME%\\\\\\",\\\\\\"response_code\\\\\\":\\\\\\"%RESPONSE_CODE%\\\\\\",\\\\\\"response_flags\\\\\\":\\\\\\"%RESPONSE_FLAGS%\\\\\\",\\\\\\"route_name\\\\\\":\\\\\\"%ROUTE_NAME%\\\\\\",\\\\\\"start_time\\\\\\":\\\\\\"%START_TIME%\\\\\\",\\\\\\"trace_id\\\\\\":\\\\\\"%REQ(X-B3-TRACEID)%\\\\\\",\\\\\\"upstream_cluster\\\\\\":\\\\\\"%UPSTREAM_CLUSTER%\\\\\\",\\\\\\"upstream_host\\\\\\":\\\\\\"%UPSTREAM_HOST%\\\\\\",\\\\\\"upstream_local_address\\\\\\":\\\\\\"%UPSTREAM_LOCAL_ADDRESS%\\\\\\",\\\\\\"upstream_service_time\\\\\\":\\\\\\"%RESP(X-ENVOY-UPSTREAM-SERVICE-TIME)%\\\\\\",\\\\\\"upstream_transport_failure_reason\\\\\\":\\\\\\"%UPSTREAM_TRANSPORT_FAILURE_REASON%\\\\\\",\\\\\\"user_agent\\\\\\":\\\\\\"%REQ(USER-AGENT)%\\\\\\",\\\\\\"x_forwarded_for\\\\\\":\\\\\\"%REQ(X-FORWARDED-FOR)%\\\\\\"}\\",\\n          \\"AccessLogFile\\": \\"/dev/stdout\\"\\n        },\\n        \\"K8sNewAPIsSupport\\": {\\n          \\"GatewayAPIEnabled\\": false\\n        },\\n        \\"LocalityLB\\": {\\n          \\"Enabled\\": false,\\n          \\"Failover\\": {\\n            \\"failover\\": [\\n              {\\n                \\"from\\": \\"cn-hangzhou\\",\\n                \\"to\\": \\"cn-shanghai\\"\\n              }\\n            ]\\n          },\\n          \\"Distribute\\": [\\n            {\\n              \\"from\\": \\"cn-shanghai\\",\\n              \\"to\\": {\\n                \\"cn-hangzhou/*\\": 50,\\n                \\"cn-shanghai/*\\": 25,\\n                \\"cn-zhangjiakou/*\\": 25\\n              }\\n            },\\n            {\\n              \\"from\\": \\"cn-hangzhou\\",\\n              \\"to\\": {\\n                \\"cn-hangzhou/*\\": 50,\\n                \\"cn-shanghai/*\\": 25,\\n                \\"cn-zhangjiakou/*\\": 25\\n              }\\n            }\\n          ]\\n        },\\n        \\"ControlPlaneLogInfo\\": {\\n          \\"Enabled\\": false,\\n          \\"Project\\": \\"mesh-log-cbeb85a09161b4a26ab73e0ac****\\",\\n          \\"LogTTL\\": 30\\n        },\\n        \\"ExtraConfiguration\\": {\\n          \\"IstioCRHistory\\": {\\n            \\"EnableHistory\\": false\\n          },\\n          \\"CRAggregationEnabled\\": false,\\n          \\"MultiBuffer\\": {\\n            \\"Enabled\\": false,\\n            \\"PollDelay\\": \\"0.02s\\"\\n          },\\n          \\"TerminationDrainDuration\\": \\"5s\\",\\n          \\"Lifecycle\\": {\\n            \\"postStart\\": {\\n              \\"exec\\": {\\n                \\"command\\": [\\n                  \\"sleep 3s\\"\\n                ]\\n              },\\n              \\"httpGet\\": {\\n                \\"port\\": \\"80\\",\\n                \\"host\\": \\"127.xx.xx.1\\",\\n                \\"scheme\\": \\"http\\",\\n                \\"httpHeaders\\": [\\n                  {\\n                    \\"name\\": \\"key\\",\\n                    \\"value\\": \\"value\\"\\n                  }\\n                ]\\n              },\\n              \\"tcpSocket\\": {\\n                \\"port\\": \\"888\\",\\n                \\"host\\": \\"127.xx.xx.1\\"\\n              }\\n            },\\n            \\"preStop\\": {\\n              \\"exec\\": {\\n                \\"command\\": [\\n                  \\"sleep 3s\\"\\n                ]\\n              },\\n              \\"httpGet\\": {\\n                \\"port\\": \\"80\\",\\n                \\"host\\": \\"127.xx.xx.1\\",\\n                \\"scheme\\": \\"http\\",\\n                \\"httpHeaders\\": [\\n                  {\\n                    \\"name\\": \\"key\\",\\n                    \\"value\\": \\"value\\"\\n                  }\\n                ]\\n              },\\n              \\"tcpSocket\\": {\\n                \\"port\\": \\"888\\",\\n                \\"host\\": \\"127.xx.xx.1\\"\\n              }\\n            }\\n          },\\n          \\"SidecarProxyInitResourceLimit\\": {\\n            \\"ResourceCPULimit\\": \\"2000m\\",\\n            \\"ResourceMemoryLimit\\": \\"1024Mi\\"\\n          },\\n          \\"SidecarProxyInitResourceRequest\\": {\\n            \\"ResourceCPURequest\\": \\"10m\\",\\n            \\"ResourceMemoryRequest\\": \\"10Mi\\"\\n          },\\n          \\"DiscoverySelectors\\": [\\n            [\\n              {\\n                \\"matchExpressions\\": [\\n                  {\\n                    \\"key\\": \\"asm-discovery\\",\\n                    \\"operator\\": \\"Exists\\"\\n                  }\\n                ]\\n              }\\n            ]\\n          ],\\n          \\"OPAScopeInjection\\": {\\n            \\"OPAScopeInjected\\": false\\n          },\\n          \\"CRAggregationConfiguration\\": {\\n            \\"Enabled\\": true\\n          },\\n          \\"NFDConfiguration\\": {\\n            \\"Enabled\\": true,\\n            \\"NFDLabelPruned\\": true\\n          },\\n          \\"AccessLogExtraConf\\": {\\n            \\"GatewayLifecycle\\": 30,\\n            \\"SidecarLifecycle\\": 30,\\n            \\"GatewayEnabled\\": true,\\n            \\"SidecarEnabled\\": true\\n          },\\n          \\"AutoDiagnosis\\": {\\n            \\"AutoDiagnosisEnabled\\": true\\n          },\\n          \\"AdaptiveXdsConfiguration\\": {\\n            \\"Enabled\\": true,\\n            \\"EgressResources\\": {\\n              \\"Requests\\": {\\n                \\"cpu\\": \\"100m\\",\\n                \\"memory\\": \\"256Mi\\"\\n              },\\n              \\"Limits\\": {\\n                \\"cpu\\": \\"200m\\",\\n                \\"memory\\": \\"512Mi\\"\\n              }\\n            },\\n            \\"EgressReplicaCount\\": 2,\\n            \\"EgressAutoscaleEnabled\\": true,\\n            \\"EgressMinReplica\\": 1,\\n            \\"EgressMaxReplica\\": 2,\\n            \\"EgressHpaCpu\\": {\\n              \\"TargetAverageUtilization\\": 80\\n            },\\n            \\"EgressHpaMemory\\": {\\n              \\"TargetAverageUtilization\\": 80\\n            }\\n          },\\n          \\"IstiodExtraConfiguration\\": {\\n            \\"LabelsForOffloadedWorkloads\\": \\"name=xx,region=xx\\"\\n          }\\n        }\\n      }\\n    },\\n    \\"Clusters\\": [\\n      \\"[\\\\\\"caf089e56daba4c51a8906fe43ea1****\\\\\\",\\\\\\"c80f45444b3da447da60a911390c2****\\\\\\"]\\"\\n    ],\\n    \\"ClusterSpec\\": \\"standard\\",\\n    \\"OwnerType\\": \\"ackone\\",\\n    \\"OwnerId\\": \\"cc3e96f249d124eb38b72718ec5*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeServiceMeshDetailResponse>\\n    <RequestId>11fd0027-c27e-41bb-a565-75583054****</RequestId>\\n    <ServiceMesh>\\n        <Endpoints>\\n            <IntranetPilotEndpoint>192.168.**.**:15011</IntranetPilotEndpoint>\\n            <PublicPilotEndpoint>182.92.**.**:15011</PublicPilotEndpoint>\\n            <IntranetApiServerEndpoint>https://192.168.**.**:6443</IntranetApiServerEndpoint>\\n            <PublicApiServerEndpoint>https://123.56.**.**:6443</PublicApiServerEndpoint>\\n        </Endpoints>\\n        <ServiceMeshInfo>\\n            <Profile>Default</Profile>\\n            <CreationTime>2020-04-21T09:42:20+08:00</CreationTime>\\n            <UpdateTime>2020-06-03T14:48:54+08:00</UpdateTime>\\n            <ErrorMessage> error</ErrorMessage>\\n            <Version>v1.7.4.0-gfb34ba99-aliyun</Version>\\n            <State>running</State>\\n            <ServiceMeshId>c08ba3fd1e6484b0f8cc1ad8fe10d****</ServiceMeshId>\\n            <Name>mesh1</Name>\\n            <RegionId>cn-beijing</RegionId>\\n        </ServiceMeshInfo>\\n        <Spec>\\n            <Network>\\n                <VpcId>vpc-2zew0rajjkmxy2369****</VpcId>\\n                <SecurityGroupId>sg-2ze384sxttxbctnj****</SecurityGroupId>\\n                <VSwitches>vsw-2ze66z3ntvsej0mdo****</VSwitches>\\n            </Network>\\n            <LoadBalancer>\\n                <PilotPublicEip>true</PilotPublicEip>\\n                <PilotPublicLoadbalancerId>lb-2zesa8qs8kbkj9jkl****</PilotPublicLoadbalancerId>\\n                <ApiServerLoadbalancerId>lb-2zekaak10uxds44vx****</ApiServerLoadbalancerId>\\n                <ApiServerPublicEip>true</ApiServerPublicEip>\\n            </LoadBalancer>\\n            <MeshConfig>\\n                <OPA>\\n                    <RequestMemory>1024Mi</RequestMemory>\\n                    <LogLevel>info</LogLevel>\\n                    <Enabled>true</Enabled>\\n                    <LimitMemory>512Mi</LimitMemory>\\n                    <RequestCPU>2</RequestCPU>\\n                    <LimitCPU>1</LimitCPU>\\n                </OPA>\\n                <Prometheus>\\n                    <UseExternal>false</UseExternal>\\n                    <ExternalUrl>http://prometheus:9090</ExternalUrl>\\n                </Prometheus>\\n                <AccessLog>\\n                    <Enabled>true</Enabled>\\n                    <Project>k8s-log-b7b05d08670e41ca8c8fc0b7718f*****</Project>\\n                </AccessLog>\\n                <Pilot>\\n                    <Http10Enabled>false</Http10Enabled>\\n                    <TraceSampling>100</TraceSampling>\\n                    <Feature>\\n                        <FilterGatewayClusterConfig>false</FilterGatewayClusterConfig>\\n                        <EnableSDSServer>false</EnableSDSServer>\\n                    </Feature>\\n                    <ConfigSource>\\n                        <Enabled>false</Enabled>\\n                        <NacosID>mse-cn-tl326******</NacosID>\\n                    </ConfigSource>\\n                </Pilot>\\n                <MSE>\\n                    <Enabled>false</Enabled>\\n                </MSE>\\n                <CustomizedZipkin>false</CustomizedZipkin>\\n                <SidecarInjector>\\n                    <EnableNamespacesByDefault>false</EnableNamespacesByDefault>\\n                    <RequestMemory>512Mi</RequestMemory>\\n                    <LimitMemory>2048Mi</LimitMemory>\\n                    <RequestCPU>1000m</RequestCPU>\\n                    <AutoInjectionPolicyEnabled>true</AutoInjectionPolicyEnabled>\\n                    <LimitCPU>4000m</LimitCPU>\\n                    <InitCNIConfiguration>\\n                        <ExcludeNamespaces>kube-system,istio-system</ExcludeNamespaces>\\n                        <Enabled>false</Enabled>\\n                    </InitCNIConfiguration>\\n                    <SidecarInjectorWebhookAsYaml>{\\"injectedAnnotations\\":{\\"test/istio-init\\":\\"runtime/default2\\",\\"test/istio-proxy\\":\\"runtime/default\\"},\\"replicaCount\\":2,\\"nodeSelector\\":{\\"beta.kubernetes.io/os\\":\\"linux\\"}}</SidecarInjectorWebhookAsYaml>\\n                    <SidecarInjectorNum>1</SidecarInjectorNum>\\n                </SidecarInjector>\\n                <IncludeIPRanges>192.168.0.0/16</IncludeIPRanges>\\n                <ExcludeIPRanges>172.16.0.0</ExcludeIPRanges>\\n                <ExcludeOutboundPorts>80,81</ExcludeOutboundPorts>\\n                <ExcludeInboundPorts>80,81</ExcludeInboundPorts>\\n                <Telemetry>true</Telemetry>\\n                <Edition>\\n                    <Name>Pro</Name>\\n                    <IstiodImageTag>v1.9.7.1-3-gb3f1ab3c9c-pro-aliyun</IstiodImageTag>\\n                    <ProxyImageTag>v1.9.7.1-3-gb3f1ab3c9c-pro-aliyun</ProxyImageTag>\\n                </Edition>\\n                <ProtocolSupport>\\n                    <MysqlFilterEnabled>false</MysqlFilterEnabled>\\n                    <RedisFilterEnabled>false</RedisFilterEnabled>\\n                    <ThriftFilterEnabled>false</ThriftFilterEnabled>\\n                    <DubboFilterEnabled>false</DubboFilterEnabled>\\n                </ProtocolSupport>\\n                <OutboundTrafficPolicy>ALLOW_ANY</OutboundTrafficPolicy>\\n                <Kiali>\\n                    <Enabled>false</Enabled>\\n                    <Url>http://1.2.**.**:20001</Url>\\n                </Kiali>\\n                <Tracing>true</Tracing>\\n                <WebAssemblyFilterDeployment>\\n                    <Enabled>false</Enabled>\\n                </WebAssemblyFilterDeployment>\\n                <EnableLocalityLB>true</EnableLocalityLB>\\n                <Audit>\\n                    <Enabled>true</Enabled>\\n                    <Project>audit-project</Project>\\n                    <AuditProjectStatus>audit_project_not_exist</AuditProjectStatus>\\n                </Audit>\\n                <Proxy>\\n                    <RequestMemory>128Mi</RequestMemory>\\n                    <ClusterDomain>cluster.domain</ClusterDomain>\\n                    <LimitMemory>1024Mi</LimitMemory>\\n                    <RequestCPU>100m</RequestCPU>\\n                    <EnableDNSProxying>false</EnableDNSProxying>\\n                    <LimitCPU>2000m</LimitCPU>\\n                    <AccessLogServiceEnabled>false</AccessLogServiceEnabled>\\n                    <AccessLogServiceHost>0.0.0.0</AccessLogServiceHost>\\n                    <AccessLogServicePort>9999</AccessLogServicePort>\\n                    <AccessLogFormat>{\\"authority_for\\":\\"%REQ(:AUTHORITY)%\\",\\"bytes_received\\":\\"%BYTES_RECEIVED%\\",\\"bytes_sent\\":\\"%BYTES_SENT%\\",\\"downstream_local_address\\":\\"%DOWNSTREAM_LOCAL_ADDRESS%\\",\\"downstream_remote_address\\":\\"%DOWNSTREAM_REMOTE_ADDRESS%\\",\\"duration\\":\\"%DURATION%\\",\\"istio_policy_status\\":\\"%DYNAMIC_METADATA(istio.mixer:status)%\\",\\"method\\":\\"%REQ(:METHOD)%\\",\\"path\\":\\"%REQ(X-ENVOY-ORIGINAL-PATH?:PATH)%\\",\\"protocol\\":\\"%PROTOCOL%\\",\\"request_id\\":\\"%REQ(X-REQUEST-ID)%\\",\\"requested_server_name\\":\\"%REQUESTED_SERVER_NAME%\\",\\"response_code\\":\\"%RESPONSE_CODE%\\",\\"response_flags\\":\\"%RESPONSE_FLAGS%\\",\\"route_name\\":\\"%ROUTE_NAME%\\",\\"start_time\\":\\"%START_TIME%\\",\\"trace_id\\":\\"%REQ(X-B3-TRACEID)%\\",\\"upstream_cluster\\":\\"%UPSTREAM_CLUSTER%\\",\\"upstream_host\\":\\"%UPSTREAM_HOST%\\",\\"upstream_local_address\\":\\"%UPSTREAM_LOCAL_ADDRESS%\\",\\"upstream_service_time\\":\\"%RESP(X-ENVOY-UPSTREAM-SERVICE-TIME)%\\",\\"upstream_transport_failure_reason\\":\\"%UPSTREAM_TRANSPORT_FAILURE_REASON%\\",\\"user_agent\\":\\"%REQ(USER-AGENT)%\\",\\"x_forwarded_for\\":\\"%REQ(X-FORWARDED-FOR)%\\"}</AccessLogFormat>\\n                    <AccessLogFile>/dev/stdout</AccessLogFile>\\n                </Proxy>\\n                <K8sNewAPIsSupport>\\n                    <GatewayAPIEnabled>false</GatewayAPIEnabled>\\n                </K8sNewAPIsSupport>\\n                <LocalityLB>\\n                    <Enabled>false</Enabled>\\n                </LocalityLB>\\n                <ControlPlaneLogInfo>\\n                    <Enabled>false</Enabled>\\n                    <Project>mesh-log-cbeb85a09161b4a26ab73e0ac****</Project>\\n                </ControlPlaneLogInfo>\\n                <ExtraConfiguration>\\n                    <IstioCRHistory>\\n                        <EnableHistory>false</EnableHistory>\\n                    </IstioCRHistory>\\n                    <CRAggregationEnabled>false</CRAggregationEnabled>\\n                    <MultiBuffer>\\n                        <Enabled>false</Enabled>\\n                        <PollDelay>0.02s</PollDelay>\\n                    </MultiBuffer>\\n                    <TerminationDrainDuration>5s</TerminationDrainDuration>\\n                    <Lifecycle>\\n                        <postStart>\\n                            <exec>\\n                                <command>sleep 3s</command>\\n                            </exec>\\n                            <httpGet>\\n                                <port>80</port>\\n                                <host>127.xx.xx.1</host>\\n                                <scheme>http</scheme>\\n                                <httpHeaders>\\n                                    <name>key</name>\\n                                    <value>value</value>\\n                                </httpHeaders>\\n                            </httpGet>\\n                            <tcpSocket>\\n                                <port>888</port>\\n                                <host>127.xx.xx.1</host>\\n                            </tcpSocket>\\n                        </postStart>\\n                        <preStop>\\n                            <exec>\\n                                <command>sleep 3s</command>\\n                            </exec>\\n                            <httpGet>\\n                                <port>80</port>\\n                                <host>127.xx.xx.1</host>\\n                                <scheme>http</scheme>\\n                                <httpHeaders>\\n                                    <name>key</name>\\n                                    <value>value</value>\\n                                </httpHeaders>\\n                            </httpGet>\\n                            <tcpSocket>\\n                                <port>888</port>\\n                                <host>127.xx.xx.1</host>\\n                            </tcpSocket>\\n                        </preStop>\\n                    </Lifecycle>\\n                    <SidecarProxyInitResourceLimit>\\n                        <ResourceCPULimit>2000m</ResourceCPULimit>\\n                        <ResourceMemoryLimit>1024Mi</ResourceMemoryLimit>\\n                    </SidecarProxyInitResourceLimit>\\n                    <SidecarProxyInitResourceRequest>\\n                        <ResourceCPURequest>10m</ResourceCPURequest>\\n                        <ResourceMemoryRequest>10Mi</ResourceMemoryRequest>\\n                    </SidecarProxyInitResourceRequest>\\n                    <DiscoverySelectors/>\\n                    <OPAScopeInjection>\\n                        <OPAScopeInjected>false</OPAScopeInjected>\\n                    </OPAScopeInjection>\\n                    <CRAggregationConfiguration>\\n                        <Enabled>true</Enabled>\\n                    </CRAggregationConfiguration>\\n                    <NFDConfiguration>\\n                        <Enabled>true</Enabled>\\n                        <NFDLabelPruned>true</NFDLabelPruned>\\n                    </NFDConfiguration>\\n                    <AccessLogExtraConf>\\n                        <GatewayLifecycle>30</GatewayLifecycle>\\n                        <SidecarLifecycle>30</SidecarLifecycle>\\n                    </AccessLogExtraConf>\\n                    <AutoDiagnosis>\\n                        <AutoDiagnosisEnabled>true</AutoDiagnosisEnabled>\\n                    </AutoDiagnosis>\\n                    <AdaptiveXdsConfiguration>\\n                        <Enabled>true</Enabled>\\n                        <EgressResources/>\\n                        <EgressReplicaCount>2</EgressReplicaCount>\\n                        <EgressAutoscaleEnabled>true</EgressAutoscaleEnabled>\\n                        <EgressMinReplica>1</EgressMinReplica>\\n                        <EgressMaxReplica>2</EgressMaxReplica>\\n                        <EgressHpaCpu>\\n                            <TargetAverageUtilization>80</TargetAverageUtilization>\\n                        </EgressHpaCpu>\\n                        <EgressHpaMemory>\\n                            <TargetAverageUtilization>80</TargetAverageUtilization>\\n                        </EgressHpaMemory>\\n                    </AdaptiveXdsConfiguration>\\n                </ExtraConfiguration>\\n            </MeshConfig>\\n        </Spec>\\n        <Clusters>[\\"caf089e56daba4c51a8906fe43ea1****\\",\\"c80f45444b3da447da60a911390c2****\\"]</Clusters>\\n        <ClusterSpec>standard</ClusterSpec>\\n        <OwnerType>ackone</OwnerType>\\n        <OwnerId>cc3e96f249d124eb38b72718ec5*****</OwnerId>\\n    </ServiceMesh>\\n</DescribeServiceMeshDetailResponse>","errorExample":""}]',
            'title' => '获取服务网格详情',
            'summary' => '调用DescribeServiceMeshDetail获取服务网格详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeServiceMeshKubeconfig' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网格服务ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'PrivateIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否内网访问',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'Kubeconfig' => [
                                'description' => 'kubeconfig配置内容',
                                'type' => 'string',
                                'example' => 'apiVersion: v1 clusters: - cluster:     server: https://47.110.xx.xx:6443     certificate-authority-data: LS0tLS1CRUdJTiBDRVJUSUZJQ0FURS0tLS0tCk1JSURUakNDQWphZ0F3SUJBZ0lVYzBQVy82ejR1aHlxYkRRdnNsV1htSmpJeFdNd0RRWUpLb1pJaHZjTkFRRUwKQlFBd1BqRW5NQThHQTFVRUNoTUlhR0Z1WjNwb2IzVXdGQVlEVlFRS0V3MWhiR2xpWVdKaElHTnNiM1ZrTVJNdwpFUVlEVlFRREV3cHJkV0psY201bGRHVnpNQ0FYRFRJeU1EUXdOekExTVRnd01Gb1lEekl3TlRJd016TXdNRFV4Ck9EQXdXakErTVNjd0R3WURWUVFLRXdob1lXNW5lbWh2ZFRBVUJnTlZCQW9URFdGc2FXSmhZbUVnWTJ4dmRXUXgKRXpBUkJnTlZCQU1UQ210MVltVnlibVYwWlhNd2dnRWlNQTBHQ1NxR1NJYjNEUUVCQVFVQUE0SUJE****',
                            ],
                            'ExpireTime' => [
                                'description' => 'kubeconfig证书的过期时间。格式为：YYYY-MM-DD hh:mm:ss。',
                                'type' => 'string',
                                'example' => '2024-05-28 16:00:00',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"Kubeconfig\\": \\"apiVersion: v1 clusters: - cluster:     server: https://47.110.xx.xx:6443     certificate-authority-data: LS0tLS1CRUdJTiBDRVJUSUZJQ0FURS0tLS0tCk1JSURUakNDQWphZ0F3SUJBZ0lVYzBQVy82ejR1aHlxYkRRdnNsV1htSmpJeFdNd0RRWUpLb1pJaHZjTkFRRUwKQlFBd1BqRW5NQThHQTFVRUNoTUlhR0Z1WjNwb2IzVXdGQVlEVlFRS0V3MWhiR2xpWVdKaElHTnNiM1ZrTVJNdwpFUVlEVlFRREV3cHJkV0psY201bGRHVnpNQ0FYRFRJeU1EUXdOekExTVRnd01Gb1lEekl3TlRJd016TXdNRFV4Ck9EQXdXakErTVNjd0R3WURWUVFLRXdob1lXNW5lbWh2ZFRBVUJnTlZCQW9URFdGc2FXSmhZbUVnWTJ4dmRXUXgKRXpBUkJnTlZCQU1UQ210MVltVnlibVYwWlhNd2dnRWlNQTBHQ1NxR1NJYjNEUUVCQVFVQUE0SUJE****\\",\\n  \\"ExpireTime\\": \\"2024-05-28 16:00:00\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeServiceMeshKubeconfigResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <Kubeconfig>apiVersion: v1 clusters: - cluster:     server: https://47.110.xx.xx:6443     certificate-authority-data: LS0tLS1CRUdJTiBDRVJUSUZJQ0FURS0tLS0tCk1JSURUakNDQWphZ0F3SUJBZ0lVYzBQVy82ejR1aHlxYkRRdnNsV1htSmpJeFdNd0RRWUpLb1pJaHZjTkFRRUwKQlFBd1BqRW5NQThHQTFVRUNoTUlhR0Z1WjNwb2IzVXdGQVlEVlFRS0V3MWhiR2xpWVdKaElHTnNiM1ZrTVJNdwpFUVlEVlFRREV3cHJkV0psY201bGRHVnpNQ0FYRFRJeU1EUXdOekExTVRnd01Gb1lEekl3TlRJd016TXdNRFV4Ck9EQXdXakErTVNjd0R3WURWUVFLRXdob1lXNW5lbWh2ZFRBVUJnTlZCQW9URFdGc2FXSmhZbUVnWTJ4dmRXUXgKRXpBUkJnTlZCQU1UQ210MVltVnlibVYwWlhNd2dnRWlNQTBHQ1NxR1NJYjNEUUVCQVFVQUE0SUJE****</Kubeconfig>\\n</DescribeServiceMeshKubeconfigResponse>","errorExample":""}]',
            'title' => '获取KubeConfig配置',
            'summary' => '调用DescribeServiceMeshKubeconfig获取连接服务网格的KubeConfig配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeServiceMeshAdditionalStatus' => [
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
                'abilityTreeCode' => '42928',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh4LB119',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ca04bc38979214bf2882be79d39b4****',
                    ],
                ],
                [
                    'name' => 'CheckMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网格检查模式，取值：'."\n"
                            ."\n"
                            .'- `normal`：将仅检查API Server负载均衡、Pilot负载均衡、审计日志、数据面Logtail安装的状态。'."\n"
                            ."\n"
                            .'- `full`：将检查包括normal模式下检查项以及控制面日志、访问日志、网格安全组、APIServer EIP的状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'full',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '状态查询结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '11fd0027-c27e-41bb-a565-75583054****',
                            ],
                            'ClusterStatus' => [
                                'description' => '集群状态。',
                                'type' => 'object',
                                'properties' => [
                                    'ApiServerLoadBalancerStatus' => [
                                        'description' => 'API Server负载均衡状态检查。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SLBExistStatus' => [
                                                'description' => 'CLB状态检查结果，取值：'."\n"
                                                    ."\n"
                                                    .'- `exist`：存在。'."\n"
                                                    .'- `not_exist`：不存在。'."\n"
                                                    .'- `conflict`：检测存在冲突。'."\n"
                                                    .'- `failed`：检测失败 。'."\n"
                                                    .'- ` time_out`：检测超时。',
                                                'type' => 'string',
                                                'example' => 'exist',
                                            ],
                                            'SLBBackEndServerNumStatus' => [
                                                'description' => 'CLB数目检测结果，取值：'."\n"
                                                    ."\n"
                                                    .'- `too_much`：数量过多。'."\n"
                                                    ."\n"
                                                    .'- `num_exact`：数量刚好。'."\n"
                                                    ."\n"
                                                    .'- `too_little`：数量过少。',
                                                'type' => 'string',
                                                'example' => 'num_exact',
                                            ],
                                            'Reused' => [
                                                'description' => 'CLB是否被复用，取值：'."\n"
                                                    ."\n"
                                                    .'- `true`：CLB被复用。'."\n"
                                                    ."\n"
                                                    .'- `false`：CLB未被复用。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'Locked' => [
                                                'description' => 'CLB是否被锁定，取值：'."\n"
                                                    ."\n"
                                                    .'- `true`：CLB被锁定。'."\n"
                                                    ."\n"
                                                    .'- `false`：CLB未被锁定。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'PayType' => [
                                                'description' => 'CLB付费类型，取值：'."\n"
                                                    ."\n"
                                                    .'- `PrePay`：包年包月。'."\n"
                                                    ."\n"
                                                    .'- `PayOnDemand`：按量付费。',
                                                'type' => 'string',
                                                'example' => 'PrePay',
                                            ],
                                        ],
                                    ],
                                    'PilotLoadBalancerStatus' => [
                                        'description' => 'Pilot负载均衡状态检查。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SLBExistStatus' => [
                                                'description' => 'CLB状态检查结果，取值：'."\n"
                                                    .'- `exist`：存在。'."\n"
                                                    .'- `not_exist`：不存在。'."\n"
                                                    .'- `conflict`：检测存在冲突。'."\n"
                                                    .'- `failed`：检测失败 。'."\n"
                                                    .'- ` time_out`：检测超时。',
                                                'type' => 'string',
                                                'example' => 'exist',
                                            ],
                                            'SLBBackEndServerNumStatus' => [
                                                'description' => 'CLB数目检测结果，取值：'."\n"
                                                    .'- `too_much`：数量过多。'."\n"
                                                    ."\n"
                                                    .'- `num_exact`：数量刚好。'."\n"
                                                    ."\n"
                                                    .'- `too_little`：数量过少。',
                                                'type' => 'string',
                                                'example' => 'num_exact',
                                            ],
                                            'Reused' => [
                                                'description' => 'CLB是否被复用，取值：'."\n"
                                                    ."\n"
                                                    .'- `true`：CLB被复用。'."\n"
                                                    ."\n"
                                                    .'- `false`：CLB未被复用。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'Locked' => [
                                                'description' => 'CLB是否被锁定，取值：'."\n"
                                                    ."\n"
                                                    .'- `true`：CLB被锁定。'."\n"
                                                    .' '."\n"
                                                    .'- `false`：CLB未被锁定。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'PayType' => [
                                                'description' => 'CLB付费类型，取值：'."\n"
                                                    ."\n"
                                                    .'- `PrePay`：包年包月。'."\n"
                                                    ."\n"
                                                    .'- `PayOnDemand`：按量付费。',
                                                'type' => 'string',
                                                'example' => 'PayOnDemand',
                                            ],
                                        ],
                                    ],
                                    'CanaryPilotLoadBalancerStatus' => [
                                        'description' => '金丝雀版本Pilot负载均衡状态信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SLBExistStatus' => [
                                                'description' => 'CLB是否存在，取值：'."\n"
                                                    .'- `exist`：存在。'."\n"
                                                    .'- `not_exist`：不存在。'."\n"
                                                    .'- `time_out`：获取状态超时。'."\n"
                                                    .'- `failed`：实例已失效。',
                                                'type' => 'string',
                                                'example' => 'exist',
                                            ],
                                            'SLBBackEndServerNumStatus' => [
                                                'description' => 'CLB后端数量状态，取值：'."\n"
                                                    .'- `num_exact`：符合预期。'."\n"
                                                    .'- `too_much`：后端数量太多。'."\n"
                                                    .'- `too_little`：后端数量太少。',
                                                'type' => 'string',
                                                'example' => 'num_exact',
                                            ],
                                            'Reused' => [
                                                'description' => 'CLB是否被复用，取值：'."\n"
                                                    .'- `true`：被复用，在CLB的监听中检出了非服务网格监听。'."\n"
                                                    .'- `false`：未被复用。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'Locked' => [
                                                'description' => 'CLB是否欠费锁定，取值：'."\n"
                                                    ."\n"
                                                    .'- `true`：已欠费锁定。'."\n"
                                                    ."\n"
                                                    .'- `false`：未欠费锁定。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'PayType' => [
                                                'description' => 'CLB的计费类型，取值：'."\n"
                                                    .'- `PrePay`：包年包月。'."\n"
                                                    .'- `PayOnDemand`（默认值）：按量付费。',
                                                'type' => 'string',
                                                'example' => 'PayOnDemand',
                                            ],
                                        ],
                                    ],
                                    'AuditProjectStatus' => [
                                        'description' => '审计日志存在状态，取值：'."\n"
                                            ."\n"
                                            .'- `exist`：存在。'."\n"
                                            ."\n"
                                            .'- `not exist`：不存在。',
                                        'type' => 'string',
                                        'example' => 'exist',
                                    ],
                                    'LogtailStatusRecord' => [
                                        'description' => '各个数据面集群的logtail安装状态。',
                                        'type' => 'object',
                                        'example' => '{   "ca35eae22013e43758a0e26d04****":{     "accessLogDashboards":[       {         "title":"mesh-access-log_details_cn",         "url":"https://sls.console.aliyun.com/lognext/project/****/dashboard/mesh-access-log_details_cn"       },       {         "title":"mesh-access-log_monitoring_center_cn",         "url":"https://sls.console.aliyun.com/lognext/project/****/dashboard/mesh-access-log_monitoring_center_cn"       }     ],     "logtailStatus":"exist",     "clusterId":"ca35eae22013e43758a0e26d04****"   } }',
                                    ],
                                    'ControlPlaneProjectStatus' => [
                                        'description' => '控制面日志存在状态，可能取值有：'."\n"
                                            ."\n"
                                            .'- `exist`：存在。'."\n"
                                            ."\n"
                                            .'- `not_exist`：不存在。'."\n"
                                            ."\n"
                                            .'- `failed`：检测失败。'."\n"
                                            ."\n"
                                            .'- `time_out`：检测超时。',
                                        'type' => 'string',
                                        'example' => 'exist',
                                    ],
                                    'SgStatus' => [
                                        'description' => '网格安全组复用状态，取值：'."\n"
                                            ."\n"
                                            .'- `reused`：被复用。'."\n"
                                            ."\n"
                                            .'- `not_reused`：未被复用。'."\n"
                                            ."\n"
                                            .'- `failed`：检测失败。'."\n"
                                            ."\n"
                                            .'- `time_out`：检测超时。',
                                        'type' => 'string',
                                        'example' => 'reused',
                                    ],
                                    'ApiServerEIPStatus' => [
                                        'description' => 'ApiServer绑定EIP存在状态，取值：'."\n"
                                            .'- `exist`：存在。'."\n"
                                            ."\n"
                                            .'- `not_exist`：不存在。'."\n"
                                            ."\n"
                                            .'- `failed`：检测失败。'."\n"
                                            ."\n"
                                            .'- `time_out`：检测超时。'."\n"
                                            ."\n"
                                            .'- `not_in_use`：EIP未被绑定至API Server。'."\n"
                                            ."\n"
                                            .'- `locked`：EIP被锁定。',
                                        'type' => 'string',
                                        'example' => 'exist',
                                    ],
                                    'PilotEIPStatus' => [
                                        'description' => 'Pilot绑定EIP存在状态，取值：'."\n"
                                            ."\n"
                                            .'- `exist`：存在。'."\n"
                                            ."\n"
                                            .'- `not_exist`：不存在。'."\n"
                                            ."\n"
                                            .'- `failed`：检测失败。'."\n"
                                            ."\n"
                                            .'- `time_out`：检测超时。'."\n"
                                            ."\n"
                                            .'- `not_in_use`：EIP未被绑定至API Server。'."\n"
                                            ."\n"
                                            .'- `locked`：EIP被锁定。',
                                        'type' => 'string',
                                        'example' => 'exist',
                                    ],
                                    'AccessLogProjectStatus' => [
                                        'description' => '访问日志存在状态，取值：'."\n"
                                            .'- `exist`：存在。'."\n"
                                            ."\n"
                                            .'- `not_exist`：不存在。'."\n"
                                            ."\n"
                                            .'- `failed`：检测失败。'."\n"
                                            ."\n"
                                            .'- `time_out`：检测超时。',
                                        'type' => 'string',
                                        'example' => 'exist',
                                    ],
                                    'RAMApplicationStatus' => [
                                        'description' => '与网格拓扑集成的RAM OAuth应用状态，取值：'."\n"
                                            .'- `exist`：存在。'."\n"
                                            ."\n"
                                            .'- `reused`：被复用。'."\n"
                                            ."\n"
                                            .'- `not_exist`：不存在。'."\n"
                                            ."\n"
                                            .'- `failed`：检测失败。'."\n"
                                            ."\n"
                                            .'- `time_out`：检测超时。',
                                        'type' => 'string',
                                        'example' => 'reused',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11fd0027-c27e-41bb-a565-75583054****\\",\\n  \\"ClusterStatus\\": {\\n    \\"ApiServerLoadBalancerStatus\\": {\\n      \\"SLBExistStatus\\": \\"exist\\",\\n      \\"SLBBackEndServerNumStatus\\": \\"num_exact\\",\\n      \\"Reused\\": false,\\n      \\"Locked\\": false,\\n      \\"PayType\\": \\"PrePay\\"\\n    },\\n    \\"PilotLoadBalancerStatus\\": {\\n      \\"SLBExistStatus\\": \\"exist\\",\\n      \\"SLBBackEndServerNumStatus\\": \\"num_exact\\",\\n      \\"Reused\\": true,\\n      \\"Locked\\": false,\\n      \\"PayType\\": \\"PayOnDemand\\"\\n    },\\n    \\"CanaryPilotLoadBalancerStatus\\": {\\n      \\"SLBExistStatus\\": \\"exist\\",\\n      \\"SLBBackEndServerNumStatus\\": \\"num_exact\\",\\n      \\"Reused\\": false,\\n      \\"Locked\\": false,\\n      \\"PayType\\": \\"PayOnDemand\\"\\n    },\\n    \\"AuditProjectStatus\\": \\"exist\\",\\n    \\"LogtailStatusRecord\\": {\\n      \\"ca35eae22013e43758a0e26d04****\\": {\\n        \\"accessLogDashboards\\": [\\n          {\\n            \\"title\\": \\"mesh-access-log_details_cn\\",\\n            \\"url\\": \\"https://sls.console.aliyun.com/lognext/project/****/dashboard/mesh-access-log_details_cn\\"\\n          },\\n          {\\n            \\"title\\": \\"mesh-access-log_monitoring_center_cn\\",\\n            \\"url\\": \\"https://sls.console.aliyun.com/lognext/project/****/dashboard/mesh-access-log_monitoring_center_cn\\"\\n          }\\n        ],\\n        \\"logtailStatus\\": \\"exist\\",\\n        \\"clusterId\\": \\"ca35eae22013e43758a0e26d04****\\"\\n      }\\n    },\\n    \\"ControlPlaneProjectStatus\\": \\"exist\\",\\n    \\"SgStatus\\": \\"reused\\",\\n    \\"ApiServerEIPStatus\\": \\"exist\\",\\n    \\"PilotEIPStatus\\": \\"exist\\",\\n    \\"AccessLogProjectStatus\\": \\"exist\\",\\n    \\"RAMApplicationStatus\\": \\"reused\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeServiceMeshAdditionalStatusResponse>\\n    <RequestId>11fd0027-c27e-41bb-a565-75583054****</RequestId>\\n    <ClusterStatus>\\n        <ApiServerLoadBalancerStatus>\\n            <SLBExistStatus>exist</SLBExistStatus>\\n            <SLBBackEndServerNumStatus>num_exact</SLBBackEndServerNumStatus>\\n            <Reused>false</Reused>\\n            <PayType>PrePay</PayType>\\n        </ApiServerLoadBalancerStatus>\\n        <PilotLoadBalancerStatus>\\n            <SLBExistStatus>exist</SLBExistStatus>\\n            <SLBBackEndServerNumStatus>num_exact</SLBBackEndServerNumStatus>\\n            <Reused>true</Reused>\\n            <PayType>PayOnDemand</PayType>\\n        </PilotLoadBalancerStatus>\\n        <AuditProjectStatus>exist</AuditProjectStatus>\\n        <LogtailStatusRecord>\\n            <key>\\n                <ClusterId>caeac85a793c94afbbb0a4bb20320****</ClusterId>\\n                <LogtailDetailStatus>exist</LogtailDetailStatus>\\n                <AccessLogDashboards>\\n                    <Title>audit-c186a6d9641a24098b549****</Title>\\n                    <Url>https://sls.console.aliyun.com/lognext/project/audit-c186a6d9641a24098b549xxxxxxxxxxxx/dashboard/mesh</Url>\\n                </AccessLogDashboards>\\n            </key>\\n        </LogtailStatusRecord>\\n        <ControlPlaneProjectStatus>exist</ControlPlaneProjectStatus>\\n        <SgStatus>reused</SgStatus>\\n        <ApiServerEIPStatus>exist</ApiServerEIPStatus>\\n        <AccessLogProjectStatus>exist</AccessLogProjectStatus>\\n    </ClusterStatus>\\n</DescribeServiceMeshAdditionalStatusResponse>","errorExample":""}]',
            'title' => '查询ASM实例的附加检查信息',
            'summary' => '调用DescribeServiceMeshAdditionalStatus查询ASM实例的附加检查信息。',
        ],
        'DescribeVersions' => [
            'summary' => '调用DescribeVersions获取创建网格时可用的ASM版本。',
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'VersionInfo' => [
                                'description' => '可用ASM版本信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Edition' => [
                                            'description' => 'ASM规格，取值：'."\n"
                                                ."\n"
                                                .'- `Default`：ASM标准版'."\n"
                                                ."\n"
                                                .'- `Pro`：ASM商业版（专业版）',
                                            'type' => 'string',
                                            'example' => 'Default',
                                        ],
                                        'Versions' => [
                                            'description' => '当前规格下可用的ASM版本列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '当前规格下可用的ASM版本号',
                                                'type' => 'string',
                                                'example' => 'v1.10.5.40-g2adf45be-aliyun',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"VersionInfo\\": [\\n    {\\n      \\"Edition\\": \\"Default\\",\\n      \\"Versions\\": [\\n        \\"v1.10.5.40-g2adf45be-aliyun\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeVersionsResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n    <VersionInfo>\\n        <Edition>Default</Edition>\\n        <Versions>v1.10.5.40-g2adf45be-aliyun</Versions>\\n    </VersionInfo>\\n</DescribeVersionsResponse>","errorExample":""}]',
            'title' => '获取可用的ASM版本',
        ],
        'ReActivateAudit' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c5bf9eb05c4424b89985d6536a809****',
                    ],
                ],
                [
                    'name' => 'EnableAudit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => "\n"
                            .'是否重新创建ASM审计日志，取值：'."\n"
                            ."\n"
                            .'- true：重新创建ASM审计日志'."\n"
                            ."\n"
                            .'- false：不重新创建ASM审计日志',
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
                                'description' => '请求响应ID',
                                'type' => 'string',
                                'example' => '17163CE9-CE4B-1B87-9185-1A1AD7E7****',
                            ],
                            'Data' => [
                                'description' => 'AuditProject的SLS中的名称',
                                'type' => 'string',
                                'example' => 'k8s-log-c0703599f695f4b8fa1c6492a33af****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"17163CE9-CE4B-1B87-9185-1A1AD7E7****\\",\\n  \\"Data\\": \\"k8s-log-c0703599f695f4b8fa1c6492a33af****\\"\\n}","errorExample":""},{"type":"xml","example":"<ReActivateAuditResponse>\\n    <RequestId>17163CE9-CE4B-1B87-9185-1A1AD7E7****</RequestId>\\n    <Data>k8s-log-c0703599f695f4b8fa1c6492a33af****</Data>\\n</ReActivateAuditResponse>","errorExample":""}]',
            'title' => '重建新的网格审计日志',
            'summary' => '调用ReActivateAudit重建新的网格审计日志。在开启网格审计后，如果误删了存储审计日志的logproject，可以重新创建一个空白的网格审计日志。',
            'description' => '请确保在使用该接口前，已充分了解SLS产品的收费方式和[价格](https://www.aliyun.com/price/product?spm=5176.10695662.1119587.4.194c6a67rcPWQH#/sls/detail)。',
        ],
        'DescribeNodesInstanceType' => [
            'summary' => '调用DescribeNodesInstanceType查询数据面节点类型，判断是否支持MultiBuffer性能加速。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'InstanceTypes' => [
                                'description' => '节点类型信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '节点类型信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'NodeType' => [
                                            'description' => '节点机器类型',
                                            'type' => 'string',
                                            'example' => 'ecs.g7.xlarge',
                                        ],
                                        'MultiBufferEnabled' => [
                                            'description' => '是否支持MultiBuffer加速功能，取值：'."\n"
                                                ."\n"
                                                .'- `true`：支持MultiBuffer加速功能'."\n"
                                                ."\n"
                                                .'- `false`：不支持MultiBuffer加速功能',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Key' => [
                                            'description' => '支持MultiBuffer优化的节点标签key（如果填写了该值，则只会在pod调度到带有该标签，且标签值等于`value`时启用MultiBuffer优化）',
                                            'type' => 'string',
                                            'example' => 'feature.node.kubernetes.io/mb-feature-enable',
                                        ],
                                        'Value' => [
                                            'description' => '支持MultiBuffer优化的节点标签的值（如果填写了该值，则只会在pod调度到带有该标签，且标签值等于`value`时启用MultiBuffer优化）',
                                            'type' => 'string',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'ERR500',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceTypes\\": [\\n    {\\n      \\"NodeType\\": \\"ecs.g7.xlarge\\",\\n      \\"MultiBufferEnabled\\": true,\\n      \\"Key\\": \\"feature.node.kubernetes.io/mb-feature-enable\\",\\n      \\"Value\\": \\"true\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '查询数据面节点类型',
        ],
        'DescribeCCMVersion' => [
            'summary' => '调用DescribeCCMVersion查询CCM组件版本。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ASM实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '查询返回内容。',
                        'type' => 'object',
                        'properties' => [
                            'CCMVersions' => [
                                'description' => '所有数据面集群的CCM版本信息。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'QueryState' => [
                                            'type' => 'string',
                                            'example' => 'time_out',
                                            'description' => '本次查询的请求失败原因，取值：'."\n"
                                                ."\n"
                                                .'- `time_out`：超时'."\n"
                                                ."\n"
                                                .'- `failed`：失败'."\n"
                                                ."\n"
                                                .'- `空字符串`：正常',
                                        ],
                                        'Version' => [
                                            'type' => 'string',
                                            'example' => 'v2.0.1',
                                            'description' => 'CCM版本。',
                                        ],
                                        'SLBGracefulDrainSupported' => [
                                            'type' => 'boolean',
                                            'example' => 'true',
                                            'description' => '是否支持CLB优雅下线。',
                                        ],
                                        'ClusterId' => [
                                            'type' => 'string',
                                            'description' => '数据面集群实例ID。',
                                            'example' => 'cfbb81b9b51a44b299349xxxxxxxxxxxx',
                                        ],
                                        'Message' => [
                                            'type' => 'string',
                                            'description' => '查询失败时的额外信息，成功时为空。',
                                            'example' => 'timeout error',
                                        ],
                                    ],
                                    'description' => 'CCM版本信息。',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                503 => [
                    [
                        'errorCode' => 'ERR404',
                        'errorMessage' => 'Not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CCMVersions\\": {\\n    \\"key\\": {\\n      \\"QueryState\\": \\"time_out\\",\\n      \\"Version\\": \\"v2.0.1\\",\\n      \\"SLBGracefulDrainSupported\\": true,\\n      \\"ClusterId\\": \\"cfbb81b9b51a44b299349xxxxxxxxxxxx\\",\\n      \\"Message\\": \\"timeout error\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeCCMVersionResponse>\\n    <CCMVersions>\\n        <key>\\n            <QueryState>time_out</QueryState>\\n            <Version>v2.0.1</Version>\\n            <SLBGracefulDrainSupport>true</SLBGracefulDrainSupport>\\n            <ClusterId>cfbb81b9b51a44b299349xxxxxxxxxxxx</ClusterId>\\n            <Message>timeout error</Message>\\n        </key>\\n    </CCMVersions>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n</DescribeCCMVersionResponse>","errorExample":""}]',
            'title' => '查询CCM组件版本',
        ],
        'GetCaCert' => [
            'summary' => '调用GetCaCert获取CA证书。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c7894c929677643a5bfe1a732d778a****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Base64编码的CA证书内容',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E0496204-7586-5B4C-B364-2361CC0ED****',
                            ],
                            'CaCert' => [
                                'title' => 'base64 encode format',
                                'description' => 'Base64编码的CA证书内容',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\nMIIFszCCA5ugAwIBAgIDM/1OMA0GCSqGSIb3DQEBCwUAME427zhT4HDLcCEW****-----END CERTIFICATE-----\\n',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E0496204-7586-5B4C-B364-2361CC0ED****\\",\\n  \\"CaCert\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\nMIIFszCCA5ugAwIBAgIDM/1OMA0GCSqGSIb3DQEBCwUAME427zhT4HDLcCEW****-----END CERTIFICATE-----\\\\\\\\n\\"\\n}","errorExample":""},{"type":"xml","example":"<GetCaCertResponse>\\n    <RequestId>E0496204-7586-5B4C-B364-2361CC0ED****</RequestId>\\n    <CaCert>-----BEGIN CERTIFICATE-----\\\\nMIIFszCCA5ugAwIBAgIDM/1OMA0GCSqGSIb3DQEBCwUAME427zhT4HDLcCEW****-----END CERTIFICATE-----\\\\n</CaCert>\\n</GetCaCertResponse>","errorExample":""}]',
            'title' => '获取CA证书',
        ],
        'GrantUserPermissions' => [
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
                    'name' => 'SubAccountUserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'RAM用户或RAM角色ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '27852573609480****',
                    ],
                ],
                [
                    'name' => 'Permissions',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '权限列表，内容格式为JSON数组字符串。该列表要求传递全量权限信息，新增权限则在列表中新增项，删除则移除项。示例值字段释义：'."\n"
                            ."\n"
                            .'- `IsCustom`：系统规定参数。固定取值为`true`。'."\n"
                            ."\n"
                            .'- `Cluster`：网格实例ID。'."\n"
                            ."\n"
                            .'- `RoleName`：权限名称，取值为`istio-admin`、`istio-ops`、`istio-readonly`，分别对应管理员、网格资源管理员、只读权限。'."\n"
                            ."\n"
                            .'- `IsRamRole`：目标权限授予实体，如果是RAM角色，则为`true`，否则为`false`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"IsCustom":true,"RoleName":"istio-ops","Cluster":"c57b848115458460583a4260cb713****","RoleType":"custom","IsRamRole":false},{"IsCustom":true,"RoleName":"istio-ops","Cluster":"c4ec191f4e12145c09286ea3e2b8f****","RoleType":"custom","IsRamRole":false}]',
                    ],
                ],
                [
                    'name' => 'SubAccountUserIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'RAM用户或RAM角色ID列表，支持一次为多个用户授权',
                        'type' => 'array',
                        'items' => [
                            'description' => 'RAM用户或RAM角色ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '27852573609480****'."\n",
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5A7C9E37-C171-584F-9A99-869B48C4****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5A7C9E37-C171-584F-9A99-869B48C4****\\"\\n}","errorExample":""},{"type":"xml","example":"<GrantUserPermissionsResponse>\\n    <RequestId>5A7C9E37-C171-584F-9A99-869B48C4****</RequestId>\\n</GrantUserPermissionsResponse>","errorExample":""}]',
            'title' => '更新子账号授权信息',
            'summary' => '调用GrantUserPermissions更新子账号授权信息。',
        ],
        'DescribeUserPermissions' => [
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
                    'name' => 'SubAccountUserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'RAM用户或RAM角色ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '27852573609480****',
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
                                'example' => '5A7C9E37-C171-584F-9A99-869B48C4196D',
                            ],
                            'Permissions' => [
                                'description' => '权限列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ParentId' => [
                                            'description' => '系统规定参数，固定为`0`。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'IsRamRole' => [
                                            'description' => '目标权限授予实体，如果是RAM角色，则为`true`，否则为`false`。',
                                            'type' => 'string',
                                            'example' => 'false',
                                        ],
                                        'ResourceType' => [
                                            'description' => '系统规定参数，固定为`cluster`。',
                                            'type' => 'string',
                                            'example' => 'cluster',
                                        ],
                                        'RoleType' => [
                                            'description' => '系统规定参数，固定为`custom`。',
                                            'type' => 'string',
                                            'example' => 'custom',
                                        ],
                                        'RoleName' => [
                                            'description' => '权限名称，取值：'."\n"
                                                ."\n"
                                                .'- `istio-admin`：管理员。'."\n"
                                                ."\n"
                                                .'- `istio-ops`：网格资源管理员。'."\n"
                                                ."\n"
                                                .'- `istio-readonly`：只读权限。',
                                            'type' => 'string',
                                            'example' => 'istio-admin',
                                        ],
                                        'ResourceId' => [
                                            'description' => '网格实例ID。',
                                            'type' => 'string',
                                            'example' => 'c57b848115458460583a4260cb713****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5A7C9E37-C171-584F-9A99-869B48C4196D\\",\\n  \\"Permissions\\": [\\n    {\\n      \\"ParentId\\": \\"0\\",\\n      \\"IsRamRole\\": \\"false\\",\\n      \\"ResourceType\\": \\"cluster\\",\\n      \\"RoleType\\": \\"custom\\",\\n      \\"RoleName\\": \\"istio-admin\\",\\n      \\"ResourceId\\": \\"c57b848115458460583a4260cb713****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeUserPermissionsResponse>\\n    <RequestId>5A7C9E37-C171-584F-9A99-869B48C4196D</RequestId>\\n    <Permissions>\\n        <ParentId>0</ParentId>\\n        <IsRamRole>false</IsRamRole>\\n        <ResourceType>cluster</ResourceType>\\n        <RoleType>custom</RoleType>\\n        <RoleName>istio-admin</RoleName>\\n        <ResourceId>c57b848115458460583a4260cb713****</ResourceId>\\n    </Permissions>\\n</DescribeUserPermissionsResponse>","errorExample":""}]',
            'title' => '获取子账号授权信息',
            'summary' => '调用DescribeUserPermissions获取子账号授权信息。',
        ],
        'DescribeUsersWithPermissions' => [
            'summary' => '调用DescribeUsersWithPermissions获取所有具有RBAC权限的RAM用户或RAM角色ID。',
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
                    'name' => 'UserType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '选择列出RAM用户还是RAM角色的ID，取值：'."\n"
                            ."\n"
                            .'- `SubUser`：列出RAM用户ID'."\n"
                            ."\n"
                            .'- `RamRole`：列出RAM角色ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SubUser',
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
                                'example' => '12B94024-C241-13CD-BA44-6106DF1****',
                            ],
                            'UIDs' => [
                                'description' => '当前具有RBAC权限的RAM用户或RAM角色ID列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '当前具有RBAC权限的RAM用户或RAM角色ID',
                                    'type' => 'string',
                                    'example' => '2940213405997****',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"12B94024-C241-13CD-BA44-6106DF1****\\",\\n  \\"UIDs\\": [\\n    \\"2940213405997****\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeUsersWithPermissionsResponse>\\n    <RequestId>12B94024-C241-13CD-BA44-6106DF1*****</RequestId>\\n    <UIDs>2940213405997*****</UIDs>\\n</DescribeUsersWithPermissionsResponse>","errorExample":""}]',
            'title' => '获取RBAC权限的RAM用户',
        ],
        'UpdateMeshCRAggregation' => [
            'summary' => '调用UpdateMeshCRAggregation更新数据面KubeAPI访问Istio资源功能的启用状态。',
            'methods' => [
                'get',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'Enabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用数据面KubeAPI访问ASM中的Istio资源，取值：'."\n"
                            ."\n"
                            .'- `true`：启用数据库KubeAPI访问ASM中的Istio资源。'."\n"
                            ."\n"
                            .'- `false`：不启用数据库KubeAPI访问ASM中的Istio资源。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'CPURequirement',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '启用数据面KubeAPI访问ASM中的Istio资源时，需要在数据面集群安装组件。此组件的CPU资源请求，可以使用Kubernetes标准CPU表示形式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MemoryRequirement',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '启用数据面KubeAPI访问ASM中的Istio资源时，需要在数据面集群安装组件。此组件的内存资源请求，可以使用Kubernetes标准内存表示形式。1 Mi为1024 KB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '500Mi',
                    ],
                ],
                [
                    'name' => 'CPULimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '启用数据面KubeAPI访问ASM中的Istio资源时，需要在数据面集群安装组件。此组件的CPU资源上限，可以使用Kubernetes标准CPU表示形式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MemoryLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '启用数据面KubeAPI访问ASM中的Istio资源时，需要在数据面集群安装组件。此组件的内存资源上限，可以使用Kubernetes标准内存表示形式。1 Mi为1024 KB。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '500Mi',
                    ],
                ],
                [
                    'name' => 'UsePublicApiServer',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '启用数据面KubeAPI访问ASM中的Istio资源时，指定数据面是否通过ASM API Server的公网端点访问ASM中的Istio资源，取值：'."\n"
                            .'- `true`：数据面KubeAPI通过ASM API Server的公网端点访问ASM中的Istio资源。'."\n"
                            .'- `false`：数据面KubeAPI通过ASM API Server的私网端点访问ASM中的Istio资源。'."\n"
                            ."\n"
                            .'默认值为`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回内容。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateMeshCRAggregationResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n</UpdateMeshCRAggregationResponse>","errorExample":""}]',
            'title' => '更新数据面KubeAPI访问Istio资源功能的启用状态',
        ],
        'ModifyApiServerEipResource' => [
            'summary' => '调用ModifyApiServerEipResource解绑或绑定API Server的EIP。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'Operation',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '操作类型，取值：'."\n"
                            ."\n"
                            .'- `UnBindEip`：解绑EIP。'."\n"
                            ."\n"
                            .'- `BindEip`：绑定一个EIP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BindEip',
                    ],
                ],
                [
                    'name' => 'ApiServerEipId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'EIP实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eip-bp1adu9jegmxnaoq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'ERR500',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyApiServerEipResourceResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n</ModifyApiServerEipResourceResponse>","errorExample":""}]',
            'title' => '解绑或绑定API Server的EIP',
        ],
        'DescribeVSwitches' => [
            'summary' => '调用DescribeVSwitches获取指定地域，指定VPC内的虚拟交换机列表。',
            'methods' => [
                'get',
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
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'VPC ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-bp17gig441u0msmd78****',
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
                            'TotalCount' => [
                                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'description' => 'TotalCount本次请求条件下的数据总量。此参数为可选参数，默认可不返回。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'NextToken' => [
                                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '表示当前调用返回读取到的位置。显示为空表示数据已经读取完毕。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '“”',
                            ],
                            'MaxResults' => [
                                'title' => 'MaxResults本次请求所返回的最大记录条数',
                                'description' => '本次请求所返回的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'VSwitches' => [
                                'title' => 'VSwitches',
                                'description' => '可用的虚拟交换机列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '可用的虚拟交换机。',
                                    'type' => 'object',
                                    'properties' => [
                                        'VpcId' => [
                                            'description' => '交换机所在VPC的ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-bp17gig441u0msmd6****',
                                        ],
                                        'VSwitchId' => [
                                            'description' => '虚拟交换机ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-bp1g24p9no0iqir46****',
                                        ],
                                        'Status' => [
                                            'description' => '虚拟交换机的状态，取值：'."\n"
                                                ."\n"
                                                .'- `Pending`：配置中。'."\n"
                                                .'- `Available`：可用。',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                        'IsDefault' => [
                                            'description' => '是否是默认交换机，取值：'."\n"
                                                ."\n"
                                                .'- `true`：默认交换机。'."\n"
                                                ."\n"
                                                .'- `false`：不是默认交换机。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'VSwitchName' => [
                                            'description' => '虚拟交换机名称。',
                                            'type' => 'string',
                                            'example' => 'vsw-test',
                                        ],
                                        'ZoneId' => [
                                            'description' => '交换机所属的可用区。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-k',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"NextToken\\": \\"“”\\",\\n  \\"MaxResults\\": 10,\\n  \\"VSwitches\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-bp17gig441u0msmd6****\\",\\n      \\"VSwitchId\\": \\"vsw-bp1g24p9no0iqir46****\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"IsDefault\\": false,\\n      \\"VSwitchName\\": \\"vsw-test\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-k\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeVSwitchesResponse>\\n    <TotalCount>10</TotalCount>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n    <NextToken>“”</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <VSwitches>\\n        <VpcId>vpc-bp17gig441u0msmd6****</VpcId>\\n        <VSwitchId>vsw-bp1g24p9no0iqir46****</VSwitchId>\\n        <Status>Available</Status>\\n        <IsDefault>false</IsDefault>\\n        <VSwitchName>vsw-test</VSwitchName>\\n        <ZoneId>cn-hangzhou-k</ZoneId>\\n    </VSwitches>\\n</DescribeVSwitchesResponse>","errorExample":""}]',
            'title' => '获取指定VPC内的虚拟交换机列表',
        ],
        'DescribeVpcs' => [
            'summary' => '调用DescribeVpcs获取指定地域内可用的VPC。',
            'methods' => [
                'get',
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
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'description' => '本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'NextToken' => [
                                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'type' => 'string',
                                'required' => true,
                                'example' => '""',
                            ],
                            'MaxResults' => [
                                'title' => 'MaxResults本次请求所返回的最大记录条数',
                                'description' => '本次请求所返回的最大记录条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Vpcs' => [
                                'title' => 'Vpcs',
                                'description' => '指定区域内可用VPC列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '指定区域内可用VPC',
                                    'type' => 'object',
                                    'properties' => [
                                        'VpcId' => [
                                            'description' => 'VPC的ID',
                                            'type' => 'string',
                                            'example' => 'vpc-bp1qkf2o3xmqc2519****',
                                        ],
                                        'VpcName' => [
                                            'description' => 'VPC名称',
                                            'type' => 'string',
                                            'example' => 'vpc-test',
                                        ],
                                        'Status' => [
                                            'description' => 'VPC的状态，取值：'."\n"
                                                .'- `Pending`：配置中'."\n"
                                                .'- `Available`：可用',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                        'IsDefault' => [
                                            'description' => '是否是该地域的默认VPC，取值：'."\n"
                                                ."\n"
                                                .'- `true`：默认VPC'."\n"
                                                ."\n"
                                                .'- `false`：不是默认VPC',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"NextToken\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"MaxResults\\": 10,\\n  \\"Vpcs\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-bp1qkf2o3xmqc2519****\\",\\n      \\"VpcName\\": \\"vpc-test\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"IsDefault\\": false\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeVpcsResponse>\\n    <TotalCount>10</TotalCount>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n    <NextToken>\\"\\"</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <Vpcs>\\n        <VpcId>vpc-bp1qkf2o3xmqc2519****</VpcId>\\n        <VpcName>vpc-test</VpcName>\\n        <Status>Available</Status>\\n        <IsDefault>false</IsDefault>\\n    </Vpcs>\\n</DescribeVpcsResponse>","errorExample":""}]',
            'title' => '获取指定地域内可用的VPC',
        ],
        'DescribeCens' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ce134b0727aa2492db69f6c3880e1****',
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'Clusters' => [
                                'description' => '添加到同一服务网格中，但所处VPC不同，也没有通过云企业网连通网络的Kuberenetes集群列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Kubernetes集群ID。',
                                    'type' => 'string',
                                    'example' => 'c584d805c7bd442b8bac421f9849f*****',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"Clusters\\": [\\n    \\"c584d805c7bd442b8bac421f9849f*****\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeCensResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n    <Clusters>c584d805c7bd442b8bac421f9849f*****</Clusters>\\n</DescribeCensResponse>","errorExample":""}]',
            'title' => '获取网络连通性检测结果',
            'summary' => '调用DescribeCens获取同一服务网格下多集群跨VPC的网络连通性检测结果。',
        ],
        'DescribeCrTemplates' => [
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
                    'name' => 'IstioVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格使用的Istio版本。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v1.18.0.160-gcc1f41cd-aliyun'."\n",
                    ],
                ],
                [
                    'name' => 'Kind',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要获取常见模板的istio资源类型，可用取值包括：'."\n"
                            ."\n"
                            .'- AuthorizationPolicy'."\n"
                            .'- RequestAuthentication'."\n"
                            .'- PeerAuthentication'."\n"
                            .'- WorkloadGroup'."\n"
                            .'- WorkloadEntry'."\n"
                            .'- Sidecar'."\n"
                            .'- EnvoyFilter'."\n"
                            .'- ServiceEntry'."\n"
                            .'- Gateway'."\n"
                            .'- DestinationRule'."\n"
                            .'- VirtualService',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'VirtualService',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '74E97AE2-2900-55C1-A069-C3C1EA*****',
                            ],
                            'Templates' => [
                                'description' => '指定Istio资源类型的资源常用YAML模板。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '指定Istio资源类型的资源常用YAML模板。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ChineseName' => [
                                            'description' => 'YAML模板的中文名称。',
                                            'type' => 'string',
                                            'example' => 'HTTP基础路由',
                                        ],
                                        'EnglishName' => [
                                            'description' => 'YAML模板的英文名称。',
                                            'type' => 'string',
                                            'example' => 'HTTP basic routing',
                                        ],
                                        'Yaml' => [
                                            'description' => 'YAML模板的具体内容。',
                                            'type' => 'string',
                                            'example' => 'apiVersion: networking.istio.io/v1beta1\\nkind: VirtualService\\nmetadata:\\n  name: reviews-route # Name for this VirtualService.\\nspec:\\n  hosts:\\n  - reviews.prod.svc.cluster.local # Service that this VirtualSerivce belongs to. \\n  http:\\n  - name: \\"reviews-route\\" # Name for the route.\\n    route:\\n    - destination: # Uniquely identifies the instances of a service to which all traffic should be forwarded to.\\n        host: reviews.prod.svc.cluster.local # The name of a service from the service registry or ServiceEntry.\\n        port:\\n          number: 8080"',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'ERR404',
                        'errorMessage' => 'Not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"74E97AE2-2900-55C1-A069-C3C1EA*****\\",\\n  \\"Templates\\": [\\n    {\\n      \\"ChineseName\\": \\"HTTP基础路由\\",\\n      \\"EnglishName\\": \\"HTTP basic routing\\",\\n      \\"Yaml\\": \\"apiVersion: networking.istio.io/v1beta1\\\\\\\\nkind: VirtualService\\\\\\\\nmetadata:\\\\\\\\n  name: reviews-route # Name for this VirtualService.\\\\\\\\nspec:\\\\\\\\n  hosts:\\\\\\\\n  - reviews.prod.svc.cluster.local # Service that this VirtualSerivce belongs to. \\\\\\\\n  http:\\\\\\\\n  - name: \\\\\\\\\\\\\\"reviews-route\\\\\\\\\\\\\\" # Name for the route.\\\\\\\\n    route:\\\\\\\\n    - destination: # Uniquely identifies the instances of a service to which all traffic should be forwarded to.\\\\\\\\n        host: reviews.prod.svc.cluster.local # The name of a service from the service registry or ServiceEntry.\\\\\\\\n        port:\\\\\\\\n          number: 8080\\\\\\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeCrTemplatesResponse>\\n    <RequestId>74E97AE2-2900-55C1-A069-C3C1EA*****</RequestId>\\n    <Templates>\\n        <ChineseName>HTTP基础路由</ChineseName>\\n        <EnglishName>HTTP basic routing</EnglishName>\\n        <Yaml>apiVersion: networking.istio.io/v1beta1\\\\nkind: VirtualService\\\\nmetadata:\\\\n  name: reviews-route # Name for this VirtualService.\\\\nspec:\\\\n  hosts:\\\\n  - reviews.prod.svc.cluster.local # Service that this VirtualSerivce belongs to. \\\\n  http:\\\\n  - name: \\\\\\"reviews-route\\\\\\" # Name for the route.\\\\n    route:\\\\n    - destination: # Uniquely identifies the instances of a service to which all traffic should be forwarded to.\\\\n        host: reviews.prod.svc.cluster.local # The name of a service from the service registry or ServiceEntry.\\\\n        port:\\\\n          number: 8080\\"</Yaml>\\n    </Templates>\\n</DescribeCrTemplatesResponse>","errorExample":""}]',
            'title' => '查询Istio资源YAML模板',
            'summary' => '调用DescribeCrTemplates查询服务网格中常见使用场景下的Istio资源YAML模板。',
        ],
        'DescribeEipResources' => [
            'summary' => '调用DescribeEipResources查询EIP资源列表。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '可选参数，用于分页查询，表示查询第几页。默认查询第一页。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '可选参数，用于分页查询，每页查询数目。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'EipList' => [
                                'description' => 'EIP资源列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'EIP详细信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'IpAddress' => [
                                            'description' => 'EIP的IP地址。',
                                            'type' => 'string',
                                            'example' => '120.xx.xx.112',
                                        ],
                                        'Status' => [
                                            'description' => 'EIP的状态，取值：'."\n"
                                                ."\n"
                                                .'- `Associating`：绑定中。'."\n"
                                                ."\n"
                                                .'- `Unassociating`：解绑中。'."\n"
                                                ."\n"
                                                .'- `InUse`：已分配。'."\n"
                                                ."\n"
                                                .'- `Available`：可用。',
                                            'type' => 'string',
                                            'example' => 'InUse',
                                        ],
                                        'AllocationId' => [
                                            'description' => 'EIP实例的ID。',
                                            'type' => 'string',
                                            'example' => 'eip-2zeerraiwb7ujxscd****',
                                        ],
                                        'InstanceType' => [
                                            'description' => 'EIP类型，取值：'."\n"
                                                ."\n"
                                                .'- `EcsInstance`：VPC类型的ECS实例。'."\n"
                                                ."\n"
                                                .'- `SlbInstance`：VPC类型的CLB实例。'."\n"
                                                ."\n"
                                                .'- `Nat`：NAT网关。'."\n"
                                                ."\n"
                                                .'- `HaVip`：高可用虚拟IP。'."\n"
                                                ."\n"
                                                .'- `NetworkInterface`：辅助弹性网卡。'."\n"
                                                ."\n"
                                                .'默认值：`EcsInstance`。',
                                            'type' => 'string',
                                            'example' => 'SlbInstance',
                                        ],
                                    ],
                                ],
                            ],
                            'PageResult' => [
                                'description' => '分页信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '列表条目数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'PageNumber' => [
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页包含的条目数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'ERR500',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"EipList\\": [\\n    {\\n      \\"IpAddress\\": \\"120.xx.xx.112\\",\\n      \\"Status\\": \\"InUse\\",\\n      \\"AllocationId\\": \\"eip-2zeerraiwb7ujxscd****\\",\\n      \\"InstanceType\\": \\"SlbInstance\\"\\n    }\\n  ],\\n  \\"PageResult\\": {\\n    \\"TotalCount\\": 10,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeEipResourcesResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n    <EipList>\\n        <IpAddress>120.xx.xx.112</IpAddress>\\n        <Status>InUse</Status>\\n        <AllocationId>eip-2zeerraiwb7ujxscd****</AllocationId>\\n        <InstanceType>SlbInstance</InstanceType>\\n    </EipList>\\n    <PageResult>\\n        <TotalCount>10</TotalCount>\\n        <PageNumber>1</PageNumber>\\n        <PageSize>10</PageSize>\\n    </PageResult>\\n</DescribeEipResourcesResponse>","errorExample":""}]',
            'title' => '查询EIP资源列表',
        ],
        'UpdateNamespaceScopeSidecarConfig' => [
            'summary' => '调用UpdateNamespaceScopeSidecarConfig更新命名空间级别的Sidecar配置。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '114945',
                'abilityTreeNodes' => [
                    'FEATUREservicemeshB27TWZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ca04bc38979214bf2882be79d39b4****',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'IncludeIPRanges',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '拦截对外访问的地址范围`global.proxy.includelPRanges`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '*',
                    ],
                ],
                [
                    'name' => 'ExcludeIPRanges',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '不拦截对外访问的地址范围`global.proxy.excludelPRanges`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '172.16.0.0/12',
                    ],
                ],
                [
                    'name' => 'IncludeInboundPorts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '经过Sidecar代理的入口流量端口。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '83',
                    ],
                ],
                [
                    'name' => 'ExcludeOutboundPorts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '免于经过Sidecar代理的出口流量端口。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '81',
                    ],
                ],
                [
                    'name' => 'ExcludeInboundPorts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '免于经过Sidecar代理的入口流量端口。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '82',
                    ],
                ],
                [
                    'name' => 'IncludeOutboundPorts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '经过Sidecar代理的出口流量端口。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '84',
                    ],
                ],
                [
                    'name' => 'TerminationDrainDuration',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理终止等待时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6s',
                    ],
                ],
                [
                    'name' => 'ProxyInitCPUResourceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理初始化容器CPU资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2000 m',
                    ],
                ],
                [
                    'name' => 'ProxyInitMemoryResourceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理初始化容器内存资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '50 Mi',
                    ],
                ],
                [
                    'name' => 'ProxyInitCPUResourceRequest',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理初始化容器CPU资源最低申请额度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '60 m',
                    ],
                ],
                [
                    'name' => 'ProxyInitMemoryResourceRequest',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理初始化容器内存资源最低申请额度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30 Mi',
                    ],
                ],
                [
                    'name' => 'SidecarProxyCPUResourceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理容器CPU资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2000 m',
                    ],
                ],
                [
                    'name' => 'SidecarProxyMemoryResourceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理容器内存资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '50 Mi',
                    ],
                ],
                [
                    'name' => 'SidecarProxyCPUResourceRequest',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理容器CPU资源最低申请额度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '60 m',
                    ],
                ],
                [
                    'name' => 'SidecarProxyMemoryResourceRequest',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理容器内存资源最低申请额度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30 Mi',
                    ],
                ],
                [
                    'name' => 'Lifecycle',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar Proxy生命周期设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"postStart":{"exec":{"command":["pilot-agent","wait"]}},"preStop":{"exec":{"command":["/bin/sh","-c","sleep 15"]}}}',
                    ],
                ],
                [
                    'name' => 'IstioDNSProxyEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用DNS代理功能，取值：'."\n"
                            ."\n"
                            .'- `true`：启用DNS代理功能。'."\n"
                            ."\n"
                            .'- `false`：不启用DNS代理功能。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'PostStart',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'istio-proxy启动后执行参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"exec":{"command":["pilot-agent","wait"]}}',
                    ],
                ],
                [
                    'name' => 'PreStop',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'istio-proxy终止前执行参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"exec":{"command":["/bin/sh","-c","sleep 15"]}}',
                    ],
                ],
                [
                    'name' => 'Concurrency',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'istio-proxy并发度设置。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ProxyStatsMatcher',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用于Envoy监控统计的指标，使用JSON格式表示。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{ "inclusionPrefixes": [ "cluster.outbound", "cluster_manager", "listener_manager", "server", "cluster.xds-grpc" ], "inclusionRegexps": [ "listener.*.downstream_cx_total", "listener.*.downstream_cx_active" ] }',
                    ],
                ],
                [
                    'name' => 'HoldApplicationUntilProxyStarts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用程序启动前是否等待istio-proxy启动完成，取值：'."\n"
                            ."\n"
                            .'- `true`：应用程序启动前等待istio-proxy启动完成。'."\n"
                            ."\n"
                            .'- `false`：应用程序启动前不等待istio-proxy启动完成。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'LogLevel',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '日志等级，取值：`info`、`debug`、`tracing`、`error`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'info',
                    ],
                ],
                [
                    'name' => 'Tracing',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义的链路追踪配置，需要将链路追踪配置序列化为JSON字符串后传入。链路追踪配置中包含以下字段：'."\n"
                            ."\n"
                            .'- `sampling`：Double类型，链路追踪的采样率。'."\n"
                            ."\n"
                            .'- `custom_tags`：Map类型，其中键为自定义链路追踪标签的键，String类型；值为自定义链路追踪标签的取值，JSON对象类型，可以选择填入以下字段之一。'."\n"
                            ."\n"
                            .'    -  `literal`：链路追踪标签值将取固定值，JSON对象类型，其中必须包含`value`字段，指定固定的字面量值，例如`{"value":"test"}`。'."\n"
                            .'    - `header`：链路追踪标签值将取指定的请求头，JSON对象类型，其中必须包含`name`字段和`defaultValue`字段，指定请求头的名称和取不到时的默认值，例如`{"name":"test","defaultValue":"test"}`。'."\n"
                            .'    - `environment`：链路追踪标签值将取指定的环境变量，JSON对象类型，其中必须包含`name`字段和`defaultValue`字段，指定环境变量的名称和取不到时的默认值，例如`{"name":"test","defaultValue":"test"}`。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"sampling":99.8,"custom_tags":{"test":{"literal":{"value":"testnamespace"}}}}',
                    ],
                ],
                [
                    'name' => 'InterceptionMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar对入向流量的拦截策略，取值如下：'."\n"
                            .'- `REDIRECT`：默认的拦截策略，Sidecar将使用重定向方式拦截入向流量。'."\n"
                            .'- `TPROXY`：透明代理拦截策略，Sidecar将以透明代理的方式拦截入向流量。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TPROXY',
                    ],
                ],
                [
                    'name' => 'ProxyMetadata',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '在Sidecar代理中额外添加的环境变量，以JSON对象的形式表示。JSON对象中的键和值分别代表添加至Sidecar代理环境变量的键和值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"EXIT_ON_ZERO_ACTIVE_CONNECTIONS":"true"}',
                    ],
                ],
                [
                    'name' => 'ProxyInitAckSloCPUResourceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理初始化容器CPU资源限制（ACK动态超卖资源形式），当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理初始化容器CPU资源限制。单位为千分之一核。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2000',
                    ],
                ],
                [
                    'name' => 'ProxyInitAckSloMemoryResourceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理初始化容器内存资源限制（ACK动态超卖资源形式），当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理初始化容器内存资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2048Mi',
                    ],
                ],
                [
                    'name' => 'ProxyInitAckSloCPUResourceRequest',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理初始化容器CPU资源最低申请额度（ACK动态超卖资源形式），当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理初始化容器CPU资源最低申请额度。单位为千分之一核。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'ProxyInitAckSloMemoryResourceRequest',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理初始化容器内存资源最低申请额度（ACK动态超卖资源形式），当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理初始化容器内存资源最低申请额度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '128Mi',
                    ],
                ],
                [
                    'name' => 'SidecarProxyAckSloCPUResourceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理容器CPU资源限制（ACK动态超卖资源形式），当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理容器CPU资源限制。单位为千分之一核。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2000',
                    ],
                ],
                [
                    'name' => 'SidecarProxyAckSloMemoryResourceLimit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理容器内存资源限制（ACK动态超卖资源形式），当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理容器内存资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2048Mi',
                    ],
                ],
                [
                    'name' => 'SidecarProxyAckSloCPUResourceRequest',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理容器CPU资源最低申请额度（ACK动态超卖资源形式），当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理容器CPU资源最低申请额度。单位为千分之一核。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'SidecarProxyAckSloMemoryResourceRequest',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Sidecar代理容器内存资源最低申请额度（ACK动态超卖资源形式），当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理容器内存资源最低申请额度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '128Mi',
                    ],
                ],
                [
                    'name' => 'Privileged',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否在Sidecar代理容器的安全上下文中为Sidecar代理容器设定为特权，取值：'."\n"
                            ."\n"
                            .'- `true`：Sidecar代理容器具有特权。'."\n"
                            ."\n"
                            .'- `false`：Sidecar代理容器没有特权。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'EnableCoreDump',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否为Sidecar代理容器启用Core Dump（程序崩溃时转储内存状态），取值：'."\n"
                            ."\n"
                            .'- `true`：为Sidecar代理容器启用Core Dump。'."\n"
                            ."\n"
                            .'- `false`：不为Sidecar代理容器启用Core Dump。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ReadinessInitialDelaySeconds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '在开始进行Sidecar代理容器的就绪性检查前等待的时间（单位：秒）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ReadinessPeriodSeconds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '对Sidecar代理容器进行就绪性检查时，两次检查之间的时间间隔（单位：秒）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ReadinessFailureThreshold',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '判断Sidecar代理容器不就绪时所需的就绪性检查失败次数阈值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'SMCEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用 SMC-R优化（SMC-R优化可优化跨节点通信性能，依赖Alibaba Cloud Linux 3以及节点 eRDMA 网络设备）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateNamespaceScopeSidecarConfigResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n</UpdateNamespaceScopeSidecarConfigResponse>","errorExample":""}]',
            'title' => '更新Sidecar配置',
        ],
        'UpdateIstioInjectionConfig' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ce2cdbb9d013f447180cf5ca8bb******',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'EnableIstioInjection',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用自动注入。',
                        'type' => 'boolean',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'EnableSidecarSetInjection',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用SidecarSet注入。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'IstioRev',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '为命名空间指定的注入版本，仅在服务网格进行金丝雀升级的过程中有效。当IstioRev不为空时，不能同时传入EnableIstioInjection或EnableSidecarSetInjection。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'canary',
                    ],
                ],
                [
                    'name' => 'DataPlaneMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间的数据面模式，仅在当前服务网格实例启用Ambient Mesh模式的情况下有效。取值：'."\n"
                            ."\n"
                            .'- ambient：将命名空间的数据面模式设定为ambient模式。'."\n"
                            ."\n"
                            .'- sidecar：将命名空间的数据面模式设定为sidecar模式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ambient',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '98B268E6-9381-5A98-8012-6E7E82******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"98B268E6-9381-5A98-8012-6E7E82******\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateIstioInjectionConfigResponse>\\n    <RequestId>98B268E6-9381-5A98-8012-6E7E82******</RequestId>\\n</UpdateIstioInjectionConfigResponse>","errorExample":""}]',
            'title' => '更新Sidecar注入配置',
            'summary' => '调用UpdateIstioInjectionConfig修改网格注入设置。',
        ],
        'DescribeServiceMeshProxyStatus' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ca04bc38979214bf2882be79d39b4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Proxy代理状态',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'ProxyStatus' => [
                                'description' => 'Proxy代理状态列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Proxy代理状态',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProxyVersion' => [
                                            'description' => 'Proxy代理版本',
                                            'type' => 'string',
                                            'example' => '1.9.7',
                                        ],
                                        'ClusterSynced' => [
                                            'description' => 'Proxy状态，取值：'."\n"
                                                ."\n"
                                                .'- `SYNCED`：已同步Proxy状态'."\n"
                                                ."\n"
                                                .'- `NOT SENT`：未同步Proxy状态'."\n"
                                                ."\n"
                                                .'- `STALE (Never Acknowledged)`：Istiod已向Envoy发送更新Proxy状态，但从未收到确认'."\n"
                                                ."\n"
                                                .'- `STALE`：Istiod已向Envoy发送更新Proxy状态，但未收到确认',
                                            'type' => 'string',
                                            'example' => 'SYNCED',
                                        ],
                                        'EndpointPercent' => [
                                            'description' => '端点百分比',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'ListenerSynced' => [
                                            'description' => '监听器同步状态，取值：'."\n"
                                                .'- `SYNCED`：已同步监听器状态'."\n"
                                                ."\n"
                                                .'- `NOT SENT`：未同步监听器状态'."\n"
                                                ."\n"
                                                .'- `STALE (Never Acknowledged)`：Istiod已向Envoy发送更新监听器状态，但从未收到确认'."\n"
                                                ."\n"
                                                .'- `STALE`：Istiod已向Envoy发送更新监听器状态，但未收到确认',
                                            'type' => 'string',
                                            'example' => 'SYNCED',
                                        ],
                                        'RouteSynced' => [
                                            'description' => '路由同步状态，取值：'."\n"
                                                .'- `SYNCED`：已同步路由状态'."\n"
                                                ."\n"
                                                .'- `NOT SENT`：未同步路由状态'."\n"
                                                ."\n"
                                                .'- `STALE (Never Acknowledged)`：Istiod已向Envoy发送更新路由状态，但从未收到确认'."\n"
                                                ."\n"
                                                .'- `STALE`：Istiod已向Envoy发送更新路由状态，但未收到确认',
                                            'type' => 'string',
                                            'example' => 'SYNCED',
                                        ],
                                        'EndpointSynced' => [
                                            'description' => '端点同步状态。取值：'."\n"
                                                .'- `SYNCED`：已同步端点状态'."\n"
                                                ."\n"
                                                .'- `NOT SENT`：未同步端点状态'."\n"
                                                ."\n"
                                                .'- `STALE (Never Acknowledged)`：Istiod已向Envoy发送更新端点状态，但从未收到确认'."\n"
                                                ."\n"
                                                .'- `STALE`：Istiod已向Envoy发送更新端点状态，但未收到确认',
                                            'type' => 'string',
                                            'example' => 'SYNCED',
                                        ],
                                        'ProxyId' => [
                                            'description' => 'Proxy代理ID',
                                            'type' => 'string',
                                            'example' => '119q****',
                                        ],
                                        'IstioVersion' => [
                                            'description' => 'Istiod版本',
                                            'type' => 'string',
                                            'example' => '1.9.7',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码，取值：'."\n"
                                    ."\n"
                                    .'-` 200`：查询IstioProxy状态成功'."\n"
                                    ."\n"
                                    .'- `403`：没有权限 '."\n"
                                    ."\n"
                                    .'- `503`：后端服务故障',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"ProxyStatus\\": [\\n    {\\n      \\"ProxyVersion\\": \\"1.9.7\\",\\n      \\"ClusterSynced\\": \\"SYNCED\\",\\n      \\"EndpointPercent\\": \\"1\\",\\n      \\"ListenerSynced\\": \\"SYNCED\\",\\n      \\"RouteSynced\\": \\"SYNCED\\",\\n      \\"EndpointSynced\\": \\"SYNCED\\",\\n      \\"ProxyId\\": \\"119q****\\",\\n      \\"IstioVersion\\": \\"1.9.7\\"\\n    }\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeServiceMeshProxyStatusResponse>\\n    <Message>success</Message>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <ProxyStatus>\\n        <ProxyVersion>1.9.7</ProxyVersion>\\n        <ClusterSynced>SYNCED</ClusterSynced>\\n        <EndpointPercent>1</EndpointPercent>\\n        <ListenerSynced>SYNCED</ListenerSynced>\\n        <RouteSynced>SYNCED</RouteSynced>\\n        <EndpointSynced>SYNCED</EndpointSynced>\\n        <ProxyId>119q****</ProxyId>\\n        <IstioVersion>1.9.7</IstioVersion>\\n    </ProxyStatus>\\n    <Code>200</Code>\\n    <Success>success</Success>\\n</DescribeServiceMeshProxyStatusResponse>","errorExample":""}]',
            'title' => '查询IstioProxy状态',
            'summary' => '调用DescribeServiceMeshProxyStatus查询IstioProxy状态。',
        ],
        'DescribeNamespaceScopeSidecarConfig' => [
            'summary' => '调用DescribeNamespaceScopeSidecarConfig查询命名空间级别的Sidecar配置设置。',
            'methods' => [
                'get',
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
                'abilityTreeCode' => '114962',
                'abilityTreeNodes' => [
                    'FEATUREservicemeshB27TWZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c7120e75a202d4fd8acb028a86b6a****',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'ConfigPatches' => [
                                'description' => '命名空间级别配置内容。',
                                'type' => 'object',
                                'properties' => [
                                    'TerminationDrainDuration' => [
                                        'description' => 'Sidecar代理终止等待时间。',
                                        'type' => 'string',
                                        'example' => '6s',
                                    ],
                                    'SidecarProxyInitResourceLimit' => [
                                        'description' => 'Sidecar代理初始化容器资源限制。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ResourceCPULimit' => [
                                                'description' => 'CPU资源限制。',
                                                'type' => 'string',
                                                'example' => '2000 m',
                                            ],
                                            'ResourceMemoryLimit' => [
                                                'description' => '内存资源限制。',
                                                'type' => 'string',
                                                'example' => '50 Mi',
                                            ],
                                        ],
                                    ],
                                    'SidecarProxyInitResourceRequest' => [
                                        'description' => 'Sidecar代理初始化容器资源最低申请额度。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ResourceCPURequest' => [
                                                'description' => 'CPU资源最低要求。',
                                                'type' => 'string',
                                                'example' => '60 m',
                                            ],
                                            'ResourceMemoryRequest' => [
                                                'description' => '内存资源最低要求。',
                                                'type' => 'string',
                                                'example' => '30 Mi',
                                            ],
                                        ],
                                    ],
                                    'SidecarProxyResourceLimit' => [
                                        'description' => 'Sidecar代理容器资源限制。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ResourceCPULimit' => [
                                                'description' => 'CPU资源限制。',
                                                'type' => 'string',
                                                'example' => '2000 m',
                                            ],
                                            'ResourceMemoryLimit' => [
                                                'description' => '内存资源限制。',
                                                'type' => 'string',
                                                'example' => '50 Mi',
                                            ],
                                        ],
                                    ],
                                    'SidecarProxyResourceRequest' => [
                                        'description' => 'Sidecar代理容器资源最低申请额度。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ResourceCPURequest' => [
                                                'description' => 'CPU资源最低要求。',
                                                'type' => 'string',
                                                'example' => '60 m',
                                            ],
                                            'ResourceMemoryRequest' => [
                                                'description' => '内存资源限制。',
                                                'type' => 'string',
                                                'example' => '30 Mi',
                                            ],
                                        ],
                                    ],
                                    'ExcludeOutboundPorts' => [
                                        'description' => '免于经过Sidecar代理的出口流量端口。',
                                        'type' => 'string',
                                        'example' => '81',
                                    ],
                                    'ExcludeOutboundIPRanges' => [
                                        'description' => '免于经过Sidecar代理的出口流量IP地址。',
                                        'type' => 'string',
                                        'example' => '192.168.1.3/31',
                                    ],
                                    'IncludeOutboundIPRanges' => [
                                        'description' => '经过Sidecar代理的出口流量IP地址。',
                                        'type' => 'string',
                                        'example' => '192.168.1.4/31',
                                    ],
                                    'ExcludeInboundPorts' => [
                                        'description' => '免于经过Sidecar代理的入口流量端口。',
                                        'type' => 'string',
                                        'example' => '82',
                                    ],
                                    'IncludeInboundPorts' => [
                                        'description' => '经过Sidecar代理的入口流量端口。',
                                        'type' => 'string',
                                        'example' => '83',
                                    ],
                                    'IncludeOutboundPorts' => [
                                        'description' => '经过Sidecar代理的出口流量端口。',
                                        'type' => 'string',
                                        'example' => '84',
                                    ],
                                    'IstioDNSProxyEnabled' => [
                                        'description' => '是否启用DNS代理功能，取值：'."\n"
                                            ."\n"
                                            .'- `true`：启用DNS代理功能。'."\n"
                                            ."\n"
                                            .'- `false`：不启用DNS代理功能。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'LifecycleStr' => [
                                        'description' => 'Sidecar代理生命周期JSON字符串。',
                                        'type' => 'string',
                                        'example' => '{"postStart":{"exec":{"command":["pilot-agent","wait"]}},"preStop":{"exec":{"command":["/bin/sh","-c","sleep 15"]}}}',
                                    ],
                                    'Concurrency' => [
                                        'description' => 'istio-proxy并发度设置。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'LogLevel' => [
                                        'description' => '日志等级，取值：`info`、`debug`、`trace`、`error`。',
                                        'type' => 'string',
                                        'example' => 'info',
                                    ],
                                    'HoldApplicationUntilProxyStarts' => [
                                        'description' => '应用程序启动前是否等待istio-proxy启动完成，取值：'."\n"
                                            ."\n"
                                            .'- `true`：应用程序启动前等待istio-proxy启动完成。'."\n"
                                            ."\n"
                                            .'- `false`：应用程序启动前不等待istio-proxy启动完成。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ProxyStatsMatcher' => [
                                        'description' => '用于Envoy监控统计的指标。',
                                        'type' => 'object',
                                        'properties' => [
                                            'InclusionPrefixes' => [
                                                'description' => 'Envoy监控统计的指标前缀列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'Envoy监控统计的指标前缀。',
                                                    'type' => 'string',
                                                    'example' => 'server',
                                                ],
                                            ],
                                            'InclusionSuffixes' => [
                                                'description' => 'Envoy监控统计的指标后缀列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'Envoy监控统计的指标后缀。',
                                                    'type' => 'string',
                                                    'example' => 'cluster.outbound',
                                                ],
                                            ],
                                            'InclusionRegexps' => [
                                                'description' => 'Envoy监控统计的指标正则表达式列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'Envoy监控统计的指标正则表达式。',
                                                    'type' => 'string',
                                                    'example' => 'listener.*.downstream_cx_total',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Tracing' => [
                                        'description' => '自定义的链路追踪配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Sampling' => [
                                                'description' => '链路追踪的采样率。',
                                                'type' => 'number',
                                                'format' => 'double',
                                                'example' => '99.8',
                                            ],
                                            'CustomTags' => [
                                                'description' => '链路追踪上报的自定义标签。其中键为自定义链路追踪标签的键，String类型；值为自定义链路追踪标签的取值，JSON对象类型，可以选择填入以下字段之一。'."\n"
                                                    ."\n"
                                                    .' - ` literal`：链路追踪标签值将取固定值，JSON对象类型，其中必须包含`value`字段，指定固定的字面量值，例如`{"value":"test"}`。'."\n"
                                                    .'    '."\n"
                                                    .'- `header`：链路追踪标签值将取指定的请求头，JSON对象类型，其中必须包含`name`字段和`defaultValue`字段，指定请求头的名称和取不到时的默认值，例如`{"name":"test","defaultValue":"test"}`。'."\n"
                                                    ."\n"
                                                    .'- `environment`：链路追踪标签值将取指定的环境变量，JSON对象类型，其中必须包含`name`字段和`defaultValue`字段，指定环境变量的名称和取不到时的默认值，例如`{"name":"test","defaultValue":"test"}`。',
                                                'type' => 'object',
                                                'example' => '{"test":{"literal":{"value":"test"}}}',
                                            ],
                                            'MaxPathTagLength' => [
                                                'description' => '链路追踪标签最大长度限制。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                        ],
                                    ],
                                    'InterceptionMode' => [
                                        'description' => 'Sidecar对入向流量的拦截策略，取值如下：'."\n"
                                            .'- `REDIRECT`：默认的拦截策略，Sidecar将使用重定向方式拦截入向流量。'."\n"
                                            ."\n"
                                            .'- ` TPROXY`：透明代理拦截策略，Sidecar将以透明代理的方式拦截入向流量。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'TPROXY',
                                    ],
                                    'ProxyMetadata' => [
                                        'description' => '在Sidecar代理中额外添加的环境变量，对象中的键和值分别代表添加至Sidecar代理环境变量的键和值。',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'example' => '"true"',
                                            'description' => '在Sidecar代理中额外添加的环境变量值。',
                                        ],
                                    ],
                                    'SidecarProxyInitAckSloResource' => [
                                        'description' => 'Sidecar代理初始化容器资源设置（ACK动态超卖资源形式），当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理初始化容器资源。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Requests' => [
                                                'description' => 'Sidecar代理初始化容器资源最低申请额度设置（ACK动态超卖资源形式）。当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理初始化容器资源最低申请额度。'."\n"
                                                    .'对象中可能包含两种键，对应两种类型的资源：'."\n"
                                                    ."\n"
                                                    .'- `kubernetes.io/batch-cpu`：ACK超卖类型CPU资源，单位为千分之一核。'."\n"
                                                    ."\n"
                                                    .'- `kubernetes.io/batch-memory`：ACK超卖类型内存资源。',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                    'example' => '128Mi',
                                                    'description' => 'Sidecar代理初始化容器资源最低申请额度值。',
                                                ],
                                            ],
                                            'Limits' => [
                                                'description' => 'Sidecar代理初始化容器资源限制设置（ACK动态超卖资源形式）。当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理初始化容器资源限制。'."\n"
                                                    .'对象中可能包含两种键，对应两种类型的资源：'."\n"
                                                    .'- `kubernetes.io/batch-cpu`：ACK超卖类型CPU资源，单位为千分之一核。'."\n"
                                                    ."\n"
                                                    .'- `kubernetes.io/batch-memory`：ACK超卖类型内存资源。',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                    'example' => '2048Mi',
                                                    'description' => 'Sidecar代理初始化容器资源限制值。',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SidecarProxyAckSloResource' => [
                                        'description' => 'Sidecar代理容器资源设置（ACK动态超卖资源形式），当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理容器资源。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Requests' => [
                                                'description' => 'Sidecar代理容器资源最低申请额度设置（ACK动态超卖资源形式）。当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理容器资源最低申请额度。'."\n"
                                                    .'对象中可能包含两种键，对应两种类型的资源：'."\n"
                                                    ."\n"
                                                    .'- `kubernetes.io/batch-cpu`：ACK超卖类型CPU资源，单位为千分之一核。'."\n"
                                                    ."\n"
                                                    .'- `kubernetes.io/batch-memory`：ACK超卖类型内存资源。',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                    'example' => '128Mi',
                                                    'description' => 'Sidecar代理容器资源最低申请额度值。',
                                                ],
                                            ],
                                            'Limits' => [
                                                'description' => 'Sidecar代理容器资源限制设置（ACK动态超卖资源形式）。当Pod带有ACK动态资源超卖标签`labelkoordinator.sh/qosClass`时，使用此值设定Sidecar代理容器资源限制。'."\n"
                                                    .'对象中可能包含两种键，对应两种类型的资源：'."\n"
                                                    ."\n"
                                                    .'- `kubernetes.io/batch-cpu`：ACK超卖类型CPU资源，单位为千分之一核。'."\n"
                                                    ."\n"
                                                    .'- `kubernetes.io/batch-memory`：ACK超卖类型内存资源。',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                    'description' => 'Sidecar代理容器资源限制值。',
                                                    'example' => '2048Mi',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Privileged' => [
                                        'description' => '是否在Sidecar代理容器的安全上下文中为Sidecar代理容器设定为特权，取值：'."\n"
                                            ."\n"
                                            .'- `true`：Sidecar代理容器具有特权。'."\n"
                                            ."\n"
                                            .'- `false`：Sidecar代理容器没有特权。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'EnableCoreDump' => [
                                        'description' => '是否为Sidecar代理容器启用Core Dump（程序崩溃时转储内存状态），取值：'."\n"
                                            ."\n"
                                            .'- `true`：为Sidecar代理容器启用Core Dump。'."\n"
                                            ."\n"
                                            .'- `false`：不为Sidecar代理容器启用Core Dump。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'ReadinessInitialDelaySeconds' => [
                                        'description' => '在开始进行Sidecar代理容器的就绪性检查前等待的时间（单位：秒）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'ReadinessPeriodSeconds' => [
                                        'description' => '对Sidecar代理容器进行就绪性检查时，两次检查之间的时间间隔（单位：秒）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'ReadinessFailureThreshold' => [
                                        'description' => '判断Sidecar代理容器不就绪时所需的就绪性检查失败次数阈值。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'SMCConfiguration' => [
                                        'description' => 'SMC-R优化相关配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Enabled' => [
                                                'description' => '是否启用 SMC-R优化（ SMC-R可以优化跨节点通信性能，依赖Alibaba Cloud Linux 3以及节点 eRDMA 网络设备）',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"ConfigPatches\\": {\\n    \\"TerminationDrainDuration\\": \\"6s\\",\\n    \\"SidecarProxyInitResourceLimit\\": {\\n      \\"ResourceCPULimit\\": \\"2000 m\\",\\n      \\"ResourceMemoryLimit\\": \\"50 Mi\\"\\n    },\\n    \\"SidecarProxyInitResourceRequest\\": {\\n      \\"ResourceCPURequest\\": \\"60 m\\",\\n      \\"ResourceMemoryRequest\\": \\"30 Mi\\"\\n    },\\n    \\"SidecarProxyResourceLimit\\": {\\n      \\"ResourceCPULimit\\": \\"2000 m\\",\\n      \\"ResourceMemoryLimit\\": \\"50 Mi\\"\\n    },\\n    \\"SidecarProxyResourceRequest\\": {\\n      \\"ResourceCPURequest\\": \\"60 m\\",\\n      \\"ResourceMemoryRequest\\": \\"30 Mi\\"\\n    },\\n    \\"ExcludeOutboundPorts\\": \\"81\\",\\n    \\"ExcludeOutboundIPRanges\\": \\"192.168.1.3/31\\",\\n    \\"IncludeOutboundIPRanges\\": \\"192.168.1.4/31\\",\\n    \\"ExcludeInboundPorts\\": \\"82\\",\\n    \\"IncludeInboundPorts\\": \\"83\\",\\n    \\"IncludeOutboundPorts\\": \\"84\\",\\n    \\"IstioDNSProxyEnabled\\": true,\\n    \\"LifecycleStr\\": \\"{\\\\\\"postStart\\\\\\":{\\\\\\"exec\\\\\\":{\\\\\\"command\\\\\\":[\\\\\\"pilot-agent\\\\\\",\\\\\\"wait\\\\\\"]}},\\\\\\"preStop\\\\\\":{\\\\\\"exec\\\\\\":{\\\\\\"command\\\\\\":[\\\\\\"/bin/sh\\\\\\",\\\\\\"-c\\\\\\",\\\\\\"sleep 15\\\\\\"]}}}\\",\\n    \\"Concurrency\\": 2,\\n    \\"LogLevel\\": \\"info\\",\\n    \\"HoldApplicationUntilProxyStarts\\": true,\\n    \\"ProxyStatsMatcher\\": {\\n      \\"InclusionPrefixes\\": [\\n        \\"server\\"\\n      ],\\n      \\"InclusionSuffixes\\": [\\n        \\"cluster.outbound\\"\\n      ],\\n      \\"InclusionRegexps\\": [\\n        \\"listener.*.downstream_cx_total\\"\\n      ]\\n    },\\n    \\"Tracing\\": {\\n      \\"Sampling\\": 99.8,\\n      \\"CustomTags\\": {\\n        \\"test\\": {\\n          \\"literal\\": {\\n            \\"value\\": \\"test\\"\\n          }\\n        }\\n      },\\n      \\"MaxPathTagLength\\": 10\\n    },\\n    \\"InterceptionMode\\": \\"TPROXY\\",\\n    \\"ProxyMetadata\\": {\\n      \\"key\\": \\"\\\\\\"true\\\\\\"\\"\\n    },\\n    \\"SidecarProxyInitAckSloResource\\": {\\n      \\"Requests\\": {\\n        \\"key\\": \\"128Mi\\"\\n      },\\n      \\"Limits\\": {\\n        \\"key\\": \\"2048Mi\\"\\n      }\\n    },\\n    \\"SidecarProxyAckSloResource\\": {\\n      \\"Requests\\": {\\n        \\"key\\": \\"128Mi\\"\\n      },\\n      \\"Limits\\": {\\n        \\"key\\": \\"2048Mi\\"\\n      }\\n    },\\n    \\"Privileged\\": false,\\n    \\"EnableCoreDump\\": false,\\n    \\"ReadinessInitialDelaySeconds\\": 2,\\n    \\"ReadinessPeriodSeconds\\": 3,\\n    \\"ReadinessFailureThreshold\\": 5,\\n    \\"SMCConfiguration\\": {\\n      \\"Enabled\\": true\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeNamespaceScopeSidecarConfigResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <ConfigPatches>\\n        <TerminationDrainDuration>6s</TerminationDrainDuration>\\n        <SidecarProxyInitResourceLimit>\\n            <ResourceCPULimit>2000 m</ResourceCPULimit>\\n            <ResourceMemoryLimit>50 Mi</ResourceMemoryLimit>\\n        </SidecarProxyInitResourceLimit>\\n        <SidecarProxyInitResourceRequest>\\n            <ResourceCPURequest>60 m</ResourceCPURequest>\\n            <ResourceMemoryRequest>30 Mi</ResourceMemoryRequest>\\n        </SidecarProxyInitResourceRequest>\\n        <SidecarProxyResourceLimit>\\n            <ResourceCPULimit>2000 m</ResourceCPULimit>\\n            <ResourceMemoryLimit>50 Mi</ResourceMemoryLimit>\\n        </SidecarProxyResourceLimit>\\n        <SidecarProxyResourceRequest>\\n            <ResourceCPURequest>60 m</ResourceCPURequest>\\n            <ResourceMemoryRequest>30 Mi</ResourceMemoryRequest>\\n        </SidecarProxyResourceRequest>\\n        <ExcludeOutboundPorts>81</ExcludeOutboundPorts>\\n        <ExcludeOutboundIPRanges>192.168.1.3/31</ExcludeOutboundIPRanges>\\n        <IncludeOutboundIPRanges>192.168.1.4/31</IncludeOutboundIPRanges>\\n        <ExcludeInboundPorts>82</ExcludeInboundPorts>\\n        <IncludeInboundPorts>83</IncludeInboundPorts>\\n        <IncludeOutboundPorts>84</IncludeOutboundPorts>\\n        <IstioDNSProxyEnabled>true</IstioDNSProxyEnabled>\\n        <LifecycleStr>{\\"postStart\\":{\\"exec\\":{\\"command\\":[\\"pilot-agent\\",\\"wait\\"]}},\\"preStop\\":{\\"exec\\":{\\"command\\":[\\"/bin/sh\\",\\"-c\\",\\"sleep 15\\"]}}}</LifecycleStr>\\n        <Concurrency>2</Concurrency>\\n        <LogLevel>info</LogLevel>\\n        <HoldApplicationUntilProxyStarts>true</HoldApplicationUntilProxyStarts>\\n        <ProxyStatsMatcher>\\n            <InclusionPrefixes>server</InclusionPrefixes>\\n            <InclusionSuffixes>cluster.outbound</InclusionSuffixes>\\n            <InclusionRegexps>listener.*.downstream_cx_total</InclusionRegexps>\\n        </ProxyStatsMatcher>\\n        <Tracing>\\n            <Sampling>99.8</Sampling>\\n            <MaxPathTagLength>10</MaxPathTagLength>\\n        </Tracing>\\n        <InterceptionMode>TPROXY</InterceptionMode>\\n    </ConfigPatches>\\n</DescribeNamespaceScopeSidecarConfigResponse>","errorExample":""}]',
            'title' => '查询Sidecar配置',
        ],
        'AddClusterIntoServiceMesh' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待添加集群的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ce3c25e247da24f3aab9b7edfae83****',
                    ],
                ],
                [
                    'name' => 'IgnoreNamespaceCheck',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '添加集群时不检查目标集群是否存在istio-system命名空间。一般用于自建Istio迁移ASM场景。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n<Message>success</Message>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '添加一个集群到服务网格',
            'summary' => '调用AddClusterIntoServiceMesh添加一个集群到服务网格。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RemoveClusterFromServiceMesh' => [
            'methods' => [
                'post',
                'delete',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ce3c25e247da24f3aab9b7edfae83****',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '要删除的集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'ReserveNamespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '移除集群时，保留istio-system命名空间。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回消息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n<Message>success</Message>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '从服务网格中删除集群',
            'summary' => '调用RemoveClusterFromServiceMesh接口从服务网格中删除一个集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateASMNamespaceFromGuestCluster' => [
            'summary' => '调用UpdateASMNamespaceFromGuestCluster从加入服务网格的Kubernetes集群中同步命名空间信息。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cbf9ca9e6d5dc4c87a3ecd0ebf1e*****',
                    ],
                ],
                [
                    'name' => 'K8sClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '同步命名空间的Kubernetes集群ID。Kubernetes集群已添加到ServiceMeshId指定的服务网格中。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c6f6d46583def494ba1f2e2937c8*****',
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
                                'example' => '9DEC6122-ACEC-183D-8451-8E0A1A******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9DEC6122-ACEC-183D-8451-8E0A1A******\\"\\n}","type":"json"}]',
            'title' => '将数据平面集群Namespace同步到ASM实例',
        ],
        'DescribeServiceMeshClusters' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'formData',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '本次访问的起始位置。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'formData',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '集群列表最大数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '30',
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
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'Clusters' => [
                                'description' => '集群列表信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SgId' => [
                                            'description' => '安全组ID。',
                                            'type' => 'string',
                                            'example' => 'sg-bp197668l6iupljy****',
                                        ],
                                        'VpcId' => [
                                            'description' => '专有网络ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-8vbrwmt95b4zf6wf7****',
                                        ],
                                        'CreationTime' => [
                                            'description' => '集群创建时间。',
                                            'type' => 'string',
                                            'example' => '2020-05-12T15:38:16+08:00',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '集群最后修改时间。',
                                            'type' => 'string',
                                            'example' => '2020-05-12T15:38:16+08:00',
                                        ],
                                        'ErrorMessage' => [
                                            'description' => '集群的异常信息。',
                                            'type' => 'string',
                                            'example' => 'fail',
                                        ],
                                        'State' => [
                                            'description' => '集群状态，取值：'."\n"
                                                ."\n"
                                                .'- `running`：运行中。'."\n"
                                                ."\n"
                                                .'- `starting `：启动中。'."\n"
                                                ."\n"
                                                .'- `stopping `：终止中。'."\n"
                                                ."\n"
                                                .'- `stopped`：已停止。'."\n"
                                                ."\n"
                                                .'- `failed`：失败。',
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                        'ServiceMeshId' => [
                                            'description' => '服务网格ID。',
                                            'type' => 'string',
                                            'example' => 'cb8963379255149cb98c8686f274x****',
                                        ],
                                        'RegionId' => [
                                            'description' => '集群所在地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ClusterDomain' => [
                                            'description' => '集群域名。',
                                            'type' => 'string',
                                            'example' => 'c.com',
                                        ],
                                        'Version' => [
                                            'description' => '集群版本号。',
                                            'type' => 'string',
                                            'example' => 'v1.16.6-aliyun.1',
                                        ],
                                        'ClusterType' => [
                                            'description' => '集群类型。',
                                            'type' => 'string',
                                            'example' => 'Ask',
                                        ],
                                        'Name' => [
                                            'description' => '集群名称。',
                                            'type' => 'string',
                                            'example' => 'ask1',
                                        ],
                                        'ClusterId' => [
                                            'description' => '集群ID。',
                                            'type' => 'string',
                                            'example' => 'c80f45444b3da447da60a911390c2****',
                                        ],
                                        'ForbiddenFlag' => [
                                            'description' => '数据面集群不能加入ASM的原因，取值：'."\n"
                                                ."\n"
                                                .'- `0`：表示正常，可加入。'."\n"
                                                ."\n"
                                                .'- `1`：表示您没有集群的adminlevel权限。'."\n"
                                                ."\n"
                                                .'- `2`：集群和网格位于不同的VPC中，并且它们之间没有CEN。'."\n"
                                                ."\n"
                                                .'- `3`：集群的CIDR与网格冲突。'."\n"
                                                ."\n"
                                                .'- `4`：集群已具有名为istio-system的命名空间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'ForbiddenInfo' => [
                                            'description' => '数据面集群不能加入ASM的详细原因，格式为JSON字符串，格式为：'."\n"
                                                .'```'."\n"
                                                .'['."\n"
                                                .'  {'."\n"
                                                .'    "cluster": "cdd55bd6e054b4c6ca18ec02614******",'."\n"
                                                .'    "object": "Pod",'."\n"
                                                .'    "cidr": "172.16.0.0/24"'."\n"
                                                .'  },'."\n"
                                                .'  {'."\n"
                                                .'    "cluster": "cfa37fdf7cb1641e1976f8293ac******",'."\n"
                                                .'    "object": "Pod",'."\n"
                                                .'    "cidr": "172.16.0.0/24"'."\n"
                                                .'  }'."\n"
                                                .']'."\n"
                                                .'```'."\n"
                                                .'以上例子中表示集群`cdd55bd6e054b4c6ca18ec02614******`的Pod CIDR `172.16.0.0/24`与集群`cfa37fdf7cb1641e1976f8293ac******`的Pod CIDR `172.16.0.0/24`发生了冲突。'."\n"
                                                ."\n"
                                                .'`object`取值：'."\n"
                                                .'- `Pod`'."\n"
                                                .'- `Service`'."\n"
                                                .'- `VSwitch`'."\n"
                                                .'- `VPC`'."\n"
                                                .'- `VPC CIDR`',
                                            'type' => 'string',
                                            'example' => '[{"cluster":"cdd55bd6e054b4c6ca18ec02614******", "object":"Pod", "cidr":"172.16.0.0/24"},{"cluster":"cfa37fdf7cb1641e1976f8293ac******", "object":"Pod", "cidr":"172.16.0.0/24"}]',
                                        ],
                                    ],
                                ],
                            ],
                            'NumberOfClusters' => [
                                'description' => '当前Region下的容器服务集群总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"Clusters\\": [\\n    {\\n      \\"SgId\\": \\"sg-bp197668l6iupljy****\\",\\n      \\"VpcId\\": \\"vpc-8vbrwmt95b4zf6wf7****\\",\\n      \\"CreationTime\\": \\"2020-05-12T15:38:16+08:00\\",\\n      \\"UpdateTime\\": \\"2020-05-12T15:38:16+08:00\\",\\n      \\"ErrorMessage\\": \\"fail\\",\\n      \\"State\\": \\"running\\",\\n      \\"ServiceMeshId\\": \\"cb8963379255149cb98c8686f274x****\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ClusterDomain\\": \\"c.com\\",\\n      \\"Version\\": \\"v1.16.6-aliyun.1\\",\\n      \\"ClusterType\\": \\"Ask\\",\\n      \\"Name\\": \\"ask1\\",\\n      \\"ClusterId\\": \\"c80f45444b3da447da60a911390c2****\\",\\n      \\"ForbiddenFlag\\": 0,\\n      \\"ForbiddenInfo\\": \\"[{\\\\\\"cluster\\\\\\":\\\\\\"cdd55bd6e054b4c6ca18ec02614******\\\\\\", \\\\\\"object\\\\\\":\\\\\\"Pod\\\\\\", \\\\\\"cidr\\\\\\":\\\\\\"172.16.0.0/24\\\\\\"},{\\\\\\"cluster\\\\\\":\\\\\\"cfa37fdf7cb1641e1976f8293ac******\\\\\\", \\\\\\"object\\\\\\":\\\\\\"Pod\\\\\\", \\\\\\"cidr\\\\\\":\\\\\\"172.16.0.0/24\\\\\\"}]\\"\\n    }\\n  ],\\n  \\"NumberOfClusters\\": 5\\n}","errorExample":""},{"type":"xml","example":"<DescribeServiceMeshClustersResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <Clusters>\\n        <SgId>sg-bp197668l6iupljy****</SgId>\\n        <VpcId>vpc-8vbrwmt95b4zf6wf7****</VpcId>\\n        <CreationTime>2020-05-12T15:38:16+08:00</CreationTime>\\n        <UpdateTime>2020-05-12T15:38:16+08:00</UpdateTime>\\n        <ErrorMessage>fail</ErrorMessage>\\n        <State>running</State>\\n        <ServiceMeshId>cb8963379255149cb98c8686f274x****</ServiceMeshId>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ClusterDomain>c.com</ClusterDomain>\\n        <Version>v1.16.6-aliyun.1</Version>\\n        <ClusterType>Ask</ClusterType>\\n        <Name>ask1</Name>\\n        <ClusterId>c80f45444b3da447da60a911390c2****</ClusterId>\\n        <ForbiddenFlag>0</ForbiddenFlag>\\n    </Clusters>\\n</DescribeServiceMeshClustersResponse>","errorExample":""}]',
            'title' => '获取服务网格的可用集群',
            'summary' => '调用DescribeServiceMeshClusters获取服务网格的可用集群。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeClustersInServiceMesh' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'Clusters' => [
                                'description' => '集群列表信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '集群信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SgId' => [
                                            'description' => '安全组ID。',
                                            'type' => 'string',
                                            'example' => 'sg-bp197668l6iupljy****',
                                        ],
                                        'VpcId' => [
                                            'description' => '专有网络ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-2zew0rajjkmxy2369****',
                                        ],
                                        'CreationTime' => [
                                            'description' => '集群创建时间。',
                                            'type' => 'string',
                                            'example' => '2020-05-12T15:38:16+08:00',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '集群最后修改时间。',
                                            'type' => 'string',
                                            'example' => '2020-05-12T15:38:16+08:00',
                                        ],
                                        'ErrorMessage' => [
                                            'description' => '异常信息。',
                                            'type' => 'string',
                                            'example' => ',',
                                        ],
                                        'State' => [
                                            'description' => '集群状态。',
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                        'AccessLogDashboards' => [
                                            'description' => '访问日志配置列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '访问日志配置信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Url' => [
                                                        'description' => '访问日志地址。',
                                                        'type' => 'string',
                                                        'example' => 'https://sls.console.aliyun.com/next/project/****/dashboard/mesh-access-log_details_cn',
                                                    ],
                                                    'Title' => [
                                                        'description' => '访问日志标题。',
                                                        'type' => 'string',
                                                        'example' => 'mesh-access-log_details_cn',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'RegionId' => [
                                            'description' => '集群所在地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ClusterDomain' => [
                                            'description' => '集群域名。',
                                            'type' => 'string',
                                            'example' => 'example.com',
                                        ],
                                        'Version' => [
                                            'description' => '集群版本号。',
                                            'type' => 'string',
                                            'example' => 'v1.16.6-aliyun.1',
                                        ],
                                        'ClusterType' => [
                                            'description' => '集群类型。',
                                            'type' => 'string',
                                            'example' => 'Ask',
                                        ],
                                        'Name' => [
                                            'description' => '集群名称。',
                                            'type' => 'string',
                                            'example' => 'ask1',
                                        ],
                                        'ClusterId' => [
                                            'description' => '集群ID。',
                                            'type' => 'string',
                                            'example' => 'c80f45444b3da447da60a911390c2****',
                                        ],
                                        'LogtailInstalledState' => [
                                            'description' => '集群中Logtail组件的安装状态，取值：'."\n"
                                                ."\n"
                                                .'- `logtail_installed`：Logtail组件已安装。'."\n"
                                                ."\n"
                                                .'-` logtail_uninstalled`：Logtail组件未安装。'."\n"
                                                ."\n"
                                                .'- `logtail_state_get_error`：Logtail组件安装失败。',
                                            'type' => 'string',
                                            'example' => 'logtail_installed',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"Clusters\\": [\\n    {\\n      \\"SgId\\": \\"sg-bp197668l6iupljy****\\",\\n      \\"VpcId\\": \\"vpc-2zew0rajjkmxy2369****\\",\\n      \\"CreationTime\\": \\"2020-05-12T15:38:16+08:00\\",\\n      \\"UpdateTime\\": \\"2020-05-12T15:38:16+08:00\\",\\n      \\"ErrorMessage\\": \\",\\",\\n      \\"State\\": \\"running\\",\\n      \\"AccessLogDashboards\\": [\\n        {\\n          \\"Url\\": \\"https://sls.console.aliyun.com/next/project/****/dashboard/mesh-access-log_details_cn\\",\\n          \\"Title\\": \\"mesh-access-log_details_cn\\"\\n        }\\n      ],\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ClusterDomain\\": \\"example.com\\",\\n      \\"Version\\": \\"v1.16.6-aliyun.1\\",\\n      \\"ClusterType\\": \\"Ask\\",\\n      \\"Name\\": \\"ask1\\",\\n      \\"ClusterId\\": \\"c80f45444b3da447da60a911390c2****\\",\\n      \\"LogtailInstalledState\\": \\"logtail_installed\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeClustersInServiceMeshResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <Clusters>\\n        <SgId>sg-bp197668l6iupljy****</SgId>\\n        <VpcId>vpc-2zew0rajjkmxy2369****</VpcId>\\n        <CreationTime>2020-05-12T15:38:16+08:00</CreationTime>\\n        <UpdateTime>2020-05-12T15:38:16+08:00</UpdateTime>\\n        <ErrorMessage>,</ErrorMessage>\\n        <State>running</State>\\n        <AccessLogDashboards>\\n            <Url>https://sls.console.aliyun.com/next/project/****/dashboard/mesh-access-log_details_cn</Url>\\n            <Title>mesh-access-log_details_cn</Title>\\n        </AccessLogDashboards>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ClusterDomain>example.com</ClusterDomain>\\n        <Version>v1.16.6-aliyun.1</Version>\\n        <ClusterType>Ask</ClusterType>\\n        <Name>ask1</Name>\\n        <ClusterId>c80f45444b3da447da60a911390c2****</ClusterId>\\n        <LogtailInstalledState>logtail_installed</LogtailInstalledState>\\n    </Clusters>\\n</DescribeClustersInServiceMeshResponse>","errorExample":""}]',
            'title' => '获取服务网格所在集群的信息列表',
            'summary' => '调用DescribeClustersInServiceMesh获取服务网格所在集群的信息列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeGuestClusterPods' => [
            'summary' => '调用DescribeGuestClusterPods获取指定K8s集群指定命名空间内的Pod。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c78d60f98fa43403ab6e0701b2678****',
                    ],
                ],
                [
                    'name' => 'GuestClusterID',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '加入网格的Kubernetes集群ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c49ad2169d5a04f2d89dfc4b6bcu****',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'EDDC0D86-2FC3-56FB-9213-96EB0A3523F1',
                            ],
                            'PodList' => [
                                'description' => 'Kubernetes集群中的Pod名称列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Pod名称',
                                    'type' => 'string',
                                    'example' => 'sleep-5axqt-*****',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'ERR404',
                        'errorMessage' => 'Not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EDDC0D86-2FC3-56FB-9213-96EB0A3523F1\\",\\n  \\"PodList\\": [\\n    \\"sleep-5axqt-*****\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeGuestClusterPodsResponse>\\n    <RequestId>EDDC0D86-2FC3-56FB-9213-96EB0A3523F1</RequestId>\\n    <PodList>sleep-5axqt-*****</PodList>\\n</DescribeGuestClusterPodsResponse>","errorExample":""}]',
            'title' => '获取集群的Pod列表',
        ],
        'DescribeGuestClusterNamespaces' => [
            'summary' => '调用DescribeGuestClusterNamespaces获取加入服务网格的Kubernetes集群的命名空间列表。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ce134b0727aa2492db69f6c3880e****',
                    ],
                ],
                [
                    'name' => 'GuestClusterID',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '加入服务网格的Kubernetes集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c584d805c7bd442b8bac421f9849f****',
                    ],
                ],
                [
                    'name' => 'ShowNsLabels',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否同时返回命名空间的标签。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'NsList' => [
                                'description' => '命名空间名称列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '命名空间名称。',
                                    'type' => 'string',
                                    'example' => 'default',
                                ],
                            ],
                            'NsLabels' => [
                                'description' => '命名空间的标签，仅在`ShowNsLabels`入参设置为`true`时有值。',
                                'type' => 'object',
                                'example' => '{"default":{"istio-injection":"enabled"}}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'ERR404',
                        'errorMessage' => 'Not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"NsList\\": [\\n    \\"default\\"\\n  ],\\n  \\"NsLabels\\": {\\n    \\"default\\": {\\n      \\"istio-injection\\": \\"enabled\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeGuestClusterNamespacesResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <NsList>default</NsList>\\n    <NsLabels>\\n        <default>\\n            <istio-injection>enabled</istio-injection>\\n            <kubernetes.io/metadata.name>default</kubernetes.io/metadata.name>\\n        </default>\\n    </NsLabels>\\n</DescribeGuestClusterNamespacesResponse>","errorExample":""}]',
            'title' => '获取集群内的命名空间列表',
        ],
        'DescribeReusableSlb' => [
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
                'abilityTreeCode' => '17614',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh8LRZ5X',
                    'FEATUREservicemeshRMLVVZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'K8sClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据平面集群ID。填写该参数时，不能填写ServiceMeshId。该参数和ServiceMeshId不能同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'ca2cfe41fefeb489d9b9dba18a7c5****',
                    ],
                ],
                [
                    'name' => 'NetworkType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络类型，取值：'."\n"
                            ."\n"
                            .'- `intranet`：专有网络'."\n"
                            ."\n"
                            .'- `internet`：公网',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'internet',
                    ],
                ],
                [
                    'name' => 'LbType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '负载均衡类型，取值：'."\n"
                            ."\n"
                            .'- `clb`：传统型负载均衡'."\n"
                            ."\n"
                            .'- `nlb`：网络型负载均衡'."\n"
                            ."\n"
                            .'默认为`clb`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'clb',
                    ],
                ],
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID。填写该参数时，不能填写K8sClusterId。该参数和K8sClusterId不能同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '可复用CLB结果列表。',
                        'type' => 'object',
                        'properties' => [
                            'ReusableSlbList' => [
                                'description' => '可复用的负载均衡实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LoadBalancerName' => [
                                            'description' => '负载均衡实例名称。',
                                            'type' => 'string',
                                            'example' => 'ad6044b015ac54484a20c4724117****',
                                        ],
                                        'LoadBalancerId' => [
                                            'description' => '负载均衡实例ID。',
                                            'type' => 'string',
                                            'example' => 'lb-bp17xygzsxth0bwlz****',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EDDC0D86-2FC3-56FB-9213-96EB0A3523F1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ReusableSlbList\\": [\\n    {\\n      \\"LoadBalancerName\\": \\"ad6044b015ac54484a20c4724117****\\",\\n      \\"LoadBalancerId\\": \\"lb-bp17xygzsxth0bwlz****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"EDDC0D86-2FC3-56FB-9213-96EB0A3523F1\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeReusableSlbResponse>\\n    <ReusableSlbList>\\n        <LoadBalancerName>ad6044b015ac54484a20c47241175bb3</LoadBalancerName>\\n        <LoadBalancerId>lb-bp17xygzsxth0bwlz****</LoadBalancerId>\\n    </ReusableSlbList>\\n    <RequestId>EDDC0D86-2FC3-56FB-9213-96EB0A3523F1</RequestId>\\n</DescribeReusableSlbResponse>","errorExample":""}]',
            'title' => '获取可复用的CLB（原SLB）',
            'summary' => '调用DescribeReusableSlb获取可复用的CLB（原SLB）。',
        ],
        'GetRegisteredServiceEndpoints' => [
            'summary' => '调用GetRegisteredServiceEndpoints获取注册服务端点信息。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'ClusterIds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '集群ID列表，用逗号分隔',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c8b054ee8c3914d079b5ce9733328****,c58faedb8a78640d3aeb0372e4c02****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'reviews',
                    ],
                ],
                [
                    'name' => 'ServiceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务类型，取值：'."\n"
                            ."\n"
                            .'- `ServiceEntry`：为服务网格ServiceEntry中注册的服务'."\n"
                            ."\n"
                            .'- `Kubernetes`：为数据面Kubernetes集群注册的服务',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Kubernetes',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'ServiceEndpoints' => [
                                'description' => '服务端点信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务端点信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Address' => [
                                            'description' => '服务地址',
                                            'type' => 'string',
                                            'example' => '192.168.25.153',
                                        ],
                                        'ClusterId' => [
                                            'description' => '数据面集群ID',
                                            'type' => 'string',
                                            'example' => 'c80f45444b3da447da60a911390c2****',
                                        ],
                                    ],
                                ],
                            ],
                            'EndPointSlice' => [
                                'description' => '服务端点详细信息列表',
                                'type' => 'object',
                                'properties' => [
                                    'ServiceName' => [
                                        'description' => '服务名称',
                                        'type' => 'string',
                                        'example' => 'reviews',
                                    ],
                                    'Namespace' => [
                                        'description' => '命名空间',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'Location' => [
                                        'description' => '服务所在的位置。可选参数：'."\n"
                                            ."\n"
                                            .'- `MESH_INTERNAL`：服务在网格内部'."\n"
                                            ."\n"
                                            .'- `MESH_EXTERNAL`：服务在网格外部',
                                        'type' => 'string',
                                        'example' => 'MESH_INTERNAL',
                                    ],
                                    'EndpointsDetails' => [
                                        'description' => '服务端点详细信息列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '服务端点详细信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'PodName' => [
                                                    'description' => 'pod名称',
                                                    'type' => 'string',
                                                    'example' => 'provider-v1-8c86b6898-h***',
                                                ],
                                                'Address' => [
                                                    'description' => '服务端点地址',
                                                    'type' => 'string',
                                                    'example' => '127.2.**.**',
                                                ],
                                                'Ports' => [
                                                    'description' => '端口列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '服务端口',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '9090',
                                                    ],
                                                ],
                                                'Hostname' => [
                                                    'description' => '服务地址',
                                                    'type' => 'string',
                                                    'example' => 'www.demo.com',
                                                ],
                                                'Region' => [
                                                    'description' => '地域ID',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'SidecarInjected' => [
                                                    'description' => '是否注入Sidecar代理，取值：'."\n"
                                                        ."\n"
                                                        .'- `true`：注入Sidecar代理'."\n"
                                                        ."\n"
                                                        .'- `false`：不注入Sidecar代理',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'ERR500',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ServiceEndpoints\\": [\\n    {\\n      \\"Address\\": \\"192.168.25.153\\",\\n      \\"ClusterId\\": \\"c80f45444b3da447da60a911390c2****\\"\\n    }\\n  ],\\n  \\"EndPointSlice\\": {\\n    \\"ServiceName\\": \\"reviews\\",\\n    \\"Namespace\\": \\"default\\",\\n    \\"Location\\": \\"MESH_INTERNAL\\",\\n    \\"EndpointsDetails\\": [\\n      {\\n        \\"PodName\\": \\"provider-v1-8c86b6898-h***\\",\\n        \\"Address\\": \\"127.2.**.**\\",\\n        \\"Ports\\": [\\n          9090\\n        ],\\n        \\"Hostname\\": \\"www.demo.com\\",\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"SidecarInjected\\": false\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetRegisteredServiceEndpointsResponse>\\n    <ServiceEndpoints>\\n        <Address>192.168.25.153</Address>\\n        <ClusterId>c80f45444b3da447da60a911390c2****</ClusterId>\\n    </ServiceEndpoints>\\n    <EndPointSlice>\\n        <ServiceName>reviews</ServiceName>\\n        <Namespace>default</Namespace>\\n        <Location>MESH_INTERNAL</Location>\\n        <EndpointsDetails>\\n            <PodName>provider-v1-8c86b6898-h***</PodName>\\n            <Address>127.2.**.**</Address>\\n            <Ports>9090</Ports>\\n            <Hostname>www.demo.com</Hostname>\\n            <Region>cn-hangzhou</Region>\\n            <SidecarInjected>false</SidecarInjected>\\n        </EndpointsDetails>\\n    </EndPointSlice>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n</GetRegisteredServiceEndpointsResponse>","errorExample":""}]',
            'title' => '获取注册到网格内的服务端点信息',
        ],
        'GetRegisteredServiceNamespaces' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'Namespaces' => [
                                'description' => '命名空间列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '命名空间',
                                    'type' => 'string',
                                    'example' => 'default',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'ERR500',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Namespaces\\": [\\n    \\"default\\"\\n  ],\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetRegisteredServiceNamespacesResponse>\\n    <Namespaces>default</Namespaces>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n</GetRegisteredServiceNamespacesResponse>","errorExample":""}]',
            'title' => '获取注册服务所在的命名空间',
            'summary' => '调用GetRegisteredServiceNamespaces获取注册服务的命名空间列表。',
        ],
        'CreateASMGateway' => [
            'summary' => '调用CreateASMGateway创建ASM网关。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建的ASM网关的YAML内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"apiVersion":"istio.alibabacloud.com/v1beta1","kind":"IstioGateway","metadata":{"name":"ingressgateway","namespace":"istio-system"},"spec":{"gatewayType":"ingress","clusterIds":["xxxxx"],"ports":[{"name":"http-0","port":80,"targetPort":80,"protocol":"TCP"},{"name":"https-1","port":443,"targetPort":443,"protocol":"TCP"}],"serviceAnnotations":{"service.beta.kubernetes.io/alicloud-loadbalancer-address-type":"internet","service.beta.kubernetes.io/alibaba-cloud-loadbalancer-spec":"slb.s1.small"},"replicaCount":2,"resources":{"limits":{"cpu":"2","memory":"4G"},"requests":{"cpu":"200m","memory":"256Mi"}},"serviceType":"LoadBalancer","maxReplicas":2,"minReplicas":2}}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateASMGatewayResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n</CreateASMGatewayResponse>","errorExample":""}]',
            'title' => '创建ASM网关',
        ],
        'CreateIstioGatewayRoutes' => [
            'summary' => '调用CreateIstioGatewayRoutes创建ASM网关对应的路由。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'GatewayRoute',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '网关路由信息。',
                        'type' => 'object',
                        'properties' => [
                            'RouteName' => [
                                'description' => '路由名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'reviews-v2-routes',
                            ],
                            'RouteType' => [
                                'description' => '路由类型，取值：`HTTP`、`TLS`、`TCP`。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'HTTP',
                            ],
                            'MatchRequest' => [
                                'description' => '路由匹配规则。',
                                'type' => 'object',
                                'properties' => [
                                    'URI' => [
                                        'description' => 'URI匹配规则。',
                                        'type' => 'object',
                                        'properties' => [
                                            'MatchingMode' => [
                                                'description' => '路由规则匹配模式。取值：'."\n"
                                                    ."\n"
                                                    .'- `exact`：精准匹配。'."\n"
                                                    .' '."\n"
                                                    .'- `prefix`：前缀匹配。'."\n"
                                                    ."\n"
                                                    .'- `regex`：正则匹配。'."\n",
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'prefix',
                                            ],
                                            'MatchingContent' => [
                                                'description' => '用于匹配的内容。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/ratings/v2/',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Headers' => [
                                        'description' => '用于判断是否匹配的请求头部列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用于判断是否匹配的请求头部。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => 'Header匹配的键。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'x-request-id',
                                                ],
                                                'MatchingMode' => [
                                                    'description' => 'Header值匹配方式，取值：'."\n"
                                                        .'- `exact`：精准匹配。'."\n"
                                                        .' '."\n"
                                                        .'- `prefix`：前缀匹配。'."\n"
                                                        ."\n"
                                                        .'- `regex`：正则匹配。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'exact',
                                                ],
                                                'MatchingContent' => [
                                                    'description' => '用于Header匹配的内容。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'v1',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                    'TLSMatchAttributes' => [
                                        'description' => 'TLS连接匹配属性列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'TLS连接匹配属性。',
                                            'type' => 'object',
                                            'properties' => [
                                                'TLSPort' => [
                                                    'description' => 'TLS端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '443',
                                                ],
                                                'SNIHosts' => [
                                                    'description' => '服务器名称标识列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'SNI值中可以使用通配符前缀，例如`*.com`将匹配`foo.example.com`和`example.com`。'."\n"
                                                            ."\n"
                                                            .'> SNI值必须是相应虚拟服务主机的子集。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '*.com',
                                                    ],
                                                    'required' => false,
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                    'Ports' => [
                                        'description' => 'L4目标端口列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '指定主机上要寻址的端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '443',
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'RouteDestinations' => [
                                'description' => 'L4路由规则加权目的地列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'L4路由规则加权目的地',
                                    'type' => 'object',
                                    'properties' => [
                                        'Destination' => [
                                            'description' => 'Destination唯一标识请求或连接应转发到的服务实例。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Host' => [
                                                    'description' => '服务注册表中服务的名称。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'reviews',
                                                ],
                                                'Subset' => [
                                                    'description' => '服务中子集的名称。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'v1',
                                                ],
                                                'Port' => [
                                                    'description' => '端口',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Number' => [
                                                            'description' => '端口号',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'required' => false,
                                                            'example' => '80',
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'Weight' => [
                                            'description' => '服务子集权重。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '80',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'HTTPAdvancedOptions' => [
                                'description' => 'HTTP路由高级配置选项。',
                                'type' => 'object',
                                'properties' => [
                                    'HTTPRedirect' => [
                                        'description' => 'HTTP重定向。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Uri' => [
                                                'description' => '在重定向时，使用此值覆盖URL的路径部分。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/v1/getProductRatings',
                                            ],
                                            'Authority' => [
                                                'description' => '在重定向时，使用此值覆盖URL的`Authority/Host`部分。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'newratings.default.svc.cluster.local',
                                            ],
                                            'RedirectCode' => [
                                                'description' => '在重定向上，指定要在重定向响应中使用的HTTP状态代码。默认响应代码为301。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '301',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Delegate' => [
                                        'description' => '虚拟服务流量代理。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Name' => [
                                                'description' => '名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'reviews',
                                            ],
                                            'Namespace' => [
                                                'description' => '命名空间。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'default',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Rewrite' => [
                                        'description' => '重写虚拟服务。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Uri' => [
                                                'description' => '用这个值重写URI的路径（或前缀）部分。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/v1/getProductRatings',
                                            ],
                                            'Authority' => [
                                                'description' => '使用此值重写Authority或Host头。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'newratings.default.svc.cluster.local',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Timeout' => [
                                        'description' => '超时时长。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '5s',
                                    ],
                                    'Retries' => [
                                        'description' => '请求重试配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Attempts' => [
                                                'description' => '给定请求允许的重试次数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '3',
                                            ],
                                            'PerTryTimeout' => [
                                                'description' => '用于指定给定请求的每次尝试超时，例如`5s`。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '5s',
                                            ],
                                            'RetryOn' => [
                                                'description' => '用于指定重试发生的条件，例如`connect-failure,refused-stream,503`。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'connect-failure,refused-stream,503',
                                            ],
                                            'RetryRemoteLocalities' => [
                                                'description' => '用于指定重试是否应重试到其他位置的标志。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Value' => [
                                                        'description' => '用于指定重试是否应重试到其他位置的标志，取值：'."\n"
                                                            ."\n"
                                                            .'- `true`：其他位置也重试。'."\n"
                                                            ."\n"
                                                            .'- `false`：其他位置不重试。'."\n"
                                                            ."\n"
                                                            .'默认`false`。',
                                                        'type' => 'boolean',
                                                        'required' => false,
                                                        'example' => 'false',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Fault' => [
                                        'description' => '故障注入设置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Delay' => [
                                                'description' => '设置延迟。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'FixedDelay' => [
                                                        'description' => '固定延迟时间。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '5s',
                                                    ],
                                                    'Percentage' => [
                                                        'description' => '将注入延迟的请求的百分比。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Value' => [
                                                                'description' => '将注入延迟的请求的百分比，用小数表示。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'required' => false,
                                                                'example' => '0.1',
                                                            ],
                                                        ],
                                                        'required' => false,
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'Abort' => [
                                                'description' => '提前中止带有预先指定的错误码的请求。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'HttpStatus' => [
                                                        'description' => 'HTTP状态码。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'example' => '400',
                                                    ],
                                                    'Percentage' => [
                                                        'description' => '使用提供的错误码中止的请求的百分比。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Value' => [
                                                                'description' => '使用提供的错误码中止的请求的百分比，用小数表示。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'required' => false,
                                                                'example' => '0.1',
                                                            ],
                                                        ],
                                                        'required' => false,
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Mirror' => [
                                        'description' => '除了将请求转发到预期目标之外，还将HTTP通信镜像到另一个目标。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Host' => [
                                                'description' => '服务注册表中服务的名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'reviews.default.svc.cluster.local',
                                            ],
                                            'Subset' => [
                                                'description' => '服务中子集的名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'v1',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'MirrorPercentage' => [
                                        'description' => '流量镜像百分比。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Value' => [
                                                'description' => '流量镜像百分比，用小数表示。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                                'example' => '0.2',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Namespace' => [
                                'description' => '命名空间',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'default',
                            ],
                            'Domains' => [
                                'description' => '请求域名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '域名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test.asm.aliyun.com',
                                ],
                                'required' => false,
                            ],
                            'RawVSRoute' => [
                                'description' => 'Json类型的字符串。和虚拟服务中的三种路由类型对应，提供高级功能的配置入口。此处的配置，将会覆盖RouteName、RouteType、MatchRequest、HTTPAdvancedOptions中的配置。',
                                'type' => 'any',
                                'required' => false,
                                'example' => '{'."\n"
                                    .'  "http": {'."\n"
                                    .'    "route": ['."\n"
                                    .'      {'."\n"
                                    .'        "destination": {'."\n"
                                    .'          "host": "httpbin"'."\n"
                                    .'        }'."\n"
                                    .'      }'."\n"
                                    .'    ],'."\n"
                                    .'    "name": "httpbin",'."\n"
                                    .'    "match": ['."\n"
                                    .'      {'."\n"
                                    .'        "uri": {'."\n"
                                    .'          "prefix": "/"'."\n"
                                    .'        }'."\n"
                                    .'      }'."\n"
                                    .'    ],'."\n"
                                    .'    "fault": {'."\n"
                                    .'      "delay": {'."\n"
                                    .'        "fixedDelay": "2s",'."\n"
                                    .'        "percentage": {'."\n"
                                    .'          "value": 70'."\n"
                                    .'        }'."\n"
                                    .'      }'."\n"
                                    .'    }'."\n"
                                    .'  }'."\n"
                                    .'}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '路由优先级。整数，数字越小，优先级越高。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关路由状态，取值：'."\n"
                            ."\n"
                            .'- `0`：在线。'."\n"
                            ."\n"
                            .'- `1`：下线。'."\n"
                            ."\n"
                            .'- `2`：创建或更新错误。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '路由描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo route',
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
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateIstioGatewayRoutesResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n</CreateIstioGatewayRoutesResponse>","errorExample":""}]',
            'title' => '创建ASM网关对应的路由',
        ],
        'CreateGatewaySecret' => [
            'summary' => '调用CreateGatewaySecret创建网关密钥。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'SecretName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '密钥名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bookinfo-secret',
                    ],
                ],
                [
                    'name' => 'Cert',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '证书内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN CERTIFICATE----- MIIC2DCCAcACA-----END CERTIF****-----',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '证书的私钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQC2ag/Bzcgm****',
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
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'SecretCreateRecord' => [
                                'description' => '创建结果记录。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'State' => [
                                            'type' => 'string',
                                            'description' => '创建网关密钥的状态，取值：'."\n"
                                                ."\n"
                                                .'- `success`：创建成功。'."\n"
                                                ."\n"
                                                .'- `fail`：创建失败。',
                                            'example' => 'success',
                                        ],
                                        'ClusterId' => [
                                            'type' => 'string',
                                            'example' => 'c08ba3fd1e6484b0f8cc1ad8xe10d****',
                                            'description' => '数据面集群ID',
                                        ],
                                        'Message' => [
                                            'type' => 'string',
                                            'description' => '异常状态时会显示错误信息，正常时为空。',
                                            'example' => 'timeout',
                                        ],
                                    ],
                                    'description' => '创建结果信息记录。',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"SecretCreateRecord\\": {\\n    \\"key\\": {\\n      \\"State\\": \\"success\\",\\n      \\"ClusterId\\": \\"c08ba3fd1e6484b0f8cc1ad8xe10d****\\",\\n      \\"Message\\": \\"timeout\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateGatewaySecretResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <SecretCreateRecord>\\n        <key>\\n            <State>success</State>\\n            <ClusterId>c08ba3fd1e6484b0f8cc1ad8xe10d****</ClusterId>\\n            <Message>timeout</Message>\\n        </key>\\n    </SecretCreateRecord>\\n</CreateGatewaySecretResponse>","errorExample":""}]',
            'title' => '创建网关密钥',
        ],
        'CreateIstioGatewayDomains' => [
            'summary' => '调用CreateIstioGatewayDomains创建网关域名证书。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'Hosts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '此网关公开的一个或多个主机，多个用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com,demo.com',
                    ],
                ],
                [
                    'name' => 'Number',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关提供的端口号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '443',
                    ],
                ],
                [
                    'name' => 'PortName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '端口名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http-demo',
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '协议，取值：`HTTP` 、 `HTTPS` 、 `GRPC` 、`HTTP2` 、`MONGO` 、 `TCP` 、 `TLS`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'HTTPS',
                    ],
                ],
                [
                    'name' => 'Credential',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '包含TLS证书、CA证书的密钥名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bookinfo-secret',
                    ],
                ],
                [
                    'name' => 'ForceHttps',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否强制使用TLS保护连接，取值：'."\n"
                            ."\n"
                            .'- `true`：强制使用TLS保护连接。'."\n"
                            ."\n"
                            .'- `false`：不强制使用TLS保护连接。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '查询网关资源数目上限。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateIstioGatewayDomainsResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n</CreateIstioGatewayDomainsResponse>","errorExample":""}]',
            'title' => '创建网关域名证书',
        ],
        'DeleteGatewayRoute' => [
            'summary' => '调用DeleteGatewayRoute删除网关路由。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'RouteName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '路由名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http-route',
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
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'ERR500',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteGatewayRouteResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n</DeleteGatewayRouteResponse>","errorExample":""}]',
            'title' => '删除路由条目',
        ],
        'DeleteGatewaySecret' => [
            'summary' => '调用DeleteGatewaySecret删除网关密钥。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'SecretName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '密钥名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bookinfo-secret',
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'SecretDeleteRecord' => [
                                'description' => '删除结果记录。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'State' => [
                                            'type' => 'string',
                                            'example' => 'success',
                                            'description' => '删除网关密钥的状态，取值：'."\n"
                                                ."\n"
                                                .'- `success`：删除成功。'."\n"
                                                ."\n"
                                                .'- `fail`：删除失败。',
                                        ],
                                        'ClusterId' => [
                                            'type' => 'string',
                                            'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                                            'description' => '集群ID。',
                                        ],
                                        'Message' => [
                                            'type' => 'string',
                                            'description' => '异常状态时会显示错误信息，正常时为空。',
                                            'example' => 'timeout',
                                        ],
                                    ],
                                    'description' => '删除结果记录。',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"SecretDeleteRecord\\": {\\n    \\"key\\": {\\n      \\"State\\": \\"success\\",\\n      \\"ClusterId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n      \\"Message\\": \\"timeout\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteGatewaySecretResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n    <SecretDeleteRecord>\\n        <key>\\n            <State>success</State>\\n            <ClusterId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</ClusterId>\\n            <Message>timeout</Message>\\n        </key>\\n    </SecretDeleteRecord>\\n</DeleteGatewaySecretResponse>","errorExample":""}]',
            'title' => '删除网关密钥',
        ],
        'DeleteIstioGatewayDomains' => [
            'summary' => '调用DeleteIstioGatewayDomains删除网关路由。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'Hosts',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '此网关公开的一个或多个主机，多个用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com,demo.com',
                    ],
                ],
                [
                    'name' => 'PortName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '端口名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '查询的网关资源数目上限。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteIstioGatewayDomainsResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n</DeleteIstioGatewayDomainsResponse>","errorExample":""}]',
            'title' => '删除网关路由',
        ],
        'UpdateASMGateway' => [
            'summary' => '调用UpdateASMGateway修改ASM网关。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新的ASM网关YAML内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"apiVersion":"istio.alibabacloud.com/v1beta1","kind":"IstioGateway","metadata":{"name":"ingressgateway","namespace":"istio-system"},"spec":{"gatewayType":"ingress","clusterIds":["xxxxx"],"ports":[{"name":"http-0","port":80,"targetPort":80,"protocol":"TCP"},{"name":"https-1","port":443,"targetPort":443,"protocol":"TCP"}],"serviceAnnotations":{"service.beta.kubernetes.io/alicloud-loadbalancer-address-type":"internet","service.beta.kubernetes.io/alibaba-cloud-loadbalancer-spec":"slb.s1.small"},"replicaCount":2,"resources":{"limits":{"cpu":"2","memory":"4G"},"requests":{"cpu":"200m","memory":"256Mi"}},"serviceType":"LoadBalancer","maxReplicas":2,"minReplicas":2}}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateASMGatewayResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n</UpdateASMGatewayResponse>","errorExample":""}]',
            'title' => '修改ASM网关',
        ],
        'UpdateASMGatewayImportedServices' => [
            'summary' => '调用UpdateASMGatewayImportedServices更新ASM网关导入的服务信息，导入或删除网关关联的上游服务。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'ServiceNames',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务名列表，多个以英文逗号（,） 分隔，例如：reviews,sleep',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'reviews,sleep',
                    ],
                ],
                [
                    'name' => 'ASMGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'ServiceNamespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务所在命名空间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
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
                                'example' => '11fd0027-c27e-41bb-a565-75583054****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11fd0027-c27e-41bb-a565-75583054****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateASMGatewayImportedServicesResponse>\\n    <RequestId>11fd0027-c27e-41bb-a565-75583054****</RequestId>\\n</UpdateASMGatewayImportedServicesResponse>","errorExample":""}]',
            'title' => '更新ASM网关导入的服务信息',
        ],
        'UpdateIstioGatewayRoutes' => [
            'summary' => '调用UpdateIstioGatewayRoutes更新网关路由。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'GatewayRoute',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '网关路由信息。',
                        'type' => 'object',
                        'properties' => [
                            'RouteName' => [
                                'description' => '路由名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'reviews-v2-routes',
                            ],
                            'RouteType' => [
                                'description' => '路由类型，取值：`HTTP`、`TLS`、`TCP`。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'HTTP',
                            ],
                            'MatchRequest' => [
                                'description' => '路由匹配规则。',
                                'type' => 'object',
                                'properties' => [
                                    'URI' => [
                                        'description' => 'URI匹配规则。',
                                        'type' => 'object',
                                        'properties' => [
                                            'MatchingMode' => [
                                                'description' => '路由规则匹配模式。取值：'."\n"
                                                    ."\n"
                                                    .'- `exact`：精准匹配。'."\n"
                                                    .' '."\n"
                                                    .'- `prefix`：前缀匹配。'."\n"
                                                    ."\n"
                                                    .'- `regex`：正则匹配。'."\n",
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'prefix',
                                            ],
                                            'MatchingContent' => [
                                                'description' => '用于匹配的内容。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/ratings/v2/',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Headers' => [
                                        'description' => '用于判断是否匹配的请求头部列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用于判断是否匹配的请求头部。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => 'Header匹配的键。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'x-request-id',
                                                ],
                                                'MatchingMode' => [
                                                    'description' => 'Header值匹配方式，取值：'."\n"
                                                        .'- `exact`：精准匹配。'."\n"
                                                        .' '."\n"
                                                        .'- `prefix`：前缀匹配。'."\n"
                                                        ."\n"
                                                        .'- `regex`：正则匹配。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'exact',
                                                ],
                                                'MatchingContent' => [
                                                    'description' => '用于Header匹配的内容。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'v1',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                    'TLSMatchAttributes' => [
                                        'description' => 'TLS连接匹配属性列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'TLS连接匹配属性。',
                                            'type' => 'object',
                                            'properties' => [
                                                'TLSPort' => [
                                                    'description' => 'TLS端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '443',
                                                ],
                                                'SNIHosts' => [
                                                    'description' => '服务器名称标识列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'SNI值中可以使用通配符前缀，例如`*.com`将匹配`foo.example.com`和`example.com`。'."\n"
                                                            ."\n"
                                                            .'> SNI值必须是相应虚拟服务主机的子集。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '*.com',
                                                    ],
                                                    'required' => false,
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                    'Ports' => [
                                        'description' => '端口列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '指定主机上要寻址的端口.。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '443',
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'RouteDestinations' => [
                                'description' => 'L4路由规则加权目的地列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'L4路由规则加权目的地。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Destination' => [
                                            'description' => 'Destination唯一标识请求或连接应转发到的服务实例。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Host' => [
                                                    'description' => '服务注册表中服务的名称。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'reviews',
                                                ],
                                                'Subset' => [
                                                    'description' => '服务中子集的名称。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'v1',
                                                ],
                                                'Port' => [
                                                    'description' => '目标服务的端口。 '."\n"
                                                        .'> 当路由的目标服务有只有一个端口时，该字段可以不填写。如果有多个端口，需要指明端口号。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Number' => [
                                                            'description' => '端口号',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'required' => false,
                                                            'example' => '80',
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'Weight' => [
                                            'description' => '服务子集权重。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '80',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'HTTPAdvancedOptions' => [
                                'description' => 'HTTP路由高级配置选项。',
                                'type' => 'object',
                                'properties' => [
                                    'HTTPRedirect' => [
                                        'description' => 'HTTP重定向。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Uri' => [
                                                'description' => '在重定向时，使用此值覆盖URL的路径部分。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/v1/getProductRatings',
                                            ],
                                            'Authority' => [
                                                'description' => '在重定向时，使用此值覆盖URL的Authority或Host部分',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'newratings.default.svc.cluster.local',
                                            ],
                                            'RedirectCode' => [
                                                'description' => '在重定向上，指定要在重定向响应中使用的HTTP状态代码。默认响应代码为301。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '301',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Delegate' => [
                                        'description' => '描述委托虚拟服务。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Name' => [
                                                'description' => '名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'reviews',
                                            ],
                                            'Namespace' => [
                                                'description' => '命名空间。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'default',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Rewrite' => [
                                        'description' => '重写虚拟服务。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Uri' => [
                                                'description' => '用这个值重写URI的路径（或前缀）部分。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/v1/getProductRatings',
                                            ],
                                            'Authority' => [
                                                'description' => '使用此值重写Authority或Host头。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'newratings.default.svc.cluster.local',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Timeout' => [
                                        'description' => '超时时长。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '5s',
                                    ],
                                    'Retries' => [
                                        'description' => '请求重试配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Attempts' => [
                                                'description' => '给定请求允许的重试次数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '3',
                                            ],
                                            'RetryOn' => [
                                                'description' => '用于指定重试是否应重试到其他位置的标志，例如`connect-failure,refused-stream,503`。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'connect-failure,refused-stream,503',
                                            ],
                                            'RetryRemoteLocalities' => [
                                                'description' => '用于指定重试是否应重试到其他位置的标志。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Value' => [
                                                        'description' => '用于指定重试是否应重试到其他位置的标志，取值：'."\n"
                                                            ."\n"
                                                            .'- `true`：其他位置也重试'."\n"
                                                            ."\n"
                                                            .'- `false`：其他位置不重试'."\n"
                                                            ."\n"
                                                            .'默认`false`。',
                                                        'type' => 'boolean',
                                                        'required' => false,
                                                        'example' => 'false',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'PerTryTimeout' => [
                                                'description' => '请求的每次尝试超时时间。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '2s',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Fault' => [
                                        'description' => '故障注入设置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Delay' => [
                                                'description' => '设置延迟。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'FixedDelay' => [
                                                        'description' => '固定延迟时间。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '5s',
                                                    ],
                                                    'Percentage' => [
                                                        'description' => '将注入延迟的请求的百分比。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Value' => [
                                                                'description' => '将注入延迟的请求的百分比，用小数表示。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'required' => false,
                                                                'example' => '0.1',
                                                            ],
                                                        ],
                                                        'required' => false,
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'Abort' => [
                                                'description' => '提前中止带有预先指定的错误码的请求。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'HttpStatus' => [
                                                        'description' => 'HTTP状态码。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'example' => '400',
                                                    ],
                                                    'Percentage' => [
                                                        'description' => '使用提供的错误码中止的请求的百分比。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Value' => [
                                                                'description' => '使用提供的错误码中止的请求的百分比，用小数表示。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'required' => false,
                                                                'example' => '0.1',
                                                            ],
                                                        ],
                                                        'required' => false,
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'Mirror' => [
                                        'description' => '除了将请求转发到预期目标之外，还将HTTP通信镜像到另一个目标。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Host' => [
                                                'description' => '服务注册表中服务的名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'reviews.default.svc.cluster.local',
                                            ],
                                            'Subset' => [
                                                'description' => '服务中子集的名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'v1',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'MirrorPercentage' => [
                                        'description' => '流量镜像百分比。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Value' => [
                                                'description' => '流量镜像百分比，用小数表示。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                                'example' => '0.2',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Namespace' => [
                                'description' => '命名空间',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'default',
                            ],
                            'Domains' => [
                                'description' => '请求的域名列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '域名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test.asm.aliyun.com',
                                ],
                                'required' => false,
                            ],
                            'RawVSRoute' => [
                                'description' => '序列化为JSON的VirtualService原始YAML',
                                'type' => 'any',
                                'required' => false,
                                'example' => '{}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '路由优先级。整数，数字越小，优先级越高。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关路由状态，取值：'."\n"
                            ."\n"
                            .'- `0`：在线。'."\n"
                            ."\n"
                            .'- `1`：下线。'."\n"
                            ."\n"
                            .'- `2`：创建或更新错误。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '路由描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo route',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateIstioGatewayRoutesResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n</UpdateIstioGatewayRoutesResponse>","errorExample":""}]',
            'title' => '更新网关路由',
        ],
        'UpdateIstioRouteAdditionalStatus' => [
            'summary' => '调用UpdateIstioRouteAdditionalStatus更新路由额外信息。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'RouteName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http-test',
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由优先级。整数类型，数字越小，优先级越高',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由状态。0表示在线，1表示下线，2表示创建或更新错误',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo route',
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'ERR500',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateIstioRouteAdditionalStatusResponse>\\n    <RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n</UpdateIstioRouteAdditionalStatusResponse>","errorExample":""}]',
            'title' => '更新路由额外信息',
        ],
        'DescribeImportedServicesDetail' => [
            'summary' => '调用DescribeImportedServicesDetail获取ASM网关已导入服务的详细信息。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'ASMGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'ServiceNamespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务所在命名空间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应内容',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E0496204-7586-5B4C-B364-2361CC0EDxxxx',
                            ],
                            'Details' => [
                                'description' => '服务详细信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务相信信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'ServiceName' => [
                                            'description' => '服务名称',
                                            'type' => 'string',
                                            'example' => 'productpage',
                                        ],
                                        'Namespace' => [
                                            'description' => '服务所在命名空间',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'Labels' => [
                                            'description' => '标签列表',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'description' => '服务定义的相关标签信息',
                                                'example' => 'app: productpage',
                                            ],
                                        ],
                                        'ClusterIds' => [
                                            'description' => '数据面集群列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '服务所在的集群ID',
                                                'type' => 'string',
                                                'example' => 'c7894c929677643a5bfe1a732d778****',
                                            ],
                                        ],
                                        'ServiceType' => [
                                            'description' => '服务类型',
                                            'type' => 'string',
                                            'example' => 'Kubernetes',
                                        ],
                                        'Ports' => [
                                            'description' => '服务声明的端口列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '端口信息列表',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '端口名称',
                                                        'type' => 'string',
                                                        'example' => 'http-0',
                                                    ],
                                                    'Protocol' => [
                                                        'description' => '端口对应协议',
                                                        'type' => 'string',
                                                        'example' => 'tcp',
                                                    ],
                                                    'Port' => [
                                                        'description' => '端口',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '80',
                                                    ],
                                                    'TargetPort' => [
                                                        'description' => '容器端口',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '8080',
                                                    ],
                                                    'NodePort' => [
                                                        'description' => '节点端口',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '12345',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E0496204-7586-5B4C-B364-2361CC0EDxxxx\\",\\n  \\"Details\\": [\\n    {\\n      \\"ServiceName\\": \\"productpage\\",\\n      \\"Namespace\\": \\"default\\",\\n      \\"Labels\\": {\\n        \\"key\\": \\"app: productpage\\"\\n      },\\n      \\"ClusterIds\\": [\\n        \\"c7894c929677643a5bfe1a732d778****\\"\\n      ],\\n      \\"ServiceType\\": \\"Kubernetes\\",\\n      \\"Ports\\": [\\n        {\\n          \\"Name\\": \\"http-0\\",\\n          \\"Protocol\\": \\"tcp\\",\\n          \\"Port\\": 80,\\n          \\"TargetPort\\": 8080,\\n          \\"NodePort\\": 12345\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeImportedServicesDetailResponse>\\n    <RequestId>E0496204-7586-5B4C-B364-2361CC0EDxxxx</RequestId>\\n    <Details>\\n        <ServiceName>productpage</ServiceName>\\n        <Namespace>default</Namespace>\\n        <Labels>\\n            <key>app: productpage</key>\\n        </Labels>\\n        <ClusterIds>c7894c929677643a5bfe1a732d778****</ClusterIds>\\n        <ServiceType>Kuberntes</ServiceType>\\n        <Ports>\\n            <Name>http-0</Name>\\n            <Protocol>tcp</Protocol>\\n            <Port>80</Port>\\n            <TargetPort>8080</TargetPort>\\n            <NodePort>12345</NodePort>\\n        </Ports>\\n    </Details>\\n</DescribeImportedServicesDetailResponse>","errorExample":""}]',
            'title' => '获取ASM网关已导入服务的详细信息',
        ],
        'DescribeASMGatewayImportedServices' => [
            'summary' => '调用DescribeASMGatewayImportedServices获取ASM网关已导入的服务信息。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'ASMGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'ServiceNamespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务所在命名空间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '11fd0027-c27e-41bb-a565-75583054****',
                            ],
                            'ImportedServices' => [
                                'description' => '导入的服务列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'ServiceName' => [
                                            'description' => '服务名称',
                                            'type' => 'string',
                                            'example' => 'productpage',
                                        ],
                                        'ServiceNamespace' => [
                                            'description' => '服务所在命名空间',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11fd0027-c27e-41bb-a565-75583054****\\",\\n  \\"ImportedServices\\": [\\n    {\\n      \\"ServiceName\\": \\"productpage\\",\\n      \\"ServiceNamespace\\": \\"default\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeASMGatewayImportedServicesResponse>\\n    <RequestId>E0496204-7586-5B4C-B364-2361CC0Exxxx</RequestId>\\n    <ImportedServices>\\n        <ServiceName>productpage</ServiceName>\\n        <ServiceNamespace>default</ServiceNamespace>\\n    </ImportedServices>\\n</DescribeASMGatewayImportedServicesResponse>","errorExample":""}]',
            'title' => '获取ASM网关已导入的服务信息',
        ],
        'DescribeIstioGatewayRouteDetail' => [
            'summary' => '调用DescribeIstioGatewayRouteDetail查看网关路由详情。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'RouteName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '路由名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-route',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应内容。',
                        'type' => 'object',
                        'properties' => [
                            'RouteDetail' => [
                                'description' => '路由详情',
                                'type' => 'object',
                                'properties' => [
                                    'RouteName' => [
                                        'description' => '路由名称。',
                                        'type' => 'string',
                                        'example' => 'demo-route',
                                    ],
                                    'RouteType' => [
                                        'description' => '路由类型，取值`HTTP`、`TLS`、`TCP`。',
                                        'type' => 'string',
                                        'example' => 'HTTP',
                                    ],
                                    'MatchRequest' => [
                                        'description' => '路由匹配规则。',
                                        'type' => 'object',
                                        'properties' => [
                                            'URI' => [
                                                'description' => 'URI匹配规则 。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'MatchingMode' => [
                                                        'description' => '路由规则匹配模式，取值：'."\n"
                                                            ."\n"
                                                            .'- `exact`：精准匹配。'."\n"
                                                            ."\n"
                                                            .'- `prefix`：前缀匹配。'."\n"
                                                            ."\n"
                                                            .'- `regex`：正则匹配。',
                                                        'type' => 'string',
                                                        'example' => 'prefix',
                                                    ],
                                                    'MatchingContent' => [
                                                        'description' => '用于匹配的内容。',
                                                        'type' => 'string',
                                                        'example' => '/ratings/v2/',
                                                    ],
                                                ],
                                            ],
                                            'Headers' => [
                                                'description' => '用于判断是否匹配的请求头部列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '用于判断是否匹配的请求头部。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Name' => [
                                                            'description' => 'Header匹配的键。',
                                                            'type' => 'string',
                                                            'example' => 'x-request-id',
                                                        ],
                                                        'MatchingMode' => [
                                                            'description' => 'Header值匹配方式，取值：'."\n"
                                                                .'- `exact`：精准匹配。'."\n"
                                                                ."\n"
                                                                .'- `prefix`：前缀匹配。'."\n"
                                                                ."\n"
                                                                .'- `regex`：正则匹配。',
                                                            'type' => 'string',
                                                            'example' => 'exact',
                                                        ],
                                                        'MatchingContent' => [
                                                            'description' => '用于Header匹配的内容。',
                                                            'type' => 'string',
                                                            'example' => 'v1',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'TLSMatchAttributes' => [
                                                'description' => 'TLS连接匹配属性列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'TLS连接匹配属性。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TLSPort' => [
                                                            'description' => 'TLS端口。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '443',
                                                        ],
                                                        'SNIHosts' => [
                                                            'description' => '服务器名称标识列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'SNI值中可以使用通配符前缀，例如`*.com`将匹配`foo.example.com`和`example.com`。'."\n"
                                                                    ."\n"
                                                                    .'> SNI值必须是相应虚拟服务主机的子集。',
                                                                'type' => 'string',
                                                                'example' => '*.com',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Ports' => [
                                                'description' => '端口列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '指定主机上要寻址的端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '443',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'HTTPAdvancedOptions' => [
                                        'description' => 'HTTP路由高级配置选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'HTTPRedirect' => [
                                                'description' => 'HTTP重定向。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Uri' => [
                                                        'description' => '在重定向时，使用此值覆盖URL的路径部分。',
                                                        'type' => 'string',
                                                        'example' => '/v1/getProductRatings',
                                                    ],
                                                    'Authority' => [
                                                        'description' => '在重定向时，使用此值覆盖URL的Authority或Host部分。',
                                                        'type' => 'string',
                                                        'example' => 'newratings.default.svc.cluster.local',
                                                    ],
                                                    'RedirectCode' => [
                                                        'description' => '在重定向上，指定要在重定向响应中使用的HTTP状态代码。默认响应代码为301。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '301',
                                                    ],
                                                ],
                                            ],
                                            'Delegate' => [
                                                'description' => '虚拟服务流量代理。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '名称。',
                                                        'type' => 'string',
                                                        'example' => 'reviews',
                                                    ],
                                                    'Namespace' => [
                                                        'description' => '命名空间。',
                                                        'type' => 'string',
                                                        'example' => 'default',
                                                    ],
                                                ],
                                            ],
                                            'Rewrite' => [
                                                'description' => '重写虚拟服务。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Uri' => [
                                                        'description' => '用这个值重写URI的路径（或前缀）部分。',
                                                        'type' => 'string',
                                                        'example' => '/v1/getProductRatings',
                                                    ],
                                                    'Authority' => [
                                                        'description' => '使用此值重写Authority或Host头。',
                                                        'type' => 'string',
                                                        'example' => 'newratings.default.svc.cluster.local',
                                                    ],
                                                ],
                                            ],
                                            'Timeout' => [
                                                'description' => '超时时长。',
                                                'type' => 'string',
                                                'example' => '5s',
                                            ],
                                            'Retries' => [
                                                'description' => '请求重试配置。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Attempts' => [
                                                        'description' => '给定请求允许的重试次数。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '3',
                                                    ],
                                                    'PerTryTimeout' => [
                                                        'description' => '请求的每次尝试超时时间。',
                                                        'type' => 'string',
                                                        'example' => '2s',
                                                    ],
                                                    'RetryOn' => [
                                                        'description' => '用于指定重试发生的条件，例如`connect-failure,refused-stream,503`。',
                                                        'type' => 'string',
                                                        'example' => 'connect-failure,refused-stream,503',
                                                    ],
                                                    'RetryRemoteLocalities' => [
                                                        'description' => '用于指定重试是否应重试到其他位置的标志。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Value' => [
                                                                'description' => '用于指定重试是否应重试到其他位置的标志，取值：'."\n"
                                                                    ."\n"
                                                                    .'- `true`：其他位置也重试'."\n"
                                                                    ."\n"
                                                                    .'- `false`：其他位置不重试'."\n"
                                                                    ."\n"
                                                                    .'默认`false`。',
                                                                'type' => 'boolean',
                                                                'example' => 'false',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Fault' => [
                                                'description' => '故障注入设置。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Delay' => [
                                                        'description' => '设置延迟。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'FixedDelay' => [
                                                                'description' => '固定延迟时间。',
                                                                'type' => 'string',
                                                                'example' => '5s',
                                                            ],
                                                            'ExponentialDelay' => [
                                                                'description' => '指数型延迟等待时间，等待时间为2的x次方，x为输入参数。',
                                                                'type' => 'string',
                                                                'example' => '3',
                                                            ],
                                                            'Percentage' => [
                                                                'description' => '将注入延迟的请求的百分比。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Value' => [
                                                                        'description' => '使用提供的错误码中止的请求的百分比，用小数表示。',
                                                                        'type' => 'number',
                                                                        'format' => 'float',
                                                                        'example' => '0.1',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'Abort' => [
                                                        'description' => '提前中止带有预先指定的错误码的请求。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'HttpStatus' => [
                                                                'description' => 'HTTP状态码。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '400',
                                                            ],
                                                            'Percentage' => [
                                                                'description' => '使用提供的错误码中止的请求的百分比。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Value' => [
                                                                        'description' => '流量镜像百分比。用小数表示',
                                                                        'type' => 'number',
                                                                        'format' => 'float',
                                                                        'example' => '0.1',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Mirror' => [
                                                'description' => '除了将请求转发到预期目标之外，还将HTTP通信镜像到另一个目标。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Host' => [
                                                        'description' => '服务注册表中服务的名称。',
                                                        'type' => 'string',
                                                        'example' => 'reviews.default.svc.cluster.local',
                                                    ],
                                                    'Subset' => [
                                                        'description' => '服务中子集的名称',
                                                        'type' => 'string',
                                                        'example' => 'v1',
                                                    ],
                                                ],
                                            ],
                                            'MirrorPercentage' => [
                                                'description' => '使用提供的错误码中止的请求的百分比。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Value' => [
                                                        'description' => '使用提供的错误码中止的请求的百分比，用小数表示。',
                                                        'type' => 'number',
                                                        'format' => 'float',
                                                        'example' => '0.2',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'RouteDestinations' => [
                                        'description' => 'L4路由规则加权目的地列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'L4路由规则加权目的地。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Destination' => [
                                                    'description' => 'Destination唯一标识请求或连接应转发到的服务实例。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Host' => [
                                                            'description' => '服务注册表中服务的名称。',
                                                            'type' => 'string',
                                                            'example' => 'reviews',
                                                        ],
                                                        'Subset' => [
                                                            'description' => '服务中子集的名称。',
                                                            'type' => 'string',
                                                            'example' => 'v1',
                                                        ],
                                                        'Port' => [
                                                            'description' => '端口列表。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Number' => [
                                                                    'description' => '指定主机上要寻址的端口。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '443',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Weight' => [
                                                    'description' => '流量权重，范围：1~100。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '80',
                                                ],
                                                'Headers' => [
                                                    'description' => '用于判断是否匹配的请求头部列表。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Request' => [
                                                            'description' => '用于判断是否匹配的请求头部。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Set' => [
                                                                    'description' => '用给定值覆盖键指定的Header。',
                                                                    'type' => 'object',
                                                                    'additionalProperties' => [
                                                                        'type' => 'string',
                                                                        'description' => '输入Value值覆盖键Header。',
                                                                        'example' => 'key',
                                                                    ],
                                                                ],
                                                                'Add' => [
                                                                    'description' => '添加值到Header中。',
                                                                    'type' => 'object',
                                                                    'example' => 'key',
                                                                ],
                                                                'Remove' => [
                                                                    'description' => '删除Header中的值。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '输入要删除的Key。',
                                                                        'type' => 'string',
                                                                        'example' => 'key',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Response' => [
                                                            'description' => '返回响应前做的处理。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Set' => [
                                                                    'description' => '用给定值覆盖键指定的Header。',
                                                                    'type' => 'object',
                                                                    'example' => 'key',
                                                                ],
                                                                'Add' => [
                                                                    'description' => '添加值到Header中。',
                                                                    'type' => 'object',
                                                                    'example' => 'key',
                                                                ],
                                                                'Remove' => [
                                                                    'description' => '删除Header中的值。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '输入要删除的Key。',
                                                                        'type' => 'string',
                                                                        'example' => 'key',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Domains' => [
                                        'description' => '匹配的请求域名列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '匹配的请求域名',
                                            'type' => 'string',
                                            'example' => 'test.asm.aliyun.com',
                                        ],
                                    ],
                                    'RawVSRoute' => [
                                        'description' => '序列化为JSON的VirtualService原始YAML',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'HasUnsafeFeatures' => [
                                        'description' => '如果为True，说明原始YAML中包含有当前界面上不支持的特性。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'Priority' => [
                                'description' => '路由优先级。整数，数字越小，优先级越高。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Status' => [
                                'description' => '网关路由状态，取值：'."\n"
                                    ."\n"
                                    .'- `0`：在线。'."\n"
                                    ."\n"
                                    .'- `1`：下线。'."\n"
                                    ."\n"
                                    .'- `2`：创建或更新错误。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Description' => [
                                'description' => '路由描述。',
                                'type' => 'string',
                                'example' => 'demo route',
                            ],
                            'Namespace' => [
                                'description' => '命名空间',
                                'type' => 'string',
                                'example' => 'default',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'ERR500',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RouteDetail\\": {\\n    \\"RouteName\\": \\"demo-route\\",\\n    \\"RouteType\\": \\"HTTP\\",\\n    \\"MatchRequest\\": {\\n      \\"URI\\": {\\n        \\"MatchingMode\\": \\"prefix\\",\\n        \\"MatchingContent\\": \\"/ratings/v2/\\"\\n      },\\n      \\"Headers\\": [\\n        {\\n          \\"Name\\": \\"x-request-id\\",\\n          \\"MatchingMode\\": \\"exact\\",\\n          \\"MatchingContent\\": \\"v1\\"\\n        }\\n      ],\\n      \\"TLSMatchAttributes\\": [\\n        {\\n          \\"TLSPort\\": 443,\\n          \\"SNIHosts\\": [\\n            \\"*.com\\"\\n          ]\\n        }\\n      ],\\n      \\"Ports\\": [\\n        443\\n      ]\\n    },\\n    \\"HTTPAdvancedOptions\\": {\\n      \\"HTTPRedirect\\": {\\n        \\"Uri\\": \\"/v1/getProductRatings\\",\\n        \\"Authority\\": \\"newratings.default.svc.cluster.local\\",\\n        \\"RedirectCode\\": 301\\n      },\\n      \\"Delegate\\": {\\n        \\"Name\\": \\"reviews\\",\\n        \\"Namespace\\": \\"default\\"\\n      },\\n      \\"Rewrite\\": {\\n        \\"Uri\\": \\"/v1/getProductRatings\\",\\n        \\"Authority\\": \\"newratings.default.svc.cluster.local\\"\\n      },\\n      \\"Timeout\\": \\"5s\\",\\n      \\"Retries\\": {\\n        \\"Attempts\\": 3,\\n        \\"PerTryTimeout\\": \\"2s\\",\\n        \\"RetryOn\\": \\"connect-failure,refused-stream,503\\",\\n        \\"RetryRemoteLocalities\\": {\\n          \\"Value\\": false\\n        }\\n      },\\n      \\"Fault\\": {\\n        \\"Delay\\": {\\n          \\"FixedDelay\\": \\"5s\\",\\n          \\"ExponentialDelay\\": \\"3\\",\\n          \\"Percentage\\": {\\n            \\"Value\\": 0.1\\n          }\\n        },\\n        \\"Abort\\": {\\n          \\"HttpStatus\\": 400,\\n          \\"Percentage\\": {\\n            \\"Value\\": 0.1\\n          }\\n        }\\n      },\\n      \\"Mirror\\": {\\n        \\"Host\\": \\"reviews.default.svc.cluster.local\\",\\n        \\"Subset\\": \\"v1\\"\\n      },\\n      \\"MirrorPercentage\\": {\\n        \\"Value\\": 0.2\\n      }\\n    },\\n    \\"RouteDestinations\\": [\\n      {\\n        \\"Destination\\": {\\n          \\"Host\\": \\"reviews\\",\\n          \\"Subset\\": \\"v1\\",\\n          \\"Port\\": {\\n            \\"Number\\": 443\\n          }\\n        },\\n        \\"Weight\\": 80,\\n        \\"Headers\\": {\\n          \\"Request\\": {\\n            \\"Set\\": {\\n              \\"key\\": \\"key\\"\\n            },\\n            \\"Add\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            },\\n            \\"Remove\\": [\\n              \\"key\\"\\n            ]\\n          },\\n          \\"Response\\": {\\n            \\"Set\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            },\\n            \\"Add\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            },\\n            \\"Remove\\": [\\n              \\"key\\"\\n            ]\\n          }\\n        }\\n      }\\n    ],\\n    \\"Domains\\": [\\n      \\"test.asm.aliyun.com\\"\\n    ],\\n    \\"RawVSRoute\\": \\"{}\\",\\n    \\"HasUnsafeFeatures\\": true\\n  },\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"Priority\\": 1,\\n  \\"Status\\": 1,\\n  \\"Description\\": \\"demo route\\",\\n  \\"Namespace\\": \\"default\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeIstioGatewayRouteDetailResponse>\\n    <RouteDetail>\\n        <RouteName>demo-route</RouteName>\\n        <RouteType>HTTP</RouteType>\\n        <MatchRequest>\\n            <URI>\\n                <MatchingMode>prefix</MatchingMode>\\n                <MatchingContent>/ratings/v2/</MatchingContent>\\n            </URI>\\n            <Headers>\\n                <Name>x-request-id</Name>\\n                <MatchingMode>exact</MatchingMode>\\n                <MatchingContent>v1</MatchingContent>\\n            </Headers>\\n            <TLSMatchAttributes>\\n                <TLSPort>443</TLSPort>\\n                <SNIHosts>*.com</SNIHosts>\\n            </TLSMatchAttributes>\\n            <Ports>443</Ports>\\n        </MatchRequest>\\n        <HTTPAdvancedOptions>\\n            <HTTPRedirect>\\n                <Uri>/v1/getProductRatings</Uri>\\n                <Authority>newratings.default.svc.cluster.local</Authority>\\n                <RedirectCode>301</RedirectCode>\\n            </HTTPRedirect>\\n            <Delegate>\\n                <Name>reviews</Name>\\n                <Namespace>default</Namespace>\\n            </Delegate>\\n            <Rewrite>\\n                <Uri>/v1/getProductRatings</Uri>\\n                <Authority>newratings.default.svc.cluster.local</Authority>\\n            </Rewrite>\\n            <Timeout>5s</Timeout>\\n            <Retries>\\n                <Attempts>3</Attempts>\\n                <PerTryTimeout>2s</PerTryTimeout>\\n                <RetryOn>connect-failure,refused-stream,503</RetryOn>\\n                <RetryRemoteLocalities>\\n                    <Value>false</Value>\\n                </RetryRemoteLocalities>\\n            </Retries>\\n            <Fault>\\n                <Delay>\\n                    <FixedDelay>5s</FixedDelay>\\n                    <ExponentialDelay>3</ExponentialDelay>\\n                    <Percentage>\\n                        <Value>0.1</Value>\\n                    </Percentage>\\n                </Delay>\\n                <Abort>\\n                    <HttpStatus>400</HttpStatus>\\n                    <Percentage>\\n                        <Value>0.1</Value>\\n                    </Percentage>\\n                </Abort>\\n            </Fault>\\n            <Mirror>\\n                <Host>reviews.default.svc.cluster.local</Host>\\n                <Subset>v1</Subset>\\n            </Mirror>\\n            <MirrorPercentage>\\n                <Value>0.2</Value>\\n            </MirrorPercentage>\\n        </HTTPAdvancedOptions>\\n        <RouteDestinations>\\n            <Destination>\\n                <Host>reviews</Host>\\n                <Subset>v1</Subset>\\n                <Port>\\n                    <Number>443</Number>\\n                </Port>\\n            </Destination>\\n            <Weight>80</Weight>\\n            <Headers>\\n                <Request>\\n                    <Set>\\n                        <key>key</key>\\n                    </Set>\\n                    <Remove>key</Remove>\\n                </Request>\\n                <Response>\\n                    <Remove>key</Remove>\\n                </Response>\\n            </Headers>\\n        </RouteDestinations>\\n    </RouteDetail>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <Priority>1</Priority>\\n    <Status>1</Status>\\n    <Description>demo route</Description>\\n</DescribeIstioGatewayRouteDetailResponse>","errorExample":""}]',
            'title' => '查看网关路由详情',
        ],
        'DescribeGatewaySecretDetails' => [
            'summary' => '调用DescribeGatewaySecretDetails查询网关证书密钥详细信息。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'GatewaySecretDetails' => [
                                'description' => '网关证书密钥详细信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '网关证书密钥详细信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'IssueTime' => [
                                            'description' => '证书颁发时间。',
                                            'type' => 'string',
                                            'example' => '2022-03-03 07:45',
                                        ],
                                        'ExpiredTime' => [
                                            'description' => '证书过期时间。',
                                            'type' => 'string',
                                            'example' => '2023-03-03 07:45',
                                        ],
                                        'GatewayName' => [
                                            'description' => '网关名称。',
                                            'type' => 'string',
                                            'example' => 'bookinfo-gateway',
                                        ],
                                        'State' => [
                                            'description' => '证书状态，取值：'."\n"
                                                ."\n"
                                                .'- `normal`：网关状态正常。'."\n"
                                                ."\n"
                                                .'- `abnormal`：网关状态异常。',
                                            'type' => 'string',
                                            'example' => 'normal',
                                        ],
                                        'Message' => [
                                            'description' => '- 当网关状态异常时描述了异常的原因，例如`tls.crt not exist`、`tls.key not exist`、`secret type must be kubernetes.io/tls`。'."\n"
                                                ."\n"
                                                .'- 当网关正常时，则为空。',
                                            'type' => 'string',
                                            'example' => 'tls.crt not exist',
                                        ],
                                        'SNI' => [
                                            'description' => '服务名称标识。',
                                            'type' => 'string',
                                            'example' => 'demo.com',
                                        ],
                                        'SecretName' => [
                                            'description' => '密钥名称。',
                                            'type' => 'string',
                                            'example' => 'demo-secret',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"GatewaySecretDetails\\": [\\n    {\\n      \\"IssueTime\\": \\"2022-03-03 07:45\\",\\n      \\"ExpiredTime\\": \\"2023-03-03 07:45\\",\\n      \\"GatewayName\\": \\"bookinfo-gateway\\",\\n      \\"State\\": \\"normal\\",\\n      \\"Message\\": \\"tls.crt not exist\\",\\n      \\"SNI\\": \\"demo.com\\",\\n      \\"SecretName\\": \\"demo-secret\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeGatewaySecretDetailsResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <GatewaySecretDetails>\\n        <IssueTime>2022-03-03 07:45</IssueTime>\\n        <ExpiredTime>2023-03-03 07:45</ExpiredTime>\\n        <GatewayName>bookinfo-gateway</GatewayName>\\n        <State>normal</State>\\n        <Message>tls.crt not exist</Message>\\n        <SNI>demo.com</SNI>\\n        <SecretName>demo-secret</SecretName>\\n    </GatewaySecretDetails>\\n</DescribeGatewaySecretDetailsResponse>","errorExample":""}]',
            'title' => '查询网关证书密钥详细信息',
        ],
        'DescribeIstioGatewayDomains' => [
            'summary' => '调用DescribeIstioGatewayDomains查询网关域名列表。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '查询的网关资源数目上限。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'GatewaySecretDetails' => [
                                'description' => '网关域名详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '网关域名详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Domains' => [
                                            'description' => '域名列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '域名。',
                                                'type' => 'string',
                                                'example' => 'example.com',
                                            ],
                                        ],
                                        'Protocol' => [
                                            'description' => '协议，取值：`HTTP`、` HTTPS`、`GRPC`、`HTTP2` 、 `MONGO` 、` TCP`、 `TLS`。',
                                            'type' => 'string',
                                            'example' => 'HTTPS',
                                        ],
                                        'CredentialName' => [
                                            'description' => '包含TLS证书、CA证书的密钥名称。',
                                            'type' => 'string',
                                            'example' => 'bookinfo-secret',
                                        ],
                                        'Detail' => [
                                            'description' => 'JSON格式的信息详情。',
                                            'type' => 'string',
                                            'example' => '{   "servers": [     {       "port": {         "number": 27018,         "name": "mongo",         "protocol": "MONGO"       },       "hosts": [         "*"       ]     }   ] }',
                                        ],
                                        'PortName' => [
                                            'description' => '端口名称。',
                                            'type' => 'string',
                                            'example' => 'https-demo',
                                        ],
                                        'Namespace' => [
                                            'description' => '命名空间。',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'GatewayCRName' => [
                                            'description' => 'gateway CR 的名称',
                                            'type' => 'string',
                                            'example' => 'ingressgateway',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"GatewaySecretDetails\\": [\\n    {\\n      \\"Domains\\": [\\n        \\"example.com\\"\\n      ],\\n      \\"Protocol\\": \\"HTTPS\\",\\n      \\"CredentialName\\": \\"bookinfo-secret\\",\\n      \\"Detail\\": \\"{   \\\\\\"servers\\\\\\": [     {       \\\\\\"port\\\\\\": {         \\\\\\"number\\\\\\": 27018,         \\\\\\"name\\\\\\": \\\\\\"mongo\\\\\\",         \\\\\\"protocol\\\\\\": \\\\\\"MONGO\\\\\\"       },       \\\\\\"hosts\\\\\\": [         \\\\\\"*\\\\\\"       ]     }   ] }\\",\\n      \\"PortName\\": \\"https-demo\\",\\n      \\"Namespace\\": \\"default\\",\\n      \\"GatewayCRName\\": \\"ingressgateway\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeIstioGatewayDomainsResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <GatewaySecretDetails>\\n        <Domains>example.com</Domains>\\n        <Protocol>HTTPS</Protocol>\\n        <CredentialName>bookinfo-secret</CredentialName>\\n        <Detail>{   \\"servers\\": [     {       \\"port\\": {         \\"number\\": 27018,         \\"name\\": \\"mongo\\",         \\"protocol\\": \\"MONGO\\"       },       \\"hosts\\": [         \\"*\\"       ]     }   ] }</Detail>\\n        <PortName>https-demo</PortName>\\n        <Namespace>default</Namespace>\\n        <GatewayCRName>ingressgateway</GatewayCRName>\\n    </GatewaySecretDetails>\\n</DescribeIstioGatewayDomainsResponse>","errorExample":""}]',
            'title' => '查询网关域名列表',
        ],
        'DescribeIstioGatewayRoutes' => [
            'summary' => '调用DescribeIstioGatewayRoutes查询ASM网关的路由列表。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'IstioGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体。',
                        'type' => 'object',
                        'properties' => [
                            'ManagementRoutes' => [
                                'description' => '路由列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '路由信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ASMGatewayName' => [
                                            'description' => 'ASM网关名称。',
                                            'type' => 'string',
                                            'example' => 'ingressgateway',
                                        ],
                                        'RouteName' => [
                                            'description' => '路由名称。',
                                            'type' => 'string',
                                            'example' => 'http-route',
                                        ],
                                        'RoutePath' => [
                                            'description' => '路由请求路由。',
                                            'type' => 'string',
                                            'example' => '/reviews/v1',
                                        ],
                                        'Status' => [
                                            'description' => '网关路由状态，取值：'."\n"
                                                ."\n"
                                                .'- `0`：在线。'."\n"
                                                ."\n"
                                                .'- `1`：下线。'."\n"
                                                ."\n"
                                                .'- `2`：创建或更新错误。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Priority' => [
                                            'description' => '路由优先级。整数，数字越小，优先级越高。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Description' => [
                                            'description' => '路由描述',
                                            'type' => 'string',
                                            'example' => 'demo route',
                                        ],
                                        'Namespace' => [
                                            'description' => '命名空间。',
                                            'type' => 'string',
                                            'example' => 'istio-demo',
                                        ],
                                        'DestinationHost' => [
                                            'description' => '匹配的请求域名列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '请求域名',
                                                'type' => 'string',
                                                'example' => 'test.asm.aliyun.com',
                                            ],
                                        ],
                                        'DestinationSubSet' => [
                                            'description' => '目标服务子集的列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '目标服务子集',
                                                'type' => 'string',
                                                'example' => 'v1',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'ERR500',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ManagementRoutes\\": [\\n    {\\n      \\"ASMGatewayName\\": \\"ingressgateway\\",\\n      \\"RouteName\\": \\"http-route\\",\\n      \\"RoutePath\\": \\"/reviews/v1\\",\\n      \\"Status\\": 1,\\n      \\"Priority\\": 1,\\n      \\"Description\\": \\"demo route\\",\\n      \\"Namespace\\": \\"istio-demo\\",\\n      \\"DestinationHost\\": [\\n        \\"test.asm.aliyun.com\\"\\n      ],\\n      \\"DestinationSubSet\\": [\\n        \\"v1\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeIstioGatewayRoutesResponse>\\n    <ManagementRoutes>\\n        <ASMGatewayName>ingressgateway</ASMGatewayName>\\n        <RouteName>http-route</RouteName>\\n        <RoutePath>/reviews/v1</RoutePath>\\n        <Status>1</Status>\\n        <Priority>1</Priority>\\n        <Description>demo route</Description>\\n    </ManagementRoutes>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n</DescribeIstioGatewayRoutesResponse>","errorExample":""}]',
            'title' => '查询ASM网关的路由列表',
        ],
        'DescribeClusterGrafana' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'K8sClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据面集群ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ce3c25e247da24f3aab9b7edfae83****',
                    ],
                ],
                [
                    'name' => 'ReAddPrometheusIntegration',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '是否为数据面集群重新集成Prometheus',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'false',
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'Dashboards' => [
                                'description' => 'Grafana报表信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Url' => [
                                            'description' => 'Grafana报表的访问地址',
                                            'type' => 'string',
                                            'example' => 'test.com',
                                        ],
                                        'Title' => [
                                            'description' => '报表标题',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"Dashboards\\": [\\n    {\\n      \\"Url\\": \\"test.com\\",\\n      \\"Title\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n<Dashboards>\\n    <Title>test</Title>\\n    <Url>test.com</Url>\\n</Dashboards>","errorExample":""}]',
            'title' => '获取集群的Grafana报表信息',
            'summary' => '调用DescribeClusterGrafana获取服务网格内集群的Grafana报表信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeClusterPrometheus' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'K8sClusterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据面集群ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ce3c25e247da24f3aab9b7edfae83****',
                    ],
                ],
                [
                    'name' => 'K8sClusterRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据面集群所在地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'Prometheus' => [
                                'description' => 'Prometheus公网地址',
                                'type' => 'string',
                                'example' => 'p.com',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Prometheus\\": \\"p.com\\",\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n<Prometheus>p.com</Prometheus>","errorExample":""}]',
            'title' => '获取集群的Prometheus公网地址',
            'summary' => '调用DescribeClusterPrometheus获取服务网格内集群的Prometheus公网地址。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeServiceMeshLogs' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ca04bc38979214bf2882be79d39b4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '网格日志记录',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                            'Logs' => [
                                'description' => '日志信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志',
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationTime' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2021-11-19T15:21:53+08:00',
                                        ],
                                        'ServiceMeshId' => [
                                            'description' => 'ASM实例ID',
                                            'type' => 'string',
                                            'example' => 'ca04bc38979214bf2882be79d39b4****',
                                        ],
                                        'Log' => [
                                            'description' => '日志文本',
                                            'type' => 'string',
                                            'example' => '[RequestID: 31d3a0f0-07ed-4f6e-9004-1804498c****, UID-110982038403****] c096d641835af4658827a4c66c234**** | Start to add cluster c186a6d9641a24098b5499d4d8313****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\",\\n  \\"Logs\\": [\\n    {\\n      \\"CreationTime\\": \\"2021-11-19T15:21:53+08:00\\",\\n      \\"ServiceMeshId\\": \\"ca04bc38979214bf2882be79d39b4****\\",\\n      \\"Log\\": \\"[RequestID: 31d3a0f0-07ed-4f6e-9004-1804498c****, UID-110982038403****] c096d641835af4658827a4c66c234**** | Start to add cluster c186a6d9641a24098b5499d4d8313****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeServiceMeshLogsResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n    <Logs>\\n        <CreationTime>2021-11-19T15:21:53+08:00</CreationTime>\\n        <ServiceMeshId>ca04bc38979214bf2882be79d39b4****</ServiceMeshId>\\n        <Log>[RequestID: 31d3a0f0-07ed-4f6e-9004-1804498c****, UID-110982038403****] c096d641835af4658827a4c66c234**** | Start to add cluster c186a6d9641a24098b5499d4d8313****</Log>\\n    </Logs>\\n</DescribeServiceMeshLogsResponse>","errorExample":""}]',
            'title' => '获取网格日志',
            'summary' => '调用DescribeServiceMeshLogs获取网格日志。',
        ],
        'DescribeGuestClusterAccessLogDashboards' => [
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
                    'name' => 'K8sClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据面集群ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ce3c25e247da24f3aab9b7edfae83****',
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'Dashboards' => [
                                'description' => '数据面集群的访问日志报表信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Url' => [
                                            'description' => '报表地址',
                                            'type' => 'string',
                                            'example' => 'test.com',
                                        ],
                                        'Title' => [
                                            'description' => '报表标题',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                            'K8sClusterId' => [
                                'description' => '数据面集群ID',
                                'type' => 'string',
                                'example' => 'ce3c25e247da24f3aab9b7edfae83****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"K8sClusterId\\": \\"ce3c25e247da24f3aab9b7edfae83****\\",\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"Dashboards\\": [\\n    {\\n      \\"Url\\": \\"test.com\\",\\n      \\"Title\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n<Dashboards>\\n    <Title>test</Title>\\n    <Url>test.com</Url>\\n</Dashboards>\\n<K8sClusterId>ce3c25e247da24f3aab9b7edfae83****</K8sClusterId>","errorExample":""}]',
            'title' => '获取数据面集群的访问日志报表',
            'summary' => '调用DescribeGuestClusterAccessLogDashboards获取数据面集群的访问日志报表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetGrafanaDashboardUrl' => [
            'summary' => '调用GetGrafanaDashboardUrl从ARMS获取Grafana仪表盘URL。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'K8sClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ACK或ASK集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c94ca2d27f7aa47ab84ed73e6f084****',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '仪表盘名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Cloud ASM Istio Http Gateway',
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
                                'example' => '76DBB8A0-5AA6-5A56-9A8A-****',
                            ],
                            'Dashboards' => [
                                'description' => '仪表盘信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Url' => [
                                            'description' => '仪表盘URL。',
                                            'type' => 'string',
                                            'example' => 'https://g.console.aliyun.com/d/181863583797****-14651340-200-2/alibaba-cloud-mesh-service?orgId=32****&refresh=60s',
                                        ],
                                        'Title' => [
                                            'description' => '仪表盘名称。',
                                            'type' => 'string',
                                            'example' => 'Cloud ASM Istio Http Gateway',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"76DBB8A0-5AA6-5A56-9A8A-****\\",\\n  \\"Dashboards\\": [\\n    {\\n      \\"Url\\": \\"https://g.console.aliyun.com/d/181863583797****-14651340-200-2/alibaba-cloud-mesh-service?orgId=32****&refresh=60s\\",\\n      \\"Title\\": \\"Cloud ASM Istio Http Gateway\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetGrafanaDashboardUrlResponse>\\n    <RequestId>76DBB8A0-5AA6-5A56-9A8A-****</RequestId>\\n    <Dashboards>\\n        <Url>https://g.console.aliyun.com/d/181863583797****-14651340-200-2/alibaba-cloud-mesh-service?orgId=32****&amp;refresh=60s</Url>\\n        <Title>Cloud ASM Istio Http Gateway</Title>\\n    </Dashboards>\\n</GetGrafanaDashboardUrlResponse>","errorExample":""}]',
            'title' => '从ARMS获取Grafana仪表盘URL',
        ],
        'UpgradeMeshVersion' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
                [
                    'name' => 'PreCheck',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否执行预检查。默认false。为true时，本次调用只会检查当前网格是否满足升级条件，并不会真正执行升级。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '11fd0027-c27e-41bb-a565-75583054****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11fd0027-c27e-41bb-a565-75583054****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeMeshVersionResponse>\\n    <RequestId>17056026-31A7-1473-B6DA-XXXXXXXXXXXX</RequestId>\\n</UpgradeMeshVersionResponse>","errorExample":""}]',
            'title' => '升级服务网格的版本',
            'summary' => '调用UpgradeMeshVersion升级服务网格的版本。',
        ],
        'UpgradeMeshEditionPartially' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ca04bc38979214bf2882be79d39b4****',
                    ],
                ],
                [
                    'name' => 'SwitchToPro',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否切换为商业版（专业版），取值：'."\n"
                            ."\n"
                            .'- `true`：切换为商业版（专业版）'."\n"
                            ."\n"
                            .'- `false`：不切换为商业版（专业版）'."\n"
                            ."\n",
                        'type' => 'boolean',
                        'deprecated' => true,
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ASMGatewayContinue',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '此次操作是否为ASM网关继续升级，取值：'."\n"
                            .'- `true`：升级ASM网关'."\n"
                            ."\n"
                            .'- `false`：不升级ASM网关'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'UpgradeGatewayRecords',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '选择升级的ASM网关列表。用逗号分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ingressgateway1,ingressgateway2',
                    ],
                ],
                [
                    'name' => 'ExpectedVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '期望升级到的版本，如果填写该字段，后端会检查计算出的目标升级版本是否和期望版本一致，如果一致才进行升级流程，如果不一致则会返回`UpgradedVersion.NotExpected`错误。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1.15.3.118-g4712daf0-aliyun',
                    ],
                ],
                [
                    'name' => 'PreCheck',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行升级检查。如果该值设置为true，则只会执行升级检查，并不会实际升级。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '31d3a0f0-07ed-4f6e-9004-1804498c****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"31d3a0f0-07ed-4f6e-9004-1804498c****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeMeshEditionPartiallyResponse>\\n    <RequestId>31d3a0f0-07ed-4f6e-9004-1804498c****</RequestId>\\n</UpgradeMeshEditionPartiallyResponse>","errorExample":""}]',
            'title' => '升级或切换ASM实例版本',
            'summary' => '调用UpgradeMeshEditionPartially升级ASM实例或者将ASM实例切换为专业版。',
        ],
        'DescribeUpgradeVersion' => [
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
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '升级状态',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '11fd0027-c27e-41bb-a565-75583054****',
                            ],
                            'Version' => [
                                'description' => '版本',
                                'type' => 'object',
                                'properties' => [
                                    'KubernetesVersion' => [
                                        'description' => 'Kubernetes版本',
                                        'type' => 'string',
                                        'example' => 'v1.24.6-aliyun.1',
                                    ],
                                    'IstioOperatorVersion' => [
                                        'description' => 'ASM实例版本',
                                        'type' => 'string',
                                        'example' => 'v1.17.2.42-gf7619883-aliyun',
                                    ],
                                    'IstioVersion' => [
                                        'description' => 'Istio版本',
                                        'type' => 'string',
                                        'example' => '1.17.2',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11fd0027-c27e-41bb-a565-75583054****\\",\\n  \\"Version\\": {\\n    \\"KubernetesVersion\\": \\"v1.24.6-aliyun.1\\",\\n    \\"IstioOperatorVersion\\": \\"v1.17.2.42-gf7619883-aliyun\\",\\n    \\"IstioVersion\\": \\"1.17.2\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeUpgradeVersionResponse>\\n    <RequestId>11fd0027-c27e-41bb-a565-75583054****</RequestId>\\n    <Version>\\n        <KubernetesVersion>1.20</KubernetesVersion>\\n        <IstioOperatorVersion>v1.10.5.34-g7689a219-aliyun</IstioOperatorVersion>\\n        <IstioVersion>1.10.5.34</IstioVersion>\\n    </Version>\\n</DescribeUpgradeVersionResponse>","errorExample":""}]',
            'title' => '获取服务网格的可更新版本信息',
            'summary' => '调用DescribeUpgradeVersion获取服务网格的可更新版本信息。',
        ],
        'DescribeServiceMeshUpgradeStatus' => [
            'summary' => '调用DescribeServiceMeshUpgradeStatus查询ASM实例和ASM网关的升级状态。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ASM实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '11fd0027-c27e-41bb-a565-75583054****',
                    ],
                ],
                [
                    'name' => 'GuestClusterIds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '加入ASM实例管控的数据面集群ID列表，使用逗号分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeac85a793c94afbbb0a4bb20320****',
                    ],
                ],
                [
                    'name' => 'AllIstioGatewayFullNames',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关的全限定名称列表。使用逗号分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'istio-system:ingressgateway1,istio-system:ingressgateway2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '升级状态',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '11fd0027-c27e-41bb-a565-75583054****',
                            ],
                            'UpgradeDetail' => [
                                'description' => '升级状态结果',
                                'type' => 'object',
                                'properties' => [
                                    'FinishedGatewaysNum' => [
                                        'description' => '升级完成的网关数目',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'MeshStatus' => [
                                        'description' => 'ASM实例状态，取值：'."\n"
                                            ."\n\n"
                                            .'- running：运行中'."\n"
                                            ."\n"
                                            .'- `upgrading`：升级中'."\n"
                                            ."\n"
                                            .'- `upgrading_failed`：升级失败',
                                        'type' => 'string',
                                        'example' => 'running',
                                    ],
                                    'TotalGatewaysNum' => [
                                        'description' => '所有的网关数目',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'GatewayStatusRecord' => [
                                        'description' => 'ASM网关状态记录',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'type' => 'string',
                                                    'description' => 'ASM网关升级状态。取值：'."\n"
                                                        ."\n"
                                                        .'- `upgrading`：升级中'."\n"
                                                        ."\n"
                                                        .'- `pending`：升级等待中'."\n"
                                                        ."\n"
                                                        .'- `finished`：升级已完成'."\n"
                                                        ."\n"
                                                        .'- `notStart`：升级未开始'."\n"
                                                        ."\n"
                                                        .'- `failed`：升级失败'."\n"
                                                        ."\n"
                                                        .'- `unknown`：其他状态',
                                                    'example' => 'upgrading',
                                                ],
                                                'Message' => [
                                                    'type' => 'string',
                                                    'example' => 'success',
                                                    'description' => 'ASM网关实例的额外状态信息',
                                                ],
                                                'Version' => [
                                                    'type' => 'string',
                                                    'example' => '1.9.7',
                                                    'description' => 'ASM网关版本',
                                                ],
                                            ],
                                            'description' => 'ASM网关状态',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'ERR404',
                        'errorMessage' => 'Not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"11fd0027-c27e-41bb-a565-75583054****\\",\\n  \\"UpgradeDetail\\": {\\n    \\"FinishedGatewaysNum\\": 1,\\n    \\"MeshStatus\\": \\"running\\",\\n    \\"TotalGatewaysNum\\": 2,\\n    \\"GatewayStatusRecord\\": {\\n      \\"key\\": {\\n        \\"Status\\": \\"upgrading\\",\\n        \\"Message\\": \\"success\\",\\n        \\"Version\\": \\"1.9.7\\"\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeServiceMeshUpgradeStatusResponse>\\n    <RequestId>11fd0027-c27e-41bb-a565-75583054****</RequestId>\\n    <UpgradeDetail>\\n        <FinishedGatewaysNum>1</FinishedGatewaysNum>\\n        <MeshStatus>running</MeshStatus>\\n        <TotalGatewaysNum>2</TotalGatewaysNum>\\n        <GatewayStatusRecord>\\n            <key>\\n                <Status>upgrading</Status>\\n                <Message>success</Message>\\n                <Version>1.9.7</Version>\\n            </key>\\n        </GatewayStatusRecord>\\n    </UpgradeDetail>\\n</DescribeServiceMeshUpgradeStatusResponse>","errorExample":""}]',
            'title' => '查询ASM的升级状态',
        ],
        'CreateSwimLane' => [
            'summary' => '调用CreateSwimLane创建泳道。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '*****',
                    ],
                ],
                [
                    'name' => 'SwimLaneName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's3',
                    ],
                ],
                [
                    'name' => 'LabelSelectorKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作负载对应的标签，目前固定为`ASM_TRAFFIC_TAG`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASM_TRAFFIC_TAG',
                    ],
                ],
                [
                    'name' => 'ServicesList',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道关联的服务列表，取值为JSON数组，单个服务格式为`$集群名称/$集群ID/$Namespace/$serviceName`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka\\",\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb\\",\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc\\"]',
                    ],
                ],
                [
                    'name' => 'LabelSelectorValue',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务工作负载对应的Label标签：`ASM_TRAFFIC_TAG`的取值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v3',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                                'example' => '*****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"*****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSwimLaneResponse>\\n    <RequestId>*****</RequestId>\\n</CreateSwimLaneResponse>","errorExample":""}]',
            'title' => '创建泳道',
        ],
        'CreateSwimLaneGroup' => [
            'summary' => '调用CreateSwimLaneGroup创建泳道组。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'ServicesList',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道组下关联的服务列表，取值为JSON数组。单个服务的格式为：` $集群名称/$集群id/$namespace/$serviceName`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka\\",\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb\\",\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc\\"]',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'IngressType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入口流量类型，目前仅支持ASM网关。'."\n"
                            ."\n\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ASM',
                    ],
                ],
                [
                    'name' => 'IngressGatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ASM网关名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ingressgateway',
                    ],
                ],
                [
                    'name' => 'IsPermissive',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建的流量泳道是否是宽松模式。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'TraceHeader',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '宽松模式泳道组的链路透传请求头。当IsPermissive参数为true时，此参数为必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my-request-id',
                    ],
                ],
                [
                    'name' => 'RouteHeader',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '宽松模式流量泳道组的引流请求头。当IsPermissive参数为true时，此参数为必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'x-asm-prefer-tag',
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
                                'example' => 'yyyy',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"yyyy\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSwimLaneGroupResponse>\\n    <RequestId>yyyy</RequestId>\\n</CreateSwimLaneGroupResponse>","errorExample":""}]',
            'title' => '创建泳道组',
        ],
        'DeleteSwimLane' => [
            'summary' => '调用DeleteSwimLane删除指定泳道。',
            'methods' => [
                'get',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'SwimLaneName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's1',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                                'example' => 'xxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"xxx\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSwimLaneResponse>\\n    <RequestId>xxx</RequestId>\\n</DeleteSwimLaneResponse>","errorExample":""}]',
            'title' => '删除指定泳道',
        ],
        'DeleteSwimLaneGroup' => [
            'summary' => '调用DeleteSwimLaneGroup删除指定泳道组。删除泳道组对应也会删除泳道组下的泳道和相关引流规则。',
            'methods' => [
                'get',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                                'example' => 'xxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"xxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSwimLaneGroupResponse>\\n    <RequestId>xxxx</RequestId>\\n</DeleteSwimLaneGroupResponse>","errorExample":""}]',
            'title' => '删除指定泳道组',
        ],
        'UpdateSwimLane' => [
            'summary' => '调用UpdateSwimLane更新指定泳道信息。',
            'methods' => [
                'get',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'ServicesList',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道关联的服务列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc"]',
                    ],
                ],
                [
                    'name' => 'SwimLaneName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's1',
                    ],
                ],
                [
                    'name' => 'LabelSelectorKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定为`ASM_TRAFFIC_TAG`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASM_TRAFFIC_TAG',
                    ],
                ],
                [
                    'name' => 'LabelSelectorValue',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '`ASM_TRAFFIC_TAG` Label对应的取值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                                'example' => 'yyy',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"yyy\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSwimLaneResponse>\\n    <RequestId>yyy</RequestId>\\n</UpdateSwimLaneResponse>","errorExample":""}]',
            'title' => '更新指定泳道信息',
        ],
        'UpdateSwimLaneGroup' => [
            'summary' => '调用UpdateSwimLaneGroup更新对应泳道组。',
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
                'abilityTreeCode' => '153457',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh22WM61',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'ServicesList',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道组关联的服务列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc"]',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'FallbackTarget',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '宽松模式泳道组的基线泳道名称。仅在泳道组为宽松模式时，设置此参数有效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's1',
                    ],
                ],
                [
                    'name' => 'IngressRoutingStrategy',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '为泳道组内的多个泳道进行请求引流的策略，有两种可能取值：'."\n"
                            .'* weighted：基于权重的引流策略，即首先以统一的规则对请求进行匹配，对匹配到的请求进行引流，引流时，按照给定的比例将所有请求发往不同的泳道。'."\n"
                            .'* rule-based：基于规则的引流策略，即泳道组中的每条泳道都拥有自己的匹配规则，只有匹配到泳道对应的引流规则的请求才会被转发到对应的泳道。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'weighted' => 'weighted',
                            'rule-based' => 'rule-based',
                        ],
                        'example' => 'weighted',
                    ],
                ],
                [
                    'name' => 'WeightedIngressRule',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当泳道组的引流策略为weighted时可以设定。作用于整个泳道组的引流规则，',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Domains":["*"],"MatchRequests":[{"URI":{"MatchingMode":"exact","MatchingContent":"/mock"},"Headers":[{"Name":"test","MatchingMode":"exact","MatchingContent":"yes"}]}]}',
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
                                'example' => 'yyy',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"yyy\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSwimLaneGroupResponse>\\n    <RequestId>yyy</RequestId>\\n</UpdateSwimLaneGroupResponse>","errorExample":""}]',
            'title' => '更新对应泳道组',
        ],
        'GetSwimLaneDetail' => [
            'summary' => '调用GetSwimLaneDetail获取指定泳道详细信息。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
                'abilityTreeCode' => '146478',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh22WM61',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'SwimLaneName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's1',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                                'example' => 'yyyy',
                            ],
                            'ServicesList' => [
                                'description' => '泳道关联的所有服务列表。',
                                'type' => 'string',
                                'example' => '["sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc"]',
                            ],
                            'LabelSelectorKey' => [
                                'description' => '固定为**ASM_TRAFFIC_TAG**。',
                                'type' => 'string',
                                'example' => 'ASM_TRAFFIC_TAG',
                            ],
                            'LabelSelectorValue' => [
                                'description' => 'ASM_TRAFFIC_TAG Label的取值。',
                                'type' => 'string',
                                'example' => 'v1',
                            ],
                            'IngressService' => [
                                'description' => '该字段已废弃。',
                                'type' => 'string',
                                'example' => 'mocka.default.svc.cluster.local',
                            ],
                            'IngressRule' => [
                                'description' => '引流规则，对应在ASM网关下自定义的一条或者多条路由。',
                                'type' => 'string',
                                'example' => '[{"Domains":["*"],"RouteName":"r1","MatchRequest":{"Headers":[{"Name":"x-asm-prefer-tag","MatchingMode":"exact","MatchingContent":"s1"}],"URI":{"MatchingMode":"exact","MatchingContent":"/mock"}},"RouteDestinations":[{"Destination":{"Host":"mocka.default.svc.cluster.local","Subset":"s1"}}]},{"Domains":["*"],"RouteName":"hello","MatchRequest":{"Headers":[{"Name":"x-asm-prefer-tag","MatchingMode":"exact","MatchingContent":"s1"}],"URI":{"MatchingMode":"exact","MatchingContent":"/mocktest"}},"RouteDestinations":[{"Destination":{"Host":"mocka.default.svc.cluster.local","Subset":"s1"}}]}]',
                            ],
                            'WeightedIngressDestination' => [
                                'description' => '当泳道对应的泳道组的引流策略为weighted时可以设定。此字段是一个JSON序列化的字符串，指定了在基于权重的路由策略下，每条泳道的入口服务域名以及对应的引流权重。',
                                'type' => 'string',
                                'example' => '{"RouteDestination":{"Host":"mocka.default.svc.cluster.local","Subset":"s1"},"Weight":40}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"yyyy\\",\\n  \\"ServicesList\\": \\"[\\\\\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka\\\\\\",\\\\\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb\\\\\\",\\\\\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc\\\\\\"]\\",\\n  \\"LabelSelectorKey\\": \\"ASM_TRAFFIC_TAG\\",\\n  \\"LabelSelectorValue\\": \\"v1\\",\\n  \\"IngressService\\": \\"mocka.default.svc.cluster.local\\",\\n  \\"IngressRule\\": \\"[{\\\\\\"Domains\\\\\\":[\\\\\\"*\\\\\\"],\\\\\\"RouteName\\\\\\":\\\\\\"r1\\\\\\",\\\\\\"MatchRequest\\\\\\":{\\\\\\"Headers\\\\\\":[{\\\\\\"Name\\\\\\":\\\\\\"x-asm-prefer-tag\\\\\\",\\\\\\"MatchingMode\\\\\\":\\\\\\"exact\\\\\\",\\\\\\"MatchingContent\\\\\\":\\\\\\"s1\\\\\\"}],\\\\\\"URI\\\\\\":{\\\\\\"MatchingMode\\\\\\":\\\\\\"exact\\\\\\",\\\\\\"MatchingContent\\\\\\":\\\\\\"/mock\\\\\\"}},\\\\\\"RouteDestinations\\\\\\":[{\\\\\\"Destination\\\\\\":{\\\\\\"Host\\\\\\":\\\\\\"mocka.default.svc.cluster.local\\\\\\",\\\\\\"Subset\\\\\\":\\\\\\"s1\\\\\\"}}]},{\\\\\\"Domains\\\\\\":[\\\\\\"*\\\\\\"],\\\\\\"RouteName\\\\\\":\\\\\\"hello\\\\\\",\\\\\\"MatchRequest\\\\\\":{\\\\\\"Headers\\\\\\":[{\\\\\\"Name\\\\\\":\\\\\\"x-asm-prefer-tag\\\\\\",\\\\\\"MatchingMode\\\\\\":\\\\\\"exact\\\\\\",\\\\\\"MatchingContent\\\\\\":\\\\\\"s1\\\\\\"}],\\\\\\"URI\\\\\\":{\\\\\\"MatchingMode\\\\\\":\\\\\\"exact\\\\\\",\\\\\\"MatchingContent\\\\\\":\\\\\\"/mocktest\\\\\\"}},\\\\\\"RouteDestinations\\\\\\":[{\\\\\\"Destination\\\\\\":{\\\\\\"Host\\\\\\":\\\\\\"mocka.default.svc.cluster.local\\\\\\",\\\\\\"Subset\\\\\\":\\\\\\"s1\\\\\\"}}]}]\\",\\n  \\"WeightedIngressDestination\\": \\"{\\\\\\"RouteDestination\\\\\\":{\\\\\\"Host\\\\\\":\\\\\\"mocka.default.svc.cluster.local\\\\\\",\\\\\\"Subset\\\\\\":\\\\\\"s1\\\\\\"},\\\\\\"Weight\\\\\\":40}\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSwimLaneDetailResponse>\\n    <RequestId>yyyy</RequestId>\\n    <ServicesList>[\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka\\",\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb\\",\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc\\"]</ServicesList>\\n    <LabelSelectorKey>ASM_TRAFFIC_TAG</LabelSelectorKey>\\n    <LabelSelectorValue>v1</LabelSelectorValue>\\n    <IngressService>mocka.default.svc.cluster.local</IngressService>\\n    <IngressRule>[{\\"Domains\\":[\\"*\\"],\\"RouteName\\":\\"r1\\",\\"MatchRequest\\":{\\"Headers\\":[{\\"Name\\":\\"x-asm-prefer-tag\\",\\"MatchingMode\\":\\"exact\\",\\"MatchingContent\\":\\"s1\\"}],\\"URI\\":{\\"MatchingMode\\":\\"exact\\",\\"MatchingContent\\":\\"/mock\\"}},\\"RouteDestinations\\":[{\\"Destination\\":{\\"Host\\":\\"mocka.default.svc.cluster.local\\",\\"Subset\\":\\"s1\\"}}]},{\\"Domains\\":[\\"*\\"],\\"RouteName\\":\\"hello\\",\\"MatchRequest\\":{\\"Headers\\":[{\\"Name\\":\\"x-asm-prefer-tag\\",\\"MatchingMode\\":\\"exact\\",\\"MatchingContent\\":\\"s1\\"}],\\"URI\\":{\\"MatchingMode\\":\\"exact\\",\\"MatchingContent\\":\\"/mocktest\\"}},\\"RouteDestinations\\":[{\\"Destination\\":{\\"Host\\":\\"mocka.default.svc.cluster.local\\",\\"Subset\\":\\"s1\\"}}]}]</IngressRule>\\n</GetSwimLaneDetailResponse>","errorExample":""}]',
            'title' => '获取指定泳道详细信息',
        ],
        'GetSwimLaneGroupList' => [
            'summary' => '调用GetSwimLaneGroupList获取网格实例下所有泳道组列表。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
                'abilityTreeCode' => '153461',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh22WM61',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxxx',
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
                                'example' => 'yyyy',
                            ],
                            'SwimLaneGroupList' => [
                                'description' => '泳道组信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '单个泳道组信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'GroupName' => [
                                            'description' => '泳道组名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ServiceList' => [
                                            'description' => '泳道组关联的服务列表。',
                                            'type' => 'string',
                                            'example' => '["sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc"]',
                                        ],
                                        'IngressType' => [
                                            'description' => '引流规则目前仅支持在ASM网关下进行配置。',
                                            'type' => 'string',
                                            'example' => 'ASM',
                                        ],
                                        'IngressGatewayName' => [
                                            'description' => 'ASM网关名称。',
                                            'type' => 'string',
                                            'example' => 'ingressgateway',
                                        ],
                                        'IsPermissive' => [
                                            'description' => '流量泳道组是否是宽松模式。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'FallbackTarget' => [
                                            'description' => '宽松模式泳道组的基线泳道名称。仅在泳道组为宽松模式时，设置此参数有效。',
                                            'type' => 'string',
                                            'example' => 's1',
                                        ],
                                        'TraceHeader' => [
                                            'description' => '宽松模式泳道组的链路透传请求头。',
                                            'type' => 'string',
                                            'example' => 'my-request-id',
                                        ],
                                        'RouteHeader' => [
                                            'description' => '宽松模式流量泳道组的引流请求头。',
                                            'type' => 'string',
                                            'example' => 'x-asm-prefer-tag',
                                        ],
                                        'SwimLaneLabels' => [
                                            'description' => '一个序列化后的JSON字符串，其中JSON对象的键为泳道组中所有服务都拥有的标签的键，JSON对象的值为该标签下泳道组内服务的所有可能的标签值数组。',
                                            'type' => 'string',
                                            'example' => '{"ASM_TRAFFIC_TAG":["v2","v3","v1"],"version":["v3","v1","v2"]}',
                                        ],
                                        'IngressRoutingStrategy' => [
                                            'description' => '为泳道组内的多个泳道进行请求引流的策略，有两种可能取值：'."\n"
                                                .'* weighted：基于权重的引流策略，即首先以统一的规则对请求进行匹配，对匹配到的请求进行引流，引流时，按照给定的比例将所有请求发往不同的泳道。'."\n"
                                                .'* rule-based：基于规则的引流策略，即泳道组中的每条泳道都拥有自己的匹配规则，只有匹配到泳道对应的引流规则的请求才会被转发到对应的泳道。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'weighted' => 'weighted',
                                                'rule-based' => 'rule-based',
                                            ],
                                            'example' => 'weighted',
                                        ],
                                        'WeightedIngressRule' => [
                                            'description' => '当泳道组的引流策略为weighted时可以设定。作用于整个泳道组的引流规则，',
                                            'type' => 'string',
                                            'example' => '{"Domains":["*"],"MatchRequests":[{"URI":{"MatchingMode":"exact","MatchingContent":"/mock"},"Headers":[{"Name":"test","MatchingMode":"exact","MatchingContent":"yes"}]}]}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"yyyy\\",\\n  \\"SwimLaneGroupList\\": [\\n    {\\n      \\"GroupName\\": \\"test\\",\\n      \\"ServiceList\\": \\"[\\\\\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka\\\\\\",\\\\\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb\\\\\\",\\\\\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc\\\\\\"]\\",\\n      \\"IngressType\\": \\"ASM\\",\\n      \\"IngressGatewayName\\": \\"ingressgateway\\",\\n      \\"IsPermissive\\": false,\\n      \\"FallbackTarget\\": \\"s1\\",\\n      \\"TraceHeader\\": \\"my-request-id\\",\\n      \\"RouteHeader\\": \\"x-asm-prefer-tag\\",\\n      \\"SwimLaneLabels\\": \\"{\\\\\\"ASM_TRAFFIC_TAG\\\\\\":[\\\\\\"v2\\\\\\",\\\\\\"v3\\\\\\",\\\\\\"v1\\\\\\"],\\\\\\"version\\\\\\":[\\\\\\"v3\\\\\\",\\\\\\"v1\\\\\\",\\\\\\"v2\\\\\\"]}\\",\\n      \\"IngressRoutingStrategy\\": \\"weighted\\",\\n      \\"WeightedIngressRule\\": \\"{\\\\\\"Domains\\\\\\":[\\\\\\"*\\\\\\"],\\\\\\"MatchRequests\\\\\\":[{\\\\\\"URI\\\\\\":{\\\\\\"MatchingMode\\\\\\":\\\\\\"exact\\\\\\",\\\\\\"MatchingContent\\\\\\":\\\\\\"/mock\\\\\\"},\\\\\\"Headers\\\\\\":[{\\\\\\"Name\\\\\\":\\\\\\"test\\\\\\",\\\\\\"MatchingMode\\\\\\":\\\\\\"exact\\\\\\",\\\\\\"MatchingContent\\\\\\":\\\\\\"yes\\\\\\"}]}]}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetSwimLaneGroupListResponse>\\n    <RequestId>yyyy</RequestId>\\n    <SwimLaneGroupList>\\n        <GroupName>test</GroupName>\\n        <ServiceList>[\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka\\",\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb\\",\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc\\"]</ServiceList>\\n        <IngressType>ASM</IngressType>\\n        <IngressGatewayName>ingressgateway</IngressGatewayName>\\n    </SwimLaneGroupList>\\n</GetSwimLaneGroupListResponse>","errorExample":""}]',
            'title' => '获取网格实例下所有泳道组列表',
        ],
        'GetSwimLaneList' => [
            'summary' => '调用GetSwimLaneList获取某个泳道组下所有泳道列表。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
                'abilityTreeCode' => '146477',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh22WM61',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '泳道组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                                'example' => 'yyyy',
                            ],
                            'SwimLaneList' => [
                                'description' => '泳道列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '泳道信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '泳道名称。',
                                            'type' => 'string',
                                            'example' => 's1',
                                        ],
                                        'GroupName' => [
                                            'description' => '泳道组名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'LabelSelectorKey' => [
                                            'description' => '关联的服务工作负载的Label Key，固定使用`ASM_TRAFFIC_TAG`。',
                                            'type' => 'string',
                                            'example' => 'ASM_TRAFFIC_TAG',
                                        ],
                                        'LabelSelectorValue' => [
                                            'description' => '`ASM_TRAFFIC_TAG ` Label的取值。',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'IngressService' => [
                                            'description' => '已废弃。',
                                            'type' => 'string',
                                            'example' => 'mocka.default.svc.cluster.local',
                                        ],
                                        'IngressRule' => [
                                            'description' => '引流规则。',
                                            'type' => 'string',
                                            'example' => '[{"Domains":["*"],"RouteName":"r1","MatchRequest":{"Headers":[{"Name":"x-asm-prefer-tag","MatchingMode":"exact","MatchingContent":"s1"}],"URI":{"MatchingMode":"exact","MatchingContent":"/mock"}},"RouteDestinations":[{"Destination":{"Host":"mocka.default.svc.cluster.local","Subset":"s1"}}]},{"Domains":["*"],"RouteName":"hello","MatchRequest":{"Headers":[{"Name":"x-asm-prefer-tag","MatchingMode":"exact","MatchingContent":"s1"}],"URI":{"MatchingMode":"exact","MatchingContent":"/mocktest"}},"RouteDestinations":[{"Destination":{"Host":"mocka.default.svc.cluster.local","Subset":"s1"}}]}]',
                                        ],
                                        'ServiceList' => [
                                            'description' => '关联的服务列表。',
                                            'type' => 'string',
                                            'example' => '["sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc"]',
                                        ],
                                        'WeightedIngressDestinatin' => [
                                            'description' => '当泳道对应的泳道组的引流策略为weighted时可以设定。此字段是一个JSON序列化的字符串，指定了在基于权重的路由策略下，每条泳道的入口服务域名以及对应的引流权重。',
                                            'type' => 'string',
                                            'example' => '{"RouteDestination":{"Host":"mocka.default.svc.cluster.local","Subset":"s1"},"Weight":40}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"yyyy\\",\\n  \\"SwimLaneList\\": [\\n    {\\n      \\"Name\\": \\"s1\\",\\n      \\"GroupName\\": \\"test\\",\\n      \\"LabelSelectorKey\\": \\"ASM_TRAFFIC_TAG\\",\\n      \\"LabelSelectorValue\\": \\"v1\\",\\n      \\"IngressService\\": \\"mocka.default.svc.cluster.local\\",\\n      \\"IngressRule\\": \\"[{\\\\\\"Domains\\\\\\":[\\\\\\"*\\\\\\"],\\\\\\"RouteName\\\\\\":\\\\\\"r1\\\\\\",\\\\\\"MatchRequest\\\\\\":{\\\\\\"Headers\\\\\\":[{\\\\\\"Name\\\\\\":\\\\\\"x-asm-prefer-tag\\\\\\",\\\\\\"MatchingMode\\\\\\":\\\\\\"exact\\\\\\",\\\\\\"MatchingContent\\\\\\":\\\\\\"s1\\\\\\"}],\\\\\\"URI\\\\\\":{\\\\\\"MatchingMode\\\\\\":\\\\\\"exact\\\\\\",\\\\\\"MatchingContent\\\\\\":\\\\\\"/mock\\\\\\"}},\\\\\\"RouteDestinations\\\\\\":[{\\\\\\"Destination\\\\\\":{\\\\\\"Host\\\\\\":\\\\\\"mocka.default.svc.cluster.local\\\\\\",\\\\\\"Subset\\\\\\":\\\\\\"s1\\\\\\"}}]},{\\\\\\"Domains\\\\\\":[\\\\\\"*\\\\\\"],\\\\\\"RouteName\\\\\\":\\\\\\"hello\\\\\\",\\\\\\"MatchRequest\\\\\\":{\\\\\\"Headers\\\\\\":[{\\\\\\"Name\\\\\\":\\\\\\"x-asm-prefer-tag\\\\\\",\\\\\\"MatchingMode\\\\\\":\\\\\\"exact\\\\\\",\\\\\\"MatchingContent\\\\\\":\\\\\\"s1\\\\\\"}],\\\\\\"URI\\\\\\":{\\\\\\"MatchingMode\\\\\\":\\\\\\"exact\\\\\\",\\\\\\"MatchingContent\\\\\\":\\\\\\"/mocktest\\\\\\"}},\\\\\\"RouteDestinations\\\\\\":[{\\\\\\"Destination\\\\\\":{\\\\\\"Host\\\\\\":\\\\\\"mocka.default.svc.cluster.local\\\\\\",\\\\\\"Subset\\\\\\":\\\\\\"s1\\\\\\"}}]}]\\",\\n      \\"ServiceList\\": \\"[\\\\\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka\\\\\\",\\\\\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb\\\\\\",\\\\\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc\\\\\\"]\\",\\n      \\"WeightedIngressDestinatin\\": \\"{\\\\\\"RouteDestination\\\\\\":{\\\\\\"Host\\\\\\":\\\\\\"mocka.default.svc.cluster.local\\\\\\",\\\\\\"Subset\\\\\\":\\\\\\"s1\\\\\\"},\\\\\\"Weight\\\\\\":40}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetSwimLaneListResponse>\\n    <RequestId>yyyy</RequestId>\\n    <SwimLaneList>\\n        <Name>s1</Name>\\n        <GroupName>test</GroupName>\\n        <LabelSelectorKey>ASM_TRAFFIC_TAG</LabelSelectorKey>\\n        <LabelSelectorValue>v1</LabelSelectorValue>\\n        <IngressService>mocka.default.svc.cluster.local</IngressService>\\n        <IngressRule>[{\\"Domains\\":[\\"*\\"],\\"RouteName\\":\\"r1\\",\\"MatchRequest\\":{\\"Headers\\":[{\\"Name\\":\\"x-asm-prefer-tag\\",\\"MatchingMode\\":\\"exact\\",\\"MatchingContent\\":\\"s1\\"}],\\"URI\\":{\\"MatchingMode\\":\\"exact\\",\\"MatchingContent\\":\\"/mock\\"}},\\"RouteDestinations\\":[{\\"Destination\\":{\\"Host\\":\\"mocka.default.svc.cluster.local\\",\\"Subset\\":\\"s1\\"}}]},{\\"Domains\\":[\\"*\\"],\\"RouteName\\":\\"hello\\",\\"MatchRequest\\":{\\"Headers\\":[{\\"Name\\":\\"x-asm-prefer-tag\\",\\"MatchingMode\\":\\"exact\\",\\"MatchingContent\\":\\"s1\\"}],\\"URI\\":{\\"MatchingMode\\":\\"exact\\",\\"MatchingContent\\":\\"/mocktest\\"}},\\"RouteDestinations\\":[{\\"Destination\\":{\\"Host\\":\\"mocka.default.svc.cluster.local\\",\\"Subset\\":\\"s1\\"}}]}]</IngressRule>\\n        <ServiceList>[\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka\\",\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb\\",\\"sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc\\"]</ServiceList>\\n    </SwimLaneList>\\n</GetSwimLaneListResponse>","errorExample":""}]',
            'title' => '获取某个泳道组下所有泳道列表',
        ],
        'GetDeploymentBySelector' => [
            'summary' => '调用GetDeploymentBySelector获取Selector指定的工作负载列表。',
            'methods' => [
                'get',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ce9fc65def2aa4c918747b9360fbda737',
                    ],
                ],
                [
                    'name' => 'GuestCluster',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '集群名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cbe80a56d07ed45818b4d39273e234688',
                    ],
                ],
                [
                    'name' => 'NameSpace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '返回数据条数上限',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Mark',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '上次查询到的数据标记',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJ2IjoibWV0YS5rOHMuaW8vdjEiLCJydiI6NzgxODk3MCwic3RhcnQiOiJuZ2lueDQ1N1x1MDAwMCJ9',
                    ],
                ],
                [
                    'name' => 'LabelSelector',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'Label选择器',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'app=perth-gateway',
                            'description' => 'Label选择器',
                        ],
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
                                'example' => '946690C2-41D3-55A0-A501-E2FFAB5F8C24',
                            ],
                            'DeploymentNameList' => [
                                'description' => '工作负载名称列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作负载名称列表',
                                    'type' => 'string',
                                    'format' => 'byte',
                                    'example' => 'httpbin',
                                ],
                            ],
                            'Mark' => [
                                'description' => '本次返回的数据结束标记',
                                'type' => 'string',
                                'example' => 'eyJ2IjoibWV0YS5rOHMuaW8vdjEiLCJydiI6NTgyMDUzMzk5MCwic3RhcnQiOiJwbXMtYWRhcHRlci1kZGxsXHUwMDAwIn0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"946690C2-41D3-55A0-A501-E2FFAB5F8C24\\",\\n  \\"DeploymentNameList\\": [\\n    \\"httpbin\\"\\n  ],\\n  \\"Mark\\": \\"eyJ2IjoibWV0YS5rOHMuaW8vdjEiLCJydiI6NTgyMDUzMzk5MCwic3RhcnQiOiJwbXMtYWRhcHRlci1kZGxsXHUwMDAwIn0\\"\\n}","type":"json"}]',
            'title' => '获取Selector指定的工作负载列表',
        ],
        'UpdateControlPlaneLogConfig' => [
            'summary' => '修改控制面日志采集配置。',
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
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'c20667db760fe4ee6910220136624****',
                    ],
                ],
                [
                    'name' => 'Enabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否采集控制面日志到SLS。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Project',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义控制面日志采集目标SLS Project名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aia-asm-deva-sh',
                    ],
                ],
                [
                    'name' => 'LogTTLInDay',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '采集日志过期时间。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '3000',
                        'minimum' => '1',
                        'example' => '30',
                        'default' => '30',
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
                                'example' => '488F046B-63D2-5D96-9A70-E00C3685D49F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'ERR404',
                        'errorMessage' => 'Not found',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"488F046B-63D2-5D96-9A70-E00C3685D49F\\"\\n}","type":"json"}]',
            'title' => '修改控制面日志采集配置',
        ],
        'UntagResources' => [
            'summary' => '调用UntagResources删除实例上的用户标签。',
            'methods' => [
                'get',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统规定参数，固定为`servicemesh`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'servicemesh',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'flat',
                    'schema' => [
                        'description' => '网格实例ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网格实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'c418807cb4e5840eab018da7d8f5d****',
                        ],
                        'required' => true,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签键列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签键。'."\n"
                                ."\n"
                                .'标签键最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。'."\n"
                                ."\n"
                                .'如果您同时输入了多个标签键，各个标签键之间为**或**的关系。**N**的取值范围：**1**~**20**。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'TEST_KEY_1',
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否全部删除，只针对TagKey.N为空时有效。取值范围：'."\n"
                            ."\n"
                            .'- true：全部删除。'."\n"
                            .'- false：不全部删除。'."\n"
                            ."\n"
                            .'默认为 false。',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","type":"json"}]',
            'title' => '删除标签接口',
        ],
        'ListTagResources' => [
            'summary' => '调用ListTagResources查询实例上的用户标签。',
            'methods' => [
                'get',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统规定参数，固定为`servicemesh`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'servicemesh',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'flat',
                    'schema' => [
                        'description' => '网格实例ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '第N个资源ID，此处是为网格ID。可同时查询多个资源，可以传参数名为`ResourceId.2`、`ResourceId.3`等。N为正整数。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'c418807cb4e5840eab018da7d8f5d****',
                        ],
                        'required' => false,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签列表，最多包含20个子项。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源的标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test',
                                ],
                                'Value' => [
                                    'description' => '资源的标签值。'."\n"
                                        ."\n"
                                        .'标签值可以为空或输入不超过128个字符的字符串，不能以aliyun或者acs:开头，不能包含http://或者https://。'."\n"
                                        ."\n"
                                        .'每一个标签键对应一个标签值，一次最多支持输入20个标签键对应的标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'yahaha',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表示当前调用返回读取到的位置。显示为空表示数据已经读取完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '""',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'NextToken' => [
                                'description' => '表示当前调用返回读取到的位置。显示为空表示数据已经读取完毕。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'TagResources' => [
                                'description' => '查询到的集群和标签的信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '查询到资源和标签的信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceId' => [
                                            'description' => '网格实例ID。',
                                            'type' => 'string',
                                            'example' => '863c333b-9a8e-4b53-a13f-52a97936****',
                                        ],
                                        'ResourceType' => [
                                            'description' => '系统规定参数，固定为`servicemesh`。',
                                            'type' => 'string',
                                            'example' => 'servicemesh',
                                        ],
                                        'TagKey' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'k1',
                                        ],
                                        'TagValue' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'yahaha',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"NextToken\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceId\\": \\"863c333b-9a8e-4b53-a13f-52a97936****\\",\\n      \\"ResourceType\\": \\"servicemesh\\",\\n      \\"TagKey\\": \\"k1\\",\\n      \\"TagValue\\": \\"yahaha\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '标签查询接口',
        ],
        'TagResources' => [
            'summary' => '调用TagResources添加或修改资源的用户标签。',
            'methods' => [
                'get',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统规定参数，固定为`servicemesh`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'servicemesh',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'flat',
                    'schema' => [
                        'description' => '网格实例ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '打标的网格实例ID 。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'c418807cb4e5840eab018da7d8f5d****',
                        ],
                        'required' => true,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'flat',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表，最多包含20个子项。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。'."\n"
                                        ."\n"
                                        .'限制：'."\n"
                                        ."\n"
                                        .'- 不能为空。'."\n"
                                        .'- N的取值范围为1~20。'."\n"
                                        .'- 最多支持128个字符。'."\n"
                                        .'- 不能以`aliyun`或`acs:`开头。'."\n"
                                        .'- 不能包含`http://`和`https://`。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'test',
                                ],
                                'Value' => [
                                    'description' => '标签值。'."\n"
                                        ."\n"
                                        .'限制：'."\n"
                                        ."\n"
                                        .'- 不能为空。'."\n"
                                        .'- N的取值范围为1~20。'."\n"
                                        .'- 最多支持128个字符。'."\n"
                                        .'- 不能包含`http://`和`https://`。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'yahaha',
                                ],
                            ],
                            'required' => true,
                        ],
                        'required' => true,
                        'maxItems' => 20,
                        'minItems' => 1,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","type":"json"}]',
            'title' => '编辑标签接口',
        ],
        'UpdateWaypoint' => [
            'summary' => '更新Waypoint',
            'methods' => [
                'get',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据面集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ce3c25e247da24f3aab9b7edfae83****',
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'bookinfo-reviews',
                    ],
                ],
                [
                    'name' => 'RequestCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint Pod请求的CPU资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100m',
                    ],
                ],
                [
                    'name' => 'RequestMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint Pod请求的内存资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '128Mi',
                    ],
                ],
                [
                    'name' => 'LimitCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint Pod的CPU资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2000m',
                    ],
                ],
                [
                    'name' => 'LimitMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint Pod的内存资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1024Mi',
                    ],
                ],
                [
                    'name' => 'Replicas',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint Pod的副本数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'HPAEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启HPA。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'HPATargetCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'HPA目标CPU使用率。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '91',
                    ],
                ],
                [
                    'name' => 'HPATargetMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'HPA目标内存使用率。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '89',
                    ],
                ],
                [
                    'name' => 'HPAMinReplicas',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'HPA最小副本数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'HPAMaxReplicas',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'HPA最大副本数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'PreferECI',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否优先调度到ECI节点。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '71680038-8009-5073-B43E-C057E9******',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"71680038-8009-5073-B43E-C057E9******\\"\\n}","type":"json"}]',
            'title' => '更新一个数据面集群中某个Waypoint配置',
        ],
        'CreateWaypoint' => [
            'summary' => '创建Waypoint',
            'methods' => [
                'get',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ce134b0727aa2492db69f6c3880e****',
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据面集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'ServiceAccount',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint生效的ServiceAccount。如果为空，表示对整个命名空间生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bookinfo-productpage',
                    ],
                ],
                [
                    'name' => 'RequestCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint Pod请求的CPU资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100m',
                    ],
                ],
                [
                    'name' => 'RequestMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint Pod请求的内存资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '128Mi',
                    ],
                ],
                [
                    'name' => 'LimitCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint Pod的CPU资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2000m',
                    ],
                ],
                [
                    'name' => 'LimitMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint Pod的内存资源限制。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1024Mi',
                    ],
                ],
                [
                    'name' => 'Replicas',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint Pod的副本数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'HPAEnabled',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启HPA。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'HPATargetCPU',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'HPA目标CPU使用率。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '93',
                    ],
                ],
                [
                    'name' => 'HPATargetMemory',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'HPA目标内存使用率。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '91',
                    ],
                ],
                [
                    'name' => 'HPAMinReplicas',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'HPA最小副本数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'HPAMaxReplicas',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'HPA最大副本数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'PreferECI',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否优先调度到ECI节点。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '71680038-8009-5073-B43E-C057E9******',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"71680038-8009-5073-B43E-C057E9******\\"\\n}","type":"json"}]',
            'title' => '在数据面集群中创建一个Waypoint',
        ],
        'DeleteWaypoint' => [
            'summary' => '删除Waypoint资源',
            'methods' => [
                'get',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据面集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ce3c25e247da24f3aab9b7edfae83****',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Waypoint名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'bookinfo-reviews',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","type":"json"}]',
            'title' => '删除一个Waypoint',
        ],
        'ListWaypoints' => [
            'summary' => '调用ListWaypoints获取数据面集群某个命名空间下所有Waypoint配置。',
            'methods' => [
                'get',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c08ba3fd1e6484b0f8cc1ad8fe10d****',
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据面集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ce3c25e247da24f3aab9b7edfae83****',
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'waypoint名称。为空时，返回所有waypoint；不为空时，查询指定名称waypoint。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bookinfo-productpage',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '限制返回的waypoint数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Continue',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '配合Limit使用，用于从指定offset开始查询waypoint。第一次调用时，填写空即可。如果返回结果中Continue不为空，即代表还有未返回的数据，需要带上返回的Continue继续调用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJ2IjoibWV0YS5rOHMuaW8vdjEiLCJydiI6MjY4Njc5Miwic3RhcnQiOiJkZWZhdWx0L2Jvb2tpbmZvLXByb2R1Y3RwYWdlXHUwMDAwIn0',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'Waypoints' => [
                                'description' => 'Waypoint配置列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Waypoint配置。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => 'Waypoint对应的Gateway资源名称。如果ServiceAccount 生效，则与ServiceAccount同名；如果命名空间生效，则名称为 `namespace`。',
                                            'type' => 'string',
                                            'example' => 'namespace',
                                        ],
                                        'ServiceAccount' => [
                                            'description' => 'Waypoint生效的ServiceAccount。如果为空，表示对整个命名空间生效。',
                                            'type' => 'string',
                                            'example' => 'bookinfo-productpage',
                                        ],
                                        'Namespace' => [
                                            'description' => '命名空间。',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'RequestCPU' => [
                                            'description' => 'Waypoint Pod请求的CPU资源。',
                                            'type' => 'string',
                                            'example' => '100m',
                                        ],
                                        'RequestMemory' => [
                                            'description' => 'Waypoint Pod请求的内存资源。',
                                            'type' => 'string',
                                            'example' => '128Mi',
                                        ],
                                        'LimitCPU' => [
                                            'description' => 'Waypoint Pod的CPU资源限制。',
                                            'type' => 'string',
                                            'example' => '2000m',
                                        ],
                                        'LimitMemory' => [
                                            'description' => 'Waypoint Pod的内存资源限制。',
                                            'type' => 'string',
                                            'example' => '1024Mi',
                                        ],
                                        'Replicas' => [
                                            'description' => 'Waypoint Pod的副本数。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'HPAEnabled' => [
                                            'description' => '是否开启HPA。',
                                            'type' => 'string',
                                            'example' => 'false',
                                        ],
                                        'HPATargetCPU' => [
                                            'description' => 'HPA目标CPU使用率。',
                                            'type' => 'string',
                                            'example' => '93',
                                        ],
                                        'HPATargetMemory' => [
                                            'description' => 'HPA目标内存使用率。',
                                            'type' => 'string',
                                            'example' => '91',
                                        ],
                                        'HPAMinReplicas' => [
                                            'description' => 'HPA最小副本数。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'HPAMaxReplicas' => [
                                            'description' => 'HPA最大副本数。',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                        'PreferECI' => [
                                            'description' => '是否优先调度到ECI节点。',
                                            'type' => 'string',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                            'Continue' => [
                                'description' => 'base64编码的字符串。如果为空，表示已经获取到所有的waypoint；如果不为空，下次list时带上该值，可以接着从本次截止的offset继续获取。',
                                'type' => 'string',
                                'example' => 'eyJ2IjoibWV0YS5rOHMuaW8vdjEiLCJydiI6MjY4Njc5Miwic3RhcnQiOiJkZWZhdWx0L2Jvb2tpbmZvLXByb2R1Y3RwYWdlXHUwMDAwIn0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\",\\n  \\"Waypoints\\": [\\n    {\\n      \\"Name\\": \\"namespace\\",\\n      \\"ServiceAccount\\": \\"bookinfo-productpage\\",\\n      \\"Namespace\\": \\"default\\",\\n      \\"RequestCPU\\": \\"100m\\",\\n      \\"RequestMemory\\": \\"128Mi\\",\\n      \\"LimitCPU\\": \\"2000m\\",\\n      \\"LimitMemory\\": \\"1024Mi\\",\\n      \\"Replicas\\": \\"1\\",\\n      \\"HPAEnabled\\": \\"false\\",\\n      \\"HPATargetCPU\\": \\"93\\",\\n      \\"HPATargetMemory\\": \\"91\\",\\n      \\"HPAMinReplicas\\": \\"2\\",\\n      \\"HPAMaxReplicas\\": \\"4\\",\\n      \\"PreferECI\\": \\"false\\"\\n    }\\n  ],\\n  \\"Continue\\": \\"eyJ2IjoibWV0YS5rOHMuaW8vdjEiLCJydiI6MjY4Njc5Miwic3RhcnQiOiJkZWZhdWx0L2Jvb2tpbmZvLXByb2R1Y3RwYWdlXHUwMDAwIn0\\"\\n}","type":"json"}]',
            'title' => '获取数据面集群的Waypoint配置',
        ],
        'ListServiceAccounts' => [
            'summary' => '列举所有服务账号',
            'methods' => [
                'get',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ce134b0727aa2492db69f6c3880e1****',
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据面集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ce3c25e247da24f3aab9b7edfae83****',
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8349374D-0F22-5CAB-9DE3-8CCE8EFA71FF',
                            ],
                            'ServiceAccounts' => [
                                'description' => 'ServiceAccount列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '列表中的一个ServiceAccount',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => 'ServiceAccount名称',
                                            'type' => 'string',
                                            'example' => 'bookinfo-reviews',
                                        ],
                                        'Namespace' => [
                                            'description' => 'ServiceAccount所在的命名空间',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8349374D-0F22-5CAB-9DE3-8CCE8EFA71FF\\",\\n  \\"ServiceAccounts\\": [\\n    {\\n      \\"Name\\": \\"bookinfo-reviews\\",\\n      \\"Namespace\\": \\"default\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取数据面集群的ServiceAccount',
        ],
        'AddVMIntoServiceMesh' => [
            'summary' => '调用AddVMIntoServiceMesh添加虚拟机到服务网格。',
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccb37ff104caf419fbf48fb38e6f3****',
                    ],
                ],
                [
                    'name' => 'EcsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟机ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-2ze90ts4e7dj3650****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4b2c0fe0-6705-4614-8521-6b9d289163c8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4b2c0fe0-6705-4614-8521-6b9d289163c8\\"\\n}","errorExample":""},{"type":"xml","example":"<AddVMIntoServiceMeshResponse>\\n    <RequestId>4b2c0fe0-6705-4614-8521-6b9d289163c8</RequestId>\\n</AddVMIntoServiceMeshResponse>","errorExample":""}]',
            'title' => '添加虚拟机到服务网格',
        ],
        'RemoveVMFromServiceMesh' => [
            'summary' => '调用RemoveVMFromServiceMesh从服务网格中移除虚拟机。',
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccb37ff104caf419fbf48fb38e6f3****',
                    ],
                ],
                [
                    'name' => 'EcsId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟机ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'i-2ze90ts4edj3650****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4b2c0fe0-6705-4614-8521-6b9d289163c8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4b2c0fe0-6705-4614-8521-6b9d289163c8\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveVMFromServiceMeshResponse>\\n    <RequestId>4b2c0fe0-6705-4614-8521-6b9d289163c8</RequestId>\\n</RemoveVMFromServiceMeshResponse>","errorExample":""}]',
            'title' => '从服务网格中移除虚拟机',
        ],
        'GetVmMeta' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ce51a7de4a5144db88a864ed91****',
                    ],
                ],
                [
                    'name' => 'TrustDomain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '信任域。在同时填写命名空间和服务账号时，默认值为cluster.local；否则将被忽略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cluster.local',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间。在同时填写命名空间和服务账号时生效，否则将被忽略。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'hello',
                    ],
                ],
                [
                    'name' => 'ServiceAccount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务账号。在同时填写命名空间和服务账号时生效，否则将被忽略。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'http-sa',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VmMetaInfo' => [
                                'description' => 'VM网格化所需的元数据信息',
                                'type' => 'object',
                                'properties' => [
                                    'HostsContent' => [
                                        'description' => 'Hosts内容',
                                        'type' => 'string',
                                        'example' => '....',
                                    ],
                                    'TokenContent' => [
                                        'description' => 'Token内容',
                                        'type' => 'string',
                                        'example' => '....',
                                    ],
                                    'EnvoyEnvContent' => [
                                        'description' => 'EnvoyEnv内容',
                                        'type' => 'string',
                                        'example' => '....',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '9522f7c9-63a1-4603-b850-37d12a****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9522f7c9-63a1-4603-b850-37d12a****\\",\\n  \\"VmMetaInfo\\": {\\n    \\"TokenPath\\": \\"/.../token\\",\\n    \\"HostsContent\\": \\"....\\",\\n    \\"EnvoyEnvPath\\": \\"/.../cluster.env\\",\\n    \\"TokenContent\\": \\"....\\",\\n    \\"CertChainPath\\": \\"/.../cert-chain.pem\\",\\n    \\"RootCertContent\\": \\"....\\",\\n    \\"KeyContent\\": \\"....\\",\\n    \\"RootCertPath\\": \\"/.../root-cert.pem\\",\\n    \\"CertChainContent\\": \\"....\\",\\n    \\"HostsPath\\": \\"/.../hosts\\",\\n    \\"KeyPath\\": \\"/.../key.pem\\",\\n    \\"EnvoyEnvContent\\": \\"....\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<VmMetaInfo>\\n    <TokenPath>/.../token</TokenPath>\\n    <EnvoyEnvContent>....</EnvoyEnvContent>\\n    <CertChainContent>....</CertChainContent>\\n    <CertChainPath>/.../cert-chain.pem</CertChainPath>\\n    <HostsPath>/.../hosts</HostsPath>\\n    <RootCertContent>....</RootCertContent>\\n    <RootCertPath>/.../root-cert.pem</RootCertPath>\\n    <TokenContent>....</TokenContent>\\n    <HostsContent>....</HostsContent>\\n    <EnvoyEnvPath>/.../cluster.env</EnvoyEnvPath>\\n    <KeyContent>....</KeyContent>\\n    <KeyPath>/.../key.pem</KeyPath>\\n</VmMetaInfo>\\n<RequestId>9522f7c9-63a1-4603-b850-37d12a****</RequestId>","errorExample":""}]',
            'title' => '获取VM网格化所需的元数据信息',
            'summary' => '调用GetVmMeta获取VM网格化所需的元数据信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetVmAppMeshInfo' => [
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ce51a7de4a5144db88a864****',
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
                                'example' => '9522f7c9-63a1-4603-b850-37d12a****',
                            ],
                            'Data' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => '...',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"...\\",\\n  \\"RequestId\\": \\"9522f7c9-63a1-4603-b850-37d12a****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9522f7c9-63a1-4603-b850-37d12a****</RequestId>\\n<Data>...</Data>","errorExample":""}]',
            'title' => '获取VM网格化信息列表',
            'summary' => '调用GetVmAppMeshInfo获取VM网格化信息列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeVMsInServiceMesh' => [
            'summary' => '调用DescribeVMsInServiceMesh获取已经加入到服务网格的虚拟机。',
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccb37ff104caf419fbf48fb38e6f3****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4b2c0fe0-6705-4614-8521-6b9d289163c8',
                            ],
                            'VMs' => [
                                'description' => '已加入到服务网格的虚拟机列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'description' => '虚拟机ID',
                                            'type' => 'string',
                                            'example' => 'i-2ze45cgxkx4q12e****',
                                        ],
                                        'HasTag' => [
                                            'description' => '是否已打标签',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'IpAddress' => [
                                            'description' => '虚机机IP地址',
                                            'type' => 'string',
                                            'example' => '10.0.*,***',
                                        ],
                                        'HostName' => [
                                            'description' => '主机名',
                                            'type' => 'string',
                                            'example' => 'iZ2ze45cgxkx4q12eh9l****',
                                        ],
                                        'Status' => [
                                            'description' => '虚拟机状态',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'SecurityGroupIds' => [
                                            'description' => '安全组',
                                            'type' => 'string',
                                            'example' => 'sg-2zeaqy08amco9osl****',
                                        ],
                                        'Region' => [
                                            'description' => '地域ID',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4b2c0fe0-6705-4614-8521-6b9d289163c8\\",\\n  \\"VMs\\": [\\n    {\\n      \\"InstanceId\\": \\"i-2ze45cgxkx4q12e****\\",\\n      \\"HasTag\\": true,\\n      \\"IpAddress\\": \\"10.0.*,***\\",\\n      \\"HostName\\": \\"iZ2ze45cgxkx4q12eh9l****\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"SecurityGroupIds\\": \\"sg-2zeaqy08amco9osl****\\",\\n      \\"Region\\": \\"cn-beijing\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeVMsInServiceMeshResponse>\\n    <RequestId>4b2c0fe0-6705-4614-8521-6b9d289163c8</RequestId>\\n    <VMs>\\n        <InstanceId>i-2ze45cgxkx4q12e****</InstanceId>\\n        <HasTag>true</HasTag>\\n        <IpAddress>10.0.*,***</IpAddress>\\n        <HostName>iZ2ze45cgxkx4q12eh9l****</HostName>\\n        <Status>Running</Status>\\n        <SecurityGroupIds>sg-2zeaqy08amco9osl****</SecurityGroupIds>\\n        <Region>cn-beijing</Region>\\n    </VMs>\\n</DescribeVMsInServiceMeshResponse>","errorExample":""}]',
            'title' => '获取服务网格中的虚拟机列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeServiceMeshVMs' => [
            'summary' => '调用DescribeServiceMeshVMs获取和服务网格同一VPC的ECS。',
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccb37ff104caf419fbf48fb38e6f****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4b2c0fe0-6705-4614-8521-6b9d289163c8',
                            ],
                            'VMs' => [
                                'description' => '和服务网格相同VPC的虚拟机列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '虚拟机状态',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'InstanceId' => [
                                            'description' => '虚拟机ID',
                                            'type' => 'string',
                                            'example' => 'i-2ze0kub9scdguom****',
                                        ],
                                        'HasTag' => [
                                            'description' => '是否已打标签',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'IpAddress' => [
                                            'description' => '虚拟机IP地址',
                                            'type' => 'string',
                                            'example' => '192.168.2.241',
                                        ],
                                        'HostName' => [
                                            'description' => '主机名',
                                            'type' => 'string',
                                            'example' => 'iZ2ze45cgxkx4q12eh****',
                                        ],
                                        'SecurityGroupIds' => [
                                            'description' => '安全组',
                                            'type' => 'string',
                                            'example' => 'sg-2zeaqy08amco9osl****',
                                        ],
                                        'ServiceMeshId' => [
                                            'description' => '服务网格ID',
                                            'type' => 'string',
                                            'example' => 'ccb37ff104caf419fbf48fb38e6f3****',
                                        ],
                                        'Region' => [
                                            'description' => '地域ID',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4b2c0fe0-6705-4614-8521-6b9d289163c8\\",\\n  \\"VMs\\": [\\n    {\\n      \\"Status\\": \\"Running\\",\\n      \\"InstanceId\\": \\"i-2ze0kub9scdguom****\\",\\n      \\"HasTag\\": false,\\n      \\"IpAddress\\": \\"192.168.2.241\\",\\n      \\"HostName\\": \\"iZ2ze45cgxkx4q12eh****\\",\\n      \\"SecurityGroupIds\\": \\"sg-2zeaqy08amco9osl****\\",\\n      \\"ServiceMeshId\\": \\"ccb37ff104caf419fbf48fb38e6f3****\\",\\n      \\"Region\\": \\"cn-beijing\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeServiceMeshVMsResponse>\\n    <RequestId>4b2c0fe0-6705-4614-8521-6b9d289163c8</RequestId>\\n    <VMs>\\n        <Status>Running</Status>\\n        <InstanceId>i-2ze0kub9scdguom****</InstanceId>\\n        <HasTag>false</HasTag>\\n        <IpAddress>192.168.2.241</IpAddress>\\n        <HostName>iZ2ze45cgxkx4q12eh****</HostName>\\n        <SecurityGroupIds>sg-2zeaqy08amco9osl****</SecurityGroupIds>\\n        <ServiceMeshId>ccb37ff104caf419fbf48fb38e6f3****</ServiceMeshId>\\n        <Region>cn-beijing</Region>\\n    </VMs>\\n</DescribeServiceMeshVMsResponse>","errorExample":""}]',
            'title' => '获取同一VPC的ECS',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddVmAppToMesh' => [
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
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274****',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'hello',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http-service',
                    ],
                ],
                [
                    'name' => 'Ips',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IP列表，多值时使用逗号分割',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '192.1**.*.*,192.1**.*.*',
                    ],
                ],
                [
                    'name' => 'Ports',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端口信息，格式为：`端口名称:端口值`，多值时使用逗号分割',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http:8000,http:8001',
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签列表，多值时使用逗号分割',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'app=http-workload',
                    ],
                ],
                [
                    'name' => 'Annotations',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务注解，多值时使用逗号分割',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'env=staging,group=0001',
                    ],
                ],
                [
                    'name' => 'ServiceAccount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务账号',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http-sa',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制跳过创建失败项，默认值为`false`',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                            'Data' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => '...',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"...\\",\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>BD65C0AD-D3C6-48D3-8D93-38D2015C****</RequestId>\\n<Data>...</Data>","errorExample":""}]',
            'title' => '添加非容器应用到服务网格',
            'summary' => '调用AddVmAppToMesh接口添加非容器应用到服务网格。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '```'."\n"
                .' {'."\n"
                .'  "RequestId": "9522f7c9-63a1-4603-b850-37d12a1e****",'."\n"
                .'  "Data": {'."\n"
                .'    "mesh-expansion-http-service": {'."\n"
                .'      "metadata": {'."\n"
                .'        "generation": 1,'."\n"
                .'        "uid": "95717103-d4b2-4c2d-b771-3acecc97****",'."\n"
                .'        "resourceVersion": "124747****",'."\n"
                .'        "creationTimestamp": "2020-08-11T09:14:45Z",'."\n"
                .'        "name": "mesh-expansion-http-service",'."\n"
                .'        "namespace": "hello",'."\n"
                .'        "selfLink": "/apis/networking.istio.io/v1alpha3/namespaces/hello/serviceentries/mesh-expansion-http-service"'."\n"
                .'      },'."\n"
                .'      "apiVersion": "networking.istio.io/v1alpha3",'."\n"
                .'      "kind": "ServiceEntry",'."\n"
                .'      "spec": {'."\n"
                .'        "workloadSelector": {'."\n"
                .'          "labels": {'."\n"
                .'            "app": "http-workload"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        "hosts": ['."\n"
                .'          "http-service.hello.svc.cluster.local"'."\n"
                .'        ],'."\n"
                .'        "location": "MESH_INTERNAL",'."\n"
                .'        "ports": ['."\n"
                .'          {'."\n"
                .'            "number": 8000,'."\n"
                .'            "protocol": "HTTP",'."\n"
                .'            "name": "http-8000"'."\n"
                .'          },'."\n"
                .'          {'."\n"
                .'            "number": 8001,'."\n"
                .'            "protocol": "HTTP",'."\n"
                .'            "name": "http-8001"'."\n"
                .'          }'."\n"
                .'        ],'."\n"
                .'        "resolution": "STATIC"'."\n"
                .'      }'."\n"
                .'    },'."\n"
                .'    "http-service": ['."\n"
                .'      {'."\n"
                .'        "metadata": {'."\n"
                .'          "uid": "b447f308-2adf-4da6-99c3-f08ad1d8****",'."\n"
                .'          "resourceVersion": "114104****",'."\n"
                .'          "name": "http-service",'."\n"
                .'          "namespace": "hello",'."\n"
                .'          "creationTimestamp": "2020-08-11T09:14:45Z",'."\n"
                .'          "annotations": {'."\n"
                .'            "env": "staging",'."\n"
                .'            "group": "0001",'."\n"
                .'            "kubernetes.io/service-account.name": "http-sa"'."\n"
                .'          },'."\n"
                .'          "selfLink": "/api/v1/namespaces/hello/services/http-service",'."\n"
                .'          "labels": {'."\n"
                .'            "app": "http-workload"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        "spec": {'."\n"
                .'          "sessionAffinity": "None",'."\n"
                .'          "ports": ['."\n"
                .'            {'."\n"
                .'              "protocol": "TCP",'."\n"
                .'              "port": 8000,'."\n"
                .'              "name": "http-8000",'."\n"
                .'              "targetPort": 8000'."\n"
                .'            },'."\n"
                .'            {'."\n"
                .'              "protocol": "TCP",'."\n"
                .'              "port": 8001,'."\n"
                .'              "name": "http-8001",'."\n"
                .'              "targetPort": 8001'."\n"
                .'            }'."\n"
                .'          ],'."\n"
                .'          "type": "ClusterIP",'."\n"
                .'          "clusterIP": "172.21.**.**"'."\n"
                .'        },'."\n"
                .'        "status": {'."\n"
                .'          "loadBalancer": {}'."\n"
                .'        }'."\n"
                .'      }'."\n"
                .'    ],'."\n"
                .'    "mesh-expansion-http-service-2": {'."\n"
                .'      "metadata": {'."\n"
                .'        "generation": 1,'."\n"
                .'        "uid": "067a9df8-806c-4614-9683-12b5404****",'."\n"
                .'        "resourceVersion": "1247474706",'."\n"
                .'        "creationTimestamp": "2020-08-11T09:14:45Z",'."\n"
                .'        "name": "mesh-expansion-http-service-2",'."\n"
                .'        "namespace": "hello",'."\n"
                .'        "selfLink": "/apis/networking.istio.io/v1alpha3/namespaces/hello/workloadentries/mesh-expansion-http-service-2"'."\n"
                .'      },'."\n"
                .'      "apiVersion": "networking.istio.io/v1alpha3",'."\n"
                .'      "kind": "WorkloadEntry",'."\n"
                .'      "spec": {'."\n"
                .'        "address": "192.168.0.3",'."\n"
                .'        "labels": {'."\n"
                .'          "app": "http-workload"'."\n"
                .'        }'."\n"
                .'      }'."\n"
                .'    },'."\n"
                .'    "mesh-expansion-http-service-1": {'."\n"
                .'      "metadata": {'."\n"
                .'        "generation": 1,'."\n"
                .'        "uid": "2b47a7e7-76f4-4a69-9988-5145e8a****",'."\n"
                .'        "resourceVersion": "12474****",'."\n"
                .'        "creationTimestamp": "2020-08-11T09:14:45Z",'."\n"
                .'        "name": "mesh-expansion-http-service-1",'."\n"
                .'        "namespace": "hello",'."\n"
                .'        "selfLink": "/apis/networking.istio.io/v1alpha3/namespaces/hello/workloadentries/mesh-expansion-http-service-1"'."\n"
                .'      },'."\n"
                .'      "apiVersion": "networking.istio.io/v1alpha3",'."\n"
                .'      "kind": "WorkloadEntry",'."\n"
                .'      "spec": {'."\n"
                .'        "address": "192.168.0.2",'."\n"
                .'        "labels": {'."\n"
                .'          "app": "http-workload"'."\n"
                .'        }'."\n"
                .'      }'."\n"
                .'    }'."\n"
                .'  }'."\n"
                .'}```',
            'extraInfo' => ' ',
        ],
        'RemoveVmAppFromMesh' => [
            'methods' => [
                'post',
                'delete',
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
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务网格ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ce51a7de4a5144db88a864ed9****',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'hello',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http-service',
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
                                'example' => '9522f7c9-63a1-4603-b850-37d12a1****',
                            ],
                            'Data' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => '...',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"...\\",\\n  \\"RequestId\\": \\"9522f7c9-63a1-4603-b850-37d12a1****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9522f7c9-63a1-4603-b850-37d12a1****</RequestId>\\n<Data>...</Data>","errorExample":""}]',
            'title' => '将VM应用从服务网格中删除',
            'summary' => '调用RemoveVmAppFromMesh将VM应用从服务网格中删除。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateMeshMultiClusterNetwork' => [
            'summary' => '更新服务网格中多个Kubernetes集群的网络分区配置',
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
                'chargeType' => 'paid',
                'abilityTreeCode' => '223128',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh4LB119',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cb8963379255149cb98c8686f274x****',
                    ],
                ],
                [
                    'name' => 'MultiClusterNetworks',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '多个Kubernetes集群的网络分区配置描述，map的键为Kubernetes集群的集群id、值为该集群的网络分区配置',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'Network' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'description' => '网络分区名称。',
                                    'example' => 'network1',
                                ],
                                'EnableGateway' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                    'description' => '是否为该集群开启东西向网关访问。'."\n"
                                        ."\n"
                                        .'* true：开启东西向网关访问'."\n"
                                        .'* false：关闭东西向网关访问',
                                ],
                                'CustomGatewayAddress' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'description' => '自定义的东西向网关访问地址。格式为ip:port。',
                                    'example' => '8.16x.1x.1x:15443',
                                ],
                            ],
                            'description' => 'Kubernetes集群的网络分区配置。',
                        ],
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'ERR404',
                        'errorMessage' => 'Not found',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","type":"json"}]',
            'title' => '更新多集群网络分区配置',
        ],
        'DescribeMeshMultiClusterNetwork' => [
            'summary' => '获取服务网格中多个Kubernetes集群的网络分区配置描述',
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
                'abilityTreeCode' => '223129',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh4LB119',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccb37ff104caf419fbf48fb38e6f3****',
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
                                'example' => '71680038-8009-5073-B43E-C057E9******',
                            ],
                            'MultiClusterNetworks' => [
                                'description' => '多个Kubernetes集群的网络分区配置描述，map的键为Kubernetes集群的集群id、值为该集群的网络分区配置。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Network' => [
                                            'type' => 'string',
                                            'example' => 'network1',
                                            'description' => '网络分区名称。',
                                        ],
                                        'EnableGateway' => [
                                            'type' => 'boolean',
                                            'description' => '是否为该集群开启东西向网关访问。'."\n"
                                                ."\n"
                                                .'* true：开启东西向网关访问'."\n"
                                                .'* false：关闭东西向网关访问',
                                            'example' => 'true',
                                        ],
                                        'GatewayName' => [
                                            'type' => 'string',
                                            'example' => 'asm-cross-network-ccb37ff104***',
                                            'description' => '为集群提供跨集群访问的东西向网关名称。',
                                        ],
                                        'CustomGatewayAddress' => [
                                            'type' => 'string',
                                            'example' => '8.16x.1x.1x:15443',
                                            'description' => '自定义的东西向网关访问地址。格式为ip:port。',
                                        ],
                                    ],
                                    'description' => '集群的网络分区配置描述。',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'ERR404',
                        'errorMessage' => 'Not found',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"71680038-8009-5073-B43E-C057E9******\\",\\n  \\"MultiClusterNetworks\\": {\\n    \\"key\\": {\\n      \\"Network\\": \\"network1\\",\\n      \\"EnableGateway\\": true,\\n      \\"GatewayName\\": \\"asm-cross-network-ccb37ff104***\\",\\n      \\"CustomGatewayAddress\\": \\"8.16x.1x.1x:15443\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取多集群网络分区配置描述',
        ],
        'ModifyPilotEipResource' => [
            'summary' => 'ModifyPilotEipResource',
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
                'abilityTreeCode' => '223301',
                'abilityTreeNodes' => [
                    'FEATUREservicemesh4LB119',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceMeshId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务网格ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c1f5a67154bec40629c2698ec********',
                    ],
                ],
                [
                    'name' => 'Operation',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '操作类型，取值：'."\n"
                            ."\n"
                            .'- `UnBindEip`：解绑EIP。'."\n"
                            ."\n"
                            .'- `BindEip`：绑定一个EIP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BindEip',
                        'enum' => [
                            'BindEip',
                            'UnBindEip',
                        ],
                    ],
                ],
                [
                    'name' => 'EipId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要绑定的弹性公网 IP 实例 Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eip-hp36jpqq5eged********',
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
                                'example' => 'BD65C0AD-D3C6-48D3-8D93-38D2015C****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'ERR500',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD65C0AD-D3C6-48D3-8D93-38D2015C****\\"\\n}","type":"json"}]',
            'title' => '解绑或绑定Pilot的EIP',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'servicemesh.aliyuncs.com',
        ],
    ],
];
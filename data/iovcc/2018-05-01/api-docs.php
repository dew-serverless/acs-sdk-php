<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'iovcc',
        'version' => '2018-05-01',
    ],
    'directories' => [
        [
            'id' => 64847,
            'title' => '版本',
            'type' => 'directory',
            'children' => [
                'CreateVersionPrepublish',
                'CreateVersionTest',
                'DeleteVersionTest',
                'ListClientPluginVersions',
                'FindPrepublishesByVersionId',
                'FindVersionTests',
            ],
        ],
        [
            'id' => 64854,
            'title' => '诊断',
            'type' => 'directory',
            'children' => [
                'DescribeAssistReport',
                'ListAssistActionDetails',
                'ListAssistHistories',
                'ListAssistHistoryDetails',
                'DescribeAssistRTMPServerAddress',
                'SubmitAssistReport',
            ],
        ],
        [
            'id' => 64862,
            'title' => '属性',
            'type' => 'directory',
            'children' => [
                'CreateCustomizedProperty',
                'DeleteCustomizedProperty',
                'FindCustomizedProperties',
            ],
        ],
        [
            'id' => 64866,
            'title' => '过滤',
            'type' => 'directory',
            'children' => [
                'CreateCustomizedFilter',
                'DeleteAllCustomizedFilters',
                'DeleteCustomizedFilter',
                'UpdateCustomizedFilter',
                'DescribeCustomizedFilter',
                'FindCustomizedFilters',
            ],
        ],
        [
            'id' => 64873,
            'title' => 'SDK',
            'type' => 'directory',
            'children' => [
                'ListClientSdks',
                'GenerateSdkDownloadInfo',
            ],
        ],
        [
            'id' => 64876,
            'title' => '订阅',
            'type' => 'directory',
            'children' => [
                'CreateSchemaSubscribe',
                'DeleteSchemaSubscribe',
                'UpdateSchemaSubscribe',
                'ListSchemaSubscribes',
            ],
        ],
        [
            'id' => 64883,
            'title' => '命名空间',
            'type' => 'directory',
            'children' => [
                'CreateNamespace',
                'DeleteNamespace',
                'UpdateNamespaceData',
                'GetNamespaceData',
                'GetNamespaceStatisticsData',
                'ListNamespaces',
            ],
        ],
        [
            'id' => 64890,
            'title' => '账号',
            'type' => 'directory',
            'children' => [
                'DeleteOpenAccount',
                'ListOpenAccountLinks',
                'ListOpenAccounts',
                'DescribeOpenAccount',
            ],
        ],
        [
            'id' => 64895,
            'title' => '消息',
            'type' => 'directory',
            'children' => [
                'CreateUpstreamAppKeyRelation',
                'CreateUpstreamAppServer',
                'DeleteUpstreamAppKeyRelation',
                'DeleteUpstreamAppServer',
                'UpdateUpstreamAppServer',
                'ListMessageAcks',
                'ListOfflineMessages',
                'DescribeMessage',
                'PushVersionMessage',
                'FindVersionMessages',
                'FindVersionMessageSendRecords',
            ],
        ],
        [
            'id' => 64910,
            'title' => '应用版本',
            'type' => 'directory',
            'children' => [
                'CreateAppVersion',
                'UpdateAppBlackWhiteVersions',
                'UpdateAppVersionReleaseNote',
                'UpdateAppVersionStatus',
                'UpdateAppVersion',
                'UpdateAppVersionRemark',
                'GetDeviceAppUpdateFunnelEvents',
                'PublishAppVersion',
                'FindAppVersions',
            ],
        ],
        [
            'id' => 64920,
            'title' => '系统版本',
            'type' => 'directory',
            'children' => [
                'AddVersionBlackDevices',
                'CreateOsVersion',
                'DeleteVersionBlackDevices',
                'DeleteVersionBlackDevicesById',
                'DeleteVersionWhiteDevices',
                'DeleteVersionWhiteDevicesById',
                'UpdateOsBlackWhiteVersions',
                'UpdateOsVersion',
                'UpdateOsVersionReleaseNote',
                'UpdateOsVersionRemark',
                'UpdateOsVersionStatus',
                'DescribeAppVersion',
                'DescribeOsVersion',
                'GetDeviceSystemUpdateFunnelEvents',
                'DelayPublishOsVersion',
                'FindOsVersions',
                'FindVersionWhiteDevices',
                'PublishOsVersion',
            ],
        ],
        [
            'id' => 64944,
            'title' => 'Schema',
            'type' => 'directory',
            'children' => [
                'CreateShadowSchema',
                'DeleteShadowSchema',
                'UpdateShadowSchema',
                'ListShadowSchemaDeviceModels',
                'ListShadowSchemas',
                'DescribeDefaultSchema',
                'DescribeDeviceValiditySchema',
                'DescribeShadowSchema',
            ],
        ],
        [
            'id' => 64953,
            'title' => '函数',
            'type' => 'directory',
            'children' => [
                'AddUploadedFunctionFileInfo',
                'DeleteFunctionFile',
                'ListDeployedFunctions',
                'ListFunctionExecuteLog',
                'ListFunctionFiles',
                'ListFunctionFilesByProjectId',
                'GenerateFunctionFileUploadMeta',
                'InvokeFunction',
                'DeployFunctionFile',
            ],
        ],
        [
            'id' => 64963,
            'title' => '触发器',
            'type' => 'directory',
            'children' => [
                'CreateTrigger',
                'DeleteTrigger',
                'UpdateTrigger',
                'ListTriggers',
            ],
        ],
        [
            'id' => 64968,
            'title' => '设备',
            'type' => 'directory',
            'children' => [
                'AddVersionGroupDevices',
                'AddVersionWhiteDevices',
                'AddVersionWhiteDevicesByDeviceGroups',
                'CreateDeviceBrand',
                'CreateDeviceModel',
                'CreateVersionDeviceGroup',
                'DeleteAllVersionGroupDevices',
                'DeleteDevice',
                'DeleteVersionAllBlackDevices',
                'DeleteVersionAllWhiteDevices',
                'DeleteVersionDeviceGroup',
                'DeleteVersionGroupDevice',
                'DeleteVersionGroupDeviceById',
                'UpdateDeviceModel',
                'UpdateVersionDeviceGroup',
                'UpdateApiGatewayAppStatus',
                'UpdateProject',
                'DescribeDeviceModel',
                'DescribeDeviceOnlineInfo',
                'DescribeDeviceShadow',
                'DescribeVersionDeviceGroup',
                'QueryPrepublishPassedDeviceCount',
                'ListVersionDeviceGroups',
                'ListAssistDevices',
                'ListConnectLogs',
                'ListDeviceModels',
                'ListDevices',
                'ListDeviceTypes',
                'ListMessageReceivers',
                'DescribeDeviceBrand',
                'DescribeDeviceIdByOuterInfo',
                'DescribeDeviceInfo',
                'ConnectAssistDevice',
                'CountActivatedOrNewRegistrationDevice',
                'CountDeviceBrands',
                'CountDeviceModels',
                'CountDevices',
                'CountYunIdInfo',
                'DiagnosisVersion',
                'FindPrepublishPassedDevices',
                'FindVersionBlackDevices',
                'PushMessage',
                'FindVersionDeviceGroups',
                'FindVersionGroupDevices',
            ],
        ],
        [
            'id' => 65016,
            'title' => '项目',
            'type' => 'directory',
            'children' => [
                'CreateProjectApp',
                'ListProjectApps',
                'ListProjects',
                'DescribeProjectAppSecurity',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'CreateRpcService',
                'DeleteProjectApp',
                'DeleteRpcService',
                'DescribeAssistWSServerAddress',
                'FindPrepublishesByParentId',
                'GenerateOssUploadMeta',
                'GenerateSysAppDownloadInfo',
                'GetOssUploadMeta',
                'ListApiGatewayApps',
                'ListApps',
                'ListClientPlugins',
                'ListDeviceBrands',
                'ListPreChecks',
                'ListRpcServices',
                'ListSupportFeatures',
                'ListUpstreamAppKeyRelations',
                'ListUpstreamAppServers',
                'UpdateVersionPrepublishActiveStatus',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateVersionPrepublish' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'IsTotalPrepublish',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为总量预发布。取值：**Y | N**。'."\n"
                            ."\n"
                            .'> 总量预发布表示该预发布允许的设备数不会按照机型数平均分配，而是所有机型共享同一个允许设备数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，取值：'."\n"
                            ."\n"
                            .'- **FOTA**：系统版本'."\n"
                            .'- **APP**：应用版本',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预发布名',
                        'type' => 'string',
                        'required' => true,
                        'example' => '第一次预发布',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'BarrierCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预发布允许设备数',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1000',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'PrepublishId' => [
                                'description' => '创建的预发布ID',
                                'type' => 'string',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrepublishId\\": \\"1\\",\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<CreateVersionPrepublishResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<PrepublishId>1</PrepublishId>\\r\\n</CreateVersionPrepublishResponse>","errorExample":""}]',
            'title' => '创建一个版本预发布',
            'summary' => '调用CreateVersionPrepublish创建一个版本预发布。',
            'description' => '创建一个版本预发布，只允许在版本是“测试已通过”或“预发布”状态时才可创建。'."\n"
                ."\n"
                .'- 系统版本只有一个机型，所以预发布只针对该机型。'."\n"
                .'- 应用版本可能有多个机型，预发布可根据**IsTotalPrepublish**参数决定，是对所有机型平均分配允许设备数，或是所有机型共享总允许设备数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateVersionTest' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试设备分组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '第一次测试',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型。取值：'."\n"
                            ."\n"
                            .'- **FOTA**：系统版本'."\n"
                            .'- **APP**：应用版本',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试名',
                        'type' => 'string',
                        'required' => true,
                        'example' => '第一次测试',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TestId' => [
                                'description' => '创建出的测试ID',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TestId\\": \\"1\\",\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<CreateVersionTestResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<TestId>1</TestId>\\r\\n</CreateVersionTestResponse>","errorExample":""}]',
            'title' => '创建系统或应用版本测试',
            'summary' => '创建一个系统或应用版本的测试，并向测试分组中的设备推送升级消息。',
            'description' => '在版本测试阶段时，需要对指定的一小批设备进行升级测试。依赖已创建出的测试设备分组，测试的目标设备在测试设备分组中管理。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVersionTest' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<DeleteVersionTestResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteVersionTestResponse>","errorExample":""}]',
            'title' => '删除版本下指定的测试',
            'summary' => '调用DeleteVersionTest删除版本下指定的测试。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListClientPluginVersions' => [
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
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统类型，1-Android。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PkgName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '插件包名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'com.aliyun.aicc.yundevice',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ClientPluginVersions' => [
                                'description' => '客户端插件版本信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Version' => [
                                            'description' => '版本名称',
                                            'type' => 'string',
                                            'example' => '1.1.1.20180103102554-3',
                                        ],
                                        'DownloadUrl' => [
                                            'description' => '下载地址',
                                            'type' => 'string',
                                            'example' => 'http://xxxxx.oss-cn-shanghai.aliyuncs.com/1046834015363116/xxx/2019-09-17/1568704641998-com.aliyun.aicc-1.2-36-g4e4b62e.apk?spm=5176.11279587.0.0.f7944f48XVfS6a&Expires=1568708242&OSSAccessKeyId=xxxx&Signature=xxx%3D&response-content-disposition=attachment%3Bfilename%3Dcom.aliyun.aicc-1.2-36-g4e4b62e.apk%3Bfilename%2A%3DUTF-8%27%27com.aliyun.aicc-1.2-36-g4e4b62e.apk',
                                        ],
                                        'Size' => [
                                            'description' => '插件包大小，单位：Byte',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '743503',
                                        ],
                                        'PkgName' => [
                                            'description' => '插件包名',
                                            'type' => 'string',
                                            'example' => 'com.aliyun.aicc.yundevice',
                                        ],
                                        'VersionCode' => [
                                            'description' => '版本号',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '201',
                                        ],
                                        'Id' => [
                                            'description' => '版本ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '40',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '647D4B28-7646-424E-88DD-61B7969E5C1E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"647D4B28-7646-424E-88DD-61B7969E5C1E\\",\\n  \\"ClientPluginVersions\\": [\\n    {\\n      \\"Version\\": \\"1.1.1.20180103102554-3\\",\\n      \\"DownloadUrl\\": \\"http://xxxxx.oss-cn-shanghai.aliyuncs.com/1046834015363116/xxx/2019-09-17/1568704641998-com.aliyun.aicc-1.2-36-g4e4b62e.apk?spm=5176.11279587.0.0.f7944f48XVfS6a&Expires=1568708242&OSSAccessKeyId=xxxx&Signature=xxx%3D&response-content-disposition=attachment%3Bfilename%3Dcom.aliyun.aicc-1.2-36-g4e4b62e.apk%3Bfilename%2A%3DUTF-8%27%27com.aliyun.aicc-1.2-36-g4e4b62e.apk\\",\\n      \\"Size\\": 743503,\\n      \\"PkgName\\": \\"com.aliyun.aicc.yundevice\\",\\n      \\"VersionCode\\": 201,\\n      \\"Id\\": 40\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListClientPluginVersionsResponse>\\r\\n\\t<RequestId>7257DEDE-3558-4AE5-BA9B-2AD7A4FFB61E</RequestId>\\r\\n\\t<ClientPluginVersions>\\r\\n\\t\\t<VersionCode>201</VersionCode>\\r\\n\\t\\t<Id>40</Id>\\r\\n\\t\\t<PkgName>com.aliyun.aicc.yundevice</PkgName>\\r\\n\\t\\t<Version>1.1.1.20180103102554-3</Version>\\r\\n\\t\\t<Size>743503</Size>\\r\\n\\t</ClientPluginVersions>\\r\\n</ListClientPluginVersionsResponse>","errorExample":""}]',
            'title' => '根据指定的插件包名查询该插件的版本列表',
            'summary' => '调用ListClientPluginVersions根据指定的插件包名查询该插件的版本列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindPrepublishesByVersionId' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，取值有：FOTA 系统版本，APP 应用版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'PrepublishList' => [
                                'description' => '查询预发布结果列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'GmtCreateTimestamp' => [
                                            'description' => '创建时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1684530000000',
                                        ],
                                        'DeviceModelId' => [
                                            'description' => '设备型号ID',
                                            'type' => 'string',
                                            'example' => '12',
                                        ],
                                        'GmtModify' => [
                                            'description' => '修改时间',
                                            'type' => 'string',
                                            'example' => '2018-01-01 00:01:00',
                                        ],
                                        'IsActive' => [
                                            'description' => '预发布是否为启用状态',
                                            'type' => 'string',
                                            'example' => 'Y',
                                        ],
                                        'VersionId' => [
                                            'description' => '版本ID',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'BarrierCount' => [
                                            'description' => '预发布允许设备数',
                                            'type' => 'string',
                                            'example' => '1000',
                                        ],
                                        'DeviceModelName' => [
                                            'description' => '机型名',
                                            'type' => 'string',
                                            'example' => 'DM1',
                                        ],
                                        'IsTotalPrepublish' => [
                                            'description' => '是否为总量预发布',
                                            'type' => 'string',
                                            'example' => 'N',
                                        ],
                                        'GmtModifyTimestamp' => [
                                            'description' => '修改时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1684530000000',
                                        ],
                                        'ParentId' => [
                                            'description' => '父预发布ID，为0表示该预发布为父预发布',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2018-01-01 00:00:00',
                                        ],
                                        'Name' => [
                                            'description' => '预发布名',
                                            'type' => 'string',
                                            'example' => '第一次预发布',
                                        ],
                                        'Id' => [
                                            'description' => 'ID',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'VersionType' => [
                                            'description' => '版本类型，取值有： FOTA 系统版本， APP 应用版本。',
                                            'type' => 'string',
                                            'example' => 'FOTA',
                                        ],
                                        'PassedCount' => [
                                            'description' => '已查询设备数	',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"PrepublishList\\": [\\n    {\\n      \\"GmtCreateTimestamp\\": 1684530000000,\\n      \\"DeviceModelId\\": \\"12\\",\\n      \\"GmtModify\\": \\"2018-01-01 00:01:00\\",\\n      \\"IsActive\\": \\"Y\\",\\n      \\"VersionId\\": \\"1\\",\\n      \\"BarrierCount\\": \\"1000\\",\\n      \\"DeviceModelName\\": \\"DM1\\",\\n      \\"GmtModifyTimestamp\\": 1684530000000,\\n      \\"IsTotalPrepublish\\": \\"N\\",\\n      \\"ParentId\\": \\"0\\",\\n      \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n      \\"Name\\": \\"第一次预发布\\",\\n      \\"Id\\": \\"1\\",\\n      \\"VersionType\\": \\"FOTA\\",\\n      \\"PassedCount\\": \\"0\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<FindPrepublishesByVersionIdResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<PrepublishList>\\r\\n\\t\\t<Id>1</Id>\\r\\n\\t\\t<VersionType>1.0,2.0</VersionType>\\r\\n\\t\\t<VersionId>1</VersionId>\\r\\n\\t\\t<ParentId>1</ParentId>\\r\\n\\t\\t<Name>第一次预发布</Name>\\r\\n\\t\\t<DeviceModelId>12</DeviceModelId>\\r\\n\\t\\t<IsTotalPrepublish>N</IsTotalPrepublish>\\r\\n\\t\\t<BarrierCount>1000</BarrierCount>\\r\\n\\t\\t<IsActive>Y</IsActive>\\r\\n\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t<GmtModify>2018-01-01 00:01:00</GmtModify>\\r\\n\\t</PrepublishList>\\r\\n</FindPrepublishesByVersionIdResponse>","errorExample":""}]',
            'title' => '查询版本下的预发布列表',
            'summary' => '调用FindPrepublishesByVersionId查询版本下的预发布列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindVersionTests' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本页开始序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，取值有： FOTA 系统版本， APP 应用版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FOTA',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'VersionTestList' => [
                                'description' => '版本测试的查询结果',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '返回记录列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtCreateTimestamp' => [
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1685450000',
                                                ],
                                                'GmtModify' => [
                                                    'description' => '修改时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:01:00',
                                                ],
                                                'VersionId' => [
                                                    'description' => '版本ID',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'GmtModifyTimestamp' => [
                                                    'description' => '修改时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1685450000',
                                                ],
                                                'FailedCount' => [
                                                    'description' => '发送消息失败数',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'DeviceGroupId' => [
                                                    'description' => '测试设备分组ID',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'SkippedCount' => [
                                                    'description' => '跳过消息数',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'Description' => [
                                                    'description' => '测试描述',
                                                    'type' => 'string',
                                                    'example' => '测试描述',
                                                ],
                                                'SucceededCount' => [
                                                    'description' => '发送消息成功数',
                                                    'type' => 'string',
                                                    'example' => '100',
                                                ],
                                                'DeviceGroupName' => [
                                                    'description' => '测试设备分组名称',
                                                    'type' => 'string',
                                                    'example' => '测试分组',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:00:00',
                                                ],
                                                'Name' => [
                                                    'description' => '测试名',
                                                    'type' => 'string',
                                                    'example' => '第一次测试',
                                                ],
                                                'Id' => [
                                                    'description' => '测试ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'VersionType' => [
                                                    'description' => '版本类型，取值有： FOTA 系统版本， APP 应用版本',
                                                    'type' => 'string',
                                                    'example' => 'FOTA',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '符合条件的记录总数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"VersionTestList\\": {\\n    \\"TotalCount\\": 30,\\n    \\"Items\\": [\\n      {\\n        \\"GmtCreateTimestamp\\": 1685450000,\\n        \\"GmtModify\\": \\"2018-01-01 00:01:00\\",\\n        \\"VersionId\\": \\"1\\",\\n        \\"GmtModifyTimestamp\\": 1685450000,\\n        \\"DeviceGroupId\\": \\"1\\",\\n        \\"FailedCount\\": \\"0\\",\\n        \\"SkippedCount\\": \\"0\\",\\n        \\"Description\\": \\"测试描述\\",\\n        \\"DeviceGroupName\\": \\"测试分组\\",\\n        \\"SucceededCount\\": \\"100\\",\\n        \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n        \\"Name\\": \\"第一次测试\\",\\n        \\"Id\\": 1,\\n        \\"VersionType\\": \\"FOTA\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<FindVersionTestsResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<VersionTestList>\\r\\n\\t\\t<TotalCount>30</TotalCount>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<Id>1</Id>\\r\\n\\t\\t\\t<VersionType>FOTA</VersionType>\\r\\n\\t\\t\\t<VersionId>1</VersionId>\\r\\n\\t\\t\\t<Name>第一次测试</Name>\\r\\n\\t\\t\\t<DeviceGroupId>1</DeviceGroupId>\\r\\n\\t\\t\\t<DeviceGroupName>测试分组</DeviceGroupName>\\r\\n\\t\\t\\t<Description>测试描述</Description>\\r\\n\\t\\t\\t<SucceededCount>100</SucceededCount>\\r\\n\\t\\t\\t<FailedCount>0</FailedCount>\\r\\n\\t\\t\\t<SkippedCount>0</SkippedCount>\\r\\n\\t\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t\\t<GmtModify>2018-01-01 00:01:00</GmtModify>\\r\\n\\t\\t</Items>\\r\\n\\t</VersionTestList>\\r\\n</FindVersionTestsResponse>","errorExample":""}]',
            'title' => '分页查询版本测试列表',
            'summary' => '调用FindVersionTests分页查询版本测试列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAssistReport' => [
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PZ1HK7JZ',
                    ],
                ],
                [
                    'name' => 'AssistId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '远程诊断会话ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '510',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'AssistResult' => [
                                'description' => '诊断结论。',
                                'type' => 'string',
                                'example' => '手动设置正确时间',
                            ],
                            'AssistReason' => [
                                'description' => '诊断原因定位，描述问题的主要原因。',
                                'type' => 'string',
                                'example' => '没有和时间服务器同步',
                            ],
                            'AssistId' => [
                                'description' => '诊断会话ID。',
                                'type' => 'string',
                                'example' => '510',
                            ],
                            'AssistDescription' => [
                                'description' => '诊断缺陷描述，描述问题现象、复现步骤。',
                                'type' => 'string',
                                'example' => '设备时间异常',
                            ],
                            'AssistTag' => [
                                'description' => '诊断标签，用于历史查询，按空格分隔。',
                                'type' => 'string',
                                'example' => '系统时间',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"AssistTag\\": \\"系统时间\\",\\n  \\"AssistReason\\": \\"没有和时间服务器同步\\",\\n  \\"AssistDescription\\": \\"设备时间异常\\",\\n  \\"AssistId\\": \\"510\\",\\n  \\"AssistResult\\": \\"手动设置正确时间\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<DescribeAssistReportResponse>\\r\\n\\t<RequestId>6F0A833B-7A86-4D92-A083-C184041E2F2D</RequestId>\\r\\n\\t<AssistId>510</AssistId>\\r\\n\\t<AssistDescription>设备时间异常</AssistDescription>\\r\\n\\t<AssistReason>没有和时间服务器同步</AssistReason>\\r\\n\\t<AssistResult>手动设置正确时间</AssistResult>\\r\\n\\t<AssistTag>time</AssistTag>\\r\\n</DescribeAssistReportResponse>","errorExample":""}]',
            'title' => '获取指定的远程诊断报告',
            'summary' => '调用DescribeAssistReport获取指定的远程诊断报告。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAssistActionDetails' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ActionTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行操作的时间戳ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1524560714502LwoJKfp',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PZ1HK7JZ',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'Results' => [
                                'description' => '操作详情列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '操作类型',
                                            'type' => 'string',
                                            'example' => 'event',
                                        ],
                                        'Action' => [
                                            'description' => '操作',
                                            'type' => 'string',
                                            'example' => 'top',
                                        ],
                                        'Data' => [
                                            'description' => '操作结果',
                                            'type' => 'string',
                                            'example' => 'Processes: 331 total, 2 running, 329 sleeping, 1936 threads',
                                        ],
                                        'DeviceId' => [
                                            'description' => '设备ID',
                                            'type' => 'string',
                                            'example' => '37aac8e7d96c42ea94fd5408e351474e',
                                        ],
                                        'CreatedAt' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1525767660000',
                                        ],
                                        'UpdatedAt' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1525767660000',
                                        ],
                                        'Timestamp' => [
                                            'description' => '操作时间戳ID',
                                            'type' => 'string',
                                            'example' => '1525398712826BdAw5KN',
                                        ],
                                        'ID' => [
                                            'description' => '操作ID',
                                            'type' => 'string',
                                            'example' => '40475',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"Results\\": [\\n    {\\n      \\"Type\\": \\"event\\",\\n      \\"Action\\": \\"top\\",\\n      \\"Data\\": \\"Processes: 331 total, 2 running, 329 sleeping, 1936 threads\\",\\n      \\"DeviceId\\": \\"37aac8e7d96c42ea94fd5408e351474e\\",\\n      \\"CreatedAt\\": 1525767660000,\\n      \\"UpdatedAt\\": 1525767660000,\\n      \\"Timestamp\\": \\"1525398712826BdAw5KN\\",\\n      \\"ID\\": \\"40475\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<ListAssistActionDetailsResponse>\\r\\n<RequestId>6F0A833B-7A86-4D92-A083-C184041E2F2D</RequestId>\\r\\n\\t<ResultList>\\r\\n\\t\\t<Action>top</Action>\\r\\n\\t\\t<CreatedAt>1525767660000</CreatedAt>\\r\\n\\t\\t<UpdatedAt>1525767660000</UpdatedAt>\\r\\n\\t\\t<Data>Processes: 331 total, 2 running, 329 sleeping, 1936 threads</Data>\\r\\n\\t\\t<DeviceId>37aac8e7d96c42ea94fd5408e351474e</DeviceId>\\r\\n\\t\\t<ID>40475</ID>\\r\\n\\t\\t<Timestamp>1525398712826BdAw5KN</Timestamp>\\r\\n\\t\\t<Type>event</Type>\\r\\n\\t</ResultList>\\r\\n\\t<ResultList>\\r\\n\\t\\t<Action>top</Action>\\r\\n\\t\\t<CreatedAt>2018-04-24 17:05:15</CreatedAt>\\r\\n\\t\\t<UpdatedAt>2018-04-24 17:05:15</UpdatedAt>\\r\\n\\t\\t<Data>Load Avg: 2.38, 2.23, 2.06  CPU usage: 8.52% user, 4.80% sys, 86.67% idle  SharedLibs: 142M resident, 42M data, 17M linkedit.</Data>\\r\\n\\t\\t<DeviceId>37aac8e7d96c42ea94fd5408e351474e</DeviceId>\\r\\n\\t\\t<ID>40476</ID>\\r\\n\\t\\t<Timestamp>1525398712826BdAw5KN</Timestamp>\\r\\n\\t\\t<Type>event</Type>\\r\\n\\t</ResultList>\\r\\n</ListAssistActionDetailsResponse>","errorExample":""}]',
            'title' => '获取指定诊断操作的详情信息',
            'summary' => '调用ListAssistActionDetails获取指定诊断操作的详情信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAssistHistories' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PerPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页数目',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询条件',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"vin":"LVFAG7A31HK000029"}',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PZ1HK7JZ',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总数目',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '46',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'PerPage' => [
                                'description' => '每页数目',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Histories' => [
                                'description' => '历史列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SerialNumber' => [
                                            'description' => '序列号',
                                            'type' => 'string',
                                            'example' => 'BALFL8429SN',
                                        ],
                                        'EndTime' => [
                                            'description' => '结束时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1525767680000',
                                        ],
                                        'StartTime' => [
                                            'description' => '开始时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1525767660000',
                                        ],
                                        'UNAME' => [
                                            'description' => '操作者用户名',
                                            'type' => 'string',
                                            'example' => 'admin',
                                        ],
                                        'HardwareId' => [
                                            'description' => '硬件ID',
                                            'type' => 'string',
                                            'example' => 'BALFL8429HI',
                                        ],
                                        'DeviceName' => [
                                            'description' => '设备名称',
                                            'type' => 'string',
                                            'example' => 'Model S',
                                        ],
                                        'UUID' => [
                                            'description' => 'AliOS设备UUID',
                                            'type' => 'string',
                                            'example' => '842972B2C0F4C9F030E60769CA65806A',
                                        ],
                                        'DeviceId' => [
                                            'description' => '设备ID',
                                            'type' => 'string',
                                            'example' => '6fde56979c484b93b99fba257e3cbe83',
                                        ],
                                        'VIN' => [
                                            'description' => '车架号',
                                            'type' => 'string',
                                            'example' => 'LHK000026VFAG7A31',
                                        ],
                                        'UID' => [
                                            'description' => '操作者用户ID',
                                            'type' => 'string',
                                            'example' => '12345',
                                        ],
                                        'ID' => [
                                            'description' => '诊断会话ID',
                                            'type' => 'string',
                                            'example' => '510',
                                        ],
                                    ],
                                ],
                            ],
                            'PageIndex' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageIndex\\": 1,\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"TotalCount\\": 46,\\n  \\"PerPage\\": 20,\\n  \\"Histories\\": [\\n    {\\n      \\"SerialNumber\\": \\"BALFL8429SN\\",\\n      \\"EndTime\\": 1525767680000,\\n      \\"StartTime\\": 1525767660000,\\n      \\"UNAME\\": \\"admin\\",\\n      \\"HardwareId\\": \\"BALFL8429HI\\",\\n      \\"DeviceName\\": \\"Model S\\",\\n      \\"UUID\\": \\"842972B2C0F4C9F030E60769CA65806A\\",\\n      \\"DeviceId\\": \\"6fde56979c484b93b99fba257e3cbe83\\",\\n      \\"VIN\\": \\"LHK000026VFAG7A31\\",\\n      \\"UID\\": \\"12345\\",\\n      \\"ID\\": \\"510\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<ListAssistHistoriesResponse>\\r\\n<RequestId>6F0A833B-7A86-4D92-A083-C184041E2F2D</RequestId>\\r\\n\\t<PageIndex>1</PageIndex>\\r\\n\\t<PerPage>20</PerPage>\\r\\n\\t<TotalCount>2</TotalCount>\\r\\n\\t<Histories>\\r\\n\\t\\t<ID>510</ID>\\r\\n\\t\\t<DeviceId>37aac8e7d96c42ea94fd5408e351474e</DeviceId>\\r\\n\\t\\t<DeviceName>phone</DeviceName>\\r\\n\\t\\t<VIN>LVFAG7A31HK000029</VIN>\\r\\n\\t\\t<SerialNumber>DX3JNY1FDTD2</SerialNumber>\\r\\n\\t\\t<UID>12345</UID>\\r\\n\\t\\t<UNAME>admin</UNAME>\\r\\n\\t\\t<StartTime>1513231605000</StartTime>\\r\\n\\t\\t<EndTime>1513231705000</EndTime>\\r\\n\\t</Histories>\\r\\n\\t<Histories>\\r\\n\\t\\t<ID>511</ID>\\r\\n\\t\\t<DeviceId>37aac8e7d96c42ea94fd5408e351474e</DeviceId>\\r\\n\\t\\t<DeviceName>phone</DeviceName>\\r\\n\\t\\t<VIN>LVFAG7A31HK000029</VIN>\\r\\n\\t\\t<SerialNumber>DX3JNY1FDTD2</SerialNumber>\\r\\n\\t\\t<UID>12345</UID>\\r\\n\\t\\t<UNAME>admin</UNAME>\\r\\n\\t\\t<StartTime>1513231705000</StartTime>\\r\\n\\t\\t<EndTime>1513231905000</EndTime>\\r\\n\\t</Histories>\\r\\n</ListAssistHistoriesResponse>","errorExample":""}]',
            'title' => '获取远程诊断历史列表',
            'summary' => '调用ListAssistHistories获取远程诊断历史列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAssistHistoryDetails' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PZ1HK7JZ',
                    ],
                ],
                [
                    'name' => 'AssistId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '诊断会话ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '510',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'Actions' => [
                                'description' => '操作列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Action' => [
                                            'description' => '操作',
                                            'type' => 'string',
                                            'example' => 'top',
                                        ],
                                        'CreatedAt' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1525767660000',
                                        ],
                                        'Timestamp' => [
                                            'description' => '操作时间戳ID',
                                            'type' => 'string',
                                            'example' => '1524560987853KrvUfI1',
                                        ],
                                        'UpdatedAt' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1525767660000',
                                        ],
                                        'AssistId' => [
                                            'description' => '诊断会话ID',
                                            'type' => 'string',
                                            'example' => '510',
                                        ],
                                        'ID' => [
                                            'description' => '操作ID',
                                            'type' => 'string',
                                            'example' => '40475',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"Actions\\": [\\n    {\\n      \\"Action\\": \\"top\\",\\n      \\"CreatedAt\\": 1525767660000,\\n      \\"Timestamp\\": \\"1524560987853KrvUfI1\\",\\n      \\"UpdatedAt\\": 1525767660000,\\n      \\"AssistId\\": \\"510\\",\\n      \\"ID\\": \\"40475\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<ListAssistHistoryDetailsResponse>\\r\\n\\t<RequestId>6F0A833B-7A86-4D92-A083-C184041E2F2D</RequestId>\\r\\n\\t<ActionList>\\r\\n\\t\\t<ID>45070</ID>\\r\\n\\t\\t<AssistId>510</AssistId>\\r\\n\\t\\t<Action>ls</Action>\\r\\n\\t\\t<Timestamp>1524560987853KrvUfI1</Timestamp>\\r\\n\\t\\t<CreatedAt>2018-04-24T09:09:57</CreatedAt>\\r\\n\\t\\t<UpdatedAt>2018-04-24T09:09:59</UpdatedAt>\\r\\n\\t</ActionList>\\r\\n\\t<ActionList>\\r\\n\\t\\t<ID>45071</ID>\\r\\n\\t\\t<AssistId>510</AssistId>\\r\\n\\t\\t<Action>top</Action>\\r\\n\\t\\t<Timestamp>1524560758970zQCkx3A</Timestamp>\\r\\n\\t\\t<CreatedAt>2018-04-24T09:29:41</CreatedAt>\\r\\n\\t\\t<UpdatedAt>2018-04-24T09:29:41</UpdatedAt>\\r\\n\\t</ActionList>\\r\\n</ListAssistHistoryDetailsResponse>","errorExample":""}]',
            'title' => '获取指定诊断历史的详情',
            'summary' => '获取指定诊断历史的详情，即所执行的命令列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAssistRTMPServerAddress' => [
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PZ1HK7JZ',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6fde56979c484b93b99fba257e3cbe83',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'RTMPServer' => [
                                'description' => 'RTMP服务器地址',
                                'type' => 'string',
                                'example' => 'ra-service-qa.aicc.aliyun.com',
                            ],
                            'OTP' => [
                                'description' => '一次性验证码',
                                'type' => 'string',
                                'example' => 'ewga5dxHOB8Lm9VH',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RTMPServer\\": \\"ra-service-qa.aicc.aliyun.com\\",\\n  \\"OTP\\": \\"ewga5dxHOB8Lm9VH\\",\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<DescribeAssistRTMPServerAddressResponse>\\r\\n\\t<RequestId>6F0A833B-7A86-4D92-A083-C184041E2F2D</RequestId>\\r\\n\\t<RTMPServer>ra-rtmp.aicc.aliyun.com</RTMPServer>\\r\\n\\t<OTP>ewga5dxHOB8Lm9VH</OTP>\\r\\n</DescribeAssistRTMPServerAddressResponse>","errorExample":""}]',
            'title' => '获取远程桌面RTMP服务器地址',
            'summary' => '调用DescribeAssistRTMPServerAddress获取远程桌面RTMP服务器地址。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SubmitAssistReport' => [
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
                    'name' => 'ProjectId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PZ1HK7JZ',
                    ],
                ],
                [
                    'name' => 'AssistId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '诊断会话ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '510',
                    ],
                ],
                [
                    'name' => 'AssistDescription',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '诊断缺陷描述，描述问题现象、复现步骤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '设备时间异常',
                    ],
                ],
                [
                    'name' => 'AssistResult',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '诊断结论。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '手动设置正确时间',
                    ],
                ],
                [
                    'name' => 'AssistTag',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '诊断标签，用于历史查询，按空格分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '系统时间',
                    ],
                ],
                [
                    'name' => 'AssistReason',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '诊断原因定位，描述问题的主要原因。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '没有和时间服务器同步',
                    ],
                ],
                [
                    'name' => 'DeviceModel',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备model。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ModelS',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<SubmitAssistReportResponse>\\r\\n\\t<RequestId>6F0A833B-7A86-4D92-A083-C184041E2F2D</RequestId>\\r\\n</SubmitAssistReportResponse>","errorExample":""}]',
            'title' => '提交远程诊断报告',
            'summary' => '调用SubmitAssistReport提交远程诊断报告。',
            'description' => '> 对于一次诊断，首次提交会创建一份报告，后续提交会更新报告内容。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateCustomizedProperty' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义属性名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AnotherWhiteList',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义属性值',
                        'type' => 'string',
                        'required' => true,
                        'example' => '100,200',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型。取值： '."\n"
                            ."\n"
                            .'- **FOTA**：系统版本'."\n"
                            .'- **APP**：应用版本',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'CustomizedPropertyId' => [
                                'description' => '创建出的自定义属性的ID',
                                'type' => 'string',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CustomizedPropertyId\\": \\"1\\",\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<CreateCustomizedPropertyResponse>\\r\\n\\t<RequestId>7676B259-FFA5-4971-A9D7-7B3F48D1DEEB</RequestId>\\r\\n\\t<CustomizedPropertyId>1</CustomizedPropertyId>\\r\\n</CreateCustomizedPropertyResponse>","errorExample":""}]',
            'title' => '创建自定义属性',
            'summary' => '调用CreateCustomizedProperty创建自定义属性。',
            'description' => '> 用户可以在版本上添加自定义属性，这些自定义属性会在该版本的返回结果中返回，使用户可以自定义一些值附带在版本上。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteCustomizedProperty' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义属性ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<DeleteCustomizedPropertyResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteCustomizedPropertyResponse>","errorExample":""}]',
            'title' => '指定删除一条自定义属性记录',
            'summary' => '调用DeleteCustomizedProperty指定删除一条自定义属性记录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindCustomizedProperties' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本页开始序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询自定义属性名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AnotherWhiteList',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，取值有：FOTA 系统版本， APP 应用版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'CustomizedPropertyList' => [
                                'description' => '自定义属性查询结果',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '返回记录列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtCreateTimestamp' => [
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1324320000',
                                                ],
                                                'Value' => [
                                                    'description' => '自定义属性值',
                                                    'type' => 'string',
                                                    'example' => '1.0,2.0',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:00:00',
                                                ],
                                                'Name' => [
                                                    'description' => '自定义属性名',
                                                    'type' => 'string',
                                                    'example' => 'AnotherWhiteList',
                                                ],
                                                'Id' => [
                                                    'description' => '自定义属性ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '符合条件的记录总数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"CustomizedPropertyList\\": {\\n    \\"TotalCount\\": 30,\\n    \\"Items\\": [\\n      {\\n        \\"GmtCreateTimestamp\\": 1324320000,\\n        \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n        \\"Value\\": \\"1.0,2.0\\",\\n        \\"Name\\": \\"AnotherWhiteList\\",\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<FindCustomizedPropertiesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<CustomizedPropertyList>\\r\\n\\t\\t<TotalCount>30</TotalCount>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<Id>1</Id>\\r\\n\\t\\t\\t<Name>AnotherWhiteList</Name>\\r\\n\\t\\t\\t<Value>1.0,2.0</Value>\\r\\n\\t\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t</Items>\\r\\n\\t</CustomizedPropertyList>\\r\\n</FindCustomizedPropertiesResponse>","errorExample":""}]',
            'title' => '查询自定义属性列表',
            'summary' => '按分页查询自定义属性列表，可根据自定义属性名进行搜索。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateCustomizedFilter' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型。取值：'."\n"
                            ."\n"
                            .'- **FOTA**：系统版本'."\n"
                            .'- **APP**：应用版本',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'BlackWhiteType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '比较的黑白名单类型：'."\n"
                            ."\n"
                            .'- BLACK：黑名单'."\n"
                            .'- WHITE：白名单',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'BLACK',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件值',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1,2,3',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'ValueCompareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '值的比较类型。取值：'."\n"
                            ."\n"
                            .'- **NUMBER**：按数字比较'."\n"
                            .'- **STRING**：按字符串比较',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NUMBER',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AnotherFilter',
                    ],
                ],
                [
                    'name' => 'ValueType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件值类型。'."\n"
                            ."\n"
                            .'目前仅支持**WRITE**，表示手写输入。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'WRITE',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CustomizedFilterId' => [
                                'description' => '自定义过滤条件ID',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CustomizedFilterId\\": \\"1\\",\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<CreateCustomizedFilterResponse>\\r\\n\\t<CustomizedFilterId>1</CustomizedFilterId>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</CreateCustomizedFilterResponse>","errorExample":""}]',
            'title' => '给指定版本添加自定义过滤条件',
            'summary' => '给指定版本添加自定义过滤条件，可以通过自定义的方式扩展版本的查询筛选能力。',
            'description' => '> 自定义过滤条件会在设备发起升级查询请求时，根据请求中增加的自定义的参数，按照设定的规则判断设备是否可以查询到该升级版本。设备请求的自定义参数名需和版本配置的自定义过滤条件名一致。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteAllCustomizedFilters' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，取值：'."\n"
                            ."\n"
                            .'- **FOTA**：系统版本'."\n"
                            .'- **APP**：应用版本',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<DeleteAllCustomizedFiltersResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteAllCustomizedFiltersResponse>","errorExample":""}]',
            'title' => '删除版本下所有自定义过滤条件',
            'summary' => '调用DeleteAllCustomizedFilters删除版本下所有自定义过滤条件。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteCustomizedFilter' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义过滤条件ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<DeleteCustomizedFilterResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteCustomizedFilterResponse>","errorExample":""}]',
            'title' => '删除一个指定的自定义过滤条件',
            'summary' => '调用DeleteCustomizedFilter删除一个指定的自定义过滤条件。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateCustomizedFilter' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BlackWhiteType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '比较的黑白名单类型： '."\n"
                            ."\n"
                            .'- **BLACK**：黑名单 '."\n"
                            .'- **WHITE**：白名单',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'BLACK',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AnotherFilter',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件值',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1,4',
                    ],
                ],
                [
                    'name' => 'ValueType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件值类型：'."\n"
                            ."\n"
                            .'唯一取值**WRITE**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'WRITE',
                    ],
                ],
                [
                    'name' => 'ValueCompareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '值的比较类型：'."\n"
                            ."\n"
                            .'- **NUMBER**：按数字比较 '."\n"
                            .'- **STRING**：按字符串比较',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NUMBER',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '更新的自定义过滤条件ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<UpdateCustomizedFilterResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateCustomizedFilterResponse>","errorExample":""}]',
            'title' => '更新自定义过滤条件',
            'summary' => '调用UpdateCustomizedFilter更新自定义过滤条件。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeCustomizedFilter' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义过滤条件ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CustomizedFilter' => [
                                'description' => '自定义过滤条件详情',
                                'type' => 'object',
                                'properties' => [
                                    'GmtCreateTimestamp' => [
                                        'description' => '创建时间的时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123543500000',
                                    ],
                                    'GmtModify' => [
                                        'description' => '修改时间',
                                        'type' => 'string',
                                        'example' => '2018-01-01 00:01:00',
                                    ],
                                    'ValueCompareType' => [
                                        'description' => '值的比较类型。其中，'."\n"
                                            ."\n"
                                            .'- **NUMBER**：按数字比较'."\n"
                                            .'- **STRING**：按字符串比较',
                                        'type' => 'string',
                                        'example' => 'NUMBER',
                                    ],
                                    'VersionId' => [
                                        'description' => '所属版本ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'GmtModifyTimestamp' => [
                                        'description' => '修改时间的时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123543500000',
                                    ],
                                    'Value' => [
                                        'description' => '过滤条件值',
                                        'type' => 'string',
                                        'example' => '1,5',
                                    ],
                                    'ValueType' => [
                                        'description' => '过滤条件的输入类型，目前仅支持**WRITE**，表示手写输入。',
                                        'type' => 'string',
                                        'example' => 'WRITE',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2018-01-01 00:00:00',
                                    ],
                                    'BlackWhiteType' => [
                                        'description' => '比较的黑白名单类型。BLACK：黑名单，WHITE：白名单。',
                                        'type' => 'string',
                                        'example' => 'BLACK',
                                    ],
                                    'Name' => [
                                        'description' => '过滤条件名',
                                        'type' => 'string',
                                        'example' => 'AnotherFilter',
                                    ],
                                    'VersionType' => [
                                        'description' => '所属版本类型：FOTA | APP。',
                                        'type' => 'string',
                                        'example' => 'FOTA',
                                    ],
                                    'Id' => [
                                        'description' => '自定义过滤条件ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"CustomizedFilter\\": {\\n    \\"GmtCreateTimestamp\\": 123543500000,\\n    \\"GmtModify\\": \\"2018-01-01 00:01:00\\",\\n    \\"ValueCompareType\\": \\"NUMBER\\",\\n    \\"VersionId\\": 1,\\n    \\"GmtModifyTimestamp\\": 123543500000,\\n    \\"Value\\": \\"1,5\\",\\n    \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n    \\"ValueType\\": \\"WRITE\\",\\n    \\"BlackWhiteType\\": \\"BLACK\\",\\n    \\"Name\\": \\"AnotherFilter\\",\\n    \\"Id\\": 1,\\n    \\"VersionType\\": \\"FOTA\\"\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<DescribeCustomizedFilterResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<CustomizedFilter>\\r\\n\\t\\t<Id>1</Id>\\r\\n\\t\\t<Name>AnotherWhiteList</Name>\\r\\n\\t\\t<VersionType>1.0,2.0</VersionType>\\r\\n\\t\\t<VersionId>1</VersionId>\\r\\n\\t\\t<ValueCompareType>NUMBER</ValueCompareType>\\r\\n\\t\\t<BlackWhiteType>BLACK</BlackWhiteType>\\r\\n\\t\\t<Value>1,5</Value>\\r\\n\\t\\t<ValueType>WRITE</ValueType>\\r\\n\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t<GmtModify>2018-01-01 00:01:00</GmtModify>\\r\\n\\t</CustomizedFilter>\\r\\n</DescribeCustomizedFilterResponse>","errorExample":""}]',
            'title' => '获取自定义过滤条件详情',
            'summary' => '调用DescribeCustomizedFilter获取自定义过滤条件详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindCustomizedFilters' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本页开始序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义过滤条件名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AnotherFilter',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，取值有：'."\n"
                            ."\n"
                            .'- **FOTA**：系统版本'."\n"
                            .'- **APP**：应用版本',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CustomizedFilterList' => [
                                'description' => '查询自定义过滤条件结果',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '结果详情列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtModifyTimestamp' => [
                                                    'description' => '修改时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12354350000',
                                                ],
                                                'GmtCreateTimestamp' => [
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12354350000',
                                                ],
                                                'Value' => [
                                                    'description' => '过滤条件值',
                                                    'type' => 'string',
                                                    'example' => '1,4',
                                                ],
                                                'GmtModify' => [
                                                    'description' => '修改时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:01:00',
                                                ],
                                                'ValueCompareType' => [
                                                    'description' => '值的比较类型： **NUMBER**（按数字比较），**STRING**（按字符串比较）。',
                                                    'type' => 'string',
                                                    'example' => 'NUMBER',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:00:00',
                                                ],
                                                'BlackWhiteType' => [
                                                    'description' => '比较的黑白名单类型：**BLACK**（黑名单），**WHITE**（白名单）。',
                                                    'type' => 'string',
                                                    'example' => 'BLACK',
                                                ],
                                                'Name' => [
                                                    'description' => '过滤条件名',
                                                    'type' => 'string',
                                                    'example' => 'AnotherFilter',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '符合条件的记录总数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"CustomizedFilterList\\": {\\n    \\"TotalCount\\": 30,\\n    \\"Items\\": [\\n      {\\n        \\"GmtModifyTimestamp\\": 12354350000,\\n        \\"GmtCreateTimestamp\\": 12354350000,\\n        \\"Value\\": \\"1,4\\",\\n        \\"GmtModify\\": \\"2018-01-01 00:01:00\\",\\n        \\"ValueCompareType\\": \\"NUMBER\\",\\n        \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n        \\"BlackWhiteType\\": \\"BLACK\\",\\n        \\"Name\\": \\"AnotherFilter\\",\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<FindCustomizedFiltersResponse>\\r\\n\\t<CustomizedFilterList>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<BlackWhiteType>BLACK</BlackWhiteType>\\r\\n\\t\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t\\t<GmtModify>2018-01-01 00:01:00</GmtModify>\\r\\n\\t\\t\\t<Id>1</Id>\\r\\n\\t\\t\\t<Name>AnotherList</Name>\\r\\n\\t\\t\\t<Value>1,5</Value>\\r\\n\\t\\t\\t<ValueCompareType>NUMBER</ValueCompareType>\\r\\n\\t\\t</Items>\\r\\n\\t\\t<TotalCount>30</TotalCount>\\r\\n\\t</CustomizedFilterList>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</FindCustomizedFiltersResponse>","errorExample":""}]',
            'title' => '查询自定义过滤条件',
            'summary' => '按分页查询自定义过滤条件，可根据过滤条件名进行查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListClientSdks' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统类型，1-Android。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ClientSdks' => [
                                'description' => '客户端SDK信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'OsType' => [
                                            'description' => '系统类型，1-Android。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1512976910000',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1512976910000',
                                        ],
                                        'Name' => [
                                            'description' => 'SDK名称。',
                                            'type' => 'string',
                                            'example' => 'AiCCSDK-FOTA',
                                        ],
                                        'PkgName' => [
                                            'description' => '包名，SDK该字段为空。',
                                            'type' => 'string',
                                            'example' => 'null',
                                        ],
                                        'PkgType' => [
                                            'description' => '包类型，0表示sdk, 1表示app。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Id' => [
                                            'description' => '主键ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '6',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D1BE8AC4-BE5B-4B04-B78B-A64C6BDB2AC2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D1BE8AC4-BE5B-4B04-B78B-A64C6BDB2AC2\\",\\n  \\"ClientSdks\\": [\\n    {\\n      \\"OsType\\": 1,\\n      \\"GmtCreate\\": 1512976910000,\\n      \\"GmtModified\\": 1512976910000,\\n      \\"Name\\": \\"AiCCSDK-FOTA\\",\\n      \\"PkgName\\": \\"null\\",\\n      \\"PkgType\\": 0,\\n      \\"Id\\": 6\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListClientSdksResponse>\\r\\n\\t<ClientSdks>\\r\\n\\t\\t<Name>AiCCSDK-FOTA</Name>\\r\\n\\t\\t<OsType>1</OsType>\\r\\n\\t\\t<PkgName></PkgName>\\r\\n\\t\\t<Id>6</Id>\\r\\n\\t\\t<GmtCreate>1512976910000</GmtCreate>\\r\\n\\t\\t<GmtModified>1512976910000</GmtModified>\\r\\n\\t\\t<PkgType>0</PkgType>\\r\\n\\t</ClientSdks>\\r\\n\\t<ClientSdks>\\r\\n\\t\\t<Name>AiCCSDK-SyncStore</Name>\\r\\n\\t\\t<OsType>1</OsType>\\r\\n\\t\\t<PkgName></PkgName>\\r\\n\\t\\t<Id>9</Id>\\r\\n\\t\\t<GmtCreate>1513309968000</GmtCreate>\\r\\n\\t\\t<GmtModified>1513309968000</GmtModified>\\r\\n\\t\\t<PkgType>0</PkgType>\\r\\n\\t</ClientSdks>\\r\\n\\t<RequestId>D1BE8AC4-BE5B-4B04-B78B-A64C6BDB2AC2</RequestId>\\r\\n</ListClientSdksResponse>","errorExample":""}]',
            'title' => '查询客户端SDK列表',
            'summary' => '调用ListClientSdks查询客户端SDK列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GenerateSdkDownloadInfo' => [
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
                    'name' => 'Sdks',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户选择要下载的sdk集合，多个以英文逗号隔开。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AiCCSDK-FOTA,AiCCSDK-CMNS',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'A3BU0HBO',
                    ],
                ],
                [
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统类型，1-Android。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PkgName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义应用的包名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'com.test.app',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'CertFileObjectKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RSA证书文件上传OSS后，在OSS上的完整文件名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1768723179523459/11/2018-05-07/1525699039841.rsa',
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
                                'example' => 'F3BAE77D-1954-48C5-95F6-D4937B29E2F4',
                            ],
                            'SdkDownloadInfo' => [
                                'description' => 'SDK下载的信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Url' => [
                                        'description' => '下载地址。',
                                        'type' => 'string',
                                        'example' => 'http://iovcc-pm-tenant.oss-cn-shanghai.aliyuncs.com/1768723179523459/11/2018-05-07/aicc-sdk-1525699039841.zip?OSSAccessKeyId=nz2pc56s936**9l&Expires=1141889120&Signature=vjbyPxybdZaNmGa%2ByT272YEAiv4%3D',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F3BAE77D-1954-48C5-95F6-D4937B29E2F4\\",\\n  \\"SdkDownloadInfo\\": {\\n    \\"Url\\": \\"http://iovcc-pm-tenant.oss-cn-shanghai.aliyuncs.com/1768723179523459/11/2018-05-07/aicc-sdk-1525699039841.zip?OSSAccessKeyId=nz2pc56s936**9l&Expires=1141889120&Signature=vjbyPxybdZaNmGa%2ByT272YEAiv4%3D\\"\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NotFoundProject\\",\\n  \\"Message\\": \\"Cannot find the specified project\\"\\n}"},{"type":"xml","example":"<GenerateSdkDownloadInfoResponse>\\r\\n\\t<RequestId>F3BAE77D-1954-48C5-95F6-D4937B29E2F4</RequestId>\\r\\n\\t<SdkDownloadInfo>\\r\\n\\t\\t<Url>http://iovcc-pm-tenant.oss-cn-shanghai.aliyuncs.com/1768723179523459/11/2018-05-07/aicc-sdk-1525699039841.zip?OSSAccessKeyId=nz2pc56s936**9l&amp;Expires=1141889120&amp;Signature=vjbyPxybdZaNmGa%2ByT272YEAiv4%3D</Url>\\r\\n\\t</SdkDownloadInfo>\\r\\n</GenerateSdkDownloadInfoResponse>","errorExample":""}]',
            'title' => '获取SDK下载的信息',
            'summary' => '调用GenerateSdkDownloadInfo获取SDK下载的信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSchemaSubscribe' => [
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
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'model_2nd',
                    ],
                ],
                [
                    'name' => 'SubscribeList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订阅列表',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{\\"path\\":\\"/car_body_hvac/cooling/water_temperature\\",\\"description\\":\\"水温\\",\\"required\\":false,\\"type\\":\\"number\\",\\"minimum\\":20,\\"exclusiveMinimum\\":false,\\"maximum\\":30,\\"exclusiveMaximum\\":false},{\\"path\\":\\"/car_body_hvac/lubricating/oil_level\\",\\"description\\":\\"机油油位\\",\\"required\\":false,\\"type\\":\\"number\\",\\"minimum\\":3,\\"exclusiveMinimum\\":false,\\"maximum\\":6,\\"exclusiveMaximum\\":false}]',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
                    ],
                ],
                [
                    'name' => 'SchemaVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<CreateSchemaSubscribeResponse>\\r\\n    <RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</CreateSchemaSubscribeResponse>","errorExample":""}]',
            'title' => '创建订阅信息',
            'summary' => '调用CreateSchemaSubscribe创建订阅信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSchemaSubscribe' => [
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据记录ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<DeleteSchemaSubscribeResponse>\\r\\n<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteSchemaSubscribeResponse>","errorExample":""}]',
            'title' => '删除订阅信息',
            'summary' => '调用DeleteSchemaSubscribe删除订阅信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateSchemaSubscribe' => [
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
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'model_2nd',
                    ],
                ],
                [
                    'name' => 'SubscribeList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订阅列表',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{\\"path\\":\\"/car_body_hvac/cooling/water_temperature\\",\\"description\\":\\"水温\\",\\"required\\":false,\\"type\\":\\"number\\",\\"minimum\\":20,\\"exclusiveMinimum\\":false,\\"maximum\\":30,\\"exclusiveMaximum\\":false},{\\"path\\":\\"/car_body_hvac/lubricating/oil_level\\",\\"description\\":\\"机油油位\\",\\"required\\":false,\\"type\\":\\"number\\",\\"minimum\\":3,\\"exclusiveMinimum\\":false,\\"maximum\\":6,\\"exclusiveMaximum\\":false}]',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
                    ],
                ],
                [
                    'name' => 'SchemaVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<UpdateSchemaSubscribeResponse>\\r\\n<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateSchemaSubscribeResponse>","errorExample":""}]',
            'title' => '修改订阅信息',
            'summary' => '调用UpdateSchemaSubscribe修改订阅信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSchemaSubscribes' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
                    ],
                ],
                [
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机型信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'model_2nd',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的页码',
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
                        'description' => '查询的每页数量',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'PageList' => [
                                'description' => '返回的数据列表信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Pagination' => [
                                            'description' => '返回的分页信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'PageIndex' => [
                                                    'description' => '当前页数',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'TotalPageCount' => [
                                                    'description' => '总页数',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'PageSize' => [
                                                    'description' => '每页数量',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10',
                                                ],
                                                'TotalCount' => [
                                                    'description' => '总数量',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10',
                                                ],
                                                'SimpleSign' => [
                                                    'description' => '是否返回简单数据标志',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'HasNextPage' => [
                                                    'description' => '是否有下一页',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                        'List' => [
                                            'description' => '订阅列表',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'DeviceModelId' => [
                                                        'description' => '机型ID',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '120',
                                                    ],
                                                    'Version' => [
                                                        'description' => '版本',
                                                        'type' => 'string',
                                                        'example' => '1.0',
                                                    ],
                                                    'ProjectId' => [
                                                        'description' => '项目ID',
                                                        'type' => 'string',
                                                        'example' => 'PIC3UA0V',
                                                    ],
                                                    'GmtCreate' => [
                                                        'description' => '创建时间',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1537255540160',
                                                    ],
                                                    'Namespace' => [
                                                        'description' => '命名空间',
                                                        'type' => 'string',
                                                        'example' => 'b09e93ce436aaf0dcfc2fb2004c1fde8',
                                                    ],
                                                    'ValiditySchema' => [
                                                        'description' => '验证的schema信息',
                                                        'type' => 'string',
                                                        'example' => '{"ecu":{"node_desc":"动力系统","brake_controll":{"handbrake":"手刹状态"}},"device_info":{"vin":"车架号","uuid":"uuid","brand":"设备品牌","plugin_version":{"ra":"远程诊断","control":"远程控制","node_desc":"插件版本号","yundevice":"yundevice版本号"},"system_version":"系统版本号"},"car_body_hvac":{"node_desc":"车身与HVAC","cigar_lighter":{"node_desc":"点烟器"},"cleaning_fluid":"清洗液"}}',
                                                    ],
                                                    'DeviceModel' => [
                                                        'description' => '机型名称',
                                                        'type' => 'string',
                                                        'example' => 'model_2nd',
                                                    ],
                                                    'GmtModified' => [
                                                        'description' => '修改时间',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1537255540160',
                                                    ],
                                                    'Id' => [
                                                        'description' => '数据记录ID',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '12',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"PageList\\": [\\n    {\\n      \\"List\\": [\\n        {\\n          \\"DeviceModelId\\": 120,\\n          \\"Version\\": \\"1.0\\",\\n          \\"ProjectId\\": \\"PIC3UA0V\\",\\n          \\"GmtCreate\\": 1537255540160,\\n          \\"Namespace\\": \\"b09e93ce436aaf0dcfc2fb2004c1fde8\\",\\n          \\"ValiditySchema\\": \\"{\\\\\\"ecu\\\\\\":{\\\\\\"node_desc\\\\\\":\\\\\\"动力系统\\\\\\",\\\\\\"brake_controll\\\\\\":{\\\\\\"handbrake\\\\\\":\\\\\\"手刹状态\\\\\\"}},\\\\\\"device_info\\\\\\":{\\\\\\"vin\\\\\\":\\\\\\"车架号\\\\\\",\\\\\\"uuid\\\\\\":\\\\\\"uuid\\\\\\",\\\\\\"brand\\\\\\":\\\\\\"设备品牌\\\\\\",\\\\\\"plugin_version\\\\\\":{\\\\\\"ra\\\\\\":\\\\\\"远程诊断\\\\\\",\\\\\\"control\\\\\\":\\\\\\"远程控制\\\\\\",\\\\\\"node_desc\\\\\\":\\\\\\"插件版本号\\\\\\",\\\\\\"yundevice\\\\\\":\\\\\\"yundevice版本号\\\\\\"},\\\\\\"system_version\\\\\\":\\\\\\"系统版本号\\\\\\"},\\\\\\"car_body_hvac\\\\\\":{\\\\\\"node_desc\\\\\\":\\\\\\"车身与HVAC\\\\\\",\\\\\\"cigar_lighter\\\\\\":{\\\\\\"node_desc\\\\\\":\\\\\\"点烟器\\\\\\"},\\\\\\"cleaning_fluid\\\\\\":\\\\\\"清洗液\\\\\\"}}\\",\\n          \\"DeviceModel\\": \\"model_2nd\\",\\n          \\"GmtModified\\": 1537255540160,\\n          \\"Id\\": 12\\n        }\\n      ],\\n      \\"Pagination\\": {\\n        \\"PageIndex\\": 1,\\n        \\"TotalPageCount\\": 1,\\n        \\"PageSize\\": 10,\\n        \\"TotalCount\\": 10,\\n        \\"SimpleSign\\": false,\\n        \\"HasNextPage\\": true\\n      }\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListSchemaSubscribesResponse>\\r\\n\\t<PageList>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<DeviceModel>model_2nd</DeviceModel>\\r\\n\\t\\t\\t<DeviceModelId>208</DeviceModelId>\\r\\n\\t\\t\\t<GmtCreate>1537255540160</GmtCreate>\\r\\n\\t\\t\\t<GmtModified>1537255540160</GmtModified>\\r\\n\\t\\t\\t<Id>49</Id>\\r\\n\\t\\t\\t<Namespace>b09e93ce436aaf0dcfc2fb2004c1fde8</Namespace>\\r\\n\\t\\t\\t<ProjectId>PIC3UA0V</ProjectId>\\r\\n\\t\\t\\t<ValiditySchema>{&quot;type&quot;: &quot;object&quot;, &quot;title&quot;: &quot;model_2nd&quot;, &quot;$schema&quot;: &quot;http://json-schema.org/draft-04/schema#&quot;, &quot;properties&quot;: {&quot;car_body_hvac&quot;: {&quot;properties&quot;: {&quot;cooling&quot;: {&quot;properties&quot;: {&quot;water_temperature&quot;: {&quot;type&quot;: &quot;number&quot;, &quot;maximum&quot;: 30.0, &quot;minimum&quot;: 20.0, &quot;description&quot;: &quot;水温&quot;}}}, &quot;lubricating&quot;: {&quot;properties&quot;: {&quot;oil_level&quot;: {&quot;type&quot;: &quot;number&quot;, &quot;maximum&quot;: 6.0, &quot;minimum&quot;: 3.0, &quot;description&quot;: &quot;机油油位&quot;}}}}}}}</ValiditySchema>\\r\\n\\t\\t\\t<Version>1.0</Version>\\r\\n\\t\\t</List>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<HasNextPage>true</HasNextPage>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<PageSize>10</PageSize>\\r\\n\\t\\t\\t<TotalCount>1</TotalCount>\\r\\n\\t\\t\\t<TotalPageCount>1</TotalPageCount>\\r\\n\\t\\t</Pagination>\\r\\n\\t</PageList>\\r\\n\\t<RequestId>EDCF581A-6A1A-4595-9542-96D084F5F231</RequestId>\\r\\n</ListSchemaSubscribesResponse>","errorExample":""}]',
            'title' => '查询订阅列表',
            'summary' => '调用ListSchemaSubscribes查询订阅列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateNamespace' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIY3UB0T',
                    ],
                ],
                [
                    'name' => 'AuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据空间划分和鉴权方式。'."\n"
                            ."\n"
                            .'- **1**：基于账号'."\n"
                            .'- **2**：基于设备'."\n"
                            .'- **101**：基于账号和设备',
                        'type' => 'string',
                        'required' => true,
                        'example' => '101',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Namespace名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_data',
                    ],
                ],
                [
                    'name' => 'Desc',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Namespace说明。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '存储用户数据',
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
                                'example' => 'E94C9864-56FB-44AD-AC0C-A1CEFB332254',
                            ],
                            'Namespace' => [
                                'description' => 'Namespace唯一标识',
                                'type' => 'string',
                                'example' => 'cc6c29893f2be7d465db44ec7b5d593e',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Namespace\\": \\"cc6c29893f2be7d465db44ec7b5d593e\\",\\n  \\"RequestId\\": \\"E94C9864-56FB-44AD-AC0C-A1CEFB332254\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<CreateNamespaceResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<Namespace>cc6c29893f2be7d465db44ec7b5d593e</Namespace>\\r\\n</CreateNamespaceResponse>","errorExample":""}]',
            'title' => '创建命名空间',
            'summary' => '调用CreateNamespace创建一个数据存储空间Namespace。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteNamespace' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIY3UB0T',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Namespace唯一标识',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc6c29893f2be7d465db44ec7b5d593e',
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
                                'example' => 'E94C9864-56FB-44AD-AC0C-A1CEFB332254',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E94C9864-56FB-44AD-AC0C-A1CEFB332254\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<DeleteNamespaceResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n</DeleteNamespaceResponse>","errorExample":""}]',
            'title' => '删除命名空间',
            'summary' => '调用DeleteNamespace删除指定的数据存储空间Namespace。删除后，Namespace里的数据将丢失。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateNamespaceData' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIY3UB0T',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Namespace唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc6c29893f2be7d465db44ec7b5d593e',
                    ],
                ],
                [
                    'name' => 'AuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据空间划分和鉴权方式。1-基于账号，2-基于设备，101-基于账号和设备。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '101',
                    ],
                ],
                [
                    'name' => 'DeviceIdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID类型。取值范围：**uuid**/**sn**/**vin**/**hardware_id**。'."\n"
                            ."\n"
                            .'> 当AuthType=2或101，此项必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'uuid',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1ac5e182e9634252a02d442a4d5d16fc',
                    ],
                ],
                [
                    'name' => 'AccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID类型。当AuthType=1或101，此项必填。'."\n"
                            ."\n"
                            .'- `www.weibo.com`：微博'."\n"
                            .'- `www.openaccount.alios.cn`：AliOS'."\n"
                            .'- `www.amap.com`：高德'."\n"
                            .'- `www.yundevicedemo.aliyun.com`：YUNDEVICE_DEMO'."\n"
                            .'- `anonymous`：匿名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.weibo.com',
                    ],
                ],
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10000',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要修改的节点路径，如：`/CarService/Window/SunroofSlideCtrl`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/CarService/Window/SunroofSlideCtrl',
                    ],
                ],
                [
                    'name' => 'OldData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '旧数据。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'NewData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新数据。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5',
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
                                'example' => 'E94C9864-56FB-44AD-AC0C-A1CEFB332254',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E94C9864-56FB-44AD-AC0C-A1CEFB332254\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<UpdateNamespaceDataResponse>\\r\\n<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n</UpdateNamespaceDataResponse>","errorExample":""}]',
            'title' => '修改Namespace中的数据',
            'summary' => '调用UpdateNamespaceData修改Namespace里存的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetNamespaceData' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIY3UB0T',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Namespace唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc6c29893f2be7d465db44ec7b5d593e',
                    ],
                ],
                [
                    'name' => 'AuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据空间划分和鉴权方式。'."\n"
                            ."\n"
                            .'- 1：基于账号'."\n"
                            .'- 2：基于设备'."\n"
                            .'- 101：基于账号和设备',
                        'type' => 'string',
                        'required' => true,
                        'example' => '101',
                    ],
                ],
                [
                    'name' => 'DeviceIdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID类型。取值范围：**uuid**/**sn**/**vin**/**hardware_id**。'."\n"
                            ."\n"
                            .'> 当`AuthType=2或101`时，此项必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'uuid',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1ac5e182e9634252a02d442a4d5d16fc',
                    ],
                ],
                [
                    'name' => 'AccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID类型。'."\n"
                            ."\n"
                            .'- `www.weibo.com`：微博'."\n"
                            .'- `www.openaccount.alios.cn`：AliOS'."\n"
                            .'- `www.amap.com`：高德'."\n"
                            .'- `www.yundevicedemo.aliyun.com`：YUNDEVICE_DEMO'."\n"
                            .'- `anonymous`：匿名'."\n"
                            ."\n"
                            .'> 当AuthType=1或101，此项必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.weibo.com',
                    ],
                ],
                [
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10000',
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
                                'example' => 'E94C9864-56FB-44AD-AC0C-A1CEFB332254',
                            ],
                            'Data' => [
                                'description' => 'Namespace里的数据',
                                'type' => 'string',
                                'example' => '[{\\"path\\":\\"/\\",\\"content\\":\\"Window\\",\\"children\\":[{\\"path\\":\\"/Window\\",\\"content\\":\\"SunroofSlideCtrl\\",\\"children\\":[{\\"path\\":\\"/Window/SunroofSlideCtrl\\",\\"content\\":\\"val\\",\\"children\\":[{\\"path\\":\\"/Window/SunroofSlideCtrl/val\\",\\"content\\":\\"3\\"}]}]},{\\"path\\":\\"/Window\\",\\"content\\":\\"SunroofTiltCtrl\\",\\"children\\":[{\\"path\\":\\"/Window/SunroofTiltCtrl\\",\\"content\\":\\"val\\",\\"children\\":[{\\"path\\":\\"/Window/SunroofTiltCtrl/val\\",\\"content\\":\\"1\\"}]}]}]}]',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"[{\\\\\\\\\\\\\\"path\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"content\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Window\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"children\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"path\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/Window\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"content\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"SunroofSlideCtrl\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"children\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"path\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/Window/SunroofSlideCtrl\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"content\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"val\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"children\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"path\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/Window/SunroofSlideCtrl/val\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"content\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"3\\\\\\\\\\\\\\"}]}]},{\\\\\\\\\\\\\\"path\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/Window\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"content\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"SunroofTiltCtrl\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"children\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"path\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/Window/SunroofTiltCtrl\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"content\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"val\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"children\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"path\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/Window/SunroofTiltCtrl/val\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"content\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1\\\\\\\\\\\\\\"}]}]}]}]\\",\\n  \\"RequestId\\": \\"E94C9864-56FB-44AD-AC0C-A1CEFB332254\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<GetNamespaceDataResponse>\\r\\n<RequestId>49C0C0A1-2D02-466B-BC26-D73117062FAE</RequestId>\\r\\n\\t<Data>[{&quot;path&quot;:&quot;/&quot;,&quot;content&quot;:&quot;Window&quot;,&quot;children&quot;:[{&quot;path&quot;:&quot;/Window&quot;,&quot;content&quot;:&quot;SunroofSlideCtrl&quot;,&quot;children&quot;:[{&quot;path&quot;:&quot;/Window/SunroofSlideCtrl&quot;,&quot;content&quot;:&quot;val&quot;,&quot;children&quot;:[{&quot;path&quot;:&quot;/Window/SunroofSlideCtrl/val&quot;,&quot;content&quot;:&quot;3&quot;}]}]},{&quot;path&quot;:&quot;/Window&quot;,&quot;content&quot;:&quot;SunroofTiltCtrl&quot;,&quot;children&quot;:[{&quot;path&quot;:&quot;/Window/SunroofTiltCtrl&quot;,&quot;content&quot;:&quot;val&quot;,&quot;children&quot;:[{&quot;path&quot;:&quot;/Window/SunroofTiltCtrl/val&quot;,&quot;content&quot;:&quot;1&quot;}]}]}]}]</Data>\\r\\n</GetNamespaceDataResponse>","errorExample":""}]',
            'title' => '查询Namespace里存的数据',
            'summary' => '调用GetNamespaceData查询Namespace里存的数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetNamespaceStatisticsData' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIY3UB0T',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Namespace唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc6c29893f2be7d465db44ec7b5d593e',
                    ],
                ],
                [
                    'name' => 'DimensionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '统计维度类型。'."\n"
                            ."\n"
                            .'- **101**-用户日活'."\n"
                            .'- **102**-设备日活'."\n"
                            .'- **103**-数据提交次数'."\n"
                            .'- **111**-每分钟用户访问次数'."\n"
                            .'- **112**-每分钟设备访问次数'."\n"
                            .'- **113**-每分钟数据提交次数',
                        'type' => 'string',
                        'required' => true,
                        'example' => '101',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间。'."\n"
                            ."\n"
                            .'- 按日统计，如：2018-08-16'."\n"
                            .'- 按分钟统计，如：2018-08-23 13:53',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-09-20',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。'."\n"
                            ."\n"
                            .'- 按日统计，如：2018-08-16'."\n"
                            .'- 按分钟统计，如：2018-08-23 13:53',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2018-09-18',
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
                                'example' => 'E94C9864-56FB-44AD-AC0C-A1CEFB332254',
                            ],
                            'Statistics' => [
                                'description' => '统计结果',
                                'type' => 'object',
                                'properties' => [
                                    'Categories' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '统计分类',
                                            'type' => 'integer',
                                            'example' => '["1534907280000","1534907340000","1534907400000"]',
                                            'format' => 'int64',
                                        ],
                                    ],
                                    'Series' => [
                                        'description' => '统计数据',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Data' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '统计数据结果，每一项数据按顺序对应Categories的每一项。',
                                                        'type' => 'integer',
                                                        'example' => '[1,10,5]',
                                                        'format' => 'int64',
                                                    ],
                                                ],
                                                'Name' => [
                                                    'description' => '统计数据的名称。',
                                                    'type' => 'string',
                                                    'example' => '设备访问次数',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E94C9864-56FB-44AD-AC0C-A1CEFB332254\\",\\n  \\"Statistics\\": {\\n    \\"Series\\": [\\n      {\\n        \\"Name\\": \\"设备访问次数\\",\\n        \\"Data\\": [\\n          \\"[1,10,5]\\"\\n        ]\\n      }\\n    ],\\n    \\"Categories\\": [\\n      \\"[\\\\\\"1534907280000\\\\\\",\\\\\\"1534907340000\\\\\\",\\\\\\"1534907400000\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<GetNamespaceStatisticsDataResponse>\\r\\n\\t<RequestId>49C0C0A1-2D02-466B-BC26-D73117062FAE</RequestId>\\r\\n\\t<Statistics>\\r\\n\\t\\t<Series>\\r\\n\\t\\t\\t<Data>1</Data>\\r\\n\\t\\t\\t<Data>10</Data>\\r\\n\\t\\t\\t<Data>5</Data>\\r\\n\\t\\t\\t<Name>设备访问次数</Name>\\r\\n\\t\\t</Series>\\r\\n\\t\\t<Categories>1534907280000</Categories>\\r\\n\\t\\t<Categories>1534907340000</Categories>\\r\\n\\t\\t<Categories>1534907400000</Categories>\\r\\n\\t</Statistics>\\r\\n</GetNamespaceStatisticsDataResponse>","errorExample":""}]',
            'title' => '查询Namespace的业务统计数据',
            'summary' => '调用GetNamespaceStatisticsData查询Namespace的业务统计数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListNamespaces' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIY3UB0T',
                    ],
                ],
                [
                    'name' => 'AuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据空间划分和鉴权方式。'."\n"
                            ."\n"
                            .'- 1：基于账号'."\n"
                            .'- 2：基于设备'."\n"
                            .'- 101：基于账号和设备',
                        'type' => 'string',
                        'required' => false,
                        'example' => '101',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Namespaces' => [
                                'description' => 'Namespace集合',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AuthType' => [
                                            'description' => '数据空间划分和鉴权方式。'."\n"
                                                ."\n"
                                                .'- 1：基于账号'."\n"
                                                .'- 2：基于设备'."\n"
                                                .'- 101：基于账号和设备',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '101',
                                        ],
                                        'Description' => [
                                            'description' => 'Namespace说明',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'UserId' => [
                                            'description' => '所属租户ID',
                                            'type' => 'string',
                                            'example' => '123456',
                                        ],
                                        'ProjectId' => [
                                            'description' => '所属项目ID',
                                            'type' => 'string',
                                            'example' => 'PLR58HKB',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1526871654000',
                                        ],
                                        'Namespace' => [
                                            'description' => 'Namespace唯一标识',
                                            'type' => 'string',
                                            'example' => 'cca8e86c056bdc4fe78751vbf3f26c7k',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1526871654000',
                                        ],
                                        'Name' => [
                                            'description' => 'Namespace名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E94C9864-56FB-44AD-AC0C-A1CEFB332254',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E94C9864-56FB-44AD-AC0C-A1CEFB332254\\",\\n  \\"Namespaces\\": [\\n    {\\n      \\"AuthType\\": 101,\\n      \\"Description\\": \\"test\\",\\n      \\"UserId\\": \\"123456\\",\\n      \\"ProjectId\\": \\"PLR58HKB\\",\\n      \\"GmtCreate\\": 1526871654000,\\n      \\"Namespace\\": \\"cca8e86c056bdc4fe78751vbf3f26c7k\\",\\n      \\"GmtModified\\": 1526871654000,\\n      \\"Name\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListNamespacesResponse>\\r\\n<RequestId>49C0C0A1-2D02-466B-BC26-D73117062FAE</RequestId>\\r\\n\\t<Namespaces>\\r\\n\\t\\t<Namespace>cca8e86c056bdc4fe7875a9bf3f26c7f</Namespace>\\r\\n\\t\\t<Name>DEFAULT_BY_ACCOUNT_DEVICEDEFAULT_BY_ACCOUNT_DEVICE</Name>\\r\\n\\t\\t<UserId>1151125281886341</UserId>\\r\\n\\t\\t<ProjectId>PLR58NHL</ProjectId>\\r\\n\\t\\t<Description>DEFAULT_BY_ACCOUNT_DEVICE</Description>\\r\\n\\t\\t<GmtCreate>1526871654000</GmtCreate>\\r\\n\\t\\t<GmtModified>1526871654000</GmtModified>\\r\\n\\t\\t<AuthType>101</AuthType>\\r\\n\\t</Namespaces>\\r\\n\\t<Namespaces>\\r\\n\\t\\t<Namespace>f04998a1834f4a6d8debb403b995713a</Namespace>\\r\\n\\t\\t<Name>DEFAULT_BY_DEVICE</Name>\\r\\n\\t\\t<UserId>1151125281886341</UserId>\\r\\n\\t\\t<ProjectId>PLR58NHL</ProjectId>\\r\\n\\t\\t<Description>DEFAULT_BY_DEVICE</Description>\\r\\n\\t\\t<GmtCreate>1526871654000</GmtCreate>\\r\\n\\t\\t<GmtModified>1526871654000</GmtModified>\\r\\n\\t\\t<AuthType>2</AuthType>\\r\\n\\t</Namespaces>\\r\\n</ListNamespacesResponse>","errorExample":""}]',
            'title' => '查询指定项目的Namespace列表',
            'summary' => '调用ListNamespaces查询指定项目的Namespace列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteOpenAccount' => [
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'IdentityId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云端用户ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'identityidtest',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<DeleteOpenAccountResponse>\\r\\n\\t<RequestId>6F0A833B-7A86-4D92-A083-C184041E2F2D</RequestId>\\r\\n</DeleteOpenAccountResponse>","errorExample":""}]',
            'title' => '删除账号信息',
            'summary' => '调用DeleteOpenAccount删除账号信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListOpenAccountLinks' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'IdentityId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云端用户ID。'."\n"
                            ."\n"
                            .'和**idToken+Idp**不能同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'identityidtest',
                    ],
                ],
                [
                    'name' => 'Idp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号认证提供商。'."\n"
                            ."\n"
                            .'**IdentityId+Idp**不能同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALIOS',
                    ],
                ],
                [
                    'name' => 'OpenId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '三方账户平台ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12345',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'OpenAccounts' => [
                                'description' => '返回内容。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '状态。'."\n"
                                                ."\n"
                                                .'0表示正常，1表示禁用。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Type' => [
                                            'description' => '类型。'."\n"
                                                ."\n"
                                                .'1表示三方关联账号。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'DisplayName' => [
                                            'description' => '显示名',
                                            'type' => 'string',
                                            'example' => 'displaynametest',
                                        ],
                                        'CreateAccessKey' => [
                                            'description' => '账号创建的AK',
                                            'type' => 'string',
                                            'example' => 'createaccesskeytest',
                                        ],
                                        'OpenId' => [
                                            'description' => '三方平台账号ID',
                                            'type' => 'string',
                                            'example' => '12345',
                                        ],
                                        'Mobile' => [
                                            'description' => '手机号'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '1390000****',
                                        ],
                                        'Region' => [
                                            'description' => '区域',
                                            'type' => 'string',
                                            'example' => 'cn',
                                        ],
                                        'IdentityId' => [
                                            'description' => '账号ID'."\n",
                                            'type' => 'string',
                                            'example' => 'identityidtest',
                                        ],
                                        'LoginId' => [
                                            'description' => '登录名',
                                            'type' => 'string',
                                            'example' => 'loginidtest',
                                        ],
                                        'Idp' => [
                                            'description' => '三方平台标识简称呼',
                                            'type' => 'string',
                                            'example' => 'ALIOS',
                                        ],
                                        'AliyunId' => [
                                            'description' => '租户ID',
                                            'type' => 'string',
                                            'example' => 'aliyunidtest',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"OpenAccounts\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"Type\\": 1,\\n      \\"DisplayName\\": \\"displaynametest\\",\\n      \\"CreateAccessKey\\": \\"createaccesskeytest\\",\\n      \\"OpenId\\": \\"12345\\",\\n      \\"Mobile\\": \\"1390000****\\",\\n      \\"Region\\": \\"cn\\",\\n      \\"IdentityId\\": \\"identityidtest\\",\\n      \\"LoginId\\": \\"loginidtest\\",\\n      \\"Idp\\": \\"ALIOS\\",\\n      \\"AliyunId\\": \\"aliyunidtest\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<ListOpenAccountLinksResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<OpenAccountLinks>\\r\\n\\t\\t<AliyunId>aliyunidtest</AliyunId>\\r\\n\\t\\t<CreateAccessKey>createaccesskeytest</CreateAccessKey>\\r\\n\\t\\t<DisplayName>displaynametest</DisplayName>\\r\\n\\t\\t<IdentityId>identityidtest</IdentityId>\\r\\n\\t\\t<Idp>ALIOS</Idp>\\r\\n\\t\\t<LoginId>loginidtest</LoginId>\\r\\n\\t\\t<Mobile>1390000****</Mobile>\\r\\n\\t\\t<OpenId>12345</OpenId>\\r\\n\\t\\t<Region>cn</Region>\\r\\n\\t\\t<Status>0</Status>\\r\\n\\t\\t<Type>1</Type>\\r\\n\\t</OpenAccountLinks>\\r\\n</ListOpenAccountLinksResponse>","errorExample":""}]',
            'title' => '根据三方账号ID查询账号列表',
            'summary' => '调用ListOpenAccountLinks根据三方账号ID查询账号列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListOpenAccounts' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Length',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回列表最大长度',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Start',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回列表起始位置',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '电子邮箱',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@alibaba.com',
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '显示名'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'displaynametest',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'OpenAccounts' => [
                                'description' => '返回内容',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '状态。'."\n"
                                                ."\n"
                                                .'0表示正常，1表示禁用。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Type' => [
                                            'description' => '类型。'."\n"
                                                ."\n"
                                                .'1表示三方关联账号。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'DisplayName' => [
                                            'description' => '显示名'."\n",
                                            'type' => 'string',
                                            'example' => 'displaynametest',
                                        ],
                                        'CreateAccessKey' => [
                                            'description' => '账号创建的AK'."\n",
                                            'type' => 'string',
                                            'example' => 'createaccesskeytest',
                                        ],
                                        'OpenId' => [
                                            'description' => '三方平台账号ID'."\n",
                                            'type' => 'string',
                                            'example' => '12345',
                                        ],
                                        'Mobile' => [
                                            'description' => '手机号'."\n",
                                            'type' => 'string',
                                            'example' => '1390000****',
                                        ],
                                        'Region' => [
                                            'description' => '区域',
                                            'type' => 'string',
                                            'example' => 'cn',
                                        ],
                                        'IdentityId' => [
                                            'description' => '账号ID'."\n",
                                            'type' => 'string',
                                            'example' => 'identityidtest',
                                        ],
                                        'LoginId' => [
                                            'description' => '登录名',
                                            'type' => 'string',
                                            'example' => 'loginidtest',
                                        ],
                                        'Idp' => [
                                            'description' => '三方平台标识简称呼',
                                            'type' => 'string',
                                            'example' => 'ALIOS',
                                        ],
                                        'AliyunId' => [
                                            'description' => '租户ID',
                                            'type' => 'string',
                                            'example' => 'aliyunidtest',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"OpenAccounts\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"Type\\": 1,\\n      \\"DisplayName\\": \\"displaynametest\\",\\n      \\"CreateAccessKey\\": \\"createaccesskeytest\\",\\n      \\"OpenId\\": \\"12345\\",\\n      \\"Mobile\\": \\"1390000****\\",\\n      \\"Region\\": \\"cn\\",\\n      \\"IdentityId\\": \\"identityidtest\\",\\n      \\"LoginId\\": \\"loginidtest\\",\\n      \\"Idp\\": \\"ALIOS\\",\\n      \\"AliyunId\\": \\"aliyunidtest\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<ListOpenAccountsResponse>\\r\\n\\t<RequestId>81275440-EF9D-4570-A78F-7576441D3BF8</RequestId>\\r\\n\\t<OpenAccounts>\\r\\n\\t\\t<AliyunId>aliyunidtest</AliyunId>\\r\\n\\t\\t<CreateAccessKey>createaccesskeytest</CreateAccessKey>\\r\\n\\t\\t<DisplayName>displaynametest</DisplayName>\\r\\n\\t\\t<IdentityId>identityidtest</IdentityId>\\r\\n\\t\\t<Idp>ALIOS</Idp>\\r\\n\\t\\t<LoginId>loginidtest</LoginId>\\r\\n\\t\\t<Mobile>1390000****</Mobile>\\r\\n\\t\\t<OpenId>12345</OpenId>\\r\\n\\t\\t<Region>cn</Region>\\r\\n\\t\\t<Status>0</Status>\\r\\n\\t\\t<Type>1</Type>\\r\\n\\t</OpenAccounts>\\r\\n</ListOpenAccountsResponse>","errorExample":""}]',
            'title' => '查询账号列表',
            'summary' => '调用ListOpenAccounts查询账号列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeOpenAccount' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'IdentityId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云端用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'identityidtest',
                    ],
                ],
                [
                    'name' => 'Idp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号认证提供商。'."\n"
                            ."\n"
                            .'与**IdentityId**和（**IdToken+Idp**）不能同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALIOS',
                    ],
                ],
                [
                    'name' => 'IdToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号Token。'."\n"
                            ."\n"
                            .'与**IdentityId**和（**IdToken+Idp**）不能同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'idtokentest',
                    ],
                ],
                [
                    'name' => 'OpenId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '三方账户平台ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12345',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'OpenAccount' => [
                                'description' => '返回内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '状态。'."\n"
                                            ."\n"
                                            .'**0**表示正常，**1**表示禁用。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Type' => [
                                        'description' => '类型。'."\n"
                                            ."\n"
                                            .'**1**表示三方关联账号。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'DisplayName' => [
                                        'description' => '显示名',
                                        'type' => 'string',
                                        'example' => 'displaynametest',
                                    ],
                                    'CreateAccessKey' => [
                                        'description' => '账号创建的AK',
                                        'type' => 'string',
                                        'example' => 'createaccesskeytest',
                                    ],
                                    'OpenId' => [
                                        'description' => '三方平台账号ID',
                                        'type' => 'string',
                                        'example' => '12345',
                                    ],
                                    'Mobile' => [
                                        'description' => '手机号',
                                        'type' => 'string',
                                        'example' => '1390000****',
                                    ],
                                    'Region' => [
                                        'description' => '区域',
                                        'type' => 'string',
                                        'example' => 'cn',
                                    ],
                                    'IdentityId' => [
                                        'description' => '账号ID',
                                        'type' => 'string',
                                        'example' => 'identityidtest',
                                    ],
                                    'LoginId' => [
                                        'description' => '登录名',
                                        'type' => 'string',
                                        'example' => 'loginidtest',
                                    ],
                                    'Idp' => [
                                        'description' => '三方平台标识简称呼，如ALIOS。',
                                        'type' => 'string',
                                        'example' => 'ALIOS',
                                    ],
                                    'AliyunId' => [
                                        'description' => '租户ID',
                                        'type' => 'string',
                                        'example' => 'aliyunidtest',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"OpenAccount\\": {\\n    \\"Status\\": 0,\\n    \\"Type\\": 1,\\n    \\"DisplayName\\": \\"displaynametest\\",\\n    \\"CreateAccessKey\\": \\"createaccesskeytest\\",\\n    \\"OpenId\\": \\"12345\\",\\n    \\"Mobile\\": \\"1390000****\\",\\n    \\"Region\\": \\"cn\\",\\n    \\"IdentityId\\": \\"identityidtest\\",\\n    \\"LoginId\\": \\"loginidtest\\",\\n    \\"Idp\\": \\"ALIOS\\",\\n    \\"AliyunId\\": \\"aliyunidtest\\"\\n  }\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<DescribeOpenAccountResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<OpenAccount>\\r\\n\\t\\t<AliyunId>aliyunidtest</AliyunId>\\r\\n\\t\\t<CreateAccessKey>createaccesskeytest</CreateAccessKey>\\r\\n\\t\\t<DisplayName>displaynametest</DisplayName>\\r\\n\\t\\t<IdentityId>identityidtest</IdentityId>\\r\\n\\t\\t<Idp>ALIOS</Idp>\\r\\n\\t\\t<LoginId>loginidtest</LoginId>\\r\\n\\t\\t<Mobile>1390000****</Mobile>\\r\\n\\t\\t<OpenId>12345</OpenId>\\r\\n\\t\\t<Region>cn</Region>\\r\\n\\t\\t<Status>0</Status>\\r\\n\\t\\t<Type>1</Type>\\r\\n\\t</OpenAccount>\\r\\n</DescribeOpenAccountResponse>","errorExample":""}]',
            'title' => '获取账号信息',
            'summary' => '调用DescribeOpenAccount获取账号信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateUpstreamAppKeyRelation' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端应用标识，为cmns应用appKey。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xglrajCR',
                    ],
                ],
                [
                    'name' => 'PAppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '处理cmns上行消息的应用服务端标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fgbbajCR',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ewrtgggr',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Id' => [
                                'description' => '映射关系ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 1,\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The AppKey  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<CreateUpstreamAppKeyRelationResponse>\\r\\n\\t<Id>1</Id>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</CreateUpstreamAppKeyRelationResponse>","errorExample":""}]',
            'title' => '创建上行消息客户端与服务端的映射',
            'summary' => '根据客户端AppKey和服务端AppKey创建上行消息客户端与服务端的映射关系。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateUpstreamAppServer' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CS1HMVRF',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端应用名称。'."\n"
                            ."\n"
                            .'由字母、数字和下划线组成，不超过15个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testServer',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上行业务消息tag，方便应用服务器端对上行消息分类处理。多个tag通过英文逗号分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tag1,tag2',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Id' => [
                                'description' => '上行服务端应用ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 1,\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The Name  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<CreateUpstreamAppServerResponse>\\r\\n\\t<Id>1</Id>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</CreateUpstreamAppServerResponse>","errorExample":""}]',
            'title' => '创建处理上行消息的服务端应用',
            'summary' => '调用CreateUpstreamAppServer创建处理上行消息的服务端应用。',
            'description' => '> 根据名称、业务消息过滤标签、项目工程ID创建服务端应用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteUpstreamAppKeyRelation' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上行映射关系ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sghghshr',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The id  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<DeleteUpstreamAppKeyRelationResponse>\\r\\n<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</DeleteUpstreamAppKeyRelationResponse>","errorExample":""}]',
            'title' => '删除上行消息应用端与服务端的关系映射',
            'summary' => '根据关系ID删除上行消息应用端与服务端的关系映射记录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteUpstreamAppServer' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sghghshr',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端应用记录ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The id  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<DeleteUpstreamAppServerResponse>\\r\\n<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</DeleteUpstreamAppServerResponse>","errorExample":""}]',
            'title' => '删除处理上行消息的服务端应用信息',
            'summary' => '根据记录ID删除处理上行消息的服务端应用信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateUpstreamAppServer' => [
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端应用ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'upstreamTest',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上行消息业务tag，多个tag通过英文逗号拼接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tag1,tag2',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ewtwtt4f',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The Id  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<UpdateUpstreamAppServerResponse>\\r\\n<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</UpdateUpstreamAppServerResponse>","errorExample":""}]',
            'title' => '更新上行消息服务端应用名称、标签等信息',
            'summary' => '调用UpdateUpstreamAppServer更新上行消息服务端应用名称、标签等信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListMessageAcks' => [
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
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页每页数据集数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gsgshhfs',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'dis系统设备ID。可实现查询结果：'."\n"
                            ."\n"
                            .'1. 单独DeviceId条件查询时，返回该设备消息ack记录列表。'."\n"
                            .'2. 与MessageId参数联合查询时，返回指定设备指定消息ack记录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fc71429ddd9b473c81d7ef5f33ab10cc',
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息id。可实现查询结果：'."\n"
                            ."\n"
                            .'1. 单独MessageId条件查询时，返回该消息ack记录列表。'."\n"
                            .'2. 与DeviceId参数联合查询时，返回指定设备指定消息ack记录。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '24266',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'MessageAcks' => [
                                'description' => 'ack记录分页数据对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页对象。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '分页页码。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TotalPageCount' => [
                                                'description' => '总分页数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'PageSize' => [
                                                'description' => '分页每页数据集大小。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                            'TotalCount' => [
                                                'description' => '数据集总数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '30',
                                            ],
                                        ],
                                    ],
                                    'List' => [
                                        'description' => '分页列表数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DeviceId' => [
                                                    'description' => 'dis系统设备ID。',
                                                    'type' => 'string',
                                                    'example' => 'fc71429ddd9b473c81d7ef5f33ab10cc',
                                                ],
                                                'AckTime' => [
                                                    'description' => '消息到达时间，精确到ms。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1525684245000',
                                                ],
                                                'Mid' => [
                                                    'description' => '消息ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '24266',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"MessageAcks\\": {\\n    \\"List\\": [\\n      {\\n        \\"DeviceId\\": \\"fc71429ddd9b473c81d7ef5f33ab10cc\\",\\n        \\"AckTime\\": 1525684245000,\\n        \\"Mid\\": 24266\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"TotalPageCount\\": 2,\\n      \\"PageSize\\": 20,\\n      \\"TotalCount\\": 30\\n    }\\n  }\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The DeviceId  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<ListMessageAcksResponse>\\r\\n\\t<MessageAcks>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<TotalCount>3</TotalCount>\\r\\n\\t\\t\\t<TotalPageCount>1</TotalPageCount>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<PageSize>20</PageSize>\\r\\n\\t\\t</Pagination>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<Mid>106577</Mid>\\r\\n\\t\\t\\t<DeviceId>fc71429ddd9b473c81d7ef5f33ab10cc</DeviceId>\\r\\n\\t\\t\\t<AckTime>1525517606000</AckTime>\\r\\n\\t\\t</List>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<Mid>205951</Mid>\\r\\n\\t\\t\\t<DeviceId>fc71429ddd9b473c81d7ef5f33ab10cc</DeviceId>\\r\\n\\t\\t\\t<AckTime>1525516333000</AckTime>\\r\\n\\t\\t</List>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<Mid>106578</Mid>\\r\\n\\t\\t\\t<DeviceId>fc71429ddd9b473c81d7ef5f33ab10cc</DeviceId>\\r\\n\\t\\t\\t<AckTime>1525517639000</AckTime>\\r\\n\\t\\t</List>\\r\\n\\t</MessageAcks>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListMessageAcksResponse>","errorExample":""}]',
            'title' => '查询消息ack记录列表',
            'summary' => '根据消息id、设备id查询消息ack记录列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListOfflineMessages' => [
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
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询每页数据集数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sfgsghd6',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '离线箱查询类型。取值：**deviceId**、**kp**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'deviceId',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '**deviceId**或者**kp**(iasId)对应的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fc71429ddd9b473c81d7ef5f33ab10cc',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'OfflineMessages' => [
                                'description' => '离线消息分页查询数据对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页对象。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '分页页码',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TotalPageCount' => [
                                                'description' => '总分页数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'PageSize' => [
                                                'description' => '分页每页数据集大小',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                            'TotalCount' => [
                                                'description' => '数据集总数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '30',
                                            ],
                                        ],
                                    ],
                                    'List' => [
                                        'description' => '离线消息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ExpiredTime' => [
                                                    'description' => '消息失效时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1525693420000',
                                                ],
                                                'Mid' => [
                                                    'description' => '消息ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '106577',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '消息创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1525517606000',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"OfflineMessages\\": {\\n    \\"List\\": [\\n      {\\n        \\"GmtCreate\\": 1525517606000,\\n        \\"ExpiredTime\\": 1525693420000,\\n        \\"Mid\\": 106577\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"TotalPageCount\\": 2,\\n      \\"PageSize\\": 20,\\n      \\"TotalCount\\": 30\\n    }\\n  }\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The type  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<ListOfflineMessagesResponse>\\r\\n\\t<OfflineMessages>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<TotalCount>2</TotalCount>\\r\\n\\t\\t\\t<TotalPageCount>1</TotalPageCount>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<PageSize>20</PageSize>\\r\\n\\t\\t</Pagination>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<Mid>106577</Mid>\\r\\n\\t\\t\\t<ExpiredTime>1525693420000</ExpiredTime>\\r\\n\\t\\t\\t<GmtCreate>1525517606000</GmtCreate>\\r\\n\\t\\t</List>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<Mid>205951</Mid>\\r\\n\\t\\t\\t<ExpiredTime>1525693520000</ExpiredTime>\\r\\n\\t\\t\\t<GmtCreate>1525517616000</GmtCreate>\\r\\n\\t\\t</List>\\r\\n\\t</OfflineMessages>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListOfflineMessagesResponse>","errorExample":""}]',
            'title' => '查询设备离线消息列表',
            'summary' => '根据deviceId或kp查询设备离线消息列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeMessage' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fsgtd5y5r',
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '455888',
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
                                'example' => 'sfsgghdhh56666',
                            ],
                            'Message' => [
                                'description' => '消息详情',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '消息类型。'."\n"
                                            ."\n"
                                            .'**1**表示透传；**2**表示通知。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'Action' => [
                                        'description' => '消息侦听通道。',
                                        'type' => 'string',
                                        'example' => 'com.aliyun.iovcc.test',
                                    ],
                                    'ProjectId' => [
                                        'description' => 'iovcc项目工程ID。',
                                        'type' => 'string',
                                        'example' => 'ssgdghww',
                                    ],
                                    'PredictSendCnt' => [
                                        'description' => '预期消息到达设备数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'Uri' => [
                                        'description' => 'alios系统专用，用于定位接收消息应用。',
                                        'type' => 'string',
                                        'example' => 'page://broadcast.alios.com',
                                    ],
                                    'Desc' => [
                                        'description' => '通知内容描述。',
                                        'type' => 'string',
                                        'example' => 'this is desc test',
                                    ],
                                    'AuditMsg' => [
                                        'type' => 'string',
                                    ],
                                    'AppName' => [
                                        'description' => '客户端应用名称。',
                                        'type' => 'string',
                                        'example' => 'pushdemo',
                                    ],
                                    'AppKey' => [
                                        'description' => '客户端应用标识，项目工程下自定义应用appKey。',
                                        'type' => 'string',
                                        'example' => 'wTiRKC9m',
                                    ],
                                    'GmtCreateTime' => [
                                        'description' => '消息创建时间，精确到毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1525681245000',
                                    ],
                                    'ExipiredTime' => [
                                        'description' => '失效时间，精确到毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1525684245000',
                                    ],
                                    'AckCnt' => [
                                        'description' => '消息到达设备数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Title' => [
                                        'description' => '通知标题。',
                                        'type' => 'string',
                                        'example' => 'this is a title test',
                                    ],
                                    'Parameter' => [
                                        'description' => '消息参数。'."\n"
                                            ."\n"
                                            .'为pkgContent与customCent合并后的json字符串。',
                                        'type' => 'string',
                                        'example' => '{\\"package\\":\\"com.aliyun.iovcc.test\\",\\"key1\\":\\"value1\\"}"',
                                    ],
                                    'Audit' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Id' => [
                                        'description' => '消息ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2231942',
                                    ],
                                    'SendStatus' => [
                                        'description' => '消息状态。'."\n"
                                            ."\n"
                                            .'**0**表示发送中；**1**表示消息发送完成；**2**表示消息已失效。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"sfsgghdhh56666\\",\\n  \\"Message\\": {\\n    \\"Type\\": 2,\\n    \\"Action\\": \\"com.aliyun.iovcc.test\\",\\n    \\"ProjectId\\": \\"ssgdghww\\",\\n    \\"PredictSendCnt\\": 3,\\n    \\"Uri\\": \\"page://broadcast.alios.com\\",\\n    \\"Desc\\": \\"this is desc test\\",\\n    \\"AppName\\": \\"pushdemo\\",\\n    \\"GmtCreateTime\\": 1525681245000,\\n    \\"AppKey\\": \\"wTiRKC9m\\",\\n    \\"ExipiredTime\\": 1525684245000,\\n    \\"AckCnt\\": 1,\\n    \\"Title\\": \\"this is a title test\\",\\n    \\"Parameter\\": \\"{\\\\\\\\\\\\\\"package\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"com.aliyun.iovcc.test\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"key1\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"value1\\\\\\\\\\\\\\"}\\\\\\"\\",\\n    \\"Id\\": 2231942,\\n    \\"SendStatus\\": 0\\n  }\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The MessageId  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<DescribeMessageResponse>\\r\\n\\t<Message>\\r\\n\\t\\t<Id>2231942</Id>\\r\\n\\t\\t<AppName>ALIOS_JARVIS</AppName>\\r\\n\\t\\t<AppKey>WS2MptYY</AppKey>\\r\\n\\t\\t<ProjectId>ssgdghww</ProjectId>\\r\\n\\t\\t<Type>1</Type>\\r\\n\\t\\t<SendStatus>1</SendStatus>\\r\\n\\t\\t<Title></Title>\\r\\n\\t\\t<Desc></Desc>\\r\\n\\t\\t<Action>test.action.alios.com</Action>\\r\\n\\t\\t<Uri>page://broadcast.alios.com</Uri>\\r\\n\\t\\t<Parameter>{&quot;package&quot;:&quot;com.aliyun.iovcc.test&quot;,&quot;key1&quot;:&quot;value1&quot;}</Parameter>\\r\\n\\t\\t<PredictSendCnt>1</PredictSendCnt>\\r\\n\\t\\t<AckCnt>1</AckCnt>\\r\\n\\t\\t<GmtCreateTime>1525256539000</GmtCreateTime>\\r\\n\\t\\t<ExipiredTime>1525260138000</ExipiredTime>\\r\\n\\t</Message>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</DescribeMessageResponse>","errorExample":""}]',
            'title' => '查询消息详情',
            'summary' => '根据消息ID查询消息详情。详情包括消息体内容、消息到达情况。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PushVersionMessage' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，取值：'."\n"
                            ."\n"
                            .'- **FOTA**：系统版本'."\n"
                            .'- **APP**：应用版本',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<PushVersionMessageResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</PushVersionMessageResponse>","errorExample":""}]',
            'title' => '给某一版本下的所有机型推送升级消息',
            'summary' => '调用PushVersionMessage给某一版本下的所有机型推送升级消息。',
            'description' => '> 只能给“预发布”，“已发布”状态的版本推送消息。'."\n"
                ."\n"
                .'- 针对系统版本推送，因为系统版本只关联一个机型，会对该机型下所有设备推送升级消息。'."\n"
                .'- 针对应用版本推送，则会对应用版本下的所有关联机型覆盖的设备推送升级消息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindVersionMessages' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本页开始序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'MessageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '取值有：'."\n"
                            ."\n"
                            .'- **VERSION_TEST**：系统版本测试消息推送'."\n"
                            .'- **SYSTEM_UPDATE**：系统版本发布消息推送'."\n"
                            .'- **APP_VERSION_TEST**：应用自升级测试消息推送'."\n"
                            .'- **APP_VERSION_UPDATE**：应用自升级发布消息推送',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VERSION_TEST',
                    ],
                ],
                [
                    'name' => 'TestId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SendRecordId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '群发记录ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云设备ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b8fe2e24ff2b48e0a3aa4e49809fc1b3',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，取值有：FOTA 系统版本，APP 应用版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'MessageList' => [
                                'description' => '查询到的消息结果',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '结果列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtModifyTimestamp' => [
                                                    'description' => '修改时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '18974500000',
                                                ],
                                                'GmtCreateTimestamp' => [
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '18974500000',
                                                ],
                                                'Status' => [
                                                    'description' => '发送状态',
                                                    'type' => 'string',
                                                    'example' => 'SUCCESS',
                                                ],
                                                'GmtModify' => [
                                                    'description' => '修改时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:01:00',
                                                ],
                                                'MessageId' => [
                                                    'description' => '发送的消息ID',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'DeviceId' => [
                                                    'description' => '云设备ID',
                                                    'type' => 'string',
                                                    'example' => 'b8fe2e24ff2b48e0a3aa4e49809fc1b3',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:00:00',
                                                ],
                                                'VersionId' => [
                                                    'description' => '版本ID',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'StatusDesc' => [
                                                    'description' => '发送状态描述',
                                                    'type' => 'string',
                                                    'example' => '发送成功',
                                                ],
                                                'TestId' => [
                                                    'description' => '测试ID',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '符合条件的记录总数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"MessageList\\": {\\n    \\"TotalCount\\": 5,\\n    \\"Items\\": [\\n      {\\n        \\"GmtModifyTimestamp\\": 18974500000,\\n        \\"GmtCreateTimestamp\\": 18974500000,\\n        \\"Status\\": \\"SUCCESS\\",\\n        \\"GmtModify\\": \\"2018-01-01 00:01:00\\",\\n        \\"MessageId\\": \\"1\\",\\n        \\"DeviceId\\": \\"b8fe2e24ff2b48e0a3aa4e49809fc1b3\\",\\n        \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n        \\"VersionId\\": \\"1\\",\\n        \\"StatusDesc\\": \\"发送成功\\",\\n        \\"TestId\\": \\"1\\",\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<FindVersionMessagesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<MessageList>\\r\\n\\t\\t<TotalCount>30</TotalCount>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<Id>1</Id>\\r\\n\\t\\t\\t<VersionId>1</VersionId>\\r\\n\\t\\t\\t<TestId>1</TestId>\\r\\n\\t\\t\\t<MessageId>1</MessageId>\\r\\n\\t\\t\\t<DeviceId>b8fe2e24ff2b48e0a3aa4e49809fc1b3</DeviceId>\\r\\n\\t\\t\\t<Status>SUCCESS</Status>\\r\\n\\t\\t\\t<StatusDesc>发送成功</StatusDesc>\\r\\n\\t\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t\\t<GmtModify>2018-01-01 00:01:00</GmtModify>\\r\\n\\t\\t</Items>\\r\\n\\t</MessageList>\\r\\n</FindVersionMessagesResponse>","errorExample":""}]',
            'title' => '查询消息发送情况',
            'summary' => '查询某一版本、测试或群发记录下的消息发送情况。',
            'description' => '> 根据MessageType决定查询的目标类型。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindVersionMessageSendRecords' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，取值有： FOTA 系统版本， APP 应用版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本页开始序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'MessageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => ' 消息类型，取值：'."\n"
                            ."\n"
                            .'-  **SYSTEM_UPDATE**：系统版本发布消息推送,'."\n"
                            .'-  **APP_VERSION_UPDATE**：应用自升级发布消息推送',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SYSTEM_UPDATE',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MessageSendRecordList' => [
                                'description' => '查询到的消息发送记录',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '发送记录列表详情',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtCreateTimestamp' => [
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1645460000',
                                                ],
                                                'MessageType' => [
                                                    'description' => ' 消息类型，取值：'."\n"
                                                        .' '."\n"
                                                        .'- **SYSTEM_UPDATE**：系统版本发布消息推送'."\n"
                                                        .'-  **APP_VERSION_UPDATE**：应用自升级发布消息推送',
                                                    'type' => 'string',
                                                    'example' => 'SYSTEM_UPDATE',
                                                ],
                                                'FailedCount' => [
                                                    'description' => '失败消息数',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'SkippedCount' => [
                                                    'description' => '跳过消息数',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'Result' => [
                                                    'description' => '消息发送结果',
                                                    'type' => 'string',
                                                    'example' => 'SUCCESS',
                                                ],
                                                'SucceededCount' => [
                                                    'description' => '成功消息数',
                                                    'type' => 'string',
                                                    'example' => '100',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:00:00',
                                                ],
                                                'VersionId' => [
                                                    'description' => '版本ID',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'ResultDesc' => [
                                                    'description' => '消息发送结果描述',
                                                    'type' => 'string',
                                                    'example' => '发送成功',
                                                ],
                                                'TargetId' => [
                                                    'description' => '目标ID',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '符合条件的记录总数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"MessageSendRecordList\\": {\\n    \\"TotalCount\\": 30,\\n    \\"Items\\": [\\n      {\\n        \\"GmtCreateTimestamp\\": 1645460000,\\n        \\"MessageType\\": \\"SYSTEM_UPDATE\\",\\n        \\"FailedCount\\": \\"0\\",\\n        \\"SkippedCount\\": \\"0\\",\\n        \\"Result\\": \\"SUCCESS\\",\\n        \\"SucceededCount\\": \\"100\\",\\n        \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n        \\"VersionId\\": \\"1\\",\\n        \\"ResultDesc\\": \\"发送成功\\",\\n        \\"TargetId\\": \\"1\\",\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<FindVersionMessageSendRecordsResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<MessageSendRecordList>\\r\\n\\t\\t<TotalCount>30</TotalCount>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<Id>1</Id>\\r\\n\\t\\t\\t<MessageType>SYSTEM_UPDATE</MessageType>\\r\\n\\t\\t\\t<VersionId>1</VersionId>\\r\\n\\t\\t\\t<TargetId>1</TargetId>\\r\\n\\t\\t\\t<Result>SUCCESS</Result>\\r\\n\\t\\t\\t<ResultDesc>发送成功</ResultDesc>\\r\\n\\t\\t\\t<SucceededCount>100</SucceededCount>\\r\\n\\t\\t\\t<FailedCount>0</FailedCount>\\r\\n\\t\\t\\t<SkippedCount>0</SkippedCount>\\r\\n\\t\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t</Items>\\r\\n\\t</MessageSendRecordList>\\r\\n</FindVersionMessageSendRecordsResponse>","errorExample":""}]',
            'title' => '查询群发消息记录',
            'summary' => '查询版本下的群发消息记录，只针对按照机型群发的消息记录的查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAppVersion' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'IsForceUpgrade',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制升级，取值：**Y** | **N**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'IsAllowNewInstall',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表示当客户端不存在此应用时，是否允许新安装此应用，相当于后装。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，表示要针对哪个应用进行升级。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用版本号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0',
                    ],
                ],
                [
                    'name' => 'VersionCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用版本versioncode',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'InstallType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安装类型，取值：**auto**表示自动，**customize**表示自定义。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'auto',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本备注',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sample remark',
                    ],
                ],
                [
                    'name' => 'ReleaseNote',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本发布说明',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sample release note',
                    ],
                ],
                [
                    'name' => 'IsSilentUpgrade',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否静默升级，取值：**Y** | **N**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'PackageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '升级包地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://www.oss-server.com/file.zip',
                    ],
                ],
                [
                    'name' => 'IsNeedRestart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否需要重启，取值：**Y** | **N**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'BlackVersionList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本黑名单，versioncode英文逗号拼接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10,20,30',
                    ],
                ],
                [
                    'name' => 'WhiteVersionList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本白名单，versioncode英文逗号拼接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10,20,30',
                    ],
                ],
                [
                    'name' => 'RestartType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用安装完成后的重启类型。取值：'."\n"
                            ."\n"
                            .'- **system**：系统重启'."\n"
                            .'- **app**：应用重启',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'app',
                    ],
                ],
                [
                    'name' => 'RestartAppType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '如果restartType为应用重启，则这个字段表示应用重启的类型。取值：'."\n"
                            ."\n"
                            .'- **service**：Service重启'."\n"
                            .'- **activity**：Activity重启',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'service',
                    ],
                ],
                [
                    'name' => 'RestartAppParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用重启时可以由服务端指定的重启参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"restartDelay":1}',
                    ],
                ],
                [
                    'name' => 'DeviceAdapterList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用版本的适配机型列表。'."\n"
                            ."\n"
                            .'格式：`deviceModelId1|minOsVersion1|maxOsVersion1,deviceModelId2|minOsVersion2|maxOsVersion2`，即设备型号ID|最低的系统版本号|最高的系统版本号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10|2.0.1-R-20180412.1024|3.0.1-R-20180412.1024,11|2.1.1-R-20180412.1024|3.1.1-R-20180412.1024',
                    ],
                ],
                [
                    'name' => 'ApkMd5',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'APK的MD5值',
                        'type' => 'string',
                        'required' => false,
                        'example' => '34653456wertwe234653retwewer3456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VersionId' => [
                                'description' => '版本ID',
                                'type' => 'string',
                                'example' => '12345',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"VersionId\\": \\"12345\\",\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<CreateAppVersionResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<VersionId>12345</VersionId>\\r\\n</CreateAppVersionResponse>","errorExample":""}]',
            'title' => '创建应用升级版本',
            'summary' => '调用CreateAppVersion创建应用升级版本。',
            'description' => '> 当用户需要进行应用升级时，需要首先调用此接口创建一个应用版本，然后进行后续的版本测试、灰度、发布。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateAppBlackWhiteVersions' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WhiteAppVersions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单版本versioncode列表，英文逗号分隔，黑白名单不能同时设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12,13,14',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'BlackAppVersions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '黑名单版本versioncode列表，英文逗号分隔，黑白名单不能同时设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12,13,14',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateAppBlackWhiteVersionsResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateAppBlackWhiteVersionsResponse>","errorExample":""}]',
            'title' => '更新应用版本的版本的黑白名单',
            'summary' => '调用UpdateAppBlackWhiteVersions更新应用版本的版本的黑白名单。',
            'description' => '例如，若配置某个应用版本，只有哪些低版本的应用版本才能升级到此版本时，可以设置版本白名单。黑白名单不能同时设置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateAppVersionReleaseNote' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'ReleaseNote',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发布说明',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sample release note',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateAppVersionReleaseNoteResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateAppVersionReleaseNoteResponse>","errorExample":""}]',
            'title' => '更新应用版本的发布说明',
            'summary' => '调用UpdateAppVersionReleaseNote更新应用版本的发布说明。',
            'description' => '> 当版本灰度或者发布了，还希望更新版本的发布说明时，可以调用此接口更新版本发布说明。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateAppVersionStatus' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PUBLISHED',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateAppVersionStatusResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateAppVersionStatusResponse>","errorExample":""}]',
            'title' => '切换应用版本状态',
            'summary' => '测试通过、已发布、已下架、已废弃。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateAppVersion' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'BlackVersionList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本黑名单，versioncode英文逗号拼接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10,20,30',
                    ],
                ],
                [
                    'name' => 'IsAllowNewInstall',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当客户端不存在该应用时，服务端是否允许返回该应用版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，表示要针对哪个应用进行升级。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用版本号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0',
                    ],
                ],
                [
                    'name' => 'VersionCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用版本versioncode',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'InstallType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用升级包安装方式。取值：**auto** / **customize**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'auto',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本备注',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sample remark',
                    ],
                ],
                [
                    'name' => 'IsForceUpgrade',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制升级，Y或N。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'IsSilentUpgrade',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否静默升级，Y或N。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'IsNeedRestart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否需要重启，Y或N。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'PackageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '升级包地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://www.oss-server.com/file.zip',
                    ],
                ],
                [
                    'name' => 'ReleaseNote',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本发布说明',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sample release note',
                    ],
                ],
                [
                    'name' => 'WhiteVersionList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本白名单，versioncode英文逗号拼接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10,20,30',
                    ],
                ],
                [
                    'name' => 'RestartType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用安装完成后的重启类型。取值：'."\n"
                            ."\n"
                            .'- **system**：表示系统重启'."\n"
                            .'- **app**：表示应用重启',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'app',
                    ],
                ],
                [
                    'name' => 'RestartAppType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '如果restartType为应用重启，则这个字段表示应用重启的类型。'."\n"
                            ."\n"
                            .'- **service**：表示Service重启'."\n"
                            .'- **activity**：表示Activity重启',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'service',
                    ],
                ],
                [
                    'name' => 'RestartAppParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用重启时可以由服务端指定的重启参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"restartDelay":1}',
                    ],
                ],
                [
                    'name' => 'DeviceAdapterList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用版本的适配机型列表。'."\n"
                            ."\n"
                            .'格式为：`deviceModelId|minOsVersion|maxOsVersion`，即设备型号ID|最低的系统版本号|最高的系统版本号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10|2.0.1-R-20180412.1024|3.0.1-R-20180412.1024,11|2.1.1-R-20180412.1024|3.1.1-R-20180412.1024',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'ApkMd5',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'APK的MD5值',
                        'type' => 'string',
                        'required' => false,
                        'example' => '34653456wertwe234653retwewer3456',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateAppVersionResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateAppVersionResponse>","errorExample":""}]',
            'title' => '更新应用升级版本中的各项信息配置',
            'summary' => '调用UpdateAppVersion更新应用升级版本中的各项信息配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateAppVersionRemark' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本备注信息',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sample remark',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateAppVersionRemarkResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateAppVersionRemarkResponse>","errorExample":""}]',
            'title' => '更新备注信息',
            'summary' => '在版本创建完成后，更新备注信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetDeviceAppUpdateFunnelEvents' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'PackageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用包名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.aliyun.package1',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'TargetVersionCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标版本versioncode',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'IdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID类型，支持：'."\n"
                            ."\n"
                            .'- **device_id**：硬件ID'."\n"
                            .'- **sn**：序列号'."\n"
                            .'- **vin**：车架号'."\n"
                            .'- **hardware_id**：硬件ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hardware_id',
                    ],
                ],
                [
                    'name' => 'OriginalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源设备ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '23452345234523452',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'EventList' => [
                                'description' => '升级进度事件列表信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'PackageName' => [
                                            'description' => '应用包名',
                                            'type' => 'string',
                                            'example' => 'com.aliyun.package1',
                                        ],
                                        'DeviceId' => [
                                            'description' => '云设备ID',
                                            'type' => 'string',
                                            'example' => 'AS23DG23SA5D43GA34SD23GW456E',
                                        ],
                                        'TargetVersionCode' => [
                                            'description' => '升级目标版本versioncode',
                                            'type' => 'string',
                                            'example' => '2005680',
                                        ],
                                        'Event' => [
                                            'description' => '事件名称',
                                            'type' => 'string',
                                            'example' => 'os_download_succ',
                                        ],
                                        'ReportTimestamp' => [
                                            'description' => '上报时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '16834500000',
                                        ],
                                        'ReportTime' => [
                                            'description' => '事件上报时间',
                                            'type' => 'string',
                                            'example' => '2018-02-14 14:20:18',
                                        ],
                                        'TenantId' => [
                                            'description' => '项目ID',
                                            'type' => 'string',
                                            'example' => 'P0VFCREU',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"EventList\\": [\\n    {\\n      \\"PackageName\\": \\"com.aliyun.package1\\",\\n      \\"DeviceId\\": \\"AS23DG23SA5D43GA34SD23GW456E\\",\\n      \\"TargetVersionCode\\": \\"2005680\\",\\n      \\"Event\\": \\"os_download_succ\\",\\n      \\"ReportTimestamp\\": 16834500000,\\n      \\"ReportTime\\": \\"2018-02-14 14:20:18\\",\\n      \\"TenantId\\": \\"P0VFCREU\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<GetDeviceAppUpdateFunnelEventsResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<EventList>\\r\\n\\t\\t<TotalCount>25</TotalCount>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<TenantId>P0VFCREU</TenantId>\\r\\n\\t\\t\\t<DeviceId>AS23DG23SA5D43GA34SD23GW456E</DeviceId>\\r\\n\\t\\t\\t<TargetVersionCode>2005680</TargetVersionCode>\\r\\n\\t\\t\\t<PackageName>com.aliyun.package1</PackageName>\\r\\n\\t\\t\\t<Event>os_download_succ</Event>\\r\\n\\t\\t\\t<ReportTime>2018-02-14 14:20:18</ReportTime>\\r\\n\\t\\t</Items>\\r\\n\\t</EventList>\\r\\n</GetDeviceAppUpdateFunnelEventsResponse>","errorExample":""}]',
            'title' => '获取设备应用升级的进度信息',
            'summary' => '调用GetDeviceAppUpdateFunnelEvents获取设备应用升级的进度信息。',
            'description' => '例如：是否查询到版本，版本下载是否成功，签名校验是否成功，安装是否成功等。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PublishAppVersion' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SendMessage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否发送消息',
                        'type' => 'boolean',
                        'required' => true,
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<PublishAppVersionResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</PublishAppVersionResponse>","errorExample":""}]',
            'title' => '发布应用版本',
            'summary' => '发布应用版本，可控制是否推送升级消息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindAppVersions' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本状态，如**TESTING**，**TEST_PASSED**，**PREPUBLISH**，**PUBLISHED**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PUBLISHED',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页大小，支持20，50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1230',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页索引，从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sample remark',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AppVersionList' => [
                                'description' => '版本列表信息，包括当前页的版本列表以及总共符合条件的版本个数。',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '符合条件的当前页的版本列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '版本状态，状态定义和系统版本升级一致。',
                                                    'type' => 'string',
                                                    'example' => 'PUBLISHED',
                                                ],
                                                'GmtCreateTimestamp' => [
                                                    'description' => '版本创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12432500000',
                                                ],
                                                'GmtModify' => [
                                                    'description' => '版本更新时间',
                                                    'type' => 'string',
                                                    'example' => '2018-04-24 12:23:45',
                                                ],
                                                'IsAllowNewInstall' => [
                                                    'description' => '表示当客户端不存在此应用时，是否允许新安装此应用，相当于后装。',
                                                    'type' => 'string',
                                                    'example' => 'Y',
                                                ],
                                                'StatusName' => [
                                                    'description' => '状态名',
                                                    'type' => 'string',
                                                    'example' => '已发布',
                                                ],
                                                'RestartAppParam' => [
                                                    'description' => '应用重启参数，Y或N',
                                                    'type' => 'string',
                                                    'example' => 'N',
                                                ],
                                                'IsSilentUpgrade' => [
                                                    'description' => '是否静默升级，Y或N',
                                                    'type' => 'string',
                                                    'example' => 'N',
                                                ],
                                                'AppPackageName' => [
                                                    'description' => '应用包名',
                                                    'type' => 'string',
                                                    'example' => 'com.aliyun.iovcc.ota',
                                                ],
                                                'GmtModifyTimestamp' => [
                                                    'description' => '版本更新时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12432500000',
                                                ],
                                                'AppName' => [
                                                    'description' => '应用名',
                                                    'type' => 'string',
                                                    'example' => 'iovcc-ota',
                                                ],
                                                'InstallType' => [
                                                    'description' => '版本升级包客户端安装类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **auto**：表示自动安装'."\n"
                                                        .'- **customize**：表示自定义安装',
                                                    'type' => 'string',
                                                    'example' => 'auto',
                                                ],
                                                'IsNeedRestart' => [
                                                    'description' => '是否需要重启，Y或N',
                                                    'type' => 'string',
                                                    'example' => 'N',
                                                ],
                                                'RestartAppType' => [
                                                    'description' => '如果restartType为应用重启，则这个字段表示应用重启的类型。取值：'."\n"
                                                        ."\n"
                                                        .'- **service**：表示Service重启'."\n"
                                                        .'- **activity**：表示Activity重启',
                                                    'type' => 'string',
                                                    'example' => 'service',
                                                ],
                                                'AppId' => [
                                                    'description' => '应用ID',
                                                    'type' => 'string',
                                                    'example' => '20',
                                                ],
                                                'RestartType' => [
                                                    'description' => '应用安装完成后的重启类型，取值：'."\n"
                                                        ."\n"
                                                        .'- **system**：表示系统重启'."\n"
                                                        .'- **app**：表示应用重启',
                                                    'type' => 'string',
                                                    'example' => 'app',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '版本创建时间',
                                                    'type' => 'string',
                                                    'example' => '2018-04-24 12:23:45',
                                                ],
                                                'AppVersion' => [
                                                    'description' => '应用版本号',
                                                    'type' => 'string',
                                                    'example' => '2.0.2',
                                                ],
                                                'VersionCode' => [
                                                    'description' => '应用版本versioncode，是用于应用升级版本比较大小的字段。',
                                                    'type' => 'string',
                                                    'example' => '201',
                                                ],
                                                'IsForceUpgrade' => [
                                                    'description' => '是否强制升级，Y或N',
                                                    'type' => 'string',
                                                    'example' => 'N',
                                                ],
                                                'Id' => [
                                                    'description' => '版本ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12345',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '符合条件的总记录数，方便调用方计算总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"AppVersionList\\": {\\n    \\"TotalCount\\": 1000,\\n    \\"Items\\": [\\n      {\\n        \\"GmtCreateTimestamp\\": 12432500000,\\n        \\"Status\\": \\"PUBLISHED\\",\\n        \\"IsAllowNewInstall\\": \\"Y\\",\\n        \\"GmtModify\\": \\"2018-04-24 12:23:45\\",\\n        \\"StatusName\\": \\"已发布\\",\\n        \\"RestartAppParam\\": \\"N\\",\\n        \\"AppPackageName\\": \\"com.aliyun.iovcc.ota\\",\\n        \\"IsSilentUpgrade\\": \\"N\\",\\n        \\"GmtModifyTimestamp\\": 12432500000,\\n        \\"AppName\\": \\"iovcc-ota\\",\\n        \\"InstallType\\": \\"auto\\",\\n        \\"IsNeedRestart\\": \\"N\\",\\n        \\"RestartAppType\\": \\"service\\",\\n        \\"AppId\\": \\"20\\",\\n        \\"RestartType\\": \\"app\\",\\n        \\"GmtCreate\\": \\"2018-04-24 12:23:45\\",\\n        \\"AppVersion\\": \\"2.0.2\\",\\n        \\"VersionCode\\": \\"201\\",\\n        \\"IsForceUpgrade\\": \\"N\\",\\n        \\"Id\\": 12345\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<FindAppVersionsResponse>\\r\\n\\t<AppVersionList>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<AppId>1</AppId>\\r\\n\\t\\t\\t<AppName>iovcc-ota</AppName>\\r\\n\\t\\t\\t<AppPackageName>com.aliyun.iovcc.ota</AppPackageName>\\r\\n\\t\\t\\t<AppVersion>2.0.2</AppVersion>\\r\\n\\t\\t\\t<AsAllowNewInstall>N</AsAllowNewInstall>\\r\\n\\t\\t\\t<GmtCreate></GmtCreate>\\r\\n\\t\\t\\t<GmtModify></GmtModify>\\r\\n\\t\\t\\t<Id>124</Id>\\r\\n\\t\\t\\t<InstallType>auto</InstallType>\\r\\n\\t\\t\\t<IsForceUpgrade>N</IsForceUpgrade>\\r\\n\\t\\t\\t<IsNeedRestart>N</IsNeedRestart>\\r\\n\\t\\t\\t<IsSilentUpgrade>N</IsSilentUpgrade>\\r\\n\\t\\t\\t<RestartAppParam>N</RestartAppParam>\\r\\n\\t\\t\\t<RestartAppType>N</RestartAppType>\\r\\n\\t\\t\\t<RestartType>system</RestartType>\\r\\n\\t\\t\\t<Status>PUBLISHED</Status>\\r\\n\\t\\t\\t<StatusName>已发布</StatusName>\\r\\n\\t\\t\\t<VersionCode>202</VersionCode>\\r\\n\\t\\t</Items>\\r\\n\\t\\t<TotalCount>1000</TotalCount>\\r\\n\\t</AppVersionList>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</FindAppVersionsResponse>","errorExample":""}]',
            'title' => '按分页获取应用版本列表',
            'summary' => '调用FindAppVersions分页获取应用版本列表。',
            'description' => '**支持多种查询条件，如机型、系统版本号等。**',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddVersionBlackDevices' => [
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
                    'name' => 'DeviceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID列表，英文逗号隔开。具体设备ID使用哪个，由DeviceIdType决定。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11,22,33',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，支持：'."\n"
                            ."\n"
                            .'- FOTA：系统升级'."\n"
                            .'- APP：应用升级',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'DeviceIdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID类型，支持：'."\n"
                            ."\n"
                            .'- device_id：硬件ID，'."\n"
                            .'- sn：序列号，'."\n"
                            .'- vin：车架号，'."\n"
                            .'- hardware_id：硬件ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hardware_id',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<AddVersionBlackDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</AddVersionBlackDevicesResponse>","errorExample":""}]',
            'title' => '为系统版本或者应用版本添加黑名单',
            'summary' => '调用AddVersionBlackDevices为系统版本或者应用版本添加黑名单。',
            'description' => '> 在系统升级或应用升级时，当希望某些特定的设备不允许升级时，可以调用此接口添加版本的设备黑名单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateOsVersion' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'IsForceNightUpgrade',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制夜间升级，取值：**Y | N**。'."\n"
                            ."\n"
                            .'与强制升级不能同时选择是（Y）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'MaxClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许的OTA SDK的最大版本versioncode',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1200',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'SystemVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统版本号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2.0.1-R-20180501.1208',
                    ],
                ],
                [
                    'name' => 'ReleaseNote',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本发布说明',
                        'type' => 'string',
                        'required' => false,
                        'example' => '改用UI用户体验，提升系统稳定性',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注',
                        'type' => 'string',
                        'required' => false,
                        'example' => '版本备注信息，终端设备不可见',
                    ],
                ],
                [
                    'name' => 'BlackVersionList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统版本黑名单列表，英文逗号隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.0.1-R-20180501.1208,2.0.1-R-20180501.1209',
                    ],
                ],
                [
                    'name' => 'IsMilestone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否里程碑，取值：**Y | N**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'MinClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许的OTA SDK的最小版本versioncode',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1100',
                    ],
                ],
                [
                    'name' => 'WhiteVersionList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统版本白名单，英文逗号隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.0.1-R-20180501.1208,2.0.1-R-20180501.1209',
                    ],
                ],
                [
                    'name' => 'IsForceUpgrade',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制升级，取值：**Y | N**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'NightUpgradeDownloadType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '夜间升级下载类型。1表示WIFI下下载，2表示任全网下载。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'NightUpgradeIsShowTip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '夜间升级时是否给出提示框，取值：**Y | N**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'NightUpgradeIsAllowedCancel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '夜间升级是否允许取消，取值：**Y | N**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'RomList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '升级包列表，包括全量包和增量包，格式为`baseVersion|romUrl,baseVersion|romUrl`。'."\n"
                            ."\n"
                            .'其中，**baseVersion**为基准版本，'."\n"
                            ."\n"
                            .'- 如果是全量包，则基准版本为0。'."\n"
                            .'- 如果是增量包，则基准版本为基准的系统版本号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0|http://www.oss-server.com/file1.zip,2.0.1|http://www.oss-server.com/file2.zip',
                    ],
                ],
                [
                    'name' => 'EnableMobileDownload',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许移动网络下载升级包，取值：**Y | N**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'MobileDownloadMaxSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许移动网络下载的包的最大限制，单位为M，在允许移动网络下载包的情况下，大于该限制的包也不会自动下载。',
                        'type' => 'string',
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
                            'VersionId' => [
                                'description' => '返回创建的版本的ID',
                                'type' => 'string',
                                'example' => '12345',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"VersionId\\": \\"12345\\",\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<CreateOsVersionResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<VersionId>1003</VersionId>\\r\\n</CreateOsVersionResponse>","errorExample":""}]',
            'title' => '创建系统升级版本',
            'summary' => '调用CreateOsVersion创建系统升级版本。',
            'description' => '> 当用户需要进行FOTA升级（即系统升级）时，需要首先调用此接口创建一个系统版本，然后进行后续的版本测试、灰度、发布。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVersionBlackDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'DeviceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID列表，英文逗号隔开。具体设备ID使用哪个，由**DeviceIdType**决定。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11,22,33',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型。支持：'."\n"
                            ."\n"
                            .'- **FOTA**：系统升级'."\n"
                            .'- **APP**：应用升级',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'DeviceIdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID类型，支持：'."\n"
                            ."\n"
                            .'- **device_id**：硬件ID'."\n"
                            .'- **sn**：序列号'."\n"
                            .'- **vin**：车架号'."\n"
                            .'- **hardware_id**：硬件ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hardware_id',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DeleteVersionBlackDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteVersionBlackDevicesResponse>","errorExample":""}]',
            'title' => '删除系统版本或应用版本的设备黑名单',
            'summary' => '调用DeleteVersionBlackDevices删除系统版本或应用版本的设备黑名单。',
            'description' => '> 当需要删除版本的设备黑名单时，可以调用此接口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVersionBlackDevicesById' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'Ids',
                    'in' => 'query',
                    'schema' => [
                        'description' => '黑名单ID列表，英文逗号分割。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '100,200,300',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，支持：'."\n"
                            ."\n"
                            .'- **FOTA**：系统升级'."\n"
                            .'- **APP**：应用升级',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DeleteVersionBlackDevicesByIdResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteVersionBlackDevicesByIdResponse>","errorExample":""}]',
            'title' => '删除系统版本或应用版本设备黑名单',
            'summary' => '根据ID删除系统版本或应用版本的设备黑名单名单。',
            'description' => '> 当希望根据黑名单ID删除版本的设备黑名单时，可以调用此接口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVersionWhiteDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'DeviceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID列表，英文逗号分割。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11,22,33',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型。支持：'."\n"
                            ."\n"
                            .'- **FOTA**：系统升级'."\n"
                            .'- **APP**：应用升级',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'DeviceIdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID类型，支持：'."\n"
                            ."\n"
                            .'- **device_id**：硬件ID'."\n"
                            .'- **sn**：序列号'."\n"
                            .'- **vin**：车架号'."\n"
                            .'- **hardware_id**：硬件ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hardware_id',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}\\n"},{"type":"xml","example":"<DeleteVersionWhiteDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteVersionWhiteDevicesResponse>","errorExample":""}]',
            'title' => '删除系统版本或应用版本的设备白名单',
            'summary' => '调用DeleteVersionWhiteDevices删除系统版本或应用版本的设备白名单。',
            'description' => '> 当希望删除版本的设备白名单时，可以调用此接口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVersionWhiteDevicesById' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'Ids',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单ID列表，英文逗号分割。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1,2,3',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，支持：'."\n"
                            ."\n"
                            .'- **FOTA**：系统升级'."\n"
                            .'- **APP**：应用升级',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DeleteVersionWhiteDevicesByIdResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteVersionWhiteDevicesByIdResponse>","errorExample":""}]',
            'title' => '删除系统版本或应用版本设备白名单',
            'summary' => '根据ID删除系统版本或应用版本的设备白名单。',
            'description' => '> 当希望根据ID删除版本的设备白名单时，可以调用此接口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateOsBlackWhiteVersions' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WhiteVersions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单版本列表，英文逗号分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.0.1-R-20180402.1208,3.0.1-R-20180402.1208',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'BlackVersions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '黑名单版本列表，英文逗号分隔，黑白名单不能同时设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.0.1-R-20180402.1208,3.0.1-R-20180402.1208',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateOsBlackWhiteVersionsResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateOsBlackWhiteVersionsResponse>","errorExample":""}]',
            'title' => '更新系统版本的黑白名单',
            'summary' => '调用UpdateOsBlackWhiteVersions更新系统版本的版本的黑白名单。',
            'description' => '例如，若配置某个系统版本，只有哪些低版本的系统版本才能升级到此版本时，可以设置版本白名单。黑白名单不能同时设置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateOsVersion' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'IsMilestone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否里程碑，Y或N。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'IsForceNightUpgrade',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制夜间升级，Y或N；与强制升级不能同时选择是。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'SystemVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统版本号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2.0.1-R-20180501.1208',
                    ],
                ],
                [
                    'name' => 'ReleaseNote',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本发布说明，客户端展示升级说明。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '改用UI用户体验，提升系统稳定性',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本备注，仅用于服务端管理维护。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '版本备注信息',
                    ],
                ],
                [
                    'name' => 'IsForceUpgrade',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制升级，Y或N。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'BlackVersionList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统版本黑名单列表，英文逗号隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.0.1-R-20180501.1208,2.0.1-R-20180501.1209',
                    ],
                ],
                [
                    'name' => 'WhiteVersionList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统版本白名单列表，英文逗号隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.0.1-R-20180501.1208,2.0.1-R-20180501.1209',
                    ],
                ],
                [
                    'name' => 'MaxClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许的OTA SDK的最大版本versioncode',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'MinClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许的OTA SDK的最小版本versioncode',
                        'type' => 'string',
                        'required' => false,
                        'example' => '90',
                    ],
                ],
                [
                    'name' => 'NightUpgradeDownloadType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '夜间升级下载类型，1表示WIFI下下载，2表示任全网下载。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'NightUpgradeIsShowTip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '夜间升级时是否给出提示框，Y或N。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'NightUpgradeIsAllowedCancel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '夜间升级时是否给出提示框，Y或N。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'RomList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '升级包列表，包括全量包和增量包。'."\n"
                            ."\n"
                            .'格式为：`id|baseVersion|romUrl,id|baseVersion|romUrl`。'."\n"
                            ."\n"
                            .'- 第一位指升级包的ID，如果是新的升级包，则为0。'."\n"
                            .'- 第二位为基准系统版本号，全量包的基准系统版本号位0。'."\n"
                            .'- 最后一位为升级包下载地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10|0|http://www.oss-server.com/file0.zip,11|123|http://www.oss-server.com/file1.zip,0|124|http://www.oss-server.com/file2.zip',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'EnableMobileDownload',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许移动网络下载升级包',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'MobileDownloadMaxSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许移动网络下载的包的最大限制，单位为M，在允许移动网络下载包的情况下，大于该限制的包也不会自动下载。',
                        'type' => 'string',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateOsVersionResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateOsVersionResponse>","errorExample":""}]',
            'title' => '更新系统版本的基本信息',
            'summary' => '调用UpdateOsVersion更新系统版本的基本信息。',
            'description' => '用户创建完系统版本后，可能需要修改系统版本，可以调用此接口进行修改。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateOsVersionReleaseNote' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10023',
                    ],
                ],
                [
                    'name' => 'ReleaseNote',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本发布说明',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'new release note',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateOsVersionReleaseNoteResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateOsVersionReleaseNoteResponse>","errorExample":""}]',
            'title' => '更新系统版本发布说明',
            'summary' => '调用UpdateOsVersionReleaseNote更新系统版本发布说明。',
            'description' => '当版本灰度或者发布了，还希望更新版本的发布说明时，可以调用此接口更新版本发布说明。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateOsVersionRemark' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12304',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注信息',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sample remark',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateOsVersionRemarkResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateOsVersionRemarkResponse>","errorExample":""}]',
            'title' => '更新系统版本备注信息',
            'summary' => '在版本创建完成后，更新系统版本的备注信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateOsVersionStatus' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12304',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PUBLISHED',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateOsVersionStatusResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateOsVersionStatusResponse>","errorExample":""}]',
            'title' => '切换系统版本状态',
            'summary' => '调用UpdateOsVersionStatus切换系统版本状态。',
            'description' => '例如，测试通过、已发布、已下架、已废弃等。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAppVersion' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AppVersion' => [
                                'description' => '版本基本信息',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '应用版本状态，状态定义和系统版本一致。',
                                        'type' => 'string',
                                        'example' => 'PUBLISHED',
                                    ],
                                    'IsAllowNewInstall' => [
                                        'description' => '当客户端不存在该应用时，服务端是否允许返回该应用版本，取值：**Y | N**。',
                                        'type' => 'string',
                                        'example' => 'Y',
                                    ],
                                    'ReleaseNote' => [
                                        'description' => '版本发布说明',
                                        'type' => 'string',
                                        'example' => 'sample release note',
                                    ],
                                    'PackageName' => [
                                        'description' => '应用包名',
                                        'type' => 'string',
                                        'example' => 'com.aliyun.iovcc.ota',
                                    ],
                                    'Remark' => [
                                        'description' => '版本备注信息，终端设备不可见。',
                                        'type' => 'string',
                                        'example' => 'sample remark',
                                    ],
                                    'StatusName' => [
                                        'description' => '版本状态的中文名',
                                        'type' => 'string',
                                        'example' => '已发布',
                                    ],
                                    'ApkMd5' => [
                                        'description' => 'APK的MD5值',
                                        'type' => 'string',
                                        'example' => '34653456wertwe234653retwewer3456',
                                    ],
                                    'RestartAppParam' => [
                                        'description' => '应用重启参数',
                                        'type' => 'string',
                                        'example' => 'k1:v1',
                                    ],
                                    'WhiteVersionList' => [
                                        'description' => '版本白名单，versioncode英文逗号拼接。',
                                        'type' => 'string',
                                        'example' => '10,20,30',
                                    ],
                                    'AppName' => [
                                        'description' => '应用名称',
                                        'type' => 'string',
                                        'example' => 'iovcc-ota',
                                    ],
                                    'AppId' => [
                                        'description' => '应用ID',
                                        'type' => 'string',
                                        'example' => '12',
                                    ],
                                    'RestartAppType' => [
                                        'description' => '如果restartType为应用重启，则这个字段表示应用重启的类型。取值：'."\n"
                                            ."\n"
                                            .'- **service**：表示Service重启'."\n"
                                            .'- **activity**：表示Activity重启',
                                        'type' => 'string',
                                        'example' => 'activity',
                                    ],
                                    'VersionCode' => [
                                        'description' => '应用版本versioncode，用于版本升级比较大小的逻辑。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '201',
                                    ],
                                    'BlackVersionList' => [
                                        'description' => '版本黑名单，versioncode英文逗号拼接。',
                                        'type' => 'string',
                                        'example' => '10,20,30',
                                    ],
                                    'GmtModify' => [
                                        'description' => '更新时间',
                                        'type' => 'string',
                                        'example' => '2018-04-24 12:23:45',
                                    ],
                                    'DownloadUrl' => [
                                        'description' => '升级包下载地址',
                                        'type' => 'string',
                                        'example' => 'http://www.cdn-server.com/file.zip',
                                    ],
                                    'Adapters' => [
                                        'description' => '应用版本的适配机型列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DeviceModelId' => [
                                                    'description' => '适配的设备型号ID',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'MaxOsVersion' => [
                                                    'description' => '最高允许的系统版本号',
                                                    'type' => 'string',
                                                    'example' => '2.0.1-R-20180412.0923',
                                                ],
                                                'MinOsVersion' => [
                                                    'description' => '最低允许的系统版本号',
                                                    'type' => 'string',
                                                    'example' => '3.0.1-R-20180412.0923',
                                                ],
                                                'VersionId' => [
                                                    'description' => '当前版本ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12345',
                                                ],
                                                'Id' => [
                                                    'description' => '升级包的ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1234',
                                                ],
                                                'DeviceModelName' => [
                                                    'description' => '机型名',
                                                    'type' => 'string',
                                                    'example' => 'DM1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'IsSilentUpgrade' => [
                                        'description' => '是否静默升级，取值：**Y | N**。',
                                        'type' => 'string',
                                        'example' => 'N',
                                    ],
                                    'InstallType' => [
                                        'description' => '应用升级包安装方式。取值：**auto** / **customize**。',
                                        'type' => 'string',
                                        'example' => 'auto',
                                    ],
                                    'IsNeedRestart' => [
                                        'description' => '是否需要重启，取值：**Y | N**。',
                                        'type' => 'string',
                                        'example' => 'N',
                                    ],
                                    'Size' => [
                                        'description' => '升级包大小，字节为单位',
                                        'type' => 'string',
                                        'example' => '1204560',
                                    ],
                                    'RestartType' => [
                                        'description' => '应用安装完成后的重启类型，取值：'."\n"
                                            ."\n"
                                            .'- **system**：表示系统重启'."\n"
                                            .'- **app**：表示应用重启',
                                        'type' => 'string',
                                        'example' => 'app',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2018-04-24 12:23:45',
                                    ],
                                    'Md5' => [
                                        'description' => '升级包MD5',
                                        'type' => 'string',
                                        'example' => '345adsff2094asas2345et3',
                                    ],
                                    'AppVersion' => [
                                        'description' => '应用版本号',
                                        'type' => 'string',
                                        'example' => '2.0.1',
                                    ],
                                    'IsForceUpgrade' => [
                                        'description' => '是否强制升级，取值：**Y | N**。',
                                        'type' => 'string',
                                        'example' => 'N',
                                    ],
                                    'Id' => [
                                        'description' => '版本ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '12345',
                                    ],
                                    'OriginalUrl' => [
                                        'description' => '升级包原始地址',
                                        'type' => 'string',
                                        'example' => 'http://www.oss-server.com/file.zip',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"AppVersion\\": {\\n    \\"Status\\": \\"PUBLISHED\\",\\n    \\"IsAllowNewInstall\\": \\"Y\\",\\n    \\"ReleaseNote\\": \\"sample release note\\",\\n    \\"PackageName\\": \\"com.aliyun.iovcc.ota\\",\\n    \\"Remark\\": \\"sample remark\\",\\n    \\"StatusName\\": \\"已发布\\",\\n    \\"ApkMd5\\": \\"34653456wertwe234653retwewer3456\\",\\n    \\"RestartAppParam\\": \\"k1:v1\\",\\n    \\"WhiteVersionList\\": \\"10,20,30\\",\\n    \\"AppName\\": \\"iovcc-ota\\",\\n    \\"AppId\\": \\"12\\",\\n    \\"RestartAppType\\": \\"activity\\",\\n    \\"VersionCode\\": 201,\\n    \\"GmtModify\\": \\"2018-04-24 12:23:45\\",\\n    \\"BlackVersionList\\": \\"10,20,30\\",\\n    \\"DownloadUrl\\": \\"http://www.cdn-server.com/file.zip\\",\\n    \\"IsSilentUpgrade\\": \\"N\\",\\n    \\"InstallType\\": \\"auto\\",\\n    \\"IsNeedRestart\\": \\"N\\",\\n    \\"Size\\": \\"1204560\\",\\n    \\"RestartType\\": \\"app\\",\\n    \\"GmtCreate\\": \\"2018-04-24 12:23:45\\",\\n    \\"Md5\\": \\"345adsff2094asas2345et3\\",\\n    \\"AppVersion\\": \\"2.0.1\\",\\n    \\"IsForceUpgrade\\": \\"N\\",\\n    \\"Id\\": 12345,\\n    \\"OriginalUrl\\": \\"http://www.oss-server.com/file.zip\\",\\n    \\"Adapters\\": [\\n      {\\n        \\"DeviceModelId\\": \\"123\\",\\n        \\"MaxOsVersion\\": \\"2.0.1-R-20180412.0923\\",\\n        \\"MinOsVersion\\": \\"3.0.1-R-20180412.0923\\",\\n        \\"VersionId\\": 12345,\\n        \\"Id\\": 1234,\\n        \\"DeviceModelName\\": \\"DM1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DescribeAppVersionResponse>\\r\\n\\t<AppVersion>\\r\\n\\t\\t<Adapters>\\r\\n\\t\\t\\t<DeviceModelId>10</DeviceModelId>\\r\\n\\t\\t\\t<Id>100010</Id>\\r\\n\\t\\t\\t<MaxOsVersion>3.0.1-R-20180412.0923</MaxOsVersion>\\r\\n\\t\\t\\t<MinOsVersion>2.0.1-R-20180412.0923</MinOsVersion>\\r\\n\\t\\t\\t<VersionId>123</VersionId>\\r\\n\\t\\t</Adapters>\\r\\n\\t\\t<ApkMd5>645adsff2094asas2345et8</ApkMd5>\\r\\n\\t\\t<AppId>12</AppId>\\r\\n\\t\\t<AppName>iovcc-ota</AppName>\\r\\n\\t\\t<AppVersion>2.0.1</AppVersion>\\r\\n\\t\\t<BlackVersionList></BlackVersionList>\\r\\n\\t\\t<DownloadUrl>http://www.cdn-server.com/file.zip</DownloadUrl>\\r\\n\\t\\t<GmtCreate>2018-04-24 12:23:45</GmtCreate>\\r\\n\\t\\t<GmtModify>2018-04-24 12:23:45</GmtModify>\\r\\n\\t\\t<Id>123</Id>\\r\\n\\t\\t<InstallType>auto</InstallType>\\r\\n\\t\\t<IsAllowNewInstall>N</IsAllowNewInstall>\\r\\n\\t\\t<IsDisableCheckMd5>N</IsDisableCheckMd5>\\r\\n\\t\\t<IsForceUpgrade>N</IsForceUpgrade>\\r\\n\\t\\t<IsNeedRestart>N</IsNeedRestart>\\r\\n\\t\\t<IsSilentUpgrade>N</IsSilentUpgrade>\\r\\n\\t\\t<Md5>345adsff2094asas2345et3</Md5>\\r\\n\\t\\t<OriginalUrl>http://www.oss-server.com/file.zip</OriginalUrl>\\r\\n\\t\\t<PackageName>com.aliyun.iovcc.ota</PackageName>\\r\\n\\t\\t<ReleaseNote>sample release note</ReleaseNote>\\r\\n\\t\\t<Remark>sample remark</Remark>\\r\\n\\t\\t<RestartAppParam>k1:v1</RestartAppParam>\\r\\n\\t\\t<RestartAppType>N</RestartAppType>\\r\\n\\t\\t<RestartType>system</RestartType>\\r\\n\\t\\t<Size>12234523</Size>\\r\\n\\t\\t<Status>PUBLISHED</Status>\\r\\n\\t\\t<StatusName>已发布</StatusName>\\r\\n\\t\\t<VersionCode>201</VersionCode>\\r\\n\\t\\t<WhiteVersionList></WhiteVersionList>\\r\\n\\t</AppVersion>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DescribeAppVersionResponse>","errorExample":""}]',
            'title' => '获取系统版本的详细信息',
            'summary' => '调用DescribeAppVersion获取系统版本的详细信息。',
            'description' => '> 用户希望查看应用版本详情时，可以调用此接口获取版本详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeOsVersion' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '12345',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'OsVersion' => [
                                'description' => '版本基本信息',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '版本状态，所有的状态有：'."\n"
                                            ."\n"
                                            .'- **INITIAL**：初始状态'."\n"
                                            .'- **CREATING**：创建中'."\n"
                                            .'- **CREATE_FAILED**：创建失败'."\n"
                                            .'- **CREATE_COMPLETED**：创建完成'."\n"
                                            .'- **TESTING**：测试中'."\n"
                                            .'- **TEST_PASSED**：测试已通过'."\n"
                                            .'- **PREPUBLISHED**：预发布'."\n"
                                            .'- **PUBLISHED**：已发布'."\n"
                                            .'- **UNUSED**：已废弃'."\n"
                                            .'- **FROZEN**：已冻结'."\n"
                                            .'- **DOWN**：已下架',
                                        'type' => 'string',
                                        'example' => 'PUBLISHED',
                                    ],
                                    'DeviceModelId' => [
                                        'description' => '设备型号ID',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'BlackVersionList' => [
                                        'description' => '系统版本黑名单列表，英文逗号隔开。',
                                        'type' => 'string',
                                        'example' => '2.0.1,3.0.1',
                                    ],
                                    'IsMilestone' => [
                                        'description' => '是否里程碑，Y或N。',
                                        'type' => 'string',
                                        'example' => 'Y',
                                    ],
                                    'GmtModify' => [
                                        'description' => '版本创建时间，格式：`yyyy-MM-dd HH:mm:ss`。',
                                        'type' => 'string',
                                        'example' => '2018-04-24 12:23:45',
                                    ],
                                    'ReleaseNote' => [
                                        'description' => '版本发布说明',
                                        'type' => 'string',
                                        'example' => '改用UI用户体验，提升系统稳定性',
                                    ],
                                    'Remark' => [
                                        'description' => '备注',
                                        'type' => 'string',
                                        'example' => '版本备注信息，终端设备不可见',
                                    ],
                                    'SystemVersion' => [
                                        'description' => '系统版本号',
                                        'type' => 'string',
                                        'example' => '2.0.1-R-20180506.0824',
                                    ],
                                    'StatusName' => [
                                        'description' => '版本状态的中文名',
                                        'type' => 'string',
                                        'example' => '已发布',
                                    ],
                                    'DeviceModelName' => [
                                        'description' => '机型名',
                                        'type' => 'string',
                                        'example' => 'DM1',
                                    ],
                                    'WhiteVersionList' => [
                                        'description' => '系统版本白名单列表',
                                        'type' => 'string',
                                        'example' => '2.0.1,3.0.1',
                                    ],
                                    'MaxClientVersion' => [
                                        'description' => '允许的OTA SDK的最大版本versioncode。',
                                        'type' => 'string',
                                        'example' => '200',
                                    ],
                                    'RomList' => [
                                        'description' => '升级包列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtModify' => [
                                                    'description' => '升级包修改时间，格式：`yyyy-MM-dd HH:mm:ss`。',
                                                    'type' => 'string',
                                                    'example' => '2018-04-24 12:23:45',
                                                ],
                                                'SplitNum' => [
                                                    'description' => '升级包分片数，10MB一个分片',
                                                    'type' => 'string',
                                                    'example' => '10',
                                                ],
                                                'DownloadUrl' => [
                                                    'description' => '升级包下载地址',
                                                    'type' => 'string',
                                                    'example' => 'https://www.cdn-server.com/file.zip',
                                                ],
                                                'Size' => [
                                                    'description' => '升级包大小，单位字节',
                                                    'type' => 'string',
                                                    'example' => '10000',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '升级包创建时间，格式：`yyyy-MM-dd HH:mm:ss`。',
                                                    'type' => 'string',
                                                    'example' => '2018-04-24 12:23:45',
                                                ],
                                                'VersionId' => [
                                                    'description' => '升级包所属的版本ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12345',
                                                ],
                                                'Md5' => [
                                                    'description' => '升级包MD5',
                                                    'type' => 'string',
                                                    'example' => 'we3utrw4esdfgkhsdlfha',
                                                ],
                                                'BaseVersion' => [
                                                    'description' => '基准系统版本，如果是全量包，则为空。',
                                                    'type' => 'string',
                                                    'example' => '2.0.1-R-20180502.1205',
                                                ],
                                                'Id' => [
                                                    'description' => '升级包ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
                                                ],
                                                'OriginalUrl' => [
                                                    'description' => '升级包原始地址',
                                                    'type' => 'string',
                                                    'example' => 'http://www.oss-server.com/file.zip',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'MinClientVersion' => [
                                        'description' => '允许的OTA SDK的最小版本versioncode。',
                                        'type' => 'string',
                                        'example' => '100',
                                    ],
                                    'NightUpgradeOption' => [
                                        'description' => '夜间升级选项',
                                        'type' => 'object',
                                        'properties' => [
                                            'DownloadType' => [
                                                'description' => '夜间升级下载类型。'."\n"
                                                    ."\n"
                                                    .'- **1**表示WIFI下下载。'."\n"
                                                    .'- **2**表示任全网下载。',
                                                'type' => 'string',
                                                'example' => '1',
                                            ],
                                            'IsAllowedCancel' => [
                                                'description' => '夜间升级是否允许取消，取值：Y或N。',
                                                'type' => 'string',
                                                'example' => 'N',
                                            ],
                                            'IsShowTip' => [
                                                'description' => '夜间升级时是否给出提示框，取值：Y或N。',
                                                'type' => 'string',
                                                'example' => 'N',
                                            ],
                                        ],
                                    ],
                                    'GmtCreate' => [
                                        'description' => '版本创建时间，格式：`yyyy-MM-dd HH:mm:ss`。',
                                        'type' => 'string',
                                        'example' => '2018-04-24 12:23:45',
                                    ],
                                    'IsForceNightUpgrade' => [
                                        'description' => '是否强制夜间升级，Y或N；不允许和是否强制升级同时设置为Y。',
                                        'type' => 'string',
                                        'example' => 'N',
                                    ],
                                    'MobileDownloadMaxSize' => [
                                        'description' => '允许移动网络下载的包的最大限制，单位为M，在允许移动网络下载包的情况下，大于该限制的包也不会自动下载。',
                                        'type' => 'string',
                                        'example' => '10',
                                    ],
                                    'EnableMobileDownload' => [
                                        'description' => '是否允许移动网络下载升级包',
                                        'type' => 'string',
                                        'example' => 'Y',
                                    ],
                                    'IsForceUpgrade' => [
                                        'description' => '是否强制升级，Y或N。',
                                        'type' => 'string',
                                        'example' => 'N',
                                    ],
                                    'Id' => [
                                        'description' => '版本ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '12345',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"OsVersion\\": {\\n    \\"Status\\": \\"PUBLISHED\\",\\n    \\"DeviceModelId\\": \\"123\\",\\n    \\"GmtModify\\": \\"2018-04-24 12:23:45\\",\\n    \\"IsMilestone\\": \\"Y\\",\\n    \\"BlackVersionList\\": \\"2.0.1,3.0.1\\",\\n    \\"ReleaseNote\\": \\"改用UI用户体验，提升系统稳定性\\",\\n    \\"Remark\\": \\"版本备注信息，终端设备不可见\\",\\n    \\"StatusName\\": \\"已发布\\",\\n    \\"SystemVersion\\": \\"2.0.1-R-20180506.0824\\",\\n    \\"DeviceModelName\\": \\"DM1\\",\\n    \\"WhiteVersionList\\": \\"2.0.1,3.0.1\\",\\n    \\"MaxClientVersion\\": \\"200\\",\\n    \\"MinClientVersion\\": \\"100\\",\\n    \\"GmtCreate\\": \\"2018-04-24 12:23:45\\",\\n    \\"IsForceNightUpgrade\\": \\"N\\",\\n    \\"MobileDownloadMaxSize\\": \\"10\\",\\n    \\"EnableMobileDownload\\": \\"Y\\",\\n    \\"IsForceUpgrade\\": \\"N\\",\\n    \\"Id\\": 12345,\\n    \\"RomList\\": [\\n      {\\n        \\"GmtModify\\": \\"2018-04-24 12:23:45\\",\\n        \\"SplitNum\\": \\"10\\",\\n        \\"DownloadUrl\\": \\"https://www.cdn-server.com/file.zip\\",\\n        \\"Size\\": \\"10000\\",\\n        \\"GmtCreate\\": \\"2018-04-24 12:23:45\\",\\n        \\"VersionId\\": 12345,\\n        \\"Md5\\": \\"we3utrw4esdfgkhsdlfha\\",\\n        \\"BaseVersion\\": \\"2.0.1-R-20180502.1205\\",\\n        \\"Id\\": 100,\\n        \\"OriginalUrl\\": \\"http://www.oss-server.com/file.zip\\"\\n      }\\n    ],\\n    \\"NightUpgradeOption\\": {\\n      \\"IsAllowedCancel\\": \\"N\\",\\n      \\"DownloadType\\": \\"1\\",\\n      \\"IsShowTip\\": \\"N\\"\\n    }\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DescribeOsVersionResponse>\\r\\n\\t<OsVersion>\\r\\n\\t\\t<BlackVersionList>2.0.1,3.0.1</BlackVersionList>\\r\\n\\t\\t<DeviceModelId>100</DeviceModelId>\\r\\n\\t\\t<DeviceModelName>DM1</DeviceModelName>\\r\\n\\t\\t<GmtCreate>2017-12-06 12:04:08</GmtCreate>\\r\\n\\t\\t<GmtModify>2017-12-06 13:04:06</GmtModify>\\r\\n\\t\\t<Id>123</Id>\\r\\n\\t\\t<IsDisableCheckMd5>N</IsDisableCheckMd5>\\r\\n\\t\\t<IsForceNightUpgrade>Y</IsForceNightUpgrade>\\r\\n\\t\\t<IsForceReboot>N</IsForceReboot>\\r\\n\\t\\t<IsForceUpgrade>N</IsForceUpgrade>\\r\\n\\t\\t<IsMilestone>N</IsMilestone>\\r\\n\\t\\t<IsSilentUpgrade>N</IsSilentUpgrade>\\r\\n\\t\\t<MaxClientVersion>200</MaxClientVersion>\\r\\n\\t\\t<MinClientVersion>100</MinClientVersion>\\r\\n\\t\\t<NightUpgradeOption>\\r\\n\\t\\t\\t<DownloadType>1</DownloadType>\\r\\n\\t\\t\\t<IsAllowedCancel>N</IsAllowedCancel>\\r\\n\\t\\t\\t<IsShowTip>N</IsShowTip>\\r\\n\\t\\t</NightUpgradeOption>\\r\\n\\t\\t<ReleaseNote>sample release note</ReleaseNote>\\r\\n\\t\\t<Remark>sample remark</Remark>\\r\\n\\t\\t<RomList>\\r\\n\\t\\t\\t<BaseVersion>1.0.1-R-20180409.0612</BaseVersion>\\r\\n\\t\\t\\t<DownloadUrl>http://www.cdn-server.com/file.zip</DownloadUrl>\\r\\n\\t\\t\\t<GmtCreate>2017-12-06 12:04:08</GmtCreate>\\r\\n\\t\\t\\t<GmtModify>2017-12-06 12:04:08</GmtModify>\\r\\n\\t\\t\\t<Id>123</Id>\\r\\n\\t\\t\\t<Md5>234der456ere56dhwer45ty6eghr570</Md5>\\r\\n\\t\\t\\t<OriginalUrl>http://www.oss-server.com/file.zip</OriginalUrl>\\r\\n\\t\\t\\t<Size>123456</Size>\\r\\n\\t\\t\\t<SplitNum>20</SplitNum>\\r\\n\\t\\t\\t<VersionId>234</VersionId>\\r\\n\\t\\t</RomList>\\r\\n\\t\\t<Status>PUBLISHED</Status>\\r\\n\\t\\t<StatusName>已发布</StatusName>\\r\\n\\t\\t<SystemVersion>2.0.1-R-20180502.1208</SystemVersion>\\r\\n\\t\\t<WhiteVersionList>2.0.1,3.0.1</WhiteVersionList>\\r\\n\\t</OsVersion>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DescribeOsVersionResponse>","errorExample":""}]',
            'title' => '获取单个系统版本的详细信息',
            'summary' => '调用DescribeOsVersion获取单个系统版本的详细信息。',
            'description' => '用户希望查看版本详情时，可以调用此接口获取版本详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetDeviceSystemUpdateFunnelEvents' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'OriginalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源设备ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '23452345234523452',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'TargetVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标系统版本号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.0.1-R-20180412.0824',
                    ],
                ],
                [
                    'name' => 'IdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID类型，支持：'."\n"
                            ."\n"
                            .'- **device_id**：硬件ID'."\n"
                            .'- **sn**：序列号'."\n"
                            .'- **vin**：车架号'."\n"
                            .'- **hardware_id**：硬件ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hardware_id',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'EventList' => [
                                'description' => '升级进度事件列表信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceId' => [
                                            'description' => '云设备ID',
                                            'type' => 'string',
                                            'example' => 'AS23DG23SA5D43GA34SD23GW456E',
                                        ],
                                        'TargetVersion' => [
                                            'description' => '升级的目标系统版本号',
                                            'type' => 'string',
                                            'example' => '2.0.1-R-20180412.0824',
                                        ],
                                        'Event' => [
                                            'description' => '事件名称',
                                            'type' => 'string',
                                            'example' => 'os_download_succ',
                                        ],
                                        'ReportTimestamp' => [
                                            'description' => '上报时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '167845600000',
                                        ],
                                        'ReportTime' => [
                                            'description' => '事件上报时间',
                                            'type' => 'string',
                                            'example' => '2018-02-14 14:20:18',
                                        ],
                                        'TenantId' => [
                                            'description' => '项目ID',
                                            'type' => 'string',
                                            'example' => 'P0VFCREU',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"EventList\\": [\\n    {\\n      \\"DeviceId\\": \\"AS23DG23SA5D43GA34SD23GW456E\\",\\n      \\"TargetVersion\\": \\"2.0.1-R-20180412.0824\\",\\n      \\"Event\\": \\"os_download_succ\\",\\n      \\"ReportTimestamp\\": 167845600000,\\n      \\"ReportTime\\": \\"2018-02-14 14:20:18\\",\\n      \\"TenantId\\": \\"P0VFCREU\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<GetDeviceSystemUpdateFunnelEventsResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<EventList>\\r\\n\\t\\t<TotalCount>25</TotalCount>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<TenantId>P0VFCREU</TenantId>\\r\\n\\t\\t\\t<DeviceId>AS23DG23SA5D43GA34SD23GW456E</DeviceId>\\r\\n\\t\\t\\t<TargetVersion>2.0.1-R-20180412.0824</TargetVersion>\\r\\n\\t\\t\\t<Event>os_download_succ</Event>\\r\\n\\t\\t\\t<ReportTime>2018-02-14 14:20:18</ReportTime>\\r\\n\\t\\t</Items>\\r\\n\\t</EventList>\\r\\n</GetDeviceSystemUpdateFunnelEventsResponse>","errorExample":""}]',
            'title' => '获取设备系统升级的进度信息',
            'summary' => '调用GetDeviceSystemUpdateFunnelEvents获取设备系统升级的进度信息。',
            'description' => '例如：是否查询到版本，版本下载是否成功，签名校验是否成功，安装是否成功等。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DelayPublishOsVersion' => [
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
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12323',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SASUHQ',
                    ],
                ],
                [
                    'name' => 'PrepubTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定时预发布时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1570672685997',
                    ],
                ],
                [
                    'name' => 'PublishTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定时发布时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1570672685997',
                    ],
                ],
                [
                    'name' => 'DownTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定时下架时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1570672685997',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '邮箱',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12323232@qq.com',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '发布描述',
                    ],
                ],
                [
                    'name' => 'SendMessage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '升级说明',
                        'type' => 'string',
                        'required' => false,
                        'example' => '升级说明',
                    ],
                ],
                [
                    'name' => 'PrepublishCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预发布总数限制',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>","errorExample":""}]',
            'title' => '定时发布系统版本',
            'summary' => '定时发布系统版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindOsVersions' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页索引，表示要获取第几页的数据，第一页从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页大小，允许20、50、100三个选择。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1205',
                    ],
                ],
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号（机型）ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'SystemVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统版本号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2.0.1-R-20180402.1208',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本状态，如：**TESTING**，**TEST_PASSED**，**PREPUBLISH**，**PUBLISHED**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TESTING',
                    ],
                ],
                [
                    'name' => 'IsMilestone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否里程碑，Y或N。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本备注',
                        'type' => 'string',
                        'required' => false,
                        'example' => '备注',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'OsVersionList' => [
                                'description' => '版本列表信息，包括当前页的版本列表以及总共符合条件的版本个数',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '符合条件的当前页的版本列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '版本状态',
                                                    'type' => 'string',
                                                    'example' => 'PUBLISHED',
                                                ],
                                                'GmtCreateTimestamp' => [
                                                    'description' => '版本创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '16754300000',
                                                ],
                                                'DeviceModelId' => [
                                                    'description' => '设备型号ID',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'GmtModify' => [
                                                    'description' => '版本更新时间',
                                                    'type' => 'string',
                                                    'example' => '2018-04-24 12:23:45',
                                                ],
                                                'IsMilestone' => [
                                                    'description' => '是否里程碑',
                                                    'type' => 'string',
                                                    'example' => 'Y',
                                                ],
                                                'Remark' => [
                                                    'description' => '版本备注',
                                                    'type' => 'string',
                                                    'example' => '测试',
                                                ],
                                                'SystemVersion' => [
                                                    'description' => '系统版本号',
                                                    'type' => 'string',
                                                    'example' => '2.0.1-R-20180506.0824',
                                                ],
                                                'StatusName' => [
                                                    'description' => '状态名',
                                                    'type' => 'string',
                                                    'example' => '已发布',
                                                ],
                                                'IsForceReboot' => [
                                                    'description' => '是否强制重启',
                                                    'type' => 'string',
                                                    'example' => 'N',
                                                ],
                                                'DeviceModelName' => [
                                                    'description' => '机型名',
                                                    'type' => 'string',
                                                    'example' => 'DM1',
                                                ],
                                                'IsSilentUpgrade' => [
                                                    'description' => '是否静默升级',
                                                    'type' => 'string',
                                                    'example' => 'N',
                                                ],
                                                'GmtModifyTimestamp' => [
                                                    'description' => '版本更新时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '16754300000',
                                                ],
                                                'IsForceNightUpgrade' => [
                                                    'description' => '是否夜间强制升级',
                                                    'type' => 'string',
                                                    'example' => 'N',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '版本创建时间',
                                                    'type' => 'string',
                                                    'example' => '2018-04-24 12:23:45',
                                                ],
                                                'IsForceUpgrade' => [
                                                    'description' => '是否强制升级',
                                                    'type' => 'string',
                                                    'example' => 'N',
                                                ],
                                                'Id' => [
                                                    'description' => '版本ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12004',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '符合条件的总记录数，方便调用方计算总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"OsVersionList\\": {\\n    \\"TotalCount\\": 1000,\\n    \\"Items\\": [\\n      {\\n        \\"GmtCreateTimestamp\\": 16754300000,\\n        \\"Status\\": \\"PUBLISHED\\",\\n        \\"DeviceModelId\\": \\"123\\",\\n        \\"IsMilestone\\": \\"Y\\",\\n        \\"GmtModify\\": \\"2018-04-24 12:23:45\\",\\n        \\"Remark\\": \\"测试\\",\\n        \\"StatusName\\": \\"已发布\\",\\n        \\"SystemVersion\\": \\"2.0.1-R-20180506.0824\\",\\n        \\"IsForceReboot\\": \\"N\\",\\n        \\"DeviceModelName\\": \\"DM1\\",\\n        \\"IsSilentUpgrade\\": \\"N\\",\\n        \\"GmtModifyTimestamp\\": 16754300000,\\n        \\"IsForceNightUpgrade\\": \\"N\\",\\n        \\"GmtCreate\\": \\"2018-04-24 12:23:45\\",\\n        \\"IsForceUpgrade\\": \\"N\\",\\n        \\"Id\\": 12004\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<FindOsVersionsResponse>\\r\\n\\t<OsVersionList>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<DeviceModelId>100</DeviceModelId>\\r\\n\\t\\t\\t<DeviceModelName>DM1</DeviceModelName>\\r\\n\\t\\t\\t<GmtCreate>2017-12-06 12:04:08</GmtCreate>\\r\\n\\t\\t\\t<GmtModify>2017-12-06 13:04:06</GmtModify>\\r\\n\\t\\t\\t<Id>123</Id>\\r\\n\\t\\t\\t<IsForceNightUpgrade>Y</IsForceNightUpgrade>\\r\\n\\t\\t\\t<IsForceReboot>N</IsForceReboot>\\r\\n\\t\\t\\t<IsForceUpgrade>N</IsForceUpgrade>\\r\\n\\t\\t\\t<IsMilestone>N</IsMilestone>\\r\\n\\t\\t\\t<IsSilentUpgrade>N</IsSilentUpgrade>\\r\\n\\t\\t\\t<Remark>测试</Remark>\\r\\n\\t\\t\\t<Status>PUBLISHED</Status>\\r\\n\\t\\t\\t<StatusName>已发布</StatusName>\\r\\n\\t\\t\\t<SystemVersion>2.0.1-R-20180502.1208</SystemVersion>\\r\\n\\t\\t</Items>\\r\\n\\t\\t<TotalCount>1000</TotalCount>\\r\\n\\t</OsVersionList>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</FindOsVersionsResponse>","errorExample":""}]',
            'title' => '分页获取系统版本列表',
            'summary' => '调用FindOsVersions分页获取系统版本列表。',
            'description' => '> 此接口支持多种查询条件，如机型、系统版本号等。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindVersionWhiteDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型。支持：'."\n"
                            ."\n"
                            .'- **FOTA**：系统升级'."\n"
                            .'- **APP**：应用升级',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID，支持模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AS23DG23SA5D43GA34SD23GW456E',
                    ],
                ],
                [
                    'name' => 'OriginalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源设备ID，支持模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '23452345234523452',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页索引，从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，支持10、20、50三种。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'DeviceList' => [
                                'description' => '设备列表信息',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '当前分页的设备数据',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtCreateTimestamp' => [
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1868400000',
                                                ],
                                                'OriginalId' => [
                                                    'description' => '源设备ID',
                                                    'type' => 'string',
                                                    'example' => '23452345234523452',
                                                ],
                                                'DeviceId' => [
                                                    'description' => '设备ID',
                                                    'type' => 'string',
                                                    'example' => 'AS23DG23SA5D43GA34SD23GW456E',
                                                ],
                                                'IdType' => [
                                                    'description' => '设备ID类型，支持：'."\n"
                                                        ."\n"
                                                        .'- **device_id**：硬件ID'."\n"
                                                        .'- **sn**：序列号'."\n"
                                                        .'- **vin**：车架号'."\n"
                                                        .'- **hardware_id**：硬件ID',
                                                    'type' => 'string',
                                                    'example' => 'hardware_id',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '添加时间',
                                                    'type' => 'string',
                                                    'example' => '2018-02-14 14:20:18',
                                                ],
                                                'Id' => [
                                                    'description' => '白名单ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '123',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '总共符合条件的设备数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"DeviceList\\": {\\n    \\"TotalCount\\": 30,\\n    \\"Items\\": [\\n      {\\n        \\"GmtCreateTimestamp\\": 1868400000,\\n        \\"OriginalId\\": \\"23452345234523452\\",\\n        \\"DeviceId\\": \\"AS23DG23SA5D43GA34SD23GW456E\\",\\n        \\"IdType\\": \\"hardware_id\\",\\n        \\"GmtCreate\\": \\"2018-02-14 14:20:18\\",\\n        \\"Id\\": 123\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<FindVersionWhiteDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<DeviceList>\\r\\n\\t\\t<TotalCount>25</TotalCount>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<Id>1</Id>\\r\\n\\t\\t\\t<DeviceId>AS23DG23SA5D43GA34SD23GW456E</DeviceId>\\r\\n\\t\\t\\t<IdType>hardware_id</IdType>\\r\\n\\t\\t\\t<OriginalId>23452345234523452</OriginalId>\\r\\n\\t\\t\\t<GmtCreate>2018-02-14 14:20:18</GmtCreate>\\r\\n\\t\\t</Items>\\r\\n\\t</DeviceList>\\r\\n</FindVersionWhiteDevicesResponse>","errorExample":""}]',
            'title' => '分页获取系统版本或应用版本的设备白名单',
            'summary' => '调用FindVersionWhiteDevices分页获取系统版本或应用版本的设备白名单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PublishOsVersion' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SendMessage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否推送消息',
                        'type' => 'boolean',
                        'required' => true,
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<PublishOsVersionResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</PublishOsVersionResponse>","errorExample":""}]',
            'title' => '发布系统版本',
            'summary' => '发布系统版本，可控制是否推送升级消息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateShadowSchema' => [
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
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机型ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'AuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b09e93ce436aaf0dcfc2fb2004c1fde8',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
                    ],
                ],
                [
                    'name' => 'Schema',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'schema信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"ecu":{"node_desc":"动力系统","brake_controll":{"handbrake":"手刹状态"}},"device_info":{"vin":"车架号","uuid":"uuid","brand":"设备品牌","plugin_version":{"ra":"远程诊断","control":"远程控制","node_desc":"插件版本号","yundevice":"yundevice版本号"},"system_version":"系统版本号"},"car_body_hvac":{"node_desc":"车身与HVAC","cigar_lighter":{"node_desc":"点烟器"},"cleaning_fluid":"清洗液"}}',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<CreateShadowSchemaResponse>\\r\\n<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</CreateShadowSchemaResponse>","errorExample":""}]',
            'title' => '新建某机型的schema信息',
            'summary' => '调用CreateShadowSchema新建某机型的schema信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteShadowSchema' => [
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据记录ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<DeleteShadowSchemaResponse>\\r\\n<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteShadowSchemaResponse>","errorExample":""}]',
            'title' => '删除某机型的schema信息',
            'summary' => '调用DeleteShadowSchema删除某机型的schema信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateShadowSchema' => [
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
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机型ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'AuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b09e93ce436aaf0dcfc2fb2004c1fde8',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
                    ],
                ],
                [
                    'name' => 'Schema',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'schema信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"ecu":{"node_desc":"动力系统","brake_controll":{"handbrake":"手刹状态"}},"device_info":{"vin":"车架号","uuid":"uuid","brand":"设备品牌","plugin_version":{"ra":"远程诊断","control":"远程控制","node_desc":"插件版本号","yundevice":"yundevice版本号"},"system_version":"系统版本号"},"car_body_hvac":{"node_desc":"车身与HVAC","cigar_lighter":{"node_desc":"点烟器"},"cleaning_fluid":"清洗液"}}',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待修改的数据记录ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<UpdateShadowSchemaResponse>\\r\\n<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateShadowSchemaResponse>","errorExample":""}]',
            'title' => '修改某机型的 schema 信息',
            'summary' => '调用UpdateShadowSchema修改某机型的schema信息.。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListShadowSchemaDeviceModels' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ModelList' => [
                                'description' => '返回的机型列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceModelId' => [
                                            'description' => '设备模型ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '208',
                                        ],
                                        'HardwareType' => [
                                            'description' => '硬件类型',
                                            'type' => 'string',
                                            'example' => 'sn',
                                        ],
                                        'DeviceType' => [
                                            'description' => '设备类型',
                                            'type' => 'string',
                                            'example' => 'car_auto',
                                        ],
                                        'CanCreateDeviceId' => [
                                            'description' => '是否可创建设备ID',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID',
                                            'type' => 'string',
                                            'example' => 'PIC3UA0V',
                                        ],
                                        'OsPlatform' => [
                                            'description' => '操作系统的平台类型：**android**，**alios**，**linux**，**qnx**。',
                                            'type' => 'string',
                                            'example' => 'linux',
                                        ],
                                        'DeviceModel' => [
                                            'description' => '设备机型',
                                            'type' => 'string',
                                            'example' => 'model_2nd',
                                        ],
                                        'SecurityChip' => [
                                            'description' => '芯片认证加固方案。0：不启用，1：启用。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Description' => [
                                            'description' => '描述信息',
                                            'type' => 'string',
                                            'example' => 'description',
                                        ],
                                        'InitUsageTypeDesc' => [
                                            'description' => '使用性质解释',
                                            'type' => 'string',
                                            'example' => 'private',
                                        ],
                                        'InitUsageType' => [
                                            'description' => '使用性质，私营或商业',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'DeviceBrand' => [
                                            'description' => '设备品牌',
                                            'type' => 'string',
                                            'example' => 'brand_2nd',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4F501674-4FE3-47F9-ADAD-A1875A325798',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F501674-4FE3-47F9-ADAD-A1875A325798\\",\\n  \\"ModelList\\": [\\n    {\\n      \\"DeviceModelId\\": 208,\\n      \\"HardwareType\\": \\"sn\\",\\n      \\"DeviceType\\": \\"car_auto\\",\\n      \\"CanCreateDeviceId\\": 1,\\n      \\"ProjectId\\": \\"PIC3UA0V\\",\\n      \\"OsPlatform\\": \\"linux\\",\\n      \\"DeviceModel\\": \\"model_2nd\\",\\n      \\"SecurityChip\\": 0,\\n      \\"Description\\": \\"description\\",\\n      \\"InitUsageTypeDesc\\": \\"private\\",\\n      \\"InitUsageType\\": 1,\\n      \\"DeviceBrand\\": \\"brand_2nd\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListShadowSchemaDeviceModelsResponse>\\r\\n\\t<ModelList>\\r\\n\\t\\t<DeviceModel>model_2nd</DeviceModel>\\r\\n\\t\\t<DeviceType>car_auto</DeviceType>\\r\\n\\t\\t<HardwareType>sn</HardwareType>\\r\\n\\t\\t<InitUsageType>0</InitUsageType>\\r\\n\\t\\t<DeviceBrand>brand_2nd</DeviceBrand>\\r\\n\\t\\t<ProjectId>PIC3UA0V</ProjectId>\\r\\n\\t\\t<DeviceModelId>208</DeviceModelId>\\r\\n\\t\\t<SecurityChip>0</SecurityChip>\\r\\n\\t\\t<InitUsageTypeDesc>private</InitUsageTypeDesc>\\r\\n\\t\\t<CanCreateDeviceId>1</CanCreateDeviceId>\\r\\n\\t</ModelList>\\r\\n\\t<RequestId>4F501674-4FE3-47F9-ADAD-A1875A325798</RequestId>\\r\\n</ListShadowSchemaDeviceModelsResponse>","errorExample":""}]',
            'title' => '获取所有机型列表',
            'summary' => '在新增设备范式时，根据当前的projectId获取这个项目下的所有机型列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListShadowSchemas' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'deviceModelId',
                    ],
                ],
                [
                    'name' => 'QueryValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '和查询类型匹配的查询值',
                        'type' => 'string',
                        'required' => false,
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的页码',
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
                        'description' => '每页查询的数量',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'PageList' => [
                                'description' => '查询结果列表',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '当前页',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TotalPageCount' => [
                                                'description' => '总页数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'PageSize' => [
                                                'description' => '每页记录数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'TotalCount' => [
                                                'description' => '总记录数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'SimpleSign' => [
                                                'description' => '是否简单验证（无参考价值）',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'HasNextPage' => [
                                                'description' => '是否有下一页',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                    'List' => [
                                        'description' => '结果列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AuthTypeDesc' => [
                                                    'description' => '认证类型描述',
                                                    'type' => 'string',
                                                    'example' => '基于账号',
                                                ],
                                                'DeviceModelId' => [
                                                    'description' => '设备型号ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '120',
                                                ],
                                                'AuthType' => [
                                                    'description' => '账号认证类型',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'ProjectId' => [
                                                    'description' => '项目ID',
                                                    'type' => 'string',
                                                    'example' => 'PIC3UA0V',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1537255499517',
                                                ],
                                                'Namespace' => [
                                                    'description' => '命名空间',
                                                    'type' => 'string',
                                                    'example' => 'b09e93ce436aaf0dcfc2fb2004c1fde8',
                                                ],
                                                'DeviceModel' => [
                                                    'description' => '设备机型',
                                                    'type' => 'string',
                                                    'example' => 'model_2nd',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '修改时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1537255499517',
                                                ],
                                                'ModuleSchema' => [
                                                    'description' => '机型shema信息',
                                                    'type' => 'string',
                                                    'example' => '{"a":"b"}',
                                                ],
                                                'Id' => [
                                                    'description' => '数据唯一记录ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"PageList\\": {\\n    \\"List\\": [\\n      {\\n        \\"AuthTypeDesc\\": \\"基于账号\\",\\n        \\"DeviceModelId\\": 120,\\n        \\"AuthType\\": 0,\\n        \\"ProjectId\\": \\"PIC3UA0V\\",\\n        \\"GmtCreate\\": 1537255499517,\\n        \\"Namespace\\": \\"b09e93ce436aaf0dcfc2fb2004c1fde8\\",\\n        \\"DeviceModel\\": \\"model_2nd\\",\\n        \\"GmtModified\\": 1537255499517,\\n        \\"ModuleSchema\\": \\"{\\\\\\"a\\\\\\":\\\\\\"b\\\\\\"}\\",\\n        \\"Id\\": 12\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"TotalPageCount\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 10,\\n      \\"SimpleSign\\": false,\\n      \\"HasNextPage\\": false\\n    }\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListShadowSchemasResponse>\\r\\n\\t<RequestId>973C5884-2CB8-40B4-9D9F-F92BA38BD85F</RequestId>\\r\\n\\t<PageList>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<TotalPageCount>1</TotalPageCount>\\r\\n\\t\\t\\t<TotalCount>1</TotalCount>\\r\\n\\t\\t\\t<PageSize>10</PageSize>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<HasNextPage>true</HasNextPage>\\r\\n\\t\\t</Pagination>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<DeviceModel>model_2nd</DeviceModel>\\r\\n\\t\\t\\t<GmtCreate>1537255499517</GmtCreate>\\r\\n\\t\\t\\t<ModuleSchema>{&quot;ecu&quot;: {&quot;node_desc&quot;: &quot;动力系统&quot;, &quot;brake_controll&quot;: {&quot;handbrake&quot;: &quot;手刹状态&quot;, &quot;node_desc&quot;: &quot;驻车制动&quot;, &quot;brake_fluid&quot;: &quot;制动液&quot;, &quot;brake_lining&quot;: &quot;制动衬片&quot;, &quot;brake_status&quot;: &quot;刹车状态&quot;, &quot;brake_auxiliary&quot;: &quot;辅助制动&quot;, &quot;brake_emergency&quot;: &quot;应急制动&quot;, &quot;brake_pedal_strength&quot;: &quot;刹车踏板强度&quot;}}, &quot;device_info&quot;: {&quot;vin&quot;: &quot;车架号&quot;, &quot;uuid&quot;: &quot;uuid&quot;, &quot;brand&quot;: &quot;设备品牌&quot;, &quot;product&quot;: &quot;对内型号&quot;, &quot;version&quot;: &quot;schema版本&quot;, &quot;node_desc&quot;: &quot;设备描述&quot;, &quot;manufacture&quot;: &quot;制造商&quot;, &quot;device_model&quot;: &quot;对外型号&quot;, &quot;plugin_version&quot;: {&quot;ra&quot;: &quot;远程诊断&quot;, &quot;control&quot;: &quot;远程控制&quot;, &quot;node_desc&quot;: &quot;插件版本号&quot;, &quot;yundevice&quot;: &quot;yundevice版本号&quot;}, &quot;system_version&quot;: &quot;系统版本号&quot;}, &quot;car_body_hvac&quot;: {&quot;door&quot;: {&quot;node_desc&quot;: &quot;车门&quot;, &quot;bonnet_ststus&quot;: &quot;引擎盖状态&quot;, &quot;vehicle_rl_door&quot;: {&quot;node_desc&quot;: &quot;后左侧门&quot;, &quot;door_status&quot;: &quot;开合状态&quot;}, &quot;vehicle_rr_door&quot;: {&quot;node_desc&quot;: &quot;后右侧门&quot;, &quot;door_status&quot;: &quot;开合状态&quot;}, &quot;vehicle_driver_door&quot;: {&quot;node_desc&quot;: &quot;驾驶员车门&quot;, &quot;door_status&quot;: &quot;开合状态&quot;}, &quot;vehicle_locked_status&quot;: &quot;锁止状态&quot;, &quot;vehicle_passenger_door&quot;: {&quot;node_desc&quot;: &quot;副驾驶车门&quot;, &quot;door_status&quot;: &quot;开合状态&quot;}}, &quot;hvac&quot;: {&quot;ac&quot;: {&quot;ac_type&quot;: &quot;控温模式&quot;, &quot;ac_switch&quot;: &quot;AC开启&quot;, &quot;node_desc&quot;: &quot;空调系统&quot;, &quot;ac_engine_status&quot;: &quot;压缩机运转状态&quot;, &quot;ac_setting_temperature&quot;: &quot;空调设定温度&quot;}, &quot;node_desc&quot;: &quot;通风与空气调节&quot;, &quot;air_temperature&quot;: &quot;车内温度&quot;, &quot;ventilation_system&quot;: {&quot;air_rate&quot;: &quot;风速&quot;, &quot;node_desc&quot;: &quot;通风系统&quot;, &quot;air_recirc&quot;: &quot;空气循环方式&quot;, &quot;air_direction&quot;: &quot;风向&quot;}}, &quot;chair&quot;: {&quot;node_desc&quot;: &quot;座椅&quot;, &quot;chair_memory&quot;: {&quot;node_desc&quot;: &quot;座椅记忆&quot;, &quot;chair_driver_hight&quot;: &quot;驾驶位座椅高度&quot;, &quot;chair_driver_header&quot;: &quot;驾驶位座椅头枕&quot;, &quot;chair_driver_shifting&quot;: &quot;驾驶位座椅位移&quot;, &quot;chair_passenger_hight&quot;: &quot;副驾驶位座椅高度&quot;, &quot;chair_passenger_header&quot;: &quot;副驾驶位座椅头枕&quot;, &quot;chair_passenger_shifting&quot;: &quot;副驾驶位座椅位移&quot;}, &quot;seat_heating&quot;: {&quot;node_desc&quot;: &quot;座椅加热&quot;, &quot;seat_heating_driver_gear&quot;: &quot;主驾驶座加热档位&quot;, &quot;seat_heating_passenger_gear&quot;: &quot;副驾驶座加热档位&quot;}}, &quot;light&quot;: {&quot;fog_light&quot;: {&quot;node_desc&quot;: &quot;雾灯&quot;, &quot;fog_fl_light&quot;: &quot;前左雾灯&quot;, &quot;fog_fr_light&quot;: &quot;前右雾灯&quot;, &quot;fog_rear_light&quot;: &quot;后雾灯&quot;}, &quot;node_desc&quot;: &quot;灯光&quot;, &quot;foot_light&quot;: &quot;脚灯&quot;, &quot;read_light&quot;: {&quot;node_desc&quot;: &quot;阅读灯&quot;, &quot;read_fl_light&quot;: &quot;左前阅读灯&quot;, &quot;read_fr_light&quot;: &quot;右前阅读灯&quot;, &quot;read_rl_light&quot;: &quot;右前阅读灯&quot;, &quot;read_rr_light&quot;: &quot;右后阅读灯&quot;}, &quot;tail_light&quot;: {&quot;node_desc&quot;: &quot;尾灯&quot;, &quot;tail_l_light&quot;: &quot;左尾灯&quot;, &quot;tail_r_light&quot;: &quot;右尾灯&quot;}, &quot;turn_light&quot;: {&quot;node_desc&quot;: &quot;转向灯&quot;, &quot;turn_l_light&quot;: &quot;左侧转向灯&quot;, &quot;turn_r_light&quot;: &quot;左侧转向灯&quot;, &quot;turn_fl_light&quot;: &quot;左前转向灯&quot;, &quot;turn_fr_light&quot;: &quot;右前转向灯&quot;, &quot;turn_rl_light&quot;: &quot;左后转向灯&quot;, &quot;turn_rr_light&quot;: &quot;右后转向灯&quot;}, &quot;brake_light&quot;: {&quot;node_desc&quot;: &quot;刹车灯&quot;, &quot;brake_h_light&quot;: &quot;高位刹车灯&quot;, &quot;brake_l_light&quot;: &quot;左刹车灯&quot;, &quot;brake_r_light&quot;: &quot;右刹车灯&quot;}, &quot;trunk_light&quot;: &quot;后备箱灯&quot;, &quot;backup_light&quot;: &quot;倒车灯&quot;, &quot;hazard_light&quot;: &quot;警示灯&quot;, &quot;license_light&quot;: &quot;牌照灯&quot;, &quot;welcome_light&quot;: {&quot;node_desc&quot;: &quot;迎宾灯&quot;, &quot;welcome_fl_light&quot;: &quot;左前迎宾灯&quot;, &quot;welcome_fr_light&quot;: &quot;右前迎宾灯&quot;, &quot;welcome_rl_light&quot;: &quot;左后迎宾灯&quot;, &quot;welcome_rr_light&quot;: &quot;右后迎宾灯&quot;}, &quot;cosmetic_light&quot;: {&quot;node_desc&quot;: &quot;化妆灯&quot;, &quot;cosmetic_fl_light&quot;: &quot;左前化妆灯&quot;, &quot;cosmetic_fr_light&quot;: &quot;右后化妆灯&quot;, &quot;cosmetic_rl_light&quot;: &quot;左后化妆灯&quot;}, &quot;glovebox_light&quot;: &quot;手套箱灯&quot;, &quot;clearance_light&quot;: &quot;示廓灯&quot;, &quot;rear_view_ground&quot;: &quot;后视镜照地灯&quot;, &quot;head_light_status&quot;: &quot;大灯照明模式&quot;}, &quot;radar&quot;: {&quot;node_desc&quot;: &quot;雷达&quot;, &quot;raer_radar&quot;: {&quot;node_desc&quot;: &quot;后雷达&quot;, &quot;rear_radar_status&quot;: &quot;后雷达状态&quot;, &quot;rear_radar_interval&quot;: &quot;后方障碍物距离&quot;}, &quot;front_radar&quot;: {&quot;node_desc&quot;: &quot;前雷达&quot;, &quot;front_radar_status&quot;: &quot;前雷达状态&quot;, &quot;front_radar_interval&quot;: &quot;前方障碍物距离&quot;}}, &quot;cooling&quot;: {&quot;coolant&quot;: &quot;冷却液&quot;, &quot;node_desc&quot;: &quot;冷却系统&quot;, &quot;water_pump&quot;: &quot;水泵&quot;, &quot;water_tank&quot;: &quot;水箱&quot;, &quot;cooling_fan&quot;: &quot;风扇&quot;, &quot;cooling_radiator&quot;: &quot;散热器&quot;, &quot;water_temperature&quot;: &quot;水温&quot;}, &quot;steering&quot;: {&quot;node_desc&quot;: &quot;方向盘&quot;, &quot;steering_wheel_angle&quot;: &quot;打转角度&quot;}, &quot;node_desc&quot;: &quot;车身与HVAC&quot;, &quot;lubricating&quot;: {&quot;oil_pump&quot;: &quot;机油泵&quot;, &quot;node_desc&quot;: &quot;润滑系统&quot;, &quot;oil_ducts&quot;: &quot;油道&quot;, &quot;oil_level&quot;: &quot;机油油位&quot;, &quot;oil_filter&quot;: &quot;机油滤清器&quot;, &quot;pressure_plug&quot;: &quot;感压塞&quot;, &quot;oil_gather_colander&quot;: &quot;集滤器&quot;, &quot;pressure_limiting_valve&quot;: &quot;限压阀&quot;}, &quot;cigar_lighter&quot;: {&quot;node_desc&quot;: &quot;点烟器&quot;, &quot;cigar_lighter_rear&quot;: &quot;后点烟器&quot;, &quot;cigar_lighter_temp&quot;: &quot;点烟器温度&quot;, &quot;cigar_lighter_driver&quot;: &quot;前点烟器&quot;}, &quot;cleaning_fluid&quot;: &quot;清洗液&quot;}}</ModuleSchema>\\r\\n\\t\\t\\t<GmtModified>1537255499517</GmtModified>\\r\\n\\t\\t\\t<ProjectId>PIC3UA0V</ProjectId>\\r\\n\\t\\t\\t<AuthTypeDesc>用户模式</AuthTypeDesc>\\r\\n\\t\\t\\t<Id>53</Id>\\r\\n\\t\\t\\t<DeviceModelId>208</DeviceModelId>\\r\\n\\t\\t\\t<AuthType>101</AuthType>\\r\\n\\t\\t\\t<Namespace>b09e93ce436aaf0dcfc2fb2004c1fde8</Namespace>\\r\\n\\t\\t</List>\\r\\n\\t</PageList>\\r\\n</ListShadowSchemasResponse>","errorExample":""}]',
            'title' => '获取schema分页数据',
            'summary' => '根据项目ID、分页信息等，获取schema的分页数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDefaultSchema' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
                    ],
                ],
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机型ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '120',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'Schema' => [
                                'description' => '默认schema信息',
                                'type' => 'string',
                                'example' => '{"ecu":{"node_desc":"动力系统","brake_controll":{"handbrake":"手刹状态"}},"device_info":{"vin":"车架号","uuid":"uuid","brand":"设备品牌","plugin_version":{"ra":"远程诊断","control":"远程控制","node_desc":"插件版本号","yundevice":"yundevice版本号"},"system_version":"系统版本号"},"car_body_hvac":{"node_desc":"车身与HVAC","cigar_lighter":{"node_desc":"点烟器"},"cleaning_fluid":"清洗液"}}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Schema\\": \\"{\\\\\\"ecu\\\\\\":{\\\\\\"node_desc\\\\\\":\\\\\\"动力系统\\\\\\",\\\\\\"brake_controll\\\\\\":{\\\\\\"handbrake\\\\\\":\\\\\\"手刹状态\\\\\\"}},\\\\\\"device_info\\\\\\":{\\\\\\"vin\\\\\\":\\\\\\"车架号\\\\\\",\\\\\\"uuid\\\\\\":\\\\\\"uuid\\\\\\",\\\\\\"brand\\\\\\":\\\\\\"设备品牌\\\\\\",\\\\\\"plugin_version\\\\\\":{\\\\\\"ra\\\\\\":\\\\\\"远程诊断\\\\\\",\\\\\\"control\\\\\\":\\\\\\"远程控制\\\\\\",\\\\\\"node_desc\\\\\\":\\\\\\"插件版本号\\\\\\",\\\\\\"yundevice\\\\\\":\\\\\\"yundevice版本号\\\\\\"},\\\\\\"system_version\\\\\\":\\\\\\"系统版本号\\\\\\"},\\\\\\"car_body_hvac\\\\\\":{\\\\\\"node_desc\\\\\\":\\\\\\"车身与HVAC\\\\\\",\\\\\\"cigar_lighter\\\\\\":{\\\\\\"node_desc\\\\\\":\\\\\\"点烟器\\\\\\"},\\\\\\"cleaning_fluid\\\\\\":\\\\\\"清洗液\\\\\\"}}\\",\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<DescribeDefaultSchemaResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<Schema>{&quot;ecu&quot;:{&quot;node_desc&quot;:&quot;动力系统&quot;,&quot;brake_controll&quot;:{&quot;handbrake&quot;:&quot;手刹状态&quot;}},&quot;device_info&quot;:{&quot;vin&quot;:&quot;车架号&quot;,&quot;uuid&quot;:&quot;uuid&quot;,&quot;brand&quot;:&quot;设备品牌&quot;,&quot;plugin_version&quot;:{&quot;ra&quot;:&quot;远程诊断&quot;,&quot;control&quot;:&quot;远程控制&quot;,&quot;node_desc&quot;:&quot;插件版本号&quot;,&quot;yundevice&quot;:&quot;yundevice版本号&quot;},&quot;system_version&quot;:&quot;系统版本号&quot;},&quot;car_body_hvac&quot;:{&quot;node_desc&quot;:&quot;车身与HVAC&quot;,&quot;cigar_lighter&quot;:{&quot;node_desc&quot;:&quot;点烟器&quot;},&quot;cleaning_fluid&quot;:&quot;清洗液&quot;}}</Schema>\\r\\n</DescribeDefaultSchemaResponse>","errorExample":""}]',
            'title' => '根据机型获取默认的schema信息',
            'summary' => '调用DescribeDefaultSchema根据机型获取默认的schema信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDeviceValiditySchema' => [
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
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机型信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'model_2nd',
                    ],
                ],
                [
                    'name' => 'SchemaVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'schema版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'ItemList' => [
                                'description' => '验证schema列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Minimum' => [
                                            'description' => '最小数量',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '5',
                                        ],
                                        'Type' => [
                                            'description' => '类型',
                                            'type' => 'string',
                                            'example' => 'string',
                                        ],
                                        'Maximum' => [
                                            'description' => '最大数量',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '10',
                                        ],
                                        'ItemType' => [
                                            'description' => '数据类型',
                                            'type' => 'string',
                                            'example' => 'boolean',
                                        ],
                                        'EnumListStr' => [
                                            'description' => '枚举值的字符串信息',
                                            'type' => 'string',
                                            'example' => '[a,b]',
                                        ],
                                        'ExclusiveMinimum' => [
                                            'description' => '是否不包含最小值',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'MaxLength' => [
                                            'description' => '最大长度',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'Required' => [
                                            'description' => '是否是必须的',
                                            'type' => 'string',
                                            'example' => 'true',
                                        ],
                                        'Description' => [
                                            'description' => '描述信息',
                                            'type' => 'string',
                                            'example' => '机型验证信息',
                                        ],
                                        'ExclusiveMaximum' => [
                                            'description' => '是否不包含最大值',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Path' => [
                                            'description' => '路径',
                                            'type' => 'string',
                                            'example' => '/havc/oil_level',
                                        ],
                                        'MinLength' => [
                                            'description' => '最小长度',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"ItemList\\": [\\n    {\\n      \\"Type\\": \\"string\\",\\n      \\"Minimum\\": 5,\\n      \\"Maximum\\": 10,\\n      \\"ItemType\\": \\"boolean\\",\\n      \\"ExclusiveMinimum\\": true,\\n      \\"EnumListStr\\": \\"[a,b]\\",\\n      \\"MaxLength\\": 10,\\n      \\"Required\\": \\"true\\",\\n      \\"Description\\": \\"机型验证信息\\",\\n      \\"ExclusiveMaximum\\": false,\\n      \\"Path\\": \\"/havc/oil_level\\",\\n      \\"MinLength\\": 5\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<DescribeDeviceValiditySchemaResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<ItemList>\\r\\n\\t\\t<description>开机时长</description>\\r\\n\\t\\t<enumListStr />\\r\\n\\t\\t<exclusiveMaximum />\\r\\n\\t\\t<exclusiveMinimum />\\r\\n\\t\\t<itemType />\\r\\n\\t\\t<maxLength />\\r\\n\\t\\t<maximum />\\r\\n\\t\\t<minLength />\\r\\n\\t\\t<minimum />\\r\\n\\t\\t<path>/system/environment_variables/system_runtime</path>\\r\\n\\t\\t<required>false</required>\\r\\n\\t\\t<type>string</type>\\r\\n\\t</ItemList>\\r\\n\\t<ItemList>\\r\\n\\t\\t<description>客户端Ip</description>\\r\\n\\t\\t<enumListStr />\\r\\n\\t\\t<exclusiveMaximum />\\r\\n\\t\\t<exclusiveMinimum />\\r\\n\\t\\t<itemType />\\r\\n\\t\\t<maxLength />\\r\\n\\t\\t<maximum />\\r\\n\\t\\t<minLength />\\r\\n\\t\\t<minimum />\\r\\n\\t\\t<path>/system/environment_variables/ip</path>\\r\\n\\t\\t<required>false</required>\\r\\n\\t\\t<type>string</type>\\r\\n\\t</ItemList>\\r\\n</DescribeDeviceValiditySchemaResponse>","errorExample":""}]',
            'title' => '根据机型获取验证schema',
            'summary' => '调用DescribeDeviceValiditySchema根据机型获取验证schema。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeShadowSchema' => [
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
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'model_2nd',
                    ],
                ],
                [
                    'name' => 'IsSimple',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否不返回描述信息',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Schema' => [
                                'description' => 'schema信息',
                                'type' => 'string',
                                'example' => '[   {     \\"id\\": 102,     \\"name\\": \\"product:对内型号\\",     \\"open\\": false,     \\"pId\\": 1,     \\"path\\": \\"/device_info/product\\"   },   {     \\"id\\": 101,     \\"name\\": \\"manufacture:制造商\\",     \\"open\\": false,     \\"pId\\": 1,     \\"path\\": \\"/device_info/manufacture\\"   } ]',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Schema\\": \\"[   {     \\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": 102,     \\\\\\\\\\\\\\"name\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"product:对内型号\\\\\\\\\\\\\\",     \\\\\\\\\\\\\\"open\\\\\\\\\\\\\\": false,     \\\\\\\\\\\\\\"pId\\\\\\\\\\\\\\": 1,     \\\\\\\\\\\\\\"path\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"/device_info/product\\\\\\\\\\\\\\"   },   {     \\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": 101,     \\\\\\\\\\\\\\"name\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"manufacture:制造商\\\\\\\\\\\\\\",     \\\\\\\\\\\\\\"open\\\\\\\\\\\\\\": false,     \\\\\\\\\\\\\\"pId\\\\\\\\\\\\\\": 1,     \\\\\\\\\\\\\\"path\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"/device_info/manufacture\\\\\\\\\\\\\\"   } ]\\",\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<DescribeShadowSchemaResponse>\\r\\n    <RequestId>195D7F63-0904-49ED-854B-13C7BB37F764</RequestId>\\r\\n\\t<Schema>[{&quot;path&quot;:&quot;/device_info/product&quot;,&quot;name&quot;:&quot;product:对内型号&quot;,&quot;pId&quot;:1,&quot;id&quot;:102,&quot;open&quot;:false},{&quot;path&quot;:&quot;/device_info/manufacture&quot;,&quot;name&quot;:&quot;manufacture:制造商&quot;,&quot;pId&quot;:1,&quot;id&quot;:101,&quot;open&quot;:false}]</Schema>\\r\\n</DescribeShadowSchemaResponse>","errorExample":""}]',
            'title' => '根据机型获取schema信息',
            'summary' => '调用DescribeShadowSchema根据机型获取schema信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddUploadedFunctionFileInfo' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'ObjectKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已上传的文件标识符',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'function/file/1288127240930711/PE9FQC48/B1226EA3-2518-4164-8D2D-82B91A077020/hello.zip',
                    ],
                ],
                [
                    'name' => 'FileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hello.zip',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<AddUploadedFunctionFileInfoResponse>\\r\\n<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</AddUploadedFunctionFileInfoResponse>","errorExample":""}]',
            'title' => '添加已上传的函数文件',
            'summary' => '添加已经上传（先请求GenerateFunctionFileUploadMeta）的函数文件。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteFunctionFile' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'FileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hello.zip',
                    ],
                ],
                [
                    'name' => 'FileType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件类型。**0**：单文件；**1**：包文件。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<DeleteFunctionFileResponse>\\r\\n  <RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</DeleteFunctionFileResponse>","errorExample":""}]',
            'title' => '删除函数文件',
            'summary' => '调用DeleteFunctionFile删除函数文件。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDeployedFunctions' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Functions' => [
                                'description' => '函数记录',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ProjectId' => [
                                            'description' => '项目ID',
                                            'type' => 'string',
                                            'example' => 'PE9FQC48',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间，精确到毫秒的Unix时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1535604251000',
                                        ],
                                        'Name' => [
                                            'description' => '函数名',
                                            'type' => 'string',
                                            'example' => 'someFunc',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改时间，精确到毫秒的Unix时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1535872636000',
                                        ],
                                        'Id' => [
                                            'description' => '函数ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'FileId' => [
                                            'description' => '文件ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"Functions\\": [\\n    {\\n      \\"ProjectId\\": \\"PE9FQC48\\",\\n      \\"GmtCreate\\": 1535604251000,\\n      \\"Name\\": \\"someFunc\\",\\n      \\"GmtModified\\": 1535872636000,\\n      \\"Id\\": 1,\\n      \\"FileId\\": 1\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListDeployedFunctionsResponse>\\r\\n\\t<Functions>\\r\\n\\t\\t<FileId>46</FileId>\\r\\n\\t\\t<GmtCreate>1536201206000</GmtCreate>\\r\\n\\t\\t<GmtModified>1536201206000</GmtModified>\\r\\n\\t\\t<Id>35</Id>\\r\\n\\t\\t<Name>someFunc</Name>\\r\\n\\t\\t<ProjectId>PE9FQC48</ProjectId>\\r\\n\\t</Functions>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListDeployedFunctionsResponse>","errorExample":""}]',
            'title' => '查询已部署的函数',
            'summary' => '调用ListDeployedFunctions查询已部署的函数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListFunctionExecuteLog' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FunctionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '函数名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'someFunc',
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'description' => '函数所部署的环境，0：沙箱环境；1：生产环境。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标页号，默认为1',
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
                        'description' => '每页所显示的项数，默认为10',
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
                            'LogList' => [
                                'description' => '日志列表',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '目标页号',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'PageSize' => [
                                                'description' => '每页所显示的项数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'HasNextPage' => [
                                                'description' => '是否有下一页',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                        ],
                                    ],
                                    'Logs' => [
                                        'description' => '日志数组',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Message' => [
                                                    'description' => '函数执行时，标准输出的日志内容',
                                                    'type' => 'string',
                                                    'example' => '2018-08-21T03:28:50.267Z 5f541c0a-2175-7651-7b7e-c8a0bff5cb7e [info] This is output of console.log',
                                                ],
                                                'BackEndRequestId' => [
                                                    'description' => '后端运行环境调用的编号',
                                                    'type' => 'string',
                                                    'example' => '5f541c0a-2175-7651-7b7e-c8a0bff5cb7e',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"LogList\\": {\\n    \\"Logs\\": [\\n      {\\n        \\"Message\\": \\"2018-08-21T03:28:50.267Z 5f541c0a-2175-7651-7b7e-c8a0bff5cb7e [info] This is output of console.log\\",\\n        \\"BackEndRequestId\\": \\"5f541c0a-2175-7651-7b7e-c8a0bff5cb7e\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"HasNextPage\\": true\\n    }\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListFunctionExecuteLogResponse>\\r\\n\\t<LogList>\\r\\n\\t\\t<Logs>\\r\\n\\t\\t\\t<BackEndRequestId>5f541c0a-2175-7651-7b7e-c8a0bff5cb7e</BackEndRequestId>\\r\\n\\t\\t    <Message>2018-08-21T03:28:50.267Z 5f541c0a-2175-7651-7b7e-c8a0bff5cb7e [info] This is output of console.log</Message>\\r\\n\\t    </Logs>\\r\\n\\t<Pagination>\\r\\n\\t\\t<HasNextPage>false</HasNextPage>\\r\\n\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t<PageSize>10</PageSize>\\r\\n\\t</Pagination>\\r\\n    </LogList>\\r\\n    <RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListFunctionExecuteLogResponse>","errorExample":""}]',
            'title' => '查询函数执行日志',
            'summary' => '按分页列出函数执行的日志。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListFunctionFiles' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'FileType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件类型，0：单文件；1：包文件',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标页号，默认为1',
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
                        'description' => '每页所显示的项数，默认为10',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'FileList' => [
                                'description' => '文件列表',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '目标页号',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TotalPageCount' => [
                                                'description' => '记录总页数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'PageSize' => [
                                                'description' => '每页所显示的项数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'TotalCount' => [
                                                'description' => '记录总数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '11',
                                            ],
                                        ],
                                    ],
                                    'Files' => [
                                        'description' => '文件数组',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '文件状态。0：正常；1：已删除',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'ProductionDeployTime' => [
                                                    'description' => '生成环境的部署时间，精确到毫秒的Unix时间戳'."\n"
                                                        ."\n"
                                                        .'> 只有当生成环境的部署状态为已部署，才可获取到该值，否则该字段不返回。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1535604251000',
                                                ],
                                                'ProductionDeployStatus' => [
                                                    'description' => '生成环境的部署状态。0：未部署，1：已部署',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'Description' => [
                                                    'description' => '文件描述',
                                                    'type' => 'string',
                                                    'example' => 'This is description',
                                                ],
                                                'SandboxDeployTime' => [
                                                    'description' => '沙箱环境的部署时间，精确到毫秒的Unix时间戳'."\n"
                                                        ."\n"
                                                        .'> 只有当沙箱环境的部署状态为已部署，才可获取到该值，否则该字段不返回。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1535604251000',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间，精确到毫秒的Unix时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1535604251000',
                                                ],
                                                'SandboxDeployStatus' => [
                                                    'description' => '沙箱环境的部署状态。0：未部署，1：已部署',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '修改时间，精确到毫秒的Unix时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1535604251000',
                                                ],
                                                'Name' => [
                                                    'description' => '文件名',
                                                    'type' => 'string',
                                                    'example' => 'hello.zip',
                                                ],
                                                'ContentId' => [
                                                    'description' => '文件内容ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'Id' => [
                                                    'description' => '文件ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"FileList\\": {\\n    \\"Files\\": [\\n      {\\n        \\"Status\\": 0,\\n        \\"ProductionDeployTime\\": 1535604251000,\\n        \\"ProductionDeployStatus\\": 1,\\n        \\"Description\\": \\"This is description\\",\\n        \\"SandboxDeployTime\\": 1535604251000,\\n        \\"GmtCreate\\": 1535604251000,\\n        \\"SandboxDeployStatus\\": 1,\\n        \\"GmtModified\\": 1535604251000,\\n        \\"Name\\": \\"hello.zip\\",\\n        \\"ContentId\\": 1,\\n        \\"Id\\": 1\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"TotalPageCount\\": 2,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 11\\n    }\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListFunctionFilesResponse>\\r\\n\\t<FileList>\\r\\n\\t\\t<Files>\\r\\n\\t\\t\\t<ContentId>5</ContentId>\\r\\n\\t\\t\\t<GmtCreate>1509422113000</GmtCreate>\\r\\n\\t\\t\\t<GmtModified>1510150180000</GmtModified>\\r\\n\\t\\t\\t<Id>17</Id>\\r\\n\\t\\t\\t<Name>hello.zip</Name>\\r\\n\\t\\t\\t<ProductionDeployStatus>0</ProductionDeployStatus>\\r\\n\\t\\t\\t<SandboxDeployStatus>1</SandboxDeployStatus>\\r\\n\\t\\t\\t<SandboxDeployTime>1509422113000</SandboxDeployTime>\\r\\n\\t\\t\\t<Status>0</Status>\\r\\n\\t\\t</Files>\\r\\n\\t\\t<Files>\\r\\n\\t\\t\\t<ContentId>29</ContentId>\\r\\n\\t\\t\\t<Description>This is Desciption</Description>\\r\\n\\t\\t\\t<GmtCreate>1534739368000</GmtCreate>\\r\\n\\t\\t\\t<GmtModified>1534739368000</GmtModified>\\r\\n\\t\\t\\t<Id>41</Id>\\r\\n\\t\\t\\t<Name>hello.zip</Name>\\r\\n\\t\\t\\t<ProductionDeployStatus>1</ProductionDeployStatus>\\r\\n\\t\\t\\t<ProductionDeployTime>1509422113000</ProductionDeployTime>\\r\\n\\t\\t\\t<SandboxDeployStatus>1</SandboxDeployStatus>\\r\\n\\t\\t\\t<SandboxDeployTime>1509422113000</SandboxDeployTime>\\r\\n\\t\\t\\t<Status>0</Status>\\r\\n\\t\\t</Files>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<PageSize>10</PageSize>\\r\\n\\t\\t\\t<TotalCount>15</TotalCount>\\r\\n\\t\\t\\t<TotalPageCount>2</TotalPageCount>\\r\\n\\t\\t</Pagination>\\r\\n\\t</FileList>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListFunctionFilesResponse>","errorExample":""}]',
            'title' => '查询函数文件',
            'summary' => '列出指定项目、指定类型的函数文件，支持分页。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListFunctionFilesByProjectId' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标页号，默认为1',
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
                        'description' => '每页所显示的项数，默认为10',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Files' => [
                                'description' => '文件记录',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '文件类型，0：单文件；1：包文件',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Status' => [
                                            'description' => '文件状态，0：正常；1：已删除',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间，精确到毫秒的Unix时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1535604251000',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改时间，精确到毫秒的Unix时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1535872636000',
                                        ],
                                        'Name' => [
                                            'description' => '文件名',
                                            'type' => 'string',
                                            'example' => 'hello.zip',
                                        ],
                                        'Id' => [
                                            'description' => '文件ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'ContentId' => [
                                            'description' => '文件内容ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"Files\\": [\\n    {\\n      \\"Type\\": 1,\\n      \\"Status\\": 0,\\n      \\"GmtCreate\\": 1535604251000,\\n      \\"GmtModified\\": 1535872636000,\\n      \\"Name\\": \\"hello.zip\\",\\n      \\"Id\\": 1,\\n      \\"ContentId\\": 1\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListFunctionFilesByProjectIdResponse>\\r\\n\\t<Files>\\r\\n\\t\\t<ContentId>17</ContentId>\\r\\n\\t\\t<GmtCreate>1536201185000</GmtCreate>\\r\\n\\t\\t<GmtModified>1536633019000</GmtModified>\\r\\n\\t\\t<Id>46</Id>\\r\\n\\t\\t<Name>hello.zip</Name>\\r\\n\\t\\t<Status>0</Status>\\r\\n\\t\\t<Type>1</Type>\\r\\n\\t</Files>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListFunctionFilesByProjectIdResponse>","errorExample":""}]',
            'title' => '根据项目ID查询函数文件',
            'summary' => '列出指定项目所创建的函数单文件及包文件，支持分页。',
            'description' => '> 如在创建触发器时，需要先列出当前项目关联的函数文件，然后进行函数的选择。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GenerateFunctionFileUploadMeta' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'FileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hello.zip',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'UploadMeta' => [
                                'description' => '上传文件的元信息',
                                'type' => 'object',
                                'properties' => [
                                    'PostObjectPolicy' => [
                                        'description' => '上传文件的入参信息，想要了解更多，请参考OSS的[PostObject](https://help.aliyun.com/document_detail/31988.html)描述。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Signature' => [
                                                'description' => '签名信息，详见[Post Signature](https://help.aliyun.com/document_detail/31988.html?spm=a2c4g.11186623.4.5.3d774382LHt5Uz#h2-url-3)',
                                                'type' => 'string',
                                                'example' => 'XuG0kIHhWPbztVfDGA1HhzdKPJI=',
                                            ],
                                            'Host' => [
                                                'description' => '上传文件的目标地址',
                                                'type' => 'string',
                                                'example' => 'https://iovcc-yunfunction-qa.oss-cn-shanghai.aliyuncs.com',
                                            ],
                                            'Policy' => [
                                                'description' => 'Base64编码过的[PostPolicy](https://help.aliyun.com/document_detail/31988.html?spm=a2c4g.11186623.4.5.3d774382LHt5Uz#h2-url-2)信息',
                                                'type' => 'string',
                                                'example' => 'eyJleHBpcmF0aW9uIjoiMjAxOC0wOS0xOFQwMjoxMToyNy4wODZaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMTA0ODU3NjAwXSxbInN0YXJ0cy13aXRoIiwiJGtleSIsImZ1bmN0aW9uL2ZpbGUvMTI4ODEyNzI0MDkzMDcxMS9QRTlGUUM0OCJdXX0=',
                                            ],
                                            'Expire' => [
                                                'description' => 'PostPolicy的过期时长（毫秒）',
                                                'type' => 'string',
                                                'example' => '1537236687',
                                            ],
                                            'AccessId' => [
                                                'description' => '临时的访问ID',
                                                'type' => 'string',
                                                'example' => 'STS.NHm36Gt3rEesnNGi7spRPCMeD',
                                            ],
                                        ],
                                    ],
                                    'SecurityToken' => [
                                        'description' => 'RAM角色扮演的STS Token，详情参见[STS临时授权](https://help.aliyun.com/document_detail/32016.html)。',
                                        'type' => 'string',
                                        'example' => 'CAIStQN1q6Ft5B2yfSjIr4vYeIzzmexT8qeYbGj2jTcmfN18rIjOpjz2IHFIeHRoBeocs/42n25S6/gSlokqEMRvGxCVNeJctboL2CqPSdWYl5Llx+Qp2MyLMDO/JUYlCllp1aGrIunGc9KBNnpA/00amMl0HFfPdlihNoLzxvwDR98LXw6+QCNbDdNNXGVLo9MbMn2jUpTINQXx0FLNEG1iuAd3lRmkgMbZ+MCH7QfEh1DX0/Ico5+LQqKpdM5xJpxyISncvsx/fbGT1zVLuVoYtvV3i7JP8nLWo9eTHl9a/xSBNa/N+5phMQlyeqk9HelKrfzx0qQi6ryKzdutl04cZrkKCn2YfK3x7vLvRLPLFN8ybuT8IG+fkILNZJjyrQgvJGMGMg1XfdE9K3h2TAUlDT/HLKS7+VfMJQmiT6XCiftmgcMvkA+0pYvRfwfWGvKh/Hc2A7RgPwRqFWZPhDG4K/VbKVwVIwM5XOrMd+gpMkAC85GPlBbJSyhtwktQu/DDfP7MssgdE96uAs4bidZHPskc6jB0FQmpG6jVi0AKf2d+Xa1fy7LwPJKg8r6ZzfV+qBVC8Ubq0BqAAWxX+0Nwa5DhRemsT1hWIFHzz7zvt8mvHXE42bOQsmHAlThYrG27r1IJ4PeiL17aiTPK0nW5aXpvjaskg+b42mR/YsI0T7v7xMuMj6btceXEBBMl3a82lDryxBtj6+N49U5Wn+bKXXAtz5/ti7LWHALboNLIOyJLWZeWOOMzyA63',
                                    ],
                                    'ObjectKey' => [
                                        'description' => '上传文件的标识',
                                        'type' => 'string',
                                        'example' => 'function/file/1288127240930711/PE9FQC48/B1226EA3-2518-4164-8D2D-82B91A077020/hello.zip',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"UploadMeta\\": {\\n    \\"SecurityToken\\": \\"CAIStQN1q6Ft5B2yfSjIr4vYeIzzmexT8qeYbGj2jTcmfN18rIjOpjz2IHFIeHRoBeocs/42n25S6/gSlokqEMRvGxCVNeJctboL2CqPSdWYl5Llx+Qp2MyLMDO/JUYlCllp1aGrIunGc9KBNnpA/00amMl0HFfPdlihNoLzxvwDR98LXw6+QCNbDdNNXGVLo9MbMn2jUpTINQXx0FLNEG1iuAd3lRmkgMbZ+MCH7QfEh1DX0/Ico5+LQqKpdM5xJpxyISncvsx/fbGT1zVLuVoYtvV3i7JP8nLWo9eTHl9a/xSBNa/N+5phMQlyeqk9HelKrfzx0qQi6ryKzdutl04cZrkKCn2YfK3x7vLvRLPLFN8ybuT8IG+fkILNZJjyrQgvJGMGMg1XfdE9K3h2TAUlDT/HLKS7+VfMJQmiT6XCiftmgcMvkA+0pYvRfwfWGvKh/Hc2A7RgPwRqFWZPhDG4K/VbKVwVIwM5XOrMd+gpMkAC85GPlBbJSyhtwktQu/DDfP7MssgdE96uAs4bidZHPskc6jB0FQmpG6jVi0AKf2d+Xa1fy7LwPJKg8r6ZzfV+qBVC8Ubq0BqAAWxX+0Nwa5DhRemsT1hWIFHzz7zvt8mvHXE42bOQsmHAlThYrG27r1IJ4PeiL17aiTPK0nW5aXpvjaskg+b42mR/YsI0T7v7xMuMj6btceXEBBMl3a82lDryxBtj6+N49U5Wn+bKXXAtz5/ti7LWHALboNLIOyJLWZeWOOMzyA63\\",\\n    \\"ObjectKey\\": \\"function/file/1288127240930711/PE9FQC48/B1226EA3-2518-4164-8D2D-82B91A077020/hello.zip\\",\\n    \\"PostObjectPolicy\\": {\\n      \\"Signature\\": \\"XuG0kIHhWPbztVfDGA1HhzdKPJI=\\",\\n      \\"Host\\": \\"https://iovcc-yunfunction-qa.oss-cn-shanghai.aliyuncs.com\\",\\n      \\"Policy\\": \\"eyJleHBpcmF0aW9uIjoiMjAxOC0wOS0xOFQwMjoxMToyNy4wODZaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMTA0ODU3NjAwXSxbInN0YXJ0cy13aXRoIiwiJGtleSIsImZ1bmN0aW9uL2ZpbGUvMTI4ODEyNzI0MDkzMDcxMS9QRTlGUUM0OCJdXX0=\\",\\n      \\"Expire\\": \\"1537236687\\",\\n      \\"AccessId\\": \\"STS.NHm36Gt3rEesnNGi7spRPCMeD\\"\\n    }\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<GenerateFunctionFileUploadMetaResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<UploadMeta>\\r\\n\\t\\t<ObjectKey>function/file/1288127239930711/PE9FQC48/6F25F67C-F411-499F-BCE2-67CA563CB064/hello.zip</ObjectKey>\\r\\n\\t\\t<PostObjectPolicy>\\r\\n\\t\\t\\t<AccessId>STS.NHm36Gt3rEesnNGi7spRPCMeD</AccessId>\\r\\n\\t\\t\\t<Expire>1537236687</Expire>\\r\\n\\t\\t\\t<Host>https://iovcc-yunfunction-online.oss-cn-shanghai.aliyuncs.com</Host>\\r\\n\\t\\t\\t<Policy>eyJleHBpcmF0aW9uIjoiMjAxOC0wOS0xOFQwMjoxMToyNy4wODZaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMTA0ODU3NjAwXSxbInN0YXJ0cy13aXRoIiwiJGtleSIsImZ1bmN0aW9uL2ZpbGUvMTI4ODEyNzI0MDkzMDcxMS9QRTlGUUM0OCJdXX0=</Policy>\\r\\n\\t\\t\\t<Signature>XuG0kIHhWPbztVfDGA1HhzdKPJI=</Signature>\\r\\n\\t\\t</PostObjectPolicy>\\r\\n\\t\\t<SecurityToken>CAIStQN1q6Ft5B2yfSjIr4vYeIzzmexT8qeYbGj2jTcmfN18rIjOpjz2IHFIeHRoBeocs/42n25S6/gSlokqEMRvGxCVNeJctboL2CqPSdWYl5Llx+Qp2MyLMDO/JUYlCllp1aGrIunGc9KBNnpA/00amMl0HFfPdlihNoLzxvwDR98LXw6+QCNbDdNNXGVLo9MbMn2jUpTINQXx0FLNEG1iuAd3lRmkgMbZ+MCH7QfEh1DX0/Ico5+LQqKpdM5xJpxyISncvsx/fbGT1zVLuVoYtvV3i7JP8nLWo9eTHl9a/xSBNa/N+5phMQlyeqk9HelKrfzx0qQi6ryKzdutl04cZrkKCn2YfK3x7vLvRLPLFN8ybuT8IG+fkILNZJjyrQgvJGMGMg1XfdE9K3h2TAUlDT/HLKS7+VfMJQmiT6XCiftmgcMvkA+0pYvRfwfWGvKh/Hc2A7RgPwRqFWZPhDG4K/VbKVwVIwM5XOrMd+gpMkAC85GPlBbJSyhtwktQu/DDfP7MssgdE96uAs4bidZHPskc6jB0FQmpG6jVi0AKf2d+Xa1fy7LwPJKg8r6ZzfV+qBVC8Ubq0BqAAWxX+0Nwa5DhRemsT1hWIFHzz7zvt8mvHXE42bOQsmHAlThYrG27r1IJ4PeiL17aiTPK0nW5aXpvjaskg+b42mR/YsI0T7v7xMuMj6btceXEBBMl3a82lDryxBtj6+N49U5Wn+bKXXAtz5/ti7LWHALboNLIOyJLWZeWOOMzyA63</SecurityToken>\\r\\n\\t</UploadMeta>\\r\\n</GenerateFunctionFileUploadMetaResponse>","errorExample":""}]',
            'title' => '生成函数文件上传元信息',
            'summary' => '调用GenerateFunctionFileUploadMeta生成函数文件上传元信息。',
            'description' => '> 获取到上传元信息后，即可把函数文件上传到OSS。更多信息，可见OSS的[服务端签名后直传](https://help.aliyun.com/document_detail/31926.html)描述。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'InvokeFunction' => [
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '函数文件ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FunctionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '函数名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'someFunc',
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'description' => '函数所部署的环境，0：沙箱环境；1：生产环境。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调用函数的入参',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"key":"value"}',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Output' => [
                                        'description' => '函数执行时的标准输出',
                                        'type' => 'string',
                                        'example' => 'hello, bla bla bla...',
                                    ],
                                    'BackEndRequestId' => [
                                        'description' => '后端运行环境调用的请求ID',
                                        'type' => 'string',
                                        'example' => '54117932-59f1-4955-7a26-0c96962fd645',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"Result\\": {\\n    \\"Output\\": \\"hello, bla bla bla...\\",\\n    \\"BackEndRequestId\\": \\"54117932-59f1-4955-7a26-0c96962fd645\\"\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<InvokeFunctionResponse>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n\\t<Result>\\r\\n\\t\\t<BackEndRequestId>2b500332-5a7b-9b5b-b92e-38685b95efaa</BackEndRequestId>\\r\\n\\t\\t<Output>succeed</Output>\\r\\n\\t</Result>\\r\\n</InvokeFunctionResponse>","errorExample":""}]',
            'title' => '调用函数',
            'summary' => '使用InvokeFunction调用函数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeployFunctionFile' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '函数文件ID'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '35',
                    ],
                ],
                [
                    'name' => 'DeployEnv',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署环境，**0**：沙箱环境；**1**：生产环境。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<DeployFunctionFileResponse>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</DeployFunctionFileResponse>","errorExample":""}]',
            'title' => '部署函数',
            'summary' => '调用DeployFunctionFile部署函数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateTrigger' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间，如：syncstore的namespace。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f323baa35c304751a4b1254adc8230bf',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器触发的事件标识，如：syncstore路径。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/',
                    ],
                ],
                [
                    'name' => 'FileIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标函数所在的文件ID。'."\n"
                            ."\n"
                            .'与目标函数ID相对应，多个以英文逗号","分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1,2',
                    ],
                ],
                [
                    'name' => 'FunctionIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标函数ID。'."\n"
                            ."\n"
                            .'与目标函数所在的文件ID相对应，多个以英文逗号","分隔。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '35,36',
                    ],
                ],
                [
                    'name' => 'InvocationMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调用模式。'."\n"
                            ."\n"
                            .'- **0**：串行（同步）调用'."\n"
                            .'- **1**：并行（异步）调用',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Sandbox',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否在沙箱环境触发。'."\n"
                            ."\n"
                            .'- **0**（默认）：不在该环境执行'."\n"
                            .'- **1**：在该环境执行',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Production',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否在生产环境触发。'."\n"
                            ."\n"
                            .'- **0**（默认）：不在该环境执行'."\n"
                            .'- **1**：在该环境执行',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<CreateTriggerResponse>\\r\\n   <RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</CreateTriggerResponse>","errorExample":""}]',
            'title' => '创建触发器',
            'summary' => '调用CreateTrigger创建触发器。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteTrigger' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<DeleteTriggerResponse>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</DeleteTriggerResponse>","errorExample":""}]',
            'title' => '删除触发器',
            'summary' => '调用DeleteTrigger删除触发器。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateTrigger' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Sandbox',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否在沙箱环境触发。'."\n"
                            ."\n"
                            .'- **0**（默认）：不在该环境执行'."\n"
                            .'- **1**：在该环境执行',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Production',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否在生产环境触发。'."\n"
                            ."\n"
                            .'- **0**（默认）：不在该环境执行'."\n"
                            .'- **1**：在该环境执行',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<UpdateTriggerResponse>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</UpdateTriggerResponse>","errorExample":""}]',
            'title' => '修改触发器',
            'summary' => '调用UpdateTrigger修改触发器。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTriggers' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PE9FQC48',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间，如：syncstore的namespace',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f323baa35c304751a4b1254adc8230bf',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标页号，默认为1',
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
                        'description' => '每页所显示的项数，默认为10',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'TriggerList' => [
                                'description' => '触发器列表',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '目标页号',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TotalPageCount' => [
                                                'description' => '分页总数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'PageSize' => [
                                                'description' => '每页所显示的项数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'TotalCount' => [
                                                'description' => '记录总数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '11',
                                            ],
                                        ],
                                    ],
                                    'Triggers' => [
                                        'description' => '触发器数组',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '触发器状态，-1：关联函数已删除；1：关联函数未部署；2：关联函数已部署',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'Type' => [
                                                    'description' => '触发器类型，0：syncstore',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Production' => [
                                                    'description' => '是否在生产环境触发，0：不在该环境执行；1：在该环境执行，默认为0',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'Functions' => [
                                                    'description' => '函数数组',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'GmtCreate' => [
                                                                'description' => '创建时间，精确到毫秒的Unix时间戳',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '1535872636000',
                                                            ],
                                                            'FileName' => [
                                                                'description' => '文件名',
                                                                'type' => 'string',
                                                                'example' => 'hello.zip',
                                                            ],
                                                            'Name' => [
                                                                'description' => '函数名',
                                                                'type' => 'string',
                                                                'example' => 'someFunc',
                                                            ],
                                                            'GmtModified' => [
                                                                'description' => '修改时间，精确到毫秒的Unix时间戳',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '1535872636000',
                                                            ],
                                                            'Id' => [
                                                                'description' => '函数ID',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '1',
                                                            ],
                                                            'FileId' => [
                                                                'description' => '文件ID',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Sandbox' => [
                                                    'description' => '是否在沙箱环境触发，0：不在该环境执行；1：在该环境执行，默认为0',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'Namespace' => [
                                                    'description' => '命名空间，如：syncstore的namespace',
                                                    'type' => 'string',
                                                    'example' => 'f323baa35c304751a4b1254adc8230bf',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '修改时间，精确到毫秒的Unix时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1535873636000',
                                                ],
                                                'Source' => [
                                                    'description' => '触发器触发的事件标识，如：syncstore路径',
                                                    'type' => 'string',
                                                    'example' => '/',
                                                ],
                                                'ChainedFunctionIds' => [
                                                    'description' => '链式函数ID，多个以英文逗号”,“分隔，分别对应Functions数组的每一项',
                                                    'type' => 'string',
                                                    'example' => '/',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间，精确到毫秒的Unix时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1535873636000',
                                                ],
                                                'InvocationMode' => [
                                                    'description' => '调用模式，0：串行（同步）调用；1：并行（异步）调用',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Id' => [
                                                    'description' => '触发器ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"TriggerList\\": {\\n    \\"Triggers\\": [\\n      {\\n        \\"Status\\": 2,\\n        \\"Type\\": 0,\\n        \\"Production\\": 1,\\n        \\"ChainedFunctionIds\\": \\"/\\",\\n        \\"GmtCreate\\": 1535873636000,\\n        \\"Sandbox\\": 1,\\n        \\"Namespace\\": \\"f323baa35c304751a4b1254adc8230bf\\",\\n        \\"GmtModified\\": 1535873636000,\\n        \\"Source\\": \\"/\\",\\n        \\"InvocationMode\\": 0,\\n        \\"Id\\": 1,\\n        \\"Functions\\": [\\n          {\\n            \\"GmtCreate\\": 1535872636000,\\n            \\"FileName\\": \\"hello.zip\\",\\n            \\"Name\\": \\"someFunc\\",\\n            \\"GmtModified\\": 1535872636000,\\n            \\"Id\\": 1,\\n            \\"FileId\\": 1\\n          }\\n        ]\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"TotalPageCount\\": 2,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 11\\n    }\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListTriggersResponse>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n\\t<TriggerList>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<PageSize>10</PageSize>\\r\\n\\t\\t\\t<TotalCount>2</TotalCount>\\r\\n\\t\\t\\t<TotalPageCount>1</TotalPageCount>\\r\\n\\t\\t</Pagination>\\r\\n\\t\\t<Triggers>\\r\\n\\t\\t\\t<Functions>\\r\\n\\t\\t\\t\\t<FileId>46</FileId>\\r\\n\\t\\t\\t\\t<FileName>hello.zip</FileName>\\r\\n\\t\\t\\t\\t<GmtCreate>1536201206000</GmtCreate>\\r\\n\\t\\t\\t\\t<GmtModified>1536201206000</GmtModified>\\r\\n\\t\\t\\t\\t<Id>36</Id>\\r\\n\\t\\t\\t\\t<Name>someFunc</Name>\\r\\n\\t\\t\\t</Functions>\\r\\n\\t\\t\\t<GmtCreate>1537154684000</GmtCreate>\\r\\n\\t\\t\\t<GmtModified>1537154684000</GmtModified>\\r\\n\\t\\t\\t<Id>2533</Id>\\r\\n\\t\\t\\t<InvocationMode>0</InvocationMode>\\r\\n\\t\\t\\t<Namespace>f323baa35c304751a4b1254adc8230bf</Namespace>\\r\\n\\t\\t\\t<Production>1</Production>\\r\\n\\t\\t\\t<Sandbox>1</Sandbox>\\r\\n\\t\\t\\t<Source>/</Source>\\r\\n\\t\\t\\t<Status>2</Status>\\r\\n\\t\\t\\t<Type>0</Type>\\r\\n\\t\\t</Triggers>\\r\\n\\t</TriggerList>\\r\\n</ListTriggersResponse>","errorExample":""}]',
            'title' => '按分页列出触发器',
            'summary' => '调用ListTriggers列出触发器，支持分页。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddVersionGroupDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'DeviceIdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID类型。支持：'."\n"
                            ."\n"
                            .'- **device_id**：硬件ID'."\n"
                            .'- **sn**：序列号'."\n"
                            .'- **vin**：车架号'."\n"
                            .'- **hardware_id**：硬件ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sn',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'DeviceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云设备ID列表',
                        'type' => 'string',
                        'required' => true,
                        'example' => '"b8fe2e24ff2b48e0a3aa4e49809fc1b3","b8f12e24ff2b48e0a3aa4e49809fc1b3"',
                    ],
                ],
                [
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试设备分组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<AddVersionGroupDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</AddVersionGroupDevicesResponse>","errorExample":""}]',
            'title' => '批量添加设备到测试设备分组中',
            'summary' => '通过云设备ID批量添加一个或多个设备到测试设备分组中。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddVersionWhiteDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'DeviceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID列表，英文逗号分割。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11,22,33',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，支持：'."\n"
                            ."\n"
                            .'- **FOTA**：系统升级'."\n"
                            .'- **APP**：应用升级',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'DeviceIdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID类型，支持：'."\n"
                            ."\n"
                            .'- **device_id**：硬件ID'."\n"
                            .'- **sn**：序列号'."\n"
                            .'- **vin**：车架号'."\n"
                            .'- **hardware_id**：硬件ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hardware_id',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<AddVersionWhiteDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</AddVersionWhiteDevicesResponse>","errorExample":""}]',
            'title' => '添加系统版本或应用版本的设备白名单',
            'summary' => '调用AddVersionWhiteDevices添加系统版本或应用版本的设备白名单。',
            'description' => '> 当希望添加版本的设备白名单时，可以调用此接口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddVersionWhiteDevicesByDeviceGroups' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'UEWE232',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'GroupIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备分组ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12323',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"success\\",\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\n<Data>success</Data>","errorExample":""}]',
            'title' => '将分组中的设备添加为版本黑白名单设备',
            'summary' => '通过设备分组将分组中的设备添加为版本黑白名单设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateDeviceBrand' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'BrandName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '品牌名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TmallGenius',
                    ],
                ],
                [
                    'name' => 'Manufacture',
                    'in' => 'query',
                    'schema' => [
                        'description' => '厂商名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Alibaba',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '品牌描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '天猫精灵',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'BrandId' => [
                                'description' => '新增的品牌ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"BrandId\\": 1,\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<CreateDeviceBrandResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<BrandId>1</BrandId>\\r\\n</CreateDeviceBrandResponse>","errorExample":""}]',
            'title' => '创建设备品牌',
            'summary' => '调用CreateDeviceBrand创建设备品牌。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateDeviceModel' => [
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
                    'name' => 'InitUsageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备出厂使用性质。'."\n"
                            ."\n"
                            .'- **0**：私人设备;'."\n"
                            .'- **1**：运营或共享设备',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'CanCreateDeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许该型号创建设备ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ModelName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'X1',
                    ],
                ],
                [
                    'name' => 'HardwareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID生成依据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sn',
                    ],
                ],
                [
                    'name' => 'BrandName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '品牌名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TmallGenius',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '型号描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '天猫精灵X1',
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '智能音箱',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'SecurityChip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用芯片ID2认证加固。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'OsPlatform',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统平台。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'android',
                    ],
                ],
                [
                    'name' => 'ObjectKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS存储的key。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1151125281886341/375KZRO8TARYBQY7P0E4/2019-04-12/1555062240807.jpg',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'device',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'DeviceModelId' => [
                                'description' => '新增设备型号ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DeviceModelId\\": 10,\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<CreateDeviceModelResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<DeviceModelId>10</DeviceModelId>\\r\\n</CreateDeviceModelResponse>","errorExample":""}]',
            'title' => '创建一个新的设备型号',
            'summary' => '调用CreateDeviceModel创建一个新的设备型号。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateVersionDeviceGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'MaxCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备分组允许最大设备数',
                        'type' => 'string',
                        'required' => true,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组名',
                        'type' => 'string',
                        'required' => true,
                        'example' => '升级分组1',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试分组',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'DeviceGroupId' => [
                                'description' => '创建的测试设备分组ID',
                                'type' => 'string',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DeviceGroupId\\": \\"1\\",\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<CreateVersionDeviceGroupResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<DeviceGroupId>1</DeviceGroupId>\\r\\n</CreateVersionDeviceGroupResponse>","errorExample":""}]',
            'title' => '创建一个用于测试的设备分组',
            'summary' => '调用CreateVersionDeviceGroup创建一个用于测试的设备分组。',
            'description' => '测试设备分组用于进行系统或应用版本的测试。创建测试设备分组后，在创建版本的测试时，选择该分组，会自动向分组中设备推送待测试版本的升级信息。'."\n"
                ."\n"
                .'> 因为版本会关联机型，因此测试设备分组中的设备的机型需和待测试版本上配置的机型相同才可升级待测试版本，否则测试无效。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteAllVersionGroupDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试设备分组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DeleteAllVersionGroupDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteAllVersionGroupDevicesResponse>","errorExample":""}]',
            'title' => '删除测试设备分组中的所有设备',
            'summary' => '调用DeleteAllVersionGroupDevices删除测试设备分组中的所有设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteDevice' => [
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
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID'."\n",
                                'type' => 'string',
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<DeleteDeviceResponse>\\r\\n<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n</DeleteDeviceResponse>","errorExample":""}]',
            'title' => '删除设备信息',
            'summary' => '调用DeleteDevice删除设备信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVersionAllBlackDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型。支持：'."\n"
                            ."\n"
                            .'- **FOTA**：系统升级'."\n"
                            .'- **APP**：应用升级',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DeleteVersionAllBlackDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteVersionAllBlackDevicesResponse>","errorExample":""}]',
            'title' => '删除所有黑名单设备',
            'summary' => '删除系统版本或应用版本下的所有黑名单设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVersionAllWhiteDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型。支持：'."\n"
                            ."\n"
                            .'- **FOTA**：系统升级'."\n"
                            .'- **APP**：应用升级',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DeleteVersionAllWhiteDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteVersionAllWhiteDevicesResponse>","errorExample":""}]',
            'title' => '删除所有设备白名单',
            'summary' => '删除系统版本或应用版本下的所有设备白名单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVersionDeviceGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DeleteVersionDeviceGroupResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteVersionDeviceGroupResponse>","errorExample":""}]',
            'title' => '删除一个测试设备分组',
            'summary' => '调用DeleteVersionDeviceGroup删除一个测试设备分组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVersionGroupDevice' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DeviceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原始设备ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b8fe2e24ff2b48e0a3aa4e49809fc1b3',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备所属测试设备分组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DeviceIdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于判断的DeviceIds的类型，取值有：**device_id**，**sn**，**vin**，**hardware_id**，**uuid**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'device_id',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DeleteVersionGroupDeviceResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteVersionGroupDeviceResponse>","errorExample":""}]',
            'title' => '从测试设备分组中删除一个特定设备',
            'summary' => '调用DeleteVersionGroupDevice从测试设备分组中删除一个特定设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVersionGroupDeviceById' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备分组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'Ids',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组下设备记录的ID列表，英文逗号分割。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11,22,33',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DeleteVersionGroupDeviceByIdRespone>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</DeleteVersionGroupDeviceByIdRespone>","errorExample":""}]',
            'title' => '根据ID删除测试分组设备',
            'summary' => '调用DeleteVersionGroupDeviceById根据ID删除测试分组设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateDeviceModel' => [
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
                    'name' => 'InitUsageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备出厂使用性质。'."\n"
                            ."\n"
                            .'0表示私人设备，1表示运营或共享设备。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'ModelName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'X2',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'BrandName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '品牌名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ROEWE',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '型号描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '荣威 RX5',
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'car_auto',
                    ],
                ],
                [
                    'name' => 'CanCreateDeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许该型号创建设备ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'HardwareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '硬件类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hardware_id',
                    ],
                ],
                [
                    'name' => 'SecurityChip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用芯片ID2认证加固。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'OsPlatform',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统平台。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'android',
                    ],
                ],
                [
                    'name' => 'ObjectKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS存储的key。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1151125281886341/375KZRO8TARYBQY7P0E4/2019-04-12/1555062240807.jpg',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'device',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<UpdateDeviceModelResponse>\\r\\n<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n</UpdateDeviceModelResponse>","errorExample":""}]',
            'title' => '修改设备型号信息',
            'summary' => '调用UpdateDeviceModel修改设备型号信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateVersionDeviceGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组名',
                        'type' => 'string',
                        'required' => true,
                        'example' => '测试分组-2',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试描述',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试设备分组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<UpdateVersionDeviceGroupResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateVersionDeviceGroupResponse>","errorExample":""}]',
            'title' => '更新测试设备分组',
            'summary' => '调用UpdateVersionDeviceGroup更新测试设备分组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateApiGatewayAppStatus' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PPCVFRG7',
                    ],
                ],
                [
                    'name' => 'GatewayAppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关应用AppId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5929076',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态，0-正常，1-禁用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NotFoundProject\\",\\n  \\"Message\\": \\"Cannot find the specified project\\"\\n}"},{"type":"xml","example":"<UpdateApiGatewayAppStatusResponse>\\r\\n<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateApiGatewayAppStatusResponse>","errorExample":""}]',
            'title' => '修改项目关联的网关 APP 状态',
            'summary' => '调用UpdateApiGatewayAppStatus修改项目关联的网关app状态。',
            'description' => '> 禁用状态下，客户端无法调用IoVCC通过API网关暴露的接口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateProject' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目描述',
                        'type' => 'string',
                        'required' => true,
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NotFoundProject\\",\\n  \\"Message\\": \\"Cannot find the specified project\\"\\n}"},{"type":"xml","example":"<UpdateProjectResponse>\\r\\n<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateProjectResponse>","errorExample":""}]',
            'title' => '修改项目基本信息',
            'summary' => '调用UpdateProject修改项目基本信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDeviceModel' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号ID。'."\n"
                            ."\n"
                            .'和**DeviceModel**不能同时为空。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号名。'."\n"
                            ."\n"
                            .'和**DeviceModelId**不能同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'X1',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DeviceModel' => [
                                'description' => '返回内容。',
                                'type' => 'object',
                                'properties' => [
                                    'DeviceModelId' => [
                                        'description' => '型号ID'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'HardwareType' => [
                                        'description' => '设备ID生成依据'."\n",
                                        'type' => 'string',
                                        'example' => 'sn',
                                    ],
                                    'DeviceName' => [
                                        'description' => '设备名称',
                                        'type' => 'string',
                                        'example' => 'device',
                                    ],
                                    'DeviceType' => [
                                        'description' => '设备类型'."\n",
                                        'type' => 'string',
                                        'example' => '智能家居',
                                    ],
                                    'CanCreateDeviceId' => [
                                        'description' => '是否可生成设备ID'."\n",
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'ProjectId' => [
                                        'description' => '项目ID'."\n",
                                        'type' => 'string',
                                        'example' => 'projectTest',
                                    ],
                                    'OsPlatform' => [
                                        'description' => '系统平台',
                                        'type' => 'string',
                                        'example' => 'android',
                                    ],
                                    'DeviceModel' => [
                                        'description' => '设备型号名称'."\n",
                                        'type' => 'string',
                                        'example' => 'ROEWE RX5',
                                    ],
                                    'SecurityChip' => [
                                        'description' => '是否启用芯片ID2认证加固',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'DeviceLogoUrl' => [
                                        'description' => '设备LogoURL',
                                        'type' => 'string',
                                        'example' => 'http://dis-cdn.aicc.aliyun.com/1151125281886341/375KZRO8TARYBQY7P0E4/2019-04-12/1555062240807.jpg',
                                    ],
                                    'Description' => [
                                        'description' => '设备型号描述'."\n",
                                        'type' => 'string',
                                        'example' => '荣威RX5',
                                    ],
                                    'ObjectKey' => [
                                        'description' => 'OSS存储的key',
                                        'type' => 'string',
                                        'example' => '1151125281886341/375KZRO8TARYBQY7P0E4/2019-04-12/1555062240807.jpg',
                                    ],
                                    'InitUsageTypeDesc' => [
                                        'description' => '设备使用性质描述。'."\n"
                                            ."\n"
                                            .'0表示私人设备，1表示运营或共享设备。'."\n",
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'InitUsageType' => [
                                        'description' => '设备使用性质。'."\n"
                                            ."\n"
                                            .'0表示private，1表示business。默认为**0**。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'DeviceBrand' => [
                                        'description' => '设备品牌名称'."\n",
                                        'type' => 'string',
                                        'example' => 'ROEWE',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"DeviceModel\\": {\\n    \\"DeviceModelId\\": 10,\\n    \\"HardwareType\\": \\"sn\\",\\n    \\"DeviceName\\": \\"device\\",\\n    \\"DeviceType\\": \\"智能家居\\",\\n    \\"CanCreateDeviceId\\": 1,\\n    \\"ProjectId\\": \\"projectTest\\",\\n    \\"OsPlatform\\": \\"android\\",\\n    \\"DeviceModel\\": \\"ROEWE RX5\\",\\n    \\"SecurityChip\\": \\"0\\",\\n    \\"DeviceLogoUrl\\": \\"http://dis-cdn.aicc.aliyun.com/1151125281886341/375KZRO8TARYBQY7P0E4/2019-04-12/1555062240807.jpg\\",\\n    \\"Description\\": \\"荣威RX5\\",\\n    \\"ObjectKey\\": \\"1151125281886341/375KZRO8TARYBQY7P0E4/2019-04-12/1555062240807.jpg\\",\\n    \\"InitUsageTypeDesc\\": \\"0\\",\\n    \\"InitUsageType\\": 0,\\n    \\"DeviceBrand\\": \\"ROEWE\\"\\n  }\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<DescribeDeviceModelResponse>\\r\\n\\t<DeviceModel>\\r\\n\\t\\t<CanCreateDeviceId>1</CanCreateDeviceId>\\r\\n\\t\\t<Description>荣威 RX5</Description>\\r\\n\\t\\t<DeviceBrand>ROEWE</DeviceBrand>\\r\\n\\t\\t<DeviceModelId>10</DeviceModelId>\\r\\n\\t\\t<DeviceType>car_auto</DeviceType>\\r\\n\\t\\t<HardwareType>sn</HardwareType>\\r\\n\\t\\t<InitUsageType>0</InitUsageType>\\r\\n\\t\\t<InitUsageTypeDesc>private</InitUsageTypeDesc>\\r\\n\\t\\t<ProjectId>projectTest</ProjectId>\\r\\n        <DeviceName>device</DeviceName>\\r\\n        <ObjectKey>1151125281886341/375KZRO8TARYBQY7P0E4/2019-04-12/1555062240807.jpg</ObjectKey>\\r\\n        <OsPlatform>android</OsPlatform>\\r\\n        <SecurityChip>0</SecurityChip>\\r\\n\\t</DeviceModel>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n</DescribeDeviceModelResponse>","errorExample":""}]',
            'title' => '获取设备型号信息',
            'summary' => '根据型号名或型号ID，获取设备型号信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDeviceOnlineInfo' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sghghshr',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询条件类型。取值：'."\n"
                            ."\n"
                            .'- deviceToken'."\n"
                            .'- deviceId'."\n"
                            .'- iasToken'."\n"
                            .'- iasId',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'deviceId',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询对象。'."\n"
                            ."\n"
                            .'表示查询条件类型的对应值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c86b36f1d19c488f9ae3798f332b9fd5',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Devices' => [
                                'description' => '设备在线详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LoginTime' => [
                                            'description' => '最近联网时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1525701500000',
                                        ],
                                        'DeviceId' => [
                                            'description' => 'dis系统设备ID',
                                            'type' => 'string',
                                            'example' => 'fc71429ddd9b473c81d7ef5f33ab10cc',
                                        ],
                                        'Online' => [
                                            'description' => '设备是否在线。'."\n"
                                                ."\n"
                                                .'1表示在线，0表示不在线，-1表示设备不存在。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ProjectId' => [
                                            'description' => 'iovcc项目工程ID',
                                            'type' => 'string',
                                            'example' => 'gsgshhfs',
                                        ],
                                        'IasId' => [
                                            'description' => 'ias系统账号ID',
                                            'type' => 'string',
                                            'example' => '123xxxxxxxxxxx',
                                        ],
                                        'SystemVersion' => [
                                            'description' => '系统版本',
                                            'type' => 'string',
                                            'example' => '5.3.0',
                                        ],
                                        'Terminal' => [
                                            'description' => '设备机型',
                                            'type' => 'string',
                                            'example' => 'iphone7',
                                        ],
                                        'ClientVersion' => [
                                            'description' => 'cmns客户端版本',
                                            'type' => 'string',
                                            'example' => '2.1.0.1.20170327',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"Devices\\": [\\n    {\\n      \\"LoginTime\\": 1525701500000,\\n      \\"DeviceId\\": \\"fc71429ddd9b473c81d7ef5f33ab10cc\\",\\n      \\"Online\\": 1,\\n      \\"ProjectId\\": \\"gsgshhfs\\",\\n      \\"IasId\\": \\"123xxxxxxxxxxx\\",\\n      \\"SystemVersion\\": \\"5.3.0\\",\\n      \\"Terminal\\": \\"iphone7\\",\\n      \\"ClientVersion\\": \\"2.1.0.1.20170327\\"\\n    }\\n  ]\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The Type  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<DescribeDeviceOnlineInfoResponse>\\r\\n\\t<Devices>\\r\\n\\t\\t<DeviceId>6c845cc9c4fe11138aff5be5e0aeebjj</DeviceId>\\r\\n\\t\\t<Terminal>iphone8</Terminal>\\r\\n\\t\\t<IasId></IasId>\\r\\n\\t\\t<ProjectId>PYNNN9KS</ProjectId>\\r\\n\\t\\t<ClientVersion>2.3.0.4.20170217</ClientVersion>\\r\\n\\t\\t<SystemVersion>1.0.1-E-20180330.1343</SystemVersion>\\r\\n\\t\\t<Online>0</Online>\\r\\n\\t\\t<LoginTime>1523452482291</LoginTime>\\r\\n\\t</Devices>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</DescribeDeviceOnlineInfoResponse>","errorExample":""}]',
            'title' => '查询设备在线详情',
            'summary' => '根据设备或者账号ID(token)查询设备在线详情。',
            'description' => '> 当指定deviceId或者deviceToken时，可判断具体设备是否在线。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDeviceShadow' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PIC3UA0V',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1ac5e182e9634252a02d442a4d5d16fc',
                    ],
                ],
                [
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '机型名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'model_2nd',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要获取的路径',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/',
                    ],
                ],
                [
                    'name' => 'ViewSubscribed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只查看订阅的信息',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'DeviceShadow' => [
                                'description' => '设备影子信息',
                                'type' => 'object',
                                'properties' => [
                                    'DeviceShadow' => [
                                        'description' => '设备其它信息',
                                        'type' => 'string',
                                        'example' => '[{\\"id\\":10102,\\"name\\":\\"车门:车门\\",\\"open\\":true,\\"pId\\":101,\\"path\\":\\"/车身与HVAC/车门/车门\\"},{\\"id\\":10101,\\"name\\":\\"锁止状态:1\\",\\"open\\":true,\\"pId\\":101,\\"path\\":\\"/车身与HVAC/车门/锁止状态\\"}]',
                                    ],
                                    'DeviceInfo' => [
                                        'description' => '设备信息',
                                        'type' => 'string',
                                        'example' => '{\\"schema版本\\":\\"1.0\\",\\"uuid\\":\\"002\\",\\"制造商\\":\\"0110446as34\\",\\"对内型号\\":\\"test_model_product\\",\\"对外型号\\":\\"test_model\\",\\"插件版本号\\":{\\"插件版本号\\":\\"1.0\\",\\"远程控制\\":\\"1.0\\",\\"远程诊断\\":\\"1.0\\"},\\"数据更新时间\\":\\"2018-09-14 22:00:01\\",\\"最近登录账号ID\\":\\"4***********\\",\\"系统版本号\\":\\"1.0.0\\",\\"设备品牌\\":\\"003\\",\\"设备描述\\":\\"sample desc1\\",\\"车架号\\":\\"001\\"}',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"DeviceShadow\\": {\\n    \\"DeviceShadow\\": \\"[{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\":10102,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"车门:车门\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"open\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"pId\\\\\\\\\\\\\\":101,\\\\\\\\\\\\\\"path\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/车身与HVAC/车门/车门\\\\\\\\\\\\\\"},{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\":10101,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"锁止状态:1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"open\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"pId\\\\\\\\\\\\\\":101,\\\\\\\\\\\\\\"path\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"/车身与HVAC/车门/锁止状态\\\\\\\\\\\\\\"}]\\",\\n    \\"DeviceInfo\\": \\"{\\\\\\\\\\\\\\"schema版本\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"uuid\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"002\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"制造商\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0110446as34\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"对内型号\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test_model_product\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"对外型号\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test_model\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"插件版本号\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"插件版本号\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"远程控制\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"远程诊断\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"数据更新时间\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2018-09-14 22:00:01\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"最近登录账号ID\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"4***********\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"系统版本号\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0.0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"设备品牌\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"003\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"设备描述\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"sample desc1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"车架号\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"001\\\\\\\\\\\\\\"}\\"\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<DeviceShadow>\\n    <DeviceInfo>{\\"车架号\\":\\"001\\",\\"对外型号\\":\\"test_model\\",\\"最近登录账号ID\\":\\"439********\\",\\"对内型号\\":\\"test_model_product\\",\\"系统版本号\\":\\"1.0.0\\",\\"数据更新时间\\":\\"2018-09-14 21:49:29\\",\\"制造商\\":\\"0110446as34\\",\\"设备描述\\":\\"sample desc1\\",\\"设备品牌\\":\\"003\\",\\"插件版本号\\":{\\"远程诊断\\":\\"1.0\\",\\"远程控制\\":\\"1.0\\",\\"插件版本号\\":\\"1.0\\"},\\"uuid\\":\\"002\\",\\"schema版本\\":\\"1.0\\"}</DeviceInfo>\\n    <DeviceShadow>[{\\"path\\":\\"/车身与HVAC/车门/引擎盖状态\\",\\"name\\":\\"引擎盖状态:3\\",\\"pId\\":101,\\"id\\":10103,\\"open\\":true},{\\"path\\":\\"/车身与HVAC/车门/车门\\",\\"name\\":\\"车门:车门\\",\\"pId\\":101,\\"id\\":10102,\\"open\\":true},{\\"path\\":\\"/车身与HVAC/车门/锁止状态\\",\\"name\\":\\"锁止状态:1\\",\\"pId\\":101,\\"id\\":10101,\\"open\\":true}]</DeviceShadow>\\n</DeviceShadow>\\n<RequestId>40FE5EA3-F4D3-4D4B-99BD-2F5B7B90DE7E</RequestId>","errorExample":""}]',
            'title' => '获取设备影子信息',
            'summary' => '调用DescribeDeviceShadow获取设备影子信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeVersionDeviceGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'DeviceGroup' => [
                                'description' => '分组详情',
                                'type' => 'object',
                                'properties' => [
                                    'GmtModify' => [
                                        'description' => '修改时间',
                                        'type' => 'string',
                                        'example' => '2018-01-01 00:01:00',
                                    ],
                                    'Description' => [
                                        'description' => '分组描述',
                                        'type' => 'string',
                                        'example' => '测试',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2018-01-01 00:00:00',
                                    ],
                                    'Name' => [
                                        'description' => '分组名',
                                        'type' => 'string',
                                        'example' => '升级分组',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'MaxCount' => [
                                        'description' => '设备分组的最大设备数',
                                        'type' => 'string',
                                        'example' => '100',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"DeviceGroup\\": {\\n    \\"GmtModify\\": \\"2018-01-01 00:01:00\\",\\n    \\"Description\\": \\"测试\\",\\n    \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n    \\"Name\\": \\"升级分组\\",\\n    \\"Id\\": 1,\\n    \\"MaxCount\\": \\"100\\"\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<DescribeVersionDeviceGroupResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<DeviceGroup>\\r\\n\\t\\t<Id>1</Id>\\r\\n\\t\\t<Name>升级分组</Name>\\r\\n\\t\\t<Description>测试</Description>\\r\\n\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t<GmtModify>2018-01-01 00:01:00</GmtModify>\\r\\n\\t</DeviceGroup>\\r\\n</DescribeVersionDeviceGroupResponse>","errorExample":""}]',
            'title' => '获取一个测试设备分组的详情',
            'summary' => '调用DescribeVersionDeviceGroup获取一个测试设备分组的详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryPrepublishPassedDeviceCount' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'PrepublishId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预发布ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'Count' => [
                                'description' => '预发布的已查询设备数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1000',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Count\\": 1000,\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<QueryPrepublishPassedDeviceCountResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<Count>1000</Count>\\r\\n</QueryPrepublishPassedDeviceCountResponse>","errorExample":""}]',
            'title' => '查询指定预发布的已查询设备数',
            'summary' => '调用QueryPrepublishPassedDeviceCount查询指定预发布的已查询设备数，已查询设备会根据其云设备ID进行去重。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListVersionDeviceGroups' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'DeviceGroupList' => [
                                'description' => '结果列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'GmtModify' => [
                                            'description' => '修改时间',
                                            'type' => 'string',
                                            'example' => '2018-01-01 00:01:00',
                                        ],
                                        'Description' => [
                                            'description' => '分组描述',
                                            'type' => 'string',
                                            'example' => '测试',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2018-01-01 00:00:00',
                                        ],
                                        'Name' => [
                                            'description' => '分组名',
                                            'type' => 'string',
                                            'example' => '升级分组',
                                        ],
                                        'Id' => [
                                            'description' => 'ID',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"DeviceGroupList\\": [\\n    {\\n      \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n      \\"GmtModify\\": \\"2018-01-01 00:01:00\\",\\n      \\"Description\\": \\"测试\\",\\n      \\"Name\\": \\"升级分组\\",\\n      \\"Id\\": \\"1\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<ListVersionDeviceGroupsResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<DeviceGroupList>\\r\\n\\t\\t<Id>1</Id>\\r\\n\\t\\t<Name>升级分组</Name>\\r\\n\\t\\t<Description>测试</Description>\\r\\n\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t<GmtModify>2018-01-01 00:01:00</GmtModify>\\r\\n\\t</DeviceGroupList>\\r\\n</ListVersionDeviceGroupsResponse>","errorExample":""}]',
            'title' => '列出项目下的所有测试设备分组信息',
            'summary' => '调用ListVersionDeviceGroups列出项目下的所有测试设备分组信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAssistDevices' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PZ1HK7JZ',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询条件',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"vin":"LVFAG7A31HK000029"}',
                    ],
                ],
                [
                    'name' => 'PerPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页个数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '35',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'PerPage' => [
                                'description' => '每页数目',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'PageIndex' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Devices' => [
                                'description' => '设备列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SerialNumber' => [
                                            'description' => '序列号',
                                            'type' => 'string',
                                            'example' => 'DX3JNY1FDTD2',
                                        ],
                                        'HardwareId' => [
                                            'description' => '硬件ID',
                                            'type' => 'string',
                                            'example' => 'BALFL8429HI',
                                        ],
                                        'DeviceName' => [
                                            'description' => '设备名称',
                                            'type' => 'string',
                                            'example' => 'Model S',
                                        ],
                                        'AccessTime' => [
                                            'description' => '设备访问时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1525767660000',
                                        ],
                                        'DeviceId' => [
                                            'description' => '设备ID',
                                            'type' => 'string',
                                            'example' => '6fde56979c484b93b99fba257e3cbe83',
                                        ],
                                        'UUID' => [
                                            'description' => 'AliOS设备UUID',
                                            'type' => 'string',
                                            'example' => '842972B2C0F4C9F030E60769CA65806A',
                                        ],
                                        'VIN' => [
                                            'description' => '车架码',
                                            'type' => 'string',
                                            'example' => 'LVFAG7A31HK000029',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageIndex\\": 1,\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"TotalCount\\": 35,\\n  \\"PerPage\\": 20,\\n  \\"Devices\\": [\\n    {\\n      \\"SerialNumber\\": \\"DX3JNY1FDTD2\\",\\n      \\"HardwareId\\": \\"BALFL8429HI\\",\\n      \\"DeviceName\\": \\"Model S\\",\\n      \\"AccessTime\\": 1525767660000,\\n      \\"DeviceId\\": \\"6fde56979c484b93b99fba257e3cbe83\\",\\n      \\"UUID\\": \\"842972B2C0F4C9F030E60769CA65806A\\",\\n      \\"VIN\\": \\"LVFAG7A31HK000029\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<ListAssistDevicesResponse>\\r\\n\\t<RequestId>6F0A833B-7A86-4D92-A083-C184041E2F2D</RequestId>\\r\\n\\t<PageIndex>1</PageIndex>\\r\\n\\t<PerPage>20</PerPage>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<DeviceList>\\r\\n\\t\\t<DeviceId>37aac8e7d96c42ea94fd5408e351474e</DeviceId>\\r\\n\\t\\t<DeviceName>Model S</DeviceName>\\r\\n\\t\\t<AccessTime>1525767660000</AccessTime>\\r\\n\\t\\t<VIN>LVFAG7A31HK000029</VIN>\\r\\n\\t\\t<SerialNumber>DX3JNY1FDTD2</SerialNumber>\\r\\n\\t</DeviceList>\\r\\n</ListAssistDevicesResponse>","errorExample":""}]',
            'title' => '获取连接远程诊断的设备列表',
            'summary' => '调用ListAssistDevices获取连接远程诊断的设备列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListConnectLogs' => [
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
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询每页数据集大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fgsggsgg',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'dis系统设备ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fc35429dff9b473c81d7ef5f62ab11dc',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询日志起始时间，精确到秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1525684245',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询日志截止时间，精确到秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1525694245',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n",
                                'type' => 'string',
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Logs' => [
                                'description' => '返回日志分页列表对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页对象。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '分页页码。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TotalPageCount' => [
                                                'description' => '总分页数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'PageSize' => [
                                                'description' => '分页每页数据集大小。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                            'TotalCount' => [
                                                'description' => '数据集总数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '30',
                                            ],
                                        ],
                                    ],
                                    'List' => [
                                        'description' => '日志列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Sid' => [
                                                    'description' => '长连接的sessionid。',
                                                    'type' => 'string',
                                                    'example' => 'rkp_u-sTz_1_29473_1525516404577',
                                                ],
                                                'Status' => [
                                                    'description' => '连接状态。',
                                                    'type' => 'string',
                                                    'example' => '断开',
                                                ],
                                                'Time' => [
                                                    'description' => '日志时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1525517083249',
                                                ],
                                                'DeviceId' => [
                                                    'description' => 'dis系统设备ID。',
                                                    'type' => 'string',
                                                    'example' => 'fc71429ddd9b473c81d7ef5f44ab10cc',
                                                ],
                                                'SystemVersion' => [
                                                    'description' => '设备系统版本。',
                                                    'type' => 'string',
                                                    'example' => '4.4.4',
                                                ],
                                                'Ip' => [
                                                    'description' => '设备Ip。',
                                                    'type' => 'string',
                                                    'example' => '220.180.xx.xxx',
                                                ],
                                                'NetWorking' => [
                                                    'description' => '网络类型，比如EDGE、LTE、WIFI等。',
                                                    'type' => 'string',
                                                    'example' => 'EDGE',
                                                ],
                                                'Terminal' => [
                                                    'description' => '设备机型。',
                                                    'type' => 'string',
                                                    'example' => 'iphone7',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"Logs\\": {\\n    \\"List\\": [\\n      {\\n        \\"Sid\\": \\"rkp_u-sTz_1_29473_1525516404577\\",\\n        \\"Status\\": \\"断开\\",\\n        \\"Time\\": 1525517083249,\\n        \\"DeviceId\\": \\"fc71429ddd9b473c81d7ef5f44ab10cc\\",\\n        \\"SystemVersion\\": \\"4.4.4\\",\\n        \\"Ip\\": \\"220.180.xx.xxx\\",\\n        \\"NetWorking\\": \\"EDGE\\",\\n        \\"Terminal\\": \\"iphone7\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"TotalPageCount\\": 2,\\n      \\"PageSize\\": 20,\\n      \\"TotalCount\\": 30\\n    }\\n  }\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The DeviceId  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<ListConnectLogsResponse>\\r\\n\\t<Logs>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<TotalCount>10</TotalCount>\\r\\n\\t\\t\\t<TotalPageCount>1</TotalPageCount>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<PageSize>20</PageSize>\\r\\n\\t\\t</Pagination>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<DeviceId>3583820a2cf941a8810b3e0a2435b13d</DeviceId>\\r\\n\\t\\t\\t<SystemVersion>4.4.4</SystemVersion>\\r\\n\\t\\t\\t<Terminal>MuMu</Terminal>\\r\\n\\t\\t\\t<Ip>::ffff:112.10.xx.xx</Ip>\\r\\n\\t\\t\\t<NetWorking>wifi</NetWorking>\\r\\n\\t\\t\\t<Time>1525517083250</Time>\\r\\n\\t\\t\\t<Status>连接</Status>\\r\\n\\t\\t\\t<Sid>Hymmibopf_1_29473_1525517083243</Sid>\\r\\n\\t\\t</List>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<DeviceId />\\r\\n\\t\\t\\t<SystemVersion />\\r\\n\\t\\t\\t<Terminal />\\r\\n\\t\\t\\t<Ip />\\r\\n\\t\\t\\t<NetWorking />\\r\\n\\t\\t\\t<Time>1525517083249</Time>\\r\\n\\t\\t\\t<Status>断开</Status>\\r\\n\\t\\t\\t<Sid>rkp_u-sTz_1_29473_1525516404577</Sid>\\r\\n\\t\\t</List>\\r\\n\\t</Logs>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListConnectLogsResponse>","errorExample":""}]',
            'title' => '查询设备连接日志',
            'summary' => '根据设备ID、时间范围查询设备连接日志。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDeviceModels' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Length',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表最大长度',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号名，支持模糊查询',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'X1',
                    ],
                ],
                [
                    'name' => 'DeviceBrand',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备品牌',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TmallGenius',
                    ],
                ],
                [
                    'name' => 'Start',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表起始位置',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'DeviceBrandId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DeviceModels' => [
                                'description' => '查询结果列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceModelId' => [
                                            'description' => '型号ID'."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'HardwareType' => [
                                            'description' => '设备ID生成依据'."\n",
                                            'type' => 'string',
                                            'example' => 'sn',
                                        ],
                                        'DeviceName' => [
                                            'type' => 'string',
                                        ],
                                        'DeviceType' => [
                                            'description' => '设备类型'."\n",
                                            'type' => 'string',
                                            'example' => '智能家居',
                                        ],
                                        'CanCreateDeviceId' => [
                                            'description' => '是否可生成设备ID'."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID'."\n",
                                            'type' => 'string',
                                            'example' => 'projectTest',
                                        ],
                                        'OsPlatform' => [
                                            'type' => 'string',
                                        ],
                                        'DeviceModel' => [
                                            'description' => '设备型号'."\n",
                                            'type' => 'string',
                                            'example' => 'X1',
                                        ],
                                        'SecurityChip' => [
                                            'type' => 'string',
                                        ],
                                        'DeviceLogoUrl' => [
                                            'type' => 'string',
                                        ],
                                        'Description' => [
                                            'description' => '设备型号描述'."\n",
                                            'type' => 'string',
                                            'example' => '天猫精灵X1',
                                        ],
                                        'ObjectKey' => [
                                            'type' => 'string',
                                        ],
                                        'InitUsageTypeDesc' => [
                                            'description' => '表示设备使用性质的描述，0：表示私人设备；1：表示运营或共享设备；'."\n",
                                            'type' => 'string',
                                            'example' => '私人设备',
                                        ],
                                        'InitUsageType' => [
                                            'description' => '表示设备使用性质，0：表示私人设备；1：表示运营或共享设备；默认为0'."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'DeviceBrand' => [
                                            'description' => '设备品牌'."\n",
                                            'type' => 'string',
                                            'example' => 'TmallGenius',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"DeviceModels\\": [\\n    {\\n      \\"DeviceModelId\\": 10,\\n      \\"HardwareType\\": \\"sn\\",\\n      \\"Description\\": \\"天猫精灵X1\\",\\n      \\"DeviceType\\": \\"智能家居\\",\\n      \\"CanCreateDeviceId\\": 1,\\n      \\"ProjectId\\": \\"projectTest\\",\\n      \\"InitUsageTypeDesc\\": \\"私人设备\\",\\n      \\"InitUsageType\\": 0,\\n      \\"DeviceModel\\": \\"X1\\",\\n      \\"DeviceBrand\\": \\"TmallGenius\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"","errorExample":""}]',
            'title' => '查询设备型号列表',
            'summary' => '查询设备型号列表。',
            'description' => '查询设备型号列表',
        ],
        'ListDevices' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号ID'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号名，支持模糊查询',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ROEWE RX5	',
                    ],
                ],
                [
                    'name' => 'Start',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果列表起始位置',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Length',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果列表最大长度',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'Devices' => [
                                'description' => '返回内容'."\n",
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SerialNumber' => [
                                            'description' => '设备序列号'."\n",
                                            'type' => 'string',
                                            'example' => 'xxxxxxxx',
                                        ],
                                        'Status' => [
                                            'description' => '设备状态',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'DeviceModelId' => [
                                            'description' => '设备型号ID'."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'MacAddress' => [
                                            'description' => 'MAC地址'."\n",
                                            'type' => 'string',
                                            'example' => '00:00:00:00:00:00',
                                        ],
                                        'DeviceId' => [
                                            'description' => '设备ID'."\n",
                                            'type' => 'string',
                                            'example' => 'cn.1234567890',
                                        ],
                                        'DeviceType' => [
                                            'description' => '设备类型'."\n",
                                            'type' => 'string',
                                            'example' => 'car_auto	',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID'."\n",
                                            'type' => 'string',
                                            'example' => 'projectTest',
                                        ],
                                        'DeviceModel' => [
                                            'description' => '设备型号'."\n",
                                            'type' => 'string',
                                            'example' => 'ROEWE RX5	',
                                        ],
                                        'UsageType' => [
                                            'description' => '设备使用性质。'."\n"
                                                ."\n"
                                                .'0表示私人设备，1表示运营或共享设备。'."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Vin' => [
                                            'description' => '设备车架号（汽车相关产品使用）'."\n",
                                            'type' => 'string',
                                            'example' => 'xxxxxxxx',
                                        ],
                                        'UsageTypeDesc' => [
                                            'description' => '设备使用性质描述。'."\n"
                                                ."\n"
                                                .' **private**表示私人设备，**business**表示运营或共享设备。'."\n",
                                            'type' => 'string',
                                            'example' => 'private',
                                        ],
                                        'Uuid' => [
                                            'description' => '设备UUID'."\n",
                                            'type' => 'string',
                                            'example' => 'xxxxxxxx',
                                        ],
                                        'HardwareId' => [
                                            'description' => '硬件ID'."\n",
                                            'type' => 'string',
                                            'example' => 'xxxxxxxx',
                                        ],
                                        'Region' => [
                                            'description' => '设备所在国家代码'."\n",
                                            'type' => 'string',
                                            'example' => 'cn',
                                        ],
                                        'SoftwareId' => [
                                            'description' => '软件ID'."\n",
                                            'type' => 'string',
                                            'example' => 'xxxxxxxx',
                                        ],
                                        'Name' => [
                                            'description' => '设备昵称'."\n",
                                            'type' => 'string',
                                            'example' => '我的设备',
                                        ],
                                        'DeviceBrand' => [
                                            'description' => '设备品牌'."\n",
                                            'type' => 'string',
                                            'example' => 'ROEWE',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"Devices\\": [\\n    {\\n      \\"Status\\": \\"0\\",\\n      \\"SerialNumber\\": \\"xxxxxxxx\\",\\n      \\"DeviceModelId\\": 10,\\n      \\"MacAddress\\": \\"00:00:00:00:00:00\\",\\n      \\"DeviceType\\": \\"car_auto\\\\t\\",\\n      \\"DeviceId\\": \\"cn.1234567890\\",\\n      \\"ProjectId\\": \\"projectTest\\",\\n      \\"DeviceModel\\": \\"ROEWE RX5\\\\t\\",\\n      \\"Vin\\": \\"xxxxxxxx\\",\\n      \\"UsageType\\": 0,\\n      \\"UsageTypeDesc\\": \\"private\\",\\n      \\"Uuid\\": \\"xxxxxxxx\\",\\n      \\"HardwareId\\": \\"xxxxxxxx\\",\\n      \\"Region\\": \\"cn\\",\\n      \\"SoftwareId\\": \\"xxxxxxxx\\",\\n      \\"Name\\": \\"我的设备\\",\\n      \\"DeviceBrand\\": \\"ROEWE\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<ListDevicesResponse>\\r\\n\\t<Devices>\\r\\n\\t\\t<DeviceBrand>ROEWE</DeviceBrand>\\r\\n\\t\\t<DeviceId>cn.1234567890</DeviceId>\\r\\n\\t\\t<DeviceModel>ROEWE RX5</DeviceModel>\\r\\n\\t\\t<DeviceModelId>10</DeviceModelId>\\r\\n\\t\\t<DeviceType>car_auto</DeviceType>\\r\\n\\t\\t<HardwareId>xxxxxxx</HardwareId>\\r\\n\\t\\t<MacAddress>00:00:00:00:00:00</MacAddress>\\r\\n\\t\\t<Name>我的设备</Name>\\r\\n\\t\\t<ProjectId>projectTest</ProjectId>\\r\\n\\t\\t<Region>cn</Region>\\r\\n\\t\\t<SerialNumber>xxxxxx</SerialNumber>\\r\\n\\t\\t<SoftwareId>xxxxxx</SoftwareId>\\r\\n\\t\\t<UsageType>0</UsageType>\\r\\n\\t\\t<UsageTypeDesc>private</UsageTypeDesc>\\r\\n        <Status>0</Status>\\r\\n\\t\\t<Uuid>xxxxxx</Uuid>\\r\\n\\t</Devices>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n</ListDevicesResponse>","errorExample":""}]',
            'title' => '查询设备列表',
            'summary' => '调用ListDevices查询设备列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDeviceTypes' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'DeviceTypes' => [
                                'description' => '返回内容',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceType' => [
                                            'description' => '设备类型标识'."\n",
                                            'type' => 'string',
                                            'example' => 'car_auto',
                                        ],
                                        'Name' => [
                                            'description' => '设备类型名称'."\n",
                                            'type' => 'string',
                                            'example' => '智能汽车',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"DeviceTypes\\": [\\n    {\\n      \\"Name\\": \\"智能汽车\\",\\n      \\"DeviceType\\": \\"car_auto\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<ListDeviceTypesResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<DeviceTypes>\\r\\n\\t\\t<Name>路由器</Name>\\r\\n\\t\\t<DeviceType>router</DeviceType>\\r\\n\\t</DeviceTypes>\\r\\n\\t<DeviceTypes>\\r\\n\\t\\t<Name>电视</Name>\\r\\n\\t\\t<DeviceType>tv</DeviceType>\\r\\n\\t</DeviceTypes>\\r\\n\\t<DeviceTypes>\\r\\n\\t\\t<Name>平板</Name>\\r\\n\\t\\t<DeviceType>pad</DeviceType>\\r\\n\\t</DeviceTypes>\\r\\n\\t<DeviceTypes>\\r\\n\\t\\t<Name>手机</Name>\\r\\n\\t\\t<DeviceType>phone</DeviceType>\\r\\n\\t</DeviceTypes>\\r\\n\\t<DeviceTypes>\\r\\n\\t\\t<Name>智能汽车</Name>\\r\\n\\t\\t<DeviceType>car_auto</DeviceType>\\r\\n\\t</DeviceTypes>\\r\\n\\t<DeviceTypes>\\r\\n\\t\\t<Name>考勤机</Name>\\r\\n\\t\\t<DeviceType>attendance</DeviceType>\\r\\n\\t</DeviceTypes>\\r\\n\\t<DeviceTypes>\\r\\n\\t\\t<Name>电子班牌</Name>\\r\\n\\t\\t<DeviceType>electronic_plate</DeviceType>\\r\\n\\t</DeviceTypes>\\r\\n</ListDeviceTypesResponse>","errorExample":""}]',
            'title' => '获取系统支持的所有设备类型列表',
            'summary' => '调用ListDeviceTypes获取系统支持的所有设备类型列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListMessageReceivers' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sfgsghd6',
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '32555',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询页码。',
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
                        'description' => '分页查询每页数据集大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MessageReceivers' => [
                                'description' => '分页查询设备接收者数据对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页查询对象。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '分页页码。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TotalPageCount' => [
                                                'description' => '总分页数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '30',
                                            ],
                                            'PageSize' => [
                                                'description' => '分页每页数据集大小。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                            'TotalCount' => [
                                                'description' => '数据集总数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                        ],
                                    ],
                                    'List' => [
                                        'description' => '设备接收者对象列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '消息接收对象类型。'."\n"
                                                        ."\n"
                                                        .'取值：**uuid**（deviceId）、**imei**、**kp**、**terminal**。',
                                                    'type' => 'string',
                                                    'example' => 'uuid',
                                                ],
                                                'Value' => [
                                                    'description' => '设备接收对象值。',
                                                    'type' => 'string',
                                                    'example' => 'fc35429dff9b473c81d7ef5f62ab11dc',
                                                ],
                                                'Mid' => [
                                                    'description' => '消息ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '33566',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"MessageReceivers\\": {\\n    \\"List\\": [\\n      {\\n        \\"Type\\": \\"uuid\\",\\n        \\"Value\\": \\"fc35429dff9b473c81d7ef5f62ab11dc\\",\\n        \\"Mid\\": 33566\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"TotalPageCount\\": 30,\\n      \\"PageSize\\": 20,\\n      \\"TotalCount\\": 2\\n    }\\n  }\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The MessageId  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<ListMessageReceiversResponse>\\r\\n\\t<MessageReceivers>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<TotalCount>1</TotalCount>\\r\\n\\t\\t\\t<TotalPageCount>1</TotalPageCount>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<PageSize>20</PageSize>\\r\\n\\t\\t</Pagination>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<Mid>106577</Mid>\\r\\n\\t\\t\\t<Type>deviceId</Type>\\r\\n\\t\\t\\t<Value>1583820a2cf345a8810b3e0a2435b16f</Value>\\r\\n\\t\\t</List>\\r\\n\\t</MessageReceivers>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListMessageReceiversResponse>","errorExample":""}]',
            'title' => '根据消息ID查询消息设备接收对象列表',
            'summary' => '调用ListMessageReceivers根据消息ID查询消息设备接收对象列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDeviceBrand' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'DeviceBrandId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的设备品牌ID，和**DeviceBrand**不能同时为空。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DeviceBrand',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的设备品牌名称，和**DeviceBrandId**不能同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TmallGenius',
                    ],
                ],
                [
                    'name' => 'Start',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询列表起始位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Length',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询列表最大长度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'DeviceBrand' => [
                                'description' => '查询结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DeviceBrandId' => [
                                        'description' => '品牌ID'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'Description' => [
                                        'description' => '品牌描述'."\n",
                                        'type' => 'string',
                                        'example' => '天猫精灵品牌',
                                    ],
                                    'ProjectId' => [
                                        'description' => '项目ID'."\n",
                                        'type' => 'string',
                                        'example' => 'projectTest',
                                    ],
                                    'Manufacture' => [
                                        'description' => '生产厂商'."\n",
                                        'type' => 'string',
                                        'example' => 'Alibaba',
                                    ],
                                    'DeviceBrand' => [
                                        'description' => '品牌名称'."\n",
                                        'type' => 'string',
                                        'example' => '天猫精灵',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"DeviceBrand\\": {\\n    \\"Manufacture\\": \\"Alibaba\\",\\n    \\"DeviceBrandId\\": 1,\\n    \\"Description\\": \\"天猫精灵品牌\\",\\n    \\"DeviceBrand\\": \\"天猫精灵\\",\\n    \\"ProjectId\\": \\"projectTest\\"\\n  }\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<DescribeDeviceBrandResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<DeviceBrand>\\r\\n\\t\\t<Description>天猫精灵品牌</Description>\\r\\n\\t\\t<DeviceBrand>天猫精灵</DeviceBrand>\\r\\n\\t\\t<DeviceBrandId>1</DeviceBrandId>\\r\\n\\t\\t<Manufacture>Alibaba</Manufacture>\\r\\n\\t\\t<ProjectId>projectTest</ProjectId>\\r\\n\\t</DeviceBrand>\\r\\n</DescribeDeviceBrandResponse>","errorExample":""}]',
            'title' => '查询获取设备品牌信息',
            'summary' => '根据品牌ID或品牌名称，查询获取设备品牌信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDeviceIdByOuterInfo' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '第三方设备唯一标识类型。'."\n"
                            ."\n"
                            .'目前支持：**sn**、**vin**、**hardware_id**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sn',
                    ],
                ],
                [
                    'name' => 'QueryValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '第三方设备唯一标识的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12345abcde',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'DeviceId' => [
                                'description' => '设备ID。',
                                'type' => 'string',
                                'example' => 'deviceabcde',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DeviceId\\": \\"deviceabcde\\",\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<DescribeDeviceIdByOuterInfoResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<DeviceId>deviceabcde</DeviceId>\\r\\n</DescribeDeviceIdByOuterInfoResponse>","errorExample":""}]',
            'title' => '根据第三方设备唯一标识查询设备ID',
            'summary' => '调用DescribeDeviceIdByOuterInfo根据第三方设备唯一标识查询设备ID。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDeviceInfo' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID。'."\n"
                            ."\n"
                            .'和**DeviceToken**不能同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'DeviceToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备Token。'."\n"
                            ."\n"
                            .'和**DeviceId**不能同时为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn.xxxxxxx',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'DeviceInfo' => [
                                'description' => '返回内容。',
                                'type' => 'object',
                                'properties' => [
                                    'SerialNumber' => [
                                        'description' => '设备序列号'."\n",
                                        'type' => 'string',
                                        'example' => 'xxxxxxxx',
                                    ],
                                    'Status' => [
                                        'description' => '设备状态',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'DeviceModelId' => [
                                        'description' => '设备型号ID'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'MacAddress' => [
                                        'description' => 'MAC地址'."\n",
                                        'type' => 'string',
                                        'example' => '00:00:00:00:00:00',
                                    ],
                                    'DeviceId' => [
                                        'description' => '设备ID'."\n",
                                        'type' => 'string',
                                        'example' => 'cn.1234567890',
                                    ],
                                    'DeviceType' => [
                                        'description' => '设备类型'."\n",
                                        'type' => 'string',
                                        'example' => '智能家居',
                                    ],
                                    'ProjectId' => [
                                        'description' => '项目ID'."\n",
                                        'type' => 'string',
                                        'example' => 'projectTest',
                                    ],
                                    'DeviceModel' => [
                                        'description' => '设备型号'."\n",
                                        'type' => 'string',
                                        'example' => 'X1',
                                    ],
                                    'UsageType' => [
                                        'description' => '设备使用性质。'."\n"
                                            ."\n"
                                            .'- **0**：私人设备'."\n"
                                            .'- **1**：运营或共享设备'."\n",
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Vin' => [
                                        'description' => '设备车架号（汽车相关产品使用）'."\n",
                                        'type' => 'string',
                                        'example' => 'xxxxxxxx',
                                    ],
                                    'UsageTypeDesc' => [
                                        'description' => '设备使用性质描述。'."\n"
                                            ."\n"
                                            .'- **private**：私人设备'."\n"
                                            .'- **business**：运营或共享设备',
                                        'type' => 'string',
                                        'example' => 'private',
                                    ],
                                    'Uuid' => [
                                        'description' => '设备UUID'."\n",
                                        'type' => 'string',
                                        'example' => 'xxxxxxxx',
                                    ],
                                    'HardwareId' => [
                                        'description' => '硬件ID'."\n",
                                        'type' => 'string',
                                        'example' => 'xxxxxxx',
                                    ],
                                    'Region' => [
                                        'description' => '设备所在国家代码'."\n",
                                        'type' => 'string',
                                        'example' => 'cn',
                                    ],
                                    'SoftwareId' => [
                                        'description' => '软件ID'."\n",
                                        'type' => 'string',
                                        'example' => 'xxxxxxxx',
                                    ],
                                    'Name' => [
                                        'description' => '设备昵称'."\n",
                                        'type' => 'string',
                                        'example' => '我的天猫精灵',
                                    ],
                                    'DeviceBrand' => [
                                        'description' => '设备品牌'."\n",
                                        'type' => 'string',
                                        'example' => 'TmallGenuine',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"DeviceInfo\\": {\\n    \\"Status\\": \\"1\\",\\n    \\"SerialNumber\\": \\"xxxxxxxx\\",\\n    \\"DeviceModelId\\": 10,\\n    \\"MacAddress\\": \\"00:00:00:00:00:00\\",\\n    \\"DeviceType\\": \\"智能家居\\",\\n    \\"DeviceId\\": \\"cn.1234567890\\",\\n    \\"ProjectId\\": \\"projectTest\\",\\n    \\"DeviceModel\\": \\"X1\\",\\n    \\"Vin\\": \\"xxxxxxxx\\",\\n    \\"UsageType\\": 0,\\n    \\"UsageTypeDesc\\": \\"private\\",\\n    \\"Uuid\\": \\"xxxxxxxx\\",\\n    \\"HardwareId\\": \\"xxxxxxx\\",\\n    \\"Region\\": \\"cn\\",\\n    \\"SoftwareId\\": \\"xxxxxxxx\\",\\n    \\"Name\\": \\"我的天猫精灵\\",\\n    \\"DeviceBrand\\": \\"TmallGenuine\\"\\n  }\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<DescribeDeviceInfoResponse>\\r\\n<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<DeviceInfo>\\r\\n\\t\\t<DeviceBrand>TmallGenuine</DeviceBrand>\\r\\n\\t\\t<DeviceId>cn.1234567890</DeviceId>\\r\\n\\t\\t<DeviceModel>X1</DeviceModel>\\r\\n\\t\\t<DeviceModelId>10</DeviceModelId>\\r\\n\\t\\t<DeviceType>智能家居</DeviceType>\\r\\n\\t\\t<HardwareId>xxxxxxx</HardwareId>\\r\\n\\t\\t<MacAddress>00:00:00:00:00:00</MacAddress>\\r\\n\\t\\t<Name>我的天猫精灵</Name>\\r\\n\\t\\t<ProjectId>projectTest</ProjectId>\\r\\n\\t\\t<Region>cn</Region>\\r\\n\\t\\t<SerialNumber>xxxxxx</SerialNumber>\\r\\n\\t\\t<SoftwareId>xxxxxx</SoftwareId>\\r\\n\\t\\t<UsageType>0</UsageType>\\r\\n\\t\\t<UsageTypeDesc>private</UsageTypeDesc>\\r\\n\\t\\t<Uuid>xxxxxx</Uuid>\\r\\n\\t</DeviceInfo>\\r\\n</DescribeDeviceInfoResponse>","errorExample":""}]',
            'title' => '获取设备信息',
            'summary' => '调用DescribeDeviceInfo获取设备信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ConnectAssistDevice' => [
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
                    'name' => 'HardwareId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '硬件ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BALFL8429HI',
                    ],
                ],
                [
                    'name' => 'AllowCommandExtension',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '允许执行扩展命令',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6fde56979c484b93b99fba257e3cbe83',
                    ],
                ],
                [
                    'name' => 'SerialNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '序列号',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BALFL8429SN',
                    ],
                ],
                [
                    'name' => 'VIN',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '车架号',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LHK000026VFAG7A31',
                    ],
                ],
                [
                    'name' => 'UUID',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AliOS设备UUID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '842972B2C0F4C9F030E60769CA65806A',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PZ1HK7JZ',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<ConnectAssistDeviceResponse>\\r\\n<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ConnectAssistDeviceResponse>","errorExample":""}]',
            'title' => '通知设备建立诊断连接',
            'summary' => '通知设备建立诊断web socket连接。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CountActivatedOrNewRegistrationDevice' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'car_auto',
                    ],
                ],
                [
                    'name' => 'DeviceBrandId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备品牌ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '15',
                    ],
                ],
                [
                    'name' => 'DeviceBrand',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备品牌名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ROEWE',
                    ],
                ],
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '105',
                    ],
                ],
                [
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ROEWE RX5',
                    ],
                ],
                [
                    'name' => 'DeviceCountStatType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '统计粒度类型，byDay表示按日，byMonth表示按月',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'byDay',
                    ],
                ],
                [
                    'name' => 'IsQueryNewRegistrationDevice',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否查看激活设备, true表示是,表示查询设备激活的变化曲线;false表示否，表示查询设备活跃的变化曲线。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2018-08-15 12:00:00',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2018-08-25 12:00:00',
                    ],
                ],
                [
                    'name' => 'IsQueryYearlyActivate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否以年维度查询活跃设备趋势',
                        'type' => 'string',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'Statistics' => [
                                'description' => '统计数据返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Categories' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '统计的时间维度',
                                            'type' => 'string',
                                            'example' => '["1568217600000","1568649600000"]',
                                        ],
                                    ],
                                    'Series' => [
                                        'description' => '统计的分类结果',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Data' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '当前分类统计的数据结果',
                                                        'type' => 'string',
                                                        'example' => '[3,3]',
                                                    ],
                                                ],
                                                'Name' => [
                                                    'description' => '统计分类',
                                                    'type' => 'string',
                                                    'example' => 'increment',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"Statistics\\": {\\n    \\"Series\\": [\\n      {\\n        \\"Name\\": \\"increment\\",\\n        \\"Data\\": [\\n          \\"[3,3]\\"\\n        ]\\n      }\\n    ],\\n    \\"Categories\\": [\\n      \\"[\\\\\\"1568217600000\\\\\\",\\\\\\"1568649600000\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"","errorExample":""}]',
            'title' => '多维度统计设备的激活、活跃',
            'summary' => '支持按日、按月统计。',
            'description' => '多维度统计设备的激活、活跃，且支持按日、按月统计',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CountDeviceBrands' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DeviceBrandId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的设备品牌ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DeviceBrand',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的设备品牌名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Tmall',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'BrandCount' => [
                                'description' => '品牌数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"BrandCount\\": 2,\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<CountDeviceBrandsResponse>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<Results>2</Results>\\r\\n</CountDeviceBrandsResponse>","errorExample":""}]',
            'title' => '查询符合条件的设备品牌数量',
            'summary' => '调用CountDeviceBrands查询符合条件的设备品牌数量。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CountDeviceModels' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备型号名，支持模糊查询',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'X1',
                    ],
                ],
                [
                    'name' => 'DeviceBrand',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备品牌',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TmallGenius',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'ModelCount' => [
                                'description' => '查询到的型号数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ModelCount\\": 10,\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":"{\\n    \\"Message\\": \\"NO_PERMISSION_TO_ACCESS_PROJECT\\",\\n    \\"RequestId\\": \\"81275440-EF9D-4570-A78F-7576441D3BF8\\",\\n    \\"Results\\": [],\\n    \\"Code\\": 10007\\n  }"},{"type":"xml","example":"<CountDeviceModelsResponse>\\r\\n\\t<Message>SUCCESS</Message>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n\\t<Results>1</Results>\\r\\n\\t<Code>200</Code>\\r\\n</CountDeviceModelsResponse>","errorExample":""}]',
            'title' => '查询设备型号数量',
            'summary' => '调用CountDeviceModels查询设备型号数量。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CountDevices' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'DeviceModelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备机型ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DeviceModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备机型名，支持模糊查询',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Device Model',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'DeviceCount' => [
                                'description' => '设备总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DeviceCount\\": 100,\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '指定机型的设备总数',
            'summary' => '指定机型的设备总数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CountYunIdInfo' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E94C9864-56FB-44AD-AC0C-A1CEFB332254',
                            ],
                            'YunIdInfo' => [
                                'description' => '云设备统计数据信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TotalBrandCount' => [
                                            'description' => '总品牌数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5',
                                        ],
                                        'TotalDeviceCount' => [
                                            'description' => '总激活设备数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'TotalDeviceModelCount' => [
                                            'description' => '总机型数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E94C9864-56FB-44AD-AC0C-A1CEFB332254\\",\\n  \\"YunIdInfo\\": [\\n    {\\n      \\"TotalDeviceModelCount\\": 10,\\n      \\"TotalBrandCount\\": 5,\\n      \\"TotalDeviceCount\\": 100\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\n<YunIdInfo>\\n    <TotalBrandCount>5</TotalBrandCount>\\n    <TotalDeviceModelCount>10</TotalDeviceModelCount>\\n    <TotalDeviceCount>100</TotalDeviceCount>\\n</YunIdInfo>","errorExample":""}]',
            'title' => '统计租户下的品牌数和机型数以及设备数',
            'summary' => '统计租户下的品牌数和机型数以及设备数。',
            'description' => '统计租户下的品牌数和机型数以及设备数',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DiagnosisVersion' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'OriginalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对应ID类型的ID值',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'b8fe2e24ff2b48e0a3aa4e49809fc1b3',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，取值有：'."\n"
                            ."\n"
                            .'- **FOTA**：系统版本'."\n"
                            .'- **APP**：应用版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'IdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于判断的OriginalId的类型，取值有：**device_id**, **sn**, **vin**, **hardware_id**, **uuid **。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'device_id',
                    ],
                ],
                [
                    'name' => 'DiagnoseStyle',
                    'in' => 'query',
                    'schema' => [
                        'description' => '诊断类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待诊断的请求查询时间段开始时间点',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-09-18 10:44',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待诊断的请求查询时间段结束时间点',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2019-09-18 14:44',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'DiagnosisResult' => [
                                'description' => '诊断结果',
                                'type' => 'string',
                                'example' => '无效的机型',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DiagnosisResult\\": \\"无效的机型\\",\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<DiagnosisVersionResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<DiagnosisResult>无效的机型</DiagnosisResult>\\r\\n</DiagnosisVersionResponse>","errorExample":""}]',
            'title' => '诊断某特定设备查询不到某特定版本的原因',
            'summary' => '调用DiagnosisVersion诊断某特定设备查询不到某特定版本的原因。',
            'description' => '通过指定测试的设备和期望设备查询到的升级版本，可以诊断出该版本无法被查询到的原因，如：机型不匹配，版本号较低，不符合版本黑名单规则等。'."\n"
                ."\n"
                .'> 要求设备已接入CMNS并且已联网。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindPrepublishPassedDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'PrepublishId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预发布ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本页开始序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云设备ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b8fe2e24ff2b48e0a3aa4e49809fc1b3',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'DeviceList' => [
                                'description' => '查询到的设备信息',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '设备列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtCreateTimestamp' => [
                                                    'description' => '查询时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '124643600000',
                                                ],
                                                'DeviceId' => [
                                                    'description' => '云设备ID',
                                                    'type' => 'string',
                                                    'example' => 'b8fe2e24ff2b48e0a3aa4e49809fc1b3',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '查询时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:00:00',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '符合条件的记录总数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"DeviceList\\": {\\n    \\"TotalCount\\": 2,\\n    \\"Items\\": [\\n      {\\n        \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n        \\"GmtCreateTimestamp\\": 124643600000,\\n        \\"DeviceId\\": \\"b8fe2e24ff2b48e0a3aa4e49809fc1b3\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<FindPrepublishPassedDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<DeviceList>\\r\\n\\t\\t<TotalCount>30</TotalCount>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<DeviceId>b8fe2e24ff2b48e0a3aa4e49809fc1b3</DeviceId>\\r\\n\\t\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t</Items>\\r\\n\\t</DeviceList>\\r\\n</FindPrepublishPassedDevicesResponse>","errorExample":""}]',
            'title' => '查询设备的云设备ID列表',
            'summary' => '按分页查询某一个预发布下的已查询设备的云设备ID列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindVersionBlackDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'VersionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型，支持：'."\n"
                            ."\n"
                            .'- **FOTA**：系统升级'."\n"
                            .'- **APP**：应用升级',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FOTA',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备ID，模糊匹配',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AS23DG23SA5D43GA34SD23GW456E',
                    ],
                ],
                [
                    'name' => 'OriginalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源设备ID，模糊匹配',
                        'type' => 'string',
                        'required' => false,
                        'example' => '23452345234523452',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页索引，从1开始',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，支持10、20、50三种。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'DeviceList' => [
                                'description' => '设备列表信息',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '当前页设备数',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtCreateTimestamp' => [
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '168566700000',
                                                ],
                                                'OriginalId' => [
                                                    'description' => '源设备ID',
                                                    'type' => 'string',
                                                    'example' => '23452345234523452',
                                                ],
                                                'DeviceId' => [
                                                    'description' => '设备ID',
                                                    'type' => 'string',
                                                    'example' => 'AS23DG23SA5D43GA34SD23GW456E',
                                                ],
                                                'IdType' => [
                                                    'description' => '设备ID类型，支持：'."\n"
                                                        ."\n"
                                                        .'- **device_id**：硬件ID'."\n"
                                                        .'- **sn**：序列号'."\n"
                                                        .'- **vin**：车架号'."\n"
                                                        .'- **hardware_id**：硬件ID',
                                                    'type' => 'string',
                                                    'example' => 'hardware_id',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '设备添加时间',
                                                    'type' => 'string',
                                                    'example' => '2018-02-14 14:20:18',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID，主键',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '123',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '总共符合条件的设备数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '25',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"DeviceList\\": {\\n    \\"TotalCount\\": 25,\\n    \\"Items\\": [\\n      {\\n        \\"GmtCreateTimestamp\\": 168566700000,\\n        \\"OriginalId\\": \\"23452345234523452\\",\\n        \\"DeviceId\\": \\"AS23DG23SA5D43GA34SD23GW456E\\",\\n        \\"IdType\\": \\"hardware_id\\",\\n        \\"GmtCreate\\": \\"2018-02-14 14:20:18\\",\\n        \\"Id\\": 123\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<FindVersionBlackDevicesResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<DeviceList>\\r\\n\\t\\t<TotalCount>25</TotalCount>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<Id>1</Id>\\r\\n\\t\\t\\t<DeviceId>AS23DG23SA5D43GA34SD23GW456E</DeviceId>\\r\\n\\t\\t\\t<IdType>hardware_id</IdType>\\r\\n\\t\\t\\t<OriginalId>23452345234523452</OriginalId>\\r\\n\\t\\t\\t<GmtCreate>2018-02-14 14:20:18</GmtCreate>\\r\\n\\t\\t</Items>\\r\\n\\t</DeviceList>\\r\\n</FindVersionBlackDevicesResponse>","errorExample":""}]',
            'title' => '获取系统版本或应用版本设备黑名单',
            'summary' => '分页获取系统版本或者应用版本的设备黑名单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PushMessage' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'AppPackage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息归属客户端应用包名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'com.aliyun.iovcc.cmns.test',
                    ],
                ],
                [
                    'name' => 'Desc',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知内容详情，消息类型为通知时必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'this is desc test',
                    ],
                ],
                [
                    'name' => 'Act',
                    'in' => 'query',
                    'schema' => [
                        'description' => '广播侦听通道，为客户端与服务端约定配置。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'com.aliyun.iovcc.action',
                    ],
                ],
                [
                    'name' => 'Uri',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'alios4.0专用，alios设备通知和透传消息时必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'page://broadcast.yunos.com',
                    ],
                ],
                [
                    'name' => 'PkgContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'android intent属性值参数，为json字符串，用户可选择设置"component"，"uri"，"type"，"package"，"category"等5个intent属性key。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"package":"com.aliyun.iovcc.cmns.test"}',
                    ],
                ],
                [
                    'name' => 'CustomContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户自定义内容。'."\n"
                            ."\n"
                            .'为json字符串，json字符串中不得使用关键字"cmns"作为字段，消息类型为透传（type=1）时必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key1":"value1","key2":"value2"}',
                    ],
                ],
                [
                    'name' => 'ReceiverType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息接收对象类型。取值："**uuid**"、"**imei**"、"**kp**"、"**terminal**"。'."\n"
                            ."\n"
                            .'- 按设备维度发送时，选择**uuid**或者**imei**。'."\n"
                            .'- 按账号维度发送时，选择**kp**。'."\n"
                            .'- 按设备类型维度时，选择**terminal**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'uuid',
                    ],
                ],
                [
                    'name' => 'ReceiverValues',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息接收对象值，多个接收对象通过英文逗号拼接。'."\n"
                            ."\n"
                            .'- 按照**uuid**或者**imei**的值拼接，最多限制1000个设备。'."\n"
                            .'- 按照**kp**的值拼接，最多限制100个账号。'."\n"
                            .'- 按照**terminal**的值拼接，最多限制10个机型。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b81d39b0252a4ffdb750360b262cb442, b81d39b0252a4ffdb750360b262cb411',
                    ],
                ],
                [
                    'name' => 'ExpiredTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息过期时间。'."\n"
                            ."\n"
                            .'相对时间（即多少秒后过期，单发最多7天，群发消息最多不能超过30天），单位为S，默认1小时过期。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '7200',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知标题，消息类型为通知时必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'this is test test',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sfgsghd6',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'cmns客户端应用appKey。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'com.aliyun.aicc.test',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息类型。取值：**1**表示透传消息，**2**表示通知。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Mid' => [
                                'description' => '消息ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '354677',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Mid\\": 354677,\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The AppPackage  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<PushMessageResponse>\\r\\n\\t<Mid>354677</Mid>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</PushMessageResponse>","errorExample":""}]',
            'title' => '推送消息到设备端',
            'summary' => '推送消息到设备端，支持透传、通知两种消息类型。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindVersionDeviceGroups' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云设备ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b8fe2e24ff2b48e0a3aa4e49809fc1b3',
                    ],
                ],
                [
                    'name' => 'OriginalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源设备ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '23452345234523452',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本页开始序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '升级',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'DeviceGroupList' => [
                                'description' => '查询结果列表',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '返回记录列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtModifyTimestamp' => [
                                                    'description' => '修改时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '16834654000000',
                                                ],
                                                'GmtCreateTimestamp' => [
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '16834654000000',
                                                ],
                                                'GmtModify' => [
                                                    'description' => '修改时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:01:00',
                                                ],
                                                'Description' => [
                                                    'description' => '分组描述',
                                                    'type' => 'string',
                                                    'example' => '测试',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:00:00',
                                                ],
                                                'Name' => [
                                                    'description' => '分组名',
                                                    'type' => 'string',
                                                    'example' => '升级分组',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'MaxCount' => [
                                                    'description' => '最大设备数',
                                                    'type' => 'string',
                                                    'example' => '100',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '符合条件的记录总数',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"DeviceGroupList\\": {\\n    \\"TotalCount\\": 10,\\n    \\"Items\\": [\\n      {\\n        \\"GmtModifyTimestamp\\": 16834654000000,\\n        \\"GmtCreateTimestamp\\": 16834654000000,\\n        \\"GmtModify\\": \\"2018-01-01 00:01:00\\",\\n        \\"Description\\": \\"测试\\",\\n        \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n        \\"Name\\": \\"升级分组\\",\\n        \\"Id\\": 1,\\n        \\"MaxCount\\": \\"100\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<FindVersionDeviceGroupsResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n\\t<DeviceGroupList>\\r\\n\\t\\t<TotalCount>10</TotalCount>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<Id>1</Id>\\r\\n\\t\\t\\t<Name>升级分组</Name>\\r\\n\\t\\t\\t<Description>测试</Description>\\r\\n\\t\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t\\t<GmtModify>2018-01-01 00:01:00</GmtModify>\\r\\n\\t\\t</Items>\\r\\n\\t</DeviceGroupList>\\r\\n</FindVersionDeviceGroupsResponse>","errorExample":""}]',
            'title' => '查询测试设备分组',
            'summary' => '分页查询测试设备分组，可根据分组名、分组包含的云设备ID查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FindVersionGroupDevices' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'OriginalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源设备ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '23452345234523452',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本页开始序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试设备分组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云设备ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b8fe2e24ff2b48e0a3aa4e49809fc1b3',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'GroupDeviceList' => [
                                'description' => '设备列表',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '当前分页的设备数据',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtCreateTimestamp' => [
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '18635800000',
                                                ],
                                                'OriginalId' => [
                                                    'description' => '源设备ID',
                                                    'type' => 'string',
                                                    'example' => '23452345234523452',
                                                ],
                                                'DeviceId' => [
                                                    'description' => '设备ID',
                                                    'type' => 'string',
                                                    'example' => 'AS23DG23SA5D43GA34SD23GW456E',
                                                ],
                                                'IdType' => [
                                                    'description' => '设备ID类型，支持：'."\n"
                                                        ."\n"
                                                        .'- **device_id**：硬件ID'."\n"
                                                        .'- **sn**：序列号'."\n"
                                                        .'- **vin**：车架号'."\n"
                                                        .'- **hardware_id**：硬件ID',
                                                    'type' => 'string',
                                                    'example' => 'device_id',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '添加时间',
                                                    'type' => 'string',
                                                    'example' => '2018-02-14 14:20:18',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '设备记录总数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"GroupDeviceList\\": {\\n    \\"TotalCount\\": 2,\\n    \\"Items\\": [\\n      {\\n        \\"GmtCreateTimestamp\\": 18635800000,\\n        \\"OriginalId\\": \\"23452345234523452\\",\\n        \\"DeviceId\\": \\"AS23DG23SA5D43GA34SD23GW456E\\",\\n        \\"IdType\\": \\"device_id\\",\\n        \\"GmtCreate\\": \\"2018-02-14 14:20:18\\",\\n        \\"Id\\": \\"123\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<FindVersionGroupDevicesResponse>\\r\\n\\t<GroupDeviceList>\\r\\n\\t\\t<Items>\\r\\n\\t\\t\\t<DeviceId>AS23DG23SA5D43GA34SD23GW456E</DeviceId>\\r\\n\\t\\t\\t<GmtCreate>2018-02-14 14:20:18</GmtCreate>\\r\\n\\t\\t\\t<Id>1</Id>\\r\\n\\t\\t\\t<IdType>hardware_id</IdType>\\r\\n\\t\\t\\t<OriginalId>23452345234523452</OriginalId>\\r\\n\\t\\t</Items>\\r\\n\\t\\t<TotalCount>25</TotalCount>\\r\\n\\t</GroupDeviceList>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</FindVersionGroupDevicesResponse>","errorExample":""}]',
            'title' => '查询指定分组中的设备列表',
            'summary' => '根据云设备ID，分页查询指定分组中的设备列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateProjectApp' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'calendar',
                    ],
                ],
                [
                    'name' => 'AppPkgName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用的包名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'com.demo.calendar',
                    ],
                ],
                [
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统类型，1：Android',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<CreateProjectAppResponse>\\r\\n<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</CreateProjectAppResponse>","errorExample":""}]',
            'title' => '在项目下创建应用',
            'summary' => '调用CreateProjectApp（在项目下）创建应用。',
            'description' => '> 项目下可以创建应用的个数不限，这里的应用是指客户端应用，目前仅支持Andirod系统的应用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListProjectApps' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码，从**1**开始。',
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
                        'description' => '每页记录条数，默认为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Keywords',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称或包名关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'app',
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
                                'example' => 'A15971B1-DC63-4AEC-A8B1-85CB8CD78227',
                            ],
                            'Result' => [
                                'description' => '查询结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ProjectApps' => [
                                        'description' => '应用列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '应用状态。'."\n"
                                                        ."\n"
                                                        .'0表示正常，1表示删除。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'ProjectId' => [
                                                    'description' => '所属项目ID',
                                                    'type' => 'string',
                                                    'example' => '11',
                                                ],
                                                'UserId' => [
                                                    'description' => '所属用户ID',
                                                    'type' => 'string',
                                                    'example' => '1768723179523459',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '修改时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1524736376000',
                                                ],
                                                'AppPkgName' => [
                                                    'description' => '应用包名',
                                                    'type' => 'string',
                                                    'example' => 'com.app1',
                                                ],
                                                'AppName' => [
                                                    'description' => '应用名称',
                                                    'type' => 'string',
                                                    'example' => 'app1',
                                                ],
                                                'AppSecret' => [
                                                    'description' => '应用AppSecret。'."\n"
                                                        ."\n"
                                                        .'默认不完全显示，只显示头尾2个字符。',
                                                    'type' => 'string',
                                                    'example' => 'Q******F',
                                                ],
                                                'AppKey' => [
                                                    'description' => '应用AppKey',
                                                    'type' => 'string',
                                                    'example' => 'mPp7O4LW',
                                                ],
                                                'AppId' => [
                                                    'description' => '应用AppId',
                                                    'type' => 'string',
                                                    'example' => 'AX4R4JWQ',
                                                ],
                                                'OsType' => [
                                                    'description' => '系统类型，1-Android。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1524736376000',
                                                ],
                                                'Id' => [
                                                    'description' => '主键ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '78',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalPage' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总记录条数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A15971B1-DC63-4AEC-A8B1-85CB8CD78227\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 1,\\n    \\"TotalPage\\": 1,\\n    \\"ProjectApps\\": [\\n      {\\n        \\"Status\\": 0,\\n        \\"UserId\\": \\"1768723179523459\\",\\n        \\"ProjectId\\": \\"11\\",\\n        \\"GmtModified\\": 1524736376000,\\n        \\"AppName\\": \\"app1\\",\\n        \\"AppPkgName\\": \\"com.app1\\",\\n        \\"AppSecret\\": \\"Q******F\\",\\n        \\"AppKey\\": \\"mPp7O4LW\\",\\n        \\"AppId\\": \\"AX4R4JWQ\\",\\n        \\"OsType\\": 1,\\n        \\"GmtCreate\\": 1524736376000,\\n        \\"Id\\": 78\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NotFoundProject\\",\\n  \\"Message\\": \\"Cannot find the specified project\\"\\n}"},{"type":"xml","example":"<ListProjectAppsResponse>\\r\\n\\t<Result>\\r\\n\\t\\t<TotalPage>1</TotalPage>\\r\\n\\t\\t<TotalCount>1</TotalCount>\\r\\n\\t\\t<ProjectApps>\\r\\n\\t\\t\\t<OsType>1</OsType>\\r\\n\\t\\t\\t<Status>0</Status>\\r\\n\\t\\t\\t<AppSecret>Q******F</AppSecret>\\r\\n\\t\\t\\t<AppPkgName>com.app1</AppPkgName>\\r\\n\\t\\t\\t<AppId>AX4R4JWQ</AppId>\\r\\n\\t\\t\\t<AppName>app1</AppName>\\r\\n\\t\\t\\t<Id>78</Id>\\r\\n\\t\\t\\t<UserId>1768723179523459</UserId>\\r\\n\\t\\t\\t<GmtCreate>1524736376000</GmtCreate>\\r\\n\\t\\t\\t<AppKey>mPp7O4LW</AppKey>\\r\\n\\t\\t\\t<GmtModified>1524736376000</GmtModified>\\r\\n\\t\\t\\t<ProjectId>11</ProjectId>\\r\\n\\t\\t</ProjectApps>\\r\\n\\t</Result>\\r\\n\\t<RequestId>18178DD4-70F9-4BA1-956E-5D8ED4D5B27C</RequestId>\\r\\n</ListProjectAppsResponse>","errorExample":""}]',
            'title' => '查询所有自定义应用',
            'summary' => '根据项目ID查询项目下的所有自定义应用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListProjects' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '3305DEE5-4020-4FF0-9D42-5882B1580088',
                            ],
                            'Projects' => [
                                'description' => '项目列表信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '状态，0表示正常',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Description' => [
                                            'description' => '项目描述',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'UserId' => [
                                            'description' => '项目所属用户ID',
                                            'type' => 'string',
                                            'example' => '1768723179523459',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID',
                                            'type' => 'string',
                                            'example' => '11',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1508341160000',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1525687817000',
                                        ],
                                        'Name' => [
                                            'description' => '项目名称',
                                            'type' => 'string',
                                            'example' => 'aicc_test11',
                                        ],
                                        'Id' => [
                                            'description' => '主键ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '11',
                                        ],
                                        'Creator' => [
                                            'description' => '项目创建人',
                                            'type' => 'string',
                                            'example' => 'user001',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3305DEE5-4020-4FF0-9D42-5882B1580088\\",\\n  \\"Projects\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"Description\\": \\"test\\",\\n      \\"UserId\\": \\"1768723179523459\\",\\n      \\"ProjectId\\": \\"11\\",\\n      \\"GmtCreate\\": 1508341160000,\\n      \\"GmtModified\\": 1525687817000,\\n      \\"Name\\": \\"aicc_test11\\",\\n      \\"Id\\": 11,\\n      \\"Creator\\": \\"user001\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListProjectsResponse>\\r\\n\\t<Projects>\\r\\n\\t\\t<Name>aicc_test22</Name>\\r\\n\\t\\t<Status>0</Status>\\r\\n\\t\\t<Description>test3</Description>\\r\\n\\t\\t<Creator>aicc-qa</Creator>\\r\\n\\t\\t<Id>11</Id>\\r\\n\\t\\t<UserId>1768723179523459</UserId>\\r\\n\\t\\t<GmtCreate>1508341160000</GmtCreate>\\r\\n\\t\\t<GmtModified>1525687817000</GmtModified>\\r\\n\\t\\t<ProjectId>11</ProjectId>\\r\\n\\t</Projects>\\r\\n\\t<RequestId>3305DEE5-4020-4FF0-9D42-5882B1580088</RequestId>\\r\\n</ListProjectsResponse>","errorExample":""}]',
            'title' => '查询项目列表',
            'summary' => '调用ListProjects查询项目列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeProjectAppSecurity' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'A3BU0HBO',
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
                                'example' => 'B030DF87-3AC0-4096-A50B-98B16C98B6CC',
                            ],
                            'ProjectAppSecurity' => [
                                'description' => '项目应用的密钥信息',
                                'type' => 'object',
                                'properties' => [
                                    'AppSecret' => [
                                        'description' => '应用AppSecret',
                                        'type' => 'string',
                                        'example' => '222222',
                                    ],
                                    'AppKey' => [
                                        'description' => '应用AppKey',
                                        'type' => 'string',
                                        'example' => '111111',
                                    ],
                                    'AppId' => [
                                        'description' => '应用ID',
                                        'type' => 'string',
                                        'example' => 'A3BU0HBO',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1508737512000',
                                    ],
                                    'GmtModified' => [
                                        'description' => '修改时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1508737512000',
                                    ],
                                    'Id' => [
                                        'description' => '主键ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '4',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B030DF87-3AC0-4096-A50B-98B16C98B6CC\\",\\n  \\"ProjectAppSecurity\\": {\\n    \\"AppSecret\\": \\"222222\\",\\n    \\"AppKey\\": \\"111111\\",\\n    \\"AppId\\": \\"A3BU0HBO\\",\\n    \\"GmtCreate\\": 1508737512000,\\n    \\"GmtModified\\": 1508737512000,\\n    \\"Id\\": 4\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NotFoundProject\\",\\n  \\"Message\\": \\"Cannot find the specified project\\"\\n}"},{"type":"xml","example":"<DescribeProjectAppSecurityResponse>\\r\\n\\t<RequestId>B030DF87-3AC0-4096-A50B-98B16C98B6CC</RequestId>\\r\\n\\t<ProjectAppSecurity>\\r\\n\\t\\t<AppSecret>222222</AppSecret>\\r\\n\\t\\t<AppId>A3BU0HBO</AppId>\\r\\n\\t\\t<Id>4</Id>\\r\\n\\t\\t<GmtCreate>1508737512000</GmtCreate>\\r\\n\\t\\t<AppKey>111111</AppKey>\\r\\n\\t\\t<GmtModified>1524736346000</GmtModified>\\r\\n\\t</ProjectAppSecurity>\\r\\n</DescribeProjectAppSecurityResponse>","errorExample":""}]',
            'title' => '查询指定项目下指定应用的密钥信息',
            'summary' => '调用DescribeProjectAppSecurity查询指定项目下指定应用的密钥信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRpcService' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc的项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ftewtwyy',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc cmns应用appKey，应用唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'WH2MptXX',
                    ],
                ],
                [
                    'name' => 'InterfaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务接口名称。'."\n"
                            ."\n"
                            .'http接口为不包含参数的请求地址。例如：`https://www.aliyun.com/rpcServiceTest`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://www.aliyun.com/aicc/testRpc',
                    ],
                ],
                [
                    'name' => 'InvokeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接口调用类型。'."\n"
                            ."\n"
                            .'支持http（含https）和hsf。其中，hsf接口需与iovcc服务部署在同一vpc内，方能支持。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http',
                        'enum' => [
                            'http',
                            'hsf',
                        ],
                    ],
                ],
                [
                    'name' => 'Params',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- 调用为http方式时，参数key以英文逗号隔开。例如：`param1,param2`。'."\n"
                            .'- 调用为hsf方式时，参数类型以英文逗号隔开。参数基本类型仅支持string，int，long，bytes，double，float，bool7种。例如：`string,int,long`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'param1,param2',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端接口分组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rpcTestGroup',
                    ],
                ],
                [
                    'name' => 'MethodName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接口调用方法名称，由字母、数字和下划线(_)组成。'."\n"
                            ."\n"
                            .'- 调用类型为**http**时，名称为服务方自定义。'."\n"
                            .'- 调用类型为**hsf**时，名称为hsf接口方法名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testMethodName',
                    ],
                ],
                [
                    'name' => 'VersionCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接口版本号，由服务方自定义设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Id' => [
                                'description' => 'Rpc服务接口ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 1,\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The InterfaceName  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<CreateRpcServiceResponse>\\r\\n\\t<Id>1</Id>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</CreateRpcServiceResponse>","errorExample":""}]',
            'title' => '注册cmns rpc服务接口',
            'summary' => '根据cmns应用appKey、接口名称、接口参数类型等信息注册rpc 服务接口。',
            'description' => '> 支持服务接口以http、hsf两种方式暴露。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteProjectApp' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PPCVFRG7',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AJROOEWE',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NotFoundProject\\",\\n  \\"Message\\": \\"Cannot find the specified project\\"\\n}"},{"type":"xml","example":"<DeleteProjectAppResponse>\\r\\n<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</DeleteProjectAppResponse>","errorExample":""}]',
            'title' => '删除项目下用户创建的自定义应用',
            'summary' => '调用DeleteProjectApp删除项目下用户创建的自定义应用。',
            'description' => '> 根据项目id和应用id删除项目下用户创建的自定义应用，删除之后可以恢复，可以通过再创建相同包名的应用来恢复，之前应用的AppId，AppKey，AppSecret信息不变。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteRpcService' => [
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务接口注册记录ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sghghshr',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The id  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<DeleteRpcServiceResponse>\\r\\n<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</DeleteRpcServiceResponse>","errorExample":""}]',
            'title' => '删除Rpc服务接口注册记录',
            'summary' => '根据记录ID删除Rpc服务接口注册记录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAssistWSServerAddress' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PZ1HK7JZ',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DIS设备ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6fde56979c484b93b99fba257e3cbc12',
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
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                            'WsServer' => [
                                'description' => 'WebSocket服务地址',
                                'type' => 'string',
                                'example' => 'ws://ra-service-qa.aicc.aliyun.com:7001',
                            ],
                            'OTP' => [
                                'description' => '一次性验证码',
                                'type' => 'string',
                                'example' => 'ewga5dxHOB8Lm9VH',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OTP\\": \\"ewga5dxHOB8Lm9VH\\",\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"WsServer\\": \\"ws://ra-service-qa.aicc.aliyun.com:7001\\"\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取WebSocket服务地址',
            'summary' => '获取远程诊断WebSocket服务器地址。',
            'description' => '获取远程诊断WebSocket服务器地址',
        ],
        'FindPrepublishesByParentId' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'ParentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父预发布ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'PrepublishList' => [
                                'description' => '查询预发布结果列表',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '返回记录列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'GmtCreateTimestamp' => [
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '165465000000',
                                                ],
                                                'DeviceModelId' => [
                                                    'description' => '设备型号ID',
                                                    'type' => 'string',
                                                    'example' => '12',
                                                ],
                                                'GmtModify' => [
                                                    'description' => '修改时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:01:00',
                                                ],
                                                'IsActive' => [
                                                    'description' => '预发布是否为启用状态',
                                                    'type' => 'string',
                                                    'example' => 'Y',
                                                ],
                                                'VersionId' => [
                                                    'description' => '版本ID',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'BarrierCount' => [
                                                    'description' => '预发布允许设备数',
                                                    'type' => 'string',
                                                    'example' => '1000',
                                                ],
                                                'IsTotalPrepublish' => [
                                                    'description' => '是否为总量预发布',
                                                    'type' => 'string',
                                                    'example' => 'N',
                                                ],
                                                'GmtModifyTimestamp' => [
                                                    'description' => '更新时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '165465000000',
                                                ],
                                                'ParentId' => [
                                                    'description' => '父预发布ID，为0表示该预发布为父预发布。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2018-01-01 00:00:00',
                                                ],
                                                'Name' => [
                                                    'description' => '预发布名',
                                                    'type' => 'string',
                                                    'example' => '第一次预发布',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'VersionType' => [
                                                    'description' => '版本类型，取值有：FOTA 系统版本，APP 应用版本。',
                                                    'type' => 'string',
                                                    'example' => 'FOTA',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '符合条件的记录总数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"PrepublishList\\": {\\n    \\"TotalCount\\": 30,\\n    \\"Items\\": [\\n      {\\n        \\"GmtCreateTimestamp\\": 165465000000,\\n        \\"DeviceModelId\\": \\"12\\",\\n        \\"GmtModify\\": \\"2018-01-01 00:01:00\\",\\n        \\"IsActive\\": \\"Y\\",\\n        \\"VersionId\\": \\"1\\",\\n        \\"BarrierCount\\": \\"1000\\",\\n        \\"GmtModifyTimestamp\\": 165465000000,\\n        \\"IsTotalPrepublish\\": \\"N\\",\\n        \\"ParentId\\": \\"1\\",\\n        \\"GmtCreate\\": \\"2018-01-01 00:00:00\\",\\n        \\"Name\\": \\"第一次预发布\\",\\n        \\"Id\\": 2,\\n        \\"VersionType\\": \\"FOTA\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<FindPrepublishesByParentIdResponse>\\r\\n\\t<PrepublishList>\\r\\n\\t\\t<BarrierCount>1000</BarrierCount>\\r\\n\\t\\t<DeviceModelId>12</DeviceModelId>\\r\\n\\t\\t<GmtCreate>2018-01-01 00:00:00</GmtCreate>\\r\\n\\t\\t<GmtModify>2018-01-01 00:01:00</GmtModify>\\r\\n\\t\\t<Id>2</Id>\\r\\n\\t\\t<IsActive>Y</IsActive>\\r\\n\\t\\t<IsTotalPrepublish>N</IsTotalPrepublish>\\r\\n\\t\\t<Name>第一次预发布</Name>\\r\\n\\t\\t<ParentId>1</ParentId>\\r\\n\\t\\t<VersionId>1</VersionId>\\r\\n\\t\\t<VersionType>1.0,2.0</VersionType>\\r\\n\\t</PrepublishList>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</FindPrepublishesByParentIdResponse>","errorExample":""}]',
            'title' => '查询父预发布下的子预发布',
            'summary' => '调用FindPrepublishesByParentId查询父预发布下的子预发布。',
            'description' => '适用于应用版本的预发布，每次创建的预发布是父预发布，对每个适配机型创建一个子预发布。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GenerateOssUploadMeta' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'Ext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件类型后缀。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rsa',
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
                                'example' => '7676B259-FFA5-4971-A9D7-7B3F48D1DEEB',
                            ],
                            'OssUploadMeta' => [
                                'description' => '上传OSS所需的凭证信息。',
                                'type' => 'object',
                                'properties' => [
                                    'SecurityToken' => [
                                        'description' => 'sts授权访问token。',
                                        'type' => 'string',
                                        'example' => 'xxxxxxxxxxxxxxxxx+YHAPgNwi7yfRecMFydL2uPOgBI7LDio0RkbYLmJfIxHM2nGBPdml7kYEOXmJp2aDhbvvwVYIyt/8iES/R6N208wQh0Pk2bu+/9dvalp6wOHF4gkFGhhTVFMuTDRhQlNDU0pWTXVLZzVVMXZGRHciBTQzMjc0KgVhbGljZTCpnJjwySk6BlJzYU1ENUJuCgExGmkKBUFsbG93Eh8KDEFjdGlvbkVxdWFscxIGQWN0aW9uGgcKBW9zczoqEj8KDlJlc291cmNlRXF1YWxzEghSZXNvdXJjZRojCiFhY3M6b3NzOio6NDMyNzQ6c2FtcGxlYm94L2FsaWNlLyo=',
                                    ],
                                    'ObjectKey' => [
                                        'description' => '文件在OSS上存储的完整文件名。',
                                        'type' => 'string',
                                        'example' => '1768723179523459/11/2018-05-07/cert.rsa',
                                    ],
                                    'AccessKeySecret' => [
                                        'description' => '临时的AccessKey Secret。',
                                        'type' => 'string',
                                        'example' => 'xxxxxxxxxxxxxxxxx',
                                    ],
                                    'AccessKeyId' => [
                                        'description' => '临时的AccessKey ID。',
                                        'type' => 'string',
                                        'example' => 'STS.xxxxxxxxxxxxxxxxx',
                                    ],
                                    'Bucket' => [
                                        'description' => '上传到指定的Bucket。',
                                        'type' => 'string',
                                        'example' => 'xxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7676B259-FFA5-4971-A9D7-7B3F48D1DEEB\\",\\n  \\"OssUploadMeta\\": {\\n    \\"AccessKeySecret\\": \\"xxxxxxxxxxxxxxxxx\\",\\n    \\"SecurityToken\\": \\"xxxxxxxxxxxxxxxxx+YHAPgNwi7yfRecMFydL2uPOgBI7LDio0RkbYLmJfIxHM2nGBPdml7kYEOXmJp2aDhbvvwVYIyt/8iES/R6N208wQh0Pk2bu+/9dvalp6wOHF4gkFGhhTVFMuTDRhQlNDU0pWTXVLZzVVMXZGRHciBTQzMjc0KgVhbGljZTCpnJjwySk6BlJzYU1ENUJuCgExGmkKBUFsbG93Eh8KDEFjdGlvbkVxdWFscxIGQWN0aW9uGgcKBW9zczoqEj8KDlJlc291cmNlRXF1YWxzEghSZXNvdXJjZRojCiFhY3M6b3NzOio6NDMyNzQ6c2FtcGxlYm94L2FsaWNlLyo=\\",\\n    \\"ObjectKey\\": \\"1768723179523459/11/2018-05-07/cert.rsa\\",\\n    \\"AccessKeyId\\": \\"STS.xxxxxxxxxxxxxxxxx\\",\\n    \\"Bucket\\": \\"xxxx\\"\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NotFoundProject\\",\\n  \\"Message\\": \\"Cannot find the specified project\\"\\n}"},{"type":"xml","example":"<RequestId>F3BAE77D-1954-48C5-95F6-D4937B29E2F4</RequestId>\\n<OssUploadMeta>\\n    <AccessKeyId>STS.xxxxxxxxxxxxxxxxx</AccessKeyId>\\n    <AccessKeySecret>xxxxxxxxxxxxxxxxx</AccessKeySecret>\\n    <Bucket>xxx</Bucket>\\n    <ObjectKey>1768723179523459/11/2018-05-07/cert.rsa</ObjectKey>\\n    <SecurityToken>xxxxxxxxxxxxxxxxx+YHAPgNwi7yfRecMFydL2uPOgBI7LDio0RkbYLmJfIxHM2nGBPdml7kYEOXmJp2aDhbvvwVYIyt/8iES/R6N208wQh0Pk2bu+/9dvalp6wOHF4gkFGhhTVFMuTDRhQlNDU0pWTXVLZzVVMXZGRHciBTQzMjc0KgVhbGljZTCpnJjwySk6BlJzYU1ENUJuCgExGmkKBUFsbG93Eh8KDEFjdGlvbkVxdWFscxIGQWN0aW9uGgcKBW9zczoqEj8KDlJlc291cmNlRXF1YWxzEghSZXNvdXJjZRojCiFhY3M6b3NzOio6NDMyNzQ6c2FtcGxlYm94L2FsaWNlLyo=</SecurityToken>\\n</OssUploadMeta>","errorExample":""}]',
            'title' => '获取文件上传OSS凭证',
            'summary' => '获取文件上传OSS的凭证，凭证具有一定的时效性，且凭证被赋予了有限的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GenerateSysAppDownloadInfo' => [
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
                    'name' => 'Plugins',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下载AiCC Container应用时，用户选择的插件集合，支持多选，以json数组存储。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"PkgName":"com.aliyun.aicc.yundevice","VersionCode":20180228},{"PkgName":"com.aliyun.aicc.remoteassistant","VersionCode":""}]',
                    ],
                ],
                [
                    'name' => 'SignMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名方式。取值：'."\n"
                            ."\n"
                            .'- **customized**：自定义签名'."\n"
                            .'- **platform**：由平台签名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'customized',
                    ],
                ],
                [
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统类型，1-Android。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PkgName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户选择下载的系统应用包名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'com.aliyun.aicc',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'CertFileObjectKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RSA证书文件上传OSS后，在OSS上的完整文件名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1768723179523459/11/2018-05-07/1525699039841.rsa',
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
                                'example' => 'F3BAE77D-1954-48C5-95F6-D4937B29E2F4',
                            ],
                            'SysAppDownloadInfo' => [
                                'description' => '系统应用下载信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Url' => [
                                        'description' => '下载地址。',
                                        'type' => 'string',
                                        'example' => 'http://iovcc-pm-tenant.oss-cn-shanghai.aliyuncs.com/1768723179523459/11/2018-05-07/1525699039841-com.aliyun.aicc-20180507.apk?OSSAccessKeyId=nz2pc56s936**9l&Expires=1141889120&Signature=vjbyPxybdZaNmGa%2ByT272YEAiv4%3D',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F3BAE77D-1954-48C5-95F6-D4937B29E2F4\\",\\n  \\"SysAppDownloadInfo\\": {\\n    \\"Url\\": \\"http://iovcc-pm-tenant.oss-cn-shanghai.aliyuncs.com/1768723179523459/11/2018-05-07/1525699039841-com.aliyun.aicc-20180507.apk?OSSAccessKeyId=nz2pc56s936**9l&Expires=1141889120&Signature=vjbyPxybdZaNmGa%2ByT272YEAiv4%3D\\"\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NotFoundProject\\",\\n  \\"Message\\": \\"Cannot find the specified project\\"\\n}"},{"type":"xml","example":"<GenerateSysAppDownloadInfoResponse>\\r\\n\\t<RequestId>F3BAE77D-1954-48C5-95F6-D4937B29E2F4</RequestId>\\r\\n\\t<SysAppDownloadInfo>\\r\\n\\t\\t<Url>http://iovcc-pm-tenant.oss-cn-shanghai.aliyuncs.com/1768723179523459/11/2018-05-07/1525699039841-com.aliyun.aicc-20180507.apk?OSSAccessKeyId=nz2pc56s936**9l&amp;Expires=1141889120&amp;Signature=vjbyPxybdZaNmGa%2ByT272YEAiv4%3D</Url>\\r\\n\\t</SysAppDownloadInfo>\\r\\n</GenerateSysAppDownloadInfoResponse>","errorExample":""}]',
            'title' => '获取IoVCC系统应用下载信息',
            'summary' => '调用GenerateSysAppDownloadInfo获取IoVCC系统应用下载信息。',
            'description' => '> 用户上传自己的证书文件(.rsa)，IoVCC根据用户上传的证书文件，生成对应的安全图片，并存储到用户下载的系统应用中。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetOssUploadMeta' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'Ext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件后缀',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'zip',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                            'OssUploadMeta' => [
                                'description' => '上传需要的信息',
                                'type' => 'object',
                                'properties' => [
                                    'AccessKey' => [
                                        'description' => '上传需要的信息',
                                        'type' => 'string',
                                        'example' => 'STS.xxxxxxxxxxx',
                                    ],
                                    'Signature' => [
                                        'description' => '签名',
                                        'type' => 'string',
                                        'example' => 'xxxxxxxxxxxx=',
                                    ],
                                    'Host' => [
                                        'description' => '上传的OSS服务器地址',
                                        'type' => 'string',
                                        'example' => 'http://xxxxxx.oss-cn-shanghai.aliyuncs.com',
                                    ],
                                    'Policy' => [
                                        'description' => 'OSS上传文件的Policy',
                                        'type' => 'string',
                                        'example' => 'xxxxxxxxxxxxxx',
                                    ],
                                    'SecurityToken' => [
                                        'description' => 'STS token',
                                        'type' => 'string',
                                        'example' => 'xxxxxxxxxxxxxx',
                                    ],
                                    'ObjectKey' => [
                                        'description' => '上传文件的目标路径',
                                        'type' => 'string',
                                        'example' => '11/1527911483513.zip',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"OssUploadMeta\\": {\\n    \\"AccessKey\\": \\"STS.xxxxxxxxxxx\\",\\n    \\"Signature\\": \\"xxxxxxxxxxxx=\\",\\n    \\"Host\\": \\"http://xxxxxx.oss-cn-shanghai.aliyuncs.com\\",\\n    \\"Policy\\": \\"xxxxxxxxxxxxxx\\",\\n    \\"SecurityToken\\": \\"xxxxxxxxxxxxxx\\",\\n    \\"ObjectKey\\": \\"11/1527911483513.zip\\"\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermissionToAccessProject\\",\\n  \\"Message\\": \\"User is not authorized to access the specified project.\\"\\n}"},{"type":"xml","example":"<RequestId>4EFF678D-DD88-4AEB-B81C-B760AFDFA250</RequestId>\\n<OssUploadMeta>\\n    <Policy>xxxxxxxxx</Policy>\\n    <SecurityToken>xxxxxxxxxx</SecurityToken>\\n    <Signature>xxxxxxxxxxx=</Signature>\\n    <ObjectKey>11/1527911483513.zip</ObjectKey>\\n    <Host>http://xxxxxxx.oss-cn-shanghai.aliyuncs.com</Host>\\n    <AccessKey>STS.xxxxxxxx</AccessKey>\\n</OssUploadMeta>","errorExample":""}]',
            'title' => '获取上传升级包到OSS所需信息',
            'summary' => '获取上传升级包到OSS所需要的STS token和Policy等信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListApiGatewayApps' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '11',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ApiGatewayApps' => [
                                'description' => '关联的网关app信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'GatewayAppKey' => [
                                            'description' => 'API网关应用AppKey。',
                                            'type' => 'string',
                                            'example' => '24659924',
                                        ],
                                        'Status' => [
                                            'description' => '状态。0表示正常，1表示禁用。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'GatewayAppSecret' => [
                                            'description' => 'API网关应用AppSecret，接口不会返回完整的AppSecret，只显示头尾几个字符。',
                                            'type' => 'string',
                                            'example' => 'a******1',
                                        ],
                                        'GatewayAppId' => [
                                            'description' => 'API网关应用ID。',
                                            'type' => 'string',
                                            'example' => '1111111',
                                        ],
                                        'UserId' => [
                                            'description' => '所属用户ID。',
                                            'type' => 'string',
                                            'example' => '1768723179523459',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => '11',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1508400744000',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1525340035000',
                                        ],
                                        'Id' => [
                                            'description' => '主键ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '8',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9CC2A1F1-DAE4-47DA-A682-240AF2DEED84',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9CC2A1F1-DAE4-47DA-A682-240AF2DEED84\\",\\n  \\"ApiGatewayApps\\": [\\n    {\\n      \\"GatewayAppKey\\": \\"24659924\\",\\n      \\"Status\\": 0,\\n      \\"GatewayAppSecret\\": \\"a******1\\",\\n      \\"GatewayAppId\\": \\"1111111\\",\\n      \\"UserId\\": \\"1768723179523459\\",\\n      \\"ProjectId\\": \\"11\\",\\n      \\"GmtCreate\\": 1508400744000,\\n      \\"GmtModified\\": 1525340035000,\\n      \\"Id\\": 8\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NotFoundProject\\",\\n  \\"Message\\": \\"Cannot find the specified project\\"\\n}"},{"type":"xml","example":"<ListApiGatewayAppsResponse>\\r\\n\\t<ApiGatewayApps>\\r\\n\\t\\t<Status>0</Status>\\r\\n\\t\\t<GatewayAppId>1111111</GatewayAppId>\\r\\n\\t\\t<Id>8</Id>\\r\\n\\t\\t<UserId>1768723179523459</UserId>\\r\\n\\t\\t<GatewayAppKey>24659924</GatewayAppKey>\\r\\n\\t\\t<GmtCreate>1508400744000</GmtCreate>\\r\\n\\t\\t<GmtModified>1525340035000</GmtModified>\\r\\n\\t\\t<ProjectId>11</ProjectId>\\r\\n\\t\\t<GatewayAppSecret>a******1</GatewayAppSecret>\\r\\n\\t</ApiGatewayApps>\\r\\n\\t<RequestId>9CC2A1F1-DAE4-47DA-A682-240AF2DEED84</RequestId>\\r\\n</ListApiGatewayAppsResponse>","errorExample":""}]',
            'title' => '查询项目关联的网关 APP 的信息',
            'summary' => '调用ListApiGatewayApps查询项目关联的网关app的信息。',
            'description' => '> 目前限制只能关联一个网关app。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListApps' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PV37HJ8Q',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'Apps' => [
                                'description' => '自定义应用对象列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AppName' => [
                                            'description' => '应用名称',
                                            'type' => 'string',
                                            'example' => 'app_test',
                                        ],
                                        'AppKey' => [
                                            'description' => '应用标识',
                                            'type' => 'string',
                                            'example' => 'ZBjeuffe',
                                        ],
                                        'OsType' => [
                                            'description' => '应用运行系统类型。'."\n"
                                                ."\n"
                                                .'- 0：YunOS'."\n"
                                                .'- 1：Android'."\n"
                                                .'- 2：iOS',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'AppPackage' => [
                                            'description' => '应用包名',
                                            'type' => 'string',
                                            'example' => 'com.aliyun.test',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"Apps\\": [\\n    {\\n      \\"AppName\\": \\"app_test\\",\\n      \\"AppKey\\": \\"ZBjeuffe\\",\\n      \\"OsType\\": 1,\\n      \\"AppPackage\\": \\"com.aliyun.test\\"\\n    }\\n  ]\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The Type  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<ListAppsResponse>\\n\\t<Apps>\\n\\t\\t<AppKey>ZBjeuffe</AppKey>\\n\\t\\t<AppName>app_test</AppName>\\n\\t\\t<AppPackage>com.aliyun.test</AppPackage>\\n\\t\\t<OsType>6</OsType>\\n\\t</Apps>\\n\\t<RequestId>D1BE8AC4-BE5B-4B04-B78B-A64C6BDB2AC2</RequestId>\\n</ListAppsResponse>","errorExample":""}]',
            'title' => '获取项目工程下应用列表',
            'summary' => '根据项目工程ID，获取项目工程下应用列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListClientPlugins' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统类型，1-Android。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '647D4B28-7646-424E-88DD-61B7969E5C1E',
                            ],
                            'ClientPlugins' => [
                                'description' => '客户端插件信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'PkgName' => [
                                            'description' => '插件包名',
                                            'type' => 'string',
                                            'example' => 'com.aliyun.aicc.yundevice',
                                        ],
                                        'Name' => [
                                            'description' => '插件名称',
                                            'type' => 'string',
                                            'example' => 'YunDevice',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"647D4B28-7646-424E-88DD-61B7969E5C1E\\",\\n  \\"ClientPlugins\\": [\\n    {\\n      \\"PkgName\\": \\"com.aliyun.aicc.yundevice\\",\\n      \\"Name\\": \\"YunDevice\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListClientPluginsResponse>\\r\\n\\t<RequestId>647D4B28-7646-424E-88DD-61B7969E5C1E</RequestId>\\r\\n\\t<ClientPlugins>\\r\\n\\t\\t<Name>YunDevice</Name>\\r\\n\\t\\t<PkgName>com.aliyun.aicc.yundevice</PkgName>\\r\\n\\t</ClientPlugins>\\r\\n\\t<ClientPlugins>\\r\\n\\t\\t<Name>RemoteAssistant</Name>\\r\\n\\t\\t<PkgName>com.aliyun.aicc.remoteassistant</PkgName>\\r\\n\\t</ClientPlugins>\\r\\n\\t<ClientPlugins>\\r\\n\\t\\t<Name>YunControl</Name>\\r\\n\\t\\t<PkgName>com.aliyun.aicc.yuncontrol</PkgName>\\r\\n\\t</ClientPlugins>\\r\\n</ListClientPluginsResponse>","errorExample":""}]',
            'title' => '查询客户端插件列表',
            'summary' => '调用ListClientPlugins查询客户端插件列表。',
            'description' => '> 在下载AiCC Container客户端app时，需要选择客户端插件，通过此接口查询插件列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDeviceBrands' => [
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
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'projectTest',
                    ],
                ],
                [
                    'name' => 'DeviceBrandId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的设备品牌ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DeviceBrand',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的设备品牌名称，支持模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Tmall',
                    ],
                ],
                [
                    'name' => 'Start',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回列表起始位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Length',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最多返回记录条数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DeviceBrands' => [
                                'description' => '查询结果。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceBrandId' => [
                                            'description' => '品牌ID'."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'Description' => [
                                            'description' => '品牌描述'."\n",
                                            'type' => 'string',
                                            'example' => '荣威	',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID'."\n",
                                            'type' => 'string',
                                            'example' => 'projectTest',
                                        ],
                                        'Manufacture' => [
                                            'description' => '生产厂商'."\n",
                                            'type' => 'string',
                                            'example' => 'SAIC',
                                        ],
                                        'DeviceBrand' => [
                                            'description' => '品牌名称'."\n",
                                            'type' => 'string',
                                            'example' => 'ROEWE',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9c7a3b09-a69a-43f5-8bf2-84f7119810eb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9c7a3b09-a69a-43f5-8bf2-84f7119810eb\\",\\n  \\"DeviceBrands\\": [\\n    {\\n      \\"Manufacture\\": \\"SAIC\\",\\n      \\"DeviceBrandId\\": 1,\\n      \\"Description\\": \\"荣威\\\\t\\",\\n      \\"DeviceBrand\\": \\"ROEWE\\",\\n      \\"ProjectId\\": \\"projectTest\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Code\\":\\"NoPermissionToAccessProject\\",\\n  \\"HostId\\":\\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Message\\":\\"User is not authorized to access the specified project.\\",\\n  \\"RequestId\\":\\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}"},{"type":"xml","example":"<ListDeviceBrandsResponse>\\r\\n\\t<DeviceBrands>\\r\\n\\t\\t<Description>荣威</Description>\\r\\n\\t\\t<DeviceBrand>ROEWE</DeviceBrand>\\r\\n\\t\\t<DeviceBrandId>1</DeviceBrandId>\\r\\n\\t\\t<Manufacture>SAIC</Manufacture>\\r\\n\\t\\t<ProjectId>projectTest</ProjectId>\\r\\n\\t</DeviceBrands>\\r\\n\\t<RequestId>E94C9864-56FB-44AD-AC0C-A1CEFB332254</RequestId>\\r\\n</ListDeviceBrandsResponse>","errorExample":""}]',
            'title' => '查询获取品牌列表',
            'summary' => '根据品牌ID或根据品牌名称，模糊查询获取品牌列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListPreChecks' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求编号',
                                'type' => 'string',
                                'example' => 'BB80AC68-1E8A-4A46-B348-7D875AE9132A',
                            ],
                            'PreChecks' => [
                                'description' => '预检返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '检查项',
                                            'type' => 'string',
                                            'example' => 'IovccEnabled',
                                        ],
                                        'Link' => [
                                            'description' => '检查项主页',
                                            'type' => 'string',
                                            'example' => 'https://www.aliyun.com/product/iovcc',
                                        ],
                                        'Price' => [
                                            'description' => '检查项收费模式',
                                            'type' => 'string',
                                            'example' => 'FreeTrial',
                                        ],
                                        'State' => [
                                            'description' => '检查结果',
                                            'type' => 'string',
                                            'example' => 'Enabled',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BB80AC68-1E8A-4A46-B348-7D875AE9132A\\",\\n  \\"PreChecks\\": [\\n    {\\n      \\"Key\\": \\"IovccEnabled\\",\\n      \\"Link\\": \\"https://www.aliyun.com/product/iovcc\\",\\n      \\"Price\\": \\"FreeTrial\\",\\n      \\"State\\": \\"Enabled\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListPreChecksResponse>\\n\\t<PreChecks>\\n\\t\\t<Link>https://www.aliyun.com/product/iovcc</Link>\\n\\t\\t<Key>IovccEnabled</Key>\\n\\t\\t<State>Enabled</State>\\n\\t\\t<Price>FreeTrial</Price>\\n\\t</PreChecks>\\n\\t<RequestId>D1BE8AC4-BE5B-4B04-B78B-A64C6BDB2AC2</RequestId>\\n</ListPreChecksResponse>","errorExample":""}]',
            'title' => '查询预检查结果',
            'summary' => '调用ListPreChecks查询预检查结果。',
            'description' => '> 查询用户是否已开通本产品以及依赖的其它云产品。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRpcServices' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sfgsghd6',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询页码',
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
                        'description' => '分页查询每页数据集数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'RpcServices' => [
                                'description' => 'Rpc服务接口分页查询数据对象',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页对象',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '分页页码',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TotalPageCount' => [
                                                'description' => '总分页数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'PageSize' => [
                                                'description' => '分页每页数据集大小',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                            'TotalCount' => [
                                                'description' => '数据集总数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '30',
                                            ],
                                        ],
                                    ],
                                    'List' => [
                                        'description' => 'Rpc服务接口注册列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'MethodName' => [
                                                    'description' => '方法名称',
                                                    'type' => 'string',
                                                    'example' => 'rpcTest',
                                                ],
                                                'Type' => [
                                                    'description' => '调用方式，包括http及hsf两种。',
                                                    'type' => 'string',
                                                    'example' => 'http',
                                                ],
                                                'InterfaceName' => [
                                                    'description' => '接口名称',
                                                    'type' => 'string',
                                                    'example' => 'https://portal.aicc.aliyun.com/rpcServiceTest.html',
                                                ],
                                                'Params' => [
                                                    'description' => '接口参数',
                                                    'type' => 'string',
                                                    'example' => 'param1,param2',
                                                ],
                                                'AppKey' => [
                                                    'description' => 'cmns客户端应用appKey',
                                                    'type' => 'string',
                                                    'example' => 'aorlFafJ',
                                                ],
                                                'GroupName' => [
                                                    'description' => '服务分组名称',
                                                    'type' => 'string',
                                                    'example' => 'lbs',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '服务注册时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1525684245000',
                                                ],
                                                'IsDelete' => [
                                                    'description' => '是否逻辑删除，**Y**为已删除，**N**为未删除。',
                                                    'type' => 'string',
                                                    'example' => 'N',
                                                ],
                                                'VersionCode' => [
                                                    'description' => '版本号',
                                                    'type' => 'string',
                                                    'example' => '2018-05-01',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '服务修改时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1525684245000',
                                                ],
                                                'Id' => [
                                                    'description' => '记录ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"RpcServices\\": {\\n    \\"List\\": [\\n      {\\n        \\"MethodName\\": \\"rpcTest\\",\\n        \\"Type\\": \\"http\\",\\n        \\"InterfaceName\\": \\"https://portal.aicc.aliyun.com/rpcServiceTest.html\\",\\n        \\"Params\\": \\"param1,param2\\",\\n        \\"AppKey\\": \\"aorlFafJ\\",\\n        \\"GroupName\\": \\"lbs\\",\\n        \\"GmtCreate\\": 1525684245000,\\n        \\"IsDelete\\": \\"N\\",\\n        \\"VersionCode\\": \\"2018-05-01\\",\\n        \\"GmtModified\\": 1525684245000,\\n        \\"Id\\": 1\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"TotalPageCount\\": 2,\\n      \\"PageSize\\": 20,\\n      \\"TotalCount\\": 30\\n    }\\n  }\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The ProjectId  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<ListRpcServicesResponse>\\r\\n\\t<RpcServices>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<TotalCount>2</TotalCount>\\r\\n\\t\\t\\t<TotalPageCount>1</TotalPageCount>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<PageSize>20</PageSize>\\r\\n\\t\\t</Pagination>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<Id>1</Id>\\r\\n\\t\\t\\t<AppKey>cH8Rj1CF</AppKey>\\r\\n\\t\\t\\t<Method>rpcTest1</Method>\\r\\n            <MethodName>rpcTest1</MethodName>\\r\\n            <VersionCode>2018-05-01</VersionCode>  \\r\\n\\t\\t\\t<InterfaceName>https://portal.aicc.aliyun.com/rpcServiceTest.html</InterfaceName>\\r\\n\\t\\t\\t<GroupName>rpcTest</GroupName>\\r\\n\\t\\t\\t<Version>1.0.0</Version>\\r\\n\\t\\t\\t<Type>http</Type>\\r\\n\\t\\t\\t<Params>param1,param2</Params>\\r\\n\\t\\t\\t<IsDelete>N</IsDelete>\\r\\n\\t\\t\\t<GmtCreate>1513846288000</GmtCreate>\\r\\n\\t\\t\\t<GmtModified>1513846288000</GmtModified>\\r\\n\\t\\t</List>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<Id>2</Id>\\r\\n\\t\\t\\t<AppKey>cH8Rj1CF</AppKey>\\r\\n\\t\\t\\t<Method>rpcTest2</Method>\\r\\n            <MethodName>rpcTest2</MethodName>\\r\\n            <VersionCode>2018-05-02</VersionCode>\\r\\n\\t\\t\\t<InterfaceName>https://portal.aicc.aliyun.com/rpcServiceTest.html</InterfaceName>\\r\\n\\t\\t\\t<GroupName>rpcTest</GroupName>\\r\\n\\t\\t\\t<Version>1.0.0</Version>\\r\\n\\t\\t\\t<Type>http</Type>\\r\\n\\t\\t\\t<Params>param1,param2</Params>\\r\\n\\t\\t\\t<IsDelete>N</IsDelete>\\r\\n\\t\\t\\t<GmtCreate>1513846284000</GmtCreate>\\r\\n\\t\\t\\t<GmtModified>1513846284000</GmtModified>\\r\\n\\t\\t</List>\\r\\n\\t</RpcServices>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListRpcServicesResponse>","errorExample":""}]',
            'title' => '查询Rpc服务接口注册记录列表',
            'summary' => '调用ListRpcServices查询Rpc服务接口注册记录列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSupportFeatures' => [
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
                'operationType' => 'list',
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
                                'example' => '1B0DA203-B3BA-43CD-9506-5DF33ACEFF26',
                            ],
                            'SupportFeatures' => [
                                'description' => '已开通的服务模块',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '服务名称',
                                            'type' => 'string',
                                            'example' => 'OTA',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1B0DA203-B3BA-43CD-9506-5DF33ACEFF26\\",\\n  \\"SupportFeatures\\": [\\n    {\\n      \\"Name\\": \\"OTA\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"InvalidTenant\\",\\n  \\"Message\\": \\"User is not a valid tenant\\"\\n}"},{"type":"xml","example":"<ListSupportFeaturesResponse>\\r\\n\\t<SupportFeatures>\\r\\n\\t\\t<Name>OTA</Name>\\r\\n\\t</SupportFeatures>\\r\\n\\t<SupportFeatures>\\r\\n\\t\\t<Name>DIS</Name>\\r\\n\\t</SupportFeatures>\\r\\n\\t<SupportFeatures>\\r\\n\\t\\t<Name>IAS</Name>\\r\\n\\t</SupportFeatures>\\r\\n\\t<SupportFeatures>\\r\\n\\t\\t<Name>RA</Name>\\r\\n\\t</SupportFeatures>\\r\\n\\t<SupportFeatures>\\r\\n\\t\\t<Name>CMNS</Name>\\r\\n\\t</SupportFeatures>\\r\\n\\t<RequestId>1B0DA203-B3BA-43CD-9506-5DF33ACEFF26</RequestId>\\r\\n</ListSupportFeaturesResponse>","errorExample":""}]',
            'title' => '查询已开通的服务列表',
            'summary' => '调用ListSupportFeatures查询已开通的服务列表。',
            'description' => '> 查询用户已开通哪些IoVCC的服务模块。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListUpstreamAppKeyRelations' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询每页数据集大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fsgtd5y5r',
                    ],
                ],
                [
                    'name' => 'AppServerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端应用ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'RelationList' => [
                                'description' => '应用映射关系分页查询数据对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页对象。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '分页查询页码',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TotalPageCount' => [
                                                'description' => '总分页数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'PageSize' => [
                                                'description' => '分页每页数据集大小',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                            'TotalCount' => [
                                                'description' => '数据集总数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                        ],
                                    ],
                                    'List' => [
                                        'description' => '映射关系列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AppName' => [
                                                    'description' => '应用名称。',
                                                    'type' => 'string',
                                                    'example' => '会员中心',
                                                ],
                                                'AppKey' => [
                                                    'description' => '客户端应用标识，为cmns应用appKey。',
                                                    'type' => 'string',
                                                    'example' => 'afsgwewt',
                                                ],
                                                'AppPackage' => [
                                                    'description' => '应用包名。',
                                                    'type' => 'string',
                                                    'example' => 'com.test.member',
                                                ],
                                                'ProjectId' => [
                                                    'description' => 'iovcc项目工程ID。',
                                                    'type' => 'string',
                                                    'example' => 'fsgtd5y5r',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '记录创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1525696592000',
                                                ],
                                                'PAppKey' => [
                                                    'description' => '服务端应用标识。',
                                                    'type' => 'string',
                                                    'example' => 'cfsgweFv',
                                                ],
                                                'Id' => [
                                                    'description' => '记录ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"RelationList\\": {\\n    \\"List\\": [\\n      {\\n        \\"AppName\\": \\"会员中心\\",\\n        \\"AppKey\\": \\"afsgwewt\\",\\n        \\"AppPackage\\": \\"com.test.member\\",\\n        \\"ProjectId\\": \\"fsgtd5y5r\\",\\n        \\"GmtCreate\\": 1525696592000,\\n        \\"PAppKey\\": \\"cfsgweFv\\",\\n        \\"Id\\": 1\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"TotalPageCount\\": 1,\\n      \\"PageSize\\": 20,\\n      \\"TotalCount\\": 2\\n    }\\n  }\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The AppServerId  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<ListUpstreamAppKeyRelationsResponse>\\r\\n\\t<RelationList>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<AppKey>gU4bcOff</AppKey>\\r\\n            <AppName>会员中心</AppName>\\r\\n            <AppPackage>com.test.member</AppPackage>\\r\\n\\t\\t\\t<GmtCreate>1525696754000</GmtCreate>\\r\\n\\t\\t\\t<Id>275</Id>\\r\\n\\t\\t\\t<PAppKey>JU3ffOub</PAppKey>\\r\\n\\t\\t\\t<ProjectId>fJCR8g2I</ProjectId>\\r\\n\\t\\t</List>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<PageSize>20</PageSize>\\r\\n\\t\\t\\t<TotalCount>1</TotalCount>\\r\\n\\t\\t\\t<TotalPageCount>1</TotalPageCount>\\r\\n\\t\\t</Pagination>\\r\\n\\t</RelationList>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListUpstreamAppKeyRelationsResponse>","errorExample":""}]',
            'title' => '查询上行消息客户端与服务端映射列表',
            'summary' => '根据服务端应用ID，查询上行消息客户端与服务端映射列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListUpstreamAppServers' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iovcc项目工程ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fsgtd5y5r',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询页码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询每页数据集大小。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
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
                                'example' => '629586FE-CB2E-4742-995E-121F952CEB72',
                            ],
                            'AppServers' => [
                                'description' => '服务端应用分页查询数据对象。',
                                'type' => 'object',
                                'properties' => [
                                    'Pagination' => [
                                        'description' => '分页对象',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageIndex' => [
                                                'description' => '分页查询页码',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TotalPageCount' => [
                                                'description' => '总分页数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'PageSize' => [
                                                'description' => '分页每页数据集大小',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                            'TotalCount' => [
                                                'description' => '数据集总数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                        ],
                                    ],
                                    'List' => [
                                        'description' => '服务端应用列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ProjectId' => [
                                                    'description' => 'iovcc项目工程ID',
                                                    'type' => 'string',
                                                    'example' => 'Gs6st7ye',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1525701500000',
                                                ],
                                                'Tags' => [
                                                    'description' => '上行消息业务标签。多个标签通过英文逗号拼接。',
                                                    'type' => 'string',
                                                    'example' => 'tag1,tag2,tag3',
                                                ],
                                                'QueueNameList' => [
                                                    'description' => 'mns消费队列列表，应用服务端通过该队列接收上行消息，多个队列通过英文逗号拼接。',
                                                    'type' => 'string',
                                                    'example' => 'com-yunos-iovcc-cmns-forward-qa-mRFG7Bee-tag1,com-yunos-iovcc-cmns-forward-qa-mRFG7Bee-tag2,com-yunos-aicc-cmns-forward-qa-mRFG7Bee-tag3',
                                                ],
                                                'PAppKey' => [
                                                    'description' => '服务端应用唯一标识',
                                                    'type' => 'string',
                                                    'example' => 'fsgstyye',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '修改时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1525701500000',
                                                ],
                                                'Name' => [
                                                    'description' => '服务端应用名称',
                                                    'type' => 'string',
                                                    'example' => 'iovcc-test',
                                                ],
                                                'Id' => [
                                                    'description' => '记录ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"629586FE-CB2E-4742-995E-121F952CEB72\\",\\n  \\"AppServers\\": {\\n    \\"List\\": [\\n      {\\n        \\"ProjectId\\": \\"Gs6st7ye\\",\\n        \\"GmtCreate\\": 1525701500000,\\n        \\"Tags\\": \\"tag1,tag2,tag3\\",\\n        \\"QueueNameList\\": \\"com-yunos-iovcc-cmns-forward-qa-mRFG7Bee-tag1,com-yunos-iovcc-cmns-forward-qa-mRFG7Bee-tag2,com-yunos-aicc-cmns-forward-qa-mRFG7Bee-tag3\\",\\n        \\"PAppKey\\": \\"fsgstyye\\",\\n        \\"GmtModified\\": 1525701500000,\\n        \\"Name\\": \\"iovcc-test\\",\\n        \\"Id\\": 1\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageIndex\\": 1,\\n      \\"TotalPageCount\\": 1,\\n      \\"PageSize\\": 20,\\n      \\"TotalCount\\": 2\\n    }\\n  }\\n}","errorExample":"{\\n    \\"Code\\":\\"MissingParameter\\",\\n    \\"Message\\":\\"The ProjectId  is mandatory for this action\\",\\n    \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n    \\"RequestId\\":\\"629586FE-CB2E-4742-995E-121F952CEB72\\"\\n}"},{"type":"xml","example":"<ListUpstreamAppServersResponse>\\r\\n\\t<AppServers>\\r\\n\\t\\t<Pagination>\\r\\n\\t\\t\\t<TotalCount>2</TotalCount>\\r\\n\\t\\t\\t<TotalPageCount>1</TotalPageCount>\\r\\n\\t\\t\\t<PageIndex>1</PageIndex>\\r\\n\\t\\t\\t<PageSize>20</PageSize>\\r\\n\\t\\t</Pagination>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<Id>7</Id>\\r\\n\\t\\t\\t<PAppKey>jRfe7P5k</PAppKey>\\r\\n\\t\\t\\t<ProjectId>8ZJH0595</ProjectId>\\r\\n\\t\\t\\t<Name>test1</Name>\\r\\n\\t\\t\\t<Tags>testTag</Tags>\\r\\n\\t\\t\\t<IsDelete>N</IsDelete>\\r\\n\\t\\t\\t<GmtCreate>1514357674000</GmtCreate>\\r\\n\\t\\t\\t<GmtModified>1525427071182</GmtModified>\\r\\n\\t\\t\\t<QueueNameList>com-yunos-iovcc-cmns-forward-qa-jRfe7P5k-testTag</QueueNameList>\\r\\n\\t\\t</List>\\r\\n\\t\\t<List>\\r\\n\\t\\t\\t<Id>6</Id>\\r\\n\\t\\t\\t<PAppKey>mRFG7Bee</PAppKey>\\r\\n\\t\\t\\t<ProjectId>8ZJH0595</ProjectId>\\r\\n\\t\\t\\t<Name>test2</Name>\\r\\n\\t\\t\\t<Tags>tag1,tag2,tag3</Tags>\\r\\n\\t\\t\\t<IsDelete>N</IsDelete>\\r\\n\\t\\t\\t<GmtCreate>1514344420000</GmtCreate>\\r\\n\\t\\t\\t<GmtModified>1525427071182</GmtModified>\\r\\n\\t\\t\\t<QueueNameList>com-yunos-iovcc-cmns-forward-qa-mRFG7Bee-tag1,com-yunos-iovcc-cmns-forward-qa-mRFG7Bee-tag2,com-yunos-aicc-cmns-forward-qa-mRFG7Bee-tag3</QueueNameList>\\r\\n\\t\\t</List>\\r\\n\\t</AppServers>\\r\\n\\t<RequestId>629586FE-CB2E-4742-995E-121F952CEB72</RequestId>\\r\\n</ListUpstreamAppServersResponse>","errorExample":""}]',
            'title' => '获取上行消息服务端应用列表',
            'summary' => '根据项目工程ID获取上行消息服务端应用列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateVersionPrepublishActiveStatus' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'P0VFCREU',
                    ],
                ],
                [
                    'name' => 'PrepublishId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预发布ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'IsActive',
                    'in' => 'query',
                    'schema' => [
                        'description' => '预发布是否为启用状态',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Y',
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
                                'example' => '6F25F67C-F411-499F-BCE2-67CA563CB064',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"6F25F67C-F411-499F-BCE2-67CA563CB064\\",\\n  \\"HostId\\": \\"iovcc.cn-shanghai.aliyuncs.com\\",\\n  \\"Code\\": \\"NoPermission.NotOwner\\",\\n  \\"Message\\": \\"You have no permission because you are not the owner of the data\\"\\n}"},{"type":"xml","example":"<UpdateVersionPrepublishActiveStatusResponse>\\r\\n\\t<RequestId>6F25F67C-F411-499F-BCE2-67CA563CB064</RequestId>\\r\\n</UpdateVersionPrepublishActiveStatusResponse>","errorExample":""}]',
            'title' => '更新指定预发布禁用启用状态',
            'summary' => '调用UpdateVersionPrepublishActiveStatus更新指定预发布禁用启用状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'iovcc.cn-shanghai.aliyuncs.com',
        ],
    ],
];
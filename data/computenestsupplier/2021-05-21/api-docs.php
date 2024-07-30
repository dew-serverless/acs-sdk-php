<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ComputeNestSupplier',
        'version' => '2021-05-21',
    ],
    'directories' => [
        'GetArtifactRepositoryCredentials',
        'CreateArtifact',
        'DeleteArtifact',
        'ReleaseArtifact',
        'ListArtifacts',
        'GetArtifact',
        'ListArtifactVersions',
        'UpdateArtifact',
        'CreateService',
        'RegisterService',
        'UpdateService',
        'UpgradeServiceInstance',
        'UpdateServiceInstanceAttribute',
        'DeleteService',
        'ListServices',
        'GetService',
        'DeployServiceInstance',
        'GetServiceInstance',
        'ListServiceInstances',
        'ListServiceUsages',
        'GetServiceEstimateCost',
        'GetUploadCredentials',
        'ModifyServiceInstanceResources',
        'ContinueDeployServiceInstance',
        'CreateServiceInstance',
        'DeleteServiceInstances',
        'UpdateServiceInstanceSpec',
        'PushMeteringData',
        'ListAcrImageRepositories',
        'ListAcrImageTags',
        'GetServiceTemplateParameterConstraints',
        'AddServiceSharedAccounts',
        'StartServiceInstance',
        'RestartServiceInstance',
        'StopServiceInstance',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetArtifactRepositoryCredentials' => [
            'summary' => '获取部署物上传所需的凭证。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ArtifactType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物类型。可能的值：'."\n"
                            ."\n"
                            .'- File：Oss文件。'."\n"
                            ."\n"
                            .'- AcrImage：容器镜像。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'File',
                    ],
                ],
                [
                    'name' => 'DeployRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上传地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应数据结构。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '94E89857-B994-44B6-9C4F-DBD200E9XXXX',
                            ],
                            'ExpireDate' => [
                                'description' => '过期时间。',
                                'type' => 'string',
                                'example' => '1526549792000',
                            ],
                            'Credentials' => [
                                'description' => '访问凭证。',
                                'type' => 'object',
                                'properties' => [
                                    'Username' => [
                                        'description' => '用户名称。',
                                        'type' => 'string',
                                        'example' => 'xxx',
                                    ],
                                    'Password' => [
                                        'description' => '密码。',
                                        'type' => 'string',
                                        'example' => 'eyJ0aW1lIjoiMTUyNjU0OTc5:0705733****',
                                    ],
                                    'AccessKeyId' => [
                                        'description' => '访问密钥ID。',
                                        'type' => 'string',
                                        'example' => 'STS.xxx',
                                    ],
                                    'AccessKeySecret' => [
                                        'description' => '访问密钥secret值。',
                                        'type' => 'string',
                                        'example' => 'xxx',
                                    ],
                                    'SecurityToken' => [
                                        'description' => '安全令牌。',
                                        'type' => 'string',
                                        'example' => 'xxx',
                                    ],
                                ],
                            ],
                            'AvailableResources' => [
                                'description' => '可上传的资源信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '可上传的资源信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'oss-cn-hangzhou',
                                        ],
                                        'RepositoryName' => [
                                            'description' => '仓库名称。',
                                            'type' => 'string',
                                            'example' => 'computenest-artifacts-draft-cn-hangzhou',
                                        ],
                                        'Path' => [
                                            'description' => '路径。',
                                            'type' => 'string',
                                            'example' => '"/xxx/"',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94E89857-B994-44B6-9C4F-DBD200E9XXXX\\",\\n  \\"ExpireDate\\": \\"1526549792000\\",\\n  \\"Credentials\\": {\\n    \\"Username\\": \\"xxx\\",\\n    \\"Password\\": \\"eyJ0aW1lIjoiMTUyNjU0OTc5:0705733****\\",\\n    \\"AccessKeyId\\": \\"STS.xxx\\",\\n    \\"AccessKeySecret\\": \\"xxx\\",\\n    \\"SecurityToken\\": \\"xxx\\"\\n  },\\n  \\"AvailableResources\\": [\\n    {\\n      \\"RegionId\\": \\"oss-cn-hangzhou\\",\\n      \\"RepositoryName\\": \\"computenest-artifacts-draft-cn-hangzhou\\",\\n      \\"Path\\": \\"\\\\\\"/xxx/\\\\\\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '服务商获取上传部署物所需的访问凭证',
        ],
        'CreateArtifact' => [
            'summary' => '创建部署物。',
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
                'abilityTreeCode' => '131218',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest4Y9BYP',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ArtifactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'artifact-eea08d1e2d3a43aexxxx',
                    ],
                ],
                [
                    'name' => 'ArtifactType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物类型。可能的值：'."\n"
                            ."\n"
                            .'- EcsImage：ECS镜像部署物。'."\n"
                            ."\n"
                            .'- AcrImage：容器镜像部署物。'."\n"
                            ."\n"
                            .'- File：Oss文件部署物。'."\n"
                            ."\n"
                            .'- Script：脚本部署物。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'EcsImage',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Redhat8_5镜像',
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物版本名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Redhat8_0镜像',
                    ],
                ],
                [
                    'name' => 'ArtifactProperty',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '部署物属性。',
                        'type' => 'object',
                        'properties' => [
                            'Url' => [
                                'description' => '文件部署物的URL。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1309208528xxxxxx/template/2e1ce8fc-xxxx-481c-9e8e-789ba9db487d.json',
                            ],
                            'FileScriptMetadata' => [
                                'description' => '文件脚本元数据。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{\\"WorkDir\\":\\"/root\\",\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"echo hello\\"}',
                            ],
                            'RegionId' => [
                                'description' => '镜像地域。'."\n"
                                    ."\n\n"
                                    .'>该参数仅部署物为镜像部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cn-hangzhou',
                            ],
                            'ImageId' => [
                                'description' => '镜像ID。'."\n"
                                    ."\n"
                                    .'> 该参数仅部署物为镜像部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'm-0xij191j9cuev6xxxxxx',
                            ],
                            'CommodityCode' => [
                                'description' => '云市场商品code。'."\n"
                                    ."\n"
                                    .'> 该参数仅部署物为镜像部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cmjj00xxxx',
                            ],
                            'CommodityVersion' => [
                                'description' => '云市场商品版本。'."\n"
                                    ."\n"
                                    .'> 该参数仅部署物为镜像部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'V1.0',
                            ],
                            'ScriptMetadata' => [
                                'description' => '脚本部署物的脚本内容。'."\n"
                                    ."\n"
                                    .'> 该参数仅部署物为脚本部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"ScriptMetadata":"{\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"ls\\"}"}',
                            ],
                            'RepoName' => [
                                'description' => '指定镜像仓库名称。'."\n"
                                    .'> 该参数仅部署物为容器镜像部署物和helm部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'wordpress',
                            ],
                            'RepoId' => [
                                'description' => '镜像仓库ID。'."\n"
                                    .'> 该参数仅部署物为容器镜像部署物和helm部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'crr-d8o1nponyc2t1gcg',
                            ],
                            'Tag' => [
                                'description' => '镜像仓库对应的版本Tag。'."\n"
                                    .'> 该参数仅部署物为容器镜像部署物和helm部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'v1',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SupportRegionIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '支持地域。',
                        'type' => 'array',
                        'items' => [
                            'description' => '支持地域。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cn-hangzhou',
                        ],
                        'required' => false,
                        'maxItems' => 30,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzkt5buxxxxxx',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户自定义标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户自定义标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
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
                                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
                            ],
                            'ArtifactId' => [
                                'description' => '部署物ID。',
                                'type' => 'string',
                                'example' => 'artifact-eea08d1e2d3a43aexxxx',
                            ],
                            'ArtifactType' => [
                                'description' => '部署物类型。',
                                'type' => 'string',
                                'example' => 'EcsImage',
                            ],
                            'Name' => [
                                'description' => '部署物名称。',
                                'type' => 'string',
                                'example' => 'Redhat8_5镜像',
                            ],
                            'VersionName' => [
                                'description' => '部署物名称。',
                                'type' => 'string',
                                'example' => 'v1',
                            ],
                            'ArtifactVersion' => [
                                'description' => '部署物版本。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'Description' => [
                                'description' => '部署物描述。',
                                'type' => 'string',
                                'example' => 'Redhat8_0镜像',
                            ],
                            'GmtModified' => [
                                'description' => '修改时间。',
                                'type' => 'string',
                                'example' => '2022-11-11T12:00:00Z',
                            ],
                            'Status' => [
                                'description' => '状态。',
                                'type' => 'string',
                                'example' => 'Created',
                            ],
                            'MaxVersion' => [
                                'description' => '部署物的最新版本。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'ArtifactProperty' => [
                                'description' => '部署物属性。',
                                'type' => 'string',
                                'example' => '{\\"CommodityCode\\":\\"cmjj0005xxxx\\",\\"CommodityVersion\\":\\"V2022xxxx\\"}',
                            ],
                            'SupportRegionIds' => [
                                'description' => '部署物分发的地域ID。',
                                'type' => 'string',
                                'example' => '['."\n"
                                    .'			"cn-beijing",'."\n"
                                    .'			"cn-hangzhou",'."\n"
                                    .'			"cn-shanghai"'."\n"
                                    .'		]',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\",\\n  \\"ArtifactId\\": \\"artifact-eea08d1e2d3a43aexxxx\\",\\n  \\"ArtifactType\\": \\"EcsImage\\",\\n  \\"Name\\": \\"Redhat8_5镜像\\",\\n  \\"VersionName\\": \\"v1\\",\\n  \\"ArtifactVersion\\": \\"2\\",\\n  \\"Description\\": \\"Redhat8_0镜像\\",\\n  \\"GmtModified\\": \\"2022-11-11T12:00:00Z\\",\\n  \\"Status\\": \\"Created\\",\\n  \\"MaxVersion\\": 1,\\n  \\"ArtifactProperty\\": \\"{\\\\\\\\\\\\\\"CommodityCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cmjj0005xxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CommodityVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"V2022xxxx\\\\\\\\\\\\\\"}\\",\\n  \\"SupportRegionIds\\": \\"[\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-beijing\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-hangzhou\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-shanghai\\\\\\"\\\\n\\\\t\\\\t]\\"\\n}","type":"json"}]',
            'title' => '创建部署物',
        ],
        'DeleteArtifact' => [
            'summary' => '当您不再需要部署物或部署物对应版本，调用DeleteArtifact删除部署物。',
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
                    'name' => 'ArtifactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'artifact-eea08d1e2d3a43aexxxx',
                    ],
                ],
                [
                    'name' => 'ArtifactVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应数据结构。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\"\\n}","type":"json"}]',
            'title' => '删除部署物',
        ],
        'ReleaseArtifact' => [
            'summary' => '调用ReleaseArtifact发布部署物。',
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
                    'name' => 'ArtifactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'artifact-9feded91880e4c78xxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应数据结构。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3818BA7D-3F50-1A44-9FF3-04A52A59XXXX',
                            ],
                            'ArtifactId' => [
                                'description' => '部署物ID。',
                                'type' => 'string',
                                'example' => 'artifact-9feded91880e4c78xxxx',
                            ],
                            'ArtifactType' => [
                                'description' => '部署物类型。',
                                'type' => 'string',
                                'example' => 'File',
                            ],
                            'VersionName' => [
                                'description' => '部署物版本名称。',
                                'type' => 'string',
                                'example' => 'Oss关联升级测试',
                            ],
                            'ArtifactVersion' => [
                                'description' => '部署物版本。',
                                'type' => 'string',
                                'example' => 'draft',
                            ],
                            'Description' => [
                                'description' => '部署物描述。',
                                'type' => 'string',
                                'example' => '部署物描述',
                            ],
                            'GmtModified' => [
                                'description' => '修改时间。',
                                'type' => 'string',
                                'example' => '1650954178000',
                            ],
                            'Status' => [
                                'description' => '部署物的状态。可能的值：'."\n"
                                    ."\n"
                                    .'- Created：已创建。'."\n"
                                    ."\n"
                                    .'- Scanning：扫描中。'."\n"
                                    ."\n"
                                    .'- ScanFailed：扫描失败。'."\n"
                                    ."\n"
                                    .'- Delivering：分发中。'."\n"
                                    ."\n"
                                    .'- Available：可使用。'."\n"
                                    ."\n"
                                    .'- Deleted：已删除。',
                                'type' => 'string',
                                'example' => 'Created',
                            ],
                            'ArtifactProperty' => [
                                'description' => '部署物内容。',
                                'type' => 'string',
                                'example' => '"{\\"Url\\":\\"https://computenest-artifacts-draft-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/130920852836xxxx/cn-hangzhou/service-8072a04e5a134382xxxx/165095355xxxx/changes.txt\\",\\"ConfigurationMetadata\\":\\"{\\\\\\"WorkDir\\\\\\":\\\\\\"/root\\\\\\",\\\\\\"Platform\\\\\\":\\\\\\"Linux\\\\\\",\\\\\\"CommandType\\\\\\":\\\\\\"RunShellScript\\\\\\",\\\\\\"UpgradeScript\\\\\\":\\\\\\"cd /root\\\\\\\\ncp changes.txt cpchanges.txt\\\\\\\\nmv changes.txt mvchangge.txt\\\\\\"}\\"}"',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3818BA7D-3F50-1A44-9FF3-04A52A59XXXX\\",\\n  \\"ArtifactId\\": \\"artifact-9feded91880e4c78xxxx\\",\\n  \\"ArtifactType\\": \\"File\\",\\n  \\"VersionName\\": \\"Oss关联升级测试\\",\\n  \\"ArtifactVersion\\": \\"draft\\",\\n  \\"Description\\": \\"部署物描述\\",\\n  \\"GmtModified\\": \\"1650954178000\\",\\n  \\"Status\\": \\"Created\\",\\n  \\"ArtifactProperty\\": \\"\\\\\\"{\\\\\\\\\\\\\\"Url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"https://computenest-artifacts-draft-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/130920852836xxxx/cn-hangzhou/service-8072a04e5a134382xxxx/165095355xxxx/changes.txt\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ConfigurationMetadata\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"WorkDir\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"/root\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"Platform\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"Linux\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"CommandType\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"RunShellScript\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"UpgradeScript\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"cd /root\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ncp changes.txt cpchanges.txt\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\nmv changes.txt mvchangge.txt\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"}\\\\\\\\\\\\\\"}\\\\\\"\\"\\n}","type":"json"}]',
            'title' => '发布部署物',
        ],
        'ListArtifacts' => [
            'summary' => '调用ListArtifacts查询部署物列表。',
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
                'operationType' => 'list',
                'abilityTreeCode' => '132194',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest4Y9BYP',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '过滤器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤器。',
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'description' => '过滤器名称。可选择一个或多个名称进行查询。取值范围：'."\n"
                                        ."\n"
                                        .'- *Name*：按部署物名称进行模糊查询。'."\n"
                                        ."\n"
                                        .'- ArtifactId：部署物ID。'."\n"
                                        ."\n"
                                        .'- ArtifactType：部署物类型。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ArtifactType',
                                ],
                                'Values' => [
                                    'description' => '过滤器值列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '过滤器值列表。N取值范围为：1~10。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'value1',
                                    ],
                                    'required' => false,
                                    'maxItems' => 20,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
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
                        'example' => 'rg-aek25yfxxxxxxxx',
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
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应数据结构。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '46577928-3162-15A6-9084-69820EB9xxxx',
                            ],
                            'NextToken' => [
                                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                                'type' => 'string',
                                'example' => 'AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '符合条件的记录总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'Artifacts' => [
                                'description' => '部署物列表信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '部署物列表信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ArtifactId' => [
                                            'description' => '部署物ID。',
                                            'type' => 'string',
                                            'example' => 'artifact-eea08d1e2d3a43aexxxx',
                                        ],
                                        'ArtifactType' => [
                                            'description' => '部署物类型。',
                                            'type' => 'string',
                                            'example' => 'EcsImage',
                                        ],
                                        'Name' => [
                                            'description' => '部署物名称。',
                                            'type' => 'string',
                                            'example' => 'Redhat8_5镜像',
                                        ],
                                        'MaxVersion' => [
                                            'description' => '最新版本。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'Description' => [
                                            'description' => '部署物描述。',
                                            'type' => 'string',
                                            'example' => 'Redhat8_0镜像',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改时间。',
                                            'type' => 'string',
                                            'example' => '2022-10-20T02:19:55Z',
                                        ],
                                        'Status' => [
                                            'description' => '部署物的状态。可能的值：'."\n"
                                                ."\n"
                                                .'- Created：已创建。'."\n"
                                                ."\n"
                                                .'- Scanning：扫描中。'."\n"
                                                ."\n"
                                                .'- ScanFailed：扫描失败。'."\n"
                                                ."\n"
                                                .'- Delivering：分发中。'."\n"
                                                ."\n"
                                                .'- Available：可使用。'."\n"
                                                ."\n"
                                                .'- Deleted：已删除。',
                                            'type' => 'string',
                                            'example' => 'Created',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-aek25rexxxxxxxx',
                                        ],
                                        'Tags' => [
                                            'description' => '标签值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签值。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'key1',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'value1',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46577928-3162-15A6-9084-69820EB9xxxx\\",\\n  \\"NextToken\\": \\"AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=\\",\\n  \\"MaxResults\\": 20,\\n  \\"TotalCount\\": 2,\\n  \\"Artifacts\\": [\\n    {\\n      \\"ArtifactId\\": \\"artifact-eea08d1e2d3a43aexxxx\\",\\n      \\"ArtifactType\\": \\"EcsImage\\",\\n      \\"Name\\": \\"Redhat8_5镜像\\",\\n      \\"MaxVersion\\": \\"2\\",\\n      \\"Description\\": \\"Redhat8_0镜像\\",\\n      \\"GmtModified\\": \\"2022-10-20T02:19:55Z\\",\\n      \\"Status\\": \\"Created\\",\\n      \\"ResourceGroupId\\": \\"rg-aek25rexxxxxxxx\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"key1\\",\\n          \\"Value\\": \\"value1\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询部署物列表',
        ],
        'GetArtifact' => [
            'summary' => '调用GetArtifact查询部署物详情。',
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
                'abilityTreeCode' => '132197',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest4Y9BYP',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ArtifactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'artifact-eea08d1e2d3a43aexxxx',
                    ],
                ],
                [
                    'name' => 'ArtifactVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ArtifactName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gpu-test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应数据结构。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
                            ],
                            'ArtifactId' => [
                                'description' => '部署物ID。',
                                'type' => 'string',
                                'example' => 'artifact-eea08d1e2d3a43aexxxx',
                            ],
                            'ArtifactType' => [
                                'description' => '部署物类型。',
                                'type' => 'string',
                                'example' => 'EcsImage',
                            ],
                            'Name' => [
                                'description' => '部署物名称。',
                                'type' => 'string',
                                'example' => 'Redhat8_5镜像',
                            ],
                            'VersionName' => [
                                'description' => '部署物版本名称。',
                                'type' => 'string',
                                'example' => 'v1',
                            ],
                            'ArtifactVersion' => [
                                'description' => '部署物版本。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'Description' => [
                                'description' => '部署物描述。',
                                'type' => 'string',
                                'example' => 'Redhat8_0镜像',
                            ],
                            'GmtModified' => [
                                'description' => '修改时间。',
                                'type' => 'string',
                                'example' => '2022-10-20T02:19:55Z',
                            ],
                            'Status' => [
                                'description' => '状态。',
                                'type' => 'string',
                                'example' => 'Available',
                            ],
                            'MaxVersion' => [
                                'description' => '最新版本。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'ArtifactProperty' => [
                                'description' => '部署物属性。',
                                'type' => 'string',
                                'example' => '{\\"CommodityCode\\":\\"cmjj0005xxxx\\",\\"CommodityVersion\\":\\"V2022xxxx\\"}',
                            ],
                            'SupportRegionIds' => [
                                'description' => '部署物支持的地域ID。',
                                'type' => 'string',
                                'example' => '["cn-hangzhou","cn-beijing"]',
                            ],
                            'Progress' => [
                                'description' => '部署物分发进度。',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-aekzkt5buxxxxxx',
                            ],
                            'Tags' => [
                                'description' => '部署物标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '部署物标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '部署物标签键。',
                                            'type' => 'string',
                                            'example' => 'key1',
                                        ],
                                        'Value' => [
                                            'description' => '部署物标签值。',
                                            'type' => 'string',
                                            'example' => 'value1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\",\\n  \\"ArtifactId\\": \\"artifact-eea08d1e2d3a43aexxxx\\",\\n  \\"ArtifactType\\": \\"EcsImage\\",\\n  \\"Name\\": \\"Redhat8_5镜像\\",\\n  \\"VersionName\\": \\"v1\\",\\n  \\"ArtifactVersion\\": \\"2\\",\\n  \\"Description\\": \\"Redhat8_0镜像\\",\\n  \\"GmtModified\\": \\"2022-10-20T02:19:55Z\\",\\n  \\"Status\\": \\"Available\\",\\n  \\"MaxVersion\\": 2,\\n  \\"ArtifactProperty\\": \\"{\\\\\\\\\\\\\\"CommodityCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cmjj0005xxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CommodityVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"V2022xxxx\\\\\\\\\\\\\\"}\\",\\n  \\"SupportRegionIds\\": \\"[\\\\\\"cn-hangzhou\\\\\\",\\\\\\"cn-beijing\\\\\\"]\\",\\n  \\"Progress\\": \\"100\\",\\n  \\"ResourceGroupId\\": \\"rg-aekzkt5buxxxxxx\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"key1\\",\\n      \\"Value\\": \\"value1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询部署物详情',
        ],
        'ListArtifactVersions' => [
            'summary' => '调用ListArtifactVersions查询部署物版本信息。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=',
                    ],
                ],
                [
                    'name' => 'ArtifactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'artifact-eea08d1e2d3a43aexxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '46577928-3162-15A6-9084-69820EB9xxxx',
                            ],
                            'NextToken' => [
                                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                                'type' => 'string',
                                'example' => 'AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '符合条件的记录总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'Artifacts' => [
                                'description' => '部署物版本信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '部署物版本信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ArtifactId' => [
                                            'description' => '部署物ID。',
                                            'type' => 'string',
                                            'example' => 'artifact-eea08d1e2d3a43aexxxx',
                                        ],
                                        'ArtifactType' => [
                                            'description' => '部署物类型。',
                                            'type' => 'string',
                                            'example' => 'EcsImage',
                                        ],
                                        'VersionName' => [
                                            'description' => '部署物版本名称。',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'ArtifactVersion' => [
                                            'description' => '部署物版本。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'Status' => [
                                            'description' => '部署物的状态。可能的值：'."\n"
                                                ."\n"
                                                .'- Created：已创建。'."\n"
                                                ."\n"
                                                .'- Scanning：扫描中。'."\n"
                                                ."\n"
                                                .'- ScanFailed：扫描失败。'."\n"
                                                ."\n"
                                                .'- Delivering：分发中。'."\n"
                                                ."\n"
                                                .'- Available：可使用。'."\n"
                                                ."\n"
                                                .'- Deleted：已删除。',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                        'ArtifactProperty' => [
                                            'description' => '部署物属性。',
                                            'type' => 'string',
                                            'example' => '{\\"CommodityCode\\":\\"cmjj0005xxxx\\",\\"CommodityVersion\\":\\"V2022xxxx\\"}',
                                        ],
                                        'SupportRegionIds' => [
                                            'description' => '部署物分发的地域ID。',
                                            'type' => 'string',
                                            'example' => '['."\n"
                                                .'					"cn-beijing",'."\n"
                                                .'					"cn-hangzhou",'."\n"
                                                .'					"cn-shanghai"'."\n"
                                                .'				]',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改时间。',
                                            'type' => 'string',
                                            'example' => '2022-10-20T02:19:55Z',
                                        ],
                                        'Progress' => [
                                            'description' => '部署物分发进度。',
                                            'type' => 'string',
                                            'example' => '100',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-10-20T02:19:53Z',
                                        ],
                                        'ImageDelivery' => [
                                            'description' => '镜像分发结果。',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => '{'."\n"
                                                    .'					"cn-beijing":"m-2ze9swf380tsad9wxxxx",'."\n"
                                                    .'					"cn-shanghai":"m-uf6d2kp5yb3fuq6ixxxx",'."\n"
                                                    .'					"cn-hangzhou":"m-bp1co0b2dkon58moxxxx"'."\n"
                                                    .'				}',
                                                'description' => '镜像分发结果。',
                                            ],
                                        ],
                                        'SecurityAuditResult' => [
                                            'description' => '安全扫描结果。可能的值为：'."\n"
                                                ."\n"
                                                .'- Normal：正常状态（无风险）。'."\n"
                                                ."\n"
                                                .'- AtRisk：存在安全风险。'."\n"
                                                ."\n"
                                                .'- Processing：进行中。',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'ResultFile' => [
                                            'description' => '安全扫描结果文件。',
                                            'type' => 'string',
                                            'example' => '仅当安全扫描结果的返回值为AtRisk时才会展示。',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46577928-3162-15A6-9084-69820EB9xxxx\\",\\n  \\"NextToken\\": \\"AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=\\",\\n  \\"MaxResults\\": 20,\\n  \\"TotalCount\\": 2,\\n  \\"Artifacts\\": [\\n    {\\n      \\"ArtifactId\\": \\"artifact-eea08d1e2d3a43aexxxx\\",\\n      \\"ArtifactType\\": \\"EcsImage\\",\\n      \\"VersionName\\": \\"v1\\",\\n      \\"ArtifactVersion\\": \\"2\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"ArtifactProperty\\": \\"{\\\\\\\\\\\\\\"CommodityCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cmjj0005xxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CommodityVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"V2022xxxx\\\\\\\\\\\\\\"}\\",\\n      \\"SupportRegionIds\\": \\"[\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-beijing\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-hangzhou\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-shanghai\\\\\\"\\\\n\\\\t\\\\t\\\\t\\\\t]\\",\\n      \\"GmtModified\\": \\"2022-10-20T02:19:55Z\\",\\n      \\"Progress\\": \\"100\\",\\n      \\"GmtCreate\\": \\"2022-10-20T02:19:53Z\\",\\n      \\"ImageDelivery\\": {\\n        \\"key\\": \\"{\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-beijing\\\\\\":\\\\\\"m-2ze9swf380tsad9wxxxx\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-shanghai\\\\\\":\\\\\\"m-uf6d2kp5yb3fuq6ixxxx\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-hangzhou\\\\\\":\\\\\\"m-bp1co0b2dkon58moxxxx\\\\\\"\\\\n\\\\t\\\\t\\\\t\\\\t}\\"\\n      },\\n      \\"SecurityAuditResult\\": \\"Normal\\",\\n      \\"ResultFile\\": \\"仅当安全扫描结果的返回值为AtRisk时才会展示。\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询部署物版本信息',
        ],
        'UpdateArtifact' => [
            'summary' => '调用UpdateArtifact更新部署物。',
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
                    'name' => 'ArtifactId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'artifact-eea08d1e2d3a43aexxxx',
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物版本名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Redhat8_0镜像',
                    ],
                ],
                [
                    'name' => 'ArtifactProperty',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '部署物属性。',
                        'type' => 'object',
                        'properties' => [
                            'Url' => [
                                'description' => '文件部署物URL。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1309208528xxxxxx/template/2e1ce8fc-xxxx-481c-9e8e-789ba9db487d.json',
                            ],
                            'RegionId' => [
                                'description' => '镜像地域。'."\n"
                                    ."\n"
                                    .'> 该参数仅部署物为镜像部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cn-hangzhou',
                            ],
                            'ImageId' => [
                                'description' => '镜像ID。'."\n"
                                    ."\n"
                                    .'> 该参数仅部署物为镜像部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'm-0xij191j9cuev6ucxxxx',
                            ],
                            'CommodityCode' => [
                                'description' => '云市场商品code。'."\n"
                                    ."\n"
                                    .'> 该参数仅部署物为镜像部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cmjj00xxxx',
                            ],
                            'CommodityVersion' => [
                                'description' => '云市场商品版本。'."\n"
                                    ."\n"
                                    .'> 该参数仅部署物为镜像部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'V1.0',
                            ],
                            'FileScriptMetadata' => [
                                'description' => 'OSS文件元数据。'."\n"
                                    ."\n"
                                    .'> 该参数仅部署物为文件部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{\\"WorkDir\\":\\"/root\\",\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"echo hello\\"}',
                            ],
                            'ScriptMetadata' => [
                                'description' => '脚本部署物脚本内容。'."\n"
                                    ."\n"
                                    .'> 该参数仅部署物为脚本部署物时可设置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"ScriptMetadata":"{\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"ls\\"}"}',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SupportRegionIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '部署物支持的地域ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '部署物支持的地域ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["cn-hangzhou","cn-beijing"]',
                        ],
                        'required' => false,
                        'maxItems' => 30,
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
                                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
                            ],
                            'ArtifactId' => [
                                'description' => '部署物ID。',
                                'type' => 'string',
                                'example' => 'artifact-eea08d1e2d3a43aexxxx',
                            ],
                            'ArtifactType' => [
                                'description' => '部署物类型。',
                                'type' => 'string',
                                'example' => 'EcsImage',
                            ],
                            'VersionName' => [
                                'description' => '部署物名称。',
                                'type' => 'string',
                                'example' => 'v1',
                            ],
                            'ArtifactVersion' => [
                                'description' => '部署物版本。',
                                'type' => 'string',
                                'example' => '2',
                            ],
                            'Description' => [
                                'description' => '部署物描述。',
                                'type' => 'string',
                                'example' => 'Redhat8_0镜像',
                            ],
                            'GmtModified' => [
                                'description' => '修改时间。',
                                'type' => 'string',
                                'example' => '2022-10-20T02:19:55Z',
                            ],
                            'Status' => [
                                'description' => '部署物的状态。可能的值：'."\n"
                                    ."\n"
                                    .'- Created：已创建。'."\n"
                                    ."\n"
                                    .'- Scanning：扫描中。'."\n"
                                    ."\n"
                                    .'- ScanFailed：扫描失败。'."\n"
                                    ."\n"
                                    .'- Delivering：分发中。'."\n"
                                    ."\n"
                                    .'- Available：可使用。'."\n"
                                    ."\n"
                                    .'- Deleted：已删除。',
                                'type' => 'string',
                                'example' => 'Available',
                            ],
                            'ArtifactProperty' => [
                                'description' => '部署物属性。',
                                'type' => 'string',
                                'example' => '{\\"CommodityCode\\":\\"cmjj0005xxxx\\",\\"CommodityVersion\\":\\"V2022xxxx\\"}',
                            ],
                            'SupportRegionIds' => [
                                'description' => '部署物支持的地域ID。',
                                'type' => 'string',
                                'example' => '['."\n"
                                    .'			"cn-beijing",'."\n"
                                    .'			"cn-hangzhou",'."\n"
                                    .'			"cn-shanghai"'."\n"
                                    .'		]',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\",\\n  \\"ArtifactId\\": \\"artifact-eea08d1e2d3a43aexxxx\\",\\n  \\"ArtifactType\\": \\"EcsImage\\",\\n  \\"VersionName\\": \\"v1\\",\\n  \\"ArtifactVersion\\": \\"2\\",\\n  \\"Description\\": \\"Redhat8_0镜像\\",\\n  \\"GmtModified\\": \\"2022-10-20T02:19:55Z\\",\\n  \\"Status\\": \\"Available\\",\\n  \\"ArtifactProperty\\": \\"{\\\\\\\\\\\\\\"CommodityCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cmjj0005xxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CommodityVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"V2022xxxx\\\\\\\\\\\\\\"}\\",\\n  \\"SupportRegionIds\\": \\"[\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-beijing\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-hangzhou\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-shanghai\\\\\\"\\\\n\\\\t\\\\t]\\"\\n}","type":"json"}]',
            'title' => '更新部署物',
        ],
        'CreateService' => [
            'summary' => '创建新的服务。',
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
                'abilityTreeCode' => '36949',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest2G0818',
                    'FEATUREcomputenest1Z49ZW',
                    'FEATUREcomputenest21Y74A',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10CM943JP0EN9D51H',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'service-0e6fca6a51a544xxxxxx',
                    ],
                ],
                [
                    'name' => 'DeployType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署类型。可能值：'."\n"
                            ."\n"
                            .'- ros：通过ROS部署。'."\n"
                            ."\n"
                            .'- terraform：通过Terraform部署。'."\n"
                            ."\n"
                            .'- ack：通过ACK部署。'."\n"
                            ."\n"
                            .'- spi：调用SPI部署。'."\n"
                            ."\n"
                            .'- operation：代运维服务部署。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ros',
                    ],
                ],
                [
                    'name' => 'DeployMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"TemplateConfigs\\":[{\\"Name\\":\\"模板1\\",\\"Url\\":\\"oss://computenest-test/template" '."\n"
                            .'            + ".json?RegionId=cn-beijing\\",\\"PredefinedParameters\\":[{\\"Name\\":\\"低配版\\"," '."\n"
                            .'            + "\\"Parameters\\":{\\"InstanceType\\":\\"ecs.g5.large\\",\\"DataDiskSize\\":40}},{\\"Name\\":\\"高配版\\"," '."\n"
                            .'            + "\\"Parameters\\":{\\"InstanceType\\":\\"ecs.g5.large\\",\\"DataDiskSize\\":200}}]}]}',
                    ],
                ],
                [
                    'name' => 'ServiceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务类型。可能的值：'."\n"
                            ."\n"
                            .'- private：部署在用户账户下的服务实例。'."\n"
                            ."\n"
                            .'- managed：托管在服务商账户下的服务实例。'."\n"
                            ."\n"
                            .'- operation：代运维服务实例'."\n"
                            ."\n"
                            .'- poc：试用服务实例。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'private',
                        'default' => 'private',
                    ],
                ],
                [
                    'name' => 'ServiceInfo',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '服务详情。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务详情。',
                            'type' => 'object',
                            'properties' => [
                                'Locale' => [
                                    'description' => '服务语言。可能的值：'."\n"
                                        ."\n"
                                        .'- zh-CN：中文。'."\n"
                                        ."\n"
                                        .'- en-US：英文。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'zh-CN',
                                ],
                                'ShortDescription' => [
                                    'description' => '服务概述。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TiDB是A公司自主设计、研发的开源分布式关系型数据库。',
                                ],
                                'Image' => [
                                    'description' => '服务图标地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http://img.tidb.oss.url',
                                ],
                                'Name' => [
                                    'description' => '服务名称。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'TiDB Database',
                                ],
                                'LongDescriptionUrl' => [
                                    'description' => '服务详细描述',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http://description.tidb.oss.url'."\n",
                                ],
                                'Agreements' => [
                                    'description' => '服务的协议文档信息。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '服务的协议文档信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Name' => [
                                                'description' => '协议名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'Name',
                                            ],
                                            'Url' => [
                                                'description' => '协议链接。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'https://aliyun.com/xxxxxxxx.html',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                    'maxItems' => 10,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'IsSupportOperated',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否代运维，默认为：false。可能的值：'."\n"
                            ."\n"
                            .'- true：开启。'."\n"
                            ."\n"
                            .'- false：关闭。'."\n"
                            .'> 当**ServiceType**为**private**时需要填入该值。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PolicyNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略名称。单个策略名称长度不超过128个字符，多个名称使用英文逗号（,）分隔。暂时只支持代运维相关参数策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'policyName1, policyName2',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代运维时间。单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'AlarmMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务报警配置。'."\n"
                            .'> 当**PolicyNames**中配置了报警权限策略后，该配置才会生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "TemplateUrl": "http://template.file.url",'."\n"
                            .'  // 应用分组级别告警元数据'."\n"
                            .'  "ApplicationGroups": ['."\n"
                            .'    {'."\n"
                            .'      "Name": "applicationGroup1",'."\n"
                            .'      "TemplateUrl": "url1"'."\n"
                            .'    },'."\n"
                            .'    {'."\n"
                            .'      "Name": "applicationGroup2",'."\n"
                            .'      "TemplateUrl": "url2"'."\n"
                            .'    }'."\n"
                            .'  ]'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ShareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '共享类型。可能的值：'."\n"
                            ."\n"
                            .'- Public：公开的，正式部署和试用部署都不受限。'."\n"
                            ."\n"
                            .'- Restricted：受限的，正式部署和试用部署都受限。'."\n"
                            ."\n"
                            .'- OnlyFormalRestricted：仅正式部署受限。'."\n"
                            ."\n"
                            .'- OnlyTrailRestricted：仅试用部署受限。'."\n"
                            ."\n"
                            .'- Hidden：隐藏的，不可见且不可申请部署权限。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Public',
                    ],
                ],
                [
                    'name' => 'ApprovalType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务使用申请审批类型。可能的值：'."\n"
                            ."\n"
                            .'- Manual：收到审批。'."\n"
                            ."\n"
                            .'- AutoPass：自动通过。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Manual',
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Draft',
                    ],
                ],
                [
                    'name' => 'UpgradeMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '升级元数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"Description\\":\\"xxx\\",\\"SupportRollback\\":true,\\"SupportUpgradeFromVersions\\":[],\\"UpgradeComponents\\":[\\"Configuration\\"]}',
                    ],
                ],
                [
                    'name' => 'TrialDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '试用时长。单位：天。试用时长的最长天数不超过30天。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '7',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户自定义标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户自定义标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Usage',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Web',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'TenantType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户类型。可能的值：'."\n"
                            ."\n"
                            .'- SingleTenant：单租户。'."\n"
                            ."\n"
                            .'- MultiTenant：多租户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SingleTenant',
                    ],
                ],
                [
                    'name' => 'LicenseMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '许可证元数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"PayType\\":\\"CustomFixTime\\",\\"DefaultLicenseDays\\":7,\\"CustomMetadata\\":[{\\"TemplateName\\":\\"模板1\\",\\"SpecificationName\\":\\"bandwith-0\\",\\"CustomData\\":\\"1\\"}]}',
                    ],
                ],
                [
                    'name' => 'OperationMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代运维配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"PrometheusConfigMap\\":{\\"New_Vpc_Ack_And_Jumpserver\\":{}}}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek25refu7r3opq',
                    ],
                ],
                [
                    'name' => 'LogMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用日志配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "Logstores": ['."\n"
                            .'    {'."\n"
                            .'    	"LogstoreName": "access-log",'."\n"
                            .'  		"LogPath": "/home/admin/app/logs", # 对容器不需要，在YAML中配置'."\n"
                            .'  		"FilePattern": "access.log*" # 对容器不需要，在YAML中配置'."\n"
                            .'    }'."\n"
                            .'  ]'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'SourceServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分销源服务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'service-70a3b15bb62643xxxxxx',
                    ],
                ],
                [
                    'name' => 'SourceServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分销源服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Resellable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否支持分销。可能的值：'."\n"
                            ."\n"
                            .'- false：不支持。'."\n"
                            ."\n"
                            .'- true：支持。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'BuildParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '构建服务参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{ "ServiceTemplateId": "st-xxxxx"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '服务状态。',
                                'type' => 'string',
                                'example' => 'Created',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D550C',
                            ],
                            'Version' => [
                                'description' => '服务版本。',
                                'type' => 'string',
                                'example' => 'draft',
                            ],
                            'ServiceId' => [
                                'description' => '服务ID。',
                                'type' => 'string',
                                'example' => 'service-0e6fca6a51a544xxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Created\\",\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D550C\\",\\n  \\"Version\\": \\"draft\\",\\n  \\"ServiceId\\": \\"service-0e6fca6a51a544xxxxxx\\"\\n}","type":"json"}]',
            'title' => '创建服务',
        ],
        'RegisterService' => [
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
                'abilityTreeCode' => '36948',
                'abilityTreeNodes' => [
                    'FEATUREcomputenestB2MIVU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'service-f7024a22ea5149xxxxxx',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10CM943JP0EN9D51H',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RegistrationId' => [
                                'description' => '注册ID。',
                                'type' => 'string',
                                'example' => 'sr-72dd5071e90c40xxxxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A361BA9E-2713-52C8-AFFC-C26E5180456E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RegistrationId\\": \\"sr-72dd5071e90c40xxxxxx\\",\\n  \\"RequestId\\": \\"A361BA9E-2713-52C8-AFFC-C26E5180456E\\"\\n}","type":"json"}]',
            'title' => '注册服务',
            'summary' => '注册部署物。',
        ],
        'UpdateService' => [
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
                'abilityTreeCode' => '36950',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DeployType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署类型。可能值：'."\n"
                            ."\n"
                            .'- ros：通过ROS部署。'."\n"
                            ."\n"
                            .'- terraform：通过Terraform部署。'."\n"
                            ."\n"
                            .'- spi：调用SPI部署。'."\n"
                            ."\n"
                            .'- operation：代运维服务部署。'."\n"
                            ."\n"
                            .'- container：通过容器部署。'."\n"
                            ."\n"
                            .'- pkg：包服务。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ros',
                    ],
                ],
                [
                    'name' => 'DeployMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"EstimateTime\\":null,\\"SupplierDeployMetadata\\":{\\"DeployTimeout\\":7200},\\"EnableVnc\\":false}',
                    ],
                ],
                [
                    'name' => 'AlarmMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务报警配置。'."\n"
                            .'> 当**PolicyNames**中配置了报警权限策略后，该配置才会生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"CmsTemplateId\\":1162921,\\"TemplateUrl\\":\\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1760465342xxxxxx/template/c072ef50-6c03-4d9c-8f0e-d1c440xxxxxx.json\\"}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '788E7CP0EN9D51P',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'service-1dda29c3eca648xxxxxx',
                    ],
                ],
                [
                    'name' => 'ServiceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务类型。可能的值：'."\n"
                            ."\n"
                            .'- private：部署在用户账户下的服务实例。'."\n"
                            ."\n"
                            .'- managed：托管在服务商账户下的服务实例。'."\n"
                            ."\n"
                            .'- operation：代运维服务实例'."\n"
                            ."\n"
                            .'- poc：试用服务实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'private',
                    ],
                ],
                [
                    'name' => 'ServiceInfo',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '服务详情。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务详情。',
                            'type' => 'object',
                            'properties' => [
                                'Locale' => [
                                    'description' => '服务语言。可能的值：'."\n"
                                        ."\n"
                                        .'- zh-CN：中文。'."\n"
                                        ."\n"
                                        .'- en-US：英文。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'zh-CN',
                                ],
                                'ShortDescription' => [
                                    'description' => '服务概述。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                                ],
                                'Image' => [
                                    'description' => '服务图标地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http://img.tidb.oss.url',
                                ],
                                'Name' => [
                                    'description' => '服务名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'B数据库',
                                ],
                                'LongDescriptionUrl' => [
                                    'description' => '服务详细描述的地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http://description.tidb.oss.url'."\n",
                                ],
                                'Agreements' => [
                                    'description' => '服务的协议文档信息。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '服务的协议文档信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Name' => [
                                                'description' => '协议文档名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'Name',
                                            ],
                                            'Url' => [
                                                'description' => '协议链接。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'https://aliyun.com/xxxxxxxx.html',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                    'maxItems' => 10,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'IsSupportOperated',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否代运维，默认为：false。可能的值：'."\n"
                            ."\n"
                            .'- true：开启。'."\n"
                            ."\n"
                            .'- false：关闭。'."\n"
                            .'> 当**ServiceType**为**private**时需要填入该值。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PolicyNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略名称。单个策略名称长度不超过128个字符，多个名称使用英文逗号（,）分隔。暂时只支持代运维相关参数策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'policyName1, policyName2',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代运维时间。单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '259200',
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Draft',
                    ],
                ],
                [
                    'name' => 'UpgradeMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '升级元数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"Description\\":\\"xxx\\",\\"SupportRollback\\":true,\\"SupportUpgradeFromVersions\\":[],\\"UpgradeComponents\\":[\\"Configuration\\"]}',
                    ],
                ],
                [
                    'name' => 'TrialDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '试用时长。单位：天。试用时长的最长天数不超过30天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '7',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'TenantType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '租户类型。可能的值：'."\n"
                            ."\n"
                            .'- SingleTenant：单租户。'."\n"
                            ."\n"
                            .'- MultiTenant：多租户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SingleTenant',
                    ],
                ],
                [
                    'name' => 'LicenseMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '许可证元数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"PayType\\":\\"CustomFixTime\\",\\"DefaultLicenseDays\\":7,\\"CustomMetadata\\":[{\\"TemplateName\\":\\"模板1\\",\\"SpecificationName\\":\\"bandwith-0\\",\\"CustomData\\":\\"1\\"}]}',
                    ],
                ],
                [
                    'name' => 'OperationMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代运维配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"PrometheusConfigMap\\":{\\"Custom_Image_Ecs\\":{\\"EnablePrometheus\\":false}}}',
                    ],
                ],
                [
                    'name' => 'LogMetadata',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用日志配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "Logstores": ['."\n"
                            .'    {'."\n"
                            .'    	"LogstoreName": "access-log",'."\n"
                            .'  		"LogPath": "/home/admin/app/logs", # 对容器不需要，在YAML中配置'."\n"
                            .'  		"FilePattern": "access.log*" # 对容器不需要，在YAML中配置'."\n"
                            .'    }'."\n"
                            .'  ]'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'Resellable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否支持分销。可能的值：'."\n"
                            ."\n"
                            .'- false：不支持。'."\n"
                            ."\n"
                            .'- true：支持。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'UpdateOption',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '更新选项。',
                        'type' => 'object',
                        'properties' => [
                            'UpdateFrom' => [
                                'description' => '更新选项。可选值：'."\n"
                                    ."\n"
                                    .'-  CODE：代码。'."\n"
                                    ."\n"
                                    .'- PARAMETERS：参数。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PARAMETERS',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ShareType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApprovalType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                                'example' => 'DF0F666F-FBBC-55C3-A368-C955DE7B4839',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DF0F666F-FBBC-55C3-A368-C955DE7B4839\\"\\n}","type":"json"}]',
            'title' => '更新服务',
            'summary' => '升级服务。',
        ],
        'UpgradeServiceInstance' => [
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
                'abilityTreeCode' => '162313',
                'abilityTreeNodes' => [
                    'FEATUREcomputenestQE1OA6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'si-5cbae874da0e47xxxxxx',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10CM943JP0EN9D51H',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否对此次创建请求执行预检，包括权限、实例状态校验等。可能的值：'."\n"
                            ."\n"
                            .'- true：发送请求，不创建服务实例。'."\n"
                            ."\n"
                            .'- false：发送请求，检查通过后创建服务实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '服务实例配置参数。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "param": "value"'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '服务实例的部署状态。可能值：'."\n"
                                    ."\n"
                                    .'- Created：已创建'."\n"
                                    ."\n"
                                    .'- Deploying：部署中'."\n"
                                    ."\n"
                                    .'- DeployedFailed：部署失败'."\n"
                                    ."\n"
                                    .'- Deployed：已部署'."\n"
                                    ."\n"
                                    .'- Upgrading：升级中'."\n"
                                    ."\n"
                                    .'- Deleting：删除中'."\n"
                                    ."\n"
                                    .'- Deleted：已删除'."\n"
                                    ."\n"
                                    .'- DeletedFailed：删除失败',
                                'type' => 'string',
                                'example' => 'Created',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F224E002-AB0E-5FD9-A87E-54AEE56F6CAE',
                            ],
                            'ServiceInstanceId' => [
                                'description' => '服务实例ID。',
                                'type' => 'string',
                                'example' => 'si-5cbae874da0e47xxxxxx',
                            ],
                            'UpgradeRequiredParameters' => [
                                'description' => '升级需要的参数。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '升级需要的参数。',
                                    'type' => 'string',
                                    'example' => '[\'EcsInstanceType\', \'InstancePassword\']',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Created\\",\\n  \\"RequestId\\": \\"F224E002-AB0E-5FD9-A87E-54AEE56F6CAE\\",\\n  \\"ServiceInstanceId\\": \\"si-5cbae874da0e47xxxxxx\\",\\n  \\"UpgradeRequiredParameters\\": [\\n    \\"[\'EcsInstanceType\', \'InstancePassword\']\\"\\n  ]\\n}","type":"json"}]',
            'title' => '升级服务实例',
            'summary' => '调用UpgradeServiceInstance升级服务实例。',
        ],
        'UpdateServiceInstanceAttribute' => [
            'summary' => '更新服务实例的属性。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '142602',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-3df88e962cdexxxxxxxx',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例到期时间。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                        'example' => '2023-12-25T02:28:40Z',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0CB2E0A9-B4DF-5C16-86AD-C511C483144B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'NeedManualApproval',
                        'errorMessage' => 'Manual approval is required for the extension request.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0CB2E0A9-B4DF-5C16-86AD-C511C483144B\\"\\n}","type":"json"}]',
            'title' => '更新服务实例属性',
        ],
        'DeleteService' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'service-0e6fca6a51a54420****',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10CM943JP0EN9D51H',
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
                                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D****\\"\\n}","type":"json"}]',
            'title' => '删除服务',
            'summary' => '删除指定服务。',
        ],
        'ListServices' => [
            'summary' => '查询当前服务信息。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '36944',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest2G0818',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BBBAAfu+XtuBE55iRLHEYYuojI4=',
                    ],
                ],
                [
                    'name' => 'AllVersions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回服务的所有版本。默认值为false，对每个服务只返回默认版本。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzkt5buxxxxxx',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '过滤器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤器。',
                            'type' => 'object',
                            'properties' => [
                                'Value' => [
                                    'description' => '过滤器值列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '过滤器值列表。N的取值范围：1~10。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '1',
                                    ],
                                    'required' => false,
                                    'maxItems' => 20,
                                ],
                                'Name' => [
                                    'description' => '过滤器名称，可选择一个或者多个名称进行查询。取值范围：'."\n"
                                        ."\n"
                                        .'- ServiceId：服务ID。'."\n"
                                        ."\n"
                                        .'- Name：服务名称。'."\n"
                                        ."\n"
                                        .'- Status：服务状态。'."\n"
                                        ."\n"
                                        .'- SupplierName：服务商名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Status',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户自定义标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户自定义标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始token。',
                                'type' => 'string',
                                'example' => 'AAAAAfu+XtuBE55iRLHEYYuojI4=',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '51945B04-6AA6-410D-93BA-236E0248B104',
                            ],
                            'TotalCount' => [
                                'description' => '符合条件的记录总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Services' => [
                                'description' => '服务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '服务状态。可能的值：'."\n"
                                                ."\n"
                                                .'- Draft：草稿状态。'."\n"
                                                ."\n"
                                                .'- Submitted：已提交审核。不允许修改。'."\n"
                                                ."\n"
                                                .'- Approved：已通过审核。不允许修改，可以发布上线。'."\n"
                                                ."\n"
                                                .'- Launching：服务上线中。'."\n"
                                                ."\n"
                                                .'- Online：已上线。'."\n"
                                                ."\n"
                                                .'- Offline：已下线。',
                                            'type' => 'string',
                                            'example' => 'Online',
                                        ],
                                        'DefaultVersion' => [
                                            'description' => '共享权限是否为默认版本。取值：'."\n"
                                                ."\n"
                                                .'- false：不是默认版本。'."\n"
                                                ."\n"
                                                .'- true：是默认版本。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'PublishTime' => [
                                            'description' => '发布时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-21T00:00:00Z',
                                        ],
                                        'Version' => [
                                            'description' => '服务版本。',
                                            'type' => 'string',
                                            'example' => '1.0',
                                        ],
                                        'DeployType' => [
                                            'description' => '部署类型。可能值：'."\n"
                                                ."\n"
                                                .'- ros：通过ROS部署。'."\n"
                                                ."\n"
                                                .'- terraform：通过Terraform部署。'."\n"
                                                ."\n"
                                                .'- spi：调用SPI部署。'."\n"
                                                ."\n"
                                                .'- operation：代运维服务部署。'."\n"
                                                ."\n"
                                                .'- container：通过容器部署。'."\n"
                                                ."\n"
                                                .'- pkg：包服务。',
                                            'type' => 'string',
                                            'example' => 'ros',
                                        ],
                                        'ServiceId' => [
                                            'description' => '服务ID。',
                                            'type' => 'string',
                                            'example' => 'service-70a3b15bb62643xxxxxx',
                                        ],
                                        'SupplierUrl' => [
                                            'description' => '服务商地址。',
                                            'type' => 'string',
                                            'example' => 'http://example.com',
                                        ],
                                        'ServiceType' => [
                                            'description' => '服务类型。可能值：'."\n"
                                                ."\n"
                                                .'- private：部署在用户账户下。'."\n"
                                                ."\n"
                                                .'- managed：托管在服务商账户下。'."\n"
                                                ."\n"
                                                .'- operation：代运维服务。',
                                            'type' => 'string',
                                            'example' => 'private',
                                        ],
                                        'SupplierName' => [
                                            'description' => '服务商名称。',
                                            'type' => 'string',
                                            'example' => 'A有限公司',
                                        ],
                                        'ServiceInfos' => [
                                            'description' => '服务信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '服务信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Locale' => [
                                                        'description' => '服务配置语言。可能的值：'."\n"
                                                            ."\n"
                                                            .'- zh-CN：中文。'."\n"
                                                            ."\n"
                                                            .'- en-US：英文。',
                                                        'type' => 'string',
                                                        'example' => 'zh-CN',
                                                    ],
                                                    'Image' => [
                                                        'description' => '服务图标地址。',
                                                        'type' => 'string',
                                                        'example' => 'http://img.tidb.oss.url',
                                                    ],
                                                    'Name' => [
                                                        'description' => '服务名称。',
                                                        'type' => 'string',
                                                        'example' => 'B数据库',
                                                    ],
                                                    'ShortDescription' => [
                                                        'description' => '服务概述。',
                                                        'type' => 'string',
                                                        'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'CommodityCode' => [
                                            'description' => '云市场商品code。',
                                            'type' => 'string',
                                            'example' => 'cmjj00xxxx',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-20T00:00:00Z',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-21T00:00:00Z',
                                        ],
                                        'ShareType' => [
                                            'description' => '共享类型。可能的值：'."\n"
                                                ."\n"
                                                .'- Public：公开的，正式部署和试用部署都不受限。'."\n"
                                                ."\n"
                                                .'- Restricted：受限的，正式部署和试用部署都受限。'."\n"
                                                ."\n"
                                                .'- OnlyFormalRestricted：仅正式部署受限。'."\n"
                                                ."\n"
                                                .'- OnlyTrailRestricted：仅试用部署受限。'."\n"
                                                ."\n"
                                                .'- Hidden：隐藏的，不可见且不可申请部署权限。',
                                            'type' => 'string',
                                            'example' => 'Public',
                                        ],
                                        'ApprovalType' => [
                                            'description' => '服务使用申请审批类型，可能的值：'."\n"
                                                ."\n"
                                                .'- Manual：手动审批。'."\n"
                                                ."\n"
                                                .'- AutoPass：自动通过。',
                                            'type' => 'string',
                                            'example' => 'AutoPass',
                                        ],
                                        'VersionName' => [
                                            'description' => '服务商自定义版本名称。',
                                            'type' => 'string',
                                            'example' => 'v2.0.0',
                                        ],
                                        'Tags' => [
                                            'description' => '服务标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '服务标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'key1',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'value1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ArtifactId' => [
                                            'description' => '部署物ID。',
                                            'type' => 'string',
                                            'example' => 'artifact-21ca53ac16a643xxxxxx',
                                        ],
                                        'ArtifactVersion' => [
                                            'description' => '部署物版本。',
                                            'type' => 'string',
                                            'example' => 'draft',
                                        ],
                                        'SourceImage' => [
                                            'description' => '源镜像。',
                                            'type' => 'string',
                                            'example' => 'centos_7',
                                        ],
                                        'RelationType' => [
                                            'description' => '部署物关联类型。可能的值：'."\n"
                                                ."\n"
                                                .'- ServiceDeployment：服务部署。'."\n"
                                                ."\n"
                                                .'- ServiceUpgrade：服务升级。',
                                            'type' => 'string',
                                            'example' => 'ServiceDeployment',
                                        ],
                                        'TrialType' => [
                                            'description' => '试用类型。可选值：'."\n"
                                                ."\n"
                                                .'- Trial：支持试用。'."\n"
                                                ."\n"
                                                .'- NotTrial：不支持试用。',
                                            'type' => 'string',
                                            'example' => 'Trial',
                                        ],
                                        'TenantType' => [
                                            'description' => '托管版服务的租户类型。可能的值：'."\n"
                                                ."\n"
                                                .'- SingleTenant：单租户。'."\n"
                                                ."\n"
                                                .'- MultiTenant：多租户。',
                                            'type' => 'string',
                                            'example' => 'SingleTenant',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-aekz5b555xxxxxx',
                                        ],
                                        'SourceServiceId' => [
                                            'description' => '分销源服务ID。',
                                            'type' => 'string',
                                            'example' => 'service-70a3b15bb62643xxxxxx',
                                        ],
                                        'SourceServiceVersion' => [
                                            'description' => '分销源服务版本。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'SourceSupplierName' => [
                                            'description' => '分销源服务商名称。',
                                            'type' => 'string',
                                            'example' => 'SourceSupplier',
                                        ],
                                        'ResellServiceId' => [
                                            'description' => '分销服务ID。',
                                            'type' => 'string',
                                            'example' => 'service-70a3b15bb62643xxxxxx',
                                        ],
                                        'LatestResellSourceServiceVersion' => [
                                            'description' => '最新的分销源服务版本。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'ResellApplyStatus' => [
                                            'description' => '服务的分销授权状态。可能的值：'."\n"
                                                ."\n"
                                                .'- CanApply：可申请。'."\n"
                                                ."\n"
                                                .'- Applied：已申请。'."\n"
                                                ."\n"
                                                .'- Approved：已通过。',
                                            'type' => 'string',
                                            'example' => 'CanApply',
                                        ],
                                        'VirtualInternetService' => [
                                            'description' => '是否是虚拟互联网服务。可能的值：'."\n"
                                                ."\n"
                                                .'- false：否。'."\n"
                                                ."\n"
                                                .'- true：是。',
                                            'type' => 'string',
                                            'example' => 'false',
                                        ],
                                        'Categories' => [
                                            'description' => '服务分类。',
                                            'type' => 'string',
                                            'example' => 'OpenSource',
                                        ],
                                        'ServiceDiscoverable' => [
                                            'description' => '服务是否可发现。可能的值：'."\n"
                                                ."\n"
                                                .'- INVISIBLE：不可发现。'."\n"
                                                ."\n"
                                                .'- DISCOVERABLE：可发现。',
                                            'type' => 'string',
                                            'example' => 'INVISIBLE',
                                        ],
                                        'HasDraft' => [
                                            'description' => '当前服务是否有Draft版本。可能的值：'."\n"
                                                ."\n"
                                                .'- true：是。'."\n"
                                                ."\n"
                                                .'- false：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'HasBeta' => [
                                            'description' => '当前服务是否有Beta版本。可能的值：'."\n"
                                                ."\n"
                                                .'- true：是。'."\n"
                                                ."\n"
                                                .'- false：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'BuildInfo' => [
                                            'description' => '构建服务信息。',
                                            'type' => 'string',
                                            'example' => '{ "RepoUrl": "https://github.com/user/repo.git", "Brancn": "main"}',
                                        ],
                                        'Commodity' => [
                                            'description' => '商品规格。',
                                            'type' => 'object',
                                            'properties' => [
                                                'CommodityCode' => [
                                                    'description' => '商品code。',
                                                    'type' => 'string',
                                                    'example' => 'cmjj00xxxx',
                                                ],
                                                'Type' => [
                                                    'description' => '类型。可能的值：'."\n"
                                                        ."\n"
                                                        .'- Marketplace：云市场。'."\n"
                                                        ."\n"
                                                        .'- Css：凌霄。'."\n"
                                                        ."\n"
                                                        .'- SaasBoost：Saas Boost。',
                                                    'type' => 'string',
                                                    'example' => 'Marketplace',
                                                ],
                                                'SaasBoostMetadata' => [
                                                    'description' => 'SaasBoost配置元数据。',
                                                    'type' => 'string',
                                                    'example' => '{'."\n"
                                                        .'     //开启/关闭SaaS Boost绑定'."\n"
                                                        .'    "Enabled":true/false,默认为false'."\n"
                                                        .'    //公网交互地址'."\n"
                                                        .'    "PublicAccessUrl":"https://example.com"'."\n"
                                                        .'}',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAfu+XtuBE55iRLHEYYuojI4=\\",\\n  \\"RequestId\\": \\"51945B04-6AA6-410D-93BA-236E0248B104\\",\\n  \\"TotalCount\\": 100,\\n  \\"MaxResults\\": 1,\\n  \\"Services\\": [\\n    {\\n      \\"Status\\": \\"Online\\",\\n      \\"DefaultVersion\\": true,\\n      \\"PublishTime\\": \\"2021-05-21T00:00:00Z\\",\\n      \\"Version\\": \\"1.0\\",\\n      \\"DeployType\\": \\"ros\\",\\n      \\"ServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n      \\"SupplierUrl\\": \\"http://example.com\\",\\n      \\"ServiceType\\": \\"private\\",\\n      \\"SupplierName\\": \\"A有限公司\\",\\n      \\"ServiceInfos\\": [\\n        {\\n          \\"Locale\\": \\"zh-CN\\",\\n          \\"Image\\": \\"http://img.tidb.oss.url\\",\\n          \\"Name\\": \\"B数据库\\",\\n          \\"ShortDescription\\": \\"B是A公司自主设计并研发的开源分布式的关系型数据库\\"\\n        }\\n      ],\\n      \\"CommodityCode\\": \\"cmjj00xxxx\\",\\n      \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"UpdateTime\\": \\"2021-05-21T00:00:00Z\\",\\n      \\"ShareType\\": \\"Public\\",\\n      \\"ApprovalType\\": \\"AutoPass\\",\\n      \\"VersionName\\": \\"v2.0.0\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"key1\\",\\n          \\"Value\\": \\"value1\\"\\n        }\\n      ],\\n      \\"ArtifactId\\": \\"artifact-21ca53ac16a643xxxxxx\\",\\n      \\"ArtifactVersion\\": \\"draft\\",\\n      \\"SourceImage\\": \\"centos_7\\",\\n      \\"RelationType\\": \\"ServiceDeployment\\",\\n      \\"TrialType\\": \\"Trial\\",\\n      \\"TenantType\\": \\"SingleTenant\\",\\n      \\"ResourceGroupId\\": \\"rg-aekz5b555xxxxxx\\",\\n      \\"SourceServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n      \\"SourceServiceVersion\\": \\"1\\",\\n      \\"SourceSupplierName\\": \\"SourceSupplier\\",\\n      \\"ResellServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n      \\"LatestResellSourceServiceVersion\\": \\"1\\",\\n      \\"ResellApplyStatus\\": \\"CanApply\\",\\n      \\"VirtualInternetService\\": \\"false\\",\\n      \\"Categories\\": \\"OpenSource\\",\\n      \\"ServiceDiscoverable\\": \\"INVISIBLE\\",\\n      \\"HasDraft\\": true,\\n      \\"HasBeta\\": true,\\n      \\"BuildInfo\\": \\"{ \\\\\\"RepoUrl\\\\\\": \\\\\\"https://github.com/user/repo.git\\\\\\", \\\\\\"Brancn\\\\\\": \\\\\\"main\\\\\\"}\\",\\n      \\"Commodity\\": {\\n        \\"CommodityCode\\": \\"cmjj00xxxx\\",\\n        \\"Type\\": \\"Marketplace\\",\\n        \\"SaasBoostMetadata\\": \\"{\\\\n     //开启/关闭SaaS Boost绑定\\\\n    \\\\\\"Enabled\\\\\\":true/false,默认为false\\\\n    //公网交互地址\\\\n    \\\\\\"PublicAccessUrl\\\\\\":\\\\\\"https://example.com\\\\\\"\\\\n}\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询服务信息',
        ],
        'GetService' => [
            'summary' => '查询指定服务的详细信息。',
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
                'abilityTreeCode' => '36954',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'service-4ee86df83fd948******',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowDetail',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '返回详细信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '返回详细信息。可选值：'."\n"
                                ."\n"
                                .' ServiceStatistic： 服务统计信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ServiceStatistic',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'FilterAliUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否要过滤AliUid',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'SharedAccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务共享类型，默认值为SharedAccount。可能的值：'."\n"
                            ."\n"
                            .'- SharedAccount：普通共享类型。'."\n"
                            ."\n"
                            .'- Resell：分销共享类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SharedAccount',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '服务状态。可能的值：'."\n"
                                    ."\n"
                                    .'- Draft：草稿状态。'."\n"
                                    ."\n"
                                    .'- Submitted：已提交审核。不允许修改。'."\n"
                                    ."\n"
                                    .'- Approved：已通过审核。不允许修改，可以发布上线。'."\n"
                                    ."\n"
                                    .'- Launching：服务上线中。'."\n"
                                    ."\n"
                                    .'- Online：已上线。'."\n"
                                    ."\n"
                                    .'- Offline：已下线。',
                                'type' => 'string',
                                'example' => 'Online',
                            ],
                            'DeployMetadata' => [
                                'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。 ',
                                'type' => 'string',
                                'example' => '{\\"TemplateConfigs\\":[{\\"Name\\":\\"模板1\\",\\"Url\\":\\"oss://computenest-test/template" '."\n"
                                    .'            + ".json?RegionId=cn-beijing\\",\\"PredefinedParameters\\":[{\\"Name\\":\\"低配版\\"," '."\n"
                                    .'            + "\\"Parameters\\":{\\"InstanceType\\":\\"ecs.g5.large\\",\\"DataDiskSize\\":40}},{\\"Name\\":\\"高配版\\"," '."\n"
                                    .'            + "\\"Parameters\\":{\\"InstanceType\\":\\"ecs.g5.large\\",\\"DataDiskSize\\":200}}]}]}',
                            ],
                            'PublishTime' => [
                                'description' => '发布时间。',
                                'type' => 'string',
                                'example' => '2021-05-21T00:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
                            ],
                            'Version' => [
                                'description' => '服务版本。',
                                'type' => 'string',
                                'example' => '1.0',
                            ],
                            'DeployType' => [
                                'description' => '部署类型。可能值：'."\n"
                                    ."\n"
                                    .'- ros：通过ROS部署。'."\n"
                                    ."\n"
                                    .'- terraform：通过Terraform部署。'."\n"
                                    ."\n"
                                    .'- spi：调用SPI部署。'."\n"
                                    ."\n"
                                    .'- operation：代运维服务部署。'."\n"
                                    ."\n"
                                    .'- container：通过容器部署。'."\n"
                                    ."\n"
                                    .'- pkg：包服务。',
                                'type' => 'string',
                                'example' => 'ros',
                            ],
                            'ServiceId' => [
                                'description' => '服务ID。',
                                'type' => 'string',
                                'example' => 'service-70a3b15bb62643xxxxxx',
                            ],
                            'SupplierUrl' => [
                                'description' => '服务商地址。',
                                'type' => 'string',
                                'example' => 'http://example.com',
                            ],
                            'ServiceDocUrl' => [
                                'description' => '产品文档的URL。',
                                'type' => 'string',
                                'example' => 'http://example1.com',
                            ],
                            'ServiceProductUrl' => [
                                'description' => '产品页URL。',
                                'type' => 'string',
                                'example' => 'http://example2.com',
                            ],
                            'ServiceType' => [
                                'description' => '服务类型。可能值：'."\n"
                                    ."\n"
                                    .'- private：部署在用户账户下。'."\n"
                                    ."\n"
                                    .'- managed：托管在服务商账户下。'."\n"
                                    ."\n"
                                    .'- operation：代运维服务。',
                                'type' => 'string',
                                'example' => 'private',
                            ],
                            'SupplierName' => [
                                'description' => '服务商名称。',
                                'type' => 'string',
                                'example' => 'A公司',
                            ],
                            'ServiceInfos' => [
                                'description' => '服务信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Locale' => [
                                            'description' => '服务配置语言。可能的值：'."\n"
                                                ."\n"
                                                .'- zh-CN：中文。'."\n"
                                                ."\n"
                                                .'- en-US：英文。',
                                            'type' => 'string',
                                            'example' => 'zh-CN',
                                        ],
                                        'Image' => [
                                            'description' => '服务图标地址。',
                                            'type' => 'string',
                                            'example' => 'https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png',
                                        ],
                                        'Name' => [
                                            'description' => '服务名称。',
                                            'type' => 'string',
                                            'example' => 'B数据库',
                                        ],
                                        'ShortDescription' => [
                                            'description' => '服务概述。',
                                            'type' => 'string',
                                            'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                                        ],
                                        'LongDescriptionUrl' => [
                                            'description' => '服务详细描述的地址。',
                                            'type' => 'string',
                                            'example' => 'https://example.com',
                                        ],
                                        'Agreements' => [
                                            'description' => '服务的协议文档信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '服务的协议文档信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '协议名称。',
                                                        'type' => 'string',
                                                        'example' => 'Name',
                                                    ],
                                                    'Url' => [
                                                        'description' => '协议链接。',
                                                        'type' => 'string',
                                                        'example' => 'https://aliyun.com/xxxxxxxx.html',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'CommodityCode' => [
                                'description' => '云市场商品code。',
                                'type' => 'string',
                                'example' => 'cmjj00xxxx',
                            ],
                            'IsSupportOperated' => [
                                'description' => '是否代运维，默认为：false。可能的值：'."\n"
                                    ."\n"
                                    .'- true：开启。'."\n"
                                    ."\n"
                                    .'- false：关闭。'."\n"
                                    .'> 当**ServiceType**为**private**时需要填入该值。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'PolicyNames' => [
                                'description' => '策略名称。单个策略名称长度不超过128个字符，多个名称使用英文逗号（,）分隔。暂时只支持代运维相关参数策略。',
                                'type' => 'string',
                                'example' => 'policyName1, policyName2',
                            ],
                            'Duration' => [
                                'description' => '代运维时间。单位：秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '259200',
                            ],
                            'Progress' => [
                                'description' => '服务实例的部署进度，单位：%。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '90',
                            ],
                            'StatusDetail' => [
                                'description' => '服务状态描述。',
                                'type' => 'string',
                                'example' => 'deploy successfully',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2021-05-20T00:00:00Z',
                            ],
                            'UpdateTime' => [
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2021-05-22T00:00:00Z',
                            ],
                            'ShareType' => [
                                'description' => '共享类型。可能的值：'."\n"
                                    ."\n"
                                    .'- Public：公开的，正式部署和试用部署都不受限。'."\n"
                                    ."\n"
                                    .'- Restricted：受限的，正式部署和试用部署都受限。'."\n"
                                    ."\n"
                                    .'- OnlyFormalRestricted：仅正式部署受限。'."\n"
                                    ."\n"
                                    .'- OnlyTrailRestricted：仅试用部署受限。'."\n"
                                    ."\n"
                                    .'- Hidden：隐藏的，不可见且不可申请部署权限。',
                                'type' => 'string',
                                'example' => 'Public',
                            ],
                            'AlarmMetadata' => [
                                'description' => '服务报警配置。'."\n"
                                    .'> 当**PolicyNames**中配置了报警权限策略后，该配置才会生效。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'  "TemplateUrl": "http://template.file.url",'."\n"
                                    .'  // 应用分组级别告警元数据'."\n"
                                    .'  "ApplicationGroups": ['."\n"
                                    .'    {'."\n"
                                    .'      "Name": "applicationGroup1",'."\n"
                                    .'      "TemplateUrl": "url1"'."\n"
                                    .'    },'."\n"
                                    .'    {'."\n"
                                    .'      "Name": "applicationGroup2",'."\n"
                                    .'      "TemplateUrl": "url2"'."\n"
                                    .'    }'."\n"
                                    .'  ]'."\n"
                                    .'}',
                            ],
                            'UpgradeMetadata' => [
                                'description' => '升级元数据。',
                                'type' => 'string',
                                'example' => '{\\"Description\\":\\"xxx\\",\\"SupportRollback\\":true,\\"SupportUpgradeFromVersions\\":[],\\"UpgradeComponents\\":[\\"Configuration\\"]}',
                            ],
                            'VersionName' => [
                                'description' => '版本名称。',
                                'type' => 'string',
                                'example' => 'v1',
                            ],
                            'PayFromType' => [
                                'description' => '付费来源，可能的值：'."\n"
                                    ."\n"
                                    .'- None：不付费。'."\n"
                                    ."\n"
                                    .'- Marketplace：云市场付费。'."\n"
                                    ."\n"
                                    .'- Custom：自定义付费。',
                                'type' => 'string',
                                'example' => 'None',
                            ],
                            'PayType' => [
                                'description' => '付费类型。取值范围：'."\n"
                                    ."\n"
                                    .'- Permanent：永久购买。'."\n"
                                    ."\n"
                                    .'- Subscription：云市场包年包月。'."\n"
                                    ."\n"
                                    .'- PayAsYouGo：云市场按量付费。'."\n"
                                    ."\n"
                                    .'- CustomFixTime：商家自定义固定时长。',
                                'type' => 'string',
                                'example' => 'Permanent',
                            ],
                            'DefaultLicenseDays' => [
                                'description' => '默认许可证日期。单位：天。取值范围：1~1000.',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Tags' => [
                                'description' => '服务标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'key1',
                                        ],
                                        'Value' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'value1',
                                        ],
                                    ],
                                ],
                            ],
                            'TrialDuration' => [
                                'description' => '试用时长。单位：天。试用时长的最长天数不超过30天。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '7',
                            ],
                            'TrialType' => [
                                'description' => '试用类型。可选值：'."\n"
                                    ."\n"
                                    .'- Trial：支持试用。'."\n"
                                    ."\n"
                                    .'- NotTrial：不支持试用。',
                                'type' => 'string',
                                'example' => 'Trial',
                            ],
                            'TenantType' => [
                                'description' => '租户类型。可能的值：'."\n"
                                    ."\n"
                                    .'- SingleTenant：单租户。'."\n"
                                    ."\n"
                                    .'- MultiTenant：多租户。',
                                'type' => 'string',
                                'example' => 'SingleTenant',
                            ],
                            'LicenseMetadata' => [
                                'description' => '许可证元数据。',
                                'type' => 'string',
                                'example' => '{\\"PayType\\":\\"CustomFixTime\\",\\"DefaultLicenseDays\\":7,\\"CustomMetadata\\":[{\\"TemplateName\\":\\"模板1\\",\\"SpecificationName\\":\\"bandwith-0\\",\\"CustomData\\":\\"1\\"}]}',
                            ],
                            'OperationMetadata' => [
                                'description' => '代运维配置。',
                                'type' => 'string',
                                'example' => '{\\"PrometheusConfigMap\\":{\\"New_Vpc_Ack_And_Jumpserver\\":{}}}',
                            ],
                            'TestStatus' => [
                                'description' => '测试状态。可能的值：'."\n"
                                    ."\n"
                                    .'- `CONFIG_IS_NULL`：测试配置不存在。'."\n"
                                    ."\n"
                                    .'- `SERVICE_TEST_SUCCEED`：服务测试通过。'."\n"
                                    ."\n"
                                    .'- `SERVICE_TSET_DOING`：服务测试尚未通过。',
                                'type' => 'string',
                                'example' => 'SERVICE_TEST_SUCCEED',
                            ],
                            'ApprovalType' => [
                                'description' => '服务使用申请审批类型。可能的值：'."\n"
                                    ."\n"
                                    .'- Manual：收到审批。'."\n"
                                    ."\n"
                                    .'- AutoPass：自动通过。',
                                'type' => 'string',
                                'example' => 'Manual',
                            ],
                            'RegistrationId' => [
                                'description' => '注册ID。',
                                'type' => 'string',
                                'example' => 'sr-04056c2ab4b94bxxxxxx',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-aekzuqyxxxxxx',
                            ],
                            'Permission' => [
                                'description' => '权限类型。可能的值：'."\n"
                                    ."\n"
                                    .'- Deployable：可部署。'."\n"
                                    ."\n"
                                    .'- Accessible：可访问。',
                                'type' => 'string',
                                'example' => 'Deployable',
                            ],
                            'Statistic' => [
                                'description' => '统计信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AccumulativeInstanceCount' => [
                                        'description' => '累计实例数。'."\n"
                                            .'包含历史已删除的实例。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '75',
                                    ],
                                    'AccumulativeUserCount' => [
                                        'description' => '累计用户数。'."\n"
                                            .'包含历史用户。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '60',
                                    ],
                                    'DeployedServiceInstanceCount' => [
                                        'description' => '线上实例数。'."\n"
                                            .'当前已成功部署的实例数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'DeployedUserCount' => [
                                        'description' => '线上用户数。'."\n"
                                            .'当前已成功部署的实例对应的用户数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'SubmittedUsageCount' => [
                                        'description' => '待审核（Submitted状态）的服务申请个数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'AccumulativePocAmount' => [
                                        'description' => '试用累计消耗金额。单位：元。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '80.35',
                                    ],
                                    'AveragePocAmount' => [
                                        'description' => '试用服务实例平均消耗金额。单位：元。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '40.17',
                                    ],
                                    'AveragePocUnitAmount' => [
                                        'description' => '试用服务实例平均单位时间消耗金额。单位：元。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '167.9',
                                    ],
                                    'AveragePocDuration' => [
                                        'description' => '试用服务实例平均时长。单位：时。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'SourceServiceId' => [
                                'description' => '分销源服务ID。',
                                'type' => 'string',
                                'example' => 'service-70a3b15bb62643xxxxxx',
                            ],
                            'SourceServiceVersion' => [
                                'description' => '分销源服务版本。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'SourceSupplierName' => [
                                'description' => '分销源服务商名称。',
                                'type' => 'string',
                                'example' => 'SourceSupplier',
                            ],
                            'LogMetadata' => [
                                'description' => '应用日志配置。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'  "Logstores": ['."\n"
                                    .'    {'."\n"
                                    .'    	"LogstoreName": "access-log",'."\n"
                                    .'  		"LogPath": "/home/admin/app/logs", # 对容器不需要，在YAML中配置'."\n"
                                    .'  		"FilePattern": "access.log*" # 对容器不需要，在YAML中配置'."\n"
                                    .'    }'."\n"
                                    .'  ]'."\n"
                                    .'}',
                            ],
                            'Resellable' => [
                                'description' => '是否支持分销。可能的值：'."\n"
                                    ."\n"
                                    .'- false：不支持。'."\n"
                                    ."\n"
                                    .'- true：支持。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'VirtualInternetService' => [
                                'description' => '是否是虚拟互联网服务。可能的值：'."\n"
                                    ."\n"
                                    .'- false：否。'."\n"
                                    ."\n"
                                    .'- true：是。',
                                'type' => 'string',
                                'example' => 'false',
                            ],
                            'ServiceDiscoverable' => [
                                'description' => '服务是否可发现。可能的值：'."\n"
                                    ."\n"
                                    .'- INVISIBLE：不可发现。'."\n"
                                    ."\n"
                                    .'- DISCOVERABLE：可发现。',
                                'type' => 'string',
                                'example' => 'DISCOVERABLE',
                            ],
                            'Categories' => [
                                'description' => '服务分类。',
                                'type' => 'string',
                                'example' => 'DevOps',
                            ],
                            'ShareTypeStatus' => [
                                'description' => '服务共享状态。'."\n"
                                    .'><notice>该参数已弃用。></notice>',
                                'type' => 'string',
                                'example' => '该参数已弃用。',
                            ],
                            'ServiceAuditDocumentUrl' => [
                                'description' => '服务审核文件URL。',
                                'type' => 'string',
                                'example' => 'https://service-info-public.oss-cn-hangzhou.aliyuncs.com/1690707531xxxxxx/service-document/be3382cd-xxxx-xxxx-xxxx-f8707ec12879.docx',
                            ],
                            'EntitySource' => [
                                'description' => '上报源。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'ComputNest',
                                    'description' => '上报源。可能的值：'."\n"
                                        ."\n"
                                        .'- ComputNest：计算巢上报。'."\n"
                                        ."\n"
                                        .'- Custom：服务商上报。',
                                ],
                            ],
                            'CrossRegionConnectionStatus' => [
                                'description' => '商品模块绑定关系。',
                                'type' => 'string',
                                'example' => 'componesConfigs',
                            ],
                            'VirtualInternetServiceId' => [
                                'description' => '虚拟互联网服务ID。',
                                'type' => 'string',
                                'example' => 'service-70a3b15bb62643xxxxxx',
                            ],
                            'Commodity' => [
                                'description' => '商品规格。',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '类型。可能的值：'."\n"
                                            ."\n"
                                            .'- Marketplace：云市场。'."\n"
                                            ."\n"
                                            .'- Css：凌霄。',
                                        'type' => 'string',
                                        'example' => 'Marketplace',
                                    ],
                                    'ChargeType' => [
                                        'description' => '付费类型。取值：'."\n"
                                            .'- **PREPAY**（默认值）：预付费，即包年包月。'."\n"
                                            .'- **POSTPAY**：后付费，即按量付费。',
                                        'type' => 'string',
                                        'example' => 'PREPAY',
                                    ],
                                    'Components' => [
                                        'description' => '商品模块。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '商品模块。',
                                            'type' => 'string',
                                            'example' => 'YARN',
                                        ],
                                    ],
                                    'Specifications' => [
                                        'description' => '云市场规格详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '云市场规格详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Code' => [
                                                    'description' => '商品code。',
                                                    'type' => 'string',
                                                    'example' => 'cmjj00xxxx',
                                                ],
                                                'Name' => [
                                                    'description' => '规格名称。',
                                                    'type' => 'string',
                                                    'example' => 'specifications1',
                                                ],
                                                'Times' => [
                                                    'description' => '允许购买的时长。单位：周或者年。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '允许购买的时长。单位：周或者年。',
                                                        'type' => 'string',
                                                        'example' => '3',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'MeteringEntities' => [
                                        'description' => '计量项信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '计量项信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EntityId' => [
                                                    'description' => '计量项ID。',
                                                    'type' => 'string',
                                                    'example' => 'cmgjxxxxxxxx-NetworkOut',
                                                ],
                                                'Name' => [
                                                    'description' => '计量项属性名称。',
                                                    'type' => 'string',
                                                    'example' => 'spring-boot-demo',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'MarketplaceMetadata' => [
                                        'description' => '云市场元数据信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SpecificationMappings' => [
                                                'description' => '商品规格与模板或套餐的关系。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '商品规格与模板或套餐的关系。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'SpecificationCode' => [
                                                            'description' => '云市场商品规格code。',
                                                            'type' => 'string',
                                                            'example' => 'cmjj00xxxx',
                                                        ],
                                                        'TemplateName' => [
                                                            'description' => '模板名称。',
                                                            'type' => 'string',
                                                            'example' => '模板1',
                                                        ],
                                                        'SpecificationName' => [
                                                            'description' => '套餐名称。',
                                                            'type' => 'string',
                                                            'example' => '按量付费',
                                                        ],
                                                        'TrialType' => [
                                                            'description' => '试用类型。可选值：'."\n"
                                                                ."\n"
                                                                .'- Trial：支持试用。'."\n"
                                                                ."\n"
                                                                .'- NotTrial：不支持试用。',
                                                            'type' => 'string',
                                                            'example' => 'NotTrial',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'MeteringEntityMappings' => [
                                                'description' => '套餐与计量维度的绑定关系。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '套餐与计量维度的绑定关系。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'EntityIds' => [
                                                            'description' => '计量项ID。',
                                                            'type' => 'string',
                                                            'example' => 'cmgjxxxxxxxx-NetworkOut-2',
                                                        ],
                                                        'TemplateName' => [
                                                            'description' => '模板名称。',
                                                            'type' => 'string',
                                                            'example' => '模板1',
                                                        ],
                                                        'SpecificationName' => [
                                                            'description' => '套餐名称。',
                                                            'type' => 'string',
                                                            'example' => '按量付费套餐',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'MeteringEntityExtraInfos' => [
                                                'description' => '计量项配置信息。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '计量项配置信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'EntityId' => [
                                                            'description' => '计量项ID。',
                                                            'type' => 'string',
                                                            'example' => 'cmgjxxxxxxxx-NetworkOut-2',
                                                        ],
                                                        'Type' => [
                                                            'description' => '计量指标。',
                                                            'type' => 'string',
                                                            'example' => 'AvgPod',
                                                        ],
                                                        'MetricName' => [
                                                            'description' => '计量指标名称。',
                                                            'type' => 'string',
                                                            'example' => 'NetworkLantency',
                                                        ],
                                                        'Promql' => [
                                                            'description' => '自定义prometheus语句。',
                                                            'type' => 'string',
                                                            'example' => 'avg_over_time(count(kube_pod_info{namespace=\\"default\\"})[1h:1m])',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CssMetadata' => [
                                        'description' => '凌霄配置元数据。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ComponentsMappings' => [
                                                'description' => '计费项映射。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '计费项映射。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Mappings' => [
                                                            'description' => '映射关系。',
                                                            'type' => 'object',
                                                            'additionalProperties' => [
                                                                'type' => 'string',
                                                                'example' => '{{DBInstanceStorage}}',
                                                                'description' => '映射关系。',
                                                            ],
                                                        ],
                                                        'TemplateName' => [
                                                            'description' => '模板名称。',
                                                            'type' => 'string',
                                                            'example' => '模板1',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'MeteringEntityMappings' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'EntityIds' => [
                                                            'type' => 'string',
                                                        ],
                                                        'TemplateName' => [
                                                            'type' => 'string',
                                                        ],
                                                        'SpecificationName' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'MeteringEntityExtraInfos' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'EntityId' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Type' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MetricName' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Promql' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CommodityCode' => [
                                        'description' => '云市场商品code。',
                                        'type' => 'string',
                                        'example' => 'cmjj00xxxx',
                                    ],
                                    'SaasBoostMetadata' => [
                                        'description' => 'SaasBoost配置元数据。',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'    "Enabled":false'."\n"
                                            .'    //公网交互地址'."\n"
                                            .'    "PublicAccessUrl":"https://example.com"'."\n"
                                            .'}',
                                    ],
                                ],
                            ],
                            'BuildInfo' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Online\\",\\n  \\"DeployMetadata\\": \\"{\\\\\\\\\\\\\\"TemplateConfigs\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"模板1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oss://computenest-test/template\\\\\\" \\\\n            + \\\\\\".json?RegionId=cn-beijing\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"PredefinedParameters\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"低配版\\\\\\\\\\\\\\",\\\\\\" \\\\n            + \\\\\\"\\\\\\\\\\\\\\"Parameters\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"InstanceType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ecs.g5.large\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"DataDiskSize\\\\\\\\\\\\\\":40}},{\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"高配版\\\\\\\\\\\\\\",\\\\\\" \\\\n            + \\\\\\"\\\\\\\\\\\\\\"Parameters\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"InstanceType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ecs.g5.large\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"DataDiskSize\\\\\\\\\\\\\\":200}}]}]}\\",\\n  \\"PublishTime\\": \\"2021-05-21T00:00:00Z\\",\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\",\\n  \\"Version\\": \\"1.0\\",\\n  \\"DeployType\\": \\"ros\\",\\n  \\"ServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n  \\"SupplierUrl\\": \\"http://example.com\\",\\n  \\"ServiceDocUrl\\": \\"http://example1.com\\",\\n  \\"ServiceProductUrl\\": \\"http://example2.com\\",\\n  \\"ServiceType\\": \\"private\\",\\n  \\"SupplierName\\": \\"A公司\\",\\n  \\"ServiceInfos\\": [\\n    {\\n      \\"Locale\\": \\"zh-CN\\",\\n      \\"Image\\": \\"https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png\\",\\n      \\"Name\\": \\"B数据库\\",\\n      \\"ShortDescription\\": \\"B是A公司自主设计并研发的开源分布式的关系型数据库\\",\\n      \\"LongDescriptionUrl\\": \\"https://example.com\\",\\n      \\"Agreements\\": [\\n        {\\n          \\"Name\\": \\"Name\\",\\n          \\"Url\\": \\"https://aliyun.com/xxxxxxxx.html\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"CommodityCode\\": \\"cmjj00xxxx\\",\\n  \\"IsSupportOperated\\": false,\\n  \\"PolicyNames\\": \\"policyName1, policyName2\\",\\n  \\"Duration\\": 259200,\\n  \\"Progress\\": 90,\\n  \\"StatusDetail\\": \\"deploy successfully\\",\\n  \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n  \\"UpdateTime\\": \\"2021-05-22T00:00:00Z\\",\\n  \\"ShareType\\": \\"Public\\",\\n  \\"AlarmMetadata\\": \\"{\\\\n  \\\\\\"TemplateUrl\\\\\\": \\\\\\"http://template.file.url\\\\\\",\\\\n  // 应用分组级别告警元数据\\\\n  \\\\\\"ApplicationGroups\\\\\\": [\\\\n    {\\\\n      \\\\\\"Name\\\\\\": \\\\\\"applicationGroup1\\\\\\",\\\\n      \\\\\\"TemplateUrl\\\\\\": \\\\\\"url1\\\\\\"\\\\n    },\\\\n    {\\\\n      \\\\\\"Name\\\\\\": \\\\\\"applicationGroup2\\\\\\",\\\\n      \\\\\\"TemplateUrl\\\\\\": \\\\\\"url2\\\\\\"\\\\n    }\\\\n  ]\\\\n}\\",\\n  \\"UpgradeMetadata\\": \\"{\\\\\\\\\\\\\\"Description\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"xxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"SupportRollback\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"SupportUpgradeFromVersions\\\\\\\\\\\\\\":[],\\\\\\\\\\\\\\"UpgradeComponents\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"Configuration\\\\\\\\\\\\\\"]}\\",\\n  \\"VersionName\\": \\"v1\\",\\n  \\"PayFromType\\": \\"None\\",\\n  \\"PayType\\": \\"Permanent\\",\\n  \\"DefaultLicenseDays\\": 1,\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"key1\\",\\n      \\"Value\\": \\"value1\\"\\n    }\\n  ],\\n  \\"TrialDuration\\": 7,\\n  \\"TrialType\\": \\"Trial\\",\\n  \\"TenantType\\": \\"SingleTenant\\",\\n  \\"LicenseMetadata\\": \\"{\\\\\\\\\\\\\\"PayType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CustomFixTime\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"DefaultLicenseDays\\\\\\\\\\\\\\":7,\\\\\\\\\\\\\\"CustomMetadata\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"TemplateName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"模板1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"SpecificationName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"bandwith-0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CustomData\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1\\\\\\\\\\\\\\"}]}\\",\\n  \\"OperationMetadata\\": \\"{\\\\\\\\\\\\\\"PrometheusConfigMap\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"New_Vpc_Ack_And_Jumpserver\\\\\\\\\\\\\\":{}}}\\",\\n  \\"TestStatus\\": \\"SERVICE_TEST_SUCCEED\\",\\n  \\"ApprovalType\\": \\"Manual\\",\\n  \\"RegistrationId\\": \\"sr-04056c2ab4b94bxxxxxx\\",\\n  \\"ResourceGroupId\\": \\"rg-aekzuqyxxxxxx\\",\\n  \\"Permission\\": \\"Deployable\\",\\n  \\"Statistic\\": {\\n    \\"AccumulativeInstanceCount\\": 75,\\n    \\"AccumulativeUserCount\\": 60,\\n    \\"DeployedServiceInstanceCount\\": 20,\\n    \\"DeployedUserCount\\": 10,\\n    \\"SubmittedUsageCount\\": 10,\\n    \\"AccumulativePocAmount\\": 80.35,\\n    \\"AveragePocAmount\\": 40.17,\\n    \\"AveragePocUnitAmount\\": 167.9,\\n    \\"AveragePocDuration\\": 1\\n  },\\n  \\"SourceServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n  \\"SourceServiceVersion\\": \\"1\\",\\n  \\"SourceSupplierName\\": \\"SourceSupplier\\",\\n  \\"LogMetadata\\": \\"{\\\\n  \\\\\\"Logstores\\\\\\": [\\\\n    {\\\\n    \\\\t\\\\\\"LogstoreName\\\\\\": \\\\\\"access-log\\\\\\",\\\\n  \\\\t\\\\t\\\\\\"LogPath\\\\\\": \\\\\\"/home/admin/app/logs\\\\\\", # 对容器不需要，在YAML中配置\\\\n  \\\\t\\\\t\\\\\\"FilePattern\\\\\\": \\\\\\"access.log*\\\\\\" # 对容器不需要，在YAML中配置\\\\n    }\\\\n  ]\\\\n}\\",\\n  \\"Resellable\\": false,\\n  \\"VirtualInternetService\\": \\"false\\",\\n  \\"ServiceDiscoverable\\": \\"DISCOVERABLE\\",\\n  \\"Categories\\": \\"DevOps\\",\\n  \\"ShareTypeStatus\\": \\"该参数已弃用。\\",\\n  \\"ServiceAuditDocumentUrl\\": \\"https://service-info-public.oss-cn-hangzhou.aliyuncs.com/1690707531xxxxxx/service-document/be3382cd-xxxx-xxxx-xxxx-f8707ec12879.docx\\",\\n  \\"EntitySource\\": {\\n    \\"key\\": \\"ComputNest\\"\\n  },\\n  \\"CrossRegionConnectionStatus\\": \\"componesConfigs\\",\\n  \\"VirtualInternetServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n  \\"Commodity\\": {\\n    \\"Type\\": \\"Marketplace\\",\\n    \\"ChargeType\\": \\"PREPAY\\",\\n    \\"Components\\": [\\n      \\"YARN\\"\\n    ],\\n    \\"Specifications\\": [\\n      {\\n        \\"Code\\": \\"cmjj00xxxx\\",\\n        \\"Name\\": \\"specifications1\\",\\n        \\"Times\\": [\\n          \\"3\\"\\n        ]\\n      }\\n    ],\\n    \\"MeteringEntities\\": [\\n      {\\n        \\"EntityId\\": \\"cmgjxxxxxxxx-NetworkOut\\",\\n        \\"Name\\": \\"spring-boot-demo\\"\\n      }\\n    ],\\n    \\"MarketplaceMetadata\\": {\\n      \\"SpecificationMappings\\": [\\n        {\\n          \\"SpecificationCode\\": \\"cmjj00xxxx\\",\\n          \\"TemplateName\\": \\"模板1\\",\\n          \\"SpecificationName\\": \\"按量付费\\",\\n          \\"TrialType\\": \\"NotTrial\\"\\n        }\\n      ],\\n      \\"MeteringEntityMappings\\": [\\n        {\\n          \\"EntityIds\\": \\"cmgjxxxxxxxx-NetworkOut-2\\",\\n          \\"TemplateName\\": \\"模板1\\",\\n          \\"SpecificationName\\": \\"按量付费套餐\\"\\n        }\\n      ],\\n      \\"MeteringEntityExtraInfos\\": [\\n        {\\n          \\"EntityId\\": \\"cmgjxxxxxxxx-NetworkOut-2\\",\\n          \\"Type\\": \\"AvgPod\\",\\n          \\"MetricName\\": \\"NetworkLantency\\",\\n          \\"Promql\\": \\"avg_over_time(count(kube_pod_info{namespace=\\\\\\\\\\\\\\"default\\\\\\\\\\\\\\"})[1h:1m])\\"\\n        }\\n      ]\\n    },\\n    \\"CssMetadata\\": {\\n      \\"ComponentsMappings\\": [\\n        {\\n          \\"Mappings\\": {\\n            \\"key\\": \\"{{DBInstanceStorage}}\\"\\n          },\\n          \\"TemplateName\\": \\"模板1\\"\\n        }\\n      ],\\n      \\"MeteringEntityMappings\\": [\\n        {\\n          \\"EntityIds\\": \\"\\",\\n          \\"TemplateName\\": \\"\\",\\n          \\"SpecificationName\\": \\"\\"\\n        }\\n      ],\\n      \\"MeteringEntityExtraInfos\\": [\\n        {\\n          \\"EntityId\\": \\"\\",\\n          \\"Type\\": \\"\\",\\n          \\"MetricName\\": \\"\\",\\n          \\"Promql\\": \\"\\"\\n        }\\n      ]\\n    },\\n    \\"CommodityCode\\": \\"cmjj00xxxx\\",\\n    \\"SaasBoostMetadata\\": \\"{\\\\n    \\\\\\"Enabled\\\\\\":false\\\\n    //公网交互地址\\\\n    \\\\\\"PublicAccessUrl\\\\\\":\\\\\\"https://example.com\\\\\\"\\\\n}\\"\\n  },\\n  \\"BuildInfo\\": \\"\\"\\n}","type":"json"}]',
            'title' => '查询服务详细信息',
        ],
        'DeployServiceInstance' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'si-0e6fca6a51a54420****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
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
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B8A6AEA6-0D8F-589A-A7FF-B44FD842456E',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B8A6AEA6-0D8F-589A-A7FF-B44FD842456E\\"\\n}","type":"json"}]',
            'title' => '部署服务实例',
            'summary' => '部署服务实例。',
        ],
        'GetServiceInstance' => [
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
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'si-d6ab3a63ccbb4b17****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
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
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '服务实例的部署状态。可能值：'."\n"
                                    ."\n"
                                    .'- Created：已创建'."\n"
                                    ."\n"
                                    .'- Deploying：部署中'."\n"
                                    ."\n"
                                    .'- DeployedFailed：部署失败'."\n"
                                    ."\n"
                                    .'- Deployed：已部署'."\n"
                                    ."\n"
                                    .'- Upgrading：升级中'."\n"
                                    ."\n"
                                    .'- Deleting：删除中'."\n"
                                    ."\n"
                                    .'- Deleted：已删除'."\n"
                                    ."\n"
                                    .'- DeletedFailed：删除失败',
                                'type' => 'string',
                                'example' => 'Deployed',
                            ],
                            'TemplateName' => [
                                'description' => '模板名称。',
                                'type' => 'string',
                                'example' => '模板1',
                            ],
                            'UpdateTime' => [
                                'description' => '更新时间。',
                                'type' => 'string',
                                'example' => '2021-05-20T00:00:00Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '	'."\n"
                                    .'4DB0F536-B3BE-4F0D-BD29-E83FB56D550C',
                            ],
                            'ServiceInstanceId' => [
                                'description' => '服务实例ID。',
                                'type' => 'string',
                                'example' => 'si-d6ab3a63ccbb4b17****',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2021-05-20T00:00:00Z',
                            ],
                            'UserId' => [
                                'description' => '用户AliUid。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1234567',
                            ],
                            'SupplierUid' => [
                                'description' => '服务商AliUid。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1964460391538545',
                            ],
                            'Service' => [
                                'description' => '服务详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '服务状态。可能的值：'."\n"
                                            ."\n"
                                            .'Draft：待提交注册。'."\n"
                                            ."\n"
                                            .'Submited：已提交注册。'."\n"
                                            ."\n"
                                            .'Approved：已通过注册审核。'."\n"
                                            ."\n"
                                            .'Online：已上线。'."\n"
                                            ."\n"
                                            .'Offline：已下线。'."\n"
                                            ."\n"
                                            .'Deleted：已删除。'."\n"
                                            ."\n"
                                            .'Launching：服务上线中。',
                                        'type' => 'string',
                                        'example' => 'Online',
                                    ],
                                    'PublishTime' => [
                                        'description' => '发布时间。',
                                        'type' => 'string',
                                        'example' => '2021-05-21T00:00:00Z',
                                    ],
                                    'Version' => [
                                        'description' => '服务版本。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'DeployMetadata' => [
                                        'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。 ',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'      "EstimateTime": null,'."\n"
                                            .'      "SupplierDeployMetadata": {'."\n"
                                            .'            "DeployTimeout": null'."\n"
                                            .'      },'."\n"
                                            .'      "TemplateConfigs": ['."\n"
                                            .'            {'."\n"
                                            .'                  "Name": "模板1",'."\n"
                                            .'                  "Url": "https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json",'."\n"
                                            .'                  "PredefinedParameters": [],'."\n"
                                            .'                  "AllowedRegions": ['."\n"
                                            .'                        "cn-hangzhou"'."\n"
                                            .'                  ]'."\n"
                                            .'            }'."\n"
                                            .'      ]'."\n"
                                            .'}',
                                    ],
                                    'DeployType' => [
                                        'description' => '部署类型。可能值：'."\n"
                                            ."\n"
                                            .'- ros：通过ROS部署。'."\n"
                                            ."\n"
                                            .'- terraform：通过Terraform部署。'."\n"
                                            ."\n"
                                            .'- ack：通过ACK部署。'."\n"
                                            ."\n"
                                            .'- spi：调用SPI部署。'."\n"
                                            ."\n"
                                            .'- operation：代运维服务部署。',
                                        'type' => 'string',
                                        'example' => 'ros',
                                    ],
                                    'ServiceId' => [
                                        'description' => '服务ID。',
                                        'type' => 'string',
                                        'example' => 'service-9c8a3522528b4fe8****',
                                    ],
                                    'SupplierUrl' => [
                                        'description' => '服务商地址。',
                                        'type' => 'string',
                                        'example' => 'http://example.com',
                                    ],
                                    'ServiceProductUrl' => [
                                        'description' => '产品页URL。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'https://service-info-private.oss-cn-hangzhou.aliyuncs.com',
                                    ],
                                    'ServiceDocUrl' => [
                                        'description' => '产品文档的URL。',
                                        'type' => 'string',
                                        'example' => 'http://example.com',
                                    ],
                                    'ServiceType' => [
                                        'description' => '服务类型。可能值：'."\n"
                                            ."\n"
                                            .'- private：部署在用户账户下。'."\n"
                                            ."\n"
                                            .'- managed：托管在服务商账户下。'."\n"
                                            ."\n"
                                            .'- operation：代运维服务。',
                                        'type' => 'string',
                                        'example' => 'private',
                                    ],
                                    'SupplierName' => [
                                        'description' => '服务商名称。',
                                        'type' => 'string',
                                        'example' => 'A公司',
                                    ],
                                    'ServiceInfos' => [
                                        'description' => '服务信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '服务信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Locale' => [
                                                    'description' => '服务实例语言。',
                                                    'type' => 'string',
                                                    'example' => 'zh-CN',
                                                ],
                                                'Image' => [
                                                    'description' => '服务图标地址。',
                                                    'type' => 'string',
                                                    'example' => 'https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png',
                                                ],
                                                'Name' => [
                                                    'description' => '服务名称。',
                                                    'type' => 'string',
                                                    'example' => 'B数据库',
                                                ],
                                                'ShortDescription' => [
                                                    'description' => '服务概述。',
                                                    'type' => 'string',
                                                    'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'VersionName' => [
                                        'description' => '服务商自定义版本名称。',
                                        'type' => 'string',
                                        'example' => '版本A',
                                    ],
                                    'UpgradableServiceVersions' => [
                                        'description' => '可升级的服务版本号。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '可升级的服务版本号。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                            'Parameters' => [
                                'description' => '部署服务实例输入的参数。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'      "param": "value"'."\n"
                                    .'}',
                            ],
                            'Progress' => [
                                'description' => '服务实例的部署进度，单位：%。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '90',
                            ],
                            'StatusDetail' => [
                                'description' => '部署实例的状态描述。',
                                'type' => 'string',
                                'example' => 'deploy successfully',
                            ],
                            'OperationStartTime' => [
                                'description' => '代运维开始时间。',
                                'type' => 'string',
                                'example' => '2021-12-29T06:48:56Z',
                            ],
                            'OperationEndTime' => [
                                'description' => '代运维结束时间。',
                                'type' => 'string',
                                'example' => '2022-01-28T06:48:56Z',
                            ],
                            'OperatedServiceInstanceId' => [
                                'description' => '被代运维的服务实例ID。',
                                'type' => 'string',
                                'example' => 'si-d6ab3a63ccbb4b17****',
                            ],
                            'IsOperated' => [
                                'description' => '服务实例的代运维功能是否开启。可能值：'."\n"
                                    ."\n"
                                    .'- true：服务实例的代运维功能已开启'."\n"
                                    ."\n"
                                    .'- false：服务实例的代运维功能未开启',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'EnableInstanceOps' => [
                                'description' => '服务实例是否有代运维功能。可能的值：'."\n"
                                    ."\n"
                                    .'- true：服务实例有代运维功能'."\n"
                                    ."\n"
                                    .'- false：服务实例没有代运维功能',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Resources' => [
                                'description' => '资源列表。',
                                'type' => 'string',
                                'example' => '['."\n"
                                    .'      {'."\n"
                                    .'            "StackId": "stack-xxx"'."\n"
                                    .'      }'."\n"
                                    .']',
                            ],
                            'NetworkConfig' => [
                                'description' => '网络配置信息。'."\n"
                                    ."\n"
                                    .'> 该参数已废弃。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'EndpointServiceId' => [
                                        'description' => '私网连接的终端节点服务ID。'."\n"
                                            .'> 该参数已废弃。',
                                        'type' => 'string',
                                        'example' => 'epsrv-5ei07324541816bxxxx',
                                    ],
                                    'EndpointId' => [
                                        'description' => '私网连接的终端节点id。'."\n"
                                            ."\n"
                                            .'> 该参数已废弃。',
                                        'type' => 'string',
                                        'example' => 'ep-m5ei37240541816b****',
                                    ],
                                    'PrivateVpcConnections' => [
                                        'description' => '私网连接信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '私网连接信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndpointId' => [
                                                    'description' => '私网连接的终端节点ID。',
                                                    'type' => 'string',
                                                    'example' => 'ep-m5ei37240541816b****',
                                                ],
                                                'EndpointServiceId' => [
                                                    'description' => '私网连接的终端节点服务ID。',
                                                    'type' => 'string',
                                                    'example' => 'epsrv-5ei07324541816bxxxx',
                                                ],
                                                'PrivateZoneName' => [
                                                    'description' => '自定义域名。',
                                                    'type' => 'string',
                                                    'example' => 'test.computenest.aliyuncs.com',
                                                ],
                                                'ConnectionConfigs' => [
                                                    'description' => '网络配置信息。'."\n"
                                                        .'主要用于私网连接。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '网络配置信息。'."\n"
                                                            .'主要用于私网连接。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'VpcId' => [
                                                                'description' => '专有网络ID。',
                                                                'type' => 'string',
                                                                'example' => 'vpc-bp1vwnn14rqpyiczj****',
                                                            ],
                                                            'SecurityGroups' => [
                                                                'description' => '安全组名称。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '安全组名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'sg-m5ec4mvoq9egn7xxxxxx',
                                                                ],
                                                            ],
                                                            'VSwitches' => [
                                                                'description' => '虚拟交换机名称。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '虚拟交换机名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'vsw-uf6iqwohr05dw4mxxxxxx',
                                                                ],
                                                            ],
                                                            'IngressEndpointStatus' => [
                                                                'description' => 'IngressEndpoint状态。可能的值：'."\n"
                                                                    ."\n"
                                                                    .'- Ready（已连接）。'."\n"
                                                                    ."\n"
                                                                    .'- Pending（连接中）。'."\n"
                                                                    ."\n"
                                                                    .'- Failed（连接失败）。'."\n"
                                                                    ."\n"
                                                                    .'- Deleted（已删除）。'."\n"
                                                                    ."\n"
                                                                    .'- Deleting（删除中）。',
                                                                'type' => 'string',
                                                                'example' => 'Ready',
                                                            ],
                                                            'NetworkServiceStatus' => [
                                                                'description' => 'NetworkServiceStatus状态。可能的值：'."\n"
                                                                    ."\n"
                                                                    .'- Ready（已连接）。'."\n"
                                                                    ."\n"
                                                                    .'- Pending（连接中）。'."\n"
                                                                    ."\n"
                                                                    .'- Failed（连接失败）。'."\n"
                                                                    ."\n"
                                                                    .'- Deleted（已删除）。'."\n"
                                                                    ."\n"
                                                                    .'- Deleting（删除中）。',
                                                                'type' => 'string',
                                                                'example' => 'Ready',
                                                            ],
                                                            'EndpointIps' => [
                                                                'description' => '私网连接终端节点IP。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '私网连接终端节点IP。',
                                                                    'type' => 'string',
                                                                    'example' => '192.xxx.xxx.xxx',
                                                                ],
                                                            ],
                                                            'DomainName' => [
                                                                'description' => '域名名称。',
                                                                'type' => 'string',
                                                                'example' => 'example.com',
                                                            ],
                                                            'ConnectBandwidth' => [
                                                                'description' => '使用计算巢内网互联建立连接的限速带宽。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1536Mbps',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ReversePrivateVpcConnections' => [
                                        'description' => '反向私网连接信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '反向私网连接信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndpointId' => [
                                                    'description' => '反向私网连接的终端节点ID。',
                                                    'type' => 'string',
                                                    'example' => 'ep-m5ei42370541816b****',
                                                ],
                                                'EndpointServiceId' => [
                                                    'description' => '私网连接的终端节点服务ID。',
                                                    'type' => 'string',
                                                    'example' => 'epsrv-5ei07324541816bxxxx',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Tags' => [
                                'description' => '用户自定义标签。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户自定义标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'key1',
                                        ],
                                        'Value' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'value1',
                                        ],
                                    ],
                                ],
                            ],
                            'Outputs' => [
                                'description' => '创建服务实例返回的输出字段。'."\n"
                                    ."\n"
                                    .'- ROS模式下，返回模板所有输出字段。'."\n"
                                    ."\n"
                                    .'- SPI模式下，返回ISV输出字段和计算巢附加功能输出字段。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'      "InstanceIds": ['."\n"
                                    .'            "i-hp38ofxl0dsyfi7z****"'."\n"
                                    .'      ]'."\n"
                                    .'}',
                            ],
                            'EndTime' => [
                                'description' => '服务实例过期时间。',
                                'type' => 'string',
                                'example' => '2022-01-01T12:00:00',
                            ],
                            'Source' => [
                                'description' => '服务实例来源。可能的值：'."\n"
                                    ."\n"
                                    .'- User：计算巢用户。'."\n"
                                    ."\n"
                                    .'- Market：云市场。'."\n"
                                    ."\n"
                                    .'- Supplier：计算巢服务商。',
                                'type' => 'string',
                                'example' => 'User',
                            ],
                            'ServiceType' => [
                                'description' => '服务类型。可能的值：'."\n"
                                    ."\n"
                                    .'- private：部署在用户账户下的服务实例。'."\n"
                                    ."\n"
                                    .'- managed：托管在服务商账户下的服务实例。'."\n"
                                    ."\n"
                                    .'- operation：代运维服务实例'."\n"
                                    ."\n"
                                    .'- poc：试用服务实例。',
                                'type' => 'string',
                                'example' => 'private',
                            ],
                            'PayType' => [
                                'description' => '付费类型。取值范围：'."\n"
                                    ."\n"
                                    .'- Permanent：永久购买。'."\n"
                                    ."\n"
                                    .'- Subscription：云市场包年包月。'."\n"
                                    ."\n"
                                    .'- PayAsYouGo：云市场按量付费。'."\n"
                                    ."\n"
                                    .'- CustomFixTime：商家自定义固定时长。',
                                'type' => 'string',
                                'example' => 'Subscription',
                            ],
                            'LicenseMetadata' => [
                                'description' => '许可证元数据。',
                                'type' => 'string',
                                'example' => '{"renewType":"MONTHLY"}',
                            ],
                            'Name' => [
                                'description' => '服务实例名称。',
                                'type' => 'string',
                                'example' => 'TestName',
                            ],
                            'EnableUserPrometheus' => [
                                'description' => '用户侧是否启用prometheus',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RdAccountLoginUrl' => [
                                'description' => '服务实例对应的资源目录成员用户登录url',
                                'type' => 'string',
                                'example' => 'https://signin.aliyun.com/switchRole.htm?parentAlias=1307782318217247.onaliyun.com&roleName=ResourceDirectoryAccountAccessRole',
                            ],
                            'PredefinedParameterName' => [
                                'description' => '套餐名称。',
                                'type' => 'string',
                                'example' => '套餐一',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID。',
                                'type' => 'string',
                                'example' => 'rg-aekzkt5buxxxxxx',
                            ],
                            'BizStatus' => [
                                'description' => '服务实例的业务状态。可能的值：'."\n"
                                    ."\n"
                                    .'- Normal：正常。'."\n"
                                    ."\n"
                                    .'- Renewing：续费中。'."\n"
                                    ."\n"
                                    .'- RenewFoiled：续费失败。'."\n"
                                    ."\n"
                                    .'- Expired：已过期。',
                                'type' => 'string',
                                'example' => 'Normal',
                            ],
                            'GrafanaDashBoardUrl' => [
                                'description' => 'grafana大盘链接。',
                                'type' => 'string',
                                'example' => 'https://g.xxxxxx.aliyun.com/d/xxxxxxxx-cn-mariadb/mysql-xxxxxxxx-quickstart-and-dashboard?orgId=355401&refresh=10s',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Deployed\\",\\n  \\"TemplateName\\": \\"模板1\\",\\n  \\"UpdateTime\\": \\"2021-05-20T00:00:00Z\\",\\n  \\"RequestId\\": \\"\\\\t\\\\n4DB0F536-B3BE-4F0D-BD29-E83FB56D550C\\",\\n  \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n  \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n  \\"UserId\\": 1234567,\\n  \\"SupplierUid\\": 1964460391538545,\\n  \\"Service\\": {\\n    \\"Status\\": \\"Online\\",\\n    \\"PublishTime\\": \\"2021-05-21T00:00:00Z\\",\\n    \\"Version\\": \\"1\\",\\n    \\"DeployMetadata\\": \\"{\\\\n      \\\\\\"EstimateTime\\\\\\": null,\\\\n      \\\\\\"SupplierDeployMetadata\\\\\\": {\\\\n            \\\\\\"DeployTimeout\\\\\\": null\\\\n      },\\\\n      \\\\\\"TemplateConfigs\\\\\\": [\\\\n            {\\\\n                  \\\\\\"Name\\\\\\": \\\\\\"模板1\\\\\\",\\\\n                  \\\\\\"Url\\\\\\": \\\\\\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json\\\\\\",\\\\n                  \\\\\\"PredefinedParameters\\\\\\": [],\\\\n                  \\\\\\"AllowedRegions\\\\\\": [\\\\n                        \\\\\\"cn-hangzhou\\\\\\"\\\\n                  ]\\\\n            }\\\\n      ]\\\\n}\\",\\n    \\"DeployType\\": \\"ros\\",\\n    \\"ServiceId\\": \\"service-9c8a3522528b4fe8****\\",\\n    \\"SupplierUrl\\": \\"http://example.com\\",\\n    \\"ServiceProductUrl\\": \\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com\\",\\n    \\"ServiceDocUrl\\": \\"http://example.com\\",\\n    \\"ServiceType\\": \\"private\\",\\n    \\"SupplierName\\": \\"A公司\\",\\n    \\"ServiceInfos\\": [\\n      {\\n        \\"Locale\\": \\"zh-CN\\",\\n        \\"Image\\": \\"https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png\\",\\n        \\"Name\\": \\"B数据库\\",\\n        \\"ShortDescription\\": \\"B是A公司自主设计并研发的开源分布式的关系型数据库\\"\\n      }\\n    ],\\n    \\"VersionName\\": \\"版本A\\",\\n    \\"UpgradableServiceVersions\\": [\\n      \\"1\\"\\n    ]\\n  },\\n  \\"Parameters\\": \\"{\\\\n      \\\\\\"param\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n  \\"Progress\\": 90,\\n  \\"StatusDetail\\": \\"deploy successfully\\",\\n  \\"OperationStartTime\\": \\"2021-12-29T06:48:56Z\\",\\n  \\"OperationEndTime\\": \\"2022-01-28T06:48:56Z\\",\\n  \\"OperatedServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n  \\"IsOperated\\": true,\\n  \\"EnableInstanceOps\\": true,\\n  \\"Resources\\": \\"[\\\\n      {\\\\n            \\\\\\"StackId\\\\\\": \\\\\\"stack-xxx\\\\\\"\\\\n      }\\\\n]\\",\\n  \\"NetworkConfig\\": {\\n    \\"EndpointServiceId\\": \\"epsrv-5ei07324541816bxxxx\\",\\n    \\"EndpointId\\": \\"ep-m5ei37240541816b****\\",\\n    \\"PrivateVpcConnections\\": [\\n      {\\n        \\"EndpointId\\": \\"ep-m5ei37240541816b****\\",\\n        \\"EndpointServiceId\\": \\"epsrv-5ei07324541816bxxxx\\",\\n        \\"PrivateZoneName\\": \\"test.computenest.aliyuncs.com\\",\\n        \\"ConnectionConfigs\\": [\\n          {\\n            \\"VpcId\\": \\"vpc-bp1vwnn14rqpyiczj****\\",\\n            \\"SecurityGroups\\": [\\n              \\"sg-m5ec4mvoq9egn7xxxxxx\\"\\n            ],\\n            \\"VSwitches\\": [\\n              \\"vsw-uf6iqwohr05dw4mxxxxxx\\"\\n            ],\\n            \\"IngressEndpointStatus\\": \\"Ready\\",\\n            \\"NetworkServiceStatus\\": \\"Ready\\",\\n            \\"EndpointIps\\": [\\n              \\"192.xxx.xxx.xxx\\"\\n            ],\\n            \\"DomainName\\": \\"example.com\\",\\n            \\"ConnectBandwidth\\": 0\\n          }\\n        ]\\n      }\\n    ],\\n    \\"ReversePrivateVpcConnections\\": [\\n      {\\n        \\"EndpointId\\": \\"ep-m5ei42370541816b****\\",\\n        \\"EndpointServiceId\\": \\"epsrv-5ei07324541816bxxxx\\"\\n      }\\n    ]\\n  },\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"key1\\",\\n      \\"Value\\": \\"value1\\"\\n    }\\n  ],\\n  \\"Outputs\\": \\"{\\\\n      \\\\\\"InstanceIds\\\\\\": [\\\\n            \\\\\\"i-hp38ofxl0dsyfi7z****\\\\\\"\\\\n      ]\\\\n}\\",\\n  \\"EndTime\\": \\"2022-01-01T12:00:00\\",\\n  \\"Source\\": \\"User\\",\\n  \\"ServiceType\\": \\"private\\",\\n  \\"PayType\\": \\"Subscription\\",\\n  \\"LicenseMetadata\\": \\"{\\\\\\"renewType\\\\\\":\\\\\\"MONTHLY\\\\\\"}\\",\\n  \\"Name\\": \\"TestName\\",\\n  \\"EnableUserPrometheus\\": true,\\n  \\"RdAccountLoginUrl\\": \\"https://signin.aliyun.com/switchRole.htm?parentAlias=1307782318217247.onaliyun.com&roleName=ResourceDirectoryAccountAccessRole\\",\\n  \\"PredefinedParameterName\\": \\"套餐一\\",\\n  \\"ResourceGroupId\\": \\"rg-aekzkt5buxxxxxx\\",\\n  \\"BizStatus\\": \\"Normal\\",\\n  \\"GrafanaDashBoardUrl\\": \\"https://g.xxxxxx.aliyun.com/d/xxxxxxxx-cn-mariadb/mysql-xxxxxxxx-quickstart-and-dashboard?orgId=355401&refresh=10s\\"\\n}","type":"json"}]',
            'title' => '查询服务实例的详细信息',
            'summary' => '查询指定服务实例的详细信息。',
        ],
        'ListServiceInstances' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BBBAAfu+XtuBE55iRLHEYYuojI4=',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '过滤器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤器。',
                            'type' => 'object',
                            'properties' => [
                                'Value' => [
                                    'description' => '过滤器值列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '过滤器值列表。N的取值范围：1~10。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'value1',
                                    ],
                                    'required' => false,
                                    'maxItems' => 20,
                                ],
                                'Name' => [
                                    'description' => '过滤器名称，可选择一个或者多个名称进行查询。取值范围：'."\n"
                                        ."\n"
                                        .'- Name：按服务名称查询。'."\n"
                                        .'若您需要模糊搜索，则在value处输入内容格式为：*xxx*。例如服务名称为我的服务，在模糊搜索时，可输入*我的*或者*服务*进行搜索。'."\n"
                                        ."\n"
                                        .'- ServiceInstanceId：服务实例ID'."\n"
                                        ."\n"
                                        .'- ServiceId：服务ID'."\n"
                                        ."\n"
                                        .'- UserId：用户ID'."\n"
                                        ."\n"
                                        .'- Version：服务版本'."\n"
                                        ."\n"
                                        .'- Status：服务实例状态'."\n"
                                        ."\n"
                                        .'- DeployType：部署类型'."\n"
                                        ."\n"
                                        .'- ServiceType：服务类型'."\n"
                                        ."\n"
                                        .'- OperationStartTimeBefore：代运维服务开始前'."\n"
                                        ."\n"
                                        .'- OperationStartTimeAfter：代运维服务开始后'."\n"
                                        ."\n"
                                        .'- OperationEndTimeBefore：代运维服务结束前'."\n"
                                        ."\n"
                                        .'- OperationEndTimeAfter：代运维服务结束后'."\n"
                                        ."\n"
                                        .'- OperatedServiceInstanceId：私有部署服务下代运维服务实例ID'."\n"
                                        ."\n"
                                        .'- OperationServiceInstanceId：纯代运维服务下的服务实例ID'."\n"
                                        ."\n"
                                        .'- EnableInstanceOps：服务实例是否开通代运维服务的功能',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ServiceInstanceId',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'ShowDeleted',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否显示已删除。可能的值：'."\n"
                            ."\n"
                            .'- true：显示'."\n"
                            ."\n"
                            .'- false：不显示',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户自定义标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户自定义标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzkt5buxxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始token',
                                'type' => 'string',
                                'example' => 'AAAAAfu+XtuBE55iRLHEYYuojI4=',
                            ],
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => 'E50287CB-AABF-4877-92C0-289B339A1546',
                            ],
                            'TotalCount' => [
                                'description' => '结果总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时，每页显示的行数。每页最大100行，默认为20行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'ServiceInstances' => [
                                'description' => '服务实例信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务实例信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '服务实例状态。可能值：'."\n"
                                                ."\n"
                                                .'- Created：已创建'."\n"
                                                ."\n"
                                                .'- Deploying：部署中'."\n"
                                                ."\n"
                                                .'- DeployedFailed：部署失败'."\n"
                                                ."\n"
                                                .'- Deployed：已部署'."\n"
                                                ."\n"
                                                .'- Upgrading：升级中'."\n"
                                                ."\n"
                                                .'- Deleting：删除中'."\n"
                                                ."\n"
                                                .'- Deleted：已删除'."\n",
                                            'type' => 'string',
                                            'example' => 'Deployed',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-20T00:00:00Z',
                                        ],
                                        'Name' => [
                                            'description' => '服务实例名称。',
                                            'type' => 'string',
                                            'example' => 'TestName',
                                        ],
                                        'ServiceInstanceId' => [
                                            'description' => '服务实例ID。',
                                            'type' => 'string',
                                            'example' => 'si-d6ab3a63ccbb4b17****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-20T00:00:00Z',
                                        ],
                                        'UserId' => [
                                            'description' => '用户AliUid。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1234567',
                                        ],
                                        'Service' => [
                                            'description' => '服务。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '服务状态。',
                                                    'type' => 'string',
                                                    'example' => 'Online',
                                                ],
                                                'PublishTime' => [
                                                    'description' => '发布时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-05-21T00:00:00Z',
                                                ],
                                                'Version' => [
                                                    'description' => '服务版本。',
                                                    'type' => 'string',
                                                    'example' => '1.0',
                                                ],
                                                'DeployType' => [
                                                    'description' => '部署类型。可能值：'."\n"
                                                        ."\n"
                                                        .'- ros：通过ROS部署'."\n"
                                                        ."\n"
                                                        .'- terraform：通过Terraform部署'."\n"
                                                        ."\n"
                                                        .'- ack：通过ACK部署'."\n"
                                                        ."\n"
                                                        .'- spi：调用SPI部署'."\n"
                                                        ."\n"
                                                        .'- operation：代运维服务部署',
                                                    'type' => 'string',
                                                    'example' => 'ros',
                                                ],
                                                'ServiceId' => [
                                                    'description' => '服务ID。',
                                                    'type' => 'string',
                                                    'example' => 'service-0e6fca6a51a54420****',
                                                ],
                                                'SupplierUrl' => [
                                                    'description' => '服务商地址。',
                                                    'type' => 'string',
                                                    'example' => 'http://example.com',
                                                ],
                                                'ServiceType' => [
                                                    'description' => '服务类型。可能值：'."\n"
                                                        ."\n"
                                                        .'- private：部署在用户账户下'."\n"
                                                        ."\n"
                                                        .'- managed：托管在服务商账户下'."\n"
                                                        ."\n"
                                                        .'- operation：代运维服务'."\n"
                                                        ."\n"
                                                        .'- poc：试用服务实例。',
                                                    'type' => 'string',
                                                    'example' => 'private',
                                                ],
                                                'SupplierName' => [
                                                    'description' => '服务商名称。',
                                                    'type' => 'string',
                                                    'example' => 'A有限公司',
                                                ],
                                                'ServiceInfos' => [
                                                    'description' => '服务信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '服务信息。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Locale' => [
                                                                'description' => '服务实例语言。',
                                                                'type' => 'string',
                                                                'example' => 'zh-CN',
                                                            ],
                                                            'Image' => [
                                                                'description' => '服务图标地址。',
                                                                'type' => 'string',
                                                                'example' => 'https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png',
                                                            ],
                                                            'Name' => [
                                                                'description' => '服务名称。',
                                                                'type' => 'string',
                                                                'example' => 'B数据库',
                                                            ],
                                                            'ShortDescription' => [
                                                                'description' => '服务概述。',
                                                                'type' => 'string',
                                                                'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'VersionName' => [
                                                    'description' => '服务商自定义版本名称。',
                                                    'type' => 'string',
                                                    'example' => '版本A',
                                                ],
                                                'DeployMetadata' => [
                                                    'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。',
                                                    'type' => 'string',
                                                    'example' => '{'."\n"
                                                        .'      "EstimateTime": null,'."\n"
                                                        .'      "SupplierDeployMetadata": {'."\n"
                                                        .'            "DeployTimeout": null'."\n"
                                                        .'      },'."\n"
                                                        .'      "TemplateConfigs": ['."\n"
                                                        .'            {'."\n"
                                                        .'                  "Name": "模板1",'."\n"
                                                        .'                  "Url": "https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json",'."\n"
                                                        .'                  "PredefinedParameters": [],'."\n"
                                                        .'                  "AllowedRegions": ['."\n"
                                                        .'                        "cn-hangzhou"'."\n"
                                                        .'                  ]'."\n"
                                                        .'            }'."\n"
                                                        .'      ]'."\n"
                                                        .'}',
                                                ],
                                                'EnablePrivateVpcConnection' => [
                                                    'description' => '是否已开启私网连接。可能的值：'."\n"
                                                        ."\n"
                                                        .'- true：已开启'."\n"
                                                        ."\n"
                                                        .'- false：未开启',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'SourceSupplierName' => [
                                                    'description' => '分销源服务商名称。',
                                                    'type' => 'string',
                                                    'example' => 'A有限公司',
                                                ],
                                            ],
                                        ],
                                        'Parameters' => [
                                            'description' => '服务实例参数信息。',
                                            'type' => 'string',
                                            'example' => '{"param":"value"}',
                                        ],
                                        'Progress' => [
                                            'description' => '服务实例的部署进度，单位：%。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '90',
                                        ],
                                        'StatusDetail' => [
                                            'description' => '服务实例的部署信息描述。',
                                            'type' => 'string',
                                            'example' => 'deploy successfully',
                                        ],
                                        'TemplateName' => [
                                            'description' => '模板名称。',
                                            'type' => 'string',
                                            'example' => '模板1',
                                        ],
                                        'OperatedServiceInstanceId' => [
                                            'description' => '被代运维的服务实例ID。',
                                            'type' => 'string',
                                            'example' => 'si-d6ab3a63ccbb4b17****',
                                        ],
                                        'OperationStartTime' => [
                                            'description' => '代运维开始时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-29T06:48:56Z',
                                        ],
                                        'OperationEndTime' => [
                                            'description' => '代运维结束时间。',
                                            'type' => 'string',
                                            'example' => '2021-12-29T06:48:56Z',
                                        ],
                                        'EnableInstanceOps' => [
                                            'description' => '服务实例是否有代运维功能。可能的值：'."\n"
                                                ."\n"
                                                .'- true：服务实例有代运维功能'."\n"
                                                ."\n"
                                                .'- false：服务实例没有代运维功能'."\n",
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Tags' => [
                                            'description' => '用户自定义标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '用户自定义标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'key1',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'value1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Source' => [
                                            'description' => '服务实例创建来源。',
                                            'type' => 'string',
                                            'example' => 'Supplier',
                                        ],
                                        'EndTime' => [
                                            'description' => '服务实例过期时间。',
                                            'type' => 'string',
                                            'example' => '2022-01-01T12:00:00',
                                        ],
                                        'ServiceType' => [
                                            'description' => '服务类型。可能的值：'."\n"
                                                ."\n"
                                                .'- private：部署在用户账户下的服务实例。'."\n"
                                                ."\n"
                                                .'- managed：托管在服务商账户下的服务实例。'."\n"
                                                ."\n"
                                                .'- operation：代运维服务实例'."\n"
                                                ."\n"
                                                .'- poc：试用服务实例。',
                                            'type' => 'string',
                                            'example' => 'private',
                                        ],
                                        'PayType' => [
                                            'description' => '付费类型。取值范围：'."\n"
                                                ."\n"
                                                .'- Permanent：永久购买。'."\n"
                                                ."\n"
                                                .'- Subscription：云市场包年包月。'."\n"
                                                ."\n"
                                                .'- PayAsYouGo：云市场按量付费。'."\n"
                                                ."\n"
                                                .'- CustomFixTime：商家自定义固定时长。',
                                            'type' => 'string',
                                            'example' => 'Subscription',
                                        ],
                                        'IsOperated' => [
                                            'description' => '服务实例的代运维功能是否开启。可能值：'."\n"
                                                ."\n"
                                                .'- true：服务实例的代运维功能已开启'."\n"
                                                ."\n"
                                                .'- false：服务实例的代运维功能未开启',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'si-d6ab3a63ccxxxxxx',
                                        ],
                                        'BizStatus' => [
                                            'description' => '服务实例的业务状态。可能的值：'."\n"
                                                ."\n"
                                                .'- Normal：正常。'."\n"
                                                ."\n"
                                                .'- Renewing：续费中。'."\n"
                                                ."\n"
                                                .'- RenewFoiled：续费失败。'."\n"
                                                ."\n"
                                                .'- Expired：已过期。',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAfu+XtuBE55iRLHEYYuojI4=\\",\\n  \\"RequestId\\": \\"E50287CB-AABF-4877-92C0-289B339A1546\\",\\n  \\"TotalCount\\": 100,\\n  \\"MaxResults\\": 20,\\n  \\"ServiceInstances\\": [\\n    {\\n      \\"Status\\": \\"Deployed\\",\\n      \\"UpdateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"Name\\": \\"TestName\\",\\n      \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n      \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"UserId\\": 1234567,\\n      \\"Service\\": {\\n        \\"Status\\": \\"Online\\",\\n        \\"PublishTime\\": \\"2021-05-21T00:00:00Z\\",\\n        \\"Version\\": \\"1.0\\",\\n        \\"DeployType\\": \\"ros\\",\\n        \\"ServiceId\\": \\"service-0e6fca6a51a54420****\\",\\n        \\"SupplierUrl\\": \\"http://example.com\\",\\n        \\"ServiceType\\": \\"private\\",\\n        \\"SupplierName\\": \\"A有限公司\\",\\n        \\"ServiceInfos\\": [\\n          {\\n            \\"Locale\\": \\"zh-CN\\",\\n            \\"Image\\": \\"https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png\\",\\n            \\"Name\\": \\"B数据库\\",\\n            \\"ShortDescription\\": \\"B是A公司自主设计并研发的开源分布式的关系型数据库\\"\\n          }\\n        ],\\n        \\"VersionName\\": \\"版本A\\",\\n        \\"DeployMetadata\\": \\"{\\\\n      \\\\\\"EstimateTime\\\\\\": null,\\\\n      \\\\\\"SupplierDeployMetadata\\\\\\": {\\\\n            \\\\\\"DeployTimeout\\\\\\": null\\\\n      },\\\\n      \\\\\\"TemplateConfigs\\\\\\": [\\\\n            {\\\\n                  \\\\\\"Name\\\\\\": \\\\\\"模板1\\\\\\",\\\\n                  \\\\\\"Url\\\\\\": \\\\\\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json\\\\\\",\\\\n                  \\\\\\"PredefinedParameters\\\\\\": [],\\\\n                  \\\\\\"AllowedRegions\\\\\\": [\\\\n                        \\\\\\"cn-hangzhou\\\\\\"\\\\n                  ]\\\\n            }\\\\n      ]\\\\n}\\",\\n        \\"EnablePrivateVpcConnection\\": false,\\n        \\"SourceSupplierName\\": \\"A有限公司\\"\\n      },\\n      \\"Parameters\\": \\"{\\\\\\"param\\\\\\":\\\\\\"value\\\\\\"}\\",\\n      \\"Progress\\": 90,\\n      \\"StatusDetail\\": \\"deploy successfully\\",\\n      \\"TemplateName\\": \\"模板1\\",\\n      \\"OperatedServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n      \\"OperationStartTime\\": \\"2021-12-29T06:48:56Z\\",\\n      \\"OperationEndTime\\": \\"2021-12-29T06:48:56Z\\",\\n      \\"EnableInstanceOps\\": true,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"key1\\",\\n          \\"Value\\": \\"value1\\"\\n        }\\n      ],\\n      \\"Source\\": \\"Supplier\\",\\n      \\"EndTime\\": \\"2022-01-01T12:00:00\\",\\n      \\"ServiceType\\": \\"private\\",\\n      \\"PayType\\": \\"Subscription\\",\\n      \\"IsOperated\\": true,\\n      \\"ResourceGroupId\\": \\"si-d6ab3a63ccxxxxxx\\",\\n      \\"BizStatus\\": \\"Normal\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询服务实例列表',
            'summary' => '查询服务实例列表。',
        ],
        'ListServiceUsages' => [
            'summary' => '查看用户自己当前的服务使用申请。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAWns8w4MmhzeptXVRG0PUEU=',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '过滤器。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤器。',
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'description' => '过滤器名称，可选择一个或者多个名称进行查询。取值范围：'."\n"
                                        ."\n"
                                        .'- ServiceId：服务ID。'."\n"
                                        ."\n"
                                        .'- ServiceName：服务名称。'."\n"
                                        ."\n"
                                        .'- Status：服务状态。'."\n"
                                        ."\n"
                                        .'- SupplierName：服务商名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ServiceId',
                                ],
                                'Value' => [
                                    'description' => '过滤器值列表。N的取值范围：1~10。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '过滤器值列表。N的取值范围：1~10。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '5',
                                    ],
                                    'required' => false,
                                    'maxItems' => 10,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'SupplierRole',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务商角色。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Supplier',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '18AD0960-A9FE-1AC8-ADF8-22131Fxxxxxx',
                            ],
                            'NextToken' => [
                                'title' => 'NextToken',
                                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                                'type' => 'string',
                                'example' => 'AAAAAYChudnQUoBH+mGWFpb6oP0=',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ServiceUsages' => [
                                'description' => '服务使用情况。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务使用情况。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserAliUid' => [
                                            'description' => '用户阿里云Uid。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '127383705958xxxx',
                                        ],
                                        'ServiceId' => [
                                            'description' => '服务ID。',
                                            'type' => 'string',
                                            'example' => 'service-c9f36ec6d19b4exxxxxx',
                                        ],
                                        'ServiceName' => [
                                            'description' => '服务名称。',
                                            'type' => 'string',
                                            'example' => '部署链接权限申请',
                                        ],
                                        'SupplierName' => [
                                            'description' => '服务商名称。',
                                            'type' => 'string',
                                            'example' => '验收测试',
                                        ],
                                        'Status' => [
                                            'description' => '服务状态。可能值：'."\n"
                                                ."\n"
                                                .'- Submitted：已提交（待审批）。'."\n"
                                                ."\n"
                                                .'- Approved：已通过。'."\n"
                                                ."\n"
                                                .'- Rejected：已拒绝。'."\n"
                                                ."\n"
                                                .'- Canceled：已取消。',
                                            'type' => 'string',
                                            'example' => 'Submitted',
                                        ],
                                        'Comments' => [
                                            'description' => '审批的备注信息。',
                                            'type' => 'string',
                                            'example' => '审核通过。',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-05-25T02:02:02Z',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2022-05-25T02:02:02Z',
                                        ],
                                        'UserInformation' => [
                                            'description' => '用户信息。',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"18AD0960-A9FE-1AC8-ADF8-22131Fxxxxxx\\",\\n  \\"NextToken\\": \\"AAAAAYChudnQUoBH+mGWFpb6oP0=\\",\\n  \\"MaxResults\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"ServiceUsages\\": [\\n    {\\n      \\"UserAliUid\\": 0,\\n      \\"ServiceId\\": \\"service-c9f36ec6d19b4exxxxxx\\",\\n      \\"ServiceName\\": \\"部署链接权限申请\\",\\n      \\"SupplierName\\": \\"验收测试\\",\\n      \\"Status\\": \\"Submitted\\",\\n      \\"Comments\\": \\"审核通过。\\",\\n      \\"CreateTime\\": \\"2022-05-25T02:02:02Z\\",\\n      \\"UpdateTime\\": \\"2022-05-25T02:02:02Z\\",\\n      \\"UserInformation\\": {\\n        \\"key\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看当前服务使用申请',
        ],
        'GetServiceEstimateCost' => [
            'summary' => '查询创建服务实例的预估价格。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '137755',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-wulanchabu',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'service-16fbd358d75e49xxxxxx',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'draft',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Custom_Image_Ecs',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '部署服务实例输入的参数。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{\\"PayType\\":\\"PostPaid\\",\\"InstancePassword\\":\\"xxxxxxxxxx\\",\\"EcsInstanceType\\":\\"ecs.g6.large\\",\\"VSwitchId\\":\\"vsw-0jlueyydpuekoxxxxxxxx\\",\\"VpcId\\":\\"vpc-0jlps6mjbgvpqxxxxxxxx\\",\\"ZoneId\\":\\"cn-wulanchabu-a\\",\\"Enable\\":false,\\"RegionId\\":\\"cn-wulanchabu\\"}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mRdxWuW2ts',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'si-d6ab3a63ccbb4b17****',
                    ],
                ],
                [
                    'name' => 'SpecificationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '套餐一',
                    ],
                ],
                [
                    'name' => 'Commodity',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '云市场购买订单时间信息。',
                        'type' => 'object',
                        'properties' => [
                            'PayPeriodUnit' => [
                                'description' => '购买时长的单位，可选值：'."\n"
                                    ."\n"
                                    .'- Year：年。'."\n"
                                    ."\n"
                                    .'- Month：月。'."\n"
                                    ."\n"
                                    .'- Day：日。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Month',
                            ],
                            'PayPeriod' => [
                                'description' => '购买时长。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                        ],
                        'required' => false,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E73F09DC-6C13-5CB1-A10F-7A4E125ABD2C',
                            ],
                            'Resources' => [
                                'description' => '资源列表。',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'      "ECSInstances":{'."\n"
                                    .'        "Type":"ALIYUN::ECS::InstanceGroup",'."\n"
                                    .'        "Success":true,'."\n"
                                    .'        "Result":{'."\n"
                                    .'          "Order":{'."\n"
                                    .'            "Currency":"CNY",'."\n"
                                    .'            "RuleIds":['."\n"
                                    .'              1752723'."\n"
                                    .'            ],'."\n"
                                    .'            "DetailInfos":{'."\n"
                                    .'              "ResourcePriceModel":['."\n"
                                    .'                {'."\n"
                                    .'                  "Resource":"bandwidth",'."\n"
                                    .'                  "TradeAmount":0.0,'."\n"
                                    .'                  "SubRuleIds":[],'."\n"
                                    .'                  "OriginalAmount":0.0,'."\n"
                                    .'                  "DiscountAmount":0.0'."\n"
                                    .'                },'."\n"
                                    .'                {'."\n"
                                    .'                  "Resource":"image",'."\n"
                                    .'                  "TradeAmount":0.0,'."\n"
                                    .'                  "SubRuleIds":[],'."\n"
                                    .'                  "OriginalAmount":0.0,'."\n"
                                    .'                  "DiscountAmount":0.0'."\n"
                                    .'                },'."\n"
                                    .'                {'."\n"
                                    .'                  "Resource":"instanceType",'."\n"
                                    .'                  "TradeAmount":0.006966,'."\n"
                                    .'                  "SubRuleIds":[],'."\n"
                                    .'                  "OriginalAmount":0.45,'."\n"
                                    .'                  "DiscountAmount":0.443034'."\n"
                                    .'                },'."\n"
                                    .'                {'."\n"
                                    .'                  "Resource":"systemDisk",'."\n"
                                    .'                  "TradeAmount":0.000867,'."\n"
                                    .'                  "SubRuleIds":[],'."\n"
                                    .'                  "OriginalAmount":0.056,'."\n"
                                    .'                  "DiscountAmount":0.055133'."\n"
                                    .'                },'."\n"
                                    .'                {'."\n"
                                    .'                  "Resource":"dataDisk",'."\n"
                                    .'                  "TradeAmount":0.002167,'."\n"
                                    .'                  "SubRuleIds":[],'."\n"
                                    .'                  "OriginalAmount":0.14,'."\n"
                                    .'                  "DiscountAmount":0.137833'."\n"
                                    .'                }'."\n"
                                    .'              ]'."\n"
                                    .'            }',
                            ],
                            'Commodity' => [
                                'description' => '云市场购买订单时间信息。',
                                'type' => 'object',
                                'example' => '{\\"PayPeriodUnit\\":Month,\\"PayPeriod\\":1}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E73F09DC-6C13-5CB1-A10F-7A4E125ABD2C\\",\\n  \\"Resources\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Commodity\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
            'title' => '查询创建服务实例的预估价格',
        ],
        'GetUploadCredentials' => [
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'FileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '测试文件.json',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResult<SupplierUploadCredentialModel>',
                        'description' => 'PlainResult<SupplierUploadCredentialModel>',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessKeyId' => [
                                        'title' => 'ak',
                                        'description' => '访问密钥ID。',
                                        'type' => 'string',
                                        'example' => 'STS.NUCe19W1FKaHAYAhe********',
                                    ],
                                    'AccessKeySecret' => [
                                        'title' => 'sk',
                                        'description' => '访问密钥secret值。',
                                        'type' => 'string',
                                        'example' => '8LQGp59mY23pcXeTdcvSA1cUQZBeD92sFrXi********',
                                    ],
                                    'SecurityToken' => [
                                        'title' => '安全token',
                                        'description' => '安全token。',
                                        'type' => 'string',
                                        'example' => 'CAISzQN1q6Ft5B2yfSjIr5b2LouNuu5n/KOjQ3/wjGUHYdlagYGdmzz2IH1Le3NrBO8esfgymGFU6v8dlo1dYLQeHhadQI5cs80HtFqLSNaE65LswPlZ2M2ISETPJzfV9pCK',
                                    ],
                                    'ExpireDate' => [
                                        'title' => '过期时间',
                                        'description' => '权限过期时间。',
                                        'type' => 'string',
                                        'example' => '2023-05-18T12:27:59Z',
                                    ],
                                    'RegionId' => [
                                        'title' => '地域',
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'BucketName' => [
                                        'title' => '仓库名称',
                                        'description' => '存储空间名称。',
                                        'type' => 'string',
                                        'example' => 'service-info-private',
                                    ],
                                    'Key' => [
                                        'title' => '文件key',
                                        'description' => '具体的Key。',
                                        'type' => 'string',
                                        'example' => '221514575922756034/cn-hangzhou/d57c62fbd508xxxxxxxx.json',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'description' => '接口调用结果标识，true表示成功，false表示失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '调用返回码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '请求返回的信息。',
                                'type' => 'string',
                                'example' => 'Success.',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FCC3321E-D518-1BC4-861E-588E9D4DAFB7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"AccessKeyId\\": \\"STS.NUCe19W1FKaHAYAhe********\\",\\n    \\"AccessKeySecret\\": \\"8LQGp59mY23pcXeTdcvSA1cUQZBeD92sFrXi********\\",\\n    \\"SecurityToken\\": \\"CAISzQN1q6Ft5B2yfSjIr5b2LouNuu5n/KOjQ3/wjGUHYdlagYGdmzz2IH1Le3NrBO8esfgymGFU6v8dlo1dYLQeHhadQI5cs80HtFqLSNaE65LswPlZ2M2ISETPJzfV9pCK\\",\\n    \\"ExpireDate\\": \\"2023-05-18T12:27:59Z\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"BucketName\\": \\"service-info-private\\",\\n    \\"Key\\": \\"221514575922756034/cn-hangzhou/d57c62fbd508xxxxxxxx.json\\"\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Success.\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"FCC3321E-D518-1BC4-861E-588E9D4DAFB7\\"\\n}","type":"json"}]',
            'title' => '获取文件上传的访问密钥',
            'summary' => '获取上传文件的访问密钥。',
        ],
        'ModifyServiceInstanceResources' => [
            'summary' => '修改服务实例的资源信息。',
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
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-d8a0cc2a1ee04dce****',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceResourcesAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例资源的操作类型。可能的值：'."\n"
                            ."\n"
                            .'- Import：导入。'."\n"
                            ."\n"
                            .'- UnImport：取消导入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Import',
                    ],
                ],
                [
                    'name' => 'Resources',
                    'in' => 'query',
                    'schema' => [
                        'description' => '导入的资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "RegionId": "cn-hangzhou",'."\n"
                            .'  "Type": "ResourceIds",'."\n"
                            .'  "ResourceIds": {'."\n"
                            .'    "ALIYUN::ECS::INSTANCE": ["i-xxx", "i-yyy"],'."\n"
                            .'    "ALIYUN::RDS::INSTANCE": ["rm-xxx", "rm-yyy"],'."\n"
                            .'    "ALIYUN::VPC::VPC": ["vpc-xxx", "vpc-yyy"],'."\n"
                            .'    "ALIYUN::SLB::INSTANCE": ["lb-xxx", "lb-yyy"]'."\n"
                            .'  }'."\n"
                            .'}',
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
                                'example' => '46577928-3162-15A6-9084-69820EB9xxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46577928-3162-15A6-9084-69820EB9xxxx\\"\\n}","type":"json"}]',
            'title' => '修改服务实例包含的资源',
        ],
        'ContinueDeployServiceInstance' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'si-0e6fca6a51a54420****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例配置参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"NodeCount": 3, "SystemDiskSize": 40, "InstancePassword": "******"}',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否对此次创建请求执行预检，包括权限、实例状态校验等。可能的值：'."\n"
                            ."\n"
                            .'- true：发送请求，不创建服务实例。'."\n"
                            ."\n"
                            .'- false：发送请求，检查通过后创建服务实例。',
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
                                'example' => '82DF27ED-E538-5AC0-A11C-39334A873189',
                            ],
                            'DryRunResult' => [
                                'description' => '校验结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ParametersNotAllowedToBeModified' => [
                                        'description' => '不允许修改的参数。修改参数一定会引发校验错误。'."\n"
                                            ."\n"
                                            .'> 仅在DryRun为true时返回结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '不允许修改的参数。修改参数一定会引发校验错误。'."\n"
                                                ."\n"
                                                .'> 仅在DryRun为true时返回结果。',
                                            'type' => 'string',
                                            'example' => 'cidr',
                                        ],
                                    ],
                                    'ParametersConditionallyAllowedToBeModified' => [
                                        'description' => '可能允许修改的参数。 修改参数是否引起校验错误，取决于参数的取值。'."\n"
                                            .'> 仅在DryRun为true时返回结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '可能允许修改的参数。 修改参数是否引起校验错误，取决于参数的取值。'."\n"
                                                .'> 仅在DryRun为true时返回结果。',
                                            'type' => 'string',
                                            'example' => 'name',
                                        ],
                                    ],
                                    'ParametersAllowedToBeModified' => [
                                        'description' => '允许修改的参数。修改参数不会引发校验错误。'."\n"
                                            .'> 仅在DryRun为true时返回值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '允许修改的参数。修改参数不会引发校验错误。'."\n"
                                                .'> 仅在DryRun为true时返回值。',
                                            'type' => 'string',
                                            'example' => 'description',
                                        ],
                                    ],
                                ],
                            ],
                            'ServiceInstanceId' => [
                                'description' => '服务实例ID。',
                                'type' => 'string',
                                'example' => 'si-d6ab3a63ccbb4b17****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"82DF27ED-E538-5AC0-A11C-39334A873189\\",\\n  \\"DryRunResult\\": {\\n    \\"ParametersNotAllowedToBeModified\\": [\\n      \\"cidr\\"\\n    ],\\n    \\"ParametersConditionallyAllowedToBeModified\\": [\\n      \\"name\\"\\n    ],\\n    \\"ParametersAllowedToBeModified\\": [\\n      \\"description\\"\\n    ]\\n  },\\n  \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\"\\n}","type":"json"}]',
            'title' => '继续部署服务实例',
            'summary' => '服务实例部署失败后，调用ContinueDeployServiceInstance继续部署该服务实例。',
        ],
        'CreateServiceInstance' => [
            'summary' => '创建并部署服务实例。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。可能的值：'."\n"
                            ."\n"
                            .'- cn-hangzhou：华东1（杭州） 。'."\n"
                            ."\n"
                            .'- ap-southeast-1：新加坡。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例名称。格式要求如下：'."\n"
                            ."\n"
                            .'- 长度不超过64个字符。'."\n"
                            ."\n"
                            .'- 必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestName',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'service-0e6fca6a51a54420****',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '服务实例部署的参数。'."\n"
                            ."\n"
                            .'> 若服务实例包含部署地域信息，则需在部署参数中填写。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "RegionId": "cn-hangzhou"'."\n"
                            .'      "NodeCount": 3,'."\n"
                            .'      "SystemDiskSize": 40,'."\n"
                            .'      "InstancePassword": "******"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称，服务支持多模板时需要指定模板名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '模板1',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzuqyxxxxxx',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户ID',
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1563457855xxxxxx',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户自定义标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户自定义标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key1',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'SpecificationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐规格名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '套餐一',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否对此次创建请求执行预检，包括权限、实例状态校验等。可能的值：'."\n"
                            ."\n"
                            .'- true：发送请求，不创建服务实例。'."\n"
                            ."\n"
                            .'- false：发送请求，检查通过后创建服务实例。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例的释放时间。'."\n"
                            ."\n"
                            .'> 仅支持托管版场景中，服务商对自己的服务实例设置该参数。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                        'example' => '2023-12-12T03:13:05Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '服务实例状态。可能值：'."\n"
                                    ."\n"
                                    .'- Created：已创建。'."\n"
                                    ."\n"
                                    .'- Deploying：部署中。'."\n"
                                    ."\n"
                                    .'- DeployedFailed：部署失败。'."\n"
                                    ."\n"
                                    .'- Deployed：已部署。'."\n"
                                    ."\n"
                                    .'- Upgrading：升级中。'."\n"
                                    ."\n"
                                    .'- Deleting：删除中。'."\n"
                                    ."\n"
                                    .'- Deleted：已删除。'."\n"
                                    ."\n"
                                    .'- DeletedFailed：删除失败。',
                                'type' => 'string',
                                'example' => 'Created',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D****',
                            ],
                            'ServiceInstanceId' => [
                                'description' => '服务实例ID。',
                                'type' => 'string',
                                'example' => 'si-d6ab3a63ccbb4b17****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Created\\",\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D****\\",\\n  \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\"\\n}","type":"json"}]',
            'title' => '创建并部署服务实例',
        ],
        'DeleteServiceInstances' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务实例ID。N的取值范围：1~100。'."\n"
                                ."\n"
                                .'> 若要删除多个服务实例，服务实例间用&&隔开。例如：ServiceInstanceId.1=xxx&&ServiceInstanceId.2=yyy。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'si-d6ab3a63ccbb4b17****',
                        ],
                        'required' => true,
                        'maxItems' => 100,
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
                                'example' => 'DB140E67-D75F-5585-946E-41D8DC8F4E00',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DB140E67-D75F-5585-946E-41D8DC8F4E00\\"\\n}","type":"json"}]',
            'title' => '删除服务实例',
            'summary' => '调用DeleteServiceInstances删除服务实例。',
        ],
        'UpdateServiceInstanceSpec' => [
            'summary' => '变配服务实例。',
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
                'abilityTreeCode' => '163731',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest7EAOIM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'si-0e6fca6a51a54420****',
                    ],
                ],
                [
                    'name' => 'PredefinedParametersName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '套餐一',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '服务实例配置参数。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{\\"EcsInstanceParameter\\":\\"4vCPU 8GiB\\",\\"ZoneId\\":\\"cn-heyuan-a\\",\\"SystemDiskSize\\":50,\\"DataDiskSize\\":150,\\"InternetMaxBandwidthOut\\":2,\\"RegionId\\":\\"cn-heyuan\\"}',
                    ],
                ],
                [
                    'name' => 'OperationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '变配操作名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '套餐变配',
                    ],
                ],
                [
                    'name' => 'EnableUserPrometheus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户侧是否启用Prometheus。可选值：'."\n"
                            ."\n"
                            .'- true：启用。'."\n"
                            ."\n"
                            .'- false：不启用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10CM943JP0EN9D51H',
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
                                'example' => 'DF0F666F-FBBC-55C3-A368-C955DE7B4839',
                            ],
                            'OrderId' => [
                                'description' => '订单ID。',
                                'type' => 'string',
                                'example' => '2306175xxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DF0F666F-FBBC-55C3-A368-C955DE7B4839\\",\\n  \\"OrderId\\": \\"2306175xxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '变配服务实例',
        ],
        'PushMeteringData' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '186185',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Metering',
                    'in' => 'query',
                    'schema' => [
                        'description' => '示例中的参数说明如下：'."\n"
                            ."\n"
                            .'- InstanceId：云市场实例ID 。参数类型为String。'."\n"
                            .'- StartTime：计量开始时间。单位秒（格式为Unix时间戳）。参数类型为Long。'."\n"
                            .'- EndTime：计量结束时间。单位秒（格式为Unix时间戳）。参数类型为Long。'."\n"
                            .'- Entities：计量实体对象。参数类型为List<Map>。'."\n"
                            .'    - Key：计量项属性名称。参数类型为String。'."\n"
                            .'        - Frequency：使用次数（次）。'."\n"
                            .'        - Period：使用小时时长（秒）。'."\n"
                            .'     <props="china">注意：请求参数中的时长单位为秒，而计费单位为小时，因此计费时会转换为小时，如推送19:00-20:00的用量1800，计费价格为1元/小时，按小时出账该时段费用为1800 / 3600 x 1 = 0.5元, 费用如为小数，保留两位小数，超过两位舍弃。</props>'."\n"
                            .'     <props="intl">注意：请求参数中的时长单位为秒，而计费单位为小时，因此计费时会转换为小时，如推送19:00-20:00的用量1800，计费价格为1美元/小时，按小时出账该时段费用为1800/3600 x 1 = 0.5美元, 费用如为小数，保留两位小数，超过两位舍弃。</props> '."\n"
                            ."\n"
                            .'        - Storage：使用存储空间（Byte）。'."\n"
                            .'         <props="china">注意：请求参数中的单位为Byte，而计费单位为MB，因此计费时会转换为MB，如推送19:00-20:00的用量524288，计费价格为1元/MB，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5元，费用如为小数，保留两位小数，超过两位舍弃。</props>'."\n"
                            .'         <props="intl">注意：请求参数中的单位为Byte，而计费单位为MB，因此计费时会转换为MB，如推送19:00-20:00的用量524288，计费价格为1美元/MB，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5美元，费用如为小数，保留两位小数，超过两位舍弃。</props>'."\n"
                            ."\n"
                            .'        - NetworkOut：上行使用流量（Bit）。'."\n"
                            .'        <props="china">注意：请求参数中的单位为Bit，而计费单位为Mb，因此计费时会转换为Mb，如推送19:00-20:00的用量524288，计费价格为1元/Mb，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5元，费用如为小数，保留两位小数，超过两位舍弃。</props>'."\n"
                            .'         <props="intl">注意：请求参数中的单位为Bit，而计费单位为Mb，因此计费时会转换为Mb，如推送19:00-20:00的用量524288，计费价格为1美元/Mb，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5美元，费用如为小数，保留两位小数，超过两位舍弃。</props>'."\n"
                            .'        - NetworkIn：下行使用流量（Bit）。'."\n"
                            .'        <props="china">注意：请求参数中的单位为Bit，而计费单位为Mb，因此计费时会转换为Mb，如推送19:00-20:00的用量524288，计费价格为1元/Mb，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5元，费用如为小数，保留两位小数，超过两位舍弃。</props>'."\n"
                            .'        <props="intl">注意：请求参数中的单位为Bit，而计费单位为Mb，因此计费时会转换为Mb，如推送19:00-20:00的用量524288，计费价格为1美元/Mb，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5美元，费用如为小数，保留两位小数，超过两位舍弃。</props>'."\n"
                            .'        - Character：字符数（个）。'."\n"
                            .'        - DailyActiveUser：日活跃用户数（DAU）。'."\n"
                            .'        - PeriodMin：使用分钟时长（分钟）。'."\n"
                            .'        - VirtualCpu：虚拟CPU核数。'."\n"
                            .'    - Value：计量数值（取值 >= 0）。参数类型为Integer。'."\n"
                            ."\n"
                            .'**说明**：'."\n"
                            .'- 如果商品设置为实时出账，StartTime和 EndTime为任意时间宽度均可以，但是EndTime一定要大于StartTime 。'."\n"
                            .'- 如果商品设置为非实时出账（即选择按小时、按天、按月等），StartTime和EndTime 的间隔必须大于5分钟。'."\n"
                            .'- 批量推送计量数据时，“InstanceId”属性必须为同一个商品所产生的实例，目前不支持多个商品的实例同时推送。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => '[{"StartTime":1711527396,"EndTime":1711527397,"Entities":[{"Key":"Unit","Value":"0"}]}]',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-0e6fca6a51a54420****',
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
                                'example' => '94E89857-B994-44B6-9C4F-DBD200E9XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94E89857-B994-44B6-9C4F-DBD200E9XXXX\\"\\n}","type":"json"}]',
            'title' => '推送云市场计量数据',
            'summary' => '推送云市场计量数据。',
        ],
        'ListAcrImageRepositories' => [
            'summary' => '调用ListAcrImageRepositories查看已上传至ACR的镜像列表。',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAWns8w4MmhzeptXVRG0PUEU=',
                    ],
                ],
                [
                    'name' => 'RepoName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像仓库的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wordpress',
                    ],
                ],
                [
                    'name' => 'ArtifactType',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '部署物类型，用于区分docker和chart',
                        'description' => '部署物类型。默认值为：AcrImage。可能的值：'."\n"
                            ."\n"
                            .'- HelmChart：Helm Chart镜像。'."\n"
                            ."\n"
                            .'- AcrImage：容器镜像。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AcrImage',
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
                                'example' => 'C4A145D8-6F6C-532A-9001-9730CDA27578',
                            ],
                            'NextToken' => [
                                'description' => '下一个查询开始token。',
                                'type' => 'string',
                                'example' => 'AAAAAfu+XtuBE55iRLHEYYuojI4=',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                            'Repositories' => [
                                'description' => '镜像列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '镜像列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RepoId' => [
                                            'description' => '镜像ID。',
                                            'type' => 'string',
                                            'example' => 'crr-3gqhkza0wbxxxxxx',
                                        ],
                                        'RepoName' => [
                                            'description' => '镜像名称。',
                                            'type' => 'string',
                                            'example' => 'wordpress',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-20T00:00:00Z',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '修改时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-20T00:00:00Z',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C4A145D8-6F6C-532A-9001-9730CDA27578\\",\\n  \\"NextToken\\": \\"AAAAAfu+XtuBE55iRLHEYYuojI4=\\",\\n  \\"MaxResults\\": 20,\\n  \\"TotalCount\\": 4,\\n  \\"Repositories\\": [\\n    {\\n      \\"RepoId\\": \\"crr-3gqhkza0wbxxxxxx\\",\\n      \\"RepoName\\": \\"wordpress\\",\\n      \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"ModifiedTime\\": \\"2021-05-20T00:00:00Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看已上传至ACR的镜像列表',
        ],
        'ListAcrImageTags' => [
            'summary' => '调用ListAcrImageTags查看镜像仓库中已上传的镜像版本。',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAW8kZY+u1sYOaYf5JmgmDQQ=',
                    ],
                ],
                [
                    'name' => 'RepoId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'crr-3gqhkza0wbxxxxxx',
                    ],
                ],
                [
                    'name' => 'ArtifactType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署物类型。默认值为：AcrImage。可能的值：'."\n"
                            ."\n"
                            .'- HelmChart：Helm Chart镜像。'."\n"
                            ."\n"
                            .'- AcrImage：容器镜像。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'AcrImage',
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
                                'example' => 'FEF343B9-1A15-5789-BE88-7B36190F5BF6',
                            ],
                            'NextToken' => [
                                'description' => '下一个查询开始token。',
                                'type' => 'string',
                                'example' => 'ey14..',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Images' => [
                                'description' => '镜像列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '镜像列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Tag' => [
                                            'description' => '镜像版本。',
                                            'type' => 'string',
                                            'example' => '5.7.2',
                                        ],
                                        'ImageSize' => [
                                            'description' => '镜像大小，单位：字节（B）。',
                                            'type' => 'string',
                                            'example' => '188394616',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-20T00:00:00Z',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '修改时间。',
                                            'type' => 'string',
                                            'example' => '2021-05-20T00:00:00Z',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FEF343B9-1A15-5789-BE88-7B36190F5BF6\\",\\n  \\"NextToken\\": \\"ey14..\\",\\n  \\"MaxResults\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"Images\\": [\\n    {\\n      \\"Tag\\": \\"5.7.2\\",\\n      \\"ImageSize\\": \\"188394616\\",\\n      \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"ModifiedTime\\": \\"2021-05-20T00:00:00Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看镜像仓库中已上传的镜像版本',
        ],
        'GetServiceTemplateParameterConstraints' => [
            'summary' => '查询ROS模板参数限定值。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'service-1c11f365190c44xxxxxx',
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'draft',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '模板1',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '参数信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '参数信息。',
                            'type' => 'object',
                            'properties' => [
                                'ParameterKey' => [
                                    'description' => '参数名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'PayType',
                                ],
                                'ParameterValue' => [
                                    'description' => '参数值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'PostPaid',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10CM943JP0EN9D51H',
                    ],
                ],
                [
                    'name' => 'DeployRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-huhehaote',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'si-d6ab3a63ccbb4b17****',
                    ],
                ],
                [
                    'name' => 'EnablePrivateVpcConnection',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否已开启私网连接。可选值：'."\n"
                            ."\n"
                            .'- true：已开启'."\n"
                            ."\n"
                            .'- false：未开启',
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
                                'example' => 'C81C0732-DEBC-559C-B563-7EB2BEB21088',
                            ],
                            'ParameterConstraints' => [
                                'description' => '参数信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '参数信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '参数的类型。',
                                            'type' => 'string',
                                            'example' => 'String',
                                        ],
                                        'AllowedValues' => [
                                            'description' => '参数的取值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '参数的取值。',
                                                'type' => 'string',
                                                'example' => '"ecs.hfr6.16xlarge"',
                                            ],
                                        ],
                                        'AssociationParameterNames' => [
                                            'description' => '关联参数列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '关联参数列表。',
                                                'type' => 'string',
                                                'example' => '"ZoneId1",'."\n"
                                                    .' "VSwitchId1"',
                                            ],
                                        ],
                                        'ParameterKey' => [
                                            'description' => '参数的名称。',
                                            'type' => 'string',
                                            'example' => 'PayType',
                                        ],
                                        'Behavior' => [
                                            'description' => '参数的行为。取值：'."\n"
                                                ."\n"
                                                .'- NoLimit：无限制，此参数没有取值限制。'."\n"
                                                ."\n"
                                                .'- NotSupport：不支持，此参数不支持查询取值。'."\n"
                                                ."\n"
                                                .'- QueryError：查询失败。'."\n"
                                                ."\n"
                                                .'> 当查询结果没有返回AllowedValues时，会额外返回Behavior和BehaviorReason，说明参数的行为和原因。',
                                            'type' => 'string',
                                            'example' => 'NoLimit',
                                        ],
                                        'BehaviorReason' => [
                                            'description' => '参数行为出现的原因。',
                                            'type' => 'string',
                                            'example' => 'none',
                                        ],
                                        'OriginalConstraints' => [
                                            'description' => '原始约束信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '原始约束信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'AllowedValues' => [
                                                        'description' => '参数的取值。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '参数的取值。',
                                                            'type' => 'string',
                                                            'example' => '"ecs.hfr6.16xlarge"',
                                                        ],
                                                    ],
                                                    'PropertyName' => [
                                                        'description' => '属性名称。',
                                                        'type' => 'string',
                                                        'example' => 'lnch_Source',
                                                    ],
                                                    'ResourceName' => [
                                                        'description' => '资源名称。',
                                                        'type' => 'string',
                                                        'example' => 'i-8vb0smn1lf6g77md****',
                                                    ],
                                                    'ResourceType' => [
                                                        'description' => '资源类型。',
                                                        'type' => 'string',
                                                        'example' => 'serviceinstance',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'FamilyConstraints' => [
                                'description' => '套餐族约束。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '套餐族约束。',
                                    'type' => 'string',
                                    'example' => '[]',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C81C0732-DEBC-559C-B563-7EB2BEB21088\\",\\n  \\"ParameterConstraints\\": [\\n    {\\n      \\"Type\\": \\"String\\",\\n      \\"AllowedValues\\": [\\n        \\"\\\\\\"ecs.hfr6.16xlarge\\\\\\"\\"\\n      ],\\n      \\"AssociationParameterNames\\": [\\n        \\"\\\\\\"ZoneId1\\\\\\",\\\\n \\\\\\"VSwitchId1\\\\\\"\\"\\n      ],\\n      \\"ParameterKey\\": \\"PayType\\",\\n      \\"Behavior\\": \\"NoLimit\\",\\n      \\"BehaviorReason\\": \\"none\\",\\n      \\"OriginalConstraints\\": [\\n        {\\n          \\"AllowedValues\\": [\\n            \\"\\\\\\"ecs.hfr6.16xlarge\\\\\\"\\"\\n          ],\\n          \\"PropertyName\\": \\"lnch_Source\\",\\n          \\"ResourceName\\": \\"i-8vb0smn1lf6g77md****\\",\\n          \\"ResourceType\\": \\"serviceinstance\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"FamilyConstraints\\": [\\n    \\"[]\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询ROS模板参数限制信息',
        ],
        'AddServiceSharedAccounts' => [
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
                'abilityTreeCode' => '116171',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest2G0818',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BBBAAfu+XtuBE55iRLHEYYuojI4=',
                    ],
                ],
                [
                    'name' => 'SharedAccounts',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '服务分享账户与权限。',
                        'type' => 'array',
                        'items' => [
                            'description' => '服务分享账户与权限。',
                            'type' => 'object',
                            'properties' => [
                                'UserAliUid' => [
                                    'description' => '用户账号。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '123456',
                                ],
                                'Permission' => [
                                    'description' => '权限类型。可能的值：'."\n"
                                        ."\n"
                                        .'- Deployable：可部署。'."\n"
                                        ."\n"
                                        .'- Accessible：可访问。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => ' Accessible',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'service-63b8a060e9d54cxxxxxx',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务共享类型，默认值为SharedAccount。可选值：'."\n"
                            ."\n"
                            .'- SharedAccount：普通共享类型。'."\n"
                            ."\n"
                            .'- Reseller：分销共享类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SharedAccount',
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
                                'example' => 'E2815213-EA4F-5759-8EA1-56DD051BB3FD',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E2815213-EA4F-5759-8EA1-56DD051BB3FD\\"\\n}","type":"json"}]',
            'title' => '新增服务共享账号',
            'summary' => '调用AddServiceSharedAccounts新增服务的共享账号。',
        ],
        'StartServiceInstance' => [
            'summary' => '当服务实例状态为Stopped（已关机）、StartFailed（开机失败）时，调用StartServiceInstance接口启动服务实例。',
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
                'abilityTreeCode' => '220935',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10CM943JP0EN9****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。'."\n"
                            ."\n"
                            .'您可以通过调用[ListServiceInstances - 查询服务实例列表](~~396200~~)获取服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-d6ab3a63ccbb4b17****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2E91D771-0183-52CE-86CB-882D99B2CB77',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2E91D771-0183-52CE-86CB-882D99B2CB77\\"\\n}","type":"json"}]',
            'title' => '启动服务实例',
            'description' => '### 前提条件'."\n"
                .'请您确保在创建服务时添加了开机、关机的运维操作。具体操作，请参见[创建服务](~~440268~~)。',
        ],
        'RestartServiceInstance' => [
            'summary' => '当服务实例状态为Deployed（已部署）时，调用RestartServiceInstance接口重启服务实例。',
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
                'abilityTreeCode' => '220936',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10CM943JP0EN9****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。'."\n"
                            ."\n"
                            .'您可以通过调用[ListServiceInstances - 查询服务实例列表](~~396200~~)获取服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-d6ab3a63ccbb4b17****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\"\\n}","type":"json"}]',
            'title' => '重启服务实例',
            'description' => '### 前提条件'."\n"
                .'请您确保在创建服务时添加了重启的运维操作。具体操作，请参见[创建服务](~~440268~~)。',
        ],
        'StopServiceInstance' => [
            'summary' => '当服务实例状态为Deployed（已部署）、StopFailed（关机失败）时，调用StopServiceInstance接口关闭服务实例。',
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
                'abilityTreeCode' => '220569',
                'abilityTreeNodes' => [
                    'FEATUREcomputenest18JMDW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10CM943JP0EN9****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例所在地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ServiceInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务实例ID。'."\n"
                            ."\n"
                            .'您可以通过调用[ListServiceInstances - 查询服务实例列表](~~396200~~)获取服务实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'si-c39ed4779cec449f****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '49A369EF-A302-5006-B0CE-94CED47C38CF',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"49A369EF-A302-5006-B0CE-94CED47C38CF\\"\\n}","type":"json"}]',
            'title' => '关闭服务实例',
            'description' => '### 前提条件'."\n"
                .'请您确保在创建服务时添加了开机、关机的运维操作。具体操作，请参见[创建服务](~~440268~~)。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'computenestsupplier.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'computenestsupplier.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
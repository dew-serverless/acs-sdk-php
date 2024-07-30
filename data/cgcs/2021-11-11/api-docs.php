<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'CGCS',
        'version' => '2021-11-11',
    ],
    'directories' => [
        [
            'id' => 188216,
            'title' => '实例管理',
            'type' => 'directory',
            'children' => [
                'ReserveInstances',
                'ReleaseInstances',
                'ListInstances',
            ],
        ],
        [
            'id' => 168896,
            'title' => '应用管理',
            'type' => 'directory',
            'children' => [
                'CreateApp',
                'ModifyApp',
                'ListApp',
                'GetApp',
                'DeleteApp',
            ],
        ],
        [
            'id' => 168902,
            'title' => '版本管理',
            'type' => 'directory',
            'children' => [
                'CreateAppVersion',
                'ModifyAppVersion',
                'ListAppVersion',
                'GetAppVersion',
                'DeleteAppVersion',
            ],
        ],
        [
            'id' => 168908,
            'title' => '适配管理',
            'type' => 'directory',
            'children' => [
                'CreateAdaptation',
                'GetAdaptation',
            ],
        ],
        [
            'id' => 169658,
            'title' => '容器预定管理',
            'type' => 'directory',
            'children' => [
                'CreateCapacityReservation',
                'CancelReserveTask',
                'GetReserveTaskDetail',
                'ReleaseCapacity',
                'ReleaseCapacityByBatch',
                'GetCapacity',
            ],
        ],
        [
            'id' => 168895,
            'title' => '会话管理',
            'type' => 'directory',
            'children' => [
                'CreateAppSession',
                'StopAppSession',
                'GetAppSession',
                'ListAppSessions',
                'CreateAppSessionSync',
                'CreateAppSessionBatchSync',
                'StopAppSessionBatch',
                'GetAppCcu',
                'BatchCheckSession',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ReserveInstances' => [
            'summary' => '预定云渲染实例。',
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
                    'name' => 'ProjectId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5469588382860444937003',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'GCS 云渲染实例规格。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gcs.r1c1m1.1xlarge',
                    ],
                ],
                [
                    'name' => 'DistrictId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '大区ID。取值：'."\n"
                            ."\n"
                            .'- huadong'."\n"
                            ."\n"
                            .'- xinan'."\n"
                            ."\n"
                            .'- huanan'."\n"
                            ."\n"
                            .'- huabei'."\n"
                            ."\n"
                            .'- huazhong',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'huanan' => 'huanan',
                            'huabei' => 'huabei',
                            'xinan' => 'xinan',
                            'huazhong' => 'huazhong',
                            'huadong' => 'huadong',
                        ],
                        'example' => 'huadong',
                    ],
                ],
                [
                    'name' => 'Amount',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次预定云渲染实例数量。取值范围：1~500。',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'InstanceIds' => [
                                'description' => '预定成功返回的云渲染实例ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例ID。',
                                    'type' => 'string',
                                    'example' => 'gcs-bmt0kbn7e013aedg9',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"InstanceIds\\": [\\n    \\"gcs-bmt0kbn7e013aedg9\\"\\n  ]\\n}","type":"json"}]',
            'title' => '预定云渲染实例',
        ],
        'ReleaseInstances' => [
            'summary' => '退订云渲染实例。',
            'methods' => [
                'post',
            ],
            'schemes' => [
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
                    'name' => 'ProjectId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4820372607851300489003',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'GCS 实例的规格。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'gcs.r1c1m1.1xlarge',
                    ],
                ],
                [
                    'name' => 'DistrictId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '大区ID。取值：'."\n"
                            ."\n"
                            .'- huadong'."\n"
                            ."\n"
                            .'- xinan'."\n"
                            ."\n"
                            .'- huanan'."\n"
                            ."\n"
                            .'- huabei'."\n"
                            ."\n"
                            .'- huazhong',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'huanan' => 'huanan',
                            'huabei' => 'huabei',
                            'xinan' => 'xinan',
                            'huazhong' => 'huazhong',
                            'huadong' => 'huadong',
                        ],
                        'example' => 'huadong',
                    ],
                ],
                [
                    'name' => 'Amount',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '退订云渲染实例数量。取值范围：1~500。',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求 ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'InstanceIds' => [
                                'description' => '退订成功的云渲染实例ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例ID',
                                    'type' => 'string',
                                    'example' => 'gcs-bmt0kbn7e013aedg9',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"InstanceIds\\": [\\n    \\"gcs-bmt0kbn7e013aedg9\\"\\n  ]\\n}","type":"json"}]',
            'title' => '退订云渲染实例',
            'responseParamsDescription' => '### 返回示例'."\n"
                .'正常返回示例'."\n"
                .'JSON格式'."\n"
                .'```'."\n"
                .'{'."\n"
                .' "RequestId": "46329898-489C-4E63-9BA1-C1DA5C5D0986",'."\n"
                .' "InstanceIds": ["gcs-bdbdgetn7e013aedg9", "gcs-xdg0kdbn7e013aedg9"]'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListInstances' => [
            'summary' => '查询云渲染实例列表。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID，不填默认查询所有项目下的实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4820372607851300489003',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'GCS 实例的规格，不填默认所有实例规格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gcs.r1c1m1.1xlarge',
                    ],
                ],
                [
                    'name' => 'DistrictId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '大区ID，不填默认所有大区。取值：'."\n"
                            ."\n"
                            .'- huadong'."\n"
                            ."\n"
                            .'- xinan'."\n"
                            ."\n"
                            .'- huanan'."\n"
                            ."\n"
                            .'- huabei'."\n"
                            ."\n"
                            .'- huazhong',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'huadong',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '待查询的云渲染实例 ID 列表，不填默认所有实例 ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'gcs-bmt0kbn7e013aedg9',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上一次查询返回的 Token，首次查询可为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BEXZPF01W23U46598WVf',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最大结果数。取值范围 1~200，默认值 200。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云渲染实例话状态，包括：'."\n"
                            .'- CREATING：创建中'."\n"
                            .'- RUNNING：实例运行中'."\n"
                            .'- OPERATING：实例运维中'."\n"
                            .'- DELETING: 实例删除中'."\n"
                            .'- MIGRATING: 实例迁移中',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CREATING',
                        'enum' => [
                            'CREATING',
                            'RUNNING',
                            'OPERATING',
                            'DELETING',
                            'MIGRATING',
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
                                'description' => '请求 ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'Instances' => [
                                'description' => '云渲染实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'gcs-bmt0kbn7e013aedg9',
                                        ],
                                        'InstanceType' => [
                                            'description' => 'GCS 云渲染实例规格。',
                                            'type' => 'string',
                                            'example' => 'gcs.r1c1m1.1xlarge',
                                        ],
                                        'DistrictId' => [
                                            'description' => '大区ID。取值：'."\n"
                                                ."\n"
                                                .'- huadong'."\n"
                                                ."\n"
                                                .'- xinan'."\n"
                                                ."\n"
                                                .'- huanan'."\n"
                                                ."\n"
                                                .'- huabei'."\n"
                                                ."\n"
                                                .'- huazhong',
                                            'type' => 'string',
                                            'example' => 'huadong',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => '4820372607851300489003',
                                        ],
                                        'Status' => [
                                            'description' => '云渲染实例话状态，包括：'."\n"
                                                .'- CREATING：创建中'."\n"
                                                .'- RUNNING：实例运行中'."\n"
                                                .'- OPERATING：实例运维中'."\n"
                                                .'- DELETING: 实例删除中'."\n"
                                                .'- MIGRATING: 实例迁移中',
                                            'type' => 'string',
                                            'example' => 'CREATING',
                                        ],
                                        'CreationTime' => [
                                            'description' => '创建时间。按照[ISO 8601](~~25696~~)标准表示，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2023-12-13T11:12:11Z',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                                'type' => 'string',
                                'example' => 'BEXZPF01W23U46598WVf',
                            ],
                            'MaxResults' => [
                                'description' => '本次请求所返回的最大记录条数。',
                                'type' => 'string',
                                'example' => '50',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"Instances\\": [\\n    {\\n      \\"InstanceId\\": \\"gcs-bmt0kbn7e013aedg9\\",\\n      \\"InstanceType\\": \\"gcs.r1c1m1.1xlarge\\",\\n      \\"DistrictId\\": \\"huadong\\",\\n      \\"ProjectId\\": \\"4820372607851300489003\\",\\n      \\"Status\\": \\"CREATING\\",\\n      \\"CreationTime\\": \\"2023-12-13T11:12:11Z\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"BEXZPF01W23U46598WVf\\",\\n  \\"MaxResults\\": \\"50\\"\\n}","type":"json"}]',
            'title' => '查询云渲染实例列表',
            'responseParamsDescription' => '### 返回示例'."\n"
                .'正常返回 JSON 格式'."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "Instances": ['."\n"
                .'    {'."\n"
                .'      "Status": "RUNNING",'."\n"
                .'      "InstanceId": "gcs-bmt0kbn7e013aedg8",'."\n"
                .'      "DistrictId": "huadong",'."\n"
                .'      "ProjectId": "4820372607851300489003",'."\n"
                .'      "CreationTime": "2023-12-13T11:12:11Z",'."\n"
                .'      "InstanceType": "gcs.r1c1m1.1xlarge"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "Status": "RUNNING",'."\n"
                .'      "InstanceId": "gcs-bmt0kbn7e013aedg9",'."\n"
                .'      "DistrictId": "huadong",'."\n"
                .'      "ProjectId": "4820372607851300489003",'."\n"
                .'      "CreationTime": "2023-12-13T11:12:11Z",'."\n"
                .'      "InstanceType": "gcs.r1c1m1.1xlarge"'."\n"
                .'    }'."\n"
                .'  ],'."\n"
                .'  "RequestId": "46329898-489C-4E63-9BA1-C1DA5C5D0986",'."\n"
                .'  "NextToken": "BEXZPF01W23U46598WVf",'."\n"
                .'  "MaxResults": 200'."\n"
                .'}'."\n"
                .'```',
        ],
        'CreateApp' => [
            'summary' => '创建一个新的应用。',
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
                    'name' => 'AppName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用名称。'."\n"
                            ."\n"
                            .'支持Unicode字符，最大64个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example',
                    ],
                ],
                [
                    'name' => 'AppType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用类型。取值：'."\n"
                            ."\n"
                            .'- end_game：端游（客户端游戏）。'."\n"
                            .'- ai_app：人工智能应用。'."\n"
                            .'- render_app：渲染类应用。'."\n"
                            .'- compute：科研渲染应用。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'end_game',
                    ],
                ],
                [
                    'name' => 'StreamingAppId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云渲染串流服务实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47d0bd4d-8815-48a2-b783-6cbba89d****',
                    ],
                ],
                [
                    'name' => 'StreamingSolution',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '串流方案。取值：'."\n"
                            ."\n"
                            .'- video-cloud-streaming：使用云渲染串流服务。'."\n"
                            ."\n"
                            .'- self-have-streaming：自有串流。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'self-have-streaming',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AppIdDataFlatPopResult',
                        'description' => 'AppIdDataFlatPopResult',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '4384****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AppId\\": \\"4384****\\",\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '创建应用',
        ],
        'ModifyApp' => [
            'summary' => '修改某个应用的名称。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4384****',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用名称。'."\n"
                            ."\n"
                            .'支持Unicode字符，最大64个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AppIdDataFlatPopResult',
                        'description' => 'AppIdDataFlatPopResult',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '4384****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AppId\\": \\"4384****\\",\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '修改应用信息',
        ],
        'ListApp' => [
            'summary' => '查询应用列表。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'KeySearch',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '搜索关键词。'."\n"
                            ."\n"
                            .'> 您可以通过输入应用ID或应用名称实现模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~9999。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AppListDataFlatPopResult',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Apps' => [
                                'description' => '应用列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '应用列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AppId' => [
                                            'description' => '应用ID。',
                                            'type' => 'string',
                                            'example' => '4384****',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '应用的创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-06 02:00:00',
                                        ],
                                        'GmtModified' => [
                                            'description' => '应用的最后修改时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-06 02:00:00',
                                        ],
                                        'AppName' => [
                                            'description' => '应用名称。',
                                            'type' => 'string',
                                            'example' => 'example',
                                        ],
                                        'AppType' => [
                                            'description' => '应用类型。取值：'."\n"
                                                ."\n"
                                                .'- end_game：端游（客户端游戏）。'."\n"
                                                .'- hand_game：手游（移动端游戏）。  '."\n"
                                                .'- ai_app：人工智能应用。'."\n"
                                                .'- render_app：渲染类应用。'."\n"
                                                .'- cluster_compute：科研计算应用。'."\n"
                                                .'- compute：科研渲染应用。',
                                            'type' => 'string',
                                            'example' => 'end_game',
                                        ],
                                        'VersionTotalNum' => [
                                            'description' => '应用总共创建的版本数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '28',
                                        ],
                                        'VersionAdaptNum' => [
                                            'description' => '应用总共适配成功的版本数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                    ],
                                ],
                            ],
                            'Total' => [
                                'description' => '应用总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Apps\\": [\\n    {\\n      \\"AppId\\": \\"4384****\\",\\n      \\"GmtCreate\\": \\"2022-04-06 02:00:00\\",\\n      \\"GmtModified\\": \\"2022-04-06 02:00:00\\",\\n      \\"AppName\\": \\"example\\",\\n      \\"AppType\\": \\"end_game\\",\\n      \\"VersionTotalNum\\": 28,\\n      \\"VersionAdaptNum\\": 10\\n    }\\n  ],\\n  \\"Total\\": 12,\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '查询应用列表',
        ],
        'GetApp' => [
            'summary' => '查询单个应用的详细信息。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4384****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AppInfoFlatPopResult',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '4384****',
                            ],
                            'GmtCreate' => [
                                'description' => '应用创建时间。',
                                'type' => 'string',
                                'example' => '2022-04-06 02:00:00',
                            ],
                            'GmtModified' => [
                                'description' => '应用最后修改时间。',
                                'type' => 'string',
                                'example' => '2022-04-06 02:00:00',
                            ],
                            'AppName' => [
                                'description' => '应用名称。',
                                'type' => 'string',
                                'example' => 'example',
                            ],
                            'AppType' => [
                                'description' => '应用类型。取值：'."\n"
                                    ."\n"
                                    .'- end_game：端游（客户端游戏）。'."\n"
                                    .'- hand_game：手游（移动端游戏）。  '."\n"
                                    .'- ai_app：人工智能应用。'."\n"
                                    .'- render_app：渲染类应用。'."\n"
                                    .'- cluster_compute：科研计算应用。'."\n"
                                    .'- compute：科研渲染应用。',
                                'type' => 'string',
                                'example' => 'end_game',
                            ],
                            'StreamingAppId' => [
                                'description' => '云渲染串流服务实例ID。',
                                'type' => 'string',
                                'example' => '47d0bd4d-8815-48a2-b783-6cbba89d****',
                            ],
                            'StreamingSolution' => [
                                'description' => '串流方案。'."\n"
                                    .'取值：'."\n"
                                    ."\n"
                                    .'- video-cloud-streaming：使用云渲染串流服务。'."\n"
                                    ."\n"
                                    .'- self-have-streaming：自有串流。',
                                'type' => 'string',
                                'example' => 'self-have-streaming',
                            ],
                            'VersionTotalNum' => [
                                'description' => '应用总共创建的版本数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '28',
                            ],
                            'VersionAdaptNum' => [
                                'description' => '应用总共适配成功的版本数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AppId\\": \\"4384****\\",\\n  \\"GmtCreate\\": \\"2022-04-06 02:00:00\\",\\n  \\"GmtModified\\": \\"2022-04-06 02:00:00\\",\\n  \\"AppName\\": \\"example\\",\\n  \\"AppType\\": \\"end_game\\",\\n  \\"StreamingAppId\\": \\"47d0bd4d-8815-48a2-b783-6cbba89d****\\",\\n  \\"StreamingSolution\\": \\"self-have-streaming\\",\\n  \\"VersionTotalNum\\": 28,\\n  \\"VersionAdaptNum\\": 10,\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '查询应用详情',
        ],
        'DeleteApp' => [
            'summary' => '删除某个应用。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4384****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AppIdDataFlatPopResult',
                        'description' => 'AppIdDataFlatPopResult',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '4384****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AppId\\": \\"4384****\\",\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '删除应用',
        ],
        'CreateAppVersion' => [
            'summary' => '为应用创建一个新版本。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用版本归属的应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4384****',
                    ],
                ],
                [
                    'name' => 'AppVersionName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用版本名称。'."\n"
                            ."\n"
                            .'支持Unicode字符，最大32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'exampleVersion',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AppVersionIdDataFlatPopResult',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'AppVersionId' => [
                                'description' => '应用版本ID。',
                                'type' => 'string',
                                'example' => '1432****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AppVersionId\\": \\"1432****\\",\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '创建版本',
        ],
        'ModifyAppVersion' => [
            'summary' => '修改应用的版本信息。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'AppVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1432****',
                    ],
                ],
                [
                    'name' => 'AppVersionName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用版本名称。'."\n"
                            ."\n"
                            .'支持Unicode字符，最大32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'exampleVersion',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AppVersionIdDataFlatPopResult',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'AppVersionId' => [
                                'description' => '应用版本ID。',
                                'type' => 'string',
                                'example' => '1432****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AppVersionId\\": \\"1432****\\",\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '修改版本信息',
        ],
        'ListAppVersion' => [
            'summary' => '查询某个应用的版本列表。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4384****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            .'取值范围：1~9999。'."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AppVersionListDataFlatPopResult',
                        'description' => 'AppVersionListDataFlatPopResult',
                        'type' => 'object',
                        'properties' => [
                            'Versions' => [
                                'description' => '版本列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '版本列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AppVersionId' => [
                                            'description' => '应用版本ID。',
                                            'type' => 'string',
                                            'example' => '1432****',
                                        ],
                                        'AppId' => [
                                            'description' => '应用版本归属的应用ID。',
                                            'type' => 'string',
                                            'example' => '4384****',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '应用版本的创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-06 02:00:00',
                                        ],
                                        'GmtModified' => [
                                            'description' => '应用版本的最后修改时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-06 02:00:00',
                                        ],
                                        'AppVersionName' => [
                                            'description' => '应用版本名称。',
                                            'type' => 'string',
                                            'example' => 'exampleVersion',
                                        ],
                                        'FileUploadType' => [
                                            'description' => '文件上传方式。取值： '."\n"
                                                ."\n"
                                                .'- cloud_file_download：云端离线下载。'."\n"
                                                .'- local_file_upload：本地文件上传。',
                                            'type' => 'string',
                                            'example' => 'cloud_file_download',
                                        ],
                                        'FileAddress' => [
                                            'description' => '文件地址。',
                                            'type' => 'string',
                                            'example' => 'https://www.example.com/exampleFile.tar',
                                        ],
                                        'AppVersionStatus' => [
                                            'description' => '应用版本状态。取值：'."\n"
                                                ."\n"
                                                .'- file_uploading：上传中。'."\n"
                                                .'- file_upload_fail：上传失败。'."\n"
                                                .'- file_upload_success：上传成功。'."\n"
                                                .'- app_adapting：应用适配中。'."\n"
                                                .'- app_adapt_fail：应用适配失败。'."\n"
                                                .'- app_adapt_success：应用已适配。'."\n"
                                                .'- app_deploy_success：应用已部署。'."\n"
                                                .'- app_deleting：应用删除中。'."\n"
                                                .'- app_deleted：应用已删除。',
                                            'type' => 'string',
                                            'example' => 'file_uploading',
                                        ],
                                        'AppVersionStatusMemo' => [
                                            'description' => '应用版本状态说明，例如：上传失败原因。',
                                            'type' => 'string',
                                            'example' => '文件大于上限',
                                        ],
                                        'FileSize' => [
                                            'description' => '应用文件大小。'."\n"
                                                .'单位：Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1024',
                                        ],
                                        'FileUploadFinishTime' => [
                                            'description' => '应用文件上传完成时间。',
                                            'type' => 'string',
                                            'example' => '2022-04-06 02:00:00',
                                        ],
                                        'ConsumeCu' => [
                                            'description' => '单路CRU消耗。',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '0.31',
                                        ],
                                    ],
                                ],
                            ],
                            'Total' => [
                                'description' => '应用版本总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '16',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Versions\\": [\\n    {\\n      \\"AppVersionId\\": \\"1432****\\",\\n      \\"AppId\\": \\"4384****\\",\\n      \\"GmtCreate\\": \\"2022-04-06 02:00:00\\",\\n      \\"GmtModified\\": \\"2022-04-06 02:00:00\\",\\n      \\"AppVersionName\\": \\"exampleVersion\\",\\n      \\"FileUploadType\\": \\"cloud_file_download\\",\\n      \\"FileAddress\\": \\"https://www.example.com/exampleFile.tar\\",\\n      \\"AppVersionStatus\\": \\"file_uploading\\",\\n      \\"AppVersionStatusMemo\\": \\"文件大于上限\\",\\n      \\"FileSize\\": 1024,\\n      \\"FileUploadFinishTime\\": \\"2022-04-06 02:00:00\\",\\n      \\"ConsumeCu\\": 0.31\\n    }\\n  ],\\n  \\"Total\\": 16,\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '查询应用版本列表',
        ],
        'GetAppVersion' => [
            'summary' => '查询某个应用的版本详情。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1432****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AppVersionInfoFlatPopResult',
                        'description' => 'AppVersionInfoFlatPopResult',
                        'type' => 'object',
                        'properties' => [
                            'AppVersionId' => [
                                'description' => '应用版本ID。',
                                'type' => 'string',
                                'example' => '1432****',
                            ],
                            'GmtCreate' => [
                                'description' => '应用版本的创建时间。',
                                'type' => 'string',
                                'example' => '2022-04-06 02:00:00',
                            ],
                            'GmtModified' => [
                                'description' => '应用最后修改时间。',
                                'type' => 'string',
                                'example' => '2022-04-06 02:00:00',
                            ],
                            'AppId' => [
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '4384****',
                            ],
                            'AppVersionName' => [
                                'description' => '应用版本名称。',
                                'type' => 'string',
                                'example' => 'exampleVersion',
                            ],
                            'FileUploadType' => [
                                'description' => '文件上传方式。取值： '."\n"
                                    ."\n"
                                    .'- cloud_file_download：云端离线下载。'."\n"
                                    .'- local_file_upload：本地文件上传。',
                                'type' => 'string',
                                'example' => 'local_file_upload',
                            ],
                            'FileAddress' => [
                                'description' => '文件地址。',
                                'type' => 'string',
                                'example' => 'https://www.example.com/exampleFile.tar',
                            ],
                            'AppVersionStatus' => [
                                'description' => '应用版本状态。取值：'."\n"
                                    ."\n"
                                    .'- file_uploading：上传中。'."\n"
                                    .'- file_upload_fail：上传失败。'."\n"
                                    .'- file_upload_success：上传成功。'."\n"
                                    .'- app_adapting：应用适配中。'."\n"
                                    .'- app_adapt_fail：应用适配失败。'."\n"
                                    .'- app_adapt_success：应用已适配。'."\n"
                                    .'- app_deploy_success：应用已部署。'."\n"
                                    .'- app_deleting：应用删除中。'."\n"
                                    .'- app_deleted：应用已删除。',
                                'type' => 'string',
                                'example' => 'file_uploading',
                            ],
                            'AppVersionStatusMemo' => [
                                'description' => '应用版本状态说明，例如：上传失败原因。',
                                'type' => 'string',
                                'example' => '文件大于上限',
                            ],
                            'FileUploadFinishTime' => [
                                'description' => '应用文件上传完成时间。',
                                'type' => 'string',
                                'example' => '2022-04-06 02:00:00',
                            ],
                            'FileSize' => [
                                'description' => '应用文件大小。'."\n"
                                    .'单位：Byte。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1024',
                            ],
                            'ConsumeCu' => [
                                'description' => '版本最小适配CU个数。',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '0.31',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AppVersionId\\": \\"1432****\\",\\n  \\"GmtCreate\\": \\"2022-04-06 02:00:00\\",\\n  \\"GmtModified\\": \\"2022-04-06 02:00:00\\",\\n  \\"AppId\\": \\"4384****\\",\\n  \\"AppVersionName\\": \\"exampleVersion\\",\\n  \\"FileUploadType\\": \\"local_file_upload\\",\\n  \\"FileAddress\\": \\"https://www.example.com/exampleFile.tar\\",\\n  \\"AppVersionStatus\\": \\"file_uploading\\",\\n  \\"AppVersionStatusMemo\\": \\"文件大于上限\\",\\n  \\"FileUploadFinishTime\\": \\"2022-04-06 02:00:00\\",\\n  \\"FileSize\\": 1024,\\n  \\"ConsumeCu\\": 0.31,\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '查询版本详情',
        ],
        'DeleteAppVersion' => [
            'summary' => '删除某个应用的版本。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AppVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1432****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AppVersionIdDataFlatPopResult',
                        'description' => 'AppVersionIdDataFlatPopResult',
                        'type' => 'object',
                        'properties' => [
                            'AppVersionId' => [
                                'description' => '应用版本ID。',
                                'type' => 'string',
                                'example' => '1432****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AppVersionId\\": \\"1432****\\",\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '删除版本',
        ],
        'CreateAdaptation' => [
            'summary' => '为某个应用版本创建适配请求。',
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
                    'name' => 'AppVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1432****',
                    ],
                ],
                [
                    'name' => 'AdaptTarget',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '适配目标信息。',
                        'type' => 'object',
                        'properties' => [
                            'StartProgram' => [
                                'description' => '启动程序。'."\n"
                                    ."\n"
                                    .'支持Unicode字符，最大512个字符。'."\n"
                                    ."\n"
                                    .'> 当`AppType`为`end_game`、`hand_game`和`render_app`时，该参数必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/example/example.exe',
                            ],
                            'Resolution' => [
                                'description' => '分辨率。取值：'."\n"
                                    ."\n"
                                    .'- 720p'."\n"
                                    .'- 1080p'."\n"
                                    .'- 4k'."\n"
                                    ."\n"
                                    .'> 当`AppType`为`end_game`和`hand_game`时，该参数必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1080p',
                            ],
                            'FrameRate' => [
                                'description' => '帧率。取值：'."\n"
                                    ."\n"
                                    .'- 30'."\n"
                                    .'- 60'."\n"
                                    ."\n"
                                    .'单位：Fps。'."\n"
                                    ."\n"
                                    .'> 当`AppType`为`end_game`和`hand_game`时，该参数必填。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '30',
                            ],
                            'BitRate' => [
                                'description' => '码率。'."\n"
                                    ."\n"
                                    .'取值范围：1~30。'."\n"
                                    ."\n"
                                    .'单位：Mbps。'."\n"
                                    ."\n"
                                    .'> 当`AppType`为`end_game`和`hand_game`时，该参数必填。'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '30',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AdaptIdDataFlatPopResult',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'AdaptApplyId' => [
                                'description' => '应用适配申请ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5435****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AdaptApplyId\\": 0,\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '创建适配请求',
        ],
        'GetAdaptation' => [
            'summary' => '查询某个适配申请的详情。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用版本ID。'."\n"
                            .'> `AppVersionId`和`AdaptApplyId`二选一，如果两者都填，以本参数为准。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5435****',
                    ],
                ],
                [
                    'name' => 'AdaptApplyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '适配申请ID。'."\n"
                            .'> `AppVersionId`和`AdaptApplyId`二选一。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1432****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AdaptApplyDataFlatPopResult',
                        'description' => 'AdaptApplyDataFlatPopResult',
                        'type' => 'object',
                        'properties' => [
                            'AdaptApplyId' => [
                                'description' => '应用适配申请ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5435****',
                            ],
                            'GmtCreate' => [
                                'description' => '应用适配的创建时间。',
                                'type' => 'string',
                                'example' => '2022-04-06 02:00:00',
                            ],
                            'GmtModified' => [
                                'description' => '应用适配的最后修改时间。',
                                'type' => 'string',
                                'example' => '2022-04-06 02:00:00',
                            ],
                            'AppId' => [
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '4384****',
                            ],
                            'AppVersionId' => [
                                'description' => '应用版本ID。',
                                'type' => 'string',
                                'example' => '1432****',
                            ],
                            'AdaptTarget' => [
                                'description' => '适配目标信息。',
                                'type' => 'object',
                                'properties' => [
                                    'StartProgram' => [
                                        'description' => '启动程序。'."\n"
                                            ."\n"
                                            .'> 当`AppType`为`end_game`、`hand_game`和`render_app`时，显示该参数。',
                                        'type' => 'string',
                                        'example' => '/example/example.exe',
                                    ],
                                    'Resolution' => [
                                        'description' => '分辨率。'."\n"
                                            ."\n"
                                            .'> 当`AppType`为`end_game`和`hand_game`时，显示该参数。',
                                        'type' => 'string',
                                        'example' => '1080p',
                                    ],
                                    'FrameRate' => [
                                        'description' => '帧率。'."\n"
                                            ."\n"
                                            .'单位：Fps。'."\n"
                                            ."\n"
                                            .'> 当`AppType`为`end_game`和`hand_game`时，显示该参数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'BitRate' => [
                                        'description' => '码率。'."\n"
                                            ."\n"
                                            .'单位：Mbps。'."\n"
                                            ."\n"
                                            .'> 当`AppType`为`end_game`和`hand_game`时，显示该参数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AdaptApplyId\\": 0,\\n  \\"GmtCreate\\": \\"2022-04-06 02:00:00\\",\\n  \\"GmtModified\\": \\"2022-04-06 02:00:00\\",\\n  \\"AppId\\": \\"4384****\\",\\n  \\"AppVersionId\\": \\"1432****\\",\\n  \\"AdaptTarget\\": {\\n    \\"StartProgram\\": \\"/example/example.exe\\",\\n    \\"Resolution\\": \\"1080p\\",\\n    \\"FrameRate\\": 30,\\n    \\"BitRate\\": 30\\n  },\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '查询适配详情',
        ],
        'CreateCapacityReservation' => [
            'summary' => '创建容器预定任务。预定可运行指定会话数量的容器，预定结果通过HTTP接口返回。',
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
                    'name' => 'ProjectId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '项目ID',
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'd9a8****',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '13027****',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用版本ID，如果不填，采用控制台设置的默认版本',
                        'description' => '应用版本ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '35067****',
                    ],
                ],
                [
                    'name' => 'DistrictId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '大区 id',
                        'description' => '区域ID。取值：'."\n"
                            ."\n"
                            .'- huadong'."\n"
                            ."\n"
                            .'- xinan'."\n"
                            ."\n"
                            .'- huanan'."\n"
                            ."\n"
                            .'- huabei'."\n"
                            ."\n"
                            .'- huazhong'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'huadong',
                    ],
                ],
                [
                    'name' => 'ExpectResourceReadyTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '预期资源ready可服务时间 时间格式 yyyy-mm-dd HH:MM:SS 比如',
                        'description' => '预期资源开始服务时间。'."\n"
                            ."\n"
                            .'时间格式：`yyyy-mm-dd HH:MM:SS`。'."\n"
                            ."\n"
                            .'时区是北京时间（东八区）。'."\n"
                            ."\n"
                            .'> 本参数仅适用于白名单用户。',
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                        'example' => '2022-02-02 22:22:22',
                    ],
                ],
                [
                    'name' => 'ExpectSessionCapacity',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '预期创建出的容器能支持的 session 数量。GCS 内部会根据适配自动计算出所需要的资源量，以及多种机型的配比。',
                        'description' => '预期可支持的会话数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '客户端 token，保持幂等性。',
                        'description' => '自定义Token，保证请求幂等性。'."\n"
                            .'> 支持ASCII字符，且不能超过64个字符。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '2YEF0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopHttpResult<>',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'title' => '容器创建任务 id',
                                'description' => '容器预定任务ID。',
                                'type' => 'string',
                                'example' => 'b354****',
                            ],
                            'CurrMaxAllocatableSessionCapacity' => [
                                'title' => '当前最大可分配的 session 库存，注意两次调用之间，该库存值可能有变动',
                                'description' => '当前最大可分配的容器数量。'."\n"
                                    .'><notice>当您重复调用本接口时，参数取值存在差异。></notice>'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10000',
                            ],
                            'RequestId' => [
                                'title' => 'pop的requestId',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"b354****\\",\\n  \\"CurrMaxAllocatableSessionCapacity\\": 10000,\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '创建容器预定任务',
            'description' => '当预定任务完成时，HTTP接口推送消息如下：'."\n"
                .'> HTTP接口是接收会话启动、停止、串流等消息的一种方式。目前消息保存1天，重试策略为退避重试，最多重试176次。'."\n"
                ."\n"
                .'事件类型为`CAPACITY_REEERVATION_RESULT`。'."\n"
                .'><notice>不区分模式，仅推送HTTP接口。></notice>'."\n"
                ."\n"
                .'| 名称 | 类型 | 是否必选 | 说明|'."\n"
                .'| ------ | ------ | ------ |----- |'."\n"
                .'|success|Boolean|是|任务是否成功。<br> 取值： <br>true：任务成功。<br>false：任务失败。|'."\n"
                .'|eventType|String|是|事件类型。|'."\n"
                .'|eventDetail|Object[EventDetail]|是|事件详情。<br>当任务成功时，返回该参数。|'."\n"
                ."\n"
                .'EventDetail数据结构如下所示。'."\n"
                .'| 名称 | 类型 | 是否必选 | 说明|'."\n"
                .'| ------ | ------ | ------ |----- |'."\n"
                .'| taskId | String | 是 | 任务ID。 |'."\n"
                .'| success | Boolean | 是 | 任务是否成功。<br> 取值：<br>true：任务成功。<br>false：任务失败。 |'."\n"
                .'| projectId | String | 是 | 项目ID。  |'."\n"
                .'| appId | String | 是 | 应用ID。 |'."\n"
                .'| appVersion | String | 是 | 应用版本。  |'."\n"
                .'| districtId | String | 是 | 区域ID。 |'."\n"
                .'| expectSessionCapacity | Integer| 是 | 期望支撑的会话数量。  |'."\n"
                .'| realSessionCapacity | Integer | 是 | 实际生产出的容器能支撑的会话数量。  |',
        ],
        'CancelReserveTask' => [
            'summary' => '取消指定的容器预定任务。',
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
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建容量预定任务时返回的 taskId',
                        'description' => '容器预定任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b354****',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '客户端幂等性 token',
                        'description' => '自定义Token，保证请求幂等性。 '."\n"
                            .'> 支持ASCII字符，且不能超过64个字符。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '2YEF0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopHttpResult<>',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'description' => '容器预定任务ID。',
                                'type' => 'string',
                                'example' => 'b354****',
                            ],
                            'RequestId' => [
                                'title' => 'pop的requestId',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"b354****\\",\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '取消容器预定任务',
        ],
        'GetReserveTaskDetail' => [
            'summary' => '查询容器预定任务的详细信息。',
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
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建容量预定任务时返回的 taskId',
                        'description' => '容量预定任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b354****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopHttpResult<>',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'title' => '容器创建任务 id',
                                'description' => '容器预定任务ID。',
                                'type' => 'string',
                                'example' => 'b354****',
                            ],
                            'TaskStatus' => [
                                'title' => '任务状态',
                                'description' => '任务状态。取值：'."\n"
                                    ."\n"
                                    .'- created：已创建但未运行。'."\n"
                                    ."\n"
                                    .'- running：运行中。'."\n"
                                    ."\n"
                                    .'- cancelled：已取消。'."\n"
                                    ."\n"
                                    .'- cancelling：取消中。'."\n"
                                    ."\n"
                                    .'- completed：已完成。'."\n"
                                    ."\n"
                                    .'- failed：失败。',
                                'type' => 'string',
                                'example' => 'created',
                            ],
                            'ProjectId' => [
                                'title' => '容量预定时的 projectId',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => 'd9a8****',
                            ],
                            'AppId' => [
                                'title' => '容量预定时的 appId',
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '13027****',
                            ],
                            'AppVersion' => [
                                'title' => '容量预定时的 appVersion',
                                'description' => '应用版本ID。',
                                'type' => 'string',
                                'example' => '35067****',
                            ],
                            'DistrictId' => [
                                'title' => '容量预定时指定的大区id',
                                'description' => '区域ID。取值：'."\n"
                                    ."\n"
                                    .'- huadong'."\n"
                                    ."\n"
                                    .'- xinan'."\n"
                                    ."\n"
                                    .'- huanan'."\n"
                                    ."\n"
                                    .'- huabei'."\n"
                                    ."\n"
                                    .'- huazhong'."\n",
                                'type' => 'string',
                                'example' => 'huadong',
                            ],
                            'ExpectSessionCapacity' => [
                                'title' => '容量预定期望的会话路数',
                                'description' => '容量预定期望的会话路数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'CurrCompletedSessionCapacity' => [
                                'title' => '当前任务已经生产完成的会话路数',
                                'description' => '当前任务已经生产完成的会话路数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'ExpectResourceReadyTime' => [
                                'title' => '容量预定，期望生效时间',
                                'description' => '容量预定时的期望生效时间。'."\n"
                                    .'格式：`YYYY-MM-DD hh:mm:ss` ，时区是北京时间（东八区）。',
                                'type' => 'string',
                                'example' => '2022-02-02 22:22:22',
                            ],
                            'RequestId' => [
                                'title' => 'pop的requestId',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'ResBatchList' => [
                                'description' => '本次预定的资源包含了哪些批次。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ResBatchId' => [
                                            'description' => '批次ID。',
                                            'type' => 'string',
                                            'example' => '726573XXXX',
                                        ],
                                        'ResBatchTagName' => [
                                            'description' => '批次标签名称。目前取值固定为 resBatchId。',
                                            'type' => 'string',
                                            'example' => 'resBatchId',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"b354****\\",\\n  \\"TaskStatus\\": \\"created\\",\\n  \\"ProjectId\\": \\"d9a8****\\",\\n  \\"AppId\\": \\"13027****\\",\\n  \\"AppVersion\\": \\"35067****\\",\\n  \\"DistrictId\\": \\"huadong\\",\\n  \\"ExpectSessionCapacity\\": 100,\\n  \\"CurrCompletedSessionCapacity\\": 100,\\n  \\"ExpectResourceReadyTime\\": \\"2022-02-02 22:22:22\\",\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"ResBatchList\\": [\\n    {\\n      \\"ResBatchId\\": \\"726573XXXX\\",\\n      \\"ResBatchTagName\\": \\"resBatchId\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询容器预定任务详情',
        ],
        'ReleaseCapacity' => [
            'summary' => '释放预定的容器。当符合指定条件且多个条件同时满足时，容器才会被释放。释放结果通过HTTP接口返回。',
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
                    'name' => 'ProjectId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '项目 id',
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'd9a8****',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'app id',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '13027****',
                    ],
                ],
                [
                    'name' => 'DistrictId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '大区 id',
                        'description' => '区域ID。取值：'."\n"
                            ."\n"
                            .'- huadong'."\n"
                            ."\n"
                            .'- xinan'."\n"
                            ."\n"
                            .'- huanan'."\n"
                            ."\n"
                            .'- huabei'."\n"
                            ."\n"
                            .'- huazhong'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'huadong',
                    ],
                ],
                [
                    'name' => 'ExpectReleaseSessionCapacity',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '期望释放的会话路数',
                        'description' => '期望释放的会话路数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '版本ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '35067****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopHttpResult<>',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'TaskId' => [
                                'title' => '容器异步释放任务 id',
                                'description' => '容器预定任务ID。',
                                'type' => 'string',
                                'example' => 'b354****',
                            ],
                            'RequestId' => [
                                'title' => 'pop的requestId',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskId\\": \\"b354****\\",\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '释放预定的容器',
            'description' => '释放预定容器的操作具有原子性，不存在部分成功或部分失败的情况。'."\n"
                ."\n"
                .'当释放任务成功时，HTTP接口消息通知如下：'."\n"
                .'> HTTP接口是接收会话启动、停止、串流等信息的一种方式。目前消息保存1天，重试策略为退避策略，最多重试176次。'."\n"
                ."\n"
                .'事件类型为`RELEASE_CAPACITY_RESULT`。'."\n"
                .'><notice>不区分模式，仅推送HTTP接口。></notice>'."\n"
                .'| 名称| 类型| 是否必选 | 说明 |'."\n"
                .'| ------ | ------ |----|------ |'."\n"
                .'|success|Boolean|是|任务是否成功。<br> 取值：<br>true：任务成功。<br>false：任务失败。 |'."\n"
                .'eventType|String|是|事件类型。|'."\n"
                .'eventDetail|Object[EventDetail]|是|事件详情。<br>当任务成功时，返回该参数。|'."\n"
                ."\n"
                .'EventDetail数据结构如下所示。'."\n"
                .'| 名称| 类型| 是否必选 | 说明 |'."\n"
                .'| ------ | ------ |----|------ |'."\n"
                .'| taskId | String | 是 |容器异步释放任务ID。 |'."\n"
                .'| success |Boolean | 是 |释放是否成功。<br> 取值：<br>true：释放成功。<br>false：释放失败。 |'."\n"
                .'| expectReleaseSessionCapacity | Integer | 是 |期望释放的会话路数。 |',
        ],
        'ReleaseCapacityByBatch' => [
            'summary' => '释放指定批次的机器。一般是机器预检未通过时，释放指定批次的机器。释放结果通过消息返回。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ResBatchId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '项目 id',
                        'description' => '预定时返回的资源批次号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '726573XXXX',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopHttpResult<>',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'pop的requestId',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\\\n\\"\\n}","type":"json"}]',
            'title' => '根据批次号释放资源',
            'description' => '当释放任务成功时，消息通知如下：'."\n"
                .'| 名称 | 类型 | 是否必选|说明|'."\n"
                .'| ------ | ------ | ------ | ------ |'."\n"
                .'| resBatchId |String | 是 |容器异步释放任务ID。|'."\n"
                .'| success |Boolean | 是 |释放是否成功。<br> 取值：<br>true：释放成功。<br>false：释放失败。|',
        ],
        'GetCapacity' => [
            'summary' => '查询容器信息。',
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
                    'name' => 'ProjectId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '项目 id',
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd9a8****',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '按照 appId 来匹配',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '13027****',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '按照 app 版本来匹配',
                        'description' => '应用版本ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '35067****',
                    ],
                ],
                [
                    'name' => 'DistrictId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '大区 id',
                        'description' => '区域ID。取值：'."\n"
                            ."\n"
                            .'- huadong'."\n"
                            ."\n"
                            .'- xinan'."\n"
                            ."\n"
                            .'- huanan'."\n"
                            ."\n"
                            .'- huabei'."\n"
                            ."\n"
                            .'- huazhong'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'huadong',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '一页大小，默认 20，最大 100',
                        'description' => '分页时每页显示的数据行数。最大值：100，默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '第几页，默认从 1 开始',
                        'description' => '页码。起始值：1，默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PopHttpResult<>',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'title' => '满足匹配条件的总量',
                                'description' => '容器信息记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'PageNum' => [
                                'title' => '第几页',
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页大小',
                                'description' => '数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Capacities' => [
                                'title' => '回满足匹配的',
                                'description' => '容器信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DistrictId' => [
                                            'title' => '该容器所属大区 id',
                                            'description' => '区域ID。取值：'."\n"
                                                ."\n"
                                                .'- huadong'."\n"
                                                ."\n"
                                                .'- xinan'."\n"
                                                ."\n"
                                                .'- huanan'."\n"
                                                ."\n"
                                                .'- huabei'."\n"
                                                ."\n"
                                                .'- huazhong'."\n",
                                            'type' => 'string',
                                            'example' => 'huadong'."\n",
                                        ],
                                        'AppId' => [
                                            'title' => '创建容器时指定的 appId',
                                            'description' => '应用ID。',
                                            'type' => 'string',
                                            'example' => '13027****',
                                        ],
                                        'AppVersion' => [
                                            'title' => '创建容器时指定的版本',
                                            'description' => '应用版本ID。',
                                            'type' => 'string',
                                            'example' => '35067****',
                                        ],
                                        'SessionCapacity' => [
                                            'title' => '可支撑 session 数量',
                                            'description' => '该容器支持的会话数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => 'd9a8****',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => 'pop的requestId',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Total\\": 100,\\n  \\"PageNum\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Capacities\\": [\\n    {\\n      \\"DistrictId\\": \\"huadong\\\\n\\",\\n      \\"AppId\\": \\"13027****\\",\\n      \\"AppVersion\\": \\"35067****\\",\\n      \\"SessionCapacity\\": 2,\\n      \\"ProjectId\\": \\"d9a8****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\"\\n}","type":"json"}]',
            'title' => '查询容器信息',
            'description' => '支持指定查询条件。当指定多个条件时，需同时满足全部条件才能实现查询容器信息功能。',
        ],
        'CreateAppSession' => [
            'summary' => '创建应用会话，并启动一个应用进程，返回会话信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '13027XXXX',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '应用版本',
                        'description' => '应用版本ID。'."\n"
                            ."\n"
                            .'> 当您未指定生效版本时，默认应用最新版本。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '35067XXXX',
                    ],
                ],
                [
                    'name' => 'CustomUserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义用户id',
                        'description' => '自定义用户ID，最大长度不超过64个字符。'."\n"
                            ."\n"
                            .'用于业务对用户维度做相应的操作。 '."\n"
                            ."\n"
                            .'> 当应用类型为`end_game`、`hand_game`时，本参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '2YEF0XXXX',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'CustomSessionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义会话id',
                        'description' => '自定义会话ID，保证请求幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。'."\n"
                            ."\n"
                            .'> 支持ASCII字符，且不能超过64个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1ADE0XXXX',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ClientIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端ip',
                        'description' => '业务的客户端IP，比如云游戏场景中玩家的IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XXX.XXX',
                    ],
                ],
                [
                    'name' => 'StartParameters',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '启动参数',
                        'description' => '启动参数。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => 'key',
                                    'description' => '目前支持的枚举值包括：'."\n"
                                        .'- startArgument：应用启动参数。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'startArgument',
                                ],
                                'Value' => [
                                    'description' => 'key对应的取值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'exampleValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SystemInfo',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '系统信息：如端侧机型等信息',
                        'description' => '系统信息，如客户端侧机型等信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => 'key取值支持自定义。约定以下保留字：'."\n"
                                        .'- utdid：表示设备ID，可以帮助平台分析异常流量的特征和定位问题',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'utdid',
                                ],
                                'Value' => [
                                    'description' => 'key对应的取值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'OE0usD+APXXXX',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Timeout',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按量付费模式按需生产资源的超时时间。'."\n"
                            .'取值范围 [900, 43200]秒，默认值1800。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1800',
                    ],
                ],
                [
                    'name' => 'EnablePostpaid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按量付费模式下创建会话时，是否按需生产资源。取值范围：'."\n"
                            .'- true：是'."\n"
                            .'- false：否，默认false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。如果已将应用关联到项目，创建会话时需填写正确的项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd9a8****',
                    ],
                ],
                [
                    'name' => 'AdapterFileId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '适配文件ID。此功能灰度开放，如未约定使用请勿传入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '501716211209548966XXXX',
                    ],
                ],
                [
                    'name' => 'DistrictId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域ID。取值：'."\n"
                            ."\n"
                            .'- huadong'."\n"
                            ."\n"
                            .'- xinan'."\n"
                            ."\n"
                            .'- huanan'."\n"
                            ."\n"
                            .'- huabei'."\n"
                            ."\n"
                            .'- huazhong'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'huadong',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'CustomSessionId' => [
                                'title' => '自定义会话id',
                                'description' => '自定义会话ID。',
                                'type' => 'string',
                                'example' => '1ADE0XXXX',
                            ],
                            'PlatformSessionId' => [
                                'title' => '平台会话id',
                                'description' => '平台会话ID。',
                                'type' => 'string',
                                'example' => '100XXXX',
                            ],
                            'AppId' => [
                                'title' => '应用id',
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '13027XXXX',
                            ],
                            'AppVersion' => [
                                'title' => '应用版本',
                                'description' => '应用版本ID。',
                                'type' => 'string',
                                'example' => '35067XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"CustomSessionId\\": \\"1ADE0XXXX\\",\\n  \\"PlatformSessionId\\": \\"100XXXX\\",\\n  \\"AppId\\": \\"13027XXXX\\",\\n  \\"AppVersion\\": \\"35067XXXX\\"\\n}","type":"json"}]',
            'title' => '创建应用会话',
            'description' => '- 创建会话成功后，事件类型为`APP_START`。应用启动的结果会通过以下消息通知。'."\n"
                .'><notice>仅限API对接模式，不适用于H5 SDK对接模式。></notice>'."\n"
                ."\n"
                .'|名称 | 类型 | 是否必选 |说明|'."\n"
                .'| ------ | ------ | ------ |------ |'."\n"
                .'| success | Boolean | 是 |启动是否成功。<br> 取值：<br>true：启动成功。<br>false：启动失败。|'."\n"
                .'|eventType|String|是|事件类型。|'."\n"
                .'|customSessionId|String|是|自定义会话ID。|'."\n"
                .'|platformSessionId|String|是|平台会话ID。|'."\n"
                .'|customTaskId|String|否|自定义任务ID。|'."\n"
                .'|platformTaskId|String|否|平台任务ID。|'."\n"
                .'|eventDetail|Object[EventDetail]|是|事件详情。|'."\n"
                .'|errorMessage|Object[EventDetail]|否|错误详情。<br>当启动失败时，返回该参数。|'."\n"
                .'|tags|Map<String,String>|否|会话标签。|'."\n"
                ."\n"
                .'EventDetail数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明| '."\n"
                .'| ------ | ------ | ------ |------ |'."\n"
                .'|appId|String|是|应用ID。|'."\n"
                .'|appVersion|String|是|应用版本ID。|'."\n"
                .'|appBizConfig|String|否|平台适配时自定义的业务配置数据。|'."\n"
                .'|streamingToken|String|否|串流鉴权信息，存在串流服务时才会携带。|'."\n"
                .'|endpoint|Object[Endpoint]|否|事件详情。<br>当启动成功时，返回该参数。'."\n"
                ."\n"
                .' Endpoint数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|-------|-------|-------|-------|'."\n"
                .'|name|String|是|名称。|'."\n"
                .'|type|String|是|类型。|'."\n"
                .'|accessHost|String|是|终端节点IP地址。|'."\n"
                .'|accessPort|String|是|终端节点端口。|'."\n"
                .'|isp|String|是|运营商标识。<br>取值：<br>MOBILE：中国移动。<br>UNICOM：中国联通。<br>TELECOM：中国电信。<br>BGP：多线网络。|'."\n"
                .'|districtId|String|是|区域ID。|'."\n"
                .'|regionId|String|是|地域ID。|'."\n"
                ."\n"
                .' ErrorMessage数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|------|------|------|------|'."\n"
                .'|code|String|是|错误码。|'."\n"
                .'|msg|String|是|错误详情。|'."\n"
                .'- 含有串流的业务创建会话成功后，事件类型为`APP_STREAMING_INIT`。串流初始化信息通过以下消息通知。'."\n"
                .'><notice>仅限API对接模式，不适用于H5 SDK对接模式。></notice>'."\n"
                ."\n"
                .'| 名称 | 类型 | 是否必选 |说明|'."\n"
                .'| ------ | ------ | ------ |------ |'."\n"
                .'| success | Boolean | 是 |串流初始化是否成功。<br> 取值：<br>true：初始化成功。<br>false：初始化失败。|'."\n"
                .'|eventType|String|是|事件类型。|'."\n"
                .'|customSessionId|String|是|自定义会话ID。|'."\n"
                .'|platformSessionId|String|是|平台会话ID。|'."\n"
                .'|customTaskId|String|否|自定义任务ID。|'."\n"
                .'|platformTaskId|String|否|平台任务ID。|'."\n"
                .'|eventDetail|Object[EventDetail]|是|事件详情。|'."\n"
                ."\n"
                .' EventDetail数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'| ------ | ------ | ------ |------ |'."\n"
                .'|appId|String|是|应用ID。|'."\n"
                .'|appVersion|String|是|应用版本ID。|'."\n"
                .'|appBizConfig|String|否|平台适配时自定义的业务配置数据。|'."\n"
                .'|streamingToken|String|否|串流鉴权信息，存在串流服务时才会携带。|'."\n"
                .'|eventDetail|Object[EventDetail]|否|事件详情。<br>当会话启动成功时，返回该参数。|'."\n"
                .'|errorMessage|Object|否|错误详情.<br>当会话启动失败时，返回该参数。|'."\n"
                ."\n"
                .' Endpoint数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|-------|-------|-------|-------|'."\n"
                .'|name|String|是|名称。|'."\n"
                .'|type|String|是|类型。|'."\n"
                .'|accessHost|String|是|终端节点IP地址。|'."\n"
                .'|accessPort|String|是|终端节点端口。|'."\n"
                .'|isp|String|是|<br>运营商标识。<br>取值：<br>MOBILE：中国移动。<br>UNICOM：中国联通。<br>TELECOM：中国电信。<br>BGP：多线网络。|'."\n"
                .'|districtId|String|是|区域ID。|'."\n"
                .'|regionId|String|是|地域ID。|'."\n"
                ."\n"
                .' ErrorMessage数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|------|------|------|------|'."\n"
                .'|code|String|是|错误码。|'."\n"
                .'|msg|String|是|错误详情。|',
        ],
        'StopAppSession' => [
            'summary' => '停止应用会话，后续停止结果会通过消息返回。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PlatformSessionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义用户id',
                        'description' => '平台会话ID，在平台中唯一标识一个会话。'."\n"
                            ."\n"
                            .'注意：PlatformSessionId和CustomSessionId必须二选一。 如果同时设置了两个参数，以PlatformSessionId为准。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '100XXXX',
                    ],
                ],
                [
                    'name' => 'CustomSessionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义会话id',
                        'description' => '自定义会话ID。'."\n"
                            ."\n"
                            .'注意：PlatformSessionId和CustomSessionId必须二选一。 如果同时设置了两个参数，以PlatformSessionId为准。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1ADE0XXXX',
                    ],
                ],
                [
                    'name' => 'StopParam',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '停止容器参数。此参数将透传到Agent。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '目前支持的枚举值包括：'."\n"
                                        .'- reason：停止原因。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'reason',
                                ],
                                'Value' => [
                                    'description' => 'key对应的取值。',
                                    'type' => 'any',
                                    'required' => false,
                                    'example' => 'exampleValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
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
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'CustomSessionId' => [
                                'title' => '自定义会话id',
                                'description' => '自定义会话ID。',
                                'type' => 'string',
                                'example' => '1ADE0XXXX',
                            ],
                            'PlatformSessionId' => [
                                'title' => '平台会话id',
                                'description' => '平台会话ID 。',
                                'type' => 'string',
                                'example' => '100XXXX',
                            ],
                            'AppId' => [
                                'title' => '应用id',
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '13027XXXX',
                            ],
                            'AppVersion' => [
                                'title' => '应用版本',
                                'description' => '应用版本ID。',
                                'type' => 'string',
                                'example' => '35067XXXX',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"CustomSessionId\\": \\"1ADE0XXXX\\",\\n  \\"PlatformSessionId\\": \\"100XXXX\\",\\n  \\"AppId\\": \\"13027XXXX\\",\\n  \\"AppVersion\\": \\"35067XXXX\\"\\n}","type":"json"}]',
            'title' => '停止应用会话',
            'description' => '发起停止、程序主动停止或程序崩溃等原因导致应用程序停止后，会通过此消息通知。'."\n"
                ."\n"
                .'事件类型为`APP_STOP`。'."\n"
                .'><notice>仅限API对接模式，不适用于H5 SDK对接模式。  ></notice>'."\n"
                ."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'| ------ | ------ | ------ |------ |'."\n"
                .'|success|Boolean|是|停止是否成功。<br>取值：<br>true：停止成功。<br>false：停止失败。|'."\n"
                .'|eventType|String|是|事件类型。|'."\n"
                .'|customSessionId|String|是|自定义会话ID。|'."\n"
                .'|platformSessionId|String|是|平台会话ID。|'."\n"
                .'|normal|Boolean|是|是否正常停止。<br>取值：<br>true：正常停止。<br>false：异常停止。|'."\n"
                .'|eventDetail|Object[EventDetail]|否|事件详情，成功时返回。|'."\n"
                .'|errorMessage|Object|否|错误详情，失败时返回。|'."\n"
                ."\n"
                .'EventDetail数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|------|------|------|------|'."\n"
                .'|appId|String|是|应用ID。|'."\n"
                .'|appVersion|String|是|应用版本ID。|'."\n"
                ."\n"
                .'ErrorMessage数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|------|------|------|------|'."\n"
                .'|code|String|是|错误码。|'."\n"
                .'|msg|String|是|错误详情。|',
        ],
        'GetAppSession' => [
            'summary' => '获取应用会话详情。',
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
                    'name' => 'PlatformSessionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '平台会话id',
                        'description' => '平台会话ID，在平台中唯一标识一个会话。'."\n"
                            ."\n"
                            .'注意：PlatformSessionId和CustomSessionId必须二选一。 如果同时设置了两个参数，以PlatformSessionId为准。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '100XXXX',
                    ],
                ],
                [
                    'name' => 'CustomSessionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义会话id',
                        'description' => '自定义会话ID，用于查询最近一条未结束的应用会话记录。'."\n"
                            ."\n"
                            .'注意：PlatformSessionId和CustomSessionId必须二选一。 如果同时设置了两个参数，以PlatformSessionId为准。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1ADE0XXXX',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID ',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'CustomSessionId' => [
                                'title' => '自定义会话id',
                                'description' => '自定义会话ID ',
                                'type' => 'string',
                                'example' => '1ADE0XXXX',
                            ],
                            'PlatformSessionId' => [
                                'title' => '平台会话id',
                                'description' => '平台会话ID ',
                                'type' => 'string',
                                'example' => '100XXXX',
                            ],
                            'AppId' => [
                                'title' => '应用id',
                                'description' => '应用ID ',
                                'type' => 'string',
                                'example' => '13027XXXX',
                            ],
                            'AppVersion' => [
                                'title' => '应用版本',
                                'description' => '应用版本ID ',
                                'type' => 'string',
                                'example' => '35067XXXX',
                            ],
                            'Status' => [
                                'title' => '状态',
                                'description' => '应用会话状态，包括：'."\n"
                                    .'- starting：启动中'."\n"
                                    .'- running：执行中'."\n"
                                    .'- stopping：停止中',
                                'type' => 'string',
                                'example' => 'running',
                            ],
                            'BizInfo' => [
                                'description' => '业务特定的信息，如会话启动/停止时间。',
                                'type' => 'object',
                                'properties' => [
                                    'StartTime' => [
                                        'description' => '会话启动时间',
                                        'type' => 'string',
                                        'example' => '2022-07-20 17:58:51',
                                    ],
                                    'StopTime' => [
                                        'description' => '会话停止时间',
                                        'type' => 'string',
                                        'example' => '2022-07-20 17:58:57',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"CustomSessionId\\": \\"1ADE0XXXX\\",\\n  \\"PlatformSessionId\\": \\"100XXXX\\",\\n  \\"AppId\\": \\"13027XXXX\\",\\n  \\"AppVersion\\": \\"35067XXXX\\",\\n  \\"Status\\": \\"running\\",\\n  \\"BizInfo\\": {\\n    \\"StartTime\\": \\"2022-07-20 17:58:51\\",\\n    \\"StopTime\\": \\"2022-07-20 17:58:57\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取应用会话详情',
        ],
        'ListAppSessions' => [
            'summary' => '查询应用会话列表，支持批量查询。只支持查询未结束的会话信息。',
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
                    'name' => 'PlatformSessionIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '自定义用户id',
                        'description' => '平台会话ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '其中一个ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => '100XXXX',
                        ],
                        'required' => false,
                        'docRequired' => false,
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'CustomSessionIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '自定义会话id',
                        'description' => '自定义会话ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '其中一个ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1ADE0XXXX',
                        ],
                        'required' => false,
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '分页大小',
                        'description' => '分页查询时设置的每页行数。最大值100，默认值20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '页码',
                        'description' => '实例列表的页码。起始值1，默认值1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '13027XXXX',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd9a8****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'AppSessions' => [
                                'description' => '会话列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CustomSessionId' => [
                                            'title' => '自定义会话id',
                                            'description' => '自定义会话ID',
                                            'type' => 'string',
                                            'example' => '1ADE0XXXX',
                                        ],
                                        'PlatformSessionId' => [
                                            'title' => '平台会话id',
                                            'description' => '平台会话ID',
                                            'type' => 'string',
                                            'example' => '100XXXX ',
                                        ],
                                        'AppId' => [
                                            'title' => '应用id',
                                            'description' => '应用ID',
                                            'type' => 'string',
                                            'example' => '13027XXXX',
                                        ],
                                        'AppVersion' => [
                                            'title' => '应用版本',
                                            'description' => '应用版本ID',
                                            'type' => 'string',
                                            'example' => '35067XXXX',
                                        ],
                                        'Status' => [
                                            'title' => '状态',
                                            'description' => '应用会话状态，包括：'."\n"
                                                .'- starting：启动中'."\n"
                                                .'- running：执行中'."\n"
                                                .'- stopping：停止中',
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                        'BizInfo' => [
                                            'description' => '业务特定的信息，如会话启动/停止时间。',
                                            'type' => 'object',
                                            'properties' => [
                                                'StartTime' => [
                                                    'description' => '会话启动时间',
                                                    'type' => 'string',
                                                    'example' => '2022-07-20 17:58:51',
                                                ],
                                                'StopTime' => [
                                                    'description' => '会话停止时间',
                                                    'type' => 'string',
                                                    'example' => '2022-07-20 17:58:57',
                                                ],
                                            ],
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => 'd9a8****'."\n",
                                        ],
                                    ],
                                ],
                            ],
                            'PageSize' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"AppSessions\\": [\\n    {\\n      \\"CustomSessionId\\": \\"1ADE0XXXX\\",\\n      \\"PlatformSessionId\\": \\"100XXXX \\",\\n      \\"AppId\\": \\"13027XXXX\\",\\n      \\"AppVersion\\": \\"35067XXXX\\",\\n      \\"Status\\": \\"running\\",\\n      \\"BizInfo\\": {\\n        \\"StartTime\\": \\"2022-07-20 17:58:51\\",\\n        \\"StopTime\\": \\"2022-07-20 17:58:57\\"\\n      },\\n      \\"ProjectId\\": \\"d9a8****\\\\n\\"\\n    }\\n  ],\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 100\\n}","type":"json"}]',
            'title' => '查询应用会话列表',
        ],
        'CreateAppSessionSync' => [
            'summary' => '创建应用会话并启动应用进程后，会话信息通过消息返回。',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '13027****',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '应用版本',
                        'description' => '应用版本ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '35067****',
                    ],
                ],
                [
                    'name' => 'CustomUserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义用户id',
                        'description' => '自定义用户ID。用于存档的读取和保存。最大长度不超过64个字符。'."\n"
                            .'> 当应用类型为`end_game`、`hand_game`时，本参数必填。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '2YEF0****',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'CustomSessionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义会话id',
                        'description' => '自定义会话ID。'."\n"
                            .'> 支持ASCII字符，且不能超过64个字符。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '1ADE0****',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ClientIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端ip',
                        'description' => '业务的客户端IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XX.XX',
                    ],
                ],
                [
                    'name' => 'StartParameters',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '启动参数',
                        'description' => '业务定制参数。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => 'key',
                                    'description' => '目前支持的枚举值。取值为startArgument，表示应用启动参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'startArgument',
                                ],
                                'Value' => [
                                    'title' => 'value',
                                    'description' => 'Key对应的取值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'exampleValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SystemInfo',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '系统信息：如端侧机型等信息',
                        'description' => '系统信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '目前支持自定义。取值为utdid，表示设备ID。可以帮助平台分析异常流量的特征和定位问题。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'utdid',
                                ],
                                'Value' => [
                                    'description' => 'Key对应的取值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'OE0usD+AP****',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '自定义标签。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最长64个字符。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'exampleTag',
                                ],
                                'Value' => [
                                    'description' => 'Key对应的取值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'exampleValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd9a8****',
                    ],
                ],
                [
                    'name' => 'DistrictId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '区域ID。取值：'."\n"
                            ."\n"
                            .'- huadong'."\n"
                            ."\n"
                            .'- xinan'."\n"
                            ."\n"
                            .'- huanan'."\n"
                            ."\n"
                            .'- huabei'."\n"
                            ."\n"
                            .'- huazhong',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'huadong',
                    ],
                ],
                [
                    'name' => 'MatchRules',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '资源匹配的规则信息，支持多个； 规则越多找到合适资源的耗时越长。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Type' => [
                                    'description' => '规则类型。取值：'."\n"
                                        .'- in：匹配携带指定 Key 和 Value 的资源。'."\n"
                                        .'- notIn： 匹配不携带指定 Key 和 Value 的资源。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'in',
                                ],
                                'Key' => [
                                    'description' => '资源提供的标签名称。'."\n"
                                        ."\n"
                                        .'取值：component，组件版本；指定组件版本时，只会用带有指定组件版本的资源启动会话。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'component',
                                ],
                                'Values' => [
                                    'description' => '需要匹配的标签值。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '约定的标签值。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'exampleTag',
                                    ],
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AdapterFileId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '适配文件ID。此功能灰度开放，如未约定使用请勿传入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '501716211209548966XXXX',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'CustomSessionId' => [
                                'title' => '自定义会话id',
                                'description' => '自定义会话ID。',
                                'type' => 'string',
                                'example' => '1ADE0****',
                            ],
                            'PlatformSessionId' => [
                                'title' => '平台会话id',
                                'description' => '平台会话ID。',
                                'type' => 'string',
                                'example' => '100****',
                            ],
                            'AppId' => [
                                'title' => '应用id',
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '13027****',
                            ],
                            'AppVersion' => [
                                'title' => '应用版本',
                                'description' => '应用版本ID。',
                                'type' => 'string',
                                'example' => '35067****',
                            ],
                            'BizInfo' => [
                                'description' => '业务信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Biz' => [
                                        'description' => '业务结果信息。',
                                        'type' => 'object',
                                        'example' => 'authToken',
                                    ],
                                    'Endpoints' => [
                                        'description' => '终端节点信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '终端节点名称。',
                                                    'type' => 'string',
                                                    'example' => 'exampleName',
                                                ],
                                                'AccessHost' => [
                                                    'description' => '终端节点IP地址。',
                                                    'type' => 'string',
                                                    'example' => '127.0.X.X',
                                                ],
                                                'AccessPort' => [
                                                    'description' => '终端节点端口。',
                                                    'type' => 'string',
                                                    'example' => '8080',
                                                ],
                                                'Type' => [
                                                    'description' => '终端节点类型。取值为Native。',
                                                    'type' => 'string',
                                                    'example' => 'Native',
                                                ],
                                                'DistrictId' => [
                                                    'description' => '区域ID。取值：'."\n"
                                                        ."\n"
                                                        .'- huadong'."\n"
                                                        ."\n"
                                                        .'- xinan'."\n"
                                                        ."\n"
                                                        .'- huanan'."\n"
                                                        ."\n"
                                                        .'- huabei'."\n"
                                                        ."\n"
                                                        .'- huazhong',
                                                    'type' => 'string',
                                                    'example' => 'huabei',
                                                ],
                                                'Isp' => [
                                                    'description' => '运营商。取值：'."\n"
                                                        ."\n"
                                                        .'- MOBILE：中国移动。'."\n"
                                                        ."\n"
                                                        .'- UNICOM：中国联通。'."\n"
                                                        ."\n"
                                                        .'- TELECOM：中国电信。'."\n"
                                                        ."\n"
                                                        .'- BGP：多线网络。',
                                                    'type' => 'string',
                                                    'example' => 'BGP',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"CustomSessionId\\": \\"1ADE0****\\",\\n  \\"PlatformSessionId\\": \\"100****\\",\\n  \\"AppId\\": \\"13027****\\",\\n  \\"AppVersion\\": \\"35067****\\",\\n  \\"BizInfo\\": {\\n    \\"Biz\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"Endpoints\\": [\\n      {\\n        \\"Name\\": \\"exampleName\\",\\n        \\"AccessHost\\": \\"127.0.X.X\\",\\n        \\"AccessPort\\": \\"8080\\",\\n        \\"Type\\": \\"Native\\",\\n        \\"DistrictId\\": \\"huabei\\",\\n        \\"Isp\\": \\"BGP\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '同步创建应用会话',
            'description' => '- 创建会话成功后，事件类型为`APP_START`。应用启动的结果会通过以下消息通知。'."\n"
                .'><notice>仅限API对接模式，不适用于H5 SDK对接模式。  ></notice>'."\n"
                ."\n"
                .'|名称 | 类型 | 是否必选 |说明|'."\n"
                .'| ------ | ------ | ------ |------ |'."\n"
                .'| success | Boolean | 是 |启动是否成功。<br> 取值：<br>true：启动成功。<br>false：启动失败。|'."\n"
                .'|eventType|String|是|事件类型。|'."\n"
                .'|customSessionId|String|是|自定义会话ID。|'."\n"
                .'|platformSessionId|String|是|平台会话ID。|'."\n"
                .'|customTaskId|String|否|自定义任务ID。|'."\n"
                .'|platformTaskId|String|否|平台任务ID。|'."\n"
                .'|eventDetail|Object[EventDetail]|是|事件详情。|'."\n"
                .'|errorMessage|Object[EventDetail]|否|错误详情。<br>当启动失败时，返回该参数。|'."\n"
                .'|tags|Map<String,String>|否|会话标签。|'."\n"
                ."\n"
                .' EventDetail数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'| ------ | ------ | ------ |------ |'."\n"
                .'|appId|String|是|应用ID。|'."\n"
                .'|appVersion|String|是|应用版本ID。|'."\n"
                .'|appBizConfig|String|否|平台适配时自定义的业务配置数据。|'."\n"
                .'|streamingToken|String|否|串流鉴权信息，存在串流服务时才会携带。|'."\n"
                .'|endpoint|Object[Endpoint]|否|事件详情。<br>当启动成功时，返回该参数。'."\n"
                ."\n"
                .' Endpoint数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|-------|-------|-------|-------|'."\n"
                .'|name|String|是|名称。|'."\n"
                .'|type|String|是|类型。|'."\n"
                .'|accessHost|String|是|终端节点IP地址。|'."\n"
                .'|accessPort|String|是|终端节点端口。|'."\n"
                .'|isp|String|是|<br>运营商标识。<br>取值：<br>MOBILE：中国移动。<br>UNICOM：中国联通。<br>TELECOM：中国电信。<br>BGP：多线网络。|'."\n"
                .'|districtId|String|是|区域ID。|'."\n"
                .'|regionId|String|是|地域ID。|'."\n"
                ."\n"
                .' ErrorMessage数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|------|------|------|------|'."\n"
                .'|code|String|是|错误码。|'."\n"
                .'|msg|String|是|错误详情。|'."\n"
                .'- 含有串流的业务创建会话成功后，事件类型为`APP_STREAMING_INIT`。串流初始化信息通过以下消息通知。'."\n"
                .'><notice>仅限API对接模式，不适用于H5 SDK对接模式。  ></notice>'."\n"
                ."\n"
                .'| 名称 | 类型 | 是否必选 |说明|'."\n"
                .'| ------ | ------ | ------ |------ |'."\n"
                .'| success | Boolean | 是 |串流初始化是否成功。<br> 取值：<br>true：初始化成功。<br>false：初始化失败。|'."\n"
                .'|eventType|String|是|事件类型。|'."\n"
                .'|customSessionId|String|是|自定义会话ID。|'."\n"
                .'|platformSessionId|String|是|平台会话ID。|'."\n"
                .'|customTaskId|String|否|自定义任务ID。|'."\n"
                .'|platformTaskId|String|否|平台任务ID。|'."\n"
                .'|eventDetail|Object[EventDetail]|是|事件详情。|'."\n"
                ."\n"
                .' EventDetail数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'| ------ | ------ | ------ |------ |'."\n"
                .'|appId|String|是|应用ID。|'."\n"
                .'|appVersion|String|是|应用版本ID。|'."\n"
                .'|appBizConfig|String|否|平台适配时自定义的业务配置数据。|'."\n"
                .'|streamingToken|String|否|串流鉴权信息，存在串流服务时才会携带。|'."\n"
                .'|eventDetail|Object[EventDetail]|否|事件详情。<br>当会话启动成功时，返回该参数。|'."\n"
                .'|errorMessage|Object|否|错误详情.<br>当会话启动失败时，返回该参数。|'."\n"
                ."\n"
                .' Endpoint数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|-------|-------|-------|-------|'."\n"
                .'|name|String|是|名称。|'."\n"
                .'|type|String|是|类型。|'."\n"
                .'|accessHost|String|是|终端节点IP地址。|'."\n"
                .'|accessPort|String|是|终端节点端口。|'."\n"
                .'|isp|String|是|<br>运营商标识。<br>取值：<br>MOBILE：中国移动。<br>UNICOM：中国联通。<br>TELECOM：中国电信。<br>BGP：多线网络。|'."\n"
                .'|districtId|String|是|区域ID。|'."\n"
                .'|regionId|String|是|地域ID。|'."\n"
                ."\n"
                .' ErrorMessage数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|------|------|------|------|'."\n"
                .'|code|String|是|错误码。|'."\n"
                .'|msg|String|是|错误详情。|',
        ],
        'CreateAppSessionBatchSync' => [
            'summary' => '批量创建应用会话，平台会按顺序调配资源，启动多个进程。',
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
                    'name' => 'BatchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义批量操作ID。具有唯一性。'."\n"
                            .'> 支持ASCII字符，且不能超过64个字符。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '6d4d****',
                        'maxLength' => 64,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'AppInfos',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '应用启动信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'CustomerSessionId' => [
                                    'description' => '自定义会话ID。'."\n"
                                        .'> 支持ASCII字符，且不能超过64个字符。'."\n"
                                        ."\n",
                                    'type' => 'string',
                                    'required' => true,
                                    'docRequired' => true,
                                    'example' => '1ADE0****',
                                    'maxLength' => 64,
                                    'minLength' => 1,
                                ],
                                'CustomUserId' => [
                                    'description' => '自定义用户ID。用于存档的读取和保存。最大长度不超过64个字符。'."\n"
                                        .'> 当应用类型为`end_game`、`hand_game`时，本参数必填。'."\n"
                                        ."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2YEF0****',
                                ],
                                'AppId' => [
                                    'description' => '应用ID。',
                                    'type' => 'string',
                                    'required' => true,
                                    'docRequired' => true,
                                    'example' => '13027****',
                                    'maxLength' => 64,
                                    'minLength' => 1,
                                ],
                                'AppVersion' => [
                                    'description' => '应用版本ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '35067****',
                                ],
                                'ClientIp' => [
                                    'description' => '业务的客户端IP地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '192.168.XX.XX',
                                ],
                                'SystemInfo' => [
                                    'description' => '系统信息。',
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Key' => [
                                                'description' => '目前支持自定义。取值为utdid，表示设备ID。可以帮助平台分析异常流量的特征和定位问题。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'utdid',
                                            ],
                                            'Value' => [
                                                'description' => 'Key对应的取值。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'OE0usD+AP****',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                                'StartParameters' => [
                                    'description' => '通用参数、业务定制参数。',
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Key' => [
                                                'description' => '目前支持的枚举值。取值为startArgument，表示应用启动参数。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'startArgument',
                                            ],
                                            'Value' => [
                                                'description' => 'Key对应的取值。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'exampleValue',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                                'Tags' => [
                                    'description' => '自定义标签。',
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Key' => [
                                                'description' => '标签键。最长64个字符。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'exampleTag',
                                            ],
                                            'Value' => [
                                                'description' => 'Key对应的取值。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'exampleValue',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                                'ProjectId' => [
                                    'description' => '项目ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'd9a8****',
                                ],
                                'DistrictId' => [
                                    'description' => '区域ID。取值：'."\n"
                                        ."\n"
                                        .'- huadong'."\n"
                                        ."\n"
                                        .'- xinan'."\n"
                                        ."\n"
                                        .'- huanan'."\n"
                                        ."\n"
                                        .'- huabei'."\n"
                                        ."\n"
                                        .'- huazhong',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'huadong',
                                ],
                                'MatchRules' => [
                                    'description' => '资源匹配的规则信息，支持多个； 规则越多找到合适资源的耗时越长。',
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Type' => [
                                                'description' => '规则类型。取值：'."\n"
                                                    .'- in：存在指定 Key 和 Value 的资源会被命中。'."\n"
                                                    .'- notIn： 不存在指定 Key 和 Value 的资源会被命中。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'in',
                                            ],
                                            'Key' => [
                                                'description' => '资源提供的标签名称。取值：'."\n"
                                                    .'- component： 组件版本；指定组件版本时，只会用带有指定组件版本的资源启动会话。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'component',
                                            ],
                                            'Values' => [
                                                'description' => '需要匹配的标签值。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '约定的标签值。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'exampleTag',
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                                'AdapterFileId' => [
                                    'description' => '适配文件ID。此功能灰度开放，如未约定使用请勿传入。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '501716211209548966XXXX',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'docRequired' => true,
                        'maxItems' => 50,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'BatchId' => [
                                'title' => '自定义会话id',
                                'description' => '批量操作ID。',
                                'type' => 'string',
                                'example' => '6d4d****',
                            ],
                            'ResultList' => [
                                'description' => '结果列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CustomSessionId' => [
                                            'title' => '自定义会话id',
                                            'description' => '自定义会话ID。',
                                            'type' => 'string',
                                            'example' => '1ADE0****',
                                        ],
                                        'PlatformSessionId' => [
                                            'title' => '平台会话id',
                                            'description' => '平台会话ID。',
                                            'type' => 'string',
                                            'example' => '100****',
                                        ],
                                        'AppId' => [
                                            'title' => '应用id',
                                            'description' => '应用ID。',
                                            'type' => 'string',
                                            'example' => '13027****',
                                        ],
                                        'AppVersion' => [
                                            'title' => '应用版本',
                                            'description' => '应用版本ID。',
                                            'type' => 'string',
                                            'example' => '35067****',
                                        ],
                                        'BizInfo' => [
                                            'description' => '业务信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Biz' => [
                                                    'description' => '业务结果信息。',
                                                    'type' => 'object',
                                                    'example' => 'authToken',
                                                ],
                                                'Endpoints' => [
                                                    'description' => '终端节点信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Name' => [
                                                                'description' => '终端节点名称。',
                                                                'type' => 'string',
                                                                'example' => 'exampleName',
                                                            ],
                                                            'AccessHost' => [
                                                                'description' => '终端节点IP地址。',
                                                                'type' => 'string',
                                                                'example' => '127.0.X.X',
                                                            ],
                                                            'AccessPort' => [
                                                                'description' => '终端节点端口。',
                                                                'type' => 'string',
                                                                'example' => '8080',
                                                            ],
                                                            'Type' => [
                                                                'description' => '终端节点类型。取值为Native。',
                                                                'type' => 'string',
                                                                'example' => 'Native',
                                                            ],
                                                            'DistrictId' => [
                                                                'description' => '区域ID。取值：'."\n"
                                                                    ."\n"
                                                                    .'- huadong'."\n"
                                                                    ."\n"
                                                                    .'- xinan'."\n"
                                                                    ."\n"
                                                                    .'- huanan'."\n"
                                                                    ."\n"
                                                                    .'- huabei'."\n"
                                                                    ."\n"
                                                                    .'- huazhong',
                                                                'type' => 'string',
                                                                'example' => 'huadong',
                                                            ],
                                                            'Isp' => [
                                                                'description' => '运营商。取值：'."\n"
                                                                    ."\n"
                                                                    .'- MOBILE：中国移动。'."\n"
                                                                    ."\n"
                                                                    .'- UNICOM：中国联通。'."\n"
                                                                    ."\n"
                                                                    .'- TELECOM：中国电信。'."\n"
                                                                    ."\n"
                                                                    .'- BGP：多线网络。',
                                                                'type' => 'string',
                                                                'example' => 'bgp',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'FailedList' => [
                                'description' => '失败列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CustomSessionId' => [
                                            'description' => '自定义会话ID。',
                                            'type' => 'string',
                                            'example' => '1ADE0****',
                                        ],
                                        'AppId' => [
                                            'description' => '应用ID。',
                                            'type' => 'string',
                                            'example' => '100****',
                                        ],
                                        'FailedInfo' => [
                                            'description' => '失败信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ErrorMessage' => [
                                                    'description' => '错误码。',
                                                    'type' => 'string',
                                                    'example' => '400',
                                                ],
                                                'ErrorCode' => [
                                                    'description' => '错误描述。',
                                                    'type' => 'string',
                                                    'example' => 'App type not support.',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"BatchId\\": \\"6d4d****\\",\\n  \\"ResultList\\": [\\n    {\\n      \\"CustomSessionId\\": \\"1ADE0****\\",\\n      \\"PlatformSessionId\\": \\"100****\\",\\n      \\"AppId\\": \\"13027****\\",\\n      \\"AppVersion\\": \\"35067****\\",\\n      \\"BizInfo\\": {\\n        \\"Biz\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"Endpoints\\": [\\n          {\\n            \\"Name\\": \\"exampleName\\",\\n            \\"AccessHost\\": \\"127.0.X.X\\",\\n            \\"AccessPort\\": \\"8080\\",\\n            \\"Type\\": \\"Native\\",\\n            \\"DistrictId\\": \\"huadong\\",\\n            \\"Isp\\": \\"bgp\\"\\n          }\\n        ]\\n      }\\n    }\\n  ],\\n  \\"FailedList\\": [\\n    {\\n      \\"CustomSessionId\\": \\"1ADE0****\\",\\n      \\"AppId\\": \\"100****\\",\\n      \\"FailedInfo\\": {\\n        \\"ErrorMessage\\": \\"400\\",\\n        \\"ErrorCode\\": \\"App type not support.\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量同步创建应用会话',
            'description' => '当批量创建会话的个数不同时，时效性不同。最多一次批量创建20个。',
        ],
        'StopAppSessionBatch' => [
            'summary' => '批量停止应用会话。后续停止结果会通过HTTP接口返回。',
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
                    'name' => 'BatchId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义用户id',
                        'description' => '批量操作ID。'."\n"
                            .'> 支持ASCII字符，且不能超过64个字符。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => '6d4d****',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义会话id',
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd9a8****',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '13027****',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用版本ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '35067****',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '自定义标签。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。最长64个字符。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'exampleTag',
                                ],
                                'Value' => [
                                    'description' => 'Key对应的取值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'exampleValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StopParam',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '停止容器参数。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '目前支持的枚举值。取值为reason ，表示停止原因。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'reason',
                                ],
                                'Value' => [
                                    'description' => 'Key对应的取值。',
                                    'type' => 'any',
                                    'required' => false,
                                    'example' => 'exampleValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
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
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'BatchId' => [
                                'title' => '自定义会话id',
                                'description' => '批量操作ID。',
                                'type' => 'string',
                                'example' => '6d4d****',
                            ],
                            'ProjectId' => [
                                'title' => '平台会话id',
                                'description' => '项目ID。',
                                'type' => 'string',
                                'example' => 'd9a8****',
                            ],
                            'AppId' => [
                                'title' => '应用id',
                                'description' => '应用ID。',
                                'type' => 'string',
                                'example' => '13027****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"BatchId\\": \\"6d4d****\\",\\n  \\"ProjectId\\": \\"d9a8****\\",\\n  \\"AppId\\": \\"13027****\\"\\n}","type":"json"}]',
            'title' => '批量停止应用会话',
            'description' => '发起批量停止后，批量停止的进度会通过HTTP接口返回，直到在线数量为0或超时。'."\n"
                .'> HTTP接口是接收会话启动、停止、串流等信息的一种方式。目前消息保存1天，重试策略为退避重试，最多重试176次。'."\n"
                ."\n"
                .'事件类型为**BATCH_STOP**。'."\n"
                .'><notice>不区分对接模式，仅推送HTTP接口。></notice> '."\n"
                ."\n"
                .'| 名称 | 类型 | 是否必选 |说明|'."\n"
                .'| ------ | ------ | ------ |------ |'."\n"
                .'|eventType|String|是|事件类型。|'."\n"
                .'|eventDetail|Object[EventDetail]|是|事件详情，<br>当任务成功时，返回该参数。|'."\n"
                ."\n"
                .'EventDetail数据结构如下所示。'."\n"
                .'|名称|类型|是否必选|说明|'."\n"
                .'|------|------|------|------|'."\n"
                .'|appId|String|是|应用ID。|'."\n"
                .'|appVersion|String|是|应用版本ID。|'."\n"
                .'|batchId|String|是|批量ID。|'."\n"
                .'|projectId|String|是|项目ID。|'."\n"
                .'|playersCount|Integer|是|剩余在线数量。|'."\n"
                .'|timestamp|String|是|统计时间戳。|',
        ],
        'GetAppCcu' => [
            'summary' => '查询运行中会话的详细信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '平台会话id',
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'd9a8****',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '自定义会话id',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '13027****',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用版本ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '35067****',
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
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986',
                            ],
                            'Timestamp' => [
                                'title' => '自定义会话id',
                                'description' => '时间戳。',
                                'type' => 'string',
                                'example' => '1665560460990',
                            ],
                            'DetailList' => [
                                'description' => '当前会话统计信息详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ProjectId' => [
                                            'title' => 'key数值，枚举有多个数值，例如： RegionId 大区id ServerIp 服务端 IP ServerPort 端口',
                                            'description' => '项目ID。',
                                            'type' => 'string',
                                            'example' => 'd9a8****',
                                        ],
                                        'AppId' => [
                                            'description' => '应用ID。',
                                            'type' => 'string',
                                            'example' => '13027****',
                                        ],
                                        'DistrictId' => [
                                            'description' => '区域ID。取值：'."\n"
                                                ."\n"
                                                .'- huadong'."\n"
                                                ."\n"
                                                .'- xinan'."\n"
                                                ."\n"
                                                .'- huanan'."\n"
                                                ."\n"
                                                .'- huabei'."\n"
                                                ."\n"
                                                .'- huazhong',
                                            'type' => 'string',
                                            'example' => 'huadong',
                                        ],
                                        'Ccu' => [
                                            'description' => '当前未结束的会话总数。',
                                            'type' => 'string',
                                            'example' => '100',
                                        ],
                                        'AppVersion' => [
                                            'description' => '应用版本ID。',
                                            'type' => 'string',
                                            'example' => '35067****',
                                        ],
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\",\\n  \\"Timestamp\\": \\"1665560460990\\",\\n  \\"DetailList\\": [\\n    {\\n      \\"ProjectId\\": \\"d9a8****\\",\\n      \\"AppId\\": \\"13027****\\",\\n      \\"DistrictId\\": \\"huadong\\",\\n      \\"Ccu\\": \\"100\\",\\n      \\"AppVersion\\": \\"35067****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询运行中会话统计信息',
        ],
        'BatchCheckSession' => [
            'summary' => '此接口用于检查疑似异常会话。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'Records',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '疑似异常会话记录。'."\n"
                            .'> 最多记录50个。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Type' => [
                                    'description' => '异常类型。'."\n"
                                        ."\n"
                                        .'取值：'."\n"
                                        ."\n"
                                        .'- L1：严重。'."\n"
                                        ."\n"
                                        .'- L2：中级。'."\n"
                                        ."\n"
                                        .'- L3：一般。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'L1',
                                    'enum' => [
                                        'L1',
                                        'L2',
                                        'L3',
                                    ],
                                ],
                                'CustomSessionId' => [
                                    'description' => '自定义会话ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '100XXXX',
                                ],
                                'PlatformSessionId' => [
                                    'description' => '平台会话ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1ADE0XXXX',
                                ],
                                'ReferenceInfo' => [
                                    'description' => '疑似异常的评定参考信息。'."\n"
                                        .'> 仅用于记录和后续排查分析。',
                                    'type' => 'object',
                                    'required' => false,
                                ],
                            ],
                            'required' => true,
                        ],
                        'required' => true,
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
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '46329898-489C-4E63-9BA1-C1DA5C5D0986'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46329898-489C-4E63-9BA1-C1DA5C5D0986\\\\n\\"\\n}","type":"json"}]',
            'title' => '批量检查疑似异常会话',
            'description' => '您可以提交疑似异常的会话和异常评定的参考数据到平台，平台异步进行相关资源的检查。'."\n"
                ."\n"
                .'当检测到资源异常时，平台会平滑替换资源，不影响现有会话。'."\n"
                ."\n"
                .'替换结果不会另行通知。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cgcs.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
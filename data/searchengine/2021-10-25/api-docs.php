<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'searchengine',
        'version' => '2021-10-25',
    ],
    'directories' => [
        [
            'id' => 169788,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'ChangeResourceGroup',
                'TagResources',
                'UntagResources',
                'ListTagResources',
                'CreatePublicUrl',
                'DeletePublicUrl',
                'ModifyPublicUrlIpList',
                'CreateInstance',
                'DeleteInstance',
                'UpdateInstance',
                'ModifyPassword',
                'ListInstances',
                'GetInstance',
                'ListInstanceSpecs',
            ],
        ],
        [
            'id' => 169802,
            'title' => '配置中心',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 169803,
                    'title' => '在线表配置',
                    'type' => 'directory',
                    'children' => [
                        'GetIndexOnlineStrategy',
                        'ModifyIndexOnlineStrategy',
                        'ModifyOnlineConfig',
                        'ListOnlineConfigs',
                    ],
                ],
                [
                    'id' => 169783,
                    'title' => '索引结构',
                    'type' => 'directory',
                    'children' => [
                        'ModifyIndex',
                        'StartIndex',
                        'StopIndex',
                        'CreateIndex',
                        'BuildIndex',
                        'DeleteIndexVersion',
                        'DeleteIndex',
                        'ModifyIndexVersion',
                        'ModifyFile',
                        'PublishIndexVersion',
                        'ModifyIndexPartition',
                        'GetIndex',
                        'GetIndexVersion',
                        'GetFile',
                        'ListIndexes',
                        'RecoverIndex',
                    ],
                ],
                [
                    'id' => 169816,
                    'title' => '高级配置',
                    'type' => 'directory',
                    'children' => [
                        'CreateConfigDir',
                        'CreateConfigFile',
                        'DeleteConfigDir',
                        'DeleteConfigFile',
                        'ModifyAdvanceConfig',
                        'DeleteAdvanceConfig',
                        'ModifyAdvanceConfigFile',
                        'PublishAdvanceConfig',
                        'GetAdvanceConfig',
                        'GetAdvanceConfigFile',
                        'ListAdvanceConfigDir',
                        'ListAdvanceConfigs',
                    ],
                ],
                [
                    'id' => 169824,
                    'title' => '数据源配置',
                    'type' => 'directory',
                    'children' => [
                        'ListSchemas',
                        'ModifyDataSourceDeploy',
                        'CreateDataSource',
                        'DeleteDataSource',
                        'ModifyDataSource',
                        'GetDataSource',
                        'ListDataSources',
                        'ListDataSourceSchemas',
                        'ListDateSourceGenerations',
                        'GetDataSourceDeploy',
                    ],
                ],
            ],
        ],
        [
            'id' => 169793,
            'title' => '运维中心',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 169794,
                    'title' => '运维管理',
                    'type' => 'directory',
                    'children' => [
                        'ListIndexRecoverRecords',
                        'ListPausePolicys',
                        'ModifyPausePolicy',
                        'CreateCluster',
                        'RemoveCluster',
                        'ModifyClusterDesc',
                        'ModifyClusterOfflineConfig',
                        'ModifyClusterOnlineConfig',
                        'GetCluster',
                        'GetClusterRunTimeInfo',
                        'ListClusterNames',
                        'ListClusters',
                    ],
                ],
                [
                    'id' => 169796,
                    'title' => '部署管理',
                    'type' => 'directory',
                    'children' => [
                        'ModifyNodeConfig',
                        'GetDeployGraph',
                        'GetNodeConfig',
                    ],
                ],
                [
                    'id' => 169800,
                    'title' => '变更历史',
                    'type' => 'directory',
                    'children' => [
                        'ListTasks',
                        'ListClusterTasks',
                        'ListDataSourceTasks',
                        'StopTask',
                        'ForceSwitch',
                    ],
                ],
            ],
        ],
        [
            'id' => 191973,
            'title' => '表管理',
            'type' => 'directory',
            'children' => [
                'CreateTable',
                'ModifyTable',
                'GetTable',
                'ListTables',
                'DeleteTable',
                'Reindex',
                'ListTableGenerations',
                'GetTableGeneration',
            ],
        ],
        [
            'id' => 180946,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ListPostQueryResult',
                'ListRestQueryResult',
                'ListVectorQueryResult',
                'PushDocuments',
                'DescribeRegions',
                'ListQueryResult',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'ErrorResponse' => [
                'title' => 'A short description of struct',
                'description' => '错误返回响应体',
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'title' => 'requestId',
                        'type' => 'string',
                        'example' => '90D6B8F5-FE97-4509-9AAB-367836C51818',
                    ],
                    'code' => [
                        'title' => 'code',
                        'type' => 'string',
                        'example' => 'InternalServerError',
                    ],
                    'message' => [
                        'title' => 'message',
                        'type' => 'string',
                        'example' => 'internal server error',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ChangeResourceGroup' => [
            'summary' => '修改资源组。',
            'path' => '/openapi/ha3/instances/{instanceId}/actions/change-resource-group',
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
            'consumes' => [],
            'produces' => [],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id。',
                        'example' => 'ha-cn-pl32rf0****',
                        'required' => false,
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'properties' => [
                            'newResourceGroupId' => [
                                'description' => '新资源组id',
                                'example' => 'rg-acfmxr3gs*****',
                                'required' => false,
                                'title' => '新资源组id',
                                'type' => 'string',
                            ],
                            'resourceType' => [
                                'description' => '资源类型',
                                'example' => 'instance',
                                'required' => false,
                                'title' => '资源类型',
                                'type' => 'string',
                            ],
                        ],
                        'required' => false,
                        'type' => 'object',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'properties' => [
                            'requestId' => [
                                'description' => 'Id of the request',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                        ],
                        'title' => 'Schema of Response',
                        'type' => 'object',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\"\\n}","type":"json"}]',
            'title' => '修改资源组',
        ],
        'TagResources' => [
            'summary' => '打标签接口',
            'path' => '/openapi/ha3/resource-tags',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '166280',
                'abilityTreeNodes' => [
                    'FEATUREopensearchJB31XH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'properties' => [
                            'resourceType' => [
                                'description' => '资源类型',
                                'example' => 'instance',
                                'required' => true,
                                'title' => '资源类型',
                                'type' => 'string',
                            ],
                            'resourceId' => [
                                'description' => '资源ID,最多 50个子项',
                                'items' => [
                                    'description' => '资源ID',
                                    'example' => 'es-cn-i7m2u6o2*******',
                                    'required' => false,
                                    'type' => 'string',
                                ],
                                'required' => true,
                                'title' => '资源ID,最多 50个子项',
                                'type' => 'array',
                            ],
                            'tag' => [
                                'description' => '对应新增标签列表，最多包含20个子项',
                                'items' => [
                                    'description' => '标签',
                                    'properties' => [
                                        'key' => [
                                            'description' => '标签键',
                                            'example' => 'opensearch',
                                            'required' => false,
                                            'title' => '标签键',
                                            'type' => 'string',
                                        ],
                                        'value' => [
                                            'description' => '标签值',
                                            'example' => 'opensearch',
                                            'required' => false,
                                            'title' => '标签值',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'required' => false,
                                    'type' => 'object',
                                ],
                                'required' => true,
                                'title' => '对应新增标签列表，最多包含20个子项',
                                'type' => 'array',
                            ],
                        ],
                        'required' => false,
                        'type' => 'object',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                                'title' => '请求id',
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\"\\n}","type":"json"}]',
            'title' => '批量 增加/更新 标签',
        ],
        'UntagResources' => [
            'summary' => '删标签接口',
            'path' => '/openapi/ha3/resource-tags',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '166296',
                'abilityTreeNodes' => [
                    'FEATUREopensearchJB31XH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型',
                        'example' => 'instance',
                        'required' => true,
                        'title' => '资源类型',
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'resourceId',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源ID,最多 50个子项',
                        'items' => [
                            'description' => '资源ID',
                            'example' => 'es-cn-i7m2u6o2*******',
                            'required' => false,
                            'type' => 'string',
                        ],
                        'required' => true,
                        'title' => '资源ID,最多 50个子项',
                        'type' => 'array',
                    ],
                ],
                [
                    'name' => 'tagKey',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '对应标签键列表，最多包含20个子项',
                        'items' => [
                            'description' => '标签键',
                            'example' => 'opensearch',
                            'required' => false,
                            'type' => 'string',
                        ],
                        'required' => false,
                        'title' => '对应标签键列表，最多包含20个子项',
                        'type' => 'array',
                    ],
                ],
                [
                    'name' => 'all',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否全部删除，只针对tags为空时有效。取值范围： true  false True False   默认是 false',
                        'example' => 'true',
                        'required' => false,
                        'title' => '是否全部删除，只针对tags为空时有效。取值范围： true  false True False   默认是 false',
                        'type' => 'boolean',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'tequestId' => [
                                'description' => '请求id',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886'."\n",
                                'type' => 'string',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"tequestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\\\n\\"\\n}","type":"json"}]',
            'title' => '批量删除标签',
        ],
        'ListTagResources' => [
            'summary' => '查标签接口',
            'path' => '/openapi/ha3/resource-tags',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '166297',
                'abilityTreeNodes' => [
                    'FEATUREopensearch0AT3OG',
                    'FEATUREopensearchJB31XH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型',
                        'example' => 'instance',
                        'required' => true,
                        'title' => '资源类型',
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'resourceId',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源ID,最多 50个子项',
                        'items' => [
                            'description' => '资源ID',
                            'example' => 'es-cn-i7m2u6o2*******'."\n",
                            'required' => false,
                            'type' => 'string',
                        ],
                        'required' => false,
                        'title' => '资源ID,最多 50个子项',
                        'type' => 'array',
                    ],
                ],
                [
                    'name' => 'tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '对应新增标签列表，最多包含20个子项',
                        'items' => [
                            'description' => '标签',
                            'properties' => [
                                'key' => [
                                    'description' => '标签键',
                                    'example' => 'opensearch',
                                    'required' => false,
                                    'title' => '标签键',
                                    'type' => 'string',
                                ],
                                'value' => [
                                    'description' => '标签值',
                                    'example' => 'opensearch',
                                    'required' => false,
                                    'title' => '标签值',
                                    'type' => 'string',
                                ],
                            ],
                            'required' => false,
                            'type' => 'object',
                        ],
                        'required' => false,
                        'title' => '对应新增标签列表，最多包含20个子项',
                        'type' => 'array',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始Token',
                        'example' => '600********33',
                        'required' => false,
                        'title' => '下一个查询开始Token',
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                                'title' => '请求id',
                                'type' => 'string',
                            ],
                            'nextToken' => [
                                'description' => '下一个查询开始Token',
                                'example' => 'b56*******de4a7eca',
                                'title' => '下一个查询开始Token',
                                'type' => 'string',
                            ],
                            'tagResources' => [
                                'description' => '资源列表',
                                'items' => [
                                    'description' => '绑定了标签的资源。',
                                    'properties' => [
                                        'tagKey' => [
                                            'description' => '标签键',
                                            'example' => 'opensearch',
                                            'title' => '标签键',
                                            'type' => 'string',
                                        ],
                                        'tagValue' => [
                                            'description' => '标签值',
                                            'example' => 'opensearch',
                                            'title' => '标签值',
                                            'type' => 'string',
                                        ],
                                        'resourceId' => [
                                            'description' => '资源ID',
                                            'example' => 'rmq-cn-jeo3mn55j01',
                                            'title' => '资源ID',
                                            'type' => 'string',
                                        ],
                                        'resourceType' => [
                                            'description' => '资源类型',
                                            'example' => 'instance',
                                            'title' => '资源类型',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'type' => 'object',
                                ],
                                'title' => '资源列表',
                                'type' => 'array',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"nextToken\\": \\"b56*******de4a7eca\\",\\n  \\"tagResources\\": [\\n    {\\n      \\"tagKey\\": \\"opensearch\\",\\n      \\"tagValue\\": \\"opensearch\\",\\n      \\"resourceId\\": \\"rmq-cn-jeo3mn55j01\\",\\n      \\"resourceType\\": \\"instance\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询资源标签关系列表',
        ],
        'CreatePublicUrl' => [
            'summary' => '开通公网域名。',
            'path' => '/openapi/ha3/instances/{instanceId}/public-url',
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
                'abilityTreeCode' => '171289',
                'abilityTreeNodes' => [
                    'FEATUREopensearch0AT3OG',
                    'FEATUREopensearchJB31XH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '开通公网域名',
        ],
        'DeletePublicUrl' => [
            'summary' => '删除公网域名。',
            'path' => '/openapi/ha3/instances/{instanceId}/public-url',
            'methods' => [
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
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '171290',
                'abilityTreeNodes' => [
                    'FEATUREopensearch0AT3OG',
                    'FEATUREopensearchJB31XH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'F43E8AB4-419C-5F4C-90D6-615590DFAA3C',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F43E8AB4-419C-5F4C-90D6-615590DFAA3C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '删除公网域名',
        ],
        'ModifyPublicUrlIpList' => [
            'summary' => '修改公网域名访问白名单',
            'path' => '/openapi/ha3/instances/{instanceId}/public-url-ip-list',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '171291',
                'abilityTreeNodes' => [
                    'FEATUREopensearch0AT3OG',
                    'FEATUREopensearchJB31XH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'body',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => '47.100.XX.XX,140.205.XX.XX',
                            'description' => '白名单，逗号分隔',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改公网域名白名单',
        ],
        'CreateInstance' => [
            'summary' => '创建问天引擎实例。',
            'path' => '/openapi/ha3/instances',
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
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求结构。',
                        'type' => 'object',
                        'properties' => [
                            'chargeType' => [
                                'description' => '实例的付费方式。取值范围： PREPAY：预付费，包年包月。选择该类付费方式时，您必须确认自己的账号支持余额支付/信用支付，否则将返回 InvalidPayMethod 的错误提示，并且需要指定paymentInfo参数。POSTPAY：按量付费（当前暂不支持）。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PREPAY',
                            ],
                            'components' => [
                                'description' => '实例相关的规格信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例相关的规格信息列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'code' => [
                                            'description' => '规格code，和售卖参数保持一致',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'searcherdocsize',
                                        ],
                                        'value' => [
                                            'description' => '控件填写的数据。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '200',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'order' => [
                                'description' => '付费信息。',
                                'type' => 'object',
                                'properties' => [
                                    'autoRenew' => [
                                        'description' => '是否自动续费，包含：是（true）和否（false）',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'duration' => [
                                        'description' => '付费周期，包含1，2，3，4，5，6，7，8，9，10，12',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                        'example' => '29',
                                    ],
                                    'pricingCycle' => [
                                        'description' => '周期单位，包含：月（Month），年（Year）等',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'Month',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D39EE0F1-D7EF-5F46-B781-6BF4185308B0',
                            ],
                            'result' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'instanceId' => [
                                        'description' => '实例id',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D39EE0F1-D7EF-5F46-B781-6BF4185308B0\\",\\n  \\"result\\": {\\n    \\"instanceId\\": \\"ha-cn-pl32rf0****\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建实例',
            'description' => '### 方法'."\n"
                .'`POST`'."\n"
                .'### URI'."\n"
                .'`/api/instances?dryRun=false`',
            'responseParamsDescription' => '### 返回示例'."\n"
                .'**正常返回示例**'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818",'."\n"
                .'  "result": {'."\n"
                .'      "instanceId": "deeprec-cn-xxxxxx1"'."\n"
                .'    }'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'**异常返回示例**'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818",'."\n"
                .'  "code": "InternalServerError",'."\n"
                .'  "message":"internal server error"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'DeleteInstance' => [
            'summary' => '删除指定实例。',
            'path' => '/openapi/ha3/instances/{instanceId}',
            'methods' => [
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例 ID。',
                        'description' => '实例 ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '当前请求的RequestID',
                                'type' => 'string',
                                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
                            ],
                            'result' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'code' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '删除实例',
            'description' => '### 方法'."\n"
                .'`DELETE`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}`',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'**修改名称**'."\n"
                ."\n"
                .'`DELETE /openapi/ha3/instances/ha3-cn-xxxxxx`',
            'responseParamsDescription' => '### 返回示例'."\n"
                .'**正常返回示例**'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "result": {  },'."\n"
                .'  "requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'**异常返回示例**'."\n"
                ."\n"
                .'```'."\n"
                ."\n"
                .'{'."\n"
                .'  "requestId": "BD1EA715-DF6F-06C2-004C-C1FA0D3A9820",'."\n"
                .'  "httpCode": 404,'."\n"
                .'  "code": "App.NotFound",'."\n"
                .'  "message": "App not found"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'UpdateInstance' => [
            'summary' => '修改指定实例配置。',
            'path' => '/openapi/ha3/instances/{instanceId}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求结构。',
                        'type' => 'object',
                        'properties' => [
                            'components' => [
                                'title' => '配额信息，与description不能同时更新。',
                                'description' => '实例相关的规格信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例相关的规格信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'code' => [
                                            'description' => '规格code，和售卖参数保持一致',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'searcherdocsizesum',
                                        ],
                                        'value' => [
                                            'description' => '值',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '200',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'orderType' => [
                                'title' => '订单类型，与description不能同时传递。',
                                'description' => 'UPGRAGE： 提升实例规格'."\n"
                                    .'DOWNGRADE: 降低实例规格',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'UPGRAGE',
                            ],
                            'description' => [
                                'title' => '更新实例描述信息，与components及orderType字段不能同时更新。',
                                'description' => '实例描述信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '实例描述',
                            ],
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'description' => [
                                        'title' => '实例描述',
                                        'description' => '实例描述',
                                        'type' => 'string',
                                        'example' => '测试实例',
                                    ],
                                    'resourceGroupId' => [
                                        'title' => '资源组ID',
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****',
                                    ],
                                    'expiredTime' => [
                                        'title' => '到期时间',
                                        'description' => '到期时间',
                                        'type' => 'string',
                                        'example' => '2019-01-06T16:00:00.0',
                                    ],
                                    'commodityCode' => [
                                        'title' => '商品code',
                                        'description' => '商品code',
                                        'type' => 'string',
                                        'example' => 'opensearch_ha3post_public_cn',
                                    ],
                                    'status' => [
                                        'title' => '状态',
                                        'description' => '状态',
                                        'type' => 'string',
                                        'example' => 'READY',
                                    ],
                                    'instanceId' => [
                                        'title' => '资源一级ID',
                                        'description' => '资源一级ID',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****',
                                    ],
                                    'createTime' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2018-12-06T11:17:49.0',
                                    ],
                                    'lockMode' => [
                                        'title' => '锁定状态',
                                        'description' => '锁定状态',
                                        'type' => 'string',
                                        'example' => 'Unlock',
                                    ],
                                    'chargeType' => [
                                        'title' => '付费类型',
                                        'description' => '付费类型',
                                        'type' => 'string',
                                        'example' => 'POSTPAY',
                                    ],
                                    'updateTime' => [
                                        'title' => '更新时间',
                                        'description' => '更新时间',
                                        'type' => 'string',
                                        'example' => '2018-12-06T11:17:49.0',
                                    ],
                                    'inDebt' => [
                                        'title' => '是否欠费',
                                        'description' => '是否欠费',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '90D6B8F5-FE97-4509-9AAB-367836C51818',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"description\\": \\"测试实例\\",\\n    \\"resourceGroupId\\": \\"ha-cn-pl32rf0****\\",\\n    \\"expiredTime\\": \\"2019-01-06T16:00:00.0\\",\\n    \\"commodityCode\\": \\"opensearch_ha3post_public_cn\\",\\n    \\"status\\": \\"READY\\",\\n    \\"instanceId\\": \\"ha-cn-pl32rf0****\\",\\n    \\"createTime\\": \\"2018-12-06T11:17:49.0\\",\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"updateTime\\": \\"2018-12-06T11:17:49.0\\",\\n    \\"inDebt\\": false\\n  },\\n  \\"requestId\\": \\"90D6B8F5-FE97-4509-9AAB-367836C51818\\"\\n}","type":"json"}]',
            'title' => '修改指定实例配置',
            'description' => '### 方法'."\n"
                .'`PUT`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}`',
            'extraInfo' => '### 示例'."\n"
                .'**请求示例**'."\n"
                ."\n"
                .'`PUT /openapi/ha3/instances/ha-cn-xxxxxx`'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "description": "the new description"'."\n"
                .'}'."\n"
                .'或'."\n"
                .'{'."\n"
                .'  "resourceGroupId": "the new resourceGroupId"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'**返回示例**'."\n"
                ."\n"
                .'正确返回'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "result": {'."\n"
                .'    "instanceId": "ha-cn-pl32rf0****",'."\n"
                .'    "description": "测试实例",'."\n"
                .'    "status": "Running",'."\n"
                .'    "chargeType": "POSTPAY",'."\n"
                .'    "commodityCode": "opensearch_ha3post_public_cn",'."\n"
                .'    "createTime": "2018-12-06T11:17:49.0",'."\n"
                .'    "updateTime": "2018-12-06T11:17:49.0",'."\n"
                .'    "expiredTime": "2019-01-06T16:00:00.0",'."\n"
                .'    "resourceGroupId": "rg-abcdefg",'."\n"
                .'    "lockMode": "Unlock",'."\n"
                .'    "inDebt": false,'."\n"
                .'    "spec": {'."\n"
                .'      "password": "passwd",'."\n"
                .'      "searchResource": {'."\n"
                .'        "disk": 50,'."\n"
                .'        "mem": 8,'."\n"
                .'        "cpu": 2,'."\n"
                .'        "nodeCount": 2'."\n"
                .'      },'."\n"
                .'      "instanceName": "ha-cn-pl32rf0****",'."\n"
                .'      "vSwitchId": "vswitch_id_xxx",'."\n"
                .'      "vpcId": "vpc_id_xxx",'."\n"
                .'      "qrsResource": {'."\n"
                .'        "disk": 50,'."\n"
                .'        "mem": 8,'."\n"
                .'        "cpu": 2,'."\n"
                .'        "nodeCount": 2'."\n"
                .'      },'."\n"
                .'      "region": "cn-hangzhou",'."\n"
                .'      "userName": "user"'."\n"
                .'    },'."\n"
                .'    "status": {'."\n"
                .'      "phase": "PENDING",'."\n"
                .'      "instancePhase": "INIT",'."\n"
                .'      "createSuccess": false'."\n"
                .'    }'."\n"
                .'  },'."\n"
                .'  "requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ModifyPassword' => [
            'summary' => '修改实例的密码。',
            'path' => '/openapi/ha3/instances/{instanceId}/password',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '修改密码请求体。',
                        'type' => 'object',
                        'properties' => [
                            'username' => [
                                'description' => '用户名'."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => 'testUserName',
                            ],
                            'password' => [
                                'description' => '密码',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'testPassword',
                            ],
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '407BFD91-DE7D-50BA-8F88-CDE52A3B5E46',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => '结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"407BFD91-DE7D-50BA-8F88-CDE52A3B5E46\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改实例的密码',
            'description' => '### 方法'."\n"
                .'`PUT`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/password`'."\n",
            'requestParamsDescription' => '### 请求示例'."\n"
                .'`PUT /openapi/ha3/instances/{instanceId}/password`'."\n"
                ."\n"
                .'### 请求体示例'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "userName":"my_user_name",'."\n"
                .'	"password":"newPassword" '."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '### 返回参数说明'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ListInstances' => [
            'summary' => '获取实例列表。',
            'path' => '/openapi/ha3/instances',
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
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定页码，默认为：1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定每页展示条数，默认为10，限制:[1-50]',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通过实例描述称进行过滤，支持模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '问天引擎实例',
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzgpiswzbksdi',
                    ],
                ],
                [
                    'name' => 'edition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例类型，vector(向量索引版)，engine(召回引擎版)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vector',
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例标签。',
                            'type' => 'object',
                            'properties' => [
                                'key' => [
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'opensearch',
                                ],
                                'value' => [
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'opensearch',
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
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'InstanceItemType',
                                    'description' => 'InstanceItemType',
                                    'type' => 'object',
                                    'properties' => [
                                        'description' => [
                                            'title' => '实例描述',
                                            'description' => '实例描述',
                                            'type' => 'string',
                                            'example' => '应急测试',
                                        ],
                                        'resourceGroupId' => [
                                            'title' => '资源组ID',
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****',
                                        ],
                                        'expiredTime' => [
                                            'title' => '到期时间',
                                            'description' => '到期时间',
                                            'type' => 'string',
                                            'example' => '1634885083',
                                        ],
                                        'commodityCode' => [
                                            'title' => '商品code',
                                            'description' => '商品code',
                                            'type' => 'string',
                                            'example' => 'opensearch_ha3post_public_cn',
                                        ],
                                        'status' => [
                                            'title' => '状态',
                                            'description' => '状态',
                                            'type' => 'string',
                                            'example' => 'READY',
                                        ],
                                        'instanceId' => [
                                            'title' => '资源一级ID',
                                            'description' => '资源一级ID',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****',
                                        ],
                                        'createTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2022-06-04T02:03:21Z',
                                        ],
                                        'lockMode' => [
                                            'title' => '锁定状态',
                                            'description' => '锁定状态',
                                            'type' => 'string',
                                            'example' => 'Unlock',
                                        ],
                                        'chargeType' => [
                                            'title' => '付费类型',
                                            'description' => '付费类型',
                                            'type' => 'string',
                                            'example' => 'POSTPAY',
                                        ],
                                        'updateTime' => [
                                            'title' => '更新时间',
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => '2018-12-06T11:17:49.0',
                                        ],
                                        'inDebt' => [
                                            'title' => '是否欠费',
                                            'description' => '是否欠费',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'network' => [
                                            'description' => '网络搜索引擎实例信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'vSwitchId' => [
                                                    'description' => '虚拟交换机id',
                                                    'type' => 'string',
                                                    'example' => 'vsw-bp11ldcf59q2n****',
                                                ],
                                                'vpcId' => [
                                                    'description' => 'vpc网络id',
                                                    'type' => 'string',
                                                    'example' => 'vpc-wz9axk41d9vff****',
                                                ],
                                                'endpoint' => [
                                                    'description' => '网关接入点。',
                                                    'type' => 'string',
                                                    'example' => 'ha-cn-35t3r****.ha.aliyuncs.com',
                                                ],
                                            ],
                                        ],
                                        'tags' => [
                                            'description' => '标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'key' => [
                                                        'description' => '标签键',
                                                        'type' => 'string',
                                                        'example' => 'opensearch',
                                                    ],
                                                    'value' => [
                                                        'description' => '标签值',
                                                        'type' => 'string',
                                                        'example' => 'opensearch',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'totalCount' => [
                                'title' => '总记录数。',
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '当前请求的RequestID',
                                'type' => 'string',
                                'example' => '89B968E6-1E41-58DF-BB25-5F98ECC759CE',
                            ],
                        ],
                    ],
                ],
                500 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'code' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"description\\": \\"应急测试\\",\\n      \\"resourceGroupId\\": \\"ha-cn-pl32rf0****\\",\\n      \\"expiredTime\\": \\"1634885083\\",\\n      \\"commodityCode\\": \\"opensearch_ha3post_public_cn\\",\\n      \\"status\\": \\"READY\\",\\n      \\"instanceId\\": \\"ha-cn-pl32rf0****\\",\\n      \\"createTime\\": \\"2022-06-04T02:03:21Z\\",\\n      \\"lockMode\\": \\"Unlock\\",\\n      \\"chargeType\\": \\"POSTPAY\\",\\n      \\"updateTime\\": \\"2018-12-06T11:17:49.0\\",\\n      \\"inDebt\\": false,\\n      \\"network\\": {\\n        \\"vSwitchId\\": \\"vsw-bp11ldcf59q2n****\\",\\n        \\"vpcId\\": \\"vpc-wz9axk41d9vff****\\",\\n        \\"endpoint\\": \\"ha-cn-35t3r****.ha.aliyuncs.com\\"\\n      },\\n      \\"tags\\": [\\n        {\\n          \\"key\\": \\"opensearch\\",\\n          \\"value\\": \\"opensearch\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"totalCount\\": 5,\\n  \\"requestId\\": \\"89B968E6-1E41-58DF-BB25-5F98ECC759CE\\"\\n}","type":"json"}]',
            'title' => '获取实例列表',
            'description' => '### 方法'."\n"
                .'`GET`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances`',
            'requestParamsDescription' => '| 参数        | 类型   | 是否必需 | 描述                                                         |'."\n"
                .'| ----------- | ------ | -------- | ------------------------------------------------------------ |'."\n"
                .'| status      | String | 否       | 通过实例状态进行过滤。Running, Ready, Initializing,Starting  |'."\n"
                .'| expiredTime | Long   | 否       | 秒级时间戳，通过过期时间过滤，大于当前时间会过滤出即将过期的实例（不包含已经过期的实例） |'."\n"
                ."\n"
                .'### 示例'."\n"
                .'**请求示例**'."\n"
                ."\n"
                .'`GET /openapi/ha3/instances?name=test&instanceId=abc&page=1&size=10`'."\n"
                ."\n",
            'responseParamsDescription' => '### 返回示例'."\n"
                .'**正常返回示例**'."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818",'."\n"
                .'    "result": ['."\n"
                .'        {'."\n"
                .'            "instanceId": "igraph-cn-xxxxxx1",'."\n"
                .'            "spec": {'."\n"
                .'                "password": "passwd",'."\n"
                .'                "searchResource": {'."\n"
                .'                    "disk": 50,'."\n"
                .'                    "mem": 8,'."\n"
                .'                    "cpu": 2,'."\n"
                .'                    "nodeCount": 2'."\n"
                .'                },'."\n"
                .'                "instanceName": "testInstance",'."\n"
                .'                "vSwitchId": "vswitch_id_xxx",'."\n"
                .'                "vpcId": "vpc_id_xxx",'."\n"
                .'                "qrsResource": {'."\n"
                .'                    "disk": 50,'."\n"
                .'                    "mem": 8,'."\n"
                .'                    "cpu": 2,'."\n"
                .'                    "nodeCount": 2'."\n"
                .'                },'."\n"
                .'                "region": "cn-hangzhou",'."\n"
                .'                "userName": "user"'."\n"
                .'            },'."\n"
                .'            "status": {'."\n"
                .'                "phase": "PENDING",'."\n"
                .'                "instancePhase": "INIT",'."\n"
                .'                "createSuccess": false'."\n"
                .'            }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'            "instanceId": "igraph-cn-xxxxxx2",'."\n"
                .'            "spec": {'."\n"
                .'                "password": "passwd",'."\n"
                .'                "searchResource": {'."\n"
                .'                    "disk": 50,'."\n"
                .'                    "mem": 8,'."\n"
                .'                    "cpu": 2,'."\n"
                .'                    "nodeCount": 2'."\n"
                .'                },'."\n"
                .'                "instanceName": "testInstance",'."\n"
                .'                "vSwitchId": "vswitch_id_xxx",'."\n"
                .'                "vpcId": "vpc_id_xxx",'."\n"
                .'                "qrsResource": {'."\n"
                .'                    "disk": 50,'."\n"
                .'                    "mem": 8,'."\n"
                .'                    "cpu": 2,'."\n"
                .'                    "nodeCount": 2'."\n"
                .'                },'."\n"
                .'                "region": "cn-hangzhou",'."\n"
                .'                "userName": "user"'."\n"
                .'            },'."\n"
                .'            "status": {'."\n"
                .'                "phase": "PENDING",'."\n"
                .'                "instancePhase": "INIT",'."\n"
                .'                "createSuccess": false'."\n"
                .'            }'."\n"
                .'        }'."\n"
                .'    ],'."\n"
                .'    "totalCount": 20'."\n"
                .'}'."\n"
                .'```'."\n"
                .'**异常返回示例**'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "BD1EA715-DF6F-06C2-004C-C1FA0D3A9820",'."\n"
                .'  "httpCode": 404,'."\n"
                .'  "code": "App.NotFound",'."\n"
                .'  "message": "App not found"'."\n"
                .'}'."\n"
                .'```'."\n",
        ],
        'GetInstance' => [
            'summary' => '通过指定的实例ID查看实例详情。',
            'path' => '/openapi/ha3/instances/{instanceId}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例 ID。',
                        'description' => '实例 ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'description' => [
                                        'title' => '实例描述',
                                        'description' => '实例描述',
                                        'type' => 'string',
                                        'example' => '测试实例',
                                    ],
                                    'resourceGroupId' => [
                                        'title' => '资源组ID',
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'rg-aekzjvw24****',
                                    ],
                                    'expiredTime' => [
                                        'title' => '到期时间',
                                        'description' => '到期时间',
                                        'type' => 'string',
                                        'example' => '024-05-21 16:49:31.0',
                                    ],
                                    'commodityCode' => [
                                        'title' => '商品code',
                                        'description' => '商品code',
                                        'type' => 'string',
                                        'example' => 'opensearch_ha3post_public_cn',
                                    ],
                                    'instanceId' => [
                                        'title' => '资源一级ID',
                                        'description' => '资源一级ID',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****',
                                    ],
                                    'createTime' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2022-06-17T02:01:26Z',
                                    ],
                                    'lockMode' => [
                                        'title' => '锁定状态',
                                        'description' => '锁定状态',
                                        'type' => 'string',
                                        'example' => 'Unlock',
                                    ],
                                    'chargeType' => [
                                        'title' => '付费类型',
                                        'description' => '付费类型',
                                        'type' => 'string',
                                        'example' => 'POSYPAY',
                                    ],
                                    'updateTime' => [
                                        'title' => '更新时间',
                                        'description' => '更新时间',
                                        'type' => 'string',
                                        'example' => '024-05-21 16:49:31.0',
                                    ],
                                    'inDebt' => [
                                        'title' => '是否欠费',
                                        'description' => '是否欠费',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'status' => [
                                        'description' => '实例状态阶段'."\n"
                                            ."\n"
                                            .'- INIT：初始化'."\n"
                                            .'- WAIT_CONFIG：待配置'."\n"
                                            .'- CONFIG_UPDATING：配置生效中'."\n"
                                            .'- READY：正常',
                                        'type' => 'string',
                                        'example' => 'INIT',
                                    ],
                                    'tags' => [
                                        'description' => '标签。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签。',
                                            'type' => 'object',
                                            'properties' => [
                                                'key' => [
                                                    'description' => '标签键',
                                                    'type' => 'string',
                                                    'example' => 'opensearch',
                                                ],
                                                'value' => [
                                                    'description' => '标签值',
                                                    'type' => 'string',
                                                    'example' => 'opensearch',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '当前请求的requestID',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"description\\": \\"测试实例\\",\\n    \\"resourceGroupId\\": \\"rg-aekzjvw24****\\",\\n    \\"expiredTime\\": \\"024-05-21 16:49:31.0\\",\\n    \\"commodityCode\\": \\"opensearch_ha3post_public_cn\\",\\n    \\"instanceId\\": \\"ha-cn-pl32rf0****\\",\\n    \\"createTime\\": \\"2022-06-17T02:01:26Z\\",\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"chargeType\\": \\"POSYPAY\\",\\n    \\"updateTime\\": \\"024-05-21 16:49:31.0\\",\\n    \\"inDebt\\": false,\\n    \\"status\\": \\"INIT\\",\\n    \\"tags\\": [\\n      {\\n        \\"key\\": \\"opensearch\\",\\n        \\"value\\": \\"opensearch\\"\\n      }\\n    ]\\n  },\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\"\\n}","type":"json"}]',
            'title' => '根据实例ID查看实例详情',
            'description' => '### 方法'."\n"
                .'`GET`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}`'."\n",
            'requestParamsDescription' => '### 请求示例'."\n"
                .'`GET /openapi/ha3/instances/ha3-cn-xxxxxx`',
            'responseParamsDescription' => '### 返回示例'."\n"
                .'**正常返回示例**'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818",'."\n"
                .'  "result": '."\n"
                .'  {'."\n"
                .'    "instanceId":"fadsfsafs",'."\n"
                .'    "inDebt":true,'."\n"
                .'    "lockMode":"Unlock",'."\n"
                .'    "expiredTime":"asdfas",'."\n"
                .'    "updateTime":"dfasf",'."\n"
                .'    "createTime":"dfasf",'."\n"
                .'    "resourceGroupId":"resourceGroupID",'."\n"
                .'    "commodityCode":"commodityCode",'."\n"
                .'    "chargeType":"POSYPAY",'."\n"
                .'    "description":"this is description",'."\n"
                .'    "apiVersion": "tisplus/v1",'."\n"
                .'    "network": {'."\n"
                .'      "vSwitchId": "vswitch_id_xxx",'."\n"
                .'      "vpcId": "vpc_id_xxx",	  '."\n"
                .'    },'."\n"
                .'    "userName": "user",'."\n"
                .'    "spec": {'."\n"
                .'      "searchResource": {'."\n"
                .'        "disk": 50,'."\n"
                .'        "mem": 8,'."\n"
                .'        "cpu": 2,'."\n"
                .'        "nodeCount": 2'."\n"
                .'      },'."\n"
                .'      "qrsResource": {'."\n"
                .'        "disk": 50,'."\n"
                .'        "mem": 8,'."\n"
                .'        "cpu": 2,'."\n"
                .'        "nodeCount": 2'."\n"
                .'      }'."\n"
                .'    },'."\n"
                .'   "status": "INIT",'."\n"
                .'  }'."\n"
                .'}'."\n"
                .'```'."\n"
                .'**异常返回示例**'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "BD1EA715-DF6F-06C2-004C-C1FA0D3A9820",'."\n"
                .'  "httpCode": 404,'."\n"
                .'  "code": "App.NotFound",'."\n"
                .'  "message": "App not found"'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListInstanceSpecs' => [
            'summary' => '获取集群可选择的规格列表。',
            'path' => '/openapi/ha3/instances/{instanceId}/specs',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '节点类型 (qrs: 查询节点, search: 数据节点, index: 索引节点, cluster: 集群)',
                        'description' => '节点类型。取值：'."\n"
                            ."\n"
                            .'- qrs：查询节点。'."\n"
                            .'- search：数据节点。'."\n"
                            .'- index：索引节点。'."\n"
                            .'- cluster：集群。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'search',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => '实例规格列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例规格列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'cpu' => [
                                            'title' => '单位：核数',
                                            'description' => '核数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'mem' => [
                                            'title' => '单位G',
                                            'description' => '内存，单位：G。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '16',
                                        ],
                                        'minDisk' => [
                                            'title' => '单数据节点存储空间最小值',
                                            'description' => '单数据节点存储空间最小值，单位：G。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'maxDisk' => [
                                            'title' => '单数据节点存储空间最大值',
                                            'description' => '单数据节点存储空间最大值，单位：G。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '600',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": [\\n    {\\n      \\"cpu\\": 1,\\n      \\"mem\\": 16,\\n      \\"minDisk\\": 100,\\n      \\"maxDisk\\": 600\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取集群可选择的规格列表',
            'description' => '### 方法'."\n"
                .'`GET`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/specs?type=qrs`'."\n",
            'requestParamsDescription' => '### 请求示例'."\n"
                .'`GET /openapi/ha3/instances/ha3_instance_name/specs`',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "cpu": 1'."\n"
                .'      "mem": 2,'."\n"
                .'      "disk": 100'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "cpu": 2'."\n"
                .'      "mem": 4,'."\n"
                .'      "disk": 100      '."\n"
                .'    }    '."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetIndexOnlineStrategy' => [
            'summary' => '获取索引在线生效策略。',
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}/indexes/{indexName}/online-strategy',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据源名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_api_test',
                    ],
                ],
                [
                    'name' => 'deployName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '机房',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc_hz_domain_1',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
                            ],
                            'result' => [
                                'title' => 'IndexOnlineStrategy',
                                'description' => 'Object',
                                'type' => 'object',
                                'properties' => [
                                    'changeRate' => [
                                        'title' => '索引变化率',
                                        'description' => '索引变化率',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": {\\n    \\"changeRate\\": 20\\n  }\\n}","type":"json"}]',
            'title' => '获取某一索引在线策略',
        ],
        'ModifyIndexOnlineStrategy' => [
            'summary' => '修改索引在线策略。',
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}/indexes/{indexName}/online-strategy',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据源名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_api_test',
                    ],
                ],
                [
                    'name' => 'deployName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '机房',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc_hz_domain_1',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_tusou_v2',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'changeRate' => [
                                'title' => '索引变化率',
                                'description' => '索引变化率',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '20',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改某一索引在线策略',
        ],
        'ModifyOnlineConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '边缘实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'nodeName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '节点名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'general',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'description' => 'body参数。',
                            'example' => '{}',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改在线表配置',
            'summary' => '修改在线表配置。',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'put'."\n"
                .'```'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}'."\n"
                .'```',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'PUT  /openapi/ha3/instances/ha-test1/node/ihome_searcher/online-configs'."\n"
                .'```'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "content": "xxxx",'."\n"
                .'﻿'."\n"
                .'  "suezAdminName": "xxxx"'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'PUT  /openapi/ha3/instances/ha-test1/node/ihome_searcher/online-configs'."\n"
                .'```'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "content": "xxxx",'."\n"
                .'﻿'."\n"
                .'  "suezAdminName": "xxxx"'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ListOnlineConfigs' => [
            'path' => '/openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'nodeName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '节点名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_qrs',
                    ],
                ],
                [
                    'name' => 'domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sz_vpc_domain_1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => 'List',
                                'type' => 'array',
                                'items' => [
                                    'description' => '配置结果列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'indexName' => [
                                            'description' => '索引名称',
                                            'type' => 'string',
                                            'example' => 'generation',
                                        ],
                                        'config' => [
                                            'description' => '配置信息',
                                            'type' => 'string',
                                            'example' => '{\\"specItems\\":[{\\"specKey\\":\\"YQ_KEYWORD_NUMBER_PLUS\\",\\"value\\":\\"1\\"}]}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": [\\n    {\\n      \\"indexName\\": \\"generation\\",\\n      \\"config\\": \\"{\\\\\\\\\\\\\\"specItems\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"specKey\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"YQ_KEYWORD_NUMBER_PLUS\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1\\\\\\\\\\\\\\"}]}\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取在线表配置的详情',
            'summary' => '获取在线表配置的详情。',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs?domain={domain}',
            'requestParamsDescription' => '###请求示例'."\n"
                .'```java'."\n"
                .'GET  /openapi/ha3/instances/ha-test1/node/ihome_searcher/online-configs?domain=pre_ea120'."\n"
                .'```'."\n",
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                .'```java'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'﻿'."\n"
                .'  "result": ['."\n"
                .'﻿'."\n"
                .'      {'."\n"
                .'﻿'."\n"
                .'          "indexName": "nm_algo_dense_weights",'."\n"
                .'﻿'."\n"
                .'          "config": "{\\"realtime\\":false,\\"cluster_config\\":{\\"table_name\\":\\"nm_algo_dense_weights\\"},\\"online_index_config\\":{\\"online_keep_version_count\\":3,\\"build_config\\":{\\"build_total_memory\\":1024},\\"max_realtime_memory_use\\":1024,\\"load_config\\":[{\\"file_patterns\\":[\\".*\\"],\\"load_strategy\\":\\"mmap\\",\\"load_strategy_param\\":{\\"slice\\":409600,\\"lock\\":true,\\"interval\\":2}},{\\"file_patterns\\":[\\".*\\"],\\"load_strategy\\":\\"mmap\\",\\"load_strategy_param\\":{\\"slice\\":409600,\\"lock\\":true,\\"interval\\":2}},{\\"file_patterns\\":[\\"/summary/data\\"],\\"load_strategy\\":\\"cache\\",\\"load_strategy_param\\":{\\"direct_io\\":true,\\"cache_size\\":512}},{\\"warmup_strategy\\":\\"none\\",\\"file_patterns\\":[\\".*\\"],\\"load_strategy\\":\\"mmap\\",\\"load_strategy_param\\":{\\"lock\\":false}}]},\\"build_option_config\\":{\\"async_queue_size\\":1000,\\"max_recover_time\\":10,\\"async_build\\":true}}"'."\n"
                .'﻿'."\n"
                .'      },'."\n"
                .'﻿'."\n"
                .'      {'."\n"
                .'﻿'."\n"
                .'          "indexName": "search4_mj_mos_item_index",'."\n"
                .'﻿'."\n"
                .'          "config": "{\\"realtime\\":true,\\"cluster_config\\":{\\"table_name\\":\\"search4_mj_mos_item_index\\"},\\"online_index_config\\":{\\"online_keep_version_count\\":3,\\"build_config\\":{\\"build_total_memory\\":4096},\\"max_realtime_memory_use\\":8192,\\"load_config\\":[{\\"warmup_strategy\\":\\"sequential\\",\\"file_patterns\\":[\\"_INDEX_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_INDEX_\\",\\"load_strategy_param\\":{\\"lock\\":true}},{\\"warmup_strategy\\":\\"none\\",\\"file_patterns\\":[\\"_SUMMARY_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_SUMMARY_\\",\\"load_strategy_param\\":{\\"lock\\":true}},{\\"warmup_strategy\\":\\"sequential\\",\\"file_patterns\\":[\\"_ATTRIBUTE_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_ATTRIBUTE_\\",\\"load_strategy_param\\":{\\"lock\\":true}}],\\"speedup_primary_key_reader\\":true},\\"build_option_config\\":{\\"async_queue_size\\":10000,\\"max_recover_time\\":10,\\"async_build\\":true}}"'."\n"
                .'﻿'."\n"
                .'      },'."\n"
                .'﻿'."\n"
                .'      {'."\n"
                .'﻿'."\n"
                .'          "indexName": "nm_algo_search_retrieval_item_index",'."\n"
                .'﻿'."\n"
                .'          "config": "{\\"realtime\\":true,\\"cluster_config\\":{\\"table_name\\":\\"nm_algo_search_retrieval_item_index\\"},\\"online_index_config\\":{\\"online_keep_version_count\\":3,\\"build_config\\":{\\"build_total_memory\\":4096},\\"max_realtime_memory_use\\":8192,\\"load_config\\":[{\\"warmup_strategy\\":\\"sequential\\",\\"file_patterns\\":[\\"_INDEX_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_INDEX_\\",\\"load_strategy_param\\":{\\"lock\\":true}},{\\"warmup_strategy\\":\\"none\\",\\"file_patterns\\":[\\"_SUMMARY_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_SUMMARY_\\",\\"load_strategy_param\\":{\\"lock\\":true}},{\\"warmup_strategy\\":\\"sequential\\",\\"file_patterns\\":[\\"_ATTRIBUTE_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_ATTRIBUTE_\\",\\"load_strategy_param\\":{\\"lock\\":true}}],\\"speedup_primary_key_reader\\":true},\\"build_option_config\\":{\\"async_queue_size\\":10000,\\"max_recover_time\\":10,\\"async_build\\":true}}"'."\n"
                .'﻿'."\n"
                .'      }    '."\n"
                .'﻿'."\n"
                .'  ]'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n",
        ],
        'ModifyIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '186780',
                'abilityTreeNodes' => [
                    'FEATUREopensearchVHEWK3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否校验入参数据合法性，默认false。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- **true**：只校验参数合法性。'."\n"
                            ."\n"
                            .'- **false**：校验参数合法性，创建归因配置。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'dataSourceInfo' => [
                                'description' => '数据源相关信息 （向量检索版新版本必填）',
                                'type' => 'object',
                                'properties' => [
                                    'buildMode' => [
                                        'title' => '索引重建方式 (api: API方式推送数据源, indexRecover: 从索引中恢复数据源)',
                                        'description' => '索引重建方式 (api: API方式推送数据源, indexRecover: 从索引中恢复数据源)',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'api',
                                    ],
                                    'generation' => [
                                        'title' => '从索引中恢复数据源，dump表的generation',
                                        'description' => '从索引中恢复数据源，dump表的generation',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                        'example' => '1718698593',
                                    ],
                                    'dataTimeSec' => [
                                        'title' => '追增量时间戳',
                                        'description' => '追增量时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '1709715164',
                                    ],
                                    'processPartitionCount' => [
                                        'title' => '数据更新资源数',
                                        'description' => '数据更新资源数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '4',
                                    ],
                                    'name' => [
                                        'title' => '数据源名',
                                        'description' => '数据源名',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'ha-cn-pl32rf0****_index_1',
                                    ],
                                    'type' => [
                                        'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                                        'description' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'odps',
                                    ],
                                    'domain' => [
                                        'title' => '离线部署',
                                        'description' => '离线部署',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vpc_hz_domain_1'."\n",
                                    ],
                                    'config' => [
                                        'title' => 'odps 数据源配置',
                                        'description' => 'odps 数据源配置',
                                        'type' => 'object',
                                        'properties' => [
                                            'endpoint' => [
                                                'title' => 'odps相关',
                                                'description' => 'odps相关',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                                            ],
                                            'accessKey' => [
                                                'description' => 'odps数据源ak',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'L***p',
                                            ],
                                            'accessSecret' => [
                                                'description' => 'odps数据源ak secret',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '5**9a6',
                                            ],
                                            'project' => [
                                                'description' => 'odps数据源项目名称',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'bbt_algo_pai',
                                            ],
                                            'partition' => [
                                                'description' => 'ODPS Partition。例如：ds=20180102。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'ds=20230114',
                                            ],
                                            'table' => [
                                                'title' => 'saro、odps相关',
                                                'description' => 'saro、odps相关',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'item',
                                            ],
                                            'namespace' => [
                                                'title' => 'saro相关',
                                                'description' => 'saro相关',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test-namespace',
                                            ],
                                            'path' => [
                                                'title' => 'hdfs相关',
                                                'description' => 'hdfs相关',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test-hdfs-path',
                                            ],
                                            'ossPath' => [
                                                'title' => 'oss数据源相关',
                                                'description' => 'oss数据源相关',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/opensearch/oss.json',
                                            ],
                                            'bucket' => [
                                                'description' => 'OSS存储空间。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test-bucket',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'saroConfig' => [
                                        'title' => 'saro数据源配置',
                                        'description' => 'saro数据源配置',
                                        'type' => 'object',
                                        'properties' => [
                                            'namespace' => [
                                                'description' => 'saro数据源的namespace',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'flink-test-fjx-default',
                                            ],
                                            'tableName' => [
                                                'description' => 'saro数据表名称',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'device_event_shy_summary_',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'autoBuildIndex' => [
                                        'title' => '是否开启自动全量',
                                        'description' => '是否开启自动全量',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'processParallelNum' => [
                                        'description' => '全量process并发数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '2',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'description' => [
                                'description' => '描述信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '"测试"',
                            ],
                            'content' => [
                                'title' => '文件内容',
                                'description' => '文件内容',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{\\"summarys\\":{\\"summary_fields\\":[\\"id\\"]},\\"indexs\\":[{\\"index_name\\":\\"index_id\\",\\"index_type\\":\\"PRIMARYKEY64\\",\\"index_fields\\":\\"id\\",\\"has_primary_key_attribute\\":true,\\"is_primary_key_sorted\\":false}],\\"attributes\\":[\\"id\\"],\\"fields\\":[{\\"field_name\\":\\"id\\",\\"field_type\\":\\"UINT16\\"}],\\"table_name\\":\\"index_2\\"}',
                            ],
                            'partition' => [
                                'title' => '数据分片',
                                'description' => '数据分片',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'dataSource' => [
                                'title' => '数据源',
                                'description' => '数据源',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ha-cn-pl32rf0****_index_1',
                            ],
                            'domain' => [
                                'title' => '数据源部署',
                                'description' => '数据源部署',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vpc_hz_domain_1',
                            ],
                            'buildParallelNum' => [
                                'description' => '全量build并发数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'mergeParallelNum' => [
                                'description' => '全量merge并发数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'cluster' => [
                                'description' => '集群信息',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'value' => [
                                                'type' => 'string',
                                                'description' => '变量',
                                                'example' => 'partition',
                                            ],
                                            'description' => [
                                                'type' => 'string',
                                                'description' => '描述信息',
                                                'example' => '自定义变量',
                                            ],
                                            'disableModify' => [
                                                'type' => 'boolean',
                                                'example' => 'true',
                                                'description' => '是否可被用户修改',
                                            ],
                                            'isModify' => [
                                                'type' => 'boolean',
                                                'example' => 'false',
                                                'description' => '是否被修改过',
                                            ],
                                            'type' => [
                                                'type' => 'string',
                                                'example' => 'NORMAL',
                                                'description' => '普通变量：NORMAL， function变量：FUNCTION',
                                            ],
                                        ],
                                        'description' => 'cluster.json更新内容',
                                    ],
                                    'description' => '集群信息',
                                ],
                            ],
                            'clusterConfigName' => [
                                'description' => 'cluster.json文件名',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ha-cn-pl32rf0****@a-cn-pl32rf0****_test_api@hz_pre_vpc_domain_1@test_api@index_config_v1',
                            ],
                            'config' => [
                                'description' => '离线配置信息',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'desc' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '测试',
                                            'description' => '备注',
                                        ],
                                        'files' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'operateType' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'UPDATE',
                                                        'description' => '操作类型：UPDATE:更新；DELETE:删除；默认UPDATE',
                                                    ],
                                                    'parentFullPath' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '/',
                                                        'description' => '上级目录的路径',
                                                    ],
                                                    'fileName' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'description' => '文件名称',
                                                        'example' => '/intervene_dict/中文-通用分析器.dict',
                                                    ],
                                                    'config' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'content' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => '$dictContent',
                                                                'description' => '文件内容--词典配置',
                                                            ],
                                                            'variables' => [
                                                                'type' => 'object',
                                                                'required' => false,
                                                                'additionalProperties' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'description' => [
                                                                            'type' => 'string',
                                                                            'required' => false,
                                                                            'example' => '测试',
                                                                            'description' => '描述',
                                                                        ],
                                                                        'disableModify' => [
                                                                            'type' => 'boolean',
                                                                            'required' => false,
                                                                            'description' => '是否可被用户修改',
                                                                            'example' => 'true',
                                                                        ],
                                                                        'isModify' => [
                                                                            'type' => 'boolean',
                                                                            'required' => false,
                                                                            'example' => 'false',
                                                                            'description' => '是否被修改过',
                                                                        ],
                                                                        'type' => [
                                                                            'type' => 'string',
                                                                            'required' => false,
                                                                            'example' => 'NORMAL',
                                                                            'description' => '普通变量：NORMAL， function变量：FUNCTION',
                                                                        ],
                                                                        'value' => [
                                                                            'type' => 'string',
                                                                            'required' => false,
                                                                            'example' => 'test',
                                                                            'description' => '变量',
                                                                        ],
                                                                    ],
                                                                    'description' => '变量信息',
                                                                ],
                                                                'description' => '变量',
                                                            ],
                                                        ],
                                                        'required' => false,
                                                        'description' => '本次更新的配置',
                                                    ],
                                                    'dirName' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'description' => '目录名称',
                                                        'example' => '/test',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                            'description' => '修改的文件列表',
                                        ],
                                    ],
                                    'description' => '离线配置',
                                ],
                            ],
                            'pushMode' => [
                                'description' => '推送配置方式: 默认仅推送配置',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PUSH_ONLY',
                            ],
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '93A9E542-8CF8-5BA6-99AB-94C0FE520429',
                            ],
                            'result' => [
                                'title' => 'Object',
                                'description' => 'Object',
                                'type' => 'any',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93A9E542-8CF8-5BA6-99AB-94C0FE520429\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
            'title' => '修改索引',
        ],
        'StartIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/startIndex',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '187010',
                'abilityTreeNodes' => [
                    'FEATUREopensearchJ3PXKB',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'D39EE0F1-D7EF-5F46-B781-6BF4185308B0',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D39EE0F1-D7EF-5F46-B781-6BF4185308B0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '恢复使用索引',
        ],
        'StopIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/stopIndex',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '187011',
                'abilityTreeNodes' => [
                    'FEATUREopensearchJ3PXKB',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '停止使用索引',
        ],
        'CreateIndex' => [
            'summary' => '创建索引信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/indexes',
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
                'abilityTreeCode' => '104691',
                'abilityTreeNodes' => [
                    'FEATUREopensearchVHEWK3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-2r42ppr****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'title' => '名称',
                                'description' => '索引名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'index_1',
                            ],
                            'dataSource' => [
                                'title' => '数据源',
                                'description' => '数据源名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ha-cn-35t3n1y****_index_1',
                            ],
                            'domain' => [
                                'title' => '数据源的部署',
                                'description' => '数据源机房。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vpc_hz_domain_1',
                            ],
                            'content' => [
                                'title' => '文件内容',
                                'description' => '索引结构。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{\\"summarys\\":{\\"summary_fields\\":[\\"id\\"]},\\"indexs\\":[{\\"index_name\\":\\"index_id\\",\\"index_type\\":\\"PRIMARYKEY64\\",\\"index_fields\\":\\"id\\",\\"has_primary_key_attribute\\":true,\\"is_primary_key_sorted\\":false}],\\"attributes\\":[\\"id\\"],\\"fields\\":[{\\"field_name\\":\\"id\\",\\"field_type\\":\\"UINT16\\"}],\\"table_name\\":\\"index_2\\"}',
                            ],
                            'partition' => [
                                'title' => '数据分片',
                                'description' => '数据分片数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'dataSourceInfo' => [
                                'description' => '数据源相关信息 （向量检索版新版本必填）。',
                                'type' => 'object',
                                'properties' => [
                                    'dataTimeSec' => [
                                        'description' => '追增量时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '1709715164',
                                    ],
                                    'processPartitionCount' => [
                                        'description' => '数据更新资源数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '4',
                                    ],
                                    'name' => [
                                        'description' => '数据源名称。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'ha-cn-35t3n1y****_index_1',
                                    ],
                                    'type' => [
                                        'description' => '数据源类型。取值：'."\n"
                                            ."\n"
                                            .'- odps'."\n"
                                            .'- swift'."\n"
                                            .'- saro'."\n"
                                            .'- oss',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'odps',
                                    ],
                                    'domain' => [
                                        'description' => '离线机房。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vpc_hz_domain_1'."\n",
                                    ],
                                    'config' => [
                                        'description' => 'odps相关。',
                                        'type' => 'object',
                                        'properties' => [
                                            'endpoint' => [
                                                'description' => 'odps数据源的Endpoint, oss数据源的Endpoint。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'https://oss-cn-hangzhou.aliyuncs.com',
                                            ],
                                            'accessKey' => [
                                                'description' => 'odps数据源AK。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'L***p',
                                            ],
                                            'accessSecret' => [
                                                'description' => 'odps数据源AK Secret。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '5**9a6',
                                            ],
                                            'project' => [
                                                'description' => 'odps数据源项目名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'bbt_algo_pai',
                                            ],
                                            'partition' => [
                                                'description' => '数据源为odps时必填。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'ds=20230114',
                                            ],
                                            'table' => [
                                                'description' => '表名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'bbt_rec_swing_u2i2i_score_be_v1',
                                            ],
                                            'namespace' => [
                                                'description' => '命名空间。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test-namespace',
                                            ],
                                            'path' => [
                                                'description' => 'hdfs数据源路径。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test-hdfs-path',
                                            ],
                                            'ossPath' => [
                                                'description' => 'oss文件路径。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/opensearch/oss.json',
                                            ],
                                            'bucket' => [
                                                'description' => 'oss bucket。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test-bucket',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'saroConfig' => [
                                        'description' => 'saro数据源配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'namespace' => [
                                                'description' => 'saro数据源的namespace。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '目前仅在内网支持',
                                            ],
                                            'tableName' => [
                                                'description' => 'saro数据表名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '目前仅在内网支持',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'autoBuildIndex' => [
                                        'description' => '是否开启自动全量。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'processParallelNum' => [
                                        'description' => '全量process并发数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '2',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'extend' => [
                                'description' => '字段配置的扩展内容。key: 向量字段(vector)、需embeding字段（embeding）。',
                                'type' => 'object',
                                'required' => false,
                                'example' => '{'."\n"
                                    .'        "vector":'."\n"
                                    .'        ['."\n"
                                    .'            "source_image_vector"'."\n"
                                    .'        ],'."\n"
                                    .'        "embeding":'."\n"
                                    .'        ['."\n"
                                    .'            "source_image"'."\n"
                                    .'        ],'."\n"
                                    .'        "description":'."\n"
                                    .'        []'."\n"
                                    .'    }',
                            ],
                            'buildParallelNum' => [
                                'description' => '全量build并发数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'mergeParallelNum' => [
                                'description' => '全量merge并发数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：'."\n"
                            ."\n"
                            .'- true：是。'."\n"
                            .'- false：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '407BFD91-DE7D-50BA-8F88-CDE52A3B5E46',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"407BFD91-DE7D-50BA-8F88-CDE52A3B5E46\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '创建索引信息',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'POST'."\n"
                .'```'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/indexes'."\n"
                .'```',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'POST /openapi/ha3/instances/ose-test1/indexes'."\n"
                .'```'."\n"
                ."\n\n"
                .'```java'."\n"
                .'{'."\n"
                .'    "name": "index_1",'."\n"
                .'    "dataSource": "ha-cn-3********0d_index_1",'."\n"
                .'    "content": "",'."\n"
                .'    "extend":'."\n"
                .'    {'."\n"
                .'        "vector":'."\n"
                .'        ['."\n"
                .'            "source_image_vector"'."\n"
                .'        ],'."\n"
                .'        "embeding":'."\n"
                .'        ['."\n"
                .'            "source_image"'."\n"
                .'        ],'."\n"
                .'        "description":'."\n"
                .'        []'."\n"
                .'    },'."\n"
                .'    "partition": 1,'."\n"
                .'    "dataSourceInfo":'."\n"
                .'    {'."\n"
                .'        "type": "odps",'."\n"
                .'        "processPartitionCount": 2,'."\n"
                .'        "autoBuildIndex": true,'."\n"
                .'        "config":'."\n"
                .'        {'."\n"
                .'            "endpoint": "http://service.cn-hangzhou.maxcompute.aliyun.com/api",'."\n"
                .'            "project": "odps_project",'."\n"
                .'            "accessKey": "ak",'."\n"
                .'            "accessSecret": "as",'."\n"
                .'            "table": "odps_table",'."\n"
                .'            "partition": "ds=*******"'."\n"
                .'        },'."\n"
                .'        "saroConfig":'."\n"
                .'        {},'."\n"
                .'        "dataTimeSec": 1709715164'."\n"
                .'    }'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": {}'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'BuildIndex' => [
            'summary' => '触发索引重建。',
            'path' => '/openapi/ha3/instances/{instanceId}/actions/build-index',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '一个JSON格式的字符串，完整JSON字符串信息，具体内容参见以下详细信息。',
                        'type' => 'object',
                        'properties' => [
                            'dataSourceName' => [
                                'title' => '数据源名',
                                'description' => '数据源名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ha-cn-pl32rf0****_test_api',
                            ],
                            'domain' => [
                                'title' => '数据源部署',
                                'description' => '数据源机房',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'sz_vpc_domain_1',
                            ],
                            'dataSourceType' => [
                                'title' => '数据源类型 (odps: maxComputer, swift: swift, unKnow)',
                                'description' => '数据源类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'odps',
                            ],
                            'partition' => [
                                'title' => '数据源的可用分区',
                                'description' => '数据源为odps时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ds=20201010',
                            ],
                            'dataTimeSec' => [
                                'title' => 'API推送数据源的数据时间',
                                'description' => 'int类型，秒级时间戳，数据源为API推送时必填',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1640867288',
                            ],
                            'buildMode' => [
                                'title' => '索引重建方式 (API: API方式推送数据源, RECOVER_INDEX: 从索引中恢复数据源)',
                                'description' => '重建index方式: api、indexRecover',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'api',
                            ],
                            'generation' => [
                                'title' => '从索引中恢复数据源，dump表的generation',
                                'description' => '历史回流ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '160131146',
                            ],
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '407BFD91-DE7D-50BA-8F88-CDE52A3B5E46',
                            ],
                            'result' => [
                                'title' => '集群列表',
                                'description' => '集群列表',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"407BFD91-DE7D-50BA-8F88-CDE52A3B5E46\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '触发索引重建',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'POST'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/actions/build-index'."\n"
                .'```'."\n",
            'requestParamsDescription' => "\n"
                ."\n"
                .'## 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'POST /openapi/ha3/instances/ha3_instance_name/actions/build-index'."\n"
                .'﻿'."\n"
                .'```'."\n"
                ."\n"
                .'​'."\n"
                .'﻿'."\n"
                .' '."\n"
                ."\n"
                .'```'."\n"
                .' {'."\n"
                .'﻿'."\n"
                .'    "dataSourceName": "my_data_source",'."\n"
                .'﻿'."\n"
                .'    "domain": "test", //数据源部署'."\n"
                .'﻿'."\n"
                .'    "indexes": ['."\n"
                .'﻿'."\n"
                .'      "index1",'."\n"
                .'﻿'."\n"
                .'      "index2"'."\n"
                .'﻿'."\n"
                .'    ],'."\n"
                .'﻿'."\n"
                .'    "dataSourceType": "odps", //odps 或swift，必填'."\n"
                .'﻿'."\n"
                .'    "partition": "20201010", //数据源为odps时必填'."\n"
                .'﻿'."\n"
                .'    "dataTimeSec": 1640867288 //int类型，秒级时间戳，数据源为api推送时必填'."\n"
                .'﻿'."\n"
                .'  }'."\n"
                .'```'."\n"
                ."\n"
                .'﻿'."\n"
                .'​'."\n"
                .'﻿'."\n"
                .'​'."\n"
                .'﻿'."\n"
                .'  '."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'    "dataSourceName": "my_data_source",'."\n"
                .'﻿'."\n"
                .'    "domain": "test", //数据源部署'."\n"
                .'﻿'."\n"
                .'    "indexes": ['."\n"
                .'﻿'."\n"
                .'      "index1",'."\n"
                .'﻿'."\n"
                .'      "index2"'."\n"
                .'﻿'."\n"
                .'    ],'."\n"
                .'﻿'."\n"
                .'    "dataSourceType": "swift", //odps 或swift，必填'."\n"
                .'﻿'."\n"
                .'    "partition": "20201010", //数据源为odps时必填'."\n"
                .'﻿'."\n"
                .'    "dataTimeSec": 1640867288 //int类型，秒级时间戳，数据源为api推送时必填'."\n"
                .'﻿'."\n"
                .'  }'."\n"
                .'```'."\n"
                ."\n"
                .'﻿'."\n"
                .'​'."\n"
                ."\n\n"
                ."\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'﻿'."\n"
                .'  "result": []'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'详情可参考[响应结构](~~464322~~)',
        ],
        'DeleteIndexVersion' => [
            'summary' => '删除索引的版本。',
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}',
            'methods' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '索引名称',
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
                [
                    'name' => 'versionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '版本名称',
                        'description' => '版本名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_shenzhen_test_01@sz_vpc_domain_1@api_test@index_config_v1',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
                            ],
                            'result' => [
                                'title' => '结果',
                                'description' => '结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '删除索引的版本',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'DELETE'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}'."\n"
                .'```'."\n"
                ."\n\n",
            'requestParamsDescription' => '## 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'DELETE /openapi/ha3/instances/ose-test1/indexes/my_index/versions/version1'."\n"
                .'```'."\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "65911539-5a8b-4bce-96a5-4d608900dc46",'."\n"
                .'﻿'."\n"
                .'  "result": []'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'DeleteIndex' => [
            'summary' => '删除索引。',
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}',
            'methods' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '索引名称',
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
                [
                    'name' => 'dataSource',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据源',
                        'description' => '数据源',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_ test_api',
                    ],
                ],
                [
                    'name' => 'deleteDataSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否删除数据源',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
                            ],
                            'result' => [
                                'title' => '索引信息',
                                'description' => '索引信息',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '删除索引',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'DELETE'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/indexes/{indexName}?dataSource=xxx'."\n"
                .'```'."\n",
            'requestParamsDescription' => "\n"
                .'## 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'DELETE /openapi/ha3/instances/ose-test1/indexes/my_index?dataSource=xxx'."\n"
                .'```'."\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "65911539-5a8b-4bce-96a5-4d608900dc46",'."\n"
                .'﻿'."\n"
                .'  "result": []'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ModifyIndexVersion' => [
            'summary' => '修改集群索引版本（索引回滚）。',
            'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '集群名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc_hz_domain_2',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求结构。',
                        'type' => 'array',
                        'items' => [
                            'description' => '请求体参数',
                            'type' => 'object',
                            'properties' => [
                                'indexName' => [
                                    'title' => '索引名称',
                                    'description' => '索引名称',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'main_index',
                                ],
                                'version' => [
                                    'title' => '索引版本',
                                    'description' => '索引版本',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1',
                                ],
                                'buildDeployId' => [
                                    'title' => '产出索引的离线部署',
                                    'description' => '数据源部署id',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '277',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'F43E8AB4-419C-5F4C-90D6-615590DFAA3C',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'result',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F43E8AB4-419C-5F4C-90D6-615590DFAA3C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改集群索引版本（索引回滚）',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'PUT'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version'."\n"
                .'```。',
            'requestParamsDescription' => "\n"
                ."\n"
                .'## 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'PUT /openapi/ha3/instances/ha3_instance_nameclusters/test_cluster/index-version'."\n"
                .'```'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'['."\n"
                .'﻿'."\n"
                .'  {'."\n"
                .'﻿'."\n"
                .'    "indexName": "index1",'."\n"
                .'﻿'."\n"
                .'    "version": "123456",'."\n"
                .'﻿'."\n"
                .'    "buildDeployId": "20201010"'."\n"
                .'﻿'."\n"
                .'  },'."\n"
                .'﻿'."\n"
                .'  {'."\n"
                .'﻿'."\n"
                .'    "indexName": "index1",'."\n"
                .'﻿'."\n"
                .'    "version": "123456",'."\n"
                .'﻿'."\n"
                .'    "buildDeployId": "20201010"'."\n"
                .'﻿'."\n"
                .'  }'."\n"
                .'﻿'."\n"
                .']'."\n"
                .'﻿'."\n"
                .'​'."\n"
                .'```'."\n"
                ."\n\n"
                ."\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'﻿'."\n"
                .'  "result":[]'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ModifyFile' => [
            'summary' => '修改文件。',
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
                [
                    'name' => 'versionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_online_config_v1',
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件全路径名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/schemas/generation_schema.json',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'content' => [
                                'title' => '文件内容',
                                'description' => '内容',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{\\"partition\\":1}',
                            ],
                            'partition' => [
                                'title' => '数据分片',
                                'description' => '分片数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                        ],
                        'required' => false,
                        'example' => '{\\"desc\\":\\"new version\\"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '89B968E6-1E41-58DF-BB25-5F98ECC759CE',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => '索引信息',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"89B968E6-1E41-58DF-BB25-5F98ECC759CE\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改文件',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'PUT'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt'."\n"
                .'```'."\n",
            'requestParamsDescription' => '## 请求示例'."\n"
                ."\n\n"
                ."\n"
                .'```'."\n"
                .'PUT  /openapi/ha3/instances/ose-test1/indexes/index1/versions/version1?fileName=/root/test.txt'."\n"
                .'﻿'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "partition": 1,'."\n"
                .'﻿'."\n"
                .'  "content": ""'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'﻿'."\n"
                .'  "result": {}'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```',
        ],
        'PublishIndexVersion' => [
            'summary' => '发布索引版本。',
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'	"dataSource": "ha-cn-pl32rf0****_test_api",'."\n"
                            .'	"desc": "备注信息"'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => '索引信息',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '发布索引版本',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'POST'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish'."\n"
                .'```'."\n"
                ."\n",
            'requestParamsDescription' => "\n"
                ."\n"
                .'## 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'POST /openapi/ha3/instances/ose-test1/indexes/my_index/actions/publish'."\n"
                .'```'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "desc": "new version",'."\n"
                .'﻿'."\n"
                .'  "dataSource": "test1",'."\n"
                .'﻿'."\n"
                .'  "domain": "test_domain"'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n\n"
                ."\n\n"
                ."\n\n"
                ."\n\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "65911539-5a8b-4bce-96a5-4d608900dc46",'."\n"
                .'﻿'."\n"
                .'  "result": []'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ModifyIndexPartition' => [
            'summary' => '快速扩缩列。',
            'path' => '/openapi/ha3/instances/{instanceId}/index-partition',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'dataSourceName' => [
                                'title' => '数据源名称',
                                'description' => '数据源名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ha-cn-pl32rf0****_test_api',
                            ],
                            'generation' => [
                                'title' => 'generation 主键',
                                'description' => 'generation 主键',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1633293829',
                            ],
                            'domainName' => [
                                'title' => '机房',
                                'description' => '机房',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'sz_vpc_domain_1',
                            ],
                            'indexInfos' => [
                                'title' => '索引分片信息',
                                'description' => '索引信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '索引信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'indexName' => [
                                            'title' => '索引名称',
                                            'description' => '索引名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'test_api',
                                        ],
                                        'partitionCount' => [
                                            'title' => '分片数',
                                            'description' => '索引对应的分片数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '3',
                                        ],
                                        'parallelNum' => [
                                            'title' => '并发数，默认是 1',
                                            'description' => '并发数，默认是 1',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                    ],
                                    'required' => false,
                                ],
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
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '93A9E542-8CF8-5BA6-99AB-94C0FE520429',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '[]',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93A9E542-8CF8-5BA6-99AB-94C0FE520429\\",\\n  \\"result\\": []\\n}","type":"json"}]',
            'title' => '修改索引分区信息',
            'description' => '### 方法'."\n"
                .'`PUT`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/index-partition`',
            'requestParamsDescription' => '### 示例'."\n"
                .'`PUT /openapi/ha3/instances/{instanceId}/index-partition`'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "dataSourceName":"ha-cn-pl32n3bi904_d",'."\n"
                .'  "domainName":"pre_domain_1",'."\n"
                .'  "generation":"1633293829",'."\n"
                .'  "indexInfos":['."\n"
                .'    {'."\n"
                .'      "indexName":"atest2",'."\n"
                .'      "partitionCount":2'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": []'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'GetIndex' => [
            'summary' => '查看索引表版本详情。',
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}',
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
                'abilityTreeCode' => '104685',
                'abilityTreeNodes' => [
                    'FEATUREopensearchJB31XH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '4FB0325E-8C37-5525-96AC-0333523170A3',
                            ],
                            'result' => [
                                'title' => 'IndexConfig',
                                'description' => '索引信息',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'title' => '配置名称',
                                        'description' => '索引名称',
                                        'type' => 'string',
                                        'example' => 'test_api',
                                    ],
                                    'versions' => [
                                        'title' => '版本列表',
                                        'description' => '版本信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据版本信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'desc' => [
                                                    'title' => '描述',
                                                    'description' => '描述信息',
                                                    'type' => 'string',
                                                    'example' => '索引备注',
                                                ],
                                                'files' => [
                                                    'title' => '文件名列表',
                                                    'description' => '所在位置',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '版本详情',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'fullPathName' => [
                                                                'description' => '完整路径',
                                                                'type' => 'string',
                                                                'example' => '/qrs.json'."\n",
                                                            ],
                                                            'isDir' => [
                                                                'description' => '是文件夹',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'isTemplate' => [
                                                                'description' => '是模板',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'name' => [
                                                                'description' => '文件名称',
                                                                'type' => 'string',
                                                                'example' => 'qrs.json',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'name' => [
                                                    'title' => '版本名',
                                                    'description' => '版本名称',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'status' => [
                                                    'title' => 'drafting、used、unused (drafting: 草稿, used: 线上使用, unused:未使用, trash: 删除中)',
                                                    'description' => '状态 '."\n"
                                                        ."\n"
                                                        .'- NEW：创建。'."\n"
                                                        .'- PUBLISH：正常。'."\n"
                                                        .'- IN_USE：使用中。'."\n"
                                                        .'- NOT_USE：未使用。'."\n"
                                                        .'- STOP_USE：停止使用中。'."\n"
                                                        .'- RESTORE_USE：恢复使用中。'."\n"
                                                        .'- FAIL：失败。',
                                                    'type' => 'string',
                                                    'example' => 'PUBLISH',
                                                ],
                                                'updateTime' => [
                                                    'title' => '更新时间',
                                                    'description' => '更新时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1718846192',
                                                ],
                                                'versionId' => [
                                                    'title' => '版本id (edit版本为null)',
                                                    'description' => '版本ID',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'dataSource' => [
                                        'title' => '数据源',
                                        'description' => '数据源',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****_test_api'."\n",
                                    ],
                                    'domain' => [
                                        'title' => '数据源的部署名',
                                        'description' => '数据源的部署名',
                                        'type' => 'string',
                                        'example' => 'sz_vpc_domain_1',
                                    ],
                                    'indexStatus' => [
                                        'title' => '表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE,RESTORE_USE)',
                                        'description' => '状态 '."\n"
                                            ."\n"
                                            .'- NEW：创建。'."\n"
                                            .'- PUBLISH：正常。'."\n"
                                            .'- IN_USE：使用中。'."\n"
                                            .'- NOT_USE：未使用。'."\n"
                                            .'- STOP_USE：停止使用中。'."\n"
                                            .'- RESTORE_USE：恢复使用中。'."\n"
                                            .'- FAIL：失败。',
                                        'type' => 'string',
                                        'example' => 'IN_USE',
                                    ],
                                    'content' => [
                                        'title' => '文件内容',
                                        'description' => '文件内容',
                                        'type' => 'string',
                                        'example' => '{"summarys":{"parameter":{"file_compressor":"zstd"},"summary_fields":["id"]},"file_compress":[{"name":"file_compressor","type":"zstd"},{"name":"no_compressor","type":""}],"indexs":[{"index_fields":"name","index_name":"ids","index_type":"STRING"},{"has_primary_key_attribute":true,"index_fields":"id","is_primary_key_sorted":false,"index_name":"id","index_type":"PRIMARYKEY64"}],"attributes":[{"file_compress":"no_compressor","field_name":"id"}],"fields":[{"user_defined_param":{},"compress_type":"uniq","field_type":"STRING","field_name":"id"},{"compress_type":"uniq","field_type":"STRING","field_name":"name"}],"table_name":"api"}',
                                    ],
                                    'partition' => [
                                        'title' => '数据分片',
                                        'description' => '数据分片',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'fullVersion' => [
                                        'title' => '数据版本',
                                        'description' => '数据版本',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1688523414',
                                    ],
                                    'fullUpdateTime' => [
                                        'title' => '全量切换时间',
                                        'description' => '全量切换时间',
                                        'type' => 'string',
                                        'example' => '2024-06-20 08:52:54',
                                    ],
                                    'incUpdateTime' => [
                                        'title' => '增量更新时间',
                                        'description' => '增量更新时间',
                                        'type' => 'string',
                                        'example' => '2024-06-20 08:52:54',
                                    ],
                                    'indexSize' => [
                                        'title' => '索引大小',
                                        'description' => '索引大小',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '4689',
                                    ],
                                    'description' => [
                                        'title' => '备注',
                                        'description' => '备注',
                                        'type' => 'string',
                                        'example' => '备注',
                                    ],
                                    'dataSourceInfo' => [
                                        'title' => '数据源相关信息',
                                        'description' => '数据源相关信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'processPartitionCount' => [
                                                'title' => '数据更新资源数',
                                                'description' => '数据更新资源数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'name' => [
                                                'title' => '数据源名',
                                                'description' => '数据源名',
                                                'type' => 'string',
                                                'example' => 'ha-cn-pl32rf0****_test_api'."\n",
                                            ],
                                            'type' => [
                                                'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                                                'description' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                                                'type' => 'string',
                                                'example' => 'odps',
                                            ],
                                            'domain' => [
                                                'title' => '离线部署',
                                                'description' => '离线部署',
                                                'type' => 'string',
                                                'example' => 'vpc_hz_domain_1',
                                            ],
                                            'config' => [
                                                'title' => 'odps 数据源配置',
                                                'description' => 'odps 数据源配置',
                                                'type' => 'object',
                                                'properties' => [
                                                    'endpoint' => [
                                                        'title' => 'odps相关',
                                                        'description' => 'odps相关',
                                                        'type' => 'string',
                                                        'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                                                    ],
                                                    'accessKey' => [
                                                        'description' => 'odps数据源ak',
                                                        'type' => 'string',
                                                        'example' => 'L***p',
                                                    ],
                                                    'accessSecret' => [
                                                        'description' => 'odps数据源ak secret',
                                                        'type' => 'string',
                                                        'example' => '5**9a6',
                                                    ],
                                                    'project' => [
                                                        'description' => 'odps数据源项目名称',
                                                        'type' => 'string',
                                                        'example' => 'tisplus_dev',
                                                    ],
                                                    'partition' => [
                                                        'description' => 'ODPS Partition。例如：ds=20180102'."\n",
                                                        'type' => 'string',
                                                        'example' => 'ds=20220713',
                                                    ],
                                                    'table' => [
                                                        'title' => 'saro、odps相关',
                                                        'description' => 'saro、odps相关',
                                                        'type' => 'string',
                                                        'example' => 'dump_odps_demo',
                                                    ],
                                                    'namespace' => [
                                                        'title' => 'saro相关',
                                                        'description' => 'saro相关',
                                                        'type' => 'string',
                                                        'example' => 'TEST_dump_demo_sj_na61hunbu2_share_holo',
                                                    ],
                                                    'path' => [
                                                        'title' => 'hdfs相关',
                                                        'description' => 'hdfs相关',
                                                        'type' => 'string',
                                                        'example' => 'http://test_opensearch/sift_oss_test.data',
                                                    ],
                                                    'ossPath' => [
                                                        'title' => 'oss数据源相关',
                                                        'description' => 'oss数据源相关',
                                                        'type' => 'string',
                                                        'example' => '/test_opensearch/sift_oss_test.data',
                                                    ],
                                                    'bucket' => [
                                                        'description' => 'Bucket名称。',
                                                        'type' => 'string',
                                                        'example' => 'ha3test-oss',
                                                    ],
                                                ],
                                            ],
                                            'saroConfig' => [
                                                'title' => 'saro数据源配置',
                                                'description' => 'saro数据源配置',
                                                'type' => 'object',
                                                'properties' => [
                                                    'namespace' => [
                                                        'description' => 'saro数据源的namespace',
                                                        'type' => 'string',
                                                        'example' => 'TEST_dump_demo_sj_na61hunbu2_share_holo',
                                                    ],
                                                    'tableName' => [
                                                        'description' => 'saro数据表名称',
                                                        'type' => 'string',
                                                        'example' => 'llm',
                                                    ],
                                                ],
                                            ],
                                            'autoBuildIndex' => [
                                                'title' => '是否开启自动全量',
                                                'description' => '是否开启自动全量',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'processParallelNum' => [
                                                'description' => '全量process并发数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                        ],
                                    ],
                                    'cluster' => [
                                        'description' => '集群信息',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'buildParallelNum' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                    'description' => '全量并发数',
                                                ],
                                                'mergeParallelNum' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'description' => '全量merge并发数',
                                                    'example' => '2',
                                                ],
                                            ],
                                            'description' => '集群信息',
                                        ],
                                    ],
                                    'config' => [
                                        'description' => '配置信息',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'name' => [
                                                        'type' => 'string',
                                                        'example' => "\n"
                                                            .'ha-cn-pl32rf0****_offline_adv_v1',
                                                        'description' => '配置名称',
                                                    ],
                                                    'updateTime' => [
                                                        'type' => 'string',
                                                        'description' => '更新时间',
                                                        'example' => '1716258634000',
                                                    ],
                                                    'desc' => [
                                                        'type' => 'string',
                                                        'description' => '高级配置描述信息',
                                                        'example' => '备注信息',
                                                    ],
                                                ],
                                                'description' => '子配置项信息',
                                            ],
                                            'description' => '配置信息',
                                        ],
                                    ],
                                    'configWhenBuild' => [
                                        'description' => '下次生效的配置',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'name' => [
                                                        'type' => 'string',
                                                        'description' => '配置名称',
                                                        'example' => "\n"
                                                            .'ha-cn-pl32rf0****_offline_adv_v1',
                                                    ],
                                                    'updateTime' => [
                                                        'type' => 'string',
                                                        'example' => '1716258634000',
                                                        'description' => '更新时间',
                                                    ],
                                                    'desc' => [
                                                        'type' => 'string',
                                                        'description' => '高级配置描述信息',
                                                        'example' => '备注信息',
                                                    ],
                                                ],
                                                'description' => '下次生效的子配置',
                                            ],
                                            'description' => '下次生效的配置',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5xx' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'code' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"4FB0325E-8C37-5525-96AC-0333523170A3\\",\\n  \\"result\\": {\\n    \\"name\\": \\"test_api\\",\\n    \\"versions\\": [\\n      {\\n        \\"desc\\": \\"索引备注\\",\\n        \\"files\\": [\\n          {\\n            \\"fullPathName\\": \\"/qrs.json\\\\n\\",\\n            \\"isDir\\": true,\\n            \\"isTemplate\\": true,\\n            \\"name\\": \\"qrs.json\\"\\n          }\\n        ],\\n        \\"name\\": \\"test\\",\\n        \\"status\\": \\"PUBLISH\\",\\n        \\"updateTime\\": 1718846192,\\n        \\"versionId\\": 1\\n      }\\n    ],\\n    \\"dataSource\\": \\"ha-cn-pl32rf0****_test_api\\\\n\\",\\n    \\"domain\\": \\"sz_vpc_domain_1\\",\\n    \\"indexStatus\\": \\"IN_USE\\",\\n    \\"content\\": \\"{\\\\\\"summarys\\\\\\":{\\\\\\"parameter\\\\\\":{\\\\\\"file_compressor\\\\\\":\\\\\\"zstd\\\\\\"},\\\\\\"summary_fields\\\\\\":[\\\\\\"id\\\\\\"]},\\\\\\"file_compress\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"file_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"zstd\\\\\\"},{\\\\\\"name\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"\\\\\\"}],\\\\\\"indexs\\\\\\":[{\\\\\\"index_fields\\\\\\":\\\\\\"name\\\\\\",\\\\\\"index_name\\\\\\":\\\\\\"ids\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"STRING\\\\\\"},{\\\\\\"has_primary_key_attribute\\\\\\":true,\\\\\\"index_fields\\\\\\":\\\\\\"id\\\\\\",\\\\\\"is_primary_key_sorted\\\\\\":false,\\\\\\"index_name\\\\\\":\\\\\\"id\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"PRIMARYKEY64\\\\\\"}],\\\\\\"attributes\\\\\\":[{\\\\\\"file_compress\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"}],\\\\\\"fields\\\\\\":[{\\\\\\"user_defined_param\\\\\\":{},\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"},{\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"name\\\\\\"}],\\\\\\"table_name\\\\\\":\\\\\\"api\\\\\\"}\\",\\n    \\"partition\\": 2,\\n    \\"fullVersion\\": 1688523414,\\n    \\"fullUpdateTime\\": \\"2024-06-20 08:52:54\\",\\n    \\"incUpdateTime\\": \\"2024-06-20 08:52:54\\",\\n    \\"indexSize\\": 4689,\\n    \\"description\\": \\"备注\\",\\n    \\"dataSourceInfo\\": {\\n      \\"processPartitionCount\\": 2,\\n      \\"name\\": \\"ha-cn-pl32rf0****_test_api\\\\n\\",\\n      \\"type\\": \\"odps\\",\\n      \\"domain\\": \\"vpc_hz_domain_1\\",\\n      \\"config\\": {\\n        \\"endpoint\\": \\"http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api\\",\\n        \\"accessKey\\": \\"L***p\\",\\n        \\"accessSecret\\": \\"5**9a6\\",\\n        \\"project\\": \\"tisplus_dev\\",\\n        \\"partition\\": \\"ds=20220713\\",\\n        \\"table\\": \\"dump_odps_demo\\",\\n        \\"namespace\\": \\"TEST_dump_demo_sj_na61hunbu2_share_holo\\",\\n        \\"path\\": \\"http://test_opensearch/sift_oss_test.data\\",\\n        \\"ossPath\\": \\"/test_opensearch/sift_oss_test.data\\",\\n        \\"bucket\\": \\"ha3test-oss\\"\\n      },\\n      \\"saroConfig\\": {\\n        \\"namespace\\": \\"TEST_dump_demo_sj_na61hunbu2_share_holo\\",\\n        \\"tableName\\": \\"llm\\"\\n      },\\n      \\"autoBuildIndex\\": true,\\n      \\"processParallelNum\\": 2\\n    },\\n    \\"cluster\\": {\\n      \\"key\\": {\\n        \\"buildParallelNum\\": 2,\\n        \\"mergeParallelNum\\": 2\\n      }\\n    },\\n    \\"config\\": {\\n      \\"key\\": {\\n        \\"key\\": {\\n          \\"name\\": \\"\\\\nha-cn-pl32rf0****_offline_adv_v1\\",\\n          \\"updateTime\\": \\"1716258634000\\",\\n          \\"desc\\": \\"备注信息\\"\\n        }\\n      }\\n    },\\n    \\"configWhenBuild\\": {\\n      \\"key\\": {\\n        \\"key\\": {\\n          \\"name\\": \\"\\\\nha-cn-pl32rf0****_offline_adv_v1\\",\\n          \\"updateTime\\": \\"1716258634000\\",\\n          \\"desc\\": \\"备注信息\\"\\n        }\\n      }\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查看索引表详情',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/indexes/{indexName}?dataSource=xxx'."\n"
                .'```'."\n",
            'requestParamsDescription' => '## 请求示例'."\n"
                ."\n"
                .'```'."\n"
                .'GET  /openapi/ha3/instances/ose-test1/indexes/index1?dataSource=xxx'."\n"
                .'```',
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'  "result": {'."\n"
                .'    "name": "index1",'."\n"
                .'    "dataSource": "test_yyds_data1",'."\n"
                .'    "versions": ['."\n"
                .'      {'."\n"
                .'        "name": "my_index_1",'."\n"
                .'        "versionId": 1,'."\n"
                .'        "status": "drafting",'."\n"
                .'        "updateTime": "1631070464000",'."\n"
                .'        "desc": "test",'."\n"
                .'        "files": ['."\n"
                .'          {'."\n"
                .'            "fullPathName": "/",'."\n"
                .'            "isDir": true,'."\n"
                .'            "isTemplate": true,'."\n"
                .'            "name": "cava"'."\n"
                .'          },'."\n"
                .'          {'."\n"
                .'            "fullPathName": "/",'."\n"
                .'            "isDir": true,'."\n"
                .'            "isTemplate": true,'."\n"
                .'            "name": "cava"'."\n"
                .'          }'."\n"
                .'        ]'."\n"
                .'      },'."\n"
                .'      {'."\n"
                .'        "name": "my_index_2",'."\n"
                .'        "versionId": 1,'."\n"
                .'        "status": "drafting",'."\n"
                .'        "updateTime": "1631070464000",'."\n"
                .'        "desc": "test",'."\n"
                .'        "files": ['."\n"
                .'          {'."\n"
                .'            "fullPathName": "/",'."\n"
                .'            "isDir": true,'."\n"
                .'            "isTemplate": true,'."\n"
                .'            "name": "cava"'."\n"
                .'          },'."\n"
                .'          {'."\n"
                .'            "fullPathName": "/",'."\n"
                .'            "isDir": true,'."\n"
                .'            "isTemplate": true,'."\n"
                .'            "name": "cava"'."\n"
                .'          }'."\n"
                .'        ]        '."\n"
                .'      }'."\n"
                .'    ]'."\n"
                .'  }'."\n"
                .'}'."\n"
                .'```'."\n",
        ],
        'GetIndexVersion' => [
            'summary' => '获取集群可回滚的索引信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '集群名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc_hz_domain_1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'title' => 'ClusterIndexVersion',
                                'description' => '集群列表',
                                'type' => 'object',
                                'properties' => [
                                    'cluster' => [
                                        'description' => '集群名称',
                                        'type' => 'string',
                                        'example' => 'hz_pre_vpc_domain_1',
                                    ],
                                    'indexVersions' => [
                                        'description' => '索引版本列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '索引版本信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'indexName' => [
                                                    'description' => '索引表名称',
                                                    'type' => 'string',
                                                    'example' => 'test_api',
                                                ],
                                                'versions' => [
                                                    'description' => '索引版本',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '索引版本',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1630353700',
                                                    ],
                                                ],
                                                'buildDeployId' => [
                                                    'description' => '离线部署id',
                                                    'type' => 'string',
                                                    'example' => '2648',
                                                ],
                                                'currentVersion' => [
                                                    'description' => '当前在线版本号',
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
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {\\n    \\"cluster\\": \\"hz_pre_vpc_domain_1\\",\\n    \\"indexVersions\\": [\\n      {\\n        \\"indexName\\": \\"test_api\\",\\n        \\"versions\\": [\\n          1630353700\\n        ],\\n        \\"buildDeployId\\": \\"2648\\",\\n        \\"currentVersion\\": 1\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取集群可回滚的索引信息',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version'."\n"
                .'```'."\n",
            'requestParamsDescription' => '## 示例'."\n"
                ."\n"
                .'请求示例'."\n"
                ."\n"
                .'```'."\n"
                .'GET  /openapi/ha3/instances/ha3_instance_id_1/clusters/cluster1/index-version'."\n"
                .'```',
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'  "result": {'."\n"
                .'    "cluster": "ea119cloud",'."\n"
                .'    "indexVersions": ['."\n"
                .'      {'."\n"
                .'        "versions": ['."\n"
                .'          1630527077,'."\n"
                .'          1630440554'."\n"
                .'        ],'."\n"
                .'        "currentVersion":1630527077,'."\n"
                .'        "indexName": "ihome_lapp_content_filter_param_index",'."\n"
                .'        "buildDeployId": "2837"'."\n"
                .'      },'."\n"
                .'      {'."\n"
                .'        "versions": ['."\n"
                .'          1630353700'."\n"
                .'        ],'."\n"
                .'        "currentVersion":1630353700,        '."\n"
                .'        "indexName": "ihome_lapp_case_tab_filter",'."\n"
                .'        "buildDeployId": "2829"'."\n"
                .'      }'."\n"
                .'    ]'."\n"
                .'  }'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n",
        ],
        'GetFile' => [
            'summary' => '查看索引表版本详情。',
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '索引名称',
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
                [
                    'name' => 'versionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '版本名称',
                        'description' => '版本名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@bj_vpc_domain_1@point_cloud_3d@index_config_edit',
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文件全路径名称',
                        'description' => '文件全路径名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/schemas/automobile_vector_schema.json',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => '索引信息',
                                'description' => '索引信息',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'title' => '文件名称',
                                        'description' => '文件名称',
                                        'type' => 'string',
                                        'example' => 'testFile',
                                    ],
                                    'fullPathName' => [
                                        'title' => '全路径名称',
                                        'description' => '全路径名称',
                                        'type' => 'string',
                                        'example' => '/schema.json',
                                    ],
                                    'dataSource' => [
                                        'title' => '数据源',
                                        'description' => '数据源',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****_test_api',
                                    ],
                                    'partition' => [
                                        'title' => '分片数',
                                        'description' => '分片数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'isDir' => [
                                        'title' => '是否为目录',
                                        'description' => '是否为目录',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'content' => [
                                        'title' => '内容',
                                        'description' => '内容',
                                        'type' => 'string',
                                        'example' => '{"summarys":{"parameter":{"file_compressor":"zstd"},"summary_fields":["id"]},"file_compress":[{"name":"file_compressor","type":"zstd"},{"name":"no_compressor","type":""}],"indexs":[{"index_fields":"name","index_name":"ids","index_type":"STRING"},{"has_primary_key_attribute":true,"index_fields":"id","is_primary_key_sorted":false,"index_name":"id","index_type":"PRIMARYKEY64"}],"attributes":[{"file_compress":"no_compressor","field_name":"id"}],"fields":[{"user_defined_param":{},"compress_type":"uniq","field_type":"STRING","field_name":"id"},{"compress_type":"uniq","field_type":"STRING","field_name":"name"}],"table_name":"api"}',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {\\n    \\"name\\": \\"testFile\\",\\n    \\"fullPathName\\": \\"/schema.json\\",\\n    \\"dataSource\\": \\"ha-cn-pl32rf0****_test_api\\",\\n    \\"partition\\": 2,\\n    \\"isDir\\": true,\\n    \\"content\\": \\"{\\\\\\"summarys\\\\\\":{\\\\\\"parameter\\\\\\":{\\\\\\"file_compressor\\\\\\":\\\\\\"zstd\\\\\\"},\\\\\\"summary_fields\\\\\\":[\\\\\\"id\\\\\\"]},\\\\\\"file_compress\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"file_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"zstd\\\\\\"},{\\\\\\"name\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"\\\\\\"}],\\\\\\"indexs\\\\\\":[{\\\\\\"index_fields\\\\\\":\\\\\\"name\\\\\\",\\\\\\"index_name\\\\\\":\\\\\\"ids\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"STRING\\\\\\"},{\\\\\\"has_primary_key_attribute\\\\\\":true,\\\\\\"index_fields\\\\\\":\\\\\\"id\\\\\\",\\\\\\"is_primary_key_sorted\\\\\\":false,\\\\\\"index_name\\\\\\":\\\\\\"id\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"PRIMARYKEY64\\\\\\"}],\\\\\\"attributes\\\\\\":[{\\\\\\"file_compress\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"}],\\\\\\"fields\\\\\\":[{\\\\\\"user_defined_param\\\\\\":{},\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"},{\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"name\\\\\\"}],\\\\\\"table_name\\\\\\":\\\\\\"api\\\\\\"}\\"\\n  }\\n}","type":"json"}]',
            'title' => '查看索引表版本详情',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt'."\n"
                .'```'."\n",
            'requestParamsDescription' => "\n"
                ."\n"
                .'## 请求示例'."\n"
                ."\n"
                .'```'."\n"
                .'GET  /openapi/ha3/instances/ose-test1/indexes/index1/versions/version1?fileName=/root/test.txt'."\n"
                .'```'."\n"
                ."\n\n"
                ."\n\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'  "result": {'."\n"
                .'    "name":"version1",  // 文件名'."\n"
                .'    "fullPathName": "/root/version1",   // 全路径名称'."\n"
                .'    "dataSource": "odps1", // 数据源'."\n"
                .'    "partition": 1,  // 分片'."\n"
                .'    "isDir": false, // 是否为目录'."\n"
                .'    "content": ""'."\n"
                .'  }'."\n"
                .'}'."\n"
                .'```'."\n",
        ],
        'ListIndexes' => [
            'summary' => '获取索引列表。',
            'path' => '/openapi/ha3/instances/{instanceId}/indexes',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-2r42ost****',
                    ],
                ],
                [
                    'name' => 'newMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为新版本控制台页面。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4FB0325E-8C37-5525-96AC-0333523170A3',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => '索引详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '索引详情列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'title' => '配置名称',
                                            'description' => '索引名称。',
                                            'type' => 'string',
                                            'example' => 'general',
                                        ],
                                        'versions' => [
                                            'title' => '版本列表',
                                            'description' => '版本列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '索引版本信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'desc' => [
                                                        'title' => '描述',
                                                        'description' => '描述。',
                                                        'type' => 'string',
                                                        'example' => '索引备注'."\n",
                                                    ],
                                                    'files' => [
                                                        'title' => '文件名列表',
                                                        'description' => '文件名列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '版本信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'fullPathName' => [
                                                                    'description' => '全文检索后的目录名。',
                                                                    'type' => 'string',
                                                                    'example' => '/qrs.json'."\n",
                                                                ],
                                                                'isDir' => [
                                                                    'description' => '是否存在目录。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                                'isTemplate' => [
                                                                    'description' => '是否是模板。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                                'name' => [
                                                                    'description' => '文件名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'qrs.json'."\n",
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'name' => [
                                                        'title' => '版本名',
                                                        'description' => '版本名。',
                                                        'type' => 'string',
                                                        'example' => 'test',
                                                    ],
                                                    'status' => [
                                                        'title' => 'drafting、used、unused (drafting: 草稿, used: 线上使用,unused: 未使用, trash: 删除中)',
                                                        'description' => '状态 '."\n"
                                                            ."\n"
                                                            .'- NEW：创建。'."\n"
                                                            .'- PUBLISH：正常。'."\n"
                                                            .'- IN_USE：使用中。'."\n"
                                                            .'- NOT_USE：未使用。'."\n"
                                                            .'- STOP_USE：停止使用中。'."\n"
                                                            .'- RESTORE_USE：恢复使用中。'."\n"
                                                            .'- FAIL：失败。',
                                                        'type' => 'string',
                                                        'example' => 'PUBLISH',
                                                    ],
                                                    'updateTime' => [
                                                        'title' => '更新时间',
                                                        'description' => '更新时间',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '2024-06-20 08:52:54',
                                                    ],
                                                    'versionId' => [
                                                        'title' => '版本id (edit版本为null)',
                                                        'description' => '版本id (edit版本为null)',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'dataSource' => [
                                            'title' => '数据源',
                                            'description' => '数据源',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_test_api',
                                        ],
                                        'domain' => [
                                            'title' => '数据源的部署名',
                                            'description' => '数据源的部署名',
                                            'type' => 'string',
                                            'example' => 'vpc_hz_domain_1',
                                        ],
                                        'indexStatus' => [
                                            'title' => '表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE,RESTORE_USE)',
                                            'description' => 'NEW, PUBLISH',
                                            'type' => 'string',
                                            'example' => 'PUBLISH',
                                        ],
                                        'content' => [
                                            'title' => '文件内容',
                                            'description' => 'schema JSON',
                                            'type' => 'string',
                                            'example' => '{"summarys":{"parameter":{"file_compressor":"zstd"},"summary_fields":["id"]},"file_compress":[{"name":"file_compressor","type":"zstd"},{"name":"no_compressor","type":""}],"indexs":[{"index_fields":"name","index_name":"ids","index_type":"STRING"},{"has_primary_key_attribute":true,"index_fields":"id","is_primary_key_sorted":false,"index_name":"id","index_type":"PRIMARYKEY64"}],"attributes":[{"file_compress":"no_compressor","field_name":"id"}],"fields":[{"user_defined_param":{},"compress_type":"uniq","field_type":"STRING","field_name":"id"},{"compress_type":"uniq","field_type":"STRING","field_name":"name"}],"table_name":"api"}',
                                        ],
                                        'partition' => [
                                            'title' => '数据分片',
                                            'description' => '数据分片',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'fullVersion' => [
                                            'title' => '数据版本',
                                            'description' => '全量版本  即：索引版本',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1688523414',
                                        ],
                                        'fullUpdateTime' => [
                                            'title' => '全量切换时间',
                                            'description' => '全量切换时间',
                                            'type' => 'string',
                                            'example' => '2023-07-05 10:40:38',
                                        ],
                                        'incUpdateTime' => [
                                            'title' => '增量更新时间',
                                            'description' => '增量更新时间',
                                            'type' => 'string',
                                            'example' => '2023-07-05 10:58:33',
                                        ],
                                        'indexSize' => [
                                            'title' => '索引大小',
                                            'description' => '索引大小',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4689',
                                        ],
                                        'description' => [
                                            'title' => '备注',
                                            'description' => '备注',
                                            'type' => 'string',
                                            'example' => '备注',
                                        ],
                                        'dataSourceInfo' => [
                                            'title' => '数据源相关信息',
                                            'description' => '数据源相关信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'processPartitionCount' => [
                                                    'title' => '数据更新资源数',
                                                    'description' => '数据更新资源数',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'name' => [
                                                    'title' => '数据源名',
                                                    'description' => '数据源名',
                                                    'type' => 'string',
                                                    'example' => 'ha-cn-pl32rf0****_test_api',
                                                ],
                                                'type' => [
                                                    'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                                                    'description' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                                                    'type' => 'string',
                                                    'example' => 'odps',
                                                ],
                                                'domain' => [
                                                    'title' => '离线部署',
                                                    'description' => '离线部署',
                                                    'type' => 'string',
                                                    'example' => 'vpc_hz_domain_2',
                                                ],
                                                'config' => [
                                                    'title' => 'odps 数据源配置',
                                                    'description' => 'odps 数据源配置',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'endpoint' => [
                                                            'title' => 'odps相关',
                                                            'description' => 'odps相关',
                                                            'type' => 'string',
                                                            'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                                                        ],
                                                        'accessKey' => [
                                                            'description' => 'odps数据源ak',
                                                            'type' => 'string',
                                                            'example' => 'L***p',
                                                        ],
                                                        'accessSecret' => [
                                                            'description' => 'odps数据源ak secret',
                                                            'type' => 'string',
                                                            'example' => '5**9a6',
                                                        ],
                                                        'project' => [
                                                            'description' => 'odps数据源项目名称',
                                                            'type' => 'string',
                                                            'example' => 'tisplus_dev',
                                                        ],
                                                        'partition' => [
                                                            'description' => '数据分片',
                                                            'type' => 'string',
                                                            'example' => 'ds=20231220',
                                                        ],
                                                        'table' => [
                                                            'title' => 'saro、odps相关',
                                                            'description' => 'saro、odps相关',
                                                            'type' => 'string',
                                                            'example' => 'dump_odps_demo',
                                                        ],
                                                        'namespace' => [
                                                            'title' => 'saro相关',
                                                            'description' => 'saro相关',
                                                            'type' => 'string',
                                                            'example' => 'TEST_dump_demo_sj_na61hunbu2_share_holo',
                                                        ],
                                                        'path' => [
                                                            'title' => 'hdfs相关',
                                                            'description' => 'hdfs相关',
                                                            'type' => 'string',
                                                            'example' => 'http://test_opensearch/sift_oss_test.data',
                                                        ],
                                                        'ossPath' => [
                                                            'title' => 'oss数据源相关',
                                                            'description' => 'oss数据源相关',
                                                            'type' => 'string',
                                                            'example' => '/test_opensearch/sift_oss_test.data',
                                                        ],
                                                        'bucket' => [
                                                            'description' => 'oss命名空间',
                                                            'type' => 'string',
                                                            'example' => 'ha3test-oss',
                                                        ],
                                                    ],
                                                ],
                                                'saroConfig' => [
                                                    'title' => 'saro数据源配置',
                                                    'description' => 'saro数据源配置',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'namespace' => [
                                                            'description' => 'saro数据源的namespace',
                                                            'type' => 'string',
                                                            'example' => 'TEST_dump_demo_sj_na61hunbu2_share_holo',
                                                        ],
                                                        'tableName' => [
                                                            'description' => 'saro数据表名称',
                                                            'type' => 'string',
                                                            'example' => 'dump_odps_demo',
                                                        ],
                                                    ],
                                                ],
                                                'autoBuildIndex' => [
                                                    'title' => '是否开启自动全量',
                                                    'description' => '是否开启自动全量',
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
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"4FB0325E-8C37-5525-96AC-0333523170A3\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"general\\",\\n      \\"versions\\": [\\n        {\\n          \\"desc\\": \\"索引备注\\\\n\\",\\n          \\"files\\": [\\n            {\\n              \\"fullPathName\\": \\"/qrs.json\\\\n\\",\\n              \\"isDir\\": true,\\n              \\"isTemplate\\": true,\\n              \\"name\\": \\"qrs.json\\\\n\\"\\n            }\\n          ],\\n          \\"name\\": \\"test\\",\\n          \\"status\\": \\"PUBLISH\\",\\n          \\"updateTime\\": 0,\\n          \\"versionId\\": 1\\n        }\\n      ],\\n      \\"dataSource\\": \\"ha-cn-pl32rf0****_test_api\\",\\n      \\"domain\\": \\"vpc_hz_domain_1\\",\\n      \\"indexStatus\\": \\"PUBLISH\\",\\n      \\"content\\": \\"{\\\\\\"summarys\\\\\\":{\\\\\\"parameter\\\\\\":{\\\\\\"file_compressor\\\\\\":\\\\\\"zstd\\\\\\"},\\\\\\"summary_fields\\\\\\":[\\\\\\"id\\\\\\"]},\\\\\\"file_compress\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"file_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"zstd\\\\\\"},{\\\\\\"name\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"\\\\\\"}],\\\\\\"indexs\\\\\\":[{\\\\\\"index_fields\\\\\\":\\\\\\"name\\\\\\",\\\\\\"index_name\\\\\\":\\\\\\"ids\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"STRING\\\\\\"},{\\\\\\"has_primary_key_attribute\\\\\\":true,\\\\\\"index_fields\\\\\\":\\\\\\"id\\\\\\",\\\\\\"is_primary_key_sorted\\\\\\":false,\\\\\\"index_name\\\\\\":\\\\\\"id\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"PRIMARYKEY64\\\\\\"}],\\\\\\"attributes\\\\\\":[{\\\\\\"file_compress\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"}],\\\\\\"fields\\\\\\":[{\\\\\\"user_defined_param\\\\\\":{},\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"},{\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"name\\\\\\"}],\\\\\\"table_name\\\\\\":\\\\\\"api\\\\\\"}\\",\\n      \\"partition\\": 2,\\n      \\"fullVersion\\": 1688523414,\\n      \\"fullUpdateTime\\": \\"2023-07-05 10:40:38\\",\\n      \\"incUpdateTime\\": \\"2023-07-05 10:58:33\\",\\n      \\"indexSize\\": 4689,\\n      \\"description\\": \\"备注\\",\\n      \\"dataSourceInfo\\": {\\n        \\"processPartitionCount\\": 2,\\n        \\"name\\": \\"ha-cn-pl32rf0****_test_api\\",\\n        \\"type\\": \\"odps\\",\\n        \\"domain\\": \\"vpc_hz_domain_2\\",\\n        \\"config\\": {\\n          \\"endpoint\\": \\"http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api\\",\\n          \\"accessKey\\": \\"L***p\\",\\n          \\"accessSecret\\": \\"5**9a6\\",\\n          \\"project\\": \\"tisplus_dev\\",\\n          \\"partition\\": \\"ds=20231220\\",\\n          \\"table\\": \\"dump_odps_demo\\",\\n          \\"namespace\\": \\"TEST_dump_demo_sj_na61hunbu2_share_holo\\",\\n          \\"path\\": \\"http://test_opensearch/sift_oss_test.data\\",\\n          \\"ossPath\\": \\"/test_opensearch/sift_oss_test.data\\",\\n          \\"bucket\\": \\"ha3test-oss\\"\\n        },\\n        \\"saroConfig\\": {\\n          \\"namespace\\": \\"TEST_dump_demo_sj_na61hunbu2_share_holo\\",\\n          \\"tableName\\": \\"dump_odps_demo\\"\\n        },\\n        \\"autoBuildIndex\\": true\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取索引列表',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/indexes?newMode={newMode}'."\n"
                .'```',
            'requestParamsDescription' => "\n"
                ."\n"
                .'## 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'GET /openapi/ha3/instances/ose-test1/indexes'."\n"
                .'```'."\n"
                ."\n\n"
                ."\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "38b079f1-7846-4226-8c90-3e2644b5c52b",'."\n"
                .'﻿'."\n"
                .'  "result": ['."\n"
                .'﻿'."\n"
                .'    {'."\n"
                .'﻿'."\n"
                .'      "name": "index1",'."\n"
                .'﻿'."\n"
                .'      "dataSource": "test_yyds_data1",'."\n"
                .'﻿'."\n"
                .'    },'."\n"
                .'﻿'."\n"
                .'    {'."\n"
                .'﻿'."\n"
                .'      "name": "index1",'."\n"
                .'﻿'."\n"
                .'      "dataSource": "test_yyds_data1",'."\n"
                .'﻿'."\n"
                .'    }'."\n"
                .'﻿'."\n"
                .'  ]'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```',
        ],
        'RecoverIndex' => [
            'summary' => '从索引中恢复数据。',
            'path' => '/openapi/ha3/instances/{instanceId}/recover-index',
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
                'operationType' => 'update',
                'abilityTreeCode' => '144320',
                'abilityTreeNodes' => [
                    'FEATUREopensearchVHEWK3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'body参数。',
                        'type' => 'object',
                        'properties' => [
                            'dataSourceName' => [
                                'title' => '数据源名称',
                                'description' => '数据源名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ha-cn-pl32rf0****_test_api',
                            ],
                            'indexName' => [
                                'title' => '索引名称',
                                'description' => '索引名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_api',
                            ],
                            'generation' => [
                                'title' => 'generation',
                                'description' => '索引全量版本',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1653018575',
                            ],
                            'buildDeployId' => [
                                'title' => 'buildDeployId',
                                'description' => '数据源离线部署id',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '277',
                            ],
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '从索引中恢复数据',
            'description' => '### 方法'."\n"
                .'`POST`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/recover-index`',
            'requestParamsDescription' => '### 请求示例'."\n"
                .'`POST /openapi/ha3/instances/ha3_instances_id/recover-index`'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "generation": "1653018575",'."\n"
                .'  "dataSourceName":"test_yyds_data1",'."\n"
                .'  "buildDeployId":277,'."\n"
                .'  "indexName":"index_1"'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": []'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'CreateConfigDir' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例 ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '配置名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@test_api@index_config_edit',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'dirName' => [
                                'title' => '目录名称',
                                'description' => '目录名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/clusters',
                            ],
                            'parentFullPath' => [
                                'title' => '上级文件路径',
                                'description' => '上级文件路径',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/',
                            ],
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '高级配置创建文件目录',
        ],
        'CreateConfigFile' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '配置名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@test_api@index_config_edit',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'fileName' => [
                                'title' => '目录名称',
                                'description' => '目录名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/schemas/device_event_xt_schema.json',
                            ],
                            'parentFullPath' => [
                                'title' => '上级文件路径',
                                'description' => '上级文件路径',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/',
                            ],
                            'ossPath' => [
                                'title' => 'oss存储地址',
                                'description' => 'oss存储地址',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'oss://xxx/xxxx/xxx',
                            ],
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '高级配置创建文件',
        ],
        'DeleteConfigDir' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '配置名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@test_api@index_config_edit',
                    ],
                ],
                [
                    'name' => 'dirName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/clusters',
                    ],
                ],
                [
                    'name' => 'parentFullPath',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上级目录的路径',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'F43E8AB4-419C-5F4C-90D6-615590DFAA3C',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F43E8AB4-419C-5F4C-90D6-615590DFAA3C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '删除高级配置目录',
        ],
        'DeleteConfigFile' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '配置名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@test_api@index_config_edit',
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/schemas/automobile_vector_schema.json',
                    ],
                ],
                [
                    'name' => 'parentFullPath',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上级目录的路径',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '删除高级配置文件',
        ],
        'ModifyAdvanceConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '173716',
                'abilityTreeNodes' => [
                    'FEATUREopensearch8WJIRU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '配置名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_offline_adv_edit',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'title' => '配置名称',
                                'description' => '配置名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ha-cn-pl32rf0****_offline_adv_edit'."\n",
                            ],
                            'status' => [
                                'title' => '配置状态 (drafting: 草稿, used: 线上使用, unused: 未使用, trash: 删除中)',
                                'description' => '配置状态 (drafting: 草稿, used: 线上使用, unused: 未使用, trash: 删除中)',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'used',
                            ],
                            'updateTime' => [
                                'title' => '更新时间',
                                'description' => '更新时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '2024-02-27T07:50:55Z',
                            ],
                            'desc' => [
                                'title' => '高级配置描述信息',
                                'description' => '高级配置描述信息',
                                'type' => 'string',
                                'required' => false,
                                'example' => '自定义配置',
                            ],
                            'files' => [
                                'title' => '文件名列表',
                                'description' => '文件名列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '文件信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'title' => '节点名称',
                                            'description' => '节点名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'general',
                                        ],
                                        'fullPathName' => [
                                            'title' => '全路径名称',
                                            'description' => '全路径名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '/cluster.json',
                                        ],
                                        'isDir' => [
                                            'title' => '是否是目录',
                                            'description' => '是否是目录',
                                            'type' => 'boolean',
                                            'required' => false,
                                            'example' => 'true',
                                        ],
                                        'isTemplate' => [
                                            'title' => '是否是模板',
                                            'description' => '是否是模板',
                                            'type' => 'boolean',
                                            'required' => false,
                                            'example' => 'true',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'content' => [
                                'title' => '配置内容 http，git 请求时不为空',
                                'description' => '配置内容 http，git 请求时不为空',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
                            ],
                            'contentType' => [
                                'title' => '配置内容的类型 (FILE, GIT, HTTP, ODPS)',
                                'description' => '配置内容的类型 (FILE, GIT, HTTP, ODPS)',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'FILE',
                            ],
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改http、git类型的文件内容',
        ],
        'DeleteAdvanceConfig' => [
            'summary' => '删除高级配置的详情。',
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}',
            'methods' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '配置名称',
                        'description' => '配置名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'title' => '结果',
                                'description' => '结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '删除高级配置的详情',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'DELETE'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}'."\n"
                .'```'."\n"
                ."\n\n",
            'requestParamsDescription' => '## 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'DELETE  /openapi/ha3/instances/ose-test1/advanced-configs/my_config_name'."\n"
                .'```'."\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'﻿'."\n"
                .'  "result": []'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ModifyAdvanceConfigFile' => [
            'summary' => '修改词典。',
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '配置名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_online_config_edit',
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件名',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/qrs.json',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'content' => [
                                'title' => '文件内容--词典配置',
                                'description' => '文件内容',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
                            ],
                            'variables' => [
                                'title' => '变量值--在线配置',
                                'description' => '变量列表',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'disableModify' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                            'description' => '是否不允许修改',
                                            'example' => 'false',
                                        ],
                                        'isModify' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                            'description' => '是否被修改过',
                                            'example' => 'false',
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'qrs_connection_timeout',
                                            'description' => '变量值',
                                        ],
                                        'description' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'description' => '描述',
                                            'example' => '超时时间',
                                        ],
                                        'templateValue' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'description' => '模板值',
                                            'example' => '800',
                                        ],
                                        'type' => [
                                            'title' => 'NORMAL, FUNCTION',
                                            'description' => '类型：'."\n"
                                                .'- NORMAL:  普通变量'."\n"
                                                .'- FUNCTION:function变量',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'NORMAL',
                                        ],
                                        'funcValue' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'funcClassName' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'ModifyFile',
                                                    'description' => '方法类名',
                                                ],
                                                'template' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'description' => '模板',
                                                    'example' => 'test-template',
                                                ],
                                            ],
                                            'required' => false,
                                            'description' => '函数变量',
                                        ],
                                    ],
                                    'description' => '子变量信息',
                                ],
                            ],
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '93A9E542-8CF8-5BA6-99AB-94C0FE520429',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => '结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93A9E542-8CF8-5BA6-99AB-94C0FE520429\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改词典',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'put'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}'."\n"
                .'```'."\n",
            'requestParamsDescription' => "\n"
                ."\n"
                .'## 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'PUT /openapi/ha3/instances/{instanceId}/advancedConfigs/{configName}/file?fileName=/root/test.txt'."\n"
                .'```'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "content": "",'."\n"
                .'﻿'."\n"
                .'  "variables": {'."\n"
                .'﻿'."\n"
                .'    "qrs_connection_timeout": {'."\n"
                .'﻿'."\n"
                .'      "description": "",'."\n"
                .'﻿'."\n"
                .'      "disableModify": false,'."\n"
                .'﻿'."\n"
                .'      "isModify": true,'."\n"
                .'﻿'."\n"
                .'      "type": "NORMAL",'."\n"
                .'﻿'."\n"
                .'      "value": "800"'."\n"
                .'﻿'."\n"
                .'    }'."\n"
                .'﻿'."\n"
                .'  }'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "65911539-5a8b-4bce-96a5-4d608900dc46",'."\n"
                .'﻿'."\n"
                .'  "result": []'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'PublishAdvanceConfig' => [
            'summary' => '发布高级版本。',
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '104708',
                'abilityTreeNodes' => [
                    'FEATUREopensearchA6GC80',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '配置名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_online_config_v3',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求结构。',
                        'type' => 'object',
                        'properties' => [
                            'desc' => [
                                'description' => '高级配置描述信息',
                                'type' => 'string',
                                'required' => false,
                                'example' => '自定义配置',
                            ],
                            'files' => [
                                'description' => '文件信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '文件信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'ossPath' => [
                                            'description' => 'oss文件路径',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'oss://opensearch/test.json',
                                        ],
                                        'operateType' => [
                                            'description' => '操作类型：UPDATE:更新；DELETE:删除；默认UPDATE',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'UPDATE',
                                        ],
                                        'parentFullPath' => [
                                            'description' => '上级文件路径',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '/',
                                        ],
                                        'fileName' => [
                                            'description' => '文件名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'vector_question_schema.json',
                                        ],
                                        'dirName' => [
                                            'description' => '目录名称。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '/clusters',
                                        ],
                                        'config' => [
                                            'description' => '高级配置信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'content' => [
                                                    'description' => '文件内容',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => "\n"
                                                        .'{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
                                                ],
                                                'variables' => [
                                                    'description' => '变量列表',
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'additionalProperties' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'description' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'description' => '变量描述',
                                                                'example' => '自定义变量',
                                                            ],
                                                            'disableModify' => [
                                                                'type' => 'boolean',
                                                                'required' => false,
                                                                'example' => 'true',
                                                                'description' => '是否可被用户修改',
                                                            ],
                                                            'isModify' => [
                                                                'type' => 'boolean',
                                                                'required' => false,
                                                                'description' => '变量是否被修改过',
                                                                'example' => 'true',
                                                            ],
                                                            'type' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => 'NORMAL',
                                                                'description' => '类型：普通变量-NORMAL； function变量-FUNCTION',
                                                            ],
                                                            'value' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => 'test',
                                                                'description' => '变量值',
                                                            ],
                                                        ],
                                                        'description' => '变量',
                                                    ],
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                        'example' => '{\\"desc\\":\\"new version\\"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '发布高级版本',
            'description' => '## 方法'."\n"
                .'`POST`'."\n"
                ."\n"
                .'## URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish`',
            'requestParamsDescription' => '## 请求示例'."\n"
                .'```'."\n"
                .'POST /openapi/ha3/instances/ose-test1/advanced-configs/test/actions/publish'."\n"
                ."\n"
                .'{'."\n"
                .'    "desc": "new version"'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '## 返回示例'."\n"
                .'### 正确返回'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "requestId": "65911539-5a8b-4bce-96a5-4d608900dc46",'."\n"
                .'  "result": {}'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'GetAdvanceConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ONLINE: 在线配置, ONLINE_CAVA, ONLINE_PLUGIN, ONLINE_QUERY, OFFLINE_DICT: 离线配置, OFFLINE_TABLE, OFFLINE_COMMON, OFFLINE_PLUGIN, OFFLINE_INDEX',
                        'description' => '- -ONLINE: 在线配置, '."\n"
                            .'- -ONLINE_CAVA: 在线cava配置, '."\n"
                            .'- -ONLINE_PLUGIN: 在线插件, '."\n"
                            .'- -ONLINE_QUERY: 查询配置, '."\n"
                            .'- -OFFLINE_DICT: 离线配置, '."\n"
                            .'- -OFFLINE_TABLE: 离线表, '."\n"
                            .'- -OFFLINE_COMMON: 离线配置, '."\n"
                            .'- -OFFLINE_PLUGIN: 离线插件, '."\n"
                            .'- -OFFLINE_INDEX: 索引配置',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ONLINE',
                        'default' => 'OFFLINE_DICT',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '配置名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => "\n"
                            .'ha-cn-pl32rf0****_offline_adv_edit',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
                            ],
                            'result' => [
                                'title' => 'AdvanceConfig',
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'updateTime' => [
                                        'title' => '更新时间',
                                        'description' => '更新时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2024-05-21 16:05:26',
                                    ],
                                    'desc' => [
                                        'title' => '高级配置描述信息',
                                        'description' => '描述',
                                        'type' => 'string',
                                        'example' => '自定义备注信息',
                                    ],
                                    'files' => [
                                        'title' => '文件名列表',
                                        'description' => '文件列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '文件信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'description' => '名称',
                                                    'type' => 'string',
                                                    'example' => 'ha-cn-pl32rf0****_qrs',
                                                ],
                                                'fullPathName' => [
                                                    'description' => '文件路径',
                                                    'type' => 'string',
                                                    'example' => '/cluster',
                                                ],
                                                'isDir' => [
                                                    'description' => '是目录',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'isTemplate' => [
                                                    'description' => '是容器',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'content' => [
                                        'title' => '配置内容 http，git 请求时不为空',
                                        'description' => '配置内容 http，git 请求时不为空',
                                        'type' => 'string',
                                        'example' => '{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
                                    ],
                                    'contentType' => [
                                        'title' => '配置内容的类型 (FILE, GIT, HTTP, ODPS)',
                                        'description' => '配置内容的类型 (FILE, GIT, HTTP, ODPS)',
                                        'type' => 'string',
                                        'example' => 'FILE',
                                    ],
                                    'name' => [
                                        'title' => '配置名称',
                                        'description' => '配置名称',
                                        'type' => 'string',
                                        'example' => 'my_index',
                                    ],
                                    'status' => [
                                        'title' => '配置状态 (drafting: 草稿, used: 线上使用, unused: 未使用, trash: 删除中)',
                                        'description' => '配置状态 (drafting: 草稿, used: 线上使用, unused: 未使用, trash: 删除中)',
                                        'type' => 'string',
                                        'example' => 'used',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": {\\n    \\"updateTime\\": 0,\\n    \\"desc\\": \\"自定义备注信息\\",\\n    \\"files\\": [\\n      {\\n        \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n        \\"fullPathName\\": \\"/cluster\\",\\n        \\"isDir\\": true,\\n        \\"isTemplate\\": true\\n      }\\n    ],\\n    \\"content\\": \\"{\\\\\\\\\\\\\\"url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\\\\\\\\\\\\\"}\\",\\n    \\"contentType\\": \\"FILE\\",\\n    \\"name\\": \\"my_index\\",\\n    \\"status\\": \\"used\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取词典信息',
            'summary' => '获取词典信息。',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}'."\n"
                .'```'."\n",
            'requestParamsDescription' => '## 请求示例'."\n"
                ."\n"
                .'```'."\n"
                .'GET  /openapi/ha3/instances/ose-test1/advanced-configs/my_config_name'."\n"
                .'```',
            'responseParamsDescription' => "\n"
                ."\n\n"
                ."\n"
                .'## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'  "result": {'."\n"
                .'    "name": "my_index",'."\n"
                .'    "status": "drafting",'."\n"
                .'    "updateTime": 1631070464000,'."\n"
                .'    "desc":"test",'."\n"
                .'    "files": ['."\n"
                .'      {'."\n"
                .'        "fullPathName": "/",'."\n"
                .'        "isDir": true,'."\n"
                .'        "isTemplate": true,'."\n"
                .'        "name": "cava"'."\n"
                .'      },'."\n"
                .'      {'."\n"
                .'        "fullPathName": "/",'."\n"
                .'        "isDir": true,'."\n"
                .'        "isTemplate": true,'."\n"
                .'        "name": "cava"'."\n"
                .'      }'."\n"
                .'    ]    '."\n"
                .'  }'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n",
        ],
        'GetAdvanceConfigFile' => [
            'summary' => '获取词典信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '配置名称',
                        'description' => '配置名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_online_config_v5',
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '文件名称',
                        'description' => '文件名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/intervene_dict/chn_ecommerce_general.dict',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => '结果',
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'content' => [
                                        'title' => '文件内容',
                                        'description' => '文件内容',
                                        'type' => 'string',
                                        'example' => '{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {\\n    \\"content\\": \\"{\\\\\\\\\\\\\\"url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\\\\\\\\\\\\\"}\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取词典信息',
            'description' => '## 方法'."\n"
                ."\n"
                .'```'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```'."\n"
                .'/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}'."\n"
                .'```'."\n",
            'requestParamsDescription' => "\n"
                ."\n"
                .'## 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'GET  /openapi/ha3/instances/ose-test1/advanced-configs/my_config_name?fileName=/root/test.txt'."\n"
                .'```'."\n"
                ."\n\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'﻿'."\n"
                .'  "result": {'."\n"
                .'﻿'."\n"
                .'    "content": "",'."\n"
                .'﻿'."\n"
                .'    "variables": {'."\n"
                .'﻿'."\n"
                .'      "qrs_request_compress_type": {'."\n"
                .'﻿'."\n"
                .'        "description": "",'."\n"
                .'﻿'."\n"
                .'        "disableModify": false,'."\n"
                .'﻿'."\n"
                .'        "isModify": false,'."\n"
                .'﻿'."\n"
                .'        "type": "NORMAL",'."\n"
                .'﻿'."\n"
                .'        "value": "z_speed_compress"'."\n"
                .'﻿'."\n"
                .'      },'."\n"
                .'﻿'."\n"
                .'      "qrs_connection_timeout": {'."\n"
                .'﻿'."\n"
                .'        "description": "",'."\n"
                .'﻿'."\n"
                .'        "disableModify": false,'."\n"
                .'﻿'."\n"
                .'        "isModify": true,'."\n"
                .'﻿'."\n"
                .'        "type": "NORMAL",'."\n"
                .'﻿'."\n"
                .'        "value": "800"'."\n"
                .'﻿'."\n"
                .'      },'."\n"
                .'﻿'."\n"
                .'      "qrs_return_hits_limit": {'."\n"
                .'﻿'."\n"
                .'        "description": "",'."\n"
                .'﻿'."\n"
                .'        "disableModify": false,'."\n"
                .'﻿'."\n"
                .'        "isModify": false,'."\n"
                .'﻿'."\n"
                .'        "type": "NORMAL",'."\n"
                .'﻿'."\n"
                .'        "value": "5000"'."\n"
                .'﻿'."\n"
                .'      },'."\n"
                .'﻿'."\n"
                .'      "primary_table_name": {'."\n"
                .'﻿'."\n"
                .'        "disableModify": false,'."\n"
                .'﻿'."\n"
                .'        "funcValue": {'."\n"
                .'﻿'."\n"
                .'          "funcClassName": "com.taobao.search.moss.resource.api.plugin.config.function.impl.MainOnlineTableFunction"'."\n"
                .'﻿'."\n"
                .'        },'."\n"
                .'﻿'."\n"
                .'        "isModify": false,'."\n"
                .'﻿'."\n"
                .'        "type": "FUNCTION",'."\n"
                .'﻿'."\n"
                .'        "value": "$primary_table_name"'."\n"
                .'﻿'."\n"
                .'      },'."\n"
                .'﻿'."\n"
                .'      "__cluster_name": {'."\n"
                .'﻿'."\n"
                .'        "disableModify": false,'."\n"
                .'﻿'."\n"
                .'        "isModify": true,'."\n"
                .'﻿'."\n"
                .'        "type": "NORMAL",'."\n"
                .'﻿'."\n"
                .'        "value": "general"'."\n"
                .'﻿'."\n"
                .'      }'."\n"
                .'﻿'."\n"
                .'    }'."\n"
                .'﻿'."\n"
                .'  }'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n",
        ],
        'ListAdvanceConfigDir' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '配置名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_online_config_v3',
                    ],
                ],
                [
                    'name' => 'dirName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/zones/general',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => '高级配文件列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'description' => '集群名称',
                                            'type' => 'string',
                                            'example' => 'hz_pre_vpc_domain_1',
                                        ],
                                        'fullPathName' => [
                                            'description' => '绝对路径',
                                            'type' => 'string',
                                            'example' => '/path/wpd/nae',
                                        ],
                                        'isDir' => [
                                            'description' => '是否为目录。取值：-true：是-false：否',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'isTemplate' => [
                                            'description' => '是否是模板。取值：-**true**：是-**false**：否',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"hz_pre_vpc_domain_1\\",\\n      \\"fullPathName\\": \\"/path/wpd/nae\\",\\n      \\"isDir\\": true,\\n      \\"isTemplate\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取高级配置目录下文件列表',
            'summary' => '获取高级配置目录下文件列表。',
            'description' => '## 方法'."\n"
                .'`GET`'."\n"
                ."\n"
                .'## URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir?dirName={dirName}`',
            'requestParamsDescription' => '## 请求示例'."\n"
                .'`GET /openapi/ha3/instances/ose-test1/advanced-configs`',
            'responseParamsDescription' => '## 返回示例'."\n"
                .'### 正确返回'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "name": "file_name_1",'."\n"
                .'      "fullPathName": "/path/wpd/nae",'."\n"
                .'      "isDir": true,'."\n"
                .'      "isTemplate": true'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListAdvanceConfigs' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs',
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
                'operationType' => 'list',
                'abilityTreeCode' => '104702',
                'abilityTreeNodes' => [
                    'FEATUREopensearchA6GC80',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ONLINE: 在线配置, ONLINE_CAVA, ONLINE_PLUGIN, ONLINE_QUERY, OFFLINE_DICT: 离线配置, OFFLINE_TABLE, OFFLINE_COMMON, OFFLINE_PLUGIN, OFFLINE_INDEX',
                        'description' => '高级配置类型：'."\n"
                            .'    - online'."\n"
                            .'    - offline（默认）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'online',
                        'default' => 'OFFLINE_DICT',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ha-cn-pl32rf0****_test_api'."\n",
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_api',
                    ],
                ],
                [
                    'name' => 'newMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为新版本控制台页面',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '4FB0325E-8C37-5525-96AC-0333523170A3',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => '高级配置列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果。',
                                    'type' => 'object',
                                    'properties' => [
                                        'updateTime' => [
                                            'title' => '更新时间',
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1631070464000',
                                        ],
                                        'desc' => [
                                            'title' => '高级配置描述信息',
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => '自定义描述',
                                        ],
                                        'files' => [
                                            'title' => '文件名列表',
                                            'description' => '文件名列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '文件信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'name' => [
                                                        'description' => '文件名称',
                                                        'type' => 'string',
                                                        'example' => 'file_name_1',
                                                    ],
                                                    'fullPathName' => [
                                                        'description' => '绝对路径',
                                                        'type' => 'string',
                                                        'example' => '/path/wpd/nae',
                                                    ],
                                                    'isDir' => [
                                                        'description' => '是否为目录。取值：-true：是-false：否',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'isTemplate' => [
                                                        'description' => '是否是模板。取值：-true：是-false：否',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'content' => [
                                            'title' => '配置内容 http，git 请求时不为空',
                                            'description' => '配置内容 http，git 请求时不为空',
                                            'type' => 'string',
                                            'example' => '{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
                                        ],
                                        'contentType' => [
                                            'title' => '配置内容的类型 (FILE, GIT, HTTP, ODPS)',
                                            'description' => '配置内容的类型（FILE, GIT, HTTP, ODPS）',
                                            'type' => 'string',
                                            'example' => 'FILE',
                                        ],
                                        'name' => [
                                            'title' => '配置名称',
                                            'description' => '高级配置名称',
                                            'type' => 'string',
                                            'example' => 'my_index',
                                        ],
                                        'status' => [
                                            'title' => '配置状态 (drafting: 草稿, used: 线上使用, unused: 未使用, trash: 删除中)',
                                            'description' => '高级配置状态'."\n"
                                                .'drafting: 草稿'."\n"
                                                .'used: 使用中'."\n"
                                                .'unused: 未使用'."\n"
                                                .'trash: 删除中',
                                            'type' => 'string',
                                            'example' => 'drafting',
                                        ],
                                        'creator' => [
                                            'description' => '创建者userid。',
                                            'type' => 'string',
                                            'example' => '123456',
                                        ],
                                        'advanceConfigType' => [
                                            'description' => '- -ONLINE: 在线配置, '."\n"
                                                .'- -ONLINE_CAVA: 在线cava配置, '."\n"
                                                .'- -ONLINE_PLUGIN: 在线插件, '."\n"
                                                .'- -ONLINE_QUERY: 查询配置, '."\n"
                                                .'- -OFFLINE_DICT: 离线配置, '."\n"
                                                .'- -OFFLINE_TABLE: 离线表, '."\n"
                                                .'- -OFFLINE_COMMON: 离线配置, '."\n"
                                                .'- -OFFLINE_PLUGIN: 离线插件, '."\n"
                                                .'- -OFFLINE_INDEX: 索引配置',
                                            'type' => 'string',
                                            'example' => 'ONLINE',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"4FB0325E-8C37-5525-96AC-0333523170A3\\",\\n  \\"result\\": [\\n    {\\n      \\"updateTime\\": 1631070464000,\\n      \\"desc\\": \\"自定义描述\\",\\n      \\"files\\": [\\n        {\\n          \\"name\\": \\"file_name_1\\",\\n          \\"fullPathName\\": \\"/path/wpd/nae\\",\\n          \\"isDir\\": true,\\n          \\"isTemplate\\": true\\n        }\\n      ],\\n      \\"content\\": \\"{\\\\\\\\\\\\\\"url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\\\\\\\\\\\\\"}\\",\\n      \\"contentType\\": \\"FILE\\",\\n      \\"name\\": \\"my_index\\",\\n      \\"status\\": \\"drafting\\",\\n      \\"creator\\": \\"123456\\",\\n      \\"advanceConfigType\\": \\"ONLINE\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取高级配置列表',
            'summary' => '获取高级配置列表。',
            'description' => '## 方法'."\n"
                .'`GET`'."\n"
                ."\n"
                .'## URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/advanced-configs?type=online`',
            'requestParamsDescription' => '## 请求示例'."\n"
                .'`GET /openapi/ha3/instances/ose-test1/advanced-configs`'."\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                .'### 正确返回'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "name": "my_index",'."\n"
                .'      "status": "drafting",'."\n"
                .'      "updateTime": 1631070464000,'."\n"
                .'      "desc":"test",'."\n"
                .'      "files":['."\n"
                .'        {'."\n"
                .'          "name": "file_name_1",'."\n"
                .'          "fullPathName": "/path/wpd/nae",'."\n"
                .'          "isDir": true,'."\n"
                .'          "isTemplate": true'."\n"
                .'        }'."\n"
                .'      ]'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "name": "my_index2",'."\n"
                .'      "status": "drafting",'."\n"
                .'      "updateTime": 1631070464000,'."\n"
                .'      "desc":"test",'."\n"
                .'      "files":['."\n"
                .'        {'."\n"
                .'          "name": "file_name_1",'."\n"
                .'          "fullPathName": "/path/wpd/nae",'."\n"
                .'          "isDir": true,'."\n"
                .'          "isTemplate": true'."\n"
                .'        }'."\n"
                .'      ]'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListSchemas' => [
            'summary' => '通过数据源配置获取schema信息',
            'path' => '/openapi/ha3/instances/{instanceId}/schemas',
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
                'operationType' => 'list',
                'abilityTreeCode' => '186763',
                'abilityTreeNodes' => [
                    'FEATUREopensearchVHEWK3',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'odps, swift, saro, oss, unKnow',
                        'description' => 'odps, swift, saro, oss, unKnow',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'odps',
                    ],
                ],
                [
                    'name' => 'endpoint',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'odps endpoint',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                    ],
                ],
                [
                    'name' => 'accessKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'odps数据源ak',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'L***p',
                    ],
                ],
                [
                    'name' => 'accessSecret',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'odps数据源as',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5**9a6',
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'odps数据源项目名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sec_odps',
                    ],
                ],
                [
                    'name' => 'partition',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据分片',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dt=20230520',
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'saro、odps数据源表名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'item',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'saro数据源的namespace',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'imm',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
                            ],
                            'result' => [
                                'title' => 'Object',
                                'description' => 'Object',
                                'type' => 'any',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
            'title' => '根据数据同步配置获取schema信息',
        ],
        'ModifyDataSourceDeploy' => [
            'summary' => '修改数据源部署信息',
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'deployName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '机房',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc_hz_domain_1',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据源名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_test_api',
                    ],
                ],
                [
                    'name' => 'generationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '索引全量版本',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1708674867',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'storage' => [
                                'description' => '数据源信息',
                                'type' => 'object',
                                'properties' => [
                                    'endpoint' => [
                                        'title' => 'odps相关',
                                        'description' => 'odps endpoint',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                                    ],
                                    'accessKey' => [
                                        'description' => 'odps数据源ak',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'L***p',
                                    ],
                                    'accessSecret' => [
                                        'description' => 'odps数据源ak secret',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '5**9a6',
                                    ],
                                    'project' => [
                                        'description' => 'odps数据源项目名称',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'kubenest',
                                    ],
                                    'partition' => [
                                        'description' => '分区信息',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'ds=20220713',
                                    ],
                                    'table' => [
                                        'title' => 'saro、odps相关',
                                        'description' => 'saro、odps相关',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'item',
                                    ],
                                    'namespace' => [
                                        'title' => 'saro相关',
                                        'description' => 'saro相关',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'dp-dev',
                                    ],
                                    'path' => [
                                        'title' => 'hdfs相关',
                                        'description' => 'hdfs相关',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '/ude_jobs/iflow_offline_data_access',
                                    ],
                                    'ossPath' => [
                                        'title' => 'oss数据源相关',
                                        'description' => 'oss数据源相关',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '/opensearch',
                                    ],
                                    'bucket' => [
                                        'description' => 'Bucket名称。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'test-bucket',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'autoBuildIndex' => [
                                'title' => '是否开启自动全量',
                                'description' => '是否开启自动全量',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'processor' => [
                                'description' => '进程参数',
                                'type' => 'object',
                                'properties' => [
                                    'args' => [
                                        'title' => '进程启动参数',
                                        'description' => '进程启动参数',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '{'."\n"
                                            .'	"processInfos": [],'."\n"
                                            .'	"groupId": "opensearch",'."\n"
                                            .'	"containerConfigs": [],'."\n"
                                            .'	"priority": {'."\n"
                                            .'		"minor_priority": 0,'."\n"
                                            .'		"major_priority": 64'."\n"
                                            .'	}'."\n"
                                            .'}',
                                    ],
                                    'resource' => [
                                        'title' => '资源信息',
                                        'description' => '资源信息',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '[{'."\n"
                                            .'	"_bs_role": "processor.*.inc",'."\n"
                                            .'	"priority": {'."\n"
                                            .'		"major_priority": 32,'."\n"
                                            .'		"minor_priority": 0'."\n"
                                            .'	},'."\n"
                                            .'	"slotResources": [{'."\n"
                                            .'		"slotResources": [{'."\n"
                                            .'			"amount": 200,'."\n"
                                            .'			"name": "cpu"'."\n"
                                            .'		}, {'."\n"
                                            .'			"amount": 8192,'."\n"
                                            .'			"name": "mem"'."\n"
                                            .'		}, {'."\n"
                                            .'			"amount": 0,'."\n"
                                            .'			"name": "T4"'."\n"
                                            .'		}, {'."\n"
                                            .'			"amount": 10,'."\n"
                                            .'			"type": "SCALAR",'."\n"
                                            .'			"name": "disk_ratio_9999"'."\n"
                                            .'		}, {'."\n"
                                            .'			"amount": 20480,'."\n"
                                            .'			"type": "SCALAR",'."\n"
                                            .'			"name": "disk_size_9999"'."\n"
                                            .'		}]'."\n"
                                            .'	}]'."\n"
                                            .'}]',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'extend' => [
                                'description' => '扩展信息。',
                                'type' => 'object',
                                'properties' => [
                                    'saro' => [
                                        'description' => 'saro数据源信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'path' => [
                                                'description' => '路径',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/',
                                            ],
                                            'version' => [
                                                'description' => '版本号',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '1',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'hdfs' => [
                                        'description' => 'hdfs信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'path' => [
                                                'description' => 'hdfs数据源路径。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'ymsh-service/src/main/java/cn/ymsh/util/jd',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'odps' => [
                                        'description' => 'odps数据源信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'partitions' => [
                                                'description' => '数据源的分区信息',
                                                'type' => 'object',
                                                'required' => false,
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                    'description' => '数据源的分区信息',
                                                    'example' => 'ds=20230824',
                                                ],
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'oss' => [
                                        'description' => 'oss信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'path' => [
                                                'description' => 'oss数据源路径',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'oss://test',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'swift' => [
                                'title' => '增量swift信息',
                                'description' => '增量swift信息',
                                'type' => 'object',
                                'properties' => [
                                    'zk' => [
                                        'description' => 'zk',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'zk',
                                    ],
                                    'topic' => [
                                        'description' => 'topic',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'ha-cn-pl32rf0****_test_api',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '93A9E542-8CF8-5BA6-99AB-94C0FE520429',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93A9E542-8CF8-5BA6-99AB-94C0FE520429\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改数据源部署信息',
        ],
        'CreateDataSource' => [
            'summary' => '创建数据源。',
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求结构。',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'title' => '数据源名',
                                'description' => '数据源名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ha-cn-pl32rf0****_test_api',
                            ],
                            'type' => [
                                'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                                'description' => '数据源类型：odps、oss、swift',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'odps',
                            ],
                            'domain' => [
                                'title' => '离线部署',
                                'description' => '数据源机房',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vpc_hz_domain_1',
                            ],
                            'config' => [
                                'title' => 'odps 数据源配置',
                                'description' => '配置信息',
                                'type' => 'object',
                                'properties' => [
                                    'endpoint' => [
                                        'title' => 'odps相关',
                                        'description' => 'odps数据源的endpoint 或者 oss数据源的endpoint',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                                    ],
                                    'accessKey' => [
                                        'description' => 'odps数据源ak',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'L***p',
                                    ],
                                    'accessSecret' => [
                                        'description' => 'odps数据源as',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '5**9a6',
                                    ],
                                    'project' => [
                                        'description' => 'odps数据源项目名称',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'kubenest',
                                    ],
                                    'partition' => [
                                        'description' => 'odps分区',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'ds=20220713',
                                    ],
                                    'table' => [
                                        'title' => 'saro、odps相关',
                                        'description' => 'odps表名称',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'item',
                                    ],
                                    'namespace' => [
                                        'title' => 'saro相关',
                                        'description' => '命名空间',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'aegis-ops',
                                    ],
                                    'path' => [
                                        'title' => 'hdfs相关',
                                        'description' => 'hdfs文件路径',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'test-hdfs-path'."\n",
                                    ],
                                    'ossPath' => [
                                        'title' => 'oss数据源相关',
                                        'description' => 'oss文件路径',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '/opensearch/search',
                                    ],
                                    'bucket' => [
                                        'description' => 'oss bucket',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'opensearch',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'saroConfig' => [
                                'title' => 'saro数据源配置',
                                'description' => 'saro数据源配置',
                                'type' => 'object',
                                'properties' => [
                                    'namespace' => [
                                        'description' => 'saro数据源的namespace',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'igraph-cn-x0r3e3abe02',
                                    ],
                                    'tableName' => [
                                        'description' => 'saro数据表名称',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'index_hdfs',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'autoBuildIndex' => [
                                'title' => '是否开启自动全量',
                                'description' => '自动重建索引',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => '返回参数',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '创建数据源',
            'description' => '## 方法'."\n"
                .'`POST`'."\n"
                ."\n"
                .'## URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/data-sources`',
            'requestParamsDescription' => '## 请求示例'."\n"
                .'```'."\n"
                .'POST /openapi/ha3/instances/ha3_instances_id/data-sources'."\n"
                ."\n"
                .'{'."\n"
                .'  "name": "data_source_name",'."\n"
                .'  "type": "odps",'."\n"
                .'  "config":{'."\n"
                .'    "accessKey": "xxx",'."\n"
                .'    "accessSecret": "xxxs",'."\n"
                .'    "project":"xxxx",'."\n"
                .'    "table":"xxx",'."\n"
                .'    "partition":"xxxx"'."\n"
                .'  },'."\n"
                .'  "autoBuildIndex": true'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '## 返回示例'."\n"
                .'### 正确返回'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'    "result": []'."\n"
                .'}'."\n"
                .'```'."\n"
                .'### 错误返回'."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'    "result": {'."\n"
                .'       "success": false,'."\n"
                .'       "data": "some error message"'."\n"
                .'  }'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'DeleteDataSource' => [
            'summary' => '删除数据源。',
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}',
            'methods' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据源名称',
                        'description' => '数据源名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_test_api',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => '索引信息',
                                'description' => '返回参数',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '删除数据源',
            'description' => '## 方法'."\n"
                .'`DELETE`'."\n"
                ."\n"
                .'## URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`',
            'requestParamsDescription' => '## 请求示例'."\n"
                .'`DELETE /openapi/ha3/instances/ha3_instances_id/data-sources/my_dataSource`'."\n",
            'responseParamsDescription' => '## 返回示例'."\n"
                .'### 正确返回'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'    "result": []'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ModifyDataSource' => [
            'summary' => '修改数据源。',
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '数据源名称',
                        'description' => '数据源名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_test_api',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'  "name": "data_source_name",'."\n"
                            .'  "type": "odps",'."\n"
                            .'  "config":{'."\n"
                            .'    "accessKey": "xxx",'."\n"
                            .'    "accessSecret": "xxxs",'."\n"
                            .'    "project":"xxxx",'."\n"
                            .'    "table":"xxx",'."\n"
                            .'    "partition":"xxxx"'."\n"
                            .'  },'."\n"
                            .'  "autoBuildIndex": true'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => '索引信息',
                                'description' => '返回参数',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改数据源',
            'description' => '## 方法'."\n"
                .'`PUT`'."\n"
                ."\n"
                .'## URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`',
            'requestParamsDescription' => '## 请求示例'."\n"
                .'```'."\n"
                .'PUT /openapi/ha3/instances/ha3_instances_id/data-sources/my_data_source'."\n"
                ."\n"
                .'{'."\n"
                .'  "name": "data_source_name",'."\n"
                .'  "type": "odps",'."\n"
                .'  "config":{'."\n"
                .'    "accessKey": "xxx",'."\n"
                .'    "accessSecret": "xxxs",'."\n"
                .'    "project":"xxxx",'."\n"
                .'    "table":"xxx",'."\n"
                .'    "partition":"xxxx"'."\n"
                .'  },'."\n"
                .'  "autoBuildIndex": true'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '## 返回示例'."\n"
                .'### 正确返回'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'    "result": []'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'GetDataSource' => [
            'summary' => '获取某一数据源。',
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据源的名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ha-cn-pl32rf0****_test_api',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
                            ],
                            'result' => [
                                'title' => 'DataSource',
                                'description' => '数据源信息列表',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'title' => '数据源名',
                                        'description' => '数据源名称',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****_test_api',
                                    ],
                                    'type' => [
                                        'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                                        'description' => '数据源类型',
                                        'type' => 'string',
                                        'example' => 'odps',
                                    ],
                                    'domain' => [
                                        'title' => '离线部署',
                                        'description' => '离线部署',
                                        'type' => 'string',
                                        'example' => 'vpc_hz_domain_1',
                                    ],
                                    'indexes' => [
                                        'title' => '数据源产出的index',
                                        'description' => '索引列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '索引表',
                                            'type' => 'string',
                                            'example' => 'index1',
                                        ],
                                    ],
                                    'lastFulTime' => [
                                        'title' => '上一次全量时间',
                                        'description' => '上一次全量时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1718787219',
                                    ],
                                    'status' => [
                                        'title' => '表状态 (NEW, PUBLISH, TRASH)',
                                        'description' => '数据源状态：new: 创建中； publish: 正常； trash: 删除中',
                                        'type' => 'string',
                                        'example' => 'new',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": {\\n    \\"name\\": \\"ha-cn-pl32rf0****_test_api\\",\\n    \\"type\\": \\"odps\\",\\n    \\"domain\\": \\"vpc_hz_domain_1\\",\\n    \\"indexes\\": [\\n      \\"index1\\"\\n    ],\\n    \\"lastFulTime\\": 1718787219,\\n    \\"status\\": \\"new\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取某一数据源',
            'description' => '### 方法'."\n"
                .'`GET`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`',
            'requestParamsDescription' => '### 请求示例'."\n"
                .'`GET /openapi/ha3/instances/ha3_instances_id/data-sources/my_data_source`',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": {'."\n"
                .'    "name": "data_source_name",'."\n"
                .'    "type": "odps",'."\n"
                .'    "domain": "test",  // 离线部署    '."\n"
                .'    "indexes": ['."\n"
                .'      "index1",'."\n"
                .'      "index2"'."\n"
                .'    ],'."\n"
                .'    "partitions": ['."\n"
                .'      "ds=2020",'."\n"
                .'      "ds=2021"'."\n"
                .'    ],'."\n"
                .'    "lastFulTime": 1628502036000,'."\n"
                .'    "config":{'."\n"
                .'      "accessKey": "xxx",'."\n"
                .'      "accessSecret": "xxxs",'."\n"
                .'      "project":"xxxx",'."\n"
                .'      "table":"xxx",'."\n"
                .'      "partition":"xxxx"'."\n"
                .'    },'."\n"
                .'    "autoBuildIndex": true,'."\n"
                .'    "status": "new"	   // new: 创建中； publish: 正常； trash: 删除中'."\n"
                .'   '."\n"
                .'  }'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListDataSources' => [
            'summary' => '获取数据源列表。',
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '93A9E542-8CF8-5BA6-99AB-94C0FE520429',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => '返回参数',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据源信息列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'title' => '数据源名',
                                            'description' => '数据源名称。',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_test_api',
                                        ],
                                        'type' => [
                                            'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                                            'description' => '类型',
                                            'type' => 'string',
                                            'example' => 'odps',
                                        ],
                                        'domain' => [
                                            'title' => '离线部署',
                                            'description' => '离线部署',
                                            'type' => 'string',
                                            'example' => 'vpc_hz_domain_1',
                                        ],
                                        'indexes' => [
                                            'title' => '数据源产出的index',
                                            'description' => '索引列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '数据源索引。',
                                                'type' => 'string',
                                                'example' => 'index1',
                                            ],
                                        ],
                                        'lastFulTime' => [
                                            'title' => '上一次全量时间',
                                            'description' => '上一次全量时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1718787785',
                                        ],
                                        'status' => [
                                            'title' => '表状态 (NEW, PUBLISH, TRASH)',
                                            'description' => '数据源状态：new: 创建中； publish: 正常； trash: 删除中',
                                            'type' => 'string',
                                            'example' => 'new',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93A9E542-8CF8-5BA6-99AB-94C0FE520429\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"ha-cn-pl32rf0****_test_api\\",\\n      \\"type\\": \\"odps\\",\\n      \\"domain\\": \\"vpc_hz_domain_1\\",\\n      \\"indexes\\": [\\n        \\"index1\\"\\n      ],\\n      \\"lastFulTime\\": 1718787785,\\n      \\"status\\": \\"new\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取数据源列表',
            'description' => '## 方法'."\n"
                .'`GET`'."\n"
                ."\n"
                .'## URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/data-sources`'."\n",
            'requestParamsDescription' => '## 请求示例'."\n"
                .'`GET /openapi/ha3/instances/ha3_instances_id/data-sources`',
            'responseParamsDescription' => '## 返回示例'."\n"
                .'### 正确返回'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "name": "data_source_name",'."\n"
                .'      "type": "odps",'."\n"
                .'      "domain": "test",  // 离线部署'."\n"
                .'      "indexes": ['."\n"
                .'        "index1",'."\n"
                .'        "index2"'."\n"
                .'      ],'."\n"
                .'      "partitions": ['."\n"
                .'        "ds=2020"'."\n"
                .'        "ds=2021"'."\n"
                .'      ],'."\n"
                .'      "lastFullTime": 1628502036000,'."\n"
                .'      "config":{'."\n"
                .'        "accessKey": "xxx",'."\n"
                .'        "accessSecret": "xxxs",'."\n"
                .'        "project":"xxxx",'."\n"
                .'        "table":"xxx",'."\n"
                .'        "partition":"xxxx"'."\n"
                .'      },'."\n"
                .'      "autoBuildIndex": true,'."\n"
                .'      "status": "new"	   // new: 创建中； publish: 正常； trash: 删除中'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "name": "data_source_name",'."\n"
                .'      "type": "odps",'."\n"
                .'      "domain": "test",  // 离线部署      '."\n"
                .'      "indexes": ['."\n"
                .'        "index1",'."\n"
                .'        "index2"'."\n"
                .'      ],'."\n"
                .'      "partitions": ['."\n"
                .'        "ds=2020"'."\n"
                .'        "ds=2021"'."\n"
                .'      ],'."\n"
                .'      "lastFullTime": 1628502036000,'."\n"
                .'      "config":{'."\n"
                .'        "accessKey": "xxx",'."\n"
                .'        "accessSecret": "xxxs",'."\n"
                .'        "project":"xxxx",'."\n"
                .'        "table":"xxx",'."\n"
                .'        "partition":"xxxx"'."\n"
                .'      },'."\n"
                .'      "autoBuildIndex": true,'."\n"
                .'      "status": "new"   // new: 创建中； publish: 正常； trash: 删除中'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListDataSourceSchemas' => [
            'summary' => '获取某一数据源的schema信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据源名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_test_api',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => '返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'schema信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'title' => '字段名称',
                                            'description' => '字段名称',
                                            'type' => 'string',
                                            'example' => 'id',
                                        ],
                                        'custom' => [
                                            'title' => '是否自定义字段',
                                            'description' => '是否自定义字段。取值：-**true**：是-**false**：否',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'type' => [
                                            'title' => '字段类型',
                                            'description' => '字段类型',
                                            'type' => 'string',
                                            'example' => 'STRING',
                                        ],
                                        'attribute' => [
                                            'description' => '是否为属性字段。取值：-**true**：是-**false**：否',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'summary' => [
                                            'title' => '可展示',
                                            'description' => '是否可展示。取值：-**true**：是-**false**：否',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'primaryKey' => [
                                            'title' => '主键',
                                            'description' => '主键',
                                            'type' => 'object',
                                            'properties' => [
                                                'isPrimaryKey' => [
                                                    'description' => '是否为主键。取值：-**true**：是-**false**：否',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'hasPrimaryKeyAttribute' => [
                                                    'description' => '是否有主键属性。取值：-**true**：是-**false**：否',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'isPrimaryKeySorted' => [
                                                    'description' => '是否可排序。取值：-**true**：是-**false**：否',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                            ],
                                        ],
                                        'addIndex' => [
                                            'title' => '是否添加了index属性',
                                            'description' => '是否添加了index属性。取值：-**true**：是-**false**：否',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"id\\",\\n      \\"custom\\": false,\\n      \\"type\\": \\"STRING\\",\\n      \\"attribute\\": false,\\n      \\"summary\\": false,\\n      \\"primaryKey\\": {\\n        \\"isPrimaryKey\\": false,\\n        \\"hasPrimaryKeyAttribute\\": false,\\n        \\"isPrimaryKeySorted\\": false\\n      },\\n      \\"addIndex\\": false\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取某一数据源的schema信息',
            'description' => '## 方法'."\n"
                .'`GET`'."\n"
                ."\n"
                .'## URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas`',
            'requestParamsDescription' => '## 请求示例'."\n"
                .'`GET /openapi/ha3/instances/ha3_instances_id/data-sources/my_data_source/schemas`',
            'responseParamsDescription' => '## 返回示例'."\n"
                .'### 正确返回'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result":['."\n"
                .'    {'."\n"
                .'      "summary": false,'."\n"
                .'      "custom": false,'."\n"
                .'      "addIndex": false,'."\n"
                .'      "type": "INT64",'."\n"
                .'      "name": "id",'."\n"
                .'      "attribute": false,'."\n"
                .'      "primaryKey": {'."\n"
                .'        "hasPrimaryKeyAttribute": false,'."\n"
                .'        "primaryKeySorted": false,'."\n"
                .'        "primaryKey": false'."\n"
                .'      }'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "summary": false,'."\n"
                .'      "custom": false,'."\n"
                .'      "addIndex": false,'."\n"
                .'      "type": "STRING",'."\n"
                .'      "name": "fb_boolean",'."\n"
                .'      "attribute": false,'."\n"
                .'      "primaryKey": {'."\n"
                .'        "hasPrimaryKeyAttribute": false,'."\n"
                .'        "primaryKeySorted": false,'."\n"
                .'        "primaryKey": false'."\n"
                .'      }'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListDateSourceGenerations' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据源名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_test_api',
                    ],
                ],
                [
                    'name' => 'validStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '有效状态（默认为true）'."\n"
                            ."\n"
                            .'1. true 返回Task执行完成且未过期的generation'."\n"
                            .'2. false 返回所有generation',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'domainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源部署机房',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'bj_vpc_domain_1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => 'List',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'generation' => [
                                            'title' => 'generation 主键',
                                            'description' => '索引全量版本',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1626143930',
                                        ],
                                        'createTime' => [
                                            'title' => '全量时间',
                                            'description' => 'build index 开始时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1626143673',
                                        ],
                                        'status' => [
                                            'title' => '数据状态',
                                            'description' => '状态',
                                            'type' => 'string',
                                            'example' => 'STOPPED',
                                        ],
                                        'buildDeployId' => [
                                            'title' => 'buildDeployId',
                                            'description' => '离线部署id',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '122',
                                        ],
                                        'partition' => [
                                            'title' => '数据描述',
                                            'description' => 'Key 索引名称'."\n"
                                                .'value 分片数量',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'description' => '分片数',
                                                'example' => '1',
                                            ],
                                        ],
                                        'timestamp' => [
                                            'title' => '时间戳',
                                            'description' => '增量时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1626143673',
                                        ],
                                        'dataDumpRoot' => [
                                            'title' => 'dump表索引文件存储地址',
                                            'description' => 'dump表索引文件存储地址',
                                            'type' => 'string',
                                            'example' => 'hdfs://opensearch/dump.json',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": [\\n    {\\n      \\"generation\\": 1626143930,\\n      \\"createTime\\": 1626143673,\\n      \\"status\\": \\"STOPPED\\",\\n      \\"buildDeployId\\": 122,\\n      \\"partition\\": {\\n        \\"key\\": 1\\n      },\\n      \\"timestamp\\": 1626143673,\\n      \\"dataDumpRoot\\": \\"hdfs://opensearch/dump.json\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取数据源的历史回流信息',
            'summary' => '获取数据源的历史回流信息。',
            'description' => '### 方法'."\n"
                .'`GET`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations?domainName={domainName}`',
            'requestParamsDescription' => '### 请求示例'."\n"
                .'`GET /openapi/ha3/instances/ha3_instances_id/data-sources/my_data_source/generations??domainName=pre_domain_1`'."\n",
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "generationId":1626143930,'."\n"
                .'      "timestamp":16261436737,'."\n"
                .'      "createTime":1626143673,'."\n"
                .'      "status":"STOPPED",'."\n"
                .'      "partition":{'."\n"
                .'        "index1":1'."\n"
                .'      },'."\n"
                .'      "buildDeployId":122'."\n"
                .'    },{'."\n"
                .'      "generationId":1626143930,'."\n"
                .'      "timestamp":16261435453,'."\n"
                .'      "createTime":1626143673,'."\n"
                .'      "status":"STOPPED",'."\n"
                .'      "partition":{'."\n"
                .'        "index1":1'."\n"
                .'      },'."\n"
                .'      "buildDeployId":122'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetDataSourceDeploy' => [
            'summary' => '获取数据源部署信息',
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'deployName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '机房',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc_hz_domain_1',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据源的名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_test_api',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => 'Deploy',
                                'description' => 'Deploy',
                                'type' => 'object',
                                'properties' => [
                                    'storage' => [
                                        'description' => '数据源信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'endpoint' => [
                                                'title' => 'odps相关',
                                                'description' => 'odps数据源的endpoint',
                                                'type' => 'string',
                                                'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                                            ],
                                            'accessKey' => [
                                                'description' => 'odps数据源ak',
                                                'type' => 'string',
                                                'example' => 'L***p',
                                            ],
                                            'accessSecret' => [
                                                'description' => 'odps数据源ak secret',
                                                'type' => 'string',
                                                'example' => '5**9a6',
                                            ],
                                            'project' => [
                                                'description' => 'odps数据源项目名称',
                                                'type' => 'string',
                                                'example' => 'wireless_1688_personal_rec',
                                            ],
                                            'partition' => [
                                                'description' => 'odps数据源分区。例如：ds=20180102',
                                                'type' => 'string',
                                                'example' => 'ds=20220926',
                                            ],
                                            'table' => [
                                                'title' => 'saro、odps相关',
                                                'description' => 'saro、odps数据源表名',
                                                'type' => 'string',
                                                'example' => 'behavior',
                                            ],
                                            'namespace' => [
                                                'title' => 'saro相关',
                                                'description' => 'saro相关',
                                                'type' => 'string',
                                                'example' => 'lazada-campaign-flink',
                                            ],
                                            'path' => [
                                                'title' => 'hdfs相关',
                                                'description' => 'hdfs相关',
                                                'type' => 'string',
                                                'example' => '/beiming_xobject/dwd_xobjectsandbox__list_create_action_by_new/',
                                            ],
                                            'ossPath' => [
                                                'title' => 'oss数据源相关',
                                                'description' => 'oss数据源相关',
                                                'type' => 'string',
                                                'example' => '/opensearch/test.json',
                                            ],
                                            'bucket' => [
                                                'description' => 'oss bucket',
                                                'type' => 'string',
                                                'example' => 'test-oss-bucket',
                                            ],
                                        ],
                                    ],
                                    'autoBuildIndex' => [
                                        'title' => '是否开启自动全量',
                                        'description' => '是否开启自动全量',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'processor' => [
                                        'description' => '进程参数',
                                        'type' => 'object',
                                        'properties' => [
                                            'args' => [
                                                'title' => '进程启动参数',
                                                'description' => '进程启动参数',
                                                'type' => 'string',
                                                'example' => '{'."\n"
                                                    .'	"processInfos": [],'."\n"
                                                    .'	"groupId": "opensearch",'."\n"
                                                    .'	"containerConfigs": [],'."\n"
                                                    .'	"priority": {'."\n"
                                                    .'		"minor_priority": 0,'."\n"
                                                    .'		"major_priority": 64'."\n"
                                                    .'	}'."\n"
                                                    .'}',
                                            ],
                                            'resource' => [
                                                'title' => '资源信息',
                                                'description' => '资源信息',
                                                'type' => 'string',
                                                'example' => '[{'."\n"
                                                    .'	"_bs_role": "processor.*.inc",'."\n"
                                                    .'	"priority": {'."\n"
                                                    .'		"major_priority": 32,'."\n"
                                                    .'		"minor_priority": 0'."\n"
                                                    .'	},'."\n"
                                                    .'	"slotResources": [{'."\n"
                                                    .'		"slotResources": [{'."\n"
                                                    .'			"amount": 200,'."\n"
                                                    .'			"name": "cpu"'."\n"
                                                    .'		}, {'."\n"
                                                    .'			"amount": 8192,'."\n"
                                                    .'			"name": "mem"'."\n"
                                                    .'		}, {'."\n"
                                                    .'			"amount": 0,'."\n"
                                                    .'			"name": "T4"'."\n"
                                                    .'		}, {'."\n"
                                                    .'			"amount": 10,'."\n"
                                                    .'			"type": "SCALAR",'."\n"
                                                    .'			"name": "disk_ratio_9999"'."\n"
                                                    .'		}, {'."\n"
                                                    .'			"amount": 20480,'."\n"
                                                    .'			"type": "SCALAR",'."\n"
                                                    .'			"name": "disk_size_9999"'."\n"
                                                    .'		}]'."\n"
                                                    .'	}]'."\n"
                                                    .'}]',
                                            ],
                                        ],
                                    ],
                                    'extend' => [
                                        'description' => '字段配置的扩展的内容'."\n"
                                            .'key: 向量字段(vector)、'."\n"
                                            .'需embeding字段(embeding)',
                                        'type' => 'object',
                                        'properties' => [
                                            'saro' => [
                                                'description' => 'saro数据源信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'path' => [
                                                        'description' => 'hdfs数据源路径',
                                                        'type' => 'string',
                                                        'example' => 'dist-dmj-job/src/main/java',
                                                    ],
                                                    'version' => [
                                                        'description' => '版本号',
                                                        'type' => 'string',
                                                        'example' => '0.6.0',
                                                    ],
                                                ],
                                            ],
                                            'hdfs' => [
                                                'description' => 'hdfs信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'path' => [
                                                        'description' => 'hdfs数据源路径',
                                                        'type' => 'string',
                                                        'example' => 'dist-dmj-job/src/main/java',
                                                    ],
                                                ],
                                            ],
                                            'odps' => [
                                                'description' => 'odps数据源信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'partitions' => [
                                                        'description' => '数据源的分区信息',
                                                        'type' => 'object',
                                                        'additionalProperties' => [
                                                            'type' => 'string',
                                                            'example' => 'ds=20220926',
                                                            'description' => '数据源的分区信息',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'oss' => [
                                                'description' => 'oss信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'path' => [
                                                        'description' => 'oss数据源路径',
                                                        'type' => 'string',
                                                        'example' => 'oss://opensearch',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'swift' => [
                                        'title' => '增量swift信息',
                                        'description' => '增量swift信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'zk' => [
                                                'description' => 'zk',
                                                'type' => 'string',
                                                'example' => 'test-zk',
                                            ],
                                            'topic' => [
                                                'description' => 'topic',
                                                'type' => 'string',
                                                'example' => 'ha-cn-pl32rf0****_test_api',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {\\n    \\"storage\\": {\\n      \\"endpoint\\": \\"http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api\\",\\n      \\"accessKey\\": \\"L***p\\",\\n      \\"accessSecret\\": \\"5**9a6\\",\\n      \\"project\\": \\"wireless_1688_personal_rec\\",\\n      \\"partition\\": \\"ds=20220926\\",\\n      \\"table\\": \\"behavior\\",\\n      \\"namespace\\": \\"lazada-campaign-flink\\",\\n      \\"path\\": \\"/beiming_xobject/dwd_xobjectsandbox__list_create_action_by_new/\\",\\n      \\"ossPath\\": \\"/opensearch/test.json\\",\\n      \\"bucket\\": \\"test-oss-bucket\\"\\n    },\\n    \\"autoBuildIndex\\": true,\\n    \\"processor\\": {\\n      \\"args\\": \\"{\\\\n\\\\t\\\\\\"processInfos\\\\\\": [],\\\\n\\\\t\\\\\\"groupId\\\\\\": \\\\\\"opensearch\\\\\\",\\\\n\\\\t\\\\\\"containerConfigs\\\\\\": [],\\\\n\\\\t\\\\\\"priority\\\\\\": {\\\\n\\\\t\\\\t\\\\\\"minor_priority\\\\\\": 0,\\\\n\\\\t\\\\t\\\\\\"major_priority\\\\\\": 64\\\\n\\\\t}\\\\n}\\",\\n      \\"resource\\": \\"[{\\\\n\\\\t\\\\\\"_bs_role\\\\\\": \\\\\\"processor.*.inc\\\\\\",\\\\n\\\\t\\\\\\"priority\\\\\\": {\\\\n\\\\t\\\\t\\\\\\"major_priority\\\\\\": 32,\\\\n\\\\t\\\\t\\\\\\"minor_priority\\\\\\": 0\\\\n\\\\t},\\\\n\\\\t\\\\\\"slotResources\\\\\\": [{\\\\n\\\\t\\\\t\\\\\\"slotResources\\\\\\": [{\\\\n\\\\t\\\\t\\\\t\\\\\\"amount\\\\\\": 200,\\\\n\\\\t\\\\t\\\\t\\\\\\"name\\\\\\": \\\\\\"cpu\\\\\\"\\\\n\\\\t\\\\t}, {\\\\n\\\\t\\\\t\\\\t\\\\\\"amount\\\\\\": 8192,\\\\n\\\\t\\\\t\\\\t\\\\\\"name\\\\\\": \\\\\\"mem\\\\\\"\\\\n\\\\t\\\\t}, {\\\\n\\\\t\\\\t\\\\t\\\\\\"amount\\\\\\": 0,\\\\n\\\\t\\\\t\\\\t\\\\\\"name\\\\\\": \\\\\\"T4\\\\\\"\\\\n\\\\t\\\\t}, {\\\\n\\\\t\\\\t\\\\t\\\\\\"amount\\\\\\": 10,\\\\n\\\\t\\\\t\\\\t\\\\\\"type\\\\\\": \\\\\\"SCALAR\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"name\\\\\\": \\\\\\"disk_ratio_9999\\\\\\"\\\\n\\\\t\\\\t}, {\\\\n\\\\t\\\\t\\\\t\\\\\\"amount\\\\\\": 20480,\\\\n\\\\t\\\\t\\\\t\\\\\\"type\\\\\\": \\\\\\"SCALAR\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"name\\\\\\": \\\\\\"disk_size_9999\\\\\\"\\\\n\\\\t\\\\t}]\\\\n\\\\t}]\\\\n}]\\"\\n    },\\n    \\"extend\\": {\\n      \\"saro\\": {\\n        \\"path\\": \\"dist-dmj-job/src/main/java\\",\\n        \\"version\\": \\"0.6.0\\"\\n      },\\n      \\"hdfs\\": {\\n        \\"path\\": \\"dist-dmj-job/src/main/java\\"\\n      },\\n      \\"odps\\": {\\n        \\"partitions\\": {\\n          \\"key\\": \\"ds=20220926\\"\\n        }\\n      },\\n      \\"oss\\": {\\n        \\"path\\": \\"oss://opensearch\\"\\n      }\\n    },\\n    \\"swift\\": {\\n      \\"zk\\": \\"test-zk\\",\\n      \\"topic\\": \\"ha-cn-pl32rf0****_test_api\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取数据源部署信息',
        ],
        'ListIndexRecoverRecords' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/list-recover-records',
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
                'operationType' => 'list',
                'abilityTreeCode' => '218752',
                'abilityTreeNodes' => [
                    'FEATUREopensearchSLLBIN',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_api',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'generationId' => [
                                'description' => '索引全量版本',
                                'type' => 'string',
                                'example' => '1708674867',
                            ],
                            'desc' => [
                                'description' => '备注',
                                'type' => 'string',
                                'example' => '自定义配置',
                            ],
                            'finishedTime' => [
                                'description' => '本次发布的完成时间',
                                'type' => 'string',
                                'example' => '2024-06-07 16:43:00',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"generationId\\": \\"1708674867\\",\\n  \\"desc\\": \\"自定义配置\\",\\n  \\"finishedTime\\": \\"2024-06-07 16:43:00\\"\\n}","type":"json"}]',
            'title' => '获取恢复数据记录',
        ],
        'ListPausePolicys' => [
            'path' => '/openapi/ha3/instances/{instanceId}/pause-policies',
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
                'operationType' => 'list',
                'abilityTreeCode' => '178009',
                'abilityTreeNodes' => [
                    'FEATUREopensearch5EAGY5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'pauseAll' => [
                                            'title' => '暂停全部目标下发',
                                            'description' => '暂停全部目标下发',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'pauseIndex' => [
                                            'title' => '暂停新的全量版本下发',
                                            'description' => '暂停新的全量版本下发',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'pauseIndexBatch' => [
                                            'title' => '暂停批次增量下发',
                                            'description' => '暂停批次增量下发',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'pauseBiz' => [
                                            'title' => '暂停配置下发',
                                            'description' => '暂停配置下发',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'pauseRuntime' => [
                                            'title' => '暂停实时增量',
                                            'description' => '暂停实时增量',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                    'description' => '返回结果',
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {\\n    \\"key\\": {\\n      \\"pauseAll\\": true,\\n      \\"pauseIndex\\": true,\\n      \\"pauseIndexBatch\\": true,\\n      \\"pauseBiz\\": true,\\n      \\"pauseRuntime\\": true\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取暂停策略',
        ],
        'ModifyPausePolicy' => [
            'path' => '/openapi/ha3/instances/{instanceId}/pause-policies',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '178006',
                'abilityTreeNodes' => [
                    'FEATUREopensearch0Z9KDD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'pauseAll' => [
                                    'title' => '暂停全部目标下发',
                                    'description' => '暂停全部目标下发',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'pauseIndex' => [
                                    'title' => '暂停新的全量版本下发',
                                    'description' => '暂停新的全量版本下发',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'pauseIndexBatch' => [
                                    'title' => '暂停批次增量下发',
                                    'description' => '暂停批次增量下发',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'pauseBiz' => [
                                    'title' => '暂停配置下发',
                                    'description' => '暂停配置下发',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'pauseRuntime' => [
                                    'title' => '暂停实时增量',
                                    'description' => '暂停实时增量',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                            ],
                            'description' => '请求体参数',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '0B1FF998-BB8D-5182-BFC0-E471AA77095A',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0B1FF998-BB8D-5182-BFC0-E471AA77095A\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改暂停开关',
        ],
        'CreateCluster' => [
            'summary' => '添加集群。',
            'path' => '/openapi/ha3/instances/{instanceId}/clusters',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '104657',
                'abilityTreeNodes' => [
                    'FEATUREopensearchA6GC80',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'title' => '集群名称',
                                'description' => '集群名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'hz_pre_vpc_domain_1',
                            ],
                            'description' => [
                                'title' => '集群描述',
                                'description' => '集群描述。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '自定义描述',
                            ],
                            'queryNode' => [
                                'title' => '查询节点配置',
                                'description' => '查询节点详情信息',
                                'type' => 'object',
                                'properties' => [
                                    'number' => [
                                        'title' => '节点数量',
                                        'description' => '	查询节点数量',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '2',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'dataNode' => [
                                'title' => '数据节点配置',
                                'description' => '数据节点详情信息',
                                'type' => 'object',
                                'properties' => [
                                    'number' => [
                                        'title' => '节点数量',
                                        'description' => '数据节点的数量',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '2',
                                    ],
                                    'partition' => [
                                        'description' => '分片数',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '2',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'autoLoad' => [
                                'title' => '添加完成后是否自动挂载',
                                'description' => '是否自动挂载',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => '结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '添加集群',
            'description' => '### Method'."\n"
                ."\n"
                .'`POST`'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'`/openapi/ha3/instances/{instanceId}/clusters`',
            'requestParamsDescription' => '### Sample requests'."\n"
                ."\n"
                .'`POST/openapi/ha3/instances/ha3_instance_id/clusters`'."\n"
                ."\n"
                .'    {'."\n"
                .'      "name":"cluster1",'."\n"
                .'      "queryNode": {'."\n"
                .'        "number": 1'."\n"
                .'      },'."\n"
                .'      "dataNode": {'."\n"
                .'        "number": 2'."\n"
                .'      },'."\n"
                .'      "description":"The description of the cluster",'."\n"
                .'      "autoLoad":true'."\n"
                .'    }',
            'responseParamsDescription' => '### Sample responses'."\n"
                ."\n"
                .'    {'."\n"
                .'      "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'      "result": []'."\n"
                .'    }'."\n"
                ."\n"
                .'For more information, see [Response structure](https://help.aliyun.com/document_detail/465311.html).'."\n",
        ],
        'RemoveCluster' => [
            'summary' => '删除某一集群。',
            'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}',
            'methods' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '集群名称',
                        'description' => '集群名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bj_vpc_domain_2',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
                            ],
                            'result' => [
                                'title' => '结果',
                                'description' => '结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '删除某一集群',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'DELETE'."\n"
                .'```'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/clusters/{clusterName}'."\n"
                .'```'."\n",
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'﻿'."\n"
                .'DELETE /openapi/ha3/instances/ha3_instance_name/clusters/my_cluster_name'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'﻿'."\n"
                .'  "result": []'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ModifyClusterDesc' => [
            'summary' => '更改集群的描述信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '集群名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sz_vpc_domain_1',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'    "description": "自定义描述"'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D39EE0F1-D7EF-5F46-B781-6BF4185308B0',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D39EE0F1-D7EF-5F46-B781-6BF4185308B0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '更改集群的描述信息',
            'description' => '### 方法'."\n"
                .'`PUT`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc`。',
            'requestParamsDescription' => '| 名称        | 是否必须 | 类型   | 描述           |'."\n"
                .'| ----------- | -------- | ------ | -------------- |'."\n"
                .'| description | 是       | String | 集群的描述信息 |'."\n"
                ."\n"
                .'### 请求示例'."\n"
                .'`PUT /openapi/ha3/instances/ha3_instance_name/clusters/my_cluster_name/desc`'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "description":"this is descrition"'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": []'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ModifyClusterOfflineConfig' => [
            'summary' => '修改集群的配置信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/cluster-offline-config',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '104631',
                'abilityTreeNodes' => [
                    'FEATUREopensearchA6GC80',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求结构。',
                        'type' => 'object',
                        'properties' => [
                            'dataSourceName' => [
                                'description' => '数据源名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ha-cn-pl32rf0****_test_api',
                            ],
                            'dataSourceType' => [
                                'title' => '数据源类型 (odps: maxComputer, swift: swift, unKnow)',
                                'description' => '数据源类型 (odps: maxComputer, swift: swift, unKnow)',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'odps',
                            ],
                            'domain' => [
                                'title' => '离线部署',
                                'description' => '数据源部署',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vpc_hz_domain_1',
                            ],
                            'config' => [
                                'title' => 'key:配置名称',
                                'description' => 'key:配置名称',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'description' => 'value:配置版本号',
                                    'example' => '1',
                                ],
                            ],
                            'partition' => [
                                'title' => '对于odps数据源触发全量时必传',
                                'description' => '对于odps数据源触发全量时必传',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ds=20211202',
                            ],
                            'dataTimeSec' => [
                                'title' => '对于api推送数据源触发全量时必传',
                                'description' => '对于API推送数据源触发全量时必传',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1640867288',
                            ],
                            'buildMode' => [
                                'title' => '索引重建方式 (api: API方式推送数据源, indexRecover: 从索引中恢复数据源)',
                                'description' => '索引重建方式 (api: API方式推送数据源, indexRecover: 从索引中恢复数据源)',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'indexRecover',
                            ],
                            'generation' => [
                                'title' => '从索引中恢复数据源，dump表的generation',
                                'description' => '索引全量版本',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '160142641',
                            ],
                            'pushMode' => [
                                'title' => '推送方式：PUSH_ONLY（仅推送配置）、PUSH_GENERATION （指定generation）、TRIGGER_BUILD(推送配置并做全量)',
                                'description' => '推送配置方式: 默认仅推送配置',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PUSH_ONLY',
                            ],
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => '结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改集群的配置信息',
            'description' => '## 请求语法'."\n"
                .'```'."\n"
                .'PUT /openapi/ha3/instances/{instanceId}/cluster-offline-config'."\n"
                .'```。',
            'requestParamsDescription' => '| 名称                    | 是否必须 | 类型    | 描述                                                         |'."\n"
                .'| ----------------------- | -------- | ------- | ------------------------------------------------------------ |'."\n"
                .'| dataSource              | 是       | String  | 数据源名称                                                   |'."\n"
                .'| domain                  | 是       | String  | 数据源部署                                                   |'."\n"
                .'| indexes                 | 是       | Object  | 索引结构的描述信息                                           |'."\n"
                .'| advancedConfigVersionId | 是       | Integer | 高级配置的版本id                                             |'."\n"
                .'| triggerBuild            | 是       | boolean | true 推送配置并触发索引重建false 配置等待下一次索引重建后生效 |'."\n"
                .'| buildMode               | 否       | Integer | 重建index方式 api:默认方式 indexRecover:索引中恢复数据源 （目前只有数据源类型为hdfs必填） |'."\n"
                .'| generation              | 否       | Long    | 历史回流ID                                                   |'."\n"
                .'| partition               | 否       | String  | 索引重建选择的数据源的数据分区，当触发odps索引重建时必传     |'."\n"
                .'| dataTimeSec             | 否       | Integer | int类型，秒级时间戳，表示API推送数据源触发重建的数据时间，API推送触发重建时必填项 |'."\n"
                .'| dataSourceType          | 否       | Enum    | 当triggerBuild=true时必传（odps或swift）                     |'."\n"
                ."\n"
                .'### 请求示例'."\n"
                .'`PUT /openapi/ha3/instances/ha3_instance_name/cluster-offline-config`'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "dataSource": "test1",'."\n"
                .'    "domain": "xx",'."\n"
                .'    "indexes": ['."\n"
                .'        {'."\n"
                .'            "name": "index1",'."\n"
                .'            "versionId": 1'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'            "name": "index2",'."\n"
                .'            "versionId": 1'."\n"
                .'        }'."\n"
                .'    ],'."\n"
                .'    "advancedConfigVersionId": 2,'."\n"
                .'    "triggerBuild": true,'."\n"
                .'    "partition": "20201010", //odps触发重建时必填'."\n"
                .'    "dataSourceType": "odps", // odps或swift，必填项，不传报错'."\n"
                .'    "dataTimeSec": 1640867288 //int类型，秒级时间戳，表示API推送数据源触发重建的数据时间，API推送触发重建时必填项'."\n"
                .'  '."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": []'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ModifyClusterOnlineConfig' => [
            'summary' => '修改集群的在线配置信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/cluster-online-config',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'config' => [
                                'title' => 'key:配置名称',
                                'description' => '配置信息',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'description' => '配置版本号',
                                    'example' => '2',
                                ],
                            ],
                            'clusters' => [
                                'title' => '集群信息',
                                'description' => '集群信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '集群列表。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '['."\n"
                                        .'	"hz_pre_vpc_domain_1"'."\n"
                                        .']',
                                ],
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
                        'description' => '{}',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改集群的在线配置信息',
            'description' => '### 方法'."\n"
                .'`PUT`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/cluster-online-config`',
            'requestParamsDescription' => '### 请求示例'."\n"
                .'`PUT /openapi/ha3/instances/ha3_instance_name/cluster-online-config`'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "advancedConfigVersionId": 2,'."\n"
                .'    "clusters": ['."\n"
                .'      "hz_pre_vpc_domain_1"'."\n"
                .'    ]'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": []'."\n"
                .'}'."\n"
                .'```'."\n"
                .'**详情可参考[响应结构](~~465311~~)**',
        ],
        'GetCluster' => [
            'summary' => '获取某一集群的详细信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}',
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
                'abilityTreeCode' => '104163',
                'abilityTreeNodes' => [
                    'FEATUREopensearch5EAGY5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '集群名称',
                        'description' => '集群名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bj_vpc_domain_2',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'title' => '集群列表',
                                'description' => '集群列表',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'title' => '集群名称',
                                        'description' => '集群名称',
                                        'type' => 'string',
                                        'example' => 'bj_vpc_domain_2',
                                    ],
                                    'description' => [
                                        'title' => '集群描述',
                                        'description' => '集群描述',
                                        'type' => 'string',
                                        'example' => '自定义描述',
                                    ],
                                    'currentAdvanceConfigVersion' => [
                                        'title' => '高级配置生效版本',
                                        'description' => '高级配置生效版本',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                    ],
                                    'latestAdvanceConfigVersion' => [
                                        'title' => '高级配置最新版本',
                                        'description' => '高级配置最新版本',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                    ],
                                    'currentOnlineConfigVersion' => [
                                        'title' => '在线配置生效版本',
                                        'description' => '在线配置生效版本',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****_online_adv_v1',
                                    ],
                                    'latestOnlineConfigVersion' => [
                                        'title' => '在线配置最新版本',
                                        'description' => '在线配置最新版本',
                                        'type' => 'string',
                                        'example' => 'ha-cn-pl32rf0****_online_adv_v1',
                                    ],
                                    'configUpdateTime' => [
                                        'title' => '集群更新时间',
                                        'description' => '集群更新时间',
                                        'type' => 'string',
                                        'example' => '2021-08-09 00:01:02',
                                    ],
                                    'status' => [
                                        'description' => '集群的创建状态，有两个取值 NEW(创建中) or PUBLISH(创建完成)',
                                        'type' => 'string',
                                        'example' => 'NEW',
                                    ],
                                    'queryNode' => [
                                        'description' => '查询节点规格',
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'title' => '节点名称',
                                                'description' => '节点名称',
                                                'type' => 'string',
                                                'example' => 'ha-cn-pl32rf0****_qrs',
                                            ],
                                            'number' => [
                                                'description' => '节点数量。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'partition' => [
                                                'title' => '副本数量',
                                                'description' => '副本数量',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                        ],
                                    ],
                                    'dataNode' => [
                                        'description' => '数据节点规格',
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'title' => '节点名称',
                                                'description' => '节点名称',
                                                'type' => 'string',
                                                'example' => 'general',
                                            ],
                                            'number' => [
                                                'description' => '副本数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'partition' => [
                                                'description' => '分片数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                        ],
                                    ],
                                    'createTime' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2024-05-21 16:05:26',
                                    ],
                                    'config' => [
                                        'description' => '配置信息',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'name' => [
                                                        'type' => 'string',
                                                        'example' => 'ha-cn-pl32rf0****_offline_adv_v1'."\n",
                                                        'description' => '配置名称',
                                                    ],
                                                    'updateTime' => [
                                                        'type' => 'string',
                                                        'description' => '更新时间',
                                                        'example' => '2024-05-21 16:05:26',
                                                    ],
                                                    'desc' => [
                                                        'type' => 'string',
                                                        'description' => '描述',
                                                        'example' => '自定义描述',
                                                    ],
                                                ],
                                                'description' => '子配置项信息',
                                            ],
                                            'description' => '子配置项信息',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {\\n    \\"name\\": \\"bj_vpc_domain_2\\",\\n    \\"description\\": \\"自定义描述\\",\\n    \\"currentAdvanceConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n    \\"latestAdvanceConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n    \\"currentOnlineConfigVersion\\": \\"ha-cn-pl32rf0****_online_adv_v1\\",\\n    \\"latestOnlineConfigVersion\\": \\"ha-cn-pl32rf0****_online_adv_v1\\",\\n    \\"configUpdateTime\\": \\"2021-08-09 00:01:02\\",\\n    \\"status\\": \\"NEW\\",\\n    \\"queryNode\\": {\\n      \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n      \\"number\\": 1,\\n      \\"partition\\": 2\\n    },\\n    \\"dataNode\\": {\\n      \\"name\\": \\"general\\",\\n      \\"number\\": 1,\\n      \\"partition\\": 2\\n    },\\n    \\"createTime\\": \\"2024-05-21 16:05:26\\",\\n    \\"config\\": {\\n      \\"key\\": {\\n        \\"key\\": {\\n          \\"name\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\\\n\\",\\n          \\"updateTime\\": \\"2024-05-21 16:05:26\\",\\n          \\"desc\\": \\"自定义描述\\"\\n        }\\n      }\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取某一集群的详细信息',
            'description' => '### 方法'."\n"
                ."\n"
                .'`GET`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instance/{instanceId}/clusters/{clusterName}`',
            'requestParamsDescription' => '### 请求示例'."\n"
                .'`GET /openapi/ha3/instance/ha_name_example/clusters/my_cluster`',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'  "result": {'."\n"
                .'    "name": "cluster1",'."\n"
                .'    "configUpdateTime": "2021-08-09 00:01:02",'."\n"
                .'    "CurrentAdvanceConfigVersion": "test_yyds_data1",'."\n"
                .'    "lastestAdvanceConfigVersion": "test_yyds_data1",'."\n"
                .'    "currentOnlineConfigVersion": "test_yyds_data1",'."\n"
                .'    "lastestOnlineConfigVersion": "test_yyds_data1",      '."\n"
                .'    "description": "airecpre",'."\n"
                .'    "queryNode": {'."\n"
                .'      "name":"ha-cn-0ju2iimcu07_qrs",'."\n"
                .'      "number": 1'."\n"
                .'    },'."\n"
                .'    "dataNode": {'."\n"
                .'      "name":"general",'."\n"
                .'      "number": 2,'."\n"
                .'      "partition": 1'."\n"
                .'    }    '."\n"
                .'  }'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetClusterRunTimeInfo' => [
            'summary' => '获取集群信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/cluster-run-time-info',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例 ID',
                        'description' => '实例 ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
                            ],
                            'result' => [
                                'title' => '结果集',
                                'description' => '结果集',
                                'type' => 'array',
                                'items' => [
                                    'description' => '集群运行时长信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'clusterName' => [
                                            'title' => '集群名称',
                                            'description' => '集群名称',
                                            'type' => 'string',
                                            'example' => 'vpc_hz_domain_1',
                                        ],
                                        'queryNode' => [
                                            'title' => '查询结点信息',
                                            'description' => '查询结点信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'serviceStatus' => [
                                                    'title' => '服务状态',
                                                    'description' => '服务状态',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'name' => [
                                                            'description' => '集群名称',
                                                            'type' => 'string',
                                                            'example' => 'vpc_hz_domain_1'."\n",
                                                        ],
                                                        'totalSize' => [
                                                            'title' => '总大小',
                                                            'description' => '总大小',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '100',
                                                        ],
                                                        'doneSize' => [
                                                            'title' => '完成大小',
                                                            'description' => '完成大小',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '100',
                                                        ],
                                                        'donePercent' => [
                                                            'title' => '进度',
                                                            'description' => '进度',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '100',
                                                        ],
                                                    ],
                                                ],
                                                'configStatusList' => [
                                                    'description' => '配置状态列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '配置状态列表。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'configUpdateTime' => [
                                                                'description' => '集群更新时间',
                                                                'type' => 'string',
                                                                'example' => '2024-05-21 16:05:26',
                                                            ],
                                                            'name' => [
                                                                'description' => '集群名称',
                                                                'type' => 'string',
                                                                'example' => 'vpc_hz_domain_1'."\n",
                                                            ],
                                                            'totalSize' => [
                                                                'description' => '总大小',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '6',
                                                            ],
                                                            'doneSize' => [
                                                                'description' => '完成大小',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '100',
                                                            ],
                                                            'donePercent' => [
                                                                'description' => '进度',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '100',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'dataNodes' => [
                                            'title' => '数据结点信息',
                                            'description' => '数据结点信息',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '集群节点信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'dataStatusList' => [
                                                        'description' => '节点数据列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '节点数据列表。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'docSize' => [
                                                                    'description' => '存储容量 (单位:GB)',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '2',
                                                                ],
                                                                'fullVersion' => [
                                                                    'description' => '全量版本',
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                    'example' => '1718846192',
                                                                ],
                                                                'incVersion' => [
                                                                    'description' => '增量版本',
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                    'example' => '1718846192',
                                                                ],
                                                                'incUpdateTime' => [
                                                                    'description' => '增量更新时间',
                                                                    'type' => 'string',
                                                                    'example' => '2024-05-21 16:05:26',
                                                                ],
                                                                'fullUpdateTime' => [
                                                                    'description' => '全量更新时间',
                                                                    'type' => 'string',
                                                                    'example' => '2024-05-21 16:05:26',
                                                                ],
                                                                'indexConfigInfo' => [
                                                                    'description' => '索引配置',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'configMetaName' => [
                                                                            'description' => '索引配置名称',
                                                                            'type' => 'string',
                                                                            'example' => 'index_meta_name',
                                                                        ],
                                                                        'version' => [
                                                                            'description' => '索引模板的版本。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                            'example' => '1.0.0',
                                                                        ],
                                                                    ],
                                                                ],
                                                                'advanceConfigInfo' => [
                                                                    'description' => '高级配置信息',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'configMetaName' => [
                                                                            'description' => '索引配置名称',
                                                                            'type' => 'string',
                                                                            'example' => 'index_meta_name',
                                                                        ],
                                                                        'version' => [
                                                                            'description' => '版本号。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                            'example' => '1.0',
                                                                        ],
                                                                    ],
                                                                ],
                                                                'lackMemWorker' => [
                                                                    'description' => '因缺少内存而失败的worker的name',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '失败的worker的name',
                                                                        'type' => 'string',
                                                                        'example' => 'test-fail-worker'."\n",
                                                                    ],
                                                                ],
                                                                'deployFailedWorker' => [
                                                                    'description' => '因部署失败而失败的worker的name',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '失败的worker的name',
                                                                        'type' => 'string',
                                                                        'example' => 'test-fail-worker'."\n",
                                                                    ],
                                                                ],
                                                                'lackDiskWorker' => [
                                                                    'description' => '因缺少磁盘而失败的worker的name',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '失败的worker的name',
                                                                        'type' => 'string',
                                                                        'example' => 'test-fail-worker',
                                                                    ],
                                                                ],
                                                                'errorMsg' => [
                                                                    'description' => '错误信息。',
                                                                    'type' => 'string',
                                                                    'example' => '0A3B1C48006A6C0905F6375F4821EB50',
                                                                ],
                                                                'indexSize' => [
                                                                    'description' => '索引长度',
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                    'example' => '100',
                                                                ],
                                                                'name' => [
                                                                    'description' => '节点名称',
                                                                    'type' => 'string',
                                                                    'example' => 'ha-cn-pl32rf0****_qrs',
                                                                ],
                                                                'totalSize' => [
                                                                    'description' => '总大小',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '1',
                                                                ],
                                                                'doneSize' => [
                                                                    'description' => '完成大小',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '100',
                                                                ],
                                                                'donePercent' => [
                                                                    'description' => '总共完成的进度',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '100',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'serviceStatus' => [
                                                        'description' => '服务状态。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'name' => [
                                                                'description' => '名称',
                                                                'type' => 'string',
                                                                'example' => 'ha-cn-pl32rf0****_qrs',
                                                            ],
                                                            'totalSize' => [
                                                                'description' => '集群总节点数',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '100',
                                                            ],
                                                            'doneSize' => [
                                                                'description' => '集群处理中的节点数。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '100',
                                                            ],
                                                            'donePercent' => [
                                                                'description' => '总共完成进度',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '100',
                                                            ],
                                                        ],
                                                    ],
                                                    'configStatusList' => [
                                                        'description' => '配置状态列表',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '响应体',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'configUpdateTime' => [
                                                                    'description' => '集群更新时间',
                                                                    'type' => 'string',
                                                                    'example' => '2024-05-21 16:05:26',
                                                                ],
                                                                'name' => [
                                                                    'description' => '集群名称',
                                                                    'type' => 'string',
                                                                    'example' => 'test_0704',
                                                                ],
                                                                'totalSize' => [
                                                                    'description' => '总大小',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '0',
                                                                ],
                                                                'doneSize' => [
                                                                    'description' => '完成大小',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '1',
                                                                ],
                                                                'donePercent' => [
                                                                    'description' => '总共完成的进度',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '100',
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
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": [\\n    {\\n      \\"clusterName\\": \\"vpc_hz_domain_1\\",\\n      \\"queryNode\\": {\\n        \\"serviceStatus\\": {\\n          \\"name\\": \\"vpc_hz_domain_1\\\\n\\",\\n          \\"totalSize\\": 100,\\n          \\"doneSize\\": 100,\\n          \\"donePercent\\": 100\\n        },\\n        \\"configStatusList\\": [\\n          {\\n            \\"configUpdateTime\\": \\"2024-05-21 16:05:26\\",\\n            \\"name\\": \\"vpc_hz_domain_1\\\\n\\",\\n            \\"totalSize\\": 6,\\n            \\"doneSize\\": 100,\\n            \\"donePercent\\": 100\\n          }\\n        ]\\n      },\\n      \\"dataNodes\\": [\\n        {\\n          \\"dataStatusList\\": [\\n            {\\n              \\"docSize\\": 2,\\n              \\"fullVersion\\": 1718846192,\\n              \\"incVersion\\": 1718846192,\\n              \\"incUpdateTime\\": \\"2024-05-21 16:05:26\\",\\n              \\"fullUpdateTime\\": \\"2024-05-21 16:05:26\\",\\n              \\"indexConfigInfo\\": {\\n                \\"configMetaName\\": \\"index_meta_name\\",\\n                \\"version\\": 0\\n              },\\n              \\"advanceConfigInfo\\": {\\n                \\"configMetaName\\": \\"index_meta_name\\",\\n                \\"version\\": 1\\n              },\\n              \\"lackMemWorker\\": [\\n                \\"test-fail-worker\\\\n\\"\\n              ],\\n              \\"deployFailedWorker\\": [\\n                \\"test-fail-worker\\\\n\\"\\n              ],\\n              \\"lackDiskWorker\\": [\\n                \\"test-fail-worker\\"\\n              ],\\n              \\"errorMsg\\": \\"0A3B1C48006A6C0905F6375F4821EB50\\",\\n              \\"indexSize\\": 100,\\n              \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n              \\"totalSize\\": 1,\\n              \\"doneSize\\": 100,\\n              \\"donePercent\\": 100\\n            }\\n          ],\\n          \\"serviceStatus\\": {\\n            \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n            \\"totalSize\\": 100,\\n            \\"doneSize\\": 100,\\n            \\"donePercent\\": 100\\n          },\\n          \\"configStatusList\\": [\\n            {\\n              \\"configUpdateTime\\": \\"2024-05-21 16:05:26\\",\\n              \\"name\\": \\"test_0704\\",\\n              \\"totalSize\\": 0,\\n              \\"doneSize\\": 1,\\n              \\"donePercent\\": 100\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取集群信息',
            'description' => '### 方法'."\n"
                .'GET'."\n"
                .'### URI'."\n"
                .'/openapi/ha3/instances/{instanceId}/cluster-run-time-info',
            'requestParamsDescription' => '### 请求示例'."\n"
                .'`GET /openapi/ha3/instances/ose-test1/cluster-run-time-info`',
            'responseParamsDescription' => '### 返回示例'."\n"
                .'正确返回'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'  "requestId": "38b079f1-7846-4226-8c90-3e2644b5c52b",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "clusterName": "",'."\n"
                .'      "queryNode": {'."\n"
                .'        "serviceStatus": {'."\n"
                .'          "name": "service_name",'."\n"
                .'          "totalSize": 1,'."\n"
                .'          "doneSize": 1,'."\n"
                .'          "donePercent": 100'."\n"
                .'        },'."\n"
                .'        "configStatusList": ['."\n"
                .'          {'."\n"
                .'            "name": "default",'."\n"
                .'            "totalSize": 1,'."\n"
                .'            "doneSize": 1,'."\n"
                .'            "donePercent": 100,'."\n"
                .'            "configUpdateTime": ""'."\n"
                .'          }'."\n"
                .'        ]'."\n"
                .'      },'."\n"
                .'      "dataNodes": ['."\n"
                .'        {'."\n"
                .'          "serviceStatus": {'."\n"
                .'            "name": "service_name",'."\n"
                .'            "totalSize": 1,'."\n"
                .'            "doneSize": 1,'."\n"
                .'            "donePercent": 100'."\n"
                .'          },'."\n"
                .'          "configStatusList": ['."\n"
                .'            {'."\n"
                .'              "name": "default",'."\n"
                .'              "totalSize": 1,'."\n"
                .'              "doneSize": 1,'."\n"
                .'              "donePercent": 100,'."\n"
                .'              "configUpdateTime": ""'."\n"
                .'            }'."\n"
                .'          ],'."\n"
                .'          "dataStatusList": ['."\n"
                .'            {'."\n"
                .'              "name": "index1",'."\n"
                .'              "totalSize": 1,'."\n"
                .'              "doneSize": 1,'."\n"
                .'              "donePercent": 100,'."\n"
                .'              "docSize": 123423,'."\n"
                .'              "fullVersion": 123423,'."\n"
                .'              "incVersion": 123423,'."\n"
                .'              "incUpdateTime": "",'."\n"
                .'              "fullUpdateTime": "",'."\n"
                .'              "indexConfigInfo": {'."\n"
                .'                "configMetaName": "index_meta_name",'."\n"
                .'                "version": 13241234'."\n"
                .'              },'."\n"
                .'              "advanceConfigInfo": {'."\n"
                .'                "configMetaName": "advance_meta_name",'."\n"
                .'                "version": 13241234'."\n"
                .'              },'."\n"
                .'              "lackMemWorker": ['."\n"
                .'                "worker1",'."\n"
                .'                "worker2"'."\n"
                .'              ],'."\n"
                .'              "deployFailedWorker": ['."\n"
                .'                "worker3",'."\n"
                .'                "worker4"'."\n"
                .'              ],'."\n"
                .'              "lackDiskWorker": ['."\n"
                .'                "worker5",'."\n"
                .'                "worker6"'."\n"
                .'              ],'."\n"
                .'              "errorMsg": "lackMemWorker/deployFailedWorker/lackDiskWorker"'."\n"
                .'            },'."\n"
                .'            {'."\n"
                .'              "name": "index1",'."\n"
                .'              "totalSize": 1,'."\n"
                .'              "doneSize": 1,'."\n"
                .'              "donePercent": 100,'."\n"
                .'              "docSize": 123423,'."\n"
                .'              "fullVersion": 123423,'."\n"
                .'              "incVersion": 123423,'."\n"
                .'              "incUpdateTime": "",'."\n"
                .'              "fullUpdateTime": "",'."\n"
                .'              "indexConfigInfo": {'."\n"
                .'                "configMetaName": "index_meta_name",'."\n"
                .'                "version": 13241234'."\n"
                .'              },'."\n"
                .'              "advanceConfigInfo": {'."\n"
                .'                "configMetaName": "advance_meta_name",'."\n"
                .'                "version": 13241234'."\n"
                .'              },'."\n"
                .'              "lackMemWorker": ['."\n"
                .'                "worker1",'."\n"
                .'                "worker2"'."\n"
                .'              ],'."\n"
                .'              "deployFailedWorker": ['."\n"
                .'                "worker3",'."\n"
                .'                "worker4"'."\n"
                .'              ],'."\n"
                .'              "lackDiskWorker": ['."\n"
                .'                "worker5",'."\n"
                .'                "worker6"'."\n"
                .'              ],'."\n"
                .'              "errorMsg": "lackMemWorker/deployFailedWorker/lackDiskWorker"'."\n"
                .'            }'."\n"
                .'          ]'."\n"
                .'        }'."\n"
                .'      ]'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```'."\n",
            'extraInfo' => "\n"
                ."\n",
        ],
        'ListClusterNames' => [
            'summary' => '获取集群可选择的名称。',
            'path' => '/openapi/ha3/cluster-names',
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
                'operationType' => 'list',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'F6E3D968-529C-5C40-AFDD-133A8B8FD930',
                            ],
                            'result' => [
                                'title' => 'ClusterNameInfo',
                                'description' => '结果集',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'title' => '集群名称',
                                        'description' => '集群名称',
                                        'type' => 'string',
                                        'example' => 'hz_pre_vpc_domain_1',
                                    ],
                                    'description' => [
                                        'title' => '集群描述',
                                        'description' => '集群描述',
                                        'type' => 'string',
                                        'example' => '自定义描述',
                                    ],
                                    'id' => [
                                        'description' => '集群id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '25030',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F6E3D968-529C-5C40-AFDD-133A8B8FD930\\",\\n  \\"result\\": {\\n    \\"name\\": \\"hz_pre_vpc_domain_1\\",\\n    \\"description\\": \\"自定义描述\\",\\n    \\"id\\": 25030\\n  }\\n}","type":"json"}]',
            'title' => '获取集群可选择的名称',
            'description' => '### 方法'."\n"
                ."\n"
                .'GET'."\n"
                ."\n"
                .'### URI'."\n"
                .'/openapi/ha3/instances/{instanceId}/cluster-names',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'GET /openapi/ha3/instances/ha3_instance_name/cluster-names'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                .'正确返回'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "name":"pre",'."\n"
                .'      "description":"pre机房",'."\n"
                .'      "id": 1,'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```',
            'extraInfo' => '## 示例'."\n"
                ."\n"
                .'### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'GET /openapi/ha3/instances/ha3_instance_name/cluster-names'."\n"
                .'```'."\n"
                .'###返回示例'."\n"
                .'正确返回'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "name":"pre",'."\n"
                .'      "description":"pre机房",'."\n"
                .'      "id": 1,'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListClusters' => [
            'path' => '/openapi/ha3/instances/{instanceId}/clusters',
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
                'operationType' => 'list',
                'abilityTreeCode' => '103715',
                'abilityTreeNodes' => [
                    'FEATUREopensearch5EAGY5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'F43E8AB4-419C-5F4C-90D6-615590DFAA3C',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => '集群列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '集群列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'title' => '集群名称(对应后端domainName)',
                                            'description' => '集群名称',
                                            'type' => 'string',
                                            'example' => 'hz_pre_vpc_domain_1',
                                        ],
                                        'description' => [
                                            'title' => '集群描述',
                                            'description' => '集群描述',
                                            'type' => 'string',
                                            'example' => '自定义描述',
                                        ],
                                        'currentAdvanceConfigVersion' => [
                                            'title' => '高级配置生效版本',
                                            'description' => '高级配置生效版本',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                        ],
                                        'latestAdvanceConfigVersion' => [
                                            'title' => '高级配置最新版本',
                                            'description' => '高级配置最新版本',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                        ],
                                        'currentOnlineConfigVersion' => [
                                            'title' => '在线配置生效版本',
                                            'description' => '在线配置生效版本',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                        ],
                                        'latestOnlineConfigVersion' => [
                                            'title' => '在线配置最新版本',
                                            'description' => '在线配置最新版本',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                        ],
                                        'currentOnlineQueryConfigVersion' => [
                                            'title' => '查询配置生效版本',
                                            'description' => '查询配置生效版本',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                        ],
                                        'latestOnlineQueryConfigVersion' => [
                                            'title' => '查询配置最新版本',
                                            'description' => '查询配置最新版本',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                        ],
                                        'currentOfflineDictConfigVersion' => [
                                            'title' => '词典配置生效版本',
                                            'description' => '词典配置生效版本',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                        ],
                                        'latestOfflineDictConfigVersion' => [
                                            'title' => '词典配置最新版本',
                                            'description' => '词典配置最新版本',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                        ],
                                        'configUpdateTime' => [
                                            'title' => '配置更新时间',
                                            'description' => '配置更新时间',
                                            'type' => 'string',
                                            'example' => '2024-05-21 16:05:26',
                                        ],
                                        'status' => [
                                            'description' => '集群状态。取值：-running：运行中-starting：启动中-stopping：停止中-stopped：已停止',
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                        'queryNode' => [
                                            'title' => '查询节点',
                                            'description' => '集群搜索节点。',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'title' => '节点名称',
                                                    'description' => '节点名称',
                                                    'type' => 'string',
                                                    'example' => 'ha-cn-pl32rf0****_qrs',
                                                ],
                                                'number' => [
                                                    'title' => '节点数量',
                                                    'description' => '节点数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'partition' => [
                                                    'title' => '副本数量',
                                                    'description' => '副本数量',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                        'dataNode' => [
                                            'title' => '数据节点',
                                            'description' => '集群中的节点信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
                                                    'title' => '节点名称',
                                                    'description' => '节点名称',
                                                    'type' => 'string',
                                                    'example' => 'general',
                                                ],
                                                'number' => [
                                                    'title' => '节点数量',
                                                    'description' => '节点数',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'partition' => [
                                                    'title' => '副本数量',
                                                    'description' => '节点分区id。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                        'createTime' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2024-05-21 16:05:26',
                                        ],
                                        'config' => [
                                            'description' => '配置信息',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'name' => [
                                                            'type' => 'string',
                                                            'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                                                            'description' => '配置名称',
                                                        ],
                                                        'updateTime' => [
                                                            'type' => 'string',
                                                            'description' => '更新时间',
                                                            'example' => '2024-05-21 16:05:26',
                                                        ],
                                                        'desc' => [
                                                            'type' => 'string',
                                                            'description' => '描述',
                                                            'example' => '自定义描述',
                                                        ],
                                                    ],
                                                    'description' => '子配置项信息',
                                                ],
                                                'description' => '配置信息',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F43E8AB4-419C-5F4C-90D6-615590DFAA3C\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"hz_pre_vpc_domain_1\\",\\n      \\"description\\": \\"自定义描述\\",\\n      \\"currentAdvanceConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"latestAdvanceConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"currentOnlineConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"latestOnlineConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"currentOnlineQueryConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"latestOnlineQueryConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"currentOfflineDictConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"latestOfflineDictConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"configUpdateTime\\": \\"2024-05-21 16:05:26\\",\\n      \\"status\\": \\"running\\",\\n      \\"queryNode\\": {\\n        \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n        \\"number\\": 1,\\n        \\"partition\\": 1\\n      },\\n      \\"dataNode\\": {\\n        \\"name\\": \\"general\\",\\n        \\"number\\": 1,\\n        \\"partition\\": 1\\n      },\\n      \\"createTime\\": \\"2024-05-21 16:05:26\\",\\n      \\"config\\": {\\n        \\"key\\": {\\n          \\"key\\": {\\n            \\"name\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n            \\"updateTime\\": \\"2024-05-21 16:05:26\\",\\n            \\"desc\\": \\"自定义描述\\"\\n          }\\n        }\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取集群列表',
            'summary' => '获取集群列表。',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/clusters'."\n"
                .'```'."\n",
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'GET /openapi/ha3/instances/ha3_instance_name/clusters'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "name": "cluster1",'."\n"
                .'      "configUpdateTime": "2021-08-09 00:01:02",'."\n"
                .'      "currentAdvanceConfigVersion": "test_yyds_data1",'."\n"
                .'      "lastestAdvanceConfigVersion": "test_yyds_data1",'."\n"
                .'      "currentOnlineConfigVersion": "test_yyds_data1",'."\n"
                .'      "lastestOnlineConfigVersion": "test_yyds_data1",        '."\n"
                .'      "description": "airecpre",'."\n"
                .'      "queryNode": {'."\n"
                .'        "number": 1'."\n"
                .'      },'."\n"
                .'      "dataNode": {'."\n"
                .'        "number": 2,'."\n"
                .'        "partition": 1'."\n"
                .'      },      '."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "name": "cluster2",'."\n"
                .'      "configUpdateTime": "2021-08-09 00:01:02",'."\n"
                .'      "currentAdvanceConfigVersion": "test_yyds_data2",'."\n"
                .'      "lastestAdvanceConfigVersion": "test_yyds_data2",'."\n"
                .'      "currentOnlineConfigVersion": "test_yyds_data1",'."\n"
                .'      "lastestOnlineConfigVersion": "test_yyds_data1",              '."\n"
                .'      "description": "this is descrition",'."\n"
                .'      "queryNode": {'."\n"
                .'        "number": 1'."\n"
                .'      },'."\n"
                .'      "dataNode": {'."\n"
                .'        "number": 2,'."\n"
                .'        "partition": 1'."\n"
                .'      }'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'}'."\n"
                .'```',
            'extraInfo' => "\n"
                ."\n\n"
                ."\n",
        ],
        'ModifyNodeConfig' => [
            'summary' => '修改节点配置。',
            'path' => '/openapi/ha3/instances/{instanceId}/node-config',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'abilityTreeCode' => '114152',
                'abilityTreeNodes' => [
                    'FEATUREopensearchIQC42D',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'qrs: 查询节点, search: 数据节点, index: 索引节点, cluster: 集群',
                        'description' => '算法类型'."\n"
                            .'- pop 人气模型'."\n"
                            .'- cp 类目预测'."\n"
                            .'- hot 热词'."\n"
                            .'- hint 底纹'."\n"
                            .'- suggest 下拉提示',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hot',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改前的配置名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_qrs',
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc_sh_domain_2',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据来源名称。取值：-search：搜索数据。-not_search：不搜索数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'search',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'dataFragmentNumber' => [
                                'title' => '数据分片数',
                                'description' => '数据分片数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'dataDuplicateNumber' => [
                                'title' => '数据副本数',
                                'description' => '数据副本数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'minServicePercent' => [
                                'title' => '最小服务比例',
                                'description' => '最小服务比例',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'published' => [
                                'title' => '集群是否挂载',
                                'description' => '集群是否挂载',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'active' => [
                                'title' => '在线生效（索引是否从在线下掉）',
                                'description' => '在线生效（索引是否从在线下掉）',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'flowRatio' => [
                                'description' => '流量比例',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '100',
                            ],
                        ],
                        'required' => false,
                        'example' => '{\\"desc\\":\\"new version\\"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'D39EE0F1-D7EF-5F46-B781-6BF4185308B0',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => '索引信息',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D39EE0F1-D7EF-5F46-B781-6BF4185308B0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改节点配置',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'PUT'."\n"
                .'```'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test'."\n"
                .'```'."\n",
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'PUT /openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test'."\n"
                .'```'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "dataFragmentNumber":1,//查询节点+数据结点'."\n"
                .'﻿'."\n"
                .'  "dataDuplicateNumber":1,//查询节点+数据结点'."\n"
                .'﻿'."\n"
                .'  "minServicePercent":20,//查询节点+数据结点'."\n"
                .'﻿'."\n"
                .'  "published":true,//集群'."\n"
                .'﻿'."\n"
                .'  "active": true //index'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'﻿'."\n"
                .'  "result": []'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'GetDeployGraph' => [
            'summary' => '展示部署全局概览。',
            'path' => '/openapi/ha3/instances/{instanceId}/deploy-graph',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'title' => 'DeployGraph',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'graph' => [
                                        'description' => '部署信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'onlineMaster' => [
                                                'title' => '在线集群元信息',
                                                'description' => '在线集群元信息',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'id' => [
                                                            'description' => '机房id',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1',
                                                        ],
                                                        'name' => [
                                                            'description' => '在线集群名称',
                                                            'type' => 'string',
                                                            'example' => '	'."\n"
                                                                .'ha-cn-pl32rf0****_hz_pre_vpc_domain_1',
                                                        ],
                                                        'domainName' => [
                                                            'description' => '机房',
                                                            'type' => 'string',
                                                            'example' => 'hz_pre_vpc_domain_1',
                                                        ],
                                                        'hippoId' => [
                                                            'description' => '资源id',
                                                            'type' => 'string',
                                                            'example' => '5377',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'zoneMetas' => [
                                                'title' => 'zone元信息',
                                                'description' => 'zone元信息列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'zone元信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'name' => [
                                                            'description' => '节点名称',
                                                            'type' => 'string',
                                                            'example' => 'ha-cn-pl32rf0****_qrs',
                                                        ],
                                                        'tag' => [
                                                            'description' => '标签',
                                                            'type' => 'string',
                                                            'example' => '	'."\n"
                                                                .'ha-cn-pl32rf0****_qrs_hz_pre_vpc_domain_1',
                                                        ],
                                                        'suezAdminName' => [
                                                            'description' => 'suez admin名称',
                                                            'type' => 'string',
                                                            'example' => '	'."\n"
                                                                .'ha-cn-pl32rf0****_hz_pre_vpc_domain_1',
                                                        ],
                                                        'type' => [
                                                            'description' => '类型',
                                                            'type' => 'string',
                                                            'example' => 'qrs',
                                                        ],
                                                        'domainInfo' => [
                                                            'description' => '机房',
                                                            'type' => 'string',
                                                            'example' => 'hz_pre_vpc_domain_1',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'tableMetas' => [
                                                'title' => '数据源元信息',
                                                'description' => '数据源元信息',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'tableDeployId' => [
                                                            'description' => '表部署id',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '2177',
                                                        ],
                                                        'name' => [
                                                            'description' => '数据源名称',
                                                            'type' => 'string',
                                                            'example' => 'ha-cn-pl32rf0****_test_api',
                                                        ],
                                                        'tag' => [
                                                            'description' => '标签',
                                                            'type' => 'string',
                                                            'example' => 'ha-cn-pl32rf0****_test_api_hz_pre_vpc_domain_1',
                                                        ],
                                                        'domainName' => [
                                                            'description' => '机房',
                                                            'type' => 'string',
                                                            'example' => 'hz_pre_vpc_domain_1',
                                                        ],
                                                        'buildDeployId' => [
                                                            'description' => '离线部署id',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1',
                                                        ],
                                                        'type' => [
                                                            'description' => '数据源类型',
                                                            'type' => 'string',
                                                            'example' => 'odps',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'indexMetas' => [
                                                'title' => '索引元信息',
                                                'description' => '索引元信息列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '索引元信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'name' => [
                                                            'description' => '索引名称',
                                                            'type' => 'string',
                                                            'example' => 'test_api',
                                                        ],
                                                        'tag' => [
                                                            'description' => '标签',
                                                            'type' => 'string',
                                                            'example' => 'test_api_hz_pre_vpc_domain_1',
                                                        ],
                                                        'domainName' => [
                                                            'description' => '机房',
                                                            'type' => 'string',
                                                            'example' => 'hz_pre_vpc_domain_1',
                                                        ],
                                                        'tableDeployId' => [
                                                            'description' => '表部署id',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '2409',
                                                        ],
                                                        'tableName' => [
                                                            'description' => '数据源名称',
                                                            'type' => 'string',
                                                            'example' => 'ha-cn-pl32rf0****_test_api',
                                                        ],
                                                        'zoneName' => [
                                                            'description' => '节点名称',
                                                            'type' => 'string',
                                                            'example' => 'ha-cn-pl32rf0****_qrs',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'zoneIndexRelation' => [
                                                'title' => 'zone和索引关联关系',
                                                'description' => 'zone和索引关联关系列表',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'string',
                                                        'example' => 'general_hz_pre_vpc_domain_1',
                                                        'description' => '索引关联集群',
                                                    ],
                                                    'description' => 'zone和索引关联关系',
                                                ],
                                            ],
                                            'tableIndexRelation' => [
                                                'title' => '数据源和索引关联关系',
                                                'description' => '数据源和索引关联关系列表',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'string',
                                                        'example' => 'test_api_hz_pre_vpc_domain_1',
                                                        'description' => '索引关联表',
                                                    ],
                                                    'description' => '数据源和索引关联关系',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {\\n    \\"graph\\": {\\n      \\"onlineMaster\\": [\\n        {\\n          \\"id\\": 1,\\n          \\"name\\": \\"\\\\t\\\\nha-cn-pl32rf0****_hz_pre_vpc_domain_1\\",\\n          \\"domainName\\": \\"hz_pre_vpc_domain_1\\",\\n          \\"hippoId\\": \\"5377\\"\\n        }\\n      ],\\n      \\"zoneMetas\\": [\\n        {\\n          \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n          \\"tag\\": \\"\\\\t\\\\nha-cn-pl32rf0****_qrs_hz_pre_vpc_domain_1\\",\\n          \\"suezAdminName\\": \\"\\\\t\\\\nha-cn-pl32rf0****_hz_pre_vpc_domain_1\\",\\n          \\"type\\": \\"qrs\\",\\n          \\"domainInfo\\": \\"hz_pre_vpc_domain_1\\"\\n        }\\n      ],\\n      \\"tableMetas\\": [\\n        {\\n          \\"tableDeployId\\": 2177,\\n          \\"name\\": \\"ha-cn-pl32rf0****_test_api\\",\\n          \\"tag\\": \\"ha-cn-pl32rf0****_test_api_hz_pre_vpc_domain_1\\",\\n          \\"domainName\\": \\"hz_pre_vpc_domain_1\\",\\n          \\"buildDeployId\\": 1,\\n          \\"type\\": \\"odps\\"\\n        }\\n      ],\\n      \\"indexMetas\\": [\\n        {\\n          \\"name\\": \\"test_api\\",\\n          \\"tag\\": \\"test_api_hz_pre_vpc_domain_1\\",\\n          \\"domainName\\": \\"hz_pre_vpc_domain_1\\",\\n          \\"tableDeployId\\": 2409,\\n          \\"tableName\\": \\"ha-cn-pl32rf0****_test_api\\",\\n          \\"zoneName\\": \\"ha-cn-pl32rf0****_qrs\\"\\n        }\\n      ],\\n      \\"zoneIndexRelation\\": {\\n        \\"key\\": [\\n          \\"general_hz_pre_vpc_domain_1\\"\\n        ]\\n      },\\n      \\"tableIndexRelation\\": {\\n        \\"key\\": [\\n          \\"test_api_hz_pre_vpc_domain_1\\"\\n        ]\\n      }\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '展示部署全局概览',
            'description' => '## 方法'."\n"
                ."\n"
                .'GET'."\n"
                ."\n"
                .'## URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/deploy-graph'."\n"
                .'```'."\n",
            'requestParamsDescription' => "\n"
                .'### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'﻿'."\n"
                .'GET /openapi/ha3/instances/{instanceId}/deploy-graph'."\n"
                .'```',
            'responseParamsDescription' => "\n"
                ."\n"
                .'### 返回示例'."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'﻿'."\n"
                .'  "result": {'."\n"
                .'﻿'."\n"
                .'    "app": {'."\n"
                .'﻿'."\n"
                .'      "creator": "74087",'."\n"
                .'﻿'."\n"
                .'      "gmtModified": 1628151698000,'."\n"
                .'﻿'."\n"
                .'      "groupId": 596,'."\n"
                .'﻿'."\n"
                .'      "platformType": "tisplus",'."\n"
                .'﻿'."\n"
                .'      "description": "qrs改写插件测试集群，测试同学不要使用",'."\n"
                .'﻿'."\n"
                .'      "gmtCreate": 1628151698000,'."\n"
                .'﻿'."\n"
                .'      "isActive": 0,'."\n"
                .'﻿'."\n"
                .'      "type": "online_group",'."\n"
                .'﻿'."\n"
                .'      "appStatus": 0,'."\n"
                .'﻿'."\n"
                .'      "procStatus": 0,'."\n"
                .'﻿'."\n"
                .'      "isDeleted": 0,'."\n"
                .'﻿'."\n"
                .'      "name": "search4TestPlugin",'."\n"
                .'﻿'."\n"
                .'      "id": 5171'."\n"
                .'﻿'."\n"
                .'    },'."\n"
                .'﻿'."\n"
                .'    "hippos": [],'."\n"
                .'﻿'."\n"
                .'    "appGroupName": "多biz测试业务线",'."\n"
                .'﻿'."\n"
                .'    "name": "search4TestPlugin",'."\n"
                .'﻿'."\n"
                .'    "availableDeploys": ['."\n"
                .'﻿'."\n"
                .'      {'."\n"
                .'﻿'."\n"
                .'        "gmtModified": 1594193012000,'."\n"
                .'﻿'."\n"
                .'        "virtualDomainList": "6,7,8",'."\n"
                .'﻿'."\n"
                .'        "platformType": "[\\"tisplus\\",\\"tisplus_khronos\\",\\"tisplus_dingtalk\\"]",'."\n"
                .'﻿'."\n"
                .'        "description": "pre_et2机房",'."\n"
                .'﻿'."\n"
                .'        "groups": "",'."\n"
                .'﻿'."\n"
                .'        "gmtCreate": 1565752477000,'."\n"
                .'﻿'."\n"
                .'        "type": "INNET",'."\n"
                .'﻿'."\n"
                .'        "modules": "[\\"online\\"]",'."\n"
                .'﻿'."\n"
                .'        "foundationDetailList": "15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,94",'."\n"
                .'﻿'."\n"
                .'        "name": "pre_et2",'."\n"
                .'﻿'."\n"
                .'        "hippoId": "hippo_et2_7u",'."\n"
                .'﻿'."\n"
                .'        "id": 5'."\n"
                .'﻿'."\n"
                .'      },'."\n"
                .'﻿'."\n"
                .'      {'."\n"
                .'﻿'."\n"
                .'        "gmtModified": 1571642223000,'."\n"
                .'﻿'."\n"
                .'        "platformType": "[\\"tisplus\\"]",'."\n"
                .'﻿'."\n"
                .'        "description": "预发oc27机房",'."\n"
                .'﻿'."\n"
                .'        "groups": "",'."\n"
                .'﻿'."\n"
                .'        "gmtCreate": 1571642223000,'."\n"
                .'﻿'."\n"
                .'        "type": "INNET",'."\n"
                .'﻿'."\n"
                .'        "modules": "[\\"online\\"]",'."\n"
                .'﻿'."\n"
                .'        "foundationDetailList": "67,68,69,70,71,72,73,74,75,76,77,78,79",'."\n"
                .'﻿'."\n"
                .'        "name": "oc27_pre",'."\n"
                .'﻿'."\n"
                .'        "hippoId": "hippo_7u_oc27",'."\n"
                .'﻿'."\n"
                .'        "id": 15'."\n"
                .'﻿'."\n"
                .'      }'."\n"
                .'﻿'."\n"
                .'    ],'."\n"
                .'﻿'."\n"
                .'    "graph": {'."\n"
                .'﻿'."\n"
                .'      "zoneMetas": ['."\n"
                .'﻿'."\n"
                .'        {'."\n"
                .'﻿'."\n"
                .'          "suezAdminName": "search4TestPlugin_pre",'."\n"
                .'﻿'."\n"
                .'          "zoneMetaId": 8509,'."\n"
                .'﻿'."\n"
                .'          "domainInfo": "pre",'."\n"
                .'﻿'."\n"
                .'          "mainZone": true,'."\n"
                .'﻿'."\n"
                .'          "name": "search4TestPlugin_qrs",'."\n"
                .'﻿'."\n"
                .'          "zoneId": 11379,'."\n"
                .'﻿'."\n"
                .'          "tag": "search4TestPlugin_qrs_pre",'."\n"
                .'﻿'."\n"
                .'          "clusterId": 5265,'."\n"
                .'﻿'."\n"
                .'          "type": "qrs"'."\n"
                .'﻿'."\n"
                .'        },'."\n"
                .'﻿'."\n"
                .'        {'."\n"
                .'﻿'."\n"
                .'          "suezAdminName": "search4TestPlugin_pre",'."\n"
                .'﻿'."\n"
                .'          "zoneMetaId": 8510,'."\n"
                .'﻿'."\n"
                .'          "domainInfo": "pre",'."\n"
                .'﻿'."\n"
                .'          "mainZone": true,'."\n"
                .'﻿'."\n"
                .'          "name": "test_searcher",'."\n"
                .'﻿'."\n"
                .'          "zoneId": 11380,'."\n"
                .'﻿'."\n"
                .'          "tag": "test_searcher_pre",'."\n"
                .'﻿'."\n"
                .'          "clusterId": 5265,'."\n"
                .'﻿'."\n"
                .'          "type": "searcher"'."\n"
                .'﻿'."\n"
                .'        }'."\n"
                .'﻿'."\n"
                .'      ],'."\n"
                .'﻿'."\n"
                .'      "tableIndexRelation": {'."\n"
                .'﻿'."\n"
                .'        "product_sku_pre_ea120": ['."\n"
                .'﻿'."\n"
                .'          "product_sku_pre_ea120"'."\n"
                .'﻿'."\n"
                .'        ]'."\n"
                .'﻿'."\n"
                .'      },'."\n"
                .'﻿'."\n"
                .'      "onlineMaster": ['."\n"
                .'﻿'."\n"
                .'        {'."\n"
                .'﻿'."\n"
                .'          "appId": 5171,'."\n"
                .'﻿'."\n"
                .'          "domainId": 1,'."\n"
                .'﻿'."\n"
                .'          "domainName": "pre",'."\n"
                .'﻿'."\n"
                .'          "gmtCreate": 1628561292000,'."\n"
                .'﻿'."\n"
                .'          "gmtModified": 1628562498000,'."\n"
                .'﻿'."\n"
                .'          "hippoGroupId": "20",'."\n"
                .'﻿'."\n"
                .'          "id": 5265,'."\n"
                .'﻿'."\n"
                .'          "monitorStatus": 1,'."\n"
                .'﻿'."\n"
                .'          "name": "search4TestPlugin_pre",'."\n"
                .'﻿'."\n"
                .'          "processorInfoId": 27789,'."\n"
                .'﻿'."\n"
                .'          "zkAddr": ""'."\n"
                .'﻿'."\n"
                .'        }'."\n"
                .'﻿'."\n"
                .'      ],'."\n"
                .'﻿'."\n"
                .'      "indexMetas": ['."\n"
                .'﻿'."\n"
                .'        {'."\n"
                .'﻿'."\n"
                .'          "tableDeployId": 7366,'."\n"
                .'﻿'."\n"
                .'          "zoneMetaId": 8510,'."\n"
                .'﻿'."\n"
                .'          "domainName": "pre_ea120",'."\n"
                .'﻿'."\n"
                .'          "name": "product_sku",'."\n"
                .'﻿'."\n"
                .'          "tableId": 6866,'."\n"
                .'﻿'."\n"
                .'          "tag": "product_sku_pre_ea120",'."\n"
                .'﻿'."\n"
                .'          "zoneName": "test_searcher",'."\n"
                .'﻿'."\n"
                .'          "tableName": "product_sku"'."\n"
                .'﻿'."\n"
                .'        }'."\n"
                .'﻿'."\n"
                .'      ],'."\n"
                .'﻿'."\n"
                .'      "offlineMaster": ['."\n"
                .'﻿'."\n"
                .'        {'."\n"
                .'﻿'."\n"
                .'          "appId": 5214,'."\n"
                .'﻿'."\n"
                .'          "domainId": 18,'."\n"
                .'﻿'."\n"
                .'          "domainName": "pre_ea120",'."\n"
                .'﻿'."\n"
                .'          "gmtCreate": 1628501863000,'."\n"
                .'﻿'."\n"
                .'          "gmtModified": 1628501863000,'."\n"
                .'﻿'."\n"
                .'          "id": 3751,'."\n"
                .'﻿'."\n"
                .'          "isPublic": 2,'."\n"
                .'﻿'."\n"
                .'          "monitorStatus": 1,'."\n"
                .'﻿'."\n"
                .'          "name": "search4_multi_biz_bs",'."\n"
                .'﻿'."\n"
                .'          "platformType": "tisplus",'."\n"
                .'﻿'."\n"
                .'          "processorInfoId": 27755,'."\n"
                .'﻿'."\n"
                .'          "zkAddr": ""'."\n"
                .'﻿'."\n"
                .'        }'."\n"
                .'```'."\n",
        ],
        'GetNodeConfig' => [
            'summary' => '获取节点配置信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/node-config',
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
                'abilityTreeCode' => '104681',
                'abilityTreeNodes' => [
                    'FEATUREopensearchIQC42D',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例 ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'qrs: 查询节点, search: 数据节点, index: 索引节点, cluster: 集群',
                        'description' => '节点类型'."\n"
                            ."\n"
                            .'- qrs：查询节点'."\n"
                            .'- search：数据节点'."\n"
                            .'- index：索引节点'."\n"
                            .'- cluster：集群',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'index',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ha-cn-30174dhoz53_qrs',
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc_sh_domain_2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => 'NodeConfig',
                                'description' => '结果集',
                                'type' => 'object',
                                'properties' => [
                                    'dataFragmentNumber' => [
                                        'title' => '数据分片数',
                                        'description' => '数据分片数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'dataDuplicateNumber' => [
                                        'title' => '数据副本数',
                                        'description' => '数据副本数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'minServicePercent' => [
                                        'title' => '最小服务比例',
                                        'description' => '最小服务比例',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '50',
                                    ],
                                    'published' => [
                                        'title' => '集群是否挂载',
                                        'description' => '集群是否挂载',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'active' => [
                                        'title' => '在线生效（索引是否从在线下掉）',
                                        'description' => '在线生效（索引是否从在线下掉）',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'flowRatio' => [
                                        'description' => '流量比例',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {\\n    \\"dataFragmentNumber\\": 1,\\n    \\"dataDuplicateNumber\\": 1,\\n    \\"minServicePercent\\": 50,\\n    \\"published\\": true,\\n    \\"active\\": true,\\n    \\"flowRatio\\": 100\\n  }\\n}","type":"json"}]',
            'title' => '获取节点配置信息',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/node-config'."\n"
                .'```'."\n",
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'GET /openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test&'."\n"
                .'```',
            'responseParamsDescription' => "\n"
                ."\n\n"
                .'### 返回示例'."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                .'```java'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'﻿'."\n"
                .'  "result": {'."\n"
                .'﻿'."\n"
                .'    "dataFragmentNumber":1,'."\n"
                .'﻿'."\n"
                .'    "dataDuplicateNumber":1,'."\n"
                .'﻿'."\n"
                .'    "minServicePercent":20,'."\n"
                .'﻿'."\n"
                .'    "published":true,'."\n"
                .'﻿'."\n"
                .'    "active": true  // 在线是否生效'."\n"
                .'﻿'."\n"
                .'  }'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n",
        ],
        'ListTasks' => [
            'summary' => '获取集群任务列表（数据源+集群）',
            'path' => '/openapi/ha3/instances/{instanceId}/tasks',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '211712',
                'abilityTreeNodes' => [
                    'FEATUREopensearchW54CZ4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'start',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日程开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1718846192',
                    ],
                ],
                [
                    'name' => 'end',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日程结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1718846192',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'D39EE0F1-D7EF-5F46-B781-6BF4185308B0',
                            ],
                            'result' => [
                                'title' => 'Object',
                                'description' => 'Object',
                                'type' => 'any',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D39EE0F1-D7EF-5F46-B781-6BF4185308B0\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
            'title' => '获取实例的变更历史',
        ],
        'ListClusterTasks' => [
            'summary' => '展示集群任务'."\n"
                ."\n"
                .'。',
            'path' => '/openapi/ha3/instances/{instanceId}/cluster-tasks',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'CC5EC8FA-5C0D-56AF-BEF4-6FCCEABD0511',
                            ],
                            'result' => [
                                'title' => '索引信息',
                                'description' => '索引信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '集群列表信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'groupType' => [
                                            'title' => '变更分组类型',
                                            'description' => '变更分组类型',
                                            'type' => 'string',
                                            'example' => 'Table_Update',
                                        ],
                                        'fsmId' => [
                                            'title' => 'fsmId',
                                            'description' => 'fsmId',
                                            'type' => 'string',
                                            'example' => 'tisplus_opensearch@datasource_flow_fsm@1865410598556969-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@1649729867698@028315',
                                        ],
                                        'name' => [
                                            'title' => '卡片的名字',
                                            'description' => '卡片的名字',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_qrs',
                                        ],
                                        'time' => [
                                            'title' => '卡片的时间戳',
                                            'description' => '卡片的时间戳',
                                            'type' => 'string',
                                            'example' => '1657610520',
                                        ],
                                        'type' => [
                                            'title' => '卡片的类型',
                                            'description' => '卡片的类型',
                                            'type' => 'string',
                                            'example' => 'mra_table_config_trace_fsm',
                                        ],
                                        'user' => [
                                            'title' => '触发生成fsm流程的用户',
                                            'description' => '触发生成fsm流程的用户',
                                            'type' => 'string',
                                            'example' => 'admin',
                                        ],
                                        'status' => [
                                            'title' => 'FSM整体状态',
                                            'description' => 'FSM整体状态',
                                            'type' => 'string',
                                            'example' => 'onlyPublished',
                                        ],
                                        'extraAttribute' => [
                                            'title' => '卡片的额外属性',
                                            'description' => '卡片的额外属性',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'	"consoleVersion": "",'."\n"
                                                .'	"domain": "hz_pre_vpc_domain_1",'."\n"
                                                .'	"configType": "offline"'."\n"
                                                .'}',
                                        ],
                                        'field3' => [
                                            'title' => '创建状态机时透传的field3字段',
                                            'description' => '创建状态机时透传的field3字段',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'	"ha-cn-pl32rf0****_offline_adv": 1,'."\n"
                                                .'	"ha-cn-pl32rf0****_offline_plugin": 1,'."\n"
                                                .'	"ha-cn-pl32rf0****_table_ha-cn-35t3r02iq03_test_api": 1,'."\n"
                                                .'	"ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@hz_pre_vpc_domain_1@test_api@index_config": 1,'."\n"
                                                .'	"ha-cn-pl32rf0****_offline_dict": 1'."\n"
                                                .'}',
                                        ],
                                        'tags' => [
                                            'title' => '进度条的状态标签',
                                            'description' => '进度条的状态标签',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'tagLevel' => [
                                                        'title' => '展示tag的等级',
                                                        'description' => '展示tag的等级',
                                                        'type' => 'string',
                                                        'example' => '1',
                                                    ],
                                                    'msg' => [
                                                        'title' => '展示tag内容',
                                                        'description' => '展示tag内容',
                                                        'type' => 'string',
                                                        'example' => 'test-tag',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'taskNodes' => [
                                            'title' => '任务信息',
                                            'description' => '任务信息',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '任务节点信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'name' => [
                                                        'title' => '任务名称',
                                                        'description' => '任务名称',
                                                        'type' => 'string',
                                                        'example' => 'publish config version',
                                                    ],
                                                    'index' => [
                                                        'title' => '此任务的序号',
                                                        'description' => '此任务的序号',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '4',
                                                    ],
                                                    'finishDate' => [
                                                        'title' => '完成日期',
                                                        'description' => '完成日期',
                                                        'type' => 'string',
                                                        'example' => '2024-06-17 18:40:48',
                                                    ],
                                                    'status' => [
                                                        'title' => '任务状态',
                                                        'description' => '任务状态',
                                                        'type' => 'string',
                                                        'example' => 'SUCCESS',
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
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CC5EC8FA-5C0D-56AF-BEF4-6FCCEABD0511\\",\\n  \\"result\\": [\\n    {\\n      \\"groupType\\": \\"Table_Update\\",\\n      \\"fsmId\\": \\"tisplus_opensearch@datasource_flow_fsm@1865410598556969-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@1649729867698@028315\\",\\n      \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n      \\"time\\": \\"1657610520\\",\\n      \\"type\\": \\"mra_table_config_trace_fsm\\",\\n      \\"user\\": \\"admin\\",\\n      \\"status\\": \\"onlyPublished\\",\\n      \\"extraAttribute\\": \\"{\\\\n\\\\t\\\\\\"consoleVersion\\\\\\": \\\\\\"\\\\\\",\\\\n\\\\t\\\\\\"domain\\\\\\": \\\\\\"hz_pre_vpc_domain_1\\\\\\",\\\\n\\\\t\\\\\\"configType\\\\\\": \\\\\\"offline\\\\\\"\\\\n}\\",\\n      \\"field3\\": \\"{\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_adv\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_plugin\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_table_ha-cn-35t3r02iq03_test_api\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@hz_pre_vpc_domain_1@test_api@index_config\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_dict\\\\\\": 1\\\\n}\\",\\n      \\"tags\\": [\\n        {\\n          \\"tagLevel\\": \\"1\\",\\n          \\"msg\\": \\"test-tag\\"\\n        }\\n      ],\\n      \\"taskNodes\\": [\\n        {\\n          \\"name\\": \\"publish config version\\",\\n          \\"index\\": 4,\\n          \\"finishDate\\": \\"2024-06-17 18:40:48\\",\\n          \\"status\\": \\"SUCCESS\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '展示集群任务',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/cluster-tasks'."\n"
                .'```'."\n",
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'GET /openapi/ha3/instances/{instanceId}/cluster-tasks'."\n"
                .'```'."\n"
                ."\n"
                .'﻿'."\n",
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "groupType": "table",'."\n"
                .'      "fsmId": "tisplus_opensearch@create_online_deploy_fsm@opensearch_pre_standard_private_20211110_2@pre_domain_1@null@null@1637215469093@127746",'."\n"
                .'      "name": "新增在线部署",'."\n"
                .'      "taskNodes": ['."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "msg": "stopped clean fsm: []",'."\n"
                .'            "name": "stop clean",'."\n"
                .'            "index": 0,'."\n"
                .'            "finishDate": "2021-11-18 14:04:49",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "prepare",'."\n"
                .'            "index": 1,'."\n"
                .'            "finishDate": "2021-11-18 14:05:09",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "merger port",'."\n"
                .'            "index": 2,'."\n"
                .'            "finishDate": "2021-11-18 14:05:19",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "moss create",'."\n"
                .'            "index": 3,'."\n"
                .'            "finishDate": "2021-11-18 14:05:39",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "submit hippo",'."\n"
                .'            "index": 4,'."\n"
                .'            "finishDate": "2021-11-18 14:05:59",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "admin started",'."\n"
                .'            "index": 5,'."\n"
                .'            "finishDate": "2021-11-18 14:16:05",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "zone create",'."\n"
                .'            "index": 6,'."\n"
                .'            "finishDate": "2021-11-18 14:16:45",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "switch index",'."\n"
                .'            "index": 13,'."\n"
                .'            "finishDate": "2021-11-18 14:16:55",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "time": "2021-11-18 14:04:29",'."\n"
                .'      "type": "onlineGroup",'."\n"
                .'      "user": "74087",'."\n"
                .'      "status": "success"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "groupType": "table",'."\n"
                .'      "fsmId": "tisplus_opensearch@delete_biz_fsm@multi_biz_opensearch-default@null@null@default@1631777272819@926304",'."\n"
                .'      "name": "delete_biz_fsm",'."\n"
                .'      "taskNodes": ['."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "msg": "stop biz create fsm success",'."\n"
                .'            "name": "stop fsm",'."\n"
                .'            "index": 0,'."\n"
                .'            "finishDate": "2021-09-16 15:27:53",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "msg": "Ha3BizConfigResource [default] not exist",'."\n"
                .'            "name": "delete moss",'."\n"
                .'            "index": 1,'."\n"
                .'            "finishDate": "2021-09-16 15:28:04",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "msg": "skip delete cause resource[name=default] not exist",'."\n"
                .'            "name": "delete biz resource",'."\n"
                .'            "index": 2,'."\n"
                .'            "finishDate": "2021-09-16 15:28:14",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "msg": "skip check cause no InnerData.BizConfigResource is null",'."\n"
                .'            "name": "check suez",'."\n"
                .'            "index": 3,'."\n"
                .'            "finishDate": "2021-09-16 15:28:24",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "finished",'."\n"
                .'            "index": 4,'."\n"
                .'            "finishDate": "2021-09-16 15:28:24",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "time": "2021-09-16 15:27:53",'."\n"
                .'      "type": "delete_biz_fsm",'."\n"
                .'      "user": "哈勃",'."\n"
                .'      "status": "success"'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'```'."\n",
        ],
        'ListDataSourceTasks' => [
            'summary' => '展示数据源任务。',
            'path' => '/openapi/ha3/instances/{instanceId}/data-source-tasks',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'CC5EC8FA-5C0D-56AF-BEF4-6FCCEABD0511',
                            ],
                            'result' => [
                                'title' => '索引信息',
                                'description' => '索引信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据搜索返回的结果。',
                                    'type' => 'object',
                                    'properties' => [
                                        'groupType' => [
                                            'title' => '变更分组类型',
                                            'description' => '变更分组类型',
                                            'type' => 'string',
                                            'example' => 'Table_Update',
                                        ],
                                        'fsmId' => [
                                            'title' => 'fsmId',
                                            'description' => 'fsmId',
                                            'type' => 'string',
                                            'example' => 'tisplus_opensearch@datasource_flow_fsm@1865410598556969-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@1649729867698@028315',
                                        ],
                                        'name' => [
                                            'title' => '卡片的名字',
                                            'description' => '卡片的名字',
                                            'type' => 'string',
                                            'example' => 'ha-cn-pl32rf0****_qrs'."\n",
                                        ],
                                        'time' => [
                                            'title' => '卡片的时间戳',
                                            'description' => '卡片的时间戳',
                                            'type' => 'string',
                                            'example' => '1646279473',
                                        ],
                                        'type' => [
                                            'title' => '卡片的类型',
                                            'description' => '卡片的类型',
                                            'type' => 'string',
                                            'example' => 'mra_table_config_trace_fsm'."\n",
                                        ],
                                        'user' => [
                                            'title' => '触发生成fsm流程的用户',
                                            'description' => '触发生成fsm流程的用户',
                                            'type' => 'string',
                                            'example' => 'admin',
                                        ],
                                        'status' => [
                                            'title' => 'FSM整体状态',
                                            'description' => 'FSM整体状态',
                                            'type' => 'string',
                                            'example' => 'onlyPublished',
                                        ],
                                        'extraAttribute' => [
                                            'title' => '卡片的额外属性',
                                            'description' => '卡片的额外属性',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'	"consoleVersion": "",'."\n"
                                                .'	"domain": "hz_pre_vpc_domain_1",'."\n"
                                                .'	"configType": "offline"'."\n"
                                                .'}',
                                        ],
                                        'field3' => [
                                            'title' => '创建状态机时透传的field3字段',
                                            'description' => '创建状态机时透传的field3字段',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'	"ha-cn-pl32rf0****_offline_adv": 1,'."\n"
                                                .'	"ha-cn-pl32rf0****_offline_plugin": 1,'."\n"
                                                .'	"ha-cn-pl32rf0****_table_ha-cn-35t3r02iq03_test_api": 1,'."\n"
                                                .'	"ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@hz_pre_vpc_domain_1@test_api@index_config": 1,'."\n"
                                                .'	"ha-cn-pl32rf0****_offline_dict": 1'."\n"
                                                .'}'."\n",
                                        ],
                                        'tags' => [
                                            'title' => '进度条的状态标签',
                                            'description' => '进度条的状态标签',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '数据源标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'tagLevel' => [
                                                        'title' => '展示tag的等级',
                                                        'description' => '展示tag的等级',
                                                        'type' => 'string',
                                                        'example' => '1',
                                                    ],
                                                    'msg' => [
                                                        'title' => '展示tag内容',
                                                        'description' => '展示tag内容',
                                                        'type' => 'string',
                                                        'example' => 'test-tag',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'taskNodes' => [
                                            'title' => '任务信息',
                                            'description' => '任务信息',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '任务节点信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'name' => [
                                                        'title' => '任务名称',
                                                        'description' => '任务名称',
                                                        'type' => 'string',
                                                        'example' => 'publish config version'."\n",
                                                    ],
                                                    'index' => [
                                                        'title' => '此任务的序号',
                                                        'description' => '此任务的序号',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '4',
                                                    ],
                                                    'finishDate' => [
                                                        'title' => '完成日期',
                                                        'description' => '完成日期',
                                                        'type' => 'string',
                                                        'example' => '2024-06-17 18:40:48'."\n",
                                                    ],
                                                    'status' => [
                                                        'title' => '任务状态',
                                                        'description' => '任务状态',
                                                        'type' => 'string',
                                                        'example' => 'SUCCESS',
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
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CC5EC8FA-5C0D-56AF-BEF4-6FCCEABD0511\\",\\n  \\"result\\": [\\n    {\\n      \\"groupType\\": \\"Table_Update\\",\\n      \\"fsmId\\": \\"tisplus_opensearch@datasource_flow_fsm@1865410598556969-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@1649729867698@028315\\",\\n      \\"name\\": \\"ha-cn-pl32rf0****_qrs\\\\n\\",\\n      \\"time\\": \\"1646279473\\",\\n      \\"type\\": \\"mra_table_config_trace_fsm\\\\n\\",\\n      \\"user\\": \\"admin\\",\\n      \\"status\\": \\"onlyPublished\\",\\n      \\"extraAttribute\\": \\"{\\\\n\\\\t\\\\\\"consoleVersion\\\\\\": \\\\\\"\\\\\\",\\\\n\\\\t\\\\\\"domain\\\\\\": \\\\\\"hz_pre_vpc_domain_1\\\\\\",\\\\n\\\\t\\\\\\"configType\\\\\\": \\\\\\"offline\\\\\\"\\\\n}\\",\\n      \\"field3\\": \\"{\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_adv\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_plugin\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_table_ha-cn-35t3r02iq03_test_api\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@hz_pre_vpc_domain_1@test_api@index_config\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_dict\\\\\\": 1\\\\n}\\\\n\\",\\n      \\"tags\\": [\\n        {\\n          \\"tagLevel\\": \\"1\\",\\n          \\"msg\\": \\"test-tag\\"\\n        }\\n      ],\\n      \\"taskNodes\\": [\\n        {\\n          \\"name\\": \\"publish config version\\\\n\\",\\n          \\"index\\": 4,\\n          \\"finishDate\\": \\"2024-06-17 18:40:48\\\\n\\",\\n          \\"status\\": \\"SUCCESS\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '展示数据源任务',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'GET'."\n"
                .'```'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/data-source-tasks'."\n"
                .'```',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'GET /openapi/ha3/instances/{instanceId}/data-source-tasks'."\n"
                .'```',
            'responseParamsDescription' => "\n"
                .'### 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": ['."\n"
                .'    {'."\n"
                .'      "groupType": "table",'."\n"
                .'      "fsmId": "tisplus_opensearch@create_online_deploy_fsm@opensearch_pre_standard_private_20211110_2@pre_domain_1@null@null@1637215469093@127746",'."\n"
                .'      "name": "新增在线部署",'."\n"
                .'      "taskNodes": ['."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "msg": "stopped clean fsm: []",'."\n"
                .'            "name": "stop clean",'."\n"
                .'            "index": 0,'."\n"
                .'            "msg":"异常信息",'."\n"
                .'            "finishDate": "2021-11-18 14:04:49",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "prepare",'."\n"
                .'            "index": 1,'."\n"
                .'            "finishDate": "2021-11-18 14:05:09",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "merger port",'."\n"
                .'            "index": 2,'."\n"
                .'            "finishDate": "2021-11-18 14:05:19",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "moss create",'."\n"
                .'            "index": 3,'."\n"
                .'            "finishDate": "2021-11-18 14:05:39",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "submit hippo",'."\n"
                .'            "index": 4,'."\n"
                .'            "finishDate": "2021-11-18 14:05:59",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "admin started",'."\n"
                .'            "index": 5,'."\n"
                .'            "finishDate": "2021-11-18 14:16:05",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "zone create",'."\n"
                .'            "index": 6,'."\n"
                .'            "finishDate": "2021-11-18 14:16:45",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "switch index",'."\n"
                .'            "index": 13,'."\n"
                .'            "finishDate": "2021-11-18 14:16:55",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "time": "2021-11-18 14:04:29",'."\n"
                .'      "type": "onlineGroup",'."\n"
                .'      "user": "74087",'."\n"
                .'      "status": "success"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "groupType": "table",'."\n"
                .'      "fsmId": "tisplus_opensearch@delete_biz_fsm@multi_biz_opensearch-default@null@null@default@1631777272819@926304",'."\n"
                .'      "name": "delete_biz_fsm",'."\n"
                .'      "taskNodes": ['."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "msg": "stop biz create fsm success",'."\n"
                .'            "name": "stop fsm",'."\n"
                .'            "index": 0,'."\n"
                .'            "finishDate": "2021-09-16 15:27:53",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "msg": "Ha3BizConfigResource [default] not exist",'."\n"
                .'            "name": "delete moss",'."\n"
                .'            "index": 1,'."\n"
                .'            "finishDate": "2021-09-16 15:28:04",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "msg": "skip delete cause resource[name=default] not exist",'."\n"
                .'            "name": "delete biz resource",'."\n"
                .'            "index": 2,'."\n"
                .'            "finishDate": "2021-09-16 15:28:14",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "msg": "skip check cause no InnerData.BizConfigResource is null",'."\n"
                .'            "name": "check suez",'."\n"
                .'            "index": 3,'."\n"
                .'            "finishDate": "2021-09-16 15:28:24",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'          "nodeInfo": {'."\n"
                .'            "name": "finished",'."\n"
                .'            "index": 4,'."\n"
                .'            "finishDate": "2021-09-16 15:28:24",'."\n"
                .'            "status": "SUCCESS"'."\n"
                .'          }'."\n"
                .'        }'."\n"
                .'      ],'."\n"
                .'      "time": "2021-09-16 15:27:53",'."\n"
                .'      "type": "delete_biz_fsm",'."\n"
                .'      "user": "哈勃",'."\n"
                .'      "status": "success"'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'```'."\n",
        ],
        'StopTask' => [
            'summary' => '停止fsm任务。',
            'path' => '/openapi/ha3/instances/{instanceId}/stop-task/{fsmId}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'fsmId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '已停止的设备id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tisplus_opensearch@datasource_flow_fsm@1865410598556969-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@1649729867698@028315',
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
                            ],
                            'result' => [
                                'title' => '索引信息',
                                'description' => '索引信息',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '停止fsm任务',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'PUT'."\n"
                .'```'."\n"
                .'### URI'."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/stop-task/{fsmId}'."\n"
                .'```',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'```java'."\n"
                .'PUT /openapi/ha3/instances/{instanceId}/stop-task/tisplus_opensearch@add_index_config@1062017779051424-ha-cn-0ju2i0e5z01_mx1228@null@index_11@null@1641282725526@607017'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'﻿'."\n"
                .'  "result": []'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'ForceSwitch' => [
            'summary' => '强制切换。',
            'path' => '/openapi/ha3/instances/{instanceId}/force-switch/{fsmId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'fsmId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tisplus_opensearch@datasource_flow_fsm@186541059855****-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@164972986****@028315',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0B1FF998-BB8D-5182-BFC0-E471AA77095A',
                            ],
                            'result' => [
                                'title' => '索引信息',
                                'description' => '索引信息。',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0B1FF998-BB8D-5182-BFC0-E471AA77095A\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '强制切换',
            'description' => '### 方法'."\n"
                ."\n"
                .'```java'."\n"
                .'PUT'."\n"
                .'```'."\n"
                ."\n"
                .'### URI'."\n"
                ."\n"
                .'```java'."\n"
                .'/openapi/ha3/instances/{instanceId}/force-switch/{fsmId}'."\n"
                .'```',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n\n"
                ."\n"
                .'```java'."\n"
                .'PUT /openapi/ha3/instances/{instanceId}/force-switch/tisplus_opensearch@add_index_config@106201777905****-ha-cn-0ju2i0e****_mx1228@null@index_11@null@164128272****@607017'."\n"
                .'```',
            'responseParamsDescription' => '### 返回示例'."\n"
                ."\n"
                .'正确返回'."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'﻿'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'﻿'."\n"
                .'  "result": []'."\n"
                .'﻿'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'CreateTable' => [
            'summary' => '创建索引表。',
            'path' => '/openapi/ha3/instances/{instanceId}/tables',
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
                'abilityTreeCode' => '218772',
                'abilityTreeNodes' => [
                    'FEATUREopensearchGTRUN8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'body',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'title' => '索引名',
                                'description' => '索引名',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'api_index_1',
                            ],
                            'dataProcessorCount' => [
                                'title' => '数据更新资源数',
                                'description' => '数据更新资源数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'partitionCount' => [
                                'title' => '数据分片数',
                                'description' => '数据分片数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'dataSource' => [
                                'title' => '数据源配置',
                                'description' => '数据源配置',
                                'type' => 'object',
                                'properties' => [
                                    'type' => [
                                        'title' => '数据源类型: 仅支持odps、swift、oss三种类型 (odps, swift, saro, oss, unKnow)',
                                        'description' => '数据源类型: 仅支持odps、swift、oss三种类型 (odps, swift, saro, oss, unKnow)',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'odps',
                                    ],
                                    'dataTimeSec' => [
                                        'title' => '追增量时间戳',
                                        'description' => '追增量时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '1715160176',
                                    ],
                                    'autoBuildIndex' => [
                                        'title' => '是否自动索引重建',
                                        'description' => '是否自动索引重建',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'config' => [
                                        'title' => '数据源配置',
                                        'description' => '数据源配置',
                                        'type' => 'object',
                                        'properties' => [
                                            'endpoint' => [
                                                'title' => 'odps相关',
                                                'description' => 'odps相关',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                                            ],
                                            'accessKey' => [
                                                'description' => 'odps数据源ak',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'L***p',
                                            ],
                                            'accessSecret' => [
                                                'description' => 'odps数据源ak secret',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '5**9a6',
                                            ],
                                            'project' => [
                                                'description' => 'odps数据源项目名称',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test_project',
                                            ],
                                            'partition' => [
                                                'description' => '数据源为odps时必填',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'ds=20220713',
                                            ],
                                            'table' => [
                                                'title' => 'saro、odps相关',
                                                'description' => 'saro、odps相关',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test56',
                                            ],
                                            'ossPath' => [
                                                'title' => 'oss数据源相关',
                                                'description' => 'oss数据源相关',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/opensearch/test.txt',
                                            ],
                                            'bucket' => [
                                                'description' => 'oss bucket',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test-bucket',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'rawSchema' => [
                                'title' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                                'description' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{}',
                            ],
                            'primaryKey' => [
                                'title' => '主键字段',
                                'description' => '主键字段',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'id',
                            ],
                            'fieldSchema' => [
                                'title' => 'key: 字段名',
                                'description' => 'key: 字段名',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => '{'."\n"
                                        .'    "id": "INT64",'."\n"
                                        .'    "source_image": "STRING",'."\n"
                                        .'    "namespace": "INT64",'."\n"
                                        .'    "source_image_vector": "MULTI_FLOAT"'."\n"
                                        .'}',
                                    'description' => 'map结构',
                                ],
                            ],
                            'vectorIndex' => [
                                'title' => '索引结构',
                                'description' => '索引结构',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'indexName' => [
                                            'title' => '索引结构名称',
                                            'description' => '索引结构名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'test_index',
                                        ],
                                        'vectorField' => [
                                            'title' => '向量字段',
                                            'description' => '向量字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'source_image_vector',
                                        ],
                                        'sparseIndexField' => [
                                            'title' => '稀疏向量下标字段',
                                            'description' => '稀疏向量下标字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'sparse_indices',
                                        ],
                                        'sparseValueField' => [
                                            'title' => '稀疏向量值字段',
                                            'description' => '稀疏向量值字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'sparse_values',
                                        ],
                                        'dimension' => [
                                            'title' => '向量维度',
                                            'description' => '向量维度',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '128',
                                        ],
                                        'vectorIndexType' => [
                                            'title' => '向量索引算法',
                                            'description' => '向量索引算法',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'Qc',
                                        ],
                                        'distanceType' => [
                                            'title' => '距离类型',
                                            'description' => '距离类型',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'SquaredEuclidean',
                                        ],
                                        'namespace' => [
                                            'title' => '命名空间字段',
                                            'description' => '命名空间字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'namespace',
                                        ],
                                        'advanceParams' => [
                                            'title' => '索引结构配置',
                                            'description' => '索引结构配置',
                                            'type' => 'object',
                                            'properties' => [
                                                'buildIndexParams' => [
                                                    'title' => '索引构建参数',
                                                    'description' => '索引构建参数',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '{}',
                                                ],
                                                'searchIndexParams' => [
                                                    'title' => '索引检索参数',
                                                    'description' => '索引检索参数',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '{}',
                                                ],
                                                'minScanDocCnt' => [
                                                    'title' => '召回候选集的个数最小值',
                                                    'description' => '召回候选集的个数最小值',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '20000',
                                                ],
                                                'linearBuildThreshold' => [
                                                    'title' => '线性构建的阈值',
                                                    'description' => '线性构建的阈值',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '5000',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'dataProcessConfig' => [
                                'title' => '字段处理配置',
                                'description' => '字段处理配置',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段处理配置详细信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'operator' => [
                                            'title' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                                            'description' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'vectorize',
                                        ],
                                        'dstField' => [
                                            'title' => '目标字段',
                                            'description' => '目标字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'source_image_vector',
                                        ],
                                        'srcField' => [
                                            'title' => '源字段',
                                            'description' => '源字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'source_image',
                                        ],
                                        'params' => [
                                            'title' => '配置模型信息',
                                            'description' => '配置模型信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'vectorModel' => [
                                                    'title' => '向量化模型',
                                                    'description' => '向量化模型',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'clip',
                                                ],
                                                'vectorModal' => [
                                                    'title' => '数据类型',
                                                    'description' => '数据类型',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'image',
                                                ],
                                                'srcFieldConfig' => [
                                                    'title' => '向量化信息来源',
                                                    'description' => '向量化信息来源',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ossEndpoint' => [
                                                            'description' => 'OSS区域地址。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'oss-cn-hangzhou-internal.aliyuncs.com',
                                                        ],
                                                        'ossBucket' => [
                                                            'description' => 'OSSBucket',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'test-bucket',
                                                        ],
                                                        'uid' => [
                                                            'description' => '云账号id',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => '1062017779051424',
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
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '创建索引表',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'POST /openapi/ha3/instances/{instanceId}/tables'."\n"
                .'```'."\n"
                .'><notice>示例仅列举最简单的参数, 更多自定义参数请参考请求参数></notice>'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'    "name": "api",'."\n"
                .'    "partitionCount": 1,'."\n"
                .'    "primaryKey": "id",'."\n"
                .'    "fieldSchema": {'."\n"
                .'        "id": "INT64",'."\n"
                .'        "source_image": "STRING",'."\n"
                .'        "namespace": "STRING",'."\n"
                .'        "source_image_vector": "MULTI_FLOAT"'."\n"
                .'    },'."\n"
                .'    "vectorIndex": ['."\n"
                .'        {'."\n"
                .'            "indexName": "test_index_1",'."\n"
                .'            "vectorField": "source_image_vector",'."\n"
                .'            "vectorIndexType": "HNSW",'."\n"
                .'            "dimension": "512",'."\n"
                .'            "distanceType": "InnerProduct"'."\n"
                .'        }'."\n"
                .'    ]'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)<details>',
        ],
        'ModifyTable' => [
            'summary' => '修改索引表。',
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '218773',
                'abilityTreeNodes' => [
                    'FEATUREopensearchGTRUN8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引表名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'index_hdfs',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'partitionCount' => [
                                'title' => '数据分片数',
                                'description' => '数据分片数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'dataSource' => [
                                'title' => '数据源配置',
                                'description' => '数据源配置',
                                'type' => 'object',
                                'properties' => [
                                    'dataTimeSec' => [
                                        'title' => '追增量时间戳',
                                        'description' => '追增量时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '1715160176',
                                    ],
                                    'autoBuildIndex' => [
                                        'title' => '是否自动索引重建',
                                        'description' => '是否自动索引重建',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'config' => [
                                        'title' => '数据源配置',
                                        'description' => '数据源配置',
                                        'type' => 'object',
                                        'properties' => [
                                            'endpoint' => [
                                                'title' => 'odps相关',
                                                'description' => 'odps数据源的endpoint',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                                            ],
                                            'accessKey' => [
                                                'description' => 'odps数据源ak',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'L***p',
                                            ],
                                            'accessSecret' => [
                                                'description' => 'odps数据源ak secret',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '5**9a6',
                                            ],
                                            'project' => [
                                                'description' => 'odps数据源项目名称',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test_project',
                                            ],
                                            'partition' => [
                                                'description' => '分区信息',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'ds=20231220',
                                            ],
                                            'table' => [
                                                'title' => 'saro、odps相关',
                                                'description' => 'saro、odps数据源表名',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'behavior',
                                            ],
                                            'ossPath' => [
                                                'title' => 'oss数据源相关',
                                                'description' => 'oss文件路径',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '/opensearch/test.txt',
                                            ],
                                            'bucket' => [
                                                'description' => 'oss bucket',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test_bucket',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'rawSchema' => [
                                'title' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                                'description' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{}',
                            ],
                            'primaryKey' => [
                                'title' => '主键字段',
                                'description' => '主键字段',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'id',
                            ],
                            'fieldSchema' => [
                                'title' => 'key: 字段名',
                                'description' => '字段map集合',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => 'key: 字段名   value: 字段类型',
                                    'example' => '{'."\n"
                                        .'    "id": "INT64",'."\n"
                                        .'    "source_image": "STRING",'."\n"
                                        .'    "namespace": "INT64",'."\n"
                                        .'    "source_image_vector": "MULTI_FLOAT"'."\n"
                                        .'}',
                                ],
                            ],
                            'vectorIndex' => [
                                'title' => '索引结构',
                                'description' => '索引结构',
                                'type' => 'array',
                                'items' => [
                                    'description' => '索引结构详细信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'indexName' => [
                                            'title' => '索引结构名称',
                                            'description' => '索引结构名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'test_index',
                                        ],
                                        'vectorField' => [
                                            'title' => '向量字段',
                                            'description' => '向量字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'source_image_vector',
                                        ],
                                        'sparseIndexField' => [
                                            'title' => '稀疏向量下标字段',
                                            'description' => '稀疏向量下标字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'sparse_indices',
                                        ],
                                        'sparseValueField' => [
                                            'title' => '稀疏向量值字段',
                                            'description' => '稀疏向量值字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'sparse_values',
                                        ],
                                        'dimension' => [
                                            'title' => '向量维度',
                                            'description' => '向量维度',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '128',
                                        ],
                                        'vectorIndexType' => [
                                            'title' => '向量索引算法',
                                            'description' => '向量索引算法',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'Qc',
                                        ],
                                        'distanceType' => [
                                            'title' => '距离类型',
                                            'description' => '距离类型',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'SquaredEuclidean',
                                        ],
                                        'namespace' => [
                                            'title' => '命名空间字段',
                                            'description' => '命名空间字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'namespace',
                                        ],
                                        'advanceParams' => [
                                            'title' => '索引结构配置',
                                            'description' => '索引结构配置',
                                            'type' => 'object',
                                            'properties' => [
                                                'buildIndexParams' => [
                                                    'title' => '索引构建参数',
                                                    'description' => '索引构建参数',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '{}',
                                                ],
                                                'searchIndexParams' => [
                                                    'title' => '索引检索参数',
                                                    'description' => '索引检索参数',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '{}',
                                                ],
                                                'minScanDocCnt' => [
                                                    'title' => '召回候选集的个数最小值',
                                                    'description' => '召回候选集的个数最小值',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '20000',
                                                ],
                                                'linearBuildThreshold' => [
                                                    'title' => '线性构建的阈值',
                                                    'description' => '线性构建的阈值',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '5000',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'dataProcessConfig' => [
                                'title' => '字段处理配置',
                                'description' => '字段处理配置',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段处理配置详细信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'operator' => [
                                            'title' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                                            'description' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'vectorize',
                                        ],
                                        'dstField' => [
                                            'title' => '目标字段',
                                            'description' => '目标字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'source_image_vector',
                                        ],
                                        'srcField' => [
                                            'title' => '源字段',
                                            'description' => '源字段',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'source_image',
                                        ],
                                        'params' => [
                                            'title' => '配置模型信息',
                                            'description' => '配置模型信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'vectorModel' => [
                                                    'title' => '向量化模型',
                                                    'description' => '向量化模型',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'clip',
                                                ],
                                                'vectorModal' => [
                                                    'title' => '数据类型',
                                                    'description' => '数据类型',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'image',
                                                ],
                                                'srcFieldConfig' => [
                                                    'title' => '向量化信息来源',
                                                    'description' => '向量化信息来源',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ossEndpoint' => [
                                                            'description' => 'OSS区域地址。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'oss-cn-hangzhou-internal.aliyuncs.com'."\n",
                                                        ],
                                                        'ossBucket' => [
                                                            'description' => 'OSS Bucket名称。',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => 'test-bucket',
                                                        ],
                                                        'uid' => [
                                                            'description' => '云账号id',
                                                            'type' => 'string',
                                                            'required' => false,
                                                            'example' => '1062017779051424',
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
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '修改索引表',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'PUT /openapi/ha3/instances/{instanceId}/tables/{tableName}'."\n"
                .'```'."\n"
                ."\n"
                .'﻿><notice>示例仅列举最简单的参数, 更多自定义参数请参考请求参数></notice>'."\n"
                ."\n"
                .'```java'."\n"
                .'{'."\n"
                .'    "partitionCount": 1,'."\n"
                .'    "primaryKey": "id",'."\n"
                .'    "fieldSchema": {'."\n"
                .'        "id": "INT64",'."\n"
                .'        "source_image": "STRING",'."\n"
                .'        "namespace": "STRING",'."\n"
                .'        "source_image_vector": "MULTI_FLOAT"'."\n"
                .'    },'."\n"
                .'    "vectorIndex": ['."\n"
                .'        {'."\n"
                .'            "indexName": "test_index_1",'."\n"
                .'            "vectorField": "source_image_vector",'."\n"
                .'            "vectorIndexType": "HNSW",'."\n"
                .'            "dimension": "512",'."\n"
                .'            "distanceType": "InnerProduct"'."\n"
                .'        }'."\n"
                .'    ]'."\n"
                .'}'."\n"
                .'```'."\n"
                .'详情可参考[响应结构](~~465311~~)',
        ],
        'GetTable' => [
            'summary' => '获取索引表信息。',
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}',
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
                'abilityTreeCode' => '218774',
                'abilityTreeNodes' => [
                    'FEATUREopensearchGTRUN8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引表名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_summary',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => 'IndexConfigV2',
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'title' => '索引名',
                                        'description' => '索引名',
                                        'type' => 'string',
                                        'example' => 'test_oss',
                                    ],
                                    'status' => [
                                        'title' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                                        'description' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                                        'type' => 'string',
                                        'example' => 'IN_USE',
                                    ],
                                    'dataProcessorCount' => [
                                        'title' => '数据更新资源数',
                                        'description' => '数据更新资源数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'partitionCount' => [
                                        'title' => '数据分片数',
                                        'description' => '数据分片数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'dataSource' => [
                                        'title' => '数据源配置',
                                        'description' => '数据源配置',
                                        'type' => 'object',
                                        'properties' => [
                                            'type' => [
                                                'title' => '数据源类型: 仅支持odps、swift、oss三种类型 (odps, swift, saro, oss, unKnow)',
                                                'description' => '数据源类型: 仅支持odps、swift、oss三种类型 (odps, swift, saro, oss, unKnow)',
                                                'type' => 'string',
                                                'example' => 'odps',
                                            ],
                                            'dataTimeSec' => [
                                                'title' => '追增量时间戳',
                                                'description' => '追增量时间戳',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1715160176',
                                            ],
                                            'autoBuildIndex' => [
                                                'title' => '是否自动索引重建',
                                                'description' => '是否自动索引重建',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'config' => [
                                                'title' => '数据源配置',
                                                'description' => '数据源配置',
                                                'type' => 'object',
                                                'properties' => [
                                                    'endpoint' => [
                                                        'title' => 'odps相关',
                                                        'description' => 'odps相关',
                                                        'type' => 'string',
                                                        'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                                                    ],
                                                    'accessKey' => [
                                                        'description' => 'AK',
                                                        'type' => 'string',
                                                        'example' => 'ak',
                                                    ],
                                                    'accessSecret' => [
                                                        'description' => 'AS',
                                                        'type' => 'string',
                                                        'example' => 'as',
                                                    ],
                                                    'project' => [
                                                        'description' => 'odps数据源项目名称',
                                                        'type' => 'string',
                                                        'example' => 'dp_pdm_marketing_prod',
                                                    ],
                                                    'partition' => [
                                                        'description' => '分区信息',
                                                        'type' => 'string',
                                                        'example' => 'ds=20220808',
                                                    ],
                                                    'table' => [
                                                        'title' => 'saro、odps相关',
                                                        'description' => 'saro、odps数据源表名',
                                                        'type' => 'string',
                                                        'example' => 'test_add',
                                                    ],
                                                    'namespace' => [
                                                        'title' => 'saro相关',
                                                        'description' => 'saro相关',
                                                        'type' => 'string',
                                                        'example' => 'namespace',
                                                    ],
                                                    'path' => [
                                                        'title' => 'hdfs相关',
                                                        'description' => 'hdfs相关',
                                                        'type' => 'string',
                                                        'example' => 'vendor/sebastian/comparator/src/exceptions',
                                                    ],
                                                    'ossPath' => [
                                                        'title' => 'oss数据源相关',
                                                        'description' => 'oss文件路径',
                                                        'type' => 'string',
                                                        'example' => '/opensearch_index_data/sift_oss_test.data',
                                                    ],
                                                    'bucket' => [
                                                        'description' => 'oss命名空间',
                                                        'type' => 'string',
                                                        'example' => 'heytea-ops-oss',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'rawSchema' => [
                                        'title' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                                        'description' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'primaryKey' => [
                                        'title' => '主键字段',
                                        'description' => '主键字段',
                                        'type' => 'string',
                                        'example' => 'id',
                                    ],
                                    'fieldSchema' => [
                                        'title' => 'key: 字段名',
                                        'description' => '字段map集合, key: 字段名 value: 字段类型',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'description' => 'id',
                                            'example' => 'INT64',
                                        ],
                                    ],
                                    'vectorIndex' => [
                                        'title' => '索引结构',
                                        'description' => '索引结构',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'indexName' => [
                                                    'title' => '索引结构名称',
                                                    'description' => '索引结构名称',
                                                    'type' => 'string',
                                                    'example' => 'test_odps',
                                                ],
                                                'vectorField' => [
                                                    'title' => '向量字段',
                                                    'description' => '向量字段',
                                                    'type' => 'string',
                                                    'example' => 'source_image_vector',
                                                ],
                                                'sparseIndexField' => [
                                                    'title' => '稀疏向量下标字段',
                                                    'description' => '稀疏向量下标字段',
                                                    'type' => 'string',
                                                    'example' => 'sparse_indices',
                                                ],
                                                'sparseValueField' => [
                                                    'title' => '稀疏向量值字段',
                                                    'description' => '稀疏向量值字段',
                                                    'type' => 'string',
                                                    'example' => 'sparse_values',
                                                ],
                                                'dimension' => [
                                                    'title' => '向量维度',
                                                    'description' => '向量维度',
                                                    'type' => 'string',
                                                    'example' => '128',
                                                ],
                                                'vectorIndexType' => [
                                                    'title' => '向量索引算法',
                                                    'description' => '向量索引算法',
                                                    'type' => 'string',
                                                    'example' => 'Qc',
                                                ],
                                                'distanceType' => [
                                                    'title' => '距离类型',
                                                    'description' => '距离类型',
                                                    'type' => 'string',
                                                    'example' => 'SquaredEuclidean',
                                                ],
                                                'namespace' => [
                                                    'title' => '命名空间字段',
                                                    'description' => '命名空间字段',
                                                    'type' => 'string',
                                                    'example' => 'namespace',
                                                ],
                                                'advanceParams' => [
                                                    'title' => '索引结构配置',
                                                    'description' => '索引结构配置',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'buildIndexParams' => [
                                                            'title' => '索引构建参数',
                                                            'description' => '索引构建参数',
                                                            'type' => 'string',
                                                            'example' => '{'."\n"
                                                                .'  "proxima.qc.builder.quantizer_class": "Int8QuantizerConverter",'."\n"
                                                                .'  "proxima.qc.builder.quantize_by_centroid": true,'."\n"
                                                                .'  "proxima.qc.builder.optimizer_class": "BruteForceBuilder",'."\n"
                                                                .'  "proxima.qc.builder.thread_count": 10,'."\n"
                                                                .'  "proxima.qc.builder.optimizer_params": {'."\n"
                                                                .'    "proxima.linear.builder.column_major_order": true'."\n"
                                                                .'  },'."\n"
                                                                .'  "proxima.qc.builder.store_original_features": false,'."\n"
                                                                .'  "proxima.qc.builder.train_sample_count": 3000000,'."\n"
                                                                .'  "proxima.qc.builder.train_sample_ratio": 0.5'."\n"
                                                                .'}',
                                                        ],
                                                        'searchIndexParams' => [
                                                            'title' => '索引检索参数',
                                                            'description' => '索引检索参数',
                                                            'type' => 'string',
                                                            'example' => '{"proxima.qc.searcher.scan_ratio":0.01}',
                                                        ],
                                                        'minScanDocCnt' => [
                                                            'title' => '召回候选集的个数最小值',
                                                            'description' => '召回候选集的个数最小值',
                                                            'type' => 'string',
                                                            'example' => '20000',
                                                        ],
                                                        'linearBuildThreshold' => [
                                                            'title' => '线性构建的阈值',
                                                            'description' => '线性构建的阈值',
                                                            'type' => 'string',
                                                            'example' => '5000',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'dataProcessConfig' => [
                                        'title' => '字段处理配置',
                                        'description' => '字段处理配置',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '字段处理配置',
                                            'type' => 'object',
                                            'properties' => [
                                                'operator' => [
                                                    'title' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                                                    'description' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                                                    'type' => 'string',
                                                    'example' => 'vectorize',
                                                ],
                                                'dstField' => [
                                                    'title' => '目标字段',
                                                    'description' => '目标字段',
                                                    'type' => 'string',
                                                    'example' => 'source_image_vector',
                                                ],
                                                'srcField' => [
                                                    'title' => '源字段',
                                                    'description' => '源字段',
                                                    'type' => 'string',
                                                    'example' => 'source_image',
                                                ],
                                                'params' => [
                                                    'title' => '配置模型信息',
                                                    'description' => '配置模型信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'vectorModel' => [
                                                            'title' => '向量化模型',
                                                            'description' => '向量化模型',
                                                            'type' => 'string',
                                                            'example' => 'clip',
                                                        ],
                                                        'vectorModal' => [
                                                            'title' => '数据类型',
                                                            'description' => '数据类型',
                                                            'type' => 'string',
                                                            'example' => 'image',
                                                        ],
                                                        'srcFieldConfig' => [
                                                            'title' => '向量化信息来源',
                                                            'description' => '向量化信息来源',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'ossEndpoint' => [
                                                                    'description' => 'OSS区域地址。',
                                                                    'type' => 'string',
                                                                    'example' => 'oss-cn-hangzhou-internal.aliyuncs.com'."\n",
                                                                ],
                                                                'ossBucket' => [
                                                                    'description' => 'OSS Bucket',
                                                                    'type' => 'string',
                                                                    'example' => 'test',
                                                                ],
                                                                'uid' => [
                                                                    'description' => '云账号id',
                                                                    'type' => 'string',
                                                                    'example' => 'uid',
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
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {\\n    \\"name\\": \\"test_oss\\",\\n    \\"status\\": \\"IN_USE\\",\\n    \\"dataProcessorCount\\": 1,\\n    \\"partitionCount\\": 1,\\n    \\"dataSource\\": {\\n      \\"type\\": \\"odps\\",\\n      \\"dataTimeSec\\": 1715160176,\\n      \\"autoBuildIndex\\": true,\\n      \\"config\\": {\\n        \\"endpoint\\": \\"http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api\\",\\n        \\"accessKey\\": \\"ak\\",\\n        \\"accessSecret\\": \\"as\\",\\n        \\"project\\": \\"dp_pdm_marketing_prod\\",\\n        \\"partition\\": \\"ds=20220808\\",\\n        \\"table\\": \\"test_add\\",\\n        \\"namespace\\": \\"namespace\\",\\n        \\"path\\": \\"vendor/sebastian/comparator/src/exceptions\\",\\n        \\"ossPath\\": \\"/opensearch_index_data/sift_oss_test.data\\",\\n        \\"bucket\\": \\"heytea-ops-oss\\"\\n      }\\n    },\\n    \\"rawSchema\\": \\"{}\\",\\n    \\"primaryKey\\": \\"id\\",\\n    \\"fieldSchema\\": {\\n      \\"key\\": \\"INT64\\"\\n    },\\n    \\"vectorIndex\\": [\\n      {\\n        \\"indexName\\": \\"test_odps\\",\\n        \\"vectorField\\": \\"source_image_vector\\",\\n        \\"sparseIndexField\\": \\"sparse_indices\\",\\n        \\"sparseValueField\\": \\"sparse_values\\",\\n        \\"dimension\\": \\"128\\",\\n        \\"vectorIndexType\\": \\"Qc\\",\\n        \\"distanceType\\": \\"SquaredEuclidean\\",\\n        \\"namespace\\": \\"namespace\\",\\n        \\"advanceParams\\": {\\n          \\"buildIndexParams\\": \\"{\\\\n  \\\\\\"proxima.qc.builder.quantizer_class\\\\\\": \\\\\\"Int8QuantizerConverter\\\\\\",\\\\n  \\\\\\"proxima.qc.builder.quantize_by_centroid\\\\\\": true,\\\\n  \\\\\\"proxima.qc.builder.optimizer_class\\\\\\": \\\\\\"BruteForceBuilder\\\\\\",\\\\n  \\\\\\"proxima.qc.builder.thread_count\\\\\\": 10,\\\\n  \\\\\\"proxima.qc.builder.optimizer_params\\\\\\": {\\\\n    \\\\\\"proxima.linear.builder.column_major_order\\\\\\": true\\\\n  },\\\\n  \\\\\\"proxima.qc.builder.store_original_features\\\\\\": false,\\\\n  \\\\\\"proxima.qc.builder.train_sample_count\\\\\\": 3000000,\\\\n  \\\\\\"proxima.qc.builder.train_sample_ratio\\\\\\": 0.5\\\\n}\\",\\n          \\"searchIndexParams\\": \\"{\\\\\\"proxima.qc.searcher.scan_ratio\\\\\\":0.01}\\",\\n          \\"minScanDocCnt\\": \\"20000\\",\\n          \\"linearBuildThreshold\\": \\"5000\\"\\n        }\\n      }\\n    ],\\n    \\"dataProcessConfig\\": [\\n      {\\n        \\"operator\\": \\"vectorize\\",\\n        \\"dstField\\": \\"source_image_vector\\",\\n        \\"srcField\\": \\"source_image\\",\\n        \\"params\\": {\\n          \\"vectorModel\\": \\"clip\\",\\n          \\"vectorModal\\": \\"image\\",\\n          \\"srcFieldConfig\\": {\\n            \\"ossEndpoint\\": \\"oss-cn-hangzhou-internal.aliyuncs.com\\\\n\\",\\n            \\"ossBucket\\": \\"test\\",\\n            \\"uid\\": \\"uid\\"\\n          }\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取索引表信息',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'GET /openapi/ha3/instances/{instanceId}/tables/{tableName}'."\n"
                .'```',
        ],
        'ListTables' => [
            'summary' => '获取索引列表。',
            'path' => '/openapi/ha3/instances/{instanceId}/tables',
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
                'operationType' => 'list',
                'abilityTreeCode' => '218776',
                'abilityTreeNodes' => [
                    'FEATUREopensearchGTRUN8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'newMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为新版本控制台页面',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => 'List',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'title' => '索引名',
                                            'description' => '索引名',
                                            'type' => 'string',
                                            'example' => 'es_test_1b',
                                        ],
                                        'indexStatus' => [
                                            'title' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                                            'description' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                                            'type' => 'string',
                                            'example' => 'IN_USE',
                                        ],
                                        'status' => [
                                            'title' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                                            'description' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                                            'type' => 'string',
                                            'example' => 'IN_USE',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"es_test_1b\\",\\n      \\"indexStatus\\": \\"IN_USE\\",\\n      \\"status\\": \\"IN_USE\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取索引列表',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'GET /openapi/ha3/instances/{instanceId}/tables'."\n"
                .'```',
        ],
        'DeleteTable' => [
            'summary' => '删除索引表。',
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}',
            'methods' => [
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
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '218775',
                'abilityTreeNodes' => [
                    'FEATUREopensearchGTRUN8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引表名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_summary',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '删除索引表',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'DELETE /openapi/ha3/instances/{instanceId}/tables/{tableName}'."\n"
                .'```',
        ],
        'Reindex' => [
            'summary' => '重建索引。',
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}/reindex',
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
                'operationType' => 'update',
                'abilityTreeCode' => '218777',
                'abilityTreeNodes' => [
                    'FEATUREopensearchD5N27K',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引表名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_summary',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '一个JSON格式的字符串，完整JSON字符串信息，具体内容参见以下详细信息。',
                        'type' => 'object',
                        'properties' => [
                            'dataTimeSec' => [
                                'description' => 'int类型，秒级时间戳，数据源为API推送时必填',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1640867288',
                            ],
                            'partition' => [
                                'description' => '数据源为odps时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ds=20220713',
                            ],
                            'ossDataPath' => [
                                'description' => 'oss文件路径',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'oss://opensearch',
                            ],
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '重建索引',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'POST /openapi/ha3/instances/{instanceId}/tables/{tableName}/reindex'."\n"
                .'```',
        ],
        'ListTableGenerations' => [
            'summary' => '获取索引generation列表。',
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}/index_versions',
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
                'operationType' => 'list',
                'abilityTreeCode' => '218778',
                'abilityTreeNodes' => [
                    'FEATUREopensearchGTRUN8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引表名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_summary',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'F6E3D968-529C-5C40-AFDD-133A8B8FD930',
                            ],
                            'result' => [
                                'title' => 'List',
                                'description' => 'List',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'generationId' => [
                                            'description' => '索引全量版本',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1708674867',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F6E3D968-529C-5C40-AFDD-133A8B8FD930\\",\\n  \\"result\\": [\\n    {\\n      \\"generationId\\": 1708674867\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取索引generation列表'."\0",
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'GET /v2/instances/{instanceId}/tables/{tableName}/index_versions'."\n"
                .'```',
        ],
        'GetTableGeneration' => [
            'summary' => '根据generationId获取某个索引版本状态。',
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}/index_versions/{generationId}',
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
                'abilityTreeCode' => '218780',
                'abilityTreeNodes' => [
                    'FEATUREopensearchGTRUN8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引表名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_summary',
                    ],
                ],
                [
                    'name' => 'generationId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '索引全量版本',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1708674867',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'title' => 'IndexGeneration',
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'generationId' => [
                                        'description' => 'generationId',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1708674867',
                                    ],
                                    'status' => [
                                        'title' => 'starting, building, ready, stopped, failed',
                                        'description' => 'starting, building, ready, stopped, failed',
                                        'type' => 'string',
                                        'example' => 'ready',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {\\n    \\"generationId\\": 1708674867,\\n    \\"status\\": \\"ready\\"\\n  }\\n}","type":"json"}]',
            'title' => '根据generationId获取某个索引版本状态'."\0\0",
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'﻿'."\n"
                ."\n"
                .'```java'."\n"
                .'GET /openapi/ha3/instances/{instanceId}/tables/{tableName}/index_versions/{generationId}'."\n"
                .'```',
        ],
        'ListPostQueryResult' => [
            'path' => '/openapi/ha3/instances/{instanceId}/query',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '205312',
                'abilityTreeNodes' => [
                    'FEATUREopensearchO9FNU6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47.100.XX.XX',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'sql: sql查询, ha3: ha3查询',
                        'description' => 'sql: sql查询, ha3: ha3查询',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ha3',
                        'default' => 'sql',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求结构。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"assemblyQuery":"query=id:1&&cluster=general&&config=start:0,hit:10,format:json"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
                            ],
                            'result' => [
                                'title' => 'Object',
                                'description' => 'Object',
                                'type' => 'any',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
            'title' => '召回引擎版使用POST请求获取搜索测试结果',
        ],
        'ListRestQueryResult' => [
            'path' => '/openapi/ha3/instances/{instanceId}/rest-query',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '171180',
                'abilityTreeNodes' => [
                    'FEATUREopensearchO9FNU6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47.100.XX.XX',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求结构。',
                        'type' => 'object',
                        'properties' => [
                            'indexName' => [
                                'title' => '索引表名',
                                'description' => '索引表名',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'main_index',
                            ],
                            'query' => [
                                'title' => 'rest查询语句',
                                'description' => 'rest查询语句',
                                'type' => 'object',
                                'required' => false,
                                'example' => 'query%3Drelation_id%3A%221151274675_2%22%26%26cluster%3Dgeneral%26%26config%3Dstart%3A0%2Chit%3A10%2Cformat%3Ajson',
                            ],
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
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => 'F43E8AB4-419C-5F4C-90D6-615590DFAA3C',
                            ],
                            'result' => [
                                'title' => 'Object',
                                'description' => 'Object',
                                'type' => 'any',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F43E8AB4-419C-5F4C-90D6-615590DFAA3C\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
            'title' => '召回引擎版获取rest查询搜索测试结果',
        ],
        'ListVectorQueryResult' => [
            'path' => '/openapi/ha3/instances/{instanceId}/vector-query',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '194016',
                'abilityTreeNodes' => [
                    'FEATUREopensearch4EPY7K',
                    'FEATUREopensearch8URIID',
                    'FEATUREopensearch70UIZT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47.100.XX.XX',
                    ],
                ],
                [
                    'name' => 'queryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询类型：vector、primary_key、vector_text',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'primary_key',
                        'default' => 'vector',
                    ],
                ],
                [
                    'name' => 'vectorQueryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '向量查询类型：vector、image、text',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'image',
                        'default' => 'vector',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'body参数。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"tableName":"api","ids":["1"]}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
                            ],
                            'result' => [
                                'title' => 'Object',
                                'description' => 'Object',
                                'type' => 'any',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
            'title' => '向量检索版获取向量查询搜索测试结果',
        ],
        'PushDocuments' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/actions/bulk',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据源名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****_ecom_table_test',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'array',
                        'items' => [
                            'description' => '请求体',
                            'type' => 'any',
                            'required' => false,
                            'example' => '[{"cmd":"add","fields":{"id":"1","vt":[0.1]}}]',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pkField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主键字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'id of request',
                                'description' => 'id of request',
                                'type' => 'string',
                                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                            ],
                            'result' => [
                                'title' => 'Map',
                                'description' => 'Map',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
            'title' => '推送数据',
        ],
        'DescribeRegions' => [
            'path' => '/openapi/ha3/regions',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '180430',
                'abilityTreeNodes' => [
                    'FEATUREopensearch0AT3OG',
                    'FEATUREopensearchJB31XH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'acceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回的语言，默认值为zh-cn。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh-cn',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '当前请求的requestID',
                                'type' => 'string',
                                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                            ],
                            'result' => [
                                'description' => '返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回详情结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'localName' => [
                                            'description' => '区域名称',
                                            'type' => 'string',
                                            'example' => 'China (Hangzhou)',
                                        ],
                                        'endpoint' => [
                                            'description' => '接入点地址',
                                            'type' => 'string',
                                            'example' => 'endpoint',
                                        ],
                                        'regionId' => [
                                            'description' => '区域ID'."\n"
                                                .'cn-hangzhou  华东1（杭州）'."\n"
                                                .'cn-shanghai  华东2（上海）'."\n"
                                                .'cn-qingdao  华北1（青岛）'."\n"
                                                .'cn-beijing  华北2（北京）'."\n"
                                                .'cn-zhangjiakou  华北3（张家口）'."\n"
                                                .'cn-shenzhen  华南1（深圳）'."\n"
                                                .'ap-southeast-1  新加坡'."\n"
                                                .'cn-internal  内网中心'."\n"
                                                .'cn-zhangbei-in 内网张北'."\n"
                                                .'us-west-1-in  内网美国'."\n"
                                                .'cn-daily  日常'."\n"
                                                .'cn-test  联调'."\n"
                                                .'pre-hangzhou  预发杭州',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": [\\n    {\\n      \\"localName\\": \\"China (Hangzhou)\\",\\n      \\"endpoint\\": \\"endpoint\\",\\n      \\"regionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取云产品区域列表',
            'summary' => '获取云产品区域列表',
        ],
        'ListQueryResult' => [
            'summary' => '获取搜索测试结果。',
            'path' => '/openapi/ha3/instances/{instanceId}/query',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ha-cn-pl32rf0****',
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'query 语句',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'query%3D1%26%26config%3Dstart%3A0%2Chit%3A10%2Cformat%3Ajson%26%26cluster%3Dgeneral',
                    ],
                ],
                [
                    'name' => 'sql',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SQL语句。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'query%3Dselect%20max(content_id)%20from%20generation',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '9E5BCFAA-98B3-51D0-9188-B1BC07589337',
                            ],
                        ],
                    ],
                ],
                500 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9E5BCFAA-98B3-51D0-9188-B1BC07589337\\"\\n}","type":"json"}]',
            'title' => '获取搜索测试结果',
            'description' => '### 方法'."\n"
                .'`GET`'."\n"
                .'### URI'."\n"
                .'`/openapi/ha3/instances/{instanceId}/query?query=xxxx`。',
            'responseParamsDescription' => '| 字段      | 类型   | 描述                                                         |'."\n"
                .'| --------- | ------ | ------------------------------------------------------------ |'."\n"
                .'| requestId | String | 请求ID                                                       |'."\n"
                .'| result    | String | 引擎返回结果 |',
            'extraInfo' => '### 示例'."\n"
                .'**请求示例**'."\n"
                ."\n"
                .'```'."\n"
                .'sql: GET /openapi/ha3/instances/ha3_instances_id/query?sql=query%3Dselect+%2A+from+mx_index1217'."\n"
                ."\n"
                .'query: GET /openapi/ha3/instances/ha3_instances_id/query?query=config%3Dhit%3A4%2Cformat%3Ajson%2Cfetch_summary_type%3Apk%2Cqrs_chain%3Asearch%26%26query%3Did%3A8148508889615505646%26%26cluster%3Dgeneral'."\n"
                .'```'."\n"
                .'**返回示例**'."\n"
                ."\n"
                .'正确返回'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",'."\n"
                .'  "result": {}'."\n"
                .'}'."\n"
                .'```'."\n",
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'searchengine.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'searchengine.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'searchengine.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'searchengine.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'searchengine.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
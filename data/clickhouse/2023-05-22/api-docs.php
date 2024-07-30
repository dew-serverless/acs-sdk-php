<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'clickhouse',
        'version' => '2023-05-22',
    ],
    'directories' => [
        [
            'id' => 186084,
            'title' => '集群管理',
            'type' => 'directory',
            'children' => [
                'CreateDBInstance',
                'DeleteDBInstance',
                'StartDBInstance',
                'RestartDBInstance',
                'StopDBInstance',
                'ModifyDBInstanceClass',
                'ModifyDBInstanceAttribute',
                'DescribeDBInstances',
                'DescribeDBInstanceAttribute',
                'UpgradeMinorVersion',
            ],
        ],
        [
            'id' => 186094,
            'title' => '账号管理',
            'type' => 'directory',
            'children' => [
                'CreateAccount',
                'DeleteAccount',
                'ResetAccountPassword',
                'ModifyAccountDescription',
                'ModifyAccountAuthority',
                'DescribeAccounts',
                'DescribeAccountAuthority',
            ],
        ],
        [
            'id' => 186102,
            'title' => '数据库管理',
            'type' => 'directory',
            'children' => [
                'CreateDB',
                'DeleteDB',
                'DescribeDBInstanceDataSources',
            ],
        ],
        [
            'id' => 186106,
            'title' => '网络管理',
            'type' => 'directory',
            'children' => [
                'CreateEndpoint',
                'DeleteEndpoint',
                'ModifyDBInstanceConnectionString',
                'ModifySecurityIPList',
                'DescribeSecurityIPList',
                'DescribeEndpoints',
            ],
        ],
        [
            'id' => 186113,
            'title' => '任务及日志管理',
            'type' => 'directory',
            'children' => [
                'DescribeProcessList',
                'KillProcess',
                'DescribeSlowLogTrend',
                'DescribeSlowLogRecords',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateDBInstance' => [
            'summary' => '调用CreateDBInstance接口创建ClickHouse企业版集群。',
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
                'riskType' => 'none',
                'chargeType' => 'paid',
                'abilityTreeCode' => '182031',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseN0HBPQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '幂等参数',
                        'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AB',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可用区ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou-h',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-uf6xmupdn7v6ui9f****',
                    ],
                ],
                [
                    'name' => 'VswitchId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交换机ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vsw-uf632qye9oqt4x4sr****',
                    ],
                ],
                [
                    'name' => 'DBInstanceDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群说明。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '集群测试',
                    ],
                ],
                [
                    'name' => 'EngineVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '引擎版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '23.8',
                    ],
                ],
                [
                    'name' => 'ScaleMin',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'serverless弹性伸缩最小值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8',
                    ],
                ],
                [
                    'name' => 'ScaleMax',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'serverless弹性伸缩最大值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '32',
                    ],
                ],
                [
                    'name' => 'Engine',
                    'in' => 'query',
                    'schema' => [
                        'description' => '引擎类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'clickhouse',
                        'enum' => [
                            'clickhouse',
                        ],
                    ],
                ],
                [
                    'name' => 'MultiZone',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '多可用区配置。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ZoneId' => [
                                    'description' => '可用区ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou-h',
                                ],
                                'VSwitchIds' => [
                                    'description' => '交换机ID。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '交换机ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vsw-8vb05l07h3sdayqhe****',
                                    ],
                                    'required' => false,
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'OrderId' => [
                                        'description' => '订单ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '21154955706****',
                                    ],
                                    'ConnectionString' => [
                                        'description' => '连接地址。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****-clickhouse.clickhouseserver.rds.aliyuncs.com',
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
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\",\\n    \\"OrderId\\": 0,\\n    \\"ConnectionString\\": \\"cc-bp100p4q1g9z3****-clickhouse.clickhouseserver.rds.aliyuncs.com\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建集群',
        ],
        'DeleteDBInstance' => [
            'summary' => '调用DeleteDBInstance接口释放云数据库ClickHouse企业版集群。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '185379',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
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
                                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
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
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\"\\n  }\\n}","type":"json"}]',
            'title' => '释放集群',
        ],
        'StartDBInstance' => [
            'summary' => '调用StartDBInstance接口启动云数据库ClickHouse企业版集群。',
            'methods' => [
                'get',
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
                'operationType' => 'update',
                'abilityTreeCode' => '189351',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
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
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F76',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100000837',
                                    ],
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => '企业版集群测试',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F76\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": 100000837,\\n    \\"DBInstanceID\\": 0,\\n    \\"DBInstanceName\\": \\"企业版集群测试\\"\\n  }\\n}","type":"json"}]',
            'title' => '启动集群',
        ],
        'RestartDBInstance' => [
            'summary' => '调用RestartDBInstance接口重启云数据库ClickHouse企业版集群。',
            'methods' => [
                'get',
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
                'operationType' => 'update',
                'abilityTreeCode' => '192305',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
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
                                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100001080',
                                    ],
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => '企业版集群测试',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": 100001080,\\n    \\"DBInstanceID\\": 0,\\n    \\"DBInstanceName\\": \\"企业版集群测试\\"\\n  }\\n}","type":"json"}]',
            'title' => '重启集群',
        ],
        'StopDBInstance' => [
            'summary' => '调用StopDBInstance接口暂停云数据库ClickHouse企业版集群。',
            'methods' => [
                'get',
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
                'operationType' => 'update',
                'abilityTreeCode' => '189348',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
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
                                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100000785',
                                    ],
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => '企业版集群测试',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": 100000785,\\n    \\"DBInstanceID\\": 0,\\n    \\"DBInstanceName\\": \\"企业版集群测试\\"\\n  }\\n}","type":"json"}]',
            'title' => '暂停集群',
        ],
        'ModifyDBInstanceClass' => [
            'summary' => '调用ModifyDBInstanceClass接口修改集群的弹性配置。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '188578',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'ScaleMin',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'serverless弹性伸缩最小值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ScaleMax',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'serverless弹性伸缩最大值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '32',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxx-xxx-xxx',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10000****',
                                    ],
                                    'ScaleMin' => [
                                        'description' => 'serverless弹性伸缩最小值。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'ScaleMax' => [
                                        'description' => 'serverless弹性伸缩最大值。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '32',
                                    ],
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => 'cc-xxxxxxx'."\n",
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => 'cc-xxxxxxx'."\n",
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxx-xxx-xxx\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": 0,\\n    \\"ScaleMin\\": 2,\\n    \\"ScaleMax\\": 32,\\n    \\"DBInstanceID\\": 0,\\n    \\"DBInstanceName\\": \\"cc-xxxxxxx\\\\n\\"\\n  }\\n}","type":"json"}]',
            'title' => '修改集群弹性配置',
        ],
        'ModifyDBInstanceAttribute' => [
            'summary' => '调用ModifyDBInstanceAttribute接口修改集群的配置属性。',
            'methods' => [
                'get',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-xxxxx',
                    ],
                ],
                [
                    'name' => 'AttributeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改的类型。'."\n"
                            .'- MaintainTime：修改运维时间'."\n"
                            .'- DBInstanceDescription：修改实例名称',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'DBInstanceDescription',
                        'enum' => [
                            'MaintainTime',
                            'DBInstanceDescription',
                        ],
                    ],
                ],
                [
                    'name' => 'AttributeValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改的内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'clickhouse',
                        'default' => 'clickhouse',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxx-xxx-xxx',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxx-xxx-xxx\\"\\n}","type":"json"}]',
            'title' => '修改集群的配置属性',
        ],
        'DescribeDBInstances' => [
            'summary' => '调用DescribeDBInstances接口查询集群列表。',
            'methods' => [
                'get',
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
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID列表，多个集群ID之间用英文半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-xxxxx,cx-xxxx',
                    ],
                ],
                [
                    'name' => 'DBInstanceStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'active',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-4690g37929****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '总记录数',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页记录数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'PageNumber' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'DBInstances' => [
                                        'description' => '实例详情列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '实例详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DBInstanceId' => [
                                                    'description' => '集群ID。',
                                                    'type' => 'string',
                                                    'example' => 'cc-xxxxxxx',
                                                ],
                                                'Description' => [
                                                    'description' => '参数描述。',
                                                    'type' => 'string',
                                                    'example' => 'test_desc',
                                                ],
                                                'Engine' => [
                                                    'description' => '引擎类型。',
                                                    'type' => 'string',
                                                    'example' => 'clickhouse',
                                                ],
                                                'EngineVersion' => [
                                                    'description' => '引擎版本。',
                                                    'type' => 'string',
                                                    'example' => '22.8',
                                                ],
                                                'AliUid' => [
                                                    'description' => '用户ID。',
                                                    'type' => 'string',
                                                    'example' => '1294****',
                                                ],
                                                'Bid' => [
                                                    'description' => '渠道ID。',
                                                    'type' => 'string',
                                                    'example' => '186681****',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'ZoneId' => [
                                                    'description' => '可用区ID',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-i',
                                                ],
                                                'ChargeType' => [
                                                    'description' => '付费方式。 取值：'."\n"
                                                        ."\n"
                                                        .'- PrePaid：包年包月。'."\n"
                                                        .'- PostPaid：按量付费。',
                                                    'type' => 'string',
                                                    'example' => 'PostPaid',
                                                ],
                                                'Status' => [
                                                    'description' => '实例状态。',
                                                    'type' => 'string',
                                                    'example' => 'active',
                                                ],
                                                'VpcId' => [
                                                    'description' => 'VPC ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-uf6kg****',
                                                ],
                                                'VSwitchId' => [
                                                    'description' => '交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-8vb5mw****',
                                                ],
                                                'ScaleMin' => [
                                                    'description' => 'serverless弹性伸缩最小值。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'ScaleMax' => [
                                                    'description' => 'serverless弹性伸缩最大值。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '13',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '到期时间。',
                                                    'type' => 'string',
                                                    'example' => '2024-02-16 11:51:06',
                                                ],
                                                'LockMode' => [
                                                    'description' => '锁定模式。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'LockReason' => [
                                                    'description' => '锁定原因。',
                                                    'type' => 'string',
                                                    'example' => 'null',
                                                ],
                                                'MaintainStartTime' => [
                                                    'description' => '可维护时间开始时间。',
                                                    'type' => 'string',
                                                    'example' => '00:00Z',
                                                ],
                                                'MaintainEndTime' => [
                                                    'description' => '可维护时间结束时间。',
                                                    'type' => 'string',
                                                    'example' => '04:00:00Z',
                                                ],
                                                'DeletionProtection' => [
                                                    'description' => '是否已开启释放保护功能。',
                                                    'type' => 'string',
                                                    'example' => 'False',
                                                ],
                                                'ResourceGroupId' => [
                                                    'description' => '资源组ID。',
                                                    'type' => 'string',
                                                    'example' => 'rg-acfmzy****',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-12-04 21:16:15',
                                                ],
                                                'Tags' => [
                                                    'description' => '标签组。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '标签。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Key' => [
                                                                'description' => '标签键。',
                                                                'type' => 'string',
                                                                'example' => 'tag',
                                                            ],
                                                            'Value' => [
                                                                'description' => '标签值。',
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
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxx-xxx-xxx',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"TotalCount\\": \\"1\\",\\n    \\"PageSize\\": 30,\\n    \\"PageNumber\\": 1,\\n    \\"DBInstances\\": [\\n      {\\n        \\"DBInstanceId\\": \\"cc-xxxxxxx\\",\\n        \\"Description\\": \\"test_desc\\",\\n        \\"Engine\\": \\"clickhouse\\",\\n        \\"EngineVersion\\": \\"22.8\\",\\n        \\"AliUid\\": \\"1294****\\",\\n        \\"Bid\\": \\"186681****\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-i\\",\\n        \\"ChargeType\\": \\"PostPaid\\",\\n        \\"Status\\": \\"active\\",\\n        \\"VpcId\\": \\"vpc-uf6kg****\\",\\n        \\"VSwitchId\\": \\"vsw-8vb5mw****\\",\\n        \\"ScaleMin\\": 1,\\n        \\"ScaleMax\\": 13,\\n        \\"ExpireTime\\": \\"2024-02-16 11:51:06\\",\\n        \\"LockMode\\": \\"0\\",\\n        \\"LockReason\\": \\"null\\",\\n        \\"MaintainStartTime\\": \\"00:00Z\\",\\n        \\"MaintainEndTime\\": \\"04:00:00Z\\",\\n        \\"DeletionProtection\\": \\"False\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmzy****\\",\\n        \\"CreateTime\\": \\"2022-12-04 21:16:15\\",\\n        \\"Tags\\": [\\n          {\\n            \\"Key\\": \\"tag\\",\\n            \\"Value\\": \\"test\\"\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"xxx-xxx-xxx\\"\\n}","type":"json"}]',
            'title' => '查询集群列表',
        ],
        'DescribeDBInstanceAttribute' => [
            'summary' => '调用DescribeDBInstanceAttribute接口查询云数据库ClickHouse企业版集群的详细信息。',
            'methods' => [
                'get',
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
                'operationType' => 'none',
                'abilityTreeCode' => '183134',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
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
                                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'Description' => [
                                        'description' => '集群描述。',
                                        'type' => 'string',
                                        'example' => '集群测试',
                                    ],
                                    'Engine' => [
                                        'description' => '引擎类型。',
                                        'type' => 'string',
                                        'example' => 'clickhouse',
                                    ],
                                    'EngineVersion' => [
                                        'description' => '引擎版本。',
                                        'type' => 'string',
                                        'example' => '23.8',
                                    ],
                                    'AliUid' => [
                                        'description' => '阿里云账号ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '140692647406****',
                                    ],
                                    'Bid' => [
                                        'description' => '渠道ID。',
                                        'type' => 'string',
                                        'example' => 'PD39050615820269****',
                                    ],
                                    'RegionId' => [
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'ZoneId' => [
                                        'description' => '可用区ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou-h',
                                    ],
                                    'ChargeType' => [
                                        'description' => '付费方式。 取值说明：'."\n"
                                            .'- PrePaid：包年包月。'."\n"
                                            .'- PostPaid：按量付费。',
                                        'type' => 'string',
                                        'example' => 'PrePaid',
                                    ],
                                    'Status' => [
                                        'description' => '实例状态。',
                                        'type' => 'string',
                                        'example' => 'active',
                                    ],
                                    'VpcId' => [
                                        'description' => 'VPC ID。',
                                        'type' => 'string',
                                        'example' => 'vpc-wz9duj8xd6r1gzhsg*****',
                                    ],
                                    'VSwitchId' => [
                                        'description' => '交换机ID。',
                                        'type' => 'string',
                                        'example' => 'vsw-uf67ij56zm9x4uc6hmilg',
                                    ],
                                    'ScaleMin' => [
                                        'description' => 'serverless弹性伸缩最小值。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '8',
                                    ],
                                    'ScaleMax' => [
                                        'description' => 'serverless弹性伸缩最大值。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '32',
                                    ],
                                    'StorageSize' => [
                                        'description' => '存储空间大小。单位：GB',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '12',
                                    ],
                                    'StorageType' => [
                                        'description' => '存储类型。',
                                        'type' => 'string',
                                        'example' => '100',
                                    ],
                                    'ObjectStoreSize' => [
                                        'description' => '对象存储大小。',
                                        'type' => 'string',
                                        'example' => '13',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '集群的到期时间，格式：yyyy-MM-ddTHH:mm:ssZ。'."\n"
                                            .'>按量付费集群无到期时间，返回值为空。',
                                        'type' => 'string',
                                        'example' => '2024-04-17T08:14:48Z',
                                    ],
                                    'LockMode' => [
                                        'description' => '集群的锁定模式。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'LockReason' => [
                                        'description' => '锁定原因。',
                                        'type' => 'string',
                                        'example' => 'nolock',
                                    ],
                                    'MaintainStartTime' => [
                                        'description' => '可维护时间开始时间。',
                                        'type' => 'string',
                                        'example' => '12:00',
                                    ],
                                    'MaintainEndTime' => [
                                        'description' => '可维护时间结束时间。',
                                        'type' => 'string',
                                        'example' => '21:00',
                                    ],
                                    'DeletionProtection' => [
                                        'description' => '是否已开启释放保护功能。',
                                        'type' => 'boolean',
                                        'example' => '0/1',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmzygvt54****',
                                    ],
                                    'Tags' => [
                                        'description' => '标签信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'description' => '标签的名称。',
                                                    'type' => 'string',
                                                    'example' => 'id',
                                                ],
                                                'Value' => [
                                                    'description' => '标签的值。',
                                                    'type' => 'string',
                                                    'example' => 'ck',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Nodes' => [
                                        'description' => '节点信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '节点信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ZoneId' => [
                                                    'description' => '可用区ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou-h',
                                                ],
                                                'NodeStatus' => [
                                                    'description' => '节点运行状态。',
                                                    'type' => 'string',
                                                    'example' => 'active',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CreateTime' => [
                                        'description' => '集群的创建时间，格式：yyyy-MM-ddTHH:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2023-09-14T08:14:48Z',
                                    ],
                                    'EngineMinorVersion' => [
                                        'description' => '集群引擎的小版本号。',
                                        'type' => 'string',
                                        'example' => '23.8.1.41495_6',
                                    ],
                                    'LatestEngineMinorVersion' => [
                                        'description' => '最新内核小版本号。',
                                        'type' => 'string',
                                        'example' => '23.8.1.41495_6',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\",\\n    \\"Description\\": \\"集群测试\\",\\n    \\"Engine\\": \\"clickhouse\\",\\n    \\"EngineVersion\\": \\"23.8\\",\\n    \\"AliUid\\": 0,\\n    \\"Bid\\": \\"PD39050615820269****\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n    \\"ChargeType\\": \\"PrePaid\\",\\n    \\"Status\\": \\"active\\",\\n    \\"VpcId\\": \\"vpc-wz9duj8xd6r1gzhsg*****\\",\\n    \\"VSwitchId\\": \\"vsw-uf67ij56zm9x4uc6hmilg\\",\\n    \\"ScaleMin\\": 8,\\n    \\"ScaleMax\\": 32,\\n    \\"StorageSize\\": 12,\\n    \\"StorageType\\": \\"100\\",\\n    \\"ObjectStoreSize\\": \\"13\\",\\n    \\"ExpireTime\\": \\"2024-04-17T08:14:48Z\\",\\n    \\"LockMode\\": \\"0\\",\\n    \\"LockReason\\": \\"nolock\\",\\n    \\"MaintainStartTime\\": \\"12:00\\",\\n    \\"MaintainEndTime\\": \\"21:00\\",\\n    \\"DeletionProtection\\": true,\\n    \\"ResourceGroupId\\": \\"rg-acfmzygvt54****\\",\\n    \\"Tags\\": [\\n      {\\n        \\"Key\\": \\"id\\",\\n        \\"Value\\": \\"ck\\"\\n      }\\n    ],\\n    \\"Nodes\\": [\\n      {\\n        \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n        \\"NodeStatus\\": \\"active\\"\\n      }\\n    ],\\n    \\"CreateTime\\": \\"2023-09-14T08:14:48Z\\",\\n    \\"EngineMinorVersion\\": \\"23.8.1.41495_6\\",\\n    \\"LatestEngineMinorVersion\\": \\"23.8.1.41495_6\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询集群的详细信息',
        ],
        'UpgradeMinorVersion' => [
            'summary' => '调用UpgradeMinorVersion接口升级指定云数据库ClickHouse企业版集群的内核小版本。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp1jyis8p15we****',
                    ],
                ],
                [
                    'name' => 'SwitchTimeMode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '切换模式',
                        'description' => '是否立即升级，取值说明：'."\n"
                            .'- **Immediate**：立即升级。'."\n"
                            .'- **MaintainTime**：在可运维时间段内升级。'."\n"
                            .'- **SpecifyTime**：指定时间升级。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Immediate',
                        'default' => 'Immediate',
                        'enum' => [
                            'Immediate',
                            'MaintainTime',
                            'SpecifyTime',
                        ],
                    ],
                ],
                [
                    'name' => 'SwitchTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定时间点切换时，指定切换时间点。',
                        'description' => '指定的升级时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。'."\n"
                            .'> 当SwitchTimeMode为SpecifyTime时，需要通过该参数指定升级时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-01-09T05:00:00Z',
                    ],
                ],
                [
                    'name' => 'TargetMinorVersion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '目标内核小版本，默认升级到最新。',
                        'description' => '目标内核小版本。'."\n"
                            .'>默认不填写，直接升级到最新的内核小版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '23.8.1.41495_6',
                    ],
                ],
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
                                'example' => 'FE242962-6DA3-5FC8-9691-37B62A3210F7',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceName' => [
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'cc-uf6x229yeq166****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FE242962-6DA3-5FC8-9691-37B62A3210F7\\",\\n  \\"Data\\": {\\n    \\"DBInstanceName\\": \\"cc-uf6x229yeq166****\\"\\n  }\\n}","type":"json"}]',
            'title' => '升级内核小版本',
        ],
        'CreateAccount' => [
            'summary' => '调用CreateAccount接口为云数据库ClickHouse企业版集群创建数据库账号。',
            'methods' => [
                'get',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'AccountType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号的类型，取值说明：'."\n"
                            .'- **NormalAccount**：普通账号。'."\n"
                            .'- **SuperAccount**：高权限账号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NormalAccount',
                        'enum' => [
                            'SuperAccount',
                            'NormalAccount',
                        ],
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号，设置规则如下。'."\n"
                            .'- 名称唯一。'."\n"
                            .'- 由小写字母、数字或下划线组成。'."\n"
                            .'- 以小写字母开头，以小写字母或数字结尾。'."\n"
                            .'- 长度为2~64个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test1',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号密码，设置规则如下。'."\n"
                            ."\n"
                            .'- 由大写字母、小写字母、数字和特殊字符中的至少三种组成。'."\n"
                            ."\n"
                            .'- !@#$%^&*()_+-=为特殊字符。'."\n"
                            ."\n"
                            .'- 长度为8~32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a1b2c3d4@',
                    ],
                ],
                [
                    'name' => 'DmlAuthSetting',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '授权信息。',
                        'type' => 'object',
                        'properties' => [
                            'DmlAuthority' => [
                                'description' => '是否授予数据库账号DML权限。取值如下：'."\n"
                                    .'- **0**：允许进行读取、写入和更改设置的查询'."\n"
                                    .'- **1**：仅允许进行读取数据的查询。'."\n"
                                    .'- **2**：允许进行读取数据和更改设置的查询。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                                'enum' => [
                                    '0',
                                    '1',
                                    '2',
                                ],
                            ],
                            'DdlAuthority' => [
                                'description' => '是否授予数据库账号DDL权限，取值说明：'."\n"
                                    ."\n"
                                    .'- **true**：允许DDL。'."\n"
                                    .'- **false**：禁止DDL。'."\n",
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'AllowDictionaries' => [
                                'description' => '需要授权的字典列表。如果有多个，用英文逗号（,）隔开。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '需要授权的字典列表。如果有多个，用英文逗号（,）隔开。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'dc1,dc2',
                                ],
                                'required' => false,
                            ],
                            'AllowDatabases' => [
                                'description' => '需要授权的数据库列表。如果有多个，用英文逗号（,）隔开。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '需要授权的数据库列表。如果有多个，用英文逗号（,）隔开。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'db1,db2',
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'clickhouse',
                        'default' => 'clickhouse',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注说明。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试使用',
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
                                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'Account' => [
                                        'description' => '数据库账号。',
                                        'type' => 'string',
                                        'example' => 'test1',
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
                        'errorCode' => 'InvalidAccountType.Malformed',
                        'errorMessage' => 'The specified parameter "AccountType" is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountName.Malformed',
                        'errorMessage' => 'The specified parameter "Account" is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountPassword.Malformed',
                        'errorMessage' => 'The specified parameter "Password" is not valid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\",\\n    \\"Account\\": \\"test1\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建账号',
        ],
        'DeleteAccount' => [
            'summary' => '调用DeleteAccount接口删除账号。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'clickhouse',
                        'default' => 'clickhouse',
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
                                'example' => '21D06907-CEA5-561D-B6B1-198BCCE99ED1',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'Account' => [
                                        'description' => '数据库账号。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"21D06907-CEA5-561D-B6B1-198BCCE99ED1\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\",\\n    \\"Account\\": \\"test1\\"\\n  }\\n}","type":"json"}]',
            'title' => '删除账号',
        ],
        'ResetAccountPassword' => [
            'summary' => '调用ResetAccountPassword接口重置云数据库ClickHouse企业版集群的数据库账号密码。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test1',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号的密码。'."\n"
                            ."\n"
                            .'- 由大写字母、小写字母、数字和特殊字符中的至少三种组成。'."\n"
                            .'- !@#$%^&*()_+-=为特殊字符。'."\n"
                            .'- 长度为8~32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123456Aa',
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'clickhouse',
                        'default' => 'clickhouse',
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
                                'example' => '5A6A077A-577C-536E-AC13-8E715D7A34C8',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'Account' => [
                                        'description' => '数据库账号。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A6A077A-577C-536E-AC13-8E715D7A34C8\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\",\\n    \\"Account\\": \\"test1\\"\\n  }\\n}","type":"json"}]',
            'title' => '重置账号的密码',
        ],
        'ModifyAccountDescription' => [
            'summary' => '调用ModifyAccountDescription接口修改账号的备注信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '185303',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域 ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testuser',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号备注。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '赶回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxx-xxx-xxx',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-xxxxx',
                                    ],
                                    'Account' => [
                                        'description' => '数据库账号。',
                                        'type' => 'string',
                                        'example' => 'testuser',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxx-xxx-xxx\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-xxxxx\\",\\n    \\"Account\\": \\"testuser\\"\\n  }\\n}","type":"json"}]',
            'title' => '修改账号备注',
        ],
        'ModifyAccountAuthority' => [
            'summary' => '调用ModifyAccountAuthority接口修改账号的授权信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '185304',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test1',
                    ],
                ],
                [
                    'name' => 'DmlAuthSetting',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '授权信息。',
                        'type' => 'object',
                        'properties' => [
                            'DmlAuthority' => [
                                'description' => '是否授予数据库账号DML权限。取值如下：'."\n"
                                    ."\n"
                                    .'- **0**：Read，Write，and Change settings queries are allowed.'."\n"
                                    ."\n"
                                    .'- **1**：Only Read data queries are allowed.'."\n"
                                    ."\n"
                                    .'- **2**：Read data and Change settings queries are allowed.',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                                'enum' => [
                                    '0',
                                    '1',
                                    '2',
                                ],
                            ],
                            'DdlAuthority' => [
                                'description' => '是否授予数据库账号DDL权限，取值说明：'."\n"
                                    ."\n"
                                    .'- **true**：允许DDL。'."\n"
                                    .'- **false**：禁止DDL。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'AllowDictionaries' => [
                                'description' => '需要授权的字典列表。如果有多个，用英文逗号（,）隔开。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '需要授权的字典列表。如果有多个，用英文逗号（,）隔开。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'db1,db2',
                                ],
                                'required' => false,
                            ],
                            'AllowDatabases' => [
                                'description' => '需要授权的数据库列表。如果有多个，用英文逗号（,）隔开。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '需要授权的数据库列表。如果有多个，用英文逗号（,）隔开。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'db1,db2',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '05321590-BB65-4720-8CB6-8218E041CDD0',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'Account' => [
                                        'description' => '数据库账号。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"05321590-BB65-4720-8CB6-8218E041CDD0\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\",\\n    \\"Account\\": \\"test1\\"\\n  }\\n}","type":"json"}]',
            'title' => '修改账号的授权信息',
        ],
        'DescribeAccounts' => [
            'summary' => '调用DescribeAccounts接口查询指定云数据库ClickHouse集群的数据库账号列表。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '185288',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            .'- **30**（默认值）'."\n"
                            .'- **50**'."\n"
                            .'- **100**',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'clickhouse',
                        'default' => 'clickhouse',
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
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '总记录数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageNumber' => [
                                        'description' => '页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页记录数，取值：'."\n"
                                            .'- **30**（默认值）'."\n"
                                            .'- **50**'."\n"
                                            .'- **100**',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'Accounts' => [
                                        'description' => '账号列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Account' => [
                                                    'description' => '数据库账号。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'Description' => [
                                                    'description' => '备注信息。',
                                                    'type' => 'string',
                                                    'example' => '测试使用',
                                                ],
                                                'AccountType' => [
                                                    'description' => '数据库账号的类型，取值说明：'."\n"
                                                        .'- **NormalAccount**：普通账号。'."\n"
                                                        .'- **SuperAccount**：高权限账号。',
                                                    'type' => 'string',
                                                    'example' => 'NormalAccount',
                                                ],
                                                'Status' => [
                                                    'description' => '账号状态。取值说明：'."\n"
                                                        ."\n"
                                                        .'- **0**：创建中。'."\n"
                                                        ."\n"
                                                        .'- **1**：使用中。'."\n"
                                                        ."\n"
                                                        .'- **3**：删除中。',
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
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records. ',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 1,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 30,\\n    \\"Accounts\\": [\\n      {\\n        \\"Account\\": \\"test\\",\\n        \\"Description\\": \\"测试使用\\",\\n        \\"AccountType\\": \\"NormalAccount\\",\\n        \\"Status\\": \\"1\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询账号列表',
        ],
        'DescribeAccountAuthority' => [
            'summary' => '调用DescribeAccountAuthority接口查看账号权限。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '185309',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库账号的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test1',
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
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'Account' => [
                                        'description' => '数据库账号的名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'DmlAuthority' => [
                                        'description' => '是否授予数据库账号DML权限。取值如下：'."\n"
                                            ."\n"
                                            .'0：Read，Write，and Change settings queries are allowed.'."\n"
                                            ."\n"
                                            .'1：Only Read data queries are allowed.'."\n"
                                            ."\n"
                                            .'2：Read data and Change settings queries are allowed.',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'DdlAuthority' => [
                                        'description' => '是否授予数据库账号DDL权限，取值说明：'."\n"
                                            ."\n"
                                            .'- **true**：允许DDL。'."\n"
                                            .'- **false**：禁止DDL。'."\n",
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'AllowDatabases' => [
                                        'description' => '已授权的数据库列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '已授权的数据库列表。',
                                            'type' => 'string',
                                            'example' => 'db1',
                                        ],
                                    ],
                                    'AllowDictionaries' => [
                                        'description' => '已授权的字典列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '已授权的字典列表。',
                                            'type' => 'string',
                                            'example' => 'dt1',
                                        ],
                                    ],
                                    'TotalDatabases' => [
                                        'description' => '所有数据库列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '所有数据库列表。',
                                            'type' => 'string',
                                            'example' => 'db1,db2',
                                        ],
                                    ],
                                    'TotalDictionaries' => [
                                        'description' => '数据库。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'db.dict形式，代表某数据库的某字典',
                                            'type' => 'string',
                                            'example' => 'test1.range_key_dict',
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
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\",\\n    \\"Account\\": \\"test1\\",\\n    \\"DmlAuthority\\": 0,\\n    \\"DdlAuthority\\": true,\\n    \\"AllowDatabases\\": [\\n      \\"db1\\"\\n    ],\\n    \\"AllowDictionaries\\": [\\n      \\"dt1\\"\\n    ],\\n    \\"TotalDatabases\\": [\\n      \\"db1,db2\\"\\n    ],\\n    \\"TotalDictionaries\\": [\\n      \\"test1.range_key_dict\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查看账号权限',
        ],
        'CreateDB' => [
            'summary' => '调用CreateDB接口创建数据库。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '185311',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'DBName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。命名规则如下：'."\n"
                            .'- 由小写字母、数字、下划线（_）、中划线（-）组成。'."\n"
                            .'- 以小写字母开头，小写字母或数字结尾。'."\n"
                            .'- 长度最多为64个字符。'."\n"
                            ."\n"
                            .'><notice>下划线（_）会被看作两个字符。></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testdb001',
                    ],
                ],
                [
                    'name' => 'Comment',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                                'example' => '94F92113-FF63-5E57-8401-6FE123AD11DD',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'DBName' => [
                                        'description' => '数据库名称。',
                                        'type' => 'string',
                                        'example' => 'testdb001',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94F92113-FF63-5E57-8401-6FE123AD11DD\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\",\\n    \\"DBName\\": \\"testdb001\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建数据库',
        ],
        'DeleteDB' => [
            'summary' => '调用DeleteDB接口删除数据库。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '185312',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'DBName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testdb001',
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
                                'example' => '06798FEE-BEF2-5FAF-A30D-728973BBE97C',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'DBName' => [
                                        'description' => '数据库名称。',
                                        'type' => 'string',
                                        'example' => 'testdb001',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'InvalidDBInstanceState.NotSupport',
                        'errorMessage' => 'The specified instance state does\'t support this operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06798FEE-BEF2-5FAF-A30D-728973BBE97C\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\",\\n    \\"DBName\\": \\"testdb001\\"\\n  }\\n}","type":"json"}]',
            'title' => '删除数据库',
        ],
        'DescribeDBInstanceDataSources' => [
            'summary' => '调用DescribeDBInstanceDataSources接口查询DB或者Table的数据结构。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '185313',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'DBName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dbtest',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '表名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tableTest',
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
                                'example' => 'F543E6CC-6868-523D-8D28-0E92CF977ED2',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceId' => [
                                        'description' => '集群ID。',
                                        'type' => 'string',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'Schemas' => [
                                        'description' => '账号。',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'Tables' => [
                                        'description' => '表列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '表列表。',
                                            'type' => 'string',
                                            'example' => 'table_test',
                                        ],
                                    ],
                                    'Columns' => [
                                        'description' => '列类型。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '列类型。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DBName' => [
                                                    'description' => '数据库名称。',
                                                    'type' => 'string',
                                                    'example' => 'dbtest',
                                                ],
                                                'Type' => [
                                                    'description' => '存储数据类型。',
                                                    'type' => 'string',
                                                    'example' => 'UInt64',
                                                ],
                                                'TableName' => [
                                                    'description' => '表名。',
                                                    'type' => 'string',
                                                    'example' => 'tableTest',
                                                ],
                                                'ColumnName' => [
                                                    'description' => '列名。',
                                                    'type' => 'string',
                                                    'example' => 'c31',
                                                ],
                                                'PrimaryKey' => [
                                                    'description' => '列是否为主键，取值说明：'."\n"
                                                        ."\n"
                                                        .'- **true**：主键。'."\n"
                                                        .'- **false**：非主键。',
                                                    'type' => 'string',
                                                    'example' => 'false',
                                                ],
                                                'Comment' => [
                                                    'description' => '数据库账号的描述。',
                                                    'type' => 'string',
                                                    'example' => '测试',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound ',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F543E6CC-6868-523D-8D28-0E92CF977ED2\\",\\n  \\"Data\\": {\\n    \\"DBInstanceId\\": \\"cc-bp100p4q1g9z3****\\",\\n    \\"Schemas\\": \\"default\\",\\n    \\"Tables\\": [\\n      \\"table_test\\"\\n    ],\\n    \\"Columns\\": [\\n      {\\n        \\"DBName\\": \\"dbtest\\",\\n        \\"Type\\": \\"UInt64\\",\\n        \\"TableName\\": \\"tableTest\\",\\n        \\"ColumnName\\": \\"c31\\",\\n        \\"PrimaryKey\\": \\"false\\",\\n        \\"Comment\\": \\"测试\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询DB或者Table的数据结构',
        ],
        'CreateEndpoint' => [
            'summary' => '调用CreateEndpoint接口申请外网地址。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'DBInstanceNetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Public',
                        'enum' => [
                            'Public',
                        ],
                    ],
                ],
                [
                    'name' => 'ConnectionPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标连接地址的前缀，即ConnectionString参数的前缀部分。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp100p4q1g9z3****-clickhouse.clickhouseserver.rds.aliyuncs.com',
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
                                'example' => '2FED790E-FB61-4721-8C1C-07C627FA5A19',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2FED790E-FB61-4721-8C1C-07C627FA5A19\\"\\n}","type":"json"}]',
            'title' => '申请外网地址',
        ],
        'DeleteEndpoint' => [
            'summary' => '调用DeleteEndpoint接口释放外网地址。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '185385',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'ConnectionString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标连接地址的前缀，即ConnectionString参数的前缀部分。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-bp100p4q1g9z3****-clickhouse.clickhouseserver.rds.aliyuncs.com',
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
                                'example' => 'F5178C10-1407-4987-9133-DE4DC9119F75',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F5178C10-1407-4987-9133-DE4DC9119F75\\"\\n}","type":"json"}]',
            'title' => '释放外网地址',
        ],
        'ModifyDBInstanceConnectionString' => [
            'summary' => '调用ModifyDBInstanceConnectionString接口修改集群的连接地址。',
            'methods' => [
                'get',
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
                'operationType' => 'update',
                'abilityTreeCode' => '186649',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-xxxxx',
                    ],
                ],
                [
                    'name' => 'ConnectionString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '连接地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-2ze34****-clickhouse..clickhouseserver.pre.rds.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'ConnectionStringPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '连接数据库的地址前辍。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cc-****-clickhouse',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxx-xxx-xxx',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => 'cc-xxxxx',
                                    ],
                                    'ConnectionString' => [
                                        'description' => '连接地址。',
                                        'type' => 'string',
                                        'example' => 'cc-2ze34****-clickhouse..clickhouseserver.pre.rds.aliyuncs.com',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => 'cc-xxxxx',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxx-xxx-xxx\\",\\n  \\"Data\\": {\\n    \\"DBInstanceID\\": 0,\\n    \\"ConnectionString\\": \\"cc-2ze34****-clickhouse..clickhouseserver.pre.rds.aliyuncs.com\\",\\n    \\"DBInstanceName\\": \\"cc-xxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '修改连接地址',
        ],
        'ModifySecurityIPList' => [
            'summary' => '调用ModifySecurityIPList接口变更集群白名单设置。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '185639',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-xxxxx',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '操作的分组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SecurityIPList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '白名单IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.0.0/24,172.16.0.0/24',
                    ],
                ],
                [
                    'name' => 'ModifyMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改模式。'."\n"
                            .'- 0：覆盖修改'."\n"
                            .'- 1：增加'."\n"
                            .'- 2：删除'."\n"
                            ."\n"
                            .'> 建议固定指定0进行覆盖修改',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxx-xxx-xxx',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'GroupName' => [
                                        'description' => '分组名称。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'SecurityIPType' => [
                                        'description' => 'IP地址类型。',
                                        'type' => 'string',
                                        'example' => 'ipv4',
                                    ],
                                    'GroupTag' => [
                                        'description' => '分组标签。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'SecurityIPList' => [
                                        'description' => '白名单分组下的IP列表。',
                                        'type' => 'string',
                                        'example' => '192.168.0.0/24,172.16.0.0/24',
                                    ],
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => 'cc-xxxx',
                                    ],
                                    'WhitelistNetType' => [
                                        'description' => '白名单的网络类型。',
                                        'type' => 'string',
                                        'example' => 'mix',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => 'cc-xxxx',
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
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.	',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxx-xxx-xxx\\",\\n  \\"Data\\": {\\n    \\"GroupName\\": \\"test\\",\\n    \\"SecurityIPType\\": \\"ipv4\\",\\n    \\"GroupTag\\": \\"test\\",\\n    \\"TaskId\\": 1,\\n    \\"SecurityIPList\\": \\"192.168.0.0/24,172.16.0.0/24\\",\\n    \\"DBInstanceID\\": 0,\\n    \\"WhitelistNetType\\": \\"mix\\",\\n    \\"DBInstanceName\\": \\"cc-xxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '变更白名单',
        ],
        'DescribeSecurityIPList' => [
            'summary' => '调用DescribeSecurityIPList接口查询白名单。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '185650',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
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
                                'example' => 'D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => '集群测试',
                                    ],
                                    'GroupItems' => [
                                        'description' => '白名单分组列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '白名单分组列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'GroupName' => [
                                                    'description' => '白名单分组名称。',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'SecurityIPType' => [
                                                    'description' => 'IP地址的类型。',
                                                    'type' => 'string',
                                                    'example' => 'ipv4',
                                                ],
                                                'GroupTag' => [
                                                    'description' => '分组标签。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'SecurityIPList' => [
                                                    'description' => '白名单分组下的IP列表。',
                                                    'type' => 'string',
                                                    'example' => '127.0.XX.XX',
                                                ],
                                                'WhitelistNetType' => [
                                                    'description' => '白名单的网络类型。',
                                                    'type' => 'string',
                                                    'example' => 'mix',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0CEC6AC-7760-409A-A0D5-E6CD8660E9CC\\",\\n  \\"Data\\": {\\n    \\"DBInstanceID\\": 0,\\n    \\"DBInstanceName\\": \\"集群测试\\",\\n    \\"GroupItems\\": [\\n      {\\n        \\"GroupName\\": \\"default\\",\\n        \\"SecurityIPType\\": \\"ipv4\\",\\n        \\"GroupTag\\": \\"test\\",\\n        \\"SecurityIPList\\": \\"127.0.XX.XX\\",\\n        \\"WhitelistNetType\\": \\"mix\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询白名单',
        ],
        'DescribeEndpoints' => [
            'summary' => '调用DescribeEndpoints接口查询集群的访问地址。',
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
                'operationType' => 'none',
                'abilityTreeCode' => '185373',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-xxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxx-xxx-xxx',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceNetworkType' => [
                                        'description' => '实例的网络类型，取值：'."\n"
                                            .'* **VPC**：专有网络。'."\n"
                                            .'* **PUBLIC**：公网网络。',
                                        'type' => 'string',
                                        'example' => 'VPC',
                                    ],
                                    'Endpoints' => [
                                        'description' => 'Endpoint详细信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'Endpoint详细信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'NetType' => [
                                                    'description' => '连接地址的网络类型，取值：'."\n"
                                                        .'- VPC：专有网络。'."\n"
                                                        .'- PUBLIC：公网网络。',
                                                    'type' => 'string',
                                                    'example' => 'VPC',
                                                ],
                                                'Status' => [
                                                    'description' => '状态。',
                                                    'type' => 'string',
                                                    'example' => 'active',
                                                ],
                                                'ConnectionString' => [
                                                    'description' => '实例连接地址',
                                                    'type' => 'string',
                                                    'example' => 'cc-****-clickhouse.clickhouseserver.pre.rds.aliyuncs.com',
                                                ],
                                                'VpcId' => [
                                                    'description' => 'VPC ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-uf61z****',
                                                ],
                                                'VSwitchId' => [
                                                    'description' => '交换机ID。',
                                                    'type' => 'string',
                                                    'example' => 'vsw-0xi8829****',
                                                ],
                                                'VpcInstanceId' => [
                                                    'description' => 'VPC实例ID。',
                                                    'type' => 'string',
                                                    'example' => 'vpc-uf61z****',
                                                ],
                                                'Ports' => [
                                                    'description' => '端口详细信息列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '端口详细信息。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Protocol' => [
                                                                'description' => '协议类型。取值范围：'."\n"
                                                                    ."\n"
                                                                    .'- HttpPort：HTTP端口号。'."\n"
                                                                    .'- HttpsPort：HTTPS端口号。'."\n"
                                                                    .'- TcpPort：TCP端口号。',
                                                                'type' => 'string',
                                                                'example' => 'HttpPort',
                                                            ],
                                                            'Port' => [
                                                                'description' => '访问端口。取值范围：'."\n"
                                                                    ."\n"
                                                                    .'- HttpPort：8123'."\n"
                                                                    .'- HttpsPort：8443'."\n"
                                                                    .'- TcpPort：9000',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '8123',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'IPAddress' => [
                                                    'description' => 'IP地址。',
                                                    'type' => 'string',
                                                    'example' => '172.30.XX.XX',
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
                404 => [
                    [
                        'errorCode' => 'InvalidDBInstanceId.NotFound',
                        'errorMessage' => 'The DBInstanceId provided does not exist in our records.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxx-xxx-xxx\\",\\n  \\"Data\\": {\\n    \\"InstanceNetworkType\\": \\"VPC\\",\\n    \\"Endpoints\\": [\\n      {\\n        \\"NetType\\": \\"VPC\\",\\n        \\"Status\\": \\"active\\",\\n        \\"ConnectionString\\": \\"cc-****-clickhouse.clickhouseserver.pre.rds.aliyuncs.com\\",\\n        \\"VpcId\\": \\"vpc-uf61z****\\",\\n        \\"VSwitchId\\": \\"vsw-0xi8829****\\",\\n        \\"VpcInstanceId\\": \\"vpc-uf61z****\\",\\n        \\"Ports\\": [\\n          {\\n            \\"Protocol\\": \\"HttpPort\\",\\n            \\"Port\\": 8123\\n          }\\n        ],\\n        \\"IPAddress\\": \\"172.30.XX.XX\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询集群访问地址',
        ],
        'DescribeProcessList' => [
            'summary' => '调用DescribeProcessList接口查看正在运行中的查询。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '186631',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-xxxxx',
                    ],
                ],
                [
                    'name' => 'QueryDurationMs',
                    'in' => 'query',
                    'schema' => [
                        'description' => '慢SQL的执行耗时，单位ms，最小1000 ms。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'InitialUser',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询用户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testuser',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询语句的关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SELECT',
                    ],
                ],
                [
                    'name' => 'InitialQueryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'QueryOrder',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按指定列倒序排序。'."\n"
                            ."\n"
                            .'- 0表示仅用query_duration_ms排序'."\n"
                            ."\n"
                            .'- 1表示用query_duration_ms、query_start_time排序'."\n"
                            ."\n"
                            .'- 2表示用query_duration_ms、query_start_time、user排序',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。',
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
                        'title' => 'Schema of Response',
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxx-xxx-xxx',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => 'cc-xxxx',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => '测试使用',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总记录数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'ResultSet' => [
                                        'description' => '结果集。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'InitialQueryId' => [
                                                    'description' => '查询ID。',
                                                    'type' => 'string',
                                                    'example' => '\'79f7e40b-87e2-4ef4-b6df-21889a3a030e\'',
                                                ],
                                                'QueryStartTime' => [
                                                    'description' => '查询开始时间。格式：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2023-07-23T10:13:23Z',
                                                ],
                                                'InitialAddress' => [
                                                    'description' => '查询地址。',
                                                    'type' => 'string',
                                                    'example' => '0:0:0:0:0:ffff:1edd65ea',
                                                ],
                                                'Query' => [
                                                    'description' => '正在查询的语句。',
                                                    'type' => 'string',
                                                    'example' => 'select * from test',
                                                ],
                                                'InitialUser' => [
                                                    'description' => '查询用户。',
                                                    'type' => 'string',
                                                    'example' => 'bany',
                                                ],
                                                'QueryDurationMs' => [
                                                    'description' => '最短的查询耗时。最小值为**1000**。单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1000',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxx-xxx-xxx\\",\\n  \\"Data\\": {\\n    \\"DBInstanceID\\": 0,\\n    \\"DBInstanceName\\": \\"测试使用\\",\\n    \\"TotalCount\\": 1,\\n    \\"ResultSet\\": [\\n      {\\n        \\"InitialQueryId\\": \\"\'79f7e40b-87e2-4ef4-b6df-21889a3a030e\'\\",\\n        \\"QueryStartTime\\": \\"2023-07-23T10:13:23Z\\",\\n        \\"InitialAddress\\": \\"0:0:0:0:0:ffff:1edd65ea\\",\\n        \\"Query\\": \\"select * from test\\",\\n        \\"InitialUser\\": \\"bany\\",\\n        \\"QueryDurationMs\\": 1000\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查看正在运行中的查询',
        ],
        'KillProcess' => [
            'summary' => '调用KillProcess接口终止正在进行的任务。',
            'methods' => [
                'get',
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
                'operationType' => 'none',
                'abilityTreeCode' => '186648',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'InitialQueryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'xxx-xxx-xxx',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => 'cc-xxxxxxx',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => 'cc-xxxxxxx'."\n",
                                    ],
                                    'Count' => [
                                        'description' => '结束任务数量。',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"xxx-xxx-xxx\\",\\n  \\"Data\\": {\\n    \\"DBInstanceID\\": 0,\\n    \\"DBInstanceName\\": \\"cc-xxxxxxx\\\\n\\",\\n    \\"Count\\": 1\\n  }\\n}","type":"json"}]',
            'title' => '终止正在进行的任务',
        ],
        'DescribeSlowLogTrend' => [
            'summary' => '调用DescribeSlowLogTrend接口查询慢日志趋势。',
            'methods' => [
                'get',
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
                'operationType' => 'none',
                'abilityTreeCode' => '186604',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-04-13 17:48:00',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-06-07 10:03:00',
                    ],
                ],
                [
                    'name' => 'QueryDurationMs',
                    'in' => 'query',
                    'schema' => [
                        'description' => '慢SQL的执行耗时。最小值为**1000**，单位：毫秒。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3000',
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'clickhouse',
                        'default' => 'clickhouse',
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
                                'example' => '7D3ECB0E-98CA-5E08-A9CA-F70C5A1E9BDF',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => 'cc-bp100p4q1g9z3****',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => '集群测试',
                                    ],
                                    'ResultSet' => [
                                        'description' => '结果集。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '结果集。',
                                            'type' => 'object',
                                            'properties' => [
                                                'QueryStartTime' => [
                                                    'description' => '查询开始的时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2023-04-13 17:48:00',
                                                ],
                                                'MaxQueryDurationMs' => [
                                                    'description' => '慢SQL执行的最大耗时，单位：ms，最小值为**1000**。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3000',
                                                ],
                                                'Cnt' => [
                                                    'description' => '当前时间内SQL总和。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'MinQueryDurationMs' => [
                                                    'description' => '慢SQL执行的最小耗时，单位：ms，最小值为**1000**。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1000',
                                                ],
                                                'AvgQueryDurationMs' => [
                                                    'description' => '慢SQL执行的平均耗时，单位：ms，最小值为**1000**。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2000',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7D3ECB0E-98CA-5E08-A9CA-F70C5A1E9BDF\\",\\n  \\"Data\\": {\\n    \\"DBInstanceID\\": 0,\\n    \\"DBInstanceName\\": \\"集群测试\\",\\n    \\"ResultSet\\": [\\n      {\\n        \\"QueryStartTime\\": \\"2023-04-13 17:48:00\\",\\n        \\"MaxQueryDurationMs\\": 3000,\\n        \\"Cnt\\": 1,\\n        \\"MinQueryDurationMs\\": 1000,\\n        \\"AvgQueryDurationMs\\": 2000\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询慢日志趋势',
        ],
        'DescribeSlowLogRecords' => [
            'summary' => '调用DescribeSlowLogRecords接口查询慢日志明细。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '186629',
                'abilityTreeNodes' => [
                    'FEATUREclickhouseCVENTL',
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
                    'name' => 'DBInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '集群ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cc-bp100p4q1g9z3****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-09-11 16:00:00',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-09-15 16:00:00',
                    ],
                ],
                [
                    'name' => 'QueryDurationMs',
                    'in' => 'query',
                    'schema' => [
                        'description' => '慢SQL的执行耗时。最小值为**1000**，单位：毫秒。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3000',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录数，取值：'."\n"
                            .'- 30（默认值）'."\n"
                            .'- 50'."\n"
                            .'- 100',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DF203CC8-5F68-5E3F-8050-3C77DD65731A',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DBInstanceID' => [
                                        'description' => '集群ID。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => 'cc-bp100p4q1g9z32****',
                                    ],
                                    'DBInstanceName' => [
                                        'description' => '集群名称。',
                                        'type' => 'string',
                                        'example' => '集群测试',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总记录数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'ResultSet' => [
                                        'description' => '结果集。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '结果集。',
                                            'type' => 'object',
                                            'properties' => [
                                                'QueryStartTime' => [
                                                    'description' => '查询开始的时间。格式：yyyy-MM-dd hh:mm:ss（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2023-09-11 16:00:00',
                                                ],
                                                'InitialQueryId' => [
                                                    'description' => '查询ID。',
                                                    'type' => 'string',
                                                    'example' => '\'ae915a3ad30e77e67a7215d05b658cc6\'',
                                                ],
                                                'ReadRows' => [
                                                    'description' => '读取行数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'InitialAddress' => [
                                                    'description' => '查询地址。',
                                                    'type' => 'string',
                                                    'example' => '0:0:0:0:0:ffff:1edd65ea',
                                                ],
                                                'Query' => [
                                                    'description' => '正在查询的语句。',
                                                    'type' => 'string',
                                                    'example' => 'select * from test',
                                                ],
                                                'MemoryUsage' => [
                                                    'description' => '查询内存使用峰值。单位：Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '4941696',
                                                ],
                                                'Type' => [
                                                    'description' => '慢日志类型。',
                                                    'type' => 'string',
                                                    'example' => 'ExceptionWhileProcessing',
                                                ],
                                                'ReadBytes' => [
                                                    'description' => '扫描数据大小。单位：Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '4507128020832',
                                                ],
                                                'InitialUser' => [
                                                    'description' => '查询用户。',
                                                    'type' => 'string',
                                                    'example' => 'bany',
                                                ],
                                                'QueryDurationMs' => [
                                                    'description' => '慢SQL的执行耗时。最小值为**1000**，单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3000',
                                                ],
                                                'ResultBytes' => [
                                                    'description' => '结果数据大小。单位：Byte。',
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
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DF203CC8-5F68-5E3F-8050-3C77DD65731A\\",\\n  \\"Data\\": {\\n    \\"DBInstanceID\\": 0,\\n    \\"DBInstanceName\\": \\"集群测试\\",\\n    \\"TotalCount\\": 1,\\n    \\"ResultSet\\": [\\n      {\\n        \\"QueryStartTime\\": \\"2023-09-11 16:00:00\\",\\n        \\"InitialQueryId\\": \\"\'ae915a3ad30e77e67a7215d05b658cc6\'\\",\\n        \\"ReadRows\\": 10,\\n        \\"InitialAddress\\": \\"0:0:0:0:0:ffff:1edd65ea\\",\\n        \\"Query\\": \\"select * from test\\",\\n        \\"MemoryUsage\\": 4941696,\\n        \\"Type\\": \\"ExceptionWhileProcessing\\",\\n        \\"ReadBytes\\": 4507128020832,\\n        \\"InitialUser\\": \\"bany\\",\\n        \\"QueryDurationMs\\": 3000,\\n        \\"ResultBytes\\": 10\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询慢日志明细',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'clickhouse.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'clickhouse.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'clickhouse.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'clickhouse.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'clickhouse.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'clickhouse.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'clickhouse.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'clickhouse.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'clickhouse.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'clickhouse.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'clickhouse.me-central-1.aliyuncs.com',
        ],
    ],
];
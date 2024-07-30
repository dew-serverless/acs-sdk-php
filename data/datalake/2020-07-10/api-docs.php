<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'DataLake',
        'version' => '2020-07-10',
    ],
    'directories' => [
        [
            'id' => 167316,
            'title' => '元数据',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 169629,
                    'title' => '目录',
                    'type' => 'directory',
                    'children' => [
                        'CreateCatalog',
                        'DeleteCatalog',
                        'UpdateCatalog',
                        'ListCatalogs',
                        'GetCatalog',
                    ],
                ],
                [
                    'id' => 161865,
                    'title' => '库',
                    'type' => 'directory',
                    'children' => [
                        'CreateDatabase',
                        'DeleteDatabase',
                        'UpdateDatabase',
                        'GetDatabase',
                        'ListDatabases',
                    ],
                ],
                [
                    'id' => 161889,
                    'title' => '表',
                    'type' => 'directory',
                    'children' => [
                        'CreateTable',
                        'DeleteTable',
                        'DeleteTableColumnStatistics',
                        'DeleteTableVersion',
                        'UpdateTable',
                        'UpdateTableColumnStatistics',
                        'GetTable',
                        'GetTableColumnStatistics',
                        'GetTableVersion',
                        'ListTableNames',
                        'ListTables',
                        'ListTableVersions',
                        'GetTableProfile',
                        'RenameTable',
                        'BatchGetTables',
                        'BatchCreateTables',
                        'BatchDeleteTables',
                        'BatchDeleteTableVersions',
                        'BatchUpdateTables',
                    ],
                ],
                [
                    'id' => 161872,
                    'title' => '分区',
                    'type' => 'directory',
                    'children' => [
                        'CreatePartition',
                        'DeletePartition',
                        'DeletePartitionColumnStatistics',
                        'UpdatePartitionColumnStatistics',
                        'GetPartition',
                        'GetPartitionColumnStatistics',
                        'ListPartitionNames',
                        'ListPartitions',
                        'ListPartitionsByFilter',
                        'BatchCreatePartitions',
                        'BatchDeletePartitions',
                        'BatchGetPartitionColumnStatistics',
                        'BatchGetPartitions',
                        'BatchUpdatePartitions',
                        'RenamePartition',
                    ],
                ],
                [
                    'id' => 161908,
                    'title' => '函数',
                    'type' => 'directory',
                    'children' => [
                        'CreateFunction',
                        'DeleteFunction',
                        'UpdateFunction',
                        'ListFunctionNames',
                        'ListFunctions',
                        'GetFunction',
                    ],
                ],
                [
                    'id' => 161845,
                    'title' => '锁',
                    'type' => 'directory',
                    'children' => [
                        'CreateLock',
                        'GetLock',
                        'AbortLock',
                        'RefreshLock',
                        'UnLock',
                    ],
                ],
                [
                    'id' => 166936,
                    'title' => '元数据迁移',
                    'type' => 'directory',
                    'children' => [
                        'StopMigrationWorkflow',
                        'RunMigrationWorkflow',
                    ],
                ],
                'GetAsyncTaskStatus',
                'Search',
            ],
        ],
        [
            'id' => 161796,
            'title' => '权限',
            'type' => 'directory',
            'children' => [
                'CreateRole',
                'GrantRoleToUsers',
                'GrantRolesToUser',
                'GrantPermissions',
                'BatchGrantPermissions',
                'DeleteRole',
                'RevokeRoleFromUsers',
                'RevokeRolesFromUser',
                'RevokePermissions',
                'BatchRevokePermissions',
                'UpdateRole',
                'UpdateRoleUsers',
                'UpdatePermissions',
                'UpdateCatalogSettings',
                'GetRole',
                'ListRoles',
                'ListRoleUsers',
                'ListUserRoles',
                'ListPermissions',
                'CheckPermissions',
                'GetCatalogSettings',
            ],
        ],
        [
            'id' => 166939,
            'title' => '数据探索',
            'type' => 'directory',
            'children' => [
                'GetQueryResult',
                'SubmitQuery',
                'CancelQuery',
            ],
        ],
        [
            'id' => 161818,
            'title' => '通用服务',
            'type' => 'directory',
            'children' => [
                'GetRegionStatus',
                'GetServiceStatus',
                'DescribeRegions',
            ],
        ],
        [
            'id' => 178756,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'SearchAcrossCatalog',
                'RegisterLocation',
                'DeregisterLocation',
                'UpdateRegisteredLocation',
                'ListPartitionsByExpr',
                'GetDatabaseProfile',
                'GetLifecycleRule',
                'ListPartitionsProfile',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'AccessRequest' => [
                'title' => 'A short description of struct',
                'description' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'PrivilegeResources' => [
                        'description' => '待授权资源列表。',
                        '$ref' => '#/components/schemas/PrivilegeResources',
                    ],
                    'Principal' => [
                        'description' => '访问者。',
                        '$ref' => '#/components/schemas/Principal',
                    ],
                    'CatalogId' => [
                        'title' => 'CatalogId',
                        'description' => '分类ID。',
                        'type' => 'string',
                        'example' => '1344371',
                    ],
                ],
            ],
            'Accesses' => [
                'title' => 'A short description of struct',
                'description' => 'accesses 列表',
                'type' => 'array',
                'items' => [
                    'type' => 'string',
                    'example' => 'ALTER/SELECT/CREATE, etc.',
                ],
            ],
            'BatchGrantRevokeFailureResult' => [
                'title' => 'A short description of struct',
                'description' => '批量授权错误时的结果',
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/GrantRevokeFailureEntry',
                ],
            ],
            'Catalog' => [
                'title' => 'A short description of struct',
                'description' => 'Catalog',
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'example' => '1344371',
                    ],
                    'Description' => [
                        'title' => 'Description',
                        'description' => 'Description',
                        'type' => 'string',
                        'example' => '描述',
                    ],
                    'LocationUri' => [
                        'title' => 'LocationUri',
                        'description' => 'LocationUri',
                        'type' => 'string',
                        'example' => 'oss://dlf-test-oss-location/',
                    ],
                    'Owner' => [
                        'title' => 'Owner - 负责人 - Principal格式',
                        'description' => 'Owner - 负责人 - Principal格式',
                        'type' => 'string',
                        'example' => 'acs:ram::[accountId]:root',
                    ],
                    'CreatedBy' => [
                        'title' => 'CreatedBy- 创建者 - principal格式',
                        'description' => 'CreatedBy- 创建者 - principal格式',
                        'type' => 'string',
                        'example' => 'acs:ram::[accountId]:root'."\n",
                    ],
                    'CreateTime' => [
                        'title' => '创建时间',
                        'description' => '创建时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1640662815603',
                    ],
                    'UpdateTime' => [
                        'title' => '更新时间',
                        'description' => '更新时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1640662815603',
                    ],
                    'Status' => [
                        'title' => 'Catalog状态',
                        'description' => 'Catalog状态',
                        'type' => 'string',
                        'example' => 'CREATED',
                    ],
                    'CatalogType' => [
                        'title' => 'Catalog类型',
                        'description' => 'Catalog类型',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'NATIVE' => 'NATIVE',
                            'HMS' => 'HMS',
                        ],
                        'example' => 'HMS',
                    ],
                    'DefaultCatalog' => [
                        'title' => '是否为默认数据目录',
                        'description' => '是否为默认数据目录',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'ThriftEnabled' => [
                        'title' => 'ThriftEnabled',
                        'description' => '是否开启Thrift 端口访问',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'JdbcEnabled' => [
                        'title' => 'JdbcEnabled',
                        'description' => '是否开启JDBC端口访问',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'StorageAccessConfig' => [
                        'title' => 'StorageAccessConfig',
                        'description' => '存储访问配置',
                        'type' => 'string',
                    ],
                ],
            ],
            'CatalogConnection' => [
                'title' => '数据目录的VPC网络连接',
                'description' => '数据目录的VPC网络连接',
                'type' => 'object',
                'properties' => [
                    'VpcConnectionId' => [
                        'title' => 'VPC网络连接ID',
                        'type' => 'string',
                        'example' => 'CONN-607A0053D874****',
                    ],
                    'ThriftUri' => [
                        'title' => 'Thrift协议连接地址',
                        'type' => 'string',
                    ],
                    'JdbcUri' => [
                        'title' => '元数据JDBC连接地址',
                        'type' => 'string',
                    ],
                    'JdbcUserName' => [
                        'title' => 'JDBC用户名',
                        'type' => 'string',
                    ],
                    'JdbcPassword' => [
                        'title' => 'JDBC密码',
                        'type' => 'string',
                    ],
                ],
            ],
            'CatalogInput' => [
                'title' => 'A short description of struct',
                'description' => '创建/更新Catalog的结构',
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'title' => 'CatalogId',
                        'description' => 'CatalogId',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'catalog_test',
                    ],
                    'Description' => [
                        'title' => 'Description',
                        'description' => 'Description',
                        'type' => 'string',
                        'example' => '测试用数据目录',
                    ],
                    'LocationUri' => [
                        'title' => 'LocationUri',
                        'description' => 'LocationUri',
                        'type' => 'string',
                        'example' => 'oss://dlf-test-oss-location/',
                    ],
                    'Owner' => [
                        'title' => 'Owner - 负责人 - Principal格式',
                        'description' => 'Owner - 负责人 - Principal格式',
                        'type' => 'string',
                        'example' => 'acs:ram::[accountId]:root，可以为空，为空自动填充为当前创建者身份',
                    ],
                    'CatalogType' => [
                        'title' => 'Catalog类型',
                        'description' => 'Catalog类型',
                        'type' => 'string',
                        'default' => 'NATIVE',
                    ],
                    'ThriftEnabled' => [
                        'title' => 'ThriftEnabled',
                        'description' => 'ThriftEnabled',
                        'type' => 'boolean',
                    ],
                    'JdbcEnabled' => [
                        'title' => 'JdbcEnabled',
                        'description' => 'JdbcEnabled',
                        'type' => 'boolean',
                    ],
                    'StorageAccessConfig' => [
                        'title' => 'StorageAccessConfig',
                        'description' => 'StorageAccessConfig',
                        'type' => 'string',
                    ],
                ],
            ],
            'CatalogResource' => [
                'title' => 'A short description of struct',
                'description' => 'Catalog Resource',
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'title' => 'Catalog id',
                        'description' => 'Catalog id, 默认为主账号ID',
                        'type' => 'string',
                        'example' => '1344371',
                    ],
                ],
            ],
            'CatalogSettings' => [
                'title' => 'A short description of struct',
                'description' => '数据湖相关配置',
                'type' => 'object',
                'properties' => [
                    'Config' => [
                        'title' => '配置',
                        'description' => '配置',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '数据湖权限配置, auth.permission.check.enable表示是否开启元数据服务端鉴权，开启后通过API访问元数据将被鉴权，auth.super.principal表示设置超级用户，超级用户bypass所有鉴权',
                            'type' => 'string',
                            'example' => '{'."\n"
                                .'"auth.permission.check.enable":'."\n"
                                .'"true",'."\n"
                                .'"auth.super.principal":'."\n"
                                .'"acs:ram::[aliyunAccountId]:role/aliyundlfworkflowdefaultrole"'."\n"
                                .'}',
                        ],
                    ],
                ],
            ],
            'CatalogVpcConnection' => [
                'title' => '数据目录的VPC网络连接',
                'description' => '数据目录的VPC网络连接',
                'type' => 'object',
                'properties' => [
                    'GmtModified' => [
                        'title' => '修改时间',
                        'type' => 'string',
                        'example' => '2023-07-17 17:51:04',
                    ],
                    'GmtCreate' => [
                        'title' => '创建时间',
                        'type' => 'string',
                        'example' => '2023-07-12 15:26:12',
                    ],
                    'RegionId' => [
                        'title' => '地域ID',
                        'type' => 'string',
                        'example' => 'cn-hangzhou',
                    ],
                    'Owner' => [
                        'title' => '创建者主账号ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '120215474170****',
                    ],
                    'Creator' => [
                        'title' => '创建者ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '120215474170****',
                    ],
                    'Modifier' => [
                        'title' => '修改者ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '120215474170****',
                    ],
                    'VpcConnectionId' => [
                        'title' => 'VPC网络连接ID',
                        'type' => 'string',
                        'example' => 'CONN-607A0053D874****',
                    ],
                    'CatalogId' => [
                        'title' => '数据目录ID',
                        'type' => 'string',
                        'example' => 'catalog_test',
                    ],
                    'VpcId' => [
                        'title' => '访问Catalog的专有网络ID',
                        'type' => 'string',
                        'example' => 'vpc-2ze0c41hvmesel7pu****',
                    ],
                    'ConnectionName' => [
                        'title' => '网络连接名称',
                        'type' => 'string',
                    ],
                    'Zones' => [
                        'title' => '访问Catalog的可用区列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'VSwitchId' => [
                                    'title' => '可用区内创建网卡的交换机',
                                    'type' => 'string',
                                    'example' => 'vsw-hp3uf6045ljdhd5zr****',
                                ],
                                'ZoneId' => [
                                    'title' => '可用区ID',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-g',
                                ],
                                'IP' => [
                                    'title' => '网卡的IP地址',
                                    'type' => 'string',
                                    'example' => '192.168.XX.XX',
                                ],
                            ],
                        ],
                    ],
                    'SecurityGroupIds' => [
                        'title' => '网卡关联的安全组列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'example' => 'sg-bp1fg655nh68xyz9****',
                        ],
                    ],
                    'ThriftUri' => [
                        'title' => 'Thrift协议连接地址',
                        'type' => 'string',
                    ],
                    'JdbcUri' => [
                        'title' => '元数据库JDBC连接地址',
                        'type' => 'string',
                    ],
                    'ConnectionStatus' => [
                        'title' => '连接状态',
                        'type' => 'string',
                        'example' => 'CONNECTED',
                    ],
                    'ErrorMessage' => [
                        'title' => '异常状态时的错误信息',
                        'type' => 'string',
                    ],
                ],
            ],
            'CatalogVpcConnectionInput' => [
                'title' => '数据目录的VPC网络连接输入信息',
                'description' => '数据目录的VPC网络连接输入信息',
                'type' => 'object',
                'properties' => [
                    'VpcId' => [
                        'title' => '需要访问Catalog的专有网络ID',
                        'type' => 'string',
                        'example' => 'vpc-hp356stwkxg3fn2xe****',
                    ],
                    'ConnectionName' => [
                        'title' => '网络连接名称',
                        'type' => 'string',
                    ],
                    'Zones' => [
                        'title' => '需要访问 Catalog 的可用区列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'VSwitchId' => [
                                    'title' => '在可用区内要创建网卡的交换机',
                                    'type' => 'string',
                                    'example' => 'vsw-hp3uf6045ljdhd5zr****',
                                ],
                                'ZoneId' => [
                                    'title' => '可用区ID，为 null 则自动填充 VSwitch 的可用区',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou-g',
                                ],
                                'IP' => [
                                    'title' => '指定可用区的IP',
                                    'type' => 'string',
                                    'example' => '192.168.XX.XX',
                                ],
                            ],
                        ],
                    ],
                    'SecurityGroupIds' => [
                        'title' => '网卡关联的安全组列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'example' => 'sg-bp1fg655nh68xyz9****',
                        ],
                    ],
                ],
            ],
            'ColumnResource' => [
                'title' => 'A short description of struct',
                'description' => '鉴权资源结构-Column',
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'title' => 'DatabaseName',
                        'description' => '数据库的名称。',
                        'type' => 'string',
                        'example' => 'default',
                    ],
                    'TableName' => [
                        'title' => 'TableName',
                        'description' => '表的名称。',
                        'type' => 'string',
                        'example' => 'test',
                    ],
                    'ColumnNames' => [
                        'title' => 'ColumnName',
                        'description' => '字段名列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '字段名。',
                            'type' => 'string',
                            'example' => 'name',
                        ],
                    ],
                ],
            ],
            'ColumnStatistics' => [
                'title' => 'A short description of struct',
                'description' => 'ColumnStatisticsList',
                'type' => 'object',
                'properties' => [
                    'ColumnStatisticsDesc' => [
                        'description' => '字段统计描述信息',
                        '$ref' => '#/components/schemas/ColumnStatisticsDesc',
                    ],
                    'ColumnStatisticsObjList' => [
                        'title' => 'ColumnStatisticsObjList',
                        'description' => '字段统计信息',
                        'type' => 'array',
                        'items' => [
                            'description' => '字段统计信息',
                            '$ref' => '#/components/schemas/ColumnStatisticsObj',
                        ],
                    ],
                    'Engine' => [
                        'title' => 'Engine for hive3+',
                        'description' => 'Engine',
                        'type' => 'string',
                        'example' => '""，"hive"等',
                    ],
                    'IsStatsCompliant' => [
                        'title' => 'IsStatsCompliant for hive3+',
                        'description' => 'IsStatsCompliant	',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                ],
            ],
            'ColumnStatisticsDesc' => [
                'title' => 'A short description of struct',
                'description' => 'ColumnStatisticsDesc',
                'type' => 'object',
                'properties' => [
                    'LastAnalyzedTime' => [
                        'title' => 'optional',
                        'description' => '最近一次分析时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '12312323',
                    ],
                    'PartitionName' => [
                        'title' => 'required',
                        'description' => '分区名称',
                        'type' => 'string',
                        'example' => 'ds=201212/hh=23',
                    ],
                ],
            ],
            'ColumnStatisticsObj' => [
                'title' => 'A short description of struct',
                'description' => 'ColumnStatisticsObj',
                'type' => 'object',
                'properties' => [
                    'ColumnName' => [
                        'title' => 'ColumnName of the table',
                        'description' => '字段名称',
                        'type' => 'string',
                        'example' => 'col1',
                    ],
                    'ColumnType' => [
                        'title' => 'ColumnType',
                        'description' => '字段类型，包括array bigint binary boolean char date decimal double float int interval map set smallint string struct timestamp tinyint union varchar',
                        'type' => 'string',
                        'example' => 'int',
                    ],
                    'ColumnStatisticsData' => [
                        'title' => 'ColumnStatisticsData',
                        'description' => '字段统计',
                        'type' => 'object',
                        'properties' => [
                            'StatisticsData' => [
                                'title' => 'StatisticsData',
                                'description' => '具体的统计结果',
                                'type' => 'string',
                                'example' => '{"numNulls":0,"numTrues":1,"numFalses":5}',
                            ],
                            'StatisticsType' => [
                                'title' => 'StatisticsType',
                                'description' => '统计类型，包括BOOLEAN\\_STATS，LONG\\_STATS，DOUBLE\\_STATS，STRING\\_STATS，BINARY\\_STATS，DECIMAL\\_STATS，DATE\\_STATS',
                                'type' => 'string',
                                'example' => 'BOOLEAN_STATS',
                            ],
                        ],
                    ],
                ],
            ],
            'Database' => [
                'title' => 'Database Object',
                'description' => '数据库对象',
                'type' => 'object',
                'properties' => [
                    'CreateTime' => [
                        'title' => 'createTime',
                        'description' => '创建时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608707407',
                    ],
                    'Description' => [
                        'title' => 'description',
                        'description' => '元数据库描述文本',
                        'type' => 'string',
                        'example' => 'this is a hive database',
                    ],
                    'LocationUri' => [
                        'title' => 'locationUri',
                        'description' => '元数据库保存路径，例如HDFS路径',
                        'type' => 'string',
                        'example' => '/hdfs/hivedb/data',
                    ],
                    'Name' => [
                        'title' => 'name',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'example' => 'database_test',
                    ],
                    'OwnerName' => [
                        'title' => 'ownerName',
                        'description' => '负责人名称',
                        'type' => 'string',
                        'example' => 'zhangsan',
                    ],
                    'OwnerType' => [
                        'title' => 'ownerType',
                        'description' => '负责人类型，填USER或ROLE或GROUP',
                        'type' => 'string',
                        'example' => 'USER',
                    ],
                    'Parameters' => [
                        'description' => '定义数据库的参数和属性的键值对',
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'Privileges' => [
                        'description' => '权限，非必填',
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'UpdateTime' => [
                        'title' => 'updateTime',
                        'description' => '更新时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608707407',
                    ],
                    'CreatedBy' => [
                        'title' => 'CreatedBy',
                        'description' => '创建者',
                        'type' => 'string',
                        'example' => 'root',
                    ],
                ],
            ],
            'DatabaseInput' => [
                'title' => 'Database input',
                'description' => '数据库对象',
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'title' => 'Description',
                        'description' => '元数据库描述文本',
                        'type' => 'string',
                        'example' => 'this is a hive database',
                    ],
                    'LocationUri' => [
                        'title' => 'locationUri',
                        'description' => '元数据库保存路径，例如可填写HDFS路径',
                        'type' => 'string',
                        'example' => '/hdfs/hivedb/data',
                    ],
                    'Name' => [
                        'title' => 'name',
                        'description' => '元数据库名称，校验长度128，不支持除下划线以外的特殊字符',
                        'type' => 'string',
                        'example' => 'name',
                    ],
                    'OwnerName' => [
                        'title' => 'ownerName',
                        'description' => '负责人名称',
                        'type' => 'string',
                        'example' => 'zhangsan',
                    ],
                    'OwnerType' => [
                        'title' => 'ownerType',
                        'description' => '负责人类型，填USER或ROLE或GROUP',
                        'type' => 'string',
                        'example' => 'USER',
                    ],
                    'Parameters' => [
                        'description' => '定义数据库的参数和属性的键值对',
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'Privileges' => [
                        'description' => '权限，非必填',
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'CreateTime' => [
                        'title' => 'createTime',
                        'description' => '创建时间，必填',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1580869631',
                    ],
                ],
            ],
            'DatabaseProfile' => [
                'title' => 'A short description of struct',
                'description' => '库数据概况',
                'type' => 'object',
                'properties' => [
                    'FileCnt' => [
                        'title' => '文件数量',
                        'description' => '库文件总数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '3234',
                    ],
                    'FileSize' => [
                        'title' => '文件大小',
                        'description' => '库存储大小',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1254312',
                    ],
                    'Name' => [
                        'title' => '库名称',
                        'description' => '库名称',
                        'type' => 'string',
                        'example' => 'test_db',
                    ],
                    'CreateTime' => [
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'string',
                        'example' => '2023-08-16 18:02:22',
                    ],
                    'Location' => [
                        'title' => '存储位置',
                        'description' => '存储位置',
                        'type' => 'string',
                        'example' => 'oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_db/',
                    ],
                    'ObjectSize' => [
                        'title' => 'OSS文件大小',
                        'description' => 'OSS文件大小',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1254312',
                    ],
                    'ObjectCnt' => [
                        'title' => 'OSS文件数量',
                        'description' => 'OSS文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '3234',
                    ],
                    'LatestDate' => [
                        'title' => '元仓更新时间',
                        'description' => '元仓更新时间',
                        'type' => 'string',
                        'example' => '2023-08-30 19:16:10',
                    ],
                ],
            ],
            'DatabaseResource' => [
                'title' => 'A short description of struct',
                'description' => '鉴权资源结构-Database',
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'title' => 'Database name',
                        'description' => '数据库的名称。',
                        'type' => 'string',
                        'example' => 'default',
                    ],
                    'DatabaseWildcard' => [
                        'title' => 'A wildcard member representing every resource under a database',
                        'description' => 'A wildcard member representing every resource under a database',
                        'type' => 'string',
                        'example' => '*',
                    ],
                ],
            ],
            'DbStorageRank' => [
                'title' => '库存储排名',
                'description' => '库存储排名',
                'type' => 'object',
                'properties' => [
                    'Quantity' => [
                        'title' => '存储量',
                        'description' => '库存储大小',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '9897183010448',
                    ],
                    'DbName' => [
                        'title' => '库名',
                        'description' => '库名称',
                        'type' => 'string',
                        'example' => 'tpcds_text_parquet_10000"',
                    ],
                ],
            ],
            'ErrorDetail' => [
                'title' => 'ErrorDetail',
                'description' => 'ErrorDetail',
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'title' => 'Code',
                        'description' => '错误码',
                        'type' => 'string',
                        'example' => '401',
                    ],
                    'Message' => [
                        'title' => 'Message',
                        'description' => '错误信息',
                        'type' => 'string',
                        'example' => 'auth failed',
                    ],
                ],
            ],
            'FieldSchema' => [
                'title' => 'A short description of struct',
                'description' => 'FieldSchema',
                'type' => 'object',
                'properties' => [
                    'Comment' => [
                        'title' => 'Comment',
                        'description' => '字段的文本注释',
                        'type' => 'string',
                        'example' => 'comment_day',
                    ],
                    'Name' => [
                        'title' => 'Name',
                        'description' => '字段名称',
                        'type' => 'string',
                        'example' => 'day',
                    ],
                    'Parameters' => [
                        'description' => '字段关联属性的键值对',
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'Type' => [
                        'title' => 'Type',
                        'description' => '字段类型，包括array'."\n"
                            .'bigint'."\n"
                            .'binary'."\n"
                            .'boolean'."\n"
                            .'char'."\n"
                            .'date'."\n"
                            .'decimal'."\n"
                            .'double'."\n"
                            .'float'."\n"
                            .'int'."\n"
                            .'interval'."\n"
                            .'map'."\n"
                            .'set'."\n"
                            .'smallint'."\n"
                            .'string'."\n"
                            .'struct'."\n"
                            .'timestamp'."\n"
                            .'tinyint'."\n"
                            .'union'."\n"
                            .'varchar',
                        'type' => 'string',
                        'example' => 'int',
                    ],
                ],
            ],
            'FileCnt' => [
                'title' => '小文件数量',
                'description' => '小文件分布信息',
                'type' => 'object',
                'properties' => [
                    'Small' => [
                        'title' => '小文件',
                        'description' => '小文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                    ],
                    'Large' => [
                        'title' => '大文件',
                        'description' => '大文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                    ],
                    'Tiny' => [
                        'title' => '极小文件',
                        'description' => '极小文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '124',
                    ],
                    'Middle' => [
                        'title' => '中文件',
                        'description' => '中文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '33',
                    ],
                ],
            ],
            'Function' => [
                'title' => 'Function Object',
                'description' => '函数',
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'title' => 'CatalogId',
                        'description' => '	'."\n"
                            .'数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'example' => '1344371',
                    ],
                    'ClassName' => [
                        'title' => 'ClassName',
                        'description' => '包含了函数实现的Java类名',
                        'type' => 'string',
                        'example' => 'com.xxx.xxxxFunction',
                    ],
                    'CreateTime' => [
                        'title' => 'CreateTime',
                        'description' => '创建时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608863962',
                    ],
                    'DatabaseName' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'example' => 'database_test',
                    ],
                    'FunctionName' => [
                        'title' => 'FunctionName',
                        'description' => '函数名称',
                        'type' => 'string',
                        'example' => 'function1',
                    ],
                    'FunctionType' => [
                        'title' => 'FunctionType',
                        'description' => '	'."\n"
                            .'函数类型， 目前支持的枚举为JAVA',
                        'type' => 'string',
                        'example' => 'JAVA',
                    ],
                    'OwnerName' => [
                        'title' => 'OwnerName',
                        'description' => '负责人名称',
                        'type' => 'string',
                        'example' => 'zhangsan',
                    ],
                    'OwnerType' => [
                        'title' => 'OwnerType',
                        'description' => '负责人类型，填USER或ROLE或GROUP',
                        'type' => 'string',
                        'example' => 'USER',
                    ],
                    'ResourceUri' => [
                        'title' => 'ResourceUri',
                        'description' => '函数的资源URI',
                        'type' => 'array',
                        'items' => [
                            'description' => '函数的资源URI',
                            '$ref' => '#/components/schemas/ResourceUri',
                        ],
                    ],
                    'UpdateTime' => [
                        'title' => 'UpdateTime',
                        'description' => '更新时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608863962',
                    ],
                    'CreatedBy' => [
                        'title' => 'CreatedBy',
                        'description' => '创建者',
                        'type' => 'string',
                        'example' => 'CreatedBy',
                    ],
                ],
            ],
            'FunctionInput' => [
                'title' => 'Function Input',
                'description' => '函数',
                'type' => 'object',
                'properties' => [
                    'ClassName' => [
                        'title' => 'ClassName',
                        'description' => '包含了函数实现的Java类名',
                        'type' => 'string',
                        'example' => 'com.xxx.xxxxFunction',
                    ],
                    'FunctionName' => [
                        'title' => 'FunctionName',
                        'description' => '函数名称',
                        'type' => 'string',
                        'example' => 'function1',
                    ],
                    'FunctionType' => [
                        'title' => 'FunctionType',
                        'description' => '函数类型， 目前支持的枚举为JAVA',
                        'type' => 'string',
                        'example' => 'JAVA',
                    ],
                    'OwnerName' => [
                        'title' => 'OwnerName',
                        'description' => '负责人名称',
                        'type' => 'string',
                        'example' => 'zhangsan',
                    ],
                    'OwnerType' => [
                        'title' => 'OwnerType',
                        'description' => '负责人类型，填USER或ROLE或GROUP',
                        'type' => 'string',
                        'example' => 'USER',
                    ],
                    'ResourceUri' => [
                        'title' => 'ResourceUri',
                        'description' => '函数的资源URI',
                        'type' => 'array',
                        'items' => [
                            'description' => '函数的资源URI',
                            '$ref' => '#/components/schemas/ResourceUri',
                        ],
                    ],
                    'CreateTime' => [
                        'title' => 'createTime',
                        'description' => '创建时间',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1638501155',
                    ],
                ],
            ],
            'FunctionResource' => [
                'title' => 'A short description of struct',
                'description' => '鉴权资源结构-Table',
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'title' => 'Database name',
                        'description' => '数据库的名称。',
                        'type' => 'string',
                        'example' => 'default',
                    ],
                    'FunctionName' => [
                        'title' => 'Function name',
                        'description' => '函数名称',
                        'type' => 'string',
                        'example' => 'default',
                    ],
                ],
            ],
            'GrantRevokeEntry' => [
                'title' => 'A short description of struct',
                'description' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'MetaResource' => [
                        'title' => '授权的资源',
                        'description' => '授权资源结构',
                        '$ref' => '#/components/schemas/MetaResource',
                    ],
                    'Accesses' => [
                        'title' => '授权的accesses列表',
                        'description' => '权限Access列表',
                        '$ref' => '#/components/schemas/Accesses',
                    ],
                    'DelegateAccesses' => [
                        'title' => '授权的grantable accesses列表',
                        'description' => '后期通过服务端扩展支持',
                        '$ref' => '#/components/schemas/Accesses',
                    ],
                    'Principal' => [
                        'title' => '授权的用户principal',
                        'description' => '身份唯一标识ARN',
                        '$ref' => '#/components/schemas/Principal',
                    ],
                    'Id' => [
                        'title' => 'identifier for this entry',
                        'description' => 'entry id用于处理异常message',
                        'type' => 'string',
                        'example' => 'CRW-7A1EC3D73BF419AF',
                    ],
                ],
            ],
            'GrantRevokeFailureEntry' => [
                'title' => 'A short description of struct',
                'description' => '批量授权错误时的结构',
                'type' => 'object',
                'properties' => [
                    'GrantRevokeEntry' => [
                        '$ref' => '#/components/schemas/GrantRevokeEntry',
                    ],
                    'ErrorDetail' => [
                        '$ref' => '#/components/schemas/ErrorDetail',
                    ],
                ],
            ],
            'HighLight' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'title' => '高亮的key',
                        'type' => 'string',
                        'example' => 'name',
                    ],
                    'Value' => [
                        'title' => '高亮的value',
                        'type' => 'string',
                        'example' => '<em>tab</em>2',
                    ],
                ],
            ],
            'IndicatorStatistic' => [
                'title' => '统计指标明细',
                'description' => '指标明细记录',
                'type' => 'object',
                'properties' => [
                    'Data' => [
                        'title' => '指标数据',
                        'description' => '明细数据',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Date' => [
                        'title' => '指标日期',
                        'description' => '明细日期',
                        'type' => 'string',
                    ],
                ],
            ],
            'LifecycleResource' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'LifecycleRuleBizId' => [
                        'title' => '生命周期规则id',
                        'type' => 'string',
                    ],
                    'DatabaseName' => [
                        'title' => '数据库名称',
                        'type' => 'string',
                    ],
                    'TableName' => [
                        'title' => '表名称',
                        'type' => 'string',
                    ],
                    'GmtCreate' => [
                        'title' => '创建时间',
                        'type' => 'string',
                    ],
                    'TableProfile' => [
                        '$ref' => '#/components/schemas/TableProfile',
                    ],
                    'Database' => [
                        'title' => 'Database',
                        'type' => 'object',
                        'properties' => [
                            'CreateTime' => [
                                'title' => 'CreateTime',
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'UpdateTime' => [
                                'title' => 'UpdateTime',
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Description' => [
                                'title' => 'Description',
                                'type' => 'string',
                            ],
                            'LocationUri' => [
                                'title' => 'LocationUri',
                                'type' => 'string',
                            ],
                            'Name' => [
                                'title' => 'Name',
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Table' => [
                        'title' => 'Table',
                        'type' => 'object',
                        'properties' => [
                            'CreateTime' => [
                                'title' => 'CreateTime',
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Parameters' => [
                                'title' => 'Parameters',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'type' => 'string',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'type' => 'string',
                            ],
                            'TableType' => [
                                'title' => 'TableType',
                                'type' => 'string',
                            ],
                            'Sd' => [
                                'title' => 'Sd',
                                'type' => 'object',
                                'properties' => [
                                    'BucketCols' => [
                                        'title' => 'BucketCols',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'InputFormat' => [
                                        'title' => 'InputFormat',
                                        'type' => 'string',
                                    ],
                                    'Location' => [
                                        'title' => 'Location',
                                        'type' => 'string',
                                    ],
                                    'OutputFormat' => [
                                        'title' => 'OutputFormat',
                                        'type' => 'string',
                                    ],
                                    'Parameters' => [
                                        'title' => 'Parameters',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'SerDeInfo' => [
                                        'title' => 'SerDeInfo',
                                        'type' => 'object',
                                        'properties' => [
                                            'Parameters' => [
                                                'title' => 'Parameters',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'SerializationLib' => [
                                                'title' => 'SerializationLib',
                                                'type' => 'string',
                                            ],
                                            'Name' => [
                                                'title' => 'Name',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'DatabaseProfile' => [
                        'title' => 'DatabaseProfile',
                        '$ref' => '#/components/schemas/DatabaseProfile',
                    ],
                    'Owner' => [
                        'title' => 'Owner',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'BizId' => [
                        'title' => 'BizId',
                        'type' => 'string',
                    ],
                    'CatalogId' => [
                        'title' => '目录名称',
                        'type' => 'string',
                    ],
                ],
            ],
            'LifecycleRule' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'BizId' => [
                        'title' => 'bizId',
                        'type' => 'string',
                    ],
                    'GmtCreate' => [
                        'title' => '创建时间',
                        'type' => 'string',
                    ],
                    'GmtModified' => [
                        'title' => '修改时间',
                        'type' => 'string',
                    ],
                    'Name' => [
                        'title' => 'name',
                        'type' => 'string',
                    ],
                    'ResourceType' => [
                        'title' => 'resourceType',
                        'type' => 'string',
                    ],
                    'BindCount' => [
                        'title' => 'bindCount',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Description' => [
                        'title' => 'description',
                        'type' => 'string',
                    ],
                    'RuleType' => [
                        'title' => 'ruleType',
                        'type' => 'string',
                    ],
                    'Config' => [
                        'title' => 'Config',
                        'type' => 'string',
                    ],
                    'IaDays' => [
                        'title' => 'iaDays',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ArchiveDays' => [
                        'title' => 'archiveDays',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ColdArchiveDays' => [
                        'title' => 'coldArchiveDays',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ScheduleStatus' => [
                        'title' => 'scheduleStatus',
                        'type' => 'string',
                    ],
                    'Workflow' => [
                        'title' => '工作流',
                        '$ref' => '#/components/schemas/Workflow',
                    ],
                    'WorkflowId' => [
                        'title' => '工作流id',
                        'type' => 'string',
                    ],
                    'WorkflowInstance' => [
                        'title' => '工作流实例',
                        '$ref' => '#/components/schemas/WorkflowInstance',
                    ],
                    'CatalogId' => [
                        'title' => '目录名称',
                        'type' => 'string',
                    ],
                ],
            ],
            'LifecycleTask' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'BizId' => [
                        'title' => '业务id',
                        'type' => 'string',
                    ],
                    'Name' => [
                        'title' => '名称',
                        'type' => 'string',
                    ],
                    'WorkflowInstance' => [
                        '$ref' => '#/components/schemas/WorkflowInstance',
                    ],
                    'LifecycleRule' => [
                        '$ref' => '#/components/schemas/LifecycleRule',
                    ],
                ],
            ],
            'ListFieldSchema' => [
                'title' => 'A short description of struct',
                'description' => 'ListFieldSchema数组',
                'type' => 'array',
                'items' => [
                    'description' => '表字段的定义',
                    '$ref' => '#/components/schemas/FieldSchema',
                ],
            ],
            'ListListString' => [
                'title' => 'ListListString',
                'description' => 'ListListString',
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/ListString',
                ],
            ],
            'ListResourceUri' => [
                'title' => 'ResourceUri',
                'description' => '资源URI列表',
                'type' => 'array',
                'items' => [
                    'description' => '资源URI',
                    'type' => 'object',
                    'properties' => [
                        'ResourceType' => [
                            'title' => 'ResourceType',
                            'description' => '资源类型，枚举包括JAR FILE ARCHIVE',
                            'type' => 'string',
                            'example' => 'JAR',
                        ],
                        'Uri' => [
                            'title' => 'Uri',
                            'description' => 'URI资源地址',
                            'type' => 'string',
                            'example' => 'hdfs:///tmp/jar1.jar',
                        ],
                    ],
                ],
            ],
            'ListString' => [
                'title' => 'ListString Object',
                'description' => 'ListString',
                'type' => 'array',
                'items' => [
                    'description' => '值',
                    'type' => 'string',
                    'example' => '2010',
                ],
            ],
            'LocationStorageRankDTO' => [
                'title' => 'Location存储排名',
                'description' => 'location存储量排名',
                'type' => 'object',
                'properties' => [
                    'Location' => [
                        'title' => 'oss路径',
                        'type' => 'string',
                    ],
                    'Storage' => [
                        'title' => '存储量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileCnt' => [
                        'title' => '文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'LockObj' => [
                'title' => 'A short description of struct',
                'description' => 'LockObj',
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'title' => 'CatalogId',
                        'description' => '	'."\n"
                            .'数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'example' => '1344371',
                    ],
                    'DatabaseName' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'example' => 'database_test',
                    ],
                    'PartitionName' => [
                        'title' => 'PartitionName',
                        'description' => '分区名称，非必填',
                        'type' => 'string',
                        'example' => 'dt',
                    ],
                    'TableName' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'example' => 'test_table',
                    ],
                ],
            ],
            'LockStatus' => [
                'title' => 'A short description of struct',
                'description' => 'LockStatus',
                'type' => 'object',
                'properties' => [
                    'LockId' => [
                        'title' => 'LockId',
                        'description' => '锁唯一ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                    'LockState' => [
                        'title' => 'ACQUIRED/NOT_ACQUIRED',
                        'description' => '锁状态，ACQUIRED/NOT_ACQUIRED',
                        'type' => 'string',
                        'example' => 'ACQUIRED',
                    ],
                ],
            ],
            'LogInfo' => [
                'title' => 'A short description of struct',
                'description' => '运行日志信息',
                'type' => 'object',
                'properties' => [
                    'GmtCreate' => [
                        'title' => '创建时间',
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'title' => '实例ID',
                        'type' => 'string',
                    ],
                    'BizTime' => [
                        'title' => '业务运行时间',
                        'type' => 'string',
                    ],
                    'LogType' => [
                        'title' => '日志级别',
                        'type' => 'string',
                    ],
                    'LogId' => [
                        'title' => '日志id',
                        'type' => 'string',
                    ],
                    'LogSummary' => [
                        'title' => '日志概要',
                        'type' => 'string',
                    ],
                    'LogContent' => [
                        'title' => '日志内容',
                        'type' => 'string',
                    ],
                ],
            ],
            'MetaResource' => [
                'title' => 'A short description of struct',
                'description' => '鉴权资源结构',
                'type' => 'object',
                'properties' => [
                    'ResourceType' => [
                        'title' => 'CATALOG,DATABASE, TABLE, FUNCTION, COLUMN任选其一',
                        'description' => '元数据资源对象类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'TABLE' => 'TABLE',
                            'DATABASE' => 'DATABASE',
                            'COLUMN' => 'COLUMN',
                            ' CATALOG' => ' CATALOG',
                            ' FUNCTION' => ' FUNCTION',
                        ],
                        'example' => 'TABLE',
                    ],
                    'CatalogResource' => [
                        'title' => 'catalog resource',
                        'description' => 'Catalog资源',
                        'example' => '参看字段结构',
                        '$ref' => '#/components/schemas/CatalogResource',
                    ],
                    'DatabaseResource' => [
                        'title' => 'database resource',
                        'description' => 'Database资源',
                        'example' => '参看字段结构',
                        '$ref' => '#/components/schemas/DatabaseResource',
                    ],
                    'TableResource' => [
                        'title' => 'table resource',
                        'description' => 'Table资源',
                        'example' => '参看字段结构',
                        '$ref' => '#/components/schemas/TableResource',
                    ],
                    'FunctionResource' => [
                        'title' => 'function resource',
                        'description' => 'Function资源',
                        'example' => '参看字段结构',
                        '$ref' => '#/components/schemas/FunctionResource',
                    ],
                    'ColumnResource' => [
                        'title' => 'column resource',
                        'description' => 'Column资源',
                        'example' => '参看字段结构',
                        '$ref' => '#/components/schemas/ColumnResource',
                    ],
                ],
            ],
            'Order' => [
                'title' => 'Order Object',
                'description' => 'Order',
                'type' => 'object',
                'properties' => [
                    'Col' => [
                        'title' => 'Col',
                        'description' => '字段名称',
                        'type' => 'string',
                        'example' => 'col1',
                    ],
                    'Order' => [
                        'title' => 'Order',
                        'description' => '1表示升序排列，0表示降序排列',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'Parameters' => [
                'title' => 'parameter map',
                'description' => 'Parameters',
                'type' => 'object',
                'additionalProperties' => [
                    'description' => '参数key/value'."\n",
                    'type' => 'string',
                    'example' => 'key',
                ],
            ],
            'Partition' => [
                'title' => 'A short description of struct',
                'description' => 'Partition',
                'type' => 'object',
                'properties' => [
                    'CreateTime' => [
                        'title' => 'CreateTime',
                        'description' => '创建时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608730999',
                    ],
                    'DatabaseName' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'example' => 'database_test',
                    ],
                    'LastAccessTime' => [
                        'title' => 'LastAccessTime',
                        'description' => '上一次访问分区的时间',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608730999',
                    ],
                    'LastAnalyzedTime' => [
                        'title' => 'LastAnalyzedTime',
                        'description' => '上一次执行统计运算的时间',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608730999',
                    ],
                    'Parameters' => [
                        'title' => 'Parameters',
                        'description' => '分区有关的键值对参数',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '键值对',
                            'type' => 'string',
                            'example' => 'key',
                        ],
                    ],
                    'Privileges' => [
                        'description' => '权限配置，可以空',
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'Sd' => [
                        'description' => '存储描述符',
                        '$ref' => '#/components/schemas/StorageDescriptor',
                    ],
                    'TableName' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'example' => 'test_table_20201223',
                    ],
                    'Values' => [
                        'title' => 'Values',
                        'description' => '分区的值',
                        'type' => 'array',
                        'items' => [
                            'description' => '分区的值',
                            'type' => 'string',
                            'example' => 'part1',
                        ],
                    ],
                ],
            ],
            'PartitionError' => [
                'title' => 'A short description of struct',
                'description' => 'PartitionError',
                'type' => 'object',
                'properties' => [
                    'ErrorDetail' => [
                        'description' => '错误信息',
                        '$ref' => '#/components/schemas/ErrorDetail',
                    ],
                    'PartitionValues' => [
                        'description' => '分区值。',
                        '$ref' => '#/components/schemas/ListString',
                    ],
                ],
            ],
            'PartitionInput' => [
                'title' => 'A short description of struct',
                'description' => 'Partition',
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'example' => 'database_test',
                    ],
                    'LastAccessTime' => [
                        'title' => 'LastAccessTime',
                        'description' => '上一次访问分区的时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608730999',
                    ],
                    'LastAnalyzedTime' => [
                        'title' => 'LastAnalyzedTime',
                        'description' => '上一次执行统计运算的时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608730999',
                    ],
                    'Parameters' => [
                        'title' => 'Parameters',
                        'description' => '分区有关的键值对参数',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '键值对',
                            'type' => 'string',
                            'example' => 'key',
                        ],
                    ],
                    'Privileges' => [
                        'description' => '权限配置，可以空',
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'Sd' => [
                        'description' => '存储描述符',
                        '$ref' => '#/components/schemas/StorageDescriptor',
                    ],
                    'TableName' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'example' => 'test_table_20201223',
                    ],
                    'Values' => [
                        'title' => 'Values',
                        'description' => '分区的值',
                        'type' => 'array',
                        'items' => [
                            'description' => '分区的值',
                            'type' => 'string',
                            'example' => 'part1',
                        ],
                    ],
                    'CreateTime' => [
                        'title' => 'createTime',
                        'description' => '创建时间',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1635147901',
                    ],
                ],
            ],
            'PartitionProfile' => [
                'title' => '分区数据概况',
                'description' => '分区数据概况',
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'title' => '库名称',
                        'description' => '库名称',
                        'type' => 'string',
                        'example' => 'test_db',
                    ],
                    'TableName' => [
                        'title' => '表名称',
                        'description' => '表名称',
                        'type' => 'string',
                        'example' => 'test_tbl',
                    ],
                    'PartitionName' => [
                        'title' => '分区名称',
                        'description' => '分区名称',
                        'type' => 'string',
                        'example' => 'year=2023/month=1',
                    ],
                    'ArchiveStatus' => [
                        'title' => 'oss 存储类型',
                        'description' => 'oss 存储类型',
                        'type' => 'string',
                        'example' => 'STANDARD',
                    ],
                    'CreateTime' => [
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'string',
                        'example' => '2023-08-16 18:02:22',
                    ],
                    'LastModifyTime' => [
                        'title' => '最后更新时间',
                        'description' => '最后更新时间',
                        'type' => 'string',
                        'example' => '2023-08-16 18:02:25',
                    ],
                    'LastAccessTime' => [
                        'title' => '最后访问时间（来自 oss 或 oss-hdfs 审计日志）',
                        'description' => '最后访问时间（来自 oss 或 oss-hdfs 审计日志）',
                        'type' => 'string',
                        'example' => '2023-08-22 12:14:42',
                    ],
                    'LastAccessNumTime' => [
                        'title' => '最后访问时间（已废弃）',
                        'description' => '最后访问时间（已废弃）',
                        'type' => 'string',
                    ],
                    'Location' => [
                        'title' => '存储位置',
                        'description' => '存储位置',
                        'type' => 'string',
                        'example' => 'oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_db/test_tbl/year=2023/month=1',
                    ],
                    'FileSize' => [
                        'title' => '分区大小',
                        'description' => '分区大小',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '13',
                    ],
                    'ObjectSize' => [
                        'title' => '分区大小（来自 oss 或 oss-hdfs 清单）',
                        'description' => '分区大小（来自 oss 或 oss-hdfs 清单）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '13',
                    ],
                    'FileCnt' => [
                        'title' => '文件数量',
                        'description' => '文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                    'ObjectCnt' => [
                        'title' => '文件数量（来自 oss 或 oss-hdfs 清单）',
                        'description' => '文件数量（来自 oss 或 oss-hdfs 清单）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                    'AccessNum' => [
                        'title' => '当天访问次数（已废弃）',
                        'description' => '当天访问次数（已废弃）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                    ],
                    'AccessNumWeekly' => [
                        'title' => '最近7天访问次数（已废弃）',
                        'description' => '最近7天访问次数（已废弃）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                    ],
                    'AccessNumMonthly' => [
                        'title' => '最近30天访问次数（已废弃）',
                        'description' => '最近30天访问次数（已废弃）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                    ],
                    'ObjectAccessNum' => [
                        'title' => '近1天文件访问次数（来自 oss-hdfs 审计日志）',
                        'description' => '近1天文件访问次数（来自 oss-hdfs 审计日志）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                    ],
                    'ObjectAccessNumWeekly' => [
                        'title' => '近7天文件访问次数（来自 oss-hdfs 审计日志）',
                        'description' => '近7天文件访问次数（来自 oss-hdfs 审计日志）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '4',
                    ],
                    'ObjectAccessNumMonthly' => [
                        'title' => '近30天文件访问次数（来自 oss-hdfs 审计日志）',
                        'description' => '近30天文件访问次数（来自 oss-hdfs 审计日志）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '4',
                    ],
                    'DataSourceType' => [
                        'title' => '存储量采集的来源类型',
                        'description' => '存储量采集的来源类型',
                        'type' => 'string',
                        'example' => 'OSS_HDFS',
                    ],
                ],
            ],
            'PartitionSpec' => [
                'title' => 'A short description of struct',
                'description' => '共享sd 的partition结构',
                'type' => 'object',
                'properties' => [
                    'SharedSDPartitions' => [
                        'title' => 'SharedSDPartitions',
                        'description' => '共享分区list，表示多个partition共同的部分',
                        'type' => 'array',
                        'items' => [
                            'description' => '分区',
                            '$ref' => '#/components/schemas/Partition',
                        ],
                    ],
                    'SharedStorageDescriptor' => [
                        'title' => 'SharedStorageDescriptor',
                        'description' => '共享SD信息，表示多个partition共享相同的SD',
                        'type' => 'object',
                        'properties' => [
                            'Cols' => [
                                'title' => 'Cols',
                                'description' => '列信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '每个列的详情',
                                    '$ref' => '#/components/schemas/FieldSchema',
                                ],
                            ],
                            'Location' => [
                                'title' => 'Location',
                                'description' => '数据的location',
                                'type' => 'string',
                                'example' => '相对路径',
                            ],
                        ],
                    ],
                ],
            ],
            'PartitionValueList' => [
                'title' => 'A short description of struct',
                'description' => 'PartitionValueList',
                'type' => 'array',
                'items' => [
                    'description' => '分区值的对象',
                    'type' => 'object',
                    'properties' => [
                        'Values' => [
                            'description' => '分区值',
                            '$ref' => '#/components/schemas/ListString',
                        ],
                    ],
                ],
            ],
            'Principal' => [
                'title' => 'A short description of struct',
                'description' => '身份唯一标识ARN',
                'type' => 'object',
                'properties' => [
                    'PrincipalArn' => [
                        'title' => '身份标识',
                        'description' => 'ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                        'type' => 'string',
                        'example' => 'acs:ram::[AliyunAccountId]:user/username_abc',
                    ],
                ],
            ],
            'PrincipalPrivilegeSet' => [
                'title' => 'PrincipalPrivilegeSet Object',
                'description' => 'PrincipalPrivilegeSet Object',
                'type' => 'object',
                'properties' => [
                    'GroupPrivileges' => [
                        'description' => 'GroupPrivileges',
                        '$ref' => '#/components/schemas/Privileges',
                    ],
                    'RolePrivileges' => [
                        'description' => 'RolePrivileges',
                        '$ref' => '#/components/schemas/Privileges',
                    ],
                    'UserPrivileges' => [
                        'description' => 'UserPrivileges',
                        '$ref' => '#/components/schemas/Privileges',
                    ],
                ],
            ],
            'PrincipalResourcePermissions' => [
                'title' => 'Principal和资源的权限信息',
                'type' => 'object',
                'properties' => [
                    'Principal' => [
                        'title' => '权限信息所属的Principal',
                        'required' => true,
                        '$ref' => '#/components/schemas/Principal',
                    ],
                    'MetaResource' => [
                        'title' => '权限信息所属的Hive元数据资源',
                        'required' => true,
                        '$ref' => '#/components/schemas/MetaResource',
                    ],
                    'Accesses' => [
                        'title' => '权限',
                        '$ref' => '#/components/schemas/Accesses',
                    ],
                    'DelegateAccesses' => [
                        'title' => 'grantable权限',
                        '$ref' => '#/components/schemas/Accesses',
                    ],
                ],
            ],
            'PrincipalResourcePermissionsList' => [
                'title' => 'A short description of struct',
                'description' => '权限列表',
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/PrincipalResourcePermissions',
                ],
            ],
            'Principals' => [
                'title' => '一组Principal',
                'description' => 'Principal list',
                'type' => 'array',
                'items' => [
                    'description' => 'Principal',
                    '$ref' => '#/components/schemas/Principal',
                ],
            ],
            'PrivilegeGrantInfo' => [
                'title' => 'PrivilegeGrantInfo',
                'description' => 'PrivilegeGrantInfo Object',
                'type' => 'object',
                'properties' => [
                    'CreateTime' => [
                        'title' => 'createTime',
                        'description' => '创建时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1606226844',
                    ],
                    'GrantOption' => [
                        'title' => 'grantOption',
                        'description' => 'GrantOption	',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'Grantor' => [
                        'title' => 'grantor',
                        'description' => 'Grantor',
                        'type' => 'string',
                        'example' => 'Grantor',
                    ],
                    'GrantorType' => [
                        'title' => 'grantorType',
                        'description' => 'GrantorType',
                        'type' => 'string',
                        'example' => 'GrantorType',
                    ],
                    'Privilege' => [
                        'title' => 'privilege',
                        'description' => 'Privilege',
                        'type' => 'string',
                        'example' => 'Privilege',
                    ],
                ],
            ],
            'PrivilegeResource' => [
                'title' => 'A short description of struct',
                'description' => 'Privilege Resource',
                'type' => 'object',
                'properties' => [
                    'MetaResource' => [
                        'title' => 'resource',
                        'description' => '元数据资源。',
                        '$ref' => '#/components/schemas/MetaResource',
                    ],
                    'Access' => [
                        'title' => 'Access type',
                        'description' => 'Access type',
                        'type' => 'string',
                        'example' => 'Drop',
                    ],
                ],
            ],
            'PrivilegeResources' => [
                'title' => 'A short description of struct',
                'description' => '鉴权资源列表',
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/PrivilegeResource',
                ],
            ],
            'Privileges' => [
                'title' => 'A short description of struct',
                'description' => 'Privileges Object',
                'type' => 'object',
                'additionalProperties' => [
                    'description' => 'Privileges Array'."\n",
                    'type' => 'array',
                    'items' => [
                        'description' => 'Privileges ',
                        '$ref' => '#/components/schemas/PrivilegeGrantInfo',
                    ],
                ],
            ],
            'ResourceUri' => [
                'title' => 'A short description of struct',
                'description' => 'ResourceUri',
                'type' => 'object',
                'properties' => [
                    'ResourceType' => [
                        'title' => 'ResourceType',
                        'description' => '资源类型，枚举包括JAR FILE ARCHIVE',
                        'type' => 'string',
                        'example' => 'JAR',
                    ],
                    'Uri' => [
                        'title' => 'Uri',
                        'description' => 'URI资源地址',
                        'type' => 'string',
                        'example' => 'hdfs:///tmp/jar1.jar',
                    ],
                ],
            ],
            'Role' => [
                'title' => 'A short description of struct',
                'description' => '数据湖元数据角色',
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'title' => 'name',
                        'description' => '角色名',
                        'type' => 'string',
                        'example' => 'role_name',
                    ],
                    'Description' => [
                        'title' => '角色描述',
                        'description' => '角色描述',
                        'type' => 'string',
                        'example' => 'role description',
                    ],
                    'Users' => [
                        'description' => 'ram user/ram role principal 列表，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName'."\n",
                        'example' => '["acs:ram::111:role/role_name", "acs:ram::111:role/role_name"]',
                        '$ref' => '#/components/schemas/Principals',
                    ],
                    'DisplayName' => [
                        'title' => 'DisplayName',
                        'description' => '角色展示名',
                        'type' => 'string',
                        'example' => '显示名称，允许中文',
                    ],
                    'PrincipalArn' => [
                        'title' => 'PrincipalArn',
                        'description' => '数据湖 role的 principal arn，格式为acs:dlf::[accountId]:role/[roleName]',
                        'type' => 'string',
                        'example' => 'acs:dlf::111:role/role_name',
                    ],
                    'CreateTime' => [
                        'title' => 'CreateTime',
                        'description' => '角色创建时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1647323053',
                    ],
                    'UpdateTime' => [
                        'title' => 'UpdateTime',
                        'description' => '角色更新时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1647323053',
                    ],
                    'IsPredefined' => [
                        'title' => 'IsPredefined',
                        'description' => '是否内置角色',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'RoleInput' => [
                'title' => 'A short description of struct',
                'description' => 'role input',
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'title' => 'name',
                        'description' => '数据湖角色名',
                        'type' => 'string',
                        'example' => 'test',
                    ],
                    'Description' => [
                        'title' => '角色描述',
                        'description' => '角色描述',
                        'type' => 'string',
                        'example' => '注释',
                    ],
                    'DisplayName' => [
                        'title' => 'DisplayName',
                        'description' => '角色显示名',
                        'type' => 'string',
                        'example' => '显示名称，允许中文',
                    ],
                ],
            ],
            'Roles' => [
                'title' => 'A short description of struct',
                'description' => 'A short description of struct',
                'type' => 'array',
                'items' => [
                    'description' => '角色。',
                    '$ref' => '#/components/schemas/Role',
                ],
            ],
            'SerDeInfo' => [
                'title' => 'SerDeInfo Object',
                'description' => 'SerDeInfo',
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'title' => 'Name',
                        'description' => '名称',
                        'type' => 'string',
                        'example' => 'name',
                    ],
                    'Parameters' => [
                        'description' => '参数。键值对形式',
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'SerializationLib' => [
                        'title' => 'SerializationLib',
                        'description' => 'SerDe的实现类',
                        'type' => 'string',
                        'example' => 'org.apache.hadoop.hive.serde2.OpenCSVSerde',
                    ],
                ],
            ],
            'SingleIndicatorDTO' => [
                'title' => '统计指标',
                'description' => '指标统计结果',
                'type' => 'object',
                'properties' => [
                    'DayOnDay' => [
                        'title' => '日环比',
                        'description' => '日环比',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'MonthOnMonth' => [
                        'title' => '月环比',
                        'description' => '月环比',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'DayIncrement' => [
                        'title' => '日新增',
                        'description' => '日新增',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MonthIncrement' => [
                        'title' => '月新增',
                        'description' => '月新增',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Total' => [
                        'title' => '总量',
                        'description' => '总量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'SkewedInfo' => [
                'title' => 'A short description of struct',
                'description' => 'SkewedInfo',
                'type' => 'object',
                'properties' => [
                    'SkewedColNames' => [
                        'title' => 'SkewedColNames',
                        'description' => '包含倾斜值的字段列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '倾斜字段',
                            'type' => 'string',
                            'example' => 'col1',
                        ],
                    ],
                    'SkewedColValueLocationMaps' => [
                        'title' => 'SkewedColValueLocationMaps',
                        'description' => '倾斜值和字段的映射Map',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '倾斜值和字段的映射Map',
                            'type' => 'string',
                            'example' => '{“col1”:"val1"}',
                        ],
                    ],
                    'SkewedColValues' => [
                        'title' => 'SkewedColValueLocationMaps',
                        'description' => '倾斜值列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '倾斜值',
                            'type' => 'array',
                            'items' => [
                                'description' => '倾斜值',
                                'type' => 'string',
                                'example' => '"123"',
                            ],
                        ],
                    ],
                ],
            ],
            'SmallFileCntRank' => [
                'title' => '小文件数量排名',
                'description' => '小文件数量排名',
                'type' => 'object',
                'properties' => [
                    'TableName' => [
                        'title' => '表名',
                        'description' => '表名称',
                        'type' => 'string',
                        'example' => 'delta_partition_1',
                    ],
                    'Quantity' => [
                        'title' => '数量',
                        'description' => '小文件数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '52250',
                    ],
                    'DbName' => [
                        'title' => '库名',
                        'description' => '库名称',
                        'type' => 'string',
                        'example' => 'qingwei_repo',
                    ],
                    'Location' => [
                        'title' => '存储位置',
                        'description' => '表存储位置',
                        'type' => 'string',
                        'example' => 'oss://qingwei-hz/repo/delta_partition_1',
                    ],
                ],
            ],
            'SortCriterion' => [
                'title' => '排序结构',
                'description' => 'search排序结构体',
                'type' => 'object',
                'properties' => [
                    'FieldName' => [
                        'title' => '排序字段',
                        'description' => '字段名称。',
                        'type' => 'string',
                        'example' => 'name',
                    ],
                    'Sort' => [
                        'title' => '排序方式',
                        'description' => '排序方式。默认值desc'."\n"
                            ."\n"
                            .'类型：'."\n"
                            .'asc：正序'."\n"
                            .'desc：逆序',
                        'type' => 'string',
                        'example' => 'asc/desc',
                    ],
                ],
            ],
            'StorageCollectTaskOperationResult' => [
                'title' => '修改采集任务结果',
                'description' => '修改采集任务结果',
                'type' => 'object',
                'properties' => [
                    'Success' => [
                        'title' => '是否成功',
                        'description' => '是否成功',
                        'type' => 'boolean',
                    ],
                    'TaskId' => [
                        'title' => '任务Id',
                        'description' => '任务Id',
                        'type' => 'string',
                    ],
                    'TaskType' => [
                        'title' => '任务类型',
                        'description' => '任务类型',
                        'type' => 'string',
                    ],
                    'DlfCreated' => [
                        'title' => '是否DLF自动创建',
                        'description' => '是否DLF自动创建',
                        'type' => 'boolean',
                    ],
                    'ErrCode' => [
                        'title' => '错误码',
                        'description' => '错误码',
                        'type' => 'string',
                    ],
                    'ErrMessage' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'type' => 'string',
                    ],
                ],
            ],
            'StorageDescriptor' => [
                'title' => 'A short description of struct',
                'description' => 'StorageDescriptor',
                'type' => 'object',
                'properties' => [
                    'BucketCols' => [
                        'description' => '分桶的字段的数组',
                        '$ref' => '#/components/schemas/ListString',
                    ],
                    'Cols' => [
                        'title' => 'Cols',
                        'description' => '表中的所有字段',
                        'type' => 'array',
                        'items' => [
                            'description' => '表字段的定义',
                            '$ref' => '#/components/schemas/FieldSchema',
                        ],
                    ],
                    'Compressed' => [
                        'title' => 'Compressed',
                        'description' => '是否启用压缩',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                    'InputFormat' => [
                        'title' => 'InputFormat',
                        'description' => '输入格式，具体参见CreateTable的API解释',
                        'type' => 'string',
                        'example' => 'org.apache.hadoop.hive.ql.io.avro.AvroContainerInputFormat',
                    ],
                    'Location' => [
                        'title' => 'Location',
                        'description' => '表的物理位置',
                        'type' => 'string',
                        'example' => 'file:///tmp/table',
                    ],
                    'NumBuckets' => [
                        'title' => 'NumBuckets',
                        'description' => '分桶的数量，如果设置了BucketCols则必填',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                    ],
                    'OutputFormat' => [
                        'title' => 'OutputFormat',
                        'description' => '输出格式，具体参见CreateTable的API解释',
                        'type' => 'string',
                        'example' => 'org.apache.hadoop.hive.ql.io.avro.AvroContainerOutputFormat',
                    ],
                    'Parameters' => [
                        'title' => 'Parameters',
                        'description' => '键值对的映射数组',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '键值对',
                            'type' => 'string',
                            'example' => 'key',
                        ],
                    ],
                    'SerDeInfo' => [
                        'description' => '序列化/反序列化信息',
                        '$ref' => '#/components/schemas/SerDeInfo',
                    ],
                    'SkewedInfo' => [
                        'description' => '一个字段中的大量重复值（数据倾斜）的设定',
                        '$ref' => '#/components/schemas/SkewedInfo',
                    ],
                    'SortCols' => [
                        'title' => 'SortCols',
                        'description' => '排序字段设定',
                        'type' => 'array',
                        'items' => [
                            'description' => '排序字段',
                            '$ref' => '#/components/schemas/Order',
                        ],
                    ],
                    'StoredAsSubDirectories' => [
                        'title' => 'StoredAsSubDirectories',
                        'description' => '表数据是否存储在子目录中',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                ],
            ],
            'StorageFormat' => [
                'title' => '存储格式',
                'description' => '存储格式分布信息',
                'type' => 'object',
                'properties' => [
                    'Parquet' => [
                        'title' => 'Parquet',
                        'description' => 'Parquet格式文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Orc' => [
                        'title' => 'Orc',
                        'description' => 'Orc格式文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Delta' => [
                        'title' => 'Delta',
                        'description' => 'Delta格式文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Csv' => [
                        'title' => 'Csv',
                        'description' => 'Csv格式文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Iceberg' => [
                        'title' => 'Iceberg',
                        'description' => 'Iceberg格式文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Uncategorized' => [
                        'title' => 'Uncategorized',
                        'description' => '格式未分类文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Json' => [
                        'title' => 'Json',
                        'description' => 'Json格式文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Avro' => [
                        'title' => 'Avro',
                        'description' => 'Avro格式文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Hudi' => [
                        'title' => 'Hudi',
                        'description' => 'Hudi格式文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'StorageLayer' => [
                'title' => '存储分层',
                'description' => '存储分层分布信息',
                'type' => 'object',
                'properties' => [
                    'Archive' => [
                        'title' => '归档',
                        'description' => '归档文件大小',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ColdArchive' => [
                        'title' => '冷归档',
                        'description' => '冷归档文件大小',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Standard' => [
                        'title' => '标准',
                        'description' => '标准文件大小',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Infrequent' => [
                        'title' => '低频',
                        'description' => '低频文件大小',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Unknown' => [
                        'title' => '未知',
                        'description' => '未知',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'StorageRankDTO' => [
                'title' => '存储排名',
                'description' => '存储排名',
                'type' => 'object',
                'properties' => [
                    'dbStorageRank' => [
                        'title' => '库存储排名',
                        'description' => '库存储排名列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '库存储排名',
                            '$ref' => '#/components/schemas/DbStorageRank',
                        ],
                        'required' => false,
                    ],
                    'tableStorageRank' => [
                        'title' => '表存储排名',
                        'description' => '表存储排名列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '表存储排名',
                            '$ref' => '#/components/schemas/TableStorageRank',
                        ],
                    ],
                    'smallFileCntRank' => [
                        'title' => '小文件数量排名',
                        'description' => '小文件数量排名列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '小文件数量排名',
                            '$ref' => '#/components/schemas/SmallFileCntRank',
                        ],
                    ],
                ],
                'required' => false,
            ],
            'StorageSummary' => [
                'title' => 'A short description of struct',
                'description' => 'StorageSummary',
                'type' => 'object',
                'properties' => [
                    'DatabaseNum' => [
                        'title' => 'database num of this catalog',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PartitionNum' => [
                        'title' => 'partition num of this catalog',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'TableNum' => [
                        'title' => 'table num of this catalog',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'StrogeCollectTask' => [
                'title' => '采集任务',
                'description' => '采集任务',
                'type' => 'object',
                'properties' => [
                    'GmtModified' => [
                        'title' => '修改时间',
                        'type' => 'string',
                    ],
                    'GmtCreate' => [
                        'title' => '创建时间',
                        'type' => 'string',
                    ],
                    'Id' => [
                        'title' => '任务Id',
                        'type' => 'string',
                    ],
                    'Location' => [
                        'title' => 'OSS路径',
                        'type' => 'string',
                    ],
                    'DestinationBucketName' => [
                        'title' => '目标Bucket',
                        'type' => 'string',
                    ],
                    'DestinationPrefix' => [
                        'title' => '目标Prefix',
                        'type' => 'string',
                    ],
                    'Status' => [
                        'title' => '任务状态',
                        'type' => 'string',
                    ],
                    'DlfCreated' => [
                        'title' => '是否DLF自动创建',
                        'type' => 'boolean',
                    ],
                    'TaskType' => [
                        'title' => '任务类型',
                        'type' => 'string',
                    ],
                    'InventoryId' => [
                        'title' => '清单Id',
                        'type' => 'string',
                    ],
                ],
            ],
            'Table' => [
                'title' => 'A short description of struct',
                'description' => 'Table',
                'type' => 'object',
                'properties' => [
                    'Cascade' => [
                        'title' => 'Cascade',
                        'description' => '是否允许级联删除',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                    'CreateTime' => [
                        'title' => 'CreateTime',
                        'description' => '创建时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608707407',
                    ],
                    'CreatedBy' => [
                        'title' => 'CreatedBy',
                        'description' => '创建者名称',
                        'type' => 'string',
                        'example' => 'zhangsan',
                    ],
                    'DatabaseName' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'example' => 'database_test',
                    ],
                    'LastAccessTime' => [
                        'title' => 'LastAccessTime',
                        'description' => '上一次访问这个table的时间戳',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608707407',
                    ],
                    'LastAnalyzedTime' => [
                        'title' => 'LastAnalyzedTime',
                        'description' => '上一次做列级别的统计信息计算的时间戳',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608707407',
                    ],
                    'Owner' => [
                        'title' => 'Owner',
                        'description' => '负责人名称',
                        'type' => 'string',
                        'example' => 'zhangsan',
                    ],
                    'OwnerType' => [
                        'title' => 'OwnerType',
                        'description' => '负责人类型，填USER或ROLE或GROUP',
                        'type' => 'string',
                        'example' => 'USER',
                    ],
                    'Parameters' => [
                        'description' => '与表相关的属性键值对的定义',
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'PartitionKeys' => [
                        'description' => '分区表的列表',
                        '$ref' => '#/components/schemas/ListFieldSchema',
                    ],
                    'Privileges' => [
                        'description' => '权限设置',
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'Retention' => [
                        'title' => 'Retention',
                        'description' => '该表的保留时间',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '30000',
                    ],
                    'RewriteEnabled' => [
                        'title' => 'RewriteEnabled',
                        'description' => '视图是否可被重写的query使用',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'Sd' => [
                        'description' => '存储描述符，包含有关此表的物理存储信息',
                        '$ref' => '#/components/schemas/StorageDescriptor',
                    ],
                    'TableName' => [
                        'title' => 'TableName',
                        'description' => '表名称',
                        'type' => 'string',
                        'example' => 'table_name',
                    ],
                    'TableType' => [
                        'title' => 'TableType',
                        'description' => '元数据表的类型：例如MANAGED\\_TABLE，EXTERNAL\\_TABLE，VIRTUAL\\_VIEW，INDEX\\_TABLE，MATERIALIZED\\_VIEW',
                        'type' => 'string',
                        'example' => 'MANAGED_TABLE',
                    ],
                    'Temporary' => [
                        'title' => 'Temporary',
                        'description' => '是否临时表',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                    'UpdateTime' => [
                        'title' => 'UpdateTime',
                        'description' => '更新时间，Unix时间戳秒数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608707407',
                    ],
                    'ViewExpandedText' => [
                        'title' => 'ViewExpandedText',
                        'description' => '视图的详细语句',
                        'type' => 'string',
                        'example' => '\'\'',
                    ],
                    'ViewOriginalText' => [
                        'title' => 'ViewOriginalText',
                        'description' => '视图的原始语句',
                        'type' => 'string',
                        'example' => '\'\'',
                    ],
                    'TableId' => [
                        'title' => 'TableId',
                        'description' => 'TableId',
                        'type' => 'string',
                        'example' => '59c6c8fefeaa46d8b599c1f790c59a19',
                    ],
                    'TableVersion' => [
                        'title' => 'TableVersion',
                        'description' => 'TableVersion',
                        '$ref' => '#/components/schemas/TableVersion',
                    ],
                ],
            ],
            'TableError' => [
                'title' => 'A short description of struct',
                'description' => 'TableError',
                'type' => 'object',
                'properties' => [
                    'ErrorDetail' => [
                        'description' => '错误详细信息',
                        '$ref' => '#/components/schemas/ErrorDetail',
                    ],
                    'TableName' => [
                        'title' => 'TableName',
                        'description' => '出现错误的表名',
                        'type' => 'string',
                        'example' => 'test',
                    ],
                ],
            ],
            'TableExtended' => [
                'title' => 'A short description of struct',
                'description' => 'TableExtended',
                'type' => 'object',
                'properties' => [
                    'Cascade' => [
                        'title' => 'Cascade',
                        'type' => 'boolean',
                    ],
                    'CreateTime' => [
                        'title' => 'CreateTime',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CreatedBy' => [
                        'title' => 'CreatedBy',
                        'type' => 'string',
                    ],
                    'DatabaseName' => [
                        'title' => 'DatabaseName',
                        'type' => 'string',
                    ],
                    'LastAccessTime' => [
                        'title' => 'LastAccessTime',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'LastAnalyzedTime' => [
                        'title' => 'LastAnalyzedTime',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Owner' => [
                        'title' => 'Owner',
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'title' => 'OwnerType',
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'PartitionKeys' => [
                        '$ref' => '#/components/schemas/ListFieldSchema',
                    ],
                    'Privileges' => [
                        'title' => 'privileges',
                        'type' => 'object',
                        'properties' => [
                            'groupPrivileges' => [
                                'title' => 'groupPrivileges',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CreateTime' => [
                                                'title' => 'CreateTime',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                            'GrantOption' => [
                                                'title' => 'GrantOption',
                                                'type' => 'boolean',
                                            ],
                                            'Grantor' => [
                                                'title' => 'Grantor',
                                                'type' => 'string',
                                            ],
                                            'GrantorType' => [
                                                'title' => 'GrantorType',
                                                'type' => 'string',
                                            ],
                                            'Privilege' => [
                                                'title' => 'Privilege',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RolePrivileges' => [
                                'title' => 'rolePrivileges',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CreateTime' => [
                                                'title' => 'CreateTime',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                            'GrantOption' => [
                                                'title' => 'GrantOption',
                                                'type' => 'boolean',
                                            ],
                                            'Grantor' => [
                                                'title' => 'Grantor',
                                                'type' => 'string',
                                            ],
                                            'GrantorType' => [
                                                'title' => 'GrantorType',
                                                'type' => 'string',
                                            ],
                                            'Privilege' => [
                                                'title' => 'Privilege',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'UserPrivileges' => [
                                'title' => 'userPrivileges',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CreateTime' => [
                                                'title' => 'CreateTime',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                            'GrantOption' => [
                                                'title' => 'GrantOption',
                                                'type' => 'boolean',
                                            ],
                                            'Grantor' => [
                                                'title' => 'Grantor',
                                                'type' => 'string',
                                            ],
                                            'GrantorType' => [
                                                'title' => 'GrantorType',
                                                'type' => 'string',
                                            ],
                                            'Privilege' => [
                                                'title' => 'Privilege',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Retention' => [
                        'title' => 'Retention',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RewriteEnabled' => [
                        'title' => 'RewriteEnabled',
                        'type' => 'boolean',
                    ],
                    'Sd' => [
                        'title' => 'sd',
                        'type' => 'object',
                        'properties' => [
                            'BucketCols' => [
                                'title' => 'bucketCols',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Cols' => [
                                'title' => 'Cols',
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/FieldSchema',
                                ],
                            ],
                            'Compressed' => [
                                'title' => 'Compressed',
                                'type' => 'boolean',
                            ],
                            'InputFormat' => [
                                'title' => 'InputFormat',
                                'type' => 'string',
                            ],
                            'Location' => [
                                'title' => 'Location',
                                'type' => 'string',
                            ],
                            'NumBuckets' => [
                                'title' => 'NumBuckets',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'OutputFormat' => [
                                'title' => 'OutputFormat',
                                'type' => 'string',
                            ],
                            'Parameters' => [
                                'title' => 'Parameters',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'SerDeInfo' => [
                                'title' => 'SerDeInfo',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'title' => 'Name',
                                        'type' => 'string',
                                    ],
                                    'Parameters' => [
                                        'title' => 'Parameters',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'SerializationLib' => [
                                        'title' => 'SerializationLib',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'SkewedInfo' => [
                                'title' => 'SkewedInfo',
                                'type' => 'object',
                                'properties' => [
                                    'SkewedColNames' => [
                                        'title' => 'SkewedColNames',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'SkewedColValueLocationMaps' => [
                                        'title' => 'SkewedColValueLocationMaps',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'SkewedColValues' => [
                                        'title' => 'SkewedColValues',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SortCols' => [
                                'title' => 'SortCols',
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/Order',
                                ],
                            ],
                            'StoredAsSubDirectories' => [
                                'title' => 'StoredAsSubDirectories',
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'TableName' => [
                        'title' => 'TableName',
                        'type' => 'string',
                    ],
                    'TableType' => [
                        'title' => 'TableType',
                        'type' => 'string',
                    ],
                    'Temporary' => [
                        'title' => 'Temporary',
                        'type' => 'boolean',
                    ],
                    'UpdateTime' => [
                        'title' => 'UpdateTime',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ViewExpandedText' => [
                        'title' => 'ViewExpandedText',
                        'type' => 'string',
                    ],
                    'ViewOriginalText' => [
                        'title' => 'ViewOriginalText',
                        'type' => 'string',
                    ],
                    'TableFormat' => [
                        'title' => 'TableFormat',
                        'type' => 'string',
                    ],
                ],
            ],
            'TableInput' => [
                'title' => 'A short description of struct',
                'description' => 'Table',
                'type' => 'object',
                'properties' => [
                    'Cascade' => [
                        'title' => 'Cascade',
                        'description' => '是否级联删除',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                    'CreatedBy' => [
                        'title' => 'CreatedBy',
                        'description' => '创建者名称',
                        'type' => 'string',
                        'example' => 'zhangsan',
                    ],
                    'DatabaseName' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'example' => 'database_test',
                    ],
                    'LastAccessTime' => [
                        'title' => 'LastAccessTime',
                        'description' => '上一次访问这个table的时间戳',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608707407',
                    ],
                    'LastAnalyzedTime' => [
                        'title' => 'LastAnalyzedTime',
                        'description' => '上一次做列级别的统计信息计算的时间戳',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1608707407',
                    ],
                    'Owner' => [
                        'title' => 'Owner',
                        'description' => '负责人名称',
                        'type' => 'string',
                        'example' => 'zhangsan',
                    ],
                    'OwnerType' => [
                        'title' => 'OwnerType',
                        'description' => '负责人类型，填USER或ROLE或GROUP',
                        'type' => 'string',
                        'example' => 'USER',
                    ],
                    'Parameters' => [
                        'description' => '与表相关的属性键值对的定义',
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'PartitionKeys' => [
                        'description' => '分区表的列表。 仅支持基本类型作为分区键。如果未指定任何partitionKeys，需要将partitionKeys的值设置为空列表',
                        '$ref' => '#/components/schemas/ListFieldSchema',
                    ],
                    'Privileges' => [
                        'description' => '权限设置，可以为空对象',
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'Retention' => [
                        'title' => 'Retention',
                        'description' => '该表的保留时间',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '30000',
                    ],
                    'RewriteEnabled' => [
                        'title' => 'RewriteEnabled',
                        'description' => '视图是否可被重写的query使用',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'Sd' => [
                        'description' => '存储描述符，包含有关此表的物理存储信息',
                        '$ref' => '#/components/schemas/StorageDescriptor',
                    ],
                    'TableName' => [
                        'title' => 'TableName',
                        'description' => '表名称',
                        'type' => 'string',
                        'example' => 'table_name',
                    ],
                    'TableType' => [
                        'title' => 'TableType',
                        'description' => '元数据表的类型：例如MANAGED\\_TABLE，EXTERNAL\\_TABLE，VIRTUAL\\_VIEW，INDEX\\_TABLE，MATERIALIZED\\_VIEW',
                        'type' => 'string',
                        'example' => 'MANAGED_TABLE',
                    ],
                    'Temporary' => [
                        'title' => 'Temporary',
                        'description' => '是否临时表',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                    'ViewExpandedText' => [
                        'title' => 'ViewExpandedText',
                        'description' => '视图的详细语句',
                        'type' => 'string',
                        'example' => '\'\'',
                    ],
                    'ViewOriginalText' => [
                        'title' => 'ViewOriginalText',
                        'description' => '视图的原始语句',
                        'type' => 'string',
                        'example' => '\'\'',
                    ],
                    'CreateTime' => [
                        'title' => 'CreateTime',
                        'description' => '创建时间',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1645437703000',
                    ],
                ],
            ],
            'TableProfile' => [
                'title' => '表数据概况',
                'description' => '表数据概况',
                'type' => 'object',
                'properties' => [
                    'PartitionCnt' => [
                        'title' => '分区数量',
                        'description' => '分区数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '3',
                    ],
                    'FileCnt' => [
                        'title' => '文件数量',
                        'description' => '文件数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '5',
                    ],
                    'ObjectCnt' => [
                        'title' => '文件数量（来自 oss 或 oss-hdfs 清单）',
                        'description' => '文件数量（来自 oss 或 oss-hdfs 清单）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '5',
                    ],
                    'FileSize' => [
                        'title' => '文件大小',
                        'description' => '文件大小',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '31',
                    ],
                    'ObjectSize' => [
                        'title' => '文件大小（来自 oss 或 oss-hdfs 清单）',
                        'description' => '文件大小（来自 oss 或 oss-hdfs 清单）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '31',
                    ],
                    'RecordCnt' => [
                        'title' => '记录数',
                        'description' => '记录数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '2',
                    ],
                    'IsPartitioned' => [
                        'title' => '是否分区表',
                        'description' => '是否分区表',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'LastModifyTime' => [
                        'title' => '最后更新时间',
                        'description' => '最后更新时间',
                        'type' => 'string',
                        'example' => '2023-08-16 18:02:25',
                    ],
                    'LastAccessTime' => [
                        'title' => '最后访问时间（来自 oss 或 oss-hdfs 审计日志）',
                        'description' => '最后访问时间',
                        'type' => 'string',
                        'example' => '2023-08-22 12:14:42',
                    ],
                    'DatabaseName' => [
                        'title' => '库名称',
                        'description' => '库名称',
                        'type' => 'string',
                        'example' => 'test_db',
                    ],
                    'TableName' => [
                        'title' => '表名称',
                        'description' => '表名称',
                        'type' => 'string',
                        'example' => 'test_tbl',
                    ],
                    'CreateTime' => [
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'string',
                        'example' => '2023-08-14 10:44:13',
                    ],
                    'Location' => [
                        'title' => '存储位置',
                        'description' => '存储位置',
                        'type' => 'string',
                        'example' => 'oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_db/test_tbl/',
                    ],
                    'AccessNum' => [
                        'title' => '当天访问次数（已废弃）',
                        'description' => '当天访问次数（已废弃）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                    ],
                    'AccessNumWeekly' => [
                        'title' => '一周访问次数（已废弃）',
                        'description' => '一周访问次数（已废弃）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                    ],
                    'AccessNumMonthly' => [
                        'title' => '当月访问次数（已废弃）',
                        'description' => '当月访问次数（已废弃）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                    ],
                    'LastAccessNumTime' => [
                        'title' => '最后访问时间（已废弃）',
                        'description' => '最后访问时间（已废弃）',
                        'type' => 'string',
                    ],
                    'LatestDate' => [
                        'title' => '元仓更新时间',
                        'description' => '元仓更新时间',
                        'type' => 'string',
                        'example' => '2023-08-30 19:16:10',
                    ],
                    'LatestAccessNumDate' => [
                        'title' => '访问频次更新时间（已废弃）',
                        'description' => '访问频次更新时间（已废弃）',
                        'type' => 'string',
                    ],
                    'LastDdlTime' => [
                        'title' => '最后DDL更新时间',
                        'description' => '最后DDL更新时间',
                        'type' => 'string',
                        'example' => '2023-08-16 18:02:24',
                    ],
                    'ObjectAccessNum' => [
                        'title' => '近1天文件访问次数（来自 oss-hdfs 审计日志）',
                        'description' => '近1天文件访问次数（来自 oss-hdfs 审计日志）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '0',
                    ],
                    'ObjectAccessNumWeekly' => [
                        'title' => '近7天文件访问次数（来自 oss-hdfs 审计日志）',
                        'description' => '近7天文件访问次数（来自 oss-hdfs 审计日志）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '18',
                    ],
                    'ObjectAccessNumMonthly' => [
                        'title' => '近30天文件访问次数（来自 oss-hdfs 审计日志）',
                        'description' => '近30天文件访问次数（来自 oss-hdfs 审计日志）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '18',
                    ],
                    'DataSourceType' => [
                        'title' => '存储量采集的来源类型',
                        'description' => '存储量采集的来源类型',
                        'type' => 'string',
                        'example' => 'OSS_HDFS',
                    ],
                ],
            ],
            'TableResource' => [
                'title' => 'A short description of struct',
                'description' => '鉴权资源结构-Table',
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'title' => 'database name',
                        'description' => '数据库的名称。',
                        'type' => 'string',
                        'example' => 'database_test',
                    ],
                    'TableName' => [
                        'title' => 'tablename',
                        'description' => '表名称。',
                        'type' => 'string',
                        'example' => 'test_parquet',
                    ],
                ],
            ],
            'TableStorageRank' => [
                'title' => '表存储排名',
                'description' => '表存储排名',
                'type' => 'object',
                'properties' => [
                    'TableName' => [
                        'title' => '表名',
                        'description' => '表名称',
                        'type' => 'string',
                        'example' => 'store_sales',
                    ],
                    'Quantity' => [
                        'title' => '存储量',
                        'description' => '表存储大小',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '4277873188582',
                    ],
                    'DbName' => [
                        'title' => '库名',
                        'description' => '库名称',
                        'type' => 'string',
                        'example' => 'tpcds_text_parquet_10000',
                    ],
                ],
            ],
            'TableVersion' => [
                'title' => 'A short description of struct',
                'description' => '新增表版本的结构',
                'type' => 'object',
                'properties' => [
                    'Table' => [
                        'description' => '元数据表详情',
                        '$ref' => '#/components/schemas/Table',
                    ],
                    'VersionId' => [
                        'title' => 'table version',
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '5',
                    ],
                ],
            ],
            'TaskStatus' => [
                'title' => 'A short description of struct',
                'description' => 'status and message',
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'title' => 'status of the task',
                        'description' => '任务状态。',
                        'type' => 'string',
                        'example' => 'KILLED',
                    ],
                    'Message' => [
                        'title' => 'message of the task',
                        'description' => '任务状态消息。',
                        'type' => 'string',
                        'example' => 'successful',
                    ],
                ],
            ],
            'UnarchiveDetail' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'ApiCallTimes' => [
                        'title' => 'api调用次数',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StorageSize' => [
                        'title' => '存储大小',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Cost' => [
                        'title' => '成本',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StorageType' => [
                        'title' => '存储类型',
                        'type' => 'string',
                    ],
                    'UnarchiveTaskStatus' => [
                        'title' => '解冻状态',
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateTablePartitionColumnStatisticsRequest' => [
                'title' => 'A short description of struct',
                'description' => 'UpdateTableColumnStatistics',
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'example' => '1344371',
                    ],
                    'ColumnStatisticsList' => [
                        'title' => 'ColumnStatisticsList',
                        'description' => '字段统计信息列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '字段统计',
                            '$ref' => '#/components/schemas/ColumnStatistics',
                        ],
                    ],
                    'DatabaseName' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'example' => 'database_test',
                    ],
                    'Engine' => [
                        'title' => 'Engine',
                        'description' => '引擎',
                        'type' => 'string',
                        'example' => 'MySQL',
                    ],
                    'TableName' => [
                        'title' => 'TableName',
                        'description' => '元数据表的名称',
                        'type' => 'string',
                        'example' => 'tabletest',
                    ],
                    'ValidWriteIdList' => [
                        'title' => 'ValidWriteIdList, optional',
                        'description' => 'ValidWriteIdList，暂不支持，可空',
                        'type' => 'string',
                        'example' => '""',
                    ],
                    'WriteId' => [
                        'title' => 'WriteId, optional',
                        'description' => 'WriteId，暂不支持，可空',
                        'type' => 'string',
                        'example' => '""',
                    ],
                    'IsStatsCompliant' => [
                        'title' => 'IsStatsCompliant',
                        'description' => 'IsStatsCompliant',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                ],
            ],
            'UserRole' => [
                'description' => '数据湖元数据角色',
                'type' => 'object',
                'properties' => [
                    'Role' => [
                        'title' => '授权的角色',
                        'description' => '角色。',
                        '$ref' => '#/components/schemas/Role',
                    ],
                    'GrantTime' => [
                        'title' => '授权时间',
                        'description' => '授予时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => 'DatabaseWildcard',
                    ],
                    'User' => [
                        'title' => '授权的用户',
                        'description' => '用户身份。',
                        '$ref' => '#/components/schemas/Principal',
                    ],
                ],
            ],
            'UserRoles' => [
                'title' => 'A short description of struct',
                'description' => '数据湖元数据角色和用户relationship列表',
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/UserRole',
                ],
            ],
            'Workflow' => [
                'title' => '工作流',
                'description' => '工作流',
                'type' => 'object',
                'properties' => [
                    'LatestInstanceId' => [
                        'title' => '实例id',
                        'type' => 'string',
                    ],
                    'LatestInstanceStatus' => [
                        'title' => '最后运行实例的状态',
                        'type' => 'string',
                    ],
                    'LatestStartTime' => [
                        'title' => '最后运行的开始时间',
                        'type' => 'string',
                    ],
                    'LatestEndTime' => [
                        'title' => '最近运行的结束时间',
                        'type' => 'string',
                    ],
                ],
            ],
            'WorkflowInstance' => [
                'title' => 'A short description of struct',
                'description' => '工作流运行实例',
                'type' => 'object',
                'properties' => [
                    'DlfWorkflowId' => [
                        'title' => '工作流id',
                        'type' => 'string',
                    ],
                    'ExternalInstanceId' => [
                        'title' => '业务流程实例id',
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'title' => '开始时间',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EndTime' => [
                        'title' => '结束时间',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Status' => [
                        'title' => '运行状态',
                        'type' => 'string',
                    ],
                    'RuntimeLogs' => [
                        'title' => '运行日志',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LogInfo',
                        ],
                    ],
                    'BatchProgress' => [
                        'title' => '执行进度',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateCatalog' => [
            'summary' => '创建数据湖数据目录。',
            'path' => '/api/metastore/catalogs',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'Body',
                        'type' => 'object',
                        'properties' => [
                            'CatalogInput' => [
                                'description' => 'cataloginput',
                                'required' => false,
                                '$ref' => '#/components/schemas/CatalogInput',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Response Message',
                                'description' => 'Response Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'BA84F8D4-5160-5544-BE76-3A306CD3A7B0',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Response Code',
                        'description' => 'Response Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"BA84F8D4-5160-5544-BE76-3A306CD3A7B0\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '创建数据湖数据目录',
        ],
        'DeleteCatalog' => [
            'summary' => '删除数据目录。',
            'path' => '/api/metastore/catalogs',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => 'CatalogId',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'catalog_test',
                    ],
                ],
                [
                    'name' => 'IsAsync',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否异步，默认同步',
                        'description' => '是否异步，默认同步',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Response Message',
                                'description' => 'Response Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Request is success or not',
                                'description' => 'Request is success or not',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TaskId' => [
                                'title' => '异步删除Catalog的taskId',
                                'description' => '异步删除Catalog的taskId',
                                'type' => 'string',
                                'example' => 'c38206c3aca0c41332ffe49294243009',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": \\"c38206c3aca0c41332ffe49294243009\\"\\n}","type":"json"}]',
            'title' => '删除数据湖数据目录',
        ],
        'UpdateCatalog' => [
            'summary' => '更新数据目录内容。',
            'path' => '/api/metastore/catalogs',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'Body',
                        'type' => 'object',
                        'properties' => [
                            'CatalogInput' => [
                                'description' => 'cataloginput',
                                'required' => true,
                                '$ref' => '#/components/schemas/CatalogInput',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => '响应编码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Response Message',
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '64E46067-49EA-5A91-A7B1-E812E18FC243',
                            ],
                            'Success' => [
                                'title' => 'Request is success or not',
                                'description' => '请求结果，取值如下：'."\n"
                                    ."\n"
                                    .'- true：请求成功。'."\n"
                                    .'- false：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"64E46067-49EA-5A91-A7B1-E812E18FC243\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '更新目录',
        ],
        'ListCatalogs' => [
            'summary' => '分页查询，获取元数据库命名空间（Catalog）列表。',
            'path' => '/api/metastore/catalogs/list',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'IdPattern',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'catalogId',
                        'description' => 'CatalogId的匹配正则',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*',
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'namePattern',
                        'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                        'type' => 'string',
                        'required' => false,
                        'example' => '‘’',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'pageSize',
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000000',
                        'minimum' => '-2',
                        'example' => '10',
                        'default' => '1000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Catalog Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Catalogs' => [
                                'title' => 'Catalogs',
                                'description' => 'Catalog列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Catalog详情',
                                    '$ref' => '#/components/schemas/Catalog',
                                ],
                                'example' => '[{"CatalogId":"xx"}]',
                            ],
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Catalogs\\": [\\n    {\\n      \\"CatalogId\\": \\"\\",\\n      \\"Description\\": \\"\\",\\n      \\"LocationUri\\": \\"\\",\\n      \\"Owner\\": \\"\\",\\n      \\"CreatedBy\\": \\"\\",\\n      \\"CreateTime\\": 0,\\n      \\"UpdateTime\\": 0,\\n      \\"Status\\": \\"\\",\\n      \\"CatalogType\\": \\"\\",\\n      \\"DefaultCatalog\\": true,\\n      \\"ThriftEnabled\\": true,\\n      \\"JdbcEnabled\\": true,\\n      \\"StorageAccessConfig\\": \\"\\"\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取数据目录列表',
            'requestParamsDescription' => '- IdPattern，待查询的catalog名称，支持**.***匹配，.表示匹配一个字符，*表示匹配n个字符'."\n"
                .'- NextPageToken：分页的开始位置，第一次填写空字符串，后续的填写上一次的response中返回的NextPageToken，如果返回的NextPageToken为空字符串，那么说明无数据了。'."\n"
                .'- pagesize：一次返回的个数。',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'GetCatalog' => [
            'summary' => '获取数据目录详情。',
            'path' => '/api/metastore/catalogs',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'catalogId',
                        'description' => 'catalogId',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'catalog_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Databases Response',
                        'description' => 'Databases Response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'DB07AAE9-4B88-5DEA-8F1D-4D1A9A864A85',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Catalog' => [
                                'description' => 'catalog详情',
                                'example' => '参考Catalog实体',
                                '$ref' => '#/components/schemas/Catalog',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"DB07AAE9-4B88-5DEA-8F1D-4D1A9A864A85\\",\\n  \\"Success\\": true,\\n  \\"Catalog\\": {\\n    \\"CatalogId\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"LocationUri\\": \\"\\",\\n    \\"Owner\\": \\"\\",\\n    \\"CreatedBy\\": \\"\\",\\n    \\"CreateTime\\": 0,\\n    \\"UpdateTime\\": 0,\\n    \\"Status\\": \\"\\",\\n    \\"CatalogType\\": \\"\\",\\n    \\"DefaultCatalog\\": true,\\n    \\"ThriftEnabled\\": true,\\n    \\"JdbcEnabled\\": true,\\n    \\"StorageAccessConfig\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取目录详情',
        ],
        'CreateDatabase' => [
            'summary' => '在数据湖元数据中创建一个新的元数据库。',
            'path' => '/api/metastore/catalogs/databases',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseInput' => [
                                'description' => '元数据库的详细信息',
                                'required' => false,
                                '$ref' => '#/components/schemas/DatabaseInput',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => '返回参数',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Response Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Response Code',
                        'description' => 'Response Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '新增元数据库',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'InvalidObject：name/partition/column/skewCol 校验不通过  '."\n"
                .'AlreadyExists：对应的元数据库已经存在     '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'DeleteDatabase' => [
            'summary' => '根据名称删除数据湖元数据库。',
            'path' => '/api/metastore/catalogs/databases',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Name',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'Cascade',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Cascade',
                        'description' => '是否级联删除数据',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Async',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否异步执行',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => '状态描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Response Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73201200-4C1A-4FEF-BD6B-C0DA7994FFA2',
                            ],
                            'Success' => [
                                'title' => 'Request is success or not',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TaskId' => [
                                'description' => '异步删除Database的taskId',
                                'type' => 'string',
                                'example' => 'c38206c3aca0c41332ffe49294243009',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"73201200-4C1A-4FEF-BD6B-C0DA7994FFA2\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": \\"c38206c3aca0c41332ffe49294243009\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除元数据库',
            'requestParamsDescription' => "\n"
                .'- Cascade：true：删除db下的表，false：不删除db下的表，如果db还存在表，那么删除失败'."\n",
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据库不存在  '."\n"
                .'InvalidOperation：元数据库仍存在表或函数，无法删除  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'UpdateDatabase' => [
            'summary' => '更新数据湖元数据库的详细信息。',
            'path' => '/api/metastore/catalogs/databases',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseInput' => [
                                'description' => '新的元数据库',
                                'required' => false,
                                '$ref' => '#/components/schemas/DatabaseInput',
                            ],
                            'Name' => [
                                'title' => 'Name',
                                'description' => '修改前的元数据库名称，更新前后元数据库相同则仅更新其他Meta',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => '状态描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Response Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '161F5EFC-E97E-43C0-AACF-FF18FAC912F0',
                            ],
                            'Success' => [
                                'title' => 'Request is success or not',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"161F5EFC-E97E-43C0-AACF-FF18FAC912F0\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '更新元数据库信息',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'AlreadyExists：新的元数据库名称已经存在    '."\n"
                .'NoSuchObject：对应的元数据库不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'GetDatabase' => [
            'summary' => '获取数据湖具体的一个元数据库的详细信息。',
            'path' => '/api/metastore/catalogs/databases',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'The name of the database to query.',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => '状态描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Database' => [
                                'description' => '元数据库详情',
                                '$ref' => '#/components/schemas/Database',
                            ],
                            'Message' => [
                                'title' => 'Response Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D659761F-29C3-409D-805A-0CF33A320128',
                            ],
                            'Success' => [
                                'title' => 'API is success or not',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Database\\": {\\n    \\"CreateTime\\": 0,\\n    \\"Description\\": \\"\\",\\n    \\"LocationUri\\": \\"oss://examplebuket/exampledb\\",\\n    \\"Name\\": \\"\\",\\n    \\"OwnerName\\": \\"\\",\\n    \\"OwnerType\\": \\"\\",\\n    \\"Parameters\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Privileges\\": {\\n      \\"GroupPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"RolePrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"UserPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"UpdateTime\\": 0,\\n    \\"CreatedBy\\": \\"\\"\\n  },\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"D659761F-29C3-409D-805A-0CF33A320128\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据库详情',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据库不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'ListDatabases' => [
            'summary' => '获取数据湖元数据库列表，分页查询，可以根据数据库名称匹配。',
            'path' => '/api/metastore/catalogs/databases/list',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'catalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'NamePattern',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'namePattern',
                        'description' => '数据库名称匹配的正则表达式，全部匹配则传入.*',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*',
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'namePattern',
                        'description' => '翻页token，由结果返回，如第一页可传入""',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa!',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'pageSize',
                        'description' => '每页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000000',
                        'minimum' => '-2',
                        'example' => '10',
                        'default' => '1000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Databases Response',
                        'description' => '返回体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态描述'."\n",
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Databases' => [
                                'title' => 'Database List',
                                'description' => '元数据库列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '元数据库查询结果',
                                    '$ref' => '#/components/schemas/Database',
                                ],
                                'example' => '[{"name":"test"}]',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => "\n"
                                    .'翻页token',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '558D764F-8C55-49CA-BF38-80EA532FC08F',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Databases\\": [\\n    {\\n      \\"CreateTime\\": 0,\\n      \\"Description\\": \\"\\",\\n      \\"LocationUri\\": \\"oss://examplebuket/exampledb\\",\\n      \\"Name\\": \\"\\",\\n      \\"OwnerName\\": \\"\\",\\n      \\"OwnerType\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"UpdateTime\\": 0,\\n      \\"CreatedBy\\": \\"\\"\\n    }\\n  ],\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"558D764F-8C55-49CA-BF38-80EA532FC08F\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据库列表',
            'requestParamsDescription' => "\n"
                .'- NamePattern，待查询的db名称，支持**.***匹配，.表示匹配一个字符，*表示匹配n个字符'."\n"
                .'- NextPageToken：分页的开始位置，第一次填写空字符串，后续的填写上一次的response中返回的NextPageToken，如果返回的NextPageToken为空字符串，那么说明无数据了。'."\n"
                .'- pagesize：一次返回的个数。',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'CreateTable' => [
            'summary' => '新增数据湖的元数据表。',
            'path' => '/api/metastore/catalogs/databases/tables',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'TableInput' => [
                                'description' => '元数据表详细信息',
                                'required' => false,
                                '$ref' => '#/components/schemas/TableInput',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '新增元数据表',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'InvalidObject：name/partition/column/skewCol 校验不通过  '."\n"
                .'AlreadyExists：对应的元数据表已经存在    '."\n"
                .'NoSuchObject：对应的元数据库不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
            'extraInfo' => '注：表支持的数据格式  '."\n"
                .'创建表时用户必须指定数据格式，参数示例如下  '."\n"
                .'**avro格式：**  '."\n"
                .' table.Parameters: {"classification":"avro"}  '."\n"
                .' table.Sd:  '."\n"
                .' "InputFormat":"org.apache.hadoop.hive.ql.io.avro.AvroContainerInputFormat"  '."\n"
                .' "OutputFormat":"org.apache.hadoop.hive.ql.io.avro.AvroContainerOutputFormat"  '."\n"
                .' "SerdeInfo":{"SerializationLib":"org.apache.hadoop.hive.serde2.avro.AvroSerDe","Parameters":{"serialization.format":"1"}}  '."\n"
                .'  **json格式:**  '."\n"
                .' table.Parameters:{"classification":"json"}  '."\n"
                .' table.Sd:  '."\n"
                .' "InputFormat":"org.apache.hadoop.mapred.TextInputFormat"  '."\n"
                .' "OutputFormat":"org.apache.hadoop.hive.ql.io.HiveIgnoreKeyTextOutputFormat"  '."\n"
                .' "SerdeInfo":{"Parameters":{"paths":","},"SerializationLib":"org.apache.hive.hcatalog.data.JsonSerDe"}  '."\n"
                .' **xml格式**  '."\n"
                .' table.Parameters:{"classification":"json"}  '."\n"
                .' "InputFormat":"com.ibm.spss.hive.serde2.xml.XmlInputFormat"  '."\n"
                .' "OutputFormat":"org.apache.hadoop.hive.ql.io.HiveIgnoreKeyTextOutputFormat",  '."\n"
                .' "SerdeInfo":{"Parameters":{"rowTag":""},"SerializationLib":"com.ibm.spss.hive.serde2.xml.XmlSerDe"}  '."\n"
                .' **parquet格式**  '."\n"
                .' table.Parameters:{"classification":"parquet"}  '."\n"
                .' "InputFormat":"org.apache.hadoop.hive.ql.io.parquet.MapredParquetInputFormat"  '."\n"
                .' "OutputFormat":"org.apache.hadoop.hive.ql.io.parquet.MapredParquetOutputFormat"  '."\n"
                .' "SerdeInfo":{"Parameters":{"serialization.format":"1"},"SerializationLib":"org.apache.hadoop.hive.ql.io.parquet.serde.ParquetHiveSerDe"}  '."\n"
                .' **csv格式**  '."\n"
                .' table.Parameters:{"classification":"csv"}  '."\n"
                .' "InputFormat":"org.apache.hadoop.mapred.TextInputFormat",  '."\n"
                .' "OutputFormat":"org.apache.hadoop.hive.ql.io.HiveIgnoreKeyTextOutputFormat",  '."\n"
                .' "SerdeInfo":{"Parameters":{"separatorChar":","},"SerializationLib":"org.apache.hadoop.hive.serde2.OpenCSVSerde"}  '."\n"
                .' 注意：separatorChar（分隔符）页面填的,比如“,” 逗号  '."\n"
                .' **orc格式**  '."\n"
                .' table.Parameters:{"classification":"orc"}  '."\n"
                .' "InputFormat":"org.apache.hadoop.hive.ql.io.orc.OrcInputFormat",  '."\n"
                .' "OutputFormat":"org.apache.hadoop.hive.ql.io.orc.OrcOutputFormat",  '."\n"
                .' "SerdeInfo":{"Parameters":{},"SerializationLib":"org.apache.hadoop.hive.ql.io.orc.OrcSerde"}',
        ],
        'DeleteTable' => [
            'summary' => '根据名称删除数据湖的元数据表。',
            'path' => '/api/metastore/catalogs/databases/tables',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_table_20201223',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除元数据表',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据表不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'DeleteTableColumnStatistics' => [
            'summary' => '回收数据湖元数据表的字段统计信息。',
            'path' => '/api/metastore/catalogs/databases/tables/columnstatistics',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_table_20201223',
                    ],
                ],
                [
                    'name' => 'ColumnNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '字段名称列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListString',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除元数据表统计信息',
        ],
        'DeleteTableVersion' => [
            'summary' => '删除数据湖元数据表指定版本。',
            'path' => '/api/metastore/catalogs/databases/tables/versions',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_table_20200715162543389',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'table version id',
                        'description' => '版本号',
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
                        'title' => 'Response',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除元数据表指定版本',
        ],
        'UpdateTable' => [
            'summary' => '根据名称更新数据湖元数据表信息。',
            'path' => '/api/metastore/catalogs/databases/tables',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '	'."\n"
                                    .'数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'SkipArchive' => [
                                'title' => 'SkipArchive',
                                'description' => '默认情况下，更新元数据表会创建一个新的归档版本，但如果skipArchive设置true则不会创建版本',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'TableInput' => [
                                'description' => '更新后元数据表详细信息',
                                'required' => false,
                                '$ref' => '#/components/schemas/TableInput',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => ' 元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20201223',
                            ],
                            'IsAsync' => [
                                'title' => 'IsAsync',
                                'description' => '是否同步更新',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'AllowPartitionKeyChange' => [
                                'title' => 'AllowPartitionKeyChange',
                                'description' => '是否允许更新partition key',
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
                        'title' => 'Response',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TaskId' => [
                                'title' => 'Async task Id',
                                'description' => 'Async task Id',
                                'type' => 'string',
                                'example' => 'aa689782deb97265701f57324fc4ae42',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": \\"aa689782deb97265701f57324fc4ae42\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '更新元数据表信息',
            'requestParamsDescription' => 'IsAsync：'."\n"
                ."\n"
                .'- true：表示异步调用，不等待后台任务返回，接口即返回结果，返回结果中带上taskid，这样客户端可以通过taskid查询任务的状态。'."\n"
                .'- false：表示同步调用，接口等待后台任务完成时，接口才返回结果。那么为false的风险就是如果后台任务需要做很长，接口会超时',
            'responseParamsDescription' => '- Code错误码说明  '."\n"
                .'- InvalidOperation：对应的元数据库/表不存在  '."\n"
                .'- InternalError：其他类型错误，请参考Message提示'."\n"
                .'- taskid：因为updatetable也会更新table的所有partitions信息，如果是异步提交，那么就会返回一个taskid，用来跟踪异步任务的执行状态。如果同步提交，那么该值无意义。'."\n",
        ],
        'UpdateTableColumnStatistics' => [
            'summary' => '创建或者更新元数据表的字段统计信息。',
            'path' => '/api/metastore/catalogs/databases/tables/columnstatistics',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UpdateTablePartitionColumnStatisticsRequest',
                    'in' => 'body',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '更新参数',
                        'required' => false,
                        '$ref' => '#/components/schemas/UpdateTablePartitionColumnStatisticsRequest',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'object',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '更新元数据表统计信息',
        ],
        'GetTable' => [
            'summary' => '获取某个数据湖元数据表的详细信息。',
            'path' => '/api/metastore/catalogs/databases/tables',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_table_20200715162543389',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Table' => [
                                'description' => '元数据表详细信息',
                                '$ref' => '#/components/schemas/Table',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"Table\\": {\\n    \\"Cascade\\": true,\\n    \\"CreateTime\\": 0,\\n    \\"CreatedBy\\": \\"\\",\\n    \\"DatabaseName\\": \\"\\",\\n    \\"LastAccessTime\\": 0,\\n    \\"LastAnalyzedTime\\": 0,\\n    \\"Owner\\": \\"\\",\\n    \\"OwnerType\\": \\"\\",\\n    \\"Parameters\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"PartitionKeys\\": [\\n      {\\n        \\"Comment\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"Type\\": \\"\\"\\n      }\\n    ],\\n    \\"Privileges\\": {\\n      \\"GroupPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"RolePrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"UserPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"Retention\\": 0,\\n    \\"RewriteEnabled\\": true,\\n    \\"Sd\\": {\\n      \\"BucketCols\\": [\\n        \\"\\"\\n      ],\\n      \\"Cols\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Compressed\\": true,\\n      \\"InputFormat\\": \\"\\",\\n      \\"Location\\": \\"\\",\\n      \\"NumBuckets\\": 0,\\n      \\"OutputFormat\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"SerDeInfo\\": {\\n        \\"Name\\": \\"\\",\\n        \\"SerializationLib\\": \\"\\"\\n      },\\n      \\"SkewedInfo\\": {\\n        \\"SkewedColNames\\": [\\n          \\"\\"\\n        ],\\n        \\"SkewedColValueLocationMaps\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SkewedColValues\\": [\\n          [\\n            \\"\\"\\n          ]\\n        ]\\n      },\\n      \\"SortCols\\": [\\n        {\\n          \\"Col\\": \\"\\",\\n          \\"Order\\": 0\\n        }\\n      ],\\n      \\"StoredAsSubDirectories\\": true\\n    },\\n    \\"TableName\\": \\"\\",\\n    \\"TableType\\": \\"\\",\\n    \\"Temporary\\": true,\\n    \\"UpdateTime\\": 0,\\n    \\"ViewExpandedText\\": \\"\\",\\n    \\"ViewOriginalText\\": \\"\\",\\n    \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n    \\"TableVersion\\": {\\n      \\"Table\\": {\\n        \\"Cascade\\": true,\\n        \\"CreateTime\\": 0,\\n        \\"CreatedBy\\": \\"\\",\\n        \\"DatabaseName\\": \\"\\",\\n        \\"LastAccessTime\\": 0,\\n        \\"LastAnalyzedTime\\": 0,\\n        \\"Owner\\": \\"\\",\\n        \\"OwnerType\\": \\"\\",\\n        \\"PartitionKeys\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Privileges\\": {},\\n        \\"Retention\\": 0,\\n        \\"RewriteEnabled\\": true,\\n        \\"Sd\\": {\\n          \\"BucketCols\\": [\\n            \\"\\"\\n          ],\\n          \\"Cols\\": [],\\n          \\"Compressed\\": true,\\n          \\"InputFormat\\": \\"\\",\\n          \\"Location\\": \\"\\",\\n          \\"NumBuckets\\": 0,\\n          \\"OutputFormat\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerDeInfo\\": {\\n            \\"Name\\": \\"\\",\\n            \\"SerializationLib\\": \\"\\"\\n          },\\n          \\"SkewedInfo\\": {\\n            \\"SkewedColNames\\": [\\n              \\"\\"\\n            ],\\n            \\"SkewedColValueLocationMaps\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SkewedColValues\\": [\\n              [\\n                \\"\\"\\n              ]\\n            ]\\n          },\\n          \\"SortCols\\": [\\n            {\\n              \\"Col\\": \\"\\",\\n              \\"Order\\": 0\\n            }\\n          ],\\n          \\"StoredAsSubDirectories\\": true\\n        },\\n        \\"TableName\\": \\"\\",\\n        \\"TableType\\": \\"\\",\\n        \\"Temporary\\": true,\\n        \\"UpdateTime\\": 0,\\n        \\"ViewExpandedText\\": \\"\\",\\n        \\"ViewOriginalText\\": \\"\\",\\n        \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n        \\"TableVersion\\": {\\n          \\"Table\\": {\\n            \\"Cascade\\": true,\\n            \\"CreateTime\\": 0,\\n            \\"CreatedBy\\": \\"\\",\\n            \\"DatabaseName\\": \\"\\",\\n            \\"LastAccessTime\\": 0,\\n            \\"LastAnalyzedTime\\": 0,\\n            \\"Owner\\": \\"\\",\\n            \\"OwnerType\\": \\"\\",\\n            \\"PartitionKeys\\": [],\\n            \\"Privileges\\": {},\\n            \\"Retention\\": 0,\\n            \\"RewriteEnabled\\": true,\\n            \\"Sd\\": {\\n              \\"BucketCols\\": [\\n                \\"\\"\\n              ],\\n              \\"Cols\\": [],\\n              \\"Compressed\\": true,\\n              \\"InputFormat\\": \\"\\",\\n              \\"Location\\": \\"\\",\\n              \\"NumBuckets\\": 0,\\n              \\"OutputFormat\\": \\"\\",\\n              \\"Parameters\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SerDeInfo\\": {\\n                \\"Name\\": \\"\\",\\n                \\"SerializationLib\\": \\"\\"\\n              },\\n              \\"SkewedInfo\\": {\\n                \\"SkewedColNames\\": [\\n                  \\"\\"\\n                ],\\n                \\"SkewedColValueLocationMaps\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SkewedColValues\\": [\\n                  [\\n                    \\"\\"\\n                  ]\\n                ]\\n              },\\n              \\"SortCols\\": [\\n                {\\n                  \\"Col\\": \\"\\",\\n                  \\"Order\\": 0\\n                }\\n              ],\\n              \\"StoredAsSubDirectories\\": true\\n            },\\n            \\"TableName\\": \\"\\",\\n            \\"TableType\\": \\"\\",\\n            \\"Temporary\\": true,\\n            \\"UpdateTime\\": 0,\\n            \\"ViewExpandedText\\": \\"\\",\\n            \\"ViewOriginalText\\": \\"\\",\\n            \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n            \\"TableVersion\\": {\\n              \\"VersionId\\": 0\\n            }\\n          },\\n          \\"VersionId\\": 0\\n        }\\n      },\\n      \\"VersionId\\": 0\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据表详情',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据表不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'GetTableColumnStatistics' => [
            'summary' => '获取数据湖元数据表指定字段的统计信息。',
            'path' => '/api/metastore/catalogs/databases/tables/columnstatistics',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '	'."\n"
                            .'数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_table_20201223',
                    ],
                ],
                [
                    'name' => 'ColumnNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '元数据表的字段列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListString',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ColumnStatisticsObjList' => [
                                'title' => 'ColumnStatisticsObjList',
                                'description' => '字段统计信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '字段统计信息',
                                    '$ref' => '#/components/schemas/ColumnStatisticsObj',
                                ],
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"ColumnStatisticsObjList\\": [\\n    {\\n      \\"ColumnName\\": \\"\\",\\n      \\"ColumnType\\": \\"\\",\\n      \\"ColumnStatisticsData\\": {\\n        \\"StatisticsData\\": \\"\\",\\n        \\"StatisticsType\\": \\"\\"\\n      }\\n    }\\n  ],\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据表字段的统计信息',
        ],
        'GetTableVersion' => [
            'summary' => '获取数据湖元数据表的一个指定版本。',
            'path' => '/api/metastore/catalogs/databases/tables/versions',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_table_20200715162543389',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Table Version',
                        'description' => '元数据表版本号',
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
                        'title' => 'Response',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TableVersion' => [
                                'description' => '带版本信息的元数据表',
                                '$ref' => '#/components/schemas/TableVersion',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableVersion\\": {\\n    \\"Table\\": {\\n      \\"Cascade\\": true,\\n      \\"CreateTime\\": 0,\\n      \\"CreatedBy\\": \\"\\",\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Owner\\": \\"\\",\\n      \\"OwnerType\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"PartitionKeys\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Retention\\": 0,\\n      \\"RewriteEnabled\\": true,\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"TableType\\": \\"\\",\\n      \\"Temporary\\": true,\\n      \\"UpdateTime\\": 0,\\n      \\"ViewExpandedText\\": \\"\\",\\n      \\"ViewOriginalText\\": \\"\\",\\n      \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n      \\"TableVersion\\": {\\n        \\"Table\\": {\\n          \\"Cascade\\": true,\\n          \\"CreateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\",\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Owner\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"PartitionKeys\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Privileges\\": {},\\n          \\"Retention\\": 0,\\n          \\"RewriteEnabled\\": true,\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"TableType\\": \\"\\",\\n          \\"Temporary\\": true,\\n          \\"UpdateTime\\": 0,\\n          \\"ViewExpandedText\\": \\"\\",\\n          \\"ViewOriginalText\\": \\"\\",\\n          \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n          \\"TableVersion\\": {\\n            \\"Table\\": {\\n              \\"Cascade\\": true,\\n              \\"CreateTime\\": 0,\\n              \\"CreatedBy\\": \\"\\",\\n              \\"DatabaseName\\": \\"\\",\\n              \\"LastAccessTime\\": 0,\\n              \\"LastAnalyzedTime\\": 0,\\n              \\"Owner\\": \\"\\",\\n              \\"OwnerType\\": \\"\\",\\n              \\"PartitionKeys\\": [],\\n              \\"Privileges\\": {},\\n              \\"Retention\\": 0,\\n              \\"RewriteEnabled\\": true,\\n              \\"Sd\\": {\\n                \\"BucketCols\\": [\\n                  \\"\\"\\n                ],\\n                \\"Cols\\": [],\\n                \\"Compressed\\": true,\\n                \\"InputFormat\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"NumBuckets\\": 0,\\n                \\"OutputFormat\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SerDeInfo\\": {\\n                  \\"Name\\": \\"\\",\\n                  \\"SerializationLib\\": \\"\\"\\n                },\\n                \\"SkewedInfo\\": {\\n                  \\"SkewedColNames\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"SkewedColValueLocationMaps\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SkewedColValues\\": [\\n                    [\\n                      \\"\\"\\n                    ]\\n                  ]\\n                },\\n                \\"SortCols\\": [\\n                  {\\n                    \\"Col\\": \\"\\",\\n                    \\"Order\\": 0\\n                  }\\n                ],\\n                \\"StoredAsSubDirectories\\": true\\n              },\\n              \\"TableName\\": \\"\\",\\n              \\"TableType\\": \\"\\",\\n              \\"Temporary\\": true,\\n              \\"UpdateTime\\": 0,\\n              \\"ViewExpandedText\\": \\"\\",\\n              \\"ViewOriginalText\\": \\"\\",\\n              \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\"\\n            },\\n            \\"VersionId\\": 0\\n          }\\n        },\\n        \\"VersionId\\": 0\\n      }\\n    },\\n    \\"VersionId\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据表指定版本',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据表不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'ListTableNames' => [
            'summary' => '仅用于查询数据湖元数据表的名称列表。',
            'path' => '/api/metastore/catalogs/databases/tables/names',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '	'."\n"
                            .'数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'TableNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableNamePattern',
                        'description' => '元数据表匹配正则表达式',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*',
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'NextPageToken',
                        'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                        'type' => 'string',
                        'required' => false,
                        'example' => '\'\'',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageSize',
                        'description' => '每页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000000',
                        'minimum' => '-1',
                        'example' => '10',
                        'default' => '1000',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableType filter',
                        'description' => '元数据表的类型：例如MANAGED\\_TABLE，EXTERNAL\\_TABLE，VIRTUAL\\_VIEW，INDEX\\_TABLE，MATERIALIZED\\_VIEW',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MANAGED_TABLE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TableNames' => [
                                'title' => 'TableNames',
                                'description' => '元数据表的名称列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '元数据表的名称',
                                    'type' => 'string',
                                    'example' => 'table1',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableNames\\": [\\n    \\"table1\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据表名称列表',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'ListTables' => [
            'summary' => '获取数据湖元数据表列表。',
            'path' => '/api/metastore/databases/tables/list',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'TableNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableNamePattern',
                        'description' => '元数据表名称，正则表达式匹配',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*',
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'NextPageToken',
                        'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                        'type' => 'string',
                        'required' => false,
                        'example' => '\'\'',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageSize',
                        'description' => '每页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000000',
                        'minimum' => '-1',
                        'example' => '10',
                        'default' => '1000',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableType filter',
                        'description' => '元数据表的类型：例如MANAGED\\_TABLE，EXTERNAL\\_TABLE，VIRTUAL\\_VIEW，INDEX\\_TABLE，MATERIALIZED\\_VIEW',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MANAGED_TABLE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'RequestId' => [
                                'title' => ' RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Tables' => [
                                'title' => 'Tables',
                                'description' => '元数据表列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '元数据表详细信息',
                                    '$ref' => '#/components/schemas/Table',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"Tables\\": [\\n    {\\n      \\"Cascade\\": true,\\n      \\"CreateTime\\": 0,\\n      \\"CreatedBy\\": \\"\\",\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Owner\\": \\"\\",\\n      \\"OwnerType\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"PartitionKeys\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Retention\\": 0,\\n      \\"RewriteEnabled\\": true,\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"TableType\\": \\"\\",\\n      \\"Temporary\\": true,\\n      \\"UpdateTime\\": 0,\\n      \\"ViewExpandedText\\": \\"\\",\\n      \\"ViewOriginalText\\": \\"\\",\\n      \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n      \\"TableVersion\\": {\\n        \\"Table\\": {\\n          \\"Cascade\\": true,\\n          \\"CreateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\",\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Owner\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"PartitionKeys\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Privileges\\": {},\\n          \\"Retention\\": 0,\\n          \\"RewriteEnabled\\": true,\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"TableType\\": \\"\\",\\n          \\"Temporary\\": true,\\n          \\"UpdateTime\\": 0,\\n          \\"ViewExpandedText\\": \\"\\",\\n          \\"ViewOriginalText\\": \\"\\",\\n          \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n          \\"TableVersion\\": {\\n            \\"Table\\": {\\n              \\"Cascade\\": true,\\n              \\"CreateTime\\": 0,\\n              \\"CreatedBy\\": \\"\\",\\n              \\"DatabaseName\\": \\"\\",\\n              \\"LastAccessTime\\": 0,\\n              \\"LastAnalyzedTime\\": 0,\\n              \\"Owner\\": \\"\\",\\n              \\"OwnerType\\": \\"\\",\\n              \\"PartitionKeys\\": [],\\n              \\"Privileges\\": {},\\n              \\"Retention\\": 0,\\n              \\"RewriteEnabled\\": true,\\n              \\"Sd\\": {\\n                \\"BucketCols\\": [\\n                  \\"\\"\\n                ],\\n                \\"Cols\\": [],\\n                \\"Compressed\\": true,\\n                \\"InputFormat\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"NumBuckets\\": 0,\\n                \\"OutputFormat\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SerDeInfo\\": {\\n                  \\"Name\\": \\"\\",\\n                  \\"SerializationLib\\": \\"\\"\\n                },\\n                \\"SkewedInfo\\": {\\n                  \\"SkewedColNames\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"SkewedColValueLocationMaps\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SkewedColValues\\": [\\n                    [\\n                      \\"\\"\\n                    ]\\n                  ]\\n                },\\n                \\"SortCols\\": [\\n                  {\\n                    \\"Col\\": \\"\\",\\n                    \\"Order\\": 0\\n                  }\\n                ],\\n                \\"StoredAsSubDirectories\\": true\\n              },\\n              \\"TableName\\": \\"\\",\\n              \\"TableType\\": \\"\\",\\n              \\"Temporary\\": true,\\n              \\"UpdateTime\\": 0,\\n              \\"ViewExpandedText\\": \\"\\",\\n              \\"ViewOriginalText\\": \\"\\",\\n              \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n              \\"TableVersion\\": {\\n                \\"VersionId\\": 0\\n              }\\n            },\\n            \\"VersionId\\": 0\\n          }\\n        },\\n        \\"VersionId\\": 0\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据表列表',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'ListTableVersions' => [
            'summary' => '分页查询数据湖元数据表指定版本的列表。',
            'path' => '/api/metastore/catalogs/databases/tables/versions/list',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_table_20200715162543389',
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'NextPageToken',
                        'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                        'type' => 'string',
                        'required' => false,
                        'example' => '\'\'',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'max result of this query',
                        'description' => '每页大小',
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
                        'title' => 'Response',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TableVersions' => [
                                'title' => 'table versions',
                                'description' => '带版本的元数据表列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '带版本的元数据表',
                                    'example' => '{"table":{},"versionId":123}',
                                    '$ref' => '#/components/schemas/TableVersion',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableVersions\\": [\\n    {\\n      \\"Table\\": {\\n        \\"Cascade\\": true,\\n        \\"CreateTime\\": 0,\\n        \\"CreatedBy\\": \\"\\",\\n        \\"DatabaseName\\": \\"\\",\\n        \\"LastAccessTime\\": 0,\\n        \\"LastAnalyzedTime\\": 0,\\n        \\"Owner\\": \\"\\",\\n        \\"OwnerType\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"PartitionKeys\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Privileges\\": {\\n          \\"GroupPrivileges\\": {\\n            \\"key\\": [\\n              {\\n                \\"CreateTime\\": 0,\\n                \\"GrantOption\\": true,\\n                \\"Grantor\\": \\"\\",\\n                \\"GrantorType\\": \\"\\",\\n                \\"Privilege\\": \\"\\"\\n              }\\n            ]\\n          },\\n          \\"RolePrivileges\\": {\\n            \\"key\\": [\\n              {\\n                \\"CreateTime\\": 0,\\n                \\"GrantOption\\": true,\\n                \\"Grantor\\": \\"\\",\\n                \\"GrantorType\\": \\"\\",\\n                \\"Privilege\\": \\"\\"\\n              }\\n            ]\\n          },\\n          \\"UserPrivileges\\": {\\n            \\"key\\": [\\n              {\\n                \\"CreateTime\\": 0,\\n                \\"GrantOption\\": true,\\n                \\"Grantor\\": \\"\\",\\n                \\"GrantorType\\": \\"\\",\\n                \\"Privilege\\": \\"\\"\\n              }\\n            ]\\n          }\\n        },\\n        \\"Retention\\": 0,\\n        \\"RewriteEnabled\\": true,\\n        \\"Sd\\": {\\n          \\"BucketCols\\": [\\n            \\"\\"\\n          ],\\n          \\"Cols\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Parameters\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Compressed\\": true,\\n          \\"InputFormat\\": \\"\\",\\n          \\"Location\\": \\"\\",\\n          \\"NumBuckets\\": 0,\\n          \\"OutputFormat\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerDeInfo\\": {\\n            \\"Name\\": \\"\\",\\n            \\"SerializationLib\\": \\"\\"\\n          },\\n          \\"SkewedInfo\\": {\\n            \\"SkewedColNames\\": [\\n              \\"\\"\\n            ],\\n            \\"SkewedColValueLocationMaps\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SkewedColValues\\": [\\n              [\\n                \\"\\"\\n              ]\\n            ]\\n          },\\n          \\"SortCols\\": [\\n            {\\n              \\"Col\\": \\"\\",\\n              \\"Order\\": 0\\n            }\\n          ],\\n          \\"StoredAsSubDirectories\\": true\\n        },\\n        \\"TableName\\": \\"\\",\\n        \\"TableType\\": \\"\\",\\n        \\"Temporary\\": true,\\n        \\"UpdateTime\\": 0,\\n        \\"ViewExpandedText\\": \\"\\",\\n        \\"ViewOriginalText\\": \\"\\",\\n        \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n        \\"TableVersion\\": {\\n          \\"Table\\": {\\n            \\"Cascade\\": true,\\n            \\"CreateTime\\": 0,\\n            \\"CreatedBy\\": \\"\\",\\n            \\"DatabaseName\\": \\"\\",\\n            \\"LastAccessTime\\": 0,\\n            \\"LastAnalyzedTime\\": 0,\\n            \\"Owner\\": \\"\\",\\n            \\"OwnerType\\": \\"\\",\\n            \\"PartitionKeys\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Privileges\\": {},\\n            \\"Retention\\": 0,\\n            \\"RewriteEnabled\\": true,\\n            \\"Sd\\": {\\n              \\"BucketCols\\": [\\n                \\"\\"\\n              ],\\n              \\"Cols\\": [],\\n              \\"Compressed\\": true,\\n              \\"InputFormat\\": \\"\\",\\n              \\"Location\\": \\"\\",\\n              \\"NumBuckets\\": 0,\\n              \\"OutputFormat\\": \\"\\",\\n              \\"Parameters\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SerDeInfo\\": {\\n                \\"Name\\": \\"\\",\\n                \\"SerializationLib\\": \\"\\"\\n              },\\n              \\"SkewedInfo\\": {\\n                \\"SkewedColNames\\": [\\n                  \\"\\"\\n                ],\\n                \\"SkewedColValueLocationMaps\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SkewedColValues\\": [\\n                  [\\n                    \\"\\"\\n                  ]\\n                ]\\n              },\\n              \\"SortCols\\": [\\n                {\\n                  \\"Col\\": \\"\\",\\n                  \\"Order\\": 0\\n                }\\n              ],\\n              \\"StoredAsSubDirectories\\": true\\n            },\\n            \\"TableName\\": \\"\\",\\n            \\"TableType\\": \\"\\",\\n            \\"Temporary\\": true,\\n            \\"UpdateTime\\": 0,\\n            \\"ViewExpandedText\\": \\"\\",\\n            \\"ViewOriginalText\\": \\"\\",\\n            \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n            \\"TableVersion\\": {\\n              \\"Table\\": {\\n                \\"Cascade\\": true,\\n                \\"CreateTime\\": 0,\\n                \\"CreatedBy\\": \\"\\",\\n                \\"DatabaseName\\": \\"\\",\\n                \\"LastAccessTime\\": 0,\\n                \\"LastAnalyzedTime\\": 0,\\n                \\"Owner\\": \\"\\",\\n                \\"OwnerType\\": \\"\\",\\n                \\"PartitionKeys\\": [],\\n                \\"Privileges\\": {},\\n                \\"Retention\\": 0,\\n                \\"RewriteEnabled\\": true,\\n                \\"Sd\\": {\\n                  \\"BucketCols\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Cols\\": [],\\n                  \\"Compressed\\": true,\\n                  \\"InputFormat\\": \\"\\",\\n                  \\"Location\\": \\"\\",\\n                  \\"NumBuckets\\": 0,\\n                  \\"OutputFormat\\": \\"\\",\\n                  \\"Parameters\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SerDeInfo\\": {\\n                    \\"Name\\": \\"\\",\\n                    \\"SerializationLib\\": \\"\\"\\n                  },\\n                  \\"SkewedInfo\\": {\\n                    \\"SkewedColNames\\": [\\n                      \\"\\"\\n                    ],\\n                    \\"SkewedColValueLocationMaps\\": {\\n                      \\"key\\": \\"\\"\\n                    },\\n                    \\"SkewedColValues\\": [\\n                      [\\n                        \\"\\"\\n                      ]\\n                    ]\\n                  },\\n                  \\"SortCols\\": [\\n                    {\\n                      \\"Col\\": \\"\\",\\n                      \\"Order\\": 0\\n                    }\\n                  ],\\n                  \\"StoredAsSubDirectories\\": true\\n                },\\n                \\"TableName\\": \\"\\",\\n                \\"TableType\\": \\"\\",\\n                \\"Temporary\\": true,\\n                \\"UpdateTime\\": 0,\\n                \\"ViewExpandedText\\": \\"\\",\\n                \\"ViewOriginalText\\": \\"\\",\\n                \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\"\\n              },\\n              \\"VersionId\\": 0\\n            }\\n          },\\n          \\"VersionId\\": 0\\n        }\\n      },\\n      \\"VersionId\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据表版本列表',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'NoSuchObject：对应的元数据表不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'GetTableProfile' => [
            'summary' => '获取表数据概况的详细信息。',
            'path' => '/webapi/metastorehouse/catalog/database/tableprofile',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据目录ID，默认填写主账号ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_db',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_tbl',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '97434FA4-A6B2-1AE4-A174-76964F29C759',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '请求是否成功。取值如下：'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TableProfile' => [
                                'description' => '表数据概况',
                                '$ref' => '#/components/schemas/TableProfile',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"-\\",\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"97434FA4-A6B2-1AE4-A174-76964F29C759\\",\\n  \\"Success\\": true,\\n  \\"TableProfile\\": {\\n    \\"PartitionCnt\\": 3,\\n    \\"FileCnt\\": 5,\\n    \\"ObjectCnt\\": 5,\\n    \\"FileSize\\": 31,\\n    \\"ObjectSize\\": 31,\\n    \\"RecordCnt\\": 0,\\n    \\"IsPartitioned\\": true,\\n    \\"LastModifyTime\\": \\"2023-08-16 18:02:25\\",\\n    \\"LastAccessTime\\": \\"2023-08-22 12:14:42\\",\\n    \\"DatabaseName\\": \\"test_db\\",\\n    \\"TableName\\": \\"test_tbl\\",\\n    \\"CreateTime\\": \\"2023-08-14 10:44:13\\",\\n    \\"Location\\": \\"oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_db/test_tbl/\\",\\n    \\"AccessNum\\": 0,\\n    \\"AccessNumWeekly\\": 0,\\n    \\"AccessNumMonthly\\": 0,\\n    \\"LastAccessNumTime\\": \\"\\",\\n    \\"LatestDate\\": \\"2023-08-30 19:16:10\\",\\n    \\"LatestAccessNumDate\\": \\"\\",\\n    \\"LastDdlTime\\": \\"2023-08-16 18:02:24\\",\\n    \\"ObjectAccessNum\\": 0,\\n    \\"ObjectAccessNumWeekly\\": 18,\\n    \\"ObjectAccessNumMonthly\\": 18,\\n    \\"DataSourceType\\": \\"OSS_HDFS\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTableProfileResponse>\\n    <TableProfile>\\n        <ObjectCnt>5</ObjectCnt>\\n        <AccessNum>0</AccessNum>\\n        <ObjectAccessNumMonthly>18</ObjectAccessNumMonthly>\\n        <ObjectAccessNumWeekly>0</ObjectAccessNumWeekly>\\n        <LastDdlTime>2023-08-16 18:02:24</LastDdlTime>\\n        <CreateTime>2023-08-14 10:44:13</CreateTime>\\n        <ObjectSize>31</ObjectSize>\\n        <DatabaseName>test_db</DatabaseName>\\n        <FileCnt>2</FileCnt>\\n        <LastModifyTime>2023-08-16 18:02:25</LastModifyTime>\\n        <LastAccessTime>2023-08-22 12:14:42</LastAccessTime>\\n        <LatestDate>2023-08-30 19:16:10</LatestDate>\\n        <ObjectAccessNum>0</ObjectAccessNum>\\n        <TableName>test_tbl</TableName>\\n        <AccessNumMonthly>0</AccessNumMonthly>\\n        <PartitionCnt>3</PartitionCnt>\\n        <AccessNumWeekly>0</AccessNumWeekly>\\n        <DataSourceType>OSS_HDFS</DataSourceType>\\n        <FileSize>31</FileSize>\\n    </TableProfile>\\n    <RequestId>97434FA4-A6B2-1AE4-A174-76964F29C759</RequestId>\\n    <Success>true</Success>\\n</GetTableProfileResponse>","errorExample":""}]',
            'title' => '获取表数据概况',
            'description' => '使用数据概况需要先将该表的 OSS Bucket 进行 Location 托管。',
        ],
        'RenameTable' => [
            'summary' => '仅用于更新数据湖元数据表的名称。',
            'path' => '/api/metastore/catalogs/databases/tables/rename',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'TableInput' => [
                                'description' => '元数据表对象，注意仅需填写TableName即可',
                                'required' => false,
                                '$ref' => '#/components/schemas/TableInput',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20201223',
                            ],
                            'IsAsync' => [
                                'title' => 'IsAsync',
                                'description' => '是否同步更新',
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
                        'title' => 'Response',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TaskId' => [
                                'title' => 'Async task Id',
                                'description' => 'Async task Id',
                                'type' => 'string',
                                'example' => 'c38206c3aca0c41332ffe49294243009',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": \\"c38206c3aca0c41332ffe49294243009\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '更新元数据表的名称',
            'requestParamsDescription' => 'IsAsync：'."\n"
                .'默认是false'."\n"
                ."\n"
                .'- true：表示异步调用，不等待后台任务返回，接口即返回结果，返回结果中带上taskid，这样客户端可以通过taskid查询任务的状态。'."\n"
                .'- false：表示同步调用，接口等待后台任务完成时，接口才返回结果。那么为false的风险就是如果后台任务需要做很长，接口会超时',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'InvalidOperation：对应的元数据库/表等不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'BatchGetTables' => [
            'summary' => '批量获取某个数据湖元数据表的详细信息。',
            'path' => '/api/metastore/catalogs/databases/tables/batchget',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'TableNames' => [
                                'description' => '元数据表名称',
                                'required' => false,
                                '$ref' => '#/components/schemas/ListString',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TableErrors' => [
                                'title' => 'TableErrors',
                                'description' => '报错信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '报错信息',
                                    '$ref' => '#/components/schemas/TableError',
                                ],
                            ],
                            'Tables' => [
                                'title' => 'Tables',
                                'description' => '查询出的元数据表列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '元数据表',
                                    '$ref' => '#/components/schemas/Table',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"TableName\\": \\"\\"\\n    }\\n  ],\\n  \\"Tables\\": [\\n    {\\n      \\"Cascade\\": true,\\n      \\"CreateTime\\": 0,\\n      \\"CreatedBy\\": \\"\\",\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Owner\\": \\"\\",\\n      \\"OwnerType\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"PartitionKeys\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Retention\\": 0,\\n      \\"RewriteEnabled\\": true,\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"TableType\\": \\"\\",\\n      \\"Temporary\\": true,\\n      \\"UpdateTime\\": 0,\\n      \\"ViewExpandedText\\": \\"\\",\\n      \\"ViewOriginalText\\": \\"\\",\\n      \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n      \\"TableVersion\\": {\\n        \\"Table\\": {\\n          \\"Cascade\\": true,\\n          \\"CreateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\",\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Owner\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"PartitionKeys\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Privileges\\": {},\\n          \\"Retention\\": 0,\\n          \\"RewriteEnabled\\": true,\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"TableType\\": \\"\\",\\n          \\"Temporary\\": true,\\n          \\"UpdateTime\\": 0,\\n          \\"ViewExpandedText\\": \\"\\",\\n          \\"ViewOriginalText\\": \\"\\",\\n          \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n          \\"TableVersion\\": {\\n            \\"Table\\": {\\n              \\"Cascade\\": true,\\n              \\"CreateTime\\": 0,\\n              \\"CreatedBy\\": \\"\\",\\n              \\"DatabaseName\\": \\"\\",\\n              \\"LastAccessTime\\": 0,\\n              \\"LastAnalyzedTime\\": 0,\\n              \\"Owner\\": \\"\\",\\n              \\"OwnerType\\": \\"\\",\\n              \\"PartitionKeys\\": [],\\n              \\"Privileges\\": {},\\n              \\"Retention\\": 0,\\n              \\"RewriteEnabled\\": true,\\n              \\"Sd\\": {\\n                \\"BucketCols\\": [\\n                  \\"\\"\\n                ],\\n                \\"Cols\\": [],\\n                \\"Compressed\\": true,\\n                \\"InputFormat\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"NumBuckets\\": 0,\\n                \\"OutputFormat\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SerDeInfo\\": {\\n                  \\"Name\\": \\"\\",\\n                  \\"SerializationLib\\": \\"\\"\\n                },\\n                \\"SkewedInfo\\": {\\n                  \\"SkewedColNames\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"SkewedColValueLocationMaps\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SkewedColValues\\": [\\n                    [\\n                      \\"\\"\\n                    ]\\n                  ]\\n                },\\n                \\"SortCols\\": [\\n                  {\\n                    \\"Col\\": \\"\\",\\n                    \\"Order\\": 0\\n                  }\\n                ],\\n                \\"StoredAsSubDirectories\\": true\\n              },\\n              \\"TableName\\": \\"\\",\\n              \\"TableType\\": \\"\\",\\n              \\"Temporary\\": true,\\n              \\"UpdateTime\\": 0,\\n              \\"ViewExpandedText\\": \\"\\",\\n              \\"ViewOriginalText\\": \\"\\",\\n              \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n              \\"TableVersion\\": {\\n                \\"VersionId\\": 0\\n              }\\n            },\\n            \\"VersionId\\": 0\\n          }\\n        },\\n        \\"VersionId\\": 0\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量获取元数据表详情',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据表不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'BatchCreateTables' => [
            'summary' => '批量新增数据湖的元数据表。',
            'path' => '/api/metastore/catalogs/databases/tables/batchcreate',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '	'."\n"
                                    .'数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'IfNotExists' => [
                                'title' => 'IfNotExists',
                                'description' => '如果相同名字的表已经存在，是否忽略异常',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'TableInputs' => [
                                'title' => 'TableInputs',
                                'description' => '元数据表列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '元数据表详细信息',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/TableInput',
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
                        'title' => '返回结构',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '响应代码',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '响应消息',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TableErrors' => [
                                'title' => '表出错信息',
                                'description' => '创建Table的错误信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '创建Table的错误信息',
                                    '$ref' => '#/components/schemas/TableError',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"TableName\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量新增元数据表',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'InvalidObject：name/partition/column/skewCol 校验不通过  '."\n"
                .'AlreadyExists：对应的元数据表已经存在    '."\n"
                .'NoSuchObject：对应的元数据库不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示'."\n",
        ],
        'BatchDeleteTables' => [
            'summary' => '根据名称批量删除数据湖的元数据表。',
            'path' => '/api/metastore/catalogs/databases/tables/batchdelete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'IfExists' => [
                                'title' => 'IfExists',
                                'description' => 'IfExists',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'TableNames' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '元数据表名称',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test_table_20201223',
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
                        'title' => 'Response Object',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TableErrors' => [
                                'title' => 'PartitionErrors',
                                'description' => '报错信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '报错信息',
                                    '$ref' => '#/components/schemas/TableError',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"TableName\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量删除元数据表',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据表不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'BatchDeleteTableVersions' => [
            'summary' => '批量删除数据湖元数据表指定版本。',
            'path' => '/api/metastore/catalogs/databases/tables/versions/batchdelete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20200715162543389',
                            ],
                            'VersionIds' => [
                                'title' => 'Table versionIds',
                                'description' => '版本号列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '版本号',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '1',
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
                        'title' => 'Response Object',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量删除元数据表版本',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据表不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'BatchUpdateTables' => [
            'summary' => '批量更新数据湖元数据表详细信息。',
            'path' => '/api/metastore/catalogs/databases/tables/batchupdate',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'TableInputs' => [
                                'title' => 'TableInputs',
                                'description' => '更新后元数据表详细信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '更新后元数据表详细信息',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/TableInput',
                                ],
                                'required' => false,
                            ],
                            'IsAsync' => [
                                'title' => '是否异步',
                                'description' => '表是否为异步更新：-true：是-false：否',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结构',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '响应代码',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '响应消息',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TableErrors' => [
                                'title' => '表出错信息',
                                'description' => '报错信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '报错信息',
                                    '$ref' => '#/components/schemas/TableError',
                                ],
                                'example' => '{"ErrorDetails":{},"TableName":"test"}',
                            ],
                            'TaskId' => [
                                'title' => '异步更新 taskId',
                                'description' => '异步更新 taskId',
                                'type' => 'string',
                                'example' => 'f8deec55f54ac566e7ec8944fbe01588',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"TableName\\": \\"\\"\\n    }\\n  ],\\n  \\"TaskId\\": \\"f8deec55f54ac566e7ec8944fbe01588\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量更新元数据表信息',
            'requestParamsDescription' => 'IsAsync：'."\n"
                ."\n"
                .'- true：表示异步调用，不等待后台任务返回，接口即返回结果，返回结果中带上taskid，这样客户端可以通过taskid查询任务的状态。'."\n"
                .'- false：表示同步调用，接口等待后台任务完成时，接口才返回结果。那么为false的风险就是如果后台任务需要做很长，接口会超时',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'InvalidOperation：输入的元数据表不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'CreatePartition' => [
            'summary' => '为数据湖的元数据表，新增一个分区。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'IfNotExists' => [
                                'title' => 'IfNotExists',
                                'description' => '如果相同名字的分区已经存在，是否忽略异常',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'NeedResult' => [
                                'title' => 'NeedResult',
                                'description' => '是否需要返回分区信息，为true时结果会返回Partitions',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'PartitionInput' => [
                                'description' => '分区输入信息',
                                'required' => false,
                                '$ref' => '#/components/schemas/PartitionInput',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20201223',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Partition' => [
                                'description' => '分区结果，NeedResult=true时返回',
                                '$ref' => '#/components/schemas/Partition',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Partition\\": {\\n    \\"CreateTime\\": 0,\\n    \\"DatabaseName\\": \\"\\",\\n    \\"LastAccessTime\\": 0,\\n    \\"LastAnalyzedTime\\": 0,\\n    \\"Parameters\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Privileges\\": {\\n      \\"GroupPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"RolePrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"UserPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"Sd\\": {\\n      \\"BucketCols\\": [\\n        \\"\\"\\n      ],\\n      \\"Cols\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Compressed\\": true,\\n      \\"InputFormat\\": \\"\\",\\n      \\"Location\\": \\"\\",\\n      \\"NumBuckets\\": 0,\\n      \\"OutputFormat\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"SerDeInfo\\": {\\n        \\"Name\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerializationLib\\": \\"\\"\\n      },\\n      \\"SkewedInfo\\": {\\n        \\"SkewedColNames\\": [\\n          \\"\\"\\n        ],\\n        \\"SkewedColValueLocationMaps\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SkewedColValues\\": [\\n          [\\n            \\"\\"\\n          ]\\n        ]\\n      },\\n      \\"SortCols\\": [\\n        {\\n          \\"Col\\": \\"\\",\\n          \\"Order\\": 0\\n        }\\n      ],\\n      \\"StoredAsSubDirectories\\": true\\n    },\\n    \\"TableName\\": \\"\\",\\n    \\"Values\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '新增元数据表的分区',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'InvalidObject：对应的元数据库/表找不到  '."\n"
                .'AlreadyExists：对应的分区已经存在    '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'DeletePartition' => [
            'summary' => '删除数据湖元数据表的指定分区。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/delete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'IfExists' => [
                                'title' => 'IfExists',
                                'description' => '如果相同名字的分区已经删除，是否忽略异常',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'PartitionValues' => [
                                'description' => '分区值',
                                'required' => false,
                                '$ref' => '#/components/schemas/ListString',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20201225',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除元数据表分区',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'InvalidOperation：对应的元数据表/分区等不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'DeletePartitionColumnStatistics' => [
            'summary' => '回收数据湖元数据表分区的字段统计信息。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '	'."\n"
                            .'数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_table_20201223',
                    ],
                ],
                [
                    'name' => 'PartitionNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '分区名称列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListString',
                    ],
                ],
                [
                    'name' => 'ColumnNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '字段名称列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListString',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除元数据表分区统计信息',
        ],
        'UpdatePartitionColumnStatistics' => [
            'summary' => '创建或者更新元数据表分区的字段统计信息。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UpdateTablePartitionColumnStatisticsRequest',
                    'in' => 'body',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '更新参数',
                        'required' => false,
                        '$ref' => '#/components/schemas/UpdateTablePartitionColumnStatisticsRequest',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'object',
                        'description' => '返回结构体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '更新元数据表分区统计信息',
        ],
        'GetPartition' => [
            'summary' => '获取数据湖元数据库分区详情。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/get',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body',
                        'description' => 'HTTP请求体',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '	'."\n"
                                    .'数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'PartitionValues' => [
                                'description' => '分区列表',
                                'required' => false,
                                '$ref' => '#/components/schemas/ListString',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20200715162543389',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Partition' => [
                                'description' => '分区详情',
                                '$ref' => '#/components/schemas/Partition',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Partition\\": {\\n    \\"CreateTime\\": 0,\\n    \\"DatabaseName\\": \\"\\",\\n    \\"LastAccessTime\\": 0,\\n    \\"LastAnalyzedTime\\": 0,\\n    \\"Parameters\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Privileges\\": {\\n      \\"GroupPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"RolePrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"UserPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"Sd\\": {\\n      \\"BucketCols\\": [\\n        \\"\\"\\n      ],\\n      \\"Cols\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Compressed\\": true,\\n      \\"InputFormat\\": \\"\\",\\n      \\"Location\\": \\"\\",\\n      \\"NumBuckets\\": 0,\\n      \\"OutputFormat\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"SerDeInfo\\": {\\n        \\"Name\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerializationLib\\": \\"\\"\\n      },\\n      \\"SkewedInfo\\": {\\n        \\"SkewedColNames\\": [\\n          \\"\\"\\n        ],\\n        \\"SkewedColValueLocationMaps\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SkewedColValues\\": [\\n          [\\n            \\"\\"\\n          ]\\n        ]\\n      },\\n      \\"SortCols\\": [\\n        {\\n          \\"Col\\": \\"\\",\\n          \\"Order\\": 0\\n        }\\n      ],\\n      \\"StoredAsSubDirectories\\": true\\n    },\\n    \\"TableName\\": \\"\\",\\n    \\"Values\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据库分区',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据库/表/分区等不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'GetPartitionColumnStatistics' => [
            'summary' => '获取数据湖元数据分区指定字段的统计信息。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TableName',
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_table_20201223',
                    ],
                ],
                [
                    'name' => 'PartitionNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '元数据表的分区列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListString',
                    ],
                ],
                [
                    'name' => 'ColumnNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '元数据表的字段列表',
                        'required' => false,
                        '$ref' => '#/components/schemas/ListString',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'PartitionStatisticsMap' => [
                                'title' => 'PartitionStatisticsMap',
                                'description' => '分区统计信息',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        '$ref' => '#/components/schemas/ColumnStatisticsObj',
                                        'description' => '分区统计信息',
                                    ],
                                    'description' => '分区统计信息',
                                ],
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"PartitionStatisticsMap\\": {\\n    \\"key\\": [\\n      {\\n        \\"ColumnName\\": \\"\\",\\n        \\"ColumnType\\": \\"\\",\\n        \\"ColumnStatisticsData\\": {\\n          \\"StatisticsData\\": \\"\\",\\n          \\"StatisticsType\\": \\"\\"\\n        }\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据分区字段的统计信息',
        ],
        'ListPartitionNames' => [
            'summary' => '获取数据湖元数据表分区名称列表，通常用于多级分区。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/names',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body',
                        'description' => 'HTTP请求体',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'PageSize' => [
                                'title' => 'PageSize',
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'PartialPartValues' => [
                                'description' => '分区值列表，可以只传入部分分区的值，会查询出所有下级分区的分区名',
                                'required' => false,
                                '$ref' => '#/components/schemas/ListString',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20200715162543389',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'code',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'PartitionNames' => [
                                'title' => 'PartitionNames',
                                'description' => '分区名称列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '分区名称',
                                    'type' => 'string',
                                    'example' => 'ds=20201124/hour=10',
                                ],
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'code',
                        'description' => 'code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"PartitionNames\\": [\\n    \\"ds=20201124/hour=10\\"\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据表分区名称列表',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'NoSuchObject：对应的元数据库/表等不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'ListPartitions' => [
            'summary' => '获取数据湖元数据库分区详情列表。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/list',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body',
                        'description' => '	'."\n"
                            .'HTTP请求体',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'PageSize' => [
                                'title' => 'PageSize',
                                'description' => '每页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'PartialPartValues' => [
                                'description' => '分区值列表，可以只传入部分分区的值，会查询出所有下级分区的分区名',
                                'required' => false,
                                '$ref' => '#/components/schemas/ListString',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20200715162543389',
                            ],
                            'IsShareSd' => [
                                'title' => 'IsShareSd',
                                'description' => '是否共享partition中的SD中的column信息',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'code',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'Partitions' => [
                                'title' => 'Partitions',
                                'description' => '分区详情',
                                'type' => 'array',
                                'items' => [
                                    'description' => '分区详情',
                                    '$ref' => '#/components/schemas/Partition',
                                ],
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PartitionSpecs' => [
                                'title' => 'PartitionSpecs',
                                'description' => 'PartitionSpecs',
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/PartitionSpec',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"Partitions\\": [\\n    {\\n      \\"CreateTime\\": 0,\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"Values\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"PartitionSpecs\\": [\\n    {\\n      \\"SharedSDPartitions\\": [\\n        {\\n          \\"CreateTime\\": 0,\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Privileges\\": {},\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"Values\\": [\\n            \\"\\"\\n          ]\\n        }\\n      ],\\n      \\"SharedStorageDescriptor\\": {\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Location\\": \\"相对路径\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据库分区列表',
            'requestParamsDescription' => 'IsShareSd'."\n"
                .'默认值false'."\n"
                .'- true：共享SD中的partition columns信息，这样相同的columns只会返回一份数据，就能降低网络传输，提高这个接口的性能'."\n"
                .'- false：不共享',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'NoSuchObject：对应的元数据库/表等不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'ListPartitionsByFilter' => [
            'summary' => '获取数据湖元数据表分区列表，按Filter条件查询。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/listbyfilter',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body',
                        'description' => 'HTTP请求体',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'Filter' => [
                                'title' => 'Filter',
                                'description' => '查询条件表达式，如ds>20201201',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ds>20201201',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                                'type' => 'string',
                                'required' => false,
                                'example' => '\'\'',
                            ],
                            'PageSize' => [
                                'title' => 'PageSize',
                                'description' => '每页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20200715162543389',
                            ],
                            'IsShareSd' => [
                                'title' => 'IsShareSd',
                                'description' => '是否共享partition的SD中column信息',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'code',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'Partitions' => [
                                'title' => 'Partitions',
                                'description' => '查询后的分区详情',
                                'type' => 'array',
                                'items' => [
                                    'description' => '查询后的分区详情',
                                    '$ref' => '#/components/schemas/Partition',
                                ],
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PartitionSpecs' => [
                                'title' => 'PartitionSpecs',
                                'description' => 'PartitionSpecs',
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/PartitionSpec',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"Partitions\\": [\\n    {\\n      \\"CreateTime\\": 0,\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"Values\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"PartitionSpecs\\": [\\n    {\\n      \\"SharedSDPartitions\\": [\\n        {\\n          \\"CreateTime\\": 0,\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Privileges\\": {},\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"Values\\": [\\n            \\"\\"\\n          ]\\n        }\\n      ],\\n      \\"SharedStorageDescriptor\\": {\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Location\\": \\"相对路径\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '按条件获取元数据表分区列表',
            'requestParamsDescription' => 'isShareSd：是否开启共享SD中的columns信息，listpartitions返回的partitions列表中，不同的partition中sd中的column相同的可能性比较高，因此开启共享，可以降低网络传输的数据量，有助于提升性能',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'NoSuchObject：对应的元数据库/表等不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'BatchCreatePartitions' => [
            'summary' => '为数据湖的元数据表，批量新增多个分区。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/batchcreate',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'IfNotExists' => [
                                'title' => 'IfNotExists',
                                'description' => '如果相同名字的分区已经存在，是否忽略异常',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'NeedResult' => [
                                'title' => 'NeedResult',
                                'description' => '是否需要返回分区信息，为true时结果会返回Partitions',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'PartitionInputs' => [
                                'title' => 'PartitionInputs',
                                'description' => '分区输入信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '分区输入信息',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/PartitionInput',
                                ],
                                'required' => false,
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20201223',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结构',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '响应代码',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '响应消息',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'PartitionErrors' => [
                                'title' => '分区出错信息',
                                'description' => '错误信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误信息',
                                    '$ref' => '#/components/schemas/PartitionError',
                                ],
                            ],
                            'Partitions' => [
                                'title' => 'Partitions',
                                'description' => '分区结果，NeedResult=true时返回',
                                'type' => 'array',
                                'items' => [
                                    'description' => '分区结果',
                                    '$ref' => '#/components/schemas/Partition',
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"PartitionErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"PartitionValues\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"Partitions\\": [\\n    {\\n      \\"CreateTime\\": 0,\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"Values\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量新增元数据表的分区',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'InvalidObject：找不到对应的Table或Database  '."\n"
                .'AlreadyExists：对应的分区已经存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示'."\n",
        ],
        'BatchDeletePartitions' => [
            'summary' => '批量删除数据湖元数据表的指定分区。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/batchdelete',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '	'."\n"
                                    .'数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'IfExists' => [
                                'title' => 'IfExists',
                                'description' => '如果相同名字的分区已经删除，是否忽略异常',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'PartitionValueList' => [
                                'description' => '待删除的分区值列表',
                                'required' => false,
                                '$ref' => '#/components/schemas/PartitionValueList',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20201225',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'PartitionErrors' => [
                                'title' => 'PartitionErrors',
                                'description' => '错误信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误信息',
                                    '$ref' => '#/components/schemas/PartitionError',
                                ],
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"PartitionErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"PartitionValues\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量删除元数据表分区',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'UnknownTable：输入的元数据表不存在  '."\n"
                .'UnknownPartition：输入的分区不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'BatchGetPartitionColumnStatistics' => [
            'summary' => '批量获取数据湖元数据表分区的字段统计信息。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics/batchget',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20201223',
                            ],
                            'PartitionNames' => [
                                'description' => '元数据表的分区名称列表',
                                'required' => false,
                                '$ref' => '#/components/schemas/ListString',
                            ],
                            'ColumnNames' => [
                                'description' => '元数据表的字段列表',
                                'required' => false,
                                '$ref' => '#/components/schemas/ListString',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'PartitionStatisticsMap' => [
                                'title' => 'PartitionStatisticsMap',
                                'description' => '分区统计信息',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        '$ref' => '#/components/schemas/ColumnStatisticsObj',
                                        'description' => '分区统计信息',
                                    ],
                                    'description' => '分区统计信息',
                                ],
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"PartitionStatisticsMap\\": {\\n    \\"key\\": [\\n      {\\n        \\"ColumnName\\": \\"\\",\\n        \\"ColumnType\\": \\"\\",\\n        \\"ColumnStatisticsData\\": {\\n          \\"StatisticsData\\": \\"\\",\\n          \\"StatisticsType\\": \\"\\"\\n        }\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量获取元数据分区统计信息',
        ],
        'BatchGetPartitions' => [
            'summary' => '批量获取数据湖元数据库分区详情。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/batchget',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'PartitionValueList' => [
                                'description' => '分区值列表',
                                'required' => false,
                                '$ref' => '#/components/schemas/PartitionValueList',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20200715162543389',
                            ],
                            'IsShareSd' => [
                                'title' => 'IsShareSd',
                                'description' => '是否共享partition的SD中column信息',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'PartitionErrors' => [
                                'title' => 'PartitionErrors',
                                'description' => '错误信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误信息',
                                    '$ref' => '#/components/schemas/PartitionError',
                                ],
                            ],
                            'Partitions' => [
                                'title' => 'Partitions',
                                'description' => '分区详情',
                                'type' => 'array',
                                'items' => [
                                    'description' => '分区详情',
                                    '$ref' => '#/components/schemas/Partition',
                                ],
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PartitionSpecs' => [
                                'title' => 'PartitionSpecs',
                                'description' => '分区规格列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '分区规格。',
                                    '$ref' => '#/components/schemas/PartitionSpec',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"PartitionErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"PartitionValues\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"Partitions\\": [\\n    {\\n      \\"CreateTime\\": 0,\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"Values\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"PartitionSpecs\\": [\\n    {\\n      \\"SharedSDPartitions\\": [\\n        {\\n          \\"CreateTime\\": 0,\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Privileges\\": {},\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"Values\\": [\\n            \\"\\"\\n          ]\\n        }\\n      ],\\n      \\"SharedStorageDescriptor\\": {\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Location\\": \\"相对路径\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量获取元数据库分区',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据库/元数据表不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'BatchUpdatePartitions' => [
            'summary' => '为数据湖的元数据表，批量更新多个分区。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/batchupdate',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '	'."\n"
                                    .'数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'PartitionInputs' => [
                                'title' => 'PartitionInputs',
                                'description' => '分区输入信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '更新的分区输入信息',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/PartitionInput',
                                ],
                                'required' => false,
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20201223',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'object',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'PartitionErrors' => [
                                'title' => 'PartitionErrors',
                                'description' => '错误信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误信息',
                                    '$ref' => '#/components/schemas/PartitionError',
                                ],
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"PartitionErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"PartitionValues\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量更新元数据表的分区',
        ],
        'RenamePartition' => [
            'summary' => '更新数据湖元数据表的分区名称。',
            'path' => '/api/metastore/catalogs/databases/tables/partitions/rename',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'Body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'PartitionInput' => [
                                'description' => '更新后的分区信息，和CreatePartition相同',
                                'required' => false,
                                '$ref' => '#/components/schemas/PartitionInput',
                            ],
                            'PartitionValues' => [
                                'description' => '分区值',
                                'required' => false,
                                '$ref' => '#/components/schemas/ListString',
                            ],
                            'TableName' => [
                                'title' => 'TableName',
                                'description' => '元数据表名',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_table_20200715162543389',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '更新元数据表分区名',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'InvalidOperation：找不到对应的元数据库/表，或者新的分区名已经存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'CreateFunction' => [
            'summary' => '新增数据湖元数据库的用户自定义函数。',
            'path' => '/api/metastore/catalogs/databases/functions',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'title' => 'DatabaseName',
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'FunctionInput' => [
                                'description' => '函数定义详情',
                                'required' => false,
                                '$ref' => '#/components/schemas/FunctionInput',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '新增元数据库的函数',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'AlreadyExists：相同的函数已经存在    '."\n"
                .'NoSuchObject：对应的元数据库/表等不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'DeleteFunction' => [
            'summary' => '根据名称删除数据湖元数据库的用户自定义函数。',
            'path' => '/api/metastore/catalogs/databases/functions',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'FunctionName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'FunctionName',
                        'description' => '函数名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'func2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除元数据库的函数',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'NoSuchObject：对应的元数据库/表或者函数不存在  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'UpdateFunction' => [
            'summary' => '根据名称，更新数据湖元数据库的用户自定义函数信息。',
            'path' => '/api/metastore/catalogs/databases/functions',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body',
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'description' => '数据库分类命名空间，默认填写主账号Uid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                            'DatabaseName' => [
                                'description' => '元数据库名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'database_test',
                            ],
                            'FunctionInput' => [
                                'description' => '待更新的函数详情',
                                'required' => false,
                                '$ref' => '#/components/schemas/FunctionInput',
                            ],
                            'FunctionName' => [
                                'description' => '函数名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'func2',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Respones',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '更新元数据库的函数',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'InvalidObject：对应的元数据库/表/函数等不存在，或者函数参数为空  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'ListFunctionNames' => [
            'summary' => '分页查询，获取元数据库的函数名称列表。',
            'path' => '/api/metastore/catalogs/databases/functions/names',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'FunctionNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'FunctionNamePattern',
                        'description' => '函数名匹配的正则表达式',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*',
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'NextPageToken',
                        'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                        'type' => 'string',
                        'required' => false,
                        'example' => '\'\'',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageSize',
                        'description' => '每页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000000',
                        'minimum' => '-1',
                        'example' => '10',
                        'default' => '1000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'FunctionNames' => [
                                'title' => 'FunctionNames',
                                'description' => '函数名称列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '函数名称',
                                    'type' => 'string',
                                    'example' => 'func2',
                                ],
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"FunctionNames\\": [\\n    \\"func2\\"\\n  ],\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据库的函数名称列表',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'ListFunctions' => [
            'summary' => '批量获取数据湖元数据库的用户自定义函数列表。',
            'path' => '/api/metastore/catalogs/databases/functions/list',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'FunctionNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'FunctionNamePattern',
                        'description' => '用户定义函数名的正则匹配表达式',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*',
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'NextPageToken',
                        'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageSize',
                        'description' => '每页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000000',
                        'minimum' => '-1',
                        'example' => '10',
                        'default' => '1000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Functions' => [
                                'title' => 'Functions',
                                'description' => '函数详情列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '函数描述详情',
                                    '$ref' => '#/components/schemas/Function',
                                ],
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => '翻页token',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Functions\\": [\\n    {\\n      \\"CatalogId\\": \\"\\",\\n      \\"ClassName\\": \\"\\",\\n      \\"CreateTime\\": 0,\\n      \\"DatabaseName\\": \\"\\",\\n      \\"FunctionName\\": \\"\\",\\n      \\"FunctionType\\": \\"\\",\\n      \\"OwnerName\\": \\"\\",\\n      \\"OwnerType\\": \\"\\",\\n      \\"ResourceUri\\": [\\n        {\\n          \\"ResourceType\\": \\"\\",\\n          \\"Uri\\": \\"\\"\\n        }\\n      ],\\n      \\"UpdateTime\\": 0,\\n      \\"CreatedBy\\": \\"CreatedBy\\"\\n    }\\n  ],\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据库的函数列表',
            'responseParamsDescription' => 'Code错误码说明   '."\n"
                .'InternalError：其他类型错误，请参考Message提示',
        ],
        'GetFunction' => [
            'summary' => '根据函数名称，获取数据湖元数据库的用户自定义函数。',
            'path' => '/api/metastore/catalogs/databases/functions',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '	'."\n"
                            .'数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'database_test',
                    ],
                ],
                [
                    'name' => 'FunctionName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'FunctionName',
                        'description' => '用户定义函数名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'func2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Function' => [
                                'description' => '函数描述详情',
                                '$ref' => '#/components/schemas/Function',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Function\\": {\\n    \\"CatalogId\\": \\"\\",\\n    \\"ClassName\\": \\"\\",\\n    \\"CreateTime\\": 0,\\n    \\"DatabaseName\\": \\"\\",\\n    \\"FunctionName\\": \\"\\",\\n    \\"FunctionType\\": \\"\\",\\n    \\"OwnerName\\": \\"\\",\\n    \\"OwnerType\\": \\"\\",\\n    \\"ResourceUri\\": [\\n      {\\n        \\"ResourceType\\": \\"\\",\\n        \\"Uri\\": \\"\\"\\n      }\\n    ],\\n    \\"UpdateTime\\": 0,\\n    \\"CreatedBy\\": \\"CreatedBy\\"\\n  },\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取元数据库的指定函数',
            'responseParamsDescription' => 'Code错误码说明  '."\n"
                .'InternalError：请参考Message提示',
        ],
        'CreateLock' => [
            'summary' => '创建一个指定的元数据锁。',
            'path' => '/api/metastore/catalogs/databases/tables/locks',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body',
                        'description' => 'body',
                        'type' => 'object',
                        'properties' => [
                            'LockObjList' => [
                                'title' => 'LockObjList',
                                'description' => 'LockObjList',
                                'type' => 'array',
                                'items' => [
                                    'required' => false,
                                    '$ref' => '#/components/schemas/LockObj',
                                ],
                                'required' => false,
                                'example' => '{"databaseName":"db","tableName":"test"}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'lock response',
                        'description' => 'lock response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '73201200-4C1A-4FEF-BD6B-C0DA7994FFA2',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'LockStatus' => [
                                'description' => '状态描述',
                                'example' => '{"lockId":12323,"lockStatus":"ACQUIRED"}',
                                '$ref' => '#/components/schemas/LockStatus',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"73201200-4C1A-4FEF-BD6B-C0DA7994FFA2\\",\\n  \\"Success\\": true,\\n  \\"LockStatus\\": {\\n    \\"LockId\\": 0,\\n    \\"LockState\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建元数据锁',
            'requestParamsDescription' => '1. 当前LockObjList只支持size为1，也就是只能获取一个对象锁'."\n"
                .'2. 当前LockObj中只支持table锁，目前不支持partition级别的锁',
            'responseParamsDescription' => '- code：错误码'."\n"
                .'- message：错误信息'."\n"
                .'- requestId：标记当前请求唯一id'."\n"
                .'- Success：true/false，判定请求是否成功'."\n"
                .'- LockStatus：如果success，该字段有值，否则为空。LockStatus中有两个字段：lockId、Lockstate，如果lockstate为Acquired，那么lockid有值，否则为空',
            'extraInfo' => '****获取到lockid之后，如何在createtable、update table使用该lock？**'."\n"
                ."\n"
                .'下面以CreateTable接口为例，需要在header中把lock获取的lockid传递进去，这样才能使用lock。'."\n"
                ."\n"
                .'> 另外需要注意，lock有事务语义，只有传入lock，按照事务隔离性才能获取当前事务的状态，否则看到到是事务提交前的状态。'."\n"
                ."\n"
                .'> 比如一个请求对表已经加了lock，同时delete了改表，但是如果事务没有提交（也就是没有unlock），这个时候又来了一个请求，要去createtable，如果没有带上lock，那么发现表示存在的，因为看到的是事务提交之前的状态，所以创建失败。如果createtable，带上这个lock，那么就进入事务中，就可以看到这个表已经delete了，那么createtable就能创建成功。'."\n"
                ."\n\n"
                .'```'."\n"
                .'CreateTableRequest request = new CreateTableRequest();'."\n"
                .'request.catalogId = catalogId;'."\n"
                .'request.databaseName = databaseName;'."\n"
                .'request.tableInput = table;'."\n"
                ."\n"
                .'RuntimeOptions runtime = new RuntimeOptions();'."\n"
                .'Map<String, String> headers = new HashMap();'."\n"
                ."\n"
                .'//需要在建表或者update的表中的header中设置lockid'."\n"
                .'headers.put("metastore-lock-id", String.valueOf(lockId));'."\n"
                ."\n"
                .'CreateTableResponseBody response = client.createTableWithOptions(request, headers, runtime).body;'."\n"
                .'return new ResultModel<>(response.success, response.code, response.message,'."\n"
                .'        response.requestId);'."\n"
                .'```'."\n",
        ],
        'GetLock' => [
            'summary' => '查询指定的元数据锁。',
            'path' => '/api/metastore/catalogs/databases/tables/locks',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'LockId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'LockId',
                        'description' => 'LockId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '16533',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Lock response',
                        'description' => 'Lock response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '558D764F-8C55-49CA-BF38-80EA532FC08F',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'LockStatus' => [
                                'description' => '锁定状态',
                                'example' => '{"lockId":123,"lockStatus":"Acquired"}',
                                '$ref' => '#/components/schemas/LockStatus',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"558D764F-8C55-49CA-BF38-80EA532FC08F\\",\\n  \\"Success\\": true,\\n  \\"LockStatus\\": {\\n    \\"LockId\\": 0,\\n    \\"LockState\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询元数据锁',
            'requestParamsDescription' => 'lockid，即从createlock返回的lockid',
            'responseParamsDescription' => "\n"
                ."\n"
                .'- code：错误码'."\n"
                .'- message：错误信息'."\n"
                .'- requestId：标记当前请求唯一id'."\n"
                .'- Success：true/false，判定请求是否成功'."\n"
                .'- LockStatus：如果success，该字段有值，否则为空',
        ],
        'AbortLock' => [
            'summary' => '中止指定的元数据锁。',
            'path' => '/api/metastore/catalogs/databases/tables/locks/abort',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'LockId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'LockId',
                        'description' => 'LockId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '16530',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'transaction response',
                        'description' => 'transaction response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '01D8DD6B-4929-5999-9BB3-950AA30E3BD0',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"01D8DD6B-4929-5999-9BB3-950AA30E3BD0\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '中止元数据锁',
            'requestParamsDescription' => 'lockid，从createlock请求中获取的lockid',
            'responseParamsDescription' => '- code：错误码'."\n"
                .'- message：错误信息'."\n"
                .'- requestId：标记当前请求唯一id'."\n"
                .'- Success：true/false，判定请求是否成功',
        ],
        'RefreshLock' => [
            'summary' => '刷新指定的元数据锁。',
            'path' => '/api/metastore/catalogs/databases/tables/locks',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'LockId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'LockId',
                        'description' => 'LockId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12324',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Lock response',
                        'description' => 'Lock response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '81B90E1B-7514-5817-9D59-0EA9E2215876',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"81B90E1B-7514-5817-9D59-0EA9E2215876\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '刷新元数据锁',
            'requestParamsDescription' => 'lockid，即从createlock返回的lockid',
            'responseParamsDescription' => '- code：错误码'."\n"
                .'- message：错误信息'."\n"
                .'- requestId：标记当前请求唯一id'."\n"
                .'- Success：true/false，判定请求是否成功',
        ],
        'UnLock' => [
            'summary' => '解开指定的元数据锁。',
            'path' => '/api/metastore/catalogs/databases/tables/locks',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'LockId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'LockId',
                        'description' => 'LockId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '11709',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'transaction response',
                        'description' => 'transaction response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '37C8470A-5E6D-5E4E-AEF0-EA3EBE9C89EE',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"37C8470A-5E6D-5E4E-AEF0-EA3EBE9C89EE\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '解锁指定的元数据锁',
            'requestParamsDescription' => 'LockId，即从CreateLock中获取的lockId',
            'responseParamsDescription' => '- code：错误码'."\n"
                .'- message：错误信息'."\n"
                .'- requestId：标记当前请求唯一id'."\n"
                .'- Success：true/false，判定请求是否成功'."\n",
        ],
        'StopMigrationWorkflow' => [
            'summary' => '停止元数据迁移任务。',
            'path' => '/webapi/migration/workflow/stop',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移任务实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'M-6DCF5D8EF92E2195',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\"\\n}","type":"json"}]',
            'title' => '停止迁移工作流',
        ],
        'RunMigrationWorkflow' => [
            'summary' => '运行元数据迁移任务',
            'path' => '/webapi/migration/workflow/run',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '迁移实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'M-EDD8BF959BB97345',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回数据，值为工作流实例ID',
                                'type' => 'string',
                                'example' => 'FI-7193B85809CAD95C',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A048EA8E-3519-5B18-B81E-EE3E0B6DBE0C',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"FI-7193B85809CAD95C\\",\\n  \\"RequestId\\": \\"A048EA8E-3519-5B18-B81E-EE3E0B6DBE0C\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '执行迁移工作流',
        ],
        'GetAsyncTaskStatus' => [
            'summary' => '用于元数据相关异步API中，检查异步执行任务的状态。',
            'path' => '/api/metastore/catalogs/tasks',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据库分类命名空间，默认填写主账号Uid',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TaskId',
                        'description' => '异步任务返回的结果中获取',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'f546c761570e5efc8146a1986f7890d2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TaskStatus' => [
                                'description' => '任务状态',
                                'example' => 'Success',
                                '$ref' => '#/components/schemas/TaskStatus',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'title' => 'Code',
                        'description' => 'Code',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TaskStatus\\": {\\n    \\"Status\\": \\"\\",\\n    \\"Message\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取异步任务状态',
        ],
        'Search' => [
            'summary' => '元数据检索。',
            'path' => '/api/metastore/catalogs/search',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => 'A short description of struct',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'catalogid',
                                'description' => 'catalogid',
                                'type' => 'string',
                                'required' => false,
                                'example' => '默认是空，在多catalogid下填写对应的id',
                            ],
                            'SearchText' => [
                                'title' => '搜索问题',
                                'description' => '搜索问题',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'tags:tag1 or comment:^iso and name=aliyun and (createTime > "20211111" and createTime < "20211117") and has category',
                            ],
                            'SortCriteria' => [
                                'title' => '排序结构',
                                'description' => '排序结构',
                                'type' => 'array',
                                'items' => [
                                    'description' => '排序结构',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/SortCriterion',
                                ],
                                'required' => false,
                            ],
                            'PageSize' => [
                                'title' => '当前查询的页大小',
                                'description' => '当前查询的页大小',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1000',
                            ],
                            'PageNumber' => [
                                'title' => '当前查询的页号',
                                'description' => '当前查询的页号',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1',
                            ],
                            'SearchType' => [
                                'description' => '搜索类型',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'TABLE/DATABASE/CATALOG',
                                'enum' => [
                                    'table',
                                    'all',
                                    'database',
                                ],
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
                            'Code' => [
                                'title' => '响应代码',
                                'description' => '响应代码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '响应消息',
                                'description' => '响应消息',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '460C862F-BB91-5C04-BC3F-946EEF467862',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'DatabaseResult' => [
                                'title' => '返回的db结果',
                                'description' => '返回的db结果',
                                'type' => 'object',
                                'properties' => [
                                    'Databases' => [
                                        'title' => '返回的DatabaseList',
                                        'description' => '返回的DatabaseList',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据库信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Database' => [
                                                    'title' => '返回的Database',
                                                    'description' => '返回的Database',
                                                    '$ref' => '#/components/schemas/Database',
                                                ],
                                                'HighLightList' => [
                                                    'title' => '返回高亮文本',
                                                    'description' => '返回高亮文本',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '返回高亮文本',
                                                        '$ref' => '#/components/schemas/HighLight',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'title' => '满足匹配条件的总的Database个数',
                                        'description' => '满足匹配条件的总的Database个数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '11000',
                                    ],
                                ],
                            ],
                            'TableResult' => [
                                'title' => '返回的table result',
                                'description' => '返回的table result',
                                'type' => 'object',
                                'properties' => [
                                    'Tables' => [
                                        'title' => '返回的TableList',
                                        'description' => '返回的TableList',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '元数据表',
                                            'type' => 'object',
                                            'properties' => [
                                                'Table' => [
                                                    'title' => '返回的Table',
                                                    'description' => '返回的Table',
                                                    '$ref' => '#/components/schemas/Table',
                                                ],
                                                'HighLightList' => [
                                                    'title' => '返回的高亮文本',
                                                    'description' => '返回的高亮文本',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '返回的高亮文本',
                                                        '$ref' => '#/components/schemas/HighLight',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'title' => '满足匹配条件的总的Table个数',
                                        'description' => '满足匹配条件的总的Table个数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1100',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"460C862F-BB91-5C04-BC3F-946EEF467862\\",\\n  \\"Success\\": true,\\n  \\"DatabaseResult\\": {\\n    \\"Databases\\": [\\n      {\\n        \\"Database\\": {\\n          \\"CreateTime\\": 0,\\n          \\"Description\\": \\"\\",\\n          \\"LocationUri\\": \\"oss://examplebuket/exampledb\\",\\n          \\"Name\\": \\"\\",\\n          \\"OwnerName\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Privileges\\": {\\n            \\"GroupPrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            },\\n            \\"RolePrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            },\\n            \\"UserPrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"UpdateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\"\\n        },\\n        \\"HighLightList\\": [\\n          {\\n            \\"Key\\": \\"name\\",\\n            \\"Value\\": \\"<em>tab</em>2\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TotalCount\\": 11000\\n  },\\n  \\"TableResult\\": {\\n    \\"Tables\\": [\\n      {\\n        \\"Table\\": {\\n          \\"Cascade\\": true,\\n          \\"CreateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\",\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Owner\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"PartitionKeys\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Parameters\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Privileges\\": {},\\n          \\"Retention\\": 0,\\n          \\"RewriteEnabled\\": true,\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"TableType\\": \\"\\",\\n          \\"Temporary\\": true,\\n          \\"UpdateTime\\": 0,\\n          \\"ViewExpandedText\\": \\"\\",\\n          \\"ViewOriginalText\\": \\"\\",\\n          \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n          \\"TableVersion\\": {\\n            \\"Table\\": {\\n              \\"Cascade\\": true,\\n              \\"CreateTime\\": 0,\\n              \\"CreatedBy\\": \\"\\",\\n              \\"DatabaseName\\": \\"\\",\\n              \\"LastAccessTime\\": 0,\\n              \\"LastAnalyzedTime\\": 0,\\n              \\"Owner\\": \\"\\",\\n              \\"OwnerType\\": \\"\\",\\n              \\"PartitionKeys\\": [\\n                {\\n                  \\"Comment\\": \\"\\",\\n                  \\"Name\\": \\"\\",\\n                  \\"Type\\": \\"\\"\\n                }\\n              ],\\n              \\"Privileges\\": {},\\n              \\"Retention\\": 0,\\n              \\"RewriteEnabled\\": true,\\n              \\"Sd\\": {\\n                \\"BucketCols\\": [\\n                  \\"\\"\\n                ],\\n                \\"Cols\\": [],\\n                \\"Compressed\\": true,\\n                \\"InputFormat\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"NumBuckets\\": 0,\\n                \\"OutputFormat\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SerDeInfo\\": {\\n                  \\"Name\\": \\"\\",\\n                  \\"SerializationLib\\": \\"\\"\\n                },\\n                \\"SkewedInfo\\": {\\n                  \\"SkewedColNames\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"SkewedColValueLocationMaps\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SkewedColValues\\": [\\n                    [\\n                      \\"\\"\\n                    ]\\n                  ]\\n                },\\n                \\"SortCols\\": [\\n                  {\\n                    \\"Col\\": \\"\\",\\n                    \\"Order\\": 0\\n                  }\\n                ],\\n                \\"StoredAsSubDirectories\\": true\\n              },\\n              \\"TableName\\": \\"\\",\\n              \\"TableType\\": \\"\\",\\n              \\"Temporary\\": true,\\n              \\"UpdateTime\\": 0,\\n              \\"ViewExpandedText\\": \\"\\",\\n              \\"ViewOriginalText\\": \\"\\",\\n              \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n              \\"TableVersion\\": {\\n                \\"Table\\": {\\n                  \\"Cascade\\": true,\\n                  \\"CreateTime\\": 0,\\n                  \\"CreatedBy\\": \\"\\",\\n                  \\"DatabaseName\\": \\"\\",\\n                  \\"LastAccessTime\\": 0,\\n                  \\"LastAnalyzedTime\\": 0,\\n                  \\"Owner\\": \\"\\",\\n                  \\"OwnerType\\": \\"\\",\\n                  \\"PartitionKeys\\": [],\\n                  \\"Retention\\": 0,\\n                  \\"RewriteEnabled\\": true,\\n                  \\"Sd\\": {\\n                    \\"BucketCols\\": [\\n                      \\"\\"\\n                    ],\\n                    \\"Cols\\": [],\\n                    \\"Compressed\\": true,\\n                    \\"InputFormat\\": \\"\\",\\n                    \\"Location\\": \\"\\",\\n                    \\"NumBuckets\\": 0,\\n                    \\"OutputFormat\\": \\"\\",\\n                    \\"Parameters\\": {\\n                      \\"key\\": \\"\\"\\n                    },\\n                    \\"SerDeInfo\\": {\\n                      \\"Name\\": \\"\\",\\n                      \\"SerializationLib\\": \\"\\"\\n                    },\\n                    \\"SkewedInfo\\": {\\n                      \\"SkewedColNames\\": [\\n                        \\"\\"\\n                      ],\\n                      \\"SkewedColValueLocationMaps\\": {\\n                        \\"key\\": \\"\\"\\n                      },\\n                      \\"SkewedColValues\\": [\\n                        [\\n                          \\"\\"\\n                        ]\\n                      ]\\n                    },\\n                    \\"SortCols\\": [\\n                      {\\n                        \\"Col\\": \\"\\",\\n                        \\"Order\\": 0\\n                      }\\n                    ],\\n                    \\"StoredAsSubDirectories\\": true\\n                  },\\n                  \\"TableName\\": \\"\\",\\n                  \\"TableType\\": \\"\\",\\n                  \\"Temporary\\": true,\\n                  \\"UpdateTime\\": 0,\\n                  \\"ViewExpandedText\\": \\"\\",\\n                  \\"ViewOriginalText\\": \\"\\",\\n                  \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n                  \\"TableVersion\\": {\\n                    \\"VersionId\\": 0\\n                  }\\n                },\\n                \\"VersionId\\": 0\\n              }\\n            },\\n            \\"VersionId\\": 0\\n          }\\n        },\\n        \\"HighLightList\\": [\\n          {\\n            \\"Key\\": \\"name\\",\\n            \\"Value\\": \\"<em>tab</em>2\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TotalCount\\": 1100\\n  }\\n}","type":"json"}]',
            'title' => '搜索元数据',
            'description' => '元数据检索',
        ],
        'CreateRole' => [
            'summary' => '在数据湖权限中新增一个角色。',
            'path' => '/api/metastore/auth/roles',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'user_permission',
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
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'required' => false,
                        '$ref' => '#/components/schemas/RoleInput',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '77BC2016-BA80-570F-BD15-2FB80281FED6',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'message',
                                'description' => 'message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"77BC2016-BA80-570F-BD15-2FB80281FED6\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '创建数据湖权限的角色',
        ],
        'GrantRoleToUsers' => [
            'summary' => '将数据湖角色授予多个用户。',
            'path' => '/api/metastore/auth/roles/grantusers',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
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
                        'title' => 'A short description of struct',
                        'description' => 'A short description of struct',
                        'type' => 'object',
                        'properties' => [
                            'RoleName' => [
                                'title' => 'RoleName',
                                'description' => 'RoleName',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_role_8',
                            ],
                            'Users' => [
                                'description' => 'ram user/ram role principal 列表，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                                'required' => false,
                                '$ref' => '#/components/schemas/Principals',
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
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '4316D7DA-9816-596D-A3D7-12676FA59BDA',
                            ],
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4316D7DA-9816-596D-A3D7-12676FA59BDA\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '将数据湖角色授予用户',
        ],
        'GrantRolesToUser' => [
            'summary' => '将多个角色授予给单个用户。',
            'path' => '/api/metastore/auth/roles/grantroles',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'user_permission',
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
            'operationType' => 'readAndWrite',
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
                            'RoleNames' => [
                                'title' => '待授权的角色名列表',
                                'description' => '待授权的角色名列表',
                                'required' => true,
                                '$ref' => '#/components/schemas/ListString',
                            ],
                            'User' => [
                                'description' => 'ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                                'required' => true,
                                '$ref' => '#/components/schemas/Principal',
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
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '81B90E1B-7514-5817-9D59-0EA9E2215876',
                            ],
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81B90E1B-7514-5817-9D59-0EA9E2215876\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '将多个角色授予给单个用户',
        ],
        'GrantPermissions' => [
            'summary' => '对User/数据湖角色授予资源的操作权限。',
            'path' => '/api/metastore/auth/permissions/grant',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'user_permission',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => '授权的类型，目前仅支持hive',
                                'description' => '授权的类型，目前仅支持Hive',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Hive',
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'MetaResource' => [
                                'title' => '授权meta资源',
                                'description' => '授权meta资源',
                                'required' => true,
                                '$ref' => '#/components/schemas/MetaResource',
                            ],
                            'Accesses' => [
                                'title' => '授权的accesses列表',
                                'description' => '授权的accesses列表',
                                'required' => true,
                                '$ref' => '#/components/schemas/Accesses',
                            ],
                            'DelegateAccesses' => [
                                'title' => '授权的grantable accesses列表',
                                'description' => '授权的grantable accesses列表',
                                'required' => true,
                                '$ref' => '#/components/schemas/Accesses',
                            ],
                            'Principal' => [
                                'title' => '授权的用户/角色principal',
                                'description' => '授权的用户/角色principal, ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName，数据湖角色的principal为acs:dlf::[accountId]:role/roleName',
                                'required' => true,
                                '$ref' => '#/components/schemas/Principal',
                            ],
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => 'CatalogId',
                                'type' => 'string',
                                'required' => false,
                                'example' => '主账号ID或空字符串',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message Code',
                                'description' => 'Message Code',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '4912024D-2A06-5E9F-9667-35D9319917D7',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"4912024D-2A06-5E9F-9667-35D9319917D7\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '对User/数据湖角色授予权限',
        ],
        'BatchGrantPermissions' => [
            'summary' => '批量对User/数据湖角色授予资源的操作权限。',
            'path' => '/api/metastore/auth/permissions/batchgrant',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => '授权的类型，目前仅支持hive',
                                'description' => '授权的类型，目前仅支持Hive',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Hive',
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'GrantRevokeEntries' => [
                                'title' => '待授权列表',
                                'description' => '待授权列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '授权条目详情',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/GrantRevokeEntry',
                                ],
                                'required' => false,
                            ],
                            'CatalogId' => [
                                'title' => 'catalogId',
                                'description' => 'catalogId',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message Code',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'BatchGrantRevokeFailureResult' => [
                                'title' => 'result',
                                'description' => 'result',
                                'example' => '参考BatchGrantRevokeFailureResult结构',
                                '$ref' => '#/components/schemas/BatchGrantRevokeFailureResult',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"BatchGrantRevokeFailureResult\\": [\\n    {\\n      \\"GrantRevokeEntry\\": {\\n        \\"MetaResource\\": {\\n          \\"ResourceType\\": \\"TABLE\\",\\n          \\"CatalogResource\\": {\\n            \\"CatalogId\\": \\"\\"\\n          },\\n          \\"DatabaseResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"DatabaseWildcard\\": \\"\\"\\n          },\\n          \\"TableResource\\": {\\n            \\"DatabaseName\\": \\"\\",\\n            \\"TableName\\": \\"\\"\\n          },\\n          \\"FunctionResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"FunctionName\\": \\"default\\"\\n          },\\n          \\"ColumnResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"TableName\\": \\"test\\",\\n            \\"ColumnNames\\": [\\n              \\"name\\"\\n            ]\\n          }\\n        },\\n        \\"Accesses\\": [\\n          \\"ALTER/SELECT/CREATE, etc.\\"\\n        ],\\n        \\"DelegateAccesses\\": [\\n          \\"ALTER/SELECT/CREATE, etc.\\"\\n        ],\\n        \\"Principal\\": {\\n          \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n        },\\n        \\"Id\\": \\"\\"\\n      },\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量对User/数据湖角色授予资源的操作权限',
        ],
        'DeleteRole' => [
            'summary' => '删除数据湖权限中的角色。',
            'path' => '/api/metastore/auth/roles',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'roleName',
                        'description' => '待删除的角色名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'roleId/roleName至少有一个是非空',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'message',
                                'description' => 'message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除数据湖权限中的角色',
        ],
        'RevokeRoleFromUsers' => [
            'summary' => '将多个User从单个数据湖角色中移除。',
            'path' => '/api/metastore/auth/roles/revokeusers',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => 'A short description of struct',
                        'type' => 'object',
                        'properties' => [
                            'RoleName' => [
                                'title' => '待revoke的角色',
                                'description' => '待revoke的角色',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_role_3',
                            ],
                            'Users' => [
                                'title' => '待revoke的用户列表',
                                'description' => '待revoke的用户列表，ram user/ram role principal 列表，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                                'required' => false,
                                '$ref' => '#/components/schemas/Principals',
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
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '将多个User从单个角色中移除',
        ],
        'RevokeRolesFromUser' => [
            'summary' => '将多个角色从单个User中移除。',
            'path' => '/api/metastore/auth/roles/revokeroles',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'user_permission',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'RoleNames' => [
                                'title' => '待删除的角色列表',
                                'description' => '待删除的角色列表',
                                'required' => true,
                                '$ref' => '#/components/schemas/ListString',
                            ],
                            'User' => [
                                'title' => '针对该用户进行revoke',
                                'description' => '针对该用户进行revoke，ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                                'required' => true,
                                '$ref' => '#/components/schemas/Principal',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'message',
                                'description' => 'message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '将多个角色从单个User中移除',
        ],
        'RevokePermissions' => [
            'summary' => '取消对User/数据湖角色授予资源的操作权限。',
            'path' => '/api/metastore/auth/permissions/revoke',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => '取消授权的类型，目前仅支持hive',
                                'description' => '取消授权的类型，目前仅支持Hive',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Hive',
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'MetaResource' => [
                                'title' => '取消授权meta资源',
                                'description' => '取消授权meta资源',
                                'required' => true,
                                '$ref' => '#/components/schemas/MetaResource',
                            ],
                            'Accesses' => [
                                'title' => '取消授权的accesses列表',
                                'description' => '取消授权的accesses列表',
                                'required' => true,
                                '$ref' => '#/components/schemas/Accesses',
                            ],
                            'DelegateAccesses' => [
                                'title' => '取消授权的grantable accesses列表',
                                'description' => '取消授权的grantable accesses列表，目前暂不支持',
                                'required' => false,
                                '$ref' => '#/components/schemas/Accesses',
                            ],
                            'Principal' => [
                                'title' => '取消授权的用户/角色principal',
                                'description' => 'ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName，数据湖角色的principal为acs:dlf::[accountId]:role/roleName',
                                'required' => true,
                                '$ref' => '#/components/schemas/Principal',
                            ],
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => 'CatalogId',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message Code',
                                'description' => 'Message Code',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '7CB5765C-F209-5B10-8792-D2BE9156ABE8',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"7CB5765C-F209-5B10-8792-D2BE9156ABE8\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '取消User/数据湖角色授予的权限',
        ],
        'BatchRevokePermissions' => [
            'summary' => '批量取消对User/数据湖角色授予资源的操作权限'."\n"
                .'。',
            'path' => '/api/metastore/auth/permissions/batchrevoke',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => '授权的类型，目前仅支持hive',
                                'description' => '授权的类型，目前仅支持Hive',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Hive',
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'GrantRevokeEntries' => [
                                'title' => '待授权列表',
                                'description' => '待授权列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '撤销权限的规则列表',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/GrantRevokeEntry',
                                ],
                                'required' => false,
                            ],
                            'CatalogId' => [
                                'title' => 'catalogId',
                                'description' => 'catalogId',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message Code',
                                'description' => 'Message Code',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'C9E535E1-F040-56F4-B4EE-592B555DAE19',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'BatchGrantRevokeFailureResult' => [
                                'title' => 'result',
                                'description' => 'result',
                                'example' => '参考BatchGrantRevokeFailureResult结构',
                                '$ref' => '#/components/schemas/BatchGrantRevokeFailureResult',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"C9E535E1-F040-56F4-B4EE-592B555DAE19\\",\\n  \\"Success\\": true,\\n  \\"BatchGrantRevokeFailureResult\\": [\\n    {\\n      \\"GrantRevokeEntry\\": {\\n        \\"MetaResource\\": {\\n          \\"ResourceType\\": \\"TABLE\\",\\n          \\"CatalogResource\\": {\\n            \\"CatalogId\\": \\"\\"\\n          },\\n          \\"DatabaseResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"DatabaseWildcard\\": \\"\\"\\n          },\\n          \\"TableResource\\": {\\n            \\"DatabaseName\\": \\"\\",\\n            \\"TableName\\": \\"\\"\\n          },\\n          \\"FunctionResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"FunctionName\\": \\"default\\"\\n          },\\n          \\"ColumnResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"TableName\\": \\"test\\",\\n            \\"ColumnNames\\": [\\n              \\"name\\"\\n            ]\\n          }\\n        },\\n        \\"Accesses\\": [\\n          \\"ALTER/SELECT/CREATE, etc.\\"\\n        ],\\n        \\"DelegateAccesses\\": [\\n          \\"ALTER/SELECT/CREATE, etc.\\"\\n        ],\\n        \\"Principal\\": {\\n          \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n        },\\n        \\"Id\\": \\"\\"\\n      },\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量取消对User/数据湖角色授予的权限',
        ],
        'UpdateRole' => [
            'summary' => '更新数据湖权限中的角色'."\n"
                .'。',
            'path' => '/api/metastore/auth/roles',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'user_permission',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
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
                            'RoleName' => [
                                'title' => 'RoleName',
                                'description' => 'RoleName',
                                'type' => 'string',
                                'required' => false,
                                'example' => '原始名称',
                            ],
                            'RoleInput' => [
                                'description' => '更新后的元素的输入信息',
                                'required' => false,
                                '$ref' => '#/components/schemas/RoleInput',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '604E5919-C6FF-54CE-9C23-C5350E6F5415',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'message',
                                'description' => 'message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"604E5919-C6FF-54CE-9C23-C5350E6F5415\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '更新数据湖权限中的角色',
        ],
        'UpdateRoleUsers' => [
            'summary' => '更新角色中的user，该user包含ram user/ram role。',
            'path' => '/api/metastore/auth/updateroleusers',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'user_permission',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => 'A short description of struct',
                        'type' => 'object',
                        'properties' => [
                            'RoleName' => [
                                'title' => 'Role名称',
                                'description' => 'Role名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test_role_8',
                            ],
                            'Users' => [
                                'description' => 'ram user/ram role principal 列表，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                                'required' => false,
                                '$ref' => '#/components/schemas/Principals',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'message',
                                'description' => 'message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '更新角色中的用户',
        ],
        'UpdatePermissions' => [
            'summary' => '对User/数据湖角色的权限进行更新。',
            'path' => '/api/metastore/auth/permissions/',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'user_permission',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => '授权的类型，目前仅支持hive',
                                'description' => '授权的类型，目前仅支持Hive',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Hive',
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'MetaResource' => [
                                'title' => '授权meta资源',
                                'description' => '授权meta资源',
                                'required' => true,
                                '$ref' => '#/components/schemas/MetaResource',
                            ],
                            'Accesses' => [
                                'title' => '授权的accesses列表',
                                'description' => '授权的accesses列表',
                                'required' => true,
                                '$ref' => '#/components/schemas/Accesses',
                            ],
                            'DelegateAccesses' => [
                                'title' => '授权的grantable accesses列表',
                                'description' => '授权的grantable accesses列表，暂不支持',
                                'required' => true,
                                '$ref' => '#/components/schemas/Accesses',
                            ],
                            'Principal' => [
                                'title' => '授权的用户/角色principal',
                                'description' => '授权的用户/角色principal，ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName，数据湖角色的principal为acs:dlf::[accountId]:role/roleName',
                                'required' => true,
                                '$ref' => '#/components/schemas/Principal',
                            ],
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => 'CatalogId',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message Code',
                                'description' => 'Message Code',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '对User/数据湖角色的权限进行更新',
        ],
        'UpdateCatalogSettings' => [
            'summary' => '更新数据湖Catalog的配置，需admin角色以上角色。',
            'path' => '/api/metastore/catalogs/settings',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'user_permission',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'type' => 'object',
                        'properties' => [
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => 'CatalogId',
                                'type' => 'string',
                                'required' => false,
                                'example' => '默认是空，在多catalogid下填写对应的id',
                            ],
                            'CatalogSettings' => [
                                'description' => '数据湖相关配置',
                                'required' => false,
                                '$ref' => '#/components/schemas/CatalogSettings',
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
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '01D8DD6B-4929-5999-9BB3-950AA30E3BD0',
                            ],
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"01D8DD6B-4929-5999-9BB3-950AA30E3BD0\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '更新数据湖Catalog的配置',
        ],
        'GetRole' => [
            'summary' => '根据角色名获取数据湖权限中的角色。',
            'path' => '/api/metastore/auth/roles',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'roleName',
                        'description' => 'roleName',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'role_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '4316D7DA-9816-596D-A3D7-12676FA59BDA',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'message',
                                'description' => 'message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Role' => [
                                'title' => 'role',
                                'description' => 'role',
                                '$ref' => '#/components/schemas/Role',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4316D7DA-9816-596D-A3D7-12676FA59BDA\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true,\\n  \\"Role\\": {\\n    \\"Name\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"Users\\": [\\n      {\\n        \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n      }\\n    ],\\n    \\"DisplayName\\": \\"显示名称，允许中文\\",\\n    \\"PrincipalArn\\": \\"\\",\\n    \\"CreateTime\\": 0,\\n    \\"UpdateTime\\": 0,\\n    \\"IsPredefined\\": 0\\n  }\\n}","type":"json"}]',
            'title' => '获取数据湖权限中的角色详情',
        ],
        'ListRoles' => [
            'summary' => '获取数据湖角色列表。',
            'path' => '/api/metastore/auth/roles/list',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Next PageToken',
                        'description' => 'Next PageToken',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'token!',
                    ],
                ],
                [
                    'name' => 'RoleNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持模糊搜索，比如.\\*test.\\*',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*test.*',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageSize',
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '-1/100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'message',
                                'description' => 'message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'NextPageToken' => [
                                'title' => 'data',
                                'description' => 'data',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                            'Roles' => [
                                'title' => 'role list data',
                                'description' => 'role list data',
                                'example' => '['."\n"
                                    .'	{'."\n"
                                    .'		"Description":"reserved by the system",'."\n"
                                    .'		"DisplayName":"admin",'."\n"
                                    .'		"UpdateTime":0,'."\n"
                                    .'		"IsPredefined":1,'."\n"
                                    .'		"Name":"admin"'."\n"
                                    .'	}'."\n"
                                    .']',
                                '$ref' => '#/components/schemas/Roles',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true,\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"Roles\\": [\\n    {\\n      \\"Name\\": \\"\\",\\n      \\"Description\\": \\"\\",\\n      \\"Users\\": [\\n        {\\n          \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n        }\\n      ],\\n      \\"DisplayName\\": \\"显示名称，允许中文\\",\\n      \\"PrincipalArn\\": \\"\\",\\n      \\"CreateTime\\": 0,\\n      \\"UpdateTime\\": 0,\\n      \\"IsPredefined\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取数据湖角色列表',
        ],
        'ListRoleUsers' => [
            'summary' => '获取单个角色的User列表。',
            'path' => '/api/metastore/auth/roles/roleusers',
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
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '角色名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'admin',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageSize',
                        'description' => 'PageSize',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '-1/100',
                    ],
                ],
                [
                    'name' => 'UserNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'use name pattern filter',
                        'description' => 'use name pattern filter',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*user.*',
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'NextPageToken',
                        'description' => 'NextPageToken',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'token!',
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
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '558D764F-8C55-49CA-BF38-80EA532FC08F',
                            ],
                            'Code' => [
                                'description' => '状态码描述',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '提示相关错误信息',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'description' => '表示是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'UserRoles' => [
                                'title' => 'user roles',
                                'description' => 'user roles',
                                'example' => 'UserRole列表',
                                '$ref' => '#/components/schemas/UserRoles',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => 'NextPageToken',
                                'type' => 'string',
                                'example' => 'token!',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"558D764F-8C55-49CA-BF38-80EA532FC08F\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true,\\n  \\"UserRoles\\": [\\n    {\\n      \\"Role\\": {\\n        \\"Name\\": \\"\\",\\n        \\"Description\\": \\"\\",\\n        \\"Users\\": [\\n          {\\n            \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n          }\\n        ],\\n        \\"DisplayName\\": \\"显示名称，允许中文\\",\\n        \\"PrincipalArn\\": \\"\\",\\n        \\"CreateTime\\": 0,\\n        \\"UpdateTime\\": 0,\\n        \\"IsPredefined\\": 0\\n      },\\n      \\"GrantTime\\": 0,\\n      \\"User\\": {\\n        \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n      }\\n    }\\n  ],\\n  \\"NextPageToken\\": \\"token!\\"\\n}","type":"json"}]',
            'title' => '获取单个角色的User列表',
        ],
        'ListUserRoles' => [
            'summary' => '获取单个User的数据湖角色列表。',
            'path' => '/api/metastore/auth/roles/userroles',
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
                    'name' => 'PrincipalArn',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram::1111:user/userName',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'PageSize',
                        'description' => 'PageSize',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '-1/100',
                    ],
                ],
                [
                    'name' => 'RoleNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'role name pattern filter',
                        'description' => 'role name pattern filter',
                        'type' => 'string',
                        'required' => false,
                        'example' => '.*test.*',
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'token!',
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
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Code' => [
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'UserRoles' => [
                                'title' => 'Data',
                                'description' => 'UserRoles',
                                'example' => '参考UserRoles结构',
                                '$ref' => '#/components/schemas/UserRoles',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => 'NextPageToken',
                                'type' => 'string',
                                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true,\\n  \\"UserRoles\\": [\\n    {\\n      \\"Role\\": {\\n        \\"Name\\": \\"\\",\\n        \\"Description\\": \\"\\",\\n        \\"Users\\": [\\n          {\\n            \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n          }\\n        ],\\n        \\"DisplayName\\": \\"显示名称，允许中文\\",\\n        \\"PrincipalArn\\": \\"\\",\\n        \\"CreateTime\\": 0,\\n        \\"UpdateTime\\": 0,\\n        \\"IsPredefined\\": 0\\n      },\\n      \\"GrantTime\\": 0,\\n      \\"User\\": {\\n        \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n      }\\n    }\\n  ],\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\"\\n}","type":"json"}]',
            'title' => '获取单个User的数据湖角色列表',
        ],
        'ListPermissions' => [
            'summary' => '获取权限列表。',
            'path' => '/api/metastore/auth/permissions/list',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求对象。',
                        'type' => 'object',
                        'properties' => [
                            'Principal' => [
                                'title' => '基于Principal对权限信息进行过滤',
                                'description' => '基于Principal对权限信息进行过滤',
                                'required' => false,
                                '$ref' => '#/components/schemas/Principal',
                            ],
                            'NextPageToken' => [
                                'title' => '分页Token',
                                'description' => '分页Token',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'token!',
                            ],
                            'PageSize' => [
                                'title' => '分页大小',
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '100',
                            ],
                            'Type' => [
                                'title' => '获取权限信息的类型，目前仅支持hive',
                                'description' => '获取权限信息的类型，目前仅支持Hive',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'Hive',
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'MetaResource' => [
                                'title' => '基于资源对权限信息进行过滤',
                                'description' => '基于资源对权限信息进行过滤',
                                'required' => false,
                                '$ref' => '#/components/schemas/MetaResource',
                            ],
                            'IsListUserRolePermissions' => [
                                'title' => '是否获取用户所属角色的权限',
                                'description' => '是否获取用户所属角色的权限，仅在指定具体资源对象时生效',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                            ],
                            'MetaResourceType' => [
                                'title' => '基于Resource Type进行过滤',
                                'description' => '基于Resource Type进行过滤，DATABASE/TABLE，不指定则两者都包含',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DATABASE',
                            ],
                            'CatalogId' => [
                                'title' => 'CatalogId',
                                'description' => 'CatalogId',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1344371',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message Code',
                                'description' => 'Message Code',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '745EAAE2-5010-5C9F-A95C-B8FC5C1B03BF',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'NextPageToken' => [
                                'title' => 'NextPageToken',
                                'description' => 'NextPageToken',
                                'type' => 'string',
                                'example' => 'token!',
                            ],
                            'TotalCount' => [
                                'title' => 'TotalCount',
                                'description' => 'TotalCount',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '暂不支持',
                            ],
                            'PrincipalResourcePermissionsList' => [
                                'description' => '权限列表',
                                'example' => '[]',
                                '$ref' => '#/components/schemas/PrincipalResourcePermissionsList',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"745EAAE2-5010-5C9F-A95C-B8FC5C1B03BF\\",\\n  \\"Success\\": true,\\n  \\"NextPageToken\\": \\"token!\\",\\n  \\"TotalCount\\": 0,\\n  \\"PrincipalResourcePermissionsList\\": [\\n    {\\n      \\"Principal\\": {\\n        \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n      },\\n      \\"MetaResource\\": {\\n        \\"ResourceType\\": \\"TABLE\\",\\n        \\"CatalogResource\\": {\\n          \\"CatalogId\\": \\"\\"\\n        },\\n        \\"DatabaseResource\\": {\\n          \\"DatabaseName\\": \\"default\\",\\n          \\"DatabaseWildcard\\": \\"\\"\\n        },\\n        \\"TableResource\\": {\\n          \\"DatabaseName\\": \\"\\",\\n          \\"TableName\\": \\"\\"\\n        },\\n        \\"FunctionResource\\": {\\n          \\"DatabaseName\\": \\"default\\",\\n          \\"FunctionName\\": \\"default\\"\\n        },\\n        \\"ColumnResource\\": {\\n          \\"DatabaseName\\": \\"default\\",\\n          \\"TableName\\": \\"test\\",\\n          \\"ColumnNames\\": [\\n            \\"name\\"\\n          ]\\n        }\\n      },\\n      \\"Accesses\\": [\\n        \\"ALTER/SELECT/CREATE, etc.\\"\\n      ],\\n      \\"DelegateAccesses\\": [\\n        \\"ALTER/SELECT/CREATE, etc.\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取权限列表',
        ],
        'CheckPermissions' => [
            'summary' => '对User权限进行校验。',
            'path' => '/api/metastore/auth/permissions/check',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
                        'required' => false,
                        '$ref' => '#/components/schemas/AccessRequest',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response Object',
                        'description' => 'Response Object',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Response Code',
                                'description' => 'Response Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message Code',
                                'description' => 'Message Code',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '81B90E1B-7514-5817-9D59-0EA9E2215876',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"81B90E1B-7514-5817-9D59-0EA9E2215876\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '对User权限进行校验',
        ],
        'GetCatalogSettings' => [
            'summary' => '获取数据湖Catalog的配置，需admin角色以上角色。',
            'path' => '/api/metastore/catalogs/settings',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'tags' => [
                'user_permission',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主账号ID或空字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
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
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Code' => [
                                'title' => 'Code',
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => '.',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'CatalogSettings' => [
                                '$ref' => '#/components/schemas/CatalogSettings',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true,\\n  \\"CatalogSettings\\": {\\n    \\"Config\\": {\\n      \\"key\\": \\"\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取数据湖Catalog的配置',
        ],
        'GetQueryResult' => [
            'summary' => '获取数据探索查询结果。',
            'path' => '/webapi/query/getQueryResult',
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
                    'name' => 'QueryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询ID'."\n"
                            .'> 您可以调用接口SubmitQuery获取查询ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Q-41676378709440CE',
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
                        'docRequired' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '获得查询结果',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '查询状态',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'AVAILABLE' => 'AVAILABLE',
                                    'CANCELLED' => 'CANCELLED',
                                    'RUNNING' => 'RUNNING',
                                    'CANCELLING' => 'CANCELLING',
                                    'WAITING' => 'WAITING',
                                    'ERROR' => 'ERROR',
                                ],
                                'example' => 'AVAILABLE',
                            ],
                            'ResultTmpTable' => [
                                'description' => '结果临时表，暂不可用',
                                'type' => 'string',
                                'example' => 'table',
                            ],
                            'Owner' => [
                                'description' => '创建者主账号uid'."\n"
                                    ."\n",
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '229167306180609***',
                            ],
                            'ErrorMessage' => [
                                'description' => '查询的错误信息',
                                'type' => 'string',
                                'example' => 'Table or view not found:',
                            ],
                            'Progress' => [
                                'description' => '查询进度，0~100之间',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '99',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。取值如下：'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Schema' => [
                                'description' => '查询结果的表头字段和类型.仅当状态为AVAILABLE时返回',
                                'type' => 'string',
                                'example' => '[{"name":"id","type":"INT"},{"name":"student_name","type":"VARCHAR"}]',
                            ],
                            'ResultTmpDb' => [
                                'description' => '结果临时库，暂不可用',
                                'type' => 'string',
                                'example' => 'db'."\n",
                            ],
                            'GmtModified' => [
                                'description' => '查询结果更新时间',
                                'type' => 'string',
                                'example' => '2022-05-09 16:19:09',
                            ],
                            'JobCompleted' => [
                                'description' => '查询是否已经完成，fasle代表需要继续轮询本接口',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RowCount' => [
                                'description' => '结果总行数，仅当状态为AVAILABLE时返回。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'RegionId' => [
                                'description' => '地域ID。',
                                'type' => 'string',
                                'example' => 'cn-hangzhou',
                            ],
                            'EndTime' => [
                                'description' => '查询完成时间',
                                'type' => 'string',
                                'example' => '2022-05-09 16:19:09',
                            ],
                            'StartTime' => [
                                'description' => '查询开始时间',
                                'type' => 'string',
                                'example' => '2022-05-09 16:18:09',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '1D2BCFBA-7639-59A9-817B-944EC1339279',
                            ],
                            'Rows' => [
                                'description' => '返回结果信息，仅当状态为AVAILABLE时返回。内容用一个二维JSON数组表示。',
                                'type' => 'string',
                                'example' => '[[10,"Tom"],[11,"Jerry"]]',
                            ],
                            'Logs' => [
                                'description' => '运行日志',
                                'type' => 'string',
                                'example' => '["this is log"]',
                            ],
                            'GmtCreate' => [
                                'description' => '查询创建时间',
                                'type' => 'string',
                                'example' => '2022-05-09 16:18:09',
                            ],
                            'Duration' => [
                                'description' => '已运行时间，单位是毫秒',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8000',
                            ],
                            'Sql' => [
                                'description' => '原始执行的sql语句',
                                'type' => 'string',
                                'example' => 'select * from db.student',
                            ],
                            'RowCountOverLimit' => [
                                'description' => '结果总行数是否超过最大值',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Id' => [
                                'description' => '查询Id',
                                'type' => 'string',
                                'example' => 'Q-41676378709440CE'."\n",
                            ],
                            'TotalBytesProcessed' => [
                                'description' => '总共扫描数据量，单位字节',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1024',
                            ],
                        ],
                        'example' => '{ "data" : }',
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Query.ResultExpired',
                        'errorMessage' => 'Query result cache expired, please export result in history query',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"AVAILABLE\\",\\n  \\"ResultTmpTable\\": \\"table\\",\\n  \\"Owner\\": 0,\\n  \\"ErrorMessage\\": \\"Table or view not found:\\",\\n  \\"Progress\\": 99,\\n  \\"Success\\": true,\\n  \\"Schema\\": \\"[{\\\\\\"name\\\\\\":\\\\\\"id\\\\\\",\\\\\\"type\\\\\\":\\\\\\"INT\\\\\\"},{\\\\\\"name\\\\\\":\\\\\\"student_name\\\\\\",\\\\\\"type\\\\\\":\\\\\\"VARCHAR\\\\\\"}]\\",\\n  \\"ResultTmpDb\\": \\"db\\\\n\\",\\n  \\"GmtModified\\": \\"2022-05-09 16:19:09\\",\\n  \\"JobCompleted\\": true,\\n  \\"RowCount\\": 100,\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"EndTime\\": \\"2022-05-09 16:19:09\\",\\n  \\"StartTime\\": \\"2022-05-09 16:18:09\\",\\n  \\"RequestId\\": \\"1D2BCFBA-7639-59A9-817B-944EC1339279\\",\\n  \\"Rows\\": \\"[[10,\\\\\\"Tom\\\\\\"],[11,\\\\\\"Jerry\\\\\\"]]\\",\\n  \\"Logs\\": \\"[\\\\\\"this is log\\\\\\"]\\",\\n  \\"GmtCreate\\": \\"2022-05-09 16:18:09\\",\\n  \\"Duration\\": 8000,\\n  \\"Sql\\": \\"select * from db.student\\",\\n  \\"RowCountOverLimit\\": false,\\n  \\"Id\\": \\"Q-41676378709440CE\\\\n\\",\\n  \\"TotalBytesProcessed\\": 1024\\n}","type":"json"}]',
            'title' => '获取查询结果',
        ],
        'SubmitQuery' => [
            'path' => '/webapi/query/submitQueryRequestBody',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP请求体',
                        'type' => 'object',
                        'properties' => [
                            'sql' => [
                                'description' => 'SQL语句。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'show databases',
                            ],
                            'workspaceId' => [
                                'description' => '工作空间id',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'WS-A129E61C4892D2B4',
                            ],
                            'catalogId' => [
                                'type' => 'string',
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
                        'description' => '创建查询的结果',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'string',
                                'example' => 'Q-14475CF9B51FCE5E',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '279AA630-A8ED-5EA9-80A3-2E213D63548C',
                            ],
                            'Success' => [
                                'description' => '操作是否成功。true：操作成功；false：操作未成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                        'example' => '{ "success" : true }',
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Query.ClusterNotReady',
                        'errorMessage' => 'Query cluster is not ready. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"Q-14475CF9B51FCE5E\\",\\n  \\"RequestId\\": \\"279AA630-A8ED-5EA9-80A3-2E213D63548C\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '提交查询',
            'summary' => '提交SQL查询任务。',
            'description' => '- 仅适合提交中小型查询，执行时间不能超过1个小时'."\n"
                .'- 查询结果最多返回10000条'."\n"
                .'- 单个主账号下并发执行有限制，如同时提交多次查询会排队。',
        ],
        'CancelQuery' => [
            'summary' => '取消查询任务。',
            'path' => '/webapi/query/cancelQuery',
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
                    'name' => 'QueryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询ID。'."\n"
                            .'> 您可以调用接口SubmitQuery获取查询ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Q-BCA5E96CB84BB8B8',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '查询ID',
                                'type' => 'string',
                                'example' => 'Q-BCA5E96CB84BB8B8',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DB07AAE9-4B88-5DEA-8F1D-4D1A9A864A85',
                            ],
                            'Success' => [
                                'description' => '调用是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"Q-BCA5E96CB84BB8B8\\",\\n  \\"RequestId\\": \\"DB07AAE9-4B88-5DEA-8F1D-4D1A9A864A85\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '取消查询',
        ],
        'GetRegionStatus' => [
            'path' => '/webapi/service/getRegionStatus',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id',
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
                        'description' => '结果',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'CC58A776-0662-5C6D-B467-FFD4CF7F4C40',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'IsDlfServiceOpen' => [
                                        'description' => 'DLF服务是否开通',
                                        'type' => 'boolean',
                                        'example' => 'True',
                                    ],
                                    'RegionStatus' => [
                                        'description' => '地域状态，SERVICE_INVALID:服务不可用；UNINITIALIZED:未初始化；READY: 正常状态。',
                                        'type' => 'string',
                                        'example' => 'READY',
                                    ],
                                    'AccountStatus' => [
                                        'description' => '账号状态enabled（启用）或disabled（禁用）',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'IsDependencyReady' => [
                                        'description' => '依赖是否准备就绪',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'RegionId' => [
                                        'description' => '区域id',
                                        'type' => 'string',
                                        'example' => 'cn_hangzhou',
                                    ],
                                ],
                                'example' => '{\'RegionId\': \'cn-shanghai\', \'RegionStatus\': \'SERVICE_INVALID\', \'AccountStatus\': \'\', \'IsDlfServiceOpen\': False}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": \\"true\\",\\n  \\"RequestId\\": \\"CC58A776-0662-5C6D-B467-FFD4CF7F4C40\\",\\n  \\"Data\\": {\\n    \\"IsDlfServiceOpen\\": true,\\n    \\"RegionStatus\\": \\"READY\\",\\n    \\"AccountStatus\\": \\"enabled\\",\\n    \\"IsDependencyReady\\": true,\\n    \\"RegionId\\": \\"cn_hangzhou\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取数据湖构建服务开通状态',
            'summary' => '获取数据湖构建指定地域的服务开通状态。',
        ],
        'GetServiceStatus' => [
            'path' => '/webapi/service/getServiceStatus',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域id',
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
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Data' => [
                                'description' => '服务状态',
                                'type' => 'object',
                                'properties' => [
                                    'IsDlfServiceOpen' => [
                                        'description' => 'DLF服务是否开通',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'HasRamPermissions' => [
                                        'description' => '是否完成RAM授权',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'IsOssOpen' => [
                                        'description' => 'OSS服务是否开通',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                                'example' => '{ 			"AccountStatus":"", 			"RegionStatus":"READY", 			"RegionId":"cn-shanghai", 			"IsDependencyReady":true, 			"IsDlfServiceOpen":true 		}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Data\\": {\\n    \\"IsDlfServiceOpen\\": true,\\n    \\"HasRamPermissions\\": true,\\n    \\"IsOssOpen\\": true\\n  }\\n}","type":"json"}]',
            'title' => '获取某个用户的服务开通状态',
            'summary' => '获取数据湖构建某个用户的服务开通状态。',
        ],
        'DescribeRegions' => [
            'path' => '/webapi/service/describeRegions',
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
                            ],
                            'Regions' => [
                                'description' => '区域列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '区域信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '类型',
                                            'type' => 'string',
                                            'example' => 'region',
                                        ],
                                        'ShowName' => [
                                            'description' => '显示名称',
                                            'type' => 'string',
                                            'example' => '华东1（杭州）',
                                        ],
                                        'Name' => [
                                            'description' => '名称',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Description' => [
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => '华东1',
                                        ],
                                    ],
                                    'example' => '{"Type":"region","Description":"华东 1","ShowName":"华东1（杭州）","Name":"cn-hangzhou"}',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Regions\\": [\\n    {\\n      \\"Type\\": \\"region\\",\\n      \\"ShowName\\": \\"华东1（杭州）\\",\\n      \\"Name\\": \\"cn-hangzhou\\",\\n      \\"Description\\": \\"华东1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取开通的地区',
            'summary' => '获取开通的地区列表。',
        ],
        'SearchAcrossCatalog' => [
            'summary' => '跨Catalog搜索库、表、字段等内容。',
            'path' => '/api/metastore/catalogs/search/search-across-catalog',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => 'A short description of struct',
                        'type' => 'object',
                        'properties' => [
                            'SearchText' => [
                                'title' => '搜索问题',
                                'description' => '搜索问题',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'tags:tag1 or comment:^iso and name=aliyun and (createTime > "20211111" and createTime < "20211117") and has category',
                            ],
                            'SortCriteria' => [
                                'title' => '排序结构',
                                'description' => '排序结构',
                                'type' => 'array',
                                'items' => [
                                    'description' => '排序结构',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/SortCriterion',
                                ],
                                'required' => false,
                            ],
                            'PageSize' => [
                                'title' => '当前查询的页大小',
                                'description' => '当前查询的页大小',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1000',
                            ],
                            'PageNumber' => [
                                'title' => '当前查询的页号',
                                'description' => '当前查询的页号',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1',
                            ],
                            'CatalogIds' => [
                                'title' => 'CatalogId数组，为空则搜索所有Catalog',
                                'description' => 'CatalogId数组，为空则搜索所有Catalog',
                                'required' => false,
                                'enumValueTitles' => [],
                                '$ref' => '#/components/schemas/ListString',
                            ],
                            'SearchTypes' => [
                                'title' => 'SearchTypes数组，可选值为ALL/CATALOG/DATABASE/TABLE',
                                'description' => 'SearchTypes数组，可选值为ALL/CATALOG/DATABASE/TABLE',
                                'required' => false,
                                '$ref' => '#/components/schemas/ListString',
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
                            'Code' => [
                                'title' => '响应代码',
                                'description' => '响应代码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '响应消息',
                                'description' => '响应消息',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '460C862F-BB91-5C04-BC3F-946EEF467862',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'DatabaseResult' => [
                                'title' => '返回的db结果',
                                'description' => '返回的db结果',
                                'type' => 'object',
                                'properties' => [
                                    'Databases' => [
                                        'title' => '返回的DatabaseList',
                                        'description' => '返回的DatabaseList',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据库信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Database' => [
                                                    'title' => '返回的Database',
                                                    'description' => '返回的Database',
                                                    '$ref' => '#/components/schemas/Database',
                                                ],
                                                'HighLightList' => [
                                                    'title' => '返回高亮文本',
                                                    'description' => '返回高亮文本',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '返回高亮文本',
                                                        '$ref' => '#/components/schemas/HighLight',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'title' => '满足匹配条件的总的Database个数',
                                        'description' => '满足匹配条件的总的Database个数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '11000',
                                    ],
                                ],
                            ],
                            'TableResult' => [
                                'title' => '返回的table result',
                                'description' => '返回的table result',
                                'type' => 'object',
                                'properties' => [
                                    'Tables' => [
                                        'title' => '返回的TableList',
                                        'description' => '返回的TableList',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '表结果结构',
                                            'type' => 'object',
                                            'properties' => [
                                                'Table' => [
                                                    'title' => '返回的Table',
                                                    'description' => '返回的Table',
                                                    '$ref' => '#/components/schemas/Table',
                                                ],
                                                'HighLightList' => [
                                                    'title' => '返回的高亮文本',
                                                    'description' => '返回的高亮文本',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '返回的高亮文本',
                                                        '$ref' => '#/components/schemas/HighLight',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'title' => '满足匹配条件的总的Table个数',
                                        'description' => '满足匹配条件的总的Table个数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1100',
                                    ],
                                ],
                            ],
                            'CatalogResult' => [
                                'title' => '返回的Catalog result',
                                'description' => '返回的Catalog result',
                                'type' => 'object',
                                'properties' => [
                                    'Catalogs' => [
                                        'description' => 'catalog详情',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'catalog详情',
                                            'type' => 'object',
                                            'properties' => [
                                                'Catalog' => [
                                                    'description' => 'catalog详情',
                                                    '$ref' => '#/components/schemas/Catalog',
                                                ],
                                                'HighLightList' => [
                                                    'description' => '返回高亮文本',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '高亮文本',
                                                        '$ref' => '#/components/schemas/HighLight',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'title' => '满足匹配条件的总的Catalog个数',
                                        'description' => '满足匹配条件的总的Catalog个数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"460C862F-BB91-5C04-BC3F-946EEF467862\\",\\n  \\"Success\\": true,\\n  \\"DatabaseResult\\": {\\n    \\"Databases\\": [\\n      {\\n        \\"Database\\": {\\n          \\"CreateTime\\": 0,\\n          \\"Description\\": \\"\\",\\n          \\"LocationUri\\": \\"oss://examplebuket/exampledb\\",\\n          \\"Name\\": \\"\\",\\n          \\"OwnerName\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Privileges\\": {\\n            \\"GroupPrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            },\\n            \\"RolePrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            },\\n            \\"UserPrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"UpdateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\"\\n        },\\n        \\"HighLightList\\": [\\n          {\\n            \\"Key\\": \\"name\\",\\n            \\"Value\\": \\"<em>tab</em>2\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TotalCount\\": 11000\\n  },\\n  \\"TableResult\\": {\\n    \\"Tables\\": [\\n      {\\n        \\"Table\\": {\\n          \\"Cascade\\": true,\\n          \\"CreateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\",\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Owner\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"PartitionKeys\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Parameters\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Privileges\\": {},\\n          \\"Retention\\": 0,\\n          \\"RewriteEnabled\\": true,\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"TableType\\": \\"\\",\\n          \\"Temporary\\": true,\\n          \\"UpdateTime\\": 0,\\n          \\"ViewExpandedText\\": \\"\\",\\n          \\"ViewOriginalText\\": \\"\\",\\n          \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n          \\"TableVersion\\": {\\n            \\"Table\\": {\\n              \\"Cascade\\": true,\\n              \\"CreateTime\\": 0,\\n              \\"CreatedBy\\": \\"\\",\\n              \\"DatabaseName\\": \\"\\",\\n              \\"LastAccessTime\\": 0,\\n              \\"LastAnalyzedTime\\": 0,\\n              \\"Owner\\": \\"\\",\\n              \\"OwnerType\\": \\"\\",\\n              \\"PartitionKeys\\": [\\n                {\\n                  \\"Comment\\": \\"\\",\\n                  \\"Name\\": \\"\\",\\n                  \\"Type\\": \\"\\"\\n                }\\n              ],\\n              \\"Privileges\\": {},\\n              \\"Retention\\": 0,\\n              \\"RewriteEnabled\\": true,\\n              \\"Sd\\": {\\n                \\"BucketCols\\": [\\n                  \\"\\"\\n                ],\\n                \\"Cols\\": [],\\n                \\"Compressed\\": true,\\n                \\"InputFormat\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"NumBuckets\\": 0,\\n                \\"OutputFormat\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SerDeInfo\\": {\\n                  \\"Name\\": \\"\\",\\n                  \\"SerializationLib\\": \\"\\"\\n                },\\n                \\"SkewedInfo\\": {\\n                  \\"SkewedColNames\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"SkewedColValueLocationMaps\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SkewedColValues\\": [\\n                    [\\n                      \\"\\"\\n                    ]\\n                  ]\\n                },\\n                \\"SortCols\\": [\\n                  {\\n                    \\"Col\\": \\"\\",\\n                    \\"Order\\": 0\\n                  }\\n                ],\\n                \\"StoredAsSubDirectories\\": true\\n              },\\n              \\"TableName\\": \\"\\",\\n              \\"TableType\\": \\"\\",\\n              \\"Temporary\\": true,\\n              \\"UpdateTime\\": 0,\\n              \\"ViewExpandedText\\": \\"\\",\\n              \\"ViewOriginalText\\": \\"\\",\\n              \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n              \\"TableVersion\\": {\\n                \\"Table\\": {\\n                  \\"Cascade\\": true,\\n                  \\"CreateTime\\": 0,\\n                  \\"CreatedBy\\": \\"\\",\\n                  \\"DatabaseName\\": \\"\\",\\n                  \\"LastAccessTime\\": 0,\\n                  \\"LastAnalyzedTime\\": 0,\\n                  \\"Owner\\": \\"\\",\\n                  \\"OwnerType\\": \\"\\",\\n                  \\"PartitionKeys\\": [],\\n                  \\"Retention\\": 0,\\n                  \\"RewriteEnabled\\": true,\\n                  \\"Sd\\": {\\n                    \\"BucketCols\\": [\\n                      \\"\\"\\n                    ],\\n                    \\"Cols\\": [],\\n                    \\"Compressed\\": true,\\n                    \\"InputFormat\\": \\"\\",\\n                    \\"Location\\": \\"\\",\\n                    \\"NumBuckets\\": 0,\\n                    \\"OutputFormat\\": \\"\\",\\n                    \\"Parameters\\": {\\n                      \\"key\\": \\"\\"\\n                    },\\n                    \\"SerDeInfo\\": {\\n                      \\"Name\\": \\"\\",\\n                      \\"SerializationLib\\": \\"\\"\\n                    },\\n                    \\"SkewedInfo\\": {\\n                      \\"SkewedColNames\\": [\\n                        \\"\\"\\n                      ],\\n                      \\"SkewedColValueLocationMaps\\": {\\n                        \\"key\\": \\"\\"\\n                      },\\n                      \\"SkewedColValues\\": [\\n                        [\\n                          \\"\\"\\n                        ]\\n                      ]\\n                    },\\n                    \\"SortCols\\": [\\n                      {\\n                        \\"Col\\": \\"\\",\\n                        \\"Order\\": 0\\n                      }\\n                    ],\\n                    \\"StoredAsSubDirectories\\": true\\n                  },\\n                  \\"TableName\\": \\"\\",\\n                  \\"TableType\\": \\"\\",\\n                  \\"Temporary\\": true,\\n                  \\"UpdateTime\\": 0,\\n                  \\"ViewExpandedText\\": \\"\\",\\n                  \\"ViewOriginalText\\": \\"\\",\\n                  \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n                  \\"TableVersion\\": {\\n                    \\"VersionId\\": 0\\n                  }\\n                },\\n                \\"VersionId\\": 0\\n              }\\n            },\\n            \\"VersionId\\": 0\\n          }\\n        },\\n        \\"HighLightList\\": [\\n          {\\n            \\"Key\\": \\"name\\",\\n            \\"Value\\": \\"<em>tab</em>2\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TotalCount\\": 1100\\n  },\\n  \\"CatalogResult\\": {\\n    \\"Catalogs\\": [\\n      {\\n        \\"Catalog\\": {\\n          \\"CatalogId\\": \\"\\",\\n          \\"Description\\": \\"\\",\\n          \\"LocationUri\\": \\"\\",\\n          \\"Owner\\": \\"\\",\\n          \\"CreatedBy\\": \\"\\",\\n          \\"CreateTime\\": 0,\\n          \\"UpdateTime\\": 0,\\n          \\"Status\\": \\"\\",\\n          \\"CatalogType\\": \\"\\",\\n          \\"DefaultCatalog\\": true,\\n          \\"ThriftEnabled\\": true,\\n          \\"JdbcEnabled\\": true,\\n          \\"StorageAccessConfig\\": \\"\\"\\n        },\\n        \\"HighLightList\\": [\\n          {\\n            \\"Key\\": \\"name\\",\\n            \\"Value\\": \\"<em>tab</em>2\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TotalCount\\": 100\\n  }\\n}","type":"json"}]',
            'title' => '跨Catalog搜索元数据',
        ],
        'RegisterLocation' => [
            'summary' => '将OSS路径注册为由DLF管理。',
            'path' => '/webapi/locations',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP',
                        'type' => 'object',
                        'properties' => [
                            'Location' => [
                                'description' => '注册的OSS路径',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'oss://mybucket/',
                            ],
                            'RoleName' => [
                                'description' => 'RAM角色名称'."\n"
                                    .'> Data Lake Formation 读/写OSS路径下的数据，需要相关授权角色，可以选择AliyunDLFWorkFlowDefaultRole角色，它将会自动内建相关路径的授权权限。或者您自定义角色，但需要由您手工保障该角色，有相应路径的读写权限。',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'AliyunDLFWorkFlowDefaultRole',
                            ],
                            'InventoryCollectEnabled' => [
                                'description' => '是否启用OSS存储空间清单',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'OssLogCollectEnabled' => [
                                'description' => '是否启用OSS日志转存',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
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
                        'description' => '注册结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '3C2678BA-3451-14C3-90E2-D4EF5B4E7A84',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。取值如下：'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'LocationId' => [
                                        'description' => 'Location ID',
                                        'type' => 'string',
                                        'example' => 'LOC-AB8FBC17F95A4AF5',
                                    ],
                                    'StorageCollectTaskOperationResultList' => [
                                        'description' => '启用采集任务的结果列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '启用采集任务的结果',
                                            '$ref' => '#/components/schemas/StorageCollectTaskOperationResult',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3C2678BA-3451-14C3-90E2-D4EF5B4E7A84\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LocationId\\": \\"LOC-AB8FBC17F95A4AF5\\",\\n    \\"StorageCollectTaskOperationResultList\\": [\\n      {\\n        \\"Success\\": true,\\n        \\"TaskId\\": \\"\\",\\n        \\"TaskType\\": \\"\\",\\n        \\"DlfCreated\\": true,\\n        \\"ErrCode\\": \\"\\",\\n        \\"ErrMessage\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '注册Location',
        ],
        'DeregisterLocation' => [
            'summary' => '取消Location注册。',
            'path' => '/webapi/locations',
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
            'consumes' => [],
            'produces' => [],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'LocationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Location ID'."\n"
                            .'> 您可以调用接口RegisterLocation获取Location ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'LOC-AB8FBC17F95A4AF5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '取消注册结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E47920CD-BAE6-1305-88DF-FBDD3D300845',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。取值如下：'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'LocationId' => [
                                        'description' => 'Location ID',
                                        'type' => 'string',
                                        'example' => 'LOC-AB8FBC17F95A4AF5',
                                    ],
                                    'StorageCollectTaskOperationResultList' => [
                                        'description' => '关闭采集任务的结果列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '关闭采集任务的结果',
                                            '$ref' => '#/components/schemas/StorageCollectTaskOperationResult',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E47920CD-BAE6-1305-88DF-FBDD3D300845\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LocationId\\": \\"LOC-AB8FBC17F95A4AF5\\",\\n    \\"StorageCollectTaskOperationResultList\\": [\\n      {\\n        \\"Success\\": true,\\n        \\"TaskId\\": \\"\\",\\n        \\"TaskType\\": \\"\\",\\n        \\"DlfCreated\\": true,\\n        \\"ErrCode\\": \\"\\",\\n        \\"ErrMessage\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '取消Location注册',
        ],
        'UpdateRegisteredLocation' => [
            'summary' => '编辑已注册的Location。',
            'path' => '/webapi/locations',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'HTTP',
                        'type' => 'object',
                        'properties' => [
                            'LocationId' => [
                                'description' => 'Location ID'."\n"
                                    .'> 您可以调用接口RegisterLocation获取Location ID。',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'LOC-AB8FBC17F95A4AF5',
                            ],
                            'InventoryCollectEnabled' => [
                                'description' => '是否启用OSS存储空间清单',
                                'type' => 'boolean',
                                'required' => false,
                                'docRequired' => false,
                                'example' => 'true',
                            ],
                            'OssLogCollectEnabled' => [
                                'description' => '是否启用OSS日志转存',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                        'docRequired' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '编辑Location结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8030C902-C25B-1839-867D-E6F70A5B9810',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。取值如下：'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'LocationId' => [
                                        'description' => 'Location ID',
                                        'type' => 'string',
                                        'example' => 'LOC-AB8FBC17F95A4AF5',
                                    ],
                                    'StorageCollectTaskOperationResultList' => [
                                        'description' => '修改采集任务的结果列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '修改采集任务的结果',
                                            '$ref' => '#/components/schemas/StorageCollectTaskOperationResult',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8030C902-C25B-1839-867D-E6F70A5B9810\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LocationId\\": \\"LOC-AB8FBC17F95A4AF5\\",\\n    \\"StorageCollectTaskOperationResultList\\": [\\n      {\\n        \\"Success\\": true,\\n        \\"TaskId\\": \\"\\",\\n        \\"TaskType\\": \\"\\",\\n        \\"DlfCreated\\": true,\\n        \\"ErrCode\\": \\"\\",\\n        \\"ErrMessage\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '编辑Location',
        ],
        'ListPartitionsByExpr' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/listbyexpr',
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
            ],
            'parameters' => [],
            'responses' => [
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '',
        ],
        'GetDatabaseProfile' => [
            'summary' => '获取库数据概况的详细信息。',
            'path' => '/webapi/metastorehouse/catalog/database/databaseprofile',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据目录ID，默认填写主账号ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371'."\n",
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_db'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'AEA7DCC8-DBF5-561B-A7FD-0747D7D51FEB',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '请求是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'DatabaseProfile' => [
                                'description' => '库数据概况',
                                'example' => '{'."\n"
                                    .'	"FileCnt": 213,'."\n"
                                    .'	"FileSize": 34324'."\n"
                                    .'}',
                                '$ref' => '#/components/schemas/DatabaseProfile',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"-\\",\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"AEA7DCC8-DBF5-561B-A7FD-0747D7D51FEB\\",\\n  \\"Success\\": true,\\n  \\"DatabaseProfile\\": {\\n    \\"FileCnt\\": 0,\\n    \\"FileSize\\": 0,\\n    \\"Name\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"Location\\": \\"\\",\\n    \\"ObjectSize\\": 0,\\n    \\"ObjectCnt\\": 0,\\n    \\"LatestDate\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDatabaseProfileResponse>\\n    <RequestId>AEA7DCC8-DBF5-561B-A7FD-0747D7D51FEB</RequestId>\\n    <Success>true</Success>\\n    <DatabaseProfile>\\n        <FileCnt>3234</FileCnt>\\n        <FileSize>1254312</FileSize>\\n        <Name>test_db</Name>\\n        <CreateTime>2023-08-16 18:02:22</CreateTime>\\n        <Location>oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_db/</Location>\\n        <ObjectSize>1254312</ObjectSize>\\n        <ObjectCnt>3234</ObjectCnt>\\n        <LatestDate>2023-08-30 19:16:10</LatestDate>\\n    </DatabaseProfile>\\n</GetDatabaseProfileResponse>","errorExample":""}]',
            'title' => '获取库数据概况',
            'description' => '使用数据概况需要先将该库的 OSS Bucket 进行 Location 托管。',
        ],
        'GetLifecycleRule' => [
            'summary' => '获取库表生命周期规则。',
            'path' => '/webapi/metastorehouse/lifecycle/rule/getLifecycleRule',
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
                    'name' => 'ResourceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '资源名称，目录库表拼接而成的字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo_catalog_id.demo_db_name.demo_table_name',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LCRU-17E7192705C365C0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'EDBC848F-7CC7-52E3-9FBF-924D09B5C27A',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => 'Success',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Data' => [
                                'description' => '返回结果',
                                '$ref' => '#/components/schemas/LifecycleRule',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EDBC848F-7CC7-52E3-9FBF-924D09B5C27A\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"BizId\\": \\"\\",\\n    \\"GmtCreate\\": \\"\\",\\n    \\"GmtModified\\": \\"\\",\\n    \\"Name\\": \\"\\",\\n    \\"ResourceType\\": \\"\\",\\n    \\"BindCount\\": 0,\\n    \\"Description\\": \\"\\",\\n    \\"RuleType\\": \\"\\",\\n    \\"Config\\": \\"\\",\\n    \\"IaDays\\": 0,\\n    \\"ArchiveDays\\": 0,\\n    \\"ColdArchiveDays\\": 0,\\n    \\"ScheduleStatus\\": \\"\\",\\n    \\"Workflow\\": {\\n      \\"LatestInstanceId\\": \\"\\",\\n      \\"LatestInstanceStatus\\": \\"\\",\\n      \\"LatestStartTime\\": \\"\\",\\n      \\"LatestEndTime\\": \\"\\"\\n    },\\n    \\"WorkflowId\\": \\"\\",\\n    \\"WorkflowInstance\\": {\\n      \\"DlfWorkflowId\\": \\"\\",\\n      \\"ExternalInstanceId\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"EndTime\\": 0,\\n      \\"Status\\": \\"\\",\\n      \\"RuntimeLogs\\": [\\n        {\\n          \\"GmtCreate\\": \\"\\",\\n          \\"InstanceId\\": \\"\\",\\n          \\"BizTime\\": \\"\\",\\n          \\"LogType\\": \\"\\",\\n          \\"LogId\\": \\"\\",\\n          \\"LogSummary\\": \\"\\",\\n          \\"LogContent\\": \\"\\"\\n        }\\n      ],\\n      \\"BatchProgress\\": 0\\n    },\\n    \\"CatalogId\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取库表生命周期规则',
        ],
        'ListPartitionsProfile' => [
            'summary' => '获取分区数据概况的详细信息。',
            'path' => '/webapi/metastorehouse/catalog/database/tableprofile/partitionprofile/listPartitionsProfile',
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
                'operationType' => 'list',
                'abilityTreeCode' => '139289',
                'abilityTreeNodes' => [
                    'FEATUREdlfTGKBOY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CatalogId',
                        'description' => '数据目录ID，默认填写主账号ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1344371',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'DatabaseName',
                        'description' => '元数据库名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_db',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '元数据表名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_tbl',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页码',
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
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'PartitionNames',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'description' => '分区名称列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '分区名称',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'year=3/month=1',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Response',
                        'description' => 'Response',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => 'Code',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Message' => [
                                'title' => 'Message',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '97434FA4-A6B2-1AE4-A174-76964F29C759',
                            ],
                            'Success' => [
                                'title' => 'Success',
                                'description' => '请求是否成功。取值如下：'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Total' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Data' => [
                                'description' => '分区数据概况列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '分区数据概况',
                                    '$ref' => '#/components/schemas/PartitionProfile',
                                ],
                            ],
                            'LatestDate' => [
                                'description' => '元仓更新时间',
                                'type' => 'string',
                                'example' => '2023-08-30 19:16:10',
                            ],
                            'LatestAccessNumDate' => [
                                'description' => '访问频次更新时间（已废弃）',
                                'type' => 'string',
                                'example' => '-',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"-\\",\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"97434FA4-A6B2-1AE4-A174-76964F29C759\\",\\n  \\"Success\\": true,\\n  \\"Total\\": 10,\\n  \\"Data\\": [\\n    {\\n      \\"DatabaseName\\": \\"test_db\\",\\n      \\"TableName\\": \\"test_tbl\\",\\n      \\"PartitionName\\": \\"year=2023/month=1\\",\\n      \\"ArchiveStatus\\": \\"STANDARD\\",\\n      \\"CreateTime\\": \\"2023-08-16 18:02:22\\",\\n      \\"LastModifyTime\\": \\"2023-08-16 18:02:25\\",\\n      \\"LastAccessTime\\": \\"2023-08-22 12:14:42\\",\\n      \\"LastAccessNumTime\\": \\"\\",\\n      \\"Location\\": \\"oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_tb/test_tbl/year=2023/month=1\\",\\n      \\"FileSize\\": 13,\\n      \\"ObjectSize\\": 13,\\n      \\"FileCnt\\": 1,\\n      \\"ObjectCnt\\": 1,\\n      \\"AccessNum\\": 0,\\n      \\"AccessNumWeekly\\": 0,\\n      \\"AccessNumMonthly\\": 0,\\n      \\"ObjectAccessNum\\": 0,\\n      \\"ObjectAccessNumWeekly\\": 4,\\n      \\"ObjectAccessNumMonthly\\": 4,\\n      \\"DataSourceType\\": \\"OSS_HDFS\\"\\n    }\\n  ],\\n  \\"LatestDate\\": \\"2023-08-30 19:16:10\\",\\n  \\"LatestAccessNumDate\\": \\"-\\"\\n}","errorExample":""},{"type":"xml","example":"<ListPartitionsProfileResponse>\\n    <Code>-</Code>\\n    <Message>-</Message>\\n    <RequestId>97434FA4-A6B2-1AE4-A174-76964F29C759</RequestId>\\n    <Success>true</Success>\\n    <Total>1</Total>\\n    <Data>\\n        <DatabaseName>test_db</DatabaseName>\\n        <TableName>test_tbl</TableName>\\n        <PartitionName>year=2023/month=1</PartitionName>\\n        <ArchiveStatus>STANDARD</ArchiveStatus>\\n        <CreateTime>2023-08-16 18:02:22</CreateTime>\\n        <LastModifyTime>2023-08-16 18:02:25</LastModifyTime>\\n        <LastAccessTime>2023-08-22 12:14:42</LastAccessTime>\\n        <Location>oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_tb/test_tbl/year=2023/month=1</Location>\\n        <FileSize>13</FileSize>\\n        <ObjectSize>13</ObjectSize>\\n        <FileCnt>1</FileCnt>\\n        <ObjectCnt>1</ObjectCnt>\\n        <ObjectAccessNum>0</ObjectAccessNum>\\n        <ObjectAccessNumWeekly>4</ObjectAccessNumWeekly>\\n        <ObjectAccessNumMonthly>4</ObjectAccessNumMonthly>\\n        <DataSourceType>OSS_HDFS</DataSourceType>\\n    </Data>\\n    <LatestDate>2023-08-30 19:16:10</LatestDate>\\n</ListPartitionsProfileResponse>","errorExample":""}]',
            'title' => '获取分区数据概况',
            'description' => '使用数据概况需要先将该表的 OSS Bucket 进行 Location 托管。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dlf.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dlf.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dlf.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dlf.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dlf.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dlf.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dlf.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'dlf.us-east-1.aliyuncs.com',
        ],
    ],
];
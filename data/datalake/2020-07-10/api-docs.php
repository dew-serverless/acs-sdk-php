<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'DataLake',
    'version' => '2020-07-10',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 167316,
      'title' => '元数据',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 169629,
          'title' => '目录',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateCatalog',
            1 => 'DeleteCatalog',
            2 => 'UpdateCatalog',
            3 => 'ListCatalogs',
            4 => 'GetCatalog',
          ),
        ),
        1 => 
        array (
          'id' => 161865,
          'title' => '库',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateDatabase',
            1 => 'DeleteDatabase',
            2 => 'UpdateDatabase',
            3 => 'GetDatabase',
            4 => 'ListDatabases',
          ),
        ),
        2 => 
        array (
          'id' => 161889,
          'title' => '表',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateTable',
            1 => 'DeleteTable',
            2 => 'DeleteTableColumnStatistics',
            3 => 'DeleteTableVersion',
            4 => 'UpdateTable',
            5 => 'UpdateTableColumnStatistics',
            6 => 'GetTable',
            7 => 'GetTableColumnStatistics',
            8 => 'GetTableVersion',
            9 => 'ListTableNames',
            10 => 'ListTables',
            11 => 'ListTableVersions',
            12 => 'GetTableProfile',
            13 => 'RenameTable',
            14 => 'BatchGetTables',
            15 => 'BatchCreateTables',
            16 => 'BatchDeleteTables',
            17 => 'BatchDeleteTableVersions',
            18 => 'BatchUpdateTables',
          ),
        ),
        3 => 
        array (
          'id' => 161872,
          'title' => '分区',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreatePartition',
            1 => 'DeletePartition',
            2 => 'DeletePartitionColumnStatistics',
            3 => 'UpdatePartitionColumnStatistics',
            4 => 'GetPartition',
            5 => 'GetPartitionColumnStatistics',
            6 => 'ListPartitionNames',
            7 => 'ListPartitions',
            8 => 'ListPartitionsByFilter',
            9 => 'BatchCreatePartitions',
            10 => 'BatchDeletePartitions',
            11 => 'BatchGetPartitionColumnStatistics',
            12 => 'BatchGetPartitions',
            13 => 'BatchUpdatePartitions',
            14 => 'RenamePartition',
          ),
        ),
        4 => 
        array (
          'id' => 161908,
          'title' => '函数',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateFunction',
            1 => 'DeleteFunction',
            2 => 'UpdateFunction',
            3 => 'ListFunctionNames',
            4 => 'ListFunctions',
            5 => 'GetFunction',
          ),
        ),
        5 => 
        array (
          'id' => 161845,
          'title' => '锁',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateLock',
            1 => 'GetLock',
            2 => 'AbortLock',
            3 => 'RefreshLock',
            4 => 'UnLock',
          ),
        ),
        6 => 
        array (
          'id' => 166936,
          'title' => '元数据迁移',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'StopMigrationWorkflow',
            1 => 'RunMigrationWorkflow',
          ),
        ),
        7 => 'GetAsyncTaskStatus',
        8 => 'Search',
      ),
    ),
    1 => 
    array (
      'id' => 161796,
      'title' => '权限',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRole',
        1 => 'GrantRoleToUsers',
        2 => 'GrantRolesToUser',
        3 => 'GrantPermissions',
        4 => 'BatchGrantPermissions',
        5 => 'DeleteRole',
        6 => 'RevokeRoleFromUsers',
        7 => 'RevokeRolesFromUser',
        8 => 'RevokePermissions',
        9 => 'BatchRevokePermissions',
        10 => 'UpdateRole',
        11 => 'UpdateRoleUsers',
        12 => 'UpdatePermissions',
        13 => 'UpdateCatalogSettings',
        14 => 'GetRole',
        15 => 'ListRoles',
        16 => 'ListRoleUsers',
        17 => 'ListUserRoles',
        18 => 'ListPermissions',
        19 => 'CheckPermissions',
        20 => 'GetCatalogSettings',
      ),
    ),
    2 => 
    array (
      'id' => 166939,
      'title' => '数据探索',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetQueryResult',
        1 => 'SubmitQuery',
        2 => 'CancelQuery',
      ),
    ),
    3 => 
    array (
      'id' => 161818,
      'title' => '通用服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetRegionStatus',
        1 => 'GetServiceStatus',
        2 => 'DescribeRegions',
      ),
    ),
    4 => 
    array (
      'id' => 178756,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SearchAcrossCatalog',
        1 => 'RegisterLocation',
        2 => 'DeregisterLocation',
        3 => 'UpdateRegisteredLocation',
        4 => 'ListPartitionsByExpr',
        5 => 'GetDatabaseProfile',
        6 => 'GetLifecycleRule',
        7 => 'ListPartitionsProfile',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'AccessRequest' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'PrivilegeResources' => 
          array (
            'description' => '待授权资源列表。',
            '$ref' => '#/components/schemas/PrivilegeResources',
          ),
          'Principal' => 
          array (
            'description' => '访问者。',
            '$ref' => '#/components/schemas/Principal',
          ),
          'CatalogId' => 
          array (
            'title' => 'CatalogId',
            'description' => '分类ID。',
            'type' => 'string',
            'example' => '1344371',
          ),
        ),
      ),
      'Accesses' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'accesses 列表',
        'type' => 'array',
        'items' => 
        array (
          'type' => 'string',
          'example' => 'ALTER/SELECT/CREATE, etc.',
        ),
      ),
      'BatchGrantRevokeFailureResult' => 
      array (
        'title' => 'A short description of struct',
        'description' => '批量授权错误时的结果',
        'type' => 'array',
        'items' => 
        array (
          '$ref' => '#/components/schemas/GrantRevokeFailureEntry',
        ),
      ),
      'Catalog' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Catalog',
        'type' => 'object',
        'properties' => 
        array (
          'CatalogId' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'example' => '1344371',
          ),
          'Description' => 
          array (
            'title' => 'Description',
            'description' => 'Description',
            'type' => 'string',
            'example' => '描述',
          ),
          'LocationUri' => 
          array (
            'title' => 'LocationUri',
            'description' => 'LocationUri',
            'type' => 'string',
            'example' => 'oss://dlf-test-oss-location/',
          ),
          'Owner' => 
          array (
            'title' => 'Owner - 负责人 - Principal格式',
            'description' => 'Owner - 负责人 - Principal格式',
            'type' => 'string',
            'example' => 'acs:ram::[accountId]:root',
          ),
          'CreatedBy' => 
          array (
            'title' => 'CreatedBy- 创建者 - principal格式',
            'description' => 'CreatedBy- 创建者 - principal格式',
            'type' => 'string',
            'example' => 'acs:ram::[accountId]:root
',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1640662815603',
          ),
          'UpdateTime' => 
          array (
            'title' => '更新时间',
            'description' => '更新时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1640662815603',
          ),
          'Status' => 
          array (
            'title' => 'Catalog状态',
            'description' => 'Catalog状态',
            'type' => 'string',
            'example' => 'CREATED',
          ),
          'CatalogType' => 
          array (
            'title' => 'Catalog类型',
            'description' => 'Catalog类型',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'NATIVE' => 'NATIVE',
              'HMS' => 'HMS',
            ),
            'example' => 'HMS',
          ),
          'DefaultCatalog' => 
          array (
            'title' => '是否为默认数据目录',
            'description' => '是否为默认数据目录',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'ThriftEnabled' => 
          array (
            'title' => 'ThriftEnabled',
            'description' => '是否开启Thrift 端口访问',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'JdbcEnabled' => 
          array (
            'title' => 'JdbcEnabled',
            'description' => '是否开启JDBC端口访问',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'StorageAccessConfig' => 
          array (
            'title' => 'StorageAccessConfig',
            'description' => '存储访问配置',
            'type' => 'string',
          ),
        ),
      ),
      'CatalogConnection' => 
      array (
        'title' => '数据目录的VPC网络连接',
        'description' => '数据目录的VPC网络连接',
        'type' => 'object',
        'properties' => 
        array (
          'VpcConnectionId' => 
          array (
            'title' => 'VPC网络连接ID',
            'type' => 'string',
            'example' => 'CONN-607A0053D874****',
          ),
          'ThriftUri' => 
          array (
            'title' => 'Thrift协议连接地址',
            'type' => 'string',
          ),
          'JdbcUri' => 
          array (
            'title' => '元数据JDBC连接地址',
            'type' => 'string',
          ),
          'JdbcUserName' => 
          array (
            'title' => 'JDBC用户名',
            'type' => 'string',
          ),
          'JdbcPassword' => 
          array (
            'title' => 'JDBC密码',
            'type' => 'string',
          ),
        ),
      ),
      'CatalogInput' => 
      array (
        'title' => 'A short description of struct',
        'description' => '创建/更新Catalog的结构',
        'type' => 'object',
        'properties' => 
        array (
          'CatalogId' => 
          array (
            'title' => 'CatalogId',
            'description' => 'CatalogId',
            'type' => 'string',
            'required' => true,
            'example' => 'catalog_test',
          ),
          'Description' => 
          array (
            'title' => 'Description',
            'description' => 'Description',
            'type' => 'string',
            'example' => '测试用数据目录',
          ),
          'LocationUri' => 
          array (
            'title' => 'LocationUri',
            'description' => 'LocationUri',
            'type' => 'string',
            'example' => 'oss://dlf-test-oss-location/',
          ),
          'Owner' => 
          array (
            'title' => 'Owner - 负责人 - Principal格式',
            'description' => 'Owner - 负责人 - Principal格式',
            'type' => 'string',
            'example' => 'acs:ram::[accountId]:root，可以为空，为空自动填充为当前创建者身份',
          ),
          'CatalogType' => 
          array (
            'title' => 'Catalog类型',
            'description' => 'Catalog类型',
            'type' => 'string',
            'default' => 'NATIVE',
          ),
          'ThriftEnabled' => 
          array (
            'title' => 'ThriftEnabled',
            'description' => 'ThriftEnabled',
            'type' => 'boolean',
          ),
          'JdbcEnabled' => 
          array (
            'title' => 'JdbcEnabled',
            'description' => 'JdbcEnabled',
            'type' => 'boolean',
          ),
          'StorageAccessConfig' => 
          array (
            'title' => 'StorageAccessConfig',
            'description' => 'StorageAccessConfig',
            'type' => 'string',
          ),
        ),
      ),
      'CatalogResource' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Catalog Resource',
        'type' => 'object',
        'properties' => 
        array (
          'CatalogId' => 
          array (
            'title' => 'Catalog id',
            'description' => 'Catalog id, 默认为主账号ID',
            'type' => 'string',
            'example' => '1344371',
          ),
        ),
      ),
      'CatalogSettings' => 
      array (
        'title' => 'A short description of struct',
        'description' => '数据湖相关配置',
        'type' => 'object',
        'properties' => 
        array (
          'Config' => 
          array (
            'title' => '配置',
            'description' => '配置',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '数据湖权限配置, auth.permission.check.enable表示是否开启元数据服务端鉴权，开启后通过API访问元数据将被鉴权，auth.super.principal表示设置超级用户，超级用户bypass所有鉴权',
              'type' => 'string',
              'example' => '{
"auth.permission.check.enable":
"true",
"auth.super.principal":
"acs:ram::[aliyunAccountId]:role/aliyundlfworkflowdefaultrole"
}',
            ),
          ),
        ),
      ),
      'CatalogVpcConnection' => 
      array (
        'title' => '数据目录的VPC网络连接',
        'description' => '数据目录的VPC网络连接',
        'type' => 'object',
        'properties' => 
        array (
          'GmtModified' => 
          array (
            'title' => '修改时间',
            'type' => 'string',
            'example' => '2023-07-17 17:51:04',
          ),
          'GmtCreate' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
            'example' => '2023-07-12 15:26:12',
          ),
          'RegionId' => 
          array (
            'title' => '地域ID',
            'type' => 'string',
            'example' => 'cn-hangzhou',
          ),
          'Owner' => 
          array (
            'title' => '创建者主账号ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '120215474170****',
          ),
          'Creator' => 
          array (
            'title' => '创建者ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '120215474170****',
          ),
          'Modifier' => 
          array (
            'title' => '修改者ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '120215474170****',
          ),
          'VpcConnectionId' => 
          array (
            'title' => 'VPC网络连接ID',
            'type' => 'string',
            'example' => 'CONN-607A0053D874****',
          ),
          'CatalogId' => 
          array (
            'title' => '数据目录ID',
            'type' => 'string',
            'example' => 'catalog_test',
          ),
          'VpcId' => 
          array (
            'title' => '访问Catalog的专有网络ID',
            'type' => 'string',
            'example' => 'vpc-2ze0c41hvmesel7pu****',
          ),
          'ConnectionName' => 
          array (
            'title' => '网络连接名称',
            'type' => 'string',
          ),
          'Zones' => 
          array (
            'title' => '访问Catalog的可用区列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'title' => '可用区内创建网卡的交换机',
                  'type' => 'string',
                  'example' => 'vsw-hp3uf6045ljdhd5zr****',
                ),
                'ZoneId' => 
                array (
                  'title' => '可用区ID',
                  'type' => 'string',
                  'example' => 'cn-hangzhou-g',
                ),
                'IP' => 
                array (
                  'title' => '网卡的IP地址',
                  'type' => 'string',
                  'example' => '192.168.XX.XX',
                ),
              ),
            ),
          ),
          'SecurityGroupIds' => 
          array (
            'title' => '网卡关联的安全组列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'example' => 'sg-bp1fg655nh68xyz9****',
            ),
          ),
          'ThriftUri' => 
          array (
            'title' => 'Thrift协议连接地址',
            'type' => 'string',
          ),
          'JdbcUri' => 
          array (
            'title' => '元数据库JDBC连接地址',
            'type' => 'string',
          ),
          'ConnectionStatus' => 
          array (
            'title' => '连接状态',
            'type' => 'string',
            'example' => 'CONNECTED',
          ),
          'ErrorMessage' => 
          array (
            'title' => '异常状态时的错误信息',
            'type' => 'string',
          ),
        ),
      ),
      'CatalogVpcConnectionInput' => 
      array (
        'title' => '数据目录的VPC网络连接输入信息',
        'description' => '数据目录的VPC网络连接输入信息',
        'type' => 'object',
        'properties' => 
        array (
          'VpcId' => 
          array (
            'title' => '需要访问Catalog的专有网络ID',
            'type' => 'string',
            'example' => 'vpc-hp356stwkxg3fn2xe****',
          ),
          'ConnectionName' => 
          array (
            'title' => '网络连接名称',
            'type' => 'string',
          ),
          'Zones' => 
          array (
            'title' => '需要访问 Catalog 的可用区列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'title' => '在可用区内要创建网卡的交换机',
                  'type' => 'string',
                  'example' => 'vsw-hp3uf6045ljdhd5zr****',
                ),
                'ZoneId' => 
                array (
                  'title' => '可用区ID，为 null 则自动填充 VSwitch 的可用区',
                  'type' => 'string',
                  'example' => 'cn-hangzhou-g',
                ),
                'IP' => 
                array (
                  'title' => '指定可用区的IP',
                  'type' => 'string',
                  'example' => '192.168.XX.XX',
                ),
              ),
            ),
          ),
          'SecurityGroupIds' => 
          array (
            'title' => '网卡关联的安全组列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'example' => 'sg-bp1fg655nh68xyz9****',
            ),
          ),
        ),
      ),
      'ColumnResource' => 
      array (
        'title' => 'A short description of struct',
        'description' => '鉴权资源结构-Column',
        'type' => 'object',
        'properties' => 
        array (
          'DatabaseName' => 
          array (
            'title' => 'DatabaseName',
            'description' => '数据库的名称。',
            'type' => 'string',
            'example' => 'default',
          ),
          'TableName' => 
          array (
            'title' => 'TableName',
            'description' => '表的名称。',
            'type' => 'string',
            'example' => 'test',
          ),
          'ColumnNames' => 
          array (
            'title' => 'ColumnName',
            'description' => '字段名列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '字段名。',
              'type' => 'string',
              'example' => 'name',
            ),
          ),
        ),
      ),
      'ColumnStatistics' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'ColumnStatisticsList',
        'type' => 'object',
        'properties' => 
        array (
          'ColumnStatisticsDesc' => 
          array (
            'description' => '字段统计描述信息',
            '$ref' => '#/components/schemas/ColumnStatisticsDesc',
          ),
          'ColumnStatisticsObjList' => 
          array (
            'title' => 'ColumnStatisticsObjList',
            'description' => '字段统计信息',
            'type' => 'array',
            'items' => 
            array (
              'description' => '字段统计信息',
              '$ref' => '#/components/schemas/ColumnStatisticsObj',
            ),
          ),
          'Engine' => 
          array (
            'title' => 'Engine for hive3+',
            'description' => 'Engine',
            'type' => 'string',
            'example' => '""，"hive"等',
          ),
          'IsStatsCompliant' => 
          array (
            'title' => 'IsStatsCompliant for hive3+',
            'description' => 'IsStatsCompliant	',
            'type' => 'boolean',
            'example' => 'false',
          ),
        ),
      ),
      'ColumnStatisticsDesc' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'ColumnStatisticsDesc',
        'type' => 'object',
        'properties' => 
        array (
          'LastAnalyzedTime' => 
          array (
            'title' => 'optional',
            'description' => '最近一次分析时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '12312323',
          ),
          'PartitionName' => 
          array (
            'title' => 'required',
            'description' => '分区名称',
            'type' => 'string',
            'example' => 'ds=201212/hh=23',
          ),
        ),
      ),
      'ColumnStatisticsObj' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'ColumnStatisticsObj',
        'type' => 'object',
        'properties' => 
        array (
          'ColumnName' => 
          array (
            'title' => 'ColumnName of the table',
            'description' => '字段名称',
            'type' => 'string',
            'example' => 'col1',
          ),
          'ColumnType' => 
          array (
            'title' => 'ColumnType',
            'description' => '字段类型，包括array bigint binary boolean char date decimal double float int interval map set smallint string struct timestamp tinyint union varchar',
            'type' => 'string',
            'example' => 'int',
          ),
          'ColumnStatisticsData' => 
          array (
            'title' => 'ColumnStatisticsData',
            'description' => '字段统计',
            'type' => 'object',
            'properties' => 
            array (
              'StatisticsData' => 
              array (
                'title' => 'StatisticsData',
                'description' => '具体的统计结果',
                'type' => 'string',
                'example' => '{"numNulls":0,"numTrues":1,"numFalses":5}',
              ),
              'StatisticsType' => 
              array (
                'title' => 'StatisticsType',
                'description' => '统计类型，包括BOOLEAN\\_STATS，LONG\\_STATS，DOUBLE\\_STATS，STRING\\_STATS，BINARY\\_STATS，DECIMAL\\_STATS，DATE\\_STATS',
                'type' => 'string',
                'example' => 'BOOLEAN_STATS',
              ),
            ),
          ),
        ),
      ),
      'Database' => 
      array (
        'title' => 'Database Object',
        'description' => '数据库对象',
        'type' => 'object',
        'properties' => 
        array (
          'CreateTime' => 
          array (
            'title' => 'createTime',
            'description' => '创建时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608707407',
          ),
          'Description' => 
          array (
            'title' => 'description',
            'description' => '元数据库描述文本',
            'type' => 'string',
            'example' => 'this is a hive database',
          ),
          'LocationUri' => 
          array (
            'title' => 'locationUri',
            'description' => '元数据库保存路径，例如HDFS路径',
            'type' => 'string',
            'example' => '/hdfs/hivedb/data',
          ),
          'Name' => 
          array (
            'title' => 'name',
            'description' => '元数据库名称',
            'type' => 'string',
            'example' => 'database_test',
          ),
          'OwnerName' => 
          array (
            'title' => 'ownerName',
            'description' => '负责人名称',
            'type' => 'string',
            'example' => 'zhangsan',
          ),
          'OwnerType' => 
          array (
            'title' => 'ownerType',
            'description' => '负责人类型，填USER或ROLE或GROUP',
            'type' => 'string',
            'example' => 'USER',
          ),
          'Parameters' => 
          array (
            'description' => '定义数据库的参数和属性的键值对',
            '$ref' => '#/components/schemas/Parameters',
          ),
          'Privileges' => 
          array (
            'description' => '权限，非必填',
            '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
          ),
          'UpdateTime' => 
          array (
            'title' => 'updateTime',
            'description' => '更新时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608707407',
          ),
          'CreatedBy' => 
          array (
            'title' => 'CreatedBy',
            'description' => '创建者',
            'type' => 'string',
            'example' => 'root',
          ),
        ),
      ),
      'DatabaseInput' => 
      array (
        'title' => 'Database input',
        'description' => '数据库对象',
        'type' => 'object',
        'properties' => 
        array (
          'Description' => 
          array (
            'title' => 'Description',
            'description' => '元数据库描述文本',
            'type' => 'string',
            'example' => 'this is a hive database',
          ),
          'LocationUri' => 
          array (
            'title' => 'locationUri',
            'description' => '元数据库保存路径，例如可填写HDFS路径',
            'type' => 'string',
            'example' => '/hdfs/hivedb/data',
          ),
          'Name' => 
          array (
            'title' => 'name',
            'description' => '元数据库名称，校验长度128，不支持除下划线以外的特殊字符',
            'type' => 'string',
            'example' => 'name',
          ),
          'OwnerName' => 
          array (
            'title' => 'ownerName',
            'description' => '负责人名称',
            'type' => 'string',
            'example' => 'zhangsan',
          ),
          'OwnerType' => 
          array (
            'title' => 'ownerType',
            'description' => '负责人类型，填USER或ROLE或GROUP',
            'type' => 'string',
            'example' => 'USER',
          ),
          'Parameters' => 
          array (
            'description' => '定义数据库的参数和属性的键值对',
            '$ref' => '#/components/schemas/Parameters',
          ),
          'Privileges' => 
          array (
            'description' => '权限，非必填',
            '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
          ),
          'CreateTime' => 
          array (
            'title' => 'createTime',
            'description' => '创建时间，必填',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1580869631',
          ),
        ),
      ),
      'DatabaseProfile' => 
      array (
        'title' => 'A short description of struct',
        'description' => '库数据概况',
        'type' => 'object',
        'properties' => 
        array (
          'FileCnt' => 
          array (
            'title' => '文件数量',
            'description' => '库文件总数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3234',
          ),
          'FileSize' => 
          array (
            'title' => '文件大小',
            'description' => '库存储大小',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1254312',
          ),
          'Name' => 
          array (
            'title' => '库名称',
            'description' => '库名称',
            'type' => 'string',
            'example' => 'test_db',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2023-08-16 18:02:22',
          ),
          'Location' => 
          array (
            'title' => '存储位置',
            'description' => '存储位置',
            'type' => 'string',
            'example' => 'oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_db/',
          ),
          'ObjectSize' => 
          array (
            'title' => 'OSS文件大小',
            'description' => 'OSS文件大小',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1254312',
          ),
          'ObjectCnt' => 
          array (
            'title' => 'OSS文件数量',
            'description' => 'OSS文件数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3234',
          ),
          'LatestDate' => 
          array (
            'title' => '元仓更新时间',
            'description' => '元仓更新时间',
            'type' => 'string',
            'example' => '2023-08-30 19:16:10',
          ),
        ),
      ),
      'DatabaseResource' => 
      array (
        'title' => 'A short description of struct',
        'description' => '鉴权资源结构-Database',
        'type' => 'object',
        'properties' => 
        array (
          'DatabaseName' => 
          array (
            'title' => 'Database name',
            'description' => '数据库的名称。',
            'type' => 'string',
            'example' => 'default',
          ),
          'DatabaseWildcard' => 
          array (
            'title' => 'A wildcard member representing every resource under a database',
            'description' => 'A wildcard member representing every resource under a database',
            'type' => 'string',
            'example' => '*',
          ),
        ),
      ),
      'DbStorageRank' => 
      array (
        'title' => '库存储排名',
        'description' => '库存储排名',
        'type' => 'object',
        'properties' => 
        array (
          'Quantity' => 
          array (
            'title' => '存储量',
            'description' => '库存储大小',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '9897183010448',
          ),
          'DbName' => 
          array (
            'title' => '库名',
            'description' => '库名称',
            'type' => 'string',
            'example' => 'tpcds_text_parquet_10000"',
          ),
        ),
      ),
      'ErrorDetail' => 
      array (
        'title' => 'ErrorDetail',
        'description' => 'ErrorDetail',
        'type' => 'object',
        'properties' => 
        array (
          'Code' => 
          array (
            'title' => 'Code',
            'description' => '错误码',
            'type' => 'string',
            'example' => '401',
          ),
          'Message' => 
          array (
            'title' => 'Message',
            'description' => '错误信息',
            'type' => 'string',
            'example' => 'auth failed',
          ),
        ),
      ),
      'FieldSchema' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'FieldSchema',
        'type' => 'object',
        'properties' => 
        array (
          'Comment' => 
          array (
            'title' => 'Comment',
            'description' => '字段的文本注释',
            'type' => 'string',
            'example' => 'comment_day',
          ),
          'Name' => 
          array (
            'title' => 'Name',
            'description' => '字段名称',
            'type' => 'string',
            'example' => 'day',
          ),
          'Parameters' => 
          array (
            'description' => '字段关联属性的键值对',
            '$ref' => '#/components/schemas/Parameters',
          ),
          'Type' => 
          array (
            'title' => 'Type',
            'description' => '字段类型，包括array
bigint
binary
boolean
char
date
decimal
double
float
int
interval
map
set
smallint
string
struct
timestamp
tinyint
union
varchar',
            'type' => 'string',
            'example' => 'int',
          ),
        ),
      ),
      'FileCnt' => 
      array (
        'title' => '小文件数量',
        'description' => '小文件分布信息',
        'type' => 'object',
        'properties' => 
        array (
          'Small' => 
          array (
            'title' => '小文件',
            'description' => '小文件数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'Large' => 
          array (
            'title' => '大文件',
            'description' => '大文件数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '100',
          ),
          'Tiny' => 
          array (
            'title' => '极小文件',
            'description' => '极小文件数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '124',
          ),
          'Middle' => 
          array (
            'title' => '中文件',
            'description' => '中文件数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '33',
          ),
        ),
      ),
      'Function' => 
      array (
        'title' => 'Function Object',
        'description' => '函数',
        'type' => 'object',
        'properties' => 
        array (
          'CatalogId' => 
          array (
            'title' => 'CatalogId',
            'description' => '	
数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'example' => '1344371',
          ),
          'ClassName' => 
          array (
            'title' => 'ClassName',
            'description' => '包含了函数实现的Java类名',
            'type' => 'string',
            'example' => 'com.xxx.xxxxFunction',
          ),
          'CreateTime' => 
          array (
            'title' => 'CreateTime',
            'description' => '创建时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608863962',
          ),
          'DatabaseName' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'example' => 'database_test',
          ),
          'FunctionName' => 
          array (
            'title' => 'FunctionName',
            'description' => '函数名称',
            'type' => 'string',
            'example' => 'function1',
          ),
          'FunctionType' => 
          array (
            'title' => 'FunctionType',
            'description' => '	
函数类型， 目前支持的枚举为JAVA',
            'type' => 'string',
            'example' => 'JAVA',
          ),
          'OwnerName' => 
          array (
            'title' => 'OwnerName',
            'description' => '负责人名称',
            'type' => 'string',
            'example' => 'zhangsan',
          ),
          'OwnerType' => 
          array (
            'title' => 'OwnerType',
            'description' => '负责人类型，填USER或ROLE或GROUP',
            'type' => 'string',
            'example' => 'USER',
          ),
          'ResourceUri' => 
          array (
            'title' => 'ResourceUri',
            'description' => '函数的资源URI',
            'type' => 'array',
            'items' => 
            array (
              'description' => '函数的资源URI',
              '$ref' => '#/components/schemas/ResourceUri',
            ),
          ),
          'UpdateTime' => 
          array (
            'title' => 'UpdateTime',
            'description' => '更新时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608863962',
          ),
          'CreatedBy' => 
          array (
            'title' => 'CreatedBy',
            'description' => '创建者',
            'type' => 'string',
            'example' => 'CreatedBy',
          ),
        ),
      ),
      'FunctionInput' => 
      array (
        'title' => 'Function Input',
        'description' => '函数',
        'type' => 'object',
        'properties' => 
        array (
          'ClassName' => 
          array (
            'title' => 'ClassName',
            'description' => '包含了函数实现的Java类名',
            'type' => 'string',
            'example' => 'com.xxx.xxxxFunction',
          ),
          'FunctionName' => 
          array (
            'title' => 'FunctionName',
            'description' => '函数名称',
            'type' => 'string',
            'example' => 'function1',
          ),
          'FunctionType' => 
          array (
            'title' => 'FunctionType',
            'description' => '函数类型， 目前支持的枚举为JAVA',
            'type' => 'string',
            'example' => 'JAVA',
          ),
          'OwnerName' => 
          array (
            'title' => 'OwnerName',
            'description' => '负责人名称',
            'type' => 'string',
            'example' => 'zhangsan',
          ),
          'OwnerType' => 
          array (
            'title' => 'OwnerType',
            'description' => '负责人类型，填USER或ROLE或GROUP',
            'type' => 'string',
            'example' => 'USER',
          ),
          'ResourceUri' => 
          array (
            'title' => 'ResourceUri',
            'description' => '函数的资源URI',
            'type' => 'array',
            'items' => 
            array (
              'description' => '函数的资源URI',
              '$ref' => '#/components/schemas/ResourceUri',
            ),
          ),
          'CreateTime' => 
          array (
            'title' => 'createTime',
            'description' => '创建时间',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1638501155',
          ),
        ),
      ),
      'FunctionResource' => 
      array (
        'title' => 'A short description of struct',
        'description' => '鉴权资源结构-Table',
        'type' => 'object',
        'properties' => 
        array (
          'DatabaseName' => 
          array (
            'title' => 'Database name',
            'description' => '数据库的名称。',
            'type' => 'string',
            'example' => 'default',
          ),
          'FunctionName' => 
          array (
            'title' => 'Function name',
            'description' => '函数名称',
            'type' => 'string',
            'example' => 'default',
          ),
        ),
      ),
      'GrantRevokeEntry' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'MetaResource' => 
          array (
            'title' => '授权的资源',
            'description' => '授权资源结构',
            '$ref' => '#/components/schemas/MetaResource',
          ),
          'Accesses' => 
          array (
            'title' => '授权的accesses列表',
            'description' => '权限Access列表',
            '$ref' => '#/components/schemas/Accesses',
          ),
          'DelegateAccesses' => 
          array (
            'title' => '授权的grantable accesses列表',
            'description' => '后期通过服务端扩展支持',
            '$ref' => '#/components/schemas/Accesses',
          ),
          'Principal' => 
          array (
            'title' => '授权的用户principal',
            'description' => '身份唯一标识ARN',
            '$ref' => '#/components/schemas/Principal',
          ),
          'Id' => 
          array (
            'title' => 'identifier for this entry',
            'description' => 'entry id用于处理异常message',
            'type' => 'string',
            'example' => 'CRW-7A1EC3D73BF419AF',
          ),
        ),
      ),
      'GrantRevokeFailureEntry' => 
      array (
        'title' => 'A short description of struct',
        'description' => '批量授权错误时的结构',
        'type' => 'object',
        'properties' => 
        array (
          'GrantRevokeEntry' => 
          array (
            '$ref' => '#/components/schemas/GrantRevokeEntry',
          ),
          'ErrorDetail' => 
          array (
            '$ref' => '#/components/schemas/ErrorDetail',
          ),
        ),
      ),
      'HighLight' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'Key' => 
          array (
            'title' => '高亮的key',
            'type' => 'string',
            'example' => 'name',
          ),
          'Value' => 
          array (
            'title' => '高亮的value',
            'type' => 'string',
            'example' => '<em>tab</em>2',
          ),
        ),
      ),
      'IndicatorStatistic' => 
      array (
        'title' => '统计指标明细',
        'description' => '指标明细记录',
        'type' => 'object',
        'properties' => 
        array (
          'Data' => 
          array (
            'title' => '指标数据',
            'description' => '明细数据',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Date' => 
          array (
            'title' => '指标日期',
            'description' => '明细日期',
            'type' => 'string',
          ),
        ),
      ),
      'LifecycleResource' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'LifecycleRuleBizId' => 
          array (
            'title' => '生命周期规则id',
            'type' => 'string',
          ),
          'DatabaseName' => 
          array (
            'title' => '数据库名称',
            'type' => 'string',
          ),
          'TableName' => 
          array (
            'title' => '表名称',
            'type' => 'string',
          ),
          'GmtCreate' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'TableProfile' => 
          array (
            '$ref' => '#/components/schemas/TableProfile',
          ),
          'Database' => 
          array (
            'title' => 'Database',
            'type' => 'object',
            'properties' => 
            array (
              'CreateTime' => 
              array (
                'title' => 'CreateTime',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'UpdateTime' => 
              array (
                'title' => 'UpdateTime',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Description' => 
              array (
                'title' => 'Description',
                'type' => 'string',
              ),
              'LocationUri' => 
              array (
                'title' => 'LocationUri',
                'type' => 'string',
              ),
              'Name' => 
              array (
                'title' => 'Name',
                'type' => 'string',
              ),
            ),
          ),
          'Table' => 
          array (
            'title' => 'Table',
            'type' => 'object',
            'properties' => 
            array (
              'CreateTime' => 
              array (
                'title' => 'CreateTime',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Parameters' => 
              array (
                'title' => 'Parameters',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                ),
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'type' => 'string',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'type' => 'string',
              ),
              'TableType' => 
              array (
                'title' => 'TableType',
                'type' => 'string',
              ),
              'Sd' => 
              array (
                'title' => 'Sd',
                'type' => 'object',
                'properties' => 
                array (
                  'BucketCols' => 
                  array (
                    'title' => 'BucketCols',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'InputFormat' => 
                  array (
                    'title' => 'InputFormat',
                    'type' => 'string',
                  ),
                  'Location' => 
                  array (
                    'title' => 'Location',
                    'type' => 'string',
                  ),
                  'OutputFormat' => 
                  array (
                    'title' => 'OutputFormat',
                    'type' => 'string',
                  ),
                  'Parameters' => 
                  array (
                    'title' => 'Parameters',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'SerDeInfo' => 
                  array (
                    'title' => 'SerDeInfo',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Parameters' => 
                      array (
                        'title' => 'Parameters',
                        'type' => 'object',
                        'additionalProperties' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                      'SerializationLib' => 
                      array (
                        'title' => 'SerializationLib',
                        'type' => 'string',
                      ),
                      'Name' => 
                      array (
                        'title' => 'Name',
                        'type' => 'string',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          'DatabaseProfile' => 
          array (
            'title' => 'DatabaseProfile',
            '$ref' => '#/components/schemas/DatabaseProfile',
          ),
          'Owner' => 
          array (
            'title' => 'Owner',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'BizId' => 
          array (
            'title' => 'BizId',
            'type' => 'string',
          ),
          'CatalogId' => 
          array (
            'title' => '目录名称',
            'type' => 'string',
          ),
        ),
      ),
      'LifecycleRule' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'BizId' => 
          array (
            'title' => 'bizId',
            'type' => 'string',
          ),
          'GmtCreate' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'GmtModified' => 
          array (
            'title' => '修改时间',
            'type' => 'string',
          ),
          'Name' => 
          array (
            'title' => 'name',
            'type' => 'string',
          ),
          'ResourceType' => 
          array (
            'title' => 'resourceType',
            'type' => 'string',
          ),
          'BindCount' => 
          array (
            'title' => 'bindCount',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'Description' => 
          array (
            'title' => 'description',
            'type' => 'string',
          ),
          'RuleType' => 
          array (
            'title' => 'ruleType',
            'type' => 'string',
          ),
          'Config' => 
          array (
            'title' => 'Config',
            'type' => 'string',
          ),
          'IaDays' => 
          array (
            'title' => 'iaDays',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'ArchiveDays' => 
          array (
            'title' => 'archiveDays',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'ColdArchiveDays' => 
          array (
            'title' => 'coldArchiveDays',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'ScheduleStatus' => 
          array (
            'title' => 'scheduleStatus',
            'type' => 'string',
          ),
          'Workflow' => 
          array (
            'title' => '工作流',
            '$ref' => '#/components/schemas/Workflow',
          ),
          'WorkflowId' => 
          array (
            'title' => '工作流id',
            'type' => 'string',
          ),
          'WorkflowInstance' => 
          array (
            'title' => '工作流实例',
            '$ref' => '#/components/schemas/WorkflowInstance',
          ),
          'CatalogId' => 
          array (
            'title' => '目录名称',
            'type' => 'string',
          ),
        ),
      ),
      'LifecycleTask' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'BizId' => 
          array (
            'title' => '业务id',
            'type' => 'string',
          ),
          'Name' => 
          array (
            'title' => '名称',
            'type' => 'string',
          ),
          'WorkflowInstance' => 
          array (
            '$ref' => '#/components/schemas/WorkflowInstance',
          ),
          'LifecycleRule' => 
          array (
            '$ref' => '#/components/schemas/LifecycleRule',
          ),
        ),
      ),
      'ListFieldSchema' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'ListFieldSchema数组',
        'type' => 'array',
        'items' => 
        array (
          'description' => '表字段的定义',
          '$ref' => '#/components/schemas/FieldSchema',
        ),
      ),
      'ListListString' => 
      array (
        'title' => 'ListListString',
        'description' => 'ListListString',
        'type' => 'array',
        'items' => 
        array (
          '$ref' => '#/components/schemas/ListString',
        ),
      ),
      'ListResourceUri' => 
      array (
        'title' => 'ResourceUri',
        'description' => '资源URI列表',
        'type' => 'array',
        'items' => 
        array (
          'description' => '资源URI',
          'type' => 'object',
          'properties' => 
          array (
            'ResourceType' => 
            array (
              'title' => 'ResourceType',
              'description' => '资源类型，枚举包括JAR FILE ARCHIVE',
              'type' => 'string',
              'example' => 'JAR',
            ),
            'Uri' => 
            array (
              'title' => 'Uri',
              'description' => 'URI资源地址',
              'type' => 'string',
              'example' => 'hdfs:///tmp/jar1.jar',
            ),
          ),
        ),
      ),
      'ListString' => 
      array (
        'title' => 'ListString Object',
        'description' => 'ListString',
        'type' => 'array',
        'items' => 
        array (
          'description' => '值',
          'type' => 'string',
          'example' => '2010',
        ),
      ),
      'LocationStorageRankDTO' => 
      array (
        'title' => 'Location存储排名',
        'description' => 'location存储量排名',
        'type' => 'object',
        'properties' => 
        array (
          'Location' => 
          array (
            'title' => 'oss路径',
            'type' => 'string',
          ),
          'Storage' => 
          array (
            'title' => '存储量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'FileCnt' => 
          array (
            'title' => '文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'LockObj' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'LockObj',
        'type' => 'object',
        'properties' => 
        array (
          'CatalogId' => 
          array (
            'title' => 'CatalogId',
            'description' => '	
数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'example' => '1344371',
          ),
          'DatabaseName' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'example' => 'database_test',
          ),
          'PartitionName' => 
          array (
            'title' => 'PartitionName',
            'description' => '分区名称，非必填',
            'type' => 'string',
            'example' => 'dt',
          ),
          'TableName' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'example' => 'test_table',
          ),
        ),
      ),
      'LockStatus' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'LockStatus',
        'type' => 'object',
        'properties' => 
        array (
          'LockId' => 
          array (
            'title' => 'LockId',
            'description' => '锁唯一ID',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'LockState' => 
          array (
            'title' => 'ACQUIRED/NOT_ACQUIRED',
            'description' => '锁状态，ACQUIRED/NOT_ACQUIRED',
            'type' => 'string',
            'example' => 'ACQUIRED',
          ),
        ),
      ),
      'LogInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => '运行日志信息',
        'type' => 'object',
        'properties' => 
        array (
          'GmtCreate' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'InstanceId' => 
          array (
            'title' => '实例ID',
            'type' => 'string',
          ),
          'BizTime' => 
          array (
            'title' => '业务运行时间',
            'type' => 'string',
          ),
          'LogType' => 
          array (
            'title' => '日志级别',
            'type' => 'string',
          ),
          'LogId' => 
          array (
            'title' => '日志id',
            'type' => 'string',
          ),
          'LogSummary' => 
          array (
            'title' => '日志概要',
            'type' => 'string',
          ),
          'LogContent' => 
          array (
            'title' => '日志内容',
            'type' => 'string',
          ),
        ),
      ),
      'MetaResource' => 
      array (
        'title' => 'A short description of struct',
        'description' => '鉴权资源结构',
        'type' => 'object',
        'properties' => 
        array (
          'ResourceType' => 
          array (
            'title' => 'CATALOG,DATABASE, TABLE, FUNCTION, COLUMN任选其一',
            'description' => '元数据资源对象类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'TABLE' => 'TABLE',
              'DATABASE' => 'DATABASE',
              'COLUMN' => 'COLUMN',
              ' CATALOG' => ' CATALOG',
              ' FUNCTION' => ' FUNCTION',
            ),
            'example' => 'TABLE',
          ),
          'CatalogResource' => 
          array (
            'title' => 'catalog resource',
            'description' => 'Catalog资源',
            'example' => '参看字段结构',
            '$ref' => '#/components/schemas/CatalogResource',
          ),
          'DatabaseResource' => 
          array (
            'title' => 'database resource',
            'description' => 'Database资源',
            'example' => '参看字段结构',
            '$ref' => '#/components/schemas/DatabaseResource',
          ),
          'TableResource' => 
          array (
            'title' => 'table resource',
            'description' => 'Table资源',
            'example' => '参看字段结构',
            '$ref' => '#/components/schemas/TableResource',
          ),
          'FunctionResource' => 
          array (
            'title' => 'function resource',
            'description' => 'Function资源',
            'example' => '参看字段结构',
            '$ref' => '#/components/schemas/FunctionResource',
          ),
          'ColumnResource' => 
          array (
            'title' => 'column resource',
            'description' => 'Column资源',
            'example' => '参看字段结构',
            '$ref' => '#/components/schemas/ColumnResource',
          ),
        ),
      ),
      'Order' => 
      array (
        'title' => 'Order Object',
        'description' => 'Order',
        'type' => 'object',
        'properties' => 
        array (
          'Col' => 
          array (
            'title' => 'Col',
            'description' => '字段名称',
            'type' => 'string',
            'example' => 'col1',
          ),
          'Order' => 
          array (
            'title' => 'Order',
            'description' => '1表示升序排列，0表示降序排列',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'Parameters' => 
      array (
        'title' => 'parameter map',
        'description' => 'Parameters',
        'type' => 'object',
        'additionalProperties' => 
        array (
          'description' => '参数key/value
',
          'type' => 'string',
          'example' => 'key',
        ),
      ),
      'Partition' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Partition',
        'type' => 'object',
        'properties' => 
        array (
          'CreateTime' => 
          array (
            'title' => 'CreateTime',
            'description' => '创建时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608730999',
          ),
          'DatabaseName' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'example' => 'database_test',
          ),
          'LastAccessTime' => 
          array (
            'title' => 'LastAccessTime',
            'description' => '上一次访问分区的时间',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608730999',
          ),
          'LastAnalyzedTime' => 
          array (
            'title' => 'LastAnalyzedTime',
            'description' => '上一次执行统计运算的时间',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608730999',
          ),
          'Parameters' => 
          array (
            'title' => 'Parameters',
            'description' => '分区有关的键值对参数',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '键值对',
              'type' => 'string',
              'example' => 'key',
            ),
          ),
          'Privileges' => 
          array (
            'description' => '权限配置，可以空',
            '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
          ),
          'Sd' => 
          array (
            'description' => '存储描述符',
            '$ref' => '#/components/schemas/StorageDescriptor',
          ),
          'TableName' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'example' => 'test_table_20201223',
          ),
          'Values' => 
          array (
            'title' => 'Values',
            'description' => '分区的值',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分区的值',
              'type' => 'string',
              'example' => 'part1',
            ),
          ),
        ),
      ),
      'PartitionError' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'PartitionError',
        'type' => 'object',
        'properties' => 
        array (
          'ErrorDetail' => 
          array (
            'description' => '错误信息',
            '$ref' => '#/components/schemas/ErrorDetail',
          ),
          'PartitionValues' => 
          array (
            'description' => '分区值。',
            '$ref' => '#/components/schemas/ListString',
          ),
        ),
      ),
      'PartitionInput' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Partition',
        'type' => 'object',
        'properties' => 
        array (
          'DatabaseName' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'example' => 'database_test',
          ),
          'LastAccessTime' => 
          array (
            'title' => 'LastAccessTime',
            'description' => '上一次访问分区的时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608730999',
          ),
          'LastAnalyzedTime' => 
          array (
            'title' => 'LastAnalyzedTime',
            'description' => '上一次执行统计运算的时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608730999',
          ),
          'Parameters' => 
          array (
            'title' => 'Parameters',
            'description' => '分区有关的键值对参数',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '键值对',
              'type' => 'string',
              'example' => 'key',
            ),
          ),
          'Privileges' => 
          array (
            'description' => '权限配置，可以空',
            '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
          ),
          'Sd' => 
          array (
            'description' => '存储描述符',
            '$ref' => '#/components/schemas/StorageDescriptor',
          ),
          'TableName' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'example' => 'test_table_20201223',
          ),
          'Values' => 
          array (
            'title' => 'Values',
            'description' => '分区的值',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分区的值',
              'type' => 'string',
              'example' => 'part1',
            ),
          ),
          'CreateTime' => 
          array (
            'title' => 'createTime',
            'description' => '创建时间',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1635147901',
          ),
        ),
      ),
      'PartitionProfile' => 
      array (
        'title' => '分区数据概况',
        'description' => '分区数据概况',
        'type' => 'object',
        'properties' => 
        array (
          'DatabaseName' => 
          array (
            'title' => '库名称',
            'description' => '库名称',
            'type' => 'string',
            'example' => 'test_db',
          ),
          'TableName' => 
          array (
            'title' => '表名称',
            'description' => '表名称',
            'type' => 'string',
            'example' => 'test_tbl',
          ),
          'PartitionName' => 
          array (
            'title' => '分区名称',
            'description' => '分区名称',
            'type' => 'string',
            'example' => 'year=2023/month=1',
          ),
          'ArchiveStatus' => 
          array (
            'title' => 'oss 存储类型',
            'description' => 'oss 存储类型',
            'type' => 'string',
            'example' => 'STANDARD',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2023-08-16 18:02:22',
          ),
          'LastModifyTime' => 
          array (
            'title' => '最后更新时间',
            'description' => '最后更新时间',
            'type' => 'string',
            'example' => '2023-08-16 18:02:25',
          ),
          'LastAccessTime' => 
          array (
            'title' => '最后访问时间（来自 oss 或 oss-hdfs 审计日志）',
            'description' => '最后访问时间（来自 oss 或 oss-hdfs 审计日志）',
            'type' => 'string',
            'example' => '2023-08-22 12:14:42',
          ),
          'LastAccessNumTime' => 
          array (
            'title' => '最后访问时间（已废弃）',
            'description' => '最后访问时间（已废弃）',
            'type' => 'string',
          ),
          'Location' => 
          array (
            'title' => '存储位置',
            'description' => '存储位置',
            'type' => 'string',
            'example' => 'oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_db/test_tbl/year=2023/month=1',
          ),
          'FileSize' => 
          array (
            'title' => '分区大小',
            'description' => '分区大小',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '13',
          ),
          'ObjectSize' => 
          array (
            'title' => '分区大小（来自 oss 或 oss-hdfs 清单）',
            'description' => '分区大小（来自 oss 或 oss-hdfs 清单）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '13',
          ),
          'FileCnt' => 
          array (
            'title' => '文件数量',
            'description' => '文件数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'ObjectCnt' => 
          array (
            'title' => '文件数量（来自 oss 或 oss-hdfs 清单）',
            'description' => '文件数量（来自 oss 或 oss-hdfs 清单）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'AccessNum' => 
          array (
            'title' => '当天访问次数（已废弃）',
            'description' => '当天访问次数（已废弃）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'AccessNumWeekly' => 
          array (
            'title' => '最近7天访问次数（已废弃）',
            'description' => '最近7天访问次数（已废弃）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'AccessNumMonthly' => 
          array (
            'title' => '最近30天访问次数（已废弃）',
            'description' => '最近30天访问次数（已废弃）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'ObjectAccessNum' => 
          array (
            'title' => '近1天文件访问次数（来自 oss-hdfs 审计日志）',
            'description' => '近1天文件访问次数（来自 oss-hdfs 审计日志）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'ObjectAccessNumWeekly' => 
          array (
            'title' => '近7天文件访问次数（来自 oss-hdfs 审计日志）',
            'description' => '近7天文件访问次数（来自 oss-hdfs 审计日志）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '4',
          ),
          'ObjectAccessNumMonthly' => 
          array (
            'title' => '近30天文件访问次数（来自 oss-hdfs 审计日志）',
            'description' => '近30天文件访问次数（来自 oss-hdfs 审计日志）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '4',
          ),
          'DataSourceType' => 
          array (
            'title' => '存储量采集的来源类型',
            'description' => '存储量采集的来源类型',
            'type' => 'string',
            'example' => 'OSS_HDFS',
          ),
        ),
      ),
      'PartitionSpec' => 
      array (
        'title' => 'A short description of struct',
        'description' => '共享sd 的partition结构',
        'type' => 'object',
        'properties' => 
        array (
          'SharedSDPartitions' => 
          array (
            'title' => 'SharedSDPartitions',
            'description' => '共享分区list，表示多个partition共同的部分',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分区',
              '$ref' => '#/components/schemas/Partition',
            ),
          ),
          'SharedStorageDescriptor' => 
          array (
            'title' => 'SharedStorageDescriptor',
            'description' => '共享SD信息，表示多个partition共享相同的SD',
            'type' => 'object',
            'properties' => 
            array (
              'Cols' => 
              array (
                'title' => 'Cols',
                'description' => '列信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '每个列的详情',
                  '$ref' => '#/components/schemas/FieldSchema',
                ),
              ),
              'Location' => 
              array (
                'title' => 'Location',
                'description' => '数据的location',
                'type' => 'string',
                'example' => '相对路径',
              ),
            ),
          ),
        ),
      ),
      'PartitionValueList' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'PartitionValueList',
        'type' => 'array',
        'items' => 
        array (
          'description' => '分区值的对象',
          'type' => 'object',
          'properties' => 
          array (
            'Values' => 
            array (
              'description' => '分区值',
              '$ref' => '#/components/schemas/ListString',
            ),
          ),
        ),
      ),
      'Principal' => 
      array (
        'title' => 'A short description of struct',
        'description' => '身份唯一标识ARN',
        'type' => 'object',
        'properties' => 
        array (
          'PrincipalArn' => 
          array (
            'title' => '身份标识',
            'description' => 'ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
            'type' => 'string',
            'example' => 'acs:ram::[AliyunAccountId]:user/username_abc',
          ),
        ),
      ),
      'PrincipalPrivilegeSet' => 
      array (
        'title' => 'PrincipalPrivilegeSet Object',
        'description' => 'PrincipalPrivilegeSet Object',
        'type' => 'object',
        'properties' => 
        array (
          'GroupPrivileges' => 
          array (
            'description' => 'GroupPrivileges',
            '$ref' => '#/components/schemas/Privileges',
          ),
          'RolePrivileges' => 
          array (
            'description' => 'RolePrivileges',
            '$ref' => '#/components/schemas/Privileges',
          ),
          'UserPrivileges' => 
          array (
            'description' => 'UserPrivileges',
            '$ref' => '#/components/schemas/Privileges',
          ),
        ),
      ),
      'PrincipalResourcePermissions' => 
      array (
        'title' => 'Principal和资源的权限信息',
        'type' => 'object',
        'properties' => 
        array (
          'Principal' => 
          array (
            'title' => '权限信息所属的Principal',
            'required' => true,
            '$ref' => '#/components/schemas/Principal',
          ),
          'MetaResource' => 
          array (
            'title' => '权限信息所属的Hive元数据资源',
            'required' => true,
            '$ref' => '#/components/schemas/MetaResource',
          ),
          'Accesses' => 
          array (
            'title' => '权限',
            '$ref' => '#/components/schemas/Accesses',
          ),
          'DelegateAccesses' => 
          array (
            'title' => 'grantable权限',
            '$ref' => '#/components/schemas/Accesses',
          ),
        ),
      ),
      'PrincipalResourcePermissionsList' => 
      array (
        'title' => 'A short description of struct',
        'description' => '权限列表',
        'type' => 'array',
        'items' => 
        array (
          '$ref' => '#/components/schemas/PrincipalResourcePermissions',
        ),
      ),
      'Principals' => 
      array (
        'title' => '一组Principal',
        'description' => 'Principal list',
        'type' => 'array',
        'items' => 
        array (
          'description' => 'Principal',
          '$ref' => '#/components/schemas/Principal',
        ),
      ),
      'PrivilegeGrantInfo' => 
      array (
        'title' => 'PrivilegeGrantInfo',
        'description' => 'PrivilegeGrantInfo Object',
        'type' => 'object',
        'properties' => 
        array (
          'CreateTime' => 
          array (
            'title' => 'createTime',
            'description' => '创建时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1606226844',
          ),
          'GrantOption' => 
          array (
            'title' => 'grantOption',
            'description' => 'GrantOption	',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'Grantor' => 
          array (
            'title' => 'grantor',
            'description' => 'Grantor',
            'type' => 'string',
            'example' => 'Grantor',
          ),
          'GrantorType' => 
          array (
            'title' => 'grantorType',
            'description' => 'GrantorType',
            'type' => 'string',
            'example' => 'GrantorType',
          ),
          'Privilege' => 
          array (
            'title' => 'privilege',
            'description' => 'Privilege',
            'type' => 'string',
            'example' => 'Privilege',
          ),
        ),
      ),
      'PrivilegeResource' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Privilege Resource',
        'type' => 'object',
        'properties' => 
        array (
          'MetaResource' => 
          array (
            'title' => 'resource',
            'description' => '元数据资源。',
            '$ref' => '#/components/schemas/MetaResource',
          ),
          'Access' => 
          array (
            'title' => 'Access type',
            'description' => 'Access type',
            'type' => 'string',
            'example' => 'Drop',
          ),
        ),
      ),
      'PrivilegeResources' => 
      array (
        'title' => 'A short description of struct',
        'description' => '鉴权资源列表',
        'type' => 'array',
        'items' => 
        array (
          '$ref' => '#/components/schemas/PrivilegeResource',
        ),
      ),
      'Privileges' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Privileges Object',
        'type' => 'object',
        'additionalProperties' => 
        array (
          'description' => 'Privileges Array
',
          'type' => 'array',
          'items' => 
          array (
            'description' => 'Privileges ',
            '$ref' => '#/components/schemas/PrivilegeGrantInfo',
          ),
        ),
      ),
      'ResourceUri' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'ResourceUri',
        'type' => 'object',
        'properties' => 
        array (
          'ResourceType' => 
          array (
            'title' => 'ResourceType',
            'description' => '资源类型，枚举包括JAR FILE ARCHIVE',
            'type' => 'string',
            'example' => 'JAR',
          ),
          'Uri' => 
          array (
            'title' => 'Uri',
            'description' => 'URI资源地址',
            'type' => 'string',
            'example' => 'hdfs:///tmp/jar1.jar',
          ),
        ),
      ),
      'Role' => 
      array (
        'title' => 'A short description of struct',
        'description' => '数据湖元数据角色',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => 'name',
            'description' => '角色名',
            'type' => 'string',
            'example' => 'role_name',
          ),
          'Description' => 
          array (
            'title' => '角色描述',
            'description' => '角色描述',
            'type' => 'string',
            'example' => 'role description',
          ),
          'Users' => 
          array (
            'description' => 'ram user/ram role principal 列表，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName
',
            'example' => '["acs:ram::111:role/role_name", "acs:ram::111:role/role_name"]',
            '$ref' => '#/components/schemas/Principals',
          ),
          'DisplayName' => 
          array (
            'title' => 'DisplayName',
            'description' => '角色展示名',
            'type' => 'string',
            'example' => '显示名称，允许中文',
          ),
          'PrincipalArn' => 
          array (
            'title' => 'PrincipalArn',
            'description' => '数据湖 role的 principal arn，格式为acs:dlf::[accountId]:role/[roleName]',
            'type' => 'string',
            'example' => 'acs:dlf::111:role/role_name',
          ),
          'CreateTime' => 
          array (
            'title' => 'CreateTime',
            'description' => '角色创建时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1647323053',
          ),
          'UpdateTime' => 
          array (
            'title' => 'UpdateTime',
            'description' => '角色更新时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1647323053',
          ),
          'IsPredefined' => 
          array (
            'title' => 'IsPredefined',
            'description' => '是否内置角色',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'RoleInput' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'role input',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => 'name',
            'description' => '数据湖角色名',
            'type' => 'string',
            'example' => 'test',
          ),
          'Description' => 
          array (
            'title' => '角色描述',
            'description' => '角色描述',
            'type' => 'string',
            'example' => '注释',
          ),
          'DisplayName' => 
          array (
            'title' => 'DisplayName',
            'description' => '角色显示名',
            'type' => 'string',
            'example' => '显示名称，允许中文',
          ),
        ),
      ),
      'Roles' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'array',
        'items' => 
        array (
          'description' => '角色。',
          '$ref' => '#/components/schemas/Role',
        ),
      ),
      'SerDeInfo' => 
      array (
        'title' => 'SerDeInfo Object',
        'description' => 'SerDeInfo',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => 'Name',
            'description' => '名称',
            'type' => 'string',
            'example' => 'name',
          ),
          'Parameters' => 
          array (
            'description' => '参数。键值对形式',
            '$ref' => '#/components/schemas/Parameters',
          ),
          'SerializationLib' => 
          array (
            'title' => 'SerializationLib',
            'description' => 'SerDe的实现类',
            'type' => 'string',
            'example' => 'org.apache.hadoop.hive.serde2.OpenCSVSerde',
          ),
        ),
      ),
      'SingleIndicatorDTO' => 
      array (
        'title' => '统计指标',
        'description' => '指标统计结果',
        'type' => 'object',
        'properties' => 
        array (
          'DayOnDay' => 
          array (
            'title' => '日环比',
            'description' => '日环比',
            'type' => 'number',
            'format' => 'double',
          ),
          'MonthOnMonth' => 
          array (
            'title' => '月环比',
            'description' => '月环比',
            'type' => 'number',
            'format' => 'double',
          ),
          'DayIncrement' => 
          array (
            'title' => '日新增',
            'description' => '日新增',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'MonthIncrement' => 
          array (
            'title' => '月新增',
            'description' => '月新增',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Total' => 
          array (
            'title' => '总量',
            'description' => '总量',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'SkewedInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'SkewedInfo',
        'type' => 'object',
        'properties' => 
        array (
          'SkewedColNames' => 
          array (
            'title' => 'SkewedColNames',
            'description' => '包含倾斜值的字段列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '倾斜字段',
              'type' => 'string',
              'example' => 'col1',
            ),
          ),
          'SkewedColValueLocationMaps' => 
          array (
            'title' => 'SkewedColValueLocationMaps',
            'description' => '倾斜值和字段的映射Map',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '倾斜值和字段的映射Map',
              'type' => 'string',
              'example' => '{“col1”:"val1"}',
            ),
          ),
          'SkewedColValues' => 
          array (
            'title' => 'SkewedColValueLocationMaps',
            'description' => '倾斜值列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '倾斜值',
              'type' => 'array',
              'items' => 
              array (
                'description' => '倾斜值',
                'type' => 'string',
                'example' => '"123"',
              ),
            ),
          ),
        ),
      ),
      'SmallFileCntRank' => 
      array (
        'title' => '小文件数量排名',
        'description' => '小文件数量排名',
        'type' => 'object',
        'properties' => 
        array (
          'TableName' => 
          array (
            'title' => '表名',
            'description' => '表名称',
            'type' => 'string',
            'example' => 'delta_partition_1',
          ),
          'Quantity' => 
          array (
            'title' => '数量',
            'description' => '小文件数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '52250',
          ),
          'DbName' => 
          array (
            'title' => '库名',
            'description' => '库名称',
            'type' => 'string',
            'example' => 'qingwei_repo',
          ),
          'Location' => 
          array (
            'title' => '存储位置',
            'description' => '表存储位置',
            'type' => 'string',
            'example' => 'oss://qingwei-hz/repo/delta_partition_1',
          ),
        ),
      ),
      'SortCriterion' => 
      array (
        'title' => '排序结构',
        'description' => 'search排序结构体',
        'type' => 'object',
        'properties' => 
        array (
          'FieldName' => 
          array (
            'title' => '排序字段',
            'description' => '字段名称。',
            'type' => 'string',
            'example' => 'name',
          ),
          'Sort' => 
          array (
            'title' => '排序方式',
            'description' => '排序方式。默认值desc

类型：
asc：正序
desc：逆序',
            'type' => 'string',
            'example' => 'asc/desc',
          ),
        ),
      ),
      'StorageCollectTaskOperationResult' => 
      array (
        'title' => '修改采集任务结果',
        'description' => '修改采集任务结果',
        'type' => 'object',
        'properties' => 
        array (
          'Success' => 
          array (
            'title' => '是否成功',
            'description' => '是否成功',
            'type' => 'boolean',
          ),
          'TaskId' => 
          array (
            'title' => '任务Id',
            'description' => '任务Id',
            'type' => 'string',
          ),
          'TaskType' => 
          array (
            'title' => '任务类型',
            'description' => '任务类型',
            'type' => 'string',
          ),
          'DlfCreated' => 
          array (
            'title' => '是否DLF自动创建',
            'description' => '是否DLF自动创建',
            'type' => 'boolean',
          ),
          'ErrCode' => 
          array (
            'title' => '错误码',
            'description' => '错误码',
            'type' => 'string',
          ),
          'ErrMessage' => 
          array (
            'title' => '错误信息',
            'description' => '错误信息',
            'type' => 'string',
          ),
        ),
      ),
      'StorageDescriptor' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'StorageDescriptor',
        'type' => 'object',
        'properties' => 
        array (
          'BucketCols' => 
          array (
            'description' => '分桶的字段的数组',
            '$ref' => '#/components/schemas/ListString',
          ),
          'Cols' => 
          array (
            'title' => 'Cols',
            'description' => '表中的所有字段',
            'type' => 'array',
            'items' => 
            array (
              'description' => '表字段的定义',
              '$ref' => '#/components/schemas/FieldSchema',
            ),
          ),
          'Compressed' => 
          array (
            'title' => 'Compressed',
            'description' => '是否启用压缩',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'InputFormat' => 
          array (
            'title' => 'InputFormat',
            'description' => '输入格式，具体参见CreateTable的API解释',
            'type' => 'string',
            'example' => 'org.apache.hadoop.hive.ql.io.avro.AvroContainerInputFormat',
          ),
          'Location' => 
          array (
            'title' => 'Location',
            'description' => '表的物理位置',
            'type' => 'string',
            'example' => 'file:///tmp/table',
          ),
          'NumBuckets' => 
          array (
            'title' => 'NumBuckets',
            'description' => '分桶的数量，如果设置了BucketCols则必填',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '10',
          ),
          'OutputFormat' => 
          array (
            'title' => 'OutputFormat',
            'description' => '输出格式，具体参见CreateTable的API解释',
            'type' => 'string',
            'example' => 'org.apache.hadoop.hive.ql.io.avro.AvroContainerOutputFormat',
          ),
          'Parameters' => 
          array (
            'title' => 'Parameters',
            'description' => '键值对的映射数组',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '键值对',
              'type' => 'string',
              'example' => 'key',
            ),
          ),
          'SerDeInfo' => 
          array (
            'description' => '序列化/反序列化信息',
            '$ref' => '#/components/schemas/SerDeInfo',
          ),
          'SkewedInfo' => 
          array (
            'description' => '一个字段中的大量重复值（数据倾斜）的设定',
            '$ref' => '#/components/schemas/SkewedInfo',
          ),
          'SortCols' => 
          array (
            'title' => 'SortCols',
            'description' => '排序字段设定',
            'type' => 'array',
            'items' => 
            array (
              'description' => '排序字段',
              '$ref' => '#/components/schemas/Order',
            ),
          ),
          'StoredAsSubDirectories' => 
          array (
            'title' => 'StoredAsSubDirectories',
            'description' => '表数据是否存储在子目录中',
            'type' => 'boolean',
            'example' => 'false',
          ),
        ),
      ),
      'StorageFormat' => 
      array (
        'title' => '存储格式',
        'description' => '存储格式分布信息',
        'type' => 'object',
        'properties' => 
        array (
          'Parquet' => 
          array (
            'title' => 'Parquet',
            'description' => 'Parquet格式文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Orc' => 
          array (
            'title' => 'Orc',
            'description' => 'Orc格式文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Delta' => 
          array (
            'title' => 'Delta',
            'description' => 'Delta格式文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Csv' => 
          array (
            'title' => 'Csv',
            'description' => 'Csv格式文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Iceberg' => 
          array (
            'title' => 'Iceberg',
            'description' => 'Iceberg格式文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Uncategorized' => 
          array (
            'title' => 'Uncategorized',
            'description' => '格式未分类文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Json' => 
          array (
            'title' => 'Json',
            'description' => 'Json格式文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Avro' => 
          array (
            'title' => 'Avro',
            'description' => 'Avro格式文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Hudi' => 
          array (
            'title' => 'Hudi',
            'description' => 'Hudi格式文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'StorageLayer' => 
      array (
        'title' => '存储分层',
        'description' => '存储分层分布信息',
        'type' => 'object',
        'properties' => 
        array (
          'Archive' => 
          array (
            'title' => '归档',
            'description' => '归档文件大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'ColdArchive' => 
          array (
            'title' => '冷归档',
            'description' => '冷归档文件大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Standard' => 
          array (
            'title' => '标准',
            'description' => '标准文件大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Infrequent' => 
          array (
            'title' => '低频',
            'description' => '低频文件大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Unknown' => 
          array (
            'title' => '未知',
            'description' => '未知',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'StorageRankDTO' => 
      array (
        'title' => '存储排名',
        'description' => '存储排名',
        'type' => 'object',
        'properties' => 
        array (
          'dbStorageRank' => 
          array (
            'title' => '库存储排名',
            'description' => '库存储排名列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '库存储排名',
              '$ref' => '#/components/schemas/DbStorageRank',
            ),
            'required' => false,
          ),
          'tableStorageRank' => 
          array (
            'title' => '表存储排名',
            'description' => '表存储排名列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '表存储排名',
              '$ref' => '#/components/schemas/TableStorageRank',
            ),
          ),
          'smallFileCntRank' => 
          array (
            'title' => '小文件数量排名',
            'description' => '小文件数量排名列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '小文件数量排名',
              '$ref' => '#/components/schemas/SmallFileCntRank',
            ),
          ),
        ),
        'required' => false,
      ),
      'StorageSummary' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'StorageSummary',
        'type' => 'object',
        'properties' => 
        array (
          'DatabaseNum' => 
          array (
            'title' => 'database num of this catalog',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'PartitionNum' => 
          array (
            'title' => 'partition num of this catalog',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'TableNum' => 
          array (
            'title' => 'table num of this catalog',
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
      ),
      'StrogeCollectTask' => 
      array (
        'title' => '采集任务',
        'description' => '采集任务',
        'type' => 'object',
        'properties' => 
        array (
          'GmtModified' => 
          array (
            'title' => '修改时间',
            'type' => 'string',
          ),
          'GmtCreate' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'Id' => 
          array (
            'title' => '任务Id',
            'type' => 'string',
          ),
          'Location' => 
          array (
            'title' => 'OSS路径',
            'type' => 'string',
          ),
          'DestinationBucketName' => 
          array (
            'title' => '目标Bucket',
            'type' => 'string',
          ),
          'DestinationPrefix' => 
          array (
            'title' => '目标Prefix',
            'type' => 'string',
          ),
          'Status' => 
          array (
            'title' => '任务状态',
            'type' => 'string',
          ),
          'DlfCreated' => 
          array (
            'title' => '是否DLF自动创建',
            'type' => 'boolean',
          ),
          'TaskType' => 
          array (
            'title' => '任务类型',
            'type' => 'string',
          ),
          'InventoryId' => 
          array (
            'title' => '清单Id',
            'type' => 'string',
          ),
        ),
      ),
      'Table' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Table',
        'type' => 'object',
        'properties' => 
        array (
          'Cascade' => 
          array (
            'title' => 'Cascade',
            'description' => '是否允许级联删除',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'CreateTime' => 
          array (
            'title' => 'CreateTime',
            'description' => '创建时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608707407',
          ),
          'CreatedBy' => 
          array (
            'title' => 'CreatedBy',
            'description' => '创建者名称',
            'type' => 'string',
            'example' => 'zhangsan',
          ),
          'DatabaseName' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'example' => 'database_test',
          ),
          'LastAccessTime' => 
          array (
            'title' => 'LastAccessTime',
            'description' => '上一次访问这个table的时间戳',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608707407',
          ),
          'LastAnalyzedTime' => 
          array (
            'title' => 'LastAnalyzedTime',
            'description' => '上一次做列级别的统计信息计算的时间戳',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608707407',
          ),
          'Owner' => 
          array (
            'title' => 'Owner',
            'description' => '负责人名称',
            'type' => 'string',
            'example' => 'zhangsan',
          ),
          'OwnerType' => 
          array (
            'title' => 'OwnerType',
            'description' => '负责人类型，填USER或ROLE或GROUP',
            'type' => 'string',
            'example' => 'USER',
          ),
          'Parameters' => 
          array (
            'description' => '与表相关的属性键值对的定义',
            '$ref' => '#/components/schemas/Parameters',
          ),
          'PartitionKeys' => 
          array (
            'description' => '分区表的列表',
            '$ref' => '#/components/schemas/ListFieldSchema',
          ),
          'Privileges' => 
          array (
            'description' => '权限设置',
            '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
          ),
          'Retention' => 
          array (
            'title' => 'Retention',
            'description' => '该表的保留时间',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '30000',
          ),
          'RewriteEnabled' => 
          array (
            'title' => 'RewriteEnabled',
            'description' => '视图是否可被重写的query使用',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'Sd' => 
          array (
            'description' => '存储描述符，包含有关此表的物理存储信息',
            '$ref' => '#/components/schemas/StorageDescriptor',
          ),
          'TableName' => 
          array (
            'title' => 'TableName',
            'description' => '表名称',
            'type' => 'string',
            'example' => 'table_name',
          ),
          'TableType' => 
          array (
            'title' => 'TableType',
            'description' => '元数据表的类型：例如MANAGED\\_TABLE，EXTERNAL\\_TABLE，VIRTUAL\\_VIEW，INDEX\\_TABLE，MATERIALIZED\\_VIEW',
            'type' => 'string',
            'example' => 'MANAGED_TABLE',
          ),
          'Temporary' => 
          array (
            'title' => 'Temporary',
            'description' => '是否临时表',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'UpdateTime' => 
          array (
            'title' => 'UpdateTime',
            'description' => '更新时间，Unix时间戳秒数',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608707407',
          ),
          'ViewExpandedText' => 
          array (
            'title' => 'ViewExpandedText',
            'description' => '视图的详细语句',
            'type' => 'string',
            'example' => '\'\'',
          ),
          'ViewOriginalText' => 
          array (
            'title' => 'ViewOriginalText',
            'description' => '视图的原始语句',
            'type' => 'string',
            'example' => '\'\'',
          ),
          'TableId' => 
          array (
            'title' => 'TableId',
            'description' => 'TableId',
            'type' => 'string',
            'example' => '59c6c8fefeaa46d8b599c1f790c59a19',
          ),
          'TableVersion' => 
          array (
            'title' => 'TableVersion',
            'description' => 'TableVersion',
            '$ref' => '#/components/schemas/TableVersion',
          ),
        ),
      ),
      'TableError' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'TableError',
        'type' => 'object',
        'properties' => 
        array (
          'ErrorDetail' => 
          array (
            'description' => '错误详细信息',
            '$ref' => '#/components/schemas/ErrorDetail',
          ),
          'TableName' => 
          array (
            'title' => 'TableName',
            'description' => '出现错误的表名',
            'type' => 'string',
            'example' => 'test',
          ),
        ),
      ),
      'TableExtended' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'TableExtended',
        'type' => 'object',
        'properties' => 
        array (
          'Cascade' => 
          array (
            'title' => 'Cascade',
            'type' => 'boolean',
          ),
          'CreateTime' => 
          array (
            'title' => 'CreateTime',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'CreatedBy' => 
          array (
            'title' => 'CreatedBy',
            'type' => 'string',
          ),
          'DatabaseName' => 
          array (
            'title' => 'DatabaseName',
            'type' => 'string',
          ),
          'LastAccessTime' => 
          array (
            'title' => 'LastAccessTime',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'LastAnalyzedTime' => 
          array (
            'title' => 'LastAnalyzedTime',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'Owner' => 
          array (
            'title' => 'Owner',
            'type' => 'string',
          ),
          'OwnerType' => 
          array (
            'title' => 'OwnerType',
            'type' => 'string',
          ),
          'Parameters' => 
          array (
            '$ref' => '#/components/schemas/Parameters',
          ),
          'PartitionKeys' => 
          array (
            '$ref' => '#/components/schemas/ListFieldSchema',
          ),
          'Privileges' => 
          array (
            'title' => 'privileges',
            'type' => 'object',
            'properties' => 
            array (
              'groupPrivileges' => 
              array (
                'title' => 'groupPrivileges',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CreateTime' => 
                      array (
                        'title' => 'CreateTime',
                        'type' => 'integer',
                        'format' => 'int32',
                      ),
                      'GrantOption' => 
                      array (
                        'title' => 'GrantOption',
                        'type' => 'boolean',
                      ),
                      'Grantor' => 
                      array (
                        'title' => 'Grantor',
                        'type' => 'string',
                      ),
                      'GrantorType' => 
                      array (
                        'title' => 'GrantorType',
                        'type' => 'string',
                      ),
                      'Privilege' => 
                      array (
                        'title' => 'Privilege',
                        'type' => 'string',
                      ),
                    ),
                  ),
                ),
              ),
              'RolePrivileges' => 
              array (
                'title' => 'rolePrivileges',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CreateTime' => 
                      array (
                        'title' => 'CreateTime',
                        'type' => 'integer',
                        'format' => 'int32',
                      ),
                      'GrantOption' => 
                      array (
                        'title' => 'GrantOption',
                        'type' => 'boolean',
                      ),
                      'Grantor' => 
                      array (
                        'title' => 'Grantor',
                        'type' => 'string',
                      ),
                      'GrantorType' => 
                      array (
                        'title' => 'GrantorType',
                        'type' => 'string',
                      ),
                      'Privilege' => 
                      array (
                        'title' => 'Privilege',
                        'type' => 'string',
                      ),
                    ),
                  ),
                ),
              ),
              'UserPrivileges' => 
              array (
                'title' => 'userPrivileges',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CreateTime' => 
                      array (
                        'title' => 'CreateTime',
                        'type' => 'integer',
                        'format' => 'int32',
                      ),
                      'GrantOption' => 
                      array (
                        'title' => 'GrantOption',
                        'type' => 'boolean',
                      ),
                      'Grantor' => 
                      array (
                        'title' => 'Grantor',
                        'type' => 'string',
                      ),
                      'GrantorType' => 
                      array (
                        'title' => 'GrantorType',
                        'type' => 'string',
                      ),
                      'Privilege' => 
                      array (
                        'title' => 'Privilege',
                        'type' => 'string',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          'Retention' => 
          array (
            'title' => 'Retention',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'RewriteEnabled' => 
          array (
            'title' => 'RewriteEnabled',
            'type' => 'boolean',
          ),
          'Sd' => 
          array (
            'title' => 'sd',
            'type' => 'object',
            'properties' => 
            array (
              'BucketCols' => 
              array (
                'title' => 'bucketCols',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'Cols' => 
              array (
                'title' => 'Cols',
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/FieldSchema',
                ),
              ),
              'Compressed' => 
              array (
                'title' => 'Compressed',
                'type' => 'boolean',
              ),
              'InputFormat' => 
              array (
                'title' => 'InputFormat',
                'type' => 'string',
              ),
              'Location' => 
              array (
                'title' => 'Location',
                'type' => 'string',
              ),
              'NumBuckets' => 
              array (
                'title' => 'NumBuckets',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'OutputFormat' => 
              array (
                'title' => 'OutputFormat',
                'type' => 'string',
              ),
              'Parameters' => 
              array (
                'title' => 'Parameters',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                ),
              ),
              'SerDeInfo' => 
              array (
                'title' => 'SerDeInfo',
                'type' => 'object',
                'properties' => 
                array (
                  'Name' => 
                  array (
                    'title' => 'Name',
                    'type' => 'string',
                  ),
                  'Parameters' => 
                  array (
                    'title' => 'Parameters',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'SerializationLib' => 
                  array (
                    'title' => 'SerializationLib',
                    'type' => 'string',
                  ),
                ),
              ),
              'SkewedInfo' => 
              array (
                'title' => 'SkewedInfo',
                'type' => 'object',
                'properties' => 
                array (
                  'SkewedColNames' => 
                  array (
                    'title' => 'SkewedColNames',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'SkewedColValueLocationMaps' => 
                  array (
                    'title' => 'SkewedColValueLocationMaps',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'SkewedColValues' => 
                  array (
                    'title' => 'SkewedColValues',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                  ),
                ),
              ),
              'SortCols' => 
              array (
                'title' => 'SortCols',
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/Order',
                ),
              ),
              'StoredAsSubDirectories' => 
              array (
                'title' => 'StoredAsSubDirectories',
                'type' => 'boolean',
              ),
            ),
          ),
          'TableName' => 
          array (
            'title' => 'TableName',
            'type' => 'string',
          ),
          'TableType' => 
          array (
            'title' => 'TableType',
            'type' => 'string',
          ),
          'Temporary' => 
          array (
            'title' => 'Temporary',
            'type' => 'boolean',
          ),
          'UpdateTime' => 
          array (
            'title' => 'UpdateTime',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'ViewExpandedText' => 
          array (
            'title' => 'ViewExpandedText',
            'type' => 'string',
          ),
          'ViewOriginalText' => 
          array (
            'title' => 'ViewOriginalText',
            'type' => 'string',
          ),
          'TableFormat' => 
          array (
            'title' => 'TableFormat',
            'type' => 'string',
          ),
        ),
      ),
      'TableInput' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Table',
        'type' => 'object',
        'properties' => 
        array (
          'Cascade' => 
          array (
            'title' => 'Cascade',
            'description' => '是否级联删除',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'CreatedBy' => 
          array (
            'title' => 'CreatedBy',
            'description' => '创建者名称',
            'type' => 'string',
            'example' => 'zhangsan',
          ),
          'DatabaseName' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'example' => 'database_test',
          ),
          'LastAccessTime' => 
          array (
            'title' => 'LastAccessTime',
            'description' => '上一次访问这个table的时间戳',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608707407',
          ),
          'LastAnalyzedTime' => 
          array (
            'title' => 'LastAnalyzedTime',
            'description' => '上一次做列级别的统计信息计算的时间戳',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1608707407',
          ),
          'Owner' => 
          array (
            'title' => 'Owner',
            'description' => '负责人名称',
            'type' => 'string',
            'example' => 'zhangsan',
          ),
          'OwnerType' => 
          array (
            'title' => 'OwnerType',
            'description' => '负责人类型，填USER或ROLE或GROUP',
            'type' => 'string',
            'example' => 'USER',
          ),
          'Parameters' => 
          array (
            'description' => '与表相关的属性键值对的定义',
            '$ref' => '#/components/schemas/Parameters',
          ),
          'PartitionKeys' => 
          array (
            'description' => '分区表的列表。 仅支持基本类型作为分区键。如果未指定任何partitionKeys，需要将partitionKeys的值设置为空列表',
            '$ref' => '#/components/schemas/ListFieldSchema',
          ),
          'Privileges' => 
          array (
            'description' => '权限设置，可以为空对象',
            '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
          ),
          'Retention' => 
          array (
            'title' => 'Retention',
            'description' => '该表的保留时间',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '30000',
          ),
          'RewriteEnabled' => 
          array (
            'title' => 'RewriteEnabled',
            'description' => '视图是否可被重写的query使用',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'Sd' => 
          array (
            'description' => '存储描述符，包含有关此表的物理存储信息',
            '$ref' => '#/components/schemas/StorageDescriptor',
          ),
          'TableName' => 
          array (
            'title' => 'TableName',
            'description' => '表名称',
            'type' => 'string',
            'example' => 'table_name',
          ),
          'TableType' => 
          array (
            'title' => 'TableType',
            'description' => '元数据表的类型：例如MANAGED\\_TABLE，EXTERNAL\\_TABLE，VIRTUAL\\_VIEW，INDEX\\_TABLE，MATERIALIZED\\_VIEW',
            'type' => 'string',
            'example' => 'MANAGED_TABLE',
          ),
          'Temporary' => 
          array (
            'title' => 'Temporary',
            'description' => '是否临时表',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'ViewExpandedText' => 
          array (
            'title' => 'ViewExpandedText',
            'description' => '视图的详细语句',
            'type' => 'string',
            'example' => '\'\'',
          ),
          'ViewOriginalText' => 
          array (
            'title' => 'ViewOriginalText',
            'description' => '视图的原始语句',
            'type' => 'string',
            'example' => '\'\'',
          ),
          'CreateTime' => 
          array (
            'title' => 'CreateTime',
            'description' => '创建时间',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1645437703000',
          ),
        ),
      ),
      'TableProfile' => 
      array (
        'title' => '表数据概况',
        'description' => '表数据概况',
        'type' => 'object',
        'properties' => 
        array (
          'PartitionCnt' => 
          array (
            'title' => '分区数量',
            'description' => '分区数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3',
          ),
          'FileCnt' => 
          array (
            'title' => '文件数量',
            'description' => '文件数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
          'ObjectCnt' => 
          array (
            'title' => '文件数量（来自 oss 或 oss-hdfs 清单）',
            'description' => '文件数量（来自 oss 或 oss-hdfs 清单）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
          'FileSize' => 
          array (
            'title' => '文件大小',
            'description' => '文件大小',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '31',
          ),
          'ObjectSize' => 
          array (
            'title' => '文件大小（来自 oss 或 oss-hdfs 清单）',
            'description' => '文件大小（来自 oss 或 oss-hdfs 清单）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '31',
          ),
          'RecordCnt' => 
          array (
            'title' => '记录数',
            'description' => '记录数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '2',
          ),
          'IsPartitioned' => 
          array (
            'title' => '是否分区表',
            'description' => '是否分区表',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'LastModifyTime' => 
          array (
            'title' => '最后更新时间',
            'description' => '最后更新时间',
            'type' => 'string',
            'example' => '2023-08-16 18:02:25',
          ),
          'LastAccessTime' => 
          array (
            'title' => '最后访问时间（来自 oss 或 oss-hdfs 审计日志）',
            'description' => '最后访问时间',
            'type' => 'string',
            'example' => '2023-08-22 12:14:42',
          ),
          'DatabaseName' => 
          array (
            'title' => '库名称',
            'description' => '库名称',
            'type' => 'string',
            'example' => 'test_db',
          ),
          'TableName' => 
          array (
            'title' => '表名称',
            'description' => '表名称',
            'type' => 'string',
            'example' => 'test_tbl',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2023-08-14 10:44:13',
          ),
          'Location' => 
          array (
            'title' => '存储位置',
            'description' => '存储位置',
            'type' => 'string',
            'example' => 'oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_db/test_tbl/',
          ),
          'AccessNum' => 
          array (
            'title' => '当天访问次数（已废弃）',
            'description' => '当天访问次数（已废弃）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'AccessNumWeekly' => 
          array (
            'title' => '一周访问次数（已废弃）',
            'description' => '一周访问次数（已废弃）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'AccessNumMonthly' => 
          array (
            'title' => '当月访问次数（已废弃）',
            'description' => '当月访问次数（已废弃）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'LastAccessNumTime' => 
          array (
            'title' => '最后访问时间（已废弃）',
            'description' => '最后访问时间（已废弃）',
            'type' => 'string',
          ),
          'LatestDate' => 
          array (
            'title' => '元仓更新时间',
            'description' => '元仓更新时间',
            'type' => 'string',
            'example' => '2023-08-30 19:16:10',
          ),
          'LatestAccessNumDate' => 
          array (
            'title' => '访问频次更新时间（已废弃）',
            'description' => '访问频次更新时间（已废弃）',
            'type' => 'string',
          ),
          'LastDdlTime' => 
          array (
            'title' => '最后DDL更新时间',
            'description' => '最后DDL更新时间',
            'type' => 'string',
            'example' => '2023-08-16 18:02:24',
          ),
          'ObjectAccessNum' => 
          array (
            'title' => '近1天文件访问次数（来自 oss-hdfs 审计日志）',
            'description' => '近1天文件访问次数（来自 oss-hdfs 审计日志）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'ObjectAccessNumWeekly' => 
          array (
            'title' => '近7天文件访问次数（来自 oss-hdfs 审计日志）',
            'description' => '近7天文件访问次数（来自 oss-hdfs 审计日志）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '18',
          ),
          'ObjectAccessNumMonthly' => 
          array (
            'title' => '近30天文件访问次数（来自 oss-hdfs 审计日志）',
            'description' => '近30天文件访问次数（来自 oss-hdfs 审计日志）',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '18',
          ),
          'DataSourceType' => 
          array (
            'title' => '存储量采集的来源类型',
            'description' => '存储量采集的来源类型',
            'type' => 'string',
            'example' => 'OSS_HDFS',
          ),
        ),
      ),
      'TableResource' => 
      array (
        'title' => 'A short description of struct',
        'description' => '鉴权资源结构-Table',
        'type' => 'object',
        'properties' => 
        array (
          'DatabaseName' => 
          array (
            'title' => 'database name',
            'description' => '数据库的名称。',
            'type' => 'string',
            'example' => 'database_test',
          ),
          'TableName' => 
          array (
            'title' => 'tablename',
            'description' => '表名称。',
            'type' => 'string',
            'example' => 'test_parquet',
          ),
        ),
      ),
      'TableStorageRank' => 
      array (
        'title' => '表存储排名',
        'description' => '表存储排名',
        'type' => 'object',
        'properties' => 
        array (
          'TableName' => 
          array (
            'title' => '表名',
            'description' => '表名称',
            'type' => 'string',
            'example' => 'store_sales',
          ),
          'Quantity' => 
          array (
            'title' => '存储量',
            'description' => '表存储大小',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '4277873188582',
          ),
          'DbName' => 
          array (
            'title' => '库名',
            'description' => '库名称',
            'type' => 'string',
            'example' => 'tpcds_text_parquet_10000',
          ),
        ),
      ),
      'TableVersion' => 
      array (
        'title' => 'A short description of struct',
        'description' => '新增表版本的结构',
        'type' => 'object',
        'properties' => 
        array (
          'Table' => 
          array (
            'description' => '元数据表详情',
            '$ref' => '#/components/schemas/Table',
          ),
          'VersionId' => 
          array (
            'title' => 'table version',
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '5',
          ),
        ),
      ),
      'TaskStatus' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'status and message',
        'type' => 'object',
        'properties' => 
        array (
          'Status' => 
          array (
            'title' => 'status of the task',
            'description' => '任务状态。',
            'type' => 'string',
            'example' => 'KILLED',
          ),
          'Message' => 
          array (
            'title' => 'message of the task',
            'description' => '任务状态消息。',
            'type' => 'string',
            'example' => 'successful',
          ),
        ),
      ),
      'UnarchiveDetail' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'ApiCallTimes' => 
          array (
            'title' => 'api调用次数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'StorageSize' => 
          array (
            'title' => '存储大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Cost' => 
          array (
            'title' => '成本',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'StorageType' => 
          array (
            'title' => '存储类型',
            'type' => 'string',
          ),
          'UnarchiveTaskStatus' => 
          array (
            'title' => '解冻状态',
            'type' => 'string',
          ),
        ),
      ),
      'UpdateTablePartitionColumnStatisticsRequest' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'UpdateTableColumnStatistics',
        'type' => 'object',
        'properties' => 
        array (
          'CatalogId' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'example' => '1344371',
          ),
          'ColumnStatisticsList' => 
          array (
            'title' => 'ColumnStatisticsList',
            'description' => '字段统计信息列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '字段统计',
              '$ref' => '#/components/schemas/ColumnStatistics',
            ),
          ),
          'DatabaseName' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'example' => 'database_test',
          ),
          'Engine' => 
          array (
            'title' => 'Engine',
            'description' => '引擎',
            'type' => 'string',
            'example' => 'MySQL',
          ),
          'TableName' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表的名称',
            'type' => 'string',
            'example' => 'tabletest',
          ),
          'ValidWriteIdList' => 
          array (
            'title' => 'ValidWriteIdList, optional',
            'description' => 'ValidWriteIdList，暂不支持，可空',
            'type' => 'string',
            'example' => '""',
          ),
          'WriteId' => 
          array (
            'title' => 'WriteId, optional',
            'description' => 'WriteId，暂不支持，可空',
            'type' => 'string',
            'example' => '""',
          ),
          'IsStatsCompliant' => 
          array (
            'title' => 'IsStatsCompliant',
            'description' => 'IsStatsCompliant',
            'type' => 'boolean',
            'example' => 'true',
          ),
        ),
      ),
      'UserRole' => 
      array (
        'description' => '数据湖元数据角色',
        'type' => 'object',
        'properties' => 
        array (
          'Role' => 
          array (
            'title' => '授权的角色',
            'description' => '角色。',
            '$ref' => '#/components/schemas/Role',
          ),
          'GrantTime' => 
          array (
            'title' => '授权时间',
            'description' => '授予时间。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => 'DatabaseWildcard',
          ),
          'User' => 
          array (
            'title' => '授权的用户',
            'description' => '用户身份。',
            '$ref' => '#/components/schemas/Principal',
          ),
        ),
      ),
      'UserRoles' => 
      array (
        'title' => 'A short description of struct',
        'description' => '数据湖元数据角色和用户relationship列表',
        'type' => 'array',
        'items' => 
        array (
          '$ref' => '#/components/schemas/UserRole',
        ),
      ),
      'Workflow' => 
      array (
        'title' => '工作流',
        'description' => '工作流',
        'type' => 'object',
        'properties' => 
        array (
          'LatestInstanceId' => 
          array (
            'title' => '实例id',
            'type' => 'string',
          ),
          'LatestInstanceStatus' => 
          array (
            'title' => '最后运行实例的状态',
            'type' => 'string',
          ),
          'LatestStartTime' => 
          array (
            'title' => '最后运行的开始时间',
            'type' => 'string',
          ),
          'LatestEndTime' => 
          array (
            'title' => '最近运行的结束时间',
            'type' => 'string',
          ),
        ),
      ),
      'WorkflowInstance' => 
      array (
        'title' => 'A short description of struct',
        'description' => '工作流运行实例',
        'type' => 'object',
        'properties' => 
        array (
          'DlfWorkflowId' => 
          array (
            'title' => '工作流id',
            'type' => 'string',
          ),
          'ExternalInstanceId' => 
          array (
            'title' => '业务流程实例id',
            'type' => 'string',
          ),
          'StartTime' => 
          array (
            'title' => '开始时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'EndTime' => 
          array (
            'title' => '结束时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Status' => 
          array (
            'title' => '运行状态',
            'type' => 'string',
          ),
          'RuntimeLogs' => 
          array (
            'title' => '运行日志',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/LogInfo',
            ),
          ),
          'BatchProgress' => 
          array (
            'title' => '执行进度',
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'CreateCatalog' => 
    array (
      'summary' => '创建数据湖数据目录。',
      'path' => '/api/metastore/catalogs',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'Body',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogInput' => 
              array (
                'description' => 'cataloginput',
                'required' => false,
                '$ref' => '#/components/schemas/CatalogInput',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Response Message',
                'description' => 'Response Message',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'BA84F8D4-5160-5544-BE76-3A306CD3A7B0',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Response Code',
            'description' => 'Response Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"BA84F8D4-5160-5544-BE76-3A306CD3A7B0\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '创建数据湖数据目录',
    ),
    'DeleteCatalog' => 
    array (
      'summary' => '删除数据目录。',
      'path' => '/api/metastore/catalogs',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => 'CatalogId',
            'type' => 'string',
            'required' => true,
            'example' => 'catalog_test',
          ),
        ),
        1 => 
        array (
          'name' => 'IsAsync',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否异步，默认同步',
            'description' => '是否异步，默认同步',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Response Message',
                'description' => 'Response Message',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Request is success or not',
                'description' => 'Request is success or not',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskId' => 
              array (
                'title' => '异步删除Catalog的taskId',
                'description' => '异步删除Catalog的taskId',
                'type' => 'string',
                'example' => 'c38206c3aca0c41332ffe49294243009',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": \\"c38206c3aca0c41332ffe49294243009\\"\\n}","type":"json"}]',
      'title' => '删除数据湖数据目录',
    ),
    'UpdateCatalog' => 
    array (
      'summary' => '更新数据目录内容。',
      'path' => '/api/metastore/catalogs',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'Body',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogInput' => 
              array (
                'description' => 'cataloginput',
                'required' => true,
                '$ref' => '#/components/schemas/CatalogInput',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => '响应编码。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Response Message',
                'description' => '返回信息。',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '64E46067-49EA-5A91-A7B1-E812E18FC243',
              ),
              'Success' => 
              array (
                'title' => 'Request is success or not',
                'description' => '请求结果，取值如下：

- true：请求成功。
- false：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"64E46067-49EA-5A91-A7B1-E812E18FC243\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '更新目录',
    ),
    'ListCatalogs' => 
    array (
      'summary' => '分页查询，获取元数据库命名空间（Catalog）列表。',
      'path' => '/api/metastore/catalogs/list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdPattern',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'catalogId',
            'description' => 'CatalogId的匹配正则',
            'type' => 'string',
            'required' => false,
            'example' => '.*',
          ),
        ),
        1 => 
        array (
          'name' => 'NextPageToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'namePattern',
            'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
            'type' => 'string',
            'required' => false,
            'example' => '‘’',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'pageSize',
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000000',
            'minimum' => '-2',
            'example' => '10',
            'default' => '1000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Catalog Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Catalogs' => 
              array (
                'title' => 'Catalogs',
                'description' => 'Catalog列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Catalog详情',
                  '$ref' => '#/components/schemas/Catalog',
                ),
                'example' => '[{"CatalogId":"xx"}]',
              ),
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Catalogs\\": [\\n    {\\n      \\"CatalogId\\": \\"\\",\\n      \\"Description\\": \\"\\",\\n      \\"LocationUri\\": \\"\\",\\n      \\"Owner\\": \\"\\",\\n      \\"CreatedBy\\": \\"\\",\\n      \\"CreateTime\\": 0,\\n      \\"UpdateTime\\": 0,\\n      \\"Status\\": \\"\\",\\n      \\"CatalogType\\": \\"\\",\\n      \\"DefaultCatalog\\": true,\\n      \\"ThriftEnabled\\": true,\\n      \\"JdbcEnabled\\": true,\\n      \\"StorageAccessConfig\\": \\"\\"\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取数据目录列表',
      'requestParamsDescription' => '- IdPattern，待查询的catalog名称，支持**.***匹配，.表示匹配一个字符，*表示匹配n个字符
- NextPageToken：分页的开始位置，第一次填写空字符串，后续的填写上一次的response中返回的NextPageToken，如果返回的NextPageToken为空字符串，那么说明无数据了。
- pagesize：一次返回的个数。',
      'responseParamsDescription' => 'Code错误码说明  
InternalError：其他类型错误，请参考Message提示',
    ),
    'GetCatalog' => 
    array (
      'summary' => '获取数据目录详情。',
      'path' => '/api/metastore/catalogs',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'catalogId',
            'description' => 'catalogId',
            'type' => 'string',
            'required' => false,
            'example' => 'catalog_test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Databases Response',
            'description' => 'Databases Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'DB07AAE9-4B88-5DEA-8F1D-4D1A9A864A85',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Catalog' => 
              array (
                'description' => 'catalog详情',
                'example' => '参考Catalog实体',
                '$ref' => '#/components/schemas/Catalog',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"DB07AAE9-4B88-5DEA-8F1D-4D1A9A864A85\\",\\n  \\"Success\\": true,\\n  \\"Catalog\\": {\\n    \\"CatalogId\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"LocationUri\\": \\"\\",\\n    \\"Owner\\": \\"\\",\\n    \\"CreatedBy\\": \\"\\",\\n    \\"CreateTime\\": 0,\\n    \\"UpdateTime\\": 0,\\n    \\"Status\\": \\"\\",\\n    \\"CatalogType\\": \\"\\",\\n    \\"DefaultCatalog\\": true,\\n    \\"ThriftEnabled\\": true,\\n    \\"JdbcEnabled\\": true,\\n    \\"StorageAccessConfig\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取目录详情',
    ),
    'CreateDatabase' => 
    array (
      'summary' => '在数据湖元数据中创建一个新的元数据库。',
      'path' => '/api/metastore/catalogs/databases',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseInput' => 
              array (
                'description' => '元数据库的详细信息',
                'required' => false,
                '$ref' => '#/components/schemas/DatabaseInput',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Response Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Response Code',
            'description' => 'Response Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '新增元数据库',
      'responseParamsDescription' => 'Code错误码说明  
InvalidObject：name/partition/column/skewCol 校验不通过  
AlreadyExists：对应的元数据库已经存在     
InternalError：其他类型错误，请参考Message提示',
    ),
    'DeleteDatabase' => 
    array (
      'summary' => '根据名称删除数据湖元数据库。',
      'path' => '/api/metastore/catalogs/databases',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Name',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'Cascade',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Cascade',
            'description' => '是否级联删除数据',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'Async',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否异步执行',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => '状态描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Response Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73201200-4C1A-4FEF-BD6B-C0DA7994FFA2',
              ),
              'Success' => 
              array (
                'title' => 'Request is success or not',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskId' => 
              array (
                'description' => '异步删除Database的taskId',
                'type' => 'string',
                'example' => 'c38206c3aca0c41332ffe49294243009',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"73201200-4C1A-4FEF-BD6B-C0DA7994FFA2\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": \\"c38206c3aca0c41332ffe49294243009\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除元数据库',
      'requestParamsDescription' => '
- Cascade：true：删除db下的表，false：不删除db下的表，如果db还存在表，那么删除失败
',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据库不存在  
InvalidOperation：元数据库仍存在表或函数，无法删除  
InternalError：其他类型错误，请参考Message提示',
    ),
    'UpdateDatabase' => 
    array (
      'summary' => '更新数据湖元数据库的详细信息。',
      'path' => '/api/metastore/catalogs/databases',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseInput' => 
              array (
                'description' => '新的元数据库',
                'required' => false,
                '$ref' => '#/components/schemas/DatabaseInput',
              ),
              'Name' => 
              array (
                'title' => 'Name',
                'description' => '修改前的元数据库名称，更新前后元数据库相同则仅更新其他Meta',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => '状态描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Response Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '161F5EFC-E97E-43C0-AACF-FF18FAC912F0',
              ),
              'Success' => 
              array (
                'title' => 'Request is success or not',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"161F5EFC-E97E-43C0-AACF-FF18FAC912F0\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新元数据库信息',
      'responseParamsDescription' => 'Code错误码说明   
AlreadyExists：新的元数据库名称已经存在    
NoSuchObject：对应的元数据库不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'GetDatabase' => 
    array (
      'summary' => '获取数据湖具体的一个元数据库的详细信息。',
      'path' => '/api/metastore/catalogs/databases',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'The name of the database to query.',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => '状态描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Database' => 
              array (
                'description' => '元数据库详情',
                '$ref' => '#/components/schemas/Database',
              ),
              'Message' => 
              array (
                'title' => 'Response Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D659761F-29C3-409D-805A-0CF33A320128',
              ),
              'Success' => 
              array (
                'title' => 'API is success or not',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Database\\": {\\n    \\"CreateTime\\": 0,\\n    \\"Description\\": \\"\\",\\n    \\"LocationUri\\": \\"oss://examplebuket/exampledb\\",\\n    \\"Name\\": \\"\\",\\n    \\"OwnerName\\": \\"\\",\\n    \\"OwnerType\\": \\"\\",\\n    \\"Parameters\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Privileges\\": {\\n      \\"GroupPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"RolePrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"UserPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"UpdateTime\\": 0,\\n    \\"CreatedBy\\": \\"\\"\\n  },\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"D659761F-29C3-409D-805A-0CF33A320128\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据库详情',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据库不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'ListDatabases' => 
    array (
      'summary' => '获取数据湖元数据库列表，分页查询，可以根据数据库名称匹配。',
      'path' => '/api/metastore/catalogs/databases/list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'catalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'NamePattern',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'namePattern',
            'description' => '数据库名称匹配的正则表达式，全部匹配则传入.*',
            'type' => 'string',
            'required' => false,
            'example' => '.*',
          ),
        ),
        2 => 
        array (
          'name' => 'NextPageToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'namePattern',
            'description' => '翻页token，由结果返回，如第一页可传入""',
            'type' => 'string',
            'required' => false,
            'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa!',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'pageSize',
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000000',
            'minimum' => '-2',
            'example' => '10',
            'default' => '1000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Databases Response',
            'description' => '返回体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态描述
',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Databases' => 
              array (
                'title' => 'Database List',
                'description' => '元数据库列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '元数据库查询结果',
                  '$ref' => '#/components/schemas/Database',
                ),
                'example' => '[{"name":"test"}]',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '
翻页token',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '558D764F-8C55-49CA-BF38-80EA532FC08F',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Databases\\": [\\n    {\\n      \\"CreateTime\\": 0,\\n      \\"Description\\": \\"\\",\\n      \\"LocationUri\\": \\"oss://examplebuket/exampledb\\",\\n      \\"Name\\": \\"\\",\\n      \\"OwnerName\\": \\"\\",\\n      \\"OwnerType\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"UpdateTime\\": 0,\\n      \\"CreatedBy\\": \\"\\"\\n    }\\n  ],\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"558D764F-8C55-49CA-BF38-80EA532FC08F\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据库列表',
      'requestParamsDescription' => '
- NamePattern，待查询的db名称，支持**.***匹配，.表示匹配一个字符，*表示匹配n个字符
- NextPageToken：分页的开始位置，第一次填写空字符串，后续的填写上一次的response中返回的NextPageToken，如果返回的NextPageToken为空字符串，那么说明无数据了。
- pagesize：一次返回的个数。',
      'responseParamsDescription' => 'Code错误码说明   
InternalError：其他类型错误，请参考Message提示',
    ),
    'CreateTable' => 
    array (
      'summary' => '新增数据湖的元数据表。',
      'path' => '/api/metastore/catalogs/databases/tables',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'TableInput' => 
              array (
                'description' => '元数据表详细信息',
                'required' => false,
                '$ref' => '#/components/schemas/TableInput',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '新增元数据表',
      'responseParamsDescription' => 'Code错误码说明  
InvalidObject：name/partition/column/skewCol 校验不通过  
AlreadyExists：对应的元数据表已经存在    
NoSuchObject：对应的元数据库不存在  
InternalError：其他类型错误，请参考Message提示',
      'extraInfo' => '注：表支持的数据格式  
创建表时用户必须指定数据格式，参数示例如下  
**avro格式：**  
 table.Parameters: {"classification":"avro"}  
 table.Sd:  
 "InputFormat":"org.apache.hadoop.hive.ql.io.avro.AvroContainerInputFormat"  
 "OutputFormat":"org.apache.hadoop.hive.ql.io.avro.AvroContainerOutputFormat"  
 "SerdeInfo":{"SerializationLib":"org.apache.hadoop.hive.serde2.avro.AvroSerDe","Parameters":{"serialization.format":"1"}}  
  **json格式:**  
 table.Parameters:{"classification":"json"}  
 table.Sd:  
 "InputFormat":"org.apache.hadoop.mapred.TextInputFormat"  
 "OutputFormat":"org.apache.hadoop.hive.ql.io.HiveIgnoreKeyTextOutputFormat"  
 "SerdeInfo":{"Parameters":{"paths":","},"SerializationLib":"org.apache.hive.hcatalog.data.JsonSerDe"}  
 **xml格式**  
 table.Parameters:{"classification":"json"}  
 "InputFormat":"com.ibm.spss.hive.serde2.xml.XmlInputFormat"  
 "OutputFormat":"org.apache.hadoop.hive.ql.io.HiveIgnoreKeyTextOutputFormat",  
 "SerdeInfo":{"Parameters":{"rowTag":""},"SerializationLib":"com.ibm.spss.hive.serde2.xml.XmlSerDe"}  
 **parquet格式**  
 table.Parameters:{"classification":"parquet"}  
 "InputFormat":"org.apache.hadoop.hive.ql.io.parquet.MapredParquetInputFormat"  
 "OutputFormat":"org.apache.hadoop.hive.ql.io.parquet.MapredParquetOutputFormat"  
 "SerdeInfo":{"Parameters":{"serialization.format":"1"},"SerializationLib":"org.apache.hadoop.hive.ql.io.parquet.serde.ParquetHiveSerDe"}  
 **csv格式**  
 table.Parameters:{"classification":"csv"}  
 "InputFormat":"org.apache.hadoop.mapred.TextInputFormat",  
 "OutputFormat":"org.apache.hadoop.hive.ql.io.HiveIgnoreKeyTextOutputFormat",  
 "SerdeInfo":{"Parameters":{"separatorChar":","},"SerializationLib":"org.apache.hadoop.hive.serde2.OpenCSVSerde"}  
 注意：separatorChar（分隔符）页面填的,比如“,” 逗号  
 **orc格式**  
 table.Parameters:{"classification":"orc"}  
 "InputFormat":"org.apache.hadoop.hive.ql.io.orc.OrcInputFormat",  
 "OutputFormat":"org.apache.hadoop.hive.ql.io.orc.OrcOutputFormat",  
 "SerdeInfo":{"Parameters":{},"SerializationLib":"org.apache.hadoop.hive.ql.io.orc.OrcSerde"}',
    ),
    'DeleteTable' => 
    array (
      'summary' => '根据名称删除数据湖的元数据表。',
      'path' => '/api/metastore/catalogs/databases/tables',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test_table_20201223',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除元数据表',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据表不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'DeleteTableColumnStatistics' => 
    array (
      'summary' => '回收数据湖元数据表的字段统计信息。',
      'path' => '/api/metastore/catalogs/databases/tables/columnstatistics',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test_table_20201223',
          ),
        ),
        3 => 
        array (
          'name' => 'ColumnNames',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '字段名称列表',
            'required' => false,
            '$ref' => '#/components/schemas/ListString',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除元数据表统计信息',
    ),
    'DeleteTableVersion' => 
    array (
      'summary' => '删除数据湖元数据表指定版本。',
      'path' => '/api/metastore/catalogs/databases/tables/versions',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test_table_20200715162543389',
          ),
        ),
        3 => 
        array (
          'name' => 'VersionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'table version id',
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除元数据表指定版本',
    ),
    'UpdateTable' => 
    array (
      'summary' => '根据名称更新数据湖元数据表信息。',
      'path' => '/api/metastore/catalogs/databases/tables',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '	
数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'SkipArchive' => 
              array (
                'title' => 'SkipArchive',
                'description' => '默认情况下，更新元数据表会创建一个新的归档版本，但如果skipArchive设置true则不会创建版本',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'TableInput' => 
              array (
                'description' => '更新后元数据表详细信息',
                'required' => false,
                '$ref' => '#/components/schemas/TableInput',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => ' 元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20201223',
              ),
              'IsAsync' => 
              array (
                'title' => 'IsAsync',
                'description' => '是否同步更新',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'AllowPartitionKeyChange' => 
              array (
                'title' => 'AllowPartitionKeyChange',
                'description' => '是否允许更新partition key',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskId' => 
              array (
                'title' => 'Async task Id',
                'description' => 'Async task Id',
                'type' => 'string',
                'example' => 'aa689782deb97265701f57324fc4ae42',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": \\"aa689782deb97265701f57324fc4ae42\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新元数据表信息',
      'requestParamsDescription' => 'IsAsync：

- true：表示异步调用，不等待后台任务返回，接口即返回结果，返回结果中带上taskid，这样客户端可以通过taskid查询任务的状态。
- false：表示同步调用，接口等待后台任务完成时，接口才返回结果。那么为false的风险就是如果后台任务需要做很长，接口会超时',
      'responseParamsDescription' => '- Code错误码说明  
- InvalidOperation：对应的元数据库/表不存在  
- InternalError：其他类型错误，请参考Message提示
- taskid：因为updatetable也会更新table的所有partitions信息，如果是异步提交，那么就会返回一个taskid，用来跟踪异步任务的执行状态。如果同步提交，那么该值无意义。
',
    ),
    'UpdateTableColumnStatistics' => 
    array (
      'summary' => '创建或者更新元数据表的字段统计信息。',
      'path' => '/api/metastore/catalogs/databases/tables/columnstatistics',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UpdateTablePartitionColumnStatisticsRequest',
          'in' => 'body',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '更新参数',
            'required' => false,
            '$ref' => '#/components/schemas/UpdateTablePartitionColumnStatisticsRequest',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'object',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新元数据表统计信息',
    ),
    'GetTable' => 
    array (
      'summary' => '获取某个数据湖元数据表的详细信息。',
      'path' => '/api/metastore/catalogs/databases/tables',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test_table_20200715162543389',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Table' => 
              array (
                'description' => '元数据表详细信息',
                '$ref' => '#/components/schemas/Table',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"Table\\": {\\n    \\"Cascade\\": true,\\n    \\"CreateTime\\": 0,\\n    \\"CreatedBy\\": \\"\\",\\n    \\"DatabaseName\\": \\"\\",\\n    \\"LastAccessTime\\": 0,\\n    \\"LastAnalyzedTime\\": 0,\\n    \\"Owner\\": \\"\\",\\n    \\"OwnerType\\": \\"\\",\\n    \\"Parameters\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"PartitionKeys\\": [\\n      {\\n        \\"Comment\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"Type\\": \\"\\"\\n      }\\n    ],\\n    \\"Privileges\\": {\\n      \\"GroupPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"RolePrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"UserPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"Retention\\": 0,\\n    \\"RewriteEnabled\\": true,\\n    \\"Sd\\": {\\n      \\"BucketCols\\": [\\n        \\"\\"\\n      ],\\n      \\"Cols\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Compressed\\": true,\\n      \\"InputFormat\\": \\"\\",\\n      \\"Location\\": \\"\\",\\n      \\"NumBuckets\\": 0,\\n      \\"OutputFormat\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"SerDeInfo\\": {\\n        \\"Name\\": \\"\\",\\n        \\"SerializationLib\\": \\"\\"\\n      },\\n      \\"SkewedInfo\\": {\\n        \\"SkewedColNames\\": [\\n          \\"\\"\\n        ],\\n        \\"SkewedColValueLocationMaps\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SkewedColValues\\": [\\n          [\\n            \\"\\"\\n          ]\\n        ]\\n      },\\n      \\"SortCols\\": [\\n        {\\n          \\"Col\\": \\"\\",\\n          \\"Order\\": 0\\n        }\\n      ],\\n      \\"StoredAsSubDirectories\\": true\\n    },\\n    \\"TableName\\": \\"\\",\\n    \\"TableType\\": \\"\\",\\n    \\"Temporary\\": true,\\n    \\"UpdateTime\\": 0,\\n    \\"ViewExpandedText\\": \\"\\",\\n    \\"ViewOriginalText\\": \\"\\",\\n    \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n    \\"TableVersion\\": {\\n      \\"Table\\": {\\n        \\"Cascade\\": true,\\n        \\"CreateTime\\": 0,\\n        \\"CreatedBy\\": \\"\\",\\n        \\"DatabaseName\\": \\"\\",\\n        \\"LastAccessTime\\": 0,\\n        \\"LastAnalyzedTime\\": 0,\\n        \\"Owner\\": \\"\\",\\n        \\"OwnerType\\": \\"\\",\\n        \\"PartitionKeys\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Privileges\\": {},\\n        \\"Retention\\": 0,\\n        \\"RewriteEnabled\\": true,\\n        \\"Sd\\": {\\n          \\"BucketCols\\": [\\n            \\"\\"\\n          ],\\n          \\"Cols\\": [],\\n          \\"Compressed\\": true,\\n          \\"InputFormat\\": \\"\\",\\n          \\"Location\\": \\"\\",\\n          \\"NumBuckets\\": 0,\\n          \\"OutputFormat\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerDeInfo\\": {\\n            \\"Name\\": \\"\\",\\n            \\"SerializationLib\\": \\"\\"\\n          },\\n          \\"SkewedInfo\\": {\\n            \\"SkewedColNames\\": [\\n              \\"\\"\\n            ],\\n            \\"SkewedColValueLocationMaps\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SkewedColValues\\": [\\n              [\\n                \\"\\"\\n              ]\\n            ]\\n          },\\n          \\"SortCols\\": [\\n            {\\n              \\"Col\\": \\"\\",\\n              \\"Order\\": 0\\n            }\\n          ],\\n          \\"StoredAsSubDirectories\\": true\\n        },\\n        \\"TableName\\": \\"\\",\\n        \\"TableType\\": \\"\\",\\n        \\"Temporary\\": true,\\n        \\"UpdateTime\\": 0,\\n        \\"ViewExpandedText\\": \\"\\",\\n        \\"ViewOriginalText\\": \\"\\",\\n        \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n        \\"TableVersion\\": {\\n          \\"Table\\": {\\n            \\"Cascade\\": true,\\n            \\"CreateTime\\": 0,\\n            \\"CreatedBy\\": \\"\\",\\n            \\"DatabaseName\\": \\"\\",\\n            \\"LastAccessTime\\": 0,\\n            \\"LastAnalyzedTime\\": 0,\\n            \\"Owner\\": \\"\\",\\n            \\"OwnerType\\": \\"\\",\\n            \\"PartitionKeys\\": [],\\n            \\"Privileges\\": {},\\n            \\"Retention\\": 0,\\n            \\"RewriteEnabled\\": true,\\n            \\"Sd\\": {\\n              \\"BucketCols\\": [\\n                \\"\\"\\n              ],\\n              \\"Cols\\": [],\\n              \\"Compressed\\": true,\\n              \\"InputFormat\\": \\"\\",\\n              \\"Location\\": \\"\\",\\n              \\"NumBuckets\\": 0,\\n              \\"OutputFormat\\": \\"\\",\\n              \\"Parameters\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SerDeInfo\\": {\\n                \\"Name\\": \\"\\",\\n                \\"SerializationLib\\": \\"\\"\\n              },\\n              \\"SkewedInfo\\": {\\n                \\"SkewedColNames\\": [\\n                  \\"\\"\\n                ],\\n                \\"SkewedColValueLocationMaps\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SkewedColValues\\": [\\n                  [\\n                    \\"\\"\\n                  ]\\n                ]\\n              },\\n              \\"SortCols\\": [\\n                {\\n                  \\"Col\\": \\"\\",\\n                  \\"Order\\": 0\\n                }\\n              ],\\n              \\"StoredAsSubDirectories\\": true\\n            },\\n            \\"TableName\\": \\"\\",\\n            \\"TableType\\": \\"\\",\\n            \\"Temporary\\": true,\\n            \\"UpdateTime\\": 0,\\n            \\"ViewExpandedText\\": \\"\\",\\n            \\"ViewOriginalText\\": \\"\\",\\n            \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n            \\"TableVersion\\": {\\n              \\"VersionId\\": 0\\n            }\\n          },\\n          \\"VersionId\\": 0\\n        }\\n      },\\n      \\"VersionId\\": 0\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据表详情',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据表不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'GetTableColumnStatistics' => 
    array (
      'summary' => '获取数据湖元数据表指定字段的统计信息。',
      'path' => '/api/metastore/catalogs/databases/tables/columnstatistics',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '	
数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test_table_20201223',
          ),
        ),
        3 => 
        array (
          'name' => 'ColumnNames',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '元数据表的字段列表',
            'required' => false,
            '$ref' => '#/components/schemas/ListString',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ColumnStatisticsObjList' => 
              array (
                'title' => 'ColumnStatisticsObjList',
                'description' => '字段统计信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '字段统计信息',
                  '$ref' => '#/components/schemas/ColumnStatisticsObj',
                ),
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"ColumnStatisticsObjList\\": [\\n    {\\n      \\"ColumnName\\": \\"\\",\\n      \\"ColumnType\\": \\"\\",\\n      \\"ColumnStatisticsData\\": {\\n        \\"StatisticsData\\": \\"\\",\\n        \\"StatisticsType\\": \\"\\"\\n      }\\n    }\\n  ],\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据表字段的统计信息',
    ),
    'GetTableVersion' => 
    array (
      'summary' => '获取数据湖元数据表的一个指定版本。',
      'path' => '/api/metastore/catalogs/databases/tables/versions',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test_table_20200715162543389',
          ),
        ),
        3 => 
        array (
          'name' => 'VersionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Table Version',
            'description' => '元数据表版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TableVersion' => 
              array (
                'description' => '带版本信息的元数据表',
                '$ref' => '#/components/schemas/TableVersion',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableVersion\\": {\\n    \\"Table\\": {\\n      \\"Cascade\\": true,\\n      \\"CreateTime\\": 0,\\n      \\"CreatedBy\\": \\"\\",\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Owner\\": \\"\\",\\n      \\"OwnerType\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"PartitionKeys\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Retention\\": 0,\\n      \\"RewriteEnabled\\": true,\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"TableType\\": \\"\\",\\n      \\"Temporary\\": true,\\n      \\"UpdateTime\\": 0,\\n      \\"ViewExpandedText\\": \\"\\",\\n      \\"ViewOriginalText\\": \\"\\",\\n      \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n      \\"TableVersion\\": {\\n        \\"Table\\": {\\n          \\"Cascade\\": true,\\n          \\"CreateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\",\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Owner\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"PartitionKeys\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Privileges\\": {},\\n          \\"Retention\\": 0,\\n          \\"RewriteEnabled\\": true,\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"TableType\\": \\"\\",\\n          \\"Temporary\\": true,\\n          \\"UpdateTime\\": 0,\\n          \\"ViewExpandedText\\": \\"\\",\\n          \\"ViewOriginalText\\": \\"\\",\\n          \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n          \\"TableVersion\\": {\\n            \\"Table\\": {\\n              \\"Cascade\\": true,\\n              \\"CreateTime\\": 0,\\n              \\"CreatedBy\\": \\"\\",\\n              \\"DatabaseName\\": \\"\\",\\n              \\"LastAccessTime\\": 0,\\n              \\"LastAnalyzedTime\\": 0,\\n              \\"Owner\\": \\"\\",\\n              \\"OwnerType\\": \\"\\",\\n              \\"PartitionKeys\\": [],\\n              \\"Privileges\\": {},\\n              \\"Retention\\": 0,\\n              \\"RewriteEnabled\\": true,\\n              \\"Sd\\": {\\n                \\"BucketCols\\": [\\n                  \\"\\"\\n                ],\\n                \\"Cols\\": [],\\n                \\"Compressed\\": true,\\n                \\"InputFormat\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"NumBuckets\\": 0,\\n                \\"OutputFormat\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SerDeInfo\\": {\\n                  \\"Name\\": \\"\\",\\n                  \\"SerializationLib\\": \\"\\"\\n                },\\n                \\"SkewedInfo\\": {\\n                  \\"SkewedColNames\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"SkewedColValueLocationMaps\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SkewedColValues\\": [\\n                    [\\n                      \\"\\"\\n                    ]\\n                  ]\\n                },\\n                \\"SortCols\\": [\\n                  {\\n                    \\"Col\\": \\"\\",\\n                    \\"Order\\": 0\\n                  }\\n                ],\\n                \\"StoredAsSubDirectories\\": true\\n              },\\n              \\"TableName\\": \\"\\",\\n              \\"TableType\\": \\"\\",\\n              \\"Temporary\\": true,\\n              \\"UpdateTime\\": 0,\\n              \\"ViewExpandedText\\": \\"\\",\\n              \\"ViewOriginalText\\": \\"\\",\\n              \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\"\\n            },\\n            \\"VersionId\\": 0\\n          }\\n        },\\n        \\"VersionId\\": 0\\n      }\\n    },\\n    \\"VersionId\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据表指定版本',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据表不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'ListTableNames' => 
    array (
      'summary' => '仅用于查询数据湖元数据表的名称列表。',
      'path' => '/api/metastore/catalogs/databases/tables/names',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '	
数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'TableNamePattern',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableNamePattern',
            'description' => '元数据表匹配正则表达式',
            'type' => 'string',
            'required' => false,
            'example' => '.*',
          ),
        ),
        2 => 
        array (
          'name' => 'NextPageToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'NextPageToken',
            'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
            'type' => 'string',
            'required' => false,
            'example' => '\'\'',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageSize',
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000000',
            'minimum' => '-1',
            'example' => '10',
            'default' => '1000',
          ),
        ),
        4 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        5 => 
        array (
          'name' => 'TableType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableType filter',
            'description' => '元数据表的类型：例如MANAGED\\_TABLE，EXTERNAL\\_TABLE，VIRTUAL\\_VIEW，INDEX\\_TABLE，MATERIALIZED\\_VIEW',
            'type' => 'string',
            'required' => false,
            'example' => 'MANAGED_TABLE',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TableNames' => 
              array (
                'title' => 'TableNames',
                'description' => '元数据表的名称列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '元数据表的名称',
                  'type' => 'string',
                  'example' => 'table1',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableNames\\": [\\n    \\"table1\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据表名称列表',
      'responseParamsDescription' => 'Code错误码说明   
InternalError：其他类型错误，请参考Message提示',
    ),
    'ListTables' => 
    array (
      'summary' => '获取数据湖元数据表列表。',
      'path' => '/api/metastore/databases/tables/list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'TableNamePattern',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableNamePattern',
            'description' => '元数据表名称，正则表达式匹配',
            'type' => 'string',
            'required' => false,
            'example' => '.*',
          ),
        ),
        2 => 
        array (
          'name' => 'NextPageToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'NextPageToken',
            'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
            'type' => 'string',
            'required' => false,
            'example' => '\'\'',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageSize',
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000000',
            'minimum' => '-1',
            'example' => '10',
            'default' => '1000',
          ),
        ),
        4 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        5 => 
        array (
          'name' => 'TableType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableType filter',
            'description' => '元数据表的类型：例如MANAGED\\_TABLE，EXTERNAL\\_TABLE，VIRTUAL\\_VIEW，INDEX\\_TABLE，MATERIALIZED\\_VIEW',
            'type' => 'string',
            'required' => false,
            'example' => 'MANAGED_TABLE',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'RequestId' => 
              array (
                'title' => ' RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Tables' => 
              array (
                'title' => 'Tables',
                'description' => '元数据表列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '元数据表详细信息',
                  '$ref' => '#/components/schemas/Table',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"Tables\\": [\\n    {\\n      \\"Cascade\\": true,\\n      \\"CreateTime\\": 0,\\n      \\"CreatedBy\\": \\"\\",\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Owner\\": \\"\\",\\n      \\"OwnerType\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"PartitionKeys\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Retention\\": 0,\\n      \\"RewriteEnabled\\": true,\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"TableType\\": \\"\\",\\n      \\"Temporary\\": true,\\n      \\"UpdateTime\\": 0,\\n      \\"ViewExpandedText\\": \\"\\",\\n      \\"ViewOriginalText\\": \\"\\",\\n      \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n      \\"TableVersion\\": {\\n        \\"Table\\": {\\n          \\"Cascade\\": true,\\n          \\"CreateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\",\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Owner\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"PartitionKeys\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Privileges\\": {},\\n          \\"Retention\\": 0,\\n          \\"RewriteEnabled\\": true,\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"TableType\\": \\"\\",\\n          \\"Temporary\\": true,\\n          \\"UpdateTime\\": 0,\\n          \\"ViewExpandedText\\": \\"\\",\\n          \\"ViewOriginalText\\": \\"\\",\\n          \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n          \\"TableVersion\\": {\\n            \\"Table\\": {\\n              \\"Cascade\\": true,\\n              \\"CreateTime\\": 0,\\n              \\"CreatedBy\\": \\"\\",\\n              \\"DatabaseName\\": \\"\\",\\n              \\"LastAccessTime\\": 0,\\n              \\"LastAnalyzedTime\\": 0,\\n              \\"Owner\\": \\"\\",\\n              \\"OwnerType\\": \\"\\",\\n              \\"PartitionKeys\\": [],\\n              \\"Privileges\\": {},\\n              \\"Retention\\": 0,\\n              \\"RewriteEnabled\\": true,\\n              \\"Sd\\": {\\n                \\"BucketCols\\": [\\n                  \\"\\"\\n                ],\\n                \\"Cols\\": [],\\n                \\"Compressed\\": true,\\n                \\"InputFormat\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"NumBuckets\\": 0,\\n                \\"OutputFormat\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SerDeInfo\\": {\\n                  \\"Name\\": \\"\\",\\n                  \\"SerializationLib\\": \\"\\"\\n                },\\n                \\"SkewedInfo\\": {\\n                  \\"SkewedColNames\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"SkewedColValueLocationMaps\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SkewedColValues\\": [\\n                    [\\n                      \\"\\"\\n                    ]\\n                  ]\\n                },\\n                \\"SortCols\\": [\\n                  {\\n                    \\"Col\\": \\"\\",\\n                    \\"Order\\": 0\\n                  }\\n                ],\\n                \\"StoredAsSubDirectories\\": true\\n              },\\n              \\"TableName\\": \\"\\",\\n              \\"TableType\\": \\"\\",\\n              \\"Temporary\\": true,\\n              \\"UpdateTime\\": 0,\\n              \\"ViewExpandedText\\": \\"\\",\\n              \\"ViewOriginalText\\": \\"\\",\\n              \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n              \\"TableVersion\\": {\\n                \\"VersionId\\": 0\\n              }\\n            },\\n            \\"VersionId\\": 0\\n          }\\n        },\\n        \\"VersionId\\": 0\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据表列表',
      'responseParamsDescription' => 'Code错误码说明   
InternalError：其他类型错误，请参考Message提示',
    ),
    'ListTableVersions' => 
    array (
      'summary' => '分页查询数据湖元数据表指定版本的列表。',
      'path' => '/api/metastore/catalogs/databases/tables/versions/list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称 ',
            'type' => 'string',
            'required' => false,
            'example' => 'test_table_20200715162543389',
          ),
        ),
        3 => 
        array (
          'name' => 'NextPageToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'NextPageToken',
            'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
            'type' => 'string',
            'required' => false,
            'example' => '\'\'',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'max result of this query',
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TableVersions' => 
              array (
                'title' => 'table versions',
                'description' => '带版本的元数据表列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '带版本的元数据表',
                  'example' => '{"table":{},"versionId":123}',
                  '$ref' => '#/components/schemas/TableVersion',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableVersions\\": [\\n    {\\n      \\"Table\\": {\\n        \\"Cascade\\": true,\\n        \\"CreateTime\\": 0,\\n        \\"CreatedBy\\": \\"\\",\\n        \\"DatabaseName\\": \\"\\",\\n        \\"LastAccessTime\\": 0,\\n        \\"LastAnalyzedTime\\": 0,\\n        \\"Owner\\": \\"\\",\\n        \\"OwnerType\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"PartitionKeys\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Privileges\\": {\\n          \\"GroupPrivileges\\": {\\n            \\"key\\": [\\n              {\\n                \\"CreateTime\\": 0,\\n                \\"GrantOption\\": true,\\n                \\"Grantor\\": \\"\\",\\n                \\"GrantorType\\": \\"\\",\\n                \\"Privilege\\": \\"\\"\\n              }\\n            ]\\n          },\\n          \\"RolePrivileges\\": {\\n            \\"key\\": [\\n              {\\n                \\"CreateTime\\": 0,\\n                \\"GrantOption\\": true,\\n                \\"Grantor\\": \\"\\",\\n                \\"GrantorType\\": \\"\\",\\n                \\"Privilege\\": \\"\\"\\n              }\\n            ]\\n          },\\n          \\"UserPrivileges\\": {\\n            \\"key\\": [\\n              {\\n                \\"CreateTime\\": 0,\\n                \\"GrantOption\\": true,\\n                \\"Grantor\\": \\"\\",\\n                \\"GrantorType\\": \\"\\",\\n                \\"Privilege\\": \\"\\"\\n              }\\n            ]\\n          }\\n        },\\n        \\"Retention\\": 0,\\n        \\"RewriteEnabled\\": true,\\n        \\"Sd\\": {\\n          \\"BucketCols\\": [\\n            \\"\\"\\n          ],\\n          \\"Cols\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Parameters\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Compressed\\": true,\\n          \\"InputFormat\\": \\"\\",\\n          \\"Location\\": \\"\\",\\n          \\"NumBuckets\\": 0,\\n          \\"OutputFormat\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerDeInfo\\": {\\n            \\"Name\\": \\"\\",\\n            \\"SerializationLib\\": \\"\\"\\n          },\\n          \\"SkewedInfo\\": {\\n            \\"SkewedColNames\\": [\\n              \\"\\"\\n            ],\\n            \\"SkewedColValueLocationMaps\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SkewedColValues\\": [\\n              [\\n                \\"\\"\\n              ]\\n            ]\\n          },\\n          \\"SortCols\\": [\\n            {\\n              \\"Col\\": \\"\\",\\n              \\"Order\\": 0\\n            }\\n          ],\\n          \\"StoredAsSubDirectories\\": true\\n        },\\n        \\"TableName\\": \\"\\",\\n        \\"TableType\\": \\"\\",\\n        \\"Temporary\\": true,\\n        \\"UpdateTime\\": 0,\\n        \\"ViewExpandedText\\": \\"\\",\\n        \\"ViewOriginalText\\": \\"\\",\\n        \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n        \\"TableVersion\\": {\\n          \\"Table\\": {\\n            \\"Cascade\\": true,\\n            \\"CreateTime\\": 0,\\n            \\"CreatedBy\\": \\"\\",\\n            \\"DatabaseName\\": \\"\\",\\n            \\"LastAccessTime\\": 0,\\n            \\"LastAnalyzedTime\\": 0,\\n            \\"Owner\\": \\"\\",\\n            \\"OwnerType\\": \\"\\",\\n            \\"PartitionKeys\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Privileges\\": {},\\n            \\"Retention\\": 0,\\n            \\"RewriteEnabled\\": true,\\n            \\"Sd\\": {\\n              \\"BucketCols\\": [\\n                \\"\\"\\n              ],\\n              \\"Cols\\": [],\\n              \\"Compressed\\": true,\\n              \\"InputFormat\\": \\"\\",\\n              \\"Location\\": \\"\\",\\n              \\"NumBuckets\\": 0,\\n              \\"OutputFormat\\": \\"\\",\\n              \\"Parameters\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SerDeInfo\\": {\\n                \\"Name\\": \\"\\",\\n                \\"SerializationLib\\": \\"\\"\\n              },\\n              \\"SkewedInfo\\": {\\n                \\"SkewedColNames\\": [\\n                  \\"\\"\\n                ],\\n                \\"SkewedColValueLocationMaps\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SkewedColValues\\": [\\n                  [\\n                    \\"\\"\\n                  ]\\n                ]\\n              },\\n              \\"SortCols\\": [\\n                {\\n                  \\"Col\\": \\"\\",\\n                  \\"Order\\": 0\\n                }\\n              ],\\n              \\"StoredAsSubDirectories\\": true\\n            },\\n            \\"TableName\\": \\"\\",\\n            \\"TableType\\": \\"\\",\\n            \\"Temporary\\": true,\\n            \\"UpdateTime\\": 0,\\n            \\"ViewExpandedText\\": \\"\\",\\n            \\"ViewOriginalText\\": \\"\\",\\n            \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n            \\"TableVersion\\": {\\n              \\"Table\\": {\\n                \\"Cascade\\": true,\\n                \\"CreateTime\\": 0,\\n                \\"CreatedBy\\": \\"\\",\\n                \\"DatabaseName\\": \\"\\",\\n                \\"LastAccessTime\\": 0,\\n                \\"LastAnalyzedTime\\": 0,\\n                \\"Owner\\": \\"\\",\\n                \\"OwnerType\\": \\"\\",\\n                \\"PartitionKeys\\": [],\\n                \\"Privileges\\": {},\\n                \\"Retention\\": 0,\\n                \\"RewriteEnabled\\": true,\\n                \\"Sd\\": {\\n                  \\"BucketCols\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"Cols\\": [],\\n                  \\"Compressed\\": true,\\n                  \\"InputFormat\\": \\"\\",\\n                  \\"Location\\": \\"\\",\\n                  \\"NumBuckets\\": 0,\\n                  \\"OutputFormat\\": \\"\\",\\n                  \\"Parameters\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SerDeInfo\\": {\\n                    \\"Name\\": \\"\\",\\n                    \\"SerializationLib\\": \\"\\"\\n                  },\\n                  \\"SkewedInfo\\": {\\n                    \\"SkewedColNames\\": [\\n                      \\"\\"\\n                    ],\\n                    \\"SkewedColValueLocationMaps\\": {\\n                      \\"key\\": \\"\\"\\n                    },\\n                    \\"SkewedColValues\\": [\\n                      [\\n                        \\"\\"\\n                      ]\\n                    ]\\n                  },\\n                  \\"SortCols\\": [\\n                    {\\n                      \\"Col\\": \\"\\",\\n                      \\"Order\\": 0\\n                    }\\n                  ],\\n                  \\"StoredAsSubDirectories\\": true\\n                },\\n                \\"TableName\\": \\"\\",\\n                \\"TableType\\": \\"\\",\\n                \\"Temporary\\": true,\\n                \\"UpdateTime\\": 0,\\n                \\"ViewExpandedText\\": \\"\\",\\n                \\"ViewOriginalText\\": \\"\\",\\n                \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\"\\n              },\\n              \\"VersionId\\": 0\\n            }\\n          },\\n          \\"VersionId\\": 0\\n        }\\n      },\\n      \\"VersionId\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据表版本列表',
      'responseParamsDescription' => 'Code错误码说明   
NoSuchObject：对应的元数据表不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'GetTableProfile' => 
    array (
      'summary' => '获取表数据概况的详细信息。',
      'path' => '/webapi/metastorehouse/catalog/database/tableprofile',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据目录ID，默认填写主账号ID',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_db',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_tbl',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '错误码',
                'type' => 'string',
                'example' => '-',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '-',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '97434FA4-A6B2-1AE4-A174-76964F29C759',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '请求是否成功。取值如下：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TableProfile' => 
              array (
                'description' => '表数据概况',
                '$ref' => '#/components/schemas/TableProfile',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"-\\",\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"97434FA4-A6B2-1AE4-A174-76964F29C759\\",\\n  \\"Success\\": true,\\n  \\"TableProfile\\": {\\n    \\"PartitionCnt\\": 3,\\n    \\"FileCnt\\": 5,\\n    \\"ObjectCnt\\": 5,\\n    \\"FileSize\\": 31,\\n    \\"ObjectSize\\": 31,\\n    \\"RecordCnt\\": 0,\\n    \\"IsPartitioned\\": true,\\n    \\"LastModifyTime\\": \\"2023-08-16 18:02:25\\",\\n    \\"LastAccessTime\\": \\"2023-08-22 12:14:42\\",\\n    \\"DatabaseName\\": \\"test_db\\",\\n    \\"TableName\\": \\"test_tbl\\",\\n    \\"CreateTime\\": \\"2023-08-14 10:44:13\\",\\n    \\"Location\\": \\"oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_db/test_tbl/\\",\\n    \\"AccessNum\\": 0,\\n    \\"AccessNumWeekly\\": 0,\\n    \\"AccessNumMonthly\\": 0,\\n    \\"LastAccessNumTime\\": \\"\\",\\n    \\"LatestDate\\": \\"2023-08-30 19:16:10\\",\\n    \\"LatestAccessNumDate\\": \\"\\",\\n    \\"LastDdlTime\\": \\"2023-08-16 18:02:24\\",\\n    \\"ObjectAccessNum\\": 0,\\n    \\"ObjectAccessNumWeekly\\": 18,\\n    \\"ObjectAccessNumMonthly\\": 18,\\n    \\"DataSourceType\\": \\"OSS_HDFS\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTableProfileResponse>\\n    <TableProfile>\\n        <ObjectCnt>5</ObjectCnt>\\n        <AccessNum>0</AccessNum>\\n        <ObjectAccessNumMonthly>18</ObjectAccessNumMonthly>\\n        <ObjectAccessNumWeekly>0</ObjectAccessNumWeekly>\\n        <LastDdlTime>2023-08-16 18:02:24</LastDdlTime>\\n        <CreateTime>2023-08-14 10:44:13</CreateTime>\\n        <ObjectSize>31</ObjectSize>\\n        <DatabaseName>test_db</DatabaseName>\\n        <FileCnt>2</FileCnt>\\n        <LastModifyTime>2023-08-16 18:02:25</LastModifyTime>\\n        <LastAccessTime>2023-08-22 12:14:42</LastAccessTime>\\n        <LatestDate>2023-08-30 19:16:10</LatestDate>\\n        <ObjectAccessNum>0</ObjectAccessNum>\\n        <TableName>test_tbl</TableName>\\n        <AccessNumMonthly>0</AccessNumMonthly>\\n        <PartitionCnt>3</PartitionCnt>\\n        <AccessNumWeekly>0</AccessNumWeekly>\\n        <DataSourceType>OSS_HDFS</DataSourceType>\\n        <FileSize>31</FileSize>\\n    </TableProfile>\\n    <RequestId>97434FA4-A6B2-1AE4-A174-76964F29C759</RequestId>\\n    <Success>true</Success>\\n</GetTableProfileResponse>","errorExample":""}]',
      'title' => '获取表数据概况',
      'description' => '使用数据概况需要先将该表的 OSS Bucket 进行 Location 托管。',
    ),
    'RenameTable' => 
    array (
      'summary' => '仅用于更新数据湖元数据表的名称。',
      'path' => '/api/metastore/catalogs/databases/tables/rename',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'TableInput' => 
              array (
                'description' => '元数据表对象，注意仅需填写TableName即可',
                'required' => false,
                '$ref' => '#/components/schemas/TableInput',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20201223',
              ),
              'IsAsync' => 
              array (
                'title' => 'IsAsync',
                'description' => '是否同步更新',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskId' => 
              array (
                'title' => 'Async task Id',
                'description' => 'Async task Id',
                'type' => 'string',
                'example' => 'c38206c3aca0c41332ffe49294243009',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TaskId\\": \\"c38206c3aca0c41332ffe49294243009\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新元数据表的名称',
      'requestParamsDescription' => 'IsAsync：
默认是false

- true：表示异步调用，不等待后台任务返回，接口即返回结果，返回结果中带上taskid，这样客户端可以通过taskid查询任务的状态。
- false：表示同步调用，接口等待后台任务完成时，接口才返回结果。那么为false的风险就是如果后台任务需要做很长，接口会超时',
      'responseParamsDescription' => 'Code错误码说明   
InvalidOperation：对应的元数据库/表等不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'BatchGetTables' => 
    array (
      'summary' => '批量获取某个数据湖元数据表的详细信息。',
      'path' => '/api/metastore/catalogs/databases/tables/batchget',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'TableNames' => 
              array (
                'description' => '元数据表名称',
                'required' => false,
                '$ref' => '#/components/schemas/ListString',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TableErrors' => 
              array (
                'title' => 'TableErrors',
                'description' => '报错信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '报错信息',
                  '$ref' => '#/components/schemas/TableError',
                ),
              ),
              'Tables' => 
              array (
                'title' => 'Tables',
                'description' => '查询出的元数据表列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '元数据表',
                  '$ref' => '#/components/schemas/Table',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"TableName\\": \\"\\"\\n    }\\n  ],\\n  \\"Tables\\": [\\n    {\\n      \\"Cascade\\": true,\\n      \\"CreateTime\\": 0,\\n      \\"CreatedBy\\": \\"\\",\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Owner\\": \\"\\",\\n      \\"OwnerType\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"PartitionKeys\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Retention\\": 0,\\n      \\"RewriteEnabled\\": true,\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"TableType\\": \\"\\",\\n      \\"Temporary\\": true,\\n      \\"UpdateTime\\": 0,\\n      \\"ViewExpandedText\\": \\"\\",\\n      \\"ViewOriginalText\\": \\"\\",\\n      \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n      \\"TableVersion\\": {\\n        \\"Table\\": {\\n          \\"Cascade\\": true,\\n          \\"CreateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\",\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Owner\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"PartitionKeys\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Privileges\\": {},\\n          \\"Retention\\": 0,\\n          \\"RewriteEnabled\\": true,\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"TableType\\": \\"\\",\\n          \\"Temporary\\": true,\\n          \\"UpdateTime\\": 0,\\n          \\"ViewExpandedText\\": \\"\\",\\n          \\"ViewOriginalText\\": \\"\\",\\n          \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n          \\"TableVersion\\": {\\n            \\"Table\\": {\\n              \\"Cascade\\": true,\\n              \\"CreateTime\\": 0,\\n              \\"CreatedBy\\": \\"\\",\\n              \\"DatabaseName\\": \\"\\",\\n              \\"LastAccessTime\\": 0,\\n              \\"LastAnalyzedTime\\": 0,\\n              \\"Owner\\": \\"\\",\\n              \\"OwnerType\\": \\"\\",\\n              \\"PartitionKeys\\": [],\\n              \\"Privileges\\": {},\\n              \\"Retention\\": 0,\\n              \\"RewriteEnabled\\": true,\\n              \\"Sd\\": {\\n                \\"BucketCols\\": [\\n                  \\"\\"\\n                ],\\n                \\"Cols\\": [],\\n                \\"Compressed\\": true,\\n                \\"InputFormat\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"NumBuckets\\": 0,\\n                \\"OutputFormat\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SerDeInfo\\": {\\n                  \\"Name\\": \\"\\",\\n                  \\"SerializationLib\\": \\"\\"\\n                },\\n                \\"SkewedInfo\\": {\\n                  \\"SkewedColNames\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"SkewedColValueLocationMaps\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SkewedColValues\\": [\\n                    [\\n                      \\"\\"\\n                    ]\\n                  ]\\n                },\\n                \\"SortCols\\": [\\n                  {\\n                    \\"Col\\": \\"\\",\\n                    \\"Order\\": 0\\n                  }\\n                ],\\n                \\"StoredAsSubDirectories\\": true\\n              },\\n              \\"TableName\\": \\"\\",\\n              \\"TableType\\": \\"\\",\\n              \\"Temporary\\": true,\\n              \\"UpdateTime\\": 0,\\n              \\"ViewExpandedText\\": \\"\\",\\n              \\"ViewOriginalText\\": \\"\\",\\n              \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n              \\"TableVersion\\": {\\n                \\"VersionId\\": 0\\n              }\\n            },\\n            \\"VersionId\\": 0\\n          }\\n        },\\n        \\"VersionId\\": 0\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量获取元数据表详情',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据表不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'BatchCreateTables' => 
    array (
      'summary' => '批量新增数据湖的元数据表。',
      'path' => '/api/metastore/catalogs/databases/tables/batchcreate',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '	
数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'IfNotExists' => 
              array (
                'title' => 'IfNotExists',
                'description' => '如果相同名字的表已经存在，是否忽略异常',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'TableInputs' => 
              array (
                'title' => 'TableInputs',
                'description' => '元数据表列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '元数据表详细信息',
                  'required' => false,
                  '$ref' => '#/components/schemas/TableInput',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回结构',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '响应代码',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => '响应消息',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TableErrors' => 
              array (
                'title' => '表出错信息',
                'description' => '创建Table的错误信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '创建Table的错误信息',
                  '$ref' => '#/components/schemas/TableError',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"TableName\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量新增元数据表',
      'responseParamsDescription' => 'Code错误码说明  
InvalidObject：name/partition/column/skewCol 校验不通过  
AlreadyExists：对应的元数据表已经存在    
NoSuchObject：对应的元数据库不存在  
InternalError：其他类型错误，请参考Message提示
',
    ),
    'BatchDeleteTables' => 
    array (
      'summary' => '根据名称批量删除数据湖的元数据表。',
      'path' => '/api/metastore/catalogs/databases/tables/batchdelete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'IfExists' => 
              array (
                'title' => 'IfExists',
                'description' => 'IfExists',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'TableNames' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '元数据表名称',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test_table_20201223',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TableErrors' => 
              array (
                'title' => 'PartitionErrors',
                'description' => '报错信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '报错信息',
                  '$ref' => '#/components/schemas/TableError',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"TableName\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量删除元数据表',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据表不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'BatchDeleteTableVersions' => 
    array (
      'summary' => '批量删除数据湖元数据表指定版本。',
      'path' => '/api/metastore/catalogs/databases/tables/versions/batchdelete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20200715162543389',
              ),
              'VersionIds' => 
              array (
                'title' => 'Table versionIds',
                'description' => '版本号列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '版本号',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量删除元数据表版本',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据表不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'BatchUpdateTables' => 
    array (
      'summary' => '批量更新数据湖元数据表详细信息。',
      'path' => '/api/metastore/catalogs/databases/tables/batchupdate',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'TableInputs' => 
              array (
                'title' => 'TableInputs',
                'description' => '更新后元数据表详细信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '更新后元数据表详细信息',
                  'required' => false,
                  '$ref' => '#/components/schemas/TableInput',
                ),
                'required' => false,
              ),
              'IsAsync' => 
              array (
                'title' => '是否异步',
                'description' => '表是否为异步更新：-true：是-false：否',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回结构',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '响应代码',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => '响应消息',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TableErrors' => 
              array (
                'title' => '表出错信息',
                'description' => '报错信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '报错信息',
                  '$ref' => '#/components/schemas/TableError',
                ),
                'example' => '{"ErrorDetails":{},"TableName":"test"}',
              ),
              'TaskId' => 
              array (
                'title' => '异步更新 taskId',
                'description' => '异步更新 taskId',
                'type' => 'string',
                'example' => 'f8deec55f54ac566e7ec8944fbe01588',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TableErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"TableName\\": \\"\\"\\n    }\\n  ],\\n  \\"TaskId\\": \\"f8deec55f54ac566e7ec8944fbe01588\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量更新元数据表信息',
      'requestParamsDescription' => 'IsAsync：

- true：表示异步调用，不等待后台任务返回，接口即返回结果，返回结果中带上taskid，这样客户端可以通过taskid查询任务的状态。
- false：表示同步调用，接口等待后台任务完成时，接口才返回结果。那么为false的风险就是如果后台任务需要做很长，接口会超时',
      'responseParamsDescription' => 'Code错误码说明  
InvalidOperation：输入的元数据表不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'CreatePartition' => 
    array (
      'summary' => '为数据湖的元数据表，新增一个分区。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'IfNotExists' => 
              array (
                'title' => 'IfNotExists',
                'description' => '如果相同名字的分区已经存在，是否忽略异常',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'NeedResult' => 
              array (
                'title' => 'NeedResult',
                'description' => '是否需要返回分区信息，为true时结果会返回Partitions',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'PartitionInput' => 
              array (
                'description' => '分区输入信息',
                'required' => false,
                '$ref' => '#/components/schemas/PartitionInput',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20201223',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'Partition' => 
              array (
                'description' => '分区结果，NeedResult=true时返回',
                '$ref' => '#/components/schemas/Partition',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Partition\\": {\\n    \\"CreateTime\\": 0,\\n    \\"DatabaseName\\": \\"\\",\\n    \\"LastAccessTime\\": 0,\\n    \\"LastAnalyzedTime\\": 0,\\n    \\"Parameters\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Privileges\\": {\\n      \\"GroupPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"RolePrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"UserPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"Sd\\": {\\n      \\"BucketCols\\": [\\n        \\"\\"\\n      ],\\n      \\"Cols\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Compressed\\": true,\\n      \\"InputFormat\\": \\"\\",\\n      \\"Location\\": \\"\\",\\n      \\"NumBuckets\\": 0,\\n      \\"OutputFormat\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"SerDeInfo\\": {\\n        \\"Name\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerializationLib\\": \\"\\"\\n      },\\n      \\"SkewedInfo\\": {\\n        \\"SkewedColNames\\": [\\n          \\"\\"\\n        ],\\n        \\"SkewedColValueLocationMaps\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SkewedColValues\\": [\\n          [\\n            \\"\\"\\n          ]\\n        ]\\n      },\\n      \\"SortCols\\": [\\n        {\\n          \\"Col\\": \\"\\",\\n          \\"Order\\": 0\\n        }\\n      ],\\n      \\"StoredAsSubDirectories\\": true\\n    },\\n    \\"TableName\\": \\"\\",\\n    \\"Values\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '新增元数据表的分区',
      'responseParamsDescription' => 'Code错误码说明  
InvalidObject：对应的元数据库/表找不到  
AlreadyExists：对应的分区已经存在    
InternalError：其他类型错误，请参考Message提示',
    ),
    'DeletePartition' => 
    array (
      'summary' => '删除数据湖元数据表的指定分区。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/delete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'IfExists' => 
              array (
                'title' => 'IfExists',
                'description' => '如果相同名字的分区已经删除，是否忽略异常',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'PartitionValues' => 
              array (
                'description' => '分区值',
                'required' => false,
                '$ref' => '#/components/schemas/ListString',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20201225',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除元数据表分区',
      'responseParamsDescription' => 'Code错误码说明  
InvalidOperation：对应的元数据表/分区等不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'DeletePartitionColumnStatistics' => 
    array (
      'summary' => '回收数据湖元数据表分区的字段统计信息。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '	
数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test_table_20201223',
          ),
        ),
        3 => 
        array (
          'name' => 'PartitionNames',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '分区名称列表',
            'required' => false,
            '$ref' => '#/components/schemas/ListString',
          ),
        ),
        4 => 
        array (
          'name' => 'ColumnNames',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '字段名称列表',
            'required' => false,
            '$ref' => '#/components/schemas/ListString',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除元数据表分区统计信息',
    ),
    'UpdatePartitionColumnStatistics' => 
    array (
      'summary' => '创建或者更新元数据表分区的字段统计信息。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UpdateTablePartitionColumnStatisticsRequest',
          'in' => 'body',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '更新参数',
            'required' => false,
            '$ref' => '#/components/schemas/UpdateTablePartitionColumnStatisticsRequest',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'object',
            'description' => '返回结构体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新元数据表分区统计信息',
    ),
    'GetPartition' => 
    array (
      'summary' => '获取数据湖元数据库分区详情。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/get',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'body',
            'description' => 'HTTP请求体',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '	
数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'PartitionValues' => 
              array (
                'description' => '分区列表',
                'required' => false,
                '$ref' => '#/components/schemas/ListString',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20200715162543389',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'Partition' => 
              array (
                'description' => '分区详情',
                '$ref' => '#/components/schemas/Partition',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Partition\\": {\\n    \\"CreateTime\\": 0,\\n    \\"DatabaseName\\": \\"\\",\\n    \\"LastAccessTime\\": 0,\\n    \\"LastAnalyzedTime\\": 0,\\n    \\"Parameters\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"Privileges\\": {\\n      \\"GroupPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"RolePrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"UserPrivileges\\": {\\n        \\"key\\": [\\n          {\\n            \\"CreateTime\\": 0,\\n            \\"GrantOption\\": true,\\n            \\"Grantor\\": \\"\\",\\n            \\"GrantorType\\": \\"\\",\\n            \\"Privilege\\": \\"\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"Sd\\": {\\n      \\"BucketCols\\": [\\n        \\"\\"\\n      ],\\n      \\"Cols\\": [\\n        {\\n          \\"Comment\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Type\\": \\"\\"\\n        }\\n      ],\\n      \\"Compressed\\": true,\\n      \\"InputFormat\\": \\"\\",\\n      \\"Location\\": \\"\\",\\n      \\"NumBuckets\\": 0,\\n      \\"OutputFormat\\": \\"\\",\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"SerDeInfo\\": {\\n        \\"Name\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerializationLib\\": \\"\\"\\n      },\\n      \\"SkewedInfo\\": {\\n        \\"SkewedColNames\\": [\\n          \\"\\"\\n        ],\\n        \\"SkewedColValueLocationMaps\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SkewedColValues\\": [\\n          [\\n            \\"\\"\\n          ]\\n        ]\\n      },\\n      \\"SortCols\\": [\\n        {\\n          \\"Col\\": \\"\\",\\n          \\"Order\\": 0\\n        }\\n      ],\\n      \\"StoredAsSubDirectories\\": true\\n    },\\n    \\"TableName\\": \\"\\",\\n    \\"Values\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据库分区',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据库/表/分区等不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'GetPartitionColumnStatistics' => 
    array (
      'summary' => '获取数据湖元数据分区指定字段的统计信息。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TableName',
            'description' => '元数据表名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test_table_20201223',
          ),
        ),
        3 => 
        array (
          'name' => 'PartitionNames',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '元数据表的分区列表',
            'required' => false,
            '$ref' => '#/components/schemas/ListString',
          ),
        ),
        4 => 
        array (
          'name' => 'ColumnNames',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '元数据表的字段列表',
            'required' => false,
            '$ref' => '#/components/schemas/ListString',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'PartitionStatisticsMap' => 
              array (
                'title' => 'PartitionStatisticsMap',
                'description' => '分区统计信息',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/ColumnStatisticsObj',
                    'description' => '分区统计信息',
                  ),
                  'description' => '分区统计信息',
                ),
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"PartitionStatisticsMap\\": {\\n    \\"key\\": [\\n      {\\n        \\"ColumnName\\": \\"\\",\\n        \\"ColumnType\\": \\"\\",\\n        \\"ColumnStatisticsData\\": {\\n          \\"StatisticsData\\": \\"\\",\\n          \\"StatisticsType\\": \\"\\"\\n        }\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据分区字段的统计信息',
    ),
    'ListPartitionNames' => 
    array (
      'summary' => '获取数据湖元数据表分区名称列表，通常用于多级分区。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/names',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'body',
            'description' => 'HTTP请求体',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                'type' => 'string',
                'required' => false,
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'PageSize' => 
              array (
                'title' => 'PageSize',
                'description' => '分页大小',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
              'PartialPartValues' => 
              array (
                'description' => '分区值列表，可以只传入部分分区的值，会查询出所有下级分区的分区名',
                'required' => false,
                '$ref' => '#/components/schemas/ListString',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20200715162543389',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'code',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'PartitionNames' => 
              array (
                'title' => 'PartitionNames',
                'description' => '分区名称列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分区名称',
                  'type' => 'string',
                  'example' => 'ds=20201124/hour=10',
                ),
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'code',
            'description' => 'code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"PartitionNames\\": [\\n    \\"ds=20201124/hour=10\\"\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据表分区名称列表',
      'responseParamsDescription' => 'Code错误码说明   
NoSuchObject：对应的元数据库/表等不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'ListPartitions' => 
    array (
      'summary' => '获取数据湖元数据库分区详情列表。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'body',
            'description' => '	
HTTP请求体',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                'type' => 'string',
                'required' => false,
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'PageSize' => 
              array (
                'title' => 'PageSize',
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
              'PartialPartValues' => 
              array (
                'description' => '分区值列表，可以只传入部分分区的值，会查询出所有下级分区的分区名',
                'required' => false,
                '$ref' => '#/components/schemas/ListString',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20200715162543389',
              ),
              'IsShareSd' => 
              array (
                'title' => 'IsShareSd',
                'description' => '是否共享partition中的SD中的column信息',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'code',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'Partitions' => 
              array (
                'title' => 'Partitions',
                'description' => '分区详情',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分区详情',
                  '$ref' => '#/components/schemas/Partition',
                ),
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PartitionSpecs' => 
              array (
                'title' => 'PartitionSpecs',
                'description' => 'PartitionSpecs',
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/PartitionSpec',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"Partitions\\": [\\n    {\\n      \\"CreateTime\\": 0,\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"Values\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"PartitionSpecs\\": [\\n    {\\n      \\"SharedSDPartitions\\": [\\n        {\\n          \\"CreateTime\\": 0,\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Privileges\\": {},\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"Values\\": [\\n            \\"\\"\\n          ]\\n        }\\n      ],\\n      \\"SharedStorageDescriptor\\": {\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Location\\": \\"相对路径\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据库分区列表',
      'requestParamsDescription' => 'IsShareSd
默认值false
- true：共享SD中的partition columns信息，这样相同的columns只会返回一份数据，就能降低网络传输，提高这个接口的性能
- false：不共享',
      'responseParamsDescription' => 'Code错误码说明   
NoSuchObject：对应的元数据库/表等不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'ListPartitionsByFilter' => 
    array (
      'summary' => '获取数据湖元数据表分区列表，按Filter条件查询。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/listbyfilter',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'body',
            'description' => 'HTTP请求体',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'Filter' => 
              array (
                'title' => 'Filter',
                'description' => '查询条件表达式，如ds>20201201',
                'type' => 'string',
                'required' => false,
                'example' => 'ds>20201201',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
                'type' => 'string',
                'required' => false,
                'example' => '\'\'',
              ),
              'PageSize' => 
              array (
                'title' => 'PageSize',
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20200715162543389',
              ),
              'IsShareSd' => 
              array (
                'title' => 'IsShareSd',
                'description' => '是否共享partition的SD中column信息',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'code',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'Partitions' => 
              array (
                'title' => 'Partitions',
                'description' => '查询后的分区详情',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询后的分区详情',
                  '$ref' => '#/components/schemas/Partition',
                ),
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PartitionSpecs' => 
              array (
                'title' => 'PartitionSpecs',
                'description' => 'PartitionSpecs',
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/PartitionSpec',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"Partitions\\": [\\n    {\\n      \\"CreateTime\\": 0,\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"Values\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"PartitionSpecs\\": [\\n    {\\n      \\"SharedSDPartitions\\": [\\n        {\\n          \\"CreateTime\\": 0,\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Privileges\\": {},\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"Values\\": [\\n            \\"\\"\\n          ]\\n        }\\n      ],\\n      \\"SharedStorageDescriptor\\": {\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Location\\": \\"相对路径\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '按条件获取元数据表分区列表',
      'requestParamsDescription' => 'isShareSd：是否开启共享SD中的columns信息，listpartitions返回的partitions列表中，不同的partition中sd中的column相同的可能性比较高，因此开启共享，可以降低网络传输的数据量，有助于提升性能',
      'responseParamsDescription' => 'Code错误码说明   
NoSuchObject：对应的元数据库/表等不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'BatchCreatePartitions' => 
    array (
      'summary' => '为数据湖的元数据表，批量新增多个分区。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/batchcreate',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'IfNotExists' => 
              array (
                'title' => 'IfNotExists',
                'description' => '如果相同名字的分区已经存在，是否忽略异常',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'NeedResult' => 
              array (
                'title' => 'NeedResult',
                'description' => '是否需要返回分区信息，为true时结果会返回Partitions',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'PartitionInputs' => 
              array (
                'title' => 'PartitionInputs',
                'description' => '分区输入信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分区输入信息',
                  'required' => false,
                  '$ref' => '#/components/schemas/PartitionInput',
                ),
                'required' => false,
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20201223',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回结构',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '响应代码',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => '响应消息',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'PartitionErrors' => 
              array (
                'title' => '分区出错信息',
                'description' => '错误信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '错误信息',
                  '$ref' => '#/components/schemas/PartitionError',
                ),
              ),
              'Partitions' => 
              array (
                'title' => 'Partitions',
                'description' => '分区结果，NeedResult=true时返回',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分区结果',
                  '$ref' => '#/components/schemas/Partition',
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"PartitionErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"PartitionValues\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"Partitions\\": [\\n    {\\n      \\"CreateTime\\": 0,\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"Values\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量新增元数据表的分区',
      'responseParamsDescription' => 'Code错误码说明  
InvalidObject：找不到对应的Table或Database  
AlreadyExists：对应的分区已经存在  
InternalError：其他类型错误，请参考Message提示
',
    ),
    'BatchDeletePartitions' => 
    array (
      'summary' => '批量删除数据湖元数据表的指定分区。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/batchdelete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '	
数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'IfExists' => 
              array (
                'title' => 'IfExists',
                'description' => '如果相同名字的分区已经删除，是否忽略异常',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'PartitionValueList' => 
              array (
                'description' => '待删除的分区值列表',
                'required' => false,
                '$ref' => '#/components/schemas/PartitionValueList',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20201225',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'PartitionErrors' => 
              array (
                'title' => 'PartitionErrors',
                'description' => '错误信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '错误信息',
                  '$ref' => '#/components/schemas/PartitionError',
                ),
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"PartitionErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"PartitionValues\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量删除元数据表分区',
      'responseParamsDescription' => 'Code错误码说明  
UnknownTable：输入的元数据表不存在  
UnknownPartition：输入的分区不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'BatchGetPartitionColumnStatistics' => 
    array (
      'summary' => '批量获取数据湖元数据表分区的字段统计信息。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics/batchget',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20201223',
              ),
              'PartitionNames' => 
              array (
                'description' => '元数据表的分区名称列表',
                'required' => false,
                '$ref' => '#/components/schemas/ListString',
              ),
              'ColumnNames' => 
              array (
                'description' => '元数据表的字段列表',
                'required' => false,
                '$ref' => '#/components/schemas/ListString',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'PartitionStatisticsMap' => 
              array (
                'title' => 'PartitionStatisticsMap',
                'description' => '分区统计信息',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    '$ref' => '#/components/schemas/ColumnStatisticsObj',
                    'description' => '分区统计信息',
                  ),
                  'description' => '分区统计信息',
                ),
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"PartitionStatisticsMap\\": {\\n    \\"key\\": [\\n      {\\n        \\"ColumnName\\": \\"\\",\\n        \\"ColumnType\\": \\"\\",\\n        \\"ColumnStatisticsData\\": {\\n          \\"StatisticsData\\": \\"\\",\\n          \\"StatisticsType\\": \\"\\"\\n        }\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量获取元数据分区统计信息',
    ),
    'BatchGetPartitions' => 
    array (
      'summary' => '批量获取数据湖元数据库分区详情。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/batchget',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'PartitionValueList' => 
              array (
                'description' => '分区值列表',
                'required' => false,
                '$ref' => '#/components/schemas/PartitionValueList',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20200715162543389',
              ),
              'IsShareSd' => 
              array (
                'title' => 'IsShareSd',
                'description' => '是否共享partition的SD中column信息',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'PartitionErrors' => 
              array (
                'title' => 'PartitionErrors',
                'description' => '错误信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '错误信息',
                  '$ref' => '#/components/schemas/PartitionError',
                ),
              ),
              'Partitions' => 
              array (
                'title' => 'Partitions',
                'description' => '分区详情',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分区详情',
                  '$ref' => '#/components/schemas/Partition',
                ),
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PartitionSpecs' => 
              array (
                'title' => 'PartitionSpecs',
                'description' => '分区规格列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分区规格。',
                  '$ref' => '#/components/schemas/PartitionSpec',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"PartitionErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"PartitionValues\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"Partitions\\": [\\n    {\\n      \\"CreateTime\\": 0,\\n      \\"DatabaseName\\": \\"\\",\\n      \\"LastAccessTime\\": 0,\\n      \\"LastAnalyzedTime\\": 0,\\n      \\"Parameters\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"Privileges\\": {\\n        \\"GroupPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"RolePrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        },\\n        \\"UserPrivileges\\": {\\n          \\"key\\": [\\n            {\\n              \\"CreateTime\\": 0,\\n              \\"GrantOption\\": true,\\n              \\"Grantor\\": \\"\\",\\n              \\"GrantorType\\": \\"\\",\\n              \\"Privilege\\": \\"\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"Sd\\": {\\n        \\"BucketCols\\": [\\n          \\"\\"\\n        ],\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Compressed\\": true,\\n        \\"InputFormat\\": \\"\\",\\n        \\"Location\\": \\"\\",\\n        \\"NumBuckets\\": 0,\\n        \\"OutputFormat\\": \\"\\",\\n        \\"Parameters\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SerDeInfo\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SerializationLib\\": \\"\\"\\n        },\\n        \\"SkewedInfo\\": {\\n          \\"SkewedColNames\\": [\\n            \\"\\"\\n          ],\\n          \\"SkewedColValueLocationMaps\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"SkewedColValues\\": [\\n            [\\n              \\"\\"\\n            ]\\n          ]\\n        },\\n        \\"SortCols\\": [\\n          {\\n            \\"Col\\": \\"\\",\\n            \\"Order\\": 0\\n          }\\n        ],\\n        \\"StoredAsSubDirectories\\": true\\n      },\\n      \\"TableName\\": \\"\\",\\n      \\"Values\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"PartitionSpecs\\": [\\n    {\\n      \\"SharedSDPartitions\\": [\\n        {\\n          \\"CreateTime\\": 0,\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Privileges\\": {},\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"Values\\": [\\n            \\"\\"\\n          ]\\n        }\\n      ],\\n      \\"SharedStorageDescriptor\\": {\\n        \\"Cols\\": [\\n          {\\n            \\"Comment\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Type\\": \\"\\"\\n          }\\n        ],\\n        \\"Location\\": \\"相对路径\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量获取元数据库分区',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据库/元数据表不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'BatchUpdatePartitions' => 
    array (
      'summary' => '为数据湖的元数据表，批量更新多个分区。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/batchupdate',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '	
数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'PartitionInputs' => 
              array (
                'title' => 'PartitionInputs',
                'description' => '分区输入信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '更新的分区输入信息',
                  'required' => false,
                  '$ref' => '#/components/schemas/PartitionInput',
                ),
                'required' => false,
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20201223',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'object',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'PartitionErrors' => 
              array (
                'title' => 'PartitionErrors',
                'description' => '错误信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '错误信息',
                  '$ref' => '#/components/schemas/PartitionError',
                ),
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"PartitionErrors\\": [\\n    {\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      },\\n      \\"PartitionValues\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量更新元数据表的分区',
    ),
    'RenamePartition' => 
    array (
      'summary' => '更新数据湖元数据表的分区名称。',
      'path' => '/api/metastore/catalogs/databases/tables/partitions/rename',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'Body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'PartitionInput' => 
              array (
                'description' => '更新后的分区信息，和CreatePartition相同',
                'required' => false,
                '$ref' => '#/components/schemas/PartitionInput',
              ),
              'PartitionValues' => 
              array (
                'description' => '分区值',
                'required' => false,
                '$ref' => '#/components/schemas/ListString',
              ),
              'TableName' => 
              array (
                'title' => 'TableName',
                'description' => '元数据表名',
                'type' => 'string',
                'required' => false,
                'example' => 'test_table_20200715162543389',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新元数据表分区名',
      'responseParamsDescription' => 'Code错误码说明   
InvalidOperation：找不到对应的元数据库/表，或者新的分区名已经存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'CreateFunction' => 
    array (
      'summary' => '新增数据湖元数据库的用户自定义函数。',
      'path' => '/api/metastore/catalogs/databases/functions',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'title' => 'DatabaseName',
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'FunctionInput' => 
              array (
                'description' => '函数定义详情',
                'required' => false,
                '$ref' => '#/components/schemas/FunctionInput',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '新增元数据库的函数',
      'responseParamsDescription' => 'Code错误码说明  
AlreadyExists：相同的函数已经存在    
NoSuchObject：对应的元数据库/表等不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'DeleteFunction' => 
    array (
      'summary' => '根据名称删除数据湖元数据库的用户自定义函数。',
      'path' => '/api/metastore/catalogs/databases/functions',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'FunctionName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'FunctionName',
            'description' => '函数名',
            'type' => 'string',
            'required' => false,
            'example' => 'func2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除元数据库的函数',
      'responseParamsDescription' => 'Code错误码说明  
NoSuchObject：对应的元数据库/表或者函数不存在  
InternalError：其他类型错误，请参考Message提示',
    ),
    'UpdateFunction' => 
    array (
      'summary' => '根据名称，更新数据湖元数据库的用户自定义函数信息。',
      'path' => '/api/metastore/catalogs/databases/functions',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'body',
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'description' => '数据库分类命名空间，默认填写主账号Uid',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
              'DatabaseName' => 
              array (
                'description' => '元数据库名称',
                'type' => 'string',
                'required' => false,
                'example' => 'database_test',
              ),
              'FunctionInput' => 
              array (
                'description' => '待更新的函数详情',
                'required' => false,
                '$ref' => '#/components/schemas/FunctionInput',
              ),
              'FunctionName' => 
              array (
                'description' => '函数名称',
                'type' => 'string',
                'required' => false,
                'example' => 'func2',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Respones',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新元数据库的函数',
      'responseParamsDescription' => 'Code错误码说明   
InvalidObject：对应的元数据库/表/函数等不存在，或者函数参数为空  
InternalError：其他类型错误，请参考Message提示',
    ),
    'ListFunctionNames' => 
    array (
      'summary' => '分页查询，获取元数据库的函数名称列表。',
      'path' => '/api/metastore/catalogs/databases/functions/names',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'FunctionNamePattern',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'FunctionNamePattern',
            'description' => '函数名匹配的正则表达式',
            'type' => 'string',
            'required' => false,
            'example' => '.*',
          ),
        ),
        3 => 
        array (
          'name' => 'NextPageToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'NextPageToken',
            'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
            'type' => 'string',
            'required' => false,
            'example' => '\'\'',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageSize',
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000000',
            'minimum' => '-1',
            'example' => '10',
            'default' => '1000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'FunctionNames' => 
              array (
                'title' => 'FunctionNames',
                'description' => '函数名称列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '函数名称',
                  'type' => 'string',
                  'example' => 'func2',
                ),
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"FunctionNames\\": [\\n    \\"func2\\"\\n  ],\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据库的函数名称列表',
      'responseParamsDescription' => 'Code错误码说明  
InternalError：其他类型错误，请参考Message提示',
    ),
    'ListFunctions' => 
    array (
      'summary' => '批量获取数据湖元数据库的用户自定义函数列表。',
      'path' => '/api/metastore/catalogs/databases/functions/list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'FunctionNamePattern',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'FunctionNamePattern',
            'description' => '用户定义函数名的正则匹配表达式',
            'type' => 'string',
            'required' => false,
            'example' => '.*',
          ),
        ),
        3 => 
        array (
          'name' => 'NextPageToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'NextPageToken',
            'description' => '翻页token，从返回结果返回，无则传空字符串或\'\'',
            'type' => 'string',
            'required' => false,
            'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageSize',
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000000',
            'minimum' => '-1',
            'example' => '10',
            'default' => '1000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Functions' => 
              array (
                'title' => 'Functions',
                'description' => '函数详情列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '函数描述详情',
                  '$ref' => '#/components/schemas/Function',
                ),
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => '翻页token',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Functions\\": [\\n    {\\n      \\"CatalogId\\": \\"\\",\\n      \\"ClassName\\": \\"\\",\\n      \\"CreateTime\\": 0,\\n      \\"DatabaseName\\": \\"\\",\\n      \\"FunctionName\\": \\"\\",\\n      \\"FunctionType\\": \\"\\",\\n      \\"OwnerName\\": \\"\\",\\n      \\"OwnerType\\": \\"\\",\\n      \\"ResourceUri\\": [\\n        {\\n          \\"ResourceType\\": \\"\\",\\n          \\"Uri\\": \\"\\"\\n        }\\n      ],\\n      \\"UpdateTime\\": 0,\\n      \\"CreatedBy\\": \\"CreatedBy\\"\\n    }\\n  ],\\n  \\"Message\\": \\".\\",\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据库的函数列表',
      'responseParamsDescription' => 'Code错误码说明   
InternalError：其他类型错误，请参考Message提示',
    ),
    'GetFunction' => 
    array (
      'summary' => '根据函数名称，获取数据湖元数据库的用户自定义函数。',
      'path' => '/api/metastore/catalogs/databases/functions',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '	
数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => false,
            'example' => 'database_test',
          ),
        ),
        2 => 
        array (
          'name' => 'FunctionName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'FunctionName',
            'description' => '用户定义函数名',
            'type' => 'string',
            'required' => false,
            'example' => 'func2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Function' => 
              array (
                'description' => '函数描述详情',
                '$ref' => '#/components/schemas/Function',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Function\\": {\\n    \\"CatalogId\\": \\"\\",\\n    \\"ClassName\\": \\"\\",\\n    \\"CreateTime\\": 0,\\n    \\"DatabaseName\\": \\"\\",\\n    \\"FunctionName\\": \\"\\",\\n    \\"FunctionType\\": \\"\\",\\n    \\"OwnerName\\": \\"\\",\\n    \\"OwnerType\\": \\"\\",\\n    \\"ResourceUri\\": [\\n      {\\n        \\"ResourceType\\": \\"\\",\\n        \\"Uri\\": \\"\\"\\n      }\\n    ],\\n    \\"UpdateTime\\": 0,\\n    \\"CreatedBy\\": \\"CreatedBy\\"\\n  },\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取元数据库的指定函数',
      'responseParamsDescription' => 'Code错误码说明  
InternalError：请参考Message提示',
    ),
    'CreateLock' => 
    array (
      'summary' => '创建一个指定的元数据锁。',
      'path' => '/api/metastore/catalogs/databases/tables/locks',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'body',
            'description' => 'body',
            'type' => 'object',
            'properties' => 
            array (
              'LockObjList' => 
              array (
                'title' => 'LockObjList',
                'description' => 'LockObjList',
                'type' => 'array',
                'items' => 
                array (
                  'required' => false,
                  '$ref' => '#/components/schemas/LockObj',
                ),
                'required' => false,
                'example' => '{"databaseName":"db","tableName":"test"}',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'lock response',
            'description' => 'lock response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '73201200-4C1A-4FEF-BD6B-C0DA7994FFA2',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'LockStatus' => 
              array (
                'description' => '状态描述',
                'example' => '{"lockId":12323,"lockStatus":"ACQUIRED"}',
                '$ref' => '#/components/schemas/LockStatus',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"73201200-4C1A-4FEF-BD6B-C0DA7994FFA2\\",\\n  \\"Success\\": true,\\n  \\"LockStatus\\": {\\n    \\"LockId\\": 0,\\n    \\"LockState\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建元数据锁',
      'requestParamsDescription' => '1. 当前LockObjList只支持size为1，也就是只能获取一个对象锁
2. 当前LockObj中只支持table锁，目前不支持partition级别的锁',
      'responseParamsDescription' => '- code：错误码
- message：错误信息
- requestId：标记当前请求唯一id
- Success：true/false，判定请求是否成功
- LockStatus：如果success，该字段有值，否则为空。LockStatus中有两个字段：lockId、Lockstate，如果lockstate为Acquired，那么lockid有值，否则为空',
      'extraInfo' => '****获取到lockid之后，如何在createtable、update table使用该lock？**

下面以CreateTable接口为例，需要在header中把lock获取的lockid传递进去，这样才能使用lock。

> 另外需要注意，lock有事务语义，只有传入lock，按照事务隔离性才能获取当前事务的状态，否则看到到是事务提交前的状态。

> 比如一个请求对表已经加了lock，同时delete了改表，但是如果事务没有提交（也就是没有unlock），这个时候又来了一个请求，要去createtable，如果没有带上lock，那么发现表示存在的，因为看到的是事务提交之前的状态，所以创建失败。如果createtable，带上这个lock，那么就进入事务中，就可以看到这个表已经delete了，那么createtable就能创建成功。


```
CreateTableRequest request = new CreateTableRequest();
request.catalogId = catalogId;
request.databaseName = databaseName;
request.tableInput = table;

RuntimeOptions runtime = new RuntimeOptions();
Map<String, String> headers = new HashMap();

//需要在建表或者update的表中的header中设置lockid
headers.put("metastore-lock-id", String.valueOf(lockId));

CreateTableResponseBody response = client.createTableWithOptions(request, headers, runtime).body;
return new ResultModel<>(response.success, response.code, response.message,
        response.requestId);
```
',
    ),
    'GetLock' => 
    array (
      'summary' => '查询指定的元数据锁。',
      'path' => '/api/metastore/catalogs/databases/tables/locks',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LockId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'LockId',
            'description' => 'LockId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '16533',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Lock response',
            'description' => 'Lock response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '558D764F-8C55-49CA-BF38-80EA532FC08F',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'LockStatus' => 
              array (
                'description' => '锁定状态',
                'example' => '{"lockId":123,"lockStatus":"Acquired"}',
                '$ref' => '#/components/schemas/LockStatus',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"558D764F-8C55-49CA-BF38-80EA532FC08F\\",\\n  \\"Success\\": true,\\n  \\"LockStatus\\": {\\n    \\"LockId\\": 0,\\n    \\"LockState\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询元数据锁',
      'requestParamsDescription' => 'lockid，即从createlock返回的lockid',
      'responseParamsDescription' => '

- code：错误码
- message：错误信息
- requestId：标记当前请求唯一id
- Success：true/false，判定请求是否成功
- LockStatus：如果success，该字段有值，否则为空',
    ),
    'AbortLock' => 
    array (
      'summary' => '中止指定的元数据锁。',
      'path' => '/api/metastore/catalogs/databases/tables/locks/abort',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LockId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'LockId',
            'description' => 'LockId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '16530',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'transaction response',
            'description' => 'transaction response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '01D8DD6B-4929-5999-9BB3-950AA30E3BD0',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"01D8DD6B-4929-5999-9BB3-950AA30E3BD0\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '中止元数据锁',
      'requestParamsDescription' => 'lockid，从createlock请求中获取的lockid',
      'responseParamsDescription' => '- code：错误码
- message：错误信息
- requestId：标记当前请求唯一id
- Success：true/false，判定请求是否成功',
    ),
    'RefreshLock' => 
    array (
      'summary' => '刷新指定的元数据锁。',
      'path' => '/api/metastore/catalogs/databases/tables/locks',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LockId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'LockId',
            'description' => 'LockId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12324',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Lock response',
            'description' => 'Lock response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '81B90E1B-7514-5817-9D59-0EA9E2215876',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"81B90E1B-7514-5817-9D59-0EA9E2215876\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '刷新元数据锁',
      'requestParamsDescription' => 'lockid，即从createlock返回的lockid',
      'responseParamsDescription' => '- code：错误码
- message：错误信息
- requestId：标记当前请求唯一id
- Success：true/false，判定请求是否成功',
    ),
    'UnLock' => 
    array (
      'summary' => '解开指定的元数据锁。',
      'path' => '/api/metastore/catalogs/databases/tables/locks',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LockId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'LockId',
            'description' => 'LockId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '11709',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'transaction response',
            'description' => 'transaction response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '37C8470A-5E6D-5E4E-AEF0-EA3EBE9C89EE',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"37C8470A-5E6D-5E4E-AEF0-EA3EBE9C89EE\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '解锁指定的元数据锁',
      'requestParamsDescription' => 'LockId，即从CreateLock中获取的lockId',
      'responseParamsDescription' => '- code：错误码
- message：错误信息
- requestId：标记当前请求唯一id
- Success：true/false，判定请求是否成功
',
    ),
    'StopMigrationWorkflow' => 
    array (
      'summary' => '停止元数据迁移任务。',
      'path' => '/webapi/migration/workflow/stop',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '迁移任务实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'M-6DCF5D8EF92E2195',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\"\\n}","type":"json"}]',
      'title' => '停止迁移工作流',
    ),
    'RunMigrationWorkflow' => 
    array (
      'summary' => '运行元数据迁移任务',
      'path' => '/webapi/migration/workflow/run',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '迁移实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'M-EDD8BF959BB97345',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回数据，值为工作流实例ID',
                'type' => 'string',
                'example' => 'FI-7193B85809CAD95C',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A048EA8E-3519-5B18-B81E-EE3E0B6DBE0C',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"FI-7193B85809CAD95C\\",\\n  \\"RequestId\\": \\"A048EA8E-3519-5B18-B81E-EE3E0B6DBE0C\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '执行迁移工作流',
    ),
    'GetAsyncTaskStatus' => 
    array (
      'summary' => '用于元数据相关异步API中，检查异步执行任务的状态。',
      'path' => '/api/metastore/catalogs/tasks',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据库分类命名空间，默认填写主账号Uid',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TaskId',
            'description' => '异步任务返回的结果中获取',
            'type' => 'string',
            'required' => false,
            'example' => 'f546c761570e5efc8146a1986f7890d2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TaskStatus' => 
              array (
                'description' => '任务状态',
                'example' => 'Success',
                '$ref' => '#/components/schemas/TaskStatus',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'title' => 'Code',
            'description' => 'Code',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"TaskStatus\\": {\\n    \\"Status\\": \\"\\",\\n    \\"Message\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取异步任务状态',
    ),
    'Search' => 
    array (
      'summary' => '元数据检索。',
      'path' => '/api/metastore/catalogs/search',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'catalogid',
                'description' => 'catalogid',
                'type' => 'string',
                'required' => false,
                'example' => '默认是空，在多catalogid下填写对应的id',
              ),
              'SearchText' => 
              array (
                'title' => '搜索问题',
                'description' => '搜索问题',
                'type' => 'string',
                'required' => false,
                'example' => 'tags:tag1 or comment:^iso and name=aliyun and (createTime > "20211111" and createTime < "20211117") and has category',
              ),
              'SortCriteria' => 
              array (
                'title' => '排序结构',
                'description' => '排序结构',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '排序结构',
                  'required' => false,
                  '$ref' => '#/components/schemas/SortCriterion',
                ),
                'required' => false,
              ),
              'PageSize' => 
              array (
                'title' => '当前查询的页大小',
                'description' => '当前查询的页大小',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1000',
              ),
              'PageNumber' => 
              array (
                'title' => '当前查询的页号',
                'description' => '当前查询的页号',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'SearchType' => 
              array (
                'description' => '搜索类型',
                'type' => 'string',
                'required' => false,
                'example' => 'TABLE/DATABASE/CATALOG',
                'enum' => 
                array (
                  0 => 'table',
                  1 => 'all',
                  2 => 'database',
                ),
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '响应代码',
                'description' => '响应代码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => '响应消息',
                'description' => '响应消息',
                'type' => 'string',
                'example' => '""',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '460C862F-BB91-5C04-BC3F-946EEF467862',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'DatabaseResult' => 
              array (
                'title' => '返回的db结果',
                'description' => '返回的db结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Databases' => 
                  array (
                    'title' => '返回的DatabaseList',
                    'description' => '返回的DatabaseList',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据库信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Database' => 
                        array (
                          'title' => '返回的Database',
                          'description' => '返回的Database',
                          '$ref' => '#/components/schemas/Database',
                        ),
                        'HighLightList' => 
                        array (
                          'title' => '返回高亮文本',
                          'description' => '返回高亮文本',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '返回高亮文本',
                            '$ref' => '#/components/schemas/HighLight',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '满足匹配条件的总的Database个数',
                    'description' => '满足匹配条件的总的Database个数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '11000',
                  ),
                ),
              ),
              'TableResult' => 
              array (
                'title' => '返回的table result',
                'description' => '返回的table result',
                'type' => 'object',
                'properties' => 
                array (
                  'Tables' => 
                  array (
                    'title' => '返回的TableList',
                    'description' => '返回的TableList',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元数据表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Table' => 
                        array (
                          'title' => '返回的Table',
                          'description' => '返回的Table',
                          '$ref' => '#/components/schemas/Table',
                        ),
                        'HighLightList' => 
                        array (
                          'title' => '返回的高亮文本',
                          'description' => '返回的高亮文本',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '返回的高亮文本',
                            '$ref' => '#/components/schemas/HighLight',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '满足匹配条件的总的Table个数',
                    'description' => '满足匹配条件的总的Table个数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1100',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"460C862F-BB91-5C04-BC3F-946EEF467862\\",\\n  \\"Success\\": true,\\n  \\"DatabaseResult\\": {\\n    \\"Databases\\": [\\n      {\\n        \\"Database\\": {\\n          \\"CreateTime\\": 0,\\n          \\"Description\\": \\"\\",\\n          \\"LocationUri\\": \\"oss://examplebuket/exampledb\\",\\n          \\"Name\\": \\"\\",\\n          \\"OwnerName\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Privileges\\": {\\n            \\"GroupPrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            },\\n            \\"RolePrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            },\\n            \\"UserPrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"UpdateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\"\\n        },\\n        \\"HighLightList\\": [\\n          {\\n            \\"Key\\": \\"name\\",\\n            \\"Value\\": \\"<em>tab</em>2\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TotalCount\\": 11000\\n  },\\n  \\"TableResult\\": {\\n    \\"Tables\\": [\\n      {\\n        \\"Table\\": {\\n          \\"Cascade\\": true,\\n          \\"CreateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\",\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Owner\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"PartitionKeys\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Parameters\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Privileges\\": {},\\n          \\"Retention\\": 0,\\n          \\"RewriteEnabled\\": true,\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"TableType\\": \\"\\",\\n          \\"Temporary\\": true,\\n          \\"UpdateTime\\": 0,\\n          \\"ViewExpandedText\\": \\"\\",\\n          \\"ViewOriginalText\\": \\"\\",\\n          \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n          \\"TableVersion\\": {\\n            \\"Table\\": {\\n              \\"Cascade\\": true,\\n              \\"CreateTime\\": 0,\\n              \\"CreatedBy\\": \\"\\",\\n              \\"DatabaseName\\": \\"\\",\\n              \\"LastAccessTime\\": 0,\\n              \\"LastAnalyzedTime\\": 0,\\n              \\"Owner\\": \\"\\",\\n              \\"OwnerType\\": \\"\\",\\n              \\"PartitionKeys\\": [\\n                {\\n                  \\"Comment\\": \\"\\",\\n                  \\"Name\\": \\"\\",\\n                  \\"Type\\": \\"\\"\\n                }\\n              ],\\n              \\"Privileges\\": {},\\n              \\"Retention\\": 0,\\n              \\"RewriteEnabled\\": true,\\n              \\"Sd\\": {\\n                \\"BucketCols\\": [\\n                  \\"\\"\\n                ],\\n                \\"Cols\\": [],\\n                \\"Compressed\\": true,\\n                \\"InputFormat\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"NumBuckets\\": 0,\\n                \\"OutputFormat\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SerDeInfo\\": {\\n                  \\"Name\\": \\"\\",\\n                  \\"SerializationLib\\": \\"\\"\\n                },\\n                \\"SkewedInfo\\": {\\n                  \\"SkewedColNames\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"SkewedColValueLocationMaps\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SkewedColValues\\": [\\n                    [\\n                      \\"\\"\\n                    ]\\n                  ]\\n                },\\n                \\"SortCols\\": [\\n                  {\\n                    \\"Col\\": \\"\\",\\n                    \\"Order\\": 0\\n                  }\\n                ],\\n                \\"StoredAsSubDirectories\\": true\\n              },\\n              \\"TableName\\": \\"\\",\\n              \\"TableType\\": \\"\\",\\n              \\"Temporary\\": true,\\n              \\"UpdateTime\\": 0,\\n              \\"ViewExpandedText\\": \\"\\",\\n              \\"ViewOriginalText\\": \\"\\",\\n              \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n              \\"TableVersion\\": {\\n                \\"Table\\": {\\n                  \\"Cascade\\": true,\\n                  \\"CreateTime\\": 0,\\n                  \\"CreatedBy\\": \\"\\",\\n                  \\"DatabaseName\\": \\"\\",\\n                  \\"LastAccessTime\\": 0,\\n                  \\"LastAnalyzedTime\\": 0,\\n                  \\"Owner\\": \\"\\",\\n                  \\"OwnerType\\": \\"\\",\\n                  \\"PartitionKeys\\": [],\\n                  \\"Retention\\": 0,\\n                  \\"RewriteEnabled\\": true,\\n                  \\"Sd\\": {\\n                    \\"BucketCols\\": [\\n                      \\"\\"\\n                    ],\\n                    \\"Cols\\": [],\\n                    \\"Compressed\\": true,\\n                    \\"InputFormat\\": \\"\\",\\n                    \\"Location\\": \\"\\",\\n                    \\"NumBuckets\\": 0,\\n                    \\"OutputFormat\\": \\"\\",\\n                    \\"Parameters\\": {\\n                      \\"key\\": \\"\\"\\n                    },\\n                    \\"SerDeInfo\\": {\\n                      \\"Name\\": \\"\\",\\n                      \\"SerializationLib\\": \\"\\"\\n                    },\\n                    \\"SkewedInfo\\": {\\n                      \\"SkewedColNames\\": [\\n                        \\"\\"\\n                      ],\\n                      \\"SkewedColValueLocationMaps\\": {\\n                        \\"key\\": \\"\\"\\n                      },\\n                      \\"SkewedColValues\\": [\\n                        [\\n                          \\"\\"\\n                        ]\\n                      ]\\n                    },\\n                    \\"SortCols\\": [\\n                      {\\n                        \\"Col\\": \\"\\",\\n                        \\"Order\\": 0\\n                      }\\n                    ],\\n                    \\"StoredAsSubDirectories\\": true\\n                  },\\n                  \\"TableName\\": \\"\\",\\n                  \\"TableType\\": \\"\\",\\n                  \\"Temporary\\": true,\\n                  \\"UpdateTime\\": 0,\\n                  \\"ViewExpandedText\\": \\"\\",\\n                  \\"ViewOriginalText\\": \\"\\",\\n                  \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n                  \\"TableVersion\\": {\\n                    \\"VersionId\\": 0\\n                  }\\n                },\\n                \\"VersionId\\": 0\\n              }\\n            },\\n            \\"VersionId\\": 0\\n          }\\n        },\\n        \\"HighLightList\\": [\\n          {\\n            \\"Key\\": \\"name\\",\\n            \\"Value\\": \\"<em>tab</em>2\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TotalCount\\": 1100\\n  }\\n}","type":"json"}]',
      'title' => '搜索元数据',
      'description' => '元数据检索',
    ),
    'CreateRole' => 
    array (
      'summary' => '在数据湖权限中新增一个角色。',
      'path' => '/api/metastore/auth/roles',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'user_permission',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'required' => false,
            '$ref' => '#/components/schemas/RoleInput',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '77BC2016-BA80-570F-BD15-2FB80281FED6',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'message',
                'description' => 'message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"77BC2016-BA80-570F-BD15-2FB80281FED6\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '创建数据湖权限的角色',
    ),
    'GrantRoleToUsers' => 
    array (
      'summary' => '将数据湖角色授予多个用户。',
      'path' => '/api/metastore/auth/roles/grantusers',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'object',
            'properties' => 
            array (
              'RoleName' => 
              array (
                'title' => 'RoleName',
                'description' => 'RoleName',
                'type' => 'string',
                'required' => false,
                'example' => 'test_role_8',
              ),
              'Users' => 
              array (
                'description' => 'ram user/ram role principal 列表，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                'required' => false,
                '$ref' => '#/components/schemas/Principals',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '4316D7DA-9816-596D-A3D7-12676FA59BDA',
              ),
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4316D7DA-9816-596D-A3D7-12676FA59BDA\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '将数据湖角色授予用户',
    ),
    'GrantRolesToUser' => 
    array (
      'summary' => '将多个角色授予给单个用户。',
      'path' => '/api/metastore/auth/roles/grantroles',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'user_permission',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RoleNames' => 
              array (
                'title' => '待授权的角色名列表',
                'description' => '待授权的角色名列表',
                'required' => true,
                '$ref' => '#/components/schemas/ListString',
              ),
              'User' => 
              array (
                'description' => 'ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                'required' => true,
                '$ref' => '#/components/schemas/Principal',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '81B90E1B-7514-5817-9D59-0EA9E2215876',
              ),
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"81B90E1B-7514-5817-9D59-0EA9E2215876\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '将多个角色授予给单个用户',
    ),
    'GrantPermissions' => 
    array (
      'summary' => '对User/数据湖角色授予资源的操作权限。',
      'path' => '/api/metastore/auth/permissions/grant',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'user_permission',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '授权的类型，目前仅支持hive',
                'description' => '授权的类型，目前仅支持Hive',
                'type' => 'string',
                'required' => true,
                'example' => 'Hive',
                'enum' => 
                array (
                  0 => 'hive',
                ),
              ),
              'MetaResource' => 
              array (
                'title' => '授权meta资源',
                'description' => '授权meta资源',
                'required' => true,
                '$ref' => '#/components/schemas/MetaResource',
              ),
              'Accesses' => 
              array (
                'title' => '授权的accesses列表',
                'description' => '授权的accesses列表',
                'required' => true,
                '$ref' => '#/components/schemas/Accesses',
              ),
              'DelegateAccesses' => 
              array (
                'title' => '授权的grantable accesses列表',
                'description' => '授权的grantable accesses列表',
                'required' => true,
                '$ref' => '#/components/schemas/Accesses',
              ),
              'Principal' => 
              array (
                'title' => '授权的用户/角色principal',
                'description' => '授权的用户/角色principal, ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName，数据湖角色的principal为acs:dlf::[accountId]:role/roleName',
                'required' => true,
                '$ref' => '#/components/schemas/Principal',
              ),
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => 'CatalogId',
                'type' => 'string',
                'required' => false,
                'example' => '主账号ID或空字符串',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message Code',
                'description' => 'Message Code',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '4912024D-2A06-5E9F-9667-35D9319917D7',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"4912024D-2A06-5E9F-9667-35D9319917D7\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '对User/数据湖角色授予权限',
    ),
    'BatchGrantPermissions' => 
    array (
      'summary' => '批量对User/数据湖角色授予资源的操作权限。',
      'path' => '/api/metastore/auth/permissions/batchgrant',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '授权的类型，目前仅支持hive',
                'description' => '授权的类型，目前仅支持Hive',
                'type' => 'string',
                'required' => true,
                'example' => 'Hive',
                'enum' => 
                array (
                  0 => 'hive',
                ),
              ),
              'GrantRevokeEntries' => 
              array (
                'title' => '待授权列表',
                'description' => '待授权列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '授权条目详情',
                  'required' => false,
                  '$ref' => '#/components/schemas/GrantRevokeEntry',
                ),
                'required' => false,
              ),
              'CatalogId' => 
              array (
                'title' => 'catalogId',
                'description' => 'catalogId',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message Code',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'BatchGrantRevokeFailureResult' => 
              array (
                'title' => 'result',
                'description' => 'result',
                'example' => '参考BatchGrantRevokeFailureResult结构',
                '$ref' => '#/components/schemas/BatchGrantRevokeFailureResult',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true,\\n  \\"BatchGrantRevokeFailureResult\\": [\\n    {\\n      \\"GrantRevokeEntry\\": {\\n        \\"MetaResource\\": {\\n          \\"ResourceType\\": \\"TABLE\\",\\n          \\"CatalogResource\\": {\\n            \\"CatalogId\\": \\"\\"\\n          },\\n          \\"DatabaseResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"DatabaseWildcard\\": \\"\\"\\n          },\\n          \\"TableResource\\": {\\n            \\"DatabaseName\\": \\"\\",\\n            \\"TableName\\": \\"\\"\\n          },\\n          \\"FunctionResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"FunctionName\\": \\"default\\"\\n          },\\n          \\"ColumnResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"TableName\\": \\"test\\",\\n            \\"ColumnNames\\": [\\n              \\"name\\"\\n            ]\\n          }\\n        },\\n        \\"Accesses\\": [\\n          \\"ALTER/SELECT/CREATE, etc.\\"\\n        ],\\n        \\"DelegateAccesses\\": [\\n          \\"ALTER/SELECT/CREATE, etc.\\"\\n        ],\\n        \\"Principal\\": {\\n          \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n        },\\n        \\"Id\\": \\"\\"\\n      },\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量对User/数据湖角色授予资源的操作权限',
    ),
    'DeleteRole' => 
    array (
      'summary' => '删除数据湖权限中的角色。',
      'path' => '/api/metastore/auth/roles',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'roleName',
            'description' => '待删除的角色名',
            'type' => 'string',
            'required' => false,
            'example' => 'roleId/roleName至少有一个是非空',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => 'requestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'message',
                'description' => 'message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除数据湖权限中的角色',
    ),
    'RevokeRoleFromUsers' => 
    array (
      'summary' => '将多个User从单个数据湖角色中移除。',
      'path' => '/api/metastore/auth/roles/revokeusers',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'object',
            'properties' => 
            array (
              'RoleName' => 
              array (
                'title' => '待revoke的角色',
                'description' => '待revoke的角色',
                'type' => 'string',
                'required' => false,
                'example' => 'test_role_3',
              ),
              'Users' => 
              array (
                'title' => '待revoke的用户列表',
                'description' => '待revoke的用户列表，ram user/ram role principal 列表，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                'required' => false,
                '$ref' => '#/components/schemas/Principals',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '将多个User从单个角色中移除',
    ),
    'RevokeRolesFromUser' => 
    array (
      'summary' => '将多个角色从单个User中移除。',
      'path' => '/api/metastore/auth/roles/revokeroles',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'user_permission',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'RoleNames' => 
              array (
                'title' => '待删除的角色列表',
                'description' => '待删除的角色列表',
                'required' => true,
                '$ref' => '#/components/schemas/ListString',
              ),
              'User' => 
              array (
                'title' => '针对该用户进行revoke',
                'description' => '针对该用户进行revoke，ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                'required' => true,
                '$ref' => '#/components/schemas/Principal',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'message',
                'description' => 'message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '将多个角色从单个User中移除',
    ),
    'RevokePermissions' => 
    array (
      'summary' => '取消对User/数据湖角色授予资源的操作权限。',
      'path' => '/api/metastore/auth/permissions/revoke',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '取消授权的类型，目前仅支持hive',
                'description' => '取消授权的类型，目前仅支持Hive',
                'type' => 'string',
                'required' => true,
                'example' => 'Hive',
                'enum' => 
                array (
                  0 => 'hive',
                ),
              ),
              'MetaResource' => 
              array (
                'title' => '取消授权meta资源',
                'description' => '取消授权meta资源',
                'required' => true,
                '$ref' => '#/components/schemas/MetaResource',
              ),
              'Accesses' => 
              array (
                'title' => '取消授权的accesses列表',
                'description' => '取消授权的accesses列表',
                'required' => true,
                '$ref' => '#/components/schemas/Accesses',
              ),
              'DelegateAccesses' => 
              array (
                'title' => '取消授权的grantable accesses列表',
                'description' => '取消授权的grantable accesses列表，目前暂不支持',
                'required' => false,
                '$ref' => '#/components/schemas/Accesses',
              ),
              'Principal' => 
              array (
                'title' => '取消授权的用户/角色principal',
                'description' => 'ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName，数据湖角色的principal为acs:dlf::[accountId]:role/roleName',
                'required' => true,
                '$ref' => '#/components/schemas/Principal',
              ),
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => 'CatalogId',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message Code',
                'description' => 'Message Code',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '7CB5765C-F209-5B10-8792-D2BE9156ABE8',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"7CB5765C-F209-5B10-8792-D2BE9156ABE8\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '取消User/数据湖角色授予的权限',
    ),
    'BatchRevokePermissions' => 
    array (
      'summary' => '批量取消对User/数据湖角色授予资源的操作权限
。',
      'path' => '/api/metastore/auth/permissions/batchrevoke',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '授权的类型，目前仅支持hive',
                'description' => '授权的类型，目前仅支持Hive',
                'type' => 'string',
                'required' => true,
                'example' => 'Hive',
                'enum' => 
                array (
                  0 => 'hive',
                ),
              ),
              'GrantRevokeEntries' => 
              array (
                'title' => '待授权列表',
                'description' => '待授权列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '撤销权限的规则列表',
                  'required' => false,
                  '$ref' => '#/components/schemas/GrantRevokeEntry',
                ),
                'required' => false,
              ),
              'CatalogId' => 
              array (
                'title' => 'catalogId',
                'description' => 'catalogId',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message Code',
                'description' => 'Message Code',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'C9E535E1-F040-56F4-B4EE-592B555DAE19',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'BatchGrantRevokeFailureResult' => 
              array (
                'title' => 'result',
                'description' => 'result',
                'example' => '参考BatchGrantRevokeFailureResult结构',
                '$ref' => '#/components/schemas/BatchGrantRevokeFailureResult',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"C9E535E1-F040-56F4-B4EE-592B555DAE19\\",\\n  \\"Success\\": true,\\n  \\"BatchGrantRevokeFailureResult\\": [\\n    {\\n      \\"GrantRevokeEntry\\": {\\n        \\"MetaResource\\": {\\n          \\"ResourceType\\": \\"TABLE\\",\\n          \\"CatalogResource\\": {\\n            \\"CatalogId\\": \\"\\"\\n          },\\n          \\"DatabaseResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"DatabaseWildcard\\": \\"\\"\\n          },\\n          \\"TableResource\\": {\\n            \\"DatabaseName\\": \\"\\",\\n            \\"TableName\\": \\"\\"\\n          },\\n          \\"FunctionResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"FunctionName\\": \\"default\\"\\n          },\\n          \\"ColumnResource\\": {\\n            \\"DatabaseName\\": \\"default\\",\\n            \\"TableName\\": \\"test\\",\\n            \\"ColumnNames\\": [\\n              \\"name\\"\\n            ]\\n          }\\n        },\\n        \\"Accesses\\": [\\n          \\"ALTER/SELECT/CREATE, etc.\\"\\n        ],\\n        \\"DelegateAccesses\\": [\\n          \\"ALTER/SELECT/CREATE, etc.\\"\\n        ],\\n        \\"Principal\\": {\\n          \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n        },\\n        \\"Id\\": \\"\\"\\n      },\\n      \\"ErrorDetail\\": {\\n        \\"Code\\": \\"\\",\\n        \\"Message\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量取消对User/数据湖角色授予的权限',
    ),
    'UpdateRole' => 
    array (
      'summary' => '更新数据湖权限中的角色
。',
      'path' => '/api/metastore/auth/roles',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'user_permission',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RoleName' => 
              array (
                'title' => 'RoleName',
                'description' => 'RoleName',
                'type' => 'string',
                'required' => false,
                'example' => '原始名称',
              ),
              'RoleInput' => 
              array (
                'description' => '更新后的元素的输入信息',
                'required' => false,
                '$ref' => '#/components/schemas/RoleInput',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => 'requestId',
                'type' => 'string',
                'example' => '604E5919-C6FF-54CE-9C23-C5350E6F5415',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'message',
                'description' => 'message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"604E5919-C6FF-54CE-9C23-C5350E6F5415\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '更新数据湖权限中的角色',
    ),
    'UpdateRoleUsers' => 
    array (
      'summary' => '更新角色中的user，该user包含ram user/ram role。',
      'path' => '/api/metastore/auth/updateroleusers',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'user_permission',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'object',
            'properties' => 
            array (
              'RoleName' => 
              array (
                'title' => 'Role名称',
                'description' => 'Role名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_role_8',
              ),
              'Users' => 
              array (
                'description' => 'ram user/ram role principal 列表，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
                'required' => false,
                '$ref' => '#/components/schemas/Principals',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => 'requestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'message',
                'description' => 'message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '更新角色中的用户',
    ),
    'UpdatePermissions' => 
    array (
      'summary' => '对User/数据湖角色的权限进行更新。',
      'path' => '/api/metastore/auth/permissions/',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'user_permission',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '授权的类型，目前仅支持hive',
                'description' => '授权的类型，目前仅支持Hive',
                'type' => 'string',
                'required' => true,
                'example' => 'Hive',
                'enum' => 
                array (
                  0 => 'hive',
                ),
              ),
              'MetaResource' => 
              array (
                'title' => '授权meta资源',
                'description' => '授权meta资源',
                'required' => true,
                '$ref' => '#/components/schemas/MetaResource',
              ),
              'Accesses' => 
              array (
                'title' => '授权的accesses列表',
                'description' => '授权的accesses列表',
                'required' => true,
                '$ref' => '#/components/schemas/Accesses',
              ),
              'DelegateAccesses' => 
              array (
                'title' => '授权的grantable accesses列表',
                'description' => '授权的grantable accesses列表，暂不支持',
                'required' => true,
                '$ref' => '#/components/schemas/Accesses',
              ),
              'Principal' => 
              array (
                'title' => '授权的用户/角色principal',
                'description' => '授权的用户/角色principal，ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName，数据湖角色的principal为acs:dlf::[accountId]:role/roleName',
                'required' => true,
                '$ref' => '#/components/schemas/Principal',
              ),
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => 'CatalogId',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message Code',
                'description' => 'Message Code',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '对User/数据湖角色的权限进行更新',
    ),
    'UpdateCatalogSettings' => 
    array (
      'summary' => '更新数据湖Catalog的配置，需admin角色以上角色。',
      'path' => '/api/metastore/catalogs/settings',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'user_permission',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'type' => 'object',
            'properties' => 
            array (
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => 'CatalogId',
                'type' => 'string',
                'required' => false,
                'example' => '默认是空，在多catalogid下填写对应的id',
              ),
              'CatalogSettings' => 
              array (
                'description' => '数据湖相关配置',
                'required' => false,
                '$ref' => '#/components/schemas/CatalogSettings',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '01D8DD6B-4929-5999-9BB3-950AA30E3BD0',
              ),
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"01D8DD6B-4929-5999-9BB3-950AA30E3BD0\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '更新数据湖Catalog的配置',
    ),
    'GetRole' => 
    array (
      'summary' => '根据角色名获取数据湖权限中的角色。',
      'path' => '/api/metastore/auth/roles',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'roleName',
            'description' => 'roleName',
            'type' => 'string',
            'required' => false,
            'example' => 'role_name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => 'requestId',
                'type' => 'string',
                'example' => '4316D7DA-9816-596D-A3D7-12676FA59BDA',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'message',
                'description' => 'message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Role' => 
              array (
                'title' => 'role',
                'description' => 'role',
                '$ref' => '#/components/schemas/Role',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4316D7DA-9816-596D-A3D7-12676FA59BDA\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true,\\n  \\"Role\\": {\\n    \\"Name\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"Users\\": [\\n      {\\n        \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n      }\\n    ],\\n    \\"DisplayName\\": \\"显示名称，允许中文\\",\\n    \\"PrincipalArn\\": \\"\\",\\n    \\"CreateTime\\": 0,\\n    \\"UpdateTime\\": 0,\\n    \\"IsPredefined\\": 0\\n  }\\n}","type":"json"}]',
      'title' => '获取数据湖权限中的角色详情',
    ),
    'ListRoles' => 
    array (
      'summary' => '获取数据湖角色列表。',
      'path' => '/api/metastore/auth/roles/list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextPageToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Next PageToken',
            'description' => 'Next PageToken',
            'type' => 'string',
            'required' => false,
            'example' => 'token!',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleNamePattern',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持模糊搜索，比如.\\*test.\\*',
            'type' => 'string',
            'required' => false,
            'example' => '.*test.*',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageSize',
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '-1/100',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => 'requestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'message',
                'description' => 'message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'NextPageToken' => 
              array (
                'title' => 'data',
                'description' => 'data',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
              'Roles' => 
              array (
                'title' => 'role list data',
                'description' => 'role list data',
                'example' => '[
	{
		"Description":"reserved by the system",
		"DisplayName":"admin",
		"UpdateTime":0,
		"IsPredefined":1,
		"Name":"admin"
	}
]',
                '$ref' => '#/components/schemas/Roles',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true,\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\",\\n  \\"Roles\\": [\\n    {\\n      \\"Name\\": \\"\\",\\n      \\"Description\\": \\"\\",\\n      \\"Users\\": [\\n        {\\n          \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n        }\\n      ],\\n      \\"DisplayName\\": \\"显示名称，允许中文\\",\\n      \\"PrincipalArn\\": \\"\\",\\n      \\"CreateTime\\": 0,\\n      \\"UpdateTime\\": 0,\\n      \\"IsPredefined\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取数据湖角色列表',
    ),
    'ListRoleUsers' => 
    array (
      'summary' => '获取单个角色的User列表。',
      'path' => '/api/metastore/auth/roles/roleusers',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '角色名称',
            'type' => 'string',
            'required' => false,
            'example' => 'admin',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageSize',
            'description' => 'PageSize',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '-1/100',
          ),
        ),
        2 => 
        array (
          'name' => 'UserNamePattern',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'use name pattern filter',
            'description' => 'use name pattern filter',
            'type' => 'string',
            'required' => false,
            'example' => '.*user.*',
          ),
        ),
        3 => 
        array (
          'name' => 'NextPageToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'NextPageToken',
            'description' => 'NextPageToken',
            'type' => 'string',
            'required' => false,
            'example' => 'token!',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '558D764F-8C55-49CA-BF38-80EA532FC08F',
              ),
              'Code' => 
              array (
                'description' => '状态码描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '提示相关错误信息',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'description' => '表示是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'UserRoles' => 
              array (
                'title' => 'user roles',
                'description' => 'user roles',
                'example' => 'UserRole列表',
                '$ref' => '#/components/schemas/UserRoles',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => 'NextPageToken',
                'type' => 'string',
                'example' => 'token!',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"558D764F-8C55-49CA-BF38-80EA532FC08F\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true,\\n  \\"UserRoles\\": [\\n    {\\n      \\"Role\\": {\\n        \\"Name\\": \\"\\",\\n        \\"Description\\": \\"\\",\\n        \\"Users\\": [\\n          {\\n            \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n          }\\n        ],\\n        \\"DisplayName\\": \\"显示名称，允许中文\\",\\n        \\"PrincipalArn\\": \\"\\",\\n        \\"CreateTime\\": 0,\\n        \\"UpdateTime\\": 0,\\n        \\"IsPredefined\\": 0\\n      },\\n      \\"GrantTime\\": 0,\\n      \\"User\\": {\\n        \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n      }\\n    }\\n  ],\\n  \\"NextPageToken\\": \\"token!\\"\\n}","type":"json"}]',
      'title' => '获取单个角色的User列表',
    ),
    'ListUserRoles' => 
    array (
      'summary' => '获取单个User的数据湖角色列表。',
      'path' => '/api/metastore/auth/roles/userroles',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PrincipalArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ram user/ram role principal，格式为acs:ram::[accountId]:user/userName, acs:ram::[accountId]:role/roleName',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::1111:user/userName',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'PageSize',
            'description' => 'PageSize',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '-1/100',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleNamePattern',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'role name pattern filter',
            'description' => 'role name pattern filter',
            'type' => 'string',
            'required' => false,
            'example' => '.*test.*',
          ),
        ),
        3 => 
        array (
          'name' => 'NextPageToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '翻页token',
            'type' => 'string',
            'required' => false,
            'example' => 'token!',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Code' => 
              array (
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'UserRoles' => 
              array (
                'title' => 'Data',
                'description' => 'UserRoles',
                'example' => '参考UserRoles结构',
                '$ref' => '#/components/schemas/UserRoles',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => 'NextPageToken',
                'type' => 'string',
                'example' => '2cb472ec1bf84f8d92f9c4baa0d21c19aa',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true,\\n  \\"UserRoles\\": [\\n    {\\n      \\"Role\\": {\\n        \\"Name\\": \\"\\",\\n        \\"Description\\": \\"\\",\\n        \\"Users\\": [\\n          {\\n            \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n          }\\n        ],\\n        \\"DisplayName\\": \\"显示名称，允许中文\\",\\n        \\"PrincipalArn\\": \\"\\",\\n        \\"CreateTime\\": 0,\\n        \\"UpdateTime\\": 0,\\n        \\"IsPredefined\\": 0\\n      },\\n      \\"GrantTime\\": 0,\\n      \\"User\\": {\\n        \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n      }\\n    }\\n  ],\\n  \\"NextPageToken\\": \\"2cb472ec1bf84f8d92f9c4baa0d21c19aa\\"\\n}","type":"json"}]',
      'title' => '获取单个User的数据湖角色列表',
    ),
    'ListPermissions' => 
    array (
      'summary' => '获取权限列表。',
      'path' => '/api/metastore/auth/permissions/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Principal' => 
              array (
                'title' => '基于Principal对权限信息进行过滤',
                'description' => '基于Principal对权限信息进行过滤',
                'required' => false,
                '$ref' => '#/components/schemas/Principal',
              ),
              'NextPageToken' => 
              array (
                'title' => '分页Token',
                'description' => '分页Token',
                'type' => 'string',
                'required' => false,
                'example' => 'token!',
              ),
              'PageSize' => 
              array (
                'title' => '分页大小',
                'description' => '分页大小',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'Type' => 
              array (
                'title' => '获取权限信息的类型，目前仅支持hive',
                'description' => '获取权限信息的类型，目前仅支持Hive',
                'type' => 'string',
                'required' => true,
                'example' => 'Hive',
                'enum' => 
                array (
                  0 => 'hive',
                ),
              ),
              'MetaResource' => 
              array (
                'title' => '基于资源对权限信息进行过滤',
                'description' => '基于资源对权限信息进行过滤',
                'required' => false,
                '$ref' => '#/components/schemas/MetaResource',
              ),
              'IsListUserRolePermissions' => 
              array (
                'title' => '是否获取用户所属角色的权限',
                'description' => '是否获取用户所属角色的权限，仅在指定具体资源对象时生效',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'MetaResourceType' => 
              array (
                'title' => '基于Resource Type进行过滤',
                'description' => '基于Resource Type进行过滤，DATABASE/TABLE，不指定则两者都包含',
                'type' => 'string',
                'required' => false,
                'example' => 'DATABASE',
              ),
              'CatalogId' => 
              array (
                'title' => 'CatalogId',
                'description' => 'CatalogId',
                'type' => 'string',
                'required' => false,
                'example' => '1344371',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message Code',
                'description' => 'Message Code',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '745EAAE2-5010-5C9F-A95C-B8FC5C1B03BF',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'NextPageToken' => 
              array (
                'title' => 'NextPageToken',
                'description' => 'NextPageToken',
                'type' => 'string',
                'example' => 'token!',
              ),
              'TotalCount' => 
              array (
                'title' => 'TotalCount',
                'description' => 'TotalCount',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '暂不支持',
              ),
              'PrincipalResourcePermissionsList' => 
              array (
                'description' => '权限列表',
                'example' => '[]',
                '$ref' => '#/components/schemas/PrincipalResourcePermissionsList',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"745EAAE2-5010-5C9F-A95C-B8FC5C1B03BF\\",\\n  \\"Success\\": true,\\n  \\"NextPageToken\\": \\"token!\\",\\n  \\"TotalCount\\": 0,\\n  \\"PrincipalResourcePermissionsList\\": [\\n    {\\n      \\"Principal\\": {\\n        \\"PrincipalArn\\": \\"acs:ram::[AliyunAccountId]:user/username_abc\\"\\n      },\\n      \\"MetaResource\\": {\\n        \\"ResourceType\\": \\"TABLE\\",\\n        \\"CatalogResource\\": {\\n          \\"CatalogId\\": \\"\\"\\n        },\\n        \\"DatabaseResource\\": {\\n          \\"DatabaseName\\": \\"default\\",\\n          \\"DatabaseWildcard\\": \\"\\"\\n        },\\n        \\"TableResource\\": {\\n          \\"DatabaseName\\": \\"\\",\\n          \\"TableName\\": \\"\\"\\n        },\\n        \\"FunctionResource\\": {\\n          \\"DatabaseName\\": \\"default\\",\\n          \\"FunctionName\\": \\"default\\"\\n        },\\n        \\"ColumnResource\\": {\\n          \\"DatabaseName\\": \\"default\\",\\n          \\"TableName\\": \\"test\\",\\n          \\"ColumnNames\\": [\\n            \\"name\\"\\n          ]\\n        }\\n      },\\n      \\"Accesses\\": [\\n        \\"ALTER/SELECT/CREATE, etc.\\"\\n      ],\\n      \\"DelegateAccesses\\": [\\n        \\"ALTER/SELECT/CREATE, etc.\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取权限列表',
    ),
    'CheckPermissions' => 
    array (
      'summary' => '对User权限进行校验。',
      'path' => '/api/metastore/auth/permissions/check',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP 请求体（HTTP BODY）内容，均采用JSON格式',
            'required' => false,
            '$ref' => '#/components/schemas/AccessRequest',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response Object',
            'description' => 'Response Object',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Response Code',
                'description' => 'Response Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message Code',
                'description' => 'Message Code',
                'type' => 'string',
                'example' => '.',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '81B90E1B-7514-5817-9D59-0EA9E2215876',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"RequestId\\": \\"81B90E1B-7514-5817-9D59-0EA9E2215876\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '对User权限进行校验',
    ),
    'GetCatalogSettings' => 
    array (
      'summary' => '获取数据湖Catalog的配置，需admin角色以上角色。',
      'path' => '/api/metastore/catalogs/settings',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'user_permission',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主账号ID或空字符串',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Code' => 
              array (
                'title' => 'Code',
                'description' => 'Code',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => 'Message',
                'type' => 'string',
                'example' => '.',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'CatalogSettings' => 
              array (
                '$ref' => '#/components/schemas/CatalogSettings',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\".\\",\\n  \\"Success\\": true,\\n  \\"CatalogSettings\\": {\\n    \\"Config\\": {\\n      \\"key\\": \\"\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取数据湖Catalog的配置',
    ),
    'GetQueryResult' => 
    array (
      'summary' => '获取数据探索查询结果。',
      'path' => '/webapi/query/getQueryResult',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询ID
> 您可以调用接口SubmitQuery获取查询ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Q-41676378709440CE',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '100',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '获得查询结果',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '查询状态',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'AVAILABLE' => 'AVAILABLE',
                  'CANCELLED' => 'CANCELLED',
                  'RUNNING' => 'RUNNING',
                  'CANCELLING' => 'CANCELLING',
                  'WAITING' => 'WAITING',
                  'ERROR' => 'ERROR',
                ),
                'example' => 'AVAILABLE',
              ),
              'ResultTmpTable' => 
              array (
                'description' => '结果临时表，暂不可用',
                'type' => 'string',
                'example' => 'table',
              ),
              'Owner' => 
              array (
                'description' => '创建者主账号uid

',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '229167306180609***',
              ),
              'ErrorMessage' => 
              array (
                'description' => '查询的错误信息',
                'type' => 'string',
                'example' => 'Table or view not found:',
              ),
              'Progress' => 
              array (
                'description' => '查询进度，0~100之间',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '99',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。取值如下：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Schema' => 
              array (
                'description' => '查询结果的表头字段和类型.仅当状态为AVAILABLE时返回',
                'type' => 'string',
                'example' => '[{"name":"id","type":"INT"},{"name":"student_name","type":"VARCHAR"}]',
              ),
              'ResultTmpDb' => 
              array (
                'description' => '结果临时库，暂不可用',
                'type' => 'string',
                'example' => 'db
',
              ),
              'GmtModified' => 
              array (
                'description' => '查询结果更新时间',
                'type' => 'string',
                'example' => '2022-05-09 16:19:09',
              ),
              'JobCompleted' => 
              array (
                'description' => '查询是否已经完成，fasle代表需要继续轮询本接口',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RowCount' => 
              array (
                'description' => '结果总行数，仅当状态为AVAILABLE时返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'EndTime' => 
              array (
                'description' => '查询完成时间',
                'type' => 'string',
                'example' => '2022-05-09 16:19:09',
              ),
              'StartTime' => 
              array (
                'description' => '查询开始时间',
                'type' => 'string',
                'example' => '2022-05-09 16:18:09',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1D2BCFBA-7639-59A9-817B-944EC1339279',
              ),
              'Rows' => 
              array (
                'description' => '返回结果信息，仅当状态为AVAILABLE时返回。内容用一个二维JSON数组表示。',
                'type' => 'string',
                'example' => '[[10,"Tom"],[11,"Jerry"]]',
              ),
              'Logs' => 
              array (
                'description' => '运行日志',
                'type' => 'string',
                'example' => '["this is log"]',
              ),
              'GmtCreate' => 
              array (
                'description' => '查询创建时间',
                'type' => 'string',
                'example' => '2022-05-09 16:18:09',
              ),
              'Duration' => 
              array (
                'description' => '已运行时间，单位是毫秒',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8000',
              ),
              'Sql' => 
              array (
                'description' => '原始执行的sql语句',
                'type' => 'string',
                'example' => 'select * from db.student',
              ),
              'RowCountOverLimit' => 
              array (
                'description' => '结果总行数是否超过最大值',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Id' => 
              array (
                'description' => '查询Id',
                'type' => 'string',
                'example' => 'Q-41676378709440CE
',
              ),
              'TotalBytesProcessed' => 
              array (
                'description' => '总共扫描数据量，单位字节',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1024',
              ),
            ),
            'example' => '{ "data" : }',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Query.ResultExpired',
            'errorMessage' => 'Query result cache expired, please export result in history query',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"AVAILABLE\\",\\n  \\"ResultTmpTable\\": \\"table\\",\\n  \\"Owner\\": 0,\\n  \\"ErrorMessage\\": \\"Table or view not found:\\",\\n  \\"Progress\\": 99,\\n  \\"Success\\": true,\\n  \\"Schema\\": \\"[{\\\\\\"name\\\\\\":\\\\\\"id\\\\\\",\\\\\\"type\\\\\\":\\\\\\"INT\\\\\\"},{\\\\\\"name\\\\\\":\\\\\\"student_name\\\\\\",\\\\\\"type\\\\\\":\\\\\\"VARCHAR\\\\\\"}]\\",\\n  \\"ResultTmpDb\\": \\"db\\\\n\\",\\n  \\"GmtModified\\": \\"2022-05-09 16:19:09\\",\\n  \\"JobCompleted\\": true,\\n  \\"RowCount\\": 100,\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"EndTime\\": \\"2022-05-09 16:19:09\\",\\n  \\"StartTime\\": \\"2022-05-09 16:18:09\\",\\n  \\"RequestId\\": \\"1D2BCFBA-7639-59A9-817B-944EC1339279\\",\\n  \\"Rows\\": \\"[[10,\\\\\\"Tom\\\\\\"],[11,\\\\\\"Jerry\\\\\\"]]\\",\\n  \\"Logs\\": \\"[\\\\\\"this is log\\\\\\"]\\",\\n  \\"GmtCreate\\": \\"2022-05-09 16:18:09\\",\\n  \\"Duration\\": 8000,\\n  \\"Sql\\": \\"select * from db.student\\",\\n  \\"RowCountOverLimit\\": false,\\n  \\"Id\\": \\"Q-41676378709440CE\\\\n\\",\\n  \\"TotalBytesProcessed\\": 1024\\n}","type":"json"}]',
      'title' => '获取查询结果',
    ),
    'SubmitQuery' => 
    array (
      'path' => '/webapi/query/submitQueryRequestBody',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP请求体',
            'type' => 'object',
            'properties' => 
            array (
              'sql' => 
              array (
                'description' => 'SQL语句。',
                'type' => 'string',
                'required' => false,
                'example' => 'show databases',
              ),
              'workspaceId' => 
              array (
                'description' => '工作空间id',
                'type' => 'string',
                'required' => false,
                'example' => 'WS-A129E61C4892D2B4',
              ),
              'catalogId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '创建查询的结果',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'string',
                'example' => 'Q-14475CF9B51FCE5E',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '279AA630-A8ED-5EA9-80A3-2E213D63548C',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。true：操作成功；false：操作未成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
            'example' => '{ "success" : true }',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Query.ClusterNotReady',
            'errorMessage' => 'Query cluster is not ready. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"Q-14475CF9B51FCE5E\\",\\n  \\"RequestId\\": \\"279AA630-A8ED-5EA9-80A3-2E213D63548C\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '提交查询',
      'summary' => '提交SQL查询任务。',
      'description' => '- 仅适合提交中小型查询，执行时间不能超过1个小时
- 查询结果最多返回10000条
- 单个主账号下并发执行有限制，如同时提交多次查询会排队。',
    ),
    'CancelQuery' => 
    array (
      'summary' => '取消查询任务。',
      'path' => '/webapi/query/cancelQuery',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询ID。
> 您可以调用接口SubmitQuery获取查询ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Q-BCA5E96CB84BB8B8',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '查询ID',
                'type' => 'string',
                'example' => 'Q-BCA5E96CB84BB8B8',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'DB07AAE9-4B88-5DEA-8F1D-4D1A9A864A85',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"Q-BCA5E96CB84BB8B8\\",\\n  \\"RequestId\\": \\"DB07AAE9-4B88-5DEA-8F1D-4D1A9A864A85\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '取消查询',
    ),
    'GetRegionStatus' => 
    array (
      'path' => '/webapi/service/getRegionStatus',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结果',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'string',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'CC58A776-0662-5C6D-B467-FFD4CF7F4C40',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'IsDlfServiceOpen' => 
                  array (
                    'description' => 'DLF服务是否开通',
                    'type' => 'boolean',
                    'example' => 'True',
                  ),
                  'RegionStatus' => 
                  array (
                    'description' => '地域状态，SERVICE_INVALID:服务不可用；UNINITIALIZED:未初始化；READY: 正常状态。',
                    'type' => 'string',
                    'example' => 'READY',
                  ),
                  'AccountStatus' => 
                  array (
                    'description' => '账号状态enabled（启用）或disabled（禁用）',
                    'type' => 'string',
                    'example' => 'enabled',
                  ),
                  'IsDependencyReady' => 
                  array (
                    'description' => '依赖是否准备就绪',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '区域id',
                    'type' => 'string',
                    'example' => 'cn_hangzhou',
                  ),
                ),
                'example' => '{\'RegionId\': \'cn-shanghai\', \'RegionStatus\': \'SERVICE_INVALID\', \'AccountStatus\': \'\', \'IsDlfServiceOpen\': False}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": \\"true\\",\\n  \\"RequestId\\": \\"CC58A776-0662-5C6D-B467-FFD4CF7F4C40\\",\\n  \\"Data\\": {\\n    \\"IsDlfServiceOpen\\": true,\\n    \\"RegionStatus\\": \\"READY\\",\\n    \\"AccountStatus\\": \\"enabled\\",\\n    \\"IsDependencyReady\\": true,\\n    \\"RegionId\\": \\"cn_hangzhou\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取数据湖构建服务开通状态',
      'summary' => '获取数据湖构建指定地域的服务开通状态。',
    ),
    'GetServiceStatus' => 
    array (
      'path' => '/webapi/service/getServiceStatus',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Data' => 
              array (
                'description' => '服务状态',
                'type' => 'object',
                'properties' => 
                array (
                  'IsDlfServiceOpen' => 
                  array (
                    'description' => 'DLF服务是否开通',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'HasRamPermissions' => 
                  array (
                    'description' => '是否完成RAM授权',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'IsOssOpen' => 
                  array (
                    'description' => 'OSS服务是否开通',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
                'example' => '{ 			"AccountStatus":"", 			"RegionStatus":"READY", 			"RegionId":"cn-shanghai", 			"IsDependencyReady":true, 			"IsDlfServiceOpen":true 		}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Data\\": {\\n    \\"IsDlfServiceOpen\\": true,\\n    \\"HasRamPermissions\\": true,\\n    \\"IsOssOpen\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取某个用户的服务开通状态',
      'summary' => '获取数据湖构建某个用户的服务开通状态。',
    ),
    'DescribeRegions' => 
    array (
      'path' => '/webapi/service/describeRegions',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'B7F4B621-E41E-4C84-B97F-42B5380A32BB',
              ),
              'Regions' => 
              array (
                'description' => '区域列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '区域信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '类型',
                      'type' => 'string',
                      'example' => 'region',
                    ),
                    'ShowName' => 
                    array (
                      'description' => '显示名称',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
                    ),
                    'Name' => 
                    array (
                      'description' => '名称',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => '华东1',
                    ),
                  ),
                  'example' => '{"Type":"region","Description":"华东 1","ShowName":"华东1（杭州）","Name":"cn-hangzhou"}',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"B7F4B621-E41E-4C84-B97F-42B5380A32BB\\",\\n  \\"Regions\\": [\\n    {\\n      \\"Type\\": \\"region\\",\\n      \\"ShowName\\": \\"华东1（杭州）\\",\\n      \\"Name\\": \\"cn-hangzhou\\",\\n      \\"Description\\": \\"华东1\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取开通的地区',
      'summary' => '获取开通的地区列表。',
    ),
    'SearchAcrossCatalog' => 
    array (
      'summary' => '跨Catalog搜索库、表、字段等内容。',
      'path' => '/api/metastore/catalogs/search/search-across-catalog',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'object',
            'properties' => 
            array (
              'SearchText' => 
              array (
                'title' => '搜索问题',
                'description' => '搜索问题',
                'type' => 'string',
                'required' => false,
                'example' => 'tags:tag1 or comment:^iso and name=aliyun and (createTime > "20211111" and createTime < "20211117") and has category',
              ),
              'SortCriteria' => 
              array (
                'title' => '排序结构',
                'description' => '排序结构',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '排序结构',
                  'required' => false,
                  '$ref' => '#/components/schemas/SortCriterion',
                ),
                'required' => false,
              ),
              'PageSize' => 
              array (
                'title' => '当前查询的页大小',
                'description' => '当前查询的页大小',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1000',
              ),
              'PageNumber' => 
              array (
                'title' => '当前查询的页号',
                'description' => '当前查询的页号',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'CatalogIds' => 
              array (
                'title' => 'CatalogId数组，为空则搜索所有Catalog',
                'description' => 'CatalogId数组，为空则搜索所有Catalog',
                'required' => false,
                'enumValueTitles' => 
                array (
                ),
                '$ref' => '#/components/schemas/ListString',
              ),
              'SearchTypes' => 
              array (
                'title' => 'SearchTypes数组，可选值为ALL/CATALOG/DATABASE/TABLE',
                'description' => 'SearchTypes数组，可选值为ALL/CATALOG/DATABASE/TABLE',
                'required' => false,
                '$ref' => '#/components/schemas/ListString',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '响应代码',
                'description' => '响应代码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'title' => '响应消息',
                'description' => '响应消息',
                'type' => 'string',
                'example' => '""',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '460C862F-BB91-5C04-BC3F-946EEF467862',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'DatabaseResult' => 
              array (
                'title' => '返回的db结果',
                'description' => '返回的db结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Databases' => 
                  array (
                    'title' => '返回的DatabaseList',
                    'description' => '返回的DatabaseList',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据库信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Database' => 
                        array (
                          'title' => '返回的Database',
                          'description' => '返回的Database',
                          '$ref' => '#/components/schemas/Database',
                        ),
                        'HighLightList' => 
                        array (
                          'title' => '返回高亮文本',
                          'description' => '返回高亮文本',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '返回高亮文本',
                            '$ref' => '#/components/schemas/HighLight',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '满足匹配条件的总的Database个数',
                    'description' => '满足匹配条件的总的Database个数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '11000',
                  ),
                ),
              ),
              'TableResult' => 
              array (
                'title' => '返回的table result',
                'description' => '返回的table result',
                'type' => 'object',
                'properties' => 
                array (
                  'Tables' => 
                  array (
                    'title' => '返回的TableList',
                    'description' => '返回的TableList',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '表结果结构',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Table' => 
                        array (
                          'title' => '返回的Table',
                          'description' => '返回的Table',
                          '$ref' => '#/components/schemas/Table',
                        ),
                        'HighLightList' => 
                        array (
                          'title' => '返回的高亮文本',
                          'description' => '返回的高亮文本',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '返回的高亮文本',
                            '$ref' => '#/components/schemas/HighLight',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '满足匹配条件的总的Table个数',
                    'description' => '满足匹配条件的总的Table个数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1100',
                  ),
                ),
              ),
              'CatalogResult' => 
              array (
                'title' => '返回的Catalog result',
                'description' => '返回的Catalog result',
                'type' => 'object',
                'properties' => 
                array (
                  'Catalogs' => 
                  array (
                    'description' => 'catalog详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'catalog详情',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Catalog' => 
                        array (
                          'description' => 'catalog详情',
                          '$ref' => '#/components/schemas/Catalog',
                        ),
                        'HighLightList' => 
                        array (
                          'description' => '返回高亮文本',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '高亮文本',
                            '$ref' => '#/components/schemas/HighLight',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '满足匹配条件的总的Catalog个数',
                    'description' => '满足匹配条件的总的Catalog个数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"460C862F-BB91-5C04-BC3F-946EEF467862\\",\\n  \\"Success\\": true,\\n  \\"DatabaseResult\\": {\\n    \\"Databases\\": [\\n      {\\n        \\"Database\\": {\\n          \\"CreateTime\\": 0,\\n          \\"Description\\": \\"\\",\\n          \\"LocationUri\\": \\"oss://examplebuket/exampledb\\",\\n          \\"Name\\": \\"\\",\\n          \\"OwnerName\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"Privileges\\": {\\n            \\"GroupPrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            },\\n            \\"RolePrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            },\\n            \\"UserPrivileges\\": {\\n              \\"key\\": [\\n                {\\n                  \\"CreateTime\\": 0,\\n                  \\"GrantOption\\": true,\\n                  \\"Grantor\\": \\"\\",\\n                  \\"GrantorType\\": \\"\\",\\n                  \\"Privilege\\": \\"\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"UpdateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\"\\n        },\\n        \\"HighLightList\\": [\\n          {\\n            \\"Key\\": \\"name\\",\\n            \\"Value\\": \\"<em>tab</em>2\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TotalCount\\": 11000\\n  },\\n  \\"TableResult\\": {\\n    \\"Tables\\": [\\n      {\\n        \\"Table\\": {\\n          \\"Cascade\\": true,\\n          \\"CreateTime\\": 0,\\n          \\"CreatedBy\\": \\"\\",\\n          \\"DatabaseName\\": \\"\\",\\n          \\"LastAccessTime\\": 0,\\n          \\"LastAnalyzedTime\\": 0,\\n          \\"Owner\\": \\"\\",\\n          \\"OwnerType\\": \\"\\",\\n          \\"Parameters\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"PartitionKeys\\": [\\n            {\\n              \\"Comment\\": \\"\\",\\n              \\"Name\\": \\"\\",\\n              \\"Parameters\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"Type\\": \\"\\"\\n            }\\n          ],\\n          \\"Privileges\\": {},\\n          \\"Retention\\": 0,\\n          \\"RewriteEnabled\\": true,\\n          \\"Sd\\": {\\n            \\"BucketCols\\": [\\n              \\"\\"\\n            ],\\n            \\"Cols\\": [\\n              {\\n                \\"Comment\\": \\"\\",\\n                \\"Name\\": \\"\\",\\n                \\"Type\\": \\"\\"\\n              }\\n            ],\\n            \\"Compressed\\": true,\\n            \\"InputFormat\\": \\"\\",\\n            \\"Location\\": \\"\\",\\n            \\"NumBuckets\\": 0,\\n            \\"OutputFormat\\": \\"\\",\\n            \\"Parameters\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SerDeInfo\\": {\\n              \\"Name\\": \\"\\",\\n              \\"SerializationLib\\": \\"\\"\\n            },\\n            \\"SkewedInfo\\": {\\n              \\"SkewedColNames\\": [\\n                \\"\\"\\n              ],\\n              \\"SkewedColValueLocationMaps\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"SkewedColValues\\": [\\n                [\\n                  \\"\\"\\n                ]\\n              ]\\n            },\\n            \\"SortCols\\": [\\n              {\\n                \\"Col\\": \\"\\",\\n                \\"Order\\": 0\\n              }\\n            ],\\n            \\"StoredAsSubDirectories\\": true\\n          },\\n          \\"TableName\\": \\"\\",\\n          \\"TableType\\": \\"\\",\\n          \\"Temporary\\": true,\\n          \\"UpdateTime\\": 0,\\n          \\"ViewExpandedText\\": \\"\\",\\n          \\"ViewOriginalText\\": \\"\\",\\n          \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n          \\"TableVersion\\": {\\n            \\"Table\\": {\\n              \\"Cascade\\": true,\\n              \\"CreateTime\\": 0,\\n              \\"CreatedBy\\": \\"\\",\\n              \\"DatabaseName\\": \\"\\",\\n              \\"LastAccessTime\\": 0,\\n              \\"LastAnalyzedTime\\": 0,\\n              \\"Owner\\": \\"\\",\\n              \\"OwnerType\\": \\"\\",\\n              \\"PartitionKeys\\": [\\n                {\\n                  \\"Comment\\": \\"\\",\\n                  \\"Name\\": \\"\\",\\n                  \\"Type\\": \\"\\"\\n                }\\n              ],\\n              \\"Privileges\\": {},\\n              \\"Retention\\": 0,\\n              \\"RewriteEnabled\\": true,\\n              \\"Sd\\": {\\n                \\"BucketCols\\": [\\n                  \\"\\"\\n                ],\\n                \\"Cols\\": [],\\n                \\"Compressed\\": true,\\n                \\"InputFormat\\": \\"\\",\\n                \\"Location\\": \\"\\",\\n                \\"NumBuckets\\": 0,\\n                \\"OutputFormat\\": \\"\\",\\n                \\"Parameters\\": {\\n                  \\"key\\": \\"\\"\\n                },\\n                \\"SerDeInfo\\": {\\n                  \\"Name\\": \\"\\",\\n                  \\"SerializationLib\\": \\"\\"\\n                },\\n                \\"SkewedInfo\\": {\\n                  \\"SkewedColNames\\": [\\n                    \\"\\"\\n                  ],\\n                  \\"SkewedColValueLocationMaps\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"SkewedColValues\\": [\\n                    [\\n                      \\"\\"\\n                    ]\\n                  ]\\n                },\\n                \\"SortCols\\": [\\n                  {\\n                    \\"Col\\": \\"\\",\\n                    \\"Order\\": 0\\n                  }\\n                ],\\n                \\"StoredAsSubDirectories\\": true\\n              },\\n              \\"TableName\\": \\"\\",\\n              \\"TableType\\": \\"\\",\\n              \\"Temporary\\": true,\\n              \\"UpdateTime\\": 0,\\n              \\"ViewExpandedText\\": \\"\\",\\n              \\"ViewOriginalText\\": \\"\\",\\n              \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n              \\"TableVersion\\": {\\n                \\"Table\\": {\\n                  \\"Cascade\\": true,\\n                  \\"CreateTime\\": 0,\\n                  \\"CreatedBy\\": \\"\\",\\n                  \\"DatabaseName\\": \\"\\",\\n                  \\"LastAccessTime\\": 0,\\n                  \\"LastAnalyzedTime\\": 0,\\n                  \\"Owner\\": \\"\\",\\n                  \\"OwnerType\\": \\"\\",\\n                  \\"PartitionKeys\\": [],\\n                  \\"Retention\\": 0,\\n                  \\"RewriteEnabled\\": true,\\n                  \\"Sd\\": {\\n                    \\"BucketCols\\": [\\n                      \\"\\"\\n                    ],\\n                    \\"Cols\\": [],\\n                    \\"Compressed\\": true,\\n                    \\"InputFormat\\": \\"\\",\\n                    \\"Location\\": \\"\\",\\n                    \\"NumBuckets\\": 0,\\n                    \\"OutputFormat\\": \\"\\",\\n                    \\"Parameters\\": {\\n                      \\"key\\": \\"\\"\\n                    },\\n                    \\"SerDeInfo\\": {\\n                      \\"Name\\": \\"\\",\\n                      \\"SerializationLib\\": \\"\\"\\n                    },\\n                    \\"SkewedInfo\\": {\\n                      \\"SkewedColNames\\": [\\n                        \\"\\"\\n                      ],\\n                      \\"SkewedColValueLocationMaps\\": {\\n                        \\"key\\": \\"\\"\\n                      },\\n                      \\"SkewedColValues\\": [\\n                        [\\n                          \\"\\"\\n                        ]\\n                      ]\\n                    },\\n                    \\"SortCols\\": [\\n                      {\\n                        \\"Col\\": \\"\\",\\n                        \\"Order\\": 0\\n                      }\\n                    ],\\n                    \\"StoredAsSubDirectories\\": true\\n                  },\\n                  \\"TableName\\": \\"\\",\\n                  \\"TableType\\": \\"\\",\\n                  \\"Temporary\\": true,\\n                  \\"UpdateTime\\": 0,\\n                  \\"ViewExpandedText\\": \\"\\",\\n                  \\"ViewOriginalText\\": \\"\\",\\n                  \\"TableId\\": \\"59c6c8fefeaa46d8b599c1f790c59a19\\",\\n                  \\"TableVersion\\": {\\n                    \\"VersionId\\": 0\\n                  }\\n                },\\n                \\"VersionId\\": 0\\n              }\\n            },\\n            \\"VersionId\\": 0\\n          }\\n        },\\n        \\"HighLightList\\": [\\n          {\\n            \\"Key\\": \\"name\\",\\n            \\"Value\\": \\"<em>tab</em>2\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TotalCount\\": 1100\\n  },\\n  \\"CatalogResult\\": {\\n    \\"Catalogs\\": [\\n      {\\n        \\"Catalog\\": {\\n          \\"CatalogId\\": \\"\\",\\n          \\"Description\\": \\"\\",\\n          \\"LocationUri\\": \\"\\",\\n          \\"Owner\\": \\"\\",\\n          \\"CreatedBy\\": \\"\\",\\n          \\"CreateTime\\": 0,\\n          \\"UpdateTime\\": 0,\\n          \\"Status\\": \\"\\",\\n          \\"CatalogType\\": \\"\\",\\n          \\"DefaultCatalog\\": true,\\n          \\"ThriftEnabled\\": true,\\n          \\"JdbcEnabled\\": true,\\n          \\"StorageAccessConfig\\": \\"\\"\\n        },\\n        \\"HighLightList\\": [\\n          {\\n            \\"Key\\": \\"name\\",\\n            \\"Value\\": \\"<em>tab</em>2\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TotalCount\\": 100\\n  }\\n}","type":"json"}]',
      'title' => '跨Catalog搜索元数据',
    ),
    'RegisterLocation' => 
    array (
      'summary' => '将OSS路径注册为由DLF管理。',
      'path' => '/webapi/locations',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP',
            'type' => 'object',
            'properties' => 
            array (
              'Location' => 
              array (
                'description' => '注册的OSS路径',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'oss://mybucket/',
              ),
              'RoleName' => 
              array (
                'description' => 'RAM角色名称
> Data Lake Formation 读/写OSS路径下的数据，需要相关授权角色，可以选择AliyunDLFWorkFlowDefaultRole角色，它将会自动内建相关路径的授权权限。或者您自定义角色，但需要由您手工保障该角色，有相应路径的读写权限。',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'AliyunDLFWorkFlowDefaultRole',
              ),
              'InventoryCollectEnabled' => 
              array (
                'description' => '是否启用OSS存储空间清单',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'OssLogCollectEnabled' => 
              array (
                'description' => '是否启用OSS日志转存',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '注册结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3C2678BA-3451-14C3-90E2-D4EF5B4E7A84',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。取值如下：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'LocationId' => 
                  array (
                    'description' => 'Location ID',
                    'type' => 'string',
                    'example' => 'LOC-AB8FBC17F95A4AF5',
                  ),
                  'StorageCollectTaskOperationResultList' => 
                  array (
                    'description' => '启用采集任务的结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '启用采集任务的结果',
                      '$ref' => '#/components/schemas/StorageCollectTaskOperationResult',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3C2678BA-3451-14C3-90E2-D4EF5B4E7A84\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LocationId\\": \\"LOC-AB8FBC17F95A4AF5\\",\\n    \\"StorageCollectTaskOperationResultList\\": [\\n      {\\n        \\"Success\\": true,\\n        \\"TaskId\\": \\"\\",\\n        \\"TaskType\\": \\"\\",\\n        \\"DlfCreated\\": true,\\n        \\"ErrCode\\": \\"\\",\\n        \\"ErrMessage\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '注册Location',
    ),
    'DeregisterLocation' => 
    array (
      'summary' => '取消Location注册。',
      'path' => '/webapi/locations',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
      ),
      'produces' => 
      array (
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LocationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Location ID
> 您可以调用接口RegisterLocation获取Location ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'LOC-AB8FBC17F95A4AF5',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '取消注册结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E47920CD-BAE6-1305-88DF-FBDD3D300845',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。取值如下：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'LocationId' => 
                  array (
                    'description' => 'Location ID',
                    'type' => 'string',
                    'example' => 'LOC-AB8FBC17F95A4AF5',
                  ),
                  'StorageCollectTaskOperationResultList' => 
                  array (
                    'description' => '关闭采集任务的结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '关闭采集任务的结果',
                      '$ref' => '#/components/schemas/StorageCollectTaskOperationResult',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E47920CD-BAE6-1305-88DF-FBDD3D300845\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LocationId\\": \\"LOC-AB8FBC17F95A4AF5\\",\\n    \\"StorageCollectTaskOperationResultList\\": [\\n      {\\n        \\"Success\\": true,\\n        \\"TaskId\\": \\"\\",\\n        \\"TaskType\\": \\"\\",\\n        \\"DlfCreated\\": true,\\n        \\"ErrCode\\": \\"\\",\\n        \\"ErrMessage\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '取消Location注册',
    ),
    'UpdateRegisteredLocation' => 
    array (
      'summary' => '编辑已注册的Location。',
      'path' => '/webapi/locations',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'HTTP',
            'type' => 'object',
            'properties' => 
            array (
              'LocationId' => 
              array (
                'description' => 'Location ID
> 您可以调用接口RegisterLocation获取Location ID。',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'LOC-AB8FBC17F95A4AF5',
              ),
              'InventoryCollectEnabled' => 
              array (
                'description' => '是否启用OSS存储空间清单',
                'type' => 'boolean',
                'required' => false,
                'docRequired' => false,
                'example' => 'true',
              ),
              'OssLogCollectEnabled' => 
              array (
                'description' => '是否启用OSS日志转存',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '编辑Location结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8030C902-C25B-1839-867D-E6F70A5B9810',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。取值如下：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'LocationId' => 
                  array (
                    'description' => 'Location ID',
                    'type' => 'string',
                    'example' => 'LOC-AB8FBC17F95A4AF5',
                  ),
                  'StorageCollectTaskOperationResultList' => 
                  array (
                    'description' => '修改采集任务的结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '修改采集任务的结果',
                      '$ref' => '#/components/schemas/StorageCollectTaskOperationResult',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8030C902-C25B-1839-867D-E6F70A5B9810\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LocationId\\": \\"LOC-AB8FBC17F95A4AF5\\",\\n    \\"StorageCollectTaskOperationResultList\\": [\\n      {\\n        \\"Success\\": true,\\n        \\"TaskId\\": \\"\\",\\n        \\"TaskType\\": \\"\\",\\n        \\"DlfCreated\\": true,\\n        \\"ErrCode\\": \\"\\",\\n        \\"ErrMessage\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '编辑Location',
    ),
    'ListPartitionsByExpr' => 
    array (
      'path' => '/api/metastore/catalogs/databases/tables/partitions/listbyexpr',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '',
    ),
    'GetDatabaseProfile' => 
    array (
      'summary' => '获取库数据概况的详细信息。',
      'path' => '/webapi/metastorehouse/catalog/database/databaseprofile',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据目录ID，默认填写主账号ID',
            'type' => 'string',
            'required' => false,
            'example' => '1344371
',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_db
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '错误码',
                'type' => 'string',
                'example' => '-',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '-',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'AEA7DCC8-DBF5-561B-A7FD-0747D7D51FEB',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '请求是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'DatabaseProfile' => 
              array (
                'description' => '库数据概况',
                'example' => '{
	"FileCnt": 213,
	"FileSize": 34324
}',
                '$ref' => '#/components/schemas/DatabaseProfile',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"-\\",\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"AEA7DCC8-DBF5-561B-A7FD-0747D7D51FEB\\",\\n  \\"Success\\": true,\\n  \\"DatabaseProfile\\": {\\n    \\"FileCnt\\": 0,\\n    \\"FileSize\\": 0,\\n    \\"Name\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"Location\\": \\"\\",\\n    \\"ObjectSize\\": 0,\\n    \\"ObjectCnt\\": 0,\\n    \\"LatestDate\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDatabaseProfileResponse>\\n    <RequestId>AEA7DCC8-DBF5-561B-A7FD-0747D7D51FEB</RequestId>\\n    <Success>true</Success>\\n    <DatabaseProfile>\\n        <FileCnt>3234</FileCnt>\\n        <FileSize>1254312</FileSize>\\n        <Name>test_db</Name>\\n        <CreateTime>2023-08-16 18:02:22</CreateTime>\\n        <Location>oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_db/</Location>\\n        <ObjectSize>1254312</ObjectSize>\\n        <ObjectCnt>3234</ObjectCnt>\\n        <LatestDate>2023-08-30 19:16:10</LatestDate>\\n    </DatabaseProfile>\\n</GetDatabaseProfileResponse>","errorExample":""}]',
      'title' => '获取库数据概况',
      'description' => '使用数据概况需要先将该库的 OSS Bucket 进行 Location 托管。',
    ),
    'GetLifecycleRule' => 
    array (
      'summary' => '获取库表生命周期规则。',
      'path' => '/webapi/metastorehouse/lifecycle/rule/getLifecycleRule',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '资源名称，目录库表拼接而成的字符串',
            'type' => 'string',
            'required' => false,
            'example' => 'demo_catalog_id.demo_db_name.demo_table_name',
          ),
        ),
        1 => 
        array (
          'name' => 'BizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务ID',
            'type' => 'string',
            'required' => false,
            'example' => 'LCRU-17E7192705C365C0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'EDBC848F-7CC7-52E3-9FBF-924D09B5C27A',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                '$ref' => '#/components/schemas/LifecycleRule',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EDBC848F-7CC7-52E3-9FBF-924D09B5C27A\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"BizId\\": \\"\\",\\n    \\"GmtCreate\\": \\"\\",\\n    \\"GmtModified\\": \\"\\",\\n    \\"Name\\": \\"\\",\\n    \\"ResourceType\\": \\"\\",\\n    \\"BindCount\\": 0,\\n    \\"Description\\": \\"\\",\\n    \\"RuleType\\": \\"\\",\\n    \\"Config\\": \\"\\",\\n    \\"IaDays\\": 0,\\n    \\"ArchiveDays\\": 0,\\n    \\"ColdArchiveDays\\": 0,\\n    \\"ScheduleStatus\\": \\"\\",\\n    \\"Workflow\\": {\\n      \\"LatestInstanceId\\": \\"\\",\\n      \\"LatestInstanceStatus\\": \\"\\",\\n      \\"LatestStartTime\\": \\"\\",\\n      \\"LatestEndTime\\": \\"\\"\\n    },\\n    \\"WorkflowId\\": \\"\\",\\n    \\"WorkflowInstance\\": {\\n      \\"DlfWorkflowId\\": \\"\\",\\n      \\"ExternalInstanceId\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"EndTime\\": 0,\\n      \\"Status\\": \\"\\",\\n      \\"RuntimeLogs\\": [\\n        {\\n          \\"GmtCreate\\": \\"\\",\\n          \\"InstanceId\\": \\"\\",\\n          \\"BizTime\\": \\"\\",\\n          \\"LogType\\": \\"\\",\\n          \\"LogId\\": \\"\\",\\n          \\"LogSummary\\": \\"\\",\\n          \\"LogContent\\": \\"\\"\\n        }\\n      ],\\n      \\"BatchProgress\\": 0\\n    },\\n    \\"CatalogId\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取库表生命周期规则',
    ),
    'ListPartitionsProfile' => 
    array (
      'summary' => '获取分区数据概况的详细信息。',
      'path' => '/webapi/metastorehouse/catalog/database/tableprofile/partitionprofile/listPartitionsProfile',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '139289',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdlfTGKBOY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CatalogId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CatalogId',
            'description' => '数据目录ID，默认填写主账号ID',
            'type' => 'string',
            'required' => false,
            'example' => '1344371',
          ),
        ),
        1 => 
        array (
          'name' => 'DatabaseName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatabaseName',
            'description' => '元数据库名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_db',
          ),
        ),
        2 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '元数据表名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test_tbl',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'PartitionNames',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '分区名称列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分区名称',
              'type' => 'string',
              'required' => false,
              'example' => 'year=3/month=1',
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Response',
            'description' => 'Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => 'Code',
                'description' => '错误码',
                'type' => 'string',
                'example' => '-',
              ),
              'Message' => 
              array (
                'title' => 'Message',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '-',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '97434FA4-A6B2-1AE4-A174-76964F29C759',
              ),
              'Success' => 
              array (
                'title' => 'Success',
                'description' => '请求是否成功。取值如下：
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Total' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Data' => 
              array (
                'description' => '分区数据概况列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分区数据概况',
                  '$ref' => '#/components/schemas/PartitionProfile',
                ),
              ),
              'LatestDate' => 
              array (
                'description' => '元仓更新时间',
                'type' => 'string',
                'example' => '2023-08-30 19:16:10',
              ),
              'LatestAccessNumDate' => 
              array (
                'description' => '访问频次更新时间（已废弃）',
                'type' => 'string',
                'example' => '-',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"-\\",\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"97434FA4-A6B2-1AE4-A174-76964F29C759\\",\\n  \\"Success\\": true,\\n  \\"Total\\": 10,\\n  \\"Data\\": [\\n    {\\n      \\"DatabaseName\\": \\"test_db\\",\\n      \\"TableName\\": \\"test_tbl\\",\\n      \\"PartitionName\\": \\"year=2023/month=1\\",\\n      \\"ArchiveStatus\\": \\"STANDARD\\",\\n      \\"CreateTime\\": \\"2023-08-16 18:02:22\\",\\n      \\"LastModifyTime\\": \\"2023-08-16 18:02:25\\",\\n      \\"LastAccessTime\\": \\"2023-08-22 12:14:42\\",\\n      \\"LastAccessNumTime\\": \\"\\",\\n      \\"Location\\": \\"oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_tb/test_tbl/year=2023/month=1\\",\\n      \\"FileSize\\": 13,\\n      \\"ObjectSize\\": 13,\\n      \\"FileCnt\\": 1,\\n      \\"ObjectCnt\\": 1,\\n      \\"AccessNum\\": 0,\\n      \\"AccessNumWeekly\\": 0,\\n      \\"AccessNumMonthly\\": 0,\\n      \\"ObjectAccessNum\\": 0,\\n      \\"ObjectAccessNumWeekly\\": 4,\\n      \\"ObjectAccessNumMonthly\\": 4,\\n      \\"DataSourceType\\": \\"OSS_HDFS\\"\\n    }\\n  ],\\n  \\"LatestDate\\": \\"2023-08-30 19:16:10\\",\\n  \\"LatestAccessNumDate\\": \\"-\\"\\n}","errorExample":""},{"type":"xml","example":"<ListPartitionsProfileResponse>\\n    <Code>-</Code>\\n    <Message>-</Message>\\n    <RequestId>97434FA4-A6B2-1AE4-A174-76964F29C759</RequestId>\\n    <Success>true</Success>\\n    <Total>1</Total>\\n    <Data>\\n        <DatabaseName>test_db</DatabaseName>\\n        <TableName>test_tbl</TableName>\\n        <PartitionName>year=2023/month=1</PartitionName>\\n        <ArchiveStatus>STANDARD</ArchiveStatus>\\n        <CreateTime>2023-08-16 18:02:22</CreateTime>\\n        <LastModifyTime>2023-08-16 18:02:25</LastModifyTime>\\n        <LastAccessTime>2023-08-22 12:14:42</LastAccessTime>\\n        <Location>oss://mybucket.cn-hangzhou.oss-dls.aliyuncs.com/test_tb/test_tbl/year=2023/month=1</Location>\\n        <FileSize>13</FileSize>\\n        <ObjectSize>13</ObjectSize>\\n        <FileCnt>1</FileCnt>\\n        <ObjectCnt>1</ObjectCnt>\\n        <ObjectAccessNum>0</ObjectAccessNum>\\n        <ObjectAccessNumWeekly>4</ObjectAccessNumWeekly>\\n        <ObjectAccessNumMonthly>4</ObjectAccessNumMonthly>\\n        <DataSourceType>OSS_HDFS</DataSourceType>\\n    </Data>\\n    <LatestDate>2023-08-30 19:16:10</LatestDate>\\n</ListPartitionsProfileResponse>","errorExample":""}]',
      'title' => '获取分区数据概况',
      'description' => '使用数据概况需要先将该表的 OSS Bucket 进行 Location 托管。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'dlf.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'dlf.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'dlf.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'dlf.cn-shenzhen.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'dlf.ap-southeast-1.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'dlf.eu-central-1.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'dlf.cn-zhangjiakou.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'dlf.us-east-1.aliyuncs.com',
    ),
  ),
);
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'rds-data',
        'version' => '2022-03-30',
    ],
    'directories' => [
        [
            'id' => 185481,
            'title' => '事务',
            'type' => 'directory',
            'children' => [
                'BeginTransaction',
                'CommitTransaction',
                'RollbackTransaction',
            ],
        ],
        [
            'id' => 185482,
            'title' => '数据操作',
            'type' => 'directory',
            'children' => [
                'InsertList',
                'ExecuteStatement',
                'BatchExecuteStatement',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'BatchExecuteStatementResult' => [
                'title' => '-',
                'description' => 'BatchExecuteStatement的返回值。',
                'type' => 'object',
                'properties' => [
                    'GeneratedFieldsList' => [
                        'title' => '-',
                        'description' => '批处理SQL执行过程中的自增列。',
                        'type' => 'array',
                        'items' => [
                            'description' => '批处理SQL中的一条SQL执行的自增列。',
                            'type' => 'array',
                            'items' => [
                                'description' => '自增列的值，详情请参见[Field](~~459828~~)。',
                                '$ref' => '#/components/schemas/Field',
                            ],
                        ],
                    ],
                ],
            ],
            'BeginTransactionResult' => [
                'title' => '-',
                'description' => 'BeginTransaction的返回值。',
                'type' => 'object',
                'properties' => [
                    'TransactionId' => [
                        'title' => '-',
                        'description' => '开启的事务ID。',
                        'type' => 'string',
                        'example' => '86****1d-****-45ce-****-354e****cb34',
                    ],
                ],
            ],
            'ColumnMetadata' => [
                'title' => '-',
                'description' => '列元数据。',
                'type' => 'object',
                'properties' => [
                    'ArrayBaseColumnType' => [
                        'title' => '-',
                        'description' => '列是否是Array类型，各取值含义如下：'."\n"
                            ."\n"
                            .'- **1**：是Array类型。'."\n"
                            ."\n"
                            .'- **0**：不是Array类型。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'IsAutoIncrement' => [
                        'title' => '-',
                        'description' => '列是否自增，各取值含义如下：'."\n"
                            ."\n"
                            .'- **true**：自增。'."\n"
                            ."\n"
                            .'- **false**：不自增。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'IsCaseSensitive' => [
                        'title' => '-',
                        'description' => '列是否对大小写敏感，各取值含义如下：'."\n"
                            ."\n"
                            .'- **true**：敏感。'."\n"
                            ."\n"
                            .'- **false**：不敏感。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'IsCurrency' => [
                        'title' => '-',
                        'description' => '列是否存储货币值，各取值含义如下：'."\n"
                            ."\n"
                            .'- **true**：存储货币值。'."\n"
                            ."\n"
                            .'- **false**：不存储货币值。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'IsSigned' => [
                        'title' => '-',
                        'description' => '列是否有符号，各取值含义如下：'."\n"
                            ."\n"
                            .'- **true**：有符号。'."\n"
                            ."\n"
                            .'- **false**：没有符号。',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                    'Label' => [
                        'title' => '-',
                        'description' => '列的标签。',
                        'type' => 'string',
                        'example' => 'TBL_BIG',
                    ],
                    'Name' => [
                        'title' => '-',
                        'description' => '列名。',
                        'type' => 'string',
                        'example' => 'name',
                    ],
                    'Nullable' => [
                        'title' => '-',
                        'description' => '列是否可为空，各取值含义如下：'."\n"
                            ."\n"
                            .'- **1**：可为空。'."\n"
                            ."\n"
                            .'- **0**：不可为空。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'Precision' => [
                        'title' => '-',
                        'description' => '列的精度，表示整个十进制数的整数和小数部分一共包含的位数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'Scale' => [
                        'title' => '-',
                        'description' => '列的比例，表示十进制数的小数部分包含的位数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                    ],
                    'SchemaName' => [
                        'title' => '-',
                        'description' => '列所属schema的名称。',
                        'type' => 'string',
                        'example' => 'test_schema',
                    ],
                    'TableName' => [
                        'title' => '-',
                        'description' => '列所属表的名称。',
                        'type' => 'string',
                        'example' => 'users',
                    ],
                    'Type' => [
                        'title' => '-',
                        'description' => '列的类型。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '93',
                    ],
                    'TypeName' => [
                        'title' => '-',
                        'description' => '列的类型名。',
                        'type' => 'string',
                        'example' => 'TIMESTAMP',
                    ],
                ],
            ],
            'CommitTransactionResult' => [
                'title' => '-',
                'description' => 'CommitTransaction的返回值。',
                'type' => 'object',
                'properties' => [
                    'TransactionStatus' => [
                        'title' => '-',
                        'description' => '事务状态。各取值含义如下：'."\n"
                            ."\n"
                            .'- **Transaction Commit**：事务已提交。'."\n"
                            ."\n"
                            .'- **Transaction Rollback**：事务已回滚。'."\n",
                        'type' => 'string',
                        'example' => 'Transaction Commit',
                    ],
                ],
            ],
            'DeleteResult' => [
                'title' => '-',
                'description' => 'Delete操作的返回值。',
                'type' => 'object',
                'properties' => [
                    'NumberOfRecordsUpdated' => [
                        'title' => '-',
                        'description' => '删除的记录条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '5',
                    ],
                ],
            ],
            'ExecuteStatementResult' => [
                'title' => '-',
                'description' => 'ExecuteStatement的返回值。',
                'type' => 'object',
                'properties' => [
                    'ColumnMetadata' => [
                        'title' => '-',
                        'description' => '参数说明如下：',
                        'type' => 'array',
                        'items' => [
                            'description' => '列元数据，详情请参见[ColumMetadata](~~459825~~)。',
                            '$ref' => '#/components/schemas/ColumnMetadata',
                        ],
                    ],
                    'FormattedRecords' => [
                        'title' => '-',
                        'description' => '请求参数FormatRecordsAs为`JSON`时的返回值。',
                        'type' => 'string',
                        'example' => '[{ "name": "jack" }]',
                    ],
                    'GeneratedFields' => [
                        'title' => '-',
                        'description' => 'SQL执行过程中的自增列列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'SQL执行过程中的自增列，详情请参见[Field](~~459828~~)。',
                            '$ref' => '#/components/schemas/Field',
                        ],
                    ],
                    'NumberOfRecordsUpdated' => [
                        'title' => '-',
                        'description' => 'SQL执行影响的行数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '2',
                    ],
                    'Records' => [
                        'title' => '-',
                        'description' => '查询语句的返回值。',
                        'type' => 'array',
                        'items' => [
                            'description' => '返回值中的一条记录。',
                            'type' => 'array',
                            'items' => [
                                'description' => '一条记录中的一个字段，详情请参见[Field](~~459828~~)。',
                                '$ref' => '#/components/schemas/Field',
                            ],
                        ],
                    ],
                ],
            ],
            'Field' => [
                'title' => '-',
                'description' => '值结构。',
                'type' => 'object',
                'properties' => [
                    'ArrayValue' => [
                        'title' => '-',
                        'description' => '数组类型值。',
                        'type' => 'string',
                        'example' => '[item1, item2, item3]',
                    ],
                    'BlobValue' => [
                        'title' => '-',
                        'description' => 'Base64格式编码后的字节流。',
                        'type' => 'string',
                        'example' => 'aGVsbG8=',
                    ],
                    'BooleanValue' => [
                        'title' => '-',
                        'description' => '布尔类型值。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'IsNull' => [
                        'title' => '-',
                        'description' => '字段是否为空值，各取值含义如下：'."\n"
                            ."\n"
                            .'- **true**：为空值。'."\n"
                            ."\n"
                            .'- **false**：不为空值。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'LongValue' => [
                        'title' => '-',
                        'description' => 'Long类型值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '3213212',
                    ],
                    'StringValue' => [
                        'title' => '-',
                        'description' => 'String类型值。',
                        'type' => 'string',
                        'example' => 'I am a string',
                    ],
                ],
            ],
            'InsertListResult' => [
                'title' => '-',
                'description' => 'InsertList操作的返回值。',
                'type' => 'object',
                'properties' => [
                    'NumberOfRecordsUpdated' => [
                        'title' => '-',
                        'description' => '插入的记录条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '5',
                    ],
                    'AutoIncrementKeys' => [
                        'title' => '-',
                        'description' => '每条记录插入时的自增列的值。',
                        'type' => 'array',
                        'items' => [
                            'description' => '单条数据插入时的自增列的值。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '2',
                        ],
                    ],
                ],
            ],
            'InsertResult' => [
                'title' => '-',
                'description' => 'Insert操作的返回值。',
                'type' => 'object',
                'properties' => [
                    'NumberOfRecordsUpdated' => [
                        'title' => '-',
                        'description' => '插入的记录条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                    'AutoIncrementKey' => [
                        'title' => '-',
                        'description' => '插入操作中自增列的值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                ],
            ],
            'ResultSetOptions' => [
                'title' => '-',
                'description' => '参数说明如下：',
                'type' => 'object',
                'properties' => [
                    'DecimalReturnType' => [
                        'title' => '-',
                        'description' => '指定DECIMAL类型的列的返回类型。取值如下：'."\n"
                            ."\n"
                            .'- **STRING**'."\n"
                            ."\n"
                            .'- **DOUBLE_OR_LONG**'."\n"
                            ."\n"
                            .'默认值：**STRING**'."\n"
                            ."\n",
                        'type' => 'string',
                        'example' => 'STRING',
                        'default' => 'STRING',
                    ],
                    'LongReturnType' => [
                        'title' => '-',
                        'description' => '指定Long类型的列的返回类型。取值如下：'."\n"
                            ."\n"
                            .'- **LONG**'."\n"
                            ."\n"
                            .'- **STRING**'."\n"
                            ."\n"
                            .'默认值：**LONG**',
                        'type' => 'string',
                        'example' => 'LONG',
                        'default' => 'LONG',
                    ],
                ],
            ],
            'RollbackTransactionResult' => [
                'title' => '-',
                'description' => 'RollbackTransaction的返回值。',
                'type' => 'object',
                'properties' => [
                    'TransactionStatus' => [
                        'title' => '-',
                        'description' => '事务状态。各取值含义如下：'."\n"
                            ."\n"
                            .'- **Transaction Commit**：事务已提交。'."\n"
                            ."\n"
                            .'- **Transaction Rollback**：事务已回滚。'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'example' => 'Transaction Rollback',
                    ],
                ],
            ],
            'SelectResult' => [
                'title' => '-',
                'description' => 'Select操作的返回值。',
                'type' => 'object',
                'properties' => [
                    'Records' => [
                        'title' => '-',
                        'description' => '查询结果集。',
                        'type' => 'array',
                        'items' => [
                            'description' => '结果集中的一条记录。',
                            'type' => 'object',
                            'additionalProperties' => [
                                'description' => '一条记录的一个字段。',
                                'type' => 'any',
                                'example' => 'value1',
                            ],
                        ],
                    ],
                ],
            ],
            'Selector' => [
                'title' => '-',
                'description' => '-单个字段的查询条件',
                'type' => 'object',
                'properties' => [
                    'Lt' => [
                        'title' => '-',
                        'description' => '-小于',
                        'type' => 'string',
                        'example' => '100（此字段小于100）',
                    ],
                    'Le' => [
                        'title' => '-',
                        'description' => '-小于等于',
                        'type' => 'string',
                        'example' => '100（此字段小于等于100）',
                    ],
                    'Gt' => [
                        'title' => '-',
                        'description' => '-大于',
                        'type' => 'string',
                        'example' => '10（此字段大于10）',
                    ],
                    'Ge' => [
                        'title' => '-',
                        'description' => '-大于等于',
                        'type' => 'string',
                        'example' => '10（此字段大于等于10）',
                    ],
                    'Eq' => [
                        'title' => '-',
                        'description' => '-等于',
                        'type' => 'string',
                        'example' => 'victor（此字段等于victor）',
                    ],
                    'Ne' => [
                        'title' => '-',
                        'description' => '-不等于',
                        'type' => 'string',
                        'example' => 'rose（此字段不等于rose）',
                    ],
                    'Like' => [
                        'title' => '-',
                        'description' => '-模糊查询',
                        'type' => 'string',
                        'example' => 'jack%（此字段以jack开头）',
                    ],
                ],
            ],
            'SqlParameter' => [
                'title' => '-',
                'description' => '参数说明如下：',
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'title' => '-',
                        'description' => '参数名称。',
                        'type' => 'string',
                        'example' => 'parameter_one',
                    ],
                    'TypeHint' => [
                        'title' => '-',
                        'description' => '表示该参数存储到数据库的类型。取值如下：'."\n"
                            ."\n"
                            .'- **DATE**'."\n"
                            ."\n"
                            .'- **DECIMAL**'."\n"
                            ."\n"
                            .'- **JSON**'."\n"
                            ."\n"
                            .'- **TIME**'."\n"
                            ."\n"
                            .'- **TIMESTAMP**'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'example' => 'DATE',
                        'default' => 'DEFAULE',
                    ],
                    'Value' => [
                        'description' => '参数值，详情请参见[Field](~~459828~~)。',
                        '$ref' => '#/components/schemas/Field',
                    ],
                ],
            ],
            'UpdateResult' => [
                'title' => '-',
                'description' => 'Update操作的返回值。',
                'type' => 'object',
                'properties' => [
                    'NumberOfRecordsUpdated' => [
                        'title' => '-',
                        'description' => '更新的记录条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '5',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'BeginTransaction' => [
            'summary' => '开启事务。',
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](~~446624~~)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds:cn-hangzhou:1335786916******:rds-db-credent****/zha***Test03-21****',
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```'."\n"
                            ."\n"
                            .'参数说明如下：'."\n"
                            ."\n"
                            .'- regionId：地域ID，可调用[DescribeSecrets](~~446624~~)接口获取。'."\n"
                            .'- accountId：阿里云账号ID，可调用[DescribeSecrets](~~446624~~)接口获取。'."\n"
                            .'- instanceId：实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds:cn-hangzhou:13357869165******:dbinstance/rm-bp1m7l3j633******',
                    ],
                ],
                [
                    'name' => 'Database',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数如下。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4FD736C2-D774-5ACF-8366-8A72114BE7F9',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'There is an error in the call.',
                            ],
                            'Data' => [
                                'description' => '返回数据，详情请参见[BeginTransactionResult](~~459816~~)。',
                                '$ref' => '#/components/schemas/BeginTransactionResult',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4FD736C2-D774-5ACF-8366-8A72114BE7F9\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"TransactionId\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BeginTransactionResponse>\\n    <RequestId>4FD736C2-D774-5ACF-8366-8A72114BE7F9</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Data>\\n        <TransactionId>8609****-94e1-45ce-8e25-354e3dd8****</TransactionId>\\n    </Data>\\n</BeginTransactionResponse>","errorExample":""}]',
            'title' => '开启事务',
            'description' => '本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。',
        ],
        'CommitTransaction' => [
            'summary' => '调用CommitTransaction接口提交事务变更。',
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](~~446624~~)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds-api:cn-hangzhou:1266348003******:rds-db-credentials/mySecret-Uy****',
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```'."\n"
                            ."\n"
                            .'参数说明如下：'."\n"
                            ."\n"
                            .'- regionId：地域ID，可调用[DescribeSecrets](~~446624~~)接口获取。'."\n"
                            .'- accountId：阿里云账号ID，可调用[DescribeSecrets](~~446624~~)接口获取。'."\n"
                            .'- instanceId：实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds:cn-hangzhou:1266348003******:dbinstance/rm-1234567890abc****',
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要提交的事务ID，您可调用**BeginTransaction**接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8609****-94e1-45ce-8e25-354e3dd8****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数如下。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9689CF67-B653-5A0F-B9E3-3CC6BBD580ED',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'There is an error in the call.',
                            ],
                            'Data' => [
                                'description' => '返回数据，详情请参见[CommitTransactionResult](~~459811~~)。',
                                '$ref' => '#/components/schemas/CommitTransactionResult',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9689CF67-B653-5A0F-B9E3-3CC6BBD580ED\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"TransactionStatus\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CommitTransactionResponse>\\n    <RequestId>9689CF67-B653-5A0F-B9E3-3CC6BBD580ED</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Data>\\n        <TransactionStatus>Transaction Commit</TransactionStatus>\\n    </Data>\\n</CommitTransactionResponse>","errorExample":""}]',
            'title' => '提交事务',
            'description' => '本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。',
        ],
        'RollbackTransaction' => [
            'summary' => '调用RollbackTransaction接口执行事务的回滚，回滚事务会取消其更改。',
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](~~446624~~)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds-api:cn-hangzhou:1266348003******:rds-db-credenti***/mySecret-Uy****',
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```'."\n"
                            ."\n"
                            .'参数说明如下：'."\n"
                            ."\n"
                            .'- regionId：地域ID，可调用[DescribeSecrets](~~446624~~)接口获取。'."\n"
                            .'- accountId：阿里云账号ID，可调用[DescribeSecrets](~~446624~~)接口获取。'."\n"
                            .'- instanceId：实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds:cn-hangzhou:1266348003******:dbinstance/rm-1234567890abc****',
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要回滚的事务ID，您可调用**BeginTransaction**接口获取该参数的值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8609****-94e1-45ce-8e25-354e3dd8****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数如下。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D2FEE6D7-DCA6-57B4-946A-9E670B773518',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'There is an error in the call.',
                            ],
                            'Data' => [
                                'description' => '返回数据，详情请参见[RollbackTransactionResult](~~459815~~)。',
                                '$ref' => '#/components/schemas/RollbackTransactionResult',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D2FEE6D7-DCA6-57B4-946A-9E670B773518\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"TransactionStatus\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RollbackTransactionResponse>\\n    <RequestId>D2FEE6D7-DCA6-57B4-946A-9E670B773518</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Data>\\n        <TransactionStatus>Transaction Rollback</TransactionStatus>\\n    </Data>\\n</RollbackTransactionResponse>","errorExample":""}]',
            'title' => '回滚事务',
            'description' => '本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。',
        ],
        'InsertList' => [
            'summary' => '调用InsertList批量插入数据。',
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](https://help.aliyun.com/document_detail/446624.html)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds-api:cn-hangzhou:1266348003******:rds-db-credenti***/mySecret-Uy****',
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```'."\n"
                            ."\n"
                            .'参数说明如下：'."\n"
                            ."\n"
                            .'- regionId：地域ID，可调用[DescribeSecrets](https://help.aliyun.com/document_detail/446624.html)接口获取。'."\n"
                            .'- accountId：阿里云账号ID，可调用[DescribeSecrets](https://help.aliyun.com/document_detail/446624.html)接口获取。'."\n"
                            .'- instanceId：实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds:cn-hangzhou:1266348003******:dbinstance/rm-1234567890abc****',
                    ],
                ],
                [
                    'name' => 'Database',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_db',
                    ],
                ],
                [
                    'name' => 'Table',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '表名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要提交的事务ID，您可调用**BeginTransaction**接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8609****-94e1-45ce-8e25-354e3dd8****',
                    ],
                ],
                [
                    'name' => 'Records',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '要批量插入的数据，数据结构为array数组，每一项为一条记录',
                        'type' => 'array',
                        'items' => [
                            'description' => '要插入的数据，数据结构为map  '."\n"
                                .'key为表字段名称，value为字段值  '."\n"
                                ."\n"
                                .'示例：`{ name: "jack", age: 18 }`',
                            'type' => 'object',
                            'required' => false,
                            'additionalProperties' => [
                                'type' => 'any',
                                'example' => 'test_value',
                                'description' => '插入数据的value值，任意类型。',
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
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D2FEE6D7-DCA6-57B4-946A-9E670B773518',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。'."\n"
                                    ."\n"
                                    .'> 请求成功时该参数返回为空。',
                                'type' => 'string',
                                'example' => 'There is an error in the call.',
                            ],
                            'Data' => [
                                'description' => 'InsertList的返回值，详情请参见[InsertListResult](https://help.aliyun.com/document_detail/462779.html)。',
                                '$ref' => '#/components/schemas/InsertListResult',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D2FEE6D7-DCA6-57B4-946A-9E670B773518\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"NumberOfRecordsUpdated\\": 0,\\n    \\"AutoIncrementKeys\\": [\\n      0\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '插入多条数据',
            'description' => '本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。',
        ],
        'ExecuteStatement' => [
            'summary' => '调用ExecuteStatement接口对指定数据库执行SQL语句。',
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](~~446624~~)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds-api:cn-hangzhou:1266348003******:rds-db-credentials/mySecret-Uy****',
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```'."\n"
                            ."\n"
                            .'参数说明如下：'."\n"
                            ."\n"
                            .'- regionId：地域ID，可调用[DescribeSecrets](~~446624~~)接口获取。'."\n"
                            .'- accountId：阿里云账号ID，可调用[DescribeSecrets](~~446624~~)接口获取。'."\n"
                            .'- instanceId：实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds:cn-hangzhou:1266348003******:dbinstance/rm-1234567890abc****',
                    ],
                ],
                [
                    'name' => 'Database',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ContinueAfterTimeout',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '如果调用超时，选择是否继续运行SQL语句，取值如下：'."\n"
                            ."\n"
                            .'- **true**：继续运行'."\n"
                            .'- **false**：停止运行'."\n"
                            ."\n"
                            .'> 默认情况下，SQL语句在调用超时后停止运行。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'FormatRecordsAs',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否将结果集格式化为单个JSON字符串。'."\n"
                            ."\n"
                            .'- 仅允许传入**NONE**或**JSON**。'."\n"
                            .'- 默认值为**NONE**。'."\n"
                            .'- 此参数仅适用于SELECT语句，对于其他类型的语句将被忽略。'."\n"
                            .'- 结果将返回在**formattedRecords**中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'JSON',
                    ],
                ],
                [
                    'name' => 'IncludeResultMetadata',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否在结果中包含元数据的值，取值如下：'."\n"
                            ."\n"
                            .'- **true**：包含'."\n"
                            .'- **false**：不包含',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Sql',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要执行的SQL语句。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'select * from users',
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已启动的事务ID，您可调用[BeginTransaction](~~446897~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8609****-94e1-45ce-8e25-354e3dd8****',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '待执行SQL语句的参数详情。',
                        'type' => 'array',
                        'items' => [
                            'description' => '参数值，详情请参见[SqlParameter](~~459814~~)。',
                            'required' => false,
                            '$ref' => '#/components/schemas/SqlParameter',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResultSetOptions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '控制如何返回结果集的选项。',
                        'type' => 'object',
                        'properties' => [
                            'DecimalReturnType' => [
                                'description' => '指定DECIMAL类型返回后，允许显示的数据类型。'."\n"
                                    ."\n"
                                    .'- **STRING**：将字段转换为String值。'."\n"
                                    .'- **DOUBLE\\_OR\\_LONG**：如果它的scale为0，则将字段转换为**Long**值，否则转换为**Double**值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'STRING',
                            ],
                            'LongReturnType' => [
                                'description' => '指定LONG类型返回后，允许显示的数据类型。'."\n"
                                    ."\n"
                                    .'- 允许取值为**LONG**或**STRING**。'."\n"
                                    .'- 默认值为**LONG**。'."\n"
                                    .'- 如果数值的长度或精度可能导致截断或舍入错误，建议请指定**STRING**。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'STRING',
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
                        'description' => '返回参数如下。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CDAEE474-87E5-5AE3-A534-922F90D5867D',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'There is an error in the call.',
                            ],
                            'Data' => [
                                'description' => '返回数据，详情请参见[ExecuteStatementResult](~~459820~~)。',
                                '$ref' => '#/components/schemas/ExecuteStatementResult',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CDAEE474-87E5-5AE3-A534-922F90D5867D\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"ColumnMetadata\\": [\\n      {\\n        \\"ArrayBaseColumnType\\": 0,\\n        \\"IsAutoIncrement\\": true,\\n        \\"IsCaseSensitive\\": true,\\n        \\"IsCurrency\\": true,\\n        \\"IsSigned\\": true,\\n        \\"Label\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"Nullable\\": 0,\\n        \\"Precision\\": 0,\\n        \\"Scale\\": 0,\\n        \\"SchemaName\\": \\"\\",\\n        \\"TableName\\": \\"\\",\\n        \\"Type\\": 0,\\n        \\"TypeName\\": \\"\\"\\n      }\\n    ],\\n    \\"FormattedRecords\\": \\"\\",\\n    \\"GeneratedFields\\": [\\n      {\\n        \\"ArrayValue\\": \\"\\",\\n        \\"BlobValue\\": \\"\\",\\n        \\"BooleanValue\\": true,\\n        \\"IsNull\\": true,\\n        \\"LongValue\\": 0,\\n        \\"StringValue\\": \\"\\"\\n      }\\n    ],\\n    \\"NumberOfRecordsUpdated\\": 0,\\n    \\"Records\\": [\\n      [\\n        {\\n          \\"ArrayValue\\": \\"\\",\\n          \\"BlobValue\\": \\"\\",\\n          \\"BooleanValue\\": true,\\n          \\"IsNull\\": true,\\n          \\"LongValue\\": 0,\\n          \\"StringValue\\": \\"\\"\\n        }\\n      ]\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ExecuteStatementResponse>\\n    <RequestId>CDAEE474-87E5-5AE3-A534-922F90D5867D</RequestId>\\n    <Data>\\n        <NumberOfRecordsUpdated>0</NumberOfRecordsUpdated>\\n        <Records>\\n            <0>\\n                <LongValue>1</LongValue>\\n            </0>\\n            <1>\\n                <StringValue>user1</StringValue>\\n            </1>\\n        </Records>\\n        <Records>\\n            <0>\\n                <LongValue>2</LongValue>\\n            </0>\\n            <1>\\n                <StringValue>user2</StringValue>\\n            </1>\\n        </Records>\\n        <Records>\\n            <0>\\n                <LongValue>3</LongValue>\\n            </0>\\n            <1>\\n                <StringValue>user3</StringValue>\\n            </1>\\n        </Records>\\n        <Records>\\n            <0>\\n                <LongValue>4</LongValue>\\n            </0>\\n            <1>\\n                <StringValue>user4</StringValue>\\n            </1>\\n        </Records>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ExecuteStatementResponse>","errorExample":""}]',
            'title' => '执行SQL语句',
            'description' => '本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。',
        ],
        'BatchExecuteStatement' => [
            'summary' => '调用BatchExecuteStatement接口对一组数据执行批处理SQL语句。',
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](~~446624~~)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds-api:cn-hangzhou:1266348003******:rds-db-credentials/mySecret-Uy****',
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```'."\n"
                            ."\n"
                            .'参数说明如下：'."\n"
                            ."\n"
                            .'- regionId：地域ID，可调用[DescribeSecrets](~~446624~~)接口获取。'."\n"
                            .'- accountId：阿里云账号ID，可调用[DescribeSecrets](~~446624~~)接口获取。'."\n"
                            .'- instanceId：实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:rds:cn-hangzhou:1266348003******:dbinstance/rm-1234567890abc****',
                    ],
                ],
                [
                    'name' => 'Database',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Sql',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要执行的SQL 语句。'."\n"
                            ."\n"
                            .'> BatchExecuteStatement接口通常多执行**INSERT**和**UPDATE**语句。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'insert into users(name) values(:name)',
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已启动的事务ID，您可调用[BeginTransaction](~~446897~~)接口获取该参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8609****-94e1-45ce-8e25-354e3dd8****',
                    ],
                ],
                [
                    'name' => 'ParameterSets',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '有关SQL语句的参数说明。',
                        'type' => 'array',
                        'items' => [
                            'description' => '其中一条SQL语句的参数说明。',
                            'type' => 'array',
                            'items' => [
                                'description' => '参数值，详情请参见[SqlParameter](~~459814~~)。',
                                'required' => false,
                                '$ref' => '#/components/schemas/SqlParameter',
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
                        'description' => '返回参数如下。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CDAEE474-87E5-5AE3-A534-922F90D5867D',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。'."\n"
                                    ."\n"
                                    .'> 请求成功时该参数返回为空。',
                                'type' => 'string',
                                'example' => 'There is an error in the call.',
                            ],
                            'Data' => [
                                'description' => '请求返回数据，详情请参见[BatchExecuteStatementResult](~~459817~~)。',
                                '$ref' => '#/components/schemas/BatchExecuteStatementResult',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CDAEE474-87E5-5AE3-A534-922F90D5867D\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"GeneratedFieldsList\\": [\\n      [\\n        {\\n          \\"ArrayValue\\": \\"\\",\\n          \\"BlobValue\\": \\"\\",\\n          \\"BooleanValue\\": true,\\n          \\"IsNull\\": true,\\n          \\"LongValue\\": 0,\\n          \\"StringValue\\": \\"\\"\\n        }\\n      ]\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BatchExecuteStatementResponse>\\n    <RequestId>432A039B-0520-5324-B1CA-87D2FDFC5638</RequestId>\\n    <Data>\\n        <UpdateResults>\\n            <GeneratedFields>\\n                <LongValue>16</LongValue>\\n            </GeneratedFields>\\n        </UpdateResults>\\n        <UpdateResults>\\n            <GeneratedFields>\\n                <LongValue>17</LongValue>\\n            </GeneratedFields>\\n        </UpdateResults>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</BatchExecuteStatementResponse>","errorExample":""}]',
            'title' => '批处理SQL语句',
            'description' => '- 本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。'."\n"
                .'- 您可以使用具有不同参数集的DML语句对多条记录进行批量更新和插入操作。'."\n"
                .'- 与单独的插入和更新操作相比，批量操作可以显著提高性能。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'rds-data.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'rds-data.cn-beijing.aliyuncs.com',
        ],
    ],
];
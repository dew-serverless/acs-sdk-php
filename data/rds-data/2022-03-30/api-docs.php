<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'rds-data',
    'version' => '2022-03-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 185481,
      'title' => '事务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BeginTransaction',
        1 => 'CommitTransaction',
        2 => 'RollbackTransaction',
      ),
    ),
    1 => 
    array (
      'id' => 185482,
      'title' => '数据操作',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'InsertList',
        1 => 'ExecuteStatement',
        2 => 'BatchExecuteStatement',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'BatchExecuteStatementResult' => 
      array (
        'title' => '-',
        'description' => 'BatchExecuteStatement的返回值。',
        'type' => 'object',
        'properties' => 
        array (
          'GeneratedFieldsList' => 
          array (
            'title' => '-',
            'description' => '批处理SQL执行过程中的自增列。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '批处理SQL中的一条SQL执行的自增列。',
              'type' => 'array',
              'items' => 
              array (
                'description' => '自增列的值，详情请参见[Field](~~459828~~)。',
                '$ref' => '#/components/schemas/Field',
              ),
            ),
          ),
        ),
      ),
      'BeginTransactionResult' => 
      array (
        'title' => '-',
        'description' => 'BeginTransaction的返回值。',
        'type' => 'object',
        'properties' => 
        array (
          'TransactionId' => 
          array (
            'title' => '-',
            'description' => '开启的事务ID。',
            'type' => 'string',
            'example' => '86****1d-****-45ce-****-354e****cb34',
          ),
        ),
      ),
      'ColumnMetadata' => 
      array (
        'title' => '-',
        'description' => '列元数据。',
        'type' => 'object',
        'properties' => 
        array (
          'ArrayBaseColumnType' => 
          array (
            'title' => '-',
            'description' => '列是否是Array类型，各取值含义如下：

- **1**：是Array类型。

- **0**：不是Array类型。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'IsAutoIncrement' => 
          array (
            'title' => '-',
            'description' => '列是否自增，各取值含义如下：

- **true**：自增。

- **false**：不自增。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'IsCaseSensitive' => 
          array (
            'title' => '-',
            'description' => '列是否对大小写敏感，各取值含义如下：

- **true**：敏感。

- **false**：不敏感。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'IsCurrency' => 
          array (
            'title' => '-',
            'description' => '列是否存储货币值，各取值含义如下：

- **true**：存储货币值。

- **false**：不存储货币值。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'IsSigned' => 
          array (
            'title' => '-',
            'description' => '列是否有符号，各取值含义如下：

- **true**：有符号。

- **false**：没有符号。',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'Label' => 
          array (
            'title' => '-',
            'description' => '列的标签。',
            'type' => 'string',
            'example' => 'TBL_BIG',
          ),
          'Name' => 
          array (
            'title' => '-',
            'description' => '列名。',
            'type' => 'string',
            'example' => 'name',
          ),
          'Nullable' => 
          array (
            'title' => '-',
            'description' => '列是否可为空，各取值含义如下：

- **1**：可为空。

- **0**：不可为空。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Precision' => 
          array (
            'title' => '-',
            'description' => '列的精度，表示整个十进制数的整数和小数部分一共包含的位数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'Scale' => 
          array (
            'title' => '-',
            'description' => '列的比例，表示十进制数的小数部分包含的位数。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '2',
          ),
          'SchemaName' => 
          array (
            'title' => '-',
            'description' => '列所属schema的名称。',
            'type' => 'string',
            'example' => 'test_schema',
          ),
          'TableName' => 
          array (
            'title' => '-',
            'description' => '列所属表的名称。',
            'type' => 'string',
            'example' => 'users',
          ),
          'Type' => 
          array (
            'title' => '-',
            'description' => '列的类型。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '93',
          ),
          'TypeName' => 
          array (
            'title' => '-',
            'description' => '列的类型名。',
            'type' => 'string',
            'example' => 'TIMESTAMP',
          ),
        ),
      ),
      'CommitTransactionResult' => 
      array (
        'title' => '-',
        'description' => 'CommitTransaction的返回值。',
        'type' => 'object',
        'properties' => 
        array (
          'TransactionStatus' => 
          array (
            'title' => '-',
            'description' => '事务状态。各取值含义如下：

- **Transaction Commit**：事务已提交。

- **Transaction Rollback**：事务已回滚。
',
            'type' => 'string',
            'example' => 'Transaction Commit',
          ),
        ),
      ),
      'DeleteResult' => 
      array (
        'title' => '-',
        'description' => 'Delete操作的返回值。',
        'type' => 'object',
        'properties' => 
        array (
          'NumberOfRecordsUpdated' => 
          array (
            'title' => '-',
            'description' => '删除的记录条数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
        ),
      ),
      'ExecuteStatementResult' => 
      array (
        'title' => '-',
        'description' => 'ExecuteStatement的返回值。',
        'type' => 'object',
        'properties' => 
        array (
          'ColumnMetadata' => 
          array (
            'title' => '-',
            'description' => '参数说明如下：',
            'type' => 'array',
            'items' => 
            array (
              'description' => '列元数据，详情请参见[ColumMetadata](~~459825~~)。',
              '$ref' => '#/components/schemas/ColumnMetadata',
            ),
          ),
          'FormattedRecords' => 
          array (
            'title' => '-',
            'description' => '请求参数FormatRecordsAs为`JSON`时的返回值。',
            'type' => 'string',
            'example' => '[{ "name": "jack" }]',
          ),
          'GeneratedFields' => 
          array (
            'title' => '-',
            'description' => 'SQL执行过程中的自增列列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'SQL执行过程中的自增列，详情请参见[Field](~~459828~~)。',
              '$ref' => '#/components/schemas/Field',
            ),
          ),
          'NumberOfRecordsUpdated' => 
          array (
            'title' => '-',
            'description' => 'SQL执行影响的行数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '2',
          ),
          'Records' => 
          array (
            'title' => '-',
            'description' => '查询语句的返回值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '返回值中的一条记录。',
              'type' => 'array',
              'items' => 
              array (
                'description' => '一条记录中的一个字段，详情请参见[Field](~~459828~~)。',
                '$ref' => '#/components/schemas/Field',
              ),
            ),
          ),
        ),
      ),
      'Field' => 
      array (
        'title' => '-',
        'description' => '值结构。',
        'type' => 'object',
        'properties' => 
        array (
          'ArrayValue' => 
          array (
            'title' => '-',
            'description' => '数组类型值。',
            'type' => 'string',
            'example' => '[item1, item2, item3]',
          ),
          'BlobValue' => 
          array (
            'title' => '-',
            'description' => 'Base64格式编码后的字节流。',
            'type' => 'string',
            'example' => 'aGVsbG8=',
          ),
          'BooleanValue' => 
          array (
            'title' => '-',
            'description' => '布尔类型值。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'IsNull' => 
          array (
            'title' => '-',
            'description' => '字段是否为空值，各取值含义如下：

- **true**：为空值。

- **false**：不为空值。',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'LongValue' => 
          array (
            'title' => '-',
            'description' => 'Long类型值。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3213212',
          ),
          'StringValue' => 
          array (
            'title' => '-',
            'description' => 'String类型值。',
            'type' => 'string',
            'example' => 'I am a string',
          ),
        ),
      ),
      'InsertListResult' => 
      array (
        'title' => '-',
        'description' => 'InsertList操作的返回值。',
        'type' => 'object',
        'properties' => 
        array (
          'NumberOfRecordsUpdated' => 
          array (
            'title' => '-',
            'description' => '插入的记录条数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
          'AutoIncrementKeys' => 
          array (
            'title' => '-',
            'description' => '每条记录插入时的自增列的值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '单条数据插入时的自增列的值。',
              'type' => 'integer',
              'format' => 'int64',
              'example' => '2',
            ),
          ),
        ),
      ),
      'InsertResult' => 
      array (
        'title' => '-',
        'description' => 'Insert操作的返回值。',
        'type' => 'object',
        'properties' => 
        array (
          'NumberOfRecordsUpdated' => 
          array (
            'title' => '-',
            'description' => '插入的记录条数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'AutoIncrementKey' => 
          array (
            'title' => '-',
            'description' => '插入操作中自增列的值。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
        ),
      ),
      'ResultSetOptions' => 
      array (
        'title' => '-',
        'description' => '参数说明如下：',
        'type' => 'object',
        'properties' => 
        array (
          'DecimalReturnType' => 
          array (
            'title' => '-',
            'description' => '指定DECIMAL类型的列的返回类型。取值如下：

- **STRING**

- **DOUBLE_OR_LONG**

默认值：**STRING**

',
            'type' => 'string',
            'example' => 'STRING',
            'default' => 'STRING',
          ),
          'LongReturnType' => 
          array (
            'title' => '-',
            'description' => '指定Long类型的列的返回类型。取值如下：

- **LONG**

- **STRING**

默认值：**LONG**',
            'type' => 'string',
            'example' => 'LONG',
            'default' => 'LONG',
          ),
        ),
      ),
      'RollbackTransactionResult' => 
      array (
        'title' => '-',
        'description' => 'RollbackTransaction的返回值。',
        'type' => 'object',
        'properties' => 
        array (
          'TransactionStatus' => 
          array (
            'title' => '-',
            'description' => '事务状态。各取值含义如下：

- **Transaction Commit**：事务已提交。

- **Transaction Rollback**：事务已回滚。


',
            'type' => 'string',
            'example' => 'Transaction Rollback',
          ),
        ),
      ),
      'SelectResult' => 
      array (
        'title' => '-',
        'description' => 'Select操作的返回值。',
        'type' => 'object',
        'properties' => 
        array (
          'Records' => 
          array (
            'title' => '-',
            'description' => '查询结果集。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '结果集中的一条记录。',
              'type' => 'object',
              'additionalProperties' => 
              array (
                'description' => '一条记录的一个字段。',
                'type' => 'any',
                'example' => 'value1',
              ),
            ),
          ),
        ),
      ),
      'Selector' => 
      array (
        'title' => '-',
        'description' => '-单个字段的查询条件',
        'type' => 'object',
        'properties' => 
        array (
          'Lt' => 
          array (
            'title' => '-',
            'description' => '-小于',
            'type' => 'string',
            'example' => '100（此字段小于100）',
          ),
          'Le' => 
          array (
            'title' => '-',
            'description' => '-小于等于',
            'type' => 'string',
            'example' => '100（此字段小于等于100）',
          ),
          'Gt' => 
          array (
            'title' => '-',
            'description' => '-大于',
            'type' => 'string',
            'example' => '10（此字段大于10）',
          ),
          'Ge' => 
          array (
            'title' => '-',
            'description' => '-大于等于',
            'type' => 'string',
            'example' => '10（此字段大于等于10）',
          ),
          'Eq' => 
          array (
            'title' => '-',
            'description' => '-等于',
            'type' => 'string',
            'example' => 'victor（此字段等于victor）',
          ),
          'Ne' => 
          array (
            'title' => '-',
            'description' => '-不等于',
            'type' => 'string',
            'example' => 'rose（此字段不等于rose）',
          ),
          'Like' => 
          array (
            'title' => '-',
            'description' => '-模糊查询',
            'type' => 'string',
            'example' => 'jack%（此字段以jack开头）',
          ),
        ),
      ),
      'SqlParameter' => 
      array (
        'title' => '-',
        'description' => '参数说明如下：',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => '-',
            'description' => '参数名称。',
            'type' => 'string',
            'example' => 'parameter_one',
          ),
          'TypeHint' => 
          array (
            'title' => '-',
            'description' => '表示该参数存储到数据库的类型。取值如下：

- **DATE**

- **DECIMAL**

- **JSON**

- **TIME**

- **TIMESTAMP**


',
            'type' => 'string',
            'example' => 'DATE',
            'default' => 'DEFAULE',
          ),
          'Value' => 
          array (
            'description' => '参数值，详情请参见[Field](~~459828~~)。',
            '$ref' => '#/components/schemas/Field',
          ),
        ),
      ),
      'UpdateResult' => 
      array (
        'title' => '-',
        'description' => 'Update操作的返回值。',
        'type' => 'object',
        'properties' => 
        array (
          'NumberOfRecordsUpdated' => 
          array (
            'title' => '-',
            'description' => '更新的记录条数。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'BeginTransaction' => 
    array (
      'summary' => '开启事务。',
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
          'name' => 'SecretArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](~~446624~~)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds:cn-hangzhou:1335786916******:rds-db-credent****/zha***Test03-21****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```

参数说明如下：

- regionId：地域ID，可调用[DescribeSecrets](~~446624~~)接口获取。
- accountId：阿里云账号ID，可调用[DescribeSecrets](~~446624~~)接口获取。
- instanceId：实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds:cn-hangzhou:13357869165******:dbinstance/rm-bp1m7l3j633******',
          ),
        ),
        2 => 
        array (
          'name' => 'Database',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
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
            'description' => '返回参数如下。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4FD736C2-D774-5ACF-8366-8A72114BE7F9',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：

- **true**：请求成功。
- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'There is an error in the call.',
              ),
              'Data' => 
              array (
                'description' => '返回数据，详情请参见[BeginTransactionResult](~~459816~~)。',
                '$ref' => '#/components/schemas/BeginTransactionResult',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4FD736C2-D774-5ACF-8366-8A72114BE7F9\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"TransactionId\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BeginTransactionResponse>\\n    <RequestId>4FD736C2-D774-5ACF-8366-8A72114BE7F9</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Data>\\n        <TransactionId>8609****-94e1-45ce-8e25-354e3dd8****</TransactionId>\\n    </Data>\\n</BeginTransactionResponse>","errorExample":""}]',
      'title' => '开启事务',
      'description' => '本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。',
    ),
    'CommitTransaction' => 
    array (
      'summary' => '调用CommitTransaction接口提交事务变更。',
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
          'name' => 'SecretArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](~~446624~~)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds-api:cn-hangzhou:1266348003******:rds-db-credentials/mySecret-Uy****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```

参数说明如下：

- regionId：地域ID，可调用[DescribeSecrets](~~446624~~)接口获取。
- accountId：阿里云账号ID，可调用[DescribeSecrets](~~446624~~)接口获取。
- instanceId：实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds:cn-hangzhou:1266348003******:dbinstance/rm-1234567890abc****',
          ),
        ),
        2 => 
        array (
          'name' => 'TransactionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要提交的事务ID，您可调用**BeginTransaction**接口获取该参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => '8609****-94e1-45ce-8e25-354e3dd8****',
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
            'description' => '返回参数如下。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9689CF67-B653-5A0F-B9E3-3CC6BBD580ED',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：

- **true**：请求成功。
- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'There is an error in the call.',
              ),
              'Data' => 
              array (
                'description' => '返回数据，详情请参见[CommitTransactionResult](~~459811~~)。',
                '$ref' => '#/components/schemas/CommitTransactionResult',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9689CF67-B653-5A0F-B9E3-3CC6BBD580ED\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"TransactionStatus\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CommitTransactionResponse>\\n    <RequestId>9689CF67-B653-5A0F-B9E3-3CC6BBD580ED</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Data>\\n        <TransactionStatus>Transaction Commit</TransactionStatus>\\n    </Data>\\n</CommitTransactionResponse>","errorExample":""}]',
      'title' => '提交事务',
      'description' => '本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。',
    ),
    'RollbackTransaction' => 
    array (
      'summary' => '调用RollbackTransaction接口执行事务的回滚，回滚事务会取消其更改。',
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
          'name' => 'SecretArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](~~446624~~)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds-api:cn-hangzhou:1266348003******:rds-db-credenti***/mySecret-Uy****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```

参数说明如下：

- regionId：地域ID，可调用[DescribeSecrets](~~446624~~)接口获取。
- accountId：阿里云账号ID，可调用[DescribeSecrets](~~446624~~)接口获取。
- instanceId：实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds:cn-hangzhou:1266348003******:dbinstance/rm-1234567890abc****',
          ),
        ),
        2 => 
        array (
          'name' => 'TransactionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要回滚的事务ID，您可调用**BeginTransaction**接口获取该参数的值。',
            'type' => 'string',
            'required' => true,
            'example' => '8609****-94e1-45ce-8e25-354e3dd8****',
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
            'description' => '返回参数如下。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D2FEE6D7-DCA6-57B4-946A-9E670B773518',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：

- **true**：请求成功。
- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'There is an error in the call.',
              ),
              'Data' => 
              array (
                'description' => '返回数据，详情请参见[RollbackTransactionResult](~~459815~~)。',
                '$ref' => '#/components/schemas/RollbackTransactionResult',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D2FEE6D7-DCA6-57B4-946A-9E670B773518\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"TransactionStatus\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RollbackTransactionResponse>\\n    <RequestId>D2FEE6D7-DCA6-57B4-946A-9E670B773518</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Data>\\n        <TransactionStatus>Transaction Rollback</TransactionStatus>\\n    </Data>\\n</RollbackTransactionResponse>","errorExample":""}]',
      'title' => '回滚事务',
      'description' => '本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。',
    ),
    'InsertList' => 
    array (
      'summary' => '调用InsertList批量插入数据。',
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
          'name' => 'SecretArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](https://help.aliyun.com/document_detail/446624.html)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds-api:cn-hangzhou:1266348003******:rds-db-credenti***/mySecret-Uy****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```

参数说明如下：

- regionId：地域ID，可调用[DescribeSecrets](https://help.aliyun.com/document_detail/446624.html)接口获取。
- accountId：阿里云账号ID，可调用[DescribeSecrets](https://help.aliyun.com/document_detail/446624.html)接口获取。
- instanceId：实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds:cn-hangzhou:1266348003******:dbinstance/rm-1234567890abc****',
          ),
        ),
        2 => 
        array (
          'name' => 'Database',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_db',
          ),
        ),
        3 => 
        array (
          'name' => 'Table',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '表名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'user',
          ),
        ),
        4 => 
        array (
          'name' => 'TransactionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要提交的事务ID，您可调用**BeginTransaction**接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => '8609****-94e1-45ce-8e25-354e3dd8****',
          ),
        ),
        5 => 
        array (
          'name' => 'Records',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '要批量插入的数据，数据结构为array数组，每一项为一条记录',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要插入的数据，数据结构为map  
key为表字段名称，value为字段值  

示例：`{ name: "jack", age: 18 }`',
              'type' => 'object',
              'required' => false,
              'additionalProperties' => 
              array (
                'type' => 'any',
                'example' => 'test_value',
                'description' => '插入数据的value值，任意类型。',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D2FEE6D7-DCA6-57B4-946A-9E670B773518',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：

- **true**：请求成功。
- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。

> 请求成功时该参数返回为空。',
                'type' => 'string',
                'example' => 'There is an error in the call.',
              ),
              'Data' => 
              array (
                'description' => 'InsertList的返回值，详情请参见[InsertListResult](https://help.aliyun.com/document_detail/462779.html)。',
                '$ref' => '#/components/schemas/InsertListResult',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D2FEE6D7-DCA6-57B4-946A-9E670B773518\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"NumberOfRecordsUpdated\\": 0,\\n    \\"AutoIncrementKeys\\": [\\n      0\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '插入多条数据',
      'description' => '本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。',
    ),
    'ExecuteStatement' => 
    array (
      'summary' => '调用ExecuteStatement接口对指定数据库执行SQL语句。',
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
          'name' => 'SecretArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](~~446624~~)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds-api:cn-hangzhou:1266348003******:rds-db-credentials/mySecret-Uy****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```

参数说明如下：

- regionId：地域ID，可调用[DescribeSecrets](~~446624~~)接口获取。
- accountId：阿里云账号ID，可调用[DescribeSecrets](~~446624~~)接口获取。
- instanceId：实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds:cn-hangzhou:1266348003******:dbinstance/rm-1234567890abc****',
          ),
        ),
        2 => 
        array (
          'name' => 'Database',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'ContinueAfterTimeout',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '如果调用超时，选择是否继续运行SQL语句，取值如下：

- **true**：继续运行
- **false**：停止运行

> 默认情况下，SQL语句在调用超时后停止运行。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'FormatRecordsAs',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否将结果集格式化为单个JSON字符串。

- 仅允许传入**NONE**或**JSON**。
- 默认值为**NONE**。
- 此参数仅适用于SELECT语句，对于其他类型的语句将被忽略。
- 结果将返回在**formattedRecords**中。',
            'type' => 'string',
            'required' => false,
            'example' => 'JSON',
          ),
        ),
        5 => 
        array (
          'name' => 'IncludeResultMetadata',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否在结果中包含元数据的值，取值如下：

- **true**：包含
- **false**：不包含',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'Sql',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要执行的SQL语句。',
            'type' => 'string',
            'required' => true,
            'example' => 'select * from users',
          ),
        ),
        7 => 
        array (
          'name' => 'TransactionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '已启动的事务ID，您可调用[BeginTransaction](~~446897~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => '8609****-94e1-45ce-8e25-354e3dd8****',
          ),
        ),
        8 => 
        array (
          'name' => 'Parameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '待执行SQL语句的参数详情。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '参数值，详情请参见[SqlParameter](~~459814~~)。',
              'required' => false,
              '$ref' => '#/components/schemas/SqlParameter',
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'ResultSetOptions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '控制如何返回结果集的选项。',
            'type' => 'object',
            'properties' => 
            array (
              'DecimalReturnType' => 
              array (
                'description' => '指定DECIMAL类型返回后，允许显示的数据类型。

- **STRING**：将字段转换为String值。
- **DOUBLE\\_OR\\_LONG**：如果它的scale为0，则将字段转换为**Long**值，否则转换为**Double**值。',
                'type' => 'string',
                'required' => false,
                'example' => 'STRING',
              ),
              'LongReturnType' => 
              array (
                'description' => '指定LONG类型返回后，允许显示的数据类型。

- 允许取值为**LONG**或**STRING**。
- 默认值为**LONG**。
- 如果数值的长度或精度可能导致截断或舍入错误，建议请指定**STRING**。',
                'type' => 'string',
                'required' => false,
                'example' => 'STRING',
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
            'description' => '返回参数如下。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CDAEE474-87E5-5AE3-A534-922F90D5867D',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：

- **true**：请求成功。
- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'There is an error in the call.',
              ),
              'Data' => 
              array (
                'description' => '返回数据，详情请参见[ExecuteStatementResult](~~459820~~)。',
                '$ref' => '#/components/schemas/ExecuteStatementResult',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CDAEE474-87E5-5AE3-A534-922F90D5867D\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"ColumnMetadata\\": [\\n      {\\n        \\"ArrayBaseColumnType\\": 0,\\n        \\"IsAutoIncrement\\": true,\\n        \\"IsCaseSensitive\\": true,\\n        \\"IsCurrency\\": true,\\n        \\"IsSigned\\": true,\\n        \\"Label\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"Nullable\\": 0,\\n        \\"Precision\\": 0,\\n        \\"Scale\\": 0,\\n        \\"SchemaName\\": \\"\\",\\n        \\"TableName\\": \\"\\",\\n        \\"Type\\": 0,\\n        \\"TypeName\\": \\"\\"\\n      }\\n    ],\\n    \\"FormattedRecords\\": \\"\\",\\n    \\"GeneratedFields\\": [\\n      {\\n        \\"ArrayValue\\": \\"\\",\\n        \\"BlobValue\\": \\"\\",\\n        \\"BooleanValue\\": true,\\n        \\"IsNull\\": true,\\n        \\"LongValue\\": 0,\\n        \\"StringValue\\": \\"\\"\\n      }\\n    ],\\n    \\"NumberOfRecordsUpdated\\": 0,\\n    \\"Records\\": [\\n      [\\n        {\\n          \\"ArrayValue\\": \\"\\",\\n          \\"BlobValue\\": \\"\\",\\n          \\"BooleanValue\\": true,\\n          \\"IsNull\\": true,\\n          \\"LongValue\\": 0,\\n          \\"StringValue\\": \\"\\"\\n        }\\n      ]\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ExecuteStatementResponse>\\n    <RequestId>CDAEE474-87E5-5AE3-A534-922F90D5867D</RequestId>\\n    <Data>\\n        <NumberOfRecordsUpdated>0</NumberOfRecordsUpdated>\\n        <Records>\\n            <0>\\n                <LongValue>1</LongValue>\\n            </0>\\n            <1>\\n                <StringValue>user1</StringValue>\\n            </1>\\n        </Records>\\n        <Records>\\n            <0>\\n                <LongValue>2</LongValue>\\n            </0>\\n            <1>\\n                <StringValue>user2</StringValue>\\n            </1>\\n        </Records>\\n        <Records>\\n            <0>\\n                <LongValue>3</LongValue>\\n            </0>\\n            <1>\\n                <StringValue>user3</StringValue>\\n            </1>\\n        </Records>\\n        <Records>\\n            <0>\\n                <LongValue>4</LongValue>\\n            </0>\\n            <1>\\n                <StringValue>user4</StringValue>\\n            </1>\\n        </Records>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ExecuteStatementResponse>","errorExample":""}]',
      'title' => '执行SQL语句',
      'description' => '本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。',
    ),
    'BatchExecuteStatement' => 
    array (
      'summary' => '调用BatchExecuteStatement接口对一组数据执行批处理SQL语句。',
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
          'name' => 'SecretArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Data API账号的用户凭证，您可调用[DescribeSecrets](~~446624~~)接口获取该参数的值。格式如下：`acs:rds:{{region}}:{{accountId}}:rds-db-credentials/{{secretName}}-{{6 digits random string}}`',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds-api:cn-hangzhou:1266348003******:rds-db-credentials/mySecret-Uy****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用于指向用户希望访问的资源，格式如下：```acs:rds:{{regionId}}:{{accountId}}:dbinstance/{{instanceId}}```

参数说明如下：

- regionId：地域ID，可调用[DescribeSecrets](~~446624~~)接口获取。
- accountId：阿里云账号ID，可调用[DescribeSecrets](~~446624~~)接口获取。
- instanceId：实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:rds:cn-hangzhou:1266348003******:dbinstance/rm-1234567890abc****',
          ),
        ),
        2 => 
        array (
          'name' => 'Database',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Sql',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要执行的SQL 语句。

> BatchExecuteStatement接口通常多执行**INSERT**和**UPDATE**语句。',
            'type' => 'string',
            'required' => true,
            'example' => 'insert into users(name) values(:name)',
          ),
        ),
        4 => 
        array (
          'name' => 'TransactionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '已启动的事务ID，您可调用[BeginTransaction](~~446897~~)接口获取该参数的值。',
            'type' => 'string',
            'required' => false,
            'example' => '8609****-94e1-45ce-8e25-354e3dd8****',
          ),
        ),
        5 => 
        array (
          'name' => 'ParameterSets',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '有关SQL语句的参数说明。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '其中一条SQL语句的参数说明。',
              'type' => 'array',
              'items' => 
              array (
                'description' => '参数值，详情请参见[SqlParameter](~~459814~~)。',
                'required' => false,
                '$ref' => '#/components/schemas/SqlParameter',
              ),
              'required' => false,
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
            'description' => '返回参数如下。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CDAEE474-87E5-5AE3-A534-922F90D5867D',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：

- **true**：请求成功。
- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。

> 请求成功时该参数返回为空。',
                'type' => 'string',
                'example' => 'There is an error in the call.',
              ),
              'Data' => 
              array (
                'description' => '请求返回数据，详情请参见[BatchExecuteStatementResult](~~459817~~)。',
                '$ref' => '#/components/schemas/BatchExecuteStatementResult',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CDAEE474-87E5-5AE3-A534-922F90D5867D\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"There is an error in the call.\\",\\n  \\"Data\\": {\\n    \\"GeneratedFieldsList\\": [\\n      [\\n        {\\n          \\"ArrayValue\\": \\"\\",\\n          \\"BlobValue\\": \\"\\",\\n          \\"BooleanValue\\": true,\\n          \\"IsNull\\": true,\\n          \\"LongValue\\": 0,\\n          \\"StringValue\\": \\"\\"\\n        }\\n      ]\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BatchExecuteStatementResponse>\\n    <RequestId>432A039B-0520-5324-B1CA-87D2FDFC5638</RequestId>\\n    <Data>\\n        <UpdateResults>\\n            <GeneratedFields>\\n                <LongValue>16</LongValue>\\n            </GeneratedFields>\\n        </UpdateResults>\\n        <UpdateResults>\\n            <GeneratedFields>\\n                <LongValue>17</LongValue>\\n            </GeneratedFields>\\n        </UpdateResults>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</BatchExecuteStatementResponse>","errorExample":""}]',
      'title' => '批处理SQL语句',
      'description' => '- 本接口当前仅支持华东1（杭州）、华北2（北京）地域的Serverless实例使用。
- 您可以使用具有不同参数集的DML语句对多条记录进行批量更新和插入操作。
- 与单独的插入和更新操作相比，批量操作可以显著提高性能。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'rds-data.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'rds-data.cn-beijing.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Sddp',
    'version' => '2019-01-03',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 134364,
      'title' => '服务关联角色',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSlrRole',
      ),
    ),
    1 => 
    array (
      'id' => 134406,
      'title' => '授权',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteDataLimit',
        1 => 'DescribeDataLimits',
        2 => 'ModifyDataLimit',
        3 => 'DescribeDataLimitDetail',
        4 => 'CreateDataLimit',
        5 => 'DescribeDataLimitSet',
        6 => 'DescribeInstanceSources',
        7 => 'DescribeParentInstance',
      ),
    ),
    2 => 
    array (
      'id' => 188061,
      'title' => '识别配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateScanTask',
        1 => 'ModifyDefaultLevel',
        2 => 'ModifyRuleStatus',
        3 => 'ModifyRule',
        4 => 'DeleteRule',
        5 => 'CreateRule',
      ),
    ),
    3 => 
    array (
      'id' => 134385,
      'title' => '数据识别',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRules',
        1 => 'DescribeRiskLevels',
        2 => 'DescribeDataAssets',
        3 => 'DescribeInstances',
        4 => 'DescribeTables',
        5 => 'DescribeColumns',
        6 => 'DescribeColumnsV2',
        7 => 'DescribeOssObjects',
        8 => 'DescribeOssObjectDetail',
        9 => 'DescribeOssObjectDetailV2',
        10 => 'DescribePackages',
        11 => 'DescribeCategoryTemplateList',
        12 => 'DescribeCategoryTemplateRuleList',
        13 => 'DescribeTemplateAllRules',
        14 => 'DescribeDocTypes',
        15 => 'DescribeDataObjects',
        16 => 'DescribeDataObjectColumnDetail',
        17 => 'DescribeDataObjectColumnDetailV2',
      ),
    ),
    4 => 
    array (
      'id' => 134366,
      'title' => '安全配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateConfig',
        1 => 'DescribeConfigs',
        2 => 'ModifyReportTaskStatus',
        3 => 'DescribeUserStatus',
        4 => 'DisableUserConfig',
      ),
    ),
    5 => 
    array (
      'id' => 134394,
      'title' => '异常告警',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyEventTypeStatus',
        1 => 'ModifyEventStatus',
        2 => 'DescribeEvents',
        3 => 'DescribeEventDetail',
        4 => 'DescribeEventTypes',
      ),
    ),
    6 => 
    array (
      'id' => 134400,
      'title' => '数据脱敏',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDataMaskingTasks',
        1 => 'DescribeDataMaskingRunHistory',
        2 => 'ExecDatamask',
        3 => 'StopMaskingProcess',
        4 => 'ManualTriggerMaskingProcess',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'CreateSlrRole' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '81970',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2CRSZ1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => '106.11.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文（简体）
- **en_us**：英文（美国）',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
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
              'HasPermission' => 
              array (
                'description' => '服务关联角色是否创建成功。取值：
- **true**：成功
- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1EBF271',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HasPermission\\": true,\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1EBF271\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSlrRoleResponse>\\n    <HasPermission>true</HasPermission>\\n    <RequestId>208B016D-4CB9-4A85-96A5-0B8ED1EBF271</RequestId>\\n</CreateSlrRoleResponse>","errorExample":""}]',
      'title' => '创建服务关联角色',
      'summary' => '调用CreateSlrRole创建数据安全中心DSC（Data Security Center）的服务关联角色，授权DSC访问云资源。',
      'description' => '本接口用于允许DSC访问您的OSS、RDS、MaxCompute等云服务的资源。调用此接口后，系统将会自动创建一个服务关联角色，角色名称为AliyunServiceRoleForSDDP，角色权限策略为AliyunServiceRolePolicyForSDDP。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDataLimit' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '81976',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2CRSZ1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例、库、Bucket数据资产的唯一标识ID。

可调用DescribeDataLimits接口，查看返回结果中的Id，获取数据资产的唯一标识ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '12033',
          ),
        ),
        1 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => '106.11.XX.XX',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
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
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteDataLimit>\\r\\n\\t<RequestId>7C3AC882-E5A8-4855-BE77-B6837B695EF1</RequestId>\\r\\n</DeleteDataLimit>\\t\\r\\n","errorExample":""}]',
      'title' => '删除数据资产扫描授权',
      'summary' => '调用本接口删除连接授权的库、实例、Bucket数据资产。',
      'description' => '本接口一般用于对用户已授权的数据资产进行取消授权，便于对授权进行管理。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDataLimits' => 
    array (
      'summary' => '调用本接口查询连接授权的实例、库、Bucket数据资产列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '82013',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpXMFUF8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，指定每页最多显示的数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页面的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '必填，实例、库、Bucket数据资产所属产品类型。取值：
- **1**：MaxCompute
- **2**：OSS
- **3**：ADS
- **4**：OTS
- **5**：RDS
- **6**：SELF_DB',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产所属的父类型资产ID。取值：
- MaxCompute的项目名称或ID。
- OSS的Bucket名称或ID。
- RDS的实例名称或ID或数据库名称或ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1112',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产所在的地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        6 => 
        array (
          'name' => 'CheckStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据检测状态。取值：
- **0**：就绪。
- **1**：运行中。
- **2**：连通性测试中。
- **3**：连通性测试通过。
- **4**：连通性测试未通过.',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
          ),
        ),
        7 => 
        array (
          'name' => 'AuditStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审计状态。取值：
- **1**：开启审计。
- **0**：关闭审计。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'EngineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型。取值：**MySQL**，**SQLServer**，**Oracle**，**PostgreSQL**，**MongoDB**等。',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        9 => 
        array (
          'name' => 'DatamaskStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏权限状态。取值：
- **1**：开启。
- **0**：关闭。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'Enable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '识别权限状态。取值：
- **1**：开启。
- **0**：关闭。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建开始时间。格式：时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1616068534877',
          ),
        ),
        12 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建结束时间。格式：时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1616068534877',
          ),
        ),
        13 => 
        array (
          'name' => 'MemberAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '**********8103',
          ),
        ),
        14 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'CurrentPage' => 
              array (
                'description' => '当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989***',
              ),
              'PageSize' => 
              array (
                'description' => '每页最多显示的数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Items' => 
              array (
                'description' => '数据资产列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据资产详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SupportEvent' => 
                    array (
                      'description' => '是否支持异常事件检测。取值：
- **true**：是。
- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '失败原因。',
                      'type' => 'string',
                      'example' => '密码不正确',
                    ),
                    'CheckStatus' => 
                    array (
                      'description' => '数据检测状态。取值：
- **0**：就绪。
- **1**：运行中。
- **2**：连通性测试中。
- **3**：连通性测试通过。
- **4**：连通性测试未通过。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '数据所属区域名称。',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
                    ),
                    'TenantName' => 
                    array (
                      'description' => '租户别名。',
                      'type' => 'string',
                      'example' => 'insta_gram',
                    ),
                    'NextStartTime' => 
                    array (
                      'description' => '下一次的执行时间。格式：时间戳。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1676620236000',
                    ),
                    'Port' => 
                    array (
                      'description' => '自建数据库端口号。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3306',
                    ),
                    'CheckStatusName' => 
                    array (
                      'description' => '数据检测状态名称。',
                      'type' => 'string',
                      'example' => '联通性检测状态',
                    ),
                    'SamplingSize' => 
                    array (
                      'description' => '敏感数据采样。取值：**0**、**5**、**10**。单位：条。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'ParentId' => 
                    array (
                      'description' => '指定待查询资产的父级ID，取值：**bucket、db、project**等。',
                      'type' => 'string',
                      'example' => 'project',
                    ),
                    'DatamaskStatus' => 
                    array (
                      'description' => '脱敏权限状态。取值：
- **1**：开启。
- **0**：关闭。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ProcessTotalCount' => 
                    array (
                      'description' => '数据表/文件总数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '实例、库、Bucket数据资产所属产品类型。取值：
- **1**：MaxCompute
- **2**：OSS
- **3**：ADS
- **4**：OTS
- **5**：RDS
- **6**：SELF_DB',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5',
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '错误码。',
                      'type' => 'string',
                      'example' => 'connect_network_error',
                    ),
                    'OcrStatus' => 
                    array (
                      'description' => 'OCR状态。取值：
- **0**：关闭。
- **1**：开启。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'LogStoreDay' => 
                    array (
                      'description' => '原始日志存储时间。单位：天。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '30',
                    ),
                    'EventStatus' => 
                    array (
                      'description' => '防泄漏开关。取值：
- **0**：关闭。
- **1**：开启（默认值）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'SupportScan' => 
                    array (
                      'description' => '是否支持扫描。取值：
- **true**：是。
- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'LastFinishedTime' => 
                    array (
                      'description' => '最后一次全部扫描完成的时间。
- 格式：时间戳
- 单位：毫秒',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '145600000',
                    ),
                    'UserName' => 
                    array (
                      'description' => '数据所属用户名。',
                      'type' => 'string',
                      'example' => 'tsts',
                    ),
                    'AuditStatus' => 
                    array (
                      'description' => '审计状态。取值：
- **1**：开启审计。
- **0**：关闭审计。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'SupportOcr' => 
                    array (
                      'description' => '是否支持ocr。取值：
- **true**：是。
- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'EngineType' => 
                    array (
                      'description' => '数据库类型。取值：**MySQL**，**SQLServer**，**Oracle**，**PostgreSQL**，**MongoDB**等。',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '数据资产表所属的资产实例ID。',
                      'type' => 'string',
                      'example' => '12332',
                    ),
                    'TotalCount' => 
                    array (
                      'description' => '数据资产表包含的字段总数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'InstanceDescription' => 
                    array (
                      'description' => '实例备注信息。',
                      'type' => 'string',
                      'example' => '123',
                    ),
                    'DbVersion' => 
                    array (
                      'description' => '数据库版本。',
                      'type' => 'string',
                      'example' => '2.0',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '资产所在的地域。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。格式：时间戳。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '145600000',
                    ),
                    'SupportAudit' => 
                    array (
                      'description' => '是否支持审计。取值：
- **true**：是。
- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'AutoScan' => 
                    array (
                      'description' => '是否自动扫描。取值：
- **0**：不自动。
- **1**：自动。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ResourceTypeCode' => 
                    array (
                      'description' => '数据来源产品类型编码。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                    'SupportDatamask' => 
                    array (
                      'description' => '是否支持脱敏。取值：
- **true**：是。
- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ProcessStatus' => 
                    array (
                      'description' => '扫描状态。取值：
- **-1**：无效。
- **0**：等待。
- **1**：扫描中。
- **2**：暂停。
- **3**：完成。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'Id' => 
                    array (
                      'description' => '数据的唯一标识ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'Enable' => 
                    array (
                      'description' => '识别权限状态。取值：
- **1**：开启。
- **0**：关闭。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'SecurityGroupIdList' => 
                    array (
                      'description' => 'Agent审计中PrivateLink使用的安全组ID列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Agent审计中PrivateLink使用的安全组ID。',
                        'type' => 'string',
                        'example' => 'sg-bp113yf20quxkvy****',
                      ),
                    ),
                    'VSwitchIdList' => 
                    array (
                      'description' => 'Agent审计中PrivateLink使用的交换机ID列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Agent审计中PrivateLink使用的交换机ID。',
                        'type' => 'string',
                        'example' => 'vsw-bp1kk2mtrtey7o4ju****',
                      ),
                    ),
                    'VpcId' => 
                    array (
                      'description' => '数据资产所属的vpcid。',
                      'type' => 'string',
                      'example' => 'vpc-2zevcqke6hh09c41****',
                    ),
                    'MemberAccount' => 
                    array (
                      'description' => '成员账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '**********8103
',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989***\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 200,\\n  \\"Items\\": [\\n    {\\n      \\"SupportEvent\\": true,\\n      \\"ErrorMessage\\": \\"密码不正确\\",\\n      \\"CheckStatus\\": 3,\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"TenantName\\": \\"insta_gram\\",\\n      \\"NextStartTime\\": 1676620236000,\\n      \\"Port\\": 3306,\\n      \\"CheckStatusName\\": \\"联通性检测状态\\",\\n      \\"SamplingSize\\": 5,\\n      \\"ParentId\\": \\"project\\",\\n      \\"DatamaskStatus\\": 1,\\n      \\"ProcessTotalCount\\": 100,\\n      \\"ResourceType\\": 5,\\n      \\"ErrorCode\\": \\"connect_network_error\\",\\n      \\"OcrStatus\\": 1,\\n      \\"LogStoreDay\\": 30,\\n      \\"EventStatus\\": 1,\\n      \\"SupportScan\\": true,\\n      \\"LastFinishedTime\\": 145600000,\\n      \\"UserName\\": \\"tsts\\",\\n      \\"AuditStatus\\": 1,\\n      \\"SupportOcr\\": true,\\n      \\"EngineType\\": \\"MySQL\\",\\n      \\"InstanceId\\": \\"12332\\",\\n      \\"TotalCount\\": 100,\\n      \\"InstanceDescription\\": \\"123\\",\\n      \\"DbVersion\\": \\"2.0\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"GmtCreate\\": 145600000,\\n      \\"SupportAudit\\": true,\\n      \\"AutoScan\\": 1,\\n      \\"ResourceTypeCode\\": \\"RDS\\",\\n      \\"SupportDatamask\\": true,\\n      \\"ProcessStatus\\": 3,\\n      \\"Id\\": 1,\\n      \\"Enable\\": 1,\\n      \\"SecurityGroupIdList\\": [\\n        \\"sg-bp113yf20quxkvy****\\"\\n      ],\\n      \\"VSwitchIdList\\": [\\n        \\"vsw-bp1kk2mtrtey7o4ju****\\"\\n      ],\\n      \\"VpcId\\": \\"vpc-2zevcqke6hh09c41****\\",\\n      \\"MemberAccount\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataLimitsResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989***</RequestId>\\n    <PageSize>10</PageSize>\\n    <TotalCount>200</TotalCount>\\n    <Items>\\n        <SupportEvent>true</SupportEvent>\\n        <ErrorMessage>密码不正确</ErrorMessage>\\n        <CheckStatus>3</CheckStatus>\\n        <LocalName>华东1（杭州）</LocalName>\\n        <TenantName>insta_gram</TenantName>\\n        <NextStartTime>145600000</NextStartTime>\\n        <Port>3306</Port>\\n        <CheckStatusName>联通性检测状态</CheckStatusName>\\n        <SamplingSize>5</SamplingSize>\\n        <ParentId>project</ParentId>\\n        <DatamaskStatus>1</DatamaskStatus>\\n        <ProcessTotalCount>100</ProcessTotalCount>\\n        <ErrorCode>connect_network_error</ErrorCode>\\n        <OcrStatus>1</OcrStatus>\\n        <LogStoreDay>30</LogStoreDay>\\n        <EventStatus>1</EventStatus>\\n        <SupportScan>true</SupportScan>\\n        <LastFinishedTime>145600000</LastFinishedTime>\\n        <UserName>tsts</UserName>\\n        <AuditStatus>1</AuditStatus>\\n        <SupportOcr>true</SupportOcr>\\n        <EngineType>MySQL</EngineType>\\n        <InstanceId>12332</InstanceId>\\n        <TotalCount>100</TotalCount>\\n        <InstanceDescription>123</InstanceDescription>\\n        <DbVersion>2.0</DbVersion>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <GmtCreate>145600000</GmtCreate>\\n        <SupportAudit>true</SupportAudit>\\n        <AutoScan>1</AutoScan>\\n        <ResourceTypeCode>RDS</ResourceTypeCode>\\n        <SupportDatamask>true</SupportDatamask>\\n        <ProcessStatus>3</ProcessStatus>\\n        <Id>1</Id>\\n        <Enable>1</Enable>\\n    </Items>\\n</DescribeDataLimitsResponse>","errorExample":""}]',
      'title' => '查询数据资产扫描授权列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDataLimit' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '82106',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2CRSZ1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和返回消息的语言类型。取值：

- **zh**：中文（默认）
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DSC连接授权的配置项所属产品的数据资产的唯一标识ID。
> 修改DSC连接授权的配置项时，需要提供其所属产品的数据资产的唯一标识ID，可调用[DescribeDataLimits](~~DescribeDataLimits~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '11',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DSC连接授权的配置项数据所属产品的名称。取值：
- **1**：MaxCompute
- **2**：OSS
- **3**：ADS
- **4**：OTS
- **5**：RDS',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '5',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产所在的区域。取值：
- **cn-beijing**：华北2 （北京）
- **cn-zhangjiakou**：华北3（张家口）
- **cn-huhehaote**：华北5 （呼和浩特）
- **cn-hangzhou**：华东1 （杭州）
- **cn-shanghai**：华东2（上海）
- **cn-shenzhen**：华南1 （深圳）
- **cn-hongkong**：中国香港',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DSC连接授权RDS数据库的用户名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'User01',
          ),
        ),
        5 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DSC连接授权RDS数据库的用户密码。',
            'type' => 'string',
            'required' => false,
            'example' => '********',
          ),
        ),
        6 => 
        array (
          'name' => 'ModifyPassword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否修改连接数据库的用户名和密码，取值：
- **true**：修改
- **false**：不修改',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'AuditStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启审计。取值：
- **0**：不开启审计
- **1**：开启审计',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'LogStoreDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启审计之后，原始日志的保存时间（单位：天）。取值：
- **30**
- **90**
- **180**
- **365**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        9 => 
        array (
          'name' => 'EngineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型。取值：
- **MySQL**
- **SQLServer**',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        10 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接数据库的端口。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3306',
          ),
        ),
        11 => 
        array (
          'name' => 'AutoScan',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否在规则发生变更时，自动触发重新扫描。取值：
- **0**：不触发自动扫描
- **1**：触发自动扫描  

> 规则变更触发自动扫描时，会对数据源中的所有数据进行全量扫描。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'SamplingSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定开启数据识别后，敏感数据采样条数。取值：
- **0**
- **5**
- **10**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        13 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产所属的vpcid。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-2zevcqke6hh09c41****',
          ),
        ),
        14 => 
        array (
          'name' => 'SecurityGroupIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'Agent审计中PrivateLink使用的安全组。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'sg-bp113yf20quxkvy****',
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        15 => 
        array (
          'name' => 'VSwitchIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'Agent审计中PrivateLink使用的交换机。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'vsw-bp1kk2mtrtey7o4ju****',
            ),
            'required' => false,
            'maxItems' => 2,
          ),
        ),
        16 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDataLimitResponse>\\n    <RequestId>7C3AC882-E5A8-4855-BE77-B6837B695EF1</RequestId>\\n</ModifyDataLimitResponse>","errorExample":""}]',
      'title' => '修改数据资产扫描授权',
      'summary' => '调用ModifyDataLimit修改DSC连接授权的配置项。',
    ),
    'DescribeDataLimitDetail' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '82011',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2CRSZ1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型。取值：
- **zh**：简体中文（默认取值）
- **en**：英文
',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置要查询的实例、库或Bucket数据资产的唯一标识ID。

> 您可以通过调用[DescribeDataLimits](~~DescribeDataLimits~~)获取标识ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '12300',
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置要查询的实例、库或Bucket数据资产所属的网络类型。取值：

- **1**：VPC专有网络
- **2**：经典网络',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'DataLimit' => 
              array (
                'description' => '查询到的资产详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'LocalName' => 
                  array (
                    'description' => '资产所属区域。',
                    'type' => 'string',
                    'example' => '华北1（青岛）',
                  ),
                  'CheckStatus' => 
                  array (
                    'description' => 'DSC与DSC连接授权的实例、库或Bucket数据间的连通性测试状态。取值：

- **2**：表示连通性测试中。
- **3**：表示连通性测试通过。
- **4**：表示连通性测试未通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'Port' => 
                  array (
                    'description' => '连接数据库端口的端口号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3306',
                  ),
                  'CheckStatusName' => 
                  array (
                    'description' => 'DSC与DSC连接授权的实例、库、Bucket数据间的连通性测试状态名称。取值：
- **通过**
- **不通过**
- **检测中**',
                    'type' => 'string',
                    'example' => '通过',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '数据资产所属区域ID。',
                    'type' => 'string',
                    'example' => 'cn-qingdao',
                  ),
                  'ParentId' => 
                  array (
                    'description' => '数据资产所属云产品的资产ID和数据库名称。
',
                    'type' => 'string',
                    'example' => 'rm-m5eup49p6o274****.RDS_example',
                  ),
                  'ResourceType' => 
                  array (
                    'description' => '数据资产所属产品类型。取值：

- **1**：MaxCompute
- **2**：OSS
- **3**：ADS
- **4**：OTS
- **5**：RDS
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'GmtCreate' => 
                  array (
                    'description' => 'DSC连接授权实例、库、Bucket等数据资产的时间。格式：时间戳，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '145600000',
                  ),
                  'ResourceTypeCode' => 
                  array (
                    'description' => '数据资产所属产品名称。取值：
- **MaxCompute**
- **OSS**
- **ADS**
- **OTS**
- **RDS**',
                    'type' => 'string',
                    'example' => 'RDS',
                  ),
                  'UserName' => 
                  array (
                    'description' => '管理数据资产的用户账号。',
                    'type' => 'string',
                    'example' => 'User01',
                  ),
                  'Id' => 
                  array (
                    'description' => '数据资产的唯一标识ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '12300',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"DataLimit\\": {\\n    \\"LocalName\\": \\"华北1（青岛）\\",\\n    \\"CheckStatus\\": 3,\\n    \\"Port\\": 3306,\\n    \\"CheckStatusName\\": \\"通过\\",\\n    \\"RegionId\\": \\"cn-qingdao\\",\\n    \\"ParentId\\": \\"rm-m5eup49p6o274****.RDS_example\\",\\n    \\"ResourceType\\": 1,\\n    \\"GmtCreate\\": 145600000,\\n    \\"ResourceTypeCode\\": \\"RDS\\",\\n    \\"UserName\\": \\"User01\\",\\n    \\"Id\\": 12300\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataLimitDetailResponse>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <DataLimit>\\n        <LocalName>华北1（青岛）</LocalName>\\n        <CheckStatus>3</CheckStatus>\\n        <Port>3306</Port>\\n        <CheckStatusName>通过</CheckStatusName>\\n        <RegionId>cn-qingdao</RegionId>\\n        <ParentId>rm-m5eup49p6o274****.RDS_example</ParentId>\\n        <ResourceType>1</ResourceType>\\n        <GmtCreate>145600000</GmtCreate>\\n        <ResourceTypeCode>RDS</ResourceTypeCode>\\n        <UserName>User01</UserName>\\n        <Id>12300</Id>\\n    </DataLimit>\\n</DescribeDataLimitDetailResponse>","errorExample":""}]',
      'title' => '查询连接授权单个实例',
      'summary' => '查询连接授权的单个实例、库、Bucket的详情。',
      'description' => '

',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDataLimit' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '81960',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2CRSZ1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权扫描的资产所属的产品类型。取值：

- **1**：MaxCompute。
- **2**：OSS。
- **3**：ADS。
- **4**：OTS。
- **5**：RDS。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '必填，资产所在的地域。取值：
- **cn-beijing**：华北2（北京）。
- **cn-zhangjiakou**：华北3（张家口）。
- **cn-huhehaote**：华北5（呼和浩特）。
- **cn-hangzhou**：华东1（杭州）。
- **cn-shanghai**：华东2（上海）。
- **cn-shenzhen**：华南1（深圳）。
- **cn-hongkong**：中国香港。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '必填，资产的名称，实例ID和数据库的连接串，二者通过英文点号连接。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-test1234.db_name',
          ),
        ),
        3 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库资产的用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'yhm',
          ),
        ),
        4 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问数据库资产的密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'passwd',
          ),
        ),
        5 => 
        array (
          'name' => 'AuditStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启审计。取值：

- **0**：不开启审计。
- **1**：开启审计。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'AutoScan',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否在规则发生变更时，自动触发重新扫描。取值：

- **0**：不触发自动扫描。
- **1**：触发自动扫描。

> 规则变更触发自动扫描时，会对数据源中的所有数据进行全量扫描。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'LogStoreDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定开启审计之后，原始日志的保存时间（单位：天）。取值：
- **30**
- **90**
- **180**
- **365**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        8 => 
        array (
          'name' => 'EngineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库类型。取值：
- **MySQL**
- **SQLServer**',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        9 => 
        array (
          'name' => 'Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库连接端口。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3306',
          ),
        ),
        10 => 
        array (
          'name' => 'OcrStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OCR状态。取值：
- **1**：开启。
- **0**：关闭。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'EventStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件检测状态。取值：
- **0**：关闭。
- **1**：开启（默认）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'Enable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启敏感数据识别。取值：
- **1**：开启。
- **0**：关闭。

> 如果资产是首次授权，默认值为1。如果资产非首次授权，将会使用上次授权后的值，可能是0或1。故如果要对资产进行敏感数据识别，建议将此参数设置为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        13 => 
        array (
          'name' => 'SamplingSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定开启数据识别后，敏感数据采样条数。取值：
- **0**
- **5**
- **10**
> 默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        14 => 
        array (
          'name' => 'CertificatePermission',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '凭据权限。取值：
- **ReadOnly**：只读权限。
- **ReadWrite**：读写权限。',
            'type' => 'string',
            'required' => false,
            'example' => 'ReadOnly',
          ),
        ),
        15 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        16 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => '106.11.XX.XX',
          ),
        ),
        17 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
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
              'Id' => 
              array (
                'description' => '授权资源的ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 1,\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDataLimitResponse>\\n<Id>1</Id>\\n<RequestId>7C3AC882-E5A8-4855-BE77-B6837B695EF1</RequestId>\\n</CreateDataLimitResponse>","errorExample":""}]',
      'title' => '创建数据资产扫描授权',
      'summary' => '调用CreateDataLimit创建对数据库、项目、存储空间（Bucket）进行扫描的授权。',
      'description' => '本接口一般用于对用户数据资产进行扫描授权，便于进一步保护用户数据资产的数据安全。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDataLimitSet' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '82014',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2CRSZ1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh_cn**：默认值，中文（简体）。
- **en_us**：英文（美国）。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定待查询产品的资源类型。取值：
- **1**：表示ODPS。 
- **2**：表示OSS 。
- **3**：表示ADS 。
- **4**：表示OTS 。
- **5**：表示RDS。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定待查询资产的父类型资产ID。

您可以通过[DescribeDataLimitDetail](~~DescribeDataLimitDetail~~)或[DescribeDataLimits](~~DescribeDataLimits~~)中返回的**ParentId**确定。',
            'type' => 'string',
            'required' => false,
            'example' => 'db',
          ),
        ),
        3 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'DataLimitSet' => 
              array (
                'description' => '返回授权扫描的实例、库、Bucket等信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceTypeCode' => 
                  array (
                    'description' => '返回数据的来源产品类型编码。取值：
- **ODPS**
- **OSS**
- **ADS**
- **OTS**
- **RDS**',
                    'type' => 'string',
                    'example' => 'OSS',
                  ),
                  'ResourceType' => 
                  array (
                    'description' => '返回数据的来源产品类型。取值：
- **1**：表示ODPS。
- **2**：表示OSS。
- **3**：表示ADS。
- **4**：表示OTS。
- **5**：表示RDS。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '查询出的资产数量总和。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'DataLimitList' => 
                  array (
                    'description' => '授权扫描的数据列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LocalName' => 
                        array (
                          'description' => '数据所属地域名称。',
                          'type' => 'string',
                          'example' => '华东1（杭州）',
                        ),
                        'CheckStatus' => 
                        array (
                          'description' => '数据安全中心与数据安全中心连接授权的实例、库、Bucket数据间的连通性测试状态。

- **2**：连通性测试中。
- **3**：连通性测试通过。
- **4**：连通性测试未通过。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'Connector' => 
                        array (
                          'description' => '数据连接字符串。',
                          'type' => 'string',
                          'example' => '连接串',
                        ),
                        'CheckStatusName' => 
                        array (
                          'description' => '数据检测状态名称。',
                          'type' => 'string',
                          'example' => '联通性检测状态',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '数据所属地域ID。',
                          'type' => 'string',
                          'example' => 'cn-****',
                        ),
                        'ParentId' => 
                        array (
                          'description' => '指定待查询资产的父类型资产ID。',
                          'type' => 'string',
                          'example' => 'db',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '数据来源产品类型。取值：
- **1**：表示ODPS。
- **2**：表示OSS。
- **3**：表示ADS。
- **4**：表示OTS。
- **5**：表示RDS。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '数据创建时间，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1625587423000',
                        ),
                        'ResourceTypeCode' => 
                        array (
                          'description' => '数据来源产品类型编码。取值：
- **ODPS**
- **OSS**
- **ADS**
- **OTS**
- **RDS**',
                          'type' => 'string',
                          'example' => 'OSS',
                        ),
                        'UserName' => 
                        array (
                          'description' => '数据所属用户名。',
                          'type' => 'string',
                          'example' => 'tsts',
                        ),
                        'Id' => 
                        array (
                          'description' => '数据的唯一标识ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'OssBucketList' => 
                  array (
                    'description' => '授权扫描的OSS对象列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'description' => 'OSS对象所属地域ID。',
                          'type' => 'string',
                          'example' => 'cn-****',
                        ),
                        'BucketName' => 
                        array (
                          'description' => 'OSS对象所属存储空间名称。',
                          'type' => 'string',
                          'example' => 'oss-bucket',
                        ),
                      ),
                    ),
                  ),
                  'RegionList' => 
                  array (
                    'description' => '授权扫描的地域列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-****',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => '杭州',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"DataLimitSet\\": {\\n    \\"ResourceTypeCode\\": \\"OSS\\",\\n    \\"ResourceType\\": 2,\\n    \\"TotalCount\\": 10,\\n    \\"DataLimitList\\": [\\n      {\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"CheckStatus\\": 3,\\n        \\"Connector\\": \\"连接串\\",\\n        \\"CheckStatusName\\": \\"联通性检测状态\\",\\n        \\"RegionId\\": \\"cn-****\\",\\n        \\"ParentId\\": \\"db\\",\\n        \\"ResourceType\\": 2,\\n        \\"GmtCreate\\": 1625587423000,\\n        \\"ResourceTypeCode\\": \\"OSS\\",\\n        \\"UserName\\": \\"tsts\\",\\n        \\"Id\\": 1\\n      }\\n    ],\\n    \\"OssBucketList\\": [\\n      {\\n        \\"RegionId\\": \\"cn-****\\",\\n        \\"BucketName\\": \\"oss-bucket\\"\\n      }\\n    ],\\n    \\"RegionList\\": [\\n      {\\n        \\"RegionId\\": \\"cn-****\\",\\n        \\"LocalName\\": \\"杭州\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataLimitSetResponse>\\n<DataLimitSet>\\n\\t\\t<TotalCount>10</TotalCount>\\n\\t\\t<ResourceTypeCode>OSS</ResourceTypeCode>\\n\\t\\t<ResourceType>2</ResourceType>\\n\\t\\t<DataLimitList>\\n\\t\\t\\t<ParentId>db</ParentId>\\n\\t\\t\\t<Connector>连接串</Connector>\\n\\t\\t\\t<GmtCreate>1625587423000</GmtCreate>\\n\\t\\t\\t<UserName>tsts</UserName>\\n\\t\\t\\t<ResourceTypeCode>OSS</ResourceTypeCode>\\n\\t\\t\\t<CheckStatus>3</CheckStatus>\\n\\t\\t\\t<ResourceType>2</ResourceType>\\n\\t\\t\\t<Id>1</Id>\\n\\t\\t\\t<RegionId>cn-****</RegionId>\\n\\t\\t\\t<CheckStatusName>联通性检测状态</CheckStatusName>\\n\\t\\t\\t<LocalName>华东1（杭州）</LocalName>\\n\\t\\t</DataLimitList>\\n\\t\\t<OssBucketList>\\n\\t\\t\\t<BucketName>oss-bucket</BucketName>\\n\\t\\t\\t<RegionId>cn-****</RegionId>\\n\\t\\t</OssBucketList>\\n\\t\\t<RegionList>\\n\\t\\t\\t<RegionId>cn-****</RegionId>\\n\\t\\t\\t<LocalName>杭州</LocalName>\\n\\t\\t</RegionList>\\n</DataLimitSet>\\n<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n</DescribeDataLimitSetResponse>","errorExample":""}]',
      'title' => '查询数据资产扫描授权列表',
      'summary' => '调用DescribeDataLimitSet接口查询指定产品的已授权扫描的实例、库、Bucket等列表。',
      'description' => '本接口一般用于获取已授权的产品资产列表，便于搜索和资源聚合。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceSources' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '82049',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2CRSZ1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh_cn**：默认值，中文（简体）。
- **en_us**：英文（美国）。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置每页包含未授权资产的数量。默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页的页码。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产所在的地域。更多信息，请参见[支持地域](~~214257~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'EngineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎类型，取值： **MySQL，MariaDB，Oracle，PostgreSQL，SQLServer**等。',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'instance-demo-****',
          ),
        ),
        6 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定待查询产品类型ID，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定待查询产品的名称，取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
            'type' => 'string',
            'required' => false,
            'example' => 'MaxCompute',
          ),
        ),
        8 => 
        array (
          'name' => 'AuditStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审计状态。取值：
- **1**：开启审计。
- **0**：关闭审计。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'SearchType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产模糊查找的类型。

- **InstanceId**：实例ID。
- **InstanceName**：实例名称。
- **DatabaseName**：数据库名。',
            'type' => 'string',
            'required' => false,
            'example' => 'InstanceId',
          ),
        ),
        10 => 
        array (
          'name' => 'SearchKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产模糊查找的内容。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'AuthStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产实例的授权状态。
- **0**：未授权。
- **1**：已授权。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        12 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此参数已废弃。',
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。
',
                'type' => 'string',
                'example' => '5A7E8FB9-5011-5A90-97D9-AE587047****',
              ),
              'PageSize' => 
              array (
                'description' => '每页包含的资产数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的资产总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Items' => 
              array (
                'description' => '查询到的资产列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询到的资产列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LastModifyUserId' => 
                    array (
                      'description' => '最近一次的编辑人员的账号ID。',
                      'type' => 'string',
                      'example' => 'demo',
                    ),
                    'PasswordStatus' => 
                    array (
                      'description' => '密码的使用状态。取值：
- **1**：使用。
- **0**：不使用 。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'EngineType' => 
                    array (
                      'description' => '引擎类型。取值： **MySQL，MariaDB，Oracle，PostgreSQL，SQLServer**等。',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'TenantName' => 
                    array (
                      'description' => '租户名。',
                      'type' => 'string',
                      'example' => 'user1',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'rm-****',
                    ),
                    'InstanceDescription' => 
                    array (
                      'description' => '实例的描述。',
                      'type' => 'string',
                      'example' => '测试使用',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'DbName' => 
                    array (
                      'description' => '资产所属的数据库名称。',
                      'type' => 'string',
                      'example' => 'demo',
                    ),
                    'LastModifyTime' => 
                    array (
                      'description' => '最近一次的编辑时间。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1625587423000',
                    ),
                    'RegionName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '杭州',
                    ),
                    'CanModifyUserName' => 
                    array (
                      'description' => '是否允许修改账号、密码。取值：
- **true**：允许。
- **false**：不允许。
',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'LogStoreDay' => 
                    array (
                      'description' => '原始日志存储的时间。单位：天。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '30',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。格式：时间戳，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1625587423000',
                    ),
                    'AutoScan' => 
                    array (
                      'description' => '是否开启自动扫描识别敏感数据。取值：
- **0**：未开启。
- **1**：已开启。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'ProductId' => 
                    array (
                      'description' => '指定待查询产品类型ID。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'InstanceSize' => 
                    array (
                      'description' => '实例的空间大小，只对OSS资产类型有效。单位：字节。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '409600',
                    ),
                    'UserName' => 
                    array (
                      'description' => '账号的用户名。',
                      'type' => 'string',
                      'example' => 'User01',
                    ),
                    'AuditStatus' => 
                    array (
                      'description' => '审计授权状态。取值：
- **1**：已授权。
- **0**：未授权。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Id' => 
                    array (
                      'description' => '资产的唯一标识ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'TenantId' => 
                    array (
                      'description' => '租户ID。',
                      'type' => 'string',
                      'example' => '11',
                    ),
                    'Enable' => 
                    array (
                      'description' => '资产是否开启敏感数据识别。取值：
- **1**：开启。
- **0**：未开启。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CheckStatus' => 
                    array (
                      'description' => '数据检测状态。取值：
- **0**：就绪。
- **1**：运行中。
- **2**：连通性测试中。
- **3**：连通性测试通过。
- **4**：连通性测试未通过。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'DatamaskStatus' => 
                    array (
                      'description' => '脱敏权限状态。取值：
- **1**：开启。
- **0**：关闭。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '失败原因。',
                      'type' => 'string',
                      'example' => 'password error',
                    ),
                    'SamplingSize' => 
                    array (
                      'description' => '敏感数据采样。取值：**0**、**5**、**10**。单位：条。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"5A7E8FB9-5011-5A90-97D9-AE587047****\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 2,\\n  \\"Items\\": [\\n    {\\n      \\"LastModifyUserId\\": \\"demo\\",\\n      \\"PasswordStatus\\": 1,\\n      \\"EngineType\\": \\"MySQL\\",\\n      \\"TenantName\\": \\"user1\\",\\n      \\"InstanceId\\": \\"rm-****\\",\\n      \\"InstanceDescription\\": \\"测试使用\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DbName\\": \\"demo\\",\\n      \\"LastModifyTime\\": 1625587423000,\\n      \\"RegionName\\": \\"杭州\\",\\n      \\"CanModifyUserName\\": true,\\n      \\"LogStoreDay\\": 30,\\n      \\"GmtCreate\\": 1625587423000,\\n      \\"AutoScan\\": 0,\\n      \\"ProductId\\": 2,\\n      \\"InstanceSize\\": 409600,\\n      \\"UserName\\": \\"User01\\",\\n      \\"AuditStatus\\": 1,\\n      \\"Id\\": 1,\\n      \\"TenantId\\": \\"11\\",\\n      \\"Enable\\": 1,\\n      \\"CheckStatus\\": 3,\\n      \\"DatamaskStatus\\": 1,\\n      \\"ErrorMessage\\": \\"password error\\",\\n      \\"SamplingSize\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceSourcesResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>5A7E8FB9-5011-5A90-97D9-AE587047DA6C</RequestId>\\n    <PageSize>10</PageSize>\\n    <TotalCount>2</TotalCount>\\n    <Items>\\n        <LastModifyUserId>demo</LastModifyUserId>\\n        <PasswordStatus>1</PasswordStatus>\\n        <EngineType>MySQL</EngineType>\\n        <TenantName>user1</TenantName>\\n        <InstanceId>rm-****</InstanceId>\\n        <InstanceDescription>测试使用</InstanceDescription>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <DbName>demo</DbName>\\n        <LastModifyTime>1625587423000</LastModifyTime>\\n        <RegionName>杭州</RegionName>\\n        <CanModifyUserName>true</CanModifyUserName>\\n        <LogStoreDay>30</LogStoreDay>\\n        <GmtCreate>1625587423000</GmtCreate>\\n        <AutoScan>0</AutoScan>\\n        <ProductId>2</ProductId>\\n        <InstanceSize>409600</InstanceSize>\\n        <UserName>User01</UserName>\\n        <AuditStatus>1</AuditStatus>\\n        <Id>1</Id>\\n        <TenantId>11</TenantId>\\n        <Enable>1</Enable>\\n    </Items>\\n</DescribeInstanceSourcesResponse>","errorExample":""}]',
      'title' => '查询数据资产列表',
      'summary' => '获取数据资产列表。',
      'description' => '本接口根据入参AuthStatus的值可获取未授权/已授权数据资产列表，便于掌握各类资产的授权情况。

新版控制台中已不再使用该接口。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeParentInstance' => 
    array (
      'summary' => '调用本接口查询未授权或已授权资产列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'operationType' => 'list',
        'abilityTreeCode' => '149789',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2CRSZ1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产所在的地域。取值：
- **cn-beijing**：华北2（北京）。
- **cn-zhangjiakou**：华北3（张家口）。
- **cn-huhehaote**：华北5（呼和浩特）。
- **cn-hangzhou**：华东1（杭州）。
- **cn-shanghai**：华东2（上海）。
- **cn-shenzhen**：华南1（深圳）。
- **cn-hongkong**：中国香港。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        3 => 
        array (
          'name' => 'EngineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎类型，取值： **MySQL，MariaDB，Oracle，PostgreSQL，SQLServer**等。',
            'type' => 'string',
            'required' => false,
            'example' => 'MySQL',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表中列数据所属的资产实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-azfxx',
          ),
        ),
        5 => 
        array (
          'name' => 'DbName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'db_test',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类型。取值：
- **1**：MaxCompute
- **2**：OSS
- **3**：ADB-MYSQL
- **4**：TableStore
- **5**：RDS
- **6**：SelfDB
- **7**：PolarDB-X
- **8**：PolarDB
- **9**：ADB-PG
- **10**：OceanBase
- **11**：MongoDB
- **25**：Redis',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
          ),
        ),
        7 => 
        array (
          'name' => 'CheckStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例或实例下数据库连接状态。取值：
- **-3**：数据库未创建。
- **-2**：已释放。
- **-1**：未连接。
- **2**：连通性测试中。
- **3**：已连接。
- **4**：连接失败。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
          ),
        ),
        8 => 
        array (
          'name' => 'ClusterStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态。
- **Running**：运行中。
- **Released**：已释放。
- **DatabaseNotCreated**：数据库未创建。',
            'type' => 'string',
            'required' => false,
            'example' => 'Running',
          ),
        ),
        9 => 
        array (
          'name' => 'AuthStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产实例的授权状态。
- **0**：未授权。
- **1**：已授权。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        10 => 
        array (
          'name' => 'MemberAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '**********8103',
          ),
        ),
        11 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh_cn**：默认值，中文（简体）。
- **en_us**：英文（美国）。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
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
                'title' => 'Id of the request',
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => 'ACEF9334-BB50-525D-8CF3-6CF504E4D1B3',
              ),
              'CurrentPage' => 
              array (
                'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'Items' => 
              array (
                'description' => '查询到的数据资产列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询到的资产详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'rm-2h066mht2vz',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '地域名称。取值说明如下：

- **华东1（杭州）**
- **华东2（上海）**
- **华北2（北京）**
- **华北3（张家口）**
- **华南1（深圳）**
- **华南3（广州）**
- **中国（香港）**
- **新加坡**
- **美国（硅谷）**',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'EngineType' => 
                    array (
                      'description' => '引擎类型。取值： **MySQL，MariaDB，Oracle，PostgreSQL，SQLServer**等。',
                      'type' => 'string',
                      'example' => 'MySQL',
                    ),
                    'ParentId' => 
                    array (
                      'description' => '授权资产的标识，如为结构化数据，标识为实例id.数据库名。',
                      'type' => 'string',
                      'example' => 'rm-uf6b9897shxxx.test',
                    ),
                    'DbNum' => 
                    array (
                      'description' => '实例下的数据库数量。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'ClusterStatus' => 
                    array (
                      'description' => '实例状态。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'TenantId' => 
                    array (
                      'description' => '租户id，仅针对Oceanbase资产有效。',
                      'type' => 'string',
                      'example' => 'HBJWDSBE-zh_CN',
                    ),
                    'TenantName' => 
                    array (
                      'description' => '租户名称，仅针对Oceanbase资产有效。',
                      'type' => 'string',
                      'example' => 'user1',
                    ),
                    'InstanceDescription' => 
                    array (
                      'description' => '实例的描述。',
                      'type' => 'string',
                      'example' => 'instance description',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资产类型名称。取值：
- **MaxCompute**
- **OSS**
- **ADB-MYSQL**
- **TableStore**
- **RDS**
- **SelfDB**
- **PolarDB-X**
- **PolarDB**
- **ADB-PG**
- **OceanBase**
- **MongoDB**
- **Redis**',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                    'UnConnectDbCount' => 
                    array (
                      'description' => '实例下未连接的数据库数量。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'UnSupportOneClickAuthReason' => 
                    array (
                      'description' => '不支持一连接的原因。',
                      'type' => 'string',
                      'example' => 'engine type not support',
                    ),
                    'ConnectNode' => 
                    array (
                      'description' => '连接节点类型，仅针对MongoDB资产类型有效。',
                      'type' => 'string',
                      'example' => 'Primary',
                    ),
                    'SupportConnectNodes' => 
                    array (
                      'description' => '支持的链接节点，多个用逗号分隔。',
                      'type' => 'string',
                      'example' => 'Primary,Secondary',
                    ),
                    'AuthStatus' => 
                    array (
                      'description' => '数据资产实例的授权状态。
- **0**：未授权。
- **1**：已授权。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'InstanceSize' => 
                    array (
                      'description' => '实例的空间大小，只对OSS资产类型有效。单位：字节。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '409600',
                    ),
                    'AuditStatus' => 
                    array (
                      'description' => '审计授权状态。取值：
- **1**：已授权。
- **0**：未授权。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'MemberAccount' => 
                    array (
                      'description' => '成员账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '**********8103',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ACEF9334-BB50-525D-8CF3-6CF504E4D1B3\\",\\n  \\"CurrentPage\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 3,\\n  \\"Items\\": [\\n    {\\n      \\"InstanceId\\": \\"rm-2h066mht2vz\\",\\n      \\"LocalName\\": \\"cn-hangzhou\\",\\n      \\"EngineType\\": \\"MySQL\\",\\n      \\"ParentId\\": \\"rm-uf6b9897shxxx.test\\",\\n      \\"DbNum\\": \\"3\\",\\n      \\"ClusterStatus\\": \\"Running\\",\\n      \\"TenantId\\": \\"HBJWDSBE-zh_CN\\",\\n      \\"TenantName\\": \\"user1\\",\\n      \\"InstanceDescription\\": \\"instance description\\",\\n      \\"ResourceType\\": \\"RDS\\",\\n      \\"UnConnectDbCount\\": \\"1\\",\\n      \\"UnSupportOneClickAuthReason\\": \\"engine type not support\\",\\n      \\"ConnectNode\\": \\"Primary\\",\\n      \\"SupportConnectNodes\\": \\"Primary,Secondary\\",\\n      \\"AuthStatus\\": 1,\\n      \\"InstanceSize\\": 409600,\\n      \\"AuditStatus\\": 1,\\n      \\"MemberAccount\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询未授权或已授权资产列表',
    ),
    'CreateScanTask' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '81968',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpXMFUF8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataLimitId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例、库、Bucket数据资产的唯一标识ID，可以调用[DescribeDataLimits](~~DescribeDataLimits~~)获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'IntervalDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连续两个自定义扫描资产任务的间隔天数，取值范围：1~2147483648。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RunHour',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下次扫描任务的运行时间。单位：小时。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '12',
          ),
        ),
        3 => 
        array (
          'name' => 'RunMinute',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下次扫描任务的运行时间。单位：分钟。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '30',
          ),
        ),
        4 => 
        array (
          'name' => 'TaskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扫描任务的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'scan-test-sample****',
          ),
        ),
        5 => 
        array (
          'name' => 'TaskUserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建扫描任务的账号。',
            'type' => 'string',
            'required' => false,
            'example' => 'demo',
          ),
        ),
        6 => 
        array (
          'name' => 'OssScanPath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扫描OSS资产的扫描范围，支持前缀、后缀、正则匹配。',
            'type' => 'string',
            'required' => false,
            'example' => '/test/test',
          ),
        ),
        7 => 
        array (
          'name' => 'ScanRange',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义扫描任务的扫描范围匹配规则，需结合**ScanRangeContent**的配置内容才能生效。取值：
- **0**：全部匹配。
- **1**：前缀匹配。
- **2**：后缀匹配。
- **3**：正则匹配。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'ScanRangeContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '在结构化数据资产的扫描范围内，通过前缀、后缀或正则匹配方式进行扫描。',
            'type' => 'string',
            'required' => true,
            'example' => 'datamask/',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定待查询产品的资源类型。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '2',
          ),
        ),
        10 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => '106.11.XX.XX',
          ),
        ),
        11 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。

- **zh**：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
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
              'Id' => 
              array (
                'description' => '定制化扫描任务的资源ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B1F2BB1F-04EC-5D36-B136-B4DE17FD8DE0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 100,\\n  \\"RequestId\\": \\"B1F2BB1F-04EC-5D36-B136-B4DE17FD8DE0\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateScanTaskResponse>\\n    <RequestId>B1F2BB1F-04EC-5D36-B136-B4DE17FD8DE0</RequestId>\\n    <Id>100</Id>\\n</CreateScanTaskResponse>","errorExample":""}]',
      'title' => '创建扫描任务',
      'summary' => '调用CreateScanTask接口为识别权限授权成功的资产创建识别敏感数据的定制化扫描任务。',
      'description' => '本接口适用于用户针对已授权的资产定制扫描任务，便于用户灵活控制扫描任务的运行时间间隔及每次扫描任务的运行时间。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDefaultLevel' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'DefaultId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '未能识别数据的默认风险等级ID。
- **1**：N/A。
- **2**：S1。
- **3**：S2。
- **4**：S3。
- **5**：S4。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4',
          ),
        ),
        2 => 
        array (
          'name' => 'SensitiveIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '归类为“敏感”的数据风险等级ID，多个ID以半角逗号隔开。取值：

- **1**：N/A。
- **2**：S1。
- **3**：S2。
- **4**：S3。
- **5**：S4。',
            'type' => 'string',
            'required' => false,
            'example' => '1,2,3,4',
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
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1EBF271',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1EBF271\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyDefaultLevel>\\r\\n\\t<RequestId>208B016D-4CB9-4A85-96A5-0B8ED1EBF271</RequestId>\\r\\n\\t</ModifyDefaultLevel>\\r\\n","errorExample":""}]',
      'title' => '修改敏感数据的风险等级定义规则',
      'summary' => '调用本接口修改敏感数据的风险等级定义规则，包括未能识别数据的默认风险等级、归类为“敏感”的数据风险等级。',
      'description' => '本接口一般在修改敏感数据的风险等级定义规则时使用，便于对风险等级进行规划。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyRuleStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的唯一标识ID。

> 开启或关闭敏感数据识别规则的检测功能，需要提供敏感数据识别规则的唯一标识ID。可调用**DescribeRules**接口获取该ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12341',
          ),
        ),
        2 => 
        array (
          'name' => 'Ids',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的唯一标识ID。多个ID用半角逗号隔开。
> 开启或关闭敏感数据识别规则的检测功能，需要提供敏感数据识别规则的唯一标识ID，可调用**DescribeRules**接口获取该ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1,2,3,4',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启或关闭敏感数据识别规则的检测功能。取值：
- **0**：关闭。  
- **1**：开启。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'FailedIds' => 
              array (
                'description' => '修改状态失败的规则ID集合。多个ID用半角逗号隔开。',
                'type' => 'string',
                'example' => '1,2,3,4',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"FailedIds\\": \\"1,2,3,4\\",\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyRuleStatusResponse>\\n    <FailedIds>1,2,3,4</FailedIds>\\n    <RequestId>7C3AC882-E5A8-4855-BE77-B6837B695EF1</RequestId>\\n</ModifyRuleStatusResponse>","errorExample":""}]',
      'title' => '修改识别规则的检测功能状态',
      'summary' => '调用本接口开启或关闭敏感数据识别规则的检测功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyRule' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认值为**zh_cn**。取值：
- **zh_cn**：中文（简体）。
- **en_us**：英文（美国）。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的唯一标识ID。

您可以通过调用[DescribeRules](~~DescribeRules~~)接口获取标识ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的名称。

您可以通过调用[DescribeRules](~~DescribeRules~~)接口获取规则的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'esw',
          ),
        ),
        3 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则内容的类型。取值：

- **2**：表示正则表达式。
- **3**：表示算法。
- **5**：表示关键字。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则内容。支持正则表达式、算法、关键字类型，用于匹配敏感数据的字段或文本。',
            'type' => 'string',
            'required' => true,
            'example' => '(?:\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\d|1\\\\d{2}|[1-9]\\\\d{1})\\\\.)(?:(?:25[0-5]|2[0-4]\\\\d|[01]?\\\\d?\\\\d)\\\\.){2}(?:25[0-5]|2[0-4]\\\\d|1[0-9]\\\\d|[1-9]\\\\d|[1-9]))(?:\\\\D|$)',
          ),
        ),
        5 => 
        array (
          'name' => 'RiskLevelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的风险等级ID。取值：

- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'RuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的规则类型。取值：
- **1**：表示数据识别规则类型。
- **2**：表示审计规则类型。
- **3**：表示异常事件规则类型。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定待查询包含敏感数据识别规则的产品对应的产品资源类型。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。
',
            'type' => 'string',
            'required' => false,
            'example' => 'RDS',
          ),
        ),
        8 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含敏感数据识别规则的产品对应的产品ID。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
          ),
        ),
        9 => 
        array (
          'name' => 'WarnLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的风险等级。取值：
- **1**：表示低风险等级。
- **2**：表示中风险等级。
- **3**：表示高风险等级。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'MatchType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '匹配类型。取值：
- **1**：规则匹配。
- **2**：词典匹配。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'SupportForm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则支持的数据资产类型，取值：
- **0**：支持全部资产。
- **1**：支持结构化资产。
- **2**：支持非结构化资产。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyRuleResponse>\\n    <RequestId>7C3AC882-E5A8-4855-BE77-B6837B695EF1</RequestId>\\n</ModifyRuleResponse>","errorExample":""}]',
      'title' => '修改自定义的敏感数据识别规则',
      'summary' => '调用ModifyRule接口修改数据安全中心DSC（Data Security Center）中自定义的敏感数据识别规则。',
      'description' => '调用本接口时，您必须输入规则名称、规则ID、规则内容的参数。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteRule' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '81978',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpIUNEZP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的id。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '122300',
          ),
        ),
        1 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => '106.11.XX.XX',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产所属的语言。-**zh**：中文-**en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID。',
                'type' => 'string',
                'example' => '7C3AC882-E5A8-4855-BE77-B6837B6*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B6*****\\"\\n}","type":"json"}]',
      'title' => '删除自定义的敏感数据识别规则',
      'summary' => '调用本接口删除自定义的敏感数据识别规则。',
    ),
    'CreateRule' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '81967',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpIUNEZP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'rule-tst',
          ),
        ),
        1 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则内容的类型。取值：
- **0**：关键字。
- **2**：正则表达式。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的内容，支持正则表达式或关键字类型，用于匹配敏感数据的字段或文本。',
            'type' => 'string',
            'required' => true,
            'example' => '(?:\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\d|1\\\\d{2}|[1-9]\\\\d{1})\\\\.)(?:(?:25[0-5]|2[0-4]\\\\d|[01]?\\\\d?\\\\d)\\\\.){2}(?:25[0-5]|2[0-4]\\\\d|1[0-9]\\\\d|[1-9]\\\\d|[1-9]))(?:\\\\D|$)',
          ),
        ),
        3 => 
        array (
          'name' => 'StatExpress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计表达式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"time":"24","groupby":"1003","having":[{"key":"2001","value":"50"}]}',
          ),
        ),
        4 => 
        array (
          'name' => 'RiskLevelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的敏感等级ID。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'RuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则的功能类型。取值：
- **1**：数据识别规则。
- **2**：审计规则。
- **3**：异常检测规则。
- **99**：自定义规则.',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表中列数据所属产品名称。取值：**MaxCompute**，**OSS**，**ADS**，**OTS**，**RDS**等。',
            'type' => 'string',
            'required' => false,
            'example' => 'RDS',
          ),
        ),
        7 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产所属的产品名称对应的ID。取值：
- **1**：MaxCompute
- **2**：OSS
- **3**：ADS
- **4**：OTS
- **5**：RDS
- **6**：SELF_DB',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        8 => 
        array (
          'name' => 'WarnLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '危险等级。取值：
- **1**：低危。
- **2**：中危。
- **3**：高危。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        9 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则描述。',
            'type' => 'string',
            'required' => false,
            'example' => '身份证',
          ),
        ),
        10 => 
        array (
          'name' => 'ContentCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内容类型，取值：

- **1**：SQL注入尝试利用。
- **2**：SQL注入尝试绕过。
- **3**：存储过程滥用。
- **4**：缓冲区溢出。
- **5**：基于报错的SQL注入。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则状态。取值：
- **1**：开启。
- **0**：关闭。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标产品编码。取值：**MaxCompute**，**OSS**，**ADS**，**OTS**，**RDS**等。',
            'type' => 'string',
            'required' => false,
            'example' => 'MaxCompute',
          ),
        ),
        13 => 
        array (
          'name' => 'MatchType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '匹配类型。取值：
- **1**：规则匹配。
- **2**：词典匹配。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'SupportForm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则支持形态，取值：
- **0**：支持全部资产。
- **1**：支持结构化资产。
- **2**：支持非结构化资产。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        15 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => '106.11.XX.XX',
          ),
        ),
        16 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
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
              'Id' => 
              array (
                'description' => '保存的敏感数据识别规则的唯一标识ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => ' 结果的请求ID。',
                'type' => 'string',
                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1EBF271',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 1,\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1EBF271\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRuleResponse>\\n    <Id>1</Id>\\n    <RequestId>208B016D-4CB9-4A85-96A5-0B8ED1EBF271</RequestId>\\n</CreateRuleResponse>","errorExample":""}]',
      'title' => '创建自定义的敏感数据识别规则',
      'summary' => '调用CreateRule创建自定义的敏感数据识别规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRules' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '82070',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpIUNEZP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表每页显示的数据最大条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '12',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'CustomType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的类型。取值：
- **0**：表示系统内置。
- **1**：表示用户自定义。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则内容的类型。取值：
- **0**：关键字。
- **2**：正则表达式。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则名称，支持模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => '***规则',
          ),
        ),
        6 => 
        array (
          'name' => 'RiskLevelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的敏感等级ID。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        7 => 
        array (
          'name' => 'RuleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的类型。取值：
- **1**：数据识别规则。
- **2**：审计规则。
- **3**：异常检测规则。
- **99**：自定义规则。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'MatchType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '匹配类型。取值：
- 1：规则匹配。
- 2：词典匹配。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产所属的产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => 'MaxCompute',
          ),
        ),
        10 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产所属的产品名称对应的ID。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'WarnLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '危险等级。
- **1**：低危。
- **2**：中危。
- **3**：高危。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        12 => 
        array (
          'name' => 'ContentCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '内容类型，取值：**1**：SQL注入尝试利用，**2**：SQL注入尝试绕过， **3**：存储过程滥用，**4**：缓冲区溢出，**5**：基于报错的SQL注入等。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        13 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '状态。取值：
- **1**：正常。
- **0**：停用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'KeywordCompatible',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新旧版关键字是否兼容。

- **true**：是。
- **false**：否。

>旧版请求参数Category的关键字类型取值为0，新版请求参数Category的关键字类型取值为5，根据业务选择是否需要兼容。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则父类分组。',
            'type' => 'string',
            'required' => false,
            'example' => '4_1',
          ),
        ),
        16 => 
        array (
          'name' => 'SupportForm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则支持的数据资产类型，取值：
- **0**：支持全部资产。
- **1**：支持结构化资产。
- **2**：支持非结构化资产。

>查询支持结构化资产或非结构化资产时，返回的数据中除包含查询的数据资产类型外，还包含全部资产。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        17 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'CurrentPage' => 
              array (
                'description' => '结果中显示的当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'PageSize' => 
              array (
                'description' => ' 结果中每页显示的数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'TotalCount' => 
              array (
                'description' => ' 结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '23',
              ),
              'Items' => 
              array (
                'description' => '敏感数据识别规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '敏感数据识别规则详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DisplayName' => 
                    array (
                      'description' => '敏感数据识别规则的创建人账号显示名。',
                      'type' => 'string',
                      'example' => '****test',
                    ),
                    'Status' => 
                    array (
                      'description' => '敏感数据识别规则的检测状态。取值：
- **0**：关闭。
- **1**：开启。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'SupportForm' => 
                    array (
                      'description' => '规则支持的数据资产类型，取值：
- **0**：支持全部资产。
- **1**：支持结构化资产。
- **2**：支持非结构化资产。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'WarnLevel' => 
                    array (
                      'description' => '危险等级。
- **1**：低危。
- **2**：中危。
- **3**：高危。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'UserId' => 
                    array (
                      'description' => '敏感数据识别规则的创建人账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'StatExpress' => 
                    array (
                      'description' => '统计表达式。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '敏感数据识别规则的修改时间。格式：时间戳。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1545277010000',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => '敏感数据识别规则的敏感等级ID。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'Description' => 
                    array (
                      'description' => '敏感数据识别规则的描述信息。',
                      'type' => 'string',
                      'example' => '用于识别IP地址',
                    ),
                    'ProductId' => 
                    array (
                      'description' => '数据资产所属的产品名称对应的ID。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'Name' => 
                    array (
                      'description' => '敏感数据识别规则的名称。',
                      'type' => 'string',
                      'example' => 'IP地址',
                    ),
                    'Content' => 
                    array (
                      'description' => '敏感数据识别规则的内容。
>内置识别规则，即CustomType为0的识别规则，不返回规则的内容。',
                      'type' => 'string',
                      'example' => '(?:\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\d|1\\\\d{2}|[1-9]\\\\d{1})\\\\.)(?:(?:25[0-5]|2[0-4]\\\\d|[01]?\\\\d?\\\\d)\\\\.){2}(?:25[0-5]|2[0-4]\\\\d|1[0-9]\\\\d|[1-9]\\\\d|[1-9]))(?:\\\\D|$)',
                    ),
                    'Target' => 
                    array (
                      'description' => '数据资产所属的产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                      'type' => 'string',
                      'example' => 'MaxCompute',
                    ),
                    'LoginName' => 
                    array (
                      'description' => '敏感数据识别规则的创建人账号登录名。',
                      'type' => 'string',
                      'example' => 'det1111',
                    ),
                    'CategoryName' => 
                    array (
                      'description' => '敏感数据识别规则内容所属类型名称。',
                      'type' => 'string',
                      'example' => '正则表达式',
                    ),
                    'ContentCategory' => 
                    array (
                      'description' => '内容类型，取值：**1**：SQL注入尝试利用，**2**：SQL注入尝试绕过， **3**：存储过程滥用，**4**：缓冲区溢出，**5**：基于报错的SQL注入等。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'HitTotalCount' => 
                    array (
                      'description' => '命中次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'GroupId' => 
                    array (
                      'description' => '规则父类分组。',
                      'type' => 'string',
                      'example' => '4_1',
                    ),
                    'CustomType' => 
                    array (
                      'description' => '敏感数据识别规则类型。

- 0：表示系统内置。
- 1：表示用户自定义。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RiskLevelName' => 
                    array (
                      'description' => '敏感数据识别规则的风险等级名称。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                      'type' => 'string',
                      'example' => 'S2',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '敏感数据识别规则的创建时间。格式：时间戳。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1545277010000',
                    ),
                    'Category' => 
                    array (
                      'description' => '敏感数据识别规则内容的类型。取值：
- **0**：关键字。
- **2**：正则表达式。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'MajorKey' => 
                    array (
                      'description' => '主维度key。',
                      'type' => 'string',
                      'example' => 'key',
                    ),
                    'Id' => 
                    array (
                      'description' => '保存记录的敏感数据识别规则的唯一标识ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20000',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '数据资产所属的产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                      'type' => 'string',
                      'example' => 'MaxCompute',
                    ),
                    'MatchType' => 
                    array (
                      'description' => '匹配类型。取值：
- **1**：规则匹配。
- **2**：词典匹配。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 12,\\n  \\"TotalCount\\": 23,\\n  \\"Items\\": [\\n    {\\n      \\"DisplayName\\": \\"****test\\",\\n      \\"Status\\": 1,\\n      \\"SupportForm\\": 2,\\n      \\"WarnLevel\\": 2,\\n      \\"UserId\\": 0,\\n      \\"StatExpress\\": \\"1\\",\\n      \\"GmtModified\\": 1545277010000,\\n      \\"RiskLevelId\\": 2,\\n      \\"Description\\": \\"用于识别IP地址\\",\\n      \\"ProductId\\": 2,\\n      \\"Name\\": \\"IP地址\\",\\n      \\"Content\\": \\"(?:\\\\\\\\\\\\\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\\\\\\\\\\\\\d|1\\\\\\\\\\\\\\\\d{2}|[1-9]\\\\\\\\\\\\\\\\d{1})\\\\\\\\\\\\\\\\.)(?:(?:25[0-5]|2[0-4]\\\\\\\\\\\\\\\\d|[01]?\\\\\\\\\\\\\\\\d?\\\\\\\\\\\\\\\\d)\\\\\\\\\\\\\\\\.){2}(?:25[0-5]|2[0-4]\\\\\\\\\\\\\\\\d|1[0-9]\\\\\\\\\\\\\\\\d|[1-9]\\\\\\\\\\\\\\\\d|[1-9]))(?:\\\\\\\\\\\\\\\\D|$)\\",\\n      \\"Target\\": \\"MaxCompute\\",\\n      \\"LoginName\\": \\"det1111\\",\\n      \\"CategoryName\\": \\"正则表达式\\",\\n      \\"ContentCategory\\": \\"1\\",\\n      \\"HitTotalCount\\": 3,\\n      \\"GroupId\\": \\"4_1\\",\\n      \\"CustomType\\": 1,\\n      \\"RiskLevelName\\": \\"S2\\",\\n      \\"GmtCreate\\": 1545277010000,\\n      \\"Category\\": 2,\\n      \\"MajorKey\\": \\"key\\",\\n      \\"Id\\": 20000,\\n      \\"ProductCode\\": \\"MaxCompute\\",\\n      \\"MatchType\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRulesResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <PageSize>12</PageSize>\\n    <TotalCount>23</TotalCount>\\n    <Items>\\n        <DisplayName>****test</DisplayName>\\n        <Status>1</Status>\\n        <WarnLevel>2</WarnLevel>\\n        <UserId>0</UserId>\\n        <StatExpress>1</StatExpress>\\n        <GmtModified>1545277010000</GmtModified>\\n        <RiskLevelId>2</RiskLevelId>\\n        <Description>用于识别IP地址</Description>\\n        <ProductId>2</ProductId>\\n        <Name>IP地址</Name>\\n        <Content>(?:\\\\\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\\\\\d|1\\\\\\\\d{2}|[1-9]\\\\\\\\d{1})\\\\\\\\.)(?:(?:25[0-5]|2[0-4]\\\\\\\\d|[01]?\\\\\\\\d?\\\\\\\\d)\\\\\\\\.){2}(?:25[0-5]|2[0-4]\\\\\\\\d|1[0-9]\\\\\\\\d|[1-9]\\\\\\\\d|[1-9]))(?:\\\\\\\\D|$)</Content>\\n        <Target>ODPS</Target>\\n        <LoginName>det1111</LoginName>\\n        <CategoryName>正则表达式</CategoryName>\\n        <ContentCategory>1</ContentCategory>\\n        <HitTotalCount>3</HitTotalCount>\\n        <GroupId>4_1</GroupId>\\n        <CustomType>1</CustomType>\\n        <RiskLevelName>S2</RiskLevelName>\\n        <GmtCreate>1545277010000</GmtCreate>\\n        <Category>2</Category>\\n        <MajorKey>key</MajorKey>\\n        <Id>20000</Id>\\n        <ProductCode>MaxCompute</ProductCode>\\n    </Items>\\n</DescribeRulesResponse>","errorExample":""}]',
      'title' => '查询识别规则的列表',
      'summary' => '调用本接口查询敏感数据识别规则的列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRiskLevels' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '82064',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpIUNEZP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定请求和接收消息的语言类型。取值：
- zh_cn：默认值，中文。
- en_us：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业模版ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '136082B3-B21F-5E9D-B68E-991FFD205D24',
              ),
              'RiskLevelList' => 
              array (
                'description' => '风险等级列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '识别出的敏感数据风险等级名称。最大风险等级与分类分级模板有关，最大风险等级为S10。
**内置阿里巴巴及蚂蚁集团数据安全分类分级模版**的最大风险等级为S4，**内置金融分类分级模版（参考JRT 0197-2020 金融数据安全数据安全分级指南）**和**内置能源分类分级标准**的最大风险等级为S5。如果为复制出来的模板，则最大风险等级为S10。
风险等级名称和ID的映射关系如下：
- **NA**：1
- **S1**：2
- **S2**：3
- **S3**：4
- **S4**：5
- **S5**：6
- **S6**：7
- **S7**：8
- **S8**：9
- **S9**：10
- **S10**：11',
                      'type' => 'string',
                      'example' => 'S1',
                    ),
                    'Description' => 
                    array (
                      'description' => '风险等级描述，您可以自定义描述。

风险等级名称和默认风险等级描述的映射关系如下：
- **NA**：未识别到敏感数据
- **S1**：1级敏感数据
- **S2**：2级敏感数据
- **S3**：3级敏感数据
- **S4**：4级敏感数据
- **S5**：5级敏感数据
- **S6**：6级敏感数据
- **S7**：7级敏感数据
- **S8**：8级敏感数据
- **S9**：9级敏感数据
- **S10**：10级敏感数据',
                      'type' => 'string',
                      'example' => '1级敏感数据',
                    ),
                    'Id' => 
                    array (
                      'description' => '风险等级的唯一标志ID，取值范围1~11。每个风险等级ID都有对应的风险等级名称，例如，风险等级ID为2对应风险等级S1。

具体映射关系，请参见Name参数的描述。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'ReferenceNum' => 
                    array (
                      'description' => '风险等级在模板中的引用次数，默认值为0。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"136082B3-B21F-5E9D-B68E-991FFD205D24\\",\\n  \\"RiskLevelList\\": [\\n    {\\n      \\"Name\\": \\"S1\\",\\n      \\"Description\\": \\"1级敏感数据\\",\\n      \\"Id\\": 2,\\n      \\"ReferenceNum\\": 20\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRiskLevelsResponse>\\n<RequestId>136082B3-B21F-5E9D-B68E-991FFD205D24</RequestId>\\n<RiskLevelList>\\n    <Description>未识别到敏感数据</Description>\\n    <Id>1</Id>\\n    <ReferenceNum>0</ReferenceNum>\\n    <Name>N/A</Name>\\n</RiskLevelList>\\n<RiskLevelList>\\n    <Description>1级敏感数据</Description>\\n    <Id>2</Id>\\n    <ReferenceNum>9</ReferenceNum>\\n    <Name>S1</Name>\\n</RiskLevelList>\\n<RiskLevelList>\\n    <Description>2级敏感数据</Description>\\n    <Id>3</Id>\\n    <ReferenceNum>22</ReferenceNum>\\n    <Name>S2</Name>\\n</RiskLevelList>\\n<RiskLevelList>\\n    <Description>3级敏感数据</Description>\\n    <Id>4</Id>\\n    <ReferenceNum>18</ReferenceNum>\\n    <Name>S3</Name>\\n</RiskLevelList>\\n<RiskLevelList>\\n    <Description>4级敏感数据</Description>\\n    <Id>5</Id>\\n    <ReferenceNum>0</ReferenceNum>\\n    <Name>S4</Name>\\n</RiskLevelList>\\n</DescribeRiskLevelsResponse>","errorExample":""}]',
      'title' => '查询风险等级列表',
      'summary' => '调用DescribeRiskLevels接口获取数据识别的风险等级列表。',
      'description' => '本接口用于获取当前使用模板的数据识别风险等级列表，便于掌握当前模板各风险等级的规则引用数量及最大风险等级。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDataAssets' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文（简体）
- **en_us**：英文（美国）
',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询资产的关键词，支持模糊查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'RiskLevels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据资产的风险等级，存在多个时使用英文逗号（,）隔开。
- **2**：S1，弱风险等级
- **3**：S2，中等风险等级
- **4**：S3，高风险等级
- **5**：S4，最高风险等级',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定数据资产命中的敏感数据识别规则唯一标识ID。
> 如果根据数据资产命中的敏感数据识别规则来搜索数据资产，敏感数据识别规则的ID可调用[DescribeRules](~~DescribeRules~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '11122200',
          ),
        ),
        4 => 
        array (
          'name' => 'RangeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据资产类型。取值：
- **1**：MaxCompute项目
- **2**：MaxCompute表
- **3**：MaxCompute包
- **11**：分析型数据库MySQL（ADS）库
- **12**：分析型数据库MySQL（ADS）表
- **21**：OSS文件桶
- **22**：OSS Object
- **31**：表格存储实例
- **32**：表格存储表
- **51**：RDS库
- **52**：RDS表
- **61**：ECS自建数据库
- **62**：ECS自建数据表
- **71**：DRDS库
- **72**：DRDS表
- **81**：PolarDB库
- **82**：PolarDB表
- **91**：GPDB库
- **92**：GPDB表


',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。默认值：**20**。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，当前页的页码。',
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '分页查询时，当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '71064826-726F-4ADA-B879-05D8055476FB',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时，每页最多显示的数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的存在敏感数据的资产总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '数据资产列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Acl' => 
                    array (
                      'description' => 'OSS文件桶的ACL权限设置。
> 只有您将请求参数**RangeId**配置为**21**，即要查询的数据资产为OSS文件桶时，该参数才会显示。',
                      'type' => 'string',
                      'example' => 'private',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '数据资产创建时间，单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1536751124000',
                    ),
                    'DataType' => 
                    array (
                      'description' => '数据资产所属的数据类型。',
                      'type' => 'string',
                      'example' => 'OSS_BUCKET',
                    ),
                    'Owner' => 
                    array (
                      'description' => '数据资产所属者账号。',
                      'type' => 'string',
                      'example' => 'dtdep-239-******',
                    ),
                    'SensitiveRatio' => 
                    array (
                      'description' => '在所有数据资产中敏感数据所占的比例。',
                      'type' => 'string',
                      'example' => '45%',
                    ),
                    'Protection' => 
                    array (
                      'description' => '数据资产的防护状态，固定值：**false**。只有您将请求参数**RangeId**配置为**1**，即要查询的数据资产为MaxCompute项目时，该参数才会返回**true**或**false**。
- **false**: 未开启数据保护机制。
- **true**：开启数据保护机制。项目空间中的数据只能流入，不能流出。

',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Labelsec' => 
                    array (
                      'description' => '数据的敏感度标记，固定值：**0**。只有您将请求参数**RangeId**配置为**1**，即要查询的数据资产为MaxCompute项目时，该参数才会返回**0**、**1**、**2**或**3**。
- **0**：不保密，Unclassified
- **1**：秘密，Confidential
- **2**：机密，Sensitive
- **3** ：高度机密，Highly Sensitive
',
                      'type' => 'boolean',
                      'example' => '0',
                    ),
                    'TotalCount' => 
                    array (
                      'description' => '所有数据资产的数量。例如：MaxCompute中项目、包或表的总数；RDS中数据库或表的总数；OSS中文件桶或Object的总数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '432',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => '数据资产的风险等级ID。风险等级ID越高，表示识别出的数据越敏感。取值：
- **1**：未识别到敏感数据，无风险
- **2**：1级敏感数据风险
- **3**：2级敏感数据风险
- **4**：3级敏感数据风险
- **5**：4级敏感数据风险
- **6**：5级敏感数据风险
- **7**：6级敏感数据风险
- **8**：7级敏感数据风险
- **9**：8级敏感数据风险
- **10**：9级敏感数据风险
- **11**：10级敏感数据风险',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'RuleName' => 
                    array (
                      'description' => '数据资产命中的敏感数据识别规则名称。',
                      'type' => 'string',
                      'example' => '***规则',
                    ),
                    'Sensitive' => 
                    array (
                      'description' => '数据资产中是否包含敏感数据。取值：
- **true**：包含
- **false**：不包含',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ObjectKey' => 
                    array (
                      'description' => 'OSS存储对象的Key值。
> 只有您将请求参数**RangeId**配置为**22**，即要查询的数据资产为OSS Object时，该参数才会显示。',
                      'type' => 'string',
                      'example' => '内部',
                    ),
                    'RiskLevelName' => 
                    array (
                      'description' => '数据资产的风险等级名称。',
                      'type' => 'string',
                      'example' => '中等风险等级',
                    ),
                    'OdpsRiskLevelName' => 
                    array (
                      'description' => 'MaxCompute资产的风险等级名称。取值：
- **S1**：弱风险等级
- **S2**：中等风险等级
- **S3**：高级风险等级
- **S4**：最高风险等级
> 只有您将请求参数**RangeId**配置为**1**，即要查询的数据资产为MaxCompute项目时，该参数才会显示。',
                      'type' => 'string',
                      'example' => 'S4',
                    ),
                    'ProductId' => 
                    array (
                      'description' => '数据资产所属产品类型ID。取值：
- **1**：MaxCompute
- **2**：OSS
- **3**：ADS
- **4**：OTS
- **5**：RDS',
                      'type' => 'string',
                      'example' => '5',
                    ),
                    'Name' => 
                    array (
                      'description' => '数据资产名称。',
                      'type' => 'string',
                      'example' => 'gxdata',
                    ),
                    'SensitiveCount' => 
                    array (
                      'description' => '数据资产中敏感数据总数。例如：MaxCompute中敏感的项目、包或表的总数；RDS中敏感的数据库或表的总数；OSS中敏感的文件桶或Object的总数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '24',
                    ),
                    'Id' => 
                    array (
                      'description' => '数据资产的唯一标识ID。',
                      'type' => 'string',
                      'example' => '268',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '数据资产所属产品名称。',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"71064826-726F-4ADA-B879-05D8055476FB\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"Acl\\": \\"private\\",\\n      \\"CreationTime\\": 1536751124000,\\n      \\"DataType\\": \\"OSS_BUCKET\\",\\n      \\"Owner\\": \\"dtdep-239-******\\",\\n      \\"SensitiveRatio\\": \\"45%\\",\\n      \\"Protection\\": false,\\n      \\"Labelsec\\": true,\\n      \\"TotalCount\\": 432,\\n      \\"RiskLevelId\\": 2,\\n      \\"RuleName\\": \\"***规则\\",\\n      \\"Sensitive\\": true,\\n      \\"ObjectKey\\": \\"内部\\",\\n      \\"RiskLevelName\\": \\"中等风险等级\\",\\n      \\"OdpsRiskLevelName\\": \\"S4\\",\\n      \\"ProductId\\": \\"5\\",\\n      \\"Name\\": \\"gxdata\\",\\n      \\"SensitiveCount\\": 24,\\n      \\"Id\\": \\"268\\",\\n      \\"ProductCode\\": \\"RDS\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataAssetsResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>71064826-726F-4ADA-B879-05D8055476FB</RequestId>\\n    <PageSize>20</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Items>\\n        <Acl>private</Acl>\\n        <CreationTime>1536751124000</CreationTime>\\n        <DataType>OSS_BUCKET</DataType>\\n        <Owner>dtdep-239-******</Owner>\\n        <SensitiveRatio>45%</SensitiveRatio>\\n        <Protection>false</Protection>\\n        <Labelsec>false</Labelsec>\\n        <TotalCount>432</TotalCount>\\n        <RiskLevelId>2</RiskLevelId>\\n        <RuleName>***规则</RuleName>\\n        <Sensitive>true</Sensitive>\\n        <ObjectKey>内部</ObjectKey>\\n        <RiskLevelName>中等风险等级</RiskLevelName>\\n        <OdpsRiskLevelName>S4</OdpsRiskLevelName>\\n        <ProductId>5</ProductId>\\n        <Name>gxdata</Name>\\n        <SensitiveCount>24</SensitiveCount>\\n        <Id>268</Id>\\n        <ProductCode>RDS</ProductCode>\\n    </Items>\\n</DescribeDataAssetsResponse>","errorExample":""}]',
      'title' => '查询数据资产敏感信息',
      'summary' => '执行敏感数据保护概览页面的数据资产搜索。',
      'description' => '本接口一般用于敏感数据保护概览页面各资产类型数据的查询。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstances' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh_cn**。
取值：

- **zh_cn**：中文（简体）
- **en_us**：英文（美国）',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置搜索的关键词，支持模糊匹配。例如，输入data，会搜索出搜索项中包含data的全部数据信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'data',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置数据资产实例所属产品的ID。您可以通过调用[DescribeDataAssets](~~DescribeDataAssets~~)接口获取产品ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RiskLevelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置数据资产实例的风险等级ID。风险等级ID越高，表示识别出的数据越敏感。取值：

- **1**：表示未识别到敏感数据，无风险。
- **2**：表示1级敏感数据风险。
- **3**：表示2级敏感数据风险。
- **4**：表示3级敏感数据风险。
- **5**：表示4级敏感数据风险。
- **6**：表示5级敏感数据风险。
- **7**：表示6级敏感数据风险。
- **8**：表示7级敏感数据风险。
- **9**：表示8级敏感数据风险。
- **10**：表示9级敏感数据风险。
- **11**：表示10级敏感数据风险。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置数据资产实例命中的敏感数据识别规则ID。该敏感数据识别规则的ID可调用[DescribeRules](~~DescribeRules~~)接口，查看返回参数**Id**获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1111111',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置数据资产实例的地域。更多信息，请参见[支持的地域](~~214257~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        6 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置数据资产实例所属产品的名称，包括MaxCompute、OSS、RDS等。关于支持的产品名称，请参见[支持识别敏感数据的数据类型](~~212906~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'RDS',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '当前页面的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '71064826-726F-4ADA-B879-05D8055476FB',
              ),
              'PageSize' => 
              array (
                'description' => '列表中每页显示的数据资产实例的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的数据资产实例的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '231',
              ),
              'Items' => 
              array (
                'description' => '查询到的数据资产实例详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '创建该数据资产实例的时间。使用时间戳表示，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1637226782000',
                    ),
                    'LastFinishTime' => 
                    array (
                      'description' => '最近一次扫描数据资产实例的完成时间。使用时间戳表示，单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1637622793000',
                    ),
                    'Owner' => 
                    array (
                      'description' => '拥有该数据资产实例的阿里云账号。',
                      'type' => 'string',
                      'example' => 'dtdep-239-******',
                    ),
                    'TenantName' => 
                    array (
                      'description' => '租户的名称。',
                      'type' => 'string',
                      'example' => 'tenant',
                    ),
                    'Protection' => 
                    array (
                      'description' => '数据资产实例的防护状态。取值：

- **true**：防护中
- **false**：未防护',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'DepartName' => 
                    array (
                      'description' => '数据资产实例所属部门的名称。',
                      'type' => 'string',
                      'example' => '***DemoCenter',
                    ),
                    'Labelsec' => 
                    array (
                      'description' => '数据资产实例的安全状态。取值：

- **true**：安全
- **false**：非安全',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => '数据资产实例的风险等级ID。风险等级ID越高，表示识别出的数据越敏感。

- **1**：表示未识别到敏感数据，无风险。
- **2**：表示1级敏感数据风险。
- **3**：表示2级敏感数据风险。
- **4**：表示3级敏感数据风险。
- **5**：表示4级敏感数据风险。
- **6**：表示5级敏感数据风险。
- **7**：表示6级敏感数据风险。
- **8**：表示7级敏感数据风险。
- **9**：表示8级敏感数据风险。
- **10**：表示9级敏感数据风险。
- **11**：表示10级敏感数据风险。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'ProductId' => 
                    array (
                      'description' => '数据资产实例所属产品的ID。',
                      'type' => 'string',
                      'example' => '5',
                    ),
                    'Name' => 
                    array (
                      'description' => '数据资产实例的名称。',
                      'type' => 'string',
                      'example' => 'gxdata',
                    ),
                    'TotalCount' => 
                    array (
                      'description' => '数据资产实例中的数据总数。例如：当数据资产为RDS时，表示该实例中数据库的总表数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '231',
                    ),
                    'InstanceDescription' => 
                    array (
                      'description' => '数据资产实例的描述信息。',
                      'type' => 'string',
                      'example' => 'instance dscription',
                    ),
                    'RuleName' => 
                    array (
                      'description' => '数据资产实例命中的敏感数据识别规则的名称。',
                      'type' => 'string',
                      'example' => '*** rule',
                    ),
                    'Sensitive' => 
                    array (
                      'description' => '数据资产实例中是否包含敏感数据。取值：

- **true**：包含
- **false**：不包含',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'RiskLevelName' => 
                    array (
                      'description' => '数据资产实例的风险等级名称。',
                      'type' => 'string',
                      'example' => 'S1',
                    ),
                    'OdpsRiskLevelName' => 
                    array (
                      'description' => '此参数已废弃。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'SensitiveCount' => 
                    array (
                      'description' => '数据资产实例中包含的敏感数据总数。例如：当数据资产为RDS时，表示该实例中数据库的敏感总表数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '123',
                    ),
                    'Id' => 
                    array (
                      'description' => '数据安全中心服务中记录的数据资产实例的唯一标识ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '11111',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '数据资产实例所属产品的名称，包括MaxCompute、OSS、RDS等。关于支持的具体产品名称，请参见[支持识别敏感数据的数据类型](~~212906~~)。',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                    'ModelTags' => 
                    array (
                      'description' => '数据标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据标签对象。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Id' => 
                          array (
                            'description' => '数据标签ID。取值：
- **101**：个人敏感信息
- **102**：个人信息
- **107**：通用信息',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '101',
                          ),
                          'Name' => 
                          array (
                            'description' => '数据标签名称。取值：
- 个人敏感信息
- 个人信息
- 通用信息',
                            'type' => 'string',
                            'example' => 'personal sensitive data',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"71064826-726F-4ADA-B879-05D8055476FB\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 231,\\n  \\"Items\\": [\\n    {\\n      \\"CreationTime\\": 1637226782000,\\n      \\"LastFinishTime\\": 1637622793000,\\n      \\"Owner\\": \\"dtdep-239-******\\",\\n      \\"TenantName\\": \\"tenant\\",\\n      \\"Protection\\": false,\\n      \\"DepartName\\": \\"***DemoCenter\\",\\n      \\"Labelsec\\": true,\\n      \\"RiskLevelId\\": 2,\\n      \\"ProductId\\": \\"5\\",\\n      \\"Name\\": \\"gxdata\\",\\n      \\"TotalCount\\": 231,\\n      \\"InstanceDescription\\": \\"instance dscription\\",\\n      \\"RuleName\\": \\"*** rule\\",\\n      \\"Sensitive\\": true,\\n      \\"RiskLevelName\\": \\"S1\\",\\n      \\"OdpsRiskLevelName\\": \\"1\\",\\n      \\"SensitiveCount\\": 123,\\n      \\"Id\\": 11111,\\n      \\"ProductCode\\": \\"RDS\\",\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"personal sensitive data\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstancesResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>71064826-726F-4ADA-B879-05D8055476FB</RequestId>\\n    <PageSize>10</PageSize>\\n    <TotalCount>231</TotalCount>\\n    <Items>\\n        <CreationTime>1637226782000</CreationTime>\\n        <LastFinishTime>1637622793000</LastFinishTime>\\n        <Owner>dtdep-239-******</Owner>\\n        <TenantName>租户1</TenantName>\\n        <Protection>false</Protection>\\n        <DepartName>***DemoCenter</DepartName>\\n        <Labelsec>true</Labelsec>\\n        <RiskLevelId>2</RiskLevelId>\\n        <ProductId>5</ProductId>\\n        <Name>gxdata</Name>\\n        <TotalCount>231</TotalCount>\\n        <InstanceDescription>实例信息1</InstanceDescription>\\n        <RuleName>***规则</RuleName>\\n        <Sensitive>true</Sensitive>\\n        <RiskLevelName>1级敏感数据风险</RiskLevelName>\\n        <OdpsRiskLevelName>1</OdpsRiskLevelName>\\n        <SensitiveCount>123</SensitiveCount>\\n        <Id>11111</Id>\\n        <ProductCode>RDS</ProductCode>\\n    </Items>\\n</DescribeInstancesResponse>","errorExample":""}]',
      'title' => '查询数据资产实例列表',
      'summary' => '获取连接授权的MaxCompute、RDS、OSS数据资产实例列表。',
      'description' => '在调用DescribeInstances接口时，您可以设置搜索关键词、数据资产实例的风险等级等参数来获取符合要求的数据资产实例的列表信息。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。
',
    ),
    'DescribeTables' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索的关键词，支持模糊匹配。
例如，输入test，会搜索出搜索项中包含test的全部数据信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表所属产品ID。该产品ID可调用[DescribeDataAssets](~~DescribeDataAssets~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表所属产品名称，包括MaxCompute、OSS、RDS等。关于支持的产品名称，请参见[支持识别敏感数据的数据类型](~~212906~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'MaxCompute',
          ),
        ),
        4 => 
        array (
          'name' => 'RiskLevelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表的风险等级ID。
每个风险等级ID都有对应的风险等级名称。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表命中的敏感数据识别规则ID。该敏感数据识别规则ID可调用[DescribeRules](~~DescribeRules~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '333322',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表所属的资产实例ID。该资产实例ID可调用[DescribeInstances](~~DescribeInstances~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PackageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表所属的资产包ID。该资产包ID可调用[DescribePackages](~~DescribePackages~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '555555',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表中每页显示的数据最大条数。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'ServiceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持数据安全中心服务的地域。更多信息，请参见[支持的地域](~~214257~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        11 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业模版ID',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '结果中显示的当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'PageSize' => 
              array (
                'description' => '结果中每页显示的数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '13',
              ),
              'Items' => 
              array (
                'description' => '数据资产表的信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '创建该数据资产表的时间。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1536751124000',
                    ),
                    'Owner' => 
                    array (
                      'description' => '拥有该数据资产表的阿里云账号。',
                      'type' => 'string',
                      'example' => 'dtdep-239-******',
                    ),
                    'SensitiveRatio' => 
                    array (
                      'description' => '数据资产表中敏感字段所占的百分比。',
                      'type' => 'string',
                      'example' => '21%',
                    ),
                    'TenantName' => 
                    array (
                      'description' => '租户名称。',
                      'type' => 'string',
                      'example' => '租户1',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => '数据资产表的风险等级ID。
每个风险等级ID都有对应的风险等级名称。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '数据资产表的实例名称。',
                      'type' => 'string',
                      'example' => '实例1',
                    ),
                    'ProductId' => 
                    array (
                      'description' => '数据资产表所属的产品ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Name' => 
                    array (
                      'description' => '数据资产表的名称。',
                      'type' => 'string',
                      'example' => 'gxdata',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '数据资产表所属的资产实例ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'TotalCount' => 
                    array (
                      'description' => '数据资产表包含的字段总数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1234',
                    ),
                    'InstanceDescription' => 
                    array (
                      'description' => '实例的备注信息。',
                      'type' => 'string',
                      'example' => '备注1',
                    ),
                    'Sensitive' => 
                    array (
                      'description' => '数据资产表中是否包含敏感字段。

- **true**：包含。
- **false**：不包含。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'RiskLevelName' => 
                    array (
                      'description' => '数据资产表的风险等级名称。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                      'type' => 'string',
                      'example' => 'S2',
                    ),
                    'SensitiveCount' => 
                    array (
                      'description' => '数据资产表中包含的敏感字段总数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '32',
                    ),
                    'Id' => 
                    array (
                      'description' => '数据资产表的唯一标识ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '222',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '数据资产表所属产品名称，取值：**MaxCompute、OSS、ADS、OTS、RDS**等。关于支持的具体产品名称，请参见[支持识别敏感数据的数据类型](~~212906~~)。',
                      'type' => 'string',
                      'example' => 'MaxCompute',
                    ),
                    'RuleList' => 
                    array (
                      'description' => '数据资产表命中的敏感数据识别规则信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '规则的名称。',
                            'type' => 'string',
                            'example' => '规则名称',
                          ),
                          'RiskLevelId' => 
                          array (
                            'description' => '敏感数据识别规则的风险等级ID。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1',
                          ),
                          'Count' => 
                          array (
                            'description' => '规则的总数。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '12',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 13,\\n  \\"Items\\": [\\n    {\\n      \\"CreationTime\\": 1536751124000,\\n      \\"Owner\\": \\"dtdep-239-******\\",\\n      \\"SensitiveRatio\\": \\"21%\\",\\n      \\"TenantName\\": \\"租户1\\",\\n      \\"RiskLevelId\\": 2,\\n      \\"InstanceName\\": \\"实例1\\",\\n      \\"ProductId\\": \\"1\\",\\n      \\"Name\\": \\"gxdata\\",\\n      \\"InstanceId\\": 1,\\n      \\"TotalCount\\": 1234,\\n      \\"InstanceDescription\\": \\"备注1\\",\\n      \\"Sensitive\\": true,\\n      \\"RiskLevelName\\": \\"S2\\",\\n      \\"SensitiveCount\\": 32,\\n      \\"Id\\": 222,\\n      \\"ProductCode\\": \\"MaxCompute\\",\\n      \\"RuleList\\": [\\n        {\\n          \\"Name\\": \\"规则名称\\",\\n          \\"RiskLevelId\\": 1,\\n          \\"Count\\": 12\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>13</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n<CurrentPage>1</CurrentPage>\\n<Items>\\n    <Owner>dtdep-239-******</Owner>\\n    <ProductCode>MaxCompute</ProductCode>\\n    <InstanceId>1</InstanceId>\\n    <TenantName>租户1</TenantName>\\n    <SensitiveRatio>21%</SensitiveRatio>\\n    <ProductId>1</ProductId>\\n    <RiskLevelId>2</RiskLevelId>\\n    <Name>gxdata</Name>\\n    <InstanceName>实例1</InstanceName>\\n    <TotalCount>1234</TotalCount>\\n    <CreationTime>1536751124000</CreationTime>\\n    <Sensitive>true</Sensitive>\\n    <RiskLevelName>最高风险等级</RiskLevelName>\\n    <InstanceDescription>备注1</InstanceDescription>\\n    <Id>222</Id>\\n    <SensitiveCount>32</SensitiveCount>\\n    <RuleList>\\n        <Count>12</Count>\\n        <RiskLevelId>1</RiskLevelId>\\n        <Name>规则名称</Name>\\n    </RuleList>\\n</Items>","errorExample":""}]',
      'title' => '查询数据资产表的数据',
      'summary' => '查询数据安全中心连接授权的MaxCompute、RDS等数据资产的表数据。',
      'description' => '在调用DescribeTables接口时，您可以设置搜索关键词、数据资产表的风险等级等参数来获取符合要求的数据资产的表信息。

# QPS限制
本接口的单用户QPS限制为10次/秒，超过限制，API调用会限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeColumns' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索的关键词，支持模糊匹配。

例如，输入**test**，会搜索出搜索项中包含**test**的全部数据信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'MaxCompute、RDS等资产表中的列所属的资产表唯一标识ID。

> 根据资产表的ID查询数据安全中心连接授权的数据资产表中列的数据，资产表ID可调用[DescribeTables](~~DescribeTables~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '11132334',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产表中列数据命中的敏感数据识别规则的唯一标识ID。

> 根据资产表中列数据命中的敏感数据识别规则的ID，查询数据安全中心连接授权的数据资产表中列的数据，敏感数据识别规则ID可调用[DescribeRules](~~DescribeRules~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '11111',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表中列数据所属产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
            'type' => 'string',
            'required' => false,
            'example' => 'MaxCompute',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表中列数据所属的资产实例ID。

> 根据数据资产表中列数据所属的资产实例的ID，查询数据安全中心连接授权的数据资产表中列的数据，资产实例ID可调用[DescribeInstances](~~DescribeRules~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表中列数据所属的资产实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-bp17t1htja573l5i8****',
          ),
        ),
        7 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'it_table',
          ),
        ),
        8 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表中列数据命中的敏感数据识别规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        9 => 
        array (
          'name' => 'SensLevelName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感等级名。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'S2',
          ),
        ),
        10 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表每页显示的数据最大条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        11 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'RiskLevelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的风险等级ID。取值：
- **1**：N/A。
- **2**：S1。
- **3**：S2。
- **4**：S3。
- **5**：S4。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '结果中显示的当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-4******',
              ),
              'PageSize' => 
              array (
                'description' => '结果中每页显示数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'Items' => 
              array (
                'description' => '数据资产表中列的数据。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '数据资产表中列数据的创建时间毫秒数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1536751124000',
                    ),
                    'TableName' => 
                    array (
                      'description' => '订正目标列所属的表名。',
                      'type' => 'string',
                      'example' => 'it_table',
                    ),
                    'DataType' => 
                    array (
                      'description' => '数据资产表中列数据的数据类型。',
                      'type' => 'string',
                      'example' => 'String',
                    ),
                    'OdpsRiskLevelValue' => 
                    array (
                      'description' => '资产的风险等级编码。取值：

- **1**：N/A。
- **2**：S1。
- **3**：S2。
- **4**：S3。
- **5**：S4。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '数据资产表中列数据所属的资产实例ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => '数据资产表中列数据的风险等级ID。取值：
- **1**：N/A。
- **2**：S1。
- **3**：S2。
- **4**：S3。
- **5**：S4。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'RuleName' => 
                    array (
                      'description' => '数据资产表中列数据命中的敏感数据识别规则名称。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'RuleId' => 
                    array (
                      'description' => '数据资产表中列数据命中的敏感数据识别规则ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'Sensitive' => 
                    array (
                      'description' => '数据资产表中列数据是否包含敏感数据。取值：

- true：数据资产表中列数据包含敏感数据。
- false：数据资产表中列数据不包含敏感数据。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'SensLevelName' => 
                    array (
                      'description' => '敏感等级名。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                      'type' => 'string',
                      'example' => 'S2',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '数据资产表中列数据所属的资产实例名称。',
                      'type' => 'string',
                      'example' => 'rm-bp17t1htja573l5i8****',
                    ),
                    'RiskLevelName' => 
                    array (
                      'description' => '数据资产表中列数据的风险等级名称。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                      'type' => 'string',
                      'example' => 'S2',
                    ),
                    'OdpsRiskLevelName' => 
                    array (
                      'description' => '资产的风险等级名称。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                      'type' => 'string',
                      'example' => 'S3',
                    ),
                    'Name' => 
                    array (
                      'description' => '数据资产表中列的名称。',
                      'type' => 'string',
                      'example' => 'gxdata',
                    ),
                    'TableId' => 
                    array (
                      'description' => '数据资产表中列数据所属的资产表ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
                    ),
                    'Id' => 
                    array (
                      'description' => '数据资产表中列的唯一标识ID。',
                      'type' => 'string',
                      'example' => '268',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '数据资产表中列数据所属产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                      'type' => 'string',
                      'example' => 'MaxCompute',
                    ),
                    'RevisionStatus' => 
                    array (
                      'description' => '订正状态。取值：
- 1：已订正。
- 0：未订正。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'RevisionId' => 
                    array (
                      'description' => '订正记录ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '12',
                    ),
                    'ModelTags' => 
                    array (
                      'description' => '命中识别模型的数据标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '命中识别模型的数据标签对象。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Id' => 
                          array (
                            'description' => '识别模型的数据标签ID。
- **101**：个人敏感信息。
- **102**：个人信息。
- **103**：重要数据。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '101',
                          ),
                          'Name' => 
                          array (
                            'description' => '识别模型的数据标签名称。
- 个人敏感信息。
- 个人信息。
- 重要数据。',
                            'type' => 'string',
                            'example' => 'personal sensitive data',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-4******\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 12,\\n  \\"Items\\": [\\n    {\\n      \\"CreationTime\\": 1536751124000,\\n      \\"TableName\\": \\"it_table\\",\\n      \\"DataType\\": \\"String\\",\\n      \\"OdpsRiskLevelValue\\": 3,\\n      \\"InstanceId\\": 1,\\n      \\"RiskLevelId\\": 2,\\n      \\"RuleName\\": \\"name\\",\\n      \\"RuleId\\": 1,\\n      \\"Sensitive\\": false,\\n      \\"SensLevelName\\": \\"S2\\",\\n      \\"InstanceName\\": \\"rm-bp17t1htja573l5i8****\\",\\n      \\"RiskLevelName\\": \\"S2\\",\\n      \\"OdpsRiskLevelName\\": \\"S3\\",\\n      \\"Name\\": \\"gxdata\\",\\n      \\"TableId\\": 123,\\n      \\"Id\\": \\"268\\",\\n      \\"ProductCode\\": \\"MaxCompute\\",\\n      \\"RevisionStatus\\": 1,\\n      \\"RevisionId\\": 12,\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"personal sensitive data\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeColumnsResponse>\\r\\n\\t<RequestId>769FB3C1-F4C9-4******</RequestId>\\r\\n\\t<TotalCount>4</TotalCount>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<CurrentPage>1</CurrentPage>\\r\\n\\t<Items>\\r\\n\\t\\t<Owner>dtdep-239-***</Owner>\\r\\n\\t\\t<ProductCode>RDS</ProductCode>\\r\\n\\t\\t<RiskLevelId>2</RiskLevelId>\\r\\n\\t\\t<RiskLevelName>S2</RiskLevelName>\\r\\n\\t\\t<DepartName>***DemoCenter</DepartName>\\r\\n\\t\\t<Name>gxdata</Name>\\r\\n\\t\\t<CreationTime>1536751124000</CreationTime>\\r\\n\\t\\t<Sensitive>true</Sensitive>\\r\\n\\t\\t<Id>268</Id>\\r\\n\\t\\t<RuleId>1</RuleId>\\r\\n\\t\\t<RuleName>**规则</RuleName>\\r\\n\\t\\t<InstanceId>1</InstanceId>\\r\\n\\t\\t<TableId>123</TableId>\\r\\n\\t</Items>\\r\\n</DescribeColumnsResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查询数据资产表中列的数据',
      'summary' => '调用DescribeColumns接口查询数据安全中心连接授权的MaxCompute、RDS等数据资产表中列的数据。',
      'description' => '本接口一般用于敏感数据资产信息表中列数据的查看，便于用户准确的对敏感数据进行分析。

## 注意事项
DescribeColumns接口已修订为DescribeColumnsV2。建议您在开发应用程序时使用较新的版本DescribeColumnsV2。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeColumnsV2' => 
    array (
      'summary' => '调用DescribeColumns接口查询数据安全中心连接授权的MaxCompute、RDS等数据资产表中列的数据。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh_cn**。
取值：

- **zh_cn**：中文（简体）
- **en_us**：英文（美国）',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索的关键词，支持模糊匹配。

例如，输入**test**，会搜索出搜索项中包含**test**的全部数据信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'TableId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'MaxCompute、RDS等资产表中的列所属的资产表唯一标识ID。

> 根据资产表的ID查询数据安全中心连接授权的数据资产表中列的数据，资产表ID可调用[DescribeTables](~~141709~~)接口获取。
',
            'type' => 'string',
            'required' => false,
            'example' => '11132334',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产表中列数据命中的敏感数据识别规则的唯一标识ID。

> 根据资产表中列数据命中的敏感数据识别规则的ID，查询数据安全中心连接授权的数据资产表中列的数据，敏感数据识别规则ID可调用[DescribeRules](~~141389~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '11122200',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表中列数据所属产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
            'type' => 'string',
            'required' => false,
            'example' => 'MaxCompute',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表中列数据所属的资产实例ID。

> 根据数据资产表中列数据所属的资产实例的ID，查询数据安全中心连接授权的数据资产表中列的数据，资产实例ID可调用[DescribeInstances](~~141708~~)接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表中列数据所属的资产实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-bp17t1htja573l5i8****',
          ),
        ),
        7 => 
        array (
          'name' => 'TableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'it_table',
          ),
        ),
        8 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表中列数据命中的敏感数据识别规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        9 => 
        array (
          'name' => 'SensLevelName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感等级名。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'S2',
          ),
        ),
        10 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        11 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'RiskLevelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '敏感数据识别规则的风险等级ID。取值：
- **1**：N/A。
- **2**：S1。
- **3**：S2。
- **4**：S3。
- **5**：S4。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
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
              'CurrentPage' => 
              array (
                'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'B1F2BB1F-04EC-5D36-B136-B4DE17FD8DE0',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'Items' => 
              array (
                'description' => '数据表的列的识别结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据表的列的识别结果对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '数据资产表中列数据的创建时间毫秒数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1536751124000',
                    ),
                    'TableName' => 
                    array (
                      'description' => '订正目标列所属的表名。',
                      'type' => 'string',
                      'example' => 'it_table',
                    ),
                    'DataType' => 
                    array (
                      'description' => '数据资产表中列数据的数据类型。',
                      'type' => 'string',
                      'example' => 'varchar',
                    ),
                    'OdpsRiskLevelValue' => 
                    array (
                      'description' => '资产的风险等级编码。取值：

- **1**：N/A。
- **2**：S1。
- **3**：S2。
- **4**：S3。
- **5**：S4。

>返回值<=1，代表N/A。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '数据资产表中列数据所属的资产实例ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1232122',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => '数据资产表中列数据的风险等级ID。取值：
- **1**：N/A。
- **2**：S1。
- **3**：S2。
- **4**：S3。
- **5**：S4。

>返回值<=1，代表N/A。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4',
                    ),
                    'RuleName' => 
                    array (
                      'description' => '数据资产表中列数据命中的敏感数据识别规则名称。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'RuleId' => 
                    array (
                      'description' => '数据资产表中列数据命中的敏感数据识别规则ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1004',
                    ),
                    'Sensitive' => 
                    array (
                      'description' => '数据资产表中列数据是否包含敏感数据。取值：

- true：数据资产表中列数据包含敏感数据。
- false：数据资产表中列数据不包含敏感数据。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'SensLevelName' => 
                    array (
                      'description' => '敏感等级名。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                      'type' => 'string',
                      'example' => 'S2',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '数据资产表中列数据所属的资产实例名称。',
                      'type' => 'string',
                      'example' => 'rm-1234',
                    ),
                    'RiskLevelName' => 
                    array (
                      'description' => '数据资产表中列数据的风险等级名称。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                      'type' => 'string',
                      'example' => 'S1',
                    ),
                    'OdpsRiskLevelName' => 
                    array (
                      'description' => '资产的风险等级名称。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                      'type' => 'string',
                      'example' => 'S4',
                    ),
                    'Name' => 
                    array (
                      'description' => '数据资产表中列的名称。',
                      'type' => 'string',
                      'example' => 'obj_id',
                    ),
                    'TableId' => 
                    array (
                      'description' => '数据资产表中列数据所属的资产表ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
                    ),
                    'Id' => 
                    array (
                      'description' => '数据资产表中列的唯一标识ID。',
                      'type' => 'string',
                      'example' => '111111',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '数据资产表中列数据所属产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                    'RevisionStatus' => 
                    array (
                      'description' => '订正状态。取值：
- 1：已订正。
- 0：未订正。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'RevisionId' => 
                    array (
                      'description' => '订正记录ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '12',
                    ),
                    'ModelTags' => 
                    array (
                      'description' => '数据标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据标签对象。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Id' => 
                          array (
                            'description' => '数据标签ID。取值：
- **101**：个人敏感信息
- **102**：个人信息
- **107**：通用信息',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '101',
                          ),
                          'Name' => 
                          array (
                            'description' => '数据标签名称。取值：
- 个人敏感信息
- 个人信息
- 通用信息',
                            'type' => 'string',
                            'example' => 'personal sensitive information',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"B1F2BB1F-04EC-5D36-B136-B4DE17FD8DE0\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 12,\\n  \\"Items\\": [\\n    {\\n      \\"CreationTime\\": 1536751124000,\\n      \\"TableName\\": \\"it_table\\",\\n      \\"DataType\\": \\"varchar\\",\\n      \\"OdpsRiskLevelValue\\": 3,\\n      \\"InstanceId\\": 1232122,\\n      \\"RiskLevelId\\": 4,\\n      \\"RuleName\\": \\"name\\",\\n      \\"RuleId\\": 1004,\\n      \\"Sensitive\\": true,\\n      \\"SensLevelName\\": \\"S2\\",\\n      \\"InstanceName\\": \\"rm-1234\\",\\n      \\"RiskLevelName\\": \\"S1\\",\\n      \\"OdpsRiskLevelName\\": \\"S4\\",\\n      \\"Name\\": \\"obj_id\\",\\n      \\"TableId\\": 123,\\n      \\"Id\\": \\"111111\\",\\n      \\"ProductCode\\": \\"RDS\\",\\n      \\"RevisionStatus\\": 1,\\n      \\"RevisionId\\": 12,\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"personal sensitive information\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询数据资产表中列的数据V2',
    ),
    'DescribeOssObjects' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '82058',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2VFD4T',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索的关键词，支持模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'RiskLevelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS存储对象的风险等级ID。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS存储对象命中的敏感数据识别规则ID。

> 如果根据OSS存储对象命中的敏感数据识别规则的ID查询DSC连接授权的OSS的存储对象列表，敏感数据识别规则ID可调用**DescribeRules**接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1222',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS对象所属资产实例ID。

> 如果根据OSS对象所属资产实例的ID查询DSC连接授权的OSS的存储对象列表，资产实例ID可调用**DescribeInstances**接口获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'ins-2222',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表每页显示的数据最大条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '12',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'ServiceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产所在的地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'LastScanTimeStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最后一次扫描开始时间。格式：时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1536751124000',
          ),
        ),
        9 => 
        array (
          'name' => 'LastScanTimeEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最后一次扫描结束时间。格式：时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1536751124000',
          ),
        ),
        10 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业模版ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'FileCategoryCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件分类编码。',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '结果中当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'PageSize' => 
              array (
                'description' => '结果中每页显示的数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => 'OSS存储对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'OSS存储对象列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'description' => 'OSS存储对象所属资产实例ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1232122',
                    ),
                    'CategoryName' => 
                    array (
                      'description' => '文件类型名称。',
                      'type' => 'string',
                      'example' => 'MP4视频文件',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => 'OSS存储对象的风险等级ID。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'RegionId' => 
                    array (
                      'description' => 'OSS存储对象所有者所属区域ID。',
                      'type' => 'string',
                      'example' => 'cn-***',
                    ),
                    'FileId' => 
                    array (
                      'description' => 'OSS存储文件ID。',
                      'type' => 'string',
                      'example' => 'file-22***',
                    ),
                    'Size' => 
                    array (
                      'description' => '文件大小。单位：字节。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20',
                    ),
                    'BucketName' => 
                    array (
                      'description' => 'Bucket名称。',
                      'type' => 'string',
                      'example' => 'oss-duplicate-***',
                    ),
                    'RiskLevelName' => 
                    array (
                      'description' => 'OSS存储对象的风险等级名称。',
                      'type' => 'string',
                      'example' => '中等风险等级',
                    ),
                    'Category' => 
                    array (
                      'description' => 'OSS存储对象类型。取值：**900001**（MP4视频文件）、**800015**（PDF文档）、**800005**（OSS配置文件）等。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '900001',
                    ),
                    'Name' => 
                    array (
                      'description' => 'OSS存储对象名称。',
                      'type' => 'string',
                      'example' => 'obj_id',
                    ),
                    'RuleCount' => 
                    array (
                      'description' => '命中规则数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'SensitiveCount' => 
                    array (
                      'description' => '命中字段数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50',
                    ),
                    'Id' => 
                    array (
                      'description' => 'OSS存储对象的唯一标识ID。',
                      'type' => 'string',
                      'example' => '17383',
                    ),
                    'RuleList' => 
                    array (
                      'description' => '规则列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '搜索的关键词，支持模糊匹配。',
                            'type' => 'string',
                            'example' => '身份证',
                          ),
                          'RiskLevelId' => 
                          array (
                            'description' => 'OSS存储对象的风险等级ID。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '2',
                          ),
                          'Count' => 
                          array (
                            'description' => '规则的命中次数。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '100',
                          ),
                        ),
                      ),
                    ),
                    'FileCategoryCode' => 
                    array (
                      'description' => '文件分类编码。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'FileCategoryName' => 
                    array (
                      'description' => '文件分类名称。',
                      'type' => 'string',
                      'example' => 'text file',
                    ),
                    'LastModifiedTime' => 
                    array (
                      'description' => '上一次修改文件的时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1536751124000
',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 12,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"InstanceId\\": 1232122,\\n      \\"CategoryName\\": \\"MP4视频文件\\",\\n      \\"RiskLevelId\\": 2,\\n      \\"RegionId\\": \\"cn-***\\",\\n      \\"FileId\\": \\"file-22***\\",\\n      \\"Size\\": 20,\\n      \\"BucketName\\": \\"oss-duplicate-***\\",\\n      \\"RiskLevelName\\": \\"中等风险等级\\",\\n      \\"Category\\": 900001,\\n      \\"Name\\": \\"obj_id\\",\\n      \\"RuleCount\\": 100,\\n      \\"SensitiveCount\\": 50,\\n      \\"Id\\": \\"17383\\",\\n      \\"RuleList\\": [\\n        {\\n          \\"Name\\": \\"身份证\\",\\n          \\"RiskLevelId\\": 2,\\n          \\"Count\\": 100\\n        }\\n      ],\\n      \\"FileCategoryCode\\": 1,\\n      \\"FileCategoryName\\": \\"text file\\",\\n      \\"LastModifiedTime\\": 1536751124000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeOssObjectsResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <PageSize>12</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Items>\\n        <InstanceId>1232122</InstanceId>\\n        <CategoryName>MP4视频文件</CategoryName>\\n        <RiskLevelId>2</RiskLevelId>\\n        <RegionId>cn-***</RegionId>\\n        <FileId>file-22***</FileId>\\n        <Size>20</Size>\\n        <BucketName>oss-duplicate-***</BucketName>\\n        <RiskLevelName>中等风险等级</RiskLevelName>\\n        <Category>900001</Category>\\n        <Name>obj_id</Name>\\n        <RuleCount>100</RuleCount>\\n        <SensitiveCount>50</SensitiveCount>\\n        <Id>17383</Id>\\n        <RuleList>\\n            <Name>身份证</Name>\\n            <RiskLevelId>2</RiskLevelId>\\n            <Count>100</Count>\\n        </RuleList>\\n    </Items>\\n</DescribeOssObjectsResponse>","errorExample":""}]',
      'title' => '查询OSS的存储对象列表',
      'summary' => '调用本接口查询连接授权的OSS的存储对象列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeOssObjectDetail' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS存储对象的唯一标识ID。

> 调用[DescribeOssObjects](~~410152~~)接口获取ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '12345213',
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
              'RequestId' => 
              array (
                'description' => ' 结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'OssObjectDetail' => 
              array (
                'description' => 'OSS存储对象的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'CategoryName' => 
                  array (
                    'description' => 'OSS存储对象类型名称。',
                    'type' => 'string',
                    'example' => 'Excel',
                  ),
                  'Name' => 
                  array (
                    'description' => 'OSS存储对象名称。',
                    'type' => 'string',
                    'example' => 'obj_id',
                  ),
                  'BucketName' => 
                  array (
                    'description' => 'OSS存储对象所属Bucket的名称。',
                    'type' => 'string',
                    'example' => 'bucke***',
                  ),
                  'RiskLevelName' => 
                  array (
                    'description' => 'OSS存储对象的风险等级名称。',
                    'type' => 'string',
                    'example' => 'S2',
                  ),
                  'RegionId' => 
                  array (
                    'description' => 'OSS存储对象所属区域ID。',
                    'type' => 'string',
                    'example' => 'cn-***',
                  ),
                  'RuleList' => 
                  array (
                    'description' => 'OSS存储对象命中的敏感数据识别规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '命中敏感数据识别规则详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RiskLevelName' => 
                        array (
                          'description' => 'OSS存储对象的风险等级名称。',
                          'type' => 'string',
                          'example' => 'S2',
                        ),
                        'CategoryName' => 
                        array (
                          'description' => 'OSS存储对象类型名称。',
                          'type' => 'string',
                          'example' => 'Excel',
                        ),
                        'RiskLevelId' => 
                        array (
                          'description' => 'OSS存储对象的风险等级ID。
- **1**：未识别到敏感数据。
- **2**：1级敏感数据。
- **3**：2级敏感数据。
- **4**：3级敏感数据。
- **5**：4级敏感数据。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'Count' => 
                        array (
                          'description' => '命中敏感数据识别规则的次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'RuleName' => 
                        array (
                          'description' => '命中敏感数据识别规则的名称。',
                          'type' => 'string',
                          'example' => 'name',
                        ),
                        'ModelTags' => 
                        array (
                          'description' => '命中识别模型的数据标签列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '命中识别模型的数据标签对象。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Id' => 
                              array (
                                'description' => '识别模型的数据标签ID。
- **101**：个人敏感信息。
- **102**：个人信息。
- **103**：重要数据。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '101',
                              ),
                              'Name' => 
                              array (
                                'description' => '识别模型的数据标签名称。
- 个人敏感信息。
- 个人信息。
- 重要数据。',
                                'type' => 'string',
                                'example' => 'personal sensitive data',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"OssObjectDetail\\": {\\n    \\"CategoryName\\": \\"Excel\\",\\n    \\"Name\\": \\"obj_id\\",\\n    \\"BucketName\\": \\"bucke***\\",\\n    \\"RiskLevelName\\": \\"S2\\",\\n    \\"RegionId\\": \\"cn-***\\",\\n    \\"RuleList\\": [\\n      {\\n        \\"RiskLevelName\\": \\"S2\\",\\n        \\"CategoryName\\": \\"Excel\\",\\n        \\"RiskLevelId\\": 2,\\n        \\"Count\\": 2,\\n        \\"RuleName\\": \\"name\\",\\n        \\"ModelTags\\": [\\n          {\\n            \\"Id\\": 101,\\n            \\"Name\\": \\"personal sensitive data\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeOssObjectDetail>\\r\\n\\t<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\r\\n\\t<OssObjectDetail>\\r\\n\\t\\t<RegionId>cn-***</RegionId>\\r\\n\\t\\t<BucketName>bucke***</BucketName>\\r\\n\\t\\t<RiskLevelName>中等风险等级</RiskLevelName>\\r\\n\\t\\t<Id>17383</Id>\\r\\n\\t\\t<RiskLevelId>2</RiskLevelId>\\r\\n\\t\\t<CategoryName>Excel文件</CategoryName>\\r\\n\\t\\t<Name>obj_id</Name>\\r\\n\\t\\t<RuleList>\\r\\n\\t\\t\\t<RuleName>***规则</RuleName>\\r\\n\\t\\t\\t<Count>10</Count>\\r\\n\\t\\t</RuleList>\\r\\n\\t</OssObjectDetail>\\r\\n</DescribeOssObjectDetail>\\t\\r\\n","errorExample":""}]',
      'title' => '查询OSS存储对象的详细信息',
      'summary' => '调用本接口查询数据安全中心连接授权的OSS的单个存储对象的详细信息。',
      'description' => '本接口一般用于对OSS存储对象详细信息的查询，便于对OSS敏感资产信息准确定位。

## 注意事项
DescribeOssObjectDetail接口已修订为DescribeOssObjectDetailV2。建议您在开发应用程序时使用较新的版本DescribeOssObjectDetailV2。

## QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeOssObjectDetailV2' => 
    array (
      'summary' => '调用本接口查询数据安全中心连接授权的OSS的单个存储对象的详细信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和返回消息的语言类型。默认值为**zh_cn**。取值

- **zh_cn**：简体中文
- **en_us**：英文（美国）',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS存储对象的唯一标识ID。

> 调用[DescribeOssObjects](~~410152~~)接口获取ID。',
            'type' => 'string',
            'required' => false,
            'example' => '12300',
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
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'OssObjectDetail' => 
              array (
                'description' => 'OSS存储对象的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'CategoryName' => 
                  array (
                    'description' => 'OSS存储对象类型名称。',
                    'type' => 'string',
                    'example' => 'Excel file',
                  ),
                  'Name' => 
                  array (
                    'description' => 'OSS存储对象名称。',
                    'type' => 'string',
                    'example' => 'obj_id',
                  ),
                  'BucketName' => 
                  array (
                    'description' => 'OSS存储对象所属Bucket的名称。',
                    'type' => 'string',
                    'example' => 'lv-demo',
                  ),
                  'RiskLevelName' => 
                  array (
                    'description' => 'OSS存储对象的风险等级名称。',
                    'type' => 'string',
                    'example' => 'S1',
                  ),
                  'RegionId' => 
                  array (
                    'description' => 'OSS存储对象所属区域ID。',
                    'type' => 'string',
                    'example' => 'cn-zhangjiakou',
                  ),
                  'RuleList' => 
                  array (
                    'description' => 'OSS存储对象命中的敏感数据识别规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '命中敏感数据识别规则详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RiskLevelName' => 
                        array (
                          'description' => 'OSS存储对象的风险等级名称。',
                          'type' => 'string',
                          'example' => 'S1',
                        ),
                        'CategoryName' => 
                        array (
                          'description' => 'OSS存储对象类型名称。',
                          'type' => 'string',
                          'example' => 'Excel',
                        ),
                        'RiskLevelId' => 
                        array (
                          'description' => 'OSS存储对象的风险等级ID。
- **1**：未识别到敏感数据。
- **2**：1级敏感数据。
- **3**：2级敏感数据。
- **4**：3级敏感数据。
- **5**：4级敏感数据。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'Count' => 
                        array (
                          'description' => '命中敏感数据识别规则的次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'RuleName' => 
                        array (
                          'description' => '命中敏感数据识别规则的名称。',
                          'type' => 'string',
                          'example' => 'name',
                        ),
                        'ModelTags' => 
                        array (
                          'description' => '数据标签列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '数据标签对象。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Id' => 
                              array (
                                'description' => '识别模型的数据标签ID。
- **101**：个人敏感信息。
- **102**：个人信息。
- **103**：重要数据。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '101',
                              ),
                              'Name' => 
                              array (
                                'description' => '识别模型的数据标签名称。
- 个人敏感信息。
- 个人信息。
- 重要数据。',
                                'type' => 'string',
                                'example' => 'personal sensitive data',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"OssObjectDetail\\": {\\n    \\"CategoryName\\": \\"Excel file\\",\\n    \\"Name\\": \\"obj_id\\",\\n    \\"BucketName\\": \\"lv-demo\\",\\n    \\"RiskLevelName\\": \\"S1\\",\\n    \\"RegionId\\": \\"cn-zhangjiakou\\",\\n    \\"RuleList\\": [\\n      {\\n        \\"RiskLevelName\\": \\"S1\\",\\n        \\"CategoryName\\": \\"Excel\\",\\n        \\"RiskLevelId\\": 2,\\n        \\"Count\\": 2,\\n        \\"RuleName\\": \\"name\\",\\n        \\"ModelTags\\": [\\n          {\\n            \\"Id\\": 101,\\n            \\"Name\\": \\"personal sensitive data\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询OSS存储对象的详细信息V2',
      'description' => '本接口一般用于对OSS存储对象详细信息的查询，便于对OSS敏感资产信息准确定位。',
    ),
    'DescribePackages' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索的关键词，支持模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产包所属产品ID。

> 如果根据数据资产包所属产品ID查询SDPP连接授权的MaxCompute的数据资产包列表，产品ID可调用**DescribeDataAssets**接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2566600',
          ),
        ),
        3 => 
        array (
          'name' => 'RiskLevelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产包的风险等级ID。
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产包命中的敏感数据识别规则ID。

> 如果根据数据资产包命中的敏感数据识别规则ID查询SDPP连接授权的MaxCompute的数据资产包列表，敏感数据识别规则ID可调用**DescribeRules**接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '266666',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产包所属资产实例ID。

> 如果根据数据资产包所属资产实例的ID查询SDPP连接授权的MaxCompute的数据资产包列表，资产实例ID可调用**DescribeInstances**接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12321',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每页显示的数据最大条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。',
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '结果中显示的当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'PageSize' => 
              array (
                'description' => '结果中每页显示的数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'Items' => 
              array (
                'description' => '数据资产包信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'description' => '数据资产包创建时间。格式：时间戳。单位：毫秒',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1536751124000',
                    ),
                    'Sensitive' => 
                    array (
                      'description' => '数据资产包中是否包含敏感数据。

- true：包含。
- false：不包含。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Owner' => 
                    array (
                      'description' => '数据资产包所属者账号。',
                      'type' => 'string',
                      'example' => 'cou-2221',
                    ),
                    'RiskLevelName' => 
                    array (
                      'description' => '资产包的风险等级名称。',
                      'type' => 'string',
                      'example' => '最高风险等级',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '数据资产包所属的资产实例ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '223453332',
                    ),
                    'TotalCount' => 
                    array (
                      'description' => '数据资产包中包含数据的总数。例如：MaxCompute的数据表总数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '321',
                    ),
                    'Name' => 
                    array (
                      'description' => '数据资产包名称。',
                      'type' => 'string',
                      'example' => 'gxdata',
                    ),
                    'SensitiveCount' => 
                    array (
                      'description' => '数据资产包中包含的敏感数据总数。例如：MaxCompute的敏感数据表总数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '123',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => '数据资产包的风险等级ID。
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4',
                    ),
                    'Id' => 
                    array (
                      'description' => '数据资产包的唯一标识ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '111111',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 12,\\n  \\"Items\\": [\\n    {\\n      \\"CreationTime\\": 1536751124000,\\n      \\"Sensitive\\": true,\\n      \\"Owner\\": \\"cou-2221\\",\\n      \\"RiskLevelName\\": \\"最高风险等级\\",\\n      \\"InstanceId\\": 223453332,\\n      \\"TotalCount\\": 321,\\n      \\"Name\\": \\"gxdata\\",\\n      \\"SensitiveCount\\": 123,\\n      \\"RiskLevelId\\": 4,\\n      \\"Id\\": 111111\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribePackages>\\r\\n\\t<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\r\\n\\t<TotalCount>4</TotalCount>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<CurrentPage>1</CurrentPage>\\r\\n\\t<Items>\\r\\n\\t\\t<Owner>dtdep-239-******</Owner>\\r\\n\\t\\t<RiskLevelId>2</RiskLevelId>\\r\\n\\t\\t<RiskLevelName>中等风险等级</RiskLevelName>\\r\\n\\t\\t<DepartName>***DemoCenter</DepartName>\\r\\n\\t\\t<Name>gxdata</Name>\\r\\n\\t\\t<CreationTime>1536751124000</CreationTime>\\r\\n\\t\\t<Sensitive>true</Sensitive>\\r\\n\\t\\t<Id>268</Id>\\r\\n\\t\\t<InstanceId>1</InstanceId>\\r\\n\\t</Items>\\r\\n</DescribePackages>\\t\\r\\n","errorExample":""}]',
      'title' => '查询数据包的信息',
      'summary' => '调用本接口查询已完成扫描授权的MaxCompute数据包的信息，例如数据包的名称、数据包所属者的账号、数据包的风险等级等。',
      'description' => '本接口一般用于MaxCompute数据包列表查询，便于搜索和敏感信息概览。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeCategoryTemplateList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '81997',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpIUNEZP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh_cn**。
取值：

- **zh_cn**：中文（简体）
- **en_us**：英文（美国）',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置每页数量。默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'UsageScenario',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口调用场景，默认为**null**。
取值：
- **null**：旧版本
- **0**：旧版本
- **1**：新版本',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回值对象。',
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '分页查询时的页码。默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '8491DBFD-48C0-4E11-B6FC-6F38921244A9',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。默认值：10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '返回的数据总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'Items' => 
              array (
                'description' => '行业模版列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '行业模板对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CurrentRiskLevel' => 
                    array (
                      'description' => '当前风险等级ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'Status' => 
                    array (
                      'description' => '行业模板状态。取值：
- **0**：关闭状态。
- **1**：启用状态，用户当前主模板。
- **2**：活跃状态，启用、活跃状态的模板均可应用于识别任务。
- **3**：通用识别模型模板状态。

> 启用和活跃状态的模板，可作为[DescribeDataObjects](~~2399253~~)的行业模板ID入参。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Type' => 
                    array (
                      'description' => '行业模板类型。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '6',
                    ),
                    'SupportEdit' => 
                    array (
                      'description' => '行业模板是否支持编辑。取值：
- **0**：不支持。
- **1**：支持。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'MaxCategoryLevel' => 
                    array (
                      'description' => '最大分类层级。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'Name' => 
                    array (
                      'description' => '行业模板名称。',
                      'type' => 'string',
                      'example' => 'built-in template',
                    ),
                    'MaxRiskLevel' => 
                    array (
                      'description' => '最大风险等级ID。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'Id' => 
                    array (
                      'description' => '行业模板的唯一标志ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'Description' => 
                    array (
                      'description' => '行业模板的描述信息。',
                      'type' => 'string',
                      'example' => 'description',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '行业模板创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582992000000',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '行业模板修改时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1545277010000',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"8491DBFD-48C0-4E11-B6FC-6F38921244A9\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 12,\\n  \\"Items\\": [\\n    {\\n      \\"CurrentRiskLevel\\": 5,\\n      \\"Status\\": 1,\\n      \\"Type\\": 6,\\n      \\"SupportEdit\\": 0,\\n      \\"MaxCategoryLevel\\": 2,\\n      \\"Name\\": \\"built-in template\\",\\n      \\"MaxRiskLevel\\": 5,\\n      \\"Id\\": 1,\\n      \\"Description\\": \\"description\\",\\n      \\"GmtCreate\\": 1582992000000,\\n      \\"GmtModified\\": 1545277010000\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询行业模板列表',
      'summary' => '调用本接口查询行业模板列表。',
    ),
    'DescribeCategoryTemplateRuleList' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '81998',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpIUNEZP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认值为**zh_cn**。取值：
- **zh_cn**：中文（简体）。
- **en_us**：英文（美国）。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置每页显示模板规则的条数，默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置当前页的页码，默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板规则的开启状态，默认值为**null**。取值：
- **0**：表示未开启状态。
- **1**：表示开启状态。
- **null**：表示全部状态，包括：开启和未开启状态。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RiskLevelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板规则的风险等级。取值范围为**1**~**11**，默认值为**null**。取值：
- **1**：表示无风险。
- **2**：表示S1级风险等级。
- **3**：表示S2级风险等级。
- **4**：表示S3级风险等级。
- **5**：表示S4级风险等级。
- **6**：表示S5级风险等级。
- **7**：表示S6级风险等级。
- **8**：表示S7级风险等级。
- **9**：表示S8级风险等级。
- **10**：表示S9级风险等级。
- **11**：表示S10级风险等级。
- **null**：表示全部风险等级，包括：无风险、S1、S2、S3、S4、S5、S6、S7、S8、S9和S10级风险等级。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '136082B3-B21F-5E9D-B68E-991FFD205D24',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示模板规则的条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '当前模板的规则总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Items' => 
              array (
                'description' => '模板规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '模板规则的开启状态。取值：
- **0**：表示未开启状态。
- **1**：表示开启状态。
- **null**：表示全部状态，包括：开启和未开启状态。

',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'IdentificationScope' => 
                    array (
                      'description' => '模板规则用于扫描数据的范围。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个扫描数据的范围，包含以下字段：

- **Asset**：String类型，表示资产类型，包括：RDS、DRDS、PolarDB、OTS、ADB、OceanBase。
- **Content**：String类型，表示扫描资产的范围。JSON数组中的每个元素是一个扫描数据的范围，包含以下字段：
    
    - **Range**：String类型，表示匹配范围，包括：Instance、database、table、column、project（只适用于MaxCompute资产类型）、bucket（只适用于OSS资产类型）、object（只适用于OSS资产类型）。
    - **Operator**：String类型，表示匹配条件，包括：equals（表示等于）、 regex（表示正则匹配）、prefix（表示前缀匹配）、suffix（表示后缀匹配）。

    - **Value**：String类型，表示匹配内容。

',
                      'type' => 'string',
                      'example' => '[{"Asset":"RDS","Content":[{"Range":"database","Operator":"regex","Value":"register"}]},{"Asset":"RDS","Content":[{"Range":"table","Operator":"regex","Value":"register"}]},{"Asset":"RDS","Content":[{"Range":"column","Operator":"regex","Value":"register"}]},{"Asset":"ODPS","Content":[{"Range":"project","Operator":"regex","Value":"register"}]},{"Asset":"ODPS","Content":[{"Range":"table","Operator":"regex","Value":"register"}]},{"Asset":"ODPS","Content":[{"Range":"column","Operator":"regex","Value":"register"}]}]',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => '模板规则的风险等级。取值范围为**1**~**11**。取值：
- **1**：表示无风险。
- **2**：表示S1级风险等级。
- **3**：表示S2级风险等级。
- **4**：表示S3级风险等级。
- **5**：表示S4级风险等级。
- **6**：表示S5级风险等级。
- **7**：表示S6级风险等级。
- **8**：表示S7级风险等级。
- **9**：表示S8级风险等级。
- **10**：表示S9级风险等级。
- **11**：表示S10级风险等级。
- **null**：表示全部风险等级，包括：无风险、S1、S2、S3、S4、S5、S6、S7、S8、S9和S10级风险等级。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'Description' => 
                    array (
                      'description' => '规则描述。',
                      'type' => 'string',
                      'example' => '用于识别身份证号的模板规则',
                    ),
                    'IdentificationRuleIds' => 
                    array (
                      'description' => '关联的原子模型ID列表，通过半角逗号（,）分隔。',
                      'type' => 'string',
                      'example' => '1001,1002',
                    ),
                    'Name' => 
                    array (
                      'description' => '模板规则名字。',
                      'type' => 'string',
                      'example' => '身份证号',
                    ),
                    'Id' => 
                    array (
                      'description' => '该模板规则的唯一标识ID。',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"136082B3-B21F-5E9D-B68E-991FFD205D24\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 10,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"IdentificationScope\\": \\"[{\\\\\\"Asset\\\\\\":\\\\\\"RDS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"database\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]},{\\\\\\"Asset\\\\\\":\\\\\\"RDS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"table\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]},{\\\\\\"Asset\\\\\\":\\\\\\"RDS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"column\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]},{\\\\\\"Asset\\\\\\":\\\\\\"ODPS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"project\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]},{\\\\\\"Asset\\\\\\":\\\\\\"ODPS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"table\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]},{\\\\\\"Asset\\\\\\":\\\\\\"ODPS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"column\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]}]\\",\\n      \\"RiskLevelId\\": 2,\\n      \\"Description\\": \\"用于识别身份证号的模板规则\\",\\n      \\"IdentificationRuleIds\\": \\"1001,1002\\",\\n      \\"Name\\": \\"身份证号\\",\\n      \\"Id\\": 100\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeCategoryTemplateRuleListResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>136082B3-B21F-5E9D-B68E-991FFD205D24</RequestId>\\n    <PageSize>10</PageSize>\\n    <TotalCount>10</TotalCount>\\n    <Items>\\n        <Status>1</Status>\\n        <IdentificationScope>[{\\"Asset\\":\\"RDS\\",\\"Content\\":[{\\"Range\\":\\"database\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]},{\\"Asset\\":\\"RDS\\",\\"Content\\":[{\\"Range\\":\\"table\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]},{\\"Asset\\":\\"RDS\\",\\"Content\\":[{\\"Range\\":\\"column\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]},{\\"Asset\\":\\"ODPS\\",\\"Content\\":[{\\"Range\\":\\"project\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]},{\\"Asset\\":\\"ODPS\\",\\"Content\\":[{\\"Range\\":\\"table\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]},{\\"Asset\\":\\"ODPS\\",\\"Content\\":[{\\"Range\\":\\"column\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]}]</IdentificationScope>\\n        <RiskLevelId>2</RiskLevelId>\\n        <Description>用于识别身份证号的模板规则</Description>\\n        <IdentificationRuleIds>1001,1002</IdentificationRuleIds>\\n        <Name>身份证号</Name>\\n        <Id>100</Id>\\n    </Items>\\n</DescribeCategoryTemplateRuleListResponse>","errorExample":""}]',
      'title' => '查询分类分级模板的规则列表',
      'summary' => '分页获取分类分级模板的规则列表。',
      'description' => '本接口一般用于获取当前使用模板的规则列表，便于了解当前使用模板的规则详情。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
    ),
    'DescribeTemplateAllRules' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'abilityTreeCode' => '82084',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpIUNEZP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业模版ID。

>如不填本参数，默认返回主用模板的模型列表。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-4******',
              ),
              'RuleList' => 
              array (
                'description' => '模型对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '模型对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '模型名字。',
                      'type' => 'string',
                      'example' => 'Model Name',
                    ),
                    'Id' => 
                    array (
                      'description' => '模型唯一ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '376',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-4******\\",\\n  \\"RuleList\\": [\\n    {\\n      \\"Name\\": \\"Model Name\\",\\n      \\"Id\\": 376\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询行业模板所有模型列表',
      'summary' => '调用本接口查询行业模板所有模型列表。',
    ),
    'DescribeDocTypes' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
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
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-4******',
              ),
              'DocTypeList' => 
              array (
                'description' => '结果中的OSS文件类型列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件类型对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '文件类型编码。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100001',
                    ),
                    'Name' => 
                    array (
                      'description' => '文件类型名称。',
                      'type' => 'string',
                      'example' => 'C/C++ Source Code',
                    ),
                    'Id' => 
                    array (
                      'description' => '文件类型的唯一ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-4******\\",\\n  \\"DocTypeList\\": [\\n    {\\n      \\"Code\\": 100001,\\n      \\"Name\\": \\"C/C++ Source Code\\",\\n      \\"Id\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询支持识别的OSS文件类型列表',
      'summary' => '调用本接口查询支持识别的OSS文件类型列表。',
    ),
    'DescribeDataObjects' => 
    array (
      'summary' => '调用本接口查询数据表、文件的数据识别结果。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'abilityTreeCode' => '149455',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2VFD4T',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '建议填写，待查询的产品ID列表，多个用逗号分隔。取值：
- **1**：MaxCompute
- **2**：OSS
- **3**：ADB-MYSQL
- **4**：TableStore
- **5**：RDS
- **6**：SELF_DB
- **7**：PolarDB-X
- **8**：PolarDB
- **9**：ADB-PG
- **10**：OceanBase
- **11**：MongoDB
- **25**：Redis

> OSS与其他产品互斥，即如果待查询中有OSS，则不能有其他产品列表；默认查询的为非OSS产品。',
            'type' => 'string',
            'required' => false,
            'example' => '1,5',
          ),
        ),
        4 => 
        array (
          'name' => 'ParentCategoryIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询模板的父分类列表，多个父分类ID用逗号分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '234,236,238',
          ),
        ),
        5 => 
        array (
          'name' => 'QueryName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的数据对象关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 't_sddp_selfmysql_pers0',
          ),
        ),
        6 => 
        array (
          'name' => 'ServiceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产所在的地域。取值：
- **cn-beijing**：华北2（北京）。
- **cn-zhangjiakou**：华北3（张家口）。
- **cn-huhehaote**：华北5（呼和浩特）。
- **cn-hangzhou**：华东1（杭州）。
- **cn-shanghai**：华东2（上海）。
- **cn-shenzhen**：华南1（深圳）。
- **cn-hongkong**：中国香港。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        7 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业模版ID。

> 您可以通过调用[DescribeCategoryTemplateList](~~2399296~~)获取行业模板标识ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'DomainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产所属的数据域ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        9 => 
        array (
          'name' => 'ModelTagIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的数据标签，多个用逗号分隔。取值：
- **101**：个人敏感信息。
- **102**：个人信息。
- **107**：通用信息。',
            'type' => 'string',
            'required' => false,
            'example' => '101,102',
          ),
        ),
        10 => 
        array (
          'name' => 'RiskLevels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的数据资产的风险等级，存在多个时使用英文逗号（,）隔开。
- **2**：S1，弱风险等级。
- **3**：S2，中等风险等级。
- **4**：S3，高风险等级。
- **5**：S4，最高风险等级。',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        11 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资产实例ID关键字。',
            'type' => 'string',
            'required' => false,
            'example' => '8vb54hn2g9j191ddz',
          ),
        ),
        12 => 
        array (
          'name' => 'ModelIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业模板的模型ID，多个ID通过逗号分隔。
> 您可以通过调用[DescribeTemplateAllRules](~~2536491~~)获取行业模板模型标识ID。',
            'type' => 'string',
            'required' => false,
            'example' => '101',
          ),
        ),
        13 => 
        array (
          'name' => 'FileType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持识别的OSS文件类型。

> 您可以通过调用[DescribeDocTypes](~~2536492~~)获取支持识别的OSS文件类型，取返回值中的Code字段值，本参数仅对OSS类型的资产查询有效。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100001',
          ),
        ),
        14 => 
        array (
          'name' => 'FileCategoryCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件分类编码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        15 => 
        array (
          'name' => 'MemberAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '**********8103',
          ),
        ),
        16 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'CurrentPage' => 
              array (
                'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'E6F6460E-4330-549A-BD89-C183FB17571E',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '21',
              ),
              'Items' => 
              array (
                'description' => '数据对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据对象列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '数据对象的名称。',
                      'type' => 'string',
                      'example' => 't_sddp_selfmysql_pers0',
                    ),
                    'Id' => 
                    array (
                      'description' => '数据对象的唯一标识ID。',
                      'type' => 'string',
                      'example' => '20000',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '行业模版ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'ProductId' => 
                    array (
                      'description' => '数据对象所属的产品名称对应的ID。取值：
- **1**：MaxCompute
- **2**：OSS
- **3**：ADB-MYSQL
- **4**：TableStore
- **5**：RDS
- **6**：SELF_DB
- **7**：PolarDB-X
- **8**：PolarDB
- **9**：ADB-PG
- **10**：OceanBase
- **11**：MongoDB
- **25**：Redis',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5',
                    ),
                    'InstanceDescription' => 
                    array (
                      'description' => '数据对象的实例描述。',
                      'type' => 'string',
                      'example' => 'instance description',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '数据对象所属的产品名称。取值：
- **MaxCompute**
- **OSS**
- **ADB-MYSQL**
- **TableStore**
- **RDS**
- **SELF_DB**
- **PolarDB-X**
- **PolarDB**
- **ADB-PG**
- **OceanBase**
- **MongoDB**
- **Redis**',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '数据资产实例ID。',
                      'type' => 'string',
                      'example' => 'rm-12*****',
                    ),
                    'LastScanTime' => 
                    array (
                      'description' => '最新扫描的时间戳，单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1687676649830',
                    ),
                    'SensitiveCount' => 
                    array (
                      'description' => '敏感数据数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ObjectType' => 
                    array (
                      'description' => '数据对象类型。',
                      'type' => 'string',
                      'example' => 'text type',
                    ),
                    'Path' => 
                    array (
                      'description' => '数据对象的路径。',
                      'type' => 'string',
                      'example' => 'rm-12**.db_***',
                    ),
                    'RegionName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'Categories' => 
                    array (
                      'description' => '敏感数据所数据的行业分类列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '敏感数据所数据的行业分类列表，多个分类通过逗号分隔。',
                        'type' => 'string',
                        'example' => 'general sensitive information',
                      ),
                    ),
                    'ModelTags' => 
                    array (
                      'description' => '数据标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据标签列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Id' => 
                          array (
                            'description' => '数据标签ID。取值：
- **101**：个人敏感信息。
- **102**：个人信息。
- **107**：通用信息。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '101',
                          ),
                          'Name' => 
                          array (
                            'description' => '数据标签名称。取值：
- **个人敏感信息。**
- **个人信息。**
- **通用信息。**',
                            'type' => 'string',
                            'example' => '个人敏感信息',
                          ),
                        ),
                      ),
                    ),
                    'RuleList' => 
                    array (
                      'description' => '命中的识别模型列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '命中的识别模型列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'RuleId' => 
                          array (
                            'description' => '识别模型ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1080',
                          ),
                          'RuleName' => 
                          array (
                            'description' => '识别模型名称。',
                            'type' => 'string',
                            'example' => 'name',
                          ),
                          'RiskLevelId' => 
                          array (
                            'description' => '敏感数据识别规则的风险等级ID。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '2',
                          ),
                          'RiskLevelName' => 
                          array (
                            'description' => '数据资产表的风险等级名称。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                            'type' => 'string',
                            'example' => 'S1',
                          ),
                          'RuleCount' => 
                          array (
                            'description' => '命中识别模型数量。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '590',
                          ),
                        ),
                      ),
                    ),
                    'ObjectFileCategory' => 
                    array (
                      'description' => '文件分类名称。',
                      'type' => 'string',
                      'example' => 'text file',
                    ),
                    'MemberAccount' => 
                    array (
                      'description' => '成员账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '**********8103',
                    ),
                    'LastModifiedTime' => 
                    array (
                      'description' => '文件最新更新时间，单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1687676649830',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"E6F6460E-4330-549A-BD89-C183FB17571E\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 21,\\n  \\"Items\\": [\\n    {\\n      \\"Name\\": \\"t_sddp_selfmysql_pers0\\",\\n      \\"Id\\": \\"20000\\",\\n      \\"TemplateId\\": 1,\\n      \\"ProductId\\": 5,\\n      \\"InstanceDescription\\": \\"instance description\\",\\n      \\"ProductCode\\": \\"RDS\\",\\n      \\"InstanceId\\": \\"rm-12*****\\",\\n      \\"LastScanTime\\": 1687676649830,\\n      \\"SensitiveCount\\": 1,\\n      \\"ObjectType\\": \\"text type\\",\\n      \\"Path\\": \\"rm-12**.db_***\\",\\n      \\"RegionName\\": \\"cn-hangzhou\\",\\n      \\"Categories\\": [\\n        \\"general sensitive information\\"\\n      ],\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"个人敏感信息\\"\\n        }\\n      ],\\n      \\"RuleList\\": [\\n        {\\n          \\"RuleId\\": 1080,\\n          \\"RuleName\\": \\"name\\",\\n          \\"RiskLevelId\\": 2,\\n          \\"RiskLevelName\\": \\"S1\\",\\n          \\"RuleCount\\": 590\\n        }\\n      ],\\n      \\"ObjectFileCategory\\": \\"text file\\",\\n      \\"MemberAccount\\": 0,\\n      \\"LastModifiedTime\\": 1687676649830\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询数据对象列表',
    ),
    'DescribeDataObjectColumnDetail' => 
    array (
      'summary' => '调用本接口查询数据表的列识别结果。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'abilityTreeCode' => '149483',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2VFD4T',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据对象所属的产品名称对应的ID。取值：
- **1**：MaxCompute
- **2**：OSS
- **3**：ADB-MYSQL
- **4**：TableStore
- **5**：RDS
- **6**：SELF_DB
- **7**：PolarDB-X
- **8**：PolarDB
- **9**：ADB-PG
- **10**：OceanBase
- **11**：MongoDB
- **25**：Redis',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
          ),
        ),
        4 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置要查询的数据对象的唯一标识ID。

> 您可以通过调用[DescribeDataObjects](~~2399253~~)获取标识ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '318248',
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业模版ID。
> 您可以通过调用[DescribeDataObjects](~~2399253~~)获取行业模板标识ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'CurrentPage' => 
              array (
                'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '8C8036CC-961D-514E-88E8-3088B5A50CA9',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '61',
              ),
              'Items' => 
              array (
                'description' => '数据表的列的识别结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据表的列的识别结果对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ColumnName' => 
                    array (
                      'description' => '列名称。',
                      'type' => 'string',
                      'example' => 'hide14',
                    ),
                    'DataType' => 
                    array (
                      'description' => '列的数据类型。',
                      'type' => 'string',
                      'example' => 'varchar',
                    ),
                    'ColumnComment' => 
                    array (
                      'description' => '列的备注。',
                      'type' => 'string',
                      'example' => 'column comment',
                    ),
                    'PrimaryKey' => 
                    array (
                      'description' => '列是否为主键，取值说明：

- **true**：主键。
- **false**：非主键。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Id' => 
                    array (
                      'description' => '列对象的唯一标识ID。',
                      'type' => 'string',
                      'example' => '1509415150052786176',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => '风险等级ID。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'RiskLevelName' => 
                    array (
                      'description' => '风险等级名称。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                      'type' => 'string',
                      'example' => 'S1',
                    ),
                    'RuleId' => 
                    array (
                      'description' => '命中的识别模型ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1004',
                    ),
                    'RuleName' => 
                    array (
                      'description' => '命中的识别模型名称。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'Categories' => 
                    array (
                      'description' => '敏感数据所数据的行业分类列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '敏感数据所数据的行业分类，多个通过逗号分隔。',
                        'type' => 'string',
                        'example' => 'general sensitive information',
                      ),
                    ),
                    'ModelTags' => 
                    array (
                      'description' => '数据标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据标签对象。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Id' => 
                          array (
                            'description' => '数据标签名称对应的ID。取值：
- **101**：个人敏感信息
- **102**：个人信息
- **107**：通用信息',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '101',
                          ),
                          'Name' => 
                          array (
                            'description' => '数据标签名称。取值：
- **101**：个人敏感信息
- **102**：个人信息
- **107**：通用信息',
                            'type' => 'string',
                            'example' => 'personal sensitive information',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"8C8036CC-961D-514E-88E8-3088B5A50CA9\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 61,\\n  \\"Items\\": [\\n    {\\n      \\"ColumnName\\": \\"hide14\\",\\n      \\"DataType\\": \\"varchar\\",\\n      \\"ColumnComment\\": \\"column comment\\",\\n      \\"PrimaryKey\\": true,\\n      \\"Id\\": \\"1509415150052786176\\",\\n      \\"RiskLevelId\\": 2,\\n      \\"RiskLevelName\\": \\"S1\\",\\n      \\"RuleId\\": 1004,\\n      \\"RuleName\\": \\"name\\",\\n      \\"Categories\\": [\\n        \\"general sensitive information\\"\\n      ],\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"personal sensitive information\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询数据对象列详情',
      'description' => '## 注意事项
DescribeDataObjectColumnDetail接口已修订为DescribeDataObjectColumnDetailV2。建议您在开发应用程序时使用较新的版本DescribeDataObjectColumnDetailV2。',
    ),
    'DescribeDataObjectColumnDetailV2' => 
    array (
      'summary' => '调用本接口查询数据表的列识别结果。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'abilityTreeCode' => '186089',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp2VFD4T',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页的页码。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据对象所属的产品名称对应的ID。取值：
- **1**：MaxCompute
- **2**：OSS
- **3**：ADB-MYSQL
- **4**：TableStore
- **5**：RDS
- **6**：SELF_DB
- **7**：PolarDB-X
- **8**：PolarDB
- **9**：ADB-PG
- **10**：OceanBase
- **11**：MongoDB
- **25**：Redis',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
          ),
        ),
        4 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置要查询的数据对象的唯一标识ID。

> 您可以通过调用[DescribeDataObjects](~~2399253~~)获取标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => '13456723343',
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业模版ID。
> 您可以通过调用[DescribeDataObjects](~~2399253~~)获取行业模板标识ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'CurrentPage' => 
              array (
                'description' => '分页查询时的页码。默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '231',
              ),
              'Items' => 
              array (
                'description' => '数据表的列的识别结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据表的列的识别结果对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ColumnName' => 
                    array (
                      'description' => '列名称。',
                      'type' => 'string',
                      'example' => 'hide14',
                    ),
                    'DataType' => 
                    array (
                      'description' => '列的数据类型。',
                      'type' => 'string',
                      'example' => 'varchar',
                    ),
                    'ColumnComment' => 
                    array (
                      'description' => '列的备注。',
                      'type' => 'string',
                      'example' => 'column comment',
                    ),
                    'PrimaryKey' => 
                    array (
                      'description' => '列是否为主键，取值说明：

- **true**：主键。
- **false**：非主键。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Id' => 
                    array (
                      'description' => '数据对象的唯一标识ID。',
                      'type' => 'string',
                      'example' => '1392973973691383808',
                    ),
                    'RiskLevelId' => 
                    array (
                      'description' => '风险等级ID。取值：
- **1**：N/A：未识别到敏感数据。
- **2**：S1：1级敏感数据。
- **3**：S2：2级敏感数据。
- **4**：S3：3级敏感数据。
- **5**：S4：4级敏感数据。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'RiskLevelName' => 
                    array (
                      'description' => '风险等级名称。取值：
- **N/A**：未识别到敏感数据。
- **S1**：1级敏感数据。
- **S2**：2级敏感数据。
- **S3**：3级敏感数据。
- **S4**：4级敏感数据。',
                      'type' => 'string',
                      'example' => 'S1',
                    ),
                    'RuleId' => 
                    array (
                      'description' => '命中的识别模型ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '51',
                    ),
                    'RuleName' => 
                    array (
                      'description' => '命中的识别模型名称。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'Categories' => 
                    array (
                      'description' => '敏感数据所数据的行业分类列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '敏感数据所数据的行业分类，多个通过逗号分隔。',
                        'type' => 'string',
                        'example' => 'general sensitive information',
                      ),
                    ),
                    'ModelTags' => 
                    array (
                      'description' => '数据标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据标签对象。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Id' => 
                          array (
                            'description' => '数据标签名称对应的ID。取值：
- **101**：个人敏感信息
- **102**：个人信息
- **107**：通用信息',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '101',
                          ),
                          'Name' => 
                          array (
                            'description' => '数据标签名称。取值：
- 个人敏感信息
- 个人信息
- 通用信息',
                            'type' => 'string',
                            'example' => 'personal sensitive information',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 231,\\n  \\"Items\\": [\\n    {\\n      \\"ColumnName\\": \\"hide14\\",\\n      \\"DataType\\": \\"varchar\\",\\n      \\"ColumnComment\\": \\"column comment\\",\\n      \\"PrimaryKey\\": true,\\n      \\"Id\\": \\"1392973973691383808\\",\\n      \\"RiskLevelId\\": 2,\\n      \\"RiskLevelName\\": \\"S1\\",\\n      \\"RuleId\\": 51,\\n      \\"RuleName\\": \\"name\\",\\n      \\"Categories\\": [\\n        \\"general sensitive information\\"\\n      ],\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"personal sensitive information\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询数据对象列详情V2',
    ),
    'CreateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '81959',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpCHNP1R',
          1 => 'FEATUREsddpR2D59W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Code',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常告警通用配置模块中配置项的编码。取值：

- **access_failed_cnt**：非授权资源多次访问尝试的阈值。
- **access_permission_exprie_max_days**：权限闲置期间超过阈值。
- **log_datasize_avg_days**：日志未有效输出（当日某类日志输出量低于前10天平均值的阈值）。',
            'type' => 'string',
            'required' => false,
            'example' => 'access_failed_cnt',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常告警通用配置项的描述。',
            'type' => 'string',
            'required' => false,
            'example' => '非授权资源多次访问尝试：目前的阈值定义为10次',
          ),
        ),
        2 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定异常告警通用配置项的值。Code取值不同此参数的具体含义不同：
- 当Code取值为**access_failed_cnt**：Value表示非授权资源多次访问尝试的阈值。
- 当Code取值为**access_permission_exprie_max_days**：Value表示权限闲置期间超过阈值。
- 当Code取值为**log_datasize_avg_days**：Value表示当日某类日志输出量低于前10天平均值的阈值。',
            'type' => 'string',
            'required' => false,
            'example' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'string',
            'required' => false,
            'example' => '106.11.XX.XX',
          ),
        ),
        5 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
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
              'Id' => 
              array (
                'description' => '异常告警配置ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12300',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1EBF271',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 12300,\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1EBF271\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateConfigResponse>\\r\\n    <RequestId>208B016D-4CB9-4A85-96A5-0B8ED1EBF271</RequestId>\\r\\n</CreateConfigResponse>","errorExample":""}]',
      'title' => '修改异常告警通用配置',
      'summary' => '调用CreateConfig接口修改异常告警通用配置模块的参数。',
      'description' => '本接口一般用于根据异常告警配置项的编码，创建、恢复用户配置，便于管理异常告警配置项用户配置。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeConfigs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
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
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'ConfigList' => 
              array (
                'description' => '异常告警通用配置项列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '异常告警通用配置模块中配置项的编码。',
                      'type' => 'string',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Value' => 
                    array (
                      'description' => '异常告警通用配置项的参数值。',
                      'type' => 'string',
                      'format' => 'int64',
                      'example' => '30',
                    ),
                    'DefaultValue' => 
                    array (
                      'description' => '异常告警通用配置项参数的默认值描述。',
                      'type' => 'string',
                      'example' => '当日某类日志输出量低于前10天平均值的30%',
                    ),
                    'Description' => 
                    array (
                      'description' => '异常告警通用配置项的描述。',
                      'type' => 'string',
                      'example' => '日志未有效输出',
                    ),
                    'Id' => 
                    array (
                      'description' => '异常告警通用配置项的唯一标识ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2133',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"ConfigList\\": [\\n    {\\n      \\"Code\\": 1,\\n      \\"Value\\": 30,\\n      \\"DefaultValue\\": \\"当日某类日志输出量低于前10天平均值的30%\\",\\n      \\"Description\\": \\"日志未有效输出\\",\\n      \\"Id\\": 2133\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeConfigs>\\n<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n<ConfigList>\\n    <Code>2001</Code>\\n    <DefaultValue>目前的阈值定义为10次</DefaultValue>\\n    <Description>当日某类日志输出量低于前10天平均值的30%</Description>\\n    <Id>2133</Id>\\n    <Value>10</Value>\\n</ConfigList>\\n</DescribeConfigs>","errorExample":""}]',
      'title' => '查询异常告警中配置项的列表',
      'summary' => '查询异常告警通用配置模块中配置项的列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyReportTaskStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '118114',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp6DN9CR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReportTaskStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置报表任务的状态。取值：
- **0**：关闭
- **1**：开启  

><notice> 本参数为必填参数。
></notice>
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文（简体）
- **en_us**：英文（美国）',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
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
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1EBF271',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1EBF271\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyReportTaskStatusResponse>\\n    <RequestId>208B016D-4CB9-4A85-96A5-0B8ED1EBF271</RequestId>\\n</ModifyReportTaskStatusResponse>","errorExample":""}]',
      'title' => '修改报表任务状态',
      'summary' => '调用ModifyReportTaskStatus开启或关闭报表任务。',
      'description' => '本接口一般用于开启或关闭报表任务。开通数据安全中心DSC（Data Security Center）后，报表任务默认为开启状态。关闭报表任务后，报表中心、云原生数据审计概览和数据安全实验室将不会产生新的统计数据，已有的数据不受影响。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeUserStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '82092',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddp4GFW27',
          1 => 'FEATUREsddpKPIKAW',
          2 => 'FEATUREsddp7JHQOS',
          3 => 'FEATUREsddpXD0XSH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh_cn**：默认值，中文（简体）。
- **en_us**：英文（美国）。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'UserStatus' => 
              array (
                'description' => '返回当前登录账号详情列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'UseOssSize' => 
                  array (
                    'description' => '已使用的OSS存储量。单位：字节。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '234',
                  ),
                  'UseInstanceNum' => 
                  array (
                    'description' => '已使用的实例数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '125',
                  ),
                  'InstanceNum' => 
                  array (
                    'description' => '当前登录账号包含的实例数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '32',
                  ),
                  'ChargeType' => 
                  array (
                    'description' => '当前登录账号购买DSC服务的付费类型。取值：
- **PREPAY**：预付费。
- **POSTPAY**：后付费。',
                    'type' => 'string',
                    'example' => 'PREPAY',
                  ),
                  'Authed' => 
                  array (
                    'description' => '当前登录账号是否已授权DSC RAM的权限。取值：
- **true**：已授权。
- **false**：未授权。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'LabStatus' => 
                  array (
                    'description' => '是否开通资产实验室功能。取值：
- **1**：已开通。
- **0**：未开通。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'RemainDays' => 
                  array (
                    'description' => '当前登录账号中资产的保护期剩余天数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '131',
                  ),
                  'Trail' => 
                  array (
                    'description' => '当前登录账号是否试用DSC服务。取值：
- **true**：试用。
- **false**：非试用。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '主账号购买的数据安全中心产品实例ID。',
                    'type' => 'string',
                    'example' => 'sddp-cn-****',
                  ),
                  'AccessKeyId' => 
                  array (
                    'description' => '用户授权的AccessKey ID。',
                    'type' => 'string',
                    'example' => 'LTAI4G67HRBzNRmMhfyv****',
                  ),
                  'Purchased' => 
                  array (
                    'description' => '是否购买DSC服务。取值：

- **true**：已购买。
- **false**：未购买。

',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'DataManagerRole' => 
                  array (
                    'description' => '当前账号拥有的权限。取值：
- **0**: 拥有数据安全中心的管理权限或只读权限。
- **1**: 拥有数据域管理权限。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'ReleaseDays' => 
                  array (
                    'description' => '过期到释放的时间。单位：天。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '15',
                  ),
                  'AuditClosable' => 
                  array (
                    'description' => '是否可以关闭sql洞察。取值：
- **true**：可以。
- **false**：不可以。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'AuditReleasable' => 
                  array (
                    'description' => '是否可以释放sql洞察。
- **true**：可以。
- **false**：不可以。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ReleaseTime' => 
                  array (
                    'description' => '释放时间。单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '15000',
                  ),
                  'InstanceTotalCount' => 
                  array (
                    'description' => '实例总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'OssTotalSize' => 
                  array (
                    'description' => 'OSS总存储量。单位：字节。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2048',
                  ),
                  'UseAgentAudit' => 
                  array (
                    'description' => '是否曾经使用过Agent审计功能。取值：
- **1**：使用过。
- **0**：未使用过。',
                    'type' => 'boolean',
                    'example' => '1',
                  ),
                  'ProtectionDays' => 
                  array (
                    'description' => '累计保护用户资产的天数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '22',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"UserStatus\\": {\\n    \\"UseOssSize\\": 234,\\n    \\"UseInstanceNum\\": 125,\\n    \\"InstanceNum\\": 32,\\n    \\"ChargeType\\": \\"PREPAY\\",\\n    \\"Authed\\": true,\\n    \\"LabStatus\\": 1,\\n    \\"RemainDays\\": 131,\\n    \\"Trail\\": true,\\n    \\"InstanceId\\": \\"sddp-cn-****\\",\\n    \\"AccessKeyId\\": \\"LTAI4G67HRBzNRmMhfyv****\\",\\n    \\"Purchased\\": true,\\n    \\"DataManagerRole\\": 1,\\n    \\"ReleaseDays\\": 15,\\n    \\"AuditClosable\\": true,\\n    \\"AuditReleasable\\": true,\\n    \\"ReleaseTime\\": 15000,\\n    \\"InstanceTotalCount\\": 10,\\n    \\"OssTotalSize\\": 2048,\\n    \\"UseAgentAudit\\": true,\\n    \\"ProtectionDays\\": 22\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeUserStatusResponse>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <UserStatus>\\n        <UseOssSize>234</UseOssSize>\\n        <UseInstanceNum>125</UseInstanceNum>\\n        <InstanceNum>32</InstanceNum>\\n        <ChargeType>PREPAY</ChargeType>\\n        <Authed>true</Authed>\\n        <LabStatus>1</LabStatus>\\n        <RemainDays>131</RemainDays>\\n        <Trail>true</Trail>\\n        <InstanceId>ins-****</InstanceId>\\n        <AccessKeyId>LTAI4G67HRBzNRmMhfyv****</AccessKeyId>\\n        <Purchased>true</Purchased>\\n    </UserStatus>\\n</DescribeUserStatusResponse>","errorExample":""}]',
      'title' => '查询用户账号状态',
      'summary' => '调用DescribeUserStatus查询用户账号状态。',
      'description' => '通过调用本接口，您可以获取当前登录账号的相关信息，便于您全面了解使用DSC的使用效果。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableUserConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '82095',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpCHNP1R',
          1 => 'FEATUREsddpR2D59W',
          2 => 'FEATUREsddpGH0F1O',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh_cn**：默认值，中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Code',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常告警通用配置模块中配置项的编码。可通过[DescribeConfigs](~~DescribeConfigs~~)获取配置项的Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'access_failed_cnt',
          ),
        ),
        2 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => 'AC314611-D907-5EBF-B6D8-70425E5A8643',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AC314611-D907-5EBF-B6D8-70425E5A8643\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableUserConfigResponse>\\r\\n<RequestId>AC314611-D907-5EBF-B6D8-70425E5A8643</RequestId>\\r\\n</DisableUserConfigResponse>","errorExample":""}]',
      'title' => '停用用户配置',
      'summary' => '调用DisableUserConfig接口停用用户配置。停用用户配置后，可以通过调用CreateConfig接口输入相同的请求参数Code，恢复该配置项编码的异常告警通用配置。',
      'description' => '本接口一般用于根据异常告警通用配置模块中配置项的编码，停用用户配置，便于用户及时修改用户配置的生效状态。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyEventTypeStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '82115',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpCHNP1R',
          1 => 'FEATUREsddpGH0F1O',
          2 => 'FEATUREsddpR2D59W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。-**zh**：中文-**en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'SubTypeIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子类型异常事件唯一标识ID，多个ID以半角逗号隔开。

> 开启SDDP检测子类型异常事件的功能，需要提供子类型异常事件唯一标识ID，该ID可调用**DescribeEventTypes**接口获取。


',
            'type' => 'string',
            'required' => false,
            'example' => '020008',
          ),
        ),
        2 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID。',
                'type' => 'string',
                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1E*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1E*****\\"\\n}","type":"json"}]',
      'title' => '修改检测子类型异常事件状态',
      'summary' => '调用本接口开启检测子类型异常事件的功能。',
    ),
    'ModifyEventStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件的唯一标识ID。

> 处理异常事件，需要提供异常事件的唯一标识ID，该ID可调用**DescribeEvents**接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '12345',
          ),
        ),
        2 => 
        array (
          'name' => 'Backed',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对异常事件进行检测强化。强化对异常事件检测的能力，可增加检测的准确性，并提升异常事件告警率。

- **true**：是。
- **false**：否.',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'DealReason',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件处理原因记录。',
            'type' => 'string',
            'required' => false,
            'example' => '确定为违例',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对异常事件的处理操作。

- **1**：误报。
- **2**：确认异常并已处理。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '8491DBFD-48C0-4E11-B6FC-6F38921244A9',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8491DBFD-48C0-4E11-B6FC-6F38921244A9\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyEventStatus>\\r\\n\\t<RequestId>8491DBFD-48C0-4E11-B6FC-6F38921244A9</RequestId>\\r\\n</ModifyEventStatus>\\t\\r\\n","errorExample":""}]',
      'title' => '修改异常事件状态',
      'summary' => '调用本接口处理异常事件。',
      'description' => '本接口一般用于数据泄露风险告警处理，便于用户及时保护数据资产的安全。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeEvents' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件的唯一标识id。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '789026',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件的操作人账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1978132506596***',
          ),
        ),
        3 => 
        array (
          'name' => 'DealUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件的处理人账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'yundun-***',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件的处理状态。

- 0：未处理。 
- 1：确认违例。
- 2：违例排除。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'TypeCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父类型异常事件的名称。

- 01：权限使用异常。
- 02：数据流转异常。
- 03：数据操作异常。',
            'type' => 'string',
            'required' => false,
            'example' => '02',
          ),
        ),
        6 => 
        array (
          'name' => 'SubTypeCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子类型异常事件的名称。

> 如果根据子类型异常事件的名称查询异常事件列表，子类型异常事件名称可通过**DescribeEventTypes**接口获取。',
            'type' => 'string',
            'required' => false,
            'example' => '数据下载量异常',
          ),
        ),
        7 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件发生时间，即开始检测异常事件时间。格式：时间戳。单位：毫秒。',
            'type' => 'string',
            'required' => false,
            'example' => '1657900000',
          ),
        ),
        8 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件结束时间，即结束检测异常事件时间的。格式：时间戳。单位：毫秒。',
            'type' => 'string',
            'required' => false,
            'example' => '1698700000',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表每页显示的数据最大条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '12',
          ),
        ),
        10 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'rm-uf6yzvbc2tg90iuxk.l****',
          ),
        ),
        12 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据资产表所属产品名称，取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
            'type' => 'string',
            'required' => false,
            'example' => 'OSS',
          ),
        ),
        13 => 
        array (
          'name' => 'TargetProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流转异常类型事件中的目标产品名称，取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
            'type' => 'string',
            'required' => false,
            'example' => 'RDS',
          ),
        ),
        14 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子账号用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        15 => 
        array (
          'name' => 'WarnLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件的危险等级。
- **1**：低危。
- **2**：中危。
- **3**：高危。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '结果中显示的当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'PageSize' => 
              array (
                'description' => '结果中每页显示的数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '异常事件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '异常事件对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DisplayName' => 
                    array (
                      'description' => '异常事件操作人账号显示名。',
                      'type' => 'string',
                      'example' => 'yundunsr',
                    ),
                    'Status' => 
                    array (
                      'description' => '异常事件处理状态。

- 0：未处理。 
- 1：确认违例。 
- 2：违例排除。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'WarnLevel' => 
                    array (
                      'description' => '异常事件的危险等级。

- **1**：低危。
- **2**：中危。
- **3**：高危。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'UserId' => 
                    array (
                      'description' => '异常事件操作人账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1978132506596***',
                    ),
                    'StatusName' => 
                    array (
                      'description' => '异常事件处理状态名称。',
                      'type' => 'string',
                      'example' => '待处理',
                    ),
                    'DealTime' => 
                    array (
                      'description' => '异常事件处理时间的毫秒数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '12223300',
                    ),
                    'DealLoginName' => 
                    array (
                      'description' => '异常事件处理人账号名。',
                      'type' => 'string',
                      'example' => 'det1111',
                    ),
                    'SubTypeName' => 
                    array (
                      'description' => '子类型异常事件名称。',
                      'type' => 'string',
                      'example' => '数据下载量异常',
                    ),
                    'Backed' => 
                    array (
                      'description' => '是否对异常事件进行了检测强化。强化对异常事件检测的能力，可增加检测的准确性，并提升异常事件告警率。

- true：是。
- false：否。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'EventTime' => 
                    array (
                      'description' => '异常事件发生时间。格式：时间戳。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1545829129000',
                    ),
                    'LoginName' => 
                    array (
                      'description' => '异常事件操作人登录名。',
                      'type' => 'string',
                      'example' => 'det1111',
                    ),
                    'SubTypeCode' => 
                    array (
                      'description' => '子类型异常事件编码。',
                      'type' => 'string',
                      'example' => '020008',
                    ),
                    'TargetProductCode' => 
                    array (
                      'description' => '数据流转异常事件中目标产品名称。',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                    'TypeCode' => 
                    array (
                      'description' => '父类型异常事件编码。',
                      'type' => 'string',
                      'example' => '02',
                    ),
                    'AlertTime' => 
                    array (
                      'description' => '异常事件的告警时间。格式：时间戳。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '154529000',
                    ),
                    'DealUserId' => 
                    array (
                      'description' => '异常事件处理人账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '229157443385014***',
                    ),
                    'TypeName' => 
                    array (
                      'description' => '父类型异常事件名称。',
                      'type' => 'string',
                      'example' => '数据流转异常',
                    ),
                    'DealDisplayName' => 
                    array (
                      'description' => '异常事件处理人账号显示名。',
                      'type' => 'string',
                      'example' => 'yundunsr',
                    ),
                    'Id' => 
                    array (
                      'description' => 'DSC中记录的异常事件的唯一标识ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '42233335555',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '异常事件所属产品名称。',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 12,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"DisplayName\\": \\"yundunsr\\",\\n      \\"Status\\": 0,\\n      \\"WarnLevel\\": 2,\\n      \\"UserId\\": 0,\\n      \\"StatusName\\": \\"待处理\\",\\n      \\"DealTime\\": 12223300,\\n      \\"DealLoginName\\": \\"det1111\\",\\n      \\"SubTypeName\\": \\"数据下载量异常\\",\\n      \\"Backed\\": false,\\n      \\"EventTime\\": 1545829129000,\\n      \\"LoginName\\": \\"det1111\\",\\n      \\"SubTypeCode\\": \\"020008\\",\\n      \\"TargetProductCode\\": \\"RDS\\",\\n      \\"TypeCode\\": \\"02\\",\\n      \\"AlertTime\\": 154529000,\\n      \\"DealUserId\\": 0,\\n      \\"TypeName\\": \\"数据流转异常\\",\\n      \\"DealDisplayName\\": \\"yundunsr\\",\\n      \\"Id\\": 42233335555,\\n      \\"ProductCode\\": \\"RDS\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeEvents>\\n<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n<PageSize>10</PageSize>\\n<CurrentPage>1</CurrentPage>\\n<TotalCount>1</TotalCount>\\n<Items>\\n    <Status>0</Status>\\n    <TypeName>数据流转异常</TypeName>\\n    <Backed>false</Backed>\\n    <TypeCode>02</TypeCode>\\n    <ProductCode>RDS</ProductCode>\\n    <SubTypeName>数据下载量异常</SubTypeName>\\n    <EventTime>1545829129000</EventTime>\\n    <UserId>229157443385014140</UserId>\\n    <LoginName>det1111</LoginName>\\n    <DisplayName>yundunsr</DisplayName>\\n    <Id>54122244</Id>\\n    <SubTypeCode>020008</SubTypeCode>\\n    <AlertTime>1545829129000</AlertTime>\\n    <StatusName>待处理</StatusName>\\n    <DealUserId>229157443385014140</DealUserId>\\n    <DealLoginName>det1111</DealLoginName>\\n    <DeaulDisplayName>yundunsr</DeaulDisplayName>\\n    <DepartName>test</DepartName>\\n</Items>\\n</DescribeEvents>","errorExample":""}]',
      'title' => '查询异常事件列表',
      'summary' => '调用本接口查询异常事件列表。',
      'description' => '本接口一般用于数据泄露风险告警列表查询，便于告警搜索和告警处理。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeEventDetail' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '82033',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpCHNP1R',
          1 => 'FEATUREsddpGH0F1O',
          2 => 'FEATUREsddpR2D59W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '异常事件的唯一标识ID。

> 查询单个异常事件详情，需要提供单个异常事件的唯一标识ID，该ID可调用**DescribeEvents**接口获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '13456723343',
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
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '69FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'Event' => 
              array (
                'description' => '异常事件详情列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'DisplayName' => 
                  array (
                    'description' => '异常事件操作人账号显示名。',
                    'type' => 'string',
                    'example' => 'yundunsr',
                  ),
                  'Status' => 
                  array (
                    'description' => '异常事件处理状态。取值：
- **0**：未处理。 
- **1**：确认违例。 
- **2**：违例排除。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'DealReason' => 
                  array (
                    'description' => '异常事件处理原因记录。',
                    'type' => 'string',
                    'example' => 'Anomaly confirmed
',
                  ),
                  'UserId' => 
                  array (
                    'description' => '异常事件操作人账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '229157443385014***',
                  ),
                  'StatusName' => 
                  array (
                    'description' => '异常事件处理状态名称。',
                    'type' => 'string',
                    'example' => 'Pending',
                  ),
                  'DealTime' => 
                  array (
                    'description' => '异常事件处理时间。格式：时间戳。单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1611139155000',
                  ),
                  'DealLoginName' => 
                  array (
                    'description' => '异常事件处理人账号登录名。',
                    'type' => 'string',
                    'example' => 'det1111',
                  ),
                  'SubTypeName' => 
                  array (
                    'description' => '子类型异常事件名称。',
                    'type' => 'string',
                    'example' => 'Anomalous volume of downloaded data
',
                  ),
                  'Backed' => 
                  array (
                    'description' => '是否对异常事件进行了检测强化。取值：
- **true**：是。
- **false**：否。

> 强化对异常事件检测的能力，可增加检测的准确性，并提升异常事件告警率。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'DataInstance' => 
                  array (
                    'description' => '异常事件所属产品的资产实例名称。',
                    'type' => 'string',
                    'example' => 'in-222***',
                  ),
                  'EventTime' => 
                  array (
                    'description' => '异常事件发生时间。格式：时间戳。单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1545829129000',
                  ),
                  'LoginName' => 
                  array (
                    'description' => '异常事件操作人账号名。',
                    'type' => 'string',
                    'example' => 'det1111',
                  ),
                  'SubTypeCode' => 
                  array (
                    'description' => '子类型异常事件编码。',
                    'type' => 'string',
                    'example' => '020008',
                  ),
                  'LogDetail' => 
                  array (
                    'description' => '告警日志信息。',
                    'type' => 'string',
                    'example' => '{"client_ip": ["106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX"], "start_time": "2020-05-10 00:00:01", "instance": ["omniscience-data", "punish-beaver-data"], "end_time": "2020-05-10 00:21:22", "client_ua": ["Java/1.8.0_152", "Java/1.8.0_92", "aliyun-sdk-java/2.0.0", "aliyun-sdk-java/2.8.0(Linux/4.9.151-015.ali3000.alios7.x86_64/amd64;1.8.0_152)"], "user_name": 1512222261295262}',
                  ),
                  'TypeCode' => 
                  array (
                    'description' => '父类型异常事件编码。',
                    'type' => 'string',
                    'example' => '02',
                  ),
                  'AlertTime' => 
                  array (
                    'description' => '异常事件的告警发生时间。格式：时间戳。单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1545829129000',
                  ),
                  'DealUserId' => 
                  array (
                    'description' => '异常事件处理人账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '229157443385014***',
                  ),
                  'TypeName' => 
                  array (
                    'description' => '父类型异常事件名称。取值：
- **01**：权限使用异常。
- **02**：数据流转异常。
- **03**：数据操作异常。',
                    'type' => 'string',
                    'example' => 'Anomalous data flow
',
                  ),
                  'DealDisplayName' => 
                  array (
                    'description' => '异常事件处理人账号显示名。',
                    'type' => 'string',
                    'example' => 'yundunsr',
                  ),
                  'Id' => 
                  array (
                    'description' => '数据安全中心记录的异常事件的唯一标识ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '52234',
                  ),
                  'ProductCode' => 
                  array (
                    'description' => '异常事件所属的产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                    'type' => 'string',
                    'example' => 'MaxCompute',
                  ),
                  'HandleInfoList' => 
                  array (
                    'description' => '处置历史的信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '手动处理事件的详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '解禁状态。取值：
- **0**：禁用。
- **1**：解禁。
- **-1**：禁用失败。
- **-2**：解禁失败。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'EnableTime' => 
                        array (
                          'description' => '解禁时间。格式：时间戳。单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1611139155000',
                        ),
                        'HandlerValue' => 
                        array (
                          'description' => '处置时长，为空时为永久处置。单位：分钟。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'DisableTime' => 
                        array (
                          'description' => '禁用时间。格式：时间戳。单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1611139155000',
                        ),
                        'HandlerName' => 
                        array (
                          'description' => '处置方式。',
                          'type' => 'string',
                          'example' => 'Remove from the whitelist
',
                        ),
                        'HandlerType' => 
                        array (
                          'description' => '处置类型。',
                          'type' => 'string',
                          'example' => 'rds_security_ip',
                        ),
                        'CurrentValue' => 
                        array (
                          'description' => '处理账号。',
                          'type' => 'string',
                          'example' => 'sddp-test2',
                        ),
                        'Id' => 
                        array (
                          'description' => '处置ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '11',
                        ),
                      ),
                    ),
                  ),
                  'Detail' => 
                  array (
                    'description' => '异常事件详情中的具体内容。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Content' => 
                      array (
                        'description' => '异常事件内容。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '异常事件内容。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Label' => 
                            array (
                              'description' => '异常事件内容的标题。',
                              'type' => 'string',
                              'example' => 'Anomaly description
',
                            ),
                            'Value' => 
                            array (
                              'description' => '异常事件内容的说明。',
                              'type' => 'string',
                              'example' => 'The account was used to access OSS from an unusual terminal whose IP address is 1.2.3.4 from 00:06:45 on September 9, 2019 to 00:57:37 on September 9, 2019.',
                            ),
                            'Name' => 
                            array (
                              'description' => '异常事件名称。',
                              'type' => 'string',
                              'example' => 'daliaoyuncom',
                            ),
                          ),
                        ),
                      ),
                      'Chart' => 
                      array (
                        'description' => '异常事件的基线行为画像。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '异常事件的基线行为画像。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => '图表展示类型。取值：
- **1**：柱状图。
- **2**：折线图。',
                              'type' => 'string',
                              'example' => '1',
                            ),
                            'Label' => 
                            array (
                              'description' => '异常事件基线行为画像名称。',
                              'type' => 'string',
                              'example' => 'Baseline behavior chart
',
                            ),
                            'XLabel' => 
                            array (
                              'description' => 'X轴数据项的标签描述。',
                              'type' => 'string',
                              'example' => 'Number of days
',
                            ),
                            'YLabel' => 
                            array (
                              'description' => 'Y轴数据项的标签描述。',
                              'type' => 'string',
                              'example' => 'Value',
                            ),
                            'Data' => 
                            array (
                              'description' => '异常事件基线行为画像的数据项。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Y' => 
                                array (
                                  'description' => 'Y轴的数据项的值。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => 'Y轴的数据项的值。',
                                    'type' => 'string',
                                    'example' => '[1,2,3,...]',
                                  ),
                                  'example' => '[1,2,3,...]',
                                ),
                                'X' => 
                                array (
                                  'description' => 'X轴的数据项的值。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => 'X轴的数据项的值。',
                                    'type' => 'string',
                                    'example' => '[test1,test2,...]',
                                  ),
                                  'example' => '[test1,test2,...]',
                                ),
                                'Z' => 
                                array (
                                  'description' => 'Z轴的数据项的值。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => 'Z轴的数据项的值。',
                                    'type' => 'string',
                                    'example' => '[5,7,...]',
                                  ),
                                ),
                              ),
                            ),
                            'ChatType' => 
                            array (
                              'description' => '图表展示类型。取值：
- **1**：柱状图。
- **2**：折线图。

> NewAlarm为true时才会返回该字段。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'Name' => 
                            array (
                              'description' => '图标标题。

> NewAlarm为true时才会返回该字段。',
                              'type' => 'string',
                              'example' => 'misskingm',
                            ),
                            'ZLabel' => 
                            array (
                              'description' => 'Z轴数据项的标签描述。

> NewAlarm为true时才会返回该字段。',
                              'type' => 'string',
                              'example' => 'chart description',
                            ),
                          ),
                        ),
                      ),
                      'ResourceInfo' => 
                      array (
                        'description' => '异常事件来源信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '异常事件来源信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Label' => 
                            array (
                              'description' => '异常事件来源标题。',
                              'type' => 'string',
                              'example' => 'Risk',
                            ),
                            'Value' => 
                            array (
                              'description' => '异常事件来源的说明。',
                              'type' => 'string',
                              'example' => 'Based on the record of authentication by using an unusual terminal, an attacker may have obtained the access permission of the account, or an employee accessed data from a personal terminal.',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'NewAlarm' => 
                  array (
                    'description' => '是否为新版告警。取值：
- **true**：是。 
- **false**：否。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"69FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"Event\\": {\\n    \\"DisplayName\\": \\"yundunsr\\",\\n    \\"Status\\": 0,\\n    \\"DealReason\\": \\"Anomaly confirmed\\\\n\\",\\n    \\"UserId\\": 0,\\n    \\"StatusName\\": \\"Pending\\",\\n    \\"DealTime\\": 1611139155000,\\n    \\"DealLoginName\\": \\"det1111\\",\\n    \\"SubTypeName\\": \\"Anomalous volume of downloaded data\\\\n\\",\\n    \\"Backed\\": false,\\n    \\"DataInstance\\": \\"in-222***\\",\\n    \\"EventTime\\": 1545829129000,\\n    \\"LoginName\\": \\"det1111\\",\\n    \\"SubTypeCode\\": \\"020008\\",\\n    \\"LogDetail\\": \\"{\\\\\\"client_ip\\\\\\": [\\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\"], \\\\\\"start_time\\\\\\": \\\\\\"2020-05-10 00:00:01\\\\\\", \\\\\\"instance\\\\\\": [\\\\\\"omniscience-data\\\\\\", \\\\\\"punish-beaver-data\\\\\\"], \\\\\\"end_time\\\\\\": \\\\\\"2020-05-10 00:21:22\\\\\\", \\\\\\"client_ua\\\\\\": [\\\\\\"Java/1.8.0_152\\\\\\", \\\\\\"Java/1.8.0_92\\\\\\", \\\\\\"aliyun-sdk-java/2.0.0\\\\\\", \\\\\\"aliyun-sdk-java/2.8.0(Linux/4.9.151-015.ali3000.alios7.x86_64/amd64;1.8.0_152)\\\\\\"], \\\\\\"user_name\\\\\\": 1512222261295262}\\",\\n    \\"TypeCode\\": \\"02\\",\\n    \\"AlertTime\\": 1545829129000,\\n    \\"DealUserId\\": 0,\\n    \\"TypeName\\": \\"Anomalous data flow\\\\n\\",\\n    \\"DealDisplayName\\": \\"yundunsr\\",\\n    \\"Id\\": 52234,\\n    \\"ProductCode\\": \\"MaxCompute\\",\\n    \\"HandleInfoList\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"EnableTime\\": 1611139155000,\\n        \\"HandlerValue\\": 10,\\n        \\"DisableTime\\": 1611139155000,\\n        \\"HandlerName\\": \\"Remove from the whitelist\\\\n\\",\\n        \\"HandlerType\\": \\"rds_security_ip\\",\\n        \\"CurrentValue\\": \\"sddp-test2\\",\\n        \\"Id\\": 11\\n      }\\n    ],\\n    \\"Detail\\": {\\n      \\"Content\\": [\\n        {\\n          \\"Label\\": \\"Anomaly description\\\\n\\",\\n          \\"Value\\": \\"The account was used to access OSS from an unusual terminal whose IP address is 1.2.3.4 from 00:06:45 on September 9, 2019 to 00:57:37 on September 9, 2019.\\",\\n          \\"Name\\": \\"daliaoyuncom\\"\\n        }\\n      ],\\n      \\"Chart\\": [\\n        {\\n          \\"Type\\": \\"1\\",\\n          \\"Label\\": \\"Baseline behavior chart\\\\n\\",\\n          \\"XLabel\\": \\"Number of days\\\\n\\",\\n          \\"YLabel\\": \\"Value\\",\\n          \\"Data\\": {\\n            \\"Y\\": [\\n              \\"[1,2,3,...]\\"\\n            ],\\n            \\"X\\": [\\n              \\"[test1,test2,...]\\"\\n            ],\\n            \\"Z\\": [\\n              \\"[5,7,...]\\"\\n            ]\\n          },\\n          \\"ChatType\\": 1,\\n          \\"Name\\": \\"misskingm\\",\\n          \\"ZLabel\\": \\"chart description\\"\\n        }\\n      ],\\n      \\"ResourceInfo\\": [\\n        {\\n          \\"Label\\": \\"Risk\\",\\n          \\"Value\\": \\"Based on the record of authentication by using an unusual terminal, an attacker may have obtained the access permission of the account, or an employee accessed data from a personal terminal.\\"\\n        }\\n      ]\\n    },\\n    \\"NewAlarm\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeEventDetailResponse>\\n    <RequestId>69FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <Event>\\n        <DisplayName>yundunsr</DisplayName>\\n        <Status>0</Status>\\n        <DealReason>确定为违例</DealReason>\\n        <UserId>229157443385014140</UserId>\\n        <StatusName>待处理</StatusName>\\n        <DealTime>1230000</DealTime>\\n        <DealLoginName>det1111</DealLoginName>\\n        <SubTypeName>数据下载量异常</SubTypeName>\\n        <Backed>false</Backed>\\n        <DataInstance>in-222***</DataInstance>\\n        <EventTime>1545829129000</EventTime>\\n        <LoginName>det1111</LoginName>\\n        <SubTypeCode>020008</SubTypeCode>\\n        <LogDetail>{\\"client_ip\\": [\\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\"], \\"start_time\\": \\"2020-05-10 00:00:01\\", \\"instance\\": [\\"omniscience-data\\", \\"punish-beaver-data\\"], \\"end_time\\": \\"2020-05-10 00:21:22\\", \\"client_ua\\": [\\"Java/1.8.0_152\\", \\"Java/1.8.0_92\\", \\"aliyun-sdk-java/2.0.0\\", \\"aliyun-sdk-java/2.8.0(Linux/4.9.151-015.ali3000.alios7.x86_64/amd64;1.8.0_152)\\"], \\"user_name\\": 1512222261295262}</LogDetail>\\n        <TypeCode>02</TypeCode>\\n        <AlertTime>1545829129000</AlertTime>\\n        <DealUserId>229157443385014140</DealUserId>\\n        <TypeName>数据流转异常</TypeName>\\n        <DealDisplayName>yundunsr</DealDisplayName>\\n        <Id>52234</Id>\\n        <ProductCode>MaxCompute</ProductCode>\\n        <HandleInfoList>\\n            <Status>1</Status>\\n            <EnableTime>1611139155000</EnableTime>\\n            <HandlerValue>10</HandlerValue>\\n            <DisableTime>1611139155000</DisableTime>\\n            <HandlerName>移除白名单</HandlerName>\\n            <HandlerType>rds_security_ip</HandlerType>\\n            <CurrentValue>sddp-test2</CurrentValue>\\n            <Id>11</Id>\\n        </HandleInfoList>\\n        <Detail>\\n            <Content>\\n                <Label>异常描述</Label>\\n                <Value>该账号在2019-09-09 00:06:45 至 2019-09-09 00:57:37之间使用异常终端(1.2.3.4)访问产品 OSS。</Value>\\n            </Content>\\n            <Chart>\\n                <Type>1</Type>\\n                <Label>基线行为画像</Label>\\n                <XLabel>天数</XLabel>\\n                <YLabel>值</YLabel>\\n                <Data>\\n                    <Y>[1,2,3,...]</Y>\\n                    <X>[test1,test2,...]</X>\\n                </Data>\\n            </Chart>\\n            <ResourceInfo>\\n                <Label>事件风险</Label>\\n                <Value>来自异常终端鉴权记录可能是由于账号访问权限被外部攻击者获取或者员工在使用非办公终端访问数据</Value>\\n            </ResourceInfo>\\n        </Detail>\\n    </Event>\\n</DescribeEventDetailResponse>","errorExample":""}]',
      'title' => '查询异常事件详情',
      'summary' => '调用本接口查询单个异常事件详情，包括异常事件发生时间、异常描述及处理状态等。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeEventTypes' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '82039',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpCHNP1R',
          1 => 'FEATUREsddpGH0F1O',
          2 => 'FEATUREsddpR2D59W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'ParentTypeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子类型异常事件所属父类型异常事件ID。取值：
- **01**：权限使用异常。
- **02**：数据流转异常。
- **03**：数据操作异常。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '01',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品的资源类型。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '状态。取值：
- **1**：可用。
- **2**：不可用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
              'EventTypeList' => 
              array (
                'description' => '异常事件类型列表。

> ParentTypeId为空时，返回异常事件父类型；ParentTypeId不为空时，返回异常事件子类型。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '异常事件类型详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '父类型异常事件编码。',
                      'type' => 'string',
                      'example' => '01',
                    ),
                    'Description' => 
                    array (
                      'description' => '父类型异常事件描述信息。',
                      'type' => 'string',
                      'example' => '权限使用异常，****',
                    ),
                    'Name' => 
                    array (
                      'description' => '父类型异常事件名称。',
                      'type' => 'string',
                      'example' => '权限使用异常',
                    ),
                    'Id' => 
                    array (
                      'description' => '父类型异常事件的唯一标识ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'SubTypeList' => 
                    array (
                      'description' => '子类型异常事件列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '子类型异常事件详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Status' => 
                          array (
                            'description' => 'DSC对子类型异常事件的检测功能。取值：
- **1**：开启。
- **0**：关闭。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'Description' => 
                          array (
                            'description' => '子类型异常事件描述信息。',
                            'type' => 'string',
                            'example' => '配置失当-ODPS敏感项目未设置保护，****',
                          ),
                          'ConfigContentType' => 
                          array (
                            'description' => '规则项内容格式。取值：
- **0**：数字类（阈值等）。
- **1**：文本类（IP等）。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'EventHitCount' => 
                          array (
                            'description' => '事件命中次数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '2',
                          ),
                          'ConfigValue' => 
                          array (
                            'description' => '配置值。',
                            'type' => 'string',
                            'example' => '90',
                          ),
                          'ConfigCode' => 
                          array (
                            'description' => '配置编码。',
                            'type' => 'string',
                            'example' => '0100**',
                          ),
                          'Code' => 
                          array (
                            'description' => '子类型异常事件编码。',
                            'type' => 'string',
                            'example' => '020008',
                          ),
                          'ConfigDescription' => 
                          array (
                            'description' => '配置描述。',
                            'type' => 'string',
                            'example' => '权限闲置期间超过阈值：目前的阈值定义为${value}个自然日',
                          ),
                          'Name' => 
                          array (
                            'description' => '子类型异常事件名称。',
                            'type' => 'string',
                            'example' => '配置失当-ODPS敏感项目未设置保护',
                          ),
                          'AdaptedProduct' => 
                          array (
                            'description' => '规则适用产品。取值：**MaxCompute**、**OSS**、**ADS**、**OTS**、**RDS**等。',
                            'type' => 'string',
                            'example' => 'RDS',
                          ),
                          'Id' => 
                          array (
                            'description' => '子类型异常事件唯一标识ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"EventTypeList\\": [\\n    {\\n      \\"Code\\": \\"01\\",\\n      \\"Description\\": \\"权限使用异常，****\\",\\n      \\"Name\\": \\"权限使用异常\\",\\n      \\"Id\\": 1,\\n      \\"SubTypeList\\": [\\n        {\\n          \\"Status\\": 1,\\n          \\"Description\\": \\"配置失当-ODPS敏感项目未设置保护，****\\",\\n          \\"ConfigContentType\\": 1,\\n          \\"EventHitCount\\": 2,\\n          \\"ConfigValue\\": \\"90\\",\\n          \\"ConfigCode\\": \\"0100**\\",\\n          \\"Code\\": \\"020008\\",\\n          \\"ConfigDescription\\": \\"权限闲置期间超过阈值：目前的阈值定义为${value}个自然日\\",\\n          \\"Name\\": \\"配置失当-ODPS敏感项目未设置保护\\",\\n          \\"AdaptedProduct\\": \\"RDS\\",\\n          \\"Id\\": 1\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeEventTypesResponse>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <EventTypeList>\\n        <Code>01</Code>\\n        <Description>权限使用异常，***</Description>\\n        <Name>权限使用异常</Name>\\n        <Id>1</Id>\\n        <SubTypeList>\\n            <Status>1</Status>\\n            <Description>配置失当-ODPS敏感项目未设置保护，****</Description>\\n            <ConfigContentType>1</ConfigContentType>\\n            <EventHitCount>2</EventHitCount>\\n            <ConfigValue>90</ConfigValue>\\n            <ConfigCode>0100**</ConfigCode>\\n            <Code>020008</Code>\\n            <ConfigDescription>权限闲置期间超过阈值：目前的阈值定义为${value}个自然日</ConfigDescription>\\n            <Name>配置失当-ODPS敏感项目未设置保护</Name>\\n            <AdaptedProduct>RDS</AdaptedProduct>\\n            <Id>1</Id>\\n        </SubTypeList>\\n    </EventTypeList>\\n</DescribeEventTypesResponse>","errorExample":""}]',
      'title' => '查询异常事件类型的列表',
      'summary' => '调用本接口查询异常事件类型的列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDataMaskingTasks' => 
    array (
      'summary' => '调用DescribeDataMaskingTasks获取脱敏任务列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '82022',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpNV5XKZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'SearchKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务搜索关键词。支持搜索任务名称和任务编号。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务创建的起始时间。格式：时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582992000000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏任务创建的结束时间。格式：时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1583856000000',
          ),
        ),
        4 => 
        array (
          'name' => 'DstType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏数据源所属的产品。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表每页显示的数据最大条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。',
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '结果中显示的当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-4******',
              ),
              'PageSize' => 
              array (
                'description' => '结果中每页显示数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'Items' => 
              array (
                'description' => '脱敏任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '脱敏任务详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '任务状态：
- **0**：已关闭。
- **1**：开启。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Owner' => 
                    array (
                      'description' => '任务创建者。',
                      'type' => 'string',
                      'example' => 'owner',
                    ),
                    'TaskName' => 
                    array (
                      'description' => '任务名称。',
                      'type' => 'string',
                      'example' => '任务名称',
                    ),
                    'SrcType' => 
                    array (
                      'description' => '源产品类型，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'DstType' => 
                    array (
                      'description' => '脱敏数据源所属的产品。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'HasUnfinishProcess' => 
                    array (
                      'description' => '是否正在执行中。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'OriginalTable' => 
                    array (
                      'description' => '是否是原表脱敏。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'TriggerType' => 
                    array (
                      'description' => '执行方式：
- **1**：手工。
- **2**：定时。
- **3**：手工加定时。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'DstTypeCode' => 
                    array (
                      'description' => '目标产品类型。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                    'RunCount' => 
                    array (
                      'description' => '执行次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。格式：时间戳。单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582992000000',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务编号。',
                      'type' => 'string',
                      'example' => 'mt4HBgtw1B******',
                    ),
                    'DstPath' => 
                    array (
                      'description' => '目标路径。',
                      'type' => 'string',
                      'example' => '***/table1',
                    ),
                    'SrcTypeCode' => 
                    array (
                      'description' => '源产品类型。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                      'type' => 'string',
                      'example' => 'RDS',
                    ),
                    'Id' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'SrcPath' => 
                    array (
                      'description' => '源路径。',
                      'type' => 'string',
                      'example' => '***/table2',
                    ),
                    'SrcMemberAccount' => 
                    array (
                      'description' => '脱敏源所属的成员账号。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '192479427903xxxx',
                    ),
                    'DstMemberAccount' => 
                    array (
                      'description' => '脱敏目标所属的成员账号。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '192479427903xxxx',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-4******\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"Owner\\": \\"owner\\",\\n      \\"TaskName\\": \\"任务名称\\",\\n      \\"SrcType\\": 5,\\n      \\"DstType\\": 5,\\n      \\"HasUnfinishProcess\\": false,\\n      \\"OriginalTable\\": false,\\n      \\"TriggerType\\": 1,\\n      \\"DstTypeCode\\": \\"RDS\\",\\n      \\"RunCount\\": 1,\\n      \\"GmtCreate\\": 1582992000000,\\n      \\"TaskId\\": \\"mt4HBgtw1B******\\",\\n      \\"DstPath\\": \\"***/table1\\",\\n      \\"SrcTypeCode\\": \\"RDS\\",\\n      \\"Id\\": 1,\\n      \\"SrcPath\\": \\"***/table2\\",\\n      \\"SrcMemberAccount\\": 0,\\n      \\"DstMemberAccount\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataMaskingTasksResponse>\\n<TotalCount>1</TotalCount>\\n<PageSize>5</PageSize>\\n<CurrentPage>1</CurrentPage>\\n<Items>\\n    <Status>1</Status>\\n    <TriggerType>1</TriggerType>\\n    <Owner>***</Owner>\\n    <TaskId>mt4HBgtw1B****</TaskId>\\n    <DstPath>********</DstPath>\\n    <HasUnfinishProcess>false</HasUnfinishProcess>\\n    <DstTypeCode>OSS</DstTypeCode>\\n    <SrcPath>*********</SrcPath>\\n    <DstType>2</DstType>\\n    <GmtCreate>1583739870000</GmtCreate>\\n    <TaskName>任务名称</TaskName>\\n    <SrcType>2</SrcType>\\n    <RunCount>3</RunCount>\\n    <Id>1</Id>\\n    <SrcTypeCode>OSS</SrcTypeCode>\\n</Items>\\n</DescribeDataMaskingTasksResponse>","errorExample":""}]',
      'title' => '查询脱敏任务列表',
      'description' => '本接口一般用于获取静态脱敏任务列表，便于搜索和任务管理。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDataMaskingRunHistory' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：
- **zh_cn**：中文。
- **en_us**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏任务的编号。',
            'type' => 'string',
            'required' => false,
            'example' => 'mt4HBgtw1B******',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按任务执行的起始时间查询，时间戳毫秒格式。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582992000000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按任务执行的结束时间查询，时间戳毫秒格式。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1583856000000',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务执行状态：
- **-1**：等待执行。
- **0**：执行中。
- **1**：执行成功。
- **2**：执行失败。
- **3**：用户终止。
- **4**：部分失败。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'SrcType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏数据所属的源产品类型，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'DstType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据脱敏后放置的目标产品类型，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表每页显示的最大数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'MainProcessId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主任务ID。

>包含子任务的时候该参数值为当前任务ID否则为空。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '366731',
          ),
        ),
        10 => 
        array (
          'name' => 'SrcTableName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源表的表名。',
            'type' => 'string',
            'required' => false,
            'example' => 'add',
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
              'CurrentPage' => 
              array (
                'description' => '结果中显示的当前页的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '结果的请求ID。',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-4******',
              ),
              'PageSize' => 
              array (
                'description' => '结果中每页显示数据条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '结果中数据的总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'Items' => 
              array (
                'description' => '脱敏任务信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询到结果详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '任务执行状态：
- -**1**：等待执行。
- **0**：执行中。
- **1**：执行成功。
- **2**：执行失败。
- **3**：用户终止。
- **4**：部分失败.',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Type' => 
                    array (
                      'description' => '执行方式：
- **1**：手工。
- **2**：定时。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'SrcType' => 
                    array (
                      'description' => '脱敏数据所属的源产品类型，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'SrcTableName' => 
                    array (
                      'description' => '源表的表名。
',
                      'type' => 'string',
                      'example' => 'add',
                    ),
                    'MaskingCount' => 
                    array (
                      'description' => '脱敏行数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'Percentage' => 
                    array (
                      'description' => '执行进度。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'DstType' => 
                    array (
                      'description' => '数据脱敏后放置的目标产品类型，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'FailMsg' => 
                    array (
                      'description' => '任务执行失败的原因。',
                      'type' => 'string',
                      'example' => 'error',
                    ),
                    'FailCode' => 
                    array (
                      'description' => '任务执行失败的错误码，只有任务执行失败时才有值。',
                      'type' => 'string',
                      'example' => 'masking_task_not_found',
                    ),
                    'ConflictCount' => 
                    array (
                      'description' => '冲突行数，表示脱敏后待插入目标表的数据和目标表中已有的数据冲突的行数。
',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'DstTypeCode' => 
                    array (
                      'description' => '目的产品类型。取值：**MaxCompute、OSS、ADS、OTS、RDS**等',
                      'type' => 'string',
                      'example' => 'OSS',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '执行结束时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582251233000',
                    ),
                    'RunIndex' => 
                    array (
                      'description' => '第几次执行该任务。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '执行时间，时间戳毫秒格式。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582251233000',
                    ),
                    'HasSubProcess' => 
                    array (
                      'description' => '已创建的子任务数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'HasDownloadFile' => 
                    array (
                      'description' => '是否有下载文件。

- **1**：有。
- **0**：没有。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务编号。',
                      'type' => 'string',
                      'example' => 'mt4HBgtw1B******',
                    ),
                    'SrcTypeCode' => 
                    array (
                      'description' => '源产品类型。取值：**MaxCompute、OSS、ADS、OTS、RDS**等',
                      'type' => 'string',
                      'example' => 'OSS',
                    ),
                    'Id' => 
                    array (
                      'description' => '执行记录的ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-4******\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"Type\\": 1,\\n      \\"SrcType\\": 2,\\n      \\"SrcTableName\\": \\"add\\",\\n      \\"MaskingCount\\": 100,\\n      \\"Percentage\\": 100,\\n      \\"DstType\\": 2,\\n      \\"FailMsg\\": \\"error\\",\\n      \\"FailCode\\": \\"masking_task_not_found\\",\\n      \\"ConflictCount\\": 0,\\n      \\"DstTypeCode\\": \\"OSS\\",\\n      \\"EndTime\\": 1582251233000,\\n      \\"RunIndex\\": 1,\\n      \\"StartTime\\": 1582251233000,\\n      \\"HasSubProcess\\": 4,\\n      \\"HasDownloadFile\\": 1,\\n      \\"TaskId\\": \\"mt4HBgtw1B******\\",\\n      \\"SrcTypeCode\\": \\"OSS\\",\\n      \\"Id\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataMaskingRunHistory>\\n<TotalCount>1</TotalCount>\\n<PageSize>5</PageSize>\\n<CurrentPage>1</CurrentPage>\\n<Items>\\n    <Status>1</Status>\\n    <RunIndex>1</RunIndex>\\n    <TaskId>Vd8Rj80eBXR*****</TaskId>\\n    <Percentage>100</Percentage>\\n    <MaskingCount>100000</MaskingCount>\\n    <StartTime>1582251233000</StartTime>\\n    <DstTypeCode>RDS</DstTypeCode>\\n    <ConflictCount>0</ConflictCount>\\n    <DstType>5</DstType>\\n    <Type>1</Type>\\n    <SrcType>1</SrcType>\\n    <Id>4869</Id>\\n    <SrcTypeCode>MaxCompute</SrcTypeCode>\\n</Items>\\n<RequestId>769FB3C1-F4C9-4******</RequestId>\\n</DescribeDataMaskingRunHistory>","errorExample":""}]',
      'title' => '查询脱敏任务执行情况',
      'summary' => '调用DescribeDataMaskingRunHistory查询脱敏任务执行情况。',
      'description' => '本接口一般用于获取静态脱敏任务的执行情况，便于您搜索脱敏任务状态和查看任务进度。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ExecDatamask' => 
    array (
      'summary' => '调用ExecDatamask接口对数据进行动态脱敏。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '82098',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsddpUBRQH2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定脱敏模板ID。在[数据安全中心控制台](https://yundun.console.aliyun.com/?p=sddp#/dm/dmConfig/cn-zhangjiakou)上新建模板后会生成模板ID，您可以在**数据脱敏**>**脱敏配置**>**脱敏模板**页面获取**模板ID**。

- 若脱敏模板匹配类型是**字段名称**，则取**Data**中的**dataHeaderList**进行匹配。
- 若脱敏模板匹配类型是**敏感类型**，则取**Data**中的**ruleList**进行匹配。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Data',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定需要脱敏的数据。采用JSON格式的字符串表述，包含以下字段：

- **dataHeaderList**：数据的列名，顺序和需要脱敏的数据一一对应。

- **dataList**：需要脱敏的数据。

- **ruleList** ：敏感类型ID列表，顺序和需要脱敏的数据一一对应。
                        敏感类型ID是数字，不同的数字代表不同的敏感类型，可通过[DescribeRules](~~DescribeRules~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => '{"dataHeaderList":["name","age"],"dataList":[["lily",18],["lucy",17]],"ruleList":[1002,null]}',
          ),
        ),
        2 => 
        array (
          'name' => 'FeatureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数已废弃。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和返回消息的语言类型。默认值为**zh_cn**。取值

- **zh_cn**：简体中文
- **en_us**：英文（美国）',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
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
                'description' => '脱敏完成后的数据，采用JSON格式的字符串表述。包含以下字段：

- **dataHeaderList**：表示脱敏数据的列名。

- **dataList**：表示需要脱敏的数据。字段顺序和脱敏数据的列名一致。

- **ruleList** : 敏感类型ID。',
                'type' => 'string',
                'example' => '{"dataHeaderList":["name","age"],"dataList":[["l***",18],["l***",17]],"ruleList":[1002,null]}',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '813BA9FA-D062-42C4-8CD5-11A7640B96E6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"dataHeaderList\\\\\\":[\\\\\\"name\\\\\\",\\\\\\"age\\\\\\"],\\\\\\"dataList\\\\\\":[[\\\\\\"l***\\\\\\",18],[\\\\\\"l***\\\\\\",17]],\\\\\\"ruleList\\\\\\":[1002,null]}\\",\\n  \\"RequestId\\": \\"813BA9FA-D062-42C4-8CD5-11A7640B96E6\\"\\n}","errorExample":""},{"type":"xml","example":"<ExecDatamaskResponse>\\n   <Data>{\\"dataHeaderList\\":[\\"name\\",\\"age\\"],\\"dataList\\":[[\\"l***\\",18],[\\"l***\\",17]],\\"ruleList\\":[1002,null]}</Data>\\n   <RequestId>813BA9FA-D062-42C4-8CD5-11A7640B96E6</RequestId>\\n</ExecDatamaskResponse>","errorExample":""}]',
      'title' => '对数据进行动态脱敏',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopMaskingProcess' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh_cn**：默认值，中文（简体）。
- **en_us**：英文（美国）。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏任务唯一资源ID，可通过[DescribeDataMaskingTasks](~~DescribeDataMaskingTasks~~)的返回值确定脱敏任务的资源ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '3',
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
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。
',
                'type' => 'string',
                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\"\\n}","errorExample":""},{"type":"xml","example":"<StopMaskingProcessResponse>\\r\\n<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\r\\n</StopMaskingProcessResponse>","errorExample":""}]',
      'title' => '终止脱敏任务',
      'summary' => '调用StopMaskingProcess接口终止脱敏任务。终止的脱敏任务，根据唯一资源ID，可通过ManualTriggerMaskingProcess重新开启脱敏任务。',
      'description' => '本接口一般在终止脱敏任务时使用，便于用户终止正在运行的脱敏任务。例如：历史配置的脱敏任务，不再需要对数据进行脱敏，可调用此接口。

# QPS限制
本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ManualTriggerMaskingProcess' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认值zh_cn。取值：

- **zh_cn**：中文
- **en_us**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_cn',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '脱敏任务ID，用数字表示。

<note>脱敏任务编号是由一串字符表示，可通过DescribeDataMaskingTasks接口获取。</note>
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
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
            'description' => '返回结果对象。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '返回结果的请求ID。',
                'type' => 'string',
                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","type":"json"}]',
      'title' => '触发一次脱敏任务',
      'summary' => '调用ManualTriggerMaskingProcess触发一次脱敏任务。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'sddp-api.cn-hongkong.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'sddp.ap-southeast-1.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'sddp.cn-hangzhou-internal-prod-1.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'sddp.cn-zhangjiakou.aliyuncs.com',
    ),
  ),
);
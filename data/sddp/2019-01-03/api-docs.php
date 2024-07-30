<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Sddp',
        'version' => '2019-01-03',
    ],
    'directories' => [
        [
            'id' => 134364,
            'title' => '服务关联角色',
            'type' => 'directory',
            'children' => [
                'CreateSlrRole',
            ],
        ],
        [
            'id' => 134406,
            'title' => '授权',
            'type' => 'directory',
            'children' => [
                'DeleteDataLimit',
                'DescribeDataLimits',
                'ModifyDataLimit',
                'DescribeDataLimitDetail',
                'CreateDataLimit',
                'DescribeDataLimitSet',
                'DescribeInstanceSources',
                'DescribeParentInstance',
            ],
        ],
        [
            'id' => 188061,
            'title' => '识别配置',
            'type' => 'directory',
            'children' => [
                'CreateScanTask',
                'ModifyDefaultLevel',
                'ModifyRuleStatus',
                'ModifyRule',
                'DeleteRule',
                'CreateRule',
            ],
        ],
        [
            'id' => 134385,
            'title' => '数据识别',
            'type' => 'directory',
            'children' => [
                'DescribeRules',
                'DescribeRiskLevels',
                'DescribeDataAssets',
                'DescribeInstances',
                'DescribeTables',
                'DescribeColumns',
                'DescribeColumnsV2',
                'DescribeOssObjects',
                'DescribeOssObjectDetail',
                'DescribeOssObjectDetailV2',
                'DescribePackages',
                'DescribeCategoryTemplateList',
                'DescribeCategoryTemplateRuleList',
                'DescribeTemplateAllRules',
                'DescribeDocTypes',
                'DescribeDataObjects',
                'DescribeDataObjectColumnDetail',
                'DescribeDataObjectColumnDetailV2',
            ],
        ],
        [
            'id' => 134366,
            'title' => '安全配置',
            'type' => 'directory',
            'children' => [
                'CreateConfig',
                'DescribeConfigs',
                'ModifyReportTaskStatus',
                'DescribeUserStatus',
                'DisableUserConfig',
            ],
        ],
        [
            'id' => 134394,
            'title' => '异常告警',
            'type' => 'directory',
            'children' => [
                'ModifyEventTypeStatus',
                'ModifyEventStatus',
                'DescribeEvents',
                'DescribeEventDetail',
                'DescribeEventTypes',
            ],
        ],
        [
            'id' => 134400,
            'title' => '数据脱敏',
            'type' => 'directory',
            'children' => [
                'DescribeDataMaskingTasks',
                'DescribeDataMaskingRunHistory',
                'ExecDatamask',
                'StopMaskingProcess',
                'ManualTriggerMaskingProcess',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateSlrRole' => [
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '81970',
                'abilityTreeNodes' => [
                    'FEATUREsddp2CRSZ1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '106.11.XX.XX',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文（简体）'."\n"
                            .'- **en_us**：英文（美国）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HasPermission' => [
                                'description' => '服务关联角色是否创建成功。取值：'."\n"
                                    .'- **true**：成功'."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1EBF271',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HasPermission\\": true,\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1EBF271\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSlrRoleResponse>\\n    <HasPermission>true</HasPermission>\\n    <RequestId>208B016D-4CB9-4A85-96A5-0B8ED1EBF271</RequestId>\\n</CreateSlrRoleResponse>","errorExample":""}]',
            'title' => '创建服务关联角色',
            'summary' => '调用CreateSlrRole创建数据安全中心DSC（Data Security Center）的服务关联角色，授权DSC访问云资源。',
            'description' => '本接口用于允许DSC访问您的OSS、RDS、MaxCompute等云服务的资源。调用此接口后，系统将会自动创建一个服务关联角色，角色名称为AliyunServiceRoleForSDDP，角色权限策略为AliyunServiceRolePolicyForSDDP。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteDataLimit' => [
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
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '81976',
                'abilityTreeNodes' => [
                    'FEATUREsddp2CRSZ1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例、库、Bucket数据资产的唯一标识ID。'."\n"
                            ."\n"
                            .'可调用DescribeDataLimits接口，查看返回结果中的Id，获取数据资产的唯一标识ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '12033',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '106.11.XX.XX',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteDataLimit>\\r\\n\\t<RequestId>7C3AC882-E5A8-4855-BE77-B6837B695EF1</RequestId>\\r\\n</DeleteDataLimit>\\t\\r\\n","errorExample":""}]',
            'title' => '删除数据资产扫描授权',
            'summary' => '调用本接口删除连接授权的库、实例、Bucket数据资产。',
            'description' => '本接口一般用于对用户已授权的数据资产进行取消授权，便于对授权进行管理。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDataLimits' => [
            'summary' => '调用本接口查询连接授权的实例、库、Bucket数据资产列表。',
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
                'abilityTreeCode' => '82013',
                'abilityTreeNodes' => [
                    'FEATUREsddpXMFUF8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh**：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，指定每页最多显示的数据条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必填，实例、库、Bucket数据资产所属产品类型。取值：'."\n"
                            .'- **1**：MaxCompute'."\n"
                            .'- **2**：OSS'."\n"
                            .'- **3**：ADS'."\n"
                            .'- **4**：OTS'."\n"
                            .'- **5**：RDS'."\n"
                            .'- **6**：SELF_DB',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ParentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产所属的父类型资产ID。取值：'."\n"
                            .'- MaxCompute的项目名称或ID。'."\n"
                            .'- OSS的Bucket名称或ID。'."\n"
                            .'- RDS的实例名称或ID或数据库名称或ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1112',
                    ],
                ],
                [
                    'name' => 'ServiceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产所在的地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'CheckStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据检测状态。取值：'."\n"
                            .'- **0**：就绪。'."\n"
                            .'- **1**：运行中。'."\n"
                            .'- **2**：连通性测试中。'."\n"
                            .'- **3**：连通性测试通过。'."\n"
                            .'- **4**：连通性测试未通过.',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'AuditStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '审计状态。取值：'."\n"
                            .'- **1**：开启审计。'."\n"
                            .'- **0**：关闭审计。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'EngineType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型。取值：**MySQL**，**SQLServer**，**Oracle**，**PostgreSQL**，**MongoDB**等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MySQL',
                    ],
                ],
                [
                    'name' => 'DatamaskStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '脱敏权限状态。取值：'."\n"
                            .'- **1**：开启。'."\n"
                            .'- **0**：关闭。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '识别权限状态。取值：'."\n"
                            .'- **1**：开启。'."\n"
                            .'- **0**：关闭。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建开始时间。格式：时间戳。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1616068534877',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建结束时间。格式：时间戳。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1616068534877',
                    ],
                ],
                [
                    'name' => 'MemberAccount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '**********8103',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989***',
                            ],
                            'PageSize' => [
                                'description' => '每页最多显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Items' => [
                                'description' => '数据资产列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据资产详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SupportEvent' => [
                                            'description' => '是否支持异常事件检测。取值：'."\n"
                                                .'- **true**：是。'."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ErrorMessage' => [
                                            'description' => '失败原因。',
                                            'type' => 'string',
                                            'example' => '密码不正确',
                                        ],
                                        'CheckStatus' => [
                                            'description' => '数据检测状态。取值：'."\n"
                                                .'- **0**：就绪。'."\n"
                                                .'- **1**：运行中。'."\n"
                                                .'- **2**：连通性测试中。'."\n"
                                                .'- **3**：连通性测试通过。'."\n"
                                                .'- **4**：连通性测试未通过。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'LocalName' => [
                                            'description' => '数据所属区域名称。',
                                            'type' => 'string',
                                            'example' => '华东1（杭州）',
                                        ],
                                        'TenantName' => [
                                            'description' => '租户别名。',
                                            'type' => 'string',
                                            'example' => 'insta_gram',
                                        ],
                                        'NextStartTime' => [
                                            'description' => '下一次的执行时间。格式：时间戳。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1676620236000',
                                        ],
                                        'Port' => [
                                            'description' => '自建数据库端口号。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3306',
                                        ],
                                        'CheckStatusName' => [
                                            'description' => '数据检测状态名称。',
                                            'type' => 'string',
                                            'example' => '联通性检测状态',
                                        ],
                                        'SamplingSize' => [
                                            'description' => '敏感数据采样。取值：**0**、**5**、**10**。单位：条。'."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'ParentId' => [
                                            'description' => '指定待查询资产的父级ID，取值：**bucket、db、project**等。',
                                            'type' => 'string',
                                            'example' => 'project',
                                        ],
                                        'DatamaskStatus' => [
                                            'description' => '脱敏权限状态。取值：'."\n"
                                                .'- **1**：开启。'."\n"
                                                .'- **0**：关闭。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ProcessTotalCount' => [
                                            'description' => '数据表/文件总数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'ResourceType' => [
                                            'description' => '实例、库、Bucket数据资产所属产品类型。取值：'."\n"
                                                .'- **1**：MaxCompute'."\n"
                                                .'- **2**：OSS'."\n"
                                                .'- **3**：ADS'."\n"
                                                .'- **4**：OTS'."\n"
                                                .'- **5**：RDS'."\n"
                                                .'- **6**：SELF_DB',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5',
                                        ],
                                        'ErrorCode' => [
                                            'description' => '错误码。',
                                            'type' => 'string',
                                            'example' => 'connect_network_error',
                                        ],
                                        'OcrStatus' => [
                                            'description' => 'OCR状态。取值：'."\n"
                                                .'- **0**：关闭。'."\n"
                                                .'- **1**：开启。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'LogStoreDay' => [
                                            'description' => '原始日志存储时间。单位：天。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'EventStatus' => [
                                            'description' => '防泄漏开关。取值：'."\n"
                                                .'- **0**：关闭。'."\n"
                                                .'- **1**：开启（默认值）。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'SupportScan' => [
                                            'description' => '是否支持扫描。取值：'."\n"
                                                .'- **true**：是。'."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'LastFinishedTime' => [
                                            'description' => '最后一次全部扫描完成的时间。'."\n"
                                                .'- 格式：时间戳'."\n"
                                                .'- 单位：毫秒',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '145600000',
                                        ],
                                        'UserName' => [
                                            'description' => '数据所属用户名。',
                                            'type' => 'string',
                                            'example' => 'tsts',
                                        ],
                                        'AuditStatus' => [
                                            'description' => '审计状态。取值：'."\n"
                                                .'- **1**：开启审计。'."\n"
                                                .'- **0**：关闭审计。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'SupportOcr' => [
                                            'description' => '是否支持ocr。取值：'."\n"
                                                .'- **true**：是。'."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'EngineType' => [
                                            'description' => '数据库类型。取值：**MySQL**，**SQLServer**，**Oracle**，**PostgreSQL**，**MongoDB**等。',
                                            'type' => 'string',
                                            'example' => 'MySQL',
                                        ],
                                        'InstanceId' => [
                                            'description' => '数据资产表所属的资产实例ID。',
                                            'type' => 'string',
                                            'example' => '12332',
                                        ],
                                        'TotalCount' => [
                                            'description' => '数据资产表包含的字段总数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'InstanceDescription' => [
                                            'description' => '实例备注信息。',
                                            'type' => 'string',
                                            'example' => '123',
                                        ],
                                        'DbVersion' => [
                                            'description' => '数据库版本。',
                                            'type' => 'string',
                                            'example' => '2.0',
                                        ],
                                        'RegionId' => [
                                            'description' => '资产所在的地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间。格式：时间戳。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '145600000',
                                        ],
                                        'SupportAudit' => [
                                            'description' => '是否支持审计。取值：'."\n"
                                                .'- **true**：是。'."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'AutoScan' => [
                                            'description' => '是否自动扫描。取值：'."\n"
                                                .'- **0**：不自动。'."\n"
                                                .'- **1**：自动。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ResourceTypeCode' => [
                                            'description' => '数据来源产品类型编码。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                        'SupportDatamask' => [
                                            'description' => '是否支持脱敏。取值：'."\n"
                                                .'- **true**：是。'."\n"
                                                .'- **false**：否。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ProcessStatus' => [
                                            'description' => '扫描状态。取值：'."\n"
                                                .'- **-1**：无效。'."\n"
                                                .'- **0**：等待。'."\n"
                                                .'- **1**：扫描中。'."\n"
                                                .'- **2**：暂停。'."\n"
                                                .'- **3**：完成。'."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'Id' => [
                                            'description' => '数据的唯一标识ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'Enable' => [
                                            'description' => '识别权限状态。取值：'."\n"
                                                .'- **1**：开启。'."\n"
                                                .'- **0**：关闭。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'SecurityGroupIdList' => [
                                            'description' => 'Agent审计中PrivateLink使用的安全组ID列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'Agent审计中PrivateLink使用的安全组ID。',
                                                'type' => 'string',
                                                'example' => 'sg-bp113yf20quxkvy****',
                                            ],
                                        ],
                                        'VSwitchIdList' => [
                                            'description' => 'Agent审计中PrivateLink使用的交换机ID列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'Agent审计中PrivateLink使用的交换机ID。',
                                                'type' => 'string',
                                                'example' => 'vsw-bp1kk2mtrtey7o4ju****',
                                            ],
                                        ],
                                        'VpcId' => [
                                            'description' => '数据资产所属的vpcid。',
                                            'type' => 'string',
                                            'example' => 'vpc-2zevcqke6hh09c41****',
                                        ],
                                        'MemberAccount' => [
                                            'description' => '成员账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '**********8103'."\n",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989***\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 200,\\n  \\"Items\\": [\\n    {\\n      \\"SupportEvent\\": true,\\n      \\"ErrorMessage\\": \\"密码不正确\\",\\n      \\"CheckStatus\\": 3,\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"TenantName\\": \\"insta_gram\\",\\n      \\"NextStartTime\\": 1676620236000,\\n      \\"Port\\": 3306,\\n      \\"CheckStatusName\\": \\"联通性检测状态\\",\\n      \\"SamplingSize\\": 5,\\n      \\"ParentId\\": \\"project\\",\\n      \\"DatamaskStatus\\": 1,\\n      \\"ProcessTotalCount\\": 100,\\n      \\"ResourceType\\": 5,\\n      \\"ErrorCode\\": \\"connect_network_error\\",\\n      \\"OcrStatus\\": 1,\\n      \\"LogStoreDay\\": 30,\\n      \\"EventStatus\\": 1,\\n      \\"SupportScan\\": true,\\n      \\"LastFinishedTime\\": 145600000,\\n      \\"UserName\\": \\"tsts\\",\\n      \\"AuditStatus\\": 1,\\n      \\"SupportOcr\\": true,\\n      \\"EngineType\\": \\"MySQL\\",\\n      \\"InstanceId\\": \\"12332\\",\\n      \\"TotalCount\\": 100,\\n      \\"InstanceDescription\\": \\"123\\",\\n      \\"DbVersion\\": \\"2.0\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"GmtCreate\\": 145600000,\\n      \\"SupportAudit\\": true,\\n      \\"AutoScan\\": 1,\\n      \\"ResourceTypeCode\\": \\"RDS\\",\\n      \\"SupportDatamask\\": true,\\n      \\"ProcessStatus\\": 3,\\n      \\"Id\\": 1,\\n      \\"Enable\\": 1,\\n      \\"SecurityGroupIdList\\": [\\n        \\"sg-bp113yf20quxkvy****\\"\\n      ],\\n      \\"VSwitchIdList\\": [\\n        \\"vsw-bp1kk2mtrtey7o4ju****\\"\\n      ],\\n      \\"VpcId\\": \\"vpc-2zevcqke6hh09c41****\\",\\n      \\"MemberAccount\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataLimitsResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989***</RequestId>\\n    <PageSize>10</PageSize>\\n    <TotalCount>200</TotalCount>\\n    <Items>\\n        <SupportEvent>true</SupportEvent>\\n        <ErrorMessage>密码不正确</ErrorMessage>\\n        <CheckStatus>3</CheckStatus>\\n        <LocalName>华东1（杭州）</LocalName>\\n        <TenantName>insta_gram</TenantName>\\n        <NextStartTime>145600000</NextStartTime>\\n        <Port>3306</Port>\\n        <CheckStatusName>联通性检测状态</CheckStatusName>\\n        <SamplingSize>5</SamplingSize>\\n        <ParentId>project</ParentId>\\n        <DatamaskStatus>1</DatamaskStatus>\\n        <ProcessTotalCount>100</ProcessTotalCount>\\n        <ErrorCode>connect_network_error</ErrorCode>\\n        <OcrStatus>1</OcrStatus>\\n        <LogStoreDay>30</LogStoreDay>\\n        <EventStatus>1</EventStatus>\\n        <SupportScan>true</SupportScan>\\n        <LastFinishedTime>145600000</LastFinishedTime>\\n        <UserName>tsts</UserName>\\n        <AuditStatus>1</AuditStatus>\\n        <SupportOcr>true</SupportOcr>\\n        <EngineType>MySQL</EngineType>\\n        <InstanceId>12332</InstanceId>\\n        <TotalCount>100</TotalCount>\\n        <InstanceDescription>123</InstanceDescription>\\n        <DbVersion>2.0</DbVersion>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <GmtCreate>145600000</GmtCreate>\\n        <SupportAudit>true</SupportAudit>\\n        <AutoScan>1</AutoScan>\\n        <ResourceTypeCode>RDS</ResourceTypeCode>\\n        <SupportDatamask>true</SupportDatamask>\\n        <ProcessStatus>3</ProcessStatus>\\n        <Id>1</Id>\\n        <Enable>1</Enable>\\n    </Items>\\n</DescribeDataLimitsResponse>","errorExample":""}]',
            'title' => '查询数据资产扫描授权列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDataLimit' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '82106',
                'abilityTreeNodes' => [
                    'FEATUREsddp2CRSZ1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和返回消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**：中文（默认）'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DSC连接授权的配置项所属产品的数据资产的唯一标识ID。'."\n"
                            .'> 修改DSC连接授权的配置项时，需要提供其所属产品的数据资产的唯一标识ID，可调用[DescribeDataLimits](~~DescribeDataLimits~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DSC连接授权的配置项数据所属产品的名称。取值：'."\n"
                            .'- **1**：MaxCompute'."\n"
                            .'- **2**：OSS'."\n"
                            .'- **3**：ADS'."\n"
                            .'- **4**：OTS'."\n"
                            .'- **5**：RDS',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'ServiceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产所在的区域。取值：'."\n"
                            .'- **cn-beijing**：华北2 （北京）'."\n"
                            .'- **cn-zhangjiakou**：华北3（张家口）'."\n"
                            .'- **cn-huhehaote**：华北5 （呼和浩特）'."\n"
                            .'- **cn-hangzhou**：华东1 （杭州）'."\n"
                            .'- **cn-shanghai**：华东2（上海）'."\n"
                            .'- **cn-shenzhen**：华南1 （深圳）'."\n"
                            .'- **cn-hongkong**：中国香港',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DSC连接授权RDS数据库的用户名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'User01',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DSC连接授权RDS数据库的用户密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '********',
                    ],
                ],
                [
                    'name' => 'ModifyPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否修改连接数据库的用户名和密码，取值：'."\n"
                            .'- **true**：修改'."\n"
                            .'- **false**：不修改',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AuditStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启审计。取值：'."\n"
                            .'- **0**：不开启审计'."\n"
                            .'- **1**：开启审计',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'LogStoreDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开启审计之后，原始日志的保存时间（单位：天）。取值：'."\n"
                            .'- **30**'."\n"
                            .'- **90**'."\n"
                            .'- **180**'."\n"
                            .'- **365**',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'EngineType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型。取值：'."\n"
                            .'- **MySQL**'."\n"
                            .'- **SQLServer**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MySQL',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'query',
                    'schema' => [
                        'description' => '连接数据库的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'AutoScan',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否在规则发生变更时，自动触发重新扫描。取值：'."\n"
                            .'- **0**：不触发自动扫描'."\n"
                            .'- **1**：触发自动扫描  '."\n"
                            ."\n"
                            .'> 规则变更触发自动扫描时，会对数据源中的所有数据进行全量扫描。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SamplingSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定开启数据识别后，敏感数据采样条数。取值：'."\n"
                            .'- **0**'."\n"
                            .'- **5**'."\n"
                            .'- **10**',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产所属的vpcid。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-2zevcqke6hh09c41****',
                    ],
                ],
                [
                    'name' => 'SecurityGroupIdList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'Agent审计中PrivateLink使用的安全组。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sg-bp113yf20quxkvy****',
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'VSwitchIdList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'Agent审计中PrivateLink使用的交换机。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'vsw-bp1kk2mtrtey7o4ju****',
                        ],
                        'required' => false,
                        'maxItems' => 2,
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
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
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyDataLimitResponse>\\n    <RequestId>7C3AC882-E5A8-4855-BE77-B6837B695EF1</RequestId>\\n</ModifyDataLimitResponse>","errorExample":""}]',
            'title' => '修改数据资产扫描授权',
            'summary' => '调用ModifyDataLimit修改DSC连接授权的配置项。',
        ],
        'DescribeDataLimitDetail' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '82011',
                'abilityTreeNodes' => [
                    'FEATUREsddp2CRSZ1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh**：简体中文（默认取值）'."\n"
                            .'- **en**：英文'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置要查询的实例、库或Bucket数据资产的唯一标识ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeDataLimits](~~DescribeDataLimits~~)获取标识ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '12300',
                    ],
                ],
                [
                    'name' => 'NetworkType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置要查询的实例、库或Bucket数据资产所属的网络类型。取值：'."\n"
                            ."\n"
                            .'- **1**：VPC专有网络'."\n"
                            .'- **2**：经典网络',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'DataLimit' => [
                                'description' => '查询到的资产详情。',
                                'type' => 'object',
                                'properties' => [
                                    'LocalName' => [
                                        'description' => '资产所属区域。',
                                        'type' => 'string',
                                        'example' => '华北1（青岛）',
                                    ],
                                    'CheckStatus' => [
                                        'description' => 'DSC与DSC连接授权的实例、库或Bucket数据间的连通性测试状态。取值：'."\n"
                                            ."\n"
                                            .'- **2**：表示连通性测试中。'."\n"
                                            .'- **3**：表示连通性测试通过。'."\n"
                                            .'- **4**：表示连通性测试未通过。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'Port' => [
                                        'description' => '连接数据库端口的端口号。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3306',
                                    ],
                                    'CheckStatusName' => [
                                        'description' => 'DSC与DSC连接授权的实例、库、Bucket数据间的连通性测试状态名称。取值：'."\n"
                                            .'- **通过**'."\n"
                                            .'- **不通过**'."\n"
                                            .'- **检测中**',
                                        'type' => 'string',
                                        'example' => '通过',
                                    ],
                                    'RegionId' => [
                                        'description' => '数据资产所属区域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-qingdao',
                                    ],
                                    'ParentId' => [
                                        'description' => '数据资产所属云产品的资产ID和数据库名称。'."\n",
                                        'type' => 'string',
                                        'example' => 'rm-m5eup49p6o274****.RDS_example',
                                    ],
                                    'ResourceType' => [
                                        'description' => '数据资产所属产品类型。取值：'."\n"
                                            ."\n"
                                            .'- **1**：MaxCompute'."\n"
                                            .'- **2**：OSS'."\n"
                                            .'- **3**：ADS'."\n"
                                            .'- **4**：OTS'."\n"
                                            .'- **5**：RDS'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'GmtCreate' => [
                                        'description' => 'DSC连接授权实例、库、Bucket等数据资产的时间。格式：时间戳，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '145600000',
                                    ],
                                    'ResourceTypeCode' => [
                                        'description' => '数据资产所属产品名称。取值：'."\n"
                                            .'- **MaxCompute**'."\n"
                                            .'- **OSS**'."\n"
                                            .'- **ADS**'."\n"
                                            .'- **OTS**'."\n"
                                            .'- **RDS**',
                                        'type' => 'string',
                                        'example' => 'RDS',
                                    ],
                                    'UserName' => [
                                        'description' => '管理数据资产的用户账号。',
                                        'type' => 'string',
                                        'example' => 'User01',
                                    ],
                                    'Id' => [
                                        'description' => '数据资产的唯一标识ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '12300',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"DataLimit\\": {\\n    \\"LocalName\\": \\"华北1（青岛）\\",\\n    \\"CheckStatus\\": 3,\\n    \\"Port\\": 3306,\\n    \\"CheckStatusName\\": \\"通过\\",\\n    \\"RegionId\\": \\"cn-qingdao\\",\\n    \\"ParentId\\": \\"rm-m5eup49p6o274****.RDS_example\\",\\n    \\"ResourceType\\": 1,\\n    \\"GmtCreate\\": 145600000,\\n    \\"ResourceTypeCode\\": \\"RDS\\",\\n    \\"UserName\\": \\"User01\\",\\n    \\"Id\\": 12300\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataLimitDetailResponse>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <DataLimit>\\n        <LocalName>华北1（青岛）</LocalName>\\n        <CheckStatus>3</CheckStatus>\\n        <Port>3306</Port>\\n        <CheckStatusName>通过</CheckStatusName>\\n        <RegionId>cn-qingdao</RegionId>\\n        <ParentId>rm-m5eup49p6o274****.RDS_example</ParentId>\\n        <ResourceType>1</ResourceType>\\n        <GmtCreate>145600000</GmtCreate>\\n        <ResourceTypeCode>RDS</ResourceTypeCode>\\n        <UserName>User01</UserName>\\n        <Id>12300</Id>\\n    </DataLimit>\\n</DescribeDataLimitDetailResponse>","errorExample":""}]',
            'title' => '查询连接授权单个实例',
            'summary' => '查询连接授权的单个实例、库、Bucket的详情。',
            'description' => "\n"
                ."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateDataLimit' => [
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '81960',
                'abilityTreeNodes' => [
                    'FEATUREsddp2CRSZ1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权扫描的资产所属的产品类型。取值：'."\n"
                            ."\n"
                            .'- **1**：MaxCompute。'."\n"
                            .'- **2**：OSS。'."\n"
                            .'- **3**：ADS。'."\n"
                            .'- **4**：OTS。'."\n"
                            .'- **5**：RDS。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ServiceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必填，资产所在的地域。取值：'."\n"
                            .'- **cn-beijing**：华北2（北京）。'."\n"
                            .'- **cn-zhangjiakou**：华北3（张家口）。'."\n"
                            .'- **cn-huhehaote**：华北5（呼和浩特）。'."\n"
                            .'- **cn-hangzhou**：华东1（杭州）。'."\n"
                            .'- **cn-shanghai**：华东2（上海）。'."\n"
                            .'- **cn-shenzhen**：华南1（深圳）。'."\n"
                            .'- **cn-hongkong**：中国香港。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ParentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必填，资产的名称，实例ID和数据库的连接串，二者通过英文点号连接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-test1234.db_name',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库资产的用户名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'yhm',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问数据库资产的密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'passwd',
                    ],
                ],
                [
                    'name' => 'AuditStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启审计。取值：'."\n"
                            ."\n"
                            .'- **0**：不开启审计。'."\n"
                            .'- **1**：开启审计。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AutoScan',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否在规则发生变更时，自动触发重新扫描。取值：'."\n"
                            ."\n"
                            .'- **0**：不触发自动扫描。'."\n"
                            .'- **1**：触发自动扫描。'."\n"
                            ."\n"
                            .'> 规则变更触发自动扫描时，会对数据源中的所有数据进行全量扫描。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'LogStoreDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定开启审计之后，原始日志的保存时间（单位：天）。取值：'."\n"
                            .'- **30**'."\n"
                            .'- **90**'."\n"
                            .'- **180**'."\n"
                            .'- **365**',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'EngineType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库类型。取值：'."\n"
                            .'- **MySQL**'."\n"
                            .'- **SQLServer**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MySQL',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库连接端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'OcrStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OCR状态。取值：'."\n"
                            .'- **1**：开启。'."\n"
                            .'- **0**：关闭。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'EventStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件检测状态。取值：'."\n"
                            .'- **0**：关闭。'."\n"
                            .'- **1**：开启（默认）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启敏感数据识别。取值：'."\n"
                            .'- **1**：开启。'."\n"
                            .'- **0**：关闭。'."\n"
                            ."\n"
                            .'> 如果资产是首次授权，默认值为1。如果资产非首次授权，将会使用上次授权后的值，可能是0或1。故如果要对资产进行敏感数据识别，建议将此参数设置为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SamplingSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定开启数据识别后，敏感数据采样条数。取值：'."\n"
                            .'- **0**'."\n"
                            .'- **5**'."\n"
                            .'- **10**'."\n"
                            .'> 默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'CertificatePermission',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据权限。取值：'."\n"
                            .'- **ReadOnly**：只读权限。'."\n"
                            .'- **ReadWrite**：读写权限。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ReadOnly',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '106.11.XX.XX',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'description' => '授权资源的ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 1,\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDataLimitResponse>\\n<Id>1</Id>\\n<RequestId>7C3AC882-E5A8-4855-BE77-B6837B695EF1</RequestId>\\n</CreateDataLimitResponse>","errorExample":""}]',
            'title' => '创建数据资产扫描授权',
            'summary' => '调用CreateDataLimit创建对数据库、项目、存储空间（Bucket）进行扫描的授权。',
            'description' => '本接口一般用于对用户数据资产进行扫描授权，便于进一步保护用户数据资产的数据安全。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDataLimitSet' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '82014',
                'abilityTreeNodes' => [
                    'FEATUREsddp2CRSZ1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh_cn**：默认值，中文（简体）。'."\n"
                            .'- **en_us**：英文（美国）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定待查询产品的资源类型。取值：'."\n"
                            .'- **1**：表示ODPS。 '."\n"
                            .'- **2**：表示OSS 。'."\n"
                            .'- **3**：表示ADS 。'."\n"
                            .'- **4**：表示OTS 。'."\n"
                            .'- **5**：表示RDS。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ParentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定待查询资产的父类型资产ID。'."\n"
                            ."\n"
                            .'您可以通过[DescribeDataLimitDetail](~~DescribeDataLimitDetail~~)或[DescribeDataLimits](~~DescribeDataLimits~~)中返回的**ParentId**确定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'db',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '返回结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'DataLimitSet' => [
                                'description' => '返回授权扫描的实例、库、Bucket等信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ResourceTypeCode' => [
                                        'description' => '返回数据的来源产品类型编码。取值：'."\n"
                                            .'- **ODPS**'."\n"
                                            .'- **OSS**'."\n"
                                            .'- **ADS**'."\n"
                                            .'- **OTS**'."\n"
                                            .'- **RDS**',
                                        'type' => 'string',
                                        'example' => 'OSS',
                                    ],
                                    'ResourceType' => [
                                        'description' => '返回数据的来源产品类型。取值：'."\n"
                                            .'- **1**：表示ODPS。'."\n"
                                            .'- **2**：表示OSS。'."\n"
                                            .'- **3**：表示ADS。'."\n"
                                            .'- **4**：表示OTS。'."\n"
                                            .'- **5**：表示RDS。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'TotalCount' => [
                                        'description' => '查询出的资产数量总和。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'DataLimitList' => [
                                        'description' => '授权扫描的数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'LocalName' => [
                                                    'description' => '数据所属地域名称。',
                                                    'type' => 'string',
                                                    'example' => '华东1（杭州）',
                                                ],
                                                'CheckStatus' => [
                                                    'description' => '数据安全中心与数据安全中心连接授权的实例、库、Bucket数据间的连通性测试状态。'."\n"
                                                        ."\n"
                                                        .'- **2**：连通性测试中。'."\n"
                                                        .'- **3**：连通性测试通过。'."\n"
                                                        .'- **4**：连通性测试未通过。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'Connector' => [
                                                    'description' => '数据连接字符串。',
                                                    'type' => 'string',
                                                    'example' => '连接串',
                                                ],
                                                'CheckStatusName' => [
                                                    'description' => '数据检测状态名称。',
                                                    'type' => 'string',
                                                    'example' => '联通性检测状态',
                                                ],
                                                'RegionId' => [
                                                    'description' => '数据所属地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-****',
                                                ],
                                                'ParentId' => [
                                                    'description' => '指定待查询资产的父类型资产ID。',
                                                    'type' => 'string',
                                                    'example' => 'db',
                                                ],
                                                'ResourceType' => [
                                                    'description' => '数据来源产品类型。取值：'."\n"
                                                        .'- **1**：表示ODPS。'."\n"
                                                        .'- **2**：表示OSS。'."\n"
                                                        .'- **3**：表示ADS。'."\n"
                                                        .'- **4**：表示OTS。'."\n"
                                                        .'- **5**：表示RDS。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '数据创建时间，单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1625587423000',
                                                ],
                                                'ResourceTypeCode' => [
                                                    'description' => '数据来源产品类型编码。取值：'."\n"
                                                        .'- **ODPS**'."\n"
                                                        .'- **OSS**'."\n"
                                                        .'- **ADS**'."\n"
                                                        .'- **OTS**'."\n"
                                                        .'- **RDS**',
                                                    'type' => 'string',
                                                    'example' => 'OSS',
                                                ],
                                                'UserName' => [
                                                    'description' => '数据所属用户名。',
                                                    'type' => 'string',
                                                    'example' => 'tsts',
                                                ],
                                                'Id' => [
                                                    'description' => '数据的唯一标识ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'OssBucketList' => [
                                        'description' => '授权扫描的OSS对象列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RegionId' => [
                                                    'description' => 'OSS对象所属地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-****',
                                                ],
                                                'BucketName' => [
                                                    'description' => 'OSS对象所属存储空间名称。',
                                                    'type' => 'string',
                                                    'example' => 'oss-bucket',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'RegionList' => [
                                        'description' => '授权扫描的地域列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RegionId' => [
                                                    'description' => '地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-****',
                                                ],
                                                'LocalName' => [
                                                    'description' => '地域名称。',
                                                    'type' => 'string',
                                                    'example' => '杭州',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"DataLimitSet\\": {\\n    \\"ResourceTypeCode\\": \\"OSS\\",\\n    \\"ResourceType\\": 2,\\n    \\"TotalCount\\": 10,\\n    \\"DataLimitList\\": [\\n      {\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"CheckStatus\\": 3,\\n        \\"Connector\\": \\"连接串\\",\\n        \\"CheckStatusName\\": \\"联通性检测状态\\",\\n        \\"RegionId\\": \\"cn-****\\",\\n        \\"ParentId\\": \\"db\\",\\n        \\"ResourceType\\": 2,\\n        \\"GmtCreate\\": 1625587423000,\\n        \\"ResourceTypeCode\\": \\"OSS\\",\\n        \\"UserName\\": \\"tsts\\",\\n        \\"Id\\": 1\\n      }\\n    ],\\n    \\"OssBucketList\\": [\\n      {\\n        \\"RegionId\\": \\"cn-****\\",\\n        \\"BucketName\\": \\"oss-bucket\\"\\n      }\\n    ],\\n    \\"RegionList\\": [\\n      {\\n        \\"RegionId\\": \\"cn-****\\",\\n        \\"LocalName\\": \\"杭州\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataLimitSetResponse>\\n<DataLimitSet>\\n\\t\\t<TotalCount>10</TotalCount>\\n\\t\\t<ResourceTypeCode>OSS</ResourceTypeCode>\\n\\t\\t<ResourceType>2</ResourceType>\\n\\t\\t<DataLimitList>\\n\\t\\t\\t<ParentId>db</ParentId>\\n\\t\\t\\t<Connector>连接串</Connector>\\n\\t\\t\\t<GmtCreate>1625587423000</GmtCreate>\\n\\t\\t\\t<UserName>tsts</UserName>\\n\\t\\t\\t<ResourceTypeCode>OSS</ResourceTypeCode>\\n\\t\\t\\t<CheckStatus>3</CheckStatus>\\n\\t\\t\\t<ResourceType>2</ResourceType>\\n\\t\\t\\t<Id>1</Id>\\n\\t\\t\\t<RegionId>cn-****</RegionId>\\n\\t\\t\\t<CheckStatusName>联通性检测状态</CheckStatusName>\\n\\t\\t\\t<LocalName>华东1（杭州）</LocalName>\\n\\t\\t</DataLimitList>\\n\\t\\t<OssBucketList>\\n\\t\\t\\t<BucketName>oss-bucket</BucketName>\\n\\t\\t\\t<RegionId>cn-****</RegionId>\\n\\t\\t</OssBucketList>\\n\\t\\t<RegionList>\\n\\t\\t\\t<RegionId>cn-****</RegionId>\\n\\t\\t\\t<LocalName>杭州</LocalName>\\n\\t\\t</RegionList>\\n</DataLimitSet>\\n<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n</DescribeDataLimitSetResponse>","errorExample":""}]',
            'title' => '查询数据资产扫描授权列表',
            'summary' => '调用DescribeDataLimitSet接口查询指定产品的已授权扫描的实例、库、Bucket等列表。',
            'description' => '本接口一般用于获取已授权的产品资产列表，便于搜索和资源聚合。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstanceSources' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '82049',
                'abilityTreeNodes' => [
                    'FEATUREsddp2CRSZ1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh_cn**：默认值，中文（简体）。'."\n"
                            .'- **en_us**：英文（美国）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含未授权资产的数量。默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页的页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ServiceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产所在的地域。更多信息，请参见[支持地域](~~214257~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'EngineType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '引擎类型，取值： **MySQL，MariaDB，Oracle，PostgreSQL，SQLServer**等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MySQL',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'instance-demo-****',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定待查询产品类型ID，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定待查询产品的名称，取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MaxCompute',
                    ],
                ],
                [
                    'name' => 'AuditStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '审计状态。取值：'."\n"
                            .'- **1**：开启审计。'."\n"
                            .'- **0**：关闭审计。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SearchType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产模糊查找的类型。'."\n"
                            ."\n"
                            .'- **InstanceId**：实例ID。'."\n"
                            .'- **InstanceName**：实例名称。'."\n"
                            .'- **DatabaseName**：数据库名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'InstanceId',
                    ],
                ],
                [
                    'name' => 'SearchKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产模糊查找的内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AuthStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产实例的授权状态。'."\n"
                            .'- **0**：未授权。'."\n"
                            .'- **1**：已授权。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '此参数已废弃。',
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
                            'CurrentPage' => [
                                'description' => '当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。'."\n",
                                'type' => 'string',
                                'example' => '5A7E8FB9-5011-5A90-97D9-AE587047****',
                            ],
                            'PageSize' => [
                                'description' => '每页包含的资产数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的资产总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'Items' => [
                                'description' => '查询到的资产列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '查询到的资产列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'LastModifyUserId' => [
                                            'description' => '最近一次的编辑人员的账号ID。',
                                            'type' => 'string',
                                            'example' => 'demo',
                                        ],
                                        'PasswordStatus' => [
                                            'description' => '密码的使用状态。取值：'."\n"
                                                .'- **1**：使用。'."\n"
                                                .'- **0**：不使用 。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'EngineType' => [
                                            'description' => '引擎类型。取值： **MySQL，MariaDB，Oracle，PostgreSQL，SQLServer**等。',
                                            'type' => 'string',
                                            'example' => 'MySQL',
                                        ],
                                        'TenantName' => [
                                            'description' => '租户名。',
                                            'type' => 'string',
                                            'example' => 'user1',
                                        ],
                                        'InstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'rm-****',
                                        ],
                                        'InstanceDescription' => [
                                            'description' => '实例的描述。',
                                            'type' => 'string',
                                            'example' => '测试使用',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'DbName' => [
                                            'description' => '资产所属的数据库名称。',
                                            'type' => 'string',
                                            'example' => 'demo',
                                        ],
                                        'LastModifyTime' => [
                                            'description' => '最近一次的编辑时间。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1625587423000',
                                        ],
                                        'RegionName' => [
                                            'description' => '地域名称。',
                                            'type' => 'string',
                                            'example' => '杭州',
                                        ],
                                        'CanModifyUserName' => [
                                            'description' => '是否允许修改账号、密码。取值：'."\n"
                                                .'- **true**：允许。'."\n"
                                                .'- **false**：不允许。'."\n",
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'LogStoreDay' => [
                                            'description' => '原始日志存储的时间。单位：天。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间。格式：时间戳，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1625587423000',
                                        ],
                                        'AutoScan' => [
                                            'description' => '是否开启自动扫描识别敏感数据。取值：'."\n"
                                                .'- **0**：未开启。'."\n"
                                                .'- **1**：已开启。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'ProductId' => [
                                            'description' => '指定待查询产品类型ID。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'InstanceSize' => [
                                            'description' => '实例的空间大小，只对OSS资产类型有效。单位：字节。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '409600',
                                        ],
                                        'UserName' => [
                                            'description' => '账号的用户名。',
                                            'type' => 'string',
                                            'example' => 'User01',
                                        ],
                                        'AuditStatus' => [
                                            'description' => '审计授权状态。取值：'."\n"
                                                .'- **1**：已授权。'."\n"
                                                .'- **0**：未授权。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Id' => [
                                            'description' => '资产的唯一标识ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'TenantId' => [
                                            'description' => '租户ID。',
                                            'type' => 'string',
                                            'example' => '11',
                                        ],
                                        'Enable' => [
                                            'description' => '资产是否开启敏感数据识别。取值：'."\n"
                                                .'- **1**：开启。'."\n"
                                                .'- **0**：未开启。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'CheckStatus' => [
                                            'description' => '数据检测状态。取值：'."\n"
                                                .'- **0**：就绪。'."\n"
                                                .'- **1**：运行中。'."\n"
                                                .'- **2**：连通性测试中。'."\n"
                                                .'- **3**：连通性测试通过。'."\n"
                                                .'- **4**：连通性测试未通过。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'DatamaskStatus' => [
                                            'description' => '脱敏权限状态。取值：'."\n"
                                                .'- **1**：开启。'."\n"
                                                .'- **0**：关闭。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ErrorMessage' => [
                                            'description' => '失败原因。',
                                            'type' => 'string',
                                            'example' => 'password error',
                                        ],
                                        'SamplingSize' => [
                                            'description' => '敏感数据采样。取值：**0**、**5**、**10**。单位：条。'."\n",
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
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"5A7E8FB9-5011-5A90-97D9-AE587047****\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 2,\\n  \\"Items\\": [\\n    {\\n      \\"LastModifyUserId\\": \\"demo\\",\\n      \\"PasswordStatus\\": 1,\\n      \\"EngineType\\": \\"MySQL\\",\\n      \\"TenantName\\": \\"user1\\",\\n      \\"InstanceId\\": \\"rm-****\\",\\n      \\"InstanceDescription\\": \\"测试使用\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"DbName\\": \\"demo\\",\\n      \\"LastModifyTime\\": 1625587423000,\\n      \\"RegionName\\": \\"杭州\\",\\n      \\"CanModifyUserName\\": true,\\n      \\"LogStoreDay\\": 30,\\n      \\"GmtCreate\\": 1625587423000,\\n      \\"AutoScan\\": 0,\\n      \\"ProductId\\": 2,\\n      \\"InstanceSize\\": 409600,\\n      \\"UserName\\": \\"User01\\",\\n      \\"AuditStatus\\": 1,\\n      \\"Id\\": 1,\\n      \\"TenantId\\": \\"11\\",\\n      \\"Enable\\": 1,\\n      \\"CheckStatus\\": 3,\\n      \\"DatamaskStatus\\": 1,\\n      \\"ErrorMessage\\": \\"password error\\",\\n      \\"SamplingSize\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceSourcesResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>5A7E8FB9-5011-5A90-97D9-AE587047DA6C</RequestId>\\n    <PageSize>10</PageSize>\\n    <TotalCount>2</TotalCount>\\n    <Items>\\n        <LastModifyUserId>demo</LastModifyUserId>\\n        <PasswordStatus>1</PasswordStatus>\\n        <EngineType>MySQL</EngineType>\\n        <TenantName>user1</TenantName>\\n        <InstanceId>rm-****</InstanceId>\\n        <InstanceDescription>测试使用</InstanceDescription>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <DbName>demo</DbName>\\n        <LastModifyTime>1625587423000</LastModifyTime>\\n        <RegionName>杭州</RegionName>\\n        <CanModifyUserName>true</CanModifyUserName>\\n        <LogStoreDay>30</LogStoreDay>\\n        <GmtCreate>1625587423000</GmtCreate>\\n        <AutoScan>0</AutoScan>\\n        <ProductId>2</ProductId>\\n        <InstanceSize>409600</InstanceSize>\\n        <UserName>User01</UserName>\\n        <AuditStatus>1</AuditStatus>\\n        <Id>1</Id>\\n        <TenantId>11</TenantId>\\n        <Enable>1</Enable>\\n    </Items>\\n</DescribeInstanceSourcesResponse>","errorExample":""}]',
            'title' => '查询数据资产列表',
            'summary' => '获取数据资产列表。',
            'description' => '本接口根据入参AuthStatus的值可获取未授权/已授权数据资产列表，便于掌握各类资产的授权情况。'."\n"
                ."\n"
                .'新版控制台中已不再使用该接口。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeParentInstance' => [
            'summary' => '调用本接口查询未授权或已授权资产列表。',
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
                'operationType' => 'list',
                'abilityTreeCode' => '149789',
                'abilityTreeNodes' => [
                    'FEATUREsddp2CRSZ1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
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
                        'description' => '分页查询时设置的每页行数。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ServiceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产所在的地域。取值：'."\n"
                            .'- **cn-beijing**：华北2（北京）。'."\n"
                            .'- **cn-zhangjiakou**：华北3（张家口）。'."\n"
                            .'- **cn-huhehaote**：华北5（呼和浩特）。'."\n"
                            .'- **cn-hangzhou**：华东1（杭州）。'."\n"
                            .'- **cn-shanghai**：华东2（上海）。'."\n"
                            .'- **cn-shenzhen**：华南1（深圳）。'."\n"
                            .'- **cn-hongkong**：中国香港。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'EngineType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '引擎类型，取值： **MySQL，MariaDB，Oracle，PostgreSQL，SQLServer**等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MySQL',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表中列数据所属的资产实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-azfxx',
                    ],
                ],
                [
                    'name' => 'DbName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'db_test',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品类型。取值：'."\n"
                            .'- **1**：MaxCompute'."\n"
                            .'- **2**：OSS'."\n"
                            .'- **3**：ADB-MYSQL'."\n"
                            .'- **4**：TableStore'."\n"
                            .'- **5**：RDS'."\n"
                            .'- **6**：SelfDB'."\n"
                            .'- **7**：PolarDB-X'."\n"
                            .'- **8**：PolarDB'."\n"
                            .'- **9**：ADB-PG'."\n"
                            .'- **10**：OceanBase'."\n"
                            .'- **11**：MongoDB'."\n"
                            .'- **25**：Redis',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'CheckStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例或实例下数据库连接状态。取值：'."\n"
                            .'- **-3**：数据库未创建。'."\n"
                            .'- **-2**：已释放。'."\n"
                            .'- **-1**：未连接。'."\n"
                            .'- **2**：连通性测试中。'."\n"
                            .'- **3**：已连接。'."\n"
                            .'- **4**：连接失败。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'ClusterStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例状态。'."\n"
                            .'- **Running**：运行中。'."\n"
                            .'- **Released**：已释放。'."\n"
                            .'- **DatabaseNotCreated**：数据库未创建。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'AuthStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产实例的授权状态。'."\n"
                            .'- **0**：未授权。'."\n"
                            .'- **1**：已授权。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'MemberAccount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '**********8103',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh_cn**：默认值，中文（简体）。'."\n"
                            .'- **en_us**：英文（美国）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
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
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => 'ACEF9334-BB50-525D-8CF3-6CF504E4D1B3',
                            ],
                            'CurrentPage' => [
                                'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'Items' => [
                                'description' => '查询到的数据资产列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '查询到的资产详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'rm-2h066mht2vz',
                                        ],
                                        'LocalName' => [
                                            'description' => '地域名称。取值说明如下：'."\n"
                                                ."\n"
                                                .'- **华东1（杭州）**'."\n"
                                                .'- **华东2（上海）**'."\n"
                                                .'- **华北2（北京）**'."\n"
                                                .'- **华北3（张家口）**'."\n"
                                                .'- **华南1（深圳）**'."\n"
                                                .'- **华南3（广州）**'."\n"
                                                .'- **中国（香港）**'."\n"
                                                .'- **新加坡**'."\n"
                                                .'- **美国（硅谷）**',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'EngineType' => [
                                            'description' => '引擎类型。取值： **MySQL，MariaDB，Oracle，PostgreSQL，SQLServer**等。',
                                            'type' => 'string',
                                            'example' => 'MySQL',
                                        ],
                                        'ParentId' => [
                                            'description' => '授权资产的标识，如为结构化数据，标识为实例id.数据库名。',
                                            'type' => 'string',
                                            'example' => 'rm-uf6b9897shxxx.test',
                                        ],
                                        'DbNum' => [
                                            'description' => '实例下的数据库数量。',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'ClusterStatus' => [
                                            'description' => '实例状态。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'TenantId' => [
                                            'description' => '租户id，仅针对Oceanbase资产有效。',
                                            'type' => 'string',
                                            'example' => 'HBJWDSBE-zh_CN',
                                        ],
                                        'TenantName' => [
                                            'description' => '租户名称，仅针对Oceanbase资产有效。',
                                            'type' => 'string',
                                            'example' => 'user1',
                                        ],
                                        'InstanceDescription' => [
                                            'description' => '实例的描述。',
                                            'type' => 'string',
                                            'example' => 'instance description',
                                        ],
                                        'ResourceType' => [
                                            'description' => '资产类型名称。取值：'."\n"
                                                .'- **MaxCompute**'."\n"
                                                .'- **OSS**'."\n"
                                                .'- **ADB-MYSQL**'."\n"
                                                .'- **TableStore**'."\n"
                                                .'- **RDS**'."\n"
                                                .'- **SelfDB**'."\n"
                                                .'- **PolarDB-X**'."\n"
                                                .'- **PolarDB**'."\n"
                                                .'- **ADB-PG**'."\n"
                                                .'- **OceanBase**'."\n"
                                                .'- **MongoDB**'."\n"
                                                .'- **Redis**',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                        'UnConnectDbCount' => [
                                            'description' => '实例下未连接的数据库数量。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'UnSupportOneClickAuthReason' => [
                                            'description' => '不支持一连接的原因。',
                                            'type' => 'string',
                                            'example' => 'engine type not support',
                                        ],
                                        'ConnectNode' => [
                                            'description' => '连接节点类型，仅针对MongoDB资产类型有效。',
                                            'type' => 'string',
                                            'example' => 'Primary',
                                        ],
                                        'SupportConnectNodes' => [
                                            'description' => '支持的链接节点，多个用逗号分隔。',
                                            'type' => 'string',
                                            'example' => 'Primary,Secondary',
                                        ],
                                        'AuthStatus' => [
                                            'description' => '数据资产实例的授权状态。'."\n"
                                                .'- **0**：未授权。'."\n"
                                                .'- **1**：已授权。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'InstanceSize' => [
                                            'description' => '实例的空间大小，只对OSS资产类型有效。单位：字节。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '409600',
                                        ],
                                        'AuditStatus' => [
                                            'description' => '审计授权状态。取值：'."\n"
                                                .'- **1**：已授权。'."\n"
                                                .'- **0**：未授权。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'MemberAccount' => [
                                            'description' => '成员账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '**********8103',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ACEF9334-BB50-525D-8CF3-6CF504E4D1B3\\",\\n  \\"CurrentPage\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 3,\\n  \\"Items\\": [\\n    {\\n      \\"InstanceId\\": \\"rm-2h066mht2vz\\",\\n      \\"LocalName\\": \\"cn-hangzhou\\",\\n      \\"EngineType\\": \\"MySQL\\",\\n      \\"ParentId\\": \\"rm-uf6b9897shxxx.test\\",\\n      \\"DbNum\\": \\"3\\",\\n      \\"ClusterStatus\\": \\"Running\\",\\n      \\"TenantId\\": \\"HBJWDSBE-zh_CN\\",\\n      \\"TenantName\\": \\"user1\\",\\n      \\"InstanceDescription\\": \\"instance description\\",\\n      \\"ResourceType\\": \\"RDS\\",\\n      \\"UnConnectDbCount\\": \\"1\\",\\n      \\"UnSupportOneClickAuthReason\\": \\"engine type not support\\",\\n      \\"ConnectNode\\": \\"Primary\\",\\n      \\"SupportConnectNodes\\": \\"Primary,Secondary\\",\\n      \\"AuthStatus\\": 1,\\n      \\"InstanceSize\\": 409600,\\n      \\"AuditStatus\\": 1,\\n      \\"MemberAccount\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询未授权或已授权资产列表',
        ],
        'CreateScanTask' => [
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '81968',
                'abilityTreeNodes' => [
                    'FEATUREsddpXMFUF8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DataLimitId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例、库、Bucket数据资产的唯一标识ID，可以调用[DescribeDataLimits](~~DescribeDataLimits~~)获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'IntervalDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '连续两个自定义扫描资产任务的间隔天数，取值范围：1~2147483648。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RunHour',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下次扫描任务的运行时间。单位：小时。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'RunMinute',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下次扫描任务的运行时间。单位：分钟。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扫描任务的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'scan-test-sample****',
                    ],
                ],
                [
                    'name' => 'TaskUserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建扫描任务的账号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo',
                    ],
                ],
                [
                    'name' => 'OssScanPath',
                    'in' => 'query',
                    'schema' => [
                        'description' => '扫描OSS资产的扫描范围，支持前缀、后缀、正则匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/test/test',
                    ],
                ],
                [
                    'name' => 'ScanRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义扫描任务的扫描范围匹配规则，需结合**ScanRangeContent**的配置内容才能生效。取值：'."\n"
                            .'- **0**：全部匹配。'."\n"
                            .'- **1**：前缀匹配。'."\n"
                            .'- **2**：后缀匹配。'."\n"
                            .'- **3**：正则匹配。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'ScanRangeContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '在结构化数据资产的扫描范围内，通过前缀、后缀或正则匹配方式进行扫描。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'datamask/',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定待查询产品的资源类型。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '106.11.XX.XX',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '此参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            ."\n"
                            .'- **zh**：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'description' => '定制化扫描任务的资源ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B1F2BB1F-04EC-5D36-B136-B4DE17FD8DE0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 100,\\n  \\"RequestId\\": \\"B1F2BB1F-04EC-5D36-B136-B4DE17FD8DE0\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateScanTaskResponse>\\n    <RequestId>B1F2BB1F-04EC-5D36-B136-B4DE17FD8DE0</RequestId>\\n    <Id>100</Id>\\n</CreateScanTaskResponse>","errorExample":""}]',
            'title' => '创建扫描任务',
            'summary' => '调用CreateScanTask接口为识别权限授权成功的资产创建识别敏感数据的定制化扫描任务。',
            'description' => '本接口适用于用户针对已授权的资产定制扫描任务，便于用户灵活控制扫描任务的运行时间间隔及每次扫描任务的运行时间。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDefaultLevel' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'DefaultId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '未能识别数据的默认风险等级ID。'."\n"
                            .'- **1**：N/A。'."\n"
                            .'- **2**：S1。'."\n"
                            .'- **3**：S2。'."\n"
                            .'- **4**：S3。'."\n"
                            .'- **5**：S4。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'SensitiveIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '归类为“敏感”的数据风险等级ID，多个ID以半角逗号隔开。取值：'."\n"
                            ."\n"
                            .'- **1**：N/A。'."\n"
                            .'- **2**：S1。'."\n"
                            .'- **3**：S2。'."\n"
                            .'- **4**：S3。'."\n"
                            .'- **5**：S4。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1,2,3,4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1EBF271',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1EBF271\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyDefaultLevel>\\r\\n\\t<RequestId>208B016D-4CB9-4A85-96A5-0B8ED1EBF271</RequestId>\\r\\n\\t</ModifyDefaultLevel>\\r\\n","errorExample":""}]',
            'title' => '修改敏感数据的风险等级定义规则',
            'summary' => '调用本接口修改敏感数据的风险等级定义规则，包括未能识别数据的默认风险等级、归类为“敏感”的数据风险等级。',
            'description' => '本接口一般在修改敏感数据的风险等级定义规则时使用，便于对风险等级进行规划。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyRuleStatus' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh**：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的唯一标识ID。'."\n"
                            ."\n"
                            .'> 开启或关闭敏感数据识别规则的检测功能，需要提供敏感数据识别规则的唯一标识ID。可调用**DescribeRules**接口获取该ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12341',
                    ],
                ],
                [
                    'name' => 'Ids',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的唯一标识ID。多个ID用半角逗号隔开。'."\n"
                            .'> 开启或关闭敏感数据识别规则的检测功能，需要提供敏感数据识别规则的唯一标识ID，可调用**DescribeRules**接口获取该ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1,2,3,4',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开启或关闭敏感数据识别规则的检测功能。取值：'."\n"
                            .'- **0**：关闭。  '."\n"
                            .'- **1**：开启。',
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
                            'FailedIds' => [
                                'description' => '修改状态失败的规则ID集合。多个ID用半角逗号隔开。',
                                'type' => 'string',
                                'example' => '1,2,3,4',
                            ],
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"FailedIds\\": \\"1,2,3,4\\",\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyRuleStatusResponse>\\n    <FailedIds>1,2,3,4</FailedIds>\\n    <RequestId>7C3AC882-E5A8-4855-BE77-B6837B695EF1</RequestId>\\n</ModifyRuleStatusResponse>","errorExample":""}]',
            'title' => '修改识别规则的检测功能状态',
            'summary' => '调用本接口开启或关闭敏感数据识别规则的检测功能。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyRule' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认值为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文（简体）。'."\n"
                            .'- **en_us**：英文（美国）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的唯一标识ID。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRules](~~DescribeRules~~)接口获取标识ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的名称。'."\n"
                            ."\n"
                            .'您可以通过调用[DescribeRules](~~DescribeRules~~)接口获取规则的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'esw',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则内容的类型。取值：'."\n"
                            ."\n"
                            .'- **2**：表示正则表达式。'."\n"
                            .'- **3**：表示算法。'."\n"
                            .'- **5**：表示关键字。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则内容。支持正则表达式、算法、关键字类型，用于匹配敏感数据的字段或文本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '(?:\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\d|1\\\\d{2}|[1-9]\\\\d{1})\\\\.)(?:(?:25[0-5]|2[0-4]\\\\d|[01]?\\\\d?\\\\d)\\\\.){2}(?:25[0-5]|2[0-4]\\\\d|1[0-9]\\\\d|[1-9]\\\\d|[1-9]))(?:\\\\D|$)',
                    ],
                ],
                [
                    'name' => 'RiskLevelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的风险等级ID。取值：'."\n"
                            ."\n"
                            .'- **1**：N/A：未识别到敏感数据。'."\n"
                            .'- **2**：S1：1级敏感数据。'."\n"
                            .'- **3**：S2：2级敏感数据。'."\n"
                            .'- **4**：S3：3级敏感数据。'."\n"
                            .'- **5**：S4：4级敏感数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的规则类型。取值：'."\n"
                            .'- **1**：表示数据识别规则类型。'."\n"
                            .'- **2**：表示审计规则类型。'."\n"
                            .'- **3**：表示异常事件规则类型。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定待查询包含敏感数据识别规则的产品对应的产品资源类型。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RDS',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '包含敏感数据识别规则的产品对应的产品ID。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'WarnLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的风险等级。取值：'."\n"
                            .'- **1**：表示低风险等级。'."\n"
                            .'- **2**：表示中风险等级。'."\n"
                            .'- **3**：表示高风险等级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MatchType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '匹配类型。取值：'."\n"
                            .'- **1**：规则匹配。'."\n"
                            .'- **2**：词典匹配。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SupportForm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则支持的数据资产类型，取值：'."\n"
                            .'- **0**：支持全部资产。'."\n"
                            .'- **1**：支持结构化资产。'."\n"
                            .'- **2**：支持非结构化资产。',
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
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyRuleResponse>\\n    <RequestId>7C3AC882-E5A8-4855-BE77-B6837B695EF1</RequestId>\\n</ModifyRuleResponse>","errorExample":""}]',
            'title' => '修改自定义的敏感数据识别规则',
            'summary' => '调用ModifyRule接口修改数据安全中心DSC（Data Security Center）中自定义的敏感数据识别规则。',
            'description' => '调用本接口时，您必须输入规则名称、规则ID、规则内容的参数。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteRule' => [
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
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '81978',
                'abilityTreeNodes' => [
                    'FEATUREsddpIUNEZP',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的id。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '122300',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '106.11.XX.XX',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产所属的语言。-**zh**：中文-**en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID。',
                                'type' => 'string',
                                'example' => '7C3AC882-E5A8-4855-BE77-B6837B6*****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B6*****\\"\\n}","type":"json"}]',
            'title' => '删除自定义的敏感数据识别规则',
            'summary' => '调用本接口删除自定义的敏感数据识别规则。',
        ],
        'CreateRule' => [
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '81967',
                'abilityTreeNodes' => [
                    'FEATUREsddpIUNEZP',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rule-tst',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则内容的类型。取值：'."\n"
                            .'- **0**：关键字。'."\n"
                            .'- **2**：正则表达式。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的内容，支持正则表达式或关键字类型，用于匹配敏感数据的字段或文本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '(?:\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\d|1\\\\d{2}|[1-9]\\\\d{1})\\\\.)(?:(?:25[0-5]|2[0-4]\\\\d|[01]?\\\\d?\\\\d)\\\\.){2}(?:25[0-5]|2[0-4]\\\\d|1[0-9]\\\\d|[1-9]\\\\d|[1-9]))(?:\\\\D|$)',
                    ],
                ],
                [
                    'name' => 'StatExpress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '统计表达式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"time":"24","groupby":"1003","having":[{"key":"2001","value":"50"}]}',
                    ],
                ],
                [
                    'name' => 'RiskLevelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的敏感等级ID。取值：'."\n"
                            .'- **1**：N/A：未识别到敏感数据。'."\n"
                            .'- **2**：S1：1级敏感数据。'."\n"
                            .'- **3**：S2：2级敏感数据。'."\n"
                            .'- **4**：S3：3级敏感数据。'."\n"
                            .'- **5**：S4：4级敏感数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则的功能类型。取值：'."\n"
                            .'- **1**：数据识别规则。'."\n"
                            .'- **2**：审计规则。'."\n"
                            .'- **3**：异常检测规则。'."\n"
                            .'- **99**：自定义规则.',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表中列数据所属产品名称。取值：**MaxCompute**，**OSS**，**ADS**，**OTS**，**RDS**等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RDS',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产所属的产品名称对应的ID。取值：'."\n"
                            .'- **1**：MaxCompute'."\n"
                            .'- **2**：OSS'."\n"
                            .'- **3**：ADS'."\n"
                            .'- **4**：OTS'."\n"
                            .'- **5**：RDS'."\n"
                            .'- **6**：SELF_DB',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'WarnLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '危险等级。取值：'."\n"
                            .'- **1**：低危。'."\n"
                            .'- **2**：中危。'."\n"
                            .'- **3**：高危。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '身份证',
                    ],
                ],
                [
                    'name' => 'ContentCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内容类型，取值：'."\n"
                            ."\n"
                            .'- **1**：SQL注入尝试利用。'."\n"
                            .'- **2**：SQL注入尝试绕过。'."\n"
                            .'- **3**：存储过程滥用。'."\n"
                            .'- **4**：缓冲区溢出。'."\n"
                            .'- **5**：基于报错的SQL注入。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则状态。取值：'."\n"
                            .'- **1**：开启。'."\n"
                            .'- **0**：关闭。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标产品编码。取值：**MaxCompute**，**OSS**，**ADS**，**OTS**，**RDS**等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MaxCompute',
                    ],
                ],
                [
                    'name' => 'MatchType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '匹配类型。取值：'."\n"
                            .'- **1**：规则匹配。'."\n"
                            .'- **2**：词典匹配。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SupportForm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则支持形态，取值：'."\n"
                            .'- **0**：支持全部资产。'."\n"
                            .'- **1**：支持结构化资产。'."\n"
                            .'- **2**：支持非结构化资产。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '106.11.XX.XX',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh**：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'description' => '保存的敏感数据识别规则的唯一标识ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => ' 结果的请求ID。',
                                'type' => 'string',
                                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1EBF271',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 1,\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1EBF271\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRuleResponse>\\n    <Id>1</Id>\\n    <RequestId>208B016D-4CB9-4A85-96A5-0B8ED1EBF271</RequestId>\\n</CreateRuleResponse>","errorExample":""}]',
            'title' => '创建自定义的敏感数据识别规则',
            'summary' => '调用CreateRule创建自定义的敏感数据识别规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeRules' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '82070',
                'abilityTreeNodes' => [
                    'FEATUREsddpIUNEZP',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh**：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表每页显示的数据最大条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CustomType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的类型。取值：'."\n"
                            .'- **0**：表示系统内置。'."\n"
                            .'- **1**：表示用户自定义。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则内容的类型。取值：'."\n"
                            .'- **0**：关键字。'."\n"
                            .'- **2**：正则表达式。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则名称，支持模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***规则',
                    ],
                ],
                [
                    'name' => 'RiskLevelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的敏感等级ID。取值：'."\n"
                            .'- **1**：N/A：未识别到敏感数据。'."\n"
                            .'- **2**：S1：1级敏感数据。'."\n"
                            .'- **3**：S2：2级敏感数据。'."\n"
                            .'- **4**：S3：3级敏感数据。'."\n"
                            .'- **5**：S4：4级敏感数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'RuleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的类型。取值：'."\n"
                            .'- **1**：数据识别规则。'."\n"
                            .'- **2**：审计规则。'."\n"
                            .'- **3**：异常检测规则。'."\n"
                            .'- **99**：自定义规则。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MatchType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '匹配类型。取值：'."\n"
                            .'- 1：规则匹配。'."\n"
                            .'- 2：词典匹配。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产所属的产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => 'MaxCompute',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产所属的产品名称对应的ID。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'WarnLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '危险等级。'."\n"
                            .'- **1**：低危。'."\n"
                            .'- **2**：中危。'."\n"
                            .'- **3**：高危。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ContentCategory',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内容类型，取值：**1**：SQL注入尝试利用，**2**：SQL注入尝试绕过， **3**：存储过程滥用，**4**：缓冲区溢出，**5**：基于报错的SQL注入等。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态。取值：'."\n"
                            .'- **1**：正常。'."\n"
                            .'- **0**：停用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'KeywordCompatible',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新旧版关键字是否兼容。'."\n"
                            ."\n"
                            .'- **true**：是。'."\n"
                            .'- **false**：否。'."\n"
                            ."\n"
                            .'>旧版请求参数Category的关键字类型取值为0，新版请求参数Category的关键字类型取值为5，根据业务选择是否需要兼容。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则父类分组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4_1',
                    ],
                ],
                [
                    'name' => 'SupportForm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则支持的数据资产类型，取值：'."\n"
                            .'- **0**：支持全部资产。'."\n"
                            .'- **1**：支持结构化资产。'."\n"
                            .'- **2**：支持非结构化资产。'."\n"
                            ."\n"
                            .'>查询支持结构化资产或非结构化资产时，返回的数据中除包含查询的数据资产类型外，还包含全部资产。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '结果中显示的当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'PageSize' => [
                                'description' => ' 结果中每页显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'TotalCount' => [
                                'description' => ' 结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '23',
                            ],
                            'Items' => [
                                'description' => '敏感数据识别规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '敏感数据识别规则详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DisplayName' => [
                                            'description' => '敏感数据识别规则的创建人账号显示名。',
                                            'type' => 'string',
                                            'example' => '****test',
                                        ],
                                        'Status' => [
                                            'description' => '敏感数据识别规则的检测状态。取值：'."\n"
                                                .'- **0**：关闭。'."\n"
                                                .'- **1**：开启。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'SupportForm' => [
                                            'description' => '规则支持的数据资产类型，取值：'."\n"
                                                .'- **0**：支持全部资产。'."\n"
                                                .'- **1**：支持结构化资产。'."\n"
                                                .'- **2**：支持非结构化资产。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'WarnLevel' => [
                                            'description' => '危险等级。'."\n"
                                                .'- **1**：低危。'."\n"
                                                .'- **2**：中危。'."\n"
                                                .'- **3**：高危。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'UserId' => [
                                            'description' => '敏感数据识别规则的创建人账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'StatExpress' => [
                                            'description' => '统计表达式。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'GmtModified' => [
                                            'description' => '敏感数据识别规则的修改时间。格式：时间戳。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1545277010000',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => '敏感数据识别规则的敏感等级ID。取值：'."\n"
                                                .'- **1**：N/A：未识别到敏感数据。'."\n"
                                                .'- **2**：S1：1级敏感数据。'."\n"
                                                .'- **3**：S2：2级敏感数据。'."\n"
                                                .'- **4**：S3：3级敏感数据。'."\n"
                                                .'- **5**：S4：4级敏感数据。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'Description' => [
                                            'description' => '敏感数据识别规则的描述信息。',
                                            'type' => 'string',
                                            'example' => '用于识别IP地址',
                                        ],
                                        'ProductId' => [
                                            'description' => '数据资产所属的产品名称对应的ID。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'Name' => [
                                            'description' => '敏感数据识别规则的名称。',
                                            'type' => 'string',
                                            'example' => 'IP地址',
                                        ],
                                        'Content' => [
                                            'description' => '敏感数据识别规则的内容。'."\n"
                                                .'>内置识别规则，即CustomType为0的识别规则，不返回规则的内容。',
                                            'type' => 'string',
                                            'example' => '(?:\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\d|1\\\\d{2}|[1-9]\\\\d{1})\\\\.)(?:(?:25[0-5]|2[0-4]\\\\d|[01]?\\\\d?\\\\d)\\\\.){2}(?:25[0-5]|2[0-4]\\\\d|1[0-9]\\\\d|[1-9]\\\\d|[1-9]))(?:\\\\D|$)',
                                        ],
                                        'Target' => [
                                            'description' => '数据资产所属的产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                                            'type' => 'string',
                                            'example' => 'MaxCompute',
                                        ],
                                        'LoginName' => [
                                            'description' => '敏感数据识别规则的创建人账号登录名。',
                                            'type' => 'string',
                                            'example' => 'det1111',
                                        ],
                                        'CategoryName' => [
                                            'description' => '敏感数据识别规则内容所属类型名称。',
                                            'type' => 'string',
                                            'example' => '正则表达式',
                                        ],
                                        'ContentCategory' => [
                                            'description' => '内容类型，取值：**1**：SQL注入尝试利用，**2**：SQL注入尝试绕过， **3**：存储过程滥用，**4**：缓冲区溢出，**5**：基于报错的SQL注入等。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'HitTotalCount' => [
                                            'description' => '命中次数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'GroupId' => [
                                            'description' => '规则父类分组。',
                                            'type' => 'string',
                                            'example' => '4_1',
                                        ],
                                        'CustomType' => [
                                            'description' => '敏感数据识别规则类型。'."\n"
                                                ."\n"
                                                .'- 0：表示系统内置。'."\n"
                                                .'- 1：表示用户自定义。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'RiskLevelName' => [
                                            'description' => '敏感数据识别规则的风险等级名称。取值：'."\n"
                                                .'- **N/A**：未识别到敏感数据。'."\n"
                                                .'- **S1**：1级敏感数据。'."\n"
                                                .'- **S2**：2级敏感数据。'."\n"
                                                .'- **S3**：3级敏感数据。'."\n"
                                                .'- **S4**：4级敏感数据。',
                                            'type' => 'string',
                                            'example' => 'S2',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '敏感数据识别规则的创建时间。格式：时间戳。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1545277010000',
                                        ],
                                        'Category' => [
                                            'description' => '敏感数据识别规则内容的类型。取值：'."\n"
                                                .'- **0**：关键字。'."\n"
                                                .'- **2**：正则表达式。'."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'MajorKey' => [
                                            'description' => '主维度key。',
                                            'type' => 'string',
                                            'example' => 'key',
                                        ],
                                        'Id' => [
                                            'description' => '保存记录的敏感数据识别规则的唯一标识ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '20000',
                                        ],
                                        'ProductCode' => [
                                            'description' => '数据资产所属的产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                                            'type' => 'string',
                                            'example' => 'MaxCompute',
                                        ],
                                        'MatchType' => [
                                            'description' => '匹配类型。取值：'."\n"
                                                .'- **1**：规则匹配。'."\n"
                                                .'- **2**：词典匹配。',
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
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 12,\\n  \\"TotalCount\\": 23,\\n  \\"Items\\": [\\n    {\\n      \\"DisplayName\\": \\"****test\\",\\n      \\"Status\\": 1,\\n      \\"SupportForm\\": 2,\\n      \\"WarnLevel\\": 2,\\n      \\"UserId\\": 0,\\n      \\"StatExpress\\": \\"1\\",\\n      \\"GmtModified\\": 1545277010000,\\n      \\"RiskLevelId\\": 2,\\n      \\"Description\\": \\"用于识别IP地址\\",\\n      \\"ProductId\\": 2,\\n      \\"Name\\": \\"IP地址\\",\\n      \\"Content\\": \\"(?:\\\\\\\\\\\\\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\\\\\\\\\\\\\d|1\\\\\\\\\\\\\\\\d{2}|[1-9]\\\\\\\\\\\\\\\\d{1})\\\\\\\\\\\\\\\\.)(?:(?:25[0-5]|2[0-4]\\\\\\\\\\\\\\\\d|[01]?\\\\\\\\\\\\\\\\d?\\\\\\\\\\\\\\\\d)\\\\\\\\\\\\\\\\.){2}(?:25[0-5]|2[0-4]\\\\\\\\\\\\\\\\d|1[0-9]\\\\\\\\\\\\\\\\d|[1-9]\\\\\\\\\\\\\\\\d|[1-9]))(?:\\\\\\\\\\\\\\\\D|$)\\",\\n      \\"Target\\": \\"MaxCompute\\",\\n      \\"LoginName\\": \\"det1111\\",\\n      \\"CategoryName\\": \\"正则表达式\\",\\n      \\"ContentCategory\\": \\"1\\",\\n      \\"HitTotalCount\\": 3,\\n      \\"GroupId\\": \\"4_1\\",\\n      \\"CustomType\\": 1,\\n      \\"RiskLevelName\\": \\"S2\\",\\n      \\"GmtCreate\\": 1545277010000,\\n      \\"Category\\": 2,\\n      \\"MajorKey\\": \\"key\\",\\n      \\"Id\\": 20000,\\n      \\"ProductCode\\": \\"MaxCompute\\",\\n      \\"MatchType\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRulesResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <PageSize>12</PageSize>\\n    <TotalCount>23</TotalCount>\\n    <Items>\\n        <DisplayName>****test</DisplayName>\\n        <Status>1</Status>\\n        <WarnLevel>2</WarnLevel>\\n        <UserId>0</UserId>\\n        <StatExpress>1</StatExpress>\\n        <GmtModified>1545277010000</GmtModified>\\n        <RiskLevelId>2</RiskLevelId>\\n        <Description>用于识别IP地址</Description>\\n        <ProductId>2</ProductId>\\n        <Name>IP地址</Name>\\n        <Content>(?:\\\\\\\\D|^)((?:(?:25[0-4]|2[0-4]\\\\\\\\d|1\\\\\\\\d{2}|[1-9]\\\\\\\\d{1})\\\\\\\\.)(?:(?:25[0-5]|2[0-4]\\\\\\\\d|[01]?\\\\\\\\d?\\\\\\\\d)\\\\\\\\.){2}(?:25[0-5]|2[0-4]\\\\\\\\d|1[0-9]\\\\\\\\d|[1-9]\\\\\\\\d|[1-9]))(?:\\\\\\\\D|$)</Content>\\n        <Target>ODPS</Target>\\n        <LoginName>det1111</LoginName>\\n        <CategoryName>正则表达式</CategoryName>\\n        <ContentCategory>1</ContentCategory>\\n        <HitTotalCount>3</HitTotalCount>\\n        <GroupId>4_1</GroupId>\\n        <CustomType>1</CustomType>\\n        <RiskLevelName>S2</RiskLevelName>\\n        <GmtCreate>1545277010000</GmtCreate>\\n        <Category>2</Category>\\n        <MajorKey>key</MajorKey>\\n        <Id>20000</Id>\\n        <ProductCode>MaxCompute</ProductCode>\\n    </Items>\\n</DescribeRulesResponse>","errorExample":""}]',
            'title' => '查询识别规则的列表',
            'summary' => '调用本接口查询敏感数据识别规则的列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeRiskLevels' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '82064',
                'abilityTreeNodes' => [
                    'FEATUREsddpIUNEZP',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定请求和接收消息的语言类型。取值：'."\n"
                            .'- zh_cn：默认值，中文。'."\n"
                            .'- en_us：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业模版ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '返回结果的请求ID。',
                                'type' => 'string',
                                'example' => '136082B3-B21F-5E9D-B68E-991FFD205D24',
                            ],
                            'RiskLevelList' => [
                                'description' => '风险等级列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '识别出的敏感数据风险等级名称。最大风险等级与分类分级模板有关，最大风险等级为S10。'."\n"
                                                .'**内置阿里巴巴及蚂蚁集团数据安全分类分级模版**的最大风险等级为S4，**内置金融分类分级模版（参考JRT 0197-2020 金融数据安全数据安全分级指南）**和**内置能源分类分级标准**的最大风险等级为S5。如果为复制出来的模板，则最大风险等级为S10。'."\n"
                                                .'风险等级名称和ID的映射关系如下：'."\n"
                                                .'- **NA**：1'."\n"
                                                .'- **S1**：2'."\n"
                                                .'- **S2**：3'."\n"
                                                .'- **S3**：4'."\n"
                                                .'- **S4**：5'."\n"
                                                .'- **S5**：6'."\n"
                                                .'- **S6**：7'."\n"
                                                .'- **S7**：8'."\n"
                                                .'- **S8**：9'."\n"
                                                .'- **S9**：10'."\n"
                                                .'- **S10**：11',
                                            'type' => 'string',
                                            'example' => 'S1',
                                        ],
                                        'Description' => [
                                            'description' => '风险等级描述，您可以自定义描述。'."\n"
                                                ."\n"
                                                .'风险等级名称和默认风险等级描述的映射关系如下：'."\n"
                                                .'- **NA**：未识别到敏感数据'."\n"
                                                .'- **S1**：1级敏感数据'."\n"
                                                .'- **S2**：2级敏感数据'."\n"
                                                .'- **S3**：3级敏感数据'."\n"
                                                .'- **S4**：4级敏感数据'."\n"
                                                .'- **S5**：5级敏感数据'."\n"
                                                .'- **S6**：6级敏感数据'."\n"
                                                .'- **S7**：7级敏感数据'."\n"
                                                .'- **S8**：8级敏感数据'."\n"
                                                .'- **S9**：9级敏感数据'."\n"
                                                .'- **S10**：10级敏感数据',
                                            'type' => 'string',
                                            'example' => '1级敏感数据',
                                        ],
                                        'Id' => [
                                            'description' => '风险等级的唯一标志ID，取值范围1~11。每个风险等级ID都有对应的风险等级名称，例如，风险等级ID为2对应风险等级S1。'."\n"
                                                ."\n"
                                                .'具体映射关系，请参见Name参数的描述。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'ReferenceNum' => [
                                            'description' => '风险等级在模板中的引用次数，默认值为0。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"136082B3-B21F-5E9D-B68E-991FFD205D24\\",\\n  \\"RiskLevelList\\": [\\n    {\\n      \\"Name\\": \\"S1\\",\\n      \\"Description\\": \\"1级敏感数据\\",\\n      \\"Id\\": 2,\\n      \\"ReferenceNum\\": 20\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRiskLevelsResponse>\\n<RequestId>136082B3-B21F-5E9D-B68E-991FFD205D24</RequestId>\\n<RiskLevelList>\\n    <Description>未识别到敏感数据</Description>\\n    <Id>1</Id>\\n    <ReferenceNum>0</ReferenceNum>\\n    <Name>N/A</Name>\\n</RiskLevelList>\\n<RiskLevelList>\\n    <Description>1级敏感数据</Description>\\n    <Id>2</Id>\\n    <ReferenceNum>9</ReferenceNum>\\n    <Name>S1</Name>\\n</RiskLevelList>\\n<RiskLevelList>\\n    <Description>2级敏感数据</Description>\\n    <Id>3</Id>\\n    <ReferenceNum>22</ReferenceNum>\\n    <Name>S2</Name>\\n</RiskLevelList>\\n<RiskLevelList>\\n    <Description>3级敏感数据</Description>\\n    <Id>4</Id>\\n    <ReferenceNum>18</ReferenceNum>\\n    <Name>S3</Name>\\n</RiskLevelList>\\n<RiskLevelList>\\n    <Description>4级敏感数据</Description>\\n    <Id>5</Id>\\n    <ReferenceNum>0</ReferenceNum>\\n    <Name>S4</Name>\\n</RiskLevelList>\\n</DescribeRiskLevelsResponse>","errorExample":""}]',
            'title' => '查询风险等级列表',
            'summary' => '调用DescribeRiskLevels接口获取数据识别的风险等级列表。',
            'description' => '本接口用于获取当前使用模板的数据识别风险等级列表，便于掌握当前模板各风险等级的规则引用数量及最大风险等级。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDataAssets' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文（简体）'."\n"
                            .'- **en_us**：英文（美国）'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定要查询资产的关键词，支持模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RiskLevels',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定要查询的数据资产的风险等级，存在多个时使用英文逗号（,）隔开。'."\n"
                            .'- **2**：S1，弱风险等级'."\n"
                            .'- **3**：S2，中等风险等级'."\n"
                            .'- **4**：S3，高风险等级'."\n"
                            .'- **5**：S4，最高风险等级',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定数据资产命中的敏感数据识别规则唯一标识ID。'."\n"
                            .'> 如果根据数据资产命中的敏感数据识别规则来搜索数据资产，敏感数据识别规则的ID可调用[DescribeRules](~~DescribeRules~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '11122200',
                    ],
                ],
                [
                    'name' => 'RangeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定要查询的数据资产类型。取值：'."\n"
                            .'- **1**：MaxCompute项目'."\n"
                            .'- **2**：MaxCompute表'."\n"
                            .'- **3**：MaxCompute包'."\n"
                            .'- **11**：分析型数据库MySQL（ADS）库'."\n"
                            .'- **12**：分析型数据库MySQL（ADS）表'."\n"
                            .'- **21**：OSS文件桶'."\n"
                            .'- **22**：OSS Object'."\n"
                            .'- **31**：表格存储实例'."\n"
                            .'- **32**：表格存储表'."\n"
                            .'- **51**：RDS库'."\n"
                            .'- **52**：RDS表'."\n"
                            .'- **61**：ECS自建数据库'."\n"
                            .'- **62**：ECS自建数据表'."\n"
                            .'- **71**：DRDS库'."\n"
                            .'- **72**：DRDS表'."\n"
                            .'- **81**：PolarDB库'."\n"
                            .'- **82**：PolarDB表'."\n"
                            .'- **91**：GPDB库'."\n"
                            .'- **92**：GPDB表'."\n"
                            ."\n\n",
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
                        'description' => '指定分页查询时，每页显示的数据最大条数。默认值：**20**。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定分页查询时，当前页的页码。',
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
                            'CurrentPage' => [
                                'description' => '分页查询时，当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '71064826-726F-4ADA-B879-05D8055476FB',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时，每页最多显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的存在敏感数据的资产总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Items' => [
                                'description' => '数据资产列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Acl' => [
                                            'description' => 'OSS文件桶的ACL权限设置。'."\n"
                                                .'> 只有您将请求参数**RangeId**配置为**21**，即要查询的数据资产为OSS文件桶时，该参数才会显示。',
                                            'type' => 'string',
                                            'example' => 'private',
                                        ],
                                        'CreationTime' => [
                                            'description' => '数据资产创建时间，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1536751124000',
                                        ],
                                        'DataType' => [
                                            'description' => '数据资产所属的数据类型。',
                                            'type' => 'string',
                                            'example' => 'OSS_BUCKET',
                                        ],
                                        'Owner' => [
                                            'description' => '数据资产所属者账号。',
                                            'type' => 'string',
                                            'example' => 'dtdep-239-******',
                                        ],
                                        'SensitiveRatio' => [
                                            'description' => '在所有数据资产中敏感数据所占的比例。',
                                            'type' => 'string',
                                            'example' => '45%',
                                        ],
                                        'Protection' => [
                                            'description' => '数据资产的防护状态，固定值：**false**。只有您将请求参数**RangeId**配置为**1**，即要查询的数据资产为MaxCompute项目时，该参数才会返回**true**或**false**。'."\n"
                                                .'- **false**: 未开启数据保护机制。'."\n"
                                                .'- **true**：开启数据保护机制。项目空间中的数据只能流入，不能流出。'."\n"
                                                ."\n",
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Labelsec' => [
                                            'description' => '数据的敏感度标记，固定值：**0**。只有您将请求参数**RangeId**配置为**1**，即要查询的数据资产为MaxCompute项目时，该参数才会返回**0**、**1**、**2**或**3**。'."\n"
                                                .'- **0**：不保密，Unclassified'."\n"
                                                .'- **1**：秘密，Confidential'."\n"
                                                .'- **2**：机密，Sensitive'."\n"
                                                .'- **3** ：高度机密，Highly Sensitive'."\n",
                                            'type' => 'boolean',
                                            'example' => '0',
                                        ],
                                        'TotalCount' => [
                                            'description' => '所有数据资产的数量。例如：MaxCompute中项目、包或表的总数；RDS中数据库或表的总数；OSS中文件桶或Object的总数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '432',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => '数据资产的风险等级ID。风险等级ID越高，表示识别出的数据越敏感。取值：'."\n"
                                                .'- **1**：未识别到敏感数据，无风险'."\n"
                                                .'- **2**：1级敏感数据风险'."\n"
                                                .'- **3**：2级敏感数据风险'."\n"
                                                .'- **4**：3级敏感数据风险'."\n"
                                                .'- **5**：4级敏感数据风险'."\n"
                                                .'- **6**：5级敏感数据风险'."\n"
                                                .'- **7**：6级敏感数据风险'."\n"
                                                .'- **8**：7级敏感数据风险'."\n"
                                                .'- **9**：8级敏感数据风险'."\n"
                                                .'- **10**：9级敏感数据风险'."\n"
                                                .'- **11**：10级敏感数据风险',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'RuleName' => [
                                            'description' => '数据资产命中的敏感数据识别规则名称。',
                                            'type' => 'string',
                                            'example' => '***规则',
                                        ],
                                        'Sensitive' => [
                                            'description' => '数据资产中是否包含敏感数据。取值：'."\n"
                                                .'- **true**：包含'."\n"
                                                .'- **false**：不包含',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ObjectKey' => [
                                            'description' => 'OSS存储对象的Key值。'."\n"
                                                .'> 只有您将请求参数**RangeId**配置为**22**，即要查询的数据资产为OSS Object时，该参数才会显示。',
                                            'type' => 'string',
                                            'example' => '内部',
                                        ],
                                        'RiskLevelName' => [
                                            'description' => '数据资产的风险等级名称。',
                                            'type' => 'string',
                                            'example' => '中等风险等级',
                                        ],
                                        'OdpsRiskLevelName' => [
                                            'description' => 'MaxCompute资产的风险等级名称。取值：'."\n"
                                                .'- **S1**：弱风险等级'."\n"
                                                .'- **S2**：中等风险等级'."\n"
                                                .'- **S3**：高级风险等级'."\n"
                                                .'- **S4**：最高风险等级'."\n"
                                                .'> 只有您将请求参数**RangeId**配置为**1**，即要查询的数据资产为MaxCompute项目时，该参数才会显示。',
                                            'type' => 'string',
                                            'example' => 'S4',
                                        ],
                                        'ProductId' => [
                                            'description' => '数据资产所属产品类型ID。取值：'."\n"
                                                .'- **1**：MaxCompute'."\n"
                                                .'- **2**：OSS'."\n"
                                                .'- **3**：ADS'."\n"
                                                .'- **4**：OTS'."\n"
                                                .'- **5**：RDS',
                                            'type' => 'string',
                                            'example' => '5',
                                        ],
                                        'Name' => [
                                            'description' => '数据资产名称。',
                                            'type' => 'string',
                                            'example' => 'gxdata',
                                        ],
                                        'SensitiveCount' => [
                                            'description' => '数据资产中敏感数据总数。例如：MaxCompute中敏感的项目、包或表的总数；RDS中敏感的数据库或表的总数；OSS中敏感的文件桶或Object的总数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '24',
                                        ],
                                        'Id' => [
                                            'description' => '数据资产的唯一标识ID。',
                                            'type' => 'string',
                                            'example' => '268',
                                        ],
                                        'ProductCode' => [
                                            'description' => '数据资产所属产品名称。',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"71064826-726F-4ADA-B879-05D8055476FB\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"Acl\\": \\"private\\",\\n      \\"CreationTime\\": 1536751124000,\\n      \\"DataType\\": \\"OSS_BUCKET\\",\\n      \\"Owner\\": \\"dtdep-239-******\\",\\n      \\"SensitiveRatio\\": \\"45%\\",\\n      \\"Protection\\": false,\\n      \\"Labelsec\\": true,\\n      \\"TotalCount\\": 432,\\n      \\"RiskLevelId\\": 2,\\n      \\"RuleName\\": \\"***规则\\",\\n      \\"Sensitive\\": true,\\n      \\"ObjectKey\\": \\"内部\\",\\n      \\"RiskLevelName\\": \\"中等风险等级\\",\\n      \\"OdpsRiskLevelName\\": \\"S4\\",\\n      \\"ProductId\\": \\"5\\",\\n      \\"Name\\": \\"gxdata\\",\\n      \\"SensitiveCount\\": 24,\\n      \\"Id\\": \\"268\\",\\n      \\"ProductCode\\": \\"RDS\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataAssetsResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>71064826-726F-4ADA-B879-05D8055476FB</RequestId>\\n    <PageSize>20</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Items>\\n        <Acl>private</Acl>\\n        <CreationTime>1536751124000</CreationTime>\\n        <DataType>OSS_BUCKET</DataType>\\n        <Owner>dtdep-239-******</Owner>\\n        <SensitiveRatio>45%</SensitiveRatio>\\n        <Protection>false</Protection>\\n        <Labelsec>false</Labelsec>\\n        <TotalCount>432</TotalCount>\\n        <RiskLevelId>2</RiskLevelId>\\n        <RuleName>***规则</RuleName>\\n        <Sensitive>true</Sensitive>\\n        <ObjectKey>内部</ObjectKey>\\n        <RiskLevelName>中等风险等级</RiskLevelName>\\n        <OdpsRiskLevelName>S4</OdpsRiskLevelName>\\n        <ProductId>5</ProductId>\\n        <Name>gxdata</Name>\\n        <SensitiveCount>24</SensitiveCount>\\n        <Id>268</Id>\\n        <ProductCode>RDS</ProductCode>\\n    </Items>\\n</DescribeDataAssetsResponse>","errorExample":""}]',
            'title' => '查询数据资产敏感信息',
            'summary' => '执行敏感数据保护概览页面的数据资产搜索。',
            'description' => '本接口一般用于敏感数据保护概览页面各资产类型数据的查询。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInstances' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型，默认为**zh_cn**。'."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- **zh_cn**：中文（简体）'."\n"
                            .'- **en_us**：英文（美国）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置搜索的关键词，支持模糊匹配。例如，输入data，会搜索出搜索项中包含data的全部数据信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'data',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置数据资产实例所属产品的ID。您可以通过调用[DescribeDataAssets](~~DescribeDataAssets~~)接口获取产品ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RiskLevelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置数据资产实例的风险等级ID。风险等级ID越高，表示识别出的数据越敏感。取值：'."\n"
                            ."\n"
                            .'- **1**：表示未识别到敏感数据，无风险。'."\n"
                            .'- **2**：表示1级敏感数据风险。'."\n"
                            .'- **3**：表示2级敏感数据风险。'."\n"
                            .'- **4**：表示3级敏感数据风险。'."\n"
                            .'- **5**：表示4级敏感数据风险。'."\n"
                            .'- **6**：表示5级敏感数据风险。'."\n"
                            .'- **7**：表示6级敏感数据风险。'."\n"
                            .'- **8**：表示7级敏感数据风险。'."\n"
                            .'- **9**：表示8级敏感数据风险。'."\n"
                            .'- **10**：表示9级敏感数据风险。'."\n"
                            .'- **11**：表示10级敏感数据风险。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置数据资产实例命中的敏感数据识别规则ID。该敏感数据识别规则的ID可调用[DescribeRules](~~DescribeRules~~)接口，查看返回参数**Id**获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1111111',
                    ],
                ],
                [
                    'name' => 'ServiceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置数据资产实例的地域。更多信息，请参见[支持的地域](~~214257~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '此参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置数据资产实例所属产品的名称，包括MaxCompute、OSS、RDS等。关于支持的产品名称，请参见[支持识别敏感数据的数据类型](~~212906~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RDS',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
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
                            'CurrentPage' => [
                                'description' => '当前页面的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '71064826-726F-4ADA-B879-05D8055476FB',
                            ],
                            'PageSize' => [
                                'description' => '列表中每页显示的数据资产实例的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的数据资产实例的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '231',
                            ],
                            'Items' => [
                                'description' => '查询到的数据资产实例详情。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationTime' => [
                                            'description' => '创建该数据资产实例的时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1637226782000',
                                        ],
                                        'LastFinishTime' => [
                                            'description' => '最近一次扫描数据资产实例的完成时间。使用时间戳表示，单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1637622793000',
                                        ],
                                        'Owner' => [
                                            'description' => '拥有该数据资产实例的阿里云账号。',
                                            'type' => 'string',
                                            'example' => 'dtdep-239-******',
                                        ],
                                        'TenantName' => [
                                            'description' => '租户的名称。',
                                            'type' => 'string',
                                            'example' => 'tenant',
                                        ],
                                        'Protection' => [
                                            'description' => '数据资产实例的防护状态。取值：'."\n"
                                                ."\n"
                                                .'- **true**：防护中'."\n"
                                                .'- **false**：未防护',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'DepartName' => [
                                            'description' => '数据资产实例所属部门的名称。',
                                            'type' => 'string',
                                            'example' => '***DemoCenter',
                                        ],
                                        'Labelsec' => [
                                            'description' => '数据资产实例的安全状态。取值：'."\n"
                                                ."\n"
                                                .'- **true**：安全'."\n"
                                                .'- **false**：非安全',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => '数据资产实例的风险等级ID。风险等级ID越高，表示识别出的数据越敏感。'."\n"
                                                ."\n"
                                                .'- **1**：表示未识别到敏感数据，无风险。'."\n"
                                                .'- **2**：表示1级敏感数据风险。'."\n"
                                                .'- **3**：表示2级敏感数据风险。'."\n"
                                                .'- **4**：表示3级敏感数据风险。'."\n"
                                                .'- **5**：表示4级敏感数据风险。'."\n"
                                                .'- **6**：表示5级敏感数据风险。'."\n"
                                                .'- **7**：表示6级敏感数据风险。'."\n"
                                                .'- **8**：表示7级敏感数据风险。'."\n"
                                                .'- **9**：表示8级敏感数据风险。'."\n"
                                                .'- **10**：表示9级敏感数据风险。'."\n"
                                                .'- **11**：表示10级敏感数据风险。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'ProductId' => [
                                            'description' => '数据资产实例所属产品的ID。',
                                            'type' => 'string',
                                            'example' => '5',
                                        ],
                                        'Name' => [
                                            'description' => '数据资产实例的名称。',
                                            'type' => 'string',
                                            'example' => 'gxdata',
                                        ],
                                        'TotalCount' => [
                                            'description' => '数据资产实例中的数据总数。例如：当数据资产为RDS时，表示该实例中数据库的总表数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '231',
                                        ],
                                        'InstanceDescription' => [
                                            'description' => '数据资产实例的描述信息。',
                                            'type' => 'string',
                                            'example' => 'instance dscription',
                                        ],
                                        'RuleName' => [
                                            'description' => '数据资产实例命中的敏感数据识别规则的名称。',
                                            'type' => 'string',
                                            'example' => '*** rule',
                                        ],
                                        'Sensitive' => [
                                            'description' => '数据资产实例中是否包含敏感数据。取值：'."\n"
                                                ."\n"
                                                .'- **true**：包含'."\n"
                                                .'- **false**：不包含',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'RiskLevelName' => [
                                            'description' => '数据资产实例的风险等级名称。',
                                            'type' => 'string',
                                            'example' => 'S1',
                                        ],
                                        'OdpsRiskLevelName' => [
                                            'description' => '此参数已废弃。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'SensitiveCount' => [
                                            'description' => '数据资产实例中包含的敏感数据总数。例如：当数据资产为RDS时，表示该实例中数据库的敏感总表数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '123',
                                        ],
                                        'Id' => [
                                            'description' => '数据安全中心服务中记录的数据资产实例的唯一标识ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '11111',
                                        ],
                                        'ProductCode' => [
                                            'description' => '数据资产实例所属产品的名称，包括MaxCompute、OSS、RDS等。关于支持的具体产品名称，请参见[支持识别敏感数据的数据类型](~~212906~~)。',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                        'ModelTags' => [
                                            'description' => '数据标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '数据标签对象。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Id' => [
                                                        'description' => '数据标签ID。取值：'."\n"
                                                            .'- **101**：个人敏感信息'."\n"
                                                            .'- **102**：个人信息'."\n"
                                                            .'- **107**：通用信息',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '101',
                                                    ],
                                                    'Name' => [
                                                        'description' => '数据标签名称。取值：'."\n"
                                                            .'- 个人敏感信息'."\n"
                                                            .'- 个人信息'."\n"
                                                            .'- 通用信息',
                                                        'type' => 'string',
                                                        'example' => 'personal sensitive data',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"71064826-726F-4ADA-B879-05D8055476FB\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 231,\\n  \\"Items\\": [\\n    {\\n      \\"CreationTime\\": 1637226782000,\\n      \\"LastFinishTime\\": 1637622793000,\\n      \\"Owner\\": \\"dtdep-239-******\\",\\n      \\"TenantName\\": \\"tenant\\",\\n      \\"Protection\\": false,\\n      \\"DepartName\\": \\"***DemoCenter\\",\\n      \\"Labelsec\\": true,\\n      \\"RiskLevelId\\": 2,\\n      \\"ProductId\\": \\"5\\",\\n      \\"Name\\": \\"gxdata\\",\\n      \\"TotalCount\\": 231,\\n      \\"InstanceDescription\\": \\"instance dscription\\",\\n      \\"RuleName\\": \\"*** rule\\",\\n      \\"Sensitive\\": true,\\n      \\"RiskLevelName\\": \\"S1\\",\\n      \\"OdpsRiskLevelName\\": \\"1\\",\\n      \\"SensitiveCount\\": 123,\\n      \\"Id\\": 11111,\\n      \\"ProductCode\\": \\"RDS\\",\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"personal sensitive data\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstancesResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>71064826-726F-4ADA-B879-05D8055476FB</RequestId>\\n    <PageSize>10</PageSize>\\n    <TotalCount>231</TotalCount>\\n    <Items>\\n        <CreationTime>1637226782000</CreationTime>\\n        <LastFinishTime>1637622793000</LastFinishTime>\\n        <Owner>dtdep-239-******</Owner>\\n        <TenantName>租户1</TenantName>\\n        <Protection>false</Protection>\\n        <DepartName>***DemoCenter</DepartName>\\n        <Labelsec>true</Labelsec>\\n        <RiskLevelId>2</RiskLevelId>\\n        <ProductId>5</ProductId>\\n        <Name>gxdata</Name>\\n        <TotalCount>231</TotalCount>\\n        <InstanceDescription>实例信息1</InstanceDescription>\\n        <RuleName>***规则</RuleName>\\n        <Sensitive>true</Sensitive>\\n        <RiskLevelName>1级敏感数据风险</RiskLevelName>\\n        <OdpsRiskLevelName>1</OdpsRiskLevelName>\\n        <SensitiveCount>123</SensitiveCount>\\n        <Id>11111</Id>\\n        <ProductCode>RDS</ProductCode>\\n    </Items>\\n</DescribeInstancesResponse>","errorExample":""}]',
            'title' => '查询数据资产实例列表',
            'summary' => '获取连接授权的MaxCompute、RDS、OSS数据资产实例列表。',
            'description' => '在调用DescribeInstances接口时，您可以设置搜索关键词、数据资产实例的风险等级等参数来获取符合要求的数据资产实例的列表信息。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n",
        ],
        'DescribeTables' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索的关键词，支持模糊匹配。'."\n"
                            .'例如，输入test，会搜索出搜索项中包含test的全部数据信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表所属产品ID。该产品ID可调用[DescribeDataAssets](~~DescribeDataAssets~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表所属产品名称，包括MaxCompute、OSS、RDS等。关于支持的产品名称，请参见[支持识别敏感数据的数据类型](~~212906~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MaxCompute',
                    ],
                ],
                [
                    'name' => 'RiskLevelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表的风险等级ID。'."\n"
                            .'每个风险等级ID都有对应的风险等级名称。取值：'."\n"
                            .'- **1**：N/A：未识别到敏感数据。'."\n"
                            .'- **2**：S1：1级敏感数据。'."\n"
                            .'- **3**：S2：2级敏感数据。'."\n"
                            .'- **4**：S3：3级敏感数据。'."\n"
                            .'- **5**：S4：4级敏感数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表命中的敏感数据识别规则ID。该敏感数据识别规则ID可调用[DescribeRules](~~DescribeRules~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '333322',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表所属的资产实例ID。该资产实例ID可调用[DescribeInstances](~~DescribeInstances~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PackageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表所属的资产包ID。该资产包ID可调用[DescribePackages](~~DescribePackages~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '555555',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表中每页显示的数据最大条数。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ServiceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持数据安全中心服务的地域。更多信息，请参见[支持的地域](~~214257~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业模版ID',
                        'type' => 'integer',
                        'format' => 'int64',
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
                            'CurrentPage' => [
                                'description' => '结果中显示的当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'PageSize' => [
                                'description' => '结果中每页显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '13',
                            ],
                            'Items' => [
                                'description' => '数据资产表的信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationTime' => [
                                            'description' => '创建该数据资产表的时间。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1536751124000',
                                        ],
                                        'Owner' => [
                                            'description' => '拥有该数据资产表的阿里云账号。',
                                            'type' => 'string',
                                            'example' => 'dtdep-239-******',
                                        ],
                                        'SensitiveRatio' => [
                                            'description' => '数据资产表中敏感字段所占的百分比。',
                                            'type' => 'string',
                                            'example' => '21%',
                                        ],
                                        'TenantName' => [
                                            'description' => '租户名称。',
                                            'type' => 'string',
                                            'example' => '租户1',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => '数据资产表的风险等级ID。'."\n"
                                                .'每个风险等级ID都有对应的风险等级名称。取值：'."\n"
                                                .'- **1**：N/A：未识别到敏感数据。'."\n"
                                                .'- **2**：S1：1级敏感数据。'."\n"
                                                .'- **3**：S2：2级敏感数据。'."\n"
                                                .'- **4**：S3：3级敏感数据。'."\n"
                                                .'- **5**：S4：4级敏感数据。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'InstanceName' => [
                                            'description' => '数据资产表的实例名称。',
                                            'type' => 'string',
                                            'example' => '实例1',
                                        ],
                                        'ProductId' => [
                                            'description' => '数据资产表所属的产品ID。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Name' => [
                                            'description' => '数据资产表的名称。',
                                            'type' => 'string',
                                            'example' => 'gxdata',
                                        ],
                                        'InstanceId' => [
                                            'description' => '数据资产表所属的资产实例ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'TotalCount' => [
                                            'description' => '数据资产表包含的字段总数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1234',
                                        ],
                                        'InstanceDescription' => [
                                            'description' => '实例的备注信息。',
                                            'type' => 'string',
                                            'example' => '备注1',
                                        ],
                                        'Sensitive' => [
                                            'description' => '数据资产表中是否包含敏感字段。'."\n"
                                                ."\n"
                                                .'- **true**：包含。'."\n"
                                                .'- **false**：不包含。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'RiskLevelName' => [
                                            'description' => '数据资产表的风险等级名称。取值：'."\n"
                                                .'- **N/A**：未识别到敏感数据。'."\n"
                                                .'- **S1**：1级敏感数据。'."\n"
                                                .'- **S2**：2级敏感数据。'."\n"
                                                .'- **S3**：3级敏感数据。'."\n"
                                                .'- **S4**：4级敏感数据。',
                                            'type' => 'string',
                                            'example' => 'S2',
                                        ],
                                        'SensitiveCount' => [
                                            'description' => '数据资产表中包含的敏感字段总数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '32',
                                        ],
                                        'Id' => [
                                            'description' => '数据资产表的唯一标识ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '222',
                                        ],
                                        'ProductCode' => [
                                            'description' => '数据资产表所属产品名称，取值：**MaxCompute、OSS、ADS、OTS、RDS**等。关于支持的具体产品名称，请参见[支持识别敏感数据的数据类型](~~212906~~)。',
                                            'type' => 'string',
                                            'example' => 'MaxCompute',
                                        ],
                                        'RuleList' => [
                                            'description' => '数据资产表命中的敏感数据识别规则信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '规则的名称。',
                                                        'type' => 'string',
                                                        'example' => '规则名称',
                                                    ],
                                                    'RiskLevelId' => [
                                                        'description' => '敏感数据识别规则的风险等级ID。取值：'."\n"
                                                            .'- **1**：N/A：未识别到敏感数据。'."\n"
                                                            .'- **2**：S1：1级敏感数据。'."\n"
                                                            .'- **3**：S2：2级敏感数据。'."\n"
                                                            .'- **4**：S3：3级敏感数据。'."\n"
                                                            .'- **5**：S4：4级敏感数据。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1',
                                                    ],
                                                    'Count' => [
                                                        'description' => '规则的总数。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 13,\\n  \\"Items\\": [\\n    {\\n      \\"CreationTime\\": 1536751124000,\\n      \\"Owner\\": \\"dtdep-239-******\\",\\n      \\"SensitiveRatio\\": \\"21%\\",\\n      \\"TenantName\\": \\"租户1\\",\\n      \\"RiskLevelId\\": 2,\\n      \\"InstanceName\\": \\"实例1\\",\\n      \\"ProductId\\": \\"1\\",\\n      \\"Name\\": \\"gxdata\\",\\n      \\"InstanceId\\": 1,\\n      \\"TotalCount\\": 1234,\\n      \\"InstanceDescription\\": \\"备注1\\",\\n      \\"Sensitive\\": true,\\n      \\"RiskLevelName\\": \\"S2\\",\\n      \\"SensitiveCount\\": 32,\\n      \\"Id\\": 222,\\n      \\"ProductCode\\": \\"MaxCompute\\",\\n      \\"RuleList\\": [\\n        {\\n          \\"Name\\": \\"规则名称\\",\\n          \\"RiskLevelId\\": 1,\\n          \\"Count\\": 12\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>13</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n<CurrentPage>1</CurrentPage>\\n<Items>\\n    <Owner>dtdep-239-******</Owner>\\n    <ProductCode>MaxCompute</ProductCode>\\n    <InstanceId>1</InstanceId>\\n    <TenantName>租户1</TenantName>\\n    <SensitiveRatio>21%</SensitiveRatio>\\n    <ProductId>1</ProductId>\\n    <RiskLevelId>2</RiskLevelId>\\n    <Name>gxdata</Name>\\n    <InstanceName>实例1</InstanceName>\\n    <TotalCount>1234</TotalCount>\\n    <CreationTime>1536751124000</CreationTime>\\n    <Sensitive>true</Sensitive>\\n    <RiskLevelName>最高风险等级</RiskLevelName>\\n    <InstanceDescription>备注1</InstanceDescription>\\n    <Id>222</Id>\\n    <SensitiveCount>32</SensitiveCount>\\n    <RuleList>\\n        <Count>12</Count>\\n        <RiskLevelId>1</RiskLevelId>\\n        <Name>规则名称</Name>\\n    </RuleList>\\n</Items>","errorExample":""}]',
            'title' => '查询数据资产表的数据',
            'summary' => '查询数据安全中心连接授权的MaxCompute、RDS等数据资产的表数据。',
            'description' => '在调用DescribeTables接口时，您可以设置搜索关键词、数据资产表的风险等级等参数来获取符合要求的数据资产的表信息。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒，超过限制，API调用会限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeColumns' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索的关键词，支持模糊匹配。'."\n"
                            ."\n"
                            .'例如，输入**test**，会搜索出搜索项中包含**test**的全部数据信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'TableId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'MaxCompute、RDS等资产表中的列所属的资产表唯一标识ID。'."\n"
                            ."\n"
                            .'> 根据资产表的ID查询数据安全中心连接授权的数据资产表中列的数据，资产表ID可调用[DescribeTables](~~DescribeTables~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '11132334',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产表中列数据命中的敏感数据识别规则的唯一标识ID。'."\n"
                            ."\n"
                            .'> 根据资产表中列数据命中的敏感数据识别规则的ID，查询数据安全中心连接授权的数据资产表中列的数据，敏感数据识别规则ID可调用[DescribeRules](~~DescribeRules~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '11111',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表中列数据所属产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MaxCompute',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表中列数据所属的资产实例ID。'."\n"
                            ."\n"
                            .'> 根据数据资产表中列数据所属的资产实例的ID，查询数据安全中心连接授权的数据资产表中列的数据，资产实例ID可调用[DescribeInstances](~~DescribeRules~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表中列数据所属的资产实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-bp17t1htja573l5i8****',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'it_table',
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表中列数据命中的敏感数据识别规则名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name',
                    ],
                ],
                [
                    'name' => 'SensLevelName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感等级名。取值：'."\n"
                            .'- **N/A**：未识别到敏感数据。'."\n"
                            .'- **S1**：1级敏感数据。'."\n"
                            .'- **S2**：2级敏感数据。'."\n"
                            .'- **S3**：3级敏感数据。'."\n"
                            .'- **S4**：4级敏感数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'S2',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表每页显示的数据最大条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RiskLevelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的风险等级ID。取值：'."\n"
                            .'- **1**：N/A。'."\n"
                            .'- **2**：S1。'."\n"
                            .'- **3**：S2。'."\n"
                            .'- **4**：S3。'."\n"
                            .'- **5**：S4。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '结果中显示的当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-4******',
                            ],
                            'PageSize' => [
                                'description' => '结果中每页显示数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'Items' => [
                                'description' => '数据资产表中列的数据。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationTime' => [
                                            'description' => '数据资产表中列数据的创建时间毫秒数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1536751124000',
                                        ],
                                        'TableName' => [
                                            'description' => '订正目标列所属的表名。',
                                            'type' => 'string',
                                            'example' => 'it_table',
                                        ],
                                        'DataType' => [
                                            'description' => '数据资产表中列数据的数据类型。',
                                            'type' => 'string',
                                            'example' => 'String',
                                        ],
                                        'OdpsRiskLevelValue' => [
                                            'description' => '资产的风险等级编码。取值：'."\n"
                                                ."\n"
                                                .'- **1**：N/A。'."\n"
                                                .'- **2**：S1。'."\n"
                                                .'- **3**：S2。'."\n"
                                                .'- **4**：S3。'."\n"
                                                .'- **5**：S4。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'InstanceId' => [
                                            'description' => '数据资产表中列数据所属的资产实例ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => '数据资产表中列数据的风险等级ID。取值：'."\n"
                                                .'- **1**：N/A。'."\n"
                                                .'- **2**：S1。'."\n"
                                                .'- **3**：S2。'."\n"
                                                .'- **4**：S3。'."\n"
                                                .'- **5**：S4。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'RuleName' => [
                                            'description' => '数据资产表中列数据命中的敏感数据识别规则名称。',
                                            'type' => 'string',
                                            'example' => 'name',
                                        ],
                                        'RuleId' => [
                                            'description' => '数据资产表中列数据命中的敏感数据识别规则ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'Sensitive' => [
                                            'description' => '数据资产表中列数据是否包含敏感数据。取值：'."\n"
                                                ."\n"
                                                .'- true：数据资产表中列数据包含敏感数据。'."\n"
                                                .'- false：数据资产表中列数据不包含敏感数据。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'SensLevelName' => [
                                            'description' => '敏感等级名。取值：'."\n"
                                                .'- **N/A**：未识别到敏感数据。'."\n"
                                                .'- **S1**：1级敏感数据。'."\n"
                                                .'- **S2**：2级敏感数据。'."\n"
                                                .'- **S3**：3级敏感数据。'."\n"
                                                .'- **S4**：4级敏感数据。',
                                            'type' => 'string',
                                            'example' => 'S2',
                                        ],
                                        'InstanceName' => [
                                            'description' => '数据资产表中列数据所属的资产实例名称。',
                                            'type' => 'string',
                                            'example' => 'rm-bp17t1htja573l5i8****',
                                        ],
                                        'RiskLevelName' => [
                                            'description' => '数据资产表中列数据的风险等级名称。取值：'."\n"
                                                .'- **N/A**：未识别到敏感数据。'."\n"
                                                .'- **S1**：1级敏感数据。'."\n"
                                                .'- **S2**：2级敏感数据。'."\n"
                                                .'- **S3**：3级敏感数据。'."\n"
                                                .'- **S4**：4级敏感数据。',
                                            'type' => 'string',
                                            'example' => 'S2',
                                        ],
                                        'OdpsRiskLevelName' => [
                                            'description' => '资产的风险等级名称。取值：'."\n"
                                                .'- **N/A**：未识别到敏感数据。'."\n"
                                                .'- **S1**：1级敏感数据。'."\n"
                                                .'- **S2**：2级敏感数据。'."\n"
                                                .'- **S3**：3级敏感数据。'."\n"
                                                .'- **S4**：4级敏感数据。',
                                            'type' => 'string',
                                            'example' => 'S3',
                                        ],
                                        'Name' => [
                                            'description' => '数据资产表中列的名称。',
                                            'type' => 'string',
                                            'example' => 'gxdata',
                                        ],
                                        'TableId' => [
                                            'description' => '数据资产表中列数据所属的资产表ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'Id' => [
                                            'description' => '数据资产表中列的唯一标识ID。',
                                            'type' => 'string',
                                            'example' => '268',
                                        ],
                                        'ProductCode' => [
                                            'description' => '数据资产表中列数据所属产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                                            'type' => 'string',
                                            'example' => 'MaxCompute',
                                        ],
                                        'RevisionStatus' => [
                                            'description' => '订正状态。取值：'."\n"
                                                .'- 1：已订正。'."\n"
                                                .'- 0：未订正。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'RevisionId' => [
                                            'description' => '订正记录ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12',
                                        ],
                                        'ModelTags' => [
                                            'description' => '命中识别模型的数据标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '命中识别模型的数据标签对象。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Id' => [
                                                        'description' => '识别模型的数据标签ID。'."\n"
                                                            .'- **101**：个人敏感信息。'."\n"
                                                            .'- **102**：个人信息。'."\n"
                                                            .'- **103**：重要数据。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '101',
                                                    ],
                                                    'Name' => [
                                                        'description' => '识别模型的数据标签名称。'."\n"
                                                            .'- 个人敏感信息。'."\n"
                                                            .'- 个人信息。'."\n"
                                                            .'- 重要数据。',
                                                        'type' => 'string',
                                                        'example' => 'personal sensitive data',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-4******\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 12,\\n  \\"Items\\": [\\n    {\\n      \\"CreationTime\\": 1536751124000,\\n      \\"TableName\\": \\"it_table\\",\\n      \\"DataType\\": \\"String\\",\\n      \\"OdpsRiskLevelValue\\": 3,\\n      \\"InstanceId\\": 1,\\n      \\"RiskLevelId\\": 2,\\n      \\"RuleName\\": \\"name\\",\\n      \\"RuleId\\": 1,\\n      \\"Sensitive\\": false,\\n      \\"SensLevelName\\": \\"S2\\",\\n      \\"InstanceName\\": \\"rm-bp17t1htja573l5i8****\\",\\n      \\"RiskLevelName\\": \\"S2\\",\\n      \\"OdpsRiskLevelName\\": \\"S3\\",\\n      \\"Name\\": \\"gxdata\\",\\n      \\"TableId\\": 123,\\n      \\"Id\\": \\"268\\",\\n      \\"ProductCode\\": \\"MaxCompute\\",\\n      \\"RevisionStatus\\": 1,\\n      \\"RevisionId\\": 12,\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"personal sensitive data\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeColumnsResponse>\\r\\n\\t<RequestId>769FB3C1-F4C9-4******</RequestId>\\r\\n\\t<TotalCount>4</TotalCount>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<CurrentPage>1</CurrentPage>\\r\\n\\t<Items>\\r\\n\\t\\t<Owner>dtdep-239-***</Owner>\\r\\n\\t\\t<ProductCode>RDS</ProductCode>\\r\\n\\t\\t<RiskLevelId>2</RiskLevelId>\\r\\n\\t\\t<RiskLevelName>S2</RiskLevelName>\\r\\n\\t\\t<DepartName>***DemoCenter</DepartName>\\r\\n\\t\\t<Name>gxdata</Name>\\r\\n\\t\\t<CreationTime>1536751124000</CreationTime>\\r\\n\\t\\t<Sensitive>true</Sensitive>\\r\\n\\t\\t<Id>268</Id>\\r\\n\\t\\t<RuleId>1</RuleId>\\r\\n\\t\\t<RuleName>**规则</RuleName>\\r\\n\\t\\t<InstanceId>1</InstanceId>\\r\\n\\t\\t<TableId>123</TableId>\\r\\n\\t</Items>\\r\\n</DescribeColumnsResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询数据资产表中列的数据',
            'summary' => '调用DescribeColumns接口查询数据安全中心连接授权的MaxCompute、RDS等数据资产表中列的数据。',
            'description' => '本接口一般用于敏感数据资产信息表中列数据的查看，便于用户准确的对敏感数据进行分析。'."\n"
                ."\n"
                .'## 注意事项'."\n"
                .'DescribeColumns接口已修订为DescribeColumnsV2。建议您在开发应用程序时使用较新的版本DescribeColumnsV2。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeColumnsV2' => [
            'summary' => '调用DescribeColumns接口查询数据安全中心连接授权的MaxCompute、RDS等数据资产表中列的数据。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型，默认为**zh_cn**。'."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- **zh_cn**：中文（简体）'."\n"
                            .'- **en_us**：英文（美国）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索的关键词，支持模糊匹配。'."\n"
                            ."\n"
                            .'例如，输入**test**，会搜索出搜索项中包含**test**的全部数据信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'TableId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'MaxCompute、RDS等资产表中的列所属的资产表唯一标识ID。'."\n"
                            ."\n"
                            .'> 根据资产表的ID查询数据安全中心连接授权的数据资产表中列的数据，资产表ID可调用[DescribeTables](~~141709~~)接口获取。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '11132334',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产表中列数据命中的敏感数据识别规则的唯一标识ID。'."\n"
                            ."\n"
                            .'> 根据资产表中列数据命中的敏感数据识别规则的ID，查询数据安全中心连接授权的数据资产表中列的数据，敏感数据识别规则ID可调用[DescribeRules](~~141389~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '11122200',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表中列数据所属产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MaxCompute',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表中列数据所属的资产实例ID。'."\n"
                            ."\n"
                            .'> 根据数据资产表中列数据所属的资产实例的ID，查询数据安全中心连接授权的数据资产表中列的数据，资产实例ID可调用[DescribeInstances](~~141708~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表中列数据所属的资产实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-bp17t1htja573l5i8****',
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'it_table',
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表中列数据命中的敏感数据识别规则名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name',
                    ],
                ],
                [
                    'name' => 'SensLevelName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感等级名。取值：'."\n"
                            .'- **N/A**：未识别到敏感数据。'."\n"
                            .'- **S1**：1级敏感数据。'."\n"
                            .'- **S2**：2级敏感数据。'."\n"
                            .'- **S3**：3级敏感数据。'."\n"
                            .'- **S4**：4级敏感数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'S2',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RiskLevelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '敏感数据识别规则的风险等级ID。取值：'."\n"
                            .'- **1**：N/A。'."\n"
                            .'- **2**：S1。'."\n"
                            .'- **3**：S2。'."\n"
                            .'- **4**：S3。'."\n"
                            .'- **5**：S4。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'B1F2BB1F-04EC-5D36-B136-B4DE17FD8DE0',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'Items' => [
                                'description' => '数据表的列的识别结果列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据表的列的识别结果对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationTime' => [
                                            'description' => '数据资产表中列数据的创建时间毫秒数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1536751124000',
                                        ],
                                        'TableName' => [
                                            'description' => '订正目标列所属的表名。',
                                            'type' => 'string',
                                            'example' => 'it_table',
                                        ],
                                        'DataType' => [
                                            'description' => '数据资产表中列数据的数据类型。',
                                            'type' => 'string',
                                            'example' => 'varchar',
                                        ],
                                        'OdpsRiskLevelValue' => [
                                            'description' => '资产的风险等级编码。取值：'."\n"
                                                ."\n"
                                                .'- **1**：N/A。'."\n"
                                                .'- **2**：S1。'."\n"
                                                .'- **3**：S2。'."\n"
                                                .'- **4**：S3。'."\n"
                                                .'- **5**：S4。'."\n"
                                                ."\n"
                                                .'>返回值<=1，代表N/A。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'InstanceId' => [
                                            'description' => '数据资产表中列数据所属的资产实例ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1232122',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => '数据资产表中列数据的风险等级ID。取值：'."\n"
                                                .'- **1**：N/A。'."\n"
                                                .'- **2**：S1。'."\n"
                                                .'- **3**：S2。'."\n"
                                                .'- **4**：S3。'."\n"
                                                .'- **5**：S4。'."\n"
                                                ."\n"
                                                .'>返回值<=1，代表N/A。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4',
                                        ],
                                        'RuleName' => [
                                            'description' => '数据资产表中列数据命中的敏感数据识别规则名称。',
                                            'type' => 'string',
                                            'example' => 'name',
                                        ],
                                        'RuleId' => [
                                            'description' => '数据资产表中列数据命中的敏感数据识别规则ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1004',
                                        ],
                                        'Sensitive' => [
                                            'description' => '数据资产表中列数据是否包含敏感数据。取值：'."\n"
                                                ."\n"
                                                .'- true：数据资产表中列数据包含敏感数据。'."\n"
                                                .'- false：数据资产表中列数据不包含敏感数据。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'SensLevelName' => [
                                            'description' => '敏感等级名。取值：'."\n"
                                                .'- **N/A**：未识别到敏感数据。'."\n"
                                                .'- **S1**：1级敏感数据。'."\n"
                                                .'- **S2**：2级敏感数据。'."\n"
                                                .'- **S3**：3级敏感数据。'."\n"
                                                .'- **S4**：4级敏感数据。',
                                            'type' => 'string',
                                            'example' => 'S2',
                                        ],
                                        'InstanceName' => [
                                            'description' => '数据资产表中列数据所属的资产实例名称。',
                                            'type' => 'string',
                                            'example' => 'rm-1234',
                                        ],
                                        'RiskLevelName' => [
                                            'description' => '数据资产表中列数据的风险等级名称。取值：'."\n"
                                                .'- **N/A**：未识别到敏感数据。'."\n"
                                                .'- **S1**：1级敏感数据。'."\n"
                                                .'- **S2**：2级敏感数据。'."\n"
                                                .'- **S3**：3级敏感数据。'."\n"
                                                .'- **S4**：4级敏感数据。',
                                            'type' => 'string',
                                            'example' => 'S1',
                                        ],
                                        'OdpsRiskLevelName' => [
                                            'description' => '资产的风险等级名称。取值：'."\n"
                                                .'- **N/A**：未识别到敏感数据。'."\n"
                                                .'- **S1**：1级敏感数据。'."\n"
                                                .'- **S2**：2级敏感数据。'."\n"
                                                .'- **S3**：3级敏感数据。'."\n"
                                                .'- **S4**：4级敏感数据。',
                                            'type' => 'string',
                                            'example' => 'S4',
                                        ],
                                        'Name' => [
                                            'description' => '数据资产表中列的名称。',
                                            'type' => 'string',
                                            'example' => 'obj_id',
                                        ],
                                        'TableId' => [
                                            'description' => '数据资产表中列数据所属的资产表ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'Id' => [
                                            'description' => '数据资产表中列的唯一标识ID。',
                                            'type' => 'string',
                                            'example' => '111111',
                                        ],
                                        'ProductCode' => [
                                            'description' => '数据资产表中列数据所属产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                        'RevisionStatus' => [
                                            'description' => '订正状态。取值：'."\n"
                                                .'- 1：已订正。'."\n"
                                                .'- 0：未订正。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'RevisionId' => [
                                            'description' => '订正记录ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12',
                                        ],
                                        'ModelTags' => [
                                            'description' => '数据标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '数据标签对象。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Id' => [
                                                        'description' => '数据标签ID。取值：'."\n"
                                                            .'- **101**：个人敏感信息'."\n"
                                                            .'- **102**：个人信息'."\n"
                                                            .'- **107**：通用信息',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '101',
                                                    ],
                                                    'Name' => [
                                                        'description' => '数据标签名称。取值：'."\n"
                                                            .'- 个人敏感信息'."\n"
                                                            .'- 个人信息'."\n"
                                                            .'- 通用信息',
                                                        'type' => 'string',
                                                        'example' => 'personal sensitive information',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"B1F2BB1F-04EC-5D36-B136-B4DE17FD8DE0\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 12,\\n  \\"Items\\": [\\n    {\\n      \\"CreationTime\\": 1536751124000,\\n      \\"TableName\\": \\"it_table\\",\\n      \\"DataType\\": \\"varchar\\",\\n      \\"OdpsRiskLevelValue\\": 3,\\n      \\"InstanceId\\": 1232122,\\n      \\"RiskLevelId\\": 4,\\n      \\"RuleName\\": \\"name\\",\\n      \\"RuleId\\": 1004,\\n      \\"Sensitive\\": true,\\n      \\"SensLevelName\\": \\"S2\\",\\n      \\"InstanceName\\": \\"rm-1234\\",\\n      \\"RiskLevelName\\": \\"S1\\",\\n      \\"OdpsRiskLevelName\\": \\"S4\\",\\n      \\"Name\\": \\"obj_id\\",\\n      \\"TableId\\": 123,\\n      \\"Id\\": \\"111111\\",\\n      \\"ProductCode\\": \\"RDS\\",\\n      \\"RevisionStatus\\": 1,\\n      \\"RevisionId\\": 12,\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"personal sensitive information\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询数据资产表中列的数据V2',
        ],
        'DescribeOssObjects' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '82058',
                'abilityTreeNodes' => [
                    'FEATUREsddp2VFD4T',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh**：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索的关键词，支持模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RiskLevelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS存储对象的风险等级ID。取值：'."\n"
                            .'- **1**：N/A：未识别到敏感数据。'."\n"
                            .'- **2**：S1：1级敏感数据。'."\n"
                            .'- **3**：S2：2级敏感数据。'."\n"
                            .'- **4**：S3：3级敏感数据。'."\n"
                            .'- **5**：S4：4级敏感数据。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS存储对象命中的敏感数据识别规则ID。'."\n"
                            ."\n"
                            .'> 如果根据OSS存储对象命中的敏感数据识别规则的ID查询DSC连接授权的OSS的存储对象列表，敏感数据识别规则ID可调用**DescribeRules**接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1222',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS对象所属资产实例ID。'."\n"
                            ."\n"
                            .'> 如果根据OSS对象所属资产实例的ID查询DSC连接授权的OSS的存储对象列表，资产实例ID可调用**DescribeInstances**接口获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ins-2222',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表每页显示的数据最大条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ServiceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产所在的地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'LastScanTimeStart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最后一次扫描开始时间。格式：时间戳。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1536751124000',
                    ],
                ],
                [
                    'name' => 'LastScanTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最后一次扫描结束时间。格式：时间戳。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1536751124000',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业模版ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FileCategoryCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件分类编码。',
                        'type' => 'integer',
                        'format' => 'int64',
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
                            'CurrentPage' => [
                                'description' => '结果中当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'PageSize' => [
                                'description' => '结果中每页显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'TotalCount' => [
                                'description' => '结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Items' => [
                                'description' => 'OSS存储对象列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'OSS存储对象列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'description' => 'OSS存储对象所属资产实例ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1232122',
                                        ],
                                        'CategoryName' => [
                                            'description' => '文件类型名称。',
                                            'type' => 'string',
                                            'example' => 'MP4视频文件',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => 'OSS存储对象的风险等级ID。取值：'."\n"
                                                .'- **1**：N/A：未识别到敏感数据。'."\n"
                                                .'- **2**：S1：1级敏感数据。'."\n"
                                                .'- **3**：S2：2级敏感数据。'."\n"
                                                .'- **4**：S3：3级敏感数据。'."\n"
                                                .'- **5**：S4：4级敏感数据。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'RegionId' => [
                                            'description' => 'OSS存储对象所有者所属区域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-***',
                                        ],
                                        'FileId' => [
                                            'description' => 'OSS存储文件ID。',
                                            'type' => 'string',
                                            'example' => 'file-22***',
                                        ],
                                        'Size' => [
                                            'description' => '文件大小。单位：字节。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '20',
                                        ],
                                        'BucketName' => [
                                            'description' => 'Bucket名称。',
                                            'type' => 'string',
                                            'example' => 'oss-duplicate-***',
                                        ],
                                        'RiskLevelName' => [
                                            'description' => 'OSS存储对象的风险等级名称。',
                                            'type' => 'string',
                                            'example' => '中等风险等级',
                                        ],
                                        'Category' => [
                                            'description' => 'OSS存储对象类型。取值：**900001**（MP4视频文件）、**800015**（PDF文档）、**800005**（OSS配置文件）等。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '900001',
                                        ],
                                        'Name' => [
                                            'description' => 'OSS存储对象名称。',
                                            'type' => 'string',
                                            'example' => 'obj_id',
                                        ],
                                        'RuleCount' => [
                                            'description' => '命中规则数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'SensitiveCount' => [
                                            'description' => '命中字段数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '50',
                                        ],
                                        'Id' => [
                                            'description' => 'OSS存储对象的唯一标识ID。',
                                            'type' => 'string',
                                            'example' => '17383',
                                        ],
                                        'RuleList' => [
                                            'description' => '规则列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '搜索的关键词，支持模糊匹配。',
                                                        'type' => 'string',
                                                        'example' => '身份证',
                                                    ],
                                                    'RiskLevelId' => [
                                                        'description' => 'OSS存储对象的风险等级ID。取值：'."\n"
                                                            .'- **1**：N/A：未识别到敏感数据。'."\n"
                                                            .'- **2**：S1：1级敏感数据。'."\n"
                                                            .'- **3**：S2：2级敏感数据。'."\n"
                                                            .'- **4**：S3：3级敏感数据。'."\n"
                                                            .'- **5**：S4：4级敏感数据。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '2',
                                                    ],
                                                    'Count' => [
                                                        'description' => '规则的命中次数。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '100',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'FileCategoryCode' => [
                                            'description' => '文件分类编码。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'FileCategoryName' => [
                                            'description' => '文件分类名称。',
                                            'type' => 'string',
                                            'example' => 'text file',
                                        ],
                                        'LastModifiedTime' => [
                                            'description' => '上一次修改文件的时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1536751124000'."\n",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 12,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"InstanceId\\": 1232122,\\n      \\"CategoryName\\": \\"MP4视频文件\\",\\n      \\"RiskLevelId\\": 2,\\n      \\"RegionId\\": \\"cn-***\\",\\n      \\"FileId\\": \\"file-22***\\",\\n      \\"Size\\": 20,\\n      \\"BucketName\\": \\"oss-duplicate-***\\",\\n      \\"RiskLevelName\\": \\"中等风险等级\\",\\n      \\"Category\\": 900001,\\n      \\"Name\\": \\"obj_id\\",\\n      \\"RuleCount\\": 100,\\n      \\"SensitiveCount\\": 50,\\n      \\"Id\\": \\"17383\\",\\n      \\"RuleList\\": [\\n        {\\n          \\"Name\\": \\"身份证\\",\\n          \\"RiskLevelId\\": 2,\\n          \\"Count\\": 100\\n        }\\n      ],\\n      \\"FileCategoryCode\\": 1,\\n      \\"FileCategoryName\\": \\"text file\\",\\n      \\"LastModifiedTime\\": 1536751124000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeOssObjectsResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <PageSize>12</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Items>\\n        <InstanceId>1232122</InstanceId>\\n        <CategoryName>MP4视频文件</CategoryName>\\n        <RiskLevelId>2</RiskLevelId>\\n        <RegionId>cn-***</RegionId>\\n        <FileId>file-22***</FileId>\\n        <Size>20</Size>\\n        <BucketName>oss-duplicate-***</BucketName>\\n        <RiskLevelName>中等风险等级</RiskLevelName>\\n        <Category>900001</Category>\\n        <Name>obj_id</Name>\\n        <RuleCount>100</RuleCount>\\n        <SensitiveCount>50</SensitiveCount>\\n        <Id>17383</Id>\\n        <RuleList>\\n            <Name>身份证</Name>\\n            <RiskLevelId>2</RiskLevelId>\\n            <Count>100</Count>\\n        </RuleList>\\n    </Items>\\n</DescribeOssObjectsResponse>","errorExample":""}]',
            'title' => '查询OSS的存储对象列表',
            'summary' => '调用本接口查询连接授权的OSS的存储对象列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeOssObjectDetail' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS存储对象的唯一标识ID。'."\n"
                            ."\n"
                            .'> 调用[DescribeOssObjects](~~410152~~)接口获取ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '12345213',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => ' 结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'OssObjectDetail' => [
                                'description' => 'OSS存储对象的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'CategoryName' => [
                                        'description' => 'OSS存储对象类型名称。',
                                        'type' => 'string',
                                        'example' => 'Excel',
                                    ],
                                    'Name' => [
                                        'description' => 'OSS存储对象名称。',
                                        'type' => 'string',
                                        'example' => 'obj_id',
                                    ],
                                    'BucketName' => [
                                        'description' => 'OSS存储对象所属Bucket的名称。',
                                        'type' => 'string',
                                        'example' => 'bucke***',
                                    ],
                                    'RiskLevelName' => [
                                        'description' => 'OSS存储对象的风险等级名称。',
                                        'type' => 'string',
                                        'example' => 'S2',
                                    ],
                                    'RegionId' => [
                                        'description' => 'OSS存储对象所属区域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-***',
                                    ],
                                    'RuleList' => [
                                        'description' => 'OSS存储对象命中的敏感数据识别规则列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '命中敏感数据识别规则详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RiskLevelName' => [
                                                    'description' => 'OSS存储对象的风险等级名称。',
                                                    'type' => 'string',
                                                    'example' => 'S2',
                                                ],
                                                'CategoryName' => [
                                                    'description' => 'OSS存储对象类型名称。',
                                                    'type' => 'string',
                                                    'example' => 'Excel',
                                                ],
                                                'RiskLevelId' => [
                                                    'description' => 'OSS存储对象的风险等级ID。'."\n"
                                                        .'- **1**：未识别到敏感数据。'."\n"
                                                        .'- **2**：1级敏感数据。'."\n"
                                                        .'- **3**：2级敏感数据。'."\n"
                                                        .'- **4**：3级敏感数据。'."\n"
                                                        .'- **5**：4级敏感数据。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'Count' => [
                                                    'description' => '命中敏感数据识别规则的次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'RuleName' => [
                                                    'description' => '命中敏感数据识别规则的名称。',
                                                    'type' => 'string',
                                                    'example' => 'name',
                                                ],
                                                'ModelTags' => [
                                                    'description' => '命中识别模型的数据标签列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '命中识别模型的数据标签对象。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Id' => [
                                                                'description' => '识别模型的数据标签ID。'."\n"
                                                                    .'- **101**：个人敏感信息。'."\n"
                                                                    .'- **102**：个人信息。'."\n"
                                                                    .'- **103**：重要数据。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '101',
                                                            ],
                                                            'Name' => [
                                                                'description' => '识别模型的数据标签名称。'."\n"
                                                                    .'- 个人敏感信息。'."\n"
                                                                    .'- 个人信息。'."\n"
                                                                    .'- 重要数据。',
                                                                'type' => 'string',
                                                                'example' => 'personal sensitive data',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"OssObjectDetail\\": {\\n    \\"CategoryName\\": \\"Excel\\",\\n    \\"Name\\": \\"obj_id\\",\\n    \\"BucketName\\": \\"bucke***\\",\\n    \\"RiskLevelName\\": \\"S2\\",\\n    \\"RegionId\\": \\"cn-***\\",\\n    \\"RuleList\\": [\\n      {\\n        \\"RiskLevelName\\": \\"S2\\",\\n        \\"CategoryName\\": \\"Excel\\",\\n        \\"RiskLevelId\\": 2,\\n        \\"Count\\": 2,\\n        \\"RuleName\\": \\"name\\",\\n        \\"ModelTags\\": [\\n          {\\n            \\"Id\\": 101,\\n            \\"Name\\": \\"personal sensitive data\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeOssObjectDetail>\\r\\n\\t<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\r\\n\\t<OssObjectDetail>\\r\\n\\t\\t<RegionId>cn-***</RegionId>\\r\\n\\t\\t<BucketName>bucke***</BucketName>\\r\\n\\t\\t<RiskLevelName>中等风险等级</RiskLevelName>\\r\\n\\t\\t<Id>17383</Id>\\r\\n\\t\\t<RiskLevelId>2</RiskLevelId>\\r\\n\\t\\t<CategoryName>Excel文件</CategoryName>\\r\\n\\t\\t<Name>obj_id</Name>\\r\\n\\t\\t<RuleList>\\r\\n\\t\\t\\t<RuleName>***规则</RuleName>\\r\\n\\t\\t\\t<Count>10</Count>\\r\\n\\t\\t</RuleList>\\r\\n\\t</OssObjectDetail>\\r\\n</DescribeOssObjectDetail>\\t\\r\\n","errorExample":""}]',
            'title' => '查询OSS存储对象的详细信息',
            'summary' => '调用本接口查询数据安全中心连接授权的OSS的单个存储对象的详细信息。',
            'description' => '本接口一般用于对OSS存储对象详细信息的查询，便于对OSS敏感资产信息准确定位。'."\n"
                ."\n"
                .'## 注意事项'."\n"
                .'DescribeOssObjectDetail接口已修订为DescribeOssObjectDetailV2。建议您在开发应用程序时使用较新的版本DescribeOssObjectDetailV2。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeOssObjectDetailV2' => [
            'summary' => '调用本接口查询数据安全中心连接授权的OSS的单个存储对象的详细信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和返回消息的语言类型。默认值为**zh_cn**。取值'."\n"
                            ."\n"
                            .'- **zh_cn**：简体中文'."\n"
                            .'- **en_us**：英文（美国）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS存储对象的唯一标识ID。'."\n"
                            ."\n"
                            .'> 调用[DescribeOssObjects](~~410152~~)接口获取ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12300',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'OssObjectDetail' => [
                                'description' => 'OSS存储对象的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'CategoryName' => [
                                        'description' => 'OSS存储对象类型名称。',
                                        'type' => 'string',
                                        'example' => 'Excel file',
                                    ],
                                    'Name' => [
                                        'description' => 'OSS存储对象名称。',
                                        'type' => 'string',
                                        'example' => 'obj_id',
                                    ],
                                    'BucketName' => [
                                        'description' => 'OSS存储对象所属Bucket的名称。',
                                        'type' => 'string',
                                        'example' => 'lv-demo',
                                    ],
                                    'RiskLevelName' => [
                                        'description' => 'OSS存储对象的风险等级名称。',
                                        'type' => 'string',
                                        'example' => 'S1',
                                    ],
                                    'RegionId' => [
                                        'description' => 'OSS存储对象所属区域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-zhangjiakou',
                                    ],
                                    'RuleList' => [
                                        'description' => 'OSS存储对象命中的敏感数据识别规则列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '命中敏感数据识别规则详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RiskLevelName' => [
                                                    'description' => 'OSS存储对象的风险等级名称。',
                                                    'type' => 'string',
                                                    'example' => 'S1',
                                                ],
                                                'CategoryName' => [
                                                    'description' => 'OSS存储对象类型名称。',
                                                    'type' => 'string',
                                                    'example' => 'Excel',
                                                ],
                                                'RiskLevelId' => [
                                                    'description' => 'OSS存储对象的风险等级ID。'."\n"
                                                        .'- **1**：未识别到敏感数据。'."\n"
                                                        .'- **2**：1级敏感数据。'."\n"
                                                        .'- **3**：2级敏感数据。'."\n"
                                                        .'- **4**：3级敏感数据。'."\n"
                                                        .'- **5**：4级敏感数据。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'Count' => [
                                                    'description' => '命中敏感数据识别规则的次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'RuleName' => [
                                                    'description' => '命中敏感数据识别规则的名称。',
                                                    'type' => 'string',
                                                    'example' => 'name',
                                                ],
                                                'ModelTags' => [
                                                    'description' => '数据标签列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '数据标签对象。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Id' => [
                                                                'description' => '识别模型的数据标签ID。'."\n"
                                                                    .'- **101**：个人敏感信息。'."\n"
                                                                    .'- **102**：个人信息。'."\n"
                                                                    .'- **103**：重要数据。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '101',
                                                            ],
                                                            'Name' => [
                                                                'description' => '识别模型的数据标签名称。'."\n"
                                                                    .'- 个人敏感信息。'."\n"
                                                                    .'- 个人信息。'."\n"
                                                                    .'- 重要数据。',
                                                                'type' => 'string',
                                                                'example' => 'personal sensitive data',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"OssObjectDetail\\": {\\n    \\"CategoryName\\": \\"Excel file\\",\\n    \\"Name\\": \\"obj_id\\",\\n    \\"BucketName\\": \\"lv-demo\\",\\n    \\"RiskLevelName\\": \\"S1\\",\\n    \\"RegionId\\": \\"cn-zhangjiakou\\",\\n    \\"RuleList\\": [\\n      {\\n        \\"RiskLevelName\\": \\"S1\\",\\n        \\"CategoryName\\": \\"Excel\\",\\n        \\"RiskLevelId\\": 2,\\n        \\"Count\\": 2,\\n        \\"RuleName\\": \\"name\\",\\n        \\"ModelTags\\": [\\n          {\\n            \\"Id\\": 101,\\n            \\"Name\\": \\"personal sensitive data\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询OSS存储对象的详细信息V2',
            'description' => '本接口一般用于对OSS存储对象详细信息的查询，便于对OSS敏感资产信息准确定位。',
        ],
        'DescribePackages' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索的关键词，支持模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产包所属产品ID。'."\n"
                            ."\n"
                            .'> 如果根据数据资产包所属产品ID查询SDPP连接授权的MaxCompute的数据资产包列表，产品ID可调用**DescribeDataAssets**接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2566600',
                    ],
                ],
                [
                    'name' => 'RiskLevelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产包的风险等级ID。'."\n"
                            .'- **1**：N/A：未识别到敏感数据。'."\n"
                            .'- **2**：S1：1级敏感数据。'."\n"
                            .'- **3**：S2：2级敏感数据。'."\n"
                            .'- **4**：S3：3级敏感数据。'."\n"
                            .'- **5**：S4：4级敏感数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产包命中的敏感数据识别规则ID。'."\n"
                            ."\n"
                            .'> 如果根据数据资产包命中的敏感数据识别规则ID查询SDPP连接授权的MaxCompute的数据资产包列表，敏感数据识别规则ID可调用**DescribeRules**接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '266666',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产包所属资产实例ID。'."\n"
                            ."\n"
                            .'> 如果根据数据资产包所属资产实例的ID查询SDPP连接授权的MaxCompute的数据资产包列表，资产实例ID可调用**DescribeInstances**接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12321',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，每页显示的数据最大条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。',
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
                            'CurrentPage' => [
                                'description' => '结果中显示的当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'PageSize' => [
                                'description' => '结果中每页显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'Items' => [
                                'description' => '数据资产包信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreationTime' => [
                                            'description' => '数据资产包创建时间。格式：时间戳。单位：毫秒',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1536751124000',
                                        ],
                                        'Sensitive' => [
                                            'description' => '数据资产包中是否包含敏感数据。'."\n"
                                                ."\n"
                                                .'- true：包含。'."\n"
                                                .'- false：不包含。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Owner' => [
                                            'description' => '数据资产包所属者账号。',
                                            'type' => 'string',
                                            'example' => 'cou-2221',
                                        ],
                                        'RiskLevelName' => [
                                            'description' => '资产包的风险等级名称。',
                                            'type' => 'string',
                                            'example' => '最高风险等级',
                                        ],
                                        'InstanceId' => [
                                            'description' => '数据资产包所属的资产实例ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '223453332',
                                        ],
                                        'TotalCount' => [
                                            'description' => '数据资产包中包含数据的总数。例如：MaxCompute的数据表总数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '321',
                                        ],
                                        'Name' => [
                                            'description' => '数据资产包名称。',
                                            'type' => 'string',
                                            'example' => 'gxdata',
                                        ],
                                        'SensitiveCount' => [
                                            'description' => '数据资产包中包含的敏感数据总数。例如：MaxCompute的敏感数据表总数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '123',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => '数据资产包的风险等级ID。'."\n"
                                                .'- **1**：N/A：未识别到敏感数据。'."\n"
                                                .'- **2**：S1：1级敏感数据。'."\n"
                                                .'- **3**：S2：2级敏感数据。'."\n"
                                                .'- **4**：S3：3级敏感数据。'."\n"
                                                .'- **5**：S4：4级敏感数据。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4',
                                        ],
                                        'Id' => [
                                            'description' => '数据资产包的唯一标识ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '111111',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 12,\\n  \\"Items\\": [\\n    {\\n      \\"CreationTime\\": 1536751124000,\\n      \\"Sensitive\\": true,\\n      \\"Owner\\": \\"cou-2221\\",\\n      \\"RiskLevelName\\": \\"最高风险等级\\",\\n      \\"InstanceId\\": 223453332,\\n      \\"TotalCount\\": 321,\\n      \\"Name\\": \\"gxdata\\",\\n      \\"SensitiveCount\\": 123,\\n      \\"RiskLevelId\\": 4,\\n      \\"Id\\": 111111\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribePackages>\\r\\n\\t<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\r\\n\\t<TotalCount>4</TotalCount>\\r\\n\\t<PageSize>10</PageSize>\\r\\n\\t<CurrentPage>1</CurrentPage>\\r\\n\\t<Items>\\r\\n\\t\\t<Owner>dtdep-239-******</Owner>\\r\\n\\t\\t<RiskLevelId>2</RiskLevelId>\\r\\n\\t\\t<RiskLevelName>中等风险等级</RiskLevelName>\\r\\n\\t\\t<DepartName>***DemoCenter</DepartName>\\r\\n\\t\\t<Name>gxdata</Name>\\r\\n\\t\\t<CreationTime>1536751124000</CreationTime>\\r\\n\\t\\t<Sensitive>true</Sensitive>\\r\\n\\t\\t<Id>268</Id>\\r\\n\\t\\t<InstanceId>1</InstanceId>\\r\\n\\t</Items>\\r\\n</DescribePackages>\\t\\r\\n","errorExample":""}]',
            'title' => '查询数据包的信息',
            'summary' => '调用本接口查询已完成扫描授权的MaxCompute数据包的信息，例如数据包的名称、数据包所属者的账号、数据包的风险等级等。',
            'description' => '本接口一般用于MaxCompute数据包列表查询，便于搜索和敏感信息概览。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeCategoryTemplateList' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '81997',
                'abilityTreeNodes' => [
                    'FEATUREsddpIUNEZP',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型，默认为**zh_cn**。'."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- **zh_cn**：中文（简体）'."\n"
                            .'- **en_us**：英文（美国）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页数量。默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'UsageScenario',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接口调用场景，默认为**null**。'."\n"
                            .'取值：'."\n"
                            .'- **null**：旧版本'."\n"
                            .'- **0**：旧版本'."\n"
                            .'- **1**：新版本',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回值对象。',
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '分页查询时的页码。默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '8491DBFD-48C0-4E11-B6FC-6F38921244A9',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时设置的每页行数。默认值：10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '返回的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'Items' => [
                                'description' => '行业模版列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '行业模板对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CurrentRiskLevel' => [
                                            'description' => '当前风险等级ID。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'Status' => [
                                            'description' => '行业模板状态。取值：'."\n"
                                                .'- **0**：关闭状态。'."\n"
                                                .'- **1**：启用状态，用户当前主模板。'."\n"
                                                .'- **2**：活跃状态，启用、活跃状态的模板均可应用于识别任务。'."\n"
                                                .'- **3**：通用识别模型模板状态。'."\n"
                                                ."\n"
                                                .'> 启用和活跃状态的模板，可作为[DescribeDataObjects](~~2399253~~)的行业模板ID入参。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Type' => [
                                            'description' => '行业模板类型。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '6',
                                        ],
                                        'SupportEdit' => [
                                            'description' => '行业模板是否支持编辑。取值：'."\n"
                                                .'- **0**：不支持。'."\n"
                                                .'- **1**：支持。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'MaxCategoryLevel' => [
                                            'description' => '最大分类层级。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'Name' => [
                                            'description' => '行业模板名称。',
                                            'type' => 'string',
                                            'example' => 'built-in template',
                                        ],
                                        'MaxRiskLevel' => [
                                            'description' => '最大风险等级ID。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'Id' => [
                                            'description' => '行业模板的唯一标志ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'Description' => [
                                            'description' => '行业模板的描述信息。',
                                            'type' => 'string',
                                            'example' => 'description',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '行业模板创建时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582992000000',
                                        ],
                                        'GmtModified' => [
                                            'description' => '行业模板修改时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1545277010000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"8491DBFD-48C0-4E11-B6FC-6F38921244A9\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 12,\\n  \\"Items\\": [\\n    {\\n      \\"CurrentRiskLevel\\": 5,\\n      \\"Status\\": 1,\\n      \\"Type\\": 6,\\n      \\"SupportEdit\\": 0,\\n      \\"MaxCategoryLevel\\": 2,\\n      \\"Name\\": \\"built-in template\\",\\n      \\"MaxRiskLevel\\": 5,\\n      \\"Id\\": 1,\\n      \\"Description\\": \\"description\\",\\n      \\"GmtCreate\\": 1582992000000,\\n      \\"GmtModified\\": 1545277010000\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询行业模板列表',
            'summary' => '调用本接口查询行业模板列表。',
        ],
        'DescribeCategoryTemplateRuleList' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '81998',
                'abilityTreeNodes' => [
                    'FEATUREsddpIUNEZP',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认值为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文（简体）。'."\n"
                            .'- **en_us**：英文（美国）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置每页显示模板规则的条数，默认值为**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置当前页的页码，默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板规则的开启状态，默认值为**null**。取值：'."\n"
                            .'- **0**：表示未开启状态。'."\n"
                            .'- **1**：表示开启状态。'."\n"
                            .'- **null**：表示全部状态，包括：开启和未开启状态。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RiskLevelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板规则的风险等级。取值范围为**1**~**11**，默认值为**null**。取值：'."\n"
                            .'- **1**：表示无风险。'."\n"
                            .'- **2**：表示S1级风险等级。'."\n"
                            .'- **3**：表示S2级风险等级。'."\n"
                            .'- **4**：表示S3级风险等级。'."\n"
                            .'- **5**：表示S4级风险等级。'."\n"
                            .'- **6**：表示S5级风险等级。'."\n"
                            .'- **7**：表示S6级风险等级。'."\n"
                            .'- **8**：表示S7级风险等级。'."\n"
                            .'- **9**：表示S8级风险等级。'."\n"
                            .'- **10**：表示S9级风险等级。'."\n"
                            .'- **11**：表示S10级风险等级。'."\n"
                            .'- **null**：表示全部风险等级，包括：无风险、S1、S2、S3、S4、S5、S6、S7、S8、S9和S10级风险等级。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
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
                            'CurrentPage' => [
                                'description' => '当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '返回结果的请求ID。',
                                'type' => 'string',
                                'example' => '136082B3-B21F-5E9D-B68E-991FFD205D24',
                            ],
                            'PageSize' => [
                                'description' => '每页显示模板规则的条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '当前模板的规则总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Items' => [
                                'description' => '模板规则列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '模板规则的开启状态。取值：'."\n"
                                                .'- **0**：表示未开启状态。'."\n"
                                                .'- **1**：表示开启状态。'."\n"
                                                .'- **null**：表示全部状态，包括：开启和未开启状态。'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'IdentificationScope' => [
                                            'description' => '模板规则用于扫描数据的范围。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个扫描数据的范围，包含以下字段：'."\n"
                                                ."\n"
                                                .'- **Asset**：String类型，表示资产类型，包括：RDS、DRDS、PolarDB、OTS、ADB、OceanBase。'."\n"
                                                .'- **Content**：String类型，表示扫描资产的范围。JSON数组中的每个元素是一个扫描数据的范围，包含以下字段：'."\n"
                                                .'    '."\n"
                                                .'    - **Range**：String类型，表示匹配范围，包括：Instance、database、table、column、project（只适用于MaxCompute资产类型）、bucket（只适用于OSS资产类型）、object（只适用于OSS资产类型）。'."\n"
                                                .'    - **Operator**：String类型，表示匹配条件，包括：equals（表示等于）、 regex（表示正则匹配）、prefix（表示前缀匹配）、suffix（表示后缀匹配）。'."\n"
                                                ."\n"
                                                .'    - **Value**：String类型，表示匹配内容。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '[{"Asset":"RDS","Content":[{"Range":"database","Operator":"regex","Value":"register"}]},{"Asset":"RDS","Content":[{"Range":"table","Operator":"regex","Value":"register"}]},{"Asset":"RDS","Content":[{"Range":"column","Operator":"regex","Value":"register"}]},{"Asset":"ODPS","Content":[{"Range":"project","Operator":"regex","Value":"register"}]},{"Asset":"ODPS","Content":[{"Range":"table","Operator":"regex","Value":"register"}]},{"Asset":"ODPS","Content":[{"Range":"column","Operator":"regex","Value":"register"}]}]',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => '模板规则的风险等级。取值范围为**1**~**11**。取值：'."\n"
                                                .'- **1**：表示无风险。'."\n"
                                                .'- **2**：表示S1级风险等级。'."\n"
                                                .'- **3**：表示S2级风险等级。'."\n"
                                                .'- **4**：表示S3级风险等级。'."\n"
                                                .'- **5**：表示S4级风险等级。'."\n"
                                                .'- **6**：表示S5级风险等级。'."\n"
                                                .'- **7**：表示S6级风险等级。'."\n"
                                                .'- **8**：表示S7级风险等级。'."\n"
                                                .'- **9**：表示S8级风险等级。'."\n"
                                                .'- **10**：表示S9级风险等级。'."\n"
                                                .'- **11**：表示S10级风险等级。'."\n"
                                                .'- **null**：表示全部风险等级，包括：无风险、S1、S2、S3、S4、S5、S6、S7、S8、S9和S10级风险等级。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'Description' => [
                                            'description' => '规则描述。',
                                            'type' => 'string',
                                            'example' => '用于识别身份证号的模板规则',
                                        ],
                                        'IdentificationRuleIds' => [
                                            'description' => '关联的原子模型ID列表，通过半角逗号（,）分隔。',
                                            'type' => 'string',
                                            'example' => '1001,1002',
                                        ],
                                        'Name' => [
                                            'description' => '模板规则名字。',
                                            'type' => 'string',
                                            'example' => '身份证号',
                                        ],
                                        'Id' => [
                                            'description' => '该模板规则的唯一标识ID。',
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
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"136082B3-B21F-5E9D-B68E-991FFD205D24\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 10,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"IdentificationScope\\": \\"[{\\\\\\"Asset\\\\\\":\\\\\\"RDS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"database\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]},{\\\\\\"Asset\\\\\\":\\\\\\"RDS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"table\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]},{\\\\\\"Asset\\\\\\":\\\\\\"RDS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"column\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]},{\\\\\\"Asset\\\\\\":\\\\\\"ODPS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"project\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]},{\\\\\\"Asset\\\\\\":\\\\\\"ODPS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"table\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]},{\\\\\\"Asset\\\\\\":\\\\\\"ODPS\\\\\\",\\\\\\"Content\\\\\\":[{\\\\\\"Range\\\\\\":\\\\\\"column\\\\\\",\\\\\\"Operator\\\\\\":\\\\\\"regex\\\\\\",\\\\\\"Value\\\\\\":\\\\\\"register\\\\\\"}]}]\\",\\n      \\"RiskLevelId\\": 2,\\n      \\"Description\\": \\"用于识别身份证号的模板规则\\",\\n      \\"IdentificationRuleIds\\": \\"1001,1002\\",\\n      \\"Name\\": \\"身份证号\\",\\n      \\"Id\\": 100\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeCategoryTemplateRuleListResponse>\\n    <CurrentPage>1</CurrentPage>\\n    <RequestId>136082B3-B21F-5E9D-B68E-991FFD205D24</RequestId>\\n    <PageSize>10</PageSize>\\n    <TotalCount>10</TotalCount>\\n    <Items>\\n        <Status>1</Status>\\n        <IdentificationScope>[{\\"Asset\\":\\"RDS\\",\\"Content\\":[{\\"Range\\":\\"database\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]},{\\"Asset\\":\\"RDS\\",\\"Content\\":[{\\"Range\\":\\"table\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]},{\\"Asset\\":\\"RDS\\",\\"Content\\":[{\\"Range\\":\\"column\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]},{\\"Asset\\":\\"ODPS\\",\\"Content\\":[{\\"Range\\":\\"project\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]},{\\"Asset\\":\\"ODPS\\",\\"Content\\":[{\\"Range\\":\\"table\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]},{\\"Asset\\":\\"ODPS\\",\\"Content\\":[{\\"Range\\":\\"column\\",\\"Operator\\":\\"regex\\",\\"Value\\":\\"register\\"}]}]</IdentificationScope>\\n        <RiskLevelId>2</RiskLevelId>\\n        <Description>用于识别身份证号的模板规则</Description>\\n        <IdentificationRuleIds>1001,1002</IdentificationRuleIds>\\n        <Name>身份证号</Name>\\n        <Id>100</Id>\\n    </Items>\\n</DescribeCategoryTemplateRuleListResponse>","errorExample":""}]',
            'title' => '查询分类分级模板的规则列表',
            'summary' => '分页获取分类分级模板的规则列表。',
            'description' => '本接口一般用于获取当前使用模板的规则列表，便于了解当前使用模板的规则详情。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribeTemplateAllRules' => [
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
            'systemTags' => [
                'abilityTreeCode' => '82084',
                'abilityTreeNodes' => [
                    'FEATUREsddpIUNEZP',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业模版ID。'."\n"
                            ."\n"
                            .'>如不填本参数，默认返回主用模板的模型列表。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-4******',
                            ],
                            'RuleList' => [
                                'description' => '模型对象列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '模型对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '模型名字。',
                                            'type' => 'string',
                                            'example' => 'Model Name',
                                        ],
                                        'Id' => [
                                            'description' => '模型唯一ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '376',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-4******\\",\\n  \\"RuleList\\": [\\n    {\\n      \\"Name\\": \\"Model Name\\",\\n      \\"Id\\": 376\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询行业模板所有模型列表',
            'summary' => '调用本接口查询行业模板所有模型列表。',
        ],
        'DescribeDocTypes' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-4******',
                            ],
                            'DocTypeList' => [
                                'description' => '结果中的OSS文件类型列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '文件类型对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Code' => [
                                            'description' => '文件类型编码。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100001',
                                        ],
                                        'Name' => [
                                            'description' => '文件类型名称。',
                                            'type' => 'string',
                                            'example' => 'C/C++ Source Code',
                                        ],
                                        'Id' => [
                                            'description' => '文件类型的唯一ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-4******\\",\\n  \\"DocTypeList\\": [\\n    {\\n      \\"Code\\": 100001,\\n      \\"Name\\": \\"C/C++ Source Code\\",\\n      \\"Id\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询支持识别的OSS文件类型列表',
            'summary' => '调用本接口查询支持识别的OSS文件类型列表。',
        ],
        'DescribeDataObjects' => [
            'summary' => '调用本接口查询数据表、文件的数据识别结果。',
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
                'abilityTreeCode' => '149455',
                'abilityTreeNodes' => [
                    'FEATUREsddp2VFD4T',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProductIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '建议填写，待查询的产品ID列表，多个用逗号分隔。取值：'."\n"
                            .'- **1**：MaxCompute'."\n"
                            .'- **2**：OSS'."\n"
                            .'- **3**：ADB-MYSQL'."\n"
                            .'- **4**：TableStore'."\n"
                            .'- **5**：RDS'."\n"
                            .'- **6**：SELF_DB'."\n"
                            .'- **7**：PolarDB-X'."\n"
                            .'- **8**：PolarDB'."\n"
                            .'- **9**：ADB-PG'."\n"
                            .'- **10**：OceanBase'."\n"
                            .'- **11**：MongoDB'."\n"
                            .'- **25**：Redis'."\n"
                            ."\n"
                            .'> OSS与其他产品互斥，即如果待查询中有OSS，则不能有其他产品列表；默认查询的为非OSS产品。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1,5',
                    ],
                ],
                [
                    'name' => 'ParentCategoryIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询模板的父分类列表，多个父分类ID用逗号分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '234,236,238',
                    ],
                ],
                [
                    'name' => 'QueryName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的数据对象关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 't_sddp_selfmysql_pers0',
                    ],
                ],
                [
                    'name' => 'ServiceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产所在的地域。取值：'."\n"
                            .'- **cn-beijing**：华北2（北京）。'."\n"
                            .'- **cn-zhangjiakou**：华北3（张家口）。'."\n"
                            .'- **cn-huhehaote**：华北5（呼和浩特）。'."\n"
                            .'- **cn-hangzhou**：华东1（杭州）。'."\n"
                            .'- **cn-shanghai**：华东2（上海）。'."\n"
                            .'- **cn-shenzhen**：华南1（深圳）。'."\n"
                            .'- **cn-hongkong**：中国香港。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业模版ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeCategoryTemplateList](~~2399296~~)获取行业模板标识ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产所属的数据域ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ModelTagIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的数据标签，多个用逗号分隔。取值：'."\n"
                            .'- **101**：个人敏感信息。'."\n"
                            .'- **102**：个人信息。'."\n"
                            .'- **107**：通用信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '101,102',
                    ],
                ],
                [
                    'name' => 'RiskLevels',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定要查询的数据资产的风险等级，存在多个时使用英文逗号（,）隔开。'."\n"
                            .'- **2**：S1，弱风险等级。'."\n"
                            .'- **3**：S2，中等风险等级。'."\n"
                            .'- **4**：S3，高风险等级。'."\n"
                            .'- **5**：S4，最高风险等级。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资产实例ID关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8vb54hn2g9j191ddz',
                    ],
                ],
                [
                    'name' => 'ModelIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业模板的模型ID，多个ID通过逗号分隔。'."\n"
                            .'> 您可以通过调用[DescribeTemplateAllRules](~~2536491~~)获取行业模板模型标识ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '101',
                    ],
                ],
                [
                    'name' => 'FileType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持识别的OSS文件类型。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeDocTypes](~~2536492~~)获取支持识别的OSS文件类型，取返回值中的Code字段值，本参数仅对OSS类型的资产查询有效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100001',
                    ],
                ],
                [
                    'name' => 'FileCategoryCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件分类编码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MemberAccount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '成员账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '**********8103',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '此参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'E6F6460E-4330-549A-BD89-C183FB17571E',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '查询结果总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '21',
                            ],
                            'Items' => [
                                'description' => '数据对象列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据对象列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '数据对象的名称。',
                                            'type' => 'string',
                                            'example' => 't_sddp_selfmysql_pers0',
                                        ],
                                        'Id' => [
                                            'description' => '数据对象的唯一标识ID。',
                                            'type' => 'string',
                                            'example' => '20000',
                                        ],
                                        'TemplateId' => [
                                            'description' => '行业模版ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'ProductId' => [
                                            'description' => '数据对象所属的产品名称对应的ID。取值：'."\n"
                                                .'- **1**：MaxCompute'."\n"
                                                .'- **2**：OSS'."\n"
                                                .'- **3**：ADB-MYSQL'."\n"
                                                .'- **4**：TableStore'."\n"
                                                .'- **5**：RDS'."\n"
                                                .'- **6**：SELF_DB'."\n"
                                                .'- **7**：PolarDB-X'."\n"
                                                .'- **8**：PolarDB'."\n"
                                                .'- **9**：ADB-PG'."\n"
                                                .'- **10**：OceanBase'."\n"
                                                .'- **11**：MongoDB'."\n"
                                                .'- **25**：Redis',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5',
                                        ],
                                        'InstanceDescription' => [
                                            'description' => '数据对象的实例描述。',
                                            'type' => 'string',
                                            'example' => 'instance description',
                                        ],
                                        'ProductCode' => [
                                            'description' => '数据对象所属的产品名称。取值：'."\n"
                                                .'- **MaxCompute**'."\n"
                                                .'- **OSS**'."\n"
                                                .'- **ADB-MYSQL**'."\n"
                                                .'- **TableStore**'."\n"
                                                .'- **RDS**'."\n"
                                                .'- **SELF_DB**'."\n"
                                                .'- **PolarDB-X**'."\n"
                                                .'- **PolarDB**'."\n"
                                                .'- **ADB-PG**'."\n"
                                                .'- **OceanBase**'."\n"
                                                .'- **MongoDB**'."\n"
                                                .'- **Redis**',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                        'InstanceId' => [
                                            'description' => '数据资产实例ID。',
                                            'type' => 'string',
                                            'example' => 'rm-12*****',
                                        ],
                                        'LastScanTime' => [
                                            'description' => '最新扫描的时间戳，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1687676649830',
                                        ],
                                        'SensitiveCount' => [
                                            'description' => '敏感数据数量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ObjectType' => [
                                            'description' => '数据对象类型。',
                                            'type' => 'string',
                                            'example' => 'text type',
                                        ],
                                        'Path' => [
                                            'description' => '数据对象的路径。',
                                            'type' => 'string',
                                            'example' => 'rm-12**.db_***',
                                        ],
                                        'RegionName' => [
                                            'description' => '地域名称。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Categories' => [
                                            'description' => '敏感数据所数据的行业分类列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '敏感数据所数据的行业分类列表，多个分类通过逗号分隔。',
                                                'type' => 'string',
                                                'example' => 'general sensitive information',
                                            ],
                                        ],
                                        'ModelTags' => [
                                            'description' => '数据标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '数据标签列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Id' => [
                                                        'description' => '数据标签ID。取值：'."\n"
                                                            .'- **101**：个人敏感信息。'."\n"
                                                            .'- **102**：个人信息。'."\n"
                                                            .'- **107**：通用信息。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '101',
                                                    ],
                                                    'Name' => [
                                                        'description' => '数据标签名称。取值：'."\n"
                                                            .'- **个人敏感信息。**'."\n"
                                                            .'- **个人信息。**'."\n"
                                                            .'- **通用信息。**',
                                                        'type' => 'string',
                                                        'example' => '个人敏感信息',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'RuleList' => [
                                            'description' => '命中的识别模型列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '命中的识别模型列表。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'RuleId' => [
                                                        'description' => '识别模型ID。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1080',
                                                    ],
                                                    'RuleName' => [
                                                        'description' => '识别模型名称。',
                                                        'type' => 'string',
                                                        'example' => 'name',
                                                    ],
                                                    'RiskLevelId' => [
                                                        'description' => '敏感数据识别规则的风险等级ID。取值：'."\n"
                                                            .'- **1**：N/A：未识别到敏感数据。'."\n"
                                                            .'- **2**：S1：1级敏感数据。'."\n"
                                                            .'- **3**：S2：2级敏感数据。'."\n"
                                                            .'- **4**：S3：3级敏感数据。'."\n"
                                                            .'- **5**：S4：4级敏感数据。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '2',
                                                    ],
                                                    'RiskLevelName' => [
                                                        'description' => '数据资产表的风险等级名称。取值：'."\n"
                                                            .'- **N/A**：未识别到敏感数据。'."\n"
                                                            .'- **S1**：1级敏感数据。'."\n"
                                                            .'- **S2**：2级敏感数据。'."\n"
                                                            .'- **S3**：3级敏感数据。'."\n"
                                                            .'- **S4**：4级敏感数据。',
                                                        'type' => 'string',
                                                        'example' => 'S1',
                                                    ],
                                                    'RuleCount' => [
                                                        'description' => '命中识别模型数量。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '590',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ObjectFileCategory' => [
                                            'description' => '文件分类名称。',
                                            'type' => 'string',
                                            'example' => 'text file',
                                        ],
                                        'MemberAccount' => [
                                            'description' => '成员账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '**********8103',
                                        ],
                                        'LastModifiedTime' => [
                                            'description' => '文件最新更新时间，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1687676649830',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"E6F6460E-4330-549A-BD89-C183FB17571E\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 21,\\n  \\"Items\\": [\\n    {\\n      \\"Name\\": \\"t_sddp_selfmysql_pers0\\",\\n      \\"Id\\": \\"20000\\",\\n      \\"TemplateId\\": 1,\\n      \\"ProductId\\": 5,\\n      \\"InstanceDescription\\": \\"instance description\\",\\n      \\"ProductCode\\": \\"RDS\\",\\n      \\"InstanceId\\": \\"rm-12*****\\",\\n      \\"LastScanTime\\": 1687676649830,\\n      \\"SensitiveCount\\": 1,\\n      \\"ObjectType\\": \\"text type\\",\\n      \\"Path\\": \\"rm-12**.db_***\\",\\n      \\"RegionName\\": \\"cn-hangzhou\\",\\n      \\"Categories\\": [\\n        \\"general sensitive information\\"\\n      ],\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"个人敏感信息\\"\\n        }\\n      ],\\n      \\"RuleList\\": [\\n        {\\n          \\"RuleId\\": 1080,\\n          \\"RuleName\\": \\"name\\",\\n          \\"RiskLevelId\\": 2,\\n          \\"RiskLevelName\\": \\"S1\\",\\n          \\"RuleCount\\": 590\\n        }\\n      ],\\n      \\"ObjectFileCategory\\": \\"text file\\",\\n      \\"MemberAccount\\": 0,\\n      \\"LastModifiedTime\\": 1687676649830\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询数据对象列表',
        ],
        'DescribeDataObjectColumnDetail' => [
            'summary' => '调用本接口查询数据表的列识别结果。',
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
                'abilityTreeCode' => '149483',
                'abilityTreeNodes' => [
                    'FEATUREsddp2VFD4T',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据对象所属的产品名称对应的ID。取值：'."\n"
                            .'- **1**：MaxCompute'."\n"
                            .'- **2**：OSS'."\n"
                            .'- **3**：ADB-MYSQL'."\n"
                            .'- **4**：TableStore'."\n"
                            .'- **5**：RDS'."\n"
                            .'- **6**：SELF_DB'."\n"
                            .'- **7**：PolarDB-X'."\n"
                            .'- **8**：PolarDB'."\n"
                            .'- **9**：ADB-PG'."\n"
                            .'- **10**：OceanBase'."\n"
                            .'- **11**：MongoDB'."\n"
                            .'- **25**：Redis',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置要查询的数据对象的唯一标识ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeDataObjects](~~2399253~~)获取标识ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '318248',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业模版ID。'."\n"
                            .'> 您可以通过调用[DescribeDataObjects](~~2399253~~)获取行业模板标识ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '分页查询时，设置当前页面的页码。默认值：**1**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '8C8036CC-961D-514E-88E8-3088B5A50CA9',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '61',
                            ],
                            'Items' => [
                                'description' => '数据表的列的识别结果列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据表的列的识别结果对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ColumnName' => [
                                            'description' => '列名称。',
                                            'type' => 'string',
                                            'example' => 'hide14',
                                        ],
                                        'DataType' => [
                                            'description' => '列的数据类型。',
                                            'type' => 'string',
                                            'example' => 'varchar',
                                        ],
                                        'ColumnComment' => [
                                            'description' => '列的备注。',
                                            'type' => 'string',
                                            'example' => 'column comment',
                                        ],
                                        'PrimaryKey' => [
                                            'description' => '列是否为主键，取值说明：'."\n"
                                                ."\n"
                                                .'- **true**：主键。'."\n"
                                                .'- **false**：非主键。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Id' => [
                                            'description' => '列对象的唯一标识ID。',
                                            'type' => 'string',
                                            'example' => '1509415150052786176',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => '风险等级ID。取值：'."\n"
                                                .'- **1**：N/A：未识别到敏感数据。'."\n"
                                                .'- **2**：S1：1级敏感数据。'."\n"
                                                .'- **3**：S2：2级敏感数据。'."\n"
                                                .'- **4**：S3：3级敏感数据。'."\n"
                                                .'- **5**：S4：4级敏感数据。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'RiskLevelName' => [
                                            'description' => '风险等级名称。取值：'."\n"
                                                .'- **N/A**：未识别到敏感数据。'."\n"
                                                .'- **S1**：1级敏感数据。'."\n"
                                                .'- **S2**：2级敏感数据。'."\n"
                                                .'- **S3**：3级敏感数据。'."\n"
                                                .'- **S4**：4级敏感数据。',
                                            'type' => 'string',
                                            'example' => 'S1',
                                        ],
                                        'RuleId' => [
                                            'description' => '命中的识别模型ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1004',
                                        ],
                                        'RuleName' => [
                                            'description' => '命中的识别模型名称。',
                                            'type' => 'string',
                                            'example' => 'name',
                                        ],
                                        'Categories' => [
                                            'description' => '敏感数据所数据的行业分类列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '敏感数据所数据的行业分类，多个通过逗号分隔。',
                                                'type' => 'string',
                                                'example' => 'general sensitive information',
                                            ],
                                        ],
                                        'ModelTags' => [
                                            'description' => '数据标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '数据标签对象。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Id' => [
                                                        'description' => '数据标签名称对应的ID。取值：'."\n"
                                                            .'- **101**：个人敏感信息'."\n"
                                                            .'- **102**：个人信息'."\n"
                                                            .'- **107**：通用信息',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '101',
                                                    ],
                                                    'Name' => [
                                                        'description' => '数据标签名称。取值：'."\n"
                                                            .'- **101**：个人敏感信息'."\n"
                                                            .'- **102**：个人信息'."\n"
                                                            .'- **107**：通用信息',
                                                        'type' => 'string',
                                                        'example' => 'personal sensitive information',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"8C8036CC-961D-514E-88E8-3088B5A50CA9\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 61,\\n  \\"Items\\": [\\n    {\\n      \\"ColumnName\\": \\"hide14\\",\\n      \\"DataType\\": \\"varchar\\",\\n      \\"ColumnComment\\": \\"column comment\\",\\n      \\"PrimaryKey\\": true,\\n      \\"Id\\": \\"1509415150052786176\\",\\n      \\"RiskLevelId\\": 2,\\n      \\"RiskLevelName\\": \\"S1\\",\\n      \\"RuleId\\": 1004,\\n      \\"RuleName\\": \\"name\\",\\n      \\"Categories\\": [\\n        \\"general sensitive information\\"\\n      ],\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"personal sensitive information\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询数据对象列详情',
            'description' => '## 注意事项'."\n"
                .'DescribeDataObjectColumnDetail接口已修订为DescribeDataObjectColumnDetailV2。建议您在开发应用程序时使用较新的版本DescribeDataObjectColumnDetailV2。',
        ],
        'DescribeDataObjectColumnDetailV2' => [
            'summary' => '调用本接口查询数据表的列识别结果。',
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
                'abilityTreeCode' => '186089',
                'abilityTreeNodes' => [
                    'FEATUREsddp2VFD4T',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页的页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据对象所属的产品名称对应的ID。取值：'."\n"
                            .'- **1**：MaxCompute'."\n"
                            .'- **2**：OSS'."\n"
                            .'- **3**：ADB-MYSQL'."\n"
                            .'- **4**：TableStore'."\n"
                            .'- **5**：RDS'."\n"
                            .'- **6**：SELF_DB'."\n"
                            .'- **7**：PolarDB-X'."\n"
                            .'- **8**：PolarDB'."\n"
                            .'- **9**：ADB-PG'."\n"
                            .'- **10**：OceanBase'."\n"
                            .'- **11**：MongoDB'."\n"
                            .'- **25**：Redis',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置要查询的数据对象的唯一标识ID。'."\n"
                            ."\n"
                            .'> 您可以通过调用[DescribeDataObjects](~~2399253~~)获取标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '13456723343',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业模版ID。'."\n"
                            .'> 您可以通过调用[DescribeDataObjects](~~2399253~~)获取行业模板标识ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '分页查询时的页码。默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时，设置列表中每页显示的数据资产实例的最大条数。默认值：**10**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '231',
                            ],
                            'Items' => [
                                'description' => '数据表的列的识别结果列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据表的列的识别结果对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ColumnName' => [
                                            'description' => '列名称。',
                                            'type' => 'string',
                                            'example' => 'hide14',
                                        ],
                                        'DataType' => [
                                            'description' => '列的数据类型。',
                                            'type' => 'string',
                                            'example' => 'varchar',
                                        ],
                                        'ColumnComment' => [
                                            'description' => '列的备注。',
                                            'type' => 'string',
                                            'example' => 'column comment',
                                        ],
                                        'PrimaryKey' => [
                                            'description' => '列是否为主键，取值说明：'."\n"
                                                ."\n"
                                                .'- **true**：主键。'."\n"
                                                .'- **false**：非主键。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Id' => [
                                            'description' => '数据对象的唯一标识ID。',
                                            'type' => 'string',
                                            'example' => '1392973973691383808',
                                        ],
                                        'RiskLevelId' => [
                                            'description' => '风险等级ID。取值：'."\n"
                                                .'- **1**：N/A：未识别到敏感数据。'."\n"
                                                .'- **2**：S1：1级敏感数据。'."\n"
                                                .'- **3**：S2：2级敏感数据。'."\n"
                                                .'- **4**：S3：3级敏感数据。'."\n"
                                                .'- **5**：S4：4级敏感数据。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'RiskLevelName' => [
                                            'description' => '风险等级名称。取值：'."\n"
                                                .'- **N/A**：未识别到敏感数据。'."\n"
                                                .'- **S1**：1级敏感数据。'."\n"
                                                .'- **S2**：2级敏感数据。'."\n"
                                                .'- **S3**：3级敏感数据。'."\n"
                                                .'- **S4**：4级敏感数据。',
                                            'type' => 'string',
                                            'example' => 'S1',
                                        ],
                                        'RuleId' => [
                                            'description' => '命中的识别模型ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '51',
                                        ],
                                        'RuleName' => [
                                            'description' => '命中的识别模型名称。',
                                            'type' => 'string',
                                            'example' => 'name',
                                        ],
                                        'Categories' => [
                                            'description' => '敏感数据所数据的行业分类列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '敏感数据所数据的行业分类，多个通过逗号分隔。',
                                                'type' => 'string',
                                                'example' => 'general sensitive information',
                                            ],
                                        ],
                                        'ModelTags' => [
                                            'description' => '数据标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '数据标签对象。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Id' => [
                                                        'description' => '数据标签名称对应的ID。取值：'."\n"
                                                            .'- **101**：个人敏感信息'."\n"
                                                            .'- **102**：个人信息'."\n"
                                                            .'- **107**：通用信息',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '101',
                                                    ],
                                                    'Name' => [
                                                        'description' => '数据标签名称。取值：'."\n"
                                                            .'- 个人敏感信息'."\n"
                                                            .'- 个人信息'."\n"
                                                            .'- 通用信息',
                                                        'type' => 'string',
                                                        'example' => 'personal sensitive information',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 231,\\n  \\"Items\\": [\\n    {\\n      \\"ColumnName\\": \\"hide14\\",\\n      \\"DataType\\": \\"varchar\\",\\n      \\"ColumnComment\\": \\"column comment\\",\\n      \\"PrimaryKey\\": true,\\n      \\"Id\\": \\"1392973973691383808\\",\\n      \\"RiskLevelId\\": 2,\\n      \\"RiskLevelName\\": \\"S1\\",\\n      \\"RuleId\\": 51,\\n      \\"RuleName\\": \\"name\\",\\n      \\"Categories\\": [\\n        \\"general sensitive information\\"\\n      ],\\n      \\"ModelTags\\": [\\n        {\\n          \\"Id\\": 101,\\n          \\"Name\\": \\"personal sensitive information\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询数据对象列详情V2',
        ],
        'CreateConfig' => [
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '81959',
                'abilityTreeNodes' => [
                    'FEATUREsddpCHNP1R',
                    'FEATUREsddpR2D59W',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常告警通用配置模块中配置项的编码。取值：'."\n"
                            ."\n"
                            .'- **access_failed_cnt**：非授权资源多次访问尝试的阈值。'."\n"
                            .'- **access_permission_exprie_max_days**：权限闲置期间超过阈值。'."\n"
                            .'- **log_datasize_avg_days**：日志未有效输出（当日某类日志输出量低于前10天平均值的阈值）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'access_failed_cnt',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常告警通用配置项的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '非授权资源多次访问尝试：目前的阈值定义为10次',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定异常告警通用配置项的值。Code取值不同此参数的具体含义不同：'."\n"
                            .'- 当Code取值为**access_failed_cnt**：Value表示非授权资源多次访问尝试的阈值。'."\n"
                            .'- 当Code取值为**access_permission_exprie_max_days**：Value表示权限闲置期间超过阈值。'."\n"
                            .'- 当Code取值为**log_datasize_avg_days**：Value表示当日某类日志输出量低于前10天平均值的阈值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SourceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '106.11.XX.XX',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'description' => '异常告警配置ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12300',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1EBF271',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Id\\": 12300,\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1EBF271\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateConfigResponse>\\r\\n    <RequestId>208B016D-4CB9-4A85-96A5-0B8ED1EBF271</RequestId>\\r\\n</CreateConfigResponse>","errorExample":""}]',
            'title' => '修改异常告警通用配置',
            'summary' => '调用CreateConfig接口修改异常告警通用配置模块的参数。',
            'description' => '本接口一般用于根据异常告警配置项的编码，创建、恢复用户配置，便于管理异常告警配置项用户配置。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeConfigs' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'ConfigList' => [
                                'description' => '异常告警通用配置项列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Code' => [
                                            'description' => '异常告警通用配置模块中配置项的编码。',
                                            'type' => 'string',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Value' => [
                                            'description' => '异常告警通用配置项的参数值。',
                                            'type' => 'string',
                                            'format' => 'int64',
                                            'example' => '30',
                                        ],
                                        'DefaultValue' => [
                                            'description' => '异常告警通用配置项参数的默认值描述。',
                                            'type' => 'string',
                                            'example' => '当日某类日志输出量低于前10天平均值的30%',
                                        ],
                                        'Description' => [
                                            'description' => '异常告警通用配置项的描述。',
                                            'type' => 'string',
                                            'example' => '日志未有效输出',
                                        ],
                                        'Id' => [
                                            'description' => '异常告警通用配置项的唯一标识ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2133',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"ConfigList\\": [\\n    {\\n      \\"Code\\": 1,\\n      \\"Value\\": 30,\\n      \\"DefaultValue\\": \\"当日某类日志输出量低于前10天平均值的30%\\",\\n      \\"Description\\": \\"日志未有效输出\\",\\n      \\"Id\\": 2133\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeConfigs>\\n<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n<ConfigList>\\n    <Code>2001</Code>\\n    <DefaultValue>目前的阈值定义为10次</DefaultValue>\\n    <Description>当日某类日志输出量低于前10天平均值的30%</Description>\\n    <Id>2133</Id>\\n    <Value>10</Value>\\n</ConfigList>\\n</DescribeConfigs>","errorExample":""}]',
            'title' => '查询异常告警中配置项的列表',
            'summary' => '查询异常告警通用配置模块中配置项的列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyReportTaskStatus' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '118114',
                'abilityTreeNodes' => [
                    'FEATUREsddp6DN9CR',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ReportTaskStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置报表任务的状态。取值：'."\n"
                            .'- **0**：关闭'."\n"
                            .'- **1**：开启  '."\n"
                            ."\n"
                            .'><notice> 本参数为必填参数。'."\n"
                            .'></notice>'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文（简体）'."\n"
                            .'- **en_us**：英文（美国）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1EBF271',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1EBF271\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyReportTaskStatusResponse>\\n    <RequestId>208B016D-4CB9-4A85-96A5-0B8ED1EBF271</RequestId>\\n</ModifyReportTaskStatusResponse>","errorExample":""}]',
            'title' => '修改报表任务状态',
            'summary' => '调用ModifyReportTaskStatus开启或关闭报表任务。',
            'description' => '本接口一般用于开启或关闭报表任务。开通数据安全中心DSC（Data Security Center）后，报表任务默认为开启状态。关闭报表任务后，报表中心、云原生数据审计概览和数据安全实验室将不会产生新的统计数据，已有的数据不受影响。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeUserStatus' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '82092',
                'abilityTreeNodes' => [
                    'FEATUREsddp4GFW27',
                    'FEATUREsddpKPIKAW',
                    'FEATUREsddp7JHQOS',
                    'FEATUREsddpXD0XSH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh_cn**：默认值，中文（简体）。'."\n"
                            .'- **en_us**：英文（美国）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '此参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '返回结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'UserStatus' => [
                                'description' => '返回当前登录账号详情列表。',
                                'type' => 'object',
                                'properties' => [
                                    'UseOssSize' => [
                                        'description' => '已使用的OSS存储量。单位：字节。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '234',
                                    ],
                                    'UseInstanceNum' => [
                                        'description' => '已使用的实例数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '125',
                                    ],
                                    'InstanceNum' => [
                                        'description' => '当前登录账号包含的实例数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '32',
                                    ],
                                    'ChargeType' => [
                                        'description' => '当前登录账号购买DSC服务的付费类型。取值：'."\n"
                                            .'- **PREPAY**：预付费。'."\n"
                                            .'- **POSTPAY**：后付费。',
                                        'type' => 'string',
                                        'example' => 'PREPAY',
                                    ],
                                    'Authed' => [
                                        'description' => '当前登录账号是否已授权DSC RAM的权限。取值：'."\n"
                                            .'- **true**：已授权。'."\n"
                                            .'- **false**：未授权。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'LabStatus' => [
                                        'description' => '是否开通资产实验室功能。取值：'."\n"
                                            .'- **1**：已开通。'."\n"
                                            .'- **0**：未开通。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'RemainDays' => [
                                        'description' => '当前登录账号中资产的保护期剩余天数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '131',
                                    ],
                                    'Trail' => [
                                        'description' => '当前登录账号是否试用DSC服务。取值：'."\n"
                                            .'- **true**：试用。'."\n"
                                            .'- **false**：非试用。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'InstanceId' => [
                                        'description' => '主账号购买的数据安全中心产品实例ID。',
                                        'type' => 'string',
                                        'example' => 'sddp-cn-****',
                                    ],
                                    'AccessKeyId' => [
                                        'description' => '用户授权的AccessKey ID。',
                                        'type' => 'string',
                                        'example' => 'LTAI4G67HRBzNRmMhfyv****',
                                    ],
                                    'Purchased' => [
                                        'description' => '是否购买DSC服务。取值：'."\n"
                                            ."\n"
                                            .'- **true**：已购买。'."\n"
                                            .'- **false**：未购买。'."\n"
                                            ."\n",
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'DataManagerRole' => [
                                        'description' => '当前账号拥有的权限。取值：'."\n"
                                            .'- **0**: 拥有数据安全中心的管理权限或只读权限。'."\n"
                                            .'- **1**: 拥有数据域管理权限。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'ReleaseDays' => [
                                        'description' => '过期到释放的时间。单位：天。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '15',
                                    ],
                                    'AuditClosable' => [
                                        'description' => '是否可以关闭sql洞察。取值：'."\n"
                                            .'- **true**：可以。'."\n"
                                            .'- **false**：不可以。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'AuditReleasable' => [
                                        'description' => '是否可以释放sql洞察。'."\n"
                                            .'- **true**：可以。'."\n"
                                            .'- **false**：不可以。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ReleaseTime' => [
                                        'description' => '释放时间。单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '15000',
                                    ],
                                    'InstanceTotalCount' => [
                                        'description' => '实例总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'OssTotalSize' => [
                                        'description' => 'OSS总存储量。单位：字节。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2048',
                                    ],
                                    'UseAgentAudit' => [
                                        'description' => '是否曾经使用过Agent审计功能。取值：'."\n"
                                            .'- **1**：使用过。'."\n"
                                            .'- **0**：未使用过。',
                                        'type' => 'boolean',
                                        'example' => '1',
                                    ],
                                    'ProtectionDays' => [
                                        'description' => '累计保护用户资产的天数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '22',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"UserStatus\\": {\\n    \\"UseOssSize\\": 234,\\n    \\"UseInstanceNum\\": 125,\\n    \\"InstanceNum\\": 32,\\n    \\"ChargeType\\": \\"PREPAY\\",\\n    \\"Authed\\": true,\\n    \\"LabStatus\\": 1,\\n    \\"RemainDays\\": 131,\\n    \\"Trail\\": true,\\n    \\"InstanceId\\": \\"sddp-cn-****\\",\\n    \\"AccessKeyId\\": \\"LTAI4G67HRBzNRmMhfyv****\\",\\n    \\"Purchased\\": true,\\n    \\"DataManagerRole\\": 1,\\n    \\"ReleaseDays\\": 15,\\n    \\"AuditClosable\\": true,\\n    \\"AuditReleasable\\": true,\\n    \\"ReleaseTime\\": 15000,\\n    \\"InstanceTotalCount\\": 10,\\n    \\"OssTotalSize\\": 2048,\\n    \\"UseAgentAudit\\": true,\\n    \\"ProtectionDays\\": 22\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeUserStatusResponse>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <UserStatus>\\n        <UseOssSize>234</UseOssSize>\\n        <UseInstanceNum>125</UseInstanceNum>\\n        <InstanceNum>32</InstanceNum>\\n        <ChargeType>PREPAY</ChargeType>\\n        <Authed>true</Authed>\\n        <LabStatus>1</LabStatus>\\n        <RemainDays>131</RemainDays>\\n        <Trail>true</Trail>\\n        <InstanceId>ins-****</InstanceId>\\n        <AccessKeyId>LTAI4G67HRBzNRmMhfyv****</AccessKeyId>\\n        <Purchased>true</Purchased>\\n    </UserStatus>\\n</DescribeUserStatusResponse>","errorExample":""}]',
            'title' => '查询用户账号状态',
            'summary' => '调用DescribeUserStatus查询用户账号状态。',
            'description' => '通过调用本接口，您可以获取当前登录账号的相关信息，便于您全面了解使用DSC的使用效果。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableUserConfig' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '82095',
                'abilityTreeNodes' => [
                    'FEATUREsddpCHNP1R',
                    'FEATUREsddpR2D59W',
                    'FEATUREsddpGH0F1O',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh_cn**：默认值，中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常告警通用配置模块中配置项的编码。可通过[DescribeConfigs](~~DescribeConfigs~~)获取配置项的Code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'access_failed_cnt',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '此参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '返回结果的请求ID。',
                                'type' => 'string',
                                'example' => 'AC314611-D907-5EBF-B6D8-70425E5A8643',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AC314611-D907-5EBF-B6D8-70425E5A8643\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableUserConfigResponse>\\r\\n<RequestId>AC314611-D907-5EBF-B6D8-70425E5A8643</RequestId>\\r\\n</DisableUserConfigResponse>","errorExample":""}]',
            'title' => '停用用户配置',
            'summary' => '调用DisableUserConfig接口停用用户配置。停用用户配置后，可以通过调用CreateConfig接口输入相同的请求参数Code，恢复该配置项编码的异常告警通用配置。',
            'description' => '本接口一般用于根据异常告警通用配置模块中配置项的编码，停用用户配置，便于用户及时修改用户配置的生效状态。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyEventTypeStatus' => [
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
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '82115',
                'abilityTreeNodes' => [
                    'FEATUREsddpCHNP1R',
                    'FEATUREsddpGH0F1O',
                    'FEATUREsddpR2D59W',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。-**zh**：中文-**en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'SubTypeIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '子类型异常事件唯一标识ID，多个ID以半角逗号隔开。'."\n"
                            ."\n"
                            .'> 开启SDDP检测子类型异常事件的功能，需要提供子类型异常事件唯一标识ID，该ID可调用**DescribeEventTypes**接口获取。'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '020008',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '此参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID。',
                                'type' => 'string',
                                'example' => '208B016D-4CB9-4A85-96A5-0B8ED1E*****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"208B016D-4CB9-4A85-96A5-0B8ED1E*****\\"\\n}","type":"json"}]',
            'title' => '修改检测子类型异常事件状态',
            'summary' => '调用本接口开启检测子类型异常事件的功能。',
        ],
        'ModifyEventStatus' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件的唯一标识ID。'."\n"
                            ."\n"
                            .'> 处理异常事件，需要提供异常事件的唯一标识ID，该ID可调用**DescribeEvents**接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'Backed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否对异常事件进行检测强化。强化对异常事件检测的能力，可增加检测的准确性，并提升异常事件告警率。'."\n"
                            ."\n"
                            .'- **true**：是。'."\n"
                            .'- **false**：否.',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DealReason',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件处理原因记录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '确定为违例',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对异常事件的处理操作。'."\n"
                            ."\n"
                            .'- **1**：误报。'."\n"
                            .'- **2**：确认异常并已处理。',
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
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '8491DBFD-48C0-4E11-B6FC-6F38921244A9',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8491DBFD-48C0-4E11-B6FC-6F38921244A9\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyEventStatus>\\r\\n\\t<RequestId>8491DBFD-48C0-4E11-B6FC-6F38921244A9</RequestId>\\r\\n</ModifyEventStatus>\\t\\r\\n","errorExample":""}]',
            'title' => '修改异常事件状态',
            'summary' => '调用本接口处理异常事件。',
            'description' => '本接口一般用于数据泄露风险告警处理，便于用户及时保护数据资产的安全。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeEvents' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件的唯一标识id。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '789026',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件的操作人账号ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1978132506596***',
                    ],
                ],
                [
                    'name' => 'DealUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件的处理人账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'yundun-***',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件的处理状态。'."\n"
                            ."\n"
                            .'- 0：未处理。 '."\n"
                            .'- 1：确认违例。'."\n"
                            .'- 2：违例排除。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'TypeCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父类型异常事件的名称。'."\n"
                            ."\n"
                            .'- 01：权限使用异常。'."\n"
                            .'- 02：数据流转异常。'."\n"
                            .'- 03：数据操作异常。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02',
                    ],
                ],
                [
                    'name' => 'SubTypeCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '子类型异常事件的名称。'."\n"
                            ."\n"
                            .'> 如果根据子类型异常事件的名称查询异常事件列表，子类型异常事件名称可通过**DescribeEventTypes**接口获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '数据下载量异常',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件发生时间，即开始检测异常事件时间。格式：时间戳。单位：毫秒。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1657900000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件结束时间，即结束检测异常事件时间的。格式：时间戳。单位：毫秒。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1698700000',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表每页显示的数据最大条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rm-uf6yzvbc2tg90iuxk.l****',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据资产表所属产品名称，取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OSS',
                    ],
                ],
                [
                    'name' => 'TargetProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据流转异常类型事件中的目标产品名称，取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RDS',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '子账号用户名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name',
                    ],
                ],
                [
                    'name' => 'WarnLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件的危险等级。'."\n"
                            .'- **1**：低危。'."\n"
                            .'- **2**：中危。'."\n"
                            .'- **3**：高危。',
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
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '结果中显示的当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'PageSize' => [
                                'description' => '结果中每页显示的数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                            ],
                            'TotalCount' => [
                                'description' => '结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Items' => [
                                'description' => '异常事件列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '异常事件对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DisplayName' => [
                                            'description' => '异常事件操作人账号显示名。',
                                            'type' => 'string',
                                            'example' => 'yundunsr',
                                        ],
                                        'Status' => [
                                            'description' => '异常事件处理状态。'."\n"
                                                ."\n"
                                                .'- 0：未处理。 '."\n"
                                                .'- 1：确认违例。 '."\n"
                                                .'- 2：违例排除。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'WarnLevel' => [
                                            'description' => '异常事件的危险等级。'."\n"
                                                ."\n"
                                                .'- **1**：低危。'."\n"
                                                .'- **2**：中危。'."\n"
                                                .'- **3**：高危。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'UserId' => [
                                            'description' => '异常事件操作人账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1978132506596***',
                                        ],
                                        'StatusName' => [
                                            'description' => '异常事件处理状态名称。',
                                            'type' => 'string',
                                            'example' => '待处理',
                                        ],
                                        'DealTime' => [
                                            'description' => '异常事件处理时间的毫秒数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12223300',
                                        ],
                                        'DealLoginName' => [
                                            'description' => '异常事件处理人账号名。',
                                            'type' => 'string',
                                            'example' => 'det1111',
                                        ],
                                        'SubTypeName' => [
                                            'description' => '子类型异常事件名称。',
                                            'type' => 'string',
                                            'example' => '数据下载量异常',
                                        ],
                                        'Backed' => [
                                            'description' => '是否对异常事件进行了检测强化。强化对异常事件检测的能力，可增加检测的准确性，并提升异常事件告警率。'."\n"
                                                ."\n"
                                                .'- true：是。'."\n"
                                                .'- false：否。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'EventTime' => [
                                            'description' => '异常事件发生时间。格式：时间戳。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1545829129000',
                                        ],
                                        'LoginName' => [
                                            'description' => '异常事件操作人登录名。',
                                            'type' => 'string',
                                            'example' => 'det1111',
                                        ],
                                        'SubTypeCode' => [
                                            'description' => '子类型异常事件编码。',
                                            'type' => 'string',
                                            'example' => '020008',
                                        ],
                                        'TargetProductCode' => [
                                            'description' => '数据流转异常事件中目标产品名称。',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                        'TypeCode' => [
                                            'description' => '父类型异常事件编码。',
                                            'type' => 'string',
                                            'example' => '02',
                                        ],
                                        'AlertTime' => [
                                            'description' => '异常事件的告警时间。格式：时间戳。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '154529000',
                                        ],
                                        'DealUserId' => [
                                            'description' => '异常事件处理人账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '229157443385014***',
                                        ],
                                        'TypeName' => [
                                            'description' => '父类型异常事件名称。',
                                            'type' => 'string',
                                            'example' => '数据流转异常',
                                        ],
                                        'DealDisplayName' => [
                                            'description' => '异常事件处理人账号显示名。',
                                            'type' => 'string',
                                            'example' => 'yundunsr',
                                        ],
                                        'Id' => [
                                            'description' => 'DSC中记录的异常事件的唯一标识ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '42233335555',
                                        ],
                                        'ProductCode' => [
                                            'description' => '异常事件所属产品名称。',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"PageSize\\": 12,\\n  \\"TotalCount\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"DisplayName\\": \\"yundunsr\\",\\n      \\"Status\\": 0,\\n      \\"WarnLevel\\": 2,\\n      \\"UserId\\": 0,\\n      \\"StatusName\\": \\"待处理\\",\\n      \\"DealTime\\": 12223300,\\n      \\"DealLoginName\\": \\"det1111\\",\\n      \\"SubTypeName\\": \\"数据下载量异常\\",\\n      \\"Backed\\": false,\\n      \\"EventTime\\": 1545829129000,\\n      \\"LoginName\\": \\"det1111\\",\\n      \\"SubTypeCode\\": \\"020008\\",\\n      \\"TargetProductCode\\": \\"RDS\\",\\n      \\"TypeCode\\": \\"02\\",\\n      \\"AlertTime\\": 154529000,\\n      \\"DealUserId\\": 0,\\n      \\"TypeName\\": \\"数据流转异常\\",\\n      \\"DealDisplayName\\": \\"yundunsr\\",\\n      \\"Id\\": 42233335555,\\n      \\"ProductCode\\": \\"RDS\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeEvents>\\n<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n<PageSize>10</PageSize>\\n<CurrentPage>1</CurrentPage>\\n<TotalCount>1</TotalCount>\\n<Items>\\n    <Status>0</Status>\\n    <TypeName>数据流转异常</TypeName>\\n    <Backed>false</Backed>\\n    <TypeCode>02</TypeCode>\\n    <ProductCode>RDS</ProductCode>\\n    <SubTypeName>数据下载量异常</SubTypeName>\\n    <EventTime>1545829129000</EventTime>\\n    <UserId>229157443385014140</UserId>\\n    <LoginName>det1111</LoginName>\\n    <DisplayName>yundunsr</DisplayName>\\n    <Id>54122244</Id>\\n    <SubTypeCode>020008</SubTypeCode>\\n    <AlertTime>1545829129000</AlertTime>\\n    <StatusName>待处理</StatusName>\\n    <DealUserId>229157443385014140</DealUserId>\\n    <DealLoginName>det1111</DealLoginName>\\n    <DeaulDisplayName>yundunsr</DeaulDisplayName>\\n    <DepartName>test</DepartName>\\n</Items>\\n</DescribeEvents>","errorExample":""}]',
            'title' => '查询异常事件列表',
            'summary' => '调用本接口查询异常事件列表。',
            'description' => '本接口一般用于数据泄露风险告警列表查询，便于告警搜索和告警处理。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeEventDetail' => [
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
                'abilityTreeCode' => '82033',
                'abilityTreeNodes' => [
                    'FEATUREsddpCHNP1R',
                    'FEATUREsddpGH0F1O',
                    'FEATUREsddpR2D59W',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh**：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常事件的唯一标识ID。'."\n"
                            ."\n"
                            .'> 查询单个异常事件详情，需要提供单个异常事件的唯一标识ID，该ID可调用**DescribeEvents**接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '13456723343',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '69FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'Event' => [
                                'description' => '异常事件详情列表。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => '异常事件操作人账号显示名。',
                                        'type' => 'string',
                                        'example' => 'yundunsr',
                                    ],
                                    'Status' => [
                                        'description' => '异常事件处理状态。取值：'."\n"
                                            .'- **0**：未处理。 '."\n"
                                            .'- **1**：确认违例。 '."\n"
                                            .'- **2**：违例排除。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'DealReason' => [
                                        'description' => '异常事件处理原因记录。',
                                        'type' => 'string',
                                        'example' => 'Anomaly confirmed'."\n",
                                    ],
                                    'UserId' => [
                                        'description' => '异常事件操作人账号ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '229157443385014***',
                                    ],
                                    'StatusName' => [
                                        'description' => '异常事件处理状态名称。',
                                        'type' => 'string',
                                        'example' => 'Pending',
                                    ],
                                    'DealTime' => [
                                        'description' => '异常事件处理时间。格式：时间戳。单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1611139155000',
                                    ],
                                    'DealLoginName' => [
                                        'description' => '异常事件处理人账号登录名。',
                                        'type' => 'string',
                                        'example' => 'det1111',
                                    ],
                                    'SubTypeName' => [
                                        'description' => '子类型异常事件名称。',
                                        'type' => 'string',
                                        'example' => 'Anomalous volume of downloaded data'."\n",
                                    ],
                                    'Backed' => [
                                        'description' => '是否对异常事件进行了检测强化。取值：'."\n"
                                            .'- **true**：是。'."\n"
                                            .'- **false**：否。'."\n"
                                            ."\n"
                                            .'> 强化对异常事件检测的能力，可增加检测的准确性，并提升异常事件告警率。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'DataInstance' => [
                                        'description' => '异常事件所属产品的资产实例名称。',
                                        'type' => 'string',
                                        'example' => 'in-222***',
                                    ],
                                    'EventTime' => [
                                        'description' => '异常事件发生时间。格式：时间戳。单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1545829129000',
                                    ],
                                    'LoginName' => [
                                        'description' => '异常事件操作人账号名。',
                                        'type' => 'string',
                                        'example' => 'det1111',
                                    ],
                                    'SubTypeCode' => [
                                        'description' => '子类型异常事件编码。',
                                        'type' => 'string',
                                        'example' => '020008',
                                    ],
                                    'LogDetail' => [
                                        'description' => '告警日志信息。',
                                        'type' => 'string',
                                        'example' => '{"client_ip": ["106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX"], "start_time": "2020-05-10 00:00:01", "instance": ["omniscience-data", "punish-beaver-data"], "end_time": "2020-05-10 00:21:22", "client_ua": ["Java/1.8.0_152", "Java/1.8.0_92", "aliyun-sdk-java/2.0.0", "aliyun-sdk-java/2.8.0(Linux/4.9.151-015.ali3000.alios7.x86_64/amd64;1.8.0_152)"], "user_name": 1512222261295262}',
                                    ],
                                    'TypeCode' => [
                                        'description' => '父类型异常事件编码。',
                                        'type' => 'string',
                                        'example' => '02',
                                    ],
                                    'AlertTime' => [
                                        'description' => '异常事件的告警发生时间。格式：时间戳。单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1545829129000',
                                    ],
                                    'DealUserId' => [
                                        'description' => '异常事件处理人账号ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '229157443385014***',
                                    ],
                                    'TypeName' => [
                                        'description' => '父类型异常事件名称。取值：'."\n"
                                            .'- **01**：权限使用异常。'."\n"
                                            .'- **02**：数据流转异常。'."\n"
                                            .'- **03**：数据操作异常。',
                                        'type' => 'string',
                                        'example' => 'Anomalous data flow'."\n",
                                    ],
                                    'DealDisplayName' => [
                                        'description' => '异常事件处理人账号显示名。',
                                        'type' => 'string',
                                        'example' => 'yundunsr',
                                    ],
                                    'Id' => [
                                        'description' => '数据安全中心记录的异常事件的唯一标识ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '52234',
                                    ],
                                    'ProductCode' => [
                                        'description' => '异常事件所属的产品名称。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                                        'type' => 'string',
                                        'example' => 'MaxCompute',
                                    ],
                                    'HandleInfoList' => [
                                        'description' => '处置历史的信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '手动处理事件的详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '解禁状态。取值：'."\n"
                                                        .'- **0**：禁用。'."\n"
                                                        .'- **1**：解禁。'."\n"
                                                        .'- **-1**：禁用失败。'."\n"
                                                        .'- **-2**：解禁失败。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'EnableTime' => [
                                                    'description' => '解禁时间。格式：时间戳。单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1611139155000',
                                                ],
                                                'HandlerValue' => [
                                                    'description' => '处置时长，为空时为永久处置。单位：分钟。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10',
                                                ],
                                                'DisableTime' => [
                                                    'description' => '禁用时间。格式：时间戳。单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1611139155000',
                                                ],
                                                'HandlerName' => [
                                                    'description' => '处置方式。',
                                                    'type' => 'string',
                                                    'example' => 'Remove from the whitelist'."\n",
                                                ],
                                                'HandlerType' => [
                                                    'description' => '处置类型。',
                                                    'type' => 'string',
                                                    'example' => 'rds_security_ip',
                                                ],
                                                'CurrentValue' => [
                                                    'description' => '处理账号。',
                                                    'type' => 'string',
                                                    'example' => 'sddp-test2',
                                                ],
                                                'Id' => [
                                                    'description' => '处置ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '11',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Detail' => [
                                        'description' => '异常事件详情中的具体内容。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Content' => [
                                                'description' => '异常事件内容。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '异常事件内容。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Label' => [
                                                            'description' => '异常事件内容的标题。',
                                                            'type' => 'string',
                                                            'example' => 'Anomaly description'."\n",
                                                        ],
                                                        'Value' => [
                                                            'description' => '异常事件内容的说明。',
                                                            'type' => 'string',
                                                            'example' => 'The account was used to access OSS from an unusual terminal whose IP address is 1.2.3.4 from 00:06:45 on September 9, 2019 to 00:57:37 on September 9, 2019.',
                                                        ],
                                                        'Name' => [
                                                            'description' => '异常事件名称。',
                                                            'type' => 'string',
                                                            'example' => 'daliaoyuncom',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Chart' => [
                                                'description' => '异常事件的基线行为画像。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '异常事件的基线行为画像。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Type' => [
                                                            'description' => '图表展示类型。取值：'."\n"
                                                                .'- **1**：柱状图。'."\n"
                                                                .'- **2**：折线图。',
                                                            'type' => 'string',
                                                            'example' => '1',
                                                        ],
                                                        'Label' => [
                                                            'description' => '异常事件基线行为画像名称。',
                                                            'type' => 'string',
                                                            'example' => 'Baseline behavior chart'."\n",
                                                        ],
                                                        'XLabel' => [
                                                            'description' => 'X轴数据项的标签描述。',
                                                            'type' => 'string',
                                                            'example' => 'Number of days'."\n",
                                                        ],
                                                        'YLabel' => [
                                                            'description' => 'Y轴数据项的标签描述。',
                                                            'type' => 'string',
                                                            'example' => 'Value',
                                                        ],
                                                        'Data' => [
                                                            'description' => '异常事件基线行为画像的数据项。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Y' => [
                                                                    'description' => 'Y轴的数据项的值。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => 'Y轴的数据项的值。',
                                                                        'type' => 'string',
                                                                        'example' => '[1,2,3,...]',
                                                                    ],
                                                                    'example' => '[1,2,3,...]',
                                                                ],
                                                                'X' => [
                                                                    'description' => 'X轴的数据项的值。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => 'X轴的数据项的值。',
                                                                        'type' => 'string',
                                                                        'example' => '[test1,test2,...]',
                                                                    ],
                                                                    'example' => '[test1,test2,...]',
                                                                ],
                                                                'Z' => [
                                                                    'description' => 'Z轴的数据项的值。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => 'Z轴的数据项的值。',
                                                                        'type' => 'string',
                                                                        'example' => '[5,7,...]',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'ChatType' => [
                                                            'description' => '图表展示类型。取值：'."\n"
                                                                .'- **1**：柱状图。'."\n"
                                                                .'- **2**：折线图。'."\n"
                                                                ."\n"
                                                                .'> NewAlarm为true时才会返回该字段。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'Name' => [
                                                            'description' => '图标标题。'."\n"
                                                                ."\n"
                                                                .'> NewAlarm为true时才会返回该字段。',
                                                            'type' => 'string',
                                                            'example' => 'misskingm',
                                                        ],
                                                        'ZLabel' => [
                                                            'description' => 'Z轴数据项的标签描述。'."\n"
                                                                ."\n"
                                                                .'> NewAlarm为true时才会返回该字段。',
                                                            'type' => 'string',
                                                            'example' => 'chart description',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'ResourceInfo' => [
                                                'description' => '异常事件来源信息。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '异常事件来源信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Label' => [
                                                            'description' => '异常事件来源标题。',
                                                            'type' => 'string',
                                                            'example' => 'Risk',
                                                        ],
                                                        'Value' => [
                                                            'description' => '异常事件来源的说明。',
                                                            'type' => 'string',
                                                            'example' => 'Based on the record of authentication by using an unusual terminal, an attacker may have obtained the access permission of the account, or an employee accessed data from a personal terminal.',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'NewAlarm' => [
                                        'description' => '是否为新版告警。取值：'."\n"
                                            .'- **true**：是。 '."\n"
                                            .'- **false**：否。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"69FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"Event\\": {\\n    \\"DisplayName\\": \\"yundunsr\\",\\n    \\"Status\\": 0,\\n    \\"DealReason\\": \\"Anomaly confirmed\\\\n\\",\\n    \\"UserId\\": 0,\\n    \\"StatusName\\": \\"Pending\\",\\n    \\"DealTime\\": 1611139155000,\\n    \\"DealLoginName\\": \\"det1111\\",\\n    \\"SubTypeName\\": \\"Anomalous volume of downloaded data\\\\n\\",\\n    \\"Backed\\": false,\\n    \\"DataInstance\\": \\"in-222***\\",\\n    \\"EventTime\\": 1545829129000,\\n    \\"LoginName\\": \\"det1111\\",\\n    \\"SubTypeCode\\": \\"020008\\",\\n    \\"LogDetail\\": \\"{\\\\\\"client_ip\\\\\\": [\\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\", \\\\\\"106.11.XX.XX\\\\\\"], \\\\\\"start_time\\\\\\": \\\\\\"2020-05-10 00:00:01\\\\\\", \\\\\\"instance\\\\\\": [\\\\\\"omniscience-data\\\\\\", \\\\\\"punish-beaver-data\\\\\\"], \\\\\\"end_time\\\\\\": \\\\\\"2020-05-10 00:21:22\\\\\\", \\\\\\"client_ua\\\\\\": [\\\\\\"Java/1.8.0_152\\\\\\", \\\\\\"Java/1.8.0_92\\\\\\", \\\\\\"aliyun-sdk-java/2.0.0\\\\\\", \\\\\\"aliyun-sdk-java/2.8.0(Linux/4.9.151-015.ali3000.alios7.x86_64/amd64;1.8.0_152)\\\\\\"], \\\\\\"user_name\\\\\\": 1512222261295262}\\",\\n    \\"TypeCode\\": \\"02\\",\\n    \\"AlertTime\\": 1545829129000,\\n    \\"DealUserId\\": 0,\\n    \\"TypeName\\": \\"Anomalous data flow\\\\n\\",\\n    \\"DealDisplayName\\": \\"yundunsr\\",\\n    \\"Id\\": 52234,\\n    \\"ProductCode\\": \\"MaxCompute\\",\\n    \\"HandleInfoList\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"EnableTime\\": 1611139155000,\\n        \\"HandlerValue\\": 10,\\n        \\"DisableTime\\": 1611139155000,\\n        \\"HandlerName\\": \\"Remove from the whitelist\\\\n\\",\\n        \\"HandlerType\\": \\"rds_security_ip\\",\\n        \\"CurrentValue\\": \\"sddp-test2\\",\\n        \\"Id\\": 11\\n      }\\n    ],\\n    \\"Detail\\": {\\n      \\"Content\\": [\\n        {\\n          \\"Label\\": \\"Anomaly description\\\\n\\",\\n          \\"Value\\": \\"The account was used to access OSS from an unusual terminal whose IP address is 1.2.3.4 from 00:06:45 on September 9, 2019 to 00:57:37 on September 9, 2019.\\",\\n          \\"Name\\": \\"daliaoyuncom\\"\\n        }\\n      ],\\n      \\"Chart\\": [\\n        {\\n          \\"Type\\": \\"1\\",\\n          \\"Label\\": \\"Baseline behavior chart\\\\n\\",\\n          \\"XLabel\\": \\"Number of days\\\\n\\",\\n          \\"YLabel\\": \\"Value\\",\\n          \\"Data\\": {\\n            \\"Y\\": [\\n              \\"[1,2,3,...]\\"\\n            ],\\n            \\"X\\": [\\n              \\"[test1,test2,...]\\"\\n            ],\\n            \\"Z\\": [\\n              \\"[5,7,...]\\"\\n            ]\\n          },\\n          \\"ChatType\\": 1,\\n          \\"Name\\": \\"misskingm\\",\\n          \\"ZLabel\\": \\"chart description\\"\\n        }\\n      ],\\n      \\"ResourceInfo\\": [\\n        {\\n          \\"Label\\": \\"Risk\\",\\n          \\"Value\\": \\"Based on the record of authentication by using an unusual terminal, an attacker may have obtained the access permission of the account, or an employee accessed data from a personal terminal.\\"\\n        }\\n      ]\\n    },\\n    \\"NewAlarm\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeEventDetailResponse>\\n    <RequestId>69FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <Event>\\n        <DisplayName>yundunsr</DisplayName>\\n        <Status>0</Status>\\n        <DealReason>确定为违例</DealReason>\\n        <UserId>229157443385014140</UserId>\\n        <StatusName>待处理</StatusName>\\n        <DealTime>1230000</DealTime>\\n        <DealLoginName>det1111</DealLoginName>\\n        <SubTypeName>数据下载量异常</SubTypeName>\\n        <Backed>false</Backed>\\n        <DataInstance>in-222***</DataInstance>\\n        <EventTime>1545829129000</EventTime>\\n        <LoginName>det1111</LoginName>\\n        <SubTypeCode>020008</SubTypeCode>\\n        <LogDetail>{\\"client_ip\\": [\\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\", \\"106.11.XX.XX\\"], \\"start_time\\": \\"2020-05-10 00:00:01\\", \\"instance\\": [\\"omniscience-data\\", \\"punish-beaver-data\\"], \\"end_time\\": \\"2020-05-10 00:21:22\\", \\"client_ua\\": [\\"Java/1.8.0_152\\", \\"Java/1.8.0_92\\", \\"aliyun-sdk-java/2.0.0\\", \\"aliyun-sdk-java/2.8.0(Linux/4.9.151-015.ali3000.alios7.x86_64/amd64;1.8.0_152)\\"], \\"user_name\\": 1512222261295262}</LogDetail>\\n        <TypeCode>02</TypeCode>\\n        <AlertTime>1545829129000</AlertTime>\\n        <DealUserId>229157443385014140</DealUserId>\\n        <TypeName>数据流转异常</TypeName>\\n        <DealDisplayName>yundunsr</DealDisplayName>\\n        <Id>52234</Id>\\n        <ProductCode>MaxCompute</ProductCode>\\n        <HandleInfoList>\\n            <Status>1</Status>\\n            <EnableTime>1611139155000</EnableTime>\\n            <HandlerValue>10</HandlerValue>\\n            <DisableTime>1611139155000</DisableTime>\\n            <HandlerName>移除白名单</HandlerName>\\n            <HandlerType>rds_security_ip</HandlerType>\\n            <CurrentValue>sddp-test2</CurrentValue>\\n            <Id>11</Id>\\n        </HandleInfoList>\\n        <Detail>\\n            <Content>\\n                <Label>异常描述</Label>\\n                <Value>该账号在2019-09-09 00:06:45 至 2019-09-09 00:57:37之间使用异常终端(1.2.3.4)访问产品 OSS。</Value>\\n            </Content>\\n            <Chart>\\n                <Type>1</Type>\\n                <Label>基线行为画像</Label>\\n                <XLabel>天数</XLabel>\\n                <YLabel>值</YLabel>\\n                <Data>\\n                    <Y>[1,2,3,...]</Y>\\n                    <X>[test1,test2,...]</X>\\n                </Data>\\n            </Chart>\\n            <ResourceInfo>\\n                <Label>事件风险</Label>\\n                <Value>来自异常终端鉴权记录可能是由于账号访问权限被外部攻击者获取或者员工在使用非办公终端访问数据</Value>\\n            </ResourceInfo>\\n        </Detail>\\n    </Event>\\n</DescribeEventDetailResponse>","errorExample":""}]',
            'title' => '查询异常事件详情',
            'summary' => '调用本接口查询单个异常事件详情，包括异常事件发生时间、异常描述及处理状态等。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeEventTypes' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '82039',
                'abilityTreeNodes' => [
                    'FEATUREsddpCHNP1R',
                    'FEATUREsddpGH0F1O',
                    'FEATUREsddpR2D59W',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh**：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'ParentTypeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '子类型异常事件所属父类型异常事件ID。取值：'."\n"
                            .'- **01**：权限使用异常。'."\n"
                            .'- **02**：数据流转异常。'."\n"
                            .'- **03**：数据操作异常。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '01',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品的资源类型。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态。取值：'."\n"
                            .'- **1**：可用。'."\n"
                            .'- **2**：不可用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
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
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                            'EventTypeList' => [
                                'description' => '异常事件类型列表。'."\n"
                                    ."\n"
                                    .'> ParentTypeId为空时，返回异常事件父类型；ParentTypeId不为空时，返回异常事件子类型。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '异常事件类型详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Code' => [
                                            'description' => '父类型异常事件编码。',
                                            'type' => 'string',
                                            'example' => '01',
                                        ],
                                        'Description' => [
                                            'description' => '父类型异常事件描述信息。',
                                            'type' => 'string',
                                            'example' => '权限使用异常，****',
                                        ],
                                        'Name' => [
                                            'description' => '父类型异常事件名称。',
                                            'type' => 'string',
                                            'example' => '权限使用异常',
                                        ],
                                        'Id' => [
                                            'description' => '父类型异常事件的唯一标识ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'SubTypeList' => [
                                            'description' => '子类型异常事件列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '子类型异常事件详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Status' => [
                                                        'description' => 'DSC对子类型异常事件的检测功能。取值：'."\n"
                                                            .'- **1**：开启。'."\n"
                                                            .'- **0**：关闭。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'Description' => [
                                                        'description' => '子类型异常事件描述信息。',
                                                        'type' => 'string',
                                                        'example' => '配置失当-ODPS敏感项目未设置保护，****',
                                                    ],
                                                    'ConfigContentType' => [
                                                        'description' => '规则项内容格式。取值：'."\n"
                                                            .'- **0**：数字类（阈值等）。'."\n"
                                                            .'- **1**：文本类（IP等）。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'EventHitCount' => [
                                                        'description' => '事件命中次数。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '2',
                                                    ],
                                                    'ConfigValue' => [
                                                        'description' => '配置值。',
                                                        'type' => 'string',
                                                        'example' => '90',
                                                    ],
                                                    'ConfigCode' => [
                                                        'description' => '配置编码。',
                                                        'type' => 'string',
                                                        'example' => '0100**',
                                                    ],
                                                    'Code' => [
                                                        'description' => '子类型异常事件编码。',
                                                        'type' => 'string',
                                                        'example' => '020008',
                                                    ],
                                                    'ConfigDescription' => [
                                                        'description' => '配置描述。',
                                                        'type' => 'string',
                                                        'example' => '权限闲置期间超过阈值：目前的阈值定义为${value}个自然日',
                                                    ],
                                                    'Name' => [
                                                        'description' => '子类型异常事件名称。',
                                                        'type' => 'string',
                                                        'example' => '配置失当-ODPS敏感项目未设置保护',
                                                    ],
                                                    'AdaptedProduct' => [
                                                        'description' => '规则适用产品。取值：**MaxCompute**、**OSS**、**ADS**、**OTS**、**RDS**等。',
                                                        'type' => 'string',
                                                        'example' => 'RDS',
                                                    ],
                                                    'Id' => [
                                                        'description' => '子类型异常事件唯一标识ID。',
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
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\",\\n  \\"EventTypeList\\": [\\n    {\\n      \\"Code\\": \\"01\\",\\n      \\"Description\\": \\"权限使用异常，****\\",\\n      \\"Name\\": \\"权限使用异常\\",\\n      \\"Id\\": 1,\\n      \\"SubTypeList\\": [\\n        {\\n          \\"Status\\": 1,\\n          \\"Description\\": \\"配置失当-ODPS敏感项目未设置保护，****\\",\\n          \\"ConfigContentType\\": 1,\\n          \\"EventHitCount\\": 2,\\n          \\"ConfigValue\\": \\"90\\",\\n          \\"ConfigCode\\": \\"0100**\\",\\n          \\"Code\\": \\"020008\\",\\n          \\"ConfigDescription\\": \\"权限闲置期间超过阈值：目前的阈值定义为${value}个自然日\\",\\n          \\"Name\\": \\"配置失当-ODPS敏感项目未设置保护\\",\\n          \\"AdaptedProduct\\": \\"RDS\\",\\n          \\"Id\\": 1\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeEventTypesResponse>\\n    <RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\n    <EventTypeList>\\n        <Code>01</Code>\\n        <Description>权限使用异常，***</Description>\\n        <Name>权限使用异常</Name>\\n        <Id>1</Id>\\n        <SubTypeList>\\n            <Status>1</Status>\\n            <Description>配置失当-ODPS敏感项目未设置保护，****</Description>\\n            <ConfigContentType>1</ConfigContentType>\\n            <EventHitCount>2</EventHitCount>\\n            <ConfigValue>90</ConfigValue>\\n            <ConfigCode>0100**</ConfigCode>\\n            <Code>020008</Code>\\n            <ConfigDescription>权限闲置期间超过阈值：目前的阈值定义为${value}个自然日</ConfigDescription>\\n            <Name>配置失当-ODPS敏感项目未设置保护</Name>\\n            <AdaptedProduct>RDS</AdaptedProduct>\\n            <Id>1</Id>\\n        </SubTypeList>\\n    </EventTypeList>\\n</DescribeEventTypesResponse>","errorExample":""}]',
            'title' => '查询异常事件类型的列表',
            'summary' => '调用本接口查询异常事件类型的列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDataMaskingTasks' => [
            'summary' => '调用DescribeDataMaskingTasks获取脱敏任务列表。',
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
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '82022',
                'abilityTreeNodes' => [
                    'FEATUREsddpNV5XKZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'SearchKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务搜索关键词。支持搜索任务名称和任务编号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务创建的起始时间。格式：时间戳。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582992000000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '脱敏任务创建的结束时间。格式：时间戳。单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1583856000000',
                    ],
                ],
                [
                    'name' => 'DstType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '脱敏数据源所属的产品。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表每页显示的数据最大条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。',
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
                            'CurrentPage' => [
                                'description' => '结果中显示的当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-4******',
                            ],
                            'PageSize' => [
                                'description' => '结果中每页显示数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'Items' => [
                                'description' => '脱敏任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '脱敏任务详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '任务状态：'."\n"
                                                .'- **0**：已关闭。'."\n"
                                                .'- **1**：开启。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Owner' => [
                                            'description' => '任务创建者。',
                                            'type' => 'string',
                                            'example' => 'owner',
                                        ],
                                        'TaskName' => [
                                            'description' => '任务名称。',
                                            'type' => 'string',
                                            'example' => '任务名称',
                                        ],
                                        'SrcType' => [
                                            'description' => '源产品类型，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'DstType' => [
                                            'description' => '脱敏数据源所属的产品。取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'HasUnfinishProcess' => [
                                            'description' => '是否正在执行中。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'OriginalTable' => [
                                            'description' => '是否是原表脱敏。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'TriggerType' => [
                                            'description' => '执行方式：'."\n"
                                                .'- **1**：手工。'."\n"
                                                .'- **2**：定时。'."\n"
                                                .'- **3**：手工加定时。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'DstTypeCode' => [
                                            'description' => '目标产品类型。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                        'RunCount' => [
                                            'description' => '执行次数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建时间。格式：时间戳。单位：毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582992000000',
                                        ],
                                        'TaskId' => [
                                            'description' => '任务编号。',
                                            'type' => 'string',
                                            'example' => 'mt4HBgtw1B******',
                                        ],
                                        'DstPath' => [
                                            'description' => '目标路径。',
                                            'type' => 'string',
                                            'example' => '***/table1',
                                        ],
                                        'SrcTypeCode' => [
                                            'description' => '源产品类型。取值：**MaxCompute、OSS、ADS、OTS、RDS**等。',
                                            'type' => 'string',
                                            'example' => 'RDS',
                                        ],
                                        'Id' => [
                                            'description' => '任务ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'SrcPath' => [
                                            'description' => '源路径。',
                                            'type' => 'string',
                                            'example' => '***/table2',
                                        ],
                                        'SrcMemberAccount' => [
                                            'description' => '脱敏源所属的成员账号。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '192479427903xxxx',
                                        ],
                                        'DstMemberAccount' => [
                                            'description' => '脱敏目标所属的成员账号。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '192479427903xxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-4******\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"Owner\\": \\"owner\\",\\n      \\"TaskName\\": \\"任务名称\\",\\n      \\"SrcType\\": 5,\\n      \\"DstType\\": 5,\\n      \\"HasUnfinishProcess\\": false,\\n      \\"OriginalTable\\": false,\\n      \\"TriggerType\\": 1,\\n      \\"DstTypeCode\\": \\"RDS\\",\\n      \\"RunCount\\": 1,\\n      \\"GmtCreate\\": 1582992000000,\\n      \\"TaskId\\": \\"mt4HBgtw1B******\\",\\n      \\"DstPath\\": \\"***/table1\\",\\n      \\"SrcTypeCode\\": \\"RDS\\",\\n      \\"Id\\": 1,\\n      \\"SrcPath\\": \\"***/table2\\",\\n      \\"SrcMemberAccount\\": 0,\\n      \\"DstMemberAccount\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataMaskingTasksResponse>\\n<TotalCount>1</TotalCount>\\n<PageSize>5</PageSize>\\n<CurrentPage>1</CurrentPage>\\n<Items>\\n    <Status>1</Status>\\n    <TriggerType>1</TriggerType>\\n    <Owner>***</Owner>\\n    <TaskId>mt4HBgtw1B****</TaskId>\\n    <DstPath>********</DstPath>\\n    <HasUnfinishProcess>false</HasUnfinishProcess>\\n    <DstTypeCode>OSS</DstTypeCode>\\n    <SrcPath>*********</SrcPath>\\n    <DstType>2</DstType>\\n    <GmtCreate>1583739870000</GmtCreate>\\n    <TaskName>任务名称</TaskName>\\n    <SrcType>2</SrcType>\\n    <RunCount>3</RunCount>\\n    <Id>1</Id>\\n    <SrcTypeCode>OSS</SrcTypeCode>\\n</Items>\\n</DescribeDataMaskingTasksResponse>","errorExample":""}]',
            'title' => '查询脱敏任务列表',
            'description' => '本接口一般用于获取静态脱敏任务列表，便于搜索和任务管理。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDataMaskingRunHistory' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认为**zh_cn**。取值：'."\n"
                            .'- **zh_cn**：中文。'."\n"
                            .'- **en_us**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '脱敏任务的编号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mt4HBgtw1B******',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按任务执行的起始时间查询，时间戳毫秒格式。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582992000000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按任务执行的结束时间查询，时间戳毫秒格式。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1583856000000',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务执行状态：'."\n"
                            .'- **-1**：等待执行。'."\n"
                            .'- **0**：执行中。'."\n"
                            .'- **1**：执行成功。'."\n"
                            .'- **2**：执行失败。'."\n"
                            .'- **3**：用户终止。'."\n"
                            .'- **4**：部分失败。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'SrcType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '脱敏数据所属的源产品类型，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'DstType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据脱敏后放置的目标产品类型，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '列表每页显示的最大数据条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MainProcessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主任务ID。'."\n"
                            ."\n"
                            .'>包含子任务的时候该参数值为当前任务ID否则为空。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '366731',
                    ],
                ],
                [
                    'name' => 'SrcTableName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '源表的表名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'add',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '结果中显示的当前页的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '结果的请求ID。',
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-4******',
                            ],
                            'PageSize' => [
                                'description' => '结果中每页显示数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '结果中数据的总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'Items' => [
                                'description' => '脱敏任务信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '查询到结果详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '任务执行状态：'."\n"
                                                .'- -**1**：等待执行。'."\n"
                                                .'- **0**：执行中。'."\n"
                                                .'- **1**：执行成功。'."\n"
                                                .'- **2**：执行失败。'."\n"
                                                .'- **3**：用户终止。'."\n"
                                                .'- **4**：部分失败.',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Type' => [
                                            'description' => '执行方式：'."\n"
                                                .'- **1**：手工。'."\n"
                                                .'- **2**：定时。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'SrcType' => [
                                            'description' => '脱敏数据所属的源产品类型，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'SrcTableName' => [
                                            'description' => '源表的表名。'."\n",
                                            'type' => 'string',
                                            'example' => 'add',
                                        ],
                                        'MaskingCount' => [
                                            'description' => '脱敏行数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'Percentage' => [
                                            'description' => '执行进度。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '100',
                                        ],
                                        'DstType' => [
                                            'description' => '数据脱敏后放置的目标产品类型，取值：**1**：MaxCompute，**2**：OSS，**3**：ADS，**4**：OTS，**5**：RDS等。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'FailMsg' => [
                                            'description' => '任务执行失败的原因。',
                                            'type' => 'string',
                                            'example' => 'error',
                                        ],
                                        'FailCode' => [
                                            'description' => '任务执行失败的错误码，只有任务执行失败时才有值。',
                                            'type' => 'string',
                                            'example' => 'masking_task_not_found',
                                        ],
                                        'ConflictCount' => [
                                            'description' => '冲突行数，表示脱敏后待插入目标表的数据和目标表中已有的数据冲突的行数。'."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'DstTypeCode' => [
                                            'description' => '目的产品类型。取值：**MaxCompute、OSS、ADS、OTS、RDS**等',
                                            'type' => 'string',
                                            'example' => 'OSS',
                                        ],
                                        'EndTime' => [
                                            'description' => '执行结束时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582251233000',
                                        ],
                                        'RunIndex' => [
                                            'description' => '第几次执行该任务。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'StartTime' => [
                                            'description' => '执行时间，时间戳毫秒格式。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1582251233000',
                                        ],
                                        'HasSubProcess' => [
                                            'description' => '已创建的子任务数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '4',
                                        ],
                                        'HasDownloadFile' => [
                                            'description' => '是否有下载文件。'."\n"
                                                ."\n"
                                                .'- **1**：有。'."\n"
                                                .'- **0**：没有。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'TaskId' => [
                                            'description' => '任务编号。',
                                            'type' => 'string',
                                            'example' => 'mt4HBgtw1B******',
                                        ],
                                        'SrcTypeCode' => [
                                            'description' => '源产品类型。取值：**MaxCompute、OSS、ADS、OTS、RDS**等',
                                            'type' => 'string',
                                            'example' => 'OSS',
                                        ],
                                        'Id' => [
                                            'description' => '执行记录的ID。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"769FB3C1-F4C9-4******\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"Items\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"Type\\": 1,\\n      \\"SrcType\\": 2,\\n      \\"SrcTableName\\": \\"add\\",\\n      \\"MaskingCount\\": 100,\\n      \\"Percentage\\": 100,\\n      \\"DstType\\": 2,\\n      \\"FailMsg\\": \\"error\\",\\n      \\"FailCode\\": \\"masking_task_not_found\\",\\n      \\"ConflictCount\\": 0,\\n      \\"DstTypeCode\\": \\"OSS\\",\\n      \\"EndTime\\": 1582251233000,\\n      \\"RunIndex\\": 1,\\n      \\"StartTime\\": 1582251233000,\\n      \\"HasSubProcess\\": 4,\\n      \\"HasDownloadFile\\": 1,\\n      \\"TaskId\\": \\"mt4HBgtw1B******\\",\\n      \\"SrcTypeCode\\": \\"OSS\\",\\n      \\"Id\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDataMaskingRunHistory>\\n<TotalCount>1</TotalCount>\\n<PageSize>5</PageSize>\\n<CurrentPage>1</CurrentPage>\\n<Items>\\n    <Status>1</Status>\\n    <RunIndex>1</RunIndex>\\n    <TaskId>Vd8Rj80eBXR*****</TaskId>\\n    <Percentage>100</Percentage>\\n    <MaskingCount>100000</MaskingCount>\\n    <StartTime>1582251233000</StartTime>\\n    <DstTypeCode>RDS</DstTypeCode>\\n    <ConflictCount>0</ConflictCount>\\n    <DstType>5</DstType>\\n    <Type>1</Type>\\n    <SrcType>1</SrcType>\\n    <Id>4869</Id>\\n    <SrcTypeCode>MaxCompute</SrcTypeCode>\\n</Items>\\n<RequestId>769FB3C1-F4C9-4******</RequestId>\\n</DescribeDataMaskingRunHistory>","errorExample":""}]',
            'title' => '查询脱敏任务执行情况',
            'summary' => '调用DescribeDataMaskingRunHistory查询脱敏任务执行情况。',
            'description' => '本接口一般用于获取静态脱敏任务的执行情况，便于您搜索脱敏任务状态和查看任务进度。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ExecDatamask' => [
            'summary' => '调用ExecDatamask接口对数据进行动态脱敏。',
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '82098',
                'abilityTreeNodes' => [
                    'FEATUREsddpUBRQH2',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定脱敏模板ID。在[数据安全中心控制台](https://yundun.console.aliyun.com/?p=sddp#/dm/dmConfig/cn-zhangjiakou)上新建模板后会生成模板ID，您可以在**数据脱敏**>**脱敏配置**>**脱敏模板**页面获取**模板ID**。'."\n"
                            ."\n"
                            .'- 若脱敏模板匹配类型是**字段名称**，则取**Data**中的**dataHeaderList**进行匹配。'."\n"
                            .'- 若脱敏模板匹配类型是**敏感类型**，则取**Data**中的**ruleList**进行匹配。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定需要脱敏的数据。采用JSON格式的字符串表述，包含以下字段：'."\n"
                            ."\n"
                            .'- **dataHeaderList**：数据的列名，顺序和需要脱敏的数据一一对应。'."\n"
                            ."\n"
                            .'- **dataList**：需要脱敏的数据。'."\n"
                            ."\n"
                            .'- **ruleList** ：敏感类型ID列表，顺序和需要脱敏的数据一一对应。'."\n"
                            .'                        敏感类型ID是数字，不同的数字代表不同的敏感类型，可通过[DescribeRules](~~DescribeRules~~)接口获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"dataHeaderList":["name","age"],"dataList":[["lily",18],["lucy",17]],"ruleList":[1002,null]}',
                    ],
                ],
                [
                    'name' => 'FeatureType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该参数已废弃。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和返回消息的语言类型。默认值为**zh_cn**。取值'."\n"
                            ."\n"
                            .'- **zh_cn**：简体中文'."\n"
                            .'- **en_us**：英文（美国）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '脱敏完成后的数据，采用JSON格式的字符串表述。包含以下字段：'."\n"
                                    ."\n"
                                    .'- **dataHeaderList**：表示脱敏数据的列名。'."\n"
                                    ."\n"
                                    .'- **dataList**：表示需要脱敏的数据。字段顺序和脱敏数据的列名一致。'."\n"
                                    ."\n"
                                    .'- **ruleList** : 敏感类型ID。',
                                'type' => 'string',
                                'example' => '{"dataHeaderList":["name","age"],"dataList":[["l***",18],["l***",17]],"ruleList":[1002,null]}',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '813BA9FA-D062-42C4-8CD5-11A7640B96E6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{\\\\\\"dataHeaderList\\\\\\":[\\\\\\"name\\\\\\",\\\\\\"age\\\\\\"],\\\\\\"dataList\\\\\\":[[\\\\\\"l***\\\\\\",18],[\\\\\\"l***\\\\\\",17]],\\\\\\"ruleList\\\\\\":[1002,null]}\\",\\n  \\"RequestId\\": \\"813BA9FA-D062-42C4-8CD5-11A7640B96E6\\"\\n}","errorExample":""},{"type":"xml","example":"<ExecDatamaskResponse>\\n   <Data>{\\"dataHeaderList\\":[\\"name\\",\\"age\\"],\\"dataList\\":[[\\"l***\\",18],[\\"l***\\",17]],\\"ruleList\\":[1002,null]}</Data>\\n   <RequestId>813BA9FA-D062-42C4-8CD5-11A7640B96E6</RequestId>\\n</ExecDatamaskResponse>","errorExample":""}]',
            'title' => '对数据进行动态脱敏',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StopMaskingProcess' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh_cn**：默认值，中文（简体）。'."\n"
                            .'- **en_us**：英文（美国）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '脱敏任务唯一资源ID，可通过[DescribeDataMaskingTasks](~~DescribeDataMaskingTasks~~)的返回值确定脱敏任务的资源ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '返回结果的请求ID。'."\n",
                                'type' => 'string',
                                'example' => '769FB3C1-F4C9-42DF-9B72-7077A8989C13',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"769FB3C1-F4C9-42DF-9B72-7077A8989C13\\"\\n}","errorExample":""},{"type":"xml","example":"<StopMaskingProcessResponse>\\r\\n<RequestId>769FB3C1-F4C9-42DF-9B72-7077A8989C13</RequestId>\\r\\n</StopMaskingProcessResponse>","errorExample":""}]',
            'title' => '终止脱敏任务',
            'summary' => '调用StopMaskingProcess接口终止脱敏任务。终止的脱敏任务，根据唯一资源ID，可通过ManualTriggerMaskingProcess重新开启脱敏任务。',
            'description' => '本接口一般在终止脱敏任务时使用，便于用户终止正在运行的脱敏任务。例如：历史配置的脱敏任务，不再需要对数据进行脱敏，可调用此接口。'."\n"
                ."\n"
                .'# QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ManualTriggerMaskingProcess' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认值zh_cn。取值：'."\n"
                            ."\n"
                            .'- **zh_cn**：中文'."\n"
                            .'- **en_us**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh_cn',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '脱敏任务ID，用数字表示。'."\n"
                            ."\n"
                            .'<note>脱敏任务编号是由一串字符表示，可通过DescribeDataMaskingTasks接口获取。</note>'."\n",
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
                        'description' => '返回结果对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '返回结果的请求ID。',
                                'type' => 'string',
                                'example' => '7C3AC882-E5A8-4855-BE77-B6837B695EF1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7C3AC882-E5A8-4855-BE77-B6837B695EF1\\"\\n}","type":"json"}]',
            'title' => '触发一次脱敏任务',
            'summary' => '调用ManualTriggerMaskingProcess触发一次脱敏任务。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'sddp-api.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'sddp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'sddp.cn-hangzhou-internal-prod-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'sddp.cn-zhangjiakou.aliyuncs.com',
        ],
    ],
];
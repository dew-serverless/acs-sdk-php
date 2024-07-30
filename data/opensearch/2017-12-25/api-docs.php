<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'OpenSearch',
        'version' => '2017-12-25',
    ],
    'directories' => [
        [
            'id' => 170735,
            'title' => '应用实例',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 170736,
                    'title' => '应用管理',
                    'type' => 'directory',
                    'children' => [
                        'RenewAppGroup',
                        'CreateAppGroup',
                        'ModifyAppGroup',
                        'ModifyAppGroupQuota',
                        'RemoveAppGroup',
                        'ListAppGroups',
                    ],
                ],
                [
                    'id' => 170744,
                    'title' => '应用版本',
                    'type' => 'directory',
                    'children' => [
                        'CreateApp',
                        'RemoveApp',
                        'DescribeApps',
                        'DescribeApp',
                        'DescribeAppStatistics',
                    ],
                ],
            ],
        ],
        [
            'id' => 170894,
            'title' => '实例周边',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 170895,
                    'title' => '自定义分析器',
                    'type' => 'directory',
                    'children' => [
                        'ListUserAnalyzers',
                        'CreateUserAnalyzer',
                        'DescribeUserAnalyzer',
                        'RemoveUserAnalyzer',
                        'ListUserAnalyzerEntries',
                        'PushUserAnalyzerEntries',
                    ],
                ],
                [
                    'id' => 170905,
                    'title' => 'ABTest',
                    'type' => 'directory',
                    'children' => [
                        [
                            'id' => 170906,
                            'title' => '实验场景',
                            'type' => 'directory',
                            'children' => [
                                'ListABTestScenes',
                                'CreateABTestScene',
                                'DescribeABTestScene',
                                'UpdateABTestScene',
                                'DeleteABTestScene',
                            ],
                        ],
                        [
                            'id' => 170976,
                            'title' => '实验组',
                            'type' => 'directory',
                            'children' => [
                                'ListABTestGroups',
                                'CreateABTestGroup',
                                'DeleteABTestGroup',
                                'DescribeABTestGroup',
                                'UpdateABTestGroup',
                            ],
                        ],
                        [
                            'id' => 170977,
                            'title' => '实验',
                            'type' => 'directory',
                            'children' => [
                                'ListABTestExperiments',
                                'CreateABTestExperiment',
                                'DescribeABTestExperiment',
                                'UpdateABTestExperiment',
                                'DeleteABTestExperiment',
                            ],
                        ],
                        [
                            'id' => 170978,
                            'title' => '白名单',
                            'type' => 'directory',
                            'children' => [
                                'ListABTestFixedFlowDividers',
                                'UpdateABTestFixedFlowDividers',
                            ],
                        ],
                    ],
                ],
                [
                    'id' => 170979,
                    'title' => '粗排表达式',
                    'type' => 'directory',
                    'children' => [
                        'ListFirstRanks',
                        'CreateFirstRank',
                        'DescribeFirstRank',
                        'RemoveFirstRank',
                        'ModifyFirstRank',
                    ],
                ],
                [
                    'id' => 170980,
                    'title' => '精排表达式',
                    'type' => 'directory',
                    'children' => [
                        'ListSecondRanks',
                        'CreateSecondRank',
                        'DescribeSecondRank',
                        'ModifySecondRank',
                        'RemoveSecondRank',
                    ],
                ],
                [
                    'id' => 170981,
                    'title' => '查询分析器',
                    'type' => 'directory',
                    'children' => [
                        'ListQueryProcessors',
                        'CreateQueryProcessor',
                        'ModifyQueryProcessor',
                        'RemoveQueryProcessor',
                        'DescribeQueryProcessor',
                        'ListQueryProcessorNers',
                        'ListQueryProcessorAnalyzerResults',
                    ],
                ],
                [
                    'id' => 170982,
                    'title' => '干预词典',
                    'type' => 'directory',
                    'children' => [
                        'ListInterventionDictionaries',
                        'CreateInterventionDictionary',
                        'DescribeInterventionDictionary',
                        'RemoveInterventionDictionary',
                        'ListInterventionDictionaryEntries',
                        'PushInterventionDictionaryEntries',
                        'ListInterventionDictionaryRelatedEntities',
                        'ListInterventionDictionaryNerResults',
                    ],
                ],
                [
                    'id' => 170983,
                    'title' => '优化大师',
                    'type' => 'directory',
                    'children' => [
                        'EnableSlowQuery',
                        'DisableSlowQuery',
                        'DescribeSlowQueryStatus',
                        'StartSlowQueryAnalyzer',
                        'ListSlowQueryQueries',
                        'ListSlowQueryCategories',
                    ],
                ],
                [
                    'id' => 170984,
                    'title' => '配额审批',
                    'type' => 'directory',
                    'children' => [
                        'ListQuotaReviewTasks',
                    ],
                ],
                [
                    'id' => 170985,
                    'title' => '定时任务',
                    'type' => 'directory',
                    'children' => [
                        'ListScheduledTasks',
                        'CreateScheduledTask',
                        'DescribeScheduledTask',
                        'ModifyScheduledTask',
                        'RemoveScheduledTask',
                    ],
                ],
                [
                    'id' => 170986,
                    'title' => '搜索策略',
                    'type' => 'directory',
                    'children' => [
                        'ListSortExpressions',
                    ],
                ],
                [
                    'id' => 170987,
                    'title' => 'ElasticSearch引擎实例',
                    'type' => 'directory',
                    'children' => [
                        'UnbindEsInstance',
                        'BindEsInstance',
                        'BindESUserAnalyzer',
                        'UnbindESUserAnalyzer',
                    ],
                ],
                [
                    'id' => 170988,
                    'title' => '当前处理流',
                    'type' => 'directory',
                    'children' => [
                        'ListProceedings',
                    ],
                ],
                [
                    'id' => 170989,
                    'title' => '统计',
                    'type' => 'directory',
                    'children' => [
                        'ListStatisticLogs',
                        'ListStatisticReport',
                    ],
                ],
                [
                    'id' => 175840,
                    'title' => 'cava脚本',
                    'type' => 'directory',
                    'children' => [
                        'UpdateSortScript',
                        'SaveSortScriptFile',
                        'ReleaseSortScript',
                        'GetSortScriptFile',
                        'GetSortScript',
                        'GetScriptFileNames',
                        'DeleteSortScriptFile',
                        'DeleteSortScript',
                        'CreateSortScript',
                        'CompileSortScript',
                    ],
                ],
                [
                    'id' => 175844,
                    'title' => '查询策略',
                    'type' => 'directory',
                    'children' => [
                        'UpdateSearchStrategy',
                        'RemoveSearchStrategy',
                        'ListSearchStrategies',
                        'GetSearchStrategy',
                        'CreateSearchStrategy',
                    ],
                ],
            ],
        ],
        [
            'id' => 170990,
            'title' => '版本周边',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 170991,
                    'title' => '默认展示字段',
                    'type' => 'directory',
                    'children' => [
                        'UpdateFetchFields',
                    ],
                ],
                [
                    'id' => 170992,
                    'title' => '搜索结果摘要',
                    'type' => 'directory',
                    'children' => [
                        'UpdateSummaries',
                    ],
                ],
            ],
        ],
        [
            'id' => 170993,
            'title' => '算法周边',
            'type' => 'directory',
            'children' => [
                'CreateFunctionResource',
                'GetFunctionCurrentVersion',
                'GetFunctionVersion',
                'GetFunctionDefaultInstance',
                'UpdateFunctionDefaultInstance',
                'ListFunctionTasks',
                'GetFunctionTask',
                'DeleteFunctionTask',
                'CreateFunctionTask',
                'ListFunctionInstances',
                'GetFunctionInstance',
                'DeleteFunctionInstance',
                'UpdateFunctionInstance',
                'CreateFunctionInstance',
            ],
        ],
        [
            'id' => 170783,
            'title' => '其它(未在目录中的文档)',
            'type' => 'directory',
            'children' => [
                'DescribeAppGroup',
                'ValidateDataSources',
                'ReplaceAppGroupCommodityCode',
                'ListSortScripts',
                'ListDataSourceTables',
                'ListDataSourceTableFields',
                'GetDomain',
                'GenerateMergedTable',
                'DescribeRegions',
            ],
        ],
        [
            'id' => 170995,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'DescribeDataCollction',
                'ListDataCollections',
                'RemoveDataCollection',
                'UntagResources',
                'ListTagResources',
                'TagResources',
                'GetFunctionResource',
                'ListFunctionResources',
                'DeleteFunctionResource',
                'UpdateFunctionResource',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'ABTestExperiment' => [
                'title' => 'ABTest实验',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '实验别名',
                        'type' => 'string',
                    ],
                    'traffic' => [
                        'title' => '实验分桶百分比',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'serialNumber' => [
                        'title' => 'hyperspace自动生成的实验序列号',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'online' => [
                        'title' => '实验是否在线',
                        'type' => 'boolean',
                    ],
                    'params' => [
                        'title' => '实验参数',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ABTestGroup' => [
                'title' => 'ABTest实验组',
                'description' => 'ABTest实验组',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '实验组别名',
                        'type' => 'string',
                    ],
                    'status' => [
                        'title' => '实验组状态',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ABTestScene' => [
                'title' => 'ABTest实验场景',
                'description' => 'ABTest实验场景',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '场景别名',
                        'type' => 'string',
                    ],
                    'values' => [
                        'title' => '场景标识',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'status' => [
                        'title' => '场景状态',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0 停止实验 1 开通实验',
                    ],
                ],
            ],
            'App' => [
                'title' => 'A short description of struct',
                'description' => '应用版本',
                'type' => 'object',
                'properties' => [
                    'autoSwitch' => [
                        'title' => '是否自动切换',
                        'type' => 'boolean',
                    ],
                    'networkType' => [
                        'title' => '可用区标识',
                        'type' => 'string',
                    ],
                    'description' => [
                        'title' => '版本描述',
                        'type' => 'string',
                    ],
                    'schema' => [
                        'title' => '应用结构',
                        '$ref' => '#/components/schemas/Schema',
                    ],
                    'schemas' => [
                        'title' => '应用结构',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Schema',
                        ],
                    ],
                    'fetchFields' => [
                        'title' => '默认展示字段',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'firstRanks' => [
                        'title' => '粗排表达式配置',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/FirstRank',
                        ],
                    ],
                    'secondRanks' => [
                        'title' => '精排表达式配置',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SecondRank',
                        ],
                    ],
                    'dataSources' => [
                        'title' => '数据源配置',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataSource',
                        ],
                    ],
                    'summaries' => [
                        'title' => '搜索结果摘要设置',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Summary',
                        ],
                    ],
                    'queryProcessors' => [
                        'title' => '查询意图理解规则配置',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/QueryProcessor',
                        ],
                    ],
                    'realtimeShared' => [
                        'title' => '是否共享实时流？',
                        'type' => 'boolean',
                    ],
                    'cluster' => [
                        'title' => '能力开放配置',
                        'type' => 'object',
                        'properties' => [
                            'maxTimeoutMS' => [
                                'title' => '超时时间',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'maxQueryClauseLength' => [
                                'title' => '最大长度',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'domain' => [
                        'title' => '行业模型',
                        '$ref' => '#/components/schemas/Domain',
                    ],
                    'type' => [
                        'title' => '版本类型',
                        'type' => 'string',
                    ],
                    'quota' => [
                        'title' => '版本配额',
                        '$ref' => '#/components/schemas/Quota',
                    ],
                ],
            ],
            'AppGroup' => [
                'title' => '应用',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '应用名称',
                        'type' => 'string',
                    ],
                    'quota' => [
                        'title' => '配额信息',
                        '$ref' => '#/components/schemas/Quota',
                    ],
                    'chargingWay' => [
                        'title' => '计费类型',
                        'type' => 'string',
                    ],
                    'type' => [
                        'title' => '应用类型',
                        'type' => 'string',
                    ],
                    'chargeType' => [
                        'title' => '付费类型',
                        'type' => 'string',
                    ],
                    'description' => [
                        'title' => '应用描述',
                        'type' => 'string',
                    ],
                    'domain' => [
                        'title' => '行业类型',
                        'type' => 'string',
                    ],
                ],
            ],
            'DataSource' => [
                'title' => '数据源配置',
                'type' => 'object',
                'properties' => [
                    'tableName' => [
                        'title' => '数据源配置标识',
                        'type' => 'string',
                    ],
                    'type' => [
                        'title' => '数据源类型',
                        'type' => 'string',
                    ],
                    'fields' => [
                        'title' => '数据源表字段 => 应用表字段映射',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'plugins' => [
                        'title' => '数据源插件',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'title' => '插件名称',
                                    'type' => 'string',
                                ],
                                'fromFields' => [
                                    'title' => '数据来源字段',
                                    'type' => 'string',
                                ],
                                'parameters' => [
                                    'title' => '插件参数',
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'keyField' => [
                        'title' => '主键',
                        'type' => 'string',
                    ],
                    'schemaName' => [
                        'title' => '宽表名称',
                        'type' => 'string',
                    ],
                    'parameters' => [
                        'title' => '数据源信息',
                        'type' => 'object',
                    ],
                ],
            ],
            'Domain' => [
                'title' => '行业模型',
                'description' => '行业模型',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '行业类型',
                        'type' => 'string',
                    ],
                    'category' => [
                        'title' => '行业垂类',
                        'type' => 'string',
                    ],
                    'functions' => [
                        'title' => '已选择功能',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'array',
                            'items' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'FirstRank' => [
                'title' => '粗排表达式配置',
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'title' => '表达式类型 (STRUCT, STRING)',
                        'type' => 'string',
                    ],
                    'name' => [
                        'title' => '名称',
                        'type' => 'string',
                    ],
                    'description' => [
                        'title' => '描述',
                        'type' => 'string',
                    ],
                    'active' => [
                        'title' => '是否是默认表达式',
                        'type' => 'boolean',
                    ],
                    'meta' => [
                        'title' => '表达式信息',
                        'type' => 'any',
                    ],
                ],
            ],
            'PrepayOrderInfo' => [
                'title' => '预付费订购信息',
                'description' => '预付费订购信息',
                'type' => 'object',
                'properties' => [
                    'duration' => [
                        'title' => '持续时间',
                        'description' => '持续时间',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'pricingCycle' => [
                        'title' => '周期',
                        'description' => '周期:'."\n"
                            ."\n"
                            .'- Year'."\n"
                            .'- Month',
                        'type' => 'string',
                        'example' => 'Year',
                    ],
                    'autoRenew' => [
                        'title' => '是否要自动续费',
                        'description' => '是否要自动续费',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                ],
            ],
            'QueryProcessor' => [
                'title' => '查询意图理解规则配置',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '规则名称',
                        'type' => 'string',
                    ],
                    'domain' => [
                        'title' => '行业类型',
                        'type' => 'string',
                    ],
                    'category' => [
                        'title' => '垂类',
                        'type' => 'string',
                    ],
                    'processors' => [
                        'title' => '包含功能',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                    ],
                    'indexes' => [
                        'title' => '应用的索引范围',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'active' => [
                        'title' => '是否默认规则',
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Quota' => [
                'title' => '版本配额',
                'type' => 'object',
                'properties' => [
                    'docSize' => [
                        'title' => '存储容量 (单位:GB)',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'computeResource' => [
                        'title' => '计算资源 (单位:LCU)',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'spec' => [
                        'title' => '规格',
                        'type' => 'string',
                    ],
                    'orderType' => [
                        'title' => '变配类型',
                        'type' => 'string',
                    ],
                ],
            ],
            'ScheduledTask' => [
                'title' => '定时任务',
                'description' => '定时任务',
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'title' => '任务类型',
                        'type' => 'string',
                    ],
                    'cron' => [
                        'title' => '时间表达式',
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'title' => '是否执行',
                        'type' => 'boolean',
                    ],
                    'version' => [
                        'title' => '待删除版本号',
                        'type' => 'string',
                    ],
                    'forkedAppId' => [
                        'title' => '上一个版本id',
                        'type' => 'string',
                    ],
                    'autoSwitch' => [
                        'title' => '是否自动切换上线',
                        'type' => 'boolean',
                    ],
                    'permanent' => [
                        'title' => '是否持久化',
                        'type' => 'boolean',
                    ],
                    'runNow' => [
                        'title' => '是否立即执行',
                        'type' => 'boolean',
                    ],
                    'filter' => [
                        'title' => '清理配置',
                        'type' => 'object',
                        'properties' => [
                            'field' => [
                                'title' => '过滤字段名称',
                                'type' => 'string',
                            ],
                            'days' => [
                                'title' => '保留天数',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'unit' => [
                                'title' => '时间单位',
                                'type' => 'string',
                            ],
                            'expression' => [
                                'title' => '表达式',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'Schema' => [
                'title' => '应用结构',
                'type' => 'object',
                'properties' => [
                    'tables' => [
                        'title' => '用户数据表',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'title' => '表名称',
                                    'type' => 'string',
                                ],
                                'primaryTable' => [
                                    'title' => '是否是主表',
                                    'type' => 'boolean',
                                ],
                                'fields' => [
                                    'title' => '字段清单',
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'title' => '字段名称',
                                                'type' => 'string',
                                            ],
                                            'primaryKey' => [
                                                'title' => '是否是主键',
                                                'type' => 'boolean',
                                            ],
                                            'type' => [
                                                'title' => '字段类型 (INT, INT_ARRAY, FLOAT, FLOAT_ARRAY, DOUBLE, DOUBLE_ARRAY, TEXT, SHORT_TEXT, LITERAL, LITERAL_ARRAY, GEO_POINT, TIMESTAMP)',
                                                'type' => 'string',
                                            ],
                                            'joinWith' => [
                                                'title' => '外表链接的数据表集合',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'label' => [
                                                'title' => '字段标签',
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'indexes' => [
                        'title' => '索引配置',
                        'type' => 'object',
                        'properties' => [
                            'searchFields' => [
                                'title' => '索引字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'analyzer' => [
                                            'title' => '分析器名称',
                                            'type' => 'string',
                                        ],
                                        'analyzerType' => [
                                            'title' => '分析器类型 (AUTO, MODEL, SYSTEM, USER)',
                                            'type' => 'string',
                                        ],
                                        'analyzerGeneration' => [
                                            'title' => '模型定制分析器Generation',
                                            'type' => 'string',
                                        ],
                                        'fields' => [
                                            'title' => '索引字段集合',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                        'label' => [
                                            'title' => '索引标签',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'filterFields' => [
                                'title' => '属性字段集合',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'routeField' => [
                        'title' => '一级分列字段名称',
                        'type' => 'string',
                    ],
                    'routeFieldValues' => [
                        'title' => '一级分列字段热点值清单（配置后启用“二级分列”）',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'secondRouteField' => [
                        'title' => '二级分列字段名称（当且仅当配置有`routeFieldValues`时生效，默认使用宽表主键）',
                        'type' => 'string',
                    ],
                    'ttlField' => [
                        'title' => '文档清理配置',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'title' => '文档时间字段',
                                'type' => 'string',
                            ],
                            'ttl' => [
                                'title' => '存活时间（毫秒）',
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'indexSortConfig' => [
                        'title' => '倒排索引配置',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'field' => [
                                    'title' => '字段',
                                    'type' => 'string',
                                ],
                                'direction' => [
                                    'title' => '排序方式ASC, DESC',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'name' => [
                        'title' => '宽表表名',
                        'type' => 'string',
                    ],
                ],
            ],
            'SearchStrategy' => [
                'title' => '查询策略',
                'description' => '查询策略',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '策略名称',
                        'type' => 'string',
                    ],
                    'description' => [
                        'title' => '策略描述',
                        'type' => 'string',
                    ],
                    'searchConfigs' => [
                        'title' => '查询策略',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'queryType' => [
                                    'title' => '查询类型',
                                    'type' => 'string',
                                    'example' => 'keyword: 关键字查询 vector: 向量查询',
                                ],
                                'firstRankName' => [
                                    'title' => '基础排序名称',
                                    'type' => 'string',
                                ],
                                'secondRankName' => [
                                    'title' => '业务排序名称',
                                    'type' => 'string',
                                ],
                                'mergeProportion' => [
                                    'title' => '参与综合排序的比例',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                            ],
                        ],
                    ],
                    'mergeConfig' => [
                        'title' => '归并排序配置',
                        'type' => 'object',
                        'properties' => [
                            'rankName' => [
                                'title' => '归并排序名称',
                                'type' => 'string',
                            ],
                            'docCount' => [
                                'title' => '归并排序文档数',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'isDefault' => [
                        'title' => '是否设置默认',
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SecondRank' => [
                'title' => '精排表达式配置',
                'type' => 'object',
                'properties' => [
                    'meta' => [
                        'title' => '表达式',
                        'type' => 'any',
                    ],
                    'name' => [
                        'title' => '名称',
                        'type' => 'string',
                    ],
                    'description' => [
                        'title' => '描述',
                        'type' => 'string',
                    ],
                    'active' => [
                        'title' => '是否是默认表达式',
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Summary' => [
                'title' => '搜索结果摘要设置',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '名称',
                        'type' => 'string',
                    ],
                    'meta' => [
                        'title' => '结构化表达式',
                        'type' => 'object',
                        'properties' => [
                            'field' => [
                                'title' => '字段',
                                'type' => 'string',
                            ],
                            'len' => [
                                'title' => '片段长度',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'element' => [
                                'title' => '飘红标签',
                                'type' => 'string',
                            ],
                            'ellipsis' => [
                                'title' => '片段连接符',
                                'type' => 'string',
                            ],
                            'snippet' => [
                                'title' => '片段数量',
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'active' => [
                        'title' => '是否是默认搜索结果摘要',
                        'type' => 'boolean',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'RenewAppGroup' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/actions/renew',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app',
                    ],
                ],
                [
                    'name' => 'clientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求幂等性',
                        'type' => 'string',
                        'required' => false,
                        'example' => '74db41d8cd3c784209093aa76afbe89e',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '续费请求体',
                        'required' => false,
                        '$ref' => '#/components/schemas/PrepayOrderInfo',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '续费结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": true\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result/>","errorExample":""}]',
            'title' => '为应用续费（暂不支持）',
            'summary' => '为应用续费（续费暂不支持API调用，请在控制台操作续费）。',
            'requestParamsDescription' => '**可选参数**'."\n"
                .'| 名称 | 类型 | 描述 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| duration | Integer | 续费周期（默认：1）<br />（取值范围:<br />- [1,2] 单位：Year<br />- [1,9] 单位：Month）<br /> |'."\n"
                .'| pricingCycle | String | 续费周期<br />（单位:<br />- Year<br />- Month）<br /> |'."\n"
                .'| autoRenew | boolean | 是否要自动续费（默认：false）<br />（取值范围:<br />- false<br />- true）<br /> |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAppGroup' => [
            'path' => '/v4/openapi/app-groups',
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
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体',
                        'required' => false,
                        '$ref' => '#/components/schemas/AppGroup',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '766CF6DB-CA02-3E12-7CBA-6AC21FC978FD',
                            ],
                            'result' => [
                                'description' => '空',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1590139542',
                                    ],
                                    'currentVersion' => [
                                        'description' => '当前在线版本',
                                        'type' => 'string',
                                        'example' => '100302903',
                                    ],
                                    'pendingSecondRankAlgoDeploymentId' => [
                                        'description' => '部署中的精排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'lockMode' => [
                                        'description' => '锁定状态'."\n"
                                            .'- Unlock 正常'."\n"
                                            .'- LockByExpiration 实例过期自动锁定'."\n"
                                            .'- ManualLock 手动触发锁定',
                                        'type' => 'string',
                                        'example' => 'Unlock',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1590978265',
                                    ],
                                    'id' => [
                                        'description' => '应用ID',
                                        'type' => 'string',
                                        'example' => '100302881',
                                    ],
                                    'chargeType' => [
                                        'description' => '付费类型'."\n"
                                            .'- POSTPAY 后付费（按量付费）'."\n"
                                            .'- PREPAY 预付费（包年包月）',
                                        'type' => 'string',
                                        'example' => 'POSTPAY',
                                    ],
                                    'hasPendingQuotaReviewTask' => [
                                        'description' => '是否配额审批中'."\n"
                                            .'- 0：正常'."\n"
                                            .'- 1：配额审批中',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'secondRankAlgoDeploymentId' => [
                                        'description' => '精排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'name' => [
                                        'description' => '应用名称',
                                        'type' => 'string',
                                        'example' => 'lsh_test_1',
                                    ],
                                    'instanceId' => [
                                        'description' => '实例ID',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'processingOrderId' => [
                                        'description' => '未结束订单号',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'chargingWay' => [
                                        'description' => '计费类型'."\n"
                                            .'- 1：计算资源'."\n"
                                            .'- 2：qps',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'type' => [
                                        'description' => '应用类型'."\n"
                                            .'- standard 标准版'."\n"
                                            .'- advance 老高级版（新应用不支持此类型）'."\n"
                                            .'- enhanced 新高级版',
                                        'type' => 'string',
                                        'example' => 'enhanced',
                                    ],
                                    'status' => [
                                        'description' => '应用状态'."\n"
                                            .'- producing 生产中'."\n"
                                            .'- review_pending 生产审批中'."\n"
                                            .'- config_pending 待配置'."\n"
                                            .'- normal 正常'."\n"
                                            .'- frozen 已冻结',
                                        'type' => 'string',
                                        'example' => 'normal',
                                    ],
                                    'projectId' => [
                                        'description' => 'abtest project 名称',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'switchedTime' => [
                                        'description' => '在线版本切换时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1590486386',
                                    ],
                                    'commodityCode' => [
                                        'description' => '商品CODE',
                                        'type' => 'string',
                                        'example' => 'opensearch',
                                    ],
                                    'expireOn' => [
                                        'description' => '过期时间',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'domain' => [
                                        'description' => '行业类型'."\n"
                                            .'- GENERAL 通用'."\n"
                                            .'- ECOMMERCE 电商'."\n"
                                            .'- IT_CONTENT IT内容',
                                        'type' => 'string',
                                        'example' => 'GENERAL',
                                    ],
                                    'description' => [
                                        'description' => '应用描述',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'firstRankAlgoDeploymentId' => [
                                        'description' => '粗排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'produced' => [
                                        'description' => '是否生产完成'."\n"
                                            .'- 0：生产中'."\n"
                                            .'- 1：生产完成',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'lockedByExpiration' => [
                                        'description' => '实例过期自动锁定',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'quota' => [
                                        'description' => '应用配额信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'spec' => [
                                                'description' => '规格'."\n"
                                                    .'- opensearch.share.junior 入门型'."\n"
                                                    .'- opensearch.share.common 共享通用型'."\n"
                                                    .'- opensearch.share.compute 共享计算型'."\n"
                                                    .'- opensearch.share.storage 共享存储型'."\n"
                                                    .'- opensearch.private.common 独享通用型'."\n"
                                                    .'- opensearch.private.compute 独享计算型'."\n"
                                                    .'- opensearch.private.storage 独享存储型',
                                                'type' => 'string',
                                                'example' => 'opensearch.share.common',
                                            ],
                                            'docSize' => [
                                                'description' => '存储容量 （单位：GB）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'computeResource' => [
                                                'description' => '计算资源 （单位：LCU）',
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
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"766CF6DB-CA02-3E12-7CBA-6AC21FC978FD\\",\\n  \\"result\\": {\\n    \\"created\\": 1590139542,\\n    \\"currentVersion\\": \\"100302903\\",\\n    \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"updated\\": 1590978265,\\n    \\"id\\": \\"100302881\\",\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"hasPendingQuotaReviewTask\\": 0,\\n    \\"secondRankAlgoDeploymentId\\": 0,\\n    \\"name\\": \\"lsh_test_1\\",\\n    \\"instanceId\\": \\"-\\",\\n    \\"processingOrderId\\": \\"-\\",\\n    \\"chargingWay\\": 1,\\n    \\"type\\": \\"enhanced\\",\\n    \\"status\\": \\"normal\\",\\n    \\"projectId\\": \\"-\\",\\n    \\"switchedTime\\": 1590486386,\\n    \\"commodityCode\\": \\"opensearch\\",\\n    \\"expireOn\\": \\"-\\",\\n    \\"domain\\": \\"GENERAL\\",\\n    \\"description\\": \\"-\\",\\n    \\"firstRankAlgoDeploymentId\\": 0,\\n    \\"produced\\": 1,\\n    \\"lockedByExpiration\\": 0,\\n    \\"quota\\": {\\n      \\"spec\\": \\"opensearch.share.common\\",\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>766CF6DB-CA02-3E12-7CBA-6AC21FC978FD</requestId>","errorExample":""}]',
            'title' => '创建一个应用',
            'summary' => '创建一个OpenSearch应用。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| name | String | 是 | "my_app" | 应用名称 |'."\n"
                .'| type | String | 是 | "standard" | 应用类型<br />- standard 标准版<br />- enhanced 高级版<br /> |'."\n"
                .'| quota | Object | 是 |  | 应用配额信息<br />参考：[Quota](~~170001~~) |'."\n"
                .'| chargeType | String | 否 | "POSTPAY" | 付费类型<br />- POSTPAY 后付费（按量付费）（默认值）<br />- PREPAY 预付费（包年包月）<br /> |'."\n"
                .'| order | Object | 否 | {"duration": 1,"pricingCycle": "Year"} | 订购周期信息 |'."\n"
                .'| order.duration | Integer | -- | 1 | 订购周期<br />最小值不小于0 |'."\n"
                .'| order.pricingCycle | String | -- | "Year" | 订购周期单位<br />- Year<br />- Month<br /> |'."\n"
                .'| order.autoRenew | Boolean | 否 | true | 是否要自动续费。当参数chargeType取值PREPAY时才生效。取值范围：<br />- true：自动续费。<br />- false（默认）：不自动续费。<br /> |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyAppGroup' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'object',
                        'properties' => [
                            'description' => [
                                'description' => '描述',
                                'type' => 'string',
                                'required' => false,
                                'example' => '"实例描述"',
                            ],
                            'currentVersion' => [
                                'description' => '在线版本。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1223232',
                            ],
                            'domain' => [
                                'description' => '行业类型：'."\n"
                                    ."\n"
                                    .'- general：通用行业。'."\n"
                                    .'- ecommerce：电商行业。'."\n"
                                    .'- education：教育行业。'."\n"
                                    .'- esports：游戏行业。'."\n"
                                    .'- community：内容社区。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '"ecommerce"',
                            ],
                            'resourceGroupId' => [
                                'description' => '实例所属的资源组ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'rg-****',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否进行升级前校验。true表示校验，false表示不校验。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '159013954',
                                    ],
                                    'currentVersion' => [
                                        'description' => '当前在线版本',
                                        'type' => 'string',
                                        'example' => '100302903',
                                    ],
                                    'pendingSecondRankAlgoDeploymentId' => [
                                        'description' => '部署中的精排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'lockMode' => [
                                        'description' => '锁定状态'."\n"
                                            .'- Unlock 正常'."\n"
                                            .'- LockByExpiration 实例过期自动锁定'."\n"
                                            .'- ManualLock 手动触发锁定',
                                        'type' => 'string',
                                        'example' => 'Unlock',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1590978265',
                                    ],
                                    'id' => [
                                        'description' => '应用ID',
                                        'type' => 'string',
                                        'example' => '100302881',
                                    ],
                                    'chargeType' => [
                                        'description' => '付费类型'."\n"
                                            .'- POSTPAY 后付费（按量付费）'."\n"
                                            .'- PREPAY 预付费（包年包月）',
                                        'type' => 'string',
                                        'example' => 'POSTPAY',
                                    ],
                                    'hasPendingQuotaReviewTask' => [
                                        'description' => '是否配额审批中'."\n"
                                            .'- 0：正常'."\n"
                                            .'- 1：配额审批中',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'secondRankAlgoDeploymentId' => [
                                        'description' => '精排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'name' => [
                                        'description' => '应用名称',
                                        'type' => 'string',
                                        'example' => 'lsh_test_1',
                                    ],
                                    'instanceId' => [
                                        'description' => '实例ID',
                                        'type' => 'string',
                                        'example' => '10030288',
                                    ],
                                    'processingOrderId' => [
                                        'description' => '未结束订单号',
                                        'type' => 'string',
                                        'example' => '1000345',
                                    ],
                                    'chargingWay' => [
                                        'description' => '计费类型'."\n"
                                            .'- 1：计算资源'."\n"
                                            .'- 2：qps',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'type' => [
                                        'description' => '应用类型'."\n"
                                            .'- standard 标准版'."\n"
                                            .'- advance 老高级版（新应用不支持此类型）'."\n"
                                            .'- enhanced 新高级版',
                                        'type' => 'string',
                                        'example' => 'enhanced',
                                    ],
                                    'status' => [
                                        'description' => '应用状态'."\n"
                                            .'- producing 生产中'."\n"
                                            .'- review_pending 生产审批中'."\n"
                                            .'- config_pending 待配置'."\n"
                                            .'- normal 正常'."\n"
                                            .'- frozen 已冻结',
                                        'type' => 'string',
                                        'example' => 'normal',
                                    ],
                                    'projectId' => [
                                        'description' => 'abtest project 名称',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'switchedTime' => [
                                        'description' => '在线版本切换时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1590486386',
                                    ],
                                    'commodityCode' => [
                                        'description' => '商品CODE',
                                        'type' => 'string',
                                        'example' => 'opensearch',
                                    ],
                                    'expireOn' => [
                                        'description' => '过期时间',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'domain' => [
                                        'description' => '行业类型'."\n"
                                            .'- GENERAL 通用'."\n"
                                            .'- ECOMMERCE 电商'."\n"
                                            .'- IT_CONTENT IT内容',
                                        'type' => 'string',
                                        'example' => 'GENERAL',
                                    ],
                                    'description' => [
                                        'description' => '应用描述',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'firstRankAlgoDeploymentId' => [
                                        'description' => '粗排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'produced' => [
                                        'description' => '是否生产完成'."\n"
                                            .'- 0：生产中'."\n"
                                            .'- 1：生产完成',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'lockedByExpiration' => [
                                        'description' => '实例是否过期自动锁定'."\n"
                                            ."\n"
                                            .'- 0：否'."\n"
                                            .'- 1：是',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'quota' => [
                                        'description' => '应用配额信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'spec' => [
                                                'description' => '规格'."\n"
                                                    .'- opensearch.share.junior 入门型'."\n"
                                                    .'- opensearch.share.common 共享通用型'."\n"
                                                    .'- opensearch.share.compute 共享计算型'."\n"
                                                    .'- opensearch.share.storage 共享存储型'."\n"
                                                    .'- opensearch.private.common 独享通用型'."\n"
                                                    .'- opensearch.private.compute 独享计算型'."\n"
                                                    .'- opensearch.private.storage 独享存储型',
                                                'type' => 'string',
                                                'example' => 'opensearch.share.common',
                                            ],
                                            'docSize' => [
                                                'description' => '存储容量（单位：GB）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'computeResource' => [
                                                'description' => '计算资源（单位：LCU）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                        ],
                                        'example' => '{}',
                                    ],
                                ],
                                'example' => '{}',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 159013954,\\n    \\"currentVersion\\": \\"100302903\\",\\n    \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"updated\\": 1590978265,\\n    \\"id\\": \\"100302881\\",\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"hasPendingQuotaReviewTask\\": 0,\\n    \\"secondRankAlgoDeploymentId\\": 0,\\n    \\"name\\": \\"lsh_test_1\\",\\n    \\"instanceId\\": \\"10030288\\",\\n    \\"processingOrderId\\": \\"1000345\\",\\n    \\"chargingWay\\": 1,\\n    \\"type\\": \\"enhanced\\",\\n    \\"status\\": \\"normal\\",\\n    \\"projectId\\": \\"1\\",\\n    \\"switchedTime\\": 1590486386,\\n    \\"commodityCode\\": \\"opensearch\\",\\n    \\"expireOn\\": \\"1\\",\\n    \\"domain\\": \\"GENERAL\\",\\n    \\"description\\": \\"1\\",\\n    \\"firstRankAlgoDeploymentId\\": 0,\\n    \\"produced\\": 1,\\n    \\"lockedByExpiration\\": 0,\\n    \\"quota\\": {\\n      \\"spec\\": \\"opensearch.share.common\\",\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <id>110116134</id>\\n    <name>os_function_test_v1</name>\\n    <currentVersion>110116134</currentVersion>\\n    <switchedTime>0</switchedTime>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>20</computeResource>\\n        <spec>opensearch.share.common</spec>\\n    </quota>\\n    <chargingWay>1</chargingWay>\\n    <type>enhanced</type>\\n    <projectId/>\\n    <chargeType>POSTPAY</chargeType>\\n    <expireOn/>\\n    <instanceId/>\\n    <commodityCode>opensearch</commodityCode>\\n    <processingOrderId/>\\n    <firstRankAlgoDeploymentId>0</firstRankAlgoDeploymentId>\\n    <secondRankAlgoDeploymentId>0</secondRankAlgoDeploymentId>\\n    <pendingSecondRankAlgoDeploymentId>0</pendingSecondRankAlgoDeploymentId>\\n    <description>opensearch-demo</description>\\n    <produced>1</produced>\\n    <lockedByExpiration>0</lockedByExpiration>\\n    <hasPendingQuotaReviewTask>0</hasPendingQuotaReviewTask>\\n    <created>1575442875</created>\\n    <updated>1578916076</updated>\\n    <status>normal</status>\\n    <lockMode>Unlock</lockMode>\\n</result>","errorExample":""}]',
            'title' => '修改应用属性或设置应用在线版本',
            'summary' => '修改 OpenSearch 应用属性或设置应用在线版本。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| chargingWay | Integer | 否 | 1 | 计费模型<br />- 1  计算资源<br />- 2  qps<br /> |'."\n"
                .'| description | String | 否 | "my_first_app" | 应用描述 |'."\n"
                .'| currentVersion | Integer | 否 | 12345678 | 应用版本ID |'."\n"
                ."\n"
                .'注：优先执行“设置应用在线版本”，即若所有字段都存在，则默认currentVersion有效。<br />'."\n"
                ."\n\n",
            'responseParamsDescription' => ' ',
        ],
        'ModifyAppGroupQuota' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/quota',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
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
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体。',
                        'required' => false,
                        '$ref' => '#/components/schemas/Quota',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '应用信息',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1590139542',
                                    ],
                                    'currentVersion' => [
                                        'description' => '当前在线版本',
                                        'type' => 'string',
                                        'example' => '100302903',
                                    ],
                                    'pendingSecondRankAlgoDeploymentId' => [
                                        'description' => '部署中的精排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'type' => [
                                        'description' => '应用类型'."\n"
                                            .'- standard 标准版'."\n"
                                            .'- advance 老高级版（新应用不支持此类型）'."\n"
                                            .'- enhanced 新高级版',
                                        'type' => 'string',
                                        'example' => 'enhanced',
                                    ],
                                    'chargingWay' => [
                                        'description' => '计费类型'."\n"
                                            .'- 1：计算资源'."\n"
                                            .'- 2：qps',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'lockMode' => [
                                        'description' => '锁定状态'."\n"
                                            .'- Unlock 正常'."\n"
                                            .'- LockByExpiration 实例过期自动锁定'."\n"
                                            .'- ManualLock 手动触发锁定',
                                        'type' => 'string',
                                        'example' => 'Unlock',
                                    ],
                                    'status' => [
                                        'description' => '应用状态'."\n"
                                            .'- producing 生产中'."\n"
                                            .'- review_pending 生产审批中'."\n"
                                            .'- config_pending 待配置'."\n"
                                            .'- normal 正常'."\n"
                                            .'- frozen 已冻结',
                                        'type' => 'string',
                                        'example' => 'normal',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1590978265',
                                    ],
                                    'chargeType' => [
                                        'description' => '付费类型'."\n"
                                            .'- POSTPAY 后付费（按量付费）'."\n"
                                            .'- PREPAY 预付费（包年包月）',
                                        'type' => 'string',
                                        'example' => 'POSTPAY',
                                    ],
                                    'id' => [
                                        'description' => '应用ID',
                                        'type' => 'string',
                                        'example' => '100302881',
                                    ],
                                    'hasPendingQuotaReviewTask' => [
                                        'description' => '是否配额审批中'."\n"
                                            .'- 0：正常'."\n"
                                            .'- 1：配额审批中',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'projectId' => [
                                        'description' => 'abtest project 名称',
                                        'type' => 'string',
                                        'example' => '1000',
                                    ],
                                    'secondRankAlgoDeploymentId' => [
                                        'description' => '精排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'commodityCode' => [
                                        'description' => '商品CODE',
                                        'type' => 'string',
                                        'example' => 'opensearch',
                                    ],
                                    'switchedTime' => [
                                        'description' => '在线版本切换时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1590486386',
                                    ],
                                    'expireOn' => [
                                        'description' => '过期时间',
                                        'type' => 'string',
                                        'example' => ' 1',
                                    ],
                                    'description' => [
                                        'description' => '应用描述',
                                        'type' => 'string',
                                        'example' => ' 1',
                                    ],
                                    'firstRankAlgoDeploymentId' => [
                                        'description' => '粗排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'lockedByExpiration' => [
                                        'description' => '实例过期自动锁定',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'produced' => [
                                        'description' => '是否生产完成'."\n"
                                            .'- 0：生产中'."\n"
                                            .'- 1：生产完成',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'name' => [
                                        'description' => '应用名称',
                                        'type' => 'string',
                                        'example' => 'lsh_test_1',
                                    ],
                                    'processingOrderId' => [
                                        'description' => '未结束订单号',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'instanceId' => [
                                        'description' => '实例ID',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'quota' => [
                                        'description' => '应用配额信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'spec' => [
                                                'description' => '规格'."\n"
                                                    .'- opensearch.share.junior 入门型'."\n"
                                                    .'- opensearch.share.common 共享通用型'."\n"
                                                    .'- opensearch.share.compute 共享计算型'."\n"
                                                    .'- opensearch.share.storage 共享存储型'."\n"
                                                    .'- opensearch.private.common 独享通用型'."\n"
                                                    .'- opensearch.private.compute 独享计算型'."\n"
                                                    .'- opensearch.private.storage 独享存储型',
                                                'type' => 'string',
                                                'example' => 'opensearch.share.common',
                                            ],
                                            'docSize' => [
                                                'description' => '存储容量（单位：GB）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'computeResource' => [
                                                'description' => '计算资源（单位：LCU）',
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
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"created\\": 1590139542,\\n    \\"currentVersion\\": \\"100302903\\",\\n    \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n    \\"type\\": \\"enhanced\\",\\n    \\"chargingWay\\": 1,\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"status\\": \\"normal\\",\\n    \\"updated\\": 1590978265,\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"id\\": \\"100302881\\",\\n    \\"hasPendingQuotaReviewTask\\": 0,\\n    \\"projectId\\": \\"1000\\",\\n    \\"secondRankAlgoDeploymentId\\": 0,\\n    \\"commodityCode\\": \\"opensearch\\",\\n    \\"switchedTime\\": 1590486386,\\n    \\"expireOn\\": \\" 1\\",\\n    \\"description\\": \\" 1\\",\\n    \\"firstRankAlgoDeploymentId\\": 0,\\n    \\"lockedByExpiration\\": 0,\\n    \\"produced\\": 1,\\n    \\"name\\": \\"lsh_test_1\\",\\n    \\"processingOrderId\\": \\"1\\",\\n    \\"instanceId\\": \\"1\\",\\n    \\"quota\\": {\\n      \\"spec\\": \\"opensearch.share.common\\",\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <id>110116134</id>\\n    <name>os_function_test_v1</name>\\n    <currentVersion>110116134</currentVersion>\\n    <switchedTime>0</switchedTime>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>20</computeResource>\\n        <spec>opensearch.share.common</spec>\\n    </quota>\\n    <chargingWay>1</chargingWay>\\n    <type>enhanced</type>\\n    <projectId/>\\n    <chargeType>POSTPAY</chargeType>\\n    <expireOn/>\\n    <instanceId/>\\n    <commodityCode>opensearch</commodityCode>\\n    <processingOrderId/>\\n    <firstRankAlgoDeploymentId>0</firstRankAlgoDeploymentId>\\n    <secondRankAlgoDeploymentId>0</secondRankAlgoDeploymentId>\\n    <pendingSecondRankAlgoDeploymentId>0</pendingSecondRankAlgoDeploymentId>\\n    <description/>\\n    <produced>1</produced>\\n    <lockedByExpiration>0</lockedByExpiration>\\n    <hasPendingQuotaReviewTask>0</hasPendingQuotaReviewTask>\\n    <created>1575442875</created>\\n    <updated>1578916076</updated>\\n    <status>normal</status>\\n    <lockMode>Unlock</lockMode>\\n</result>","errorExample":""}]',
            'title' => '修改应用配额',
            'summary' => '修改 OpenSearch 应用配额。',
            'requestParamsDescription' => '**请求体**<br />'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| docSize | Integer | 是 | 1 | 存储容量（单位：GB）    共享通用型（1～300G）|'."\n"
                .'| computeResource | Integer | 是 | 20 | 计算资源（单位：LCU）   共享通用型（20～5000LCU） |'."\n"
                .'| spec | String | 是 | "opensearch.share.common" | 规格 |'."\n"
                .'| orderType | String | 否 | "UPGRADE" | 变配类型<br />- UPGRADE  升配<br />- DOWNGRADE  降配<br /> |'."\n"
                ."\n"
                .'参考：[Quota](~~170001~~)<br />',
            'responseParamsDescription' => ' ',
        ],
        'RemoveAppGroup' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '121001650',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '3AA29D02-54F3-8569-F71A-90E1B7BE4E7E',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回详情结果'."\n"
                                        ."\n",
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '[]',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"3AA29D02-54F3-8569-F71A-90E1B7BE4E7E\\",\\n  \\"result\\": [\\n    0\\n  ]\\n}","type":"json"}]',
            'title' => '删除APP分组',
            'summary' => '删除一个OpenSearch应用。',
            'description' => '仅支持删除按量付费的应用，不支持删除包年包月的应用。',
        ],
        'ListAppGroups' => [
            'path' => '/v4/openapi/app-groups',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认 pageNumber=1',
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
                        'description' => '每页返回数目，默认 pageSize=10',
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
                        'description' => '实例ID（精确匹配）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ops-cn-xxxx',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_name',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型'."\n"
                            ."\n"
                            .'- standard 标准版'."\n"
                            .'- enhanced 新高级版',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'standard',
                    ],
                ],
                [
                    'name' => 'sortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排列顺序'."\n"
                            ."\n"
                            .'- 0：按创建时间降序排列'."\n"
                            .'- 1：按修改时间降序排列'."\n"
                            ."\n"
                            .'默认 sortBy=0',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"110123123"',
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'key' => [
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'foo',
                                ],
                                'value' => [
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'bar',
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
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '应用信息'."\n"
                                    ."\n"
                                    .'参考：[AppGroup](~~170000~~)',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果体',
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间戳',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1575442875',
                                        ],
                                        'currentVersion' => [
                                            'description' => '当前在线版本',
                                            'type' => 'string',
                                            'example' => '110116134',
                                        ],
                                        'pendingSecondRankAlgoDeploymentId' => [
                                            'description' => '部署中的精排部署ID',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'lockMode' => [
                                            'description' => '锁定状态'."\n"
                                                ."\n"
                                                .'- Unlock 正常'."\n"
                                                .'- LockByExpiration 实例过期自动锁定'."\n"
                                                .'- ManualLock 手动触发锁定',
                                            'type' => 'string',
                                            'example' => 'Unlock',
                                        ],
                                        'updated' => [
                                            'description' => '更新时间戳',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1578916076',
                                        ],
                                        'id' => [
                                            'description' => '应用ID',
                                            'type' => 'string',
                                            'example' => '110116134',
                                        ],
                                        'chargeType' => [
                                            'description' => '付费类型'."\n"
                                                ."\n"
                                                .'- POSTPAY 后付费（按量付费）'."\n"
                                                .'- PREPAY 预付费（包年包月）',
                                            'type' => 'string',
                                            'example' => 'POSTPAY',
                                        ],
                                        'hasPendingQuotaReviewTask' => [
                                            'description' => '是否配额审批中'."\n"
                                                ."\n"
                                                .'- 0：正常'."\n"
                                                .'- 1：配额审批中',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'secondRankAlgoDeploymentId' => [
                                            'description' => '精排部署ID',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'name' => [
                                            'description' => '应用名称',
                                            'type' => 'string',
                                            'example' => 'os_function_test_v1',
                                        ],
                                        'instanceId' => [
                                            'description' => '实例ID',
                                            'type' => 'string',
                                            'example' => '"xxx"',
                                        ],
                                        'processingOrderId' => [
                                            'description' => '未结束订单号',
                                            'type' => 'string',
                                            'example' => '"xxx"',
                                        ],
                                        'chargingWay' => [
                                            'description' => '计费类型'."\n"
                                                ."\n"
                                                .'- 1：计算资源'."\n"
                                                .'- 2：qps',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'type' => [
                                            'description' => '应用类型'."\n"
                                                ."\n"
                                                .'- standard 标准版'."\n"
                                                .'- advance 老高级版（新应用不支持此类型）'."\n"
                                                .'- enhanced 新高级版',
                                            'type' => 'string',
                                            'example' => 'enhanced',
                                        ],
                                        'status' => [
                                            'description' => '应用状态'."\n"
                                                ."\n"
                                                .'- producing 生产中'."\n"
                                                .'- review_pending 生产审批中'."\n"
                                                .'- config_pending 待配置'."\n"
                                                .'- normal 正常'."\n"
                                                .'- frozen 已冻结',
                                            'type' => 'string',
                                            'example' => 'normal',
                                        ],
                                        'projectId' => [
                                            'description' => 'abtest project 名称',
                                            'type' => 'string',
                                            'example' => '"xxx"',
                                        ],
                                        'switchedTime' => [
                                            'description' => '在线版本切换时间戳',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'commodityCode' => [
                                            'description' => '商品CODE',
                                            'type' => 'string',
                                            'example' => 'opensearch',
                                        ],
                                        'expireOn' => [
                                            'description' => '过期时间',
                                            'type' => 'string',
                                            'example' => '"xxx"',
                                        ],
                                        'domain' => [
                                            'description' => 'domain',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'description' => [
                                            'description' => '应用描述',
                                            'type' => 'string',
                                            'example' => '"xxx"',
                                        ],
                                        'firstRankAlgoDeploymentId' => [
                                            'description' => '粗排部署ID',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'produced' => [
                                            'description' => '是否生产完成'."\n"
                                                ."\n"
                                                .'- 0：生产中'."\n"
                                                .'- 1：生产完成',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'lockedByExpiration' => [
                                            'description' => '实例过期自动锁定',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'quota' => [
                                            'description' => '应用配额信息'."\n"
                                                .'参考：[Quota](~~170001~~)',
                                            'type' => 'object',
                                            'properties' => [
                                                'spec' => [
                                                    'description' => '规格'."\n"
                                                        ."\n"
                                                        .'- opensearch.share.junior 入门型'."\n"
                                                        .'- opensearch.share.common 共享通用型'."\n"
                                                        .'- opensearch.share.compute 共享计算型'."\n"
                                                        .'- opensearch.share.storage 共享存储型'."\n"
                                                        .'- opensearch.private.common 独享通用型'."\n"
                                                        .'- opensearch.private.compute 独享计算型'."\n"
                                                        .'- opensearch.private.storage 独享存储型',
                                                    'type' => 'string',
                                                    'example' => 'opensearch.share.common',
                                                ],
                                                'docSize' => [
                                                    'description' => '存储容量（单位：GB）',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'computeResource' => [
                                                    'description' => '计算资源（单位：LCU）',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '20',
                                                ],
                                            ],
                                            'example' => '{}',
                                        ],
                                        'tags' => [
                                            'description' => '应用标签',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'key' => [
                                                        'description' => '标签键',
                                                        'type' => 'string',
                                                        'example' => 'foo',
                                                    ],
                                                    'value' => [
                                                        'description' => '标签值',
                                                        'type' => 'string',
                                                        'example' => 'bar',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'example' => '{}',
                                ],
                                'example' => '[]',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1575442875,\\n      \\"currentVersion\\": \\"110116134\\",\\n      \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n      \\"lockMode\\": \\"Unlock\\",\\n      \\"updated\\": 1578916076,\\n      \\"id\\": \\"110116134\\",\\n      \\"chargeType\\": \\"POSTPAY\\",\\n      \\"hasPendingQuotaReviewTask\\": 0,\\n      \\"secondRankAlgoDeploymentId\\": 0,\\n      \\"name\\": \\"os_function_test_v1\\",\\n      \\"instanceId\\": \\"\\\\\\"xxx\\\\\\"\\",\\n      \\"processingOrderId\\": \\"\\\\\\"xxx\\\\\\"\\",\\n      \\"chargingWay\\": 1,\\n      \\"type\\": \\"enhanced\\",\\n      \\"status\\": \\"normal\\",\\n      \\"projectId\\": \\"\\\\\\"xxx\\\\\\"\\",\\n      \\"switchedTime\\": 0,\\n      \\"commodityCode\\": \\"opensearch\\",\\n      \\"expireOn\\": \\"\\\\\\"xxx\\\\\\"\\",\\n      \\"domain\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"description\\": \\"\\\\\\"xxx\\\\\\"\\",\\n      \\"firstRankAlgoDeploymentId\\": 0,\\n      \\"produced\\": 1,\\n      \\"lockedByExpiration\\": 0,\\n      \\"quota\\": {\\n        \\"spec\\": \\"opensearch.share.common\\",\\n        \\"docSize\\": 1,\\n        \\"computeResource\\": 20\\n      },\\n      \\"tags\\": [\\n        {\\n          \\"key\\": \\"foo\\",\\n          \\"value\\": \\"bar\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<totalCount>1</totalCount>\\n<result>\\n    <id>110116134</id>\\n    <name>os_function_test_v1</name>\\n    <currentVersion>110116134</currentVersion>\\n    <switchedTime>0</switchedTime>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>20</computeResource>\\n        <spec>opensearch.share.common</spec>\\n    </quota>\\n    <chargingWay>1</chargingWay>\\n    <type>enhanced</type>\\n    <projectId/>\\n    <chargeType>POSTPAY</chargeType>\\n    <expireOn/>\\n    <instanceId/>\\n    <commodityCode>opensearch</commodityCode>\\n    <processingOrderId/>\\n    <firstRankAlgoDeploymentId>0</firstRankAlgoDeploymentId>\\n    <secondRankAlgoDeploymentId>0</secondRankAlgoDeploymentId>\\n    <pendingSecondRankAlgoDeploymentId>0</pendingSecondRankAlgoDeploymentId>\\n    <description/>\\n    <produced>1</produced>\\n    <lockedByExpiration>0</lockedByExpiration>\\n    <hasPendingQuotaReviewTask>0</hasPendingQuotaReviewTask>\\n    <created>1575442875</created>\\n    <updated>1578916076</updated>\\n    <status>normal</status>\\n    <lockMode>Unlock</lockMode>\\n</result>","errorExample":""}]',
            'title' => '获取应用列表',
            'summary' => '获取OpenSearch应用列表。',
            'description' => '- 支持按照 name、instanceId、type 进行过滤'."\n"
                .'- 支持按照应用的创建时间排序'."\n"
                .'- 支持分页参数',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateApp' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
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
                    'schema' => [
                        'description' => '请求Body。',
                        'required' => false,
                        '$ref' => '#/components/schemas/App',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ABCDEFG',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"ABCDEFG\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>8664F6B7-9DD8-096A-FA3E-EBEE199EB94C</requestId>\\n<result>\\n    <id>123456</id>\\n    <description/>\\n    <status>initializing</status>\\n    <fetchFields>id</fetchFields>\\n    <fetchFields>title</fetchFields>\\n    <fetchFields>buy</fetchFields>\\n    <fetchFields>cate_id</fetchFields>\\n    <fetchFields>cate_name</fetchFields>\\n    <type>enhanced</type>\\n    <schema>\\n        <tables>\\n            <main>\\n                <name>main</name>\\n                <primaryTable>true</primaryTable>\\n                <fields>\\n                    <id>\\n                        <name>id</name>\\n                        <type>LITERAL</type>\\n                        <primaryKey>true</primaryKey>\\n                    </id>\\n                    <title>\\n                        <name>title</name>\\n                        <type>TEXT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </title>\\n                    <buy>\\n                        <name>buy</name>\\n                        <type>INT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </buy>\\n                    <cate_id>\\n                        <name>cate_id</name>\\n                        <type>INT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </cate_id>\\n                    <cate_name>\\n                        <name>cate_name</name>\\n                        <type>LITERAL</type>\\n                        <primaryKey>false</primaryKey>\\n                    </cate_name>\\n                </fields>\\n            </main>\\n        </tables>\\n        <indexes>\\n            <searchFields>\\n                <id>\\n                    <fields>id</fields>\\n                </id>\\n                <default>\\n                    <fields>title</fields>\\n                    <analyzer>chn_standard</analyzer>\\n                </default>\\n                <cate_name>\\n                    <fields>cate_name</fields>\\n                </cate_name>\\n            </searchFields>\\n            <filterFields>id</filterFields>\\n            <filterFields>buy</filterFields>\\n            <filterFields>cate_id</filterFields>\\n            <filterFields>cate_name</filterFields>\\n        </indexes>\\n    </schema>\\n    <algoDeploymentId>0</algoDeploymentId>\\n    <created>0</created>\\n    <progressPercent>0</progressPercent>\\n</result>","errorExample":""}]',
            'title' => '创建一个应用版本',
            'summary' => '创建一个OpenSearch应用版本。',
            'description' => '- 若已存在同名标准版应用，则创建新版本；'."\n"
                .'- 在新建版本情况下，autoSwitch 和 realtimeShared 也是必填的；'."\n"
                .'- 在新建版本情况下，quota 是自动从上一个版本继承的；'."\n"
                .'- 在新建版本情况下，修改 quota 是无效的。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| type | String | 是 | "standard" | 应用类型<br />- standard 标准版<br />- enhanced 高级版 |'."\n"
                .'| schema | Object | 是 |  | 应用版本结构<br />参考：[Schema](~~170003~~) |'."\n"
                .'| fetchFields | Array | 是 | ["id", "name"] | 默认展示字段 |'."\n"
                .'| realtimeShared | Boolean | 是 | false | 是否共享实时流 |'."\n"
                .'| autoSwitch | Boolean | 是 | false | 是否自动切上线 |'."\n"
                .'| description | String | 否 | "demo" | 备注 |'."\n"
                .'| quota | Object | 否 |  | 版本配额信息<br />参考：[Quota](~~170001~~) |'."\n"
                .'| dataSources[] | Object | 否 |  | 数据源详情<br />参考：[DataSource](~~170005~~) |'."\n"
                .'| firstRanks[] | Object | 否 |  | 粗排表达式配置详情<br />参考：[FirstRank](~~170007~~) |'."\n"
                .'| secondRanks[] | Object | 否 |  | 精排表达式配置详情<br />参考：[SecondRank](~~170008~~) |'."\n"
                .'| queryProcessors[] | Object | 否 |  | 查询意图理解规则配置详情<br />参考：[QueryProcessor](~~170014~~) |'."\n"
                .'| summaries[] | Object | 否 |  | 搜索结果摘要设置<br />参考：[Summary](~~170016~~) |'."\n"
                ."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RemoveApp' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110116134',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '33477D76-C380-2D84-A4AD-043F52876CB1',
                            ],
                            'result' => [
                                'description' => '—',
                                'type' => 'array',
                                'items' => [
                                    'description' => '—',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '[]',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"33477D76-C380-2D84-A4AD-043F52876CB1\\",\\n  \\"result\\": [\\n    0\\n  ]\\n}","type":"json"}]',
            'title' => '删除一个应用版本',
            'summary' => '删除一个 OpenSearch应用版本。',
        ],
        'DescribeApps' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '77CAA411-0010-4DB9-82E2-1C384E590AFF',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '版本信息，参考：[App](~~170002~~)',
                                    'type' => 'object',
                                    'example' => '{}',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"77CAA411-0010-4DB9-82E2-1C384E590AFF\\",\\n  \\"result\\": [\\n    {}\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>71AB199D-8F00-5E69-BDC6-2829553D9BBC</requestId>\\n<result>\\n    <id>123123321</id>\\n    <virtualCluster/>\\n    <description/>\\n    <created>1650264344</created>\\n    <updated>1650264631</updated>\\n    <type>standard</type>\\n    <status>ok</status>\\n    <progressPercent>100</progressPercent>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>1</computeResource>\\n        <qps>0</qps>\\n        <spec>opensearch.share.common</spec>\\n        <usedDocSize>0</usedDocSize>\\n        <usedComputeResource>0</usedComputeResource>\\n        <usedQps>0</usedQps>\\n    </quota>\\n    <schema>\\n        <tables>\\n            <test>\\n                <name>test</name>\\n                <primaryTable>true</primaryTable>\\n                <fields>\\n                    <description>\\n                        <name>description</name>\\n                        <primaryKey>false</primaryKey>\\n                        <type>LITERAL</type>\\n                    </description>\\n                    <id>\\n                        <name>id</name>\\n                        <primaryKey>true</primaryKey>\\n                        <type>INT</type>\\n                    </id>\\n                </fields>\\n            </test>\\n        </tables>\\n        <indexes>\\n            <searchFields>\\n                <description>\\n                    <fields>description</fields>\\n                </description>\\n                <id>\\n                    <fields>id</fields>\\n                </id>\\n            </searchFields>\\n            <filterFields>id</filterFields>\\n            <filterFields>description</filterFields>\\n        </indexes>\\n    </schema>\\n    <fetchFields>id</fetchFields>\\n    <fetchFields>description</fetchFields>\\n    <firstRanks>\\n        <name>default</name>\\n        <description>sys default</description>\\n        <active>true</active>\\n        <created>1650264343</created>\\n        <updated>1650264343</updated>\\n        <type>STRUCT</type>\\n        <meta>\\n            <attribute>static_bm25()</attribute>\\n            <arg/>\\n            <weight>1</weight>\\n        </meta>\\n    </firstRanks>\\n    <secondRanks>\\n        <name>default</name>\\n        <description>sys default</description>\\n        <active>true</active>\\n        <created>1650264343</created>\\n        <updated>1650264343</updated>\\n        <meta/>\\n        <isDefault>true</isDefault>\\n    </secondRanks>\\n    <switchTime>1645520103</switchTime>\\n    <isCurrent>false</isCurrent>\\n</result>\\n<result>\\n    <id>121305419</id>\\n    <virtualCluster/>\\n    <description/>\\n    <created>1645519817</created>\\n    <updated>1645520103</updated>\\n    <type>standard</type>\\n    <status>ok</status>\\n    <progressPercent>100</progressPercent>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>1</computeResource>\\n        <qps>0</qps>\\n        <spec>opensearch.share.common</spec>\\n        <usedDocSize>0</usedDocSize>\\n        <usedComputeResource>0</usedComputeResource>\\n        <usedQps>0</usedQps>\\n    </quota>\\n    <schema>\\n        <tables>\\n            <test>\\n                <name>test</name>\\n                <primaryTable>true</primaryTable>\\n                <fields>\\n                    <description>\\n                        <name>description</name>\\n                        <primaryKey>false</primaryKey>\\n                        <type>LITERAL</type>\\n                    </description>\\n                    <id>\\n                        <name>id</name>\\n                        <primaryKey>true</primaryKey>\\n                        <type>INT</type>\\n                    </id>\\n                </fields>\\n            </test>\\n        </tables>\\n        <indexes>\\n            <searchFields>\\n                <description>\\n                    <fields>description</fields>\\n                </description>\\n                <id>\\n                    <fields>id</fields>\\n                </id>\\n            </searchFields>\\n            <filterFields>id</filterFields>\\n            <filterFields>description</filterFields>\\n        </indexes>\\n    </schema>\\n    <fetchFields>id</fetchFields>\\n    <fetchFields>description</fetchFields>\\n    <firstRanks>\\n        <name>default</name>\\n        <description>sys default</description>\\n        <active>true</active>\\n        <created>1645519817</created>\\n        <updated>1645519817</updated>\\n        <type>STRUCT</type>\\n        <meta>\\n            <attribute>static_bm25()</attribute>\\n            <arg/>\\n            <weight>1</weight>\\n        </meta>\\n    </firstRanks>\\n    <secondRanks>\\n        <name>default</name>\\n        <description>sys default</description>\\n        <active>true</active>\\n        <created>1645519817</created>\\n        <updated>1645519817</updated>\\n        <meta/>\\n        <isDefault>true</isDefault>\\n    </secondRanks>\\n    <switchTime>1645520103</switchTime>\\n    <isCurrent>true</isCurrent>\\n</result>","errorExample":""}]',
            'title' => '获取一个应用的版本列表',
            'summary' => '获取一个 OpenSearch 应用的版本列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeApp' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110116134',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '33477D76-C380-1D84-A4AD-043F52876CB1',
                            ],
                            'result' => [
                                'description' => '版本信息',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '版本创建时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1590977140',
                                    ],
                                    'clusterName' => [
                                        'description' => '集群名称',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'autoSwitch' => [
                                        'description' => '是否自动切换',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'algoDeploymentId' => [
                                        'description' => '粗排部署 ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'type' => [
                                        'description' => '版本类型'."\n"
                                            .'- standard 标准版'."\n"
                                            .'- advance 老高级版（新应用不支持此类型）'."\n"
                                            .'- enhanced 新高级版',
                                        'type' => 'string',
                                        'example' => 'enhanced',
                                    ],
                                    'description' => [
                                        'description' => '版本描述',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'status' => [
                                        'description' => '版本状态'."\n"
                                            .'- ok 正常'."\n"
                                            .'- stopped 暂停'."\n"
                                            .'- frozen 已冻结'."\n"
                                            .'- initializing 版本初始化中'."\n"
                                            .'- unavailable 版本已失效'."\n"
                                            .'- data_waiting 等待数据初始化'."\n"
                                            .'- data_preparing 数据初始化中',
                                        'type' => 'string',
                                        'example' => 'ok',
                                    ],
                                    'schema' => [
                                        'description' => '应用结构',
                                        'type' => 'object',
                                        'example' => '{}',
                                    ],
                                    'progressPercent' => [
                                        'description' => '数据导入进度百分比（如83代表83%）',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'id' => [
                                        'description' => '版本ID',
                                        'type' => 'string',
                                        'example' => '100303063',
                                    ],
                                    'fetchFields' => [
                                        'description' => '默认展示字段',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '默认展示字段',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'example' => '[]',
                                    ],
                                    'quota' => [
                                        'description' => '配额信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'spec' => [
                                                'description' => '规格'."\n"
                                                    .'- opensearch.share.junior 入门型'."\n"
                                                    .'- opensearch.share.common 共享通用型'."\n"
                                                    .'- opensearch.share.compute 共享计算型'."\n"
                                                    .'- opensearch.share.storage 共享存储型'."\n"
                                                    .'- opensearch.private.common 独享通用型'."\n"
                                                    .'- opensearch.private.compute 独享计算型'."\n"
                                                    .'- opensearch.private.storage 独享存储型',
                                                'type' => 'string',
                                                'example' => 'opensearch.share.common',
                                            ],
                                            'qps' => [
                                                'description' => '搜索请求（单位：次/秒）（老计费模型使用）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '5',
                                            ],
                                            'docSize' => [
                                                'description' => '存储容量（单位：GB）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'computeResource' => [
                                                'description' => '计算资源（单位：LCU）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                        ],
                                        'example' => '{}',
                                    ],
                                    'domain' => [
                                        'description' => '行业类型'."\n"
                                            .'- GENERAL 通用'."\n"
                                            .'- ECOMMERCE 电商'."\n"
                                            .'- IT_CONTENT IT内容',
                                        'type' => 'object',
                                        'properties' => [
                                            'category' => [
                                                'description' => '类型-standard标准版-advance老高级版（新应用不支持此类型）-enhanced新高级版',
                                                'type' => 'string',
                                                'example' => '-',
                                            ],
                                            'name' => [
                                                'description' => '英文名称',
                                                'type' => 'string',
                                                'example' => 'test',
                                            ],
                                            'functions' => [
                                                'description' => '搜索结果',
                                                'type' => 'object',
                                                'properties' => [
                                                    'service' => [
                                                        'description' => '各个功能说明',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '功能1',
                                                            'type' => 'string',
                                                            'example' => '-',
                                                        ],
                                                        'example' => '[]',
                                                    ],
                                                    'qp' => [
                                                        'description' => '布局信息',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '信息1',
                                                            'type' => 'string',
                                                            'example' => '-',
                                                        ],
                                                        'example' => '[]',
                                                    ],
                                                    'algo' => [
                                                        'description' => '算法结构',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '结构1',
                                                            'type' => 'string',
                                                            'example' => '-',
                                                        ],
                                                        'example' => '[]',
                                                    ],
                                                ],
                                                'example' => '{}',
                                            ],
                                        ],
                                        'example' => 'GENERAL',
                                    ],
                                ],
                                'example' => '{}',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"33477D76-C380-1D84-A4AD-043F52876CB1\\",\\n  \\"result\\": {\\n    \\"created\\": 1590977140,\\n    \\"clusterName\\": \\"-\\",\\n    \\"autoSwitch\\": true,\\n    \\"algoDeploymentId\\": 0,\\n    \\"type\\": \\"enhanced\\",\\n    \\"description\\": \\"-\\",\\n    \\"status\\": \\"ok\\",\\n    \\"schema\\": {},\\n    \\"progressPercent\\": 100,\\n    \\"id\\": \\"100303063\\",\\n    \\"fetchFields\\": [\\n      \\"{}\\"\\n    ],\\n    \\"quota\\": {\\n      \\"spec\\": \\"opensearch.share.common\\",\\n      \\"qps\\": 5,\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    },\\n    \\"domain\\": {\\n      \\"category\\": \\"-\\",\\n      \\"name\\": \\"test\\",\\n      \\"functions\\": {\\n        \\"service\\": [\\n          \\"-\\"\\n        ],\\n        \\"qp\\": [\\n          \\"-\\"\\n        ],\\n        \\"algo\\": [\\n          \\"-\\"\\n        ]\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>33477D76-C380-1D84-A4AD-043F52876CB1</requestId>\\n<result>\\n    <id>100303063</id>\\n    <description/>\\n    <status>ok</status>\\n    <fetchFields>id</fetchFields>\\n    <fetchFields>title</fetchFields>\\n    <fetchFields>buy</fetchFields>\\n    <fetchFields>cate_id</fetchFields>\\n    <fetchFields>cate_name</fetchFields>\\n    <type>enhanced</type>\\n    <schema>\\n        <tables>\\n            <main>\\n                <primaryTable>true</primaryTable>\\n                <name>main</name>\\n                <fields>\\n                    <id>\\n                        <name>id</name>\\n                        <type>LITERAL</type>\\n                        <primaryKey>true</primaryKey>\\n                    </id>\\n                    <title>\\n                        <name>title</name>\\n                        <type>TEXT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </title>\\n                    <buy>\\n                        <name>buy</name>\\n                        <type>INT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </buy>\\n                    <cate_id>\\n                        <name>cate_id</name>\\n                        <type>INT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </cate_id>\\n                    <cate_name>\\n                        <name>cate_name</name>\\n                        <type>LITERAL</type>\\n                        <primaryKey>false</primaryKey>\\n                    </cate_name>\\n                </fields>\\n            </main>\\n        </tables>\\n        <indexes>\\n            <searchFields>\\n                <id>\\n                    <fields>id</fields>\\n                </id>\\n                <default>\\n                    <fields>title</fields>\\n                    <analyzer>chn_standard</analyzer>\\n                </default>\\n                <buy>\\n                    <fields>buy</fields>\\n                </buy>\\n            </searchFields>\\n            <filterFields>id</filterFields>\\n            <filterFields>buy</filterFields>\\n            <filterFields>cate_id</filterFields>\\n            <filterFields>cate_name</filterFields>\\n        </indexes>\\n    </schema>\\n    <algoDeploymentId>0</algoDeploymentId>\\n    <firstRanks>\\n        <id/>\\n        <name>default</name>\\n        <description/>\\n        <active>false</active>\\n        <type>STRUCT</type>\\n        <meta>\\n            <attribute>static_bm25()</attribute>\\n            <arg/>\\n            <weight>1</weight>\\n        </meta>\\n        <created>0</created>\\n        <updated>0</updated>\\n    </firstRanks>\\n    <firstRanks>\\n        <id>887857</id>\\n        <name>first_rank_lsh_1</name>\\n        <description/>\\n        <active>true</active>\\n        <type>STRUCT</type>\\n        <meta>\\n            <attribute>static_bm25()</attribute>\\n            <arg/>\\n            <weight>10</weight>\\n        </meta>\\n        <meta>\\n            <attribute>exact_match_boost()</attribute>\\n            <arg/>\\n            <weight>20</weight>\\n        </meta>\\n        <meta>\\n            <attribute>buy</attribute>\\n            <arg/>\\n            <weight>30</weight>\\n        </meta>\\n        <created>1590977140</created>\\n        <updated>1590977140</updated>\\n    </firstRanks>\\n    <secondRanks>\\n        <id>-1</id>\\n        <name>default</name>\\n        <meta/>\\n        <active>true</active>\\n        <description/>\\n        <created>0</created>\\n        <updated>0</updated>\\n    </secondRanks>\\n    <summaries>\\n        <name>default</name>\\n        <meta>\\n            <field>title</field>\\n            <len>50</len>\\n            <element>em</element>\\n            <ellipsis>...</ellipsis>\\n            <snippet>1</snippet>\\n        </meta>\\n    </summaries>\\n    <created>1590977140</created>\\n    <queryProcessors>\\n        <name>sum_lsh_test_1</name>\\n        <active>true</active>\\n        <indexes>default</indexes>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary/>\\n            <name>stop_word</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary/>\\n            <name>spell_check</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary/>\\n            <name>term_weighting</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary/>\\n            <name>synonym</name>\\n        </processors>\\n        <domain>GENERAL</domain>\\n        <created>1590977142</created>\\n        <updated>1590977142</updated>\\n    </queryProcessors>\\n    <progressPercent>100</progressPercent>\\n</result>","errorExample":""}]',
            'title' => '查看一个应用版本详情',
            'summary' => '查看一个 OpenSearch 应用版本详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAppStatistics' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/statistics',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '统计结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '76FC45F1-4167-D3CD-6737-4F97BA503FA0',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"76FC45F1-4167-D3CD-6737-4F97BA503FA0\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>76FC45F1-4167-D3CD-6737-4F97BA503FA0</requestId>\\n<result>\\n    <pv>5002</pv>\\n    <docCount>168</docCount>\\n    <docLastUpdated>1582522280</docLastUpdated>\\n    <quota>\\n        <instance>\\n            <used>0.000002</used>\\n            <quota>1</quota>\\n            <outOfLimit>false</outOfLimit>\\n            <tables>\\n                <main>2222</main>\\n            </tables>\\n        </instance>\\n        <qps>\\n            <used>0</used>\\n            <quota>0</quota>\\n            <outOfLimit>false</outOfLimit>\\n        </qps>\\n        <computeResource>\\n            <used>0</used>\\n            <quota>20</quota>\\n            <outOfLimit>false</outOfLimit>\\n            <dailyPeak>1.0306227624786388</dailyPeak>\\n        </computeResource>\\n        <spec>opensearch.share.common</spec>\\n        <docCount>\\n            <main>168</main>\\n        </docCount>\\n        <mainTable>main</mainTable>\\n    </quota>\\n</result>","errorExample":""}]',
            'title' => '获取应用版本的统计结果',
            'summary' => '获取 OpenSearch 应用版本的统计结果。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '**统计结果**'."\n"
                .'| 字段 | 类型 | 描述 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| result.pv | Integer | 请求量 |'."\n"
                .'| result.docCount | Integer | 文档大小（单位：个）  |'."\n"
                .'| result.docLastUpdated | String | 文档最近更新时间戳 |'."\n"
                .'| result.quota | Object | 配额统计结果 |'."\n"
                .'| result.quota.instance | Object | 实例统计结果 |'."\n"
                .'| result.quota.instance.used | Float | 已使用容量（单位：LCU） |'."\n"
                .'| result.quota.instance.quota | Integer | 配额容量（单位：GB） |'."\n"
                .'| result.quota.instance.outOfLimit | Boolean | 是否超出配额 |'."\n"
                .'| result.quota.instance.tables | Object | 各数据表使用统计结果<br />键名为表名，值为使用容量 |'."\n"
                .'| result.quota.qps | Object | QPS统计结果 |'."\n"
                .'| result.quota.qps.used | Float | 已使用次数 |'."\n"
                .'| result.quota.qps.quota | Integer | 配额次数 |'."\n"
                .'| result.quota.qps.outOfLimit | Boolean | 是否超出配额 |'."\n"
                .'| result.quota.qps.tables | Array | -- |'."\n"
                .'| result.quota.computeResource | Object | 计算资源统计结果 |'."\n"
                .'| result.quota.computeResource.used | Float | 已使用计算资源（单位：LCU） |'."\n"
                .'| result.quota.computeResource.quota | Integer | 配额计算资源（单位：GB） |'."\n"
                .'| result.quota.computeResource.outOfLimit | Boolean | 是否超出配额 |'."\n"
                .'| result.quota.computeResource.dailyPeak | Float | 最高峰值（单位：LCU） |'."\n"
                .'| result.quota.spec | String | 规格类型: <br />- opensearch.share.junior 入门型<br />- opensearch.share.common 共享通用型<br />- opensearch.share.compute 共享计算型<br />- opensearch.share.storage 共享存储型<br />- opensearch.private.common 独享通用型<br />- opensearch.private.compute 独享计算型<br />- opensearch.private.storage 独享存储型 |'."\n"
                .'| result.quota.docCount | Object | 文档大小统计结果<br />键名为表名，值为使用容量（单位：个） |'."\n"
                .'| result.quota.mainTable | String | 主表名称 |',
            'extraInfo' => ' ',
        ],
        'ListUserAnalyzers' => [
            'path' => '/v4/openapi/user-analyzers',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认 pageNumber=1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回数目，默认 pageSize=10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'description' => '总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '自定义分析器'."\n"
                                    ."\n"
                                    .'参考：[UserAnalyzer](~~178934~~)',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间戳',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1588054131',
                                        ],
                                        'available' => [
                                            'description' => '是否可用',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'name' => [
                                            'description' => '名称',
                                            'type' => 'string',
                                            'example' => 'kevin_test2',
                                        ],
                                        'updated' => [
                                            'description' => '更新时间戳',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1588054131',
                                        ],
                                        'id' => [
                                            'description' => '自定义分析器ID',
                                            'type' => 'string',
                                            'example' => '1234',
                                        ],
                                        'business' => [
                                            'description' => '基础分词器'."\n"
                                                ."\n"
                                                .'- chn_standard [中文-通用分析](~~179424~~)'."\n"
                                                .'- chn_scene_name 中文－人名分析'."\n"
                                                .'- chn_ecommerce [中文-电商分析](~~179424~~)'."\n"
                                                .'- chn_it_content[ IT-内容分析](~~179424~~)'."\n"
                                                .'- en_min 英文－小粒度分析'."\n"
                                                .'- th_standard 泰语－通用分析'."\n"
                                                .'- th_ecommerce 泰语－电商分析'."\n"
                                                .'- vn_standard 越南语－通用分析'."\n"
                                                .'- chn_community_it 行业－内容IT分析'."\n"
                                                .'- chn_ecommerce_general 行业－电商通用分析'."\n"
                                                .'- chn_esports_general 行业－游戏通用分析'."\n"
                                                .'- chn_edu_question 行业－教育搜题',
                                            'type' => 'string',
                                            'example' => 'chn_standard',
                                        ],
                                        'dicts' => [
                                            'description' => '自定义分词词典'."\n"
                                                ."\n"
                                                .'参考：[UserDict](~~178933~~)',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'created' => [
                                                        'description' => '创建时间戳',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1588054131',
                                                    ],
                                                    'entriesCount' => [
                                                        'description' => '词条数量',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '-1',
                                                    ],
                                                    'type' => [
                                                        'description' => '类型'."\n"
                                                            ."\n"
                                                            .'- segment 拆分',
                                                        'type' => 'string',
                                                        'example' => 'segment',
                                                    ],
                                                    'entriesLimit' => [
                                                        'description' => '词条数量限制',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '4',
                                                    ],
                                                    'available' => [
                                                        'description' => '是否可用',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                    'updated' => [
                                                        'description' => '更新时间戳',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1588054131',
                                                    ],
                                                    'id' => [
                                                        'description' => '词典ID',
                                                        'type' => 'string',
                                                        'example' => '123',
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
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1588054131,\\n      \\"available\\": false,\\n      \\"name\\": \\"kevin_test2\\",\\n      \\"updated\\": 1588054131,\\n      \\"id\\": \\"1234\\",\\n      \\"business\\": \\"chn_standard\\",\\n      \\"dicts\\": [\\n        {\\n          \\"created\\": 1588054131,\\n          \\"entriesCount\\": -1,\\n          \\"type\\": \\"segment\\",\\n          \\"entriesLimit\\": 4,\\n          \\"available\\": false,\\n          \\"updated\\": 1588054131,\\n          \\"id\\": \\"123\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<totalCount>1</totalCount>\\n<result>\\n    <id>1234</id>\\n    <name>kevin_test2</name>\\n    <business>chn_standard</business>\\n    <dicts>\\n        <id>123</id>\\n        <type>segment</type>\\n        <entriesLimit>4</entriesLimit>\\n        <entriesCount>-1</entriesCount>\\n        <available>false</available>\\n        <created>1588054131</created>\\n        <updated>1588054131</updated>\\n    </dicts>\\n    <available>true</available>\\n    <created>1588054131</created>\\n    <updated>1588054131</updated>\\n</result>","errorExample":""}]',
            'title' => '获取用户的自定义分词器列表',
            'summary' => '获取用户的自定义分词器列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateUserAnalyzer' => [
            'path' => '/v4/openapi/user-analyzers',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'title' => '名称',
                                'description' => '名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'jmbon_analyzer',
                            ],
                            'business' => [
                                'title' => '基础分词器',
                                'description' => '基础分词器',
                                'type' => 'string',
                                'required' => false,
                                'example' => '中文-通用分析',
                            ],
                            'businessType' => [
                                'title' => '基础分词器类型 (AUTO, MODEL, SYSTEM, USER)',
                                'description' => '基础分词器类型 (AUTO, MODEL, SYSTEM, USER)',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'AUTO',
                            ],
                            'type' => [
                                'title' => '引擎类型 (HA3, ES)',
                                'description' => '引擎类型 (HA3, ES)',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'HA3',
                            ],
                            'businessAppGroupId' => [
                                'description' => '用于指定模型定制分析器所属应用ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => '110123123',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值含义如下：'."\n"
                            ."\n"
                            .'- true：发送检查请求，不会创建终端节点。检查项包括AccessKey是否有效、RAM用户的授权情况和是否填写了必需参数。'."\n"
                            .'- false（默认值）：立即触发创建终端节点。',
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
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '98724351-D6B2-5D8A-B089-7FFD1821A7E9',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {},\\n  \\"RequestId\\": \\"98724351-D6B2-5D8A-B089-7FFD1821A7E9\\"\\n}","type":"json"}]',
            'title' => '创建自定义分析器',
            'summary' => '创建自定义分析器。',
        ],
        'DescribeUserAnalyzer' => [
            'path' => '/v4/openapi/user-analyzers/{name}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '分析器名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'kevin_test',
                    ],
                ],
                [
                    'name' => 'with',
                    'in' => 'query',
                    'schema' => [
                        'description' => '关联信息，根据层级输出属性'."\n"
                            .'- all 输出关联app信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'all',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '自定义分析器，参考：[UserAnalyzer](~~178934~~)',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'FFAEF396-10EF-53C7-1F51-518853880729',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"FFAEF396-10EF-53C7-1F51-518853880729\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>FFAEF396-10EF-53C7-1F51-518853880729</requestId>\\n<result>\\n    <id>1234</id>\\n    <name>kevin_test</name>\\n    <business>chn_it_content</business>\\n    <available>true</available>\\n    <relatedAppInfoList>\\n        <id>100298352</id>\\n        <name>test_srn_mysql</name>\\n    </relatedAppInfoList>\\n    <dicts>\\n        <id>123</id>\\n        <type>segment</type>\\n        <entries>\\n            <cmd>add</cmd>\\n            <key>kevintest</key>\\n            <value>kevin test</value>\\n            <created>1536690285</created>\\n            <updated>1537348987</updated>\\n            <status>ACTIVE</status>\\n            <splitEnabled>true</splitEnabled>\\n        </entries>\\n        <entries>\\n            <cmd>add</cmd>\\n            <key>abcd</key>\\n            <value>abcd</value>\\n            <created>1536690285</created>\\n            <updated>1537348987</updated>\\n            <status>ACTIVE</status>\\n            <splitEnabled>true</splitEnabled>\\n        </entries>\\n        <entriesLimit>4</entriesLimit>\\n        <entriesCount>2</entriesCount>\\n        <available>true</available>\\n        <created>1584702214</created>\\n        <updated>1584702214</updated>\\n    </dicts>\\n    <created>1584702212</created>\\n    <updated>1584702212</updated>\\n</result>","errorExample":""}]',
            'title' => '获取自定义分析器详情',
            'summary' => '获取自定义分析器详情。',
        ],
        'RemoveUserAnalyzer' => [
            'path' => '/v4/openapi/user-analyzers/{name}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '分析器名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“kevin_test”',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '结果集（请求成功不返回该参数）',
                                'type' => 'object',
                                'example' => '[]',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [],\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
            'title' => '删除自定义分析器',
            'summary' => '删除自定义分析器。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListUserAnalyzerEntries' => [
            'path' => '/v4/openapi/user-analyzers/{name}/entries',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '分析器名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"kevin_test"',
                    ],
                ],
                [
                    'name' => 'word',
                    'in' => 'query',
                    'schema' => [
                        'description' => '词条key。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"kevintest"',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认 pageNumber=1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回数目，默认 pageSize=10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => 'Object	自定义分析器词条'."\n"
                                    .'参考：UserAnalyzerEntry',
                                'type' => 'object',
                                'example' => '['."\n"
                                    .'{'."\n"
                                    .'	"cmd": "add",'."\n"
                                    .'	"key": "kevintest",'."\n"
                                    .'	"value": "kevin test",'."\n"
                                    .'	"created": 1536690285,'."\n"
                                    .'	"updated": 1537348987,'."\n"
                                    .'	"status": "ACTIVE",'."\n"
                                    .'	"splitEnabled": true'."\n"
                                    .'}'."\n"
                                    .']',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '516A02B7-2167-8D92-12D0-B639A2A0F3C5',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"cmd\\": \\"add\\",\\n      \\"key\\": \\"kevintest\\",\\n      \\"value\\": \\"kevin test\\",\\n      \\"created\\": 1536690285,\\n      \\"updated\\": 1537348987,\\n      \\"status\\": \\"ACTIVE\\",\\n      \\"splitEnabled\\": true\\n    }\\n  ],\\n  \\"RequestId\\": \\"516A02B7-2167-8D92-12D0-B639A2A0F3C5\\"\\n}","type":"json"}]',
            'title' => '获取自定义分析器词条清单',
            'summary' => '获取自定义分析器词条清单。',
        ],
        'PushUserAnalyzerEntries' => [
            'path' => '/v4/openapi/user-analyzers/{name}/entries/actions/bulk',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '分析器名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“kevin_test”',
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
                        'description' => '请求体。',
                        'type' => 'object',
                        'properties' => [
                            'entries' => [
                                'description' => '词条。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'cmd' => [
                                            'description' => '词条操作。'."\n"
                                                ."\n"
                                                .'取值：'."\n"
                                                ."\n"
                                                .'- add：添加。'."\n"
                                                .'- delete：删除。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '"add"',
                                        ],
                                        'key' => [
                                            'description' => '词条key信息。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '"testvalue"',
                                        ],
                                        'value' => [
                                            'description' => '分词结果。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '"test value"',
                                        ],
                                        'splitEnabled' => [
                                            'description' => '是否进行更细粒度切分。'."\n"
                                                ."\n"
                                                .'默认true',
                                            'type' => 'boolean',
                                            'required' => false,
                                            'example' => 'true',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'maxItems' => 100,
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
                            'result' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'example' => '[]',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [],\\n  \\"RequestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","type":"json"}]',
            'title' => '接收自定义分析器词条变更',
            'summary' => '接收自定义分析器词条变更。',
            'requestParamsDescription' => '注：'."\n"
                .'添加英文干预词条请全部用小写字母',
        ],
        'ListABTestScenes' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '实验场景'."\n"
                                    ."\n"
                                    .'参考：[ABTestScene](~~173618~~)',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1588836130',
                                        ],
                                        'status' => [
                                            'description' => '状态'."\n"
                                                ."\n"
                                                .'-  0 未生效'."\n"
                                                .'-  1 生效',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'updated' => [
                                            'description' => '最后修改时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1588836129',
                                        ],
                                        'name' => [
                                            'description' => '组别名',
                                            'type' => 'string',
                                            'example' => 'kevintest_2020-5-7_15:21:482',
                                        ],
                                        'id' => [
                                            'description' => '组ID',
                                            'type' => 'string',
                                            'example' => '20404',
                                        ],
                                        'values' => [
                                            'description' => '场景列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '场景列表',
                                                'type' => 'string',
                                                'example' => '["kevintest2"]',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1588836130,\\n      \\"status\\": 1,\\n      \\"updated\\": 1588836129,\\n      \\"name\\": \\"kevintest_2020-5-7_15:21:482\\",\\n      \\"id\\": \\"20404\\",\\n      \\"values\\": [\\n        \\"[\\\\\\"kevintest2\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>20404</id>\\n    <name>kevintest_2020-5-7_15:21:482</name>\\n    <status>1</status>\\n    <created>1588836130</created>\\n    <updated>1588836129</updated>\\n    <values>kevintest2</values>\\n</result>","errorExample":""}]',
            'title' => '列出场景清单',
            'summary' => '列出场景清单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateABTestScene' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => 'ABTest实验场景，参考[ABTestScene](~~173618~~)',
                        'required' => false,
                        '$ref' => '#/components/schemas/ABTestScene',
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
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'status' => [
                                        'description' => '状态'."\n"
                                            .'- 0 未生效'."\n"
                                            .'- 1 生效',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'updated' => [
                                        'description' => '最后修改时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1589012351',
                                    ],
                                    'name' => [
                                        'description' => '组别名',
                                        'type' => 'string',
                                        'example' => 'kevintest_2020-5-7_15:21:48',
                                    ],
                                    'id' => [
                                        'description' => '组ID',
                                        'type' => 'string',
                                        'example' => '20405',
                                    ],
                                    'values' => [
                                        'description' => '场景标识',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '场景标识',
                                            'type' => 'string',
                                            'example' => '[       "kevintest"     ]',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 0,\\n    \\"status\\": 1,\\n    \\"updated\\": 1589012351,\\n    \\"name\\": \\"kevintest_2020-5-7_15:21:48\\",\\n    \\"id\\": \\"20405\\",\\n    \\"values\\": [\\n      \\"[       \\\\\\"kevintest\\\\\\"     ]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>20405</id>\\n    <name>kevintest_2020-5-7_15:21:48</name>\\n    <status>1</status>\\n    <created>1589012351</created>\\n    <updated>1589012351</updated>\\n    <values>kevintest</values>\\n</result>","errorExample":""}]',
            'title' => '创建 ABTest 实验场景',
            'summary' => '创建实验场景。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| name | String | 是 | "kevintest22" | 场景别名 |'."\n"
                .'| status| Integer| 否 | 0 | 场景状态- 0 停止实验- 1 启动实验 |'."\n"
                .'| created| Integer| 否 | 1589012351 | 创建时间 |'."\n"
                .'| updated| Integer| 否 | 1589012351 | 最后修改时间 |'."\n"
                .'| values[] | String | 否 | "kevintest22" | 场景标识 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeABTestScene' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实验场景ID。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '实验场景。',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1596527691',
                                    ],
                                    'status' => [
                                        'description' => '场景状态'."\n"
                                            .'- 0 停止实验'."\n"
                                            .'- 1 启动实验',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'updated' => [
                                        'description' => '最后修改时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1596527691',
                                    ],
                                    'name' => [
                                        'description' => '场景别名',
                                        'type' => 'string',
                                        'example' => '"test"',
                                    ],
                                    'id' => [
                                        'description' => '场景ID',
                                        'type' => 'string',
                                        'example' => '20614',
                                    ],
                                    'values' => [
                                        'description' => '场景标识',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '场景标识',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1596527691,\\n    \\"status\\": 0,\\n    \\"updated\\": 1596527691,\\n    \\"name\\": \\"\\\\\\"test\\\\\\"\\",\\n    \\"id\\": \\"20614\\",\\n    \\"values\\": [\\n      \\"test\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取ABTest实验场景详情',
            'summary' => '获取实验场景详情。',
        ],
        'UpdateABTestScene' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => 'ABTest实验场景',
                        'required' => false,
                        '$ref' => '#/components/schemas/ABTestScene',
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
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '实验场景'."\n"
                                    .'参考：[ABTestScene](~~173618~~)'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1596527691',
                                    ],
                                    'params' => [
                                        'description' => '试验参数',
                                        'type' => 'object',
                                        'example' => '{}',
                                    ],
                                    'traffic' => [
                                        'description' => '实验分桶百分比取值范围：0-100',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '111',
                                    ],
                                    'online' => [
                                        'description' => '实验状态'."\n"
                                            .'- true：开启'."\n"
                                            .'- false：停止',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'name' => [
                                        'description' => '场景别名',
                                        'type' => 'string',
                                        'example' => 'kevintest22',
                                    ],
                                    'updated' => [
                                        'description' => '最后修改时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1596527691',
                                    ],
                                    'id' => [
                                        'description' => '场景ID',
                                        'type' => 'string',
                                        'example' => '20614',
                                    ],
                                ],
                                'example' => '{}',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1596527691,\\n    \\"params\\": {},\\n    \\"traffic\\": 111,\\n    \\"online\\": true,\\n    \\"name\\": \\"kevintest22\\",\\n    \\"updated\\": 1596527691,\\n    \\"id\\": \\"20614\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>20405</id>\\n    <name>kevintest22</name>\\n    <status>1</status>\\n    <created>1589012351</created>\\n    <updated>1589012351</updated>\\n    <values>kevintest22</values>\\n</result>","errorExample":""}]',
            'title' => '修改实验场景',
            'summary' => '修改实验场景。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| name | String | 是 | "kevintest22" | 场景别名 |'."\n"
                .'| values[] | String | 是 | "kevintest22" | 场景标识 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteABTestScene' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称、应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '[]',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5C1C1C45-C64A-AD30-565F-140871D57E5E',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [],\\n  \\"requestId\\": \\"5C1C1C45-C64A-AD30-565F-140871D57E5E\\"\\n}","type":"json"}]',
            'title' => '删除 ABTest 实验场景',
            'summary' => '删除实验场景。',
        ],
        'ListABTestGroups' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '	“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '实验组'."\n"
                                    ."\n"
                                    .'参考：[ABTestGroup](~~178935~~)',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1588839490',
                                        ],
                                        'status' => [
                                            'description' => '状态'."\n"
                                                .'- 0 未生效'."\n"
                                                .'- 1 生效',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'updated' => [
                                            'description' => '最后修改时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1588839490',
                                        ],
                                        'name' => [
                                            'description' => '组别名',
                                            'type' => 'string',
                                            'example' => 'Group_2020-5-7_15:23:3',
                                        ],
                                        'id' => [
                                            'description' => '组ID',
                                            'type' => 'string',
                                            'example' => '13466',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1588839490,\\n      \\"status\\": 1,\\n      \\"updated\\": 1588839490,\\n      \\"name\\": \\"Group_2020-5-7_15:23:3\\",\\n      \\"id\\": \\"13466\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>13466</id>\\n    <name>Group_2020-5-7_15:23:3</name>\\n    <status>1</status>\\n    <created>1588839490</created>\\n    <updated>1588839490</updated>\\n</result>","errorExample":""}]',
            'title' => '获取实验组清单',
            'summary' => '获取实验组清单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateABTestGroup' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体，参考：[ABTestGroup](~~178935~~)',
                        'required' => false,
                        '$ref' => '#/components/schemas/ABTestGroup',
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
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588839490',
                                    ],
                                    'status' => [
                                        'description' => '状态'."\n"
                                            .'- 0 未生效'."\n"
                                            .'- 1 生效',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'updated' => [
                                        'description' => '最后修改时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588839490',
                                    ],
                                    'name' => [
                                        'description' => '组别名',
                                        'type' => 'string',
                                        'example' => 'Group_2020-5-7_15:23:3',
                                    ],
                                    'id' => [
                                        'description' => '组ID',
                                        'type' => 'string',
                                        'example' => '13466',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1588839490,\\n    \\"status\\": 1,\\n    \\"updated\\": 1588839490,\\n    \\"name\\": \\"Group_2020-5-7_15:23:3\\",\\n    \\"id\\": \\"13466\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<result>\\n    <created>1588839490</created>\\n    <name>Group_2020-5-7_15:23:3</name>\\n    <id>13466</id>\\n    <updated>1588839490</updated>\\n    <status>1</status>\\n</result>\\n<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
            'title' => '创建 ABTest 实验组',
            'summary' => '创建实验组。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| name | String | 是 | "kevintest3" | 实验组名称 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteABTestGroup' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
                [
                    'name' => 'groupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '组ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '13467',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
            'title' => '删除 ABTest 实验组',
            'summary' => '删除实验组。',
        ],
        'DescribeABTestGroup' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
                [
                    'name' => 'groupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '组ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '13467',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '实验组',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588839490',
                                    ],
                                    'status' => [
                                        'description' => '状态'."\n"
                                            .'- 0 未生效'."\n"
                                            .'- 1 生效',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'updated' => [
                                        'description' => '最后修改时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588839490',
                                    ],
                                    'name' => [
                                        'description' => '组别名',
                                        'type' => 'string',
                                        'example' => 'Group_2020-5-7_15:23:3',
                                    ],
                                    'id' => [
                                        'description' => '组ID',
                                        'type' => 'string',
                                        'example' => '13466',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1588839490,\\n    \\"status\\": 1,\\n    \\"updated\\": 1588839490,\\n    \\"name\\": \\"Group_2020-5-7_15:23:3\\",\\n    \\"id\\": \\"13466\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>13466</id>\\n    <name>Group_2020-5-7_15:23:3</name>\\n    <status>1</status>\\n    <created>1588839490</created>\\n    <updated>1588839490</updated>\\n</result>","errorExample":""}]',
            'title' => '获取 ABTest 实验组详情',
            'summary' => '获取实验组详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateABTestGroup' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
                [
                    'name' => 'groupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '组ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '13467',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体，参考：[ABTestGroup](~~178935~~)',
                        'required' => false,
                        '$ref' => '#/components/schemas/ABTestGroup',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值含义如下：'."\n"
                            ."\n"
                            .'- true：发送检查请求，不会创建终端节点。检查项包括AccessKey是否有效、RAM用户的授权情况和是否填写了必需参数。'."\n"
                            .'- false（默认值）：立即触发创建终端节点。',
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
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '\'\'1111\'\'',
                            ],
                            'result' => [
                                'description' => '实验组',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588839490',
                                    ],
                                    'status' => [
                                        'description' => '状态'."\n"
                                            .'- 0 未生效'."\n"
                                            .'- 1 生效',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'updated' => [
                                        'description' => '最后修改时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588839490',
                                    ],
                                    'name' => [
                                        'description' => '组别名',
                                        'type' => 'string',
                                        'example' => 'Group_2020-5-7_15:23:3',
                                    ],
                                    'id' => [
                                        'description' => '组ID',
                                        'type' => 'string',
                                        'example' => '13466',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"\'\'1111\'\'\\",\\n  \\"result\\": {\\n    \\"created\\": 1588839490,\\n    \\"status\\": 1,\\n    \\"updated\\": 1588839490,\\n    \\"name\\": \\"Group_2020-5-7_15:23:3\\",\\n    \\"id\\": \\"13466\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>13467</id>\\n    <name>kevintestgroup222</name>\\n    <status>1</status>\\n    <created>1589016325</created>\\n    <updated>1589016544</updated>\\n</result>","errorExample":""}]',
            'title' => '修改 ABTest 实验组',
            'summary' => '修改实验组。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| name | String | 是 | "kevintest3" | 实验组名称 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListABTestExperiments' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '13467',
                    ],
                ],
                [
                    'name' => 'groupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '组ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '实验详情  '."\n"
                                    .'参考：[ABTestExperiment](~~173617~~)',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1588842080',
                                        ],
                                        'params' => [
                                            'description' => '试验参数',
                                            'type' => 'object',
                                            'example' => '1',
                                        ],
                                        'traffic' => [
                                            'description' => '实验分桶百分比'."\n"
                                                ."\n"
                                                .'取值范围：\\[0-100\\]',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'online' => [
                                            'description' => '实验状态'."\n"
                                                ."\n"
                                                .'- true 生效'."\n"
                                                .'- false 未生效',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'name' => [
                                            'description' => '组别名',
                                            'type' => 'string',
                                            'example' => 'test1',
                                        ],
                                        'updated' => [
                                            'description' => '最后修改时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1588842080',
                                        ],
                                        'id' => [
                                            'description' => '实验ID',
                                            'type' => 'string',
                                            'example' => '12888',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1588842080,\\n      \\"params\\": 1,\\n      \\"traffic\\": 30,\\n      \\"online\\": true,\\n      \\"name\\": \\"test1\\",\\n      \\"updated\\": 1588842080,\\n      \\"id\\": \\"12888\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>12888</id>\\n    <name>test1</name>\\n    <params>\\n        <firstFormulaName>default</firstFormulaName>\\n    </params>\\n    <created>1588842080</created>\\n    <updated>1588842080</updated>\\n    <online>true</online>\\n    <traffic>30</traffic>\\n</result>","errorExample":""}]',
            'title' => '列出实验清单',
            'summary' => '列出实验清单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateABTestExperiment' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
                [
                    'name' => 'groupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '组ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '13467',
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
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体',
                        'required' => false,
                        '$ref' => '#/components/schemas/ABTestExperiment',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '实验详情',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'params' => [
                                        'description' => '实验参数',
                                        'type' => 'object',
                                        'example' => '{"firstFormulaName": "default"}',
                                    ],
                                    'traffic' => [
                                        'description' => '实验分桶百分比',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'online' => [
                                        'description' => '实验状态'."\n"
                                            .'- true 生效'."\n"
                                            .'- false 未生效',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'name' => [
                                        'description' => '实验别名',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'updated' => [
                                        'description' => '最后修改时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1589017861',
                                    ],
                                    'id' => [
                                        'description' => '实验ID',
                                        'type' => 'string',
                                        'example' => '12889',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 0,\\n    \\"params\\": {\\n      \\"firstFormulaName\\": \\"default\\"\\n    },\\n    \\"traffic\\": 30,\\n    \\"online\\": true,\\n    \\"name\\": \\"test3\\",\\n    \\"updated\\": 1589017861,\\n    \\"id\\": \\"12889\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<result>\\n    <created>0</created>\\n    <name>test3</name>\\n    <online>true</online>\\n    <id>12889</id>\\n    <params>\\n        <firstFormulaName>default</firstFormulaName>\\n    </params>\\n    <updated>1589017861</updated>\\n    <traffic>30</traffic>\\n</result>\\n<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
            'title' => '创建 ABTest 测试实验',
            'summary' => '创建实验。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| name | String | 是 | "my_test" | 实验名称 |'."\n"
                .'| traffic | Integer | 是 | 30 | 实验流量 |'."\n"
                .'| online | Boolean | 是 | true | 是否生效 |'."\n"
                .'| params | Object | 是 | {"firstFormulaName": "default"} | 实验配置，参考：[ABTestExperiment ](~~173617~~)|',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeABTestExperiment' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
                [
                    'name' => 'groupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '组ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '13467',
                    ],
                ],
                [
                    'name' => 'experimentId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实验ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '12889',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '实验详情',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588842080',
                                    ],
                                    'traffic' => [
                                        'description' => '实验分桶百分比',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'online' => [
                                        'description' => '实验状态'."\n"
                                            .'- true 生效'."\n"
                                            .'- false 未生效',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'name' => [
                                        'description' => '实验别名',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'updated' => [
                                        'description' => '最后修改时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588842080',
                                    ],
                                    'id' => [
                                        'description' => '实验ID',
                                        'type' => 'string',
                                        'example' => '12888',
                                    ],
                                    'params' => [
                                        'description' => '试验参数',
                                        'type' => 'object',
                                        'properties' => [
                                            'first_formula_name' => [
                                                'description' => '粗排策略名',
                                                'type' => 'string',
                                                'example' => 'default',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1588842080,\\n    \\"traffic\\": 30,\\n    \\"online\\": true,\\n    \\"name\\": \\"test1\\",\\n    \\"updated\\": 1588842080,\\n    \\"id\\": \\"12888\\",\\n    \\"params\\": {\\n      \\"first_formula_name\\": \\"default\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>12888</id>\\n    <name>test1</name>\\n    <params>\\n        <first_formula_name>default</first_formula_name>\\n    </params>\\n    <created>1588842080</created>\\n    <updated>1588842080</updated>\\n    <online>true</online>\\n    <traffic>30</traffic>\\n</result>","errorExample":""}]',
            'title' => '获取 ABTest 实验详情',
            'summary' => '获取实验详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateABTestExperiment' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
                [
                    'name' => 'groupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '组ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '13467',
                    ],
                ],
                [
                    'name' => 'experimentId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实验ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '12889',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值含义如下：'."\n"
                            ."\n"
                            .'- true：发送检查请求，不会创建终端节点。检查项包括AccessKey是否有效、RAM用户的授权情况和是否填写了必需参数。'."\n"
                            .'- false（默认值）：立即触发创建终端节点。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体，参考：[ABTestExperiment](~~173617~~)',
                        'required' => false,
                        '$ref' => '#/components/schemas/ABTestExperiment',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '实验详情',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588842080',
                                    ],
                                    'params' => [
                                        'description' => '试验参数',
                                        'type' => 'object',
                                        'example' => '{}',
                                    ],
                                    'traffic' => [
                                        'description' => '实验分桶百分比'."\n"
                                            .'取值范围：0-100',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'online' => [
                                        'description' => '实验状态'."\n"
                                            .'- true 生效'."\n"
                                            .'- false 未生效',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'name' => [
                                        'description' => '实验别名',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'updated' => [
                                        'description' => '最后修改时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588842080',
                                    ],
                                    'id' => [
                                        'description' => '实验ID',
                                        'type' => 'string',
                                        'example' => '12888',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1588842080,\\n    \\"params\\": {},\\n    \\"traffic\\": 30,\\n    \\"online\\": true,\\n    \\"name\\": \\"test1\\",\\n    \\"updated\\": 1588842080,\\n    \\"id\\": \\"12888\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>12889</id>\\n    <name>test333</name>\\n    <params>\\n        <firstFormulaName>default</firstFormulaName>\\n    </params>\\n    <created>1589017860</created>\\n    <updated>1589018211</updated>\\n    <online>true</online>\\n    <traffic>40</traffic>\\n</result>","errorExample":""}]',
            'title' => '修改实验参数',
            'summary' => '修改实验参数。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| name | String | 否 | "my_test" | 实验名称 |'."\n"
                .'| traffic | Integer | 否 | 30 | 实验流量 |'."\n"
                .'| online | Boolean | 否 | true | 是否生效 |'."\n"
                .'| params | Object | 否 |  {"firstFormulaName": "default"}  | 实验配置 |'."\n"
                ."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteABTestExperiment' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
                [
                    'name' => 'groupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '组ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '13467',
                    ],
                ],
                [
                    'name' => 'experimentId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实验ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '12889',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
            'title' => '删除 ABTest 实验',
            'summary' => '删除实验。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListABTestFixedFlowDividers' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}/fixed-flow-dividers',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '12889',
                    ],
                ],
                [
                    'name' => 'groupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '组ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '13467',
                    ],
                ],
                [
                    'name' => 'experimentId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实验ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'type' => 'array',
                                'items' => [
                                    'description' => '白名单',
                                    'type' => 'string',
                                    'example' => '[     "D77D0DAF",     "133738165014"   ]',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    \\"[     \\\\\\"D77D0DAF\\\\\\",     \\\\\\"133738165014\\\\\\"   ]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>D77D0DAF</result>\\n<result>133738165014</result>","errorExample":""}]',
            'title' => '获取 ABTest 白名单清单',
            'summary' => '获取白名单清单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateABTestFixedFlowDividers' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}/fixed-flow-dividers',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'sceneId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '场景ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '20404',
                    ],
                ],
                [
                    'name' => 'groupId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '组ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '13467',
                    ],
                ],
                [
                    'name' => 'experimentId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实验ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '-1',
                        'example' => '12889',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'array',
                        'items' => [
                            'description' => '白名单数据',
                            'type' => 'string',
                            'required' => false,
                            'example' => '"D77D0DAF"	',
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
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '白名单',
                                    'type' => 'string',
                                    'example' => '[  "D77D0DAF",   "133738165014"  ]',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    \\"[  \\\\\\"D77D0DAF\\\\\\",   \\\\\\"133738165014\\\\\\"  ]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>D77D0DAF</result>\\n<result>133738165014</result>","errorExample":""}]',
            'title' => '更新 ABTest 白名单数据',
            'summary' => '更新白名单数据。',
            'requestParamsDescription' => "\n"
                .'**路径参数**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| [] | String | 是 | "D77D0DAF" | 白名单数据 |'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListFirstRanks' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/first-ranks',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '粗排表达式信息'."\n"
                                    ."\n"
                                    .'参考：[FirstRank](~~170007~~)',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果体',
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'active' => [
                                            'description' => '是否是默认表达式',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'description' => [
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'updated' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'name' => [
                                            'description' => '名称',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'meta' => [
                                            'description' => '表达式信息',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '信息体',
                                                'type' => 'object',
                                                'properties' => [
                                                    'arg' => [
                                                        'description' => '表达式函数参数'."\n"
                                                            ."\n"
                                                            .'参考：[基础排序](~~180765~~)',
                                                        'type' => 'string',
                                                        'example' => '""',
                                                    ],
                                                    'attribute' => [
                                                        'description' => '属性，算分特征或搜索字段'."\n"
                                                            ."\n"
                                                            .'可用的算分特征，参考：[基础排序](~~180765~~)',
                                                        'type' => 'string',
                                                        'example' => 'static_bm25()',
                                                    ],
                                                    'weight' => [
                                                        'description' => '权重'."\n"
                                                            .'取值范围：-100000～100000非0值',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                ],
                                                'example' => '[]',
                                            ],
                                            'example' => '[]',
                                        ],
                                    ],
                                    'example' => '{}',
                                ],
                                'example' => '[]',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 0,\\n      \\"active\\": true,\\n      \\"description\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"updated\\": 0,\\n      \\"name\\": \\"default\\",\\n      \\"meta\\": [\\n        {\\n          \\"arg\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"attribute\\": \\"static_bm25()\\",\\n          \\"weight\\": 1\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>default</name>\\n    <description/>\\n    <active>true</active>\\n    <type>STRUCT</type>\\n    <meta>\\n        <attribute>static_bm25()</attribute>\\n        <arg/>\\n        <weight>1</weight>\\n    </meta>\\n    <created>0</created>\\n    <updated>0</updated>\\n</result>","errorExample":""}]',
            'title' => '获取指定应用版本的粗排配置列表',
            'summary' => '获取指定OpenSearch应用版本的粗排配置列表。',
        ],
        'CreateFirstRank' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/first-ranks',
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
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为空运行请求',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体，基础排序信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/FirstRank',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '粗排表达式信息',
                                'type' => 'object',
                                'properties' => [
                                    'active' => [
                                        'description' => '是否是默认表达式',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'meta' => [
                                        'description' => '表达式信息',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'arg' => [
                                                    'description' => '表达式函数参数',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'attribute' => [
                                                    'description' => '属性，算分特征或搜索字段',
                                                    'type' => 'string',
                                                    'example' => 'static_bm25()',
                                                ],
                                                'weight' => [
                                                    'description' => '权重'."\n"
                                                        .'取值范围：-100000～100000非0值',
                                                    'type' => 'number',
                                                    'format' => 'float',
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
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"active\\": true,\\n    \\"name\\": \\"default\\",\\n    \\"meta\\": [\\n      {\\n        \\"arg\\": \\"1\\",\\n        \\"attribute\\": \\"static_bm25()\\",\\n        \\"weight\\": 10\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>general_default</name>\\n    <description/>\\n    <active>false</active>\\n    <type>STRUCT</type>\\n    <meta>\\n        <attribute>static_bm25()</attribute>\\n        <arg/>\\n        <weight>2</weight>\\n    </meta>\\n    <meta>\\n        <attribute>hot_score</attribute>\\n        <arg/>\\n        <weight>0.000001</weight>\\n    </meta>\\n    <created>0</created>\\n    <updated>0</updated>\\n</result>","errorExample":""}]',
            'title' => '创建一个应用版本的粗排表达式配置',
            'summary' => '创建一个OpenSearch应用版本的粗排表达式配置。当 dryRun=true 时，表示进行粗排表达式校验，默认 dryRun不传为false。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| name | String | 是 |  "test"  | 表达式名称 |'."\n"
                .'| type | String | 是 |  "STRUCT"  | 表达式类型 <br />- STRUCT  结构化，默认值  <br />- STRING  自定义公式 |'."\n"
                .'| meta| Array 或 String| 是 |   | 表达式信息 |'."\n"
                .'| description | String | 否 |  "my_test"  | 描述 |'."\n"
                .'| active | Boolean | 否 |  true  | 是否是默认表达式 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeFirstRank' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/first-ranks/{name}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '粗排表达式名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '粗排表达式信息',
                                'type' => 'object',
                                'properties' => [
                                    'description' => [
                                        'description' => '描述',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'active' => [
                                        'description' => '是否是默认表达式',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'ar_wear_edit_time',
                                    ],
                                    'meta' => [
                                        'description' => '表达式信息',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'arg' => [
                                                    'description' => '表达式函数参数',
                                                    'type' => 'string',
                                                    'example' => 'ar_edit_time',
                                                ],
                                                'attribute' => [
                                                    'description' => '属性，算分特征或搜索字段',
                                                    'type' => 'string',
                                                    'example' => 'timeliness_ms()',
                                                ],
                                                'weight' => [
                                                    'description' => '权重'."\n"
                                                        .'取值范围：-100000～100000非0值',
                                                    'type' => 'number',
                                                    'format' => 'float',
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
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"description\\": \\"-\\",\\n    \\"active\\": false,\\n    \\"name\\": \\"ar_wear_edit_time\\",\\n    \\"meta\\": [\\n      {\\n        \\"arg\\": \\"ar_edit_time\\",\\n        \\"attribute\\": \\"timeliness_ms()\\",\\n        \\"weight\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>ar_wear_edit_time</name>\\n    <type>STRUCT</type>\\n    <meta>\\n        <attribute>timeliness_ms()</attribute>\\n        <arg>ar_edit_time</arg>\\n        <weight>1</weight>\\n    </meta>\\n    <description/>\\n    <active>false</active>\\n    <created>0</created>\\n    <updated>0</updated>\\n</result>","errorExample":""}]',
            'title' => '查看一个应用版本的粗排表达式配置',
            'summary' => '查看一个 OpenSearch 应用版本的粗排表达式配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RemoveFirstRank' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/first-ranks/{name}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '粗排表达式名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“test”',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E676FAB6-A0AC-64D9-F9D7-D0D33C930CFF',
                            ],
                            'result' => [
                                'description' => '粗排表达式信息',
                                'type' => 'object',
                                'properties' => [
                                    'description' => [
                                        'description' => '描述',
                                        'type' => 'string',
                                        'example' => '""',
                                    ],
                                    'active' => [
                                        'description' => '是否是默认表达式',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'meta' => [
                                        'description' => '表达式信息',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'arg' => [
                                                    'description' => '表达式函数参数'."\n"
                                                        .'参考：[基础排序](~~170007~~)',
                                                    'type' => 'string',
                                                    'example' => '""',
                                                ],
                                                'attribute' => [
                                                    'description' => '属性，指算分特征或搜索字段，'."\n"
                                                        .'可用的算分特征，参考：[基础排序](~~170007~~)',
                                                    'type' => 'string',
                                                    'example' => 'static_bm25()',
                                                ],
                                                'weight' => [
                                                    'description' => '权重'."\n"
                                                        .'取值范围：-100000～100000非0值',
                                                    'type' => 'number',
                                                    'format' => 'float',
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
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"E676FAB6-A0AC-64D9-F9D7-D0D33C930CFF\\",\\n  \\"result\\": {\\n    \\"description\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"active\\": true,\\n    \\"name\\": \\"default\\",\\n    \\"meta\\": [\\n      {\\n        \\"arg\\": \\"\\\\\\"\\\\\\"\\",\\n        \\"attribute\\": \\"static_bm25()\\",\\n        \\"weight\\": 10\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>E676FAB6-A0AC-64D9-F9D7-D0D33C930CFF</requestId>\\n<result>\\n    <name>test2</name>\\n    <description/>\\n    <active>false</active>\\n    <type>STRUCT</type>\\n    <meta>\\n        <attribute>timeliness()</attribute>\\n        <arg>hid</arg>\\n        <weight>1</weight>\\n    </meta>\\n    <created>1587708467</created>\\n    <updated>1587708467</updated>\\n</result>","errorExample":""}]',
            'title' => '删除粗排规则',
            'summary' => '删除指定 OpenSearch 应用版本的粗排配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
        ],
        'ModifyFirstRank' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/first-ranks/{name}',
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
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为空运行请求',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '粗排表达式名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体',
                        'required' => false,
                        '$ref' => '#/components/schemas/FirstRank',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '粗排表达式信息',
                                'type' => 'object',
                                'properties' => [
                                    'description' => [
                                        'description' => '描述',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'active' => [
                                        'description' => '是否是默认表达式',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'meta' => [
                                        'description' => '表达式信息',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'arg' => [
                                                    'description' => '表达式函数参数',
                                                    'type' => 'string',
                                                    'example' => '“1 ”',
                                                ],
                                                'attribute' => [
                                                    'description' => '属性，算分特征或搜索字段'."\n"
                                                        .'可用的算分特征',
                                                    'type' => 'string',
                                                    'example' => 'static_bm25()',
                                                ],
                                                'weight' => [
                                                    'description' => '权重'."\n"
                                                        .'取值范围：-100000～100000非0值',
                                                    'type' => 'number',
                                                    'format' => 'float',
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
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"description\\": \\"1\\",\\n    \\"active\\": true,\\n    \\"name\\": \\"default\\",\\n    \\"meta\\": [\\n      {\\n        \\"arg\\": \\"“1 ”\\",\\n        \\"attribute\\": \\"static_bm25()\\",\\n        \\"weight\\": 10\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>ar_wear_edit_time</name>\\n    <type>STRUCT</type>\\n    <meta>\\n        <attribute>timeliness_ms()</attribute>\\n        <arg>ar_edit_time</arg>\\n        <weight>1</weight>\\n    </meta>\\n    <description/>\\n    <active>false</active>\\n    <created>0</created>\\n    <updated>0</updated>\\n</result>","errorExample":""}]',
            'title' => '修改一个应用版本的粗排表达式配置',
            'summary' => '修改一个 OpenSearch 应用版本的粗排表达式配置当 dryRun=true 时，表示修改后的粗排表达式进行校验，默认 dryRun 不传为 false。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| type | String | 是 | "STRUCT" | 表达式类型<br />- STRUCT  结构化，默认值<br />- STRING  自定义公式|'."\n"
                .'| meta | Array 或 String | 是 |  | 表达式信息 |'."\n"
                .'| description | String | 否 | "my_test" | 描述 |'."\n"
                .'| active | Boolean | 否 | true | 是否是默认表达式 |'."\n"
                ."\n"
                .'参考：[FirstRank](~~170007~~)',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSecondRanks' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/second-ranks',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '精排表达式信息'."\n"
                                    ."\n"
                                    .'参考：[SecondRank](~~170008~~)',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'active' => [
                                            'description' => '是否是默认表达式',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'isDefault' => [
                                            'description' => '是否是默认表达式（返回时展示，不作传参）'."\n"
                                                ."\n"
                                                .'- true 是'."\n"
                                                .'- false 否',
                                            'type' => 'string',
                                            'example' => 'false',
                                        ],
                                        'isSys' => [
                                            'description' => '是否是系统表达式（返回时展示，不作传参）'."\n"
                                                ."\n"
                                                .'- true 是'."\n"
                                                .'- false 否',
                                            'type' => 'string',
                                            'example' => 'true',
                                        ],
                                        'description' => [
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'updated' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1587052801',
                                        ],
                                        'name' => [
                                            'description' => '名称',
                                            'type' => 'string',
                                            'example' => 'tests',
                                        ],
                                        'meta' => [
                                            'description' => '精排表达式'."\n"
                                                .'可以编写包含字段、算分特征和数学函数的表达式，实现复杂的排序逻辑',
                                            'type' => 'string',
                                            'example' => 'random()+now()',
                                        ],
                                        'id' => [
                                            'description' => 'ID（返回时展示，不作传参）',
                                            'type' => 'string',
                                            'example' => '890473',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 0,\\n      \\"active\\": false,\\n      \\"isDefault\\": \\"false\\",\\n      \\"isSys\\": \\"true\\",\\n      \\"description\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"updated\\": 1587052801,\\n      \\"name\\": \\"tests\\",\\n      \\"meta\\": \\"random()+now()\\",\\n      \\"id\\": \\"890473\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>default</name>\\n    <meta/>\\n    <active>false</active>\\n    <description/>\\n    <id>890473</id>\\n    <created>0</created>\\n    <updated>0</updated>\\n    <isDefault>false</isDefault>\\n    <isSys>true</isSys>\\n</result>\\n<result>\\n    <name>tests</name>\\n    <meta>random()+now()</meta>\\n    <active>true</active>\\n    <description/>\\n    <id>890474</id>\\n    <created>1587052801</created>\\n    <updated>1587052801</updated>\\n    <isDefault>true</isDefault>\\n    <isSys>false</isSys>\\n</result>\\n<result>\\n    <name>test</name>\\n    <meta>query_term_count()</meta>\\n    <active>false</active>\\n    <description/>\\n    <id>890475</id>\\n    <created>1587052801</created>\\n    <updated>1587052801</updated>\\n    <isDefault>false</isDefault>\\n    <isSys>false</isSys>\\n</result>\\n<totalCount>3</totalCount>","errorExample":""}]',
            'title' => '获取某版本的精排排配置列表',
            'summary' => '获取指定 OpenSearch 应用版本的精排排配置列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSecondRank' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/second-ranks',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为空运行请求',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体，参考：[SecondRank](~~170008~~)',
                        'required' => false,
                        '$ref' => '#/components/schemas/SecondRank',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '精排表达式信息',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"RequestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5E2F73C-8241-81F8-3A62-65478C5A3111</requestId>\\n<result>\\n    <id>89047</id>\\n    <name>test_1</name>\\n    <meta>text_relevance(title)</meta>\\n    <active>true</active>\\n    <description>123</description>\\n    <created>1593679894</created>\\n    <updated>1593679894</updated>\\n    <isDefault>true</isDefault>\\n    <isSys>false</isSys>\\n</result>","errorExample":""}]',
            'title' => '创建一个应用版本的精排配置',
            'summary' => '当 dryRun=true 时，表示进行精排表达式校验，默认 dryRun 不传为 false。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| name | String | 否 | "test" | 表达式名称 |'."\n"
                .'| meta | String | 否 | "random()" | 表达式信息 |'."\n"
                .'| description | String | 否 | "my_test" | 描述 |'."\n"
                .'| active | Boolean | 否 | true | 是否是默认表达式 |'."\n"
                ."\n"
                .'参考：[SecondRank](~~170008~~)<br />',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSecondRank' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/second-ranks/{name}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '精排表达式名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '精排表达式信息',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1587052801',
                                    ],
                                    'active' => [
                                        'description' => '是否是默认表达式',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'isDefault' => [
                                        'description' => '是否是默认表达式（返回时展示，不作传参）'."\n"
                                            .'- true 是'."\n"
                                            .'- false 否',
                                        'type' => 'string',
                                        'example' => 'true',
                                    ],
                                    'isSys' => [
                                        'description' => '是否是系统表达式（返回时展示，不作传参）'."\n"
                                            .'- true 是'."\n"
                                            .'- false 否',
                                        'type' => 'string',
                                        'example' => 'false',
                                    ],
                                    'description' => [
                                        'description' => '描述',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1587052801',
                                    ],
                                    'name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'tests',
                                    ],
                                    'meta' => [
                                        'description' => '精排表达式'."\n"
                                            .'可以编写包含字段、算分特征和数学函数的表达式，实现复杂的排序逻辑',
                                        'type' => 'string',
                                        'example' => 'random()+now()',
                                    ],
                                    'id' => [
                                        'description' => 'ID（返回时展示，不作传参）',
                                        'type' => 'string',
                                        'example' => '89047',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"created\\": 1587052801,\\n    \\"active\\": true,\\n    \\"isDefault\\": \\"true\\",\\n    \\"isSys\\": \\"false\\",\\n    \\"description\\": \\"-\\",\\n    \\"updated\\": 1587052801,\\n    \\"name\\": \\"tests\\",\\n    \\"meta\\": \\"random()+now()\\",\\n    \\"id\\": \\"89047\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <id>89047</id>\\n    <name>tests</name>\\n    <meta>random()+now()</meta>\\n    <active>true</active>\\n    <description/>\\n    <created>1587052801</created>\\n    <updated>1587052801</updated>\\n    <isDefault>true</isDefault>\\n    <isSys>false</isSys>\\n</result>","errorExample":""}]',
            'title' => '查看一个应用版本的精排表达式配置',
            'summary' => '查看一个 OpenSearch 应用版本的精排表达式配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifySecondRank' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/second-ranks/{name}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '精排表达式名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为空运行请求',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'required' => false,
                        '$ref' => '#/components/schemas/SecondRank',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'C5E2F73C-8241-81F8-3A62-65478C5A3111',
                            ],
                            'result' => [
                                'description' => '精排表达式信息',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'active' => [
                                        'description' => '是否是默认表达式',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'isDefault' => [
                                        'description' => '是否是默认表达式（返回时展示，不作传参）'."\n"
                                            .'- true 是'."\n"
                                            .'- false 否',
                                        'type' => 'string',
                                        'example' => 'true',
                                    ],
                                    'isSys' => [
                                        'description' => '是否是系统表达式（返回时展示，不作传参）'."\n"
                                            .'- true 是'."\n"
                                            .'- false 否',
                                        'type' => 'string',
                                        'example' => 'false',
                                    ],
                                    'description' => [
                                        'description' => '描述',
                                        'type' => 'string',
                                        'example' => '"11"',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'lsh_second_1',
                                    ],
                                    'meta' => [
                                        'description' => '精排表达式'."\n"
                                            .'可以编写包含字段、算分特征和数学函数的表达式，实现复杂的排序逻辑',
                                        'type' => 'string',
                                        'example' => 'cate_id > 0 and cate_id < 1000',
                                    ],
                                    'id' => [
                                        'description' => 'ID（返回时展示，不作传参）',
                                        'type' => 'string',
                                        'example' => '890473',
                                    ],
                                ],
                                'example' => '{}',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"C5E2F73C-8241-81F8-3A62-65478C5A3111\\",\\n  \\"result\\": {\\n    \\"created\\": 1,\\n    \\"active\\": true,\\n    \\"isDefault\\": \\"true\\",\\n    \\"isSys\\": \\"false\\",\\n    \\"description\\": \\"\\\\\\"11\\\\\\"\\",\\n    \\"updated\\": 1,\\n    \\"name\\": \\"lsh_second_1\\",\\n    \\"meta\\": \\"cate_id > 0 and cate_id < 1000\\",\\n    \\"id\\": \\"890473\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5E2F73C-8241-81F8-3A62-65478C5A3111</requestId>\\n<result>\\n    <id>890473</id>\\n    <name>name_relevance</name>\\n    <meta>text_relevance(name)</meta>\\n    <active>true</active>\\n    <description>123</description>\\n    <created>1593679894</created>\\n    <updated>1593679894</updated>\\n    <isDefault>true</isDefault>\\n    <isSys>false</isSys>\\n</result>","errorExample":""}]',
            'title' => '修改一个应用版本的精排配置',
            'summary' => '修改一个OpenSearch 应用版本的精排配置。当 dryRun=true 时，表示修改后的精排表达式进行校验，默认 dryRun 不传为 false。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| meta | String | 否 | "text_relevance(name)" | 表达式配置 |'."\n"
                .'| description | String | 否 | "my_test" | 描述 |'."\n"
                .'| active | Boolean | 否 | true | 是否是默认表达式 |'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RemoveSecondRank' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/second-ranks/{name}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '精排表达式名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“tests”',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '—',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>","errorExample":""}]',
            'title' => '删除精排规则',
            'summary' => '删除一个 OpenSearch 应用版本的精排表达式配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListQueryProcessors' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'isActive',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否已设置为默认规则，默认值为0'."\n"
                            ."\n"
                            .'- 0 表示查询所有'."\n"
                            .'- 1 表示查询已设置为默认的规则'."\n"
                            .'- 2 表示查询未设置为默认的规则',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '规则信息'."\n"
                                    ."\n"
                                    .'参考：[QueryProcessor](~~170014~~)',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1587398402',
                                        ],
                                        'active' => [
                                            'description' => '是否默认规则',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'updated' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1587398402',
                                        ],
                                        'name' => [
                                            'description' => '规则名称',
                                            'type' => 'string',
                                            'example' => 'ner',
                                        ],
                                        'domain' => [
                                            'description' => '行业类型'."\n"
                                                ."\n"
                                                .'- GENERAL 通用'."\n"
                                                .'- ECOMMERCE 电商'."\n"
                                                .'- IT_CONTENT IT内容',
                                            'type' => 'string',
                                            'example' => 'GENERAL',
                                        ],
                                        'indexes' => [
                                            'description' => '应用的索引范围',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '应用的索引范围',
                                                'type' => 'string',
                                                'example' => '[                 "default"             ]',
                                            ],
                                        ],
                                        'processors' => [
                                            'description' => '包含功能',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '包含功能'."\n"
                                                    ."\n"
                                                    .'具体说明查看下文：[Processor](~~170014~~)',
                                                'type' => 'object',
                                                'example' => '[]',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1587398402,\\n      \\"active\\": true,\\n      \\"updated\\": 1587398402,\\n      \\"name\\": \\"ner\\",\\n      \\"domain\\": \\"GENERAL\\",\\n      \\"indexes\\": [\\n        \\"[                 \\\\\\"default\\\\\\"             ]\\"\\n      ],\\n      \\"processors\\": [\\n        []\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>test</name>\\n    <active>true</active>\\n    <indexes>default</indexes>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>ner</name>\\n        <interventionDictionary/>\\n        <priorities>\\n            <tag>brand</tag>\\n            <priority>HIGH</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>category</tag>\\n            <priority>HIGH</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>material</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>element</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>style</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>color</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>function</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>scenario</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>people</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>season</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>model</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>region</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>name</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>adjective</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>category-modifier</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>size</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>quality</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>suit</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>new-release</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>series</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>marketing</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>entertainment</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>organization</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>movie</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>game</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>number</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>unit</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>common</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>new-word</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>proper-noun</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>symbol</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>prefix</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>suffix</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>gift</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>negative</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>agent</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n    </processors>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>synonym</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>term_weighting</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>spell_check</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <name>category_prediction</name>\\n        <categoryPrediction>60</categoryPrediction>\\n        <projectId>848</projectId>\\n    </processors>\\n    <domain>GENERAL</domain>\\n    <created>1587398402</created>\\n    <updated>1587398402</updated>\\n</result>","errorExample":""}]',
            'title' => '取某版本的查询分析规则列表',
            'summary' => '获取指定OpenSearch应用版本的查询分析规则列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateQueryProcessor' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为空运行请求',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'any',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '规则信息',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1587398402',
                                    ],
                                    'active' => [
                                        'description' => '是否默认规则',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1587398402',
                                    ],
                                    'name' => [
                                        'description' => '规则名称',
                                        'type' => 'string',
                                        'example' => 'query_filter',
                                    ],
                                    'domain' => [
                                        'description' => '行业类型'."\n"
                                            .'- GENERAL 通用'."\n"
                                            .'- ECOMMERCE 电商'."\n"
                                            .'- IT_CONTENT IT内容',
                                        'type' => 'string',
                                        'example' => 'GENERAL',
                                    ],
                                    'indexes' => [
                                        'description' => '应用的索引范围',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '应用的索引范围',
                                            'type' => 'string',
                                            'example' => '"default"',
                                        ],
                                    ],
                                    'processors' => [
                                        'description' => '包含功能'."\n"
                                            ."\n"
                                            .'具体说明查看下文：[Processor](~~170014~~)',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '包含功能',
                                            'type' => 'object',
                                            'example' => '{}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"created\\": 1587398402,\\n    \\"active\\": true,\\n    \\"updated\\": 1587398402,\\n    \\"name\\": \\"query_filter\\",\\n    \\"domain\\": \\"GENERAL\\",\\n    \\"indexes\\": [\\n      \\"\\\\\\"default\\\\\\"\\"\\n    ],\\n    \\"processors\\": [\\n      {}\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>query_filter</name>\\n    <active>true</active>\\n    <indexes>default</indexes>\\n    <processors>\\n        <name>synonym</name>\\n        <useSystemDictionary>true</useSystemDictionary>\\n    </processors>\\n    <processors>\\n        <name>stop_word</name>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <interventionDictionary>980</interventionDictionary>\\n    </processors>\\n    <domain>GENERAL</domain>\\n    <created>1587398402</created>\\n    <updated>1587398402</updated>\\n</result>","errorExample":""}]',
            'title' => '创建查询分析规则',
            'summary' => '创建一个查询分析规则。当 dryRun=true 时，表示进行查询分析规则校验，默认 dryRun 不传为 false。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- | '."\n"
                .'| name | String | 是 | "test" | 规则名称 |'."\n"
                .'| processors[] | Object | 是 | -- | 分析规则<br />参考：[Processor](~~170014~~) |'."\n"
                .'| domain | String | 否 | "GENERAL" | 行业类型<br />- GENERAL 通用行业<br />- ECOMMERCE 电商<br />-  IT_CONTENT IT行业  |'."\n"
                .'| indexes | Array | 否 | ["default"] | 应用的索引范围 |'."\n"
                .'| active | Boolean | 否 | true | 是否设置为有效 |'."\n"
                ."\n"
                .'参考：[QueryProcessor](~~170014~~)<br />'."\n"
                .' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyQueryProcessor' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors/{name}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为空运行请求',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '规则名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“test”',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'any',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '规则信息',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'active' => [
                                        'description' => '是否默认规则',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'name' => [
                                        'description' => '规则名称',
                                        'type' => 'string',
                                        'example' => 'synonym',
                                    ],
                                    'domain' => [
                                        'description' => '行业类型'."\n"
                                            .'- GENERAL 通用'."\n"
                                            .'- ECOMMERCE 电商'."\n"
                                            .'- IT_CONTENT IT内容',
                                        'type' => 'string',
                                        'example' => 'GENERAL',
                                    ],
                                    'indexes' => [
                                        'description' => '应用的索引范围',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '应用的索引范围',
                                            'type' => 'string',
                                            'example' => '[ "default" ]',
                                        ],
                                        'example' => '["default"]',
                                    ],
                                    'processors' => [
                                        'description' => '分析规则',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '响应体',
                                            'type' => 'object',
                                            'example' => '[ "default" ]',
                                        ],
                                        'example' => '[]',
                                    ],
                                ],
                                'example' => '{}',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 0,\\n    \\"active\\": true,\\n    \\"updated\\": 1,\\n    \\"name\\": \\"synonym\\",\\n    \\"domain\\": \\"GENERAL\\",\\n    \\"indexes\\": [\\n      \\"[ \\\\\\"default\\\\\\" ]\\"\\n    ],\\n    \\"processors\\": [\\n      [\\n        \\"default\\"\\n      ]\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>query_filter</name>\\n    <active>true</active>\\n    <indexes>default</indexes>\\n    <processors>\\n        <name>synonym</name>\\n        <useSystemDictionary>true</useSystemDictionary>\\n    </processors>\\n    <processors>\\n        <name>stop_word</name>\\n        <useSystemDictionary>true</useSystemDictionary>\\n    </processors>\\n    <domain>GENERAL</domain>\\n    <created>1587398402</created>\\n    <updated>1587398402</updated>\\n</result>","errorExample":""}]',
            'title' => '修改指定应用版本查询分析规则',
            'summary' => '修改指定应用版本查询分析规则。当 dryRun=true 时，表示进行查询分析规则校验，默认 dryRun 不传为 false。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| domain | String | 否 | "GENERAL" | 行业类型<br />- GENERAL 通用行业<br />- ECOMMERCE 电商<br />- IT_CONTENT IT行业<br /> |'."\n"
                .'| indexes | Array | 否 | ["default"] | 应用的索引范围 |'."\n"
                .'| processors[] | Object | 否 |  | 分析规则<br />参考：[Processor](~~170014~~)'."\n"
                .'| active | Boolean | 否 | true | 是否设置为有效 |'."\n"
                ."\n"
                .'参考：[QueryProcessor](~~170014~~)<br />',
            'responseParamsDescription' => '**返回参数**'."\n"
                .'| 字段 | 类型 | 描述 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| requestId | String | 请求ID |'."\n"
                .'| result | Object | 规则信息<br />参考：[QueryProcessor](~~170014~~) |',
            'extraInfo' => "\n",
        ],
        'RemoveQueryProcessor' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors/{name}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '规则名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“test”',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '—',
                                'type' => 'string',
                                'example' => '[]',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": \\"[]\\",\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>","errorExample":""}]',
            'title' => '删除指定应用版本的查询分析规则',
            'summary' => '删除指定 OpenSearch 应用版本的查询分析规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeQueryProcessor' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors/{name}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '规则名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '规则信息',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1587398402',
                                    ],
                                    'active' => [
                                        'description' => '是否默认规则',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1587398402',
                                    ],
                                    'name' => [
                                        'description' => '规则名称',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'domain' => [
                                        'description' => '行业类型'."\n"
                                            .'- GENERAL 通用'."\n"
                                            .'- ECOMMERCE 电商'."\n"
                                            .'- IT_CONTENT IT内容',
                                        'type' => 'string',
                                        'example' => 'GENERAL',
                                    ],
                                    'indexes' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '应用的索引范围',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                    ],
                                    'processors' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '包含功能',
                                            'type' => 'object',
                                            'example' => '{}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"created\\": 1587398402,\\n    \\"active\\": true,\\n    \\"updated\\": 1587398402,\\n    \\"name\\": \\"test\\",\\n    \\"domain\\": \\"GENERAL\\",\\n    \\"indexes\\": [\\n      \\"default\\"\\n    ],\\n    \\"processors\\": [\\n      \\"{}\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>test</name>\\n    <active>true</active>\\n    <indexes>default</indexes>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>ner</name>\\n        <interventionDictionary/>\\n        <priorities>\\n            <tag>brand</tag>\\n            <priority>HIGH</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>category</tag>\\n            <priority>HIGH</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>material</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>element</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>style</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>color</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>function</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>scenario</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>people</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>season</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>model</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>region</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>name</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>adjective</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>category-modifier</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>size</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>quality</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>suit</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>new-release</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>series</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>marketing</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>entertainment</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>organization</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>movie</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>game</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>number</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>unit</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>common</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>new-word</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>proper-noun</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>symbol</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>prefix</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>suffix</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>gift</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>negative</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>agent</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n    </processors>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>synonym</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <use_system_dictionary>true</use_system_dictionary>\\n        <name>term_weighting</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <use_system_dictionary>true</use_system_dictionary>\\n        <name>spell_check</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <name>category_prediction</name>\\n        <categoryPrediction>60</categoryPrediction>\\n        <projectId>848</projectId>\\n    </processors>\\n    <domain>GENERAL</domain>\\n    <created>1587398402</created>\\n    <updated>1587398402</updated>\\n</result>","errorExample":""}]',
            'title' => '获取指定应用版本的查询分析规则列表',
            'summary' => '获取指定 OpenSearch 应用版本的查询分析规则列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListQueryProcessorNers' => [
            'path' => '/v4/openapi/query-processor/ner/default-priorities',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业类型'."\n"
                            ."\n"
                            .'- ECOMMERCE 电商行业',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ECOMMERCE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '实体类型重要性设置'."\n"
                                    ."\n"
                                    .'参考：[实体类型重要性设置](~~173616~~)',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'tag' => [
                                            'description' => '实体类型的内部英文表示',
                                            'type' => 'string',
                                            'example' => 'brand',
                                        ],
                                        'order' => [
                                            'description' => '在同一个priority下的排序顺序'."\n"
                                                .'优先顺序按照数字从小到大，默认为0',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'priority' => [
                                            'description' => '重要性'."\n"
                                                ."\n"
                                                .'- HIGH'."\n"
                                                .'- MIDDLE'."\n"
                                                .'- LOW',
                                            'type' => 'string',
                                            'example' => 'HIGH',
                                        ],
                                        'label' => [
                                            'description' => '实体类型名称',
                                            'type' => 'string',
                                            'example' => '品牌',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"tag\\": \\"brand\\",\\n      \\"order\\": 1,\\n      \\"priority\\": \\"HIGH\\",\\n      \\"label\\": \\"品牌\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <tag>brand</tag>\\n    <priority>HIGH</priority>\\n    <order>1</order>\\n    <label>品牌</label>\\n</result>\\n<result>\\n    <tag>category</tag>\\n    <priority>HIGH</priority>\\n    <order>2</order>\\n    <label>品类</label>\\n</result>\\n<result>\\n    <tag>material</tag>\\n    <priority>MIDDLE</priority>\\n    <order>3</order>\\n    <label>材质</label>\\n</result>\\n<result>\\n    <tag>element</tag>\\n    <priority>MIDDLE</priority>\\n    <order>4</order>\\n    <label>款式元素</label>\\n</result>\\n<result>\\n    <tag>style</tag>\\n    <priority>MIDDLE</priority>\\n    <order>5</order>\\n    <label>风格</label>\\n</result>\\n<result>\\n    <tag>color</tag>\\n    <priority>MIDDLE</priority>\\n    <order>6</order>\\n    <label>颜色</label>\\n</result>\\n<result>\\n    <tag>function</tag>\\n    <priority>MIDDLE</priority>\\n    <order>7</order>\\n    <label>功能功效</label>\\n</result>\\n<result>\\n    <tag>scenario</tag>\\n    <priority>MIDDLE</priority>\\n    <order>8</order>\\n    <label>场景</label>\\n</result>\\n<result>\\n    <tag>people</tag>\\n    <priority>MIDDLE</priority>\\n    <order>9</order>\\n    <label>人群</label>\\n</result>\\n<result>\\n    <tag>season</tag>\\n    <priority>MIDDLE</priority>\\n    <order>10</order>\\n    <label>时间季节</label>\\n</result>\\n<result>\\n    <tag>model</tag>\\n    <priority>MIDDLE</priority>\\n    <order>11</order>\\n    <label>型号</label>\\n</result>\\n<result>\\n    <tag>region</tag>\\n    <priority>MIDDLE</priority>\\n    <order>12</order>\\n    <label>地点地域</label>\\n</result>\\n<result>\\n    <tag>name</tag>\\n    <priority>MIDDLE</priority>\\n    <order>13</order>\\n    <label>人名</label>\\n</result>\\n<result>\\n    <tag>adjective</tag>\\n    <priority>MIDDLE</priority>\\n    <order>14</order>\\n    <label>修饰</label>\\n</result>\\n<result>\\n    <tag>category-modifier</tag>\\n    <priority>MIDDLE</priority>\\n    <order>15</order>\\n    <label>品类修饰词</label>\\n</result>\\n<result>\\n    <tag>size</tag>\\n    <priority>LOW</priority>\\n    <order>16</order>\\n    <label>尺寸规格</label>\\n</result>\\n<result>\\n    <tag>quality</tag>\\n    <priority>LOW</priority>\\n    <order>17</order>\\n    <label>品质成色</label>\\n</result>\\n<result>\\n    <tag>suit</tag>\\n    <priority>LOW</priority>\\n    <order>18</order>\\n    <label>套装</label>\\n</result>\\n<result>\\n    <tag>new-release</tag>\\n    <priority>LOW</priority>\\n    <order>19</order>\\n    <label>新品</label>\\n</result>\\n<result>\\n    <tag>series</tag>\\n    <priority>LOW</priority>\\n    <order>20</order>\\n    <label>系列</label>\\n</result>\\n<result>\\n    <tag>marketing</tag>\\n    <priority>LOW</priority>\\n    <order>21</order>\\n    <label>营销服务</label>\\n</result>\\n<result>\\n    <tag>entertainment</tag>\\n    <priority>LOW</priority>\\n    <order>22</order>\\n    <label>文娱书文曲</label>\\n</result>\\n<result>\\n    <tag>organization</tag>\\n    <priority>LOW</priority>\\n    <order>23</order>\\n    <label>机构实体</label>\\n</result>\\n<result>\\n    <tag>movie</tag>\\n    <priority>LOW</priority>\\n    <order>24</order>\\n    <label>影视名称</label>\\n</result>\\n<result>\\n    <tag>game</tag>\\n    <priority>LOW</priority>\\n    <order>25</order>\\n    <label>游戏名称</label>\\n</result>\\n<result>\\n    <tag>number</tag>\\n    <priority>LOW</priority>\\n    <order>26</order>\\n    <label>数字</label>\\n</result>\\n<result>\\n    <tag>unit</tag>\\n    <priority>LOW</priority>\\n    <order>27</order>\\n    <label>单位</label>\\n</result>\\n<result>\\n    <tag>common</tag>\\n    <priority>LOW</priority>\\n    <order>28</order>\\n    <label>普通词</label>\\n</result>\\n<result>\\n    <tag>new-word</tag>\\n    <priority>LOW</priority>\\n    <order>29</order>\\n    <label>新词</label>\\n</result>\\n<result>\\n    <tag>proper-noun</tag>\\n    <priority>LOW</priority>\\n    <order>30</order>\\n    <label>专有名词</label>\\n</result>\\n<result>\\n    <tag>symbol</tag>\\n    <priority>LOW</priority>\\n    <order>31</order>\\n    <label>符号</label>\\n</result>\\n<result>\\n    <tag>prefix</tag>\\n    <priority>LOW</priority>\\n    <order>32</order>\\n    <label>前缀</label>\\n</result>\\n<result>\\n    <tag>suffix</tag>\\n    <priority>LOW</priority>\\n    <order>33</order>\\n    <label>后缀</label>\\n</result>\\n<result>\\n    <tag>gift</tag>\\n    <priority>LOW</priority>\\n    <order>34</order>\\n    <label>赠送</label>\\n</result>\\n<result>\\n    <tag>negative</tag>\\n    <priority>LOW</priority>\\n    <order>35</order>\\n    <label>否定</label>\\n</result>\\n<result>\\n    <tag>agent</tag>\\n    <priority>LOW</priority>\\n    <order>36</order>\\n    <label>代理</label>\\n</result>","errorExample":""}]',
            'title' => '获取推荐的实体类型重要性设置',
            'summary' => '实体识别：获取推荐的实体类型重要性设置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListQueryProcessorAnalyzerResults' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors/{name}/analyze',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"110157886"',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '规则名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"test"',
                    ],
                ],
                [
                    'name' => 'text',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待测试内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"abcde"',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '98724351-D6B2-5D8A-B089-7FFD1821A7E9',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {},\\n  \\"RequestId\\": \\"98724351-D6B2-5D8A-B089-7FFD1821A7E9\\"\\n}","type":"json"}]',
            'title' => '查询分析效果测试',
            'summary' => '查询分析效果测试。（仅限开源兼容版存量应用调用）',
        ],
        'ListInterventionDictionaries' => [
            'path' => '/v4/openapi/intervention-dictionaries',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回数目，默认 pageSize=10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认 pageNumber=1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'types',
                    'in' => 'query',
                    'schema' => [
                        'description' => '干预词典类型集合'."\n"
                            .'格式：urlencode([“synonym”, “stopword”])'."\n"
                            ."\n"
                            .'- stopword 停用词'."\n"
                            .'- synonym 同义词'."\n"
                            .'- correction 拼写纠错'."\n"
                            .'- category_prediction 类目预测'."\n"
                            .'- ner 实体识别'."\n"
                            .'- term_weighting 词权重',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["synonym"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '干预词典详情'."\n"
                                    ."\n"
                                    .'参考：[InterventionDictionary](~~173608~~)',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1539158325',
                                        ],
                                        'type' => [
                                            'description' => '类型'."\n"
                                                ."\n"
                                                .'- stopword 停用词'."\n"
                                                .'- synonym 同义词'."\n"
                                                .'- correction 拼写纠错'."\n"
                                                .'- category_prediction 类目预测'."\n"
                                                .'- ner 实体识别'."\n"
                                                .'- term_weighting 词权重',
                                            'type' => 'string',
                                            'example' => 'synonym',
                                        ],
                                        'analyzer' => [
                                            'description' => '自定义分词',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'name' => [
                                            'description' => '名称',
                                            'type' => 'string',
                                            'example' => 'tongyici',
                                        ],
                                        'updated' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1539158313',
                                        ],
                                        'id' => [
                                            'description' => '词典ID',
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
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 2,\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1539158325,\\n      \\"type\\": \\"synonym\\",\\n      \\"analyzer\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"name\\": \\"tongyici\\",\\n      \\"updated\\": 1539158313,\\n      \\"id\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<totalCount>2</totalCount>\\n<result>\\n    <id>1</id>\\n    <name>tongyici</name>\\n    <type>synonym</type>\\n    <analyzer/>\\n    <created>1539158313</created>\\n    <updated>1539158313</updated>\\n</result>\\n<result>\\n    <id>2</id>\\n    <name>tingyongci</name>\\n    <type>stopword</type>\\n    <analyzer/>\\n    <created>1539158325</created>\\n    <updated>1539158325</updated>\\n</result>","errorExample":""}]',
            'title' => '获取用户的干预词典列表',
            'summary' => '获取用户的干预词典列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateInterventionDictionary' => [
            'path' => '/v4/openapi/intervention-dictionaries',
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
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'description' => '干预词典名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ner_dict_ec',
                            ],
                            'type' => [
                                'description' => '类型'."\n"
                                    .'- stopword 停用词'."\n"
                                    .'- synonym 同义词'."\n"
                                    .'- correction 拼写纠错'."\n"
                                    .'- category_prediction 类目预测'."\n"
                                    .'- ner 实体识别'."\n"
                                    .'- term_weighting 词权重'."\n"
                                    .'- suggest_allowlist 下拉提示白名单'."\n"
                                    .'- suggest_denylist 下拉提示黑名单'."\n"
                                    .'- hot_allowlist  热搜白名单'."\n"
                                    .'- hot_denylist  热搜黑名单'."\n"
                                    .'- hint_allowlist  底纹白名单'."\n"
                                    .'- hint_denylist  底纹黑名单',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ner',
                            ],
                            'analyzerType' => [
                                'description' => '词典类型，支持：'."\n"
                                    ."\n"
                                    .'- MODEL：模型定制分析器。'."\n"
                                    ."\n"
                                    .'- SYSTEM：系统分析器。'."\n"
                                    ."\n"
                                    .'- USER：自定义分析器。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'SYSTEM',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '80326EFE-485F-46E7-B291-5A1DD08D2198',
                            ],
                            'result' => [
                                'description' => '干预词典详情',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '1591086323',
                                    ],
                                    'analyzer' => [
                                        'description' => '自定义分词',
                                        'type' => 'string',
                                        'example' => 'dianshang',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间',
                                        'type' => 'string',
                                        'example' => '1591086323',
                                    ],
                                    'type' => [
                                        'description' => '类型'."\n"
                                            .'- stopword 停用词'."\n"
                                            .'- synonym 同义词'."\n"
                                            .'- correction 拼写纠错'."\n"
                                            .'- category_prediction 类目预测'."\n"
                                            .'- ner 实体识别'."\n"
                                            .'- term_weighting 词权重'."\n"
                                            .'- suggest_allowlist 下拉提示白名单'."\n"
                                            .'- suggest_denylist 下拉提示黑名单'."\n"
                                            .'- hot_allowlist  热搜白名单'."\n"
                                            .'- hot_denylist  热搜黑名单'."\n"
                                            .'- hint_allowlist  底纹白名单'."\n"
                                            .'- hint_denylist  底纹黑名单',
                                        'type' => 'string',
                                        'example' => 'ner',
                                    ],
                                    'name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'testb',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"80326EFE-485F-46E7-B291-5A1DD08D2198\\",\\n  \\"result\\": {\\n    \\"created\\": \\"1591086323\\",\\n    \\"analyzer\\": \\"dianshang\\",\\n    \\"updated\\": \\"1591086323\\",\\n    \\"type\\": \\"ner\\",\\n    \\"name\\": \\"testb\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>80326EFE-485F-46E7-B291-5A1DD08D2198</requestId>\\n<result>\\n    <analyzer>dianshang</analyzer>\\n    <created>1591086323</created>\\n    <id>1001</id>\\n    <name>testb</name>\\n    <type>ner</type>\\n    <updated>1591086323</updated>\\n</result>","errorExample":""}]',
            'title' => '创建干预词典',
            'summary' => '创建干预词典。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| name | String | 是 | "my_dict" | 干预词典名称 |'."\n"
                .'| type | String | 是 | "ner" | 干预词典类型 |'."\n"
                .'| analyzer | String | 否 | "my_analyzer" | 自定义分词<br />当type=ner时，此项必填 |'."\n"
                .'| analyzerType| String | 否 | "SYSTEM" | 分析器类型<br /> |'."\n"
                ."\n"
                .'参考：[InterventionDictionary](~~173608~~)<br />',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeInterventionDictionary' => [
            'path' => '/v4/openapi/intervention-dictionaries/{name}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '干预词典名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_dict',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D7CCF454-472A-030E-F254-604520B028AA',
                            ],
                            'result' => [
                                'description' => '干预词典详情',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '1536233287',
                                    ],
                                    'analyzer' => [
                                        'description' => '自定义分词',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间',
                                        'type' => 'string',
                                        'example' => '1536233287',
                                    ],
                                    'type' => [
                                        'description' => '类型'."\n"
                                            .'- stopword 停用词'."\n"
                                            .'- synonym 同义词'."\n"
                                            .'- correction 拼写纠错'."\n"
                                            .'- category_prediction 类目预测'."\n"
                                            .'- ner 实体识别'."\n"
                                            .'- term_weighting 词权重',
                                        'type' => 'string',
                                        'example' => 'category_prediction',
                                    ],
                                    'name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D7CCF454-472A-030E-F254-604520B028AA\\",\\n  \\"result\\": {\\n    \\"created\\": \\"1536233287\\",\\n    \\"analyzer\\": \\"-\\",\\n    \\"updated\\": \\"1536233287\\",\\n    \\"type\\": \\"category_prediction\\",\\n    \\"name\\": \\"test\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D7CCF454-472A-030E-F254-604520B028AA</requestId>\\n<result>\\n    <name>test</name>\\n    <type>category_prediction</type>\\n    <analyzer/>\\n    <created>1536233287</created>\\n    <updated>1536233287</updated>\\n</result>","errorExample":""}]',
            'title' => '获取干预词典详情',
            'summary' => '获取干预词典详情。',
        ],
        'RemoveInterventionDictionary' => [
            'path' => '/v4/openapi/intervention-dictionaries/{name}',
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
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '干预词典名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '“my_dict”',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '06BBD41A-5F72-34E4-2DAF-E43B0526051D',
                            ],
                            'result' => [
                                'description' => '干预词典详情',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '1539158313',
                                    ],
                                    'analyzer' => [
                                        'description' => '自定义分词',
                                        'type' => 'string',
                                        'example' => '""',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间',
                                        'type' => 'string',
                                        'example' => '1539158313',
                                    ],
                                    'type' => [
                                        'description' => '类型'."\n"
                                            .'- stopword 停用词'."\n"
                                            .'- synonym 同义词'."\n"
                                            .'- correction 拼写纠错'."\n"
                                            .'- category_prediction 类目预测'."\n"
                                            .'- ner 实体识别'."\n"
                                            .'- term_weighting 词权重',
                                        'type' => 'string',
                                        'example' => 'synonym',
                                    ],
                                    'name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'tongyici',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"06BBD41A-5F72-34E4-2DAF-E43B0526051D\\",\\n  \\"result\\": {\\n    \\"created\\": \\"1539158313\\",\\n    \\"analyzer\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"updated\\": \\"1539158313\\",\\n    \\"type\\": \\"synonym\\",\\n    \\"name\\": \\"tongyici\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>06BBD41A-5F72-34E4-2DAF-E43B0526051D</requestId>\\n<result>\\n    <id>123</id>\\n    <name>testb</name>\\n    <type>ner</type>\\n    <analyzer>abc</analyzer>\\n    <created>1587957529</created>\\n    <updated>1587957529</updated>\\n</result>","errorExample":""}]',
            'title' => '删除干预词典',
            'summary' => '删除干预词典。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
        ],
        'ListInterventionDictionaryEntries' => [
            'path' => '/v4/openapi/intervention-dictionaries/{name}/entries',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '干预词典名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_dict',
                    ],
                ],
                [
                    'name' => 'word',
                    'in' => 'query',
                    'schema' => [
                        'description' => '词条',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认 pageNumber=1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回数目，默认 pageSize=10',
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
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '8',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '516A02B7-2167-8D92-12D0-B639A2A0F3C5',
                            ],
                            'result' => [
                                'description' => '干预词条详情'."\n"
                                    ."\n"
                                    .'参考：[InterventionDictionaryEntry](~~173606~~)',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'cmd' => [
                                            'description' => '操作命令'."\n"
                                                ."\n"
                                                .'- add 新增'."\n"
                                                .'- delete 删除',
                                            'type' => 'string',
                                            'example' => 'add',
                                        ],
                                        'created' => [
                                            'description' => '创建时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1536690285',
                                        ],
                                        'word' => [
                                            'description' => '词条',
                                            'type' => 'string',
                                            'example' => '\\u8fc7\\u513f',
                                        ],
                                        'relevance' => [
                                            'description' => '干预内容'."\n"
                                                .'键为类目预测ID，值为相关度（0：不相关；1：略相关；2：相关）'."\n"
                                                .'例：{“2”:1,”100”:0}',
                                            'type' => 'object',
                                            'example' => ' {                 "100": "0",                 "200": "2"             }',
                                        ],
                                        'status' => [
                                            'description' => '状态'."\n"
                                                ."\n"
                                                .'- ACTIVE 已生效',
                                            'type' => 'string',
                                            'example' => 'ACTIVE',
                                        ],
                                        'updated' => [
                                            'description' => '更新时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1537348987',
                                        ],
                                        'tokens' => [
                                            'description' => '词权重内容',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'tag' => [
                                                        'description' => '识别结果的英文名'."\n"
                                                            ."\n"
                                                            .'- brand 品牌'."\n"
                                                            .'- category 品类'."\n"
                                                            .'- material 材质'."\n"
                                                            .'- element 款式元素'."\n"
                                                            .'- style 风格'."\n"
                                                            .'- color 颜色'."\n"
                                                            .'- function 功能功效'."\n"
                                                            .'- scenario 场景'."\n"
                                                            .'- people 人群'."\n"
                                                            .'- season 时间季节'."\n"
                                                            .'- model 型号'."\n"
                                                            .'- region 地点地域'."\n"
                                                            .'- name 人名'."\n"
                                                            .'- adjective 修饰'."\n"
                                                            .'- category-modifier 品类修饰词'."\n"
                                                            .'- size 尺寸规格'."\n"
                                                            .'- quality 品质成色'."\n"
                                                            .'- suit 套装'."\n"
                                                            .'- new-release 新品'."\n"
                                                            .'- series 系列'."\n"
                                                            .'- marketing 营销服务'."\n"
                                                            .'- entertainment 文娱书文曲'."\n"
                                                            .'- organization 机构实体'."\n"
                                                            .'- movie 影视名称'."\n"
                                                            .'- game 游戏名称'."\n"
                                                            .'- number 数字'."\n"
                                                            .'- unit 单位'."\n"
                                                            .'- common 普通词'."\n"
                                                            .'- new-word 新词'."\n"
                                                            .'- proper-noun 专有名词'."\n"
                                                            .'- symbol 符号'."\n"
                                                            .'- prefix 前缀'."\n"
                                                            .'- suffix 后缀'."\n"
                                                            .'- gift 赠送'."\n"
                                                            .'- negative 否定'."\n"
                                                            .'- agent 代理',
                                                        'type' => 'string',
                                                        'example' => 'category',
                                                    ],
                                                    'token' => [
                                                        'description' => '实体词',
                                                        'type' => 'string',
                                                        'example' => '本',
                                                    ],
                                                    'order' => [
                                                        'description' => '序号',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'tagLabel' => [
                                                        'description' => '识别结果的中文名，同上',
                                                        'type' => 'string',
                                                        'example' => '品类',
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
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 8,\\n  \\"requestId\\": \\"516A02B7-2167-8D92-12D0-B639A2A0F3C5\\",\\n  \\"result\\": [\\n    {\\n      \\"cmd\\": \\"add\\",\\n      \\"created\\": 1536690285,\\n      \\"word\\": \\"\\\\\\\\u8fc7\\\\\\\\u513f\\",\\n      \\"relevance\\": {\\n        \\"100\\": \\"0\\",\\n        \\"200\\": \\"2\\"\\n      },\\n      \\"status\\": \\"ACTIVE\\",\\n      \\"updated\\": 1537348987,\\n      \\"tokens\\": [\\n        {\\n          \\"tag\\": \\"category\\",\\n          \\"token\\": \\"本\\",\\n          \\"order\\": 1,\\n          \\"tagLabel\\": \\"品类\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>516A02B7-2167-8D92-12D0-B639A2A0F3C5</requestId>\\n<result>\\n    <cmd>add</cmd>\\n    <word>过儿</word>\\n    <created>1536690285</created>\\n    <updated>1537348987</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <100>0</100>\\n        <200>2</200>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>过</word>\\n    <created>1536690308</created>\\n    <updated>1537349055</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <200>2</200>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>苹</word>\\n    <created>1536683292</created>\\n    <updated>1537220498</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <12>1</12>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>吧</word>\\n    <created>1536690347</created>\\n    <updated>1537220498</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <100>2</100>\\n        <200>0</200>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>果</word>\\n    <created>1536690184</created>\\n    <updated>1537220498</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <100>2</100>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>裤子</word>\\n    <created>1537353071</created>\\n    <updated>1537353074</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <100>1</100>\\n        <200>2</200>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>adfads</word>\\n    <created>1536690258</created>\\n    <updated>1537220498</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <1>1</1>\\n        <2>1</2>\\n        <3>1</3>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>zvzcxv</word>\\n    <created>1536690537</created>\\n    <updated>1537220498</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <100>1</100>\\n    </relevance>\\n</result>\\n<totalCount>8</totalCount>","errorExample":""}]',
            'title' => '获取干预词条清单',
            'summary' => '获取干预词条清单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PushInterventionDictionaryEntries' => [
            'path' => '/v4/openapi/intervention-dictionaries/{name}/entries/actions/bulk',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '干预词典名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_dict',
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
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体。',
                        'type' => 'array',
                        'items' => [
                            'description' => '请求体',
                            'type' => 'object',
                            'required' => false,
                            'example' => '{'."\n"
                                .'    "cmd": "add",'."\n"
                                .'    "word": "搜索",'."\n"
                                .'    "created": 1536661485,'."\n"
                                .'    "updated": 1537320187,'."\n"
                                .'    "status": "ACTIVE",'."\n"
                                .'    "relevance": {'."\n"
                                .'        "100": "0",'."\n"
                                .'        "200": "2"'."\n"
                                .'    }'."\n"
                                .'}',
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
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'string',
                                    'example' => '[]',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    \\"[]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
            'title' => '接收干预词条变更',
            'summary' => '接收干预词条变更。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'通用参数'."\n"
                ."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| [] | Object | 是 |  | 词条信息 |'."\n"
                .'| [].cmd | String | 是 | "add" | 操作命令<br />- add  新增<br />- delete  删除<br /> |'."\n"
                .'| [].word | String | 是 | "阿里云" | 词条 |'."\n"
                ."\n"
                .'特定参数'."\n"
                .'参考：'."\n"
                ."\n"
                .'- [stopword  停用词](~~173606~~)'."\n"
                .'- [synonym  同义词](~~173606~~)'."\n"
                .'- [correction  拼写纠错](~~173606~~)'."\n"
                .'- [term_weighting  词权重](~~173606~~)'."\n"
                .'- [category_prediction  类目预测](~~173606~~)'."\n"
                .'- [ner  实体识别](~~173606~~)'."\n"
                .'- [suggest_allowlist 下拉提示白名单](~~173606~~)'."\n"
                .'- [suggest_denylist 下拉提示黑名单](~~173606~~)'."\n"
                .'- [hot_allowlist  热搜白名单](~~173606~~)'."\n"
                .'- [hot_denylist  热搜黑名单](~~173606~~)'."\n"
                .'- [hint_allowlist  底纹白名单](~~173606~~)'."\n"
                .'- [hint_denylist  底纹黑名单](~~173606~~)'."\n"
                ."\n\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListInterventionDictionaryRelatedEntities' => [
            'path' => '/v4/openapi/intervention-dictionaries/{name}/related',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '干预词典名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_dict',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'type' => 'array',
                                'items' => [
                                    'description' => '应用及QP信息，无结果时为空',
                                    'type' => 'object',
                                    'example' => '[]',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    \\"[]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>65956EC5-71B8-8A21-2F2E-FBE7E7292AD6</requestId>\\n<result>\\n    <appGroup>test_srn_mysql</appGroup>\\n    <queryProcessor>\\n        <name>it_content</name>\\n        <active>true</active>\\n        <indexes>short_text</indexes>\\n        <indexes>text_pack</indexes>\\n        <indexes>short_text_pack</indexes>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary>tst</interventionDictionary>\\n            <name>stop_word</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary>test_han_jiuduo_2</interventionDictionary>\\n            <name>spell_check</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary>test_han_tongyici</interventionDictionary>\\n            <name>synonym</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary/>\\n            <name>term_weighting</name>\\n        </processors>\\n        <domain>IT_CONTENT</domain>\\n        <created>1585714793</created>\\n        <updated>1591163738</updated>\\n    </queryProcessor>\\n</result>","errorExample":""}]',
            'title' => '获取与干预词典关联的资源清单',
            'summary' => '获取与干预词典关联的资源清单。如果某个干预词典被qp引用，则列出来所有的应用及QP信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' | 字段 | 类型 | 描述 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| result[].appGroup | String | 应用名 |'."\n"
                .'| result[].queryProcessor | Object | QP信息<br />参考：[QueryProcessor](~~170014~~) |',
            'extraInfo' => ' ',
        ],
        'ListInterventionDictionaryNerResults' => [
            'path' => '/v4/openapi/intervention-dictionaries/{name}/ner-results',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'description' => '干预词典名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_dict',
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要搜索的关键词',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '豆奶',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '8F780CA8-D4D4-2FFE-B8AC-42040822C554',
                            ],
                            'result' => [
                                'description' => '实体识别内容'."\n"
                                    ."\n"
                                    .'参考：[ner 实体识别](~~173606~~)',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'tag' => [
                                            'description' => '识别结果的英文名'."\n"
                                                ."\n"
                                                .'- brand 品牌'."\n"
                                                .'- category 品类'."\n"
                                                .'- material 材质'."\n"
                                                .'- element 款式元素'."\n"
                                                .'- style 风格'."\n"
                                                .'- color 颜色'."\n"
                                                .'- function 功能功效'."\n"
                                                .'- scenario 场景'."\n"
                                                .'- people 人群'."\n"
                                                .'- season 时间季节'."\n"
                                                .'- model 型号'."\n"
                                                .'- region 地点地域'."\n"
                                                .'- name 人名'."\n"
                                                .'- adjective 修饰'."\n"
                                                .'- category-modifier 品类修饰词'."\n"
                                                .'- size 尺寸规格'."\n"
                                                .'- quality 品质成色'."\n"
                                                .'- suit 套装'."\n"
                                                .'- new-release 新品'."\n"
                                                .'- series 系列'."\n"
                                                .'- marketing 营销服务'."\n"
                                                .'- entertainment 文娱书文曲'."\n"
                                                .'- organization 机构实体'."\n"
                                                .'- movie 影视名称'."\n"
                                                .'- game 游戏名称'."\n"
                                                .'- number 数字'."\n"
                                                .'- unit 单位'."\n"
                                                .'- common 普通词'."\n"
                                                .'- new-word 新词'."\n"
                                                .'- proper-noun 专有名词'."\n"
                                                .'- symbol 符号'."\n"
                                                .'- prefix 前缀'."\n"
                                                .'- suffix 后缀'."\n"
                                                .'- gift 赠送'."\n"
                                                .'- negative 否定'."\n"
                                                .'- agent 代理',
                                            'type' => 'string',
                                            'example' => 'category',
                                        ],
                                        'token' => [
                                            'description' => '实体词',
                                            'type' => 'string',
                                            'example' => '豆',
                                        ],
                                        'order' => [
                                            'description' => '序号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'tagLabel' => [
                                            'description' => '识别结果的中文名，同上',
                                            'type' => 'string',
                                            'example' => '品类',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8F780CA8-D4D4-2FFE-B8AC-42040822C554\\",\\n  \\"result\\": [\\n    {\\n      \\"tag\\": \\"category\\",\\n      \\"token\\": \\"豆\\",\\n      \\"order\\": 1,\\n      \\"tagLabel\\": \\"品类\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>8F780CA8-D4D4-2FFE-B8AC-42040822C554</requestId>\\n<result>\\n    <tag>common</tag>\\n    <tagLabel>普通词</tagLabel>\\n    <token>aaaa</token>\\n    <order>1</order>\\n</result>","errorExample":""}]',
            'title' => '获取实体识别结果',
            'summary' => '获取实体识别结果。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableSlowQuery' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query/actions/enable',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '728E89C6-8673-D39B-39A1-5BA2B56D448F',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"728E89C6-8673-D39B-39A1-5BA2B56D448F\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>728E89C6-8673-D39B-39A1-5BA2B56D448F</requestId>\\n<result/>","errorExample":""}]',
            'title' => '启用优化大师慢查询服务',
            'summary' => '启用优化大师慢查询服务。',
        ],
        'DisableSlowQuery' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query/actions/disable',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '728E89C6-8673-D39B-39A1-5BA2B56D448F',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"728E89C6-8673-D39B-39A1-5BA2B56D448F\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>728E89C6-8673-D39B-39A1-5BA2B56D448F</requestId>\\n<result/>","errorExample":""}]',
            'title' => '禁用优化大师慢查询服务',
            'summary' => '禁用优化大师慢查询服务。',
        ],
        'DescribeSlowQueryStatus' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5C1C1C45-C64A-AD30-565F-140871D57E5E',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'region' => [
                                        'description' => '区域'."\n"
                                            .'- outer 外网'."\n"
                                            .'- internal 内网',
                                        'type' => 'string',
                                        'example' => 'internal',
                                    ],
                                    'status' => [
                                        'description' => '开通状态'."\n"
                                            .'- enabled 开通'."\n"
                                            .'- disabled 未开通'."\n"
                                            .'- n/a 未知',
                                        'type' => 'string',
                                        'example' => 'disabled',
                                    ],
                                    'appGroupId' => [
                                        'description' => '应用ID',
                                        'type' => 'string',
                                        'example' => '100298370',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"5C1C1C45-C64A-AD30-565F-140871D57E5E\\",\\n  \\"result\\": {\\n    \\"region\\": \\"internal\\",\\n    \\"status\\": \\"disabled\\",\\n    \\"appGroupId\\": \\"100298370\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>5C1C1C45-C64A-AD30-565F-140871D57E5E</requestId>\\n<result>\\n    <region>internal</region>\\n    <appGroupId>100298370</appGroupId>\\n    <status>disabled</status>\\n</result>","errorExample":""}]',
            'title' => '获取优化大师慢查询开通状态',
            'summary' => '获取优化大师慢查询开通状态。',
        ],
        'StartSlowQueryAnalyzer' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query/actions/run',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '—',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result/>","errorExample":""}]',
            'title' => '立即进行慢查询分析',
            'summary' => '立即进行慢查询分析。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
        ],
        'ListSlowQueryQueries' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query/categories/{categoryIndex}/queries',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'categoryIndex',
                    'in' => 'path',
                    'schema' => [
                        'description' => '优化建议ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'EB250CA0-ACFD-C5DE-17CD-01445BFE8AE5',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'index' => [
                                        'description' => '优化建议ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'appQuery' => [
                                        'description' => '优化建议信息',
                                        'type' => 'string',
                                        'example' => 'no data',
                                    ],
                                    'start' => [
                                        'description' => '开始时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1589986800',
                                    ],
                                    'end' => [
                                        'description' => '结束时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1589990340',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"EB250CA0-ACFD-C5DE-17CD-01445BFE8AE5\\",\\n  \\"result\\": {\\n    \\"index\\": 0,\\n    \\"appQuery\\": \\"no data\\",\\n    \\"start\\": 1589986800,\\n    \\"end\\": 1589990340\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>EB250CA0-ACFD-C5DE-17CD-01445BFE8AE5</requestId>\\n<result>\\n    <start>1589986800</start>\\n    <end>1589990340</end>\\n    <index>0</index>\\n    <appQuery>no data</appQuery>\\n</result>","errorExample":""}]',
            'title' => '列出慢查询Query清单',
            'summary' => '列出优化大师慢查询Query清单。',
            'requestParamsDescription' => '**查询参数**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| start | Integer | 是 | 1589986800 | 开始时间戳（精确到秒） |'."\n"
                .'| end | Integer | 是 | 1589990340 | 结束时间戳（精确到秒） |'."\n"
                .'| size | Integer | 否 | 10 | 返回条数 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSlowQueryCategories' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query/categories',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4406F40B-A0A2-9D5D-531F-3B6936567584',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'start' => [
                                        'description' => '开始时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1589986800',
                                    ],
                                    'analyzeStatus' => [
                                        'description' => '分析状态'."\n"
                                            ."\n"
                                            .'- PENDING 准备中'."\n"
                                            .'- SUCCESS 成功'."\n"
                                            .'- RUNNING 运行中'."\n"
                                            .'- FAILED 失败'."\n"
                                            .'- N/A 未知',
                                        'type' => 'string',
                                        'example' => '"PENDING"',
                                    ],
                                    'end' => [
                                        'description' => '结束时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1589990340',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"4406F40B-A0A2-9D5D-531F-3B6936567584\\",\\n  \\"result\\": {\\n    \\"start\\": 1589986800,\\n    \\"analyzeStatus\\": \\"\\\\\\"PENDING\\\\\\"\\",\\n    \\"end\\": 1589990340\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>4406F40B-A0A2-9D5D-531F-3B6936567584</requestId>\\n<result>\\n    <analyzeStatus>PENDING</analyzeStatus>\\n    <start>1589986800</start>\\n    <end>1589990340</end>\\n</result>","errorExample":""}]',
            'title' => '列出优化大师慢查询优化建议清单',
            'summary' => '列出优化大师慢查询优化建议清单。',
            'requestParamsDescription' => '**请求示例**'."\n"
                ."\n"
                .'`GET /v4/openapi/app-groups/kevintest2/optimizers/slow-query/categories?end=1589990340&sort=max&start=1589986800'."\n"
                .'`'."\n"
                ."\n\n"
                .'**查询参数**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| start | Integer | 是 | 1589986800 | 开始时间戳（精确到秒） |'."\n"
                .'| end | Integer | 是 | 1589990340 | 结束时间戳（精确到秒） |'."\n"
                .'| sort | String | 否 | "max" | 排序类型<br />- max  最大值<br />- avg  平均值<br />- sum  总值<br />- queryProportion  查询比例<br /> |',
        ],
        'ListQuotaReviewTasks' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/quota-review-tasks',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"my_app_name"',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认 pageNumber=1',
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
                        'description' => '每页返回数目，默认 pageSize=10',
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
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '500',
                            ],
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '"3351A21F-705B-508C-9450-DA65A681547F"',
                            ],
                            'result' => [
                                'description' => '审批工单信息参考：[quotareviewtask](~~173609~~)',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'oldDocSize' => [
                                            'description' => '原存储容量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '900',
                                        ],
                                        'pending' => [
                                            'description' => '是否待处理',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'memo' => [
                                            'description' => '备注',
                                            'type' => 'string',
                                            'example' => 'null',
                                        ],
                                        'approved' => [
                                            'description' => '是否通过审批',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'oldSpec' => [
                                            'description' => '原应用规格',
                                            'type' => 'string',
                                            'example' => '"opensearch.private.common"',
                                        ],
                                        'oldComputeResource' => [
                                            'description' => '原计算资源',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '500',
                                        ],
                                        'appGroupType' => [
                                            'description' => '应用类型',
                                            'type' => 'string',
                                            'example' => '"standard"',
                                        ],
                                        'available' => [
                                            'description' => '是否可用',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'gmtCreate' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '"2020-04-08T08:29:45+0000"',
                                        ],
                                        'newSocSize' => [
                                            'description' => '目标存储容量',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1100',
                                        ],
                                        'id' => [
                                            'description' => '工单ID',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '142',
                                        ],
                                        'appGroupId' => [
                                            'description' => '应用ID',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '120123456',
                                        ],
                                        'newComputeResource' => [
                                            'description' => '目标计算资源',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '6000',
                                        ],
                                        'appGroupName' => [
                                            'description' => '应用名称',
                                            'type' => 'string',
                                            'example' => '"td_test_os"',
                                        ],
                                        'gmtModified' => [
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => '"2020-04-08T08:36:36+0000"',
                                        ],
                                        'newSpec' => [
                                            'description' => '目标应用规格',
                                            'type' => 'string',
                                            'example' => '"opensearch.private.common"',
                                        ],
                                    ],
                                    'example' => '{}',
                                ],
                                'example' => '[]',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 500,\\n  \\"requestId\\": \\"\\\\\\"3351A21F-705B-508C-9450-DA65A681547F\\\\\\"\\",\\n  \\"result\\": [\\n    {\\n      \\"oldDocSize\\": 900,\\n      \\"pending\\": false,\\n      \\"memo\\": \\"null\\",\\n      \\"approved\\": true,\\n      \\"oldSpec\\": \\"\\\\\\"opensearch.private.common\\\\\\"\\",\\n      \\"oldComputeResource\\": 500,\\n      \\"appGroupType\\": \\"\\\\\\"standard\\\\\\"\\",\\n      \\"available\\": true,\\n      \\"gmtCreate\\": \\"\\\\\\"2020-04-08T08:29:45+0000\\\\\\"\\",\\n      \\"newSocSize\\": 1100,\\n      \\"id\\": 142,\\n      \\"appGroupId\\": 120123456,\\n      \\"newComputeResource\\": 6000,\\n      \\"appGroupName\\": \\"\\\\\\"td_test_os\\\\\\"\\",\\n      \\"gmtModified\\": \\"\\\\\\"2020-04-08T08:36:36+0000\\\\\\"\\",\\n      \\"newSpec\\": \\"\\\\\\"opensearch.private.common\\\\\\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取指定应用配额审批清单',
            'summary' => '获取指定 opensearch 应用配额审批清单。',
            'requestParamsDescription' => '请求示例：'."\n"
                ."\n"
                .'```'."\n"
                .'GET /v4/openapi/app-groups/demo/quota-review-tasks'."\n"
                .'```',
            'responseParamsDescription' => '返回结果示例：'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'    "id": 142,'."\n"
                .'    "appGroupId": 120577535,'."\n"
                .'    "appGroupName": "td_trade_order_os",'."\n"
                .'    "appGroupType": "standard",'."\n"
                .'    "oldSpec": "opensearch.private.common",'."\n"
                .'    "oldComputeResource": 500,'."\n"
                .'    "oldDocSize": 900,'."\n"
                .'    "newSpec": "opensearch.private.common",'."\n"
                .'    "newComputeResource": 6000,'."\n"
                .'    "newSocSize": 1100,'."\n"
                .'    "memo": null,'."\n"
                .'    "available": true,'."\n"
                .'    "pending": false,'."\n"
                .'    "approved": true,'."\n"
                .'    "gmtCreate": "2020-04-08T08:29:45+0000",'."\n"
                .'    "gmtModified": "2020-04-08T08:36:36+0000"'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListScheduledTasks' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scheduled-tasks',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定时任务类型'."\n"
                            ."\n"
                            .'- wipe 数据清理'."\n"
                            .'- fork 索引重建'."\n"
                            .'- check-status 检查应用状态'."\n"
                            .'- index 索引重建'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wipe',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认 pageNumber = 1',
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
                        'description' => '每页返回数目，默认 pageSize = 10',
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
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'type' => 'array',
                                'items' => [
                                    'description' => '定时任务信息'."\n"
                                        ."\n"
                                        .'参考：[ScheduledTask](~~173610~~)',
                                    'type' => 'object',
                                    'example' => '[]',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    []\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<totalCount>1</totalCount>\\n<result>\\n    <id>2f12c585-5873-11ea-974a-7cd30ad3e268</id>\\n    <progress>0</progress>\\n    <status>3</status>\\n    <lastRanTimestamp/>\\n    <type>wipe</type>\\n    <running>false</running>\\n    <paused>false</paused>\\n    <finished>false</finished>\\n    <idle>true</idle>\\n    <created>1582706232</created>\\n    <updated>1582706232</updated>\\n    <cron>0 0 * * 1,2,3,4,5,6,7</cron>\\n    <enabled>true</enabled>\\n    <appId/>\\n    <appGroupId>110091051</appGroupId>\\n    <ownerId>2656</ownerId>\\n    <lastScheduledTimestamp/>\\n    <forkedAppId/>\\n    <appGroup>\\n        <id>110091051</id>\\n    </appGroup>\\n    <owner>\\n        <id>2656</id>\\n    </owner>\\n    <filter>\\n        <field>ctime</field>\\n        <days>30</days>\\n        <unit>s</unit>\\n    </filter>\\n</result>","errorExample":""}]',
            'title' => '获取应用定时任务列表',
            'summary' => '获取OpenSearch应用定时任务列表。',
            'requestParamsDescription' => '**查询参数**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| id | String | 否 | "2f12c585-5873-11ea-974a-7cd30ad3e268" | 任务ID |'."\n"
                .'| enabled | Boolean | 否 | true | 是否已开启定时任务 |'."\n"
                .'| updated | Integer | 否 | 1582706232 | 定时任务的更新时间戳 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateScheduledTask' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scheduled-tasks',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求体',
                        'required' => false,
                        '$ref' => '#/components/schemas/ScheduledTask',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '定时任务信息，参考：[ScheduledTask](~~173610~~)',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>0BECF34E-125A-D35F-1E5D-ABB66B11FAB8</requestId>\\n<result>\\n    <id>cfd5ebe9-bcdd-11ea-a58d-98039b07e4ec</id>\\n    <progress>0</progress>\\n    <status>3</status>\\n    <lastRanTimestamp/>\\n    <type>wipe</type>\\n    <running>false</running>\\n    <paused>false</paused>\\n    <finished>false</finished>\\n    <idle>true</idle>\\n    <created>1593747144</created>\\n    <updated>1593747144</updated>\\n    <cron>0 0 * * 1,2,3,4,5,6,7</cron>\\n    <enabled>true</enabled>\\n    <lastScheduledTimestamp/>\\n    <forkedAppId/>\\n    <filter>\\n        <field>title</field>\\n        <days>30</days>\\n        <unit>s</unit>\\n    </filter>\\n</result>","errorExample":""}]',
            'title' => '创建一个应用的定时任务',
            'summary' => '创建一个 OpenSearch 应用的定时任务。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| type | String | 是 | "wipe" | 定时任务类型<br />- wipe 数据清理<br />- fork 导入数据加索引重建<br />- reindex 索引重建<br />- clear 清空数据 |'."\n"
                .'| cron | String | 是 | "10 20 * * 1,2,3,4,5" | 定时配置<br />参考：[ScheduledTask 定时规则](~~173611~~) |'."\n"
                .'| enabled | Boolean | 是 | true | 是否开启定时任务 |'."\n"
                .'| appStrategy | String | 否 | delete-idle | 创建新版本的策略<br />- delete-idle 已有两个版本，先删除非在线版本，再创建新版本<br />- need-slot 只有一个版本，直接创建新版本 |'."\n"
                .'| filter | Object | 否 |  | 数据清理条件 |'."\n"
                .'| filter.days | Integer | 是 | 7 | 过期天数<br />获取范围：[7-180] |'."\n"
                .'| filter.unit | String | 是 | "s" | 过期时间单位<br />- s  秒<br />- ms  毫秒 |'."\n"
                .'| filter.field | String | 否  | "cate_id" | 过期字段 |'."\n"
                .'| runNow | Boolean | 否  | false | 是否立即执行（默认：false） |'."\n"
                .'| permanent | Boolean | 否  | true | 是否持久化（默认：true） |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeScheduledTask' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scheduled-tasks/{taskId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2f12c585-5873-11ea-974a-7cd30ad3e268',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '定时任务信息',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '922DC0D9-31B5-45F9-47B7-37DC678D61A8',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"922DC0D9-31B5-45F9-47B7-37DC678D61A8\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>922DC0D9-31B5-45F9-47B7-37DC678D61A8</requestId>\\n<result>\\n    <id>2f12c585-5873-11ea-974a-7cd30ad3e268</id>\\n    <progress>60</progress>\\n    <status>0</status>\\n    <lastRanTimestamp>1593755495</lastRanTimestamp>\\n    <type>wipe</type>\\n    <running>true</running>\\n    <paused>false</paused>\\n    <finished>false</finished>\\n    <idle>false</idle>\\n    <created>1593747144</created>\\n    <updated>1593755504</updated>\\n    <cron>0 0 * * 1,2,3,4,5,6,7</cron>\\n    <enabled>true</enabled>\\n    <appId/>\\n    <appGroupId>110091051</appGroupId>\\n    <ownerId>84</ownerId>\\n    <lastScheduledTimestamp/>\\n    <forkedAppId>100304004</forkedAppId>\\n    <appGroup>\\n        <id>110091051</id>\\n    </appGroup>\\n    <owner>\\n        <id>84</id>\\n    </owner>\\n    <filter>\\n        <field>title</field>\\n        <days>30</days>\\n        <unit>s</unit>\\n    </filter>\\n</result>","errorExample":""}]',
            'title' => '查看应用定时任务详情',
            'summary' => '查看 OpenSearch 应用定时任务详情。',
        ],
        'ModifyScheduledTask' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scheduled-tasks/{taskId}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '121414148',
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '任务id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '56e9c2e7-5a4d-481a-9f1b-b07da6909450',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'any',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '定时任务信息',
                                'type' => 'object',
                                'example' => 'Array',
                            ],
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","type":"json"}]',
            'title' => '修改一个定时任务',
            'summary' => '修改一个定时任务。',
        ],
        'RemoveScheduledTask' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scheduled-tasks/{taskId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“2f12c585-5873-11ea-974a-7cd30ad3e268”',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果列表（请求成功不会返回此参数）',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    1\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>","errorExample":""}]',
            'title' => '删除计划任务',
            'summary' => '删除 OpenSearch 应用定时任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSortExpressions' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/sort-expressions',
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
                'operationType' => 'none',
                'abilityTreeCode' => '55229',
                'abilityTreeNodes' => [
                    'FEATUREopensearchMS4QP2',
                    'FEATUREopensearchSYPFQY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '999999999',
                        'minimum' => '1',
                        'example' => '110116134',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'result' => [
                                'description' => '粗排或精排表达式信息'."\n"
                                    ."\n"
                                    .'参考：[FirstRank](~~170007~~)、[SecondRank](~~170008~~)',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间（时间戳）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1655793690',
                                        ],
                                        'active' => [
                                            'description' => '是否是默认表达式',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'description' => [
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'updated' => [
                                            'description' => '更新时间（时间戳）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1655793690',
                                        ],
                                        'name' => [
                                            'description' => '名称',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1655793690,\\n      \\"active\\": true,\\n      \\"description\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"updated\\": 1655793690,\\n      \\"name\\": \\"default\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <name>default</name>\\n    <description/>\\n    <active>true</active>\\n    <meta>\\n        <attribute>static_bm25()</attribute>\\n        <arg/>\\n        <weight>1</weight>\\n    </meta>\\n    <created>1655793690</created>\\n    <updated>1655793690</updated>\\n</result>\\n<result>\\n    <name>default</name>\\n    <meta/>\\n    <active>false</active>\\n    <description/>\\n    <created>0</created>\\n    <updated>0</updated>\\n    <isDefault>false</isDefault>\\n    <isSys>true</isSys>\\n</result>\\n<result>\\n    <name>tests</name>\\n    <meta>random()+now()</meta>\\n    <active>true</active>\\n    <description/>\\n    <created>1587052801</created>\\n    <updated>1587052801</updated>\\n    <isDefault>true</isDefault>\\n    <isSys>false</isSys>\\n</result>\\n<result>\\n    <name>test</name>\\n    <meta>query_term_count()</meta>\\n    <active>false</active>\\n    <description/>\\n    <created>1587052801</created>\\n    <updated>1587052801</updated>\\n    <isDefault>false</isDefault>\\n    <isSys>false</isSys>\\n</result>\\n<totalCount>4</totalCount>","errorExample":""}]',
            'title' => '获取应用版本上的排序表达式列表',
            'summary' => '获取应用版本上的排序表达式列表。',
            'requestParamsDescription' => '**查询参数**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| pageNumber | Integer | 否 | 1 | 页码，默认 pageNumber=1 |'."\n"
                .'| pageSize | Integer | 否 | 10 | 每页返回数目，默认 pageSize=10 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UnbindEsInstance' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/actions/unbind-es-instance',
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
                'operationType' => 'none',
                'abilityTreeCode' => '55264',
                'abilityTreeNodes' => [
                    'FEATUREopensearchQZGKV9',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"my_app_group_name"',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\"\\n}","type":"json"}]',
            'title' => '卸载依赖库实例',
            'summary' => '为 opensearch 应用解绑es实例。',
        ],
        'BindEsInstance' => [
            'summary' => '绑定依赖性 Elasticsearch 实例。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/actions/bind-es-instance',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F5099063-6B86-F398-D843-905F9EFB683A',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"F5099063-6B86-F398-D843-905F9EFB683A\\"\\n}","type":"json"}]',
            'title' => '绑定依赖性库实例',
        ],
        'BindESUserAnalyzer' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/es/{esInstanceId}/actions/bind-analyzer',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '130187460',
                    ],
                ],
                [
                    'name' => 'esInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'es-cn-zvp2g952l000v5uxp',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'any',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '自定义分析器',
                                'type' => 'object',
                                'example' => '[]',
                            ],
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '3AD34CAD-9603-5251-AFF5-3916C848A1D3',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [],\\n  \\"requestId\\": \\"3AD34CAD-9603-5251-AFF5-3916C848A1D3\\"\\n}","type":"json"}]',
            'title' => '为es实例绑定自定义分析器',
            'summary' => '为es实例绑定自定义分析器。',
        ],
        'UnbindESUserAnalyzer' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/es/{esInstanceId}/actions/unbind-analyzer',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'esInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'es-cn-zvp2ff3iq000myzv7',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'any',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '自定义分析器',
                                'type' => 'object',
                                'example' => '[]',
                            ],
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [],\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\"\\n}","type":"json"}]',
            'title' => '为Elasticsearch实例解绑自定义分析器',
            'summary' => '为Elasticsearch实例解绑自定义分析器。',
            'description' => '为Elasticsearch实例解绑自定义分析器',
        ],
        'ListProceedings' => [
            'summary' => '查看当前的处理流。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/proceedings',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '120677456',
                    ],
                ],
                [
                    'name' => 'filterFinished',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否过滤已完成。',
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
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'F5099063-6B86-F398-D843-905F9EFB683A',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F5099063-6B86-F398-D843-905F9EFB683A\\"\\n}","type":"json"}]',
            'title' => '显示AppGroup正在进行的离线导入的任务列表',
        ],
        'ListStatisticLogs' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/statistic-logs/{moduleName}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'app_group_name',
                    ],
                ],
                [
                    'name' => 'moduleName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '模块名称，为枚举值'."\n"
                            ."\n"
                            .'- hot 热词榜单'."\n"
                            .'- error 应用日志'."\n"
                            .'- slow-log 慢日志'."\n"
                            ."\n"
                            .'目前只支持 hot',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'hot',
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间'."\n"
                            .'默认为当天0点0分0秒的时间戳',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9999999999',
                        'minimum' => '0',
                        'example' => '1582214400',
                    ],
                ],
                [
                    'name' => 'stopTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间'."\n"
                            .'默认为当天24点0分0秒的时间戳',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9999999999',
                        'minimum' => '0',
                        'example' => '1682222400',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认 pageNumber = 1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回数目，默认 pageSize = 10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'query查询子句内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"default:\'OpenSearch\'"',
                    ],
                ],
                [
                    'name' => 'sortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'sort排序子句内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"-id"',
                    ],
                ],
                [
                    'name' => 'distinct',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用distinct子句',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'columns',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的字段'."\n"
                            .'格式为 columns=wordsTopPv'."\n"
                            ."\n"
                            .'参考：[QUERY_ANALYSIS query分析类指标](~~187665~~)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wordsTopPv',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'description' => '数据总条数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F76ACE3D-E510-EE2C-B7B1-39B3136A61EE',
                            ],
                            'result' => [
                                'description' => '结果数据，参考：'."\n"
                                    ."\n"
                                    .'- [热词榜单](~~421248~~)',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果数据，参考：'."\n"
                                        ."\n"
                                        .'- [热词榜单](~~187660~~)',
                                    'type' => 'object',
                                    'example' => '[       {           "rawQuery":"淘宝",           "pv":100       }     ]',
                                ],
                                'example' => '[]',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"F76ACE3D-E510-EE2C-B7B1-39B3136A61EE\\",\\n  \\"result\\": [\\n    [\\n      {\\n        \\"rawQuery\\": \\"淘宝\\",\\n        \\"pv\\": 100\\n      }\\n    ]\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>F76ACE3D-E510-EE2C-B7B1-39B3136A61EE</requestId>\\n<result>\\n    <rawQuery>淘宝</rawQuery>\\n    <pv>100</pv>\\n</result>\\n<totalCount>1</totalCount>","errorExample":""}]',
            'title' => '查询日志类统计',
            'summary' => '查询日志类统计，例如：应用错误日志、热词榜单、慢日志。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '**hot 热词榜单**'."\n"
                .'| 名称 | 类型 | 描述 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| rawQuery | String | 热词 |'."\n"
                .'| pv | Integer | PV |',
            'extraInfo' => ' ',
        ],
        'ListStatisticReport' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/statistic-report/{moduleName}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'app_group_name',
                    ],
                ],
                [
                    'name' => 'moduleName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '模块名称，为枚举值'."\n"
                            ."\n"
                            .'- app   （业务运营报表）'."\n"
                            .'- app-query （业务运营报表>Query分析指标）'."\n"
                            .'- abtest （A/B测试报表）'."\n"
                            .'- suggest （下拉提示报表）'."\n"
                            .'- hot （热搜报表）'."\n"
                            .'- hint （底纹报表）'."\n"
                            .'- data-quality'."\n"
                            .'- es （开源兼容版实例报表）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'suggest',
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间戳（单位：秒）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9999999999',
                        'minimum' => '0',
                        'example' => '1582214400',
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间默认为当前时间戳（单位：秒）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9999999999',
                        'minimum' => '0',
                        'example' => '1582646399',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回数目，默认 pageSize = 10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'columns',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的字段'."\n"
                            .'格式为 colums=”pv,uv,ipv”,参考：[统计报表指标释义'."\n"
                            .'](~~187665~~)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pv,uv',
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询条件，格式 k1:v1,k2:v2'."\n"
                            ."\n"
                            .'- experimentSerialNumber 实验的全局唯一序列号'."\n"
                            .'- sceneTag 场景标识'."\n"
                            .'- bizType 业务标识'."\n"
                            .'- modelId 算法模型ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bizType:test,sceneTag:myTag',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'description' => '数据总条数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '43',
                            ],
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'F65C8BB2-C14F-5983-888B-41C4E082D3BC',
                            ],
                            'result' => [
                                'description' => '统计报告'."\n"
                                    ."\n"
                                    .'- data-quality 参考：[数据采集 - 行为数据上报](~~131547~~)'."\n"
                                    .'- app、abtest 参考：[CORE 核心类指标](~~187665~~)'."\n"
                                    .'- app-query 参考：[QUERY_ANALYSIS query分析类指标](~~187665~~)',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果体',
                                    'type' => 'object',
                                    'example' => '{}',
                                ],
                                'example' => '[]',
                            ],
                        ],
                        'example' => '[]',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 43,\\n  \\"requestId\\": \\"F65C8BB2-C14F-5983-888B-41C4E082D3BC\\",\\n  \\"result\\": [\\n    {}\\n  ]\\n}","type":"json"}]',
            'title' => '报告类统计查询',
            'summary' => '应用场景有：应用报表、下拉提示报表、热词底纹报表、abtest报表、数据质量报告等。',
        ],
        'UpdateSortScript' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称或应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用下的版本id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'scriptName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '脚本名',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test_cava',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '9F165784-5507-5342-ABF3-545293F9808A',
                            ],
                        ],
                        'example' => '[]',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9F165784-5507-5342-ABF3-545293F9808A\\"\\n}","type":"json"}]',
            'title' => '修改排序脚本备注',
            'summary' => '修改排序脚本备注。',
            'description' => '修改排序脚本备注',
            'responseParamsDescription' => '**示例**'."\n"
                ."\n"
                .'请求示例'."\n"
                ."\n"
                .'```'."\n"
                .'PUT /v4/openapi/app-groups/my_app/apps/123456/sort-scripts/test_cava'."\n"
                .'{'."\n"
                .'    "description" : "just for test"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'正常返回示例'."\n"
                ."\n"
                .'XML格式'."\n"
                ."\n"
                .'```'."\n"
                .'<requestId>ABCDEFGH</requestId>'."\n"
                .'```'."\n"
                ."\n"
                .'JSON格式'."\n"
                ."\n"
                .'```'."\n"
                .'{"requestId":"ABCDEFGH"}'."\n"
                .'```'."\n",
        ],
        'SaveSortScriptFile' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/files/src/{fileName}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '\'\'110123411\'\'',
                    ],
                ],
                [
                    'name' => 'scriptName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '需要更新内容的脚本名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '\'\'test1\'\'',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用下的版本id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '\'\'110123111\'\'',
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '文件名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '\'\'file01\'\'',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'scriptContent',
                        'type' => 'object',
                        'properties' => [
                            'content' => [
                                'description' => '脚本内容，base64编码',
                                'type' => 'string',
                                'required' => false,
                                'example' => '4769#0: *28194492991 a client request body is buffered to a temporary file /usr/local/webserver/openresty/nginx/client_body_temp/0000624474,',
                            ],
                            'version' => [
                                'description' => '脚本内容的版本',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2022-12-01',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '唯一标识一次请求',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>","errorExample":""}]',
            'title' => '保存排序脚本文件',
            'summary' => '上传排序脚本内容。',
            'requestParamsDescription' => '## scriptContent'."\n"
                .'| 名称 | 类型 | 是否必选 | 描述 |'."\n"
                .'| --- | --- | --- | --- |'."\n"
                .'| content | String | 是 | 脚本内容，需要使用base64编码 |'."\n"
                .'| version | integer | 否 | 脚本内容的版本，用于并发更新时保序，默认为当前时间 |',
            'extraInfo' => ' ',
        ],
        'ReleaseSortScript' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/actions/release',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '\'\'1234\'\'',
                    ],
                ],
                [
                    'name' => 'scriptName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '脚本名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '\'\'test\'\'',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用下的版本id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '\'\'12345\'\'',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '唯一标识一次请求',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>","errorExample":""}]',
            'title' => '发布排序脚本',
            'summary' => '发布排序脚本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '**错误返回**'."\n"
                ."\n"
                .'{'."\n"
                .'    "requestId" : "ABCDEFGH"'."\n"
                .'    "code":"InvalidAppStatus",'."\n"
                .'    "message":"invalid app status.",'."\n"
                .'    "httpCode":400'."\n"
                .'}',
        ],
        'GetSortScriptFile' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/files/src/{fileName}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app',
                    ],
                ],
                [
                    'name' => 'scriptName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '脚本名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'UserScorer.cava',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用下的版本id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '脚本文件名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'script1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '唯一标识一次请求',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                            'result' => [
                                'description' => '排序脚本内容',
                                'type' => 'object',
                                'properties' => [
                                    'content' => [
                                        'description' => '脚本内容，base64编码',
                                        'type' => 'string',
                                        'example' => 'YWJjZGVmZw==',
                                    ],
                                    'createTime' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-04-02 20:21:14',
                                    ],
                                    'modifyTime' => [
                                        'description' => '最后一次修改时间',
                                        'type' => 'string',
                                        'example' => '2020-04-02 21:21:14',
                                    ],
                                    'version' => [
                                        'description' => '脚本内容的版本',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123456',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": {\\n    \\"content\\": \\"YWJjZGVmZw==\\",\\n    \\"createTime\\": \\"2020-04-02 20:21:14\\",\\n    \\"modifyTime\\": \\"2020-04-02 21:21:14\\",\\n    \\"version\\": 123456\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>\\n<result>\\n    <content>YWJjZGVmZw==</content>\\n    <version>123456</version>\\n</result>","errorExample":""}]',
            'title' => '获取排序脚本内容',
            'summary' => '获取排序脚本内容。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ```'."\n"
                .'错误返回'."\n"
                .'{'."\n"
                .'    "requestId" : "ABCDEFGH",'."\n"
                .'    "code":"ResourceNotFound",'."\n"
                .'    "message":"The specified script not found.",'."\n"
                .'    "httpCode":404'."\n"
                .'}'."\n"
                .'```',
            'extraInfo' => ' ',
        ],
        'GetSortScript' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称、应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [],
                        'example' => 'my_app',
                    ],
                ],
                [
                    'name' => 'scriptName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '脚本名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [],
                        'example' => 'script1',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用下的版本id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [],
                        'example' => '160051478',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '唯一标识一次请求',
                                'type' => 'string',
                                'enumValueTitles' => [],
                                'example' => 'ABCDEFGH',
                            ],
                            'result' => [
                                'description' => '脚本的详情',
                                'type' => 'object',
                                'properties' => [
                                    'scope' => [
                                        'description' => '脚本的作用范围',
                                        'type' => 'string',
                                        'example' => 'second_rank',
                                    ],
                                    'createTime' => [
                                        'description' => '脚本创建时间',
                                        'type' => 'string',
                                        'example' => '2020-04-02 20:21:14',
                                    ],
                                    'status' => [
                                        'description' => '脚本的状态，详情请参考下节脚本状态列表',
                                        'type' => 'string',
                                        'example' => 'released',
                                    ],
                                    'modifyTime' => [
                                        'description' => '脚本最后一次修改时间',
                                        'type' => 'string',
                                        'example' => '2020-04-02 21:21:14',
                                    ],
                                    'type' => [
                                        'description' => '脚本的类型',
                                        'type' => 'string',
                                        'enumValueTitles' => [],
                                        'example' => 'cava_script',
                                    ],
                                    'scriptName' => [
                                        'description' => '脚本名称',
                                        'type' => 'string',
                                        'example' => 'rank_cava_20230606_v7'."\n",
                                    ],
                                ],
                            ],
                        ],
                        'enumValueTitles' => [],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": {\\n    \\"scope\\": \\"second_rank\\",\\n    \\"createTime\\": \\"2020-04-02 20:21:14\\",\\n    \\"status\\": \\"released\\",\\n    \\"modifyTime\\": \\"2020-04-02 21:21:14\\",\\n    \\"type\\": \\"cava_script\\",\\n    \\"scriptName\\": \\"rank_cava_20230606_v7\\\\n\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取排序脚本详情',
            'summary' => '获取排序脚本详情。',
            'responseParamsDescription' => '```'."\n"
                .'错误返回'."\n"
                .'{'."\n"
                .'    "requestId" : "ABCDEFGH",'."\n"
                .'		"code":"ResourceNotFound",'."\n"
                .'    "message":"The specified script not found.",'."\n"
                .'    "httpCode":404'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetScriptFileNames' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/file-names',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用下的版本id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'scriptName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '脚本名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'file_names',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '唯一标识一次请求',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                            'result' => [
                                'description' => '脚本列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'createTime' => [
                                            'description' => '脚本创建时间',
                                            'type' => 'string',
                                            'example' => '2020-04-02 20:21:14',
                                        ],
                                        'fileName' => [
                                            'description' => '脚本文件名',
                                            'type' => 'string',
                                            'example' => 'my_cava_script.cava',
                                        ],
                                        'modifyTime' => [
                                            'description' => '脚本最后一次修改时间',
                                            'type' => 'string',
                                            'example' => '2020-04-02 21:21:14',
                                        ],
                                        'pathName' => [
                                            'description' => '脚本路径名',
                                            'type' => 'string',
                                            'example' => 'src',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": [\\n    {\\n      \\"createTime\\": \\"2020-04-02 20:21:14\\",\\n      \\"fileName\\": \\"my_cava_script.cava\\",\\n      \\"modifyTime\\": \\"2020-04-02 21:21:14\\",\\n      \\"pathName\\": \\"src\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>\\n<result>\\n    <fileName>my_cava_script.cava</fileName>\\n    <pathName>src</pathName>\\n    <createTime>2020-04-02 20:21:14</createTime>\\n    <modifyTime>2020-04-02 21:21:14</modifyTime>\\n</result>","errorExample":""}]',
            'title' => '获取脚本文件名称列表',
            'summary' => '获取指定版本指定脚本下所有的文件名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ```'."\n"
                .'错误返回'."\n"
                .'{'."\n"
                .'    "requestId" : "ABCDEFGH",'."\n"
                .'    "code":"ResourceNotFound",'."\n"
                .'    "message":"The specified script not found.",'."\n"
                .'    "httpCode":404'."\n"
                .'}'."\n"
                .'```',
            'extraInfo' => '  ',
        ],
        'DeleteSortScriptFile' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/files/src/{fileName}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'search',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234567',
                    ],
                ],
                [
                    'name' => 'scriptName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '脚本名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cava',
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '需要删除的脚本文件名',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cavafile',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>","errorExample":""}]',
            'title' => '删除排序脚本文件',
            'summary' => '删除脚本文件。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSortScript' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'search',
                    ],
                ],
                [
                    'name' => 'scriptName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '脚本名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cava',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用下的版本id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234567',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>","errorExample":""}]',
            'title' => '删除排序脚本',
            'summary' => '删除排序脚本。',
            'responseParamsDescription' => '```'."\n"
                .'错误返回'."\n"
                .'{'."\n"
                .'    "requestId" : "ABCDEFGH"'."\n"
                .'	"code":"InvalidAppStatus",'."\n"
                .'    "message":"invalid app status.",'."\n"
                .'    "httpCode":400'."\n"
                .'}'."\n"
                .'```',
        ],
        'CreateSortScript' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'search',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用下的报表id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234567',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'object',
                        'properties' => [
                            'scriptName' => [
                                'description' => '脚本名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'rank_cava_20230606_v7',
                            ],
                            'type' => [
                                'description' => '脚本的类型，目前只支持cava_script',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cava_script'."\n",
                            ],
                            'scope' => [
                                'description' => '脚本的作用范围',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'second_rank',
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
                                'description' => '唯一标识一次请求',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'scriptName' => [
                                        'description' => '脚本名称',
                                        'type' => 'string',
                                        'example' => 'rank_cava_20230606_v7'."\n",
                                    ],
                                    'type' => [
                                        'description' => '脚本的类型',
                                        'type' => 'string',
                                        'example' => 'cava_script',
                                    ],
                                    'scope' => [
                                        'description' => '脚本的作用范围',
                                        'type' => 'string',
                                        'example' => 'second_rank',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": {\\n    \\"scriptName\\": \\"rank_cava_20230606_v7\\\\n\\",\\n    \\"type\\": \\"cava_script\\",\\n    \\"scope\\": \\"second_rank\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>","errorExample":""}]',
            'title' => '创建排序脚本',
            'summary' => '创建排序脚本。',
            'requestParamsDescription' => '**请求参数**'."\n"
                ."\n"
                .'| 名称 | 类型 | 是否必选 | 描述 |'."\n"
                .'| --- | --- | --- | --- |'."\n"
                .'| scriptParams | Map | 是 | 待注册的script参数 |'."\n"
                ."\n"
                .'**scriptParams**'."\n"
                ."\n"
                .'| 名称 | 类型 | 是否必选 | 描述 |'."\n"
                .'| --- | --- | --- | --- |'."\n"
                .'| scriptName | String | 是 | script名称 |'."\n"
                .'| type | String | 是 | 脚本的类型，目前只支持cava_script |'."\n"
                .'| scope | String | 是 | 脚本的作用范围，目前只支持second_rank |'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CompileSortScript' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/actions/compiling',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称、应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'search',
                    ],
                ],
                [
                    'name' => 'scriptName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '脚本名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'script',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用下的版本id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '130196473',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '唯一标识一次请求',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","type":"json"}]',
            'title' => '编译排序脚本',
            'summary' => '编译排序脚本。',
            'responseParamsDescription' => '```'."\n"
                .'错误返回'."\n"
                .'{'."\n"
                .'    "requestId" : "ABCDEFGH",'."\n"
                .'    "code":"InvalidAppStatus",'."\n"
                .'    "message":"invalid app status.",'."\n"
                .'    "httpCode":400'."\n"
                .'}'."\n"
                .'```',
        ],
        'UpdateSearchStrategy' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/search-strategies/{strategyName}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"110157886"',
                    ],
                ],
                [
                    'name' => 'strategyName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '策略名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '查询策略，参考[SearchStrategy](~~2400242~~)',
                        'required' => false,
                        '$ref' => '#/components/schemas/SearchStrategy',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","type":"json"}]',
            'title' => '更新搜索策略',
            'summary' => '支持dryrun。',
        ],
        'RemoveSearchStrategy' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/search-strategies/{strategyName}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'strategyName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '策略名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'F5099063-6B86-F398-D843-905F9EFB683A',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F5099063-6B86-F398-D843-905F9EFB683A\\"\\n}","type":"json"}]',
            'title' => '删除查询策略',
            'summary' => '删除查询策略。',
        ],
        'ListSearchStrategies' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/search-strategies',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"my_app"',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"110123456"',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '9C6351F5-2E2E-5249-888B-88A74E1B8A65',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9C6351F5-2E2E-5249-888B-88A74E1B8A65\\"\\n}","type":"json"}]',
            'title' => '获取查询策略详情',
            'summary' => '获取查询策略详情。',
            'responseParamsDescription' => '返回结果示例：'."\n"
                .'```json'."\n"
                .'{'."\n"
                .'    "name": "test",'."\n"
                .'    "status": 1,'."\n"
                .'    "description": "",'."\n"
                .'    "updated": 12455,'."\n"
                .'    "searchConfigs": ['."\n"
                .'        {'."\n"
                .'            "queryType": "vector",'."\n"
                .'            "firstRankName": "",'."\n"
                .'            "secondRankName": "",'."\n"
                .'            "mergeProportion": 30'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'            "queryType": "keyword",'."\n"
                .'            "firstRankName": "",'."\n"
                .'            "secondName": "",'."\n"
                .'            "mergeProportion": 70'."\n"
                .'        }'."\n"
                .'    ],'."\n"
                .'    "mergeConfig": {'."\n"
                .'        "rankName": "",'."\n"
                .'        "docCount": 5000'."\n"
                .'    }'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetSearchStrategy' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/search-strategies/{strategyName}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用版本',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'strategyName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '策略名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5C1C1C45-C64A-AD30-565F-140871D57E5E',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"5C1C1C45-C64A-AD30-565F-140871D57E5E\\"\\n}","type":"json"}]',
            'title' => '获取搜索策略',
            'summary' => '获取查询策略详情。',
        ],
        'CreateSearchStrategy' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/search-strategies',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '"my_app"',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'required' => false,
                        '$ref' => '#/components/schemas/SearchStrategy',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体'."\n"
                            ."\n",
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '"abc123"',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"\\\\\\"abc123\\\\\\"\\"\\n}","type":"json"}]',
            'title' => '创建查询策略',
            'summary' => '创建查询策略。',
        ],
        'UpdateFetchFields' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/fetch-fields',
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
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为空运行请求',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110157886',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'array',
                        'items' => [
                            'description' => '展示字段数组',
                            'type' => 'string',
                            'required' => false,
                            'example' => '\'["id", "name", "title"]\'',
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
                            'result' => [
                                'description' => '是否修改成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>true</result>","errorExample":""}]',
            'title' => '更新应用版本的默认展示字段',
            'summary' => '支持 dryRun。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateSummaries' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/summaries',
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
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为空运行请求',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'appId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10157886',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'array',
                        'items' => [
                            'description' => '请求体',
                            'type' => 'object',
                            'properties' => [
                                'field' => [
                                    'description' => '字段',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '"title"',
                                ],
                                'len' => [
                                    'description' => '片段长度',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '50',
                                ],
                                'element' => [
                                    'description' => '飘红标签',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '"em"	',
                                ],
                                'ellipsis' => [
                                    'description' => '片段链接符',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '"..."',
                                ],
                                'snippet' => [
                                    'description' => '片段数量',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '1',
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
                            'result' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '7A389E09-7964-5A2B-FE9D-F6CFA7162852',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"requestId\\": \\"7A389E09-7964-5A2B-FE9D-F6CFA7162852\\"\\n}","errorExample":""},{"type":"xml","example":"<result>true</result>\\n<requestId>7A389E09-7964-5A2B-FE9D-F6CFA7162852</requestId>","errorExample":""}]',
            'title' => '设置指定应用版本摘要',
            'summary' => '支持 dryRun。',
            'requestParamsDescription' => '**请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| [] | Object | 是 |  | 摘要设置<br />参考：[Summary](~~170016~~) 字段 |'."\n"
                .'| [].field | String | 是 | "title" | 字段 |'."\n"
                .'| [].len | Integer | 是 | 50 | 片段长度 |'."\n"
                .'| [].element | String | 是 | "em" | 飘红标签 |'."\n"
                .'| [].ellipsis | String | 是 | "..." | 片段链接符 |'."\n"
                .'| [].snippet | Integer | 是 | 1 | 片段数量 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateFunctionResource' => [
            'summary' => '创建指定功能下的算法资源。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/resources',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '功能名称',
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rank',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '资源数据，不同resourceType对应的data结构不同',
                                'type' => 'object',
                                'properties' => [
                                    'Content' => [
                                        'description' => 'raw_file类型资源对应的文件内容',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '"abc"',
                                    ],
                                    'Generators' => [
                                        'description' => 'feature_generator类型资源对应的特征生成列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '特征生成描述',
                                            'type' => 'object',
                                            'properties' => [
                                                'Generator' => [
                                                    'description' => '特征生成的类型',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'enumValueTitles' => [
                                                        'lookup' => 'lookup',
                                                        'sequence' => 'sequence',
                                                        'overlap' => 'overlap',
                                                        'raw' => 'raw',
                                                        'combo' => 'combo',
                                                        'id' => 'id',
                                                    ],
                                                    'example' => 'id',
                                                ],
                                                'Input' => [
                                                    'description' => '输入',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Features' => [
                                                            'description' => '输入特征列表',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '输入特征',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Name' => [
                                                                        'description' => '特征名',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => 'system_item_id',
                                                                    ],
                                                                    'Type' => [
                                                                        'description' => '特征类型',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'enumValueTitles' => [
                                                                            'item' => 'item',
                                                                            'user' => 'user',
                                                                        ],
                                                                        'example' => 'item',
                                                                    ],
                                                                ],
                                                                'required' => false,
                                                            ],
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'Output' => [
                                                    'description' => '输出的特征名',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'item_id_feature',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Description' => [
                                'description' => '资源描述',
                                'type' => 'string',
                                'required' => false,
                                'example' => '""',
                            ],
                            'ResourceName' => [
                                'description' => '资源名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'fg_jsoon',
                            ],
                            'ResourceType' => [
                                'description' => '资源类型',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'feature_generator' => 'feature_generator',
                                    'raw_file' => 'raw_file',
                                ],
                                'example' => 'feature_generator',
                            ],
                        ],
                        'required' => false,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态码'."\n"
                                    ."\n"
                                    .'- OK 成功'."\n"
                                    .'- FAIL 失败',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A4D487A9-A456-5AA5-A9C6-B7BF2889CF74',
                            ],
                            'Message' => [
                                'description' => '返回的错误信息',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'Code' => [
                                'description' => '返回的错误码（没有错误为空）',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'Latency' => [
                                'description' => 'api请求耗时 (单位毫秒)',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"A4D487A9-A456-5AA5-A9C6-B7BF2889CF74\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Code\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '创建算法资源',
        ],
        'GetFunctionCurrentVersion' => [
            'summary' => '获取当前功能新建实例时使用的版本信息。',
            'path' => '/v4/openapi/functions/{functionName}/current-version',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '功能名称，支持的模型有：'."\n"
                            ."\n"
                            .'- CTR模型：ctr'."\n"
                            .'- 人气模型：pop'."\n"
                            .'- 类目模型：category'."\n"
                            .'- 热词模型：hot'."\n"
                            .'- 底纹模型：hint'."\n"
                            .'- 下拉提示模型：suggest'."\n"
                            .'- 分词模型：analyzer'."\n"
                            .'- 词权重模型：termweight',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr',
                    ],
                ],
                [
                    'name' => 'modelType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模型类型，不同功能对应的模型类型如下：'."\n"
                            ."\n"
                            .'- CTR模型：tf_checkpoint'."\n"
                            .'- 人气模型：pop'."\n"
                            .'- 类目模型：offline_inference'."\n"
                            .'- 热词模型：offline_inference'."\n"
                            .'- 底纹模型：offline_inference'."\n"
                            .'- 下拉提示模型：offline_inference'."\n"
                            .'- 分词模型：text'."\n"
                            .'- 词权重模型：tf_checkpoint',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'pop' => '人气模型',
                            'offline_inference' => '热词底纹\\类目预测',
                            'tf_checkpoint' => 'ctr\\定制词权重等',
                            'text' => '定制分词',
                        ],
                        'example' => 'tf_checkpoint',
                    ],
                ],
                [
                    'name' => 'functionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '功能类型：'."\n"
                            ."\n"
                            .'- PAAS （默认）'."\n"
                            .'- SAAS',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PAAS',
                    ],
                ],
                [
                    'name' => 'domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业，默认为空，表示通用版',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'education' => '教育行业',
                            'ecommerce' => '电商行业',
                            'community' => '内容社区',
                        ],
                        'example' => 'ecommerce',
                    ],
                ],
                [
                    'name' => 'category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '垂类，默认为空',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'general' => '通用',
                            'question' => '教育搜题',
                            'it' => 'IT内容',
                        ],
                        'example' => 'general',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '1638157479281',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'version not exist.',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Version.NotExist',
                            ],
                            'Result' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'FunctionName' => [
                                        'description' => '功能名称',
                                        'type' => 'string',
                                        'example' => 'ctr',
                                    ],
                                    'FunctionType' => [
                                        'description' => '功能类型：'."\n"
                                            ."\n"
                                            .'- PAAS'."\n"
                                            .'- SAAS',
                                        'type' => 'string',
                                        'example' => 'PAAS',
                                    ],
                                    'ModelType' => [
                                        'description' => '模型类型',
                                        'type' => 'string',
                                        'example' => 'tf_checkpoint',
                                    ],
                                    'VersionConfig' => [
                                        'description' => '配置信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'CreateParameters' => [
                                                'description' => '创建实例时使用的参数列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '参数体',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Name' => [
                                                            'description' => 'name',
                                                            'type' => 'string',
                                                            'example' => 'params1',
                                                        ],
                                                        'Required' => [
                                                            'description' => 'required',
                                                            'type' => 'string',
                                                            'example' => 'true',
                                                        ],
                                                    ],
                                                    'example' => '{                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }',
                                                ],
                                                'example' => '[                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ]',
                                            ],
                                            'Depends' => [
                                                'description' => '实例的依赖项列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '参数体'."\n"
                                                        ."\n",
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Condition' => [
                                                            'description' => '条件',
                                                            'type' => 'string',
                                                            'example' => '""',
                                                        ],
                                                        'Dependency' => [
                                                            'description' => '依赖项',
                                                            'type' => 'string',
                                                            'example' => '""',
                                                        ],
                                                        'Description' => [
                                                            'description' => '描述',
                                                            'type' => 'string',
                                                            'example' => '""',
                                                        ],
                                                    ],
                                                    'example' => '{                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }',
                                                ],
                                                'example' => '[                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ]',
                                            ],
                                            'UsageParameters' => [
                                                'description' => '实例在线使用过程中的参数列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '参数体',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Name' => [
                                                            'description' => 'name',
                                                            'type' => 'string',
                                                            'example' => '""',
                                                        ],
                                                        'Required' => [
                                                            'description' => 'required',
                                                            'type' => 'string',
                                                            'example' => '""',
                                                        ],
                                                    ],
                                                    'example' => '{}',
                                                ],
                                                'example' => '[]',
                                            ],
                                        ],
                                        'example' => '{             "createParameters": [                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ],             "depends": [                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ],             "usageParameters": []         }',
                                    ],
                                    'VersionId' => [
                                        'description' => '版本id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '101',
                                    ],
                                    'VersionName' => [
                                        'description' => '版本名称',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                ],
                                'example' => '{         "versionName": "v1",         "versionId": 101,         "functionName": "ctr",         "modelType": "tf_checkpoint",         "functionType": "PAAS",         "versionConfig": {             "createParameters": [                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ],             "depends": [                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ],             "usageParameters": []         }     }',
                            ],
                            'Latency' => [
                                'description' => '请求耗时（单位ms）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                        'example' => '{     "status": "OK",     "requestId": "",     "httpCode": 200,     "code": "",     "message": "",     "latency": 123,     "result": {         "versionName": "v1",         "versionId": 101,         "functionName": "ctr",         "modelType": "tf_checkpoint",         "functionType": "PAAS",         "versionConfig": {             "createParameters": [                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ],             "depends": [                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ],             "usageParameters": []         }     } }',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"1638157479281\\",\\n  \\"Message\\": \\"version not exist.\\",\\n  \\"Code\\": \\"Version.NotExist\\",\\n  \\"Result\\": {\\n    \\"FunctionName\\": \\"ctr\\",\\n    \\"FunctionType\\": \\"PAAS\\",\\n    \\"ModelType\\": \\"tf_checkpoint\\",\\n    \\"VersionConfig\\": {\\n      \\"CreateParameters\\": [\\n        {\\n          \\"Name\\": \\"params1\\",\\n          \\"Required\\": \\"true\\"\\n        }\\n      ],\\n      \\"Depends\\": [\\n        {\\n          \\"Condition\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Dependency\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Description\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ],\\n      \\"UsageParameters\\": [\\n        {\\n          \\"Name\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Required\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ]\\n    },\\n    \\"VersionId\\": 101,\\n    \\"VersionName\\": \\"v1\\"\\n  },\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '获取当前版本',
            'requestParamsDescription' => '### 示例'."\n"
                .'`GET /v4/openapi/functions/ctr/current-version?modelType=_checkpoint&functionType=PAAS&domain=ecommerce&category=general`',
            'responseParamsDescription' => '### 正常返回示例（热词模型）'."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "status": "OK",'."\n"
                .'    "requestId": "165890826219877085621759",'."\n"
                .'    "latency": 0.049,'."\n"
                .'    "httpCode": 200,'."\n"
                .'    "code": "",'."\n"
                .'    "message": "",'."\n"
                .'    "result": {'."\n"
                .'        "versionId": 37,'."\n"
                .'        "versionName": "v2",'."\n"
                .'        "description": "",'."\n"
                .'        "status": "available",'."\n"
                .'        "functionName": "hot",'."\n"
                .'        "modelType": "offline_inference",'."\n"
                .'        "functionType": "PAAS",'."\n"
                .'        "versionConfig": {'."\n"
                .'            "createParameters": ['."\n"
                .'                {'."\n"
                .'                    "name": "filter",'."\n"
                .'                    "required": "false",'."\n"
                .'                    "validations": "[{\\"preprocess\\": {\\"pattern\\": \\"(\\\\\\\\w+)\\\\\\\\s*(>=|<=|>|<|=|!=)\\\\\\\\s*(\\\\\\\\w+)\\", \\"type\\": \\"regex\\", \\"group\\": 1}, \\"params\\": {\\"data\\": [\\"user_id\\", \\"biz_type\\"], \\"type\\": \\"trival\\"}, \\"class\\": \\"EnumerateRule\\"}]",'."\n"
                .'                    "value": "{\\"component\\":\\"Input\\",\\"attributes\\":{\\"defaultValue\\":\\"\\",\\"dataSource\\":\\"\\"}}",'."\n"
                .'                    "valueSplit": ","'."\n"
                .'                }'."\n"
                .'            ],'."\n"
                .'            "usageParameters": ['."\n"
                .'                {'."\n"
                .'                    "name": "allow_dict_id",'."\n"
                .'                    "required": "false",'."\n"
                .'                    "validations": "[{\\"params\\": {\\"restrictions\\": \\"type=hot_allowlist\\", \\"type\\": \\"passthrough\\", \\"dataSource\\": \\"dicts\\"}, \\"class\\": \\"EnumerateRule\\"}]",'."\n"
                .'                    "value": "{\\"component\\":\\"Select\\",\\"attributes\\":{\\"defaultValue\\":\\"\\",\\"dataSource\\":\\"\\"}}"'."\n"
                .'                },'."\n"
                .'                {'."\n"
                .'                    "name": "deny_dict_id",'."\n"
                .'                    "required": "false",'."\n"
                .'                    "validations": "[{\\"params\\": {\\"restrictions\\": \\"type=hot_denylist\\", \\"type\\": \\"passthrough\\", \\"dataSource\\": \\"dicts\\"}, \\"class\\": \\"EnumerateRule\\"}]",'."\n"
                .'                    "value": "{\\"component\\":\\"Select\\",\\"attributes\\":{\\"defaultValue\\":\\"\\",\\"dataSource\\":\\"\\"}}"'."\n"
                .'                }'."\n"
                .'            ],'."\n"
                .'            "depends": ['."\n"
                .'                {'."\n"
                .'                    "condition": "integrity_level >= 1",'."\n"
                .'                    "dependency": "integrity_level",'."\n"
                .'                    "description": "数据完整度至少为L1级"'."\n"
                .'                }'."\n"
                .'            ],'."\n"
                .'            "deployment": "",'."\n"
                .'            "dagTemplate": "opensearch_hot_train"'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetFunctionVersion' => [
            'summary' => '根据版本ID获取版本信息。',
            'path' => '/v4/openapi/functions/{functionName}/versions/{versionId}',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr',
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '版本id',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '请求状态',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '1638157479281',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'version not exist.',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Version.NotExist',
                            ],
                            'Result' => [
                                'description' => '结果体',
                                'type' => 'object',
                                'properties' => [
                                    'FunctionName' => [
                                        'description' => '功能名称',
                                        'type' => 'string',
                                        'example' => 'ctr',
                                    ],
                                    'FunctionType' => [
                                        'description' => '功能类型'."\n"
                                            ."\n"
                                            .'- PAAS'."\n"
                                            .'- SAAS',
                                        'type' => 'string',
                                        'example' => 'PAAS',
                                    ],
                                    'ModelType' => [
                                        'description' => '模型类型',
                                        'type' => 'string',
                                        'example' => 'tf_checkpoint',
                                    ],
                                    'VersionConfig' => [
                                        'description' => '配置信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'CreateParameters' => [
                                                'description' => '创建实例时使用的参数列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '参数体',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Name' => [
                                                            'description' => 'Name',
                                                            'type' => 'string',
                                                            'example' => 'params1',
                                                        ],
                                                        'Required' => [
                                                            'description' => 'Required',
                                                            'type' => 'string',
                                                            'example' => 'true',
                                                        ],
                                                    ],
                                                    'example' => '{}',
                                                ],
                                                'example' => '[                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ]',
                                            ],
                                            'Depends' => [
                                                'description' => '实例的依赖项列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '参数体',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Condition' => [
                                                            'description' => '条件',
                                                            'type' => 'string',
                                                            'example' => '""',
                                                        ],
                                                        'Dependency' => [
                                                            'description' => '依赖项',
                                                            'type' => 'string',
                                                            'example' => '""',
                                                        ],
                                                        'Description' => [
                                                            'description' => '描述',
                                                            'type' => 'string',
                                                            'example' => '""',
                                                        ],
                                                    ],
                                                    'example' => '{}',
                                                ],
                                                'example' => '[                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ]',
                                            ],
                                            'UsageParameters' => [
                                                'description' => '实例在线使用过程中的参数列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '参数体',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Name' => [
                                                            'description' => 'Name',
                                                            'type' => 'string',
                                                            'example' => '""',
                                                        ],
                                                        'Required' => [
                                                            'description' => 'Required',
                                                            'type' => 'string',
                                                            'example' => '""',
                                                        ],
                                                    ],
                                                    'example' => '{}',
                                                ],
                                                'example' => '[]',
                                            ],
                                        ],
                                        'example' => '{             "createParameters": [                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ],             "depends": [                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ],             "usageParameters": []         }',
                                    ],
                                    'VersionId' => [
                                        'description' => '版本ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '101',
                                    ],
                                    'VersionName' => [
                                        'description' => '版本名称',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                ],
                                'example' => '[]',
                            ],
                            'Latency' => [
                                'description' => '任务最大运行时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"1638157479281\\",\\n  \\"Message\\": \\"version not exist.\\",\\n  \\"Code\\": \\"Version.NotExist\\",\\n  \\"Result\\": {\\n    \\"FunctionName\\": \\"ctr\\",\\n    \\"FunctionType\\": \\"PAAS\\",\\n    \\"ModelType\\": \\"tf_checkpoint\\",\\n    \\"VersionConfig\\": {\\n      \\"CreateParameters\\": [\\n        {\\n          \\"Name\\": \\"params1\\",\\n          \\"Required\\": \\"true\\"\\n        }\\n      ],\\n      \\"Depends\\": [\\n        {\\n          \\"Condition\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Dependency\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Description\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ],\\n      \\"UsageParameters\\": [\\n        {\\n          \\"Name\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Required\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ]\\n    },\\n    \\"VersionId\\": 101,\\n    \\"VersionName\\": \\"v1\\"\\n  },\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '获取版本详情',
            'requestParamsDescription' => '### 示例'."\n"
                .'`GET /v4/openapi/functions/ctr/version/101`',
            'responseParamsDescription' => '### 正常返回示例'."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "status": "OK",'."\n"
                .'    "requestId": "",'."\n"
                .'    "httpCode": 200,'."\n"
                .'    "code": "",'."\n"
                .'    "message": "",'."\n"
                .'    "latency": 123,'."\n"
                .'    "result": {'."\n"
                .'        "versionName": "v1",'."\n"
                .'        "versionId": 101,'."\n"
                .'        "functionName": "ctr",'."\n"
                .'        "modelType": "tf_checkpoint",'."\n"
                .'        "functionType": "PAAS",'."\n"
                .'        "versionConfig": {'."\n"
                .'            "createParameters": ['."\n"
                .'                {'."\n"
                .'                    "name": "params1",'."\n"
                .'                    "required": "true",'."\n"
                .'                    "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",'."\n"
                .'                    "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"'."\n"
                .'                }'."\n"
                .'            ],'."\n"
                .'            "depends": ['."\n"
                .'                {'."\n"
                .'                    "dependency": "依赖项",'."\n"
                .'                    "condition": "条件",'."\n"
                .'                    "description": ""'."\n"
                .'                }'."\n"
                .'            ],'."\n"
                .'            "usageParameters": []'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetFunctionDefaultInstance' => [
            'summary' => '获取app默认使用的算法实例。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/default-instance',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '请求状态',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '062BA91F-A568-5779-8A5B-9E62C9BB3DC1',
                            ],
                            'Message' => [
                                'description' => '返回的错误信息',
                                'type' => 'string',
                                'example' => 'default instance not set.',
                            ],
                            'Code' => [
                                'description' => '返回的状态码',
                                'type' => 'string',
                                'example' => 'DefaultInstance.NotExist',
                            ],
                            'Result' => [
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceName' => [
                                        'description' => '默认实例名称',
                                        'type' => 'string',
                                        'example' => 'model1',
                                    ],
                                ],
                                'example' => '{\'Pagination\': {\'TotalCount\': 0, \'PageNumber\': 1, \'PageSize\': 10}, \'AntConsortiums\': []}',
                            ],
                            'Latency' => [
                                'description' => '默认运行时间',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                            'InstanceName' => [
                                'title' => '实例名称',
                                'description' => '实例名称',
                                'type' => 'string',
                                'example' => 'sh-bp1oi31w1jn4ctdyv',
                                'readOnly' => false,
                            ],
                            'FunctionName' => [
                                'title' => '功能名称',
                                'description' => '功能名称',
                                'type' => 'string',
                                'example' => 'cdn_waf',
                                'readOnly' => true,
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"062BA91F-A568-5779-8A5B-9E62C9BB3DC1\\",\\n  \\"Message\\": \\"default instance not set.\\",\\n  \\"Code\\": \\"DefaultInstance.NotExist\\",\\n  \\"Result\\": {\\n    \\"InstanceName\\": \\"model1\\"\\n  },\\n  \\"Latency\\": 123,\\n  \\"InstanceName\\": \\"sh-bp1oi31w1jn4ctdyv\\",\\n  \\"FunctionName\\": \\"cdn_waf\\"\\n}","type":"json"}]',
            'title' => '获取默认实例',
            'requestParamsDescription' => '### 示例'."\n"
                .'`GET /v4/openapi/app-groups/my-app/functions/pop/default-instances`',
            'responseParamsDescription' => '### 正常返回示例'."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "status": "OK",'."\n"
                .'    "requestId": "",'."\n"
                .'    "httpCode": 200,'."\n"
                .'    "code": "",'."\n"
                .'    "message": "",'."\n"
                .'    "latency": 123,'."\n"
                .'    "result": {'."\n"
                .'        "instanceName": "pop_test"'."\n"
                .'    }'."\n"
                .'}'."\n"
                .'```',
        ],
        'UpdateFunctionDefaultInstance' => [
            'summary' => '为指定app设置默认使用的算法实例，自动覆盖上一次设置的默认实例'."\n"
                .'空表示取消默认实例。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/default-instance',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body参数',
                        'description' => 'body参数',
                        'type' => 'object',
                        'properties' => [
                            'instanceName' => [
                                'title' => '实例名称',
                                'description' => '实例名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => '"pop_test"',
                            ],
                        ],
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '"app_group_name"',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pop',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'response',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '请求状态',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'A4D487A9-A456-5AA5-A9C6-B7BF2889CF74',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'DefaultInstance.SetFail',
                            ],
                            'Latency' => [
                                'description' => '请求耗时（单位毫秒）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"A4D487A9-A456-5AA5-A9C6-B7BF2889CF74\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"DefaultInstance.SetFail\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '设置默认实例',
        ],
        'ListFunctionTasks' => [
            'summary' => '获取训练记录。返回结果按开始时间降序排序。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}/tasks',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr',
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_model_2',
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务状态：'."\n"
                            ."\n"
                            .'- success'."\n"
                            .'- failed'."\n"
                            .'- running',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'success',
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '起始时间大于设定时间，单位毫秒',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582214400',
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间小于设定时间，单位毫秒',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1582646399',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码（默认为1）',
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
                        'description' => '每页大小（默认为1）',
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
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'TotalCount' => [
                                'description' => '符合要求的总记录数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '1638157479281',
                            ],
                            'Message' => [
                                'description' => '请求返回信息',
                                'type' => 'string',
                                'example' => 'fail',
                            ],
                            'Code' => [
                                'description' => 'HTTP状态码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果体',
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '结束时间，单位毫秒，0表示未结束',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100010',
                                        ],
                                        'ExtendInfo' => [
                                            'description' => 'json string，包含模型评价信息、训练错误信息等。',
                                            'type' => 'string',
                                            'example' => '{\\"recall\\":91,\\"errors\\":[]}',
                                        ],
                                        'FunctionName' => [
                                            'description' => '功能名称',
                                            'type' => 'string',
                                            'example' => 'ctr',
                                        ],
                                        'Progress' => [
                                            'description' => '进度，90表示90%',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '90',
                                        ],
                                        'RunId' => [
                                            'description' => '任务ID',
                                            'type' => 'string',
                                            'example' => 'trigger__2021-03-05T12:18:41',
                                        ],
                                        'StartTime' => [
                                            'description' => '起始时间，单位毫秒',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100010',
                                        ],
                                        'Status' => [
                                            'description' => '任务状态'."\n"
                                                ."\n"
                                                .'- success'."\n"
                                                .'- failed'."\n"
                                                .'- running',
                                            'type' => 'string',
                                            'example' => 'success',
                                        ],
                                        'Generation' => [
                                            'description' => '第几次迭代',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                    ],
                                    'example' => '{             "functionName": "ctr",             "progress": 100,             "status": "success",             "startTime": 100010,             "endTime": 200020,             "extendInfo": "{\\"recall\\":91,\\"errors\\":[]}",             "runId": "trigger__2021-03-05T12:18:41"         }',
                                ],
                                'example' => '[         {             "functionName": "ctr",             "progress": 100,             "status": "success",             "startTime": 100010,             "endTime": 200020,             "extendInfo": "{\\"recall\\":91,\\"errors\\":[]}",             "runId": "trigger__2021-03-05T12:18:41"         }     ]',
                            ],
                            'Latency' => [
                                'description' => '请求耗时（单位毫秒）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                        'example' => '{     "status": "OK",     "requestId": "",     "httpCode": 200,     "code": "",     "message": "",     "latency": 123,     "totalCount": 1,     "result": [         {             "functionName": "ctr",             "progress": 100,             "status": "success",             "startTime": 100010,             "endTime": 200020,             "extendInfo": "{\\"recall\\":91,\\"errors\\":[]}",             "runId": "trigger__2021-03-05T12:18:41"         }     ] }',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"200\\",\\n  \\"HttpCode\\": 200,\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"1638157479281\\",\\n  \\"Message\\": \\"fail\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Result\\": [\\n    {\\n      \\"EndTime\\": 100010,\\n      \\"ExtendInfo\\": \\"{\\\\\\\\\\\\\\"recall\\\\\\\\\\\\\\":91,\\\\\\\\\\\\\\"errors\\\\\\\\\\\\\\":[]}\\",\\n      \\"FunctionName\\": \\"ctr\\",\\n      \\"Progress\\": 90,\\n      \\"RunId\\": \\"trigger__2021-03-05T12:18:41\\",\\n      \\"StartTime\\": 100010,\\n      \\"Status\\": \\"success\\",\\n      \\"Generation\\": \\"2\\"\\n    }\\n  ],\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '获取训练记录',
            'requestParamsDescription' => '### 示例'."\n"
                .'`GET /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test/tasks`',
            'responseParamsDescription' => '### 正常返回示例'."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "status": "OK",'."\n"
                .'    "requestId": "",'."\n"
                .'    "httpCode": 200,'."\n"
                .'    "code": "",'."\n"
                .'    "message": "",'."\n"
                .'    "latency": 123,'."\n"
                .'    "totalCount": 1,'."\n"
                .'    "result": ['."\n"
                .'        {'."\n"
                .'            "functionName": "ctr",'."\n"
                .'            "progress": 100,'."\n"
                .'            "status": "success",'."\n"
                .'            "startTime": 100010,'."\n"
                .'            "endTime": 200020,'."\n"
                .'            "extendInfo": "{\\"recall\\":91,\\"errors\\":[]}",'."\n"
                .'            "runId": "trigger__2021-03-05T12:18:41",'."\n"
                .'          	"generation": "3"'."\n"
                .'        }'."\n"
                .'    ]'."\n"
                .'}'."\n"
                .'```'."\n",
        ],
        'GetFunctionTask' => [
            'summary' => '获取训练详情。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}/tasks/{generation}',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '功能名称',
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr',
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => '实例名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_model_2',
                    ],
                ],
                [
                    'name' => 'generation',
                    'in' => 'path',
                    'schema' => [
                        'title' => '迭代次数',
                        'description' => '迭代次数',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '请求状态',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A4D487A9-A456-5AA5-A9C6-B7BF2889CF74',
                            ],
                            'Message' => [
                                'description' => '返回的错误信息',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Code' => [
                                'description' => '返回的错误码',
                                'type' => 'string',
                                'example' => 'Task.NotExist',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'EndTime' => [
                                        'description' => '任务结束时间（单位ms）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1647213406267',
                                    ],
                                    'ExtendInfo' => [
                                        'description' => '扩展信息（json string）',
                                        'type' => 'string',
                                        'example' => '{\\"recall\\":91,\\"errors\\":[]}',
                                    ],
                                    'FunctionName' => [
                                        'description' => '功能名称',
                                        'type' => 'string',
                                        'example' => 'ctr',
                                    ],
                                    'Generation' => [
                                        'description' => '迭代次数',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Progress' => [
                                        'description' => '进度，90表示90%',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '90',
                                    ],
                                    'RunId' => [
                                        'description' => '任务ID',
                                        'type' => 'string',
                                        'example' => 'trigger__2021-03-05T12:18:41',
                                    ],
                                    'StartTime' => [
                                        'description' => '任务开始时间（单位ms）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1647212220000',
                                    ],
                                    'Status' => [
                                        'description' => '任务状态'."\n"
                                            ."\n"
                                            .'- success'."\n"
                                            .'- failed'."\n"
                                            .'- running',
                                        'type' => 'string',
                                        'example' => 'success',
                                    ],
                                ],
                            ],
                            'Latency' => [
                                'description' => '请求耗时（单位ms）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"A4D487A9-A456-5AA5-A9C6-B7BF2889CF74\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Code\\": \\"Task.NotExist\\",\\n  \\"Result\\": {\\n    \\"EndTime\\": 1647213406267,\\n    \\"ExtendInfo\\": \\"{\\\\\\\\\\\\\\"recall\\\\\\\\\\\\\\":91,\\\\\\\\\\\\\\"errors\\\\\\\\\\\\\\":[]}\\",\\n    \\"FunctionName\\": \\"ctr\\",\\n    \\"Generation\\": \\"1\\",\\n    \\"Progress\\": 90,\\n    \\"RunId\\": \\"trigger__2021-03-05T12:18:41\\",\\n    \\"StartTime\\": 1647212220000,\\n    \\"Status\\": \\"success\\"\\n  },\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '获取训练详情',
            'requestParamsDescription' => '### 示例'."\n"
                .'`GET /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test/tasks/3`',
            'responseParamsDescription' => '### 正常返回示例'."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "status": "OK",'."\n"
                .'    "requestId": "",'."\n"
                .'    "httpCode": 200,'."\n"
                .'    "code": "",'."\n"
                .'    "message": "",'."\n"
                .'    "latency": 123,'."\n"
                .'    "result": {'."\n"
                .'      "functionName": "ctr",'."\n"
                .'      "progress": 100,'."\n"
                .'      "status": "success",'."\n"
                .'      "startTime": 100010,'."\n"
                .'      "endTime": 200020,'."\n"
                .'      "extendInfo": "{\\"recall\\":91,\\"errors\\":[]}",'."\n"
                .'      "runId": "trigger__2021-03-05T12:18:41",'."\n"
                .'      "generation": "3"'."\n"
                .'    }'."\n"
                .'}'."\n"
                .'```',
        ],
        'DeleteFunctionTask' => [
            'summary' => '删除训练记录。正在训练中的记录无法删除。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}/tasks/{generation}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '功能名称',
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr',
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => '实例名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr_test',
                    ],
                ],
                [
                    'name' => 'generation',
                    'in' => 'path',
                    'schema' => [
                        'title' => '迭代次数',
                        'description' => '迭代次数',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '请求状态',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP响应码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '"1081EB05-473C-5BF4-95BE-6D7CAD5E2213"',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Code' => [
                                'description' => '返回的错误码（没有错误为空）',
                                'type' => 'string',
                                'example' => 'Task.UnableDelete',
                            ],
                            'Latency' => [
                                'description' => 'api请求耗时（单位：毫秒）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"\\\\\\"1081EB05-473C-5BF4-95BE-6D7CAD5E2213\\\\\\"\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Code\\": \\"Task.UnableDelete\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '删除训练记录',
            'responseParamsDescription' => '### 正确返回示例'."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "status": "OK",'."\n"
                .'  "requestId": "",'."\n"
                .'  "httpCode": 200,'."\n"
                .'  "code": "",'."\n"
                .'  "message": "",'."\n"
                .'  "latency": 123,'."\n"
                .'  "result": {}'."\n"
                .'}'."\n"
                .'```',
        ],
        'CreateFunctionTask' => [
            'summary' => '启动一个训练任务。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}/tasks',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr',
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '请求状态',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '1638157990724',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Task.IsRunning',
                            ],
                            'Latency' => [
                                'description' => '请求耗时（单位ms）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                        'example' => '{   "status" : "OK",   "requestId" : "",   "httpCode": 200,   "code": "",   "message": "",   "latency" : 123,   "result" : {}, }',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"1638157990724\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Task.IsRunning\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '启动算法训练',
            'requestParamsDescription' => '### 示例'."\n"
                .'`POST /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test/task`',
            'responseParamsDescription' => '### 正常返回示例'."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "status" : "OK",'."\n"
                .'  "requestId" : "",'."\n"
                .'  "httpCode": 200,'."\n"
                .'  "code": "",'."\n"
                .'  "message": "",'."\n"
                .'  "latency" : 123,'."\n"
                .'  "result" : {},'."\n"
                .'}'."\n"
                .'```',
        ],
        'ListFunctionInstances' => [
            'summary' => '获取用户下，符合条件的所有实例。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '功能名称',
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr',
                    ],
                ],
                [
                    'name' => 'modelType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模型类型',
                        'description' => '模型类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tf_checkpoint',
                    ],
                ],
                [
                    'name' => 'functionType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '功能类型',
                        'description' => '功能类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"PAAS"',
                    ],
                ],
                [
                    'name' => 'source',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例来源',
                        'description' => '实例来源'."\n"
                            ."\n"
                            .'- builtin 系统实例'."\n"
                            .'- user 用户实例 （默认）'."\n"
                            .'- all 全部实例',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码',
                        'description' => '页码，默认值为1',
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
                        'title' => '每页大小',
                        'description' => '每页大小，默认值为10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'output',
                    'in' => 'query',
                    'schema' => [
                        'title' => '返回信息的丰富度',
                        'description' => '返回信息的丰富度'."\n"
                            .' - normal：显示createParameters, cron等信息（默认）'."\n"
                            .'- simple：只显示基本信息'."\n"
                            .'- detail：返回训练任务详细信息',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'normal',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '请求状态'."\n",
                                'type' => 'string',
                                'example' => '"OK"',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'TotalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'A4D487A9-A456-5AA5-A9C6-B7BF2889CF74',
                            ],
                            'Message' => [
                                'description' => '错误信息，正常为空',
                                'type' => 'string',
                                'example' => 'instance not exist.',
                            ],
                            'Code' => [
                                'description' => '错误码，正常为空',
                                'type' => 'string',
                                'example' => 'Instance.NotExist',
                            ],
                            'Result' => [
                                'description' => '结果列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Belongs' => [
                                            'description' => '	实例归属信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Category' => [
                                                    'description' => '垂类',
                                                    'type' => 'string',
                                                    'example' => '"general"',
                                                ],
                                                'Domain' => [
                                                    'description' => '行业',
                                                    'type' => 'string',
                                                    'example' => '"ecommerce"',
                                                ],
                                                'Language' => [
                                                    'description' => '适用的语种缩写',
                                                    'type' => 'string',
                                                    'example' => '"zh"	',
                                                ],
                                            ],
                                            'example' => '{}',
                                        ],
                                        'CreateParameters' => [
                                            'description' => '实例的参数列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '参数体',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '名字',
                                                        'type' => 'string',
                                                        'example' => '"param1"',
                                                    ],
                                                    'Value' => [
                                                        'description' => '值',
                                                        'type' => 'string',
                                                        'example' => '"value1"',
                                                    ],
                                                ],
                                                'example' => '{}',
                                            ],
                                            'example' => '[]',
                                        ],
                                        'UsageParameters' => [
                                            'description' => '使用参数列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '参数体',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '参数名称',
                                                        'type' => 'string',
                                                        'example' => 'use_param1',
                                                    ],
                                                    'Value' => [
                                                        'description' => '参数值',
                                                        'type' => 'string',
                                                        'example' => 'value1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1234',
                                        ],
                                        'Cron' => [
                                            'description' => '训练信息，cron语法（Minutes Hours DayofMonth Month DayofWeek），为空表示不进行周期训练',
                                            'type' => 'string',
                                            'example' => '0 3 ? * 0,1,3,5 (周日，周一，周三，周五凌晨3点)',
                                        ],
                                        'Description' => [
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => '" "',
                                        ],
                                        'ExtendInfo' => [
                                            'description' => '扩展信息，json string，包含模型评价信息，错误信息等',
                                            'type' => 'string',
                                            'example' => '"{\\"dataReport\\":{},\\"errors\\":{}}"',
                                        ],
                                        'FunctionName' => [
                                            'description' => '功能名称',
                                            'type' => 'string',
                                            'example' => '"ctr"',
                                        ],
                                        'FunctionType' => [
                                            'description' => '功能类型',
                                            'type' => 'string',
                                            'example' => '"PAAS"',
                                        ],
                                        'InstanceName' => [
                                            'description' => '实例名称',
                                            'type' => 'string',
                                            'example' => '"ctr_test"',
                                        ],
                                        'ModelType' => [
                                            'description' => '模型类型',
                                            'type' => 'string',
                                            'example' => '"tf_checkpoint"',
                                        ],
                                        'Source' => [
                                            'description' => '实例来源'."\n"
                                                .'- user 用户实例'."\n"
                                                .'- builtin 内置实例',
                                            'type' => 'string',
                                            'example' => '"user"',
                                        ],
                                        'Status' => [
                                            'description' => '实例状态'."\n"
                                                ."\n"
                                                .'1. unavailable: 暂无可用模型（需要训练）'."\n"
                                                .'2. available： 可用',
                                            'type' => 'string',
                                            'example' => 'available',
                                        ],
                                        'VersionId' => [
                                            'description' => '版本ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                    ],
                                    'example' => '{}',
                                ],
                                'example' => '[]',
                            ],
                            'Latency' => [
                                'description' => 'api请求耗时 （单位毫秒）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"\\\\\\"OK\\\\\\"\\",\\n  \\"HttpCode\\": 200,\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"A4D487A9-A456-5AA5-A9C6-B7BF2889CF74\\",\\n  \\"Message\\": \\"instance not exist.\\",\\n  \\"Code\\": \\"Instance.NotExist\\",\\n  \\"Result\\": [\\n    {\\n      \\"Belongs\\": {\\n        \\"Category\\": \\"\\\\\\"general\\\\\\"\\",\\n        \\"Domain\\": \\"\\\\\\"ecommerce\\\\\\"\\",\\n        \\"Language\\": \\"\\\\\\"zh\\\\\\"\\\\t\\"\\n      },\\n      \\"CreateParameters\\": [\\n        {\\n          \\"Name\\": \\"\\\\\\"param1\\\\\\"\\",\\n          \\"Value\\": \\"\\\\\\"value1\\\\\\"\\"\\n        }\\n      ],\\n      \\"UsageParameters\\": [\\n        {\\n          \\"Name\\": \\"use_param1\\",\\n          \\"Value\\": \\"value1\\"\\n        }\\n      ],\\n      \\"CreateTime\\": 1234,\\n      \\"Cron\\": \\"0 3 ? * 0,1,3,5 (周日，周一，周三，周五凌晨3点)\\",\\n      \\"Description\\": \\"\\\\\\" \\\\\\"\\",\\n      \\"ExtendInfo\\": \\"\\\\\\"{\\\\\\\\\\\\\\"dataReport\\\\\\\\\\\\\\":{},\\\\\\\\\\\\\\"errors\\\\\\\\\\\\\\":{}}\\\\\\"\\",\\n      \\"FunctionName\\": \\"\\\\\\"ctr\\\\\\"\\",\\n      \\"FunctionType\\": \\"\\\\\\"PAAS\\\\\\"\\",\\n      \\"InstanceName\\": \\"\\\\\\"ctr_test\\\\\\"\\",\\n      \\"ModelType\\": \\"\\\\\\"tf_checkpoint\\\\\\"\\",\\n      \\"Source\\": \\"\\\\\\"user\\\\\\"\\",\\n      \\"Status\\": \\"available\\",\\n      \\"VersionId\\": 123\\n    }\\n  ],\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '获取实例列表',
            'requestParamsDescription' => '### 示例'."\n"
                .'`GET /v4/openapi/app-groups/my-app/functions/ctr/instances?source=all&output=simple`',
            'responseParamsDescription' => '### 正常返回结果：'."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "status": "OK",'."\n"
                .'    "requestId": "A4D487A9-A456-5AA5-A9C6-B7BF2889CF74",'."\n"
                .'    "httpCode": 200,'."\n"
                .'    "code": "",'."\n"
                .'    "message": "",'."\n"
                .'    "latency": 123,'."\n"
                .'    "totalCount": 2,'."\n"
                .'    "result": ['."\n"
                .'        {'."\n"
                .'            "versionId": 100,'."\n"
                .'            "instanceName": "instance_1",'."\n"
                .'            "functionName": "hot",'."\n"
                .'            "functionType": "PAAS",'."\n"
                .'            "modelType": "offline_inference",'."\n"
                .'            "description": "",'."\n"
                .'            "status": "available",'."\n"
                .'            "belongs": {'."\n"
                .'                "domain": "ecommerce",'."\n"
                .'                "category": "general",'."\n"
                .'                "language": "zh"'."\n"
                .'            },'."\n"
                .'            "createTime": 100010,'."\n"
                .'            "source": "user"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'            "versionId": 100,'."\n"
                .'            "instanceName": "instance_2",'."\n"
                .'            "functionName": "hot",'."\n"
                .'            "functionType": "PAAS",'."\n"
                .'            "modelType": "offline_inference",'."\n"
                .'            "description": "",'."\n"
                .'            "status": "available",'."\n"
                .'            "belongs": {'."\n"
                .'                "domain": "ecommerce",'."\n"
                .'                "category": "general",'."\n"
                .'                "language": "zh"'."\n"
                .'            },'."\n"
                .'            "createTime": 200020,'."\n"
                .'            "source": "user",'."\n"
                .'            "default": true'."\n"
                .'        }'."\n"
                .'    ]'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetFunctionInstance' => [
            'summary' => '根据实例名称获取实例详情。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}',
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
            'consumes' => [],
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '150057101',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr',
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '实例名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr_test',
                    ],
                ],
                [
                    'name' => 'output',
                    'in' => 'query',
                    'schema' => [
                        'description' => '控制返回信息的丰富度：'."\n"
                            ."\n"
                            .'- simple：只显示基本信息'."\n"
                            .'- normal：显示createParameters, cron等信息（默认）'."\n"
                            .'- detail: 返回训练任务信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'detail',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '请求状态',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '68ED4E1B-92B8-5821-A886-9C90686139EB',
                            ],
                            'Message' => [
                                'description' => '返回的错误信息',
                                'type' => 'string',
                                'example' => 'instance not exist.',
                            ],
                            'Code' => [
                                'description' => '返回的错误码（没有错误为空）',
                                'type' => 'string',
                                'example' => 'Instance.NotExist',
                            ],
                            'Result' => [
                                'description' => '实例详情',
                                'type' => 'object',
                                'properties' => [
                                    'Belongs' => [
                                        'description' => '所属信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'Category' => [
                                                'description' => '垂类',
                                                'type' => 'string',
                                                'example' => 'general',
                                            ],
                                            'Domain' => [
                                                'description' => '行业',
                                                'type' => 'string',
                                                'example' => 'ecommerce',
                                            ],
                                            'Language' => [
                                                'description' => '适用的语种缩写',
                                                'type' => 'string',
                                                'example' => 'zh（默认）',
                                            ],
                                        ],
                                    ],
                                    'CreateParameters' => [
                                        'description' => '创建参数列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '参数体',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '参数名称',
                                                    'type' => 'string',
                                                    'example' => 'param1',
                                                ],
                                                'Value' => [
                                                    'description' => '参数值',
                                                    'type' => 'string',
                                                    'example' => 'value1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'UsageParameters' => [
                                        'description' => '使用参数列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '参数体',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '参数名称',
                                                    'type' => 'string',
                                                    'example' => 'use_param1',
                                                ],
                                                'Value' => [
                                                    'description' => '参数值',
                                                    'type' => 'string',
                                                    'example' => 'value1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间 （单位毫秒）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1234',
                                    ],
                                    'Cron' => [
                                        'description' => '训练信息，cron语法（Minutes Hours DayofMonth Month DayofWeek），为空表示不进行周期训练',
                                        'type' => 'string',
                                        'example' => '0 3 ? * 0,1,3,5 (周日，周一，周三，周五凌晨3点)',
                                    ],
                                    'Description' => [
                                        'description' => '实例描述',
                                        'type' => 'string',
                                        'example' => 'instance descriptions',
                                    ],
                                    'ExtendInfo' => [
                                        'description' => '扩展信息（json string）',
                                        'type' => 'string',
                                        'example' => '{\\"dataReport\\":{},\\"errors\\":{}}',
                                    ],
                                    'FunctionName' => [
                                        'description' => '功能名称',
                                        'type' => 'string',
                                        'example' => 'ctr',
                                    ],
                                    'FunctionType' => [
                                        'description' => '功能类型',
                                        'type' => 'string',
                                        'example' => 'PAAS',
                                    ],
                                    'InstanceName' => [
                                        'description' => '实例名称',
                                        'type' => 'string',
                                        'example' => 'ctr_test',
                                    ],
                                    'ModelType' => [
                                        'description' => '模型类型',
                                        'type' => 'string',
                                        'example' => 'tf_checkpoint',
                                    ],
                                    'Source' => [
                                        'description' => '实例来源'."\n"
                                            ."\n"
                                            .'- user 用户实例'."\n"
                                            .'- builtin 内置实例',
                                        'type' => 'string',
                                        'example' => 'user',
                                    ],
                                    'Status' => [
                                        'description' => '实例状态'."\n"
                                            ."\n"
                                            .'1. unavailable: 暂无可用模型（需要训练）'."\n"
                                            .'2. available： 可用',
                                        'type' => 'string',
                                        'example' => 'available',
                                    ],
                                    'Task' => [
                                        'description' => '训练任务信息（没有任务则不显示）',
                                        'type' => 'object',
                                        'properties' => [
                                            'DagStatus' => [
                                                'description' => '任务状态'."\n"
                                                    ."\n"
                                                    .'- "success"：成功'."\n"
                                                    .'- "failed"：失败'."\n"
                                                    .'- "untrained": 待训练'."\n"
                                                    .'- "pending": 调度中'."\n"
                                                    .'- "running"：训练中',
                                                'type' => 'string',
                                                'example' => 'success',
                                            ],
                                            'LastRunTime' => [
                                                'description' => '上一次运行时间，单位：毫秒',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1234',
                                            ],
                                        ],
                                    ],
                                    'VersionId' => [
                                        'description' => '版本id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '101',
                                    ],
                                ],
                                'example' => '{}',
                            ],
                            'Latency' => [
                                'description' => 'api请求耗时（单位：毫秒）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"68ED4E1B-92B8-5821-A886-9C90686139EB\\",\\n  \\"Message\\": \\"instance not exist.\\",\\n  \\"Code\\": \\"Instance.NotExist\\",\\n  \\"Result\\": {\\n    \\"Belongs\\": {\\n      \\"Category\\": \\"general\\",\\n      \\"Domain\\": \\"ecommerce\\",\\n      \\"Language\\": \\"zh（默认）\\"\\n    },\\n    \\"CreateParameters\\": [\\n      {\\n        \\"Name\\": \\"param1\\",\\n        \\"Value\\": \\"value1\\"\\n      }\\n    ],\\n    \\"UsageParameters\\": [\\n      {\\n        \\"Name\\": \\"use_param1\\",\\n        \\"Value\\": \\"value1\\"\\n      }\\n    ],\\n    \\"CreateTime\\": 1234,\\n    \\"Cron\\": \\"0 3 ? * 0,1,3,5 (周日，周一，周三，周五凌晨3点)\\",\\n    \\"Description\\": \\"instance descriptions\\",\\n    \\"ExtendInfo\\": \\"{\\\\\\\\\\\\\\"dataReport\\\\\\\\\\\\\\":{},\\\\\\\\\\\\\\"errors\\\\\\\\\\\\\\":{}}\\",\\n    \\"FunctionName\\": \\"ctr\\",\\n    \\"FunctionType\\": \\"PAAS\\",\\n    \\"InstanceName\\": \\"ctr_test\\",\\n    \\"ModelType\\": \\"tf_checkpoint\\",\\n    \\"Source\\": \\"user\\",\\n    \\"Status\\": \\"available\\",\\n    \\"Task\\": {\\n      \\"DagStatus\\": \\"success\\",\\n      \\"LastRunTime\\": 1234\\n    },\\n    \\"VersionId\\": 101\\n  },\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '获取实例详情',
            'requestParamsDescription' => '### 示例'."\n"
                .'`GET /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test?output=detail`',
            'responseParamsDescription' => '### 正常返回示例：'."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "status": "OK",'."\n"
                .'    "requestId": "",'."\n"
                .'    "httpCode": 200,'."\n"
                .'    "code": "",'."\n"
                .'    "message": "",'."\n"
                .'    "latency": 123,'."\n"
                .'    "result": {'."\n"
                .'        "versionId": 100,'."\n"
                .'        "instanceName": "ctr_test",'."\n"
                .'        "functionName": "ctr",'."\n"
                .'        "functionType": "PAAS",'."\n"
                .'        "modelType": "tf_checkpoint",'."\n"
                .'        "description": "测试",'."\n"
                .'        "status": "available",'."\n"
                .'        "belongs": {'."\n"
                .'            "domain": "ecommerce",'."\n"
                .'            "category": "general",'."\n"
                .'            "language": "zh"'."\n"
                .'        },'."\n"
                .'        "createTime": 100010,'."\n"
                .'        "createParameters": ['."\n"
                .'            {'."\n"
                .'                "name": "param1",'."\n"
                .'                "value": "val1"'."\n"
                .'            }'."\n"
                .'        ],'."\n"
                .'        "usageParameters": ['."\n"
                .'            {'."\n"
                .'                "name": "use_param1",'."\n"
                .'                "value": "val1"'."\n"
                .'            }'."\n"
                .'        ],'."\n"
                .'        "extendInfo": "{\\"error\\":{},\\"dataReport\\":{}}",'."\n"
                .'        "cron": "",'."\n"
                .'        "task": {'."\n"
                .'            "dagStatus": "running",'."\n"
                .'            "progress": 30,'."\n"
                .'            "lastRunTime": 200020'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'}'."\n"
                .'```',
        ],
        'DeleteFunctionInstance' => [
            'summary' => '删除算法实例，删除前请确保该实例不在使用中，以免影响在线服务。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'opensearch应用名',
                        'description' => 'opensearch应用名',
                        'type' => 'string',
                        'required' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '功能名称',
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '"ctr"',
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => '实例名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '"ctr_test"',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态码'."\n"
                                    ."\n"
                                    .'- OK 成功'."\n"
                                    .'- FAIL 失败',
                                'type' => 'string',
                                'example' => '"OK"',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP响应码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '"1081EB05-473C-5BF4-95BE-6D7CAD5E2213"',
                            ],
                            'Message' => [
                                'description' => '错误信息，正常情况为空',
                                'type' => 'string',
                                'example' => '"instance not exist."',
                            ],
                            'Code' => [
                                'description' => '错误码，正常情况为空',
                                'type' => 'string',
                                'example' => '"Instance.NotExist"',
                            ],
                            'Latency' => [
                                'description' => '请求耗时，单位ms',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"\\\\\\"OK\\\\\\"\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"\\\\\\"1081EB05-473C-5BF4-95BE-6D7CAD5E2213\\\\\\"\\",\\n  \\"Message\\": \\"\\\\\\"instance not exist.\\\\\\"\\",\\n  \\"Code\\": \\"\\\\\\"Instance.NotExist\\\\\\"\\",\\n  \\"Latency\\": 10\\n}","type":"json"}]',
            'title' => '删除算法实例',
            'requestParamsDescription' => '### 示例'."\n"
                .'`DELETE /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test`',
        ],
        'UpdateFunctionInstance' => [
            'summary' => '根据实例名称更新实例信息。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body参数',
                        'description' => 'body参数',
                        'type' => 'object',
                        'properties' => [
                            'cron' => [
                                'title' => '周期训练',
                                'description' => '周期训练信息，cron语法（Minutes Hours DayofMonth Month DayofWeek），为空表示不进行周期训练（默认），其中DayofWeek为0表示星期日',
                                'type' => 'string',
                                'required' => false,
                                'example' => '"0 3 ? * 0,1,3,5"',
                            ],
                            'createParameters' => [
                                'title' => '创建参数',
                                'description' => '创建参数列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '参数体',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'title' => '参数名称',
                                            'description' => '参数名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'title_field',
                                        ],
                                        'value' => [
                                            'title' => '参数值',
                                            'description' => '参数值',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'title',
                                        ],
                                    ],
                                    'required' => false,
                                    'example' => '{}',
                                ],
                                'required' => false,
                                'example' => '{             "name": "title_field",             "value": "title"         }',
                            ],
                            'usageParameters' => [
                                'title' => '使用参数',
                                'description' => '使用参数列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '参数体',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'description' => '参数名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'allow_dict_id',
                                        ],
                                        'value' => [
                                            'description' => '参数值',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '123',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'description' => [
                                'title' => '实例描述',
                                'description' => '实例描述',
                                'type' => 'string',
                                'required' => false,
                                'example' => '测试实例',
                            ],
                        ],
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'opensearch应用名',
                        'description' => 'opensearch应用名',
                        'type' => 'string',
                        'required' => true,
                        'example' => '"app_group_name"',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '功能名称',
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '"ctr"',
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => '实例名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '"ctr_test"',
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
                            'Status' => [
                                'description' => '请求状态'."\n"
                                    ."\n"
                                    .'-     OK 成功'."\n"
                                    .'-     FAIL 失败'."\n",
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '"3A809095-C554-5CF5-8FCE-BE19D4673790"',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '"instance not exist."',
                            ],
                            'Code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '"Instance.NotExist"',
                            ],
                            'Latency' => [
                                'title' => '耗时',
                                'description' => '请求耗时（单位ms）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"\\\\\\"3A809095-C554-5CF5-8FCE-BE19D4673790\\\\\\"\\",\\n  \\"Message\\": \\"\\\\\\"instance not exist.\\\\\\"\\",\\n  \\"Code\\": \\"\\\\\\"Instance.NotExist\\\\\\"\\",\\n  \\"Latency\\": 10\\n}","type":"json"}]',
            'title' => '更新算法实例',
            'requestParamsDescription' => '### 示例（只更新createParameters和cron）'."\n"
                .'`PUT /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test`'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "createParameters": ['."\n"
                .'        {'."\n"
                .'            "name": "param1",'."\n"
                .'            "value": "new value"'."\n"
                .'        }'."\n"
                .'    ],'."\n"
                .'    "cron": ""'."\n"
                .'}'."\n"
                .'```',
        ],
        'CreateFunctionInstance' => [
            'summary' => '创建指定功能的一个算法实例。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'body参数',
                        'description' => 'body参数',
                        'type' => 'object',
                        'properties' => [
                            'instanceName' => [
                                'title' => '实例名称',
                                'description' => '实例名称，度为1-30个字符，以字母开头，可以包含大小写字母、数字和下划线',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ctr_test',
                            ],
                            'modelType' => [
                                'title' => '模型类型',
                                'description' => '模型类型，不同功能对应的模型类型如下：'."\n"
                                    ."\n"
                                    .'- CTR模型：tf_checkpoint'."\n"
                                    .'- 人气模型：pop'."\n"
                                    .'- 类目模型：offline_inference'."\n"
                                    .'- 热词模型：offline_inference'."\n"
                                    .'- 底纹模型：offline_inference'."\n"
                                    .'- 热词模型（实时热搜）：near_realtime'."\n"
                                    .'-  底纹模型（个性化底纹）：near_realtime'."\n"
                                    .'- 下拉提示模型：offline_inference'."\n"
                                    .'- 分词模型：text'."\n"
                                    .'- 词权重模型：tf_checkpoint'."\n"
                                    .'- 同义词模型：offline_inference',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'tf_checkpoint',
                            ],
                            'functionType' => [
                                'title' => '功能类型',
                                'description' => '功能类型：'."\n"
                                    ."\n"
                                    .'- PAAS：（默认）需要训练后才能使用',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PAAS',
                            ],
                            'description' => [
                                'title' => '实例描述',
                                'description' => '描述信息',
                                'type' => 'string',
                                'required' => false,
                                'example' => '测试实例',
                            ],
                            'createParameters' => [
                                'title' => '创建参数',
                                'description' => '创建参数列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '创建参数体',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'title' => '参数名称',
                                            'description' => '参数名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'title_field',
                                        ],
                                        'value' => [
                                            'title' => '参数值',
                                            'description' => '参数值',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'title',
                                        ],
                                    ],
                                    'required' => false,
                                    'example' => '{             "name": "title_field",             "value": "title"         }',
                                ],
                                'required' => false,
                                'example' => '[   { "name": "param1", "value": "val1"   } ]',
                            ],
                            'usageParameters' => [
                                'title' => '使用参数',
                                'description' => '使用参数',
                                'type' => 'array',
                                'items' => [
                                    'description' => '在线使用的参数列表，如黑白名单',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'title' => '参数名称',
                                            'description' => '参数名称',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'allow_dict_id',
                                        ],
                                        'value' => [
                                            'title' => '参数值',
                                            'description' => '参数值',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '123',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'cron' => [
                                'title' => '周期训练',
                                'description' => '周期训练信息，cron语法（Minutes Hours DayofMonth Month DayofWeek），为空表示不进行周期训练（默认），其中DayofWeek 0表示星期日',
                                'type' => 'string',
                                'required' => false,
                                'example' => '0 0 ? * 0,1,2,3,4,5,6',
                            ],
                        ],
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{     "instanceName": "ctr_test",     "modelType": "tf_checkpoint",     "createParameters": [         {             "name": "title_field",             "value": "title"         },         {             "name": "description_field",             "value": ""         },         {             "name": "tags_field",             "value": ""         },         {             "name": "id_field",             "value": "item_id"         },         {             "name": "category_field",             "value": "cate"         }     ],     "description": "测试实例", }',
                    ],
                ],
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '功能名称，支持的模型有：'."\n"
                            ."\n"
                            .'- CTR模型：ctr'."\n"
                            .'- 人气模型：pop'."\n"
                            .'- 类目模型：category'."\n"
                            .'- 热词模型：hot'."\n"
                            .'- 底纹模型：hint'."\n"
                            .'- 下拉提示模型：suggest'."\n"
                            .'- 分词模型：analyzer'."\n"
                            .'- 词权重模型：termweight'."\n"
                            .'- 同义词模型：synonym',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ctr',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'body参数'."\n"
                            ."\n",
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '98724351-D6B2-5D8A-B089-7FFD1821A7E9',
                            ],
                            'Message' => [
                                'description' => '错误信息，正常时为空',
                                'type' => 'string',
                                'example' => 'version not exist.',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Version.NotExist',
                            ],
                            'Latency' => [
                                'description' => '请求耗时，单位ms',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123',
                            ],
                        ],
                        'example' => '{   "status" : "OK",   "requestId" : "",   "httpCode": 200,   "code": "",   "message": "",   "latency" : 123,   "result" : {   } }',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"98724351-D6B2-5D8A-B089-7FFD1821A7E9\\",\\n  \\"Message\\": \\"version not exist.\\",\\n  \\"Code\\": \\"Version.NotExist\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '创建算法实例',
            'description' => '一般先通过[GetFunctionCurrentVersion](~~421377~~)接口获取当前功能使用的最新版本，版本中描述了创建实例所需的参数列表createParameters、usageParameters，以及参数填写要求。',
            'requestParamsDescription' => '### 示例（ctr）'."\n"
                .'```'."\n"
                .'POST /v4/openapi/app-groups/my-app/functions/ctr/instances'."\n"
                .'{'."\n"
                .'    "instanceName": "my_ctr",'."\n"
                .'    "modelType": "tf_checkpoint",'."\n"
                .'    "functionType": "PAAS",'."\n"
                .'    "cron": "0 0 ? * 0,1,3,5",'."\n"
                .'    "description": "",'."\n"
                .'    "createParameters": ['."\n"
                .'        {'."\n"
                .'            "name": "id_field",'."\n"
                .'            "value": "id"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'            "name": "title_field",'."\n"
                .'            "value": "title"'."\n"
                .'        }'."\n"
                .'    ],'."\n"
                .'    "usageParameters": []'."\n"
                .'}'."\n"
                .'```'."\n"
                .'### 示例（hot）'."\n"
                .'```'."\n"
                .'POST /v4/openapi/app-groups/my-app/functions/hot/instances'."\n"
                .'{'."\n"
                .'    "instanceName":"my_hot",'."\n"
                .'    "modelType":"offline_inference",'."\n"
                .'    "functionType":"PAAS",'."\n"
                .'    "createParameters":['."\n"
                .'        {'."\n"
                .'            "name":"filter",'."\n"
                .'            "value":"biz_type != 1"'."\n"
                .'        }'."\n"
                .'    ],'."\n"
                .'    "usageParameters": ['."\n"
                .'        {'."\n"
                .'            "name":"allow_dict_id",'."\n"
                .'            "value":"123"'."\n"
                .'        },'."\n"
                .'        {'."\n"
                .'            "name":"deny_dict_id",'."\n"
                .'            "value":"456"'."\n"
                .'        }'."\n"
                .'    ],'."\n"
                .'    "cron":"12 4 ? * 1,2,3,4,5,6,0"'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => '### 正常返回示例：'."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "status" : "OK",'."\n"
                .'  "requestId" : "98724351-D6B2-5D8A-B089-7FFD1821A7E9",'."\n"
                .'  "httpCode": 200,'."\n"
                .'  "code": "",'."\n"
                .'  "message": "",'."\n"
                .'  "latency" : 123,'."\n"
                .'  "result" : {}'."\n"
                .'}'."\n"
                .'```',
        ],
        'DescribeAppGroup' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'description' => '应用信息',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1575442875',
                                    ],
                                    'currentVersion' => [
                                        'description' => '当前在线版本',
                                        'type' => 'string',
                                        'example' => '110116134',
                                    ],
                                    'pendingSecondRankAlgoDeploymentId' => [
                                        'description' => '部署中的精排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'lockMode' => [
                                        'description' => '锁定状态'."\n"
                                            .'- Unlock 正常'."\n"
                                            .'- LockByExpiration 实例过期自动锁定'."\n"
                                            .'- ManualLock 手动触发锁定',
                                        'type' => 'string',
                                        'example' => 'Unlock',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1578916076',
                                    ],
                                    'id' => [
                                        'description' => '应用ID',
                                        'type' => 'string',
                                        'example' => '110116134',
                                    ],
                                    'chargeType' => [
                                        'description' => '付费类型'."\n"
                                            .'- POSTPAY 后付费（按量付费）'."\n"
                                            .'- PREPAY 预付费（包年包月',
                                        'type' => 'string',
                                        'example' => 'POSTPAY',
                                    ],
                                    'hasPendingQuotaReviewTask' => [
                                        'description' => '是否配额审批中'."\n"
                                            .'- 0：正常'."\n"
                                            .'- 1：配额审批中',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'secondRankAlgoDeploymentId' => [
                                        'description' => '精排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'name' => [
                                        'description' => '应用名称',
                                        'type' => 'string',
                                        'example' => 'os_function_test_v1',
                                    ],
                                    'instanceId' => [
                                        'description' => '实例ID',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'processingOrderId' => [
                                        'description' => '未结束订单号',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'chargingWay' => [
                                        'description' => '计费类型'."\n"
                                            .'- 1：计算资源'."\n"
                                            .'- 2：qps',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'type' => [
                                        'description' => '应用类型'."\n"
                                            .'- standard 标准版'."\n"
                                            .'- advance 老高级版（新应用不支持此类型）'."\n"
                                            .'- enhanced 新高级版',
                                        'type' => 'string',
                                        'example' => 'enhanced',
                                    ],
                                    'status' => [
                                        'description' => '应用状态'."\n"
                                            .'- producing 生产中'."\n"
                                            .'- review_pending 生产审批中'."\n"
                                            .'- config_pending 待配置'."\n"
                                            .'- normal 正常'."\n"
                                            .'- frozen 已冻结',
                                        'type' => 'string',
                                        'example' => 'normal',
                                    ],
                                    'projectId' => [
                                        'description' => 'abtest project 名称',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'switchedTime' => [
                                        'description' => '在线版本切换时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'commodityCode' => [
                                        'description' => '商品CODE',
                                        'type' => 'string',
                                        'example' => 'opensearch',
                                    ],
                                    'expireOn' => [
                                        'description' => '过期时间',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'domain' => [
                                        'description' => '应用所属行业',
                                        'type' => 'string',
                                        'example' => 'ecommerce',
                                    ],
                                    'description' => [
                                        'description' => '应用描述',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'firstRankAlgoDeploymentId' => [
                                        'description' => '粗排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'produced' => [
                                        'description' => '是否生产完成'."\n"
                                            .'- 0：生产中'."\n"
                                            .'- 1：生产完成',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'lockedByExpiration' => [
                                        'description' => '实例过期自动锁定',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'quota' => [
                                        'description' => '应用配额信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'spec' => [
                                                'description' => '规格'."\n"
                                                    .'- opensearch.share.junior 入门型'."\n"
                                                    .'- opensearch.share.common 共享通用型'."\n"
                                                    .'- opensearch.share.compute 共享计算型'."\n"
                                                    .'- opensearch.share.storage 共享存储型'."\n"
                                                    .'- opensearch.private.common 独享通用型'."\n"
                                                    .'- opensearch.private.compute 独享计算型'."\n"
                                                    .'- opensearch.private.storage 独享存储型',
                                                'type' => 'string',
                                                'example' => 'opensearch.share.common',
                                            ],
                                            'docSize' => [
                                                'description' => '存储容量（单位：GB）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'computeResource' => [
                                                'description' => '计算资源（单位：LCU）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                        ],
                                    ],
                                    'tags' => [
                                        'description' => '应用标签',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据源标签。',
                                            'type' => 'object',
                                            'properties' => [
                                                'key' => [
                                                    'description' => '标签键',
                                                    'type' => 'string',
                                                    'example' => 'foo',
                                                ],
                                                'value' => [
                                                    'description' => '标签值',
                                                    'type' => 'string',
                                                    'example' => 'bar',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'resourceGroupId' => [
                                        'description' => '实例所属的资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmoiyerh6nzly',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"created\\": 1575442875,\\n    \\"currentVersion\\": \\"110116134\\",\\n    \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"updated\\": 1578916076,\\n    \\"id\\": \\"110116134\\",\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"hasPendingQuotaReviewTask\\": 0,\\n    \\"secondRankAlgoDeploymentId\\": 0,\\n    \\"name\\": \\"os_function_test_v1\\",\\n    \\"instanceId\\": \\"-\\",\\n    \\"processingOrderId\\": \\"-\\",\\n    \\"chargingWay\\": 1,\\n    \\"type\\": \\"enhanced\\",\\n    \\"status\\": \\"normal\\",\\n    \\"projectId\\": \\"-\\",\\n    \\"switchedTime\\": 0,\\n    \\"commodityCode\\": \\"opensearch\\",\\n    \\"expireOn\\": \\"-\\",\\n    \\"domain\\": \\"ecommerce\\",\\n    \\"description\\": \\"-\\",\\n    \\"firstRankAlgoDeploymentId\\": 0,\\n    \\"produced\\": 1,\\n    \\"lockedByExpiration\\": 0,\\n    \\"quota\\": {\\n      \\"spec\\": \\"opensearch.share.common\\",\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    },\\n    \\"tags\\": [\\n      {\\n        \\"key\\": \\"foo\\",\\n        \\"value\\": \\"bar\\"\\n      }\\n    ],\\n    \\"resourceGroupId\\": \\"rg-acfmoiyerh6nzly\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <id>110116134</id>\\n    <name>os_function_test_v1</name>\\n    <currentVersion>110116134</currentVersion>\\n    <switchedTime>0</switchedTime>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>20</computeResource>\\n        <spec>opensearch.share.common</spec>\\n    </quota>\\n    <chargingWay>1</chargingWay>\\n    <type>enhanced</type>\\n    <versions>100298792</versions>\\n    <projectId/>\\n    <chargeType>POSTPAY</chargeType>\\n    <expireOn/>\\n    <instanceId/>\\n    <commodityCode>opensearch</commodityCode>\\n    <processingOrderId/>\\n    <firstRankAlgoDeploymentId>0</firstRankAlgoDeploymentId>\\n    <secondRankAlgoDeploymentId>0</secondRankAlgoDeploymentId>\\n    <pendingSecondRankAlgoDeploymentId>0</pendingSecondRankAlgoDeploymentId>\\n    <description/>\\n    <produced>1</produced>\\n    <lockedByExpiration>0</lockedByExpiration>\\n    <hasPendingQuotaReviewTask>0</hasPendingQuotaReviewTask>\\n    <created>1575442875</created>\\n    <updated>1578916076</updated>\\n    <status>normal</status>\\n    <lockMode>Unlock</lockMode>\\n</result>","errorExample":""}]',
            'title' => '查看应用实例详情',
            'summary' => '查看一个 OpenSearch 应用详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ValidateDataSources' => [
            'summary' => '验证数据源。',
            'path' => '/v4/openapi/assist/data-sources/validations',
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
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '请求参数，参考：[DataSource](~~170005~~)',
                        'required' => false,
                        '$ref' => '#/components/schemas/DataSource',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '8FA2B338-AFDC-46B4-A132-B5487820C2BF',
                            ],
                            'result' => [
                                'description' => '请求结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果体',
                                    'type' => 'object',
                                    'properties' => [
                                        'code' => [
                                            'description' => '状态码',
                                            'type' => 'string',
                                            'example' => 'SUCCEED',
                                        ],
                                        'message' => [
                                            'description' => '响应信息',
                                            'type' => 'string',
                                            'example' => '校验成功',
                                        ],
                                        'dataSource' => [
                                            'description' => '数据源',
                                            'type' => 'object',
                                            'properties' => [
                                                'tableName' => [
                                                    'description' => '表名',
                                                    'type' => 'string',
                                                    'example' => 'user_activity_decision',
                                                ],
                                                'type' => [
                                                    'description' => '数据源类型',
                                                    'type' => 'string',
                                                    'example' => 'rds',
                                                ],
                                                'parameters' => [
                                                    'description' => '参数体',
                                                    'type' => 'object',
                                                    'example' => '{}',
                                                ],
                                            ],
                                            'example' => '{}',
                                        ],
                                    ],
                                    'example' => '{}',
                                ],
                                'example' => '[]',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8FA2B338-AFDC-46B4-A132-B5487820C2BF\\",\\n  \\"result\\": [\\n    {\\n      \\"code\\": \\"SUCCEED\\",\\n      \\"message\\": \\"校验成功\\",\\n      \\"dataSource\\": {\\n        \\"tableName\\": \\"user_activity_decision\\",\\n        \\"type\\": \\"rds\\",\\n        \\"parameters\\": {}\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '验证数据源',
        ],
        'ReplaceAppGroupCommodityCode' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/actions/to-instance-typed',
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
                'operationType' => 'none',
                'abilityTreeCode' => '55260',
                'abilityTreeNodes' => [
                    'FEATUREopensearch3UFA61',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'AC5F78BA-66B9-545B-9CF1-8F542E682E1F',
                            ],
                            'result' => [
                                'description' => '返回详情结果'."\n"
                                    ."\n",
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1588054131',
                                    ],
                                    'currentVersion' => [
                                        'description' => '当前在线版本',
                                        'type' => 'string',
                                        'example' => '100302903',
                                    ],
                                    'pendingSecondRankAlgoDeploymentId' => [
                                        'description' => '部署中的精排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'type' => [
                                        'description' => '类型',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'chargingWay' => [
                                        'description' => '计费类型'."\n"
                                            .' - 1: 计算资源'."\n"
                                            .' - 2：qps',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'lockMode' => [
                                        'description' => '锁定状态'."\n"
                                            ."\n"
                                            .'- Unlock 正常'."\n"
                                            .'- LockByExpiration 实例过期自动锁定'."\n"
                                            .'- ManualLock 手动触发锁定',
                                        'type' => 'string',
                                        'example' => 'Unlock',
                                    ],
                                    'status' => [
                                        'description' => '状态',
                                        'type' => 'string',
                                        'example' => 'normal',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1581065904',
                                    ],
                                    'chargeType' => [
                                        'description' => '付费类型'."\n"
                                            .'- POSTPAY 后付费（按量付费）'."\n"
                                            .'- PREPAY 预付费（包年包月）',
                                        'type' => 'string',
                                        'example' => 'POSTPAY',
                                    ],
                                    'id' => [
                                        'description' => '应用ID',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'hasPendingQuotaReviewTask' => [
                                        'description' => '是否配额审批中'."\n"
                                            .'- 0：正常'."\n"
                                            .'- 1：配额审批中',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'projectId' => [
                                        'description' => 'abtest project 名称',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'secondRankAlgoDeploymentId' => [
                                        'description' => '精排部署ID',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'commodityCode' => [
                                        'description' => '商品CODE',
                                        'type' => 'string',
                                        'example' => 'opensearch',
                                    ],
                                    'switchedTime' => [
                                        'description' => '在线版本切换时间戳',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1590486386',
                                    ],
                                    'expireOn' => [
                                        'description' => '过期时间',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'description' => [
                                        'description' => '描述',
                                        'type' => 'string',
                                        'example' => '""',
                                    ],
                                    'firstRankAlgoDeploymentId' => [
                                        'description' => '粗排部署id',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'lockedByExpiration' => [
                                        'description' => '实例是否过期自动锁定'."\n"
                                            .'- 0：否'."\n"
                                            .'- 1：是',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'produced' => [
                                        'description' => '是否生产',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'processingOrderId' => [
                                        'description' => '处理中的',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'instanceId' => [
                                        'description' => '请求的实例id',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'versions' => [
                                        'description' => '版本信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '版本信息',
                                            'type' => 'string',
                                            'example' => '-',
                                        ],
                                    ],
                                    'quota' => [
                                        'description' => '配置信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'spec' => [
                                                'description' => '配置型号',
                                                'type' => 'string',
                                                'example' => '-',
                                            ],
                                            'docSize' => [
                                                'description' => '适用于定制应用',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'computeResource' => [
                                                'description' => '配置数量',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20',
                                            ],
                                        ],
                                    ],
                                ],
                                'example' => '{}',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AC5F78BA-66B9-545B-9CF1-8F542E682E1F\\",\\n  \\"result\\": {\\n    \\"created\\": 1588054131,\\n    \\"currentVersion\\": \\"100302903\\",\\n    \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n    \\"type\\": \\"-\\",\\n    \\"chargingWay\\": 1,\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"status\\": \\"normal\\",\\n    \\"updated\\": 1581065904,\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"id\\": \\"-\\",\\n    \\"hasPendingQuotaReviewTask\\": 0,\\n    \\"projectId\\": \\"-\\",\\n    \\"secondRankAlgoDeploymentId\\": 0,\\n    \\"commodityCode\\": \\"opensearch\\",\\n    \\"switchedTime\\": 1590486386,\\n    \\"expireOn\\": \\"-\\",\\n    \\"description\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"firstRankAlgoDeploymentId\\": 0,\\n    \\"lockedByExpiration\\": 0,\\n    \\"produced\\": 0,\\n    \\"name\\": \\"-\\",\\n    \\"processingOrderId\\": \\"-\\",\\n    \\"instanceId\\": \\"-\\",\\n    \\"versions\\": [\\n      \\"-\\"\\n    ],\\n    \\"quota\\": {\\n      \\"spec\\": \\"-\\",\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '应用服务型转实例型',
            'summary' => '应用服务型转实例型。',
        ],
        'ListSortScripts' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app',
                    ],
                ],
                [
                    'name' => 'appVersionId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用下的版本id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '110142366',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '唯一标识一次请求',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                            'result' => [
                                'description' => '脚本列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'type' => [
                                            'description' => '脚本的类型',
                                            'type' => 'string',
                                            'example' => 'cava_script',
                                        ],
                                        'scope' => [
                                            'description' => '脚本的作用范围',
                                            'type' => 'string',
                                            'example' => 'second_rank',
                                        ],
                                        'createTime' => [
                                            'description' => '脚本创建时间',
                                            'type' => 'string',
                                            'example' => '2020-04-02 20:21:14',
                                        ],
                                        'status' => [
                                            'description' => '脚本的状态：'."\n"
                                                ."\n"
                                                .'- configurable：脚本创建成功，还未上传文件'."\n"
                                                .'- not compiled：脚本未编译'."\n"
                                                .'- compile failed：脚本编译失败'."\n"
                                                .'- compile successful：脚本编译成功'."\n"
                                                .'- released：脚本已发布',
                                            'type' => 'string',
                                            'example' => 'released',
                                        ],
                                        'modifyTime' => [
                                            'description' => '脚本最后一次修改时间',
                                            'type' => 'string',
                                            'example' => '2020-04-02 21:21:14',
                                        ],
                                        'scriptName' => [
                                            'description' => '脚本名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": [\\n    {\\n      \\"type\\": \\"cava_script\\",\\n      \\"scope\\": \\"second_rank\\",\\n      \\"createTime\\": \\"2020-04-02 20:21:14\\",\\n      \\"status\\": \\"released\\",\\n      \\"modifyTime\\": \\"2020-04-02 21:21:14\\",\\n      \\"scriptName\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>\\n<result>\\n    <type>cava_script</type>\\n    <scope>second_rank</scope>\\n    <status>released</status>\\n    <createTime>2020-04-02 20:21:14</createTime>\\n    <modifyTime>2020-04-02 21:21:14</modifyTime>\\n</result>","errorExample":""}]',
            'title' => '获取指定版本下所有的排序脚本',
            'summary' => '获取指定版本下所有的排序脚本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ```'."\n"
                .'错误返回'."\n"
                .'{'."\n"
                .'    "requestId" : "ABCDEFGH",'."\n"
                .'        "code":"InvalidAppSpec",'."\n"
                .'    "message":"The cava scripts only support the private spec app.",'."\n"
                .'    "httpCode":400'."\n"
                .'}'."\n"
                .'```',
            'extraInfo' => ' ',
        ],
        'ListDataSourceTables' => [
            'path' => '/v4/openapi/assist/data-sources/{dataSourceType}/tables',
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
                    'name' => 'dataSourceType',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据源类型'."\n"
                            ."\n"
                            .'- rds'."\n"
                            .'- polardb'."\n"
                            .'- odps'."\n"
                            .'- mysql'."\n"
                            .'- drds',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rds',
                    ],
                ],
                [
                    'name' => 'params',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源参数。json字符串，需要urlencode编码。'."\n"
                            ."\n"
                            .'各数据源参数不同，参考：'."\n"
                            ."\n"
                            .'- [rds](~~170005~~)'."\n"
                            .'- [polardb](~~170005~~)'."\n"
                            .'- [odps](~~170005~~)'."\n"
                            .'- [mysql](~~173627~~)'."\n"
                            .'- [drds](~~173627~~)',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '-',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                            'result' => [
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据源表集合',
                                    'type' => 'string',
                                    'example' => '{}',
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    \\"{}\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>cate_test</result>\\n<result>offline_error</result>\\n<result>plugin</result>\\n<result>quota_test</result>\\n<result>smoke</result>\\n<result>smoke_1</result>\\n<result>smoke_2</result>\\n<result>students</result>","errorExample":""}]',
            'title' => '获取指定实例的数据源列表',
            'summary' => '获取指定数据源的所有数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDataSourceTableFields' => [
            'path' => '/v4/openapi/assist/data-sources/{dataSourceType}/fields',
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
                    'name' => 'dataSourceType',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据源类型'."\n"
                            ."\n"
                            .'- rds'."\n"
                            .'- polardb'."\n"
                            .'- odps'."\n"
                            .'- mysql'."\n"
                            .'- drds',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'rds' => 'rds',
                            'mysql' => 'mysql',
                            'odps' => 'odps',
                            'saro' => 'saro',
                            'polardb' => 'polardb',
                        ],
                        'example' => 'rds',
                    ],
                ],
                [
                    'name' => 'params',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据源参数。json字符串，需要urlencode编码。'."\n"
                            ."\n"
                            .'各数据源参数不同，参考：'."\n"
                            ."\n"
                            .'- [rds](~~170005~~)'."\n"
                            .'- [polardb](~~170005~~)'."\n"
                            .'- [odps](~~170005~~)'."\n"
                            .'- [mysql](~~173627~~)'."\n"
                            .'- [drds](~~173627~~)',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'rawType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否返回数据源原始字段类型',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '数据源表集合',
                                'type' => 'object',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '唯一标识一次请求',
                                'type' => 'string',
                                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
                            ],
                        ],
                        'example' => '{}',
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\"\\n}","type":"json"}]',
            'title' => '获取指定数据表的所有字段',
            'summary' => '获取指定数据表的所有字段，为内部接口。',
        ],
        'GetDomain' => [
            'path' => '/v4/openapi/domains/{domainName}',
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
                    'name' => 'domainName',
                    'in' => 'path',
                    'schema' => [
                        'description' => '行业类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ecommerce',
                    ],
                ],
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用的名称或者是应用id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'example' => '-',
                            ],
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '271D5762-32B7-5F0D-B97D-463EB67F1F3B',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"requestId\\": \\"271D5762-32B7-5F0D-B97D-463EB67F1F3B\\"\\n}","type":"json"}]',
            'title' => '获取行业类型	',
            'summary' => '获取行业类型。',
        ],
        'GenerateMergedTable' => [
            'path' => '/v4/openapi/assist/schema/actions/merge',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'spec',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标版本规格（用于独享型特殊限制校验）。'."\n"
                            ."\n"
                            .'默认：opensearch.share.common'."\n"
                            ."\n"
                            .'参考：Quota 的 spec',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"opensearch.share.common"',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'required' => false,
                        '$ref' => '#/components/schemas/Schema',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'primaryKey' => [
                                        'description' => '主键',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'mergeTable' => [
                                        'description' => '合并后的表',
                                        'type' => 'object',
                                        'example' => '-',
                                    ],
                                    'fromTable' => [
                                        'description' => '需要合并的表',
                                        'type' => 'object',
                                        'example' => '-',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": {\\n    \\"primaryKey\\": \\"-\\",\\n    \\"mergeTable\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"fromTable\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>8EF9C2DF-34C3-EDCF-6DEA-0445EE53DA20</requestId>\\n<result>\\n    <mergeTable>\\n        <id>\\n            <name>id</name>\\n            <type>INT</type>\\n            <isPk>1</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </id>\\n        <classid>\\n            <name>classid</name>\\n            <type>INT</type>\\n            <isPk>0</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </classid>\\n        <title>\\n            <name>title</name>\\n            <type>TEXT</type>\\n            <isPk>0</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </title>\\n        <js>\\n            <name>js</name>\\n            <type>TEXT</type>\\n            <isPk>0</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </js>\\n        <classid_1>\\n            <name>classid_1</name>\\n            <type>INT</type>\\n            <isPk>0</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </classid_1>\\n        <infotags>\\n            <name>infotags</name>\\n            <type>TEXT</type>\\n            <isPk>0</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </infotags>\\n    </mergeTable>\\n    <fromTable>\\n        <tables>\\n            <phome_ecms_tuzhi>\\n                <id>\\n                    <name>id</name>\\n                    <type>INT</type>\\n                    <isPk>1</isPk>\\n                    <isMulti>0</isMulti>\\n                </id>\\n                <classid>\\n                    <name>classid</name>\\n                    <type>INT</type>\\n                    <isPk>0</isPk>\\n                    <isMulti>0</isMulti>\\n                </classid>\\n                <title>\\n                    <name>title</name>\\n                    <type>TEXT</type>\\n                    <isPk>0</isPk>\\n                    <isMulti>0</isMulti>\\n                </title>\\n                <js>\\n                    <name>js</name>\\n                    <type>TEXT</type>\\n                    <isPk>0</isPk>\\n                    <isMulti>0</isMulti>\\n                </js>\\n            </phome_ecms_tuzhi>\\n            <phome_ecms_tuzhi_data_1>\\n                <id_1>\\n                    <name>id_1</name>\\n                    <type>INT</type>\\n                    <isPk>1</isPk>\\n                    <isMulti>0</isMulti>\\n                </id_1>\\n                <classid_1>\\n                    <name>classid_1</name>\\n                    <type>INT</type>\\n                    <isPk>0</isPk>\\n                    <isMulti>0</isMulti>\\n                </classid_1>\\n                <infotags>\\n                    <name>infotags</name>\\n                    <type>TEXT</type>\\n                    <isPk>0</isPk>\\n                    <isMulti>0</isMulti>\\n                </infotags>\\n            </phome_ecms_tuzhi_data_1>\\n        </tables>\\n        <master>phome_ecms_tuzhi</master>\\n        <level>\\n            <phome_ecms_tuzhi>0</phome_ecms_tuzhi>\\n            <phome_ecms_tuzhi_data_1>1</phome_ecms_tuzhi_data_1>\\n        </level>\\n        <joinMap>\\n            <phome_ecms_tuzhi>\\n                <id>\\n                    <table>phome_ecms_tuzhi_data_1</table>\\n                    <key>id_1</key>\\n                    <join>\\n                        <classid_1>classid_1</classid_1>\\n                        <infotags>infotags</infotags>\\n                    </join>\\n                </id>\\n            </phome_ecms_tuzhi>\\n        </joinMap>\\n    </fromTable>\\n    <primaryKey>id</primaryKey>\\n</result>","errorExample":""}]',
            'title' => '获取合并后的宽表',
            'summary' => '获取合并后的宽表。',
            'requestParamsDescription' => ' **请求体**'."\n"
                .'| 字段 | 类型 | 是否必要 | 示例值 | 描述 |'."\n"
                .'| --- | --- | --- | --- | --- |'."\n"
                .'| tables | Object | 是 |  | 表结构 |'."\n"
                .'| indexes | Object | 否 |  | 索引结构 |'."\n",
            'responseParamsDescription' => '  **返回参数**'."\n"
                .'| 名称 | 类型 | 描述 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| requestId | String | 请求ID |'."\n"
                .'| result.mergeTable | Object | 合并后的宽表结果<br />键为字段名，值为字段详情 |'."\n"
                .'| result.fromTable | Object | 源表信息 |'."\n"
                .'| result.fromTable.tables | Object | 表信息<br />键为表名，值为表结构信息 |'."\n"
                .'| result.fromTable.tables.* | Object | 键为字段名，值为字段详情 |'."\n"
                .'| result.fromTable.master | String | 主表 |'."\n"
                .'| result.fromTable.level | Object | 表层级信息，从0开始<br />键为表名，值为层级 |'."\n"
                .'| result.fromTable.joinMap | Object | 外表连接信息<br />键为表名，值为外表连接信息 |'."\n"
                .'| result.fromTable.joinMap.* | Object | 外表连接字段信息<br />键为字段，值为外表连接字段信息 |'."\n"
                .'| result.primaryKey | String | 主键字段 |'."\n"
                ."\n\n"
                .'  **TableFields**'."\n"
                .'| 名称 | 类型 | 描述 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| name | String | 字段名 |'."\n"
                .'| type | String | 字段类型<br />参考：[数据表字段](~~179404~~) |'."\n"
                .'| isPk | String| 是否为主键<br />0：否<br />1：是 |'."\n"
                .'| isMulti | Integer | 是否为多值<br />0：否<br />1：是 |'."\n"
                .'| isAttribute | Integer | 是否为属性字段<br />0：否<br />1：是 |'."\n"
                ."\n\n"
                .'  **JoinMapFields**'."\n"
                .'| 名称 | 类型 | 描述 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| table | String | 外连表名 |'."\n"
                .'| key | String | 外连表主键名 |'."\n"
                .'| join | Object | 外连表的扩展字段 |'."\n"
                ."\n\n"
                ."\n\n"
                ."\n",
            'extraInfo' => ' ',
        ],
        'DescribeRegions' => [
            'path' => '/v4/openapi/regions',
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
                'abilityTreeCode' => '55180',
                'abilityTreeNodes' => [
                    'FEATUREopensearch447AAX',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '3B7E42BD-1D63-2F6B-C8E0-41BACEA76EEB',
                            ],
                            'result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'endpoint' => [
                                            'description' => '接入点地址',
                                            'type' => 'string',
                                            'example' => 'opensearch.cn-hangzhou.aliyuncs.com',
                                        ],
                                        'regionId' => [
                                            'description' => '区域ID',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'localName' => [
                                            'description' => '区域名称',
                                            'type' => 'string',
                                            'example' => '华东1（杭州）',
                                        ],
                                        'consoleUrl' => [
                                            'description' => '控制台地址',
                                            'type' => 'string',
                                            'example' => 'https://opensearch-cn-hangzhou.console.aliyun.com',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"3B7E42BD-1D63-2F6B-C8E0-41BACEA76EEB\\",\\n  \\"result\\": [\\n    {\\n      \\"endpoint\\": \\"opensearch.cn-hangzhou.aliyuncs.com\\",\\n      \\"regionId\\": \\"cn-hangzhou\\",\\n      \\"localName\\": \\"华东1（杭州）\\",\\n      \\"consoleUrl\\": \\"https://opensearch-cn-hangzhou.console.aliyun.com\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>3B7E42BD-1D63-2F6B-C8E0-41BACEA76EEB</requestId>\\n<result>\\n    <regionId>cn-hangzhou</regionId>\\n    <localName>华东1（杭州）</localName>\\n    <endpoint>opensearch.cn-hangzhou.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-hangzhou.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-shanghai</regionId>\\n    <localName>华东2（上海）</localName>\\n    <endpoint>opensearch.cn-shanghai.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-shanghai.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-qingdao</regionId>\\n    <localName>华北1（青岛）</localName>\\n    <endpoint>opensearch.cn-qingdao.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-qingdao.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-beijing</regionId>\\n    <localName>华北2（北京）</localName>\\n    <endpoint>opensearch.cn-beijing.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-beijing.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-zhangjiakou</regionId>\\n    <localName>华北3（张家口）</localName>\\n    <endpoint>opensearch.cn-zhangjiakou.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-zhangjiakou.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-shenzhen</regionId>\\n    <localName>华南1（深圳）</localName>\\n    <endpoint>opensearch.cn-shenzhen.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-shenzhen.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>ap-southeast-1</regionId>\\n    <localName>新加坡</localName>\\n    <endpoint>opensearch.ap-southeast-1.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-ap-southeast-1.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-internal</regionId>\\n    <localName>内网1（中心）</localName>\\n    <endpoint>opensearch.cn-zhangbei-center.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-shanghai-in.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-zhangbei-in</regionId>\\n    <localName>内网2（张北）</localName>\\n    <endpoint>opensearch.cn-zhangbei-in.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-zhangbei-in.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>us-west-1-in</regionId>\\n    <localName>内网3（美国）</localName>\\n    <endpoint>opensearch.innet-us.aliyuncs.com</endpoint>\\n    <consoleUrl>http://opensearch-us-in.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>rus-west-1-in</regionId>\\n    <localName>内网4（俄罗斯）</localName>\\n    <endpoint/>\\n    <consoleUrl>https://opensearch-rg-ru-in.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-daily</regionId>\\n    <localName>内网日常</localName>\\n    <endpoint>opensearch.cn-daily.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-daily.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>pre-hangzhou</regionId>\\n    <localName>杭州预发</localName>\\n    <endpoint>opensearch.pre-hangzhou.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-pre-hangzhou.console.aliyun.com</consoleUrl>\\n</result>","errorExample":""}]',
            'title' => '查询可以使用的阿里云地域',
            'summary' => '获取所有区域的接入地址。',
        ],
        'DescribeDataCollction' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/data-collections/{dataCollectionIdentity}',
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
                'abilityTreeCode' => '55174',
                'abilityTreeNodes' => [
                    'FEATUREopensearch4M1CGO',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'dataCollectionIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据采集ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '286',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '72FAD77B-83F9-F393-BA8E-5834E2427BF8',
                            ],
                            'result' => [
                                'description' => '数据采集信息',
                                'type' => 'object',
                                'properties' => [
                                    'created' => [
                                        'description' => '创建时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1581065837',
                                    ],
                                    'dataCollectionType' => [
                                        'description' => '数据采集的类型'."\n"
                                            .'- behavior 行为'."\n"
                                            .'- item_info 项目信息'."\n"
                                            .'- industry_specific 工业特性',
                                        'type' => 'string',
                                        'example' => 'BEHAVIOR',
                                    ],
                                    'type' => [
                                        'description' => '数据采集端的类型'."\n"
                                            .'- server'."\n"
                                            .'- web'."\n"
                                            .'- app'."\n"
                                            .'注：目前只支持 server',
                                        'type' => 'string',
                                        'example' => 'server',
                                    ],
                                    'industryName' => [
                                        'description' => '行业名称'."\n"
                                            .'- general 通用'."\n"
                                            .'- ecommerce 电商',
                                        'type' => 'string',
                                        'example' => 'GENERAL',
                                    ],
                                    'status' => [
                                        'description' => '状态'."\n"
                                            .'- 0 未开通'."\n"
                                            .'- 1 开通中'."\n"
                                            .'- 2 开通成功'."\n"
                                            .'- 3 开通失败',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'updated' => [
                                        'description' => '更新时间',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1581065904',
                                    ],
                                    'name' => [
                                        'description' => '数据采集名称',
                                        'type' => 'string',
                                        'example' => 'os_function_test_v1',
                                    ],
                                    'sundialId' => [
                                        'description' => 'sundial的ID',
                                        'type' => 'string',
                                        'example' => '1755',
                                    ],
                                    'id' => [
                                        'description' => '数据采集ID',
                                        'type' => 'string',
                                        'example' => '286',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"72FAD77B-83F9-F393-BA8E-5834E2427BF8\\",\\n  \\"result\\": {\\n    \\"created\\": 1581065837,\\n    \\"dataCollectionType\\": \\"BEHAVIOR\\",\\n    \\"type\\": \\"server\\",\\n    \\"industryName\\": \\"GENERAL\\",\\n    \\"status\\": 2,\\n    \\"updated\\": 1581065904,\\n    \\"name\\": \\"os_function_test_v1\\",\\n    \\"sundialId\\": \\"1755\\",\\n    \\"id\\": \\"286\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>72FAD77B-83F9-F393-BA8E-5834E2427BF8</requestId>\\n<result>\\n    <id>286</id>\\n    <name>os_function_test_v1</name>\\n    <type>server</type>\\n    <status>2</status>\\n    <dataCollectionType>BEHAVIOR</dataCollectionType>\\n    <industryName>GENERAL</industryName>\\n    <created>1581065837</created>\\n    <updated>1581065904</updated>\\n    <sundialId>1755</sundialId>\\n</result>","errorExample":""}]',
            'title' => 'DescribeDataCollection',
            'summary' => '获取指定应用的数据采集详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDataCollections' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/data-collections',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，默认 pageNumber = 1',
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
                        'description' => '每页返回数目，默认 pageSize = 10',
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
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'description' => '总条数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '959D8782-B130-95EB-86CC-1F6ED447981F',
                            ],
                            'result' => [
                                'description' => '数据采集信息'."\n"
                                    ."\n"
                                    .'参考：[DataCollection](~~173605~~)',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'created' => [
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1581065837',
                                        ],
                                        'dataCollectionType' => [
                                            'description' => '数据采集的类型'."\n"
                                                ."\n"
                                                .'- behavior 行为'."\n"
                                                .'- item_info 项目信息'."\n"
                                                .'- industry_specific 工业特性',
                                            'type' => 'string',
                                            'example' => 'BEHAVIOR',
                                        ],
                                        'type' => [
                                            'description' => '数据采集端的类型'."\n"
                                                ."\n"
                                                .'- server'."\n"
                                                .'- web'."\n"
                                                .'- app'."\n"
                                                ."\n"
                                                .'注：目前只支持 server',
                                            'type' => 'string',
                                            'example' => 'server',
                                        ],
                                        'industryName' => [
                                            'description' => '行业名称'."\n"
                                                ."\n"
                                                .'- general 通用'."\n"
                                                .'- ecommerce 电商',
                                            'type' => 'string',
                                            'example' => 'GENERAL',
                                        ],
                                        'status' => [
                                            'description' => '状态'."\n"
                                                ."\n"
                                                .'- 0 未开通'."\n"
                                                .'- 1 开通中'."\n"
                                                .'- 2 开通成功'."\n"
                                                .'- 3 开通失败',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'updated' => [
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1581065904',
                                        ],
                                        'name' => [
                                            'description' => '数据采集名称',
                                            'type' => 'string',
                                            'example' => 'os_function_test_v1',
                                        ],
                                        'sundialId' => [
                                            'description' => 'sundial的ID',
                                            'type' => 'string',
                                            'example' => '1755',
                                        ],
                                        'id' => [
                                            'description' => '数据采集ID',
                                            'type' => 'string',
                                            'example' => '286',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"959D8782-B130-95EB-86CC-1F6ED447981F\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1581065837,\\n      \\"dataCollectionType\\": \\"BEHAVIOR\\",\\n      \\"type\\": \\"server\\",\\n      \\"industryName\\": \\"GENERAL\\",\\n      \\"status\\": 2,\\n      \\"updated\\": 1581065904,\\n      \\"name\\": \\"os_function_test_v1\\",\\n      \\"sundialId\\": \\"1755\\",\\n      \\"id\\": \\"286\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>959D8782-B130-95EB-86CC-1F6ED447981F</requestId>\\n<totalCount>1</totalCount>\\n<result>\\n    <id>286</id>\\n    <name>os_function_test_v1</name>\\n    <type>server</type>\\n    <status>2</status>\\n    <dataCollectionType>BEHAVIOR</dataCollectionType>\\n    <industryName>GENERAL</industryName>\\n    <created>1581065837</created>\\n    <updated>1581065904</updated>\\n    <sundialId>1755</sundialId>\\n</result>","errorExample":""}]',
            'title' => 'ListDataCollections',
            'summary' => '获取OpenSearch应用的数据采集清单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RemoveDataCollection' => [
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/data-collections/{dataCollectionIdentity}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '“my_app_group_name”',
                    ],
                ],
                [
                    'name' => 'dataCollectionIdentity',
                    'in' => 'path',
                    'schema' => [
                        'description' => '数据采集ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '286',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'result' => [
                                'description' => '—',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'httpCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": \\"{}\\",\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result/>","errorExample":""}]',
            'title' => 'RemoveDataCollection',
            'summary' => '关闭数据采集。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UntagResources' => [
            'summary' => '删标签接口。',
            'path' => '/v4/openapi/resource-tags',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ProductVersion',
                    ],
                ],
                [
                    'name' => 'resourceId',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '资源ID,最多 50个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '查询的资源的id列表。resource id与tags应至少存在一个。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '55111',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'tagKey',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '对应标签键列表，最多包含20个子项',
                        'description' => '对应标签键列表，最多包含20个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '业务tagKey',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'GENIE_FUNCTION',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'all',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否全部删除，只针对tags为空时有效。取值范围： true  false True False   默认是 false',
                        'description' => '是否全部删除，只针对tags为空时有效。取值范围： true  false True False   默认是 false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'tequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"tequestId\\": \\"\\"\\n}","type":"json"}]',
        ],
        'ListTagResources' => [
            'summary' => '查标签接口。',
            'path' => '/v4/openapi/resource-tags',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'BIGDATA',
                    ],
                ],
                [
                    'name' => 'resourceId',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '资源ID,最多 50个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '查询的资源的id列表。resource id与tags应至少存在一个。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'i-bp185wwblwfvh1a1y1me',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '对应新增标签列表，最多包含20个子项',
                        'description' => '对应新增标签列表，最多包含20个子项',
                        'type' => 'array',
                        'items' => [
                            'description' => '实体类型的内部英文表示',
                            'type' => 'object',
                            'properties' => [
                                'key' => [
                                    'title' => '标签键',
                                    'description' => '标签键',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'bm',
                                ],
                                'value' => [
                                    'title' => '标签值',
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Uefi',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下一个查询开始Token',
                        'description' => '下一个查询开始Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
                            ],
                            'nextToken' => [
                                'title' => '下一个查询开始Token',
                                'description' => '下一个查询开始Token',
                                'type' => 'string',
                                'example' => '20',
                            ],
                            'result' => [
                                'title' => '资源列表',
                                'description' => '资源列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'tagKey' => [
                                            'title' => '标签键',
                                            'description' => '标签键',
                                            'type' => 'string',
                                            'example' => 'GENIE_FUNCTION',
                                        ],
                                        'tagValue' => [
                                            'title' => '标签值',
                                            'description' => '标签值',
                                            'type' => 'string',
                                            'example' => 'ALLOW',
                                        ],
                                        'resourceId' => [
                                            'title' => '资源ID',
                                            'description' => '资源ID',
                                            'type' => 'string',
                                            'example' => '54041',
                                        ],
                                        'resourceType' => [
                                            'title' => '资源类型',
                                            'description' => '资源类型',
                                            'type' => 'string',
                                            'example' => 'hostGroup',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"nextToken\\": \\"20\\",\\n  \\"result\\": [\\n    {\\n      \\"tagKey\\": \\"GENIE_FUNCTION\\",\\n      \\"tagValue\\": \\"ALLOW\\",\\n      \\"resourceId\\": \\"54041\\",\\n      \\"resourceType\\": \\"hostGroup\\"\\n    }\\n  ]\\n}","type":"json"}]',
        ],
        'TagResources' => [
            'summary' => '打标签接口。',
            'path' => '/v4/openapi/resource-tags',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'object',
                        'properties' => [
                            'resourceType' => [
                                'title' => '资源类型',
                                'description' => '资源类型',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ProductVersion',
                            ],
                            'resourceId' => [
                                'title' => '资源ID,最多 50个子项',
                                'description' => '资源ID,最多 50个子项',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源的id。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '68968',
                                ],
                                'required' => true,
                            ],
                            'tag' => [
                                'title' => '对应新增标签列表，最多包含20个子项',
                                'description' => '对应新增标签列表，最多包含20个子项',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实体类型的内部英文表示',
                                    'type' => 'object',
                                    'properties' => [
                                        'key' => [
                                            'title' => '标签键',
                                            'description' => '标签键',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'cloud_manage',
                                        ],
                                        'value' => [
                                            'title' => '标签值',
                                            'description' => '标签值',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '31261301',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应体',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'ABCDEFGH',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","type":"json"}]',
        ],
        'GetFunctionResource' => [
            'summary' => '获取指定名称的算法资源。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/resources/{resourceName}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '功能名称',
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rank',
                    ],
                ],
                [
                    'name' => 'resourceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => '实例名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fg_json',
                    ],
                ],
                [
                    'name' => 'output',
                    'in' => 'query',
                    'schema' => [
                        'title' => '输出等级',
                        'description' => '输出等级',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'detail',
                        'enum' => [
                            'simple',
                            'normal',
                            'detail',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态码'."\n"
                                    ."\n"
                                    .'- OK 成功'."\n"
                                    .'- FAIL 失败',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'E215C843-0795-5293-AC9A-14FE0723E890',
                            ],
                            'Message' => [
                                'description' => '返回的错误信息',
                                'type' => 'string',
                                'example' => 'Resource not exist.',
                            ],
                            'Code' => [
                                'description' => '返回的错误码（没有错误为空）',
                                'type' => 'string',
                                'example' => 'Resource.NotExist',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'CreateTime' => [
                                        'description' => '创建时间 （单位毫秒）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1234',
                                    ],
                                    'Data' => [
                                        'description' => '资源数据，不同resourceType对应的data结构不同',
                                        'type' => 'object',
                                        'properties' => [
                                            'Content' => [
                                                'description' => 'raw_file类型资源对应的文件内容',
                                                'type' => 'string',
                                                'example' => 'abc',
                                            ],
                                            'Generators' => [
                                                'description' => 'feature_generator类型资源对应的特征生成列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '特征生成描述',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Generator' => [
                                                            'description' => '特征生成的类型',
                                                            'type' => 'string',
                                                            'example' => 'id',
                                                        ],
                                                        'Input' => [
                                                            'description' => '输入',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Features' => [
                                                                    'description' => '输入特征列表',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '输入特征',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Name' => [
                                                                                'description' => '特征名',
                                                                                'type' => 'string',
                                                                                'example' => 'system_item_id',
                                                                            ],
                                                                            'Type' => [
                                                                                'description' => '特征类型',
                                                                                'type' => 'string',
                                                                                'example' => 'item',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Output' => [
                                                            'description' => '输出的特征名',
                                                            'type' => 'string',
                                                            'example' => 'output_feature_name',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Description' => [
                                        'description' => '资源描述',
                                        'type' => 'string',
                                        'example' => '""',
                                    ],
                                    'FunctionName' => [
                                        'description' => '功能名称',
                                        'type' => 'string',
                                        'example' => 'rank',
                                    ],
                                    'ModifyTime' => [
                                        'description' => '修改时间（单位毫秒）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1234',
                                    ],
                                    'ReferencedInstances' => [
                                        'description' => '引用的算法实例名称列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '实例名称',
                                            'type' => 'string',
                                            'example' => 'instance1',
                                        ],
                                    ],
                                    'ResourceName' => [
                                        'description' => '资源名称',
                                        'type' => 'string',
                                        'example' => 'fg_json',
                                    ],
                                    'ResourceType' => [
                                        'description' => '资源类型',
                                        'type' => 'string',
                                        'example' => 'raw_file',
                                    ],
                                ],
                            ],
                            'Latency' => [
                                'description' => 'api请求耗时 (单位毫秒)',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"E215C843-0795-5293-AC9A-14FE0723E890\\",\\n  \\"Message\\": \\"Resource not exist.\\",\\n  \\"Code\\": \\"Resource.NotExist\\",\\n  \\"Result\\": {\\n    \\"CreateTime\\": 1234,\\n    \\"Data\\": {\\n      \\"Content\\": \\"abc\\",\\n      \\"Generators\\": [\\n        {\\n          \\"Generator\\": \\"id\\",\\n          \\"Input\\": {\\n            \\"Features\\": [\\n              {\\n                \\"Name\\": \\"system_item_id\\",\\n                \\"Type\\": \\"item\\"\\n              }\\n            ]\\n          },\\n          \\"Output\\": \\"output_feature_name\\"\\n        }\\n      ]\\n    },\\n    \\"Description\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"FunctionName\\": \\"rank\\",\\n    \\"ModifyTime\\": 1234,\\n    \\"ReferencedInstances\\": [\\n      \\"instance1\\"\\n    ],\\n    \\"ResourceName\\": \\"fg_json\\",\\n    \\"ResourceType\\": \\"raw_file\\"\\n  },\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '获取算法资源',
        ],
        'ListFunctionResources' => [
            'summary' => '获取算法资源列表。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/resources',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '功能名称',
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rank',
                    ],
                ],
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'feature_generator' => 'feature_generator',
                            'raw_file' => 'raw_file',
                        ],
                        'example' => 'feature_generator',
                    ],
                ],
                [
                    'name' => 'output',
                    'in' => 'query',
                    'schema' => [
                        'title' => '输出等级',
                        'description' => '输出等级',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'detail',
                        'enum' => [
                            'simple',
                            'normal',
                            'detail',
                        ],
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码',
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页大小',
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '请求状态: OK/FAIL',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'TotalCount' => [
                                'description' => '符合要求的总记录数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '"3A809095-C554-5CF5-8FCE-BE19D4673790"',
                            ],
                            'Message' => [
                                'description' => '返回的错误信息',
                                'type' => 'string',
                                'example' => 'Invalid resource name.',
                            ],
                            'Code' => [
                                'description' => '返回的错误码（没有错误为空）',
                                'type' => 'string',
                                'example' => 'Resource.InvalidResourceName',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果体',
                                    'type' => 'object',
                                    'properties' => [
                                        'CreateTime' => [
                                            'description' => '创建时间 （单位毫秒）',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1234',
                                        ],
                                        'Data' => [
                                            'description' => '资源数据，不同resourceType对应的data结构不同',
                                            'type' => 'object',
                                            'properties' => [
                                                'Content' => [
                                                    'description' => 'raw_file类型资源对应的文件内容',
                                                    'type' => 'string',
                                                    'example' => '"abc"',
                                                ],
                                                'Generators' => [
                                                    'description' => 'feature_generator类型资源对应的特征生成列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '特征生成描述',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Generator' => [
                                                                'description' => '特征生成的类型',
                                                                'type' => 'string',
                                                                'example' => 'combo',
                                                            ],
                                                            'Input' => [
                                                                'description' => '输入',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Features' => [
                                                                        'description' => '输入特征列表',
                                                                        'type' => 'array',
                                                                        'items' => [
                                                                            'description' => '输入特征',
                                                                            'type' => 'object',
                                                                            'properties' => [
                                                                                'Name' => [
                                                                                    'description' => '特征名',
                                                                                    'type' => 'string',
                                                                                    'example' => 'system_item_id',
                                                                                ],
                                                                                'Type' => [
                                                                                    'description' => '特征类型',
                                                                                    'type' => 'string',
                                                                                    'enumValueTitles' => [
                                                                                        'item' => 'item',
                                                                                        'user' => 'user',
                                                                                    ],
                                                                                    'example' => 'item',
                                                                                ],
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'Output' => [
                                                                'description' => '输出的特征名',
                                                                'type' => 'string',
                                                                'example' => 'feature1',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Description' => [
                                            'description' => '资源描述',
                                            'type' => 'string',
                                            'example' => 'resource description',
                                        ],
                                        'FunctionName' => [
                                            'description' => '功能名称',
                                            'type' => 'string',
                                            'example' => 'rank',
                                        ],
                                        'ModifyTime' => [
                                            'description' => '修改时间（单位毫秒）',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1234',
                                        ],
                                        'ReferencedInstances' => [
                                            'description' => '引用的算法实例名称列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '实例名称',
                                                'type' => 'string',
                                                'example' => 'rank_model1',
                                            ],
                                        ],
                                        'ResourceName' => [
                                            'description' => '资源名称',
                                            'type' => 'string',
                                            'example' => 'fg_json',
                                        ],
                                        'ResourceType' => [
                                            'description' => '资源类型',
                                            'type' => 'string',
                                            'example' => 'feature_generator',
                                        ],
                                    ],
                                ],
                            ],
                            'Latency' => [
                                'description' => '请求耗时（单位毫秒）',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"\\\\\\"3A809095-C554-5CF5-8FCE-BE19D4673790\\\\\\"\\",\\n  \\"Message\\": \\"Invalid resource name.\\",\\n  \\"Code\\": \\"Resource.InvalidResourceName\\",\\n  \\"Result\\": [\\n    {\\n      \\"CreateTime\\": 1234,\\n      \\"Data\\": {\\n        \\"Content\\": \\"\\\\\\"abc\\\\\\"\\",\\n        \\"Generators\\": [\\n          {\\n            \\"Generator\\": \\"combo\\",\\n            \\"Input\\": {\\n              \\"Features\\": [\\n                {\\n                  \\"Name\\": \\"system_item_id\\",\\n                  \\"Type\\": \\"item\\"\\n                }\\n              ]\\n            },\\n            \\"Output\\": \\"feature1\\"\\n          }\\n        ]\\n      },\\n      \\"Description\\": \\"resource description\\",\\n      \\"FunctionName\\": \\"rank\\",\\n      \\"ModifyTime\\": 1234,\\n      \\"ReferencedInstances\\": [\\n        \\"rank_model1\\"\\n      ],\\n      \\"ResourceName\\": \\"fg_json\\",\\n      \\"ResourceType\\": \\"feature_generator\\"\\n    }\\n  ],\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '获取算法资源列表',
        ],
        'DeleteFunctionResource' => [
            'summary' => '删除指定算法资源。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/resources/{resourceName}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '功能名称',
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rank',
                    ],
                ],
                [
                    'name' => 'resourceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '资源名称',
                        'description' => '资源名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fg_json',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '状态码'."\n"
                                    ."\n"
                                    .'- OK 成功'."\n"
                                    .'- FAIL 失败',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A4D487A9-A456-5AA5-A9C6-B7BF2889CF74',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'Code' => [
                                'description' => '返回的错误码（没有错误为空）',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'Latency' => [
                                'description' => '请求耗时（单位毫秒）',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"A4D487A9-A456-5AA5-A9C6-B7BF2889CF74\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Code\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '删除算法资源',
        ],
        'UpdateFunctionResource' => [
            'summary' => '更新算法资源。',
            'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/resources/{resourceName}',
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
                    'name' => 'appGroupIdentity',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my_app_group_name',
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '功能名称',
                        'description' => '功能名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rank',
                    ],
                ],
                [
                    'name' => 'resourceName',
                    'in' => 'path',
                    'schema' => [
                        'title' => '资源名称',
                        'description' => '资源名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fg_json',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '资源数据，不同resourceType对应的data结构不同',
                                'type' => 'object',
                                'properties' => [
                                    'Content' => [
                                        'description' => 'raw_file类型资源对应的文件内容',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'abc',
                                    ],
                                    'Generators' => [
                                        'description' => 'feature_generator类型资源对应的特征生成列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '特征生成描述',
                                            'type' => 'object',
                                            'properties' => [
                                                'Generator' => [
                                                    'description' => '特征生成的类型',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'combo',
                                                ],
                                                'Input' => [
                                                    'description' => '输入',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Features' => [
                                                            'description' => '输入特征列表',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '输入特征',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Name' => [
                                                                        'description' => '特征名',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => 'system_item_id',
                                                                    ],
                                                                    'Type' => [
                                                                        'description' => '特征类型',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => 'item',
                                                                    ],
                                                                ],
                                                                'required' => false,
                                                            ],
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'Output' => [
                                                    'description' => '输出的特征名',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'feature1',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Description' => [
                                'description' => '资源描述',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'updated description',
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
                            'Status' => [
                                'description' => '请求状态',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '7E375703-5B12-5466-8B48-C4D01AE1291A',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'Invalid request.',
                            ],
                            'Code' => [
                                'description' => '返回的错误码（没有错误为空）',
                                'type' => 'string',
                                'example' => 'InvalidRequest',
                            ],
                            'Latency' => [
                                'description' => '请求耗时（单位毫秒）',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '123',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"7E375703-5B12-5466-8B48-C4D01AE1291A\\",\\n  \\"Message\\": \\"Invalid request.\\",\\n  \\"Code\\": \\"InvalidRequest\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
            'title' => '更新算法资源',
            'description' => '根据资源名称更新资源信息，目前只支持data、description更新。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'opensearch.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'opensearch.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'opensearch.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'opensearch.cn-north-2-gov-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'opensearch.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'opensearch.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'opensearch.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'opensearch.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'opensearch.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'opensearch.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'opensearch.cn-hongkong.aliyuncs.com',
        ],
    ],
];
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'OpenSearch',
    'version' => '2017-12-25',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 170735,
      'title' => '应用实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 170736,
          'title' => '应用管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'RenewAppGroup',
            1 => 'CreateAppGroup',
            2 => 'ModifyAppGroup',
            3 => 'ModifyAppGroupQuota',
            4 => 'RemoveAppGroup',
            5 => 'ListAppGroups',
          ),
        ),
        1 => 
        array (
          'id' => 170744,
          'title' => '应用版本',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateApp',
            1 => 'RemoveApp',
            2 => 'DescribeApps',
            3 => 'DescribeApp',
            4 => 'DescribeAppStatistics',
          ),
        ),
      ),
    ),
    1 => 
    array (
      'id' => 170894,
      'title' => '实例周边',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 170895,
          'title' => '自定义分析器',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListUserAnalyzers',
            1 => 'CreateUserAnalyzer',
            2 => 'DescribeUserAnalyzer',
            3 => 'RemoveUserAnalyzer',
            4 => 'ListUserAnalyzerEntries',
            5 => 'PushUserAnalyzerEntries',
          ),
        ),
        1 => 
        array (
          'id' => 170905,
          'title' => 'ABTest',
          'type' => 'directory',
          'children' => 
          array (
            0 => 
            array (
              'id' => 170906,
              'title' => '实验场景',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'ListABTestScenes',
                1 => 'CreateABTestScene',
                2 => 'DescribeABTestScene',
                3 => 'UpdateABTestScene',
                4 => 'DeleteABTestScene',
              ),
            ),
            1 => 
            array (
              'id' => 170976,
              'title' => '实验组',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'ListABTestGroups',
                1 => 'CreateABTestGroup',
                2 => 'DeleteABTestGroup',
                3 => 'DescribeABTestGroup',
                4 => 'UpdateABTestGroup',
              ),
            ),
            2 => 
            array (
              'id' => 170977,
              'title' => '实验',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'ListABTestExperiments',
                1 => 'CreateABTestExperiment',
                2 => 'DescribeABTestExperiment',
                3 => 'UpdateABTestExperiment',
                4 => 'DeleteABTestExperiment',
              ),
            ),
            3 => 
            array (
              'id' => 170978,
              'title' => '白名单',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'ListABTestFixedFlowDividers',
                1 => 'UpdateABTestFixedFlowDividers',
              ),
            ),
          ),
        ),
        2 => 
        array (
          'id' => 170979,
          'title' => '粗排表达式',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListFirstRanks',
            1 => 'CreateFirstRank',
            2 => 'DescribeFirstRank',
            3 => 'RemoveFirstRank',
            4 => 'ModifyFirstRank',
          ),
        ),
        3 => 
        array (
          'id' => 170980,
          'title' => '精排表达式',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListSecondRanks',
            1 => 'CreateSecondRank',
            2 => 'DescribeSecondRank',
            3 => 'ModifySecondRank',
            4 => 'RemoveSecondRank',
          ),
        ),
        4 => 
        array (
          'id' => 170981,
          'title' => '查询分析器',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListQueryProcessors',
            1 => 'CreateQueryProcessor',
            2 => 'ModifyQueryProcessor',
            3 => 'RemoveQueryProcessor',
            4 => 'DescribeQueryProcessor',
            5 => 'ListQueryProcessorNers',
            6 => 'ListQueryProcessorAnalyzerResults',
          ),
        ),
        5 => 
        array (
          'id' => 170982,
          'title' => '干预词典',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListInterventionDictionaries',
            1 => 'CreateInterventionDictionary',
            2 => 'DescribeInterventionDictionary',
            3 => 'RemoveInterventionDictionary',
            4 => 'ListInterventionDictionaryEntries',
            5 => 'PushInterventionDictionaryEntries',
            6 => 'ListInterventionDictionaryRelatedEntities',
            7 => 'ListInterventionDictionaryNerResults',
          ),
        ),
        6 => 
        array (
          'id' => 170983,
          'title' => '优化大师',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'EnableSlowQuery',
            1 => 'DisableSlowQuery',
            2 => 'DescribeSlowQueryStatus',
            3 => 'StartSlowQueryAnalyzer',
            4 => 'ListSlowQueryQueries',
            5 => 'ListSlowQueryCategories',
          ),
        ),
        7 => 
        array (
          'id' => 170984,
          'title' => '配额审批',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListQuotaReviewTasks',
          ),
        ),
        8 => 
        array (
          'id' => 170985,
          'title' => '定时任务',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListScheduledTasks',
            1 => 'CreateScheduledTask',
            2 => 'DescribeScheduledTask',
            3 => 'ModifyScheduledTask',
            4 => 'RemoveScheduledTask',
          ),
        ),
        9 => 
        array (
          'id' => 170986,
          'title' => '搜索策略',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListSortExpressions',
          ),
        ),
        10 => 
        array (
          'id' => 170987,
          'title' => 'ElasticSearch引擎实例',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'UnbindEsInstance',
            1 => 'BindEsInstance',
            2 => 'BindESUserAnalyzer',
            3 => 'UnbindESUserAnalyzer',
          ),
        ),
        11 => 
        array (
          'id' => 170988,
          'title' => '当前处理流',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListProceedings',
          ),
        ),
        12 => 
        array (
          'id' => 170989,
          'title' => '统计',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListStatisticLogs',
            1 => 'ListStatisticReport',
          ),
        ),
        13 => 
        array (
          'id' => 175840,
          'title' => 'cava脚本',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'UpdateSortScript',
            1 => 'SaveSortScriptFile',
            2 => 'ReleaseSortScript',
            3 => 'GetSortScriptFile',
            4 => 'GetSortScript',
            5 => 'GetScriptFileNames',
            6 => 'DeleteSortScriptFile',
            7 => 'DeleteSortScript',
            8 => 'CreateSortScript',
            9 => 'CompileSortScript',
          ),
        ),
        14 => 
        array (
          'id' => 175844,
          'title' => '查询策略',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'UpdateSearchStrategy',
            1 => 'RemoveSearchStrategy',
            2 => 'ListSearchStrategies',
            3 => 'GetSearchStrategy',
            4 => 'CreateSearchStrategy',
          ),
        ),
      ),
    ),
    2 => 
    array (
      'id' => 170990,
      'title' => '版本周边',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 170991,
          'title' => '默认展示字段',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'UpdateFetchFields',
          ),
        ),
        1 => 
        array (
          'id' => 170992,
          'title' => '搜索结果摘要',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'UpdateSummaries',
          ),
        ),
      ),
    ),
    3 => 
    array (
      'id' => 170993,
      'title' => '算法周边',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFunctionResource',
        1 => 'GetFunctionCurrentVersion',
        2 => 'GetFunctionVersion',
        3 => 'GetFunctionDefaultInstance',
        4 => 'UpdateFunctionDefaultInstance',
        5 => 'ListFunctionTasks',
        6 => 'GetFunctionTask',
        7 => 'DeleteFunctionTask',
        8 => 'CreateFunctionTask',
        9 => 'ListFunctionInstances',
        10 => 'GetFunctionInstance',
        11 => 'DeleteFunctionInstance',
        12 => 'UpdateFunctionInstance',
        13 => 'CreateFunctionInstance',
      ),
    ),
    4 => 
    array (
      'id' => 170783,
      'title' => '其它(未在目录中的文档)',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAppGroup',
        1 => 'ValidateDataSources',
        2 => 'ReplaceAppGroupCommodityCode',
        3 => 'ListSortScripts',
        4 => 'ListDataSourceTables',
        5 => 'ListDataSourceTableFields',
        6 => 'GetDomain',
        7 => 'GenerateMergedTable',
        8 => 'DescribeRegions',
      ),
    ),
    5 => 
    array (
      'id' => 170995,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDataCollction',
        1 => 'ListDataCollections',
        2 => 'RemoveDataCollection',
        3 => 'UntagResources',
        4 => 'ListTagResources',
        5 => 'TagResources',
        6 => 'GetFunctionResource',
        7 => 'ListFunctionResources',
        8 => 'DeleteFunctionResource',
        9 => 'UpdateFunctionResource',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'ABTestExperiment' => 
      array (
        'title' => 'ABTest实验',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '实验别名',
            'type' => 'string',
          ),
          'traffic' => 
          array (
            'title' => '实验分桶百分比',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'serialNumber' => 
          array (
            'title' => 'hyperspace自动生成的实验序列号',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'online' => 
          array (
            'title' => '实验是否在线',
            'type' => 'boolean',
          ),
          'params' => 
          array (
            'title' => '实验参数',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
      ),
      'ABTestGroup' => 
      array (
        'title' => 'ABTest实验组',
        'description' => 'ABTest实验组',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '实验组别名',
            'type' => 'string',
          ),
          'status' => 
          array (
            'title' => '实验组状态',
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
      ),
      'ABTestScene' => 
      array (
        'title' => 'ABTest实验场景',
        'description' => 'ABTest实验场景',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '场景别名',
            'type' => 'string',
          ),
          'values' => 
          array (
            'title' => '场景标识',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'status' => 
          array (
            'title' => '场景状态',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0 停止实验 1 开通实验',
          ),
        ),
      ),
      'App' => 
      array (
        'title' => 'A short description of struct',
        'description' => '应用版本',
        'type' => 'object',
        'properties' => 
        array (
          'autoSwitch' => 
          array (
            'title' => '是否自动切换',
            'type' => 'boolean',
          ),
          'networkType' => 
          array (
            'title' => '可用区标识',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => '版本描述',
            'type' => 'string',
          ),
          'schema' => 
          array (
            'title' => '应用结构',
            '$ref' => '#/components/schemas/Schema',
          ),
          'schemas' => 
          array (
            'title' => '应用结构',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Schema',
            ),
          ),
          'fetchFields' => 
          array (
            'title' => '默认展示字段',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'firstRanks' => 
          array (
            'title' => '粗排表达式配置',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/FirstRank',
            ),
          ),
          'secondRanks' => 
          array (
            'title' => '精排表达式配置',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/SecondRank',
            ),
          ),
          'dataSources' => 
          array (
            'title' => '数据源配置',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/DataSource',
            ),
          ),
          'summaries' => 
          array (
            'title' => '搜索结果摘要设置',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Summary',
            ),
          ),
          'queryProcessors' => 
          array (
            'title' => '查询意图理解规则配置',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/QueryProcessor',
            ),
          ),
          'realtimeShared' => 
          array (
            'title' => '是否共享实时流？',
            'type' => 'boolean',
          ),
          'cluster' => 
          array (
            'title' => '能力开放配置',
            'type' => 'object',
            'properties' => 
            array (
              'maxTimeoutMS' => 
              array (
                'title' => '超时时间',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'maxQueryClauseLength' => 
              array (
                'title' => '最大长度',
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
          'domain' => 
          array (
            'title' => '行业模型',
            '$ref' => '#/components/schemas/Domain',
          ),
          'type' => 
          array (
            'title' => '版本类型',
            'type' => 'string',
          ),
          'quota' => 
          array (
            'title' => '版本配额',
            '$ref' => '#/components/schemas/Quota',
          ),
        ),
      ),
      'AppGroup' => 
      array (
        'title' => '应用',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '应用名称',
            'type' => 'string',
          ),
          'quota' => 
          array (
            'title' => '配额信息',
            '$ref' => '#/components/schemas/Quota',
          ),
          'chargingWay' => 
          array (
            'title' => '计费类型',
            'type' => 'string',
          ),
          'type' => 
          array (
            'title' => '应用类型',
            'type' => 'string',
          ),
          'chargeType' => 
          array (
            'title' => '付费类型',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => '应用描述',
            'type' => 'string',
          ),
          'domain' => 
          array (
            'title' => '行业类型',
            'type' => 'string',
          ),
        ),
      ),
      'DataSource' => 
      array (
        'title' => '数据源配置',
        'type' => 'object',
        'properties' => 
        array (
          'tableName' => 
          array (
            'title' => '数据源配置标识',
            'type' => 'string',
          ),
          'type' => 
          array (
            'title' => '数据源类型',
            'type' => 'string',
          ),
          'fields' => 
          array (
            'title' => '数据源表字段 => 应用表字段映射',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'additionalProperties' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
          'plugins' => 
          array (
            'title' => '数据源插件',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'name' => 
                array (
                  'title' => '插件名称',
                  'type' => 'string',
                ),
                'fromFields' => 
                array (
                  'title' => '数据来源字段',
                  'type' => 'string',
                ),
                'parameters' => 
                array (
                  'title' => '插件参数',
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
          'keyField' => 
          array (
            'title' => '主键',
            'type' => 'string',
          ),
          'schemaName' => 
          array (
            'title' => '宽表名称',
            'type' => 'string',
          ),
          'parameters' => 
          array (
            'title' => '数据源信息',
            'type' => 'object',
          ),
        ),
      ),
      'Domain' => 
      array (
        'title' => '行业模型',
        'description' => '行业模型',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '行业类型',
            'type' => 'string',
          ),
          'category' => 
          array (
            'title' => '行业垂类',
            'type' => 'string',
          ),
          'functions' => 
          array (
            'title' => '已选择功能',
            'type' => 'object',
            'additionalProperties' => 
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
      'FirstRank' => 
      array (
        'title' => '粗排表达式配置',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '表达式类型 (STRUCT, STRING)',
            'type' => 'string',
          ),
          'name' => 
          array (
            'title' => '名称',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => '描述',
            'type' => 'string',
          ),
          'active' => 
          array (
            'title' => '是否是默认表达式',
            'type' => 'boolean',
          ),
          'meta' => 
          array (
            'title' => '表达式信息',
            'type' => 'any',
          ),
        ),
      ),
      'PrepayOrderInfo' => 
      array (
        'title' => '预付费订购信息',
        'description' => '预付费订购信息',
        'type' => 'object',
        'properties' => 
        array (
          'duration' => 
          array (
            'title' => '持续时间',
            'description' => '持续时间',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'pricingCycle' => 
          array (
            'title' => '周期',
            'description' => '周期:

- Year
- Month',
            'type' => 'string',
            'example' => 'Year',
          ),
          'autoRenew' => 
          array (
            'title' => '是否要自动续费',
            'description' => '是否要自动续费',
            'type' => 'boolean',
            'example' => 'false',
          ),
        ),
      ),
      'QueryProcessor' => 
      array (
        'title' => '查询意图理解规则配置',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '规则名称',
            'type' => 'string',
          ),
          'domain' => 
          array (
            'title' => '行业类型',
            'type' => 'string',
          ),
          'category' => 
          array (
            'title' => '垂类',
            'type' => 'string',
          ),
          'processors' => 
          array (
            'title' => '包含功能',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
            ),
          ),
          'indexes' => 
          array (
            'title' => '应用的索引范围',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'active' => 
          array (
            'title' => '是否默认规则',
            'type' => 'boolean',
          ),
        ),
      ),
      'Quota' => 
      array (
        'title' => '版本配额',
        'type' => 'object',
        'properties' => 
        array (
          'docSize' => 
          array (
            'title' => '存储容量 (单位:GB)',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'computeResource' => 
          array (
            'title' => '计算资源 (单位:LCU)',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'spec' => 
          array (
            'title' => '规格',
            'type' => 'string',
          ),
          'orderType' => 
          array (
            'title' => '变配类型',
            'type' => 'string',
          ),
        ),
      ),
      'ScheduledTask' => 
      array (
        'title' => '定时任务',
        'description' => '定时任务',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '任务类型',
            'type' => 'string',
          ),
          'cron' => 
          array (
            'title' => '时间表达式',
            'type' => 'string',
          ),
          'enabled' => 
          array (
            'title' => '是否执行',
            'type' => 'boolean',
          ),
          'version' => 
          array (
            'title' => '待删除版本号',
            'type' => 'string',
          ),
          'forkedAppId' => 
          array (
            'title' => '上一个版本id',
            'type' => 'string',
          ),
          'autoSwitch' => 
          array (
            'title' => '是否自动切换上线',
            'type' => 'boolean',
          ),
          'permanent' => 
          array (
            'title' => '是否持久化',
            'type' => 'boolean',
          ),
          'runNow' => 
          array (
            'title' => '是否立即执行',
            'type' => 'boolean',
          ),
          'filter' => 
          array (
            'title' => '清理配置',
            'type' => 'object',
            'properties' => 
            array (
              'field' => 
              array (
                'title' => '过滤字段名称',
                'type' => 'string',
              ),
              'days' => 
              array (
                'title' => '保留天数',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'unit' => 
              array (
                'title' => '时间单位',
                'type' => 'string',
              ),
              'expression' => 
              array (
                'title' => '表达式',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'Schema' => 
      array (
        'title' => '应用结构',
        'type' => 'object',
        'properties' => 
        array (
          'tables' => 
          array (
            'title' => '用户数据表',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'name' => 
                array (
                  'title' => '表名称',
                  'type' => 'string',
                ),
                'primaryTable' => 
                array (
                  'title' => '是否是主表',
                  'type' => 'boolean',
                ),
                'fields' => 
                array (
                  'title' => '字段清单',
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'name' => 
                      array (
                        'title' => '字段名称',
                        'type' => 'string',
                      ),
                      'primaryKey' => 
                      array (
                        'title' => '是否是主键',
                        'type' => 'boolean',
                      ),
                      'type' => 
                      array (
                        'title' => '字段类型 (INT, INT_ARRAY, FLOAT, FLOAT_ARRAY, DOUBLE, DOUBLE_ARRAY, TEXT, SHORT_TEXT, LITERAL, LITERAL_ARRAY, GEO_POINT, TIMESTAMP)',
                        'type' => 'string',
                      ),
                      'joinWith' => 
                      array (
                        'title' => '外表链接的数据表集合',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                      'label' => 
                      array (
                        'title' => '字段标签',
                        'type' => 'string',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          'indexes' => 
          array (
            'title' => '索引配置',
            'type' => 'object',
            'properties' => 
            array (
              'searchFields' => 
              array (
                'title' => '索引字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'analyzer' => 
                    array (
                      'title' => '分析器名称',
                      'type' => 'string',
                    ),
                    'analyzerType' => 
                    array (
                      'title' => '分析器类型 (AUTO, MODEL, SYSTEM, USER)',
                      'type' => 'string',
                    ),
                    'analyzerGeneration' => 
                    array (
                      'title' => '模型定制分析器Generation',
                      'type' => 'string',
                    ),
                    'fields' => 
                    array (
                      'title' => '索引字段集合',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                    'label' => 
                    array (
                      'title' => '索引标签',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'filterFields' => 
              array (
                'title' => '属性字段集合',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
            ),
          ),
          'routeField' => 
          array (
            'title' => '一级分列字段名称',
            'type' => 'string',
          ),
          'routeFieldValues' => 
          array (
            'title' => '一级分列字段热点值清单（配置后启用“二级分列”）',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'secondRouteField' => 
          array (
            'title' => '二级分列字段名称（当且仅当配置有`routeFieldValues`时生效，默认使用宽表主键）',
            'type' => 'string',
          ),
          'ttlField' => 
          array (
            'title' => '文档清理配置',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'title' => '文档时间字段',
                'type' => 'string',
              ),
              'ttl' => 
              array (
                'title' => '存活时间（毫秒）',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
          'indexSortConfig' => 
          array (
            'title' => '倒排索引配置',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'field' => 
                array (
                  'title' => '字段',
                  'type' => 'string',
                ),
                'direction' => 
                array (
                  'title' => '排序方式ASC, DESC',
                  'type' => 'string',
                ),
              ),
            ),
          ),
          'name' => 
          array (
            'title' => '宽表表名',
            'type' => 'string',
          ),
        ),
      ),
      'SearchStrategy' => 
      array (
        'title' => '查询策略',
        'description' => '查询策略',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '策略名称',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => '策略描述',
            'type' => 'string',
          ),
          'searchConfigs' => 
          array (
            'title' => '查询策略',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'queryType' => 
                array (
                  'title' => '查询类型',
                  'type' => 'string',
                  'example' => 'keyword: 关键字查询 vector: 向量查询',
                ),
                'firstRankName' => 
                array (
                  'title' => '基础排序名称',
                  'type' => 'string',
                ),
                'secondRankName' => 
                array (
                  'title' => '业务排序名称',
                  'type' => 'string',
                ),
                'mergeProportion' => 
                array (
                  'title' => '参与综合排序的比例',
                  'type' => 'integer',
                  'format' => 'int32',
                ),
              ),
            ),
          ),
          'mergeConfig' => 
          array (
            'title' => '归并排序配置',
            'type' => 'object',
            'properties' => 
            array (
              'rankName' => 
              array (
                'title' => '归并排序名称',
                'type' => 'string',
              ),
              'docCount' => 
              array (
                'title' => '归并排序文档数',
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
          'isDefault' => 
          array (
            'title' => '是否设置默认',
            'type' => 'boolean',
          ),
        ),
      ),
      'SecondRank' => 
      array (
        'title' => '精排表达式配置',
        'type' => 'object',
        'properties' => 
        array (
          'meta' => 
          array (
            'title' => '表达式',
            'type' => 'any',
          ),
          'name' => 
          array (
            'title' => '名称',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => '描述',
            'type' => 'string',
          ),
          'active' => 
          array (
            'title' => '是否是默认表达式',
            'type' => 'boolean',
          ),
        ),
      ),
      'Summary' => 
      array (
        'title' => '搜索结果摘要设置',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '名称',
            'type' => 'string',
          ),
          'meta' => 
          array (
            'title' => '结构化表达式',
            'type' => 'object',
            'properties' => 
            array (
              'field' => 
              array (
                'title' => '字段',
                'type' => 'string',
              ),
              'len' => 
              array (
                'title' => '片段长度',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'element' => 
              array (
                'title' => '飘红标签',
                'type' => 'string',
              ),
              'ellipsis' => 
              array (
                'title' => '片段连接符',
                'type' => 'string',
              ),
              'snippet' => 
              array (
                'title' => '片段数量',
                'type' => 'string',
              ),
            ),
          ),
          'active' => 
          array (
            'title' => '是否是默认搜索结果摘要',
            'type' => 'boolean',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'RenewAppGroup' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/actions/renew',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app',
          ),
        ),
        1 => 
        array (
          'name' => 'clientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性',
            'type' => 'string',
            'required' => false,
            'example' => '74db41d8cd3c784209093aa76afbe89e',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '续费请求体',
            'required' => false,
            '$ref' => '#/components/schemas/PrepayOrderInfo',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '续费结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": true\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result/>","errorExample":""}]',
      'title' => '为应用续费（暂不支持）',
      'summary' => '为应用续费（续费暂不支持API调用，请在控制台操作续费）。',
      'requestParamsDescription' => '**可选参数**
| 名称 | 类型 | 描述 |
| --- | --- | --- |
| duration | Integer | 续费周期（默认：1）<br />（取值范围:<br />- [1,2] 单位：Year<br />- [1,9] 单位：Month）<br /> |
| pricingCycle | String | 续费周期<br />（单位:<br />- Year<br />- Month）<br /> |
| autoRenew | boolean | 是否要自动续费（默认：false）<br />（取值范围:<br />- false<br />- true）<br /> |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAppGroup' => 
    array (
      'path' => '/v4/openapi/app-groups',
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
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体',
            'required' => false,
            '$ref' => '#/components/schemas/AppGroup',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '766CF6DB-CA02-3E12-7CBA-6AC21FC978FD',
              ),
              'result' => 
              array (
                'description' => '空',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1590139542',
                  ),
                  'currentVersion' => 
                  array (
                    'description' => '当前在线版本',
                    'type' => 'string',
                    'example' => '100302903',
                  ),
                  'pendingSecondRankAlgoDeploymentId' => 
                  array (
                    'description' => '部署中的精排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'lockMode' => 
                  array (
                    'description' => '锁定状态
- Unlock 正常
- LockByExpiration 实例过期自动锁定
- ManualLock 手动触发锁定',
                    'type' => 'string',
                    'example' => 'Unlock',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1590978265',
                  ),
                  'id' => 
                  array (
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => '100302881',
                  ),
                  'chargeType' => 
                  array (
                    'description' => '付费类型
- POSTPAY 后付费（按量付费）
- PREPAY 预付费（包年包月）',
                    'type' => 'string',
                    'example' => 'POSTPAY',
                  ),
                  'hasPendingQuotaReviewTask' => 
                  array (
                    'description' => '是否配额审批中
- 0：正常
- 1：配额审批中',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'secondRankAlgoDeploymentId' => 
                  array (
                    'description' => '精排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'name' => 
                  array (
                    'description' => '应用名称',
                    'type' => 'string',
                    'example' => 'lsh_test_1',
                  ),
                  'instanceId' => 
                  array (
                    'description' => '实例ID',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'processingOrderId' => 
                  array (
                    'description' => '未结束订单号',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'chargingWay' => 
                  array (
                    'description' => '计费类型
- 1：计算资源
- 2：qps',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'type' => 
                  array (
                    'description' => '应用类型
- standard 标准版
- advance 老高级版（新应用不支持此类型）
- enhanced 新高级版',
                    'type' => 'string',
                    'example' => 'enhanced',
                  ),
                  'status' => 
                  array (
                    'description' => '应用状态
- producing 生产中
- review_pending 生产审批中
- config_pending 待配置
- normal 正常
- frozen 已冻结',
                    'type' => 'string',
                    'example' => 'normal',
                  ),
                  'projectId' => 
                  array (
                    'description' => 'abtest project 名称',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'switchedTime' => 
                  array (
                    'description' => '在线版本切换时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1590486386',
                  ),
                  'commodityCode' => 
                  array (
                    'description' => '商品CODE',
                    'type' => 'string',
                    'example' => 'opensearch',
                  ),
                  'expireOn' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'domain' => 
                  array (
                    'description' => '行业类型
- GENERAL 通用
- ECOMMERCE 电商
- IT_CONTENT IT内容',
                    'type' => 'string',
                    'example' => 'GENERAL',
                  ),
                  'description' => 
                  array (
                    'description' => '应用描述',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'firstRankAlgoDeploymentId' => 
                  array (
                    'description' => '粗排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'produced' => 
                  array (
                    'description' => '是否生产完成
- 0：生产中
- 1：生产完成',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'lockedByExpiration' => 
                  array (
                    'description' => '实例过期自动锁定',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'quota' => 
                  array (
                    'description' => '应用配额信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'spec' => 
                      array (
                        'description' => '规格
- opensearch.share.junior 入门型
- opensearch.share.common 共享通用型
- opensearch.share.compute 共享计算型
- opensearch.share.storage 共享存储型
- opensearch.private.common 独享通用型
- opensearch.private.compute 独享计算型
- opensearch.private.storage 独享存储型',
                        'type' => 'string',
                        'example' => 'opensearch.share.common',
                      ),
                      'docSize' => 
                      array (
                        'description' => '存储容量 （单位：GB）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'computeResource' => 
                      array (
                        'description' => '计算资源 （单位：LCU）',
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
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"766CF6DB-CA02-3E12-7CBA-6AC21FC978FD\\",\\n  \\"result\\": {\\n    \\"created\\": 1590139542,\\n    \\"currentVersion\\": \\"100302903\\",\\n    \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"updated\\": 1590978265,\\n    \\"id\\": \\"100302881\\",\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"hasPendingQuotaReviewTask\\": 0,\\n    \\"secondRankAlgoDeploymentId\\": 0,\\n    \\"name\\": \\"lsh_test_1\\",\\n    \\"instanceId\\": \\"-\\",\\n    \\"processingOrderId\\": \\"-\\",\\n    \\"chargingWay\\": 1,\\n    \\"type\\": \\"enhanced\\",\\n    \\"status\\": \\"normal\\",\\n    \\"projectId\\": \\"-\\",\\n    \\"switchedTime\\": 1590486386,\\n    \\"commodityCode\\": \\"opensearch\\",\\n    \\"expireOn\\": \\"-\\",\\n    \\"domain\\": \\"GENERAL\\",\\n    \\"description\\": \\"-\\",\\n    \\"firstRankAlgoDeploymentId\\": 0,\\n    \\"produced\\": 1,\\n    \\"lockedByExpiration\\": 0,\\n    \\"quota\\": {\\n      \\"spec\\": \\"opensearch.share.common\\",\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>766CF6DB-CA02-3E12-7CBA-6AC21FC978FD</requestId>","errorExample":""}]',
      'title' => '创建一个应用',
      'summary' => '创建一个OpenSearch应用。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| name | String | 是 | "my_app" | 应用名称 |
| type | String | 是 | "standard" | 应用类型<br />- standard 标准版<br />- enhanced 高级版<br /> |
| quota | Object | 是 |  | 应用配额信息<br />参考：[Quota](~~170001~~) |
| chargeType | String | 否 | "POSTPAY" | 付费类型<br />- POSTPAY 后付费（按量付费）（默认值）<br />- PREPAY 预付费（包年包月）<br /> |
| order | Object | 否 | {"duration": 1,"pricingCycle": "Year"} | 订购周期信息 |
| order.duration | Integer | -- | 1 | 订购周期<br />最小值不小于0 |
| order.pricingCycle | String | -- | "Year" | 订购周期单位<br />- Year<br />- Month<br /> |
| order.autoRenew | Boolean | 否 | true | 是否要自动续费。当参数chargeType取值PREPAY时才生效。取值范围：<br />- true：自动续费。<br />- false（默认）：不自动续费。<br /> |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyAppGroup' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'description' => 
              array (
                'description' => '描述',
                'type' => 'string',
                'required' => false,
                'example' => '"实例描述"',
              ),
              'currentVersion' => 
              array (
                'description' => '在线版本。',
                'type' => 'string',
                'required' => false,
                'example' => '1223232',
              ),
              'domain' => 
              array (
                'description' => '行业类型：

- general：通用行业。
- ecommerce：电商行业。
- education：教育行业。
- esports：游戏行业。
- community：内容社区。',
                'type' => 'string',
                'required' => false,
                'example' => '"ecommerce"',
              ),
              'resourceGroupId' => 
              array (
                'description' => '实例所属的资源组ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'rg-****',
              ),
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否进行升级前校验。true表示校验，false表示不校验。',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '159013954',
                  ),
                  'currentVersion' => 
                  array (
                    'description' => '当前在线版本',
                    'type' => 'string',
                    'example' => '100302903',
                  ),
                  'pendingSecondRankAlgoDeploymentId' => 
                  array (
                    'description' => '部署中的精排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'lockMode' => 
                  array (
                    'description' => '锁定状态
- Unlock 正常
- LockByExpiration 实例过期自动锁定
- ManualLock 手动触发锁定',
                    'type' => 'string',
                    'example' => 'Unlock',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1590978265',
                  ),
                  'id' => 
                  array (
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => '100302881',
                  ),
                  'chargeType' => 
                  array (
                    'description' => '付费类型
- POSTPAY 后付费（按量付费）
- PREPAY 预付费（包年包月）',
                    'type' => 'string',
                    'example' => 'POSTPAY',
                  ),
                  'hasPendingQuotaReviewTask' => 
                  array (
                    'description' => '是否配额审批中
- 0：正常
- 1：配额审批中',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'secondRankAlgoDeploymentId' => 
                  array (
                    'description' => '精排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'name' => 
                  array (
                    'description' => '应用名称',
                    'type' => 'string',
                    'example' => 'lsh_test_1',
                  ),
                  'instanceId' => 
                  array (
                    'description' => '实例ID',
                    'type' => 'string',
                    'example' => '10030288',
                  ),
                  'processingOrderId' => 
                  array (
                    'description' => '未结束订单号',
                    'type' => 'string',
                    'example' => '1000345',
                  ),
                  'chargingWay' => 
                  array (
                    'description' => '计费类型
- 1：计算资源
- 2：qps',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'type' => 
                  array (
                    'description' => '应用类型
- standard 标准版
- advance 老高级版（新应用不支持此类型）
- enhanced 新高级版',
                    'type' => 'string',
                    'example' => 'enhanced',
                  ),
                  'status' => 
                  array (
                    'description' => '应用状态
- producing 生产中
- review_pending 生产审批中
- config_pending 待配置
- normal 正常
- frozen 已冻结',
                    'type' => 'string',
                    'example' => 'normal',
                  ),
                  'projectId' => 
                  array (
                    'description' => 'abtest project 名称',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'switchedTime' => 
                  array (
                    'description' => '在线版本切换时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1590486386',
                  ),
                  'commodityCode' => 
                  array (
                    'description' => '商品CODE',
                    'type' => 'string',
                    'example' => 'opensearch',
                  ),
                  'expireOn' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'domain' => 
                  array (
                    'description' => '行业类型
- GENERAL 通用
- ECOMMERCE 电商
- IT_CONTENT IT内容',
                    'type' => 'string',
                    'example' => 'GENERAL',
                  ),
                  'description' => 
                  array (
                    'description' => '应用描述',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'firstRankAlgoDeploymentId' => 
                  array (
                    'description' => '粗排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'produced' => 
                  array (
                    'description' => '是否生产完成
- 0：生产中
- 1：生产完成',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'lockedByExpiration' => 
                  array (
                    'description' => '实例是否过期自动锁定

- 0：否
- 1：是',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'quota' => 
                  array (
                    'description' => '应用配额信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'spec' => 
                      array (
                        'description' => '规格
- opensearch.share.junior 入门型
- opensearch.share.common 共享通用型
- opensearch.share.compute 共享计算型
- opensearch.share.storage 共享存储型
- opensearch.private.common 独享通用型
- opensearch.private.compute 独享计算型
- opensearch.private.storage 独享存储型',
                        'type' => 'string',
                        'example' => 'opensearch.share.common',
                      ),
                      'docSize' => 
                      array (
                        'description' => '存储容量（单位：GB）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'computeResource' => 
                      array (
                        'description' => '计算资源（单位：LCU）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '20',
                      ),
                    ),
                    'example' => '{}',
                  ),
                ),
                'example' => '{}',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 159013954,\\n    \\"currentVersion\\": \\"100302903\\",\\n    \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"updated\\": 1590978265,\\n    \\"id\\": \\"100302881\\",\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"hasPendingQuotaReviewTask\\": 0,\\n    \\"secondRankAlgoDeploymentId\\": 0,\\n    \\"name\\": \\"lsh_test_1\\",\\n    \\"instanceId\\": \\"10030288\\",\\n    \\"processingOrderId\\": \\"1000345\\",\\n    \\"chargingWay\\": 1,\\n    \\"type\\": \\"enhanced\\",\\n    \\"status\\": \\"normal\\",\\n    \\"projectId\\": \\"1\\",\\n    \\"switchedTime\\": 1590486386,\\n    \\"commodityCode\\": \\"opensearch\\",\\n    \\"expireOn\\": \\"1\\",\\n    \\"domain\\": \\"GENERAL\\",\\n    \\"description\\": \\"1\\",\\n    \\"firstRankAlgoDeploymentId\\": 0,\\n    \\"produced\\": 1,\\n    \\"lockedByExpiration\\": 0,\\n    \\"quota\\": {\\n      \\"spec\\": \\"opensearch.share.common\\",\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <id>110116134</id>\\n    <name>os_function_test_v1</name>\\n    <currentVersion>110116134</currentVersion>\\n    <switchedTime>0</switchedTime>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>20</computeResource>\\n        <spec>opensearch.share.common</spec>\\n    </quota>\\n    <chargingWay>1</chargingWay>\\n    <type>enhanced</type>\\n    <projectId/>\\n    <chargeType>POSTPAY</chargeType>\\n    <expireOn/>\\n    <instanceId/>\\n    <commodityCode>opensearch</commodityCode>\\n    <processingOrderId/>\\n    <firstRankAlgoDeploymentId>0</firstRankAlgoDeploymentId>\\n    <secondRankAlgoDeploymentId>0</secondRankAlgoDeploymentId>\\n    <pendingSecondRankAlgoDeploymentId>0</pendingSecondRankAlgoDeploymentId>\\n    <description>opensearch-demo</description>\\n    <produced>1</produced>\\n    <lockedByExpiration>0</lockedByExpiration>\\n    <hasPendingQuotaReviewTask>0</hasPendingQuotaReviewTask>\\n    <created>1575442875</created>\\n    <updated>1578916076</updated>\\n    <status>normal</status>\\n    <lockMode>Unlock</lockMode>\\n</result>","errorExample":""}]',
      'title' => '修改应用属性或设置应用在线版本',
      'summary' => '修改 OpenSearch 应用属性或设置应用在线版本。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| chargingWay | Integer | 否 | 1 | 计费模型<br />- 1  计算资源<br />- 2  qps<br /> |
| description | String | 否 | "my_first_app" | 应用描述 |
| currentVersion | Integer | 否 | 12345678 | 应用版本ID |

注：优先执行“设置应用在线版本”，即若所有字段都存在，则默认currentVersion有效。<br />


',
      'responseParamsDescription' => ' ',
    ),
    'ModifyAppGroupQuota' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/quota',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否校验入参数据合法性，默认false。

取值：

- **true**：只校验参数合法性。

- **false**：校验参数合法性，创建归因配置。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体。',
            'required' => false,
            '$ref' => '#/components/schemas/Quota',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '应用信息',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1590139542',
                  ),
                  'currentVersion' => 
                  array (
                    'description' => '当前在线版本',
                    'type' => 'string',
                    'example' => '100302903',
                  ),
                  'pendingSecondRankAlgoDeploymentId' => 
                  array (
                    'description' => '部署中的精排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'type' => 
                  array (
                    'description' => '应用类型
- standard 标准版
- advance 老高级版（新应用不支持此类型）
- enhanced 新高级版',
                    'type' => 'string',
                    'example' => 'enhanced',
                  ),
                  'chargingWay' => 
                  array (
                    'description' => '计费类型
- 1：计算资源
- 2：qps',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'lockMode' => 
                  array (
                    'description' => '锁定状态
- Unlock 正常
- LockByExpiration 实例过期自动锁定
- ManualLock 手动触发锁定',
                    'type' => 'string',
                    'example' => 'Unlock',
                  ),
                  'status' => 
                  array (
                    'description' => '应用状态
- producing 生产中
- review_pending 生产审批中
- config_pending 待配置
- normal 正常
- frozen 已冻结',
                    'type' => 'string',
                    'example' => 'normal',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1590978265',
                  ),
                  'chargeType' => 
                  array (
                    'description' => '付费类型
- POSTPAY 后付费（按量付费）
- PREPAY 预付费（包年包月）',
                    'type' => 'string',
                    'example' => 'POSTPAY',
                  ),
                  'id' => 
                  array (
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => '100302881',
                  ),
                  'hasPendingQuotaReviewTask' => 
                  array (
                    'description' => '是否配额审批中
- 0：正常
- 1：配额审批中',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'projectId' => 
                  array (
                    'description' => 'abtest project 名称',
                    'type' => 'string',
                    'example' => '1000',
                  ),
                  'secondRankAlgoDeploymentId' => 
                  array (
                    'description' => '精排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'commodityCode' => 
                  array (
                    'description' => '商品CODE',
                    'type' => 'string',
                    'example' => 'opensearch',
                  ),
                  'switchedTime' => 
                  array (
                    'description' => '在线版本切换时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1590486386',
                  ),
                  'expireOn' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => ' 1',
                  ),
                  'description' => 
                  array (
                    'description' => '应用描述',
                    'type' => 'string',
                    'example' => ' 1',
                  ),
                  'firstRankAlgoDeploymentId' => 
                  array (
                    'description' => '粗排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'lockedByExpiration' => 
                  array (
                    'description' => '实例过期自动锁定',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'produced' => 
                  array (
                    'description' => '是否生产完成
- 0：生产中
- 1：生产完成',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'name' => 
                  array (
                    'description' => '应用名称',
                    'type' => 'string',
                    'example' => 'lsh_test_1',
                  ),
                  'processingOrderId' => 
                  array (
                    'description' => '未结束订单号',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'instanceId' => 
                  array (
                    'description' => '实例ID',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'quota' => 
                  array (
                    'description' => '应用配额信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'spec' => 
                      array (
                        'description' => '规格
- opensearch.share.junior 入门型
- opensearch.share.common 共享通用型
- opensearch.share.compute 共享计算型
- opensearch.share.storage 共享存储型
- opensearch.private.common 独享通用型
- opensearch.private.compute 独享计算型
- opensearch.private.storage 独享存储型',
                        'type' => 'string',
                        'example' => 'opensearch.share.common',
                      ),
                      'docSize' => 
                      array (
                        'description' => '存储容量（单位：GB）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'computeResource' => 
                      array (
                        'description' => '计算资源（单位：LCU）',
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
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"created\\": 1590139542,\\n    \\"currentVersion\\": \\"100302903\\",\\n    \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n    \\"type\\": \\"enhanced\\",\\n    \\"chargingWay\\": 1,\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"status\\": \\"normal\\",\\n    \\"updated\\": 1590978265,\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"id\\": \\"100302881\\",\\n    \\"hasPendingQuotaReviewTask\\": 0,\\n    \\"projectId\\": \\"1000\\",\\n    \\"secondRankAlgoDeploymentId\\": 0,\\n    \\"commodityCode\\": \\"opensearch\\",\\n    \\"switchedTime\\": 1590486386,\\n    \\"expireOn\\": \\" 1\\",\\n    \\"description\\": \\" 1\\",\\n    \\"firstRankAlgoDeploymentId\\": 0,\\n    \\"lockedByExpiration\\": 0,\\n    \\"produced\\": 1,\\n    \\"name\\": \\"lsh_test_1\\",\\n    \\"processingOrderId\\": \\"1\\",\\n    \\"instanceId\\": \\"1\\",\\n    \\"quota\\": {\\n      \\"spec\\": \\"opensearch.share.common\\",\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <id>110116134</id>\\n    <name>os_function_test_v1</name>\\n    <currentVersion>110116134</currentVersion>\\n    <switchedTime>0</switchedTime>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>20</computeResource>\\n        <spec>opensearch.share.common</spec>\\n    </quota>\\n    <chargingWay>1</chargingWay>\\n    <type>enhanced</type>\\n    <projectId/>\\n    <chargeType>POSTPAY</chargeType>\\n    <expireOn/>\\n    <instanceId/>\\n    <commodityCode>opensearch</commodityCode>\\n    <processingOrderId/>\\n    <firstRankAlgoDeploymentId>0</firstRankAlgoDeploymentId>\\n    <secondRankAlgoDeploymentId>0</secondRankAlgoDeploymentId>\\n    <pendingSecondRankAlgoDeploymentId>0</pendingSecondRankAlgoDeploymentId>\\n    <description/>\\n    <produced>1</produced>\\n    <lockedByExpiration>0</lockedByExpiration>\\n    <hasPendingQuotaReviewTask>0</hasPendingQuotaReviewTask>\\n    <created>1575442875</created>\\n    <updated>1578916076</updated>\\n    <status>normal</status>\\n    <lockMode>Unlock</lockMode>\\n</result>","errorExample":""}]',
      'title' => '修改应用配额',
      'summary' => '修改 OpenSearch 应用配额。',
      'requestParamsDescription' => '**请求体**<br />
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| docSize | Integer | 是 | 1 | 存储容量（单位：GB）    共享通用型（1～300G）|
| computeResource | Integer | 是 | 20 | 计算资源（单位：LCU）   共享通用型（20～5000LCU） |
| spec | String | 是 | "opensearch.share.common" | 规格 |
| orderType | String | 否 | "UPGRADE" | 变配类型<br />- UPGRADE  升配<br />- DOWNGRADE  降配<br /> |

参考：[Quota](~~170001~~)<br />',
      'responseParamsDescription' => ' ',
    ),
    'RemoveAppGroup' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '121001650',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3AA29D02-54F3-8569-F71A-90E1B7BE4E7E',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回详情结果

',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '[]',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"3AA29D02-54F3-8569-F71A-90E1B7BE4E7E\\",\\n  \\"result\\": [\\n    0\\n  ]\\n}","type":"json"}]',
      'title' => '删除APP分组',
      'summary' => '删除一个OpenSearch应用。',
      'description' => '仅支持删除按量付费的应用，不支持删除包年包月的应用。',
    ),
    'ListAppGroups' => 
    array (
      'path' => '/v4/openapi/app-groups',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，默认 pageNumber=1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认 pageSize=10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'instanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID（精确匹配）',
            'type' => 'string',
            'required' => false,
            'example' => 'ops-cn-xxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => false,
            'example' => 'my_name',
          ),
        ),
        4 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用类型

- standard 标准版
- enhanced 新高级版',
            'type' => 'string',
            'required' => false,
            'example' => 'standard',
          ),
        ),
        5 => 
        array (
          'name' => 'sortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排列顺序

- 0：按创建时间降序排列
- 1：按修改时间降序排列

默认 sortBy=0',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'resourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源id',
            'type' => 'string',
            'required' => false,
            'example' => '"110123123"',
          ),
        ),
        7 => 
        array (
          'name' => 'tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'key' => 
                array (
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'foo',
                ),
                'value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'bar',
                ),
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '应用信息

参考：[AppGroup](~~170000~~)',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果体',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间戳',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1575442875',
                    ),
                    'currentVersion' => 
                    array (
                      'description' => '当前在线版本',
                      'type' => 'string',
                      'example' => '110116134',
                    ),
                    'pendingSecondRankAlgoDeploymentId' => 
                    array (
                      'description' => '部署中的精排部署ID',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'lockMode' => 
                    array (
                      'description' => '锁定状态

- Unlock 正常
- LockByExpiration 实例过期自动锁定
- ManualLock 手动触发锁定',
                      'type' => 'string',
                      'example' => 'Unlock',
                    ),
                    'updated' => 
                    array (
                      'description' => '更新时间戳',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1578916076',
                    ),
                    'id' => 
                    array (
                      'description' => '应用ID',
                      'type' => 'string',
                      'example' => '110116134',
                    ),
                    'chargeType' => 
                    array (
                      'description' => '付费类型

- POSTPAY 后付费（按量付费）
- PREPAY 预付费（包年包月）',
                      'type' => 'string',
                      'example' => 'POSTPAY',
                    ),
                    'hasPendingQuotaReviewTask' => 
                    array (
                      'description' => '是否配额审批中

- 0：正常
- 1：配额审批中',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'secondRankAlgoDeploymentId' => 
                    array (
                      'description' => '精排部署ID',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'name' => 
                    array (
                      'description' => '应用名称',
                      'type' => 'string',
                      'example' => 'os_function_test_v1',
                    ),
                    'instanceId' => 
                    array (
                      'description' => '实例ID',
                      'type' => 'string',
                      'example' => '"xxx"',
                    ),
                    'processingOrderId' => 
                    array (
                      'description' => '未结束订单号',
                      'type' => 'string',
                      'example' => '"xxx"',
                    ),
                    'chargingWay' => 
                    array (
                      'description' => '计费类型

- 1：计算资源
- 2：qps',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'type' => 
                    array (
                      'description' => '应用类型

- standard 标准版
- advance 老高级版（新应用不支持此类型）
- enhanced 新高级版',
                      'type' => 'string',
                      'example' => 'enhanced',
                    ),
                    'status' => 
                    array (
                      'description' => '应用状态

- producing 生产中
- review_pending 生产审批中
- config_pending 待配置
- normal 正常
- frozen 已冻结',
                      'type' => 'string',
                      'example' => 'normal',
                    ),
                    'projectId' => 
                    array (
                      'description' => 'abtest project 名称',
                      'type' => 'string',
                      'example' => '"xxx"',
                    ),
                    'switchedTime' => 
                    array (
                      'description' => '在线版本切换时间戳',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'commodityCode' => 
                    array (
                      'description' => '商品CODE',
                      'type' => 'string',
                      'example' => 'opensearch',
                    ),
                    'expireOn' => 
                    array (
                      'description' => '过期时间',
                      'type' => 'string',
                      'example' => '"xxx"',
                    ),
                    'domain' => 
                    array (
                      'description' => 'domain',
                      'type' => 'string',
                      'example' => '""',
                    ),
                    'description' => 
                    array (
                      'description' => '应用描述',
                      'type' => 'string',
                      'example' => '"xxx"',
                    ),
                    'firstRankAlgoDeploymentId' => 
                    array (
                      'description' => '粗排部署ID',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'produced' => 
                    array (
                      'description' => '是否生产完成

- 0：生产中
- 1：生产完成',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'lockedByExpiration' => 
                    array (
                      'description' => '实例过期自动锁定',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'quota' => 
                    array (
                      'description' => '应用配额信息
参考：[Quota](~~170001~~)',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'spec' => 
                        array (
                          'description' => '规格

- opensearch.share.junior 入门型
- opensearch.share.common 共享通用型
- opensearch.share.compute 共享计算型
- opensearch.share.storage 共享存储型
- opensearch.private.common 独享通用型
- opensearch.private.compute 独享计算型
- opensearch.private.storage 独享存储型',
                          'type' => 'string',
                          'example' => 'opensearch.share.common',
                        ),
                        'docSize' => 
                        array (
                          'description' => '存储容量（单位：GB）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'computeResource' => 
                        array (
                          'description' => '计算资源（单位：LCU）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '20',
                        ),
                      ),
                      'example' => '{}',
                    ),
                    'tags' => 
                    array (
                      'description' => '应用标签',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'key' => 
                          array (
                            'description' => '标签键',
                            'type' => 'string',
                            'example' => 'foo',
                          ),
                          'value' => 
                          array (
                            'description' => '标签值',
                            'type' => 'string',
                            'example' => 'bar',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'example' => '{}',
                ),
                'example' => '[]',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1575442875,\\n      \\"currentVersion\\": \\"110116134\\",\\n      \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n      \\"lockMode\\": \\"Unlock\\",\\n      \\"updated\\": 1578916076,\\n      \\"id\\": \\"110116134\\",\\n      \\"chargeType\\": \\"POSTPAY\\",\\n      \\"hasPendingQuotaReviewTask\\": 0,\\n      \\"secondRankAlgoDeploymentId\\": 0,\\n      \\"name\\": \\"os_function_test_v1\\",\\n      \\"instanceId\\": \\"\\\\\\"xxx\\\\\\"\\",\\n      \\"processingOrderId\\": \\"\\\\\\"xxx\\\\\\"\\",\\n      \\"chargingWay\\": 1,\\n      \\"type\\": \\"enhanced\\",\\n      \\"status\\": \\"normal\\",\\n      \\"projectId\\": \\"\\\\\\"xxx\\\\\\"\\",\\n      \\"switchedTime\\": 0,\\n      \\"commodityCode\\": \\"opensearch\\",\\n      \\"expireOn\\": \\"\\\\\\"xxx\\\\\\"\\",\\n      \\"domain\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"description\\": \\"\\\\\\"xxx\\\\\\"\\",\\n      \\"firstRankAlgoDeploymentId\\": 0,\\n      \\"produced\\": 1,\\n      \\"lockedByExpiration\\": 0,\\n      \\"quota\\": {\\n        \\"spec\\": \\"opensearch.share.common\\",\\n        \\"docSize\\": 1,\\n        \\"computeResource\\": 20\\n      },\\n      \\"tags\\": [\\n        {\\n          \\"key\\": \\"foo\\",\\n          \\"value\\": \\"bar\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<totalCount>1</totalCount>\\n<result>\\n    <id>110116134</id>\\n    <name>os_function_test_v1</name>\\n    <currentVersion>110116134</currentVersion>\\n    <switchedTime>0</switchedTime>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>20</computeResource>\\n        <spec>opensearch.share.common</spec>\\n    </quota>\\n    <chargingWay>1</chargingWay>\\n    <type>enhanced</type>\\n    <projectId/>\\n    <chargeType>POSTPAY</chargeType>\\n    <expireOn/>\\n    <instanceId/>\\n    <commodityCode>opensearch</commodityCode>\\n    <processingOrderId/>\\n    <firstRankAlgoDeploymentId>0</firstRankAlgoDeploymentId>\\n    <secondRankAlgoDeploymentId>0</secondRankAlgoDeploymentId>\\n    <pendingSecondRankAlgoDeploymentId>0</pendingSecondRankAlgoDeploymentId>\\n    <description/>\\n    <produced>1</produced>\\n    <lockedByExpiration>0</lockedByExpiration>\\n    <hasPendingQuotaReviewTask>0</hasPendingQuotaReviewTask>\\n    <created>1575442875</created>\\n    <updated>1578916076</updated>\\n    <status>normal</status>\\n    <lockMode>Unlock</lockMode>\\n</result>","errorExample":""}]',
      'title' => '获取应用列表',
      'summary' => '获取OpenSearch应用列表。',
      'description' => '- 支持按照 name、instanceId、type 进行过滤
- 支持按照应用的创建时间排序
- 支持分页参数',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateApp' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求Body。',
            'required' => false,
            '$ref' => '#/components/schemas/App',
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
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ABCDEFG',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"ABCDEFG\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>8664F6B7-9DD8-096A-FA3E-EBEE199EB94C</requestId>\\n<result>\\n    <id>123456</id>\\n    <description/>\\n    <status>initializing</status>\\n    <fetchFields>id</fetchFields>\\n    <fetchFields>title</fetchFields>\\n    <fetchFields>buy</fetchFields>\\n    <fetchFields>cate_id</fetchFields>\\n    <fetchFields>cate_name</fetchFields>\\n    <type>enhanced</type>\\n    <schema>\\n        <tables>\\n            <main>\\n                <name>main</name>\\n                <primaryTable>true</primaryTable>\\n                <fields>\\n                    <id>\\n                        <name>id</name>\\n                        <type>LITERAL</type>\\n                        <primaryKey>true</primaryKey>\\n                    </id>\\n                    <title>\\n                        <name>title</name>\\n                        <type>TEXT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </title>\\n                    <buy>\\n                        <name>buy</name>\\n                        <type>INT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </buy>\\n                    <cate_id>\\n                        <name>cate_id</name>\\n                        <type>INT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </cate_id>\\n                    <cate_name>\\n                        <name>cate_name</name>\\n                        <type>LITERAL</type>\\n                        <primaryKey>false</primaryKey>\\n                    </cate_name>\\n                </fields>\\n            </main>\\n        </tables>\\n        <indexes>\\n            <searchFields>\\n                <id>\\n                    <fields>id</fields>\\n                </id>\\n                <default>\\n                    <fields>title</fields>\\n                    <analyzer>chn_standard</analyzer>\\n                </default>\\n                <cate_name>\\n                    <fields>cate_name</fields>\\n                </cate_name>\\n            </searchFields>\\n            <filterFields>id</filterFields>\\n            <filterFields>buy</filterFields>\\n            <filterFields>cate_id</filterFields>\\n            <filterFields>cate_name</filterFields>\\n        </indexes>\\n    </schema>\\n    <algoDeploymentId>0</algoDeploymentId>\\n    <created>0</created>\\n    <progressPercent>0</progressPercent>\\n</result>","errorExample":""}]',
      'title' => '创建一个应用版本',
      'summary' => '创建一个OpenSearch应用版本。',
      'description' => '- 若已存在同名标准版应用，则创建新版本；
- 在新建版本情况下，autoSwitch 和 realtimeShared 也是必填的；
- 在新建版本情况下，quota 是自动从上一个版本继承的；
- 在新建版本情况下，修改 quota 是无效的。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| type | String | 是 | "standard" | 应用类型<br />- standard 标准版<br />- enhanced 高级版 |
| schema | Object | 是 |  | 应用版本结构<br />参考：[Schema](~~170003~~) |
| fetchFields | Array | 是 | ["id", "name"] | 默认展示字段 |
| realtimeShared | Boolean | 是 | false | 是否共享实时流 |
| autoSwitch | Boolean | 是 | false | 是否自动切上线 |
| description | String | 否 | "demo" | 备注 |
| quota | Object | 否 |  | 版本配额信息<br />参考：[Quota](~~170001~~) |
| dataSources[] | Object | 否 |  | 数据源详情<br />参考：[DataSource](~~170005~~) |
| firstRanks[] | Object | 否 |  | 粗排表达式配置详情<br />参考：[FirstRank](~~170007~~) |
| secondRanks[] | Object | 否 |  | 精排表达式配置详情<br />参考：[SecondRank](~~170008~~) |
| queryProcessors[] | Object | 否 |  | 查询意图理解规则配置详情<br />参考：[QueryProcessor](~~170014~~) |
| summaries[] | Object | 否 |  | 搜索结果摘要设置<br />参考：[Summary](~~170016~~) |

',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveApp' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110116134',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '33477D76-C380-2D84-A4AD-043F52876CB1',
              ),
              'result' => 
              array (
                'description' => '—',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '—',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '[]',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"33477D76-C380-2D84-A4AD-043F52876CB1\\",\\n  \\"result\\": [\\n    0\\n  ]\\n}","type":"json"}]',
      'title' => '删除一个应用版本',
      'summary' => '删除一个 OpenSearch应用版本。',
    ),
    'DescribeApps' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '77CAA411-0010-4DB9-82E2-1C384E590AFF',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '版本信息，参考：[App](~~170002~~)',
                  'type' => 'object',
                  'example' => '{}',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"77CAA411-0010-4DB9-82E2-1C384E590AFF\\",\\n  \\"result\\": [\\n    {}\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>71AB199D-8F00-5E69-BDC6-2829553D9BBC</requestId>\\n<result>\\n    <id>123123321</id>\\n    <virtualCluster/>\\n    <description/>\\n    <created>1650264344</created>\\n    <updated>1650264631</updated>\\n    <type>standard</type>\\n    <status>ok</status>\\n    <progressPercent>100</progressPercent>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>1</computeResource>\\n        <qps>0</qps>\\n        <spec>opensearch.share.common</spec>\\n        <usedDocSize>0</usedDocSize>\\n        <usedComputeResource>0</usedComputeResource>\\n        <usedQps>0</usedQps>\\n    </quota>\\n    <schema>\\n        <tables>\\n            <test>\\n                <name>test</name>\\n                <primaryTable>true</primaryTable>\\n                <fields>\\n                    <description>\\n                        <name>description</name>\\n                        <primaryKey>false</primaryKey>\\n                        <type>LITERAL</type>\\n                    </description>\\n                    <id>\\n                        <name>id</name>\\n                        <primaryKey>true</primaryKey>\\n                        <type>INT</type>\\n                    </id>\\n                </fields>\\n            </test>\\n        </tables>\\n        <indexes>\\n            <searchFields>\\n                <description>\\n                    <fields>description</fields>\\n                </description>\\n                <id>\\n                    <fields>id</fields>\\n                </id>\\n            </searchFields>\\n            <filterFields>id</filterFields>\\n            <filterFields>description</filterFields>\\n        </indexes>\\n    </schema>\\n    <fetchFields>id</fetchFields>\\n    <fetchFields>description</fetchFields>\\n    <firstRanks>\\n        <name>default</name>\\n        <description>sys default</description>\\n        <active>true</active>\\n        <created>1650264343</created>\\n        <updated>1650264343</updated>\\n        <type>STRUCT</type>\\n        <meta>\\n            <attribute>static_bm25()</attribute>\\n            <arg/>\\n            <weight>1</weight>\\n        </meta>\\n    </firstRanks>\\n    <secondRanks>\\n        <name>default</name>\\n        <description>sys default</description>\\n        <active>true</active>\\n        <created>1650264343</created>\\n        <updated>1650264343</updated>\\n        <meta/>\\n        <isDefault>true</isDefault>\\n    </secondRanks>\\n    <switchTime>1645520103</switchTime>\\n    <isCurrent>false</isCurrent>\\n</result>\\n<result>\\n    <id>121305419</id>\\n    <virtualCluster/>\\n    <description/>\\n    <created>1645519817</created>\\n    <updated>1645520103</updated>\\n    <type>standard</type>\\n    <status>ok</status>\\n    <progressPercent>100</progressPercent>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>1</computeResource>\\n        <qps>0</qps>\\n        <spec>opensearch.share.common</spec>\\n        <usedDocSize>0</usedDocSize>\\n        <usedComputeResource>0</usedComputeResource>\\n        <usedQps>0</usedQps>\\n    </quota>\\n    <schema>\\n        <tables>\\n            <test>\\n                <name>test</name>\\n                <primaryTable>true</primaryTable>\\n                <fields>\\n                    <description>\\n                        <name>description</name>\\n                        <primaryKey>false</primaryKey>\\n                        <type>LITERAL</type>\\n                    </description>\\n                    <id>\\n                        <name>id</name>\\n                        <primaryKey>true</primaryKey>\\n                        <type>INT</type>\\n                    </id>\\n                </fields>\\n            </test>\\n        </tables>\\n        <indexes>\\n            <searchFields>\\n                <description>\\n                    <fields>description</fields>\\n                </description>\\n                <id>\\n                    <fields>id</fields>\\n                </id>\\n            </searchFields>\\n            <filterFields>id</filterFields>\\n            <filterFields>description</filterFields>\\n        </indexes>\\n    </schema>\\n    <fetchFields>id</fetchFields>\\n    <fetchFields>description</fetchFields>\\n    <firstRanks>\\n        <name>default</name>\\n        <description>sys default</description>\\n        <active>true</active>\\n        <created>1645519817</created>\\n        <updated>1645519817</updated>\\n        <type>STRUCT</type>\\n        <meta>\\n            <attribute>static_bm25()</attribute>\\n            <arg/>\\n            <weight>1</weight>\\n        </meta>\\n    </firstRanks>\\n    <secondRanks>\\n        <name>default</name>\\n        <description>sys default</description>\\n        <active>true</active>\\n        <created>1645519817</created>\\n        <updated>1645519817</updated>\\n        <meta/>\\n        <isDefault>true</isDefault>\\n    </secondRanks>\\n    <switchTime>1645520103</switchTime>\\n    <isCurrent>true</isCurrent>\\n</result>","errorExample":""}]',
      'title' => '获取一个应用的版本列表',
      'summary' => '获取一个 OpenSearch 应用的版本列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeApp' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110116134',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '33477D76-C380-1D84-A4AD-043F52876CB1',
              ),
              'result' => 
              array (
                'description' => '版本信息',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '版本创建时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1590977140',
                  ),
                  'clusterName' => 
                  array (
                    'description' => '集群名称',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'autoSwitch' => 
                  array (
                    'description' => '是否自动切换',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'algoDeploymentId' => 
                  array (
                    'description' => '粗排部署 ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'type' => 
                  array (
                    'description' => '版本类型
- standard 标准版
- advance 老高级版（新应用不支持此类型）
- enhanced 新高级版',
                    'type' => 'string',
                    'example' => 'enhanced',
                  ),
                  'description' => 
                  array (
                    'description' => '版本描述',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'status' => 
                  array (
                    'description' => '版本状态
- ok 正常
- stopped 暂停
- frozen 已冻结
- initializing 版本初始化中
- unavailable 版本已失效
- data_waiting 等待数据初始化
- data_preparing 数据初始化中',
                    'type' => 'string',
                    'example' => 'ok',
                  ),
                  'schema' => 
                  array (
                    'description' => '应用结构',
                    'type' => 'object',
                    'example' => '{}',
                  ),
                  'progressPercent' => 
                  array (
                    'description' => '数据导入进度百分比（如83代表83%）',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'id' => 
                  array (
                    'description' => '版本ID',
                    'type' => 'string',
                    'example' => '100303063',
                  ),
                  'fetchFields' => 
                  array (
                    'description' => '默认展示字段',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '默认展示字段',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'example' => '[]',
                  ),
                  'quota' => 
                  array (
                    'description' => '配额信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'spec' => 
                      array (
                        'description' => '规格
- opensearch.share.junior 入门型
- opensearch.share.common 共享通用型
- opensearch.share.compute 共享计算型
- opensearch.share.storage 共享存储型
- opensearch.private.common 独享通用型
- opensearch.private.compute 独享计算型
- opensearch.private.storage 独享存储型',
                        'type' => 'string',
                        'example' => 'opensearch.share.common',
                      ),
                      'qps' => 
                      array (
                        'description' => '搜索请求（单位：次/秒）（老计费模型使用）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '5',
                      ),
                      'docSize' => 
                      array (
                        'description' => '存储容量（单位：GB）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'computeResource' => 
                      array (
                        'description' => '计算资源（单位：LCU）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '20',
                      ),
                    ),
                    'example' => '{}',
                  ),
                  'domain' => 
                  array (
                    'description' => '行业类型
- GENERAL 通用
- ECOMMERCE 电商
- IT_CONTENT IT内容',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'category' => 
                      array (
                        'description' => '类型-standard标准版-advance老高级版（新应用不支持此类型）-enhanced新高级版',
                        'type' => 'string',
                        'example' => '-',
                      ),
                      'name' => 
                      array (
                        'description' => '英文名称',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'functions' => 
                      array (
                        'description' => '搜索结果',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'service' => 
                          array (
                            'description' => '各个功能说明',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '功能1',
                              'type' => 'string',
                              'example' => '-',
                            ),
                            'example' => '[]',
                          ),
                          'qp' => 
                          array (
                            'description' => '布局信息',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '信息1',
                              'type' => 'string',
                              'example' => '-',
                            ),
                            'example' => '[]',
                          ),
                          'algo' => 
                          array (
                            'description' => '算法结构',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '结构1',
                              'type' => 'string',
                              'example' => '-',
                            ),
                            'example' => '[]',
                          ),
                        ),
                        'example' => '{}',
                      ),
                    ),
                    'example' => 'GENERAL',
                  ),
                ),
                'example' => '{}',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"33477D76-C380-1D84-A4AD-043F52876CB1\\",\\n  \\"result\\": {\\n    \\"created\\": 1590977140,\\n    \\"clusterName\\": \\"-\\",\\n    \\"autoSwitch\\": true,\\n    \\"algoDeploymentId\\": 0,\\n    \\"type\\": \\"enhanced\\",\\n    \\"description\\": \\"-\\",\\n    \\"status\\": \\"ok\\",\\n    \\"schema\\": {},\\n    \\"progressPercent\\": 100,\\n    \\"id\\": \\"100303063\\",\\n    \\"fetchFields\\": [\\n      \\"{}\\"\\n    ],\\n    \\"quota\\": {\\n      \\"spec\\": \\"opensearch.share.common\\",\\n      \\"qps\\": 5,\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    },\\n    \\"domain\\": {\\n      \\"category\\": \\"-\\",\\n      \\"name\\": \\"test\\",\\n      \\"functions\\": {\\n        \\"service\\": [\\n          \\"-\\"\\n        ],\\n        \\"qp\\": [\\n          \\"-\\"\\n        ],\\n        \\"algo\\": [\\n          \\"-\\"\\n        ]\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>33477D76-C380-1D84-A4AD-043F52876CB1</requestId>\\n<result>\\n    <id>100303063</id>\\n    <description/>\\n    <status>ok</status>\\n    <fetchFields>id</fetchFields>\\n    <fetchFields>title</fetchFields>\\n    <fetchFields>buy</fetchFields>\\n    <fetchFields>cate_id</fetchFields>\\n    <fetchFields>cate_name</fetchFields>\\n    <type>enhanced</type>\\n    <schema>\\n        <tables>\\n            <main>\\n                <primaryTable>true</primaryTable>\\n                <name>main</name>\\n                <fields>\\n                    <id>\\n                        <name>id</name>\\n                        <type>LITERAL</type>\\n                        <primaryKey>true</primaryKey>\\n                    </id>\\n                    <title>\\n                        <name>title</name>\\n                        <type>TEXT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </title>\\n                    <buy>\\n                        <name>buy</name>\\n                        <type>INT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </buy>\\n                    <cate_id>\\n                        <name>cate_id</name>\\n                        <type>INT</type>\\n                        <primaryKey>false</primaryKey>\\n                    </cate_id>\\n                    <cate_name>\\n                        <name>cate_name</name>\\n                        <type>LITERAL</type>\\n                        <primaryKey>false</primaryKey>\\n                    </cate_name>\\n                </fields>\\n            </main>\\n        </tables>\\n        <indexes>\\n            <searchFields>\\n                <id>\\n                    <fields>id</fields>\\n                </id>\\n                <default>\\n                    <fields>title</fields>\\n                    <analyzer>chn_standard</analyzer>\\n                </default>\\n                <buy>\\n                    <fields>buy</fields>\\n                </buy>\\n            </searchFields>\\n            <filterFields>id</filterFields>\\n            <filterFields>buy</filterFields>\\n            <filterFields>cate_id</filterFields>\\n            <filterFields>cate_name</filterFields>\\n        </indexes>\\n    </schema>\\n    <algoDeploymentId>0</algoDeploymentId>\\n    <firstRanks>\\n        <id/>\\n        <name>default</name>\\n        <description/>\\n        <active>false</active>\\n        <type>STRUCT</type>\\n        <meta>\\n            <attribute>static_bm25()</attribute>\\n            <arg/>\\n            <weight>1</weight>\\n        </meta>\\n        <created>0</created>\\n        <updated>0</updated>\\n    </firstRanks>\\n    <firstRanks>\\n        <id>887857</id>\\n        <name>first_rank_lsh_1</name>\\n        <description/>\\n        <active>true</active>\\n        <type>STRUCT</type>\\n        <meta>\\n            <attribute>static_bm25()</attribute>\\n            <arg/>\\n            <weight>10</weight>\\n        </meta>\\n        <meta>\\n            <attribute>exact_match_boost()</attribute>\\n            <arg/>\\n            <weight>20</weight>\\n        </meta>\\n        <meta>\\n            <attribute>buy</attribute>\\n            <arg/>\\n            <weight>30</weight>\\n        </meta>\\n        <created>1590977140</created>\\n        <updated>1590977140</updated>\\n    </firstRanks>\\n    <secondRanks>\\n        <id>-1</id>\\n        <name>default</name>\\n        <meta/>\\n        <active>true</active>\\n        <description/>\\n        <created>0</created>\\n        <updated>0</updated>\\n    </secondRanks>\\n    <summaries>\\n        <name>default</name>\\n        <meta>\\n            <field>title</field>\\n            <len>50</len>\\n            <element>em</element>\\n            <ellipsis>...</ellipsis>\\n            <snippet>1</snippet>\\n        </meta>\\n    </summaries>\\n    <created>1590977140</created>\\n    <queryProcessors>\\n        <name>sum_lsh_test_1</name>\\n        <active>true</active>\\n        <indexes>default</indexes>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary/>\\n            <name>stop_word</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary/>\\n            <name>spell_check</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary/>\\n            <name>term_weighting</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary/>\\n            <name>synonym</name>\\n        </processors>\\n        <domain>GENERAL</domain>\\n        <created>1590977142</created>\\n        <updated>1590977142</updated>\\n    </queryProcessors>\\n    <progressPercent>100</progressPercent>\\n</result>","errorExample":""}]',
      'title' => '查看一个应用版本详情',
      'summary' => '查看一个 OpenSearch 应用版本详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAppStatistics' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/statistics',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
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
              'result' => 
              array (
                'description' => '统计结果',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '76FC45F1-4167-D3CD-6737-4F97BA503FA0',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"76FC45F1-4167-D3CD-6737-4F97BA503FA0\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>76FC45F1-4167-D3CD-6737-4F97BA503FA0</requestId>\\n<result>\\n    <pv>5002</pv>\\n    <docCount>168</docCount>\\n    <docLastUpdated>1582522280</docLastUpdated>\\n    <quota>\\n        <instance>\\n            <used>0.000002</used>\\n            <quota>1</quota>\\n            <outOfLimit>false</outOfLimit>\\n            <tables>\\n                <main>2222</main>\\n            </tables>\\n        </instance>\\n        <qps>\\n            <used>0</used>\\n            <quota>0</quota>\\n            <outOfLimit>false</outOfLimit>\\n        </qps>\\n        <computeResource>\\n            <used>0</used>\\n            <quota>20</quota>\\n            <outOfLimit>false</outOfLimit>\\n            <dailyPeak>1.0306227624786388</dailyPeak>\\n        </computeResource>\\n        <spec>opensearch.share.common</spec>\\n        <docCount>\\n            <main>168</main>\\n        </docCount>\\n        <mainTable>main</mainTable>\\n    </quota>\\n</result>","errorExample":""}]',
      'title' => '获取应用版本的统计结果',
      'summary' => '获取 OpenSearch 应用版本的统计结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '**统计结果**
| 字段 | 类型 | 描述 |
| --- | --- | --- |
| result.pv | Integer | 请求量 |
| result.docCount | Integer | 文档大小（单位：个）  |
| result.docLastUpdated | String | 文档最近更新时间戳 |
| result.quota | Object | 配额统计结果 |
| result.quota.instance | Object | 实例统计结果 |
| result.quota.instance.used | Float | 已使用容量（单位：LCU） |
| result.quota.instance.quota | Integer | 配额容量（单位：GB） |
| result.quota.instance.outOfLimit | Boolean | 是否超出配额 |
| result.quota.instance.tables | Object | 各数据表使用统计结果<br />键名为表名，值为使用容量 |
| result.quota.qps | Object | QPS统计结果 |
| result.quota.qps.used | Float | 已使用次数 |
| result.quota.qps.quota | Integer | 配额次数 |
| result.quota.qps.outOfLimit | Boolean | 是否超出配额 |
| result.quota.qps.tables | Array | -- |
| result.quota.computeResource | Object | 计算资源统计结果 |
| result.quota.computeResource.used | Float | 已使用计算资源（单位：LCU） |
| result.quota.computeResource.quota | Integer | 配额计算资源（单位：GB） |
| result.quota.computeResource.outOfLimit | Boolean | 是否超出配额 |
| result.quota.computeResource.dailyPeak | Float | 最高峰值（单位：LCU） |
| result.quota.spec | String | 规格类型: <br />- opensearch.share.junior 入门型<br />- opensearch.share.common 共享通用型<br />- opensearch.share.compute 共享计算型<br />- opensearch.share.storage 共享存储型<br />- opensearch.private.common 独享通用型<br />- opensearch.private.compute 独享计算型<br />- opensearch.private.storage 独享存储型 |
| result.quota.docCount | Object | 文档大小统计结果<br />键名为表名，值为使用容量（单位：个） |
| result.quota.mainTable | String | 主表名称 |',
      'extraInfo' => ' ',
    ),
    'ListUserAnalyzers' => 
    array (
      'path' => '/v4/openapi/user-analyzers',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，默认 pageNumber=1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认 pageSize=10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '999999999',
            'minimum' => '-1',
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
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '自定义分析器

参考：[UserAnalyzer](~~178934~~)',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间戳',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1588054131',
                    ),
                    'available' => 
                    array (
                      'description' => '是否可用',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'name' => 
                    array (
                      'description' => '名称',
                      'type' => 'string',
                      'example' => 'kevin_test2',
                    ),
                    'updated' => 
                    array (
                      'description' => '更新时间戳',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1588054131',
                    ),
                    'id' => 
                    array (
                      'description' => '自定义分析器ID',
                      'type' => 'string',
                      'example' => '1234',
                    ),
                    'business' => 
                    array (
                      'description' => '基础分词器

- chn_standard [中文-通用分析](~~179424~~)
- chn_scene_name 中文－人名分析
- chn_ecommerce [中文-电商分析](~~179424~~)
- chn_it_content[ IT-内容分析](~~179424~~)
- en_min 英文－小粒度分析
- th_standard 泰语－通用分析
- th_ecommerce 泰语－电商分析
- vn_standard 越南语－通用分析
- chn_community_it 行业－内容IT分析
- chn_ecommerce_general 行业－电商通用分析
- chn_esports_general 行业－游戏通用分析
- chn_edu_question 行业－教育搜题',
                      'type' => 'string',
                      'example' => 'chn_standard',
                    ),
                    'dicts' => 
                    array (
                      'description' => '自定义分词词典

参考：[UserDict](~~178933~~)',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'created' => 
                          array (
                            'description' => '创建时间戳',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1588054131',
                          ),
                          'entriesCount' => 
                          array (
                            'description' => '词条数量',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '-1',
                          ),
                          'type' => 
                          array (
                            'description' => '类型

- segment 拆分',
                            'type' => 'string',
                            'example' => 'segment',
                          ),
                          'entriesLimit' => 
                          array (
                            'description' => '词条数量限制',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '4',
                          ),
                          'available' => 
                          array (
                            'description' => '是否可用',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'updated' => 
                          array (
                            'description' => '更新时间戳',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1588054131',
                          ),
                          'id' => 
                          array (
                            'description' => '词典ID',
                            'type' => 'string',
                            'example' => '123',
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
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1588054131,\\n      \\"available\\": false,\\n      \\"name\\": \\"kevin_test2\\",\\n      \\"updated\\": 1588054131,\\n      \\"id\\": \\"1234\\",\\n      \\"business\\": \\"chn_standard\\",\\n      \\"dicts\\": [\\n        {\\n          \\"created\\": 1588054131,\\n          \\"entriesCount\\": -1,\\n          \\"type\\": \\"segment\\",\\n          \\"entriesLimit\\": 4,\\n          \\"available\\": false,\\n          \\"updated\\": 1588054131,\\n          \\"id\\": \\"123\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<totalCount>1</totalCount>\\n<result>\\n    <id>1234</id>\\n    <name>kevin_test2</name>\\n    <business>chn_standard</business>\\n    <dicts>\\n        <id>123</id>\\n        <type>segment</type>\\n        <entriesLimit>4</entriesLimit>\\n        <entriesCount>-1</entriesCount>\\n        <available>false</available>\\n        <created>1588054131</created>\\n        <updated>1588054131</updated>\\n    </dicts>\\n    <available>true</available>\\n    <created>1588054131</created>\\n    <updated>1588054131</updated>\\n</result>","errorExample":""}]',
      'title' => '获取用户的自定义分词器列表',
      'summary' => '获取用户的自定义分词器列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateUserAnalyzer' => 
    array (
      'path' => '/v4/openapi/user-analyzers',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'title' => '名称',
                'description' => '名称',
                'type' => 'string',
                'required' => false,
                'example' => 'jmbon_analyzer',
              ),
              'business' => 
              array (
                'title' => '基础分词器',
                'description' => '基础分词器',
                'type' => 'string',
                'required' => false,
                'example' => '中文-通用分析',
              ),
              'businessType' => 
              array (
                'title' => '基础分词器类型 (AUTO, MODEL, SYSTEM, USER)',
                'description' => '基础分词器类型 (AUTO, MODEL, SYSTEM, USER)',
                'type' => 'string',
                'required' => false,
                'example' => 'AUTO',
              ),
              'type' => 
              array (
                'title' => '引擎类型 (HA3, ES)',
                'description' => '引擎类型 (HA3, ES)',
                'type' => 'string',
                'required' => false,
                'example' => 'HA3',
              ),
              'businessAppGroupId' => 
              array (
                'description' => '用于指定模型定制分析器所属应用ID',
                'type' => 'string',
                'required' => false,
                'example' => '110123123',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值含义如下：

- true：发送检查请求，不会创建终端节点。检查项包括AccessKey是否有效、RAM用户的授权情况和是否填写了必需参数。
- false（默认值）：立即触发创建终端节点。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '{}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '98724351-D6B2-5D8A-B089-7FFD1821A7E9',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {},\\n  \\"RequestId\\": \\"98724351-D6B2-5D8A-B089-7FFD1821A7E9\\"\\n}","type":"json"}]',
      'title' => '创建自定义分析器',
      'summary' => '创建自定义分析器。',
    ),
    'DescribeUserAnalyzer' => 
    array (
      'path' => '/v4/openapi/user-analyzers/{name}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '分析器名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'kevin_test',
          ),
        ),
        1 => 
        array (
          'name' => 'with',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关联信息，根据层级输出属性
- all 输出关联app信息',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
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
              'result' => 
              array (
                'description' => '自定义分析器，参考：[UserAnalyzer](~~178934~~)',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'FFAEF396-10EF-53C7-1F51-518853880729',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"FFAEF396-10EF-53C7-1F51-518853880729\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>FFAEF396-10EF-53C7-1F51-518853880729</requestId>\\n<result>\\n    <id>1234</id>\\n    <name>kevin_test</name>\\n    <business>chn_it_content</business>\\n    <available>true</available>\\n    <relatedAppInfoList>\\n        <id>100298352</id>\\n        <name>test_srn_mysql</name>\\n    </relatedAppInfoList>\\n    <dicts>\\n        <id>123</id>\\n        <type>segment</type>\\n        <entries>\\n            <cmd>add</cmd>\\n            <key>kevintest</key>\\n            <value>kevin test</value>\\n            <created>1536690285</created>\\n            <updated>1537348987</updated>\\n            <status>ACTIVE</status>\\n            <splitEnabled>true</splitEnabled>\\n        </entries>\\n        <entries>\\n            <cmd>add</cmd>\\n            <key>abcd</key>\\n            <value>abcd</value>\\n            <created>1536690285</created>\\n            <updated>1537348987</updated>\\n            <status>ACTIVE</status>\\n            <splitEnabled>true</splitEnabled>\\n        </entries>\\n        <entriesLimit>4</entriesLimit>\\n        <entriesCount>2</entriesCount>\\n        <available>true</available>\\n        <created>1584702214</created>\\n        <updated>1584702214</updated>\\n    </dicts>\\n    <created>1584702212</created>\\n    <updated>1584702212</updated>\\n</result>","errorExample":""}]',
      'title' => '获取自定义分析器详情',
      'summary' => '获取自定义分析器详情。',
    ),
    'RemoveUserAnalyzer' => 
    array (
      'path' => '/v4/openapi/user-analyzers/{name}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '分析器名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“kevin_test”',
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
              'result' => 
              array (
                'description' => '结果集（请求成功不返回该参数）',
                'type' => 'object',
                'example' => '[]',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": [],\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
      'title' => '删除自定义分析器',
      'summary' => '删除自定义分析器。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListUserAnalyzerEntries' => 
    array (
      'path' => '/v4/openapi/user-analyzers/{name}/entries',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '分析器名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"kevin_test"',
          ),
        ),
        1 => 
        array (
          'name' => 'word',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '词条key。',
            'type' => 'string',
            'required' => false,
            'example' => '"kevintest"',
          ),
        ),
        2 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，默认 pageNumber=1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认 pageSize=10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '999999999',
            'minimum' => '-1',
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
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => 'Object	自定义分析器词条
参考：UserAnalyzerEntry',
                'type' => 'object',
                'example' => '[
{
	"cmd": "add",
	"key": "kevintest",
	"value": "kevin test",
	"created": 1536690285,
	"updated": 1537348987,
	"status": "ACTIVE",
	"splitEnabled": true
}
]',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '516A02B7-2167-8D92-12D0-B639A2A0F3C5',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"cmd\\": \\"add\\",\\n      \\"key\\": \\"kevintest\\",\\n      \\"value\\": \\"kevin test\\",\\n      \\"created\\": 1536690285,\\n      \\"updated\\": 1537348987,\\n      \\"status\\": \\"ACTIVE\\",\\n      \\"splitEnabled\\": true\\n    }\\n  ],\\n  \\"RequestId\\": \\"516A02B7-2167-8D92-12D0-B639A2A0F3C5\\"\\n}","type":"json"}]',
      'title' => '获取自定义分析器词条清单',
      'summary' => '获取自定义分析器词条清单。',
    ),
    'PushUserAnalyzerEntries' => 
    array (
      'path' => '/v4/openapi/user-analyzers/{name}/entries/actions/bulk',
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
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '分析器名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“kevin_test”',
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'entries' => 
              array (
                'description' => '词条。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'cmd' => 
                    array (
                      'description' => '词条操作。

取值：

- add：添加。
- delete：删除。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '"add"',
                    ),
                    'key' => 
                    array (
                      'description' => '词条key信息。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '"testvalue"',
                    ),
                    'value' => 
                    array (
                      'description' => '分词结果。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '"test value"',
                    ),
                    'splitEnabled' => 
                    array (
                      'description' => '是否进行更细粒度切分。

默认true',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'true',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
                'maxItems' => 100,
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
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'example' => '[]',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [],\\n  \\"RequestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","type":"json"}]',
      'title' => '接收自定义分析器词条变更',
      'summary' => '接收自定义分析器词条变更。',
      'requestParamsDescription' => '注：
添加英文干预词条请全部用小写字母',
    ),
    'ListABTestScenes' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '实验场景

参考：[ABTestScene](~~173618~~)',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1588836130',
                    ),
                    'status' => 
                    array (
                      'description' => '状态

-  0 未生效
-  1 生效',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'updated' => 
                    array (
                      'description' => '最后修改时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1588836129',
                    ),
                    'name' => 
                    array (
                      'description' => '组别名',
                      'type' => 'string',
                      'example' => 'kevintest_2020-5-7_15:21:482',
                    ),
                    'id' => 
                    array (
                      'description' => '组ID',
                      'type' => 'string',
                      'example' => '20404',
                    ),
                    'values' => 
                    array (
                      'description' => '场景列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '场景列表',
                        'type' => 'string',
                        'example' => '["kevintest2"]',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1588836130,\\n      \\"status\\": 1,\\n      \\"updated\\": 1588836129,\\n      \\"name\\": \\"kevintest_2020-5-7_15:21:482\\",\\n      \\"id\\": \\"20404\\",\\n      \\"values\\": [\\n        \\"[\\\\\\"kevintest2\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>20404</id>\\n    <name>kevintest_2020-5-7_15:21:482</name>\\n    <status>1</status>\\n    <created>1588836130</created>\\n    <updated>1588836129</updated>\\n    <values>kevintest2</values>\\n</result>","errorExample":""}]',
      'title' => '列出场景清单',
      'summary' => '列出场景清单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateABTestScene' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => 'ABTest实验场景，参考[ABTestScene](~~173618~~)',
            'required' => false,
            '$ref' => '#/components/schemas/ABTestScene',
          ),
        ),
        2 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否校验入参数据合法性，默认false。

取值：

- **true**：只校验参数合法性。

- **false**：校验参数合法性，创建归因配置。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'status' => 
                  array (
                    'description' => '状态
- 0 未生效
- 1 生效',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'updated' => 
                  array (
                    'description' => '最后修改时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1589012351',
                  ),
                  'name' => 
                  array (
                    'description' => '组别名',
                    'type' => 'string',
                    'example' => 'kevintest_2020-5-7_15:21:48',
                  ),
                  'id' => 
                  array (
                    'description' => '组ID',
                    'type' => 'string',
                    'example' => '20405',
                  ),
                  'values' => 
                  array (
                    'description' => '场景标识',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '场景标识',
                      'type' => 'string',
                      'example' => '[       "kevintest"     ]',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 0,\\n    \\"status\\": 1,\\n    \\"updated\\": 1589012351,\\n    \\"name\\": \\"kevintest_2020-5-7_15:21:48\\",\\n    \\"id\\": \\"20405\\",\\n    \\"values\\": [\\n      \\"[       \\\\\\"kevintest\\\\\\"     ]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>20405</id>\\n    <name>kevintest_2020-5-7_15:21:48</name>\\n    <status>1</status>\\n    <created>1589012351</created>\\n    <updated>1589012351</updated>\\n    <values>kevintest</values>\\n</result>","errorExample":""}]',
      'title' => '创建 ABTest 实验场景',
      'summary' => '创建实验场景。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| name | String | 是 | "kevintest22" | 场景别名 |
| status| Integer| 否 | 0 | 场景状态- 0 停止实验- 1 启动实验 |
| created| Integer| 否 | 1589012351 | 创建时间 |
| updated| Integer| 否 | 1589012351 | 最后修改时间 |
| values[] | String | 否 | "kevintest22" | 场景标识 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeABTestScene' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验场景ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
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
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '实验场景。',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1596527691',
                  ),
                  'status' => 
                  array (
                    'description' => '场景状态
- 0 停止实验
- 1 启动实验',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'updated' => 
                  array (
                    'description' => '最后修改时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1596527691',
                  ),
                  'name' => 
                  array (
                    'description' => '场景别名',
                    'type' => 'string',
                    'example' => '"test"',
                  ),
                  'id' => 
                  array (
                    'description' => '场景ID',
                    'type' => 'string',
                    'example' => '20614',
                  ),
                  'values' => 
                  array (
                    'description' => '场景标识',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '场景标识',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1596527691,\\n    \\"status\\": 0,\\n    \\"updated\\": 1596527691,\\n    \\"name\\": \\"\\\\\\"test\\\\\\"\\",\\n    \\"id\\": \\"20614\\",\\n    \\"values\\": [\\n      \\"test\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取ABTest实验场景详情',
      'summary' => '获取实验场景详情。',
    ),
    'UpdateABTestScene' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => 'ABTest实验场景',
            'required' => false,
            '$ref' => '#/components/schemas/ABTestScene',
          ),
        ),
        3 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '实验场景
参考：[ABTestScene](~~173618~~)
',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1596527691',
                  ),
                  'params' => 
                  array (
                    'description' => '试验参数',
                    'type' => 'object',
                    'example' => '{}',
                  ),
                  'traffic' => 
                  array (
                    'description' => '实验分桶百分比取值范围：0-100',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '111',
                  ),
                  'online' => 
                  array (
                    'description' => '实验状态
- true：开启
- false：停止',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'name' => 
                  array (
                    'description' => '场景别名',
                    'type' => 'string',
                    'example' => 'kevintest22',
                  ),
                  'updated' => 
                  array (
                    'description' => '最后修改时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1596527691',
                  ),
                  'id' => 
                  array (
                    'description' => '场景ID',
                    'type' => 'string',
                    'example' => '20614',
                  ),
                ),
                'example' => '{}',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1596527691,\\n    \\"params\\": {},\\n    \\"traffic\\": 111,\\n    \\"online\\": true,\\n    \\"name\\": \\"kevintest22\\",\\n    \\"updated\\": 1596527691,\\n    \\"id\\": \\"20614\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>20405</id>\\n    <name>kevintest22</name>\\n    <status>1</status>\\n    <created>1589012351</created>\\n    <updated>1589012351</updated>\\n    <values>kevintest22</values>\\n</result>","errorExample":""}]',
      'title' => '修改实验场景',
      'summary' => '修改实验场景。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| name | String | 是 | "kevintest22" | 场景别名 |
| values[] | String | 是 | "kevintest22" | 场景标识 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteABTestScene' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称、应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
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
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '[]',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5C1C1C45-C64A-AD30-565F-140871D57E5E',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [],\\n  \\"requestId\\": \\"5C1C1C45-C64A-AD30-565F-140871D57E5E\\"\\n}","type":"json"}]',
      'title' => '删除 ABTest 实验场景',
      'summary' => '删除实验场景。',
    ),
    'ListABTestGroups' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '	“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '实验组

参考：[ABTestGroup](~~178935~~)',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1588839490',
                    ),
                    'status' => 
                    array (
                      'description' => '状态
- 0 未生效
- 1 生效',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'updated' => 
                    array (
                      'description' => '最后修改时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1588839490',
                    ),
                    'name' => 
                    array (
                      'description' => '组别名',
                      'type' => 'string',
                      'example' => 'Group_2020-5-7_15:23:3',
                    ),
                    'id' => 
                    array (
                      'description' => '组ID',
                      'type' => 'string',
                      'example' => '13466',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1588839490,\\n      \\"status\\": 1,\\n      \\"updated\\": 1588839490,\\n      \\"name\\": \\"Group_2020-5-7_15:23:3\\",\\n      \\"id\\": \\"13466\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>13466</id>\\n    <name>Group_2020-5-7_15:23:3</name>\\n    <status>1</status>\\n    <created>1588839490</created>\\n    <updated>1588839490</updated>\\n</result>","errorExample":""}]',
      'title' => '获取实验组清单',
      'summary' => '获取实验组清单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateABTestGroup' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体，参考：[ABTestGroup](~~178935~~)',
            'required' => false,
            '$ref' => '#/components/schemas/ABTestGroup',
          ),
        ),
        3 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否校验入参数据合法性，默认false。

取值：

- **true**：只校验参数合法性。

- **false**：校验参数合法性，创建归因配置。',
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588839490',
                  ),
                  'status' => 
                  array (
                    'description' => '状态
- 0 未生效
- 1 生效',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'updated' => 
                  array (
                    'description' => '最后修改时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588839490',
                  ),
                  'name' => 
                  array (
                    'description' => '组别名',
                    'type' => 'string',
                    'example' => 'Group_2020-5-7_15:23:3',
                  ),
                  'id' => 
                  array (
                    'description' => '组ID',
                    'type' => 'string',
                    'example' => '13466',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1588839490,\\n    \\"status\\": 1,\\n    \\"updated\\": 1588839490,\\n    \\"name\\": \\"Group_2020-5-7_15:23:3\\",\\n    \\"id\\": \\"13466\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<result>\\n    <created>1588839490</created>\\n    <name>Group_2020-5-7_15:23:3</name>\\n    <id>13466</id>\\n    <updated>1588839490</updated>\\n    <status>1</status>\\n</result>\\n<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
      'title' => '创建 ABTest 实验组',
      'summary' => '创建实验组。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| name | String | 是 | "kevintest3" | 实验组名称 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteABTestGroup' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
          ),
        ),
        2 => 
        array (
          'name' => 'groupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '组ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '13467',
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
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
      'title' => '删除 ABTest 实验组',
      'summary' => '删除实验组。',
    ),
    'DescribeABTestGroup' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
          ),
        ),
        2 => 
        array (
          'name' => 'groupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '组ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '13467',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '实验组',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588839490',
                  ),
                  'status' => 
                  array (
                    'description' => '状态
- 0 未生效
- 1 生效',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'updated' => 
                  array (
                    'description' => '最后修改时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588839490',
                  ),
                  'name' => 
                  array (
                    'description' => '组别名',
                    'type' => 'string',
                    'example' => 'Group_2020-5-7_15:23:3',
                  ),
                  'id' => 
                  array (
                    'description' => '组ID',
                    'type' => 'string',
                    'example' => '13466',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1588839490,\\n    \\"status\\": 1,\\n    \\"updated\\": 1588839490,\\n    \\"name\\": \\"Group_2020-5-7_15:23:3\\",\\n    \\"id\\": \\"13466\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>13466</id>\\n    <name>Group_2020-5-7_15:23:3</name>\\n    <status>1</status>\\n    <created>1588839490</created>\\n    <updated>1588839490</updated>\\n</result>","errorExample":""}]',
      'title' => '获取 ABTest 实验组详情',
      'summary' => '获取实验组详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateABTestGroup' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
          ),
        ),
        2 => 
        array (
          'name' => 'groupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '组ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '13467',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体，参考：[ABTestGroup](~~178935~~)',
            'required' => false,
            '$ref' => '#/components/schemas/ABTestGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值含义如下：

- true：发送检查请求，不会创建终端节点。检查项包括AccessKey是否有效、RAM用户的授权情况和是否填写了必需参数。
- false（默认值）：立即触发创建终端节点。',
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '\'\'1111\'\'',
              ),
              'result' => 
              array (
                'description' => '实验组',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588839490',
                  ),
                  'status' => 
                  array (
                    'description' => '状态
- 0 未生效
- 1 生效',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'updated' => 
                  array (
                    'description' => '最后修改时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588839490',
                  ),
                  'name' => 
                  array (
                    'description' => '组别名',
                    'type' => 'string',
                    'example' => 'Group_2020-5-7_15:23:3',
                  ),
                  'id' => 
                  array (
                    'description' => '组ID',
                    'type' => 'string',
                    'example' => '13466',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"\'\'1111\'\'\\",\\n  \\"result\\": {\\n    \\"created\\": 1588839490,\\n    \\"status\\": 1,\\n    \\"updated\\": 1588839490,\\n    \\"name\\": \\"Group_2020-5-7_15:23:3\\",\\n    \\"id\\": \\"13466\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>13467</id>\\n    <name>kevintestgroup222</name>\\n    <status>1</status>\\n    <created>1589016325</created>\\n    <updated>1589016544</updated>\\n</result>","errorExample":""}]',
      'title' => '修改 ABTest 实验组',
      'summary' => '修改实验组。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| name | String | 是 | "kevintest3" | 实验组名称 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListABTestExperiments' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '13467',
          ),
        ),
        2 => 
        array (
          'name' => 'groupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '组ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '实验详情  
参考：[ABTestExperiment](~~173617~~)',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1588842080',
                    ),
                    'params' => 
                    array (
                      'description' => '试验参数',
                      'type' => 'object',
                      'example' => '1',
                    ),
                    'traffic' => 
                    array (
                      'description' => '实验分桶百分比

取值范围：\\[0-100\\]',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '30',
                    ),
                    'online' => 
                    array (
                      'description' => '实验状态

- true 生效
- false 未生效',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'name' => 
                    array (
                      'description' => '组别名',
                      'type' => 'string',
                      'example' => 'test1',
                    ),
                    'updated' => 
                    array (
                      'description' => '最后修改时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1588842080',
                    ),
                    'id' => 
                    array (
                      'description' => '实验ID',
                      'type' => 'string',
                      'example' => '12888',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1588842080,\\n      \\"params\\": 1,\\n      \\"traffic\\": 30,\\n      \\"online\\": true,\\n      \\"name\\": \\"test1\\",\\n      \\"updated\\": 1588842080,\\n      \\"id\\": \\"12888\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>12888</id>\\n    <name>test1</name>\\n    <params>\\n        <firstFormulaName>default</firstFormulaName>\\n    </params>\\n    <created>1588842080</created>\\n    <updated>1588842080</updated>\\n    <online>true</online>\\n    <traffic>30</traffic>\\n</result>","errorExample":""}]',
      'title' => '列出实验清单',
      'summary' => '列出实验清单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateABTestExperiment' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
          ),
        ),
        2 => 
        array (
          'name' => 'groupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '组ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '13467',
          ),
        ),
        3 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否校验入参数据合法性，默认false。

取值：

- **true**：只校验参数合法性。

- **false**：校验参数合法性，创建归因配置。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体',
            'required' => false,
            '$ref' => '#/components/schemas/ABTestExperiment',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '实验详情',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'params' => 
                  array (
                    'description' => '实验参数',
                    'type' => 'object',
                    'example' => '{"firstFormulaName": "default"}',
                  ),
                  'traffic' => 
                  array (
                    'description' => '实验分桶百分比',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'online' => 
                  array (
                    'description' => '实验状态
- true 生效
- false 未生效',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'name' => 
                  array (
                    'description' => '实验别名',
                    'type' => 'string',
                    'example' => 'test3',
                  ),
                  'updated' => 
                  array (
                    'description' => '最后修改时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1589017861',
                  ),
                  'id' => 
                  array (
                    'description' => '实验ID',
                    'type' => 'string',
                    'example' => '12889',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 0,\\n    \\"params\\": {\\n      \\"firstFormulaName\\": \\"default\\"\\n    },\\n    \\"traffic\\": 30,\\n    \\"online\\": true,\\n    \\"name\\": \\"test3\\",\\n    \\"updated\\": 1589017861,\\n    \\"id\\": \\"12889\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<result>\\n    <created>0</created>\\n    <name>test3</name>\\n    <online>true</online>\\n    <id>12889</id>\\n    <params>\\n        <firstFormulaName>default</firstFormulaName>\\n    </params>\\n    <updated>1589017861</updated>\\n    <traffic>30</traffic>\\n</result>\\n<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
      'title' => '创建 ABTest 测试实验',
      'summary' => '创建实验。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| name | String | 是 | "my_test" | 实验名称 |
| traffic | Integer | 是 | 30 | 实验流量 |
| online | Boolean | 是 | true | 是否生效 |
| params | Object | 是 | {"firstFormulaName": "default"} | 实验配置，参考：[ABTestExperiment ](~~173617~~)|',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeABTestExperiment' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
          ),
        ),
        2 => 
        array (
          'name' => 'groupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '组ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '13467',
          ),
        ),
        3 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '12889',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '实验详情',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588842080',
                  ),
                  'traffic' => 
                  array (
                    'description' => '实验分桶百分比',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'online' => 
                  array (
                    'description' => '实验状态
- true 生效
- false 未生效',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'name' => 
                  array (
                    'description' => '实验别名',
                    'type' => 'string',
                    'example' => 'test1',
                  ),
                  'updated' => 
                  array (
                    'description' => '最后修改时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588842080',
                  ),
                  'id' => 
                  array (
                    'description' => '实验ID',
                    'type' => 'string',
                    'example' => '12888',
                  ),
                  'params' => 
                  array (
                    'description' => '试验参数',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'first_formula_name' => 
                      array (
                        'description' => '粗排策略名',
                        'type' => 'string',
                        'example' => 'default',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1588842080,\\n    \\"traffic\\": 30,\\n    \\"online\\": true,\\n    \\"name\\": \\"test1\\",\\n    \\"updated\\": 1588842080,\\n    \\"id\\": \\"12888\\",\\n    \\"params\\": {\\n      \\"first_formula_name\\": \\"default\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>12888</id>\\n    <name>test1</name>\\n    <params>\\n        <first_formula_name>default</first_formula_name>\\n    </params>\\n    <created>1588842080</created>\\n    <updated>1588842080</updated>\\n    <online>true</online>\\n    <traffic>30</traffic>\\n</result>","errorExample":""}]',
      'title' => '获取 ABTest 实验详情',
      'summary' => '获取实验详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateABTestExperiment' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
          ),
        ),
        2 => 
        array (
          'name' => 'groupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '组ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '13467',
          ),
        ),
        3 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '12889',
          ),
        ),
        4 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值含义如下：

- true：发送检查请求，不会创建终端节点。检查项包括AccessKey是否有效、RAM用户的授权情况和是否填写了必需参数。
- false（默认值）：立即触发创建终端节点。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体，参考：[ABTestExperiment](~~173617~~)',
            'required' => false,
            '$ref' => '#/components/schemas/ABTestExperiment',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '实验详情',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588842080',
                  ),
                  'params' => 
                  array (
                    'description' => '试验参数',
                    'type' => 'object',
                    'example' => '{}',
                  ),
                  'traffic' => 
                  array (
                    'description' => '实验分桶百分比
取值范围：0-100',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'online' => 
                  array (
                    'description' => '实验状态
- true 生效
- false 未生效',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'name' => 
                  array (
                    'description' => '实验别名',
                    'type' => 'string',
                    'example' => 'test1',
                  ),
                  'updated' => 
                  array (
                    'description' => '最后修改时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588842080',
                  ),
                  'id' => 
                  array (
                    'description' => '实验ID',
                    'type' => 'string',
                    'example' => '12888',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 1588842080,\\n    \\"params\\": {},\\n    \\"traffic\\": 30,\\n    \\"online\\": true,\\n    \\"name\\": \\"test1\\",\\n    \\"updated\\": 1588842080,\\n    \\"id\\": \\"12888\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <id>12889</id>\\n    <name>test333</name>\\n    <params>\\n        <firstFormulaName>default</firstFormulaName>\\n    </params>\\n    <created>1589017860</created>\\n    <updated>1589018211</updated>\\n    <online>true</online>\\n    <traffic>40</traffic>\\n</result>","errorExample":""}]',
      'title' => '修改实验参数',
      'summary' => '修改实验参数。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| name | String | 否 | "my_test" | 实验名称 |
| traffic | Integer | 否 | 30 | 实验流量 |
| online | Boolean | 否 | true | 是否生效 |
| params | Object | 否 |  {"firstFormulaName": "default"}  | 实验配置 |

',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteABTestExperiment' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
          ),
        ),
        2 => 
        array (
          'name' => 'groupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '组ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '13467',
          ),
        ),
        3 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '12889',
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
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
      'title' => '删除 ABTest 实验',
      'summary' => '删除实验。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListABTestFixedFlowDividers' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}/fixed-flow-dividers',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '12889',
          ),
        ),
        2 => 
        array (
          'name' => 'groupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '组ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '13467',
          ),
        ),
        3 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '白名单',
                  'type' => 'string',
                  'example' => '[     "D77D0DAF",     "133738165014"   ]',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    \\"[     \\\\\\"D77D0DAF\\\\\\",     \\\\\\"133738165014\\\\\\"   ]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>D77D0DAF</result>\\n<result>133738165014</result>","errorExample":""}]',
      'title' => '获取 ABTest 白名单清单',
      'summary' => '获取白名单清单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateABTestFixedFlowDividers' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scenes/{sceneId}/groups/{groupId}/experiments/{experimentId}/fixed-flow-dividers',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'sceneId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '场景ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '20404',
          ),
        ),
        2 => 
        array (
          'name' => 'groupId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '组ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '13467',
          ),
        ),
        3 => 
        array (
          'name' => 'experimentId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实验ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '-1',
            'example' => '12889',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'array',
            'items' => 
            array (
              'description' => '白名单数据',
              'type' => 'string',
              'required' => false,
              'example' => '"D77D0DAF"	',
            ),
            'required' => false,
            'maxItems' => 100,
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '白名单',
                  'type' => 'string',
                  'example' => '[  "D77D0DAF",   "133738165014"  ]',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    \\"[  \\\\\\"D77D0DAF\\\\\\",   \\\\\\"133738165014\\\\\\"  ]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>D77D0DAF</result>\\n<result>133738165014</result>","errorExample":""}]',
      'title' => '更新 ABTest 白名单数据',
      'summary' => '更新白名单数据。',
      'requestParamsDescription' => '
**路径参数**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| [] | String | 是 | "D77D0DAF" | 白名单数据 |
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFirstRanks' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/first-ranks',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '粗排表达式信息

参考：[FirstRank](~~170007~~)',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果体',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'active' => 
                    array (
                      'description' => '是否是默认表达式',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => '""',
                    ),
                    'updated' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'name' => 
                    array (
                      'description' => '名称',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                    'meta' => 
                    array (
                      'description' => '表达式信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '信息体',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'arg' => 
                          array (
                            'description' => '表达式函数参数

参考：[基础排序](~~180765~~)',
                            'type' => 'string',
                            'example' => '""',
                          ),
                          'attribute' => 
                          array (
                            'description' => '属性，算分特征或搜索字段

可用的算分特征，参考：[基础排序](~~180765~~)',
                            'type' => 'string',
                            'example' => 'static_bm25()',
                          ),
                          'weight' => 
                          array (
                            'description' => '权重
取值范围：-100000～100000非0值',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                        ),
                        'example' => '[]',
                      ),
                      'example' => '[]',
                    ),
                  ),
                  'example' => '{}',
                ),
                'example' => '[]',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 0,\\n      \\"active\\": true,\\n      \\"description\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"updated\\": 0,\\n      \\"name\\": \\"default\\",\\n      \\"meta\\": [\\n        {\\n          \\"arg\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"attribute\\": \\"static_bm25()\\",\\n          \\"weight\\": 1\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>default</name>\\n    <description/>\\n    <active>true</active>\\n    <type>STRUCT</type>\\n    <meta>\\n        <attribute>static_bm25()</attribute>\\n        <arg/>\\n        <weight>1</weight>\\n    </meta>\\n    <created>0</created>\\n    <updated>0</updated>\\n</result>","errorExample":""}]',
      'title' => '获取指定应用版本的粗排配置列表',
      'summary' => '获取指定OpenSearch应用版本的粗排配置列表。',
    ),
    'CreateFirstRank' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/first-ranks',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为空运行请求',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        2 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体，基础排序信息',
            'required' => false,
            '$ref' => '#/components/schemas/FirstRank',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '粗排表达式信息',
                'type' => 'object',
                'properties' => 
                array (
                  'active' => 
                  array (
                    'description' => '是否是默认表达式',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'name' => 
                  array (
                    'description' => '名称',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'meta' => 
                  array (
                    'description' => '表达式信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'arg' => 
                        array (
                          'description' => '表达式函数参数',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'attribute' => 
                        array (
                          'description' => '属性，算分特征或搜索字段',
                          'type' => 'string',
                          'example' => 'static_bm25()',
                        ),
                        'weight' => 
                        array (
                          'description' => '权重
取值范围：-100000～100000非0值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"active\\": true,\\n    \\"name\\": \\"default\\",\\n    \\"meta\\": [\\n      {\\n        \\"arg\\": \\"1\\",\\n        \\"attribute\\": \\"static_bm25()\\",\\n        \\"weight\\": 10\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>general_default</name>\\n    <description/>\\n    <active>false</active>\\n    <type>STRUCT</type>\\n    <meta>\\n        <attribute>static_bm25()</attribute>\\n        <arg/>\\n        <weight>2</weight>\\n    </meta>\\n    <meta>\\n        <attribute>hot_score</attribute>\\n        <arg/>\\n        <weight>0.000001</weight>\\n    </meta>\\n    <created>0</created>\\n    <updated>0</updated>\\n</result>","errorExample":""}]',
      'title' => '创建一个应用版本的粗排表达式配置',
      'summary' => '创建一个OpenSearch应用版本的粗排表达式配置。当 dryRun=true 时，表示进行粗排表达式校验，默认 dryRun不传为false。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| name | String | 是 |  "test"  | 表达式名称 |
| type | String | 是 |  "STRUCT"  | 表达式类型 <br />- STRUCT  结构化，默认值  <br />- STRING  自定义公式 |
| meta| Array 或 String| 是 |   | 表达式信息 |
| description | String | 否 |  "my_test"  | 描述 |
| active | Boolean | 否 |  true  | 是否是默认表达式 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFirstRank' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/first-ranks/{name}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '粗排表达式名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '粗排表达式信息',
                'type' => 'object',
                'properties' => 
                array (
                  'description' => 
                  array (
                    'description' => '描述',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'active' => 
                  array (
                    'description' => '是否是默认表达式',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'name' => 
                  array (
                    'description' => '名称',
                    'type' => 'string',
                    'example' => 'ar_wear_edit_time',
                  ),
                  'meta' => 
                  array (
                    'description' => '表达式信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'arg' => 
                        array (
                          'description' => '表达式函数参数',
                          'type' => 'string',
                          'example' => 'ar_edit_time',
                        ),
                        'attribute' => 
                        array (
                          'description' => '属性，算分特征或搜索字段',
                          'type' => 'string',
                          'example' => 'timeliness_ms()',
                        ),
                        'weight' => 
                        array (
                          'description' => '权重
取值范围：-100000～100000非0值',
                          'type' => 'number',
                          'format' => 'float',
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
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"description\\": \\"-\\",\\n    \\"active\\": false,\\n    \\"name\\": \\"ar_wear_edit_time\\",\\n    \\"meta\\": [\\n      {\\n        \\"arg\\": \\"ar_edit_time\\",\\n        \\"attribute\\": \\"timeliness_ms()\\",\\n        \\"weight\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>ar_wear_edit_time</name>\\n    <type>STRUCT</type>\\n    <meta>\\n        <attribute>timeliness_ms()</attribute>\\n        <arg>ar_edit_time</arg>\\n        <weight>1</weight>\\n    </meta>\\n    <description/>\\n    <active>false</active>\\n    <created>0</created>\\n    <updated>0</updated>\\n</result>","errorExample":""}]',
      'title' => '查看一个应用版本的粗排表达式配置',
      'summary' => '查看一个 OpenSearch 应用版本的粗排表达式配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveFirstRank' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/first-ranks/{name}',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '粗排表达式名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“test”',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E676FAB6-A0AC-64D9-F9D7-D0D33C930CFF',
              ),
              'result' => 
              array (
                'description' => '粗排表达式信息',
                'type' => 'object',
                'properties' => 
                array (
                  'description' => 
                  array (
                    'description' => '描述',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'active' => 
                  array (
                    'description' => '是否是默认表达式',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'name' => 
                  array (
                    'description' => '名称',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'meta' => 
                  array (
                    'description' => '表达式信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'arg' => 
                        array (
                          'description' => '表达式函数参数
参考：[基础排序](~~170007~~)',
                          'type' => 'string',
                          'example' => '""',
                        ),
                        'attribute' => 
                        array (
                          'description' => '属性，指算分特征或搜索字段，
可用的算分特征，参考：[基础排序](~~170007~~)',
                          'type' => 'string',
                          'example' => 'static_bm25()',
                        ),
                        'weight' => 
                        array (
                          'description' => '权重
取值范围：-100000～100000非0值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"E676FAB6-A0AC-64D9-F9D7-D0D33C930CFF\\",\\n  \\"result\\": {\\n    \\"description\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"active\\": true,\\n    \\"name\\": \\"default\\",\\n    \\"meta\\": [\\n      {\\n        \\"arg\\": \\"\\\\\\"\\\\\\"\\",\\n        \\"attribute\\": \\"static_bm25()\\",\\n        \\"weight\\": 10\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>E676FAB6-A0AC-64D9-F9D7-D0D33C930CFF</requestId>\\n<result>\\n    <name>test2</name>\\n    <description/>\\n    <active>false</active>\\n    <type>STRUCT</type>\\n    <meta>\\n        <attribute>timeliness()</attribute>\\n        <arg>hid</arg>\\n        <weight>1</weight>\\n    </meta>\\n    <created>1587708467</created>\\n    <updated>1587708467</updated>\\n</result>","errorExample":""}]',
      'title' => '删除粗排规则',
      'summary' => '删除指定 OpenSearch 应用版本的粗排配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
    ),
    'ModifyFirstRank' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/first-ranks/{name}',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为空运行请求',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        2 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        3 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '粗排表达式名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体',
            'required' => false,
            '$ref' => '#/components/schemas/FirstRank',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '粗排表达式信息',
                'type' => 'object',
                'properties' => 
                array (
                  'description' => 
                  array (
                    'description' => '描述',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'active' => 
                  array (
                    'description' => '是否是默认表达式',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'name' => 
                  array (
                    'description' => '名称',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'meta' => 
                  array (
                    'description' => '表达式信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'arg' => 
                        array (
                          'description' => '表达式函数参数',
                          'type' => 'string',
                          'example' => '“1 ”',
                        ),
                        'attribute' => 
                        array (
                          'description' => '属性，算分特征或搜索字段
可用的算分特征',
                          'type' => 'string',
                          'example' => 'static_bm25()',
                        ),
                        'weight' => 
                        array (
                          'description' => '权重
取值范围：-100000～100000非0值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"description\\": \\"1\\",\\n    \\"active\\": true,\\n    \\"name\\": \\"default\\",\\n    \\"meta\\": [\\n      {\\n        \\"arg\\": \\"“1 ”\\",\\n        \\"attribute\\": \\"static_bm25()\\",\\n        \\"weight\\": 10\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>ar_wear_edit_time</name>\\n    <type>STRUCT</type>\\n    <meta>\\n        <attribute>timeliness_ms()</attribute>\\n        <arg>ar_edit_time</arg>\\n        <weight>1</weight>\\n    </meta>\\n    <description/>\\n    <active>false</active>\\n    <created>0</created>\\n    <updated>0</updated>\\n</result>","errorExample":""}]',
      'title' => '修改一个应用版本的粗排表达式配置',
      'summary' => '修改一个 OpenSearch 应用版本的粗排表达式配置当 dryRun=true 时，表示修改后的粗排表达式进行校验，默认 dryRun 不传为 false。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| type | String | 是 | "STRUCT" | 表达式类型<br />- STRUCT  结构化，默认值<br />- STRING  自定义公式|
| meta | Array 或 String | 是 |  | 表达式信息 |
| description | String | 否 | "my_test" | 描述 |
| active | Boolean | 否 | true | 是否是默认表达式 |

参考：[FirstRank](~~170007~~)',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSecondRanks' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/second-ranks',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
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
              'totalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '精排表达式信息

参考：[SecondRank](~~170008~~)',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'active' => 
                    array (
                      'description' => '是否是默认表达式',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'isDefault' => 
                    array (
                      'description' => '是否是默认表达式（返回时展示，不作传参）

- true 是
- false 否',
                      'type' => 'string',
                      'example' => 'false',
                    ),
                    'isSys' => 
                    array (
                      'description' => '是否是系统表达式（返回时展示，不作传参）

- true 是
- false 否',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                    'description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => '""',
                    ),
                    'updated' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1587052801',
                    ),
                    'name' => 
                    array (
                      'description' => '名称',
                      'type' => 'string',
                      'example' => 'tests',
                    ),
                    'meta' => 
                    array (
                      'description' => '精排表达式
可以编写包含字段、算分特征和数学函数的表达式，实现复杂的排序逻辑',
                      'type' => 'string',
                      'example' => 'random()+now()',
                    ),
                    'id' => 
                    array (
                      'description' => 'ID（返回时展示，不作传参）',
                      'type' => 'string',
                      'example' => '890473',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 0,\\n      \\"active\\": false,\\n      \\"isDefault\\": \\"false\\",\\n      \\"isSys\\": \\"true\\",\\n      \\"description\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"updated\\": 1587052801,\\n      \\"name\\": \\"tests\\",\\n      \\"meta\\": \\"random()+now()\\",\\n      \\"id\\": \\"890473\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>default</name>\\n    <meta/>\\n    <active>false</active>\\n    <description/>\\n    <id>890473</id>\\n    <created>0</created>\\n    <updated>0</updated>\\n    <isDefault>false</isDefault>\\n    <isSys>true</isSys>\\n</result>\\n<result>\\n    <name>tests</name>\\n    <meta>random()+now()</meta>\\n    <active>true</active>\\n    <description/>\\n    <id>890474</id>\\n    <created>1587052801</created>\\n    <updated>1587052801</updated>\\n    <isDefault>true</isDefault>\\n    <isSys>false</isSys>\\n</result>\\n<result>\\n    <name>test</name>\\n    <meta>query_term_count()</meta>\\n    <active>false</active>\\n    <description/>\\n    <id>890475</id>\\n    <created>1587052801</created>\\n    <updated>1587052801</updated>\\n    <isDefault>false</isDefault>\\n    <isSys>false</isSys>\\n</result>\\n<totalCount>3</totalCount>","errorExample":""}]',
      'title' => '获取某版本的精排排配置列表',
      'summary' => '获取指定 OpenSearch 应用版本的精排排配置列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateSecondRank' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/second-ranks',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为空运行请求',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体，参考：[SecondRank](~~170008~~)',
            'required' => false,
            '$ref' => '#/components/schemas/SecondRank',
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
              'result' => 
              array (
                'description' => '精排表达式信息',
                'type' => 'object',
                'example' => '{}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"RequestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5E2F73C-8241-81F8-3A62-65478C5A3111</requestId>\\n<result>\\n    <id>89047</id>\\n    <name>test_1</name>\\n    <meta>text_relevance(title)</meta>\\n    <active>true</active>\\n    <description>123</description>\\n    <created>1593679894</created>\\n    <updated>1593679894</updated>\\n    <isDefault>true</isDefault>\\n    <isSys>false</isSys>\\n</result>","errorExample":""}]',
      'title' => '创建一个应用版本的精排配置',
      'summary' => '当 dryRun=true 时，表示进行精排表达式校验，默认 dryRun 不传为 false。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| name | String | 否 | "test" | 表达式名称 |
| meta | String | 否 | "random()" | 表达式信息 |
| description | String | 否 | "my_test" | 描述 |
| active | Boolean | 否 | true | 是否是默认表达式 |

参考：[SecondRank](~~170008~~)<br />',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSecondRank' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/second-ranks/{name}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '精排表达式名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '精排表达式信息',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1587052801',
                  ),
                  'active' => 
                  array (
                    'description' => '是否是默认表达式',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'isDefault' => 
                  array (
                    'description' => '是否是默认表达式（返回时展示，不作传参）
- true 是
- false 否',
                    'type' => 'string',
                    'example' => 'true',
                  ),
                  'isSys' => 
                  array (
                    'description' => '是否是系统表达式（返回时展示，不作传参）
- true 是
- false 否',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'description' => 
                  array (
                    'description' => '描述',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1587052801',
                  ),
                  'name' => 
                  array (
                    'description' => '名称',
                    'type' => 'string',
                    'example' => 'tests',
                  ),
                  'meta' => 
                  array (
                    'description' => '精排表达式
可以编写包含字段、算分特征和数学函数的表达式，实现复杂的排序逻辑',
                    'type' => 'string',
                    'example' => 'random()+now()',
                  ),
                  'id' => 
                  array (
                    'description' => 'ID（返回时展示，不作传参）',
                    'type' => 'string',
                    'example' => '89047',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"created\\": 1587052801,\\n    \\"active\\": true,\\n    \\"isDefault\\": \\"true\\",\\n    \\"isSys\\": \\"false\\",\\n    \\"description\\": \\"-\\",\\n    \\"updated\\": 1587052801,\\n    \\"name\\": \\"tests\\",\\n    \\"meta\\": \\"random()+now()\\",\\n    \\"id\\": \\"89047\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <id>89047</id>\\n    <name>tests</name>\\n    <meta>random()+now()</meta>\\n    <active>true</active>\\n    <description/>\\n    <created>1587052801</created>\\n    <updated>1587052801</updated>\\n    <isDefault>true</isDefault>\\n    <isSys>false</isSys>\\n</result>","errorExample":""}]',
      'title' => '查看一个应用版本的精排表达式配置',
      'summary' => '查看一个 OpenSearch 应用版本的精排表达式配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifySecondRank' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/second-ranks/{name}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '精排表达式名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为空运行请求',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'required' => false,
            '$ref' => '#/components/schemas/SecondRank',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'C5E2F73C-8241-81F8-3A62-65478C5A3111',
              ),
              'result' => 
              array (
                'description' => '精排表达式信息',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'active' => 
                  array (
                    'description' => '是否是默认表达式',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'isDefault' => 
                  array (
                    'description' => '是否是默认表达式（返回时展示，不作传参）
- true 是
- false 否',
                    'type' => 'string',
                    'example' => 'true',
                  ),
                  'isSys' => 
                  array (
                    'description' => '是否是系统表达式（返回时展示，不作传参）
- true 是
- false 否',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'description' => 
                  array (
                    'description' => '描述',
                    'type' => 'string',
                    'example' => '"11"',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'name' => 
                  array (
                    'description' => '名称',
                    'type' => 'string',
                    'example' => 'lsh_second_1',
                  ),
                  'meta' => 
                  array (
                    'description' => '精排表达式
可以编写包含字段、算分特征和数学函数的表达式，实现复杂的排序逻辑',
                    'type' => 'string',
                    'example' => 'cate_id > 0 and cate_id < 1000',
                  ),
                  'id' => 
                  array (
                    'description' => 'ID（返回时展示，不作传参）',
                    'type' => 'string',
                    'example' => '890473',
                  ),
                ),
                'example' => '{}',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"C5E2F73C-8241-81F8-3A62-65478C5A3111\\",\\n  \\"result\\": {\\n    \\"created\\": 1,\\n    \\"active\\": true,\\n    \\"isDefault\\": \\"true\\",\\n    \\"isSys\\": \\"false\\",\\n    \\"description\\": \\"\\\\\\"11\\\\\\"\\",\\n    \\"updated\\": 1,\\n    \\"name\\": \\"lsh_second_1\\",\\n    \\"meta\\": \\"cate_id > 0 and cate_id < 1000\\",\\n    \\"id\\": \\"890473\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>C5E2F73C-8241-81F8-3A62-65478C5A3111</requestId>\\n<result>\\n    <id>890473</id>\\n    <name>name_relevance</name>\\n    <meta>text_relevance(name)</meta>\\n    <active>true</active>\\n    <description>123</description>\\n    <created>1593679894</created>\\n    <updated>1593679894</updated>\\n    <isDefault>true</isDefault>\\n    <isSys>false</isSys>\\n</result>","errorExample":""}]',
      'title' => '修改一个应用版本的精排配置',
      'summary' => '修改一个OpenSearch 应用版本的精排配置。当 dryRun=true 时，表示修改后的精排表达式进行校验，默认 dryRun 不传为 false。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| meta | String | 否 | "text_relevance(name)" | 表达式配置 |
| description | String | 否 | "my_test" | 描述 |
| active | Boolean | 否 | true | 是否是默认表达式 |
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveSecondRank' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/second-ranks/{name}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '精排表达式名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“tests”',
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
              'result' => 
              array (
                'description' => '—',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>","errorExample":""}]',
      'title' => '删除精排规则',
      'summary' => '删除一个 OpenSearch 应用版本的精排表达式配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListQueryProcessors' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'isActive',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否已设置为默认规则，默认值为0

- 0 表示查询所有
- 1 表示查询已设置为默认的规则
- 2 表示查询未设置为默认的规则',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '规则信息

参考：[QueryProcessor](~~170014~~)',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1587398402',
                    ),
                    'active' => 
                    array (
                      'description' => '是否默认规则',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'updated' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1587398402',
                    ),
                    'name' => 
                    array (
                      'description' => '规则名称',
                      'type' => 'string',
                      'example' => 'ner',
                    ),
                    'domain' => 
                    array (
                      'description' => '行业类型

- GENERAL 通用
- ECOMMERCE 电商
- IT_CONTENT IT内容',
                      'type' => 'string',
                      'example' => 'GENERAL',
                    ),
                    'indexes' => 
                    array (
                      'description' => '应用的索引范围',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '应用的索引范围',
                        'type' => 'string',
                        'example' => '[                 "default"             ]',
                      ),
                    ),
                    'processors' => 
                    array (
                      'description' => '包含功能',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '包含功能

具体说明查看下文：[Processor](~~170014~~)',
                        'type' => 'object',
                        'example' => '[]',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1587398402,\\n      \\"active\\": true,\\n      \\"updated\\": 1587398402,\\n      \\"name\\": \\"ner\\",\\n      \\"domain\\": \\"GENERAL\\",\\n      \\"indexes\\": [\\n        \\"[                 \\\\\\"default\\\\\\"             ]\\"\\n      ],\\n      \\"processors\\": [\\n        []\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>test</name>\\n    <active>true</active>\\n    <indexes>default</indexes>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>ner</name>\\n        <interventionDictionary/>\\n        <priorities>\\n            <tag>brand</tag>\\n            <priority>HIGH</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>category</tag>\\n            <priority>HIGH</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>material</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>element</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>style</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>color</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>function</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>scenario</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>people</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>season</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>model</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>region</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>name</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>adjective</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>category-modifier</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>size</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>quality</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>suit</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>new-release</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>series</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>marketing</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>entertainment</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>organization</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>movie</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>game</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>number</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>unit</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>common</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>new-word</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>proper-noun</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>symbol</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>prefix</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>suffix</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>gift</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>negative</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>agent</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n    </processors>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>synonym</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>term_weighting</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>spell_check</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <name>category_prediction</name>\\n        <categoryPrediction>60</categoryPrediction>\\n        <projectId>848</projectId>\\n    </processors>\\n    <domain>GENERAL</domain>\\n    <created>1587398402</created>\\n    <updated>1587398402</updated>\\n</result>","errorExample":""}]',
      'title' => '取某版本的查询分析规则列表',
      'summary' => '获取指定OpenSearch应用版本的查询分析规则列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateQueryProcessor' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为空运行请求',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'any',
            'required' => false,
            'example' => '{}',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '规则信息',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1587398402',
                  ),
                  'active' => 
                  array (
                    'description' => '是否默认规则',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1587398402',
                  ),
                  'name' => 
                  array (
                    'description' => '规则名称',
                    'type' => 'string',
                    'example' => 'query_filter',
                  ),
                  'domain' => 
                  array (
                    'description' => '行业类型
- GENERAL 通用
- ECOMMERCE 电商
- IT_CONTENT IT内容',
                    'type' => 'string',
                    'example' => 'GENERAL',
                  ),
                  'indexes' => 
                  array (
                    'description' => '应用的索引范围',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '应用的索引范围',
                      'type' => 'string',
                      'example' => '"default"',
                    ),
                  ),
                  'processors' => 
                  array (
                    'description' => '包含功能

具体说明查看下文：[Processor](~~170014~~)',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '包含功能',
                      'type' => 'object',
                      'example' => '{}',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"created\\": 1587398402,\\n    \\"active\\": true,\\n    \\"updated\\": 1587398402,\\n    \\"name\\": \\"query_filter\\",\\n    \\"domain\\": \\"GENERAL\\",\\n    \\"indexes\\": [\\n      \\"\\\\\\"default\\\\\\"\\"\\n    ],\\n    \\"processors\\": [\\n      {}\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>query_filter</name>\\n    <active>true</active>\\n    <indexes>default</indexes>\\n    <processors>\\n        <name>synonym</name>\\n        <useSystemDictionary>true</useSystemDictionary>\\n    </processors>\\n    <processors>\\n        <name>stop_word</name>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <interventionDictionary>980</interventionDictionary>\\n    </processors>\\n    <domain>GENERAL</domain>\\n    <created>1587398402</created>\\n    <updated>1587398402</updated>\\n</result>","errorExample":""}]',
      'title' => '创建查询分析规则',
      'summary' => '创建一个查询分析规则。当 dryRun=true 时，表示进行查询分析规则校验，默认 dryRun 不传为 false。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- | 
| name | String | 是 | "test" | 规则名称 |
| processors[] | Object | 是 | -- | 分析规则<br />参考：[Processor](~~170014~~) |
| domain | String | 否 | "GENERAL" | 行业类型<br />- GENERAL 通用行业<br />- ECOMMERCE 电商<br />-  IT_CONTENT IT行业  |
| indexes | Array | 否 | ["default"] | 应用的索引范围 |
| active | Boolean | 否 | true | 是否设置为有效 |

参考：[QueryProcessor](~~170014~~)<br />
 ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyQueryProcessor' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors/{name}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为空运行请求',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '规则名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“test”',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'type' => 'any',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '规则信息',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'active' => 
                  array (
                    'description' => '是否默认规则',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'name' => 
                  array (
                    'description' => '规则名称',
                    'type' => 'string',
                    'example' => 'synonym',
                  ),
                  'domain' => 
                  array (
                    'description' => '行业类型
- GENERAL 通用
- ECOMMERCE 电商
- IT_CONTENT IT内容',
                    'type' => 'string',
                    'example' => 'GENERAL',
                  ),
                  'indexes' => 
                  array (
                    'description' => '应用的索引范围',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '应用的索引范围',
                      'type' => 'string',
                      'example' => '[ "default" ]',
                    ),
                    'example' => '["default"]',
                  ),
                  'processors' => 
                  array (
                    'description' => '分析规则',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '响应体',
                      'type' => 'object',
                      'example' => '[ "default" ]',
                    ),
                    'example' => '[]',
                  ),
                ),
                'example' => '{}',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": {\\n    \\"created\\": 0,\\n    \\"active\\": true,\\n    \\"updated\\": 1,\\n    \\"name\\": \\"synonym\\",\\n    \\"domain\\": \\"GENERAL\\",\\n    \\"indexes\\": [\\n      \\"[ \\\\\\"default\\\\\\" ]\\"\\n    ],\\n    \\"processors\\": [\\n      [\\n        \\"default\\"\\n      ]\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>query_filter</name>\\n    <active>true</active>\\n    <indexes>default</indexes>\\n    <processors>\\n        <name>synonym</name>\\n        <useSystemDictionary>true</useSystemDictionary>\\n    </processors>\\n    <processors>\\n        <name>stop_word</name>\\n        <useSystemDictionary>true</useSystemDictionary>\\n    </processors>\\n    <domain>GENERAL</domain>\\n    <created>1587398402</created>\\n    <updated>1587398402</updated>\\n</result>","errorExample":""}]',
      'title' => '修改指定应用版本查询分析规则',
      'summary' => '修改指定应用版本查询分析规则。当 dryRun=true 时，表示进行查询分析规则校验，默认 dryRun 不传为 false。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| domain | String | 否 | "GENERAL" | 行业类型<br />- GENERAL 通用行业<br />- ECOMMERCE 电商<br />- IT_CONTENT IT行业<br /> |
| indexes | Array | 否 | ["default"] | 应用的索引范围 |
| processors[] | Object | 否 |  | 分析规则<br />参考：[Processor](~~170014~~)
| active | Boolean | 否 | true | 是否设置为有效 |

参考：[QueryProcessor](~~170014~~)<br />',
      'responseParamsDescription' => '**返回参数**
| 字段 | 类型 | 描述 |
| --- | --- | --- |
| requestId | String | 请求ID |
| result | Object | 规则信息<br />参考：[QueryProcessor](~~170014~~) |',
      'extraInfo' => '
',
    ),
    'RemoveQueryProcessor' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors/{name}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '规则名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“test”',
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
              'result' => 
              array (
                'description' => '—',
                'type' => 'string',
                'example' => '[]',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": \\"[]\\",\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>","errorExample":""}]',
      'title' => '删除指定应用版本的查询分析规则',
      'summary' => '删除指定 OpenSearch 应用版本的查询分析规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeQueryProcessor' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors/{name}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '规则名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '规则信息',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1587398402',
                  ),
                  'active' => 
                  array (
                    'description' => '是否默认规则',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1587398402',
                  ),
                  'name' => 
                  array (
                    'description' => '规则名称',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'domain' => 
                  array (
                    'description' => '行业类型
- GENERAL 通用
- ECOMMERCE 电商
- IT_CONTENT IT内容',
                    'type' => 'string',
                    'example' => 'GENERAL',
                  ),
                  'indexes' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '应用的索引范围',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                  ),
                  'processors' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '包含功能',
                      'type' => 'object',
                      'example' => '{}',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"created\\": 1587398402,\\n    \\"active\\": true,\\n    \\"updated\\": 1587398402,\\n    \\"name\\": \\"test\\",\\n    \\"domain\\": \\"GENERAL\\",\\n    \\"indexes\\": [\\n      \\"default\\"\\n    ],\\n    \\"processors\\": [\\n      \\"{}\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <name>test</name>\\n    <active>true</active>\\n    <indexes>default</indexes>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>ner</name>\\n        <interventionDictionary/>\\n        <priorities>\\n            <tag>brand</tag>\\n            <priority>HIGH</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>category</tag>\\n            <priority>HIGH</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>material</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>element</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>style</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>color</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>function</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>scenario</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>people</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>season</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>model</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>region</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>name</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>adjective</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>category-modifier</tag>\\n            <priority>MIDDLE</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>size</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>quality</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>suit</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>new-release</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>series</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>marketing</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>entertainment</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>organization</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>movie</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>game</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>number</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>unit</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>common</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>new-word</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>proper-noun</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>symbol</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>prefix</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>suffix</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>gift</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>negative</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n        <priorities>\\n            <tag>agent</tag>\\n            <priority>LOW</priority>\\n        </priorities>\\n    </processors>\\n    <processors>\\n        <useSystemDictionary>true</useSystemDictionary>\\n        <name>synonym</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <use_system_dictionary>true</use_system_dictionary>\\n        <name>term_weighting</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <use_system_dictionary>true</use_system_dictionary>\\n        <name>spell_check</name>\\n        <interventionDictionary/>\\n    </processors>\\n    <processors>\\n        <name>category_prediction</name>\\n        <categoryPrediction>60</categoryPrediction>\\n        <projectId>848</projectId>\\n    </processors>\\n    <domain>GENERAL</domain>\\n    <created>1587398402</created>\\n    <updated>1587398402</updated>\\n</result>","errorExample":""}]',
      'title' => '获取指定应用版本的查询分析规则列表',
      'summary' => '获取指定 OpenSearch 应用版本的查询分析规则列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListQueryProcessorNers' => 
    array (
      'path' => '/v4/openapi/query-processor/ner/default-priorities',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业类型

- ECOMMERCE 电商行业',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'ECOMMERCE',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '实体类型重要性设置

参考：[实体类型重要性设置](~~173616~~)',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'tag' => 
                    array (
                      'description' => '实体类型的内部英文表示',
                      'type' => 'string',
                      'example' => 'brand',
                    ),
                    'order' => 
                    array (
                      'description' => '在同一个priority下的排序顺序
优先顺序按照数字从小到大，默认为0',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'priority' => 
                    array (
                      'description' => '重要性

- HIGH
- MIDDLE
- LOW',
                      'type' => 'string',
                      'example' => 'HIGH',
                    ),
                    'label' => 
                    array (
                      'description' => '实体类型名称',
                      'type' => 'string',
                      'example' => '品牌',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"tag\\": \\"brand\\",\\n      \\"order\\": 1,\\n      \\"priority\\": \\"HIGH\\",\\n      \\"label\\": \\"品牌\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <tag>brand</tag>\\n    <priority>HIGH</priority>\\n    <order>1</order>\\n    <label>品牌</label>\\n</result>\\n<result>\\n    <tag>category</tag>\\n    <priority>HIGH</priority>\\n    <order>2</order>\\n    <label>品类</label>\\n</result>\\n<result>\\n    <tag>material</tag>\\n    <priority>MIDDLE</priority>\\n    <order>3</order>\\n    <label>材质</label>\\n</result>\\n<result>\\n    <tag>element</tag>\\n    <priority>MIDDLE</priority>\\n    <order>4</order>\\n    <label>款式元素</label>\\n</result>\\n<result>\\n    <tag>style</tag>\\n    <priority>MIDDLE</priority>\\n    <order>5</order>\\n    <label>风格</label>\\n</result>\\n<result>\\n    <tag>color</tag>\\n    <priority>MIDDLE</priority>\\n    <order>6</order>\\n    <label>颜色</label>\\n</result>\\n<result>\\n    <tag>function</tag>\\n    <priority>MIDDLE</priority>\\n    <order>7</order>\\n    <label>功能功效</label>\\n</result>\\n<result>\\n    <tag>scenario</tag>\\n    <priority>MIDDLE</priority>\\n    <order>8</order>\\n    <label>场景</label>\\n</result>\\n<result>\\n    <tag>people</tag>\\n    <priority>MIDDLE</priority>\\n    <order>9</order>\\n    <label>人群</label>\\n</result>\\n<result>\\n    <tag>season</tag>\\n    <priority>MIDDLE</priority>\\n    <order>10</order>\\n    <label>时间季节</label>\\n</result>\\n<result>\\n    <tag>model</tag>\\n    <priority>MIDDLE</priority>\\n    <order>11</order>\\n    <label>型号</label>\\n</result>\\n<result>\\n    <tag>region</tag>\\n    <priority>MIDDLE</priority>\\n    <order>12</order>\\n    <label>地点地域</label>\\n</result>\\n<result>\\n    <tag>name</tag>\\n    <priority>MIDDLE</priority>\\n    <order>13</order>\\n    <label>人名</label>\\n</result>\\n<result>\\n    <tag>adjective</tag>\\n    <priority>MIDDLE</priority>\\n    <order>14</order>\\n    <label>修饰</label>\\n</result>\\n<result>\\n    <tag>category-modifier</tag>\\n    <priority>MIDDLE</priority>\\n    <order>15</order>\\n    <label>品类修饰词</label>\\n</result>\\n<result>\\n    <tag>size</tag>\\n    <priority>LOW</priority>\\n    <order>16</order>\\n    <label>尺寸规格</label>\\n</result>\\n<result>\\n    <tag>quality</tag>\\n    <priority>LOW</priority>\\n    <order>17</order>\\n    <label>品质成色</label>\\n</result>\\n<result>\\n    <tag>suit</tag>\\n    <priority>LOW</priority>\\n    <order>18</order>\\n    <label>套装</label>\\n</result>\\n<result>\\n    <tag>new-release</tag>\\n    <priority>LOW</priority>\\n    <order>19</order>\\n    <label>新品</label>\\n</result>\\n<result>\\n    <tag>series</tag>\\n    <priority>LOW</priority>\\n    <order>20</order>\\n    <label>系列</label>\\n</result>\\n<result>\\n    <tag>marketing</tag>\\n    <priority>LOW</priority>\\n    <order>21</order>\\n    <label>营销服务</label>\\n</result>\\n<result>\\n    <tag>entertainment</tag>\\n    <priority>LOW</priority>\\n    <order>22</order>\\n    <label>文娱书文曲</label>\\n</result>\\n<result>\\n    <tag>organization</tag>\\n    <priority>LOW</priority>\\n    <order>23</order>\\n    <label>机构实体</label>\\n</result>\\n<result>\\n    <tag>movie</tag>\\n    <priority>LOW</priority>\\n    <order>24</order>\\n    <label>影视名称</label>\\n</result>\\n<result>\\n    <tag>game</tag>\\n    <priority>LOW</priority>\\n    <order>25</order>\\n    <label>游戏名称</label>\\n</result>\\n<result>\\n    <tag>number</tag>\\n    <priority>LOW</priority>\\n    <order>26</order>\\n    <label>数字</label>\\n</result>\\n<result>\\n    <tag>unit</tag>\\n    <priority>LOW</priority>\\n    <order>27</order>\\n    <label>单位</label>\\n</result>\\n<result>\\n    <tag>common</tag>\\n    <priority>LOW</priority>\\n    <order>28</order>\\n    <label>普通词</label>\\n</result>\\n<result>\\n    <tag>new-word</tag>\\n    <priority>LOW</priority>\\n    <order>29</order>\\n    <label>新词</label>\\n</result>\\n<result>\\n    <tag>proper-noun</tag>\\n    <priority>LOW</priority>\\n    <order>30</order>\\n    <label>专有名词</label>\\n</result>\\n<result>\\n    <tag>symbol</tag>\\n    <priority>LOW</priority>\\n    <order>31</order>\\n    <label>符号</label>\\n</result>\\n<result>\\n    <tag>prefix</tag>\\n    <priority>LOW</priority>\\n    <order>32</order>\\n    <label>前缀</label>\\n</result>\\n<result>\\n    <tag>suffix</tag>\\n    <priority>LOW</priority>\\n    <order>33</order>\\n    <label>后缀</label>\\n</result>\\n<result>\\n    <tag>gift</tag>\\n    <priority>LOW</priority>\\n    <order>34</order>\\n    <label>赠送</label>\\n</result>\\n<result>\\n    <tag>negative</tag>\\n    <priority>LOW</priority>\\n    <order>35</order>\\n    <label>否定</label>\\n</result>\\n<result>\\n    <tag>agent</tag>\\n    <priority>LOW</priority>\\n    <order>36</order>\\n    <label>代理</label>\\n</result>","errorExample":""}]',
      'title' => '获取推荐的实体类型重要性设置',
      'summary' => '实体识别：获取推荐的实体类型重要性设置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListQueryProcessorAnalyzerResults' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/query-processors/{name}/analyze',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"110157886"',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '规则名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"test"',
          ),
        ),
        3 => 
        array (
          'name' => 'text',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待测试内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"abcde"',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '{}',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '98724351-D6B2-5D8A-B089-7FFD1821A7E9',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {},\\n  \\"RequestId\\": \\"98724351-D6B2-5D8A-B089-7FFD1821A7E9\\"\\n}","type":"json"}]',
      'title' => '查询分析效果测试',
      'summary' => '查询分析效果测试。（仅限开源兼容版存量应用调用）',
    ),
    'ListInterventionDictionaries' => 
    array (
      'path' => '/v4/openapi/intervention-dictionaries',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认 pageSize=10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，默认 pageNumber=1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'types',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '干预词典类型集合
格式：urlencode([“synonym”, “stopword”])

- stopword 停用词
- synonym 同义词
- correction 拼写纠错
- category_prediction 类目预测
- ner 实体识别
- term_weighting 词权重',
            'type' => 'string',
            'required' => false,
            'example' => '["synonym"]',
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
              'totalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '干预词典详情

参考：[InterventionDictionary](~~173608~~)',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1539158325',
                    ),
                    'type' => 
                    array (
                      'description' => '类型

- stopword 停用词
- synonym 同义词
- correction 拼写纠错
- category_prediction 类目预测
- ner 实体识别
- term_weighting 词权重',
                      'type' => 'string',
                      'example' => 'synonym',
                    ),
                    'analyzer' => 
                    array (
                      'description' => '自定义分词',
                      'type' => 'string',
                      'example' => '""',
                    ),
                    'name' => 
                    array (
                      'description' => '名称',
                      'type' => 'string',
                      'example' => 'tongyici',
                    ),
                    'updated' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1539158313',
                    ),
                    'id' => 
                    array (
                      'description' => '词典ID',
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
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 2,\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1539158325,\\n      \\"type\\": \\"synonym\\",\\n      \\"analyzer\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"name\\": \\"tongyici\\",\\n      \\"updated\\": 1539158313,\\n      \\"id\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<totalCount>2</totalCount>\\n<result>\\n    <id>1</id>\\n    <name>tongyici</name>\\n    <type>synonym</type>\\n    <analyzer/>\\n    <created>1539158313</created>\\n    <updated>1539158313</updated>\\n</result>\\n<result>\\n    <id>2</id>\\n    <name>tingyongci</name>\\n    <type>stopword</type>\\n    <analyzer/>\\n    <created>1539158325</created>\\n    <updated>1539158325</updated>\\n</result>","errorExample":""}]',
      'title' => '获取用户的干预词典列表',
      'summary' => '获取用户的干预词典列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateInterventionDictionary' => 
    array (
      'path' => '/v4/openapi/intervention-dictionaries',
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
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否校验入参数据合法性，默认false。

取值：

- **true**：只校验参数合法性。

- **false**：校验参数合法性，创建归因配置。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'description' => '干预词典名称',
                'type' => 'string',
                'required' => false,
                'example' => 'ner_dict_ec',
              ),
              'type' => 
              array (
                'description' => '类型
- stopword 停用词
- synonym 同义词
- correction 拼写纠错
- category_prediction 类目预测
- ner 实体识别
- term_weighting 词权重
- suggest_allowlist 下拉提示白名单
- suggest_denylist 下拉提示黑名单
- hot_allowlist  热搜白名单
- hot_denylist  热搜黑名单
- hint_allowlist  底纹白名单
- hint_denylist  底纹黑名单',
                'type' => 'string',
                'required' => false,
                'example' => 'ner',
              ),
              'analyzerType' => 
              array (
                'description' => '词典类型，支持：

- MODEL：模型定制分析器。

- SYSTEM：系统分析器。

- USER：自定义分析器。',
                'type' => 'string',
                'required' => false,
                'example' => 'SYSTEM',
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '80326EFE-485F-46E7-B291-5A1DD08D2198',
              ),
              'result' => 
              array (
                'description' => '干预词典详情',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1591086323',
                  ),
                  'analyzer' => 
                  array (
                    'description' => '自定义分词',
                    'type' => 'string',
                    'example' => 'dianshang',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '1591086323',
                  ),
                  'type' => 
                  array (
                    'description' => '类型
- stopword 停用词
- synonym 同义词
- correction 拼写纠错
- category_prediction 类目预测
- ner 实体识别
- term_weighting 词权重
- suggest_allowlist 下拉提示白名单
- suggest_denylist 下拉提示黑名单
- hot_allowlist  热搜白名单
- hot_denylist  热搜黑名单
- hint_allowlist  底纹白名单
- hint_denylist  底纹黑名单',
                    'type' => 'string',
                    'example' => 'ner',
                  ),
                  'name' => 
                  array (
                    'description' => '名称',
                    'type' => 'string',
                    'example' => 'testb',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"80326EFE-485F-46E7-B291-5A1DD08D2198\\",\\n  \\"result\\": {\\n    \\"created\\": \\"1591086323\\",\\n    \\"analyzer\\": \\"dianshang\\",\\n    \\"updated\\": \\"1591086323\\",\\n    \\"type\\": \\"ner\\",\\n    \\"name\\": \\"testb\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>80326EFE-485F-46E7-B291-5A1DD08D2198</requestId>\\n<result>\\n    <analyzer>dianshang</analyzer>\\n    <created>1591086323</created>\\n    <id>1001</id>\\n    <name>testb</name>\\n    <type>ner</type>\\n    <updated>1591086323</updated>\\n</result>","errorExample":""}]',
      'title' => '创建干预词典',
      'summary' => '创建干预词典。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| name | String | 是 | "my_dict" | 干预词典名称 |
| type | String | 是 | "ner" | 干预词典类型 |
| analyzer | String | 否 | "my_analyzer" | 自定义分词<br />当type=ner时，此项必填 |
| analyzerType| String | 否 | "SYSTEM" | 分析器类型<br /> |

参考：[InterventionDictionary](~~173608~~)<br />',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInterventionDictionary' => 
    array (
      'path' => '/v4/openapi/intervention-dictionaries/{name}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '干预词典名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_dict',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D7CCF454-472A-030E-F254-604520B028AA',
              ),
              'result' => 
              array (
                'description' => '干预词典详情',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1536233287',
                  ),
                  'analyzer' => 
                  array (
                    'description' => '自定义分词',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '1536233287',
                  ),
                  'type' => 
                  array (
                    'description' => '类型
- stopword 停用词
- synonym 同义词
- correction 拼写纠错
- category_prediction 类目预测
- ner 实体识别
- term_weighting 词权重',
                    'type' => 'string',
                    'example' => 'category_prediction',
                  ),
                  'name' => 
                  array (
                    'description' => '名称',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D7CCF454-472A-030E-F254-604520B028AA\\",\\n  \\"result\\": {\\n    \\"created\\": \\"1536233287\\",\\n    \\"analyzer\\": \\"-\\",\\n    \\"updated\\": \\"1536233287\\",\\n    \\"type\\": \\"category_prediction\\",\\n    \\"name\\": \\"test\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>D7CCF454-472A-030E-F254-604520B028AA</requestId>\\n<result>\\n    <name>test</name>\\n    <type>category_prediction</type>\\n    <analyzer/>\\n    <created>1536233287</created>\\n    <updated>1536233287</updated>\\n</result>","errorExample":""}]',
      'title' => '获取干预词典详情',
      'summary' => '获取干预词典详情。',
    ),
    'RemoveInterventionDictionary' => 
    array (
      'path' => '/v4/openapi/intervention-dictionaries/{name}',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '干预词典名称',
            'type' => 'string',
            'required' => false,
            'example' => '“my_dict”',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '06BBD41A-5F72-34E4-2DAF-E43B0526051D',
              ),
              'result' => 
              array (
                'description' => '干预词典详情',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1539158313',
                  ),
                  'analyzer' => 
                  array (
                    'description' => '自定义分词',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '1539158313',
                  ),
                  'type' => 
                  array (
                    'description' => '类型
- stopword 停用词
- synonym 同义词
- correction 拼写纠错
- category_prediction 类目预测
- ner 实体识别
- term_weighting 词权重',
                    'type' => 'string',
                    'example' => 'synonym',
                  ),
                  'name' => 
                  array (
                    'description' => '名称',
                    'type' => 'string',
                    'example' => 'tongyici',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"06BBD41A-5F72-34E4-2DAF-E43B0526051D\\",\\n  \\"result\\": {\\n    \\"created\\": \\"1539158313\\",\\n    \\"analyzer\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"updated\\": \\"1539158313\\",\\n    \\"type\\": \\"synonym\\",\\n    \\"name\\": \\"tongyici\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>06BBD41A-5F72-34E4-2DAF-E43B0526051D</requestId>\\n<result>\\n    <id>123</id>\\n    <name>testb</name>\\n    <type>ner</type>\\n    <analyzer>abc</analyzer>\\n    <created>1587957529</created>\\n    <updated>1587957529</updated>\\n</result>","errorExample":""}]',
      'title' => '删除干预词典',
      'summary' => '删除干预词典。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
    ),
    'ListInterventionDictionaryEntries' => 
    array (
      'path' => '/v4/openapi/intervention-dictionaries/{name}/entries',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '干预词典名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_dict',
          ),
        ),
        1 => 
        array (
          'name' => 'word',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '词条',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        2 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，默认 pageNumber=1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认 pageSize=10',
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
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '516A02B7-2167-8D92-12D0-B639A2A0F3C5',
              ),
              'result' => 
              array (
                'description' => '干预词条详情

参考：[InterventionDictionaryEntry](~~173606~~)',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'cmd' => 
                    array (
                      'description' => '操作命令

- add 新增
- delete 删除',
                      'type' => 'string',
                      'example' => 'add',
                    ),
                    'created' => 
                    array (
                      'description' => '创建时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1536690285',
                    ),
                    'word' => 
                    array (
                      'description' => '词条',
                      'type' => 'string',
                      'example' => '\\u8fc7\\u513f',
                    ),
                    'relevance' => 
                    array (
                      'description' => '干预内容
键为类目预测ID，值为相关度（0：不相关；1：略相关；2：相关）
例：{“2”:1,”100”:0}',
                      'type' => 'object',
                      'example' => ' {                 "100": "0",                 "200": "2"             }',
                    ),
                    'status' => 
                    array (
                      'description' => '状态

- ACTIVE 已生效',
                      'type' => 'string',
                      'example' => 'ACTIVE',
                    ),
                    'updated' => 
                    array (
                      'description' => '更新时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1537348987',
                    ),
                    'tokens' => 
                    array (
                      'description' => '词权重内容',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'tag' => 
                          array (
                            'description' => '识别结果的英文名

- brand 品牌
- category 品类
- material 材质
- element 款式元素
- style 风格
- color 颜色
- function 功能功效
- scenario 场景
- people 人群
- season 时间季节
- model 型号
- region 地点地域
- name 人名
- adjective 修饰
- category-modifier 品类修饰词
- size 尺寸规格
- quality 品质成色
- suit 套装
- new-release 新品
- series 系列
- marketing 营销服务
- entertainment 文娱书文曲
- organization 机构实体
- movie 影视名称
- game 游戏名称
- number 数字
- unit 单位
- common 普通词
- new-word 新词
- proper-noun 专有名词
- symbol 符号
- prefix 前缀
- suffix 后缀
- gift 赠送
- negative 否定
- agent 代理',
                            'type' => 'string',
                            'example' => 'category',
                          ),
                          'token' => 
                          array (
                            'description' => '实体词',
                            'type' => 'string',
                            'example' => '本',
                          ),
                          'order' => 
                          array (
                            'description' => '序号',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'tagLabel' => 
                          array (
                            'description' => '识别结果的中文名，同上',
                            'type' => 'string',
                            'example' => '品类',
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
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 8,\\n  \\"requestId\\": \\"516A02B7-2167-8D92-12D0-B639A2A0F3C5\\",\\n  \\"result\\": [\\n    {\\n      \\"cmd\\": \\"add\\",\\n      \\"created\\": 1536690285,\\n      \\"word\\": \\"\\\\\\\\u8fc7\\\\\\\\u513f\\",\\n      \\"relevance\\": {\\n        \\"100\\": \\"0\\",\\n        \\"200\\": \\"2\\"\\n      },\\n      \\"status\\": \\"ACTIVE\\",\\n      \\"updated\\": 1537348987,\\n      \\"tokens\\": [\\n        {\\n          \\"tag\\": \\"category\\",\\n          \\"token\\": \\"本\\",\\n          \\"order\\": 1,\\n          \\"tagLabel\\": \\"品类\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>516A02B7-2167-8D92-12D0-B639A2A0F3C5</requestId>\\n<result>\\n    <cmd>add</cmd>\\n    <word>过儿</word>\\n    <created>1536690285</created>\\n    <updated>1537348987</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <100>0</100>\\n        <200>2</200>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>过</word>\\n    <created>1536690308</created>\\n    <updated>1537349055</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <200>2</200>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>苹</word>\\n    <created>1536683292</created>\\n    <updated>1537220498</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <12>1</12>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>吧</word>\\n    <created>1536690347</created>\\n    <updated>1537220498</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <100>2</100>\\n        <200>0</200>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>果</word>\\n    <created>1536690184</created>\\n    <updated>1537220498</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <100>2</100>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>裤子</word>\\n    <created>1537353071</created>\\n    <updated>1537353074</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <100>1</100>\\n        <200>2</200>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>adfads</word>\\n    <created>1536690258</created>\\n    <updated>1537220498</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <1>1</1>\\n        <2>1</2>\\n        <3>1</3>\\n    </relevance>\\n</result>\\n<result>\\n    <cmd>add</cmd>\\n    <word>zvzcxv</word>\\n    <created>1536690537</created>\\n    <updated>1537220498</updated>\\n    <status>ACTIVE</status>\\n    <relevance>\\n        <100>1</100>\\n    </relevance>\\n</result>\\n<totalCount>8</totalCount>","errorExample":""}]',
      'title' => '获取干预词条清单',
      'summary' => '获取干预词条清单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PushInterventionDictionaryEntries' => 
    array (
      'path' => '/v4/openapi/intervention-dictionaries/{name}/entries/actions/bulk',
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
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '干预词典名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_dict',
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否校验入参数据合法性，默认false。

取值：

- **true**：只校验参数合法性。

- **false**：校验参数合法性，创建归因配置。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '请求体',
              'type' => 'object',
              'required' => false,
              'example' => '{
    "cmd": "add",
    "word": "搜索",
    "created": 1536661485,
    "updated": 1537320187,
    "status": "ACTIVE",
    "relevance": {
        "100": "0",
        "200": "2"
    }
}',
            ),
            'required' => false,
            'maxItems' => 100,
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'string',
                  'example' => '[]',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    \\"[]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>","errorExample":""}]',
      'title' => '接收干预词条变更',
      'summary' => '接收干预词条变更。',
      'requestParamsDescription' => '**请求体**
通用参数

| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| [] | Object | 是 |  | 词条信息 |
| [].cmd | String | 是 | "add" | 操作命令<br />- add  新增<br />- delete  删除<br /> |
| [].word | String | 是 | "阿里云" | 词条 |

特定参数
参考：

- [stopword  停用词](~~173606~~)
- [synonym  同义词](~~173606~~)
- [correction  拼写纠错](~~173606~~)
- [term_weighting  词权重](~~173606~~)
- [category_prediction  类目预测](~~173606~~)
- [ner  实体识别](~~173606~~)
- [suggest_allowlist 下拉提示白名单](~~173606~~)
- [suggest_denylist 下拉提示黑名单](~~173606~~)
- [hot_allowlist  热搜白名单](~~173606~~)
- [hot_denylist  热搜黑名单](~~173606~~)
- [hint_allowlist  底纹白名单](~~173606~~)
- [hint_denylist  底纹黑名单](~~173606~~)


',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListInterventionDictionaryRelatedEntities' => 
    array (
      'path' => '/v4/openapi/intervention-dictionaries/{name}/related',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '干预词典名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_dict',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '应用及QP信息，无结果时为空',
                  'type' => 'object',
                  'example' => '[]',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    \\"[]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>65956EC5-71B8-8A21-2F2E-FBE7E7292AD6</requestId>\\n<result>\\n    <appGroup>test_srn_mysql</appGroup>\\n    <queryProcessor>\\n        <name>it_content</name>\\n        <active>true</active>\\n        <indexes>short_text</indexes>\\n        <indexes>text_pack</indexes>\\n        <indexes>short_text_pack</indexes>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary>tst</interventionDictionary>\\n            <name>stop_word</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary>test_han_jiuduo_2</interventionDictionary>\\n            <name>spell_check</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary>test_han_tongyici</interventionDictionary>\\n            <name>synonym</name>\\n        </processors>\\n        <processors>\\n            <useSystemDictionary>true</useSystemDictionary>\\n            <interventionDictionary/>\\n            <name>term_weighting</name>\\n        </processors>\\n        <domain>IT_CONTENT</domain>\\n        <created>1585714793</created>\\n        <updated>1591163738</updated>\\n    </queryProcessor>\\n</result>","errorExample":""}]',
      'title' => '获取与干预词典关联的资源清单',
      'summary' => '获取与干预词典关联的资源清单。如果某个干预词典被qp引用，则列出来所有的应用及QP信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' | 字段 | 类型 | 描述 |
| --- | --- | --- |
| result[].appGroup | String | 应用名 |
| result[].queryProcessor | Object | QP信息<br />参考：[QueryProcessor](~~170014~~) |',
      'extraInfo' => ' ',
    ),
    'ListInterventionDictionaryNerResults' => 
    array (
      'path' => '/v4/openapi/intervention-dictionaries/{name}/ner-results',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '干预词典名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_dict',
          ),
        ),
        1 => 
        array (
          'name' => 'query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要搜索的关键词',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '豆奶',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8F780CA8-D4D4-2FFE-B8AC-42040822C554',
              ),
              'result' => 
              array (
                'description' => '实体识别内容

参考：[ner 实体识别](~~173606~~)',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'tag' => 
                    array (
                      'description' => '识别结果的英文名

- brand 品牌
- category 品类
- material 材质
- element 款式元素
- style 风格
- color 颜色
- function 功能功效
- scenario 场景
- people 人群
- season 时间季节
- model 型号
- region 地点地域
- name 人名
- adjective 修饰
- category-modifier 品类修饰词
- size 尺寸规格
- quality 品质成色
- suit 套装
- new-release 新品
- series 系列
- marketing 营销服务
- entertainment 文娱书文曲
- organization 机构实体
- movie 影视名称
- game 游戏名称
- number 数字
- unit 单位
- common 普通词
- new-word 新词
- proper-noun 专有名词
- symbol 符号
- prefix 前缀
- suffix 后缀
- gift 赠送
- negative 否定
- agent 代理',
                      'type' => 'string',
                      'example' => 'category',
                    ),
                    'token' => 
                    array (
                      'description' => '实体词',
                      'type' => 'string',
                      'example' => '豆',
                    ),
                    'order' => 
                    array (
                      'description' => '序号',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'tagLabel' => 
                    array (
                      'description' => '识别结果的中文名，同上',
                      'type' => 'string',
                      'example' => '品类',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"8F780CA8-D4D4-2FFE-B8AC-42040822C554\\",\\n  \\"result\\": [\\n    {\\n      \\"tag\\": \\"category\\",\\n      \\"token\\": \\"豆\\",\\n      \\"order\\": 1,\\n      \\"tagLabel\\": \\"品类\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>8F780CA8-D4D4-2FFE-B8AC-42040822C554</requestId>\\n<result>\\n    <tag>common</tag>\\n    <tagLabel>普通词</tagLabel>\\n    <token>aaaa</token>\\n    <order>1</order>\\n</result>","errorExample":""}]',
      'title' => '获取实体识别结果',
      'summary' => '获取实体识别结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableSlowQuery' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query/actions/enable',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
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
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '728E89C6-8673-D39B-39A1-5BA2B56D448F',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"728E89C6-8673-D39B-39A1-5BA2B56D448F\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>728E89C6-8673-D39B-39A1-5BA2B56D448F</requestId>\\n<result/>","errorExample":""}]',
      'title' => '启用优化大师慢查询服务',
      'summary' => '启用优化大师慢查询服务。',
    ),
    'DisableSlowQuery' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query/actions/disable',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
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
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '728E89C6-8673-D39B-39A1-5BA2B56D448F',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"728E89C6-8673-D39B-39A1-5BA2B56D448F\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>728E89C6-8673-D39B-39A1-5BA2B56D448F</requestId>\\n<result/>","errorExample":""}]',
      'title' => '禁用优化大师慢查询服务',
      'summary' => '禁用优化大师慢查询服务。',
    ),
    'DescribeSlowQueryStatus' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5C1C1C45-C64A-AD30-565F-140871D57E5E',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'region' => 
                  array (
                    'description' => '区域
- outer 外网
- internal 内网',
                    'type' => 'string',
                    'example' => 'internal',
                  ),
                  'status' => 
                  array (
                    'description' => '开通状态
- enabled 开通
- disabled 未开通
- n/a 未知',
                    'type' => 'string',
                    'example' => 'disabled',
                  ),
                  'appGroupId' => 
                  array (
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => '100298370',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"5C1C1C45-C64A-AD30-565F-140871D57E5E\\",\\n  \\"result\\": {\\n    \\"region\\": \\"internal\\",\\n    \\"status\\": \\"disabled\\",\\n    \\"appGroupId\\": \\"100298370\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>5C1C1C45-C64A-AD30-565F-140871D57E5E</requestId>\\n<result>\\n    <region>internal</region>\\n    <appGroupId>100298370</appGroupId>\\n    <status>disabled</status>\\n</result>","errorExample":""}]',
      'title' => '获取优化大师慢查询开通状态',
      'summary' => '获取优化大师慢查询开通状态。',
    ),
    'StartSlowQueryAnalyzer' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query/actions/run',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
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
              'result' => 
              array (
                'description' => '—',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result/>","errorExample":""}]',
      'title' => '立即进行慢查询分析',
      'summary' => '立即进行慢查询分析。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
    ),
    'ListSlowQueryQueries' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query/categories/{categoryIndex}/queries',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'categoryIndex',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '优化建议ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'EB250CA0-ACFD-C5DE-17CD-01445BFE8AE5',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'index' => 
                  array (
                    'description' => '优化建议ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'appQuery' => 
                  array (
                    'description' => '优化建议信息',
                    'type' => 'string',
                    'example' => 'no data',
                  ),
                  'start' => 
                  array (
                    'description' => '开始时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1589986800',
                  ),
                  'end' => 
                  array (
                    'description' => '结束时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1589990340',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"EB250CA0-ACFD-C5DE-17CD-01445BFE8AE5\\",\\n  \\"result\\": {\\n    \\"index\\": 0,\\n    \\"appQuery\\": \\"no data\\",\\n    \\"start\\": 1589986800,\\n    \\"end\\": 1589990340\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>EB250CA0-ACFD-C5DE-17CD-01445BFE8AE5</requestId>\\n<result>\\n    <start>1589986800</start>\\n    <end>1589990340</end>\\n    <index>0</index>\\n    <appQuery>no data</appQuery>\\n</result>","errorExample":""}]',
      'title' => '列出慢查询Query清单',
      'summary' => '列出优化大师慢查询Query清单。',
      'requestParamsDescription' => '**查询参数**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| start | Integer | 是 | 1589986800 | 开始时间戳（精确到秒） |
| end | Integer | 是 | 1589990340 | 结束时间戳（精确到秒） |
| size | Integer | 否 | 10 | 返回条数 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSlowQueryCategories' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/optimizers/slow-query/categories',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4406F40B-A0A2-9D5D-531F-3B6936567584',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'start' => 
                  array (
                    'description' => '开始时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1589986800',
                  ),
                  'analyzeStatus' => 
                  array (
                    'description' => '分析状态

- PENDING 准备中
- SUCCESS 成功
- RUNNING 运行中
- FAILED 失败
- N/A 未知',
                    'type' => 'string',
                    'example' => '"PENDING"',
                  ),
                  'end' => 
                  array (
                    'description' => '结束时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1589990340',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"4406F40B-A0A2-9D5D-531F-3B6936567584\\",\\n  \\"result\\": {\\n    \\"start\\": 1589986800,\\n    \\"analyzeStatus\\": \\"\\\\\\"PENDING\\\\\\"\\",\\n    \\"end\\": 1589990340\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>4406F40B-A0A2-9D5D-531F-3B6936567584</requestId>\\n<result>\\n    <analyzeStatus>PENDING</analyzeStatus>\\n    <start>1589986800</start>\\n    <end>1589990340</end>\\n</result>","errorExample":""}]',
      'title' => '列出优化大师慢查询优化建议清单',
      'summary' => '列出优化大师慢查询优化建议清单。',
      'requestParamsDescription' => '**请求示例**

`GET /v4/openapi/app-groups/kevintest2/optimizers/slow-query/categories?end=1589990340&sort=max&start=1589986800
`


**查询参数**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| start | Integer | 是 | 1589986800 | 开始时间戳（精确到秒） |
| end | Integer | 是 | 1589990340 | 结束时间戳（精确到秒） |
| sort | String | 否 | "max" | 排序类型<br />- max  最大值<br />- avg  平均值<br />- sum  总值<br />- queryProportion  查询比例<br /> |',
    ),
    'ListQuotaReviewTasks' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/quota-review-tasks',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"my_app_name"',
          ),
        ),
        1 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，默认 pageNumber=1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认 pageSize=10',
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
            'description' => '返回对象',
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '500',
              ),
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '"3351A21F-705B-508C-9450-DA65A681547F"',
              ),
              'result' => 
              array (
                'description' => '审批工单信息参考：[quotareviewtask](~~173609~~)',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'oldDocSize' => 
                    array (
                      'description' => '原存储容量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '900',
                    ),
                    'pending' => 
                    array (
                      'description' => '是否待处理',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'memo' => 
                    array (
                      'description' => '备注',
                      'type' => 'string',
                      'example' => 'null',
                    ),
                    'approved' => 
                    array (
                      'description' => '是否通过审批',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'oldSpec' => 
                    array (
                      'description' => '原应用规格',
                      'type' => 'string',
                      'example' => '"opensearch.private.common"',
                    ),
                    'oldComputeResource' => 
                    array (
                      'description' => '原计算资源',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '500',
                    ),
                    'appGroupType' => 
                    array (
                      'description' => '应用类型',
                      'type' => 'string',
                      'example' => '"standard"',
                    ),
                    'available' => 
                    array (
                      'description' => '是否可用',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'gmtCreate' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '"2020-04-08T08:29:45+0000"',
                    ),
                    'newSocSize' => 
                    array (
                      'description' => '目标存储容量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1100',
                    ),
                    'id' => 
                    array (
                      'description' => '工单ID',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '142',
                    ),
                    'appGroupId' => 
                    array (
                      'description' => '应用ID',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '120123456',
                    ),
                    'newComputeResource' => 
                    array (
                      'description' => '目标计算资源',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '6000',
                    ),
                    'appGroupName' => 
                    array (
                      'description' => '应用名称',
                      'type' => 'string',
                      'example' => '"td_test_os"',
                    ),
                    'gmtModified' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '"2020-04-08T08:36:36+0000"',
                    ),
                    'newSpec' => 
                    array (
                      'description' => '目标应用规格',
                      'type' => 'string',
                      'example' => '"opensearch.private.common"',
                    ),
                  ),
                  'example' => '{}',
                ),
                'example' => '[]',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 500,\\n  \\"requestId\\": \\"\\\\\\"3351A21F-705B-508C-9450-DA65A681547F\\\\\\"\\",\\n  \\"result\\": [\\n    {\\n      \\"oldDocSize\\": 900,\\n      \\"pending\\": false,\\n      \\"memo\\": \\"null\\",\\n      \\"approved\\": true,\\n      \\"oldSpec\\": \\"\\\\\\"opensearch.private.common\\\\\\"\\",\\n      \\"oldComputeResource\\": 500,\\n      \\"appGroupType\\": \\"\\\\\\"standard\\\\\\"\\",\\n      \\"available\\": true,\\n      \\"gmtCreate\\": \\"\\\\\\"2020-04-08T08:29:45+0000\\\\\\"\\",\\n      \\"newSocSize\\": 1100,\\n      \\"id\\": 142,\\n      \\"appGroupId\\": 120123456,\\n      \\"newComputeResource\\": 6000,\\n      \\"appGroupName\\": \\"\\\\\\"td_test_os\\\\\\"\\",\\n      \\"gmtModified\\": \\"\\\\\\"2020-04-08T08:36:36+0000\\\\\\"\\",\\n      \\"newSpec\\": \\"\\\\\\"opensearch.private.common\\\\\\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取指定应用配额审批清单',
      'summary' => '获取指定 opensearch 应用配额审批清单。',
      'requestParamsDescription' => '请求示例：

```
GET /v4/openapi/app-groups/demo/quota-review-tasks
```',
      'responseParamsDescription' => '返回结果示例：
```json
{
    "id": 142,
    "appGroupId": 120577535,
    "appGroupName": "td_trade_order_os",
    "appGroupType": "standard",
    "oldSpec": "opensearch.private.common",
    "oldComputeResource": 500,
    "oldDocSize": 900,
    "newSpec": "opensearch.private.common",
    "newComputeResource": 6000,
    "newSocSize": 1100,
    "memo": null,
    "available": true,
    "pending": false,
    "approved": true,
    "gmtCreate": "2020-04-08T08:29:45+0000",
    "gmtModified": "2020-04-08T08:36:36+0000"
}
```',
    ),
    'ListScheduledTasks' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scheduled-tasks',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时任务类型

- wipe 数据清理
- fork 索引重建
- check-status 检查应用状态
- index 索引重建
',
            'type' => 'string',
            'required' => false,
            'example' => 'wipe',
          ),
        ),
        2 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，默认 pageNumber = 1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认 pageSize = 10',
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
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '定时任务信息

参考：[ScheduledTask](~~173610~~)',
                  'type' => 'object',
                  'example' => '[]',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    []\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<totalCount>1</totalCount>\\n<result>\\n    <id>2f12c585-5873-11ea-974a-7cd30ad3e268</id>\\n    <progress>0</progress>\\n    <status>3</status>\\n    <lastRanTimestamp/>\\n    <type>wipe</type>\\n    <running>false</running>\\n    <paused>false</paused>\\n    <finished>false</finished>\\n    <idle>true</idle>\\n    <created>1582706232</created>\\n    <updated>1582706232</updated>\\n    <cron>0 0 * * 1,2,3,4,5,6,7</cron>\\n    <enabled>true</enabled>\\n    <appId/>\\n    <appGroupId>110091051</appGroupId>\\n    <ownerId>2656</ownerId>\\n    <lastScheduledTimestamp/>\\n    <forkedAppId/>\\n    <appGroup>\\n        <id>110091051</id>\\n    </appGroup>\\n    <owner>\\n        <id>2656</id>\\n    </owner>\\n    <filter>\\n        <field>ctime</field>\\n        <days>30</days>\\n        <unit>s</unit>\\n    </filter>\\n</result>","errorExample":""}]',
      'title' => '获取应用定时任务列表',
      'summary' => '获取OpenSearch应用定时任务列表。',
      'requestParamsDescription' => '**查询参数**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| id | String | 否 | "2f12c585-5873-11ea-974a-7cd30ad3e268" | 任务ID |
| enabled | Boolean | 否 | true | 是否已开启定时任务 |
| updated | Integer | 否 | 1582706232 | 定时任务的更新时间戳 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateScheduledTask' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scheduled-tasks',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求体',
            'required' => false,
            '$ref' => '#/components/schemas/ScheduledTask',
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
              'result' => 
              array (
                'description' => '定时任务信息，参考：[ScheduledTask](~~173610~~)',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>0BECF34E-125A-D35F-1E5D-ABB66B11FAB8</requestId>\\n<result>\\n    <id>cfd5ebe9-bcdd-11ea-a58d-98039b07e4ec</id>\\n    <progress>0</progress>\\n    <status>3</status>\\n    <lastRanTimestamp/>\\n    <type>wipe</type>\\n    <running>false</running>\\n    <paused>false</paused>\\n    <finished>false</finished>\\n    <idle>true</idle>\\n    <created>1593747144</created>\\n    <updated>1593747144</updated>\\n    <cron>0 0 * * 1,2,3,4,5,6,7</cron>\\n    <enabled>true</enabled>\\n    <lastScheduledTimestamp/>\\n    <forkedAppId/>\\n    <filter>\\n        <field>title</field>\\n        <days>30</days>\\n        <unit>s</unit>\\n    </filter>\\n</result>","errorExample":""}]',
      'title' => '创建一个应用的定时任务',
      'summary' => '创建一个 OpenSearch 应用的定时任务。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| type | String | 是 | "wipe" | 定时任务类型<br />- wipe 数据清理<br />- fork 导入数据加索引重建<br />- reindex 索引重建<br />- clear 清空数据 |
| cron | String | 是 | "10 20 * * 1,2,3,4,5" | 定时配置<br />参考：[ScheduledTask 定时规则](~~173611~~) |
| enabled | Boolean | 是 | true | 是否开启定时任务 |
| appStrategy | String | 否 | delete-idle | 创建新版本的策略<br />- delete-idle 已有两个版本，先删除非在线版本，再创建新版本<br />- need-slot 只有一个版本，直接创建新版本 |
| filter | Object | 否 |  | 数据清理条件 |
| filter.days | Integer | 是 | 7 | 过期天数<br />获取范围：[7-180] |
| filter.unit | String | 是 | "s" | 过期时间单位<br />- s  秒<br />- ms  毫秒 |
| filter.field | String | 否  | "cate_id" | 过期字段 |
| runNow | Boolean | 否  | false | 是否立即执行（默认：false） |
| permanent | Boolean | 否  | true | 是否持久化（默认：true） |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeScheduledTask' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scheduled-tasks/{taskId}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2f12c585-5873-11ea-974a-7cd30ad3e268',
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
              'result' => 
              array (
                'description' => '定时任务信息',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '922DC0D9-31B5-45F9-47B7-37DC678D61A8',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"922DC0D9-31B5-45F9-47B7-37DC678D61A8\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>922DC0D9-31B5-45F9-47B7-37DC678D61A8</requestId>\\n<result>\\n    <id>2f12c585-5873-11ea-974a-7cd30ad3e268</id>\\n    <progress>60</progress>\\n    <status>0</status>\\n    <lastRanTimestamp>1593755495</lastRanTimestamp>\\n    <type>wipe</type>\\n    <running>true</running>\\n    <paused>false</paused>\\n    <finished>false</finished>\\n    <idle>false</idle>\\n    <created>1593747144</created>\\n    <updated>1593755504</updated>\\n    <cron>0 0 * * 1,2,3,4,5,6,7</cron>\\n    <enabled>true</enabled>\\n    <appId/>\\n    <appGroupId>110091051</appGroupId>\\n    <ownerId>84</ownerId>\\n    <lastScheduledTimestamp/>\\n    <forkedAppId>100304004</forkedAppId>\\n    <appGroup>\\n        <id>110091051</id>\\n    </appGroup>\\n    <owner>\\n        <id>84</id>\\n    </owner>\\n    <filter>\\n        <field>title</field>\\n        <days>30</days>\\n        <unit>s</unit>\\n    </filter>\\n</result>","errorExample":""}]',
      'title' => '查看应用定时任务详情',
      'summary' => '查看 OpenSearch 应用定时任务详情。',
    ),
    'ModifyScheduledTask' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scheduled-tasks/{taskId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '121414148',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '56e9c2e7-5a4d-481a-9f1b-b07da6909450',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'any',
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
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '定时任务信息',
                'type' => 'object',
                'example' => 'Array',
              ),
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","type":"json"}]',
      'title' => '修改一个定时任务',
      'summary' => '修改一个定时任务。',
    ),
    'RemoveScheduledTask' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/scheduled-tasks/{taskId}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“2f12c585-5873-11ea-974a-7cd30ad3e268”',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果列表（请求成功不会返回此参数）',
                  'type' => 'integer',
                  'format' => 'int32',
                  'example' => '1',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    1\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>","errorExample":""}]',
      'title' => '删除计划任务',
      'summary' => '删除 OpenSearch 应用定时任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSortExpressions' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/sort-expressions',
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
        'operationType' => 'none',
        'abilityTreeCode' => '55229',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchMS4QP2',
          1 => 'FEATUREopensearchSYPFQY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本ID',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '999999999',
            'minimum' => '1',
            'example' => '110116134',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'result' => 
              array (
                'description' => '粗排或精排表达式信息

参考：[FirstRank](~~170007~~)、[SecondRank](~~170008~~)',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间（时间戳）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1655793690',
                    ),
                    'active' => 
                    array (
                      'description' => '是否是默认表达式',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => '""',
                    ),
                    'updated' => 
                    array (
                      'description' => '更新时间（时间戳）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1655793690',
                    ),
                    'name' => 
                    array (
                      'description' => '名称',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1655793690,\\n      \\"active\\": true,\\n      \\"description\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"updated\\": 1655793690,\\n      \\"name\\": \\"default\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>\\n    <name>default</name>\\n    <description/>\\n    <active>true</active>\\n    <meta>\\n        <attribute>static_bm25()</attribute>\\n        <arg/>\\n        <weight>1</weight>\\n    </meta>\\n    <created>1655793690</created>\\n    <updated>1655793690</updated>\\n</result>\\n<result>\\n    <name>default</name>\\n    <meta/>\\n    <active>false</active>\\n    <description/>\\n    <created>0</created>\\n    <updated>0</updated>\\n    <isDefault>false</isDefault>\\n    <isSys>true</isSys>\\n</result>\\n<result>\\n    <name>tests</name>\\n    <meta>random()+now()</meta>\\n    <active>true</active>\\n    <description/>\\n    <created>1587052801</created>\\n    <updated>1587052801</updated>\\n    <isDefault>true</isDefault>\\n    <isSys>false</isSys>\\n</result>\\n<result>\\n    <name>test</name>\\n    <meta>query_term_count()</meta>\\n    <active>false</active>\\n    <description/>\\n    <created>1587052801</created>\\n    <updated>1587052801</updated>\\n    <isDefault>false</isDefault>\\n    <isSys>false</isSys>\\n</result>\\n<totalCount>4</totalCount>","errorExample":""}]',
      'title' => '获取应用版本上的排序表达式列表',
      'summary' => '获取应用版本上的排序表达式列表。',
      'requestParamsDescription' => '**查询参数**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| pageNumber | Integer | 否 | 1 | 页码，默认 pageNumber=1 |
| pageSize | Integer | 否 | 10 | 每页返回数目，默认 pageSize=10 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindEsInstance' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/actions/unbind-es-instance',
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
        'operationType' => 'none',
        'abilityTreeCode' => '55264',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchQZGKV9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"my_app_group_name"',
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
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\"\\n}","type":"json"}]',
      'title' => '卸载依赖库实例',
      'summary' => '为 opensearch 应用解绑es实例。',
    ),
    'BindEsInstance' => 
    array (
      'summary' => '绑定依赖性 Elasticsearch 实例。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/actions/bind-es-instance',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F5099063-6B86-F398-D843-905F9EFB683A',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"F5099063-6B86-F398-D843-905F9EFB683A\\"\\n}","type":"json"}]',
      'title' => '绑定依赖性库实例',
    ),
    'BindESUserAnalyzer' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/es/{esInstanceId}/actions/bind-analyzer',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '130187460',
          ),
        ),
        1 => 
        array (
          'name' => 'esInstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'es-cn-zvp2g952l000v5uxp',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'type' => 'any',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '自定义分析器',
                'type' => 'object',
                'example' => '[]',
              ),
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '3AD34CAD-9603-5251-AFF5-3916C848A1D3',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [],\\n  \\"requestId\\": \\"3AD34CAD-9603-5251-AFF5-3916C848A1D3\\"\\n}","type":"json"}]',
      'title' => '为es实例绑定自定义分析器',
      'summary' => '为es实例绑定自定义分析器。',
    ),
    'UnbindESUserAnalyzer' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/es/{esInstanceId}/actions/unbind-analyzer',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'esInstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'es-cn-zvp2ff3iq000myzv7',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'type' => 'any',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '自定义分析器',
                'type' => 'object',
                'example' => '[]',
              ),
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [],\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\"\\n}","type":"json"}]',
      'title' => '为Elasticsearch实例解绑自定义分析器',
      'summary' => '为Elasticsearch实例解绑自定义分析器。',
      'description' => '为Elasticsearch实例解绑自定义分析器',
    ),
    'ListProceedings' => 
    array (
      'summary' => '查看当前的处理流。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/proceedings',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '120677456',
          ),
        ),
        1 => 
        array (
          'name' => 'filterFinished',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否过滤已完成。',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'F5099063-6B86-F398-D843-905F9EFB683A',
              ),
            ),
            'example' => '{}',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F5099063-6B86-F398-D843-905F9EFB683A\\"\\n}","type":"json"}]',
      'title' => '显示AppGroup正在进行的离线导入的任务列表',
    ),
    'ListStatisticLogs' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/statistic-logs/{moduleName}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'moduleName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '模块名称，为枚举值

- hot 热词榜单
- error 应用日志
- slow-log 慢日志

目前只支持 hot',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hot',
          ),
        ),
        2 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间
默认为当天0点0分0秒的时间戳',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999999999',
            'minimum' => '0',
            'example' => '1582214400',
          ),
        ),
        3 => 
        array (
          'name' => 'stopTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间
默认为当天24点0分0秒的时间戳',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999999999',
            'minimum' => '0',
            'example' => '1682222400',
          ),
        ),
        4 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，默认 pageNumber = 1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认 pageSize = 10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'query查询子句内容',
            'type' => 'string',
            'required' => false,
            'example' => '"default:\'OpenSearch\'"',
          ),
        ),
        7 => 
        array (
          'name' => 'sortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'sort排序子句内容',
            'type' => 'string',
            'required' => false,
            'example' => '"-id"',
          ),
        ),
        8 => 
        array (
          'name' => 'distinct',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用distinct子句',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'columns',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的字段
格式为 columns=wordsTopPv

参考：[QUERY_ANALYSIS query分析类指标](~~187665~~)',
            'type' => 'string',
            'required' => false,
            'example' => 'wordsTopPv',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'description' => '数据总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F76ACE3D-E510-EE2C-B7B1-39B3136A61EE',
              ),
              'result' => 
              array (
                'description' => '结果数据，参考：

- [热词榜单](~~421248~~)',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果数据，参考：

- [热词榜单](~~187660~~)',
                  'type' => 'object',
                  'example' => '[       {           "rawQuery":"淘宝",           "pv":100       }     ]',
                ),
                'example' => '[]',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"F76ACE3D-E510-EE2C-B7B1-39B3136A61EE\\",\\n  \\"result\\": [\\n    [\\n      {\\n        \\"rawQuery\\": \\"淘宝\\",\\n        \\"pv\\": 100\\n      }\\n    ]\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>F76ACE3D-E510-EE2C-B7B1-39B3136A61EE</requestId>\\n<result>\\n    <rawQuery>淘宝</rawQuery>\\n    <pv>100</pv>\\n</result>\\n<totalCount>1</totalCount>","errorExample":""}]',
      'title' => '查询日志类统计',
      'summary' => '查询日志类统计，例如：应用错误日志、热词榜单、慢日志。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '**hot 热词榜单**
| 名称 | 类型 | 描述 |
| --- | --- | --- |
| rawQuery | String | 热词 |
| pv | Integer | PV |',
      'extraInfo' => ' ',
    ),
    'ListStatisticReport' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/statistic-report/{moduleName}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'moduleName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '模块名称，为枚举值

- app   （业务运营报表）
- app-query （业务运营报表>Query分析指标）
- abtest （A/B测试报表）
- suggest （下拉提示报表）
- hot （热搜报表）
- hint （底纹报表）
- data-quality
- es （开源兼容版实例报表）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'suggest',
          ),
        ),
        2 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间戳（单位：秒）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999999999',
            'minimum' => '0',
            'example' => '1582214400',
          ),
        ),
        3 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间默认为当前时间戳（单位：秒）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9999999999',
            'minimum' => '0',
            'example' => '1582646399',
          ),
        ),
        4 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认 pageSize = 10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'columns',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的字段
格式为 colums=”pv,uv,ipv”,参考：[统计报表指标释义
](~~187665~~)',
            'type' => 'string',
            'required' => false,
            'example' => 'pv,uv',
          ),
        ),
        7 => 
        array (
          'name' => 'query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询条件，格式 k1:v1,k2:v2

- experimentSerialNumber 实验的全局唯一序列号
- sceneTag 场景标识
- bizType 业务标识
- modelId 算法模型ID',
            'type' => 'string',
            'required' => false,
            'example' => 'bizType:test,sceneTag:myTag',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'description' => '数据总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '43',
              ),
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'F65C8BB2-C14F-5983-888B-41C4E082D3BC',
              ),
              'result' => 
              array (
                'description' => '统计报告

- data-quality 参考：[数据采集 - 行为数据上报](~~131547~~)
- app、abtest 参考：[CORE 核心类指标](~~187665~~)
- app-query 参考：[QUERY_ANALYSIS query分析类指标](~~187665~~)',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果体',
                  'type' => 'object',
                  'example' => '{}',
                ),
                'example' => '[]',
              ),
            ),
            'example' => '[]',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 43,\\n  \\"requestId\\": \\"F65C8BB2-C14F-5983-888B-41C4E082D3BC\\",\\n  \\"result\\": [\\n    {}\\n  ]\\n}","type":"json"}]',
      'title' => '报告类统计查询',
      'summary' => '应用场景有：应用报表、下拉提示报表、热词底纹报表、abtest报表、数据质量报告等。',
    ),
    'UpdateSortScript' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称或应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app',
          ),
        ),
        1 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用下的版本id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'scriptName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '脚本名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_cava',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9F165784-5507-5342-ABF3-545293F9808A',
              ),
            ),
            'example' => '[]',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9F165784-5507-5342-ABF3-545293F9808A\\"\\n}","type":"json"}]',
      'title' => '修改排序脚本备注',
      'summary' => '修改排序脚本备注。',
      'description' => '修改排序脚本备注',
      'responseParamsDescription' => '**示例**

请求示例

```
PUT /v4/openapi/app-groups/my_app/apps/123456/sort-scripts/test_cava
{
    "description" : "just for test"
}
```

正常返回示例

XML格式

```
<requestId>ABCDEFGH</requestId>
```

JSON格式

```
{"requestId":"ABCDEFGH"}
```
',
    ),
    'SaveSortScriptFile' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/files/src/{fileName}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '\'\'110123411\'\'',
          ),
        ),
        1 => 
        array (
          'name' => 'scriptName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '需要更新内容的脚本名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '\'\'test1\'\'',
          ),
        ),
        2 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用下的版本id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '\'\'110123111\'\'',
          ),
        ),
        3 => 
        array (
          'name' => 'fileName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '文件名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '\'\'file01\'\'',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'scriptContent',
            'type' => 'object',
            'properties' => 
            array (
              'content' => 
              array (
                'description' => '脚本内容，base64编码',
                'type' => 'string',
                'required' => false,
                'example' => '4769#0: *28194492991 a client request body is buffered to a temporary file /usr/local/webserver/openresty/nginx/client_body_temp/0000624474,',
              ),
              'version' => 
              array (
                'description' => '脚本内容的版本',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2022-12-01',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '唯一标识一次请求',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>","errorExample":""}]',
      'title' => '保存排序脚本文件',
      'summary' => '上传排序脚本内容。',
      'requestParamsDescription' => '## scriptContent
| 名称 | 类型 | 是否必选 | 描述 |
| --- | --- | --- | --- |
| content | String | 是 | 脚本内容，需要使用base64编码 |
| version | integer | 否 | 脚本内容的版本，用于并发更新时保序，默认为当前时间 |',
      'extraInfo' => ' ',
    ),
    'ReleaseSortScript' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/actions/release',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '\'\'1234\'\'',
          ),
        ),
        1 => 
        array (
          'name' => 'scriptName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '脚本名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '\'\'test\'\'',
          ),
        ),
        2 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用下的版本id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '\'\'12345\'\'',
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
              'requestId' => 
              array (
                'description' => '唯一标识一次请求',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>","errorExample":""}]',
      'title' => '发布排序脚本',
      'summary' => '发布排序脚本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '**错误返回**

{
    "requestId" : "ABCDEFGH"
    "code":"InvalidAppStatus",
    "message":"invalid app status.",
    "httpCode":400
}',
    ),
    'GetSortScriptFile' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/files/src/{fileName}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app',
          ),
        ),
        1 => 
        array (
          'name' => 'scriptName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '脚本名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'UserScorer.cava',
          ),
        ),
        2 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用下的版本id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        3 => 
        array (
          'name' => 'fileName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '脚本文件名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'script1',
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
              'requestId' => 
              array (
                'description' => '唯一标识一次请求',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
              'result' => 
              array (
                'description' => '排序脚本内容',
                'type' => 'object',
                'properties' => 
                array (
                  'content' => 
                  array (
                    'description' => '脚本内容，base64编码',
                    'type' => 'string',
                    'example' => 'YWJjZGVmZw==',
                  ),
                  'createTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2020-04-02 20:21:14',
                  ),
                  'modifyTime' => 
                  array (
                    'description' => '最后一次修改时间',
                    'type' => 'string',
                    'example' => '2020-04-02 21:21:14',
                  ),
                  'version' => 
                  array (
                    'description' => '脚本内容的版本',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123456',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": {\\n    \\"content\\": \\"YWJjZGVmZw==\\",\\n    \\"createTime\\": \\"2020-04-02 20:21:14\\",\\n    \\"modifyTime\\": \\"2020-04-02 21:21:14\\",\\n    \\"version\\": 123456\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>\\n<result>\\n    <content>YWJjZGVmZw==</content>\\n    <version>123456</version>\\n</result>","errorExample":""}]',
      'title' => '获取排序脚本内容',
      'summary' => '获取排序脚本内容。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ```
错误返回
{
    "requestId" : "ABCDEFGH",
    "code":"ResourceNotFound",
    "message":"The specified script not found.",
    "httpCode":404
}
```',
      'extraInfo' => ' ',
    ),
    'GetSortScript' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称、应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'my_app',
          ),
        ),
        1 => 
        array (
          'name' => 'scriptName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '脚本名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'script1',
          ),
        ),
        2 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用下的版本id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => '160051478',
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
              'requestId' => 
              array (
                'description' => '唯一标识一次请求',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                ),
                'example' => 'ABCDEFGH',
              ),
              'result' => 
              array (
                'description' => '脚本的详情',
                'type' => 'object',
                'properties' => 
                array (
                  'scope' => 
                  array (
                    'description' => '脚本的作用范围',
                    'type' => 'string',
                    'example' => 'second_rank',
                  ),
                  'createTime' => 
                  array (
                    'description' => '脚本创建时间',
                    'type' => 'string',
                    'example' => '2020-04-02 20:21:14',
                  ),
                  'status' => 
                  array (
                    'description' => '脚本的状态，详情请参考下节脚本状态列表',
                    'type' => 'string',
                    'example' => 'released',
                  ),
                  'modifyTime' => 
                  array (
                    'description' => '脚本最后一次修改时间',
                    'type' => 'string',
                    'example' => '2020-04-02 21:21:14',
                  ),
                  'type' => 
                  array (
                    'description' => '脚本的类型',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                    ),
                    'example' => 'cava_script',
                  ),
                  'scriptName' => 
                  array (
                    'description' => '脚本名称',
                    'type' => 'string',
                    'example' => 'rank_cava_20230606_v7
',
                  ),
                ),
              ),
            ),
            'enumValueTitles' => 
            array (
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": {\\n    \\"scope\\": \\"second_rank\\",\\n    \\"createTime\\": \\"2020-04-02 20:21:14\\",\\n    \\"status\\": \\"released\\",\\n    \\"modifyTime\\": \\"2020-04-02 21:21:14\\",\\n    \\"type\\": \\"cava_script\\",\\n    \\"scriptName\\": \\"rank_cava_20230606_v7\\\\n\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取排序脚本详情',
      'summary' => '获取排序脚本详情。',
      'responseParamsDescription' => '```
错误返回
{
    "requestId" : "ABCDEFGH",
		"code":"ResourceNotFound",
    "message":"The specified script not found.",
    "httpCode":404
}
```',
    ),
    'GetScriptFileNames' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/file-names',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app',
          ),
        ),
        1 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用下的版本id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'scriptName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '脚本名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'file_names',
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
              'requestId' => 
              array (
                'description' => '唯一标识一次请求',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
              'result' => 
              array (
                'description' => '脚本列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'createTime' => 
                    array (
                      'description' => '脚本创建时间',
                      'type' => 'string',
                      'example' => '2020-04-02 20:21:14',
                    ),
                    'fileName' => 
                    array (
                      'description' => '脚本文件名',
                      'type' => 'string',
                      'example' => 'my_cava_script.cava',
                    ),
                    'modifyTime' => 
                    array (
                      'description' => '脚本最后一次修改时间',
                      'type' => 'string',
                      'example' => '2020-04-02 21:21:14',
                    ),
                    'pathName' => 
                    array (
                      'description' => '脚本路径名',
                      'type' => 'string',
                      'example' => 'src',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": [\\n    {\\n      \\"createTime\\": \\"2020-04-02 20:21:14\\",\\n      \\"fileName\\": \\"my_cava_script.cava\\",\\n      \\"modifyTime\\": \\"2020-04-02 21:21:14\\",\\n      \\"pathName\\": \\"src\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>\\n<result>\\n    <fileName>my_cava_script.cava</fileName>\\n    <pathName>src</pathName>\\n    <createTime>2020-04-02 20:21:14</createTime>\\n    <modifyTime>2020-04-02 21:21:14</modifyTime>\\n</result>","errorExample":""}]',
      'title' => '获取脚本文件名称列表',
      'summary' => '获取指定版本指定脚本下所有的文件名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ```
错误返回
{
    "requestId" : "ABCDEFGH",
    "code":"ResourceNotFound",
    "message":"The specified script not found.",
    "httpCode":404
}
```',
      'extraInfo' => '  ',
    ),
    'DeleteSortScriptFile' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/files/src/{fileName}',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'search',
          ),
        ),
        1 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567',
          ),
        ),
        2 => 
        array (
          'name' => 'scriptName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '脚本名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cava',
          ),
        ),
        3 => 
        array (
          'name' => 'fileName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '需要删除的脚本文件名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cavafile',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>","errorExample":""}]',
      'title' => '删除排序脚本文件',
      'summary' => '删除脚本文件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteSortScript' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'search',
          ),
        ),
        1 => 
        array (
          'name' => 'scriptName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '脚本名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cava',
          ),
        ),
        2 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用下的版本id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>","errorExample":""}]',
      'title' => '删除排序脚本',
      'summary' => '删除排序脚本。',
      'responseParamsDescription' => '```
错误返回
{
    "requestId" : "ABCDEFGH"
	"code":"InvalidAppStatus",
    "message":"invalid app status.",
    "httpCode":400
}
```',
    ),
    'CreateSortScript' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'search',
          ),
        ),
        1 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用下的报表id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'scriptName' => 
              array (
                'description' => '脚本名称',
                'type' => 'string',
                'required' => false,
                'example' => 'rank_cava_20230606_v7',
              ),
              'type' => 
              array (
                'description' => '脚本的类型，目前只支持cava_script',
                'type' => 'string',
                'required' => false,
                'example' => 'cava_script
',
              ),
              'scope' => 
              array (
                'description' => '脚本的作用范围',
                'type' => 'string',
                'required' => false,
                'example' => 'second_rank',
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
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '唯一标识一次请求',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'scriptName' => 
                  array (
                    'description' => '脚本名称',
                    'type' => 'string',
                    'example' => 'rank_cava_20230606_v7
',
                  ),
                  'type' => 
                  array (
                    'description' => '脚本的类型',
                    'type' => 'string',
                    'example' => 'cava_script',
                  ),
                  'scope' => 
                  array (
                    'description' => '脚本的作用范围',
                    'type' => 'string',
                    'example' => 'second_rank',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": {\\n    \\"scriptName\\": \\"rank_cava_20230606_v7\\\\n\\",\\n    \\"type\\": \\"cava_script\\",\\n    \\"scope\\": \\"second_rank\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>","errorExample":""}]',
      'title' => '创建排序脚本',
      'summary' => '创建排序脚本。',
      'requestParamsDescription' => '**请求参数**

| 名称 | 类型 | 是否必选 | 描述 |
| --- | --- | --- | --- |
| scriptParams | Map | 是 | 待注册的script参数 |

**scriptParams**

| 名称 | 类型 | 是否必选 | 描述 |
| --- | --- | --- | --- |
| scriptName | String | 是 | script名称 |
| type | String | 是 | 脚本的类型，目前只支持cava_script |
| scope | String | 是 | 脚本的作用范围，目前只支持second_rank |
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CompileSortScript' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts/{scriptName}/actions/compiling',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称、应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'search',
          ),
        ),
        1 => 
        array (
          'name' => 'scriptName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '脚本名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'script',
          ),
        ),
        2 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用下的版本id',
            'type' => 'string',
            'required' => false,
            'example' => '130196473',
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
              'requestId' => 
              array (
                'description' => '唯一标识一次请求',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","type":"json"}]',
      'title' => '编译排序脚本',
      'summary' => '编译排序脚本。',
      'responseParamsDescription' => '```
错误返回
{
    "requestId" : "ABCDEFGH",
    "code":"InvalidAppStatus",
    "message":"invalid app status.",
    "httpCode":400
}
```',
    ),
    'UpdateSearchStrategy' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/search-strategies/{strategyName}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"110157886"',
          ),
        ),
        2 => 
        array (
          'name' => 'strategyName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '策略名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'description' => '查询策略，参考[SearchStrategy](~~2400242~~)',
            'required' => false,
            '$ref' => '#/components/schemas/SearchStrategy',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","type":"json"}]',
      'title' => '更新搜索策略',
      'summary' => '支持dryrun。',
    ),
    'RemoveSearchStrategy' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/search-strategies/{strategyName}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'strategyName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '策略名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'F5099063-6B86-F398-D843-905F9EFB683A',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F5099063-6B86-F398-D843-905F9EFB683A\\"\\n}","type":"json"}]',
      'title' => '删除查询策略',
      'summary' => '删除查询策略。',
    ),
    'ListSearchStrategies' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/search-strategies',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"my_app"',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"110123456"',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回对象',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9C6351F5-2E2E-5249-888B-88A74E1B8A65',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9C6351F5-2E2E-5249-888B-88A74E1B8A65\\"\\n}","type":"json"}]',
      'title' => '获取查询策略详情',
      'summary' => '获取查询策略详情。',
      'responseParamsDescription' => '返回结果示例：
```json
{
    "name": "test",
    "status": 1,
    "description": "",
    "updated": 12455,
    "searchConfigs": [
        {
            "queryType": "vector",
            "firstRankName": "",
            "secondRankName": "",
            "mergeProportion": 30
        },
        {
            "queryType": "keyword",
            "firstRankName": "",
            "secondName": "",
            "mergeProportion": 70
        }
    ],
    "mergeConfig": {
        "rankName": "",
        "docCount": 5000
    }
}
```',
    ),
    'GetSearchStrategy' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/search-strategies/{strategyName}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用版本',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        2 => 
        array (
          'name' => 'strategyName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '策略名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
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
              'requestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5C1C1C45-C64A-AD30-565F-140871D57E5E',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"5C1C1C45-C64A-AD30-565F-140871D57E5E\\"\\n}","type":"json"}]',
      'title' => '获取搜索策略',
      'summary' => '获取查询策略详情。',
    ),
    'CreateSearchStrategy' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/search-strategies',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '"my_app"',
          ),
        ),
        1 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'required' => false,
            '$ref' => '#/components/schemas/SearchStrategy',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体

',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '"abc123"',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"\\\\\\"abc123\\\\\\"\\"\\n}","type":"json"}]',
      'title' => '创建查询策略',
      'summary' => '创建查询策略。',
    ),
    'UpdateFetchFields' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/fetch-fields',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为空运行请求',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        2 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '110157886',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'array',
            'items' => 
            array (
              'description' => '展示字段数组',
              'type' => 'string',
              'required' => false,
              'example' => '\'["id", "name", "title"]\'',
            ),
            'required' => false,
            'maxItems' => 100,
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
              'result' => 
              array (
                'description' => '是否修改成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result>true</result>","errorExample":""}]',
      'title' => '更新应用版本的默认展示字段',
      'summary' => '支持 dryRun。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateSummaries' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appId}/summaries',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为空运行请求',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        2 => 
        array (
          'name' => 'appId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10157886',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'array',
            'items' => 
            array (
              'description' => '请求体',
              'type' => 'object',
              'properties' => 
              array (
                'field' => 
                array (
                  'description' => '字段',
                  'type' => 'string',
                  'required' => false,
                  'example' => '"title"',
                ),
                'len' => 
                array (
                  'description' => '片段长度',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '50',
                ),
                'element' => 
                array (
                  'description' => '飘红标签',
                  'type' => 'string',
                  'required' => false,
                  'example' => '"em"	',
                ),
                'ellipsis' => 
                array (
                  'description' => '片段链接符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '"..."',
                ),
                'snippet' => 
                array (
                  'description' => '片段数量',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
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
              'result' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '7A389E09-7964-5A2B-FE9D-F6CFA7162852',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": true,\\n  \\"requestId\\": \\"7A389E09-7964-5A2B-FE9D-F6CFA7162852\\"\\n}","errorExample":""},{"type":"xml","example":"<result>true</result>\\n<requestId>7A389E09-7964-5A2B-FE9D-F6CFA7162852</requestId>","errorExample":""}]',
      'title' => '设置指定应用版本摘要',
      'summary' => '支持 dryRun。',
      'requestParamsDescription' => '**请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| [] | Object | 是 |  | 摘要设置<br />参考：[Summary](~~170016~~) 字段 |
| [].field | String | 是 | "title" | 字段 |
| [].len | Integer | 是 | 50 | 片段长度 |
| [].element | String | 是 | "em" | 飘红标签 |
| [].ellipsis | String | 是 | "..." | 片段链接符 |
| [].snippet | Integer | 是 | 1 | 片段数量 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFunctionResource' => 
    array (
      'summary' => '创建指定功能下的算法资源。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/resources',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '功能名称',
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'rank',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '资源数据，不同resourceType对应的data结构不同',
                'type' => 'object',
                'properties' => 
                array (
                  'Content' => 
                  array (
                    'description' => 'raw_file类型资源对应的文件内容',
                    'type' => 'string',
                    'required' => false,
                    'example' => '"abc"',
                  ),
                  'Generators' => 
                  array (
                    'description' => 'feature_generator类型资源对应的特征生成列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '特征生成描述',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Generator' => 
                        array (
                          'description' => '特征生成的类型',
                          'type' => 'string',
                          'required' => false,
                          'enumValueTitles' => 
                          array (
                            'lookup' => 'lookup',
                            'sequence' => 'sequence',
                            'overlap' => 'overlap',
                            'raw' => 'raw',
                            'combo' => 'combo',
                            'id' => 'id',
                          ),
                          'example' => 'id',
                        ),
                        'Input' => 
                        array (
                          'description' => '输入',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Features' => 
                            array (
                              'description' => '输入特征列表',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '输入特征',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Name' => 
                                  array (
                                    'description' => '特征名',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'system_item_id',
                                  ),
                                  'Type' => 
                                  array (
                                    'description' => '特征类型',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => 
                                    array (
                                      'item' => 'item',
                                      'user' => 'user',
                                    ),
                                    'example' => 'item',
                                  ),
                                ),
                                'required' => false,
                              ),
                              'required' => false,
                            ),
                          ),
                          'required' => false,
                        ),
                        'Output' => 
                        array (
                          'description' => '输出的特征名',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'item_id_feature',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'Description' => 
              array (
                'description' => '资源描述',
                'type' => 'string',
                'required' => false,
                'example' => '""',
              ),
              'ResourceName' => 
              array (
                'description' => '资源名称',
                'type' => 'string',
                'required' => false,
                'example' => 'fg_jsoon',
              ),
              'ResourceType' => 
              array (
                'description' => '资源类型',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'feature_generator' => 'feature_generator',
                  'raw_file' => 'raw_file',
                ),
                'example' => 'feature_generator',
              ),
            ),
            'required' => false,
            'docRequired' => true,
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
              'Status' => 
              array (
                'description' => '状态码

- OK 成功
- FAIL 失败',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A4D487A9-A456-5AA5-A9C6-B7BF2889CF74',
              ),
              'Message' => 
              array (
                'description' => '返回的错误信息',
                'type' => 'string',
                'example' => '""',
              ),
              'Code' => 
              array (
                'description' => '返回的错误码（没有错误为空）',
                'type' => 'string',
                'example' => '""',
              ),
              'Latency' => 
              array (
                'description' => 'api请求耗时 (单位毫秒)',
                'type' => 'number',
                'format' => 'double',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"A4D487A9-A456-5AA5-A9C6-B7BF2889CF74\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Code\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '创建算法资源',
    ),
    'GetFunctionCurrentVersion' => 
    array (
      'summary' => '获取当前功能新建实例时使用的版本信息。',
      'path' => '/v4/openapi/functions/{functionName}/current-version',
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
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '功能名称，支持的模型有：

- CTR模型：ctr
- 人气模型：pop
- 类目模型：category
- 热词模型：hot
- 底纹模型：hint
- 下拉提示模型：suggest
- 分词模型：analyzer
- 词权重模型：termweight',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr',
          ),
        ),
        1 => 
        array (
          'name' => 'modelType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型类型，不同功能对应的模型类型如下：

- CTR模型：tf_checkpoint
- 人气模型：pop
- 类目模型：offline_inference
- 热词模型：offline_inference
- 底纹模型：offline_inference
- 下拉提示模型：offline_inference
- 分词模型：text
- 词权重模型：tf_checkpoint',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'pop' => '人气模型',
              'offline_inference' => '热词底纹\\类目预测',
              'tf_checkpoint' => 'ctr\\定制词权重等',
              'text' => '定制分词',
            ),
            'example' => 'tf_checkpoint',
          ),
        ),
        2 => 
        array (
          'name' => 'functionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '功能类型：

- PAAS （默认）
- SAAS',
            'type' => 'string',
            'required' => false,
            'example' => 'PAAS',
          ),
        ),
        3 => 
        array (
          'name' => 'domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业，默认为空，表示通用版',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'education' => '教育行业',
              'ecommerce' => '电商行业',
              'community' => '内容社区',
            ),
            'example' => 'ecommerce',
          ),
        ),
        4 => 
        array (
          'name' => 'category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '垂类，默认为空',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'general' => '通用',
              'question' => '教育搜题',
              'it' => 'IT内容',
            ),
            'example' => 'general',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '1638157479281',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'version not exist.',
              ),
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Version.NotExist',
              ),
              'Result' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'FunctionName' => 
                  array (
                    'description' => '功能名称',
                    'type' => 'string',
                    'example' => 'ctr',
                  ),
                  'FunctionType' => 
                  array (
                    'description' => '功能类型：

- PAAS
- SAAS',
                    'type' => 'string',
                    'example' => 'PAAS',
                  ),
                  'ModelType' => 
                  array (
                    'description' => '模型类型',
                    'type' => 'string',
                    'example' => 'tf_checkpoint',
                  ),
                  'VersionConfig' => 
                  array (
                    'description' => '配置信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CreateParameters' => 
                      array (
                        'description' => '创建实例时使用的参数列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '参数体',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'description' => 'name',
                              'type' => 'string',
                              'example' => 'params1',
                            ),
                            'Required' => 
                            array (
                              'description' => 'required',
                              'type' => 'string',
                              'example' => 'true',
                            ),
                          ),
                          'example' => '{                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }',
                        ),
                        'example' => '[                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ]',
                      ),
                      'Depends' => 
                      array (
                        'description' => '实例的依赖项列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '参数体

',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Condition' => 
                            array (
                              'description' => '条件',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'Dependency' => 
                            array (
                              'description' => '依赖项',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'Description' => 
                            array (
                              'description' => '描述',
                              'type' => 'string',
                              'example' => '""',
                            ),
                          ),
                          'example' => '{                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }',
                        ),
                        'example' => '[                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ]',
                      ),
                      'UsageParameters' => 
                      array (
                        'description' => '实例在线使用过程中的参数列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '参数体',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'description' => 'name',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'Required' => 
                            array (
                              'description' => 'required',
                              'type' => 'string',
                              'example' => '""',
                            ),
                          ),
                          'example' => '{}',
                        ),
                        'example' => '[]',
                      ),
                    ),
                    'example' => '{             "createParameters": [                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ],             "depends": [                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ],             "usageParameters": []         }',
                  ),
                  'VersionId' => 
                  array (
                    'description' => '版本id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '101',
                  ),
                  'VersionName' => 
                  array (
                    'description' => '版本名称',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                ),
                'example' => '{         "versionName": "v1",         "versionId": 101,         "functionName": "ctr",         "modelType": "tf_checkpoint",         "functionType": "PAAS",         "versionConfig": {             "createParameters": [                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ],             "depends": [                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ],             "usageParameters": []         }     }',
              ),
              'Latency' => 
              array (
                'description' => '请求耗时（单位ms）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
            ),
            'example' => '{     "status": "OK",     "requestId": "",     "httpCode": 200,     "code": "",     "message": "",     "latency": 123,     "result": {         "versionName": "v1",         "versionId": 101,         "functionName": "ctr",         "modelType": "tf_checkpoint",         "functionType": "PAAS",         "versionConfig": {             "createParameters": [                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ],             "depends": [                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ],             "usageParameters": []         }     } }',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"1638157479281\\",\\n  \\"Message\\": \\"version not exist.\\",\\n  \\"Code\\": \\"Version.NotExist\\",\\n  \\"Result\\": {\\n    \\"FunctionName\\": \\"ctr\\",\\n    \\"FunctionType\\": \\"PAAS\\",\\n    \\"ModelType\\": \\"tf_checkpoint\\",\\n    \\"VersionConfig\\": {\\n      \\"CreateParameters\\": [\\n        {\\n          \\"Name\\": \\"params1\\",\\n          \\"Required\\": \\"true\\"\\n        }\\n      ],\\n      \\"Depends\\": [\\n        {\\n          \\"Condition\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Dependency\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Description\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ],\\n      \\"UsageParameters\\": [\\n        {\\n          \\"Name\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Required\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ]\\n    },\\n    \\"VersionId\\": 101,\\n    \\"VersionName\\": \\"v1\\"\\n  },\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '获取当前版本',
      'requestParamsDescription' => '### 示例
`GET /v4/openapi/functions/ctr/current-version?modelType=_checkpoint&functionType=PAAS&domain=ecommerce&category=general`',
      'responseParamsDescription' => '### 正常返回示例（热词模型）
```
{
    "status": "OK",
    "requestId": "165890826219877085621759",
    "latency": 0.049,
    "httpCode": 200,
    "code": "",
    "message": "",
    "result": {
        "versionId": 37,
        "versionName": "v2",
        "description": "",
        "status": "available",
        "functionName": "hot",
        "modelType": "offline_inference",
        "functionType": "PAAS",
        "versionConfig": {
            "createParameters": [
                {
                    "name": "filter",
                    "required": "false",
                    "validations": "[{\\"preprocess\\": {\\"pattern\\": \\"(\\\\\\\\w+)\\\\\\\\s*(>=|<=|>|<|=|!=)\\\\\\\\s*(\\\\\\\\w+)\\", \\"type\\": \\"regex\\", \\"group\\": 1}, \\"params\\": {\\"data\\": [\\"user_id\\", \\"biz_type\\"], \\"type\\": \\"trival\\"}, \\"class\\": \\"EnumerateRule\\"}]",
                    "value": "{\\"component\\":\\"Input\\",\\"attributes\\":{\\"defaultValue\\":\\"\\",\\"dataSource\\":\\"\\"}}",
                    "valueSplit": ","
                }
            ],
            "usageParameters": [
                {
                    "name": "allow_dict_id",
                    "required": "false",
                    "validations": "[{\\"params\\": {\\"restrictions\\": \\"type=hot_allowlist\\", \\"type\\": \\"passthrough\\", \\"dataSource\\": \\"dicts\\"}, \\"class\\": \\"EnumerateRule\\"}]",
                    "value": "{\\"component\\":\\"Select\\",\\"attributes\\":{\\"defaultValue\\":\\"\\",\\"dataSource\\":\\"\\"}}"
                },
                {
                    "name": "deny_dict_id",
                    "required": "false",
                    "validations": "[{\\"params\\": {\\"restrictions\\": \\"type=hot_denylist\\", \\"type\\": \\"passthrough\\", \\"dataSource\\": \\"dicts\\"}, \\"class\\": \\"EnumerateRule\\"}]",
                    "value": "{\\"component\\":\\"Select\\",\\"attributes\\":{\\"defaultValue\\":\\"\\",\\"dataSource\\":\\"\\"}}"
                }
            ],
            "depends": [
                {
                    "condition": "integrity_level >= 1",
                    "dependency": "integrity_level",
                    "description": "数据完整度至少为L1级"
                }
            ],
            "deployment": "",
            "dagTemplate": "opensearch_hot_train"
        }
    }
}
```',
    ),
    'GetFunctionVersion' => 
    array (
      'summary' => '根据版本ID获取版本信息。',
      'path' => '/v4/openapi/functions/{functionName}/versions/{versionId}',
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
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr',
          ),
        ),
        1 => 
        array (
          'name' => 'versionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本id',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '请求状态',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '1638157479281',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'version not exist.',
              ),
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Version.NotExist',
              ),
              'Result' => 
              array (
                'description' => '结果体',
                'type' => 'object',
                'properties' => 
                array (
                  'FunctionName' => 
                  array (
                    'description' => '功能名称',
                    'type' => 'string',
                    'example' => 'ctr',
                  ),
                  'FunctionType' => 
                  array (
                    'description' => '功能类型

- PAAS
- SAAS',
                    'type' => 'string',
                    'example' => 'PAAS',
                  ),
                  'ModelType' => 
                  array (
                    'description' => '模型类型',
                    'type' => 'string',
                    'example' => 'tf_checkpoint',
                  ),
                  'VersionConfig' => 
                  array (
                    'description' => '配置信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CreateParameters' => 
                      array (
                        'description' => '创建实例时使用的参数列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '参数体',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'description' => 'Name',
                              'type' => 'string',
                              'example' => 'params1',
                            ),
                            'Required' => 
                            array (
                              'description' => 'Required',
                              'type' => 'string',
                              'example' => 'true',
                            ),
                          ),
                          'example' => '{}',
                        ),
                        'example' => '[                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ]',
                      ),
                      'Depends' => 
                      array (
                        'description' => '实例的依赖项列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '参数体',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Condition' => 
                            array (
                              'description' => '条件',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'Dependency' => 
                            array (
                              'description' => '依赖项',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'Description' => 
                            array (
                              'description' => '描述',
                              'type' => 'string',
                              'example' => '""',
                            ),
                          ),
                          'example' => '{}',
                        ),
                        'example' => '[                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ]',
                      ),
                      'UsageParameters' => 
                      array (
                        'description' => '实例在线使用过程中的参数列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '参数体',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'description' => 'Name',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'Required' => 
                            array (
                              'description' => 'Required',
                              'type' => 'string',
                              'example' => '""',
                            ),
                          ),
                          'example' => '{}',
                        ),
                        'example' => '[]',
                      ),
                    ),
                    'example' => '{             "createParameters": [                 {                     "name": "params1",                     "required": "true",                     "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",                     "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"                 }             ],             "depends": [                 {                     "dependency": "依赖项",                     "condition": "条件",                     "description": ""                 }             ],             "usageParameters": []         }',
                  ),
                  'VersionId' => 
                  array (
                    'description' => '版本ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '101',
                  ),
                  'VersionName' => 
                  array (
                    'description' => '版本名称',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                ),
                'example' => '[]',
              ),
              'Latency' => 
              array (
                'description' => '任务最大运行时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
            ),
            'example' => '{}',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"1638157479281\\",\\n  \\"Message\\": \\"version not exist.\\",\\n  \\"Code\\": \\"Version.NotExist\\",\\n  \\"Result\\": {\\n    \\"FunctionName\\": \\"ctr\\",\\n    \\"FunctionType\\": \\"PAAS\\",\\n    \\"ModelType\\": \\"tf_checkpoint\\",\\n    \\"VersionConfig\\": {\\n      \\"CreateParameters\\": [\\n        {\\n          \\"Name\\": \\"params1\\",\\n          \\"Required\\": \\"true\\"\\n        }\\n      ],\\n      \\"Depends\\": [\\n        {\\n          \\"Condition\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Dependency\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Description\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ],\\n      \\"UsageParameters\\": [\\n        {\\n          \\"Name\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Required\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ]\\n    },\\n    \\"VersionId\\": 101,\\n    \\"VersionName\\": \\"v1\\"\\n  },\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '获取版本详情',
      'requestParamsDescription' => '### 示例
`GET /v4/openapi/functions/ctr/version/101`',
      'responseParamsDescription' => '### 正常返回示例
```
{
    "status": "OK",
    "requestId": "",
    "httpCode": 200,
    "code": "",
    "message": "",
    "latency": 123,
    "result": {
        "versionName": "v1",
        "versionId": 101,
        "functionName": "ctr",
        "modelType": "tf_checkpoint",
        "functionType": "PAAS",
        "versionConfig": {
            "createParameters": [
                {
                    "name": "params1",
                    "required": "true",
                    "formItemProps": "{\\"required\\": true, \\"pattern?\\": \\"/^[a-zA-Z][a-zA-Z0-9_]{0,29}$/\\"}",
                    "componentProps": "{\\"component\\": \\"Input\\", \\"attributes\\": {\\"defaultValue\\": \\"value1\\"}}"
                }
            ],
            "depends": [
                {
                    "dependency": "依赖项",
                    "condition": "条件",
                    "description": ""
                }
            ],
            "usageParameters": []
        }
    }
}
```',
    ),
    'GetFunctionDefaultInstance' => 
    array (
      'summary' => '获取app默认使用的算法实例。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/default-instance',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '请求状态',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '062BA91F-A568-5779-8A5B-9E62C9BB3DC1',
              ),
              'Message' => 
              array (
                'description' => '返回的错误信息',
                'type' => 'string',
                'example' => 'default instance not set.',
              ),
              'Code' => 
              array (
                'description' => '返回的状态码',
                'type' => 'string',
                'example' => 'DefaultInstance.NotExist',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceName' => 
                  array (
                    'description' => '默认实例名称',
                    'type' => 'string',
                    'example' => 'model1',
                  ),
                ),
                'example' => '{\'Pagination\': {\'TotalCount\': 0, \'PageNumber\': 1, \'PageSize\': 10}, \'AntConsortiums\': []}',
              ),
              'Latency' => 
              array (
                'description' => '默认运行时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
              'InstanceName' => 
              array (
                'title' => '实例名称',
                'description' => '实例名称',
                'type' => 'string',
                'example' => 'sh-bp1oi31w1jn4ctdyv',
                'readOnly' => false,
              ),
              'FunctionName' => 
              array (
                'title' => '功能名称',
                'description' => '功能名称',
                'type' => 'string',
                'example' => 'cdn_waf',
                'readOnly' => true,
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"062BA91F-A568-5779-8A5B-9E62C9BB3DC1\\",\\n  \\"Message\\": \\"default instance not set.\\",\\n  \\"Code\\": \\"DefaultInstance.NotExist\\",\\n  \\"Result\\": {\\n    \\"InstanceName\\": \\"model1\\"\\n  },\\n  \\"Latency\\": 123,\\n  \\"InstanceName\\": \\"sh-bp1oi31w1jn4ctdyv\\",\\n  \\"FunctionName\\": \\"cdn_waf\\"\\n}","type":"json"}]',
      'title' => '获取默认实例',
      'requestParamsDescription' => '### 示例
`GET /v4/openapi/app-groups/my-app/functions/pop/default-instances`',
      'responseParamsDescription' => '### 正常返回示例
```
{
    "status": "OK",
    "requestId": "",
    "httpCode": 200,
    "code": "",
    "message": "",
    "latency": 123,
    "result": {
        "instanceName": "pop_test"
    }
}
```',
    ),
    'UpdateFunctionDefaultInstance' => 
    array (
      'summary' => '为指定app设置默认使用的算法实例，自动覆盖上一次设置的默认实例
空表示取消默认实例。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/default-instance',
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
            'title' => 'body参数',
            'description' => 'body参数',
            'type' => 'object',
            'properties' => 
            array (
              'instanceName' => 
              array (
                'title' => '实例名称',
                'description' => '实例名称',
                'type' => 'string',
                'required' => false,
                'example' => '"pop_test"',
              ),
            ),
            'required' => false,
            'docRequired' => true,
            'example' => '{}',
          ),
        ),
        1 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'example' => '"app_group_name"',
          ),
        ),
        2 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'pop',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'response',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '请求状态',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'A4D487A9-A456-5AA5-A9C6-B7BF2889CF74',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'DefaultInstance.SetFail',
              ),
              'Latency' => 
              array (
                'description' => '请求耗时（单位毫秒）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"A4D487A9-A456-5AA5-A9C6-B7BF2889CF74\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"DefaultInstance.SetFail\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '设置默认实例',
    ),
    'ListFunctionTasks' => 
    array (
      'summary' => '获取训练记录。返回结果按开始时间降序排序。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}/tasks',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'example' => 'app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr',
          ),
        ),
        2 => 
        array (
          'name' => 'instanceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_model_2',
          ),
        ),
        3 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态：

- success
- failed
- running',
            'type' => 'string',
            'required' => false,
            'example' => 'success',
          ),
        ),
        4 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间大于设定时间，单位毫秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582214400',
          ),
        ),
        5 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间小于设定时间，单位毫秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1582646399',
          ),
        ),
        6 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码（默认为1）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小（默认为1）',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'TotalCount' => 
              array (
                'description' => '符合要求的总记录数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '1638157479281',
              ),
              'Message' => 
              array (
                'description' => '请求返回信息',
                'type' => 'string',
                'example' => 'fail',
              ),
              'Code' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果体',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'description' => '结束时间，单位毫秒，0表示未结束',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100010',
                    ),
                    'ExtendInfo' => 
                    array (
                      'description' => 'json string，包含模型评价信息、训练错误信息等。',
                      'type' => 'string',
                      'example' => '{\\"recall\\":91,\\"errors\\":[]}',
                    ),
                    'FunctionName' => 
                    array (
                      'description' => '功能名称',
                      'type' => 'string',
                      'example' => 'ctr',
                    ),
                    'Progress' => 
                    array (
                      'description' => '进度，90表示90%',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '90',
                    ),
                    'RunId' => 
                    array (
                      'description' => '任务ID',
                      'type' => 'string',
                      'example' => 'trigger__2021-03-05T12:18:41',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '起始时间，单位毫秒',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100010',
                    ),
                    'Status' => 
                    array (
                      'description' => '任务状态

- success
- failed
- running',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'Generation' => 
                    array (
                      'description' => '第几次迭代',
                      'type' => 'string',
                      'example' => '2',
                    ),
                  ),
                  'example' => '{             "functionName": "ctr",             "progress": 100,             "status": "success",             "startTime": 100010,             "endTime": 200020,             "extendInfo": "{\\"recall\\":91,\\"errors\\":[]}",             "runId": "trigger__2021-03-05T12:18:41"         }',
                ),
                'example' => '[         {             "functionName": "ctr",             "progress": 100,             "status": "success",             "startTime": 100010,             "endTime": 200020,             "extendInfo": "{\\"recall\\":91,\\"errors\\":[]}",             "runId": "trigger__2021-03-05T12:18:41"         }     ]',
              ),
              'Latency' => 
              array (
                'description' => '请求耗时（单位毫秒）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
            ),
            'example' => '{     "status": "OK",     "requestId": "",     "httpCode": 200,     "code": "",     "message": "",     "latency": 123,     "totalCount": 1,     "result": [         {             "functionName": "ctr",             "progress": 100,             "status": "success",             "startTime": 100010,             "endTime": 200020,             "extendInfo": "{\\"recall\\":91,\\"errors\\":[]}",             "runId": "trigger__2021-03-05T12:18:41"         }     ] }',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"200\\",\\n  \\"HttpCode\\": 200,\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"1638157479281\\",\\n  \\"Message\\": \\"fail\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Result\\": [\\n    {\\n      \\"EndTime\\": 100010,\\n      \\"ExtendInfo\\": \\"{\\\\\\\\\\\\\\"recall\\\\\\\\\\\\\\":91,\\\\\\\\\\\\\\"errors\\\\\\\\\\\\\\":[]}\\",\\n      \\"FunctionName\\": \\"ctr\\",\\n      \\"Progress\\": 90,\\n      \\"RunId\\": \\"trigger__2021-03-05T12:18:41\\",\\n      \\"StartTime\\": 100010,\\n      \\"Status\\": \\"success\\",\\n      \\"Generation\\": \\"2\\"\\n    }\\n  ],\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '获取训练记录',
      'requestParamsDescription' => '### 示例
`GET /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test/tasks`',
      'responseParamsDescription' => '### 正常返回示例
```
{
    "status": "OK",
    "requestId": "",
    "httpCode": 200,
    "code": "",
    "message": "",
    "latency": 123,
    "totalCount": 1,
    "result": [
        {
            "functionName": "ctr",
            "progress": 100,
            "status": "success",
            "startTime": 100010,
            "endTime": 200020,
            "extendInfo": "{\\"recall\\":91,\\"errors\\":[]}",
            "runId": "trigger__2021-03-05T12:18:41",
          	"generation": "3"
        }
    ]
}
```
',
    ),
    'GetFunctionTask' => 
    array (
      'summary' => '获取训练详情。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}/tasks/{generation}',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用名称',
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '功能名称',
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr',
          ),
        ),
        2 => 
        array (
          'name' => 'instanceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例名称',
            'description' => '实例名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_model_2',
          ),
        ),
        3 => 
        array (
          'name' => 'generation',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '迭代次数',
            'description' => '迭代次数',
            'type' => 'string',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '请求状态',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A4D487A9-A456-5AA5-A9C6-B7BF2889CF74',
              ),
              'Message' => 
              array (
                'description' => '返回的错误信息',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Code' => 
              array (
                'description' => '返回的错误码',
                'type' => 'string',
                'example' => 'Task.NotExist',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'EndTime' => 
                  array (
                    'description' => '任务结束时间（单位ms）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1647213406267',
                  ),
                  'ExtendInfo' => 
                  array (
                    'description' => '扩展信息（json string）',
                    'type' => 'string',
                    'example' => '{\\"recall\\":91,\\"errors\\":[]}',
                  ),
                  'FunctionName' => 
                  array (
                    'description' => '功能名称',
                    'type' => 'string',
                    'example' => 'ctr',
                  ),
                  'Generation' => 
                  array (
                    'description' => '迭代次数',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Progress' => 
                  array (
                    'description' => '进度，90表示90%',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '90',
                  ),
                  'RunId' => 
                  array (
                    'description' => '任务ID',
                    'type' => 'string',
                    'example' => 'trigger__2021-03-05T12:18:41',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '任务开始时间（单位ms）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1647212220000',
                  ),
                  'Status' => 
                  array (
                    'description' => '任务状态

- success
- failed
- running',
                    'type' => 'string',
                    'example' => 'success',
                  ),
                ),
              ),
              'Latency' => 
              array (
                'description' => '请求耗时（单位ms）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"A4D487A9-A456-5AA5-A9C6-B7BF2889CF74\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Code\\": \\"Task.NotExist\\",\\n  \\"Result\\": {\\n    \\"EndTime\\": 1647213406267,\\n    \\"ExtendInfo\\": \\"{\\\\\\\\\\\\\\"recall\\\\\\\\\\\\\\":91,\\\\\\\\\\\\\\"errors\\\\\\\\\\\\\\":[]}\\",\\n    \\"FunctionName\\": \\"ctr\\",\\n    \\"Generation\\": \\"1\\",\\n    \\"Progress\\": 90,\\n    \\"RunId\\": \\"trigger__2021-03-05T12:18:41\\",\\n    \\"StartTime\\": 1647212220000,\\n    \\"Status\\": \\"success\\"\\n  },\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '获取训练详情',
      'requestParamsDescription' => '### 示例
`GET /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test/tasks/3`',
      'responseParamsDescription' => '### 正常返回示例
```
{
    "status": "OK",
    "requestId": "",
    "httpCode": 200,
    "code": "",
    "message": "",
    "latency": 123,
    "result": {
      "functionName": "ctr",
      "progress": 100,
      "status": "success",
      "startTime": 100010,
      "endTime": 200020,
      "extendInfo": "{\\"recall\\":91,\\"errors\\":[]}",
      "runId": "trigger__2021-03-05T12:18:41",
      "generation": "3"
    }
}
```',
    ),
    'DeleteFunctionTask' => 
    array (
      'summary' => '删除训练记录。正在训练中的记录无法删除。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}/tasks/{generation}',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用名称',
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '功能名称',
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr',
          ),
        ),
        2 => 
        array (
          'name' => 'instanceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例名称',
            'description' => '实例名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr_test',
          ),
        ),
        3 => 
        array (
          'name' => 'generation',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '迭代次数',
            'description' => '迭代次数',
            'type' => 'string',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '请求状态',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP响应码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '"1081EB05-473C-5BF4-95BE-6D7CAD5E2213"',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Code' => 
              array (
                'description' => '返回的错误码（没有错误为空）',
                'type' => 'string',
                'example' => 'Task.UnableDelete',
              ),
              'Latency' => 
              array (
                'description' => 'api请求耗时（单位：毫秒）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"\\\\\\"1081EB05-473C-5BF4-95BE-6D7CAD5E2213\\\\\\"\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Code\\": \\"Task.UnableDelete\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '删除训练记录',
      'responseParamsDescription' => '### 正确返回示例
```
{
  "status": "OK",
  "requestId": "",
  "httpCode": 200,
  "code": "",
  "message": "",
  "latency": 123,
  "result": {}
}
```',
    ),
    'CreateFunctionTask' => 
    array (
      'summary' => '启动一个训练任务。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}/tasks',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'example' => 'app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr',
          ),
        ),
        2 => 
        array (
          'name' => 'instanceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr_test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '请求状态',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '1638157990724',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Task.IsRunning',
              ),
              'Latency' => 
              array (
                'description' => '请求耗时（单位ms）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
            ),
            'example' => '{   "status" : "OK",   "requestId" : "",   "httpCode": 200,   "code": "",   "message": "",   "latency" : 123,   "result" : {}, }',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"1638157990724\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Task.IsRunning\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '启动算法训练',
      'requestParamsDescription' => '### 示例
`POST /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test/task`',
      'responseParamsDescription' => '### 正常返回示例
```
{
  "status" : "OK",
  "requestId" : "",
  "httpCode": 200,
  "code": "",
  "message": "",
  "latency" : 123,
  "result" : {},
}
```',
    ),
    'ListFunctionInstances' => 
    array (
      'summary' => '获取用户下，符合条件的所有实例。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例名称',
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'example' => 'app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '功能名称',
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr',
          ),
        ),
        2 => 
        array (
          'name' => 'modelType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型类型',
            'description' => '模型类型',
            'type' => 'string',
            'required' => false,
            'example' => 'tf_checkpoint',
          ),
        ),
        3 => 
        array (
          'name' => 'functionType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '功能类型',
            'description' => '功能类型',
            'type' => 'string',
            'required' => false,
            'example' => '"PAAS"',
          ),
        ),
        4 => 
        array (
          'name' => 'source',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例来源',
            'description' => '实例来源

- builtin 系统实例
- user 用户实例 （默认）
- all 全部实例',
            'type' => 'string',
            'required' => false,
            'example' => 'user',
          ),
        ),
        5 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码，默认值为1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小',
            'description' => '每页大小，默认值为10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'output',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '返回信息的丰富度',
            'description' => '返回信息的丰富度
 - normal：显示createParameters, cron等信息（默认）
- simple：只显示基本信息
- detail：返回训练任务详细信息',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'normal',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '请求状态
',
                'type' => 'string',
                'example' => '"OK"',
              ),
              'HttpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'A4D487A9-A456-5AA5-A9C6-B7BF2889CF74',
              ),
              'Message' => 
              array (
                'description' => '错误信息，正常为空',
                'type' => 'string',
                'example' => 'instance not exist.',
              ),
              'Code' => 
              array (
                'description' => '错误码，正常为空',
                'type' => 'string',
                'example' => 'Instance.NotExist',
              ),
              'Result' => 
              array (
                'description' => '结果列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Belongs' => 
                    array (
                      'description' => '	实例归属信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Category' => 
                        array (
                          'description' => '垂类',
                          'type' => 'string',
                          'example' => '"general"',
                        ),
                        'Domain' => 
                        array (
                          'description' => '行业',
                          'type' => 'string',
                          'example' => '"ecommerce"',
                        ),
                        'Language' => 
                        array (
                          'description' => '适用的语种缩写',
                          'type' => 'string',
                          'example' => '"zh"	',
                        ),
                      ),
                      'example' => '{}',
                    ),
                    'CreateParameters' => 
                    array (
                      'description' => '实例的参数列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '参数体',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '名字',
                            'type' => 'string',
                            'example' => '"param1"',
                          ),
                          'Value' => 
                          array (
                            'description' => '值',
                            'type' => 'string',
                            'example' => '"value1"',
                          ),
                        ),
                        'example' => '{}',
                      ),
                      'example' => '[]',
                    ),
                    'UsageParameters' => 
                    array (
                      'description' => '使用参数列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '参数体',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '参数名称',
                            'type' => 'string',
                            'example' => 'use_param1',
                          ),
                          'Value' => 
                          array (
                            'description' => '参数值',
                            'type' => 'string',
                            'example' => 'value1',
                          ),
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1234',
                    ),
                    'Cron' => 
                    array (
                      'description' => '训练信息，cron语法（Minutes Hours DayofMonth Month DayofWeek），为空表示不进行周期训练',
                      'type' => 'string',
                      'example' => '0 3 ? * 0,1,3,5 (周日，周一，周三，周五凌晨3点)',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => '" "',
                    ),
                    'ExtendInfo' => 
                    array (
                      'description' => '扩展信息，json string，包含模型评价信息，错误信息等',
                      'type' => 'string',
                      'example' => '"{\\"dataReport\\":{},\\"errors\\":{}}"',
                    ),
                    'FunctionName' => 
                    array (
                      'description' => '功能名称',
                      'type' => 'string',
                      'example' => '"ctr"',
                    ),
                    'FunctionType' => 
                    array (
                      'description' => '功能类型',
                      'type' => 'string',
                      'example' => '"PAAS"',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '实例名称',
                      'type' => 'string',
                      'example' => '"ctr_test"',
                    ),
                    'ModelType' => 
                    array (
                      'description' => '模型类型',
                      'type' => 'string',
                      'example' => '"tf_checkpoint"',
                    ),
                    'Source' => 
                    array (
                      'description' => '实例来源
- user 用户实例
- builtin 内置实例',
                      'type' => 'string',
                      'example' => '"user"',
                    ),
                    'Status' => 
                    array (
                      'description' => '实例状态

1. unavailable: 暂无可用模型（需要训练）
2. available： 可用',
                      'type' => 'string',
                      'example' => 'available',
                    ),
                    'VersionId' => 
                    array (
                      'description' => '版本ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
                    ),
                  ),
                  'example' => '{}',
                ),
                'example' => '[]',
              ),
              'Latency' => 
              array (
                'description' => 'api请求耗时 （单位毫秒）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"\\\\\\"OK\\\\\\"\\",\\n  \\"HttpCode\\": 200,\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"A4D487A9-A456-5AA5-A9C6-B7BF2889CF74\\",\\n  \\"Message\\": \\"instance not exist.\\",\\n  \\"Code\\": \\"Instance.NotExist\\",\\n  \\"Result\\": [\\n    {\\n      \\"Belongs\\": {\\n        \\"Category\\": \\"\\\\\\"general\\\\\\"\\",\\n        \\"Domain\\": \\"\\\\\\"ecommerce\\\\\\"\\",\\n        \\"Language\\": \\"\\\\\\"zh\\\\\\"\\\\t\\"\\n      },\\n      \\"CreateParameters\\": [\\n        {\\n          \\"Name\\": \\"\\\\\\"param1\\\\\\"\\",\\n          \\"Value\\": \\"\\\\\\"value1\\\\\\"\\"\\n        }\\n      ],\\n      \\"UsageParameters\\": [\\n        {\\n          \\"Name\\": \\"use_param1\\",\\n          \\"Value\\": \\"value1\\"\\n        }\\n      ],\\n      \\"CreateTime\\": 1234,\\n      \\"Cron\\": \\"0 3 ? * 0,1,3,5 (周日，周一，周三，周五凌晨3点)\\",\\n      \\"Description\\": \\"\\\\\\" \\\\\\"\\",\\n      \\"ExtendInfo\\": \\"\\\\\\"{\\\\\\\\\\\\\\"dataReport\\\\\\\\\\\\\\":{},\\\\\\\\\\\\\\"errors\\\\\\\\\\\\\\":{}}\\\\\\"\\",\\n      \\"FunctionName\\": \\"\\\\\\"ctr\\\\\\"\\",\\n      \\"FunctionType\\": \\"\\\\\\"PAAS\\\\\\"\\",\\n      \\"InstanceName\\": \\"\\\\\\"ctr_test\\\\\\"\\",\\n      \\"ModelType\\": \\"\\\\\\"tf_checkpoint\\\\\\"\\",\\n      \\"Source\\": \\"\\\\\\"user\\\\\\"\\",\\n      \\"Status\\": \\"available\\",\\n      \\"VersionId\\": 123\\n    }\\n  ],\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '获取实例列表',
      'requestParamsDescription' => '### 示例
`GET /v4/openapi/app-groups/my-app/functions/ctr/instances?source=all&output=simple`',
      'responseParamsDescription' => '### 正常返回结果：
```
{
    "status": "OK",
    "requestId": "A4D487A9-A456-5AA5-A9C6-B7BF2889CF74",
    "httpCode": 200,
    "code": "",
    "message": "",
    "latency": 123,
    "totalCount": 2,
    "result": [
        {
            "versionId": 100,
            "instanceName": "instance_1",
            "functionName": "hot",
            "functionType": "PAAS",
            "modelType": "offline_inference",
            "description": "",
            "status": "available",
            "belongs": {
                "domain": "ecommerce",
                "category": "general",
                "language": "zh"
            },
            "createTime": 100010,
            "source": "user"
        },
        {
            "versionId": 100,
            "instanceName": "instance_2",
            "functionName": "hot",
            "functionType": "PAAS",
            "modelType": "offline_inference",
            "description": "",
            "status": "available",
            "belongs": {
                "domain": "ecommerce",
                "category": "general",
                "language": "zh"
            },
            "createTime": 200020,
            "source": "user",
            "default": true
        }
    ]
}
```',
    ),
    'GetFunctionInstance' => 
    array (
      'summary' => '根据实例名称获取实例详情。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'example' => '150057101',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr',
          ),
        ),
        2 => 
        array (
          'name' => 'instanceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr_test',
          ),
        ),
        3 => 
        array (
          'name' => 'output',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '控制返回信息的丰富度：

- simple：只显示基本信息
- normal：显示createParameters, cron等信息（默认）
- detail: 返回训练任务信息',
            'type' => 'string',
            'required' => false,
            'example' => 'detail',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '请求状态',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '68ED4E1B-92B8-5821-A886-9C90686139EB',
              ),
              'Message' => 
              array (
                'description' => '返回的错误信息',
                'type' => 'string',
                'example' => 'instance not exist.',
              ),
              'Code' => 
              array (
                'description' => '返回的错误码（没有错误为空）',
                'type' => 'string',
                'example' => 'Instance.NotExist',
              ),
              'Result' => 
              array (
                'description' => '实例详情',
                'type' => 'object',
                'properties' => 
                array (
                  'Belongs' => 
                  array (
                    'description' => '所属信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Category' => 
                      array (
                        'description' => '垂类',
                        'type' => 'string',
                        'example' => 'general',
                      ),
                      'Domain' => 
                      array (
                        'description' => '行业',
                        'type' => 'string',
                        'example' => 'ecommerce',
                      ),
                      'Language' => 
                      array (
                        'description' => '适用的语种缩写',
                        'type' => 'string',
                        'example' => 'zh（默认）',
                      ),
                    ),
                  ),
                  'CreateParameters' => 
                  array (
                    'description' => '创建参数列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '参数体',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '参数名称',
                          'type' => 'string',
                          'example' => 'param1',
                        ),
                        'Value' => 
                        array (
                          'description' => '参数值',
                          'type' => 'string',
                          'example' => 'value1',
                        ),
                      ),
                    ),
                  ),
                  'UsageParameters' => 
                  array (
                    'description' => '使用参数列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '参数体',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '参数名称',
                          'type' => 'string',
                          'example' => 'use_param1',
                        ),
                        'Value' => 
                        array (
                          'description' => '参数值',
                          'type' => 'string',
                          'example' => 'value1',
                        ),
                      ),
                    ),
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间 （单位毫秒）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1234',
                  ),
                  'Cron' => 
                  array (
                    'description' => '训练信息，cron语法（Minutes Hours DayofMonth Month DayofWeek），为空表示不进行周期训练',
                    'type' => 'string',
                    'example' => '0 3 ? * 0,1,3,5 (周日，周一，周三，周五凌晨3点)',
                  ),
                  'Description' => 
                  array (
                    'description' => '实例描述',
                    'type' => 'string',
                    'example' => 'instance descriptions',
                  ),
                  'ExtendInfo' => 
                  array (
                    'description' => '扩展信息（json string）',
                    'type' => 'string',
                    'example' => '{\\"dataReport\\":{},\\"errors\\":{}}',
                  ),
                  'FunctionName' => 
                  array (
                    'description' => '功能名称',
                    'type' => 'string',
                    'example' => 'ctr',
                  ),
                  'FunctionType' => 
                  array (
                    'description' => '功能类型',
                    'type' => 'string',
                    'example' => 'PAAS',
                  ),
                  'InstanceName' => 
                  array (
                    'description' => '实例名称',
                    'type' => 'string',
                    'example' => 'ctr_test',
                  ),
                  'ModelType' => 
                  array (
                    'description' => '模型类型',
                    'type' => 'string',
                    'example' => 'tf_checkpoint',
                  ),
                  'Source' => 
                  array (
                    'description' => '实例来源

- user 用户实例
- builtin 内置实例',
                    'type' => 'string',
                    'example' => 'user',
                  ),
                  'Status' => 
                  array (
                    'description' => '实例状态

1. unavailable: 暂无可用模型（需要训练）
2. available： 可用',
                    'type' => 'string',
                    'example' => 'available',
                  ),
                  'Task' => 
                  array (
                    'description' => '训练任务信息（没有任务则不显示）',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DagStatus' => 
                      array (
                        'description' => '任务状态

- "success"：成功
- "failed"：失败
- "untrained": 待训练
- "pending": 调度中
- "running"：训练中',
                        'type' => 'string',
                        'example' => 'success',
                      ),
                      'LastRunTime' => 
                      array (
                        'description' => '上一次运行时间，单位：毫秒',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1234',
                      ),
                    ),
                  ),
                  'VersionId' => 
                  array (
                    'description' => '版本id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '101',
                  ),
                ),
                'example' => '{}',
              ),
              'Latency' => 
              array (
                'description' => 'api请求耗时（单位：毫秒）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
            ),
            'example' => '{}',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"68ED4E1B-92B8-5821-A886-9C90686139EB\\",\\n  \\"Message\\": \\"instance not exist.\\",\\n  \\"Code\\": \\"Instance.NotExist\\",\\n  \\"Result\\": {\\n    \\"Belongs\\": {\\n      \\"Category\\": \\"general\\",\\n      \\"Domain\\": \\"ecommerce\\",\\n      \\"Language\\": \\"zh（默认）\\"\\n    },\\n    \\"CreateParameters\\": [\\n      {\\n        \\"Name\\": \\"param1\\",\\n        \\"Value\\": \\"value1\\"\\n      }\\n    ],\\n    \\"UsageParameters\\": [\\n      {\\n        \\"Name\\": \\"use_param1\\",\\n        \\"Value\\": \\"value1\\"\\n      }\\n    ],\\n    \\"CreateTime\\": 1234,\\n    \\"Cron\\": \\"0 3 ? * 0,1,3,5 (周日，周一，周三，周五凌晨3点)\\",\\n    \\"Description\\": \\"instance descriptions\\",\\n    \\"ExtendInfo\\": \\"{\\\\\\\\\\\\\\"dataReport\\\\\\\\\\\\\\":{},\\\\\\\\\\\\\\"errors\\\\\\\\\\\\\\":{}}\\",\\n    \\"FunctionName\\": \\"ctr\\",\\n    \\"FunctionType\\": \\"PAAS\\",\\n    \\"InstanceName\\": \\"ctr_test\\",\\n    \\"ModelType\\": \\"tf_checkpoint\\",\\n    \\"Source\\": \\"user\\",\\n    \\"Status\\": \\"available\\",\\n    \\"Task\\": {\\n      \\"DagStatus\\": \\"success\\",\\n      \\"LastRunTime\\": 1234\\n    },\\n    \\"VersionId\\": 101\\n  },\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '获取实例详情',
      'requestParamsDescription' => '### 示例
`GET /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test?output=detail`',
      'responseParamsDescription' => '### 正常返回示例：
```
{
    "status": "OK",
    "requestId": "",
    "httpCode": 200,
    "code": "",
    "message": "",
    "latency": 123,
    "result": {
        "versionId": 100,
        "instanceName": "ctr_test",
        "functionName": "ctr",
        "functionType": "PAAS",
        "modelType": "tf_checkpoint",
        "description": "测试",
        "status": "available",
        "belongs": {
            "domain": "ecommerce",
            "category": "general",
            "language": "zh"
        },
        "createTime": 100010,
        "createParameters": [
            {
                "name": "param1",
                "value": "val1"
            }
        ],
        "usageParameters": [
            {
                "name": "use_param1",
                "value": "val1"
            }
        ],
        "extendInfo": "{\\"error\\":{},\\"dataReport\\":{}}",
        "cron": "",
        "task": {
            "dagStatus": "running",
            "progress": 30,
            "lastRunTime": 200020
        }
    }
}
```',
    ),
    'DeleteFunctionInstance' => 
    array (
      'summary' => '删除算法实例，删除前请确保该实例不在使用中，以免影响在线服务。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'opensearch应用名',
            'description' => 'opensearch应用名',
            'type' => 'string',
            'required' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '功能名称',
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => '"ctr"',
          ),
        ),
        2 => 
        array (
          'name' => 'instanceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例名称',
            'description' => '实例名称',
            'type' => 'string',
            'required' => true,
            'example' => '"ctr_test"',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回对象',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '状态码

- OK 成功
- FAIL 失败',
                'type' => 'string',
                'example' => '"OK"',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP响应码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '"1081EB05-473C-5BF4-95BE-6D7CAD5E2213"',
              ),
              'Message' => 
              array (
                'description' => '错误信息，正常情况为空',
                'type' => 'string',
                'example' => '"instance not exist."',
              ),
              'Code' => 
              array (
                'description' => '错误码，正常情况为空',
                'type' => 'string',
                'example' => '"Instance.NotExist"',
              ),
              'Latency' => 
              array (
                'description' => '请求耗时，单位ms',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
            ),
            'example' => '{}',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"\\\\\\"OK\\\\\\"\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"\\\\\\"1081EB05-473C-5BF4-95BE-6D7CAD5E2213\\\\\\"\\",\\n  \\"Message\\": \\"\\\\\\"instance not exist.\\\\\\"\\",\\n  \\"Code\\": \\"\\\\\\"Instance.NotExist\\\\\\"\\",\\n  \\"Latency\\": 10\\n}","type":"json"}]',
      'title' => '删除算法实例',
      'requestParamsDescription' => '### 示例
`DELETE /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test`',
    ),
    'UpdateFunctionInstance' => 
    array (
      'summary' => '根据实例名称更新实例信息。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances/{instanceName}',
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
            'title' => 'body参数',
            'description' => 'body参数',
            'type' => 'object',
            'properties' => 
            array (
              'cron' => 
              array (
                'title' => '周期训练',
                'description' => '周期训练信息，cron语法（Minutes Hours DayofMonth Month DayofWeek），为空表示不进行周期训练（默认），其中DayofWeek为0表示星期日',
                'type' => 'string',
                'required' => false,
                'example' => '"0 3 ? * 0,1,3,5"',
              ),
              'createParameters' => 
              array (
                'title' => '创建参数',
                'description' => '创建参数列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '参数体',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '参数名称',
                      'description' => '参数名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'title_field',
                    ),
                    'value' => 
                    array (
                      'title' => '参数值',
                      'description' => '参数值',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'title',
                    ),
                  ),
                  'required' => false,
                  'example' => '{}',
                ),
                'required' => false,
                'example' => '{             "name": "title_field",             "value": "title"         }',
              ),
              'usageParameters' => 
              array (
                'title' => '使用参数',
                'description' => '使用参数列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '参数体',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'description' => '参数名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'allow_dict_id',
                    ),
                    'value' => 
                    array (
                      'description' => '参数值',
                      'type' => 'string',
                      'required' => false,
                      'example' => '123',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'description' => 
              array (
                'title' => '实例描述',
                'description' => '实例描述',
                'type' => 'string',
                'required' => false,
                'example' => '测试实例',
              ),
            ),
            'required' => false,
            'example' => '{}',
          ),
        ),
        1 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'opensearch应用名',
            'description' => 'opensearch应用名',
            'type' => 'string',
            'required' => true,
            'example' => '"app_group_name"',
          ),
        ),
        2 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '功能名称',
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => '"ctr"',
          ),
        ),
        3 => 
        array (
          'name' => 'instanceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例名称',
            'description' => '实例名称',
            'type' => 'string',
            'required' => true,
            'example' => '"ctr_test"',
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
              'Status' => 
              array (
                'description' => '请求状态

-     OK 成功
-     FAIL 失败
',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '"3A809095-C554-5CF5-8FCE-BE19D4673790"',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => '"instance not exist."',
              ),
              'Code' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'string',
                'example' => '"Instance.NotExist"',
              ),
              'Latency' => 
              array (
                'title' => '耗时',
                'description' => '请求耗时（单位ms）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
            ),
            'example' => '{}',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"\\\\\\"3A809095-C554-5CF5-8FCE-BE19D4673790\\\\\\"\\",\\n  \\"Message\\": \\"\\\\\\"instance not exist.\\\\\\"\\",\\n  \\"Code\\": \\"\\\\\\"Instance.NotExist\\\\\\"\\",\\n  \\"Latency\\": 10\\n}","type":"json"}]',
      'title' => '更新算法实例',
      'requestParamsDescription' => '### 示例（只更新createParameters和cron）
`PUT /v4/openapi/app-groups/my-app/functions/ctr/instances/ctr_test`

```
{
    "createParameters": [
        {
            "name": "param1",
            "value": "new value"
        }
    ],
    "cron": ""
}
```',
    ),
    'CreateFunctionInstance' => 
    array (
      'summary' => '创建指定功能的一个算法实例。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/instances',
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
            'title' => 'body参数',
            'description' => 'body参数',
            'type' => 'object',
            'properties' => 
            array (
              'instanceName' => 
              array (
                'title' => '实例名称',
                'description' => '实例名称，度为1-30个字符，以字母开头，可以包含大小写字母、数字和下划线',
                'type' => 'string',
                'required' => true,
                'example' => 'ctr_test',
              ),
              'modelType' => 
              array (
                'title' => '模型类型',
                'description' => '模型类型，不同功能对应的模型类型如下：

- CTR模型：tf_checkpoint
- 人气模型：pop
- 类目模型：offline_inference
- 热词模型：offline_inference
- 底纹模型：offline_inference
- 热词模型（实时热搜）：near_realtime
-  底纹模型（个性化底纹）：near_realtime
- 下拉提示模型：offline_inference
- 分词模型：text
- 词权重模型：tf_checkpoint
- 同义词模型：offline_inference',
                'type' => 'string',
                'required' => true,
                'example' => 'tf_checkpoint',
              ),
              'functionType' => 
              array (
                'title' => '功能类型',
                'description' => '功能类型：

- PAAS：（默认）需要训练后才能使用',
                'type' => 'string',
                'required' => false,
                'example' => 'PAAS',
              ),
              'description' => 
              array (
                'title' => '实例描述',
                'description' => '描述信息',
                'type' => 'string',
                'required' => false,
                'example' => '测试实例',
              ),
              'createParameters' => 
              array (
                'title' => '创建参数',
                'description' => '创建参数列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '创建参数体',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '参数名称',
                      'description' => '参数名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'title_field',
                    ),
                    'value' => 
                    array (
                      'title' => '参数值',
                      'description' => '参数值',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'title',
                    ),
                  ),
                  'required' => false,
                  'example' => '{             "name": "title_field",             "value": "title"         }',
                ),
                'required' => false,
                'example' => '[   { "name": "param1", "value": "val1"   } ]',
              ),
              'usageParameters' => 
              array (
                'title' => '使用参数',
                'description' => '使用参数',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '在线使用的参数列表，如黑白名单',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '参数名称',
                      'description' => '参数名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'allow_dict_id',
                    ),
                    'value' => 
                    array (
                      'title' => '参数值',
                      'description' => '参数值',
                      'type' => 'string',
                      'required' => false,
                      'example' => '123',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'cron' => 
              array (
                'title' => '周期训练',
                'description' => '周期训练信息，cron语法（Minutes Hours DayofMonth Month DayofWeek），为空表示不进行周期训练（默认），其中DayofWeek 0表示星期日',
                'type' => 'string',
                'required' => false,
                'example' => '0 0 ? * 0,1,2,3,4,5,6',
              ),
            ),
            'required' => false,
            'docRequired' => true,
            'example' => '{     "instanceName": "ctr_test",     "modelType": "tf_checkpoint",     "createParameters": [         {             "name": "title_field",             "value": "title"         },         {             "name": "description_field",             "value": ""         },         {             "name": "tags_field",             "value": ""         },         {             "name": "id_field",             "value": "item_id"         },         {             "name": "category_field",             "value": "cate"         }     ],     "description": "测试实例", }',
          ),
        ),
        1 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        2 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '功能名称，支持的模型有：

- CTR模型：ctr
- 人气模型：pop
- 类目模型：category
- 热词模型：hot
- 底纹模型：hint
- 下拉提示模型：suggest
- 分词模型：analyzer
- 词权重模型：termweight
- 同义词模型：synonym',
            'type' => 'string',
            'required' => true,
            'example' => 'ctr',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'body参数

',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '98724351-D6B2-5D8A-B089-7FFD1821A7E9',
              ),
              'Message' => 
              array (
                'description' => '错误信息，正常时为空',
                'type' => 'string',
                'example' => 'version not exist.',
              ),
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Version.NotExist',
              ),
              'Latency' => 
              array (
                'description' => '请求耗时，单位ms',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123',
              ),
            ),
            'example' => '{   "status" : "OK",   "requestId" : "",   "httpCode": 200,   "code": "",   "message": "",   "latency" : 123,   "result" : {   } }',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"98724351-D6B2-5D8A-B089-7FFD1821A7E9\\",\\n  \\"Message\\": \\"version not exist.\\",\\n  \\"Code\\": \\"Version.NotExist\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '创建算法实例',
      'description' => '一般先通过[GetFunctionCurrentVersion](~~421377~~)接口获取当前功能使用的最新版本，版本中描述了创建实例所需的参数列表createParameters、usageParameters，以及参数填写要求。',
      'requestParamsDescription' => '### 示例（ctr）
```
POST /v4/openapi/app-groups/my-app/functions/ctr/instances
{
    "instanceName": "my_ctr",
    "modelType": "tf_checkpoint",
    "functionType": "PAAS",
    "cron": "0 0 ? * 0,1,3,5",
    "description": "",
    "createParameters": [
        {
            "name": "id_field",
            "value": "id"
        },
        {
            "name": "title_field",
            "value": "title"
        }
    ],
    "usageParameters": []
}
```
### 示例（hot）
```
POST /v4/openapi/app-groups/my-app/functions/hot/instances
{
    "instanceName":"my_hot",
    "modelType":"offline_inference",
    "functionType":"PAAS",
    "createParameters":[
        {
            "name":"filter",
            "value":"biz_type != 1"
        }
    ],
    "usageParameters": [
        {
            "name":"allow_dict_id",
            "value":"123"
        },
        {
            "name":"deny_dict_id",
            "value":"456"
        }
    ],
    "cron":"12 4 ? * 1,2,3,4,5,6,0"
}
```',
      'responseParamsDescription' => '### 正常返回示例：
```
{
  "status" : "OK",
  "requestId" : "98724351-D6B2-5D8A-B089-7FFD1821A7E9",
  "httpCode": 200,
  "code": "",
  "message": "",
  "latency" : 123,
  "result" : {}
}
```',
    ),
    'DescribeAppGroup' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'description' => '应用信息',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1575442875',
                  ),
                  'currentVersion' => 
                  array (
                    'description' => '当前在线版本',
                    'type' => 'string',
                    'example' => '110116134',
                  ),
                  'pendingSecondRankAlgoDeploymentId' => 
                  array (
                    'description' => '部署中的精排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'lockMode' => 
                  array (
                    'description' => '锁定状态
- Unlock 正常
- LockByExpiration 实例过期自动锁定
- ManualLock 手动触发锁定',
                    'type' => 'string',
                    'example' => 'Unlock',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1578916076',
                  ),
                  'id' => 
                  array (
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => '110116134',
                  ),
                  'chargeType' => 
                  array (
                    'description' => '付费类型
- POSTPAY 后付费（按量付费）
- PREPAY 预付费（包年包月',
                    'type' => 'string',
                    'example' => 'POSTPAY',
                  ),
                  'hasPendingQuotaReviewTask' => 
                  array (
                    'description' => '是否配额审批中
- 0：正常
- 1：配额审批中',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'secondRankAlgoDeploymentId' => 
                  array (
                    'description' => '精排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'name' => 
                  array (
                    'description' => '应用名称',
                    'type' => 'string',
                    'example' => 'os_function_test_v1',
                  ),
                  'instanceId' => 
                  array (
                    'description' => '实例ID',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'processingOrderId' => 
                  array (
                    'description' => '未结束订单号',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'chargingWay' => 
                  array (
                    'description' => '计费类型
- 1：计算资源
- 2：qps',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'type' => 
                  array (
                    'description' => '应用类型
- standard 标准版
- advance 老高级版（新应用不支持此类型）
- enhanced 新高级版',
                    'type' => 'string',
                    'example' => 'enhanced',
                  ),
                  'status' => 
                  array (
                    'description' => '应用状态
- producing 生产中
- review_pending 生产审批中
- config_pending 待配置
- normal 正常
- frozen 已冻结',
                    'type' => 'string',
                    'example' => 'normal',
                  ),
                  'projectId' => 
                  array (
                    'description' => 'abtest project 名称',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'switchedTime' => 
                  array (
                    'description' => '在线版本切换时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'commodityCode' => 
                  array (
                    'description' => '商品CODE',
                    'type' => 'string',
                    'example' => 'opensearch',
                  ),
                  'expireOn' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'domain' => 
                  array (
                    'description' => '应用所属行业',
                    'type' => 'string',
                    'example' => 'ecommerce',
                  ),
                  'description' => 
                  array (
                    'description' => '应用描述',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'firstRankAlgoDeploymentId' => 
                  array (
                    'description' => '粗排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'produced' => 
                  array (
                    'description' => '是否生产完成
- 0：生产中
- 1：生产完成',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'lockedByExpiration' => 
                  array (
                    'description' => '实例过期自动锁定',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'quota' => 
                  array (
                    'description' => '应用配额信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'spec' => 
                      array (
                        'description' => '规格
- opensearch.share.junior 入门型
- opensearch.share.common 共享通用型
- opensearch.share.compute 共享计算型
- opensearch.share.storage 共享存储型
- opensearch.private.common 独享通用型
- opensearch.private.compute 独享计算型
- opensearch.private.storage 独享存储型',
                        'type' => 'string',
                        'example' => 'opensearch.share.common',
                      ),
                      'docSize' => 
                      array (
                        'description' => '存储容量（单位：GB）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'computeResource' => 
                      array (
                        'description' => '计算资源（单位：LCU）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '20',
                      ),
                    ),
                  ),
                  'tags' => 
                  array (
                    'description' => '应用标签',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据源标签。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'description' => '标签键',
                          'type' => 'string',
                          'example' => 'foo',
                        ),
                        'value' => 
                        array (
                          'description' => '标签值',
                          'type' => 'string',
                          'example' => 'bar',
                        ),
                      ),
                    ),
                  ),
                  'resourceGroupId' => 
                  array (
                    'description' => '实例所属的资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-acfmoiyerh6nzly',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": {\\n    \\"created\\": 1575442875,\\n    \\"currentVersion\\": \\"110116134\\",\\n    \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"updated\\": 1578916076,\\n    \\"id\\": \\"110116134\\",\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"hasPendingQuotaReviewTask\\": 0,\\n    \\"secondRankAlgoDeploymentId\\": 0,\\n    \\"name\\": \\"os_function_test_v1\\",\\n    \\"instanceId\\": \\"-\\",\\n    \\"processingOrderId\\": \\"-\\",\\n    \\"chargingWay\\": 1,\\n    \\"type\\": \\"enhanced\\",\\n    \\"status\\": \\"normal\\",\\n    \\"projectId\\": \\"-\\",\\n    \\"switchedTime\\": 0,\\n    \\"commodityCode\\": \\"opensearch\\",\\n    \\"expireOn\\": \\"-\\",\\n    \\"domain\\": \\"ecommerce\\",\\n    \\"description\\": \\"-\\",\\n    \\"firstRankAlgoDeploymentId\\": 0,\\n    \\"produced\\": 1,\\n    \\"lockedByExpiration\\": 0,\\n    \\"quota\\": {\\n      \\"spec\\": \\"opensearch.share.common\\",\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    },\\n    \\"tags\\": [\\n      {\\n        \\"key\\": \\"foo\\",\\n        \\"value\\": \\"bar\\"\\n      }\\n    ],\\n    \\"resourceGroupId\\": \\"rg-acfmoiyerh6nzly\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>\\n    <id>110116134</id>\\n    <name>os_function_test_v1</name>\\n    <currentVersion>110116134</currentVersion>\\n    <switchedTime>0</switchedTime>\\n    <quota>\\n        <docSize>1</docSize>\\n        <computeResource>20</computeResource>\\n        <spec>opensearch.share.common</spec>\\n    </quota>\\n    <chargingWay>1</chargingWay>\\n    <type>enhanced</type>\\n    <versions>100298792</versions>\\n    <projectId/>\\n    <chargeType>POSTPAY</chargeType>\\n    <expireOn/>\\n    <instanceId/>\\n    <commodityCode>opensearch</commodityCode>\\n    <processingOrderId/>\\n    <firstRankAlgoDeploymentId>0</firstRankAlgoDeploymentId>\\n    <secondRankAlgoDeploymentId>0</secondRankAlgoDeploymentId>\\n    <pendingSecondRankAlgoDeploymentId>0</pendingSecondRankAlgoDeploymentId>\\n    <description/>\\n    <produced>1</produced>\\n    <lockedByExpiration>0</lockedByExpiration>\\n    <hasPendingQuotaReviewTask>0</hasPendingQuotaReviewTask>\\n    <created>1575442875</created>\\n    <updated>1578916076</updated>\\n    <status>normal</status>\\n    <lockMode>Unlock</lockMode>\\n</result>","errorExample":""}]',
      'title' => '查看应用实例详情',
      'summary' => '查看一个 OpenSearch 应用详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ValidateDataSources' => 
    array (
      'summary' => '验证数据源。',
      'path' => '/v4/openapi/assist/data-sources/validations',
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
          'schema' => 
          array (
            'description' => '请求参数，参考：[DataSource](~~170005~~)',
            'required' => false,
            '$ref' => '#/components/schemas/DataSource',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8FA2B338-AFDC-46B4-A132-B5487820C2BF',
              ),
              'result' => 
              array (
                'description' => '请求结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果体',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'code' => 
                    array (
                      'description' => '状态码',
                      'type' => 'string',
                      'example' => 'SUCCEED',
                    ),
                    'message' => 
                    array (
                      'description' => '响应信息',
                      'type' => 'string',
                      'example' => '校验成功',
                    ),
                    'dataSource' => 
                    array (
                      'description' => '数据源',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'tableName' => 
                        array (
                          'description' => '表名',
                          'type' => 'string',
                          'example' => 'user_activity_decision',
                        ),
                        'type' => 
                        array (
                          'description' => '数据源类型',
                          'type' => 'string',
                          'example' => 'rds',
                        ),
                        'parameters' => 
                        array (
                          'description' => '参数体',
                          'type' => 'object',
                          'example' => '{}',
                        ),
                      ),
                      'example' => '{}',
                    ),
                  ),
                  'example' => '{}',
                ),
                'example' => '[]',
              ),
            ),
            'example' => '{}',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"8FA2B338-AFDC-46B4-A132-B5487820C2BF\\",\\n  \\"result\\": [\\n    {\\n      \\"code\\": \\"SUCCEED\\",\\n      \\"message\\": \\"校验成功\\",\\n      \\"dataSource\\": {\\n        \\"tableName\\": \\"user_activity_decision\\",\\n        \\"type\\": \\"rds\\",\\n        \\"parameters\\": {}\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '验证数据源',
    ),
    'ReplaceAppGroupCommodityCode' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/actions/to-instance-typed',
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
        'operationType' => 'none',
        'abilityTreeCode' => '55260',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch3UFA61',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'AC5F78BA-66B9-545B-9CF1-8F542E682E1F',
              ),
              'result' => 
              array (
                'description' => '返回详情结果

',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1588054131',
                  ),
                  'currentVersion' => 
                  array (
                    'description' => '当前在线版本',
                    'type' => 'string',
                    'example' => '100302903',
                  ),
                  'pendingSecondRankAlgoDeploymentId' => 
                  array (
                    'description' => '部署中的精排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'type' => 
                  array (
                    'description' => '类型',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'chargingWay' => 
                  array (
                    'description' => '计费类型
 - 1: 计算资源
 - 2：qps',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'lockMode' => 
                  array (
                    'description' => '锁定状态

- Unlock 正常
- LockByExpiration 实例过期自动锁定
- ManualLock 手动触发锁定',
                    'type' => 'string',
                    'example' => 'Unlock',
                  ),
                  'status' => 
                  array (
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'normal',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1581065904',
                  ),
                  'chargeType' => 
                  array (
                    'description' => '付费类型
- POSTPAY 后付费（按量付费）
- PREPAY 预付费（包年包月）',
                    'type' => 'string',
                    'example' => 'POSTPAY',
                  ),
                  'id' => 
                  array (
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'hasPendingQuotaReviewTask' => 
                  array (
                    'description' => '是否配额审批中
- 0：正常
- 1：配额审批中',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'projectId' => 
                  array (
                    'description' => 'abtest project 名称',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'secondRankAlgoDeploymentId' => 
                  array (
                    'description' => '精排部署ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'commodityCode' => 
                  array (
                    'description' => '商品CODE',
                    'type' => 'string',
                    'example' => 'opensearch',
                  ),
                  'switchedTime' => 
                  array (
                    'description' => '在线版本切换时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1590486386',
                  ),
                  'expireOn' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'description' => 
                  array (
                    'description' => '描述',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'firstRankAlgoDeploymentId' => 
                  array (
                    'description' => '粗排部署id',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'lockedByExpiration' => 
                  array (
                    'description' => '实例是否过期自动锁定
- 0：否
- 1：是',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'produced' => 
                  array (
                    'description' => '是否生产',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'name' => 
                  array (
                    'description' => '名称',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'processingOrderId' => 
                  array (
                    'description' => '处理中的',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'instanceId' => 
                  array (
                    'description' => '请求的实例id',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'versions' => 
                  array (
                    'description' => '版本信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '版本信息',
                      'type' => 'string',
                      'example' => '-',
                    ),
                  ),
                  'quota' => 
                  array (
                    'description' => '配置信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'spec' => 
                      array (
                        'description' => '配置型号',
                        'type' => 'string',
                        'example' => '-',
                      ),
                      'docSize' => 
                      array (
                        'description' => '适用于定制应用',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'computeResource' => 
                      array (
                        'description' => '配置数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '20',
                      ),
                    ),
                  ),
                ),
                'example' => '{}',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"AC5F78BA-66B9-545B-9CF1-8F542E682E1F\\",\\n  \\"result\\": {\\n    \\"created\\": 1588054131,\\n    \\"currentVersion\\": \\"100302903\\",\\n    \\"pendingSecondRankAlgoDeploymentId\\": 0,\\n    \\"type\\": \\"-\\",\\n    \\"chargingWay\\": 1,\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"status\\": \\"normal\\",\\n    \\"updated\\": 1581065904,\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"id\\": \\"-\\",\\n    \\"hasPendingQuotaReviewTask\\": 0,\\n    \\"projectId\\": \\"-\\",\\n    \\"secondRankAlgoDeploymentId\\": 0,\\n    \\"commodityCode\\": \\"opensearch\\",\\n    \\"switchedTime\\": 1590486386,\\n    \\"expireOn\\": \\"-\\",\\n    \\"description\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"firstRankAlgoDeploymentId\\": 0,\\n    \\"lockedByExpiration\\": 0,\\n    \\"produced\\": 0,\\n    \\"name\\": \\"-\\",\\n    \\"processingOrderId\\": \\"-\\",\\n    \\"instanceId\\": \\"-\\",\\n    \\"versions\\": [\\n      \\"-\\"\\n    ],\\n    \\"quota\\": {\\n      \\"spec\\": \\"-\\",\\n      \\"docSize\\": 1,\\n      \\"computeResource\\": 20\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '应用服务型转实例型',
      'summary' => '应用服务型转实例型。',
    ),
    'ListSortScripts' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/apps/{appVersionId}/sort-scripts',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app',
          ),
        ),
        1 => 
        array (
          'name' => 'appVersionId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用下的版本id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '110142366',
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
              'requestId' => 
              array (
                'description' => '唯一标识一次请求',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
              'result' => 
              array (
                'description' => '脚本列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'type' => 
                    array (
                      'description' => '脚本的类型',
                      'type' => 'string',
                      'example' => 'cava_script',
                    ),
                    'scope' => 
                    array (
                      'description' => '脚本的作用范围',
                      'type' => 'string',
                      'example' => 'second_rank',
                    ),
                    'createTime' => 
                    array (
                      'description' => '脚本创建时间',
                      'type' => 'string',
                      'example' => '2020-04-02 20:21:14',
                    ),
                    'status' => 
                    array (
                      'description' => '脚本的状态：

- configurable：脚本创建成功，还未上传文件
- not compiled：脚本未编译
- compile failed：脚本编译失败
- compile successful：脚本编译成功
- released：脚本已发布',
                      'type' => 'string',
                      'example' => 'released',
                    ),
                    'modifyTime' => 
                    array (
                      'description' => '脚本最后一次修改时间',
                      'type' => 'string',
                      'example' => '2020-04-02 21:21:14',
                    ),
                    'scriptName' => 
                    array (
                      'description' => '脚本名称',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": [\\n    {\\n      \\"type\\": \\"cava_script\\",\\n      \\"scope\\": \\"second_rank\\",\\n      \\"createTime\\": \\"2020-04-02 20:21:14\\",\\n      \\"status\\": \\"released\\",\\n      \\"modifyTime\\": \\"2020-04-02 21:21:14\\",\\n      \\"scriptName\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>ABCDEFGH</requestId>\\n<result>\\n    <type>cava_script</type>\\n    <scope>second_rank</scope>\\n    <status>released</status>\\n    <createTime>2020-04-02 20:21:14</createTime>\\n    <modifyTime>2020-04-02 21:21:14</modifyTime>\\n</result>","errorExample":""}]',
      'title' => '获取指定版本下所有的排序脚本',
      'summary' => '获取指定版本下所有的排序脚本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ```
错误返回
{
    "requestId" : "ABCDEFGH",
        "code":"InvalidAppSpec",
    "message":"The cava scripts only support the private spec app.",
    "httpCode":400
}
```',
      'extraInfo' => ' ',
    ),
    'ListDataSourceTables' => 
    array (
      'path' => '/v4/openapi/assist/data-sources/{dataSourceType}/tables',
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
          'name' => 'dataSourceType',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源类型

- rds
- polardb
- odps
- mysql
- drds',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rds',
          ),
        ),
        1 => 
        array (
          'name' => 'params',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源参数。json字符串，需要urlencode编码。

各数据源参数不同，参考：

- [rds](~~170005~~)
- [polardb](~~170005~~)
- [odps](~~170005~~)
- [mysql](~~173627~~)
- [drds](~~173627~~)',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '-',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
              'result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据源表集合',
                  'type' => 'string',
                  'example' => '{}',
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\",\\n  \\"result\\": [\\n    \\"{}\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>0A6EB64B-B4C8-CF02-810F-E660812972FF</requestId>\\n<result>cate_test</result>\\n<result>offline_error</result>\\n<result>plugin</result>\\n<result>quota_test</result>\\n<result>smoke</result>\\n<result>smoke_1</result>\\n<result>smoke_2</result>\\n<result>students</result>","errorExample":""}]',
      'title' => '获取指定实例的数据源列表',
      'summary' => '获取指定数据源的所有数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDataSourceTableFields' => 
    array (
      'path' => '/v4/openapi/assist/data-sources/{dataSourceType}/fields',
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
          'name' => 'dataSourceType',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源类型

- rds
- polardb
- odps
- mysql
- drds',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'rds' => 'rds',
              'mysql' => 'mysql',
              'odps' => 'odps',
              'saro' => 'saro',
              'polardb' => 'polardb',
            ),
            'example' => 'rds',
          ),
        ),
        1 => 
        array (
          'name' => 'params',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源参数。json字符串，需要urlencode编码。

各数据源参数不同，参考：

- [rds](~~170005~~)
- [polardb](~~170005~~)
- [odps](~~170005~~)
- [mysql](~~173627~~)
- [drds](~~173627~~)',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{}',
          ),
        ),
        2 => 
        array (
          'name' => 'rawType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回数据源原始字段类型',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '数据源表集合',
                'type' => 'object',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '唯一标识一次请求',
                'type' => 'string',
                'example' => '0A6EB64B-B4C8-CF02-810F-E660812972FF',
              ),
            ),
            'example' => '{}',
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {},\\n  \\"requestId\\": \\"0A6EB64B-B4C8-CF02-810F-E660812972FF\\"\\n}","type":"json"}]',
      'title' => '获取指定数据表的所有字段',
      'summary' => '获取指定数据表的所有字段，为内部接口。',
    ),
    'GetDomain' => 
    array (
      'path' => '/v4/openapi/domains/{domainName}',
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
          'name' => 'domainName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '行业类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ecommerce',
          ),
        ),
        1 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用的名称或者是应用id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
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
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'example' => '-',
              ),
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '271D5762-32B7-5F0D-B97D-463EB67F1F3B',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"requestId\\": \\"271D5762-32B7-5F0D-B97D-463EB67F1F3B\\"\\n}","type":"json"}]',
      'title' => '获取行业类型	',
      'summary' => '获取行业类型。',
    ),
    'GenerateMergedTable' => 
    array (
      'path' => '/v4/openapi/assist/schema/actions/merge',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'spec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标版本规格（用于独享型特殊限制校验）。

默认：opensearch.share.common

参考：Quota 的 spec',
            'type' => 'string',
            'required' => false,
            'example' => '"opensearch.share.common"',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'required' => false,
            '$ref' => '#/components/schemas/Schema',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'primaryKey' => 
                  array (
                    'description' => '主键',
                    'type' => 'string',
                    'example' => '-',
                  ),
                  'mergeTable' => 
                  array (
                    'description' => '合并后的表',
                    'type' => 'object',
                    'example' => '-',
                  ),
                  'fromTable' => 
                  array (
                    'description' => '需要合并的表',
                    'type' => 'object',
                    'example' => '-',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\",\\n  \\"result\\": {\\n    \\"primaryKey\\": \\"-\\",\\n    \\"mergeTable\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"fromTable\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>8EF9C2DF-34C3-EDCF-6DEA-0445EE53DA20</requestId>\\n<result>\\n    <mergeTable>\\n        <id>\\n            <name>id</name>\\n            <type>INT</type>\\n            <isPk>1</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </id>\\n        <classid>\\n            <name>classid</name>\\n            <type>INT</type>\\n            <isPk>0</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </classid>\\n        <title>\\n            <name>title</name>\\n            <type>TEXT</type>\\n            <isPk>0</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </title>\\n        <js>\\n            <name>js</name>\\n            <type>TEXT</type>\\n            <isPk>0</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </js>\\n        <classid_1>\\n            <name>classid_1</name>\\n            <type>INT</type>\\n            <isPk>0</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </classid_1>\\n        <infotags>\\n            <name>infotags</name>\\n            <type>TEXT</type>\\n            <isPk>0</isPk>\\n            <isMulti>0</isMulti>\\n            <isAttribute>0</isAttribute>\\n        </infotags>\\n    </mergeTable>\\n    <fromTable>\\n        <tables>\\n            <phome_ecms_tuzhi>\\n                <id>\\n                    <name>id</name>\\n                    <type>INT</type>\\n                    <isPk>1</isPk>\\n                    <isMulti>0</isMulti>\\n                </id>\\n                <classid>\\n                    <name>classid</name>\\n                    <type>INT</type>\\n                    <isPk>0</isPk>\\n                    <isMulti>0</isMulti>\\n                </classid>\\n                <title>\\n                    <name>title</name>\\n                    <type>TEXT</type>\\n                    <isPk>0</isPk>\\n                    <isMulti>0</isMulti>\\n                </title>\\n                <js>\\n                    <name>js</name>\\n                    <type>TEXT</type>\\n                    <isPk>0</isPk>\\n                    <isMulti>0</isMulti>\\n                </js>\\n            </phome_ecms_tuzhi>\\n            <phome_ecms_tuzhi_data_1>\\n                <id_1>\\n                    <name>id_1</name>\\n                    <type>INT</type>\\n                    <isPk>1</isPk>\\n                    <isMulti>0</isMulti>\\n                </id_1>\\n                <classid_1>\\n                    <name>classid_1</name>\\n                    <type>INT</type>\\n                    <isPk>0</isPk>\\n                    <isMulti>0</isMulti>\\n                </classid_1>\\n                <infotags>\\n                    <name>infotags</name>\\n                    <type>TEXT</type>\\n                    <isPk>0</isPk>\\n                    <isMulti>0</isMulti>\\n                </infotags>\\n            </phome_ecms_tuzhi_data_1>\\n        </tables>\\n        <master>phome_ecms_tuzhi</master>\\n        <level>\\n            <phome_ecms_tuzhi>0</phome_ecms_tuzhi>\\n            <phome_ecms_tuzhi_data_1>1</phome_ecms_tuzhi_data_1>\\n        </level>\\n        <joinMap>\\n            <phome_ecms_tuzhi>\\n                <id>\\n                    <table>phome_ecms_tuzhi_data_1</table>\\n                    <key>id_1</key>\\n                    <join>\\n                        <classid_1>classid_1</classid_1>\\n                        <infotags>infotags</infotags>\\n                    </join>\\n                </id>\\n            </phome_ecms_tuzhi>\\n        </joinMap>\\n    </fromTable>\\n    <primaryKey>id</primaryKey>\\n</result>","errorExample":""}]',
      'title' => '获取合并后的宽表',
      'summary' => '获取合并后的宽表。',
      'requestParamsDescription' => ' **请求体**
| 字段 | 类型 | 是否必要 | 示例值 | 描述 |
| --- | --- | --- | --- | --- |
| tables | Object | 是 |  | 表结构 |
| indexes | Object | 否 |  | 索引结构 |
',
      'responseParamsDescription' => '  **返回参数**
| 名称 | 类型 | 描述 |
| --- | --- | --- |
| requestId | String | 请求ID |
| result.mergeTable | Object | 合并后的宽表结果<br />键为字段名，值为字段详情 |
| result.fromTable | Object | 源表信息 |
| result.fromTable.tables | Object | 表信息<br />键为表名，值为表结构信息 |
| result.fromTable.tables.* | Object | 键为字段名，值为字段详情 |
| result.fromTable.master | String | 主表 |
| result.fromTable.level | Object | 表层级信息，从0开始<br />键为表名，值为层级 |
| result.fromTable.joinMap | Object | 外表连接信息<br />键为表名，值为外表连接信息 |
| result.fromTable.joinMap.* | Object | 外表连接字段信息<br />键为字段，值为外表连接字段信息 |
| result.primaryKey | String | 主键字段 |


  **TableFields**
| 名称 | 类型 | 描述 |
| --- | --- | --- |
| name | String | 字段名 |
| type | String | 字段类型<br />参考：[数据表字段](~~179404~~) |
| isPk | String| 是否为主键<br />0：否<br />1：是 |
| isMulti | Integer | 是否为多值<br />0：否<br />1：是 |
| isAttribute | Integer | 是否为属性字段<br />0：否<br />1：是 |


  **JoinMapFields**
| 名称 | 类型 | 描述 |
| --- | --- | --- |
| table | String | 外连表名 |
| key | String | 外连表主键名 |
| join | Object | 外连表的扩展字段 |





',
      'extraInfo' => ' ',
    ),
    'DescribeRegions' => 
    array (
      'path' => '/v4/openapi/regions',
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
        'abilityTreeCode' => '55180',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch447AAX',
        ),
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3B7E42BD-1D63-2F6B-C8E0-41BACEA76EEB',
              ),
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'endpoint' => 
                    array (
                      'description' => '接入点地址',
                      'type' => 'string',
                      'example' => 'opensearch.cn-hangzhou.aliyuncs.com',
                    ),
                    'regionId' => 
                    array (
                      'description' => '区域ID',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'localName' => 
                    array (
                      'description' => '区域名称',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
                    ),
                    'consoleUrl' => 
                    array (
                      'description' => '控制台地址',
                      'type' => 'string',
                      'example' => 'https://opensearch-cn-hangzhou.console.aliyun.com',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"3B7E42BD-1D63-2F6B-C8E0-41BACEA76EEB\\",\\n  \\"result\\": [\\n    {\\n      \\"endpoint\\": \\"opensearch.cn-hangzhou.aliyuncs.com\\",\\n      \\"regionId\\": \\"cn-hangzhou\\",\\n      \\"localName\\": \\"华东1（杭州）\\",\\n      \\"consoleUrl\\": \\"https://opensearch-cn-hangzhou.console.aliyun.com\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>3B7E42BD-1D63-2F6B-C8E0-41BACEA76EEB</requestId>\\n<result>\\n    <regionId>cn-hangzhou</regionId>\\n    <localName>华东1（杭州）</localName>\\n    <endpoint>opensearch.cn-hangzhou.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-hangzhou.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-shanghai</regionId>\\n    <localName>华东2（上海）</localName>\\n    <endpoint>opensearch.cn-shanghai.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-shanghai.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-qingdao</regionId>\\n    <localName>华北1（青岛）</localName>\\n    <endpoint>opensearch.cn-qingdao.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-qingdao.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-beijing</regionId>\\n    <localName>华北2（北京）</localName>\\n    <endpoint>opensearch.cn-beijing.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-beijing.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-zhangjiakou</regionId>\\n    <localName>华北3（张家口）</localName>\\n    <endpoint>opensearch.cn-zhangjiakou.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-zhangjiakou.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-shenzhen</regionId>\\n    <localName>华南1（深圳）</localName>\\n    <endpoint>opensearch.cn-shenzhen.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-shenzhen.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>ap-southeast-1</regionId>\\n    <localName>新加坡</localName>\\n    <endpoint>opensearch.ap-southeast-1.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-ap-southeast-1.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-internal</regionId>\\n    <localName>内网1（中心）</localName>\\n    <endpoint>opensearch.cn-zhangbei-center.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-shanghai-in.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-zhangbei-in</regionId>\\n    <localName>内网2（张北）</localName>\\n    <endpoint>opensearch.cn-zhangbei-in.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-zhangbei-in.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>us-west-1-in</regionId>\\n    <localName>内网3（美国）</localName>\\n    <endpoint>opensearch.innet-us.aliyuncs.com</endpoint>\\n    <consoleUrl>http://opensearch-us-in.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>rus-west-1-in</regionId>\\n    <localName>内网4（俄罗斯）</localName>\\n    <endpoint/>\\n    <consoleUrl>https://opensearch-rg-ru-in.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>cn-daily</regionId>\\n    <localName>内网日常</localName>\\n    <endpoint>opensearch.cn-daily.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-cn-daily.console.aliyun.com</consoleUrl>\\n</result>\\n<result>\\n    <regionId>pre-hangzhou</regionId>\\n    <localName>杭州预发</localName>\\n    <endpoint>opensearch.pre-hangzhou.aliyuncs.com</endpoint>\\n    <consoleUrl>https://opensearch-pre-hangzhou.console.aliyun.com</consoleUrl>\\n</result>","errorExample":""}]',
      'title' => '查询可以使用的阿里云地域',
      'summary' => '获取所有区域的接入地址。',
    ),
    'DescribeDataCollction' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/data-collections/{dataCollectionIdentity}',
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
        'abilityTreeCode' => '55174',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch4M1CGO',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'dataCollectionIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据采集ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '286',
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
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '72FAD77B-83F9-F393-BA8E-5834E2427BF8',
              ),
              'result' => 
              array (
                'description' => '数据采集信息',
                'type' => 'object',
                'properties' => 
                array (
                  'created' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1581065837',
                  ),
                  'dataCollectionType' => 
                  array (
                    'description' => '数据采集的类型
- behavior 行为
- item_info 项目信息
- industry_specific 工业特性',
                    'type' => 'string',
                    'example' => 'BEHAVIOR',
                  ),
                  'type' => 
                  array (
                    'description' => '数据采集端的类型
- server
- web
- app
注：目前只支持 server',
                    'type' => 'string',
                    'example' => 'server',
                  ),
                  'industryName' => 
                  array (
                    'description' => '行业名称
- general 通用
- ecommerce 电商',
                    'type' => 'string',
                    'example' => 'GENERAL',
                  ),
                  'status' => 
                  array (
                    'description' => '状态
- 0 未开通
- 1 开通中
- 2 开通成功
- 3 开通失败',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'updated' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1581065904',
                  ),
                  'name' => 
                  array (
                    'description' => '数据采集名称',
                    'type' => 'string',
                    'example' => 'os_function_test_v1',
                  ),
                  'sundialId' => 
                  array (
                    'description' => 'sundial的ID',
                    'type' => 'string',
                    'example' => '1755',
                  ),
                  'id' => 
                  array (
                    'description' => '数据采集ID',
                    'type' => 'string',
                    'example' => '286',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"72FAD77B-83F9-F393-BA8E-5834E2427BF8\\",\\n  \\"result\\": {\\n    \\"created\\": 1581065837,\\n    \\"dataCollectionType\\": \\"BEHAVIOR\\",\\n    \\"type\\": \\"server\\",\\n    \\"industryName\\": \\"GENERAL\\",\\n    \\"status\\": 2,\\n    \\"updated\\": 1581065904,\\n    \\"name\\": \\"os_function_test_v1\\",\\n    \\"sundialId\\": \\"1755\\",\\n    \\"id\\": \\"286\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<requestId>72FAD77B-83F9-F393-BA8E-5834E2427BF8</requestId>\\n<result>\\n    <id>286</id>\\n    <name>os_function_test_v1</name>\\n    <type>server</type>\\n    <status>2</status>\\n    <dataCollectionType>BEHAVIOR</dataCollectionType>\\n    <industryName>GENERAL</industryName>\\n    <created>1581065837</created>\\n    <updated>1581065904</updated>\\n    <sundialId>1755</sundialId>\\n</result>","errorExample":""}]',
      'title' => 'DescribeDataCollection',
      'summary' => '获取指定应用的数据采集详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDataCollections' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/data-collections',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，默认 pageNumber = 1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数目，默认 pageSize = 10',
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
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '959D8782-B130-95EB-86CC-1F6ED447981F',
              ),
              'result' => 
              array (
                'description' => '数据采集信息

参考：[DataCollection](~~173605~~)',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'created' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1581065837',
                    ),
                    'dataCollectionType' => 
                    array (
                      'description' => '数据采集的类型

- behavior 行为
- item_info 项目信息
- industry_specific 工业特性',
                      'type' => 'string',
                      'example' => 'BEHAVIOR',
                    ),
                    'type' => 
                    array (
                      'description' => '数据采集端的类型

- server
- web
- app

注：目前只支持 server',
                      'type' => 'string',
                      'example' => 'server',
                    ),
                    'industryName' => 
                    array (
                      'description' => '行业名称

- general 通用
- ecommerce 电商',
                      'type' => 'string',
                      'example' => 'GENERAL',
                    ),
                    'status' => 
                    array (
                      'description' => '状态

- 0 未开通
- 1 开通中
- 2 开通成功
- 3 开通失败',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'updated' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1581065904',
                    ),
                    'name' => 
                    array (
                      'description' => '数据采集名称',
                      'type' => 'string',
                      'example' => 'os_function_test_v1',
                    ),
                    'sundialId' => 
                    array (
                      'description' => 'sundial的ID',
                      'type' => 'string',
                      'example' => '1755',
                    ),
                    'id' => 
                    array (
                      'description' => '数据采集ID',
                      'type' => 'string',
                      'example' => '286',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"totalCount\\": 1,\\n  \\"requestId\\": \\"959D8782-B130-95EB-86CC-1F6ED447981F\\",\\n  \\"result\\": [\\n    {\\n      \\"created\\": 1581065837,\\n      \\"dataCollectionType\\": \\"BEHAVIOR\\",\\n      \\"type\\": \\"server\\",\\n      \\"industryName\\": \\"GENERAL\\",\\n      \\"status\\": 2,\\n      \\"updated\\": 1581065904,\\n      \\"name\\": \\"os_function_test_v1\\",\\n      \\"sundialId\\": \\"1755\\",\\n      \\"id\\": \\"286\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<requestId>959D8782-B130-95EB-86CC-1F6ED447981F</requestId>\\n<totalCount>1</totalCount>\\n<result>\\n    <id>286</id>\\n    <name>os_function_test_v1</name>\\n    <type>server</type>\\n    <status>2</status>\\n    <dataCollectionType>BEHAVIOR</dataCollectionType>\\n    <industryName>GENERAL</industryName>\\n    <created>1581065837</created>\\n    <updated>1581065904</updated>\\n    <sundialId>1755</sundialId>\\n</result>","errorExample":""}]',
      'title' => 'ListDataCollections',
      'summary' => '获取OpenSearch应用的数据采集清单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveDataCollection' => 
    array (
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/data-collections/{dataCollectionIdentity}',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '应用名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '“my_app_group_name”',
          ),
        ),
        1 => 
        array (
          'name' => 'dataCollectionIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据采集ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '286',
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
              'result' => 
              array (
                'description' => '—',
                'type' => 'string',
                'example' => '{}',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'httpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"result\\": \\"{}\\",\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\"\\n}","errorExample":""},{"type":"xml","example":"<requestId>D77D0DAF-790D-F5F5-A9C0-133738165014</requestId>\\n<result/>","errorExample":""}]',
      'title' => 'RemoveDataCollection',
      'summary' => '关闭数据采集。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UntagResources' => 
    array (
      'summary' => '删标签接口。',
      'path' => '/v4/openapi/resource-tags',
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
          'name' => 'resourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型',
            'type' => 'string',
            'required' => true,
            'example' => 'ProductVersion',
          ),
        ),
        1 => 
        array (
          'name' => 'resourceId',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '资源ID,最多 50个子项',
            'description' => '资源ID,最多 50个子项',
            'type' => 'array',
            'items' => 
            array (
              'description' => '查询的资源的id列表。resource id与tags应至少存在一个。',
              'type' => 'string',
              'required' => false,
              'example' => '55111',
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'tagKey',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '对应标签键列表，最多包含20个子项',
            'description' => '对应标签键列表，最多包含20个子项',
            'type' => 'array',
            'items' => 
            array (
              'description' => '业务tagKey',
              'type' => 'string',
              'required' => false,
              'example' => 'GENIE_FUNCTION',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'all',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否全部删除，只针对tags为空时有效。取值范围： true  false True False   默认是 false',
            'description' => '是否全部删除，只针对tags为空时有效。取值范围： true  false True False   默认是 false',
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'tequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"tequestId\\": \\"\\"\\n}","type":"json"}]',
    ),
    'ListTagResources' => 
    array (
      'summary' => '查标签接口。',
      'path' => '/v4/openapi/resource-tags',
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
          'name' => 'resourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型',
            'type' => 'string',
            'required' => true,
            'example' => 'BIGDATA',
          ),
        ),
        1 => 
        array (
          'name' => 'resourceId',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '资源ID,最多 50个子项',
            'description' => '资源ID,最多 50个子项',
            'type' => 'array',
            'items' => 
            array (
              'description' => '查询的资源的id列表。resource id与tags应至少存在一个。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-bp185wwblwfvh1a1y1me',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'tag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '对应新增标签列表，最多包含20个子项',
            'description' => '对应新增标签列表，最多包含20个子项',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实体类型的内部英文表示',
              'type' => 'object',
              'properties' => 
              array (
                'key' => 
                array (
                  'title' => '标签键',
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'bm',
                ),
                'value' => 
                array (
                  'title' => '标签值',
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Uefi',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '下一个查询开始Token',
            'description' => '下一个查询开始Token',
            'type' => 'string',
            'required' => false,
            'example' => '60',
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
              'requestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'D77D0DAF-790D-F5F5-A9C0-133738165014',
              ),
              'nextToken' => 
              array (
                'title' => '下一个查询开始Token',
                'description' => '下一个查询开始Token',
                'type' => 'string',
                'example' => '20',
              ),
              'result' => 
              array (
                'title' => '资源列表',
                'description' => '资源列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'tagKey' => 
                    array (
                      'title' => '标签键',
                      'description' => '标签键',
                      'type' => 'string',
                      'example' => 'GENIE_FUNCTION',
                    ),
                    'tagValue' => 
                    array (
                      'title' => '标签值',
                      'description' => '标签值',
                      'type' => 'string',
                      'example' => 'ALLOW',
                    ),
                    'resourceId' => 
                    array (
                      'title' => '资源ID',
                      'description' => '资源ID',
                      'type' => 'string',
                      'example' => '54041',
                    ),
                    'resourceType' => 
                    array (
                      'title' => '资源类型',
                      'description' => '资源类型',
                      'type' => 'string',
                      'example' => 'hostGroup',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D77D0DAF-790D-F5F5-A9C0-133738165014\\",\\n  \\"nextToken\\": \\"20\\",\\n  \\"result\\": [\\n    {\\n      \\"tagKey\\": \\"GENIE_FUNCTION\\",\\n      \\"tagValue\\": \\"ALLOW\\",\\n      \\"resourceId\\": \\"54041\\",\\n      \\"resourceType\\": \\"hostGroup\\"\\n    }\\n  ]\\n}","type":"json"}]',
    ),
    'TagResources' => 
    array (
      'summary' => '打标签接口。',
      'path' => '/v4/openapi/resource-tags',
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
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'resourceType' => 
              array (
                'title' => '资源类型',
                'description' => '资源类型',
                'type' => 'string',
                'required' => true,
                'example' => 'ProductVersion',
              ),
              'resourceId' => 
              array (
                'title' => '资源ID,最多 50个子项',
                'description' => '资源ID,最多 50个子项',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源的id。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '68968',
                ),
                'required' => true,
              ),
              'tag' => 
              array (
                'title' => '对应新增标签列表，最多包含20个子项',
                'description' => '对应新增标签列表，最多包含20个子项',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实体类型的内部英文表示',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'key' => 
                    array (
                      'title' => '标签键',
                      'description' => '标签键',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'cloud_manage',
                    ),
                    'value' => 
                    array (
                      'title' => '标签值',
                      'description' => '标签值',
                      'type' => 'string',
                      'required' => false,
                      'example' => '31261301',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
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
            'description' => '响应体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'ABCDEFGH',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"ABCDEFGH\\"\\n}","type":"json"}]',
    ),
    'GetFunctionResource' => 
    array (
      'summary' => '获取指定名称的算法资源。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/resources/{resourceName}',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '功能名称',
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'rank',
          ),
        ),
        2 => 
        array (
          'name' => 'resourceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例名称',
            'description' => '实例名称',
            'type' => 'string',
            'required' => true,
            'example' => 'fg_json',
          ),
        ),
        3 => 
        array (
          'name' => 'output',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '输出等级',
            'description' => '输出等级',
            'type' => 'string',
            'required' => false,
            'example' => 'detail',
            'enum' => 
            array (
              0 => 'simple',
              1 => 'normal',
              2 => 'detail',
            ),
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
              'Status' => 
              array (
                'description' => '状态码

- OK 成功
- FAIL 失败',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E215C843-0795-5293-AC9A-14FE0723E890',
              ),
              'Message' => 
              array (
                'description' => '返回的错误信息',
                'type' => 'string',
                'example' => 'Resource not exist.',
              ),
              'Code' => 
              array (
                'description' => '返回的错误码（没有错误为空）',
                'type' => 'string',
                'example' => 'Resource.NotExist',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'CreateTime' => 
                  array (
                    'description' => '创建时间 （单位毫秒）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1234',
                  ),
                  'Data' => 
                  array (
                    'description' => '资源数据，不同resourceType对应的data结构不同',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Content' => 
                      array (
                        'description' => 'raw_file类型资源对应的文件内容',
                        'type' => 'string',
                        'example' => 'abc',
                      ),
                      'Generators' => 
                      array (
                        'description' => 'feature_generator类型资源对应的特征生成列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '特征生成描述',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Generator' => 
                            array (
                              'description' => '特征生成的类型',
                              'type' => 'string',
                              'example' => 'id',
                            ),
                            'Input' => 
                            array (
                              'description' => '输入',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Features' => 
                                array (
                                  'description' => '输入特征列表',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '输入特征',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Name' => 
                                      array (
                                        'description' => '特征名',
                                        'type' => 'string',
                                        'example' => 'system_item_id',
                                      ),
                                      'Type' => 
                                      array (
                                        'description' => '特征类型',
                                        'type' => 'string',
                                        'example' => 'item',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'Output' => 
                            array (
                              'description' => '输出的特征名',
                              'type' => 'string',
                              'example' => 'output_feature_name',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Description' => 
                  array (
                    'description' => '资源描述',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'FunctionName' => 
                  array (
                    'description' => '功能名称',
                    'type' => 'string',
                    'example' => 'rank',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '修改时间（单位毫秒）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1234',
                  ),
                  'ReferencedInstances' => 
                  array (
                    'description' => '引用的算法实例名称列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例名称',
                      'type' => 'string',
                      'example' => 'instance1',
                    ),
                  ),
                  'ResourceName' => 
                  array (
                    'description' => '资源名称',
                    'type' => 'string',
                    'example' => 'fg_json',
                  ),
                  'ResourceType' => 
                  array (
                    'description' => '资源类型',
                    'type' => 'string',
                    'example' => 'raw_file',
                  ),
                ),
              ),
              'Latency' => 
              array (
                'description' => 'api请求耗时 (单位毫秒)',
                'type' => 'number',
                'format' => 'double',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"E215C843-0795-5293-AC9A-14FE0723E890\\",\\n  \\"Message\\": \\"Resource not exist.\\",\\n  \\"Code\\": \\"Resource.NotExist\\",\\n  \\"Result\\": {\\n    \\"CreateTime\\": 1234,\\n    \\"Data\\": {\\n      \\"Content\\": \\"abc\\",\\n      \\"Generators\\": [\\n        {\\n          \\"Generator\\": \\"id\\",\\n          \\"Input\\": {\\n            \\"Features\\": [\\n              {\\n                \\"Name\\": \\"system_item_id\\",\\n                \\"Type\\": \\"item\\"\\n              }\\n            ]\\n          },\\n          \\"Output\\": \\"output_feature_name\\"\\n        }\\n      ]\\n    },\\n    \\"Description\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"FunctionName\\": \\"rank\\",\\n    \\"ModifyTime\\": 1234,\\n    \\"ReferencedInstances\\": [\\n      \\"instance1\\"\\n    ],\\n    \\"ResourceName\\": \\"fg_json\\",\\n    \\"ResourceType\\": \\"raw_file\\"\\n  },\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '获取算法资源',
    ),
    'ListFunctionResources' => 
    array (
      'summary' => '获取算法资源列表。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/resources',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '功能名称',
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'rank',
          ),
        ),
        2 => 
        array (
          'name' => 'resourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'feature_generator' => 'feature_generator',
              'raw_file' => 'raw_file',
            ),
            'example' => 'feature_generator',
          ),
        ),
        3 => 
        array (
          'name' => 'output',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '输出等级',
            'description' => '输出等级',
            'type' => 'string',
            'required' => false,
            'example' => 'detail',
            'enum' => 
            array (
              0 => 'simple',
              1 => 'normal',
              2 => 'detail',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页大小',
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
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
              'Status' => 
              array (
                'description' => '请求状态: OK/FAIL',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'TotalCount' => 
              array (
                'description' => '符合要求的总记录数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '"3A809095-C554-5CF5-8FCE-BE19D4673790"',
              ),
              'Message' => 
              array (
                'description' => '返回的错误信息',
                'type' => 'string',
                'example' => 'Invalid resource name.',
              ),
              'Code' => 
              array (
                'description' => '返回的错误码（没有错误为空）',
                'type' => 'string',
                'example' => 'Resource.InvalidResourceName',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果体',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreateTime' => 
                    array (
                      'description' => '创建时间 （单位毫秒）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1234',
                    ),
                    'Data' => 
                    array (
                      'description' => '资源数据，不同resourceType对应的data结构不同',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Content' => 
                        array (
                          'description' => 'raw_file类型资源对应的文件内容',
                          'type' => 'string',
                          'example' => '"abc"',
                        ),
                        'Generators' => 
                        array (
                          'description' => 'feature_generator类型资源对应的特征生成列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '特征生成描述',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Generator' => 
                              array (
                                'description' => '特征生成的类型',
                                'type' => 'string',
                                'example' => 'combo',
                              ),
                              'Input' => 
                              array (
                                'description' => '输入',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Features' => 
                                  array (
                                    'description' => '输入特征列表',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'description' => '输入特征',
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'Name' => 
                                        array (
                                          'description' => '特征名',
                                          'type' => 'string',
                                          'example' => 'system_item_id',
                                        ),
                                        'Type' => 
                                        array (
                                          'description' => '特征类型',
                                          'type' => 'string',
                                          'enumValueTitles' => 
                                          array (
                                            'item' => 'item',
                                            'user' => 'user',
                                          ),
                                          'example' => 'item',
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                              'Output' => 
                              array (
                                'description' => '输出的特征名',
                                'type' => 'string',
                                'example' => 'feature1',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Description' => 
                    array (
                      'description' => '资源描述',
                      'type' => 'string',
                      'example' => 'resource description',
                    ),
                    'FunctionName' => 
                    array (
                      'description' => '功能名称',
                      'type' => 'string',
                      'example' => 'rank',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '修改时间（单位毫秒）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1234',
                    ),
                    'ReferencedInstances' => 
                    array (
                      'description' => '引用的算法实例名称列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '实例名称',
                        'type' => 'string',
                        'example' => 'rank_model1',
                      ),
                    ),
                    'ResourceName' => 
                    array (
                      'description' => '资源名称',
                      'type' => 'string',
                      'example' => 'fg_json',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型',
                      'type' => 'string',
                      'example' => 'feature_generator',
                    ),
                  ),
                ),
              ),
              'Latency' => 
              array (
                'description' => '请求耗时（单位毫秒）',
                'type' => 'number',
                'format' => 'double',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"\\\\\\"3A809095-C554-5CF5-8FCE-BE19D4673790\\\\\\"\\",\\n  \\"Message\\": \\"Invalid resource name.\\",\\n  \\"Code\\": \\"Resource.InvalidResourceName\\",\\n  \\"Result\\": [\\n    {\\n      \\"CreateTime\\": 1234,\\n      \\"Data\\": {\\n        \\"Content\\": \\"\\\\\\"abc\\\\\\"\\",\\n        \\"Generators\\": [\\n          {\\n            \\"Generator\\": \\"combo\\",\\n            \\"Input\\": {\\n              \\"Features\\": [\\n                {\\n                  \\"Name\\": \\"system_item_id\\",\\n                  \\"Type\\": \\"item\\"\\n                }\\n              ]\\n            },\\n            \\"Output\\": \\"feature1\\"\\n          }\\n        ]\\n      },\\n      \\"Description\\": \\"resource description\\",\\n      \\"FunctionName\\": \\"rank\\",\\n      \\"ModifyTime\\": 1234,\\n      \\"ReferencedInstances\\": [\\n        \\"rank_model1\\"\\n      ],\\n      \\"ResourceName\\": \\"fg_json\\",\\n      \\"ResourceType\\": \\"feature_generator\\"\\n    }\\n  ],\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '获取算法资源列表',
    ),
    'DeleteFunctionResource' => 
    array (
      'summary' => '删除指定算法资源。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/resources/{resourceName}',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '功能名称',
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'rank',
          ),
        ),
        2 => 
        array (
          'name' => 'resourceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源名称',
            'description' => '资源名称',
            'type' => 'string',
            'required' => true,
            'example' => 'fg_json',
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
              'Status' => 
              array (
                'description' => '状态码

- OK 成功
- FAIL 失败',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A4D487A9-A456-5AA5-A9C6-B7BF2889CF74',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '""',
              ),
              'Code' => 
              array (
                'description' => '返回的错误码（没有错误为空）',
                'type' => 'string',
                'example' => '""',
              ),
              'Latency' => 
              array (
                'description' => '请求耗时（单位毫秒）',
                'type' => 'number',
                'format' => 'double',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"A4D487A9-A456-5AA5-A9C6-B7BF2889CF74\\",\\n  \\"Message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Code\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '删除算法资源',
    ),
    'UpdateFunctionResource' => 
    array (
      'summary' => '更新算法资源。',
      'path' => '/v4/openapi/app-groups/{appGroupIdentity}/functions/{functionName}/resources/{resourceName}',
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
          'name' => 'appGroupIdentity',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'example' => 'my_app_group_name',
          ),
        ),
        1 => 
        array (
          'name' => 'functionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '功能名称',
            'description' => '功能名称',
            'type' => 'string',
            'required' => true,
            'example' => 'rank',
          ),
        ),
        2 => 
        array (
          'name' => 'resourceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '资源名称',
            'description' => '资源名称',
            'type' => 'string',
            'required' => true,
            'example' => 'fg_json',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '资源数据，不同resourceType对应的data结构不同',
                'type' => 'object',
                'properties' => 
                array (
                  'Content' => 
                  array (
                    'description' => 'raw_file类型资源对应的文件内容',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'abc',
                  ),
                  'Generators' => 
                  array (
                    'description' => 'feature_generator类型资源对应的特征生成列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '特征生成描述',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Generator' => 
                        array (
                          'description' => '特征生成的类型',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'combo',
                        ),
                        'Input' => 
                        array (
                          'description' => '输入',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Features' => 
                            array (
                              'description' => '输入特征列表',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '输入特征',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Name' => 
                                  array (
                                    'description' => '特征名',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'system_item_id',
                                  ),
                                  'Type' => 
                                  array (
                                    'description' => '特征类型',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'item',
                                  ),
                                ),
                                'required' => false,
                              ),
                              'required' => false,
                            ),
                          ),
                          'required' => false,
                        ),
                        'Output' => 
                        array (
                          'description' => '输出的特征名',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'feature1',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'Description' => 
              array (
                'description' => '资源描述',
                'type' => 'string',
                'required' => false,
                'example' => 'updated description',
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
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '请求状态',
                'type' => 'string',
                'example' => 'OK',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '7E375703-5B12-5466-8B48-C4D01AE1291A',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Invalid request.',
              ),
              'Code' => 
              array (
                'description' => '返回的错误码（没有错误为空）',
                'type' => 'string',
                'example' => 'InvalidRequest',
              ),
              'Latency' => 
              array (
                'description' => '请求耗时（单位毫秒）',
                'type' => 'number',
                'format' => 'double',
                'example' => '123',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"OK\\",\\n  \\"HttpCode\\": 200,\\n  \\"RequestId\\": \\"7E375703-5B12-5466-8B48-C4D01AE1291A\\",\\n  \\"Message\\": \\"Invalid request.\\",\\n  \\"Code\\": \\"InvalidRequest\\",\\n  \\"Latency\\": 123\\n}","type":"json"}]',
      'title' => '更新算法资源',
      'description' => '根据资源名称更新资源信息，目前只支持data、description更新。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'opensearch.ap-southeast-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'opensearch.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'opensearch.cn-hangzhou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'opensearch.cn-north-2-gov-1.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'opensearch.cn-qingdao.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'opensearch.cn-shanghai.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'opensearch.cn-shenzhen.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'opensearch.cn-zhangjiakou.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'opensearch.us-east-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'opensearch.eu-central-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'opensearch.cn-hongkong.aliyuncs.com',
    ),
  ),
);
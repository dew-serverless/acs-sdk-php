<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'cloud-siem',
    'version' => '2022-06-16',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 187571,
      'title' => '多账号管控',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListRdUsers',
        1 => 'AddUser',
        2 => 'DeleteUser',
      ),
    ),
    1 => 
    array (
      'id' => 187473,
      'title' => '日志接入',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BatchJobSubmit',
        1 => 'ListAccountsByLog',
        2 => 'DescribeUserBuyStatus',
        3 => 'SubmitJobs',
        4 => 'ListProjectLogStores',
        5 => 'ListUserProdLogs',
        6 => 'ModifyDataSource',
        7 => 'ModifyDataSourceLog',
        8 => 'ModifyBindAccount',
        9 => 'ListUsersByProd',
        10 => 'ListImportedLogsByProd',
        11 => 'ListDataSourceTypes',
        12 => 'ListDataSourceLogs',
        13 => 'ListBindDataSources',
        14 => 'ListAllProds',
        15 => 'EnableServiceForCloudSiem',
        16 => 'EnableAccessForCloudSiem',
        17 => 'DescribeServiceStatus',
        18 => 'DescribeProdCount',
        19 => 'DescribeImportedLogCount',
        20 => 'DescribeDataSourceParameters',
        21 => 'DescribeDataSourceInstance',
        22 => 'DescribeAuth',
        23 => 'DeleteDataSourceLog',
        24 => 'DeleteDataSource',
        25 => 'DeleteBindAccount',
        26 => 'BindAccount',
        27 => 'AddUserSourceLogConfig',
        28 => 'AddDataSourceLog',
        29 => 'AddDataSource',
        30 => 'ListBindAccount',
        31 => 'ListAccountAccessId',
        32 => 'SubmitImportLogTasks',
        33 => 'DescribeCsImportedProdStatusByUser',
      ),
    ),
    2 => 
    array (
      'id' => 186523,
      'title' => '安全告警',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAlertsWithEntity',
        1 => 'DescribeAlerts',
        2 => 'DescribeAlertSource',
        3 => 'DescribeAlertsCount',
      ),
    ),
    3 => 
    array (
      'id' => 186560,
      'title' => '事件处置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeEntityInfo',
        1 => 'PostEventDisposeAndWhiteruleList',
        2 => 'DescribeWafScope',
        3 => 'DescribeEventDispose',
        4 => 'DescribeEventCountByThreatLevel',
        5 => 'DescribeDisposeAndPlaybook',
        6 => 'DescribeCloudSiemEvents',
        7 => 'DescribeCloudSiemEventDetail',
        8 => 'DescribeCloudSiemAssetsCounter',
        9 => 'DescribeCloudSiemAssets',
        10 => 'DescribeAttackTimeLine',
        11 => 'DescribeAlertsWithEvent',
        12 => 'DescribeAlertSourceWithEvent',
      ),
    ),
    4 => 
    array (
      'id' => 186153,
      'title' => '日志分析',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetLogs',
        1 => 'GetHistograms',
        2 => 'DoQuickField',
        3 => 'ListQuickQuery',
        4 => 'GetQuickQuery',
        5 => 'SaveQuickQuery',
        6 => 'DescribeLogStore',
        7 => 'ShowQuickAnalysis',
      ),
    ),
    5 => 
    array (
      'id' => 186542,
      'title' => '规则管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAlertType',
        1 => 'DeleteCustomizeRule',
        2 => 'DescribeAggregateFunction',
        3 => 'DescribeCustomizeRuleCount',
        4 => 'DescribeCustomizeRuleTest',
        5 => 'DescribeCustomizeRuleTestHistogram',
        6 => 'DescribeLogFields',
        7 => 'DescribeLogSource',
        8 => 'DescribeLogType',
        9 => 'DescribeOperators',
        10 => 'ListCloudSiemCustomizeRules',
        11 => 'ListCloudSiemPredefinedRules',
        12 => 'ListCustomizeRuleTestResult',
        13 => 'PostCustomizeRule',
        14 => 'PostCustomizeRuleTest',
        15 => 'PostFinishCustomizeRuleTest',
        16 => 'PostRuleStatusChange',
      ),
    ),
    6 => 
    array (
      'id' => 186597,
      'title' => '响应规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeScopeUsers',
        1 => 'DeleteAutomateResponseConfig',
        2 => 'DescribeAutomateResponseConfigCounter',
        3 => 'DescribeAutomateResponseConfigFeature',
        4 => 'DescribeAutomateResponseConfigPlayBooks',
        5 => 'ListAutomateResponseConfigs',
        6 => 'PostAutomateResponseConfig',
        7 => 'UpdateAutomateResponseConfigStatus',
      ),
    ),
    7 => 
    array (
      'id' => 186605,
      'title' => '处置中心',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListDisposeStrategy',
        1 => 'DescribeDisposeStrategyPlaybook',
      ),
    ),
    8 => 
    array (
      'id' => 186144,
      'title' => '权限管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListOperation',
        1 => 'DoSelfDelegate',
      ),
    ),
    9 => 
    array (
      'id' => 186147,
      'title' => '存储管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RestoreCapacity',
        1 => 'GetCapacity',
        2 => 'SetStorage',
        3 => 'DescribeStorage',
        4 => 'GetStorage',
      ),
    ),
    10 => 
    array (
      'id' => 186161,
      'title' => '投递管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListDelivery',
        1 => 'OpenDelivery',
        2 => 'CloseDelivery',
      ),
    ),
    11 => 
    array (
      'id' => 186608,
      'title' => '告警加白',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateWhiteRuleList',
        1 => 'PostEventWhiteruleList',
        2 => 'DescribeWhiteRuleList',
        3 => 'DescribeAlertScene',
        4 => 'DescribeAlertSceneByEvent',
        5 => 'DeleteWhiteRuleList',
      ),
    ),
    12 => 
    array (
      'id' => 186617,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeJobStatus',
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
    'ListRdUsers' => 
    array (
      'summary' => '列举已经接入威胁分析多账号管控的阿里云账号，被纳管到威胁分析的阿里云账号才可以使用威胁分析日志接入、事件处置等功能。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '154081',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas5NAHBX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<List<ListRdUsersResult>>',
            'description' => 'CloudSiemSuccessResponse<List<ListRdUsersResult>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据概览。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Joined' => 
                    array (
                      'title' => '日志code。',
                      'description' => '是否已被威胁分析多账号管控纳管。取值：
 - true：已被纳管。
 - false：未被纳管。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'JoinedTime' => 
                    array (
                      'description' => '被纳管时间。',
                      'type' => 'string',
                      'example' => '2013-10-01 00:00:00',
                    ),
                    'DelegatedOrNot' => 
                    array (
                      'title' => '是否被委派查看自己的资源',
                      'description' => '是否被委派查看自己的资源',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'MainUserId' => 
                    array (
                      'title' => '购买威胁分析的云账号ID。',
                      'description' => '购买威胁分析的阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123XXXXXXXXX',
                    ),
                    'SubUserId' => 
                    array (
                      'title' => '威胁分析云账号ID。',
                      'description' => '威胁分析阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123XXXXXXXX',
                    ),
                    'SubUserName' => 
                    array (
                      'title' => '威胁分析云账号名字。',
                      'description' => '威胁分析阿里云账号名字。',
                      'type' => 'string',
                      'example' => 'sas_account_xxx',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Joined\\": true,\\n      \\"JoinedTime\\": \\"2013-10-01 00:00:00\\",\\n      \\"DelegatedOrNot\\": true,\\n      \\"MainUserId\\": 0,\\n      \\"SubUserId\\": 0,\\n      \\"SubUserName\\": \\"sas_account_xxx\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看资源目录下用户信息',
    ),
    'AddUser' => 
    array (
      'summary' => '将指定云账号添加到威胁分析的多账号管控，只有纳管后的云账号才可以试用日志接入等威胁分析功能。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AddedUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '需要纳入管控的云账号ID。',
            'description' => '需要纳入管控的云账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123XXXXXXXX。',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemSuccessResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '纳管指定云账号',
    ),
    'DeleteUser' => 
    array (
      'summary' => '解除已经添加到威胁分析-多账号管控资源目录阿里云账号纳管，如有需要可以重新添加。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AddedUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '需要纳入管控的云账号ID。',
            'description' => '需要纳入管控的阿里云账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123XXXXXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemSuccessResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '返回执行结果。取值：
 - true：删除成功。
 - false：删除失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '删除指定云账号的多账号纳管',
    ),
    'BatchJobSubmit' => 
    array (
      'summary' => '支持用户通过资源目录架构配置日志接入任务。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '169774',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas5NAHBX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务提交配置，JSON格式。可使用[JobConfigBuilder](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java)自动生成。',
            'type' => 'string',
            'required' => false,
            'example' => '{{"autoSubmit":false,"configName":"test_builder","folderConfig":{"folderId":"rd-EUx7Qp","prodConfig":[{"allLogs":false,"allRegions":false,"logConfig":[{"logCode":"cloud_siem_rds_audit_log","logStorePattern":"vpc-test","projectPattern":"vpc-test"}],"prodCode":"rds","regions":["cn-shanghai"]},{"allLogs":true,"allRegions":true,"prodCode":"sas"}],"type":"folder"},"listenRdChange":false,"logConfigs":{"cloud_siem_rds_audit_log":{"logCode":"cloud_siem_rds_audit_log","logStorePattern":"vpc-test","projectPattern":"vpc-test"}}}}',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '产品所在地域，默认为cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
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
            'title' => 'CloudSiemResponse<BatchJobSubmitResult>',
            'description' => 'CloudSiemResponse<BatchJobSubmitResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回的具体数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'SubmitId' => 
                  array (
                    'description' => '任务提交ID，基于资源目录ID，文件夹ID，主账号ID生成。',
                    'type' => 'string',
                    'example' => 'BATCH_JOB_XXXXXX',
                  ),
                  'ConfigList' => 
                  array (
                    'title' => 'key = task name',
                    'description' => '生成的接入任务配置列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'description' => '阿里云账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123xxxxxx',
                        ),
                        'ProductList' => 
                        array (
                          'description' => '产品列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ProductCode' => 
                              array (
                                'description' => '产品Code。',
                                'type' => 'string',
                                'example' => 'sas',
                              ),
                              'LogList' => 
                              array (
                                'description' => '日志列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ProductCode' => 
                                    array (
                                      'description' => '产品Code。',
                                      'type' => 'string',
                                      'example' => 'sas',
                                    ),
                                    'LogCode' => 
                                    array (
                                      'description' => '日志Code。',
                                      'type' => 'string',
                                      'example' => 'cloud_siem_cfw_flow',
                                    ),
                                    'RegionCode' => 
                                    array (
                                      'description' => '地域ID。',
                                      'type' => 'string',
                                      'example' => 'cn-shanghai',
                                    ),
                                    'ProjectNamePattern' => 
                                    array (
                                      'description' => 'SLS Project Name模式。',
                                      'type' => 'string',
                                      'example' => 'vpc-test-project',
                                    ),
                                    'LogStoreNamePattern' => 
                                    array (
                                      'description' => 'SLS LogStore Name模式。',
                                      'type' => 'string',
                                      'example' => 'vpc-test-logstore',
                                    ),
                                    'ErrorCode' => 
                                    array (
                                      'description' => '任务失败原因。',
                                      'type' => 'string',
                                      'example' => 'ProjectLogstoreNotFound',
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
                  'TaskCount' => 
                  array (
                    'description' => '提交接入任务总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'ConfigId' => 
                  array (
                    'description' => '配置ID，后台自动生成。',
                    'type' => 'string',
                    'example' => 'xxxx_folder_xxxx',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。取值：
- **true**：成功
- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '请求状态码，返回200代表请求成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求返回的Message，成功为success，失败返回具体的失败原因。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrCode' => 
              array (
                'description' => '请求成功为空，调用出错时返回的具体错误码。',
                'type' => 'string',
                'example' => 'ServerError',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '5B0DFF6D-XXXX',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        501 => 
        array (
          0 => 
          array (
            'errorCode' => 'CloudSiem_Internal_Exception',
            'errorMessage' => 'CloudSiem_Internal_Exception',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"SubmitId\\": \\"BATCH_JOB_XXXXXX\\",\\n    \\"ConfigList\\": [\\n      {\\n        \\"UserId\\": 0,\\n        \\"ProductList\\": [\\n          {\\n            \\"ProductCode\\": \\"sas\\",\\n            \\"LogList\\": [\\n              {\\n                \\"ProductCode\\": \\"sas\\",\\n                \\"LogCode\\": \\"cloud_siem_cfw_flow\\",\\n                \\"RegionCode\\": \\"cn-shanghai\\",\\n                \\"ProjectNamePattern\\": \\"vpc-test-project\\",\\n                \\"LogStoreNamePattern\\": \\"vpc-test-logstore\\",\\n                \\"ErrorCode\\": \\"ProjectLogstoreNotFound\\"\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ],\\n    \\"TaskCount\\": 20,\\n    \\"ConfigId\\": \\"xxxx_folder_xxxx\\"\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"ErrCode\\": \\"ServerError\\",\\n  \\"RequestId\\": \\"5B0DFF6D-XXXX\\"\\n}","type":"json"}]',
      'title' => '按资源目录批量提交产品接入任务',
      'description' => '入参JsonConfig是一个非常复杂的JSON配置，为此我们提供了辅助工具类帮助具体配置示例，请参考[Demo](https://github.com/aliyun/cloud-siem-client/blob/master/src/main/java/com/aliyun/security/cloudsiem/client/sample/JobBuilderSample.java)。',
    ),
    'ListAccountsByLog' => 
    array (
      'summary' => '按日志查看账号列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '196080',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas5NAHBX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProdCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品的code。',
            'description' => '产品的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'qcloud_waf',
          ),
        ),
        1 => 
        array (
          'name' => 'LogCodes',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '日志code列表，json数组格式。',
            'description' => '日志code列表，json数组格式。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '日志code列表，json数组格式。',
              'type' => 'string',
              'required' => false,
              'example' => '["cloud_siem_hcloud_waf_alert_log"]',
            ),
            'required' => true,
            'example' => '["cloud_siem_hcloud_waf_alert_log"]',
            'maxItems' => 100,
          ),
        ),
        2 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。取值：
 - hcloud：华为云。
 - qcloud：腾讯云。 
 - aliyun：阿里云。',
            'description' => '多云的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<List<ListAccountsByLogResult>>',
            'description' => 'CloudSiemSuccessResponse<List<ListAccountsByLogResult>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求返回值。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SubUserId' => 
                    array (
                      'title' => '威胁分析云账号ID。',
                      'description' => '威胁分析云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123XXXXXXXX',
                    ),
                    'MainUserId' => 
                    array (
                      'title' => '购买威胁分析的云账号ID。',
                      'description' => '购买威胁分析的云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123XXXXXXXXX',
                    ),
                    'AccountId' => 
                    array (
                      'title' => '云账号ID。',
                      'description' => '云账号ID。',
                      'type' => 'string',
                      'example' => '123xxxxxxx',
                    ),
                    'AccountName' => 
                    array (
                      'title' => '云账号名称。',
                      'description' => '云账号名称。',
                      'type' => 'string',
                      'example' => 'sas_account_xxx',
                    ),
                    'Imported' => 
                    array (
                      'title' => '该账号是否已经接入。取值：
 -1：已接入。
 -0：未接入。',
                      'description' => '该账号是否已经接入。取值：
 -1：已接入。
 -0：未接入。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '123xxxxxxx',
                    ),
                    'LogCode' => 
                    array (
                      'title' => '日志code。',
                      'description' => '日志code。',
                      'type' => 'string',
                      'example' => 'cloud_siem_waf_xxxxx',
                    ),
                    'ProdCode' => 
                    array (
                      'title' => '日志对应的产品code。',
                      'description' => '日志对应的产品code。',
                      'type' => 'string',
                      'example' => 'qcloud_waf',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"SubUserId\\": 0,\\n      \\"MainUserId\\": 0,\\n      \\"AccountId\\": \\"123xxxxxxx\\",\\n      \\"AccountName\\": \\"sas_account_xxx\\",\\n      \\"Imported\\": 0,\\n      \\"LogCode\\": \\"cloud_siem_waf_xxxxx\\",\\n      \\"ProdCode\\": \\"qcloud_waf\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '按日志查看账号列表',
    ),
    'DescribeUserBuyStatus' => 
    array (
      'summary' => '查看当前阿里云用户或对应的阿里云企业组织账号是否已经购买威胁分析。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '157646',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas5NAHBX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '阿里云账号',
            'description' => '阿里云账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123XXXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<UserBuyOrderStatusResult>',
            'description' => 'CloudSiemSuccessResponse<UserBuyOrderStatusResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'MasterUserId' => 
                  array (
                    'title' => '资源目录Master账号ID。',
                    'description' => '资源目录Master账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123XXXXXX',
                  ),
                  'MasterUserName' => 
                  array (
                    'title' => '资源目录Master账号显示名称。',
                    'description' => '资源目录Master账号显示名称。',
                    'type' => 'string',
                    'example' => 'rd_master_xxx',
                  ),
                  'MainUserId' => 
                  array (
                    'title' => '购买威胁分析的阿里云账号ID。',
                    'description' => '购买威胁分析的阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123XXXXXX',
                  ),
                  'MainUserName' => 
                  array (
                    'title' => '购买威胁分析的阿里云账号名称。',
                    'description' => '购买威胁分析的阿里云账号名称。',
                    'type' => 'string',
                    'example' => 'sas_account_xxx',
                  ),
                  'SubUserId' => 
                  array (
                    'title' => '当前登录阿里云账号ID。',
                    'description' => '当前登录阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123XXXXXX',
                  ),
                  'SubUserName' => 
                  array (
                    'title' => '当前登录阿里云账号名称。',
                    'description' => '当前登录阿里云账号名称。',
                    'type' => 'string',
                    'example' => 'sas_account_xxx',
                  ),
                  'Capacity' => 
                  array (
                    'title' => '购买威胁分析的SLS容量，单位GB。',
                    'description' => '购买威胁分析的SLS容量，单位GB。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1024',
                  ),
                  'SasInstanceId' => 
                  array (
                    'title' => '云安全中心实例ID。',
                    'description' => '云安全中心实例ID。',
                    'type' => 'string',
                    'example' => 'sas-instance-xxxxx',
                  ),
                  'CanBuy' => 
                  array (
                    'title' => '当前账号是否可以进行威胁分析订单操作。取值：
 - true：可以购买、升级、变配等。
 - false：不可以操作威胁分析订单。',
                    'description' => '当前账号是否可以进行威胁分析订单操作。取值：
- true：可以购买、升级、变配等。
- false：不可以操作威胁分析订单。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'EndTime' => 
                  array (
                    'title' => '威胁分析到期时间，毫秒级时间戳。',
                    'description' => '威胁分析到期时间，毫秒级时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1669823999000',
                  ),
                  'DurationDays' => 
                  array (
                    'title' => '距离威胁分析过期时间的天数。',
                    'description' => '距离威胁分析过期时间的天数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                  'RdOrder' => 
                  array (
                    'title' => '是否是siem公测版订单。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
                'title' => '请求返回值。',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '81D8EC0C-0804-51AD-8C38-17ED0BC74892',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"MasterUserId\\": 0,\\n    \\"MasterUserName\\": \\"rd_master_xxx\\",\\n    \\"MainUserId\\": 0,\\n    \\"MainUserName\\": \\"sas_account_xxx\\",\\n    \\"SubUserId\\": 0,\\n    \\"SubUserName\\": \\"sas_account_xxx\\",\\n    \\"Capacity\\": 1024,\\n    \\"SasInstanceId\\": \\"sas-instance-xxxxx\\",\\n    \\"CanBuy\\": true,\\n    \\"EndTime\\": 1669823999000,\\n    \\"DurationDays\\": 3\\n  },\\n  \\"RequestId\\": \\"81D8EC0C-0804-51AD-8C38-17ED0BC74892\\"\\n}","type":"json"}]',
      'title' => '查看阿里云用户威胁分析购买情况',
    ),
    'SubmitJobs' => 
    array (
      'summary' => '批量提交日志接入任务，将对应日志数据接入到威胁分析体系中，进行告警事件分析。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JsonParam',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '需要接入的日志配置，json字符串格式。
 SourceProdCode：产品code。
 SourceLogCode：日志code。
 Deleted：0 - 接入日志 1 - 取消接入日志',
            'description' => '需要接入的日志配置，json数组格式。<br>
 - SourceProdCode：产品code。 
 - SourceLogCode：日志code。 
 - Deleted：接入/取消接入日志。
      - 0：接入日志 。
      - 1： 取消接入日志。',
            'type' => 'string',
            'required' => true,
            'example' => '[{"SourceLogCode":"cloud_siem_aegis_health_check","SourceProdCode":"sas","SubUserId":120xxxxxxx,"Deleted":0},{"SourceLogCode":"cloud_siem_aegis_health_check","SourceProdCode":"sas","SubUserId":121xxxxxxxx,"Deleted":0},{"SourceLogCode":"cloud_siem_aegis_health_check","SourceProdCode":"sas","SubUserId":122xxxxxxx,"Deleted":1}]',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Integer>',
            'description' => 'CloudSiemSuccessResponse<Integer>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '任务总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": 5,\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '批量提交日志接入',
    ),
    'ListProjectLogStores' => 
    array (
      'summary' => '根据云产品默认的sls project名字的pattern， logstore名字的pattern查找是否存在对应的project和logstore。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceProdCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '待查询的产品code。',
            'description' => '待查询的产品code。',
            'type' => 'string',
            'required' => true,
            'example' => 'sas',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceLogCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '待查询的日志code。',
            'description' => '待查询的日志code。',
            'type' => 'string',
            'required' => true,
            'example' => 'cloud_siem_aegis_proc',
          ),
        ),
        2 => 
        array (
          'name' => 'SubUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '待查询云账号ID。',
            'description' => '待查询阿里云账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123XXXXXXXX',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<List<ListProjectLogStoreResult>>',
            'description' => 'CloudSiemSuccessResponse<List<ListProjectLogStoreResult>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Project' => 
                    array (
                      'title' => 'sls的project名字。',
                      'description' => 'sls的project名字。',
                      'type' => 'string',
                      'example' => 'cloud-siem-project',
                    ),
                    'LogStore' => 
                    array (
                      'title' => 'sls的logstore名字。',
                      'description' => 'sls的logstore名字。',
                      'type' => 'string',
                      'example' => 'cloud-siem-logstore',
                    ),
                    'EndPoint' => 
                    array (
                      'title' => 'sls的project的endpoint。',
                      'description' => 'sls的project的endpoint。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou.log.aliyuncs.com',
                    ),
                    'RegionId' => 
                    array (
                      'title' => 'sls的project所在的region。',
                      'description' => 'sls的project所在的region。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'LocalName' => 
                    array (
                      'title' => 'sls的project所在的region名字。',
                      'description' => 'sls的project所在的region名字。',
                      'type' => 'string',
                      'example' => 'hangzhou',
                    ),
                    'MainUserId' => 
                    array (
                      'title' => '购买威胁分析的阿里云账号ID。',
                      'description' => '购买威胁分析的阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123XXXXXXXXX',
                    ),
                    'SubUserId' => 
                    array (
                      'title' => '威胁分析阿里云账号ID。',
                      'description' => '待操作的威胁分析阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123XXXXXXXX',
                    ),
                    'SubUserName' => 
                    array (
                      'title' => '威胁分析阿里云账号名字。',
                      'description' => '威胁分析阿里云账号名字。',
                      'type' => 'string',
                      'example' => 'sas_account_xxxx',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Project\\": \\"cloud-siem-project\\",\\n      \\"LogStore\\": \\"cloud-siem-logstore\\",\\n      \\"EndPoint\\": \\"cn-hangzhou.log.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LocalName\\": \\"hangzhou\\",\\n      \\"MainUserId\\": 0,\\n      \\"SubUserId\\": 0,\\n      \\"SubUserName\\": \\"sas_account_xxxx\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '自动查找SLS的LogStore信息',
    ),
    'ListUserProdLogs' => 
    array (
      'summary' => '根据产品列举用户接入日志的列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '154375',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas5NAHBX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceProdCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '待查询的产品code。',
            'description' => '待查询的产品code。',
            'type' => 'string',
            'required' => true,
            'example' => 'sas',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceLogCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '待查询的日志code。',
            'description' => '待查询的日志code。',
            'type' => 'string',
            'required' => true,
            'example' => 'cloud_siem_aegis_proc',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<List<CloudSiemUserSourceLogResult>>',
            'description' => 'CloudSiemSuccessResponse<List<CloudSiemUserSourceLogResult>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '日志列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求返回值。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SourceLogCode' => 
                    array (
                      'title' => '日志code。',
                      'description' => '日志code。',
                      'type' => 'string',
                      'example' => 'cloud_siem_aegis_proc',
                    ),
                    'SourceLogInfo' => 
                    array (
                      'title' => '需要接入日志的详细SLS信息，json格式。',
                      'description' => '需要接入日志的详细SLS信息，json数组格式。',
                      'type' => 'string',
                      'example' => '{"project":"wafnew-project-1335759343513432-cn-hangzhou","logStore":"wafnew-logstore","regionCode":"cn-hangzhou","prodCode":"waf"}',
                    ),
                    'DisplayLine' => 
                    array (
                      'title' => '需要接入日志的详细SLS信息。',
                      'description' => '需要接入日志的详细SLS信息。',
                      'type' => 'string',
                      'example' => 'cn-shanghai.siem-project.siem-logstore',
                    ),
                    'SourceProdCode' => 
                    array (
                      'title' => '产品code。',
                      'description' => '产品code。',
                      'type' => 'string',
                      'example' => 'sas',
                    ),
                    'IsDeleted' => 
                    array (
                      'title' => '是否已经接入。
 已接入：0
未接入：1',
                      'description' => '是否已经接入。取值：
 - 0：已接入。
 - 1 ：未接入。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'Imported' => 
                    array (
                      'title' => '是否已经接入。
 已接入：true
未接入：false',
                      'description' => '是否已经接入。取值：
 - true ：已接入。
 - false：未接入。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Displayed' => 
                    array (
                      'title' => '返回接入详细信息。
已返回 ：true
未返回：false',
                      'description' => '返回接入详细信息。取值：
 - true：已返回。
 - false：未返回。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'MainUserId' => 
                    array (
                      'title' => '购买威胁分析的阿里云账号ID。',
                      'description' => '购买威胁分析的阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123XXXXXXXXX',
                    ),
                    'SubUserId' => 
                    array (
                      'title' => '威胁分析阿里云账号ID。',
                      'description' => '威胁分析阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123XXXXXXXX',
                    ),
                    'SubUserName' => 
                    array (
                      'title' => '威胁分析阿里云账号名字。',
                      'description' => '威胁分析阿里云账号名字。',
                      'type' => 'string',
                      'example' => 'sas_account_xxx',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"SourceLogCode\\": \\"cloud_siem_aegis_proc\\",\\n      \\"SourceLogInfo\\": \\"{\\\\\\"project\\\\\\":\\\\\\"wafnew-project-1335759343513432-cn-hangzhou\\\\\\",\\\\\\"logStore\\\\\\":\\\\\\"wafnew-logstore\\\\\\",\\\\\\"regionCode\\\\\\":\\\\\\"cn-hangzhou\\\\\\",\\\\\\"prodCode\\\\\\":\\\\\\"waf\\\\\\"}\\",\\n      \\"DisplayLine\\": \\"cn-shanghai.siem-project.siem-logstore\\",\\n      \\"SourceProdCode\\": \\"sas\\",\\n      \\"IsDeleted\\": 0,\\n      \\"Imported\\": true,\\n      \\"Displayed\\": true,\\n      \\"MainUserId\\": 0,\\n      \\"SubUserId\\": 0,\\n      \\"SubUserName\\": \\"sas_account_xxx\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看日志接入的用户信息',
    ),
    'ModifyDataSource' => 
    array (
      'summary' => '修改已经添加的数据源描述信息。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123xxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源类型。',
            'description' => '数据源类型。取值：
- ckafka：腾讯云ckafka。
- obs：华为云obs。
- wafApi：腾讯云waf攻击日志下载API。',
            'type' => 'string',
            'required' => true,
            'example' => 'obs',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
            'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。
可调用[DescribeDataSourceInstance](https://api.aliyun-inc.com/#/publishment/document/cloud-siem/863fdf54478f4cc5877e27c2a5fe9e44?tenantUuid=f382fccd88b94c5c8c864def6815b854&activeTabKey=api|DescribeDataSourceInstance)获取数据源ID。',
            'type' => 'string',
            'required' => true,
            'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceInstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源名称。',
            'description' => '数据源名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'beijing_waf_kafka',
          ),
        ),
        4 => 
        array (
          'name' => 'DataSourceInstanceRemark',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源备注。',
            'description' => '数据源备注。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf_alert_log',
          ),
        ),
        5 => 
        array (
          'name' => 'DataSourceInstanceParams',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源参数，json数组格式。',
            'description' => '数据源参数，json数组格式。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"paraCode":"region_code","paraValue":"ap-guangzhou"}]',
          ),
        ),
        6 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<ModifyDataSourceResult>',
            'description' => 'CloudSiemSuccessResponse<ModifyDataSourceResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '修改数据源的数量，等于1表示成功，小于等于0表示失败。',
                    'description' => '修改数据源的数量，等于1表示成功，小于等于0表示失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DataSourceInstanceId' => 
                  array (
                    'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
                    'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
                    'type' => 'string',
                    'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Count\\": 1,\\n    \\"DataSourceInstanceId\\": \\"220ba97c9d1fdb0b9c7e8c7ca328d7ea\\"\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '修改数据源',
    ),
    'ModifyDataSourceLog' => 
    array (
      'summary' => '修改数据源下添加的日志相关说明信息。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LogCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '日志code。',
            'description' => '日志code。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_siem_waf_xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源类型。取值：
 - obs：华为云obs。
 - wafApi：腾讯云waf下载api。 
 - ckafka： 腾讯云ckafka。',
            'description' => '数据源类型。取值：
 - obs：华为云obs。
 - wafApi：腾讯云waf下载api。 
 - ckafka： 腾讯云ckafka。',
            'type' => 'string',
            'required' => false,
            'example' => 'obs',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
            'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。
可调用[DescribeDataSourceInstance](https://api.aliyun-inc.com/#/publishment/document/cloud-siem/863fdf54478f4cc5877e27c2a5fe9e44?tenantUuid=f382fccd88b94c5c8c864def6815b854&activeTabKey=api|DescribeDataSourceInstance)获取数据源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ef33097c9d1fdb0b9c7e8c7ca320pkl1',
          ),
        ),
        4 => 
        array (
          'name' => 'DataSourceInstanceLogs',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源参数详情，json数组格式。',
            'description' => '数据源参数详情，json数组格式。',
            'type' => 'string',
            'required' => true,
            'example' => '[{"LogCode":"cloud_siem_qcloud_waf_alert_log","LogParas":"[{\\"ParaCode\\":\\"api_name\\",\\"ParaValue\\":\\"GetAttackDownloadRecords\\"}]"}]',
          ),
        ),
        5 => 
        array (
          'name' => 'LogInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '日志ID，由威胁分析根据具体参数计算md5生成。',
            'description' => '日志ID，由威胁分析根据具体参数计算md5生成。可调用[ListDataSourceLogs](https://api.aliyun-inc.com/#/publishment/document/cloud-siem/863fdf54478f4cc5877e27c2a5fe9e44?tenantUuid=f382fccd88b94c5c8c864def6815b854&activeTabKey=api|ListDataSourceLogs)获取日志ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ef33097c9d1fdb0b9c7e8c7ca320pkl1',
          ),
        ),
        6 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<ModifyDataSourceLogResult>',
            'description' => 'CloudSiemSuccessResponse<ModifyDataSourceLogResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '修改日志的数量，等于1表示成功，小于等于0表示失败。',
                    'description' => '修改日志的数量，等于1表示成功，小于等于0表示失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'LogInstanceId' => 
                  array (
                    'title' => '日志的ID，由威胁分析根据具体参数计算md5生成。',
                    'description' => '日志的ID，由威胁分析根据具体参数计算md5生成。',
                    'type' => 'string',
                    'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Count\\": 1,\\n    \\"LogInstanceId\\": \\"220ba97c9d1fdb0b9c7e8c7ca328d7ea\\"\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '修改日志',
    ),
    'ModifyBindAccount' => 
    array (
      'summary' => '修改已经绑定的云账号。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号的AccessKeyId。',
            'description' => '云账号的AccessKeyId。',
            'type' => 'string',
            'required' => false,
            'example' => 'ABCXXXXXXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云账号名称。',
            'description' => '多云账号名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'sas_account_xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'BindId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '绑定记录ID。ListBindAccount接口返回的BindId。',
            'description' => '绑定记录ID。ListBindAccount接口返回的BindId。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123xxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<ModifyBindAccountResult>',
            'description' => 'CloudSiemSuccessResponse<ModifyBindAccountResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '修改账号绑定的数量，等于1表示成功，小于等于0表示失败。',
                    'description' => '修改账号绑定的数量，等于1表示成功，小于等于0表示失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Count\\": 1\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '修改已经绑定的云账号',
    ),
    'ListUsersByProd' => 
    array (
      'summary' => '按产品查看用户接入的日志详情。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '154568',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas5NAHBX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceProdCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '待查询的产品code。',
            'description' => '待查询的产品code。',
            'type' => 'string',
            'required' => true,
            'example' => 'sas',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<List<ListUserResult>>',
            'description' => 'CloudSiemSuccessResponse<List<ListUserResult>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求返回值。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SourceProdCode' => 
                    array (
                      'title' => '待查询的产品code。',
                      'description' => '待查询的产品code。',
                      'type' => 'string',
                      'example' => 'sas',
                    ),
                    'SourceLogCode' => 
                    array (
                      'title' => '待查询的日志code。',
                      'description' => '待查询的日志code。',
                      'type' => 'string',
                      'example' => 'cloud_siem_aegis_proc',
                    ),
                    'SourceLogName' => 
                    array (
                      'title' => '待查询的日志名字。',
                      'description' => '待查询的日志名字。',
                      'type' => 'string',
                      'example' => '安骑士进程日志',
                    ),
                    'CloudCode' => 
                    array (
                      'title' => '多云的code。',
                      'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
                      'type' => 'string',
                      'example' => 'hcloud',
                      'enum' => 
                      array (
                        0 => 'qcloud',
                        1 => 'hcloud',
                      ),
                    ),
                    'Imported' => 
                    array (
                      'title' => '日志是否已经接入。',
                      'description' => '日志是否已经接入。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'LogMdsCode' => 
                    array (
                      'title' => '待查询的日志显示code，与控制台现实有关。',
                      'description' => '待查询的日志显示code，与控制台现实有关。',
                      'type' => 'string',
                      'example' => '${siem.xxx.xxxxxxxxx}',
                    ),
                    'MainUserId' => 
                    array (
                      'title' => '购买威胁分析的阿里云账号ID。',
                      'description' => '购买威胁分析的阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123XXXXXXXXX',
                    ),
                    'SubUserId' => 
                    array (
                      'title' => '威胁分析阿里云账号ID。',
                      'description' => '威胁分析阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123XXXXXXXX',
                    ),
                    'SubUserName' => 
                    array (
                      'title' => '威胁分析阿里云账号名字。',
                      'description' => '威胁分析阿里云账号名字。',
                      'type' => 'string',
                      'example' => 'sas_account_xxx',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"SourceProdCode\\": \\"sas\\",\\n      \\"SourceLogCode\\": \\"cloud_siem_aegis_proc\\",\\n      \\"SourceLogName\\": \\"安骑士进程日志\\",\\n      \\"CloudCode\\": \\"hcloud\\",\\n      \\"Imported\\": true,\\n      \\"LogMdsCode\\": \\"${siem.xxx.xxxxxxxxx}\\",\\n      \\"MainUserId\\": 0,\\n      \\"SubUserId\\": 0,\\n      \\"SubUserName\\": \\"sas_account_xxx\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '按产品查看已经接入的日志详情',
    ),
    'ListImportedLogsByProd' => 
    array (
      'summary' => '查看该产品下日志接入详情。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProdCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品的code。',
            'description' => '产品的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'qcloud_waf',
          ),
        ),
        1 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。取值：
 - hcloud：华为云。
 - qcloud：腾讯云。 
 - aliyun：阿里云。',
            'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<List<ListImportedLogsByProdResult>>',
            'description' => 'CloudSiemSuccessResponse<List<ListImportedLogsByProdResult>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求返回值。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ProdCode' => 
                    array (
                      'title' => '日志对应的产品code。',
                      'description' => '日志对应的产品code。',
                      'type' => 'string',
                      'example' => 'qcloud_waf',
                    ),
                    'LogCode' => 
                    array (
                      'title' => '日志code。',
                      'description' => '日志code。',
                      'type' => 'string',
                      'example' => 'cloud_siem_waf_xxxxx',
                    ),
                    'LogMdsCode' => 
                    array (
                      'title' => '日志显示code。',
                      'description' => '日志显示code。',
                      'type' => 'string',
                      'example' => '${siem.prod. cloud_siem_waf_xxxxx}',
                    ),
                    'ImportedUserCount' => 
                    array (
                      'title' => '已接入该日志的用户数量。',
                      'description' => '已接入该日志的用户数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'UnImportedUserCount' => 
                    array (
                      'title' => '未接入该日志的用户数量。',
                      'description' => '未接入该日志的用户数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'TotalUserCount' => 
                    array (
                      'title' => '该日志下总共的用户数量。',
                      'description' => '该日志下总共的用户数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '日志最后接入时间。',
                      'description' => '日志最后接入时间。',
                      'type' => 'string',
                      'example' => '2023-11-23 12:30:00',
                    ),
                    'Imported' => 
                    array (
                      'title' => '日志是否已经接入。取值：
 - 1：已接入。 
 - 0：未接入。',
                      'description' => '日志是否已经接入。取值：
 - 1：已接入。 
 - 0：未接入。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2023-11-23 12:30:00',
                    ),
                    'AutoImported' => 
                    array (
                      'title' => '新增账号是否自动接入。取值：
 - 1：自动接入。 
 - 0：不自动接入。',
                      'description' => '新增账号是否自动接入。取值：
 - 1：自动接入。 
 - 0：不自动接入。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2023-11-23 12:30:00',
                    ),
                    'LogType' => 
                    array (
                      'title' => '日志类型。取值：
 - 1：中心侧接入。 
 - 2：预定义日志服务。 
 -3：自定义日志服务',
                      'description' => '日志类型。取值：
 - 1：中心侧接入。 
 - 2：预定义日志服务。 
 -3：自定义日志服务',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2023-11-23 12:30:00',
                    ),
                    'CloudCode' => 
                    array (
                      'title' => '多云的code。',
                      'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
                      'type' => 'string',
                      'example' => 'hcloud',
                      'enum' => 
                      array (
                        0 => 'qcloud',
                        1 => 'hcloud',
                        2 => 'aliyun',
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"ProdCode\\": \\"qcloud_waf\\",\\n      \\"LogCode\\": \\"cloud_siem_waf_xxxxx\\",\\n      \\"LogMdsCode\\": \\"${siem.prod. cloud_siem_waf_xxxxx}\\",\\n      \\"ImportedUserCount\\": 2,\\n      \\"UnImportedUserCount\\": 3,\\n      \\"TotalUserCount\\": 5,\\n      \\"ModifyTime\\": \\"2023-11-23 12:30:00\\",\\n      \\"Imported\\": 0,\\n      \\"AutoImported\\": 0,\\n      \\"LogType\\": 0,\\n      \\"CloudCode\\": \\"hcloud\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看该产品下日志接入详情',
    ),
    'ListDataSourceTypes' => 
    array (
      'summary' => '枚举目前威胁分析支持的多云接入数据源类型。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<List<ListDataSourceTypesResult>>',
            'description' => 'CloudSiemSuccessResponse<List<ListDataSourceTypesResult>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DataSourceType' => 
                    array (
                      'title' => '数据源类型。取值：
 - obs：华为云obs。
 - wafApi：腾讯云waf下载api。 
 - ckafka： 腾讯云ckafka。',
                      'description' => '数据源类型。取值：
 - obs：华为云obs。
 - wafApi：腾讯云waf下载api。 
 - ckafka： 腾讯云ckafka。',
                      'type' => 'string',
                      'example' => 'obs',
                    ),
                    'CloudCode' => 
                    array (
                      'title' => '多云的code。',
                      'description' => '多云的code。',
                      'type' => 'string',
                      'example' => 'hcloud',
                      'enum' => 
                      array (
                        0 => 'qcloud',
                        1 => 'hcloud',
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The specified parameter %s is not valid, only support %s',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"DataSourceType\\": \\"obs\\",\\n      \\"CloudCode\\": \\"hcloud\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '枚举数据源类型',
    ),
    'ListDataSourceLogs' => 
    array (
      'summary' => '查看数据源下的日志列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataSourceInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
            'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
            'type' => 'string',
            'required' => true,
            'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123xxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<ListDataSourceLogsResult>',
            'description' => 'CloudSiemSuccessResponse<ListDataSourceLogsResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'SubUserId' => 
                  array (
                    'title' => '日志对应的阿里云账号ID。',
                    'description' => '日志对应的阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123XXXXXXXX',
                  ),
                  'DataSourceInstanceId' => 
                  array (
                    'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
                    'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
                    'type' => 'string',
                    'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
                  ),
                  'DataSourceInstanceName' => 
                  array (
                    'title' => '数据源名称。',
                    'description' => '数据源名称。',
                    'type' => 'string',
                    'example' => 'waf kafka',
                  ),
                  'DataSourceInstanceRemark' => 
                  array (
                    'title' => '数据源备注。',
                    'description' => '数据源备注。',
                    'type' => 'string',
                    'example' => 'waf kafka',
                  ),
                  'DataSourceInstanceLogs' => 
                  array (
                    'title' => '该数据源下日志列表。',
                    'description' => '该数据源下日志列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LogInstanceId' => 
                        array (
                          'title' => '日志的ID，由威胁分析根据具体参数计算md5生成。',
                          'description' => '日志的ID，由威胁分析根据具体参数计算md5生成。',
                          'type' => 'string',
                          'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
                        ),
                        'LogCode' => 
                        array (
                          'title' => '日志code。',
                          'description' => '日志code。',
                          'type' => 'string',
                          'example' => 'cloud_siem_waf_xxxxx',
                        ),
                        'LogMdsCode' => 
                        array (
                          'title' => '日志显示code。',
                          'description' => '日志显示code。',
                          'type' => 'string',
                          'example' => '${siem.prod.cloud_siem_waf_xxxxx}',
                        ),
                        'LogParams' => 
                        array (
                          'title' => '日志详细参数列表。',
                          'description' => '日志详细参数列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '日志参数',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ParaCode' => 
                              array (
                                'title' => '日志参数code。',
                                'description' => '日志参数code。',
                                'type' => 'string',
                                'example' => 'region_code',
                              ),
                              'ParaValue' => 
                              array (
                                'title' => '日志参数值。',
                                'description' => '日志参数值。',
                                'type' => 'string',
                                'example' => 'ap-guangzhou',
                              ),
                            ),
                          ),
                        ),
                        'TaskStatus' => 
                        array (
                          'title' => '日志对应的接入任务状态。取值：
 - 1：已接入。 
 - 0：未接入。',
                          'description' => '日志对应的接入任务状态。取值：
 - 1：已接入。 
 - 0：未接入。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'AccountId' => 
                  array (
                    'title' => '云账号ID。',
                    'description' => '云账号ID。',
                    'type' => 'string',
                    'example' => '123xxxxxxx',
                  ),
                  'CloudCode' => 
                  array (
                    'title' => '多云的code。',
                    'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云',
                    'type' => 'string',
                    'example' => 'hcloud',
                    'enum' => 
                    array (
                      0 => 'qcloud',
                      1 => 'hcloud',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"SubUserId\\": 0,\\n    \\"DataSourceInstanceId\\": \\"220ba97c9d1fdb0b9c7e8c7ca328d7ea\\",\\n    \\"DataSourceInstanceName\\": \\"waf kafka\\",\\n    \\"DataSourceInstanceRemark\\": \\"waf kafka\\",\\n    \\"DataSourceInstanceLogs\\": [\\n      {\\n        \\"LogInstanceId\\": \\"220ba97c9d1fdb0b9c7e8c7ca328d7ea\\",\\n        \\"LogCode\\": \\"cloud_siem_waf_xxxxx\\",\\n        \\"LogMdsCode\\": \\"${siem.prod.cloud_siem_waf_xxxxx}\\",\\n        \\"LogParams\\": [\\n          {\\n            \\"ParaCode\\": \\"region_code\\",\\n            \\"ParaValue\\": \\"ap-guangzhou\\"\\n          }\\n        ],\\n        \\"TaskStatus\\": 1\\n      }\\n    ],\\n    \\"AccountId\\": \\"123xxxxxxx\\",\\n    \\"CloudCode\\": \\"hcloud\\"\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看数据源下的日志列表',
    ),
    'ListBindDataSources' => 
    array (
      'summary' => '枚举所有数据源。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123xxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<List<ListBindDataSourcesResult>>',
            'description' => 'CloudSiemSuccessResponse<List<ListBindDataSourcesResult>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AccountName' => 
                    array (
                      'title' => '多云账号名称。',
                      'description' => '多云账号名称。',
                      'type' => 'string',
                      'example' => 'sas_tq_account_xxxx',
                    ),
                    'DataSourceInstanceId' => 
                    array (
                      'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
                      'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
                      'type' => 'string',
                      'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
                    ),
                    'DataSourceType' => 
                    array (
                      'title' => '数据源类型。取值：
 - obs：华为云obs。
 - wafApi：腾讯云waf下载api。 
 - ckafka： 腾讯云ckafka。',
                      'description' => '数据源类型。取值：
 - obs：华为云obs。
 - wafApi：腾讯云waf下载api。 
 - ckafka： 腾讯云ckafka。',
                      'type' => 'string',
                      'example' => 'obs',
                    ),
                    'DataSourceName' => 
                    array (
                      'title' => '数据源名称。',
                      'description' => '数据源名称。',
                      'type' => 'string',
                      'example' => 'waf_kafka',
                    ),
                    'DataSourceRemark' => 
                    array (
                      'title' => '数据源备注。',
                      'description' => '数据源备注。',
                      'type' => 'string',
                      'example' => 'waf_kafka',
                    ),
                    'LogCount' => 
                    array (
                      'title' => '该数据源下已添加的日志的数量。',
                      'description' => '该数据源下已添加的日志的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'TaskCount' => 
                    array (
                      'title' => '该数据源下已创建的日志接入任务的数量。',
                      'description' => '该数据源下已创建的日志接入任务的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'AccountId' => 
                    array (
                      'title' => '云账号ID。',
                      'description' => '云账号ID。',
                      'type' => 'string',
                      'example' => '123xxxxxxx',
                    ),
                    'CloudCode' => 
                    array (
                      'title' => '多云的code。',
                      'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
                      'type' => 'string',
                      'example' => 'hcloud',
                      'enum' => 
                      array (
                        0 => 'qcloud',
                        1 => 'hcloud',
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"AccountName\\": \\"sas_tq_account_xxxx\\",\\n      \\"DataSourceInstanceId\\": \\"220ba97c9d1fdb0b9c7e8c7ca328d7ea\\",\\n      \\"DataSourceType\\": \\"obs\\",\\n      \\"DataSourceName\\": \\"waf_kafka\\",\\n      \\"DataSourceRemark\\": \\"waf_kafka\\",\\n      \\"LogCount\\": 1,\\n      \\"TaskCount\\": 0,\\n      \\"AccountId\\": \\"123xxxxxxx\\",\\n      \\"CloudCode\\": \\"hcloud\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '枚举所有数据源',
    ),
    'ListAllProds' => 
    array (
      'summary' => '查看当前威胁分析已经支持的数据接入的云产品列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '195975',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas5NAHBX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<ListAllProdsResult>',
            'description' => 'CloudSiemSuccessResponse<ListAllProdsResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'title' => '日志总数。',
                    'description' => '日志总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '19',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页的大小。',
                    'description' => '每页的大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'CurrentPage' => 
                  array (
                    'title' => '当前页。',
                    'description' => '当前页。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'ProdList' => 
                  array (
                    'title' => '产品列表。',
                    'description' => '产品列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ProdCode' => 
                        array (
                          'title' => '产品code。',
                          'description' => '产品code。',
                          'type' => 'string',
                          'example' => 'sas',
                        ),
                        'TotalLogCount' => 
                        array (
                          'title' => '该产品下总共的日志数量。',
                          'description' => '该产品下总共的日志数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '19',
                        ),
                        'ImportedLogCount' => 
                        array (
                          'title' => '该产品下已经接入的日志数量。',
                          'description' => '该产品下已经接入的日志数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'ModifyTime' => 
                        array (
                          'title' => '该产品下日志最近接入时间。',
                          'description' => '该产品下日志最近接入时间。',
                          'type' => 'string',
                          'example' => '2023-11-23 12:12:12',
                        ),
                        'CloudCode' => 
                        array (
                          'title' => '多云的code。',
                          'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
                          'type' => 'string',
                          'example' => 'hcloud',
                          'enum' => 
                          array (
                            0 => 'qcloud',
                            1 => 'hcloud',
                            2 => 'aliyun',
                          ),
                        ),
                      ),
                    ),
                    'example' => '1',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"TotalCount\\": 19,\\n    \\"PageSize\\": 10,\\n    \\"CurrentPage\\": 1,\\n    \\"ProdList\\": [\\n      {\\n        \\"ProdCode\\": \\"sas\\",\\n        \\"TotalLogCount\\": 19,\\n        \\"ImportedLogCount\\": 10,\\n        \\"ModifyTime\\": \\"2023-11-23 12:12:12\\",\\n        \\"CloudCode\\": \\"hcloud\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看云产品列表',
    ),
    'EnableServiceForCloudSiem' => 
    array (
      'summary' => '为威胁分析开通资源目录授权，需要使用资源目录管理员调用。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemSuccessResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。取值：
- true：开通成功。
- false：开通失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '开通资源目录权限',
    ),
    'EnableAccessForCloudSiem' => 
    array (
      'summary' => '用户授权接口，点击将创建威胁分析角色AliyunServiceRoleForSasCloudSiem。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '158612',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas5NAHBX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AutoSubmit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否自动接入云安全中心、Web应用防火墙、云防火墙的告警日志，默认自动接入。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemSuccessResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '创建威胁分析SLR',
    ),
    'DescribeServiceStatus' => 
    array (
      'summary' => '查看资源目录是否已给威胁分析授权。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemSuccessResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。
- true：已经开通权限。
- false：未开通权限。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看资源目录是否已给威胁分析授权',
    ),
    'DescribeProdCount' => 
    array (
      'summary' => '查看阿里云、腾讯云、华为云已经支持接入到威胁分析的云产品数量。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<DescribeProdCountResult>',
            'description' => 'CloudSiemSuccessResponse<DescribeProdCountResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'AliyunProdCount' => 
                  array (
                    'title' => '阿里云产品的数量。',
                    'description' => '阿里云产品的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '19',
                  ),
                  'HcloudProdCount' => 
                  array (
                    'title' => '华为云产品的数量。',
                    'description' => '华为云产品的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'QcloudProdCount' => 
                  array (
                    'title' => '腾讯云产品的数量。',
                    'description' => '腾讯云产品的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"AliyunProdCount\\": 19,\\n    \\"HcloudProdCount\\": 2,\\n    \\"QcloudProdCount\\": 2\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看多云产品数量',
    ),
    'DescribeImportedLogCount' => 
    array (
      'summary' => '查看接入日志的数量。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '195544',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas5NAHBX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<DescribeImportedLogCountResult>',
            'description' => 'CloudSiemSuccessResponse<DescribeImportedLogCountResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalLogCount' => 
                  array (
                    'title' => '日志总数。',
                    'description' => '日志总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '59',
                  ),
                  'ImportedLogCount' => 
                  array (
                    'title' => '已接入的日志的数量。',
                    'description' => '已接入的日志的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'UnImportedLogCount' => 
                  array (
                    'title' => '未接入的日志的数量。',
                    'description' => '未接入的日志的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '49',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"TotalLogCount\\": 59,\\n    \\"ImportedLogCount\\": 10,\\n    \\"UnImportedLogCount\\": 49\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看接入日志的数量',
    ),
    'DescribeDataSourceParameters' => 
    array (
      'summary' => '获取数据源参数详情。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '接入的数据源类型。 取值: 
 - ckafka：腾讯云ckafka。 
 - obs：华为云obs。 
 - wafApi：腾讯云waf攻击日志下载api。 ',
            'description' => '接入的数据源类型。取值：
 - **ckafka**：腾讯云ckafka。 
 - **obs**：华为云obs。 
 - **wafApi**：腾讯云waf攻击日志下载api。',
            'type' => 'string',
            'required' => true,
            'example' => 'obs',
          ),
        ),
        1 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<List<DescribeDataSourceParametersResult>>',
            'description' => 'CloudSiemSuccessResponse<List<DescribeDataSourceParametersResult>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求返回值。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DataSourceType' => 
                    array (
                      'title' => '数据源类型。取值：
 - obs：华为云obs。
 - wafApi：腾讯云waf下载api。 
 - ckafka： 腾讯云ckafka。',
                      'description' => '数据源类型。取值：
 - **obs**：华为云obs。
 - **wafApi**：腾讯云waf下载api。 
 - **ckafka**： 腾讯云ckafka。',
                      'type' => 'string',
                      'example' => 'obs',
                    ),
                    'ParaLevel' => 
                    array (
                      'title' => '参数级别。取值：
 - 1：数据源参数。
- 2：日志参数。',
                      'description' => '参数级别。取值：
 - **1**：数据源参数。
- **2**：日志参数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ParaCode' => 
                    array (
                      'title' => '参数code。',
                      'description' => '参数code。',
                      'type' => 'string',
                      'example' => 'region_code',
                    ),
                    'ParaName' => 
                    array (
                      'title' => '参数名字。',
                      'description' => '参数名字。',
                      'type' => 'string',
                      'example' => 'region local',
                    ),
                    'ParaType' => 
                    array (
                      'title' => '参数类型。',
                      'description' => '参数类型。',
                      'type' => 'string',
                      'example' => 'string',
                    ),
                    'Required' => 
                    array (
                      'title' => '是否必选参数。取值：
 - 1：必选。
 - 0：非必选。',
                      'description' => '是否必选参数。取值：
 - **1**：必选。
 - **0**：非必选。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => 'string',
                    ),
                    'FormatCheck' => 
                    array (
                      'title' => '格式校验方式。',
                      'description' => '格式校验方式。',
                      'type' => 'string',
                      'example' => 'email',
                    ),
                    'Title' => 
                    array (
                      'title' => '参数值提示。',
                      'description' => '参数值提示。',
                      'type' => 'string',
                      'example' => 'obs bucket name',
                    ),
                    'Hit' => 
                    array (
                      'title' => '更多说明。',
                      'description' => '更多说明。',
                      'type' => 'string',
                      'example' => 'obs docment',
                    ),
                    'DefaultValue' => 
                    array (
                      'title' => '默认参数值。',
                      'description' => '默认参数值。',
                      'type' => 'string',
                      'example' => 'wafApi',
                    ),
                    'Disabled' => 
                    array (
                      'title' => '是否禁止修改。取值：
 - true：禁止修改。 
 - false：可以修改。',
                      'description' => '是否禁止修改。取值：
 - **true**：禁止修改。 
 - **false**：可以修改。',
                      'type' => 'boolean',
                      'example' => 'wafApi',
                    ),
                    'CanEditted' => 
                    array (
                      'title' => '是否可编辑。取值：
 - 0：禁止修改。 
 - 1：可以修改。',
                      'description' => '是否可编辑。取值：
 - **0**：禁止修改。 
 - **1**：可以修改。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => 'wafApi',
                    ),
                    'ParamValue' => 
                    array (
                      'title' => '具体的参数列表。',
                      'description' => '具体的参数列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '参数值。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Label' => 
                          array (
                            'title' => '展示内容。',
                            'description' => '展示内容。',
                            'type' => 'string',
                            'example' => 'guangzhou',
                          ),
                          'Value' => 
                          array (
                            'title' => '实际的参数内容。',
                            'description' => '实际的参数内容。',
                            'type' => 'string',
                            'example' => 'ap-guangzhou',
                          ),
                        ),
                      ),
                    ),
                    'CloudCode' => 
                    array (
                      'title' => '多云的code。',
                      'description' => '多云的code。取值：
- **qcloud**：腾讯云。
- **aliyun**：阿里云。
- **hcloud**：华为云。',
                      'type' => 'string',
                      'example' => 'hcloud',
                      'enum' => 
                      array (
                        0 => 'qcloud',
                        1 => 'hcloud',
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"DataSourceType\\": \\"obs\\",\\n      \\"ParaLevel\\": 1,\\n      \\"ParaCode\\": \\"region_code\\",\\n      \\"ParaName\\": \\"region local\\",\\n      \\"ParaType\\": \\"string\\",\\n      \\"Required\\": 0,\\n      \\"FormatCheck\\": \\"email\\",\\n      \\"Title\\": \\"obs bucket name\\",\\n      \\"Hit\\": \\"obs docment\\",\\n      \\"DefaultValue\\": \\"wafApi\\",\\n      \\"Disabled\\": true,\\n      \\"CanEditted\\": 0,\\n      \\"ParamValue\\": [\\n        {\\n          \\"Label\\": \\"guangzhou\\",\\n          \\"Value\\": \\"ap-guangzhou\\"\\n        }\\n      ],\\n      \\"CloudCode\\": \\"hcloud\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '获取数据源参数详情',
    ),
    'DescribeDataSourceInstance' => 
    array (
      'summary' => '查看数据源详情。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataSourceInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
            'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。可调用[ListDataSourceLogs](https://api.aliyun-inc.com/#/publishment/document/cloud-siem/863fdf54478f4cc5877e27c2a5fe9e44?tenantUuid=f382fccd88b94c5c8c864def6815b854&activeTabKey=api|ListDataSourceLogs)获取数据源ID。',
            'type' => 'string',
            'required' => true,
            'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<DescribeDataSourceInstanceResult>',
            'description' => 'CloudSiemSuccessResponse<DescribeDataSourceInstanceResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'DataSourceInstanceId' => 
                  array (
                    'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
                    'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
                    'type' => 'string',
                    'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
                  ),
                  'DataSourceInstanceParams' => 
                  array (
                    'title' => '数据源的详细参数列表。',
                    'description' => '数据源的详细参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParaCode' => 
                        array (
                          'title' => '参数code。',
                          'description' => '参数code。',
                          'type' => 'string',
                          'example' => 'region_code',
                        ),
                        'ParaValue' => 
                        array (
                          'title' => '参数值。',
                          'description' => '参数值。',
                          'type' => 'string',
                          'example' => 'ap-guangzhou',
                        ),
                      ),
                    ),
                  ),
                  'AccountId' => 
                  array (
                    'title' => '云账号ID。',
                    'description' => '云账号ID。',
                    'type' => 'string',
                    'example' => '123xxxxxxx',
                  ),
                  'CloudCode' => 
                  array (
                    'title' => '多云的code。',
                    'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
                    'type' => 'string',
                    'example' => 'hcloud',
                    'enum' => 
                    array (
                      0 => 'qcloud',
                      1 => 'hcloud',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"DataSourceInstanceId\\": \\"220ba97c9d1fdb0b9c7e8c7ca328d7ea\\",\\n    \\"DataSourceInstanceParams\\": [\\n      {\\n        \\"ParaCode\\": \\"region_code\\",\\n        \\"ParaValue\\": \\"ap-guangzhou\\"\\n      }\\n    ],\\n    \\"AccountId\\": \\"123xxxxxxx\\",\\n    \\"CloudCode\\": \\"hcloud\\"\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看数据源详情',
    ),
    'DescribeAuth' => 
    array (
      'summary' => '检查阿里云账号是否已经给SIEM授权，已经创建了AliyunServiceRoleForSasCloudSiem角色。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ap-southeast-1' => '新加坡',
              'cn-hangzhou' => '杭州',
            ),
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。
- true 已经开通权限。
- false 未开通权限。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                ),
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '本次请求的id。',
                'type' => 'string',
                'example' => '4F539347-7D9A-51EA-8ABF-5D5507045C5C',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"4F539347-7D9A-51EA-8ABF-5D5507045C5C\\"\\n}","type":"json"}]',
      'title' => '检查是否已经开通SIEM权限',
    ),
    'DeleteDataSourceLog' => 
    array (
      'summary' => '删除日志。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LogInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '日志ID，由威胁分析根据具体参数计算md5生成。',
            'description' => '日志ID，由威胁分析根据具体参数计算md5生成。可调用[ListDataSourceLogs](https://api.aliyun-inc.com/#/publishment/document/cloud-siem/863fdf54478f4cc5877e27c2a5fe9e44?tenantUuid=f382fccd88b94c5c8c864def6815b854&activeTabKey=api|ListDataSourceLogs)获取日志ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ef33097c9d1fdb0b9c7e8c7ca320pkl1',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
            'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。可调用[ListDataSourceLogs](https://api.aliyun-inc.com/#/publishment/document/cloud-siem/863fdf54478f4cc5877e27c2a5fe9e44?tenantUuid=f382fccd88b94c5c8c864def6815b854&activeTabKey=api|ListDataSourceLogs)获取数据源ID。',
            'type' => 'string',
            'required' => true,
            'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123xxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<DeleteDataSourceLogResult>',
            'description' => 'CloudSiemSuccessResponse<DeleteDataSourceLogResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '删除的日志的数量，等于1表示成功，小于等于0表示失败。',
                    'description' => '删除的日志的数量，等于1表示成功，小于等于0表示失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'LogInstanceId' => 
                  array (
                    'title' => '日志ID，由威胁分析根据具体参数计算md5生成。',
                    'description' => '日志ID，由威胁分析根据具体参数计算md5生成。',
                    'type' => 'string',
                    'example' => 'ef33097c9d1fdb0b9c7e8c7ca320pkl1',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Count\\": 1,\\n    \\"LogInstanceId\\": \\"ef33097c9d1fdb0b9c7e8c7ca320pkl1\\"\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '删除日志',
    ),
    'DeleteDataSource' => 
    array (
      'summary' => '如果已添加的数据源不再使用，可以调用接口删除数据源。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataSourceInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
            'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。可调用[ListDataSourceLogs](https://api.aliyun-inc.com/#/publishment/document/cloud-siem/863fdf54478f4cc5877e27c2a5fe9e44?tenantUuid=f382fccd88b94c5c8c864def6815b854&activeTabKey=api|ListDataSourceLogs)获取数据源ID。',
            'type' => 'string',
            'required' => true,
            'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<DeleteDataSourceResult>',
            'description' => 'CloudSiemSuccessResponse<DeleteDataSourceResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '删除的数据源的数量，等于1表示成功，小于等于0表示失败。',
                    'description' => '删除的数据源的数量，等于1表示成功，小于等于0表示失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Count\\": 1\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '删除数据源',
    ),
    'DeleteBindAccount' => 
    array (
      'summary' => '解除已经绑定到威胁分析数据源模块的多云（腾讯云、华为云）子账号AK，解绑后可以更换账号重新绑定。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BindId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '绑定ID。',
            'description' => '绑定ID。可调用[ListBindAccount](https://api.aliyun-inc.com/#/publishment/document/cloud-siem/863fdf54478f4cc5877e27c2a5fe9e44?tenantUuid=f382fccd88b94c5c8c864def6815b854&activeTabKey=api|ListBindAccount)获取绑定ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'AccessId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号AccessKeyId。',
            'description' => '云账号AccessKeyId。',
            'type' => 'string',
            'required' => true,
            'example' => 'ABCXXXXXXXX',
          ),
        ),
        3 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<DeleteBindAccountResult>',
            'description' => 'CloudSiemSuccessResponse<DeleteBindAccountResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '删除账号绑定的数量，等于1表示成功，小于等于0表示失败。',
                    'description' => '删除账号绑定的数量，等于1表示成功，小于等于0表示失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Count\\": 1\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '删除已经绑定的多云账号',
    ),
    'BindAccount' => 
    array (
      'summary' => '绑定云安全中心功能设置-多云资产中设置的多云账号到威胁分析。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号AccessKeyId。',
            'description' => '云账号ACCESS_KEY_ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ABCXXXXXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云账号名称。',
            'description' => '多云账号名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123xxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。取值：
- aliyun：阿里云
- hcloud：华为云
- qcloud：腾讯云',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<BindAccountResult>',
            'description' => 'CloudSiemResponse<BindAccountResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '威胁分析服务返回的具体内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '添加账号绑定的数量，等于1表示成功，小于等于0表示失败。',
                    'description' => '添加账号绑定的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'access ak "%s" already bound.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Count\\": 1\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '绑定多云账号',
    ),
    'AddUserSourceLogConfig' => 
    array (
      'summary' => '添加日志接入任务，将对应的日志数据接入到威胁分析中以便后续的告警、事件分析。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceProdCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品code。',
            'description' => '产品code。',
            'type' => 'string',
            'required' => false,
            'example' => 'sas',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceLogCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '日志code。',
            'description' => '日志code。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_siem_aegis_proc',
          ),
        ),
        2 => 
        array (
          'name' => 'SubUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '需要接入日志的阿里云账号ID。',
            'description' => '需要接入日志的阿里云账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123XXXXXX',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceLogInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '需要接入日志的详细SLS信息，json数组格式。',
            'description' => '需要接入日志的详细SLS信息，json格式。',
            'type' => 'string',
            'required' => true,
            'example' => '{"project":"wafnew-project-1335759343513432-cn-hangzhou","logStore":"wafnew-logstore","regionCode":"cn-hangzhou","prodCode":"waf"}',
          ),
        ),
        4 => 
        array (
          'name' => 'DisPlayLine',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '需要接入日志的详细SLS信息。',
            'description' => '需要接入日志的详细SLS信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai.siem-project.siem-logstore',
          ),
        ),
        5 => 
        array (
          'name' => 'Deleted',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '添加接入或删除接入。取值：
-1：删除接入 
0：添加接入',
            'description' => '添加接入或删除接入。取值：
 - -1：删除接入
 - 0：添加接入',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<UserSourceLogResult>',
            'description' => 'CloudSiemSuccessResponse<UserSourceLogResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'DiplayLine' => 
                  array (
                    'title' => '需要接入日志的详细SLS信息。',
                    'description' => '需要接入日志的详细SLS信息。',
                    'type' => 'string',
                    'example' => 'cn-shanghai.siem-project.siem-logstore',
                  ),
                  'SourceProdCode' => 
                  array (
                    'title' => '产品code。',
                    'description' => '产品code。',
                    'type' => 'string',
                    'example' => 'sas',
                  ),
                  'SourceLogCode' => 
                  array (
                    'title' => '日志code。',
                    'description' => '日志code。',
                    'type' => 'string',
                    'example' => 'cloud_siem_aegis_proc',
                  ),
                  'Displayed' => 
                  array (
                    'title' => '返回接入详细信息。取值：
 - true：已接入。
 - 未接入：false。',
                    'description' => '返回接入详细信息。
已返回 ：true
未返回：false',
                    'type' => 'boolean',
                    'example' => '0',
                  ),
                  'Imported' => 
                  array (
                    'title' => '是否已经接入。取值：
 - true：已接入。
 - 未接入：false。',
                    'description' => '是否已经接入。
 已接入：true
未接入：false',
                    'type' => 'boolean',
                    'example' => '0',
                  ),
                  'MainUserId' => 
                  array (
                    'title' => '购买威胁分析的阿里云账号ID。',
                    'description' => '购买威胁分析的阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123XXXXXXXXX',
                  ),
                  'SubUserId' => 
                  array (
                    'title' => '威胁分析阿里云账号ID。',
                    'description' => '威胁分析阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123XXXXXXXX',
                  ),
                  'SubUserName' => 
                  array (
                    'title' => '威胁分析阿里云账号名字。',
                    'description' => '威胁分析阿里云账号名字。',
                    'type' => 'string',
                    'example' => 'sas_account_xxx',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"DiplayLine\\": \\"cn-shanghai.siem-project.siem-logstore\\",\\n    \\"SourceProdCode\\": \\"sas\\",\\n    \\"SourceLogCode\\": \\"cloud_siem_aegis_proc\\",\\n    \\"Displayed\\": true,\\n    \\"Imported\\": true,\\n    \\"MainUserId\\": 0,\\n    \\"SubUserId\\": 0,\\n    \\"SubUserName\\": \\"sas_account_xxx\\"\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '添加日志接入',
    ),
    'AddDataSourceLog' => 
    array (
      'summary' => '添加日志。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LogCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '日志code。',
            'description' => '日志code。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_siem_waf_xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceInstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
            'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。可调用[ListDataSourceLogs](https://api.aliyun-inc.com/#/publishment/document/cloud-siem/863fdf54478f4cc5877e27c2a5fe9e44?tenantUuid=f382fccd88b94c5c8c864def6815b854&activeTabKey=api|ListDataSourceLogs)获取数据源ID。',
            'type' => 'string',
            'required' => true,
            'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceInstanceLogs',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源参数详情，json数组格式。',
            'description' => '数据源参数详情，json数组格式。',
            'type' => 'string',
            'required' => true,
            'example' => '[{"LogCode":"cloud_siem_qcloud_waf_alert_log","LogParas":"[{\\"ParaCode\\":\\"api_name\\",\\"ParaValue\\":\\"GetAttackDownloadRecords\\"}]"}]',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123xxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<AddDataSourceLogResult>',
            'description' => 'CloudSiemSuccessResponse<AddDataSourceLogResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '添加的日志的数量，等于1表示成功，小于等于0表示失败。',
                    'description' => '添加的日志的数量，等于1表示成功，小于等于0表示失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'LogInstanceId' => 
                  array (
                    'title' => '日志ID，由威胁分析根据具体参数计算md5生成。',
                    'description' => '日志ID，由威胁分析根据具体参数计算md5生成。',
                    'type' => 'string',
                    'example' => 'ef33097c9d1fdb0b9c7e8c7ca320pkl1',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Count\\": 1,\\n    \\"LogInstanceId\\": \\"ef33097c9d1fdb0b9c7e8c7ca320pkl1\\"\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '添加日志',
    ),
    'AddDataSource' => 
    array (
      'summary' => '在该绑定的多云账号下添加数据源。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云账号ID。',
            'description' => '云账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123xxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'DataSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源类型。取值：
 - obs：华为云obs。
 - wafApi：腾讯云waf下载api。 
 - ckafka： 腾讯云ckafka。',
            'description' => '数据源类型。取值：
 - obs：华为云obs。
 - wafApi：腾讯云waf下载api。 
 - ckafka： 腾讯云ckafka。',
            'type' => 'string',
            'required' => false,
            'example' => 'obs',
          ),
        ),
        2 => 
        array (
          'name' => 'DataSourceInstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源名称。',
            'description' => '数据源名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'XX北京kafka',
          ),
        ),
        3 => 
        array (
          'name' => 'DataSourceInstanceRemark',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源备注。',
            'description' => '数据源备注。',
            'type' => 'string',
            'required' => false,
            'example' => 'XX云云防火墙上海实例',
          ),
        ),
        4 => 
        array (
          'name' => 'DataSourceInstanceParams',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '数据源参数，json数组格式。',
            'description' => '数据源参数，json数组格式。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"paraCode":"region_code","paraValue":"ap-guangzhou"}]',
          ),
        ),
        5 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<AddDataSourceResult>',
            'description' => 'CloudSiemSuccessResponse<AddDataSourceResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '添加数据源的数量，等于1表示成功，小于等于0表示失败。',
                    'description' => '添加数据源的数量，等于1表示成功，小于等于0表示失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'DataSourceInstanceId' => 
                  array (
                    'title' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
                    'description' => '数据源ID，由威胁分析根据具体参数计算md5生成。',
                    'type' => 'string',
                    'example' => '220ba97c9d1fdb0b9c7e8c7ca328d7ea',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Count\\": 1,\\n    \\"DataSourceInstanceId\\": \\"220ba97c9d1fdb0b9c7e8c7ca328d7ea\\"\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '添加数据源',
    ),
    'ListBindAccount' => 
    array (
      'summary' => '列举已经绑定到威胁分析的多云账号列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => '已经绑定的账号列表。',
            'description' => '列举已经绑定的账号。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '结果集。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AccountName' => 
                    array (
                      'title' => '账号名称。',
                      'description' => '账号名称。',
                      'type' => 'string',
                      'example' => 'XXXX公司',
                    ),
                    'AccessId' => 
                    array (
                      'title' => '已经绑定ACCESS_KEY_ID。',
                      'description' => '账号的AccessId。',
                      'type' => 'string',
                      'example' => 'ABCXXXXXXXX',
                    ),
                    'DataSourceCount' => 
                    array (
                      'title' => '该账号下绑定数据源的数量。',
                      'description' => '该账号下绑定数据源的数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'ModifyTime' => 
                    array (
                      'title' => '修改时间。',
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2023-11-10 12:20:35',
                    ),
                    'CreateUser' => 
                    array (
                      'title' => '该账号绑定者。',
                      'description' => '该账号绑定者。',
                      'type' => 'string',
                      'example' => '123xxxxxxx',
                    ),
                    'BindId' => 
                    array (
                      'title' => '绑定ID。',
                      'description' => '绑定ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123xxxxxxx',
                    ),
                    'AccountId' => 
                    array (
                      'title' => '云账号ID。',
                      'description' => '云账号ID。',
                      'type' => 'string',
                      'example' => '123xxxxxxx',
                    ),
                    'CloudCode' => 
                    array (
                      'title' => '多云的code。',
                      'description' => '多云的code。取值：
- qcloud：腾讯云。
- aliyun：阿里云。
- hcloud：华为云。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'hcloud',
                      'enum' => 
                      array (
                        0 => 'qcloud',
                        1 => 'hcloud',
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"AccountName\\": \\"XXXX公司\\",\\n      \\"AccessId\\": \\"ABCXXXXXXXX\\",\\n      \\"DataSourceCount\\": 2,\\n      \\"ModifyTime\\": \\"2023-11-10 12:20:35\\",\\n      \\"CreateUser\\": \\"123xxxxxxx\\",\\n      \\"BindId\\": 0,\\n      \\"AccountId\\": \\"123xxxxxxx\\",\\n      \\"CloudCode\\": \\"hcloud\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '列举已经绑定的账号列表',
    ),
    'ListAccountAccessId' => 
    array (
      'summary' => '查看已经绑定的多云AccessKeyId列表。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<List<ListAccountAccessIdResult>>',
            'description' => 'CloudSiemSuccessResponse<List<ListAccountAccessIdResult>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求返回值。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SubUserId' => 
                    array (
                      'title' => '多云AccessKeyId对应的阿里云账号ID。',
                      'description' => '多云AccessKeyId对应的阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => 'ABCXXXXXXXX',
                    ),
                    'AccessIdMd5' => 
                    array (
                      'title' => '多云AccessKeyId对应的MD5值。',
                      'description' => '多云AccessKeyId对应的MD5值。',
                      'type' => 'string',
                      'example' => 'abcXXXXXXXX',
                    ),
                    'AccountStr' => 
                    array (
                      'title' => '多云AccessKeyId所属的账号信息，格式为阿里云账号ID|阿里云账号名称|多云AccessKeyId。',
                      'description' => '多云AccessKeyId所属的账号信息，格式为阿里云账号ID|阿里云账号名称|多云AccessKeyId。',
                      'type' => 'string',
                      'example' => '123xxxxxx|xxxx|ABCXXXXX',
                    ),
                    'Bound' => 
                    array (
                      'title' => '该AccessKeyId是否已经被绑定到威胁分析。取值：
 - 0 : 未绑定。
 - 1：已绑定。',
                      'description' => '该AccessKeyId是否已经被绑定到威胁分析。取值：
 - 0 : 未绑定。
 - 1：已绑定。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'AccessId' => 
                    array (
                      'title' => '已经绑定ACCESS_KEY_ID。',
                      'description' => '已经绑定ACCESS_KEY_ID。',
                      'type' => 'string',
                      'example' => 'ABCXXXXXXXX',
                    ),
                    'AccountId' => 
                    array (
                      'title' => '云账号ID。',
                      'description' => '云账号ID。',
                      'type' => 'string',
                      'example' => '123xxxxxxx',
                    ),
                    'CloudCode' => 
                    array (
                      'title' => '多云的code。',
                      'description' => '多云的code。',
                      'type' => 'string',
                      'example' => 'hcloud',
                      'enum' => 
                      array (
                        0 => 'qcloud',
                        1 => 'hcloud',
                      ),
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'title' => '本次请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '本次请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => 'HTTP状态码。',
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '返回消息描述。',
                'description' => '返回消息描述。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"SubUserId\\": 0,\\n      \\"AccessIdMd5\\": \\"abcXXXXXXXX\\",\\n      \\"AccountStr\\": \\"123xxxxxx|xxxx|ABCXXXXX\\",\\n      \\"Bound\\": 1,\\n      \\"AccessId\\": \\"ABCXXXXXXXX\\",\\n      \\"AccountId\\": \\"123xxxxxxx\\",\\n      \\"CloudCode\\": \\"hcloud\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看已绑定AK列表',
    ),
    'SubmitImportLogTasks' => 
    array (
      'summary' => '批量提交接入任务。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProdCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品的code。',
            'description' => '产品的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'qcloud_waf',
          ),
        ),
        1 => 
        array (
          'name' => 'LogCodes',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '提交接入的日志列表，json数组格式。',
            'description' => '提交接入的日志列表，json数组格式。',
            'type' => 'string',
            'required' => false,
            'example' => '["cloud_siem_qcloud_cfw_alert_log"]',
          ),
        ),
        2 => 
        array (
          'name' => 'Accounts',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '提交接入的账号列表，json数组格式。取值：
 - AccountId：待接入的账号ID。 
 - Imported：
 - 0：取消接入。 
 - 1：接入。',
            'description' => '提交接入的账号列表，json数组格式。取值：
 - AccountId：待接入的账号ID。 
 - Imported：是否接入/取消接入该账号。取值：
   - 0：取消接入。 
   - 1：接入。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"AccountId":"123123","Imported":1}]',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoImported',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否自动接入配置了该日志的账号。取值：
 - 1：自动接入。 
 - 0：不自动接入。',
            'description' => '是否自动接入配置了该日志的账号。取值：
 - 1：自动接入。 
 - 0：不自动接入。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'CloudCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '多云的code。',
            'description' => '多云的code。',
            'type' => 'string',
            'required' => true,
            'example' => 'hcloud',
            'enum' => 
            array (
              0 => 'qcloud',
              1 => 'hcloud',
              2 => 'aliyun',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<SubmitImportLogTasksResult>',
            'description' => 'CloudSiemSuccessResponse<SubmitImportLogTasksResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Count' => 
                  array (
                    'title' => '成功提交的日志接入任务数量。',
                    'description' => '成功提交的日志接入任务数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Count\\": 10\\n  },\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '提交接入任务',
    ),
    'DescribeCsImportedProdStatusByUser' => 
    array (
      'summary' => '查看阿里云产品的开通情况。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '待查询的云账号ID。',
            'description' => '待查询的阿里云账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123XXXXXX',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceLogProd',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品code。',
            'description' => '产品code。',
            'type' => 'string',
            'required' => false,
            'example' => 'sas',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemSuccessResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '是否已经开通对应产品。取值：
- true：已开通。
- false：未开通。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-*****-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"6276D891-*****-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '查看用户的阿里云产品开通情况',
    ),
    'DescribeAlertsWithEntity' => 
    array (
      'summary' => '获取实体关联的告警列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件全局唯一ID。',
            'description' => '事件全局唯一ID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'SophonTaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'soar处置策略ID。',
            'description' => 'SOAR处置策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => '577bbf90-a770-44a7-8154-586aa2d318fa',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体ID。',
            'description' => '实体ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号， 大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数， 最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<AlertDetail>>',
            'description' => 'PageResponse<List<AlertDetail>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '告警唯一ID。',
                          'description' => '告警唯一ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123456789',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '告警入库时间。',
                          'description' => '告警入库时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '告警最后更新时间。',
                          'description' => '告警最后更新时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'MainUserId' => 
                        array (
                          'title' => '告警关联siem主账号ID。',
                          'description' => '告警关联siem主账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '127608589417****',
                        ),
                        'IncidentUuid' => 
                        array (
                          'title' => '事件全局唯一id。',
                          'description' => '事件全局唯一UUID。',
                          'type' => 'string',
                          'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
                        ),
                        'AlertUuid' => 
                        array (
                          'title' => '告警id。',
                          'description' => '告警UUID。',
                          'type' => 'string',
                          'example' => 'sas_71e24437d2797ce8fc59692905a4****',
                        ),
                        'LogTime' => 
                        array (
                          'title' => '告警记录时间。',
                          'description' => '告警记录时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'AlertSrcProd' => 
                        array (
                          'title' => '事件关联告警来源产品。',
                          'description' => '事件关联告警来源产品。',
                          'type' => 'string',
                          'example' => 'sas',
                        ),
                        'AlertTitle' => 
                        array (
                          'title' => '告警标题。',
                          'description' => '告警标题。',
                          'type' => 'string',
                          'example' => 'Scan-Try SNMP weak password',
                        ),
                        'AlertTitleEn' => 
                        array (
                          'title' => '告警标题英文。',
                          'description' => '告警标题英文。',
                          'type' => 'string',
                          'example' => 'Scan-Try SNMP weak password',
                        ),
                        'AlertType' => 
                        array (
                          'title' => '告警类型。',
                          'description' => '告警类型。',
                          'type' => 'string',
                          'example' => 'Scan',
                        ),
                        'AlertTypeEn' => 
                        array (
                          'title' => '告警类型英文。',
                          'description' => '告警类型英文。',
                          'type' => 'string',
                          'example' => 'Scan',
                        ),
                        'AlertTypeCode' => 
                        array (
                          'title' => '告警类型美杜莎code。',
                          'description' => '告警类型美杜莎code。',
                          'type' => 'string',
                          'example' => 'security_event_config.event_name.webshellName',
                        ),
                        'AlertName' => 
                        array (
                          'title' => '告警名称。',
                          'description' => '告警名称。',
                          'type' => 'string',
                          'example' => 'Try SNMP weak password',
                        ),
                        'AlertNameEn' => 
                        array (
                          'title' => '告警名称。',
                          'description' => '告警名称。',
                          'type' => 'string',
                          'example' => 'Try SNMP weak password',
                        ),
                        'AlertNameCode' => 
                        array (
                          'title' => '告警名称美杜莎code。',
                          'description' => '告警名称美杜莎code。',
                          'type' => 'string',
                          'example' => 'security_event_config.event_name.webshell',
                        ),
                        'AlertLevel' => 
                        array (
                          'title' => '威胁等级。 取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'description' => '威胁等级。 取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'type' => 'string',
                          'example' => 'remind',
                        ),
                        'AssetList' => 
                        array (
                          'title' => '资产列表。',
                          'description' => '资产列表。',
                          'type' => 'string',
                          'example' => '[
      {
            "is_main_asset": "1",
            "asset_name": "47.245.*",
            "port": "22",
            "ip": "47.245.*",
            "asset_type": "ip",
            "location": "ap-southeast-1",
            "asset_id": "47.245.*",
            "net_connect_dir": "in"
      }
]',
                        ),
                        'OccurTime' => 
                        array (
                          'title' => '告警发生时间。',
                          'description' => '告警发生时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'StartTime' => 
                        array (
                          'title' => '告警首次发生时间。',
                          'description' => '告警首次发生时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'EndTime' => 
                        array (
                          'title' => '告警结束时间。',
                          'description' => '告警结束时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'AlertSrcProdModule' => 
                        array (
                          'title' => '事件关联告警来源产品子模块。',
                          'description' => '事件关联告警来源产品子模块。',
                          'type' => 'string',
                          'example' => 'waf',
                        ),
                        'AlertDesc' => 
                        array (
                          'title' => '告警描述。',
                          'description' => '告警描述。',
                          'type' => 'string',
                          'example' => 'The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.',
                        ),
                        'AlertDescEn' => 
                        array (
                          'title' => '告警英文描述。',
                          'description' => '告警英文描述。',
                          'type' => 'string',
                          'example' => 'The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.',
                        ),
                        'AlertDescCode' => 
                        array (
                          'title' => '告警描述美杜莎code。',
                          'description' => '告警描述美杜莎code。',
                          'type' => 'string',
                          'example' => 'security_event_config.event_name.webshell
',
                        ),
                        'AlertDetail' => 
                        array (
                          'title' => '告警详情。',
                          'description' => '告警详情。',
                          'type' => 'string',
                          'example' => '{"main_user_id": "165295629792****";"log_uuid_count": "99";"attack_ip": "21.92.*.*"}',
                        ),
                        'LogUuid' => 
                        array (
                          'title' => '告警log UUID。',
                          'description' => '告警日志UUID。',
                          'type' => 'string',
                          'example' => 'cfw_d12e285a-a042-4d7e-be89-f8a795ef****',
                        ),
                        'AttCk' => 
                        array (
                          'title' => 'ATTCT&攻击技术标签。',
                          'description' => 'ATTCT&攻击技术标签。',
                          'type' => 'string',
                          'example' => 'T1595.002 Vulnerability Scanning',
                        ),
                        'SubUserId' => 
                        array (
                          'title' => '产生告警阿里账号ID。',
                          'description' => '产生告警阿里账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '176555323***',
                        ),
                        'CloudCode' => 
                        array (
                          'title' => '云code。  取值：
- aliyun：阿里云
- qcloud：腾讯云
- hcloud：华为云',
                          'description' => '云code。  取值：
- aliyun：阿里云
- qcloud：腾讯云
- hcloud：华为云',
                          'type' => 'string',
                          'example' => 'aliyun',
                        ),
                        'IsDefend' => 
                        array (
                          'title' => '是否已防御',
                          'description' => '是否已防御。取值：

- 0：检出
- 1：拦截',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'AlertInfoList' => 
                        array (
                          'title' => '告警详细数据。',
                          'description' => '告警详细数据。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'title' => '告警详细属性key。',
                                'description' => '告警详细属性key。',
                                'type' => 'string',
                                'example' => 'suspicious.wbd.wb.trojanpath',
                              ),
                              'KeyName' => 
                              array (
                                'title' => '告警详细数据名称。',
                                'description' => '告警详细数据名称。',
                                'type' => 'string',
                                'example' => 'Trojan Path
',
                              ),
                              'Values' => 
                              array (
                                'title' => '告警详细数据值。',
                                'description' => '告警详细数据值。',
                                'type' => 'string',
                                'example' => '/root/test33.php',
                              ),
                            ),
                          ),
                          'example' => 'aliyun',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"Id\\": 123456789,\\n        \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n        \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n        \\"MainUserId\\": 0,\\n        \\"IncidentUuid\\": \\"85ea4241-798f-4684-a876-65d4f0c3****\\",\\n        \\"AlertUuid\\": \\"sas_71e24437d2797ce8fc59692905a4****\\",\\n        \\"LogTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"AlertSrcProd\\": \\"sas\\",\\n        \\"AlertTitle\\": \\"Scan-Try SNMP weak password\\",\\n        \\"AlertTitleEn\\": \\"Scan-Try SNMP weak password\\",\\n        \\"AlertType\\": \\"Scan\\",\\n        \\"AlertTypeEn\\": \\"Scan\\",\\n        \\"AlertTypeCode\\": \\"security_event_config.event_name.webshellName\\",\\n        \\"AlertName\\": \\"Try SNMP weak password\\",\\n        \\"AlertNameEn\\": \\"Try SNMP weak password\\",\\n        \\"AlertNameCode\\": \\"security_event_config.event_name.webshell\\",\\n        \\"AlertLevel\\": \\"remind\\",\\n        \\"AssetList\\": \\"[\\\\n      {\\\\n            \\\\\\"is_main_asset\\\\\\": \\\\\\"1\\\\\\",\\\\n            \\\\\\"asset_name\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"port\\\\\\": \\\\\\"22\\\\\\",\\\\n            \\\\\\"ip\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"asset_type\\\\\\": \\\\\\"ip\\\\\\",\\\\n            \\\\\\"location\\\\\\": \\\\\\"ap-southeast-1\\\\\\",\\\\n            \\\\\\"asset_id\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"net_connect_dir\\\\\\": \\\\\\"in\\\\\\"\\\\n      }\\\\n]\\",\\n        \\"OccurTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"StartTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"EndTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"AlertSrcProdModule\\": \\"waf\\",\\n        \\"AlertDesc\\": \\"The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.\\",\\n        \\"AlertDescEn\\": \\"The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.\\",\\n        \\"AlertDescCode\\": \\"security_event_config.event_name.webshell\\\\n\\",\\n        \\"AlertDetail\\": \\"{\\\\\\"main_user_id\\\\\\": \\\\\\"165295629792****\\\\\\";\\\\\\"log_uuid_count\\\\\\": \\\\\\"99\\\\\\";\\\\\\"attack_ip\\\\\\": \\\\\\"21.92.*.*\\\\\\"}\\",\\n        \\"LogUuid\\": \\"cfw_d12e285a-a042-4d7e-be89-f8a795ef****\\",\\n        \\"AttCk\\": \\"T1595.002 Vulnerability Scanning\\",\\n        \\"SubUserId\\": 0,\\n        \\"CloudCode\\": \\"aliyun\\",\\n        \\"IsDefend\\": \\"1\\",\\n        \\"AlertInfoList\\": [\\n          {\\n            \\"Key\\": \\"suspicious.wbd.wb.trojanpath\\",\\n            \\"KeyName\\": \\"Trojan Path\\\\n\\",\\n            \\"Values\\": \\"/root/test33.php\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取实体关联告警列表',
    ),
    'DescribeAlerts' => 
    array (
      'summary' => '获取用户的告警列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AlertUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件关联告警ID。',
            'description' => '事件关联告警ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'sas_71e24437d2797ce8fc59692905a4****',
          ),
        ),
        1 => 
        array (
          'name' => 'Level',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'description' => '威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'type' => 'array',
            'items' => 
            array (
              'description' => '威胁等级，格式为json数组。取值：

- serious：高危
- suspicious：中危
- remind：低危',
              'type' => 'string',
              'required' => false,
              'example' => '["remind","serious"]',
            ),
            'required' => false,
            'example' => '["serious","suspicious","remind"]',
            'maxItems' => 100,
          ),
        ),
        2 => 
        array (
          'name' => 'Source',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件关联告警来源产品。',
            'description' => '事件关联告警来源产品。',
            'type' => 'string',
            'required' => false,
            'example' => 'sas',
          ),
        ),
        3 => 
        array (
          'name' => 'IsDefend',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否已防御',
            'description' => '是否已防御。取值：

- 0：检出
- 1：拦截',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'AlertTitle',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警标题。',
            'description' => '告警标题。',
            'type' => 'string',
            'required' => false,
            'example' => 'Unusual Logon-login_common_account',
          ),
        ),
        5 => 
        array (
          'name' => 'SubUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警史记关联阿里账号ID。',
            'description' => '告警实际关联阿里账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => '176555323***',
          ),
        ),
        6 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间, 单位毫秒。',
            'description' => '查询开始时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间, 单位毫秒。',
            'description' => '查询结束时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        8 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号， 大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数， 最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        10 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        12 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<AlertDetail>>',
            'description' => 'PageResponse<List<AlertDetail>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '告警唯一ID。',
                          'description' => '告警唯一ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123456789',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '告警入库时间。',
                          'description' => '告警入库时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '告警最后更新时间。',
                          'description' => '告警最后更新时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'MainUserId' => 
                        array (
                          'title' => '告警关联siem主账号ID。',
                          'description' => '告警关联siem主账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '127608589417****',
                        ),
                        'IncidentUuid' => 
                        array (
                          'title' => '事件全局唯一id。',
                          'description' => '事件全局唯一UUID。',
                          'type' => 'string',
                          'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
                        ),
                        'AlertUuid' => 
                        array (
                          'title' => '告警id。',
                          'description' => '告警UUID。',
                          'type' => 'string',
                          'example' => 'sas_71e24437d2797ce8fc59692905a4****',
                        ),
                        'LogTime' => 
                        array (
                          'title' => '告警记录时间。',
                          'description' => '告警记录时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'AlertSrcProd' => 
                        array (
                          'title' => '事件关联告警来源产品。',
                          'description' => '事件关联告警来源产品。',
                          'type' => 'string',
                          'example' => 'sas',
                        ),
                        'AlertTitle' => 
                        array (
                          'title' => '告警标题。',
                          'description' => '告警标题。',
                          'type' => 'string',
                          'example' => 'Scan-Try SNMP weak password',
                        ),
                        'AlertTitleEn' => 
                        array (
                          'title' => '告警标题英文。',
                          'description' => '告警标题英文。',
                          'type' => 'string',
                          'example' => 'Scan-Try SNMP weak password',
                        ),
                        'AlertType' => 
                        array (
                          'title' => '告警类型。',
                          'description' => '告警类型。',
                          'type' => 'string',
                          'example' => 'Scan',
                        ),
                        'AlertTypeEn' => 
                        array (
                          'title' => '告警类型英文。',
                          'description' => '告警类型英文。',
                          'type' => 'string',
                          'example' => 'Scan',
                        ),
                        'AlertTypeCode' => 
                        array (
                          'title' => '告警类型美杜莎code。',
                          'description' => '告警类型美杜莎code。',
                          'type' => 'string',
                          'example' => 'security_event_config.event_name.webshellName',
                        ),
                        'AlertName' => 
                        array (
                          'title' => '告警名称。',
                          'description' => '告警名称。',
                          'type' => 'string',
                          'example' => 'Try SNMP weak password',
                        ),
                        'AlertNameEn' => 
                        array (
                          'title' => '告警名称。',
                          'description' => '告警名称英文。',
                          'type' => 'string',
                          'example' => 'Try SNMP weak password',
                        ),
                        'AlertNameCode' => 
                        array (
                          'title' => '告警名称美杜莎code。',
                          'description' => '告警名称美杜莎code。',
                          'type' => 'string',
                          'example' => 'security_event_config.event_name.webshell',
                        ),
                        'AlertLevel' => 
                        array (
                          'title' => '威胁等级。 取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'description' => '威胁等级。 取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'type' => 'string',
                          'example' => 'remind',
                        ),
                        'AssetList' => 
                        array (
                          'title' => '资产列表。',
                          'description' => '资产列表。',
                          'type' => 'string',
                          'example' => '[
      {
            "is_main_asset": "1",
            "asset_name": "47.245.*",
            "port": "22",
            "ip": "47.245.*",
            "asset_type": "ip",
            "location": "ap-southeast-1",
            "asset_id": "47.245.*",
            "net_connect_dir": "in"
      }
]',
                        ),
                        'OccurTime' => 
                        array (
                          'title' => '告警发生时间。',
                          'description' => '告警发生时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'StartTime' => 
                        array (
                          'title' => '告警首次发生时间。',
                          'description' => '告警首次发生时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'EndTime' => 
                        array (
                          'title' => '告警结束时间。',
                          'description' => '告警结束时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'AlertSrcProdModule' => 
                        array (
                          'title' => '事件关联告警来源产品子模块。',
                          'description' => '事件关联告警来源产品子模块。',
                          'type' => 'string',
                          'example' => 'waf',
                        ),
                        'AlertDesc' => 
                        array (
                          'title' => '告警描述。',
                          'description' => '告警描述。',
                          'type' => 'string',
                          'example' => 'The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.',
                        ),
                        'AlertDescEn' => 
                        array (
                          'title' => '告警英文描述。',
                          'description' => '告警英文描述。',
                          'type' => 'string',
                          'example' => 'The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.',
                        ),
                        'AlertDescCode' => 
                        array (
                          'title' => '告警描述美杜莎code。',
                          'description' => '告警描述美杜莎code。',
                          'type' => 'string',
                          'example' => 'security_event_config.event_name.webshell',
                        ),
                        'AlertDetail' => 
                        array (
                          'title' => '告警详情。',
                          'description' => '告警详情。',
                          'type' => 'string',
                          'example' => '{"main_user_id": "165295629792****";"log_uuid_count": "99";"attack_ip": "21.92.*.*"}',
                        ),
                        'LogUuid' => 
                        array (
                          'title' => '告警log UUID。',
                          'description' => '告警日志UUID。',
                          'type' => 'string',
                          'example' => 'cfw_d12e285a-a042-4d7e-be89-f8a795ef****',
                        ),
                        'AttCk' => 
                        array (
                          'title' => 'ATTCT&攻击技术标签。',
                          'description' => 'ATTCT&攻击技术标签。',
                          'type' => 'string',
                          'example' => 'T1595.002 Vulnerability Scanning',
                        ),
                        'SubUserId' => 
                        array (
                          'title' => '产生告警阿里账号ID。',
                          'description' => '产生告警阿里账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '176555323***',
                        ),
                        'CloudCode' => 
                        array (
                          'title' => '云code。  取值：
- aliyun：阿里云
- qcloud：腾讯云
- hcloud：华为云',
                          'description' => '云code。  取值：
- aliyun：阿里云
- qcloud：腾讯云
- hcloud：华为云',
                          'type' => 'string',
                          'example' => 'aliyun',
                        ),
                        'IsDefend' => 
                        array (
                          'title' => '是否已防御',
                          'description' => '是否已防御。取值：

- 0：检出
- 1：拦截',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'AlertInfoList' => 
                        array (
                          'title' => '告警详细数据。',
                          'description' => '告警详细数据。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'title' => '告警详细属性key。',
                                'description' => '告警详细属性key。',
                                'type' => 'string',
                                'example' => 'suspicious.wbd.wb.trojanpath',
                              ),
                              'KeyName' => 
                              array (
                                'title' => '告警详细数据名称。',
                                'description' => '告警详细数据名称。',
                                'type' => 'string',
                                'example' => 'Trojan Path',
                              ),
                              'Values' => 
                              array (
                                'title' => '告警详细数据值。',
                                'description' => '告警详细数据值。',
                                'type' => 'string',
                                'example' => '/root/test33.php',
                              ),
                            ),
                          ),
                          'example' => 'aliyun',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"Id\\": 123456789,\\n        \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n        \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n        \\"MainUserId\\": 0,\\n        \\"IncidentUuid\\": \\"85ea4241-798f-4684-a876-65d4f0c3****\\",\\n        \\"AlertUuid\\": \\"sas_71e24437d2797ce8fc59692905a4****\\",\\n        \\"LogTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"AlertSrcProd\\": \\"sas\\",\\n        \\"AlertTitle\\": \\"Scan-Try SNMP weak password\\",\\n        \\"AlertTitleEn\\": \\"Scan-Try SNMP weak password\\",\\n        \\"AlertType\\": \\"Scan\\",\\n        \\"AlertTypeEn\\": \\"Scan\\",\\n        \\"AlertTypeCode\\": \\"security_event_config.event_name.webshellName\\",\\n        \\"AlertName\\": \\"Try SNMP weak password\\",\\n        \\"AlertNameEn\\": \\"Try SNMP weak password\\",\\n        \\"AlertNameCode\\": \\"security_event_config.event_name.webshell\\",\\n        \\"AlertLevel\\": \\"remind\\",\\n        \\"AssetList\\": \\"[\\\\n      {\\\\n            \\\\\\"is_main_asset\\\\\\": \\\\\\"1\\\\\\",\\\\n            \\\\\\"asset_name\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"port\\\\\\": \\\\\\"22\\\\\\",\\\\n            \\\\\\"ip\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"asset_type\\\\\\": \\\\\\"ip\\\\\\",\\\\n            \\\\\\"location\\\\\\": \\\\\\"ap-southeast-1\\\\\\",\\\\n            \\\\\\"asset_id\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"net_connect_dir\\\\\\": \\\\\\"in\\\\\\"\\\\n      }\\\\n]\\",\\n        \\"OccurTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"StartTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"EndTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"AlertSrcProdModule\\": \\"waf\\",\\n        \\"AlertDesc\\": \\"The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.\\",\\n        \\"AlertDescEn\\": \\"The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.\\",\\n        \\"AlertDescCode\\": \\"security_event_config.event_name.webshell\\",\\n        \\"AlertDetail\\": \\"{\\\\\\"main_user_id\\\\\\": \\\\\\"165295629792****\\\\\\";\\\\\\"log_uuid_count\\\\\\": \\\\\\"99\\\\\\";\\\\\\"attack_ip\\\\\\": \\\\\\"21.92.*.*\\\\\\"}\\",\\n        \\"LogUuid\\": \\"cfw_d12e285a-a042-4d7e-be89-f8a795ef****\\",\\n        \\"AttCk\\": \\"T1595.002 Vulnerability Scanning\\",\\n        \\"SubUserId\\": 0,\\n        \\"CloudCode\\": \\"aliyun\\",\\n        \\"IsDefend\\": \\"1\\",\\n        \\"AlertInfoList\\": [\\n          {\\n            \\"Key\\": \\"suspicious.wbd.wb.trojanpath\\",\\n            \\"KeyName\\": \\"Trojan Path\\",\\n            \\"Values\\": \\"/root/test33.php\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取告警列表',
    ),
    'DescribeAlertSource' => 
    array (
      'summary' => '获取告警数据源列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Level',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'description' => '威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'type' => 'array',
            'items' => 
            array (
              'description' => '威胁等级，格式为json数组。取值：

- serious：高危
- suspicious：中危
- remind：低危',
              'type' => 'string',
              'required' => false,
              'example' => '["remind","serious"]',
            ),
            'required' => false,
            'example' => '["serious","suspicious","remind"]',
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间, 单位毫秒。',
            'description' => '查询开始时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间, 单位毫秒。',
            'description' => '查询结束时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<AlertSource>>',
            'description' => 'BaseResponse<List<AlertSource>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SourceName' => 
                    array (
                      'title' => '告警数据源名称。',
                      'description' => '告警数据源名称。',
                      'type' => 'string',
                      'example' => 'sas',
                    ),
                    'Source' => 
                    array (
                      'title' => '告警数据源名称美杜莎code。',
                      'description' => '告警数据源名称美杜莎code。',
                      'type' => 'string',
                      'example' => 'aliyun.siem.alert_datasource.sas',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"SourceName\\": \\"sas\\",\\n      \\"Source\\": \\"aliyun.siem.alert_datasource.sas\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取告警数据源列表',
    ),
    'DescribeAlertsCount' => 
    array (
      'summary' => '获取告警不同级别计数。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间, 单位毫秒。',
            'description' => '查询开始时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间, 单位毫秒。',
            'description' => '查询结束时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<CloudSiemAlertCounter>',
            'description' => 'PlainResponse<CloudSiemAlertCounter>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'High' => 
                  array (
                    'title' => '高威胁告警数。',
                    'description' => '高威胁告警数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '25',
                  ),
                  'Medium' => 
                  array (
                    'title' => '中威胁告警数。',
                    'description' => '中威胁告警数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '25',
                  ),
                  'Low' => 
                  array (
                    'title' => '低威胁告警数。',
                    'description' => '低威胁告警数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '25',
                  ),
                  'All' => 
                  array (
                    'title' => '告警总数。',
                    'description' => '告警总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '75',
                  ),
                  'ProductNum' => 
                  array (
                    'title' => '接入产品数。',
                    'description' => '接入产品数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"High\\": 25,\\n    \\"Medium\\": 25,\\n    \\"Low\\": 25,\\n    \\"All\\": 75,\\n    \\"ProductNum\\": 3\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取告警不同级别计数',
    ),
    'DescribeEntityInfo' => 
    array (
      'summary' => '获取实体详情。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体逻辑ID。',
            'description' => '实体逻辑ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12345',
          ),
        ),
        1 => 
        array (
          'name' => 'EntityIdentity',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体特征值，可以对处置实体进行模糊搜索。',
            'description' => '实体特征值，可以对处置实体进行模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'test22.php',
          ),
        ),
        2 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件全局唯一ID。',
            'description' => '事件全局唯一UUID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        3 => 
        array (
          'name' => 'SophonTaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'soar处置策略ID。',
            'description' => 'SOAR处置策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => '577bbf90-a770-44a7-8154-586aa2d318fa',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<EventEntityInfo>',
            'description' => 'BaseResponse<EventEntityInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'EntityId' => 
                  array (
                    'title' => '实体逻辑id。',
                    'description' => '实体逻辑ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '12345',
                  ),
                  'EntityType' => 
                  array (
                    'title' => '实体类型，ip:ip, 域名：domain， url：url， 进程：process， 文件：file， 主机：host。',
                    'description' => '实体类型。取值：
- ip：ip
- domain：域名
- url：url
- process：进程
- file：文件
- host：主机',
                    'type' => 'string',
                    'example' => 'ip',
                  ),
                  'EntityInfo' => 
                  array (
                    'title' => '实体信息。',
                    'description' => '实体信息。',
                    'type' => 'object',
                    'example' => '{ location: "xian", net_connect_dir: "in", malware_type: "${aliyun.siem.sas.alert_tag.login_unusual_account}" }',
                  ),
                  'TipInfo' => 
                  array (
                    'title' => '威胁情报信息。',
                    'description' => '威胁情报信息。',
                    'type' => 'object',
                    'example' => '{
      "Ip": {
            "queryHot": "0",
            "country": "China",
            "province": "shanxi",
            "ip": "221.11.XX.XXX",
            "asn": "4837",
            "asn_label": "CHINAXXX-Backbone - CHINA UNICOM ChinaXXX Backbone, CN"
      }
}',
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"EntityId\\": 12345,\\n    \\"EntityType\\": \\"ip\\",\\n    \\"EntityInfo\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"TipInfo\\": {\\n      \\"Ip\\": {\\n        \\"queryHot\\": \\"0\\",\\n        \\"country\\": \\"China\\",\\n        \\"province\\": \\"shanxi\\",\\n        \\"ip\\": \\"221.11.XX.XXX\\",\\n        \\"asn\\": \\"4837\\",\\n        \\"asn_label\\": \\"CHINAXXX-Backbone - CHINA UNICOM ChinaXXX Backbone, CN\\"\\n      }\\n    }\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取实体详情',
    ),
    'PostEventDisposeAndWhiteruleList' => 
    array (
      'summary' => '提交事件处置信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件id。',
            'description' => '事件全局唯一UUID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件状态。  取值：
- 0:未处理 
-1:处理中 
-5：处理失败 
-10:已处理',
            'description' => '事件状态。  取值：

- 0：未处理  
- 1：处理中 
- 5：处理失败 
- 10：已处理',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件备注。',
            'description' => '事件备注。',
            'type' => 'string',
            'required' => false,
            'example' => 'dealed',
          ),
        ),
        3 => 
        array (
          'name' => 'EventDispose',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件处置配置 json对象。',
            'description' => '事件处置配置 json对象。',
            'type' => 'string',
            'required' => false,
            'example' => '[
      {
            "playbookName": "WafBlockIP",
            "entityId": "104466118",
            "scope": [
                  "176618589410****"
            ],
            "startTime": 1604168946281,
            "endTime": 1614168946281
      },
      {
            "playbookName": "WafBlockIP",
            "entityId": "104466118",
            "scope": [
                  {
                        "instanceId": "waf-cn-n6w1oy1****",
                        "domains": [
                              "lmfip.wafqax.***"
                        ]
                  }
            ],
            "startTime": 1604168946281,
            "endTime": 1614168946281
      }
]',
          ),
        ),
        4 => 
        array (
          'name' => 'ReceiverInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警接收人配置 json对象',
            'description' => '告警接收人配置 json对象',
            'type' => 'string',
            'required' => false,
            'example' => '{
      "messageTitle": "test",
      "receiver": "xiaowang",
      "channel": "message"
}',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<String>',
            'description' => 'BaseResponse<String>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'string',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '提交事件处置信息',
    ),
    'DescribeWafScope' => 
    array (
      'summary' => '获取作用域用户名下waf实例的域名防护列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体ID。',
            'description' => '实体ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20617784',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<WafScope>>',
            'description' => 'BaseResponse<List<WafScope>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'InstanceId' => 
                    array (
                      'title' => 'waf实例ID。',
                      'description' => 'Waf实例ID。',
                      'type' => 'string',
                      'example' => 'waf-cn-tl123ast****',
                    ),
                    'Aliuid' => 
                    array (
                      'title' => 'siem主账号ID。',
                      'description' => 'SIEM主账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '127608589417****',
                    ),
                    'Domains' => 
                    array (
                      'title' => 'waf实例下的防护的域名列表。',
                      'description' => 'Waf实例下的防护的域名列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Waf实例下的防护的域名列表。',
                        'type' => 'string',
                        'example' => '[123***.com, 456***.com]',
                      ),
                      'example' => '[123.com, 456.com]',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"InstanceId\\": \\"waf-cn-tl123ast****\\",\\n      \\"Aliuid\\": 0,\\n      \\"Domains\\": [\\n        \\"[123***.com, 456***.com]\\"\\n      ]\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取作用域用户名下waf实例的域名防护列表',
    ),
    'DescribeEventDispose' => 
    array (
      'summary' => '获取事件历史处置策略。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件ID。',
            'description' => '事件全局唯一UUID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号， 大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数， 最大不超过500。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<EventDisposeConfig>',
            'description' => 'BaseResponse<EventDisposeConfig>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'title' => '事件状态。  0:未处理  1:处理中 5：处理失败 10:已处理。',
                    'description' => '事件状态。  取值：

- 0：未处理  
- 1：处理中 
- 5：处理失败 
- 10：已处理',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Remark' => 
                  array (
                    'title' => '事件备注。',
                    'description' => '事件备注。',
                    'type' => 'string',
                    'example' => 'dealed',
                  ),
                  'EventDispose' => 
                  array (
                    'title' => '事件处置配置 json对象。',
                    'description' => '事件处置配置 json对象。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '事件处置配置 json对象。',
                      'type' => 'any',
                      'example' => '{ playbookName: "WafBlockIP", sophonTaskId: "400442a5-4f98-45ed-97db-5ab117eb0b8f", … }',
                    ),
                    'example' => '{ playbookName: "使用安全组封禁入方向IP", sophonTaskId: "400442a5-4f98-45ed-97db-5ab117eb0b8f", … }',
                  ),
                  'ReceiverInfo' => 
                  array (
                    'title' => '告警接收人配置 json对象',
                    'description' => '告警接收人配置 json对象',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Id' => 
                      array (
                        'title' => '事件处置结果接收人记录ID。',
                        'description' => '事件处置结果接收人记录ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '123',
                      ),
                      'GmtCreate' => 
                      array (
                        'title' => '创建时间。',
                        'description' => '创建时间。',
                        'type' => 'string',
                        'example' => '2021-01-06 16:37:29',
                      ),
                      'GmtModified' => 
                      array (
                        'title' => '修改时间。',
                        'description' => '修改时间。',
                        'type' => 'string',
                        'example' => '2021-01-06 16:37:29',
                      ),
                      'IncidentUuid' => 
                      array (
                        'title' => '事件ID。',
                        'description' => '事件全局唯一UUID。',
                        'type' => 'string',
                        'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
                      ),
                      'MessageTitle' => 
                      array (
                        'title' => '消息title。',
                        'description' => '消息title。',
                        'type' => 'string',
                        'example' => 'siem event dealed message',
                      ),
                      'Receiver' => 
                      array (
                        'title' => '接收人联系方式。',
                        'description' => '接收人联系方式。',
                        'type' => 'string',
                        'example' => '138xxxxxx',
                      ),
                      'Channel' => 
                      array (
                        'title' => '联系方式渠道。 取值：
- message:短信 
- mail：邮件',
                        'description' => '联系方式渠道。 取值：
- message：短信 
- mail：邮件',
                        'type' => 'string',
                        'example' => 'message',
                      ),
                      'Status' => 
                      array (
                        'title' => '发送状态 0:未发送 1:已发送',
                        'description' => '发送状态。取值：

- 0：未发送 
- 1：已发送',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Status\\": 0,\\n    \\"Remark\\": \\"dealed\\",\\n    \\"EventDispose\\": [\\n      \\"{ playbookName: \\\\\\"WafBlockIP\\\\\\", sophonTaskId: \\\\\\"400442a5-4f98-45ed-97db-5ab117eb0b8f\\\\\\", … }\\"\\n    ],\\n    \\"ReceiverInfo\\": {\\n      \\"Id\\": 123,\\n      \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n      \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n      \\"IncidentUuid\\": \\"85ea4241-798f-4684-a876-65d4f0c3****\\",\\n      \\"MessageTitle\\": \\"siem event dealed message\\",\\n      \\"Receiver\\": \\"138xxxxxx\\",\\n      \\"Channel\\": \\"message\\",\\n      \\"Status\\": 1\\n    }\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取事件历史处置策略',
    ),
    'DescribeEventCountByThreatLevel' => 
    array (
      'summary' => '获取事件各类型计数。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间, 单位毫秒。',
            'description' => '查询开始时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间, 单位毫秒。',
            'description' => '查询结束时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源目录成员账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<EventCounter>',
            'description' => 'PlainResponse<EventCounter>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'EventNum' => 
                  array (
                    'title' => '事件总数。',
                    'description' => '事件总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'UndealEventNum' => 
                  array (
                    'title' => '未处理事件数。',
                    'description' => '未处理事件数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '75',
                  ),
                  'HighLevelEventNum' => 
                  array (
                    'title' => '高风险事件数。',
                    'description' => '高风险事件数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'MediumLevelEventNum' => 
                  array (
                    'title' => '中风险事件数。',
                    'description' => '中风险事件数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                  'LowLevelEventNum' => 
                  array (
                    'title' => '低分险事件数。',
                    'description' => '低分险事件数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '52',
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"EventNum\\": 100,\\n    \\"UndealEventNum\\": 75,\\n    \\"HighLevelEventNum\\": 20,\\n    \\"MediumLevelEventNum\\": 3,\\n    \\"LowLevelEventNum\\": 52\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取事件各类型计数',
    ),
    'DescribeDisposeAndPlaybook' => 
    array (
      'summary' => '获取需要被处置的实体列表与剧本列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体类型。取值：
- ip：ip
- process：进程
- file：文件机',
            'description' => '实体类型。取值：
- ip：ip
- process：进程
- file：文件',
            'type' => 'string',
            'required' => false,
            'example' => 'ip',
          ),
        ),
        1 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件id。',
            'description' => '事件UUID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号， 大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数， 最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<DisposeAndScopeView>>',
            'description' => 'PageResponse<List<DisposeAndScopeView>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EntityId' => 
                        array (
                          'title' => '实体id。',
                          'description' => '实体ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '12345****',
                        ),
                        'OpcodeMap' => 
                        array (
                          'title' => '实体id。',
                          'description' => 'opcode与oplevel键值对。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'example' => '{"7","2"}',
                            'description' => 'opcode与oplevel键值对。',
                          ),
                          'example' => '12345',
                        ),
                        'OpcodeSet' => 
                        array (
                          'title' => '实体处置推荐剧本code。',
                          'description' => '实体处置推荐剧本code。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '实体处置推荐剧本code。',
                            'type' => 'string',
                            'example' => '7',
                          ),
                          'example' => '[1,3]',
                        ),
                        'EntityInfo' => 
                        array (
                          'title' => '实体信息。',
                          'description' => '实体信息。',
                          'type' => 'object',
                          'example' => '{"file_path": "c:/www/leixi.jsp","file_hash": "aa0ca926ad948cd820e0a3d9a18c****","host_uuid": "efed2cf7-0b77-45d9-a97b-d2cf246b****","malware_type": "${aliyun.siem.sas.alert_tag.webshell}","host_name": "launch-advisor-2023****"}',
                        ),
                        'Dispose' => 
                        array (
                          'title' => '处置对象。',
                          'description' => '处置对象。',
                          'type' => 'string',
                          'example' => '192.168.*.*',
                        ),
                        'Scope' => 
                        array (
                          'title' => '处置作用域，可进行处置用户id列表。',
                          'description' => '处置作用域，可进行处置用户ID列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '处置作用域，可进行处置用户ID列表。',
                            'type' => 'any',
                            'example' => '[127608589417****]',
                          ),
                          'example' => '176618589410****',
                        ),
                        'PlaybookList' => 
                        array (
                          'title' => '能够处置该实体的剧本列表。',
                          'description' => '能够处置该实体的剧本列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'OpCode' => 
                              array (
                                'title' => '剧本opcode，与处置实体的推荐剧本opcode相对应。',
                                'description' => '剧本opcode，与处置实体的推荐剧本opcode相对应。',
                                'type' => 'string',
                                'example' => '7',
                              ),
                              'OpLevel' => 
                              array (
                                'title' => '事件一键处置是否默认勾选，2：勾选 1：只展示不勾选。',
                                'description' => '事件一键处置是否默认勾选。取值：

- 2：勾选 
- 1：只展示不勾选',
                                'type' => 'string',
                                'example' => '2',
                              ),
                              'Description' => 
                              array (
                                'title' => '剧本描述。',
                                'description' => '剧本描述。',
                                'type' => 'string',
                                'example' => 'WafBlockIP',
                              ),
                              'DisplayName' => 
                              array (
                                'title' => '剧本显示名称。',
                                'description' => '剧本显示名称。',
                                'type' => 'string',
                                'example' => 'WafBlockIP',
                              ),
                              'TaskConfig' => 
                              array (
                                'title' => 'opcode配置。',
                                'description' => 'opcode配置。',
                                'type' => 'string',
                                'example' => '{"opCode":"3"}',
                              ),
                              'Name' => 
                              array (
                                'title' => '剧本名称，剧本唯一标识。',
                                'description' => '剧本名称，剧本唯一标识。',
                                'type' => 'string',
                                'example' => 'kill_process_isolate_file',
                              ),
                              'ParamConfig' => 
                              array (
                                'title' => '剧本的参数列表以及对应参数属性',
                                'description' => '剧本的参数列表以及对应参数属性',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '当前剧本的入参列表以及入参格式要求。',
                                  'type' => 'any',
                                  'example' => '{
	"ParamConfig": [
		{
			"Field": "dispose",
			"Necessary": true,
			"CheckField": "[{&quot;fieldPath&quot;:&quot;$.ip&quot;,&quot;fieldName&quot;:&quot;ip&quot;}]"
		},
		{
			"Field": "alert",
			"Necessary": true,
			"CheckField": "[{&quot;fieldPath&quot;:&quot;$.host_uuid&quot;,&quot;fieldName&quot;:&quot;host_uuid&quot;}]"
		},
		{
			"Field": "scope",
			"Necessary": true,
			"Value": "$.main_user_id"
		},
		{
			"Field": "startTime",
			"Necessary": true
		},
		{
			"Field": "endTime",
			"Necessary": true
		}
	]
}',
                                ),
                              ),
                              'WafPlaybook' => 
                              array (
                                'title' => '是否是waf剧本。',
                                'description' => '是否是waf剧本。取值：

- true：是
- false：不是',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                            ),
                          ),
                          'example' => '[{"name":"云安全中心-云服务器安全","code":"1"}]',
                        ),
                        'AlertNum' => 
                        array (
                          'title' => '该实体关联的告警数。',
                          'description' => '该实体关联的告警数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"EntityId\\": 0,\\n        \\"OpcodeMap\\": {\\n          \\"key\\": \\"{\\\\\\"7\\\\\\",\\\\\\"2\\\\\\"}\\"\\n        },\\n        \\"OpcodeSet\\": [\\n          \\"7\\"\\n        ],\\n        \\"EntityInfo\\": {\\n          \\"file_path\\": \\"c:/www/leixi.jsp\\",\\n          \\"file_hash\\": \\"aa0ca926ad948cd820e0a3d9a18c****\\",\\n          \\"host_uuid\\": \\"efed2cf7-0b77-45d9-a97b-d2cf246b****\\",\\n          \\"malware_type\\": \\"${aliyun.siem.sas.alert_tag.webshell}\\",\\n          \\"host_name\\": \\"launch-advisor-2023****\\"\\n        },\\n        \\"Dispose\\": \\"192.168.*.*\\",\\n        \\"Scope\\": [\\n          \\"[127608589417****]\\"\\n        ],\\n        \\"PlaybookList\\": [\\n          {\\n            \\"OpCode\\": \\"7\\",\\n            \\"OpLevel\\": \\"2\\",\\n            \\"Description\\": \\"WafBlockIP\\",\\n            \\"DisplayName\\": \\"WafBlockIP\\",\\n            \\"TaskConfig\\": \\"{\\\\\\"opCode\\\\\\":\\\\\\"3\\\\\\"}\\",\\n            \\"Name\\": \\"kill_process_isolate_file\\",\\n            \\"ParamConfig\\": [\\n              \\"{\\\\n\\\\t\\\\\\"ParamConfig\\\\\\": [\\\\n\\\\t\\\\t{\\\\n\\\\t\\\\t\\\\t\\\\\\"Field\\\\\\": \\\\\\"dispose\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"Necessary\\\\\\": true,\\\\n\\\\t\\\\t\\\\t\\\\\\"CheckField\\\\\\": \\\\\\"[{&quot;fieldPath&quot;:&quot;$.ip&quot;,&quot;fieldName&quot;:&quot;ip&quot;}]\\\\\\"\\\\n\\\\t\\\\t},\\\\n\\\\t\\\\t{\\\\n\\\\t\\\\t\\\\t\\\\\\"Field\\\\\\": \\\\\\"alert\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"Necessary\\\\\\": true,\\\\n\\\\t\\\\t\\\\t\\\\\\"CheckField\\\\\\": \\\\\\"[{&quot;fieldPath&quot;:&quot;$.host_uuid&quot;,&quot;fieldName&quot;:&quot;host_uuid&quot;}]\\\\\\"\\\\n\\\\t\\\\t},\\\\n\\\\t\\\\t{\\\\n\\\\t\\\\t\\\\t\\\\\\"Field\\\\\\": \\\\\\"scope\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"Necessary\\\\\\": true,\\\\n\\\\t\\\\t\\\\t\\\\\\"Value\\\\\\": \\\\\\"$.main_user_id\\\\\\"\\\\n\\\\t\\\\t},\\\\n\\\\t\\\\t{\\\\n\\\\t\\\\t\\\\t\\\\\\"Field\\\\\\": \\\\\\"startTime\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"Necessary\\\\\\": true\\\\n\\\\t\\\\t},\\\\n\\\\t\\\\t{\\\\n\\\\t\\\\t\\\\t\\\\\\"Field\\\\\\": \\\\\\"endTime\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"Necessary\\\\\\": true\\\\n\\\\t\\\\t}\\\\n\\\\t]\\\\n}\\"\\n            ],\\n            \\"WafPlaybook\\": false\\n          }\\n        ],\\n        \\"AlertNum\\": 1\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取需要被处置的实体列表与剧本列表',
    ),
    'DescribeCloudSiemEvents' => 
    array (
      'summary' => '获取siem事件列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间, 单位毫秒。',
            'description' => '查询事件的开始时间，精确到毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间, 单位毫秒。',
            'description' => '查询结束时间，精确到毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        2 => 
        array (
          'name' => 'ThreadLevel',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '事件威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'description' => '事件威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'type' => 'array',
            'items' => 
            array (
              'description' => '事件威胁等级，格式为json数组。取值：

- serious：高危
- suspicious：中危
- remind：低危',
              'type' => 'string',
              'required' => false,
              'example' => '["remind","serious"]
',
            ),
            'required' => false,
            'example' => '["serious","suspicious","remind"]',
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'EventName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件名称。',
            'description' => '事件名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS unusual log in',
          ),
        ),
        4 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件ID。',
            'description' => '事件ID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        5 => 
        array (
          'name' => 'AssetId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件关联的资产ID。',
            'description' => '事件关联的资产ID。',
            'type' => 'string',
            'required' => false,
            'example' => '6c740667-80b2-476d-8924-2e706feb****',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件状态。  取值：
- 0:未处理
- 1:处理中
- 5：处理失败
- 10:已处理',
            'description' => '事件状态。取值：
- 0：未处理
- 1：处理中
- 5：处理失败
- 10：已处理',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'OrderField',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件列表排列字段。 取值：
- GmtModified：基于事件产生事件排序（默认）
- ThreatScore：基于事件威胁评分排序。',
            'description' => '事件列表排列字段。 取值：
- GmtModified：基于事件产生事件排序（默认）
- ThreatScore：基于事件威胁评分排序',
            'type' => 'string',
            'required' => false,
            'example' => 'ThreatScore',
          ),
        ),
        8 => 
        array (
          'name' => 'Order',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件列表排列方向。 取值：
- desc：降序排列
- asc：升序排列。',
            'description' => '事件列表排列方向。 取值：
- desc：降序排列
- asc：升序排列',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
          ),
        ),
        9 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号，大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数，最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        11 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        13 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<SiemEvent>>',
            'description' => 'PageResponse<List<SiemEvent>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'GmtCreate' => 
                        array (
                          'title' => '事件发生时间。',
                          'description' => '事件发生时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '事件最后更新时间。',
                          'description' => '事件最后更新时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'Aliuid' => 
                        array (
                          'title' => '事件归属主账号ID。',
                          'description' => '事件归属主账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '127608589417****',
                        ),
                        'AlertNum' => 
                        array (
                          'title' => '事件关联告警数。',
                          'description' => '事件关联告警数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'AssetNum' => 
                        array (
                          'title' => '事件关联资产数。',
                          'description' => '事件关联资产数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'IncidentUuid' => 
                        array (
                          'title' => '事件全局唯一ID。',
                          'description' => '事件全局唯一UUID。',
                          'type' => 'string',
                          'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
                        ),
                        'IncidentName' => 
                        array (
                          'title' => '事件名称。',
                          'description' => '事件名称。',
                          'type' => 'string',
                          'example' => 'Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc',
                        ),
                        'IncidentNameEn' => 
                        array (
                          'title' => '事件英文名称。',
                          'description' => '事件英文名称。',
                          'type' => 'string',
                          'example' => 'Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc',
                        ),
                        'Description' => 
                        array (
                          'title' => '事件描述。',
                          'description' => '事件描述。',
                          'type' => 'string',
                          'example' => 'The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc',
                        ),
                        'DescriptionEn' => 
                        array (
                          'title' => '事件英文描述。',
                          'description' => '事件英文描述。',
                          'type' => 'string',
                          'example' => 'The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc',
                        ),
                        'DataSources' => 
                        array (
                          'title' => '事件关联告警来源产品。',
                          'description' => '事件关联告警来源产品。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '事件关联告警来源产品。',
                            'type' => 'string',
                            'example' => '[sas,waf]',
                          ),
                          'example' => '[sas,waf]',
                        ),
                        'ThreatLevel' => 
                        array (
                          'title' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'description' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'type' => 'string',
                          'example' => 'remind',
                        ),
                        'ThreatScore' => 
                        array (
                          'title' => '事件的威胁分值, 范围 0~100, 分值越高风险等级越高。',
                          'description' => '事件的威胁分值，范围 0~100，分值越高风险等级越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '90.2',
                        ),
                        'ExtContent' => 
                        array (
                          'title' => '事件扩展信息 json格式。',
                          'description' => '事件扩展信息 json格式。',
                          'type' => 'string',
                          'example' => '{"event_transfer_type":"customize_rule"}',
                        ),
                        'Status' => 
                        array (
                          'title' => '事件状态。  取值：
- 0:未处理 
-1:处理中 
-5：处理失败 
-10:已处理',
                          'description' => '事件状态。  取值：
- 0：未处理
- 1：处理中
- 5：处理失败
- 10：已处理',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'AttCkLabels' => 
                        array (
                          'title' => 'ATTCT&攻击技术标签集合。',
                          'description' => 'ATTCT&攻击技术标签集合。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'ATTCT&攻击技术标签集合。',
                            'type' => 'string',
                            'example' => '["T1595.002 Vulnerability Scanning"]',
                          ),
                          'example' => '["T1595.002 Vulnerability Scanning"]',
                        ),
                        'ReferAccount' => 
                        array (
                          'description' => '关联账号。',
                          'type' => 'string',
                          'example' => '127608589417****',
                        ),
                        'Remark' => 
                        array (
                          'title' => '事件备注。',
                          'description' => '事件备注。',
                          'type' => 'string',
                          'example' => 'dealed',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n        \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n        \\"Aliuid\\": 0,\\n        \\"AlertNum\\": 4,\\n        \\"AssetNum\\": 4,\\n        \\"IncidentUuid\\": \\"85ea4241-798f-4684-a876-65d4f0c3****\\",\\n        \\"IncidentName\\": \\"Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc\\",\\n        \\"IncidentNameEn\\": \\"Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc\\",\\n        \\"Description\\": \\"The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc\\",\\n        \\"DescriptionEn\\": \\"The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc\\",\\n        \\"DataSources\\": [\\n          \\"[sas,waf]\\"\\n        ],\\n        \\"ThreatLevel\\": \\"remind\\",\\n        \\"ThreatScore\\": 90.2,\\n        \\"ExtContent\\": \\"{\\\\\\"event_transfer_type\\\\\\":\\\\\\"customize_rule\\\\\\"}\\",\\n        \\"Status\\": 0,\\n        \\"AttCkLabels\\": [\\n          \\"[\\\\\\"T1595.002 Vulnerability Scanning\\\\\\"]\\"\\n        ],\\n        \\"ReferAccount\\": \\"127608589417****\\",\\n        \\"Remark\\": \\"dealed\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取事件列表',
    ),
    'DescribeCloudSiemEventDetail' => 
    array (
      'summary' => '获取事件详情。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件ID。',
            'description' => '事件UUID。',
            'type' => 'string',
            'required' => true,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<SiemEvent>',
            'description' => 'PlainResponse<SiemEvent>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'GmtCreate' => 
                  array (
                    'title' => '事件发生时间。',
                    'description' => '事件发生时间。',
                    'type' => 'string',
                    'example' => '2021-01-06 16:37:29',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '事件最后更新时间。',
                    'description' => '事件最后更新时间。',
                    'type' => 'string',
                    'example' => '2021-01-06 16:37:29',
                  ),
                  'Aliuid' => 
                  array (
                    'title' => '事件归属主账号ID。',
                    'description' => '事件归属主账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '127608589417****',
                  ),
                  'AlertNum' => 
                  array (
                    'title' => '事件关联告警数。',
                    'description' => '事件关联告警数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'AssetNum' => 
                  array (
                    'title' => '事件关联资产数。',
                    'description' => '事件关联资产数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'IncidentUuid' => 
                  array (
                    'title' => '事件全局唯一ID。',
                    'description' => '事件全局唯一UUID。',
                    'type' => 'string',
                    'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
                  ),
                  'IncidentName' => 
                  array (
                    'title' => '事件名称。',
                    'description' => '事件名称。',
                    'type' => 'string',
                    'example' => 'Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc',
                  ),
                  'IncidentNameEn' => 
                  array (
                    'title' => '事件英文名称。',
                    'description' => '事件英文名称。',
                    'type' => 'string',
                    'example' => 'Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc',
                  ),
                  'Description' => 
                  array (
                    'title' => '事件描述。',
                    'description' => '事件描述。',
                    'type' => 'string',
                    'example' => 'The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc',
                  ),
                  'DescriptionEn' => 
                  array (
                    'title' => '事件英文描述。',
                    'description' => '事件英文描述。',
                    'type' => 'string',
                    'example' => 'The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc',
                  ),
                  'DataSources' => 
                  array (
                    'title' => '事件关联告警来源产品。',
                    'description' => '事件关联告警来源产品。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '事件关联告警来源产品。',
                      'type' => 'string',
                      'example' => '[sas,waf]',
                    ),
                    'example' => '[sas,waf]',
                  ),
                  'ThreatLevel' => 
                  array (
                    'title' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                    'description' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                    'type' => 'string',
                    'example' => 'remind',
                  ),
                  'ThreatScore' => 
                  array (
                    'title' => '事件的威胁分值, 范围 0~100, 分值越高风险等级越高。',
                    'description' => '事件的威胁分值, 范围 0~100, 分值越高风险等级越高。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '90.2',
                  ),
                  'ExtContent' => 
                  array (
                    'title' => '事件扩展信息 json格式。',
                    'description' => '事件扩展信息 json格式。',
                    'type' => 'string',
                    'example' => '{"event_transfer_type":"customize_rule"}',
                  ),
                  'Status' => 
                  array (
                    'title' => '事件状态。  取值：
- 0:未处理 
-1:处理中 
-5：处理失败 
-10:已处理',
                    'description' => '事件状态。  取值：

- 0：未处理  
- 1：处理中 
- 5：处理失败 
- 10：已处理',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'AttCkLabels' => 
                  array (
                    'title' => 'ATTCT&攻击技术标签集合。',
                    'description' => 'ATTCT&攻击技术标签集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'ATTCT&攻击技术标签集合。',
                      'type' => 'string',
                      'example' => '["T1595.002 Vulnerability Scanning"]',
                    ),
                    'example' => '["T1595.002 Vulnerability Scanning"]',
                  ),
                  'ReferAccount' => 
                  array (
                    'description' => '关联账号。',
                    'type' => 'string',
                    'example' => '17661858****/****,176618448****/****',
                  ),
                  'Remark' => 
                  array (
                    'title' => '事件备注。',
                    'description' => '事件备注。',
                    'type' => 'string',
                    'example' => 'dealed',
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n    \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n    \\"Aliuid\\": 0,\\n    \\"AlertNum\\": 4,\\n    \\"AssetNum\\": 4,\\n    \\"IncidentUuid\\": \\"85ea4241-798f-4684-a876-65d4f0c3****\\",\\n    \\"IncidentName\\": \\"Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc\\",\\n    \\"IncidentNameEn\\": \\"Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc\\",\\n    \\"Description\\": \\"The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc\\",\\n    \\"DescriptionEn\\": \\"The threat event contains 13 Miner Network,1 Execute suspicious encoded commands on Linux, etc\\",\\n    \\"DataSources\\": [\\n      \\"[sas,waf]\\"\\n    ],\\n    \\"ThreatLevel\\": \\"remind\\",\\n    \\"ThreatScore\\": 90.2,\\n    \\"ExtContent\\": \\"{\\\\\\"event_transfer_type\\\\\\":\\\\\\"customize_rule\\\\\\"}\\",\\n    \\"Status\\": 0,\\n    \\"AttCkLabels\\": [\\n      \\"[\\\\\\"T1595.002 Vulnerability Scanning\\\\\\"]\\"\\n    ],\\n    \\"ReferAccount\\": \\"17661858****/****,176618448****/****\\",\\n    \\"Remark\\": \\"dealed\\"\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取事件详情',
    ),
    'DescribeCloudSiemAssetsCounter' => 
    array (
      'summary' => '获取事件关联各类型资产计数。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件id。',
            'description' => '事件UUID。',
            'type' => 'string',
            'required' => true,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<List<CloudSiemEventAssetCounter>>',
            'description' => 'PlainResponse<List<CloudSiemEventAssetCounter>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AssetType' => 
                    array (
                      'title' => '资产类型。取值：
- ip:ip
- domain：域名
- url：url
- process：进程
- file：文件
- host：主机',
                      'description' => '资产类型。取值：
- ip：ip
- domain：域名
- url：url
- process：进程
- file：文件
- host：主机',
                      'type' => 'string',
                      'example' => 'domain',
                    ),
                    'AssetNum' => 
                    array (
                      'title' => '资产数量。',
                      'description' => '资产数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"AssetType\\": \\"domain\\",\\n      \\"AssetNum\\": 1\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取事件关联各类型资产计数',
    ),
    'DescribeCloudSiemAssets' => 
    array (
      'summary' => '获取事件关联资产列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件ID。',
            'description' => '事件UUID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'AssetType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资产类型。取值：
- ip：ip
- domain：域名
- url：url
- process:进程
- file:文件
- host:主机',
            'description' => '资产类型。取值：
- ip：ip
- domain：域名
- url：url
- process：进程
- file：文件
- host：主机',
            'type' => 'string',
            'required' => false,
            'example' => 'ip',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号， 大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数， 最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<AssetInfo>>',
            'description' => 'PageResponse<List<AssetInfo>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '资产ID。',
                          'description' => '资产ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '资产同步时间。',
                          'description' => '资产同步时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '资产最后更新时间。',
                          'description' => '资产最后更新时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'Aliuid' => 
                        array (
                          'title' => 'siem主账号ID。',
                          'description' => 'siem主账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1276085894174392',
                        ),
                        'SubUserId' => 
                        array (
                          'title' => '资产关联账号ID。',
                          'description' => '资产关联账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '176555323***',
                        ),
                        'IncidentUuid' => 
                        array (
                          'title' => '事件ID。',
                          'description' => '事件UUID。',
                          'type' => 'string',
                          'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
                        ),
                        'AlertUuid' => 
                        array (
                          'title' => '事件关联告警ID。',
                          'description' => '事件关联告警UUID。',
                          'type' => 'string',
                          'example' => 'sas_71e24437d2797ce8fc59692905a4****',
                        ),
                        'AssetName' => 
                        array (
                          'title' => '资产名称。',
                          'description' => '资产名称。',
                          'type' => 'string',
                          'example' => 'zsw-agentless-centos****',
                        ),
                        'AssetType' => 
                        array (
                          'title' => '资产类型。取值：
- ip:ip
- domain：域名
- url：url
- process：进程
- file：文件
- host：主机',
                          'description' => '资产类型。取值：
- ip：ip
- domain：域名
- url：url
- process：进程
- file：文件
- host：主机',
                          'type' => 'string',
                          'example' => 'domain',
                        ),
                        'AssetInfo' => 
                        array (
                          'title' => '资产展示信息 json数组格式。',
                          'description' => '资产展示信息 json数组格式。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'title' => '告警详细属性key。',
                                'description' => '告警详细属性key。',
                                'type' => 'string',
                                'example' => 'suspicious.wbd.wb.trojanpath',
                              ),
                              'KeyName' => 
                              array (
                                'title' => '告警详细数据名称。',
                                'description' => '告警详细数据名称。',
                                'type' => 'string',
                                'example' => 'Trojan Path',
                              ),
                              'Values' => 
                              array (
                                'title' => '告警详细数据值。',
                                'description' => '告警详细数据值。',
                                'type' => 'string',
                                'example' => '/root/test33.php',
                              ),
                            ),
                          ),
                          'example' => '[{"KeyName": "${aliyun.siem.asset.asset_name}","Values": "zsw-agentless-ubuntu20","Key": "asset_name"}]',
                        ),
                        'AssetId' => 
                        array (
                          'title' => '资产逻辑ID。',
                          'description' => '资产逻辑ID。',
                          'type' => 'string',
                          'example' => '0616caeb-acb8-45e0-8520-4ee5fbe251f0',
                        ),
                        'CloudCode' => 
                        array (
                          'title' => '实体来源云code。  取值：
- aliyun：阿里云
- qcloud：腾讯云
- hcloud：华为云',
                          'description' => '实体来源云Code。  取值：
- aliyun：阿里云
- qcloud：腾讯云
- hcloud：华为云',
                          'type' => 'string',
                          'example' => 'aliyun',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"Id\\": 123,\\n        \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n        \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n        \\"Aliuid\\": 1276085894174392,\\n        \\"SubUserId\\": 0,\\n        \\"IncidentUuid\\": \\"85ea4241-798f-4684-a876-65d4f0c3****\\",\\n        \\"AlertUuid\\": \\"sas_71e24437d2797ce8fc59692905a4****\\",\\n        \\"AssetName\\": \\"zsw-agentless-centos****\\",\\n        \\"AssetType\\": \\"domain\\",\\n        \\"AssetInfo\\": [\\n          {\\n            \\"Key\\": \\"suspicious.wbd.wb.trojanpath\\",\\n            \\"KeyName\\": \\"Trojan Path\\",\\n            \\"Values\\": \\"/root/test33.php\\"\\n          }\\n        ],\\n        \\"AssetId\\": \\"0616caeb-acb8-45e0-8520-4ee5fbe251f0\\",\\n        \\"CloudCode\\": \\"aliyun\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取事件关联资产列表',
    ),
    'DescribeAttackTimeLine' => 
    array (
      'summary' => '获取事件相关的告警时间线数据。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件ID。',
            'description' => '事件ID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'AssetName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资产名称。',
            'description' => '资产名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'zsw-agentless-centos****',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间, 单位毫秒。',
            'description' => '查询的开始时间，精确到毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577803000000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间, 单位毫秒。',
            'description' => '查询结束时间，精确到毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<AttackTimeline>>',
            'description' => 'BaseResponse<Map<String, CloudSiemAttackTimeline>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AssetName' => 
                    array (
                      'title' => '资产名称。',
                      'description' => '资产名称。',
                      'type' => 'string',
                      'example' => 'zsw-agentless-centos****',
                    ),
                    'AlertTime' => 
                    array (
                      'title' => '告警发生时间。',
                      'description' => '告警发生时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2021-01-06 16:37:29',
                    ),
                    'AssetId' => 
                    array (
                      'title' => '资产逻辑ID。',
                      'description' => '资产逻辑ID。',
                      'type' => 'string',
                      'example' => '0616caeb-acb8-45e0-8520-4ee5fbe251f0',
                    ),
                    'IncidentUuid' => 
                    array (
                      'title' => '事件ID。',
                      'description' => '事件UUID。',
                      'type' => 'string',
                      'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
                    ),
                    'AlertUuid' => 
                    array (
                      'title' => '事件关联告警ID。',
                      'description' => '事件关联告警UUID。',
                      'type' => 'string',
                      'example' => 'sas_71e24437d2797ce8fc59692905a4****',
                    ),
                    'LogTime' => 
                    array (
                      'title' => '告警记录时间。',
                      'description' => '告警记录时间。',
                      'type' => 'string',
                      'example' => '2021-01-06 16:37:29',
                    ),
                    'AlertSrcProd' => 
                    array (
                      'title' => '事件关联告警来源产品。',
                      'description' => '事件关联告警来源产品。',
                      'type' => 'string',
                      'example' => 'sas',
                    ),
                    'AlertTitle' => 
                    array (
                      'title' => '告警标题。',
                      'description' => '告警标题。',
                      'type' => 'string',
                      'example' => 'Scan-Try SNMP weak password',
                    ),
                    'AlertLevel' => 
                    array (
                      'title' => '威胁等级。 取值：
- serious：高危
- suspicious：中危
- remind：低危',
                      'description' => '威胁等级。 取值：
- serious：高危
- suspicious：中危
- remind：低危',
                      'type' => 'string',
                      'example' => 'remind',
                    ),
                    'AssetList' => 
                    array (
                      'title' => '资产列表。',
                      'description' => '资产列表。',
                      'type' => 'string',
                      'example' => '[
      {
            "is_main_asset": "1",
            "asset_name": "47.245.*",
            "port": "22",
            "ip": "47.245.*",
            "asset_type": "ip",
            "location": "ap-southeast-1",
            "asset_id": "47.245.*",
            "net_connect_dir": "in"
      }
]',
                    ),
                    'AlertSrcProdModule' => 
                    array (
                      'title' => '事件关联告警来源产品子模块。',
                      'description' => '事件关联告警来源产品子模块。',
                      'type' => 'string',
                      'example' => 'waf',
                    ),
                    'AttCk' => 
                    array (
                      'title' => 'ATTCT&攻击技术标签。',
                      'description' => 'ATTCT&攻击技术标签。',
                      'type' => 'string',
                      'example' => 'T1595.002 Vulnerability Scanning',
                    ),
                    'CloudCode' => 
                    array (
                      'title' => '云code。  取值：
- aliyun：阿里云
- qcloud：腾讯云
- hcloud：华为云',
                      'description' => '云Code。  取值：
- aliyun：阿里云
- qcloud：腾讯云
- hcloud：华为云',
                      'type' => 'string',
                      'example' => 'aliyun',
                    ),
                    'AlertTitleEn' => 
                    array (
                      'title' => '告警标题英文。',
                      'description' => '告警标题英文。',
                      'type' => 'string',
                      'example' => 'Scan-Try SNMP weak password',
                    ),
                    'AlertType' => 
                    array (
                      'title' => '告警类型。',
                      'description' => '告警类型。',
                      'type' => 'string',
                      'example' => 'Scan',
                    ),
                    'AlertTypeEn' => 
                    array (
                      'title' => '告警类型英文。',
                      'description' => '告警类型英文。',
                      'type' => 'string',
                      'example' => 'Scan',
                    ),
                    'AlertTypeCode' => 
                    array (
                      'title' => '告警类型美杜莎code。',
                      'description' => '告警类型美杜莎Code。',
                      'type' => 'string',
                      'example' => 'security_event_config.event_name.webshellName',
                    ),
                    'AlertName' => 
                    array (
                      'title' => '告警名称。',
                      'description' => '告警名称。',
                      'type' => 'string',
                      'example' => 'Try SNMP weak password',
                    ),
                    'AlertNameEn' => 
                    array (
                      'title' => '告警名称。',
                      'description' => '告警名称。',
                      'type' => 'string',
                      'example' => 'Try SNMP weak password',
                    ),
                    'AlertNameCode' => 
                    array (
                      'title' => '告警名称美杜莎code。',
                      'description' => '告警名称美杜莎Code。',
                      'type' => 'string',
                      'example' => 'security_event_config.event_name.webshell',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '返回状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"AssetName\\": \\"zsw-agentless-centos****\\",\\n      \\"AlertTime\\": 0,\\n      \\"AssetId\\": \\"0616caeb-acb8-45e0-8520-4ee5fbe251f0\\",\\n      \\"IncidentUuid\\": \\"85ea4241-798f-4684-a876-65d4f0c3****\\",\\n      \\"AlertUuid\\": \\"sas_71e24437d2797ce8fc59692905a4****\\",\\n      \\"LogTime\\": \\"2021-01-06 16:37:29\\",\\n      \\"AlertSrcProd\\": \\"sas\\",\\n      \\"AlertTitle\\": \\"Scan-Try SNMP weak password\\",\\n      \\"AlertLevel\\": \\"remind\\",\\n      \\"AssetList\\": \\"[\\\\n      {\\\\n            \\\\\\"is_main_asset\\\\\\": \\\\\\"1\\\\\\",\\\\n            \\\\\\"asset_name\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"port\\\\\\": \\\\\\"22\\\\\\",\\\\n            \\\\\\"ip\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"asset_type\\\\\\": \\\\\\"ip\\\\\\",\\\\n            \\\\\\"location\\\\\\": \\\\\\"ap-southeast-1\\\\\\",\\\\n            \\\\\\"asset_id\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"net_connect_dir\\\\\\": \\\\\\"in\\\\\\"\\\\n      }\\\\n]\\",\\n      \\"AlertSrcProdModule\\": \\"waf\\",\\n      \\"AttCk\\": \\"T1595.002 Vulnerability Scanning\\",\\n      \\"CloudCode\\": \\"aliyun\\",\\n      \\"AlertTitleEn\\": \\"Scan-Try SNMP weak password\\",\\n      \\"AlertType\\": \\"Scan\\",\\n      \\"AlertTypeEn\\": \\"Scan\\",\\n      \\"AlertTypeCode\\": \\"security_event_config.event_name.webshellName\\",\\n      \\"AlertName\\": \\"Try SNMP weak password\\",\\n      \\"AlertNameEn\\": \\"Try SNMP weak password\\",\\n      \\"AlertNameCode\\": \\"security_event_config.event_name.webshell\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAttackTimeLineResponse>\\n    <Data>\\n        <key/>\\n    </Data>\\n</DescribeAttackTimeLineResponse>","errorExample":""}]',
      'title' => '获取事件相关的告警时间线数据',
    ),
    'DescribeAlertsWithEvent' => 
    array (
      'summary' => '获取指定事件关联的告警列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件ID。',
            'description' => '事件ID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'Level',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'description' => '威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'type' => 'array',
            'items' => 
            array (
              'description' => '威胁等级，格式为json数组。取值：

- serious：高危
- suspicious：中危
- remind：低危',
              'type' => 'string',
              'required' => false,
              'example' => '["remind","serious"]
',
            ),
            'required' => false,
            'example' => '["serious","suspicious","remind"]',
            'maxItems' => 100,
          ),
        ),
        2 => 
        array (
          'name' => 'AlertTitle',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警标题。',
            'description' => '告警标题。',
            'type' => 'string',
            'required' => false,
            'example' => 'Scan-Try SNMP weak password
',
          ),
        ),
        3 => 
        array (
          'name' => 'SubUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警关联账号ID。',
            'description' => '告警关联账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '176555323***',
          ),
        ),
        4 => 
        array (
          'name' => 'Source',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警数据源。',
            'description' => '告警数据源。',
            'type' => 'string',
            'required' => false,
            'example' => 'sas',
          ),
        ),
        5 => 
        array (
          'name' => 'IsDefend',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否已防御',
            'description' => '是否已防御。取值：

- 0：检出
- 1：拦截',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号， 大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数， 最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源目录成员账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        10 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<AlertDetail>>',
            'description' => 'PageResponse<List<AlertDetail>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '告警唯一ID。',
                          'description' => '告警唯一ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123456789',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '告警入库时间。',
                          'description' => '告警入库时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '告警最后更新时间。',
                          'description' => '告警最后更新时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'MainUserId' => 
                        array (
                          'title' => '告警关联siem主账号ID。',
                          'description' => '告警关联siem主账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '127608589417****',
                        ),
                        'IncidentUuid' => 
                        array (
                          'title' => '事件全局唯一id。',
                          'description' => '事件全局唯一UUID。',
                          'type' => 'string',
                          'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
                        ),
                        'AlertUuid' => 
                        array (
                          'title' => '告警id。',
                          'description' => '告警UUID。',
                          'type' => 'string',
                          'example' => 'sas_71e24437d2797ce8fc59692905a4****',
                        ),
                        'LogTime' => 
                        array (
                          'title' => '告警记录时间。',
                          'description' => '告警记录时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'AlertSrcProd' => 
                        array (
                          'title' => '事件关联告警来源产品。',
                          'description' => '事件关联告警来源产品。',
                          'type' => 'string',
                          'example' => 'sas',
                        ),
                        'AlertTitle' => 
                        array (
                          'title' => '告警标题。',
                          'description' => '告警标题。',
                          'type' => 'string',
                          'example' => 'Scan-Try SNMP weak password',
                        ),
                        'AlertTitleEn' => 
                        array (
                          'title' => '告警标题英文。',
                          'description' => '告警标题英文。',
                          'type' => 'string',
                          'example' => 'Scan-Try SNMP weak password',
                        ),
                        'AlertType' => 
                        array (
                          'title' => '告警类型。',
                          'description' => '告警类型。',
                          'type' => 'string',
                          'example' => 'Scan',
                        ),
                        'AlertTypeEn' => 
                        array (
                          'title' => '告警类型英文。',
                          'description' => '告警类型英文。',
                          'type' => 'string',
                          'example' => 'Scan',
                        ),
                        'AlertTypeCode' => 
                        array (
                          'title' => '告警类型美杜莎code。',
                          'description' => '告警类型美杜莎Code。',
                          'type' => 'string',
                          'example' => 'security_event_config.event_name.webshellName',
                        ),
                        'AlertName' => 
                        array (
                          'title' => '告警名称。',
                          'description' => '告警名称。',
                          'type' => 'string',
                          'example' => 'Try SNMP weak password',
                        ),
                        'AlertNameEn' => 
                        array (
                          'title' => '告警名称。',
                          'description' => '告警名称。',
                          'type' => 'string',
                          'example' => 'Try SNMP weak password',
                        ),
                        'AlertNameCode' => 
                        array (
                          'title' => '告警名称美杜莎code。',
                          'description' => '告警名称美杜莎Code。',
                          'type' => 'string',
                          'example' => 'security_event_config.event_name.webshell',
                        ),
                        'AlertLevel' => 
                        array (
                          'title' => '威胁等级。 取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'description' => '威胁等级。 取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'type' => 'string',
                          'example' => 'remind',
                        ),
                        'AssetList' => 
                        array (
                          'title' => '资产列表。',
                          'description' => '资产列表。',
                          'type' => 'string',
                          'example' => '[
      {
            "is_main_asset": "1",
            "asset_name": "47.245.*",
            "port": "22",
            "ip": "47.245.*",
            "asset_type": "ip",
            "location": "ap-southeast-1",
            "asset_id": "47.245.*",
            "net_connect_dir": "in"
      }
]',
                        ),
                        'OccurTime' => 
                        array (
                          'title' => '告警发生时间。',
                          'description' => '告警发生时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'StartTime' => 
                        array (
                          'title' => '告警首次发生时间。',
                          'description' => '告警首次发生时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'EndTime' => 
                        array (
                          'title' => '告警结束时间。',
                          'description' => '告警结束时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'AlertSrcProdModule' => 
                        array (
                          'title' => '事件关联告警来源产品子模块。',
                          'description' => '事件关联告警来源产品子模块。',
                          'type' => 'string',
                          'example' => 'waf',
                        ),
                        'AlertDesc' => 
                        array (
                          'title' => '告警描述。',
                          'description' => '告警描述。',
                          'type' => 'string',
                          'example' => 'The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.',
                        ),
                        'AlertDescEn' => 
                        array (
                          'title' => '告警英文描述。',
                          'description' => '告警英文描述。',
                          'type' => 'string',
                          'example' => 'The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.',
                        ),
                        'AlertDescCode' => 
                        array (
                          'title' => '告警描述美杜莎code。',
                          'description' => '告警描述美杜莎Code。',
                          'type' => 'string',
                          'example' => 'security_event_config.event_name.webshell
',
                        ),
                        'AlertDetail' => 
                        array (
                          'title' => '告警详情。',
                          'description' => '告警详情。',
                          'type' => 'string',
                          'example' => '{"main_user_id": "165295629792****";"log_uuid_count": "99";"attack_ip": "21.92.*.*"}',
                        ),
                        'LogUuid' => 
                        array (
                          'title' => '告警log UUID。',
                          'description' => '告警日志UUID。',
                          'type' => 'string',
                          'example' => 'cfw_d12e285a-a042-4d7e-be89-f8a795ef****',
                        ),
                        'EntityList' => 
                        array (
                          'title' => '实体详情（标准化/开启索引）',
                          'description' => '实体详情。',
                          'type' => 'string',
                          'example' => '[{&quot;entity_user_id&quot;:&quot;198921674491****&quot;,&quot;entity_account_id&quot;:&quot;N/A&quot;,&quot;entity_uuid&quot;:&quot;6245f979d5dd9ef8dd19bdc72228****&quot;,&quot;entity_type&quot;:&quot;host&quot;,&quot;entity_name&quot;:&quot;zhh-test-20240409&quot;,&quot;is_comprised&quot;:&quot;1&quot;,&quot;os_type&quot;:&quot;linux&quot;,&quot;entity_id&quot;:&quot;a88f44dd-b8d4-4ded-831c-77a4835****&quot;,&quot;host_uuid&quot;:&quot;a88f44dd-b8d4-4ded-831c-77a4835****&quot;,&quot;host_name&quot;:&quot;zhh-test-2024****&quot;}]',
                        ),
                        'AttCk' => 
                        array (
                          'title' => 'ATTCT&攻击技术标签。',
                          'description' => 'ATTCT&攻击技术标签。',
                          'type' => 'string',
                          'example' => 'T1595.002 Vulnerability Scanning',
                        ),
                        'SubUserId' => 
                        array (
                          'title' => '产生告警阿里账号ID。',
                          'description' => '产生告警阿里账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '176555323***',
                        ),
                        'CloudCode' => 
                        array (
                          'title' => '云code。  取值：
- aliyun：阿里云
- qcloud：腾讯云
- hcloud：华为云',
                          'description' => '云code。  取值：
- aliyun：阿里云
- qcloud：腾讯云
- hcloud：华为云',
                          'type' => 'string',
                          'example' => 'aliyun',
                        ),
                        'IsDefend' => 
                        array (
                          'title' => '是否已防御',
                          'description' => '是否已防御。取值：

- 0：检出
- 1：拦截',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'AlertInfoList' => 
                        array (
                          'title' => '告警详细数据。',
                          'description' => '告警详细数据。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'title' => '告警详细属性key。',
                                'description' => '告警详细属性KEY。',
                                'type' => 'string',
                                'example' => 'suspicious.wbd.wb.trojanpath',
                              ),
                              'KeyName' => 
                              array (
                                'title' => '告警详细数据名称。',
                                'description' => '告警详细数据名称。',
                                'type' => 'string',
                                'example' => 'Trojan Path
',
                              ),
                              'Values' => 
                              array (
                                'title' => '告警详细数据值。',
                                'description' => '告警详细数据值。',
                                'type' => 'string',
                                'example' => '/root/test33.php',
                              ),
                            ),
                          ),
                          'example' => 'aliyun',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"Id\\": 123456789,\\n        \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n        \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n        \\"MainUserId\\": 0,\\n        \\"IncidentUuid\\": \\"85ea4241-798f-4684-a876-65d4f0c3****\\",\\n        \\"AlertUuid\\": \\"sas_71e24437d2797ce8fc59692905a4****\\",\\n        \\"LogTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"AlertSrcProd\\": \\"sas\\",\\n        \\"AlertTitle\\": \\"Scan-Try SNMP weak password\\",\\n        \\"AlertTitleEn\\": \\"Scan-Try SNMP weak password\\",\\n        \\"AlertType\\": \\"Scan\\",\\n        \\"AlertTypeEn\\": \\"Scan\\",\\n        \\"AlertTypeCode\\": \\"security_event_config.event_name.webshellName\\",\\n        \\"AlertName\\": \\"Try SNMP weak password\\",\\n        \\"AlertNameEn\\": \\"Try SNMP weak password\\",\\n        \\"AlertNameCode\\": \\"security_event_config.event_name.webshell\\",\\n        \\"AlertLevel\\": \\"remind\\",\\n        \\"AssetList\\": \\"[\\\\n      {\\\\n            \\\\\\"is_main_asset\\\\\\": \\\\\\"1\\\\\\",\\\\n            \\\\\\"asset_name\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"port\\\\\\": \\\\\\"22\\\\\\",\\\\n            \\\\\\"ip\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"asset_type\\\\\\": \\\\\\"ip\\\\\\",\\\\n            \\\\\\"location\\\\\\": \\\\\\"ap-southeast-1\\\\\\",\\\\n            \\\\\\"asset_id\\\\\\": \\\\\\"47.245.*\\\\\\",\\\\n            \\\\\\"net_connect_dir\\\\\\": \\\\\\"in\\\\\\"\\\\n      }\\\\n]\\",\\n        \\"OccurTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"StartTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"EndTime\\": \\"2021-01-06 16:37:29\\",\\n        \\"AlertSrcProdModule\\": \\"waf\\",\\n        \\"AlertDesc\\": \\"The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.\\",\\n        \\"AlertDescEn\\": \\"The detection model found a suspicious Webshell file on your server, which may be a backdoor file implanted to maintain permissions after the attacker successfully invaded the website.\\",\\n        \\"AlertDescCode\\": \\"security_event_config.event_name.webshell\\\\n\\",\\n        \\"AlertDetail\\": \\"{\\\\\\"main_user_id\\\\\\": \\\\\\"165295629792****\\\\\\";\\\\\\"log_uuid_count\\\\\\": \\\\\\"99\\\\\\";\\\\\\"attack_ip\\\\\\": \\\\\\"21.92.*.*\\\\\\"}\\",\\n        \\"LogUuid\\": \\"cfw_d12e285a-a042-4d7e-be89-f8a795ef****\\",\\n        \\"EntityList\\": \\"[{&quot;entity_user_id&quot;:&quot;198921674491****&quot;,&quot;entity_account_id&quot;:&quot;N/A&quot;,&quot;entity_uuid&quot;:&quot;6245f979d5dd9ef8dd19bdc72228****&quot;,&quot;entity_type&quot;:&quot;host&quot;,&quot;entity_name&quot;:&quot;zhh-test-20240409&quot;,&quot;is_comprised&quot;:&quot;1&quot;,&quot;os_type&quot;:&quot;linux&quot;,&quot;entity_id&quot;:&quot;a88f44dd-b8d4-4ded-831c-77a4835****&quot;,&quot;host_uuid&quot;:&quot;a88f44dd-b8d4-4ded-831c-77a4835****&quot;,&quot;host_name&quot;:&quot;zhh-test-2024****&quot;}]\\",\\n        \\"AttCk\\": \\"T1595.002 Vulnerability Scanning\\",\\n        \\"SubUserId\\": 0,\\n        \\"CloudCode\\": \\"aliyun\\",\\n        \\"IsDefend\\": \\"1\\",\\n        \\"AlertInfoList\\": [\\n          {\\n            \\"Key\\": \\"suspicious.wbd.wb.trojanpath\\",\\n            \\"KeyName\\": \\"Trojan Path\\\\n\\",\\n            \\"Values\\": \\"/root/test33.php\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取事件关联的告警列表',
    ),
    'DescribeAlertSourceWithEvent' => 
    array (
      'summary' => '获取事件关联告警数据源列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件全局唯一id。',
            'description' => '事件全局唯一ID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：

- cn-hangzhou：资产属于中国
- ap-southeast-1：资产属于全球（不含中国）',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<AlertSource>>',
            'description' => 'BaseResponse<List<AlertSource>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SourceName' => 
                    array (
                      'title' => '告警数据源名称。',
                      'description' => '告警数据源名称。',
                      'type' => 'string',
                      'example' => 'sas',
                    ),
                    'Source' => 
                    array (
                      'title' => '告警数据源名称美杜莎code。',
                      'description' => '告警数据源名称美杜莎code。',
                      'type' => 'string',
                      'example' => 'aliyun.siem.alert_datasource.sas',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"SourceName\\": \\"sas\\",\\n      \\"Source\\": \\"aliyun.siem.alert_datasource.sas\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取事件关联告警数据源列表',
    ),
    'GetLogs' => 
    array (
      'summary' => '返回日志分析中查询分析SQL语句执行的结果。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Query',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询语句或者分析语句。更多信息，请参见日志服务查询概述和分析概述。',
            'description' => '查询语句或者分析语句。更多信息，请参见日志服务[查询概述](~~43772~~)和[分析概述](~~53608~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5',
          ),
        ),
        1 => 
        array (
          'name' => 'From',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间点。该时间是指写入日志数据时指定的日志时间。',
            'description' => '查询的开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1684377190',
          ),
        ),
        2 => 
        array (
          'name' => 'To',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间点。该时间是指写入日志数据时指定的日志时间。',
            'description' => '查询的结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1684378326',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询分析时，每页显示结果行数，取值范围为0-100。',
            'description' => '查询分析时，每页显示结果行数，取值范围为0-100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageIndex',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询分析时，当前的查询页数，从1开始。',
            'description' => '查询分析时，当前的查询页数，从1开始。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Total',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '根据查询条件查询出的总数量。',
            'description' => '根据查询条件查询出的总数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'ReverseOrNot',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询语句时，是否结果按照时间（分钟级别）降序排列，默认为true。取值：
- true：降序
- false：升序',
            'description' => '查询语句时，是否结果按照时间（分钟级别）降序排列，默认为true。取值：
- true：降序
- false：升序',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<CloudSiemGetLogsResponse>',
            'description' => 'PageResponse<CloudSiemGetLogsResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功，取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '93A8B186-A5F1-5B20-9BCF-5605C5E9****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '查询分析的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '当前页加载的数据内容。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '当前页数，从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '20',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '日志总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '200',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '日志内容。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CompleteOrNot' => 
                      array (
                        'title' => '整体查询结果的状态，包括：True：本次查询已经完成，整体返回结果为完整结果。False：本次查询已经完成，整体返回结果为不完整结果，需要重复请求以获得完整结果。',
                        'description' => '整体查询结果的状态，取值：
- true：本次查询已经完成，整体返回结果为完整结果
- false：本次查询已经完成，整体返回结果为不完整结果，需要重复请求以获得完整结果',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'Count' => 
                      array (
                        'title' => '本次查询请求返回的日志行数。',
                        'description' => '本次查询请求返回的日志行数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '4',
                      ),
                      'Cost' => 
                      array (
                        'title' => '本次查询消耗的毫秒数。',
                        'description' => '本次查询消耗的毫秒数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '28',
                      ),
                      'HasSql' => 
                      array (
                        'title' => '是否包含分析语句',
                        'description' => '是否包含分析语句，取值：
- true：包含
- false：不包含',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'Keys' => 
                      array (
                        'title' => '日志索引字段。',
                        'description' => '日志索引字段列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '索引字段。',
                          'type' => 'string',
                          'example' => '__topic__',
                        ),
                      ),
                      'Lines' => 
                      array (
                        'title' => '本次查询产生的数据。',
                        'description' => '本次查询产生的原始数据。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '一行原始数据。',
                          'type' => 'any',
                          'example' => 'alert_level: suspicious
alert_name: login_common_ip
alert_name_code: security_event_config.event_name.ilp
alert_name_en: Login with unusual IP
alert_src_prod: sas
alert_src_prod_module: aegis_login_log
alert_title_en: Unusual Logon-Login with unusual IP',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Siem.Analysis.IllegalParameter',
            'errorMessage' => 'Start time should less than or equal to end time.',
          ),
          1 => 
          array (
            'errorCode' => 'Siem.Analysis.SQLError',
            'errorMessage' => 'Analysis SQL is error.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"93A8B186-A5F1-5B20-9BCF-5605C5E9****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 20,\\n      \\"TotalCount\\": 200\\n    },\\n    \\"ResponseData\\": {\\n      \\"CompleteOrNot\\": true,\\n      \\"Count\\": 4,\\n      \\"Cost\\": 28,\\n      \\"HasSql\\": true,\\n      \\"Keys\\": [\\n        \\"__topic__\\"\\n      ],\\n      \\"Lines\\": [\\n        \\"alert_level: suspicious\\\\nalert_name: login_common_ip\\\\nalert_name_code: security_event_config.event_name.ilp\\\\nalert_name_en: Login with unusual IP\\\\nalert_src_prod: sas\\\\nalert_src_prod_module: aegis_login_log\\\\nalert_title_en: Unusual Logon-Login with unusual IP\\"\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取威胁分析查询分析的日志数据',
    ),
    'GetHistograms' => 
    array (
      'summary' => '返回查询分析SQL执行结果的数据直方图数据，可以用来在前端渲染直方图展示。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Query',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询语句。仅支持查询语句，不支持分析语句。关于查询语句的详细语法和使用限制，请参日志服务的见查询概述。',
            'description' => '查询语句。仅支持查询语句，不支持分析语句。关于查询语句的详细语法和使用限制，请参日志服务的见[查询概述](~~29060~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '* and status: 401',
          ),
        ),
        1 => 
        array (
          'name' => 'From',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '子时间区间的开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。',
            'description' => '子时间区间的开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1409529600',
          ),
        ),
        2 => 
        array (
          'name' => 'To',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '子时间区间的结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。',
            'description' => '子时间区间的结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。时间区间遵循“左闭右开”原则，即该时间区间包括区间开始时间点，但不包括区间结束时间点。如果from和to的值相同，则为无效区间，函数直接返回错误。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1409569200',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<CloudSiemGetHistogramsResponse>',
            'description' => 'CloudSiemResponse<CloudSiemGetHistogramsResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '直方图数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Server' => 
                  array (
                    'title' => '服务器名称。',
                    'description' => '服务器名称。',
                    'type' => 'string',
                    'example' => 'nginx',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '该子时间区间内查询到的日志条数。',
                    'description' => '该子时间区间内查询到的日志条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'Histograms' => 
                  array (
                    'title' => '具体日志分布情况',
                    'description' => '具体日志分布情况。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '单位直方图数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'From' => 
                        array (
                          'title' => '子时间区间的开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                          'description' => '子时间区间的开始时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1409529600',
                        ),
                        'To' => 
                        array (
                          'title' => '子时间区间的结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                          'description' => '子时间区间的结束时间点。UNIX时间戳格式，表示从1970-1-1 00:00:00 UTC计算起的秒数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1409569200',
                        ),
                        'Count' => 
                        array (
                          'title' => '子时间区间的日志数量。',
                          'description' => '子时间区间的日志数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'CompletedOrNot' => 
                        array (
                          'title' => '当前查询结果在该子时间区间内的结果是否完整。True：查询已经完成，返回结果为完整结果。False：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                          'description' => '当前查询结果在该子时间区间内的结果是否完整。取值：
- true：查询已经完成，返回结果为完整结果。
- false：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '97A31C3A-3F9F-5866-8979-5159E3DC****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Siem.Analysis.IllegalParameter',
            'errorMessage' => 'Start time should less than or equal to end time.',
          ),
          1 => 
          array (
            'errorCode' => 'Siem.Analysis.SQLError',
            'errorMessage' => 'Analysis SQL is error.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Server\\": \\"nginx\\",\\n    \\"TotalCount\\": 2,\\n    \\"Histograms\\": [\\n      {\\n        \\"From\\": 1409529600,\\n        \\"To\\": 1409569200,\\n        \\"Count\\": 100,\\n        \\"CompletedOrNot\\": true\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"97A31C3A-3F9F-5866-8979-5159E3DC****\\"\\n}","type":"json"}]',
      'title' => '获取威胁分析日志查询分析结果的直方图数据',
    ),
    'DoQuickField' => 
    array (
      'summary' => '普通成员登录看到的日志分析页面中，可以通过左侧的快速分析字段进行查询分析。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Index',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '索引字段。',
            'description' => '索引字段。',
            'type' => 'string',
            'required' => true,
            'example' => 'alert_level',
          ),
        ),
        1 => 
        array (
          'name' => 'From',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询分析的结束时间点，Unix时间戳格式，精确到秒。',
            'description' => '查询分析的开始时间点，Unix时间戳格式，精确到秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1684376244',
          ),
        ),
        2 => 
        array (
          'name' => 'To',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询分析的结束时间点，Unix时间戳格式，精确到秒。',
            'description' => '查询分析的结束时间点，Unix时间戳格式，精确到秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1684378090',
          ),
        ),
        3 => 
        array (
          'name' => 'Page',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '快速分析结果较多时的进行分页，默认为1。',
            'description' => '快速分析结果较多时的进行分页，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Size',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '快速分析结果较多时每页的展示的数量，默认为10。',
            'description' => '快速分析结果较多时每页的展示的数量，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'Reverse',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结果排序，默认为降序。',
            'description' => '查询结果排序，默认为降序。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<CloudSiemDoQuickAnalysisResponse>',
            'description' => 'CloudSiemResponse<CloudSiemDoQuickAnalysisResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '快速分析返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'QueryMode' => 
                  array (
                    'title' => '查询模式',
                    'description' => '该参数已废弃，无需关注。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Limited' => 
                  array (
                    'title' => '不再使用',
                    'description' => '该参数已废弃，无需关注。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Count' => 
                  array (
                    'title' => '本次查询请求返回的日志行数。',
                    'description' => '本次查询请求返回的日志行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'HasSQL' => 
                  array (
                    'title' => '不再使用',
                    'description' => '该参数已废弃，无需关注。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'WhereQuery' => 
                  array (
                    'title' => '不再使用',
                    'description' => '该参数已废弃，无需关注。',
                    'type' => 'string',
                    'example' => '* and alert_level : remind | with_pack_meta',
                  ),
                  'PQuery' => 
                  array (
                    'title' => '不再使用',
                    'description' => '该参数已废弃，无需关注。',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'ProcessedRows' => 
                  array (
                    'title' => '本次查询处理的行数。',
                    'description' => '本次查询处理的行数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1000',
                  ),
                  'CompleteOrNot' => 
                  array (
                    'title' => '本次查询是否完成。',
                    'description' => '本次查询是否完成。取值：
- true：完成
- false：未完成',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'AggQueryd' => 
                  array (
                    'title' => '不再使用。',
                    'description' => '该参数已废弃，无需关注。',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'Keys' => 
                  array (
                    'title' => '索引字段',
                    'description' => '该参数已废弃，无需关注。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '该参数已废弃，无需关注。',
                      'type' => 'string',
                      'example' => '""',
                    ),
                  ),
                  'Logs' => 
                  array (
                    'title' => '快速查询获取到的日志',
                    'description' => '快速查询获取到的日志。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '包含了每一行的日志。',
                      'type' => 'any',
                      'example' => '[]',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '06735F17-1EDE-5212-81A3-8585368F****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Siem.Analysis.IllegalParameter',
            'errorMessage' => 'Start time should less than or equal to end time.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"QueryMode\\": 0,\\n    \\"Limited\\": 0,\\n    \\"Count\\": 10,\\n    \\"HasSQL\\": true,\\n    \\"WhereQuery\\": \\"* and alert_level : remind | with_pack_meta\\",\\n    \\"PQuery\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"ProcessedRows\\": 1000,\\n    \\"CompleteOrNot\\": true,\\n    \\"AggQueryd\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"Keys\\": [\\n      \\"\\\\\\"\\\\\\"\\"\\n    ],\\n    \\"Logs\\": [\\n      \\"[]\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"06735F17-1EDE-5212-81A3-8585368F****\\"\\n}","type":"json"}]',
      'title' => '使用快速分析字段进行分析',
    ),
    'ListQuickQuery' => 
    array (
      'summary' => '获取日志分析页面针对当前LogStore的所有快速查询列表。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分页查询时，设置的每页行数，最大值为500。',
            'description' => '分页查询时，设置的每页行数，最大值为500。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '50',
          ),
        ),
        1 => 
        array (
          'name' => 'Offset',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始行，默认值为0。',
            'description' => '查询开始行，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<CloudSiemListQuickQueryResponse>',
            'description' => 'CloudSiemResponse<CloudSiemListQuickQueryResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '分页结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'title' => '符合查询条件的快速查询总数',
                    'description' => '符合查询条件的快速查询总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '101',
                  ),
                  'Count' => 
                  array (
                    'title' => '当前页返回的快速查询个数。',
                    'description' => '当前页返回的快速查询个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'QuickQueryList' => 
                  array (
                    'title' => '快速查询的具体内容。',
                    'description' => '快速查询的具体内容。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Query' => 
                        array (
                          'title' => '快速查询对应的查询分析语句。',
                          'description' => '快速查询对应的查询分析语句。',
                          'type' => 'string',
                          'example' => '* and SamplerAddress:\\"172.18.1.1\\" and OutIf:\\"105\\"',
                        ),
                        'SearchName' => 
                        array (
                          'title' => '快速查询名称。',
                          'description' => '快速查询名称。',
                          'type' => 'string',
                          'example' => 'data_analysis',
                        ),
                        'DisplayName' => 
                        array (
                          'title' => '快速查询别名。',
                          'description' => '快速查询别名。',
                          'type' => 'string',
                          'example' => 'no_1_created_search_used_for_dispaly_ip',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => 'F375A043-4F5B-55F2-A564-CC47FFC6****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Total\\": 101,\\n    \\"Count\\": 10,\\n    \\"QuickQueryList\\": [\\n      {\\n        \\"Query\\": \\"* and SamplerAddress:\\\\\\\\\\\\\\"172.18.1.1\\\\\\\\\\\\\\" and OutIf:\\\\\\\\\\\\\\"105\\\\\\\\\\\\\\"\\",\\n        \\"SearchName\\": \\"data_analysis\\",\\n        \\"DisplayName\\": \\"no_1_created_search_used_for_dispaly_ip\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"F375A043-4F5B-55F2-A564-CC47FFC6****\\"\\n}","type":"json"}]',
      'title' => '获取快速查询的列表',
    ),
    'GetQuickQuery' => 
    array (
      'summary' => '根据自定义的快速查询名字，获取日志分析中存储的快速查询分析SQL语句。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SearchName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '快速查询的名字。',
            'description' => '快速查询的名字。',
            'type' => 'string',
            'required' => true,
            'example' => 'display_login_ip_search',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<String>',
            'description' => 'CloudSiemResponse<String>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '对应的查询分析语句。',
                'type' => 'string',
                'example' => 'status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '27D27DCB-D76B-5064-8B3B-0900DEF7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5\\",\\n  \\"RequestId\\": \\"27D27DCB-D76B-5064-8B3B-0900DEF7****\\"\\n}","type":"json"}]',
      'title' => '获取快速查询的SQL语句',
    ),
    'SaveQuickQuery' => 
    array (
      'summary' => '将日志分析中的查询分析SQL语句保存为快速查询，节省SQL书写时间。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Query',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前的查询分析语句。',
            'description' => '当前的查询分析语句。',
            'type' => 'string',
            'required' => true,
            'example' => '* and dst_ip : "121.43.234.***"',
          ),
        ),
        1 => 
        array (
          'name' => 'DisplayName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '快速查询分析名称。',
            'description' => '快速查询分析名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'no_1_created_search_used_for_dispaly_ip',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '是否保存成功，取值：
- true：保存成功
- false：保存失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '06735F17-1EDE-5212-81A3-8585368F****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"06735F17-1EDE-5212-81A3-8585368F****\\"\\n}","type":"json"}]',
      'title' => '保存当前查询分析语句为快速查询',
    ),
    'DescribeLogStore' => 
    array (
      'summary' => '返回用户侧日志服务中威胁分析使用的LogStore的相关属性，如名字、TTL等。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<CloudSiemDescribeLogStoreResponse>',
            'description' => 'CloudSiemResponse<CloudSiemDescribeLogStoreResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '威胁分析服务返回的具体内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'LogStoreName' => 
                  array (
                    'title' => '日志服务logstore的名字。',
                    'description' => '日志服务LogStore的名字。',
                    'type' => 'string',
                    'example' => 'cloud-siem',
                  ),
                  'Ttl' => 
                  array (
                    'title' => '数据保存天数。',
                    'description' => '数据保存天数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '180',
                  ),
                  'ShardCount' => 
                  array (
                    'title' => '日志服务分区（shard）数目。',
                    'description' => '日志服务分区（shard）数目。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'EnableTracking' => 
                  array (
                    'title' => 'WebTracking。',
                    'description' => '是否通过Web Tracking采集各种浏览器、iOS App或Android App的用户信息，默认关闭。取值：
- true：开启
- false：关闭',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'AutoSplit' => 
                  array (
                    'title' => '自动分裂分区（shard）。',
                    'description' => '自动分裂分区（shard）。取值：
- true：开启
- false：关闭',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'MaxSplitShard' => 
                  array (
                    'title' => '最大分裂数。',
                    'description' => '最大分裂数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '64',
                  ),
                  'AppendMeta' => 
                  array (
                    'title' => '永久保存。',
                    'description' => '接收日志后，是否自动添加客户端外网IP和日志到达时间。取值：
- true：自动添加客户端外网IP和日志到达时间
- false：不自动添加客户端外网IP和日志到达时间',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '9B9CBCEE-9225-5069-BC7F-880938A2****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"LogStoreName\\": \\"cloud-siem\\",\\n    \\"Ttl\\": 180,\\n    \\"ShardCount\\": 2,\\n    \\"EnableTracking\\": false,\\n    \\"AutoSplit\\": false,\\n    \\"MaxSplitShard\\": 64,\\n    \\"AppendMeta\\": false\\n  },\\n  \\"RequestId\\": \\"9B9CBCEE-9225-5069-BC7F-880938A2****\\"\\n}","type":"json"}]',
      'title' => '返回用户存储的相关属性',
    ),
    'ShowQuickAnalysis' => 
    array (
      'summary' => '在日志分析中展示能够用来进行快速分析（索引字段）的字段列表。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<CloudSiemShowQuickAnalysisResponse>',
            'description' => 'CloudSiemResponse<CloudSiemShowQuickAnalysisResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '索引字段列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'IndexList' => 
                  array (
                    'title' => '日志索引字段列表。',
                    'description' => '日志索引字段列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '索引字段。',
                      'type' => 'string',
                      'example' => '__topic__',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '2A4FBD89-C29D-5973-B882-CB2D23F6****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"IndexList\\": [\\n      \\"__topic__\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"2A4FBD89-C29D-5973-B882-CB2D23F6****\\"\\n}","type":"json"}]',
      'title' => '展示快速分析字段列表',
    ),
    'DescribeAlertType' => 
    array (
      'summary' => '获取自定义规则可选威胁类型列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则类型。 取值：
- predefine：预定义
- customize：自定义',
            'description' => '规则类型。 取值：
- predefine：预定义
- customize：自定义',
            'type' => 'string',
            'required' => false,
            'example' => 'customize',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<List<AlertType>>',
            'description' => 'PlainResponse<List<AlertType>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AlertType' => 
                    array (
                      'title' => '威胁类型。',
                      'description' => '威胁类型。',
                      'type' => 'string',
                      'example' => 'WEBSHELL',
                    ),
                    'AlertTypeMds' => 
                    array (
                      'title' => '威胁类型美杜莎code。',
                      'description' => '威胁类型美杜莎code。',
                      'type' => 'string',
                      'example' => 'siem_rule_type_process_abnormal_command',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"AlertType\\": \\"WEBSHELL\\",\\n      \\"AlertTypeMds\\": \\"siem_rule_type_process_abnormal_command\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取自定义规则可选威胁类型列表',
    ),
    'DeleteCustomizeRule' => 
    array (
      'summary' => '根据指定ID自定义规则。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自定义规则ID。',
            'description' => '自定义规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '产品所在地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResponse<Integer>',
            'description' => 'BaseResponse<Integer>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'CloudSiemCustomizeRuleDeleteExcepiton',
            'errorMessage' => 'can not delete online customize rule.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": 123456,\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '删除自定义规则',
    ),
    'DescribeAggregateFunction' => 
    array (
      'summary' => '获取自定义规则支持的聚合函数列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<List<RuleAggregateFunction>>',
            'description' => 'PlainResponse<List<RuleAggregateFunction>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Function' => 
                    array (
                      'title' => '聚合函数。',
                      'description' => '聚合函数。',
                      'type' => 'string',
                      'example' => 'count',
                    ),
                    'FunctionName' => 
                    array (
                      'title' => '聚合函数显示名称。',
                      'description' => '聚合函数显示名称。',
                      'type' => 'string',
                      'example' => 'Count',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Function\\": \\"count\\",\\n      \\"FunctionName\\": \\"Count\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取自定义规则聚合函数列表',
    ),
    'DescribeCustomizeRuleCount' => 
    array (
      'summary' => '获取自定义规则计数。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<CustomizeRuleCounter>',
            'description' => 'PlainResponse<CustomizeRuleCounter>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'InUseRuleNum' => 
                  array (
                    'title' => '全部规则数。',
                    'description' => '全部规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'HighRuleNum' => 
                  array (
                    'title' => '高危规则数。',
                    'description' => '高危规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '12',
                  ),
                  'MediumRuleNum' => 
                  array (
                    'title' => '中危规则数。',
                    'description' => '中危规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'LowRuleNum' => 
                  array (
                    'title' => '低危规则数。',
                    'description' => '低危规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TotalRuleNum' => 
                  array (
                    'title' => '总规则数',
                    'description' => '总规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'CustomizeRuleNum' => 
                  array (
                    'title' => '自定义规则数',
                    'description' => '自定义规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PredefinedRuleNum' => 
                  array (
                    'title' => '预定义规则数',
                    'description' => '预定义规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'UnEventRuleNum' => 
                  array (
                    'title' => '不产生事件规则数',
                    'description' => '不产生事件规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'ExpertRuleNum' => 
                  array (
                    'title' => '专家规则数',
                    'description' => '专家规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '7',
                  ),
                  'GraphComputingRuleNum' => 
                  array (
                    'title' => '图计算规则数',
                    'description' => '图计算规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'SingleAlertRuleNum' => 
                  array (
                    'title' => '告警透传规则数',
                    'description' => '告警透传规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'AggregationRuleNum' => 
                  array (
                    'title' => '同类聚合规则数',
                    'description' => '同类聚合规则数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"InUseRuleNum\\": 20,\\n    \\"HighRuleNum\\": 12,\\n    \\"MediumRuleNum\\": 5,\\n    \\"LowRuleNum\\": 3,\\n    \\"TotalRuleNum\\": 10,\\n    \\"CustomizeRuleNum\\": 10,\\n    \\"PredefinedRuleNum\\": 10,\\n    \\"UnEventRuleNum\\": 3,\\n    \\"ExpertRuleNum\\": 7,\\n    \\"GraphComputingRuleNum\\": 2,\\n    \\"SingleAlertRuleNum\\": 3,\\n    \\"AggregationRuleNum\\": 3\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取自定义规则计数',
    ),
    'DescribeCustomizeRuleTest' => 
    array (
      'summary' => '获取模拟测试场景下的历史模拟数据。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自定义规则ID。',
            'description' => '自定义规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<CustomizeRuleTest>',
            'description' => 'BaseResponse<CustomizeRuleTest>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'title' => '自定义规则ID。',
                    'description' => '自定义规则ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123456789',
                  ),
                  'Status' => 
                  array (
                    'title' => '规则状态。 取值：
- 0：初始状态
- 10：模拟数据测试
- 15：业务数据测试中
- 20：业务数据测试结束
- 100：规则上线',
                    'description' => '规则状态。 取值：
- 0：初始状态
- 10：模拟数据测试
- 15：业务数据测试中
- 20：业务数据测试结束
- 100：规则上线',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'SimulateData' => 
                  array (
                    'title' => '模拟测试历史用例数据。',
                    'description' => '模拟测试历史用例数据。',
                    'type' => 'string',
                    'example' => '[{"key1":"value1","key2":"value2","key3":"value3","key4":"value4","key5":"value5"}]',
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Id\\": 123456789,\\n    \\"Status\\": 0,\\n    \\"SimulateData\\": \\"[{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\",\\\\\\"key3\\\\\\":\\\\\\"value3\\\\\\",\\\\\\"key4\\\\\\":\\\\\\"value4\\\\\\",\\\\\\"key5\\\\\\":\\\\\\"value5\\\\\\"}]\\"\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取模拟测试场景下的历史模拟数据',
    ),
    'DescribeCustomizeRuleTestHistogram' => 
    array (
      'summary' => '获取自定义规则业务测试结果图表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自定义规则ID。',
            'description' => '自定义规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<CustomizeRuleAlertHistogram>>',
            'description' => 'BaseResponse<List<CustomizeRuleAlertHistogram>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'From' => 
                    array (
                      'title' => '告警时间区间的开始时间戳 单位：秒。',
                      'description' => '告警时间区间的开始时间戳。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1599897188',
                    ),
                    'To' => 
                    array (
                      'title' => '告警时间区间的结束时间戳 单位：秒。',
                      'description' => '告警时间区间的结束时间戳。单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1599997188',
                    ),
                    'Count' => 
                    array (
                      'title' => '当前查询结果在该子时间区间内产生的告警数。',
                      'description' => '当前查询结果在该子时间区间内产生的告警数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '125',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"From\\": 1599897188,\\n      \\"To\\": 1599997188,\\n      \\"Count\\": 125\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取自定义规则业务测试结果图表',
    ),
    'DescribeLogFields' => 
    array (
      'summary' => '获取自定义规则可配置字段列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LogType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则对应的日志源。',
            'description' => '规则对应的日志源。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_siem_aegis_sas_alert',
          ),
        ),
        1 => 
        array (
          'name' => 'LogSource',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则对应的日志源。',
            'description' => '规则对应的日志源。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_siem_aegis_sas_alert',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<List<CustomizeRuleField>>',
            'description' => 'PlainResponse<List<CustomizeRuleField>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FieldName' => 
                    array (
                      'title' => '规则字段名称。',
                      'description' => '规则字段名称。',
                      'type' => 'string',
                      'example' => 'activity_name',
                    ),
                    'FieldDesc' => 
                    array (
                      'title' => '字段描述美杜莎code。',
                      'description' => '字段描述美杜莎Code。',
                      'type' => 'string',
                      'example' => 'sas.cloudsiem.prod.activity_name',
                    ),
                    'LogCode' => 
                    array (
                      'title' => '字段所属日志源。',
                      'description' => '字段所属日志源。',
                      'type' => 'string',
                      'example' => 'cloud_siem_aegis_sas_alert',
                    ),
                    'ActivityName' => 
                    array (
                      'title' => '字段所属日志类型。',
                      'description' => '字段所属日志类型。',
                      'type' => 'string',
                      'example' => 'HTTP_ACTIVITY',
                    ),
                    'FieldType' => 
                    array (
                      'title' => '字段数据类型。 取值：
- varchar：字符串
- bigint：数字',
                      'description' => '字段数据类型。 取值：
- varchar：字符串
- bigint：数字',
                      'type' => 'string',
                      'example' => 'varchar',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"FieldName\\": \\"activity_name\\",\\n      \\"FieldDesc\\": \\"sas.cloudsiem.prod.activity_name\\",\\n      \\"LogCode\\": \\"cloud_siem_aegis_sas_alert\\",\\n      \\"ActivityName\\": \\"HTTP_ACTIVITY\\",\\n      \\"FieldType\\": \\"varchar\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取自定义规则可配置字段列表',
    ),
    'DescribeLogSource' => 
    array (
      'summary' => '获取自定义规则可配置日志源列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LogType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则对应的日志类型。',
            'description' => '规则对应的日志类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'HTTP_ACTIVITY',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<List<LogSource>>',
            'description' => 'PlainResponse<List<LogSource>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LogSource' => 
                    array (
                      'title' => '规则对应的日志源。',
                      'description' => '规则对应的日志源。',
                      'type' => 'string',
                      'example' => 'cloud_siem_aegis_sas_alert',
                    ),
                    'LogSourceName' => 
                    array (
                      'title' => '规则对应的日志源美杜莎code。',
                      'description' => '规则对应的日志源美杜莎Code。',
                      'type' => 'string',
                      'example' => 'sas.cloudsiem.prod.cloud_siem_aegis_sas_alert',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"LogSource\\": \\"cloud_siem_aegis_sas_alert\\",\\n      \\"LogSourceName\\": \\"sas.cloudsiem.prod.cloud_siem_aegis_sas_alert\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取自定义规则可配置日志源列表',
    ),
    'DescribeLogType' => 
    array (
      'summary' => '获取自定义规则可配置日志类型。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<List<LogType>>',
            'description' => 'PlainResponse<List<LogType>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LogType' => 
                    array (
                      'title' => '规则对应的日志类型。',
                      'description' => '规则对应的日志类型。',
                      'type' => 'string',
                      'example' => 'HTTP_ACTIVITY',
                    ),
                    'LogTypeName' => 
                    array (
                      'title' => '日志类型名称美杜莎code。',
                      'description' => '日志类型名称美杜莎Code。',
                      'type' => 'string',
                      'example' => 'sas.cloudsiem.prod.http_activity',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"LogType\\": \\"HTTP_ACTIVITY\\",\\n      \\"LogTypeName\\": \\"sas.cloudsiem.prod.http_activity\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取自定义规则可配置日志类型',
    ),
    'DescribeOperators' => 
    array (
      'summary' => '获取自定义规则操作符列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作符使用场景类型。 取值：
- 不传：默认场景
- AGGREGATE：聚合函数场景',
            'description' => '操作符使用场景类型。取值：
- 不传：默认场景
- AGGREGATE：聚合函数场景',
            'type' => 'string',
            'required' => false,
            'example' => 'AGGREGATE',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PlainResponse<List<CustomizeRuleOperator>>',
            'description' => 'PlainResponse<List<CustomizeRuleOperator>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Operator' => 
                    array (
                      'title' => '操作符。',
                      'description' => '操作符。',
                      'type' => 'string',
                      'example' => '<=',
                    ),
                    'OperatorName' => 
                    array (
                      'title' => '操作符显示名称。',
                      'description' => '操作符显示名称。',
                      'type' => 'string',
                      'example' => '<=',
                    ),
                    'OperatorDescCn' => 
                    array (
                      'title' => '操作符中文描述。',
                      'description' => '操作符中文描述。',
                      'type' => 'string',
                      'example' => 'arger than or equal to',
                    ),
                    'OperatorDescEn' => 
                    array (
                      'title' => '操作符英文描述。',
                      'description' => '操作符英文描述。',
                      'type' => 'string',
                      'example' => 'larger than or equal to',
                    ),
                    'SupportDataType' => 
                    array (
                      'title' => '当前操作符可以支持的数据类型 以逗号分隔。',
                      'description' => '当前操作符可以支持的数据类型，以逗号分隔。',
                      'type' => 'string',
                      'example' => 'varchar',
                    ),
                    'SupportTag' => 
                    array (
                      'title' => '操作符支持场景 多个场景以逗号分隔 如聚合（AGGREGATE）等 默认为空。',
                      'description' => '操作符支持场景。多个场景以逗号分隔，如聚合（AGGREGATE）等，默认为空。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '操作符支持场景。多个场景以逗号分隔，如聚合（AGGREGATE）等，默认为空。',
                        'type' => 'string',
                        'example' => '[AGGREGATE]',
                      ),
                      'example' => '[AGGREGATE]',
                    ),
                    'Index' => 
                    array (
                      'title' => '操作符所处操作符列表位置。',
                      'description' => '操作符所在的操作符列表位置。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Operator\\": \\"<=\\",\\n      \\"OperatorName\\": \\"<=\\",\\n      \\"OperatorDescCn\\": \\"arger than or equal to\\",\\n      \\"OperatorDescEn\\": \\"larger than or equal to\\",\\n      \\"SupportDataType\\": \\"varchar\\",\\n      \\"SupportTag\\": [\\n        \\"[AGGREGATE]\\"\\n      ],\\n      \\"Index\\": 3\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取自定义规则操作符列表',
    ),
    'ListCloudSiemCustomizeRules' => 
    array (
      'summary' => '获取自定义规则列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则ID。',
            'description' => '自定义规则ID。',
            'type' => 'string',
            'required' => false,
            'example' => '10223',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间, 单位毫秒。',
            'description' => '查询开始时间，单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间, 单位毫秒。',
            'description' => '查询结束时间，单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        3 => 
        array (
          'name' => 'ThreatLevel',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'description' => '威胁等级，JSON数组格式。取值：
- **serious**：高危
- **suspicious**：中危
- **remind**：低危',
            'type' => 'array',
            'items' => 
            array (
              'description' => '威胁等级，JSON数组格式。取值：

- **serious**：高危
- **suspicious**：中危
- **remind**：低危',
              'type' => 'string',
              'required' => false,
              'example' => '["remind","serious"]
',
            ),
            'required' => false,
            'example' => '["serious","suspicious","remind"]',
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'AlertType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警类型。',
            'description' => '告警类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'scan',
          ),
        ),
        5 => 
        array (
          'name' => 'RuleName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则名称, 仅支持字母、数字、下划线、点。',
            'description' => '规则名称，仅支持字母、数字、下划线、点。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf_scan',
          ),
        ),
        6 => 
        array (
          'name' => 'RuleType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则类型。 取值：
- predefine：预定义
- customize：自定义',
            'description' => '规则类型。取值：
- **predefine**：预定义
- **customize**：自定义',
            'type' => 'string',
            'required' => false,
            'example' => 'customize',
          ),
        ),
        7 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则状态。 取值：
- 0：初始状态
- 10：模拟数据测试
- 15：业务数据测试中
- 20：业务数据测试结束
- 100：规则上线',
            'description' => '规则状态。取值：
- **0**：初始状态
- **10**：模拟数据测试
- **15**：业务数据测试中
- **20**：业务数据测试结束
- **100**：规则上线',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'OrderField',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则列表排列字段。 取值：
- GmtModified：基于修改时间排序
- Id：基于规则id排序（默认）',
            'description' => '规则列表排列字段。 取值：
- GmtModified：基于修改时间排序
- Id：基于规则id排序（默认）',
            'type' => 'string',
            'required' => false,
            'example' => 'Id',
          ),
        ),
        9 => 
        array (
          'name' => 'Order',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件列表排列方向。 取值：
- desc：降序排列
- asc：升序排列。',
            'description' => '事件列表排列方向。 取值：
- desc：降序排列
- asc：升序排列。',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
          ),
        ),
        10 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号，大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数，最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        12 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        13 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        14 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- **cn-hangzhou**：资产属于中国内地与中国香港
- **ap-southeast-1**：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<CloudSiemCustomizeRule>>',
            'description' => 'PageResponse<List<CloudSiemCustomizeRule>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- **true**：成功
- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '自定义规则ID。',
                          'description' => '自定义规则ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123456789',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '自定义规则创建时间。',
                          'description' => '自定义规则创建时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '自定义规则最后更新时间。',
                          'description' => '自定义规则最后更新时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'Aliuid' => 
                        array (
                          'title' => 'siem主账号ID。',
                          'description' => 'SIEM主账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '127608589417****',
                        ),
                        'RuleName' => 
                        array (
                          'title' => '规则名称。',
                          'description' => '规则名称。',
                          'type' => 'string',
                          'example' => 'waf_scan',
                        ),
                        'RuleDesc' => 
                        array (
                          'title' => '规则描述。',
                          'description' => '规则描述。',
                          'type' => 'string',
                          'example' => 'this rule is for waf scan',
                        ),
                        'RuleType' => 
                        array (
                          'title' => '规则类型。 取值：
- predefine：预定义
- customize：自定义',
                          'description' => '规则类型。取值：
- **predefine**：预定义
- **customize**：自定义',
                          'type' => 'string',
                          'example' => 'customize',
                        ),
                        'ThreatLevel' => 
                        array (
                          'title' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'description' => '威胁等级。取值：
- **serious**：高危
- **suspicious**：中危
- **remind**：低危',
                          'type' => 'string',
                          'example' => 'remind',
                        ),
                        'AlertType' => 
                        array (
                          'title' => '威胁类型。',
                          'description' => '威胁类型。',
                          'type' => 'string',
                          'example' => 'WEBSHELL',
                        ),
                        'AlertTypeMds' => 
                        array (
                          'title' => '威胁类型美杜莎code。',
                          'description' => '威胁类型美杜莎Code。',
                          'type' => 'string',
                          'example' => '${siem_rule_type_process_abnormal_command}',
                        ),
                        'LogType' => 
                        array (
                          'title' => '规则对应的日志类型。',
                          'description' => '规则对应的日志类型。',
                          'type' => 'string',
                          'example' => 'ALERT_ACTIVITY',
                        ),
                        'LogTypeMds' => 
                        array (
                          'title' => '规则对应的日志类型美杜莎code。',
                          'description' => '规则对应的日志类型美杜莎Code。',
                          'type' => 'string',
                          'example' => '${sas.cloudsiem.prod.alert_activity}',
                        ),
                        'LogSource' => 
                        array (
                          'title' => '规则对应的日志源。',
                          'description' => '规则对应的日志源。',
                          'type' => 'string',
                          'example' => 'cloud_siem_aegis_sas_alert',
                        ),
                        'LogSourceMds' => 
                        array (
                          'title' => '规则对应的日志源美杜莎code。',
                          'description' => '规则对应的日志源美杜莎Code。',
                          'type' => 'string',
                          'example' => '${sas.cloudsiem.prod.cloud_siem_aegis_sas_alert}',
                        ),
                        'RuleCondition' => 
                        array (
                          'title' => '规则查询条件json(需要对html转义字符进行反向转义)。',
                          'description' => '规则查询条件，JSON数组格式（需要对HTML转义字符进行反向转义）。',
                          'type' => 'string',
                          'example' => '[[{&quot;not&quot;:false,&quot;left&quot;:&quot;alert_name&quot;,&quot;operator&quot;:&quot;=&quot;,&quot;right&quot;:&quot;WEBSHELL&quot;}]]',
                        ),
                        'RuleGroup' => 
                        array (
                          'title' => '日志聚合字段,json数组格式(需要对html转义字符进行反向转义)。',
                          'description' => '日志聚合字段，JSON数组格式（需要对HTML转义字符进行反向转义）。',
                          'type' => 'string',
                          'example' => '[&quot;asset_id&quot;]',
                        ),
                        'RuleThreshold' => 
                        array (
                          'title' => '规则阈值配置json(需要对html转义字符进行反向转义)。',
                          'description' => '规则阈值配置json（需要对html转义字符进行反向转义）。',
                          'type' => 'string',
                          'example' => '{&quot;aggregateFunction&quot;:&quot;count&quot;,&quot;aggregateFunctionName&quot;:&quot;count&quot;,&quot;field&quot;:&quot;activity_name&quot;,&quot;operator&quot;:&quot;&lt;=&quot;,&quot;value&quot;:1}',
                        ),
                        'QueryCycle' => 
                        array (
                          'title' => '规则窗口长度(需要对html转义字符进行反向转义)。',
                          'description' => '规则窗口长度（需要对html转义字符进行反向转义）。',
                          'type' => 'string',
                          'example' => '{&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;HOUR&quot;}',
                        ),
                        'AttCk' => 
                        array (
                          'title' => '告警附加字段attck',
                          'description' => '告警附加字段attck。',
                          'type' => 'string',
                          'example' => 'T1595.002 Vulnerability Scanning',
                        ),
                        'EventTransferSwitch' => 
                        array (
                          'title' => '告警是否转换事件开关。 取值：
- 0：不转换
- 1：转换',
                          'description' => '告警是否转换事件开关。取值：
- **0**：不转换
- **1**：转换',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'EventTransferType' => 
                        array (
                          'title' => '事件生成方式。 取值：
- default:默认内置方式
- singleToSingle：每个告警生成一个事件
- allToSingle：周期内告警生成一个事件',
                          'description' => '事件生成方式。取值：
- **default**：默认内置方式
- **singleToSingle**：每个告警生成一个事件
- **allToSingle**：周期内告警生成一个事件',
                          'type' => 'string',
                          'example' => 'allToSingle',
                        ),
                        'EventTransferExt' => 
                        array (
                          'title' => '事件生成扩展信息 当eventTransferType值为allToSingle该字段有值 表示告警聚合窗口的周期长度以及周期单位(需要对html转义字符进行反向转义)。',
                          'description' => '事件生成扩展信息。当**eventTransferType**值为**allToSingle**，该字段有值，表示告警聚合窗口的周期长度以及周期单位（需要对html转义字符进行反向转义）。',
                          'type' => 'string',
                          'example' => '{&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;MINUTE&quot;}',
                        ),
                        'Status' => 
                        array (
                          'title' => '规则状态。 取值：
- 0：初始状态
- 10：模拟数据测试
- 15：业务数据测试中
- 20：业务数据测试结束
- 100：规则上线',
                          'description' => '规则状态。取值：
- **0**：初始状态
- **10**：模拟数据测试
- **15**：业务数据测试中
- **20**：业务数据测试结束
- **100**：规则上线',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'DataType' => 
                        array (
                          'description' => '视图类型。

0：当前阿里云账号视图。
1：企业下所有账号的视图。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"Id\\": 123456789,\\n        \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n        \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n        \\"Aliuid\\": 0,\\n        \\"RuleName\\": \\"waf_scan\\",\\n        \\"RuleDesc\\": \\"this rule is for waf scan\\",\\n        \\"RuleType\\": \\"customize\\",\\n        \\"ThreatLevel\\": \\"remind\\",\\n        \\"AlertType\\": \\"WEBSHELL\\",\\n        \\"AlertTypeMds\\": \\"${siem_rule_type_process_abnormal_command}\\",\\n        \\"LogType\\": \\"ALERT_ACTIVITY\\",\\n        \\"LogTypeMds\\": \\"${sas.cloudsiem.prod.alert_activity}\\",\\n        \\"LogSource\\": \\"cloud_siem_aegis_sas_alert\\",\\n        \\"LogSourceMds\\": \\"${sas.cloudsiem.prod.cloud_siem_aegis_sas_alert}\\",\\n        \\"RuleCondition\\": \\"[[{&quot;not&quot;:false,&quot;left&quot;:&quot;alert_name&quot;,&quot;operator&quot;:&quot;=&quot;,&quot;right&quot;:&quot;WEBSHELL&quot;}]]\\",\\n        \\"RuleGroup\\": \\"[&quot;asset_id&quot;]\\",\\n        \\"RuleThreshold\\": \\"{&quot;aggregateFunction&quot;:&quot;count&quot;,&quot;aggregateFunctionName&quot;:&quot;count&quot;,&quot;field&quot;:&quot;activity_name&quot;,&quot;operator&quot;:&quot;&lt;=&quot;,&quot;value&quot;:1}\\",\\n        \\"QueryCycle\\": \\"{&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;HOUR&quot;}\\",\\n        \\"AttCk\\": \\"T1595.002 Vulnerability Scanning\\",\\n        \\"EventTransferSwitch\\": 1,\\n        \\"EventTransferType\\": \\"allToSingle\\",\\n        \\"EventTransferExt\\": \\"{&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;MINUTE&quot;}\\",\\n        \\"Status\\": 0,\\n        \\"DataType\\": 1\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取自定义规则列表',
    ),
    'ListCloudSiemPredefinedRules' => 
    array (
      'summary' => '获取预定义规则列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则ID。',
            'description' => '规则ID。',
            'type' => 'string',
            'required' => false,
            'example' => '10223',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间, 单位毫秒。',
            'description' => '查询开始时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间, 单位毫秒。',
            'description' => '查询结束时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
          ),
        ),
        3 => 
        array (
          'name' => 'ThreatLevel',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'description' => '威胁等级，格式为json数组。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'type' => 'array',
            'items' => 
            array (
              'description' => '威胁等级，格式为json数组。取值：

- serious：高危
- suspicious：中危
- remind：低危',
              'type' => 'string',
              'required' => false,
              'example' => '["remind","serious"]
',
            ),
            'required' => false,
            'example' => '["serious","suspicious","remind"]',
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'AlertType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警类型。',
            'description' => '告警类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'scan',
          ),
        ),
        5 => 
        array (
          'name' => 'RuleName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则名称, 仅支持字母、数字、下划线、点。',
            'description' => '规则名称, 仅支持字母、数字、下划线、点。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf_scan',
          ),
        ),
        6 => 
        array (
          'name' => 'RuleType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则类型。 取值：
- predefine：预定义
- customize：自定义',
            'description' => '规则类型。 取值：
- predefine：预定义
- customize：自定义',
            'type' => 'string',
            'required' => false,
            'example' => 'customize',
          ),
        ),
        7 => 
        array (
          'name' => 'EventTransferType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件生成方式。 取值：
- default:默认内置方式
- singleToSingle：每个告警生成一个事件
- allToSingle：周期内告警生成一个事件',
            'description' => '事件生成方式。 取值：
- default:默认内置方式
- singleToSingle：每个告警生成一个事件
- allToSingle：周期内告警生成一个事件',
            'type' => 'string',
            'required' => false,
            'example' => 'allToSingle',
          ),
        ),
        8 => 
        array (
          'name' => 'AttCk',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'att&ck。',
            'description' => 'att&ck。',
            'type' => 'string',
            'required' => false,
            'example' => 'T1595.002 Vulnerability Scanning',
          ),
        ),
        9 => 
        array (
          'name' => 'LogSource',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '日志源。',
            'description' => '日志源。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_siem_alb_flow_log',
          ),
        ),
        10 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则状态。 取值：
- 0：初始状态
- 10：模拟数据测试
- 15：业务数据测试中
- 20：业务数据测试结束
- 100：规则上线',
            'description' => '规则状态。 取值：
- 0：初始状态
- 10：模拟数据测试
- 15：业务数据测试中
- 20：业务数据测试结束
- 100：规则上线',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'OrderField',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则列表排列字段。 取值：
- GmtModified：基于修改时间排序
- Id：基于规则id排序（默认）',
            'description' => '规则列表排列字段。 取值：
- GmtModified：基于修改时间排序
- Id：基于规则id排序（默认）',
            'type' => 'string',
            'required' => false,
            'example' => 'Id',
          ),
        ),
        12 => 
        array (
          'name' => 'Order',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件列表排列方向。 取值：
- desc：降序排列
- asc：升序排列。',
            'description' => '事件列表排列方向。 取值：
- desc：降序排列
- asc：升序排列。',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
          ),
        ),
        13 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号， 大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数， 最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        15 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        16 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        17 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<CloudSiemPredefinedRule>>',
            'description' => 'PageResponse<List<CloudSiemPredefinedRule>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '预定义规则ID。',
                          'description' => '预定义规则ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123456789',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '规则创建时间。',
                          'description' => '规则创建时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '规则修改时间。',
                          'description' => '规则修改时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'RuleName' => 
                        array (
                          'title' => '规则名称。',
                          'description' => '规则名称。',
                          'type' => 'string',
                          'example' => 'siem_base64-command-exec_aegis-proc',
                        ),
                        'RuleNameCn' => 
                        array (
                          'title' => '规则中文名称。',
                          'description' => '规则中文名称。',
                          'type' => 'string',
                          'example' => 'siem_base64-command-exec_aegis-proc',
                        ),
                        'RuleNameEn' => 
                        array (
                          'title' => '规则英文名称。',
                          'description' => '规则英文名称。',
                          'type' => 'string',
                          'example' => 'siem_base64-command-exec_aegis-proc',
                        ),
                        'RuleNameMds' => 
                        array (
                          'title' => '规则名称美杜莎code。',
                          'description' => '规则名称美杜莎Code。',
                          'type' => 'string',
                          'example' => '${siem_rule_name_siem_cfw-attack-count-level-up_cfw-attack}',
                        ),
                        'RuleDescMds' => 
                        array (
                          'title' => '规则描述美杜莎code。',
                          'description' => '规则描述美杜莎Code。',
                          'type' => 'string',
                          'example' => '${siem_rule_description_siem_cfw-attack-count-level-up_cfw-attack}',
                        ),
                        'ThreatLevel' => 
                        array (
                          'title' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'description' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'type' => 'string',
                          'example' => 'remind',
                        ),
                        'AlertType' => 
                        array (
                          'title' => '威胁类型。',
                          'description' => '威胁类型。',
                          'type' => 'string',
                          'example' => 'WEBSHELL',
                        ),
                        'Source' => 
                        array (
                          'title' => '规则对应的日志源。',
                          'description' => '规则对应的日志源。',
                          'type' => 'string',
                          'example' => 'cloud_siem_aegis_proc',
                        ),
                        'EventTransferType' => 
                        array (
                          'title' => '事件生成方式。 取值：
- default:默认内置方式
- singleToSingle：每个告警生成一个事件
- allToSingle：周期内告警生成一个事件',
                          'description' => '事件生成方式。 取值：
- default:默认内置方式
- singleToSingle：每个告警生成一个事件
- allToSingle：周期内告警生成一个事件',
                          'type' => 'string',
                          'example' => 'allToSingle',
                        ),
                        'AttCk' => 
                        array (
                          'title' => '告警附加字段attck',
                          'description' => '告警附加字段attck',
                          'type' => 'string',
                          'example' => 'T1595.002 Vulnerability Scanning',
                        ),
                        'Status' => 
                        array (
                          'title' => '预定义规则启用状态。 取值：
- 0：初始状态
- 100：规则上线',
                          'description' => '预定义规则启用状态。 取值：
- 0：初始状态
- 100：规则上线',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"Id\\": 123456789,\\n        \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n        \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n        \\"RuleName\\": \\"siem_base64-command-exec_aegis-proc\\",\\n        \\"RuleNameCn\\": \\"siem_base64-command-exec_aegis-proc\\",\\n        \\"RuleNameEn\\": \\"siem_base64-command-exec_aegis-proc\\",\\n        \\"RuleNameMds\\": \\"${siem_rule_name_siem_cfw-attack-count-level-up_cfw-attack}\\",\\n        \\"RuleDescMds\\": \\"${siem_rule_description_siem_cfw-attack-count-level-up_cfw-attack}\\",\\n        \\"ThreatLevel\\": \\"remind\\",\\n        \\"AlertType\\": \\"WEBSHELL\\",\\n        \\"Source\\": \\"cloud_siem_aegis_proc\\",\\n        \\"EventTransferType\\": \\"allToSingle\\",\\n        \\"AttCk\\": \\"T1595.002 Vulnerability Scanning\\",\\n        \\"Status\\": 0\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取预定义规则列表',
    ),
    'ListCustomizeRuleTestResult' => 
    array (
      'summary' => '获取自定义规则测试结果列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自定义规则ID。',
            'description' => '自定义规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号，大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数，最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<CustomizeRuleAlert>>',
            'description' => 'PageResponse<List<CustomizeRuleAlert>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Uuid' => 
                        array (
                          'title' => '告警id。',
                          'description' => '告警UUID。',
                          'type' => 'string',
                          'example' => 'sas_71e24437d2797ce8fc59692905a4****',
                        ),
                        'MainUserId' => 
                        array (
                          'title' => '告警关联siem主账号id。',
                          'description' => '告警关联SIEM主账号ID。',
                          'type' => 'string',
                          'example' => '127608589417****',
                        ),
                        'SubUserId' => 
                        array (
                          'title' => '告警史记关联阿里账号ID。',
                          'description' => '告警关联阿里账号ID。',
                          'type' => 'string',
                          'example' => '176555323***',
                        ),
                        'LogType' => 
                        array (
                          'title' => '规则对应的日志类型。',
                          'description' => '规则对应的日志类型。',
                          'type' => 'string',
                          'example' => 'ALERT_ACTIVITY',
                        ),
                        'LogSource' => 
                        array (
                          'title' => '规则对应的日志源。',
                          'description' => '规则对应的日志源。',
                          'type' => 'string',
                          'example' => 'cloud_siem_aegis_sas_alert',
                        ),
                        'AlertSrcProd' => 
                        array (
                          'title' => '事件关联告警来源产品。',
                          'description' => '事件关联告警来源产品。',
                          'type' => 'string',
                          'example' => 'sas',
                        ),
                        'AlertSrcProdModule' => 
                        array (
                          'title' => '事件关联告警来源产品子模块。',
                          'description' => '事件关联告警来源产品子模块。',
                          'type' => 'string',
                          'example' => 'waf',
                        ),
                        'AttCk' => 
                        array (
                          'title' => 'ATTCT&攻击技术标签。',
                          'description' => 'ATTCT&攻击技术标签。',
                          'type' => 'string',
                          'example' => 'T1595.002 Vulnerability Scanning',
                        ),
                        'AlertDesc' => 
                        array (
                          'title' => '告警描述。',
                          'description' => '告警描述。',
                          'type' => 'string',
                          'example' => 'The account you logged in this time is not in the legal account category defined by you. Please confirm the legality of the login behavior。',
                        ),
                        'OnlineStatus' => 
                        array (
                          'title' => '告警数据状态。  取值：
- test：业务测试
- online：上线',
                          'description' => '告警数据状态。 取值：
- test：业务测试
- online：上线',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'EventName' => 
                        array (
                          'title' => '告警名称，对应自定义规则名称。',
                          'description' => '告警名称，对应自定义规则名称。',
                          'type' => 'string',
                          'example' => 'waf_scan',
                        ),
                        'Level' => 
                        array (
                          'title' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'description' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                          'type' => 'string',
                          'example' => 'remind',
                        ),
                        'EventType' => 
                        array (
                          'title' => '威胁类型 即告警类型。',
                          'description' => '威胁类型，即告警类型。',
                          'type' => 'string',
                          'example' => 'WEBSHELL',
                        ),
                        'AlertDetail' => 
                        array (
                          'title' => '告警详情 json格式。',
                          'description' => '告警详情，JSON格式。',
                          'type' => 'string',
                          'example' => '{"main_user_id": "165295629792****";"log_uuid_count": "99";"attack_ip": "218.92.XX.XX"}',
                        ),
                        'LogTime' => 
                        array (
                          'title' => '告警记录时间。',
                          'description' => '告警记录时间。',
                          'type' => 'string',
                          'example' => '2023-01-06 16:37:29',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"Uuid\\": \\"sas_71e24437d2797ce8fc59692905a4****\\",\\n        \\"MainUserId\\": \\"127608589417****\\",\\n        \\"SubUserId\\": \\"176555323***\\",\\n        \\"LogType\\": \\"ALERT_ACTIVITY\\",\\n        \\"LogSource\\": \\"cloud_siem_aegis_sas_alert\\",\\n        \\"AlertSrcProd\\": \\"sas\\",\\n        \\"AlertSrcProdModule\\": \\"waf\\",\\n        \\"AttCk\\": \\"T1595.002 Vulnerability Scanning\\",\\n        \\"AlertDesc\\": \\"The account you logged in this time is not in the legal account category defined by you. Please confirm the legality of the login behavior。\\",\\n        \\"OnlineStatus\\": \\"test\\",\\n        \\"EventName\\": \\"waf_scan\\",\\n        \\"Level\\": \\"remind\\",\\n        \\"EventType\\": \\"WEBSHELL\\",\\n        \\"AlertDetail\\": \\"{\\\\\\"main_user_id\\\\\\": \\\\\\"165295629792****\\\\\\";\\\\\\"log_uuid_count\\\\\\": \\\\\\"99\\\\\\";\\\\\\"attack_ip\\\\\\": \\\\\\"218.92.XX.XX\\\\\\"}\\",\\n        \\"LogTime\\": \\"2023-01-06 16:37:29\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取自定义规则测试结果列表',
    ),
    'PostCustomizeRule' => 
    array (
      'summary' => '添加或者更新自定义规则。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自定义规则ID。',
            'description' => '自定义规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则名称。',
            'description' => '规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf_scan',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleDesc',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则描述。',
            'description' => '规则描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'this rule is for waf scan',
          ),
        ),
        3 => 
        array (
          'name' => 'ThreatLevel',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'description' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
            'type' => 'string',
            'required' => false,
            'example' => 'remind',
          ),
        ),
        4 => 
        array (
          'name' => 'AttCk',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'att&ck。',
            'description' => 'att&ck。',
            'type' => 'string',
            'required' => false,
            'example' => 'T1595.002 Vulnerability Scanning
',
          ),
        ),
        5 => 
        array (
          'name' => 'AlertType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁类型。',
            'description' => '威胁类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'WEBSHELL',
          ),
        ),
        6 => 
        array (
          'name' => 'AlertTypeMds',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁类型美杜莎code。',
            'description' => '威胁类型美杜莎Code。',
            'type' => 'string',
            'required' => false,
            'example' => '${siem_rule_type_process_abnormal_command}',
          ),
        ),
        7 => 
        array (
          'name' => 'LogType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则对应的日志类型。',
            'description' => '规则对应的日志类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'ALERT_ACTIVITY',
          ),
        ),
        8 => 
        array (
          'name' => 'LogTypeMds',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则对应的日志类型美杜莎code。',
            'description' => '规则对应的日志类型美杜莎Code。',
            'type' => 'string',
            'required' => false,
            'example' => '${security_event_config.event_name.webshellName_clientav}',
          ),
        ),
        9 => 
        array (
          'name' => 'LogSource',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则对应的日志源。',
            'description' => '规则对应的日志源。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_siem_aegis_sas_alert',
          ),
        ),
        10 => 
        array (
          'name' => 'LogSourceMds',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则对应的日志源美杜莎code。',
            'description' => '规则对应的日志源美杜莎Code。',
            'type' => 'string',
            'required' => false,
            'example' => '${sas.cloudsiem.prod.cloud_siem_aegis_sas_alert}',
          ),
        ),
        11 => 
        array (
          'name' => 'RuleCondition',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则查询条件json。',
            'description' => '规则查询条件json。',
            'type' => 'string',
            'required' => false,
            'example' => '[[{"not":false,"left":"alert_name","operator":"=","right":"WEBSHELL"}]]',
          ),
        ),
        12 => 
        array (
          'name' => 'RuleGroup',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '日志聚合字段,json数组格式。',
            'description' => '日志聚合字段，json数组格式。',
            'type' => 'string',
            'required' => false,
            'example' => '["asset_id"]',
          ),
        ),
        13 => 
        array (
          'name' => 'RuleThreshold',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则阈值配置json。',
            'description' => '规则阈值配置json。',
            'type' => 'string',
            'required' => false,
            'example' => '{"aggregateFunction":"count","aggregateFunctionName":"count","field":"activity_name","operator":"&lt;=","value":1}',
          ),
        ),
        14 => 
        array (
          'name' => 'QueryCycle',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则窗口长度。',
            'description' => '规则窗口长度。',
            'type' => 'string',
            'required' => false,
            'example' => '{"time":"1","unit":"HOUR"}',
          ),
        ),
        15 => 
        array (
          'name' => 'EventTransferSwitch',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警是否转换事件开关。 取值：
- 0：不转换
- 1：转换',
            'description' => '告警是否转换事件开关。取值：
- 0：不转换
- 1：转换',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        16 => 
        array (
          'name' => 'EventTransferType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件生成方式。 取值：
- default:默认内置方式
- singleToSingle：每个告警生成一个事件
- allToSingle：周期内告警生成一个事件',
            'description' => '事件生成方式。取值：
- default：默认内置方式
- singleToSingle：每个告警生成一个事件
- allToSingle：周期内告警生成一个事件',
            'type' => 'string',
            'required' => false,
            'example' => 'allToSingle',
          ),
        ),
        17 => 
        array (
          'name' => 'EventTransferExt',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件生成扩展信息 当eventTransferType值为allToSingle该字段有值 表示告警聚合窗口的周期长度以及周期单位。',
            'description' => '事件生成扩展信息，当eventTransferType值为allToSingle时，该字段有值，表示告警聚合窗口的周期长度以及周期单位。',
            'type' => 'string',
            'required' => false,
            'example' => '{"time":"1","unit":"MINUTE"}',
          ),
        ),
        18 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        19 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        20 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<CloudSiemCustomizeRule>',
            'description' => 'BaseResponse<CloudSiemCustomizeRule>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'title' => '自定义规则ID。',
                    'description' => '自定义规则id。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123456789',
                  ),
                  'GmtCreate' => 
                  array (
                    'title' => '自定义规则创建时间。',
                    'description' => '自定义规则创建时间。',
                    'type' => 'string',
                    'example' => '2021-01-06 16:37:29',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '自定义规则最后更新时间。',
                    'description' => '自定义规则最后更新时间。',
                    'type' => 'string',
                    'example' => '2021-01-06 16:37:29',
                  ),
                  'Aliuid' => 
                  array (
                    'title' => 'siem主账号ID。',
                    'description' => '购买威胁分析产品的阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '127608589417****',
                  ),
                  'RuleName' => 
                  array (
                    'title' => '规则名称。',
                    'description' => '规则名称。',
                    'type' => 'string',
                    'example' => 'waf_scan',
                  ),
                  'RuleDesc' => 
                  array (
                    'title' => '规则描述。',
                    'description' => '规则描述。',
                    'type' => 'string',
                    'example' => 'this rule is for waf scan',
                  ),
                  'RuleType' => 
                  array (
                    'title' => '规则类型。 取值：
- predefine：预定义
- customize：自定义',
                    'description' => '规则类型。取值：
- predefine：预定义
- customize：自定义',
                    'type' => 'string',
                    'example' => 'customize',
                  ),
                  'ThreatLevel' => 
                  array (
                    'title' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                    'description' => '威胁等级。取值：
- serious：高危
- suspicious：中危
- remind：低危',
                    'type' => 'string',
                    'example' => 'remind',
                  ),
                  'AlertType' => 
                  array (
                    'title' => '威胁类型。',
                    'description' => '威胁类型。',
                    'type' => 'string',
                    'example' => 'WEBSHELL',
                  ),
                  'AlertTypeMds' => 
                  array (
                    'title' => '威胁类型美杜莎code。',
                    'description' => '威胁类型美杜莎Code。',
                    'type' => 'string',
                    'example' => '${siem_rule_type_process_abnormal_command}',
                  ),
                  'LogType' => 
                  array (
                    'title' => '规则对应的日志类型。',
                    'description' => '规则对应的日志类型。',
                    'type' => 'string',
                    'example' => 'ALERT_ACTIVITY',
                  ),
                  'LogTypeMds' => 
                  array (
                    'title' => '规则对应的日志类型美杜莎code。',
                    'description' => '规则对应的日志类型美杜莎Code。',
                    'type' => 'string',
                    'example' => '${security_event_config.event_name.webshellName_clientav}',
                  ),
                  'LogSource' => 
                  array (
                    'title' => '规则对应的日志源。',
                    'description' => '规则对应的日志源。',
                    'type' => 'string',
                    'example' => 'cloud_siem_aegis_sas_alert',
                  ),
                  'LogSourceMds' => 
                  array (
                    'title' => '规则对应的日志源美杜莎code。',
                    'description' => '规则对应的日志源美杜莎code。',
                    'type' => 'string',
                    'example' => '${sas.cloudsiem.prod.cloud_siem_aegis_sas_alert}',
                  ),
                  'RuleCondition' => 
                  array (
                    'title' => '规则查询条件json(需要对html转义字符进行反向转义)。',
                    'description' => '规则查询条件json（需要对html转义字符进行反向转义）。',
                    'type' => 'string',
                    'example' => '[[{&quot;not&quot;:false,&quot;left&quot;:&quot;alert_name&quot;,&quot;operator&quot;:&quot;=&quot;,&quot;right&quot;:&quot;WEBSHELL&quot;}]]',
                  ),
                  'RuleGroup' => 
                  array (
                    'title' => '日志聚合字段,json数组格式(需要对html转义字符进行反向转义)。',
                    'description' => '日志聚合字段,json数组格式（需要对html转义字符进行反向转义）。',
                    'type' => 'string',
                    'example' => '[&quot;asset_id&quot;]',
                  ),
                  'RuleThreshold' => 
                  array (
                    'title' => '规则阈值配置json(需要对html转义字符进行反向转义)。',
                    'description' => '规则阈值配置json（需要对html转义字符进行反向转义）。',
                    'type' => 'string',
                    'example' => '{&quot;aggregateFunction&quot;:&quot;count&quot;,&quot;aggregateFunctionName&quot;:&quot;count&quot;,&quot;field&quot;:&quot;activity_name&quot;,&quot;operator&quot;:&quot;&lt;=&quot;,&quot;value&quot;:1}',
                  ),
                  'QueryCycle' => 
                  array (
                    'title' => '规则窗口长度(需要对html转义字符进行反向转义)。',
                    'description' => '规则窗口长度（需要对html转义字符进行反向转义）。',
                    'type' => 'string',
                    'example' => '{&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;HOUR&quot;}',
                  ),
                  'AttCk' => 
                  array (
                    'title' => '告警附加字段attck',
                    'description' => '告警附加字段attck',
                    'type' => 'string',
                    'example' => 'T1595.002 Vulnerability Scanning',
                  ),
                  'EventTransferSwitch' => 
                  array (
                    'title' => '告警是否转换事件开关。 取值：
- 0：不转换
- 1：转换',
                    'description' => '告警是否转换事件开关。取值：
- 0：不转换
- 1：转换',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'EventTransferType' => 
                  array (
                    'title' => '事件生成方式。 取值：
- default:默认内置方式
- singleToSingle：每个告警生成一个事件
- allToSingle：周期内告警生成一个事件',
                    'description' => '事件生成方式。取值：
- default：默认内置方式
- singleToSingle：每个告警生成一个事件
- allToSingle：周期内告警生成一个事件',
                    'type' => 'string',
                    'example' => 'allToSingle',
                  ),
                  'EventTransferExt' => 
                  array (
                    'title' => '事件生成扩展信息 当eventTransferType值为allToSingle该字段有值 表示告警聚合窗口的周期长度以及周期单位(需要对html转义字符进行反向转义)。',
                    'description' => '事件生成扩展信息，当eventTransferType值为allToSingle时，该字段有值，表示告警聚合窗口的周期长度以及周期单位，（需要对html转义字符进行反向转义）。',
                    'type' => 'string',
                    'example' => '{&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;MINUTE&quot;}',
                  ),
                  'Status' => 
                  array (
                    'title' => '规则状态。 取值：
- 0：初始状态
- 10：模拟数据测试
- 15：业务数据测试中
- 20：业务数据测试结束
- 100：规则上线',
                    'description' => '规则状态。取值：
- 0：初始状态
- 10：模拟数据测试
- 15：业务数据测试中
- 20：业务数据测试结束
- 100：规则上线',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'DataType' => 
                  array (
                    'description' => '自动化响应规则条件字段数据类型。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => 'varchar',
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'CloudSiemCustomizeRuleUpdateExcepiton',
            'errorMessage' => 'this customize rule can only update in init status.',
          ),
          1 => 
          array (
            'errorCode' => 'CloudSiemCustomizeRuleConditionExceedExcepiton',
            'errorMessage' => 'the number of rule conditions cannot exceed 100.',
          ),
          2 => 
          array (
            'errorCode' => 'CloudSiemCustomizeRuleDuplicateRuleNameExcepiton',
            'errorMessage' => 'the rule name is duplicated.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Id\\": 123456789,\\n    \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n    \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n    \\"Aliuid\\": 0,\\n    \\"RuleName\\": \\"waf_scan\\",\\n    \\"RuleDesc\\": \\"this rule is for waf scan\\",\\n    \\"RuleType\\": \\"customize\\",\\n    \\"ThreatLevel\\": \\"remind\\",\\n    \\"AlertType\\": \\"WEBSHELL\\",\\n    \\"AlertTypeMds\\": \\"${siem_rule_type_process_abnormal_command}\\",\\n    \\"LogType\\": \\"ALERT_ACTIVITY\\",\\n    \\"LogTypeMds\\": \\"${security_event_config.event_name.webshellName_clientav}\\",\\n    \\"LogSource\\": \\"cloud_siem_aegis_sas_alert\\",\\n    \\"LogSourceMds\\": \\"${sas.cloudsiem.prod.cloud_siem_aegis_sas_alert}\\",\\n    \\"RuleCondition\\": \\"[[{&quot;not&quot;:false,&quot;left&quot;:&quot;alert_name&quot;,&quot;operator&quot;:&quot;=&quot;,&quot;right&quot;:&quot;WEBSHELL&quot;}]]\\",\\n    \\"RuleGroup\\": \\"[&quot;asset_id&quot;]\\",\\n    \\"RuleThreshold\\": \\"{&quot;aggregateFunction&quot;:&quot;count&quot;,&quot;aggregateFunctionName&quot;:&quot;count&quot;,&quot;field&quot;:&quot;activity_name&quot;,&quot;operator&quot;:&quot;&lt;=&quot;,&quot;value&quot;:1}\\",\\n    \\"QueryCycle\\": \\"{&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;HOUR&quot;}\\",\\n    \\"AttCk\\": \\"T1595.002 Vulnerability Scanning\\",\\n    \\"EventTransferSwitch\\": 1,\\n    \\"EventTransferType\\": \\"allToSingle\\",\\n    \\"EventTransferExt\\": \\"{&quot;time&quot;:&quot;1&quot;,&quot;unit&quot;:&quot;MINUTE&quot;}\\",\\n    \\"Status\\": 0,\\n    \\"DataType\\": 0\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '添加或者更新自定义规则',
    ),
    'PostCustomizeRuleTest' => 
    array (
      'summary' => '提交自定义规则测试。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自定义规则ID。',
            'description' => '自定义规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'TestType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '测试类型。 取值：
- simulate：模拟数据测试
- business：业务数据测试
- 15：业务数据测试中',
            'description' => '测试类型。取值：
- simulate：模拟数据测试
- business：业务数据测试',
            'type' => 'string',
            'required' => false,
            'example' => 'simulate',
          ),
        ),
        2 => 
        array (
          'name' => 'SimulatedData',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模拟测试数据 只有在测试类型为simulate情况下赋值。',
            'description' => '模拟测试数据，只有在测试类型为simulate情况下赋值。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"key1":"value1","key2":"value2","key3":"value3","key4":"value4","key5":"value5"}]',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'any',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '提交自定义规则测试',
    ),
    'PostFinishCustomizeRuleTest' => 
    array (
      'summary' => '结束自定义规则测试。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自定义规则ID。',
            'description' => '自定义规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'any',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '结束自定义规则测试',
    ),
    'PostRuleStatusChange' => 
    array (
      'summary' => '更新自定义规则状态。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Ids',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则id列表 json数组格式。',
            'description' => '规则id列表 json数组格式。',
            'type' => 'string',
            'required' => false,
            'example' => '[123,345]',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则类型。 取值：
- predefine：预定义
- customize：自定义',
            'description' => '规则类型。 取值：
- predefine：预定义
- customize：自定义',
            'type' => 'string',
            'required' => false,
            'example' => 'customize',
          ),
        ),
        2 => 
        array (
          'name' => 'InUse',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则开启状态。 取值：
- true：开启
- false：关闭',
            'description' => '规则开启状态。 取值：
- true：开启
- false：关闭',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'any',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '更新自定义规则状态',
    ),
    'DescribeScopeUsers' => 
    array (
      'summary' => '获取剧本作用域用户列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<SoarScope>>',
            'description' => 'BaseResponse<List<SoarScope>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AliUid' => 
                    array (
                      'title' => 'siem用户ID。',
                      'description' => 'SIEM用户ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123456789****',
                    ),
                    'UserName' => 
                    array (
                      'title' => '用户名。',
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'test001',
                    ),
                    'UserId' => 
                    array (
                      'title' => '多云用户ID。',
                      'description' => '多云用户ID。',
                      'type' => 'string',
                      'example' => '123456789****',
                    ),
                    'CloudCode' => 
                    array (
                      'title' => '云code。  取值：
- qcloud：腾讯云
- hcloud：华为云',
                      'description' => '云code。  取值：
- qcloud：腾讯云
- hcloud：华为云',
                      'type' => 'string',
                      'example' => 'qcloud',
                    ),
                    'InstanceId' => 
                    array (
                      'title' => 'waf实例ID。',
                      'description' => 'Waf实例ID。',
                      'type' => 'string',
                      'example' => 'waf-cn-tl123ast****',
                    ),
                    'Domains' => 
                    array (
                      'title' => 'waf实例下的防护的域名列表。',
                      'description' => 'Waf实例下的防护的域名列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Waf实例下的防护的域名列表。',
                        'type' => 'string',
                        'example' => '[123***.com, 456***.com]',
                      ),
                      'example' => '[123.com, 456.com]',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"AliUid\\": 0,\\n      \\"UserName\\": \\"test001\\",\\n      \\"UserId\\": \\"123456789****\\",\\n      \\"CloudCode\\": \\"qcloud\\",\\n      \\"InstanceId\\": \\"waf-cn-tl123ast****\\",\\n      \\"Domains\\": [\\n        \\"[123***.com, 456***.com]\\"\\n      ]\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取剧本作用域用户列表',
    ),
    'DeleteAutomateResponseConfig' => 
    array (
      'summary' => '删除指定ID的自动化响应规则。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应配置规则ID。',
            'description' => '自动化响应配置规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<String>',
            'description' => 'BaseResponse<String>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'string',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '删除自动化响应规则',
    ),
    'DescribeAutomateResponseConfigCounter' => 
    array (
      'summary' => '获取自动化响应规则计数。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<AutomateResponseCounter>',
            'description' => 'BaseResponse<AutomateResponseCounter>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'All' => 
                  array (
                    'title' => '总规则数。',
                    'description' => '总规则数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'Online' => 
                  array (
                    'title' => '启动规则数。',
                    'description' => '启动规则数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"All\\": 20,\\n    \\"Online\\": 10\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取自动化响应规则计数',
    ),
    'DescribeAutomateResponseConfigFeature' => 
    array (
      'summary' => '获取自动化规则策略可配置字段及操作符。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AutoResponseType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应类型。 取值：
- event：事件
- alert：告警',
            'description' => '自动化响应类型。取值：
- event：事件
- alert：告警',
            'type' => 'string',
            'required' => false,
            'example' => 'event',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<AutomateResponseConfigFeature>>',
            'description' => 'BaseResponse<List<AutomateResponseConfigFeature>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Feature' => 
                    array (
                      'title' => '自动化响应规则条件字段名称。',
                      'description' => '自动化响应规则条件字段名称。',
                      'type' => 'string',
                      'example' => 'alert_desc',
                    ),
                    'DataType' => 
                    array (
                      'title' => '自动化响应规则条件字段数据类型。',
                      'description' => '自动化响应规则条件字段数据类型。',
                      'type' => 'string',
                      'example' => 'varchar',
                    ),
                    'SupportOperators' => 
                    array (
                      'title' => '该字段支持的操作符列表',
                      'description' => '该字段支持的操作符列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'HasRightValue' => 
                          array (
                            'title' => '是否需要右值 取值:
- 需要：
- false：不需要。',
                            'description' => '是否需要右值。取值：
- true：需要
- false：不需要',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'Operator' => 
                          array (
                            'title' => '操作符。',
                            'description' => '操作符。',
                            'type' => 'string',
                            'example' => '<=',
                          ),
                          'OperatorName' => 
                          array (
                            'title' => '操作符显示名称。',
                            'description' => '操作符显示名称。',
                            'type' => 'string',
                            'example' => '<=',
                          ),
                          'OperatorDescCn' => 
                          array (
                            'title' => '操作符中文描述。',
                            'description' => '操作符中文描述。',
                            'type' => 'string',
                            'example' => 'larger than or equal to',
                          ),
                          'OperatorDescEn' => 
                          array (
                            'title' => '操作符英文描述。',
                            'description' => '操作符英文描述。',
                            'type' => 'string',
                            'example' => 'larger than or equal to',
                          ),
                          'SupportDataType' => 
                          array (
                            'title' => '当前操作符可以支持的数据类型 以逗号分隔。',
                            'description' => '当前操作符可以支持的数据类型，以逗号分隔。',
                            'type' => 'string',
                            'example' => 'varchar',
                          ),
                          'SupportTag' => 
                          array (
                            'title' => '操作符支持场景 多个场景以逗号分隔 如聚合（AGGREGATE）等 默认为空。',
                            'description' => '操作符支持场景。多个场景以逗号分隔，如聚合等。默认为空。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '支持场景。',
                              'type' => 'string',
                              'example' => '[AGGREGATE]',
                            ),
                            'example' => '[AGGREGATE]',
                          ),
                          'Index' => 
                          array (
                            'title' => '操作符所处操作符列表位置。',
                            'description' => '操作符所处操作符列表位置。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '3',
                          ),
                        ),
                      ),
                    ),
                    'RightValueEnums' => 
                    array (
                      'title' => '该字段对应的右值枚举值',
                      'description' => '该字段对应的右值枚举值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Value' => 
                          array (
                            'title' => '右值枚举值。',
                            'description' => '右值枚举值。',
                            'type' => 'string',
                            'example' => 'serious',
                          ),
                          'ValueMds' => 
                          array (
                            'title' => '右值枚举值美杜莎code。',
                            'description' => '右值枚举值美杜莎Code。',
                            'type' => 'string',
                            'example' => 'aliyun.siem.automate.feature.alert_level.serious',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Feature\\": \\"alert_desc\\",\\n      \\"DataType\\": \\"varchar\\",\\n      \\"SupportOperators\\": [\\n        {\\n          \\"HasRightValue\\": false,\\n          \\"Operator\\": \\"<=\\",\\n          \\"OperatorName\\": \\"<=\\",\\n          \\"OperatorDescCn\\": \\"larger than or equal to\\",\\n          \\"OperatorDescEn\\": \\"larger than or equal to\\",\\n          \\"SupportDataType\\": \\"varchar\\",\\n          \\"SupportTag\\": [\\n            \\"[AGGREGATE]\\"\\n          ],\\n          \\"Index\\": 3\\n        }\\n      ],\\n      \\"RightValueEnums\\": [\\n        {\\n          \\"Value\\": \\"serious\\",\\n          \\"ValueMds\\": \\"aliyun.siem.automate.feature.alert_level.serious\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取自动化规则策略可配置字段及操作符',
    ),
    'DescribeAutomateResponseConfigPlayBooks' => 
    array (
      'summary' => '获取用户自定义剧本列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本支持的实体类型。取值：
- ip:ip
- process：进程
- file：文件',
            'description' => '剧本支持的实体类型。取值：
- ip：ip
- process：进程
- file：文件',
            'type' => 'string',
            'required' => false,
            'example' => 'ip',
          ),
        ),
        1 => 
        array (
          'name' => 'AutoResponseType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应类型。 取值：
- event：事件
- alert：告警',
            'description' => '自动化响应类型。 取值：
- event：事件
- alert：告警',
            'type' => 'string',
            'required' => false,
            'example' => 'event',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<AutomatePlaybook>>',
            'description' => 'BaseResponse<List<AutomatePlaybook>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Uuid' => 
                    array (
                      'title' => '剧本UUID。',
                      'description' => '剧本UUID。',
                      'type' => 'string',
                      'example' => 'system_aliyun_clb_process_book',
                    ),
                    'Description' => 
                    array (
                      'title' => '剧本描述。',
                      'description' => '剧本描述。',
                      'type' => 'string',
                      'example' => 'Waf Block IP',
                    ),
                    'DisplayName' => 
                    array (
                      'title' => '剧本显示名称。',
                      'description' => '剧本显示名称。',
                      'type' => 'string',
                      'example' => 'WafBlockIP',
                    ),
                    'Name' => 
                    array (
                      'title' => '剧本唯一标识名称。',
                      'description' => '剧本唯一标识名称。',
                      'type' => 'string',
                      'example' => 'WafBlockIP',
                    ),
                    'ParamType' => 
                    array (
                      'title' => '剧本入参模板。 取值：
- template-ip:ip
- template-process：进程
- template-filee：文件',
                      'description' => '剧本入参模板。 取值：
- template-ip:ip
- template-process：进程
- template-filee：文件',
                      'type' => 'string',
                      'example' => 'template-ip',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Uuid\\": \\"system_aliyun_clb_process_book\\",\\n      \\"Description\\": \\"Waf Block IP\\",\\n      \\"DisplayName\\": \\"WafBlockIP\\",\\n      \\"Name\\": \\"WafBlockIP\\",\\n      \\"ParamType\\": \\"template-ip\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取用户自定义剧本列表',
    ),
    'ListAutomateResponseConfigs' => 
    array (
      'summary' => '获取自动化响应规则列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应配置规则ID。',
            'description' => '自动化响应配置规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'SubUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则创建用户ID。',
            'description' => '规则创建用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '17108579417****',
          ),
        ),
        2 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本唯一标识。',
            'description' => '剧本唯一标识。',
            'type' => 'string',
            'required' => false,
            'example' => 'system_aliyun_aegis_kill_quara_book',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应配置规则名称。',
            'description' => '自动化响应配置规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'cfw kill quara book',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoResponseType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应类型。 取值：
- event：事件
- alert：告警',
            'description' => '自动化响应类型。取值：
- **event**：事件
- **alert**：告警',
            'type' => 'string',
            'required' => false,
            'example' => 'event',
          ),
        ),
        5 => 
        array (
          'name' => 'ActionType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '处置动作类型。 取值：
- doPlaybook：执行剧本
- changeEventStatus：更改事件状态
- changeThreatLevel：更改事件威胁等级',
            'description' => '处置动作类型。取值：
- **doPlaybook**：执行剧本
- **changeEventStatus**：更改事件状态
- **changeThreatLevel**：更改事件威胁等级',
            'type' => 'string',
            'required' => false,
            'example' => 'doPlaybook',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则状态。 取值：
- 0：未启用
- 100：启用',
            'description' => '规则状态。取值：
- **0**：未启用
- **100**：启用',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号，大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数，最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- **cn-hangzhou**：资产属于中国内地与中国香港
- **ap-southeast-1**：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<CloudSiemAutomateResponseConfig>>',
            'description' => 'PageResponse<List<CloudSiemAutomateResponseConfig>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- **true**：成功
- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '自动化响应配置规则ID。',
                          'description' => '自动化响应配置规则ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '创建时间。',
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间。',
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'Aliuid' => 
                        array (
                          'title' => '规则关联siem主账号ID。',
                          'description' => '规则关联SIEM主账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '127608589417****',
                        ),
                        'SubUserId' => 
                        array (
                          'title' => '规则创建用户ID。',
                          'description' => '规则创建用户ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '17108579417****',
                        ),
                        'RuleName' => 
                        array (
                          'title' => '自动化响应配置规则名称。',
                          'description' => '自动化响应配置规则名称。',
                          'type' => 'string',
                          'example' => 'cfw kill quara book',
                        ),
                        'AutoResponseType' => 
                        array (
                          'title' => '自动化响应类型。 取值：
- event：事件
- alert：告警',
                          'description' => '自动化响应类型。取值：
- **event**：事件
- **alert**：告警',
                          'type' => 'string',
                          'example' => 'event',
                        ),
                        'ExecutionCondition' => 
                        array (
                          'title' => '自动化响应规则触发条件 json格式。',
                          'description' => '自动化响应规则触发条件，JSON格式。',
                          'type' => 'string',
                          'example' => '[{"left":{"value":"alert_name"},"operator":"containsString","right":{"value":"webshell_online"}}]',
                        ),
                        'ActionType' => 
                        array (
                          'title' => '处置动作类型 多个值以逗号分隔。 取值：
- doPlaybook：执行剧本
- changeEventStatus：更改事件状态
- changeThreatLevel：更改事件威胁等级',
                          'description' => '处置动作类型，多个值以逗号分隔。取值：
- **doPlaybook**：执行剧本
- **changeEventStatus**：更改事件状态
- **changeThreatLevel**：更改事件威胁等级',
                          'type' => 'string',
                          'example' => 'doPlaybook,changeEventStatus',
                        ),
                        'ActionConfig' => 
                        array (
                          'title' => '自动化响应规则动作配置 json数组格式。',
                          'description' => '自动化响应规则动作配置，JSON数组格式。',
                          'type' => 'string',
                          'example' => '[
      {
            "actionType": "doPlaybook",
            "playbookName": "WafBlockIP",
            "playbookUuid": "bdad6220-6584-41b2-9704-fc6584568758"
      }
]',
                        ),
                        'Status' => 
                        array (
                          'title' => '规则状态。 取值：
- 0：未启用
- 100：启用',
                          'description' => '规则状态。取值：
- **0**：未启用
- **100**：启用',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'DataType' => 
                        array (
                          'description' => '自动化响应规则条件字段数据类型。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => 'varchar',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"Id\\": 123,\\n        \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n        \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n        \\"Aliuid\\": 0,\\n        \\"SubUserId\\": 0,\\n        \\"RuleName\\": \\"cfw kill quara book\\",\\n        \\"AutoResponseType\\": \\"event\\",\\n        \\"ExecutionCondition\\": \\"[{\\\\\\"left\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"alert_name\\\\\\"},\\\\\\"operator\\\\\\":\\\\\\"containsString\\\\\\",\\\\\\"right\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"webshell_online\\\\\\"}}]\\",\\n        \\"ActionType\\": \\"doPlaybook,changeEventStatus\\",\\n        \\"ActionConfig\\": \\"[\\\\n      {\\\\n            \\\\\\"actionType\\\\\\": \\\\\\"doPlaybook\\\\\\",\\\\n            \\\\\\"playbookName\\\\\\": \\\\\\"WafBlockIP\\\\\\",\\\\n            \\\\\\"playbookUuid\\\\\\": \\\\\\"bdad6220-6584-41b2-9704-fc6584568758\\\\\\"\\\\n      }\\\\n]\\",\\n        \\"Status\\": 0,\\n        \\"DataType\\": 0\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取自动化响应规则列表',
    ),
    'PostAutomateResponseConfig' => 
    array (
      'summary' => '添加或更新自动化响应规则。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应配置规则ID。',
            'description' => '自动化响应配置规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'SubUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则创建用户ID。',
            'description' => '规则创建用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '17108579417****',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应配置规则名称。',
            'description' => '自动化响应配置规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'cfw kill quara book',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoResponseType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应类型。 取值：
- event：事件
- alert：告警',
            'description' => '自动化响应类型。取值：
- **event**：事件
- **alert**：告警',
            'type' => 'string',
            'required' => false,
            'example' => 'event',
          ),
        ),
        4 => 
        array (
          'name' => 'ExecutionCondition',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应规则触发条件 json格式。',
            'description' => '自动化响应规则触发条件，JSON格式。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"left":{"value":"alert_name"},"operator":"containsString","right":{"value":"webshell_online"}}]',
          ),
        ),
        5 => 
        array (
          'name' => 'ActionType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '处置动作类型 多个值以逗号分隔。 取值：
- doPlaybook：执行剧本
- changeEventStatus：更改事件状态
- changeThreatLevel：更改事件威胁等级',
            'description' => '处置动作类型，多个值以逗号分隔。取值：
- **doPlaybook**：执行剧本
- **changeEventStatus**：更改事件状态
- **changeThreatLevel**：更改事件威胁等级',
            'type' => 'string',
            'required' => false,
            'example' => 'doPlaybook,changeEventStatus',
          ),
        ),
        6 => 
        array (
          'name' => 'ActionConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动化响应规则动作配置 json数组格式。',
            'description' => '自动化响应规则动作配置，JSON数组格式。',
            'type' => 'string',
            'required' => false,
            'example' => '[
      {
            "actionType": "doPlaybook",
            "playbookName": "WafBlockIP",
            "playbookUuid": "bdad6220-6584-41b2-9704-fc6584568758"
      }
]',
          ),
        ),
        7 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- **cn-hangzhou**：资产属于中国内地与中国香港
- **ap-southeast-1**：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<String>',
            'description' => 'BaseResponse<String>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'string',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- **true**：成功
- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '添加或更新自动化响应规则',
    ),
    'UpdateAutomateResponseConfigStatus' => 
    array (
      'summary' => '更新自动化响应规则状态。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Ids',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动响应规则id列表，json数组。',
            'description' => '自动响应规则ID列表，json数组。',
            'type' => 'string',
            'required' => false,
            'example' => '[123,345]',
          ),
        ),
        1 => 
        array (
          'name' => 'InUse',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '规则开启状态。 取值：
- true：开启
- false：关闭',
            'description' => '规则开启状态。 取值：
- true：开启
- false：关闭',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<String>',
            'description' => 'BaseResponse<String>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'string',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '更新自动化响应规则状态',
    ),
    'ListDisposeStrategy' => 
    array (
      'summary' => '获取处置策略列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SophonTaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '处置策略ID。',
            'description' => 'SOAR处置策略ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'a50a49b7-6044-4593-ab15-2b46567caadd',
          ),
        ),
        1 => 
        array (
          'name' => 'EntityIdentity',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实体特征值，可以对处置实体进行模糊搜索。',
            'description' => '实体特征值，可以对处置实体进行模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'test22.php',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本支持的实体类型。取值：
- ip:ip
- process：进程
- file：文件',
            'description' => '剧本支持的实体类型。取值：
- ip：ip
- process：进程
- file：文件',
            'type' => 'string',
            'required' => false,
            'example' => 'ip',
          ),
        ),
        3 => 
        array (
          'name' => 'PlaybookName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本唯一标识名称。',
            'description' => '剧本唯一标识名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'WafBlockIP',
          ),
        ),
        4 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID。',
            'description' => '剧本UUID。',
            'type' => 'string',
            'required' => false,
            'example' => 'system_aliyun_clb_process_book',
          ),
        ),
        5 => 
        array (
          'name' => 'PlaybookTypes',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本类型。 取值：
- system:手动处置
- custom：事件触发剧本
- custom_alert：告警触发剧本
- soar-manual：手动运行剧本
- soar-mdr：MDR运行剧本',
            'description' => '剧本类型。取值：
- system：手动处置
- custom：事件触发剧本
- custom_alert：告警触发剧本
- soar-manual：手动运行剧本
- soar-mdr：MDR运行剧本',
            'type' => 'string',
            'required' => false,
            'example' => 'system',
          ),
        ),
        6 => 
        array (
          'name' => 'EffectiveStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '策略状态。 取值：
- 0：失效
- 1：有效',
            'description' => '策略状态。取值：
- 0：失效
- 1：有效',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'OrderField',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '排序字段。 取值：
- GmtModified：按更新时间排序
- GmtCreate：按创建时间排序
- FinishTime：按策略结束时间排序',
            'description' => '排序字段。取值：
- GmtModified：按更新时间排序
- GmtCreate：按创建时间排序
- FinishTime：按策略结束时间排序',
            'type' => 'string',
            'required' => false,
            'example' => 'GmtModified',
          ),
        ),
        8 => 
        array (
          'name' => 'Order',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '排序方向。 取值：
- desc：降序排列
- asc：升序排列',
            'description' => '排序方向。取值：
- desc：降序排列
- asc：升序排列',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
          ),
        ),
        9 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间, 单位毫秒。',
            'description' => '查询开始时间，单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1577808000000',
          ),
        ),
        10 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间, 单位毫秒。',
            'description' => '查询结束时间，单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1577808000000',
          ),
        ),
        11 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号，大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数，最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        13 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        15 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<DisposeStrategy>>',
            'description' => 'PageResponse<List<DisposeStrategy>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '策略ID。',
                          'description' => '策略ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '创建时间。',
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间。',
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'Aliuid' => 
                        array (
                          'title' => '策略关联siem主账号ID。',
                          'description' => '策略关联SIEM主账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '127608589417****',
                        ),
                        'SubAliuid' => 
                        array (
                          'title' => '配置策略阿里账号ID。',
                          'description' => '配置策略阿里账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '176555323***',
                        ),
                        'IncidentName' => 
                        array (
                          'title' => '事件名称。',
                          'description' => '事件名称。',
                          'type' => 'string',
                          'example' => 'Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc',
                        ),
                        'Scope' => 
                        array (
                          'title' => '处置作用域。',
                          'description' => '处置作用域。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '处置作用域。',
                            'type' => 'any',
                            'example' => '[{ aliUid: 1766185894104675 }]',
                          ),
                          'example' => '[{ aliUid: 1766185894104675 }]',
                        ),
                        'IncidentUuid' => 
                        array (
                          'title' => '事件全局唯一ID。',
                          'description' => '事件全局唯一UUID。',
                          'type' => 'string',
                          'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
                        ),
                        'AlertUuid' => 
                        array (
                          'title' => '告警ID。',
                          'description' => '告警UUID。',
                          'type' => 'string',
                          'example' => 'sas_71e24437d2797ce8fc59692905a4****',
                        ),
                        'SophonTaskId' => 
                        array (
                          'title' => 'soar处置策略ID。',
                          'description' => 'SOAR处置策略ID。',
                          'type' => 'string',
                          'example' => '577bbf90-a770-44a7-8154-586aa2d318fa',
                        ),
                        'PlaybookName' => 
                        array (
                          'title' => '剧本唯一标识名称。',
                          'description' => '剧本唯一标识名称。',
                          'type' => 'string',
                          'example' => 'WafBlockIP',
                        ),
                        'PlaybookUuid' => 
                        array (
                          'title' => '剧本UUID。',
                          'description' => '剧本UUID。',
                          'type' => 'string',
                          'example' => 'system_aliyun_clb_process_book',
                        ),
                        'PlaybookType' => 
                        array (
                          'title' => '剧本类型。 取值：
- system:手动处置
- custom：事件触发剧本
- custom_alert：告警触发剧本
- soar-manual：手动运行剧本
- soar-mdr：MDR运行剧本',
                          'description' => '剧本类型。取值：
- system：手动处置
- custom：事件触发剧本
- custom_alert：告警触发剧本
- soar-manual：手动运行剧本
- soar-mdr：MDR运行剧本',
                          'type' => 'string',
                          'example' => 'system',
                        ),
                        'EntityId' => 
                        array (
                          'title' => '实体ID。',
                          'description' => '实体ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123456789',
                        ),
                        'Entity' => 
                        array (
                          'title' => '实体详情, json数组格式。',
                          'description' => '实体详情，json数组格式。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '实体详情，json数组格式。',
                            'type' => 'any',
                            'example' => '[{"ip":"1.1.1.1"}]',
                          ),
                          'example' => '[{"ip":"1.1.1.1"}]',
                        ),
                        'EntityType' => 
                        array (
                          'title' => '实体类型。取值：
- ip:ip
- process：进程
- file：文件',
                          'description' => '实体类型。取值：
- ip：ip
- process：进程
- file：文件',
                          'type' => 'string',
                          'example' => 'ip',
                        ),
                        'TaskParam' => 
                        array (
                          'title' => '触发剧本参数， json格式。',
                          'description' => '触发剧本参数，json格式。',
                          'type' => 'string',
                          'example' => '{
      "file": {
            "op_code": "2",
            "file_path": "/root/alert0913/a886.jsp",
            "entity_type": "file",
            "entity_name": "a886.jsp",
            "file_name": "a886.jsp",
            "file_owner": "USER:,GROUP:",
            "hash_value": "5def10c9a4287d0920d86b42420b20b0",
            "op_level": "2",
            "entity_id": "/root/alert0913/a886.jsp",
            "host_uuid": {
                  "entity_type": "host",
                  "entity_name": "N/A",
                  "is_comprised": "1",
                  "os_type": "linux",
                  "entity_id": "5f58ef67-8803-4314-8d67-c87dc92b****",
                  "host_uuid": "5f58ef67-8803-4314-8d67-c87dc92b****",
                  "host_name": "N/A"
            },
            "malware_type": "${aliyun.siem.sas.alert_tag.webshell}"
      },
      "_sys_siem": {
            "cloudCode": "aliyun",
            "alertId": "89416745494****"
      },
      "scope": [
            {
                  "aliUid": 1766185894104****
            }
      ]
}',
                        ),
                        'ErrorMessage' => 
                        array (
                          'title' => '任务的失败摘要信息。',
                          'description' => '任务的失败摘要信息。',
                          'type' => 'string',
                          'example' => 'DisposalEntity failed which description is Aegis Quarantine File , return_info failed which description is Check Aegis Process Result , [ERROR DETAIL] *******.php:file not found',
                        ),
                        'FinishTime' => 
                        array (
                          'title' => '任务的结束时间。',
                          'description' => '任务的结束时间。',
                          'type' => 'string',
                          'example' => '2021-08-10 21:34:07',
                        ),
                        'EffectiveStatus' => 
                        array (
                          'title' => '策略状态。 取值：
- 0：失效
- 1：有效',
                          'description' => '策略状态。取值：
- 0：失效
- 1：有效',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Status' => 
                        array (
                          'title' => '剧本调用状态。 取值：
- 200：成功
- 10：删除
- 5：失败
- 0：初始状态',
                          'description' => '剧本调用状态。取值：
- 200：成功
- 10：删除
- 5：失败
- 0：初始状态',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"Id\\": 123,\\n        \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n        \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n        \\"Aliuid\\": 0,\\n        \\"SubAliuid\\": 0,\\n        \\"IncidentName\\": \\"Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc\\",\\n        \\"Scope\\": [\\n          \\"[{ aliUid: 1766185894104675 }]\\"\\n        ],\\n        \\"IncidentUuid\\": \\"85ea4241-798f-4684-a876-65d4f0c3****\\",\\n        \\"AlertUuid\\": \\"sas_71e24437d2797ce8fc59692905a4****\\",\\n        \\"SophonTaskId\\": \\"577bbf90-a770-44a7-8154-586aa2d318fa\\",\\n        \\"PlaybookName\\": \\"WafBlockIP\\",\\n        \\"PlaybookUuid\\": \\"system_aliyun_clb_process_book\\",\\n        \\"PlaybookType\\": \\"system\\",\\n        \\"EntityId\\": 123456789,\\n        \\"Entity\\": [\\n          \\"[{\\\\\\"ip\\\\\\":\\\\\\"1.1.1.1\\\\\\"}]\\"\\n        ],\\n        \\"EntityType\\": \\"ip\\",\\n        \\"TaskParam\\": \\"{\\\\n      \\\\\\"file\\\\\\": {\\\\n            \\\\\\"op_code\\\\\\": \\\\\\"2\\\\\\",\\\\n            \\\\\\"file_path\\\\\\": \\\\\\"/root/alert0913/a886.jsp\\\\\\",\\\\n            \\\\\\"entity_type\\\\\\": \\\\\\"file\\\\\\",\\\\n            \\\\\\"entity_name\\\\\\": \\\\\\"a886.jsp\\\\\\",\\\\n            \\\\\\"file_name\\\\\\": \\\\\\"a886.jsp\\\\\\",\\\\n            \\\\\\"file_owner\\\\\\": \\\\\\"USER:,GROUP:\\\\\\",\\\\n            \\\\\\"hash_value\\\\\\": \\\\\\"5def10c9a4287d0920d86b42420b20b0\\\\\\",\\\\n            \\\\\\"op_level\\\\\\": \\\\\\"2\\\\\\",\\\\n            \\\\\\"entity_id\\\\\\": \\\\\\"/root/alert0913/a886.jsp\\\\\\",\\\\n            \\\\\\"host_uuid\\\\\\": {\\\\n                  \\\\\\"entity_type\\\\\\": \\\\\\"host\\\\\\",\\\\n                  \\\\\\"entity_name\\\\\\": \\\\\\"N/A\\\\\\",\\\\n                  \\\\\\"is_comprised\\\\\\": \\\\\\"1\\\\\\",\\\\n                  \\\\\\"os_type\\\\\\": \\\\\\"linux\\\\\\",\\\\n                  \\\\\\"entity_id\\\\\\": \\\\\\"5f58ef67-8803-4314-8d67-c87dc92b****\\\\\\",\\\\n                  \\\\\\"host_uuid\\\\\\": \\\\\\"5f58ef67-8803-4314-8d67-c87dc92b****\\\\\\",\\\\n                  \\\\\\"host_name\\\\\\": \\\\\\"N/A\\\\\\"\\\\n            },\\\\n            \\\\\\"malware_type\\\\\\": \\\\\\"${aliyun.siem.sas.alert_tag.webshell}\\\\\\"\\\\n      },\\\\n      \\\\\\"_sys_siem\\\\\\": {\\\\n            \\\\\\"cloudCode\\\\\\": \\\\\\"aliyun\\\\\\",\\\\n            \\\\\\"alertId\\\\\\": \\\\\\"89416745494****\\\\\\"\\\\n      },\\\\n      \\\\\\"scope\\\\\\": [\\\\n            {\\\\n                  \\\\\\"aliUid\\\\\\": 1766185894104****\\\\n            }\\\\n      ]\\\\n}\\",\\n        \\"ErrorMessage\\": \\"DisposalEntity failed which description is Aegis Quarantine File , return_info failed which description is Check Aegis Process Result , [ERROR DETAIL] *******.php:file not found\\",\\n        \\"FinishTime\\": \\"2021-08-10 21:34:07\\",\\n        \\"EffectiveStatus\\": 0,\\n        \\"Status\\": 10\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取处置策略列表',
    ),
    'DescribeDisposeStrategyPlaybook' => 
    array (
      'summary' => '获取处置策略使用的剧本列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询开始时间, 单位毫秒。',
            'description' => '查询开始时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1577808000000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询结束时间, 单位毫秒。',
            'description' => '查询结束时间, 单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1577808000000',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<StrategyPlaybookList>>',
            'description' => 'BaseResponse<List<StrategyPlaybookList>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PlaybookName' => 
                    array (
                      'title' => '剧本唯一标识名称。',
                      'description' => '剧本唯一标识名称。',
                      'type' => 'string',
                      'example' => 'WafBlockIP',
                    ),
                    'PlaybookUuid' => 
                    array (
                      'title' => '剧本UUID。',
                      'description' => '剧本UUID。',
                      'type' => 'string',
                      'example' => 'system_aliyun_clb_process_book',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"PlaybookName\\": \\"WafBlockIP\\",\\n      \\"PlaybookUuid\\": \\"system_aliyun_clb_process_book\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取处置策略使用的剧本列表',
    ),
    'ListOperation' => 
    array (
      'summary' => '获取当前登录用户所具备的资源操作权限，威胁分析服务存在两种身份，管理员和普通成员，管理员具备所有权限，普通成员只能访问受限资源。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<CloudSiemListOperationResponse>',
            'description' => 'CloudSiemResponse<CloudSiemListOperationResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '威胁分析服务返回的具体内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'AdminOrNot' => 
                  array (
                    'title' => '是否具备管理员权限。取值：
- true：拥有管理员权限
- false：拥有普通成员权限',
                    'description' => '是否具备管理员权限。取值：
- true：拥有管理员权限
- false：拥有普通成员权限',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'OperationList' => 
                  array (
                    'title' => '拥有权限的资源列表。取值：
- ALERT
- LOG',
                    'description' => '拥有权限的资源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '威胁分析管控的资源，取值：
- ALERT
- LOG',
                      'type' => 'string',
                      'example' => 'ALERT',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => 'CCEEE128-6607-503E-AAA6-C5E57D94****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"AdminOrNot\\": true,\\n    \\"OperationList\\": [\\n      \\"ALERT\\"\\n    ]\\n  },\\n  \\"RequestId\\": \\"CCEEE128-6607-503E-AAA6-C5E57D94****\\"\\n}","type":"json"}]',
      'title' => '获取当前登录用户拥有的资源权限',
    ),
    'DoSelfDelegate' => 
    array (
      'summary' => '威胁分析管理员对普通成员进行授权和取消授权的操作，使之能够查看或者取消查看日志分析、告警等资源。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AliUid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '获取到资源的账号。',
            'description' => '某个威胁分析的普通成员的阿里账号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '104423523217****',
          ),
        ),
        1 => 
        array (
          'name' => 'DelegateOrNot',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否要进行资源委派，取值：
- 1：进行委派
- 0：取消委派',
            'description' => '是否要进行资源委派，取值：
- 1：进行委派
- 0：取消委派',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '普通成员资源授权的返回结果。取值：
- true：授权
- false：取消授权',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '9B9CBCEE-9225-5069-BC7F-880938A2****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"9B9CBCEE-9225-5069-BC7F-880938A2****\\"\\n}","type":"json"}]',
      'title' => '是否允许某个普通成员获取告警、日志分析等资源的权限',
    ),
    'RestoreCapacity' => 
    array (
      'summary' => '释放存储空间，降低存储使用量，注意，该操作不可逆，存在数据丢失的风险，谨慎使用。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '173446',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsasRXJ9SY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '是否已经发送清空指令。取值：
- true：已经发送清空命令，正在清理中
- false：发送失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-58D4-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"6276D891-58D4-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '置空已有的存储',
    ),
    'GetCapacity' => 
    array (
      'summary' => '获取当前威胁分析存储的使用量以及预付费的购买量，单位为GB。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '155452',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsasRXJ9SY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<CloudSiemCapacityResponse>',
            'description' => 'CloudSiemResponse<CloudSiemCapacityResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '容量明细。',
                'type' => 'object',
                'properties' => 
                array (
                  'UsedCapacity' => 
                  array (
                    'title' => '威胁分析当前计费容量。',
                    'description' => '威胁分析当前计费容量（GB）。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '10',
                  ),
                  'PreservedCapacity' => 
                  array (
                    'title' => '威胁分析用户购买容量。',
                    'description' => '威胁分析用户购买容量（GB）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '9000',
                  ),
                  'ExistLogStore' => 
                  array (
                    'title' => '威胁分析用户侧LogStore是否存在，默认true。取值：
- true：当前日志正常，日志分析可用
- false：当前正在清理日志，日志分析不可用',
                    'description' => '威胁分析用户侧LogStore是否存在。取值：
- true：当前日志正常，日志分析可用
- false：当前正在清理日志，日志分析不可用',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '27D27DCB-D76B-5064-8B3B-0900DEF7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'Siem.Storage.Exception',
            'errorMessage' => 'The request timed out, try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"UsedCapacity\\": 10,\\n    \\"PreservedCapacity\\": 9000,\\n    \\"ExistLogStore\\": true\\n  },\\n  \\"RequestId\\": \\"27D27DCB-D76B-5064-8B3B-0900DEF7****\\"\\n}","type":"json"}]',
      'title' => '获取当前企业威胁分析存储的使用量及购买量',
    ),
    'SetStorage' => 
    array (
      'summary' => '保存用户设置的存储天数，存储地域（region）等信息。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '179221',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsasRXJ9SY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Ttl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '日志存储天数，默认180天。该值最小设置为30天，最大不能超过3000天。',
            'description' => '日志存储天数，默认180天。该值最小设置为30天，最大不能超过3000天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '180',
          ),
        ),
        1 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '日志存储地域。',
            'description' => '日志存储地域。

数据管理中心所在地为**cn-hangzhou**时，**Region**默认为上海（cn-shanghai）；数据管理中心所在地为**ap-southeast-1**时，**Region**默认为新加坡（ap-southeast-1）。

不可以修改日志存储地域。如需修改，请联系威胁分析的运营人员。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '是否保存成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-58D4-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Siem.TTL.Limit',
            'errorMessage' => 'TTL should be set 30 days at least',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"6276D891-58D4-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '保存用户设置的存储信息',
    ),
    'DescribeStorage' => 
    array (
      'summary' => '判断威胁分析用户的存储（用户侧日志服务中LogStore）是否正常。',
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
        'abilityTreeCode' => '190429',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsasRXJ9SY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '137820528780****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '用户的日志服务中是否存在威胁分析服务创建的Project和LogStore。取值：
- true：存在
- false：不存在',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => 'CCEEE128-6607-503E-AAA6-C5E57D94****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'SLS.Operation.Error',
            'errorMessage' => 'SLS service is unavailable!',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"CCEEE128-6607-503E-AAA6-C5E57D94****\\"\\n}","type":"json"}]',
      'title' => '判断威胁分析用户的存储是否存在',
    ),
    'GetStorage' => 
    array (
      'summary' => '获取威胁分析与响应产品在用户SLS中创建的存储设置，包含存储天数、存储地域等信息。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '179222',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsasRXJ9SY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '127XXXX',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<CloudSiemStorageResponse>',
            'description' => 'CloudSiemResponse<CloudSiemStorageResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '存储具体信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Ttl' => 
                  array (
                    'title' => '存储天数。',
                    'description' => '设置的存储天数，默认是180天。该值最小设置为30天，最大设置为3000天。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '180',
                  ),
                  'Region' => 
                  array (
                    'title' => '存储地域（region）。',
                    'description' => '存储地域。

数据管理中心所在地为**cn-hangzhou**时，**Region**默认为上海（cn-shanghai）；数据管理中心所在地为**ap-southeast-1**时，**Region**默认为新加坡（ap-southeast-1）。',
                    'type' => 'string',
                    'example' => 'cn-shanghai',
                  ),
                  'DisplayRegion' => 
                  array (
                    'title' => '是否拥有修改存储地域的权限，默认值false。取值：
- true：拥有修改存储地域的权限
- false：不拥有修改存储地域的权限',
                    'description' => '是否拥有修改存储地域的权限，默认值false。取值：
- true：拥有修改存储地域的权限
- false：不拥有修改存储地域的权限',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'CanOperate' => 
                  array (
                    'title' => '当前是否可以操作存储地域（存储地域仅能操作一次），默认值false。取值：
- true：可以修改存储地域
- false：不可以修改存储地域',
                    'description' => '当前是否可以操作存储地域（存储地域仅能操作一次），默认值false。取值：
- true：可以修改存储地域
- false：不可以修改存储地域',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '97A31C3A-3F9F-5866-8979-5159E3DC****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Ttl\\": 180,\\n    \\"Region\\": \\"cn-shanghai\\",\\n    \\"DisplayRegion\\": false,\\n    \\"CanOperate\\": false\\n  },\\n  \\"RequestId\\": \\"97A31C3A-3F9F-5866-8979-5159E3DC****\\"\\n}","type":"json"}]',
      'title' => '获取设置的存储信息',
    ),
    'ListDelivery' => 
    array (
      'summary' => '查看整个企业或者普通成员接入威胁分析的产品、日志列表，以及这些日志的数据投递情况。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '155305',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsasRXJ9SY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<CloudSiemAnalyzeResponse>',
            'description' => 'BaseResponse<CloudSiemAnalyzeResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '返回的详细内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ProjectName' => 
                  array (
                    'title' => '威胁分析用户侧日志服务Project名字，格式：aliyun-cloudsiem-data-${aliUid}-${region}。',
                    'description' => '威胁分析用户侧日志服务Project名字，格式：aliyun-cloudsiem-data-${aliUid}-${region}。',
                    'type' => 'string',
                    'example' => 'aliyun-cloudsiem-data-127608589417****-cn-shanghai',
                  ),
                  'LogStoreName' => 
                  array (
                    'title' => '威胁分析用户侧LogStore的名字，格式：cloud_siem。',
                    'description' => '威胁分析用户侧LogStore的名字，格式：cloud_siem。',
                    'type' => 'string',
                    'example' => 'cloud-siem',
                  ),
                  'SearchUrl' => 
                  array (
                    'title' => '日志分析页面中查询分析的URL。',
                    'description' => '日志分析页面中查询分析的URL。',
                    'type' => 'string',
                    'example' => 'https://sls4service.console.aliyun.com/lognext/project/aliyun-cloudsiem-data-127608589417****-cn-shanghai
/logsearch/cloud-siem?isShare=true&hideTopbar=true&hideSidebar=true&ignoreTabLocalStorage=true',
                  ),
                  'DashboardUrl' => 
                  array (
                    'title' => '日志分析页面中报表展示的URL。',
                    'description' => '日志分析页面中报表展示的URL。',
                    'type' => 'string',
                    'example' => 'https://sls4service.console.aliyun.com/lognext/project/aliyun-cloudsiem-data-127608589417****-cn-shanghai
/dashboard/cloud-siem?isShare=true&hideTopbar=true&hideSidebar=true&ignoreTabLocalStorage=true',
                  ),
                  'DisplaySwitchOrNot' => 
                  array (
                    'title' => '是否展示投递开关，默认true，取值：
- true：显示投递开关
- false：隐藏投递开关',
                    'description' => '是否展示投递开关，默认true，取值：
- true：显示投递开关
- false：隐藏投递开关',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ProductList' => 
                  array (
                    'title' => '接入的产品列表。',
                    'description' => '产品列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '接入的产品列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ProductCode' => 
                        array (
                          'title' => '云产品编码。取值：
- qcloud_waf
- qlcoud_cfw
- hcloud_waf
- hcloud_cfw
- ddos
- sas
- cfw
- config
- csk
- fc
- rds
- nas
- apigateway
- cdn
- mongodb
- eip
- slb
- vpc
- actiontrail
- waf
- bastionhost
- oss
- polardb',
                          'description' => '云产品编码。取值：
- qcloud_waf
- qlcoud_cfw
- hcloud_waf
- hcloud_cfw
- ddos
- sas
- cfw
- config
- csk
- fc
- rds
- nas
- apigateway
- cdn
- mongodb
- eip
- slb
- vpc
- actiontrail
- waf
- bastionhost
- oss
- polardb',
                          'type' => 'string',
                          'example' => 'sas',
                        ),
                        'ProductName' => 
                        array (
                          'title' => '所属厂商名称',
                          'description' => '该参数已废弃，无需关注。',
                          'type' => 'string',
                          'example' => 'Security Center',
                        ),
                        'LogMap' => 
                        array (
                          'title' => '存在日志分类的日志列表',
                          'description' => '存在日志分类的日志列表，比如云安全中心，存在主机、网络等分组，分组信息为key，分组所包含的日志为value。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'LogCode' => 
                                array (
                                  'title' => '日志编码。',
                                  'type' => 'string',
                                  'example' => 'cloud_siem_config_log',
                                  'description' => '日志编码。',
                                ),
                                'LogName' => 
                                array (
                                  'title' => '日志中文名字。',
                                  'type' => 'string',
                                  'description' => '该参数已废弃，无需关注。',
                                  'example' => 'audit log',
                                ),
                                'LogNameEn' => 
                                array (
                                  'title' => '日志英文名字。',
                                  'type' => 'string',
                                  'example' => 'audit log',
                                  'description' => '该参数已废弃，无需关注。',
                                ),
                                'LogNameKey' => 
                                array (
                                  'title' => '日志语言编码，用于进行多语言名字的展示。',
                                  'type' => 'string',
                                  'example' => '${sas.cloudsiem.prod.cloud_siem_aegis_crack_from_beaver}',
                                  'description' => '日志语言编码，用于进行多语言名字的展示。',
                                ),
                                'Status' => 
                                array (
                                  'title' => '日志投递状态。',
                                  'type' => 'boolean',
                                  'description' => '日志投递状态。取值：
- true：正在投递  
- false：投递被关闭',
                                  'example' => 'true',
                                ),
                                'CanOperateOrNot' => 
                                array (
                                  'title' => '是否可以操作投递开关。',
                                  'type' => 'boolean',
                                  'example' => 'true',
                                  'description' => '是否可以操作日志投递开关，日志投递开关只限于威胁分析委派管理员进行操作。取值：
- true：可以操作  
- false：不可以操作',
                                ),
                                'Topic' => 
                                array (
                                  'title' => '日志在用户侧存储的Topic。',
                                  'type' => 'string',
                                  'description' => '日志在LogStore中的Topic，是LogStore的索引字段，通过该字段，能够区分不同的日志。',
                                  'example' => 'sas_login_event',
                                ),
                                'ExtraParameters' => 
                                array (
                                  'title' => '扩展参数。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Key' => 
                                      array (
                                        'type' => 'string',
                                        'example' => 'flag',
                                        'description' => '扩展参数标识。',
                                      ),
                                      'Value' => 
                                      array (
                                        'type' => 'string',
                                        'example' => 'value',
                                        'description' => '扩展参数值。',
                                      ),
                                    ),
                                    'description' => '日志描述的附加参数。',
                                  ),
                                  'description' => '扩展参数。',
                                ),
                              ),
                              'description' => '日志详情。',
                            ),
                            'description' => '分组包含的日志列表。',
                          ),
                        ),
                        'LogList' => 
                        array (
                          'title' => '不存在日志分类的日志列表',
                          'description' => '没有更细分类的云产品。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '日志详情。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'LogCode' => 
                              array (
                                'title' => '日志编码。',
                                'description' => '日志编码。',
                                'type' => 'string',
                                'example' => 'cloud_siem_config_log',
                              ),
                              'LogName' => 
                              array (
                                'title' => '日志中文名字。',
                                'description' => '该参数已废弃，无需关注。',
                                'type' => 'string',
                                'example' => 'audit log',
                              ),
                              'LogNameEn' => 
                              array (
                                'title' => '日志英文名字。',
                                'description' => '该参数已废弃，无需关注。',
                                'type' => 'string',
                                'example' => 'audit log
',
                              ),
                              'LogNameKey' => 
                              array (
                                'title' => '日志语言编码，用于进行多语言名字的展示。',
                                'description' => '日志语言编码，用于进行多语言名字的展示。',
                                'type' => 'string',
                                'example' => '${sas.cloudsiem.prod.cloud_siem_aegis_crack_from_beaver}',
                              ),
                              'Status' => 
                              array (
                                'title' => '日志投递状态。',
                                'description' => '日志投递状态。取值：
- true：正在投递  
- false：投递被关闭',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'CanOperateOrNot' => 
                              array (
                                'title' => '是否可以操作投递开关。',
                                'description' => '是否可以操作日志投递开关，日志投递开关只限于威胁分析委派管理员进行操作。取值：
- true：可以操作
- false：不可以操作',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'Topic' => 
                              array (
                                'title' => '日志在用户侧存储的Topic。',
                                'description' => '日志在LogStore中的Topic，是LogStore的索引字段，通过该字段，能够区分不同的日志。',
                                'type' => 'string',
                                'example' => 'sas_login_event',
                              ),
                              'ExtraParameters' => 
                              array (
                                'title' => '扩展参数。',
                                'description' => '扩展参数。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '日志描述的附加参数。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Key' => 
                                    array (
                                      'description' => '扩展参数标识。',
                                      'type' => 'string',
                                      'example' => 'flag',
                                    ),
                                    'Value' => 
                                    array (
                                      'description' => '扩展参数值。',
                                      'type' => 'string',
                                      'example' => 'value',
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
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '6276D891-58D4-55B2-87B9-74D413F7****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'SLS.Sls4Service.Error',
            'errorMessage' => 'The Simple Log Service about embedding console pages is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"ProjectName\\": \\"aliyun-cloudsiem-data-127608589417****-cn-shanghai\\",\\n    \\"LogStoreName\\": \\"cloud-siem\\",\\n    \\"SearchUrl\\": \\"https://sls4service.console.aliyun.com/lognext/project/aliyun-cloudsiem-data-127608589417****-cn-shanghai\\\\n/logsearch/cloud-siem?isShare=true&hideTopbar=true&hideSidebar=true&ignoreTabLocalStorage=true\\",\\n    \\"DashboardUrl\\": \\"https://sls4service.console.aliyun.com/lognext/project/aliyun-cloudsiem-data-127608589417****-cn-shanghai\\\\n/dashboard/cloud-siem?isShare=true&hideTopbar=true&hideSidebar=true&ignoreTabLocalStorage=true\\",\\n    \\"DisplaySwitchOrNot\\": true,\\n    \\"ProductList\\": [\\n      {\\n        \\"ProductCode\\": \\"sas\\",\\n        \\"ProductName\\": \\"Security Center\\",\\n        \\"LogMap\\": {\\n          \\"key\\": [\\n            {\\n              \\"LogCode\\": \\"cloud_siem_config_log\\",\\n              \\"LogName\\": \\"audit log\\",\\n              \\"LogNameEn\\": \\"audit log\\",\\n              \\"LogNameKey\\": \\"${sas.cloudsiem.prod.cloud_siem_aegis_crack_from_beaver}\\",\\n              \\"Status\\": true,\\n              \\"CanOperateOrNot\\": true,\\n              \\"Topic\\": \\"sas_login_event\\",\\n              \\"ExtraParameters\\": [\\n                {\\n                  \\"Key\\": \\"flag\\",\\n                  \\"Value\\": \\"value\\"\\n                }\\n              ]\\n            }\\n          ]\\n        },\\n        \\"LogList\\": [\\n          {\\n            \\"LogCode\\": \\"cloud_siem_config_log\\",\\n            \\"LogName\\": \\"audit log\\",\\n            \\"LogNameEn\\": \\"audit log\\\\n\\",\\n            \\"LogNameKey\\": \\"${sas.cloudsiem.prod.cloud_siem_aegis_crack_from_beaver}\\",\\n            \\"Status\\": true,\\n            \\"CanOperateOrNot\\": true,\\n            \\"Topic\\": \\"sas_login_event\\",\\n            \\"ExtraParameters\\": [\\n              {\\n                \\"Key\\": \\"flag\\",\\n                \\"Value\\": \\"value\\"\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"6276D891-58D4-55B2-87B9-74D413F7****\\"\\n}","type":"json"}]',
      'title' => '展示接入威胁分析的日志投递状态',
    ),
    'OpenDelivery' => 
    array (
      'summary' => '开通已经接入产品日志的投递。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '154876',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsasRXJ9SY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云产品的编码。取值：
- qcloud_waf
- qlcoud_cfw
- hcloud_waf
- hcloud_cfw
- ddos
- sas
- cfw
- config
- csk
- fc
- rds
- nas
- apigateway
- cdn
- mongodb
- eip
- slb
- vpc
- actiontrail
- waf
- bastionhost
- oss
- polardb',
            'description' => '云产品的编码。取值：
- qcloud_waf
- qlcoud_cfw
- hcloud_waf
- hcloud_cfw
- ddos
- sas
- cfw
- config
- csk
- fc
- rds
- nas
- apigateway
- cdn
- mongodb
- eip
- slb
- vpc
- actiontrail
- waf
- bastionhost
- oss
- polardb',
            'type' => 'string',
            'required' => true,
            'example' => 'cfw',
          ),
        ),
        1 => 
        array (
          'name' => 'LogCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云产品下的日志code，比如云安全中心的进程日志，取值参考ListDelivery的返回值。',
            'description' => '云产品下的日志code，比如云安全中心的进程日志，非必填，缺失时表示云产品下的所有日志的操作。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_siem_cfw_flow',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '开通日志投递是否成功，取值：
- true：开通成功
- false：开通失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => '15FD134E-D69B-51E8-B052-73F97BD8****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Siem.Delivery.MissingProductCode',
            'errorMessage' => 'ProductCode is mandatory for this action.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'Siem.Delivery.ErrorMapping',
            'errorMessage' => 'The Mapping between productCode and logCode is error.',
          ),
          2 => 
          array (
            'errorCode' => 'Siem.Delivery.ErrorProductCode',
            'errorMessage' => 'ProductCode is error for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'SLS.Ship.Error',
            'errorMessage' => 'The Simple Log Service about data shipping is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"15FD134E-D69B-51E8-B052-73F97BD8****\\"\\n}","type":"json"}]',
      'title' => '开通日志的投递',
    ),
    'CloseDelivery' => 
    array (
      'summary' => '关闭某个已经接入的云产品日志的投递，关闭后用户侧的LogStore里不再有对应日志的新内容。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '154877',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsasRXJ9SY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云产品的编码。取值：
- qcloud_waf
- qlcoud_cfw
- hcloud_waf
- hcloud_cfw
- ddos
- sas
- cfw
- config
- csk
- fc
- rds
- nas
- apigateway
- cdn
- mongodb
- eip
- slb
- vpc
- actiontrail
- waf
- bastionhost
- oss
- polardb',
            'description' => '云产品的编码。取值：
- qcloud_waf
- qlcoud_cfw
- hcloud_waf
- hcloud_cfw
- ddos
- sas
- cfw
- config
- csk
- fc
- rds
- nas
- apigateway
- cdn
- mongodb
- eip
- slb
- vpc
- actiontrail
- waf
- bastionhost
- oss
- polardb',
            'type' => 'string',
            'required' => true,
            'example' => 'sas',
          ),
        ),
        1 => 
        array (
          'name' => 'LogCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '云产品下的日志code，比如云安全中心的进程日志，取值参考ListDelivery的返回值。',
            'description' => '云产品下的日志code，比如云安全中心的进程日志，取值参考ListDelivery的返回值。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_siem_aegis_proc',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港，选择该项。
- ap-southeast-1：资产属于海外地域，选择该项。',
            'type' => 'string',
            'required' => false,
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
            'title' => 'CloudSiemSuccessResponse<Boolean>',
            'description' => 'CloudSiemResponse<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '威胁分析关闭服务的返回。取值：
- true：关闭成功
- false：关闭失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求消息ID。',
                'description' => '请求消息ID。',
                'type' => 'string',
                'example' => 'F375A043-4F5B-55F2-A564-CC47FFC6****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Siem.Delivery.MissingProductCode',
            'errorMessage' => 'ProductCode is mandatory for this action.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'Siem.Delivery.ErrorMapping',
            'errorMessage' => 'The Mapping between productCode and logCode is error.',
          ),
          2 => 
          array (
            'errorCode' => 'Siem.Delivery.ErrorProductCode',
            'errorMessage' => 'ProductCode is error for this action.',
          ),
          3 => 
          array (
            'errorCode' => 'SLS.Ship.Error',
            'errorMessage' => 'The Simple Log Service about data shipping is unavailable.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"F375A043-4F5B-55F2-A564-CC47FFC6****\\"\\n}","type":"json"}]',
      'title' => '关闭威胁分析已接入的云产品日志的投递',
    ),
    'UpdateWhiteRuleList' => 
    array (
      'summary' => '添加或更新告警加白规则。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WhiteRuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '加白规则唯一ID。',
            'description' => '加白规则唯一ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件全局唯一ID。',
            'description' => '事件全局唯一ID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        2 => 
        array (
          'name' => 'Expression',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警加白规则 json对象。',
            'description' => '告警加白规则，json对象。',
            'type' => 'string',
            'required' => true,
            'example' => '[
      {
            "alertName": "webshell",
            "alertNameId": "webshell",
            "alertType": "command",
            "alertTypeId": "command",
            "expression": {
                  "status": 1,
                  "conditions": [
                        {
                              "isNot": false,
                              "left": {
                                    "value": "file_path"
                              },
                              "operator": "gt",
                              "right": {
                                    "value": "cp"
                              }
                        }
                  ]
            }
      }
]',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'any',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '添加或更新告警加白规则',
    ),
    'PostEventWhiteruleList' => 
    array (
      'summary' => '提交告警加白规则。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件全局唯一ID。',
            'description' => '事件全局唯一ID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'WhiteruleList',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警加白规则 json对象。',
            'description' => '告警加白规则，json对象。',
            'type' => 'string',
            'required' => true,
            'example' => '[
      {
            "alertName": "webshell",
            "alertNameId": "webshell",
            "alertType": "command",
            "alertTypeId": "command",
            "expression": {
                  "status": 1,
                  "conditions": [
                        {
                              "isNot": false,
                              "left": {
                                    "value": "file_path"
                              },
                              "operator": "gt",
                              "right": {
                                    "value": "cp"
                              }
                        }
                  ]
            }
      }
]',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<String>',
            'description' => 'BaseResponse<String>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'string',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '提交告警加白规则',
    ),
    'DescribeWhiteRuleList' => 
    array (
      'summary' => '获取告警加白规则列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AlertType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警类型。',
            'description' => '告警类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'scan',
          ),
        ),
        1 => 
        array (
          'name' => 'AlertName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '告警名称。',
            'description' => '告警名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'Try SNMP weak password',
          ),
        ),
        2 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件ID。',
            'description' => '事件全局唯一UUID。',
            'type' => 'string',
            'required' => false,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表当前页号， 大于等于1。',
            'description' => '列表当前页号， 大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '列表每页条数， 最大不超过100。',
            'description' => '列表每页条数， 最大不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'PageResponse<List<WhitelistRule>>',
            'description' => 'PageResponse<List<WhitelistRule>>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true:成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageInfo' => 
                  array (
                    'title' => '分页记录。',
                    'description' => '分页记录。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CurrentPage' => 
                      array (
                        'title' => '列表当前页号。',
                        'description' => '列表当前页号。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页返回记录数。',
                        'description' => '每页返回记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'TotalCount' => 
                      array (
                        'title' => '记录总数。',
                        'description' => '记录总数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'ResponseData' => 
                  array (
                    'title' => '详细数据。',
                    'description' => '详细数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '加白规则唯一ID。',
                          'description' => '加白规则唯一ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123456789',
                        ),
                        'GmtCreate' => 
                        array (
                          'title' => '创建时间。',
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'GmtModified' => 
                        array (
                          'title' => '修改时间。',
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '2021-01-06 16:37:29',
                        ),
                        'Aliuid' => 
                        array (
                          'title' => '规则关联siem主账号ID。',
                          'description' => '开通威胁分析的阿里云账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '127608589417****',
                        ),
                        'SubAliuid' => 
                        array (
                          'title' => '规则创建阿里账号ID。',
                          'description' => '创建规则的阿里云账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '176555323***',
                        ),
                        'AlertType' => 
                        array (
                          'title' => '告警类型。',
                          'description' => '告警类型。',
                          'type' => 'string',
                          'example' => 'scan',
                        ),
                        'AlertTypeId' => 
                        array (
                          'title' => '告警类型标识。',
                          'description' => '告警类型标识。',
                          'type' => 'string',
                          'example' => 'scan',
                        ),
                        'AlertName' => 
                        array (
                          'title' => '告警名称。',
                          'description' => '告警名称。',
                          'type' => 'string',
                          'example' => 'Try SNMP weak password',
                        ),
                        'AlertNameId' => 
                        array (
                          'title' => '告警名称标识。',
                          'description' => '告警名称标识。',
                          'type' => 'string',
                          'example' => 'Try SNMP weak password',
                        ),
                        'Status' => 
                        array (
                          'title' => '规则启用状态。 取值：
- 1：开启
- 0：关闭',
                          'description' => '规则启用状态。 取值：
- 1：开启
- 0：关闭',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'IncidentUuid' => 
                        array (
                          'title' => '事件全局唯一ID。',
                          'description' => '事件全局唯一UUID。',
                          'type' => 'string',
                          'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
                        ),
                        'AlertUuid' => 
                        array (
                          'title' => '告警ID。',
                          'description' => '告警UUID。',
                          'type' => 'string',
                          'example' => 'sas_71e24437d2797ce8fc59692905a4****',
                        ),
                        'Expression' => 
                        array (
                          'title' => '规则集 json数组格式。',
                          'description' => '规则集 json数组格式。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Logic' => 
                            array (
                              'description' => '条件逻辑关系。',
                              'type' => 'string',
                              'example' => '(1&2)|(3&4)',
                            ),
                            'Conditions' => 
                            array (
                              'description' => '规则表达式数组。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '规则表达式数组。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ItemId' => 
                                  array (
                                    'description' => '条件ID。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                  'Operator' => 
                                  array (
                                    'description' => '分派规则条件聚合方式。

- `=`：等于
- `<>`：不等于
- `in`：包含
- `not in`：不包含
- `REGEXP`：匹配正则
- `NOT REGEXP`：正则不匹配',
                                    'type' => 'string',
                                    'example' => 'REGEXP',
                                  ),
                                  'IsNot' => 
                                  array (
                                    'description' => '对结果是否取反。 取值：

- true：取反
- false：不取反',
                                    'type' => 'boolean',
                                    'example' => 'false',
                                  ),
                                  'Left' => 
                                  array (
                                    'description' => '条件左值。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Value' => 
                                      array (
                                        'description' => '左值变量名称。',
                                        'type' => 'string',
                                        'example' => 'ip',
                                      ),
                                      'IsVar' => 
                                      array (
                                        'description' => '是否是变量。

- true：变量
- false：常量',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                      ),
                                      'Type' => 
                                      array (
                                        'description' => '是否是常量。取值：

- true：是
- false：否',
                                        'type' => 'string',
                                        'example' => 'false',
                                      ),
                                      'Modifier' => 
                                      array (
                                        'description' => '备注信息。',
                                        'type' => 'string',
                                        'example' => 'length',
                                      ),
                                      'ModifierParam' => 
                                      array (
                                        'description' => '备注信息键值对。',
                                        'type' => 'object',
                                        'additionalProperties' => 
                                        array (
                                          'type' => 'any',
                                          'example' => '{"tage":"description"}',
                                          'description' => '备注信息键值对。',
                                        ),
                                      ),
                                    ),
                                  ),
                                  'Right' => 
                                  array (
                                    'description' => '右值对象。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Value' => 
                                      array (
                                        'description' => '右值。',
                                        'type' => 'string',
                                        'example' => '12345',
                                      ),
                                      'IsVar' => 
                                      array (
                                        'description' => '指定右变量值是常量，还是运行时变量（从运行时上下文中获取具体值）。

- true：运行时变量
- false：常量',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                      ),
                                      'Type' => 
                                      array (
                                        'description' => '数据类型。',
                                        'type' => 'string',
                                        'example' => 'String',
                                      ),
                                      'Modifier' => 
                                      array (
                                        'description' => '备注信息。',
                                        'type' => 'string',
                                        'example' => 'length',
                                      ),
                                      'ModifierParam' => 
                                      array (
                                        'description' => '备注信息键值对。',
                                        'type' => 'object',
                                        'additionalProperties' => 
                                        array (
                                          'type' => 'any',
                                          'example' => '{"tage":"description"}',
                                          'description' => '备注信息键值对。',
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                          'example' => '[{"conditions":[{"isNot":false,"itemId":0,"left":{"value":"host_uuid.host_name"},"operator":"containsString","right":{"value":"Cloud-MCH"}}]}]',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\",\\n  \\"Data\\": {\\n    \\"PageInfo\\": {\\n      \\"CurrentPage\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"TotalCount\\": 100\\n    },\\n    \\"ResponseData\\": [\\n      {\\n        \\"Id\\": 123456789,\\n        \\"GmtCreate\\": \\"2021-01-06 16:37:29\\",\\n        \\"GmtModified\\": \\"2021-01-06 16:37:29\\",\\n        \\"Aliuid\\": 0,\\n        \\"SubAliuid\\": 0,\\n        \\"AlertType\\": \\"scan\\",\\n        \\"AlertTypeId\\": \\"scan\\",\\n        \\"AlertName\\": \\"Try SNMP weak password\\",\\n        \\"AlertNameId\\": \\"Try SNMP weak password\\",\\n        \\"Status\\": 1,\\n        \\"IncidentUuid\\": \\"85ea4241-798f-4684-a876-65d4f0c3****\\",\\n        \\"AlertUuid\\": \\"sas_71e24437d2797ce8fc59692905a4****\\",\\n        \\"Expression\\": {\\n          \\"Logic\\": \\"(1&2)|(3&4)\\",\\n          \\"Conditions\\": [\\n            {\\n              \\"ItemId\\": 1,\\n              \\"Operator\\": \\"REGEXP\\",\\n              \\"IsNot\\": false,\\n              \\"Left\\": {\\n                \\"Value\\": \\"ip\\",\\n                \\"IsVar\\": true,\\n                \\"Type\\": \\"false\\",\\n                \\"Modifier\\": \\"length\\",\\n                \\"ModifierParam\\": {\\n                  \\"key\\": \\"{\\\\\\"tage\\\\\\":\\\\\\"description\\\\\\"}\\"\\n                }\\n              },\\n              \\"Right\\": {\\n                \\"Value\\": \\"12345\\",\\n                \\"IsVar\\": false,\\n                \\"Type\\": \\"String\\",\\n                \\"Modifier\\": \\"length\\",\\n                \\"ModifierParam\\": {\\n                  \\"key\\": \\"{\\\\\\"tage\\\\\\":\\\\\\"description\\\\\\"}\\"\\n                }\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取告警加白规则列表',
    ),
    'DescribeAlertScene' => 
    array (
      'summary' => '获取告警加白场景。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<SceneAndTarget>>',
            'description' => 'BaseResponse<List<SceneAndTarget>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AlertType' => 
                    array (
                      'title' => '告警类型展示值，随中英文环境变化。',
                      'description' => '告警类型展示值，随中英文环境变化。',
                      'type' => 'string',
                      'example' => 'unusual login',
                    ),
                    'AlertTypeId' => 
                    array (
                      'title' => '告警类型标识。',
                      'description' => '告警类型标识。',
                      'type' => 'string',
                      'example' => 'unusual login',
                    ),
                    'AlertName' => 
                    array (
                      'title' => '告警名称展示值，随中英文环境变化。',
                      'description' => '告警名称展示值，随中英文环境变化。',
                      'type' => 'string',
                      'example' => 'login_common_ip',
                    ),
                    'AlertNameId' => 
                    array (
                      'title' => '告警名称标识。',
                      'description' => '告警名称标识。',
                      'type' => 'string',
                      'example' => 'login_common_ip',
                    ),
                    'AlertTile' => 
                    array (
                      'title' => '告警title展示值，随中英文环境变化。',
                      'description' => '告警标题展示值，随中英文环境变化。',
                      'type' => 'string',
                      'example' => 'unusual login-login_common_ip',
                    ),
                    'AlertTileId' => 
                    array (
                      'title' => '告警title 标识。',
                      'description' => '告警标题标识。',
                      'type' => 'string',
                      'example' => 'unusual login-login_common_ip',
                    ),
                    'Targets' => 
                    array (
                      'title' => '加白对象。',
                      'description' => '加白对象。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'title' => '可以加白的实体属性字段。',
                            'description' => '可以加白的实体属性字段。',
                            'type' => 'string',
                            'example' => 'host_uuid',
                          ),
                          'Name' => 
                          array (
                            'title' => '可以加白的实体属性字段展示名。',
                            'description' => '可以加白的实体属性字段展示名。',
                            'type' => 'string',
                            'example' => 'HOST UUID',
                          ),
                          'Value' => 
                          array (
                            'title' => '加白规则默认展示的右值。',
                            'description' => '加白规则默认展示的右值。',
                            'type' => 'string',
                            'example' => '441862da-a539-4cc0-a00d-47395582****',
                          ),
                          'Values' => 
                          array (
                            'title' => '加白规则可选的右值。',
                            'description' => '加白规则可选的右值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '右值。',
                              'type' => 'string',
                              'example' => '[441862da-a539-4cc0-a00d-47395582****]',
                            ),
                            'example' => '["441862da-a539-4cc0-a00d-473955826881"]',
                          ),
                        ),
                      ),
                      'example' => '[{"Type": "host_uuid","Value": "441862da-a539-4cc0-a00d-473955826881","Values": ["441862da-a539-4cc0-a00d-473955826881"],"Name": "${aliyun.siem.entity.host_uuid}"}]',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"AlertType\\": \\"unusual login\\",\\n      \\"AlertTypeId\\": \\"unusual login\\",\\n      \\"AlertName\\": \\"login_common_ip\\",\\n      \\"AlertNameId\\": \\"login_common_ip\\",\\n      \\"AlertTile\\": \\"unusual login-login_common_ip\\",\\n      \\"AlertTileId\\": \\"unusual login-login_common_ip\\",\\n      \\"Targets\\": [\\n        {\\n          \\"Type\\": \\"host_uuid\\",\\n          \\"Name\\": \\"HOST UUID\\",\\n          \\"Value\\": \\"441862da-a539-4cc0-a00d-47395582****\\",\\n          \\"Values\\": [\\n            \\"[441862da-a539-4cc0-a00d-47395582****]\\"\\n          ]\\n        }\\n      ]\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取告警加白规则场景列表',
    ),
    'DescribeAlertSceneByEvent' => 
    array (
      'summary' => '获取告警加白场景与加白对象列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncidentUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件ID。',
            'description' => '事件ID。',
            'type' => 'string',
            'required' => true,
            'example' => '85ea4241-798f-4684-a876-65d4f0c3****',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse<List<SceneAndTarget>>',
            'description' => 'BaseResponse<List<SceneAndTarget>>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AlertType' => 
                    array (
                      'title' => '告警类型展示值，随中英文环境变化。',
                      'description' => '告警类型展示值，随中英文环境变化。',
                      'type' => 'string',
                      'example' => 'Unusual Logon',
                    ),
                    'AlertTypeId' => 
                    array (
                      'title' => '告警类型标识。',
                      'description' => '告警类型标识。',
                      'type' => 'string',
                      'example' => 'Unusual Logon',
                    ),
                    'AlertName' => 
                    array (
                      'title' => '告警名称展示值，随中英文环境变化。',
                      'description' => '告警名称展示值，随中英文环境变化。',
                      'type' => 'string',
                      'example' => 'login_common_ip',
                    ),
                    'AlertNameId' => 
                    array (
                      'title' => '告警名称标识。',
                      'description' => '告警名称标识。',
                      'type' => 'string',
                      'example' => 'login_common_ip',
                    ),
                    'AlertTile' => 
                    array (
                      'title' => '告警title展示值，随中英文环境变化。',
                      'description' => '告警标题展示值，随中英文环境变化。',
                      'type' => 'string',
                      'example' => 'Unusual Logon-login_common_ip',
                    ),
                    'AlertTileId' => 
                    array (
                      'title' => '告警title 标识。',
                      'description' => '告警标题标识。',
                      'type' => 'string',
                      'example' => 'Unusual Logon-login_common_ip',
                    ),
                    'Targets' => 
                    array (
                      'title' => '加白对象。',
                      'description' => '加白对象。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'title' => '可以加白的实体属性字段。',
                            'description' => '可以加白的实体属性字段。',
                            'type' => 'string',
                            'example' => 'host_uuid',
                          ),
                          'Name' => 
                          array (
                            'title' => '可以加白的实体属性字段展示名。',
                            'description' => '可以加白的实体属性字段展示名。',
                            'type' => 'string',
                            'example' => 'host uuid',
                          ),
                          'Value' => 
                          array (
                            'title' => '加白规则默认展示的右值。',
                            'description' => '加白规则默认展示的右值。',
                            'type' => 'string',
                            'example' => '441862da-a539-4cc0-a00d-47395582****',
                          ),
                          'Values' => 
                          array (
                            'title' => '加白规则可选的右值。',
                            'description' => '加白规则可选的右值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '右值。',
                              'type' => 'string',
                              'example' => '[441862da-a539-4cc0-a00d-47395582****]',
                            ),
                            'example' => '["441862da-a539-4cc0-a00d-473955826881"]',
                          ),
                        ),
                      ),
                      'example' => '[{"Type": "host_uuid","Value": "441862da-a539-4cc0-a00d-473955826881","Values": ["441862da-a539-4cc0-a00d-473955826881"],"Name": "${aliyun.siem.entity.host_uuid}"}]',
                    ),
                  ),
                ),
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"AlertType\\": \\"Unusual Logon\\",\\n      \\"AlertTypeId\\": \\"Unusual Logon\\",\\n      \\"AlertName\\": \\"login_common_ip\\",\\n      \\"AlertNameId\\": \\"login_common_ip\\",\\n      \\"AlertTile\\": \\"Unusual Logon-login_common_ip\\",\\n      \\"AlertTileId\\": \\"Unusual Logon-login_common_ip\\",\\n      \\"Targets\\": [\\n        {\\n          \\"Type\\": \\"host_uuid\\",\\n          \\"Name\\": \\"host uuid\\",\\n          \\"Value\\": \\"441862da-a539-4cc0-a00d-47395582****\\",\\n          \\"Values\\": [\\n            \\"[441862da-a539-4cc0-a00d-47395582****]\\"\\n          ]\\n        }\\n      ]\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '获取告警加白场景与加白对象列表',
    ),
    'DeleteWhiteRuleList' => 
    array (
      'summary' => '删除指定ID的告警加白规则。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '加白规则唯一ID。',
            'description' => '加白规则唯一ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'RoleType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视图类型。

- 0：当前阿里云账号视图。
- 1：企业下所有账号的视图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleFor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '管理员切换成其他成员视角的用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '113091674488****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'description' => '威胁分析的数据管理中心所在地。您需要根据资产所在地域，选择管理中心所在地。取值：
- cn-hangzhou：资产属于中国内地与中国香港
- ap-southeast-1：资产属于海外地域',
            'type' => 'string',
            'required' => false,
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
            'title' => 'BaseResponse',
            'description' => 'BaseResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '请求返回值。',
                'description' => '请求返回值。',
                'type' => 'any',
                'example' => '123456',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功。取值：
- true：成功
- false：失败',
                'description' => '请求是否成功。取值：
- true:成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。',
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '请求返回消息。',
                'description' => '请求返回消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9AAA9ED9-78F4-5021-86DC-D51C7511****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"9AAA9ED9-78F4-5021-86DC-D51C7511****\\"\\n}","type":"json"}]',
      'title' => '删除告警加白规则',
    ),
    'DescribeJobStatus' => 
    array (
      'summary' => '按提交任务生成的submitId获取接入任务的状态。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '170358',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas5NAHBX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubmitId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务ID，BatchJobSubmit提交返回的submitId',
            'description' => '任务ID，[BatchJobSubmit](https://next.api.aliyun.com/api/cloud-siem/2022-06-16/BatchSubmitJob?lang=JAVA&useCommon=true)提交返回的submitId。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx_folder_xxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '产品所在地域，默认为cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'CloudSiemResponse<DescribeJobStatusResult>',
            'description' => 'CloudSiemResponse<DescribeJobStatusResult>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回的详细内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskCount' => 
                  array (
                    'description' => '生成接入任务的总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '60',
                  ),
                  'FinishCount' => 
                  array (
                    'description' => '完成任务的总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '52',
                  ),
                  'FailedCount' => 
                  array (
                    'description' => '失败任务的总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '8',
                  ),
                  'TaskStatus' => 
                  array (
                    'description' => '提交任务的状态。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'submit' => 'submit',
                      'finish' => 'finish',
                    ),
                    'example' => 'finish',
                  ),
                  'ConfigId' => 
                  array (
                    'description' => '生成的配置ID。',
                    'type' => 'string',
                    'example' => 'xxxx_folder_xxxx',
                  ),
                  'FolderId' => 
                  array (
                    'description' => '资源目录文件夹ID。',
                    'type' => 'string',
                    'example' => 'fd-xxxxx',
                  ),
                  'ErrTaskList' => 
                  array (
                    'description' => '失败任务的列表，枚举接入失败的阿里云账号和产品code。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'description' => '阿里云账号ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123XXXXX',
                        ),
                        'ProductList' => 
                        array (
                          'description' => '接入失败的产品日志列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ProductCode' => 
                              array (
                                'description' => '产品Code。',
                                'type' => 'string',
                                'example' => 'sas',
                              ),
                              'LogList' => 
                              array (
                                'description' => '接入失败的日志列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ProductCode' => 
                                    array (
                                      'description' => '产品Code。',
                                      'type' => 'string',
                                      'example' => 'sas',
                                    ),
                                    'LogCode' => 
                                    array (
                                      'description' => '日志Code。',
                                      'type' => 'string',
                                      'example' => 'cloud_siem_aegis_proc',
                                    ),
                                    'RegionCode' => 
                                    array (
                                      'description' => '地域ID。',
                                      'type' => 'string',
                                      'example' => 'cn-shanghai',
                                    ),
                                    'ProjectNamePattern' => 
                                    array (
                                      'description' => '待接入日志的sls project name的pattern。',
                                      'type' => 'string',
                                      'example' => 'vpc-project-test',
                                    ),
                                    'LogStoreNamePattern' => 
                                    array (
                                      'description' => '待接入日志的sls logstore name的pattern。',
                                      'type' => 'string',
                                      'example' => 'vpc_project_test
',
                                    ),
                                    'ErrorCode' => 
                                    array (
                                      'description' => '接入失败的原因。',
                                      'type' => 'string',
                                      'example' => 'ProjectLogStoreNotFound',
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
              'Success' => 
              array (
                'description' => '请求是否成功。取值：
- **true**：成功
- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '请求成功返回200。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求成功为空，请求失败原因详细描述。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrCode' => 
              array (
                'description' => '请求成功为空，调用出错时返回的具体错误码。',
                'type' => 'string',
                'example' => 'ServerError
',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '5B0DFF6D-XXXX
',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        501 => 
        array (
          0 => 
          array (
            'errorCode' => 'CloudSiem_Internal_Exception',
            'errorMessage' => 'CloudSiem_Internal_Exception',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"TaskCount\\": 60,\\n    \\"FinishCount\\": 52,\\n    \\"FailedCount\\": 8,\\n    \\"TaskStatus\\": \\"finish\\",\\n    \\"ConfigId\\": \\"xxxx_folder_xxxx\\",\\n    \\"FolderId\\": \\"fd-xxxxx\\",\\n    \\"ErrTaskList\\": [\\n      {\\n        \\"UserId\\": 0,\\n        \\"ProductList\\": [\\n          {\\n            \\"ProductCode\\": \\"sas\\",\\n            \\"LogList\\": [\\n              {\\n                \\"ProductCode\\": \\"sas\\",\\n                \\"LogCode\\": \\"cloud_siem_aegis_proc\\",\\n                \\"RegionCode\\": \\"cn-shanghai\\",\\n                \\"ProjectNamePattern\\": \\"vpc-project-test\\",\\n                \\"LogStoreNamePattern\\": \\"vpc_project_test\\\\n\\",\\n                \\"ErrorCode\\": \\"ProjectLogStoreNotFound\\"\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"success\\",\\n  \\"ErrCode\\": \\"ServerError\\\\n\\",\\n  \\"RequestId\\": \\"5B0DFF6D-XXXX\\\\n\\"\\n}","type":"json"}]',
      'title' => '检查任务接入状态',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cloud-siem.cn-shanghai.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'cloud-siem.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
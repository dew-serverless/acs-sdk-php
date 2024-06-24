<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'WebPlus',
    'version' => '2019-03-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 69736,
      'title' => '应用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateApplication',
        1 => 'DeleteApplication',
        2 => 'UpdateApplication',
        3 => 'DescribeApplications',
      ),
    ),
    1 => 
    array (
      'id' => 69741,
      'title' => '存储',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateStorage',
        1 => 'DescribeStorage',
      ),
    ),
    2 => 
    array (
      'id' => 69744,
      'title' => '技术栈',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeCategories',
        1 => 'DescribeStacks',
      ),
    ),
    3 => 
    array (
      'id' => 69747,
      'title' => '部署包版本',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePkgVersion',
        1 => 'DeletePkgVersion',
        2 => 'DescribePkgVersions',
      ),
    ),
    4 => 
    array (
      'id' => 69751,
      'title' => '部署环境',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAppEnv',
        1 => 'DeleteAppEnv',
        2 => 'UpdateAppEnv',
        3 => 'StopAppEnv',
        4 => 'StartAppEnv',
        5 => 'DescribeAppEnvInstanceHealth',
        6 => 'DescribeAppEnvStatus',
        7 => 'DescribeAppEnvs',
        8 => 'DescribeInstanceHealth',
        9 => 'DescribeEnvResource',
        10 => 'DescribeGatherLogResult',
        11 => 'DescribeGatherStatsResult',
        12 => 'TerminateAppEnv',
        13 => 'RestartAppEnv',
        14 => 'RebuildAppEnv',
        15 => 'GatherAppEnvLog',
        16 => 'GatherAppEnvStats',
        17 => 'DeployAppEnv',
      ),
    ),
    5 => 
    array (
      'id' => 69770,
      'title' => '配置模板',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateConfigTemplate',
        1 => 'DeleteConfigTemplate',
        2 => 'UpdateConfigTemplate',
        3 => 'DescribeConfigTemplates',
        4 => 'DescribePublicConfigTemplates',
      ),
    ),
    6 => 
    array (
      'id' => 69776,
      'title' => '配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeConfigSettings',
        1 => 'DescribeConfigOptions',
        2 => 'DescribeConfigIndex',
        3 => 'ValidateConfigSetting',
      ),
    ),
    7 => 
    array (
      'id' => 69781,
      'title' => '变更',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteChange',
        1 => 'PauseChange',
        2 => 'DescribeChange',
        3 => 'DescribeChanges',
        4 => 'AbortChange',
        5 => 'ResumeChange',
      ),
    ),
    8 => 
    array (
      'id' => 69788,
      'title' => '事件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeEvents',
      ),
    ),
    9 => 
    array (
      'id' => 69790,
      'title' => '工单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateOrder',
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
    'CreateApplication' => 
    array (
      'path' => '/pop/v1/wam/application',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '新建应用的名称',
            'type' => 'string',
            'required' => false,
            'example' => 'app1',
          ),
        ),
        1 => 
        array (
          'name' => 'AppDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用描述信息',
            'type' => 'string',
            'required' => false,
            'example' => 'This is an application',
          ),
        ),
        2 => 
        array (
          'name' => 'CategoryName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '新建应用的平台类型',
            'type' => 'string',
            'required' => false,
            'example' => 'Java',
          ),
        ),
        3 => 
        array (
          'name' => 'UsingSharedStorage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否使用共享OSS存储',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BFD4C1BA-897D-4306-A79D-4D20D7E*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Application' => 
              array (
                'description' => '应用信息',
                'type' => 'object',
                'properties' => 
                array (
                  'CreateUsername' => 
                  array (
                    'description' => '应用创建者',
                    'type' => 'string',
                    'example' => 'userName',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名称',
                    'type' => 'string',
                    'example' => 'newApplication',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '应用上次更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562333864469',
                  ),
                  'UpdateUsername' => 
                  array (
                    'description' => '应用上次更新者',
                    'type' => 'string',
                    'example' => 'userName',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '应用创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562333864469',
                  ),
                  'AppId' => 
                  array (
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => 'wa-5d3ea7cf2977ca5251e*****',
                  ),
                  'CategoryName' => 
                  array (
                    'description' => '应用类型',
                    'type' => 'string',
                    'example' => 'Java',
                  ),
                  'UsingSharedStorage' => 
                  array (
                    'description' => '是否使用共享OSS存储',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'AppDescription' => 
                  array (
                    'description' => '应用描述信息',
                    'type' => 'string',
                    'example' => 'This is an application',
                  ),
                ),
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
            'errorCode' => 'AppNameUsed',
            'errorMessage' => 'The specified application name already exists in this region. Enter another application name.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'CategoryNotExists',
            'errorMessage' => 'The specified application category does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"BFD4C1BA-897D-4306-A79D-4D20D7E*****\\",\\n  \\"Application\\": {\\n    \\"CreateUsername\\": \\"userName\\",\\n    \\"AppName\\": \\"newApplication\\",\\n    \\"UpdateTime\\": 1562333864469,\\n    \\"UpdateUsername\\": \\"userName\\",\\n    \\"CreateTime\\": 1562333864469,\\n    \\"AppId\\": \\"wa-5d3ea7cf2977ca5251e*****\\",\\n    \\"CategoryName\\": \\"Java\\",\\n    \\"UsingSharedStorage\\": true,\\n    \\"AppDescription\\": \\"This is an application\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>success</Message>\\n<RequestId>27BE2428-060D-47DB-8A3C-CD86A53*****</RequestId>\\n<Application>\\n    <UpdateUsername>yourUsername</UpdateUsername>\\n    <AppDescription>app desc</AppDescription>\\n    <AppId>wa-5d3ea7cf2977ca5251e*****</AppId>\\n    <CreateTime>1564387279787</CreateTime>\\n    <UpdateTime>1564387279787</UpdateTime>\\n    <CategoryName>Java</CategoryName>\\n    <CreateUsername>yourUsername</CreateUsername>\\n    <AppName>newApplication</AppName>\\n    <UsingSharedStorage>true</UsingSharedStorage>\\n</Application>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '创建一个新应用',
      'summary' => '使用CreateApplication创建一个新应用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteApplication' => 
    array (
      'path' => '/pop/v1/wam/application',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，将删除此应用',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'wa-5d1af9c802470221ab7*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功，则返回success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ED18C0F9-D542-4EE0-A3EE-BD71A6A*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功，则返回OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'EnvDeleteFailed',
            'errorMessage' => 'An error occurred while deleting the application environment. This environment may have been deleted, or an error occurred while the server was deleting the environment configuration.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
          1 => 
          array (
            'errorCode' => 'AppDeleteNotAllowed',
            'errorMessage' => 'You cannot delete this application. Make sure that all deployment environments in this application are terminated.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DeletingEnvNotExists',
            'errorMessage' => 'Deleting environment failed. The specified environment does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"ED18C0F9-D542-4EE0-A3EE-BD71A6A*****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<DeleteApplicationResponse>\\n    <Message>success</Message>\\n    <RequestId>ED18C0F9-D542-4EE0-A3EE-BD71A6A*****</RequestId>\\n    <Code>OK</Code>\\n</DeleteApplicationResponse>","errorExample":""}]',
      'title' => '删除一个应用',
      'summary' => '调用DeleteApplication删除一个应用。',
      'description' => '> 删除应用前需保证应用内所部署的**所有环境**均已处于**已终止**状态。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateApplication' => 
    array (
      'path' => '/pop/v1/wam/application',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用ID，将更新此应用的信息',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'wa-5d1af9c802470221ab7*****',
          ),
        ),
        1 => 
        array (
          'name' => 'AppDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用描述信息',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a updated Description',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '18A1F87E-591D-4491-90D5-2B101FA*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Application' => 
              array (
                'description' => '返回的应用信息数据',
                'type' => 'object',
                'properties' => 
                array (
                  'AppName' => 
                  array (
                    'description' => '应用名称',
                    'type' => 'string',
                    'example' => 'user1',
                  ),
                  'CreateUsername' => 
                  array (
                    'description' => '应用创建者',
                    'type' => 'string',
                    'example' => 'user1',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '应用最后更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1564139945132',
                  ),
                  'UpdateUsername' => 
                  array (
                    'description' => '应用最后更新者',
                    'type' => 'string',
                    'example' => 'user1',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '应用创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562048968834',
                  ),
                  'AppId' => 
                  array (
                    'description' => '应用ID
',
                    'type' => 'string',
                    'example' => 'wa-5d1af9c802470221ab7*****',
                  ),
                  'CategoryName' => 
                  array (
                    'description' => '应用类型',
                    'type' => 'string',
                    'example' => 'Java',
                  ),
                  'AppDescription' => 
                  array (
                    'description' => '应用描述',
                    'type' => 'string',
                    'example' => 'This is a updated Description',
                  ),
                ),
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
            'errorCode' => 'AppNotExist',
            'errorMessage' => 'A corresponding application was not found based on the application ID.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"18A1F87E-591D-4491-90D5-2B101FA*****\\",\\n  \\"Application\\": {\\n    \\"AppName\\": \\"user1\\",\\n    \\"CreateUsername\\": \\"user1\\",\\n    \\"UpdateTime\\": 1564139945132,\\n    \\"UpdateUsername\\": \\"user1\\",\\n    \\"CreateTime\\": 1562048968834,\\n    \\"AppId\\": \\"wa-5d1af9c802470221ab7*****\\",\\n    \\"CategoryName\\": \\"Java\\",\\n    \\"AppDescription\\": \\"This is a updated Description\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<UpdateApplicationResponse>\\n  <Message>success</Message>\\n  <RequestId>FBE82ECD-4200-4390-BEAC-B1CCF14*****</RequestId>\\n  <Application>\\n    <CategoryName>Java</CategoryName>\\n    <UpdateUsername>user1</UpdateUsername>\\n    <CreateUsername>user1</CreateUsername>\\n    <CreateTime>1562048968834</CreateTime>\\n    <AppId>wa-5d1af9c802470221ab7*****</AppId>\\n    <AppDescription>This is a updated Description</AppDescription>\\n    <UpdateTime>1564139945498</UpdateTime>\\n    <AppName>user1</AppName>\\n  </Application>\\n  <Code>OK</Code>\\n</UpdateApplicationResponse>","errorExample":""}]',
      'title' => '更新应用',
      'summary' => '调用UpdateApplication更新应用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeApplications' => 
    array (
      'path' => '/pop/v1/wam/application',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，查询特定应用信息',
            'type' => 'string',
            'required' => false,
            'example' => 'wa-5d1af9c802470221ab7*****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称，查询此名称的应用',
            'type' => 'string',
            'required' => false,
            'example' => 'appTest',
          ),
        ),
        4 => 
        array (
          'name' => 'AppSearch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的应用名关键字，若应用名称包含此关键字，则返回此应用的关键字',
            'type' => 'string',
            'required' => false,
            'example' => 'appSearch',
          ),
        ),
        5 => 
        array (
          'name' => 'EnvSearch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索应用中环境名的关键字，若应用中的环境名包含此关键字，则返回此应用',
            'type' => 'string',
            'required' => false,
            'example' => 'testEnv',
          ),
        ),
        6 => 
        array (
          'name' => 'StackSearch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '栈类型搜索',
            'type' => 'string',
            'required' => false,
            'example' => 'Java',
          ),
        ),
        7 => 
        array (
          'name' => 'CategorySearch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技术栈分类',
            'type' => 'string',
            'required' => false,
            'example' => 'Java',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'TotalCount' => 
              array (
                'description' => '查询结果总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '132BF104-A660-40C7-936B-F805967*****',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'PageSize' => 
              array (
                'description' => '查询页面大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Applications' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Application' => 
                  array (
                    'description' => '应用列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TotalEnvs' => 
                        array (
                          'description' => '应用中总环境数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '应用上次更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562226969419',
                        ),
                        'UpdateUsername' => 
                        array (
                          'description' => '应用上次更新者',
                          'type' => 'string',
                          'example' => 'webx-test',
                        ),
                        'RunningEnvs' => 
                        array (
                          'description' => '运行中的环境数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '应用创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562226969419',
                        ),
                        'CategoryName' => 
                        array (
                          'description' => '应用类型',
                          'type' => 'string',
                          'example' => 'Java',
                        ),
                        'UsingSharedStorage' => 
                        array (
                          'description' => '使用OSS共享存储空间',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'CreateUsername' => 
                        array (
                          'description' => '应用创建者',
                          'type' => 'string',
                          'example' => 'webx-test',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名称',
                          'type' => 'string',
                          'example' => 'appName',
                        ),
                        'AppId' => 
                        array (
                          'description' => '应用ID',
                          'type' => 'string',
                          'example' => 'wa-5d1af9c802470221ab7*****',
                        ),
                        'TerminatedEnvs' => 
                        array (
                          'description' => '已终止的环境数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'AppDescription' => 
                        array (
                          'description' => '应用描述',
                          'type' => 'string',
                          'example' => 'This is an application.',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '查询页面数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"132BF104-A660-40C7-936B-F805967*****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"Applications\\": {\\n    \\"Application\\": [\\n      {\\n        \\"UpdateTime\\": 1562226969419,\\n        \\"TotalEnvs\\": 2,\\n        \\"UpdateUsername\\": \\"webx-test\\",\\n        \\"CreateTime\\": 1562226969419,\\n        \\"RunningEnvs\\": 2,\\n        \\"CategoryName\\": \\"Java\\",\\n        \\"UsingSharedStorage\\": \\"true\\",\\n        \\"AppName\\": \\"appName\\",\\n        \\"CreateUsername\\": \\"webx-test\\",\\n        \\"AppId\\": \\"wa-5d1af9c802470221ab7*****\\",\\n        \\"TerminatedEnvs\\": 0,\\n        \\"AppDescription\\": \\"This is an application.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeApplicationsResponse>\\n  <PageNumber>1</PageNumber>\\n  <TotalCount>1</TotalCount>\\n  <Message>success</Message>\\n  <PageSize>20</PageSize>\\n  <RequestId>761C51B0-9026-4659-989C-7AFDFEE*****</RequestId>\\n  <Applications>\\n    <Application>\\n      <CategoryName>Java</CategoryName>\\n      <UpdateUsername>user1</UpdateUsername>\\n      <CreateUsername>user1</CreateUsername>\\n      <CreateTime>1562048968834</CreateTime>\\n      <AppId>wa-5d1af9c802470221ab7*****</AppId>\\n      <TotalEnvs>2</TotalEnvs>\\n      <UpdateTime>1562048968834</UpdateTime>\\n      <AppDescription/>\\n      <AppName>test</AppName>\\n      <TerminatedEnvs>0</TerminatedEnvs>\\n      <RunningEnvs>2</RunningEnvs>\\n    </Application>\\n  </Applications>\\n  <Code>OK</Code>\\n</DescribeApplicationsResponse>","errorExample":""}]',
      'title' => '查询应用信息',
      'summary' => '调用DescribeApplications查询应用信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateStorage' => 
    array (
      'path' => '/pop/v1/wam/storage',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Storage' => 
              array (
                'description' => '存储桶信息',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '上次更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1564388637126',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '存储桶创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1564388637126',
                  ),
                  'BucketName' => 
                  array (
                    'description' => '存储桶的bucket名',
                    'type' => 'string',
                    'example' => 'webplus-cn-shenzhen-s-5d01fab421ed1528121*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success

',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E61A371C-53D9-4F66-A90E-4FC09EE*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK

',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'OSSDisabled',
            'errorMessage' => 'You have not activated the OSS service and cannot use the WebPlus service. Please go to the OSS console (https://oss.console.aliyun.com) to activate OSS and try again.',
          ),
          1 => 
          array (
            'errorCode' => 'OSSApiCallFailed',
            'errorMessage' => 'When initializing applications, updating configurations, or destroying applications, WebPlus attempts to communicate with OSS through API communication. An OSS service throw error occurred. The bucket or the file does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"E61A371C-53D9-4F66-A90E-4FC09EE*****\\",\\n  \\"Storage\\": {\\n    \\"UpdateTime\\": 1564388637126,\\n    \\"CreateTime\\": 1564388637126,\\n    \\"BucketName\\": \\"webplus-cn-shenzhen-s-5d01fab421ed1528121*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<CreateStorageResponse>\\n  <Storage>\\n    <BucketName>webplus-cn-shenzhen-s-5d01fab421ed1528121*****</BucketName>\\n    <CreateTime>1564388637551</CreateTime>\\n    <UpdateTime>1564388637551</UpdateTime>\\n  </Storage>\\n  <Message>success</Message>\\n  <RequestId>3373E77A-9FDF-4B7F-981F-17C2446*****</RequestId>\\n  <Code>OK</Code>\\n</CreateStorageResponse>","errorExample":""}]',
      'title' => '创建一个存储桶',
      'summary' => '调用CreateStorage创建一个存储桶。',
      'description' => '需要先开通OSS服务才能创建存储，具体见 https://oss.console.aliyun.com',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeStorage' => 
    array (
      'path' => '/pop/v1/wam/storage',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UsingSharedStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用共享OSS存储',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Storage' => 
              array (
                'description' => '存储描述信息
',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '存储最后更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1560410804957',
                  ),
                  'KeyPrefix' => 
                  array (
                    'description' => '存储路径前缀',
                    'type' => 'string',
                    'example' => 'pkgTemp',
                  ),
                  'PkgKeyPrefix' => 
                  array (
                    'description' => '存储路径用户uid前缀md5',
                    'type' => 'string',
                    'example' => 'f29a318c780**********3ec19ece615',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '存储创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1560410804957',
                  ),
                  'BucketName' => 
                  array (
                    'description' => '存储的bucket名称',
                    'type' => 'string',
                    'example' => 'webplus-cn-shenzhen-s-5d01fab421e*****121*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '49C3DE38-ABA2-4369-BED2-CBD1D**********',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"49C3DE38-ABA2-4369-BED2-CBD1D**********\\",\\n  \\"Storage\\": {\\n    \\"UpdateTime\\": 1560410804957,\\n    \\"KeyPrefix\\": \\"pkgTemp\\",\\n    \\"PkgKeyPrefix\\": \\"f29a318c780**********3ec19ece615\\",\\n    \\"CreateTime\\": 1560410804957,\\n    \\"BucketName\\": \\"webplus-cn-shenzhen-s-5d01fab421e*****121*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Storage>\\n    <BucketName>webplus-cn-shenzhen-s-5d01fab**********2105691</BucketName>\\n    <CreateTime>1560410804957</CreateTime>\\n    <UpdateTime>1560410804957</UpdateTime>\\n    <KeyPrefix>pkgTemp</KeyPrefix>\\n    <PkgKeyPrefix>f29a318c780**********3ec19ece615</PkgKeyPrefix>\\n</Storage>\\n<Message>success</Message>\\n<RequestId>76818DD9-BBD6-4E66-9D23-2ED8**********914</RequestId>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '查询存储',
      'summary' => '调用DescribeStorage查询存储。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeCategories' => 
    array (
      'path' => '/pop/v1/wam/category',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '6E99F8E3-7493-4ADA-A27B-2DFF2C693555',
              ),
              'Categories' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Category' => 
                  array (
                    'description' => '平台类型查询结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CategoryLogo' => 
                        array (
                          'description' => '类型LOGO',
                          'type' => 'string',
                          'example' => 'http://tomcat.apache.org/res/images/tomcat.png',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '平台类型更新时间',
                          'type' => 'string',
                          'example' => '1553218065000',
                        ),
                        'DemoProjects' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DemoProject' => 
                            array (
                              'description' => '样例项目',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'SourceUrl' => 
                                  array (
                                    'description' => '源码地址',
                                    'type' => 'string',
                                    'example' => 'https://github.com/aliyun/alibabacloud-webplus-demo-tomcat',
                                  ),
                                  'PackageDownloadUrl' => 
                                  array (
                                    'description' => '资源包下载地址',
                                    'type' => 'string',
                                    'example' => 'http://webplus-prod-cn-shenzhen.oss-cn-shenzhen.aliyuncs.com/quickstart/java/first-step/webplus-demo-java-0.1.0-SNAPSHOT.jar',
                                  ),
                                  'PackageUrl' => 
                                  array (
                                    'description' => '资源包URL地址',
                                    'type' => 'string',
                                    'example' => 'oss://webplus-prod-cn-shenzhen/quickstart/tomcat/first-step/webplus-tomcat-demo-0.1.1.war',
                                  ),
                                  'RegionId' => 
                                  array (
                                    'description' => '环境所在地域',
                                    'type' => 'string',
                                    'example' => 'cn-shenzhen',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '平台类型创建时间',
                          'type' => 'string',
                          'example' => '1553218065000',
                        ),
                        'CategoryId' => 
                        array (
                          'description' => '类型ID',
                          'type' => 'string',
                          'example' => 'wca-5c937c98a9c0296d0c4823912',
                        ),
                        'CategoryName' => 
                        array (
                          'description' => '类型名称',
                          'type' => 'string',
                          'example' => 'Tomcat',
                        ),
                        'CategoryDescription' => 
                        array (
                          'description' => '类型描述信息',
                          'type' => 'string',
                          'example' => 'Use Tomcat as an application container, support for WAR or ZIP type application deployment packages.',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"6E99F8E3-7493-4ADA-A27B-2DFF2C693555\\",\\n  \\"Categories\\": {\\n    \\"Category\\": [\\n      {\\n        \\"CategoryLogo\\": \\"http://tomcat.apache.org/res/images/tomcat.png\\",\\n        \\"UpdateTime\\": \\"1553218065000\\",\\n        \\"CreateTime\\": \\"1553218065000\\",\\n        \\"CategoryId\\": \\"wca-5c937c98a9c0296d0c4823912\\",\\n        \\"CategoryName\\": \\"Tomcat\\",\\n        \\"CategoryDescription\\": \\"Use Tomcat as an application container, support for WAR or ZIP type application deployment packages.\\",\\n        \\"DemoProjects\\": {\\n          \\"DemoProject\\": [\\n            {\\n              \\"SourceUrl\\": \\"https://github.com/aliyun/alibabacloud-webplus-demo-tomcat\\",\\n              \\"PackageDownloadUrl\\": \\"http://webplus-prod-cn-shenzhen.oss-cn-shenzhen.aliyuncs.com/quickstart/java/first-step/webplus-demo-java-0.1.0-SNAPSHOT.jar\\",\\n              \\"PackageUrl\\": \\"oss://webplus-prod-cn-shenzhen/quickstart/tomcat/first-step/webplus-tomcat-demo-0.1.1.war\\",\\n              \\"RegionId\\": \\"cn-shenzhen\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeCategoriesResponse>\\n  <Message>success</Message>\\n  <RequestId>2EF90744-064A-4841-B9E3-6B0D7AE6785A</RequestId>\\n  <Code>OK</Code>\\n  <Categories>\\n    <Category>\\n      <CategoryName>Tomcat</CategoryName>\\n      <CategoryId>wca-5c937c98a9c0296d0c4823912</CategoryId>\\n      <CategoryDescription>Use Tomcat as an application container, support for WAR or ZIP type application deployment packages.</CategoryDescription>\\n      <DemoProjects>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-tomcat-demo</SourceUrl>\\n          <RegionId>cn-shenzhen</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-shenzhen/quickstart/tomcat/first-step/webplus-tomcat-demo-0.1.1.war</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-tomcat-demo</SourceUrl>\\n          <RegionId>cn-zhangjiakou</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-zhangjiakou/quickstart/tomcat/first-step/webplus-tomcat-demo-0.1.1.war</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-tomcat-demo</SourceUrl>\\n          <RegionId>cn-beijing</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-beijing/quickstart/tomcat/first-step/webplus-tomcat-demo-0.1.1.war</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-tomcat-demo</SourceUrl>\\n          <RegionId>cn-shanghai</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-shanghai/quickstart/tomcat/first-step/webplus-tomcat-demo-0.1.1.war</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-tomcat-demo</SourceUrl>\\n          <RegionId>cn-hangzhou</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-hangzhou/quickstart/tomcat/first-step/webplus-tomcat-demo-0.1.1.war</PackageUrl>\\n        </DemoProject>\\n      </DemoProjects>\\n      <CategoryLogo>http://tomcat.apache.org/res/images/tomcat.png</CategoryLogo>\\n      <CreateTime>1553218065000</CreateTime>\\n      <UpdateTime>1553218065000</UpdateTime>\\n    </Category>\\n    <Category>\\n      <CategoryName>Java</CategoryName>\\n      <CategoryId>wca-6c937c98a9c0296d0c4823912</CategoryId>\\n      <CategoryDescription>Direct startup using Java commands, support for FatJAR or ZIP type application deployment packages.</CategoryDescription>\\n      <DemoProjects>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-java-demo</SourceUrl>\\n          <RegionId>cn-shenzhen</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-shenzhen/quickstart/java/first-step/webplus-java-demo-0.1.1-exec.jar</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-java-demo</SourceUrl>\\n          <RegionId>cn-zhangjiakou</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-zhangjiakou/quickstart/java/first-step/webplus-java-demo-0.1.1-exec.jar</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-java-demo</SourceUrl>\\n          <RegionId>cn-beijing</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-beijing/quickstart/java/first-step/webplus-java-demo-0.1.1-exec.jar</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-java-demo</SourceUrl>\\n          <RegionId>cn-shanghai</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-shanghai/quickstart/java/first-step/webplus-java-demo-0.1.1-exec.jar</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-java-demo</SourceUrl>\\n          <RegionId>cn-hangzhou</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-hangzhou/quickstart/java/first-step/webplus-java-demo-0.1.1-exec.jar</PackageUrl>\\n        </DemoProject>\\n      </DemoProjects>\\n      <CategoryLogo>https://openjdk.java.net/images/duke-thinking.png</CategoryLogo>\\n      <CreateTime>1553218065000</CreateTime>\\n      <UpdateTime>1553218065000</UpdateTime>\\n    </Category>\\n    <Category>\\n      <CategoryName>Node.js</CategoryName>\\n      <CategoryId>wca-7c937c98a9c0296d0c4823912</CategoryId>\\n      <CategoryDescription>The Node.js application supports ZIP-type application deployment packages.</CategoryDescription>\\n      <DemoProjects>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-node-demo</SourceUrl>\\n          <RegionId>cn-shenzhen</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-shenzhen/quickstart/node/first-step/webplus-node-demo-0.1.0.zip</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-node-demo</SourceUrl>\\n          <RegionId>cn-zhangjiakou</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-zhangjiakou/quickstart/node/first-step/webplus-node-demo-0.1.0.zip</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-node-demo</SourceUrl>\\n          <RegionId>cn-beijing</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-beijing/quickstart/node/first-step/webplus-node-demo-0.1.0.zip</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-node-demo</SourceUrl>\\n          <RegionId>cn-shanghai</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-shanghai/quickstart/node/first-step/webplus-node-demo-0.1.0.zip</PackageUrl>\\n        </DemoProject>\\n        <DemoProject>\\n          <SourceUrl>https://github.com/aliyun/alibabacloud-webplus-node-demo</SourceUrl>\\n          <RegionId>cn-hangzhou</RegionId>\\n          <PackageUrl>oss://webplus-prod-cn-hangzhou/quickstart/node/first-step/webplus-node-demo-0.1.0.zip</PackageUrl>\\n        </DemoProject>\\n      </DemoProjects>\\n      <CategoryLogo>http://tomcat.apache.org/res/images/tomcat.png</CategoryLogo>\\n      <CreateTime>1553218065000</CreateTime>\\n      <UpdateTime>1553218065000</UpdateTime>\\n    </Category>\\n  </Categories>\\n</DescribeCategoriesResponse>\\n","errorExample":""}]',
      'title' => '查询平台类型',
      'summary' => '调用DescribeCategories查询平台类型。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeStacks' => 
    array (
      'path' => '/pop/v1/wam/stack',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RecommendedOnly',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仅查询推荐的技术栈',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'CategoryName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技术栈类型名称',
            'type' => 'string',
            'required' => false,
            'example' => 'Java',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'TotalCount' => 
              array (
                'description' => '查询结果总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E95B3D91-ED61-4715-AAD1-7E496A*****6',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'PageSize' => 
              array (
                'description' => '查询页面大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '查询页面数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Stacks' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Stack' => 
                  array (
                    'description' => '技术栈查询结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateTime' => 
                        array (
                          'description' => '最后更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1553218065000',
                        ),
                        'StackId' => 
                        array (
                          'description' => '',
                          'type' => 'string',
                          'example' => 'ws-6c937c98a9c0296d0c48*****',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '技术栈创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1553218065000',
                        ),
                        'RecommendedStack' => 
                        array (
                          'description' => '',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'StackName' => 
                        array (
                          'description' => '',
                          'type' => 'string',
                          'example' => 'Java 8 / Aliyun Linux 2.1903',
                        ),
                        'CategoryName' => 
                        array (
                          'description' => '',
                          'type' => 'string',
                          'example' => 'Java',
                        ),
                        'VersionCode' => 
                        array (
                          'description' => '最后更新者',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'LatestStack' => 
                        array (
                          'description' => '',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E95B3D91-ED61-4715-AAD1-7E496A*****6\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"Stacks\\": {\\n    \\"Stack\\": [\\n      {\\n        \\"UpdateTime\\": 1553218065000,\\n        \\"StackId\\": \\"ws-6c937c98a9c0296d0c48*****\\",\\n        \\"CreateTime\\": 1553218065000,\\n        \\"RecommendedStack\\": true,\\n        \\"StackName\\": \\"Java 8 / Aliyun Linux 2.1903\\",\\n        \\"CategoryName\\": \\"Java\\",\\n        \\"VersionCode\\": 10,\\n        \\"LatestStack\\": true\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeStacksResponse>\\n  <PageNumber>1</PageNumber>\\n  <TotalCount>1</TotalCount>\\n  <Message>success</Message>\\n  <PageSize>10</PageSize>\\n  <RequestId>2581EA69-00C2-44F8-85DD-1F1*****44D7</RequestId>\\n  <Stacks>\\n    <Stack>\\n      <LatestStack>true</LatestStack>\\n      <CategoryName>Java</CategoryName>\\n      <RecommendedStack>true</RecommendedStack>\\n      <StackId>ws-6c937c98a9c*****0c4823984</StackId>\\n      <CreateTime>1553218065000</CreateTime>\\n      <VersionCode>10</VersionCode>\\n      <UpdateTime>1553218065000</UpdateTime>\\n      <StackName>Java 8 / Aliyun Linux 2.1903</StackName>\\n    </Stack>\\n  </Stacks>\\n  <Code>OK</Code>\\n</DescribeStacksResponse>","errorExample":""}]',
      'title' => '查询技术栈',
      'summary' => '调用DescribeStacks查询技术栈。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreatePkgVersion' => 
    array (
      'path' => '/pop/v1/wam/pkgVersion',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PkgVersionLabel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '版本标签',
            'type' => 'string',
            'required' => false,
            'example' => 'version-demo-tmc-1.5',
          ),
        ),
        1 => 
        array (
          'name' => 'PkgVersionDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '版本描述信息',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a package.',
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '建立部署包版本的应用ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wa-5d3eaae92977ca5251e*****',
          ),
        ),
        3 => 
        array (
          'name' => 'PackageSource',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用于建立部署包版本的资源包',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://target-url/webx/webx-quickstart-tomcat-0.1.0-SNAPSHOT.war',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success。

',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '14A65FB3-DFD6-4D9A-83EA-9259C2D*****',
              ),
              'PkgVersion' => 
              array (
                'description' => '部署包版本信息',
                'type' => 'object',
                'properties' => 
                array (
                  'AppName' => 
                  array (
                    'description' => '应用名称',
                    'type' => 'string',
                    'example' => 'app1',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '上次更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1564388159130',
                  ),
                  'PkgVersionLabel' => 
                  array (
                    'description' => '部署包版本标签',
                    'type' => 'string',
                    'example' => 'version-demo-tmc-1.5',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '部署包创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1564388159130',
                  ),
                  'AppId' => 
                  array (
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => 'wa-5d3eaae92977ca5251e*****',
                  ),
                  'PackageSource' => 
                  array (
                    'description' => '部署包资源位置，用于建立部署包版本的资源。',
                    'type' => 'string',
                    'example' => 'oss://target-url/webx/webx-quickstart-tomcat-0.1.0-SNAPSHOT.war',
                  ),
                  'PkgVersionId' => 
                  array (
                    'description' => '部署包版本ID',
                    'type' => 'string',
                    'example' => 'wp-5d3eab3f2977ca5251e*****',
                  ),
                  'PkgVersionDescription' => 
                  array (
                    'description' => '部署包版本描述',
                    'type' => 'string',
                    'example' => 'This is a package',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK。

',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'VersionLabelExists',
            'errorMessage' => 'An error occurred while creating an application version. The version name already exists. Please use a different name and try again.',
          ),
          1 => 
          array (
            'errorCode' => 'OSSPathInvalid',
            'errorMessage' => 'The specified OSS path is invalid. For more information about OSS path, see oss://webx-demo/directory/file.json',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"14A65FB3-DFD6-4D9A-83EA-9259C2D*****\\",\\n  \\"PkgVersion\\": {\\n    \\"AppName\\": \\"app1\\",\\n    \\"UpdateTime\\": 1564388159130,\\n    \\"PkgVersionLabel\\": \\"version-demo-tmc-1.5\\",\\n    \\"CreateTime\\": 1564388159130,\\n    \\"AppId\\": \\"wa-5d3eaae92977ca5251e*****\\",\\n    \\"PackageSource\\": \\"oss://target-url/webx/webx-quickstart-tomcat-0.1.0-SNAPSHOT.war\\",\\n    \\"PkgVersionId\\": \\"wp-5d3eab3f2977ca5251e*****\\",\\n    \\"PkgVersionDescription\\": \\"This is a package\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<CreatePkgVersionResponse>\\n    <Message>success</Message>\\n    <RequestId>257C2FA9-3316-4BCB-9DB7-219A7A0*****</RequestId>\\n    <PkgVersion>\\n        <PkgVersionDescription>This is a package.</PkgVersionDescription>\\n        <CreateTime>1562246822377</CreateTime>\\n        <AppId>wa-5d1d9d8c85c7f86e2ef*****</AppId>\\n        <UpdateTime>1562246822377</UpdateTime>\\n        <PkgVersionLabel>version-demo-tmc-1.4</PkgVersionLabel>\\n        <PkgVersionId>wp-5d244f33f314934e2ab*****</PkgVersionId>\\n    </PkgVersion>\\n    <Code>OK</Code>\\n</CreatePkgVersionResponse>","errorExample":""}]',
      'title' => '创建一个部署包版本',
      'summary' => '调用CreatePkgVersion创建一个部署包版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeletePkgVersion' => 
    array (
      'path' => '/pop/v1/wam/pkgVersion',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PkgVersionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的部署包版本ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'wp-5d1dfea63d7b4445ad6d****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D8F166F0-632E-4DBA-96ED-EA520AE3****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"D8F166F0-632E-4DBA-96ED-EA520AE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DeletePkgVersionResponse>\\n  <Message>success</Message>\\n  <RequestId>259AD58C-5B78-4D19-95EE-E30B57C7****</RequestId>\\n  <Code>OK</Code>\\n</DeletePkgVersionResponse>\\n","errorExample":""}]',
      'title' => '删除一个部署包版本',
      'summary' => '调用DeletePkgVersion删除一个部署包版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribePkgVersions' => 
    array (
      'path' => '/pop/v1/wam/pkgVersion',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，表示部署包版本所在的应用',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'wa-5d1d9d8c85c7f86**********',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PkgVersionLabel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署包版本标签',
            'type' => 'string',
            'required' => false,
            'example' => 'version-demo-tmc-1.4',
          ),
        ),
        4 => 
        array (
          'name' => 'PkgVersionSearch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署包版本标签搜索关键字，将返回含有此关键字的部署包版本',
            'type' => 'string',
            'required' => false,
            'example' => 'tmc',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'TotalCount' => 
              array (
                'description' => '查询结果总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9ADFCBC1-3315-4E97-B5A3-406528B*****',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'PageSize' => 
              array (
                'description' => '查询页面大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '查询页面数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PkgVersions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PkgVersion' => 
                  array (
                    'description' => '查询版本结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateUsername' => 
                        array (
                          'description' => '部署包版本建立者',
                          'type' => 'string',
                          'example' => 'baiji',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用ID，表示部署包版本所在的应用',
                          'type' => 'string',
                          'example' => 'App1',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '部署包版本的更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562246822377',
                        ),
                        'PkgVersionLabel' => 
                        array (
                          'description' => '部署包版本标签',
                          'type' => 'string',
                          'example' => 'version-demo-tmc-1.5',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '部署包版本的更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562246822377',
                        ),
                        'PackageSource' => 
                        array (
                          'description' => '部署包版本的资源包',
                          'type' => 'string',
                          'example' => 'resources/userName/versions/version-demo-tmc-1.4/webx-quickstart-tomcat-0.1.0-SNAPSHOT.war',
                        ),
                        'AppId' => 
                        array (
                          'description' => '应用ID，表示部署包版本所在的应用',
                          'type' => 'string',
                          'example' => 'wa-5d1d9d8c85c7f86e2ef*****',
                        ),
                        'PackageETag' => 
                        array (
                          'type' => 'string',
                        ),
                        'PkgVersionId' => 
                        array (
                          'description' => '部署包版本ID',
                          'type' => 'string',
                          'example' => 'wp-5d244f33f314934e2ab*****',
                        ),
                        'PkgVersionDescription' => 
                        array (
                          'description' => '部署包版本描述',
                          'type' => 'string',
                          'example' => 'This is a package.',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9ADFCBC1-3315-4E97-B5A3-406528B*****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"PkgVersions\\": {\\n    \\"PkgVersion\\": [\\n      {\\n        \\"CreateUsername\\": \\"baiji\\",\\n        \\"AppName\\": \\"App1\\",\\n        \\"UpdateTime\\": 1562246822377,\\n        \\"PkgVersionLabel\\": \\"version-demo-tmc-1.5\\",\\n        \\"CreateTime\\": 1562246822377,\\n        \\"PackageSource\\": \\"resources/userName/versions/version-demo-tmc-1.4/webx-quickstart-tomcat-0.1.0-SNAPSHOT.war\\",\\n        \\"AppId\\": \\"wa-5d1d9d8c85c7f86e2ef*****\\",\\n        \\"PkgVersionId\\": \\"wp-5d244f33f314934e2ab*****\\",\\n        \\"PkgVersionDescription\\": \\"This is a package.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribePkgVersionsResponse>\\n  <PageNumber>1</PageNumber>\\n  <TotalCount>1</TotalCount>\\n  <Message>success</Message>\\n  <PageSize>10</PageSize>\\n  <RequestId>D2F23007-1F7F-4532-852E-6127B18*****</RequestId>\\n  <PkgVersions>\\n    <PkgVersion>\\n      <PackageSource>resources/user1/versions/version-demo-tmc-1.5/webx-quickstart-tomcat-0.1.0-SNAPSHOT.war</PackageSource>\\n      <PkgVersionDescription>This is a package.</PkgVersionDescription>\\n      <CreateUsername>user1</CreateUsername>\\n      <CreateTime>1562660659387</CreateTime>\\n      <AppId>wa-5d1d9d8c85c7f86e2ef*****</AppId>\\n      <UpdateTime>1562660659387</UpdateTime>\\n      <PkgVersionLabel>version-demo-tmc-1.5</PkgVersionLabel>\\n      <PkgVersionId>wp-5d244f33f314934e2ab*****</PkgVersionId>\\n    </PkgVersion>\\n  </PkgVersions>\\n  <Code>OK</Code>\\n</DescribePkgVersionsResponse>","errorExample":""}]',
      'title' => '查询部署包版本',
      'summary' => '调用DescribePkgVersions查询部署包版本。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAppEnv' => 
    array (
      'path' => '/pop/v1/wam/appEnv',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境名称',
            'type' => 'string',
            'required' => false,
            'example' => 'envTest',
          ),
        ),
        1 => 
        array (
          'name' => 'EnvDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境描述信息',
            'type' => 'string',
            'required' => false,
            'example' => 'this is an env',
          ),
        ),
        2 => 
        array (
          'name' => 'StackId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境使用的技术栈ID，若指定了源环境ID或配置模板ID，此参数将被忽略，否则必须指定此参数',
            'type' => 'string',
            'required' => false,
            'example' => 'ws-6c937c98a9c0296d0c48*****',
          ),
        ),
        3 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wa-6c937c98a9c0296d0c48*****',
          ),
        ),
        4 => 
        array (
          'name' => 'PkgVersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '部署包版本ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wp-6c937c98a9c0296d0c48*****',
          ),
        ),
        5 => 
        array (
          'name' => 'OptionSettings',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义配置项数据，JSON数组，包含以下字段：
- `path`：配置项路径
- `name`：配置项名称
- `value`：配置值',
            'type' => 'string',
            'required' => false,
            'example' => '[{"path":"resources.ecs.autoScaling", "name":"instanceNum","value":"10"},     {"path":"application.option", "name":"port","value":"8081"}]',
          ),
        ),
        6 => 
        array (
          'name' => 'ProfileName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '初始化配置类型，可选以下值：
 - `HighAvailability`：高可用，该配置会将实例数设置为2，同时启用公网SLB
 - `StandAlone`：低成本，该配置会将实例数设置为1',
            'type' => 'string',
            'required' => false,
            'example' => 'HighAvailability',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceEnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '源环境ID，新创建的环境将克隆此环境的技术栈，配置项和部署包版本。
',
            'type' => 'string',
            'required' => false,
            'example' => 'we-6c937c98a9c0296d0c48*****',
          ),
        ),
        8 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '源模版ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wct-5d1c0a5d913567334af*****',
          ),
        ),
        9 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否模拟变更
- 若设定该参数为true，则不会创建变更，而是输出创建环境的操作步骤；否则会创建环境，并输出变更ID
 - 默认为false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'ExtraProperties',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8D69F3C4-EA43-49D5-875A-0893BF5*****',
              ),
              'EnvChangeDetail' => 
              array (
                'description' => '环境变更信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1562666697684',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d3e71642977ca5251e*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d39b8ba6786bd4b149*****',
                  ),
                  'Operations' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Operation' => 
                      array (
                        'description' => '变更操作列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'OperationDescription' => 
                            array (
                              'description' => '操作描述信息',
                              'type' => 'string',
                              'example' => 'Bind to VSwitch vsw-wz9gfawx1vxkimtj*****',
                            ),
                            'OperationType' => 
                            array (
                              'description' => '操作类型',
                              'type' => 'string',
                              'example' => 'create',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConfigOptionNotExists',
            'errorMessage' => 'An error occurred while updating the configuration. The system did not locate the configuration item declared by the key.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
          1 => 
          array (
            'errorCode' => 'EnvCreateFailed',
            'errorMessage' => 'An error occurred while creating an environment.',
          ),
          2 => 
          array (
            'errorCode' => 'OSSDisabled',
            'errorMessage' => 'You have not activated the OSS service and cannot use the WebPlus service. Please go to the OSS console (https://oss.console.aliyun.com) to activate OSS and try again.',
          ),
          3 => 
          array (
            'errorCode' => 'OSSApiCallFailed',
            'errorMessage' => 'When initializing applications, updating configurations, or destroying applications, WebPlus attempts to communicate with OSS through API communication. An OSS service throw error occurred. The bucket or the file does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'StackNotExists',
            'errorMessage' => 'The declared software stack information does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'AppNotExist',
            'errorMessage' => 'A corresponding application was not found based on the application ID.',
          ),
          6 => 
          array (
            'errorCode' => 'AppCategoryNotMatchWithStacks',
            'errorMessage' => 'The application type declared in the application does not match the type of the software stack. Please make sure that the types are consistent and then try again.',
          ),
          7 => 
          array (
            'errorCode' => 'StackContainsNoConfigOption',
            'errorMessage' => 'An error occurred while modifying the configuration. The corresponding software stack does not contain any configuration items.',
          ),
          8 => 
          array (
            'errorCode' => 'ChangingAReadonlyConfig',
            'errorMessage' => 'An error occurred while modifying the configuration. You cannot modify a read-only configuration.',
          ),
          9 => 
          array (
            'errorCode' => 'ConfigValueInvalid',
            'errorMessage' => 'An error occurred while resolving the configuration values. Please make sure the value type and constraints is consistent with the declared type. Types currently supported by WebPlus are: String, Integer, List, Boolean, Float, Json.',
          ),
          10 => 
          array (
            'errorCode' => 'AppPackageNotExists',
            'errorMessage' => 'An application deployment package is required to create or update a deployment environment. For the first time of using WebPlus, we recommend that you use a sample project.',
          ),
          11 => 
          array (
            'errorCode' => 'AppPackageOwnedByOthers',
            'errorMessage' => 'The version of the deployment package used must be consistent with the application to which the environment belongs.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"8D69F3C4-EA43-49D5-875A-0893BF5*****\\",\\n  \\"EnvChangeDetail\\": {\\n    \\"StartTime\\": \\"1562666697684\\",\\n    \\"EnvId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangeId\\": \\"wc-5d3e71642977ca5251e*****\\",\\n    \\"Operations\\": {\\n      \\"Operation\\": [\\n        {\\n          \\"OperationType\\": \\"create\\",\\n          \\"OperationDescription\\": \\"Bind to VSwitch vsw-wz9gfawx1vxkimtj*****\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<CreateAppEnvResponse>\\n  <Message>success</Message>\\n  <RequestId>3E85CF06-071C-4A90-B7A1-2ACBA56*****</RequestId>\\n  <EnvChangeDetail>\\n    <Operations>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Bind to VPC vpc-wz9e6y22o3o91nuy*****</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Bind to VSwitch vsw-wz9gfawx1vxkimtj*****</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Create security group</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>update</OperationType>\\n        <OperationDescription>Update ESS scaling group</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Create 1 ECS instances and create instances with priority using the following instance specifications: ecs.t5-*****.small,ecs.*****.small,ecs.*****.tiny,ecs.*****.large (Creating resources may incur charges, please see //www.aliyun.com/price/product ?#/ecs/detail ECS Pricing></OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Setup platform services on ECS instance(s)</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Create monitor group</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>update</OperationType>\\n        <OperationDescription>Synchronous ECS instance(s) to monitor group</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>update</OperationType>\\n        <OperationDescription>Change application on the instance(s)</OperationDescription>\\n      </Operation>\\n    </Operations>\\n  </EnvChangeDetail>\\n  <Code>OK</Code>\\n</CreateAppEnvResponse>","errorExample":""}]',
      'title' => '创建部署环境',
      'summary' => '创建一个部署环境。',
      'description' => '- 选择从已有环境或配置模板快速创建一个部署环境，使用两种方式创建环境时，将使用所选择环境或配置模板的部署包版本来部署新环境。
- 若不指定已有环境或配置模板，则必须指定技术栈ID和部署包版本ID。
- 若同时指定源环境ID，配置模板ID与技术栈ID中的多个参数，将依照源环境ID，配置模板ID，技术栈ID的优先级顺序来创建新环境。
- 此API被调用后若非模拟变更，则将返回此次创建的变更ID，可以使用此ID查询变更信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAppEnv' => 
    array (
      'path' => '/pop/v1/wam/appEnv',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的环境ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'we-5d39b8ba6786bd4b149*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success

',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '348C6C36-F98C-46A2-B14C-B280D84*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK

',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
          1 => 
          array (
            'errorCode' => 'DeleteEnvNotAllowed',
            'errorMessage' => 'You cannot delete an environment when the environment is abandoning an update, performing a change, or when the status is not “terminated".',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'DeletingEnvNotExists',
            'errorMessage' => 'Deleting environment failed. The specified environment does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"348C6C36-F98C-46A2-B14C-B280D84*****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<DeleteAppEnvResponse>\\n    <Message>success</Message>\\n    <RequestId>348C6C36-F98C-46A2-B14C-B280D84*****</RequestId>\\n    <Code>OK</Code>\\n</DeleteAppEnvResponse>","errorExample":""}]',
      'title' => '删除一个应用环境',
      'summary' => '调用DeleteAppEnv删除一个环境。',
      'description' => '> 环境在被删除前必须处于“已释放”状态。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateAppEnv' => 
    array (
      'path' => '/pop/v1/wam/appEnv',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境描述信息',
            'type' => 'string',
            'required' => false,
            'example' => 'This is an env.',
          ),
        ),
        1 => 
        array (
          'name' => 'EnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '要更新的环境ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'we-5d39b8ba6786bd4b149*****',
          ),
        ),
        2 => 
        array (
          'name' => 'PkgVersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '部署包版本ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wp-5d1c0a5d913567334af*****',
          ),
        ),
        3 => 
        array (
          'name' => 'OptionSettings',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义配置项数据，JSON数组，包含以下字段：
- `path`：配置项路径
- `name`：配置项名称
- `value`：配置值',
            'type' => 'string',
            'required' => false,
            'example' => '[{"path":"resources.slb.internet", "name":"enable","value":"true"}]',
          ),
        ),
        4 => 
        array (
          'name' => 'StackId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境所使用的技术栈ID',
            'type' => 'string',
            'required' => false,
            'example' => 'ws-6c937c98a9c0296d0c48*****',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否模拟变更
- 若设定该参数为true，则不会创建变更，而是输出创建环境的操作步骤；否则会创建环境，并输出变更ID
 - 默认为false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ExtraProperties',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '本次变更的附加参数',
            'type' => 'string',
            'required' => false,
            'example' => '{"Keypair":"testKey"}',
          ),
        ),
        7 => 
        array (
          'name' => 'BatchSize',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'BatchPercent',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'BatchInterval',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'PauseBetweenBatches',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8D69F3C4-EA43-49D5-875A-0893BF5*****',
              ),
              'EnvChangeDetail' => 
              array (
                'description' => '环境变更信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1562666600768',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d3bb06a970b3f2e2a8*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d39b8ba6786bd4b149*****',
                  ),
                  'Operations' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Operation' => 
                      array (
                        'description' => '变更操作',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'OperationDescription' => 
                            array (
                              'description' => '变更操作',
                              'type' => 'string',
                              'example' => 'Unbind VSwitch(es) vsw-wz9gfawx1vxkimtj*****',
                            ),
                            'OperationType' => 
                            array (
                              'description' => '操作类型',
                              'type' => 'string',
                              'example' => 'destroy',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'ChangingAReadonlyConfig',
            'errorMessage' => 'An error occurred while modifying the configuration. You cannot modify a read-only configuration.',
          ),
          1 => 
          array (
            'errorCode' => 'ConfigValueInvalid',
            'errorMessage' => 'An error occurred while resolving the configuration values. Please make sure the value type and constraints is consistent with the declared type. Types currently supported by WebPlus are: String, Integer, List, Boolean, Float, Json.',
          ),
          2 => 
          array (
            'errorCode' => 'AppPackageOwnedByOthers',
            'errorMessage' => 'The version of the application package used must be consistent with the application to which the environment belongs.',
          ),
          3 => 
          array (
            'errorCode' => 'AppCategoryNotMatchWithStacks',
            'errorMessage' => 'The application type declared in the application does not match the type of the software stack. Please make sure that the types are consistent and then try again.',
          ),
          4 => 
          array (
            'errorCode' => 'EnvOnChanging',
            'errorMessage' => 'An error occurred while starting the change. Wait until the ongoing change is complete.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
          1 => 
          array (
            'errorCode' => 'VpcNotAllowedUpdate',
            'errorMessage' => 'You are not allowed to modify the VPC ID against an unterminated environment. Please terminate it before continuing this operation.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConfigOptionNotExists',
            'errorMessage' => 'An error occurred while updating the configuration. The system did not locate the configuration item declared by the key.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"8D69F3C4-EA43-49D5-875A-0893BF5*****\\",\\n  \\"EnvChangeDetail\\": {\\n    \\"StartTime\\": \\"1562666600768\\",\\n    \\"EnvId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangeId\\": \\"wc-5d3bb06a970b3f2e2a8*****\\",\\n    \\"Operations\\": {\\n      \\"Operation\\": [\\n        {\\n          \\"OperationType\\": \\"destroy\\",\\n          \\"OperationDescription\\": \\"Unbind VSwitch(es) vsw-wz9gfawx1vxkimtj*****\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<UpdateAppEnvResponse>\\n  <Message>success</Message>\\n  <RequestId>1DCDA97A-5F5E-4DEC-85C7-9F2EE02*****</RequestId>\\n  <EnvChangeDetail>\\n    <Operations>\\n      <Operation>\\n        <OperationType>destroy</OperationType>\\n        <OperationDescription>Delete monitor group *****03</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>destroy</OperationType>\\n        <OperationDescription>Delete security group sg-wz97khuqdfkclpr*****</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>destroy</OperationType>\\n        <OperationDescription>Delete scaling group on ESS</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>destroy</OperationType>\\n        <OperationDescription>Unbind VSwitch(es) vsw-wz9gfawx1vxkimtj*****</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>destroy</OperationType>\\n        <OperationDescription>Unbind VPC vpc-wz9e6y22o3o91nuy*****</OperationDescription>\\n      </Operation>\\n    </Operations>\\n  </EnvChangeDetail>\\n  <Code>OK</Code>\\n</UpdateAppEnvResponse>","errorExample":""}]',
      'title' => '更新一个部署环境',
      'summary' => '调用此API更新一个部署环境。',
      'description' => '- 无法通过修改技术栈ID来修改环境的技术栈类型。
- 更新环境所使用的部署包版本必须与环境属于同一个应用。
- 此API被调用后若非模拟变更，则将返回此次创建的变更ID，可以使用此ID查询变更信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopAppEnv' => 
    array (
      'path' => '/pop/v1/wam/appEnv/stop',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境ID，将停止此环境',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'we-5d39b8ba6786bd4b149*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'EnvChange' => 
              array (
                'description' => '环境变更信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1562672060867',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d247bbcd43be51c729*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d39b8ba6786bd4b149*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8D69F3C4-EA43-49D5-875A-0893BF5*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'EnvOnChanging',
            'errorMessage' => 'An error occurred while starting the change. Wait until the ongoing change is complete.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
          1 => 
          array (
            'errorCode' => 'StatusNotAllowedStop',
            'errorMessage' => 'A stop action can only be made to an environment that is already running. An environment with other status cannot be stopped.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"8D69F3C4-EA43-49D5-875A-0893BF5*****\\",\\n  \\"EnvChange\\": {\\n    \\"StartTime\\": \\"1562672060867\\",\\n    \\"EnvId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangeId\\": \\"wc-5d247bbcd43be51c729*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<StopAppEnvResponse>\\n  <EnvChange>\\n    <ChangeId>wc-5d247ab5d43be51c72*****</ChangeId>\\n    <EnvId>we-5d247866d43be51c729*****</EnvId>\\n    <StartTime>1562671797841</StartTime>\\n  </EnvChange>\\n  <Message>success</Message>\\n  <RequestId>05BB8B43-DAA6-4E19-9A3C-AF11DD1*****</RequestId>\\n  <Code>OK</Code>\\n</StopAppEnvResponse>","errorExample":""}]',
      'title' => '停止一个部署环境',
      'summary' => '调用StopAppEnv停止一个部署环境。',
      'description' => '- 只能针对状态处于**运行中**的环境执行停止操作。
- 此API被调用后将返回此次创建的变更ID，可以使用此ID查询变更信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartAppEnv' => 
    array (
      'path' => '/pop/v1/wam/appEnv/start',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境ID，将启动此环境',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'we-5d39b8ba6786bd4b149*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'EnvChange' => 
              array (
                'description' => '环境变更响应信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1562672060867',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d247bbcd43be51c729*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d39b8ba6786bd4b149*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8D69F3C4-EA43-49D5-875A-0893BF*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'EnvOnChanging',
            'errorMessage' => 'An error occurred while starting the change. Wait until the ongoing change is complete.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
          1 => 
          array (
            'errorCode' => 'StatusNotAllowedStart',
            'errorMessage' => 'A start action can only be made to an environment that is already stopped. An environment with other status cannot be started.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"8D69F3C4-EA43-49D5-875A-0893BF*****\\",\\n  \\"EnvChange\\": {\\n    \\"StartTime\\": \\"1562672060867\\",\\n    \\"EnvId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangeId\\": \\"wc-5d247bbcd43be51c729*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<StarAppEnvResponse>\\n  <EnvChange>\\n    <ChangeId>wc-5d247ab5d43be51c729*****</ChangeId>\\n    <EnvId>we-5d247866d43be51c729*****</EnvId>\\n    <StartTime>1562671797841</StartTime>\\n  </EnvChange>\\n  <Message>success</Message>\\n  <RequestId>05BB8B43-DAA6-4E19-9A3C-AF11DD1*****</RequestId>\\n  <Code>OK</Code>\\n</StarAppEnvResponse>","errorExample":""}]',
      'title' => '启动一个部署环境',
      'summary' => '调用StartAppEnv启动一个部署环境。',
      'description' => '- 只能针对状态处于**已停止**的环境执行停止操作。
- 此API被调用后将返回此次创建的变更ID，可以使用此ID查询变更信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAppEnvInstanceHealth' => 
    array (
      'path' => '/pop/v1/wam/appEnv/instanceHealth',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境ID，将查询此环境内所有实例的健康状态',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'we-5d244085f314934e2ab*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'C8E457BD-0E3D-4EF0-AA1F-A36FE27*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
              'EnvInstanceHealth' => 
              array (
                'description' => '实例健康状态查询结果',
                'type' => 'object',
                'properties' => 
                array (
                  'EnableHealthCheck' => 
                  array (
                    'type' => 'boolean',
                  ),
                  'EnvName' => 
                  array (
                    'description' => '环境名称',
                    'type' => 'string',
                    'example' => 'test-env',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d3eaaea2977ca5251e*****',
                  ),
                  'InstanceHealthList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'InstanceHealth' => 
                      array (
                        'description' => '实例健康列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AppStatus' => 
                            array (
                              'description' => '应用状态',
                              'type' => 'string',
                              'example' => 'HEALTHY',
                            ),
                            'InstanceId' => 
                            array (
                              'description' => 'ECS实例ID',
                              'type' => 'string',
                              'example' => 'i-wz95ehd0129c8vv*****',
                            ),
                            'DisconnectedTime' => 
                            array (
                              'description' => '断连时长',
                              'type' => 'string',
                              'example' => '0',
                            ),
                            'AgentStatus' => 
                            array (
                              'description' => '代理连接状态',
                              'type' => 'string',
                              'example' => 'CONNECTED',
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
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"C8E457BD-0E3D-4EF0-AA1F-A36FE27*****\\",\\n  \\"EnvInstanceHealth\\": {\\n    \\"EnvName\\": \\"test-env\\",\\n    \\"EnvId\\": \\"we-5d3eaaea2977ca5251e*****\\",\\n    \\"InstanceHealthList\\": {\\n      \\"InstanceHealth\\": [\\n        {\\n          \\"AppStatus\\": \\"HEALTHY\\",\\n          \\"InstanceId\\": \\"i-wz95ehd0129c8vv*****\\",\\n          \\"DisconnectedTime\\": \\"0\\",\\n          \\"AgentStatus\\": \\"CONNECTED\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeAppEnvInstanceHealthResponse>\\n  <Message>success</Message>\\n  <RequestId>C99E58A1-5D86-4D50-B443-E41EEE1*****</RequestId>\\n  <EnvInstanceHealth>\\n    <EnvName>test-env</EnvName>\\n    <InstanceHealthList>\\n      <InstanceHealth>\\n        <DisconnectedTime>0</DisconnectedTime>\\n        <InstanceId>i-wz95ehd0129c8vv*****</InstanceId>\\n        <AgentStatus>CONNECTED</AgentStatus>\\n        <AppStatus>HEALTHY</AppStatus>\\n      </InstanceHealth>\\n    </InstanceHealthList>\\n    <EnvId>we-5d3eaaea2977ca5251e*****</EnvId>\\n  </EnvInstanceHealth>\\n  <Code>OK</Code>\\n</DescribeAppEnvInstanceHealthResponse>","errorExample":""}]',
      'title' => '查询ECS实例健康状态',
      'summary' => '查询一个环境内所有ECS实例的健康状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAppEnvStatus' => 
    array (
      'path' => '/pop/v1/wam/appEnv/status',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境ID，将查询此环境的状态',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'we-5d244085f314934e2ab1****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3CE38930-5A6A-4F7E-A6AD-DBF0EDE5****',
              ),
              'EnvStatus' => 
              array (
                'description' => '环境状态信息',
                'type' => 'object',
                'properties' => 
                array (
                  'ChangeBanner' => 
                  array (
                    'description' => '变更的通知消息',
                    'type' => 'string',
                    'example' => 'Web+ is updating your deplpoyment environment.',
                  ),
                  'LatestChangeId' => 
                  array (
                    'description' => '环境上次变更的变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d3bb06a970b3f2e2a87****',
                  ),
                  'EnvStatus' => 
                  array (
                    'description' => '环境运行状态',
                    'type' => 'string',
                    'example' => 'RUNNING',
                  ),
                  'EnvName' => 
                  array (
                    'description' => '环境名称',
                    'type' => 'string',
                    'example' => 'test1',
                  ),
                  'InstanceAgentStatus' => 
                  array (
                    'description' => '实例代理状态',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ConnectedInstances' => 
                      array (
                        'description' => '已连接的实例个数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'DisconnectedInstances' => 
                      array (
                        'description' => '已断开连接的实例个数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                    ),
                  ),
                  'LastEnvStatus' => 
                  array (
                    'description' => '环境的上次状态',
                    'type' => 'string',
                    'example' => 'INITIALIZING',
                  ),
                  'InstanceAppStatus' => 
                  array (
                    'description' => 'ECS实例中运行的应用的健康状态',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'HealthyInstances' => 
                      array (
                        'description' => '健康实例应用的个数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'StoppedInstances' => 
                      array (
                        'description' => '停止的实例应用个数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'UnhealthyInstances' => 
                      array (
                        'description' => '不健康的实例应用个数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'UnknownInstances' => 
                      array (
                        'description' => '位置状态的实例应用个数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                    ),
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d1af9c902470221ab7d****',
                  ),
                  'AbortingChange' => 
                  array (
                    'description' => '是否处于被终止状态',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'ApplyingChange' => 
                  array (
                    'description' => '是否正在对环境进行变更',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"3CE38930-5A6A-4F7E-A6AD-DBF0EDE5****\\",\\n  \\"EnvStatus\\": {\\n    \\"ChangeBanner\\": \\"Web+ is updating your deplpoyment environment.\\",\\n    \\"LatestChangeId\\": \\"wc-5d3bb06a970b3f2e2a87****\\",\\n    \\"EnvStatus\\": \\"RUNNING\\",\\n    \\"EnvName\\": \\"test1\\",\\n    \\"LastEnvStatus\\": \\"INITIALIZING\\",\\n    \\"EnvId\\": \\"we-5d1af9c902470221ab7d****\\",\\n    \\"AbortingChange\\": false,\\n    \\"ApplyingChange\\": false,\\n    \\"InstanceAppStatus\\": {\\n      \\"HealthyInstances\\": 0,\\n      \\"StoppedInstances\\": 0,\\n      \\"UnhealthyInstances\\": 0,\\n      \\"UnknownInstances\\": 0\\n    },\\n    \\"InstanceAgentStatus\\": {\\n      \\"ConnectedInstances\\": 0,\\n      \\"DisconnectedInstances\\": 0\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeAppEnvStatusResponse>\\n  <EnvStatus>\\n    <EnvStatus>RUNNING</EnvStatus>\\n    <AbortingChange>false</AbortingChange>\\n    <ChangeBanner>Web+ is trying to recover your deployment environment</ChangeBanner>\\n    <LatestChangeId>wc-5d3bb06a970b3f2e2a87****</LatestChangeId>\\n    <LastEnvStatus>INITIALIZING</LastEnvStatus>\\n    <EnvName>xianbin-test-env</EnvName>\\n    <EnvId>we-5d1af9c902470221ab7d****</EnvId>\\n    <ApplyingChange>false</ApplyingChange>\\n    <InstanceAgentStatus>\\n      <DisconnectedInstances>0</DisconnectedInstances>\\n      <ConnectedInstances>0</ConnectedInstances>\\n    </InstanceAgentStatus>\\n    <InstanceAppStatus>\\n      <UnhealthyInstances>0</UnhealthyInstances>\\n      <StoppedInstances>0</StoppedInstances>\\n      <HealthyInstances>0</HealthyInstances>\\n      <UnknownInstances>0</UnknownInstances>\\n    </InstanceAppStatus>\\n  </EnvStatus>\\n  <Message>success</Message>\\n  <RequestId>F1D5FD22-87AC-483A-9310-4F7C6FB6****</RequestId>\\n  <Code>OK</Code>\\n</DescribeAppEnvStatusResponse>\\n","errorExample":""}]',
      'title' => '查询给定环境的状态',
      'summary' => '调用DescribeAppEnvStatus查询给定环境的状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAppEnvs' => 
    array (
      'path' => '/pop/v1/wam/appEnv',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境ID',
            'type' => 'string',
            'required' => false,
            'example' => 'we-5d22b3816f48e5478fd*****',
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境所属的应用ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'wa-5cef9f96dd351b61df0*****',
          ),
        ),
        2 => 
        array (
          'name' => 'IncludeTerminated',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否包含已释放的环境',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页查询数据量，默认为10条',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页数，默认为第1页',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'EnvName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境名称',
            'type' => 'string',
            'required' => false,
            'example' => 'Test1',
          ),
        ),
        6 => 
        array (
          'name' => 'EnvSearch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境搜索关键字',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
        7 => 
        array (
          'name' => 'RecentUpdated',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询最近变更环境，默认为false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'StackSearch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技术栈搜索关键字',
            'type' => 'string',
            'required' => false,
            'example' => 'Java',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'TotalCount' => 
              array (
                'description' => '总记录条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D435EBFB-623E-47FB-A55A-C0F4C8B*****',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'PageSize' => 
              array (
                'description' => '查询页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '每页查询数据量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'AppEnvs' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AppEnv' => 
                  array (
                    'description' => '环境列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562557466136',
                        ),
                        'TotalInstances' => 
                        array (
                          'description' => '环境总实例数',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'PkgVersionStorageKey' => 
                        array (
                          'description' => '部署包版本文件',
                          'type' => 'string',
                          'example' => 'webplus-demo-java-0.1.0-SNAPSHOT-exec.jar',
                        ),
                        'LatestChangeId' => 
                        array (
                          'description' => '环境上次变更ID',
                          'type' => 'string',
                          'example' => 'wc-5d22c046b767ab0fc64*****',
                        ),
                        'EnvStatus' => 
                        array (
                          'description' => '环境运行状态',
                          'type' => 'string',
                          'example' => 'RUNNING',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '环境创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1560246554242',
                        ),
                        'LastEnvStatus' => 
                        array (
                          'description' => '环境上次变更前状态',
                          'type' => 'string',
                          'example' => 'RUNNING',
                        ),
                        'PkgVersionId' => 
                        array (
                          'description' => '部署版本包ID',
                          'type' => 'string',
                          'example' => 'wp-5d1c0a5d913567334af*****',
                        ),
                        'EnvDescription' => 
                        array (
                          'description' => '环境描述信息
',
                          'type' => 'string',
                          'example' => 'This is an env.',
                        ),
                        'ApplyingChange' => 
                        array (
                          'description' => '环境是否正在变更',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'EnvType' => 
                        array (
                          'description' => '环境类型
',
                          'type' => 'string',
                          'example' => 'web',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名称',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'CreateUsername' => 
                        array (
                          'description' => '创建环境的用户名',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'AppId' => 
                        array (
                          'description' => '环境所属的应用ID',
                          'type' => 'string',
                          'example' => 'wa-5cef9f96dd351b61df0*****',
                        ),
                        'DataRoot' => 
                        array (
                          'description' => '数据文件存储根目录',
                          'type' => 'string',
                          'example' => 'wproot',
                        ),
                        'StorageBase' => 
                        array (
                          'description' => '环境存储根目录',
                          'type' => 'string',
                          'example' => 'resources/yourJava-java/environments/Test2/',
                        ),
                        'UpdateUsername' => 
                        array (
                          'description' => '更新用户名',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'EnvName' => 
                        array (
                          'description' => '环境名称',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'LogBase' => 
                        array (
                          'description' => '日志存储根目录',
                          'type' => 'string',
                          'example' => 'logs/yourJava-java/environments/Test2/',
                        ),
                        'StackName' => 
                        array (
                          'description' => '技术栈名称',
                          'type' => 'string',
                          'example' => 'Java 8 / Aliyun Linux 2.1903',
                        ),
                        'CategoryName' => 
                        array (
                          'description' => '环境技术栈类型',
                          'type' => 'string',
                          'example' => 'Java',
                        ),
                        'UsingSharedStorage' => 
                        array (
                          'description' => '是否使用共享oss存储',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ChangeBanner' => 
                        array (
                          'description' => '变更提示',
                          'type' => 'string',
                          'example' => 'Web+正在变更您的环境',
                        ),
                        'StackId' => 
                        array (
                          'description' => '技术栈ID',
                          'type' => 'string',
                          'example' => 'ws-6c937c98a9c0296d0c48*****',
                        ),
                        'PkgVersionLabel' => 
                        array (
                          'description' => '部署版本名称',
                          'type' => 'string',
                          'example' => '20190703.095155',
                        ),
                        'EnvId' => 
                        array (
                          'description' => '环境ID',
                          'type' => 'string',
                          'example' => 'we-5d22b3816f48e5478fd*****',
                        ),
                        'AbortingChange' => 
                        array (
                          'description' => '环境是否正在取消变更',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'AppNotExist',
            'errorMessage' => 'A corresponding application was not found based on the application ID.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D435EBFB-623E-47FB-A55A-C0F4C8B*****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"PageNumber\\": 10,\\n  \\"PageSize\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"AppEnvs\\": {\\n    \\"AppEnv\\": [\\n      {\\n        \\"UpdateTime\\": 1562557466136,\\n        \\"TotalInstances\\": 1,\\n        \\"PkgVersionStorageKey\\": \\"webplus-demo-java-0.1.0-SNAPSHOT-exec.jar\\",\\n        \\"LatestChangeId\\": \\"wc-5d22c046b767ab0fc64*****\\",\\n        \\"EnvStatus\\": \\"RUNNING\\",\\n        \\"CreateTime\\": 1560246554242,\\n        \\"LastEnvStatus\\": \\"RUNNING\\",\\n        \\"PkgVersionId\\": \\"wp-5d1c0a5d913567334af*****\\",\\n        \\"EnvDescription\\": \\"This is an env.\\",\\n        \\"ApplyingChange\\": false,\\n        \\"EnvType\\": \\"web\\",\\n        \\"CreateUsername\\": \\"test\\",\\n        \\"AppName\\": \\"test\\",\\n        \\"AppId\\": \\"wa-5cef9f96dd351b61df0*****\\",\\n        \\"DataRoot\\": \\"wproot\\",\\n        \\"StorageBase\\": \\"resources/yourJava-java/environments/Test2/\\",\\n        \\"EnvName\\": \\"test\\",\\n        \\"UpdateUsername\\": \\"test\\",\\n        \\"LogBase\\": \\"logs/yourJava-java/environments/Test2/\\",\\n        \\"StackName\\": \\"Java 8 / Aliyun Linux 2.1903\\",\\n        \\"CategoryName\\": \\"Java\\",\\n        \\"UsingSharedStorage\\": true,\\n        \\"ChangeBanner\\": \\"Web+正在变更您的环境\\",\\n        \\"StackId\\": \\"ws-6c937c98a9c0296d0c48*****\\",\\n        \\"PkgVersionLabel\\": \\"20190703.095155\\",\\n        \\"EnvId\\": \\"we-5d22b3816f48e5478fd*****\\",\\n        \\"AbortingChange\\": false\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeAppEnvsResponse>\\n  <AppEnvs>\\n    <AppEnv>\\n      <LatestChangeId>wc-5d135e524f2c7336e33*****</LatestChangeId>\\n      <Type>web</Type>\\n      <DataRoot>wproot</DataRoot>\\n      <ApplyingChange>false</ApplyingChange>\\n      <AppId>wa-5cef9f96dd351b61df0*****</AppId>\\n      <StackName>Java 8 / Aliyun Linux 2.1903</StackName>\\n      <PkgVersionStorageKey>webplus-demo-java-0.1.0-SNAPSHOT-exec.jar</PkgVersionStorageKey>\\n      <CreateUsername>test</CreateUsername>\\n      <AppName>sanwei-java</AppName>\\n      <LastEnvStatus>TERMINATING</LastEnvStatus>\\n      <PkgVersionId>wp-5cff7917c6af395bed9*****</PkgVersionId>\\n      <EnvDescription/>\\n      <LogBase>logs/test/environments/test/</LogBase>\\n      <StackId>ws-6c937c98a9c0296d0c48*****</StackId>\\n      <UpdateTime>1561550418955</UpdateTime>\\n      <TotalInstances>1</TotalInstances>\\n      <AbortingChange>false</AbortingChange>\\n      <EnvName>tefdsa</EnvName>\\n      <EnvStatus>TERMINATED</EnvStatus>\\n      <CategoryName>Java</CategoryName>\\n      <UpdateUsername>test</UpdateUsername>\\n      <StorageBase>resources/test/environments/test/</StorageBase>\\n      <CreateTime>1560246554242</CreateTime>\\n      <PkgVersionLabel>20190611.174849</PkgVersionLabel>\\n      <EnvId>we-5cff791ac6af395bed9*****</EnvId>\\n      <UsingSharedStorage>true</UsingSharedStorage>\\n    </AppEnv>\\n  </AppEnvs>\\n  <PageNumber>1</PageNumber>\\n  <TotalCount>1</TotalCount>\\n  <Message>success</Message>\\n  <PageSize>10</PageSize>\\n  <RequestId>46F9B039-C782-4E68-8881-7F63A63*****</RequestId>\\n  <Code>OK</Code>\\n</DescribeAppEnvsResponse>","errorExample":""}]',
      'title' => '查询符合条件的部署环境',
      'summary' => '调用DescribeAppEnvs查询符合条件的部署环境。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceHealth' => 
    array (
      'path' => '/pop/v1/wam/instance/health',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'id为实例ID，即instanceId，标识一个ECS实例',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'i-wz9hwvnwm5tlv3u*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'FFBBC86A-2A15-4460-8B9C-BBC8E3F*****',
              ),
              'InstanceHealth' => 
              array (
                'description' => '实例健康信息',
                'type' => 'object',
                'properties' => 
                array (
                  'AppStatus' => 
                  array (
                    'description' => '应用状态',
                    'type' => 'string',
                    'example' => 'UNKOWN',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID',
                    'type' => 'string',
                    'example' => 'i-wz9hwvnwm5tlv3u*****',
                  ),
                  'DisconnectedTime' => 
                  array (
                    'description' => '断连总时长',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'AgentStatus' => 
                  array (
                    'description' => '代理连接状态',
                    'type' => 'string',
                    'example' => 'CONNECTED',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'InstanceIdParamInvalid',
            'errorMessage' => 'The specified instance ID does not exist.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceNotExists',
            'errorMessage' => 'The specified instance does not exist according to the Instance ID declared. The specified instance may have been released or the parameter passed in is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"FFBBC86A-2A15-4460-8B9C-BBC8E3F*****\\",\\n  \\"InstanceHealth\\": {\\n    \\"AppStatus\\": \\"UNKOWN\\",\\n    \\"InstanceId\\": \\"i-wz9hwvnwm5tlv3u*****\\",\\n    \\"DisconnectedTime\\": 0,\\n    \\"AgentStatus\\": \\"CONNECTED\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeInstanceHealthResponse>\\n  <InstanceHealth>\\n    <DisconnectedTime>0</DisconnectedTime>\\n    <InstanceId>i-wz9hwvnwm5tlv3u*****</InstanceId>\\n    <AgentStatus>CONNECTED</AgentStatus>\\n    <AppStatus>UNKOWN</AppStatus>\\n  </InstanceHealth>\\n  <Message>success</Message>\\n  <RequestId>6618008B-8BDF-4284-802B-E1DA40A*****</RequestId>\\n  <Code>OK</Code>\\n</DescribeInstanceHealthResponse>","errorExample":""}]',
      'title' => '查询一个给定ECS实例的健康状态',
      'summary' => '调用DescribeInstanceHealth查询一个给定ECS实例的健康状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeEnvResource' => 
    array (
      'path' => '/pop/v1/wam/envResource',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境ID，将查询此环境内的所有资源',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'we-5d22f93dcd04d705b65*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '71CC3AA5-17C9-465F-8F8A-0B6BE58*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
              'EnvResource' => 
              array (
                'description' => '环境资源信息',
                'type' => 'object',
                'properties' => 
                array (
                  'LaunchTemplateId' => 
                  array (
                    'description' => '启动模版ID',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'EnvName' => 
                  array (
                    'description' => '环境名称',
                    'type' => 'string',
                    'example' => 'test1',
                  ),
                  'VSwitches' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'VSwitch' => 
                      array (
                        'description' => '交换机列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Id' => 
                            array (
                              'description' => '交换机ID',
                              'type' => 'string',
                              'example' => 'vsw-wz9gfawx1vxkimtj*****',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Vpc' => 
                  array (
                    'description' => 'VPC信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Id' => 
                      array (
                        'description' => 'VPC的ID',
                        'type' => 'string',
                        'example' => 'vpc-wz9e6y22o3o91nuy*****',
                      ),
                    ),
                  ),
                  'MonitorGroup' => 
                  array (
                    'description' => '资源监控组',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Id' => 
                      array (
                        'description' => '监控组ID',
                        'type' => 'string',
                        'example' => '71*****',
                      ),
                    ),
                  ),
                  'LaunchConfigurationId' => 
                  array (
                    'description' => '启动配置ID',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'LoadBalancers' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'LoadBalancer' => 
                      array (
                        'description' => '环境内负载均衡资源列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Imported' => 
                            array (
                              'description' => '是否为导入实例',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'Protocol' => 
                            array (
                              'description' => '协议',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'AddressType' => 
                            array (
                              'description' => '地址类型',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'Listeners' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Listener' => 
                                array (
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Protocol' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'Port' => 
                                      array (
                                        'type' => 'integer',
                                        'format' => 'int32',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'Port' => 
                            array (
                              'description' => '端口号',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1001',
                            ),
                            'Id' => 
                            array (
                              'description' => '负载均衡实例ID',
                              'type' => 'string',
                              'example' => '""',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Instances' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Instance' => 
                      array (
                        'description' => '环境内ECS实例信息列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Imported' => 
                            array (
                              'description' => '是否为导入实例',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'Id' => 
                            array (
                              'description' => '实例ID',
                              'type' => 'string',
                              'example' => 'i-wz9ci3y5rx4ub93*****',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'DefaultSecurityGroups' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SecurityGroup' => 
                      array (
                        'description' => '环境的默认安全组信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Id' => 
                            array (
                              'description' => '安全组ID',
                              'type' => 'string',
                              'example' => 'sg-5d22f93dcd04d705b65*****',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'ScalingGroup' => 
                  array (
                    'description' => '弹性伸缩组',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Id' => 
                      array (
                        'description' => '弹性伸缩组ID',
                        'type' => 'string',
                        'example' => 'asg-wz9aaa7g5ff6fiw*****',
                      ),
                    ),
                  ),
                  'Domains' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Domain' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'IsDefault' => 
                            array (
                              'type' => 'boolean',
                            ),
                            'HostedBy' => 
                            array (
                              'type' => 'string',
                            ),
                            'SubDomain' => 
                            array (
                              'type' => 'string',
                            ),
                            'DomainName' => 
                            array (
                              'type' => 'string',
                            ),
                            'ManagedBy' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'RdsInstances' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RdsInstance' => 
                      array (
                        'description' => '环境内RDS实例信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Imported' => 
                            array (
                              'description' => '是否为导入实例',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'DatabaseName' => 
                            array (
                              'description' => '数据库名',
                              'type' => 'string',
                              'example' => 'webplus',
                            ),
                            'Id' => 
                            array (
                              'description' => 'RDS实例ID',
                              'type' => 'string',
                              'example' => 'rm-5d22f93dcd04d705b65*****',
                            ),
                            'AccountName' => 
                            array (
                              'description' => '数据库账号名',
                              'type' => 'string',
                              'example' => 'webplus',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d22f93dcd04d705b65*****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"71CC3AA5-17C9-465F-8F8A-0B6BE58*****\\",\\n  \\"EnvResource\\": {\\n    \\"EnvId\\": \\"we-5d22f93dcd04d705b65*****\\",\\n    \\"LaunchConfigurationId\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"LaunchTemplateId\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"EnvName\\": \\"test1\\",\\n    \\"Instances\\": {\\n      \\"Instance\\": [\\n        {\\n          \\"Id\\": \\"i-wz9ci3y5rx4ub93*****\\",\\n          \\"Imported\\": false\\n        }\\n      ]\\n    },\\n    \\"VSwitches\\": {\\n      \\"VSwitch\\": [\\n        {\\n          \\"Id\\": \\"vsw-wz9gfawx1vxkimtj*****\\"\\n        }\\n      ]\\n    },\\n    \\"LoadBalancers\\": {\\n      \\"LoadBalancer\\": [\\n        {\\n          \\"AddressType\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Imported\\": false,\\n          \\"Port\\": 1001,\\n          \\"Protocol\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"Id\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ]\\n    },\\n    \\"DefaultSecurityGroups\\": {\\n      \\"SecurityGroup\\": [\\n        {\\n          \\"Id\\": \\"sg-5d22f93dcd04d705b65*****\\"\\n        }\\n      ]\\n    },\\n    \\"RdsInstances\\": {\\n      \\"RdsInstance\\": [\\n        {\\n          \\"Imported\\": false,\\n          \\"Id\\": \\"rm-5d22f93dcd04d705b65*****\\",\\n          \\"DatabaseName\\": \\"webplus\\",\\n          \\"AccountName\\": \\"webplus\\"\\n        }\\n      ]\\n    },\\n    \\"MonitorGroup\\": {\\n      \\"Id\\": \\"71*****\\"\\n    },\\n    \\"ScalingGroup\\": {\\n      \\"Id\\": \\"asg-wz9aaa7g5ff6fiw*****\\"\\n    },\\n    \\"Vpc\\": {\\n      \\"Id\\": \\"vpc-wz9e6y22o3o91nuy*****\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeEnvResourceResponse>\\n  <Message>success</Message>\\n  <EnvResource>\\n    <Vpc>\\n      <Id>vpc-wz9e6y22o3o91nuy*****</Id>\\n    </Vpc>\\n    <VSwitches>\\n      <VSwitch>\\n        <Id>vsw-wz9gfawx1vxkimtj*****</Id>\\n      </VSwitch>\\n    </VSwitches>\\n    <MonitorGroup>\\n      <Id>71*****</Id>\\n    </MonitorGroup>\\n    <EnvName>test1</EnvName>\\n    <EnvId>we-5d22f93dcd04d705b65*****</EnvId>\\n    <ScalingGroup>\\n      <Id>asg-wz9aaa7g5ff6fiw*****</Id>\\n    </ScalingGroup>\\n    <LoadBalancers/>\\n    <Instances>\\n      <Instance>\\n        <Id>i-wz9ci3y5rx4ub93*****</Id>\\n      </Instance>\\n    </Instances>\\n    <DefaultSecurityGroups>\\n      <SecurityGroup>\\n        <Id>sg-wz9b6zjhne81unz*****</Id>\\n      </SecurityGroup>\\n    </DefaultSecurityGroups>\\n    <RdsInstances></RdsInstances>\\n  </EnvResource>\\n  <RequestId>CA14B31B-4408-4B97-AB1E-78CECC5*****</RequestId>\\n  <Code>OK</Code>\\n</DescribeEnvResourceResponse>","errorExample":""}]',
      'title' => '查询一个环境内的所有资源',
      'summary' => '调用DescribeEnvResource查询一个环境内的所有资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeGatherLogResult' => 
    array (
      'path' => '/pop/v1/wam/appEnv/gatherLog',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChangeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更ID，将查询此变更对应的日志收集信息',
            'type' => 'string',
            'required' => false,
            'example' => 'wc-5d412db056fd7c14ac9*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'GatherLogResult' => 
              array (
                'description' => '日志收集结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'LogPath' => 
                  array (
                    'description' => '日志路径',
                    'type' => 'string',
                    'example' => '/home/admin/app/webplus-app.log',
                  ),
                  'Change' => 
                  array (
                    'description' => '变更信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ChangePaused' => 
                      array (
                        'description' => '变更是否被停止',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'ChangeDescription' => 
                      array (
                        'description' => '变更描述信息',
                        'type' => 'string',
                        'example' => '"gather logs of env we-5d3eaaea2977ca5251e***** on [\\"{\\\\\\"targetInstances\\\\\\":\\\\\\"i-wz94zz7mx8kt5kz*****\\\\\\"}\\"]',
                      ),
                      'FinishTime' => 
                      array (
                        'description' => '变更结束时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1564552624564',
                      ),
                      'UpdateTime' => 
                      array (
                        'description' => '上次更新时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1564552624600',
                      ),
                      'ChangeTimedout' => 
                      array (
                        'description' => '变更是否超时',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'CreateTime' => 
                      array (
                        'description' => '变更开始时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1564552624114',
                      ),
                      'ChangeMessage' => 
                      array (
                        'description' => '变更信息',
                        'type' => 'string',
                        'example' => '""',
                      ),
                      'ActionName' => 
                      array (
                        'description' => '变更动作名称',
                        'type' => 'string',
                        'example' => 'GatherLog',
                      ),
                      'ChangeFinished' => 
                      array (
                        'description' => '变更是否完成',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'CreateUsername' => 
                      array (
                        'description' => '变更创建者',
                        'type' => 'string',
                        'example' => 'user1',
                      ),
                      'ChangeSucceeded' => 
                      array (
                        'description' => '变更是否成功',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'ChangeId' => 
                      array (
                        'description' => '变更ID',
                        'type' => 'string',
                        'example' => 'wc-5d412db056fd7c14ac9*****',
                      ),
                      'ChangeAborted' => 
                      array (
                        'description' => '变更是否被终止',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'EnvId' => 
                      array (
                        'description' => '环境ID',
                        'type' => 'string',
                        'example' => 'we-5d3eaaea2977ca5251e*****',
                      ),
                      'ChangeName' => 
                      array (
                        'description' => '变更名称',
                        'type' => 'string',
                        'example' => 'gather.log',
                      ),
                    ),
                  ),
                  'InstanceResults' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'InstanceResult' => 
                      array (
                        'description' => '实例结果信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TaskMessage' => 
                            array (
                              'description' => '任务消息',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'StorageKey' => 
                            array (
                              'description' => '存储key',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'InstanceId' => 
                            array (
                              'description' => '实例ID',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'TaskSucceeded' => 
                            array (
                              'description' => '任务是否完成',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '76A821B7-A376-47C5-956C-34827EF*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"76A821B7-A376-47C5-956C-34827EF*****\\",\\n  \\"GatherLogResult\\": {\\n    \\"LogPath\\": \\"/home/admin/app/webplus-app.log\\",\\n    \\"InstanceResults\\": {\\n      \\"InstanceResult\\": [\\n        {\\n          \\"StorageKey\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"InstanceId\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"TaskSucceeded\\": true,\\n          \\"TaskMessage\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ]\\n    },\\n    \\"Change\\": {\\n      \\"ChangeDescription\\": \\"\\\\\\"gather logs of env we-5d3eaaea2977ca5251e***** on [\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"targetInstances\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"i-wz94zz7mx8kt5kz*****\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"}\\\\\\\\\\\\\\"]\\",\\n      \\"ChangePaused\\": false,\\n      \\"UpdateTime\\": 1564552624600,\\n      \\"FinishTime\\": 1564552624564,\\n      \\"ChangeTimedout\\": false,\\n      \\"CreateTime\\": 1564552624114,\\n      \\"ChangeMessage\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"ActionName\\": \\"GatherLog\\",\\n      \\"CreateUsername\\": \\"user1\\",\\n      \\"ChangeFinished\\": true,\\n      \\"ChangeSucceeded\\": true,\\n      \\"ChangeId\\": \\"wc-5d412db056fd7c14ac9*****\\",\\n      \\"ChangeAborted\\": false,\\n      \\"EnvId\\": \\"we-5d3eaaea2977ca5251e*****\\",\\n      \\"ChangeName\\": \\"gather.log\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeGatherLogResultResponse>\\n  <Message>success</Message>\\n  <RequestId>C3D45688-AD84-420D-9CF3-5650B49*****</RequestId>\\n  <GatherLogResult>\\n    <InstanceResults/>\\n    <Change>\\n      <ChangeName>gather.log</ChangeName>\\n      <ActionName>GatherLog</ActionName>\\n      <ChangeAborted>false</ChangeAborted>\\n      <ChangeTimedout>false</ChangeTimedout>\\n      <UpdateTime>1564552624600</UpdateTime>\\n      <ChangeDescription>gather logs of env we-5d3eaaea2977ca5251e***** on [\\"{\\\\\\"targetInstances\\\\\\":\\\\\\"i-wz94zz7mx8kt5kz*****\\\\\\"}\\"]</ChangeDescription>\\n      <EnvId>we-5d3eaaea2977ca5251e*****</EnvId>\\n      <FinishTime>1564552624564</FinishTime>\\n      <CreateUsername>user1</CreateUsername>\\n      <ChangeSucceeded>true</ChangeSucceeded>\\n      <CreateTime>1564552624114</CreateTime>\\n      <ChangeId>wc-5d412db056fd7c14ac9*****</ChangeId>\\n      <ChangeFinished>true</ChangeFinished>\\n      <ChangeMessage/>\\n      <ChangePaused>false</ChangePaused>\\n    </Change>\\n    <LogPath>/home/admin/app/webplus-app.log</LogPath>\\n  </GatherLogResult>\\n  <Code>OK</Code>\\n</DescribeGatherLogResultResponse>","errorExample":""}]',
      'title' => '查询一个收集日志的变更信息',
      'summary' => '调用DescribeGatherLogResult查询一个收集日志的变更信息。',
      'description' => '> 只能查询收集日志对应的变更信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeGatherStatsResult' => 
    array (
      'path' => '/pop/v1/wam/appEnv/gatherStats',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChangeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更ID，将查询此变更ID对应的诊断结果信息',
            'type' => 'string',
            'required' => false,
            'example' => 'wc-5d4134b956fd7c14ac91*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success

',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D208107C-B729-4C92-80EE-7257131*****',
              ),
              'GatherStatsResult' => 
              array (
                'description' => '日志收集结果信息

',
                'type' => 'object',
                'properties' => 
                array (
                  'Change' => 
                  array (
                    'description' => '变更信息

',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ChangePaused' => 
                      array (
                        'description' => '变更是否被停止

',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'ChangeDescription' => 
                      array (
                        'description' => '变更描述信息
',
                        'type' => 'string',
                        'example' => 'gather stats of env we-5d3eaaea2977ca5251e***** on [\\"{\\\\\\"targetInstances\\\\\\":\\\\\\"i-wz94zz7mx8kt5kz*****\\\\\\"}\\"]',
                      ),
                      'FinishTime' => 
                      array (
                        'description' => '变更完成时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1564554426063',
                      ),
                      'UpdateTime' => 
                      array (
                        'description' => '上次更新时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1564554426111',
                      ),
                      'ChangeTimedout' => 
                      array (
                        'description' => '变更是否超时

',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'CreateTime' => 
                      array (
                        'description' => '变更开始时间

',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1564554425575',
                      ),
                      'ChangeMessage' => 
                      array (
                        'description' => '变更消息',
                        'type' => 'string',
                        'example' => '""',
                      ),
                      'ActionName' => 
                      array (
                        'description' => '变更动作名称

',
                        'type' => 'string',
                        'example' => 'GatherStats',
                      ),
                      'ChangeFinished' => 
                      array (
                        'description' => '变更是否完成

',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'CreateUsername' => 
                      array (
                        'description' => '变更创建者

',
                        'type' => 'string',
                        'example' => 'user1',
                      ),
                      'ChangeSucceeded' => 
                      array (
                        'description' => '变更是否成功

',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'ChangeId' => 
                      array (
                        'description' => '变更ID

',
                        'type' => 'string',
                        'example' => 'wc-5d4134b956fd7c14ac9*****',
                      ),
                      'ChangeAborted' => 
                      array (
                        'description' => '变更是否被终止

',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'EnvId' => 
                      array (
                        'description' => '环境ID

',
                        'type' => 'string',
                        'example' => 'we-5d3eaaea2977ca5251e*****',
                      ),
                      'ChangeName' => 
                      array (
                        'description' => '变更名称

',
                        'type' => 'string',
                        'example' => 'gather.stats',
                      ),
                    ),
                  ),
                  'InstanceResults' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'InstanceResult' => 
                      array (
                        'description' => '实例结果信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TaskMessage' => 
                            array (
                              'description' => '任务消息',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'StorageKey' => 
                            array (
                              'description' => '存储key',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'InstanceId' => 
                            array (
                              'description' => '实例ID',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'TaskSucceeded' => 
                            array (
                              'description' => '任务是否完成',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK

',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"D208107C-B729-4C92-80EE-7257131*****\\",\\n  \\"GatherStatsResult\\": {\\n    \\"InstanceResults\\": {\\n      \\"InstanceResult\\": [\\n        {\\n          \\"StorageKey\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"InstanceId\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"TaskSucceeded\\": true,\\n          \\"TaskMessage\\": \\"\\\\\\"\\\\\\"\\"\\n        }\\n      ]\\n    },\\n    \\"Change\\": {\\n      \\"ChangeDescription\\": \\"gather stats of env we-5d3eaaea2977ca5251e***** on [\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"targetInstances\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"i-wz94zz7mx8kt5kz*****\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"}\\\\\\\\\\\\\\"]\\",\\n      \\"ChangePaused\\": false,\\n      \\"UpdateTime\\": 1564554426111,\\n      \\"FinishTime\\": 1564554426063,\\n      \\"ChangeTimedout\\": false,\\n      \\"CreateTime\\": 1564554425575,\\n      \\"ChangeMessage\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"ActionName\\": \\"GatherStats\\",\\n      \\"CreateUsername\\": \\"user1\\",\\n      \\"ChangeFinished\\": true,\\n      \\"ChangeSucceeded\\": true,\\n      \\"ChangeId\\": \\"wc-5d4134b956fd7c14ac9*****\\",\\n      \\"ChangeAborted\\": false,\\n      \\"EnvId\\": \\"we-5d3eaaea2977ca5251e*****\\",\\n      \\"ChangeName\\": \\"gather.stats\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeGatherStatsResultResponse>\\n  <Message>success</Message>\\n  <RequestId>344B98E9-269C-47D6-B55A-1CB268A*****</RequestId>\\n  <GatherStatsResult>\\n    <InstanceResults/>\\n    <Change>\\n      <ChangeName>gather.stats</ChangeName>\\n      <ActionName>GatherStats</ActionName>\\n      <ChangeAborted>false</ChangeAborted>\\n      <ChangeTimedout>false</ChangeTimedout>\\n      <UpdateTime>1564554426111</UpdateTime>\\n      <ChangeDescription>gather stats of env we-5d3eaaea2977ca5251e***** on [\\"{\\\\\\"targetInstances\\\\\\":\\\\\\"i-wz94zz7mx8kt5kz*****\\\\\\"}\\"]</ChangeDescription>\\n      <EnvId>we-5d3eaaea2977ca5251e*****</EnvId>\\n      <FinishTime>1564554426063</FinishTime>\\n      <CreateUsername>user1</CreateUsername>\\n      <ChangeSucceeded>true</ChangeSucceeded>\\n      <CreateTime>1564554425575</CreateTime>\\n      <ChangeId>wc-5d4134b956fd7c14ac9*****</ChangeId>\\n      <ChangeFinished>true</ChangeFinished>\\n      <ChangeMessage/>\\n      <ChangePaused>false</ChangePaused>\\n    </Change>\\n  </GatherStatsResult>\\n  <Code>OK</Code>\\n</DescribeGatherStatsResultResponse>","errorExample":""}]',
      'title' => '查询一个收集诊断的变更信息',
      'summary' => '调用DescribeGatherStatsResult查询一个收集诊断的变更信息。',
      'description' => '> 只能查询收集诊断信息对应的变更信息
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TerminateAppEnv' => 
    array (
      'path' => '/pop/v1/wam/appEnv/terminate',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'we-5d39b8ba6786bd4b149*****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否模拟变更
- 若设定该参数为true，则不会创建变更，而是输出创建环境的操作步骤；否则会创建环境，并输出变更ID
 - 默认为false',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success

',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '393D5428-E693-4063-9C59-1D5393E*****',
              ),
              'EnvChangeDetail' => 
              array (
                'description' => '环境变更信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1564373348658',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d3e71642977ca5251e*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d39b8ba6786bd4b149*****',
                  ),
                  'Operations' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Operation' => 
                      array (
                        'description' => '变更操作列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'OperationDescription' => 
                            array (
                              'description' => '变更操作描述信息',
                              'type' => 'string',
                              'example' => 'Delete monitor group 78*****',
                            ),
                            'OperationType' => 
                            array (
                              'description' => '操作类型',
                              'type' => 'string',
                              'example' => 'destroy',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK

',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
          1 => 
          array (
            'errorCode' => 'StatusNotAllowedTerminated',
            'errorMessage' => 'A terminate action cannot be performed on an environment that has already terminated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"393D5428-E693-4063-9C59-1D5393E*****\\",\\n  \\"EnvChangeDetail\\": {\\n    \\"StartTime\\": \\"1564373348658\\",\\n    \\"EnvId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangeId\\": \\"wc-5d3e71642977ca5251e*****\\",\\n    \\"Operations\\": {\\n      \\"Operation\\": [\\n        {\\n          \\"OperationType\\": \\"destroy\\",\\n          \\"OperationDescription\\": \\"Delete monitor group 78*****\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<TerminateAppEnvResponse>\\n  <Message>success</Message>\\n  <RequestId>1DCDA97A-5F5E-4DEC-85C7-9F2EE02*****</RequestId>\\n  <EnvChangeDetail>\\n    <Operations>\\n      <Operation>\\n        <OperationType>destroy</OperationType>\\n        <OperationDescription>Delete monitor group 78*****</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>destroy</OperationType>\\n        <OperationDescription>Delete security group sg-wz97khuqdfkclpr*****</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>destroy</OperationType>\\n        <OperationDescription>Delete scaling group on ESS</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>destroy</OperationType>\\n        <OperationDescription>Unbind VSwitch(es) vsw-wz9gfawx1vxkimtj*****</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>destroy</OperationType>\\n        <OperationDescription>Unbind VPC vpc-wz9e6y22o3o91nuy*****</OperationDescription>\\n      </Operation>\\n    </Operations>\\n  </EnvChangeDetail>\\n  <Code>OK</Code>\\n</TerminateAppEnvResponse>","errorExample":""}]',
      'title' => '终止一个环境',
      'summary' => '调用TerminateAppEnv来终止一个环境。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RestartAppEnv' => 
    array (
      'path' => '/pop/v1/wam/appEnv/restart',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境ID，将重启此环境',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'we-5d39b8ba6786bd4b149*****',
          ),
        ),
        1 => 
        array (
          'name' => 'BatchSize',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'BatchPercent',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'BatchInterval',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'PauseBetweenBatches',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'EnvChange' => 
              array (
                'description' => '环境变更响应',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1562672060867',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d247bbcd43be51c729*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d39b8ba6786bd4b149*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8D69F3C4-EA43-49D5-875A-0893BF5*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'EnvOnChanging',
            'errorMessage' => 'An error occurred while starting the change. Wait until the ongoing change is complete.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'StatusNotAllowedRestart',
            'errorMessage' => 'Only a running environment or a terminated environment can be restarted.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"8D69F3C4-EA43-49D5-875A-0893BF5*****\\",\\n  \\"EnvChange\\": {\\n    \\"StartTime\\": \\"1562672060867\\",\\n    \\"EnvId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangeId\\": \\"wc-5d247bbcd43be51c729*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<RestartAppEnvResponse>\\n  <EnvChange>\\n    <ChangeId>wc-5d247ab5d43be51c729*****</ChangeId>\\n    <EnvId>we-5d247866d43be51c729*****</EnvId>\\n    <StartTime>1562671797841</StartTime>\\n  </EnvChange>\\n  <Message>success</Message>\\n  <RequestId>05BB8B43-DAA6-4E19-9A3C-AF11DD1*****</RequestId>\\n  <Code>OK</Code>\\n</RestartAppEnvResponse>","errorExample":""}]',
      'title' => '重启一个部署环境',
      'summary' => '调用RestartAppEnv重启一个部署环境。',
      'description' => '- 只能针对状态处于**运行中**或**已停止**的环境执行重启操作。
- 此API被调用后将返回此次创建的变更ID，可以使用此ID查询变更信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RebuildAppEnv' => 
    array (
      'path' => '/pop/v1/wam/appEnv/rebuild',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'we-5d39b8ba6786bd4b149*****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否模拟变更
- 若设定该参数为true，则不会创建变更，而是输出创建环境的操作步骤；否则会创建环境，并输出变更ID
 - 默认为false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8D69F3C4-EA43-49D5-875A-0893BF5*****',
              ),
              'EnvChangeDetail' => 
              array (
                'description' => '环境变更信息
',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1562666697684',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d3e71642977ca5251e*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d39b8ba6786bd4b149*****',
                  ),
                  'Operations' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Operation' => 
                      array (
                        'description' => '变更操作列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'OperationDescription' => 
                            array (
                              'description' => '变更操作描述',
                              'type' => 'string',
                              'example' => 'Change application on the instance(s)',
                            ),
                            'OperationType' => 
                            array (
                              'description' => '变更操作类型',
                              'type' => 'string',
                              'example' => 'update',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'EnvOnChanging',
            'errorMessage' => 'An error occurred while starting the change. Wait until the ongoing change is complete.',
          ),
          1 => 
          array (
            'errorCode' => 'OSSDisabled',
            'errorMessage' => 'You have not activated the OSS service and cannot use the WebPlus service. Please go to the OSS console (https://oss.console.aliyun.com) to activate OSS and try again.',
          ),
          2 => 
          array (
            'errorCode' => 'OSSApiCallFailed',
            'errorMessage' => 'When initializing applications, updating configurations, or destroying applications, WebPlus attempts to communicate with OSS through API communication. An OSS service throw error occurred. The bucket or the file does not exist.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'StatusNotAllowedRebuild',
            'errorMessage' => 'You can only rebuild a terminated environment or an environment that failed to be rebuilt.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"8D69F3C4-EA43-49D5-875A-0893BF5*****\\",\\n  \\"EnvChangeDetail\\": {\\n    \\"StartTime\\": \\"1562666697684\\",\\n    \\"EnvId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangeId\\": \\"wc-5d3e71642977ca5251e*****\\",\\n    \\"Operations\\": {\\n      \\"Operation\\": [\\n        {\\n          \\"OperationType\\": \\"update\\",\\n          \\"OperationDescription\\": \\"Change application on the instance(s)\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<RebuildAppEnvResponse>\\n  <Message>success</Message>\\n  <RequestId>3E85CF06-071C-4A90-B7A1-2ACBA56*****</RequestId>\\n  <EnvChangeDetail>\\n    <Operations>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Bind to VPC vpc-wz9e6y22o3o91nuy*****</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Bind to VSwitch vsw-wz9gfawx1vxkimtj*****</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Create security group</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>update</OperationType>\\n        <OperationDescription>Update ESS scaling group</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Create 1 ECS instances and create instances with priority using the following instance specifications: ecs.t5-****.small,ecs.***.small,ecs.***,ecs.g5.large Creating resources may incur charges, please see //www.aliyun.com/price/product ?#/ecs/detail ECS Pricing</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Setup platform services on ECS instance(s)</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>create</OperationType>\\n        <OperationDescription>Create monitor group</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>update</OperationType>\\n        <OperationDescription>Synchronous ECS instance(s) to monitor group</OperationDescription>\\n      </Operation>\\n      <Operation>\\n        <OperationType>update</OperationType>\\n        <OperationDescription>Change application on the instance(s)</OperationDescription>\\n      </Operation>\\n    </Operations>\\n  </EnvChangeDetail>\\n  <Code>OK</Code>\\n</RebuildAppEnvResponse>","errorExample":""}]',
      'title' => '重建一个部署环境',
      'summary' => '调用RebuildAppEnv重建一个部署环境。',
      'description' => '- 只能针对状态处于**已释放**和**异常**的环境执行停止操作。
- 此API被调用后若非模拟变更，则将返回此次创建的变更ID，可以使用此ID查询变更信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GatherAppEnvLog' => 
    array (
      'path' => '/pop/v1/wam/appEnv/gatherLog',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境ID，将收集此环境中实例的日志',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'wa-5d1af9c802470221ab7*****',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetInstances',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例ID列表，将收集此列表中指定实例的日志',
            'type' => 'string',
            'required' => false,
            'example' => '["i-wz94zz7mx8kt5kz*****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'LogPath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '日志路径，指定要收集的日志所在路径',
            'type' => 'string',
            'required' => false,
            'example' => '/home/admin/app/webplus-app.log',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'EnvChange' => 
              array (
                'description' => '变更信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1564541276614',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d41015c56fd7c14ac9*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d3eaaea2977ca5251e*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success

',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '41CF0D98-CAD7-43CB-8BF0-CFA4D3F*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"41CF0D98-CAD7-43CB-8BF0-CFA4D3F*****\\",\\n  \\"EnvChange\\": {\\n    \\"StartTime\\": \\"1564541276614\\",\\n    \\"EnvId\\": \\"we-5d3eaaea2977ca5251e*****\\",\\n    \\"ChangeId\\": \\"wc-5d41015c56fd7c14ac9*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GatherAppEnvLogResponse>\\n    <Message>success</Message>\\n    <EnvChange>\\n        <EnvId>we-5d39b8ba6786bd4b1495****</EnvId>\\n        <StartTime>1564541276614</StartTime>\\n        <ChangeId>wc-5d3a963d5802611c4ddc****</ChangeId>\\n    </EnvChange>\\n    <RequestId>97CEF6FD-0266-4C15-8745-9325E2AB****</RequestId>\\n    <Code>OK</Code>\\n</GatherAppEnvLogResponse>","errorExample":""}]',
      'title' => '来收集一个部署环境中指定实例的日志信息',
      'summary' => '调用GatherAppEnvLog来收集一个部署环境中指定实例的日志信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GatherAppEnvStats' => 
    array (
      'path' => '/pop/v1/wam/appEnv/gatherStats',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境ID，将收集此环境中指定实例的诊断信息',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'we-5d3eaaea2977ca5251e*****',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetInstances',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例ID列表，将收集此列表中指定实例的诊断信息',
            'type' => 'string',
            'required' => false,
            'example' => '["i-wz94zz7mx8kt5kz*****"]',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'EnvChange' => 
              array (
                'description' => '变更信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1564541864384',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d4103a856fd7c14ac9*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d3eaaea2977ca5251e*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success
',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BDA78DBA-7D10-4DDB-B73F-8357EB8*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"BDA78DBA-7D10-4DDB-B73F-8357EB8*****\\",\\n  \\"EnvChange\\": {\\n    \\"StartTime\\": \\"1564541864384\\",\\n    \\"EnvId\\": \\"we-5d3eaaea2977ca5251e*****\\",\\n    \\"ChangeId\\": \\"wc-5d4103a856fd7c14ac9*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GatherAppEnvStatsResponse>\\n    <Message>success</Message>\\n    <EnvChange>\\n        <EnvId>we-5d39b8ba6786bd4b1495****</EnvId>\\n        <StartTime>1564541276614</StartTime>\\n        <ChangeId>wc-5d3a963d5802611c4ddc****</ChangeId>\\n    </EnvChange>\\n    <RequestId>97CEF6FD-0266-4C15-8745-9325E2AB****</RequestId>\\n    <Code>OK</Code>\\n</GatherAppEnvStatsResponse>","errorExample":""}]',
      'title' => '来收集一个部署环境中的诊断信息',
      'summary' => '调用GatherAppEnvStats来收集一个部署环境中的诊断信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeployAppEnv' => 
    array (
      'path' => '/pop/v1/wam/appEnv/deploy',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'BatchSize',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'BatchPercent',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'BatchInterval',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'PauseBetweenBatches',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'PkgVersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'EnvChange' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'ChangeId' => 
                  array (
                    'type' => 'string',
                  ),
                  'EnvId' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'EnvOnChanging',
            'errorMessage' => 'An error occurred while starting the change. Wait until the ongoing change is complete.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'StatusNotAllowedRestart',
            'errorMessage' => 'Only a running environment or a terminated environment can be restarted.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'CreateConfigTemplate' => 
    array (
      'path' => '/pop/v1/wam/configTemplate',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '新建模板的名称',
            'type' => 'string',
            'required' => false,
            'example' => 'new-template-name',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '新建模版的描述',
            'type' => 'string',
            'required' => false,
            'example' => 'this is an new template',
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '新建模板所在的应用ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wa-5d1d9d8c85c7f86e2efb****',
          ),
        ),
        3 => 
        array (
          'name' => 'StackId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '技术栈ID',
            'type' => 'string',
            'required' => false,
            'example' => 'ws-6c937c98a9c0296d0c482****',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceTemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '源配置模板的ID，将会以此模板来创建新的配置模板',
            'type' => 'string',
            'required' => false,
            'example' => 'wct-5d1ec2813c940d1bf45b****',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceEnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '源环境ID，指定用于创建模版配置的源环境',
            'type' => 'string',
            'required' => false,
            'example' => 'we-5d1dac8e08350d1dd948****',
          ),
        ),
        6 => 
        array (
          'name' => 'ProfileName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '初始化配置类型，可选以下值：
 - `HighAvailability`：高可用，该配置会将实例数设置为2，同时启用公网SLB
 - `StandAlone`：低成本，该配置会将实例数设置为1',
            'type' => 'string',
            'required' => false,
            'example' => 'HighAvailability',
          ),
        ),
        7 => 
        array (
          'name' => 'PkgVersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '部署包版本ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wp-5d1daece08350d1dd948****',
          ),
        ),
        8 => 
        array (
          'name' => 'OptionSettings',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义配置项数据，JSON数组，包含以下字段：
- `path`：配置项路径
- `name`：配置项名称
- `value`：配置值',
            'type' => 'string',
            'required' => false,
            'example' => '[{"path":"resources.ecs.autoScaling", "name":"instanceNum","value":"10"},     {"path":"application.option", "name":"port","value":"8081"}]',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'ConfigTemplate' => 
              array (
                'description' => '配置模板信息',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '上次更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562298470970',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '配置模板创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562589211442',
                  ),
                  'TemplateType' => 
                  array (
                    'description' => '配置模板类型',
                    'type' => 'string',
                    'example' => 'web',
                  ),
                  'StackName' => 
                  array (
                    'description' => '技术栈名称',
                    'type' => 'string',
                    'example' => 'Java 8 / Aliyun Linux 2.1903',
                  ),
                  'PkgVersionId' => 
                  array (
                    'description' => '部署包版本ID',
                    'type' => 'string',
                    'example' => 'wp-5d1daece08350d1dd94*****',
                  ),
                  'TemplateName' => 
                  array (
                    'description' => '配置模板名称',
                    'type' => 'string',
                    'example' => 'new-template-name',
                  ),
                  'TemplateDescription' => 
                  array (
                    'description' => '模板描述信息',
                    'type' => 'string',
                    'example' => 'this is an new template',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名称',
                    'type' => 'string',
                    'example' => 'app1',
                  ),
                  'StackId' => 
                  array (
                    'description' => '技术栈ID',
                    'type' => 'string',
                    'example' => 'ws-6c937c98a9c0296d0c48*****',
                  ),
                  'PkgVersionLabel' => 
                  array (
                    'description' => '部署包版本标签',
                    'type' => 'string',
                    'example' => '20190726.135654',
                  ),
                  'AppId' => 
                  array (
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => 'wa-5d1d9d8c85c7f86e2ef*****',
                  ),
                  'TemplateId' => 
                  array (
                    'description' => '配置模板ID',
                    'type' => 'string',
                    'example' => 'wct-5d1ec866d56beb722b7*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '7C8AA286-14EA-4713-B81D-859BECF1****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'AppNotExist',
            'errorMessage' => 'A corresponding application was not found based on the application ID.',
          ),
          1 => 
          array (
            'errorCode' => 'DuplicatedTemplateName',
            'errorMessage' => 'An error occurred while generating an environment configuration template. The specified template name already exists in the application.',
          ),
          2 => 
          array (
            'errorCode' => 'AppCategoryNotMatchWithStacks',
            'errorMessage' => 'The application type declared in the application does not match the type of the software stack. Please make sure that the types are consistent and then try again.',
          ),
          3 => 
          array (
            'errorCode' => 'StackContainsNoConfigOption',
            'errorMessage' => 'An error occurred while modifying the configuration. The corresponding software stack does not contain any configuration items.',
          ),
          4 => 
          array (
            'errorCode' => 'ChangingAReadonlyConfig',
            'errorMessage' => 'An error occurred while modifying the configuration. You cannot modify a read-only configuration.',
          ),
          5 => 
          array (
            'errorCode' => 'ConfigValueInvalid',
            'errorMessage' => 'An error occurred while resolving the configuration values. Please make sure the value type and constraints is consistent with the declared type. Types currently supported by WebPlus are: String, Integer, List, Boolean, Float, Json.',
          ),
          6 => 
          array (
            'errorCode' => 'AppPackageOwnedByOthers',
            'errorMessage' => 'The version of the application package used must be consistent with the application to which the environment belongs.',
          ),
          7 => 
          array (
            'errorCode' => 'ConfigParsingFailed',
            'errorMessage' => 'An error occurred while extracting the corresponding item from the configuration. Please check the configuration and try again.',
          ),
          8 => 
          array (
            'errorCode' => 'ProfileNameInvalid',
            'errorMessage' => 'The specified cluster type in the template is invalid. Valid values: Default, StandAlone, and HighAvailability.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'StackNotExists',
            'errorMessage' => 'The declared software stack information does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'ConfigOptionNotExists',
            'errorMessage' => 'An error occurred while updating the configuration. The system did not locate the configuration item declared by the key.',
          ),
          2 => 
          array (
            'errorCode' => 'AppPackageNotExists',
            'errorMessage' => 'An application deployment package is required to create or update a deployment environment. For the first time of using WebPlus, we recommend that you use a sample project.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"7C8AA286-14EA-4713-B81D-859BECF1****\\",\\n  \\"ConfigTemplate\\": {\\n    \\"UpdateTime\\": 1562298470970,\\n    \\"CreateTime\\": 1562589211442,\\n    \\"TemplateType\\": \\"web\\",\\n    \\"StackName\\": \\"Java 8 / Aliyun Linux 2.1903\\",\\n    \\"PkgVersionId\\": \\"wp-5d1daece08350d1dd94*****\\",\\n    \\"TemplateName\\": \\"new-template-name\\",\\n    \\"TemplateDescription\\": \\"this is an new template\\",\\n    \\"AppName\\": \\"app1\\",\\n    \\"StackId\\": \\"ws-6c937c98a9c0296d0c48*****\\",\\n    \\"PkgVersionLabel\\": \\"20190726.135654\\",\\n    \\"AppId\\": \\"wa-5d1d9d8c85c7f86e2ef*****\\",\\n    \\"TemplateId\\": \\"wct-5d1ec866d56beb722b7*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<CreateConfigTemplateResponse>\\n    <ConfigTemplate>\\n        <TemplateName>new-template-name</TemplateName>\\n        <TemplateDescription>this is an new template</TemplateDescription>\\n        <Type>web</Type>\\n        <StackId>ws-6c937c98a9c0296d0c482****</StackId>\\n        <CreateTime>1562298470970</CreateTime>\\n        <AppId>wa-5d1d9d8c85c7f86e2efb****</AppId>\\n        <UpdateTime>1562298470970</UpdateTime>\\n        <AppName>app1</AppName>\\n        <TemplateId>wct-5d1ec866d56beb722b77****</TemplateId>\\n        <PkgVersionId>wp-5d1daece08350d1dd948****</PkgVersionId>\\n        <StackName>Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903</StackName>\\n    </ConfigTemplate>\\n    <Message>success</Message>\\n    <RequestId>7C8AA286-14EA-4713-B81D-859BECF1****</RequestId>\\n    <Code>OK</Code>\\n</CreateConfigTemplateResponse>","errorExample":""}]',
      'title' => '从一个原有环境来创建一个配置模板',
      'summary' => '调用CreateConfigTemplate从一个原有环境来创建一个配置模板。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteConfigTemplate' => 
    array (
      'path' => '/pop/v1/wam/configTemplate',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置模板ID，将删除此配置模板',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'wct-5d3e9d2a2977ca5251e0****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0E0A3207-12BD-4F5D-A3C2-E33BEEBB****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0E0A3207-12BD-4F5D-A3C2-E33BEEBB****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<DeleteConfigTemplateResponse>\\n    <Message>success</Message>\\n    <RequestId>0E0A3207-12BD-4F5D-A3C2-E33BEEBB****</RequestId>\\n    <Code>OK</Code>\\n</DeleteConfigTemplateResponse>","errorExample":""}]',
      'title' => '删除一个配置模板',
      'summary' => '调用DeleteConfigTemplate删除一个配置模板。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateConfigTemplate' => 
    array (
      'path' => '/pop/v1/wam/configTemplate',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板描述信息',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a template',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'wct-5d1eca8dd56beb2b7*****',
          ),
        ),
        2 => 
        array (
          'name' => 'OptionSettings',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义配置项数据，JSON数组，包含以下字段：
- `path`：配置项路径
- `name`：配置项名称
- `value`：配置值',
            'type' => 'string',
            'required' => false,
            'example' => '[{"path":"resources.ecs.autoScaling", "name":"instanceNum","value":"10"},     {"path":"application.option", "name":"port","value":"8081"}]',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'ConfigTemplate' => 
              array (
                'description' => '配置模板信息',
                'type' => 'object',
                'properties' => 
                array (
                  'AppName' => 
                  array (
                    'description' => '模板所在应用名称',
                    'type' => 'string',
                    'example' => 'app1',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '上次更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562587235328',
                  ),
                  'StackId' => 
                  array (
                    'description' => '技术栈ID',
                    'type' => 'string',
                    'example' => 'ws-6c937c98a9c0296d0c48*****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '模板创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562299021581',
                  ),
                  'AppId' => 
                  array (
                    'description' => '应用ID，模板所在应用ID',
                    'type' => 'string',
                    'example' => 'wa-5d1d9d8c85c7f86e2ef*****',
                  ),
                  'StackName' => 
                  array (
                    'description' => '技术栈名称',
                    'type' => 'string',
                    'example' => 'Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903',
                  ),
                  'TemplateName' => 
                  array (
                    'description' => '模板名称',
                    'type' => 'string',
                    'example' => 'new-template-name',
                  ),
                  'TemplateId' => 
                  array (
                    'description' => '模板ID',
                    'type' => 'string',
                    'example' => 'wct-5d1eca8dd56beb722b7*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'CE6E878B-DDB4-4563-9263-D75057C*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'StackContainsNoConfigOption',
            'errorMessage' => 'An error occurred while modifying the configuration. The corresponding software stack does not contain any configuration items.',
          ),
          1 => 
          array (
            'errorCode' => 'ChangingAReadonlyConfig',
            'errorMessage' => 'An error occurred while modifying the configuration. You cannot modify a read-only configuration.',
          ),
          2 => 
          array (
            'errorCode' => 'ConfigValueInvalid',
            'errorMessage' => 'An error occurred while resolving the configuration values. Please make sure the value type and constraints is consistent with the declared type. Types currently supported by WebPlus are: String, Integer, List, Boolean, Float, Json.',
          ),
          3 => 
          array (
            'errorCode' => 'AppPackageOwnedByOthers',
            'errorMessage' => 'The version of the application package used must be consistent with the application to which the environment belongs.',
          ),
          4 => 
          array (
            'errorCode' => 'AppNotExist',
            'errorMessage' => 'A corresponding application was not found based on the application ID.',
          ),
          5 => 
          array (
            'errorCode' => 'AppCategoryNotMatchWithStacks',
            'errorMessage' => 'The application type declared in the application does not match the type of the software stack. Please make sure that the types are consistent and then try again.',
          ),
          6 => 
          array (
            'errorCode' => 'TemplateUpdateFailed',
            'errorMessage' => 'An error occurred while updating the template. The template may have been deleted, or an error may have occurred in WebPlus.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'TemplateNotExists',
            'errorMessage' => 'An error occurred while updating the configuration. No corresponding configuration template instance was found.',
          ),
          1 => 
          array (
            'errorCode' => 'ConfigOptionNotExists',
            'errorMessage' => 'An error occurred while updating the configuration. The system did not locate the configuration item declared by the key.',
          ),
          2 => 
          array (
            'errorCode' => 'AppPackageNotExists',
            'errorMessage' => 'An application deployment package is required to create or update a deployment environment. For the first time of using WebPlus, we recommend that you use a sample project.',
          ),
          3 => 
          array (
            'errorCode' => 'StackNotExists',
            'errorMessage' => 'The declared software stack information does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"CE6E878B-DDB4-4563-9263-D75057C*****\\",\\n  \\"ConfigTemplate\\": {\\n    \\"AppName\\": \\"app1\\",\\n    \\"UpdateTime\\": 1562587235328,\\n    \\"StackId\\": \\"ws-6c937c98a9c0296d0c48*****\\",\\n    \\"CreateTime\\": 1562299021581,\\n    \\"AppId\\": \\"wa-5d1d9d8c85c7f86e2ef*****\\",\\n    \\"StackName\\": \\"Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903\\",\\n    \\"TemplateName\\": \\"new-template-name\\",\\n    \\"TemplateId\\": \\"wct-5d1eca8dd56beb722b7*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<UpdateConfigTemplateResponse>\\n  <ConfigTemplate>\\n    <TemplateName>new-template-name</TemplateName>\\n    <StackId>ws-6c937c98a9c0296d0c48*****</StackId>\\n    <CreateTime>1562299021581</CreateTime>\\n    <AppId>wa-5d1d9d8c85c7f86e2ef*****</AppId>\\n    <UpdateTime>1562587235588</UpdateTime>\\n    <AppName>app1</AppName>\\n    <TemplateId>wct-5d1eca8dd56beb722b7*****</TemplateId>\\n    <StackName>Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903</StackName>\\n  </ConfigTemplate>\\n  <Message>success</Message>\\n  <RequestId>733F3B46-0875-437A-9A8E-9549A0C*****</RequestId>\\n  <Code>OK</Code>\\n</UpdateConfigTemplateResponse>\\n","errorExample":""}]',
      'title' => '更新配置模板',
      'summary' => '来更新配置模板。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeConfigTemplates' => 
    array (
      'path' => '/pop/v1/wam/configTemplate',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，查询此应用上的配置模板
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'wa-5d1d9d8c85c7f86e2ef*****',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的配置模板名称',
            'type' => 'string',
            'required' => false,
            'example' => 'template-name',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateSearch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的模版名称关键字',
            'type' => 'string',
            'required' => false,
            'example' => 'template',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'ConfigTemplates' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ConfigTemplate' => 
                  array (
                    'description' => '配置结果项数组',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TemplateDescription' => 
                        array (
                          'description' => '配置模板的描述信息',
                          'type' => 'string',
                          'example' => 'this is a new description.',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名称，表示配置模板所在的应用',
                          'type' => 'string',
                          'example' => 'testApplication',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '配置模板更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562298470970',
                        ),
                        'StackId' => 
                        array (
                          'description' => '技术栈ID',
                          'type' => 'string',
                          'example' => 'ws-6c937c98a9c0296d0c48*****',
                        ),
                        'PkgVersionLabel' => 
                        array (
                          'description' => '部署包版本标签',
                          'type' => 'string',
                          'example' => '1562226365',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '配置模板的建立时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562298470970',
                        ),
                        'AppId' => 
                        array (
                          'description' => '应用ID，要查询此应用上的模板',
                          'type' => 'string',
                          'example' => 'wa-5d1d9d8c85c7f86e2ef*****',
                        ),
                        'StackName' => 
                        array (
                          'description' => '技术栈名称',
                          'type' => 'string',
                          'example' => 'Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903',
                        ),
                        'PkgVersionId' => 
                        array (
                          'description' => '部署包版本ID',
                          'type' => 'string',
                          'example' => 'wp-5d1daece08350d1dd94*****',
                        ),
                        'TemplateName' => 
                        array (
                          'description' => '配置模板名称',
                          'type' => 'string',
                          'example' => 'new-template-name',
                        ),
                        'TemplateId' => 
                        array (
                          'description' => '配置模板ID',
                          'type' => 'string',
                          'example' => 'wct-5d1eca8dd56beb722b7*****',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '结果总数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5CD6AF45-920A-4F5C-BD00-B41D6AE*****',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'PageSize' => 
              array (
                'description' => '查询页面大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '查询页面数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'AppNotExist',
            'errorMessage' => 'A corresponding application was not found based on the application ID.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5CD6AF45-920A-4F5C-BD00-B41D6AE*****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"ConfigTemplates\\": {\\n    \\"ConfigTemplate\\": [\\n      {\\n        \\"TemplateDescription\\": \\"this is a new description.\\",\\n        \\"AppName\\": \\"testApplication\\",\\n        \\"UpdateTime\\": 1562298470970,\\n        \\"StackId\\": \\"ws-6c937c98a9c0296d0c48*****\\",\\n        \\"PkgVersionLabel\\": \\"1562226365\\",\\n        \\"CreateTime\\": 1562298470970,\\n        \\"AppId\\": \\"wa-5d1d9d8c85c7f86e2ef*****\\",\\n        \\"StackName\\": \\"Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903\\",\\n        \\"PkgVersionId\\": \\"wp-5d1daece08350d1dd94*****\\",\\n        \\"TemplateName\\": \\"new-template-name\\",\\n        \\"TemplateId\\": \\"wct-5d1eca8dd56beb722b7*****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeConfigTemplatesResponse>\\n  <PageNumber>1</PageNumber>\\n  <TotalCount>1</TotalCount>\\n  <Message>success</Message>\\n  <PageSize>10</PageSize>\\n  <RequestId>9CFC8370-B02A-40EE-AAB8-8005DA9*****</RequestId>\\n  <ConfigTemplates>\\n    <ConfigTemplate>\\n      <TemplateName>new-template-name</TemplateName>\\n      <TemplateDescription>this is a new description.</TemplateDescription>\\n      <StackId>ws-6c937c98a9c0296d0c48*****</StackId>\\n      <CreateTime>1562299021581</CreateTime>\\n      <PkgVersionLabel>1562226365</PkgVersionLabel>\\n      <AppId>wa-5d1d9d8c85c7f86e2ef*****</AppId>\\n      <UpdateTime>1562577497233</UpdateTime>\\n      <AppName>user1</AppName>\\n      <TemplateId>wct-5d1eca8dd56beb722b7*****</TemplateId>\\n      <PkgVersionId>wp-5d1daece08350d1dd94*****</PkgVersionId>\\n      <StackName>Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903</StackName>\\n    </ConfigTemplate>\\n  </ConfigTemplates>\\n  <Code>OK</Code>\\n</DescribeConfigTemplatesResponse>\\n","errorExample":""}]',
      'title' => '查询配置模板',
      'summary' => '调用DescribeConfigTemplates查询配置模板。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribePublicConfigTemplates' => 
    array (
      'path' => '/pop/v1/wam/publicConfigTemplate',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CategoryName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'TotalCount' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'PageNumber' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'PublicConfigTemplates' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PublicConfigTemplate' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TemplateDescription' => 
                        array (
                          'type' => 'string',
                        ),
                        'UpdateTime' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'StackId' => 
                        array (
                          'type' => 'string',
                        ),
                        'TemplateLogo' => 
                        array (
                          'type' => 'string',
                        ),
                        'CreateTime' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'PackageSource' => 
                        array (
                          'type' => 'string',
                        ),
                        'StackName' => 
                        array (
                          'type' => 'string',
                        ),
                        'TemplateName' => 
                        array (
                          'type' => 'string',
                        ),
                        'CategoryName' => 
                        array (
                          'type' => 'string',
                        ),
                        'TemplateId' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'DescribeConfigSettings' => 
    array (
      'path' => '/pop/v1/wam/config/configSetting',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境ID',
            'type' => 'string',
            'required' => false,
            'example' => 'we-5d3eaaea2977ca5251e*****',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置模板ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wct-5d3e9d2a2977ca5251e*****',
          ),
        ),
        2 => 
        array (
          'name' => 'PathName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'OptionName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'ConfigSettings' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ConfigSetting' => 
                  array (
                    'description' => '配置设置',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OptionName' => 
                        array (
                          'description' => '选项名称',
                          'type' => 'string',
                          'example' => 'intervalSeconds',
                        ),
                        'PathName' => 
                        array (
                          'description' => '路径名称',
                          'type' => 'string',
                          'example' => 'application.healthCheck',
                        ),
                        'SettingValue' => 
                        array (
                          'description' => '配置设置值',
                          'type' => 'string',
                          'example' => '3',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F4D6243F-67B6-4528-A3CA-A963E12*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F4D6243F-67B6-4528-A3CA-A963E12*****\\",\\n  \\"ConfigSettings\\": {\\n    \\"ConfigSetting\\": [\\n      {\\n        \\"OptionName\\": \\"intervalSeconds\\",\\n        \\"PathName\\": \\"application.healthCheck\\",\\n        \\"SettingValue\\": \\"3\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeConfigSettingsResponse>\\n  <Message>success</Message>\\n  <RequestId>E58B7568-F362-4989-9129-25082E6*****</RequestId>\\n  <ConfigSettings>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>application.commands</PathName>\\n      <OptionName>start</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>application.commands</PathName>\\n      <OptionName>stop</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>[]</SettingValue>\\n      <PathName>application.environmentVariables</PathName>\\n      <OptionName>value</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>3</SettingValue>\\n      <PathName>application.healthCheck</PathName>\\n      <OptionName>intervalSeconds</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>/</SettingValue>\\n      <PathName>application.healthCheck</PathName>\\n      <OptionName>path</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>3</SettingValue>\\n      <PathName>application.healthCheck</PathName>\\n      <OptionName>retryCount</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>3</SettingValue>\\n      <PathName>application.healthCheck</PathName>\\n      <OptionName>timeoutSeconds</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>http</SettingValue>\\n      <PathName>application.healthCheck</PathName>\\n      <OptionName>type</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>application.jvmOpts</PathName>\\n      <OptionName>value</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>180</SettingValue>\\n      <PathName>application.option</PathName>\\n      <OptionName>maxStartDuration</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>8080</SettingValue>\\n      <PathName>application.option</PathName>\\n      <OptionName>port</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>20190729.161414</SettingValue>\\n      <PathName>application.package</PathName>\\n      <OptionName>label</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>webplus-tomcat-demo-0.1.1.war</SettingValue>\\n      <PathName>application.package</PathName>\\n      <OptionName>storageKey</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>application.package</PathName>\\n      <OptionName>url</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>application.tomcatServerXml</PathName>\\n      <OptionName>serverConfig</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>hooks</PathName>\\n      <OptionName>postinit</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>hooks</PathName>\\n      <OptionName>poststart</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>hooks</PathName>\\n      <OptionName>poststop</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>hooks</PathName>\\n      <OptionName>prestart</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>hooks</PathName>\\n      <OptionName>prestop</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>tomcat 8 openjdk 8</SettingValue>\\n      <PathName>platform</PathName>\\n      <OptionName>buildpack</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>Tomcat</SettingValue>\\n      <PathName>platform</PathName>\\n      <OptionName>category</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>aliyunlinux</SettingValue>\\n      <PathName>platform</PathName>\\n      <OptionName>os</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>2.1903</SettingValue>\\n      <PathName>platform</PathName>\\n      <OptionName>osVersion</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903</SettingValue>\\n      <PathName>platform</PathName>\\n      <OptionName>stackName</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>nginx</SettingValue>\\n      <PathName>proxy</PathName>\\n      <OptionName>type</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>2.4.6</SettingValue>\\n      <PathName>proxy.apache</PathName>\\n      <OptionName>version</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>1.14.2</SettingValue>\\n      <PathName>proxy.nginx</PathName>\\n      <OptionName>version</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>dataDiskInfo</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>true</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>enableInternet</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>WebPlus-baiji-env</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>instanceName</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>1</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>instanceNum</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>[\\"ecs.t5-*****.small\\",\\"ecs.*****.small\\",\\"ecs.*****.tiny\\",\\"ecs.*****.large\\"]</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>instanceType</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>PayByTraffic</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>internetChargeType</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>100</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>internetMaxBandwidthIn</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>50</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>internetMaxBandwidthOut</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>true</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>ioOptimized</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>keyPairName</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>BALANCE</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>multiAzPolicy</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>false</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>passwordInherit</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>AliyunECSInstanceForWebPlusRole</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>ramRoleName</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>release</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>scalingPolicy</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>[]</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>securityGroupIds</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>cloud_efficiency</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>systemDiskCategory</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>100</SettingValue>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>systemDiskSize</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.ecs.autoScaling</PathName>\\n      <OptionName>userData</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>{\\"vpcId\\":\\"\\",\\"vSwitches\\":[]}</SettingValue>\\n      <PathName>resources.network</PathName>\\n      <OptionName>vpcOption</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>webplus</SettingValue>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>accountName</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>accountPassword</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>category</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>characterSetName</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>webplus</SettingValue>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>databaseName</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>dbInstanceClass</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>false</SettingValue>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>enable</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>engine</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>engineVersion</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>false</SettingValue>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>imported</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>rdsId</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>100</SettingValue>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>storageSize</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>storageType</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>[]</SettingValue>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>vSwitches</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.rds</PathName>\\n      <OptionName>zoneId</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>80</SettingValue>\\n      <PathName>resources.slb.internet</PathName>\\n      <OptionName>backendPort</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>-1</SettingValue>\\n      <PathName>resources.slb.internet</PathName>\\n      <OptionName>bandwidth</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>false</SettingValue>\\n      <PathName>resources.slb.internet</PathName>\\n      <OptionName>enable</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.slb.internet</PathName>\\n      <OptionName>forwardingRule</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>/</SettingValue>\\n      <PathName>resources.slb.internet</PathName>\\n      <OptionName>healthCheckUrl</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>paybytraffic</SettingValue>\\n      <PathName>resources.slb.internet</PathName>\\n      <OptionName>internetChargeType</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>80</SettingValue>\\n      <PathName>resources.slb.internet</PathName>\\n      <OptionName>listenerPort</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>slb.s1.small</SettingValue>\\n      <PathName>resources.slb.internet</PathName>\\n      <OptionName>loadBalancerSpec</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>http</SettingValue>\\n      <PathName>resources.slb.internet</PathName>\\n      <OptionName>protocol</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.slb.internet</PathName>\\n      <OptionName>slbId</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>80</SettingValue>\\n      <PathName>resources.slb.intranet</PathName>\\n      <OptionName>backendPort</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>-1</SettingValue>\\n      <PathName>resources.slb.intranet</PathName>\\n      <OptionName>bandwidth</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>false</SettingValue>\\n      <PathName>resources.slb.intranet</PathName>\\n      <OptionName>enable</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.slb.intranet</PathName>\\n      <OptionName>forwardingRule</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>/</SettingValue>\\n      <PathName>resources.slb.intranet</PathName>\\n      <OptionName>healthCheckUrl</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>paybytraffic</SettingValue>\\n      <PathName>resources.slb.intranet</PathName>\\n      <OptionName>internetChargeType</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>80</SettingValue>\\n      <PathName>resources.slb.intranet</PathName>\\n      <OptionName>listenerPort</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>slb.s1.small</SettingValue>\\n      <PathName>resources.slb.intranet</PathName>\\n      <OptionName>loadBalancerSpec</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue>http</SettingValue>\\n      <PathName>resources.slb.intranet</PathName>\\n      <OptionName>protocol</OptionName>\\n    </ConfigSetting>\\n    <ConfigSetting>\\n      <SettingValue/>\\n      <PathName>resources.slb.intranet</PathName>\\n      <OptionName>slbId</OptionName>\\n    </ConfigSetting>\\n  </ConfigSettings>\\n  <Code>OK</Code>\\n</DescribeConfigSettingsResponse>","errorExample":""}]',
      'title' => '查询配置设置',
      'summary' => '调用DescribeConfigSettings查询配置设置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeConfigOptions' => 
    array (
      'path' => '/pop/v1/wam/config/configOption',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技术栈类型',
            'type' => 'string',
            'required' => false,
            'example' => 'we-5d3eaaea2977ca5251e*****',
          ),
        ),
        1 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境ID',
            'type' => 'string',
            'required' => false,
            'example' => 'ws-6c937c98a9c0296d0c48*****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProfileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '初始化配置类型，可选以下值：
 - `HighAvailability`：高可用，该配置会将实例数设置为2，同时启用公网SLB
 - `StandAlone`：低成本，该配置会将实例数设置为1',
            'type' => 'string',
            'required' => false,
            'example' => 'StandAlone',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'StackConfigOption' => 
              array (
                'description' => '技术栈配置信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StackId' => 
                  array (
                    'description' => '技术栈类型',
                    'type' => 'string',
                    'example' => 'ws-6c937c98a9c0296d0c48*****',
                  ),
                  'ConfigOptions' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ConfigOption' => 
                      array (
                        'description' => '配置选项列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RegexDesc' => 
                            array (
                              'description' => '正则匹配描述',
                              'type' => 'string',
                              'example' => '“”',
                            ),
                            'MaxValue' => 
                            array (
                              'description' => '最大值',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '-1',
                            ),
                            'EditorType' => 
                            array (
                              'description' => '编辑类型',
                              'type' => 'string',
                              'example' => '{"component":"Editor","props":{}}',
                            ),
                            'MinValue' => 
                            array (
                              'description' => '最小值',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '-1',
                            ),
                            'DefaultValue' => 
                            array (
                              'description' => '默认值',
                              'type' => 'string',
                              'example' => '“”',
                            ),
                            'MaxLength' => 
                            array (
                              'description' => '最大长度',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1024',
                            ),
                            'OptionLabel' => 
                            array (
                              'description' => '可选项标签',
                              'type' => 'string',
                              'example' => 'Start Command',
                            ),
                            'RegexPattern' => 
                            array (
                              'description' => '正则匹配模式',
                              'type' => 'string',
                              'example' => '“”',
                            ),
                            'ChangeSeverity' => 
                            array (
                              'description' => '变更重要性',
                              'type' => 'string',
                              'example' => 'NoInterruption',
                            ),
                            'OptionDescription' => 
                            array (
                              'description' => '选项描述信息',
                              'type' => 'string',
                              'example' => 'Web+ uses this command to launch an application',
                            ),
                            'OptionName' => 
                            array (
                              'description' => '可选项名称',
                              'type' => 'string',
                              'example' => 'start',
                            ),
                            'PathName' => 
                            array (
                              'description' => '路径名称',
                              'type' => 'string',
                              'example' => 'application.commands',
                            ),
                            'HiddenOption' => 
                            array (
                              'description' => '是否是隐藏选项',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'ValueType' => 
                            array (
                              'description' => '值类型',
                              'type' => 'string',
                              'example' => 'String',
                            ),
                            'MinLength' => 
                            array (
                              'description' => '最小长度',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'ValueOptions' => 
                            array (
                              'description' => '值类型的选项',
                              'type' => 'string',
                              'example' => '“”',
                            ),
                            'ReadonlyOption' => 
                            array (
                              'description' => '是否为只读选项',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'StackName' => 
                  array (
                    'description' => '技术栈名称',
                    'type' => 'string',
                    'example' => 'Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'EB4D295F-18CE-413D-85BE-EFCB508*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"EB4D295F-18CE-413D-85BE-EFCB508*****\\",\\n  \\"StackConfigOption\\": {\\n    \\"StackName\\": \\"Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903\\",\\n    \\"StackId\\": \\"ws-6c937c98a9c0296d0c48*****\\",\\n    \\"ConfigOptions\\": {\\n      \\"ConfigOption\\": [\\n        {\\n          \\"RegexDesc\\": \\"“”\\",\\n          \\"MaxValue\\": -1,\\n          \\"EditorType\\": \\"{\\\\\\"component\\\\\\":\\\\\\"Editor\\\\\\",\\\\\\"props\\\\\\":{}}\\",\\n          \\"MinValue\\": -1,\\n          \\"OptionLabel\\": \\"Start Command\\",\\n          \\"MaxLength\\": 1024,\\n          \\"DefaultValue\\": \\"“”\\",\\n          \\"RegexPattern\\": \\"“”\\",\\n          \\"OptionDescription\\": \\"Web+ uses this command to launch an application\\",\\n          \\"ChangeSeverity\\": \\"NoInterruption\\",\\n          \\"OptionName\\": \\"start\\",\\n          \\"PathName\\": \\"application.commands\\",\\n          \\"HiddenOption\\": false,\\n          \\"ValueType\\": \\"String\\",\\n          \\"MinLength\\": 0,\\n          \\"ValueOptions\\": \\"“”\\",\\n          \\"ReadonlyOption\\": false\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeConfigOptionsResponse>\\n  <Message>success</Message>\\n  <RequestId>EB4D295F-18CE-413D-85BE-EFCB508*****</RequestId>\\n  <StackConfigOption>\\n    <StackId>ws-6c937c98a9c0296d0c48*****</StackId>\\n    <ConfigOptions>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.commands</PathName>\\n        <OptionName>start</OptionName>\\n        <OptionLabel>Start Command</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Web+ uses this command to launch an application</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.commands</PathName>\\n        <OptionName>stop</OptionName>\\n        <OptionLabel>Stop Command</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Web+ uses this command to stop the application</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>JSON</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"KVListEditor\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>[]</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.environmentVariables</PathName>\\n        <OptionName>value</OptionName>\\n        <OptionLabel>Environmental Variables</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>16384</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The environment variable used to launch the app.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>http</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.healthCheck</PathName>\\n        <OptionName>type</OptionName>\\n        <OptionLabel>Health Check Type</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>16</MaxLength>\\n        <ValueOptions>[{\\"value\\": \\"http\\", \\"label\\": \\"HTTP\\"},{\\"value\\": \\"tcp\\", \\"label\\": \\"TCP\\"}]</ValueOptions>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The type of protocol used by the health check, currently supporting TCP and HTTP, Web+ will periodically send health check requests to the application\'s service port to determine if the application is healthy.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>/</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.healthCheck</PathName>\\n        <OptionName>path</OptionName>\\n        <OptionLabel>Health Check URL</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>256</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Web+ will request this URL and judge whether the application is healthy according to the response code. If a non-20x/30x response code is received or the response times out, it is determined that the single health check failed.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>1</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>3</DefaultValue>\\n        <MaxValue>30</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.healthCheck</PathName>\\n        <OptionName>retryCount</OptionName>\\n        <OptionLabel>Health Check Retry Count</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>If the health check retry exceeds this number, it is determined that the health check failed.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>1</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>3</DefaultValue>\\n        <MaxValue>60</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.healthCheck</PathName>\\n        <OptionName>intervalSeconds</OptionName>\\n        <OptionLabel>Health Check Interval (Seconds)</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>When an inspection fails, the interval to the next health check is long.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>1</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>3</DefaultValue>\\n        <MaxValue>60</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.healthCheck</PathName>\\n        <OptionName>timeoutSeconds</OptionName>\\n        <OptionLabel>Health Check Timeout (Seconds)</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The timeout period for a single health check.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"TextArea\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.jvmOpts</PathName>\\n        <OptionName>value</OptionName>\\n        <OptionLabel>JVM Options</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>16384</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Set the Java virtual machine parameters used to launch the application.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>1024</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>8080</DefaultValue>\\n        <MaxValue>65535</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.option</PathName>\\n        <OptionName>port</OptionName>\\n        <OptionLabel>Server Port</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>This port will be used as the HTTP service port after the application is launched, and ports from 1024 to 65535 can be used.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>0</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>180</DefaultValue>\\n        <MaxValue>180</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.option</PathName>\\n        <OptionName>maxStartDuration</OptionName>\\n        <OptionLabel>Application Max Start Duration (Seconds)</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>If the health check status is still incorrect during this time after the application is started, the application is considered to have failed to start.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern>^[A-Za-z0-9_\\\\-.]{1,64}$</RegexPattern>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.package</PathName>\\n        <OptionName>label</OptionName>\\n        <OptionLabel>Package Label</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>64</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Web+ will use this version of the deployment package to deploy ECS instances.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.package</PathName>\\n        <OptionName>storageKey</OptionName>\\n        <OptionLabel>Package File Name</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>256</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Web+ will deploy this file to the ECS instance.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.package</PathName>\\n        <OptionName>url</OptionName>\\n        <OptionLabel>Package URL</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Configure the URL of package.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"FileUploader\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.tomcatServerXml</PathName>\\n        <OptionName>serverConfig</OptionName>\\n        <OptionLabel>Tomcat Configuration File</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>256</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Use this file to replace Tomcat\'s server.xml configuration</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>hooks</PathName>\\n        <OptionName>prestart</OptionName>\\n        <OptionLabel>PreStart</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Web+ will call this command before the app starts</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>hooks</PathName>\\n        <OptionName>poststart</OptionName>\\n        <OptionLabel>PostStart</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Web+ will call this command after the app launches</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>hooks</PathName>\\n        <OptionName>prestop</OptionName>\\n        <OptionLabel>PreStop</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Web+ will call this command before the application stops</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>hooks</PathName>\\n        <OptionName>poststop</OptionName>\\n        <OptionLabel>PostStop</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Web+ will call this command after the app has stopped</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>hooks</PathName>\\n        <OptionName>postinit</OptionName>\\n        <OptionLabel>Postinit</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Web+ will call this command when the application is initialized</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>platform</PathName>\\n        <OptionName>stackName</OptionName>\\n        <OptionLabel>Software Stack</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>true</ReadonlyOption>\\n        <MaxLength>64</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Contains the operating system, development language, container type, etc.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>aliyunlinux</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>platform</PathName>\\n        <OptionName>os</OptionName>\\n        <OptionLabel>Operating System</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>true</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Operating system used</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>2.1903</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>platform</PathName>\\n        <OptionName>osVersion</OptionName>\\n        <OptionLabel>Operating System Version</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>true</ReadonlyOption>\\n        <MaxLength>16</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Operating system version used</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>tomcat 8 openjdk 8</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>platform</PathName>\\n        <OptionName>buildpack</OptionName>\\n        <OptionLabel>Buildpack</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>true</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Software development language and runtime container</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>Tomcat</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>platform</PathName>\\n        <OptionName>category</OptionName>\\n        <OptionLabel>Platform Category</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>true</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>JAVA, Tomcat, PHP, Go, etc.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>nginx</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>proxy</PathName>\\n        <OptionName>type</OptionName>\\n        <OptionLabel>Reverse Proxy Type</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions>[{\\"value\\": \\"nginx\\", \\"label\\": \\"Nginx (1.14.2)\\"},{\\"value\\": \\"apache\\", \\"label\\": \\"Apache HTTP Server (2.4.6)\\"}]</ValueOptions>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The reverse proxy type used. After the reverse proxy starts, it will listen to the instance\'s port 80. Make sure that the port is not occupied by other programs. The reverse proxy will forward the received HTTP request to the application\'s service port.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>2.4.6</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>proxy.apache</PathName>\\n        <OptionName>version</OptionName>\\n        <OptionLabel>Apache HTTP Server Version</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>16</MaxLength>\\n        <ValueOptions>[{\\"value\\": \\"2.4.6\\", \\"label\\": \\"2.4.6\\"}]</ValueOptions>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Apache HTTP Server version used</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>1.14.2</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>proxy.nginx</PathName>\\n        <OptionName>version</OptionName>\\n        <OptionLabel>Nginx Version</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>16</MaxLength>\\n        <ValueOptions>[{\\"value\\": \\"1.14.2\\", \\"label\\": \\"1.14.2\\"}]</ValueOptions>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Nginx version used</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>List</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"InstanceTypeSelector\\",\\"props\\":{\\"mode\\":\\"multiple\\"}}</EditorType>\\n        <DefaultValue>[\\"ecs.t5-lc1m1.small\\",\\"ecs.xn4.small\\",\\"ecs.n1.tiny\\",\\"ecs.g5.large\\"]</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>instanceType</OptionName>\\n        <OptionLabel>Instance Type</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>10</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The instance specification used by the deployment environment, Web+ will create an ECS instance using the selected specifications. Multiple specifications can be selected. When the selected specifications are insufficient, Web+ will attempt to create in the order selected, up to 10 instance specifications. An ECS instance created by Web+, using the//help.aliyun.com/knowledge_detail/40653.html\\">Pay As You Go></OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>wp-autoscaled</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>instanceName</OptionName>\\n        <OptionLabel>Instance Name</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>128</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>1</MinLength>\\n        <OptionDescription>Instance name used</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>0</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>1</DefaultValue>\\n        <MaxValue>100</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>instanceNum</OptionName>\\n        <OptionLabel>Instance Number</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The number of instances used, Web+ will expand or shrink the deployment environment based on this number.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>List</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"SecurityGroupSelector\\",\\"props\\":{\\"mode\\":\\"multiple\\"}}</EditorType>\\n        <DefaultValue>[]</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>securityGroupIds</OptionName>\\n        <OptionLabel>Security Groups</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>5</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The security group used by the instance can select up to 5 security groups.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>AliyunECSInstanceForWebPlusRole</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>ramRoleName</OptionName>\\n        <OptionLabel>ECS RAM Role Name</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>true</ReadonlyOption>\\n        <MaxLength>64</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>RAM role name used by ECS instances created by Web+</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"KeyPairSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>keyPairName</OptionName>\\n        <OptionLabel>Key Pair Name</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>64</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Key pair, used for SSH login, please refer to <a href=\\"//help.aliyun.com/document_detail/51793.html\\" target=\\"_blank\\">Using SSH key pair</a></OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>release</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>scalingPolicy</OptionName>\\n        <OptionLabel>Scaling Policy</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>16</MaxLength>\\n        <ValueOptions>[{\\"value\\":\\"recycle\\",\\"label\\":\\"{{webx.configvalue.resources-ecs-autoScaling.scalingPolicy.recycle.msg}}\\"},{\\"value\\":\\"release\\",\\"label\\":\\"{{webx.configvalue.resources-ecs-autoScaling.scalingPolicy.recycle.msg}}\\"}]</ValueOptions>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Recycling mode when the ECS instance is shrunk, optional release mode or shutdown recovery mode.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>userData</OptionName>\\n        <OptionLabel>User Data</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>16384</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Configure ECS user data, refer to <a href=\\"//help.aliyun.com/video_detail/54745.html\\" targe=\\"_blank\\"> ECS User Data Practices</a>.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"DataDiskEditor\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>dataDiskInfo</OptionName>\\n        <OptionLabel>Data Disk Infomation</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>true</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Configure information about the data disk.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>40</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>100</DefaultValue>\\n        <MaxValue>500</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>systemDiskSize</OptionName>\\n        <OptionLabel>System Disk Size</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>System disk size (GB)</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>cloud_efficiency</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>systemDiskCategory</OptionName>\\n        <OptionLabel>System Disk Category</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions>[\\"cloud\\",\\"cloud_efficiency\\",\\"cloud_ssd\\",\\"ephemeral_ssd\\"]</ValueOptions>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>1</MinLength>\\n        <OptionDescription>The disk type of the system disk, optional: cloud, cloud_efficiency, cloud_ssd, ephemeral_ssd.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>BALANCE</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>multiAzPolicy</OptionName>\\n        <OptionLabel>Multiple Zones Policy</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions>[\\"PRIORITY\\",\\"COST_OPTIMIZED\\",\\"BALANCE\\"]</ValueOptions>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>1</MinLength>\\n        <OptionDescription>Multi-AZ scaling group used by Web+ ECS instance expansion and contraction strategy, optional priority policy or balancing policy.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>Boolean</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>true</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>enableInternet</OptionName>\\n        <OptionLabel>Enable Public IP</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Whether the public network IP address is enabled. If enabled, the ECS instance in the deployment environment can be accessed from the public network. Pay attention to the security configuration. The public network service provided by the ECS instance may incur charges. Please refer to <a href=\\"// Help.aliyun.com/document_detail/25411.html\\" target=\\"_blank\\">public network bandwidth billing</a>.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>PayByTraffic</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>internetChargeType</OptionName>\\n        <OptionLabel>Internet Charge Type</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions>[\\"PayByBandwidth\\",\\"PayByTraffic\\"]</ValueOptions>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>1</MinLength>\\n        <OptionDescription>The network charge type can be selected to be charged by flow rate or by bandwidth.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>1</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>100</DefaultValue>\\n        <MaxValue>200</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>internetMaxBandwidthIn</OptionName>\\n        <OptionLabel>Max Bandwidth Inbound</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The maximum bandwidth of the public network is in Mbps (Mega bit per second), and the value ranges from 1 to 200.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>0</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>50</DefaultValue>\\n        <MaxValue>100</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>internetMaxBandwidthOut</OptionName>\\n        <OptionLabel>Max Bandwidth Outbound</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The maximum bandwidth of the public network, in Mbps (Mega bit per second), the value range is 0-100.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>Boolean</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>true</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>ioOptimized</OptionName>\\n        <OptionLabel>IO Optimized</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Whether to create I/O optimization instances.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>Boolean</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>false</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.ecs.autoScaling</PathName>\\n        <OptionName>passwordInherit</OptionName>\\n        <OptionLabel>Password Inherit</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Whether to use the password of the mirror preset. When using this parameter, the password used by the mirror must be preset.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>JSON</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"VpcOptionSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>{\\"vpcId\\":\\"\\",\\"vSwitches\\":[]}</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.network</PathName>\\n        <OptionName>vpcOption</OptionName>\\n        <OptionLabel>Network Options</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>For VPCs and switches used in the deployment environment, if multiple switches are selected, Web+ will distribute the ECS instances equally across the selected switches. New VPCs and switches can be created in the //vpc.console.aliyun.com\\" target=\\"_blank\\">VPC console</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>Boolean</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>false</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>enable</OptionName>\\n        <OptionLabel>Enable</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The Aliyun Relational Database Service is a stable, resilient, scalable online database service that supports MySQL, SQL Server, PostgreSQL, PPAS, and MariaDB TX engines. It also provides a complete solution for disaster tolerance, backup, recovery, monitoring, migration, and more. For more information, please refer to<a target=\\"_blank\\" href=\\"//help.aliyun.com/knowledge_detail/26092.html\\">What is Cloud Database RDS</a></OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>Boolean</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>false</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>imported</OptionName>\\n        <OptionLabel>Use existed instance</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Please import an existing RDS instance. Under this scenario, you need to ensure that the corresponding database, account and password exist on the instance. And Web+ will send the provided connection information to the application.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>rdsId</OptionName>\\n        <OptionLabel>Database Instance</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Please select the database instance you want to import</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSZoneSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>zoneId</OptionName>\\n        <OptionLabel>Zone</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>64</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Please select the available zone where the RDS instance is located</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>JSON</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSVSwitchSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>[]</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>vSwitches</OptionName>\\n        <OptionLabel>Zone and VSwitch</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Please select the zone and switch where the RDS instance is located (the star-marked switch is the default switch for the current environment)</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSEngineSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>engine</OptionName>\\n        <OptionLabel>Database Type</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>RDS supports database types such as MySQL, PostgreSQL, SQL Server, MariaDB TX, and PPAS (Postgre Plus Advanced Server, highly compatible Oracle Database).</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSEngineVersionSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>engineVersion</OptionName>\\n        <OptionLabel>Database version</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Choose the right database engine version for your business needs</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSStorageTypeSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>storageType</OptionName>\\n        <OptionLabel>Storage Type</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>to meet the needs of different scenarios, cloud database RDS offers three types of data storage: local_ssd , cloud_ssd, and cloud_essd. It is recommended to use the local SSD disk to store data on the local SSD disk, which can reduce I/O latency. Detail can be referenced here <a target=\\"_blank\\" href=\\"//help.aliyun.com/knowledge_detail/69795.html\\">Storage type</a>。</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>5</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSStorageSizeSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>100</DefaultValue>\\n        <MaxValue>10000</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>storageSize</OptionName>\\n        <OptionLabel>Storage size</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Choose the right storage size for your business needs (in GB)</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSInstanceClassSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>dbInstanceClass</OptionName>\\n        <OptionLabel>Instance Class</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Cloud database RDS offers two instance size families, both generic and exclusive. Generic instance has universal exclusive allocated memory and I/O resources but share CPU and storage resources with other generic instances on the same physical machine. Exclusive instance has exclusive cpu, memory, storage, and I/O resources and  performance that is not affected by the behavior of other instances on the physical machine.See in detail<a target=\\"_blank\\" href=\\"//help.aliyun.com/knowledge_detail/57184.html\\">Instance Specification Family</a>。</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>webplus</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>databaseName</OptionName>\\n        <OptionLabel>Database Name</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>64</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The name of the database. Under purchasing scenario, Web+ will help you create the database (except PostgreSQL, PPAS, and SQL Server 2017 Cluster Edition, which you can do with CREATE DATABASE in SQL), and under the import scenario you need to ensure that the database already exists.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSCharacterSetSelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>characterSetName</OptionName>\\n        <OptionLabel>Character Set</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>64</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The character set of the database, MySQL and MariaDB by default takes utf8mb4, SQL Server by default takes Chinese-PRC-CI-AS</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>webplus</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>accountName</OptionName>\\n        <OptionLabel>Account Name</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The database account. Under the purchasing scenario, Web+ will help you create and maintain this account on the instance, and under the import scenario you need to ensure that the account is correct.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSAccountPassword\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>accountPassword</OptionName>\\n        <OptionLabel>Password</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The password of the database account. Under the purchasing scenario, Web+ will ensure that the account is consistent with the password, and under the import scene you need to ensure that the password is correct.(Password rule is: uppercase, lowercase, number, special characters accounted for three, length 8-32 bits, special characters for </OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"RDSCategorySelector\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.rds</PathName>\\n        <OptionName>category</OptionName>\\n        <OptionLabel>Category</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>1024</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Cloud database RDS include four series: Basic, High Available, Cluster, and Financial. Details can be found here<a target=\\"_blank\\" href=\\"//help.aliyun.com/document_detail/55665.html\\">Overview of the product line</a>。</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>Boolean</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{\\"enableLabel\\":\\"When this option is enabled, the application will be accessible from the public network. Please pay attention to your security configuration.\\"}}</EditorType>\\n        <DefaultValue>false</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.internet</PathName>\\n        <OptionName>enable</OptionName>\\n        <OptionLabel>Enable Internet SLB</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Whether to enable the public network SLB, if there are multiple instances of the deployment environment, you can use SLB for load balancing, which can be controlled in <a href=\\"//slb.console.aliyun.com\\" target=\\"_blank\\">SLB Desk</a> creates or configures an SLB.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"SLBSelector\\",\\"props\\":{\\"AddressType\\":\\"internet\\"}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.internet</PathName>\\n        <OptionName>slbId</OptionName>\\n        <OptionLabel>Internet SLB</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Use an existing SLB instance or automatically purchase an SLB instance from Web+.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>1</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>80</DefaultValue>\\n        <MaxValue>65535</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.internet</PathName>\\n        <OptionName>listenerPort</OptionName>\\n        <OptionLabel>Internet SLB Listener Port</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The listening port of the public network SLB can use this port to access applications from the public network.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>http</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.internet</PathName>\\n        <OptionName>protocol</OptionName>\\n        <OptionLabel>Internet SLB Protocol</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>16</MaxLength>\\n        <ValueOptions>[{\\"value\\":\\"tcp\\",\\"label\\":\\"TCP\\"},{\\"value\\":\\"http\\",\\"label\\":\\"HTTP\\"}]</ValueOptions>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Protocol used by the internet SLB</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.internet</PathName>\\n        <OptionName>forwardingRule</OptionName>\\n        <OptionLabel>Internet SLB Forwarding Rule</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>128</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Forwarding rules used by the internet SLB. The forwarding rule is in the format of Host / Path, and Host or Path needs to configure at least one item, such as www.taobao.com/test, www.taobao.com, /test are all correct forwarding rules.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>1</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>80</DefaultValue>\\n        <MaxValue>65535</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.internet</PathName>\\n        <OptionName>backendPort</OptionName>\\n        <OptionLabel>Internet SLB Backend Port</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>true</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The internet SLB forwards the request to the port of the instance, which is generally the application reverse proxy port</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>-1</DefaultValue>\\n        <MaxValue>5120</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.internet</PathName>\\n        <OptionName>bandwidth</OptionName>\\n        <OptionLabel>Max Bandwidth</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The peak bandwidth of the load balancer.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>slb.s1.small</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.internet</PathName>\\n        <OptionName>loadBalancerSpec</OptionName>\\n        <OptionLabel>Load Balancer Spec</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions>[\\"slb.s1.small\\",\\"slb.s2.small\\",\\"slb.s2.medium\\",\\"slb.s3.small\\",\\"slb.s3.medium\\",\\"slb.s3.large\\"]</ValueOptions>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The specifications of the load balancing instance.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>/</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.internet</PathName>\\n        <OptionName>healthCheckUrl</OptionName>\\n        <OptionLabel>Health Check URL</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>256</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>URL path for health checks.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>paybytraffic</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.internet</PathName>\\n        <OptionName>internetChargeType</OptionName>\\n        <OptionLabel>Internet Charge Type</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions>[\\"paybybandwidth\\",\\"paybytraffic\\"]</ValueOptions>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The payment method of the public network type instance can be charged by bandwidth or by flow meter.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>Boolean</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>false</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.intranet</PathName>\\n        <OptionName>enable</OptionName>\\n        <OptionLabel>Enable Intranet SLB</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Whether to enable intranet SLB, if there are multiple instances in the deployment environment, you can use SLB for load balancing, which can be used in //slb.console.aliyun.com SLB console Create or configure SLB.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"SLBSelector\\",\\"props\\":{\\"AddressType\\":\\"intranet\\"}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.intranet</PathName>\\n        <OptionName>slbId</OptionName>\\n        <OptionLabel>Intranet SLB</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Use an existing SLB instance or automatically purchase an SLB instance from Web+.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>1</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>80</DefaultValue>\\n        <MaxValue>65535</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.intranet</PathName>\\n        <OptionName>listenerPort</OptionName>\\n        <OptionLabel>Intranet SLB Listener Port</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Intranet SLB listening port, use this port to access applications from the intranet.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>http</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.intranet</PathName>\\n        <OptionName>protocol</OptionName>\\n        <OptionLabel>Intranet SLB Protocol</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>16</MaxLength>\\n        <ValueOptions>[{\\"value\\":\\"tcp\\",\\"label\\":\\"TCP\\"},{\\"value\\":\\"http\\",\\"label\\":\\"HTTP\\"}]</ValueOptions>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Protocol used by the intranet SLB</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue/>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.intranet</PathName>\\n        <OptionName>forwardingRule</OptionName>\\n        <OptionLabel>Intranet SLB Forwarding Rule</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>128</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>Forwarding rules used by the intranet SLB. The forwarding rule is in the format of Host / Path, and Host or Path needs to configure at least one item, such as www.taobao.com/test, www.taobao.com, /test are all correct forwarding rules.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>1</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>80</DefaultValue>\\n        <MaxValue>65535</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.intranet</PathName>\\n        <OptionName>backendPort</OptionName>\\n        <OptionLabel>Intranet SLB Backend Port</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>true</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The intranet SLB forwards the request to the port of the instance, which is generally the application reverse proxy port</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>-1</DefaultValue>\\n        <MaxValue>5120</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.intranet</PathName>\\n        <OptionName>bandwidth</OptionName>\\n        <OptionLabel>Max Bandwidth</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The peak bandwidth of the load balancer.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>slb.s1.small</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.intranet</PathName>\\n        <OptionName>loadBalancerSpec</OptionName>\\n        <OptionLabel>Load Balancer Spec</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions>[\\"slb.s1.small\\",\\"slb.s2.small\\",\\"slb.s2.medium\\",\\"slb.s3.small\\",\\"slb.s3.medium\\",\\"slb.s3.large\\"]</ValueOptions>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The specifications of the load balancing instance.</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>/</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.intranet</PathName>\\n        <OptionName>healthCheckUrl</OptionName>\\n        <OptionLabel>健康检查URL</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>256</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>用于健康检查的URL路径。</OptionDescription>\\n      </ConfigOption>\\n      <ConfigOption>\\n        <MinValue>-1</MinValue>\\n        <ValueType>String</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>paybytraffic</DefaultValue>\\n        <MaxValue>-1</MaxValue>\\n        <RegexDesc/>\\n        <PathName>resources.slb.intranet</PathName>\\n        <OptionName>internetChargeType</OptionName>\\n        <OptionLabel>Charge Type</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>32</MaxLength>\\n        <ValueOptions>[\\"paybybandwidth\\",\\"paybytraffic\\"]</ValueOptions>\\n        <HiddenOption>true</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>The payment method of the SLB instance can be charged by bandwidth or by flow meter.</OptionDescription>\\n      </ConfigOption>\\n    </ConfigOptions>\\n    <StackName>Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903</StackName>\\n  </StackConfigOption>\\n  <Code>OK</Code>\\n</DescribeConfigOptionsResponse>","errorExample":""}]',
      'title' => '查询配置选项信息',
      'summary' => '调用DescribeConfigOptions查询配置选项信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeConfigIndex' => 
    array (
      'path' => '/pop/v1/wam/config/configIndex',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技术栈类型',
            'type' => 'string',
            'required' => false,
            'example' => 'ws-6c937c98a9c0296d0c48*****',
          ),
        ),
        1 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境ID',
            'type' => 'string',
            'required' => false,
            'example' => 'we-5d3eaaea2977ca5251e*****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProfileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '初始化配置类型，可选以下值：
 - `HighAvailability`：高可用，该配置会将实例数设置为2，同时启用公网SLB
 - `StandAlone`：低成本，该配置会将实例数设置为1',
            'type' => 'string',
            'required' => false,
            'example' => 'HighAvailability',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0416FA4F-BB38-4237-AAC5-38F15E0*****',
              ),
              'ConfigGroups' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ConfigGroup' => 
                  array (
                    'description' => '配置组信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConfigPaths' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ConfigPath' => 
                            array (
                              'description' => '配置组路径',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'PathName' => 
                                  array (
                                    'description' => '路径名称',
                                    'type' => 'string',
                                    'example' => 'proxy',
                                  ),
                                  'HiddenPath' => 
                                  array (
                                    'description' => '是否为隐藏路径',
                                    'type' => 'boolean',
                                    'example' => 'false',
                                  ),
                                  'ConfigOptions' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'ConfigOption' => 
                                      array (
                                        'description' => '配置组选项',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'RegexDesc' => 
                                            array (
                                              'description' => '正则描述信息',
                                              'type' => 'string',
                                              'example' => '""',
                                            ),
                                            'MaxValue' => 
                                            array (
                                              'description' => '最大值',
                                              'type' => 'integer',
                                              'format' => 'int64',
                                              'example' => '-1',
                                            ),
                                            'EditorType' => 
                                            array (
                                              'description' => '编辑类型',
                                              'type' => 'string',
                                              'example' => '{"component":"Select","props":{}}',
                                            ),
                                            'MinValue' => 
                                            array (
                                              'description' => '最小值',
                                              'type' => 'integer',
                                              'format' => 'int64',
                                              'example' => '-1',
                                            ),
                                            'OptionLabel' => 
                                            array (
                                              'description' => '选项标签',
                                              'type' => 'string',
                                              'example' => 'Reverse Proxy Type',
                                            ),
                                            'DefaultValue' => 
                                            array (
                                              'description' => '默认值',
                                              'type' => 'string',
                                              'example' => 'nginx',
                                            ),
                                            'MaxLength' => 
                                            array (
                                              'description' => '最大长度',
                                              'type' => 'integer',
                                              'format' => 'int32',
                                              'example' => '32',
                                            ),
                                            'RegexPattern' => 
                                            array (
                                              'description' => '正则匹配模式',
                                              'type' => 'string',
                                              'example' => '""',
                                            ),
                                            'ChangeSeverity' => 
                                            array (
                                              'description' => '变更重要性',
                                              'type' => 'string',
                                              'example' => 'NoInterruption',
                                            ),
                                            'OptionDescription' => 
                                            array (
                                              'description' => '选项描述信息',
                                              'type' => 'string',
                                              'example' => 'The reverse proxy type used. After the reverse proxy starts, it will listen to the instance\'s port 80. Make sure that the port is not occupied by other programs. The reverse proxy will forward the received HTTP request to the application\'s service port.',
                                            ),
                                            'OptionName' => 
                                            array (
                                              'description' => '选项名称',
                                              'type' => 'string',
                                              'example' => 'type',
                                            ),
                                            'PathName' => 
                                            array (
                                              'description' => '路径名称',
                                              'type' => 'string',
                                              'example' => 'proxy',
                                            ),
                                            'HiddenOption' => 
                                            array (
                                              'description' => '是否为隐藏选项',
                                              'type' => 'boolean',
                                              'example' => 'false',
                                            ),
                                            'ValueType' => 
                                            array (
                                              'description' => '值类型',
                                              'type' => 'string',
                                              'example' => 'String',
                                            ),
                                            'MinLength' => 
                                            array (
                                              'description' => '最小长度',
                                              'type' => 'integer',
                                              'format' => 'int32',
                                              'example' => '32',
                                            ),
                                            'ValueOptions' => 
                                            array (
                                              'description' => '值选项',
                                              'type' => 'string',
                                              'example' => '[{"value": "nginx", "label": "Nginx (1.14.2)"},{"value": "apache", "label": "Apache HTTP Server (2.4.6)"}]',
                                            ),
                                            'ReadonlyOption' => 
                                            array (
                                              'description' => '是否为只读选项',
                                              'type' => 'boolean',
                                              'example' => 'false',
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                  'PathLabel' => 
                                  array (
                                    'description' => '路径标签',
                                    'type' => 'string',
                                    'example' => 'Reverse Proxy',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'GroupName' => 
                        array (
                          'description' => '配置组名称',
                          'type' => 'string',
                          'example' => 'platform',
                        ),
                        'GroupLabel' => 
                        array (
                          'description' => '配置组标签',
                          'type' => 'string',
                          'example' => 'Platform',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
              'StackName' => 
              array (
                'description' => '技术栈名称',
                'type' => 'string',
                'example' => 'Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903',
              ),
              'StackId' => 
              array (
                'description' => '技术栈ID',
                'type' => 'string',
                'example' => 'ws-6c937c98a9c0296d0c48*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"StackName\\": \\"Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903\\",\\n  \\"StackId\\": \\"ws-6c937c98a9c0296d0c48*****\\",\\n  \\"RequestId\\": \\"0416FA4F-BB38-4237-AAC5-38F15E0*****\\",\\n  \\"ConfigGroups\\": {\\n    \\"ConfigGroup\\": [\\n      {\\n        \\"GroupName\\": \\"platform\\",\\n        \\"GroupLabel\\": \\"Platform\\",\\n        \\"ConfigPaths\\": {\\n          \\"ConfigPath\\": [\\n            {\\n              \\"PathName\\": \\"proxy\\",\\n              \\"HiddenPath\\": false,\\n              \\"PathLabel\\": \\"Reverse Proxy\\",\\n              \\"ConfigOptions\\": {\\n                \\"ConfigOption\\": [\\n                  {\\n                    \\"RegexDesc\\": \\"\\\\\\"\\\\\\"\\",\\n                    \\"MaxValue\\": -1,\\n                    \\"EditorType\\": \\"{\\\\\\"component\\\\\\":\\\\\\"Select\\\\\\",\\\\\\"props\\\\\\":{}}\\",\\n                    \\"MinValue\\": -1,\\n                    \\"MaxLength\\": 32,\\n                    \\"DefaultValue\\": \\"nginx\\",\\n                    \\"OptionLabel\\": \\"Reverse Proxy Type\\",\\n                    \\"RegexPattern\\": \\"\\\\\\"\\\\\\"\\",\\n                    \\"OptionDescription\\": \\"The reverse proxy type used. After the reverse proxy starts, it will listen to the instance\'s port 80. Make sure that the port is not occupied by other programs. The reverse proxy will forward the received HTTP request to the application\'s service port.\\",\\n                    \\"ChangeSeverity\\": \\"NoInterruption\\",\\n                    \\"OptionName\\": \\"type\\",\\n                    \\"PathName\\": \\"proxy\\",\\n                    \\"HiddenOption\\": false,\\n                    \\"ValueType\\": \\"String\\",\\n                    \\"MinLength\\": 32,\\n                    \\"ValueOptions\\": \\"[{\\\\\\"value\\\\\\": \\\\\\"nginx\\\\\\", \\\\\\"label\\\\\\": \\\\\\"Nginx (1.14.2)\\\\\\"},{\\\\\\"value\\\\\\": \\\\\\"apache\\\\\\", \\\\\\"label\\\\\\": \\\\\\"Apache HTTP Server (2.4.6)\\\\\\"}]\\",\\n                    \\"ReadonlyOption\\": false\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeConfigIndexResponse>\\n  <Message>success</Message>\\n  <StackId>ws-6c937c98a9c0296d0c48*****</StackId>\\n  <RequestId>87498446-48E8-4DFF-9D9A-F08999D*****</RequestId>\\n  <Code>OK</Code>\\n  <ConfigGroups>\\n    <ConfigGroup>\\n      <GroupName>platform</GroupName>\\n      <GroupLabel>Platform</GroupLabel>\\n      <ConfigPaths>\\n        <ConfigPath>\\n          <HiddenPath>false</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>nginx</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>proxy</PathName>\\n              <OptionName>type</OptionName>\\n              <OptionLabel>Reverse Proxy Type</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions>[{\\"value\\": \\"nginx\\", \\"label\\": \\"Nginx (1.14.2)\\"},{\\"value\\": \\"apache\\", \\"label\\": \\"Apache HTTP Server (2.4.6)\\"}]</ValueOptions>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The reverse proxy type used. After the reverse proxy starts, it will listen to the instance\'s port 80. Make sure that the port is not occupied by other programs. The reverse proxy will forward the received HTTP request to the application\'s service port.</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Reverse Proxy</PathLabel>\\n          <PathName>proxy</PathName>\\n        </ConfigPath>\\n      </ConfigPaths>\\n    </ConfigGroup>\\n    <ConfigGroup>\\n      <GroupName>resources</GroupName>\\n      <GroupLabel>Resource</GroupLabel>\\n      <ConfigPaths>\\n        <ConfigPath>\\n          <HiddenPath>false</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>JSON</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"VpcOptionSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>{\\"vpcId\\":\\"vpc-wz9e6y22o3o91nuy9xktc\\",\\"vSwitches\\":[\\"vsw-wz9gfawx1vxkimtjc2h0z\\"]}</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.network</PathName>\\n              <OptionName>vpcOption</OptionName>\\n              <OptionLabel>Network Options</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>For VPCs and switches used in the deployment environment, if multiple switches are selected, Web+ will distribute the ECS instances equally across the selected switches. New VPCs and switches can be created in the <a href=\\"//vpc.console.aliyun.com\\" target=\\"_blank\\">VPC console</a></OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Network</PathLabel>\\n          <PathName>resources.network</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>false</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>List</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"InstanceTypeSelector\\",\\"props\\":{\\"mode\\":\\"multiple\\"}}</EditorType>\\n              <DefaultValue>[\\"ecs.t5-lc1m1.small\\",\\"ecs.xn4.small\\",\\"ecs.n1.tiny\\",\\"ecs.g5.large\\"]</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>instanceType</OptionName>\\n              <OptionLabel>Instance Type</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>10</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The instance specification used by the deployment environment, Web+ will create an ECS instance using the selected specifications. Multiple specifications can be selected. When the selected specifications are insufficient, Web+ will attempt to create in the order selected, up to 10 instance specifications. An ECS instance created by Web+, using the <a target=\\"_blank\\" href=\\"//help.aliyun.com/knowledge_detail/40653.html\\">Pay As You Go</a>.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>wp-autoscaled</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>instanceName</OptionName>\\n              <OptionLabel>Instance Name</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>128</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>1</MinLength>\\n              <OptionDescription>Instance name used</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>0</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>1</DefaultValue>\\n              <MaxValue>100</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>instanceNum</OptionName>\\n              <OptionLabel>Instance Number</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The number of instances used, Web+ will expand or shrink the deployment environment based on this number.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>List</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"SecurityGroupSelector\\",\\"props\\":{\\"mode\\":\\"multiple\\"}}</EditorType>\\n              <DefaultValue>[]</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>securityGroupIds</OptionName>\\n              <OptionLabel>Security Groups</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>5</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The security group used by the instance can select up to 5 security groups.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>AliyunECSInstanceForWebPlusRole</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>ramRoleName</OptionName>\\n              <OptionLabel>ECS RAM Role Name</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>true</ReadonlyOption>\\n              <MaxLength>64</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>RAM role name used by ECS instances created by Web+</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"KeyPairSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>keyPairName</OptionName>\\n              <OptionLabel>Key Pair Name</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>64</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Key pair, used for SSH login, please refer to <a href=\\"//help.aliyun.com/document_detail/51793.html\\" target=\\"_blank\\">Using SSH key pair</a>.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>release</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>scalingPolicy</OptionName>\\n              <OptionLabel>Scaling Policy</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>16</MaxLength>\\n              <ValueOptions>[{\\"value\\":\\"recycle\\",\\"label\\":\\"{{webx.configvalue.resources-ecs-autoScaling.scalingPolicy.recycle.msg}}\\"},{\\"value\\":\\"release\\",\\"label\\":\\"{{webx.configvalue.resources-ecs-autoScaling.scalingPolicy.recycle.msg}}\\"}]</ValueOptions>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Recycling mode when the ECS instance is shrunk, optional release mode or shutdown recovery mode.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>userData</OptionName>\\n              <OptionLabel>User Data</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>16384</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Configure ECS user data, refer to <a href=\\"//help.aliyun.com/video_detail/54745.html\\" targe=\\"_blank\\"> ECS User Data Practices</a>.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"DataDiskEditor\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>dataDiskInfo</OptionName>\\n              <OptionLabel>Data Disk Infomation</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>true</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Configure information about the data disk.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>40</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>100</DefaultValue>\\n              <MaxValue>500</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>systemDiskSize</OptionName>\\n              <OptionLabel>System Disk Size</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>System disk size (GB)</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>cloud_efficiency</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>systemDiskCategory</OptionName>\\n              <OptionLabel>System Disk Category</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions>[\\"cloud\\",\\"cloud_efficiency\\",\\"cloud_ssd\\",\\"ephemeral_ssd\\"]</ValueOptions>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>1</MinLength>\\n              <OptionDescription>The disk type of the system disk, optional: cloud, cloud_efficiency, cloud_ssd, ephemeral_ssd.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>BALANCE</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>multiAzPolicy</OptionName>\\n              <OptionLabel>Multiple Zones Policy</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions>[\\"PRIORITY\\",\\"COST_OPTIMIZED\\",\\"BALANCE\\"]</ValueOptions>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>1</MinLength>\\n              <OptionDescription>Multi-AZ scaling group used by Web+ ECS instance expansion and contraction strategy, optional priority policy or balancing policy.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>Boolean</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>true</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>enableInternet</OptionName>\\n              <OptionLabel>Enable Public IP</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Whether the public network IP address is enabled. If enabled, the ECS instance in the deployment environment can be accessed from the public network. Pay attention to the security configuration. The public network service provided by the ECS instance may incur charges. Please refer to <a href=\\"// Help.aliyun.com/document_detail/25411.html\\" target=\\"_blank\\">public network bandwidth billing</a>.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>PayByTraffic</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>internetChargeType</OptionName>\\n              <OptionLabel>Internet Charge Type</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions>[\\"PayByBandwidth\\",\\"PayByTraffic\\"]</ValueOptions>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>1</MinLength>\\n              <OptionDescription>The network charge type can be selected to be charged by flow rate or by bandwidth.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>1</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>100</DefaultValue>\\n              <MaxValue>200</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>internetMaxBandwidthIn</OptionName>\\n              <OptionLabel>Max Bandwidth Inbound</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The maximum bandwidth of the public network is in Mbps (Mega bit per second), and the value ranges from 1 to 200.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>0</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>50</DefaultValue>\\n              <MaxValue>100</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>internetMaxBandwidthOut</OptionName>\\n              <OptionLabel>Max Bandwidth Outbound</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The maximum bandwidth of the public network, in Mbps (Mega bit per second), the value range is 0-100.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>Boolean</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>true</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>ioOptimized</OptionName>\\n              <OptionLabel>IO Optimized</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Whether to create I/O optimization instances.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>Boolean</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>false</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.ecs.autoScaling</PathName>\\n              <OptionName>passwordInherit</OptionName>\\n              <OptionLabel>Password Inherit</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Whether to use the password of the mirror preset. When using this parameter, the password used by the mirror must be preset.</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Instance</PathLabel>\\n          <PathName>resources.ecs.autoScaling</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>false</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>Boolean</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{\\"enableLabel\\":\\"When this option is enabled, the application will be accessible from the public network. Please pay attention to your security configuration.\\"}}</EditorType>\\n              <DefaultValue>false</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.internet</PathName>\\n              <OptionName>enable</OptionName>\\n              <OptionLabel>Enable Internet SLB</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Whether to enable the public network SLB, if there are multiple instances of the deployment environment, you can use SLB for load balancing, which can be controlled in <a href=\\"//slb.console.aliyun.com\\" target=\\"_blank\\">SLB Desk</a> creates or configures an SLB.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"SLBSelector\\",\\"props\\":{\\"AddressType\\":\\"internet\\"}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.internet</PathName>\\n              <OptionName>slbId</OptionName>\\n              <OptionLabel>Internet SLB</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Use an existing SLB instance or automatically purchase an SLB instance from Web+.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>1</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>80</DefaultValue>\\n              <MaxValue>65535</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.internet</PathName>\\n              <OptionName>listenerPort</OptionName>\\n              <OptionLabel>Internet SLB Listener Port</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The listening port of the public network SLB can use this port to access applications from the public network.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>http</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.internet</PathName>\\n              <OptionName>protocol</OptionName>\\n              <OptionLabel>Internet SLB Protocol</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>16</MaxLength>\\n              <ValueOptions>[{\\"value\\":\\"tcp\\",\\"label\\":\\"TCP\\"},{\\"value\\":\\"http\\",\\"label\\":\\"HTTP\\"}]</ValueOptions>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Protocol used by the internet SLB</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.internet</PathName>\\n              <OptionName>forwardingRule</OptionName>\\n              <OptionLabel>Internet SLB Forwarding Rule</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>128</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Forwarding rules used by the internet SLB. The forwarding rule is in the format of Host / Path, and Host or Path needs to configure at least one item, such as www.taobao.com/test, www.taobao.com, /test are all correct forwarding rules.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>1</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>80</DefaultValue>\\n              <MaxValue>65535</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.internet</PathName>\\n              <OptionName>backendPort</OptionName>\\n              <OptionLabel>Internet SLB Backend Port</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>true</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The internet SLB forwards the request to the port of the instance, which is generally the application reverse proxy port</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>-1</DefaultValue>\\n              <MaxValue>5120</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.internet</PathName>\\n              <OptionName>bandwidth</OptionName>\\n              <OptionLabel>Max Bandwidth</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The peak bandwidth of the load balancer.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>slb.s1.small</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.internet</PathName>\\n              <OptionName>loadBalancerSpec</OptionName>\\n              <OptionLabel>Load Balancer Spec</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions>[\\"slb.s1.small\\",\\"slb.s2.small\\",\\"slb.s2.medium\\",\\"slb.s3.small\\",\\"slb.s3.medium\\",\\"slb.s3.large\\"]</ValueOptions>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The specifications of the load balancing instance.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>/</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.internet</PathName>\\n              <OptionName>healthCheckUrl</OptionName>\\n              <OptionLabel>Health Check URL</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>256</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>URL path for health checks.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>paybytraffic</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.internet</PathName>\\n              <OptionName>internetChargeType</OptionName>\\n              <OptionLabel>Internet Charge Type</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions>[\\"paybybandwidth\\",\\"paybytraffic\\"]</ValueOptions>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The payment method of the public network type instance can be charged by bandwidth or by flow meter.</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Internet SLB</PathLabel>\\n          <PathName>resources.slb.internet</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>false</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>Boolean</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>false</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.intranet</PathName>\\n              <OptionName>enable</OptionName>\\n              <OptionLabel>Enable Intranet SLB</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Whether to enable intranet SLB, if there are multiple instances in the deployment environment, you can use SLB for load balancing, which can be used in <a href=\\"//slb.console.aliyun.com\\" target=\\"_blank\\">SLB console</a>Create or configure SLB.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"SLBSelector\\",\\"props\\":{\\"AddressType\\":\\"intranet\\"}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.intranet</PathName>\\n              <OptionName>slbId</OptionName>\\n              <OptionLabel>Intranet SLB</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Use an existing SLB instance or automatically purchase an SLB instance from Web+.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>1</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>80</DefaultValue>\\n              <MaxValue>65535</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.intranet</PathName>\\n              <OptionName>listenerPort</OptionName>\\n              <OptionLabel>Intranet SLB Listener Port</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Intranet SLB listening port, use this port to access applications from the intranet.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>http</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.intranet</PathName>\\n              <OptionName>protocol</OptionName>\\n              <OptionLabel>Intranet SLB Protocol</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>16</MaxLength>\\n              <ValueOptions>[{\\"value\\":\\"tcp\\",\\"label\\":\\"TCP\\"},{\\"value\\":\\"http\\",\\"label\\":\\"HTTP\\"}]</ValueOptions>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Protocol used by the intranet SLB</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.intranet</PathName>\\n              <OptionName>forwardingRule</OptionName>\\n              <OptionLabel>Intranet SLB Forwarding Rule</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>128</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Forwarding rules used by the intranet SLB. The forwarding rule is in the format of Host / Path, and Host or Path needs to configure at least one item, such as www.taobao.com/test, www.taobao.com, /test are all correct forwarding rules.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>1</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>80</DefaultValue>\\n              <MaxValue>65535</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.intranet</PathName>\\n              <OptionName>backendPort</OptionName>\\n              <OptionLabel>Intranet SLB Backend Port</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>true</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The intranet SLB forwards the request to the port of the instance, which is generally the application reverse proxy port</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>-1</DefaultValue>\\n              <MaxValue>5120</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.intranet</PathName>\\n              <OptionName>bandwidth</OptionName>\\n              <OptionLabel>Max Bandwidth</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The peak bandwidth of the load balancer.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>slb.s1.small</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.intranet</PathName>\\n              <OptionName>loadBalancerSpec</OptionName>\\n              <OptionLabel>Load Balancer Spec</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions>[\\"slb.s1.small\\",\\"slb.s2.small\\",\\"slb.s2.medium\\",\\"slb.s3.small\\",\\"slb.s3.medium\\",\\"slb.s3.large\\"]</ValueOptions>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The specifications of the load balancing instance.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>/</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.intranet</PathName>\\n              <OptionName>healthCheckUrl</OptionName>\\n              <OptionLabel>健康检查URL</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>256</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>用于健康检查的URL路径。</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>paybytraffic</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.slb.intranet</PathName>\\n              <OptionName>internetChargeType</OptionName>\\n              <OptionLabel>Charge Type</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions>[\\"paybybandwidth\\",\\"paybytraffic\\"]</ValueOptions>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The payment method of the SLB instance can be charged by bandwidth or by flow meter.</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Intranet SLB</PathLabel>\\n          <PathName>resources.slb.intranet</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>false</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>Boolean</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>false</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>enable</OptionName>\\n              <OptionLabel>Enable</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The Aliyun Relational Database Service is a stable, resilient, scalable online database service that supports MySQL, SQL Server, PostgreSQL, PPAS, and MariaDB TX engines. It also provides a complete solution for disaster tolerance, backup, recovery, monitoring, migration, and more. For more information, please refer to<a target=\\"_blank\\" href=\\"//help.aliyun.com/knowledge_detail/26092.html\\">What is Cloud Database RDS</a>。</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>Boolean</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Switch\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>false</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>imported</OptionName>\\n              <OptionLabel>Use existed instance</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Please import an existing RDS instance. Under this scenario, you need to ensure that the corresponding database, account and password exist on the instance. And Web+ will send the provided connection information to the application.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>rdsId</OptionName>\\n              <OptionLabel>Database Instance</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Please select the database instance you want to import</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSZoneSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>zoneId</OptionName>\\n              <OptionLabel>Zone</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>64</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Please select the available zone where the RDS instance is located</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>JSON</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSVSwitchSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>[]</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>vSwitches</OptionName>\\n              <OptionLabel>Zone and VSwitch</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Please select the zone and switch where the RDS instance is located (the star-marked switch is the default switch for the current environment)</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSEngineSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>engine</OptionName>\\n              <OptionLabel>Database Type</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>RDS supports database types such as MySQL, PostgreSQL, SQL Server, MariaDB TX, and PPAS (Postgre Plus Advanced Server, highly compatible Oracle Database).</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSEngineVersionSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>engineVersion</OptionName>\\n              <OptionLabel>Database version</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Choose the right database engine version for your business needs</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSStorageTypeSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>storageType</OptionName>\\n              <OptionLabel>Storage Type</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>To meet the needs of different scenarios, cloud database RDS offers three types of data storage: local_ssd , cloud_ssd, and cloud_essd. It is recommended to use the local SSD disk to store data on the local SSD disk, which can reduce I/O latency. Detail can be referenced here <a target=\\"_blank\\" href=\\"//help.aliyun.com/knowledge_detail/69795.html\\">Storage type</a>。</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>5</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSStorageSizeSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>100</DefaultValue>\\n              <MaxValue>10000</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>storageSize</OptionName>\\n              <OptionLabel>Storage size</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Choose the right storage size for your business needs (in GB)</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSInstanceClassSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>dbInstanceClass</OptionName>\\n              <OptionLabel>Instance Class</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Cloud database RDS offers two instance size families, both generic and exclusive. Generic instance has universal exclusive allocated memory and I/O resources but share CPU and storage resources with other generic instances on the same physical machine. Exclusive instance has exclusive cpu, memory, storage, and I/O resources and  performance that is not affected by the behavior of other instances on the physical machine.See in detail<a target=\\"_blank\\" href=\\"//help.aliyun.com/knowledge_detail/57184.html\\">Instance Specification Family</a>。</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>webplus</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>databaseName</OptionName>\\n              <OptionLabel>Database Name</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>64</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The name of the database. Under purchasing scenario, Web+ will help you create the database (except PostgreSQL, PPAS, and SQL Server 2017 Cluster Edition, which you can do with CREATE DATABASE in SQL), and under the import scenario you need to ensure that the database already exists.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSCharacterSetSelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>characterSetName</OptionName>\\n              <OptionLabel>Character Set</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>64</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The character set of the database, MySQL and MariaDB by default takes utf8mb4, SQL Server by default takes Chinese-PRC-CI-AS</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>webplus</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>accountName</OptionName>\\n              <OptionLabel>Account Name</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>32</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The database account. Under the purchasing scenario, Web+ will help you create and maintain this account on the instance, and under the import scenario you need to ensure that the account is correct.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSAccountPassword\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>accountPassword</OptionName>\\n              <OptionLabel>Password</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The password of the database account. Under the purchasing scenario, Web+ will ensure that the account is consistent with the password, and under the import scene you need to ensure that the password is correct.(Password rule is: uppercase, lowercase, number, special characters accounted for three, length 8-32 bits, special characters for </OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"RDSCategorySelector\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>resources.rds</PathName>\\n              <OptionName>category</OptionName>\\n              <OptionLabel>Category</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Cloud database RDS include four series: Basic, High Available, Cluster, and Financial. Details can be found here<a target=\\"_blank\\" href=\\"//help.aliyun.com/document_detail/55665.html\\">Overview of the product line</a>。</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Cloud Database RDS</PathLabel>\\n          <PathName>resources.rds</PathName>\\n        </ConfigPath>\\n      </ConfigPaths>\\n    </ConfigGroup>\\n    <ConfigGroup>\\n      <GroupName>application</GroupName>\\n      <GroupLabel>Application</GroupLabel>\\n      <ConfigPaths>\\n        <ConfigPath>\\n          <HiddenPath>false</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>1024</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>8080</DefaultValue>\\n              <MaxValue>65535</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.option</PathName>\\n              <OptionName>port</OptionName>\\n              <OptionLabel>Server Port</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>This port will be used as the HTTP service port after the application is launched, and ports from 1024 to 65535 can be used.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>0</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>180</DefaultValue>\\n              <MaxValue>180</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.option</PathName>\\n              <OptionName>maxStartDuration</OptionName>\\n              <OptionLabel>Application Max Start Duration (Seconds)</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>If the health check status is still incorrect during this time after the application is started, the application is considered to have failed to start.</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>General</PathLabel>\\n          <PathName>application.option</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>false</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Select\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>http</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.healthCheck</PathName>\\n              <OptionName>type</OptionName>\\n              <OptionLabel>Health Check Type</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>16</MaxLength>\\n              <ValueOptions>[{\\"value\\": \\"http\\", \\"label\\": \\"HTTP\\"},{\\"value\\": \\"tcp\\", \\"label\\": \\"TCP\\"}]</ValueOptions>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The type of protocol used by the health check, currently supporting TCP and HTTP, Web+ will periodically send health check requests to the application\'s service port to determine if the application is healthy.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>/</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.healthCheck</PathName>\\n              <OptionName>path</OptionName>\\n              <OptionLabel>Health Check URL</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>256</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Web+ will request this URL and judge whether the application is healthy according to the response code. If a non-20x/30x response code is received or the response times out, it is determined that the single health check failed.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>1</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>3</DefaultValue>\\n              <MaxValue>30</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.healthCheck</PathName>\\n              <OptionName>retryCount</OptionName>\\n              <OptionLabel>Health Check Retry Count</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>If the health check retry exceeds this number, it is determined that the health check failed.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>1</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>3</DefaultValue>\\n              <MaxValue>60</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.healthCheck</PathName>\\n              <OptionName>intervalSeconds</OptionName>\\n              <OptionLabel>Health Check Interval (Seconds)</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>When an inspection fails, the interval to the next health check is long.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>1</MinValue>\\n              <ValueType>Integer</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>3</DefaultValue>\\n              <MaxValue>60</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.healthCheck</PathName>\\n              <OptionName>timeoutSeconds</OptionName>\\n              <OptionLabel>Health Check Timeout (Seconds)</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>-1</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The timeout period for a single health check.</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Health Check</PathLabel>\\n          <PathName>application.healthCheck</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>true</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.commands</PathName>\\n              <OptionName>start</OptionName>\\n              <OptionLabel>Start Command</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Web+ uses this command to launch an application</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.commands</PathName>\\n              <OptionName>stop</OptionName>\\n              <OptionLabel>Stop Command</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Web+ uses this command to stop the application</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Commands</PathLabel>\\n          <PathName>application.commands</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>true</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>hooks</PathName>\\n              <OptionName>prestart</OptionName>\\n              <OptionLabel>PreStart</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Web+ will call this command before the app starts</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>hooks</PathName>\\n              <OptionName>poststart</OptionName>\\n              <OptionLabel>PostStart</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Web+ will call this command after the app launches</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>hooks</PathName>\\n              <OptionName>prestop</OptionName>\\n              <OptionLabel>PreStop</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Web+ will call this command before the application stops</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>hooks</PathName>\\n              <OptionName>poststop</OptionName>\\n              <OptionLabel>PostStop</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Web+ will call this command after the app has stopped</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Editor\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>hooks</PathName>\\n              <OptionName>postinit</OptionName>\\n              <OptionLabel>Postinit</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Web+ will call this command when the application is initialized</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Hooks</PathLabel>\\n          <PathName>hooks</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>false</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>JSON</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"KVListEditor\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue>[]</DefaultValue>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.environmentVariables</PathName>\\n              <OptionName>value</OptionName>\\n              <OptionLabel>Environmental Variables</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>16384</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>The environment variable used to launch the app.</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Startup options</PathLabel>\\n          <PathName>application.environmentVariables</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>false</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"TextArea\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.jvmOpts</PathName>\\n              <OptionName>value</OptionName>\\n              <OptionLabel>JVM Options</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>16384</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Set the Java virtual machine parameters used to launch the application.</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>JVM</PathLabel>\\n          <PathName>application.jvmOpts</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>true</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"FileUploader\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.tomcatServerXml</PathName>\\n              <OptionName>serverConfig</OptionName>\\n              <OptionLabel>Tomcat Configuration File</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>256</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>false</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Use this file to replace Tomcat\'s server.xml configuration</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>Tomcat Configuration</PathLabel>\\n          <PathName>application.tomcatServerXml</PathName>\\n        </ConfigPath>\\n        <ConfigPath>\\n          <HiddenPath>true</HiddenPath>\\n          <ConfigOptions>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern>^[A-Za-z0-9_\\\\-.]{1,64}$</RegexPattern>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.package</PathName>\\n              <OptionName>label</OptionName>\\n              <OptionLabel>Package Label</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>64</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Web+ will use this version of the deployment package to deploy ECS instances.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.package</PathName>\\n              <OptionName>storageKey</OptionName>\\n              <OptionLabel>Package File Name</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>256</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Web+ will deploy this file to the ECS instance.</OptionDescription>\\n            </ConfigOption>\\n            <ConfigOption>\\n              <MinValue>-1</MinValue>\\n              <ValueType>String</ValueType>\\n              <RegexPattern/>\\n              <EditorType>{\\"component\\":\\"Input\\",\\"props\\":{}}</EditorType>\\n              <DefaultValue/>\\n              <MaxValue>-1</MaxValue>\\n              <RegexDesc/>\\n              <PathName>application.package</PathName>\\n              <OptionName>url</OptionName>\\n              <OptionLabel>Package URL</OptionLabel>\\n              <ChangeSeverity>NoInterruption</ChangeSeverity>\\n              <ReadonlyOption>false</ReadonlyOption>\\n              <MaxLength>1024</MaxLength>\\n              <ValueOptions/>\\n              <HiddenOption>true</HiddenOption>\\n              <MinLength>0</MinLength>\\n              <OptionDescription>Configure the URL of package.</OptionDescription>\\n            </ConfigOption>\\n          </ConfigOptions>\\n          <PathLabel>webx.configindex.path.application.application-package.msg</PathLabel>\\n          <PathName>application.package</PathName>\\n        </ConfigPath>\\n      </ConfigPaths>\\n    </ConfigGroup>\\n  </ConfigGroups>\\n  <StackName>Tomcat 8.5 / Java 8 / Aliyun Linux 2.1903</StackName>\\n</DescribeConfigIndexResponse>\\n","errorExample":""}]',
      'title' => '查询配置索引',
      'summary' => '调用DescribeConfigIndex查询配置索引。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ValidateConfigSetting' => 
    array (
      'path' => '/pop/v1/wam/config/configSetting/validate',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境ID',
            'type' => 'string',
            'required' => false,
            'example' => 'we-5d3eaaea2977ca5251e*****',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置模板ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wct-5d3e9d2a2977ca5251e*****',
          ),
        ),
        2 => 
        array (
          'name' => 'StackId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '栈ID',
            'type' => 'string',
            'required' => false,
            'example' => 'ws-6c937c98a9c0296d0c48*****',
          ),
        ),
        3 => 
        array (
          'name' => 'OptionSettings',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义配置项数据，JSON数组，包含以下字段：
- `path`：配置项路径
- `name`：配置项名称
- `value`：配置值',
            'type' => 'string',
            'required' => false,
            'example' => '[{"path":"resources.ecs.autoScaling", "name":"instanceNum","value":"10"},     {"path":"application.option", "name":"port","value":"100"}]',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success

',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '170E6BDE-8ACA-4013-B1D6-F0C2AAD*****',
              ),
              'ConfigValidationResults' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ConfigValidationResult' => 
                  array (
                    'description' => '配置有效性验证结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OptionName' => 
                        array (
                          'description' => '选项名称',
                          'type' => 'string',
                          'example' => 'port',
                        ),
                        'PathName' => 
                        array (
                          'description' => '路径名称',
                          'type' => 'string',
                          'example' => 'application.option',
                        ),
                        'ResultMessage' => 
                        array (
                          'description' => '结果信息',
                          'type' => 'string',
                          'example' => 'Parsing configuration values fails. Please make sure the value is consistent with the declared type. Currently supported types are: String, Integer, List, Boolean, Float, Json.',
                        ),
                        'ResultSeverity' => 
                        array (
                          'description' => '结果重要性',
                          'type' => 'string',
                          'example' => 'Error',
                        ),
                        'ConfigOption' => 
                        array (
                          'description' => '配置可选项',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RegexDesc' => 
                            array (
                              'description' => '正则匹配描述',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'MaxValue' => 
                            array (
                              'description' => '最大值',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '65535',
                            ),
                            'EditorType' => 
                            array (
                              'description' => '编辑类型',
                              'type' => 'string',
                              'example' => '{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}',
                            ),
                            'MinValue' => 
                            array (
                              'description' => '最小值',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1024',
                            ),
                            'DefaultValue' => 
                            array (
                              'description' => '默认值',
                              'type' => 'string',
                              'example' => '8080',
                            ),
                            'MaxLength' => 
                            array (
                              'description' => '最大长度',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '-1',
                            ),
                            'OptionLabel' => 
                            array (
                              'description' => '可选项标签',
                              'type' => 'string',
                              'example' => 'Server Port',
                            ),
                            'RegexPattern' => 
                            array (
                              'description' => '正则匹配模式',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'ChangeSeverity' => 
                            array (
                              'description' => '变更重要性',
                              'type' => 'string',
                              'example' => 'NoInterruption',
                            ),
                            'OptionDescription' => 
                            array (
                              'description' => '可选项描述信息',
                              'type' => 'string',
                              'example' => 'This port will be used as the HTTP service port after the application is launched, and ports from 1024 to 65535 can be used.',
                            ),
                            'OptionName' => 
                            array (
                              'description' => '可选项名称',
                              'type' => 'string',
                              'example' => 'port',
                            ),
                            'PathName' => 
                            array (
                              'description' => '路径名称',
                              'type' => 'string',
                              'example' => 'application.option',
                            ),
                            'HiddenOption' => 
                            array (
                              'description' => '是否为隐藏选项',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'ValueType' => 
                            array (
                              'description' => '值类型',
                              'type' => 'string',
                              'example' => 'Integer',
                            ),
                            'MinLength' => 
                            array (
                              'description' => '最小长度',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'ValueOptions' => 
                            array (
                              'description' => '值可选项',
                              'type' => 'string',
                              'example' => '""',
                            ),
                            'ReadonlyOption' => 
                            array (
                              'description' => '是否为只读选项',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"170E6BDE-8ACA-4013-B1D6-F0C2AAD*****\\",\\n  \\"ConfigValidationResults\\": {\\n    \\"ConfigValidationResult\\": [\\n      {\\n        \\"ResultMessage\\": \\"Parsing configuration values fails. Please make sure the value is consistent with the declared type. Currently supported types are: String, Integer, List, Boolean, Float, Json.\\",\\n        \\"OptionName\\": \\"port\\",\\n        \\"PathName\\": \\"application.option\\",\\n        \\"ResultSeverity\\": \\"Error\\",\\n        \\"ConfigOption\\": {\\n          \\"RegexDesc\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"MaxValue\\": 65535,\\n          \\"EditorType\\": \\"{\\\\\\\\\\\\\\"component\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"NumberPicker\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"props\\\\\\\\\\\\\\":{}}\\",\\n          \\"MinValue\\": 1024,\\n          \\"OptionLabel\\": \\"Server Port\\",\\n          \\"MaxLength\\": -1,\\n          \\"DefaultValue\\": \\"8080\\",\\n          \\"RegexPattern\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"OptionDescription\\": \\"This port will be used as the HTTP service port after the application is launched, and ports from 1024 to 65535 can be used.\\",\\n          \\"ChangeSeverity\\": \\"NoInterruption\\",\\n          \\"OptionName\\": \\"port\\",\\n          \\"PathName\\": \\"application.option\\",\\n          \\"HiddenOption\\": false,\\n          \\"ValueType\\": \\"Integer\\",\\n          \\"MinLength\\": 0,\\n          \\"ValueOptions\\": \\"\\\\\\"\\\\\\"\\",\\n          \\"ReadonlyOption\\": false\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<ValidateConfigSettingResponse>\\n  <ConfigValidationResults>\\n    <ConfigValidationResult>\\n      <ResultSeverity>Error</ResultSeverity>\\n      <ConfigOption>\\n        <MinValue>1024</MinValue>\\n        <ValueType>Integer</ValueType>\\n        <RegexPattern/>\\n        <EditorType>{\\"component\\":\\"NumberPicker\\",\\"props\\":{}}</EditorType>\\n        <DefaultValue>8080</DefaultValue>\\n        <MaxValue>65535</MaxValue>\\n        <RegexDesc/>\\n        <PathName>application.option</PathName>\\n        <OptionName>port</OptionName>\\n        <OptionLabel>Server Port</OptionLabel>\\n        <ChangeSeverity>NoInterruption</ChangeSeverity>\\n        <ReadonlyOption>false</ReadonlyOption>\\n        <MaxLength>-1</MaxLength>\\n        <ValueOptions/>\\n        <HiddenOption>false</HiddenOption>\\n        <MinLength>0</MinLength>\\n        <OptionDescription>This port will be used as the HTTP service port after the application is launched, and ports from 1024 to 65535 can be used.</OptionDescription>\\n      </ConfigOption>\\n      <ResultMessage>Parsing configuration values fails. Please make sure the value is consistent with the declared type. Currently supported types are: String, Integer, List, Boolean, Float, Json.</ResultMessage>\\n      <PathName>application.option</PathName>\\n      <OptionName>port</OptionName>\\n    </ConfigValidationResult>\\n  </ConfigValidationResults>\\n  <Message>success</Message>\\n  <RequestId>6112EBD9-E35E-4D98-91D5-5E302F7*****</RequestId>\\n  <Code>OK</Code>\\n</ValidateConfigSettingResponse>","errorExample":""}]',
      'title' => '验证一个配置的设置有效性',
      'summary' => '来验证一个配置的设置有效性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteChange' => 
    array (
      'path' => '/pop/v1/wam/change',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChangeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更ID，将删除此变更',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'wc-5d3a963d5802611c4dd*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '671FBCF3-D384-4DC4-B6F4-028C28E*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'OSSDisabled',
            'errorMessage' => 'You have not activated the OSS service and cannot use the WebPlus service. Please go to the OSS console (https://oss.console.aliyun.com) to activate OSS and try again.',
          ),
          1 => 
          array (
            'errorCode' => 'OSSApiCallFailed',
            'errorMessage' => 'When initializing applications, updating configurations, or destroying applications, WebPlus attempts to communicate with OSS through API communication. An OSS service throw error occurred. The bucket or the file does not exist.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"671FBCF3-D384-4DC4-B6F4-028C28E*****\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<DeleteChangeResponse>\\n  <Message>success</Message>\\n  <RequestId>671FBCF3-D384-4DC4-B6F4-028C28*****</RequestId>\\n  <Code>OK</Code>\\n</DeleteChangeResponse>","errorExample":""}]',
      'title' => '删除一个变更',
      'summary' => '调用DeleteChange删除一个变更。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PauseChange' => 
    array (
      'path' => '/pop/v1/wam/change/pause',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChangeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '变更ID，将暂停此变更操作',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'wc-5d3fabad56fd7c14ac9*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'EnvChange' => 
              array (
                'description' => '环境变更信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1564453805573',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d3fabad56fd7c14ac9*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID，变更操作所对应的环境',
                    'type' => 'string',
                    'example' => 'we-5d39b8ba6786bd4b149*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success

',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BF62BC0A-6672-41A2-8EE5-D5034AB*****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"BF62BC0A-6672-41A2-8EE5-D5034AB*****\\",\\n  \\"EnvChange\\": {\\n    \\"StartTime\\": \\"1564453805573\\",\\n    \\"EnvId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangeId\\": \\"wc-5d3fabad56fd7c14ac9*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<PauseChangeResponse>\\n  <Message>success</Message>\\n  <EnvChange>\\n    <EnvId>we-5d39b8ba6786bd4b149*****</EnvId>\\n    <StartTime>1564120637891</StartTime>\\n    <ChangeId>wc-5d3fabad56fd7c14ac9*****</ChangeId>\\n  </EnvChange>\\n  <RequestId>97CEF6FD-0266-4C15-8745-9325E2A*****</RequestId>\\n  <Code>OK</Code>\\n</PauseChangeResponse>\\n","errorExample":""}]',
      'title' => '暂停一个未完成的变更操作',
      'summary' => '来暂停一个未完成的变更操作。',
      'description' => '>只能针对处于**变更中**状态的变更进行暂停变更操作。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeChange' => 
    array (
      'path' => '/pop/v1/wam/changeInfo',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境ID，将查询此环境内所有变更信息',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'we-5d245f7f1f773f090a0d****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChangeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更ID，将查询此变更ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wc-5d245f94f314934e2ab1****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '91AF2647-8A0B-47FE-8AD4-AE49AA79****',
              ),
              'Change' => 
              array (
                'description' => '变更信息',
                'type' => 'object',
                'properties' => 
                array (
                  'ChangePaused' => 
                  array (
                    'description' => '变更是否被暂停',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'ChangeDescription' => 
                  array (
                    'description' => '变更描述',
                    'type' => 'string',
                    'example' => 'apply env we-5d39b8ba6786bd4b149*****',
                  ),
                  'FinishTime' => 
                  array (
                    'description' => '变更完成时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562664854330',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '变更最后更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562664854381',
                  ),
                  'ChangeTimedout' => 
                  array (
                    'description' => '变更是否超时',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '变更创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562664852417',
                  ),
                  'ChangeMessage' => 
                  array (
                    'description' => '变更消息',
                    'type' => 'string',
                    'example' => 'changeMessage',
                  ),
                  'ActionName' => 
                  array (
                    'description' => '变更操作名称',
                    'type' => 'string',
                    'example' => 'Apply',
                  ),
                  'ChangeFinished' => 
                  array (
                    'description' => '变更是否完成',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'CreateUsername' => 
                  array (
                    'description' => '变更创建者',
                    'type' => 'string',
                    'example' => 'user1',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d3a963d5802611c4dd*****',
                  ),
                  'ChangeAborted' => 
                  array (
                    'description' => '变更是否被中止',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'ChangeSucceed' => 
                  array (
                    'description' => '变更是否成功',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '变更所属环境ID',
                    'type' => 'string',
                    'example' => 'we-5d245f7f1f773f090a0*****',
                  ),
                  'ChangeName' => 
                  array (
                    'description' => '变更名称',
                    'type' => 'string',
                    'example' => 'apply.env',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ChangeNotExists',
            'errorMessage' => 'The change record could not be found based on the change ID specified, please double confirm the resource is still exists.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"91AF2647-8A0B-47FE-8AD4-AE49AA79****\\",\\n  \\"Change\\": {\\n    \\"ChangeDescription\\": \\"apply env we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangePaused\\": false,\\n    \\"UpdateTime\\": 1562664854381,\\n    \\"FinishTime\\": 1562664854330,\\n    \\"ChangeTimedout\\": false,\\n    \\"CreateTime\\": 1562664852417,\\n    \\"ChangeMessage\\": \\"changeMessage\\",\\n    \\"ActionName\\": \\"Apply\\",\\n    \\"CreateUsername\\": \\"user1\\",\\n    \\"ChangeFinished\\": true,\\n    \\"ChangeId\\": \\"wc-5d3a963d5802611c4dd*****\\",\\n    \\"ChangeAborted\\": false,\\n    \\"ChangeSucceed\\": true,\\n    \\"EnvId\\": \\"we-5d245f7f1f773f090a0*****\\",\\n    \\"ChangeName\\": \\"apply.env\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeChangeResponse>\\n  <Message>success</Message>\\n  <Change>\\n    <ChangeName>apply.env</ChangeName>\\n    <ActionName>Apply</ActionName>\\n    <ChangeAborted>false</ChangeAborted>\\n    <ChangeTimedout>false</ChangeTimedout>\\n    <UpdateTime>1564120665714</UpdateTime>\\n    <ChangeDescription>apply env we-5d39b8ba6786bd4b1495****</ChangeDescription>\\n    <EnvId>we-5d39b8ba6786bd4b1495****</EnvId>\\n    <ChangeSucceed>true</ChangeSucceed>\\n    <FinishTime>1564120665679</FinishTime>\\n    <CreateUsername>user1</CreateUsername>\\n    <CreateTime>1564120637891</CreateTime>\\n    <ChangeId>wc-5d3a963d5802611c4ddc****</ChangeId>\\n    <ChangeFinished>true</ChangeFinished>\\n    <ChangeMessage/>\\n    <ChangePaused>false</ChangePaused>\\n  </Change>\\n  <RequestId>97CEF6FD-0266-4C15-8745-9325E2AB****</RequestId>\\n  <Code>OK</Code>\\n</DescribeChangeResponse>\\n","errorExample":""}]',
      'title' => '查询变更信息',
      'summary' => '查询给定环境内所有变更信息或给定变更ID的变更信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeChanges' => 
    array (
      'path' => '/pop/v1/wam/change',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境ID，将查询此环境内所有变更信息',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'we-5d245f7f1f773f090a0d****',
          ),
        ),
        1 => 
        array (
          'name' => 'ActionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的变更类型',
            'type' => 'string',
            'required' => false,
            'example' => 'Termination',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面内结果数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'Changes' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Change' => 
                  array (
                    'description' => '变更信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ChangePaused' => 
                        array (
                          'description' => '变更是否被暂停',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ChangeDescription' => 
                        array (
                          'description' => '变更描述',
                          'type' => 'string',
                          'example' => 'apply env we-5d39b8ba6786bd4b149*****',
                        ),
                        'FinishTime' => 
                        array (
                          'description' => '变更完成时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562664854330',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '变更最后更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562664854381',
                        ),
                        'ChangeTimedout' => 
                        array (
                          'description' => '变更是否超时',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '变更创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562664852417',
                        ),
                        'ChangeMessage' => 
                        array (
                          'description' => '变更消息',
                          'type' => 'string',
                          'example' => 'changeMessage',
                        ),
                        'ActionName' => 
                        array (
                          'description' => '变更操作名称',
                          'type' => 'string',
                          'example' => 'Apply',
                        ),
                        'ChangeFinished' => 
                        array (
                          'description' => '变更是否完成',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'CreateUsername' => 
                        array (
                          'description' => '变更创建者',
                          'type' => 'string',
                          'example' => 'user1',
                        ),
                        'ChangeId' => 
                        array (
                          'description' => '变更ID',
                          'type' => 'string',
                          'example' => 'wc-5d3a963d5802611c4dd*****',
                        ),
                        'ChangeAborted' => 
                        array (
                          'description' => '变更是否被中止',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ChangeSucceed' => 
                        array (
                          'description' => '变更是否成功',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'EnvId' => 
                        array (
                          'description' => '变更所属环境ID',
                          'type' => 'string',
                          'example' => 'we-5d245f7f1f773f090a0*****',
                        ),
                        'ChangeName' => 
                        array (
                          'description' => '变更名称',
                          'type' => 'string',
                          'example' => 'apply.env',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '查询结果总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4046',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '91AF2647-8A0B-47FE-8AD4-AE49AA79****',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'PageSize' => 
              array (
                'description' => '单个查询页面内结果数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '查询页面数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"91AF2647-8A0B-47FE-8AD4-AE49AA79****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 4046,\\n  \\"Changes\\": {\\n    \\"Change\\": [\\n      {\\n        \\"ChangeDescription\\": \\"apply env we-5d39b8ba6786bd4b149*****\\",\\n        \\"ChangePaused\\": false,\\n        \\"UpdateTime\\": 1562664854381,\\n        \\"FinishTime\\": 1562664854330,\\n        \\"ChangeTimedout\\": false,\\n        \\"CreateTime\\": 1562664852417,\\n        \\"ChangeMessage\\": \\"changeMessage\\",\\n        \\"ActionName\\": \\"Apply\\",\\n        \\"CreateUsername\\": \\"user1\\",\\n        \\"ChangeFinished\\": true,\\n        \\"ChangeId\\": \\"wc-5d3a963d5802611c4dd*****\\",\\n        \\"ChangeAborted\\": false,\\n        \\"ChangeSucceed\\": true,\\n        \\"EnvId\\": \\"we-5d245f7f1f773f090a0*****\\",\\n        \\"ChangeName\\": \\"apply.env\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeChangesResponse>\\n  <PageNumber>1</PageNumber>\\n  <Changes>\\n    <Change>\\n      <ChangeName>apply.env</ChangeName>\\n      <ActionName>Apply</ActionName>\\n      <ChangeAborted>false</ChangeAborted>\\n      <ChangeTimedout>false</ChangeTimedout>\\n      <UpdateTime>1564120665714</UpdateTime>\\n      <ChangeDescription>apply env we-5d39b8ba6786bd4b1495****</ChangeDescription>\\n      <EnvId>we-5d39b8ba6786bd4b1495****</EnvId>\\n      <ChangeSucceed>true</ChangeSucceed>\\n      <FinishTime>1564120665679</FinishTime>\\n      <CreateUsername>user1</CreateUsername>\\n      <CreateTime>1564120637891</CreateTime>\\n      <ChangeId>wc-5d3a963d5802611c4ddc****</ChangeId>\\n      <ChangeMessage/>\\n      <ChangeFinished>true</ChangeFinished>\\n      <ChangePaused>false</ChangePaused>\\n    </Change>\\n  </Changes>\\n  <TotalCount>12</TotalCount>\\n  <Message>success</Message>\\n  <PageSize>1</PageSize>\\n  <RequestId>676F2994-039A-46B5-A30A-CABB7FE0****</RequestId>\\n  <Code>OK</Code>\\n</DescribeChangesResponse>","errorExample":""}]',
      'title' => '查询变更信息列表',
      'summary' => '查询所有变更信息或给定环境内所有变更信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AbortChange' => 
    array (
      'path' => '/pop/v1/wam/change/abort',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChangeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '变更ID，将中止此变更',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'wc-5d3a963d5802611c4ddc****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'EnvChange' => 
              array (
                'description' => '被中止的变更信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '该变更的开始执行时间戳',
                    'type' => 'string',
                    'example' => '1557911256210',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5cdbd6d884b53b4bc95*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d39b8ba6786bd4b149*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '14A65FB3-DFD6-4D9A-83EA-9259C2D3****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'ChangeOnAborting',
            'errorMessage' => 'The change is being canceled. Please do not cancel again.',
          ),
          1 => 
          array (
            'errorCode' => 'ChangeFinished',
            'errorMessage' => 'An error occurred while stopping the change. The change is already complete.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"14A65FB3-DFD6-4D9A-83EA-9259C2D3****\\",\\n  \\"EnvChange\\": {\\n    \\"StartTime\\": \\"1557911256210\\",\\n    \\"EnvId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangeId\\": \\"wc-5cdbd6d884b53b4bc95*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n\\n<AbortChangeResponse>\\n  <Message>success</Message>\\n  <EnvChange>\\n    <ChangeId>wc-5cdbd79a84b53b4bc958****</ChangeId>\\n    <EnvId>we-5cdbd64084b53b4bc958****</EnvId>\\n    <StartTime>1557911450434</StartTime>\\n  </EnvChange>\\n  <RequestId>BED39BFD-3CBF-42F0-9711-C91E32BF****</RequestId>\\n  <Code>OK</Code>\\n</AbortChangeResponse>","errorExample":""}]',
      'title' => '可以中止一次变更',
      'summary' => '使用AbortChange可以中止一次变更。',
      'description' => '- 当此API调用后，Web+会等待正在进行的变更步骤执行完毕后再停止变更。
- 当环境有变更正在被终止时，不可重复调用此接口。
- 变更在中止后不可恢复执行。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResumeChange' => 
    array (
      'path' => '/pop/v1/wam/change/resume',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChangeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '变更ID，将恢复此变更操作',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'wc-5d3fabad56fd7c14ac9*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'EnvChange' => 
              array (
                'description' => '环境变更信息',
                'type' => 'object',
                'properties' => 
                array (
                  'StartTime' => 
                  array (
                    'description' => '变更开始时间',
                    'type' => 'string',
                    'example' => '1564453805573',
                  ),
                  'ChangeId' => 
                  array (
                    'description' => '变更ID',
                    'type' => 'string',
                    'example' => 'wc-5d3fabad56fd7c14ac9*****',
                  ),
                  'EnvId' => 
                  array (
                    'description' => '环境ID',
                    'type' => 'string',
                    'example' => 'we-5d39b8ba6786bd4b149*****',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success

',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F38283EF-B83B-47C0-992D-1DC450DE****',
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F38283EF-B83B-47C0-992D-1DC450DE****\\",\\n  \\"EnvChange\\": {\\n    \\"StartTime\\": \\"1564453805573\\",\\n    \\"EnvId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n    \\"ChangeId\\": \\"wc-5d3fabad56fd7c14ac9*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<ResumeChangeResponse>\\n  <Message>success</Message>\\n  <EnvChange>\\n    <EnvId>we-5d39b8ba6786bd4b149*****</EnvId>\\n    <StartTime>1564453805573</StartTime>\\n    <ChangeId>wc-5d3fabad56fd7c14ac9*****</ChangeId>\\n  </EnvChange>\\n  <RequestId>97CEF6FD-0266-4C15-8745-9325E2AB****</RequestId>\\n  <Code>OK</Code>\\n</ResumeChangeResponse>\\n","errorExample":""}]',
      'title' => '恢复一个被暂停的变更操作',
      'summary' => '来恢复一个被暂停的变更操作。',
      'description' => '>被恢复的变更必须是处于**已停止**状态。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeEvents' => 
    array (
      'path' => '/pop/v1/wam/event',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnvId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境ID，将查询此环境上的事件',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'we-5d1dac8e08350d1dd94*****',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询事件的开始时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1562225800000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询事件的结束时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1562225909800',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页面数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'ChangeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变更ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wc-d2eeaaa1405481bdd8cb92c*****',
          ),
        ),
        6 => 
        array (
          'name' => 'LastChangeEvents',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最近更新事件',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'ReverseByTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回列表是否按时间戳倒序排序',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'TotalCount' => 
              array (
                'description' => '查询结果总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F975CCFF-CA3D-41C2-8004-362D232*****',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'PageSize' => 
              array (
                'description' => '查询页面大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '查询页面数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Events' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Event' => 
                  array (
                    'description' => '事件列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PrimaryUserName' => 
                        array (
                          'description' => '主用户名',
                          'type' => 'string',
                          'example' => '""',
                        ),
                        'ObjectType' => 
                        array (
                          'description' => '对象类型',
                          'type' => 'string',
                          'example' => 'vpc',
                        ),
                        'EnventName' => 
                        array (
                          'description' => '事件名称',
                          'type' => 'string',
                          'example' => 'envName',
                        ),
                        'EventTimestamp' => 
                        array (
                          'description' => '事件时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1564064041112',
                        ),
                        'SecondUserName' => 
                        array (
                          'description' => '次用户名',
                          'type' => 'string',
                          'example' => '""',
                        ),
                        'MsgCode' => 
                        array (
                          'description' => '消息代码',
                          'type' => 'string',
                          'example' => 'webx.wam.change.vpc.create.success',
                        ),
                        'ObjectName' => 
                        array (
                          'description' => '对象名称',
                          'type' => 'string',
                          'example' => 'we*****-default-vpc',
                        ),
                        'EventMessage' => 
                        array (
                          'description' => '事件消息',
                          'type' => 'string',
                          'example' => 'Change wc-5d39b8bc6786bd4b149***** finish successfully, taking 108 seconds<',
                        ),
                        'EventId' => 
                        array (
                          'description' => '事件ID',
                          'type' => 'string',
                          'example' => 'we-5d39b8ba6786bd4b149*****',
                        ),
                        'ObjectAttrs' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ObjectAttr' => 
                            array (
                              'description' => '对象属性列表',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'AttributeName' => 
                                  array (
                                    'description' => '属性名称',
                                    'type' => 'string',
                                    'example' => '""',
                                  ),
                                  'AttributeValue' => 
                                  array (
                                    'description' => '属性值',
                                    'type' => 'string',
                                    'example' => '""',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'AppId' => 
                        array (
                          'description' => '应用ID',
                          'type' => 'string',
                          'example' => 'wa-5d1d9d8c85c7f86e2ef*****',
                        ),
                        'EventLevel' => 
                        array (
                          'description' => '事件等级',
                          'type' => 'string',
                          'example' => 'INFO',
                        ),
                        'ObjectId' => 
                        array (
                          'description' => '对象ID',
                          'type' => 'string',
                          'example' => 'vpc-wz9e6y22o3o91nuy*****',
                        ),
                        'MsgParams' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MsgParam' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '消息参数',
                                'type' => 'string',
                                'example' => 'we-5d1dac8e08350d1dd94*****',
                              ),
                            ),
                          ),
                        ),
                        'PrimaryUserId' => 
                        array (
                          'description' => '主要用户ID',
                          'type' => 'string',
                          'example' => '1036052989950239',
                        ),
                        'EnvId' => 
                        array (
                          'description' => '环境ID',
                          'type' => 'string',
                          'example' => 'we-5d1dac8e08350d1dd94*****',
                        ),
                        'TraceId' => 
                        array (
                          'description' => '事件跟踪ID',
                          'type' => 'string',
                          'example' => 'wc-5d1dac8f08350d1dd94*****',
                        ),
                        'SecondUserId' => 
                        array (
                          'description' => '次用户ID',
                          'type' => 'string',
                          'example' => '""',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '响应代码，若成功请求为OK',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceAuthFailed',
            'errorMessage' => 'The specified resource does not exist or it does not belong to this Alibaba Cloud account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F975CCFF-CA3D-41C2-8004-362D232*****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"success\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"Events\\": {\\n    \\"Event\\": [\\n      {\\n        \\"PrimaryUserName\\": \\"\\\\\\"\\\\\\"\\",\\n        \\"ObjectType\\": \\"vpc\\",\\n        \\"EnventName\\": \\"envName\\",\\n        \\"SecondUserName\\": \\"\\\\\\"\\\\\\"\\",\\n        \\"EventTimestamp\\": 1564064041112,\\n        \\"ObjectName\\": \\"we*****-default-vpc\\",\\n        \\"MsgCode\\": \\"webx.wam.change.vpc.create.success\\",\\n        \\"EventId\\": \\"we-5d39b8ba6786bd4b149*****\\",\\n        \\"EventMessage\\": \\"Change wc-5d39b8bc6786bd4b149***** finish successfully, taking 108 seconds<\\",\\n        \\"AppId\\": \\"wa-5d1d9d8c85c7f86e2ef*****\\",\\n        \\"EventLevel\\": \\"INFO\\",\\n        \\"ObjectId\\": \\"vpc-wz9e6y22o3o91nuy*****\\",\\n        \\"PrimaryUserId\\": \\"1036052989950239\\",\\n        \\"EnvId\\": \\"we-5d1dac8e08350d1dd94*****\\",\\n        \\"TraceId\\": \\"wc-5d1dac8f08350d1dd94*****\\",\\n        \\"SecondUserId\\": \\"\\\\\\"\\\\\\"\\",\\n        \\"ObjectAttrs\\": {\\n          \\"ObjectAttr\\": [\\n            {\\n              \\"AttributeValue\\": \\"\\\\\\"\\\\\\"\\",\\n              \\"AttributeName\\": \\"\\\\\\"\\\\\\"\\"\\n            }\\n          ]\\n        },\\n        \\"MsgParams\\": {\\n          \\"MsgParam\\": [\\n            \\"we-5d1dac8e08350d1dd94*****\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n\\n<DescribeEventsResponse>\\n  <PageNumber>10</PageNumber>\\n  <TotalCount>56</TotalCount>\\n  <Message>success</Message>\\n  <PageSize>1</PageSize>\\n  <RequestId>706D234F-37E4-4105-B226-92CA15D*****</RequestId>\\n  <Events>\\n    <Event>\\n      <AppId>wa-5d1af9c802470221ab7*****</AppId>\\n      <EventId>f0229b5a-79d2-4412-b039-f07fc96*****</EventId>\\n      <MsgCode>webx.wam.change.apply.success</MsgCode>\\n      <ObjectAttrs/>\\n      <EventLevel>INFO</EventLevel>\\n      <ObjectType>change</ObjectType>\\n      <EventMessage>Change wc-5d39b8bc6786bd4b149***** finish successfully, taking 108 seconds</EventMessage>\\n      <EnvId>we-5d39b8ba6786bd4b149*****</EnvId>\\n      <EventTimestamp>1564064041112</EventTimestamp>\\n      <PrimaryUserId>10360529899*****</PrimaryUserId>\\n      <MsgParams>\\n        <MsgParam>wc-5d39b8bc6786bd4b149*****</MsgParam>\\n        <MsgParam>108</MsgParam>\\n      </MsgParams>\\n      <TraceId>wc-5d39b8bc6786bd4b149*****</TraceId>\\n      <ObjectName/>\\n      <ObjectId>wc-5d39b8bc6786bd4b149*****</ObjectId>\\n    </Event>\\n  </Events>\\n  <Code>OK</Code>\\n</DescribeEventsResponse>","errorExample":""}]',
      'title' => '查询异常事件列表',
      'summary' => '查询事件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateOrder' => 
    array (
      'path' => '/pop/v1/paas/createOrder',
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
      'deprecated' => true,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'OrderDetail' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Data' => 
                  array (
                    'type' => 'string',
                  ),
                  'RequestId' => 
                  array (
                    'type' => 'string',
                  ),
                  'Success' => 
                  array (
                    'type' => 'boolean',
                  ),
                  'Code' => 
                  array (
                    'type' => 'string',
                  ),
                  'Message' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'webplus.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'webplus.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'webplus.cn-hangzhou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'webplus.cn-hangzhou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'webplus-vpc.cn-hongkong.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'webplus.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'webplus.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
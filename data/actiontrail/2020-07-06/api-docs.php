<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Actiontrail',
    'version' => '2020-07-06',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 74996,
      'title' => '地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    1 => 
    array (
      'id' => 74998,
      'title' => '跟踪',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTrail',
        1 => 'DeleteTrail',
        2 => 'StartLogging',
        3 => 'UpdateTrail',
        4 => 'StopLogging',
        5 => 'GetTrailStatus',
        6 => 'DescribeTrails',
      ),
    ),
    2 => 
    array (
      'id' => 75006,
      'title' => '事件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'LookupEvents',
      ),
    ),
    3 => 
    array (
      'id' => 75008,
      'title' => '数据回补',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDeliveryHistoryJob',
        1 => 'DeleteDeliveryHistoryJob',
        2 => 'ListDeliveryHistoryJobs',
        3 => 'GetDeliveryHistoryJob',
      ),
    ),
    4 => 
    array (
      'id' => 169130,
      'title' => 'AccessKey审计',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAccessKeyLastUsedEvents',
        1 => 'GetAccessKeyLastUsedInfo',
        2 => 'GetAccessKeyLastUsedIps',
        3 => 'GetAccessKeyLastUsedProducts',
        4 => 'GetAccessKeyLastUsedResources',
      ),
    ),
    5 => 
    array (
      'id' => 189558,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetGlobalEventsStorageRegion',
        1 => 'UpdateGlobalEventsStorageRegion',
        2 => 'EnableInsight',
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
    'DescribeRegions' => 
    array (
      'summary' => '查询操作审计支持的阿里云地域。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域名称支持的语言，取值：  

- zh-CN：中文。
- en-US（默认值）：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'en-US',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ACA7C814-12BC-4D81-A0D2-72071C9D6D2C',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '地域列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionId' => 
                        array (
                          'title' => '地域ID',
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'RegionEndpoint' => 
                        array (
                          'title' => '地域链接地址',
                          'description' => '接入地址。',
                          'type' => 'string',
                          'example' => 'actiontrail.cn-hangzhou.aliyuncs.com',
                        ),
                        'LocalName' => 
                        array (
                          'title' => '地域名称',
                          'description' => '地域名称。  

> 当AcceptLanguage取值为zh-CN时，返回中文。当AcceptLanguage取值为en-US或不指定时，返回英文。',
                          'type' => 'string',
                          'example' => 'China (Hangzhou)',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ACA7C814-12BC-4D81-A0D2-72071C9D6D2C\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"RegionEndpoint\\": \\"actiontrail.cn-hangzhou.aliyuncs.com\\",\\n        \\"LocalName\\": \\"China (Hangzhou)\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询可以使用的阿里云地域',
      'description' => '更多信息，请参见[地域和可用区](~~40654~~)。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
    ),
    'CreateTrail' => 
    array (
      'summary' => '操作审计默认为每个阿里云账号记录最近90天的事件。为了能够追溯90天以前的事件，您可以创建跟踪，将操作事件投递到对象存储OSS、日志服务SLS或大数据计算服务MaxCompute，以便对事件进行分析。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建的跟踪名称。  
长度为6～36个字符，必须以小写英文字母开头，可包含小写英文字母、数字、短划线（-）和下划线（_）。
>同一个账号内跟踪名称不可重复。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'trail-test',
          ),
        ),
        1 => 
        array (
          'name' => 'OssBucketName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪投递的OSS存储空间。  
长度为3～63个字符，必须以小写英文字母或者数字开头，可包含小写英文字母、数字和短划线（-）。  

> OssBucketName、SlsProjectArn、MaxComputeProjectArn需至少指定其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'audit-log',
          ),
        ),
        2 => 
        array (
          'name' => 'OssKeyPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪投递的OSS存储空间文件名的前缀，可为空。  
长度为6～32个字符，必须以英文字母开头，可包含英文字母、数字、短划线（-）、正斜线（/）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'at-product-account-audit-B',
          ),
        ),
        3 => 
        array (
          'name' => 'OssWriteRoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作审计向对象存储OSS存储空间投递操作事件时，扮演的角色ARN。

- 如果不指定该参数，操作审计会通过创建服务关联角色来创建相应的资源。更多信息，请参见[操作审计服务关联角色](~~169244~~)。  
- 如果指定了该参数，当您需要将事件投递到本账号时，需要为RAM角色授予操作审计服务关联角色权限。当您需要将事件投递到其他账号时，需要为RAM角色绑定操作事件投递的系统权限策略。关于如何进行跨账号投递，请参见[将多个阿里云账号的事件投递到同一账号](~~207462~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
          ),
        ),
        4 => 
        array (
          'name' => 'SlsProjectArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪投递的日志服务项目的ARN。  

> OssBucketName、SlsProjectArn、MaxComputeProjectArn需至少指定其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:log:cn-shanghai:151266687691****:project/test-project',
          ),
        ),
        5 => 
        array (
          'name' => 'SlsWriteRoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作审计向日志服务项目投递操作事件时，扮演的角色ARN。

- 如果不指定该参数，操作审计会通过创建服务关联角色来创建相应的资源。更多信息，请参见[操作审计服务关联角色](~~169244~~)。
- 如果指定了该参数，当您需要将事件投递到本账号时，需要为RAM角色授予操作审计服务关联角色权限。当您需要将事件投递到其他账号时，需要为RAM角色绑定操作事件投递的系统权限策略。关于如何进行跨账号投递，请参见[将多个阿里云账号的事件投递到同一账号](~~207462~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
          ),
        ),
        6 => 
        array (
          'name' => 'EventRW',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '投递事件的读写类型，取值：
- Write（默认值）：写类型。
- Read：读类型。
- All：读类型和写类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'Write',
          ),
        ),
        7 => 
        array (
          'name' => 'TrailRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪的地域。  
默认值为All，表示跟踪全部地域的事件。  
您也可以指定具体的地域。关于地域的更多信息，请调用[DescribeRegions](~~213597~~)接口查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'All',
          ),
        ),
        8 => 
        array (
          'name' => 'IsOrganizationTrail',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否创建多账号跟踪，取值：

- true：创建多账号跟踪。
- false（默认值）：创建单账号跟踪。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxComputeProjectArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪投递的大数据计算服务项目的ARN。  

> OssBucketName、SlsProjectArn、MaxComputeProjectArn需至少指定其中一个参数。

> MaxComputeProjectArn中指定的大数据计算服务项目名称必须以actiontrail_作为前缀。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:odps:cn-hangzhou:151266687691****:project/actiontrail_****',
          ),
        ),
        10 => 
        array (
          'name' => 'MaxComputeWriteRoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作审计向大数据计算服务项目投递操作事件时，扮演的角色ARN。

- 如果不指定该参数，操作审计会通过创建服务关联角色来创建相应的资源。更多信息，请参见[操作审计服务关联角色](~~169244~~)。
- 如果指定了该参数，当您需要将事件投递到本账号时，需要为RAM角色授予操作审计服务关联角色权限。当您需要将事件投递到其他账号时，需要为RAM角色绑定操作事件投递的系统权限策略。关于如何进行跨账号投递，请参见[将多个阿里云账号的事件投递到同一账号](~~207462~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
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
              'SlsProjectArn' => 
              array (
                'description' => '跟踪投递的日志服务项目的ARN。',
                'type' => 'string',
                'example' => 'acs:log:cn-hangzhou:151266687691****:project/test-project',
              ),
              'OssWriteRoleArn' => 
              array (
                'description' => '操作审计向对象存储OSS存储空间投递操作事件时，扮演的角色ARN。',
                'type' => 'string',
                'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
              ),
              'EventRW' => 
              array (
                'description' => '投递事件的读写类型。',
                'type' => 'string',
                'example' => 'Write',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '442DDADF-DA58-4029-8E8B-82C73E9A7A70',
              ),
              'HomeRegion' => 
              array (
                'description' => '跟踪的Home地域。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'OssKeyPrefix' => 
              array (
                'description' => 'OSS存储空间文件名的前缀。',
                'type' => 'string',
                'example' => 'at-product-account-audit-B',
              ),
              'OssBucketName' => 
              array (
                'description' => 'OSS存储空间。',
                'type' => 'string',
                'example' => 'audit-log',
              ),
              'SlsWriteRoleArn' => 
              array (
                'description' => '操作审计向日志服务项目投递操作事件时，扮演的角色ARN。',
                'type' => 'string',
                'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
              ),
              'TrailRegion' => 
              array (
                'description' => '跟踪的地域。',
                'type' => 'string',
                'example' => 'All',
              ),
              'Name' => 
              array (
                'description' => '跟踪名称。',
                'type' => 'string',
                'example' => 'trail-test',
              ),
              'MaxComputeProjectArn' => 
              array (
                'description' => '跟踪投递的大数据计算服务项目的ARN。',
                'type' => 'string',
                'example' => 'acs:odps:cn-hangzhou:151266687691****:project/actiontrail_****',
              ),
              'MaxComputeWriteRoleArn' => 
              array (
                'description' => '操作审计向大数据计算服务项目投递操作事件时，扮演的角色ARN。',
                'type' => 'string',
                'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
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
            'errorCode' => 'InvalidDeliveryConfigurationException',
            'errorMessage' => 'You must specify at least one Log Service project or OSS bucket for a Trail.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPrefixException',
            'errorMessage' => 'The specified OSS bucket prefix is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidQueryParameter',
            'errorMessage' => 'The specified query parameter is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidTrailNameException',
            'errorMessage' => 'The specified Trail name is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'RepeatOssBucket',
            'errorMessage' => 'The specified OSS bucket is already in use. We recommend that you modify the existing Trail or specify another bucket.',
          ),
          5 => 
          array (
            'errorCode' => 'SlsProjectDoesNotExistException',
            'errorMessage' => 'The specified Log Service project does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'TrailAlreadyExistsException',
            'errorMessage' => 'The specified Trail name already exists.',
          ),
          7 => 
          array (
            'errorCode' => 'MaximumNumberOfOrganizationTrailExceeded',
            'errorMessage' => 'Your account can create only one organization trail.',
          ),
          8 => 
          array (
            'errorCode' => 'NotAllowCreateOrganizationTrail',
            'errorMessage' => 'Your account does not allow you to create organization trail. Submit a ticket to get customer support.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InsufficientBucketPolicyException',
            'errorMessage' => 'Access to the specified OSS bucket was denied.',
          ),
          1 => 
          array (
            'errorCode' => 'InsufficientSlsPolicyException',
            'errorMessage' => 'Access to the specified Log Service project was denied.',
          ),
          2 => 
          array (
            'errorCode' => 'MaximumNumberOfTrailsExceededException',
            'errorMessage' => 'The number of Trails in the same region exceeds the upper limit (5).',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'BucketDoesNotExistException',
            'errorMessage' => 'The specified OSS bucket does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SlsProjectArn\\": \\"acs:log:cn-hangzhou:151266687691****:project/test-project\\",\\n  \\"OssWriteRoleArn\\": \\"acs:ram::151266687691****:role/aliyunserviceroleforactiontrail\\",\\n  \\"EventRW\\": \\"Write\\",\\n  \\"RequestId\\": \\"442DDADF-DA58-4029-8E8B-82C73E9A7A70\\",\\n  \\"HomeRegion\\": \\"cn-hangzhou\\",\\n  \\"OssKeyPrefix\\": \\"at-product-account-audit-B\\",\\n  \\"OssBucketName\\": \\"audit-log\\",\\n  \\"SlsWriteRoleArn\\": \\"acs:ram::151266687691****:role/aliyunserviceroleforactiontrail\\",\\n  \\"TrailRegion\\": \\"All\\",\\n  \\"Name\\": \\"trail-test\\",\\n  \\"MaxComputeProjectArn\\": \\"acs:odps:cn-hangzhou:151266687691****:project/actiontrail_****\\",\\n  \\"MaxComputeWriteRoleArn\\": \\"acs:ram::151266687691****:role/aliyunserviceroleforactiontrail\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建跟踪',
      'description' => '> 通过API创建的跟踪默认处于**已关闭**状态，您需要调用接口[StartLogging](~~432246~~)开启跟踪，操作审计才能投递操作事件至目标云产品。

### 前提条件
创建跟踪之前，请您确保至少完成下列的一项存储配置：
- 投递到对象存储OSS

  请确保您已开通对象存储，且已创建存储空间（Bucket）。

- 投递到日志服务SLS
   
  请确保您已开通日志服务，且已创建日志项目。  
  > 创建跟踪时，操作审计会自动在目标日志项目下创建一个名为`actiontrail_<跟踪名称>`的日志库（Logstore），该日志库禁止其他数据写入，保证审计数据的准确性。

- 投递到大数据计算服务MaxCompute

  请确保您已开通大数据计算服务MaxCompute。

  > 创建跟踪时，操作审计会自动在项目管理中创建一个名为`actiontrail_<账号ID>`的项目，该项目禁止其他数据写入，保证审计数据的准确性。

### 使用说明
本文将提供一个示例，为您创建一个名为`trail-test`的单账号跟踪，将操作事件投递到名为`audit-log`的OSS存储空间中。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteTrail' => 
    array (
      'summary' => '删除操作审计跟踪。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的跟踪名称。

长度为6～36个字符，必须以小写英文字母开头，可包含小写英文字母、数字、短划线（-）和下划线（_）。

> 同一个账号内跟踪名称不可重复。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my-test',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0',
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
            'errorCode' => 'TrailNotFoundException',
            'errorMessage' => 'The specified Trail does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除跟踪',
      'description' => '本文将提供一个示例，删除名为`my-test`的跟踪。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartLogging' => 
    array (
      'summary' => '启用跟踪，开始将操作审计事件投递到 OSS 或 SLS。',
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要启用的跟踪名称。

长度为6～36个字符，必须以小写英文字母开头，可包含小写英文字母、数字、短划线（-）和下划线（_）。

> 同一个账号内跟踪名称不可重复。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'trail-test',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0',
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
            'errorCode' => 'TrailNotFoundException',
            'errorMessage' => 'The specified Trail does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '启用跟踪',
      'description' => '本文将提供一个示例，启用名为`trail-test`的跟踪。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
    ),
    'UpdateTrail' => 
    array (
      'summary' => '调整操作审计跟踪的配置信息。',
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要更新的跟踪名称。

长度为6～36个字符，必须以小写英文字母开头，可包含小写英文字母、数字、短划线（-）和下划线（_）。

> 同一个账号内跟踪名称不可重复。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'trail-test',
          ),
        ),
        1 => 
        array (
          'name' => 'OssBucketName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪投递的OSS存储空间名称。

长度为3～63个字符，必须以小写英文字母或者数字开头，可包含小写英文字母、数字和短划线（-）。

> 更新时必须确保该存储空间已经存在。',
            'type' => 'string',
            'required' => false,
            'example' => 'audit-log',
          ),
        ),
        2 => 
        array (
          'name' => 'OssKeyPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪投递的OSS存储空间文件名的前缀。

长度为6～32个字符，必须以英文字母开头，可包含英文字母、数字、短划线（-）、正斜线（/）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'at-product-account-audit-B',
          ),
        ),
        3 => 
        array (
          'name' => 'OssWriteRoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作审计向对象存储OSS存储空间投递操作事件时，扮演的角色ARN。

- 如果不指定该参数，操作审计会通过创建服务关联角色来创建相应的资源。更多信息，请参见[操作审计服务关联角色](~~169244~~)。
- 如果指定了该参数，当您需要将事件投递到本账号时，需要为RAM角色授予操作审计服务关联角色权限。当您需要将事件投递到其他账号时，需要为RAM角色绑定操作事件投递的系统权限策略。关于如何进行跨账号投递，请参见[将多个阿里云账号的事件投递到同一账号](~~207462~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
          ),
        ),
        4 => 
        array (
          'name' => 'SlsProjectArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪投递的日志服务项目的ARN。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:log:cn-shanghai:151266687691****:project/test-project',
          ),
        ),
        5 => 
        array (
          'name' => 'SlsWriteRoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作审计向日志服务项目投递操作事件时，扮演的角色ARN。

- 如果不指定该参数，操作审计会通过创建服务关联角色来创建相应的资源。更多信息，请参见[操作审计服务关联角色](~~169244~~)。
- 如果指定了该参数，当您需要将事件投递到本账号时，需要为RAM角色授予操作审计服务关联角色权限。当您需要将事件投递到其他账号时，需要为RAM角色绑定操作事件投递的系统权限策略。关于如何进行跨账号投递，请参见[将多个阿里云账号的事件投递到同一账号](~~207462~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
          ),
        ),
        6 => 
        array (
          'name' => 'EventRW',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '投递事件的读写类型，取值：
- Write（默认值）：写类型。
- Read：读类型。
- All：读类型和写类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'All',
          ),
        ),
        7 => 
        array (
          'name' => 'TrailRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪的地域。
  
- 默认值为All，表示跟踪全部地域的事件。  

您也可以指定具体的地域。关于地域的更多信息，请调用[DescribeRegions](~~213597~~)接口查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'All',
          ),
        ),
        8 => 
        array (
          'name' => 'MaxComputeProjectArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪投递的大数据计算服务项目的ARN。

> MaxComputeProjectArn中指定的大数据计算服务项目名称必须以actiontrail_作为前缀。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:odps:cn-hangzhou:151266687691****:project/actiontrail_****',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxComputeWriteRoleArn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作审计向日志服务项目投递操作事件时，扮演的角色ARN。

- 如果不指定该参数，操作审计会通过创建服务关联角色来创建相应的资源。更多信息，请参见[操作审计服务关联角色](~~169244~~)。
- 如果指定了该参数，当您需要将事件投递到本账号时，需要为RAM角色授予操作审计服务关联角色权限。当您需要将事件投递到其他账号时，需要为RAM角色绑定操作事件投递的系统权限策略。关于如何进行跨账号投递，请参见[将多个阿里云账号的事件投递到同一账号](~~207462~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
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
              'SlsProjectArn' => 
              array (
                'description' => '跟踪投递的日志服务项目的ARN。',
                'type' => 'string',
                'example' => 'acs:log:cn-hangzhou:151266687691****:project/test-project',
              ),
              'OssWriteRoleArn' => 
              array (
                'description' => '操作审计向对象存储OSS存储空间投递操作事件时，扮演的角色ARN。',
                'type' => 'string',
                'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
              ),
              'EventRW' => 
              array (
                'description' => '投递事件的读写类型。',
                'type' => 'string',
                'example' => 'Write',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2599A180-5236-44D8-9490-50B6F4F8BA35',
              ),
              'HomeRegion' => 
              array (
                'description' => '跟踪的Home地域。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'OssKeyPrefix' => 
              array (
                'description' => 'OSS存储空间文件名的前缀。',
                'type' => 'string',
                'example' => 'at-product-account-audit-B',
              ),
              'OssBucketName' => 
              array (
                'description' => 'OSS存储空间名称。',
                'type' => 'string',
                'example' => 'audit-log',
              ),
              'SlsWriteRoleArn' => 
              array (
                'description' => '操作审计向日志服务项目投递操作事件时，扮演的角色ARN。',
                'type' => 'string',
                'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
              ),
              'TrailRegion' => 
              array (
                'description' => '跟踪的地域。',
                'type' => 'string',
                'example' => 'All',
              ),
              'Name' => 
              array (
                'description' => '跟踪名称。',
                'type' => 'string',
                'example' => 'trail-test',
              ),
              'MaxComputeProjectArn' => 
              array (
                'description' => '跟踪投递的大数据计算服务项目的ARN。',
                'type' => 'string',
                'example' => 'acs:odps:cn-hangzhou:151266687691****:project/actiontrail_****',
              ),
              'MaxComputeWriteRoleArn' => 
              array (
                'description' => '操作审计向大数据计算服务项目投递操作事件时，扮演的角色ARN。',
                'type' => 'string',
                'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
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
            'errorCode' => 'RepeatOssBucket',
            'errorMessage' => 'The specified OSS bucket is already in use. We recommend that you modify the existing Trail or specify another bucket.',
          ),
          1 => 
          array (
            'errorCode' => 'SlsProjectDoesNotExistException',
            'errorMessage' => 'The specified Log Service project does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'IncompleteSignature',
            'errorMessage' => 'The request signature does not conform to Alibaba Cloud standards.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidDeliveryConfigurationException',
            'errorMessage' => 'You must specify at least one Log Service project or OSS bucket for a Trail.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidPrefixException',
            'errorMessage' => 'The specified OSS bucket prefix is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InsufficientBucketPolicyException',
            'errorMessage' => 'Access to the specified OSS bucket was denied.',
          ),
          1 => 
          array (
            'errorCode' => 'InsufficientSlsPolicyException',
            'errorMessage' => 'Access to the specified Log Service project was denied.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'TrailNotFoundException',
            'errorMessage' => 'The specified Trail does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'BucketDoesNotExistException',
            'errorMessage' => 'The specified OSS bucket does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SlsProjectArn\\": \\"acs:log:cn-hangzhou:151266687691****:project/test-project\\",\\n  \\"OssWriteRoleArn\\": \\"acs:ram::151266687691****:role/aliyunserviceroleforactiontrail\\",\\n  \\"EventRW\\": \\"Write\\",\\n  \\"RequestId\\": \\"2599A180-5236-44D8-9490-50B6F4F8BA35\\",\\n  \\"HomeRegion\\": \\"cn-hangzhou\\",\\n  \\"OssKeyPrefix\\": \\"at-product-account-audit-B\\",\\n  \\"OssBucketName\\": \\"audit-log\\",\\n  \\"SlsWriteRoleArn\\": \\"acs:ram::151266687691****:role/aliyunserviceroleforactiontrail\\",\\n  \\"TrailRegion\\": \\"All\\",\\n  \\"Name\\": \\"trail-test\\",\\n  \\"MaxComputeProjectArn\\": \\"acs:odps:cn-hangzhou:151266687691****:project/actiontrail_****\\",\\n  \\"MaxComputeWriteRoleArn\\": \\"acs:ram::151266687691****:role/aliyunserviceroleforactiontrail\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新跟踪',
      'description' => '本文将提供一个示例，将跟踪`trail-test`投递的OSS存储空间更新为`audit-log`。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
    ),
    'StopLogging' => 
    array (
      'summary' => '停止跟踪，停止将操作审计事件投递到 OSS 或 SLS。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要禁用的跟踪名称。

长度为6～36个字符，必须以小写英文字母开头，可包含小写英文字母、数字、短划线（-）和下划线（_）。

> 同一个账号内跟踪名称不可重复。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'trail-test',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1C488B66-B819-4D14-8711-C4EAAA13AC01',
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
            'errorCode' => 'TrailNotFoundException',
            'errorMessage' => 'The specified Trail does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1C488B66-B819-4D14-8711-C4EAAA13AC01\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '禁用跟踪',
      'description' => '本文将提供一个示例，禁用名为`trail-test`的跟踪。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
    ),
    'GetTrailStatus' => 
    array (
      'summary' => '查询跟踪的状态。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪名称。  
长度为6～36个字符，必须以小写英文字母开头，可包含小写英文字母、数字、短划线（-）和下划线（_）。  

> 同一账号内跟踪名称不可重复。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'trail-test',
          ),
        ),
        1 => 
        array (
          'name' => 'IsOrganizationTrail',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询多账号跟踪状态，取值：  

- true：查询多账号跟踪状态。

- false（默认值）：查单账号跟踪状态。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8067369B-B923-4D26-85BC-61BF33922505',
              ),
              'StartLoggingTime' => 
              array (
                'description' => '最近一次开启跟踪的时间。',
                'type' => 'string',
                'example' => '2021-02-24T09:19:44Z',
              ),
              'LatestDeliveryError' => 
              array (
                'description' => '最近一次行为跟踪异常的日志信息。',
                'type' => 'string',
                'example' => 'write sls failed, exception: the parent of sub user must be project owner, itemscount: 1',
              ),
              'StopLoggingTime' => 
              array (
                'description' => '最近一次停止跟踪的时间。',
                'type' => 'string',
                'example' => '2021-02-25T09:19:44Z',
              ),
              'IsLogging' => 
              array (
                'description' => '是否开启日志记录，取值：

- true：开启。  
- false：关闭。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'LatestDeliveryTime' => 
              array (
                'description' => '最近一次成功记录行为的时间。',
                'type' => 'string',
                'example' => '2021-02-26T09:19:44Z',
              ),
              'LatestDeliveryLogServiceError' => 
              array (
                'description' => '最近一次投递日志服务的错误信息。',
                'type' => 'string',
                'example' => 'write sls failed, exception: the parent of sub user must be project owner, itemscount: 1',
              ),
              'LatestDeliveryLogServiceTime' => 
              array (
                'description' => '最近一次成功投递日志服务的时间。',
                'type' => 'string',
                'example' => '2021-02-26T09:19:44Z',
              ),
              'OssBucketStatus' => 
              array (
                'description' => 'OSS存储空间是否可用，取值：

- true：可用。
- false：不可用。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'SlsLogStoreStatus' => 
              array (
                'description' => 'SLS Logstore是否可用，取值：

- true：可用。  
- false：不可用。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'TrailNotFoundException',
            'errorMessage' => 'The specified Trail does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8067369B-B923-4D26-85BC-61BF33922505\\",\\n  \\"StartLoggingTime\\": \\"2021-02-24T09:19:44Z\\",\\n  \\"LatestDeliveryError\\": \\"write sls failed, exception: the parent of sub user must be project owner, itemscount: 1\\",\\n  \\"StopLoggingTime\\": \\"2021-02-25T09:19:44Z\\",\\n  \\"IsLogging\\": true,\\n  \\"LatestDeliveryTime\\": \\"2021-02-26T09:19:44Z\\",\\n  \\"LatestDeliveryLogServiceError\\": \\"write sls failed, exception: the parent of sub user must be project owner, itemscount: 1\\",\\n  \\"LatestDeliveryLogServiceTime\\": \\"2021-02-26T09:19:44Z\\",\\n  \\"OssBucketStatus\\": true,\\n  \\"SlsLogStoreStatus\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询跟踪状态',
      'description' => '本文将提供一个示例，为您查询单账号跟踪`trail-test`的状态。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
    ),
    'DescribeTrails' => 
    array (
      'summary' => '查看已创建的跟踪列表。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IncludeShadowTrails',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否显示影子跟踪，取值：

- false（默认值）：不显示。
- true：显示。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'NameList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的跟踪名称列表。多个名称之间用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc,def',
          ),
        ),
        2 => 
        array (
          'name' => 'IncludeOrganizationTrail',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询多账号跟踪，取值：

- true：查询多账号跟踪。
- false（默认值）：查询单账号跟踪。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ED8BC689-69DA-42AC-855E-3B06C1271194',
              ),
              'TrailList' => 
              array (
                'description' => '跟踪列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TrailRegion' => 
                    array (
                      'description' => '跟踪的地域。',
                      'type' => 'string',
                      'example' => 'All',
                    ),
                    'Status' => 
                    array (
                      'description' => '跟踪状态，取值：

- Disable：停止。
- Enable：开启。  
- Fresh：已创建跟踪，但未开启。',
                      'type' => 'string',
                      'example' => 'Enable',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '跟踪配置最近一次更新的时间。',
                      'type' => 'string',
                      'example' => '2021-04-06T02:16:24Z',
                    ),
                    'HomeRegion' => 
                    array (
                      'description' => '跟踪的Home地域。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '跟踪创建的时间。',
                      'type' => 'string',
                      'example' => '2021-03-01T06:27:28Z',
                    ),
                    'OssKeyPrefix' => 
                    array (
                      'description' => 'OSS存储空间文件名的前缀。',
                      'type' => 'string',
                      'example' => 'trail1',
                    ),
                    'EventRW' => 
                    array (
                      'description' => '投递事件的读写类型，取值：

- Write（默认值）：写类型。
- Read：读类型。
- All：读类型和写类型。',
                      'type' => 'string',
                      'example' => 'All',
                    ),
                    'StartLoggingTime' => 
                    array (
                      'description' => '最近一次开启跟踪的时间。',
                      'type' => 'string',
                      'example' => '2021-04-06T02:08:38Z',
                    ),
                    'OssWriteRoleArn' => 
                    array (
                      'description' => '操作审计向对象存储OSS存储空间投递操作事件时，扮演的角色ARN。',
                      'type' => 'string',
                      'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
                    ),
                    'SlsProjectArn' => 
                    array (
                      'description' => '跟踪投递的日志服务项目的ARN。',
                      'type' => 'string',
                      'example' => 'acs:log:cn-qingdao:159498693826****:project/zhengze-audit-log',
                    ),
                    'IsOrganizationTrail' => 
                    array (
                      'description' => '是否是多账号跟踪，取值：

- false（默认值）：否。
- true：是。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'SlsWriteRoleArn' => 
                    array (
                      'description' => '操作审计向日志服务项目投递操作事件时，扮演的角色ARN。',
                      'type' => 'string',
                      'example' => 'acs:ram::159498693826****:role/aliyunserviceroleforactiontrail',
                    ),
                    'StopLoggingTime' => 
                    array (
                      'description' => '最近一次停止跟踪的时间。',
                      'type' => 'string',
                      'example' => '2021-04-06T02:09:04Z',
                    ),
                    'Name' => 
                    array (
                      'description' => '跟踪名称。',
                      'type' => 'string',
                      'example' => 'test-4',
                    ),
                    'OssBucketName' => 
                    array (
                      'description' => 'OSS存储空间的名称。',
                      'type' => 'string',
                      'example' => 'secloud',
                    ),
                    'Region' => 
                    array (
                      'description' => '跟踪所在地域。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'OrganizationId' => 
                    array (
                      'description' => '资源目录ID。  

> 只有多账号跟踪返回该参数。',
                      'type' => 'string',
                      'example' => 'rd-EV****',
                    ),
                    'OssBucketLocation' => 
                    array (
                      'description' => 'OSS存储空间所在地域。',
                      'type' => 'string',
                      'example' => 'oss-cn-hangzhou',
                    ),
                    'TrailArn' => 
                    array (
                      'description' => '跟踪的资源定位符。',
                      'type' => 'string',
                      'example' => 'acs:actiontrail:cn-hangzhou:159498693826****:trail/test-delivery-other',
                    ),
                    'MaxComputeWriteRoleArn' => 
                    array (
                      'description' => '操作审计向大数据计算服务项目投递操作事件时，扮演的角色ARN。',
                      'type' => 'string',
                      'example' => 'acs:ram::151266687691****:role/aliyunserviceroleforactiontrail',
                    ),
                    'MaxComputeProjectArn' => 
                    array (
                      'description' => '跟踪投递的大数据计算服务项目的ARN。',
                      'type' => 'string',
                      'example' => 'acs:odps:cn-hangzhou:151266687691****:project/actiontrail_****',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidTrailNameException',
            'errorMessage' => 'The specified Trail name is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidQueryParameter',
            'errorMessage' => 'The specified query parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ED8BC689-69DA-42AC-855E-3B06C1271194\\",\\n  \\"TrailList\\": [\\n    {\\n      \\"TrailRegion\\": \\"All\\",\\n      \\"Status\\": \\"Enable\\",\\n      \\"UpdateTime\\": \\"2021-04-06T02:16:24Z\\",\\n      \\"HomeRegion\\": \\"cn-hangzhou\\",\\n      \\"CreateTime\\": \\"2021-03-01T06:27:28Z\\",\\n      \\"OssKeyPrefix\\": \\"trail1\\",\\n      \\"EventRW\\": \\"All\\",\\n      \\"StartLoggingTime\\": \\"2021-04-06T02:08:38Z\\",\\n      \\"OssWriteRoleArn\\": \\"acs:ram::151266687691****:role/aliyunserviceroleforactiontrail\\",\\n      \\"SlsProjectArn\\": \\"acs:log:cn-qingdao:159498693826****:project/zhengze-audit-log\\",\\n      \\"IsOrganizationTrail\\": false,\\n      \\"SlsWriteRoleArn\\": \\"acs:ram::159498693826****:role/aliyunserviceroleforactiontrail\\",\\n      \\"StopLoggingTime\\": \\"2021-04-06T02:09:04Z\\",\\n      \\"Name\\": \\"test-4\\",\\n      \\"OssBucketName\\": \\"secloud\\",\\n      \\"Region\\": \\"cn-hangzhou\\",\\n      \\"OrganizationId\\": \\"rd-EV****\\",\\n      \\"OssBucketLocation\\": \\"oss-cn-hangzhou\\",\\n      \\"TrailArn\\": \\"acs:actiontrail:cn-hangzhou:159498693826****:trail/test-delivery-other\\",\\n      \\"MaxComputeWriteRoleArn\\": \\"acs:ram::151266687691****:role/aliyunserviceroleforactiontrail\\",\\n      \\"MaxComputeProjectArn\\": \\"acs:odps:cn-hangzhou:151266687691****:project/actiontrail_****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询某地域的跟踪列表',
      'description' => '本文将提供一个示例，查询当前账号的单账号跟踪列表。返回结果显示只有一条名为`test-4`的跟踪。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'LookupEvents' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于请求下一页检索的结果。  

> 请求参数必须保证和上次请求一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '允许返回的最大结果数目。  
取值范围：1~50。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索事件的开始时间，默认为当前时间7天前的时间点。日期格式按照ISO8601标准，并使用UTC时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-10-08T11:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索事件的结束时间，默认为当前时间点。日期格式按照ISO8601标准，并使用UTC时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-10-15T11:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索事件的读取顺序，取值：

- FORWARD：正序。
- BACKWARD（默认值）：反序。',
            'type' => 'string',
            'required' => false,
            'example' => 'BACKWARD',
          ),
        ),
        5 => 
        array (
          'name' => 'LookupAttribute',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '检索条件。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '检索条件的Key。取值：

- ServiceName：云服务名称。
- EventName：事件名称。
- User：调用者名称，即RAM用户。
- EventId：事件ID。
- ResourceType：资源类型。
- ResourceName：资源名称。
- EventRW：请求事件的读写类型。
- EventAccessKeyId：事件的AccessKey ID。
- SensitiveAction：敏感事件。

> 一次只能指定一个检索条件。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ServiceName',
                ),
                'Value' => 
                array (
                  'description' => '检索条件的Value。取值：

- 当LookupAttribute.N.Key取值为ServiceName时，取值示例：`Ecs`。
- 当LookupAttribute.N.Key取值为EventName时，取值示例：`ConsoleSignin`。
- 当LookupAttribute.N.Key取值为User时，取值示例：`Alice`。
- 当LookupAttribute.N.Key取值为EventId时，取值示例：`B702AFA3-FD4B-40E3-88E4-C0752FAA****`。
- 当LookupAttribute.N.Key取值为ResourceType时，取值示例：`ACS::ECS::Instance`。
- 当LookupAttribute.N.Key取值为ResourceName时，取值示例：`i-bp14664y88udkt45****`。
- 当LookupAttribute.N.Key取值为EventRW时，取值：`Read`（读类型）、`Write`（写类型）。
- 当LookupAttribute.N.Key取值为EventAccessKeyId时，取值示例：`LTAI4FoDkCf4DU1bic1V****`。
- 当LookupAttribute.N.Key取值为SensitiveAction时，取值示例：`true`（是）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Ecs',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 2,
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
              'EndTime' => 
              array (
                'description' => '检索到事件的结束时间。',
                'type' => 'string',
                'example' => '2020-07-22T14:00:00Z',
              ),
              'NextToken' => 
              array (
                'description' => '返回下一页的检索结果。

> 若无更多结果，则不返回此字段。',
                'type' => 'string',
                'example' => 'eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FD79665A-CE8B-49D4-82E6-5EE2E0E791DD',
              ),
              'Events' => 
              array (
                'description' => '检索到的事件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '检索到的事件列表。

关于事件列表中事件字段的说明，请参见[操作事件结构定义](~~28819~~)。',
                  'type' => 'object',
                  'example' => '见返回示例',
                ),
              ),
              'StartTime' => 
              array (
                'description' => '检索到事件的开始时间。',
                'type' => 'string',
                'example' => '2020-07-15T14:00:00Z',
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
            'errorCode' => 'IncompleteSignature',
            'errorMessage' => 'The request signature does not conform to Alibaba Cloud standards.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameterCombination',
            'errorMessage' => 'The end time must be later than the start time.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidQueryParameter',
            'errorMessage' => 'The specified query parameter is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameterEndTime',
            'errorMessage' => 'The specified EndTime is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameterStartTime',
            'errorMessage' => 'The specified StartTime is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EndTime\\": \\"2020-07-22T14:00:00Z\\",\\n  \\"NextToken\\": \\"eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****\\",\\n  \\"RequestId\\": \\"FD79665A-CE8B-49D4-82E6-5EE2E0E791DD\\",\\n  \\"Events\\": [\\n    {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  ],\\n  \\"StartTime\\": \\"2020-07-15T14:00:00Z\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '检索详细事件',
      'summary' => '检索详细历史事件。',
      'description' => '使用限制：调用LookupEvents接口检索事件时，每秒钟最多调用两次。  

> 请勿频繁调用该接口。您可以创建跟踪，将事件投递到日志服务SLS，通过SLS的实时消费功能来近实时地检索事件。具体操作，请参见[创建单账号跟踪](~~28810~~)、[创建多账号跟踪](~~160661~~)和[实时消费](~~28997~~)。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDeliveryHistoryJob' => 
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
          'name' => 'TrailName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '跟踪名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'trail-name',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须全局唯一。  
ClientToken只支持ASCII字符，且不能超过64个字符。
更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9D356A34-D5A9-41CD-9915-837B7F9D8722',
              ),
              'JobId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '16602',
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
            'errorCode' => 'TrailNotFoundException',
            'errorMessage' => 'The specified Trail does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9D356A34-D5A9-41CD-9915-837B7F9D8722\\",\\n  \\"JobId\\": 16602\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建数据回补投递任务',
      'summary' => '创建数据回补投递任务。',
      'description' => '使用限制：

- 请确保您已经调用[CreateTrail](~~212313~~)接口创建了投递到日志服务SLS的单账号跟踪。
- 一个阿里云账号同时只能存在一个正在运行的投递任务。

本文将提供一个示例，为跟踪`trail-name`创建数据回补投递任务。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDeliveryHistoryJob' => 
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
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。  
您可以调用[ListDeliveryHistoryJobs](~~188101~~)接口查询任务ID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '16602',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D74DD20B-6598-429C-873B-B9B449B656B6',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D74DD20B-6598-429C-873B-B9B449B656B6\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除数据回补投递任务',
      'summary' => '删除数据回补投递任务。',
      'description' => '本文将提供一个示例，删除任务ID为`16602`的投递任务。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~185885~~)。',
    ),
    'ListDeliveryHistoryJobs' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。

- 取值范围：1~100。
- 默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '20',
            'default' => '',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务列表的页码。

- 起始值：1。
- 默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '0',
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
              'TotalCount' => 
              array (
                'description' => '任务数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B190816C-6DCA-4DC5-9B8E-EE0367B57CFF',
              ),
              'PageNumber' => 
              array (
                'description' => '任务列表的页码。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DeliveryHistoryJobs' => 
              array (
                'description' => '投递历史事件任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TrailName' => 
                    array (
                      'description' => '跟踪名称。',
                      'type' => 'string',
                      'example' => 'trail-name',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '任务结束时间。',
                      'type' => 'string',
                      'example' => '2021-04-26T03:22:04Z',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '任务开始时间。',
                      'type' => 'string',
                      'example' => '2021-01-26T03:17:04Z',
                    ),
                    'JobStatus' => 
                    array (
                      'description' => '任务状态。取值：

- 0：任务正在初始化。
- 1：任务投递中。
- 2：任务投递完成。
- 3：任务投递失败。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'HomeRegion' => 
                    array (
                      'description' => 'Home地域。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'UpdatedTime' => 
                    array (
                      'description' => '任务更新时间。',
                      'type' => 'string',
                      'example' => '2021-04-26T03:20:08Z',
                    ),
                    'JobId' => 
                    array (
                      'description' => '任务ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '16602',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '任务创建时间。',
                      'type' => 'string',
                      'example' => '2021-04-26T03:17:04Z',
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
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The service is unavailable. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"RequestId\\": \\"B190816C-6DCA-4DC5-9B8E-EE0367B57CFF\\",\\n  \\"PageNumber\\": 1,\\n  \\"DeliveryHistoryJobs\\": [\\n    {\\n      \\"TrailName\\": \\"trail-name\\",\\n      \\"EndTime\\": \\"2021-04-26T03:22:04Z\\",\\n      \\"StartTime\\": \\"2021-01-26T03:17:04Z\\",\\n      \\"JobStatus\\": 2,\\n      \\"HomeRegion\\": \\"cn-hangzhou\\",\\n      \\"UpdatedTime\\": \\"2021-04-26T03:20:08Z\\",\\n      \\"JobId\\": 16602,\\n      \\"CreatedTime\\": \\"2021-04-26T03:17:04Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取数据回补投递任务',
      'summary' => '查询数据回补投递任务列表。',
      'description' => '本文将提供一个示例，查询数据回补投递任务列表。返回结果显示有一条任务ID为`16602`的投递任务，它用来将跟踪`trail-name`的历史事件投递到日志服务SLS。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetDeliveryHistoryJob' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '16602',
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
              'JobStatus' => 
              array (
                'description' => '任务状态。取值：

- 0：任务正在初始化。
- 1：任务投递中。
- 2：任务投递完成。
- 3：任务投递失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Status' => 
              array (
                'description' => '各地域的任务状态列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '各地域的任务状态。取值：

- 0：任务正在初始化。
- 1：任务投递中。
- 2：任务投递完成。
- 3：任务投递失败。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'Region' => 
                    array (
                      'description' => '任务投递的地域。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                  ),
                ),
              ),
              'CreatedTime' => 
              array (
                'description' => '任务创建时间。',
                'type' => 'string',
                'example' => '2021-05-27T07:15:03Z',
              ),
              'EndTime' => 
              array (
                'description' => '任务结束时间。',
                'type' => 'string',
                'example' => '2021-05-27T07:20:03Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FAFEC427-A00D-5653-B837-D0FA52220D8C',
              ),
              'StartTime' => 
              array (
                'description' => '任务开始时间。',
                'type' => 'string',
                'example' => '2021-02-26T07:15:03Z',
              ),
              'TrailName' => 
              array (
                'description' => '任务关联的跟踪名称。',
                'type' => 'string',
                'example' => 'trail-name',
              ),
              'UpdatedTime' => 
              array (
                'description' => '任务更新时间。',
                'type' => 'string',
                'example' => '2021-05-27T07:28:47Z',
              ),
              'JobId' => 
              array (
                'description' => '任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '16602',
              ),
              'HomeRegion' => 
              array (
                'description' => '跟踪的Home地域。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
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
            'errorCode' => 'TrailNotFoundException',
            'errorMessage' => 'The specified Trail does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobStatus\\": 2,\\n  \\"Status\\": [\\n    {\\n      \\"Status\\": 2,\\n      \\"Region\\": \\"cn-hangzhou\\"\\n    }\\n  ],\\n  \\"CreatedTime\\": \\"2021-05-27T07:15:03Z\\",\\n  \\"EndTime\\": \\"2021-05-27T07:20:03Z\\",\\n  \\"RequestId\\": \\"FAFEC427-A00D-5653-B837-D0FA52220D8C\\",\\n  \\"StartTime\\": \\"2021-02-26T07:15:03Z\\",\\n  \\"TrailName\\": \\"trail-name\\",\\n  \\"UpdatedTime\\": \\"2021-05-27T07:28:47Z\\",\\n  \\"JobId\\": 16602,\\n  \\"HomeRegion\\": \\"cn-hangzhou\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询数据回补投递任务详情',
      'summary' => '查询数据回补投递任务详情。',
      'description' => '本文将提供一个示例，查询投递任务ID为`16602`的数据回补投递任务详情。返回结果显示，该任务将跟踪`trail-name`的历史事件投递到日志服务SLS，且任务已经投递完成。',
    ),
    'GetAccessKeyLastUsedEvents' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AccessKey ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'LTAI4Fz1ykT4qxgNMvN6****',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云服务。关于云服务，请参见[支持的云服务](~~28829~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'Ecs',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于请求下一页检索的结果。  

> 请求参数必须保证和上次请求一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '允许返回的最大结果数目。
取值范围：0～100。
默认值：20。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
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
                'description' => '请求ID。',
                'type' => 'string',
                'required' => true,
                'example' => '145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0',
              ),
              'Events' => 
              array (
                'description' => '检索到的事件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UsedTimestamp' => 
                    array (
                      'description' => '使用事件的时间戳。
单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1657247532000',
                    ),
                    'Detail' => 
                    array (
                      'description' => '事件详情。',
                      'type' => 'string',
                      'example' => '{
  "eventId": "239EB588-CD24-522E-B0B5-174A1A58****",
  "eventVersion": 1,
  "eventSource": "ecs.cn-hangzhou.aliyuncs.com",
  "sourceIpAddress": "10.10.**.**",
  "eventType": "ApiCall",
  "userIdentity": {
    "accountId": "104758519118****",
    "principalId": "24549429003625****",
    "type": "ram-user",
    "userName": "alice"
  },
  "serviceName": "Ecs",
  "apiVersion": "2016-01-20",
  "requestId": "239EB588-CD24-522E-B0B5-174A1A588BE0",
  "eventTime": "2021-08-05T09:21:32Z",
  "isGlobal": false,
  "acsRegion": "cn-hangzhou",
  "eventName": "DescribeInstances"
}',
                    ),
                    'EventName' => 
                    array (
                      'description' => '事件名称。',
                      'type' => 'string',
                      'example' => 'DescribeInstances',
                    ),
                    'Source' => 
                    array (
                      'description' => '最后使用记录来源。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Internal' => '其他事件',
                        'ManagementEvent' => '管控事件',
                        'DataEvent' => '数据事件',
                      ),
                      'example' => 'ManagementEvent',
                    ),
                  ),
                ),
                'required' => true,
              ),
              'NextToken' => 
              array (
                'description' => '用于请求下一页检索的结果。',
                'type' => 'string',
                'example' => 'eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****',
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
            'errorCode' => 'IncompleteSignature',
            'errorMessage' => 'The request signature does not conform to Alibaba Cloud standards.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidQueryParameter',
            'errorMessage' => 'The specified query parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0\\",\\n  \\"Events\\": [\\n    {\\n      \\"UsedTimestamp\\": 1657247532000,\\n      \\"Detail\\": \\"{\\\\n  \\\\\\"eventId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A58****\\\\\\",\\\\n  \\\\\\"eventVersion\\\\\\": 1,\\\\n  \\\\\\"eventSource\\\\\\": \\\\\\"ecs.cn-hangzhou.aliyuncs.com\\\\\\",\\\\n  \\\\\\"sourceIpAddress\\\\\\": \\\\\\"10.10.**.**\\\\\\",\\\\n  \\\\\\"eventType\\\\\\": \\\\\\"ApiCall\\\\\\",\\\\n  \\\\\\"userIdentity\\\\\\": {\\\\n    \\\\\\"accountId\\\\\\": \\\\\\"104758519118****\\\\\\",\\\\n    \\\\\\"principalId\\\\\\": \\\\\\"24549429003625****\\\\\\",\\\\n    \\\\\\"type\\\\\\": \\\\\\"ram-user\\\\\\",\\\\n    \\\\\\"userName\\\\\\": \\\\\\"alice\\\\\\"\\\\n  },\\\\n  \\\\\\"serviceName\\\\\\": \\\\\\"Ecs\\\\\\",\\\\n  \\\\\\"apiVersion\\\\\\": \\\\\\"2016-01-20\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A588BE0\\\\\\",\\\\n  \\\\\\"eventTime\\\\\\": \\\\\\"2021-08-05T09:21:32Z\\\\\\",\\\\n  \\\\\\"isGlobal\\\\\\": false,\\\\n  \\\\\\"acsRegion\\\\\\": \\\\\\"cn-hangzhou\\\\\\",\\\\n  \\\\\\"eventName\\\\\\": \\\\\\"DescribeInstances\\\\\\"\\\\n}\\",\\n      \\"EventName\\": \\"DescribeInstances\\",\\n      \\"Source\\": \\"ManagementEvent\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAccessKeyLastUsedEventsResponse>\\n\\t<RequestId>145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0</RequestId>\\n\\t<Events>\\n\\t\\t<UsedTimestamp>1657247532000</UsedTimestamp>\\n\\t\\t<Detail>{\\\\n  \\\\\\"eventId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A58****\\\\\\",\\\\n  \\\\\\"eventVersion\\\\\\": 1,\\\\n  \\\\\\"eventSource\\\\\\": \\\\\\"ecs.cn-hangzhou.aliyuncs.com\\\\\\",\\\\n  \\\\\\"sourceIpAddress\\\\\\": \\\\\\"10.10.**.**\\\\\\",\\\\n  \\\\\\"eventType\\\\\\": \\\\\\"ApiCall\\\\\\",\\\\n  \\\\\\"userIdentity\\\\\\": {\\\\n    \\\\\\"accountId\\\\\\": \\\\\\"104758519118****\\\\\\",\\\\n    \\\\\\"principalId\\\\\\": \\\\\\"24549429003625****\\\\\\",\\\\n    \\\\\\"type\\\\\\": \\\\\\"ram-user\\\\\\",\\\\n    \\\\\\"userName\\\\\\": \\\\\\"alice\\\\\\"\\\\n  },\\\\n  \\\\\\"serviceName\\\\\\": \\\\\\"Ecs\\\\\\",\\\\n  \\\\\\"apiVersion\\\\\\": \\\\\\"2016-01-20\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A588BE0\\\\\\",\\\\n  \\\\\\"eventTime\\\\\\": \\\\\\"2021-08-05T09:21:32Z\\\\\\",\\\\n  \\\\\\"isGlobal\\\\\\": false,\\\\n  \\\\\\"acsRegion\\\\\\": \\\\\\"cn-hangzhou\\\\\\",\\\\n  \\\\\\"eventName\\\\\\": \\\\\\"DescribeInstances\\\\\\"\\\\n}</Detail>\\n\\t\\t<EventName>DescribeInstances</EventName>\\n\\t\\t<Source>ManagementEvent</Source>\\n\\t</Events>\\n\\t<NextToken>eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****</NextToken>\\n</GetAccessKeyLastUsedEventsResponse>\\t","errorExample":""}]',
      'title' => '查询指定AccessKey的最后使用的事件记录',
      'summary' => '查询指定AccessKey的最后使用的事件记录。',
      'description' => '本接口仅可查询自2022年02月01日起（最长400天），指定AccessKey最后使用的部分事件记录。关于支持的事件请参见[AccessKey审计支持的云服务及事件](~~419214~~) 。因该数据存在一定的延迟（一般小时级），且仅支持部分事件，请您务必谨慎变更AccessKey。',
    ),
    'GetAccessKeyLastUsedInfo' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '访问密钥。',
            'type' => 'string',
            'required' => true,
            'example' => 'LTAI4Fz1ykT4qxgNMvN6****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'required' => true,
                'example' => '239EB588-CD24-522E-B0B5-174A1A588BE0',
              ),
              'AccessKeyId' => 
              array (
                'description' => 'AccessKey ID。',
                'type' => 'string',
                'example' => 'LTAI4Fz1ykT4qxgNMvN6****
',
              ),
              'AccountId' => 
              array (
                'description' => '阿里云账号ID。',
                'type' => 'string',
                'example' => '104758519118****',
              ),
              'OwnerId' => 
              array (
                'description' => 'AccessKey所属账号ID。',
                'type' => 'string',
                'example' => '24549429003625****',
              ),
              'UserName' => 
              array (
                'description' => 'AccessKey所属账号名称。
如果AccountType为root-account，则userName记录为“root”；如果AccountType为ram-user，则userName记录为RAM用户名。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                ),
                'example' => 'alice',
              ),
              'AccountType' => 
              array (
                'description' => 'AccessKey所属账号身份类型。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'root-account' => '阿里云账号',
                  'ram-user' => 'RAM用户',
                ),
                'example' => 'ram-user',
              ),
              'UsedTimestamp' => 
              array (
                'description' => '最后使用时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1657247532000',
              ),
              'Detail' => 
              array (
                'description' => '最后使用事件详情。',
                'type' => 'string',
                'example' => '{
  "eventId": "239EB588-CD24-522E-B0B5-174A1A58****",
  "eventVersion": 1,
  "eventSource": "ecs.cn-hangzhou.aliyuncs.com",
  "sourceIpAddress": "10.10.**.**",
  "eventType": "ApiCall",
  "userIdentity": {
    "accountId": "104758519118****",
    "principalId": "24549429003625****",
    "type": "ram-user",
    "userName": "alice"
  },
  "serviceName": "Ecs",
  "apiVersion": "2016-01-20",
  "requestId": "239EB588-CD24-522E-B0B5-174A1A588BE0",
  "eventTime": "2021-08-05T09:21:32Z",
  "isGlobal": false,
  "acsRegion": "cn-hangzhou",
  "eventName": "DescribeInstances"
}',
              ),
              'Source' => 
              array (
                'description' => '最后使用记录来源。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'Internal' => '其他事件',
                  'ManagementEvent' => '管控事件',
                  'DataEvent' => '数据事件',
                ),
                'example' => 'ManagementEvent',
              ),
              'ServiceName' => 
              array (
                'description' => '最后使用的云服务。',
                'type' => 'string',
                'required' => true,
                'example' => 'Ecs',
              ),
              'ServiceNameCn' => 
              array (
                'description' => '最后使用的云服务中文名称。',
                'type' => 'string',
                'example' => '云服务器ECS',
              ),
              'ServiceNameEn' => 
              array (
                'description' => '最后使用的云服务英文名称。',
                'type' => 'string',
                'example' => 'Elastic Compute Service',
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
            'errorCode' => 'IncompleteSignature',
            'errorMessage' => 'The request signature does not conform to Alibaba Cloud standards.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidQueryParameter',
            'errorMessage' => 'The specified query parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"239EB588-CD24-522E-B0B5-174A1A588BE0\\",\\n  \\"AccessKeyId\\": \\"LTAI4Fz1ykT4qxgNMvN6****\\\\n\\",\\n  \\"AccountId\\": \\"104758519118****\\",\\n  \\"OwnerId\\": \\"24549429003625****\\",\\n  \\"UserName\\": \\"alice\\",\\n  \\"AccountType\\": \\"ram-user\\",\\n  \\"UsedTimestamp\\": 1657247532000,\\n  \\"Detail\\": \\"{\\\\n  \\\\\\"eventId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A58****\\\\\\",\\\\n  \\\\\\"eventVersion\\\\\\": 1,\\\\n  \\\\\\"eventSource\\\\\\": \\\\\\"ecs.cn-hangzhou.aliyuncs.com\\\\\\",\\\\n  \\\\\\"sourceIpAddress\\\\\\": \\\\\\"10.10.**.**\\\\\\",\\\\n  \\\\\\"eventType\\\\\\": \\\\\\"ApiCall\\\\\\",\\\\n  \\\\\\"userIdentity\\\\\\": {\\\\n    \\\\\\"accountId\\\\\\": \\\\\\"104758519118****\\\\\\",\\\\n    \\\\\\"principalId\\\\\\": \\\\\\"24549429003625****\\\\\\",\\\\n    \\\\\\"type\\\\\\": \\\\\\"ram-user\\\\\\",\\\\n    \\\\\\"userName\\\\\\": \\\\\\"alice\\\\\\"\\\\n  },\\\\n  \\\\\\"serviceName\\\\\\": \\\\\\"Ecs\\\\\\",\\\\n  \\\\\\"apiVersion\\\\\\": \\\\\\"2016-01-20\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A588BE0\\\\\\",\\\\n  \\\\\\"eventTime\\\\\\": \\\\\\"2021-08-05T09:21:32Z\\\\\\",\\\\n  \\\\\\"isGlobal\\\\\\": false,\\\\n  \\\\\\"acsRegion\\\\\\": \\\\\\"cn-hangzhou\\\\\\",\\\\n  \\\\\\"eventName\\\\\\": \\\\\\"DescribeInstances\\\\\\"\\\\n}\\",\\n  \\"Source\\": \\"ManagementEvent\\",\\n  \\"ServiceName\\": \\"Ecs\\",\\n  \\"ServiceNameCn\\": \\"云服务器ECS\\",\\n  \\"ServiceNameEn\\": \\"Elastic Compute Service\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAccessKeyLastUsedInfoResponse>\\n    <RequestId>239EB588-CD24-522E-B0B5-174A1A588BE0</RequestId>\\n    <AccessKeyId>LTAI4Fz1ykT4qxgNMvN6****</AccessKeyId>\\n    <AccountId>104758519118****</AccountId>\\n    <OwnerId>24549429003625****</OwnerId>\\n    <UserName>alice</UserName>\\n    <AccountType>ram-user</AccountType>\\n    <UsedTimestamp>1657247532000</UsedTimestamp>\\n    <Detail>{\\\\n  \\\\\\"eventId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A58****\\\\\\",\\\\n  \\\\\\"eventVersion\\\\\\": 1,\\\\n  \\\\\\"eventSource\\\\\\": \\\\\\"ecs.cn-hangzhou.aliyuncs.com\\\\\\",\\\\n  \\\\\\"sourceIpAddress\\\\\\": \\\\\\"10.10.**.**\\\\\\",\\\\n  \\\\\\"eventType\\\\\\": \\\\\\"ApiCall\\\\\\",\\\\n  \\\\\\"userIdentity\\\\\\": {\\\\n    \\\\\\"accountId\\\\\\": \\\\\\"104758519118****\\\\\\",\\\\n    \\\\\\"principalId\\\\\\": \\\\\\"24549429003625****\\\\\\",\\\\n    \\\\\\"type\\\\\\": \\\\\\"ram-user\\\\\\",\\\\n    \\\\\\"userName\\\\\\": \\\\\\"alice\\\\\\"\\\\n  },\\\\n  \\\\\\"serviceName\\\\\\": \\\\\\"Ecs\\\\\\",\\\\n  \\\\\\"apiVersion\\\\\\": \\\\\\"2016-01-20\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A588BE0\\\\\\",\\\\n  \\\\\\"eventTime\\\\\\": \\\\\\"2021-08-05T09:21:32Z\\\\\\",\\\\n  \\\\\\"isGlobal\\\\\\": false,\\\\n  \\\\\\"acsRegion\\\\\\": \\\\\\"cn-hangzhou\\\\\\",\\\\n  \\\\\\"eventName\\\\\\": \\\\\\"DescribeInstances\\\\\\"\\\\n}</Detail>\\n    <Source>ManagementEvent</Source>\\n    <ServiceName>Ecs</ServiceName>\\n    <ServiceNameCn>Elastic Compute Service (ECS)</ServiceNameCn>\\n    <ServiceNameEn>Elastic Compute Service</ServiceNameEn>\\n</GetAccessKeyLastUsedInfoResponse>","errorExample":""}]',
      'title' => '查询指定AccessKey的最后使用记录',
      'summary' => '查询指定AccessKey的最后使用记录。',
      'description' => '本接口仅可查询自2022年02月01日起（最长400天），指定AccessKey的最后使用记录。因该数据存在一定的延迟（一般小时级），请您务必谨慎变更AccessKey。',
    ),
    'GetAccessKeyLastUsedIps' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AccessKey ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'LTAI4Fz1ykT4qxgNMvN6****
',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云服务。关于云服务，请参见[支持的云服务](~~28829~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'Ecs',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于请求下一页检索的结果。

> 请求参数必须保证和上次请求一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '允许返回的最大结果数目。
取值范围：0～100。
默认值：20。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
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
                'description' => '请求ID。',
                'type' => 'string',
                'required' => true,
                'example' => '145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0',
              ),
              'Ips' => 
              array (
                'description' => '检索到的IP列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UsedTimestamp' => 
                    array (
                      'description' => '使用IP的时间戳。
单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1657247532000',
                    ),
                    'Detail' => 
                    array (
                      'description' => '事件详情。',
                      'type' => 'string',
                      'example' => '{
  "eventId": "239EB588-CD24-522E-B0B5-174A1A58****",
  "eventVersion": 1,
  "eventSource": "ecs.cn-hangzhou.aliyuncs.com",
  "sourceIpAddress": "10.10.**.**",
  "eventType": "ApiCall",
  "userIdentity": {
    "accountId": "104758519118****",
    "principalId": "24549429003625****",
    "type": "ram-user",
    "userName": "alice"
  },
  "serviceName": "Ecs",
  "apiVersion": "2016-01-20",
  "requestId": "239EB588-CD24-522E-B0B5-174A1A588BE0",
  "eventTime": "2021-08-05T09:21:32Z",
  "isGlobal": false,
  "acsRegion": "cn-hangzhou",
  "eventName": "DescribeInstances"
}',
                    ),
                    'Source' => 
                    array (
                      'description' => '最后使用记录来源。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Internal' => '其他事件',
                        'ManagementEvent' => '管控事件',
                        'DataEvent' => '数据事件',
                      ),
                      'example' => 'ManagementEvent',
                    ),
                    'Ip' => 
                    array (
                      'description' => '最后使用的IP地址。',
                      'type' => 'string',
                      'example' => '10.10.**.**',
                    ),
                  ),
                ),
                'required' => true,
              ),
              'NextToken' => 
              array (
                'description' => '用于请求下一页检索的结果。',
                'type' => 'string',
                'example' => 'eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****',
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
            'errorCode' => 'IncompleteSignature',
            'errorMessage' => 'The request signature does not conform to Alibaba Cloud standards.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidQueryParameter',
            'errorMessage' => 'The specified query parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0\\",\\n  \\"Ips\\": [\\n    {\\n      \\"UsedTimestamp\\": 1657247532000,\\n      \\"Detail\\": \\"{\\\\n  \\\\\\"eventId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A58****\\\\\\",\\\\n  \\\\\\"eventVersion\\\\\\": 1,\\\\n  \\\\\\"eventSource\\\\\\": \\\\\\"ecs.cn-hangzhou.aliyuncs.com\\\\\\",\\\\n  \\\\\\"sourceIpAddress\\\\\\": \\\\\\"10.10.**.**\\\\\\",\\\\n  \\\\\\"eventType\\\\\\": \\\\\\"ApiCall\\\\\\",\\\\n  \\\\\\"userIdentity\\\\\\": {\\\\n    \\\\\\"accountId\\\\\\": \\\\\\"104758519118****\\\\\\",\\\\n    \\\\\\"principalId\\\\\\": \\\\\\"24549429003625****\\\\\\",\\\\n    \\\\\\"type\\\\\\": \\\\\\"ram-user\\\\\\",\\\\n    \\\\\\"userName\\\\\\": \\\\\\"alice\\\\\\"\\\\n  },\\\\n  \\\\\\"serviceName\\\\\\": \\\\\\"Ecs\\\\\\",\\\\n  \\\\\\"apiVersion\\\\\\": \\\\\\"2016-01-20\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A588BE0\\\\\\",\\\\n  \\\\\\"eventTime\\\\\\": \\\\\\"2021-08-05T09:21:32Z\\\\\\",\\\\n  \\\\\\"isGlobal\\\\\\": false,\\\\n  \\\\\\"acsRegion\\\\\\": \\\\\\"cn-hangzhou\\\\\\",\\\\n  \\\\\\"eventName\\\\\\": \\\\\\"DescribeInstances\\\\\\"\\\\n}\\",\\n      \\"Source\\": \\"ManagementEvent\\",\\n      \\"Ip\\": \\"10.10.**.**\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAccessKeyLastUsedIpsResponse>\\n\\t<RequestId>145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0</RequestId>\\n\\t<Ips>\\n\\t\\t<UsedTimestamp>1657247532000</UsedTimestamp>\\n\\t\\t<Detail>{\\\\n  \\\\\\"eventId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A58****\\\\\\",\\\\n  \\\\\\"eventVersion\\\\\\": 1,\\\\n  \\\\\\"eventSource\\\\\\": \\\\\\"ecs.cn-hangzhou.aliyuncs.com\\\\\\",\\\\n  \\\\\\"sourceIpAddress\\\\\\": \\\\\\"10.10.**.**\\\\\\",\\\\n  \\\\\\"eventType\\\\\\": \\\\\\"ApiCall\\\\\\",\\\\n  \\\\\\"userIdentity\\\\\\": {\\\\n    \\\\\\"accountId\\\\\\": \\\\\\"104758519118****\\\\\\",\\\\n    \\\\\\"principalId\\\\\\": \\\\\\"24549429003625****\\\\\\",\\\\n    \\\\\\"type\\\\\\": \\\\\\"ram-user\\\\\\",\\\\n    \\\\\\"userName\\\\\\": \\\\\\"alice\\\\\\"\\\\n  },\\\\n  \\\\\\"serviceName\\\\\\": \\\\\\"Ecs\\\\\\",\\\\n  \\\\\\"apiVersion\\\\\\": \\\\\\"2016-01-20\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A588BE0\\\\\\",\\\\n  \\\\\\"eventTime\\\\\\": \\\\\\"2021-08-05T09:21:32Z\\\\\\",\\\\n  \\\\\\"isGlobal\\\\\\": false,\\\\n  \\\\\\"acsRegion\\\\\\": \\\\\\"cn-hangzhou\\\\\\",\\\\n  \\\\\\"eventName\\\\\\": \\\\\\"DescribeInstances\\\\\\"\\\\n}</Detail>\\n\\t\\t<Source>ManagementEvent</Source>\\n\\t\\t<Ip>10.10.XX.XX</Ip>\\n\\t</Ips>\\t\\n  <NextToken>eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****</NextToken>\\n</GetAccessKeyLastUsedIpsResponse>\\t","errorExample":""}]',
      'title' => '查询指定AccessKey的最后使用的IP记录',
      'summary' => '查询指定AccessKey的最后使用的IP记录。',
      'description' => '本接口仅可查询自2022年02月01日起（最长400天），指定AccessKey最后使用的部分IP记录。因该数据存在一定的延迟（一般小时级），且仅支持部分IP，请您务必谨慎变更AccessKey。',
    ),
    'GetAccessKeyLastUsedProducts' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AccessKey ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'LTAI4Fz1ykT4qxgNMvN6****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'required' => true,
                'example' => '145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0',
              ),
              'Products' => 
              array (
                'description' => '检索到的云服务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UsedTimestamp' => 
                    array (
                      'description' => '使用云服务的时间戳。
单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1657247532000',
                    ),
                    'Detail' => 
                    array (
                      'description' => '事件详情。',
                      'type' => 'string',
                      'example' => '{
  "eventId": "239EB588-CD24-522E-B0B5-174A1A58****",
  "eventVersion": 1,
  "eventSource": "ecs.cn-hangzhou.aliyuncs.com",
  "sourceIpAddress": "10.10.**.**",
  "eventType": "ApiCall",
  "userIdentity": {
    "accountId": "104758519118****",
    "principalId": "24549429003625****",
    "type": "ram-user",
    "userName": "alice"
  },
  "serviceName": "Ecs",
  "apiVersion": "2016-01-20",
  "requestId": "239EB588-CD24-522E-B0B5-174A1A588BE0",
  "eventTime": "2021-08-05T09:21:32Z",
  "isGlobal": false,
  "acsRegion": "cn-hangzhou",
  "eventName": "DescribeInstances"
}',
                    ),
                    'Source' => 
                    array (
                      'description' => '最后使用记录来源。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Internal' => '其他事件',
                        'ManagementEvent' => '管控事件',
                        'DataEvent' => '数据事件',
                      ),
                      'example' => 'ManagementEvent',
                    ),
                    'ServiceName' => 
                    array (
                      'description' => '使用的云服务。',
                      'type' => 'string',
                      'example' => 'Ecs',
                    ),
                    'ServiceNameCn' => 
                    array (
                      'description' => '云服务中文名称。',
                      'type' => 'string',
                      'example' => '云服务器ECS',
                    ),
                    'ServiceNameEn' => 
                    array (
                      'description' => '云服务英文名称。',
                      'type' => 'string',
                      'example' => 'Elastic Compute Service',
                    ),
                  ),
                ),
                'required' => true,
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
            'errorCode' => 'IncompleteSignature',
            'errorMessage' => 'The request signature does not conform to Alibaba Cloud standards.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidQueryParameter',
            'errorMessage' => 'The specified query parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0\\",\\n  \\"Products\\": [\\n    {\\n      \\"UsedTimestamp\\": 1657247532000,\\n      \\"Detail\\": \\"{\\\\n  \\\\\\"eventId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A58****\\\\\\",\\\\n  \\\\\\"eventVersion\\\\\\": 1,\\\\n  \\\\\\"eventSource\\\\\\": \\\\\\"ecs.cn-hangzhou.aliyuncs.com\\\\\\",\\\\n  \\\\\\"sourceIpAddress\\\\\\": \\\\\\"10.10.**.**\\\\\\",\\\\n  \\\\\\"eventType\\\\\\": \\\\\\"ApiCall\\\\\\",\\\\n  \\\\\\"userIdentity\\\\\\": {\\\\n    \\\\\\"accountId\\\\\\": \\\\\\"104758519118****\\\\\\",\\\\n    \\\\\\"principalId\\\\\\": \\\\\\"24549429003625****\\\\\\",\\\\n    \\\\\\"type\\\\\\": \\\\\\"ram-user\\\\\\",\\\\n    \\\\\\"userName\\\\\\": \\\\\\"alice\\\\\\"\\\\n  },\\\\n  \\\\\\"serviceName\\\\\\": \\\\\\"Ecs\\\\\\",\\\\n  \\\\\\"apiVersion\\\\\\": \\\\\\"2016-01-20\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A588BE0\\\\\\",\\\\n  \\\\\\"eventTime\\\\\\": \\\\\\"2021-08-05T09:21:32Z\\\\\\",\\\\n  \\\\\\"isGlobal\\\\\\": false,\\\\n  \\\\\\"acsRegion\\\\\\": \\\\\\"cn-hangzhou\\\\\\",\\\\n  \\\\\\"eventName\\\\\\": \\\\\\"DescribeInstances\\\\\\"\\\\n}\\",\\n      \\"Source\\": \\"ManagementEvent\\",\\n      \\"ServiceName\\": \\"Ecs\\",\\n      \\"ServiceNameCn\\": \\"云服务器ECS\\",\\n      \\"ServiceNameEn\\": \\"Elastic Compute Service\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetAccessKeyLastUsedProductsResponse>\\n\\t<RequestId>145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0</RequestId>\\n\\t<Products>\\n\\t\\t<UsedTimestamp>1657247532000</UsedTimestamp>\\n\\t\\t<Detail>{\\\\n  \\\\\\"eventId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A58****\\\\\\",\\\\n  \\\\\\"eventVersion\\\\\\": 1,\\\\n  \\\\\\"eventSource\\\\\\": \\\\\\"ecs.cn-hangzhou.aliyuncs.com\\\\\\",\\\\n  \\\\\\"sourceIpAddress\\\\\\": \\\\\\"10.10.**.**\\\\\\",\\\\n  \\\\\\"eventType\\\\\\": \\\\\\"ApiCall\\\\\\",\\\\n  \\\\\\"userIdentity\\\\\\": {\\\\n    \\\\\\"accountId\\\\\\": \\\\\\"104758519118****\\\\\\",\\\\n    \\\\\\"principalId\\\\\\": \\\\\\"24549429003625****\\\\\\",\\\\n    \\\\\\"type\\\\\\": \\\\\\"ram-user\\\\\\",\\\\n    \\\\\\"userName\\\\\\": \\\\\\"alice\\\\\\"\\\\n  },\\\\n  \\\\\\"serviceName\\\\\\": \\\\\\"Ecs\\\\\\",\\\\n  \\\\\\"apiVersion\\\\\\": \\\\\\"2016-01-20\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A588BE0\\\\\\",\\\\n  \\\\\\"eventTime\\\\\\": \\\\\\"2021-08-05T09:21:32Z\\\\\\",\\\\n  \\\\\\"isGlobal\\\\\\": false,\\\\n  \\\\\\"acsRegion\\\\\\": \\\\\\"cn-hangzhou\\\\\\",\\\\n  \\\\\\"eventName\\\\\\": \\\\\\"DescribeInstances\\\\\\"\\\\n}</Detail>\\n\\t\\t<Source>ManagementEvent</Source>\\n\\t\\t<ServiceName>Ecs</ServiceName>\\n\\t\\t<ServiceNameCn>云服务器ECS</ServiceNameCn>\\n\\t\\t<ServiceNameEn>Elastic Compute Service</ServiceNameEn>\\n\\t</Products>\\n</GetAccessKeyLastUsedProductsResponse>\\t","errorExample":""}]',
      'title' => '查询指定AccessKey的最后使用的云服务记录',
      'summary' => '查询指定AccessKey的最后使用的云服务记录。',
      'description' => '本接口仅可查询自2022年02月01日起（最长400天），指定AccessKey最后使用的云服务记录。因该数据存在一定的延迟（一般小时级），请您务必谨慎变更AccessKey。',
    ),
    'GetAccessKeyLastUsedResources' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AccessKey ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'LTAI4Fz1ykT4qxgNMvN6****
',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云服务。关于云服务，请参见[支持的云服务](~~28829~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'Ecs',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于请求下一页检索的结果。
>请求参数必须保证和上次请求一致。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '允许返回的最大结果数目。

- 取值范围：0～100。
- 默认值：20。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
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
                'description' => '请求ID。',
                'type' => 'string',
                'required' => true,
                'example' => '145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0',
              ),
              'Resources' => 
              array (
                'description' => '检索到的资源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UsedTimestamp' => 
                    array (
                      'description' => '使用该资源的时间戳。
单位：毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1657247532000',
                    ),
                    'Detail' => 
                    array (
                      'description' => '事件详情。',
                      'type' => 'string',
                      'example' => '{
  "eventId": "239EB588-CD24-522E-B0B5-174A1A58****",
  "eventVersion": 1,
  "eventSource": "ecs.cn-hangzhou.aliyuncs.com",
  "sourceIpAddress": "10.10.**.**",
  "eventType": "ApiCall",
  "userIdentity": {
    "accountId": "104758519118****",
    "principalId": "24549429003625****",
    "type": "ram-user",
    "userName": "alice"
  },
  "serviceName": "Ecs",
  "apiVersion": "2016-01-20",
  "requestId": "239EB588-CD24-522E-B0B5-174A1A588BE0",
  "eventTime": "2021-08-05T09:21:32Z",
  "isGlobal": false,
  "acsRegion": "cn-hangzhou",
  "eventName": "DescribeInstances"
}',
                    ),
                    'ResourceName' => 
                    array (
                      'description' => '资源名称。',
                      'type' => 'string',
                      'example' => 'i-bp1ltva99x1a****',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ACS::ECS::Instance',
                    ),
                    'Source' => 
                    array (
                      'description' => '最后使用记录来源。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Internal' => '其他事件',
                        'ManagementEvent' => '管控事件',
                        'DataEvent' => '数据事件',
                      ),
                      'example' => 'ManagementEvent',
                    ),
                  ),
                ),
                'required' => true,
              ),
              'NextToken' => 
              array (
                'description' => '用于请求下一页检索的结果。',
                'type' => 'string',
                'example' => 'eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****',
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
            'errorCode' => 'IncompleteSignature',
            'errorMessage' => 'The request signature does not conform to Alibaba Cloud standards.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidQueryParameter',
            'errorMessage' => 'The specified query parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0\\",\\n  \\"Resources\\": [\\n    {\\n      \\"UsedTimestamp\\": 1657247532000,\\n      \\"Detail\\": \\"{\\\\n  \\\\\\"eventId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A58****\\\\\\",\\\\n  \\\\\\"eventVersion\\\\\\": 1,\\\\n  \\\\\\"eventSource\\\\\\": \\\\\\"ecs.cn-hangzhou.aliyuncs.com\\\\\\",\\\\n  \\\\\\"sourceIpAddress\\\\\\": \\\\\\"10.10.**.**\\\\\\",\\\\n  \\\\\\"eventType\\\\\\": \\\\\\"ApiCall\\\\\\",\\\\n  \\\\\\"userIdentity\\\\\\": {\\\\n    \\\\\\"accountId\\\\\\": \\\\\\"104758519118****\\\\\\",\\\\n    \\\\\\"principalId\\\\\\": \\\\\\"24549429003625****\\\\\\",\\\\n    \\\\\\"type\\\\\\": \\\\\\"ram-user\\\\\\",\\\\n    \\\\\\"userName\\\\\\": \\\\\\"alice\\\\\\"\\\\n  },\\\\n  \\\\\\"serviceName\\\\\\": \\\\\\"Ecs\\\\\\",\\\\n  \\\\\\"apiVersion\\\\\\": \\\\\\"2016-01-20\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A588BE0\\\\\\",\\\\n  \\\\\\"eventTime\\\\\\": \\\\\\"2021-08-05T09:21:32Z\\\\\\",\\\\n  \\\\\\"isGlobal\\\\\\": false,\\\\n  \\\\\\"acsRegion\\\\\\": \\\\\\"cn-hangzhou\\\\\\",\\\\n  \\\\\\"eventName\\\\\\": \\\\\\"DescribeInstances\\\\\\"\\\\n}\\",\\n      \\"ResourceName\\": \\"i-bp1ltva99x1a****\\",\\n      \\"ResourceType\\": \\"ACS::ECS::Instance\\",\\n      \\"Source\\": \\"ManagementEvent\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAccessKeyLastUsedResourcesResponse>\\n\\t<RequestId>145318BE-DEE1-4C57-AA7C-5BE7D34A6AE0</RequestId>\\n\\t<Resources>\\n\\t\\t<UsedTimestamp>1657247532000</UsedTimestamp>\\n\\t\\t<Detail>{\\\\n  \\\\\\"eventId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A58****\\\\\\",\\\\n  \\\\\\"eventVersion\\\\\\": 1,\\\\n  \\\\\\"eventSource\\\\\\": \\\\\\"ecs.cn-hangzhou.aliyuncs.com\\\\\\",\\\\n  \\\\\\"sourceIpAddress\\\\\\": \\\\\\"10.10.**.**\\\\\\",\\\\n  \\\\\\"eventType\\\\\\": \\\\\\"ApiCall\\\\\\",\\\\n  \\\\\\"userIdentity\\\\\\": {\\\\n    \\\\\\"accountId\\\\\\": \\\\\\"104758519118****\\\\\\",\\\\n    \\\\\\"principalId\\\\\\": \\\\\\"24549429003625****\\\\\\",\\\\n    \\\\\\"type\\\\\\": \\\\\\"ram-user\\\\\\",\\\\n    \\\\\\"userName\\\\\\": \\\\\\"alice\\\\\\"\\\\n  },\\\\n  \\\\\\"serviceName\\\\\\": \\\\\\"Ecs\\\\\\",\\\\n  \\\\\\"apiVersion\\\\\\": \\\\\\"2016-01-20\\\\\\",\\\\n  \\\\\\"requestId\\\\\\": \\\\\\"239EB588-CD24-522E-B0B5-174A1A588BE0\\\\\\",\\\\n  \\\\\\"eventTime\\\\\\": \\\\\\"2021-08-05T09:21:32Z\\\\\\",\\\\n  \\\\\\"isGlobal\\\\\\": false,\\\\n  \\\\\\"acsRegion\\\\\\": \\\\\\"cn-hangzhou\\\\\\",\\\\n  \\\\\\"eventName\\\\\\": \\\\\\"DescribeInstances\\\\\\"\\\\n}</Detail>\\n\\t\\t<ResourceName>i-bp1ltva99x1a****</ResourceName>\\n\\t\\t<ResourceType>ACS::ECS::Instance</ResourceType>\\n\\t\\t<Source>ManagementEvent</Source>\\n\\t</Resources>\\n\\t<NextToken>eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****</NextToken>\\n</GetAccessKeyLastUsedResourcesResponse>\\t","errorExample":""}]',
      'title' => '查询指定AccessKey的最后使用的资源记录',
      'summary' => '查询指定AccessKey的最后使用的资源记录。',
      'description' => '本接口仅可查询自2022年02月01日起（最长400天），指定AccessKey最后使用的部分资源记录。因该数据存在一定的延迟（一般小时级），且仅支持部分资源，请您务必谨慎变更AccessKey。',
    ),
    'GetGlobalEventsStorageRegion' => 
    array (
      'summary' => '查询全局事件存储地域。',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0474CD9D-DF37-55D4-8383-D978CFBE13A4',
              ),
              'StorageRegion' => 
              array (
                'description' => '全局事件存储地域。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'ap-southeast-1' => 'ap-southeast-1',
                  'cn-hangzhou' => 'cn-hangzhou',
                ),
                'example' => 'cn-hangzhou',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0474CD9D-DF37-55D4-8383-D978CFBE13A4\\",\\n  \\"StorageRegion\\": \\"cn-hangzhou\\"\\n}","type":"json"}]',
      'title' => '查询全局事件存储地域',
      'description' => '默认您的全局事件存储在<props="china">华东1（杭州）</props>
<props="intl">新加坡</props>。

您需要通过提交工单，获取该接口的使用权限。',
    ),
    'UpdateGlobalEventsStorageRegion' => 
    array (
      'summary' => '设置全局事件存储地域。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StorageRegion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '全局事件存储地域。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'ap-southeast-1' => 'ap-southeast-1',
              'cn-hangzhou' => 'cn-hangzhou',
            ),
            'example' => 'ap-southeast-1',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D7A0694E-C8FE-574E-92E3-63C5B5D23BD4',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D7A0694E-C8FE-574E-92E3-63C5B5D23BD4\\"\\n}","type":"json"}]',
      'title' => '设置全局事件存储地域',
      'description' => '默认您的全局事件存储在<props="china">华东1（杭州）</props>
<props="intl">新加坡</props>。

- 您需要通过提交工单，获取该接口的使用权限。
- 当前仅支持设置为华东1（杭州）（cn-hangzhou）或新加坡（ap-southeast-1）。',
    ),
    'EnableInsight' => 
    array (
      'summary' => '开启审计事件洞察。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InsightType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审计事件洞察类型，取值：
- IpInsight：非常用IP事件。
- ApiCallRateInsight：API请求异常事件。
- ApiErrorRateInsight：API失败异常事件。',
            'type' => 'string',
            'required' => false,
            'example' => 'IpInsight',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '45AA79B7-0240-52AB-B158-3F9A512228ED',
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
            'errorCode' => 'InsightTypeNotAvailable',
            'errorMessage' => 'The input insightType is not available',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"45AA79B7-0240-52AB-B158-3F9A512228ED\\"\\n}","type":"json"}]',
      'title' => '开启审计事件洞察',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'actiontrail.ap-northeast-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'actiontrail.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'actiontrail.ap-northeast-1.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'actiontrail.ap-northeast-1.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'actiontrail.cn-qingdao.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'actiontrail.cn-beijing.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'actiontrail.cn-chengdu.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'actiontrail.cn-zhangjiakou.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'actiontrail.cn-huhehaote.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'actiontrail.cn-hangzhou.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'actiontrail.cn-shanghai.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'actiontrail.cn-shenzhen.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'actiontrail.cn-hongkong.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'actiontrail.ap-southeast-1.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'actiontrail.ap-southeast-2.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'actiontrail.ap-southeast-3.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'actiontrail.ap-southeast-5.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'actiontrail.ap-northeast-1.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'actiontrail.eu-west-1.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'actiontrail.us-west-1.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'actiontrail.us-east-1.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'actiontrail.eu-central-1.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'actiontrail.me-east-1.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'actiontrail.ap-south-1.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'actiontrail.cn-shanghai-finance-1.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'actiontrail.cn-north-2-gov-1.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'actiontrail.cn-wulanchabu.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'actiontrail.cn-nanjing.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'actiontrail.cn-heyuan.aliyuncs.com',
    ),
    54 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'actiontrail.cn-guangzhou.aliyuncs.com',
    ),
    55 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'actiontrail.ap-northeast-2.aliyuncs.com',
    ),
    56 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'actiontrail.ap-southeast-7.aliyuncs.com',
    ),
  ),
);